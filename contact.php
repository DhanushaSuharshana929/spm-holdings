<?php
include './class/include.php';
?>

<!DOCTYPE html>
<html lang="en">


    <head>

        <meta charset="UTF-8">


        <title>MPBC.lk || Contact Us</title>


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


        <!--contact form-->
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>


    </head>


    <body>


        <div class="boxed_wrapper">


            <div class="preloader"></div>


            <!-- main header -->
            <?php include './header.php'; ?>


            <!-- Background Music -->
            <div style="display: none;">
                <iframe src="music/2019-04-20_-_Quiet_Time_-_David_Fesliyan.mp3" type=”audio/mp3″ allow=”autoplay” id=”audio”></iframe>
                <audio autoplay>
                    <source src="music/2019-04-20_-_Quiet_Time_-_David_Fesliyan.mp3" type=”audio/mp3″ style=”display:none!important;”>
                </audio>
            </div>
            <!-- End Background Music -->
            
            
            <!--Start breadcrumb area-->     
            <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-contact.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="inner-content clearfix">
                                <div class="title">
                                    <br/><br/><h1>Contact Us</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active" style="color: #fd4f4f">Contact Us</li>
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
                                        <li><a href="#"> (+94) 11 218 9134</a></li>
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
                                        <li><a href="">info@mpbc.lk</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="single-contact-info-box text-center">
                                <div class="icon"><img src="assets/images/resources/map.png" width="65px" height="65px"></div>
                                <div class="title">
                                    <h3>Registered address</h3>
                                    <p>10 10/3,<br> Ward place,<br>Colombo 7.</p>
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
                                            <input type="text" name="captchacode" placeholder="Security Code"  class="form-group" id="captchacode">
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
                                                <button class="btn-one" id="btnSubmit" type="submit" data-loading-text="Please wait..." style="background-color: #640e27">Submit</button>    
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
                                            <p>752/A3, Aminda Kumara Mawatha,<br>  Rukmale Rd, Pannipitiya</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-open-envelope-with-letter"></span>
                                        </div>
                                        <div class="text">
                                            <p>rukmal.alwis@gmail.com<br/>md@mpbc.lk<br/>director@mpbc.lk<br/>investor@mpbc.lk</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-smartphone"></span>
                                        </div>
                                        <div class="text">
                                            <p>(+94) 77 149 0000</p>
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
                    <!-- Google Map -->
                    <div class="map">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.318441723046!2d79.96118811444128!3d6.852379921154424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2505351d45521%3A0xfa556cea048926da!2s752%20Rukmale%20Rd%2C%20Pannipitiya%2010230!5e0!3m2!1sen!2slk!4v1597050175913!5m2!1sen!2slk" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <!--// Google Map -->
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

   
</html>
