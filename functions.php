<?php
/**
 * Full Click functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package full-click
 */

if(!function_exists('full_click_setup') ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function full_click_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'full-click', get_stylesheet_directory() . '/languages' );
	}

endif;

add_action( 'after_setup_theme', 'full_click_setup' );

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

// default slider
if ( ! function_exists ( 'business_click_default_slider_value' ) ) {
	function business_click_default_slider_value() {
		// displaying these defaults if uncategoried post is not present at first
		$default_feature_slideer_array[]  =  array(
          'business-click-feature-title'    => esc_html__('WHAT YOU SEE IS WHAT YOU GET', 'full-click'),
          'business-click-feature-content'  => esc_html__('This is your dummy post. Please select A static page from Customizer - Homepage Settings - Homepage.', 'full-click'),
          'business-click-feature-image'    => get_stylesheet_directory_uri() . '/assets/img/slider.jpg',
          'business-click-feature-url'      => '#'
        );
		return $default_feature_slideer_array;
	}
}