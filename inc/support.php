<?php 

// Theme Support 

function sd_theme_support(){
    
    // LOGO
    add_theme_support( 'custom-logo' );

}

add_action('after_setup_theme', 'sd_theme_support');

function register_my_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu' ),
        'footer_menu' => __( 'Footer Menu' )
       )
     );
   }
   add_action( 'init', 'register_my_menus' );