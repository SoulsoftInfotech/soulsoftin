<?php
include('config.php');





$jobId = $_POST['jobid'];
$jobRole = $_POST['jobrole'];
$jobDesc = $_POST['jobdesc'];
$date = $_POST['date'];


$data = "INSERT INTO job_portal ( `jobId`, `jobRole`, `jobDesc`, `date`) VALUES ('$jobId', '$jobRole', '$jobDesc', '$date')";
// echo $data;


if (mysqli_query($con, $data)) {
    echo '<script>alert("JOB added to portal")</script>';
    header('location:jobForm.php');
} else {
    echo "Somthing error";
}
