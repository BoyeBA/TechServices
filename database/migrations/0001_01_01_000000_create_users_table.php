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
        // Table `users`
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID utilisateur
            $table->string('name'); // Nom complet
            $table->string('email')->unique(); // Adresse email unique
            $table->timestamp('email_verified_at')->nullable(); // Vérification de l'email
            $table->string('password'); // Mot de passe crypté
            $table->string('role')->default('client'); // Rôle de l'utilisateur : client, prestataire, admin
            $table->rememberToken(); // Token pour "Remember me"
            $table->timestamps(); // Créé à / Mis à jour à
        });

        // Table `password_reset_tokens`
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Email pour récupérer le mot de passe
            $table->string('token'); // Jeton de récupération
            $table->timestamp('created_at')->nullable(); // Date de création du jeton
        });

        // Table `sessions`
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // ID de session
            $table->foreignId('user_id')->nullable()->index(); // Référence utilisateur (facultative)
            $table->string('ip_address', 45)->nullable(); // Adresse IP de l'utilisateur
            $table->text('user_agent')->nullable(); // Informations sur l'agent utilisateur (navigateur)
            $table->longText('payload'); // Données de session
            $table->integer('last_activity')->index(); // Dernière activité (timestamp)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
