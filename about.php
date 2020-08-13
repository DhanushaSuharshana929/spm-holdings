<?php
include './class/include.php';

$ABOUT_PAGE = new Page(2);
$ABOUT_PAGE_2 = new Page(3);
?>


<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="UTF-8">


        <title>MPBC.lk || About Us</title>


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
            <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-about.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="inner-content clearfix">
                                <div class="title">
                                    <br/><br/><h1>About Us</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active" style="color: #fd4f4f">About Us</li>
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
                                    <p class="about-text"><?php echo $ABOUT_PAGE->description ?></p>

                                </div>    
                            </div>  
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="about-style1-text-box">
                            <div class="inner-contant">
                                <p class="about-text"><?php echo $ABOUT_PAGE_2->description ?></p>

                            </div>    
                        </div>  
                    </div>
                </div>    
            </section>
            <!--End About Style1 Area-->



            <!--Start About Style2 Area-->
            <section class="about-style2-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="about-style2-image-box clearfix">
                                <img src="assets/images/about/about-3.jpg" alt="Awesome Image">

                            </div>     
                        </div>
                        <div class="col-xl-7 col-lg-12">
                            <div class="about-style1-text-box style2">
                                <div class="title">

                                    <h1>Our 14 <span>MPBC.lk</span><br> <b>years</b> working<br> experience.</h1><br/><br/>
                                </div>
                                <div class="inner-contant">
                                    <h3 style="color: #fdb2b2">Like What We Offer</h3>
                                    <h1 style="color: #fdb2b2">DO BUSINESS WITH US!</h1><br/>
                                    <h5 class="text-center" style="color: #acacac">In order to acquire our services please kindly send us your inquiry of interest. 
                                        We shall revert back immediately.</h5>
                                    <div class="fact-box-style2">
                                        <ul>
                                            <li class="single-fact-counter text-center wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                                                <div class="count-box">
                                                    <h1>
                                                        <span class="timer" data-from="1" data-to="30" data-speed="5000" data-refresh-interval="50" style="color: darkorange">30</span>
                                                    </h1>
                                                    <div class="icon"><span class="flaticon-plus"></span></div>
                                                </div>
                                                <div class="title">
                                                    <h3>Team Members</h3>
                                                </div>
                                            </li>
                                            <li class="single-fact-counter text-center wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                                                <div class="count-box">
                                                    <h1>
                                                        <span class="timer" data-from="1" data-to="215" data-speed="5000" data-refresh-interval="50" style="color: darkorange">215</span>
                                                    </h1>
                                                    <div class="icon"><span class="flaticon-plus"></span></div>
                                                </div>
                                                <div class="title">
                                                    <h3>Client’s Feedback</h3>
                                                </div>
                                            </li>
                                            <li class="single-fact-counter text-center wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                                                <div class="count-box">
                                                    <h1>
                                                        <span class="timer" data-from="1" data-to="310" data-speed="5000" data-refresh-interval="50" style="color: darkorange">310</span>
                                                    </h1>
                                                    <div class="icon"><span class="flaticon-plus"></span></div>
                                                </div>
                                                <div class="title">
                                                    <h3>Completed Works</h3>
                                                </div>
                                            </li>
                                        </ul>      
                                    </div>
                                </div>    
                            </div>  
                        </div>

                    </div> 
                </div>    
            </section>
            <!--End About Style2 Area-->


            <!--Start Faq Content Area-->
            <section class="faq-content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="faq-content-box">
                                <div class="sec-title">
                                    <p style="margin: 3px;">MPBC.lk works by</p>
                                    <div class="big-title black-clr">
                                        <h1>leveraging expertise, providing solutions to businesses</h1>
                                    </div>
                                </div>
                                <div class="accordion-box">
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn active"><h4>Think big, Think difference</h4></div>
                                        <div class="accord-content collapsed">
                                            <p>It start in your mind. We become what we think. Think big to get big. 
                                                Think big, Believe big act big & results will be…</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn"><h4>Collaboration and Synergy</h4></div>
                                        <div class="accord-content">
                                            <p>We can provide you business with house counsel services for a monthly fee.</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block">
                                        <div class="accord-btn"><h4>Passion for Excellence</h4></div>
                                        <div class="accord-content">
                                            <p>Doing better than average not only takes nerve, passion and 
                                                purpose but it also takes tenacious preparation</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
                                    <!--Start single accordion box-->
                                    <div class="accordion accordion-block marginbottom0">
                                        <div class="accord-btn"><h4>Believe in Simplicity</h4></div>
                                        <div class="accord-content">
                                            <p>MPBC.lk work together to achieve outcomes with integrated process & knowledge 
                                                collaboration.</p>
                                        </div>
                                    </div>
                                    <!--End single accordion box-->
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
            </section>
            <!--End Faq Content Area-->


            <!-- vision, mission-->
            <section class="header" style="background-color: #f2f3f4;padding-top: 10px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Tabs nav -->
                            <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="text-align: center; font-size: 25px;">                                    
                                    <span class="font-weight-bold small text-capitalize tab-text">Our Value</span></a>

                                <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="text-align: center; font-size: 25px;">                                    
                                    <span class="font-weight-bold small text-capitalize tab-text">Our Mission</span></a>

                                <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="text-align: center; font-size: 25px;">                                  
                                    <span class="font-weight-bold small text-capitalize tab-text">Our Vision</span></a>
                            </div>
                        </div>


                        <div class="col-md-9">
                            <!-- Tabs content -->
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    <h4 class="mb-4 text-center tab-text">Our Value</h4>
                                    <p class="text-muted mb-2 text-center">Our values are based on principles that are very dear to us.
                                        We take our clients requirements very seriously and incorporate the following values 
                                        into the mindsets of our consultants and partners alike.</p>
                                </div>

                                <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    <h4 class="mb-4 text-center tab-text">Our Mission</h4>
                                    <p class="text-muted mb-2 text-center">Creation of new industry standard through the best practices by fullfilling our clients requirements.</p>
                                </div>

                                <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    <h4 class="mb-4 text-center tab-text">Our Vision</h4>
                                    <p class="text-muted mb-2 text-center">Be the game changer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




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