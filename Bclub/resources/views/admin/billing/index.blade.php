<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        .table tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }
        .table tbody tr:hover {
            background-color: #e9ecef;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
</head>
<body>
    @extends('admin.dashboard')
    @section('billing_index')

    <div class="content" id="content">
        <div class="container mt-5">
            <h2>Billing Details</h2>
            @if($paymentMethods->isEmpty())
                <p>There is no data available. Click the button below to enter payment details.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Payment Method</th>
                            <th>QR Code</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($paymentMethods as $paymentMethod)
                            <tr>
                                <td>{{ $paymentMethod->paymentMethod }}</td>
                                <td>
                                    @if($paymentMethod->qrCode)
                                        <img src="{{ Storage::url($paymentMethod->qrCode) }}" alt="QR Code" width="100">
                                    @else
                                        No QR Code available
                                    @endif
                                </td>
                                <td>{{ $paymentMethod->paymentAddress }}</td>
                                <td>
                                    <a href="{{ route('admin.billing.edit', $paymentMethod->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/adminsecurebrians/billing/{{ $paymentMethod->id }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            <a class="btn btn-primary" href="{{ route('admin.billing.create') }}">Add Payment Method</a>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this payment method?");
        }
    </script>
    @endsection
</body>
</html>
