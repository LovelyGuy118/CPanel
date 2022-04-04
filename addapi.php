<?php
    include'Protection.php';
    $api = $_GET['api'];
    if($api){
        $link = mysqli_connect("localhost", "chasd_user", "immAN@@4A", "chasd_data");
        $sql = "INSERT INTO apikey (api) VALUES ('$api')";
        $link->query($sql);
        mysqli_close($link);
    }
?>