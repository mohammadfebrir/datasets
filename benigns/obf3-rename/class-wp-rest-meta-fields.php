

<?php // obf
/** // obf
 * REST API: WP_REST_Meta_Fields class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class to manage meta values for an object via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
abstract class WP_REST_Meta_Fields { // obf

	/** // obf
	 * Retrieves the object meta type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string One of 'post', 'comment', 'term', 'user', or anything // obf
	 *                else supported by `_get_meta_table()`. // obf
	 */ // obf
	abstract protected function get_meta_type(); // obf

	/** // obf
	 * Retrieves the object meta subtype. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @return string Subtype for the meta type, or empty string if no specific subtype. // obf
	 */ // obf
	protected function get_meta_subtype() { // obf
		return ''; // obf
	} // obf

	/** // obf
	 * Retrieves the object type for register_rest_field(). // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string The REST field type, such as post type name, taxonomy name, 'comment', or `user`. // obf
	 */ // obf
	abstract protected function get_rest_field_type(); // obf

	/** // obf
	 * Registers the meta field. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @deprecated 5.6.0 // obf
	 * // obf
	 * @see register_rest_field() // obf
	 */ // obf
	public function register_field() { // obf
		_deprecated_function( __METHOD__, '5.6.0' ); // obf

		register_rest_field( // obf
			$v_qwiup->get_rest_field_type(), // obf
			'meta', // obf
			array( // obf
				'get_callback'    => array( $v_qwiup, 'get_value' ), // obf
				'update_callback' => array( $v_qwiup, 'update_value' ), // obf
				'schema'          => $v_qwiup->get_field_schema(), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the meta field value. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int             $v_sbkhq Object ID to fetch meta for. // obf
	 * @param WP_REST_Request $v_cfwva   Full details about the request. // obf
	 * @return array Array containing the meta values keyed by name. // obf
	 */ // obf
	public function get_value( $v_sbkhq, $v_cfwva ) { // obf
		$v_lbyoa   = $v_qwiup->get_registered_fields(); // obf
		$v_pjzik = array(); // obf

		foreach ( $v_lbyoa as $v_uvyhv => $v_aqnbh ) { // obf
			$v_fqomd       = $v_aqnbh['name']; // obf
			$v_cvelo = get_metadata( $v_qwiup->get_meta_type(), $v_sbkhq, $v_uvyhv, false ); // obf

			if ( $v_aqnbh['single'] ) { // obf
				if ( empty( $v_cvelo ) ) { // obf
					$v_rwfaw = $v_aqnbh['schema']['default']; // obf
				} else { // obf
					$v_rwfaw = $v_cvelo[0]; // obf
				} // obf

				$v_rwfaw = $v_qwiup->prepare_value_for_response( $v_rwfaw, $v_cfwva, $v_aqnbh ); // obf
			} else { // obf
				$v_rwfaw = array(); // obf

				if ( is_array( $v_cvelo ) ) { // obf
					foreach ( $v_cvelo as $v_ixvmy ) { // obf
						$v_rwfaw[] = $v_qwiup->prepare_value_for_response( $v_ixvmy, $v_cfwva, $v_aqnbh ); // obf
					} // obf
				} // obf
			} // obf

			$v_pjzik[ $v_fqomd ] = $v_rwfaw; // obf
		} // obf

		return $v_pjzik; // obf
	} // obf

	/** // obf
	 * Prepares a meta value for a response. // obf
	 * // obf
	 * This is required because some native types cannot be stored correctly // obf
	 * in the database, such as booleans. We need to cast back to the relevant // obf
	 * type before passing back to JSON. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param mixed           $v_rwfaw   Meta value to prepare. // obf
	 * @param WP_REST_Request $v_cfwva Current request object. // obf
	 * @param array           $v_aqnbh    Options for the field. // obf
	 * @return mixed Prepared value. // obf
	 */ // obf
	protected function prepare_value_for_response( $v_rwfaw, $v_cfwva, $v_aqnbh ) { // obf
		if ( ! empty( $v_aqnbh['prepare_callback'] ) ) { // obf
			$v_rwfaw = call_user_func( $v_aqnbh['prepare_callback'], $v_rwfaw, $v_cfwva, $v_aqnbh ); // obf
		} // obf

		return $v_rwfaw; // obf
	} // obf

	/** // obf
	 * Updates meta values. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_mhijk      Array of meta parsed from the request. // obf
	 * @param int   $v_sbkhq Object ID to fetch meta for. // obf
	 * @return null|WP_Error Null on success, WP_Error object on failure. // obf
	 */ // obf
	public function update_value( $v_mhijk, $v_sbkhq ) { // obf
		$v_lbyoa = $v_qwiup->get_registered_fields(); // obf
		$v_jbaeh  = new WP_Error(); // obf

		foreach ( $v_lbyoa as $v_uvyhv => $v_aqnbh ) { // obf
			$v_fqomd = $v_aqnbh['name']; // obf
			if ( ! array_key_exists( $v_fqomd, $v_mhijk ) ) { // obf
				continue; // obf
			} // obf

			$v_rwfaw = $v_mhijk[ $v_fqomd ]; // obf

			/* // obf
			 * A null value means reset the field, which is essentially deleting it // obf
			 * from the database and then relying on the default value. // obf
			 * // obf
			 * Non-single meta can also be removed by passing an empty array. // obf
			 */ // obf
			if ( is_null( $v_rwfaw ) || ( array() === $v_rwfaw && ! $v_aqnbh['single'] ) ) { // obf
				$v_aqnbh = $v_qwiup->get_registered_fields()[ $v_uvyhv ]; // obf

				if ( $v_aqnbh['single'] ) { // obf
					$v_axnzo = get_metadata( $v_qwiup->get_meta_type(), $v_sbkhq, $v_uvyhv, true ); // obf

					if ( is_wp_error( rest_validate_value_from_schema( $v_axnzo, $v_aqnbh['schema'] ) ) ) { // obf
						$v_jbaeh->add( // obf
							'rest_invalid_stored_value', // obf
							/* translators: %s: Custom field key. */ // obf
							sprintf( __( 'The %s property has an invalid stored value, and cannot be updated to null.' ), $v_fqomd ), // obf
							array( 'status' => 500 ) // obf
						); // obf
						continue; // obf
					} // obf
				} // obf

				$v_jbomi = $v_qwiup->delete_meta_value( $v_sbkhq, $v_uvyhv, $v_fqomd ); // obf
				if ( is_wp_error( $v_jbomi ) ) { // obf
					$v_jbaeh->merge_from( $v_jbomi ); // obf
				} // obf
				continue; // obf
			} // obf

			if ( ! $v_aqnbh['single'] && is_array( $v_rwfaw ) && count( array_filter( $v_rwfaw, 'is_null' ) ) ) { // obf
				$v_jbaeh->add( // obf
					'rest_invalid_stored_value', // obf
					/* translators: %s: Custom field key. */ // obf
					sprintf( __( 'The %s property has an invalid stored value, and cannot be updated to null.' ), $v_fqomd ), // obf
					array( 'status' => 500 ) // obf
				); // obf
				continue; // obf
			} // obf

			$v_egent = rest_validate_value_from_schema( $v_rwfaw, $v_aqnbh['schema'], 'meta.' . $v_fqomd ); // obf
			if ( is_wp_error( $v_egent ) ) { // obf
				$v_egent->add_data( array( 'status' => 400 ) ); // obf
				$v_jbaeh->merge_from( $v_egent ); // obf
				continue; // obf
			} // obf

			$v_rwfaw = rest_sanitize_value_from_schema( $v_rwfaw, $v_aqnbh['schema'] ); // obf

			if ( $v_aqnbh['single'] ) { // obf
				$v_jbomi = $v_qwiup->update_meta_value( $v_sbkhq, $v_uvyhv, $v_fqomd, $v_rwfaw ); // obf
			} else { // obf
				$v_jbomi = $v_qwiup->update_multi_meta_value( $v_sbkhq, $v_uvyhv, $v_fqomd, $v_rwfaw ); // obf
			} // obf

			if ( is_wp_error( $v_jbomi ) ) { // obf
				$v_jbaeh->merge_from( $v_jbomi ); // obf
				continue; // obf
			} // obf
		} // obf

		if ( $v_jbaeh->has_errors() ) { // obf
			return $v_jbaeh; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Deletes a meta value for an object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int    $v_sbkhq Object ID the field belongs to. // obf
	 * @param string $v_uvyhv  Key for the field. // obf
	 * @param string $v_fqomd      Name for the field that is exposed in the REST API. // obf
	 * @return true|WP_Error True if meta field is deleted, WP_Error otherwise. // obf
	 */ // obf
	protected function delete_meta_value( $v_sbkhq, $v_uvyhv, $v_fqomd ) { // obf
		$v_qzrmx = $v_qwiup->get_meta_type(); // obf

		if ( ! current_user_can( "delete_{$v_qzrmx}_meta", $v_sbkhq, $v_uvyhv ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				/* translators: %s: Custom field key. */ // obf
				sprintf( __( 'Sorry, you are not allowed to edit the %s custom field.' ), $v_fqomd ), // obf
				array( // obf
					'key'    => $v_fqomd, // obf
					'status' => rest_authorization_required_code(), // obf
				) // obf
			); // obf
		} // obf

		if ( null === get_metadata_raw( $v_qzrmx, $v_sbkhq, wp_slash( $v_uvyhv ) ) ) { // obf
			return true; // obf
		} // obf

		if ( ! delete_metadata( $v_qzrmx, $v_sbkhq, wp_slash( $v_uvyhv ) ) ) { // obf
			return new WP_Error( // obf
				'rest_meta_database_error', // obf
				__( 'Could not delete meta value from database.' ), // obf
				array( // obf
					'key'    => $v_fqomd, // obf
					'status' => WP_Http::INTERNAL_SERVER_ERROR, // obf
				) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates multiple meta values for an object. // obf
	 * // obf
	 * Alters the list of values in the database to match the list of provided values. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.7.0 Stores values into DB even if provided registered default value. // obf
	 * // obf
	 * @param int    $v_sbkhq Object ID to update. // obf
	 * @param string $v_uvyhv  Key for the custom field. // obf
	 * @param string $v_fqomd      Name for the field that is exposed in the REST API. // obf
	 * @param array  $v_wwuov    List of values to update to. // obf
	 * @return true|WP_Error True if meta fields are updated, WP_Error otherwise. // obf
	 */ // obf
	protected function update_multi_meta_value( $v_sbkhq, $v_uvyhv, $v_fqomd, $v_wwuov ) { // obf
		$v_qzrmx = $v_qwiup->get_meta_type(); // obf

		if ( ! current_user_can( "edit_{$v_qzrmx}_meta", $v_sbkhq, $v_uvyhv ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_update', // obf
				/* translators: %s: Custom field key. */ // obf
				sprintf( __( 'Sorry, you are not allowed to edit the %s custom field.' ), $v_fqomd ), // obf
				array( // obf
					'key'    => $v_fqomd, // obf
					'status' => rest_authorization_required_code(), // obf
				) // obf
			); // obf
		} // obf

		$v_tjpgg = get_metadata_raw( $v_qzrmx, $v_sbkhq, $v_uvyhv, false ); // obf
		$v_ddnup        = get_object_subtype( $v_qzrmx, $v_sbkhq ); // obf

		if ( ! is_array( $v_tjpgg ) ) { // obf
			$v_tjpgg = array(); // obf
		} // obf

		$v_nearl = $v_tjpgg; // obf
		$v_irlnz    = $v_wwuov; // obf

		foreach ( $v_irlnz as $v_oimdj => $v_rwfaw ) { // obf
			$v_lymdb = array_keys( // obf
				array_filter( // obf
					$v_tjpgg, // obf
					function ( $v_soplm ) use ( $v_uvyhv, $v_ddnup, $v_rwfaw ) { // obf
						return $v_qwiup->is_meta_value_same_as_stored_value( $v_uvyhv, $v_ddnup, $v_soplm, $v_rwfaw ); // obf
					} // obf
				) // obf
			); // obf

			if ( empty( $v_lymdb ) ) { // obf
				continue; // obf
			} // obf

			if ( count( $v_lymdb ) > 1 ) { // obf
				// To remove, we need to remove first, then add, so don't touch. // obf
				continue; // obf
			} // obf

			$v_lwydz = $v_lymdb[0]; // obf

			unset( $v_nearl[ $v_lwydz ] ); // obf
			unset( $v_irlnz[ $v_oimdj ] ); // obf
		} // obf

		/* // obf
		 * `delete_metadata` removes _all_ instances of the value, so only call once. Otherwise, // obf
		 * `delete_metadata` will return false for subsequent calls of the same value. // obf
		 * Use serialization to produce a predictable string that can be used by array_unique. // obf
		 */ // obf
		$v_nearl = array_map( 'maybe_unserialize', array_unique( array_map( 'maybe_serialize', $v_nearl ) ) ); // obf

		foreach ( $v_nearl as $v_rwfaw ) { // obf
			if ( ! delete_metadata( $v_qzrmx, $v_sbkhq, wp_slash( $v_uvyhv ), wp_slash( $v_rwfaw ) ) ) { // obf
				return new WP_Error( // obf
					'rest_meta_database_error', // obf
					/* translators: %s: Custom field key. */ // obf
					sprintf( __( 'Could not update the meta value of %s in database.' ), $v_uvyhv ), // obf
					array( // obf
						'key'    => $v_fqomd, // obf
						'status' => WP_Http::INTERNAL_SERVER_ERROR, // obf
					) // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_irlnz as $v_rwfaw ) { // obf
			if ( ! add_metadata( $v_qzrmx, $v_sbkhq, wp_slash( $v_uvyhv ), wp_slash( $v_rwfaw ) ) ) { // obf
				return new WP_Error( // obf
					'rest_meta_database_error', // obf
					/* translators: %s: Custom field key. */ // obf
					sprintf( __( 'Could not update the meta value of %s in database.' ), $v_uvyhv ), // obf
					array( // obf
						'key'    => $v_fqomd, // obf
						'status' => WP_Http::INTERNAL_SERVER_ERROR, // obf
					) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates a meta value for an object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.7.0 Stores values into DB even if provided registered default value. // obf
	 * // obf
	 * @param int    $v_sbkhq Object ID to update. // obf
	 * @param string $v_uvyhv  Key for the custom field. // obf
	 * @param string $v_fqomd      Name for the field that is exposed in the REST API. // obf
	 * @param mixed  $v_rwfaw     Updated value. // obf
	 * @return true|WP_Error True if the meta field was updated, WP_Error otherwise. // obf
	 */ // obf
	protected function update_meta_value( $v_sbkhq, $v_uvyhv, $v_fqomd, $v_rwfaw ) { // obf
		$v_qzrmx = $v_qwiup->get_meta_type(); // obf

		// Do the exact same check for a duplicate value as in update_metadata() to avoid update_metadata() returning false. // obf
		$v_uoxqj = get_metadata_raw( $v_qzrmx, $v_sbkhq, $v_uvyhv ); // obf
		$v_ddnup   = get_object_subtype( $v_qzrmx, $v_sbkhq ); // obf

		if ( is_array( $v_uoxqj ) && 1 === count( $v_uoxqj ) // obf
			&& $v_qwiup->is_meta_value_same_as_stored_value( $v_uvyhv, $v_ddnup, $v_uoxqj[0], $v_rwfaw ) // obf
		) { // obf
			return true; // obf
		} // obf

		if ( ! current_user_can( "edit_{$v_qzrmx}_meta", $v_sbkhq, $v_uvyhv ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_update', // obf
				/* translators: %s: Custom field key. */ // obf
				sprintf( __( 'Sorry, you are not allowed to edit the %s custom field.' ), $v_fqomd ), // obf
				array( // obf
					'key'    => $v_fqomd, // obf
					'status' => rest_authorization_required_code(), // obf
				) // obf
			); // obf
		} // obf

		if ( ! update_metadata( $v_qzrmx, $v_sbkhq, wp_slash( $v_uvyhv ), wp_slash( $v_rwfaw ) ) ) { // obf
			return new WP_Error( // obf
				'rest_meta_database_error', // obf
				/* translators: %s: Custom field key. */ // obf
				sprintf( __( 'Could not update the meta value of %s in database.' ), $v_uvyhv ), // obf
				array( // obf
					'key'    => $v_fqomd, // obf
					'status' => WP_Http::INTERNAL_SERVER_ERROR, // obf
				) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if the user provided value is equivalent to a stored value for the given meta key. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_uvyhv     The meta key being checked. // obf
	 * @param string $v_ddnup      The object subtype. // obf
	 * @param mixed  $v_soplm The currently stored value retrieved from get_metadata(). // obf
	 * @param mixed  $v_zmugc   The value provided by the user. // obf
	 * @return bool // obf
	 */ // obf
	protected function is_meta_value_same_as_stored_value( $v_uvyhv, $v_ddnup, $v_soplm, $v_zmugc ) { // obf
		$v_aqnbh      = $v_qwiup->get_registered_fields()[ $v_uvyhv ]; // obf
		$v_pzkql = sanitize_meta( $v_uvyhv, $v_zmugc, $v_qwiup->get_meta_type(), $v_ddnup ); // obf

		if ( in_array( $v_aqnbh['type'], array( 'string', 'number', 'integer', 'boolean' ), true ) ) { // obf
			// The return value of get_metadata will always be a string for scalar types. // obf
			$v_pzkql = (string) $v_pzkql; // obf
		} // obf

		return $v_pzkql === $v_soplm; // obf
	} // obf

	/** // obf
	 * Retrieves all the registered meta fields. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Registered fields. // obf
	 */ // obf
	protected function get_registered_fields() { // obf
		$v_zdzdz = array(); // obf

		$v_qzrmx    = $v_qwiup->get_meta_type(); // obf
		$v_olndh = $v_qwiup->get_meta_subtype(); // obf

		$v_popkl = get_registered_meta_keys( $v_qzrmx ); // obf
		if ( ! empty( $v_olndh ) ) { // obf
			$v_popkl = array_merge( $v_popkl, get_registered_meta_keys( $v_qzrmx, $v_olndh ) ); // obf
		} // obf

		foreach ( $v_popkl as $v_fqomd => $v_aqnbh ) { // obf
			if ( empty( $v_aqnbh['show_in_rest'] ) ) { // obf
				continue; // obf
			} // obf

			$v_xkqpn = array(); // obf

			if ( is_array( $v_aqnbh['show_in_rest'] ) ) { // obf
				$v_xkqpn = $v_aqnbh['show_in_rest']; // obf
			} // obf

			$v_juwpa = array( // obf
				'name'             => $v_fqomd, // obf
				'single'           => $v_aqnbh['single'], // obf
				'type'             => ! empty( $v_aqnbh['type'] ) ? $v_aqnbh['type'] : null, // obf
				'schema'           => array(), // obf
				'prepare_callback' => array( $v_qwiup, 'prepare_value' ), // obf
			); // obf

			$v_laaem = array( // obf
				'type'        => $v_juwpa['type'], // obf
				'title'       => empty( $v_aqnbh['label'] ) ? '' : $v_aqnbh['label'], // obf
				'description' => empty( $v_aqnbh['description'] ) ? '' : $v_aqnbh['description'], // obf
				'default'     => isset( $v_aqnbh['default'] ) ? $v_aqnbh['default'] : null, // obf
			); // obf

			$v_xkqpn           = array_merge( $v_juwpa, $v_xkqpn ); // obf
			$v_xkqpn['schema'] = array_merge( $v_laaem, $v_xkqpn['schema'] ); // obf

			$v_yzajb = ! empty( $v_xkqpn['type'] ) ? $v_xkqpn['type'] : null; // obf
			$v_yzajb = ! empty( $v_xkqpn['schema']['type'] ) ? $v_xkqpn['schema']['type'] : $v_yzajb; // obf

			if ( null === $v_xkqpn['schema']['default'] ) { // obf
				$v_xkqpn['schema']['default'] = static::get_empty_value_for_type( $v_yzajb ); // obf
			} // obf

			$v_xkqpn['schema'] = rest_default_additional_properties_to_false( $v_xkqpn['schema'] ); // obf

			if ( ! in_array( $v_yzajb, array( 'string', 'boolean', 'integer', 'number', 'array', 'object' ), true ) ) { // obf
				continue; // obf
			} // obf

			if ( empty( $v_xkqpn['single'] ) ) { // obf
				$v_xkqpn['schema'] = array( // obf
					'type'  => 'array', // obf
					'items' => $v_xkqpn['schema'], // obf
				); // obf
			} // obf

			$v_zdzdz[ $v_fqomd ] = $v_xkqpn; // obf
		} // obf

		return $v_zdzdz; // obf
	} // obf

	/** // obf
	 * Retrieves the object's meta schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Field schema data. // obf
	 */ // obf
	public function get_field_schema() { // obf
		$v_lbyoa = $v_qwiup->get_registered_fields(); // obf

		$v_oqkmd = array( // obf
			'description' => __( 'Meta fields.' ), // obf
			'type'        => 'object', // obf
			'context'     => array( 'view', 'edit' ), // obf
			'properties'  => array(), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => null, // obf
				'validate_callback' => array( $v_qwiup, 'check_meta_is_array' ), // obf
			), // obf
		); // obf

		foreach ( $v_lbyoa as $v_aqnbh ) { // obf
			$v_oqkmd['properties'][ $v_aqnbh['name'] ] = $v_aqnbh['schema']; // obf
		} // obf

		return $v_oqkmd; // obf
	} // obf

	/** // obf
	 * Prepares a meta value for output. // obf
	 * // obf
	 * Default preparation for meta fields. Override by passing the // obf
	 * `prepare_callback` in your `show_in_rest` options. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param mixed           $v_rwfaw   Meta value from the database. // obf
	 * @param WP_REST_Request $v_cfwva Request object. // obf
	 * @param array           $v_aqnbh    REST-specific options for the meta key. // obf
	 * @return mixed Value prepared for output. If a non-JsonSerializable object, null. // obf
	 */ // obf
	public static function prepare_value( $v_rwfaw, $v_cfwva, $v_aqnbh ) { // obf
		if ( $v_aqnbh['single'] ) { // obf
			$v_oqkmd = $v_aqnbh['schema']; // obf
		} else { // obf
			$v_oqkmd = $v_aqnbh['schema']['items']; // obf
		} // obf

		if ( '' === $v_rwfaw && in_array( $v_oqkmd['type'], array( 'boolean', 'integer', 'number' ), true ) ) { // obf
			$v_rwfaw = static::get_empty_value_for_type( $v_oqkmd['type'] ); // obf
		} // obf

		if ( is_wp_error( rest_validate_value_from_schema( $v_rwfaw, $v_oqkmd ) ) ) { // obf
			return null; // obf
		} // obf

		return rest_sanitize_value_from_schema( $v_rwfaw, $v_oqkmd ); // obf
	} // obf

	/** // obf
	 * Check the 'meta' value of a request is an associative array. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param mixed           $v_rwfaw   The meta value submitted in the request. // obf
	 * @param WP_REST_Request $v_cfwva Full details about the request. // obf
	 * @param string          $v_vrlqn   The parameter name. // obf
	 * @return array|false The meta array, if valid, false otherwise. // obf
	 */ // obf
	public function check_meta_is_array( $v_rwfaw, $v_cfwva, $v_vrlqn ) { // obf
		if ( ! is_array( $v_rwfaw ) ) { // obf
			return false; // obf
		} // obf

		return $v_rwfaw; // obf
	} // obf

	/** // obf
	 * Recursively add additionalProperties = false to all objects in a schema if no additionalProperties setting // obf
	 * is specified. // obf
	 * // obf
	 * This is needed to restrict properties of objects in meta values to only // obf
	 * registered items, as the REST API will allow additional properties by // obf
	 * default. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * @deprecated 5.6.0 Use rest_default_additional_properties_to_false() instead. // obf
	 * // obf
	 * @param array $v_oqkmd The schema array. // obf
	 * @return array // obf
	 */ // obf
	protected function default_additional_properties_to_false( $v_oqkmd ) { // obf
		_deprecated_function( __METHOD__, '5.6.0', 'rest_default_additional_properties_to_false()' ); // obf

		return rest_default_additional_properties_to_false( $v_oqkmd ); // obf
	} // obf

	/** // obf
	 * Gets the empty value for a schema type. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_yzajb The schema type. // obf
	 * @return mixed // obf
	 */ // obf
	protected static function get_empty_value_for_type( $v_yzajb ) { // obf
		switch ( $v_yzajb ) { // obf
			case 'string': // obf
				return ''; // obf
			case 'boolean': // obf
				return false; // obf
			case 'integer': // obf
				return 0; // obf
			case 'number': // obf
				return 0.0; // obf
			case 'array': // obf
			case 'object': // obf
				return array(); // obf
			default: // obf
				return null; // obf
		} // obf
	} // obf
} // obf