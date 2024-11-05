<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="2">
    <title>New ticket</title>
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">

</head>

<body>
    @include('layouts.header')

    <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
        <div class="panel-body">
            <div class="col-sm-16">

<div class="alert alert-block alert-info fade in" style='' tabindex="-1">
    <h3>Attention!</h3>
    <ul>
        <li>We cant help you if you do not provide full information about your problem..</li>
        <li>Do not ask for refunds, use automated refund system. There are no refunds through tickets.
        <li>We do not provide any moneyback.</li>
        <li>Customer support through ticketing system is provided in <b>English language only</b>.</li>
        <li><b>Please read <a href="/rules/">Rules</a> and <a href="/faq/">F.A.Q.</a> for more details.</b></li>
		<li>Please refrain from contacting me about payments with status of Unconfirmed Transactions.</li>
        <li><b style="color:brown;">Wait for 7 confirmations as required by Bitcoin Network.</b></li>
        <li>Check your transaction status on <b><a href="https://blockchain.com" target="_blank">Blockchain.com</a></b> before submitting a ticket.</li>

    </ul>
</div>
<form class="form-horizontal" action="{{ route('tickets.store') }}" method="post" role="form">
    @csrf

    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    <!-- Form fields -->
    <div class="form-group">
        <label class="col-md-2 control-label" for="id_reason_contact">Reason contact</label>
        <div class="col-md-4">
            <select class="form-control" id="id_reason_contact" name="reason_contact" required="required" title="">
                <option value="" selected="selected">---------</option>
                <option value="1">General Questions</option>
                <option value="2">Account access &amp; Forgotten Password</option>
                <option value="7">Orders &amp; Purchases Questions</option>
                <option value="10">Bitcoin &amp; Payment Questions</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="id_subject">Subject</label>
        <div class="col-md-4">
            <input class="form-control" id="id_subject" maxlength="64" name="subject" placeholder="Subject" required="required" title="" type="text" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="id_description">Description</label>
        <div class="col-md-4">
            <textarea class="form-control" cols="40" id="id_description" name="description" placeholder="Description" required="required" rows="10" title="A detailed description of your problem."></textarea>
            <span class="help-block">A detailed description of your problem.</span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="id_payment_address">Payment Address</label>
        <div class="col-md-4">
            <input class="form-control" id="id_payment_address" maxlength="120" name="payment_address" placeholder="Payment Address" title="" type="text" />
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="col-sm-offset-3 btn btn-primary" value="Create Ticket"/>
    </div>
</form>
            </div>
        </div>
    </div>

    <hr>
    <footer>
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
    <div class="modal fade" id="myModalDetailsMG" tabindex="-1" role="dialog" aria-hidden="false" >
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

<link href="/static/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="/static/css/bootstrap-toggle.min.css" rel="stylesheet">
<link href="/static/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
<link href="/static/css/slider.css" rel="stylesheet">
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/qrcode.js"></script>

<script src="/static/js/ie10-viewport-bug-workaround.js"></script>
<script src="/static/js/date.js"></script>
<script src="/static/js/moment-with-locales.min.js"></script>
<script src="/static/js/bootstrap-datetimepicker.min.js"></script>
<script src="/static/js/passgen.min.js"></script>
<script src="/static/js/bootstrap-toggle.min.js"></script>
<script src="/static/js/jquery.bootstrap-touchspin.js"></script>
<script src="/static/js/bootstrap-slider.js"></script>

