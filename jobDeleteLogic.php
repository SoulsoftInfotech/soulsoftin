<?php


include('./config.php');






if (isset($_GET['userid'])) {
    $userid = $_GET['userid'];
    // $declinenewusers = "UPDATE `customer_registration` SET `status`='2'";
    $declinenewusers = "UPDATE `job_portal` SET `status`='1' WHERE `srNo`='$userid'";
    $result = mysqli_query($con, $declinenewusers);


    if ($result == true) {
        echo "<script>
        alert('Job Deleted');
        window.location.href='http://localhost/soulsoftin/jobDelete.php';
    </script>";
    } else {
        echo "Somthing error";
    }
}
