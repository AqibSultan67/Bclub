<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billing - Update</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
 body {
            display: flex;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            transition: transform 0.3s ease;
            padding-top: 20px;
        }
        .sidebar.collapsed {
            transform: translateX(-250px);
        }
        .sidebar .nav-link {
            color: #fff;
            margin-bottom: 10px;
        }
        .sidebar .nav-link.active {
            background-color: #495057;
            border-radius: 4px;
        }
        .sidebar .nav-link:hover {
            background-color: #495057;
            border-radius: 4px;
        }
        .sidebar-toggler {
            position: absolute;
            top: 10px;
            left: 260px;
            cursor: pointer;
            color: #343a40;
            font-size: 1.5rem;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            transition: margin-left 0.3s ease;
        }
        .content.collapsed {
            margin-left: 0;
        }
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
        }
        .btn-edit {
            background-color: #17a2b8;
        }
        .form-group textarea,
        .form-group input {
            width: 100%; /* Adjust to desired width */
            max-width: 600px; /* Optional: set a maximum width */
            resize: vertical; /* Optional: allow vertical resizing only */
        }

    </style>
    </style>
</head>
<body>
   @extends('admin.dashboard')
   @section('billing_edit')
    <div class="content" id="content">

    <div class="container mt-5">
        <h2>Edit Payment Method</h2>
        <form action="{{ route('admin.billing.update', $paymentMethod->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Payment Method Name -->
            <div class="form-group">
                <label for="paymentMethod">Payment Method</label>
                <input type="text" class="form-control" id="paymentMethod" name="paymentMethod" value="{{ old('paymentMethod', $paymentMethod->paymentMethod) }}" required>
            </div>

            <!-- QR Code Image -->
            <div class="form-group">
                <label for="qrCode">QR Code Image</label>
                <input type="file" class="form-control" id="qrCode" name="qrCode">
                @if($paymentMethod->qrCode)
                    <br>
                    <img src="{{ Storage::url($paymentMethod->qrCode) }}" alt="Current QR Code" width="100">
                @else
                    <p>No QR Code uploaded</p>
                @endif
            </div>

            <!-- Payment Address -->
            <div class="form-group">
                <label for="paymentAddress">Payment Address</label>
                <input type="text" class="form-control" id="paymentAddress" name="paymentAddress" value="{{ old('paymentAddress', $paymentMethod->paymentAddress) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- FontAwesome Icons -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script>
    document.getElementById('sidebarToggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('collapsed');
        document.getElementById('content').classList.toggle('collapsed');
        this.querySelector('i').classList.toggle('fa-bars');
        this.querySelector('i').classList.toggle('fa-times');
    });


</script>
@endsection
</body>
</html>
