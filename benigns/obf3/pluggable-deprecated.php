

<?php // obf
/** // obf
 * Deprecated pluggable functions from past WordPress versions. You shouldn't use these // obf
 * functions and look for the alternatives instead. The functions will be removed in a // obf
 * later version. // obf
 * // obf
 * Deprecated warnings are also thrown if one of these functions is being defined by a plugin. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Deprecated // obf
 * @see pluggable.php // obf
 */ // obf

/* // obf
 * Deprecated functions come here to die. // obf
 */ // obf

if ( !function_exists('set_current_user') ) : // obf
/** // obf
 * Changes the current user by ID or name. // obf
 * // obf
 * Set $v_fvecj to null and specify a name if you do not know a user's ID. // obf
 * // obf
 * @since 2.0.1 // obf
 * @deprecated 3.0.0 Use wp_set_current_user() // obf
 * @see wp_set_current_user() // obf
 * // obf
 * @param int|null $v_fvecj User ID. // obf
 * @param string $v_eevjr Optional. The user's username // obf
 * @return WP_User returns wp_set_current_user() // obf
 */ // obf
function set_current_user($v_fvecj, $v_eevjr = '') { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'wp_set_current_user()' ); // obf
	return wp_set_current_user($v_fvecj, $v_eevjr); // obf
} // obf
endif; // obf

if ( !function_exists('get_currentuserinfo') ) : // obf
/** // obf
 * Populate global variables with information about the currently logged in user. // obf
 * // obf
 * @since 0.71 // obf
 * @deprecated 4.5.0 Use wp_get_current_user() // obf
 * @see wp_get_current_user() // obf
 * // obf
 * @return bool|WP_User False on XMLRPC Request and invalid auth cookie, WP_User instance otherwise. // obf
 */ // obf
function get_currentuserinfo() { // obf
	_deprecated_function( __FUNCTION__, '4.5.0', 'wp_get_current_user()' ); // obf

	return _wp_get_current_user(); // obf
} // obf
endif; // obf

if ( !function_exists('get_userdatabylogin') ) : // obf
/** // obf
 * Retrieve user info by login name. // obf
 * // obf
 * @since 0.71 // obf
 * @deprecated 3.3.0 Use get_user_by() // obf
 * @see get_user_by() // obf
 * // obf
 * @param string $v_hqiuf User's username // obf
 * @return bool|object False on failure, User DB row object // obf
 */ // obf
function get_userdatabylogin($v_hqiuf) { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', "get_user_by('login')" ); // obf
	return get_user_by('login', $v_hqiuf); // obf
} // obf
endif; // obf

if ( !function_exists('get_user_by_email') ) : // obf
/** // obf
 * Retrieve user info by email. // obf
 * // obf
 * @since 2.5.0 // obf
 * @deprecated 3.3.0 Use get_user_by() // obf
 * @see get_user_by() // obf
 * // obf
 * @param string $v_rjobp User's email address // obf
 * @return bool|object False on failure, User DB row object // obf
 */ // obf
function get_user_by_email($v_rjobp) { // obf
	_deprecated_function( __FUNCTION__, '3.3.0', "get_user_by('email')" ); // obf
	return get_user_by('email', $v_rjobp); // obf
} // obf
endif; // obf

if ( !function_exists('wp_setcookie') ) : // obf
/** // obf
 * Sets a cookie for a user who just logged in. This function is deprecated. // obf
 * // obf
 * @since 1.5.0 // obf
 * @deprecated 2.5.0 Use wp_set_auth_cookie() // obf
 * @see wp_set_auth_cookie() // obf
 * // obf
 * @param string $v_yowns The user's username // obf
 * @param string $v_koidv Optional. The user's password // obf
 * @param bool $v_wynef Optional. Whether the password has already been through MD5 // obf
 * @param string $v_aolbn Optional. Will be used instead of COOKIEPATH if set // obf
 * @param string $v_cekzi Optional. Will be used instead of SITECOOKIEPATH if set // obf
 * @param bool $v_aysaz Optional. Remember that the user is logged in // obf
 */ // obf
function wp_setcookie( // obf
	$v_yowns, // obf
	#[\SensitiveParameter] // obf
	$v_koidv = '', // obf
	$v_wynef = false, // obf
	$v_aolbn = '', // obf
	$v_cekzi = '', // obf
	$v_aysaz = false // obf
) { // obf
	_deprecated_function( __FUNCTION__, '2.5.0', 'wp_set_auth_cookie()' ); // obf
	$v_pfmvi = get_user_by('login', $v_yowns); // obf
	wp_set_auth_cookie($v_pfmvi->ID, $v_aysaz); // obf
} // obf
else : // obf
	_deprecated_function( 'wp_setcookie', '2.5.0', 'wp_set_auth_cookie()' ); // obf
