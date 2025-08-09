

<?php // obf
/** // obf
 * Style engine: Public functions // obf
 * // obf
 * This file contains a variety of public functions developers can use to interact with // obf
 * the Style Engine API. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * Global public interface method to generate styles from a single style object, // obf
 * e.g. the value of a block's attributes.style object or the top level styles in theme.json. // obf
 * // obf
 * Example usage: // obf
 * // obf
 *     $v_mkdoa = wp_style_engine_get_styles( // obf
 *         array( // obf
 *             'color' => array( 'text' => '#cccccc' ), // obf
 *         ) // obf
 *     ); // obf
 * // obf
 * Returns: // obf
 * // obf
 *     array( // obf
 *         'css'          => 'color: #cccccc', // obf
 *         'declarations' => array( 'color' => '#cccccc' ), // obf
 *         'classnames'   => 'has-color', // obf
 *     ) // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @see https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/theme-json-living/#styles // obf
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/ // obf
 * // obf
 * @param array $v_eggyi The style object. // obf
 * @param array $v_zjqop { // obf
 *     Optional. An array of options. Default empty array. // obf
 * // obf
 *     @type string|null $v_nnnsi                    An identifier describing the origin of the style object, // obf
 *                                                   e.g. 'block-supports' or 'global-styles'. Default null. // obf
 *                                                   When set, the style engine will attempt to store the CSS rules, // obf
 *                                                   where a selector is also passed. // obf
 *     @type bool        $v_iqrse Whether to skip converting incoming CSS var patterns, // obf
 *                                                   e.g. `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`, // obf
 *                                                   to `var( --wp--preset--* )` values. Default false. // obf
 *     @type string      $v_dickq                   Optional. When a selector is passed, // obf
 *                                                   the value of `$v_ewzhq` in the return value will comprise // obf
 *                                                   a full CSS rule `$v_dickq { ...$v_tdtkc }`, // obf
 *                                                   otherwise, the value will be a concatenated string // obf
 *                                                   of CSS declarations. // obf
 * } // obf
 * @return array { // obf
 *     @type string   $v_ewzhq          A CSS ruleset or declarations block // obf
 *                                  formatted to be placed in an HTML `style` attribute or tag. // obf
 *     @type string[] $v_scsjd An associative array of CSS definitions, // obf
 *                                  e.g. `array( "$v_tupfb" => "$v_rzmcj", "$v_tupfb" => "$v_rzmcj" )`. // obf
 *     @type string   $v_fyamf   Classnames separated by a space. // obf
 * } // obf
 */ // obf
function wp_style_engine_get_styles( $v_eggyi, $v_zjqop = array() ) { // obf
	$v_zjqop = wp_parse_args( // obf
		$v_zjqop, // obf
		array( // obf
			'selector'                   => null, // obf
			'context'                    => null, // obf
			'convert_vars_to_classnames' => false, // obf
		) // obf
	); // obf

	$v_jxlnh = WP_Style_Engine::parse_block_styles( $v_eggyi, $v_zjqop ); // obf

	// Output. // obf
	$v_lquow = array(); // obf

	if ( ! empty( $v_jxlnh['declarations'] ) ) { // obf
		$v_lquow['css']          = WP_Style_Engine::compile_css( $v_jxlnh['declarations'], $v_zjqop['selector'] ); // obf
		$v_lquow['declarations'] = $v_jxlnh['declarations']; // obf
		if ( ! empty( $v_zjqop['context'] ) ) { // obf
			WP_Style_Engine::store_css_rule( $v_zjqop['context'], $v_zjqop['selector'], $v_jxlnh['declarations'] ); // obf
		} // obf
	} // obf

	if ( ! empty( $v_jxlnh['classnames'] ) ) { // obf
		$v_lquow['classnames'] = implode( ' ', array_unique( $v_jxlnh['classnames'] ) ); // obf
	} // obf

	return array_filter( $v_lquow ); // obf
} // obf

