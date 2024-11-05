<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="1">
    <title>Welcome!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/justified-nav.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-toggle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/jquery.bootstrap-touchspin.css')}}" rel="stylesheet">
    <link href="{{ asset('css/slider.css')}}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/qrcode.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('js/ie10-viewport-bug-workaround.js')}}"></script>
    <script src="{{ asset('js/date.js')}}"></script>
    <script src="{{ asset('js/moment-with-locales.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{ asset('js/passgen.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-toggle.min.js')}}"></script>
    <script src="{{ asset('js/jquery.bootstrap-touchspin.js')}}"></script>
    <script src="{{ asset('js/bootstrap-slider.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        .nav-right li a {
            padding-top: 6px !important;
            padding-bottom: 6px !important;
        }
        @font-face {
    font-family: 'Glyphicons Halflings';
    src: url('{{ asset('fonts/glyphicons-halflings-regular.woff') }}') format('woff');
    font-weight: normal;
    font-style: normal;
}

    </style>
</head>

<body>
    <div class="container" style="width:90%;max-width:1700px;">
        <div class="masthead" style="">
            <div role="navigation" style="float: right;margin-top: 0px; white-space: nowrap; width: min-content;width: -moz-min-content;width: -webkit-min-content;display: -ms-grid;-ms-grid-columns: min-content;">
                <ul class="nav nav-justified nav-right">
                    <li>
                        <a href="/lottery/" style="color:green;"></span> <b>Lottery</b> <span class="glyphicon glyphicon-usd" aria-hidden="true"></span></a></span>
                    </li>
                    <li>
                        <a href="#"><span class="openMyGift" data-toggle="modal" data-target="#myModalDetailsMG"><span class="glyphicon glyphicon-gift" aria-hidden="true" style="color: orangered;"></span> My Gift </span></a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li>
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                         <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span><b> Logout</b>
                     </a>
                    </li>
                </ul>
            </div>
            <div class="text-muted" style="margin-top: -20px;padding-bottom:10px;float: none;width: auto;overflow: visible;">
                <h3 class="text-muted">
                    Welcome <i>{{ Auth::check() ? Auth::user()->username : '' }}</i>
                    <span style="font-size: 16px;">[<a href="/profile/">profile</a>]</span>
                </h3>

                <b>Amount:</b> <span>{{ number_format($userBalance, 2) }}</span> USD [ <a href="/billing/">add funds</a> ]<br>

                <b>Crab Rating:</b> <a href="#" class="open_cr" title="1 crab"><img src="{{asset('images/crab_rate.png')}}"></a> [ <a href="#" class="open_cr">details</a> ]<br>

                <span style="display:none;" id="current_loan_block"><b>Current loan:</b> <span id="current_loan" style="color: red;"></span>$<br></span>

                <span style="display:none;"> en https://bclub.mp/</span>
                <b>Current server time:</b> <span id="current_time"></span>
            </div>
            <div role="navigation">
                <ul class="nav nav-justified">
                    <li id="menu-home"><a href="{{ route('news') }}">News</a></li>
                    <li id="menu-dumps-search"><a href="#" style="background-image: -webkit-linear-gradient(top, #ABDDFC 0%, #ABDDFC 100%);">Dumps</a></li>
                    <li id="menu-cc-search"><a href="#" style="background-image: -webkit-linear-gradient(top, #C8F6C8 0%, #C8F6C8 100%);">CVV2</a></li>
                    <li id="menu-fullz-search"><a href="#" style="background-image: -webkit-linear-gradient(top, #bbfcff 0%, #bbfcff 100%);">Fullz</a></li>
                    <li id="menu-wholesale" style="min-width:110px;"><a href="/wholesale/">Wholesale</a></li>
                    <li id="menu-cart"><a href="/cart/">Cart <span class="badge" id="count_cart_items"></span></a></li>
                    <li id="menu-orders"><a href="/orders/">Orders</a></li>
                    <li id="menu-auction"><a href="/auction/" style="color: white; background-image: -webkit-linear-gradient(top, #FB786B 0%, #FB786B 100%);">Auction <span class="badge" id="count_bids"></span></a></li>
                    <li id="menu-checker">
                        <a href="/tools/" style="background-color:#FFFFCC">Tools
                        <span class="label label-danger" id=""  >new</span>
                    </a>
                    </li>
                    <li id="menu-tickets"><a href="/tickets/">Tickets <span class="badge" id="count_tickets"></span></a></li>
                    <li id="menu-logs" class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Help<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li id="menu-rules"><a href="/rules/">Rules</a></li>
                            <li id="menu-faq"><a href="/faq/">F.A.Q.</a></li>
                            <li id="menu-education"><a href="/education/">Education</a></li>
                        </ul>
                    </li>
                    <li id="menu-profile"><a href="/profile/"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a></li>
                </ul>
            </div>
        </div>


        <div class="alert alert-danger alert-danger-page fade in" style='display:none;margin-top:10px;' tabindex="-1">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p id='pageDanger'></p>
        </div>
        <div class="alert alert-block alert-success alert-success-page fade in" style='display:none;margin-top:10px;' tabindex="-1">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p id='pageSuccess'></p>
        </div>
        <div class="alert alert-block alert-info alert-info-page fade in" style='display:none;margin-top:30px;' tabindex="-1">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <p id='pageInfo'></p>
        </div>

        <div class="alert alert-block alert-info fade in" style='margin-top:10px;' tabindex="-1">
            <p>
                Your account is inactive. For activation you need <a href="/billing/">to top up your balance</a>.<br> Attention: Not activated accounts for more than 5 days will be deleted automatically.
            </p>
        </div>


    </body>
</html>
