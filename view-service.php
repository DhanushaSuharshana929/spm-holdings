<?php
include './class/include.php';

$id = '';
$id = $_GET['id'];
$SERVICE = new Service($id);
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/portfolio-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:17:11 GMT -->
    <head>
        <meta charset="UTF-8">
        <title>SPM Holdings || Service Details</title>

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

        <link rel="stylesheet" href="assets/css/color.css">
        <link href="assets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="assets/images/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="assets/images/favicon/favicon-16x16.png" sizes="16x16">

        <!-- Fixing Internet Explorer-->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="assets/js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="boxed_wrapper">

            <div class="preloader"></div>


            <!-- main header -->
            <?php include './header.php'; ?>

            <!--Start breadcrumb area-->     
            <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="inner-content clearfix">
                                <div class="title">
                                    <h1>View Service</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active">Service</li>
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
                                                    foreach ($SERVICE_OBJ->all() as $services) {
                                                        ?>
                                                        <li><a href="view-service.php?id=<?= $services['id'] ?>"><?= $services['title'] ?></a></li>

                                                    <?php } ?>
                                                </ul>
                                                <div class="more-categories">
                                                    <a href="#"></span>View all Services</a>
                                                </div>
                                            </div>

                                        </div>    
                                    </div>
                                    <!--                                    <div class="col-xl-4">
                                                                            <div class="slider-pager">
                                                                                <ul class="thumb-box">
                                    <                                  </div>-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End Portfolio Single Style1 area-->

            <!--Start Portfolio Single Content Area-->
            <div class="portfolio-single-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
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


            <!--Start Related Portfolio Area-->
            <section class="latest-portfolio-area related-portfolio">
                <div class="container">
                    <div class="sec-title text-center">
                        <p>Our Global Work Industries!</p>
                        <div class="big-title black-clr"><h1>Related Portfolio</h1></div>
                    </div>
                    <div class="row">
                        <!--Start Single portfolio Style1-->
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <div class="inner-box">
                                        <img src="assets/images/portfolio/portfolio-v1-1.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="inner"> 
                                                    <div class="zoom-button">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="assets/images/portfolio/portfolio-v1-1.jpg">
                                                            <span class="flaticon-plus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <span class="tag">Building</span>
                                        <h5><a href="#">Building A Sports City</a></h5>
                                        <p><span class="flaticon-location-pin"></span>KA-62/1, Kuril, Progoti</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single portfolio Style1-->
                        <!--Start Single portfolio Style1-->
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <div class="inner-box">
                                        <img src="assets/images/portfolio/portfolio-v1-2.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="inner"> 
                                                    <div class="zoom-button">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="assets/images/portfolio/portfolio-v1-2.jpg">
                                                            <span class="flaticon-plus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <span class="tag">Building</span>
                                        <h5><a href="#">Building A Sports City</a></h5>
                                        <p><span class="flaticon-location-pin"></span>KA-62/1, Kuril, Progoti</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single portfolio Style1-->
                        <!--Start Single portfolio Style1-->
                        <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <div class="inner-box">
                                        <img src="assets/images/portfolio/portfolio-v1-3.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="inner"> 
                                                    <div class="zoom-button">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="assets/images/portfolio/portfolio-v1-3.jpg">
                                                            <span class="flaticon-plus"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <span class="tag">Building</span>
                                        <h5><a href="#">Building A Sports City</a></h5>
                                        <p><span class="flaticon-location-pin"></span>KA-62/1, Kuril, Progoti</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single portfolio Style1--> 
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="all-portfolio-button text-center">
                                <a class="btn-one" href="#">Our All Portfolio<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>   
            <!--End Related Portfolio Area--> 

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

    <!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/portfolio-single-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:17:54 GMT -->
</html>