<?php
include 'includes/common.php';

if (!(isset($_SESSION["email"]) && $_SESSION["email"] == "supermarketadmin@admin.com")) {
    header('location: index.php');
}

if (isset($_POST['remove'])) {
    $id = $_POST['remove'];
    $query = "DELETE FROM products WHERE id='$id'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
?>
    <script>
        window.alert("Product Deleted");
    </script>
<?php
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - Remove Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/login-navbar.php' ?>
    <div class="container">
        <?php
        if (!isset($_GET['category'])) {
        ?>
            <h2 class="text-center fw-bolder text-decoration-underline mt-5 mb-3">Remove Products</h2>
            <div class="row">
                <?php
                $query = "SELECT * FROM products";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <script>
                        window.alert("No Products Found");
                        location.href = "remove_product.php";
                    </script>
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4 col-6 col-xl-3 col-sm-6 mb-4 mt-4 col-xxl-2">
                        <div class="card" style="width: 100%; ">
                            <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="width: 100%; height: 129px; object-fit: fill;">
                            <div class="card-body">
                                <p class="card-title fw-bold mb-0 pb-0"><?php echo $row['name']; ?></p>
                                <div class="mt-0 pt-0">
                                    <p class="m-0 p-0"><?php echo $row['category']; ?></p>
                                    <p class="m-0 p-0"><?php echo $row['brand']; ?></p>
                                    <p class="m-0 p-0"> Price : ₹<?php echo $row['price']; ?></p>
                                </div>
                                <hr>

                                <form class="d-grid gap-3" action="remove_product.php" method="POST" id="removeproduct">
                                    <button form="removeproduct" type="submit" name="remove" value="<?php echo $row['id']; ?>" class="btn btn-outline-danger">Remove</button>
                                </form>

                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        } else {
        ?>
            <h2 class="text-center fw-bolder text-decoration-underline mt-5 mb-3"><?php echo $_GET['category']; ?></h2>
            <div class="row">
                <?php
                $category = $_GET['category'];
                $query = "SELECT * FROM products WHERE category='$category'";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <script>
                        window.alert("No Products Found");
                        location.href = "remove_product.php";
                    </script>
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4 col-6 col-xl-3 col-sm-6 mb-4 mt-4 col-xxl-2">
                        <div class="card" style="width: 100%; ">
                            <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="width: 100%; height: 129px; object-fit: fillr;">
                            <div class="card-body">
                                <p class="card-title fw-bold mb-0 pb-0"><?php echo $row['name']; ?></p>
                                <div class="mt-0 pt-0">
                                    <p class="m-0 p-0"><?php echo $row['category']; ?></p>
                                    <p class="m-0 p-0"><?php echo $row['brand']; ?></p>
                                    <p class="m-0 p-0"> Price : ₹<?php echo $row['price']; ?></p>
                                </div>
                                <hr>
                                <div class="d-grid gap-3">
                                    <button class="btn btn-outline-danger">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        if ($num < 7) {
        ?>
            <div class="row justify-content-center align-items-center" style="height: 19.2vh;"></div>
        <?php
        }
        if (isset($_GET["error"])) {
            echo $_GET['error'];
        }
        ?>
    </div>

    <?php include 'includes/login-footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>