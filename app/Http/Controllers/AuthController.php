<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->etudiant) {
                // L'utilisateur est un étudiant
                return redirect()->intended('/etudiantPortail');
            } elseif ($user->personnelAdministratif) {
                // L'utilisateur est un personnel administratif
                return redirect()->intended('/bureauPortail');
            }
        }

        // Les informations d'identification sont invalides
        return back()->withInput()->withErrors(['email' => 'Les informations d\'identification sont invalides.']);
    }
}
