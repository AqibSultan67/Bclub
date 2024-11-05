<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="2">
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
    <title>Auction</title>
    <script>
        $(document).ready(function() {

            var menuID = document.getElementById("menu-auction");
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
            }, 'json').error(function() {
            }).always(function() {
            });
        }

        var currentHour = 13;
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

            }).always(function() {

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
</head>

<body>
    @include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">

                    <div class="col-sm-12 panel panel-default" style="background:#ffffe0">
                        <h3 style="color:royalblue">Auction rules:</h3>
                        <p>1. Dumps you're buying in auction are <b>non-refundable</b>. All bids and sales are final.</p>
                        <p>2. Bid increment is the least amount by which a bid must be raised for the next bid.</p>
                        <p>3. Dumps are sold subject to reserve price.</p>
                        <p>4. Quantity of available dumps may change during the auction.</p>
                        <p>5. Placing a bid will reserve money on your account balance until the auction ends.</p>
                        <p>6. Bid cannot be cancelled.</p>
                        <p>7. Auction starts 3 hours after daily released updates at 11 AM EST.</p>
                        <p>8. Auction ends half hour before the daily released update at 7.30 AM EST.</p>
                        <p></p>
                        <p></p>
                    </div>
                    <div class="col-sm-12 panel panel-default">
                        <div>
                            <h4>
                                Current auction:
                            </h4>
                            <span>Available to customers with 0 crabs rating and above</span><br>
                            <span>Auction starts: July 16, 2024, 6 p.m.</span><br>
                            <span>Auction ends: July 17, 2024, 2:30 p.m.</span><br>
                        </div>
                        <div>
                            <h4>
                                How to place a bid?
                            </h4>
                            <ul>
                                <li>search for your bin</li>
                                <li>enter the necessary quantity, depending on availability</li>
                                <li>press the "Place bid" button</li>
                            </ul>
                        </div>
                        <div>
                            <span>
                        <input type="text" name="search_bin_text" id="search_bin_text" width="20" maxlength="6">
                        <button class="btn btn-primary" style="margin-bottom: 10px;" id="searchbin" onclick="SearchBin('',this);">Search bin</button>
                    </span>
                            <div class="row" id="result_search_bin">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="alert alert-danger alert-danger-custom fade in" style='display:none;' tabindex="-1">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p id='customDanger'></p>
                        </div>
                        <div class="alert alert-block alert-success alert-success-custom fade in" style='display:none;' tabindex="-1">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p id='customSuccess'></p>
                        </div>
                        <div class="alert alert-block alert-info alert-info-custom fade in" style='display:none;' tabindex="-1">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <p id='customInfo'></p>
                        </div>
                    </div>
                    <div class="col-sm-7 panel panel-default">
                        <div>
                            <h4 style="float: left;">My bids: </h4>
                            <button class="btn btn-primary" style="margin-top: 3px; float: right;" onclick="RefreshLots(this);"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button>
                        </div>
                        <div class="row"></div>
                        <div id="result_my_lots">






                            <h5>You don't have any active bids.</h5>

                            <script>
                                $("input[spin='amountlot']").each(function(index) {
                                    max = $(this).attr('max');
                                    $(this).TouchSpin({
                                        min: 1,
                                        max: max,
                                        step: 1,
                                        boostat: 5
                                    });
                                });
                                $("input[spin='amountlot']").on("change", function(event) {
                                    var quantity = parseFloat($(this).val());
                                    var lot_id = $(this).attr('lot_id');
                                    var price_step = parseFloat($(this).attr('price_step'));
                                    var step = parseFloat($(this).attr('step'));
                                    var price_current = parseFloat($(this).attr('price'));
                                    var quantity_available = parseFloat($(this).attr('quantity_available'));
                                    var price = 0;
                                    if (quantity > quantity_available) {
                                        price = (price_current + price_step).toFixed(2);
                                        $('span[lotid="' + lot_id + '"][newprice]').html('<span style="color: red;">Available dumps quantity exceeded.<br>New Price: ' + price.toString() + '$</span>')
                                    } else {
                                        price = price_current;
                                        $('span[lotid="' + lot_id + '"][newprice]').html('');
                                    }
                                    amount = price * quantity;
                                    $('span[newbid="' + lot_id + '"]').html(amount.toFixed(2));
                                });
                            </script>
                        </div>
                    </div>
                    <div id="result_bid_list">
                    </div>



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





    <script>
        function SearchBin(bin, btn) {
            var this_button = $(btn);
            this_button.attr('disabled', 'disabled');
            if (bin == '') {
                bin = $('#search_bin_text').val();
            }
            $.post(".", {
                csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
                action: 'search_bin',
                bin: bin
            }, function(data) {
                if (data && data.status == 'success') {
                    $('#result_search_bin').html(data.html).focus();

                } else {
                    showMessage('custom', 'danger', data.message);
                }
            }, 'json').error(function() {
                showMessage('custom', 'danger', 'timeout error, please try again');
            }).always(function() {
                this_button.removeAttr('disabled');
            });
        }

        function RefreshLots(btn) {
            var this_button = $(btn);
            this_button.attr('disabled', 'disabled');
            $.post(".", {
                csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
                action: 'get_my_lots'
            }, function(data) {
                if (data && data.status == 'success') {

                    $('#result_my_lots').html(data.html).focus();

                } else {
                    showMessage('page', 'danger', data.message);
                }
            }, 'json').error(function() {
                showMessage('page', 'danger', 'timeout error, please try again');
            }).always(function() {
                this_button.removeAttr('disabled');
            });
        }

        function RefreshBid(id, btn) {
            var this_button = $(btn);
            this_button.attr('disabled', 'disabled');
            $.post(".", {
                csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
                action: 'get_bid_list',
                lot_id: id
            }, function(data) {
                if (data && data.status == 'success') {
                    $('#result_bid_list').html(data.html).focus();

                } else {
                    showMessage('page', 'danger', data.message);
                }
            }, 'json').error(function() {
                showMessage('page', 'danger', 'timeout error, please try again');
            }).always(function() {
                this_button.removeAttr('disabled');
            });
        }

        function MakeBid(id, btn, btntype) {
            var conf = confirm('Confirm that you want to bid?')
            if (conf) {
                var this_button = $(btn);
                this_button.attr('disabled', 'disabled');
                var lot_id = id;
                var request_quantity = $('input[spin="' + btntype + '"][lot_id="' + lot_id + '"]').val();
                $.post(".", {
                    csrfmiddlewaretoken: 'jXwEuO4tctWZzonDZr1ngz8ppjUj5aqH',
                    action: 'make_bid',
                    lot_id: lot_id,
                    request_quantity: request_quantity
                }, function(data) {
                    if (data && data.status == 'success') {
                        var current_price = data.current_price;

                        $('#my_lots').html(data.my_lots);
                        $('#user_balance').html(data.balance);
                        $('#user_balance_blocked').html(data.total_balance_blocked);
                        $('span[lot_id="' + lot_id + '"][current_price]').html(current_price);
                        $('span[lot_id="' + lot_id + '"][quantity_available]').html(data.quantity_available);
                        $('input[spin="' + btntype + '"][lot_id="' + lot_id + '"]').attr('price', current_price);
                        $('input[spin="' + btntype + '"][lot_id="' + lot_id + '"]').attr('quantity_available', data.quantity_available);
                        $('input[spin="' + btntype + '"][lot_id="' + lot_id + '"]').val(1);
                        $('input[spin="' + btntype + '"][lot_id="' + lot_id + '"]').change();
                        showMessage('custom', 'success', data.message);
                    } else {
                        showMessage('custom', 'danger', data.message);
                    }
                }, 'json').error(function() {
                    showMessage('custom', 'danger', 'timeout error, please try again');
                }).always(function() {
                    if (btntype == 'binquantity') {
                        RefreshLots();
                        $('#result_search_bin').html('')
                    }
                    RefreshBid(lot_id);
                    this_button.removeAttr('disabled');
                });
            }
        }
    </script>


</body>

</html>
