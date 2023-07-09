<?php 

function alpha_repair_theme_support() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'alpha_repair_theme_support');

// adding the CSS and JS files

function gt_setup() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap' );
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script( "main", get_theme_file_uri( '/js/main.js' ), NULL, microtime(), true );
}

add_action('wp_enqueue_scripts', 'gt_setup'); 