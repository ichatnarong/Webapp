<?php
$request = '';
$userid = '';
$pageid = '';

if (isset($_POST['request'])) {
    $request = $_POST['request'];
    $userid = $_POST['userid'];
    $pageid = $_POST['pageid'];

    if ($request == "access")
        return setLog_Access($userid, $pageid);
}

function setLog_Login($userid, $types)
{
    $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Log/Log_control/API.php?activity=Log_in';
    $data = [
        'userid' => $userid,
        'ip' => get_client_ip(),
        'types' => $types
    ];
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);
    return $response;
}

function setLog_Access($userid, $pageid)
{

    $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Log/Log_control/API.php?activity=Log_access';
    $data = [
        'userid' => $userid,
        'pageid' => $pageid
    ];
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result);
    return $response;

    // // kvstore API url
    // $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Log/Log_control/API.php?activity=Log_access';
    // // Collection object
    // $data = [
    //     'userid' => $userid,
    //     'pageid' => $pageid
    // ];
    // // Initializes a new cURL session
    // $curl = curl_init($url);
    // // Set the CURLOPT_RETURNTRANSFER option to true
    // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // // Set the CURLOPT_POST option to true for POST request
    // curl_setopt($curl, CURLOPT_POST, true);
    // // Set the request data as JSON using json_encode function
    // curl_setopt($curl, CURLOPT_POSTFIELDS,  json_encode($data));
    // // Set custom headers for RapidAPI Auth and Content-Type header
    // curl_setopt($curl, CURLOPT_HTTPHEADER, [
    //     'Content-Type: application/json'
    // ]);
    // // Execute cURL request with all previous settings
    // $response = curl_exec($curl);
    // // Close cURL session
    // curl_close($curl);
    // echo $response;
}

// Function to get the client IP address
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
