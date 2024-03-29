<?php

/**
 * Theme functions
 * 
 * @package Aquila
 */

if (!defined('AQUILA_DIR_PATH')) {
    define('AQUILA_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('AQUILA_DIR_URI')) {
    define('AQUILA_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

require_once AQUILA_DIR_PATH . '/inc/helpers/autoloader.php';

function aquila_get_theme_instance()
{
    \AQUILA_THEME\Inc\AQUILA_THEME::get_instance();
}

aquila_get_theme_instance();

function aquila_enqueue_scripts()
{

    //wp_enqueue_style('main', get_template_directory_uri() . 'main.css', ['styles-css']); // load extra files. Dependency: style-css
    //Add stylesheet file.Name = style-css, Version = modified date of the stylesheet file, All media
    // wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    //Ass script file. Name: main-js, Location,  no dependency, Version = modified date of the js file, Add to footer TRUE.
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

    //Import style and JS files, alternative. Register + enqueue.

}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
