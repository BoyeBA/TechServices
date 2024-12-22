<?php
namespace App\Http\Controllers;

use App\Models\Service; // Assurez-vous que le modèle Service est utilisé

class HomeController extends Controller
{
    public function index()
    {
        // Remplacez ceci par la logique pour récupérer les services populaires depuis votre base de données
        $popularServices = Service::where('is_popular', true)->get(); // Exemple de récupération des services populaires

        // Passez la variable à la vue
        return view('home', compact('popularServices'));
    }
}
