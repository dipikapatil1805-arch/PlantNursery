<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4fff4;
        }

        .cart-card{
            border-radius:15px;
        }

        .table img{
            width:80px;
            height:80px;
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
                    <a class="nav-link active" href="{{ route('cart.index') }}">
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

    <div class="card cart-card shadow p-4">

        <h2 class="text-success mb-4">
            🛒 Shopping Cart
        </h2>

        @php
            $grandTotal = 0;
        @endphp

        @if($cartItems->count())

        <table class="table table-bordered table-hover align-middle">

            <thead class="table-success">

                <tr>
                    <th>Image</th>
                    <th>Plant</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>

            </thead>

            <tbody>

            @foreach($cartItems as $item)

            @php
                $total = $item->plant->price * $item->quantity;
                $grandTotal += $total;
            @endphp

            <tr>

                <td>
                    <img src="{{ asset('images/'.$item->plant->image) }}">
                </td>

                <td>{{ $item->plant->name }}</td>

                <td>₹{{ $item->plant->price }}</td>

                <td>{{ $item->quantity }}</td>

                <td>₹{{ $total }}</td>

                <td>

                    <a href="{{ route('cart.remove', $item->id) }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Remove this plant from cart?')">

                        🗑 Remove

                    </a>

                </td>

            </tr>

            @endforeach

            </tbody>

            <tfoot>

                <tr class="table-warning">

                    <th colspan="4" class="text-end">
                        Grand Total
                    </th>

                    <th colspan="2">
                        ₹{{ $grandTotal }}
                    </th>

                </tr>

            </tfoot>

        </table>

        @else

        <div class="alert alert-warning text-center">

            <h4>Your cart is empty.</h4>

            <p>Add some plants to continue shopping.</p>

        </div>

        @endif

        <div class="mt-3">

            <a href="/" class="btn btn-success">
                🌱 Continue Shopping
            </a>

            @if($cartItems->count())

            <a href="{{ route('order.create') }}" class="btn btn-primary">
                📦 Place Order
            </a>

            @endif

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