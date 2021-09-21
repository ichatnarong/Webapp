<!DOCTYPE html>
<html lang="th" style="overflow-y: hidden;">

<!-- Setting Session Variable -->
<?php
session_start();
$userid = $_SESSION[md5('userid')];
?>

<head>

  <title>ระบบการจัดการการสืบพันธ์ุของโคนม</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="referrer" content="no-referrer">
  <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

  <?php include_once("MainCSS.php"); ?>

</head>