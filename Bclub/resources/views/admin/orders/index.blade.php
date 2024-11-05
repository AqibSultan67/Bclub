<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            display: flex;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            transition: margin-left 0.3s ease;
        }
        .table-container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: none;
            padding: 15px;
        }
        .table thead th {
            background-color: #6c757d;
            color: #ffffff;
        }
        .btn {
            color: white;
        }
        .btn-approve { background-color: #28a745; }
        .btn-reject { background-color: #dc3545; }
        .btn-delete { background-color: #dc3545; }
    </style>
</head>
<body>
    @extends('admin.dashboard')
    @section('orders')

    <div class="content">
        <div class="container mt-4">
            <h1>Orders</h1>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($deposits->isEmpty())
                <div class="alert alert-info">
                    No orders available.
                </div>
            @else
                <div class="table-container">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>System</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($deposits as $deposit)
                                <tr>
                                    <td>{{ $deposit->user->username ?? 'N/A' }}</td>
                                    <td>{{ $deposit->system }}</td>
                                    <td>${{ number_format($deposit->amount, 2) }}</td>
                                    <td style="color: {{ $deposit->status === 'approved' ? 'green' : ($deposit->status === 'rejected' ? 'red' : 'black') }}">
                                        {{ ucfirst($deposit->status) }}
                                    </td>
                                    <td>{{ $deposit->date->format('Y-m-d H:i:s') }}</td>
                                    <td>
                                        @if($deposit->status === 'pending')
                                            <form action="{{ route('admin.orders.update', $deposit->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="status" value="approved">
                                                <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                            </form>
                                            <form action="{{ route('admin.orders.update', $deposit->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('POST')
                                                <input type="hidden" name="status" value="rejected">
                                                <button type="submit" class="btn btn-danger btn-sm">Reject</button>
                                            </form>
                                        @else
                                            N/A
                                        @endif
                                        <form action="/adminsecurebrians/orders/{{ $deposit->id }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this order?");
        }
    </script>
    @endsection
</body>
</html>
