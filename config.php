<?php
session_start();
$con = mysqli_connect("soulsoft.in", "root", "", "soulsoftin");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
