<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <!-- BOOTSTRAP END -->
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/e23e3d5407.js"></script>
    <!-- FONT AWESOME END -->
    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"/>
    <!-- GOOGLE FONT END -->
    <title><?= $title ?></title>
    <?= $this->Html->css('land_Page.css') ?>

    <?= $this->Html->script('jsjquery') ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light p-0 sticky-top" style="background: #162E44">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll linknav ps-4"
                style="--bs-scroll-height: 100px;">
                <li class="nav-item p-2" style="font-family: sans-serif ">
                    <a class="nav-link text-white" href="about-us.html">Home</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link  text-white" href="about-us.html">About</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link text-white" href="#">Typography</a>
                </li>

                <li class="nav-item p-2">
                    <a class="nav-link text-white" href="#">Contact Us</a>
                </li>
            </ul>
            <div class="d-flex align-items-center iconlink">
                <!-- Dark mode switch -->
                <div class="modeswitch" id="darkModeSwitch">
                    <div class="switch"></div>
                </div>

                <ul class="nav pe-5">
                    <li class="nav-item">
                        <a class="nav-link px-2 fs-5 text-white" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 fs-5 text-white" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 fs-5 text-white" href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 fs-5 text-white" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<?= $this->element('carousel') ?>
<?= $this->fetch('content') ?>

<div class="row p-0 m-0 text-white text-left footerrow" style="background: #162E44">
    <div class="row p-0 m-0 my-3 justify-content-lg-between">
        <div class="col-sm-12 col-md-5 col-lg-3 col-xl-4">
            <h6 class="mt-5 mb-3 ms-3 footerheadline">CONTACT US</h6>
            <div class="footericontext">
                <div class="d-flex">
                    <div class="footerinnerdiv">
                        <span><i class="fas fa-phone-alt mb-3 ms-3"></i></span>
                    </div>
                    <div class="text-left ms-3 footerinnerdiv"><span class="spantext">+1 323-913-4688</span></div>
                </div>
            </div>
            <div class="footericontext">
                <div class="d-flex">
                    <div class="footerinnerdiv">
                        <span><i class="fas fa-envelope mb-3 ms-3"></i></span>
                    </div>
                    <div class="text-left ms-3 footerinnerdiv"><span class="spantext">info@demolink.org</span></div>
                </div>
            </div>
            <div class="footericontext">
                <div class="d-flex">
                    <div class="footerinnerdiv">
                        <span><i class="fas fa-location-arrow mb-3 ms-3"></i></span>
                    </div>
                    <div class="text-left ms-3 footerinnerdiv"><span class="spantext">4730 Crystal Springs Dr, Los Angeles, CA 90027</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4 px-4">
            <h6 class="mt-5 mb-3 ms-3 footerheadline text-uppercase">POPULAR NEWS</h6>
            <div class="footericontext mb-3">
                <div class="text-left ms-3 footerinnerdiv2"><span class="spantext2">Your Personal Guide to 5 Best Places to Visit on Earth</span>
                </div>
                <div class="text-left footerinnerdiv2 ms-3">
                    <span class="spantextdate">May 04, 2019</span>
                </div>

            </div>
            <div class="footericontext">
                <div class="text-left ms-3 footerinnerdiv2"><span class="spantext2">Top 10 Hotels: Rating by Wonder Tour Travel Experts</span>
                </div>
                <div class="text-left footerinnerdiv2 ms-3">
                    <span class="spantextdate">May 04, 2019</span>
                </div>
            </div>
        </div>
        <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4 parentdiv">
            <h6 class="mt-5 mb-3 ms-3 footerheadline text-uppercase">QUICK LINKS</h6>
            <div class="row ">
                <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <ul class="footerlist mb-0 ps-3">
                        <li class="footerlistlink"><a class=" " href="#" style="text-decoration-line:none">About us</a>
                        </li>
                        <li class="footerlistlink"><a class=" " href="#" style="text-decoration-line:none">Our Tours</a>
                        </li>
                        <li class="footerlistlink"><a class=" " href="#" style="text-decoration-line:none">Our Team</a>
                        </li>
                        <!--                    </ul>-->
                        <!--                </div>-->
                        <!--                <div class="col col-sm-12 col-md-6 col-lg-6 col-xl-6">-->
                        <!--                    <ul class="footerlist">-->
                        <li class="footerlistlink"><a class=" " href="#" style="text-decoration-line:none">Gallery</a>
                        </li>
                        <li class="footerlistlink"><a class=" " href="#" style="text-decoration-line:none">Blog</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" type="button" class="btn ms-3 buttonclass"
               style="">Get
                in touch</a>
        </div>
    </div>
</div>
</div>
<div class="row p-0 m-0" style="background: #11263A">
    <div class="col-sm-6 col-md-5 col-lg-4 col-xl-4 my-4">
        <p class="text-left ms-4" style="color: #555555">© 2022 Wonder Tour. All Rights Reserved. Design by
            TemplateMonster</p>
    </div>
    <div class="col-sm-6 col-md-5 col-lg-4 col-xl-4 my-4">
        <div class="d-flex justify-content-center">
            <span><i class="fab fa-facebook-f me-3" style="color: #555555; font-size: 1.2rem"></i></span>
            <span><i class="fab fa-twitter me-3" style="color: #555555; font-size: 1.2rem"></i></span>
            <span><i class="fab fa-google-plus-g me-3" style="color: #555555; font-size: 1.2rem"></i></span>
            <span><i class="fab fa-instagram" style="color: #555555; font-size: 1.2rem"></i></span>
        </div>

    </div>
    <div class="col-sm-6 col-md-5 col-lg-4 col-xl-4 my-4 text-md-right">
        <p class=" text-right" style="color: #555555">Privacy Policy</p>
    </div>
</div>
<?= $this->Html->script('jscript') ?>
</body>
</html>
