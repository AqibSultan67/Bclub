<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - forgot-password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <!-- resources/views/admin/auth/forgot-password.blade.php -->



<!-- resources/views/admin/auth/forgot-password.blade.php -->

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container" style="max-width: 400px; width: 100%; padding: 20px; background-color: #e0e1e1; border-radius: 8px;">
        <h2 class="text-center mb-5">Forgot Password</h2>

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.password.email') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" required style="font-size: 0.875rem;">
            </div>
            <button type="submit" class="btn btn-primary w-100" style="font-size: 0.875rem; padding: 0.375rem 0.75rem;">Send Password Reset Link</button>
        </form>
    </div>
</div>
</body>
</html>
