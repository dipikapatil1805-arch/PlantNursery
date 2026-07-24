<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Plant Nursery</title>

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

        .info-card{
            border:none;
            border-radius:15px;
            transition:.3s;
        }

        .info-card:hover{
            transform:translateY(-5px);
            box-shadow:0 10px 20px rgba(0,0,0,.2);
        }

        .contact-card{
            border:none;
            border-radius:15px;
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
                    <a class="nav-link active" href="{{ route('contact') }}">📞 Contact</a>
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

    <!-- Hero -->
    <div class="hero text-center shadow">

        <h1>📞 Contact Us</h1>

        <p class="lead mt-3">
            We'd love to hear from you. Send us your questions or feedback.
        </p>

    </div>

    <div class="row mt-5">

        <!-- Contact Form -->
        <div class="col-lg-8">

            <div class="card contact-card shadow p-4">

                <h3 class="text-success mb-4">Send us a Message</h3>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>

                        <input type="text"
                               name="name"
                               class="form-control"
                               value="{{ old('name') }}"
                               placeholder="Enter your name"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email Address</label>

                        <input type="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="Enter your email"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>

                        <textarea name="message"
                                  class="form-control"
                                  rows="5"
                                  placeholder="Write your message"
                                  required>{{ old('message') }}</textarea>
                    </div>

                    <button class="btn btn-success">
                        📩 Send Message
                    </button>

                    <a href="/" class="btn btn-secondary">
                        ← Back
                    </a>

                </form>

            </div>

        </div>

        <!-- Contact Information -->
        <div class="col-lg-4">

            <div class="card info-card shadow p-4 mb-3 text-center">

                <h3>📍</h3>

                <h5>Address</h5>

                <p>
                    Plant Nursery<br>
                    Pune, Maharashtra
                </p>

            </div>

            <div class="card info-card shadow p-4 mb-3 text-center">

                <h3>📧</h3>

                <h5>Email</h5>

                <p>
                    support@plantnursery.com
                </p>

            </div>

            <div class="card info-card shadow p-4 text-center">

                <h3>📞</h3>

                <h5>Phone</h5>

                <p>
                    +91 98765 43210
                </p>

            </div>

        </div>

    </div>

</div>

<!-- Footer -->
<footer class="bg-success text-white text-center py-3 mt-5">

    <h5>🌿 Plant Nursery</h5>

    <p class="mb-0">
        Online Plant Shop with Care Guide & Order Tracking
    </p>

    <small>
        © 2026 All Rights Reserved
    </small>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>