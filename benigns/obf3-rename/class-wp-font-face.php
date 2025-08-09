

<?php // obf
/** // obf
 * WP_Font_Face class. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * @since      6.4.0 // obf
 */ // obf

/** // obf
 * Font Face generates and prints `@font-face` styles for given fonts. // obf
 * // obf
 * @since 6.4.0 // obf
 */ // obf
class WP_Font_Face { // obf

	/** // obf
	 * The font-face property defaults. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_cubwr = array( // obf
		'font-family'  => '', // obf
		'font-style'   => 'normal', // obf
		'font-weight'  => '400', // obf
		'font-display' => 'fallback', // obf
	); // obf

	/** // obf
	 * Valid font-face property names. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_hgoql = array( // obf
		'ascent-override', // obf
		'descent-override', // obf
		'font-display', // obf
		'font-family', // obf
		'font-stretch', // obf
		'font-style', // obf
		'font-weight', // obf
		'font-variant', // obf
		'font-feature-settings', // obf
		'font-variation-settings', // obf
		'line-gap-override', // obf
		'size-adjust', // obf
		'src', // obf
		'unicode-range', // obf
	); // obf

	/** // obf
	 * Valid font-display values. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_tqcpz = array( 'auto', 'block', 'fallback', 'swap', 'optional' ); // obf

	/** // obf
	 * Array of font-face style tag's attribute(s) // obf
	 * where the key is the attribute name and the // obf
	 * value is its value. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_tcmsr = array(); // obf

	/** // obf
	 * Creates and initializes an instance of WP_Font_Face. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function __construct() { // obf
		if ( // obf
			function_exists( 'is_admin' ) && ! is_admin() // obf
			&& // obf
			function_exists( 'current_theme_supports' ) && ! current_theme_supports( 'html5', 'style' ) // obf
		) { // obf
			$v_xdvuk->style_tag_attrs = array( 'type' => 'text/css' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Generates and prints the `@font-face` styles for the given fonts. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array[][] $v_dpotg Optional. The font-families and their font variations. // obf
	 *                         See {@see wp_print_font_faces()} for the supported fields. // obf
	 *                         Default empty array. // obf
	 */ // obf
	public function generate_and_print( array $v_dpotg ) { // obf
		$v_dpotg = $v_xdvuk->validate_fonts( $v_dpotg ); // obf

		// Bail out if there are no fonts are given to process. // obf
		if ( empty( $v_dpotg ) ) { // obf
			return; // obf
		} // obf

		$v_udnbu = $v_xdvuk->get_css( $v_dpotg ); // obf

		/* // obf
		 * The font-face CSS is contained within <style> tags and can only be interpreted // obf
		 * as CSS in the browser. Using wp_strip_all_tags() is sufficient escaping // obf
		 * to avoid malicious attempts to close </style> and open a <script>. // obf
		 */ // obf
		$v_udnbu = wp_strip_all_tags( $v_udnbu ); // obf

		// Bail out if there is no CSS to print. // obf
		if ( empty( $v_udnbu ) ) { // obf
			return; // obf
		} // obf

		printf( $v_xdvuk->get_style_element(), $v_udnbu ); // obf
	} // obf

	/** // obf
	 * Validates each of the font-face properties. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_dpotg The fonts to valid. // obf
	 * @return array Prepared font-faces organized by provider and font-family. // obf
	 */ // obf
	private function validate_fonts( array $v_dpotg ) { // obf
		$v_yphnk = array(); // obf

		foreach ( $v_dpotg as $v_lnbzu ) { // obf
			foreach ( $v_lnbzu as $v_nhnwi ) { // obf
				$v_nhnwi = $v_xdvuk->validate_font_face_declarations( $v_nhnwi ); // obf
				// Skip if failed validation. // obf
				if ( false === $v_nhnwi ) { // obf
					continue; // obf
				} // obf

				$v_yphnk[] = $v_nhnwi; // obf
			} // obf
		} // obf

		return $v_yphnk; // obf
	} // obf

