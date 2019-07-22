<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../img/favicon.ico" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

    <!--Normalise CSS-->
    <link rel="stylesheet" type="text/css" href="../libs/normalize.css">

    <!-- Font awesome 5.9-->
    <link rel="stylesheet" href="../libs/fontawesome/css/all.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="../libs/bootstrap.min.css">

    <!--Material Design for Bootstrap -->
    <link rel="stylesheet" href="../libs/mdb.min.css">

    <!--Style css-->
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">

    <!--Media Query -->
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

</head>

<body>

    <!-- <div id="header"></div> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Tour 360</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Login
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
           
          </ul>
          <span class="navbar-text white-text">
               
                        <a class="nav-link" href="../../index.php">Back To Home</a>
                     
          </span>
        </div>
      </nav>

    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <!--empty-->
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-warning text-white">
                            <h2>Login Form</h2>

                        </div>
                        <form action="login1.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">

                                    <!-- Subject -->
                                    <label>Type of login : </label>
                                    <select class="browser-default custom-select mb-4" name="mode">
                                        <option value="" disabled>Choose option</option>
                                        <option value="user">User</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="guide">Guide</option>

                                    </select>
                                </div>


                                <div class="form-group">


                                    <!-- Email -->
                                    <input type="email" id="email" class="form-control mb-4" placeholder="Email" name="email">

                                </div>

                                <div class="form-group">


                                    <input type="password" id="password" class="form-control mb-4"
                                        placeholder="Password" name="pass">


                                </div>

                            </div>

                            <div class="card-footer">
                                <button name="submit" class="btn btn-warning btn-block"  value="submit">Log In</button>

                            </div>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>




    <!-- <div id="footer"></div> -->



    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">


            <!--Footer Links-->
            <div class="container pt-5 mb-4 text-center text-md-left">
                <div class="row">
    
                    <!--First column-->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h6 class="text-uppercase text-white pb-2">
                            <strong>Tour 360 </strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                               Tour 360 is a complete travel experience that we are trying to provide starts from browsing through destinations, virtually experiencing the destination through a VR experience.</p>
                    </div>
                    <!--/.First column-->
    
                    <!--Second column-->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase text-white pb-2">
                            <strong>Partners</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    
                        <p>
                            <a href="#!">Visit Nepal 2020</a>
                        </p>
                        <p>
                            <a href="#!">Everest Hackathon</a>
                        </p>
                        <p>
                            <a href="#!">Nepal Tourism Board</a>
                        </p>
                    </div>
                    <!--/.Second column-->
    
                    <!--Third column-->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase text-white pb-2">
                            <strong>Useful links</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">Department of Transportation</a>
                        </p>
                        <p>
                            <a href="#!">Ministry of Education</a>
                        </p>
                        <p>
                            <a href="#!">Home Ministry</a>
                        </p>
                        <p>
                            <a href="#!">Ministry of Foreign Affairs</a>
                        </p>
                    </div>
                    <!--/.Third column-->
    
                    <!--Fourth column-->
                    <div class="col-md-4 col-lg-3 col-xl-3">
                        <h6 class="text-uppercase text-white pb-2">
                            <strong>Contact</strong>
                        </h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-home"></i></i>&nbsp;&nbsp;&nbsp; Singha Durbar, KTM, Nepal</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> info@tour360.gov.np</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 977 01 425 7654</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 977 01 421 7291</p>
                    </div>
                    <!--/.Fourth column-->
    
                </div>
            </div>
            <!--/.Footer Links-->
    
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="">Tour 360°</a>
            </div>
            <!-- Copyright -->
    
        </footer>
        <!-- Footer -->
    
    
    









    <!--Jquery JS-->
    <script src="../libs/jquery-3.3.1.min.js"></script>

    <!--Bootstrap JS-->
    <script src="../libs/bootstrap.min.js"></script>


    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../libs/mdb.min.css"></script>

    <!--Popper JS-->
    <script src=".../libs/popper.min.js"></script>


    <!--Custom JS -->
    <script src="../js/custom.js"></script>

    <script>
        $(function () {
            $("#header").load("./navbar.php");
            $("#footer").load("../footer.php");
        });
    </script>

</body>

</html>