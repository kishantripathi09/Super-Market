<?php
include 'includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <?php include 'includes/login-navbar.php'; ?>

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
    <?php
    if (isset($_GET["m"])) {
        echo $_GET['m'];
    }
    ?>
    <div class="container">

        <div class="mt-5 row mb-3 justify-content-evenly align-items-center">
            <h3 class="mt-5 text-center text-decoration-underline">My Smart Basket</h3>
            <hr>
            <?php
            $query = "SELECT * FROM products LIMIT 4";
            $result = mysqli_query($con, $query) or die($mysqli_error($con));
            $num = mysqli_num_rows($result);
            if ($num == 0) {
            ?>
                <script>
                    window.alert("No Product Found");
                    location.href = "products.php";
                </script>
            <?php
            }
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-3 mb-4 mt-4">
                    <div class="card" style="width: 100%;">
                        <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                            <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="height: 203px; width: 100%; object-fit: fill;">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <p class="card-title">₹<?php echo $row['price']; ?></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="card-title"><?php echo $row['category']; ?></p>
                                    <p class="card-title"><?php echo $row['brand']; ?></p>
                                </div>
                            </div>
                        </a>
                        <div class="card-body" style="background: #d1d1d1;">

                            <form id="addtocart1<?php echo $row['id']; ?>" method="POST" action="ccart_script.php">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Qty</span>
                                    <input type="number" min="1" max="100" class="form-control" name="amount" placeholder="Quantity" aria-describedby="basic-addon1" required>
                                </div>
                                <button form="addtocart1<?php echo $row['id']; ?>" name="add" value="<?php echo $row['id']; ?>" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""></button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="container">
            <h3 class="mt-5 text-center text-decoration-underline">Our Best Sellers</h3>
            <hr>

            <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
                <?php
                $query = "SELECT * FROM products LIMIT 4";
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
                    <div class="col-md-3 mb-4 mt-4">
                        <div class="card" style="width: 100%;">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="..." style="height: 203px; width: 100%; object-fit: fill;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                        <p class="card-title">₹<?php echo $row['price']; ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title"><?php echo $row['category']; ?></p>
                                        <p class="card-title"><?php echo $row['brand']; ?></p>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body" style="background: #d1d1d1;">

                                <form id="addtocart2<?php echo $row['id']; ?>" method="POST" action="ccart_script.php">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">Qty</span>
                                        <input type="number" min="1" max="100" class="form-control" name="amount" placeholder="Quantity" aria-describedby="basic-addon1" required>
                                    </div>
                                    <button form="addtocart2<?php echo $row['id']; ?>" name="add" value="<?php echo $row['id']; ?>" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
        <div class="container">
            <h3 class="mt-5 text-center text-decoration-underline">Beverages</h3>
            <hr>

            <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
                <?php
                $query = "SELECT * FROM products WHERE category='Beverages' LIMIT 5";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <!-- <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script> -->
                <?php
                }
                $row = mysqli_fetch_array($result);
                ?>
                <div class="col-md-6">
                    <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                        <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 416px; object-fit: fill;" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3 class="mt-5 text-center text-decoration-underline">Our Best Staples</h3>
            <hr>

            <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
                <?php
                $query = "SELECT * FROM products WHERE category='Staples' LIMIT 6";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <!-- <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script> -->
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-2 mb-4 mt-4">
                        <div class="card staples" style="width: 100%; ">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" class="card-img-top" alt="..." style="width: 100%; height: 127px; object-fit: fill;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title fw-bold"><?php echo $row['name']; ?></p>
                                        <p class="card-title">₹<?php echo $row['price']; ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title"><?php echo $row['brand']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="container">
            <h3 class="mt-5 text-center text-decoration-underline">Fruits and Vegetables</h3>
            <hr>

            <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
                <?php
                $query = "SELECT * FROM products WHERE category='Fruits and Vegetables' LIMIT 5";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <!-- <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script> -->
                <?php
                }
                $row = mysqli_fetch_array($result);
                ?>
                <div class="col-md-6">
                    <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                        <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 416px; object-fit: fill;" alt="">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                        <?php
                        $row = mysqli_fetch_array($result);
                        ?>
                        <div class="col-md-6 p-3">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" style="width: 100%; height: 195px; object-fit: fill;" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h3 class="mt-5 text-center text-decoration-underline">Snacks Store</h3>
            <hr>

            <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
                <?php
                $query = "SELECT * FROM products WHERE category='Snacks' LIMIT 4";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <!-- <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script> -->
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-3 mb-4 mt-4">
                        <div class="card" style="width: 100%;">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" class="card-img-top" alt="..." style="width: 100%; height: 199px; object-fit: fill;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title fw-bold"><?php echo $row['name']; ?></p>
                                        <p class="card-title">₹<?php echo $row['price']; ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title"><?php echo $row['category']; ?></p>
                                        <p class="card-title"><?php echo $row['brand']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="container">
            <h3 class="mt-5 text-center text-decoration-underline">Kitchen Essentials</h3>
            <hr>

            <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
                <?php
                $query = "SELECT * FROM products WHERE category='Kitchen Essentials' LIMIT 4";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                if ($num == 0) {
                ?>
                    <!-- <script>
                        window.alert("No Products Found");
                        location.href = "products.php";
                    </script> -->
                <?php
                }
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-2">
                        <div class="card kitchen" style="width: 100%; ">
                            <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark">
                                <img src="<?php echo $row['img_path']; ?>" class="card-img-top" alt="..." style="width: 100%; height: 127px; object-fit: fill;">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title fw-bold"><?php echo $row['name']; ?></p>
                                        <p class="card-title">₹<?php echo $row['price']; ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p class="card-title"><?php echo $row['brand']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="container">
            <h3 class="text-center mt-5 text-decoration-underline">Our Partners</h3>
            <hr>
            <div class="row mt-5 mb-5">
                <div class="col-md-6">
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
                <div class="col-md-6">
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

    <?php include 'includes/login-footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>