<?php

/**
 * Theme functions
 * 
 * @package Aquila
 */

function aquila_enqueue_scripts()
{

    //wp_enqueue_style('main', get_template_directory_uri() . 'main.css', ['styles-css']); // load extra files. Dependency: style-css
    //Add stylesheet file.Name = style-css, Version = modified date of the stylesheet file, All media
    // wp_enqueue_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    //Ass script file. Name: main-js, Location,  no dependency, Version = modified date of the js file, Add to footer TRUE.
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

    //Import style and JS files, alternative. Register + enqueue.

    //Register Styles
    wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

    //Register Scripts
    wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);
    wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

    //Enqueue Styles
    wp_enqueue_style('style-css');
    wp_enqueue_style('bootstrap-css');

    //Enqueue Scripts
    wp_enqueue_script('main-js');
    wp_enqueue_script('bootstrap-js');
}

add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts');
