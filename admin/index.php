<?php
error_reporting(0);
session_start();

if(!isset($_SESSION['login'])) {
    if(!isset($_GET['zroxo'])) {
      die('<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>');
      exit();
  }
    header("location: login.php");
}

function hsab($zbi) {
    $file = fopen($zbi, "r");
    $total_click = fread($file, filesize($zbi));
    $total_click = substr_count($total_click, "\n");
    return $total_click;
    fclose($file);
}

if (file_exists("result/visitor.txt")) {
  $total_visitor = hsab("result/visitor.txt");
}else{
  $total_visitor = "0";
}if (file_exists("result/totallogs.txt")) {
  $total_logs = hsab("result/totallogs.txt");
}else{
  $total_logs = "0";
}if (file_exists("result/totalcc.txt")) {
  $total_cc = hsab("result/totalcc.txt");
}else{
  $total_cc = "0";
}if (file_exists("result/totalbilling.txt")) {
  $total_billings = hsab("result/totalbilling.txt");
}else{
  $total_billings = "0";
}if (file_exists("result/totalaccess.txt")) {
  $total_access = hsab("result/totalaccess.txt");
}else{
  $total_access = "0";
}

if (file_exists("result/blocked.txt")) {$blocked = hsab("result/blocked.txt");}else{$blocked = "0";}
if (file_exists("result/bots.txt")) {$bots = hsab("result/bots.txt");}else{$bots = "0";}
if (file_exists("result/bots2.txt")) {$bots2 = hsab("result/bots2.txt");}else{$bots2 = "0";}
if (file_exists("result/bot.txt")) {$bot = hsab("result/bot.txt");}else{$bot = "0";}

$total_bot = $blocked + $bots + $bots + $bot;

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<meta http-equiv="content-type" content="text/html;charset=utf-8" />';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
echo '<title>ZROXO Chase | Dashboard</title>';
echo '<link rel="icon" href="files/logo.png" type="image/png">';
echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">';
echo '<link rel="stylesheet" href="files/assets/vendor/nucleo/css/nucleo.css" type="text/css">';
echo '<link rel="stylesheet" href="files/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css" type="text/css">';
echo '<link rel="stylesheet" href="files/assets/css/argon.min5438.css?v=1.2.0" type="text/css">';
echo '</head>';
echo '';
echo '<body>';
echo '<style type="text/css">';
echo '.bg-gradient-az{';
echo 'background: linear-gradient(87deg,#633b56 0,#f56036 100%)!important;';
echo '}.bg-gradient-ze {';
echo 'background: linear-gradient(87deg,#755f63 0,#e0d447 100%)!important;';
echo '}.bg-gradient-er {';
echo 'background: linear-gradient(87deg,#2dce89 0,#612e22 100%)!important;';
echo '}';
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
echo '';
echo '';
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
echo '<li class="breadcrumb-item"><a href="#">Dashboards</a></li>';
echo '</ol>';
echo '</nav>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- Page content -->';
echo '<div class="container-fluid mt--6">';
echo '<div class="row">';
echo '<div class="col-xl-3 col-md-6">';
echo '<div class="card bg-gradient-primary border-0">';
echo '<!-- Card body -->';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col">';
echo '<h5 class="card-title text-uppercase text-muted mb-0 text-white">LOGS</h5>';
echo '<span class="h2 font-weight-bold mb-0 text-white">'.$total_logs.'</span>';
echo '</div>';
echo '<div class="col-auto">';
echo '<button type="button" class="btn btn-sm btn-neutral mr-0" >';
echo '<i class="fab fa-lg fa-fw m-r-10 far fa-user"></i>';
echo '</button>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-xl-3 col-md-6">';
echo '<div class="card bg-gradient-info border-0">';
echo '<!-- Card body -->';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col">';
echo '<h5 class="card-title text-uppercase text-muted mb-0 text-white">Billings</h5>';
echo '<span class="h2 font-weight-bold mb-0 text-white">'.$total_billings.'</span>';
echo '</div>';
echo '<div class="col-auto">';
echo '<button type="button" class="btn btn-sm btn-neutral mr-0" >';
echo '';
echo '<i class="fas fa-lg fa-fw m-r-10 fa-address-card"></i>';
echo '</button>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-xl-3 col-md-6">';
echo '<div class="card bg-gradient-success border-0">';
echo '<!-- Card body -->';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col">';
echo '<h5 class="card-title text-uppercase text-muted mb-0 text-white">Email access</h5>';
echo '<span class="h2 font-weight-bold mb-0 text-white">'.$total_access.'</span>';
echo '</div>';
echo '<div class="col-auto">';
echo '<button type="button" class="btn btn-sm btn-neutral mr-0" >';
echo '<i class="fas fa-lg fa-fw m-r-10 fa-beer"></i>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-xl-3 col-md-6">';
echo '<div class="card bg-gradient-default border-0">';
echo '<!-- Card body -->';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col">';
echo '<h5 class="card-title text-uppercase text-muted mb-0 text-white">CC</h5>';
echo '<span class="h2 font-weight-bold mb-0 text-white">'.$total_cc.'</span>';
echo '</div>';
echo '<div class="col-auto">';
echo '<button type="button" class="btn btn-sm btn-neutral mr-0" >';
echo '';
echo '<i class="ni ni-credit-card"></i>';
echo '</button>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<br><br><br>';



echo '<div class="row">';
echo '<div class="col-xl-6">';
echo '<div class="card">';
echo '<div class="card-header border-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h3 class="mb-0">VISITOR ['.$total_visitor.']</h3>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="table-responsive">';
echo '<!-- Projects table -->';
echo '<textarea rows="10" class="form-control"> '.file_get_contents("result/visitor.txt").'</textarea>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col-xl-6">';
echo '<div class="card">';
echo '<div class="card-header border-0">';
echo '<div class="row align-items-center">';
echo '<div class="col">';
echo '<h3 class="mb-0">BOT ['.$total_bot.']</h3>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="table-responsive">';
echo '<!-- Projects table -->';
echo '<textarea rows="10" class="form-control">'.file_get_contents("result/blocked.txt").''.file_get_contents("result/bots.txt").''.file_get_contents("result/bots2.txt").''.file_get_contents("result/bot.txt").'</textarea>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- JS -->';
echo '<script src="files/assets/vendor/jquery/dist/jquery.min.js"></script>';
echo '<script src="files/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>';
echo '<script src="files/assets/vendor/js-cookie/js.cookie.js"></script>';
echo '<script src="files/assets/js/argon.min5438.js?v=1.2.0"></script>';
echo '';
echo '';
echo '</body>';
echo '</html>';
?>
