<!-- Footer -->	
<div style="<?php
if (get_post_type() == 'post' OR get_post_type() == 'album') {
    echo 'background:white;';
}
?>" class="container-fluid cloud-divider">
    <!-- Clouds SVG Divider -->	
    <svg id="deco-clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
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
<footer>
    <div class="container-fluid">           
        <!-- Newsletter -->
        <div class="col-lg-4 col-md-6 text-center res-margin">
            <h6 class="text-light">Kids At Heart Events</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Inventore, perspiciatis adipisci accusamus laudantium odit 
                aliquam repellat tempore quos aspernatur vero.</p>		            
        </div>
        <!-- /col-lg-4 -->
        <!-- Bottom Credits -->

        <div class="col-lg-4 col-md-6 res-margin">
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
                <img src="<?php the_field('logo-img'); ?>"  alt="Kids At Heart Events Logo" class="center-block">
                    <?php } wp_reset_postdata(); ?>
            </a>
            <!-- social-icons -->	
            <div class="social-media">
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                <a href="#" title=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- /col-lg-4 -->
        <!-- Opening Hours -->
        <div class="col-lg-4 col-md-12 text-center">
            <!-- Sign-->
            <h6 class="text-light">Opening Hours:</h6>
            <!-- Table-->
            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-left">Monday to Friday</td>
                        <td class="text-right">7 a.m. to 7 p.m.</td>
                    </tr>
                    <tr>
                        <td class="text-left">Weekends / Holidays</td>
                        <td class="text-right"><span class="label label-danger">Closed</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /col-lg-4 -->
    </div>
    <!-- / container -->
    <hr>
        <p>Copyright © 2019 - Designed by  <a href="https://kaizerwebdesign.com" target="_blank"><strong class="pulser">KaizerWebDesign</strong></a></p>
        <!-- /container -->
        <!-- Go To Top Link -->
        <div class="page-scroll hidden-sm hidden-xs">
            <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
        </div>
</footer>
<!-- /footer ends -->
</div> <!-- /page width -->
<?php wp_footer(); ?>
</body>
</html>