<?php
include('../config.php');


$empid = $_POST['empid'];
$empname = $_POST['empname'];
$empemail = $_POST['empemail'];
$emppass = $_POST['emppassword'];
$encypass = md5($emppass);

$data = "INSERT INTO `employee_reg`(`emp_id`, `name`, `email`, `pass` ) VALUES ('$empid','$empname','$empemail','$encypass')";


if (mysqli_query($con, $data)) {
    echo "<script>
    alert('Employee Register Successfully');
    window.location.href='http://localhost/soulsoftin/admin_panel/emplyForm.php';
    </script>";
} else {
    echo "Error to Insert";
}
