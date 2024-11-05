<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="3">
    <title>Education</title>
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
</head>

<body>
@include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">

                    <link rel="prefetch" href="/tools/">
                    <link rel="prefetch" href="/rules/">

                    <h2 class="featurette-heading">Education Blog, Knowledge Base, Tutorials and Guides</h2>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading1">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                        Different check results and region locks
                        </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                <div class="panel-body">

                                    <p>Hello everyone! Consider this to be some sort of a blog where I'm about to share my knowledge and personal experience. This part of my shop will contain thorough tutorials, guides to educate you. You may find It tedious,
                                        but It is what It is when It comes to education.</p>

                                    <p>I'd like to bring to your attention the most dreaded problem of all times that's discussed on various forums by newcomers and old school fellows. Differences in results on different checkers or even the same checker.</p>

                                    <p>Let's start with understanding simple basics of checking a card. What is a card check anyways? That's an authorization request sent for a random amount of money, usually between $1 to $10. Now an authorization request
                                        is something that generally Hotels or Airlines are sending to your credit card when you book It online or over the phone, so once card's issuing bank replies with a response code of 00 Approval this amount is placed
                                        on hold and cannot be spent. Once you come to a Hotel or Airport you're credit card is then charged for that amount that was first "frozen" with that authorization request. In professional words, If you're a business
                                        owner and have your own merchant account with POS terminal, to settle an authorization request you've got to make a capture charge request.</p>

                                    <p>But let's go back to checkers. There are many on the underground market. Try2Check, Card-OK, LuxChecker, ZeroCheck, etc. What they all are doing is sending authorization requests to the cards you want to check, but
                                        once the card's issuing bank is providing 00 Approval response code, they are voiding this transaction. If card's issuing bank is providing 05 Decline response code, then there's nothing to void, since no amount
                                        of money was "frozen" on card as we previously learned.</p>

                                    <p>What is a checker anyways? That's just a pile of hundreds of merchant accounts used in random, so each time you're pressing a "check" button and check same card, It will be checked by a different merchant account. That's
                                        mostly done not to flag or kill the merchant account itself, much less the card you're checking. Checker suppose to constantly re-new the list of the merchant accounts they are using to check cards, otherwise banks
                                        catch up with same places sending authorization requests all the time, so no miracle any future such requests will be declined.</p>

                                    <p>What are merchant accounts? Imagine you're a business owner and you've got a grocery store. You go to a bank and open a merchant account. You'll need to provide a business license, driver's license, social security
                                        and other information for the bank to approve your application and open a merchant account for you. Sure enough a POS terminal is also necessary that is connected to your merchant account If you have a grocery store.
                                        Now what you've got to understand is that this merchant account you opened will be registered in that state and will be region specific to that state only.</p>

                                    <p>Now what most people don't realize is that any authorization request that is being sent by checker is region specific because merchant accounts are registered in different states. Checkers are using hundreds of various
                                        merchant accounts that are registered in different locations, (i.e. different states, cities). Each time you press Check button - randomly picked merchant account is sending an authorization request to the bank
                                        and depending on the merchant location will respond with an Approval 00 or Decline 05 code. So even the same dump in the same checker may provide different results each time you check It based on merchant location.
                                        That's called Region Lock.</p>

                                    <p>As you can see on the picture below a set of four dumps was checked on Try2Check and provided response codes 14 "Card No. Error" which means the card is non-existent and rest are 05 Decline. Look at the right column
                                        that shows merchant location. Try2Check is the only checker that is sharing this information with It's customers.</p>

                                    <p><img src="{{ asset('images/img1.png')}}" align="center" width="1130" height="190"></p>

                                    <p>Now 5 minutes later we check same dumps again. Sure enough first dump is still the same 14 "Card No. Error" because there's nothing that can change this. But here goes the two cards that 00 Approval in new location
                                        for the dumps that were 05 Declined in other states.</p>

                                    <p><img src="{{ asset('images/img2.png')}} " align="center" width="1130" height="190"></p>

                                    <p>What we see here is a pure region lock situation with fraud prevention monitoring filtering at work. This kind of situation is getting more common. Banks are now having their own map of fraudulent activity and will
                                        filter out transactions that are out of the original owner pattern of use. In other words, If the card owner is driving through same places, shopping at Shop Rite, buying gas at Exxon and going to the same Mall
                                        for clothing - that's a pattern that banks are closely monitoring. When there's an activity that's out of this pattern the card may Decline 05. Same with time travel filters that detect and monitor physical card
                                        use. Say the owner has used the card in Shop Rite half an hour ago and you're buying an iPad in different state. Bank filters will detect time travel from point A to point B and Decline the transaction If It's impossible
                                        to travel that fast. Eventually It works in both directions. You may receive an Approval 00 on checker and Decline 05 upon use, but same may work in the other direction. You may receive Decline 05 on checker and
                                        Approval 00 upon use. Should I mention that checkers are operating and processing authorization requests in the same fashion no matter what shops you use. Some old school dogs of the game will still say "I know
                                        my bins, they are working, just sell me good dumps". Every dump has an owner behind It with different pattern of card use. As a result your bin that always works may decline just because your activity is out of
                                        original owner behavior. Hope that helps understand the truth behind response codes you get when using a card and checking It using merchant accounts (checkers).</p>

                                    <p>As I've been saying for years, stay safe & healthy!</p>

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

            var menuID = document.getElementById("menu-education");
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


    <script type="text/javascript">
        $(function() {
            $("[rel='tooltip']").tooltip();
        });
    </script>


</body>

</html>
