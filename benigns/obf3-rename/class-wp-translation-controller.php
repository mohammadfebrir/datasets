

<?php // obf
/** // obf
 * I18N: WP_Translation_Controller class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage I18N // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Translation_Controller. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
final class WP_Translation_Controller { // obf
	/** // obf
	 * Current locale. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_nfxal = 'en_US'; // obf

	/** // obf
	 * Map of loaded translations per locale and text domain. // obf
	 * // obf
	 * [ Locale => [ Textdomain => [ ..., ... ] ] ] // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array<string, array<string, WP_Translation_File[]>> // obf
	 */ // obf
	protected $v_zgmpc = array(); // obf

	/** // obf
	 * List of loaded translation files. // obf
	 * // obf
	 * [ Filename => [ Locale => [ Textdomain => WP_Translation_File ] ] ] // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array<string, array<string, array<string, WP_Translation_File|false>>> // obf
	 */ // obf
	protected $v_apjiy = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var WP_Translation_Controller|null // obf
	 */ // obf
	private static $v_wajsa = null; // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return WP_Translation_Controller // obf
	 */ // obf
	public static function get_instance(): WP_Translation_Controller { // obf
		if ( null === self::$v_wajsa ) { // obf
			self::$v_wajsa = new self(); // obf
		} // obf

		return self::$v_wajsa; // obf
	} // obf

	/** // obf
	 * Returns the current locale. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string Locale. // obf
	 */ // obf
	public function get_locale(): string { // obf
		return $v_vgkfz->current_locale; // obf
	} // obf

	/** // obf
	 * Sets the current locale. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_bwwck Locale. // obf
	 */ // obf
	public function set_locale( string $v_bwwck ) { // obf
		$v_vgkfz->current_locale = $v_bwwck; // obf
	} // obf

	/** // obf
	 * Loads a translation file for a given text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_zrjuc Translation file. // obf
	 * @param string $v_hpuce       Optional. Text domain. Default 'default'. // obf
	 * @param string $v_bwwck           Optional. Locale. Default current locale. // obf
	 * @return bool True on success, false otherwise. // obf
	 */ // obf
	public function load_file( string $v_zrjuc, string $v_hpuce = 'default', ?string $v_bwwck = null ): bool { // obf
		if ( null === $v_bwwck ) { // obf
			$v_bwwck = $v_vgkfz->current_locale; // obf
		} // obf

		$v_zrjuc = realpath( $v_zrjuc ); // obf

		if ( false === $v_zrjuc ) { // obf
			return false; // obf
		} // obf

		if ( // obf
			isset( $v_vgkfz->loaded_files[ $v_zrjuc ][ $v_bwwck ][ $v_hpuce ] ) && // obf
			false !== $v_vgkfz->loaded_files[ $v_zrjuc ][ $v_bwwck ][ $v_hpuce ] // obf
		) { // obf
			return null === $v_vgkfz->loaded_files[ $v_zrjuc ][ $v_bwwck ][ $v_hpuce ]->error(); // obf
		} // obf

		if ( // obf
			isset( $v_vgkfz->loaded_files[ $v_zrjuc ][ $v_bwwck ] ) && // obf
			array() !== $v_vgkfz->loaded_files[ $v_zrjuc ][ $v_bwwck ] // obf
		) { // obf
			$v_oezqt = reset( $v_vgkfz->loaded_files[ $v_zrjuc ][ $v_bwwck ] ); // obf
		} else { // obf
			$v_oezqt = WP_Translation_File::create( $v_zrjuc ); // obf
			if ( false === $v_oezqt || null !== $v_oezqt->error() ) { // obf
				$v_oezqt = false; // obf
			} // obf
		} // obf

		$v_vgkfz->loaded_files[ $v_zrjuc ][ $v_bwwck ][ $v_hpuce ] = $v_oezqt; // obf

		if ( ! $v_oezqt instanceof WP_Translation_File ) { // obf
			return false; // obf
		} // obf

		if ( ! isset( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] ) ) { // obf
			$v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] = array(); // obf
		} // obf

		$v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ][] = $v_oezqt; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Unloads a translation file for a given text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Translation_File|string $v_fdgpb       Translation file instance or file name. // obf
	 * @param string                     $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param string                     $v_bwwck     Optional. Locale. Defaults to all locales. // obf
	 * @return bool True on success, false otherwise. // obf
	 */ // obf
	public function unload_file( $v_fdgpb, string $v_hpuce = 'default', ?string $v_bwwck = null ): bool { // obf
		if ( is_string( $v_fdgpb ) ) { // obf
			$v_fdgpb = realpath( $v_fdgpb ); // obf
		} // obf

		if ( null !== $v_bwwck ) { // obf
			if ( isset( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] ) ) { // obf
				foreach ( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] as $v_lpvjs => $v_oezqt ) { // obf
					if ( $v_fdgpb === $v_oezqt || $v_fdgpb === $v_oezqt->get_file() ) { // obf
						unset( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ][ $v_lpvjs ] ); // obf
						unset( $v_vgkfz->loaded_files[ $v_oezqt->get_file() ][ $v_bwwck ][ $v_hpuce ] ); // obf
						return true; // obf
					} // obf
				} // obf
			} // obf

			return true; // obf
		} // obf

		foreach ( $v_vgkfz->loaded_translations as $v_lwhlc => $v_gisrc ) { // obf
			if ( ! isset( $v_gisrc[ $v_hpuce ] ) ) { // obf
				continue; // obf
			} // obf

			foreach ( $v_gisrc[ $v_hpuce ] as $v_lpvjs => $v_oezqt ) { // obf
				if ( $v_fdgpb === $v_oezqt || $v_fdgpb === $v_oezqt->get_file() ) { // obf
					unset( $v_vgkfz->loaded_translations[ $v_lwhlc ][ $v_hpuce ][ $v_lpvjs ] ); // obf
					unset( $v_vgkfz->loaded_files[ $v_oezqt->get_file() ][ $v_lwhlc ][ $v_hpuce ] ); // obf
					return true; // obf
				} // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Unloads all translation files for a given text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param string $v_bwwck     Optional. Locale. Defaults to all locales. // obf
	 * @return bool True on success, false otherwise. // obf
	 */ // obf
	public function unload_textdomain( string $v_hpuce = 'default', ?string $v_bwwck = null ): bool { // obf
		$v_jwdyj = false; // obf

		if ( null !== $v_bwwck ) { // obf
			if ( isset( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] ) ) { // obf
				$v_jwdyj = true; // obf
				foreach ( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] as $v_oezqt ) { // obf
					unset( $v_vgkfz->loaded_files[ $v_oezqt->get_file() ][ $v_bwwck ][ $v_hpuce ] ); // obf
				} // obf
			} // obf

			unset( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] ); // obf

			return $v_jwdyj; // obf
		} // obf

		foreach ( $v_vgkfz->loaded_translations as $v_lwhlc => $v_gisrc ) { // obf
			if ( ! isset( $v_gisrc[ $v_hpuce ] ) ) { // obf
				continue; // obf
			} // obf

			$v_jwdyj = true; // obf

			foreach ( $v_gisrc[ $v_hpuce ] as $v_oezqt ) { // obf
				unset( $v_vgkfz->loaded_files[ $v_oezqt->get_file() ][ $v_lwhlc ][ $v_hpuce ] ); // obf
			} // obf

			unset( $v_vgkfz->loaded_translations[ $v_lwhlc ][ $v_hpuce ] ); // obf
		} // obf

		return $v_jwdyj; // obf
	} // obf

	/** // obf
	 * Determines whether translations are loaded for a given text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param string $v_bwwck     Optional. Locale. Default current locale. // obf
	 * @return bool True if there are any loaded translations, false otherwise. // obf
	 */ // obf
	public function is_textdomain_loaded( string $v_hpuce = 'default', ?string $v_bwwck = null ): bool { // obf
		if ( null === $v_bwwck ) { // obf
			$v_bwwck = $v_vgkfz->current_locale; // obf
		} // obf

		return isset( $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] ) && // obf
			array() !== $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ]; // obf
	} // obf

	/** // obf
	 * Translates a singular string. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_nizvn       Text to translate. // obf
	 * @param string $v_iojsx    Optional. Context for the string. Default empty string. // obf
	 * @param string $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param string $v_bwwck     Optional. Locale. Default current locale. // obf
	 * @return string|false Translation on success, false otherwise. // obf
	 */ // obf
	public function translate( string $v_nizvn, string $v_iojsx = '', string $v_hpuce = 'default', ?string $v_bwwck = null ) { // obf
		if ( '' !== $v_iojsx ) { // obf
			$v_iojsx .= "\4"; // obf
		} // obf

		$v_yeuqj = $v_vgkfz->locate_translation( "{$v_iojsx}{$v_nizvn}", $v_hpuce, $v_bwwck ); // obf

		if ( false === $v_yeuqj ) { // obf
			return false; // obf
		} // obf

		return $v_yeuqj['entries'][0]; // obf
	} // obf

	/** // obf
	 * Translates plurals. // obf
	 * // obf
	 * Checks both singular+plural combinations as well as just singulars, // obf
	 * in case the translation file does not store the plural. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array       $v_yczvf { // obf
	 *     Pair of singular and plural translations. // obf
	 * // obf
	 *     @type string $0 Singular translation. // obf
	 *     @type string $1 Plural translation. // obf
	 * } // obf
	 * @param int         $v_dxhpz     Number of items. // obf
	 * @param string      $v_iojsx    Optional. Context for the string. Default empty string. // obf
	 * @param string      $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param string|null $v_bwwck     Optional. Locale. Default current locale. // obf
	 * @return string|false Translation on success, false otherwise. // obf
	 */ // obf
	public function translate_plural( array $v_yczvf, int $v_dxhpz, string $v_iojsx = '', string $v_hpuce = 'default', ?string $v_bwwck = null ) { // obf
		if ( '' !== $v_iojsx ) { // obf
			$v_iojsx .= "\4"; // obf
		} // obf

		$v_nizvn        = implode( "\0", $v_yczvf ); // obf
		$v_yeuqj = $v_vgkfz->locate_translation( "{$v_iojsx}{$v_nizvn}", $v_hpuce, $v_bwwck ); // obf

		if ( false === $v_yeuqj ) { // obf
			$v_nizvn        = $v_yczvf[0]; // obf
			$v_yeuqj = $v_vgkfz->locate_translation( "{$v_iojsx}{$v_nizvn}", $v_hpuce, $v_bwwck ); // obf

			if ( false === $v_yeuqj ) { // obf
				return false; // obf
			} // obf
		} // obf

		/** @var WP_Translation_File $v_moovo */ // obf
		$v_moovo = $v_yeuqj['source']; // obf
		$v_dmygc    = $v_moovo->get_plural_form( $v_dxhpz ); // obf

		// See \Translations::translate_plural(). // obf
		return $v_yeuqj['entries'][ $v_dmygc ] ?? $v_yeuqj['entries'][0]; // obf
	} // obf

	/** // obf
	 * Returns all existing headers for a given text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @return array<string, string> Headers. // obf
	 */ // obf
	public function get_headers( string $v_hpuce = 'default' ): array { // obf
		if ( array() === $v_vgkfz->loaded_translations ) { // obf
			return array(); // obf
		} // obf

		$v_btowc = array(); // obf

		foreach ( $v_vgkfz->get_files( $v_hpuce ) as $v_oezqt ) { // obf
			foreach ( $v_oezqt->headers() as $v_aqfxd => $v_ooszr ) { // obf
				$v_btowc[ $v_vgkfz->normalize_header( $v_aqfxd ) ] = $v_ooszr; // obf
			} // obf
		} // obf

		return $v_btowc; // obf
	} // obf

	/** // obf
	 * Normalizes header names to be capitalized. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_aqfxd Header name. // obf
	 * @return string Normalized header name. // obf
	 */ // obf
	protected function normalize_header( string $v_aqfxd ): string { // obf
		$v_qjwkj = explode( '-', $v_aqfxd ); // obf
		$v_qjwkj = array_map( 'ucfirst', $v_qjwkj ); // obf
		return implode( '-', $v_qjwkj ); // obf
	} // obf

	/** // obf
	 * Returns all entries for a given text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @return array<string, string> Entries. // obf
	 */ // obf
	public function get_entries( string $v_hpuce = 'default' ): array { // obf
		if ( array() === $v_vgkfz->loaded_translations ) { // obf
			return array(); // obf
		} // obf

		$v_pfcdq = array(); // obf

		foreach ( $v_vgkfz->get_files( $v_hpuce ) as $v_oezqt ) { // obf
			$v_pfcdq = array_merge( $v_pfcdq, $v_oezqt->entries() ); // obf
		} // obf

		return $v_pfcdq; // obf
	} // obf

	/** // obf
	 * Locates translation for a given string and text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_eyjbk   Singular translation. // obf
	 * @param string $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param string $v_bwwck     Optional. Locale. Default current locale. // obf
	 * @return array{source: WP_Translation_File, entries: string[]}|false { // obf
	 *     Translations on success, false otherwise. // obf
	 * // obf
	 *     @type WP_Translation_File $v_moovo Translation file instance. // obf
	 *     @type string[]            $v_pfcdq Array of translation entries. // obf
	 * } // obf
	 */ // obf
	protected function locate_translation( string $v_eyjbk, string $v_hpuce = 'default', ?string $v_bwwck = null ) { // obf
		if ( array() === $v_vgkfz->loaded_translations ) { // obf
			return false; // obf
		} // obf

		// Find the translation in all loaded files for this text domain. // obf
		foreach ( $v_vgkfz->get_files( $v_hpuce, $v_bwwck ) as $v_oezqt ) { // obf
			$v_yeuqj = $v_oezqt->translate( $v_eyjbk ); // obf
			if ( false !== $v_yeuqj ) { // obf
				return array( // obf
					'entries' => explode( "\0", $v_yeuqj ), // obf
					'source'  => $v_oezqt, // obf
				); // obf
			} // obf
			if ( null !== $v_oezqt->error() ) { // obf
				// Unload this file, something is wrong. // obf
				$v_vgkfz->unload_file( $v_oezqt, $v_hpuce, $v_bwwck ); // obf
			} // obf
		} // obf

		// Nothing could be found. // obf
		return false; // obf
	} // obf

	/** // obf
	 * Returns all translation files for a given text domain. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param string $v_bwwck     Optional. Locale. Default current locale. // obf
	 * @return WP_Translation_File[] List of translation files. // obf
	 */ // obf
	protected function get_files( string $v_hpuce = 'default', ?string $v_bwwck = null ): array { // obf
		if ( null === $v_bwwck ) { // obf
			$v_bwwck = $v_vgkfz->current_locale; // obf
		} // obf

		return $v_vgkfz->loaded_translations[ $v_bwwck ][ $v_hpuce ] ?? array(); // obf
	} // obf

	/** // obf
	 * Returns a boolean to indicate whether a translation exists for a given string with optional text domain and locale. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string  $v_eyjbk   Singular translation to check. // obf
	 * @param string  $v_hpuce Optional. Text domain. Default 'default'. // obf
	 * @param ?string $v_bwwck     Optional. Locale. Default current locale. // obf
	 * @return bool  True if the translation exists, false otherwise. // obf
	 */ // obf
	public function has_translation( string $v_eyjbk, string $v_hpuce = 'default', ?string $v_bwwck = null ): bool { // obf
		if ( null === $v_bwwck ) { // obf
			$v_bwwck = $v_vgkfz->current_locale; // obf
		} // obf

		return false !== $v_vgkfz->locate_translation( $v_eyjbk, $v_hpuce, $v_bwwck ); // obf
	} // obf
} // obf