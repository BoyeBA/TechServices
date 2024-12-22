<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PrestataireController;
use App\Http\Controllers\Auth\RegisterController;

// Routes d'authentification
Auth::routes();

// Route pour la page d'accueil
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');


// Routes pour la gestion des services
Route::middleware(['auth'])->group(function () {
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');
    Route::get('/services/{id}/edit', [ServiceController::class, 'edit'])->name('services.edit');
    Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');
});
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');


// Route pour afficher la page "Devenir Prestataire"
Route::get('/devenir-prestataire', [PrestataireController::class, 'create'])->name('devenir-prestataire');

// Route pour traiter le formulaire (POST)
Route::post('/devenir-prestataire', [PrestataireController::class, 'store'])->name('prestataire.store');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register');
