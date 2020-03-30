<?php get_header(); ?>

<!-- Slider -->
<div id="layerslider">

    <?php
    $custom = new WP_Query(array(
        'post_type' => 'slider',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
    ));
    while ($custom->have_posts()) {
        $custom->the_post();
        ?>
        <!-- Slide 1 -->
        <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
            <!-- Background image -->
            <img src="<?php the_field('slider-img'); ?>" class="ls-bg"  alt="Kids at heart events"/>
            <!-- Parallax Image -->
            <img src="<?php echo get_theme_file_uri('img/sun.png'); ?>" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1000;easingin:fadeIn;parallaxlevel:7;">
                <!-- Text -->
                <div class="ls-l header-text container" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                    <h1><?php the_field('slider-title'); ?></h1>
                    <p class="subtitle hidden-xs">
                        <?php the_field('slider-txt'); ?>
                    </p>
                    <!-- Button -->
                    <div class="page-scroll hidden-xs">
                        <a class="btn" href="#contact">Contact us</a>
                    </div>
                </div>
                <!-- Parallax Image -->
                <img src="<?php echo get_theme_file_uri('img/flower.png'); ?>" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
                    </div>

                <?php } wp_reset_postdata(); ?>

                </div>
                <!-- /Layerslider ends-->

                <!-- Clouds SVG Divider -->
                <div class="hidden-xs container-fluid cloud-divider">
                    <svg id="deco-clouds1" class="head" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M-5 100 Q 0 20 5 100 Z
                              M0 100 Q 5 0 10 100
                              M5 100 Q 10 30 15 100
                              M10 100 Q 15 10 20 100
                              M15 100 Q 20 30 25 100
                              M20 100 Q 25 -10 30 100
                              M25 100 Q 30 10 35 100
                              M30 100 Q 35 30 40 100
                              M35 100 Q 40 10 45 100
                              M40 100 Q 45 50 50 100
                              M45 100 Q 50 20 55 100
                              M50 100 Q 55 40 60 100
                              M55 100 Q 60 60 65 100
                              M60 100 Q 65 50 70 100
                              M65 100 Q 70 20 75 100
                              M70 100 Q 75 45 80 100
                              M75 100 Q 80 30 85 100
                              M80 100 Q 85 20 90 100
                              M85 100 Q 90 50 95 100
                              M90 100 Q 95 25 100 100
                              M95 100 Q 100 15 105 100 Z">
                        </path>
                    </svg>
                </div>
                <!-- / section ends-->

                <!-- Section Services -->
                <section id="services" class="color-section">
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- Section heading -->
                            <div class="section-heading">
                                <h2>Our Services</h2>
                            </div>
                        </div>
                        <div class="row">
                            <!-- main text -->
                            <div class="col-md-12 col-lg-7 text-center">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <h3 style="text-transform: capitalize;" class="text-center"><?php the_field('sectiontitle'); ?></h3>
                                    <div class="text-justify">
                                        <?php the_field('sectiontxt'); ?>
                                    </div>

                                </div>
                                <!-- /col-sm-12-->
                                <div class="col-md-12 col-lg-5">
                                    <!-- Image -->
                                    <img src="<?php the_field('section-img6'); ?>" alt="" class="img-responsive center-block">
                                </div>
                                <!-- /col-md-12-->
                            <?php } ?>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <?php
                            $custom = new WP_Query(array(
                                'post_type' => 'service',
                                'post_status' => 'publish',
                                'posts_per_page' => '-1',
                            ));
                            while ($custom->have_posts()) {
                                $custom->the_post();
                                ?>
                                <!-- item 1-->
                                <div class="col-md-4 col-sm-12">
                                    <div class="service float">
                                        <img src="<?php the_field('service-img'); ?>" alt="kids at heart events services" class="img-circle center-block img-responsive">
                                            <h4><?php the_title(); ?></h4>
                                            <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            <?php } wp_reset_postdata(); ?>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container-->
                </section>
                <!-- /Section ends -->

                <!-- Section Callout -->
                <section id="callout" class="small-section">
                    <!-- Clouds background -->
                    <div class="hidden-xs">
                        <div class="cloud x1"></div>
                        <div class="cloud x2"></div>
                        <div class="cloud x3"></div>
                        <div class="cloud x4"></div>
                        <div class="cloud x5"></div>
                        <div class="cloud x6"></div>
                        <div class="cloud x7"></div>
                    </div>
                    <!-- /Clouds ends -->
                    <div style="background-image: url(<?php the_field('section-img1'); ?>);" class="container">
                        <!-- Animated Sun -->
                        <div class="sun hidden-sm hidden-xs">
                            <div class="sun-face">
                                <div class="sun-hlight"></div>
                                <div class="sun-leye"></div>
                                <div class="sun-reye"></div>
                                <div class="sun-lred"></div>
                                <div class="sun-rred"></div>
                                <div class="sun-smile"></div>
                            </div>
                            <!-- Sun rays -->
                            <div class="sun-anime">
                                <div class="sun-ball"></div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                                <div class="sun-light"><b></b><s></s>
                                </div>
                            </div>
                        </div>
                        <!-- /Animated Sun -->
                        <div class="col-md-6 col-sm-6 text-center">
                            <div class="well">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <h3 style="text-transform: capitalize;"><?php the_field('section-title1'); ?></h3>
                                    <?php the_field('section-txt1'); ?>
                                <?php } ?>
                                <div class="page-scroll">
                                    <!-- Button-->
                                    <a class="btn" href="#contact">Contact us</a>
                                </div>
                                <!-- /page-scroll -->
                            </div>
                            <!-- /well -->
                        </div>
                        <!-- /col-md-6 -->
                    </div>
                    <!-- /container-->
                </section>
                <!-- Section Ends-->

                <!-- Section About -->
                <section id="about">
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- Section heading -->
                            <div class="section-heading">
                                <h2>About us</h2>
                            </div>
                        </div>
                        <div style="margin-bottom: 60px;" class="row">
                            <div class="col-sm-12 col-lg-5">
                                <!-- Carousel -->
                                <div id="owl-about" class="owl-carousel">
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_theme_file_uri('img/about1.jpg'); ?>" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_theme_file_uri('img/about2.jpg'); ?>" alt="">
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="<?php echo get_theme_file_uri('img/about3.jpg'); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- text -->
                            <div class="col-lg-7 col-sm-12">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <h3><?php the_field('section-title2'); ?></h3>
                                    <?php the_field('section-txt2'); ?>
                                <?php } ?>
                            </div>
                            <!-- /col-lg-8 -->
                        </div>
                        <!-- /row -->

                        <!-- /row features -->
                        <div class="col-lg-12 col-sm-12 paper_block">
                            <h3 class="text-center">Our Testimonials</h3>
                            <div id="owl-testimonials" class="owl-carousel">
                                <?php
                                $custom = new WP_Query(array(
                                    'post_type' => 'testimonial',
                                    'post_status' => 'publish',
                                    'posts_per_page' => '-1',
                                ));
                                while ($custom->have_posts()) {
                                    $custom->the_post();
                                    ?>
                                    <!-- testimonial 1-->
                                    <blockquote>
                                        <div class="col-md-4 col-lg-4 col-centered">
                                            <!-- testimonial image-->
                                            <img src="<?php the_field('testi-img'); ?>" alt="temoignages kids at heart events" class="img-responsive img-circle">
                                        </div>
                                        <div class="col-md-10 col-md-offset-1 quote-test">
                                            <!-- quote -->
                                            <?php the_content(); ?>
                                            <small><i class="fa fa-user"></i><?php the_title(); ?></small>
                                        </div>
                                    </blockquote>
                                <?php } wp_reset_postdata(); ?>
                            </div>
                            <!--owl testimonials-->
                        </div>
                        <!-- /col-lg-7 -->
                    </div>
                    <!--/container-->
                </section>
                <!--/ Section ends -->

                <!-- Parallax object -->
                <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;"
                     data-100="transform:translatey(40%);"
                     data-center-center="transform:translatey(-180%);">
                    <!-- Image -->
                    <img src="<?php echo get_theme_file_uri('img/parallaxobject1.png'); ?>" alt="">
                </div>

                <!-- Section Team -->
                <section id="team" class="color-section">
                    <!-- svg triangle shape -->
                    <svg class="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
                    </svg>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- Section heading -->
                            <div class="section-heading">
                                <h2>Our Team</h2>
                            </div>
                        </div>
                        <!-- Intro text -->
                        <div class="row team">
                            <div class="col-lg-5 col-md-5 res-margin">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                    ?>
                                    <!-- Intro image -->
                                    <img src="<?php the_field('section-img3'); ?>" class="center-block img-responsive img-curved" alt="kids at heart events"/>
                                </div>
                                <div class="col-lg-7 col-md-7">

                                    <h3><?php the_field('section-title3'); ?></h3>
                                    <?php the_field('section-txt3'); ?>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- Team Carousel-->
                        <div id="owl-team" class="owl-carousel">
                            <?php
                            $custom = new WP_Query(array(
                                'post_type' => 'team',
                                'post_status' => 'publish',
                                'posts_per_page' => '-1',
                            ));
                            while ($custom->have_posts()) {
                                $custom->the_post();
                                ?>
                                <div class="col-lg-12">
                                    <!-- member 1-->
                                    <div class="team-item">
                                        <img src="<?php the_field('team-img'); ?>" alt=""/>
                                        <div class="team-caption">
                                            <h5 class="text-light"><?php the_title(); ?></h5>
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <!-- /team-item-->
                                </div>
                            <?php } wp_reset_postdata(); ?>
                            <!-- col-lg-12-->
                        </div>
                        <!--/owl-team -->
                    </div>
                    <!--/container -->
                </section>
                <!-- Section ends -->



                <!-- Parallax object -->
                <div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;"
                     data-start="margin-top:40%"
                     data-100="transform:translatey(0%);"
                     data-center-center="transform:translatey(-180%);">
                    <!-- Image -->
                    <img src="<?php echo get_theme_file_uri('img/parallaxobject2.png'); ?>" alt="">
                </div>

                <!-- Section Gallery -->
                <section id="gallery" class="color-section">
                    <!-- svg triangle shape -->
                    <div class="container">
                        <!-- Section heading -->
                        <div class="section-heading">
                            <h2>Our Gallery</h2>
                        </div>
                        <!-- Navigation -->
                        <div class="text-center col-md-12">
                            <p>Touch or hover on the images to display fullscreen mode</p>
                            <ul class="nav nav-pills cat text-center" role="tablist" id="gallerytab">
                                <li class="active"><a href="#" data-toggle="tab" data-filter="*">All</a>
                                    <li><a href="#" data-toggle="tab" data-filter=".kids">Kids Events</a></li>
                                    <li><a href="#" data-toggle="tab" data-filter=".adult">Adult Events</a></li>
                            </ul>
                        </div>
                        <!-- Gallery -->
                        <div class="row">
                            <div class="col-md-12">
                                <div id="lightbox">
                                    <!-- Image 1 -->
                                    <?php
                                    $custom = new WP_Query(array(
                                        'posts_per_page' => 12,
                                        'post_type' => 'album'
                                    ));
                                    while ($custom->have_posts()) {
                                        $custom->the_post();
                                        $images = acf_photo_gallery('gallerie', get_the_ID());
                                        $img_count = count($images);
                                        $counter = 0;
                                        if (count($images)) {
                                            ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 gallery <?php the_field('type'); ?> tenter events">
                                                <div class="portfolio-item">
                                                    <?php
                                                    while (true) {
                                                        if ($counter < $img_count) {
                                                            if ($counter == 0) {
                                                                ?>
                                                                <div class="gallery-thumb" style="background-image: url(<?php echo $images[$counter]['full_image_url'] ?>);">
                                                                    <span style="text-transform: capitalize;" class="overlay-mask">
                                                                        <?php the_title(); ?>
                                                                    </span>
                                                                    <a href="<?php echo $images[$counter]['full_image_url'] ?>"  data-lightbox="image-1-456" data-title="My caption" class="link centered">
                                                                        <i class="fa fa-expand"></i>
                                                                    </a>
                                                                    <?php $counter++ ?>

                                                                </div>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a style="display:none;" href="<?php echo $images[$counter]['full_image_url'] ?>" data-lightbox="<?php the_title() ?>" class="gallery-img ">
                                                                </a>
                                                                <?php $counter++ ?>
                                                                <?php
                                                            }
                                                        } else {
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    }
                                    ?>
                                    <!-- /lightbox-->
                                </div>
                                <!-- /col-md-12-->
                            </div>

                            <!-- /row -->
                        </div>
                        <div class="row">
                            <div style="padding-top: 80px;" class="col-12 text-center">
                                <a class="btn" href="<?php echo get_post_type_archive_link('album'); ?>">View All</a>
                            </div>
                        </div>
                        <!-- /container -->
                </section>
                <!-- Section ends -->

                <!-- Section Latest Blog -->
                <section id="latestblog">
                    <div class="container">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>Our Blog</h2>
                        </div>
                        <!-- Carousel -->
                        <div class="row color_block">
                            <div id="owl-blog" class="owl-carousel">
                                <!-- Blog item 1 -->
                                <?php
                                $custom = new WP_Query(array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => '3',
                                ));
                                while ($custom->have_posts()) {
                                    $custom->the_post();
                                    ?>
                                    <div class="blog-preview col-md-12">
                                        <!-- Blog image -->
                                        <img src="<?php the_field('post-img'); ?>" alt="" />
                                        <div class="latest-caption text-center">
                                            <a href="<?php the_permalink(); ?>">
                                                <h4><?php the_title(); ?></h4>
                                            </a>
                                            <!-- Post Info -->
                                            <div class="post-info">
                                                <p><i class="fa fa-clock-o"></i><?php the_time('M d, Y'); ?> at <?php the_time('G:i a'); ?></p>
                                                <p><i class="fa fa-user"></i>by <a href="#"><?php the_author(); ?></a></p>
                                                <!-- Post Comments -->
                                            </div>
                                            <p>
                                                <?php the_excerpt(); ?>
                                            </p>
                                            <!-- Button-->
                                            <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- /owl-blog -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </section>
                <!-- Section ends -->

                <!-- Parallax object -->
                <div class="parallax-object3 hidden-sm hidden-xs" data-0="opacity:1;"
                     data-100="transform:translatex(0%);"
                     data-center-center="transform:translatex(380%);">
                    <!-- Image -->
                    <img src="<?php echo get_theme_file_uri('img/parallaxobject3.png'); ?>" alt="">
                </div>

                <!-- Section Prices -->
                <section id="prices" class="color-section">
                    <!-- svg triangle shape -->
                    <svg id="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
                    </svg>
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- Section heading -->
                            <div class="section-heading">
                                <h2>Our Prices</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <!-- Price tables -->
                                <div class="pricing pricing-palden">
                                    <div class="pricing-item col-lg-4 col-md-4 col-sm-12">
                                        <div class="pricing-deco">
                                            <svg class="pricing-deco-img" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                                <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                                            </svg>
                                            <div class="pricing-price"><span class="pricing-currency">cfa</span>100,000
                                            </div>
                                            <h3 class="pricing-title">Bronze</h3>
                                        </div>
                                        <!-- List -->
                                        <ul class="pricing-feature-list">
                                            <li>No Contracts</li>
                                            <li>10h /day</li>
                                            <li>Drop In</li>
                                            <li>Facilities Included</li>
                                        </ul>
                                        <!-- Button-->
                                        <div class="page-scroll">
                                            <a class="btn" href="<?php echo get_theme_file_uri('img/activity1.jpg'); ?>" data-lightbox="Ratata" data-title="Optional caption.">Contact us</a>
                                        </div>
                                        <!--/page-scroll-->
                                    </div>
                                    <div class="pricing-item pricing-item-featured col-lg-4 col-md-4 col-sm-12">
                                        <div class="pricing-deco">
                                            <svg class="pricing-deco-img" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                                <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                                            </svg>
                                            <div class="pricing-price"><span class="pricing-currency">cfa</span>150,000
                                            </div>
                                            <h3 class="pricing-title">Silver</h3>
                                        </div>
                                        <!-- List -->
                                        <ul class="pricing-feature-list">
                                            <li>Natural Enviroment Program</li>
                                            <li>10h /day</li>
                                            <li>Bonus Activities</li>
                                            <li>Parent's Handbook</li>
                                        </ul>
                                        <!-- Button-->
                                        <div class="page-scroll">
                                            <a class="btn" href="#contact">Contact us</a>
                                        </div>
                                        <!--/page-scroll-->
                                    </div>
                                    <div class="pricing-item col-lg-4 col-md-4 col-sm-12">
                                        <div class="pricing-deco">
                                            <svg class="pricing-deco-img" enable-background='new 0 0 300 100' height='100px' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
                                                <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A;	c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
                                                <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;	c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
                                                <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;	H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
                                                <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A;	c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
                                            </svg>
                                            <div class="pricing-price"><span class="pricing-currency">cfa</span>200,000
                                            </div>
                                            <h3 class="pricing-title">Gold</h3>
                                        </div>
                                        <!-- List -->
                                        <ul class="pricing-feature-list">
                                            <li>Extra Savings</li>
                                            <li>12h /day</li>
                                            <li>Bonus Activities</li>
                                            <li>Parent's Handbook</li>
                                        </ul>
                                        <!-- Button-->
                                        <div class="page-scroll">
                                            <a class="btn" href="#contact">Contact us</a>
                                        </div>
                                        <!--/page-scroll-->
                                    </div>
                                    <!--/pricing-item-->
                                </div>
                                <!-- /col-sm-12-->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /container-->
                    </div>
                </section>
                <!-- /Section ends -->

                <!-- Section Call to Action -->
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <section style="background-image: url(<?php the_field('section-img4'); ?>)" id="call-to-action" class="small-section">
                        <div class="container text-center">
                            <div class="col-lg-6 col-lg-offset-6 col-sm-6">
                                <div class="well">
                                    <!-- Section heading -->
                                    <h3><?php the_field('section-title4'); ?></h3>
                                    <p>
                                        <?php the_field('section-txt4'); ?>
                                    </p>
                                    <!-- Button -->
                                    <div class="page-scroll">
                                        <a class="btn" href="#about">About Us</a>
                                    </div>
                                    <!--/page-scroll -->
                                </div>
                                <!--/well -->
                            </div>
                            <!--/col-lg-6 -->
                        </div>
                        <!-- /container-->
                    </section>
                <?php } ?>
                <!-- Section ends -->

                <!-- Section Contact -->
                <section id="contact" class="color-section">
                    <div class="container">
                        <div class="col-lg-8 col-lg-offset-2">
                            <!-- Section heading -->
                            <div class="section-heading">
                                <h2>Contact us</h2>
                            </div>
                        </div>
                        <!-- Contact -->
                        <div class="col-lg-4 text-center">
                            <h4>Information</h4>
                            <!-- contact info -->
                            <div class="contact-info">
                                <p><i class="flaticon-back"></i><a href="mailto:contact@kidsatheartevents.com">contact@kidsatheartevents.com</a></p>
                                <p><i class="fa fa-phone margin-icon"></i><a href="tel:+237673416500">+237 673 416 500</a></p>
                            </div>
                            <!-- address info -->
                            <p>We are located at Cameroun Yaoundé, Bastos</p>
                            <!-- Map -->
                            <div id="map-canvas">
                                <iframe id="mapy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15922.52949382943!2d11.500128876799877!3d3.888717504742936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf42130eb961%3A0x5d503c91bf378a69!2sQuartier+Bastos%2C+Yaounde!5e0!3m2!1sen!2scm!4v1557952111934!5m2!1sen!2scm" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <!-- Contact Form -->
                        <div class="col-lg-7 col-lg-offset-1">
                            <h4>Contact us</h4>
                            <!-- Form Starts -->
                            <div id="contact_form">
                                <?php
                                while (have_posts()) {
                                    the_post();
                                    the_content();
                                }
                                ?>
                            </div>
                        </div>
                </section>



                <?php get_footer(); ?>