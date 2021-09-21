<?php
include_once("connectApi.php");

$request = $_POST['request'];
$id = $_POST['id'];
$path = "picture/" . $request . "/" . $id;
$base64 = $_POST['base64'];

function getImg($img)
{
    if ($img != null) {
        $data = $img;
        $img_array = explode(';', $data);
        $img_array2 = explode(",", $img_array[1]);
        $data_pic = base64_decode($img_array2[1]);
        return $data_pic;
    } else return null;
}

function create_directory()
{
    $A_path = explode('/', $GLOBALS['path']);
    $GLOBALS['path'] = ".";
    foreach ($A_path as $val) {
        $GLOBALS['path'] = $GLOBALS['path'] . "/" . $val;
        if (!file_exists($GLOBALS['path'])) {
            mkdir($GLOBALS['path'], 0777, true);
        }
    }
}

if (substr($base64, 0, 10) == "data:image") {
    create_directory();
    $sdir = scandir($path);
    for ($i = 2; $i < count($sdir); $i++) {
        unlink($path . "/" . $sdir[$i]);
    }
    $pic = getImg($base64);
    $namepic = $id . "_" . time() . ".jpg";
    file_put_contents($path . "/" . $namepic, $pic);

    if ($request == "cow-list")
        echo edit_PhotoCow($id, $namepic);
    else if ($request == "user-list")
        echo edit_PhotoUser($id, $namepic);
}