<script>
$(document).ready(function() {

    var menuID = document.getElementById("menu-tickets");
    if(menuID)
        menuID.className = menuID.className + " active";
    startTime();
    getLiveData();

    $('.open_cr').click(function() {
        $('#myModalCR').modal('show');
        $('#cr_data').html('data is loading, please wait ...');

        $.get("/get_crab_rating/", function (data) {
            if(data.status && data.status == 'success') {
                $('#cr_data').html(data.html);
            } else {
                showMessage('modal', 'danger', data.message);
            }
        }, 'json').error(function () {
            showMessage('modal', 'danger', 'timeout error, please try again');
        }).always(function() {
            //
        });

        return false;
    });

    $('.open_request_loan').click(function() {
        $('#myModalLoan').modal('show');
        $('#loan_data').html('data is loading, please wait ...');

        $.get("/get_loan/", function (data) {
            if(data.status && data.status == 'success') {
                $('#loan_data').html(data.html);
            } else {
                showMessage('modal', 'danger', data.message);
            }
        }, 'json').error(function () {
            showMessage('modal', 'danger', 'timeout error, please try again');
        }).always(function() {
            //
        });

        return false;
    });

});

    if (window.parent.frames.length > 0) {
        $.get("/check_iframe/", function (data) {
            //
        }, 'json').error(function () {
            //
        }).always(function() {
            //
        });
    }

    var currentHour = 08;
    var timeoutArray = [];
    var userBalance = 0.000000;

    function getRatingDetails(action) {
        $('#myModalDetailsC').modal('show');
        $('#cr_details_data').html('data is loading, please wait ...');

        $.post("/get_crab_rating/", {
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K',
            action: action
        }, function (data) {
            $('#cr_details_data').html(data);
        }).error(function () {
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
        if(m==59 && s==59)
            currentHour++;
            if(currentHour>23)
                currentHour = 0;
        document.getElementById('current_time').innerHTML = h + ":" + m + ":" + s;
        setTimeout(function () {
            startTime()
        }, 1000);
    }


    function firstUpperCase(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }

    function showMessage(where, type, message, messageID, timeout) {
        var divClass = (where == 'page') ? 'alert-'+type + '-page' : 'alert-'+type + '-modal';
        messageID = (messageID==undefined) ? where + firstUpperCase(type) : messageID;

        if(timeout != false && (timeout == undefined || timeout < 1)) {
            timeout = 5000;
        }

        var elementMessage = (where == 'page') ? '#' : '.';

        if($('.' + divClass).is(':visible')) {
            if(timeout!=false && timeoutArray[type] != undefined) {
                clearTimeout(timeoutArray[type]);
                timeoutArray[type] = undefined;
                delete timeoutArray[type];
            }
            $(elementMessage + messageID).append('<br>' + message);
        } else {
            $(elementMessage + messageID).html(message);
        }

        $('.' + divClass).show().focus();

        if(timeout!=false)
            timeoutArray[type] = setTimeout(function(){$('.' + divClass).hide('slow');},timeout);

        return false;
    }
    function getLiveData() {
        $.getJSON('/get_live_data/', function (data) {
            if(data.info)
                showMessage('page', 'info', data.info, undefined, false);
            if(data.count_cart_items > 0)
                $('#count_cart_items').html(data.count_cart_items);
            if(data.count_tickets > 0)
                if(data.waiting_tickets !== undefined)
                    $('#count_tickets').html(data.waiting_tickets + '/' + data.count_tickets);
                else
                    $('#count_tickets').html(data.count_tickets);
            //if(data.count_pendings > 0)
            if(data.count_payoffs > 0)
                $('#count_payoffs').html(data.count_payoffs);
            if(data.remain_amount)
                $('#remain_amount').html(data.remain_amount);
            if (data.bid_total>0) {
                $('#count_bids').html(data.bid_active + '/' + data.bid_total);
            }
            if(data.current_loan) {
                $('#current_loan').html(data.current_loan);
                $('#current_loan_block').css("display","initial");
            } else {
                $('#request_loan_block').css("display","initial");
            }
            console.log(data.last_update_mybins);
            if(data.last_update_mybins == 1) {
                $('#last_update_mybins_menu').css("display","initial");
                $('#last_update_mybins').css("display","initial");
            } else {
                $('#last_update_mybins_menu').css("display","none");
                $('#last_update_mybins').css("display","none");
            }
        }).error(function () {
            //
        }).always(function () {
            //
        });
    }

    function ReceiveGift() {
        $('#receive_gift').prop('disabled', true);
        var post_array = {
            'action': 'receive_gift',
            'type': 'dumps',
            'ids': '0',
            'csrfmiddlewaretoken': 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K',
        };
        $.post('/cart/', post_array, function (data) {
            if(data.status == 'success') {
                showMessage('modal', 'success', data.message);
                $('#go_to_my_orders').show();
            }
            if (data && data.status == 'fail') {
                showMessage('modal', 'danger', data.message);
            }
        }, 'json').error(function () {
            showMessage('modal', 'danger', 'timeout error, please try again');
        }).always(function () {
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
            'csrfmiddlewaretoken': 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K',
        };
        $.post(/get_loan/, post_array, function (data) {
            if(data.status == 'success') {
                showMessage('modal', 'success', data.message);
            }
            if (data && data.status == 'fail') {
                showMessage('modal', 'danger', data.message);
            }
        }, 'json').error(function () {
            showMessage('modal', 'danger', 'timeout error, please try again');
        }).always(function () {
            $('#get_my_loan').prop('disabled', false);
        });
        return true;
    }

</script>



</body>
</html>
