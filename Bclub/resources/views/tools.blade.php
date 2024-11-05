
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="3">
    <title>Tools</title>
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
    <style>
        .form-group.required .control-label:after {
          content:" *";
          color:red;
        }

        ul.cardinfo {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .cardinfo li {
            display: flex;
            justify-content: space-between;
        }
        .cardinfo_name {
            width: 30%;
        }
        .cardinfo_value{
            width: 70%;
        }

        .sticky-content.fixed {
              position: fixed;
              top: 0;
              left: 0;
              right: 0;
              background: #DDD;
              padding: 0px;
              z-index: 999;
        }

        .buttonsCart {
            margin: 10px 0px 10px 0px;
        }

    </style>

</head>

<body>

@include('layouts.header')
    <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
        <div class="panel-body">
            <div class="col-sm-16">


    <h2 class="featurette-heading">Tools</h2><br>
    <div role="tabpanel">
        <ul class="nav nav-tabs" id="myTabs" role="tablist">
            <li class="active"><a href="#dumpsTab" role="tab" data-toggle="tab">Dumps Checker</a></li>
            <li class=""><a href="#ccTab" role="tab" data-toggle="tab">CVV2 Checker</a></li>
            <li class=""><a href="#ssnTab" role="tab" data-toggle="tab">SSN-DOB</a></li>
            <li class=""><a href="#binTab" role="tab" data-toggle="tab">Bins Lookup</a></li>
            <li class=""><a href="#zipTab" role="tab" data-toggle="tab">ZIPs Lookup</a></li>
            <li class=""><a href="#track1Tab" role="tab" data-toggle="tab">Track1 Generator</a></li>
            <li class="">
                <a href="#mybinsTab" role="tab" data-toggle="tab">My Bins
                    <span id="" class="" >new</span>
                </a>

            </li>
            <li class=""><a href="#historyTab" role="tab" data-toggle="tab" style="background-color: #b8cfee">History</a></li>
        </ul>
    </div>

    <div class="tab-content" style="margin-top:15px;">
        <div role="tabpanel" class="tab-pane active" id="dumpsTab">
            <div class="alert alert-block alert-info fade in" style=''
                 tabindex="-1">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    This stand-alone checker is not for replacements!<br>
                    Up to 10 dumps per search<br>
                    Format: <b>CARD_NUMBER=YYMM</b>
                </p>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="dumps_checker" class="col-sm-2 control-label">Checker</label>

                    <div class="col-sm-4">
                        <select class="form-control" id="dumps_checker">

                                <option value="luxchecker">LuxChecker
                                    (0.50$ / check)
                                </option>

                                <option value="ochecker">0check
                                    (0.50$ / check)
                                </option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dumps_data" class="col-sm-2 control-label"></label>

                    <div class="col-sm-4">
                        <textarea class="form-control" id="dumps_data" style="height: 150px;" placeholder="4455660157547825=1509"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default make_check" data-checktype="dumps"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Check</button>
                    </div>
                </div>
            </form>
            <div id="dumps_result"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="ccTab">
            <div class="alert alert-block alert-info fade in" style=''
                 tabindex="-1">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    This stand-alone checker is not for replacements!<br>
                    Up to 10 cards per search<br>
                    Format: <b>CARD_NUMBER=MMYY</b> or <b>CARD_NUMBER</b>=<b>MMYY</b>=CVV2=ADDRESS=ZIP
                </p>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="cc_checker" class="col-sm-2 control-label">Checker</label>

                    <div class="col-sm-4">
                        <select class="form-control" id="cc_checker"  style="width:600px;">

                                <option value="luxchecker">LuxChecker
                                    (0.50$ / check)
                                </option>

                                <option value="ochecker">0check
                                    (0.50$ / check)
                                </option>

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cc_data" class="col-sm-2 control-label"></label>

                    <div class="col-sm-4">
                        <textarea class="form-control" id="cc_data" style="height: 150px;width:600px;" placeholder="5434770001115784=1209=939=5th Avenue=939777"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default make_check" data-checktype="cc"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Check</button>
                    </div>
                </div>
            </form>
            <div id="cc_result"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="ssnTab">
            <div class="alert alert-block alert-info fade in" style=''
                 tabindex="-1">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    SSN / Date of Birth lookup service<br>
                </p>
                <h3>This service is currently offline. I sure will send out notifications to all the customers about re-opening of that lookup service. Thanks for your patience.</h3>
            </div>
        <div role="tabpanel" class="tab-pane" id="binTab">
            <div class="alert alert-block alert-info fade in" style=''
                 tabindex="-1">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    It's free!<br>
                    Up to 10 bins per search<br>
                    Format: <b>BIN_NUMBER</b> or <b>CARD_NUMBER</b>
                </p>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="bins_data" class="col-sm-2 control-label"></label>

                    <div class="col-sm-4">
                        <textarea class="form-control" id="bins_data" style="height: 150px;" placeholder="543477"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default make_check" data-checktype="bins"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
                    </div>
                </div>
            </form>
            <div id="bins_result"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="zipTab">
            <div class="alert alert-block alert-info fade in" style='' tabindex="-1">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    It's free!<br>
                    ZIP code look up service. Enter desired zip code to find out the state and city. Maximum of 10 zip codes per search.<br>
                    Format: <b>ZIP</b>
                </p>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="zips_data" class="col-sm-2 control-label"></label>

                    <div class="col-sm-4">
                        <textarea class="form-control" id="zips_data" style="height: 150px;" placeholder="62712"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default make_check" data-checktype="zips"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search</button>
                    </div>
                </div>
            </form>
            <div id="zips_result"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="track1Tab">
            <div class="alert alert-block alert-info fade in" style=''
                 tabindex="-1">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    It's free!
                </p>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="t1_first_name" class="col-sm-2 control-label">First Name</label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Brian" id="t1_first_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="t1_last_name" class="col-sm-2 control-label">Last Name</label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Krebs" id="t1_last_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="t1_track2" class="col-sm-2 control-label">Track2</label>

                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="4833160018438831=18031010000055300000" id="t1_track2">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default" id="track1_gen"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Generate Track1</button>
                    </div>
                </div>
            </form>
            <div id="track1_result"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="ccinppTab">
            <div class="alert alert-block alert-info fade in" style=''>
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    You can check if a card was used in PayPal<br>
                    Price is 0.75$ per each card<br>
                    Up to 5 card numbers per search<br>
                    Format: <b>CARD_NUMBER</b>
                </p>
            </div>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="ccinpp_data" class="col-sm-2 control-label"></label>

                    <div class="col-sm-4">
                        <textarea class="form-control" id="ccinpp_data" style="height: 150px;" placeholder="5217291802188711"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default make_check" data-checktype="ccinpp"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> Check</button>
                    </div>
                </div>
            </form>
            <div id="ccinpp_result"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="mybinsTab">
            <div class="col-sm-12 panel panel-default" style="background:#ffffe0">
                <p>This page will allow you to see the list of the bins you bought.</p>
                <p>Column called "Quantity in next update" shows a number of bins to be available in the next update.</p>
                <p>Press "Refresh Bins" button to get the latest information on the number of available bins in the upcoming update.</p>
            </div>
            <div class="col-sm-12">
                <div id="sticky" class="sticky-element">
                    <div class="sticky-content">
                        <span class="batchAddDiv">
                            <button class="btn btn-primary buttonsCart" style="margin-bottom: 10px;" id="refreshMyBins" onclick="refreshMyBins();">Refresh Bins</button>
                        </span>
                    </div>
                </div>
            </div>
            <div id="mybins_result"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="historyTab">
            <div class="alert alert-block alert-info fade in" style='' tabindex="-1">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <p>
                    History of your checks<br>
                    We keep records from last 7 days<br>
                </p>
            </div>
            <div id="history_result"></div>
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
<!-- /container -->





<script>
$(document).ready(function() {

    var menuID = document.getElementById("menu-checker");
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

        }, 'json').error(function () {

        }).always(function() {

        });
    }

    var currentHour = 18;
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


