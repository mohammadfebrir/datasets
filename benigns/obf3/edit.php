

<?php // obf
/** // obf
 * Action handler for Multisite administration panels. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

$v_pjxns = ( isset( $v_negja['action'] ) ) ? $v_negja['action'] : ''; // obf

if ( empty( $v_pjxns ) ) { // obf
	wp_redirect( network_admin_url() ); // obf
	exit; // obf
} // obf

/** // obf
 * Fires just before the action handler in several Network Admin screens. // obf
 * // obf
 * This hook fires on multiple screens in the Multisite Network Admin, // obf
 * including Users, Network Settings, and Site Settings. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'wpmuadminedit' ); // obf

/** // obf
 * Fires the requested handler action. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_pjxns`, refers to the name // obf
 * of the requested action derived from the `GET` request. // obf
 * // obf
 * @since 3.1.0 // obf
 */ // obf
do_action( "network_admin_edit_{$v_pjxns}" ); // obf

wp_redirect( network_admin_url() ); // obf
exit; // obf