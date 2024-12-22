<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - TechServices</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .container-custom {
            display: flex;
            max-width: 1200px;
            width: 100%;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Section gauche : Image et texte */
        .left-section {
            flex: 1;
            background-image: url('{{ asset("images/WhatsApp Image 2024-12-22 à 10.40.16_f975e0e4.jpg") }}');
            background-size: cover;
            background-position: center;
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .left-section h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .left-section p {
            font-size: 1.1rem;
            margin-bottom: 10px;
        }

        /* Section droite : Formulaire */
        .right-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            background-color: #ffffff;
        }

        .form-container {
            width: 100%;
            max-width: 400px;
            background-color: #f9f9f9;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-5px);
        }

        .form-container h3 {
            margin-bottom: 30px;
            font-size: 1.8rem;
            color: #333;
            text-align: center;
            font-weight: bold;
        }

        .form-container p {
            font-size: 0.9rem;
            text-align: center;
            color: #666;
        }

        .form-container a {
            color: #008000;
            text-decoration: none;
            font-weight: bold;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
            font-size: 1rem;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #008000;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #008000;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #006400;
        }

        .small-text {
            font-size: 0.85rem;
            color: #888;
            text-align: center;
            margin-top: 20px;
        }

        .small-text a {
            color: #006400;
        }

        .small-text a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container-custom {
                flex-direction: column;
            }

            .left-section, .right-section {
                flex: none;
                width: 100%;
            }

            .left-section {
                height: 200px;
                background-position: center;
                text-align: center;
            }

            .right-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container-custom">
        <!-- Section gauche -->
        <div class="left-section">
            <h1>Bienvenue sur TechServices</h1>
            <p>Des services professionnels à portée de clic. Trouvez les meilleurs experts pour vos projets.</p>
        </div>

        <!-- Section droite -->
        <div class="right-section">
            <div class="form-container">
                <h3>Connectez-vous à votre compte</h3>
                <p>
                    Vous n'avez pas de compte ? <a href="{{ route('register') }}">Inscrivez-vous ici</a>.
                </p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <input type="text" name="username" placeholder="Nom d'utilisateur" required>
                    <input type="password" name="password" placeholder="Mot de passe" required>
                    <button type="submit">Se connecter</button>
                </form>
                <p class="small-text">
                    En vous inscrivant, vous acceptez les <a href="#">Conditions générales d'utilisation</a> de TechServices et de recevoir occasionnellement des e-mails de notre part. Veuillez lire notre <a href="#">Politique de confidentialité</a> pour savoir comment nous utilisons vos données personnelles.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
