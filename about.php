<?php
include 'includes/common.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-Market - About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background: #d1d1d1;">
    <?php include 'includes/login-navbar.php' ?>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 px-5 pb-5 mb-5" style="background: white; border-radius: 15px;">
                <h1 class="text-center mt-4 mb-5"><span class="mt-2 pb-2" style="width: 50px; border-bottom:2px solid red;">About us</span></h1>
                <p class="mt-4 mb-4 px-3" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus dolores, autem repudiandae magni provident fuga saepe necessitatibus minima pariatur tempora quisquam totam sint explicabo sequi laborum sit excepturi ea. Assumenda iusto provident voluptates possimus nisi a corrupti, at perspiciatis quam consequatur iste sunt delectus harum dolore esse aperiam impedit tenetur!</p>
                <div class="row mt-5  justify-content-center align-items-center">
                    <div class="col-sm-6">
                        <img src="assets/img/about/about-image-01.jpg" style="width: 100%; border-radius: 15px;" alt="image">
                    </div>
                    <div class="col-sm-6">
                        <ol id="about-list">
                            <li style="margin: 20px 0;">Lorem, ipsum dolor.</li>
                            <li style="margin: 20px 0;">Lorem, ipsum dolor.</li>
                            <li style="margin: 20px 0;">Lorem, ipsum dolor.</li>
                            <li style="margin: 20px 0;">Lorem, ipsum dolor.</li>
                            <li style="margin: 20px 0;">Lorem, ipsum dolor.</li>
                            <li style="margin: 20px 0;">Lorem, ipsum dolor.</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row mt-5 mb-5" style="background: white;">
            <div class="col-sm-12 mb-5">
                <h2 class="text-center mt-4 mb-5"><span class="mt-2 pb-2" style="width: 50px; border-bottom:2px solid red;">Testimonials</span></h3>
                    <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 px-5">
                            <i class="bi bi-quote" style="color: limegreen; font-size: 30px;"></i>
                            <p class="ms-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nesciunt eos magni harum voluptas repudiandae omnis eum exercitationem quo reiciendis.</p>
                            <div class="mb-1 mt-3" style="display: flex; float: right; flex-direction: column;">
                                <span style="font-weight: bolder; font-size: 17px; text-transform:uppercase;">ANDREW MGUIRE</span>
                                <span style="text-align:right; color: red; text-transform:uppercase;">Customer</span>
                            </div>
                        </div>
                        <div class="col-sm-5 px-5">
                            <i class="bi bi-quote" style="color: limegreen; font-size: 30px;"></i>
                            <p class="ms-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nesciunt eos magni harum voluptas repudiandae omnis eum exercitationem quo reiciendis.</p>
                            <div class="mb-1 mt-3" style="display: flex; float: right; flex-direction: column;">
                                <span style="font-weight: bolder; font-size: 17px; text-transform:uppercase;">TOM GROOVE</span>
                                <span style="text-align:right; color: red; text-transform:uppercase;">Customer</span>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
            </div>
            <div class="col-sm-12 mb-5">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5 px-5">
                        <i class="bi bi-quote" style="color: limegreen; font-size: 30px;"></i>
                        <p class="ms-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nesciunt eos magni harum voluptas repudiandae omnis eum exercitationem quo reiciendis.</p>
                        <div class="mb-1 mt-3" style="display: flex; float: right; flex-direction: column;">
                            <span style="font-weight: bolder; font-size: 17px; text-transform:uppercase;">ANDREW MGUIRE</span>
                            <span style="text-align:right; color: red; text-transform:uppercase;">Customer</span>
                        </div>
                    </div>
                    <div class="col-sm-5 px-5">
                        <i class="bi bi-quote" style="color: limegreen; font-size: 30px;"></i>
                        <p class="ms-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nesciunt eos magni harum voluptas repudiandae omnis eum exercitationem quo reiciendis.</p>
                        <div class="mb-1 mt-3" style="display: flex; float: right; flex-direction: column;">
                            <span style="font-weight: bolder; font-size: 17px; text-transform:uppercase;">TOM GROOVE</span>
                            <span style="text-align:right; color: red; text-transform:uppercase;">Customer</span>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
            <div class="col-sm-12 mb-5">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5 px-5">
                        <i class="bi bi-quote" style="color: limegreen; font-size: 30px;"></i>
                        <p class="ms-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nesciunt eos magni harum voluptas repudiandae omnis eum exercitationem quo reiciendis.</p>
                        <div class="mb-1 mt-3" style="display: flex; float: right; flex-direction: column;">
                            <span style="font-weight: bolder; font-size: 17px; text-transform:uppercase;">ANDREW MGUIRE</span>
                            <span style="text-align:right; color: red; text-transform:uppercase;">Customer</span>
                        </div>
                    </div>
                    <div class="col-sm-5 px-5">
                        <i class="bi bi-quote" style="color: limegreen; font-size: 30px;"></i>
                        <p class="ms-4" align="justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nesciunt eos magni harum voluptas repudiandae omnis eum exercitationem quo reiciendis.</p>
                        <div class="mb-1 mt-3" style="display: flex; float: right; flex-direction: column;">
                            <span style="font-weight: bolder; font-size: 17px; text-transform:uppercase;">TOM GROOVE</span>
                            <span style="text-align:right; color: red; text-transform:uppercase;">Customer</span>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-sm-12">
                <h2 class="text-center mt-4 mb-5"><span class="mt-2 pb-2" style="width: 50px; border-bottom:2px solid red;">Meet Our Team</span></h3>
                    <div class="row mb-3">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 mt-4">
                            <div class="card mb-3" style="max-width: 540px; border-radius: 20px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="assets/img/about/team-image-01.jpg" class="img-fluid rounded-bottom w-100" alt="..." style="border-radius: 20px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                            <h3 class="card-title fw-bolder">Member Name</h3>
                                            <h5 class="card-pos mb-3">Front-end</h5>
                                            <div class="mb-2 mt-5">
                                                <a href="" class="text-decoration-none ms-2"><img src="assets/img/contact/instagram.png" alt=""> </a>
                                                <a href="" class="ms-3 text-decoration-none"><img src="assets/img/contact/linkedin.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5 mt-4">
                            <div class="card mb-3" style="max-width: 540px; border-radius: 20px;">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="assets/img/about/team-image-02.jpg" class="img-fluid rounded-bottom w-100" alt="..." style="border-radius: 20px;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body d-flex justify-content-center align-items-center flex-column">
                                            <h3 class="card-title fw-bolder">Member name</h3>
                                            <h5 class="card-pos mb-3">Back-end</h5>
                                            <div class="mb-2 mt-5" id="about-team-icon">
                                                <a href="" class="text-decoration-none ms-2"><img src="assets/img/contact/instagram.png" alt=""> </a>
                                                <a href="" class="ms-3 text-decoration-none"><img src="assets/img/contact/linkedin.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                    </div>
            </div>
        </div>

    </div>

    <?php include 'includes/login-footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>