<!-- Start Main Slider -->
<section class="main-slider style3">
    <div class="slider-box">
        <!-- Banner Carousel -->
        <div class="banner-carousel owl-theme owl-carousel">

            <?php
            $SLIDER = new Slider(NULL);
            foreach ($SLIDER->all() as $slider) {
                ?>
                <!-- Slide -->
                <div class="slide">
                    <div class="image-layer lazy-image" style="background-image:url(upload/slider/<?php echo $slider['image_name']; ?>)"></div>
                    <div class="auto-container">
                        <div class="content beautypress-purple-overlay">
                            <h3>
                                <img src="assets/images/icon/slide-title-icon-1.png" alt="">Our MPBC.lk Management Consortium</h3><br/><br/><br/>
                            <h2 style="color: #640b27;font-family: 'Lemonada', semi-bold; font-style: oblique; text-shadow: 0 0 3px #fff, 0 0 5px #fff; ">
                                <?php echo $slider['title']; ?>
                            </h2><br/>
                            <div class="btns-box">
                                <a href="services.php" class="btn-two">Our Services</a>
                                <a class="btn-one" href="about.php">View More<span class="flaticon-next"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide -->
            <?php } ?>

        </div>

    </div>
</section>
<!-- End Main Slider -->