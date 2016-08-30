<?php
/**
* WP Bootstrap Loader
*
* @package wp-bootstrap-loader
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! class_exists( 'WP_Bootstrap_Loader' ) ) {

class WP_Bootstrap_Loader() {

/**
 * Loads Bootstrap & Font Awesome Stylesheet & Scripts.
 *
 * @access public
 * @return void
 */
function bootstrap_scripts() {
	if ( ! is_admin() ) {
		// Font Awesome CSS.
		wp_register_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', '', null, 'all' );
		wp_enqueue_style( 'font-awesome' );
		// Twitter Bootstrap CSS.
		wp_register_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', '', null, 'all' );
		wp_enqueue_style( 'bootstrap' );
		// Twitter Bootstrap Javascript.
		wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 'jquery', null, true );
		wp_enqueue_script( 'bootstrap' );
		
		// Google Webfont.
		wp_register_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', null, null, true );
		wp_enqueue_script( 'webfont' );
	}
}
add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );

/**
 * Loads Bootstrap & Font-Awesome CSS in WordPress editor.
 *
 * @access public
 * @return void
 */
function bootstrap_editor_css() {

		// Support Custom Editor CSS.
		
		add_editor_style( array(
			'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
			'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
		));
	}

}

}
