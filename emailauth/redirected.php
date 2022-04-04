<?php 
 $url = '/final_backup/verify?key='.$_GET['key'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Redirected</title>
</head>
<body>

<h1>Redirecting....</h1>

<script language="javascript">
setTimeout(function() {
    // window.close;
    window.location.href = "<?php echo $url; ?>";
    close();
}, 1200);
</script>
</body>
</html>