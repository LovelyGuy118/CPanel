<?php
error_reporting(0);
session_start();
include'config.php'; 
if(isset($_SESSION['login'])) {
    header("location: index.php");
}
$invalider = base64_encode($admin_password);
if(isset($_POST['ps'])) {
   if ($admin_password == $_POST['ps']) {
     $_SESSION['login'] = $_POST['ps'];
     exit(header("Location: index.php"));
   }else{
   	 exit(header("Location: login.php?invalid"));
   }
}

?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Login</title>
      <link rel="icon" href="files/logo.png" type="image/png">
      <link rel="stylesheet" href="files/assets/css/argon.min5438.css?v=1.2.0" type="text/css">
      <style type="text/css">
      	.form-control{
      		    background-color: #ffffff;
      	}
      </style>
   </head>
   <body class="g-sidenav-pinned" style="min-height: 100vh;">
      <div class="main-content">
         <div class="header py-7 py-lg-8 pt-lg-9">
         </div>
         <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
               <div class="col-lg-5 col-md-7">
                  <div class="card bg-secondary border-0 mb-0">
                     <div class="card-body px-lg-5 py-lg-5">
                        <form role="form" action="login.php" method="POST">
                           <div class="form-group">
                           	<?php
                           	if (isset($_GET['invalid'])) {
                           		echo '<p style="color: red">Invalid password!</p><p hidden>'.$invalider.'</p>';
                           	}
                           	?>
                           
                              <div class="input-group input-group-merge input-group-alternative">
                                 <div class="input-group-prepend"><span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span></div>
                                 <input class="form-control" placeholder="Password" name="ps" type="password" required="">
                              </div>
                           </div>
                           <div class="text-center"><button type="submit" class="btn btn-primary my-4">Sign in</button></div>
                        </form>
                     </div>
                  </div>
                  <div class="row mt-3"></div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>