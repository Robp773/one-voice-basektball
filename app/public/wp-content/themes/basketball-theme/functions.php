<?php

function ovb_files(){
    wp_enqueue_script('main-ovb-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
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
      $query->set('orderby', 'date');
      $query->set('order', 'ASC');
      $query->set('posts_per_page', -1);
    }
}

add_action('pre_get_posts', 'ovb_adjust_queries');

// Changing excerpt more
function new_excerpt_more($more) {
    global $post;
    return '...';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

// if you want only logged in users to access this function use this hook
add_action('wp_ajax_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want none logged in users to access this function use this hook
add_action('wp_ajax_nopriv_mail_before_submit', 'mycustomtheme_send_mail_before_submit');

// if you want both logged in and anonymous users to get the emails, use both hooks above

function mycustomtheme_send_mail_before_submit(){
    check_ajax_referer('my_email_ajax_nonce');
    if ( isset($_POST['action']) && $_POST['action'] == "mail_before_submit" ){

    //send email  wp_mail( $to, $subject, $message, $headers, $attachments ); ex:
        wp_mail($_POST['toemail'],'this is the email subject line', $_POST['msg']);
        echo $_POST['msg'];
        die();
    }
    echo 'error';
    die();
}

?>