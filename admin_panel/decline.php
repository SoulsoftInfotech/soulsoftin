<?php
include('../config.php');

?>


<?php



$declinenewusers = "DELETE FROM `reg` WHERE `status`";
$result = mysqli_query($con, $declinenewusers);