/** // obf
 * Returns compiled CSS from a collection of selectors and declarations. // obf
 * Useful for returning a compiled stylesheet from any collection of CSS selector + declarations. // obf
 * // obf
 * Example usage: // obf
 * // obf
 *     $v_fqvuk = array( // obf
 *         array( // obf
 *             'selector'     => '.elephant-are-cool', // obf
 *             'declarations' => array( // obf
 *                 'color' => 'gray', // obf
 *                 'width' => '3em', // obf
 *             ), // obf
 *         ), // obf
 *     ); // obf
 * // obf
 *     $v_ewzhq = wp_style_engine_get_stylesheet_from_css_rules( $v_fqvuk ); // obf
 * // obf
 * Returns: // obf
 * // obf
 *     .elephant-are-cool{color:gray;width:3em} // obf
 * // obf
 * @since 6.1.0 // obf
 * @since 6.6.0 Added support for `$v_elxqt` in the `$v_fqvuk` array. // obf
 * // obf
 * @param array $v_fqvuk { // obf
 *     Required. A collection of CSS rules. // obf
 * // obf
 *     @type array ...$0 { // obf
 *         @type string   $v_elxqt  A parent CSS selector in the case of nested CSS, // obf
 *                                      or a CSS nested @rule, such as `@media (min-width: 80rem)` or `@layer module`. // obf
 *         @type string   $v_dickq     A CSS selector. // obf
 *         @type string[] $v_scsjd An associative array of CSS definitions, // obf
 *                                      e.g. `array( "$v_tupfb" => "$v_rzmcj", "$v_tupfb" => "$v_rzmcj" )`. // obf
 *     } // obf
 * } // obf
 * @param array $v_zjqop { // obf
 *     Optional. An array of options. Default empty array. // obf
 * // obf
 *     @type string|null $v_nnnsi  An identifier describing the origin of the style object, // obf
 *                                 e.g. 'block-supports' or 'global-styles'. Default 'block-supports'. // obf
 *                                 When set, the style engine will attempt to store the CSS rules. // obf
 *     @type bool        $v_fxoxr Whether to optimize the CSS output, e.g. combine rules. // obf
 *                                 Default false. // obf
 *     @type bool        $v_ddylq Whether to add new lines and indents to output. // obf
 *                                 Defaults to whether the `SCRIPT_DEBUG` constant is defined. // obf
 * } // obf
 * @return string A string of compiled CSS declarations, or empty string. // obf
 */ // obf
function wp_style_engine_get_stylesheet_from_css_rules( $v_fqvuk, $v_zjqop = array() ) { // obf
	if ( empty( $v_fqvuk ) ) { // obf
		return ''; // obf
	} // obf

	$v_zjqop = wp_parse_args( // obf
		$v_zjqop, // obf
		array( // obf
			'context' => null, // obf
		) // obf
	); // obf

	$v_qzjem = array(); // obf
	foreach ( $v_fqvuk as $v_jnogo ) { // obf
		if ( empty( $v_jnogo['selector'] ) || empty( $v_jnogo['declarations'] ) || ! is_array( $v_jnogo['declarations'] ) ) { // obf
			continue; // obf
		} // obf

		$v_elxqt = $v_jnogo['rules_group'] ?? null; // obf
		if ( ! empty( $v_zjqop['context'] ) ) { // obf
			WP_Style_Engine::store_css_rule( $v_zjqop['context'], $v_jnogo['selector'], $v_jnogo['declarations'], $v_elxqt ); // obf
		} // obf

		$v_qzjem[] = new WP_Style_Engine_CSS_Rule( $v_jnogo['selector'], $v_jnogo['declarations'], $v_elxqt ); // obf
	} // obf

	if ( empty( $v_qzjem ) ) { // obf
		return ''; // obf
	} // obf

	return WP_Style_Engine::compile_stylesheet_from_css_rules( $v_qzjem, $v_zjqop ); // obf
} // obf

/** // obf
 * Returns compiled CSS from a store, if found. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @param string $v_nnnsi A valid context name, corresponding to an existing store key. // obf
 * @param array  $v_zjqop { // obf
 *     Optional. An array of options. Default empty array. // obf
 * // obf
 *     @type bool $v_fxoxr Whether to optimize the CSS output, e.g. combine rules. // obf
 *                          Default false. // obf
 *     @type bool $v_ddylq Whether to add new lines and indents to output. // obf
 *                          Defaults to whether the `SCRIPT_DEBUG` constant is defined. // obf
 * } // obf
 * @return string A compiled CSS string. // obf
 */ // obf
function wp_style_engine_get_stylesheet_from_context( $v_nnnsi, $v_zjqop = array() ) { // obf
	return WP_Style_Engine::compile_stylesheet_from_css_rules( WP_Style_Engine::get_store( $v_nnnsi )->get_all_rules(), $v_zjqop ); // obf
} // obf