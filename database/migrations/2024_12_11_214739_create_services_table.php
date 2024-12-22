<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id(); // ID principal
            $table->string('title'); // Titre du service
            $table->text('description'); // Description détaillée
            $table->decimal('price', 8, 2); // Prix du service
            $table->integer('delivery_time'); // Temps de livraison (en jours)
            $table->string('type'); // Type de service (catégorie)
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Référence à l'utilisateur (prestataire)
            $table->timestamps(); 
            // Horodatage de création et mise à jour

            // Définir une clé étrangère pour `user_id`
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
