@extends('layouts.app')

@section('content')
 <!-- Section des services avec image de fond et texte -->
<section class="services-banner text-white text-center py-5" style="position: relative; background: url('https://th.bing.com/th/id/OIG1.p4y2YT1NIkj5yQFi5X0E?w=286&h=286&c=6&r=0&o=5&dpr=1.3&pid=ImgGn') center center no-repeat; background-size: cover;">
    <!-- Overlay (couche semi-transparente avec une teinte verte) -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 128, 0, 0.5);"></div>
    
    <div class="container position-relative">
        <h1 class="display-4 fw-bold">Explorez Nos Services Diversifiés</h1>
        <p class="lead">Découvrez nos services phares, adaptés à vos besoins professionnels.</p>
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
    <!-- Section des services -->
    <section class="services-list py-5">
        <div class="container">
            <h2 class="text-center mb-4" style="color: #28a745;">Nos Services Populaires</h2>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card" style="border-radius: 8px; overflow: hidden;">
                        <img src="{{ asset('images/design-graphique-2d-communication-visuelle-graphisme-banniere-o6bd4bud60fmn85hgyhjq2xqizfdor0q3zqmty4vc0.jpg') }}" class="card-img-top" alt="Service 1" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Graphisme & Design</h5>
                            <p class="card-text">Des services créatifs pour vos besoins graphiques, y compris la conception de logos, la publicité, et bien plus encore.</p>
                            <a href="#" class="btn btn-success">Explorer</a>
                        </div>
                    </div>
                </div>

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

                <!-- Service 5 -->
                <div class="col-md-4 mb-4">
                    <div class="card" style="border-radius: 8px; overflow: hidden;">
                        <img src="{{ asset('images/Logo_MRT_A_661x1212.jpeg') }}" class="card-img-top" alt="Service 5" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Rédaction & Traduction</h5>
                            <p class="card-text">Des rédacteurs et traducteurs professionnels pour tous vos besoins en contenu écrit multilingue.</p>
                            <a href="#" class="btn btn-success">Explorer</a>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-4 mb-4">
                    <div class="card" style="border-radius: 8px; overflow: hidden;">
                        <img src="{{ asset('images/la-musique-assistee-par-ordinateur-decryptage_blog2.jpg') }}" class="card-img-top" alt="Service 6" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Musique & Audio</h5>
                            <p class="card-text">Obtenez des services professionnels pour créer de la musique, des effets sonores ou des podcasts de qualité.</p>
                            <a href="#" class="btn btn-success">Explorer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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
