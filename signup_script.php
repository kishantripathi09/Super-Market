<?php

require("includes/common.php");

// Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = md5($password);

$contact = $_POST['contact'];
$contact = mysqli_real_escape_string($con, $contact);

$city = $_POST['city'];
$city = mysqli_real_escape_string($con, $city);

$address = $_POST['address'];
$address = mysqli_real_escape_string($con, $address);

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
$regex_num = "/^[789][0-9]{9}$/";

$query = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if ($num != 0) {
?>
  <script>
    window.alert("Email Already Exists");
    location.href = "register.php";
  </script>
<?php
} else if (!preg_match($regex_email, $email)) {
?>
  <script>
    window.alert("Not a Valid Email Address");
    location.href = "register.php";
  </script>
<?php
} else if (!preg_match($regex_num, $contact)) {
?>
  <script>
    window.alert("Not a Valid Phone Number");
    location.href = "register.php";
  </script>
<?php
} else {

  $query = "INSERT INTO users(name, email, password, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
  mysqli_query($con, $query) or die(mysqli_error($con));
  $user_id = mysqli_insert_id($con);
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['user_id'] = $user_id;
  header('location: index.php');
}
