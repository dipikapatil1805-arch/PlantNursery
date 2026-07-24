<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4fff4;
        }

        .tracking-card{
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
                    <a class="nav-link" href="{{ route('contact') }}">📞 Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart.index') }}">🛒 Cart</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('orders.index') }}">
                        📦 Orders
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<div class="container mt-5">

    <div class="card tracking-card shadow p-4">

        <h2 class="text-success mb-4">
            📦 Order Tracking
        </h2>

        <table class="table table-bordered">

            <tr>
                <th width="30%">Order ID</th>
                <td>#{{ $order->id }}</td>
            </tr>

            <tr>
                <th>Customer Name</th>
                <td>{{ $order->customer_name }}</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>{{ $order->email }}</td>
            </tr>

            <tr>
                <th>Total Amount</th>
                <td>₹{{ $order->total_amount }}</td>
            </tr>

            <tr>
                <th>Order Status</th>
                <td>

                    @if($order->status == 'Pending')

                        <span class="badge bg-warning text-dark fs-6">
                            Pending
                        </span>

                    @elseif($order->status == 'Processing')

                        <span class="badge bg-primary fs-6">
                            Processing
                        </span>

                    @elseif($order->status == 'Delivered')

                        <span class="badge bg-success fs-6">
                            Delivered
                        </span>

                    @else

                        <span class="badge bg-secondary fs-6">
                            {{ $order->status }}
                        </span>

                    @endif

                </td>
            </tr>

        </table>

        <div class="mt-3">

            <a href="{{ route('orders.index') }}" class="btn btn-success">
                ← Back to Orders
            </a>

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