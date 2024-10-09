<?php
session_start();
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$con = new mysqli($servername, $username, $password, $dbname);

$url = $_SERVER['REQUEST_URI'];
// echo $url;
$url = parse_url($url, PHP_URL_PATH);
$arr_url = explode("/", $url);


//delete token for forget passowrd

date_default_timezone_set("Asia/Kolkata");
$db_time = date("Y-m-d G:i:s", strtotime("-1 min"));
$q = "DELETE FROM `token` WHERE `sent_time`<='$db_time'";
mysqli_query($con, $q);
?>