<?php
/**
 * Full Click functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package full-click
 */

function full_click_style() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/frameworks/bootstrap/bootstrap.css' );

	if(is_front_page()) {
		// fullpage for homepage only
		wp_enqueue_style( 'fullpage-css', get_stylesheet_directory_uri() . '/assets/frameworks/fullpage/fullpage.css' );

		wp_enqueue_script( 'jquery-scrolloverflow', get_stylesheet_directory_uri() . '/assets/frameworks/fullpage/scrolloverflow.js', array('jquery'), true );
		wp_enqueue_script( 'jquery-fullpage', get_stylesheet_directory_uri() . '/assets/frameworks/fullpage/fullpage.js', array('jquery'), true );

		wp_enqueue_script( 'business-click-custom-fullpage', get_stylesheet_directory_uri() . '/assets/custom/custom-fullpage.js', array('jquery'), true );
	}

	// parent theme style
	wp_enqueue_style( 'business-click-style', get_template_directory_uri() . '/style.css' );
	
	// theme style
	wp_enqueue_style( 'full-click-style',get_stylesheet_directory_uri() . '/style.css',array('business-click-style'));
}
add_action( 'wp_enqueue_scripts', 'full_click_style' );


// theme name
if ( ! function_exists ( 'business_click_theme_name' ) ) {
	function business_click_theme_name() {
		return esc_html__('Full Click','full-click');
	}
}