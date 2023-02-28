<?php
session_start();


if ($_SESSION['emailid'] == "") {
  header('location:logout.php'); // echo "Email ID is not avalable";

}


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="" rel="stylesheet" />
  <title>User Dashboard</title>
</head>

<body>
  <h1>Hello <?php echo $_SESSION['emailid']; ?></h1>

  <a href="logout.php">Logout</a>s
</body>

</html>