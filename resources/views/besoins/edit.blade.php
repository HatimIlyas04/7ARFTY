@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Modifier les Besoins</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('update-besoins', $besoin->id) }}" method="POST" class="edit-besoins-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="titre">Titre</label>
                    <input type="text" class="form-control" name="titre" id="titre" value="{{ $besoin->titre }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="4" required>{{ $besoin->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="categorie">Catégorie</label>
                    <select class="form-control" name="categorie" id="categorie" required>
                        <option value="">Sélectionner une catégorie</option>
                        <option value="Cuisine" {{ $besoin->categorie == 'Cuisine' ? 'selected' : '' }}>Cuisine</option>
                        <option value="Construction" {{ $besoin->categorie == 'Construction' ? 'selected' : '' }}>Construction</option>
                        <!-- Add more categories here -->
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
