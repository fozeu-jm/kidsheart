<?php get_header(); ?>

<!-- /jumbotron -->

<div style="background: url(<?php echo get_theme_file_uri('img/blogheader.jpg'); ?>) no-repeat;" class="blog jumbotron">
    <div class="container">
        <div class="col-lg-6 col-centered well text-center">
            <h1>Our Photo Gallery</h1>
            <!-- Breadcrumb -->
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /jumbotron -->

<!-- Clouds SVG Divider -->
<svg id="deco-clouds2" class="head hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
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

<!-- Parallax objects -->
<div class="blog-object1 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
     data-100="transform:translatey(0%);"
     data-1025="transform:translatey(-80%);">
    <!-- Image -->
    <img src="<?php echo get_theme_file_uri('img/blogobject1.png'); ?>" alt="">
</div>

<div class="blog-object2 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
     data-100="transform:translatey(0%);"
     data-1025="transform:translatey(-80%);">
    <!-- Image -->
    <img src="<?php echo get_theme_file_uri('img/blogobject2.png'); ?>" alt="">
</div>

<!-- Section Gallery -->
<section style="background: white;" id="gallery" class="color-section">
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
        <div style="background: white;" class="row">
            <div class="col-md-12">
                <div id="lightbox">
                    <!-- Image 1 -->
                    <?php
                    $custom = new WP_Query(array(
                        'posts_per_page' => -1,
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
                                                    <span class="overlay-mask">
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
        <!-- /container -->
</section>
<!-- Section ends -->



<?php get_footer(); ?>