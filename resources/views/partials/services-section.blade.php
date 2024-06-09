<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        body {
            color: black;
            font-family: Arial, sans-serif;
        }

        .services-section {
            padding: 40px 0;
        }

        .service {
            position: relative;
            overflow: hidden;
            margin-bottom: 40px;
            cursor: pointer;
        }

        .service img {
            max-width: 100%;
            height: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .service:hover img {
            transform: scale(1.05);
        }

        .service .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service:hover .overlay {
            opacity: 1;
        }

        .service .overlay-content {
            text-align: center;
        }

        .service .overlay-content h5 {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

<section class="services-section">
    <div class="container">
        <h2 class="text-center mb-4">De quoi avez-vous besoin?</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/argile.jpeg') }}" class="img-fluid" alt="argile">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Argile</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/cuir.jpg') }}" class="img-fluid" alt="Cuir">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Cuir</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/boulanger.jpg') }}" class="img-fluid" alt="Boulanger">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Boulanger</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service">
                    <img src="{{ asset('images/menuisier.png') }}" class="img-fluid" alt="Menuisier">
                    <div class="overlay">
                        <div class="overlay-content">
                            <h5>Menuisier</h5>
                        </div>
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
