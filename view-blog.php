<?php
include './class/include.php';

$id = '';
$id = $_GET['id'];
$BLOG_POST = new BlogPost($id);

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:20:01 GMT -->
<head>
	<meta charset="UTF-8">
	<title>Blog Details || RinBuild || Responsive HTML 5 Template</title>

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

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
    
</head>

<body>
<div class="boxed_wrapper">

<div class="preloader"></div>

   

<!-- main header -->
<?Php include './header.php';?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                       <h1>Blog Details</h1>
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



<!--Start latest blog area -->
<section class="blog-single-area">
    <div class="container">
        <div class="row">
            
            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                        <div class="img-holder">
                            <img src="upload/blog-post/<?php echo $BLOG_POST->image_name?>" alt="Awesome Image">
                        </div>
                        <div class="text-holder">
                            <h3 class="blog-title"><?php echo $BLOG_POST->title ?></h3>
                            <p><?php echo $BLOG_POST->description ?></p>
                       
                        </div>
                        
                    </div>
                    
                   
                </div>   
            </div>
            
            
            <!--Start sidebar Wrapper-->
            <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12">
                <div class="sidebar-wrapper">
                    <!--Start sidebar categories Box-->
                    <div class="sidebar-categories-box wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                        <div class="categories-title">
                            <h3>All Categories</h3>
                        </div>
                        <ul class="categories clearfix">
                            <li><a href="#">Latest Technology</a></li>
                            <li><a href="#">Manufacturing</a></li>
                            <li><a href="#">Maintanence Tricks</a></li>
                            <li><a href="#">Marketing Plan</a></li>
                            <li><a href="#">Chemical Industry</a></li>
                            <li><a href="#">Contracts</a></li>
                        </ul>
                        <div class="more-categories">
                            <a href="#"><span class="flaticon-plus"></span>More Categories</a>
                        </div>
                    </div>
                    <!--End sidebar categories Box-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar wow fadeInUp animated" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <div class="popular-tag-box">
                            <div class="title">
                                <h3>Popular Tag</h3>
                            </div>
                            <ul class="popular-tag">
                                <li><a href="#">Isabella</a></li>
                                <li><a href="#">Samantha</a></li>
                                <li><a href="#">Emily</a></li>
                                <li><a href="#">Isabella</a></li>
                                <li><a href="#">Grace</a></li>
                                <li><a href="#">Alexa</a></li>
                                <li><a href="#">Madison</a></li>
                                <li><a href="#">Peyton</a></li>
                                <li><a href="#">Knedy</a></li>
                                <li><a href="#">Alexa</a></li>
                                <li><a href="#">Peyton</a></li>
                            </ul>     
                        </div>
                        <div class="project-box">
                            <div class="title">
                                <h3>Project</h3>
                            </div>
                            <ul class="project-lists">
                                <li><a href="#">Deily Projects <span>50</span></a></li>
                                <li><a href="#">County Projects <span>60</span></a></li>
                                <li><a href="#">Foren Projects <span>70</span></a></li>
                                <li><a href="#">High <span>80</span></a></li>
                                <li><a href="#">Top Projects <span>90</span></a></li>
                            </ul>     
                        </div>
                        <div class="ratting-box">
                            <div class="title">
                                <h3>Ratting</h3>
                            </div>
                            <ul class="ratting-lists">
                                <li><a href="#">Show All <span>50</span></a></li>
                                <li><a href="#">1 star and higher <span>60</span></a></li>
                                <li><a href="#">2 stars and higher <span>70</span></a></li>
                                <li><a href="#">3 stars and higher <span>80</span></a></li>
                                <li><a href="#">4 stars and higher <span>90</span></a></li>
                            </ul>     
                        </div>
                    </div>
                    <!--End single sidebar-->
                    <div class="sidebar-bottom-box wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1200ms">
                        <div class="img-holder">
                            <img src="assets/images/sidebar/sidebar-img-bg.jpg" alt="Awesome Image">
                            <div class="overlay-style-one bg1"></div>
                            <div class="overlay">
                                <a href="#"><span class="flaticon-plus"></span></a>
                            </div>
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

<!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:20:29 GMT -->
</html>


