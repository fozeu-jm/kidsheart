<?php

function theme_post_types() {
    register_post_type('album', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'albums'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Albums',
            'add_new_item' => 'Add New Album',
            'edit_item' => 'Edit Album',
            'all_items' => 'All Albums',
            'singular_name' => 'Album'
        ),
        'menu_icon' => 'dashicons-format-gallery',
    ));

    register_post_type('slider', array(
        'rewrite' => array('slug' => 'Diaporama'),
        'public' => true,
        'supports' => 'title',
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Diaporama',
            'add_new_item' => 'Ajouter une diapositive',
            'edit_item' => 'Modifier diapositive',
            'all_items' => 'Toutes les diapositives',
            'singular_name' => 'Diaporama'
        ),
        'menu_icon' => 'dashicons-slides',
    ));

    register_post_type('service', array(
        'rewrite' => array('slug' => 'service'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => 'Ajouter un service',
            'edit_item' => 'Modifier un service',
            'all_items' => 'Tous vos services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-pressthis',
    ));

    register_post_type('testimonial', array(
        'rewrite' => array('slug' => 'testimonial'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Témoignage',
            'add_new_item' => 'Ajouter un Témoignage',
            'edit_item' => 'Modifier un témoignage',
            'all_items' => 'Tous vos Témoignages',
            'singular_name' => 'Témoignage'
        ),
        'menu_icon' => 'dashicons-format-quote',
    ));

    register_post_type('team', array(
        'rewrite' => array('slug' => 'Equipe'),
        'public' => true,
        'has_archive' => true,
        'taxonomies' => array('category'),
        'labels' => array(
            'name' => 'Equipe',
            'add_new_item' => 'Ajouter un membre',
            'edit_item' => 'Modifier membre',
            'all_items' => 'Toutes l\'equipe',
            'singular_name' => 'Equipe'
        ),
        'menu_icon' => 'dashicons-groups',
    ));
}

add_action('init', 'theme_post_types');

