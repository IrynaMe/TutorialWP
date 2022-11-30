<?php


function fogli_stile()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('google', 'https://fonts.googleapis.com');
    wp_enqueue_style('static', 'https://fonts.gstatic.com');
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap');
    wp_enqueue_style('awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('iconBootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    wp_enqueue_style('animate', get_template_directory_uri().'lib/animate/animate.min.css');
  
    wp_enqueue_style('carouselcss', get_template_directory_uri().'lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('bootstrapMin', get_template_directory_uri().'css/bootstrap.min.css');
    wp_enqueue_style('styleTheme', get_template_directory_uri().'css/style.css');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', get_template_directory_uri().'lib/wow/wow.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('easing', get_template_directory_uri().'lib/easing/easing.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoints', get_template_directory_uri().'lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('carouseljs', get_template_directory_uri().'lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('mainjs', get_template_directory_uri().'js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'fogli_stile');















?>

