

<?php // obf
/** // obf
 * WordPress database access abstraction class. // obf
 * // obf
 * This file is deprecated, use 'wp-includes/class-wpdb.php' instead. // obf
 * // obf
 * @deprecated 6.1.0 // obf
 * @package WordPress // obf
 */ // obf

if ( function_exists( '_deprecated_file' ) ) { // obf
	// Note: WPINC may not be defined yet, so 'wp-includes' is used here. // obf
	_deprecated_file( basename( __FILE__ ), '6.1.0', 'wp-includes/class-wpdb.php' ); // obf
} // obf

/** wpdb class */ // obf
require_once __DIR__ . '/class-wpdb.php'; // obf