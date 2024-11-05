<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
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
        .icon-home { color: #007bff; }
    .icon-orders { color: #28a745; }
    .icon-tickets { color: #ffc107; }
    .icon-content { color: #17a2b8; }
    .icon-logout { color: #dc3545; }
    </style>
</head>
<body>
    @extends('admin.dashboard')
    @section('tickets_show')
    <div class="content" id="content">


        <div class="container mt-4">
            <h1>Ticket Details</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Subject</td>
                        <td>{{ $ticket->subject }}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{ $ticket->description }}</td>
                    </tr>
                    <tr>
                        <td>Added date</td>
                        <td>{{ $ticket->created_at->format('F j, Y, g:i a') }}</td>
                    </tr>
                    <tr>
                        <td>Receiver</td>
                        <td>Brian</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <span class="badge bg-secondary">{{ $ticket->status }}</span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Comments -->
            @foreach($ticket->comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <strong>Posted by</strong>
                    <i>
                        @if($comment->user)
                            {{ $comment->user->username }}
                        @else
                            {{ 'Admin' }}
                        @endif
                    </i>
                    {{ $comment->created_at->diffForHumans() }} <br><br>
                    <p>{{ $comment->comment }}</p>
                </div>
            </div>
            @endforeach

            <!-- Add Comment Form -->
            <form class="form-horizontal" action="{{ route('admin.tickets.comment', $ticket->id) }}" method="POST" id="ticketCommentForm">
                @csrf
                <div class="form-group">
                    <label for="comment" class="col-sm-2 control-label">Comment</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" cols="25" id="id_comment" name="comment" required="required" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="col-sm-offset-3 btn btn-primary mt-2" value="Add Comment"/>
                </div>
            </form>
        </div>
    </div>
@endsection
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
</body>
</html>
