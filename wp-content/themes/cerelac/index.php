<?php get_header(); ?>

<!-- /jumbotron -->

<div style="background: url(<?php echo get_theme_file_uri('img/blogheader.jpg'); ?>) no-repeat;" class="blog jumbotron">
    <div class="container">
        <div class="col-lg-6 col-centered well text-center">
            <h1>Blog Home</h1>
            <!-- Breadcrumb -->
            <ol class="breadcrumb text-center">
                <li><a href="<?php site_url('/'); ?>">Home</a></li>
                <li class="active">Blog Home</li>
            </ol>
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


<div id="blog-page" class="container">
    <!-- Blog Home -->
    <div class="col-md-9 blog-home">
        <!-- Blog Post Row -->
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <div class="blog-post row">
                <div class="img-date">
                    <!-- date and category -->
                    <div class="col-md-1 text-center date-category">
                        <i class="fa fa-camera fa-4x"></i>            
                        <p><?php the_time('F d, Y'); ?></p>
                    </div>
                    <!-- blog image -->
                    <div class="img-effect">
                        <a href="<?php the_permalink(); ?>">
                            <img style="max-width: 101%; width: 101%;" class="" src="<?php the_field('post-img'); ?>" alt="kids at heart events blog post">
                        </a>
                    </div>
                </div>
                <div class="col-md-12">
                    <!-- Post header -->
                    <h3>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="post-info">
                        <!-- Post Author -->
                        <p><i class="fa fa-user"></i>by <a href="#"><?php the_author(); ?></a></p>
                        <!-- Post Comments -->
                    </div>
                    <!-- Post Excerpt -->
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                    <a class="btn" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- /blog-home -->

    <!-- Sidebar -->
    <div class="sidebar col-md-3">
        <!-- About us Widget -->
        <div class="well">
            <h4>About Us</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Inventore, perspiciatis adipisci accusamus laudantium odit 
                aliquam repellat tempore quos aspernatur vero.
            </p>
            <!-- Social Media icons -->
            <div class="social-media">
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                <a href="#" title=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- /sidebar col-md-3 --> 
</div>




<?php get_footer(); ?>