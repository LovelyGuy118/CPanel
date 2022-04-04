<?php
require_once "vendor/autoload.php";

$detect = new Mobile_Detect;

if ( !$detect->isMobile() ) {
    echo "Only Mobile Can Access";exit();
}
?>