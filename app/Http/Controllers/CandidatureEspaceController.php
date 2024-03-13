<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Candidat;

use App\Models\DemandeAdmission;

use Illuminate\Http\Request;

class CandidatureEspaceController extends Controller
{

    public function index ()
    {
        return view("espaceCandidatureStat");
    }

    public function espace_candidature ($id)
    {
        $email = 'aitmokhtarmohamedamine20@gmail.com';
        $user = User::where('email', $email)->first();
        $candidat = $user->Candidat;
        $demandeAdmission = $candidat->demandeAdmission;
        return view("espaceCandidature", compact('candidat', 'user', 'demandeAdmission'));
    }
}
