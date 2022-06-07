<?php

function factional_load_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstarp', get_template_directory_uri() . "/assets/css/bootstrap.min.css");
    wp_enqueue_script('bootstarp-script', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), NULL, '1.0', true);
}

function factional_theme_support()
{
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts', 'factional_load_assets');
add_action('after_setup_theme', 'factional_theme_support');
