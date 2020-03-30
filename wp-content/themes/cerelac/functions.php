<?php

function theme_resources() {

    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.css'));
    wp_enqueue_style('lightboxcss', get_theme_file_uri('css/lightbox.css'));
    wp_enqueue_style('fontawesome', get_theme_file_uri('fonts/font-awesome/css/font-awesome.min.css'));
    wp_enqueue_style('flaticons', get_theme_file_uri('fonts/flaticons/flaticon.css'));
    wp_enqueue_style('magnific', get_theme_file_uri('css/magnific-popup.css'));
    wp_enqueue_style('glyphicons', get_theme_file_uri('fonts/glyphicons/bootstrap-glyphicons.css'));
    wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,800');
    wp_enqueue_style('Lato');
    wp_register_style('Alegraya', 'https://fonts.googleapis.com/css?family=Alegreya+Sans:700,900');
    wp_enqueue_style('Alegraya');

    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('owl', get_theme_file_uri('css/owl.carousel.css'));

    wp_enqueue_style('layer', get_theme_file_uri('layerslider/css/layerslider.css'));

    wp_enqueue_style('funtime', get_theme_file_uri('styles/funtime.css'));

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_theme_file_uri('js/jquery.min.js'), NULL, '.3.3.1', true);

    wp_enqueue_script('boot', get_theme_file_uri('js/bootstrap.min.js'), array('jquery'), '1.0', true);
    wp_register_script('maps', 'https://maps.googleapis.com/maps/api/js?v=3', null, '1.0', TRUE);
    wp_enqueue_script('maps');
    wp_enqueue_script('plugins', get_theme_file_uri('js/plugins.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('isotope', get_theme_file_uri('js/jquery.isotope.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('greensock', get_theme_file_uri('layerslider/js/greensock.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('transition', get_theme_file_uri('layerslider/js/layerslider.transitions.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('kreateur', get_theme_file_uri('layerslider/js/layerslider.kreaturamedia.jquery.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('lightbox', get_theme_file_uri('js/lightbox.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('popup', get_theme_file_uri('js/jquery.magnific-popup.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_resources');

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}

add_action('after_setup_theme', 'theme_features');

add_filter('show_admin_bar', '__return_false');

add_filter('login_headerurl','header_url');


/*---------------------------------------------------------------------------------------*/

function header_url () {
    return esc_url(site_url('/'));
}

add_action('login_enqueue_scripts','login_css');

function login_css(){
    wp_enqueue_style('owltheme', get_theme_file_uri('css/login.css'));
}

function logintitle(){
    return 'Powered by KaizerWebDesign';
}

add_filter('login_headertitle', 'logintitle');
