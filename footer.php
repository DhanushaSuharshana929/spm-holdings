<?php
$ABOUT_PAGE = new Page(1);
?>

<!--Start Slogan Area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="slogan-content wow slideInUp" data-wow-delay="100ms">
                    <div class="title">
                        <h1>Contact Us Now in Our MPBC.lk</h1>
                    </div>
                    <div class="quote-button">
                        <a href="contact.php">Contact Us<span class="flaticon-next"></span></a>
                    </div>
                </div>    
            </div>    
        </div>
    </div>
</section>
<!--End Slogan Area-->


<footer class="footer-area">
    <div class="footer">
        <div class="container">
            <div class="row">
                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget">
                        <div class="our-company-info">
                            <div class="footer-logo">
                                <a href="./"><img src="assets/images/footer/footer-logo.png" alt="Awesome Footer Logo" title="Logo"></a>    
                            </div>
                            <div class="text">
                                <p style="text-align: justify"><?php echo substr($ABOUT_PAGE->description, 0, 320) ?></p>
                            </div>   <br/> 
                            <div class="footer-social-links">
                                <ul class="social-links-style1">
                                    <li>
                                        <a href="https://www.facebook.com/mpbc.lk" target="blank">
                                            <img src="assets/images/resources/facebook.png" width="30px" height="30px">
                                        </a> 
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UC2GX1-ApQvdVDNdGSg3Ysqg" target="blank">
                                            <img src="assets/images/resources/youtube.png" width="30px" height="35px" style="border-radius: 4px;">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/company/35874529" target="blank">
                                            <img src="assets/images/resources/linkedin.png" width="30px" height="30px">
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single footer widget-->


                <!--Start single footer widget-->
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget margin50-0">
                        <div class="title">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="pages-box">

                            <ul class="page-links">
                                <li><a href="./">Home</a></li>
                                <li><a href="services.php">Services</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="careers.php">Careers</a></li>
                                <li><a href="meet-us.php">Meet Us</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>      

                        </div>
                    </div>
                </div>
                <!--End single footer widget--> 


                <!--Start single footer widget-->
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget margin50-0">
                        <div class="title">
                            <h3>Services</h3>
                        </div>
                        <div class="pages-box">

                            <ul class="page-links">

                                <?php
                                $SERVICE_FOOTER = new Service(null);
                                foreach ($SERVICE_FOOTER->all() as $key => $service_footer) {
                                    if ($key < 7) {
                                        ?>
                                        <li><a href="view-service.php?id=<?= $service_footer['id'] ?>"><?= substr($service_footer['title'], 0, 12) ?>...</a></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>      

                        </div>
                    </div>
                </div>
                <!--End single footer widget--> 


                <!--Start single footer widget-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 wow animated fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget">
                        <div class="twitter-feed-box">
                            <h3><a href="contact.php">Contact Details</a></h3>
                            <div class="border-box"></div> 
                            <div class="text">
                                <ul class="page-links">
                                    <li><span class="flaticon-house" style="color: #fba2bc">  10 10/3, Ward place, Colombo 7.</span></li>
                                    <li><span class="flaticon-location-pin" style="color: #fba2bc">  752/A3, Aminda Kumara Mawatha, Rukmale Rd, Pannipitiya.</span></li>
                                    <li><span class="flaticon-call" style="color: #fba2bc">  (+94) 11 218 9134</span></li>
                                    <li><span class="flaticon-call" style="color: #fba2bc">  (+94) 77 149 0000</span></li>
                                    <li><span class="flaticon-mail" style="color: #fba2bc">  info@mpbc.lk</span></li>
                                    <li><span class="flaticon-calendar" style="color: #fba2bc">  Monday - Sunday</span></li>
                                    <li><span class="flaticon-clock" style="color: #fba2bc">  8.00 am – 6.00 pm</span></li>
                                </ul>
                            </div>
                        </div>                   	  
                    </div>
                </div>
                <!--End single footer widget-->


            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="outer-box">
                <div class="copyright-text">
                    <p>© 2020 All Rights Reserved : <a href="http://mpbc.lk/">MPBC.lk.</a></p>
                </div>
                <div class="footer-menu">
                    <p style="color: #F0F0EE">Website By : <a href="https://synotec.lk/">Synotec Holdings (Pvt.) Ltd.</a> © 2020.</p>
                </div>      
            </div>    
        </div>    
    </div>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175657096-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-175657096-1');
    </script>

</footer>  