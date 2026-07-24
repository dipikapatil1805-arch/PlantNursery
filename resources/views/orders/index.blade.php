<!DOCTYPE html>
<html>
<head>
    <title>Order History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>📦 Order History</h2>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Customer</th>
                <th>Email</th>
                <th>Total</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer_name }}</td>
                <td>{{ $order->email }}</td>
                <td>₹{{ $order->total_amount }}</td>
                <td>
                    <span class="badge bg-success">
                        {{ $order->status }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}"
                       class="btn btn-success btn-sm">
                        Track
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    <a href="/" class="btn btn-primary">🏠 Back to Home</a>

</div>

</body>
</html>