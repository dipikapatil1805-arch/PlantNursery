<!DOCTYPE html>
<html>
<head>
    <title>Contact Messages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4fff4;">

<div class="container mt-5">

    <h2 class="text-success mb-4">📩 Contact Messages</h2>

    <table class="table table-bordered table-striped">

        <thead class="table-success">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>

        @forelse($contacts as $contact)

            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->message }}</td>
                <td>{{ $contact->created_at->format('d M Y') }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="5" class="text-center">
                    No messages found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

    <a href="/" class="btn btn-success">
        🏠 Back to Home
    </a>

</div>

</body>
</html>