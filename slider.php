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
                            <h3 class="text-center">
                                <center><img src="assets/images/icon/slide-title-icon-1.png" alt="" class="center"><br/><br/><br/>
                                    <h2 class="text-center slider-text">
                                        <?php echo $slider['title']; ?>
                                    </h2><br/>
                                    <div class="btns-box text-center">
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