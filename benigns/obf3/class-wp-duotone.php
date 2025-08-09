
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WP_Duotone class // obf
 * // obf
 * Parts of this source were derived and modified from colord, // obf
 * released under the MIT license. // obf
 * // obf
 * https://github.com/omgovich/colord // obf
 * // obf
 * Copyright (c) 2020 Vlad Shilov omgovich@ya.ru // obf
 * // obf
 * Permission is hereby granted, free of charge, to any person obtaining // obf
 * a copy of this software and associated documentation files (the // obf
 * "Software"), to deal in the Software without restriction, including // obf
 * without limitation the rights to use, copy, modify, merge, publish, // obf
 * distribute, sublicense, and/or sell copies of the Software, and to // obf
 * permit persons to whom the Software is furnished to do so, subject to // obf
 * the following conditions: // obf
 * // obf
 * The above copyright notice and this permission notice shall be // obf
 * included in all copies or substantial portions of the Software. // obf
 * // obf
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, // obf
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF // obf
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND // obf
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE // obf
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION // obf
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION // obf
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. // obf
 * // obf
 * @package WordPress // obf
 * @since 6.3.0 // obf
 */ // obf

/** // obf
 * Manages duotone block supports and global styles. // obf
 * // obf
 * @access private // obf
 */ // obf
class WP_Duotone { // obf
	/** // obf
	 * Block names from global, theme, and custom styles that use duotone presets and the slug of // obf
	 * the preset they are using. // obf
	 * // obf
	 * Example: // obf
	 *  [ // obf
	 *      'core/featured-image' => 'blue-orange', // obf
	 *       … // obf
	 *  ] // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_vokwt; // obf

	/** // obf
	 * An array of duotone filter data from global, theme, and custom presets. // obf
	 * // obf
	 * Example: // obf
	 *  [ // obf
	 *      'wp-duotone-blue-orange' => [ // obf
	 *          'slug'  => 'blue-orange', // obf
	 *          'colors' => [ '#0000ff', '#ffcc00' ], // obf
	 *      ], // obf
	 *      'wp-duotone-red-yellow' => [ // obf
	 *          'slug'   => 'red-yellow', // obf
	 *          'colors' => [ '#cc0000', '#ffff33' ], // obf
	 *      ], // obf
	 *      … // obf
	 *  ] // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_dvjwa; // obf

	/** // obf
	 * All of the duotone filter data from presets for CSS custom properties on // obf
	 * the page. // obf
	 * // obf
	 * Example: // obf
	 *  [ // obf
	 *      'wp-duotone-blue-orange' => [ // obf
	 *          'slug'   => 'blue-orange', // obf
	 *          'colors' => [ '#0000ff', '#ffcc00' ], // obf
	 *      ], // obf
	 *      … // obf
	 *  ] // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_qfwrq = array(); // obf

	/** // obf
	 * All of the duotone filter data for SVGs on the page. Includes both // obf
	 * presets and custom filters. // obf
	 * // obf
	 * Example: // obf
	 *  [ // obf
	 *      'wp-duotone-blue-orange' => [ // obf
	 *          'slug'   => 'blue-orange', // obf
	 *          'colors' => [ '#0000ff', '#ffcc00' ], // obf
	 *      ], // obf
	 *      'wp-duotone-000000-ffffff-2' => [ // obf
	 *          'slug'   => '000000-ffffff-2', // obf
	 *          'colors' => [ '#000000', '#ffffff' ], // obf
	 *      ], // obf
	 *      … // obf
	 *  ] // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_bubtf = array(); // obf

	/** // obf
	 * All of the block CSS declarations for styles on the page. // obf
	 * // obf
	 * Example: // obf
	 *  [ // obf
	 *      [ // obf
	 *          'selector'     => '.wp-duotone-000000-ffffff-2.wp-block-image img', // obf
	 *          'declarations' => [ // obf
	 *              'filter' => 'url(#wp-duotone-000000-ffffff-2)', // obf
	 *          ], // obf
	 *      ], // obf
	 *      … // obf
	 *  ] // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_jptvw = array(); // obf

	/** // obf
	 * Clamps a value between an upper and lower bound. // obf
	 * // obf
	 * Direct port of colord's clamp function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/helpers.ts#L23 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param float $v_wphcu The number to clamp. // obf
	 * @param float $v_xcnld    The minimum value. // obf
	 * @param float $v_ppvts    The maximum value. // obf
	 * @return float The clamped value. // obf
	 */ // obf
	private static function colord_clamp( $v_wphcu, $v_xcnld = 0, $v_ppvts = 1 ) { // obf
		return $v_wphcu > $v_ppvts ? $v_ppvts : ( $v_wphcu > $v_xcnld ? $v_wphcu : $v_xcnld ); // obf
	} // obf

	/** // obf
	 * Processes and clamps a degree (angle) value properly. // obf
	 * // obf
	 * Direct port of colord's clampHue function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/helpers.ts#L32 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param float $v_yvzcg The hue to clamp. // obf
	 * @return float The clamped hue. // obf
	 */ // obf
	private static function colord_clamp_hue( $v_yvzcg ) { // obf
		$v_yvzcg = is_finite( $v_yvzcg ) ? $v_yvzcg % 360 : 0; // obf
		return $v_yvzcg > 0 ? $v_yvzcg : $v_yvzcg + 360; // obf
	} // obf

	/** // obf
	 * Converts a hue value to degrees from 0 to 360 inclusive. // obf
	 * // obf
	 * Direct port of colord's parseHue function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/helpers.ts#L40 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param float  $v_xovka The hue value to parse. // obf
	 * @param string $v_mlrcx  The unit of the hue value. // obf
	 * @return float The parsed hue value. // obf
	 */ // obf
	private static function colord_parse_hue( $v_xovka, $v_mlrcx = 'deg' ) { // obf
		$v_obncb = array( // obf
			'grad' => 360 / 400, // obf
			'turn' => 360, // obf
			'rad'  => 360 / ( M_PI * 2 ), // obf
		); // obf

		$v_xjdft = isset( $v_obncb[ $v_mlrcx ] ) ? $v_obncb[ $v_mlrcx ] : 1; // obf

		return (float) $v_xovka * $v_xjdft; // obf
	} // obf

