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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // ID principal
            $table->unsignedBigInteger('service_id'); // Référence au service
            $table->unsignedBigInteger('client_id'); // Référence au client
            $table->string('status')->default('pending'); // Statut de la commande : pending, in progress, completed, cancelled
            $table->timestamps(); // Créé à / Mis à jour à

            // Clés étrangères
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
