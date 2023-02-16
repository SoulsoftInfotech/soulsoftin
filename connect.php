<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
} else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'cutomer_reg');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];


$data = "INSERT INTO reg (FNAME, LNAME, EMAIL,PASSWORD, NUMBER) VALUES ('$firstName', '$lastName', '$email', '$password','$number')";

mysqli_query($connection, $data);
header('location:signupsuccessful.php');

?>