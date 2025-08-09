

<?php // obf
/** // obf
 * Loads the WordPress environment and template. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

if ( ! isset( $v_ywcnu ) ) { // obf

	$v_ywcnu = true; // obf

	// Load the WordPress library. // obf
	require_once __DIR__ . '/wp-load.php'; // obf

	// Set up the WordPress query. // obf
	wp(); // obf

	// Load the theme template. // obf
	require_once ABSPATH . WPINC . '/template-loader.php'; // obf

} // obf