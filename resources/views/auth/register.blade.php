<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - TechServices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Général */
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #ffffff, #f0f0f0); /* Fond blanc */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-custom {
            display: flex;
            flex-direction: row;
            max-width: 1100px;
            width: 100%;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Section gauche : Image et texte */
        .left-section {
            flex: 1;
            background-image: url('{{ asset("images/WhatsApp Image 2024-12-22 à 10.40.16_f975e0e4.jpg") }}');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            padding: 40px;
            box-shadow: inset 0 0 300px rgba(0, 0, 0, 0.5);
        }

        .left-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
        }

        .left-section p {
            font-size: 1.2rem;
            line-height: 1.5;
        }

        /* Section droite : Formulaire */
        .right-section {
            flex: 1;
            background-color: #ffffff; /* Fond blanc */
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        /* En-tête du formulaire */
        .form-container h3 {
            text-align: center;
            font-size: 2.5rem;
            color: #008000;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        /* Champs de saisie */
        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 15px;
            font-size: 1rem;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .form-container input[type="text"]:focus,
        .form-container input[type="email"]:focus,
        .form-container input[type="password"]:focus {
            border-color: #00a859;
            outline: none;
        }

        /* Bouton d'inscription */
        .form-container button {
            width: 100%;
            padding: 15px;
            background-color: #00a859;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-container button:hover {
            background-color: #007a3d;
        }

        /* Sélection du rôle */
        .role-selection {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .role-selection label {
            background-color: #f0f0f0;
            padding: 15px 20px;
            border-radius: 10px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .role-selection input[type="radio"] {
            display: none;
        }

        .role-selection input[type="radio"]:checked + label {
            background-color: #00a859;
            color: white;
        }

        .role-selection label:hover {
            background-color: #e0e0e0;
        }

        /* Lien politique de confidentialité */
        .small-text {
            font-size: 0.9rem;
            color: #666;
            text-align: center;
        }

        .small-text a {
            color: #00a859;
            text-decoration: none;
        }

        .small-text a:hover {
            text-decoration: underline;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container-custom {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container-custom">
        <!-- Section gauche -->
        <div class="left-section">
            <div>
                <h1>Bienvenue sur TechServices</h1>
                <p>Rejoignez notre plateforme pour trouver des prestataires de services qualifiés ou proposez vos services en tant qu'expert.</p>
            </div>
        </div>

        <!-- Section droite : Formulaire -->
        <div class="right-section">
            <div class="form-container">
                <!-- Lien de connexion en haut -->
                <p class="small-text text-center">
                    Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous ici</a>
                </p>

                <h3>Créez votre compte</h3>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <!-- Champs de saisie -->
                    <input type="text" name="name" placeholder="Nom complet" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <input type="password" name="password_confirmation" placeholder="Confirmer le mot de passe" required>

                    <!-- Sélection du rôle -->
                    <div class="role-selection">
                        <div>
                            <input type="radio" id="client" name="role" value="client" required>
                            <label for="client">
                                <i class="fas fa-user"></i> Client
                            </label>
                        </div>
                        <div>
                            <input type="radio" id="prestataire" name="role" value="prestataire" required>
                            <label for="prestataire">
                                <i class="fas fa-briefcase"></i> Prestataire
                            </label>
                        </div>
                    </div>

                    <button type="submit">S'inscrire</button>
                </form>

                <!-- Politique de confidentialité en bas -->
                <p class="small-text mt-3">
                    En vous inscrivant, vous acceptez notre <a href="/privacy-policy" target="_blank">politique de confidentialité</a>.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
