<?php
/**
 * Theme Functions
 * @package WordPress
 * @subpackage Knowledge
 */

 /**
  * Theme Support
  */

if ( ! function_exists( 'knowledge_setup' ) ) :
	function knowledge_setup() {
		/*
		 * Wordpress provides the <title> tag for pages
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 386, 180 );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);
	}
endif;

add_action( 'after_setup_theme', 'knowledge_setup' );

/**
 * Enqueue scripts and styles
 */

function knowledge_scripts() {
	wp_enqueue_style('reboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css', array(), '4.3.1');
}

add_action( 'wp_enqueue_scripts', 'knowledge_scripts' );
