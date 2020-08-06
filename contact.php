<?php
include './class/include.php';
?>

<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="UTF-8">


        <title>SPM Holdings || Contact Us</title>


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


        <!--contact form-->
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>


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
                                    <h1>Contact Us</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active">Contact Us</li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End breadcrumb area-->


            <!--Start Contact Info Area-->
            <section class="contact-info-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="single-contact-info-box text-center">
                                <div class="icon"><img src="assets/images/resources/call.png" width="65px" height="65px"></div>
                                <div class="title">
                                    <h3>Call for help</h3>

                                    <ul>
                                        <li><a href="tel:+94771490000">(+94) 77 149 0000</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="single-contact-info-box text-center">
                                <div class="icon"><img src="assets/images/resources/email.png" width="65px" height="65px"></div>
                                <div class="title">
                                    <h3>Mail for information</h3>
                                    <ul>
                                        <li><a href="info@dewymanagementconsortium.com">info@dewymanagementconsortium.com</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="single-contact-info-box text-center">
                                <div class="icon"><img src="assets/images/resources/map.png" width="65px" height="65px"></div>
                                <div class="title">
                                    <h3>Head office address</h3>

                                    <p>10/A-4/3,<br> Ward place,<br> Horana</p>
                                </div>
                            </div>
                        </div>  

                    </div>
                </div>
            </section>
            <!--End Contact Info Area-->

            <!--Start Contact Form Section-->
            <section class="contact-form-area">
                <div class="auto-container">
                    <div class="row clearfix"> 

                        <div class="col-xl-8 col-lg-7 col-md-12">
                            <div class="contact-form">
                                <div class="title">
                                    <h3>Send Us a Message</h3>
                                </div>
                                <div class="inner-box">
                                        <div class="row">
                                            <div class="form-group col-xl-6">
                                                <div class="input-box"> 
                                                    <p>Name:</p>  
                                                    <input type="text" id="txtFullName" name="name" value="" placeholder="Enter Your Full name" required="">
                                                    <span id="spanFullName"></span>
                                                </div>      
                                            </div>

                                            <div class="form-group col-xl-6">
                                                <div class="input-box">
                                                    <p>Phone:</p>   
                                                    <input type="text" id="txtPhone" name="phone" value="" placeholder="Enter Your Phone Number" required="">
                                                    <span id="spanPhone"></span>
                                                </div>      
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-12">
                                                <div class="input-box">
                                                    <p>Email Address:</p>   
                                                    <input type="email" id="txtEmail" name="email" value="" placeholder="Enter Your Email" required="">
                                                    <span id="spanEmail"></span>
                                                </div>      
                                            </div>

                                        </div> 
                                        <div class="row">
                                            <div class="form-group col-xl-12">
                                                <div class="input-box"> 
                                                    <p>Message:</p>      
                                                    <textarea name="message" id="txtMessage" placeholder="Enter Your Message" required=""></textarea>
                                                    <span id="spanMessage"></span>
                                                </div>      
                                            </div>    
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-5">

                                                <input type="text" name="captchacode" placeholder="Security Code"  class="form-group" id="captchacode" >

                                                <div class="vc-cd-12 vc-od-12">
                                                    <span id="capspan" ></span> 
                                                </div>

                                            </div>


                                            <div class="form-group col-md-3">
                                                <?php include './contact-form/captchacode-widget.php'; ?>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-xl-12">
                                                <div class="button-box">
                                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                                    <button class="btn-one" id="btnSubmit" type="submit" data-loading-text="Please wait..." style="background-color: #a65755">Submit</button>    
                                                </div>  
                                            </div>
                                             <div class="col-sm-12">
                                        <div id="dismessage" align="center"></div>
                                    </div>

                                        </div>                        
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5 col-md-12">
                            <div class="contact-information-box">
                                <div class="title">
                                    <h3 style="text-align: center;">Make a free consultation with our expert team to solve your prolems.</h3>
                                </div>
                                <ul class="contact-us">
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-pin-1"></span>
                                        </div>
                                        <div class="text">
                                            <p>27 Division St, New York,<br> NY 10002, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-open-envelope-with-letter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="mailto:info@templatepath.com">bioxin.zin@gmail.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-smartphone"></span>
                                        </div>
                                        <div class="text">
                                            <a href="tel:+11987654321">(+11) 987654321</a>
                                        </div>
                                    </li>   
                                </ul>
                                <img src="assets/images/resources/contact-about1.png" alt=""/>
                            </div>    
                        </div>

                    </div>
                </div>
            </section>
            <!--End Contact Form Section-->



            <section class="google-map-area">
                <div class="map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas"
                         data-zoom="12"
                         data-lat="-37.817085"
                         data-lng="144.955631"
                         data-type="roadmap"
                         data-hue="#ffc400"
                         data-title="Envato"
                         data-icon-path="assets/images/resources/map-marker.png"
                         data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
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
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
        <script src="assets/js/jQuery.style.switcher.min.js"></script>
        <!-- thm custom script -->
        <script src="assets/js/custom.js"></script>


        <!--contact form-->
        <script src="contact-form/scripts.js" type="text/javascript"></script>


    </body>

    <!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:20:30 GMT -->
</html>
