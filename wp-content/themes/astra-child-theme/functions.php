<?php

/**
 * Astra Child Theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child Theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_THEME_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	wp_enqueue_style('astra-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_THEME_VERSION, 'all');
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

// custom codes 
function files_to_enqueue()
{
	wp_enqueue_style('test-style', get_stylesheet_directory_uri() . '/assets/css/style-child.css', array('astra-theme-css', 'astra-child-theme-theme-css'), time(), false, 'all');
	wp_enqueue_style('slick-style', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array('astra-theme-css', 'astra-child-theme-theme-css'), time(), false, 'all');

	// wp_enqueue_script('test-style', get_stylesheet_directory_uri() . '/assets/js/style-child.js', array( )
	wp_enqueue_script('jquery');

	wp_enqueue_script('test-script', get_stylesheet_directory_uri() . '/assets/js/style-child.js', array('jquery'), time(), true);
	wp_enqueue_script('slick-script', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), time(), true);
}


add_action('wp_enqueue_scripts', 'files_to_enqueue');
