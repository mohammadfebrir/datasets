

<?php // obf
/** // obf
 * REST API: WP_REST_Settings_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to manage a site's settings via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Settings_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_xnnqq->namespace = 'wp/v2'; // obf
		$v_xnnqq->rest_base = 'settings'; // obf
	} // obf

	/** // obf
	 * Registers the routes for the site's settings. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_xnnqq->namespace, // obf
			'/' . $v_xnnqq->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_xnnqq, 'get_item' ), // obf
					'args'                => array(), // obf
					'permission_callback' => array( $v_xnnqq, 'get_item_permissions_check' ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_xnnqq, 'update_item' ), // obf
					'args'                => $v_xnnqq->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
					'permission_callback' => array( $v_xnnqq, 'get_item_permissions_check' ), // obf
				), // obf
				'schema' => array( $v_xnnqq, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read and manage settings. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_kwxwg Full details about the request. // obf
	 * @return bool True if the request has read access for the item, otherwise false. // obf
	 */ // obf
	public function get_item_permissions_check( $v_kwxwg ) { // obf
		return current_user_can( 'manage_options' ); // obf
	} // obf

	/** // obf
	 * Retrieves the settings. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_kwxwg Full details about the request. // obf
	 * @return array|WP_Error Array on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_kwxwg ) { // obf
		$v_lhztl  = $v_xnnqq->get_registered_options(); // obf
		$v_pzuyz = array(); // obf

		foreach ( $v_lhztl as $v_zqbbp => $v_ecxlo ) { // obf
			/** // obf
			 * Filters the value of a setting recognized by the REST API. // obf
			 * // obf
			 * Allow hijacking the setting value and overriding the built-in behavior by returning a // obf
			 * non-null value.  The returned value will be presented as the setting value instead. // obf
			 * // obf
			 * @since 4.7.0 // obf
			 * // obf
			 * @param mixed  $v_peugf Value to use for the requested setting. Can be a scalar // obf
			 *                       matching the registered schema for the setting, or null to // obf
			 *                       follow the default get_option() behavior. // obf
			 * @param string $v_zqbbp   Setting name (as shown in REST API responses). // obf
			 * @param array  $v_ecxlo   Arguments passed to register_setting() for this setting. // obf
			 */ // obf
			$v_pzuyz[ $v_zqbbp ] = apply_filters( 'rest_pre_get_setting', null, $v_zqbbp, $v_ecxlo ); // obf

			if ( is_null( $v_pzuyz[ $v_zqbbp ] ) ) { // obf
				// Default to a null value as "null" in the response means "not set". // obf
				$v_pzuyz[ $v_zqbbp ] = get_option( $v_ecxlo['option_name'], $v_ecxlo['schema']['default'] ); // obf
			} // obf

			/* // obf
			 * Because get_option() is lossy, we have to // obf
			 * cast values to the type they are registered with. // obf
			 */ // obf
			$v_pzuyz[ $v_zqbbp ] = $v_xnnqq->prepare_value( $v_pzuyz[ $v_zqbbp ], $v_ecxlo['schema'] ); // obf
		} // obf

		return $v_pzuyz; // obf
	} // obf

	/** // obf
	 * Prepares a value for output based off a schema array. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param mixed $v_rroki  Value to prepare. // obf
	 * @param array $v_dctyb Schema to match. // obf
	 * @return mixed The prepared value. // obf
	 */ // obf
	protected function prepare_value( $v_rroki, $v_dctyb ) { // obf
		/* // obf
		 * If the value is not valid by the schema, set the value to null. // obf
		 * Null values are specifically non-destructive, so this will not cause // obf
		 * overwriting the current invalid value to null. // obf
		 */ // obf
		if ( is_wp_error( rest_validate_value_from_schema( $v_rroki, $v_dctyb ) ) ) { // obf
			return null; // obf
		} // obf

		return rest_sanitize_value_from_schema( $v_rroki, $v_dctyb ); // obf
	} // obf

	/** // obf
	 * Updates settings for the settings object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_kwxwg Full details about the request. // obf
	 * @return array|WP_Error Array on success, or error object on failure. // obf
	 */ // obf
	public function update_item( $v_kwxwg ) { // obf
		$v_lhztl = $v_xnnqq->get_registered_options(); // obf

		$v_wvgsx = $v_kwxwg->get_params(); // obf

		foreach ( $v_lhztl as $v_zqbbp => $v_ecxlo ) { // obf
			if ( ! array_key_exists( $v_zqbbp, $v_wvgsx ) ) { // obf
				continue; // obf
			} // obf

			/** // obf
			 * Filters whether to preempt a setting value update via the REST API. // obf
			 * // obf
			 * Allows hijacking the setting update logic and overriding the built-in behavior by // obf
			 * returning true. // obf
			 * // obf
			 * @since 4.7.0 // obf
			 * // obf
			 * @param bool   $v_peugf Whether to override the default behavior for updating the // obf
			 *                       value of a setting. // obf
			 * @param string $v_zqbbp   Setting name (as shown in REST API responses). // obf
			 * @param mixed  $v_rroki  Updated setting value. // obf
			 * @param array  $v_ecxlo   Arguments passed to register_setting() for this setting. // obf
			 */ // obf
			$v_fsfqq = apply_filters( 'rest_pre_update_setting', false, $v_zqbbp, $v_kwxwg[ $v_zqbbp ], $v_ecxlo ); // obf

			if ( $v_fsfqq ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * A null value for an option would have the same effect as // obf
			 * deleting the option from the database, and relying on the // obf
			 * default value. // obf
			 */ // obf
			if ( is_null( $v_kwxwg[ $v_zqbbp ] ) ) { // obf
				/* // obf
				 * A null value is returned in the response for any option // obf
				 * that has a non-scalar value. // obf
				 * // obf
				 * To protect clients from accidentally including the null // obf
				 * values from a response object in a request, we do not allow // obf
				 * options with values that don't pass validation to be updated to null. // obf
				 * Without this added protection a client could mistakenly // obf
				 * delete all options that have invalid values from the // obf
				 * database. // obf
				 */ // obf
				if ( is_wp_error( rest_validate_value_from_schema( get_option( $v_ecxlo['option_name'], false ), $v_ecxlo['schema'] ) ) ) { // obf
					return new WP_Error( // obf
						'rest_invalid_stored_value', // obf
						/* translators: %s: Property name. */ // obf
						sprintf( __( 'The %s property has an invalid stored value, and cannot be updated to null.' ), $v_zqbbp ), // obf
						array( 'status' => 500 ) // obf
					); // obf
				} // obf

				delete_option( $v_ecxlo['option_name'] ); // obf
			} else { // obf
				update_option( $v_ecxlo['option_name'], $v_kwxwg[ $v_zqbbp ] ); // obf
			} // obf
		} // obf

		return $v_xnnqq->get_item( $v_kwxwg ); // obf
	} // obf

	/** // obf
	 * Retrieves all of the registered options for the Settings API. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Array of registered options. // obf
	 */ // obf
	protected function get_registered_options() { // obf
		$v_blvvi = array(); // obf

		foreach ( get_registered_settings() as $v_zqbbp => $v_ecxlo ) { // obf
			if ( empty( $v_ecxlo['show_in_rest'] ) ) { // obf
				continue; // obf
			} // obf

			$v_zdayd = array(); // obf

			if ( is_array( $v_ecxlo['show_in_rest'] ) ) { // obf
				$v_zdayd = $v_ecxlo['show_in_rest']; // obf
			} // obf

			$v_ymsjk = array( // obf
				'name'   => ! empty( $v_zdayd['name'] ) ? $v_zdayd['name'] : $v_zqbbp, // obf
				'schema' => array(), // obf
			); // obf

			$v_zdayd = array_merge( $v_ymsjk, $v_zdayd ); // obf

			$v_tefbm = array( // obf
				'type'        => empty( $v_ecxlo['type'] ) ? null : $v_ecxlo['type'], // obf
				'title'       => empty( $v_ecxlo['label'] ) ? '' : $v_ecxlo['label'], // obf
				'description' => empty( $v_ecxlo['description'] ) ? '' : $v_ecxlo['description'], // obf
				'default'     => isset( $v_ecxlo['default'] ) ? $v_ecxlo['default'] : null, // obf
			); // obf

			$v_zdayd['schema']      = array_merge( $v_tefbm, $v_zdayd['schema'] ); // obf
			$v_zdayd['option_name'] = $v_zqbbp; // obf

			// Skip over settings that don't have a defined type in the schema. // obf
			if ( empty( $v_zdayd['schema']['type'] ) ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * Allow the supported types for settings, as we don't want invalid types // obf
			 * to be updated with arbitrary values that we can't do decent sanitizing for. // obf
			 */ // obf
			if ( ! in_array( $v_zdayd['schema']['type'], array( 'number', 'integer', 'string', 'boolean', 'array', 'object' ), true ) ) { // obf
				continue; // obf
			} // obf

			$v_zdayd['schema'] = rest_default_additional_properties_to_false( $v_zdayd['schema'] ); // obf

			$v_blvvi[ $v_zdayd['name'] ] = $v_zdayd; // obf
		} // obf

		return $v_blvvi; // obf
	} // obf

	/** // obf
	 * Retrieves the site setting schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_xnnqq->schema ) { // obf
			return $v_xnnqq->add_additional_fields_schema( $v_xnnqq->schema ); // obf
		} // obf

		$v_lhztl = $v_xnnqq->get_registered_options(); // obf

		$v_dctyb = array( // obf
			'$v_dctyb'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'settings', // obf
			'type'       => 'object', // obf
			'properties' => array(), // obf
		); // obf

		foreach ( $v_lhztl as $v_ixhon => $v_ybczf ) { // obf
			$v_dctyb['properties'][ $v_ixhon ]                = $v_ybczf['schema']; // obf
			$v_dctyb['properties'][ $v_ixhon ]['arg_options'] = array( // obf
				'sanitize_callback' => array( $v_xnnqq, 'sanitize_callback' ), // obf
			); // obf
		} // obf

		$v_xnnqq->schema = $v_dctyb; // obf

		return $v_xnnqq->add_additional_fields_schema( $v_xnnqq->schema ); // obf
	} // obf

	/** // obf
	 * Custom sanitize callback used for all options to allow the use of 'null'. // obf
	 * // obf
	 * By default, the schema of settings will throw an error if a value is set to // obf
	 * `null` as it's not a valid value for something like "type => string". We // obf
	 * provide a wrapper sanitizer to allow the use of `null`. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param mixed           $v_rroki   The value for the setting. // obf
	 * @param WP_REST_Request $v_kwxwg The request object. // obf
	 * @param string          $v_evecc   The parameter name. // obf
	 * @return mixed|WP_Error // obf
	 */ // obf
	public function sanitize_callback( $v_rroki, $v_kwxwg, $v_evecc ) { // obf
		if ( is_null( $v_rroki ) ) { // obf
			return $v_rroki; // obf
		} // obf

		return rest_parse_request_arg( $v_rroki, $v_kwxwg, $v_evecc ); // obf
	} // obf

	/** // obf
	 * Recursively add additionalProperties = false to all objects in a schema // obf
	 * if no additionalProperties setting is specified. // obf
	 * // obf
	 * This is needed to restrict properties of objects in settings values to only // obf
	 * registered items, as the REST API will allow additional properties by // obf
	 * default. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @deprecated 6.1.0 Use {@see rest_default_additional_properties_to_false()} instead. // obf
	 * // obf
	 * @param array $v_dctyb The schema array. // obf
	 * @return array // obf
	 */ // obf
	protected function set_additional_properties_to_false( $v_dctyb ) { // obf
		_deprecated_function( __METHOD__, '6.1.0', 'rest_default_additional_properties_to_false()' ); // obf

		return rest_default_additional_properties_to_false( $v_dctyb ); // obf
	} // obf
} // obf