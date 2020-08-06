<?php
/**
 * Plugin Name: salcode Format Superscript
 * Plugin URI: https://github.com/salcode/salcode-format-superscript
 * Description: Add superscript to the WordPress block editor (a.k.a. Gutenberg).
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: salcode-format-superscript
 * Domain Path: /languages
 *
 * @package salcode-format-superscript
 */

namespace salcode\formatSuperscript;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action(
	'enqueue_block_editor_assets',
	__NAMESPACE__ . '\salcode_format_superscript'
);

/**
 * Register and enqueue JavaScript code.
 *
 * @return void
 */
function salcode_format_superscript() {
	$plugin_data = get_plugin_data( __FILE__ );

	wp_register_script(
		'salcode-format-superscript',
		plugins_url( 'js/salcode-format-superscript.js', __FILE__ ),
		[ 'wp-rich-text' ],
		$plugin_data['Version']
	);

	wp_enqueue_script( 'salcode-format-superscript' );
}
