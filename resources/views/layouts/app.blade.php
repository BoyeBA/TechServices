<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechServices</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Bootstrap Icons -->
    
    <!-- Google Font (Poppins pour un look moderne et professionnel) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    
    <!-- Custom CSS for navbar active and hover states -->
    <style>
        /* Polices personnalisées */
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Style pour le logo TechServices */
        .navbar-brand {
            font-size: 2rem; /* Augmenter la taille de la police du logo */
            font-weight: 700; /* Mettre le texte en gras */
            color: #1e5e3e; /* Couleur verte professionnelle */
            letter-spacing: 1px; /* Espacement des lettres pour un effet plus épuré */
            display: flex;
            align-items: center;
            transition: color 0.3s ease, transform 0.3s ease; /* Transition douce pour la couleur et la transformation */
            text-transform: uppercase; /* Mettre les lettres en majuscules pour un effet plus moderne */
        }

        .navbar-brand i {
            margin-right: 12px; /* Ajouter un peu plus d'espace entre l'icône et le texte */
            font-size: 2.8rem; /* Icône plus grande */
            color: #28a745; /* Couleur verte pour l'icône */
            transition: transform 0.3s ease; /* Animation pour l'icône */
        }

        .navbar-brand:hover {
            color: #28a745; /* Change la couleur du texte au survol */
            transform: scale(1.1); /* Légère animation de mise à l'échelle du logo */
        }

        .navbar-brand:hover i {
            transform: rotate(15deg); /* Rotation subtile de l'icône au survol */
        }

        /* Effet de fond pour l'icône */
        .navbar-brand i {
            background: #fff; /* Fond blanc pour l'icône */
            border-radius: 50%; /* Icône circulaire */
            padding: 10px; /* Ajouter de l'espace autour de l'icône */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Légère ombre portée pour un effet plus professionnel */
        }

        /* Style des éléments de la navbar */
        .nav-item {
            margin-left: 20px; /* Ajouter un espace entre les éléments */
        }

        .nav-link {
            transition: color 0.3s ease;
            font-size: 1.1rem; /* Taille de police uniforme pour tous les liens */
        }

        .nav-link:hover {
            color: #28a745 !important; /* Couleur verte au survol */
        }

        .nav-link.active {
            color: #28a745 !important;
            font-weight: bold;
        }

        .navbar-toggler-icon {
            background-color: #28a745; /* Icône de menu hamburger en vert */
        }

        /* Centrage vertical des éléments de la navbar */
        .navbar-nav {
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container-fluid">
            <!-- Logo avec icône -->
            <a class="navbar-brand" href="#">
                <i class="bi bi-laptop"></i> <!-- Icône 'laptop' pour représenter les services technologiques -->
                TechServices
            </a>
            
            <!-- Toggler pour mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{ url('services') }}" id="servicesLink">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('explorer') ? 'active' : '' }}" href="{{ url('explorer') }}" id="exploreLink">Explorer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('devenir-prestataire') ? 'active' : '' }}" href="{{ url('devenir-prestataire') }}" id="becomeProviderLink">Devenir Prestataire</a>
                    </li>
                </ul>
                
                <!-- Recherche -->
                <form class="d-flex me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Rechercher des services..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </form>

                <!-- Boutons -->
                <div class="d-flex align-items-center">
                    <!-- Si l'utilisateur est connecté -->
                    @auth
                        <a href="{{ route('profile') }}" class="btn btn-outline-success me-2">
                            <i class="bi bi-person-circle"></i> Mon Profil
                        </a>
                        <a href="{{ route('logout') }}" class="btn btn-outline-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i> Se déconnecter
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-success me-2">
                            <i class="bi bi-box-arrow-in-right"></i> Se connecter
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-success">
                            <i class="bi bi-person-plus-fill"></i> S'inscrire
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenu de la page -->
    @yield('content')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
