<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="BriansClub offers exclusive access to premium dumps and CVVs.">
    <meta name="keywords" content="bclub , briansclub , brainsclub , briansclub cc,briansclub review,briansclub.at,cc dumps,credit card dump sites,buy cc dumps,buy cvv online,cvv shop online,cvv dumps,buy cc,cc shop,fresh dumps,buy dumps online,credit card dumps,dumps shop,buy dumps,credit card dumps with pin,buy ssn,buy credit card dumps online,cc cvv shop,dumps shop online,dumps with pin,fresh cvv,cc shop online,valid cvv,buy dumps with pin,cvv and dumps,fullz shop,sell dumps,buy credit card dumps,cvv fullz online shop,cc cvv,credit card dump shop,buy dumps with pin online,buy cvv dumps verified seller,best dumps shop,buy ssn and dob online,dumps cc sites,cvv selling sites,card dumps,ssn dob mmn,underground dumps shop,cvv shop,buy track 1 and 2 dumps,fullz,sell cvv good,fresh cvv shop,credit card dumps track 2,best cvv shop online,dumps with pin shop,best cvv shop,cvv shop list,dumps cc shop,cvv checker online,sell cvv all country,buy cvv fullz online,buy ssn and dob,valid cc shop,track 1 and 2 dumps with pin,dumps cvv fullz bank logins,buy fullz,cvv sites,buy cvv2,fresh cvv dumps,fullz cvv shop,best dump sites,buy dumps shop,cvv fullz,cvv shop selling worldwide cvv,credit dumps,buy cc dumps online,buy cvv dumps,best site to buy cvv,best dumps website,cvv dumps with pin,good cvv shop,sell dumps track,cvv dumps shop,buy cvv fullz,best cc shop online,cc dumps with pin,credit card dump checker,cvv shop high balance,sell cvv dumps,fresh cc dumps,cvv fullz and dumps selling,best cc shop,ssn dob shop,buy cvv online store,sell cc,ccv pin,buy track 1 and 2 dumps online,track 1 track 2 dumps,buy cc fullz,cvv shop login,best cvv shop 2016,online shopping no cvv,cc fresh,best credit card dump sites,credit card fullz,best dumps seller,credit card dumps track 2 and pin,cc fullz,cc shop sites,dumps track 1 and 2,where to buy cc,cc dumps track 1&2,sell dumps with pin,buy cc dumps with pin,dump store,cc dumps shop online,dumps cvv checker,online cvv dumps shop,cheap dumps,debit card dumps with pin,cheap cvv shop,cvv checker,buy cvv fresh,cvv websites,new dumps shop,ssn dob mmn search,buy best dumps,sell cvv full,best dumps,valid cvv shop,cvv dumps sellers,verified dumps seller,cc shop su,legit cvv seller,cc to buy,sell cvv good fresh cheap,golden dumps cvv,top 10 cvv shop,the best cvv shop,ssn mmn,dumps forum,best dump websites,dump checker online,ssn fullz info,carding dumps forums,cc cvv checker,legit cc shop,buy cc cvv online,full cc dumps,atm dumps,best site to buy cc,carder cc,cvv admin shop,sell dumps cvv,cvv dumps 2016,recommended dump vendor,where to buy fullz,sites to buy cvv">
    <link href="{{ asset('favicon_v3.ico')}}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico')}}" rel="shortcut" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <title>BriansClub - Login</title>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mainlogin.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</head>
<body>
<noscript>
    <div class="alert alert-danger fade in" style='text-align: center;font-size:15pt;' tabindex="-1">
        <p>Please enable Javascript to continue.</p>
    </div>
