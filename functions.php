<?php 
/**
 * Theme functions
 * 
 * @package Aquila
 */

 function aquila_enqueue_scripts() {
    
     //wp_enqueue_style('main', get_template_directory_uri() . 'main.css', ['stylesheet']); // load extra files. Dependency: stylesheet
     //Add stylesheet file.Name = stylesheet, Version = modified date of the stylesheet file, All media
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
 }

 add_action('wp_enqueue_scripts', 'aquila_enqueue_scripts')

 ?>