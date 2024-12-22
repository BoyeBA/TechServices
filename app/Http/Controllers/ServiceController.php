<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\AdminLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    // Afficher tous les services
    public function index()
    {
        $services = Service::all(); // Récupérer tous les services
        return view('services.index', compact('services'));
    }

    // Afficher le formulaire pour créer un service
    public function create()
    {
        $this->authorizeAdmin();  // Vérifier si l'utilisateur est un administrateur
        return view('services.create');
    }

    // Enregistrer un nouveau service
    public function store(Request $request)
    {
        $this->authorizeAdmin();  // Vérifier si l'utilisateur est un administrateur

        // Validation des données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Créer un nouveau service
        $service = Service::create($request->only('title', 'description', 'price'));

        // Ajouter un log pour l'administration
        AdminLog::create([
            'admin_id' => Auth::id(),
            'action' => 'Ajout d\'un service : ' . $service->title,
            'target_id' => $service->id,
        ]);

        // Redirection avec message de succès
        return redirect()->route('services.index')->with('success', 'Service ajouté avec succès');
    }

    // Afficher le formulaire d'édition d'un service existant
    public function edit(Service $service)
    {
        $this->authorizeAdmin();  // Vérifier si l'utilisateur est un administrateur
        return view('services.edit', compact('service'));
    }

    // Mettre à jour un service existant
    public function update(Request $request, Service $service)
    {
        $this->authorizeAdmin();  // Vérifier si l'utilisateur est un administrateur

        // Validation des données du formulaire
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Mise à jour du service
        $service->update($request->only('title', 'description', 'price'));

        // Ajouter un log pour l'administration
        AdminLog::create([
            'admin_id' => Auth::id(),
            'action' => 'Modification d\'un service : ' . $service->title,
            'target_id' => $service->id,
        ]);

        // Redirection avec message de succès
        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès');
    }

    // Supprimer un service
    public function destroy(Service $service)
    {
        $this->authorizeAdmin();  // Vérifier si l'utilisateur est un administrateur

        // Suppression du service
        $service->delete();

        // Ajouter un log pour l'administration
        AdminLog::create([
            'admin_id' => Auth::id(),
            'action' => 'Suppression d\'un service : ' . $service->title,
            'target_id' => $service->id,
        ]);

        // Redirection avec message de succès
        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès');
    }

    // Vérifier si l'utilisateur est un administrateur
    private function authorizeAdmin()
    {
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403, 'Vous n\'avez pas l\'autorisation pour cette action.');
        }
    }
    
}
