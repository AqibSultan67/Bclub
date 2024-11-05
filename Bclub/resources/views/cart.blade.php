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

    <title>Cart</title>
    <script>
        $(document).ready(function() {

            var menuID = document.getElementById("menu-cart");
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
        var cart_prices = {
            'total_amount': 0,
            'checker_fee': 0,
            'dumps_discount': 0,
            'dumps_discount_percent': 0,
            'summary': 0
        };

        function setPrices(draw) {
            cart_prices['summary'] = 0;
            cart_prices['dumps_discount_percent'] = 0;
            cart_prices['dumps_discount'] = 0;
            if (typeof countDumpPrices == 'function') {
                dumps_result = countDumpPrices();
                cart_prices['summary'] += dumps_result[0];
                cart_prices['dumps_discount_percent'] = dumps_result[1];
                cart_prices['dumps_discount'] = dumps_result[2];
                cart_prices['summary'] -= cart_prices['dumps_discount']
            }
            if (typeof countCCPrices == 'function') {
                cc_result = countCCPrices();
                cart_prices['summary'] += cc_result[0];
                cart_prices['cc_discount_percent'] = cc_result[1];
                cart_prices['cc_discount'] = cc_result[2];
                cart_prices['summary'] -= cart_prices['cc_discount']
            }

            if (typeof countFullzPrices == 'function') {
                fullz_result = countFullzPrices();
                cart_prices['summary'] += fullz_result[0];
                cart_prices['fullz_discount_percent'] = fullz_result[1];
                cart_prices['fullz_discount'] = fullz_result[2];
                cart_prices['summary'] -= cart_prices['fullz_discount']
            }

            $('.alert-info-page').hide();
            if (cart_prices['summary'] > userBalance) {
                showMessage('page', 'info', 'Not enough money on your account (' + cart_prices['summary'].toFixed(2) + ' $ required)', undefined, 0);
            }
            if (draw)
                drawPrices()
        }

        function drawPrices() {
            $('#cart_total_amount').html(cart_prices['total_amount'].toFixed(2));
            $('#cart_checker_fee').html(cart_prices['checker_fee'].toFixed(2));
            if (!cart_prices['dumps_discount'] && !cart_prices['fullz_discount'] && cart_prices['cc_discount']) {
                $('#cart_discount').html(cart_prices['cc_discount'].toFixed(2));
                $('#cart_discount_percent').html(cart_prices['cc_discount_percent'].toFixed(2));
            } else if (!cart_prices['dumps_discount'] && cart_prices['fullz_discount'] && !cart_prices['cc_discount']) {
                $('#cart_discount').html(cart_prices['fullz_discount'].toFixed(2));
                $('#cart_discount_percent').html(cart_prices['fullz_discount_percent'].toFixed(2));
            } else {
                $('#cart_discount').html(cart_prices['dumps_discount'].toFixed(2));
                $('#cart_discount_percent').html(cart_prices['dumps_discount_percent'].toFixed(2));
            }
            $('#cart_summary').html(cart_prices['summary'].toFixed(2));
        }
        $(document).ready(function() {
            drawPrices();
        });
    </script>

</head>

<body>
@include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">

                    <h2 class="featurette-heading">Shopping Cart</h2>

                    <span class="text-muted" style="font-size:14pt;">No items on your cart. <a href="">Let's go shopping</a>.</span>
                    <br>

                    <div class="col-sm-7"></div>
                    <div class="col-sm-5">

                    </div>

                    <div class="modal fade" id="modalViewRules" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="modalDepositTitle">Purchase rules</h4>
                                </div>
                                <div class="modal-body">
                                    <ul class="nav nav-pills nav-stacked col-xs-3 col-sm-2 sidebar-offcanvas list-group">
                                        <li class=""><a href="#russian" class="list-group-item" role="tab" data-toggle="tab">На Русском</a></li>
                                        <li class=" active"><a href="#english" class="list-group-item" role="tab" data-toggle="tab">In English</a></li>
                                    </ul>
                                    <div class="tab-content col-xs-9 col-sm-10">
                                        <div role="tabpanel" class="tab-pane" id="russian">
                                            <b>Внимательно прочитайте данную информацию перед покупкой:</b><br><br>
                                            <ul style="list-style-type: decimal;">
                                                <li>Полный адрес поставляется только с картами которые имеют отметку "Yes" в колонке "Full Address"</li>
                                                <li>В колонке "Name", отображается первое имя держателя карты, фамилия скрыта символами *.<br>
                                                    <b>Внимание!</b> Если после имени нет символов *, значит нет информации о фамилии держаталя карты.</li>

                                                <li>Наличие дополнительной информации к картой указан в колонке <b>"Extra"</b>, значения:
                                                    <ul>
                                                        <li><b>E-mail</b> = e-mail адрес</li>
                                                        <li><b>Phone</b> = телефонный номер</li>
                                                        <li><b>DOB</b> = Дата рождения</li>
                                                        <li><b>SSN</b> = Номер социального страхования</li>
                                                        <li><b>MMN</b> = Девичья фамилия матери</li>
                                                        <li><b>EmailPass</b> = пароль к e-mail</li>
                                                        <li><b>IP</b> = IP адрес держателя карты</li>
                                                        <li><b>LPA</b> = Сумма последней транзакции по карте</li>
                                                        <li><b>DrvLic</b> = водительские права</li>
                                                        <li><b>AT&T PIN</b> = the AT&T pin that allows you to forward all the phone calls to confirm high priced transactions</li>
                                                        <li><b>ATM PIN</b> = pin код для карты с cvv2. Для некоторых BIN вы можете сгенерировать track2, используя карту cvv2.</li>
                                                    </ul>
                                                </li>
                                                <li>Символ "-" или N/A в люой колонке обозначает, что такой информации нет.</li>
                                            </ul>
                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="english">
                                            <b>Carefully read the following instruction before buying:</b><br><br>
                                            <ul style="list-style-type: decimal;">
                                                <li>Complete address is available only for cards marked as "Yes" in the "Full Address" column.</li>
                                                <li>The "Name" column is only reflecting first name of the cardholder while last name is hidden by asterisks *.<br>
                                                    <b>Attention!</b> If you don't see asterisks * after the first name, then this card is not having a last name along with it.</li>

                                                <li>The <b>"Extra"</b> column shows availability of the following additional information for the card you're about to grab:
                                                    <ul>
                                                        <li><b>E-mail</b> = the e-mail address</li>
                                                        <li><b>Phone</b> = the phone number</li>
                                                        <li><b>DOB</b> = date of birth</li>
                                                        <li><b>SSN</b> = social security number</li>
                                                        <li><b>MMN</b> = mother's maiden name</li>
                                                        <li><b>EmailPass</b> = password for the e-mail</li>
                                                        <li><b>IP</b> = IP address of the cardholder</li>
                                                        <li><b>LPA</b> = amount of money last processed by cardholder</li>
                                                        <li><b>DrvLic</b> = driver license</li>
                                                        <li><b>AT&T PIN</b> = the AT&T pin that allows you to forward all the phone calls to confirm high priced transactions</li>
                                                        <li><b>ATM PIN</b> = the pin for the cvv2 card. You can generate a track2 using cvv2 card for some of the BINs on various carding communities.</li>
                                                    </ul>
                                                </li>
                                                <li>Symbol of "-" or "N/A" in any of the columns mean there's no information available.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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






</body>

</html>
