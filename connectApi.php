<?php
$request = '';

if (isset($_POST['request'])) {
    $request = $_POST['request'];

    if ($request == "FarmList") {
        $userid = $_POST['userid'];
        echo get_farmList($userid);
    } else if ($request == "cowList_Farm") {
        $farmid = $_POST['farmid'];
        echo get_cowList_Farm($farmid);
    } else if ($request == "cowDetail") {
        $cowid = $_POST['cowid'];
        echo get_cowDetail($cowid);
    } else if ($request == "cowGender") {
        $farmid = $_POST['farmid'];
        $cowgender = $_POST['cowgender'];
        echo get_cowGender($farmid, $cowgender);
    } else if ($request == "doctorList_Farm") {
        $farmid = $_POST['farmid'];
        echo get_doctorList_Farm($farmid);
    } else if ($request == "userList") {
        $farmid = $_POST['farmid'];
        echo get_userList($farmid);
    } else if ($request == "userAll") {
        echo get_userAll();
    } else if ($request == "userDetail") {
        $userid = $_POST['userid'];
        echo get_userDetail($userid);
    } else if ($request == "myFarmDetail") {
        $farmid = $_POST['farmid'];
        echo get_myFarmDetail($farmid);
    } else if ($request == "countCowinFarm") {
        $farmid = $_POST['farmid'];
        echo get_countCowinFarm($farmid);
    } else if ($request == "codairyDetail") {
        $codid = $_POST['codid'];
        echo get_codairyDetail($codid);
    } else if ($request == "npcList") {
        $codid = $_POST['codid'];
        echo get_npcList($codid);
    } else if ($request == "addCows") {
        $cowname = $_POST['cowname'];
        $cownum = $_POST['cownum'];
        $cowspecies = $_POST['cowspecies'];
        $cowgender = $_POST['cowgender'];
        $cowtype = $_POST['cowtype'];
        $cowbirthday = $_POST['cowbirthday'];
        $cowfather = $_POST['cowfather'];
        $cowmother = $_POST['cowmother'];
        $farmid = $_POST['farmid'];
        echo add_Cows($cowname, $cownum, $cowspecies, $cowgender, $cowtype, $cowbirthday, $cowfather, $cowmother, $farmid);
    } else if ($request == "addUsers") {
        $uid = $_POST['uid'];
        $farmid = $_POST['farmid'];
        echo add_Users($uid,  $farmid);
    } else if ($request == "editCows") {
        $cowid = $_POST['cowid'];
        $cowname = $_POST['cowname'];
        $cownum = $_POST['cownum'];
        $cowspecies = $_POST['cowspecies'];
        $cowgender = $_POST['cowgender'];
        $cowtype = $_POST['cowtype'];
        $cowbirthday = $_POST['cowbirthday'];
        $cowfather = $_POST['cowfather'];
        $cowmother = $_POST['cowmother'];
        $farmid = $_POST['farmid'];
        echo edit_Cows($cowid, $cowname, $cownum, $cowspecies, $cowgender, $cowtype, $cowbirthday, $cowfather, $cowmother, $farmid);
    }
}

function get_user($user, $pass)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/verify_user.php?user=' . $user . '&pass=' . $pass;
    // Read JSON file
    $data = file_get_contents($api_url);
    $data = json_decode($data, true);
    return  $data[0]['u-id'];
}
function get_farmList($userid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/farm_member.php?id=' . $userid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_cowList_Farm($farmid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/cow_list.php?farm=' . $farmid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_cowGender($farmid, $cowgender)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/cow_list.php?farm=' . $farmid . '&gender=' . $cowgender;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
    // return $cowgender;
}
function get_doctorList_Farm($farmid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/farm_member.php?vet=' . $farmid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_cowDetail($cowid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/cow_list.php?id=' . $cowid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_userDetail($userid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/user_list.php?id=' . $userid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_myFarmDetail($farmid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/farm_list.php?id=' . $farmid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_countCowinFarm($farmid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/count_cow.php?farm=' . $farmid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_codairyDetail($codid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/codairy_list.php?id=' . $codid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_npcList($codid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/codairy_member.php?office=' . $codid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_userList($farmid)
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/farm_member.php?agri=' . $farmid;
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}
function get_userAll()
{
    $api_url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/user_list.php';
    // Read JSON file
    $data = file_get_contents($api_url);
    return $data;
}

function add_Cows($cowname, $cownum, $cowspecies, $cowgender, $cowtype, $cowbirthday, $cowfather, $cowmother, $farmid)
{
    $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/cow_list.php';
    $data = [
        'cowname' => $cowname,
        'cownum' => $cownum,
        'cowspecies' => $cowspecies,
        'cowgender' => $cowgender,
        'cowtype' => $cowtype,
        'cowbirthday' => $cowbirthday,
        'cowfather' => $cowfather,
        'cowmother' => $cowmother,
        'farmid' => $farmid
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
    echo $result;
}

function add_Users($uid, $farmid)
{
    $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/farm_member.php';
    $data = [
        'farmid' => $farmid,
        'uid' => $uid
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
    echo $result;
}



function edit_Cows($cowid, $cowname, $cownum, $cowspecies, $cowgender, $cowtype, $cowbirthday, $cowfather, $cowmother, $farmid)
{
    $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/cow_list.php?id=' . $cowid;
    $data = [
        'cowname' => $cowname,
        'cownum' => $cownum,
        'cowspecies' => $cowspecies,
        'cowgender' => $cowgender,
        'cowtype' => $cowtype,
        'cowbirthday' => $cowbirthday,
        'cowfather' => $cowfather,
        'cowmother' => $cowmother,
        'farmid' => $farmid
    ];
    $options = array(
        'http' => array(
            'method'  => 'PUT',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    echo $result;
}


function edit_PhotoCow($cowid, $namepic)
{
    $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/edit_cowpic.php?id=' . $cowid;
    $data = [
        'picture' => "picture/cowlist/" . $cowid . "/" . $namepic
    ];
    $options = array(
        'http' => array(
            'method'  => 'PUT',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    echo $result;
}

function edit_PhotoUser($userid, $namepic)
{
    $url = 'http://158.108.207.4/project/64_dairy_cattle_v1/Web/Dairy-cattle-system/api/edit_userpic.php?id=' . $userid;
    $data = [
        'picture' => "picture/userlist/" . $userid . "/" . $namepic
    ];
    $options = array(
        'http' => array(
            'method'  => 'PUT',
            'content' => json_encode($data),
            'header' =>  "Content-Type: application/json\r\n" .
                "Accept: application/json\r\n"
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    echo $result;
}