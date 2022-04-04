<?php
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
function return_json($response = []) {
    header('Content-Type: application/json');
    exit(json_encode($response));
}

if (!isset($_GET['ip'])) {
    return_json( array('message' => "Invalid IPv4 address, IPv6 address or hostname. Please check the IP & Hostname and try again.") );
     exit();
}else{
  $ip = $_GET['ip'];
}

header('Content-Type: application/json');
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://blacklist.myip.ms/'.$ip.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    exit();
}
curl_close($ch);
if(strpos($result, 'red') !== false){
  $blacklist = "true";
  $blacklist_name = get_string_between($result, '>(', ')<');
}else{
  $blacklist = "false";
}

$ch=curl_init(); 
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_URL,"https://api.iptrooper.net/check/".$ip."?full=1");
$json=curl_exec($ch);
$check = trim(strip_tags(get_string_between($json,'"bad":',',"')));
$name = trim(strip_tags(get_string_between($json,'"name":"','",')));

//echo $result;

if ($check == "true") {
 $bad = "true";
}else{
  $bad = "false";
}

if ($blacklist == "true") {
      $name2 = $blacklist_name;
    }else{
      $name2 = $name;
    }

return_json(
  array(
    'bad' => $bad,
    'block' => $blacklist,
    'name' => $name2
  )
);
exit();
     



?>