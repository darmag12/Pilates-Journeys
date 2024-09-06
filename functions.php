<?php 
function pilatesjourneys_files() {
     // Loading Styles
    wp_enqueue_style('pilatesjourneys_reset_styles', get_theme_file_uri('/vendors/normalize.css'));
    wp_enqueue_style('pilatesjourneys_bootstrap_css', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('pilatesjourneys_main_styles', get_theme_file_uri('/build/main.css'));
    wp_enqueue_style('pilatesjourneys_styles_css', get_stylesheet_directory_uri().'/style.css', array('pilatesjourneys_main_styles'), '1.0');

    // Loading Scripts
    wp_enqueue_script('pilatesjourneys_font_awesome', '//kit.fontawesome.com/3ea00495fc.js');
    wp_enqueue_script('pilatesjourneys_popper_js', '//cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js');
    wp_enqueue_script('pilatesjourneys_bootstrap_min_js', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('pilatesjourneys_map_js', get_theme_file_uri('/build/map.js'));
    wp_enqueue_script('pilatesjourneys_main_js', get_theme_file_uri('/build/main.js'), array('pilatesjourneys_map_js'));
}

add_action('wp_enqueue_scripts', 'pilatesjourneys_files');

function pilatesjourneys_features() {
    // register_nav_menu('topLevelMenu', 'Top Level Menu');
    add_theme_support('title-tag');
    // adds a featured image feature
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'pilatesjourneys_features');