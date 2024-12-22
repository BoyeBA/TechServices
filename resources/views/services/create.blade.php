@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Ajouter un Nouveau Service</h1>

    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom du Service</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Prix (en FCFA)</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <button type="submit" class="btn btn-success">Ajouter le Service</button>
    </form>
</div>
@endsection
