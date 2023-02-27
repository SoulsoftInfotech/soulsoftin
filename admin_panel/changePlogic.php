<?php
include('../config.php');

// $email = $_GET['aEmail'];
$adminpassword = $_POST['changeP'];
// echo $a
// echo $password;
$encypassAdmin = md5($adminpassword);
// $encypassAdmin = $adminpassword;

$declinenewusers = "UPDATE `admin_login` SET `aPassword`='$encypassAdmin' WHERE `admin_id`='2'";
$result = mysqli_query($con, $declinenewusers);


if ($result) {
    echo "<script>
    alert('Your password change');
    </script>";
    // window.location.href='http://localhost/soulsoftin/adminSign.html';
} else {
    echo "Something error";
}
