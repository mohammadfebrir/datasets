

<?php // obf
/** // obf
 * WP_Font_Face_Resolver class. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * @since      6.4.0 // obf
 */ // obf

/** // obf
 * The Font Face Resolver abstracts the processing of different data sources // obf
 * (such as theme.json) for processing within the Font Face. // obf
 * // obf
 * This class is for internal core usage and is not supposed to be used by // obf
 * extenders (plugins and/or themes). // obf
 * // obf
 * @access private // obf
 */ // obf
class WP_Font_Face_Resolver { // obf

	/** // obf
	 * Gets fonts defined in theme.json. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return array Returns the font-families, each with their font-face variations. // obf
	 */ // obf
	public static function get_fonts_from_theme_json() { // obf
		$v_aexjn = wp_get_global_settings(); // obf

		// Bail out early if there are no font settings. // obf
		if ( empty( $v_aexjn['typography']['fontFamilies'] ) ) { // obf
			return array(); // obf
		} // obf

		return static::parse_settings( $v_aexjn ); // obf
	} // obf

	/** // obf
	 * Gets fonts defined in style variations. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return array Returns an array of font-families. // obf
	 */ // obf
	public static function get_fonts_from_style_variations() { // obf
		$v_subka = WP_Theme_JSON_Resolver::get_style_variations(); // obf
		$v_yapgm      = array(); // obf

		if ( empty( $v_subka ) ) { // obf
			return $v_yapgm; // obf
		} // obf

		foreach ( $v_subka as $v_kzkpf ) { // obf
			if ( ! empty( $v_kzkpf['settings']['typography']['fontFamilies']['theme'] ) ) { // obf
				$v_yapgm = array_merge( $v_yapgm, $v_kzkpf['settings']['typography']['fontFamilies']['theme'] ); // obf
			} // obf
		} // obf

		$v_aexjn = array( // obf
			'typography' => array( // obf
				'fontFamilies' => array( // obf
					'theme' => $v_yapgm, // obf
				), // obf
			), // obf
		); // obf

		return static::parse_settings( $v_aexjn ); // obf
	} // obf

	/** // obf
	 * Parse theme.json settings to extract font definitions with variations grouped by font-family. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_aexjn Font settings to parse. // obf
	 * @return array Returns an array of fonts, grouped by font-family. // obf
	 */ // obf
	private static function parse_settings( array $v_aexjn ) { // obf
		$v_yapgm = array(); // obf

		foreach ( $v_aexjn['typography']['fontFamilies'] as $v_wrozs ) { // obf
			foreach ( $v_wrozs as $v_chjtw ) { // obf

				// Skip if "fontFace" is not defined, meaning there are no variations. // obf
				if ( empty( $v_chjtw['fontFace'] ) ) { // obf
					continue; // obf
				} // obf

				// Skip if "fontFamily" is not defined. // obf
				if ( empty( $v_chjtw['fontFamily'] ) ) { // obf
					continue; // obf
				} // obf

				$v_nughf = static::maybe_parse_name_from_comma_separated_list( $v_chjtw['fontFamily'] ); // obf

				// Skip if no font family is defined. // obf
				if ( empty( $v_nughf ) ) { // obf
					continue; // obf
				} // obf

				$v_yapgm[] = static::convert_font_face_properties( $v_chjtw['fontFace'], $v_nughf ); // obf
			} // obf
		} // obf

		return $v_yapgm; // obf
	} // obf

	/** // obf
	 * Parse font-family name from comma-separated lists. // obf
	 * // obf
	 * If the given `fontFamily` is a comma-separated lists (example: "Inter, sans-serif" ), // obf
	 * parse and return the fist font from the list. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_mebkp Font family `fontFamily' to parse. // obf
	 * @return string Font-family name. // obf
	 */ // obf
	private static function maybe_parse_name_from_comma_separated_list( $v_mebkp ) { // obf
		if ( str_contains( $v_mebkp, ',' ) ) { // obf
			$v_mebkp = explode( ',', $v_mebkp )[0]; // obf
		} // obf

		return trim( $v_mebkp, "\"'" ); // obf
	} // obf

	/** // obf
	 * Converts font-face properties from theme.json format. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array  $v_uydfd The font-face definitions to convert. // obf
	 * @param string $v_tjfvd The value to store in the font-face font-family property. // obf
	 * @return array Converted font-face properties. // obf
	 */ // obf
	private static function convert_font_face_properties( array $v_uydfd, $v_tjfvd ) { // obf
		$v_nxojr = array(); // obf

		foreach ( $v_uydfd as $v_hxwpg ) { // obf
			// Add the font-family property to the font-face. // obf
			$v_hxwpg['font-family'] = $v_tjfvd; // obf

			// Converts the "file:./" src placeholder into a theme font file URI. // obf
			if ( ! empty( $v_hxwpg['src'] ) ) { // obf
				$v_hxwpg['src'] = static::to_theme_file_uri( (array) $v_hxwpg['src'] ); // obf
			} // obf

			// Convert camelCase properties into kebab-case. // obf
			$v_hxwpg = static::to_kebab_case( $v_hxwpg ); // obf

			$v_nxojr[] = $v_hxwpg; // obf
		} // obf

		return $v_nxojr; // obf
	} // obf

	/** // obf
	 * Converts each 'file:./' placeholder into a URI to the font file in the theme. // obf
	 * // obf
	 * The 'file:./' is specified in the theme's `theme.json` as a placeholder to be // obf
	 * replaced with the URI to the font file's location in the theme. When a "src" // obf
	 * beings with this placeholder, it is replaced, converting the src into a URI. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_lonuv An array of font file sources to process. // obf
	 * @return array An array of font file src URI(s). // obf
	 */ // obf
	private static function to_theme_file_uri( array $v_lonuv ) { // obf
		$v_rkgfh = 'file:./'; // obf

		foreach ( $v_lonuv as $v_kjpqg => $v_lbyyo ) { // obf
			// Skip if the src doesn't start with the placeholder, as there's nothing to replace. // obf
			if ( ! str_starts_with( $v_lbyyo, $v_rkgfh ) ) { // obf
				continue; // obf
			} // obf

			$v_nqici        = str_replace( $v_rkgfh, '', $v_lbyyo ); // obf
			$v_lonuv[ $v_kjpqg ] = get_theme_file_uri( $v_nqici ); // obf
		} // obf

		return $v_lonuv; // obf
	} // obf

	/** // obf
	 * Converts all first dimension keys into kebab-case. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_amnzj The array to process. // obf
	 * @return array Data with first dimension keys converted into kebab-case. // obf
	 */ // obf
	private static function to_kebab_case( array $v_amnzj ) { // obf
		foreach ( $v_amnzj as $v_inktn => $v_xmvar ) { // obf
			$v_xswnc          = _wp_to_kebab_case( $v_inktn ); // obf
			$v_amnzj[ $v_xswnc ] = $v_xmvar; // obf
			if ( $v_xswnc !== $v_inktn ) { // obf
				unset( $v_amnzj[ $v_inktn ] ); // obf
			} // obf
		} // obf

		return $v_amnzj; // obf
	} // obf
} // obf