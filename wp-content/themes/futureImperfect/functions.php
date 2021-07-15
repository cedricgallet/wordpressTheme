<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Charger la feuille de style

function futureImperfect(){
    wp_enqueue_style("maincss", get_template_directory_uri() . '/assets/css/main.css' );
    wp_enqueue_script("jquery", get_template_directory_uri() . '/assets/js/jquery.min.js',array (  ), 1.1, true); 
    wp_enqueue_script('browser', get_template_directory_uri() . '/assets/js/browser.min.js',array (  ), 1.1, true);
    wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js',array (  ), 1.1, true);
    wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js',array (  ), 1.1, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js',array (  ), 1.1, true);


}
    add_action('wp_enqueue_scripts', 'futureImperfect');

//ajouter un menu thème
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'Menu Principal' ));
    }
    add_action( 'init', 'wpb_custom_new_menu' );

// Pagination


