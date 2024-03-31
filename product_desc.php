<?php
include 'includes/common.php';

$id = $_GET['id'];
$query = "SELECT * FROM products WHERE id='$id'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - <?php echo $row['name']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/login-navbar.php' ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM products WHERE id='$id'";
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
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="col-sm-6 ">
                <img src="<?php echo $row['img_path']; ?>" class="img-fluid rounded-4 mb-5" style="width: 662px; height: 442px; object-fir: fill;">
            </div>
            <div class="col-sm-6">
                <h2 class="text-decoration-underline fw-bold"><?php echo $row['name'] ?></h2>
                <p class="mb-0" style="font-style: italic; font-size: 20px;"><?php echo $row['category']; ?></p>
                <p class="mb-3" style="font-style: italic; font-size: 15px;"><?php echo $row['brand']; ?></p>
                <p class="mb-4"><?php echo $row['description']; ?></p>

                <p class="fw-bold">Price : ₹<?php echo $row['price']; ?></p>
                <div class="card-body">
                    <div class="row">
                        <form id="addtocart" method="POST" action="ccart_script.php" class="d-flex justify-content-start mt-4">
                            <div class="col-sm-3 m-0 p-0 me-1">
                                <input type="number" min="1" max="100" class="form-control" name="amount" placeholder="Quantity" aria-describedby="basic-addon1" required>
                            </div>
                            <div class="col-sm-2 m-0 p-0">
                                <button form="addtocart" name="add" value="<?php echo $row['id']; ?>" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""></button>
                            </div>
                            <div class="col-sm-6"></div>
                        </form>
                    </div>
                    <div class="input-group mb-3">
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

    <?php include 'includes/login-footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>