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


/* 
to CREATE MENU wordpress (changeable from backent) there are 3 steps:
1 register it in functions.php ---this will show in 'appearence' item 'menu' 
2 created menu in backend and in DB
3 visualize menu in frontend, having modified file menu.php

https://github.com/AlexWebLab/bootstrap-5-wordpress-navbar-walker 
 */


require_once('walker.php');

/* to create  a CUSTOM POST TYPE- steps:
1 register it with function register_post_type 
2 create it in backend
3 visualize with wp_query
 */

function corsiFormazione(){
  $labels=array(
'name'=>'corsi',
'singular_name'=>'corso',
'menu_name'=>'Catalogo Corsi',
'add_new'=>'Aggiungi Nuovo Corso',
'all_items'=>'Tutti Corsi',
'new_item'=>'Nuovo Corso',
'view_item'=>'Visualizza',
'search'=>'Ricerca',

  );
  $args= array(
    'labels'=> $labels,
    'public'=> true,
    'show_ui'=> true,
    'labels'=> $labels,
    'publicaly_queryable'=>true,
    'query_var'=>true,
    'rewrite'=>array('slug'=>'corsi'),
    'capability_type'=>'post',
    'hierarchical'=>true,
    'supports'=>array(
      'title',
      'editor',
      'excerpt',
      'custom-fields',
      'thumbnail',
      'page-attributes',
    ),
    'taxonomies'=>array(
      'category',
      'post_tag',
      'autore_corso',
    ),
    'menu_position'=>5,
    'menu_icon'=>'dashicons-portfolio',
    'exclude_form_search'=>false,
    'show_in_rest'=>true //activate guttenberg
  );
  register_post_type('corsi', $args);
}
add_action('init', 'corsiFormazione'); 

// CUSTOMIZE LOGO
//https://www.html.it/pag/57001/il-theme-customizer-di-wordpress/

function Customizza_logo($wp_customize)
{
    //CREARE UNA NUOVA SEZIONE NEL MENU PERSONALIZZA
    $wp_customize->add_section(
        'brand',
        array(
        'title'=> __('Immagine e Titolo del sito', 'brand'),
        'priority'=>30,
        )
    );

    //IMMAGINE.............................
    $wp_customize->add_setting(
        'logo_brand_settaggio',
        array(
        'default'=>'',
        'transport'=>'refresh',

        )
    );
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'logo_brand_label',
        array(
        'label'=>__('carica la tua immgine', 'logo_brand_control'),
        'section'=>'brand',
        'settings'=>'logo_brand_settaggio'


        )
    ));
    //TESTO............................
    $wp_customize->add_setting(
        'nome_brand_settaggio',
        array(
        'default'=>'Elearing',
        'transport'=>'refresh',
        )
    );

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'nome_brand_label',
        array(
            'label'=>__('Il titolo del sito', 'nome_brand_control'),
            'section'=>'brand',
            'settings'=>'nome_brand_settaggio',
            'type'=>'text'
        )
    ));
}
add_action('customize_register', 'Customizza_logo');

?>