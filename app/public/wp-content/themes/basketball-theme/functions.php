<?php

function ovb_files(){
    wp_enqueue_script('main-ovb-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
    wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=PT+Sans');
    wp_enqueue_style('normalize.css', '//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css');
    wp_enqueue_style('ovb_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ovb_files');

function ovb_features(){
    add_theme_support('title-tag');
    add_theme_support( 'post-thumbnails' ); 
}

add_action('after_setup_theme', 'ovb_features');

function custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function ovb_adjust_queries($query) {
    // notes archive
    if (!is_admin() AND is_post_type_archive('note') AND $query->is_main_query()) {
        $query->set( 'meta_key', 'date' ); 
        $query->set( 'orderby', 'meta_value' ); 
        $query->set( 'order', 'DESC' ); 
    } 

    if (!is_admin() AND is_post_type_archive('drill-type') AND $query->is_main_query()) {
        $query->set( 'order', 'ASC' ); 
        $query->set( 'orderby', 'title' );
        $query->set( 'posts_per_page', '-1' );
    } 

}


add_action('pre_get_posts', 'ovb_adjust_queries');

// Changing excerpt more
function new_excerpt_more($more) {
    global $post;
    return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

add_action('wp_ajax_mail_before_submit', 'ovb_send_mail_before_submit');
add_action('wp_ajax_nopriv_mail_before_submit', 'ovb_send_mail_before_submit');

function ovb_send_mail_before_submit(){
    check_ajax_referer('my_email_ajax_nonce');
    if ( isset($_POST['action']) && $_POST['action'] == "mail_before_submit" ){

        wp_mail($_POST['toemail'],'New OVBA Order', $_POST['msg']);
        echo $_POST['msg'];
        die();
    }
    echo 'error';
    die();
}

?>