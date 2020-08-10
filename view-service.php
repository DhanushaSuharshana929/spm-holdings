<?php
include './class/include.php';

$id = '';
$id = $_GET['id'];
$SERVICE = new Service($id);
?>


<!DOCTYPE html>
<html lang="en">


    <head>


        <meta charset="UTF-8">


        <title>MPBC.lk || Services || Service Details</title>


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
                                   <br/><br/> <h1><?php echo $SERVICE->title ?></h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active" style="color: #fd4f4f"><?php echo $SERVICE->title ?></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End breadcrumb area-->

            
            <!--Start Portfolio Single Style1 area-->
            <section class="portfolio-single-style1-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-portfolio-slider">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <ul class="slider-content clearfix bxslider">
                                            <?php
                                            $SERVICE_PHOTO = new ServicePhoto(null);
                                            foreach ($SERVICE_PHOTO->getServicePhotosById($SERVICE->id) as $service_photo) {
                                                ?>
                                                <li>
                                                    <div class="single-portfolio-slide clearfix">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                                <div class="big-image-box">
                                                                    <img src="upload/service/gallery/<?php echo $service_photo['image_name'] ?>" alt="Awesome Image">
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                </li>
                                            <?php } ?>
                                        </ul> 

                                        
                                        <!--Start Portfolio Single Content Area-->
                                        <div class="portfolio-single-content-area" style="padding-top: 15px;">
                                            <div class="container">
                                                <div class="row">
                                                    <div>
                                                        <div class="product-tab-box tabs-box">
                                                            <ul class="tab-btns tab-buttons clearfix">
                                                                <li data-tab="#desc" class="tab-btn active-btn"><span>description</span></li>
                                                            </ul>
                                                            <div class="tabs-content">
                                                                <div class="tab active-tab" id="desc">
                                                                    <div class="product-details-content">
                                                                        <div class="desc-content-box">
                                                                            <p><?php echo $SERVICE->description ?></p>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                            </div>      
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>    
                                        </div>
                                        <!--End Portfolio Single Content Area-->

                                    </div>
                                    
                                    
                                    <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12">
                                        <div class="sidebar-wrapper">
                                            <!--Start sidebar categories Box-->
                                            <div class="sidebar-categories-box wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                                                <div class="categories-title">
                                                    <h3>Company Services</h3>
                                                </div>
                                                <ul class="categories clearfix">
                                                    <?php
                                                    $SERVICE_OBJ = new Service(null);
                                                    foreach ($SERVICE_OBJ->all() as $key => $services) {
                                                        if ($key < 11) {
                                                            ?>
                                                            <li><a href="view-service.php?id=<?= $services['id'] ?>"><?= $services['title'] ?></a></li>

                                                        <?php }
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="more-categories">
                                                    <a href="services.php"></span>View all Services</a>
                                                </div>
                                            </div>
                                        </div>    
                                    </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Portfolio Single Style1 area-->


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
        <script src="assets/js/jquery.bxslider.min.js"></script>
        <script src="assets/js/jQuery.style.switcher.min.js"></script>
        
        
        <!-- thm custom script -->
        <script src="assets/js/custom.js"></script>


    </body>

    
</html>