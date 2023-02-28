<?php
include('config.php');
// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$encypassword = md5($password);


$data = "prasad.godage@gmail.com";
$data2 = "1234";

if ($email == $data && $password == "$data2") {
    header('location:./admin_panel/index.php');
} else {
    // echo "Going for customers";

    $checklogin = "SELECT * FROM `customer_registration` WHERE `email`='$email' AND `password`='$encypassword' AND `status`='1'";
    $result = mysqli_query($con, $checklogin);

    if (mysqli_num_rows($result) > 0) {
        echo '<script>alert("Login Successfull")</script>';
        $_SESSION['emailid'] = $email;

        header('location:./customer_panel/index.php');
    } else {


        $selectnewusers = "SELECT * FROM `customer_data` WHERE `email`='$email' AND `password`='$encypassword'";
        $result1 = mysqli_query($con, $selectnewusers);
        if (mysqli_num_rows($result1) > 0) {
            echo '<script>alert("Login Successfull")</script>';
            $_SESSION['emailid'] = $email;

            header('location:./customer_panel/index.php');
        } else {
            echo "<script>
                alert('error to login');
                window.location.href='http://localhost/soulsoftin/adminSign.html';
            </script>";
        }
    }
}
