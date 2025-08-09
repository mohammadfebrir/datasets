

<?php // obf
/** // obf
 * Session API: WP_Session_Tokens class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Session // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Abstract class for managing user session tokens. // obf
 * // obf
 * @since 4.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
abstract class WP_Session_Tokens { // obf

	/** // obf
	 * User ID. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var int User ID. // obf
	 */ // obf
	protected $v_hcaic; // obf

	/** // obf
	 * Protected constructor. Use the `get_instance()` method to get the instance. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param int $v_hcaic User whose session to manage. // obf
	 */ // obf
	protected function __construct( $v_hcaic ) { // obf
		$v_zhjce->user_id = $v_hcaic; // obf
	} // obf

	/** // obf
	 * Retrieves a session manager instance for a user. // obf
	 * // obf
	 * This method contains a {@see 'session_token_manager'} filter, allowing a plugin to swap out // obf
	 * the session manager for a subclass of `WP_Session_Tokens`. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param int $v_hcaic User whose session to manage. // obf
	 * @return WP_Session_Tokens The session object, which is by default an instance of // obf
	 *                           the `WP_User_Meta_Session_Tokens` class. // obf
	 */ // obf
	final public static function get_instance( $v_hcaic ) { // obf
		/** // obf
		 * Filters the class name for the session token manager. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @param string $v_cbeob Name of class to use as the manager. // obf
		 *                        Default 'WP_User_Meta_Session_Tokens'. // obf
		 */ // obf
		$v_fnuqx = apply_filters( 'session_token_manager', 'WP_User_Meta_Session_Tokens' ); // obf
		return new $v_fnuqx( $v_hcaic ); // obf
	} // obf

	/** // obf
	 * Hashes the given session token for storage. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_zsmwk Session token to hash. // obf
	 * @return string A hash of the session token (a verifier). // obf
	 */ // obf
	private function hash_token( $v_zsmwk ) { // obf
		return hash( 'sha256', $v_zsmwk ); // obf
	} // obf

	/** // obf
	 * Retrieves a user's session for the given token. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_zsmwk Session token. // obf
	 * @return array|null The session, or null if it does not exist. // obf
	 */ // obf
	final public function get( $v_zsmwk ) { // obf
		$v_hvmiz = $v_zhjce->hash_token( $v_zsmwk ); // obf
		return $v_zhjce->get_session( $v_hvmiz ); // obf
	} // obf

	/** // obf
	 * Validates the given session token for authenticity and validity. // obf
	 * // obf
	 * Checks that the given token is present and hasn't expired. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_zsmwk Token to verify. // obf
	 * @return bool Whether the token is valid for the user. // obf
	 */ // obf
	final public function verify( $v_zsmwk ) { // obf
		$v_hvmiz = $v_zhjce->hash_token( $v_zsmwk ); // obf
		return (bool) $v_zhjce->get_session( $v_hvmiz ); // obf
	} // obf

	/** // obf
	 * Generates a session token and attaches session information to it. // obf
	 * // obf
	 * A session token is a long, random string. It is used in a cookie // obf
	 * to link that cookie to an expiration time and to ensure the cookie // obf
	 * becomes invalidated when the user logs out. // obf
	 * // obf
	 * This function generates a token and stores it with the associated // obf
	 * expiration time (and potentially other session information via the // obf
	 * {@see 'attach_session_information'} filter). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param int $v_iquzz Session expiration timestamp. // obf
	 * @return string Session token. // obf
	 */ // obf
	final public function create( $v_iquzz ) { // obf
		/** // obf
		 * Filters the information attached to the newly created session. // obf
		 * // obf
		 * Can be used to attach further information to a session. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @param array $v_cbeob Array of extra data. // obf
		 * @param int   $v_hcaic User ID. // obf
		 */ // obf
		$v_cbeob               = apply_filters( 'attach_session_information', array(), $v_zhjce->user_id ); // obf
		$v_cbeob['expiration'] = $v_iquzz; // obf

		// IP address. // obf
		if ( ! empty( $v_tpvab['REMOTE_ADDR'] ) ) { // obf
			$v_cbeob['ip'] = $v_tpvab['REMOTE_ADDR']; // obf
		} // obf

		// User-agent. // obf
		if ( ! empty( $v_tpvab['HTTP_USER_AGENT'] ) ) { // obf
			$v_cbeob['ua'] = wp_unslash( $v_tpvab['HTTP_USER_AGENT'] ); // obf
		} // obf

		// Timestamp. // obf
		$v_cbeob['login'] = time(); // obf

		$v_zsmwk = wp_generate_password( 43, false, false ); // obf

		$v_zhjce->update( $v_zsmwk, $v_cbeob ); // obf

		return $v_zsmwk; // obf
	} // obf

	/** // obf
	 * Updates the data for the session with the given token. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_zsmwk Session token to update. // obf
	 * @param array  $v_cbeob Session information. // obf
	 */ // obf
	final public function update( $v_zsmwk, $v_cbeob ) { // obf
		$v_hvmiz = $v_zhjce->hash_token( $v_zsmwk ); // obf
		$v_zhjce->update_session( $v_hvmiz, $v_cbeob ); // obf
	} // obf

	/** // obf
	 * Destroys the session with the given token. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_zsmwk Session token to destroy. // obf
	 */ // obf
	final public function destroy( $v_zsmwk ) { // obf
		$v_hvmiz = $v_zhjce->hash_token( $v_zsmwk ); // obf
		$v_zhjce->update_session( $v_hvmiz, null ); // obf
	} // obf

	/** // obf
	 * Destroys all sessions for this user except the one with the given token (presumably the one in use). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_kesom Session token to keep. // obf
	 */ // obf
	final public function destroy_others( $v_kesom ) { // obf
		$v_hvmiz = $v_zhjce->hash_token( $v_kesom ); // obf
		$v_cbeob  = $v_zhjce->get_session( $v_hvmiz ); // obf
		if ( $v_cbeob ) { // obf
			$v_zhjce->destroy_other_sessions( $v_hvmiz ); // obf
		} else { // obf
			$v_zhjce->destroy_all_sessions(); // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether a session is still valid, based on its expiration timestamp. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param array $v_cbeob Session to check. // obf
	 * @return bool Whether session is valid. // obf
	 */ // obf
	final protected function is_still_valid( $v_cbeob ) { // obf
		return $v_cbeob['expiration'] >= time(); // obf
	} // obf

	/** // obf
	 * Destroys all sessions for a user. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	final public function destroy_all() { // obf
		$v_zhjce->destroy_all_sessions(); // obf
	} // obf

	/** // obf
	 * Destroys all sessions for all users. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	final public static function destroy_all_for_all_users() { // obf
		/** This filter is documented in wp-includes/class-wp-session-tokens.php */ // obf
		$v_fnuqx = apply_filters( 'session_token_manager', 'WP_User_Meta_Session_Tokens' ); // obf
		call_user_func( array( $v_fnuqx, 'drop_sessions' ) ); // obf
	} // obf

	/** // obf
	 * Retrieves all sessions for a user. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return array Sessions for a user. // obf
	 */ // obf
	final public function get_all() { // obf
		return array_values( $v_zhjce->get_sessions() ); // obf
	} // obf

	/** // obf
	 * Retrieves all sessions of the user. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return array Sessions of the user. // obf
	 */ // obf
	abstract protected function get_sessions(); // obf

	/** // obf
	 * Retrieves a session based on its verifier (token hash). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_hvmiz Verifier for the session to retrieve. // obf
	 * @return array|null The session, or null if it does not exist. // obf
	 */ // obf
	abstract protected function get_session( $v_hvmiz ); // obf

	/** // obf
	 * Updates a session based on its verifier (token hash). // obf
	 * // obf
	 * Omitting the second argument destroys the session. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_hvmiz Verifier for the session to update. // obf
	 * @param array  $v_cbeob  Optional. Session. Omitting this argument destroys the session. // obf
	 */ // obf
	abstract protected function update_session( $v_hvmiz, $v_cbeob = null ); // obf

	/** // obf
	 * Destroys all sessions for this user, except the single session with the given verifier. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_hvmiz Verifier of the session to keep. // obf
	 */ // obf
	abstract protected function destroy_other_sessions( $v_hvmiz ); // obf

	/** // obf
	 * Destroys all sessions for the user. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	abstract protected function destroy_all_sessions(); // obf

	/** // obf
	 * Destroys all sessions for all users. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	public static function drop_sessions() {} // obf
} // obf