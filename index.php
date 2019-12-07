<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Tour 360</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="icon" type="image/png" href="./img/favicon.ico" />

    <!--Normalise CSS-->
    <link rel="stylesheet" type="text/css" href="libs/normalize.css">

    <!-- Font awesome 5.9-->
    <link rel="stylesheet" href="libs/fontawesome/css/all.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="./libs/bootstrap.min.css">

    <!--Material Design for Bootstrap -->
    <link rel="stylesheet" href="libs/mdb.min.css">

    <link rel="stylesheet" href="./libs/carousel/owl.carousel.css">

    <!--Style css-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" href="css/homestyle.css">

    <!--Media Query -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>

<body>

    <header id="header">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                        <ul>
                            <li><a href="#">Visit Us</a></li>
                            <li><a href="#">Buy Tickets</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                        <div class="header-social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php"><img src="" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="#home" class="smooth-scroll">Home</a></li>
                        <li><a href="#services" class="smooth-scroll">Services</a></li>
                        <li><a href="#trending">Trending</a></li>
                        <li><a href="#custom-packages">Custom Packages</a></li>
                        <?php 
                            if(isset($_SESSION['login'])){
                         ?>
                         <li><a href="./vendor/login/logout.php">LogOut</a>

                        </li>
                     <?php }else{ ?>
                        <li><a href="./vendor/login/login.php">Login</a>

                        </li>


                        <li><a href="./vendor/register/signup.php">Sign Up</a>

                        </li>
                    <?php } ?>
                        </li>
                        <li><a href="#contact" class="smooth-scroll">Contact</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->








    <!-- start banner Area -->
    <section id="home" class="banner-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-between">
                <div class="col-md-6 banner-left">
                    <h6 class="text-white"></h6>
                    <h1 class="text-white">Tour 360</h1>
                    <h6 class="text-white mb-3">
                       Experience your dream vacation from your home
                    </h6>
                    <a href="vendor/profile-page/profile.php" class="btn btn-info btn-lg text-uppercase smooth-scroll">Explore Nepal</a>
                </div>

            </div>
        </div>
        <!-- Arrow Down -->
        <a href="#services" id="arrow-down" class="smooth-scroll">
            <i class="fa fa-angle-down"></i>
        </a>
    </section>
    <!-- End banner Area -->



<section id="search-section" class="py-5">
        <div class="container">
                <br/>
                <div class="row justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8">
                                        <form autocomplete="off" class="card card-sm">
                                            <div class="card-body row no-gutters align-items-center">
                                                <div class="col-auto mr-2">
                                                    <i class="fa fa-search fa-2x text-body"></i>
                                                </div>
                                                <!--end of col-->
                                                <div class="col">
                                                        <input id="myInput" class="form-control form-control-lg form-control-borderless"  type="text" name="myCountry" placeholder="Search places">
                                                </div>
                                                <!--end of col-->
                                                <div class="col-auto">
                                                    <a class="btn btn-block btn-dark" type="submit" id="recommendationEngine" href="./vendor/profile-page/profile.php">Search</a>
                                                </div>
                                                <!--end of col-->
                                            </div>
                                        </form>
                                    </div>
                                    <!--end of col-->
                                </div>
            </div>

            
</section>




    <div id="services"></div>




    <div id="trending"></div>

    <div id="custom-packages">
    </div>

    <div id="contact"></div>

    <div id="footer"></div>




  <!-- JQuery -->
  <script type="text/javascript" src="libs/jquery-3.4.1.min.js"></script>

    <!--Bootstrap JS-->
    <script src="libs/bootstrap.min.js"></script>


    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="libs/mdb.min.js"></script>


    <!--Popper JS-->
    <script src="libs/popper.min.js"></script>

    <script src="libs/carousel/owl.carousel.min.js"></script>

    <!--Custom JS -->
    <script src="js/custom.js"></script>




    <!--Extra JS Libraries-->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>




    <script>
        $(function () {
            $("#services").load("./vendor/services.php");
            $("#trending").load("./vendor/trending.php");
            $("#custom-packages").load("./vendor/custom-packages.php");
            $("#contact").load("./vendor/contact.php");
            $("#footer").load("./vendor/footer.php");
        });
        
    </script>

</body>

</html>
