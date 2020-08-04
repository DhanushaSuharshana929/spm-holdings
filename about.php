<?php 
include './class/include.php';

$ABOUT_PAGE =  new Page(2);

?>


<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <title>SAM Holdings || About Us</title>

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
                                    <h1>About Us</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="index-2.html">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active">About Us</li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End breadcrumb area-->

            <!--Start About Style1 Area-->
            <section class="about-style1-area bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="about-style1-image-box clearfix">
                                <div class="shape zoom-fade"></div>
                                <div class="image-box1">
                                    <img src="assets/images/about/about-1.jpg" alt="Awesome Image">
                                </div>
                                <div class="image-box2">
                                    <img src="assets/images/about/about-2.jpg" alt="Awesome Image">
                                </div>
                                <div class="video-holder-box" style="background-image:url(assets/images/about/video-gallery.jpg);">
                                    <div class="icon">
                                        <div class="inner">
                                            <a class="video-popup wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms" title="RinBuild Video Gallery" href="https://www.youtube.com/watch?v=p25gICT63ek">
                                                <span class="flaticon-play-button"></span>
                                            </a>
                                        </div>   
                                    </div>
                                </div>
                            </div>     
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <div class="about-style1-text-box">
                                <div class="title">
                                    <p>WELCOME</p>
                                    <h1><span>SPM Holdings</span>Think <b>big</b> <br> <b>Think</b> different<br> </h1>
                                </div>
                                <div class="inner-contant">
                                    <p><?php echo $ABOUT_PAGE->description ?></p>
                                    <div class="signature-box">
                                        <img src="assets/images/resources/signature.png" alt="Signature">    
                                    </div>
                                </div>    
                            </div>  
                        </div>

                    </div> 
                </div>    
            </section>
            <!--End About Style1 Area-->

            <!--Start Faq Content Area-->
<!--            <section class="faq-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="faq-content-box">
                                <div class="sec-title">
                                    <p>In order to acquire our services please kindly send us your inquiry of interest. We shall revert back immediately.
                                    </p>
                                    <div class="big-title black-clr"><h1>DO BUSINESS
                                            WITH US! </h1></div>
                                </div>
                                <div class="accordion-box">
                                    Start single accordion box
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn active">
                                            <h4>Our Value</h4></div>
                                        <div class="accord-content collapsed">

                                            <h6>Our values are based on principles that are very dear to us.</h6><br/>
                                            <p>We take our clients requirements very seriously and incorporate the following values into the mindsets of our consultants and partners alike.</p>
                                        </div>
                                    </div>
                                    End single accordion box
                                    Start single accordion box
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <h4>Our Mission</h4>
                                        </div>
                                        <div class="accord-content">
                                            <p>Creation of new industry standard through the best 
                                                practices by fullfilling our clients requirements</p>
                                        </div>
                                    </div>
                                    End single accordion box
                                    Start single accordion box
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn">
                                            <h4>Our Vision</h4>
                                        </div>
                                        <div class="accord-content">
                                            <p>Be the game changer</p>
                                        </div>
                                    </div>
                                    End single accordion box
                                    
                                </div>    
                            </div>  
                        </div>

                        <div class="col-xl-6">
                            <div class="faq-image-box" data-aos="fade-left" data-aos-duration="0" data-aos-delay="0">
                                <img src="assets/images/resources/faq-image.jpg" alt="Awesome Image"> 
                            </div>    
                        </div>

                    </div>
                </div>
            </section>-->
            <!--End Faq Content Area-->



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

    <!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:16:50 GMT -->
</html>