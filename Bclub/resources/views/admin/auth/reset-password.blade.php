<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - Reset-Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>

<!-- resources/views/admin/auth/reset-password.blade.php -->


<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="container" style="max-width: 500px; width: 100%; padding: 20px; background-color: #e9ebec; border-radius: 8px;">
        <h2 class="text-center">Reset Password</h2>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" value="{{ $email }}" required style="font-size: 0.875rem;">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">New Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" required style="font-size: 0.875rem;">
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control form-control-sm" id="password_confirmation" name="password_confirmation" required style="font-size: 0.875rem;">
            </div>
            <button type="submit" class="btn btn-primary w-100" style="font-size: 0.875rem; padding: 0.375rem 0.75rem;">Reset Password</button>
        </form>
    </div>
</div>
</body>
</html>
