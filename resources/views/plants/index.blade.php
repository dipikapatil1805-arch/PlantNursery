<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant Nursery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body{
        background:var(--light-green);
    }

    :root{
    --primary-green:#198754;
    --light-green:#f4fff4;
    --card-radius:15px;
}

body{
    background:var(--light-green);
}

.card{
    border-radius:var(--card-radius);
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,0,0,.2);
}

.plant-title{
    color:var(--primary-green);
    font-weight:bold;
}
</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/">
            🌿 Plant Nursery
        </a>

        <button class="navbar-toggler" type="button"
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
<div class="container mt-4">

    <div class="p-5 bg-success text-white rounded shadow">

        <h1>🌿 Welcome to Plant Nursery</h1>

        <p class="lead mb-0">
            Buy healthy indoor and outdoor plants with detailed care guides and easy order tracking.
        </p>

    </div>

</div>
<div class="container py-5">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="text-center mb-5">
    <h1 class="display-4 fw-bold text-success">
        🌿 Plant Nursery
    </h1>

    <p class="lead">
        Online Plant Shop with Care Guide & Order Tracking
    </p>
    </div>
    <!-- Search & Filter -->
    <form method="GET" action="{{ url('/') }}" class="row g-3 justify-content-center mb-5">

        <div class="col-md-4">
            <input
                type="text"
                name="search"
                class="form-control"
                placeholder="🔍 Search plants..."
                value="{{ $search ?? '' }}">
        </div>

        <div class="col-md-3">
            <select name="category" class="form-select">

                <option value="">All Categories</option>

                <option value="Indoor"
                    {{ ($category ?? '') == 'Indoor' ? 'selected' : '' }}>
                    Indoor
                </option>

                <option value="Outdoor"
                    {{ ($category ?? '') == 'Outdoor' ? 'selected' : '' }}>
                    Outdoor
                </option>

                <option value="Medicinal"
                    {{ ($category ?? '') == 'Medicinal' ? 'selected' : '' }}>
                    Medicinal
                </option>

            </select>
        </div>

        <div class="col-md-2">
            <button class="btn btn-success w-100">
                Search
            </button>
        </div>

        <div class="col-md-2">
            <a href="/" class="btn btn-secondary w-100">
                Clear
            </a>
        </div>

    </form>
   <div class="alert alert-success text-center mb-4">
    🌱 <strong>Total Plants Available:</strong> {{ $plants->count() }}
    </div>    

    <div class="row">

        @forelse($plants as $plant)

        <div class="col-md-4 mb-4">

            <div class="card shadow h-100">
                  <figure class="mb-0">

    <img src="{{ asset('images/' . $plant->image) }}"
         class="card-img-top"
         alt="{{ $plant->name }}"
         style="height:220px; object-fit:cover;">

        <figcaption class="text-center text-muted mt-2">
           {{ $plant->name }}
        </figcaption>

        </figure>
                 <div class="card-body">

                    <h4 class="plant-title">
                        {{ $plant->name }}
                    </h4>

                    <p>
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

                    <p>{{ $plant->description }}</p>

                    <div class="d-flex gap-2">

                        <a href="{{ route('plant.show', $plant->id) }}"
                           class="btn btn-success">
                            View Care Guide
                        </a>

                        <form action="{{ route('cart.add', $plant->id) }}" method="POST">
                            @csrf

                            <button type="submit" class="btn btn-warning">
                                🛒 Add to Cart
                            </button>
                        </form>

                    </div>

                </div>

            </div>

        </div>

        @empty

        <div class="text-center">
            <h3 class="text-danger">
                No plants found.
            </h3>
        </div>

        @endforelse

    </div>

</div>
<footer class="bg-success text-white text-center py-3 mt-5">

    <h5>🌿 Plant Nursery</h5>

    <p class="mb-0">
        Online Plant Shop with Care Guide & Order Tracking
    </p>

    <small>
    © 2026 Plant Nursery
   </small>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>