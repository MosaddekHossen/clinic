<?php

/**
 * Essential theme supports
 * */
function theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');
}
add_action('after_setup_theme', 'theme_setup');

// clinic_add_theme_scripts
function clinic_add_theme_scripts()
{
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.1', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all');
    wp_enqueue_style('tempusdominus', get_template_directory_uri() . '/assets/css/tempusdominus-bootstrap-4.min.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style('clinic-main', get_template_directory_uri() . '/assets/css/style.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/easing.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('moment', get_template_directory_uri() . '/assets/js/moment.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('timezone', get_template_directory_uri() . '/assets/js/moment-timezone.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('tempusdominus', get_template_directory_uri() . '/assets/js/tempusdominus-bootstrap-4.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('clinic-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 1.1, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'clinic_add_theme_scripts');
