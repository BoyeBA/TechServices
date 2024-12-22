@extends('layouts.app')

@section('content')

<!-- Bannière Devenir Prestataire avec Image -->
<section class="hero-banner text-white text-center py-5" style="position: relative; background: url('https://th.bing.com/th/id/R.582730232f84f1169c775880385140e2?rik=59qKV51JEWarvQ&pid=ImgRaw&r=0') center center no-repeat; background-size: cover;">
    <!-- Overlay (couche semi-transparente avec une teinte verte) -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 128, 0, 0.5);"></div>
    
    <div class="container position-relative">
        <h1 class="display-4 fw-bold">Devenez Prestataire sur TechServices</h1>
        <p class="lead">Transformez vos compétences en revenus en rejoignant notre plateforme de prestataires de services.</p>
    </div>
</section>




<!-- Section Explications et Avantages -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-success fw-bold mb-4">Pourquoi devenir prestataire sur TechServices ?</h2>
        <div class="row">
            <!-- Accédez à une large audience -->
            <div class="col-md-4 text-center mb-4">
                <img src="https://www.rjce.fr/wp-content/uploads/2022/02/media-comment-connaitre-les-attentes-de-votre-audience.jpg" alt="Large audience" class="img-fluid mb-3">
                <h5>Accédez à une large audience</h5>
                <p>Notre plateforme attire des milliers de clients chaque mois, prêts à acheter des services dans divers domaines.</p>
            </div>

            <!-- Travaillez à votre rythme -->
            <div class="col-md-4 text-center mb-4">
                <img src="https://images.pexels.com/photos/3184465/pexels-photo-3184465.jpeg" alt="Flexible work" class="img-fluid mb-3">
                <h5>Travaillez à votre rythme</h5>
                <p>Devenez votre propre patron et gérez vos horaires selon vos préférences.</p>
            </div>

            <!-- Paiement sécurisé -->
            <div class="col-md-4 text-center mb-4">
                <img src="https://www.awinstall.com/wp-content/uploads/2023/09/gestion-paiement.jpg" alt="Secure payment" class="img-fluid mb-3">
                <h5>Paiement sécurisé</h5>
                <p>Nous garantissons des paiements sécurisés et rapides pour tous les prestataires.</p>
            </div>
        </div>
    </div>
</section>


<!-- Formulaire Devenir Prestataire -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center text-success fw-bold mb-4">Rejoignez notre communauté de prestataires</h2>
        <p class="text-center mb-5">Nous recherchons des experts dans divers domaines pour offrir des services de qualité à nos clients. Remplissez le formulaire ci-dessous pour devenir prestataire.</p>

        <!-- Message de succès -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('prestataire.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nom Complet</label>
                    <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" id="phone" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                    @error('phone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="service_category" class="form-label">Catégorie de Service</label>
                    <select id="service_category" name="service_category" class="form-select @error('service_category') is-invalid @enderror" required>
                        <option value="">Sélectionnez une catégorie</option>
                        <option value="Graphisme & Design" {{ old('service_category') == 'Graphisme & Design' ? 'selected' : '' }}>Graphisme & Design</option>
                        <option value="Programmation & Tech" {{ old('service_category') == 'Programmation & Tech' ? 'selected' : '' }}>Programmation & Tech</option>
                        <option value="Marketing Digital" {{ old('service_category') == 'Marketing Digital' ? 'selected' : '' }}>Marketing Digital</option>
                        <option value="Rédaction & Traduction" {{ old('service_category') == 'Rédaction & Traduction' ? 'selected' : '' }}>Rédaction & Traduction</option>
                        <option value="Musique & Audio" {{ old('service_category') == 'Musique & Audio' ? 'selected' : '' }}>Musique & Audio</option>
                    </select>
                    @error('service_category')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label">Description de votre expertise</label>
                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="4" required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg">Devenir Prestataire</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Témoignages -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-success fw-bold mb-4">Témoignages de prestataires satisfaits</h2>
        <div class="row">
            <div class="col-md-4 text-center mb-4">
                <img src="https://via.placeholder.com/150" alt="Témoignage 1" class="rounded-circle mb-3">
                <p>"TechServices m'a permis de travailler avec des clients passionnants et d'augmenter mes revenus. L'interface est facile à utiliser et les paiements sont rapides !"</p>
                <p><strong>Mamoudou Boye BA</strong></p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <img src="https://via.placeholder.com/150" alt="Témoignage 2" class="rounded-circle mb-3">
                <p>"Une plateforme de qualité pour les freelances. J'adore la flexibilité et la diversité des projets auxquels j'ai accès."</p>
                <p><strong>Ndiamé Laye Guèye</strong></p>
            </div>
            <div class="col-md-4 text-center mb-4">
                <img src="https://via.placeholder.com/150" alt="Témoignage 3" class="rounded-circle mb-3">
                <p>"Devenir prestataire sur TechServices a vraiment boosté ma carrière. Je recommande vivement à tous les freelances."</p>
                <p><strong>Ibrahima Diallo</strong></p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-success text-white py-4">
    <div class="container text-center">
        <p>&copy; {{ date('Y') }} TechServices. Tous droits réservés.</p>
        <p>
            <a href="#" class="text-white">Mentions légales</a> | <a href="#" class="text-white">Confidentialité</a>
        </p>
        <div class="social-icons mt-3">
            <a href="https://www.instagram.com" target="_blank" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
            <a href="https://www.tiktok.com" target="_blank" class="text-white mx-2"><i class="bi bi-tiktok"></i></a>
            <a href="https://www.facebook.com" target="_blank" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
            <a href="https://www.twitter.com" target="_blank" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
        </div>
    </div>
</footer>

@endsection
