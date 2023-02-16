<?php


// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$data = "prasad.godage@gmail.com";
$data2 = "Prasad@123";

if ($email == $data && $password == "$data2") {
    header('location:adminSignIn.php');
}
else {
    echo "Error while logging In";
 
}



?>