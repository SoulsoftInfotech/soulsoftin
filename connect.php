<?php
include('config.php');
include('mailfunction.php');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

$encypass = md5($password);
$data = "INSERT INTO customer_registration ( `fname`, `lname`, `mobNum`, `email`, `password`) VALUES ('$firstName', '$lastName', '$number', '$email','$encypass')";
echo $data;

if (mysqli_query($con, $data)) {
    $last_id = mysqli_insert_id($con);
    $link = "http://localhost/soulsoftin/auth.php?userid=" . $last_id;
    $msg = "Click Below  Link for Activating the Account " . $link;
    sendmail("soulsoftinfotech@gmail.com", "Sent by function", $msg);
    header('location:signupsuccessful.php');
} else {
    echo "Error to Insert";
}
