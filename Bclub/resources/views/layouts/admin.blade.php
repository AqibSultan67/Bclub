<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- FontAwesome Icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
     <style>
         body {
             display: flex;
             height: 100vh;
             margin: 0;
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
         }
         .sidebar.collapsed {
             transform: translateX(-250px);
         }
         .sidebar .nav-link {
             color: #fff;
         }
         .sidebar .nav-link.active {
             background-color: #495057;
         }
         .sidebar .nav-link:hover {
             background-color: #495057;
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
             background-color: #f8f9fa;
         }
     </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <nav class="nav flex-column p-3">
            <h4 class="text-center mb-4">Admin Panel</h4>
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-house"></i> Home
            </a>
            <a class="nav-link" href="#">
                <i class="fa-solid fa-user"></i> User Management
            </a>
            <a class="nav-link" href="{{ route('admin.orders.index') }}">
                <i class="fa-solid fa-user"></i> Orders
            </a>
            <a href="{{ route('admin.tickets.index') }}" class="nav-link">
                <i class="fa fa-ticket-alt"></i> Tickets
            </a>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="contentManagementDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-folder"></i> Content Management
                </a>
                <div class="dropdown-menu" aria-labelledby="contentManagementDropdown">
                    <a class="dropdown-item dropdown-toggle" href="#">News Page Settings</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Add Domains Content</a>
                        <a class="dropdown-item" href="{{ route('news.index') }}">Add News</a>
                    </div>
                    <a class="dropdown-item" href="{{ route('admin.billing.index') }}"> Billing Details</a>
                    <a class="dropdown-item" href="#">Registration Page Settings</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="content" id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="btn btn-primary" id="sidebarToggle">
                <i class="fa-solid fa-bars"></i>
            </button>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-link nav-link">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('collapsed');
            document.getElementById('content').classList.toggle('collapsed');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            dropdownToggles.forEach(function (dropdownToggle) {
                dropdownToggle.addEventListener('click', function (event) {
                    event.preventDefault();
                    var dropdownMenu = this.nextElementSibling;
                    dropdownMenu.classList.toggle('show');
                });
            });
            document.addEventListener('click', function (event) {
                var isDropdown = event.target.matches('.dropdown-toggle, .dropdown-menu, .dropdown-menu *');
                if (!isDropdown) {
                    var openDropdowns = document.querySelectorAll('.dropdown-menu.show');
                    openDropdowns.forEach(function (openDropdown) {
                        openDropdown.classList.remove('show');
                    });
                }
            });
        });
    </script>

</body>
</html>
