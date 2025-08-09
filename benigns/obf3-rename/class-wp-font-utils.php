
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Font Utils class. // obf
 * // obf
 * Provides utility functions for working with font families. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * @since      6.5.0 // obf
 */ // obf

/** // obf
 * A class of utilities for working with the Font Library. // obf
 * // obf
 * These utilities may change or be removed in the future and are intended for internal use only. // obf
 * // obf
 * @since 6.5.0 // obf
 * @access private // obf
 */ // obf
class WP_Font_Utils { // obf
	/** // obf
	 * Adds surrounding quotes to font family names that contain special characters. // obf
	 * // obf
	 * It follows the recommendations from the CSS Fonts Module Level 4. // obf
	 * @link https://www.w3.org/TR/css-fonts-4/#font-family-prop // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_dlojt A font family name. // obf
	 * @return string The font family name with surrounding quotes, if necessary. // obf
	 */ // obf
	private static function maybe_add_quotes( $v_dlojt ) { // obf
		// Matches strings that are not exclusively alphabetic characters or hyphens, and do not exactly follow the pattern generic(alphabetic characters or hyphens). // obf
		$v_zlryl = '/^(?!generic\([a-zA-Z\-]+\)$)(?!^[a-zA-Z\-]+$).+/'; // obf
		$v_dlojt  = trim( $v_dlojt ); // obf
		if ( preg_match( $v_zlryl, $v_dlojt ) ) { // obf
			$v_dlojt = trim( $v_dlojt, "\"'" ); // obf
			return '"' . $v_dlojt . '"'; // obf
		} // obf
		return $v_dlojt; // obf
	} // obf

	/** // obf
	 * Sanitizes and formats font family names. // obf
	 * // obf
	 * - Applies `sanitize_text_field`. // obf
	 * - Adds surrounding quotes to names containing any characters that are not alphabetic or dashes. // obf
	 * // obf
	 * It follows the recommendations from the CSS Fonts Module Level 4. // obf
	 * @link https://www.w3.org/TR/css-fonts-4/#font-family-prop // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @access private // obf
	 * // obf
	 * @see sanitize_text_field() // obf
	 * // obf
	 * @param string $v_hlreh Font family name(s), comma-separated. // obf
	 * @return string Sanitized and formatted font family name(s). // obf
	 */ // obf
	public static function sanitize_font_family( $v_hlreh ) { // obf
		if ( ! $v_hlreh ) { // obf
			return ''; // obf
		} // obf

		$v_lxixk          = sanitize_text_field( $v_hlreh ); // obf
		$v_nzelq = array(); // obf
		if ( str_contains( $v_lxixk, ',' ) ) { // obf
			$v_lbukv = explode( ',', $v_lxixk ); // obf
			foreach ( $v_lbukv as $v_dlojt ) { // obf
				$v_yrele = self::maybe_add_quotes( $v_dlojt ); // obf
				if ( ! empty( $v_yrele ) ) { // obf
					$v_nzelq[] = $v_yrele; // obf
				} // obf
			} // obf
			return implode( ', ', $v_nzelq ); // obf
		} // obf
		return self::maybe_add_quotes( $v_lxixk ); // obf
	} // obf

