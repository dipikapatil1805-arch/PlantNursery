<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $plant->name }} - Care Guide</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4fff4;
        }

        .plant-card{
            border-radius:15px;
        }

        .plant-image{
            width:100%;
            height:350px;
            object-fit:cover;
            border-radius:10px;
        }

        footer{
            background:#198754;
            color:white;
            text-align:center;
            padding:20px;
            margin-top:50px;
        }
    </style>

</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">

    <div class="container">

        <a class="navbar-brand fw-bold" href="/">
            🌿 Plant Nursery
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="/">🏠 Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">ℹ️ About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">📞 Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">🛒 Cart</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">📦 Orders</a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<div class="container mt-5">

    <div class="card plant-card shadow p-4">

        <div class="row">

            <!-- Plant Image -->
            <div class="col-md-5">

                <figure>

    <img src="{{ asset('images/' . $plant->image) }}"
         class="plant-image"
         alt="{{ $plant->name }}">

    <figcaption class="text-center mt-2 text-muted">
        {{ $plant->name }}
    </figcaption>

</figure>

            </div>

            <!-- Plant Details -->
            <div class="col-md-7">

                <h2 class="text-success">{{ $plant->name }}</h2>

                <hr>

                <p>
                    <strong>Category:</strong>

                    @if($plant->category == 'Indoor')
                        <span class="badge bg-primary">Indoor</span>
                    @elseif($plant->category == 'Outdoor')
                        <span class="badge bg-warning text-dark">Outdoor</span>
                    @else
                        <span class="badge bg-success">Medicinal</span>
                    @endif
                </p>

                <p>
                    <strong>Price:</strong>
                    ₹{{ $plant->price }}
                </p>

                <h5 class="text-success">
                    Description
                </h5>

                <p>
                    {{ $plant->description }}
                </p>

                <h5 class="text-success">
                    🌿 Care Guide
                </h5>

                <div class="alert alert-success">

                    {{ $plant->care_guide }}

                </div>

                <a href="/" class="btn btn-secondary">
                    ← Back to Home
                </a>

            </div>

        </div>

    </div>

</div>

<footer>

    <h5>🌿 Plant Nursery</h5>

    <p class="mb-0">
        Online Plant Shop with Care Guide & Order Tracking
    </p>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>