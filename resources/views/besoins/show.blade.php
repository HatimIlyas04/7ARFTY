@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mt-5">Liste des besoins</h2>
    <div class="row mt-4">
        @foreach($besoins as $besoin)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $besoin->titre }}</h5>
                    <p class="card-text">{{ $besoin->description }}</p>
                    <span class="badge bg-primary">{{ $besoin->categorie }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
