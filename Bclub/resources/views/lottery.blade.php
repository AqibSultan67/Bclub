<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="3">
    <title>Lottery</title>
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
    <script>
        $(document).ready(function() {

            var menuID = document.getElementById("menu-lottery");
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

        var currentHour = 17;
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

    <style>
        .nav-right li a {
            padding-top: 6px !important;
            padding-bottom: 6px !important;
        }
    </style>
</head>

<body>
@include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">

                    <div class="col-sm-12 panel panel-default" style="background:#ffffe0">
                        <h3 style="color:royalblue">Terms & Conditions to play the Lottery:</h3>
                        <p>1. Lottery is being played once a week on each Monday at 9 PM Eastern Time.</p>
                        <p>2. Price of a lottery ticket is 5$. Tickets cannot be refunded, replaced, there is no money back.</p>
                        <p>3. The winners are randomly & automatically selected from the range of others who bought tickets.</p>
                        <p>4. Lottery Prize:</p>
                        <ul>
                            <li>First place winner is getting 30% of the jackpot</li>
                            <li>Second place gets 20% of the jackpot</li>
                            <li>Third place is getting 10% of the jackpot</li>
                            <li>Fourth to 25 place winners will split the remaining 40% evenly between each other</li>
                        </ul>
                        <p>5. Maximum of 5 tickets per customer can be purchased.</p>
                        <p>6. Minimum of $100 in total deposits in order to buy lottery tickets.</p>
                        <p>7. You've got to have recent purchases for the last two weeks in order to buy tickets.</p>
                        <p>8. New Lottery is starting 24 hours after the current jackpot has been played.</p>
                        <p>Best of luck!!!</p>
                    </div>
                    <div class="row" id="lottery_data">




                        <div class="container-fluid">



                            <div class="col-sm-6">

                                <div class="row" style="margin-bottom:20px;">

                                    <div class="col-sm-12">
                                        <div id="sticky" class="sticky-element">
                                            <div class="sticky-content">
                                                <button type="button" class="btn btn-primary btn-lg" onclick="BuyLotteryTicket();">
                                        <span class="glyphicon glyphicon-tag"></span> Buy a ticket 5.00$
                                    </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div id="sticky" class="sticky-element">
                                    <div class="sticky-content">
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                Lottery started: June 4, 2024, 12:30 a.m.
                                            </li>
                                            <li class="list-group-item">
                                                Jackpot played on: July 1, 2024, 9 p.m.
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge">747</span>Participants
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge">$ 3735.00</span>Jackpot
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge">$ 747.00</span>First place prize:
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge">$ 747.00</span>Second place prize:
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge">$ 373.50</span>Third place prize:
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge">$ 67.91</span>From 4th to 25th place prize:
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row">





                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">Winners of the lottery "07/05/2024"</div>
                                        <div class="panel-body" style="padding: 0px;">
                                            <ul class="list-group">

                                                <li class="list-group-item">
                                                    <span>Place: #1</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103018</span><br>
                                                    <span>Date Purchased: May 18, 2024, 10:28 a.m.</span><br>
                                                    <span>Prize: <b>$ 613.00</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #2</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102319</span><br>
                                                    <span>Date Purchased: May 7, 2024, 6:44 p.m.</span><br>
                                                    <span>Prize: <b>$ 613.00</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #3</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 104032</span><br>
                                                    <span>Date Purchased: June 3, 2024, 9:26 a.m.</span><br>
                                                    <span>Prize: <b>$ 306.50</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #4</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103333</span><br>
                                                    <span>Date Purchased: May 23, 2024, 2:09 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #5</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103183</span><br>
                                                    <span>Date Purchased: May 21, 2024, 4:50 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #6</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103561</span><br>
                                                    <span>Date Purchased: May 28, 2024, 1:23 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #7</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103132</span><br>
                                                    <span>Date Purchased: May 20, 2024, 3:44 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #8</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102952</span><br>
                                                    <span>Date Purchased: May 17, 2024, 2:17 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #9</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102661</span><br>
                                                    <span>Date Purchased: May 13, 2024, 5:08 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #10</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 104011</span><br>
                                                    <span>Date Purchased: June 3, 2024, 7:12 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #11</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103105</span><br>
                                                    <span>Date Purchased: May 20, 2024, 8:50 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #12</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102973</span><br>
                                                    <span>Date Purchased: May 17, 2024, 6:04 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #13</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103354</span><br>
                                                    <span>Date Purchased: May 23, 2024, 7:13 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #14</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102412</span><br>
                                                    <span>Date Purchased: May 8, 2024, 11:20 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #15</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103903</span><br>
                                                    <span>Date Purchased: June 2, 2024, 3:42 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #16</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 104101</span><br>
                                                    <span>Date Purchased: June 3, 2024, 10:31 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #17</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103405</span><br>
                                                    <span>Date Purchased: May 24, 2024, 6:21 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #18</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102418</span><br>
                                                    <span>Date Purchased: May 9, 2024, 3:56 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #19</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103114</span><br>
                                                    <span>Date Purchased: May 20, 2024, 2:39 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #20</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103276</span><br>
                                                    <span>Date Purchased: May 21, 2024, 4:46 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #21</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103123</span><br>
                                                    <span>Date Purchased: May 20, 2024, 3:18 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #22</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102784</span><br>
                                                    <span>Date Purchased: May 14, 2024, 7:11 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #23</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 103732</span><br>
                                                    <span>Date Purchased: May 31, 2024, 1:16 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #24</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 104089</span><br>
                                                    <span>Date Purchased: June 3, 2024, 9:17 p.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                                <li class="list-group-item">
                                                    <span>Place: #25</span><br>
                                                    <span><span class="glyphicon glyphicon-tag"></span> #07/05/2024 - 102856</span><br>
                                                    <span>Date Purchased: May 16, 2024, 1:49 a.m.</span><br>
                                                    <span>Prize: <b>$ 55.73</b></span>
                                                </li>

                                            </ul>
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
        function BuyLotteryTicket() {
            var this_button = $(this);
            this_button.attr('disabled', 'disabled');
            $.post(".", {
                csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
                action: 'buy_lottery_ticket'
            }, function(data) {
                if (data && data.status == 'success') {
                    $('#lottery_data').html(data.html).focus();
                    showMessage('page', 'success', data.message);
                } else {
                    showMessage('page', 'danger', data.message);
                }
            }, 'json').error(function() {
                showMessage('page', 'danger', 'timeout error, please try again');
            }).always(function() {
                this_button.removeAttr('disabled');
            });
        }
    </script>


</body>

</html>
