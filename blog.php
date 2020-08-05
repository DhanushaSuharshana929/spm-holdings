<?php
include './class/include.php';


?>

<!DOCTYPE html>
<html lang="en">


    <head>


        <meta charset="UTF-8">


        <title>SPM Holdings || Blog</title>

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
                                    <h1>Blog</h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active">Blog</li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End breadcrumb area-->

            <!--Start Latest Portfolio Area-->
            <section class="latest-portfolio-area portfolio-pagev1">
                <div class="container">
                   
                   
                    <div class="row filter-layout masonary-layout">
                        
                        <?php 
                        $BLOG_POST = new BlogPost(NULL);
                        foreach ($BLOG_POST ->all() as $blog_post){
                        ?>
                        <!--Start Single portfolio Style1-->
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item bridge interior">
                            <div class="single-portfolio-style1">
                                <div class="img-holder">
                                    <div class="inner-box">
                                        <img src="upload/blog-post/<?php echo $blog_post['image_name']?>" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="inner"> 
                                                    <div class="zoom-button">
                                                        <a class="lightbox-image" data-fancybox="gallery" href="upload/blog-post/<?php echo $blog_post['image_name']?>">
                                                            <span class="flaticon-right-arrow"></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="title-holder">
                                        <span class="tag"><?php echo $blog_post['title']?></span>
                                        <h5><a href="view-blog.php?id=<?php echo $blog_post['id']?>"><?php echo $blog_post['description']?></a></h5>
                                        <p><span class="flaticon-calendar"></span><?php echo $blog_post['date']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single portfolio Style1-->
                        <?php }?>        
                    </div>
                    

                </div>
            </section>   
            <!--End Latest Portfolio Area--> 
 

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