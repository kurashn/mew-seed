<?php
/**
 * Theme functions and definitions
 */

if ( ! function_exists( 'maw_seed_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function maw_seed_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'maw-seed' ),
			)
		);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'maw_seed_setup' );

/**
 * Enqueue scripts and styles.
 */
function maw_seed_scripts() {
	// Google Fonts
	wp_enqueue_style( 'maw-seed-fonts', 'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null );
	
	// Font Awesome (used in contact etc.)
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

	// Main Stylesheet
	wp_enqueue_style( 'maw-seed-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );

	// Main JavaScript
	wp_enqueue_script( 'maw-seed-script', get_template_directory_uri() . '/script.js', array(), wp_get_theme()->get('Version'), true );
}
add_action( 'wp_enqueue_scripts', 'maw_seed_scripts' );
