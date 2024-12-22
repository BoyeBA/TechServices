@extends('layouts.app')

@section('content')
 <!-- Section principale avec une image de fond et un texte d'accueil -->
<section class="hero text-white text-center py-5" style="position: relative; background: url('https://blog.hubspot.fr/hubfs/ThinkstockPhotos-486916254-029002-edited.jpg') center center no-repeat; background-size: cover;">
    <!-- Overlay (couche semi-transparente verte pour améliorer la lisibilité du texte) -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 128, 0, 0.5);"></div>
    
    <div class="container position-relative">
        <h1 class="display-4 fw-bold">Bienvenue sur TechServices</h1>
        <p class="lead">Découvrez des prestataires qualifiés pour tous vos besoins professionnels en un clic.</p>
        <a href="#services" class="btn btn-light btn-lg mt-3">Explorer les services</a>
    </div>
</section>



    <!-- Section des catégories -->
    <section class="categories py-5">
        <div class="container">
            <h2 class="text-center mb-4" style="color: #28a745;">Nos Catégories</h2>
            <div class="row justify-content-center">
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Graphisme & Design</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Programmation & Tech</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Marketing digital</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Vidéo & Animation</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Rédaction & Traduction</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Musique & Audio</a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Business</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Finance</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Services d'IA</a>
                </div>
                <div class="col-md-2 mb-3">
                    <a href="#" class="btn btn-outline-success btn-block">Photographe</a>
                </div>
            </div>
        </div>
        
    </section>
    <section class="services-list py-5">
        <div class="container">
            <h2 class="text-center mb-4" style="color: #28a745;">Nos Services Populaires</h2>
            <div class="row">
                
                <!-- Service 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card" style="border-radius: 8px; overflow: hidden;">
                        <img src="{{ asset('images/The Difference between Web Designer, Web Developer, and Web Programmer.jpg') }}" class="card-img-top" alt="Service 2" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Programmation & Tech</h5>
                            <p class="card-text">Des services techniques pour vos projets de développement, y compris la création de sites web, d'applications, etc.</p>
                            <a href="#" class="btn btn-success">Explorer</a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card" style="border-radius: 8px; overflow: hidden;">
                        <img src="{{ asset('images/erenumerique.net_Entreprise_Comment-associer-le-marketing-digital-et-direct-1024x683.jpg') }}" class="card-img-top" alt="Service 3" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Marketing Digital</h5>
                            <p class="card-text">Augmentez la visibilité de votre entreprise avec des services de marketing digital, incluant le SEO, la gestion des réseaux sociaux, etc.</p>
                            <a href="#" class="btn btn-success">Explorer</a>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-4 mb-4">
                    <div class="card" style="border-radius: 8px; overflow: hidden;">
                        <img src="{{ asset('images/videoAnim.gif') }}" class="card-img-top" alt="Service 4" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Vidéo & Animation</h5>
                            <p class="card-text">Créez des vidéos et animations professionnelles pour vos campagnes marketing ou contenu créatif.</p>
                            <a href="#" class="btn btn-success">Explorer</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

    <!-- Footer avec fond vert -->
    <footer class="bg-success text-white text-center py-4">
        <div class="container">
            <p>&copy; 2024 TechServices. Tous droits réservés.</p>
            <p>
                <a href="#" class="text-white">Mentions légales</a> |
                <a href="#" class="text-white">Politique de confidentialité</a>
            </p>
            <!-- Réseaux sociaux -->
            <div class="social-icons mt-3">
                <a href="https://www.instagram.com" target="_blank" class="text-white mx-2">
                    <i class="bi bi-instagram" style="font-size: 24px;"></i>
                </a>
                <a href="https://www.tiktok.com" target="_blank" class="text-white mx-2">
                    <i class="bi bi-tiktok" style="font-size: 24px;"></i>
                </a>
                <a href="https://www.facebook.com" target="_blank" class="text-white mx-2">
                    <i class="bi bi-facebook" style="font-size: 24px;"></i>
                </a>
                <a href="https://www.twitter.com" target="_blank" class="text-white mx-2">
                    <i class="bi bi-twitter" style="font-size: 24px;"></i>
                </a>
               
            </div>
        </div>
    </footer>
@endsection
