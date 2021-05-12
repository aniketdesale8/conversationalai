<?php
/**
 * Neve Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Neve Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */

add_action( 'wp_enqueue_scripts', 'child_enqueue' );

function child_enqueue() {

	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true);

	wp_enqueue_style( 'bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">' );

	wp_enqueue_style( 'uikit', get_template_directory_uri() . '/css/uikit.min.css');

    wp_enqueue_script( 'uikit', get_template_directory_uri() . '/js/uikit.min.js', array( 'jquery' ), '3.0.0.30', true );

    wp_enqueue_script( 'uikit-icons', get_template_directory_uri() . '/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0.30', true );
    
	wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');

}



