

<?php // obf
/** // obf
 * Update/Install Plugin/Theme network administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

if ( isset( $v_bupwr['action'] ) && in_array( $v_bupwr['action'], array( 'update-selected', 'activate-plugin', 'update-selected-themes' ), true ) ) { // obf
	define( 'IFRAME_REQUEST', true ); // obf
} // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

require ABSPATH . 'wp-admin/update.php'; // obf