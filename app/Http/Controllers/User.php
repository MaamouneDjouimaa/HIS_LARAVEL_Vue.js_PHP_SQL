<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Afficher le formulaire de création d'utilisateur
    public function showRegistrationForm()
    {
        return view('user.registration');
    }

    // Gérer la soumission du formulaire de création d'utilisateur
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $validatedData['password'] = Hash::make($request->password);

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect('/dashboard');
    }

    // Autres méthodes du contrôleur...
}
