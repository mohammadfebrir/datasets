

<?php // obf
/** // obf
 * WordPress Error API. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * WordPress Error class. // obf
 * // obf
 * Container for checking for WordPress errors and error messages. Return // obf
 * WP_Error and use is_wp_error() to check if this class is returned. Many // obf
 * core WordPress functions pass this class in the event of an error and // obf
 * if not handled properly will result in code errors. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Error { // obf
	/** // obf
	 * Stores the list of errors. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_qohyl = array(); // obf

	/** // obf
	 * Stores the most recently added data for each error code. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_ctyst = array(); // obf

	/** // obf
	 * Stores previously added data added for error codes, oldest-to-newest by code. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @var array[] // obf
	 */ // obf
	protected $v_uskvu = array(); // obf

	/** // obf
	 * Initializes the error. // obf
	 * // obf
	 * If `$v_ktcry` is empty, the other parameters will be ignored. // obf
	 * When `$v_ktcry` is not empty, `$v_otdmf` will be used even if // obf
	 * it is empty. The `$v_opaer` parameter will be used only if it // obf
	 * is not empty. // obf
	 * // obf
	 * Though the class is constructed with a single error code and // obf
	 * message, multiple codes can be added using the `add()` method. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string|int $v_ktcry    Error code. // obf
	 * @param string     $v_otdmf Error message. // obf
	 * @param mixed      $v_opaer    Optional. Error data. Default empty string. // obf
	 */ // obf
	public function __construct( $v_ktcry = '', $v_otdmf = '', $v_opaer = '' ) { // obf
		if ( empty( $v_ktcry ) ) { // obf
			return; // obf
		} // obf

		$v_ftnwe->add( $v_ktcry, $v_otdmf, $v_opaer ); // obf
	} // obf

	/** // obf
	 * Retrieves all error codes. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @return array List of error codes, if available. // obf
	 */ // obf
	public function get_error_codes() { // obf
		if ( ! $v_ftnwe->has_errors() ) { // obf
			return array(); // obf
		} // obf

		return array_keys( $v_ftnwe->errors ); // obf
	} // obf

	/** // obf
	 * Retrieves the first error code available. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @return string|int Empty string, if no error codes. // obf
	 */ // obf
	public function get_error_code() { // obf
		$v_iijaw = $v_ftnwe->get_error_codes(); // obf

		if ( empty( $v_iijaw ) ) { // obf
			return ''; // obf
		} // obf

		return $v_iijaw[0]; // obf
	} // obf

	/** // obf
	 * Retrieves all error messages, or the error messages for the given error code. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string|int $v_ktcry Optional. Error code to retrieve the messages for. // obf
	 *                         Default empty string. // obf
	 * @return string[] Error strings on success, or empty array if there are none. // obf
	 */ // obf
	public function get_error_messages( $v_ktcry = '' ) { // obf
		// Return all messages if no code specified. // obf
		if ( empty( $v_ktcry ) ) { // obf
			$v_bajrv = array(); // obf
			foreach ( (array) $v_ftnwe->errors as $v_ktcry => $v_gtiji ) { // obf
				$v_bajrv = array_merge( $v_bajrv, $v_gtiji ); // obf
			} // obf

			return $v_bajrv; // obf
		} // obf

		if ( isset( $v_ftnwe->errors[ $v_ktcry ] ) ) { // obf
			return $v_ftnwe->errors[ $v_ktcry ]; // obf
		} else { // obf
			return array(); // obf
		} // obf
	} // obf

	/** // obf
	 * Gets a single error message. // obf
	 * // obf
	 * This will get the first message available for the code. If no code is // obf
	 * given then the first code available will be used. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string|int $v_ktcry Optional. Error code to retrieve the message for. // obf
	 *                         Default empty string. // obf
	 * @return string The error message. // obf
	 */ // obf
	public function get_error_message( $v_ktcry = '' ) { // obf
		if ( empty( $v_ktcry ) ) { // obf
			$v_ktcry = $v_ftnwe->get_error_code(); // obf
		} // obf
		$v_gtiji = $v_ftnwe->get_error_messages( $v_ktcry ); // obf
		if ( empty( $v_gtiji ) ) { // obf
			return ''; // obf
		} // obf
		return $v_gtiji[0]; // obf
	} // obf

	/** // obf
	 * Retrieves the most recently added error data for an error code. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string|int $v_ktcry Optional. Error code. Default empty string. // obf
	 * @return mixed Error data, if it exists. // obf
	 */ // obf
	public function get_error_data( $v_ktcry = '' ) { // obf
		if ( empty( $v_ktcry ) ) { // obf
			$v_ktcry = $v_ftnwe->get_error_code(); // obf
		} // obf

		if ( isset( $v_ftnwe->error_data[ $v_ktcry ] ) ) { // obf
			return $v_ftnwe->error_data[ $v_ktcry ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Verifies if the instance contains errors. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @return bool If the instance contains errors. // obf
	 */ // obf
	public function has_errors() { // obf
		if ( ! empty( $v_ftnwe->errors ) ) { // obf
			return true; // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Adds an error or appends an additional message to an existing error. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string|int $v_ktcry    Error code. // obf
	 * @param string     $v_otdmf Error message. // obf
	 * @param mixed      $v_opaer    Optional. Error data. Default empty string. // obf
	 */ // obf
	public function add( $v_ktcry, $v_otdmf, $v_opaer = '' ) { // obf
		$v_ftnwe->errors[ $v_ktcry ][] = $v_otdmf; // obf

		if ( ! empty( $v_opaer ) ) { // obf
			$v_ftnwe->add_data( $v_opaer, $v_ktcry ); // obf
		} // obf

		/** // obf
		 * Fires when an error is added to a WP_Error object. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param string|int $v_ktcry     Error code. // obf
		 * @param string     $v_otdmf  Error message. // obf
		 * @param mixed      $v_opaer     Error data. Might be empty. // obf
		 * @param WP_Error   $v_kqqkz The WP_Error object. // obf
		 */ // obf
		do_action( 'wp_error_added', $v_ktcry, $v_otdmf, $v_opaer, $v_ftnwe ); // obf
	} // obf

	/** // obf
	 * Adds data to an error with the given code. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.6.0 Errors can now contain more than one item of error data. {@see WP_Error::$v_uskvu}. // obf
	 * // obf
	 * @param mixed      $v_opaer Error data. // obf
	 * @param string|int $v_ktcry Error code. // obf
	 */ // obf
	public function add_data( $v_opaer, $v_ktcry = '' ) { // obf
		if ( empty( $v_ktcry ) ) { // obf
			$v_ktcry = $v_ftnwe->get_error_code(); // obf
		} // obf

		if ( isset( $v_ftnwe->error_data[ $v_ktcry ] ) ) { // obf
			$v_ftnwe->additional_data[ $v_ktcry ][] = $v_ftnwe->error_data[ $v_ktcry ]; // obf
		} // obf

		$v_ftnwe->error_data[ $v_ktcry ] = $v_opaer; // obf
	} // obf

	/** // obf
	 * Retrieves all error data for an error code in the order in which the data was added. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string|int $v_ktcry Error code. // obf
	 * @return mixed[] Array of error data, if it exists. // obf
	 */ // obf
	public function get_all_error_data( $v_ktcry = '' ) { // obf
		if ( empty( $v_ktcry ) ) { // obf
			$v_ktcry = $v_ftnwe->get_error_code(); // obf
		} // obf

		$v_opaer = array(); // obf

		if ( isset( $v_ftnwe->additional_data[ $v_ktcry ] ) ) { // obf
			$v_opaer = $v_ftnwe->additional_data[ $v_ktcry ]; // obf
		} // obf

		if ( isset( $v_ftnwe->error_data[ $v_ktcry ] ) ) { // obf
			$v_opaer[] = $v_ftnwe->error_data[ $v_ktcry ]; // obf
		} // obf

		return $v_opaer; // obf
	} // obf

	/** // obf
	 * Removes the specified error. // obf
	 * // obf
	 * This function removes all error messages associated with the specified // obf
	 * error code, along with any error data for that code. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param string|int $v_ktcry Error code. // obf
	 */ // obf
	public function remove( $v_ktcry ) { // obf
		unset( $v_ftnwe->errors[ $v_ktcry ] ); // obf
		unset( $v_ftnwe->error_data[ $v_ktcry ] ); // obf
		unset( $v_ftnwe->additional_data[ $v_ktcry ] ); // obf
	} // obf

	/** // obf
	 * Merges the errors in the given error object into this one. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_Error $v_eovlz Error object to merge. // obf
	 */ // obf
	public function merge_from( WP_Error $v_eovlz ) { // obf
		static::copy_errors( $v_eovlz, $v_ftnwe ); // obf
	} // obf

	/** // obf
	 * Exports the errors in this object into the given one. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_Error $v_eovlz Error object to export into. // obf
	 */ // obf
	public function export_to( WP_Error $v_eovlz ) { // obf
		static::copy_errors( $v_ftnwe, $v_eovlz ); // obf
	} // obf

	/** // obf
	 * Copies errors from one WP_Error instance to another. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_Error $v_cpdfx The WP_Error to copy from. // obf
	 * @param WP_Error $v_izswp   The WP_Error to copy to. // obf
	 */ // obf
	protected static function copy_errors( WP_Error $v_cpdfx, WP_Error $v_izswp ) { // obf
		foreach ( $v_cpdfx->get_error_codes() as $v_ktcry ) { // obf
			foreach ( $v_cpdfx->get_error_messages( $v_ktcry ) as $v_ddijk ) { // obf
				$v_izswp->add( $v_ktcry, $v_ddijk ); // obf
			} // obf

			foreach ( $v_cpdfx->get_all_error_data( $v_ktcry ) as $v_opaer ) { // obf
				$v_izswp->add_data( $v_opaer, $v_ktcry ); // obf
			} // obf
		} // obf
	} // obf
} // obf