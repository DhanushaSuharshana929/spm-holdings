<?php
include './class/include.php';

$ABOUT_INDEX = new Page(1);
?>


<!DOCTYPE html>
<html lang="en">


    <head>


        <meta charset="UTF-8">


        <title>MPBC.lk || Home</title>


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

        <link href="https://fonts.googleapis.com/css2?family=Black+And+White+Picture&family=Lobster&display=swap&family=Courgette&display=swap&family=Lemonada:wght@600&display=swap" rel="stylesheet"> 

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
                                <div></div>
                                <div>
                                    <img src="assets/images/about/about-1.jpg" alt="Awesome Image">
                                </div>

                            </div>     
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <div class="about-style1-text-box">
                                <div class="title">
                                    <p>WELCOME</p>
                                    <h1><span>MPBC.lk</span>Think <b>big</b> <br> <b>Think</b> different<br> </h1>
                                </div>
                                <div class="inner-contant">
                                    <p class="about-text"><?php echo $ABOUT_INDEX->description ?></p>
                                   
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
                                <div class="rinbuild-carousel service-carousel owl-carousel owl-theme owl-nav-style-one mobile-owl-nav" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":true, "dots":false, "autoplay":true, "autoplayTimeout":6000, "smartSpeed":500, "responsive":{ "0":{"items": "1"}, "768":{"items": "2"}, "1000":{"items": "3" }}}'>
                                    <?php
                                    $SERVICE = new Service(NULL);
                                    foreach ($SERVICE->all() as $key => $service) {
                                        if ($key < 6) {
                                            ?>

                                            <!--Start Single Service Style3-->
                                            <div class="single-service-style2">
                                                <a href="view-service.php?id=<?php echo $service['id']; ?>">
                                                    <div class="img-holder">
                                                        <img src="upload/service/<?php echo $service['image_name']; ?>" alt="Awesome Image">
                                                        <div class="static-content">
                                                            <div class="title">
                                                                <h3>

                                                                    <?php echo $service['title'] ?>

                                                                </h3>
                                                            </div>

                                                        </div>
                                                        <div class="overlay-content">
                                                            <div class="inner-content">
                                                                <div class="icon"><span class="flaticon-building"></span></div>
                                                                <div class="text-holder">
                                                                    <div class="title">
                                                                        <h3 style="color: #fd4f4f"><?php echo $service['title'] ?></h3>
                                                                    </div>
                                                                    <p><?php echo substr($service['description'], 0, 100) ?></p> 
                                                                    <div class="read-more-button float-right" style="color: #fd4f4f">
                                                                        Read More <span class="flaticon-next"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </a>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>
                                </div> 
                            </div>    
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="all-service-button text-center">
                                <a class="btn-one" href="services.php">Our All Services<span class="flaticon-next"></span></a>
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
                                <?php
                                $TEAM = new Activities(NULL);
                                foreach ($TEAM->all() as $key => $team) {
                                    if ($key < 6) {
                                        ?>

                                        <!--Start Single Service Style3-->
                                        <div class="wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
                                            <a href="meet-us.php">
                                            <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                                <div class="img-holder">
                                                    <img src="upload/activity/<?php echo $team['image_name']; ?>" alt="Awesome Image">
                                                </div>
                                                <div class="title-holder">
                                                    <div class="inner">
                                                        <div class="left">
                                                            <h3><?php echo $team['title'] ?></h3>
                                                            <div class="social-links">
                                                                <ul class="social-links-style1">
                                                                    <li>
                                                                        <a href="meet-us.php">
                                                                            <span class="flaticon-engineer-1">&nbsp;<?php echo $team['short_description'] ?></span>
                                                                        </a> 
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    </div>    
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                        <!--End Single Service Style3-->
                                        <?php
                                    }
                                }
                                ?>
                            </div> 
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="all-service-button text-center">
                                <a class="btn-one" href="meet-us.php">View More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>
            <!--End Service Style3 Area-->


            <!--Start Latest Portfolio Area-->
            <section class="latest-portfolio-area pdtop120" style="background-color: #f2f3f4;">
                <div class="container">
                    <div class="sec-title text-center">
                        <p>Learn something more from our blog</p>
                        <div class="big-title black-clr"><h1>Blog Posts</h1></div>
                    </div>

                    <div class="row filter-layout masonary-layout">

                        <?php
                        $BLOG_POST = new BlogPost(NULL);
                        foreach ($BLOG_POST->all() as $key => $blog_post) {
                            if ($key < 3) {
                                ?>
                                <!--Start Single portfolio Style1-->
                                <div class="col-xl-4 col-lg-4 col-md-4 filter-item bridge interior">
                                    <div class="single-portfolio-style1">
                                        <div class="img-holder">
                                            <div class="inner-box">
                                                <img class="lazy-image" src="upload/blog-post/<?php echo $blog_post['image_name'] ?>" alt="Awesome Image">
                                                <div class="overlay-style-one">
                                                    <div class="box">
                                                        <div class="inner"> 
                                                            <div class="zoom-button">
                                                                <a class="lightbox-image" data-fancybox="gallery" href="upload/blog-post/<?php echo $blog_post['image_name'] ?>">
                                                                    <span class="flaticon-plus"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-holder">
                                                <span class="tag"><?php echo $blog_post['title'] ?></span>
                                                <h5><a href="view-blog.php?id=<?php echo $blog_post['id'] ?>"><?php echo substr($blog_post['description'], 0, 100) ?></a></h5>
                                                <p><span class="flaticon-calendar"></span><?php echo $blog_post['date'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single portfolio Style1-->
                                <?php
                            }
                        }
                        ?>

                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="all-portfolio-button text-center">
                                <a class="btn-one" href="blog.php">All Blog Posts<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>   
            <!--End Latest Portfolio Area--> 


            <!--Start Partner Area-->
            <section id="shop-area" class="main-shop-area elemp1">

                <div class="container">
                    <div class="row"> 
                        <div class="col-xl-12 col-lg- col-md-12 col-sm-12 float-right">
                            <div class="shop-content">

                                <div class="rinbuild-carousel shop-carousel owl-carousel owl-theme owl-nav-style-one" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":false, "dots":false, "autoplay":true, "autoplayTimeout":6000, "smartSpeed":500, "responsive":{ "0":{"items": "1"}, "768":{"items": "2"}, "1000":{"items": "5" }}}'>

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-1.png" alt="Awesome Product Image">
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-2.jpeg" alt="Awesome Product Image">
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-3.png" alt="Awesome Product Image">
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-4.jpeg" alt="Awesome Product Image">                                          
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-5.png" alt="Awesome Product Image">
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-6.jpeg" alt="Awesome Product Image">
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-7.png" alt="Awesome Product Image">
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-8.png" alt="Awesome Product Image">                                          
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                    <!--Start single product item-->
                                    <div>
                                        <div class="img-holder">
                                            <img src="assets/images/brand/brand-9.png" alt="Awesome Product Image">                                          
                                        </div>
                                    </div>
                                    <!--End single product item-->

                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <!--End Shop area-->  



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