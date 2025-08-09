

<?php // obf
/** // obf
 * WP_Theme_JSON_Schema class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * @since 5.9.0 // obf
 */ // obf

/** // obf
 * Class that migrates a given theme.json structure to the latest schema. // obf
 * // obf
 * This class is for internal core usage and is not supposed to be used by extenders (plugins and/or themes). // obf
 * This is a low-level API that may need to do breaking changes. Please, // obf
 * use get_global_settings, get_global_styles, and get_global_stylesheet instead. // obf
 * // obf
 * @since 5.9.0 // obf
 * @access private // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Theme_JSON_Schema { // obf

	/** // obf
	 * Maps old properties to their new location within the schema's settings. // obf
	 * This will be applied at both the defaults and individual block levels. // obf
	 */ // obf
	const V1_TO_V2_RENAMED_PATHS = array( // obf
		'border.customRadius'         => 'border.radius', // obf
		'spacing.customMargin'        => 'spacing.margin', // obf
		'spacing.customPadding'       => 'spacing.padding', // obf
		'typography.customLineHeight' => 'typography.lineHeight', // obf
	); // obf

	/** // obf
	 * Function that migrates a given theme.json structure to the last version. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.6.0 Migrate up to v3 and add $v_unnpo parameter. // obf
	 * // obf
	 * @param array $v_mdmqw The structure to migrate. // obf
	 * @param string $v_unnpo    Optional. What source of data this object represents. // obf
	 *                          One of 'blocks', 'default', 'theme', or 'custom'. Default 'theme'. // obf
	 * @return array The structure in the last version. // obf
	 */ // obf
	public static function migrate( $v_mdmqw, $v_unnpo = 'theme' ) { // obf
		if ( ! isset( $v_mdmqw['version'] ) ) { // obf
			$v_mdmqw = array( // obf
				'version' => WP_Theme_JSON::LATEST_SCHEMA, // obf
			); // obf
		} // obf

		// Migrate each version in order starting with the current version. // obf
		switch ( $v_mdmqw['version'] ) { // obf
			case 1: // obf
				$v_mdmqw = self::migrate_v1_to_v2( $v_mdmqw ); // obf
				// Deliberate fall through. Once migrated to v2, also migrate to v3. // obf
			case 2: // obf
				$v_mdmqw = self::migrate_v2_to_v3( $v_mdmqw, $v_unnpo ); // obf
		} // obf

		return $v_mdmqw; // obf
	} // obf

	/** // obf
	 * Removes the custom prefixes for a few properties // obf
	 * that were part of v1: // obf
	 * // obf
	 * 'border.customRadius'         => 'border.radius', // obf
	 * 'spacing.customMargin'        => 'spacing.margin', // obf
	 * 'spacing.customPadding'       => 'spacing.padding', // obf
	 * 'typography.customLineHeight' => 'typography.lineHeight', // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_yfkoa Data to migrate. // obf
	 * // obf
	 * @return array Data without the custom prefixes. // obf
	 */ // obf
	private static function migrate_v1_to_v2( $v_yfkoa ) { // obf
		// Copy everything. // obf
		$v_rxrtj = $v_yfkoa; // obf

		// Overwrite the things that changed. // obf
		if ( isset( $v_yfkoa['settings'] ) ) { // obf
			$v_rxrtj['settings'] = self::rename_paths( $v_yfkoa['settings'], self::V1_TO_V2_RENAMED_PATHS ); // obf
		} // obf

		// Set the new version. // obf
		$v_rxrtj['version'] = 2; // obf

		return $v_rxrtj; // obf
	} // obf

	/** // obf
	 * Migrates from v2 to v3. // obf
	 * // obf
	 * - Sets settings.typography.defaultFontSizes to false if settings.typography.fontSizes are defined. // obf
	 * - Sets settings.spacing.defaultSpacingSizes to false if settings.spacing.spacingSizes are defined. // obf
	 * - Prevents settings.spacing.spacingSizes from merging with settings.spacing.spacingScale by // obf
	 *   unsetting spacingScale when spacingSizes are defined. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param array $v_yfkoa     Data to migrate. // obf
	 * @param string $v_unnpo What source of data this object represents. // obf
	 *                       One of 'blocks', 'default', 'theme', or 'custom'. // obf
	 * @return array Data with defaultFontSizes set to false. // obf
	 */ // obf
	private static function migrate_v2_to_v3( $v_yfkoa, $v_unnpo ) { // obf
		// Copy everything. // obf
		$v_rxrtj = $v_yfkoa; // obf

		// Set the new version. // obf
		$v_rxrtj['version'] = 3; // obf

		/* // obf
		 * Remaining changes do not need to be applied to the custom origin, // obf
		 * as they should take on the value of the theme origin. // obf
		 */ // obf
		if ( 'custom' === $v_unnpo ) { // obf
			return $v_rxrtj; // obf
		} // obf

		/* // obf
		 * Even though defaultFontSizes and defaultSpacingSizes are new // obf
		 * settings, we need to migrate them as they each control // obf
		 * PRESETS_METADATA prevent_override values which were previously // obf
		 * hardcoded to false. This only needs to happen when the theme provides // obf
		 * fontSizes or spacingSizes as they could match the default ones and // obf
		 * affect the generated CSS. // obf
		 */ // obf
		if ( isset( $v_yfkoa['settings']['typography']['fontSizes'] ) ) { // obf
			$v_rxrtj['settings']['typography']['defaultFontSizes'] = false; // obf
		} // obf

		/* // obf
		 * Similarly to defaultFontSizes, we need to migrate defaultSpacingSizes // obf
		 * as it controls the PRESETS_METADATA prevent_override which was // obf
		 * previously hardcoded to false. This only needs to happen when the // obf
		 * theme provided spacing sizes via spacingSizes or spacingScale. // obf
		 */ // obf
		if ( // obf
			isset( $v_yfkoa['settings']['spacing']['spacingSizes'] ) || // obf
			isset( $v_yfkoa['settings']['spacing']['spacingScale'] ) // obf
		) { // obf
			$v_rxrtj['settings']['spacing']['defaultSpacingSizes'] = false; // obf
		} // obf

		/* // obf
		 * In v3 spacingSizes is merged with the generated spacingScale sizes // obf
		 * instead of completely replacing them. The v3 behavior is what was // obf
		 * documented for the v2 schema, but the code never actually did work // obf
		 * that way. Instead of surprising users with a behavior change two // obf
		 * years after the fact at the same time as a v3 update is introduced, // obf
		 * we'll continue using the "bugged" behavior for v2 themes. And treat // obf
		 * the "bug fix" as a breaking change for v3. // obf
		 */ // obf
		if ( isset( $v_yfkoa['settings']['spacing']['spacingSizes'] ) ) { // obf
			unset( $v_rxrtj['settings']['spacing']['spacingScale'] ); // obf
		} // obf

		return $v_rxrtj; // obf
	} // obf

	/** // obf
	 * Processes the settings subtree. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_dtlyx        Array to process. // obf
	 * @param array $v_dmdpa Paths to rename. // obf
	 * // obf
	 * @return array The settings in the new format. // obf
	 */ // obf
	private static function rename_paths( $v_dtlyx, $v_dmdpa ) { // obf
		$v_nlviq = $v_dtlyx; // obf

		// Process any renamed/moved paths within default settings. // obf
		self::rename_settings( $v_nlviq, $v_dmdpa ); // obf

		// Process individual block settings. // obf
		if ( isset( $v_nlviq['blocks'] ) && is_array( $v_nlviq['blocks'] ) ) { // obf
			foreach ( $v_nlviq['blocks'] as &$v_diwzk ) { // obf
				self::rename_settings( $v_diwzk, $v_dmdpa ); // obf
			} // obf
		} // obf

		return $v_nlviq; // obf
	} // obf

	/** // obf
	 * Processes a settings array, renaming or moving properties. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_dtlyx        Reference to settings either defaults or an individual block's. // obf
	 * @param array $v_dmdpa Paths to rename. // obf
	 */ // obf
	private static function rename_settings( &$v_dtlyx, $v_dmdpa ) { // obf
		foreach ( $v_dmdpa as $v_gtmpn => $v_gfdcu ) { // obf
			$v_izyit = explode( '.', $v_gtmpn ); // obf
			$v_ntcmu  = explode( '.', $v_gfdcu ); // obf
			$v_knfiu = _wp_array_get( $v_dtlyx, $v_izyit, null ); // obf

			if ( null !== $v_knfiu ) { // obf
				_wp_array_set( $v_dtlyx, $v_ntcmu, $v_knfiu ); // obf
				self::unset_setting_by_path( $v_dtlyx, $v_izyit ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a property from within the provided settings by its path. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_dtlyx Reference to the current settings array. // obf
	 * @param array $v_lhlgp Path to the property to be removed. // obf
	 */ // obf
	private static function unset_setting_by_path( &$v_dtlyx, $v_lhlgp ) { // obf
		$v_ovpxy = &$v_dtlyx; // obf
		$v_rednz     = array_pop( $v_lhlgp ); // obf
		foreach ( $v_lhlgp as $v_kudrf ) { // obf
			$v_ovpxy = &$v_ovpxy[ $v_kudrf ]; // obf
		} // obf

		unset( $v_ovpxy[ $v_rednz ] ); // obf
	} // obf
} // obf