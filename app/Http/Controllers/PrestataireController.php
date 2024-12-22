<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestataireController extends Controller
{
    // Méthode pour afficher le formulaire "Devenir Prestataire"
    public function create()
    {
        return view('devenir-prestataire');
    }

    // Méthode pour traiter la soumission du formulaire
    public function store(Request $request)
    {
        // Validation des données envoyées
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'service_category' => 'required|string',
            'description' => 'required|string|max:1000',
        ]);

        // Logique pour sauvegarder le prestataire dans la base de données (si nécessaire)
        // Prestataire::create($validated);

        // Redirection avec un message de succès
        return redirect()->route('devenir-prestataire')->with('success', 'Votre candidature a été envoyée avec succès.');
    }
}
