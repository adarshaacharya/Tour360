<?php 
session_start();
include '../dbConfig.php';
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Mt. Everest Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="icon" type="image/png" href="../../img/favicon.ico" />

    <!--Normalise CSS-->
    <link rel="stylesheet" type="text/css" href="../../libs/normalize.css">

    <!-- Font awesome 5.9-->
    <link rel="stylesheet" href="../../libs/fontawesome/css/all.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="../../libs/bootstrap.min.css">

    <!--Material Design for Bootstrap -->
    <link rel="stylesheet" href="../../libs/mdb.min.css">

    <link rel="stylesheet" href="../../libs/carousel/owl.carousel.css">

    <!--Style css-->
    <link rel="stylesheet" type="text/css" media="screen" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/homestyle.css">

    <!--Media Query -->
    <link rel="stylesheet" type="text/css" href="../../css/responsive.css">

    <style>
        .carousel-item {
            background-size: cover;
        }

        #more {
            display: none;
        }

        .span4 img {
            margin-right: 10px;
        }

        .span4 .img-left {
            float: left;
        }

        .span4 .img-right {
            float: right;
        }

        .aeroplane {
            height: 300px;
            width: 300px;
        }
     
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Project 360</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Home</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Profile <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>



    <section id="cover-video" class="px-5">
        <!--Carousel Wrapper-->
        <div id="video-carousel-example" class="carousel slide carousel-fade" data-ride="carousel">

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#video-carousel-example" data-slide-to="0" class="active"></li>
                <!-- <li data-target="#video-carousel-example" data-slide-to="1"></li>
                <li data-target="#video-carousel-example" data-slide-to="2"></li> -->
            </ol>

            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active" style="height: 300px; width : 100%; ">
                    <video class="video-fluid" style="height: 100%; width : 100%; object-fit: cover;" autoplay loop
                        muted>
                        <source src="../../video/My Video2.mp4" type="video/mp4" />
                    </video>
                </div>


            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#video-carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#video-carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--Carousel Wrapper-->


    </section>









    

    <section id="profile-information" class="shadow-lg p-3 mx-5 rounded">
        <div class="container">
            <div class="row my-2">
                <div class="col-lg-8 order-lg-2">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Information</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#info" data-toggle="tab" class="nav-link">Requirements</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#flights" data-toggle="tab" class="nav-link">Flights</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#hotels" data-toggle="tab" class="nav-link">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#guides" data-toggle="tab" class="nav-link">Guides</a>
                        </li>
                        <li class="nav-item">
                            <a href="" data-target="#rating" data-toggle="tab" class="nav-link">Rating</a>
                        </li>


                    </ul>
                    <div class="tab-content py-4">
                        <div class="tab-pane active" id="profile">
                            <h3 class="mb-3 text-muted">Mt. Everest</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4>About</h4>
                                    <br>
                                    <p class="text-justify">
                                        Mount Everest, known in Nepali as Sagarmatha (सगरमाथा), in Tibetan as
                                        Chomolungma (ཇོ་མོ་གླང་མ) and in Chinese as Zhumulangma (珠穆朗玛), is Earth's
                                        highest mountain above sea level, located in the Mahalangur Himal sub-range of
                                        the Himalayas. The international border between Nepal (Province No. 1) and China
                                        (Tibet Autonomous Region) runs across its summit point.
                                    </p>
                                    <hr>
                                    <h4>Things To Expect</h4> <br>


                                    <p>
                                        <li>Very Exciting Adventure with alot of challanges.</li>
                                        <li>Direct Interaction with nature</li>
                                        <li>Beautiful Scnery but with alot of snow and cold weather</li>
                                        <span id="dots">...</span>

                                        <span id="more">
                                            <li>High Expenditure</li>
                                            <li>Experienced Guides to take you with them in the adventure.</li>
                                            <li>Less Pollution and more nature.</li>

                                        </span>
                                    </p>
                                    <u>
                                        <a onclick="myFunction()" class="text-primary" id="readMore">Read more</a>
                                    </u>



                                </div>


                                <div class="col-md-6">
                                    <h5>Related</h5>
                                    <br>
                                    <a href="#" class="badge badge-dark badge-pill">VisitNepal2020</a>
                                    <a href="#" class="badge badge-dark badge-pill">Tallest Mountain</a>
                                    <a href="#" class="badge badge-dark badge-pill">Adventure</a>
                                    <a href="#" class="badge badge-dark badge-pill">Mountain Climbing</a>

                                    <hr>
                                    <span class="badge badge-primary"><i class="fa fa-user"></i> 1000 Climbers Yearly</span>
                                    <span class="badge badge-success"><i class="fa fa-cog"></i> over 700 Guides</span>
                                    
                                </div>


                                <div class="col-md-12">
                                    <hr>
                                    <h4 class="mt-4"><span class="fa fa-clock-o ion-clock float-right"></span> Recent
                                        Activity</h4><br>
                                    <table class="table table-sm table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>9159</strong> sucessful climbs by
                                                    <strong>`5294 people.`</strong> in 2018.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>295</strong>deaths in 2018
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <strong>Kami Rita Sherpa</strong>holds recod of climbing everest for 
                                                    <strong>24 times.</strong>
                                                </td>
                                            </tr>
        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        


                            <div class="tab-pane" id="info">
                                <h3 class="mb-3 text-muted">Your Requirements</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-md-6">
                                        <br>
                                        <p class="text-justify">
                                      
                                                <li>Requires Tourist Visa to Nepal</li><br>
                                                <li>Payment of visa must be dont to the government</li><br>
                                                <li>You must have climbing permit from Nepal's government. It costs $11,000</li><br>
                                                <li>You need to pay certain amount of money for Expedition. From $32000 to $100,000</li><br>
                                                <li>Perticular Gears is must. Jackets, boots, harneses etc must be managed.</li><br>
                                                <li>You must take a bottlede oxygen to deal whin thin air in the horizon.</li><br>
                                                
                                            
                                            </p>
                                        <hr>   
    
                                    </div>
                                </div>
                            </div>



                        <!---NEW TABS-->

                        <div class="tab-pane" id="flights">
                            <div class="block mb-5">
                                <div class="row">
                                    <div class="span4">
                                        <img class="aeroplane img-left" src="../../img/profile/flights/buddha.jpeg" />
                                        <div class="content-heading">
                                            <h3>Buddha Airlines </h3>
                                            <hr>
                                        </div>
                                        <p>Book your flights with Buddha Air, best airline in Nepal. Get cheapest flights to Nepal and top deals on international flights to Varanasi and Kolkata from different parts of Nepal.</p>

                                        <p>Buddha Air is a number one airlines in Nepal. It operates domestic flights within Nepal, serving mainly large towns and cities in Nepal, linking Kathmandu with other cities</p>


                                        <a href="" class="btn btn-dark" data-toggle="modal"
                                            data-target="#bookingForm">Book Now</a>

                                        <i class="fas fa-check-circle text-success"></i> <span
                                            class="text-success">Available</span>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="block mb-5">
                                <div class="row">
                                    <div class="span4">
                                        <img class="aeroplane img-left" src="../../img/profile/flights/yeti.jpg" />
                                        <div class="content-heading">
                                            <h3>Yeti Airlines </h3>
                                            <hr>
                                        </div>
                                        <p>Book your flights with Buddha Air, best airline in Nepal. Get cheapest flights to Nepal and top deals on international flights to Varanasi and Kolkata from different parts of Nepal.</p>

                                      
                                        <p>Buddha Air is a number one airlines in Nepal. It operates domestic flights within Nepal, serving mainly large towns and cities in Nepal, linking Kathmandu with other cities</p>



                                        <a href="" class="btn btn-light" data-toggle="modal"
                                            data-target="#bookingForm">Book Now</a>

                                        <i class="fas fa-check-circle text-danger"></i> <span
                                            class="text-danger">Unavailable</span>

                                    </div>




                                </div>
                            </div>


                            <hr>


                            <div class="block mb-5">
                                <div class="row">
                                    <div class="span4">
                                        <img class="aeroplane img-left" src="../../img/profile/flights/nac.jpg" />
                                        <div class="content-heading">
                                            <h3>Nepal Airlines </h3>
                                            <hr>
                                        </div>
                                        <p>Book your flights with Buddha Air, best airline in Nepal. Get cheapest flights to Nepal and top deals on international flights to Varanasi and Kolkata from different parts of Nepal.</p>

                                      
                                        
                                            <p>Buddha Air is a number one airlines in Nepal. It operates domestic flights within Nepal, serving mainly large towns and cities in Nepal, linking Kathmandu with other cities</p>

                                        <a href="" class="btn btn-light" data-toggle="modal"
                                            data-target="#bookingForm">Book Now</a>

                                        <i class="fas fa-check-circle text-danger"></i> <span
                                            class="text-danger">Unavailable</span>

                                    </div>
                                </div>
                            </div>




                            <!--FORM MODAL-->
                            <div class="modal fade" id="bookingForm" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">


                                        <div class="modal-header text-center">
                                            <h4 class="modal-title w-100 font-weight-bold">Book Flight</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>


                                        <div class="modal-body mx-3">
                                            <div class="md-form mb-5">
                                                <i class="fas fa-user prefix grey-text"></i>
                                                <input type="text" id="orangeForm-name" class="form-control validate">
                                                <label data-error="wrong" data-success="right"
                                                    for="orangeForm-name">Your name</label>
                                            </div>


                                            <div class="md-form mb-5">
                                                <i class="fas fa-envelope prefix grey-text"></i>
                                                <input type="email" id="orangeForm-email" class="form-control validate">
                                                <label data-error="wrong" data-success="right"
                                                    for="orangeForm-email">Your email</label>
                                            </div>

                                            <div class="md-form mb-4">
                                                <i class="fas fa-phone prefix grey-text"></i>
                                                <input type="number" id="orangeForm-pass" class="form-control validate">
                                                <label data-error="wrong" data-success="right"
                                                    for="orangeForm-pass">Your phone no.</label>
                                            </div>



                                            <div class="md-form mb-5">
                                                <i class="fas fa-people-carry prefix grey-text"></i>
                                                <input type="number" id="orangeForm-name" class="form-control validate">
                                                <label data-error="wrong" data-success="right"
                                                    for="orangeForm-name">Number of People</label>
                                            </div>



                                        </div>

                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-deep-orange">Book Now</button>
                                        </div>

                                    </div>

                                </div>
                            </div>




                        </div>


                        <!---NEW TABS-->
                        

                        <div class="tab-pane" id="hotels">
                            <?php 
                            $sql="select * from hotel";
                            $result=mysqli_query($conn,$sql);
                            $count=0;
                            foreach ($result as $key => $value) 
                            {
                                $count++;

                         ?>
                            <div class="block mb-5">
                                <div class="row">
                                    <div class="span4">
                                        <img class="img-left aeroplane" src="../../img/profile/hotels/hotel-01.jpg" />
                                        <div class="content-heading">
                                            <h3><?php echo $value['name']; ?></h3>
                                            <hr>
                                        </div>
                                        <p><?php echo $value['description'] ?></p>


                                        <?php 
                                            if (isset($_SESSION['login'])) {
                                                if ($_SESSION['mode']=='user') {
                                        ?>
                                        <a href=""  class="btn btn-dark" data-toggle="modal"
                                            data-target="#bookHotel<?php echo $count;?>">Book Now</a>
                                        <?php 
                                                }
                                            }
                                            else{



                                        ?>
                                        <a href="../login/login.php">Log In To Book</a>
                                        <?php } ?>
                                        <?php 
                                                
                                                if($value['availabe']==1){
                                             ?>
                                        <i class="fas fa-check-circle text-success"></i> <span
                                            class="text-success">Available</span>
                                            <?php 
                                            }
                                            else{
                                             ?>
                                         <i class="fas fa-check-circle text-danger"></i> <span
                                            class="text-danger">Unavailable</span>
                                            <?php } ?>   
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <?php 
                                }
                             ?>
                             <?php 
                             $count=0;
                            foreach ($result as $key => $value) 
                            {
                                
                                $count++;
                                    
                                

                            ?>
                            <!--FORM MODAL-->
                            <form action="book.php" method="post">
                                <div class="modal fade" id="bookHotel<?php echo $count;?>" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">


                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold">Book Hotel</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>


                                            <div class="modal-body mx-3">
                                                <div class="md-form mb-5">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <input name="u_name" type="text" id="orangeForm-name" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-name">Your name</label>
                                                </div>


                                                <div class="md-form mb-5">
                                                    <i class="fas fa-envelope prefix grey-text"></i>
                                                    <input name="u_email" type="email" id="orangeForm-email" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-email">Your email</label>
                                                </div>

                                                <div class="md-form mb-4">
                                                    <i class="fas fa-phone prefix grey-text"></i>
                                                    <input name="phone" type="number" id="orangeForm-pass" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-pass">Your phone no.</label>
                                                </div>



                                                <div class="md-form mb-5">
                                                    <i class="fas fa-people-carry prefix grey-text"></i>
                                                    <input name="noPeople" type="number" id="orangeForm-name" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-name">Number of People</label>
                                                </div>



                                            </div>
                                            <input type="hidden" name="name" value="<?php echo $value['name']; ?>">
                                            <input type="hidden" name="<?php echo $value['name']; ?>" value=<?php echo $value['id']; ?>>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" name="submit1" value="submit" class="btn btn-deep-orange">Book Now</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </form>
                            <?php 
                                }
                          
                        ?>
                        </div>


                        









                        <!---NEW TABS-->
                        
                        <div class="tab-pane" id="guides">
                            <?php 
                            $sql="select * from guide";
                            $result=mysqli_query($conn,$sql);
                            $count=0;
                            foreach ($result as $key => $value) {
                                $count++;

                         ?>
                            <div class="block mb-5">
                                <div class="row">
                                    <div class="span4">
                                        <img class="aeroplane img-left" src="../../img/profile/guide/person1.jpg" />
                                        <div class="content-heading">
                                            <h3><?php echo $value['name']; ?> </h3>
                                            <hr>
                                        </div>

                                        <p><?php echo $value['experience']; ?></p>
                                        <p><?php echo $value['skill']; ?></p>

                                        <?php 
                                            if (isset($_SESSION['login'])) {
                                                if ($_SESSION['mode']=='user') {
                                        ?>
                                        <a href="" class="btn btn-dark" data-toggle="modal"
                                            data-target="#bookGuide<?php echo $count;?>">Book Now</a>
                                        <?php 
                                                }
                                            }
                                            else{



                                        ?>
                                        <a href="../login/login.php">Log In To Book</a>
                                        <?php } ?>
                                            <?php 
                                                if($value['available']==1){
                                             ?>
                                        <i class="fas fa-check-circle text-success"></i> <span
                                            class="text-success">Available</span>
                                            <?php 
                                            }
                                            else{
                                             ?>
                                         <i class="fas fa-check-circle text-danger"></i> <span
                                            class="text-danger">Unavailable</span>
                                            <?php } ?>   
                                    </div>
                                </div>
                            </div>

                            <hr>
                           <?php } ?>

                           <?php 
                            $count=0;
                            foreach ($result as $key => $value) {
                                $count++;

                         ?>


                            <!--FORM MODAL-->
                            <form action="book1.php" method="post">
                                <div class="modal fade" id="bookGuide<?php echo $count;?>" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">


                                            <div class="modal-header text-center">
                                                <h4 class="modal-title w-100 font-weight-bold">Book Guide</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>


                                            <div class="modal-body mx-3">
                                                <div class="md-form mb-5">
                                                    <i class="fas fa-user prefix grey-text"></i>
                                                    <input name="u_name" type="text" id="orangeForm-name" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-name">Your name</label>
                                                </div>


                                                <div class="md-form mb-5">
                                                    <i class="fas fa-envelope prefix grey-text"></i>
                                                    <input name="u_email" type="email" id="orangeForm-email" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-email">Your email</label>
                                                </div>

                                                <div class="md-form mb-4">
                                                    <i class="fas fa-phone prefix grey-text"></i>
                                                    <input name="phone" type="number" id="orangeForm-pass" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-pass">Your phone no.</label>
                                                </div>



                                                <div class="md-form mb-5">
                                                    <i class="fas fa-people-carry prefix grey-text"></i>
                                                    <input name="noPeople" type="number" id="orangeForm-name" class="form-control validate">
                                                    <label data-error="wrong" data-success="right"
                                                        for="orangeForm-name">Number of People</label>
                                                </div>



                                            </div>
                                            <input type="hidden" name="name" value="<?php echo $value['name']; ?>">
                                            <input type="hidden" name="<?php echo $value['name']; ?>" value=<?php echo $value['id']; ?>>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" name="submit2" value="submit" class="btn btn-deep-orange">Book Now</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </form>
                        <?php } ?>

                        </div>








                        <!---NEW TABS-->
                        
                        <div class="tab-pane" id="rating">
                            <?php 
                                $sql="SELECT * from rating where name='Mt.Everest'";
                                $result=mysqli_query($conn,$sql);
                                foreach ($result as $key => $value) {
                                    
                             ?>
                             Rating:
                            <?php echo $value['rating']; ?><br>
                            Review:
                            <?php echo $value['feedback']; ?><br>
                            <?php } ?>
                           <form action="rating.php" method="post">
                               My Rating:
                               <select name="rating">
                                   <option value="0">0</option>
                                   <option value="1">1</option>
                                   <option value="2">2</option>
                                   <option value="3">3</option>
                                   <option value="4">4</option>
                                   <option value="5">5</option>
                               </select>
                               <label for="">Review</label>
                                    <input name="review" type="text" class="form-control">
                                    

                                <button type="submit" name="submit" value="submit" class="btn btn-primary mt-2">Submit</button>
                           </form>
                           
                        </div>




                    </div>
                </div>
                <div class="col-lg-4 order-lg-1 text-center">
                    <img src="../../img/profile/everest.webp" class="mx-auto img-fluid img-circle d-block" alt="avatar">
                    <br>
                    <a target="_blank" class="btn btn-info btn-block" href="./360Images/main-page.php">View 360° Image</a>
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
    <script type="text/javascript" src="../../libs/mdb.min.js"></script>


    <!--Popper JS-->
    <script src="../../libs/popper.min.js"></script>

    <script src="../../libs/carousel/owl.carousel.min.js"></script>


    <!--Custom JS -->
    <script src="../../js/custom.js"></script>
 

    <!--Extra JS Libraries-->
    <script src="../../js/hoverIntent.js"></script>
    <script src="../../js/superfish.min.js"></script>
    <script src="../../js/jquery.ajaxchimp.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/jquery.nice-select.min.js"></script>




    <script>



        $(function () {

            $("#footer").load("../../vendor/footer.php");
        });

        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>

</body>

</html>

