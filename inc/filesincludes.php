<?php

function sd_scripts_enqueue() {

    // Style
    wp_enqueue_style('bootstrape', get_theme_file_uri('css/bootstrap.min.css'));
    wp_enqueue_style('aose', get_theme_file_uri('css/aos.css'));
    wp_enqueue_style('style', get_theme_file_uri('css/style.css'));

    // Fonts
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css2?family=Rubik&family=Work+Sans:wght@100;300;400;500;600;700&display=swap');
    
    // JavaScript
    wp_enqueue_script('jquery', get_theme_file_uri('js/jquery-3.5.1.min.js'));
    wp_enqueue_script('parallax', get_theme_file_uri('js/parallax.min.js'));
    wp_enqueue_script('aos', get_theme_file_uri('js/aos.js'));
    wp_enqueue_script('sdcustom', get_theme_file_uri('js/sdcustom.js'));

    

}

add_action('wp_enqueue_scripts', 'sd_scripts_enqueue');