




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="2">

    <title>Ticket details</title>

    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/justified-nav.css')}}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('images/favicon_v3.ico')}}" rel="icon" type="image/x-icon">
    <link href="{{ asset('images/favicon_v3.ico')}}" rel="shortcut" type="image/x-icon">
    <style>
        .nav-right li a {
            padding-top: 6px !important;
            padding-bottom: 6px !important;
        }
    </style>
</head>

<body>


@include('layouts.header')
<!--Ticket table--->
    <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
        <div class="panel-body">
            <div class="col-sm-16">
                <div class="container">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-responsive">
                        <tr>
                            <td>Subject</td>
                            <td>{{ $ticket->subject }}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><p>{{ $ticket->description }}</p></td>
                        </tr>
                        <tr>
                            <td>Added date</td>
                            <td>{{ $ticket->created_at->format('F j, Y, g:i a') }}</td>
                        </tr>
                        <tr>
                            <td>Receiver</td>
                            <td>Brian</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td id="status_td">
                                @if($ticket->status == 'open')
                                    <font color="grey">open</font>
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    <a href="{{ route('tickets.resolved', $ticket->id) }}" class="btn btn-success">
                                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Mark as Resolved
                                    </a>
                                @else
                                    <font color="green">resolved</font>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>

    <div id="ticketComments">



<div class="panel panel-default" style="">
    <div class="panel-body">
        <div class="col-12">



   <!-- Comments -->
   @foreach($ticket->comments as $comment)
   <div class="panel panel-default">
       <div class="panel-body">
           <strong>posted by</strong>
           <i>
               @if($comment->user)
                   {{ $comment->user->username }}
               @elseif($comment->admin)
                   {{ $comment->admin->username }}
               @else
                   {{ 'User not found' }}
               @endif
           </i>
           {{ $comment->created_at->diffForHumans() }} <br><br>
           <p>{{ $comment->comment }}</p>
       </div>
   </div>
@endforeach


        </div>
    </div>
</div>

</div>


 <!-- Add Comment Form -->
 <form class="form-horizontal" action="{{ route('tickets.comment', $ticket->id) }}" method="POST" id="comment_form">
    @csrf
    <div class="form-group">
        <label class="col-md-2 control-label" for="id_comment">Comment</label>
        <div class="col-md-4">
            <textarea class="form-control" cols="25" id="id_comment" name="comment" required="required" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" class="col-sm-offset-3 btn btn-primary" value="Add Comment"/>
    </div>
</form>

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

    var menuID = document.getElementById("menu-tickets");
    if(menuID)
        menuID.className = menuID.className + " active";


    /*String.prototype.capitalise = function() {
        return this.charAt(0).toUpperCase() + this.slice(1);
    };*/

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

    var currentHour = 18;
    var timeoutArray = [];
    var userBalance = 0.000000;

    function getRatingDetails(action) {
        $('#myModalDetailsC').modal('show');
        $('#cr_details_data').html('data is loading, please wait ...');

        $.post("/get_crab_rating/", {
            csrfmiddlewaretoken: 'IGgSWytDmRA3YzxtjFMtUJvrx0gZYf3E',
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
            'csrfmiddlewaretoken': 'IGgSWytDmRA3YzxtjFMtUJvrx0gZYf3E',
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
            'csrfmiddlewaretoken': 'IGgSWytDmRA3YzxtjFMtUJvrx0gZYf3E',
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
        getComments(false);

        setInterval('getComments();', 15000);

        $('#addComment').click(function() {
            $('#addComment').attr('disabled', 'disabled');
            $.post('.', {
                csrfmiddlewaretoken: 'IGgSWytDmRA3YzxtjFMtUJvrx0gZYf3E',
                comment: $('#id_comment').val(),
                action: 'add_comment'
            }, function (data) {
                if (data && data.status == 'success') {
                    //showMessage('page', 'success', data.message);
                    getComments();
                    $('#id_comment').val('');
                } else {
                    showMessage('page', 'danger', data.message);
                }
            }, 'json').error(function () {
                showMessage('page', 'danger', 'timeout error, please try again');
            }).always(function () {
                $('#addComment').removeAttr('disabled', 'disabled');
            });
        });
    });

function getComments(first) {
    if(first)
        $('#ticketComments').html('data is loading, please wait...');
    $('#ticketComments').load("/tickets/comments/" + 1026349 + "/", function() {
        //
    });

    return true;
}
</script>


</body>
</html>