</noscript>
<section class="form-section" id="form-section" style="background-image: url('{{ asset('images/mockup.jpg') }}');">
    <div class="form-decorations__logo form-decorations__item">
        <img src="{{ asset('images/logo.png') }}" alt="">
    </div>
    <div class="form-decorations__item">
        <img src="{{ asset('images/doc1.png') }}" alt="">
    </div>
    <div class="form-decorations__item">
        <img src="{{ asset('images/doc2.png') }}" alt="">
    </div>
    <div class="form-decorations__item">
        <img src="{{ asset('images/flowerpot.png') }}" alt="">
    </div>
    <div class="form-decorations__item">
        <img src="{{ asset('images/Three_Cards.png') }}" alt="">
    </div>
    <div class="form-decorations__item">
        <img src="{{ asset('images/newspaper1.png') }}" alt="">
    </div>
    <div class="form-decorations__item">
        <img src="{{ asset('images/A4_later.png') }}" alt="">
    </div>
    <div class="form-decorations__item">
        <img src="{{ asset('images/key.png') }}" alt="">
    </div>

    <div class="container">
        <div class="form-wrapper container">
            <form class="form form-signin" id="form-sing-in" action="{{ url('login') }}" method="post" role="form">
                @csrf <!-- CSRF token -->

                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif

                <h3 class="form-title">
                    <span>
                        Please sign in
                    </span>
                </h3>

                <div class="form-group">
                    <label for="id_username" class="form__label control-label">Username</label>
                    <div class="form-group__wrapper form-group">
                        <input required type="text" id="id_username" name="username" placeholder="Username" maxlength="32" class="form__input" value="{{ old('username') }}">
                        <span class="form-group__icon">
                            <i class="zmdi zmdi-account"></i>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="form__label">Password</label>
                    <div class="form-group__wrapper form-group">
                        <input type="password" id="password" name="password" maxlength="64" placeholder="Password" class="form__input">
                        <span class="form-group__icon">
                            <i class="zmdi zmdi-lock"></i>
                        </span>
                    </div>
                    <input type="checkbox" onclick="ShowPassword()" class="form__label">&nbsp;<label for="password" class="form__label">Show Password</label>
                </div>

                @php
                    $captcha = session('captcha');
                @endphp

<div class="form-group captcha-wrapper" style="margin-top: 20px;">
    <div class="form-group__wrapper d-flex flex-column flex-md-row align-items-center">
        <div class="mb-2 mb-md-0">
            <img src="{{ asset($captcha->image_path) }}" alt="Captcha Image" class="img-fluid">
        </div>

        <div class="flex-grow-1">
            <input type="hidden" name="captcha_image_id" value="{{ $captcha->id }}">
            <input autocomplete="off" id="id_captcha_answer" name="captcha_answer" type="text" class="form__input form-control" placeholder="Equals?">
        </div>
    </div>
</div>

                <div class="form-buttons">
                    <button class="button form__button form__button--gradient" type="submit">Login</button>
                    <a href="{{ url('/register') }}" class="button form__button">Register</a>
                </div>

                <div class="form-links">
                    <a href="#modalReset" class="form-links__item" data-toggle="modal">Forgot Password?</a>
                    <a href="{{ asset('credit_report.pdf') }}" target="_blank" class="form-links__item">Credit Report</a>
                </div>
            </form>
        </div>

        <div class="modal fade" id="modalReset" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="modalResetTitle">Reset Password</h4>
                    </div>
                    <div class="modal-body">
                        Please create a new account and submit a ticket requesting password reset for your original account.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function () {
        $("#id_captcha_1").attr('class', 'form__input');
        $("#id_captcha_1").attr('required', 'required');
        $("#id_captcha_1").attr('placeholder', 'Equals?');
        $("#id_captcha_1").css("width", "auto");
        $("#id_username").keypress(function(event){
            var ew = event.which;
            if(48 <= ew && ew <= 57)
                return true;
            if(65 <= ew && ew <= 90)
                return true;
            if(97 <= ew && ew <= 122)
                return true;
            return false;
        });
    })
    function ShowPassword() {
        var x = $("#password");
        if (x.attr("type") === "password") {
            x.attr("type","text");
        } else {
            x.attr("type","password");
        }
    };
</script>
<script type="text/javascript" src="https://cdn.livetrafficfeed.com/static/online/live.v2.js?text=ffffff&bg=fafafa&ro=1&tz=Asia%2FKolkata"></script>
</body>



</html>
