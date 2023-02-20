<?php
include('../config.php');

?>


<?php





if (isset($_POST['decline'])) {
    $id = $_POST['id'];
    $declinenewusers = "DELETE FROM `reg` WHERE id='$id'";
    $result = mysqli_query($con, $declinenewusers);


    if ($result) {
        echo '<script> alert("Data Deleted"); </script>';
        echo $row['id'];
        header("location:./index.php");
    } else {
        echo '<script> alert("Data not Deleted"); </script>';
    }
}

?>

<h3>User declined</h3>