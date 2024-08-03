@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Modifier vos informations</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('update-craftsman') }}" method="POST" class="edit-craftsman-form">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" value="{{ $craftsman->prenom }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="{{ $craftsman->nom }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $craftsman->email }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="ville" class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville" id="ville" value="{{ $craftsman->ville }}" required>
                </div>

                <div class="form-group mb-3">
                    <label for="phone" class="form-label">Téléphone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $craftsman->phone }}" required>
                </div>

                <!-- Add more fields as needed -->
                
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary btn-lg">Enregistrer</button>
                    <a href="{{ route('craftsman.index') }}" class="btn btn-secondary btn-lg ms-2">Annuler</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
