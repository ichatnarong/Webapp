<?php
include_once("./saveLog.php");
include_once("./connectApi.php");

session_start();
session_unset();
$username = $_POST['username'];
$password = $_POST['password'];



/// check login 
$status = get_user($username, $password);

if ($status == 0) {
    header("location:index.php?error=2");
} else if ($status >= 0) {
    $typeid = 999;
    $_SESSION[md5('userid')] = $status;
    setLog_Login($status, $typeid);
    header("location:./view/FarmList/FarmList.php");
}



//using php curl (sudo apt-get install php-curl) 
// $response = httpPost("http://localhost/Dairy-cattle-system-mobile/", array("error" => 1));
// function httpPost($url, $data)
// {
//     $curl = curl_init($url);
//     curl_setopt($curl, CURLOPT_POST, true);
//     curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($curl);
//     curl_close($curl);
//     return $response;
// }