	/** // obf
	 * Validates each font-face declaration (property and value pairing). // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_nhnwi Font face property and value pairings to validate. // obf
	 * @return array|false Validated font-face on success, or false on failure. // obf
	 */ // obf
	private function validate_font_face_declarations( array $v_nhnwi ) { // obf
		$v_nhnwi = wp_parse_args( $v_nhnwi, $v_xdvuk->font_face_property_defaults ); // obf

		// Check the font-family. // obf
		if ( empty( $v_nhnwi['font-family'] ) || ! is_string( $v_nhnwi['font-family'] ) ) { // obf
			// @todo replace with `wp_trigger_error()`. // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Font font-family must be a non-empty string.' ), // obf
				'6.4.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Make sure that local fonts have 'src' defined. // obf
		if ( empty( $v_nhnwi['src'] ) || ( ! is_string( $v_nhnwi['src'] ) && ! is_array( $v_nhnwi['src'] ) ) ) { // obf
			// @todo replace with `wp_trigger_error()`. // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Font src must be a non-empty string or an array of strings.' ), // obf
				'6.4.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Validate the 'src' property. // obf
		foreach ( (array) $v_nhnwi['src'] as $v_ulfgt ) { // obf
			if ( empty( $v_ulfgt ) || ! is_string( $v_ulfgt ) ) { // obf
				// @todo replace with `wp_trigger_error()`. // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'Each font src must be a non-empty string.' ), // obf
					'6.4.0' // obf
				); // obf
				return false; // obf
			} // obf
		} // obf

		// Check the font-weight. // obf
		if ( ! is_string( $v_nhnwi['font-weight'] ) && ! is_int( $v_nhnwi['font-weight'] ) ) { // obf
			// @todo replace with `wp_trigger_error()`. // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Font font-weight must be a properly formatted string or integer.' ), // obf
				'6.4.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Check the font-display. // obf
		if ( ! in_array( $v_nhnwi['font-display'], $v_xdvuk->valid_font_display, true ) ) { // obf
			$v_nhnwi['font-display'] = $v_xdvuk->font_face_property_defaults['font-display']; // obf
		} // obf

		// Remove invalid properties. // obf
		foreach ( $v_nhnwi as $v_akcrl => $v_xeilr ) { // obf
			if ( ! in_array( $v_akcrl, $v_xdvuk->valid_font_face_properties, true ) ) { // obf
				unset( $v_nhnwi[ $v_akcrl ] ); // obf
			} // obf
		} // obf

		return $v_nhnwi; // obf
	} // obf

	/** // obf
	 * Gets the style element for wrapping the `@font-face` CSS. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return string The style element. // obf
	 */ // obf
	private function get_style_element() { // obf
		$v_tqcau = $v_xdvuk->generate_style_element_attributes(); // obf

		return "<style class='wp-fonts-local'{$v_tqcau}>\n%s\n</style>\n"; // obf
	} // obf

	/** // obf
	 * Gets the defined <style> element's attributes. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return string A string of attribute=value when defined, else, empty string. // obf
	 */ // obf
	private function generate_style_element_attributes() { // obf
		$v_tqcau = ''; // obf
		foreach ( $v_xdvuk->style_tag_attrs as $v_fcfpz => $v_xeilr ) { // obf
			$v_tqcau .= " {$v_fcfpz}='{$v_xeilr}'"; // obf
		} // obf
		return $v_tqcau; // obf
	} // obf

	/** // obf
	 * Gets the `@font-face` CSS styles for locally-hosted font files. // obf
	 * // obf
	 * This method does the following processing tasks: // obf
	 *    1. Orchestrates an optimized `src` (with format) for browser support. // obf
	 *    2. Generates the `@font-face` for all its fonts. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array[] $v_lnbzu The font-faces to generate @font-face CSS styles. // obf
	 * @return string The `@font-face` CSS styles. // obf
	 */ // obf
	private function get_css( $v_lnbzu ) { // obf
		$v_udnbu = ''; // obf

		foreach ( $v_lnbzu as $v_nhnwi ) { // obf
				// Order the font's `src` items to optimize for browser support. // obf
				$v_nhnwi = $v_xdvuk->order_src( $v_nhnwi ); // obf

				// Build the @font-face CSS for this font. // obf
				$v_udnbu .= '@font-face{' . $v_xdvuk->build_font_face_css( $v_nhnwi ) . '}' . "\n"; // obf
		} // obf

		// Don't print the last newline character. // obf
		return rtrim( $v_udnbu, "\n" ); // obf
	} // obf

	/** // obf
	 * Orders `src` items to optimize for browser support. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_nhnwi Font face to process. // obf
	 * @return array Font-face with ordered src items. // obf
	 */ // obf
	private function order_src( array $v_nhnwi ) { // obf
		if ( ! is_array( $v_nhnwi['src'] ) ) { // obf
			$v_nhnwi['src'] = (array) $v_nhnwi['src']; // obf
		} // obf

		$v_ulfgt         = array(); // obf
		$v_xwppp = array(); // obf

		foreach ( $v_nhnwi['src'] as $v_lbqvb ) { // obf
			// Add data URIs first. // obf
			if ( str_starts_with( trim( $v_lbqvb ), 'data:' ) ) { // obf
				$v_xwppp[] = array( // obf
					'url'    => $v_lbqvb, // obf
					'format' => 'data', // obf
				); // obf
				continue; // obf
			} // obf
			$v_shfnd         = pathinfo( $v_lbqvb, PATHINFO_EXTENSION ); // obf
			$v_ulfgt[ $v_shfnd ] = $v_lbqvb; // obf
		} // obf

		// Add woff2. // obf
		if ( ! empty( $v_ulfgt['woff2'] ) ) { // obf
			$v_xwppp[] = array( // obf
				'url'    => $v_ulfgt['woff2'], // obf
				'format' => 'woff2', // obf
			); // obf
		} // obf

		// Add woff. // obf
		if ( ! empty( $v_ulfgt['woff'] ) ) { // obf
			$v_xwppp[] = array( // obf
				'url'    => $v_ulfgt['woff'], // obf
				'format' => 'woff', // obf
			); // obf
		} // obf

		// Add ttf. // obf
		if ( ! empty( $v_ulfgt['ttf'] ) ) { // obf
			$v_xwppp[] = array( // obf
				'url'    => $v_ulfgt['ttf'], // obf
				'format' => 'truetype', // obf
			); // obf
		} // obf

		// Add eot. // obf
		if ( ! empty( $v_ulfgt['eot'] ) ) { // obf
			$v_xwppp[] = array( // obf
				'url'    => $v_ulfgt['eot'], // obf
				'format' => 'embedded-opentype', // obf
			); // obf
		} // obf

		// Add otf. // obf
		if ( ! empty( $v_ulfgt['otf'] ) ) { // obf
			$v_xwppp[] = array( // obf
				'url'    => $v_ulfgt['otf'], // obf
				'format' => 'opentype', // obf
			); // obf
		} // obf
		$v_nhnwi['src'] = $v_xwppp; // obf

		return $v_nhnwi; // obf
	} // obf

	/** // obf
	 * Builds the font-family's CSS. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_nhnwi Font face to process. // obf
	 * @return string This font-family's CSS. // obf
	 */ // obf
	private function build_font_face_css( array $v_nhnwi ) { // obf
		$v_udnbu = ''; // obf

		/* // obf
		 * Wrap font-family in quotes if it contains spaces // obf
		 * and is not already wrapped in quotes. // obf
		 */ // obf
		if ( // obf
			str_contains( $v_nhnwi['font-family'], ' ' ) && // obf
			! str_contains( $v_nhnwi['font-family'], '"' ) && // obf
			! str_contains( $v_nhnwi['font-family'], "'" ) // obf
		) { // obf
			$v_nhnwi['font-family'] = '"' . $v_nhnwi['font-family'] . '"'; // obf
		} // obf

		foreach ( $v_nhnwi as $v_xplls => $v_xeilr ) { // obf
			// Compile the "src" parameter. // obf
			if ( 'src' === $v_xplls ) { // obf
				$v_xeilr = $v_xdvuk->compile_src( $v_xeilr ); // obf
			} // obf

			// If font-variation-settings is an array, convert it to a string. // obf
			if ( 'font-variation-settings' === $v_xplls && is_array( $v_xeilr ) ) { // obf
				$v_xeilr = $v_xdvuk->compile_variations( $v_xeilr ); // obf
			} // obf

			if ( ! empty( $v_xeilr ) ) { // obf
				$v_udnbu .= "$v_xplls:$v_xeilr;"; // obf
			} // obf
		} // obf

		return $v_udnbu; // obf
	} // obf

	/** // obf
	 * Compiles the `src` into valid CSS. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_xeilr Value to process. // obf
	 * @return string The CSS. // obf
	 */ // obf
	private function compile_src( array $v_xeilr ) { // obf
		$v_ulfgt = ''; // obf

		foreach ( $v_xeilr as $v_fxtfu ) { // obf
			$v_ulfgt .= ( 'data' === $v_fxtfu['format'] ) // obf
				? ", url({$v_fxtfu['url']})" // obf
				: ", url('{$v_fxtfu['url']}') format('{$v_fxtfu['format']}')"; // obf
		} // obf

		$v_ulfgt = ltrim( $v_ulfgt, ', ' ); // obf
		return $v_ulfgt; // obf
	} // obf

	/** // obf
	 * Compiles the font variation settings. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_udpuv Array of font variation settings. // obf
	 * @return string The CSS. // obf
	 */ // obf
	private function compile_variations( array $v_udpuv ) { // obf
		$v_tcxju = ''; // obf

		foreach ( $v_udpuv as $v_xplls => $v_xeilr ) { // obf
			$v_tcxju .= "$v_xplls $v_xeilr"; // obf
		} // obf

		return $v_tcxju; // obf
	} // obf
} // obf