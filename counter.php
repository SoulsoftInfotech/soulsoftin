<?php
include('./config.php');
$ip = $_SERVER['REMOTE_ADDR'];


$qury = "INSERT INTO `ip`(`ip`) VALUES ('$ip')";
mysqli_query($con, $qury);

$q = "SELECT * FROM `ip` WHERE 1";
$f = mysqli_query($con, $q);
$count = mysqli_num_rows($f);
