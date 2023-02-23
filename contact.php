<?php
include('config.php');
include('mailfunction.php');

$name = $_POST['name'];
$message = $_POST['message'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$number = $_POST['number'];

// $encypass = md5($password);
// $data = "INSERT INTO customer_registration ( `fname`, `lname`, `mobNum`, `email`, `password`) VALUES ('$firstName', '$lastName', '$number', '$email','$encypass')";
$data1 = "INSERT INTO contact_us (`name`, `email`, `number`, `subject`, `message`) VALUES ('$name','$email','$number','$subject','$message')";
// echo $data1;
if (mysqli_query($con, $data1)) {
    // echo <script>alert("message send")</script>;
    $msg = '<h2>Customer Contact Detail!</h2>
    <p><b>Name:</b> ' . $name . '</p>
    <p><b>Email:</b> ' . $email . '</p>
    <p><b>Number:</b> ' . $number . '</p>
    <p><b>Subject:</b> ' . $subject . '</p>
    <p><b>Message:</b> ' . $message . '</p>';
    sendmail("soulsoftinfotech@gmail.com", "Sent by function", $msg);
    echo '<script>alert("Message Send")</script>';
    // header('location:index.html#contact');
} else {
    echo "Error to Insert";
}
