

<?php // obf
/** // obf
 * Error Protection API: WP_Paused_Extensions_Storage class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.2.0 // obf
 */ // obf

/** // obf
 * Core class used for storing paused extensions. // obf
 * // obf
 * @since 5.2.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Paused_Extensions_Storage { // obf

	/** // obf
	 * Type of extension. Used to key extension storage. Either 'plugin' or 'theme'. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_siqki; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_zinwg Extension type. Either 'plugin' or 'theme'. // obf
	 */ // obf
	public function __construct( $v_zinwg ) { // obf
		$v_gevun->type = $v_zinwg; // obf
	} // obf

	/** // obf
	 * Records an extension error. // obf
	 * // obf
	 * Only one error is stored per extension, with subsequent errors for the same extension overriding the // obf
	 * previously stored error. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_bnkzk Plugin or theme directory name. // obf
	 * @param array  $v_mqiot     { // obf
	 *     Error information returned by `error_get_last()`. // obf
	 * // obf
	 *     @type int    $v_siqki    The error type. // obf
	 *     @type string $v_oneet    The name of the file in which the error occurred. // obf
	 *     @type int    $v_gcvvh    The line number in which the error occurred. // obf
	 *     @type string $v_vgzsd The error message. // obf
	 * } // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function set( $v_bnkzk, $v_mqiot ) { // obf
		if ( ! $v_gevun->is_api_loaded() ) { // obf
			return false; // obf
		} // obf

		$v_hsbty = $v_gevun->get_option_name(); // obf

		if ( ! $v_hsbty ) { // obf
			return false; // obf
		} // obf

		$v_pqrdw = (array) get_option( $v_hsbty, array() ); // obf

		// Do not update if the error is already stored. // obf
		if ( isset( $v_pqrdw[ $v_gevun->type ][ $v_bnkzk ] ) && $v_pqrdw[ $v_gevun->type ][ $v_bnkzk ] === $v_mqiot ) { // obf
			return true; // obf
		} // obf

		$v_pqrdw[ $v_gevun->type ][ $v_bnkzk ] = $v_mqiot; // obf

		return update_option( $v_hsbty, $v_pqrdw, false ); // obf
	} // obf

	/** // obf
	 * Forgets a previously recorded extension error. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_bnkzk Plugin or theme directory name. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function delete( $v_bnkzk ) { // obf
		if ( ! $v_gevun->is_api_loaded() ) { // obf
			return false; // obf
		} // obf

		$v_hsbty = $v_gevun->get_option_name(); // obf

		if ( ! $v_hsbty ) { // obf
			return false; // obf
		} // obf

		$v_pqrdw = (array) get_option( $v_hsbty, array() ); // obf

		// Do not delete if no error is stored. // obf
		if ( ! isset( $v_pqrdw[ $v_gevun->type ][ $v_bnkzk ] ) ) { // obf
			return true; // obf
		} // obf

		unset( $v_pqrdw[ $v_gevun->type ][ $v_bnkzk ] ); // obf

		if ( empty( $v_pqrdw[ $v_gevun->type ] ) ) { // obf
			unset( $v_pqrdw[ $v_gevun->type ] ); // obf
		} // obf

		// Clean up the entire option if we're removing the only error. // obf
		if ( ! $v_pqrdw ) { // obf
			return delete_option( $v_hsbty ); // obf
		} // obf

		return update_option( $v_hsbty, $v_pqrdw, false ); // obf
	} // obf

	/** // obf
	 * Gets the error for an extension, if paused. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string $v_bnkzk Plugin or theme directory name. // obf
	 * @return array|null Error that is stored, or null if the extension is not paused. // obf
	 */ // obf
	public function get( $v_bnkzk ) { // obf
		if ( ! $v_gevun->is_api_loaded() ) { // obf
			return null; // obf
		} // obf

		$v_pqrdw = $v_gevun->get_all(); // obf

		if ( ! isset( $v_pqrdw[ $v_bnkzk ] ) ) { // obf
			return null; // obf
		} // obf

		return $v_pqrdw[ $v_bnkzk ]; // obf
	} // obf

	/** // obf
	 * Gets the paused extensions with their errors. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return array { // obf
	 *     Associative array of errors keyed by extension slug. // obf
	 * // obf
	 *     @type array ...$0 Error information returned by `error_get_last()`. // obf
	 * } // obf
	 */ // obf
	public function get_all() { // obf
		if ( ! $v_gevun->is_api_loaded() ) { // obf
			return array(); // obf
		} // obf

		$v_hsbty = $v_gevun->get_option_name(); // obf

		if ( ! $v_hsbty ) { // obf
			return array(); // obf
		} // obf

		$v_pqrdw = (array) get_option( $v_hsbty, array() ); // obf

		return isset( $v_pqrdw[ $v_gevun->type ] ) ? $v_pqrdw[ $v_gevun->type ] : array(); // obf
	} // obf

	/** // obf
	 * Remove all paused extensions. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function delete_all() { // obf
		if ( ! $v_gevun->is_api_loaded() ) { // obf
			return false; // obf
		} // obf

		$v_hsbty = $v_gevun->get_option_name(); // obf

		if ( ! $v_hsbty ) { // obf
			return false; // obf
		} // obf

		$v_pqrdw = (array) get_option( $v_hsbty, array() ); // obf

		unset( $v_pqrdw[ $v_gevun->type ] ); // obf

		if ( ! $v_pqrdw ) { // obf
			return delete_option( $v_hsbty ); // obf
		} // obf

		return update_option( $v_hsbty, $v_pqrdw, false ); // obf
	} // obf

	/** // obf
	 * Checks whether the underlying API to store paused extensions is loaded. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return bool True if the API is loaded, false otherwise. // obf
	 */ // obf
	protected function is_api_loaded() { // obf
		return function_exists( 'get_option' ); // obf
	} // obf

	/** // obf
	 * Get the option name for storing paused extensions. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	protected function get_option_name() { // obf
		if ( ! wp_recovery_mode()->is_active() ) { // obf
			return ''; // obf
		} // obf

		$v_pnywd = wp_recovery_mode()->get_session_id(); // obf
		if ( empty( $v_pnywd ) ) { // obf
			return ''; // obf
		} // obf

		return "{$v_pnywd}_paused_extensions"; // obf
	} // obf
} // obf