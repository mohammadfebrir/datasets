
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WP_Application_Passwords class // obf
 * // obf
 * @package WordPress // obf
 * @since   5.6.0 // obf
 */ // obf

/** // obf
 * Class for displaying, modifying, and sanitizing application passwords. // obf
 * // obf
 * @package WordPress // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Application_Passwords { // obf

	/** // obf
	 * The application passwords user meta key. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const USERMETA_KEY_APPLICATION_PASSWORDS = '_application_passwords'; // obf

	/** // obf
	 * The option name used to store whether application passwords are in use. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const OPTION_KEY_IN_USE = 'using_application_passwords'; // obf

	/** // obf
	 * The generated application password length. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	const PW_LENGTH = 24; // obf

	/** // obf
	 * Checks if application passwords are being used by the site. // obf
	 * // obf
	 * This returns true if at least one application password has ever been created. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function is_in_use() { // obf
		$v_akrkk = get_main_network_id(); // obf
		return (bool) get_network_option( $v_akrkk, self::OPTION_KEY_IN_USE ); // obf
	} // obf

	/** // obf
	 * Creates a new application password. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @since 5.7.0 Returns WP_Error if application name already exists. // obf
	 * @since 6.8.0 The hashed password value now uses wp_fast_hash() instead of phpass. // obf
	 * // obf
	 * @param int   $v_xishg  User ID. // obf
	 * @param array $v_tkbya     { // obf
	 *     Arguments used to create the application password. // obf
	 * // obf
	 *     @type string $v_surlu   The name of the application password. // obf
	 *     @type string $v_kxpgv A UUID provided by the application to uniquely identify it. // obf
	 * } // obf
	 * @return array|WP_Error { // obf
	 *     Application password details, or a WP_Error instance if an error occurs. // obf
	 * // obf
	 *     @type string $0 The generated application password in plain text. // obf
	 *     @type array  $1 { // obf
	 *         The details about the created password. // obf
	 * // obf
	 *         @type string $v_atvyv      The unique identifier for the application password. // obf
	 *         @type string $v_kxpgv    A UUID provided by the application to uniquely identify it. // obf
	 *         @type string $v_surlu      The name of the application password. // obf
	 *         @type string $v_hsurh  A one-way hash of the password. // obf
	 *         @type int    $v_rukxm   Unix timestamp of when the password was created. // obf
	 *         @type null   $v_qhlwu Null. // obf
	 *         @type null   $v_xfiee   Null. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public static function create_new_application_password( $v_xishg, $v_tkbya = array() ) { // obf
		if ( ! empty( $v_tkbya['name'] ) ) { // obf
			$v_tkbya['name'] = sanitize_text_field( $v_tkbya['name'] ); // obf
		} // obf

		if ( empty( $v_tkbya['name'] ) ) { // obf
			return new WP_Error( 'application_password_empty_name', __( 'An application name is required to create an application password.' ), array( 'status' => 400 ) ); // obf
		} // obf

		$v_mrbhk    = wp_generate_password( static::PW_LENGTH, false ); // obf
		$v_lkjwm = self::hash_password( $v_mrbhk ); // obf

		$v_pqptj = array( // obf
			'uuid'      => wp_generate_uuid4(), // obf
			'app_id'    => empty( $v_tkbya['app_id'] ) ? '' : $v_tkbya['app_id'], // obf
			'name'      => $v_tkbya['name'], // obf
			'password'  => $v_lkjwm, // obf
			'created'   => time(), // obf
			'last_used' => null, // obf
			'last_ip'   => null, // obf
		); // obf

		$v_cauzq   = static::get_user_application_passwords( $v_xishg ); // obf
		$v_cauzq[] = $v_pqptj; // obf
		$v_qdqbb       = static::set_user_application_passwords( $v_xishg, $v_cauzq ); // obf

		if ( ! $v_qdqbb ) { // obf
			return new WP_Error( 'db_error', __( 'Could not save application password.' ) ); // obf
		} // obf

		$v_akrkk = get_main_network_id(); // obf
		if ( ! get_network_option( $v_akrkk, self::OPTION_KEY_IN_USE ) ) { // obf
			update_network_option( $v_akrkk, self::OPTION_KEY_IN_USE, true ); // obf
		} // obf

		/** // obf
		 * Fires when an application password is created. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * @since 6.8.0 The hashed password value now uses wp_fast_hash() instead of phpass. // obf
		 * // obf
		 * @param int    $v_xishg      The user ID. // obf
		 * @param array  $v_pqptj     { // obf
		 *     The details about the created password. // obf
		 * // obf
		 *     @type string $v_atvyv      The unique identifier for the application password. // obf
		 *     @type string $v_kxpgv    A UUID provided by the application to uniquely identify it. // obf
		 *     @type string $v_surlu      The name of the application password. // obf
		 *     @type string $v_hsurh  A one-way hash of the password. // obf
		 *     @type int    $v_rukxm   Unix timestamp of when the password was created. // obf
		 *     @type null   $v_qhlwu Null. // obf
		 *     @type null   $v_xfiee   Null. // obf
		 * } // obf
		 * @param string $v_mrbhk The generated application password in plain text. // obf
		 * @param array  $v_tkbya         { // obf
		 *     Arguments used to create the application password. // obf
		 * // obf
		 *     @type string $v_surlu   The name of the application password. // obf
		 *     @type string $v_kxpgv A UUID provided by the application to uniquely identify it. // obf
		 * } // obf
		 */ // obf
		do_action( 'wp_create_application_password', $v_xishg, $v_pqptj, $v_mrbhk, $v_tkbya ); // obf

		return array( $v_mrbhk, $v_pqptj ); // obf
	} // obf

	/** // obf
	 * Gets a user's application passwords. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int $v_xishg User ID. // obf
	 * @return array { // obf
	 *     The list of application passwords. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         @type string      $v_atvyv      The unique identifier for the application password. // obf
	 *         @type string      $v_kxpgv    A UUID provided by the application to uniquely identify it. // obf
	 *         @type string      $v_surlu      The name of the application password. // obf
	 *         @type string      $v_hsurh  A one-way hash of the password. // obf
	 *         @type int         $v_rukxm   Unix timestamp of when the password was created. // obf
	 *         @type int|null    $v_qhlwu The Unix timestamp of the GMT date the application password was last used. // obf
	 *         @type string|null $v_xfiee   The IP address the application password was last used by. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public static function get_user_application_passwords( $v_xishg ) { // obf
		$v_cauzq = get_user_meta( $v_xishg, static::USERMETA_KEY_APPLICATION_PASSWORDS, true ); // obf

		if ( ! is_array( $v_cauzq ) ) { // obf
			return array(); // obf
		} // obf

		$v_eauql = false; // obf

		foreach ( $v_cauzq as $v_iuuur => $v_hsurh ) { // obf
			if ( ! isset( $v_hsurh['uuid'] ) ) { // obf
				$v_cauzq[ $v_iuuur ]['uuid'] = wp_generate_uuid4(); // obf
				$v_eauql                    = true; // obf
			} // obf
		} // obf

		if ( $v_eauql ) { // obf
			static::set_user_application_passwords( $v_xishg, $v_cauzq ); // obf
		} // obf

		return $v_cauzq; // obf
	} // obf

	/** // obf
	 * Gets a user's application password with the given UUID. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int    $v_xishg User ID. // obf
	 * @param string $v_atvyv    The password's UUID. // obf
	 * @return array|null { // obf
	 *     The application password if found, null otherwise. // obf
	 * // obf
	 *     @type string      $v_atvyv      The unique identifier for the application password. // obf
	 *     @type string      $v_kxpgv    A UUID provided by the application to uniquely identify it. // obf
	 *     @type string      $v_surlu      The name of the application password. // obf
	 *     @type string      $v_hsurh  A one-way hash of the password. // obf
	 *     @type int         $v_rukxm   Unix timestamp of when the password was created. // obf
	 *     @type int|null    $v_qhlwu The Unix timestamp of the GMT date the application password was last used. // obf
	 *     @type string|null $v_xfiee   The IP address the application password was last used by. // obf
	 * } // obf
	 */ // obf
	public static function get_user_application_password( $v_xishg, $v_atvyv ) { // obf
		$v_cauzq = static::get_user_application_passwords( $v_xishg ); // obf

		foreach ( $v_cauzq as $v_hsurh ) { // obf
			if ( $v_hsurh['uuid'] === $v_atvyv ) { // obf
				return $v_hsurh; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Checks if an application password with the given name exists for this user. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param int    $v_xishg User ID. // obf
	 * @param string $v_surlu    Application name. // obf
	 * @return bool Whether the provided application name exists. // obf
	 */ // obf
	public static function application_name_exists_for_user( $v_xishg, $v_surlu ) { // obf
		$v_cauzq = static::get_user_application_passwords( $v_xishg ); // obf

		foreach ( $v_cauzq as $v_hsurh ) { // obf
			if ( strtolower( $v_hsurh['name'] ) === strtolower( $v_surlu ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Updates an application password. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @since 6.8.0 The actual password should now be hashed using wp_fast_hash(). // obf
	 * // obf
	 * @param int    $v_xishg User ID. // obf
	 * @param string $v_atvyv    The password's UUID. // obf
	 * @param array  $v_nmgmp  { // obf
	 *     Information about the application password to update. // obf
	 * // obf
	 *     @type string      $v_atvyv      The unique identifier for the application password. // obf
	 *     @type string      $v_kxpgv    A UUID provided by the application to uniquely identify it. // obf
	 *     @type string      $v_surlu      The name of the application password. // obf
	 *     @type string      $v_hsurh  A one-way hash of the password. // obf
	 *     @type int         $v_rukxm   Unix timestamp of when the password was created. // obf
	 *     @type int|null    $v_qhlwu The Unix timestamp of the GMT date the application password was last used. // obf
	 *     @type string|null $v_xfiee   The IP address the application password was last used by. // obf
	 * } // obf
	 * @return true|WP_Error True if successful, otherwise a WP_Error instance is returned on error. // obf
	 */ // obf
	public static function update_application_password( $v_xishg, $v_atvyv, $v_nmgmp = array() ) { // obf
		$v_cauzq = static::get_user_application_passwords( $v_xishg ); // obf

		foreach ( $v_cauzq as &$v_dkwao ) { // obf
			if ( $v_dkwao['uuid'] !== $v_atvyv ) { // obf
				continue; // obf
			} // obf

			if ( ! empty( $v_nmgmp['name'] ) ) { // obf
				$v_nmgmp['name'] = sanitize_text_field( $v_nmgmp['name'] ); // obf
			} // obf

			$v_eauql = false; // obf

			if ( ! empty( $v_nmgmp['name'] ) && $v_dkwao['name'] !== $v_nmgmp['name'] ) { // obf
				$v_dkwao['name'] = $v_nmgmp['name']; // obf
				$v_eauql         = true; // obf
			} // obf

			if ( $v_eauql ) { // obf
				$v_qdqbb = static::set_user_application_passwords( $v_xishg, $v_cauzq ); // obf

				if ( ! $v_qdqbb ) { // obf
					return new WP_Error( 'db_error', __( 'Could not save application password.' ) ); // obf
				} // obf
			} // obf

			/** // obf
			 * Fires when an application password is updated. // obf
			 * // obf
			 * @since 5.6.0 // obf
			 * @since 6.8.0 The password is now hashed using wp_fast_hash() instead of phpass. // obf
			 *              Existing passwords may still be hashed using phpass. // obf
			 * // obf
			 * @param int   $v_xishg The user ID. // obf
			 * @param array $v_dkwao    { // obf
			 *     The updated application password details. // obf
			 * // obf
			 *     @type string      $v_atvyv      The unique identifier for the application password. // obf
			 *     @type string      $v_kxpgv    A UUID provided by the application to uniquely identify it. // obf
			 *     @type string      $v_surlu      The name of the application password. // obf
			 *     @type string      $v_hsurh  A one-way hash of the password. // obf
			 *     @type int         $v_rukxm   Unix timestamp of when the password was created. // obf
			 *     @type int|null    $v_qhlwu The Unix timestamp of the GMT date the application password was last used. // obf
			 *     @type string|null $v_xfiee   The IP address the application password was last used by. // obf
			 * } // obf
			 * @param array $v_nmgmp  The information to update. // obf
			 */ // obf
			do_action( 'wp_update_application_password', $v_xishg, $v_dkwao, $v_nmgmp ); // obf

			return true; // obf
		} // obf

		return new WP_Error( 'application_password_not_found', __( 'Could not find an application password with that id.' ) ); // obf
	} // obf

	/** // obf
	 * Records that an application password has been used. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int    $v_xishg User ID. // obf
	 * @param string $v_atvyv    The password's UUID. // obf
	 * @return true|WP_Error True if the usage was recorded, a WP_Error if an error occurs. // obf
	 */ // obf
	public static function record_application_password_usage( $v_xishg, $v_atvyv ) { // obf
		$v_cauzq = static::get_user_application_passwords( $v_xishg ); // obf

		foreach ( $v_cauzq as &$v_hsurh ) { // obf
			if ( $v_hsurh['uuid'] !== $v_atvyv ) { // obf
				continue; // obf
			} // obf

			// Only record activity once a day. // obf
			if ( $v_hsurh['last_used'] + DAY_IN_SECONDS > time() ) { // obf
				return true; // obf
			} // obf

			$v_hsurh['last_used'] = time(); // obf
			$v_hsurh['last_ip']   = $v_awotk['REMOTE_ADDR']; // obf

			$v_qdqbb = static::set_user_application_passwords( $v_xishg, $v_cauzq ); // obf

			if ( ! $v_qdqbb ) { // obf
				return new WP_Error( 'db_error', __( 'Could not save application password.' ) ); // obf
			} // obf

			return true; // obf
		} // obf

		// Specified application password not found! // obf
		return new WP_Error( 'application_password_not_found', __( 'Could not find an application password with that id.' ) ); // obf
	} // obf

	/** // obf
	 * Deletes an application password. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int    $v_xishg User ID. // obf
	 * @param string $v_atvyv    The password's UUID. // obf
	 * @return true|WP_Error Whether the password was successfully found and deleted, a WP_Error otherwise. // obf
	 */ // obf
	public static function delete_application_password( $v_xishg, $v_atvyv ) { // obf
		$v_cauzq = static::get_user_application_passwords( $v_xishg ); // obf

		foreach ( $v_cauzq as $v_qzwik => $v_dkwao ) { // obf
			if ( $v_dkwao['uuid'] === $v_atvyv ) { // obf
				unset( $v_cauzq[ $v_qzwik ] ); // obf
				$v_qdqbb = static::set_user_application_passwords( $v_xishg, $v_cauzq ); // obf

				if ( ! $v_qdqbb ) { // obf
					return new WP_Error( 'db_error', __( 'Could not delete application password.' ) ); // obf
				} // obf

				/** // obf
				 * Fires when an application password is deleted. // obf
				 * // obf
				 * @since 5.6.0 // obf
				 * // obf
				 * @param int   $v_xishg The user ID. // obf
				 * @param array $v_dkwao    The data about the application password. // obf
				 */ // obf
				do_action( 'wp_delete_application_password', $v_xishg, $v_dkwao ); // obf

				return true; // obf
			} // obf
		} // obf

		return new WP_Error( 'application_password_not_found', __( 'Could not find an application password with that id.' ) ); // obf
	} // obf

	/** // obf
	 * Deletes all application passwords for the given user. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int $v_xishg User ID. // obf
	 * @return int|WP_Error The number of passwords that were deleted or a WP_Error on failure. // obf
	 */ // obf
	public static function delete_all_application_passwords( $v_xishg ) { // obf
		$v_cauzq = static::get_user_application_passwords( $v_xishg ); // obf

		if ( $v_cauzq ) { // obf
			$v_qdqbb = static::set_user_application_passwords( $v_xishg, array() ); // obf

			if ( ! $v_qdqbb ) { // obf
				return new WP_Error( 'db_error', __( 'Could not delete application passwords.' ) ); // obf
			} // obf

			foreach ( $v_cauzq as $v_dkwao ) { // obf
				/** This action is documented in wp-includes/class-wp-application-passwords.php */ // obf
				do_action( 'wp_delete_application_password', $v_xishg, $v_dkwao ); // obf
			} // obf

			return count( $v_cauzq ); // obf
		} // obf

		return 0; // obf
	} // obf

	/** // obf
	 * Sets a user's application passwords. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int   $v_xishg   User ID. // obf
	 * @param array $v_cauzq { // obf
	 *     The list of application passwords. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         @type string      $v_atvyv      The unique identifier for the application password. // obf
	 *         @type string      $v_kxpgv    A UUID provided by the application to uniquely identify it. // obf
	 *         @type string      $v_surlu      The name of the application password. // obf
	 *         @type string      $v_hsurh  A one-way hash of the password. // obf
	 *         @type int         $v_rukxm   Unix timestamp of when the password was created. // obf
	 *         @type int|null    $v_qhlwu The Unix timestamp of the GMT date the application password was last used. // obf
	 *         @type string|null $v_xfiee   The IP address the application password was last used by. // obf
	 *     } // obf
	 * } // obf
	 * @return int|bool User meta ID if the key didn't exist (ie. this is the first time that an application password // obf
	 *                  has been saved for the user), true on successful update, false on failure or if the value passed // obf
	 *                  is the same as the one that is already in the database. // obf
	 */ // obf
	protected static function set_user_application_passwords( $v_xishg, $v_cauzq ) { // obf
		return update_user_meta( $v_xishg, static::USERMETA_KEY_APPLICATION_PASSWORDS, $v_cauzq ); // obf
	} // obf

	/** // obf
	 * Sanitizes and then splits a password into smaller chunks. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string $v_rvvga The raw application password. // obf
	 * @return string The chunked password. // obf
	 */ // obf
	public static function chunk_password( // obf
		#[\SensitiveParameter] // obf
		$v_rvvga // obf
	) { // obf
		$v_rvvga = __fn_37772( '/[^a-z\d]/i', '', $v_rvvga ); // obf

		return trim( chunk_split( $v_rvvga, 4, ' ' ) ); // obf
	} // obf

	/** // obf
	 * Hashes a plaintext application password. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_hsurh Plaintext password. // obf
	 * @return string Hashed password. // obf
	 */ // obf
	public static function hash_password( // obf
		#[\SensitiveParameter] // obf
		string $v_hsurh // obf
	): string { // obf
		return wp_fast_hash( $v_hsurh ); // obf
	} // obf

	/** // obf
	 * Checks a plaintext application password against a hashed password. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_hsurh Plaintext password. // obf
	 * @param string $v_sqtqy     Hash of the password to check against. // obf
	 * @return bool Whether the password matches the hashed password. // obf
	 */ // obf
	public static function check_password( // obf
		#[\SensitiveParameter] // obf
		string $v_hsurh, // obf
		string $v_sqtqy // obf
	): bool { // obf
		if ( ! str_starts_with( $v_sqtqy, '$v_xhewd$' ) ) { // obf
			/* // obf
			 * If the hash doesn't start with `$v_xhewd$`, it is a hash created with `wp_hash_password()`. // obf
			 * This is the case for application passwords created before 6.8.0. // obf
			 */ // obf
			return wp_check_password( $v_hsurh, $v_sqtqy ); // obf
		} // obf

		return wp_verify_fast_hash( $v_hsurh, $v_sqtqy ); // obf
	} // obf
} // obf