<?php
include 'includes/common.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-Market - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/login-navbar.php'; ?>
    <section class="vh-75 pb-4 pt-4" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form action="signup_script.php" method="POST">

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                            </div>
                                            <?php
                                            if (isset($_GET["m1"])) {
                                                echo $_GET['m1'];
                                            }
                                            ?>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="tel" class="form-control" placeholder="Contact Number" name="contact" maxlength="10" size="10" required>
                                            </div>
                                            <?php
                                            if (isset($_GET["m2"])) {
                                                echo $_GET['m2'];
                                            }
                                            ?>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" class="form-control" placeholder="City" name="city">
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4 form-group">
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" class="form-control" placeholder="Address" name="address">
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Register">
                                        </div>

                                    </form>

                                    <div class="text-center text-lg-start mt-4 pt-2">
                                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php" class="link-danger">Login</a></p>
                                    </div>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7] d-flex align-items-center order-1 order-lg-2">

                                    <img src="assets/img/register-bg.png" class="img-fluid mb-10" style="object-fit: fill; width: 500px; border-radius: 10px; opacity: 0.9;" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/login-footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>