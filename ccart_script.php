<?php
require('includes/common.php');

if (!isset($_SESSION['email'])) {
?>
    <script>
        window.alert("Login First");
        location.href = "login.php";
    </script>
    <?php
}

if (isset($_POST['remove'])) {
    $id = $_POST['remove'];
    $user_id = $_SESSION['user_id'];
    $query = "DELETE FROM cart_items WHERE user_id='$user_id' and product_id='$id' and status='Added To Cart'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
}
if (isset($_POST['add']) && is_numeric($_POST['amount'])) {
    $amount = $_POST['amount'];
    $id = $_POST['add'];
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM cart_items WHERE user_id='$user_id' and product_id='$id' and status='Added To Cart'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        $query = "INSERT INTO cart_items (product_id, user_id, status, amount) VALUES('$id', '$user_id', 'Added to cart', '$amount')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        if ($amount <= 0) {
            $query = "DELETE FROM cart_items WHERE user_id='$user_id' and product_id='$id' and status='Added To Cart'";
            $result = mysqli_query($con, $query) or die($mysqli_error($con));
        }
    } else {
    ?>
        <script>
            window.alert("Items already in Cart");
            location.href = "ccart.php";
        </script>
<?php
    }
}
header('location: ' . $_SERVER['HTTP_REFERER']);
