<?php
include 'includes/common.php';
error_reporting(0);
if (!(isset($_SESSION["email"]))) {
    header('location: index.php');
}

$user_id = $_SESSION['user_id'];
if (isset($_POST['plusamount'])) {

    $id = $_POST['plusamount'];
    $query = "UPDATE cart_items SET amount=amount+1 WHERE product_id='$id' and user_id='$user_id' and status='Added To Cart'";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
}
if (isset($_POST['minusamount'])) {

    $id = $_POST['minusamount'];
    $query = "SELECT  amount FROM cart_items WHERE product_id='$id' and user_id='$user_id' and status='Added To Cart'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $r = mysqli_fetch_array($result);
    if ($r['amount'] <= 1) {
        $query = "DELETE FROM cart_items WHERE product_id='$id' and user_id='$user_id' and status='Added To Cart'";
        $res = mysqli_query($con, $query) or die($mysqli_error($con));
    } else {
        $query = "UPDATE cart_items SET amount=amount-1 WHERE product_id='$id' and user_id='$user_id' and status='Added To Cart'";
        $res = mysqli_query($con, $query) or die($mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/home.css"> -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <?php include 'includes/login-navbar.php'; ?>

    <div class="container-fluid pt-4 pb-4">
        <div class="row">
            <div class="col-md-7" style="background: #fff;">
                <h1>Supermarket</h1>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="m-0 p-0">Delivery Address</p>
                    <p class="m-0 p-0"><?php echo $_SESSION['address']; ?></p>
                </div>
                <hr>
                <?php
                $total = 0;
                $user_id = $_SESSION['user_id'];
                if (isset($_POST['confirm'])) {
                    $query = "SELECT  product_id FROM cart_items WHERE user_id='$user_id' and status='Added to Cart'";
                    $result = mysqli_query($con, $query) or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
                    if ($num != 0) {
                        $order_id = $user_id . '/' . date("Y/m/d/h/i/s");
                        while ($row = mysqli_fetch_array($result)) {
                            $pr_id = $row['product_id'];
                            $query = "UPDATE cart_items SET status='Confirmed', order_id='$order_id' WHERE product_id='$pr_id' and user_id='$user_id' and status='Added To Cart'";
                            $res = mysqli_query($con, $query) or die($mysqli_error($con));
                        }
                ?>
                        <script>
                            window.alert("Order Confirmed");
                        </script>
                    <?php
                    }
                }

                $query = "SELECT  products.*, product_id, amount FROM cart_items, products WHERE products.id=product_id and user_id='$user_id' and status='Added To Cart'";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo $row['img_path']; ?>" class="rounded-start" alt="..." style="width: 190px; height: 142px; object-fit: fill;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="mb-0"><?php echo $row['category']; ?></p>
                                    <div class="d-flex justify-content-between">
                                        <p><?php echo $row['brand']; ?></p>
                                        <p>₹<?php echo $row['price']; ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group">
                                            <form action="ccart.php" method="POST" id="updateamount">
                                                <span class="input-group-btn">
                                                    <button type="submit" name="minusamount" form="updateamount" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" value="<?php echo $row['id']; ?>" style="border-radius: 50%;">
                                                        <!-- <span class="glyphicon glyphicon-minus"></span> --> -
                                                    </button>
                                                </span>
                                                <input type="text" min="1" max="100" id="quantity" name="quantity" class="me-2 ms-2 input-number" value="<?php echo $row['amount']; ?>" style="width: 20%;" readonly>
                                                <span class="input-group-btn">
                                                    <button type="submit" name="plusamount" form="updateamount" class="quantity-right-plus btn btn-success btn-number" data-type="plus" value="<?php echo $row['id']; ?>" style="border-radius: 50%;">
                                                        <!-- <span class="glyphicon glyphicon-plus"></span> -->+
                                                    </button>
                                                </span>
                                            </form>
                                        </div>
                                        <div>
                                            <form action="ccart_script.php" method="POST" id="removefromcart">
                                                <button form="removefromcart" name="remove" value="<?php echo $row['product_id']; ?>" class="btn btn-danger">Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    $total += ($row['price'] * $row['amount']);
                }
                if ($num == 0) {
                ?>
                    <div class="container">
                        <div class="row justify-content-center align-items-center" style="height: 40.6vh;">
                            <p style="font-size: 16px;" class="text-center">No Items in Cart. Click <a href="index.php" style="text-decoration: none;">here</a> to Add Items</p>
                        </div>
                        <div class="row align-items-center">
                            <a name="history" href="order_history.php" type="button" class="btn btn-lg btn-outline-info" style="border-radius: 20px; width: auto;">Order History</a>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div class="row align-items-center justify-content-around">
                        <a name="history" href="order_history.php" type="button" class="btn btn-lg btn-outline-info" style="border-radius: 20px; width: auto;">Order History</a>
                        <span style="width: auto">
                            <form action="ccart.php" method="POST" id="confirmorder">
                                <button form="confirmorder" name="confirm" type="submit" class="btn btn-lg btn-outline-success" style="border-radius: 20px;">Confirm Order</button>
                            </form>
                        </span>
                    </div>
                <?php
                }
                if ($num == 1) {
                ?>
                    <div class="row justify-content-center align-items-center" style="height: 18vh;"></div>
                <?php
                }
                ?>
            </div>
            <div class="col-md-1" style="background: #fff; border-left: 5px solid grey;"></div>
            <div class="col-md-4" style="background: transparent;">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="mt-3">Price Details</h1>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Price(<?php echo $num; ?> Items)</p>
                            <p><?php echo '₹' . $total; ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Discount</p>
                            <p><?php echo '₹' . ($total * 0.1); ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Delivery Charges</p>
                            <p>₹40</p>
                        </div>
                        <div class="fw-bolder d-flex justify-content-between pt-3 mb-4" style="border-top: 1px dashed grey; border-bottom: 1px dashed grey">
                            <p>Total Price</p>
                            <p><?php echo '₹' . ($total - ($total * 0.1) + 40); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/home/home-car-01.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/home/home-car-02.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/home/home-car-03.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/home/home-car-04.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["error"])) {
        echo $_GET['error'];
    }
    ?>
    </div>
    <<--script>
        $(document).ready(function() {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {

        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        $('#quantity').val(quantity + 1);


        // Increment

        });

        $('.quantity-left-minus').click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());

        // If is not undefined

        // Increment
        if (quantity > 0) {
        $('#quantity').val(quantity - 1);
        }
        });

        });
        </=script> -->
        <?php include 'includes/login-footer.php' ?>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>