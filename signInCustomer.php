<?php

$host = "localhost"; // Host name 
$username = "root"; // Mysql username 
$password = ""; // Mysql password 
$db_name = "cutomer_reg"; // Database name 
$tbl_name = "reg"; // Table name 

// Connect to server and select databse.
mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
mysqli_select_db("$db_name") or die("cannot select DB");

// username and password sent from form 
$myusername = $_POST['email']; 
$mypassword = $_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
// $myusername = mysqli_real_escape_string($myusername);
// $mypassword = mysqli_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
  $_SESSION['session_name'] = 'myusername';
	$_SESSION['session_name'] = 'mypassword';
	header('location: login_success.php');
}
else {

	header('location:failed.php');
}

?>