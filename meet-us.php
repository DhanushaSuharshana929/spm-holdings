<?php
include './class/include.php';
?>

<!DOCTYPE html>
<html lang="en">


    <head>
        
        
        <meta charset="UTF-8">
        
        
        <title>MPBC.lk || Meet Us</title>

        
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
            <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-team.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="inner-content clearfix">
                                <div class="title">
                                    <br/><br/><h1 class="breadcrumb-letter">TEAM</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active" style="color: #fd4f4f">Team</li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End breadcrumb area-->

            
            <!--Start Team Area-->
            <section class="team-area team-page">
                <div class="container">
                    <div class="row">
                        
                        <?php 
                        $TEAM = new Activities(NULL);
                        foreach ($TEAM->all() as $team){
                                ?>                        
                        <!--Start Single Team Member-->
                        <div class="col-xl-3 col-lg-3 wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1300ms">
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
                                                        <a href="#">
                                                            <span class="flaticon-engineer-1">&nbsp;<?php echo $team['short_description'] ?></span>
                                                        </a> 
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End Single Team Member-->                        
                        <?php } ?>                        
                        
                    </div>
                </div>
            </section>
            <!--End Team Area-->     
 

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