<?php

//https://developer.wordpress.org/reference/functions/add_theme_support/ -->

add_theme_support('post-thumbnails');

// https://developer.wordpress.org/reference/functions/wp_enqueue_script/
// https://developer.wordpress.org/themes/basics/including-css-javascript/

// wp_enqueue_style('style', get_stylesheet_uri());


function aggiungi_style()
{
    wp_enqueue_style('font', 'https://fonts.googleapis.com');
    wp_enqueue_style('static', 'https://fonts.gstatic.com');
    wp_enqueue_style('fontFamily', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    wp_enqueue_style('fontFamily2', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap');
    wp_enqueue_style('awesome', '  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css');
    wp_enqueue_style('owcarousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), null, microtime());

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrapjscdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/lib/easing/easing.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'aggiungi_style');

?>