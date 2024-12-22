@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le Service</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $service->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $service->price }}" required>
        </div>

        <div class="form-group">
            <label for="delivery_time">Temps de livraison</label>
            <input type="number" class="form-control" id="delivery_time" name="delivery_time" value="{{ $service->delivery_time }}" required>
        </div>

        <div class="form-group">
            <label for="type">Type de service</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $service->type }}" required>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
</div>
@endsection
