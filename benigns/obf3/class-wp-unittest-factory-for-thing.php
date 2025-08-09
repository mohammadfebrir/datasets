

<?php // obf

/** // obf
 * An abstract class that serves as a basis for all WordPress object-type factory classes. // obf
 */ // obf
abstract class WP_UnitTest_Factory_For_Thing { // obf

	public $v_aurub; // obf
	public $v_qucsx; // obf

	/** // obf
	 * Creates a new factory, which will create objects of a specific Thing. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param object $v_qucsx                       Global factory that can be used to create other objects // obf
	 *                                              on the system. // obf
	 * @param array $v_aurub Defines what default values should the properties // obf
	 *                                              of the object have. The default values can be generators -- // obf
	 *                                              an object with the next() method. // obf
	 *                                              There are some default generators: // obf
	 *                                               - {@link WP_UnitTest_Generator_Sequence} // obf
	 *                                               - {@link WP_UnitTest_Generator_Locale_Name} // obf
	 *                                               - {@link WP_UnitTest_Factory_Callback_After_Create} // obf
	 */ // obf
	public function __construct( $v_qucsx, $v_aurub = array() ) { // obf
		$v_lbfen->factory                        = $v_qucsx; // obf
		$v_lbfen->default_generation_definitions = $v_aurub; // obf
	} // obf

	/** // obf
	 * Creates an object and returns its ID. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param array $v_ynokk The arguments. // obf
	 * // obf
	 * @return int|WP_Error The object ID on success, WP_Error object on failure. // obf
	 */ // obf
	abstract public function create_object( $v_ynokk ); // obf

	/** // obf
	 * Updates an existing object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int   $v_dfuti The object ID. // obf
	 * @param array $v_lapch    The values to update. // obf
	 * // obf
	 * @return int|WP_Error The object ID on success, WP_Error object on failure. // obf
	 */ // obf
	abstract public function update_object( $v_dfuti, $v_lapch ); // obf

	/** // obf
	 * Creates an object and returns its ID. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param array $v_ynokk                   Optional. The arguments for the object to create. // obf
	 *                                      Default empty array. // obf
	 * @param null  $v_dgntl Optional. The default values for the object. // obf
	 *                                      Default null. // obf
	 * // obf
	 * @return int|WP_Error The object ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create( $v_ynokk = array(), $v_dgntl = null ) { // obf
		if ( is_null( $v_dgntl ) ) { // obf
			$v_dgntl = $v_lbfen->default_generation_definitions; // obf
		} // obf

		$v_aheag = $v_lbfen->generate_args( $v_ynokk, $v_dgntl, $v_bsffn ); // obf
		$v_dfuti      = $v_lbfen->create_object( $v_aheag ); // obf

		if ( ! $v_dfuti || is_wp_error( $v_dfuti ) ) { // obf
			return $v_dfuti; // obf
		} // obf

		if ( $v_bsffn ) { // obf
			$v_rjzop = $v_lbfen->apply_callbacks( $v_bsffn, $v_dfuti ); // obf
			$v_zydwm    = $v_lbfen->update_object( $v_dfuti, $v_rjzop ); // obf

			if ( ! $v_zydwm || is_wp_error( $v_zydwm ) ) { // obf
				return $v_zydwm; // obf
			} // obf
		} // obf

		return $v_dfuti; // obf
	} // obf

	/** // obf
	 * Creates and returns an object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param array $v_ynokk                   Optional. The arguments for the object to create. // obf
	 *                                      Default empty array. // obf
	 * @param null  $v_dgntl Optional. The default values for the object. // obf
	 *                                      Default null. // obf
	 * // obf
	 * @return mixed The created object. Can be anything. WP_Error object on failure. // obf
	 */ // obf
	public function create_and_get( $v_ynokk = array(), $v_dgntl = null ) { // obf
		$v_dfuti = $v_lbfen->create( $v_ynokk, $v_dgntl ); // obf

		if ( is_wp_error( $v_dfuti ) ) { // obf
			return $v_dfuti; // obf
		} // obf

		return $v_lbfen->get_object_by_id( $v_dfuti ); // obf
	} // obf

	/** // obf
	 * Retrieves an object by ID. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int $v_dfuti The object ID. // obf
	 * // obf
	 * @return mixed The object. Can be anything. // obf
	 */ // obf
	abstract public function get_object_by_id( $v_dfuti ); // obf

