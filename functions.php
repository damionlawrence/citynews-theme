<?php 

function cn_css_styles() {
    wp_enqueue_style('google_font_opensans', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700');
    wp_enqueue_style('google_font_playfair', '//fonts.googleapis.com/css?family=Playfair+Display:400,700');
    wp_enqueue_style('font_awesome', get_theme_file_uri('/css/font-awesome.min.css'));
    wp_enqueue_style('vendor_style_mixitup', get_theme_file_uri('/css/vendor/mixitup.css'));
    wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');
    wp_enqueue_style('citynews_main_styles', get_stylesheet_uri()); 
}

add_action('wp_enqueue_scripts', 'cn_css_styles');


function cn_js_files() {
    wp_enqueue_script('functions', get_theme_file_uri('/js/functions.js'), true, 1.0, true);
    wp_enqueue_script('scroll_reveal', '//unpkg.com/scrollreveal/dist/scrollreveal.min.js', true, 2.0, true);
    wp_enqueue_script('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js', true, 3.4, true);
    wp_enqueue_script('jquery', get_theme_file_uri( '/js/jquery.js'), true, 1.0, true);
    wp_enqueue_script('mixitup', get_theme_file_uri('/js/vendor/jquery.mixitup.min.js'));
    wp_enqueue_script('jquery', get_theme_file_uri( '/js/jquery-2.1.1.js'), true, 2.1, true);
    wp_enqueue_script('main_js_file', get_theme_file_uri('/js/main.js'), true, 1.1, true);
}

add_action('wp_enqueue_scripts', 'cn_js_files');


function cn_features() {
    add_theme_support('title-tag');
    register_nav_menu('footerMenuLocationOne', 'Footer Menu One');
    register_nav_menu('footerMenuLocationTwo', 'Footer Menu Two');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1500, 550, true);
}

add_action('after_setup_theme', 'cn_features');















?>