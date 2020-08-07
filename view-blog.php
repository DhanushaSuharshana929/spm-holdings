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
            <section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-blog.jpg);">
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


            <!--Start shop area-->
            <section id="shop-area" class="single-shop-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="shop-content">


                                <!--Start single shop content-->
                                <div class="single-shop-content">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-7">
                                            <div class="single-product-image-holder">
                                                <ul class="slider-content clearfix bxslider2">
                                                    <?php
                                                    $BLOG_POST_PHOTO = new BlogPhoto(null);
                                                    foreach ($BLOG_POST_PHOTO->getBlogPhotosById($BLOG_POST->id) as $key => $blog_photo) {
                                                        ?>
                                                        <li>
                                                            <div class="single-product-slide clearfix">
                                                                <div class="big-image-box">
                                                                    <img src="upload/blog-post/gallery/<?php echo $blog_photo['image_name'] ?>" alt="Awesome Image">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php } ?>
                                                </ul>    

                                                <br/>
                                                <div class="slider-pager clearfix">
                                                    <ul class="thumb-box">
                                                        <?php
                                                        $BLOG_POST_PHOTO = new BlogPhoto(null);
                                                        foreach ($BLOG_POST_PHOTO->getBlogPhotosById($BLOG_POST->id) as $key => $blog_photo) {
                                                            if ($key == 0) {
                                                                ?>
                                                                <li>
                                                                    <a class="active" data-slide-index="0" href="#">
                                                                        <div class="img-holder">
                                                                            <img src="upload/blog-post/gallery/thumb/<?php echo $blog_photo['image_name'] ?>" alt="Awesome Image">    
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a class="active" data-slide-index="<?php $key ?>" href="#">
                                                                    <div class="img-holder">
                                                                        <img src="assets/images/shop/shop-single-thumb-1.jpg" alt="Awesome Image">    
                                                                    </div>
                                                                </a>                                                       
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </ul>
                                                </div> 


                                                <div class="slider-pager clearfix arrow-button">
                                                    <div class="center">
                                                        <ul class="nav-link list-inline">
                                                            <li id="slider-prev"></li>
                                                            <li id="slider-next"></li>
                                                        </ul>  
                                                    </div>
                                                </div>     
                                            </div>
                                        </div>


                                        <div class="col-xl-6 col-lg-5">
                                            <div class="content-box">

                                                <div class="top">
                                                    <div class="title-box">
                                                        <h2><?php echo $BLOG_POST->title ?></h2><br/>
                                                        <div class="rating-box">
                                                            <span><i class="flaticon-calendar"> <?php echo $BLOG_POST->date ?></i></span>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="text">
                                                    <p><?php echo $BLOG_POST->description ?></p>

                                                    <div class="social-share-box">

                                                        <h5>Share</h5>

                                                        <ul class="social-links-style1">
                                                            <li>
                                                                <a href="https://www.facebook.com/DewyMC/?modal=admin_todo_tour" target="blank"><i class="fa fa-facebook fb" aria-hidden="true"></i></a> 
                                                            </li>
                                                            <li>
                                                                <a href="http://plus.google.com/share?url=http://dewymanagementconsortium.com/2019/11/05/strategy-for-norways-peion-to-fund-global/" target="blank"><i class="fa fa-google-plus gplus" aria-hidden="true"></i></a> 
                                                            </li>
                                                            <li>
                                                                <a href="http://twitter.com/share?url=http://dewymanagementconsortium.com/2019/11/05/strategy-for-norways-peion-to-fund-global/" target="blank"><i class="fa fa-twitter tw" aria-hidden="true"></i></a> 
                                                            </li>
                                                            <li>
                                                                <a href="http://pinterest.com/pin/create/button/?url=http://dewymanagementconsortium.com/wp-content/uploads/2019/11/theme-10.jpg&media=&description=Three" target="blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End single shop content-->


                            </div> 
                        </div>
                    </div>
                </div>
            </section>
            <!--End shop area-->


            <!--Start Team Area-->
            <section class="team-area element-page" style="background-color: #f2f3f4;">
                <div class="container">
                    <div class="sec-title text-center">
                        <p>Learn something more from our blog</p>
                        <div class="big-title black-clr"><h1>Other Blog Posts</h1></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="rinbuild-carousel team-carousel owl-carousel owl-theme owl-nav-style-one" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":false, "dots":false, "autoplay":true, "autoplayTimeout":6000, "smartSpeed":500, "responsive":{ "0":{"items": "1"}, "768":{"items": "2"}, "1000":{"items": "3" }}}'>   

                                <?php
                                $BLOG_POST = new BlogPost(NULL);
                                foreach ($BLOG_POST->all() as $key => $blog_post) {
                                    if ($key < 6) {
                                        ?>
                                        <!--Start Single Team Member-->
                                        <div class="single-team-member wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                            <div class="img-holder">
                                                <img src="upload/blog-post/<?php echo $blog_post['image_name'] ?>" alt="Awesome Image">
                                            </div>
                                            <div class="title-holder">
                                                <div class="inner">
                                                    <div class="left">
                                                        <h3><?php echo $blog_post['title'] ?></h3>
                                                        <div class="social-links">
                                                            <ul class="social-links-style1">
                                                                <li>
                                                                    <a href="view-blog.php?id=<?php echo $blog_post['id'] ?>"><span class="flaticon-calendar"> <?php echo $blog_post['date'] ?></span></a> 
                                                                </li>
                                                              
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <a href="view-blog.php?id=<?php echo $blog_post['id'] ?>"><span class="flaticon-right-arrow"></span></a>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                        <!--End Single Team Member-->
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>  
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
        <script src="assets/js/jquery.bxslider.min.js"></script>
        <script src="assets/js/jQuery.style.switcher.min.js"></script>


        <!-- thm custom script -->
        <script src="assets/js/custom.js"></script>


    </body>


</html>