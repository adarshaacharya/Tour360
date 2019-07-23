<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../../img/favicon.ico" />

    
    <!--Normalise CSS-->
    <link rel="stylesheet" type="text/css" href="../libs/normalize.css">

    <!-- Font awesome 5.9-->
    <link rel="stylesheet" href="../../libs/fontawesome/css/all.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="../../libs/bootstrap.min.css">

    <!--Material Design for Bootstrap -->
    <link rel="stylesheet" href="../../libs/mdb.min.css">

    <!--Style css-->
    <link rel="stylesheet" type="text/css" media="screen" href="../../css/style.css">

    <!--Media Query -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css">

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
                        <div class="card-header bg-info text-white">
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
                                <button name="submit" class="btn btn-info btn-block"  value="submit">Log In</button>

                            </div>
                        </form>



                        <div class="text-center mb-2">
                         Don't have an account ? <br>
                           <a href="../register/signup.php"> Click here to Register</a>
                           </div>
                    </div>

                </div>

            </div>

        </div>

    </section>




   <div id="footer"></div> 



    
    
    









    <!--Jquery JS-->
    <script src="../../libs/jquery-3.4.1.min.js"></script>

    <!--Bootstrap JS-->
    <script src="../../libs/bootstrap.min.js"></script>


    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../libs/mdb.min.css"></script>

    <!--Popper JS-->
    <script src=".../../libs/popper.min.js"></script>


    <!--Custom JS -->
    <script src="../../js/custom.js"></script>

    <script>
        $(function () {
            $("#header").load("./navbar.php");
            $("#footer").load("../footer.php");
        });
    </script>

</body>

</html>