<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot-Password</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{asset('js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <style>
        .form-section {
            display: flex;
            justify-content: center;
            box-shadow:#b6b5b5;
            border-radius:10px;
            background-color: 2px solid #a8a6a6;
            align-items: center;
            background-size: cover;
            background-position: center;
        }
        .form{
            box-shadow:#b6b5b5;
            border-radius:10px;
            background-color:#e6e2e2;
            padding: 40px;
        }
        .btn-primary{
            background-color: #f35544;
        }
    </style>
</head>
<body>
    <section class="form-section">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="form-wrapper" style="width: 100%; max-width: 400px; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; padding: 30px;">
                <form action="{{ url('forgot-password') }}" method="POST" class="form py-5">
                    @csrf
                    <h2 class="text-center mb-4">Forgot Password</h2>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <div class="form-group mt-3">
                        <label for="jabber">Email Address</label>
                        <input type="text" class="form-control" id="jabber" name="jabber" required style="padding: 10px; font-size: 16px;">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary" style="width: 150px; padding:7px font-weight:bold; font-size:1.5rem;">Submit</button>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{ url('/login') }}">Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