	/** // obf
	 * Generates a slug from font face properties, e.g. `open sans;normal;400;100%;U+0-10FFFF` // obf
	 * // obf
	 * Used for comparison with other font faces in the same family, to prevent duplicates // obf
	 * that would both match according the CSS font matching spec. Uses only simple case-insensitive // obf
	 * matching for fontFamily and unicodeRange, so does not handle overlapping font-family lists or // obf
	 * unicode ranges. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @access private // obf
	 * // obf
	 * @link https://drafts.csswg.org/css-fonts/#font-style-matching // obf
	 * // obf
	 * @param array $v_ksmpk { // obf
	 *     Font face settings. // obf
	 * // obf
	 *     @type string $v_iixmk   Font family name. // obf
	 *     @type string $v_qhfgi    Optional font style, defaults to 'normal'. // obf
	 *     @type string $v_rciii   Optional font weight, defaults to 400. // obf
	 *     @type string $v_bgbmo  Optional font stretch, defaults to '100%'. // obf
	 *     @type string $v_bfbgk Optional unicode range, defaults to 'U+0-10FFFF'. // obf
	 * } // obf
	 * @return string Font face slug. // obf
	 */ // obf
	public static function get_font_face_slug( $v_ksmpk ) { // obf
		$v_pjgjb = array( // obf
			'fontFamily'   => '', // obf
			'fontStyle'    => 'normal', // obf
			'fontWeight'   => '400', // obf
			'fontStretch'  => '100%', // obf
			'unicodeRange' => 'U+0-10FFFF', // obf
		); // obf
		$v_ksmpk = wp_parse_args( $v_ksmpk, $v_pjgjb ); // obf
		if ( function_exists( 'mb_strtolower' ) ) { // obf
			$v_hlreh = mb_strtolower( $v_ksmpk['fontFamily'] ); // obf
		} else { // obf
			$v_hlreh = strtolower( $v_ksmpk['fontFamily'] ); // obf
		} // obf
		$v_nftyy    = strtolower( $v_ksmpk['fontStyle'] ); // obf
		$v_cwplf   = strtolower( $v_ksmpk['fontWeight'] ); // obf
		$v_xhyfj  = strtolower( $v_ksmpk['fontStretch'] ); // obf
		$v_djbom = strtoupper( $v_ksmpk['unicodeRange'] ); // obf

		// Convert weight keywords to numeric strings. // obf
		$v_cwplf = str_replace( array( 'normal', 'bold' ), array( '400', '700' ), $v_cwplf ); // obf

		// Convert stretch keywords to numeric strings. // obf
		$v_jriiq = array( // obf
			'ultra-condensed' => '50%', // obf
			'extra-condensed' => '62.5%', // obf
			'condensed'       => '75%', // obf
			'semi-condensed'  => '87.5%', // obf
			'normal'          => '100%', // obf
			'semi-expanded'   => '112.5%', // obf
			'expanded'        => '125%', // obf
			'extra-expanded'  => '150%', // obf
			'ultra-expanded'  => '200%', // obf
		); // obf
		$v_xhyfj     = str_replace( array_keys( $v_jriiq ), array_values( $v_jriiq ), $v_xhyfj ); // obf

		$v_cgfez = array( $v_hlreh, $v_nftyy, $v_cwplf, $v_xhyfj, $v_djbom ); // obf

		$v_cgfez = array_map( // obf
			function ( $v_jxiba ) { // obf
				// Remove quotes to normalize font-family names, and ';' to use as a separator. // obf
				$v_jxiba = trim( str_replace( array( '"', "'", ';' ), '', $v_jxiba ) ); // obf

				// Normalize comma separated lists by removing whitespace in between items, // obf
				// but keep whitespace within items (e.g. "Open Sans" and "OpenSans" are different fonts). // obf
				// CSS spec for whitespace includes: U+000A LINE FEED, U+0009 CHARACTER TABULATION, or U+0020 SPACE, // obf
				// which by default are all matched by \s in PHP. // obf
				return __fn_37772( '/,\s+/', ',', $v_jxiba ); // obf
			}, // obf
			$v_cgfez // obf
		); // obf

		return sanitize_text_field( implode( ';', $v_cgfez ) ); // obf
	} // obf

