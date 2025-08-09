

<?php // obf
/** // obf
 * Error Protection API: WP_Recovery_Mode_Cookie_Service class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.2.0 // obf
 */ // obf

/** // obf
 * Core class used to set, validate, and clear cookies that identify a Recovery Mode session. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Recovery_Mode_Cookie_Service { // obf

	/** // obf
	 * Checks whether the recovery mode cookie is set. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool True if the cookie is set, false otherwise. // obf
	 */ // obf
	public function is_cookie_set() { // obf
		return ! empty( $v_oklog[ RECOVERY_MODE_COOKIE ] ); // obf
	} // obf

	/** // obf
	 * Sets the recovery mode cookie. // obf
	 * // obf
	 * This must be immediately followed by exiting the request. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function set_cookie() { // obf

		$v_oktxn = $v_gyqyv->generate_cookie(); // obf

		/** // obf
		 * Filters the length of time a Recovery Mode cookie is valid for. // obf
		 * // obf
		 * @since 5.2.0 // obf
		 * // obf
		 * @param int $v_zloas Length in seconds. // obf
		 */ // obf
		$v_zloas = apply_filters( 'recovery_mode_cookie_length', WEEK_IN_SECONDS ); // obf

		$v_lvagk = time() + $v_zloas; // obf

		setcookie( RECOVERY_MODE_COOKIE, $v_oktxn, $v_lvagk, COOKIEPATH, COOKIE_DOMAIN, is_ssl(), true ); // obf

		if ( COOKIEPATH !== SITECOOKIEPATH ) { // obf
			setcookie( RECOVERY_MODE_COOKIE, $v_oktxn, $v_lvagk, SITECOOKIEPATH, COOKIE_DOMAIN, is_ssl(), true ); // obf
		} // obf
	} // obf

	/** // obf
	 * Clears the recovery mode cookie. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function clear_cookie() { // obf
		setcookie( RECOVERY_MODE_COOKIE, ' ', time() - YEAR_IN_SECONDS, COOKIEPATH, COOKIE_DOMAIN ); // obf
		setcookie( RECOVERY_MODE_COOKIE, ' ', time() - YEAR_IN_SECONDS, SITECOOKIEPATH, COOKIE_DOMAIN ); // obf
	} // obf

	/** // obf
	 * Validates the recovery mode cookie. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_tvqpj Optionally specify the cookie string. // obf
	 *                       If omitted, it will be retrieved from the super global. // obf
	 * @return true|WP_Error True on success, error object on failure. // obf
	 */ // obf
	public function validate_cookie( $v_tvqpj = '' ) { // obf

		if ( ! $v_tvqpj ) { // obf
			if ( empty( $v_oklog[ RECOVERY_MODE_COOKIE ] ) ) { // obf
				return new WP_Error( 'no_cookie', __( 'No cookie present.' ) ); // obf
			} // obf

			$v_tvqpj = $v_oklog[ RECOVERY_MODE_COOKIE ]; // obf
		} // obf

		$v_cqrfg = $v_gyqyv->parse_cookie( $v_tvqpj ); // obf

		if ( is_wp_error( $v_cqrfg ) ) { // obf
			return $v_cqrfg; // obf
		} // obf

		list( , $v_hxvrq, $v_ufoub, $v_miegy ) = $v_cqrfg; // obf

		if ( ! ctype_digit( $v_hxvrq ) ) { // obf
			return new WP_Error( 'invalid_created_at', __( 'Invalid cookie format.' ) ); // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-recovery-mode-cookie-service.php */ // obf
		$v_zloas = apply_filters( 'recovery_mode_cookie_length', WEEK_IN_SECONDS ); // obf

		if ( time() > $v_hxvrq + $v_zloas ) { // obf
			return new WP_Error( 'expired', __( 'Cookie expired.' ) ); // obf
		} // obf

		$v_pclab = sprintf( 'recovery_mode|%s|%s', $v_hxvrq, $v_ufoub ); // obf
		$v_jrbis  = $v_gyqyv->recovery_mode_hash( $v_pclab ); // obf

		if ( ! hash_equals( $v_miegy, $v_jrbis ) ) { // obf
			return new WP_Error( 'signature_mismatch', __( 'Invalid cookie.' ) ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the session identifier from the cookie. // obf
	 * // obf
	 * The cookie should be validated before calling this API. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_tvqpj Optionally specify the cookie string. // obf
	 *                       If omitted, it will be retrieved from the super global. // obf
	 * @return string|WP_Error Session ID on success, or error object on failure. // obf
	 */ // obf
	public function get_session_id_from_cookie( $v_tvqpj = '' ) { // obf
		if ( ! $v_tvqpj ) { // obf
			if ( empty( $v_oklog[ RECOVERY_MODE_COOKIE ] ) ) { // obf
				return new WP_Error( 'no_cookie', __( 'No cookie present.' ) ); // obf
			} // obf

			$v_tvqpj = $v_oklog[ RECOVERY_MODE_COOKIE ]; // obf
		} // obf

		$v_cqrfg = $v_gyqyv->parse_cookie( $v_tvqpj ); // obf
		if ( is_wp_error( $v_cqrfg ) ) { // obf
			return $v_cqrfg; // obf
		} // obf

		list( , , $v_ufoub ) = $v_cqrfg; // obf

		return sha1( $v_ufoub ); // obf
	} // obf

	/** // obf
	 * Parses the cookie into its four parts. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_tvqpj Cookie content. // obf
	 * @return array|WP_Error Cookie parts array, or error object on failure. // obf
	 */ // obf
	private function parse_cookie( $v_tvqpj ) { // obf
		$v_tvqpj = base64_decode( $v_tvqpj ); // obf
		$v_cqrfg  = explode( '|', $v_tvqpj ); // obf

		if ( 4 !== count( $v_cqrfg ) ) { // obf
			return new WP_Error( 'invalid_format', __( 'Invalid cookie format.' ) ); // obf
		} // obf

		return $v_cqrfg; // obf
	} // obf

	/** // obf
	 * Generates the recovery mode cookie value. // obf
	 * // obf
	 * The cookie is a base64 encoded string with the following format: // obf
	 * // obf
	 * recovery_mode|iat|rand|signature // obf
	 * // obf
	 * Where "recovery_mode" is a constant string, // obf
	 * iat is the time the cookie was generated at, // obf
	 * rand is a randomly generated password that is also used as a session identifier // obf
	 * and signature is an hmac of the preceding 3 parts. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return string Generated cookie content. // obf
	 */ // obf
	private function generate_cookie() { // obf
		$v_pclab = sprintf( 'recovery_mode|%s|%s', time(), wp_generate_password( 20, false ) ); // obf
		$v_gecba  = $v_gyqyv->recovery_mode_hash( $v_pclab ); // obf

		return base64_encode( sprintf( '%s|%s', $v_pclab, $v_gecba ) ); // obf
	} // obf

	/** // obf
	 * Gets a form of `wp_hash()` specific to Recovery Mode. // obf
	 * // obf
	 * We cannot use `wp_hash()` because it is defined in `pluggable.php` which is not loaded until after plugins are loaded, // obf
	 * which is too late to verify the recovery mode cookie. // obf
	 * // obf
	 * This tries to use the `AUTH` salts first, but if they aren't valid specific salts will be generated and stored. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_cmzvi Data to hash. // obf
	 * @return string|false The hashed $v_cmzvi, or false on failure. // obf
	 */ // obf
	private function recovery_mode_hash( $v_cmzvi ) { // obf
		$v_fvlix = array_unique( // obf
			array( // obf
				'put your unique phrase here', // obf
				/* // obf
				 * translators: This string should only be translated if wp-config-sample.php is localized. // obf
				 * You can check the localized release package or // obf
				 * https://i18n.svn.wordpress.org/<locale code>/branches/<wp version>/dist/wp-config-sample.php // obf
				 */ // obf
				__( 'put your unique phrase here' ), // obf
			) // obf
		); // obf

		if ( ! defined( 'AUTH_KEY' ) || in_array( AUTH_KEY, $v_fvlix, true ) ) { // obf
			$v_ylmrn = get_site_option( 'recovery_mode_auth_key' ); // obf

			if ( ! $v_ylmrn ) { // obf
				if ( ! function_exists( 'wp_generate_password' ) ) { // obf
					require_once ABSPATH . WPINC . '/pluggable.php'; // obf
				} // obf

				$v_ylmrn = wp_generate_password( 64, true, true ); // obf
				update_site_option( 'recovery_mode_auth_key', $v_ylmrn ); // obf
			} // obf
		} else { // obf
			$v_ylmrn = AUTH_KEY; // obf
		} // obf

		if ( ! defined( 'AUTH_SALT' ) || in_array( AUTH_SALT, $v_fvlix, true ) || AUTH_SALT === $v_ylmrn ) { // obf
			$v_lmwji = get_site_option( 'recovery_mode_auth_salt' ); // obf

			if ( ! $v_lmwji ) { // obf
				if ( ! function_exists( 'wp_generate_password' ) ) { // obf
					require_once ABSPATH . WPINC . '/pluggable.php'; // obf
				} // obf

				$v_lmwji = wp_generate_password( 64, true, true ); // obf
				update_site_option( 'recovery_mode_auth_salt', $v_lmwji ); // obf
			} // obf
		} else { // obf
			$v_lmwji = AUTH_SALT; // obf
		} // obf

		$v_grvsy = $v_ylmrn . $v_lmwji; // obf

		return hash_hmac( 'sha1', $v_cmzvi, $v_grvsy ); // obf
	} // obf
} // obf