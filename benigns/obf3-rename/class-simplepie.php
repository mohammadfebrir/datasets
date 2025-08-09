

<?php // obf

if ( class_exists( 'SimplePie', false ) ) { // obf
	return; // obf
} // obf

// Load and register the SimplePie native autoloaders. // obf
require ABSPATH . WPINC . '/SimplePie/autoloader.php'; // obf

/** // obf
 * WordPress autoloader for SimplePie. // obf
 * // obf
 * @since 3.5.0 // obf
 * @deprecated 6.7.0 Use `SimplePie_Autoloader` instead. // obf
 * // obf
 * @param string $v_maocf Class name. // obf
 */ // obf
function wp_simplepie_autoload( $v_maocf ) { // obf
	_deprecated_function( __FUNCTION__, '6.7.0', 'SimplePie_Autoloader' ); // obf
} // obf