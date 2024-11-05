<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="1">
    <title>Billing</title>
    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<style>.qr-code {
    max-width: 150px;
    height: auto;
}</style>
</head>

<body>

 @include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">

                    <center>
                        <table class="table" style="width:800px;">
                            <tr align="center">
                                <td style="vertical-align: middle; text-align:left; border-top: none; font-weight: bold;" colspan="3">
                                    <span style="color: #2a79bd;">- Minimum amount to deposit:</span> <span style="font-weight: bold; color: red;">20 USD</span><br>
                                    <span style="color: #2a79bd;">- Get <span style="color: red;">10%</span> bonus on every deposit over $500 </span><br>
                                    <span style="color: #2a79bd;">- Processing fee:</span> 4%<br>
                                </td>
                                <td style="font-size: 30px; font-weight: bold; vertical-align: middle;text-align: center; border-top: none;" colspan="2">
                                    <span>Important</span>
                                </td>
                            </tr>
                            <tr align="center">
                                <td style="vertical-align: middle; border-top: none; font-weight: bold;" colspan="5">
                                    <span style="color: #2a79bd;">Never pay twice to the same crypto address.</span> Always get a new address. <span style="color: #2a79bd;">One address - one deposit!</span>
                                </td>
                            </tr>

                            <tr align="center">
                                <!-- USDT -->
                                <td style="vertical-align: bottom;border-top: none;">
                                    <img src="{{ asset('images/usdt_trc20.png') }}" alt="USDT TRC20">
                                    <form action="{{ route('deposit.store') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="paymentMethod" value="usdt(trc20)">
                                        <button type="button" class="btn btn-default" style="width: 100%;margin-top: 10px;" data-toggle="modal" data-target="#modalDepositRequestTRC">Deposit</button>
                                    </form>
                                </td>
                                <!-- Litecoin -->
                                <td style="vertical-align: bottom;border-top: none;">
                                    <img src="{{ asset('images/litecoin.png') }}" alt="Litecoin">
                                    <form action="{{ route('deposit.store') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="paymentMethod" value="litecoin">
                                        <button type="button" class="btn btn-default" style="width: 100%;margin-top: 10px;" data-toggle="modal" data-target="#modalDepositRequestLitecoin">Deposit</button>
                                    </form>
                                </td>
                                <!-- Dash -->
                                <td style="vertical-align: bottom;border-top: none;">
                                    <img src="{{ asset('images/dash_logo.png') }}" alt="Dash">
                                    <form action="{{ route('deposit.store') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="paymentMethod" value="dash">
                                        <button type="button" class="btn btn-default" style="width: 100%;margin-top: 10px;" data-toggle="modal" data-target="#modalDepositRequestDash">Deposit</button>
                                    </form>
                                </td>
                                <!-- Monero -->
                                <td style="vertical-align: bottom;border-top: none;">
                                    <img src="{{ asset('images/xmr_logo.png') }}" alt="Monero">
                                    <form action="{{ route('deposit.store') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="paymentMethod" value="monero">
                                        <button type="button" class="btn btn-default" style="width: 100%;margin-top: 10px;" data-toggle="modal" data-target="#modalDepositRequestMonero">Deposit</button>
                                    </form>
                                </td>
                                <!-- Bitcoin -->
                                <td style="vertical-align: bottom;border-top: none;">
                                    <img src="{{ asset('images/bitcoin.gif') }}" alt="Bitcoin">
                                    <form action="{{ route('deposit.store') }}" method="POST" style="display:inline;">
                                        @csrf
                                        <input type="hidden" name="paymentMethod" value="bitcoin">
                                        <button type="button" class="btn btn-default" style="width: 100%;margin-top: 10px;" data-toggle="modal" data-target="#modalDepositRequestBTC">Deposit</button>
                                    </form>
                                </td>
                            </tr>
                            <tr>
                                <!-- Display QR Code Section -->
                                <td style="vertical-align: middle; text-align: center; border-top: none;" colspan="5">
                                    <div id="divBtcAddresses" class="font-weight-bold"></div><br>
                                    @if(session('paymentAddress') && session('qrCode'))
                                        <b><p class="font-weight-bold">
                                            @if(session('paymentMethod') == 'bitcoin')
                                            Please Transfer your amount to this Bitcoin Address: {{ session('paymentAddress') }}
                                            @elseif(session('paymentMethod') == 'usdt(trc20)')
                                            Please  Transfer your amount to this USDT (TRC20) address: {{ session('paymentAddress') }}
                                            @elseif(session('paymentMethod') == 'litecoin')
                                            Please  Transfer your amount to this Litecoin Address: {{ session('paymentAddress') }}
                                            @elseif(session('paymentMethod') == 'dash')
                                            Pllease Transfer your amount to this Dash Address: {{ session('paymentAddress') }}
                                            @elseif(session('paymentMethod') == 'monero')
                                               Please Transfer your amount to this Monero Address: {{ session('paymentAddress') }}
                                            @endif
                                        </p></b>
                                        <img src="{{ session('qrCode') }}" alt="QR Code" class="img-fluid qr-code">
                                    @endif
                                </td>
                            </tr>
                            <tr align="left">
                                <td style="vertical-align: middle; border-top: none;" colspan="5">
                                    Bitcoin fee varies depending on the time of the day, the load on the Bitcoin network and may cost up to $40 per transaction, thus getting extremely unpopular.
                                    <br> https://www.blockchain.com/ru/explorer/charts/fees-usd-per-transaction
                                    <br> I will now accept transfers only to "b" segwit addresses to minimize the cost per transaction. Consider buying / sending using other crypto currencies such as Litecoin, Monero, Dash or USDT trc20. There are many
                                    crypto wallets and exchanges that you may find in Google. TrustWallet app is one such option you might consider worth installing.
                                </td>
                            </tr>
                            <tr align="center">
                                <td style="vertical-align: middle; border-top: none;" colspan="5">
                                    <b>Unconfirmed Transaction</b> - Bitcoin, Litecoin, Dash & Monero transactions should receive <b>7 confirmations</b> to be posted. Confirmations on blockchain networks can take from 15 minutes and up to 1 day If you
                                    send It without a fee.
                                </td>
                            </tr>


                        </table>
                    </center>
                    <br><br>

   <!-- Modal for USDT (TRC20) -->
