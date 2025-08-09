

<?php // obf
/** // obf
 * Session API: WP_User_Meta_Session_Tokens class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Session // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Meta-based user sessions token manager. // obf
 * // obf
 * @since 4.0.0 // obf
 * // obf
 * @see WP_Session_Tokens // obf
 */ // obf
class WP_User_Meta_Session_Tokens extends WP_Session_Tokens { // obf

	/** // obf
	 * Retrieves all sessions of the user. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return array Sessions of the user. // obf
	 */ // obf
	protected function get_sessions() { // obf
		$v_frmja = get_user_meta( $v_cuxxc->user_id, 'session_tokens', true ); // obf

		if ( ! is_array( $v_frmja ) ) { // obf
			return array(); // obf
		} // obf

		$v_frmja = array_map( array( $v_cuxxc, 'prepare_session' ), $v_frmja ); // obf
		return array_filter( $v_frmja, array( $v_cuxxc, 'is_still_valid' ) ); // obf
	} // obf

	/** // obf
	 * Converts an expiration to an array of session information. // obf
	 * // obf
	 * @param mixed $v_kzzwe Session or expiration. // obf
	 * @return array Session. // obf
	 */ // obf
	protected function prepare_session( $v_kzzwe ) { // obf
		if ( is_int( $v_kzzwe ) ) { // obf
			return array( 'expiration' => $v_kzzwe ); // obf
		} // obf

		return $v_kzzwe; // obf
	} // obf

	/** // obf
	 * Retrieves a session based on its verifier (token hash). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_dixef Verifier for the session to retrieve. // obf
	 * @return array|null The session, or null if it does not exist // obf
	 */ // obf
	protected function get_session( $v_dixef ) { // obf
		$v_frmja = $v_cuxxc->get_sessions(); // obf

		if ( isset( $v_frmja[ $v_dixef ] ) ) { // obf
			return $v_frmja[ $v_dixef ]; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Updates a session based on its verifier (token hash). // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_dixef Verifier for the session to update. // obf
	 * @param array  $v_kzzwe  Optional. Session. Omitting this argument destroys the session. // obf
	 */ // obf
	protected function update_session( $v_dixef, $v_kzzwe = null ) { // obf
		$v_frmja = $v_cuxxc->get_sessions(); // obf

		if ( $v_kzzwe ) { // obf
			$v_frmja[ $v_dixef ] = $v_kzzwe; // obf
		} else { // obf
			unset( $v_frmja[ $v_dixef ] ); // obf
		} // obf

		$v_cuxxc->update_sessions( $v_frmja ); // obf
	} // obf

	/** // obf
	 * Updates the user's sessions in the usermeta table. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param array $v_frmja Sessions. // obf
	 */ // obf
	protected function update_sessions( $v_frmja ) { // obf
		if ( $v_frmja ) { // obf
			update_user_meta( $v_cuxxc->user_id, 'session_tokens', $v_frmja ); // obf
		} else { // obf
			delete_user_meta( $v_cuxxc->user_id, 'session_tokens' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Destroys all sessions for this user, except the single session with the given verifier. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_dixef Verifier of the session to keep. // obf
	 */ // obf
	protected function destroy_other_sessions( $v_dixef ) { // obf
		$v_kzzwe = $v_cuxxc->get_session( $v_dixef ); // obf
		$v_cuxxc->update_sessions( array( $v_dixef => $v_kzzwe ) ); // obf
	} // obf

	/** // obf
	 * Destroys all session tokens for the user. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	protected function destroy_all_sessions() { // obf
		$v_cuxxc->update_sessions( array() ); // obf
	} // obf

	/** // obf
	 * Destroys all sessions for all users. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	public static function drop_sessions() { // obf
		delete_metadata( 'user', 0, 'session_tokens', false, true ); // obf
	} // obf
} // obf