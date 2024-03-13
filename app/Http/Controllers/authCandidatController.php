<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;



class AuthCandidatController extends Controller
{
    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('candidat.connexionCandidat');
    }

    // Gérer la soumission du formulaire de connexion
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->motDePasse)) {
            $candidat = Candidat::where('idUser', $user->idUser)->first();

            if ($candidat) {
                Auth::guard('candidat')->login($user);

                return redirect()->intended('/Candidature');
            }
        }

        return redirect()->back()->withErrors([
            'email' => 'Il n\'y a pas de compte avec cet email.',
        ]);

    }

    // Afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('candidat.inscriptionCandidat');
    }

    // Gérer la soumission du formulaire d'inscription
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'email' => $validatedData['email'],
            'motDePasse' => Hash::make($validatedData['password']),
        ]);

        Candidat::create([
            'nom' => null,
            'prenom' => null,
            'id' => $user->idUser, // Utilisez la clé "id" à la place de "idUser"
        ]);

        Auth::guard('candidat')->login($user);

        return redirect('/Espace_Candidature');
    }

    // Gérer la connexion avec Google
public function loginWithGoogle()
{
    return Socialite::driver('google')->redirect();
}

// Rediriger l'utilisateur vers la page de connexion Google
public function redirectToGoogle()
{
    return Socialite::driver('google')->redirect();
}

// Gérer la réponse de Google après l'authentification
public function handleGoogleCallback()
{
    $googleUser = Socialite::driver('google')->user();

    // Vérifiez si l'utilisateur existe déjà dans la base de données
    $user = User::where('email', $googleUser->email)->first();

    if (!$user) {
        // L'utilisateur n'existe pas, créez-le
        $user = User::create([
            'email' => $googleUser->email,
            'motDePasse' => Hash::make(Str::random(8)),
        ]);

        Candidat::create([
            'nom' => null,
            'prenom' => null,
            'id' => $user->idUser, // Utilisez la clé "id" à la place de "idUser"
        ]);

    }

    // Connectez l'utilisateur
    Auth::guard('candidat')->login($user);

    return redirect('/Espace_Candidature');
}

// Autres méthodes du contrôleur...


}