	/** // obf
	 * Parses any valid Hex3, Hex4, Hex6 or Hex8 string and converts it to an RGBA object. // obf
	 * // obf
	 * Direct port of colord's parseHex function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/hex.ts#L8 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_ecvow The hex string to parse. // obf
	 * @return array|null An array of RGBA values or null if the hex string is invalid. // obf
	 */ // obf
	private static function colord_parse_hex( $v_ecvow ) { // obf
		$v_xponl = preg_match( // obf
			'/^#([0-9a-f]{3,8})$/i', // obf
			$v_ecvow, // obf
			$v_anbwz // obf
		); // obf

		if ( ! $v_xponl ) { // obf
			return null; // obf
		} // obf

		$v_ecvow = $v_anbwz[1]; // obf

		if ( 4 >= strlen( $v_ecvow ) ) { // obf
			return array( // obf
				'r' => (int) base_convert( $v_ecvow[0] . $v_ecvow[0], 16, 10 ), // obf
				'g' => (int) base_convert( $v_ecvow[1] . $v_ecvow[1], 16, 10 ), // obf
				'b' => (int) base_convert( $v_ecvow[2] . $v_ecvow[2], 16, 10 ), // obf
				'a' => 4 === strlen( $v_ecvow ) ? round( base_convert( $v_ecvow[3] . $v_ecvow[3], 16, 10 ) / 255, 2 ) : 1, // obf
			); // obf
		} // obf

		if ( 6 === strlen( $v_ecvow ) || 8 === strlen( $v_ecvow ) ) { // obf
			return array( // obf
				'r' => (int) base_convert( substr( $v_ecvow, 0, 2 ), 16, 10 ), // obf
				'g' => (int) base_convert( substr( $v_ecvow, 2, 2 ), 16, 10 ), // obf
				'b' => (int) base_convert( substr( $v_ecvow, 4, 2 ), 16, 10 ), // obf
				'a' => 8 === strlen( $v_ecvow ) ? round( (int) base_convert( substr( $v_ecvow, 6, 2 ), 16, 10 ) / 255, 2 ) : 1, // obf
			); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Clamps an array of RGBA values. // obf
	 * // obf
	 * Direct port of colord's clampRgba function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/rgb.ts#L5 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_jhqid The RGBA array to clamp. // obf
	 * @return array The clamped RGBA array. // obf
	 */ // obf
	private static function colord_clamp_rgba( $v_jhqid ) { // obf
		$v_jhqid['r'] = self::colord_clamp( $v_jhqid['r'], 0, 255 ); // obf
		$v_jhqid['g'] = self::colord_clamp( $v_jhqid['g'], 0, 255 ); // obf
		$v_jhqid['b'] = self::colord_clamp( $v_jhqid['b'], 0, 255 ); // obf
		$v_jhqid['a'] = self::colord_clamp( $v_jhqid['a'] ); // obf

		return $v_jhqid; // obf
	} // obf

	/** // obf
	 * Parses a valid RGB[A] CSS color function/string. // obf
	 * // obf
	 * Direct port of colord's parseRgbaString function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/rgbString.ts#L18 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_xwxqz The RGBA string to parse. // obf
	 * @return array|null An array of RGBA values or null if the RGB string is invalid. // obf
	 */ // obf
	private static function colord_parse_rgba_string( $v_xwxqz ) { // obf
		// Functional syntax. // obf
		$v_xponl = preg_match( // obf
			'/^rgba?\(\s*([+-]?\d*\.?\d+)(%)?\s*,\s*([+-]?\d*\.?\d+)(%)?\s*,\s*([+-]?\d*\.?\d+)(%)?\s*(?:,\s*([+-]?\d*\.?\d+)(%)?\s*)?\)$/i', // obf
			$v_xwxqz, // obf
			$v_fjmsl // obf
		); // obf

		if ( ! $v_xponl ) { // obf
			// Whitespace syntax. // obf
			$v_xponl = preg_match( // obf
				'/^rgba?\(\s*([+-]?\d*\.?\d+)(%)?\s+([+-]?\d*\.?\d+)(%)?\s+([+-]?\d*\.?\d+)(%)?\s*(?:\/\s*([+-]?\d*\.?\d+)(%)?\s*)?\)$/i', // obf
				$v_xwxqz, // obf
				$v_fjmsl // obf
			); // obf
		} // obf

		if ( ! $v_xponl ) { // obf
			return null; // obf
		} // obf

		/* // obf
		 * For some reason, preg_match doesn't include empty matches at the end // obf
		 * of the array, so we add them manually to make things easier later. // obf
		 */ // obf
		for ( $v_brmpu = 1; $v_brmpu <= 8; $v_brmpu++ ) { // obf
			if ( ! isset( $v_fjmsl[ $v_brmpu ] ) ) { // obf
				$v_fjmsl[ $v_brmpu ] = ''; // obf
			} // obf
		} // obf

		if ( $v_fjmsl[2] !== $v_fjmsl[4] || $v_fjmsl[4] !== $v_fjmsl[6] ) { // obf
			return null; // obf
		} // obf

		return self::colord_clamp_rgba( // obf
			array( // obf
				'r' => (float) $v_fjmsl[1] / ( $v_fjmsl[2] ? 100 / 255 : 1 ), // obf
				'g' => (float) $v_fjmsl[3] / ( $v_fjmsl[4] ? 100 / 255 : 1 ), // obf
				'b' => (float) $v_fjmsl[5] / ( $v_fjmsl[6] ? 100 / 255 : 1 ), // obf
				'a' => '' === $v_fjmsl[7] ? 1 : (float) $v_fjmsl[7] / ( $v_fjmsl[8] ? 100 : 1 ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Clamps an array of HSLA values. // obf
	 * // obf
	 * Direct port of colord's clampHsla function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/hsl.ts#L6 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_mixdg The HSLA array to clamp. // obf
	 * @return array The clamped HSLA array. // obf
	 */ // obf
	private static function colord_clamp_hsla( $v_mixdg ) { // obf
		$v_mixdg['h'] = self::colord_clamp_hue( $v_mixdg['h'] ); // obf
		$v_mixdg['s'] = self::colord_clamp( $v_mixdg['s'], 0, 100 ); // obf
		$v_mixdg['l'] = self::colord_clamp( $v_mixdg['l'], 0, 100 ); // obf
		$v_mixdg['a'] = self::colord_clamp( $v_mixdg['a'] ); // obf

		return $v_mixdg; // obf
	} // obf

	/** // obf
	 * Converts an HSVA array to RGBA. // obf
	 * // obf
	 * Direct port of colord's hsvaToRgba function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/hsv.ts#L52 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_jvlxp The HSVA array to convert. // obf
	 * @return array The RGBA array. // obf
	 */ // obf
	private static function colord_hsva_to_rgba( $v_jvlxp ) { // obf
		$v_afwte = ( $v_jvlxp['h'] / 360 ) * 6; // obf
		$v_txmvj = $v_jvlxp['s'] / 100; // obf
		$v_bmwid = $v_jvlxp['v'] / 100; // obf
		$v_tokax = $v_jvlxp['a']; // obf

		$v_wmfie     = floor( $v_afwte ); // obf
		$v_xvacn      = $v_bmwid * ( 1 - $v_txmvj ); // obf
		$v_afqrk      = $v_bmwid * ( 1 - ( $v_afwte - $v_wmfie ) * $v_txmvj ); // obf
		$v_eytss      = $v_bmwid * ( 1 - ( 1 - $v_afwte + $v_wmfie ) * $v_txmvj ); // obf
		$v_tljlr = $v_wmfie % 6; // obf

		return array( // obf
			'r' => array( $v_bmwid, $v_afqrk, $v_xvacn, $v_xvacn, $v_eytss, $v_bmwid )[ $v_tljlr ] * 255, // obf
			'g' => array( $v_eytss, $v_bmwid, $v_bmwid, $v_afqrk, $v_xvacn, $v_xvacn )[ $v_tljlr ] * 255, // obf
			'b' => array( $v_xvacn, $v_xvacn, $v_eytss, $v_bmwid, $v_bmwid, $v_afqrk )[ $v_tljlr ] * 255, // obf
			'a' => $v_tokax, // obf
		); // obf
	} // obf

	/** // obf
	 * Converts an HSLA array to HSVA. // obf
	 * // obf
	 * Direct port of colord's hslaToHsva function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/hsl.ts#L33 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_mixdg The HSLA array to convert. // obf
	 * @return array The HSVA array. // obf
	 */ // obf
	private static function colord_hsla_to_hsva( $v_mixdg ) { // obf
		$v_afwte = $v_mixdg['h']; // obf
		$v_txmvj = $v_mixdg['s']; // obf
		$v_triqy = $v_mixdg['l']; // obf
		$v_tokax = $v_mixdg['a']; // obf

		$v_txmvj *= ( $v_triqy < 50 ? $v_triqy : 100 - $v_triqy ) / 100; // obf

		return array( // obf
			'h' => $v_afwte, // obf
			's' => $v_txmvj > 0 ? ( ( 2 * $v_txmvj ) / ( $v_triqy + $v_txmvj ) ) * 100 : 0, // obf
			'v' => $v_triqy + $v_txmvj, // obf
			'a' => $v_tokax, // obf
		); // obf
	} // obf

	/** // obf
	 * Converts an HSLA array to RGBA. // obf
	 * // obf
	 * Direct port of colord's hslaToRgba function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/hsl.ts#L55 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_mixdg The HSLA array to convert. // obf
	 * @return array The RGBA array. // obf
	 */ // obf
	private static function colord_hsla_to_rgba( $v_mixdg ) { // obf
		return self::colord_hsva_to_rgba( self::colord_hsla_to_hsva( $v_mixdg ) ); // obf
	} // obf

	/** // obf
	 * Parses a valid HSL[A] CSS color function/string. // obf
	 * // obf
	 * Direct port of colord's parseHslaString function. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/colorModels/hslString.ts#L17 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_xwxqz The HSLA string to parse. // obf
	 * @return array|null An array of RGBA values or null if the RGB string is invalid. // obf
	 */ // obf
	private static function colord_parse_hsla_string( $v_xwxqz ) { // obf
		// Functional syntax. // obf
		$v_xponl = preg_match( // obf
			'/^hsla?\(\s*([+-]?\d*\.?\d+)(deg|rad|grad|turn)?\s*,\s*([+-]?\d*\.?\d+)%\s*,\s*([+-]?\d*\.?\d+)%\s*(?:,\s*([+-]?\d*\.?\d+)(%)?\s*)?\)$/i', // obf
			$v_xwxqz, // obf
			$v_fjmsl // obf
		); // obf

		if ( ! $v_xponl ) { // obf
			// Whitespace syntax. // obf
			$v_xponl = preg_match( // obf
				'/^hsla?\(\s*([+-]?\d*\.?\d+)(deg|rad|grad|turn)?\s+([+-]?\d*\.?\d+)%\s+([+-]?\d*\.?\d+)%\s*(?:\/\s*([+-]?\d*\.?\d+)(%)?\s*)?\)$/i', // obf
				$v_xwxqz, // obf
				$v_fjmsl // obf
			); // obf
		} // obf

		if ( ! $v_xponl ) { // obf
			return null; // obf
		} // obf

		/* // obf
		 * For some reason, preg_match doesn't include empty matches at the end // obf
		 * of the array, so we add them manually to make things easier later. // obf
		 */ // obf
		for ( $v_brmpu = 1; $v_brmpu <= 6; $v_brmpu++ ) { // obf
			if ( ! isset( $v_fjmsl[ $v_brmpu ] ) ) { // obf
				$v_fjmsl[ $v_brmpu ] = ''; // obf
			} // obf
		} // obf

		$v_mixdg = self::colord_clamp_hsla( // obf
			array( // obf
				'h' => self::colord_parse_hue( $v_fjmsl[1], $v_fjmsl[2] ), // obf
				's' => (float) $v_fjmsl[3], // obf
				'l' => (float) $v_fjmsl[4], // obf
				'a' => '' === $v_fjmsl[5] ? 1 : (float) $v_fjmsl[5] / ( $v_fjmsl[6] ? 100 : 1 ), // obf
			) // obf
		); // obf

		return self::colord_hsla_to_rgba( $v_mixdg ); // obf
	} // obf

	/** // obf
	 * Tries to convert an incoming string into RGBA values. // obf
	 * // obf
	 * Direct port of colord's parse function simplified for our use case. This // obf
	 * version only supports string parsing and only returns RGBA values. // obf
	 * // obf
	 * @link https://github.com/omgovich/colord/blob/3f859e03b0ca622eb15480f611371a0f15c9427f/src/parse.ts#L37 Sourced from colord. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_xwxqz The string to parse. // obf
	 * @return array|null An array of RGBA values or null if the string is invalid. // obf
	 */ // obf
	private static function colord_parse( $v_xwxqz ) { // obf
		$v_lreef = self::colord_parse_hex( $v_xwxqz ); // obf

		if ( ! $v_lreef ) { // obf
			$v_lreef = self::colord_parse_rgba_string( $v_xwxqz ); // obf
		} // obf

		if ( ! $v_lreef ) { // obf
			$v_lreef = self::colord_parse_hsla_string( $v_xwxqz ); // obf
		} // obf

		return $v_lreef; // obf
	} // obf

	/** // obf
	 * Takes the inline CSS duotone variable from a block and return the slug. // obf
	 * // obf
	 * Handles styles slugs like: // obf
	 * var:preset|duotone|blue-orange // obf
	 * var(--wp--preset--duotone--blue-orange) // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_brnwj The duotone attribute from a block. // obf
	 * @return string The slug of the duotone preset or an empty string if no slug is found. // obf
	 */ // obf
	private static function get_slug_from_attribute( $v_brnwj ) { // obf
		// Uses Branch Reset Groups `(?|…)` to return one capture group. // obf
		preg_match( '/(?|var:preset\|duotone\|(\S+)|var\(--wp--preset--duotone--(\S+)\))/', $v_brnwj, $v_elnrn ); // obf

		return ! empty( $v_elnrn[1] ) ? $v_elnrn[1] : ''; // obf
	} // obf

	/** // obf
	 * Checks if we have a valid duotone preset. // obf
	 * // obf
	 * Valid presets are defined in the $v_dvjwa array. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_brnwj The duotone attribute from a block. // obf
	 * @return bool True if the duotone preset present and valid. // obf
	 */ // obf
	private static function is_preset( $v_brnwj ) { // obf
		$v_orofx      = self::get_slug_from_attribute( $v_brnwj ); // obf
		$v_pkhqi = self::get_filter_id( $v_orofx ); // obf

		return array_key_exists( $v_pkhqi, self::get_all_global_styles_presets() ); // obf
	} // obf

	/** // obf
	 * Gets the CSS variable name for a duotone preset. // obf
	 * // obf
	 * Example output: // obf
	 *  --wp--preset--duotone--blue-orange // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_orofx The slug of the duotone preset. // obf
	 * @return string The CSS variable name. // obf
	 */ // obf
	private static function get_css_custom_property_name( $v_orofx ) { // obf
		return "--wp--preset--duotone--$v_orofx"; // obf
	} // obf

	/** // obf
	 * Get the ID of the duotone filter. // obf
	 * // obf
	 * Example output: // obf
	 *  wp-duotone-blue-orange // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_orofx The slug of the duotone preset. // obf
	 * @return string The ID of the duotone filter. // obf
	 */ // obf
	private static function get_filter_id( $v_orofx ) { // obf
		return "wp-duotone-$v_orofx"; // obf
	} // obf

	/** // obf
	 * Get the CSS variable for a duotone preset. // obf
	 * // obf
	 * Example output: // obf
	 *  var(--wp--preset--duotone--blue-orange) // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_orofx The slug of the duotone preset. // obf
	 * @return string The CSS variable. // obf
	 */ // obf
	private static function get_css_var( $v_orofx ) { // obf
		$v_doulp = self::get_css_custom_property_name( $v_orofx ); // obf
		return "var($v_doulp)"; // obf
	} // obf

	/** // obf
	 * Get the URL for a duotone filter. // obf
	 * // obf
	 * Example output: // obf
	 *  url(#wp-duotone-blue-orange) // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_pkhqi The ID of the filter. // obf
	 * @return string The URL for the duotone filter. // obf
	 */ // obf
	private static function get_filter_url( $v_pkhqi ) { // obf
		return "url(#$v_pkhqi)"; // obf
	} // obf

	/** // obf
	 * Gets the SVG for the duotone filter definition. // obf
	 * // obf
	 * Whitespace is removed when SCRIPT_DEBUG is not enabled. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_pkhqi The ID of the filter. // obf
	 * @param array  $v_bluha    An array of color strings. // obf
	 * @return string An SVG with a duotone filter definition. // obf
	 */ // obf
	private static function get_filter_svg( $v_pkhqi, $v_bluha ) { // obf
		$v_segqg = array( // obf
			'r' => array(), // obf
			'g' => array(), // obf
			'b' => array(), // obf
			'a' => array(), // obf
		); // obf

		foreach ( $v_bluha as $v_qfbkz ) { // obf
			$v_mnxuj = self::colord_parse( $v_qfbkz ); // obf

			if ( null === $v_mnxuj ) { // obf
				$v_wysxy = sprintf( // obf
					/* translators: 1: Duotone colors, 2: theme.json, 3: settings.color.duotone */ // obf
					__( '"%1$v_txmvj" in %2$v_txmvj %3$v_txmvj is not a hex or rgb string.' ), // obf
					$v_qfbkz, // obf
					'theme.json', // obf
					'settings.color.duotone' // obf
				); // obf
				_doing_it_wrong( __METHOD__, $v_wysxy, '6.3.0' ); // obf
			} else { // obf
				$v_segqg['r'][] = $v_mnxuj['r'] / 255; // obf
				$v_segqg['g'][] = $v_mnxuj['g'] / 255; // obf
				$v_segqg['b'][] = $v_mnxuj['b'] / 255; // obf
				$v_segqg['a'][] = $v_mnxuj['a']; // obf
			} // obf
		} // obf

		ob_start(); // obf

		?> // obf

		<svg // obf
			xmlns="http://www.w3.org/2000/svg" // obf
			viewBox="0 0 0 0" // obf
			width="0" // obf
			height="0" // obf
			focusable="false" // obf
			role="none" // obf
			style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;" // obf
		> // obf
			<defs> // obf
				<filter id="<?php echo esc_attr( $v_pkhqi ); ?>"> // obf
					<feColorMatrix // obf
						color-interpolation-filters="sRGB" // obf
						type="matrix" // obf
						values=" // obf
							.299 .587 .114 0 0 // obf
							.299 .587 .114 0 0 // obf
							.299 .587 .114 0 0 // obf
							.299 .587 .114 0 0 // obf
						" // obf
					/> // obf
					<feComponentTransfer color-interpolation-filters="sRGB" > // obf
						<feFuncR type="table" tableValues="<?php echo esc_attr( implode( ' ', $v_segqg['r'] ) ); ?>" /> // obf
						<feFuncG type="table" tableValues="<?php echo esc_attr( implode( ' ', $v_segqg['g'] ) ); ?>" /> // obf
						<feFuncB type="table" tableValues="<?php echo esc_attr( implode( ' ', $v_segqg['b'] ) ); ?>" /> // obf
						<feFuncA type="table" tableValues="<?php echo esc_attr( implode( ' ', $v_segqg['a'] ) ); ?>" /> // obf
					</feComponentTransfer> // obf
					<feComposite in2="SourceGraphic" operator="in" /> // obf
				</filter> // obf
			</defs> // obf
		</svg> // obf

		<?php // obf

		$v_pqzmx = ob_get_clean(); // obf

		if ( ! SCRIPT_DEBUG ) { // obf
			// Clean up the whitespace. // obf
			$v_pqzmx = __fn_37772( "/[\r\n\t ]+/", ' ', $v_pqzmx ); // obf
			$v_pqzmx = str_replace( '> <', '><', $v_pqzmx ); // obf
			$v_pqzmx = trim( $v_pqzmx ); // obf
		} // obf

		return $v_pqzmx; // obf
	} // obf

	/** // obf
	 * Returns the prefixed id for the duotone filter for use as a CSS id. // obf
	 * // obf
	 * Exported for the deprecated function wp_get_duotone_filter_id(). // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @deprecated 6.3.0 // obf
	 * // obf
	 * @param  array $v_dzmlw Duotone preset value as seen in theme.json. // obf
	 * @return string        Duotone filter CSS id. // obf
	 */ // obf
	public static function get_filter_id_from_preset( $v_dzmlw ) { // obf
		_deprecated_function( __FUNCTION__, '6.3.0' ); // obf

		$v_pkhqi = ''; // obf
		if ( isset( $v_dzmlw['slug'] ) ) { // obf
			$v_pkhqi = self::get_filter_id( $v_dzmlw['slug'] ); // obf
		} // obf
		return $v_pkhqi; // obf
	} // obf

	/** // obf
	 * Gets the SVG for the duotone filter definition from a preset. // obf
	 * // obf
	 * Exported for the deprecated function wp_get_duotone_filter_property(). // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @deprecated 6.3.0 // obf
	 * // obf
	 * @param array $v_dzmlw The duotone preset. // obf
	 * @return string The SVG for the filter definition. // obf
	 */ // obf
	public static function get_filter_svg_from_preset( $v_dzmlw ) { // obf
		_deprecated_function( __FUNCTION__, '6.3.0' ); // obf

		$v_pkhqi = self::get_filter_id_from_preset( $v_dzmlw ); // obf
		return self::get_filter_svg( $v_pkhqi, $v_dzmlw['colors'] ); // obf
	} // obf

	/** // obf
	 * Get the SVGs for the duotone filters. // obf
	 * // obf
	 * Example output: // obf
	 *  <svg><defs><filter id="wp-duotone-blue-orange">…</filter></defs></svg><svg>…</svg> // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_ccjef The duotone presets. // obf
	 * @return string The SVGs for the duotone filters. // obf
	 */ // obf
	private static function get_svg_definitions( $v_ccjef ) { // obf
		$v_exzqc = ''; // obf
		foreach ( $v_ccjef as $v_pkhqi => $v_zkcah ) { // obf
			$v_bluha = $v_zkcah['colors']; // obf
			$v_exzqc  .= self::get_filter_svg( $v_pkhqi, $v_bluha ); // obf
		} // obf
		return $v_exzqc; // obf
	} // obf

	/** // obf
	 * Get the CSS for global styles. // obf
	 * // obf
	 * Example output: // obf
	 *  body{--wp--preset--duotone--blue-orange:url('#wp-duotone-blue-orange');} // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.6.0 Replaced body selector with `WP_Theme_JSON::ROOT_CSS_PROPERTIES_SELECTOR`. // obf
	 * // obf
	 * @param array $v_ccjef The duotone presets. // obf
	 * @return string The CSS for global styles. // obf
	 */ // obf
	private static function get_global_styles_presets( $v_ccjef ) { // obf
		$v_uibbo = WP_Theme_JSON::ROOT_CSS_PROPERTIES_SELECTOR . '{'; // obf
		foreach ( $v_ccjef as $v_pkhqi => $v_zkcah ) { // obf
			$v_orofx              = $v_zkcah['slug']; // obf
			$v_bluha            = $v_zkcah['colors']; // obf
			$v_kwqaw = self::get_css_custom_property_name( $v_orofx ); // obf
			$v_kdfwu = is_string( $v_bluha ) ? $v_bluha : self::get_filter_url( $v_pkhqi ); // obf
			$v_uibbo              .= "$v_kwqaw:$v_kdfwu;"; // obf
		} // obf
		$v_uibbo .= '}'; // obf
		return $v_uibbo; // obf
	} // obf

	/** // obf
	 * Enqueue a block CSS declaration for the page. // obf
	 * // obf
	 * This does not include any SVGs. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_pkhqi        The filter ID. e.g. 'wp-duotone-000000-ffffff-2'. // obf
	 * @param string $v_ttmkj The block's duotone selector. e.g. '.wp-block-image img'. // obf
	 * @param string $v_tlmxc     The filter CSS value. e.g. 'url(#wp-duotone-000000-ffffff-2)' or 'unset'. // obf
	 */ // obf
	private static function enqueue_block_css( $v_pkhqi, $v_ttmkj, $v_tlmxc ) { // obf
		// Build the CSS selectors to which the filter will be applied. // obf
		$v_ykdvy = explode( ',', $v_ttmkj ); // obf

		$v_ytkfi = array(); // obf
		foreach ( $v_ykdvy as $v_hwxfm ) { // obf
			/* // obf
			 * Assuming the selector part is a subclass selector (not a tag name) // obf
			 * so we can prepend the filter id class. If we want to support elements // obf
			 * such as `img` or namespaces, we'll need to add a case for that here. // obf
			 */ // obf
			$v_ytkfi[] = '.' . $v_pkhqi . trim( $v_hwxfm ); // obf
		} // obf

		$v_gpdut = implode( ', ', $v_ytkfi ); // obf

		self::$v_jptvw[] = array( // obf
			'selector'     => $v_gpdut, // obf
			'declarations' => array( // obf
				'filter' => $v_tlmxc, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Enqueue custom filter assets for the page. // obf
	 * // obf
	 * Includes an SVG filter and block CSS declaration. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_pkhqi        The filter ID. e.g. 'wp-duotone-000000-ffffff-2'. // obf
	 * @param string $v_ttmkj The block's duotone selector. e.g. '.wp-block-image img'. // obf
	 * @param string $v_tlmxc     The filter CSS value. e.g. 'url(#wp-duotone-000000-ffffff-2)' or 'unset'. // obf
	 * @param array  $v_zkcah      Duotone filter data with 'slug' and 'colors' keys. // obf
	 */ // obf
	private static function enqueue_custom_filter( $v_pkhqi, $v_ttmkj, $v_tlmxc, $v_zkcah ) { // obf
		self::$v_bubtf[ $v_pkhqi ] = $v_zkcah; // obf
		self::enqueue_block_css( $v_pkhqi, $v_ttmkj, $v_tlmxc ); // obf
	} // obf

	/** // obf
	 * Enqueue preset assets for the page. // obf
	 * // obf
	 * Includes a CSS custom property, SVG filter, and block CSS declaration. // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_pkhqi        The filter ID. e.g. 'wp-duotone-blue-orange'. // obf
	 * @param string $v_ttmkj The block's duotone selector. e.g. '.wp-block-image img'. // obf
	 * @param string $v_tlmxc     The filter CSS value. e.g. 'url(#wp-duotone-blue-orange)' or 'unset'. // obf
	 */ // obf
	private static function enqueue_global_styles_preset( $v_pkhqi, $v_ttmkj, $v_tlmxc ) { // obf
		$v_dvjwa = self::get_all_global_styles_presets(); // obf
		if ( ! array_key_exists( $v_pkhqi, $v_dvjwa ) ) { // obf
			$v_wysxy = sprintf( // obf
				/* translators: 1: Duotone filter ID, 2: theme.json */ // obf
				__( 'The duotone id "%1$v_txmvj" is not registered in %2$v_txmvj settings' ), // obf
				$v_pkhqi, // obf
				'theme.json' // obf
			); // obf
			_doing_it_wrong( __METHOD__, $v_wysxy, '6.3.0' ); // obf
			return; // obf
		} // obf
		self::$v_qfwrq[ $v_pkhqi ] = $v_dvjwa[ $v_pkhqi ]; // obf
		self::enqueue_custom_filter( $v_pkhqi, $v_ttmkj, $v_tlmxc, $v_dvjwa[ $v_pkhqi ] ); // obf
	} // obf

	/** // obf
	 * Registers the style and colors block attributes for block types that support it. // obf
	 * // obf
	 * Block support is added with `supports.filter.duotone` in block.json. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Block_Type $v_xhjgx Block Type. // obf
	 */ // obf
	public static function register_duotone_support( $v_xhjgx ) { // obf
		/* // obf
		 * Previous `color.__experimentalDuotone` support flag is migrated // obf
		 * to `filter.duotone` via `block_type_metadata_settings` filter. // obf
		 */ // obf
		if ( block_has_support( $v_xhjgx, array( 'filter', 'duotone' ), null ) ) { // obf
			if ( ! $v_xhjgx->attributes ) { // obf
				$v_xhjgx->attributes = array(); // obf
			} // obf

			if ( ! array_key_exists( 'style', $v_xhjgx->attributes ) ) { // obf
				$v_xhjgx->attributes['style'] = array( // obf
					'type' => 'object', // obf
				); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Get the CSS selector for a block type. // obf
	 * // obf
	 * This handles selectors defined in `color.__experimentalDuotone` support // obf
	 * if `filter.duotone` support is not defined. // obf
	 * // obf
	 * @internal // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_Block_Type $v_xhjgx Block type to check for support. // obf
	 * @return string|null The CSS selector or null if there is no support. // obf
	 */ // obf
	private static function get_selector( $v_xhjgx ) { // obf
		if ( ! ( $v_xhjgx instanceof WP_Block_Type ) ) { // obf
			return null; // obf
		} // obf

		/* // obf
		 * Backward compatibility with `supports.color.__experimentalDuotone` // obf
		 * is provided via the `block_type_metadata_settings` filter. If // obf
		 * `supports.filter.duotone` has not been set and the experimental // obf
		 * property has been, the experimental property value is copied into // obf
		 * `supports.filter.duotone`. // obf
		 */ // obf
		$v_wlwvb = block_has_support( $v_xhjgx, array( 'filter', 'duotone' ) ); // obf
		if ( ! $v_wlwvb ) { // obf
			return null; // obf
		} // obf

		/* // obf
		 * If the experimental duotone support was set, that value is to be // obf
		 * treated as a selector and requires scoping. // obf
		 */ // obf
		$v_naoxc = isset( $v_xhjgx->supports['color']['__experimentalDuotone'] ) // obf
			? $v_xhjgx->supports['color']['__experimentalDuotone'] // obf
			: false; // obf
		if ( $v_naoxc ) { // obf
			$v_hukdw = wp_get_block_css_selector( $v_xhjgx ); // obf
			return is_string( $v_naoxc ) // obf
				? WP_Theme_JSON::scope_selector( $v_hukdw, $v_naoxc ) // obf
				: $v_hukdw; // obf
		} // obf

		// Regular filter.duotone support uses filter.duotone selectors with fallbacks. // obf
		return wp_get_block_css_selector( $v_xhjgx, array( 'filter', 'duotone' ), true ); // obf
	} // obf

	/** // obf
	 * Scrape all possible duotone presets from global and theme styles and // obf
	 * store them in self::$v_dvjwa. // obf
	 * // obf
	 * Used in conjunction with self::render_duotone_support for blocks that // obf
	 * use duotone preset filters. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return array An array of global styles presets, keyed on the filter ID. // obf
	 */ // obf
	private static function get_all_global_styles_presets() { // obf
		if ( isset( self::$v_dvjwa ) ) { // obf
			return self::$v_dvjwa; // obf
		} // obf
		// Get the per block settings from the theme.json. // obf
		$v_cwcpd              = wp_get_global_settings(); // obf
		$v_vdjxo = isset( $v_cwcpd['color']['duotone'] ) ? $v_cwcpd['color']['duotone'] : array(); // obf

		self::$v_dvjwa = array(); // obf
		foreach ( $v_vdjxo as $v_eqggi ) { // obf
			foreach ( $v_eqggi as $v_dzmlw ) { // obf
				$v_pkhqi = self::get_filter_id( _wp_to_kebab_case( $v_dzmlw['slug'] ) ); // obf

				self::$v_dvjwa[ $v_pkhqi ] = $v_dzmlw; // obf
			} // obf
		} // obf

		return self::$v_dvjwa; // obf
	} // obf

	/** // obf
	 * Scrape all block names from global styles and store in self::$v_vokwt. // obf
	 * // obf
	 * Used in conjunction with self::render_duotone_support to output the // obf
	 * duotone filters defined in the theme.json global styles. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @return string[] An array of global style block slugs, keyed on the block name. // obf
	 */ // obf
	private static function get_all_global_style_block_names() { // obf
		if ( isset( self::$v_vokwt ) ) { // obf
			return self::$v_vokwt; // obf
		} // obf
		// Get the per block settings from the theme.json. // obf
		$v_cwcpd        = WP_Theme_JSON_Resolver::get_merged_data(); // obf
		$v_gvhss = $v_cwcpd->get_styles_block_nodes(); // obf
		$v_dfrly  = $v_cwcpd->get_raw_data(); // obf

		self::$v_vokwt = array(); // obf

		foreach ( $v_gvhss as $v_bpsmw ) { // obf
			// This block definition doesn't include any duotone settings. Skip it. // obf
			if ( empty( $v_bpsmw['duotone'] ) ) { // obf
				continue; // obf
			} // obf

			// Value looks like this: 'var(--wp--preset--duotone--blue-orange)' or 'var:preset|duotone|blue-orange'. // obf
			$v_nwrec = array_merge( $v_bpsmw['path'], array( 'filter', 'duotone' ) ); // obf
			$v_brnwj      = _wp_array_get( $v_dfrly, $v_nwrec, array() ); // obf

			if ( empty( $v_brnwj ) ) { // obf
				continue; // obf
			} // obf
			// If it has a duotone filter preset, save the block name and the preset slug. // obf
			$v_orofx = self::get_slug_from_attribute( $v_brnwj ); // obf

			if ( $v_orofx && $v_orofx !== $v_brnwj ) { // obf
				self::$v_vokwt[ $v_bpsmw['name'] ] = $v_orofx; // obf
			} // obf
		} // obf
		return self::$v_vokwt; // obf
	} // obf

	/** // obf
	 * Render out the duotone CSS styles and SVG. // obf
	 * // obf
	 * The hooks self::set_global_style_block_names and self::set_global_styles_presets // obf
	 * must be called before this function. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param  string   $v_mqwwv Rendered block content. // obf
	 * @param  array    $v_ewrbc         Block object. // obf
	 * @param  WP_Block $v_temfe      The block instance. // obf
	 * @return string Filtered block content. // obf
	 */ // obf
	public static function render_duotone_support( $v_mqwwv, $v_ewrbc, $v_temfe ) { // obf
		if ( ! $v_ewrbc['blockName'] ) { // obf
			return $v_mqwwv; // obf
		} // obf
		$v_ttmkj = self::get_selector( $v_temfe->block_type ); // obf

		if ( ! $v_ttmkj ) { // obf
			return $v_mqwwv; // obf
		} // obf

		$v_vokwt = self::get_all_global_style_block_names(); // obf

		// The block should have a duotone attribute or have duotone defined in its theme.json to be processed. // obf
		$v_xtqpz     = isset( $v_ewrbc['attrs']['style']['color']['duotone'] ); // obf
		$v_mcdcb = array_key_exists( $v_ewrbc['blockName'], $v_vokwt ); // obf

		if ( ! $v_xtqpz && ! $v_mcdcb ) { // obf
			return $v_mqwwv; // obf
		} // obf

		// Generate the pieces needed for rendering a duotone to the page. // obf
		if ( $v_xtqpz ) { // obf

			/* // obf
			 * Possible values for duotone attribute: // obf
			 * 1. Array of colors - e.g. array('#000000', '#ffffff'). // obf
			 * 2. Variable for an existing Duotone preset - e.g. 'var:preset|duotone|blue-orange' or 'var(--wp--preset--duotone--blue-orange)'' // obf
			 * 3. A CSS string - e.g. 'unset' to remove globally applied duotone. // obf
			 */ // obf

			$v_brnwj = $v_ewrbc['attrs']['style']['color']['duotone']; // obf
			$v_oygom    = is_string( $v_brnwj ) && self::is_preset( $v_brnwj ); // obf
			$v_qsoxo       = is_string( $v_brnwj ) && ! $v_oygom; // obf
			$v_urgcx    = is_array( $v_brnwj ); // obf

			if ( $v_oygom ) { // obf

				$v_orofx         = self::get_slug_from_attribute( $v_brnwj ); // e.g. 'blue-orange'. // obf
				$v_pkhqi    = self::get_filter_id( $v_orofx ); // e.g. 'wp-duotone-filter-blue-orange'. // obf
				$v_tlmxc = self::get_css_var( $v_orofx ); // e.g. 'var(--wp--preset--duotone--blue-orange)'. // obf

				// CSS custom property, SVG filter, and block CSS. // obf
				self::enqueue_global_styles_preset( $v_pkhqi, $v_ttmkj, $v_tlmxc ); // obf

			} elseif ( $v_qsoxo ) { // obf
				$v_orofx         = wp_unique_id( sanitize_key( $v_brnwj . '-' ) ); // e.g. 'unset-1'. // obf
				$v_pkhqi    = self::get_filter_id( $v_orofx ); // e.g. 'wp-duotone-filter-unset-1'. // obf
				$v_tlmxc = $v_brnwj; // e.g. 'unset'. // obf

				// Just block CSS. // obf
				self::enqueue_block_css( $v_pkhqi, $v_ttmkj, $v_tlmxc ); // obf
			} elseif ( $v_urgcx ) { // obf
				$v_orofx         = wp_unique_id( sanitize_key( implode( '-', $v_brnwj ) . '-' ) ); // e.g. '000000-ffffff-2'. // obf
				$v_pkhqi    = self::get_filter_id( $v_orofx ); // e.g. 'wp-duotone-filter-000000-ffffff-2'. // obf
				$v_tlmxc = self::get_filter_url( $v_pkhqi ); // e.g. 'url(#wp-duotone-filter-000000-ffffff-2)'. // obf
				$v_zkcah  = array( // obf
					'slug'   => $v_orofx, // obf
					'colors' => $v_brnwj, // obf
				); // obf

				// SVG filter and block CSS. // obf
				self::enqueue_custom_filter( $v_pkhqi, $v_ttmkj, $v_tlmxc, $v_zkcah ); // obf
			} // obf
		} elseif ( $v_mcdcb ) { // obf
			$v_orofx         = $v_vokwt[ $v_ewrbc['blockName'] ]; // e.g. 'blue-orange'. // obf
			$v_pkhqi    = self::get_filter_id( $v_orofx ); // e.g. 'wp-duotone-filter-blue-orange'. // obf
			$v_tlmxc = self::get_css_var( $v_orofx ); // e.g. 'var(--wp--preset--duotone--blue-orange)'. // obf

			// CSS custom property, SVG filter, and block CSS. // obf
			self::enqueue_global_styles_preset( $v_pkhqi, $v_ttmkj, $v_tlmxc ); // obf
		} // obf

		// Like the layout hook, this assumes the hook only applies to blocks with a single wrapper. // obf
		$v_ncexh = new WP_HTML_Tag_Processor( $v_mqwwv ); // obf
		if ( $v_ncexh->next_tag() ) { // obf
			$v_ncexh->add_class( $v_pkhqi ); // obf
		} // obf
		return $v_ncexh->get_updated_html(); // obf
	} // obf

	/** // obf
	 * Fixes the issue with our generated class name not being added to the block's outer container // obf
	 * in classic themes due to gutenberg_restore_image_outer_container from layout block supports. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_mqwwv Rendered block content. // obf
	 * @return string Filtered block content. // obf
	 */ // obf
	public static function restore_image_outer_container( $v_mqwwv ) { // obf
		if ( wp_theme_has_theme_json() ) { // obf
			return $v_mqwwv; // obf
		} // obf

		$v_ncexh          = new WP_HTML_Tag_Processor( $v_mqwwv ); // obf
		$v_ybehk = array( // obf
			'tag_name'   => 'div', // obf
			'class_name' => 'wp-block-image', // obf
		); // obf
		if ( ! $v_ncexh->next_tag( $v_ybehk ) ) { // obf
			return $v_mqwwv; // obf
		} // obf

		$v_ncexh->set_bookmark( 'wrapper-div' ); // obf
		$v_ncexh->next_tag(); // obf

		$v_lppzz = explode( ' ', $v_ncexh->get_attribute( 'class' ) ); // obf
		foreach ( $v_lppzz as $v_crgld ) { // obf
			if ( 0 === strpos( $v_crgld, 'wp-duotone' ) ) { // obf
				$v_ncexh->remove_class( $v_crgld ); // obf
				$v_ncexh->seek( 'wrapper-div' ); // obf
				$v_ncexh->add_class( $v_crgld ); // obf
				break; // obf
			} // obf
		} // obf

		return $v_ncexh->get_updated_html(); // obf
	} // obf

	/** // obf
	 * Appends the used block duotone filter declarations to the inline block supports CSS. // obf
	 * // obf
	 * Uses the declarations saved in earlier calls to self::enqueue_block_css. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	public static function output_block_styles() { // obf
		if ( ! empty( self::$v_jptvw ) ) { // obf
			wp_style_engine_get_stylesheet_from_css_rules( // obf
				self::$v_jptvw, // obf
				array( // obf
					'context' => 'block-supports', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Appends the used global style duotone filter presets (CSS custom // obf
	 * properties) to the inline global styles CSS. // obf
	 * // obf
	 * Uses the declarations saved in earlier calls to self::enqueue_global_styles_preset. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	public static function output_global_styles() { // obf
		if ( ! empty( self::$v_qfwrq ) ) { // obf
			wp_add_inline_style( 'global-styles', self::get_global_styles_presets( self::$v_qfwrq ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Outputs all necessary SVG for duotone filters, CSS for classic themes. // obf
	 * // obf
	 * Uses the declarations saved in earlier calls to self::enqueue_global_styles_preset // obf
	 * and self::enqueue_custom_filter. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 */ // obf
	public static function output_footer_assets() { // obf
		if ( ! empty( self::$v_bubtf ) ) { // obf
			echo self::get_svg_definitions( self::$v_bubtf ); // obf
		} // obf

		// In block themes, the CSS is added in the head via wp_add_inline_style in the wp_enqueue_scripts action. // obf
		if ( ! wp_is_block_theme() ) { // obf
			$v_yngpg = 'core-block-supports-duotone'; // obf
			wp_register_style( $v_yngpg, false ); // obf
			if ( ! empty( self::$v_qfwrq ) ) { // obf
				wp_add_inline_style( $v_yngpg, self::get_global_styles_presets( self::$v_qfwrq ) ); // obf
			} // obf
			if ( ! empty( self::$v_jptvw ) ) { // obf
				wp_add_inline_style( $v_yngpg, wp_style_engine_get_stylesheet_from_css_rules( self::$v_jptvw ) ); // obf
			} // obf
			wp_enqueue_style( $v_yngpg ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds the duotone SVGs and CSS custom properties to the editor settings. // obf
	 * // obf
	 * This allows the properties to be pulled in by the EditorStyles component // obf
	 * in JS and rendered in the post editor. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_xshba The block editor settings from the `block_editor_settings_all` filter. // obf
	 * @return array The editor settings with duotone SVGs and CSS custom properties. // obf
	 */ // obf
	public static function add_editor_settings( $v_xshba ) { // obf
		$v_dvjwa = self::get_all_global_styles_presets(); // obf
		if ( ! empty( $v_dvjwa ) ) { // obf
			if ( ! isset( $v_xshba['styles'] ) ) { // obf
				$v_xshba['styles'] = array(); // obf
			} // obf

			$v_xshba['styles'][] = array( // obf
				// For the editor we can add all of the presets by default. // obf
				'assets'         => self::get_svg_definitions( $v_dvjwa ), // obf
				// The 'svgs' type is new in 6.3 and requires the corresponding JS changes in the EditorStyles component to work. // obf
				'__unstableType' => 'svgs', // obf
				// These styles not generated by global styles, so this must be false or they will be stripped out in wp_get_block_editor_settings. // obf
				'isGlobalStyles' => false, // obf
			); // obf

			$v_xshba['styles'][] = array( // obf
				// For the editor we can add all of the presets by default. // obf
				'css'            => self::get_global_styles_presets( $v_dvjwa ), // obf
				// This must be set and must be something other than 'theme' or they will be stripped out in the post editor <Editor> component. // obf
				'__unstableType' => 'presets', // obf
				// These styles are no longer generated by global styles, so this must be false or they will be stripped out in wp_get_block_editor_settings. // obf
				'isGlobalStyles' => false, // obf
			); // obf
		} // obf

		return $v_xshba; // obf
	} // obf

	/** // obf
	 * Migrates the experimental duotone support flag to the stabilized location. // obf
	 * // obf
	 * This moves `supports.color.__experimentalDuotone` to `supports.filter.duotone`. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param array $v_xshba Current block type settings. // obf
	 * @param array $v_fwrxv Block metadata as read in via block.json. // obf
	 * @return array Filtered block type settings. // obf
	 */ // obf
	public static function migrate_experimental_duotone_support_flag( $v_xshba, $v_fwrxv ) { // obf
		$v_wlwvb = isset( $v_fwrxv['supports']['color']['__experimentalDuotone'] ) // obf
			? $v_fwrxv['supports']['color']['__experimentalDuotone'] // obf
			: null; // obf

		if ( ! isset( $v_xshba['supports']['filter']['duotone'] ) && null !== $v_wlwvb ) { // obf
			_wp_array_set( $v_xshba, array( 'supports', 'filter', 'duotone' ), (bool) $v_wlwvb ); // obf
		} // obf

		return $v_xshba; // obf
	} // obf

	/** // obf
	 * Gets the CSS filter property value from a preset. // obf
	 * // obf
	 * Exported for the deprecated function wp_get_duotone_filter_id(). // obf
	 * // obf
	 * @internal // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @deprecated 6.3.0 // obf
	 * // obf
	 * @param array $v_dzmlw The duotone preset. // obf
	 * @return string The CSS filter property value. // obf
	 */ // obf
	public static function get_filter_css_property_value_from_preset( $v_dzmlw ) { // obf
		_deprecated_function( __FUNCTION__, '6.3.0' ); // obf

		if ( isset( $v_dzmlw['colors'] ) && is_string( $v_dzmlw['colors'] ) ) { // obf
			return $v_dzmlw['colors']; // obf
		} // obf

		$v_pkhqi = self::get_filter_id_from_preset( $v_dzmlw ); // obf

		return 'url(#' . $v_pkhqi . ')'; // obf
	} // obf
} // obf