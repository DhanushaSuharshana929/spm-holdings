<?php
include './class/include.php';

$id = '';
$id = $_GET['id'];
$BLOG_POST = new BlogPost($id);
?>


<!DOCTYPE html>
<html lang="en">


    <head>


        <meta charset="UTF-8">


        <title>MPBC.lk || Blog || Blog Details</title>


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
                                    <h1><?php echo $BLOG_POST->title ?></h1>
                                </div>
                                <div class="breadcrumb-menu">
                                    <ul class="clearfix">
                                        <li><a href="./">Home</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li><a href="blog.php">Blog Posts</a></li>
                                        <li><span class="flaticon-next-1"></span></li>
                                        <li class="active"><?php echo $BLOG_POST->title ?></li>
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--End breadcrumb area-->


            <!--Start latest blog area -->
            <section class="blog-pagev2-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                            <div class="blog-post">

                                
                                    <!--Start Single Blog Post Style3-->
                                    <div class="single-blog-post-style3 wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                                        <div class="img-holder">
                                            <img src="upload/blog-post/<?php echo $BLOG_POST->image_name ?>" alt="Awesome Image">
                                            <div class="overlay-style-one bg1"></div>
                                        </div>
                                    </div>
                                    <!--End Single Blog Post Style3-->
                              

                                <!--Start Single Blog Post Style3-->
                                <div class="single-blog-post-style3 withbdr wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                                    <div class="quote-box">
                                        <div class="icon">
                                            <span class="flaticon-quotation-marks"></span>
                                        </div>
                                        <div class="title">
                                            <h3>"<?php echo $BLOG_POST->title ?>"</h3>
                                            <h4><?php echo $BLOG_POST->date ?></h4>
                                        </div>
                                    </div>    
                                    <div class="text-holder">
                                        <p><?php echo $BLOG_POST->description ?></p>                                      
                                    </div>
                                </div>
                                <!--End Single Blog Post Style3-->


                            </div>   
                        </div>


                        <!--Start sidebar Wrapper-->
                        <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12">
                            <div class="sidebar-wrapper">
                                <!--Start sidebar categories Box-->
                                <div class="sidebar-categories-box wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                                    <div class="categories-title">
                                        <h3>All Blog Posts</h3>
                                    </div>
                                    <ul class="categories clearfix">
                                        <?php
                                        $BLOG_POST = new BlogPost(NULL);
                                        foreach ($BLOG_POST->all() as $key => $blog_post) {
                                            if ($key < 3) {
                                                ?>
                                                <li><a href="view-blog.php?id=<?php echo $blog_post['id'] ?>"><?php echo $blog_post['title'] ?></a></li>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <div class="more-categories">
                                        <a href="blog.php"><span class="flaticon-plus"></span>View More</a>
                                    </div>
                                </div>
                                <!--End sidebar categories Box-->


                                <!--Start single sidebar-->
                                <div class="sidebar-bottom-box wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1200ms">
                                    <div class="img-holder">
                                        <img src="assets/images/sidebar/sidebar-img-bg.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one bg1"></div>
                                    </div>    
                                </div>
                            </div>    
                        </div>
                        <!--End Sidebar Wrapper--> 


                    </div>
                </div>
            </section>
            <!--End latest blog area-->


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