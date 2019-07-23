<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="../img/favicon.ico" />

   
    <link rel="icon" type="image/png" href="../../img/favicon.ico" />

    
    <!--Normalise CSS-->
    <link rel="stylesheet" type="text/css" href="../../libs/normalize.css">

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

    <div id="header"></div>



    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

            <!-- Default form register -->
            <form action="signup_mode.php" method="post" class="text-center pt-5">


                <h5>Register Type</h5> 
                <select name="mode" class="browser-default custom-select">
                    <option value="" disabled>Choose option</option>
                    <option value="user">User</option>
                    <option value="hotel">Hotel</option>
                    <option value="guide">Guide</option>

                </select>



                <div class="text-right">
                    <!-- Sign up button -->
                    <button name="submit" value="submit" class="btn btn-info  my-4" type="submit">Next</button>
                </div>
            </form>
            <!-- Default form register -->

            <div class="text-center mb-5">
                  Already have an account ? <br>
                <a href="../login/login.php"> Click here to Sign In</a>

            </div>
        </div>
        <div class="col-md-4"></div>
    </div>



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
