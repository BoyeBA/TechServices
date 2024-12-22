<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    /**
     * Exécuter les seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ajouter des services à la base de données
        Service::create([
            'name' => 'Développement Web',
            'description' => 'Création de sites web professionnels et adaptés à vos besoins.',
            'price' => 50000,
        ]);

        Service::create([
            'name' => 'Design Graphique',
            'description' => 'Design de logos, affiches, flyers et plus encore.',
            'price' => 30000,
        ]);

        Service::create([
            'name' => 'Rédaction de Contenu',
            'description' => 'Rédaction de contenu optimisé pour SEO et adapté à votre audience.',
            'price' => 20000,
        ]);
    }
}