	/** // obf
	 * Creates multiple objects. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int   $v_yxiuw                  Amount of objects to create. // obf
	 * @param array $v_ynokk                   Optional. The arguments for the object to create. // obf
	 *                                      Default empty array. // obf
	 * @param null  $v_dgntl Optional. The default values for the object. // obf
	 *                                      Default null. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function create_many( $v_yxiuw, $v_ynokk = array(), $v_dgntl = null ) { // obf
		$v_yglev = array(); // obf

		for ( $v_hldyz = 0; $v_hldyz < $v_yxiuw; $v_hldyz++ ) { // obf
			$v_yglev[] = $v_lbfen->create( $v_ynokk, $v_dgntl ); // obf
		} // obf

		return $v_yglev; // obf
	} // obf

	/** // obf
	 * Combines the given arguments with the generation_definitions (defaults) and applies // obf
	 * possibly set callbacks on it. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param array       $v_ynokk                   Optional. The arguments to combine with defaults. // obf
	 *                                            Default empty array. // obf
	 * @param array|null  $v_dgntl Optional. The defaults. Default null. // obf
	 * @param array|null  $v_bsffn              Optional. Array with callbacks to apply on the fields. // obf
	 *                                            Default null. // obf
	 * // obf
	 * @return array|WP_Error Combined array on success. WP_Error when default value is incorrect. // obf
	 */ // obf
	public function generate_args( $v_ynokk = array(), $v_dgntl = null, &$v_bsffn = null ) { // obf
		$v_bsffn = array(); // obf
		if ( is_null( $v_dgntl ) ) { // obf
			$v_dgntl = $v_lbfen->default_generation_definitions; // obf
		} // obf

		// Use the same incrementor for all fields belonging to this object. // obf
		$v_utfgx = new WP_UnitTest_Generator_Sequence(); // obf
		// Add leading zeros to make sure MySQL sorting works as expected. // obf
		$v_apvsv = zeroise( $v_utfgx->get_incr(), 7 ); // obf

		foreach ( array_keys( $v_dgntl ) as $v_fgetw ) { // obf
			if ( ! isset( $v_ynokk[ $v_fgetw ] ) ) { // obf
				$v_qtwjo = $v_dgntl[ $v_fgetw ]; // obf
				if ( is_scalar( $v_qtwjo ) ) { // obf
					$v_ynokk[ $v_fgetw ] = $v_qtwjo; // obf
				} elseif ( is_object( $v_qtwjo ) && method_exists( $v_qtwjo, 'call' ) ) { // obf
					$v_bsffn[ $v_fgetw ] = $v_qtwjo; // obf
				} elseif ( is_object( $v_qtwjo ) ) { // obf
					$v_ynokk[ $v_fgetw ] = sprintf( $v_qtwjo->get_template_string(), $v_apvsv ); // obf
				} else { // obf
					return new WP_Error( // obf
						'invalid_argument', // obf
						'Factory default value should be either a scalar or an generator object.' // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_ynokk; // obf
	} // obf


	/** // obf
	 * Applies the callbacks on the created object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param WP_UnitTest_Factory_Callback_After_Create[] $v_bsffn Array with callback functions. // obf
	 * @param int                                         $v_dfuti ID of the object to apply callbacks for. // obf
	 * // obf
	 * @return array The altered fields. // obf
	 */ // obf
	public function apply_callbacks( $v_bsffn, $v_dfuti ) { // obf
		$v_rjzop = array(); // obf

		foreach ( $v_bsffn as $v_fgetw => $v_qtwjo ) { // obf
			$v_rjzop[ $v_fgetw ] = $v_qtwjo->call( $v_dfuti ); // obf
		} // obf

		return $v_rjzop; // obf
	} // obf

	/** // obf
	 * Instantiates a callback object for the given function name. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param callable $v_fkvgp The callback function. // obf
	 * // obf
	 * @return WP_UnitTest_Factory_Callback_After_Create // obf
	 */ // obf
	public function callback( $v_fkvgp ) { // obf
		return new WP_UnitTest_Factory_Callback_After_Create( $v_fkvgp ); // obf
	} // obf

	/** // obf
	 * Adds slashes to the given value. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param array|object|string|mixed $v_mdxba The value to add slashes to. // obf
	 * // obf
	 * @return array|string The value with the possibly applied slashes. // obf
	 */ // obf
	public function addslashes_deep( $v_mdxba ) { // obf
		if ( is_array( $v_mdxba ) ) { // obf
			$v_mdxba = array_map( array( $v_lbfen, 'addslashes_deep' ), $v_mdxba ); // obf
		} elseif ( is_object( $v_mdxba ) ) { // obf
			$v_qkuid = get_object_vars( $v_mdxba ); // obf
			foreach ( $v_qkuid as $v_donvc => $v_aksok ) { // obf
				$v_mdxba->{$v_donvc} = $v_lbfen->addslashes_deep( $v_aksok ); // obf
			} // obf
		} elseif ( is_string( $v_mdxba ) ) { // obf
			$v_mdxba = addslashes( $v_mdxba ); // obf
		} // obf

		return $v_mdxba; // obf
	} // obf
} // obf