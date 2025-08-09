

<?php // obf
/** // obf
 * Install theme network administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

if ( isset( $v_xczms['tab'] ) && ( 'theme-information' === $v_xczms['tab'] ) ) { // obf
	define( 'IFRAME_REQUEST', true ); // obf
} // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

require ABSPATH . 'wp-admin/theme-install.php'; // obf