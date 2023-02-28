<?php
include('../config.php');


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$product = $_POST['product'];
$date = $_POST['date'];
$custid = $_POST['custid'];

$encypass = md5($password);
$data = "INSERT INTO `customer_data`(`customer_id`, `fullName`, `email`, `mobNum`, `password`, `productName`, `date`) VALUES ('$custid','$fullname', '$email','$number','$encypass','$product','$date')";


if (mysqli_query($con, $data)) {
    echo "<script>
    alert('Customer Register Successfully');
    window.location.href='http://localhost/soulsoftin/admin_panel/customerCall.html';
</script>";
} else {
    echo "Error to Insert";
}
