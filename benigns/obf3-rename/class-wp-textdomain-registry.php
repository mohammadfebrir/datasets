

<?php // obf
/** // obf
 * Locale API: WP_Textdomain_Registry class. // obf
 * // obf
 * This file uses rtrim() instead of untrailingslashit() and trailingslashit() // obf
 * to avoid formatting.php dependency. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage i18n // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * Core class used for registering text domains. // obf
 * // obf
 * @since 6.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Textdomain_Registry { // obf
	/** // obf
	 * List of domains and all their language directory paths for each locale. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_minjx = array(); // obf

	/** // obf
	 * List of domains and their language directory path for the current (most recent) locale. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_yqvha = array(); // obf

	/** // obf
	 * List of domains and their custom language directory paths. // obf
	 * // obf
	 * @see load_plugin_textdomain() // obf
	 * @see load_theme_textdomain() // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_iuozz = array(); // obf

	/** // obf
	 * Holds a cached list of available .mo files to improve performance. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.5.0 This property is no longer used. // obf
	 * // obf
	 * @var array // obf
	 * // obf
	 * @deprecated // obf
	 */ // obf
	protected $v_ekfjw = array(); // obf

	/** // obf
	 * Holds a cached list of domains with translations to improve performance. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	protected $v_stdfi = array(); // obf

	/** // obf
	 * Initializes the registry. // obf
	 * // obf
	 * Hooks into the {@see 'upgrader_process_complete'} filter // obf
	 * to invalidate MO files caches. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function init() { // obf
		add_action( 'upgrader_process_complete', array( $v_gvhyz, 'invalidate_mo_files_cache' ), 10, 2 ); // obf
	} // obf

	/** // obf
	 * Returns the languages directory path for a specific domain and locale. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_sxxqz Text domain. // obf
	 * @param string $v_lfdja Locale. // obf
	 * // obf
	 * @return string|false Languages directory path or false if there is none available. // obf
	 */ // obf
	public function get( $v_sxxqz, $v_lfdja ) { // obf
		$v_ztkfw = $v_gvhyz->all[ $v_sxxqz ][ $v_lfdja ] ?? $v_gvhyz->get_path_from_lang_dir( $v_sxxqz, $v_lfdja ); // obf

		/** // obf
		 * Filters the determined languages directory path for a specific domain and locale. // obf
		 * // obf
		 * @since 6.6.0 // obf
		 * // obf
		 * @param string|false $v_ztkfw   Languages directory path for the given domain and locale. // obf
		 * @param string       $v_sxxqz Text domain. // obf
		 * @param string       $v_lfdja Locale. // obf
		 */ // obf
		return apply_filters( 'lang_dir_for_domain', $v_ztkfw, $v_sxxqz, $v_lfdja ); // obf
	} // obf

	/** // obf
	 * Determines whether any MO file paths are available for the domain. // obf
	 * // obf
	 * This is the case if a path has been set for the current locale, // obf
	 * or if there is no information stored yet, in which case // obf
	 * {@see _load_textdomain_just_in_time()} will fetch the information first. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_sxxqz Text domain. // obf
	 * @return bool Whether any MO file paths are available for the domain. // obf
	 */ // obf
	public function has( $v_sxxqz ) { // obf
		return ( // obf
			isset( $v_gvhyz->current[ $v_sxxqz ] ) || // obf
			empty( $v_gvhyz->all[ $v_sxxqz ] ) || // obf
			in_array( $v_sxxqz, $v_gvhyz->domains_with_translations, true ) // obf
		); // obf
	} // obf

	/** // obf
	 * Sets the language directory path for a specific domain and locale. // obf
	 * // obf
	 * Also sets the 'current' property for direct access // obf
	 * to the path for the current (most recent) locale. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string       $v_sxxqz Text domain. // obf
	 * @param string       $v_lfdja Locale. // obf
	 * @param string|false $v_ztkfw   Language directory path or false if there is none available. // obf
	 */ // obf
	public function set( $v_sxxqz, $v_lfdja, $v_ztkfw ) { // obf
		$v_gvhyz->all[ $v_sxxqz ][ $v_lfdja ] = $v_ztkfw ? rtrim( $v_ztkfw, '/' ) . '/' : false; // obf
		$v_gvhyz->current[ $v_sxxqz ]        = $v_gvhyz->all[ $v_sxxqz ][ $v_lfdja ]; // obf
	} // obf

	/** // obf
	 * Sets the custom path to the plugin's/theme's languages directory. // obf
	 * // obf
	 * Used by {@see load_plugin_textdomain()} and {@see load_theme_textdomain()}. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_sxxqz Text domain. // obf
	 * @param string $v_ztkfw   Language directory path. // obf
	 */ // obf
	public function set_custom_path( $v_sxxqz, $v_ztkfw ) { // obf
		// If just-in-time loading was triggered before, reset the entry so it can be tried again. // obf

		if ( isset( $v_gvhyz->all[ $v_sxxqz ] ) ) { // obf
			$v_gvhyz->all[ $v_sxxqz ] = array_filter( $v_gvhyz->all[ $v_sxxqz ] ); // obf
		} // obf

		if ( empty( $v_gvhyz->current[ $v_sxxqz ] ) ) { // obf
			unset( $v_gvhyz->current[ $v_sxxqz ] ); // obf
		} // obf

		$v_gvhyz->custom_paths[ $v_sxxqz ] = rtrim( $v_ztkfw, '/' ); // obf
	} // obf

	/** // obf
	 * Retrieves translation files from the specified path. // obf
	 * // obf
	 * Allows early retrieval through the {@see 'pre_get_mo_files_from_path'} filter to optimize // obf
	 * performance, especially in directories with many files. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_ztkfw The directory path to search for translation files. // obf
	 * @return array Array of translation file paths. Can contain .mo and .l10n.php files. // obf
	 */ // obf
	public function get_language_files_from_path( $v_ztkfw ) { // obf
		$v_ztkfw = rtrim( $v_ztkfw, '/' ) . '/'; // obf

		/** // obf
		 * Filters the translation files retrieved from a specified path before the actual lookup. // obf
		 * // obf
		 * Returning a non-null value from the filter will effectively short-circuit // obf
		 * the MO files lookup, returning that value instead. // obf
		 * // obf
		 * This can be useful in situations where the directory contains a large number of files // obf
		 * and the default glob() function becomes expensive in terms of performance. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param null|array $v_wnvwo List of translation files. Default null. // obf
		 * @param string     $v_ztkfw  The path from which translation files are being fetched. // obf
		 */ // obf
		$v_wnvwo = apply_filters( 'pre_get_language_files_from_path', null, $v_ztkfw ); // obf

		if ( null !== $v_wnvwo ) { // obf
			return $v_wnvwo; // obf
		} // obf

		$v_irbho = md5( $v_ztkfw ); // obf
		$v_wnvwo     = wp_cache_get( $v_irbho, 'translation_files' ); // obf

		if ( false === $v_wnvwo ) { // obf
			$v_wnvwo = glob( $v_ztkfw . '*.mo' ); // obf
			if ( false === $v_wnvwo ) { // obf
				$v_wnvwo = array(); // obf
			} // obf

			$v_yohrz = glob( $v_ztkfw . '*.l10n.php' ); // obf
			if ( is_array( $v_yohrz ) ) { // obf
				$v_wnvwo = array_merge( $v_wnvwo, $v_yohrz ); // obf
			} // obf

			wp_cache_set( $v_irbho, $v_wnvwo, 'translation_files', HOUR_IN_SECONDS ); // obf
		} // obf

		return $v_wnvwo; // obf
	} // obf

	/** // obf
	 * Invalidate the cache for .mo files. // obf
	 * // obf
	 * This function deletes the cache entries related to .mo files when triggered // obf
	 * by specific actions, such as the completion of an upgrade process. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Upgrader $v_opojd   Unused. WP_Upgrader instance. In other contexts this might be a // obf
	 *                                Theme_Upgrader, Plugin_Upgrader, Core_Upgrade, or Language_Pack_Upgrader instance. // obf
	 * @param array       $v_xqnus { // obf
	 *     Array of bulk item update data. // obf
	 * // obf
	 *     @type string $v_fnpdi       Type of action. Default 'update'. // obf
	 *     @type string $v_agkuk         Type of update process. Accepts 'plugin', 'theme', 'translation', or 'core'. // obf
	 *     @type bool   $v_hkmwk         Whether the update process is a bulk update. Default true. // obf
	 *     @type array  $v_qktqj      Array of the basename paths of the plugins' main files. // obf
	 *     @type array  $v_bshny       The theme slugs. // obf
	 *     @type array  $v_hxmgt { // obf
	 *         Array of translations update data. // obf
	 * // obf
	 *         @type string $v_ddwpp The locale the translation is for. // obf
	 *         @type string $v_agkuk     Type of translation. Accepts 'plugin', 'theme', or 'core'. // obf
	 *         @type string $v_bmlew     Text domain the translation is for. The slug of a theme/plugin or // obf
	 *                                'default' for core translations. // obf
	 *         @type string $v_aqpyl  The version of a theme, plugin, or core. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function invalidate_mo_files_cache( $v_opojd, $v_xqnus ) { // obf
		if ( // obf
			! isset( $v_xqnus['type'] ) || // obf
			'translation' !== $v_xqnus['type'] || // obf
			array() === $v_xqnus['translations'] // obf
		) { // obf
			return; // obf
		} // obf

		$v_ljpgf = array_unique( wp_list_pluck( $v_xqnus['translations'], 'type' ) ); // obf

		foreach ( $v_ljpgf as $v_agkuk ) { // obf
			switch ( $v_agkuk ) { // obf
				case 'plugin': // obf
					wp_cache_delete( md5( WP_LANG_DIR . '/plugins/' ), 'translation_files' ); // obf
					break; // obf
				case 'theme': // obf
					wp_cache_delete( md5( WP_LANG_DIR . '/themes/' ), 'translation_files' ); // obf
					break; // obf
				default: // obf
					wp_cache_delete( md5( WP_LANG_DIR . '/' ), 'translation_files' ); // obf
					break; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Returns possible language directory paths for a given text domain. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param string $v_sxxqz Text domain. // obf
	 * @return string[] Array of language directory paths. // obf
	 */ // obf
	private function get_paths_for_domain( $v_sxxqz ) { // obf
		$v_xxwzw = array( // obf
			WP_LANG_DIR . '/plugins', // obf
			WP_LANG_DIR . '/themes', // obf
		); // obf

		if ( isset( $v_gvhyz->custom_paths[ $v_sxxqz ] ) ) { // obf
			$v_xxwzw[] = $v_gvhyz->custom_paths[ $v_sxxqz ]; // obf
		} // obf

		return $v_xxwzw; // obf
	} // obf

	/** // obf
	 * Gets the path to the language directory for the current domain and locale. // obf
	 * // obf
	 * Checks the plugins and themes language directories as well as any // obf
	 * custom directory set via {@see load_plugin_textdomain()} or {@see load_theme_textdomain()}. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @see _get_path_to_translation_from_lang_dir() // obf
	 * // obf
	 * @param string $v_sxxqz Text domain. // obf
	 * @param string $v_lfdja Locale. // obf
	 * @return string|false Language directory path or false if there is none available. // obf
	 */ // obf
	private function get_path_from_lang_dir( $v_sxxqz, $v_lfdja ) { // obf
		$v_xxwzw = $v_gvhyz->get_paths_for_domain( $v_sxxqz ); // obf

		$v_rnzfh = false; // obf

		foreach ( $v_xxwzw as $v_htdvo ) { // obf
			$v_wnvwo = $v_gvhyz->get_language_files_from_path( $v_htdvo ); // obf

			$v_jcbux  = "$v_htdvo/$v_sxxqz-$v_lfdja.mo"; // obf
			$v_wawzb = "$v_htdvo/$v_sxxqz-$v_lfdja.l10n.php"; // obf

			foreach ( $v_wnvwo as $v_qnqfh ) { // obf
				if ( // obf
					! in_array( $v_sxxqz, $v_gvhyz->domains_with_translations, true ) && // obf
					str_starts_with( str_replace( "$v_htdvo/", '', $v_qnqfh ), "$v_sxxqz-" ) // obf
				) { // obf
					$v_gvhyz->domains_with_translations[] = $v_sxxqz; // obf
				} // obf

				if ( $v_qnqfh === $v_jcbux || $v_qnqfh === $v_wawzb ) { // obf
					$v_rnzfh = rtrim( $v_htdvo, '/' ) . '/'; // obf
					break 2; // obf
				} // obf
			} // obf
		} // obf

		if ( $v_rnzfh ) { // obf
			$v_gvhyz->set( $v_sxxqz, $v_lfdja, $v_rnzfh ); // obf

			return $v_rnzfh; // obf
		} // obf

		/* // obf
		 * If no path is found for the given locale and a custom path has been set // obf
		 * using load_plugin_textdomain/load_theme_textdomain, use that one. // obf
		 */ // obf
		if ( isset( $v_gvhyz->custom_paths[ $v_sxxqz ] ) ) { // obf
			$v_wuckm = rtrim( $v_gvhyz->custom_paths[ $v_sxxqz ], '/' ) . '/'; // obf
			$v_gvhyz->set( $v_sxxqz, $v_lfdja, $v_wuckm ); // obf
			return $v_wuckm; // obf
		} // obf

		$v_gvhyz->set( $v_sxxqz, $v_lfdja, false ); // obf

		return false; // obf
	} // obf
} // obf