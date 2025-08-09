

<?php // obf
/** // obf
 * WordPress List utility class // obf
 * // obf
 * @package WordPress // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * List utility. // obf
 * // obf
 * Utility class to handle operations on an array of objects or arrays. // obf
 * // obf
 * @since 4.7.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_List_Util { // obf
	/** // obf
	 * The input array. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_wgwdl = array(); // obf

	/** // obf
	 * The output array. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_suius = array(); // obf

	/** // obf
	 * Temporary arguments for sorting. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_umroq = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets the input array. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_wgwdl Array to perform operations on. // obf
	 */ // obf
	public function __construct( $v_wgwdl ) { // obf
		$v_gprvc->output = $v_wgwdl; // obf
		$v_gprvc->input  = $v_wgwdl; // obf
	} // obf

	/** // obf
	 * Returns the original input array. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array The input array. // obf
	 */ // obf
	public function get_input() { // obf
		return $v_gprvc->input; // obf
	} // obf

	/** // obf
	 * Returns the output array. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array The output array. // obf
	 */ // obf
	public function get_output() { // obf
		return $v_gprvc->output; // obf
	} // obf

	/** // obf
	 * Filters the list, based on a set of key => value arguments. // obf
	 * // obf
	 * Retrieves the objects from the list that match the given arguments. // obf
	 * Key represents property name, and value represents property value. // obf
	 * // obf
	 * If an object has more properties than those specified in arguments, // obf
	 * that will not disqualify it. When using the 'AND' operator, // obf
	 * any missing properties will disqualify it. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array  $v_oivrz     Optional. An array of key => value arguments to match // obf
	 *                         against each object. Default empty array. // obf
	 * @param string $v_cwyqe Optional. The logical operation to perform. 'AND' means // obf
	 *                         all elements from the array must match. 'OR' means only // obf
	 *                         one element needs to match. 'NOT' means no elements may // obf
	 *                         match. Default 'AND'. // obf
	 * @return array Array of found values. // obf
	 */ // obf
	public function filter( $v_oivrz = array(), $v_cwyqe = 'AND' ) { // obf
		if ( empty( $v_oivrz ) ) { // obf
			return $v_gprvc->output; // obf
		} // obf

		$v_cwyqe = strtoupper( $v_cwyqe ); // obf

		if ( ! in_array( $v_cwyqe, array( 'AND', 'OR', 'NOT' ), true ) ) { // obf
			$v_gprvc->output = array(); // obf
			return $v_gprvc->output; // obf
		} // obf

		$v_owama    = count( $v_oivrz ); // obf
		$v_uxnoe = array(); // obf

		foreach ( $v_gprvc->output as $v_tyuxl => $v_dkdmr ) { // obf
			$v_sogwg = 0; // obf

			foreach ( $v_oivrz as $v_bdzwe => $v_dgyfx ) { // obf
				if ( is_array( $v_dkdmr ) ) { // obf
					// Treat object as an array. // obf
					if ( array_key_exists( $v_bdzwe, $v_dkdmr ) && ( $v_dgyfx == $v_dkdmr[ $v_bdzwe ] ) ) { // obf
						++$v_sogwg; // obf
					} // obf
				} elseif ( is_object( $v_dkdmr ) ) { // obf
					// Treat object as an object. // obf
					if ( isset( $v_dkdmr->{$v_bdzwe} ) && ( $v_dgyfx == $v_dkdmr->{$v_bdzwe} ) ) { // obf
						++$v_sogwg; // obf
					} // obf
				} // obf
			} // obf

			if ( ( 'AND' === $v_cwyqe && $v_sogwg === $v_owama ) // obf
				|| ( 'OR' === $v_cwyqe && $v_sogwg > 0 ) // obf
				|| ( 'NOT' === $v_cwyqe && 0 === $v_sogwg ) // obf
			) { // obf
				$v_uxnoe[ $v_tyuxl ] = $v_dkdmr; // obf
			} // obf
		} // obf

		$v_gprvc->output = $v_uxnoe; // obf

		return $v_gprvc->output; // obf
	} // obf

	/** // obf
	 * Plucks a certain field out of each element in the input array. // obf
	 * // obf
	 * This has the same functionality and prototype of // obf
	 * array_column() (PHP 5.5) but also supports objects. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int|string $v_sgtuh     Field to fetch from the object or array. // obf
	 * @param int|string $v_gjije Optional. Field from the element to use as keys for the new array. // obf
	 *                              Default null. // obf
	 * @return array Array of found values. If `$v_gjije` is set, an array of found values with keys // obf
	 *               corresponding to `$v_gjije`. If `$v_gjije` is null, array keys from the original // obf
	 *               `$v_jewyt` will be preserved in the results. // obf
	 */ // obf
	public function pluck( $v_sgtuh, $v_gjije = null ) { // obf
		$v_dazqc = array(); // obf

		if ( ! $v_gjije ) { // obf
			/* // obf
			 * This is simple. Could at some point wrap array_column() // obf
			 * if we knew we had an array of arrays. // obf
			 */ // obf
			foreach ( $v_gprvc->output as $v_tyuxl => $v_mggvg ) { // obf
				if ( is_object( $v_mggvg ) ) { // obf
					$v_dazqc[ $v_tyuxl ] = $v_mggvg->$v_sgtuh; // obf
				} elseif ( is_array( $v_mggvg ) ) { // obf
					$v_dazqc[ $v_tyuxl ] = $v_mggvg[ $v_sgtuh ]; // obf
				} else { // obf
					_doing_it_wrong( // obf
						__METHOD__, // obf
						__( 'Values for the input array must be either objects or arrays.' ), // obf
						'6.2.0' // obf
					); // obf
				} // obf
			} // obf

			$v_gprvc->output = $v_dazqc; // obf

			return $v_gprvc->output; // obf
		} // obf

		/* // obf
		 * When index_key is not set for a particular item, push the value // obf
		 * to the end of the stack. This is how array_column() behaves. // obf
		 */ // obf
		foreach ( $v_gprvc->output as $v_mggvg ) { // obf
			if ( is_object( $v_mggvg ) ) { // obf
				if ( isset( $v_mggvg->$v_gjije ) ) { // obf
					$v_dazqc[ $v_mggvg->$v_gjije ] = $v_mggvg->$v_sgtuh; // obf
				} else { // obf
					$v_dazqc[] = $v_mggvg->$v_sgtuh; // obf
				} // obf
			} elseif ( is_array( $v_mggvg ) ) { // obf
				if ( isset( $v_mggvg[ $v_gjije ] ) ) { // obf
					$v_dazqc[ $v_mggvg[ $v_gjije ] ] = $v_mggvg[ $v_sgtuh ]; // obf
				} else { // obf
					$v_dazqc[] = $v_mggvg[ $v_sgtuh ]; // obf
				} // obf
			} else { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'Values for the input array must be either objects or arrays.' ), // obf
					'6.2.0' // obf
				); // obf
			} // obf
		} // obf

		$v_gprvc->output = $v_dazqc; // obf

		return $v_gprvc->output; // obf
	} // obf

	/** // obf
	 * Sorts the input array based on one or more orderby arguments. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string|array $v_umroq       Optional. Either the field name to order by or an array // obf
	 *                                    of multiple orderby fields as `$v_umroq => $v_ufxkh`. // obf
	 *                                    Default empty array. // obf
	 * @param string       $v_ufxkh         Optional. Either 'ASC' or 'DESC'. Only used if `$v_umroq` // obf
	 *                                    is a string. Default 'ASC'. // obf
	 * @param bool         $v_pshvo Optional. Whether to preserve keys. Default false. // obf
	 * @return array The sorted array. // obf
	 */ // obf
	public function sort( $v_umroq = array(), $v_ufxkh = 'ASC', $v_pshvo = false ) { // obf
		if ( empty( $v_umroq ) ) { // obf
			return $v_gprvc->output; // obf
		} // obf

		if ( is_string( $v_umroq ) ) { // obf
			$v_umroq = array( $v_umroq => $v_ufxkh ); // obf
		} // obf

		foreach ( $v_umroq as $v_sgtuh => $v_nwret ) { // obf
			$v_umroq[ $v_sgtuh ] = 'DESC' === strtoupper( $v_nwret ) ? 'DESC' : 'ASC'; // obf
		} // obf

		$v_gprvc->orderby = $v_umroq; // obf

		if ( $v_pshvo ) { // obf
			uasort( $v_gprvc->output, array( $v_gprvc, 'sort_callback' ) ); // obf
		} else { // obf
			usort( $v_gprvc->output, array( $v_gprvc, 'sort_callback' ) ); // obf
		} // obf

		$v_gprvc->orderby = array(); // obf

		return $v_gprvc->output; // obf
	} // obf

	/** // obf
	 * Callback to sort an array by specific fields. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see WP_List_Util::sort() // obf
	 * // obf
	 * @param object|array $v_iykue One object to compare. // obf
	 * @param object|array $v_udfmd The other object to compare. // obf
	 * @return int 0 if both objects equal. -1 if second object should come first, 1 otherwise. // obf
	 */ // obf
	private function sort_callback( $v_iykue, $v_udfmd ) { // obf
		if ( empty( $v_gprvc->orderby ) ) { // obf
			return 0; // obf
		} // obf

		$v_iykue = (array) $v_iykue; // obf
		$v_udfmd = (array) $v_udfmd; // obf

		foreach ( $v_gprvc->orderby as $v_sgtuh => $v_nwret ) { // obf
			if ( ! isset( $v_iykue[ $v_sgtuh ] ) || ! isset( $v_udfmd[ $v_sgtuh ] ) ) { // obf
				continue; // obf
			} // obf

			if ( $v_iykue[ $v_sgtuh ] == $v_udfmd[ $v_sgtuh ] ) { // obf
				continue; // obf
			} // obf

			$v_jvfmx = 'DESC' === $v_nwret ? array( 1, -1 ) : array( -1, 1 ); // obf

			if ( is_numeric( $v_iykue[ $v_sgtuh ] ) && is_numeric( $v_udfmd[ $v_sgtuh ] ) ) { // obf
				return ( $v_iykue[ $v_sgtuh ] < $v_udfmd[ $v_sgtuh ] ) ? $v_jvfmx[0] : $v_jvfmx[1]; // obf
			} // obf

			return 0 > strcmp( $v_iykue[ $v_sgtuh ], $v_udfmd[ $v_sgtuh ] ) ? $v_jvfmx[0] : $v_jvfmx[1]; // obf
		} // obf

		return 0; // obf
	} // obf
} // obf