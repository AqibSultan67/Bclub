<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    </style>
</head>
<body>
    @extends('admin.dashboard')
    @section('tickets')
    <div class="content mt-5" id="content">
        <div class="container">
            <h1>Tickets</h1>
            @if($tickets->isEmpty())
                <div class="text-center mt-5">
                    There are no tickets available.
                </div>
            @else
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->user ? $ticket->user->username : 'Unknown' }}</td>
                                <td>{{ $ticket->subject }}</td>
                                <td>{{ $ticket->description }}</td>
                                <td>
                                    @if($ticket->status == 'resolved')
                                        <span class="badge bg-success">Resolved</span>
                                    @else
                                        <span class="badge bg-warning">Open</span>
                                    @endif
                                </td>
                                <td>{{ $ticket->created_at->format('F d, Y, g:i a') }}</td>
                                <td>
                                    <a href="{{ route('admin.tickets.show', $ticket->id) }}" class="btn btn-edit">View</a>
                                    <form action="/adminsecurebrians/tickets/{{ $ticket->id }}" method="POST" style="display:inline;" onsubmit="return confirmDelete();">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tickets->links() }}
            @endif
        </div>
    </div>
    @endsection

    <script>
        function confirmDelete() {
            return confirm("Are you sure you want to delete this ticket?");
        }
    </script>
</body>
</html>
