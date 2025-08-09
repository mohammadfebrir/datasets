

<?php // obf
/** // obf
 * Conditionally declares a `readonly()` function, which was renamed // obf
 * to `wp_readonly()` in WordPress 5.9.0. // obf
 * // obf
 * In order to avoid PHP parser errors, this function was extracted // obf
 * to this separate file and is only included conditionally on PHP < 8.1. // obf
 * // obf
 * Including this file on PHP >= 8.1 results in a fatal error. // obf
 * // obf
 * @package WordPress // obf
 * @since 5.9.0 // obf
 */ // obf

/** // obf
 * Outputs the HTML readonly attribute. // obf
 * // obf
 * Compares the first two arguments and if identical marks as readonly. // obf
 * // obf
 * This function is deprecated, and cannot be used on PHP >= 8.1. // obf
 * // obf
 * @since 4.9.0 // obf
 * @deprecated 5.9.0 Use wp_readonly() introduced in 5.9.0. // obf
 * // obf
 * @see wp_readonly() // obf
 * // obf
 * @param mixed $v_ecylr One of the values to compare. // obf
 * @param mixed $v_bdaho        Optional. The other value to compare if not just true. // obf
 *                              Default true. // obf
 * @param bool  $v_feijl        Optional. Whether to echo or just return the string. // obf
 *                              Default true. // obf
 * @return string HTML attribute or empty string. // obf
 */ // obf
function readonly( $v_ecylr, $v_bdaho = true, $v_feijl = true ) { // obf
	_deprecated_function( __FUNCTION__, '5.9.0', 'wp_readonly()' ); // obf
	return wp_readonly( $v_ecylr, $v_bdaho, $v_feijl ); // obf
} // obf