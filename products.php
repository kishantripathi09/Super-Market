<?php
include 'includes/common.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - Products</title>
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
        $cate = isset($_GET['category']);
        $bran = isset($_GET['brand']);

        if (isset($_POST['category']) && isset($_POST['brand'])) {
        ?>
            <h2 class="text-center fw-bolder text-decoration-underline mt-5 mb-3"><?php echo $_POST['brand']; ?> in <?php echo $_POST['category']; ?></h2>
            <div class="row">
                <?php
                $categ = $_POST['category'];
                $brand = $_POST['brand'];
                $query = "SELECT * FROM products WHERE brand='$brand' and category='$categ'";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);

                if ($num == 0) {
                ?>
                    <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script>
                <?php
                }

                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4 col-6 col-xl-3 col-sm-6 mb-4 mt-4 col-xxl-2">
                        <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                            <div class="card" style="width: 100%; ">
                                <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="height: 129px; width: 100%; object-fit: fill;">
                                <div class="card-body">
                                    <p class="card-title fw-bold mb-0 pb-0"><?php echo $row['name']; ?></p>
                                    <div class="mt-0 pt-0">
                                        <p class="m-0 p-0"><?php echo $row['category']; ?></p>
                                        <p class="m-0 p-0"><?php echo $row['brand']; ?></p>
                                        <p class="m-0 p-0"> Price : ₹<?php echo $row['price']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        } elseif (!$cate && !$bran) {
        ?>
            <h2 class="text-center fw-bolder text-decoration-underline mt-5 mb-3">All Products</h2>
            <div class="row">
                <?php
                $query = "SELECT * FROM products";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script>
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4 col-6 col-xl-3 col-sm-6 mb-4 mt-4 col-xxl-2">
                        <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                            <div class="card" style="width: 100%; ">
                                <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="height: 129px; width: 100%; object-fit: fillr;">
                                <div class="card-body">
                                    <p class="card-title fw-bold mb-0 pb-0"><?php echo $row['name']; ?></p>
                                    <div class="mt-0 pt-0">
                                        <p class="m-0 p-0"><?php echo $row['category']; ?></p>
                                        <p class="m-0 p-0"><?php echo $row['brand']; ?></p>
                                        <p class="m-0 p-0"> Price : ₹<?php echo $row['price']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        } elseif (!isset($_GET['brand'])) {
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
                        location.href = "products.php";
                    </script>
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4 col-6 col-xl-3 col-sm-6 mb-4 mt-4 col-xxl-2">
                        <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                            <div class="card" style="width: 100%; ">
                                <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="height: 129px; width: 100%; object-fit: fill;">
                                <div class="card-body">
                                    <p class="card-title fw-bold mb-0 pb-0"><?php echo $row['name']; ?></p>
                                    <div class="mt-0 pt-0">
                                        <p class="m-0 p-0"><?php echo $row['category']; ?></p>
                                        <p class="m-0 p-0"><?php echo $row['brand']; ?></p>
                                        <p class="m-0 p-0"> Price : ₹<?php echo $row['price']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        } else {
        ?>
            <h2 class="text-center fw-bolder text-decoration-underline mt-5 mb-3"><?php echo $_GET['brand']; ?></h2>
            <div class="row">
                <?php
                $brand = $_GET['brand'];
                $query = "SELECT * FROM products WHERE brand='$brand'";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script>
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4 col-6 col-xl-3 col-sm-6 mb-4 mt-4 col-xxl-2">
                        <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                            <div class="card" style="width: 100%; ">
                                <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="height: 129px; width: 100%; object-fit: fillr;">
                                <div class="card-body">
                                    <p class="card-title fw-bold mb-0 pb-0"><?php echo $row['name']; ?></p>
                                    <div class="mt-0 pt-0">
                                        <p class="m-0 p-0"><?php echo $row['category']; ?></p>
                                        <p class="m-0 p-0"><?php echo $row['brand']; ?></p>
                                        <p class="m-0 p-0"> Price : ₹<?php echo $row['price']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
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