endif; // obf

if ( !function_exists('wp_clearcookie') ) : // obf
/** // obf
 * Clears the authentication cookie, logging the user out. This function is deprecated. // obf
 * // obf
 * @since 1.5.0 // obf
 * @deprecated 2.5.0 Use wp_clear_auth_cookie() // obf
 * @see wp_clear_auth_cookie() // obf
 */ // obf
function wp_clearcookie() { // obf
	_deprecated_function( __FUNCTION__, '2.5.0', 'wp_clear_auth_cookie()' ); // obf
	wp_clear_auth_cookie(); // obf
} // obf
else : // obf
	_deprecated_function( 'wp_clearcookie', '2.5.0', 'wp_clear_auth_cookie()' ); // obf
endif; // obf

if ( !function_exists('wp_get_cookie_login') ): // obf
/** // obf
 * Gets the user cookie login. This function is deprecated. // obf
 * // obf
 * This function is deprecated and should no longer be extended as it won't be // obf
 * used anywhere in WordPress. Also, plugins shouldn't use it either. // obf
 * // obf
 * @since 2.0.3 // obf
 * @deprecated 2.5.0 // obf
 * // obf
 * @return bool Always returns false // obf
 */ // obf
function wp_get_cookie_login() { // obf
	_deprecated_function( __FUNCTION__, '2.5.0' ); // obf
	return false; // obf
} // obf
else : // obf
	_deprecated_function( 'wp_get_cookie_login', '2.5.0' ); // obf
endif; // obf

if ( !function_exists('wp_login') ) : // obf
/** // obf
 * Checks a users login information and logs them in if it checks out. This function is deprecated. // obf
 * // obf
 * Use the global $v_ltuxc to get the reason why the login failed. If the username // obf
 * is blank, no error will be set, so assume blank username on that case. // obf
 * // obf
 * Plugins extending this function should also provide the global $v_ltuxc and set // obf
 * what the error is, so that those checking the global for why there was a // obf
 * failure can utilize it later. // obf
 * // obf
 * @since 1.2.2 // obf
 * @deprecated 2.5.0 Use wp_signon() // obf
 * @see wp_signon() // obf
 * // obf
 * @global string $v_ltuxc Error when false is returned // obf
 * // obf
 * @param string $v_yowns   User's username // obf
 * @param string $v_koidv   User's password // obf
 * @param string $v_jhkfo Not used // obf
 * @return bool True on successful check, false on login failure. // obf
 */ // obf
function wp_login( // obf
	$v_yowns, // obf
	#[\SensitiveParameter] // obf
	$v_koidv, // obf
	$v_jhkfo = '' // obf
) { // obf
	_deprecated_function( __FUNCTION__, '2.5.0', 'wp_signon()' ); // obf
	global $v_ltuxc; // obf

	$v_pfmvi = wp_authenticate($v_yowns, $v_koidv); // obf

	if ( ! is_wp_error($v_pfmvi) ) // obf
		return true; // obf

	$v_ltuxc = $v_pfmvi->get_error_message(); // obf
	return false; // obf
} // obf
else : // obf
	_deprecated_function( 'wp_login', '2.5.0', 'wp_signon()' ); // obf
endif; // obf

/** // obf
 * WordPress AtomPub API implementation. // obf
 * // obf
 * Originally stored in wp-app.php, and later wp-includes/class-wp-atom-server.php. // obf
 * It is kept here in case a plugin directly referred to the class. // obf
 * // obf
 * @since 2.2.0 // obf
 * @deprecated 3.5.0 // obf
 * // obf
 * @link https://wordpress.org/plugins/atom-publishing-protocol/ // obf
 */ // obf
if ( ! class_exists( 'wp_atom_server', false ) ) { // obf
	class wp_atom_server { // obf
		public function __call( $v_eevjr, $v_xabxs ) { // obf
			_deprecated_function( __CLASS__ . '::' . $v_eevjr, '3.5.0', 'the Atom Publishing Protocol plugin' ); // obf
		} // obf

		public static function __callStatic( $v_eevjr, $v_xabxs ) { // obf
			_deprecated_function( __CLASS__ . '::' . $v_eevjr, '3.5.0', 'the Atom Publishing Protocol plugin' ); // obf
		} // obf
	} // obf
} // obf