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
        Schema::create('admin_logs', function (Blueprint $table) {
            $table->id(); // ID principal
            $table->unsignedBigInteger('admin_id'); // Référence à l'administrateur
            $table->string('action'); // Description de l'action effectuée
            $table->unsignedBigInteger('target_id')->nullable(); // ID de la cible (utilisateur, service, etc.)
            $table->timestamps(); // Créé à / Mis à jour à

            // Clé étrangère
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_logs');
    }
};
