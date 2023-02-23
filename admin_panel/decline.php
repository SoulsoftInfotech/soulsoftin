<?php
include('../config.php');






if (isset($_GET['userid'])) {
    $userid = $_GET['userid'];
    // $declinenewusers = "UPDATE `customer_registration` SET `status`='2'";
    $declinenewusers = "UPDATE `customer_registration` SET `status`='2' WHERE `id`='$userid'";
    $result = mysqli_query($con, $declinenewusers);


    if ($result == true) {
        echo '<script>alert("User decline")</script>';
        header("location:./index.php");
    } else {
        echo "Somthing error";
    }
}
