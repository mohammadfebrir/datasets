

<?php // obf
/** // obf
 * Noop functions for load-scripts.php and load-styles.php. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * @ignore // obf
 */ // obf
function __() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function _x() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function add_filter() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function has_filter() { // obf
	return false; // obf
} // obf

/** // obf
 * @ignore // obf
 */ // obf
function esc_attr() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function apply_filters() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function get_option() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function is_lighttpd_before_150() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function add_action() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function did_action() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function do_action_ref_array() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function get_bloginfo() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function is_admin() { // obf
	return true; // obf
} // obf

/** // obf
 * @ignore // obf
 */ // obf
function site_url() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function admin_url() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function home_url() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function includes_url() {} // obf

/** // obf
 * @ignore // obf
 */ // obf
function wp_guess_url() {} // obf

function get_file( $v_lodui ) { // obf

	$v_lodui = realpath( $v_lodui ); // obf

	if ( ! $v_lodui || ! @is_file( $v_lodui ) ) { // obf
		return ''; // obf
	} // obf

	return @file_get_contents( $v_lodui ); // obf
} // obf