<?php
include './class/include.php';

$ABOUT_INDEX = new Page(1);

?>


<!DOCTYPE html>
<html lang="en">


    <head>

        
        <meta charset="UTF-8">

        
        <title>SPM Holdings || Home</title>

        
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

            
            <!-- Start Main Slider -->
            <?php include './slider.php'; ?>
            <!-- End Main Slider -->

            
            <!--Start About Style1 Area-->
            <section class="about-style1-area">
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
<!--                                                <span class="flaticon-play-button"></span>-->
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
                                    <p><?php echo $ABOUT_INDEX->description ?></p>
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

            
            <!--Start Service Style2 Area-->
            <section class="service-style2-area">
                <div class="layer-outer" style="background-image:url(assets/images/parallax-background/service-bg.jpg);"></div>
                <div class="container service-box">
                    <div class="sec-title text-center">
                        <p style="font-size: 19px;color: #ffe1e1; font-weight: 330"><b>We position our clients at the forefront of their field by advancing 
                                an agenda.</b></p>
                        <div class="big-title"><h1>Company Services</h1></div>
                    </div>
                    <div class="auto-container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="rinbuild-carousel service-carousel owl-carousel owl-theme owl-nav-style-one" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout":6000, "smartSpeed":500, "responsive":{ "0":{"items": "1"}, "768":{"items": "2"}, "1000":{"items": "3" }}}'>
                                    <!--Start Single Service Style3-->
                                    <div class="single-service-style2">
                                        <div class="img-holder">
                                            <img src="assets/images/services/service-1.jpg" alt="Awesome Image">
                                            <div class="static-content">
                                                <div class="title">
                                                    <h3><a href="#">Mergers and Acquisition</a></h3>
                                                </div>
                                                
                                            </div>
                                            <div class="overlay-content">
                                                <div class="inner-content">
                                                    <div class="icon"><span class="flaticon-building"></span></div>
                                                    <div class="text-holder">
                                                        <div class="title">
                                                            <h3><a href="#">Mergers and Acquisition</a></h3>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Nam nec est arcu dolor psum dolor sit amet.</p>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="single-service-style2">
                                        <div class="img-holder">
                                            <img src="assets/images/services/service-2.jpg" alt="Awesome Image">
                                            <div class="static-content">
                                                <div class="title">
                                                    <h3><a href="#">Legal Services</a></h3>
                                                </div>
                                                
                                            </div>
                                            <div class="overlay-content">
                                                <div class="inner-content">
                                                    <div class="icon"><span class="flaticon-building"></span></div>
                                                    <div class="text-holder">
                                                        <div class="title">
                                                            <h3><a href="#">Legal Services</a></h3>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Nam nec est arcu dolor psum dolor sit amet.</p>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="single-service-style2">
                                        <div class="img-holder">
                                            <img src="assets/images/services/service-3.jpg" alt="Awesome Image">
                                            <div class="static-content">
                                                <div class="title">
                                                    <h3><a href="#">Human Capital Skill Inventory Management</a></h3>
                                                </div>
                                               
                                            </div>
                                            <div class="overlay-content">
                                                <div class="inner-content">
                                                    <div class="icon"><span class="flaticon-building"></span></div>
                                                    <div class="text-holder">
                                                        <div class="title">
                                                            <h3><a href="#">Human Capital Skill Inventory Management</a></h3>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Nam nec est arcu dolor psum dolor sit amet.</p>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single-service-style2">
                                        <div class="img-holder">
                                            <img src="assets/images/services/service-4.jpg" alt="Awesome Image">
                                            <div class="static-content">
                                                <div class="title">
                                                    <h3><a href="#">Finance mechanisms</a></h3>
                                                </div>
                                               
                                            </div>
                                            <div class="overlay-content">
                                                <div class="inner-content">
                                                    <div class="icon"><span class="flaticon-building"></span></div>
                                                    <div class="text-holder">
                                                        <div class="title">
                                                            <h3><a href="#">Finance mechanisms</a></h3>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Nam nec est arcu dolor psum dolor sit amet.</p>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="single-service-style2">
                                        <div class="img-holder">
                                            <img src="assets/images/services/service-5.jpg" alt="Awesome Image">
                                            <div class="static-content">
                                                <div class="title">
                                                    <h3><a href="#">Marketing and branding finance</a></h3>
                                                </div>
                                                
                                            </div>
                                            <div class="overlay-content">
                                                <div class="inner-content">
                                                    <div class="icon"><span class="flaticon-building"></span></div>
                                                    <div class="text-holder">
                                                        <div class="title">
                                                            <h3><a href="#">Marketing and branding finance</a></h3>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. Nam nec est arcu dolor psum dolor sit amet.</p>      
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div> 
                            </div>    
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="all-service-button text-center">
                                <a class="btn-one" href="#">Our All Services<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>
            <!--End Service Style2 Area--> 


            <!--Start Service Style3 Area-->
            <section class="service-style3-area">
                <div class="container">
                    <div class="sec-title">
                        <p>Many organizations realize the benefits of forming work teams</p>
                        <div class="big-title black-clr"><h1>Our Team</h1></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="rinbuild-carousel service-carousel owl-carousel owl-theme owl-nav-style-one" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout":6000, "smartSpeed":500, "responsive":{ "0":{"items": "1"}, "768":{"items": "3"}, "1000":{"items": "4" }}}'>
                                <!--Start Single Service Style3-->
                                <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-v1-1.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="title-holder">
                                            <div class="inner">
                                                <div class="left">
                                                    <h3>Shaveen Hiraj</h3>
                                                    <div class="social-links">
                                                        <ul class="social-links-style1">
                                                            <li><a>Director</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style3-->

                                <!--Start Single Service Style3-->
                                <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-v1-2.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="title-holder">
                                            <div class="inner">
                                                <div class="left">
                                                    <h3>Sanjaya Senaratne</h3>
                                                    <div class="social-links">
                                                        <ul class="social-links-style1">
                                                            <li><a>Chief Executive Officer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style3-->

                                <!--Start Single Service Style3-->
                                <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-v1-3.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="title-holder">
                                            <div class="inner">
                                                <div class="left">
                                                    <h3>Amila Sugathapala</h3>
                                                    <div class="social-links">
                                                        <ul class="social-links-style1">
                                                            <li><a>Finance</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style3-->

                                <!--Start Single Service Style3-->
                                <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-v1-4.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="title-holder">
                                            <div class="inner">
                                                <div class="left">
                                                    <h3>Thanuja Weeratne</h3>
                                                    <div class="social-links">
                                                        <ul class="social-links-style1">
                                                            <li><a>Management</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style3-->

                                <!--Start Single Service Style3-->
                                <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-v1-5.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="title-holder">
                                            <div class="inner">
                                                <div class="left">
                                                    <h3>Denzil Perera</h3>
                                                    <div class="social-links">
                                                        <ul class="social-links-style1">
                                                            <li><a>Marketing</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style3-->

                                <!--Start Single Service Style3-->
                                <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-v1-6.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="title-holder">
                                            <div class="inner">
                                                <div class="left">
                                                    <h3>
                                                        Cloude wickramasinghe</h3>
                                                    <div class="social-links">
                                                        <ul class="social-links-style1">
                                                            <li><a>Mechanical Engineer</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style3-->

                                <!--Start Single Service Style3-->
                                <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                    <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="img-holder">
                                            <img src="assets/images/team/team-v1-7.jpg" alt="Awesome Image">
                                        </div>
                                        <div class="title-holder">
                                            <div class="inner">
                                                <div class="left">
                                                    <h3>Pathma Roshini</h3>
                                                    <div class="social-links">
                                                        <ul class="social-links-style1">
                                                            <li><a>Quantity Survey</a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>    
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Service Style3-->


                            </div> 
                        </div>    
                    </div>
                </div>    
            </section>
            <!--End Service Style3 Area-->

            
            <!--Start Latest Portfolio Area-->
            <section class="latest-portfolio-area pdtop120">
                <div class="container">
                    <div class="sec-title text-center">
                        <p>Learn something more from our blog</p>
                        <div class="big-title black-clr"><h1>Blog Post</h1></div>
                    </div>

                    <div class="row filter-layout masonary-layout">
                        <!--Start Single portfolio Style1-->
                        <div class="col-xl-6 col-lg-6 col-md-6 filter-item bridge interior">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <div class="inner-box">
                                        <img class="lazy-image" src="assets/images/portfolio/portfolio-v1-1.jpg" alt="Awesome Image">
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
                                        <span class="tag">Three Sinha Group of Companies</span>
                                        <h5><a href="#">The consultation team consisting with the expertise...</a></h5>
