<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dumps and CVV2 Shop. The best quality cards from the Legendary Brian Krebs">
    <meta name="author" content="Brian Krebs">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title>BriansClub - Sign Up</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link href="{{asset('css/strength-meter.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/strength-meter.min.js')}}" type="text/javascript"></script>
    {{-- <script src="{{asset('js/bootstrapValidator.min.js')}}" type="text/javascript"></script> --}}
    <script src="{{asset('js/register.js')}}" type="text/javascript"></script>
    <link href="{{ asset('favicon_v3.ico')}}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico')}}" rel="shortcut" type="image/x-icon">
    <style>
        #id_password {
            width:418px;
            margin-right: 10px;
        }
        .input-group-addon {
            display:none;
        }
        .fade{
            opacity:1;
        }


    @media (max-width: 576px) {
        .form-signin {
            width: 100%; /* Full width on small screens */
        }
    }
    </style>
</head>
<body>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Registration</title>
        <!-- Add your CSS and JS links here -->
    </head>
    <body>

        <div class="container" style="margin-top: 20px;">
            <form class="form-signin" action="{{ url('register') }}" method="POST" id="thisForm" role="form" style="max-width:450px; margin: auto;">
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #d4edda; color: #155724;">
                    {{ session('success') }}
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #f8d7da; color: #721c24;">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                @endif

                <h2 class="form-signin-heading text-center">Registration</h2>
                @csrf

                <div class="form-group">
                    <label class="control-label" for="id_username">Login</label>
                    <input class="form-control" id="id_username" maxlength="32" name="username" placeholder="brian" required="required" type="text" />
                </div>

                <div class="form-group">
                    <label class="control-label" for="id_password">Password</label>
                    <input class="form-control" id="id_password" maxlength="64" name="password" placeholder="Password" required="required" type="password" />
                </div>

                <div class="form-group">
                    <label class="control-label" for="id_email">Email</label>
                    <input class="form-control" id="id_email" maxlength="64" name="email" placeholder="example@example.com" required="required" type="text" />
                </div>

                <div class="form-group" style="display:none;">
                    <label class="control-label" for="id_jabber">Jabber (optional)</label>
                    <input class="form-control" id="id_jabber" maxlength="32" name="jabber" placeholder="brian@jabme.de" type="text" />
                </div>

                @php
                    $captcha = \App\Models\CaptchaImage::inRandomOrder()->first();
                @endphp

                <div class="form-group">
                    <div class="captcha-container">
                        <b>Captcha</b>
                        <img src="{{ asset( $captcha->image_path) }}" alt="Captcha Image">
                        <input type="hidden" name="captcha_image_id" value="{{ $captcha->id }}">
                        <input autocomplete="off" class="form-control" id="id_captcha_answer" name="captcha_answer" required="required" type="text" placeholder="Your Answer" />
                    </div>
                </div>

                <div class="form-group form-check">
                    <input id="id_rules" name="rules" required="required" type="checkbox" class="form-check-input" />
                    <label for="id_rules" class="form-check-label">
                        I agree to the <a href="#modalRules" data-toggle="modal">Terms of Service</a>
                    </label>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Create Account"/>
                    <span class="d-block mt-2" style="font-size:14pt;">or <a href="{{ url('/login') }}">sign in</a></span>
                </div>
            </form>
        </div>
        <!-- /container -->
        <div class="modal fade" id="modalRules" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="modalDepositTitle">Terms of Service</h4>
                    </div>
                    <div class="modal-body">
                        1. We are not responsible for your actions<br>
                        2. You use the information on the site at your own risk<br>
                        3. We do not do moneybacks<br>
                        4. We don't allow the clones. All fake accounts will be banned.<br>
                        5. The attempts to hack, cheating us - immediately ban, without moneybacks.<br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