<div class="modal fade" id="modalDepositRequestTRC" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="modalDepositRequestTitleTRC">Request an address</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('deposit.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="paymentMethod" value="usdt(trc20)">
                    <div id="divDepositRequestContentTRC">
                        - only USDT (<b>TRC20</b>) is accepted. If you send ERC20 or BEP20 It will be lost forever.<br>
                        - minimum amount is $20<br>
                        - one address can accept only one transfer! Never re-use an address twice. Second transfer will be impossible to retrieve <br>
                        <b> Amount to add ($):</b> &nbsp; &nbsp;
                        <input type="text" id="depositAmountTRC" name="amount" required>
                        <br><br> By pressing <b>"I understand"</b> button, you confirm reading these terms and agree with them.
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">I understand</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Bitcoin -->
<div class="modal fade" id="modalDepositRequestBTC" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="modalDepositRequestTitleBTC">Request an address</h4>
            </div>
            <div class="modal-body">
                <form action="{{ route('deposit.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="paymentMethod" value="bitcoin">
                    <div id="divDepositRequestContentBTC">
                        - processing fee 4%<br>
                        - minimum deposit amount is $20<br>
                        - deposits below $20 will not be posted to your account balance and will be lost forever<br>
                        <br><br>
                        <b> Amount to add ($):</b> &nbsp; &nbsp;
                        <input type="text" id="depositAmountBTC" name="amount" required>
                        <br><br>
                        By pressing <b>"I understand"</b> button, you confirm reading these terms and agree with them.
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">I understand</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Model for Litecoin-->
<div class="modal fade" id="modalDepositRequestLitecoin" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="modalDepositRequestTitleLitecoin">Request an address</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p class='modalDanger'></p>
                </div>
                <form id="depositFormLitecoin" action="{{ route('deposit.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="paymentMethod" value="litecoin">
                    <div id="divDepositRequestContentLitecoin">
                        - processing fee 4%<br>
                        - minimum deposit amount is $20<br>
                        - deposits below $20 will not be posted to your account balance and will be lost forever<br>
                        - one address can accept only one transfer! Never re-use an address twice. Funds will be lost forever.
                        <br><br>
                        <b> Amount to add ($):</b> &nbsp; &nbsp;
                        <input type="text" id="depositAmountLitecoin" name="amount" required>
                        <br><br>
                        By pressing <b>"I understand"</b> button, you confirm reading these terms and agree with them.
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">I understand</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal for Dash Deposit -->
<div class="modal fade" id="modalDepositRequestDash" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="modalDepositRequestTitleDash">Request an address</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p class='modalDanger'></p>
                </div>
                <form id="depositFormDash" action="{{ route('deposit.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="paymentMethod" value="dash">
                    <div id="divDepositRequestContentDash">
                        - processing fee 4%<br>
                        - minimum deposit amount is $20<br>
                        - deposits below $20 will not be posted to your account balance and will be lost forever<br>

                        <br><br>
                        <b> Amount to add ($):</b> &nbsp; &nbsp;
                        <input type="text" id="depositAmountDash" name="amount" required>

                        <br><br>
                        By pressing <b>"I understand"</b> button, you confirm reading these terms and agree with them.
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">I understand</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--MONERO-->
<div class="modal fade" id="modalDepositRequestMonero" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="modalDepositRequestTitleMonero">Request an address</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <p class='modalDanger'></p>
                </div>
                <form id="depositFormMonero" action="{{ route('deposit.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="paymentMethod" value="monero">
                    <div id="divDepositRequestContentMonero">
                        - processing fee 4%<br>
                        - minimum deposit amount is $20<br>
                        - deposits below $20 will not be posted to your account balance and will be lost forever<br>

                        <br><br>
                        <b> Amount to add ($):</b> &nbsp; &nbsp;
                        <input type="text" id="depositAmountMonero" name="amount" required>
                        <br><br>
                        By pressing <b>"I understand"</b> button, you confirm reading these terms and agree with them.
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">I understand</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</div>
</div>
</div>

<div id="dataTable">
    <table class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>System</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Date</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @forelse($deposits as $deposit)
            <tr>
                <td>{{ $deposit->system }}</td>
                <td>${{ number_format($deposit->amount, 2) }}</td>
                <td style="color: {{ $deposit->status === 'approved' ? 'green' : ($deposit->status === 'rejected' ? 'red' : 'black') }}">
                    {{ ucfirst($deposit->status) }}
                </td>
                <td>{{ $deposit->date->format('Y-m-d H:i:s') }}</td>
                <td>
                    <i class="fa fa-search" data-toggle="modal" data-target="#modalDetails"
                       data-system="{{ $deposit->system }}"
                       data-amount="{{ $deposit->amount }}"
                       data-status="{{ $deposit->status }}"
                       data-date="{{ $deposit->date->format('Y-m-d H:i:s') }}"></i>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align: center;">Your payments history is empty</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Modal -->

<div class="modal fade" id="modalDetails" tabindex="-1" role="dialog" aria-labelledby="modalDetailsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalDetailsLabel">Deposit Details</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <th>System</th>
                        <td id="modalSystem"></td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td id="modalAmount"></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td id="modalStatus"></td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td id="modalDate"></td>
                    </tr>
                    <tr id="paymentDetailsRow">
                        <th>Payment Details</th>
                        <td id="sessionEndedMessage" style="display: none;">Your session has been ended</td>
                        <td id="paymentDetails">
                            <div>
                                <strong>Payment Address:</strong>
                                <span id="modalPaymentAddress"></span>
                            </div>
                            <div>
                                <strong>QR Code Image:</strong>
                                <img id="modalQrCode" src="" alt="QR Code" class="img-fluid qr-code" style="width: 100px; height: 100px;">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Use jQuery to handle the modal data population
    $('#modalDetails').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var system = button.data('system'); // Extract info from data-* attributes
        var amount = button.data('amount');
        var status = button.data('status');
        var date = button.data('date');
        var paymentAddress = "{{ session('paymentAddress') }}"; // Get the payment address from the session
        var qrCode = "{{ session('qrCode') }}"; // Get the QR code image from the session

        var modal = $(this);
        modal.find('#modalSystem').text(system);
        modal.find('#modalAmount').text('$' + parseFloat(amount).toFixed(2));
        modal.find('#modalStatus').text(status.charAt(0).toUpperCase() + status.slice(1));
        modal.find('#modalDate').text(date);

        // Check if session has ended
        if (!paymentAddress && !qrCode) {
            modal.find('#paymentDetails').hide();
            modal.find('#sessionEndedMessage').show();
        } else {
            modal.find('#paymentDetails').show();
            modal.find('#sessionEndedMessage').hide();

            // Set payment address and QR code in the modal
            modal.find('#modalPaymentAddress').text(paymentAddress || 'N/A');
            modal.find('#modalQrCode').attr('src', qrCode || '');
        }
    });
</script>

<!--Model-->

              <div class="modal fade" id="modalDetails" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="modalDepositTitle">Payment Details</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger alert-danger-modal fade in" style='display:none;'>
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <p class='modalDanger'></p>
                                    </div>

                                    <div id="divDetailsContent"></div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    <!-- /container -->






    <script>
        $(document).ready(function() {

            var menuID = document.getElementById("menu-billing");
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

        var currentHour = 12;
        var timeoutArray = [];
        var userBalance = 0.000000;

        function getRatingDetails(action) {
            $('#myModalDetailsC').modal('show');
            $('#cr_details_data').html('data is loading, please wait ...');

            $.post("/get_crab_rating/", {
                csrfmiddlewaretoken: 'zh7A8TaoTKNKCGH5OQJWA7mZldmeCeyA',
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
                'csrfmiddlewaretoken': 'zh7A8TaoTKNKCGH5OQJWA7mZldmeCeyA',
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
                'csrfmiddlewaretoken': 'zh7A8TaoTKNKCGH5OQJWA7mZldmeCeyA',
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



</body>

</html>
