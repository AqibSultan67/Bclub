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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
        .table {
            background-color: #ffffff;
            border-radius: 5px;
            overflow: hidden;
            border-collapse: separate;
            border-spacing: 0;
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
        .btn-edit {
            background-color: #17a2b8;
            color: white;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        /* Icon Colors */
        .icon-home { color: #007bff; }
        .icon-orders { color: #28a745; }
        .icon-tickets { color: #ffc107; }
        .icon-content { color: #17a2b8; }
        .icon-logout { color: #dc3545; }
        .icon-user { color: #b6b9bb; }

    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <nav class="nav flex-column p-3">
            <h4 class="text-center mb-4">Admin Panel</h4>
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-house icon-home"></i> Home
            </a>
            <a class="nav-link" href="{{ route('admin.users.index') }}">
                <i class="fa-solid fa-user icon-user"></i> User Management
            </a>

            <a class="nav-link" href="{{ route('admin.orders.index') }}">
                <i class="fa-solid fa-box icon-orders"></i> Orders
            </a>
            <a href="{{ route('admin.tickets.index') }}" class="nav-link">
                <i class="fa fa-ticket-alt icon-tickets"></i> Tickets
            </a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="contentManagementDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-folder icon-content"></i> Content Management
                </a>
                <ul class="dropdown-menu" aria-labelledby="contentManagementDropdown">
                    <li><a class="dropdown-item" href="#">News Page Settings</a></li>
                    <li><a class="dropdown-item" href="{{ route('news.index') }}">Add News</a></li>
                    <li><a class="dropdown-item" href="{{ route('admin.billing.index') }}">Billing Details</a></li>
                </ul>
            </div>
            <form action="{{ route('admin.logout') }}" method="POST" class="mt-auto">
                @csrf
                <button type="submit" class="btn btn-link nav-link"><i class="fa fa-sign-out-alt icon-logout"></i> Logout</button>
            </form>
        </nav>
    </div>

    <div class="sidebar-toggler" id="sidebarToggle">
        <i class="fa fa-bars"></i>
    </div>

    {{-- <div class="content" id="content">
        <div class="container mt-4">
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Here you can manage your application settings and view statistics.</p>

        </div>

    </div> --}}
    @yield('users')
    @yield('tickets')
    @yield('tickets_show')
    @yield('orders')
    @yield('news_create')
    @yield('news_index')
    @yield('news_edit')
    @yield('billing_create')
    @yield('billing_edit')
    @yield('billing_index')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FontAwesome Icons -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('collapsed');
            document.querySelector('.content').classList.toggle('collapsed');
            this.querySelector('i').classList.toggle('fa-bars');
            this.querySelector('i').classList.toggle('fa-times');
        });



    </script>
</body>
</html>
