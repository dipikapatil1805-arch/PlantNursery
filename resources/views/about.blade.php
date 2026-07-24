<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Plant Nursery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4fff4;
        }

        .hero{
            background:#198754;
            color:white;
            padding:50px;
            border-radius:15px;
        }

        .feature-card{
            border:none;
            border-radius:15px;
            transition:.3s;
        }

        .feature-card:hover{
            transform:translateY(-6px);
            box-shadow:0 10px 20px rgba(0,0,0,.2);
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
                    <a class="nav-link active" href="{{ route('about') }}">
                        ℹ️ About
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">
                        📞 Contact
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">
                        🛒 Cart
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('orders.index') }}">
                        📦 Orders
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<div class="container mt-5">

    <!-- Hero Section -->
    <div class="hero text-center shadow">

        <h1>🌿 About Plant Nursery</h1>

        <p class="lead mt-3">
            Your trusted online destination for healthy plants, expert care guides, and easy order tracking.
        </p>

    </div>

    <!-- About -->
    <div class="card shadow mt-5 p-4">

        <h3 class="text-success">Who We Are</h3>

        <p>
            Plant Nursery is an online platform that helps customers discover beautiful indoor, outdoor, and medicinal plants. Every plant includes a detailed care guide to help it grow healthy and strong.
        </p>

        <p>
            Our website allows users to search plants, add them to a shopping cart, place orders, and track their order status through a simple and user-friendly interface.
        </p>

    </div>

    <!-- Features -->
    <h2 class="text-center text-success mt-5 mb-4">
        Why Choose Us?
    </h2>

    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card feature-card shadow h-100 p-4 text-center">

                <h3>🌱</h3>

                <h5>Healthy Plants</h5>

                <p>
                    Fresh and healthy plants carefully selected for every customer.
                </p>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card feature-card shadow h-100 p-4 text-center">

                <h3>📖</h3>

                <h5>Care Guides</h5>

                <p>
                    Easy-to-follow plant care instructions for beginners and experts.
                </p>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card feature-card shadow h-100 p-4 text-center">

                <h3>🚚</h3>

                <h5>Order Tracking</h5>

                <p>
                    Track your orders quickly and stay updated on their status.
                </p>

            </div>

        </div>

    </div>

    <!-- Mission -->
    <div class="card shadow p-4 mt-4">

        <h3 class="text-success">Our Mission</h3>

        <p>
            We aim to make plant shopping simple, enjoyable, and accessible while encouraging people to bring more greenery into their homes and workplaces.
        </p>

    </div>

</div>

<!-- Footer -->
<footer>

    <h5>🌿 Plant Nursery</h5>

    <p class="mb-0">
        Online Plant Shop with Care Guide & Order Tracking
    </p>
    <small>
    © 2026 Plant Nursery
<   /small>
    

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>