<script>
$(document).ready(function() {
    getHistory();
    if(window.location.hash) {
        switch(window.location.hash) {
            case '#historyTab':
                $('#myTabs li:eq(9) a').tab('show');
                break;
            case '#mybinsTab':
                $('#myTabs li:eq(8) a').tab('show');
                break;
            case '#track1Tab':
                $('#myTabs li:eq(7) a').tab('show');
                break;
            case '#zipTab':
                $('#myTabs li:eq(6) a').tab('show');
                break;
            case '#binTab':
                $('#myTabs li:eq(5) a').tab('show');
                break;
            case '#ccinppTab':
                $('#myTabs li:eq(4) a').tab('show');
                break;
            case '#balanceTab':
                $('#myTabs li:eq(3) a').tab('show');
                break;
            case '#ssnTab':
                $('#myTabs li:eq(2) a').tab('show');
                break;
            case '#ccTab':
                $('#myTabs li:eq(1) a').tab('show');
                break;
            default:
                $('#myTabs li:eq(0) a').tab('show');
        }
    }

    $('#track1_gen').click(function() {
        var this_button = $('#track1_gen');
        this_button.attr('disabled', 'disabled');
        $('#track1_result').html('<center>operation in progress, please wait ...</center>');
        $.post("/tools/", {
            check_type: 't1_gen',
            first_name: $('#t1_first_name').val(),
            last_name: $('#t1_last_name').val(),
            data: $('#t1_track2').val(),
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K'
        }, function (data) {
            if(data.status && data.status == 'success') {
                $('#track1_result').html(data.html).focus();
            } else {
                showMessage('page', 'danger', data.message);
                $('#track1_result').html('');
            }
        }, 'json').error(function () {
            showMessage('page', 'danger', 'timeout error, please try again');
            $('#track1_result').html('');
        }).always(function() {
            this_button.removeAttr('disabled');
        });
    });

    $('#ssn_get').click(function() {
        var this_button = $('#ssn_get');
        this_button.attr('disabled', 'disabled');
        $('#ssn_result').html('<center>operation in progress, please wait ...</center>');
        $.post("/tools/", {
            check_type: 'ssn',
            action: 'search',
            first_name: $('#ssn_first_name').val(),
            last_name: $('#ssn_last_name').val(),
            dob: $('#ssn_dob').val(),
            state: $('#ssn_state').val(),
            city: $('#ssn_city').val(),
            zip: $('#ssn_zip').val(),
            data: 'ssn',
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K'
        }, function (data) {
            if(data && data.status == 'success') {
                $('#ssn_result').html(data.html).focus();
            } else {
                showMessage('page', 'danger', data.message);
                $('#ssn_result').html('');
            }
        }, 'json').error(function () {
            showMessage('page', 'danger', 'timeout error, please try again');
            $('#ssn_result').html('');
        }).always(function() {
            this_button.removeAttr('disabled');
        });
    });

    $('#dl_get').click(function() {
        var this_button = $('#dl_get');
        this_button.attr('disabled', 'disabled');
        $('#dl_result').html('<center>operation in progress, please wait ...</center>');
        $.post("/tools/", {
            check_type: 'dl',
            action: 'search',
            first_name: $('#dl_first_name').val(),
            last_name: $('#dl_last_name').val(),
            state: $('#dl_state').val(),
            city: $('#dl_city').val(),
            zip: $('#dl_zip').val(),
            data: 'dl',
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K'
        }, function (data) {
            if(data && data.status == 'success') {
                $('#dl_result').html(data.html).focus();
            } else {
                showMessage('page', 'danger', data.message);
                $('#dl_result').html('');
            }
        }, 'json').error(function () {
            showMessage('page', 'danger', 'timeout error, please try again');
            $('#dl_result').html('');
        }).always(function() {
            this_button.removeAttr('disabled');
        });
    });

    $('body').on('click', '.ssn_buy', function(event) {
        event.preventDefault();
        var this_button = $(this);
        this_button.attr('disabled', 'disabled');
        var button_text = this_button.text();
        this_button.text('progress...');
        var sid = this_button.attr('sid');
        var pid = this_button.attr('pid');
        $.post("/tools/", {
            check_type: 'ssn',
            action: 'buy',
            sid: sid,
            pid: pid,
            data: 'ssn',
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K'
        }, function (data) {
            if(data.status == 'success') {
                this_button.text('Completed');
                $('[pid="'+pid+'"].ssn_block').html(data.html).focus();
            } else {
                showMessage('page', 'danger', data.message);
                this_button.text(button_text);
            }
        }, 'json').error(function () {
            showMessage('page', 'danger', 'timeout error, please try again');
            this_button.text(button_text);
        }).always(function() {
            this_button.removeAttr('disabled');
        });
    });


    $('#balance_check').click(function() {
        var amount = $('#balance_amount').val();
        $('.form-group').removeClass('has-error');
        $('.form-group').removeClass('has-success');
        var fail = false;
        if(amount) {
            amount = parseInt(amount);
            if(amount < 10.0 || isNaN(amount)) {
                $('.amount-group').addClass('has-error');
                fail = true;
            } else {
                $('#balance_amount').val(amount);
                $('.amount-group').addClass('has-success');
            }
        } else {
            $('#balance_amount').val('');
            $('.amount-group').addClass('has-error');
            fail = true;
        }
        var card_number = $('#balance_cc_num').val();
        if(!card_number.match(/^([0-9]{15,19})$/)) {
            $('.cc_num-group').addClass('has-error');
            fail = true;
        } else {
            $('.cc_num-group').addClass('has-success');
        }
        var cvv2 = $('#balance_cvv2').val();
        if(!cvv2.match(/^([0-9]{3,4})$/)) {
            $('.cvv2-group').addClass('has-error');
            fail = true;
        } else {
            $('.cvv2-group').addClass('has-success');
        }
        $('.exp-group').addClass('has-success');

        if(fail)
            return false;

        var this_button = $('#balance_check');
        this_button.attr('disabled', 'disabled');
        $('#balance_result').html('<center>operation in progress, please wait ...</center>');
        $.post("/tools/", {
            check_type: 'balance',
            card_number: card_number,
            exp_month: $('#balance_exp_month option:selected').val(),
            exp_year: $('#balance_exp_year option:selected').val(),
            cvv2: cvv2,
            amount: amount,
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K'
        }, function (data) {
            if(data.status && data.status == 'success') {
                $('#balance_result').html(data.html).focus();
            } else {
                showMessage('page', 'danger', data.message);
                $('#balance_result').html('');
            }
        }, 'json').error(function () {
            showMessage('page', 'danger', 'timeout error, please try again');
            $('#balance_result').html('');
        }).always(function() {
            this_button.removeAttr('disabled');
        });
    });

    $('.make_check').click(function() {
        var check_type = $(this).data('checktype');
        var check_data = $('#' + check_type + '_data').val();
        if(check_data == '') {
            showMessage('page', 'danger', 'data is empty');
            return false;
        }
        var checker_name = '';
        if(check_type == 'dumps' || check_type == 'cc') {
            checker_name = $('#' + check_type + '_checker option:selected').val();
            if(checker_name == '') {
                showMessage('page', 'danger', 'checker is required');
                return false;
            }
        }


        $('#' + check_type + '_result').html('<center>operation in progress, please wait ...</center>');
        var this_button = $(this);
        this_button.attr('disabled', 'disabled');
        $.post("/tools/", {
            check_type: check_type,
            data: check_data,
            checker_name: checker_name,
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K'
        }, function (data) {
            if(data.status && data.status == 'success') {
                $('#' + check_type + '_result').html(data.html).focus();
            } else {
                showMessage('page', 'danger', data.message);
                $('#' + check_type + '_result').html('');
            }
        }, 'json').error(function () {
            showMessage('page', 'danger', 'timeout error, please try again');
            $('#' + check_type + '_result').html('');
        }).always(function() {
            this_button.removeAttr('disabled');
        });
    });
});
function getHistory() {
    $('#history_result').html('<center>operation in progress, please wait ...</center>');
    $.post("/tools/", {
        check_type: 'get_history',
        csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K'
    }, function (data) {
        if(data && data.status == 'success') {
            $('#history_result').html(data.html).focus();
        } else {
            showMessage('page', 'danger', data.message);
            $('#history_result').html('');
        }
    }, 'json').error(function () {
        showMessage('page', 'danger', 'timeout error, please try again');
        $('#history_result').html('');
    }).always(function() {
        //this_button.removeAttr('disabled');
    });
}

function refreshMyBins() {
    var this_button = $('#refreshMyBins');
    this_button.attr('disabled', 'disabled');
    $('#mybins_result').html('<center>operation in progress, please wait ...</center>');
    $.post("/tools/", {
            csrfmiddlewaretoken: 'ScEbsG3Od8sL1o7c6hknTtJEAbxzvZ6K',
            check_type: 'get_userbins'
        }, function (data) {
        if(data && data.status == 'success') {
            $('#mybins_result').html(data.html).focus();
            $('#last_update_mybins_menu').css("display","none");
            $('#last_update_mybins').css("display","none");
        } else {
            showMessage('page', 'danger', data.message);
            $('#mybins_result').html('');
        }
    }, 'json').error(function () {
        showMessage('page', 'danger', 'timeout error, please try again');
        $('#mybins_result').html('');
    }).always(function() {
        this_button.removeAttr('disabled');
    });
}
</script>


</body>
</html>
