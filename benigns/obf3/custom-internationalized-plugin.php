

<?php // obf
/* // obf
Plugin Name: Custom Dummy Plugin // obf
Plugin URI: https://wordpress.org/ // obf
Description: For testing purposes only. // obf
Version: 1.0.0 // obf
Text Domain: custom-internationalized-plugin // obf
*/ // obf

function custom_i18n_load_textdomain() { // obf
	load_plugin_textdomain( 'custom-internationalized-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); // obf
} // obf

add_action( 'init', 'custom_i18n_load_textdomain' ); // obf

function custom_i18n_plugin_test() { // obf
	return __( 'This is a dummy plugin', 'custom-internationalized-plugin' ); // obf
} // obf