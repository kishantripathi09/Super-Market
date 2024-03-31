<?php

require("includes/common.php");

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$message = trim($_POST['message']);

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num == 0) {
    $m = '<script>alert("Not a Registered Email Id")</script>';
    header('location: contact.php?m=' . $m);
} else if (!preg_match($regex_email, $email)) {
    $m = '<script>alert("Not a Valid Email Id")</script>';
    header('location: contact.php?m=' . $m);
} else {
    $query = "INSERT INTO contact(name, email, message)VALUES('" . $name . "','" . $email . "','" . $message . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
?>
    <script>
        window.alert("Message Sent");
    </script>
<?php
    header('location: contact.php');
}
