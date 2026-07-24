<!DOCTYPE html>
<html>
<head>
    <title>Place Order</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>📦 Place Order</h2>

    <form action="{{ route('order.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Total Amount</label>
            <input type="text" name="total_amount" class="form-control"
                   value="{{ $total }}" readonly>
        </div>

        <button type="submit" class="btn btn-success">
            Place Order
        </button>

        <a href="{{ route('cart.index') }}" class="btn btn-secondary">
            Back to Cart
        </a>

    </form>

</div>

</body>
</html>