@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Modifier vos informations</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('update-craftsman') }}" method="POST" class="edit-craftsman-form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="prenom">Prénom</label>
                    <input type="text" class="form-control" name="prenom" id="prenom" value="{{ $craftsman->prenom }}" required>
                </div>
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="{{ $craftsman->nom }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $craftsman->email }}" required>
                </div>
                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" name="ville" id="ville" value="{{ $craftsman->ville }}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $craftsman->phone }}" required>
                </div>
                <!-- Add more fields as needed -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
