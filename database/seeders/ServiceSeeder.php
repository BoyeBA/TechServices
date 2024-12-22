<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Exécuter le seeder.
     *
     * @return void
     */
    public function run()
    {
        // Ajouter des services à la base de données
        Service::create([
            'title' => 'Développement Web',  // Utiliser 'title' au lieu de 'name'
            'description' => 'Création de sites web professionnels et adaptés à vos besoins.',
            'price' => 50000, // Prix en FCFA
            'delivery_time' => 10, // Temps de livraison en jours
            'type' => 'Web',
            'user_id' => 1, // Assurez-vous que l'utilisateur avec ID 1 existe
        ]);

        Service::create([
            'title' => 'Design Graphique',  // Utiliser 'title' au lieu de 'name'
            'description' => 'Design de logos, affiches, flyers et plus encore.',
            'price' => 30000,
            'delivery_time' => 7,
            'type' => 'Design',
            'user_id' => 1, // Assurez-vous que l'utilisateur avec ID 1 existe
        ]);

        Service::create([
            'title' => 'Rédaction de Contenu',  // Utiliser 'title' au lieu de 'name'
            'description' => 'Rédaction de contenu optimisé pour SEO et adapté à votre audience.',
            'price' => 20000,
            'delivery_time' => 5,
            'type' => 'Rédaction',
            'user_id' => 1, // Assurez-vous que l'utilisateur avec ID 1 existe
        ]);
    }
}
