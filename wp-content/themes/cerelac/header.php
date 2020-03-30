<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php wp_head(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        <!-- Page width 'Boxed' of 'Full' -->
        <div style="overflow-x: hidden;" class="full">
            <!-- Preloader -->
            <div id="preloader">
                <div class="preloader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>	   
            <!-- Navbar -->
            <nav class="navbar navbar-custom navbar-fixed-top">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="navbar-brand-centered page-scroll">
                        <a href="<?php
                        if (is_front_page()) {
                            echo '#page-top';
                        } else {
                            echo site_url('/#page-top');
                        }
                        ?>">
                               <?php
                               $custom = new WP_Query(array(
                                   'post_type' => 'page',
                                   'post_status' => 'publish',
                                   'p' => 278,
                                   'posts_per_page' => '-1',
                               ));
                               while ($custom->have_posts()) {
                                   $custom->the_post();
                                   ?>
                            <img src="<?php the_field('logo-img'); ?>"  alt="Kids At Heart Events Logo">
                            <?php } wp_reset_postdata(); ?>
                        </a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-brand-centered">
                    <div class="container">
                        <ul class="nav navbar-nav page-scroll navbar-left">
                            <li><a href="<?php
                                if (is_front_page()) {
                                    echo '#page-top';
                                } else {
                                    echo site_url('/#page-top');
                                }
                                ?>">Home</a></li>
                            <li><a href="<?php
                                if (is_front_page()) {
                                    echo '#services';
                                } else {
                                    echo site_url('/#services');
                                }
                                ?>">Services</a></li>
                            <li><a href="<?php
                                if (is_front_page()) {
                                    echo '#about';
                                } else {
                                    echo site_url('/#about');
                                }
                                ?>">About</a></li>
                            <li><a href="<?php
                                if (is_front_page()) {
                                    echo '#team';
                                } else {
                                    echo site_url('/#team');
                                }
                                ?>">Team</a></li>
                        </ul>
                        <ul class="nav navbar-nav page-scroll navbar-right">
                            <li><a href="<?php
                                if (is_front_page()) {
                                    echo '#gallery';
                                } else {
                                    echo site_url('/#gallery');
                                }
                                ?>">Gallery</a></li>
                            <!-- Dropdown -->
                            <li class="dropdown active">
                                <a href="<?php echo site_url('/blog'); ?>">Blog</a>
                            </li>
                            <li><a href="<?php
                                if (is_front_page()) {
                                    echo '#prices';
                                } else {
                                    echo site_url('/#prices');
                                }
                                ?>">Prices</a></li>
                            <li><a href="<?php
                                if (is_front_page()) {
                                    echo '#contact';
                                } else {
                                    echo site_url('/#contact');
                                }
                                ?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- /navbar ends -->