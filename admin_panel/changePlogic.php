<?php
include('../config.php');

// $email = $_GET['aEmail'];
$adminpassword = $_GET['changeP'];
// echo $password;
$encypassAdmin = md5($password);

$declinenewusers = "UPDATE `admin_login` SET `aPassword`='$encypassAdmin' WHERE `admin_id`='2'";
$result = mysqli_query($con, $declinenewusers);


if ($result) {
    echo "<script>
    alert('Your password change');
    window.location.href='http://localhost/soulsoftin/adminSign.html';
    </script>";
} else {
    echo "Something error";
}
