<!-- craftsman-profile.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card profile-card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-header">
                        <div class="profile-photo">
                            <img src="{{ asset('images/profile-photo.jpg') }}" class="img-fluid" alt="Profile Photo">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-info">
                        <h2>{{ $user->prenom }} {{ $user->nom }}</h2>
                        <p><strong>Email:</strong> {{ $user->email }}</p>
                        <p><strong>City:</strong> {{ $user->ville }}</p>
                        <p><strong>Phone:</strong> {{ $user->phone }}</p>
                        <!-- Add more craftsman-specific information here -->
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="profile-body">
                        <h3>About Me</h3>
                        <p>{{ $user->bio }}</p>
                        <!-- Add more craftsman details here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
