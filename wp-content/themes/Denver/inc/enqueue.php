<?php
/**
 * Understrap enqueue scripts
 *
 * @package denver
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'denver_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function denver_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'denver-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'denver-jq-css', get_theme_file_uri( 'css/justifiedGallery.min.css' ), null, $theme_version );
		wp_enqueue_style( 'denver-css', get_stylesheet_uri(), null, time() );
		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'denver-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'denver-jg-script', get_theme_file_uri( 'js/jquery.justifiedGallery.min.js' ), array('jquery'), $js_version, true );
		wp_enqueue_script( 'denver-custom-script', get_theme_file_uri( 'js/script.js' ), array('jquery'), time(), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'denver_scripts' ).

add_action( 'wp_enqueue_scripts', 'denver_scripts' );
