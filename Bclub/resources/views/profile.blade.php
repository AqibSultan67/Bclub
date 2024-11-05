<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="3">
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
    <title>Profile</title>

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/justified-nav.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('favicon_v3.ico')}}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico')}}" rel="shortcut" type="image/x-icon">
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
    <script src="{{ asset('js/strength-meter.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrapValidator.min.js')}}" type="text/javascript"></script>
    <link href="{{ asset('css/profile.css')}}" rel="stylesheet">
    <link href="{{ asset('css/strength-meter.min.css')}}" media="all" rel="stylesheet" type="text/css" />
    <style>
        .input-group-addon {
            display: none;
        }
        .fade{
            opacity:1;
        }
    </style>

</head>

<body>
@include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">

                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#profileTab" role="tab" data-toggle="tab">Profile</a></li>
                            <li class=""><a href="#passwordTab" role="tab" data-toggle="tab">Change password</a></li>
                            <li class=""><a href="#securityTab" role="tab" data-toggle="tab">Additional Security</a></li>
                        </ul>
                    </div>
                    <div class="tab-content" style="margin-top:15px;">
                        <div role="tabpanel" class="tab-pane active" id="profileTab">
                            <div class="col-sm-8">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show"  role="alert">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif

                                <form class="form-profile" id="profileForm" action="{{ url('/profile') }}" method="post" role="form">
                                    @csrf

                                    <div class="form-group">
                                        <label class="control-label" for="id_jabber">Jabber</label>
                                        <input class="form-control" id="id_jabber" maxlength="32" name="jabber" placeholder="Jabber" type="email" />
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="id_email">E-Mail</label>
                                        <input class="form-control" id="id_email" maxlength="255" name="email" placeholder="E-Mail" type="email" />
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="id_lang">Language</label>
                                        <select class="form-control" id="id_lang" name="lang">
                                            <option value="en" selected="selected">English</option>
                                            <option value="ru">Русский</option>
                                            <option value="zh">中国</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Save" />
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="passwordTab">
                            <div class="col-sm-8">


                                <form class="form-profile" id="formChangePassword" action="{{ url('/change_password/') }}" method="post" role="form">
                                    @csrf

                                    <div id="message">
                                        @if (session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color: #d4edda; color: #155724;">
                                                {{ session('success') }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #f8d7da; color: #721c24;">
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
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="id_new_password">New Password</label>
                                        <input class="form-control" id="id_new_password" maxlength="64" name="new_password" title="" type="password" style="width:300px;margin-right:10px;">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="id_confirm_password">Confirm Password</label>
                                        <input class="form-control" id="id_confirm_password" maxlength="64" name="new_password_confirmation" title="" type="password" style="width:300px;">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" id="buttonChangePassword" value="Change" />
                                    </div>
                                </form>



                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="securityTab">
                            <div class="col-sm-12 panel panel-default" style="background:#ffffe0">
                                <p style="font-size: 14pt; padding-top: 10px;">
                                    The following options will become available after you enable and set a Secret Passphrase:<br>
                                    <ul>
                                        <li>see updates when they are first released at 8 AM EST (minimum of 3 crab rating required)</li>
                                        <li>remove your current purchases</li>
                                        <li>receive loans and bonuses (minimum of 5 crab rating required)</li>
                                    </ul>
                                </p>
                            </div>
                            <div class="col-sm-12">
                                <form class="" style="width: 100%;" id="" action="" method="post" role="form">
                                    <div class="form-group" style="max-width: 380px;">
                                        <label class="control-label" for="id_double_verification">Enable Second Password (Secret Passphrase)</label>
                                        <select id="id_double_verification" name="double_verification" class="form-control">
                            <option value="0" selected>Disabled</option>
                            <option value="3">Secret Phrase</option>
                            <!--<option value="1">Jabber</option>-->
                        </select>
                                    </div>
                                    <div class="form-group" id="secret_div" style="max-width: 380px; display:none;">
                                        <label class="control-label" for="id_secret_phrase">Secret Phrase</label>
                                        <input type="text" id="id_secret_phrase" name="secret_phrase" class="form-control" maxlength="100" placeholder="iambriankrebs" value="">

                                    </div>
                                    <div class="col-sm-12 panel panel-default" style="background:#ffffe0; display:none;" id="secret_div_help">
                                        <p style="padding-top: 10px;">
                                            Make sure you understand how It works. For instance - you will be requested to enter first and third letter of the passphrase when you log in, so don't make your Secret Passphrase too complicated.<br> If you
                                            select a secret passphrase as <b>"swordfish"</b> and shop is asking you to enter <b>3rd</b> and <b>5th</b> letter, you need to enter "<b>od</b>".
                                        </p>
                                    </div>
                                    <div class="form-group">
                                        <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalReset" value="Save" />
                                    </div>
                                </form>

                                <div class="modal fade" id="modalReset" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                                <h4 class="modal-title" id="modalResetTitle">Reset Password</h4>
                                            </div>
                                            <div class="modal-body">
                                                Please contact with Admin through Ticket                    </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <hr>
        <footer>
            <!-- <center><a href="/referrals/">Earn money with us!</a></center> -->
            <p>&copy; 2024 Crabs on Security </p>
        </footer>

        <div class="modal fade" id="myModalCR" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" style="width:800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalCRTitle">Crab Rating</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p class='modalDanger'></p>
                        </div>
                        <div id="cr_data"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModalDetailsC" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" style="width:800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalDetailsCTitle">Details</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p class='modalDanger'></p>
                        </div>
                        <div id="cr_details_data" style="max-height:400px;overflow:auto;"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModalDetailsMG" tabindex="-1" role="dialog" aria-hidden="false">
            <div class="modal-dialog" style="width:800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalDetailsMGTitle">Terms for receiving a free daily dump!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p class='modalDanger'></p>
                        </div>
                        <div id="mg_data" style="max-height:400px;overflow:auto;">
                            <ul>
                                <li>you made a purchase in the last 24 hours</li>
                                <li>you made a deposit within the last 24 hours</li>
                                <li>you don't have any outstanding credits/loans</li>
                                <li>minimum of $100 in combined deposits </li>
                            </ul>
                            <span style="font-weight: bold;font-size: 12px;">Disclaimer:<p>
                        - Daily free dump is an expiring, randomly picked dump from the older databases. There's no guarantee It will work and not region locked in your area. Creating a ticket complaining about a free dump will void an ability to receive any future daily gifts in my shop.</p>
                        </span>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" class="btn btn-success" id="go_to_my_orders" onclick="window.location.href = '/orders';" style="display: none;">Go to My Orders</button>
                        <button type="button" class="btn btn-primary" id="receive_gift" onclick="ReceiveGift();">Click here to receive your gift.</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModalLoan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" style="width:800px;">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLoanTitle">Loan request</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p class='modalDanger'></p>
                        </div>
                        <div class="alert alert-success alert-success-modal fade in" style='display:none;'>
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p class='modalSuccess'></p>
                        </div>
                        <div id="loan_data"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /container -->






    <script>
        $(document).ready(function() {

            var menuID = document.getElementById("menu-profile");
            if (menuID)
                menuID.className = menuID.className + " active";
            startTime();
            getLiveData();

            $('.open_cr').click(function() {
                $('#myModalCR').modal('show');
                $('#cr_data').html('data is loading, please wait ...');

                $.get("/get_crab_rating/", function(data) {
                    if (data.status && data.status == 'success') {
                        $('#cr_data').html(data.html);
                    } else {
                        showMessage('modal', 'danger', data.message);
                    }
                }, 'json').error(function() {
                    showMessage('modal', 'danger', 'timeout error, please try again');
                }).always(function() {
                    //
                });

                return false;
            });

            $('.open_request_loan').click(function() {
                $('#myModalLoan').modal('show');
                $('#loan_data').html('data is loading, please wait ...');

                $.get("/get_loan/", function(data) {
                    if (data.status && data.status == 'success') {
                        $('#loan_data').html(data.html);
                    } else {
                        showMessage('modal', 'danger', data.message);
                    }
                }, 'json').error(function() {
                    showMessage('modal', 'danger', 'timeout error, please try again');
                }).always(function() {
                    //
                });

                return false;
            });

        });

        if (window.parent.frames.length > 0) {
            $.get("/check_iframe/", function(data) {
                //
            }, 'json').error(function() {
                //
            }).always(function() {
                //
            });
        }

        var currentHour = 16;
        var timeoutArray = [];
        var userBalance = 0.000000;

        function getRatingDetails(action) {
            $('#myModalDetailsC').modal('show');
            $('#cr_details_data').html('data is loading, please wait ...');

            $.post("/get_crab_rating/", {
                csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
                action: action
            }, function(data) {
                $('#cr_details_data').html(data);
            }).error(function() {
                showMessage('modal', 'danger', 'timeout error, please try again');
            }).always(function() {
                //
            });

            return false;
        }

        function checkTime(i) {
            return (i < 10) ? "0" + i : i;
        }

        function startTime() {
            var today = new Date();
            today.setHours(currentHour);
            var h = today.getHours();
            var m = checkTime(today.getMinutes());
            var s = checkTime(today.getSeconds());
            if (m == 59 && s == 59)
                currentHour++;
            if (currentHour > 23)
                currentHour = 0;
            document.getElementById('current_time').innerHTML = h + ":" + m + ":" + s;
            setTimeout(function() {
                startTime()
            }, 1000);
        }


        function firstUpperCase(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }

        function showMessage(where, type, message, messageID, timeout) {
            var divClass = (where == 'page') ? 'alert-' + type + '-page' : 'alert-' + type + '-modal';
            messageID = (messageID == undefined) ? where + firstUpperCase(type) : messageID;

            if (timeout != false && (timeout == undefined || timeout < 1)) {
                timeout = 5000;
            }

            var elementMessage = (where == 'page') ? '#' : '.';

            if ($('.' + divClass).is(':visible')) {
                if (timeout != false && timeoutArray[type] != undefined) {
                    clearTimeout(timeoutArray[type]);
                    timeoutArray[type] = undefined;
                    delete timeoutArray[type];
                }
                $(elementMessage + messageID).append('<br>' + message);
            } else {
                $(elementMessage + messageID).html(message);
            }

            $('.' + divClass).show().focus();

            if (timeout != false)
                timeoutArray[type] = setTimeout(function() {
                    $('.' + divClass).hide('slow');
                }, timeout);

            return false;
        }

        function getLiveData() {
            $.getJSON('/get_live_data/', function(data) {
                if (data.info)
                    showMessage('page', 'info', data.info, undefined, false);
                if (data.count_cart_items > 0)
                    $('#count_cart_items').html(data.count_cart_items);
                if (data.count_tickets > 0)
                    if (data.waiting_tickets !== undefined)
                        $('#count_tickets').html(data.waiting_tickets + '/' + data.count_tickets);
                    else
                        $('#count_tickets').html(data.count_tickets);
                //if(data.count_pendings > 0)
                if (data.count_payoffs > 0)
                    $('#count_payoffs').html(data.count_payoffs);
                if (data.remain_amount)
                    $('#remain_amount').html(data.remain_amount);
                if (data.bid_total > 0) {
                    $('#count_bids').html(data.bid_active + '/' + data.bid_total);
                }
                if (data.current_loan) {
                    $('#current_loan').html(data.current_loan);
                    $('#current_loan_block').css("display", "initial");
                } else {
                    $('#request_loan_block').css("display", "initial");
                }
                console.log(data.last_update_mybins);
                if (data.last_update_mybins == 1) {
                    $('#last_update_mybins_menu').css("display", "initial");
                    $('#last_update_mybins').css("display", "initial");
                } else {
                    $('#last_update_mybins_menu').css("display", "none");
                    $('#last_update_mybins').css("display", "none");
                }
            }).error(function() {
                //
            }).always(function() {
                //
            });
        }

        function ReceiveGift() {
            $('#receive_gift').prop('disabled', true);
            var post_array = {
                'action': 'receive_gift',
                'type': 'dumps',
                'ids': '0',
                'csrfmiddlewaretoken': 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
            };
            $.post('/cart/', post_array, function(data) {
                if (data.status == 'success') {
                    showMessage('modal', 'success', data.message);
                    $('#go_to_my_orders').show();
                }
                if (data && data.status == 'fail') {
                    showMessage('modal', 'danger', data.message);
                }
            }, 'json').error(function() {
                showMessage('modal', 'danger', 'timeout error, please try again');
            }).always(function() {
                $('#receive_gift').prop('disabled', false);
            });
            return true;
        }

        function GetMyLoan() {
            $('#get_my_loan').prop('disabled', true);
            $loan_amount = $('.active [name="options"]').attr('loan')
            var post_array = {
                'action': 'get_my_loan',
                'loan_amount': $loan_amount,
                'csrfmiddlewaretoken': 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
            };
            $.post(/get_loan/, post_array, function(data) {
                if (data.status == 'success') {
                    showMessage('modal', 'success', data.message);
                }
                if (data && data.status == 'fail') {
                    showMessage('modal', 'danger', data.message);
                }
            }, 'json').error(function() {
                showMessage('modal', 'danger', 'timeout error, please try again');
            }).always(function() {
                $('#get_my_loan').prop('disabled', false);
            });
            return true;
        }
    </script>



    <script>
        $(document).ready(function() {
            $("#id_new_password").strength({
                showMeter: true,
                toggleMask: false
            });

            $('#profileForm').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    email: {
                        message: 'E-Mail is invalid',
                        validators: {
                            stringLength: {
                                max: 32,
                                message: 'E-Mail must be less than 32 characters long'
                            },
                            emailAddress: {
                                message: 'E-Mail is invalid'
                            },
                            remote: {
                                url: '/check_exists/email/',
                                type: 'POST',
                                data: function(validator) {
                                    return {
                                        'data': validator.getFieldElements('email').val()
                                    };
                                },
                                message: 'That email is already exists , please select another '
                            }
                        }
                    },
                    jabber: {
                        message: 'Jabber is invalid',
                        validators: {
                            stringLength: {
                                max: 32,
                                message: 'Jabber must be less than 32 characters long'
                            },
                            emailAddress: {
                                message: 'Jabber is invalid'
                            },
                            remote: {
                                url: '/check_exists/jabber/',
                                type: 'POST',
                                data: function(validator) {
                                    return {
                                        'data': validator.getFieldElements('jabber').val()
                                    };
                                },
                                message: 'That jabber is already taken , please select another '
                            }
                        }
                    }
                }
            });

            $('#formChangePassword').submit(function() {
                document.getElementById('buttonChangePassword').disabled = true;
                $.post($('#formChangePassword').attr('action'), {
                        new_password: $('#id_new_password').val(),
                        confirm_password: $('#id_confirm_password').val(),
                        trust: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
                        csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH'
                    },
                    function(data) {
                        if (data.status && data.status == 'success') {
                            showMessage('page', 'success', (data.message) ? data.message : 'successfully updated');
                            $('#id_new_password').val('');
                            $('#id_confirm_password').val('');
                        } else {
                            //document.getElementById('buttonChangePassword').disabled = false;
                            showMessage('page', 'danger', (data.message) ? data.message : 'unable to update');
                        }
                    },
                    "json"
                ).error(function() {
                    //document.getElementById('buttonChangePassword').disabled = false;
                    showMessage('page', 'danger', 'timeout error, please try again');
                }).always(function() {
                    document.getElementById('buttonChangePassword').disabled = false;
                });

                return false;
            });

            $('#formChangeSecurity').submit(function() {
                document.getElementById('buttonChangeSecurity').disabled = true;
                $.post($('#formChangeSecurity').attr('action'), {
                        double_verification: $('#id_double_verification option:selected').val(),
                        secret_phrase: $('#id_secret_phrase').val(),
                        csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH'
                    },
                    function(data) {
                        if (data.status && data.status == 'success') {
                            showMessage('page', 'success', (data.message) ? data.message : 'successfully updated');
                        } else {
                            //document.getElementById('buttonChangePassword').disabled = false;
                            showMessage('page', 'danger', (data.message) ? data.message : 'unable to update');
                        }
                    },
                    "json"
                ).error(function() {
                    //document.getElementById('buttonChangePassword').disabled = false;
                    showMessage('page', 'danger', 'timeout error, please try again');
                }).always(function() {
                    document.getElementById('buttonChangeSecurity').disabled = false;
                });

                return false;
            });

            $('#id_double_verification').change(function() {
                var double = $('#id_double_verification option:selected').val();
                if (double == '3') {
                    $('#secret_div').show();
                    $('#secret_div_help').show();
                } else if (double == '1') {
                    $('#secret_div').hide();
                    $('#secret_div_help').hide();
                    showMessage('page', 'danger', 'Jabber must be confirmed');
                } else {
                    $('#secret_div').hide();
                    $('#secret_div_help').hide();
                }
                return true;
            });

            $(function() {
                var hash = window.location.hash;
                hash && $('ul.nav a[href="' + hash + '"]').tab('show');
            });
        });

        function resendJabberConfirmation() {
            $.post('/resend_jabber_confirmation/', {
                    csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH'
                },
                function(data) {
                    if (data.status && data.status == 'success') {
                        showMessage('page', 'success', (data.message) ? data.message : 'successfully sent');
                    } else {
                        showMessage('page', 'danger', (data.message) ? data.message : 'unable to send confirmation');
                    }
                },
                "json"
            ).error(function() {
                showMessage('page', 'danger', 'timeout error, please try again');
            }).always(function() {
                //document.getElementById('buttonChangePassword').disabled = false;
            });
        }
    </script>


</body>

</html>
