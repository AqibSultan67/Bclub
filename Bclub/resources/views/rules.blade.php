<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="3">
    <title>Rules</title>
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
</head>

<body>
@include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">

                    <link rel="prefetch" href="/faq/">
                    <h2 class="featurette-heading">Terms of Service & Replace Policy</h2><br>
                    <ul class="nav nav-pills nav-stacked col-xs-3 col-sm-2 sidebar-offcanvas list-group" style="padding-right: 50px;">
                        <li class=""><a href="#russian" class="list-group-item" role="tab" data-toggle="tab">На Русском</a></li>
                        <li class=" active"><a href="#english" class="list-group-item" role="tab" data-toggle="tab">In English</a></li>
                    </ul>

                    <div class="tab-content col-xs-12 col-sm-9" style="font-size:14pt;">
                        <div role="tabpanel" class="tab-pane" id="russian">
                            <b>1.</b> Регистрируясь, вы соглашаетесь с правилами работы нашего сервиса.<br>
                            <b>2.</b> Мы можем предложить только то, что есть на сайте. Никакие другие товары и услуги мы не предоставляем.<br>
                            <b>3.</b> Связаться с нами можно через <a href="/tickets/">тикеты</a>.<br>
                            <b>4.</b> Мы не предоставляем бесплатных тестов.<br>
                            <b>5.</b> Возврат депозита невозможен. Грамотно планируйте сколько средств вы готовы потратить.<br>
                            <b>6.</b> Создание аккаунтов-клонов, попытки взлома, обман - сразу бан, без возврата денег.<br>
                            <br><a style="font-size:17pt;text-decoration: none;color:red;" name="replace-policy">7. Политика замены дампов:</a><br>
                            <b>7.1.</b> Мы заменяем: DECLINE (05), HOLD-CALL (04, 07, 41, 43), EXPIRED CARD (54), OTHER: 01, 14, 15, 51, 62, 78 CODE. <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='за исключением товаров, помеченных как "non refundable"'>*</span><br>
                            <b>7.2.</b> Мы не заменяем дампы, которые APPROVED по нашему чекеру.<br>
                            <b>7.3.</b> Мы не можем гарантировать или контролировать баланс дампа. Дампы с низким балансом незаменяемы.<br>
                            <b>7.4.</b> Для замены дампа - перейдите на страницу <a href="/orders/">Заказов</a> и чекните дамп (кнопка справа напротив дампа)<br>
                            <b>7.5.</b> Cтандартное время на замену <b>3 часа</b> (если куплено меньше 20 дампов)<br>
                            <b>7.5.1.</b> Если процент замененных дампов 0-10% - время на замену <b>48 часов</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 дампов'>*</span><br>
                            <b>7.5.2.</b> Если процент замененных дампов 11-15% - время на замену <b>24 часа</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 дампов'>*</span><br>
                            <b>7.5.3.</b> Если процент замененных дампов 16-25% - время на замену <b>12 часов</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 дампов'>*</span><br>
                            <b>7.5.4.</b> Если процент замененных дампов 26-35% - время на замену <b>6 часов</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 дампов'>*</span><br>
                            <b>7.5.5.</b> Если процент замененных дампов 36-50% - время на замену <b>1 час</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 дампов'>*</span><br>
                            <b>7.5.6.</b> Если процент замененных дампов больше 50% - замена не оказывается <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 дампов'>*</span><br>
                            <br><a style="font-size:17pt;text-decoration: none;color:red;" name="replace-policy">8. Политика замены CVV2:</a><br>
                            <b>8.1.</b> Мы заменяем: DECLINE (05), HOLD-CALL (04, 07, 41, 43), EXPIRED CARD (54), OTHER: 01, 14, 15, 51, 62, 78, EA, EB, N7 CODE. <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='за исключением товаров, помеченных как "non refundable"'>*</span><br>
                            <b>8.2.</b> Мы не заменяем карты, которые APPROVED по нашему чекеру.<br>
                            <b>8.3.</b> Мы не можем гарантировать или контролировать баланс карты. Карты с низким балансом незаменяемы.<br>
                            <b>8.4.</b> Для замены карты - перейдите на страницу <a href="/orders/">Заказов</a> и чекните карту (кнопка справа напротив карты)<br>
                            <b>8.5.</b> Cтандартное время на замену <b>1 час</b> (если куплено меньше 20 карт)<br>
                            <b>8.5.1.</b> Если процент замененных карт 0-10% - время на замену <b>12 часов</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 карт'>*</span><br>
                            <b>8.5.2.</b> Если процент замененных карт 11-15% - время на замену <b>6 часов</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 карт'>*</span><br>
                            <b>8.5.3.</b> Если процент замененных карт 16-25% - время на замену <b>3 часа</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 карт'>*</span><br>
                            <b>8.5.4.</b> Если процент замененных карт 26-35% - время на замену <b>2 часа</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 карт'>*</span><br>
                            <b>8.5.5.</b> Если процент замененных карт 36-50% - время на замену <b>1 час</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 карт'>*</span><br>
                            <b>8.5.6.</b> Если процент замененных карт больше 50% - замена не оказывается <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='при условии что куплено более 20 карт'>*</span><br>
                            <br>
                            <br>
                            <b>9.</b> Обратите внимание, что мой магазин не является облачным сервисом, чтобы хранить все ваши покупки вечно. Сохраняйте свои заказы локально на своем компьютере, смартфоне или записывайте его на салфетке для коктейля.
                            в целях безопасности заказы клиента удаляются через <b>6 месяцев</b> после покупки!.<br>
                            <br>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="english">
                            <b>1.</b> By registering and using the shop & services, you indicate that you have read and accept these Terms and agree to abide by and be bound by all such Terms.<br>
                            <b>2.</b> We only sell dumps and cvv2 cards, fulls and look-up services.<br>
                            <b>3.</b> Any customer is able to reach customer service by submitting a <a href="/tickets/">ticket</a>.<br>
                            <b>4.</b> As a long time player with vast reputation and rating on all carding communities we are not providing any free tests.<br>
                            <b>5.</b> Account balance in shop can only be spent, there is no money back, only refunds of current purchases. Competently plan how much money you are willing to spend.<br>
                            <b>6.</b> Creating clone accounts, attempting to hack, cheat the shop or abuse refund policy leads to an immediate ban, without any money back.<br>
                            <b>7.</b> Non-refundable purchases marked in RED indicate inability to receive any future refunds for this particular card.<br>

                            <br><a style="font-size:17pt;text-decoration: none;color:red;" name="replace-policy">8. Dumps Replacement Policy:</a><br>
                            <b>8.1.</b> We refund the following response codes: DECLINE (05), HOLD-CALL (04, 07, 41, 43), EXPIRED CARD (54), OTHER: 01, 14, 15, 51, 62, 78 CODE. <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                title='except for the dumps marked as "non refundable"'>*</span><br>
                            <b>8.2.</b> Approved dumps cannot be refunded.<br>
                            <b>8.3.</b> We cannot guarantee or control account balance on cards we sell. Valid cards with low balance are non refundable.<br>
                            <b>8.4.</b> Refunds are only performed via the <a href="/orders/">Orders Page</a> ("Check" button is available next to all refundable purchases)<br>
                            <b>8.5.</b> Default replacement time is <b>3 hours</b> (if purchased less than 20 dumps)<br>
                            <b>8.5.1.</b> If percent of replaced dumps is 0-10% - replacement time is <b>48 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 dumps'>*</span><br>
                            <b>8.5.2.</b> If percent of replaced dumps is 11-15% - replacement time is <b>24 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 dumps'>*</span><br>
                            <b>8.5.3.</b> If percent of replaced dumps is 16-25% - replacement time is <b>12 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 dumps'>*</span><br>
                            <b>8.5.4.</b> If percent of replaced dumps is 26-35% - replacement time is <b>6 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 dumps'>*</span><br>
                            <b>8.5.5.</b> If percent of replaced dumps is 36-50% - replacement time is <b>1 hour</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 dumps'>*</span><br>
                            <b>8.5.6.</b> If percent of replaced dumps is more than 60% - no replacements <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 dumps'>*</span><br>

                            <br><a style="font-size:17pt;text-decoration: none;color:red;" name="replace-policy">9. CVV2 Replacement Policy:</a><br>
                            <b>9.1.</b> We refund the following response codes:: DECLINE (05), HOLD-CALL (04, 07, 41, 43), EXPIRED CARD (54), OTHER: 01, 14, 15, 51, 62, 78, 82, EA, EB, N7 CODE. <span style="color:red;" rel="tooltip" data-toggle="tooltip"
                                data-placement="top" title='except for the dumps marked as "non refundable"'>*</span><br>
                            <b>9.2.</b> Approved cards cannot be refunded.<br>
                            <b>9.3.</b> We cannot guarantee or control account balance on cards we sell. Valid cards with low balance are non refundable.<br>
                            <b>9.4.</b> Replacements are only performed via the <a href="/orders/">Orders Page</a> ("Check" button is available next to all refundable purchases)<br>
                            <b>9.5.</b> Default replacement time is <b>1 hour</b> (if purchased less than 20 cards)<br>
                            <b>9.5.1.</b> If percent of replaced cards is 0-10% - replacement time is <b>12 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 cards'>*</span><br>
                            <b>9.5.2.</b> If percent of replaced cards is 11-15% - replacement time is <b>6 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 cards'>*</span><br>
                            <b>9.5.3.</b> If percent of replaced cards is 16-25% - replacement time is <b>3 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 cards'>*</span><br>
                            <b>9.5.4.</b> If percent of replaced cards is 26-35% - replacement time is <b>2 hours</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 cards'>*</span><br>
                            <b>9.5.5.</b> If percent of replaced cards is 36-50% - replacement time is <b>1 hour</b> <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 cards'>*</span><br>
                            <b>9.5.6.</b> If percent of replaced cards is more than 50% - no replacements <span style="color:red;" rel="tooltip" data-toggle="tooltip" data-placement="top" title='provided that bought at least 20 cards'>*</span><br>
                            <br>
                            <br>
                            <b>10.</b> Please note that Brian's Club is not a cloud service to store all your purchases forever. Save your orders locally to your computer, hand-held device, smartphone, notepad or write It down on a cocktail napkin. Customer's
                            orders are removed after <b>6 months</b> of purchase for security reasons!<br>
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

            var menuID = document.getElementById("menu-rules");
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