<!--                                        <p>
                                            <span class="flaticon-location-pin">
                                                
                                            </span>KA-62/1, Kuril, Progoti</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single portfolio Style1-->
                        <!--Start Single portfolio Style1-->
                        <div class="col-xl-6 col-lg-6 col-md-6 filter-item build houses">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <div class="inner-box">
                                        <img class="lazy-image" src="assets/images/portfolio/portfolio-v1-2.jpg" alt="Awesome Image">
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
                                        <span class="tag">Kandurata Umbrella Industries</span>
                                        <h5><a href="#">The Accounts and HR Team came up with full accounts...</a></h5>
<!--                                        <p>
                                            <span class="flaticon-location-pin">
                                                
                                            </span>KA-62/1, Kuril, Progoti</p>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single portfolio Style1-->

                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="all-portfolio-button text-center">
                                <a class="btn-one" href="#">All Blog Posts<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>   
            <!--End Latest Portfolio Area--> 

            
            <!--Start Partner Area-->
            <section class="partner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="partner-box">
                                <!--Start Single Partner Logo Box-->
                                <div class="single-partner-logo-box">
                                    <a href="#"><img src="assets/images/brand/brand-1.png" alt="Awesome Image"></a>
                                    <div class="overlay-box">
                                        <a href="#"><img src="assets/images/brand/overlay-brand-1.png" alt="Awesome Image"></a>    
                                    </div>
                                </div>
                                <!--End Single Partner Logo Box-->
                                <!--Start Single Partner Logo Box-->
                                <div class="single-partner-logo-box">
                                    <a href="#"><img src="assets/images/brand/brand-2.png" alt="Awesome Image"></a>
                                    <div class="overlay-box">
                                        <a href="#"><img src="assets/images/brand/overlay-brand-2.png" alt="Awesome Image"></a>    
                                    </div>
                                </div>
                                <!--End Single Partner Logo Box-->
                                <!--Start Single Partner Logo Box-->
                                <div class="single-partner-logo-box">
                                    <a href="#"><img src="assets/images/brand/brand-3.png" alt="Awesome Image"></a>
                                    <div class="overlay-box">
                                        <a href="#"><img src="assets/images/brand/overlay-brand-3.png" alt="Awesome Image"></a>    
                                    </div>
                                </div>
                                <!--End Single Partner Logo Box-->
                                <!--Start Single Partner Logo Box-->
                                <div class="single-partner-logo-box">
                                    <a href="#"><img src="assets/images/brand/brand-4.png" alt="Awesome Image"></a>
                                    <div class="overlay-box">
                                        <a href="#"><img src="assets/images/brand/overlay-brand-4.png" alt="Awesome Image"></a>    
                                    </div>
                                </div>
                                <!--End Single Partner Logo Box-->

                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <!--End Partner Area-->


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
        <script src="assets/js/scrollbar.js"></script>
        <script src="assets/js/jQuery.style.switcher.min.js"></script>
        
        
        <!-- thm custom script -->
        <script src="assets/js/custom.js"></script>



    </body>


</html>