<?php
include './class/include.php';
?>


<!DOCTYPE html>
<html lang="en">


    <head>


        <meta charset="UTF-8">


        <title>MPBC.lk || Services</title>


        <!-- responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">	
        <link rel="stylesheet" href="assets/css/imp.css">
        <link rel="stylesheet" href="assets/css/custom-animate.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">

        <link href="https://fonts.googleapis.com/css2?family=Black+And+White+Picture&family=Lobster&display=swap&family=Courgette&display=swap" rel="stylesheet"> 
        
        <link rel="stylesheet" href="assets/css/color.css">
        <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">


        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">



    </head>


    <body>


        <div class="boxed_wrapper">


            <div class="preloader"></div>


            <!-- main header -->
            <?php include './header.php'; ?>


            <!--Start breadcrumb area-->     
            <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-service.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="inner-content clearfix">
                                <div class="title">
                                    <br/><br/><h1>Services</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active" style="color: #fd4f4f">Services</li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End breadcrumb area-->


            <!--Start Service Style2 Area-->
            <section class="service-style2-area service-page2">
                <div class="container service-box">

                    <div class="row">
                        <?php
                        $SERVICE = new Service(NULL);
                        foreach ($SERVICE->all() as $service) {
                            ?>
                            <!--Start Single Service Style2-->
                            <div class="col-xl-4 col-lg-4">
                                <a href="view-service.php?id=<?php echo $service['id']; ?>">
                                <div class="single-service-style2">
                                    <div class="img-holder">
                                        <img src="upload/service/<?php echo $service['image_name']; ?>" alt="Awesome Image">
                                        <div class="static-content">
                                            <div>
                                                <h3 class="text-center"><?php echo $service['title'] ?></h3>
                                            </div>                                       
                                        </div>
                                        <div class="overlay-content">
                                            <div class="inner-content">
                                                <div class="icon"><span class="flaticon-building"></span></div>
                                                <div class="text-holder">
                                                    <div>
                                                        <h3 class="text-center" style="color: #fd4f4f">
                                                            <?php echo $service['title'] ?>
                                                        </h3>
                                                    </div>
                                                    <p><?php echo substr($service['description'], 0, 200) ?>...</p>      
                                                    <div class="read-more-button float-right" style="color: #fd4f4f">
                                                        Read More <span class="flaticon-next"></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                </a>
                            </div>
                            <!--End Single Service Style2-->
                        <?php } ?>          
                    </div>
                </div>    
            </section>
            <!--End Service Style2 Area-->


            <!--Start footer area-->  
            <?php include './footer.php'; ?>  
            <!--End footer area-->


        </div> 


        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="icon-angle"></span>
        </button>



        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/aos.js"></script>
        <script src="assets/js/appear.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/isotope.js"></script>
        <script src="assets/js/jquery.bootstrap-touchspin.js"></script>
        <script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.enllax.min.js"></script>
        <script src="assets/js/jquery.fancybox.js"></script>
        <script src="assets/js/scrollbar.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.paroller.min.js"></script>
        <script src="assets/js/jquery.polyglot.language.switcher.js"></script>
        <script src="assets/js/map-script.js"></script>
        <script src="assets/js/nouislider.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/timePicker.js"></script>   
        <script src="assets/js/validation.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/slick.js"></script>
        <script src="assets/js/lazyload.js"></script>
        <script src="assets/js/jQuery.style.switcher.min.js"></script>


        <!-- thm custom script -->
        <script src="assets/js/custom.js"></script>


    </body>


</html>