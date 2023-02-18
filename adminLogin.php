<?php
include('config.php');
// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$encypassword=md5($password);


$data = "prasad.godage@gmail.com";
$data2 = "Prasad@123";

if ($email == $data && $password == "$data2") {
    header('location:./admin_panel/index.php');


}else
{
        // echo "Going for customers";

        $checklogin="SELECT * FROM `reg` WHERE `email`='$email' AND `password`='$encypassword' AND `status`='1'";

        $result=mysqli_query($con,$checklogin);

        if(mysqli_num_rows($result)>0)
        {
            echo '<script>alert("Login Successfull")</script>'; 
            $_SESSION['emailid']=$email;

            header('location:./customer_panel/index.php');
        }else{
            echo '<script>alert("Error to Login")</script>';
        }


}



?>