<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Signup</title>
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

    <div id="header"></div>





    <section class="p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <!--empty-->
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-info text-white">
                            <h2>Hotel Signup Form</h2>
                        </div>
                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <input name="name" type="text" id="name" class="form-control mb-4" placeholder="Name">
                                </div>


                                <div class="form-group">
                                    <input name="address" type="text" id="location" class="form-control mb-4" placeholder="Location">
                                </div>

                                <div class="form-group">
                                        <input name="service" type="text" id="password" class="form-control mb-4" placeholder="Services">
                                    </div>


                                <div class="form-group">
                                    <input name="description" type="text" id="desc" class="form-control mb-4" placeholder="Description">
                                </div>



                                <div class="form-group">
                                        <input name="price" type="number" id="price" class="form-control mb-4" placeholder="Price">
                                    </div>
                             

                                    

                                <div class="form-group">
                                        <input name="room" type="text" id="totalRoom" class="form-control mb-4" placeholder="Total Rooms">
                                    </div>
                             
    
                         

                                



                                <div class="form-group">
                                        <input name="email" type="email" id="email" class="form-control mb-4"
                                            placeholder="Email">
                                    </div>


                                <div class="form-group">
                                    <input name="pass" type="password" id="password" class="form-control mb-4"
                                        placeholder="Password">
                                </div>

                                <div class="form-group text-left">
                                    <label for="photo">Upload photo</label>
                                    <input name="photo" type="file" class="form-control-file" id="photo">
                                </div>

                            </div>
                            <input type="hidden" name="mode" value="hotel">
                            <div class="card-footer">
                                <button name="submit" value="submit" class="btn btn-info btn-block">Sign Up</button>

                            </div>
                        </form>



                        <div class="text-center mb-2">
                            Already have an account ? <br>
                           <a href="../login/login.php"> Click here to Sign In</a>
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