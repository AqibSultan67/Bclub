@php
    use Carbon\Carbon;
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="onion-location" content="http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion">
    <meta name="n" content="1">
    <title>Welcome!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <link href="{{ asset('favicon_v3.ico') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('favicon_v3.ico') }}" rel="shortcut" type="image/x-icon">

</head>

<body>
@include('layouts.header')
        <div class="panel panel-default" style="margin-top: 15px;min-height: 400px;">
            <div class="panel-body">
                <div class="col-sm-16">
                   <div class="alert alert-block alert-warning fade in" style='margin-top:10px;display:none;font-size:12pt;' id="updateRelease">
                        Update will be available in <span id="time_update_left" data-seconds="0">-</span>, please be patient.
                    </div>
                    <div class="col-sm-12 panel panel-default" style="background:#e54d4d">
                        <h3 style="text-align: center;margin-top: 10px;"><a href="#"><span style="color:#ffe599;  font-weight: bold;" data-toggle="modal" data-target="#modalNotificationAccount">BE INFORMED & INFORM OTHERS! &nbsp; &nbsp; &nbsp; Verified From Omerta.Cm</span></a></h3>
                    </div>

                    <div class="col-sm-12 panel panel-default" style="background:#e9f7ef">
                        <h3 style="color:#2471a3;">Attention! Official shop domains <b>UPDATED</b>:</h3>
                        <p style="font-size: 15pt;">
                            <br>
                            <b>BCLUB.ST - BCLUB.HN - BCLUB.GL - BCLUB.MP - BCLUB.TK</b><br>
                            <br> Want to ALWAYS have access to the shop? <a href="https://www.torproject.org/download/" target="_blank">Download</a> TOR Browser for your phone, Mac or PC -> <a href="https://www.torproject.org/download/" target="_blank">torproject.org</a>
                            <br><br>
                            <span style="color:#2471a3;font-weight: bold;">Visit my TOR domains:</span>
                            <br><br> http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion
                            <br>


                            <br> All other domains are a scam! Never DuckDuckGo or Google the shop name or you WILL get scammed by fake similar looking sites. No sales in ICQ, Jabber, Telegram or any other messenger.<br>
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="col-sm-8">
                            <a href="#news" style="font-size: 15pt;">Fresh Updates &amp; SALE</a>
                        </div>
                        <div class="col-sm-4" style="text-align:right;font-style: italic;">
                            created 1 day, 19 hours ago
                        </div>
                    </div>

                    <div class="col-sm-12 panel panel-default">
                        <div style="font-size: 13pt; padding-top: 5px;">
                            @if ($news->isEmpty())
                                <p>No news available</p>
                            @else
                                @foreach ($news as $item)
                                    <p style="margin-bottom: 20px;">{!! $item->content !!}</p> <!-- Display the content with HTML formatting -->
                                @endforeach
                            @endif
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="col-sm-8">
                            <a href="#news" style="font-size: 15pt;">Fresh Updates &amp; SALE</a>
                        </div>
                        <div class="col-sm-4" style="text-align:right;font-style: italic;">
                            created 1 day, 19 hours ago
                        </div>
                    </div>

                    <div class="col-sm-12 panel panel-default">
                        <p style="font-size: 13pt;padding-top:5px;">
                            <br />Base name: <a href='/cvv/?base=323584' target="_blank"><span style='font-weight:bold;color:#348934'>0715_US_IP_PHONE_ZIP_EMAIL</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL,
                            IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br
                            />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323329' target="_blank"><span style='font-weight:bold;color:#348934'>0715_US_PHONE_IP_ZIP_UA_EMAIL</span></a><br />Countries: USA [AK,
                            AL, AZ, CA, CO, DC, DE, FL, GA, IL, IN, KY, LA, MD, ME, MO, MS, NC, NJ, NM, NY, OH, OR, PA, RI, SC, TN, TX, VA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br
                            />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323587' target="_blank"><span style='font-weight:bold;color:#348934'>0715_US_IP_ZIP_EMAIL_PHONE</span></a><br />Countries: USA [AL, AR,
                            AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV], Canada, United Kingdom, Puerto Rico<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323332' target="_blank"><span style='font-weight:bold;color:#348934'>0715_US_IP_ZIP_EMAIL_PHONE</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IL, IN, KY, LA, MD, ME, MI, MO, NC, NE, NJ, NV, NY, OH, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code,
                            Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323590' target="_blank"><span style='font-weight:bold;color:#348934'>0715_AU_US_ZIP</span></a><br />Countries:
                            USA [WA], Australia, Spain, Argentina<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />

                          <br />Base name: <a href='/cvv/?base=323581' target="_blank"><span style='font-weight:bold;color:#348934'>0715_US_UA_ZIP_IP_EMAIL_PHONE</span></a><br />Countries: USA [AK, AL,
                                AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323326' target="_blank"><span style='font-weight:bold;color:#348934'>0715_US_EMAIL_IP_LPA_ZIP_UA_PHONE</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, FL, KS, KY, MI, MN, MS, NC, NY, OK, PA, SC, TX, VA, WI], United Kingdom, Poland, France<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, Last
                                Paid Amount, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322303' target="_blank"><span style='font-weight:bold;color:#348934'>0715_US</span></a><br />Countries:
                                India, United Arab Emirates, South Africa<br />Info: Number, Exp Date, CVV2, Name, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/dumps/?base=322312' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Pocket</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <a href='/dumps/?base=322354' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Idol</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <a href='/dumps/?base=309478' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Bonsai</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0715_FULLZ_CREDIT_REPORT_DLSTATE_PHONE</span><br
                                />Info: Name, Address, Phone, Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0715_FULLZ_CREDIT_REPORT_DLN_PDF</span><br />Info: Name, Address,
                                Phone, Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0715_FULLZ_SSN_DOB_MMN</span><br />Info: Name, Address, Phone, Email, SSN, DOB, MMN<br
                                /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0715_FULLZ_SSN_DOB_EMAIL_DLN</span><br />Info: Name, Address, Phone, Email, SSN, DOB, Drivers License Number, DL State<br /><br />Stay safe & healthy, good
                                luck!<br /><br /><i>P.S. next update will be released tomorrow at 8 AM Eastern Time</i>
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="col-sm-8">
                            <a href="#news" style="font-size: 15pt;">Fresh Updates &amp; SALE</a>
                        </div>
                        <div class="col-sm-4" style="text-align:right;font-style: italic;">
                            created 2 days, 13 hours ago
                        </div>
                    </div>

                    <div class="col-sm-12 panel panel-default">
                        <p style="font-size: 13pt;padding-top:5px;">
                            <br />Base name: <a href='/cvv/?base=323077' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_IP_PHONE_ZIP</span></a><br />Countries: USA [AL, AR, CA, CT, FL, GA, IA, KS, KY, MA, MD, MN, ND, NJ, NY,
                            OH, OK, OR, PA, SC, TN, TX, VA, WA], France, Spain, Mexico<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name:
                            <a
                                href='/cvv/?base=323080' target="_blank"><span style='font-weight:bold;color:#348934'>0714_ES_US_IP</span></a><br />Countries: USA [AL, AR, AZ, CA, CO, FL, GA, HI, IA, ID, IL, IN, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NJ, NY, OH, OK, OR, PA, SC, TN, TX, VA,
                                WA, WI], Spain, Italy, Portugal<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323083'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_GB_US_UA</span></a><br />Countries: USA [AR, CO, CT, IL, IN, KS, KY, MA, MI, MN, NC, NE, NY, OH, PA, SC, SD, TX, VA, WV], United Kingdom, France, Germany<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, Last Paid Amount, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323341' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_PHONE_EMAIL_ZIP_UA</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                                Chile, Canada, Lebanon<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323350'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_EMAIL_UA_ZIP_PHONE</span></a><br />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, NC,
                                NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br
                                /><br />Base name: <a href='/cvv/?base=323095' target="_blank"><span style='font-weight:bold;color:#348934'>0714_GB_US_ZIP</span></a><br />Countries: United Kingdom, Australia, United Arab Emirates<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323359' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_LPA_DOB_IP_SSN_PHONE_ePASS_ZIP_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI, WV], Australia, Canada, India<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, Email password, <b>IP</b>, SSN, DOB, Last Paid Amount<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323104'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_PHONE</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MT, NC, ND, NE, NJ,
                                NM, NY, OH, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323362'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_PHONE_EMAIL_UA_IP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN,
                                MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid
                                rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323113' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_EMAIL_ZIP_UA_IP</span></a><br />Countries: USA [AK, AL,
                                AR, AZ, CA, CO, CT, DC, DE, FL, HI, IA, ID, IL, KS, KY, LA, MA, MD, ME, MI, MO, MS, ND, NE, NH, NM, NV, OH, OK, OR, RI, SC, SD, TN, TX, UT, VA, VT, WA, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip
                                code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323116' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_EMAIL_ZIP_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, FL, GA, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp Date, CVV2,
                                Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323119' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_EMAIL_IP_PHONE</span></a><br
                                />Countries: USA [AK, AL, AZ, CA, CO, CT, DC, DE, FL, GA, IA, ID, IL, IN, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WY]<br />Info: Number, Exp Date,
                                CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323377' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_UA_EMAIL_IP_ZIP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323122' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_DOB_PHONE_ZIP_UA_IP</span></a><br
                                />Countries: USA [AK, AL, AZ, CA, CO, CT, FL, GA, IL, IN, KY, LA, MA, MD, ME, MI, MO, MS, MT, NC, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI], Canada, United Kingdom, Australia<br />Info: Number, Exp Date,
                                CVV2, Name, Address, City, Zip code, Phone, <b>IP</b>, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323125' target="_blank"><span style='font-weight:bold;color:#348934'>0714_DE_US_UA</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, DE, GA, IA, IN, KS, KY, LA, ME, MI, MS, NJ, NV, NY, OH, OK, OR, PA, TX, UT, VT, WA, WI], Germany, Canada, Bosnia and Herzegovina<br />Info: Number, Exp Date, CVV2, Name, Address, City,
                                Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323383' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_PHONE_ZIP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                                Canada, Greece, France<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323128' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_PHONE_IP_UA_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323386' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_PHONE_EMAIL_UA_ZIP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323131' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_IP_EMAIL_PHONE_UA</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323389' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, DC, DE, FL, GA, IA, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, NC, ND, NJ, NY, OH, OR, PA, SC, TN, TX, VA, WA, WI, WV], Australia, Canada, Saudi Arabia<br />Info: Number, Exp Date, CVV2,
                                Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323392' target="_blank"><span style='font-weight:bold;color:#348934'>0714_CA_US_ZIP</span></a><br
                                />Countries: Canada, Greece, Bulgaria<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323140'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_PHONE_EMAIL_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS,
                                MT, NC, NE, NH, NJ, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WY], Canada<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No
                                replacements!<br /><br />Base name: <a href='/cvv/?base=323143' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA,
                                ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Norway, Japan, Canada<br />Info: Number, Exp Date, CVV2, Name, Address,
                                City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323401' target="_blank"><span style='font-weight:bold;color:#348934'>0714_CA_US_IP</span></a><br />Countries: Canada,
                                France, Ecuador<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323146' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_IP_EMAIL_ZIP</span></a><br
                                />Countries: USA [AL, AZ, CA, CO, CT, FL, GA, HI, IA, IL, KS, KY, LA, MA, MD, MN, MO, MS, MT, NC, NE, NH, NJ, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, VT, WA], Chile, Canada, Peru<br />Info: Number, Exp Date, CVV2, Name,
                                Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323149' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_ZIP_PHONE_IP</span></a><br
                                />Countries: USA [AL, CA, CO, CT, DC, FL, GA, HI, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, MT, NC, NH, NJ, NV, NY, OH, OK, OR, PA, RI, SC, TX, VA, VT, WA], Chile, Canada, Peru<br />Info: Number, Exp Date, CVV2, Name, Address,
                                City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323407' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_IP_EMAIL</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY], Puerto
                                Rico, India, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323152' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_UA_EMAIL_PHONE</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WY], Mexico, Trinidad and
                                Tobago, Armenia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323410' target="_blank"><span style='font-weight:bold;color:#348934'>0714_AU_US_IP</span></a><br
                                />Countries: USA [WA], Australia, Singapore, South Korea<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name:
                                <a href='/cvv/?base=323155' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_IP_EMAIL_UA</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY,
                                LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>,
                                User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323413' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_EMAIL_IP</span></a><br />Countries:
                                USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp Date, CVV2, Name, Address,
                                City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323416' target="_blank"><span style='font-weight:bold;color:#348934'>0714_GB_US_EMAIL</span></a><br
                                />Countries: USA [IL, VA], United Kingdom, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323161'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_IP_PHONE_ZIP_UA</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO,
                                MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate:
                                <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323419' target="_blank"><span style='font-weight:bold;color:#348934'>0714_CA_US_PHONE</span></a><br />Countries: Canada, Rwanda, Cameroon<br />Info:
                                Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323164' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_IP_ZIP_EMAIL_UA</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IA, IL, IN, KS, KY, LA, MD, MI, MN, MO, MT, NC, NJ, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip
                                code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323422' target="_blank"><span style='font-weight:bold;color:#348934'>0714_CA_US_ZIP</span></a><br
                                />Countries: Canada, Norway, Bulgaria<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323167'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_NZ_US_EMAIL</span></a><br />Countries: New Zealand, Australia, Singapore<br />Info: Number, Exp Date, CVV2, Name, Address, Phone, Email<br />Valid rate:
                                <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323425' target="_blank"><span style='font-weight:bold;color:#348934'>0714_CA_US_EMAIL</span></a><br />Countries: Canada, Bulgaria, Australia<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323170' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_EMAIL_UA_ZIP_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                                Canada, Guam, Mexico<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323173'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_AU_US_PHONE</span></a><br />Countries: Australia, Germany, Singapore<br />Info: Number, Exp Date, CVV2, Name, Address, Phone, Email<br />Valid rate: <b>90%</b><br
                                />No replacements!<br /><br />Base name: <a href='/cvv/?base=323179' target="_blank"><span style='font-weight:bold;color:#348934'>0714_AU_US</span></a><br />Countries: Australia, Norway, Belgium<br />Info: Number, Exp Date,
                                CVV2, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323437' target="_blank"><span style='font-weight:bold;color:#348934'>0714_CA_US_IP</span></a><br />Countries:
                                Canada, Guyana, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323182' target="_blank"><span style='font-weight:bold;color:#348934'>0714_FR_US</span></a><br
                                />Countries: France, Czech Republic, Canada<br />Info: Number, Exp Date, CVV2, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323440' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323185' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US</span></a><br
                                />Countries: Germany, Saudi Arabia, Kuwait<br />Info: Number, Exp Date, CVV2, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323188' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US</span></a><br
                                />Countries: Barbados, Canada, Japan<br />Info: Number, Exp Date, CVV2, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323446' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323191' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CT, FL, GA, ID, IN, KY, LA, MD, MO, NC, ND, NE, NV, NY, SC, SD, TX, UT, VA, WA, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate:
                                <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323449' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_EMAIL_PHONE_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ,
                                CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2,
                                Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323194' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_ZIP_PHONE</span></a><br
                                />Countries: USA [AL, AZ, CA, CO, CT, FL, GA, IA, ID, IL, IN, KY, LA, MA, MD, MI, MN, MS, MT, NC, ND, NE, NM, NY, OK, PA, SC, TX, WA, WI, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br
                                />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323197' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_ZIP_PHONE</span></a><br />Countries: USA [AL, AR,
                                AZ, CA, CO, CT, DC, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NH, NJ, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City,
                                Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323200' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_EMAIL_IP_ZIP</span></a><br
                                />Countries: USA [AK, AZ, CA, CO, FL, GA, HI, ID, IL, IN, MA, MT, NJ, NV, NY, OR, PA, SC, TN, TX, UT, VA, WA], Norway, Canada, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br
                                />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323203' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_PHONE_EMAIL_ZIP</span></a><br />Countries: USA [AK,
                                AL, AZ, CA, CO, DC, FL, GA, HI, ID, IL, MA, ME, MI, MN, MT, NC, ND, NV, NY, OH, OK, OR, PA, TN, TX, UT, VA, WA, WI], Canada, Norway, South Korea<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email,
                                <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323461' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_IP_PHONE_ZIP</span></a><br />Countries:
                                USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323206' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_IP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AK, AL, AZ, CA, CO, FL, GA, HI, ID, IL, LA, MA, MI, MN, NJ, NM, NV, NY, OH, OR, PA, SC, TN, TX, UT, WA], Norway, Canada, South Korea<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone,
                                Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323209' target="_blank"><span style='font-weight:bold;color:#348934'>0714_CO_US_PHONE</span></a><br />Countries:
                                USA [CO, FL, IA, MD, MN, NY, OH, TX, VA, WV], Colombia, Croatia, Chile<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br
                                />Base name: <a href='/cvv/?base=323473' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_IP_EMAIL</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, IL, IN, KS,
                                KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid
                                rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323218' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_EMAIL</span></a><br />Countries: USA [AL, AR, AZ, CA,
                                CO, CT, DC, FL, GA, HI, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MT, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI], Taiwan, South Korea, Peru<br />Info: Number, Exp Date, CVV2, Name, Address,
                                City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323476' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_EMAIL_IP_ZIP</span></a><br

                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV], Puerto Rico, India, Chile<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323221' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_UA_PHONE_EMAIL</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323479' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_PHONE_EMAIL_IP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323224' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_UA_EMAIL_IP</span></a><br
                                />Countries: USA [AL, AZ, CA, CO, FL, GA, IA, ID, ND, NM, NV, NY, OR, TX, UT, WA, WI, WY], Sri Lanka, Lebanon, Norway<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Email, <b>IP</b>, User Agent<br />Valid
                                rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323482' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_IP_EMAIL_PHONE</span></a><br />Countries: USA [AL, AR, AZ,
                                CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NV, NY, OH, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name,
                                Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323227' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, IA, IL, IN, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI], Chile, Australia, Norway<br />Info:
                                Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323485' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_ZIP_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                                India, United Kingdom, Canada<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323230' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_PHONE_EMAIL</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323488' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_IP_EMAIL</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NE, NH, NJ, NY, OH, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI], Canada, Barbados, Chile<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323233' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_PHONE_IP_ZIP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323491' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_PHONE_IP_ZIP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV], Chile, Norway, Canada<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323236' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_IP_EMAIL_ZIP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NH, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323494' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_UA_EMAIL_IP_PHONE_ZIP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                                Puerto Rico, Canada, Saint Lucia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323239'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_IP_ZIP_PHONE</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT,
                                NC, ND, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br
                                /><br />Base name: <a href='/cvv/?base=323497' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_EMAIL_PHONE_UA</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA,
                                ID, IL, IN, KS, KY, LA, MA, MD, ME, MH, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Puerto Rico, Mexico, Dominican Republic<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323242' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_IP_ZIP_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323245' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323503' target="_blank"><span style='font-weight:bold;color:#348934'>0714_AU_US_IP</span></a><br
                                />Countries: USA [WA], Australia, Spain, Argentina<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323248'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_CA_US_ZIP</span></a><br />Countries: Canada, Norway, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid
                                rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323506' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_UA_IP_ZIP_PHONE_EMAIL</span></a><br />Countries: USA [AK, AL,
                                AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MP, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Dominican Republic,
                                Puerto Rico, Jamaica<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323251'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_IP_PHONE_EMAIL</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS,
                                NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br
                                /><br />Base name: <a href='/cvv/?base=323509' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_UA_ZIP_PHONE_IP_EMAIL</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA,
                                ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Puerto Rico, Dominican Republic, Canada<br />Info: Number, Exp Date,
                                CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323254' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_PHONE_EMAIL_ZIP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI, WY]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323512' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_EMAIL_IP_UA_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MP, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV,
                                WY], Puerto Rico, Canada, Dominican Republic<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name:
                                <a href='/cvv/?base=323257' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_IP_EMAIL_PHONE</span></a><br />Countries: USA [CA, FL, GA, IA, NC, NJ, OH, TX, VA], United Kingdom, Germany, France<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323515' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_DOB_SSN_MMN_PHONE_UA</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IA, IL, IN, LA, MA, MD, ME, MI, MN, MO, MS, NH, NJ, NM, NV, NY, OH, OR, PA, SC, TN, TX, UT, VA, VT, WA, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City,
                                Zip code, Phone, <b>IP</b>, SSN, MMN, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323260' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_EMAIL_ZIP_IP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY], Chile, Canada,
                                Peru<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323518' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_SSN_IP_DOB_MMN_UA_ZIP_PHONE</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IL, IN, KY, LA, MA, MD, MI, MN, MO, MS, NH, NJ, NM, NV, NY, OH, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address,
                                City, Zip code, Phone, <b>IP</b>, SSN, MMN, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323263' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_EMAIL_PHONE_ZIP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323521' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_UA_DOB_IP_SSN_PHONE_MMN_ZIP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, IL, IN, LA, MA, MD, MI, MN, MO, MS, NH, NJ, NM, NY, OR, PA, SC, TN, TX, UT, VA, VT, WA, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone,
                                <b>IP</b>, SSN, MMN, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323266' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_EMAIL_PHONE_IP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NE, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY], France, Italy, Germany<br />Info:
                                Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323524' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_SSN_ZIP_PHONE_IP_MMN_UA_DOB</span></a><br
                                />Countries: USA [AL, CA, CO, CT, FL, GA, ID, IL, IN, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NH, NJ, NM, NY, OH, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code,
                                Phone, <b>IP</b>, SSN, MMN, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323269' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_UA_IP_ZIP_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, FM, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV,
                                WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323527' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_UA_ZIP_DOB_MMN_IP_PHONE_SSN</span></a><br
                                />Countries: USA [AK, AL, AZ, CA, CO, CT, DC, DE, FL, GA, IL, IN, LA, MA, MD, ME, MI, MN, MO, MS, NH, NJ, NM, NY, OR, PA, TN, TX, UT, VA, VT, WA, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone,
                                <b>IP</b>, SSN, MMN, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323017' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_UA_ZIP_PHONE_IP_EMAIL</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI, WY]<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323530' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_MMN_DOB_UA_PHONE_SSN_IP_ZIP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IL, IN, LA, MA, MD, MI, MN, MO, MS, NH, NJ, NM, NY, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code,
                                Phone, <b>IP</b>, SSN, MMN, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323275' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_IP_PHONE_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CT, DC, FL, GA, HI, IA, ID, IN, KS, KY, LA, MD, ME, MI, MS, MT, NC, ND, NE, NJ, NM, NV, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VT, WV]<br />Info: Number, Exp Date, CVV2, Name, Address,
                                City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323533' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_DOB_IP_UA_SSN_MMN_ZIP_PHONE</span></a><br
                                />Countries: USA [AL, AR, CA, CO, CT, DC, DE, FL, GA, IL, IN, KS, LA, MA, MD, ME, MI, MN, NH, NJ, NM, NV, NY, OH, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code,
                                Phone, <b>IP</b>, SSN, MMN, DOB, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323278' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_ZIP_PHONE_IP</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI], United Kingdom, Canada<br />Info:
                                Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323281' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WY], Chile, Barbados, India<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323290' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_UA_IP_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323293' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_UA_ZIP_PHONE_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323038' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_IP_ZIP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323296' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US</span></a><br
                                />Countries: United Arab Emirates, India, South Africa<br />Info: Number, Exp Date, CVV2, Name, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323041' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_PHONE_ZIP_IP_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MT, NC, NE, NH, NJ, NM, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number,
                                Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323044' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_IP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, NC, NE, NH, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date,
                                CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323053' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI, WV, WY], Canada,
                                India, United Kingdom<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323059' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_EMAIL_PHONE</span></a><br
                                />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV, WY], Canada, India, United
                                Kingdom<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323062' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_IP_ZIP_PHONE</span></a><br
                                />Countries: USA [AL, AZ, CA, CO, CT, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, VA, WA, WI, WV], Chile, Egypt, Canada<br />Info: Number, Exp
                                Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323065' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_ZIP_PHONE_UA_IP_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br
                                />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323068' target="_blank"><span style='font-weight:bold;color:#348934'>0714_GB_US_ZIP</span></a><br
                                />Countries: United Kingdom, Australia, India<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323071' target="_blank"><span style='font-weight:bold;color:#348934'>0714_US_EMAIL_PHONE_ZIP</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                                Canada, United Kingdom, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/dumps/?base=322309' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Purse</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <a href='/dumps/?base=322351' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Apricot</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <a href='/dumps/?base=309475' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Malvern</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0714_FULLZ_CREDIT_REPORT_DLN_PDF</span><br
                                />Info: Name, Address, Phone, Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0714_FULLZ_CREDIT_REPORT_DLSTATE_PHONE</span><br />Info: Name,
                                Address, Phone, Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0714_FULLZ_SSN_DOB_MMN</span><br />Info: Name, Address, Phone, Email, SSN,
                                DOB, MMN<br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0714_FULLZ_SSN_DOB_EMAIL_DLN</span><br />Info: Name, Address, Phone, Email, SSN, DOB, Drivers License Number, DL State<br /><br />Stay safe & healthy,
                                good luck!<br /><br /><i>P.S. next update will be released tomorrow at 8 AM Eastern Time</i>
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="col-sm-8">
                            <a href="#news" style="font-size: 15pt;">Fresh Updates &amp; SALE</a>
                        </div>
                        <div class="col-sm-4" style="text-align:right;font-style: italic;">
                            created 2 days, 13 hours ago
                        </div>
                    </div>

                    <div class="col-sm-12 panel panel-default">
                        <p style="font-size: 13pt;padding-top:5px;">
                            <br />Base name: <a href='/cvv/?base=322816' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_PHONE_ZIP_IP_EMAIL</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN,
                            KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NH, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br
                            />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322054' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_LPA</span></a><br />Countries: USA [AK, AL, AR, AZ, CA,
                            CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Canada, Philippines, France<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Last Paid Amount<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322828' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US</span></a><br
                            />Countries: India, United Arab Emirates, Japan<br />Info: Number, Exp Date, CVV2, Name, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322831' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_EMAIL_IP</span></a><br
                            />Countries: USA [AL, AZ, CA, CO, CT, DC, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, ME, MI, MN, MO, MS, MT, NC, NE, NJ, NM, NV, NY, OH, OK, OR, SC, TN, TX, UT, VA, WA, WI, WV], Chile, Canada, Peru<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322834' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_PHONE_ZIP_IP_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322837' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_EMAIL_PHONE_ZIP</span></a><br
                            />Countries: USA [AL, CA, CT, FL, GA, IA, IL, IN, KS, KY, LA, MA, ME, MI, MN, MO, MS, MT, NC, NE, NJ, NV, NY, OH, OK, PA, SC, TN, TX, UT, VA, WA], Chile, Canada, Peru<br />Info: Number, Exp Date, CVV2, Name, Address, City,
                            Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322840' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_IP_PHONE_ZIP_LPA</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, Last Paid Amount<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322843' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US</span></a><br
                            />Countries: India, United Arab Emirates, South Africa<br />Info: Number, Exp Date, CVV2, Name, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322846' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_EMAIL_IP_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322849' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_EMAIL_ZIP_PHONE_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, FL, GA, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MT, NC, NH, NJ, NV, NY, OH, OK, OR, PA, SD, TN, TX, UT, VA, WA, WI, WV, WY], Canada, Greece<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322852' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_EMAIL</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322855' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322858' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_IP_ZIP</span></a><br
                            />Countries: USA [AK, AL, AZ, CA, CO, FL, GA, ID, IL, IN, KS, KY, MA, MD, ME, MI, MN, MO, MT, NC, NE, NJ, NM, NY, OH, OK, OR, PA, SD, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code,
                            Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322861' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Canada,
                            Spain, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322864' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_ZIP_PHONE_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MT, NC, ND, NE, NH, NJ, NM, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Europe Union, Indonesia,
                            India<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322867' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_IP_UA_PHONE_ZIP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=321844' target="_blank"><span style='font-weight:bold;color:#348934'>0713_HK_US_IP</span></a><br
                            />Countries: USA [CA, FL, KY, MA, OR, SC, TX], Hong Kong, Lithuania, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br
                            />Base name: <a href='/cvv/?base=322873' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_ZIP_IP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN,
                            KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Dominican Republic, Canada, Trinidad and Tobago<br />Info: Number, Exp Date, CVV2,
                            Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322876' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_IP_PHONE_EMAIL</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Dominican
                            Republic<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322879' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_IP_UA_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                            Dominican Republic, Mexico, Turks and Caicos Islands<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name:
                            <a href='/cvv/?base=322882' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_LPA_ZIP_PHONE_IP_EMAIL</span></a><br />Countries: USA [AK, AL, AZ, CA, CO, CT, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME,
                            MI, MN, MO, MS, NC, NE, NH, NJ, NM, NV, NY, OH, OK, PA, RI, SC, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, Last Paid Amount<br />Valid rate: <b>90%</b><br
                            />No replacements!<br /><br />Base name: <a href='/cvv/?base=322888' target="_blank"><span style='font-weight:bold;color:#348934'>0713_SG_MY</span></a><br />Countries: Singapore, Malaysia, France<br />Info: Number, Exp Date,
                            CVV2, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322891' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_EMAIL_ZIP_PHONE_UA</span></a><br
                            />Countries: USA [AK, AL, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV], Chile, Peru, Canada<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322894' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_EMAIL_UA_ZIP_PHONE</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, DC, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI, WV, WY], Chile, Peru, Canada<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322897' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_ZIP_UA_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, IA, ID, IL, IN, KY, LA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI, WV, WY], Chile, India, Peru<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322900' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_LPA_IP_PHONE_SSN_DOB_EMAIL_MMN_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                            Dominican Republic<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, SSN, MMN, DOB, Last Paid Amount<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322903'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_EMAIL_ZIP_PHONE</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS,
                            MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV, WY], Dominican Republic, Canada, Puerto Rico<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br
                            />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322906' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_EMAIL_UA_IP</span></a><br />Countries: USA [AL,
                            AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address,
                            City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322909' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_MMN_DOB_SSN_IP_PHONE_ZIP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, SSN, MMN, DOB<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322912' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_IP_PHONE_ZIP_UA</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322915' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_ZIP_PHONE</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                            Norway, Peru, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322921' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_LPA_ZIP_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, Last Paid Amount<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322411' target="_blank"><span style='font-weight:bold;color:#348934'>0713_GB_US_UA</span></a><br
                            />Countries: USA [CT, GA, KY, NC, NJ, NY, RI], United Kingdom, China, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br
                            /><br />Base name: <a href='/cvv/?base=322924' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_IP_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID,
                            IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Canada, France, Brazil<br />Info: Number, Exp Date, CVV2, Name, Address, City,
                            Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322672' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP_IP_UA_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI, WV], Saint Lucia<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322675' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_EMAIL</span></a><br
                            />Countries: USA [AL, AR, CA, CO, CT, DC, FL, GA, IA, IL, KS, KY, MA, MD, MI, MN, MO, MS, MT, NC, NJ, NV, NY, OK, PA, TN, TX, UT, VA, VT, WA, WI], Spain, France, Turkey<br />Info: Number, Exp Date, CVV2, Name, Address, City,
                            Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322933' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_EMAIL</span></a><br />Countries:
                            USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV], Canada, India, United Kingdom<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322936' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP_EMAIL_IP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, FL, GA, HI, IA, ID, IL, IN, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV], Canada<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322951' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_ZIP_PHONE_EMAIL</span></a><br
                            />Countries: USA [AL, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322954' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_EMAIL_PHONE_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322960' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_IP_PHONE_UA</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322963' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_PHONE_EMAIL_IP_ZIP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MT, NC, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WI]<br />Info: Number, Exp Date, CVV2, Name, Address,
                            City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322972' target="_blank"><span style='font-weight:bold;color:#348934'>0713_JP</span></a><br
                            />Countries: Japan<br />Info: Number, Exp Date, CVV2, <b>No Address</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322975' target="_blank"><span style='font-weight:bold;color:#348934'>0713_CA_DE_ZIP</span></a><br
                            />Countries: USA [CO, FL, IA, KS, KY, MA, MN, TN, TX], Canada, Germany, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br
                            /><br />Base name: <a href='/cvv/?base=322720' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_EMAIL_IP_PHONE</span></a><br />Countries: USA [AA, AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA,
                            ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone,
                            Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322210' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_EMAIL_ZIP_IP</span></a><br />Countries:
                            USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322978' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_IP_EMAIL_PHONE</span></a><br
                            />Countries: USA [DC, FL, GA, IA, KY, LA, MD, MI, MN, MO, NC, NJ, NY, OH, OK, WI, WV], Spain, Italy, France<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br
                            />No replacements!<br /><br />Base name: <a href='/cvv/?base=321955' target="_blank"><span style='font-weight:bold;color:#348934'>0713_ZA_US_ZIP</span></a><br />Countries: USA [NY], South Africa, South Korea, Thailand<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, Driver License<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322981' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_PHONE_EMAIL_ZIP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322726' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_UA_IP_ZIP_PHONE</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322984' target="_blank"><span style='font-weight:bold;color:#348934'>0713_GB_US_ZIP</span></a><br
                            />Countries: United Kingdom, Australia, Nigeria<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322729'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_UA_EMAIL_IP_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO,
                            MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br
                            />No replacements!<br /><br />Base name: <a href='/cvv/?base=322987' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP_IP_EMAIL</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, FL, GA,
                            HI, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br
                            />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322732' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_IP_UA_EMAIL</span></a><br />Countries: USA [AK,
                            AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Canada, United Kingdom,
                            France<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322990' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_EMAIL_IP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MT, NC, NE, NJ, NM, NV, NY, OH, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322735' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322993' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_EMAIL_PHONE_IP</span></a><br
                            />Countries: USA [AR, CA, FL, IA, IN, MA, NV, NY, OH, OK, OR, TX, VA], United Kingdom, France, Brazil<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br
                            />No replacements!<br /><br />Base name: <a href='/cvv/?base=322738' target="_blank"><span style='font-weight:bold;color:#348934'>0713_GB_US_ZIP</span></a><br />Countries: USA [CA, KY, NY], United Kingdom, Australia, India<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322741' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322744' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_IP_EMAIL_PHONE_UA</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322234' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_PHONE_EMAIL_ZIP</span></a><br
                            />Countries: USA [AL, CA, CO, DC, FL, GA, IA, IL, IN, KY, MA, MT, NM, NY, OH, PA, SD, TX], Spain, France, Mexico<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br
                            />No replacements!<br /><br />Base name: <a href='/cvv/?base=323002' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_EMAIL_ZIP_IP_LPA</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC,
                            DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Chile, Canada, Puerto Rico<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, Last Paid Amount<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322747' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_ZIP_EMAIL_IP_PHONE</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323005' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_UA_PHONE_ZIP_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322753' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY], Canada,
                            Japan, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323011' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_PHONE_ZIP_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322756' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_EMAIL_IP_PHONE_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                            Canada, Guam, China<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=323014' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_EMAIL_ZIP_PHONE</span></a><br
                            />Countries: USA [AK, AL, AZ, CA, CO, CT, DC, FL, GA, IA, ID, IL, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV], Argentina<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322759' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_IP_ZIP_EMAIL_PHONE</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                            Mexico, Canada, Puerto Rico<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322762'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_EMAIL_ZIP_PHONE</span></a><br />Countries: USA [AL, AZ, CA, CO, CT, DC, DE, FL, GA, IA, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, NC, ND, NE, NH, NJ,
                            NV, OH, OK, OR, PA, SC, SD, TX, UT, VA, VT, WA, WI, WV], Chile, Peru, Norway<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br
                            />Base name: <a href='/cvv/?base=322765' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP_IP_EMAIL_UA</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL,
                            IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MP, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Puerto Rico, Dominican Republic, Canada<br />Info: Number, Exp Date, CVV2,
                            Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322768' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_ZIP_PHONE_IP_EMAIL</span></a><br
                            />Countries: USA [VA], Spain, Argentina, Brazil<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name:
                            <a
                                href='/cvv/?base=322771' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_PHONE_EMAIL_UA_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MH, MI, MN, MO, MP, MS, MT,
                                NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Puerto Rico, Canada, Jamaica<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User
                                Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322774' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_ZIP_PHONE_IP_UA</span></a><br />Countries:
                                USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MP, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Puerto
                                Rico, Canada, Dominican Republic<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322777'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0713_GB_US_EMAIL</span></a><br />Countries: USA [CA, OH, VA], United Kingdom, Australia, Kuwait<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code,
                                Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322783' target="_blank"><span style='font-weight:bold;color:#348934'>0713_AU_US_EMAIL</span></a><br />Countries: USA
                                [CA, FL, VA, WA], Australia, Hungary, Taiwan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322786'
                                    target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_EMAIL_PHONE_ZIP_IP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS,
                                MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Chile, Canada, Peru<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid
                                rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322789' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP_PHONE_EMAIL_IP</span></a><br />Countries: USA [AL, AR, AZ,
                                CA, CO, DE, FL, GA, HI, IA, ID, IL, IN, KY, LA, MD, MI, MN, MO, MS, MT, NC, NE, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email,
                                <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322792' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_PHONE_EMAIL_ZIP</span></a><br />Countries:
                                USA [AL, CA, CO, FL, GA, IA, IN, LA, MA, MD, ME, MN, MS, NE, NJ, NM, NV, NY, OH, OR, PA, RI, TX, VA], France, Mexico, Spain<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid
                                rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322795' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_UA_ZIP_IP_PHONE_EMAIL</span></a><br />Countries: USA [AL, AR,
                                AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date,
                                CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322798' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_IP_UA_ZIP_EMAIL</span></a><br
                                />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI], Guam, Brazil, Canada<br />Info:
                                Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322801' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_PHONE_ZIP_IP_EMAIL</span></a><br
                                />Countries: USA [AR, CA, GA, IN, KY, LA, MA, MD, ME, MI, MO, NE, NJ, NV, NY, OH, OR, PA, SD, TX, VA, WI], France, Mexico, Spain<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br
                                />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322804' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_ZIP</span></a><br />Countries: USA [AL, AZ, CA, CO, CT,
                                FL, GA, ID, IL, KS, KY, MA, ME, MN, MT, NC, ND, NH, NJ, RI, SD, TX, UT, VT, WA, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name:
                                <a href='/cvv/?base=322807' target="_blank"><span style='font-weight:bold;color:#348934'>0713_US_IP_ZIP_PHONE_UA_EMAIL</span></a><br />Countries: USA [AL, AR, AZ, CA, DE, FL, GA, IL, IN, KY, LA, MA, MD, ME, MI, MO, NC,
                                NH, NJ, NV, NY, OH, PA, RI, SC, TN, VA, WA, WI, WV], Canada, Chile, Norway<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br
                                /><br />Base name: <a href='/cvv/?base=322558' target="_blank"><span style='font-weight:bold;color:#348934'>0713_CA_US_ZIP</span></a><br />Countries: Canada, Japan, Brazil<br />Info: Number, Exp Date, CVV2, Name, Address,
                                City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/dumps/?base=322306' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Dagger</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br /><br />Base name: <a href='/dumps/?base=322348' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Deimos</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br /><br />Base name: <a href='/dumps/?base=300454' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Curtis</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br /><br />Base name: <a href='/dumps/?base=309472' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Zorro</span></a><br
                                />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0713_FULLZ_CREDIT_REPORT_DLN_PDF</span><br />Info: Name,
                                Address, Phone, Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0713_FULLZ_CREDIT_REPORT_DLSTATE_PHONE</span><br />Info: Name, Address, Phone,
                                Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0713_FULLZ_SSN_DOB_MMN</span><br />Info: Name, Address, Phone, Email, SSN, DOB, MMN<br /><br
                                />Base name: <span style='font-weight:bold;color:#2B60DE'>0713_FULLZ_SSN_DOB_EMAIL_DLN</span><br />Info: Name, Address, Phone, Email, SSN, DOB, Drivers License Number, DL State<br /><br />Stay safe & healthy, good luck!<br
                                /><br /><i>P.S. next update will be released tomorrow at 8 AM Eastern Time</i>
                        </p>
                    </div>

                    <div class="col-12">
                        <div class="col-sm-8">
                            <a href="#news" style="font-size: 15pt;">Fresh Updates &amp; SALE</a>
                        </div>
                        <div class="col-sm-4" style="text-align:right;font-style: italic;">
                            created 4 days, 20 hours ago
                        </div>
                    </div>

                    <div class="col-sm-12 panel panel-default">
                        <p style="font-size: 13pt;padding-top:5px;">
                            Base name: <a href='/cvv/?base=322564' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_ZIP_IP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN,
                            KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br
                            />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322567' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_IP_ZIP_EMAIL</span></a><br />Countries: USA [AK, AL,
                            AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2,
                            Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322570' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_PHONE_EMAIL_ZIP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322573' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_ZIP_IP_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NH, NJ, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI], Canada, Costa Rica, Belgium<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322588' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_ZIP_UA_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Norway,
                            Mexico, Guam<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322423' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_ZIP_UA_EMAIL_PHONE</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322429' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_PHONE_UA_EMAIL_ZIP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Dominican
                            Republic, Canada, Puerto Rico<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322432'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_UA_ZIP_PHONE_EMAIL_IP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, NC, ND,
                            NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI], Bulgaria, Puerto Rico<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br
                            />No replacements!<br /><br />Base name: <a href='/cvv/?base=322435' target="_blank"><span style='font-weight:bold;color:#348934'>0712_GE_GB_EMAIL</span></a><br />Countries: USA [DC], Georgia, United Kingdom, Paraguay<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322438' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_IP_PHONE_UA_EMAIL</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322441' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_UA_PHONE_EMAIL_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WY]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322444' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_UA_EMAIL_ZIP_PHONE_IP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI]<br />Info: Number, Exp Date, CVV2,
                            Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322447' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_IP_UA_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WY]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322195' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322453' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_EMAIL_ZIP_PHONE</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NE, NH, NJ, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, VT, WA, WI, WV], Chile, Canada, Peru<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322198' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_ZIP_DLN_MMN_DOB_UA_PHONE_SSN</span></a><br
                            />Countries: USA [AK, AL, AZ, CA, CO, CT, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MO, MS, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OR, PA, SC, TN, TX, UT, VA, WV], Canada, United Kingdom, Australia<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, <b>IP</b>, SSN, MMN, DOB, Driver License, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322201' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_EMAIL_PHONE_IP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322204' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_EMAIL_IP_PHONE</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, IA, ID, IL, IN, KS, KY, LA, MD, MI, MN, MO, MS, MT, NC, ND, NE, NM, NV, NY, OH, OK, OR, PA, SC, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name,
                            Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322207' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_IP_EMAIL_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV], Canada, China, South Korea<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322213' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_PHONE_EMAIL_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br
                            />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322216' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_PHONE_ZIP_EMAIL</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322228' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_IP_PHONE_UA_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info:
                            Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=321205' target="_blank"><span style='font-weight:bold;color:#348934'>0712_CA_AU_ZIP</span></a><br
                            />Countries: USA [CA, CO, CT, FL, GA, IL, IN, KS, LA, MA, MD, MI, MN, MO, MT, NC, NJ, NM, NV, NY, OH, PA, RI, TN, TX, UT, VA, WA, WI, WV], Canada, Australia, United Kingdom<br />Info: Number, Exp Date, CVV2, Name, Address,
                            City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322237' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP</span></a><br
                            />Countries: USA [MA, MI, MN, NC, NE, NJ, NY, OR, PA, SC, VA], Australia, Canada, United Kingdom<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base
                            name: <a href='/cvv/?base=322240' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_ZIP_IP</span></a><br />Countries: USA [AL, CA, CO, CT, DC, FL, IN, KS, LA, MI, MN, MO, NC, NH, NJ, NY, PA, SC,
                            TX, UT, VA], France, Mexico, Spain<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322243'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_PHONE_EMAIL_ZIP</span></a><br />Countries: USA [AR, AZ, CO, CT, DC, FL, GA, IL, KY, LA, MA, MI, MN, MO, NE, NH, NJ, NM, NY, OK, PA, TX, UT, VA, WA], Spain,
                            Mexico, France<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322246' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_ZIP_IP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI, WV, WY]<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322504' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_IP_ZIP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                            Canada, Australia, Brazil<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322252' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_UA_PHONE_EMAIL_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY],
                            Guam, Canada, Lebanon<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322255'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, NC, ND, NE, NH,
                            NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WY], Chile, Barbados, Norway<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br
                            />Base name: <a href='/cvv/?base=322258' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_PHONE_EMAIL_LPA_IP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL,
                            IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY]<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email,
                            <b>IP</b>, Last Paid Amount<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322261' target="_blank"><span style='font-weight:bold;color:#348934'>0712_AU_US_PHONE</span></a><br />Countries:
                            USA, Australia, United Kingdom, Italy<br />Info: Number, Exp Date, CVV2, Name, Address, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322519' target="_blank"><span style='font-weight:bold;color:#348934'>0712_GB_US_IP</span></a><br
                            />Countries: USA [DC, GA, IA, KS, MI, MO, NC, NE, OK, TX, VA, WI], United Kingdom, Canada, Singapore<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No
                            replacements!<br /><br />Base name: <a href='/cvv/?base=322264' target="_blank"><span style='font-weight:bold;color:#348934'>0712_MY_PH_ZIP</span></a><br />Countries: USA [AZ, CA, CO, FL, GA, IA, IN, KS, MA, MI, MN, NH, NY,
                            OH, PA, RI, SC, TN, VA, WI], Malaysia, Philippines, Indonesia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322522'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_EMAIL_PHONE_ZIP_IP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, NC, ND, NE,
                            NH, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI, WV], Ireland<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br
                            /><br />Base name: <a href='/cvv/?base=322267' target="_blank"><span style='font-weight:bold;color:#348934'>0712_NZ_US_EMAIL</span></a><br />Countries: USA, New Zealand, Australia, Canada<br />Info: Number, Exp Date, CVV2,
                            Name, Address, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322525' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_ZIP_UA_PHONE</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322270' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_EMAIL_PHONE_ZIP_UA_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MN, MO, MS, MT, NC, NE, NJ, NM, NV, NY, OH, OK, OR, PA, SC, SD, TN, TX, UT, VA, WA, WI]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322528' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_EMAIL_ZIP_PHONE</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MP, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV],
                            Canada, Puerto Rico, Dominican Republic<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322273' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_ZIP_IP</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI, WY]<br />Info: Number, Exp
                            Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322531' target="_blank"><span style='font-weight:bold;color:#348934'>0712_CA_US_EMAIL</span></a><br
                            />Countries: USA, Canada, Bulgaria, Nigeria<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322276'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0712_FR_US_ZIP</span></a><br />Countries: USA [AL, AR, CA, CT, FL, GA, IA, ID, IL, IN, KS, KY, LA, MA, MD, MI, MO, MT, NC, NE, NJ, NM, NY, OH, OK, PA, SC, SD, TN,
                            TX, UT, VA, WI, WV], France, United Kingdom, Spain<br />Info: Number, Exp Date, CVV2, Name, <b>No Address</b>, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base
                            name: <a href='/cvv/?base=322534' target="_blank"><span style='font-weight:bold;color:#348934'>0712_CA_US_PHONE</span></a><br />Countries: , Canada, Singapore, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip
                            code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322279' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_EMAIL_UA_IP_PHONE_ZIP</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322537' target="_blank"><span style='font-weight:bold;color:#348934'>0712_CA_US_PHONE</span></a><br
                            />Countries: USA, Canada, Greece, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322282'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE,
                            NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WV, WY], Europe Union, India, Australia<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code<br />Valid rate: <b>90%</b><br />No replacements!<br
                            /><br />Base name: <a href='/cvv/?base=322540' target="_blank"><span style='font-weight:bold;color:#348934'>0712_CA_US_IP</span></a><br />Countries: USA, Canada, Bulgaria, Rwanda<br />Info: Number, Exp Date, CVV2, Name, Address,
                            City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322285' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_ZIP_PHONE_UA_IP_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322543' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_UA_ZIP_IP_PHONE_EMAIL</span></a><br
                            />Countries: USA [AK, AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, ND, NE, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322288' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_EMAIL_UA_ZIP_IP_PHONE</span></a><br
                            />Countries: USA [AL, AR, AZ, CA, CO, CT, DC, DE, FL, GA, HI, IA, ID, IL, IN, KS, KY, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH, NJ, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, VT, WA, WI, WY]<br />Info: Number,
                            Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322546' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_EMAIL_PHONE_DOB_IP_ZIP</span></a><br
                            />Countries: USA [CA, CO, DE, FL, GA, KY, MA, MN, MO, NJ, NY, PA, TX], Chile, Tanzania, Japan<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, DOB<br />Valid rate: <b>90%</b><br />No
                            replacements!<br /><br />Base name: <a href='/cvv/?base=322291' target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_PHONE_EMAIL_ZIP</span></a><br />Countries: USA [AK, AL, AR, AZ, CA, CO, FL, GA, HI, IA, ID,
                            IL, IN, KS, KY, MA, MD, MI, MN, MO, MS, MT, NC, ND, NE, NH, NM, NV, NY, OH, OK, OR, PA, RI, SC, SD, TN, TX, UT, VA, WA, WI, WV, WY], France, Canada, Norway<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone,
                            Email<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322294' target="_blank"><span style='font-weight:bold;color:#348934'>0712_AR_US_ZIP</span></a><br />Countries: USA [VA], Argentina,
                            Spain, Brazil<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322552' target="_blank"><span style='font-weight:bold;color:#348934'>0712_CA_US_PHONE</span></a><br
                            />Countries: , Canada, France, Greece<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/cvv/?base=322297'
                                target="_blank"><span style='font-weight:bold;color:#348934'>0712_US_IP_ZIP_UA_PHONE_EMAIL</span></a><br />Countries: USA [AL, AR, AZ, CA, CO, DC, FL, GA, IA, ID, IL, IN, KS, LA, MA, MD, ME, MI, MN, MO, MS, MT, NC, NE, NH,
                            NJ, NV, NY, OH, OK, OR, PA, RI, SC, TN, TX, VA, VT, WA, WI, WV], Chile, Peru, Canada<br />Info: Number, Exp Date, CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b>, User Agent<br />Valid rate: <b>90%</b><br />No
                            replacements!<br /><br />Base name: <a href='/cvv/?base=322555' target="_blank"><span style='font-weight:bold;color:#348934'>0712_CA_US_PHONE</span></a><br />Countries: , Canada, Greece, Germany<br />Info: Number, Exp Date,
                            CVV2, Name, Address, City, Zip code, Phone, Email, <b>IP</b><br />Valid rate: <b>90%</b><br />No replacements!<br /><br />Base name: <a href='/dumps/?base=300451' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Labor</span></a><br
                            />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <a href='/dumps/?base=314308' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Poster</span></a><br
                            />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <a href='/dumps/?base=309469' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Cam</span></a><br
                            />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <a href='/dumps/?base=317437' target="_blank"><span style='font-weight:bold;color:#2B60DE'>Mine</span></a><br
                            />Countries: USA, World<br />Info: TR2, TR1+TR2 with state, city, zip<br />Valid rate: <b>90%</b><br />No Replacements for <b>24</b> hours.<br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0712_FULLZ_CREDIT_REPORT_DLSTATE_PHONE</span><br
                            />Info: Name, Address, Phone, Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0712_FULLZ_CREDIT_REPORT_DLN_PDF</span><br />Info: Name, Address,
                            Phone, Email, SSN, DOB, Drivers License Number, <b>Credit Report</b><br /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0712_FULLZ_SSN_DOB_MMN</span><br />Info: Name, Address, Phone, Email, SSN, DOB, MMN<br
                            /><br />Base name: <span style='font-weight:bold;color:#2B60DE'>0712_FULLZ_SSN_DOB_EMAIL_DLN</span><br />Info: Name, Address, Phone, Email, SSN, DOB, Drivers License Number, DL State<br /><br />Stay safe & healthy, good luck!<br
                            /><br /><i>P.S. next update will be released tomorrow at 8 AM Eastern Time</i>
                        </p>
                    </div>
                    <nav class="pull-right">
                        <ul class="pagination">
                            <li class="disabled"><a href="#"><span aria-hidden="true">&laquo;</span><span
                    class="sr-only">previous</span></a></li>
                            <li class="active"><a href="?page=1">1</a></li>
                            <li><a href="?page=2">2</a></li>
                            <li><a href="?page=3">3</a></li>
                            <li><a href="?page=2"><span
                    aria-hidden="true">&raquo;</span><span class="sr-only">next</span></a></li>

                        </ul>
                    </nav>
                    <div class="modal fade" id="modalNotification" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="modalNotificationTitle">Notification</h4>
                                </div>
                                <div class="modal-body">
                                    <div id="divNotificationContent">
                                        My dear crooks & loyal customers! You can now receive an automated 10% bonus each time you deposit more than $500<br /><br />I am updating more than 50.000 freshly grabbed dumps & cards daily, so prepare your wallets
                                        for an avalanche of new dumps coming soon and even more before the season! <br /><br />As a reminder, I have updated you with more than 10 millions of dumps and cards in last several months and much more to come!
                                        Get ready!
                                    </div>
                                    <input type="hidden" name="csrfmiddlewaretoken" id="csrfmiddlewaretoken" value="zh7A8TaoTKNKCGH5OQJWA7mZldmeCeyA">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> &nbsp;
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirmNotification" data-id="39">Thanks, I got it</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalNotificationAccount" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title" id="modalNotificationAccountTitle">BE INFORMED & INFORM OTHERS!!!</h4>

                                </div>
                                <div class="modal-body">
                                    <div id="divNotificationAccountContent">
                                        <p>Every single day I get hundreds of tickets from people who's password got changed.</p>
                                        <br> The ONLY reason It happens is because my customers visit scam domains that look similar, deliberately sharing their login credentials with scammers. No wonder, after they enter the username and password on
                                        similar looking scam domain name, crooks will change the password & use victim's account balance.
                                        <br><br> Despite all the warnings I have on all the forums, on the main page of my shop, on all the carding communities, channels and notifications popping up everywhere, people still decide on thier own what domain
                                        is official and what not.
                                        <br><br> Official shop domains:
                                        <br><br>
                                        <b>BCLUB.ST - BCLUB.HN - BCLUB.GL</b>
                                        <br><br> Reserve shop domains:
                                        <br><br> https://bclub.MP
                                        <br> https://bclub.TK
                                        <br> --
                                        <br> https://briansclub.cm
                                        <br> https://briansclub.mx
                                        <br>
                                        <br> TOR domain:
                                        <br><br> http://briansclcfyc5oe34hgxnn3akr4hzshy3edpwxsilvbsojp2gwxr57qd.onion
                                        <br><br> All other domains are a scam!
                                        <br><br>
                                        <b>You WILL LOOSE your username If you visit ANY OTHER domain!!</b>
                                        <br><br> I strongly suggest you add additional layer of security, such as Secret Passphrase as a second password. You can set It by pressing [profile] in left upper corner next to your username. Make sure you understand
                                        how It works. For instance - you will be requested to enter first and third letter of the passphrase when you log in, so don't make your Secret Passphrase too complicated.
                                        <br><br> For instance, If you select a secret passphrase as "swordfish" and shop is asking you to enter 3rd and 5th letter, you need to enter "od".
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="confirmNotification">Thanks, I got it</button>
                                </div>
                            </div>
                        </div>
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
        $(document).ready(function() {

            var menuID = document.getElementById("menu-home");
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

        var currentHour = 11;
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


    <script>
        $(document).ready(function() {

            $('#modalNotification').modal('show');
            $('#confirmNotification').click(function() {
                $.post("/", {
                    csrfmiddlewaretoken: $('#csrfmiddlewaretoken').val(),
                    nid: $(this).data('id')
                }, function(data) {

                }).error(function() {

                }).always(function() {

                });
                return true;
            });

        });
    </script>


</body>

</html>
