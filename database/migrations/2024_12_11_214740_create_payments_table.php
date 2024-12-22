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
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // ID principal
            $table->unsignedBigInteger('order_id'); // Référence à la commande
            $table->decimal('amount', 8, 2); // Montant du paiement
            $table->string('payment_method'); // Méthode de paiement (ex : carte, PayPal)
            $table->string('status')->default('pending'); // Statut du paiement : pending, completed, failed
            $table->timestamps(); // Créé à / Mis à jour à

            // Clé étrangère
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
