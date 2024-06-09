<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/services-section.css') }}">
</head>
<body style="color: black">

<section class="services-section">
    <div class="container">
        <h2 class="text-center mb-4">De quoi avez-vous besoin?</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="card service">
                    <img src="{{ asset('images/argile.jpeg') }}" class="card-img-top" alt="argile">
                    <div class="card-body">
                        <h5 class="card-title">Argile</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card service">
                    <img src="{{ asset('images/cuir.jpg') }}" class="card-img-top" alt="Cuir">
                    <div class="card-body">
                        <h5 class="card-title">Cuir</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card service">
                    <img src="{{ asset('images/boulanger.jpg') }}" class="card-img-top" alt="Boulanger">
                    <div class="card-body">
                        <h5 class="card-title">Boulanger</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card service">
                    <img src="{{ asset('images/menuisier.png') }}" class="card-img-top" alt="Menuisier">
                    <div class="card-body">
                        <h5 class="card-title">Menuisier</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
