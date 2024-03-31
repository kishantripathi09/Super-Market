<?php
include 'includes/common.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-Market - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include 'includes/login-navbar.php' ?>
    <div class="container">
        <div class="row mt-4">
            <div class="col-sm-9">
                <h1>LIVE SUPPORT</h1>
                <h3 style="margin-bottom: 20px;">24 hours | 7 days a week | 365 days a year Live Technical Support</h3>
                <div>
                    <p class="text-justify pe-5" align="justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
            </div>
            <div class="col-sm-2">
                <img align="right w-100" src="assets/img/contact/contact-bg.jpeg" alt="contact us">
            </div>
            <div class="col-sm-1"></div>
        </div><br>


        <div class="row mb-5">
            <div class="col-sm-8">
                <h2>CONTACT US</h2>

                <form action="contact_script.php" method="POST">

                    <div class="form-group mb-3">
                        <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                    </div>

                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                    </div>
                    <?php
                    if (isset($_GET["m"])) {
                        echo $_GET['m'];
                    }
                    ?>

                    <div class="form-group mb-3">
                        <textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Your Message Here"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>

            <div class="col-sm-4">
                <h2>Contact Information:</h2>
                <p>500 Lorem Ipsum Dolar Sit,</p>
                <p>22-56-3-5 Sit Amet, Lorem,</p>
                <p>USA</p>
                <p>Phone:(00) 222 555 3333</p>
                <p>Fax:(000) 222 55 33 6</p>
                <p>Email: info@estore.com</p>
                <p>Follow on: <a href="" class="text-decoration-none ms-2"><img src="assets/img/contact/instagram.png" alt=""> </a>
                    <a href="" class="ms-3 text-decoration-none"><img src="assets/img/contact/linkedin.png" alt=""></a>
                </p>
            </div>
        </div>
    </div>
    <?php include 'includes/login-footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>