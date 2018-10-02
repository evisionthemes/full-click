<?php
/**
 *Recommended way to include parent theme styles.
 *(Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 */  


function full_click_style() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/frameworks/bootstrap/bootstrap.css' );

	wp_enqueue_style( 'business-click-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'full-click-style',get_stylesheet_directory_uri() . '/style.css',array('business-click-style'));
}
add_action( 'wp_enqueue_scripts', 'full_click_style' );


/**
 *Your code goes below
 */

