<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemandeDocumentController extends Controller
{
    public function index()
    {
        return view('etudiantPortail.demandeDocument');
    }

    // Définissez d'autres méthodes selon vos besoins
}

