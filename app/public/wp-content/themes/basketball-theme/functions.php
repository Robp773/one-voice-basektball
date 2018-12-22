<?php

function ovb_files(){
    // wp_enqueue_script('main-ovb-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=PT+Sans');
    wp_enqueue_style('normalize.css', '//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css');
    wp_enqueue_style('ovb_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ovb_files');

function ovb_features(){
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'ovb_features');

add_action('init', 'ovb_post_types');


?>