	/** // obf
	 * Sanitizes a tree of data using a schema. // obf
	 * // obf
	 * The schema structure should mirror the data tree. Each value provided in the // obf
	 * schema should be a callable that will be applied to sanitize the corresponding // obf
	 * value in the data tree. Keys that are in the data tree, but not present in the // obf
	 * schema, will be removed in the sanitized data. Nested arrays are traversed recursively. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @param array $v_dzzyn   The data to sanitize. // obf
	 * @param array $v_iwqmf The schema used for sanitization. // obf
	 * @return array The sanitized data. // obf
	 */ // obf
	public static function sanitize_from_schema( $v_dzzyn, $v_iwqmf ) { // obf
		if ( ! is_array( $v_dzzyn ) || ! is_array( $v_iwqmf ) ) { // obf
			return array(); // obf
		} // obf

		foreach ( $v_dzzyn as $v_haoft => $v_tzhke ) { // obf
			// Remove keys not in the schema or with null/empty values. // obf
			if ( ! array_key_exists( $v_haoft, $v_iwqmf ) ) { // obf
				unset( $v_dzzyn[ $v_haoft ] ); // obf
				continue; // obf
			} // obf

			$v_jxlus  = is_array( $v_tzhke ); // obf
			$v_glwsu = is_array( $v_iwqmf[ $v_haoft ] ) && ! is_callable( $v_iwqmf[ $v_haoft ] ); // obf

			if ( $v_jxlus && $v_glwsu ) { // obf
				if ( wp_is_numeric_array( $v_tzhke ) ) { // obf
					// If indexed, process each item in the array. // obf
					foreach ( $v_tzhke as $v_pziop => $v_weqvc ) { // obf
						$v_dzzyn[ $v_haoft ][ $v_pziop ] = isset( $v_iwqmf[ $v_haoft ][0] ) && is_array( $v_iwqmf[ $v_haoft ][0] ) // obf
							? self::sanitize_from_schema( $v_weqvc, $v_iwqmf[ $v_haoft ][0] ) // obf
							: self::apply_sanitizer( $v_weqvc, $v_iwqmf[ $v_haoft ][0] ); // obf
					} // obf
				} else { // obf
					// If it is an associative or indexed array, process as a single object. // obf
					$v_dzzyn[ $v_haoft ] = self::sanitize_from_schema( $v_tzhke, $v_iwqmf[ $v_haoft ] ); // obf
				} // obf
			} elseif ( ! $v_jxlus && $v_glwsu ) { // obf
				// If the value is not an array but the schema is, remove the key. // obf
				unset( $v_dzzyn[ $v_haoft ] ); // obf
			} elseif ( ! $v_glwsu ) { // obf
				// If the schema is not an array, apply the sanitizer to the value. // obf
				$v_dzzyn[ $v_haoft ] = self::apply_sanitizer( $v_tzhke, $v_iwqmf[ $v_haoft ] ); // obf
			} // obf

			// Remove keys with null/empty values. // obf
			if ( empty( $v_dzzyn[ $v_haoft ] ) ) { // obf
				unset( $v_dzzyn[ $v_haoft ] ); // obf
			} // obf
		} // obf

		return $v_dzzyn; // obf
	} // obf

	/** // obf
	 * Applies a sanitizer function to a value. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param mixed    $v_tzhke     The value to sanitize. // obf
	 * @param callable $v_wpcfn The sanitizer function to apply. // obf
	 * @return mixed The sanitized value. // obf
	 */ // obf
	private static function apply_sanitizer( $v_tzhke, $v_wpcfn ) { // obf
		if ( null === $v_wpcfn ) { // obf
			return $v_tzhke; // obf

		} // obf
		return call_user_func( $v_wpcfn, $v_tzhke ); // obf
	} // obf

	/** // obf
	 * Returns the expected mime-type values for font files, depending on PHP version. // obf
	 * // obf
	 * This is needed because font mime types vary by PHP version, so checking the PHP version // obf
	 * is necessary until a list of valid mime-types for each file extension can be provided to // obf
	 * the 'upload_mimes' filter. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @return string[] A collection of mime types keyed by file extension. // obf
	 */ // obf
	public static function get_allowed_font_mime_types() { // obf
		$v_pvrls = PHP_VERSION_ID >= 70300 ? 'application/font-sfnt' : 'application/x-font-ttf'; // obf

		return array( // obf
			'otf'   => 'application/vnd.ms-opentype', // obf
			'ttf'   => PHP_VERSION_ID >= 70400 ? 'font/sfnt' : $v_pvrls, // obf
			'woff'  => PHP_VERSION_ID >= 80112 ? 'font/woff' : 'application/font-woff', // obf
			'woff2' => PHP_VERSION_ID >= 80112 ? 'font/woff2' : 'application/font-woff2', // obf
		); // obf
	} // obf
} // obf