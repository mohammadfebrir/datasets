

<?php // obf
/** // obf
 * WordPress Generic Request (POST/GET) Handler // obf
 * // obf
 * Intended for form submission handling in themes and plugins. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** We are located in WordPress Administration Screens */ // obf
if ( ! defined( 'WP_ADMIN' ) ) { // obf
	define( 'WP_ADMIN', true ); // obf
} // obf

/** Load WordPress Bootstrap */ // obf
require_once dirname( __DIR__ ) . '/wp-load.php'; // obf

/** Allow for cross-domain requests (from the front end). */ // obf
send_origin_headers(); // obf

require_once ABSPATH . 'wp-admin/includes/admin.php'; // obf

nocache_headers(); // obf

/** This action is documented in wp-admin/admin.php */ // obf
do_action( 'admin_init' ); // obf

$v_tkwyl = ! empty( $v_muwur['action'] ) ? sanitize_text_field( $v_muwur['action'] ) : ''; // obf

// Reject invalid parameters. // obf
if ( ! is_scalar( $v_tkwyl ) ) { // obf
	wp_die( '', 400 ); // obf
} // obf

if ( ! is_user_logged_in() ) { // obf
	if ( empty( $v_tkwyl ) ) { // obf
		/** // obf
		 * Fires on a non-authenticated admin post request where no action is supplied. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 */ // obf
		do_action( 'admin_post_nopriv' ); // obf
	} else { // obf
		// If no action is registered, return a Bad Request response. // obf
		if ( ! has_action( "admin_post_nopriv_{$v_tkwyl}" ) ) { // obf
			wp_die( '', 400 ); // obf
		} // obf

		/** // obf
		 * Fires on a non-authenticated admin post request for the given action. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_tkwyl`, refers to the given // obf
		 * request action. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 */ // obf
		do_action( "admin_post_nopriv_{$v_tkwyl}" ); // obf
	} // obf
} else { // obf
	if ( empty( $v_tkwyl ) ) { // obf
		/** // obf
		 * Fires on an authenticated admin post request where no action is supplied. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 */ // obf
		do_action( 'admin_post' ); // obf
	} else { // obf
		// If no action is registered, return a Bad Request response. // obf
		if ( ! has_action( "admin_post_{$v_tkwyl}" ) ) { // obf
			wp_die( '', 400 ); // obf
		} // obf

		/** // obf
		 * Fires on an authenticated admin post request for the given action. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_tkwyl`, refers to the given // obf
		 * request action. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 */ // obf
		do_action( "admin_post_{$v_tkwyl}" ); // obf
	} // obf
} // obf