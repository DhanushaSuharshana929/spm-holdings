<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:18:36 GMT -->
<head>
	<meta charset="UTF-8">
	<title>SPM Holdings || Careers</title>

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
<?php include './header.php'; ?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content clearfix">
                    <div class="title">
                       <h1>Careers</h1>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="./">Home</a></li>
                            <li><span class="flaticon-next-1"></span></li>
                            <li class="active">Careers</li>
                        </ul>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->


<!--Start Shop area-->
<section id="shop-area" class="main-shop-area">
    <div class="container">
        <div class="row"> 
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 float-right">
                <div class="shop-content">
                   
                    <div class="row">
                         <?php
                                    $CAREERS = new Careers(NULL);
                                    foreach ($CAREERS->all() as $careers) {
                                        ?>
                        <!--Start single product item-->
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-product-item">
                                <div class="img-holder">
                                    <img src="upload/careers/<?php echo $careers['image_name'];?>" alt="Awesome Product Image">
                                   
                                    <div class="overlay-content">
                                        <a href="contact.php">Contact Us<span class="flaticon-call"></span></a>
                                    </div>
                                </div>
                                <div class="title-holder">
                                    <h4><a href="contact.php"><?php echo $careers['title'];?></a></h4>
                                    <div class="bottom">
                                        
                                        <div class="price-box">
                                            <span><a href="contact.php"><?php echo $careers['short_description'];?></a></span>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single product item-->
                         <?php } ?>
                        
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

<!-- Mirrored from mehedi.asiandevelopers.com/rinbuild/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 04:18:57 GMT -->
</html>