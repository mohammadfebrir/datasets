

<?php // obf
/** // obf
 * WordPress Network Administration Bootstrap // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

define( 'WP_NETWORK_ADMIN', true ); // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once dirname( __DIR__ ) . '/admin.php'; // obf

// Do not remove this check. It is required by individual network admin pages. // obf
if ( ! is_multisite() ) { // obf
	wp_die( __( 'Multisite support is not enabled.' ) ); // obf
} // obf

$v_xefuj = ( 0 !== strcasecmp( $v_nbaqz->domain, $v_csvyd->domain ) || 0 !== strcasecmp( $v_nbaqz->path, $v_csvyd->path ) ); // obf

/** // obf
 * Filters whether to redirect the request to the Network Admin. // obf
 * // obf
 * @since 3.2.0 // obf
 * // obf
 * @param bool $v_xefuj Whether the request should be redirected. // obf
 */ // obf
$v_xefuj = apply_filters( 'redirect_network_admin_request', $v_xefuj ); // obf

if ( $v_xefuj ) { // obf
	wp_redirect( network_admin_url() ); // obf
	exit; // obf
} // obf

unset( $v_xefuj ); // obf