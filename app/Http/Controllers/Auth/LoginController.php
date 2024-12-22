<?php
// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Redirection après la connexion.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Affiche le formulaire de connexion.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        // Vérifie si l'utilisateur est déjà connecté
        if (Auth::check()) {
            return redirect($this->redirectTo); // Redirige vers la page d'accueil
        }

        // Affiche le formulaire de connexion
        return view('auth.login');
    }

    /**
     * Authentifie l'utilisateur.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Valider les données du formulaire
        $credentials = $request->only('email', 'password');

        // Si l'utilisateur est authentifié, redirige vers la page d'accueil
        if (Auth::attempt($credentials)) {
            return redirect()->intended($this->redirectTo);
        }

        // Si la tentative échoue, redirige vers la page de connexion avec un message d'erreur
        return back()->withErrors([
            'email' => 'Les informations d\'identification sont invalides.',
        ]);
    }

    /**
     * Déconnecte l'utilisateur.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

