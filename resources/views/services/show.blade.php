@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $service->title }}</h1>
    <p>{{ $service->description }}</p>
    <p><strong>Prix:</strong> {{ $service->price }} FCFA</p>
    <p><strong>Temps de livraison:</strong> {{ $service->delivery_time }} jours</p>
    <p><strong>Type:</strong> {{ $service->type }}</p>

    <a href="{{ route('services.index') }}" class="btn btn-primary">Retour à la liste</a>
</div>
@endsection
