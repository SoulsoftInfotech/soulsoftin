<?php

ob_start();
session_start();
require 'classes/admin_class.php';
$obj_admin = new Admin_Class();

if (isset($_GET['logout'])) {
	$obj_admin->admin_logout();
}

$mysqli = new mysqli("localhost", "root", "", "etms_db");

// Check connection
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	exit();
} else {
	echo "error";
}
