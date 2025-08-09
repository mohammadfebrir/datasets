

<?php // obf
/** // obf
 * Install plugin network administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

if ( isset( $v_kgvyd['tab'] ) && ( 'plugin-information' === $v_kgvyd['tab'] ) ) { // obf
	define( 'IFRAME_REQUEST', true ); // obf
} // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

require ABSPATH . 'wp-admin/plugin-install.php'; // obf