

<?php // obf
/** // obf
 * Style Engine: WP_Style_Engine class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * The main class integrating all other WP_Style_Engine_* classes. // obf
 * // obf
 * The Style Engine aims to provide a consistent API for rendering styling for blocks // obf
 * across both client-side and server-side applications. // obf
 * // obf
 * This class is final and should not be extended. // obf
 * // obf
 * This class is for internal Core usage and is not supposed to be used by extenders // obf
 * (plugins and/or themes). This is a low-level API that may need to do breaking changes. // obf
 * Please, use wp_style_engine_get_styles() instead. // obf
 * // obf
 * @access private // obf
 * @since 6.1.0 // obf
 * @since 6.3.0 Added support for text-columns. // obf
 * @since 6.4.0 Added support for background.backgroundImage. // obf
 * @since 6.5.0 Added support for background.backgroundPosition, // obf
 *              background.backgroundRepeat and dimensions.aspectRatio. // obf
 * @since 6.7.0 Added support for typography.writingMode. // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Style_Engine { // obf
	/** // obf
	 * Style definitions that contain the instructions to parse/output valid Gutenberg styles from a block's attributes. // obf
	 * // obf
	 * For every style definition, the following properties are valid: // obf
	 * // obf
	 *  - classnames    => (array) an array of classnames to be returned for block styles. The key is a classname or pattern. // obf
	 *                    A value of `true` means the classname should be applied always. Otherwise, a valid CSS property (string) // obf
	 *                    to match the incoming value, e.g., "color" to match var:preset|color|somePresetSlug. // obf
	 *  - css_vars      => (array) an array of key value pairs used to generate CSS var values. // obf
	 *                     The key should be the CSS property name that matches the second element of the preset string value, // obf
	 *                     i.e., "color" in var:preset|color|somePresetSlug. The value is a CSS var pattern (e.g. `--wp--preset--color--$v_hvcsa`), // obf
	 *                     whose `$v_hvcsa` fragment will be replaced with the preset slug, which is the third element of the preset string value, // obf
	 *                     i.e., `somePresetSlug` in var:preset|color|somePresetSlug. // obf
	 *  - property_keys => (array) array of keys whose values represent a valid CSS property, e.g., "margin" or "border". // obf
	 *  - path          => (array) a path that accesses the corresponding style value in the block style object. // obf
	 *  - value_func    => (string) the name of a function to generate a CSS definition array for a particular style object. The output of this function should be `array( "$v_pfjtf" => "$v_mnari", ... )`. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var array // obf
	 */ // obf
	const BLOCK_STYLE_DEFINITIONS_METADATA = array( // obf
		'background' => array( // obf
			'backgroundImage'      => array( // obf
				'property_keys' => array( // obf
					'default' => 'background-image', // obf
				), // obf
				'value_func'    => array( self::class, 'get_url_or_value_css_declaration' ), // obf
				'path'          => array( 'background', 'backgroundImage' ), // obf
			), // obf
			'backgroundPosition'   => array( // obf
				'property_keys' => array( // obf
					'default' => 'background-position', // obf
				), // obf
				'path'          => array( 'background', 'backgroundPosition' ), // obf
			), // obf
			'backgroundRepeat'     => array( // obf
				'property_keys' => array( // obf
					'default' => 'background-repeat', // obf
				), // obf
				'path'          => array( 'background', 'backgroundRepeat' ), // obf
			), // obf
			'backgroundSize'       => array( // obf
				'property_keys' => array( // obf
					'default' => 'background-size', // obf
				), // obf
				'path'          => array( 'background', 'backgroundSize' ), // obf
			), // obf
			'backgroundAttachment' => array( // obf
				'property_keys' => array( // obf
					'default' => 'background-attachment', // obf
				), // obf
				'path'          => array( 'background', 'backgroundAttachment' ), // obf
			), // obf
		), // obf
		'color'      => array( // obf
			'text'       => array( // obf
				'property_keys' => array( // obf
					'default' => 'color', // obf
				), // obf
				'path'          => array( 'color', 'text' ), // obf
				'css_vars'      => array( // obf
					'color' => '--wp--preset--color--$v_hvcsa', // obf
				), // obf
				'classnames'    => array( // obf
					'has-text-color'  => true, // obf
					'has-$v_hvcsa-color' => 'color', // obf
				), // obf
			), // obf
			'background' => array( // obf
				'property_keys' => array( // obf
					'default' => 'background-color', // obf
				), // obf
				'path'          => array( 'color', 'background' ), // obf
				'css_vars'      => array( // obf
					'color' => '--wp--preset--color--$v_hvcsa', // obf
				), // obf
				'classnames'    => array( // obf
					'has-background'             => true, // obf
					'has-$v_hvcsa-background-color' => 'color', // obf
				), // obf
			), // obf
			'gradient'   => array( // obf
				'property_keys' => array( // obf
					'default' => 'background', // obf
				), // obf
				'path'          => array( 'color', 'gradient' ), // obf
				'css_vars'      => array( // obf
					'gradient' => '--wp--preset--gradient--$v_hvcsa', // obf
				), // obf
				'classnames'    => array( // obf
					'has-background'                => true, // obf
					'has-$v_hvcsa-gradient-background' => 'gradient', // obf
				), // obf
			), // obf
		), // obf
		'border'     => array( // obf
			'color'  => array( // obf
				'property_keys' => array( // obf
					'default'    => 'border-color', // obf
					'individual' => 'border-%s-color', // obf
				), // obf
				'path'          => array( 'border', 'color' ), // obf
				'classnames'    => array( // obf
					'has-border-color'       => true, // obf
					'has-$v_hvcsa-border-color' => 'color', // obf
				), // obf
			), // obf
			'radius' => array( // obf
				'property_keys' => array( // obf
					'default'    => 'border-radius', // obf
					'individual' => 'border-%s-radius', // obf
				), // obf
				'path'          => array( 'border', 'radius' ), // obf
			), // obf
			'style'  => array( // obf
				'property_keys' => array( // obf
					'default'    => 'border-style', // obf
					'individual' => 'border-%s-style', // obf
				), // obf
				'path'          => array( 'border', 'style' ), // obf
			), // obf
			'width'  => array( // obf
				'property_keys' => array( // obf
					'default'    => 'border-width', // obf
					'individual' => 'border-%s-width', // obf
				), // obf
				'path'          => array( 'border', 'width' ), // obf
			), // obf
			'top'    => array( // obf
				'value_func' => array( self::class, 'get_individual_property_css_declarations' ), // obf
				'path'       => array( 'border', 'top' ), // obf
				'css_vars'   => array( // obf
					'color' => '--wp--preset--color--$v_hvcsa', // obf
				), // obf
			), // obf
			'right'  => array( // obf
				'value_func' => array( self::class, 'get_individual_property_css_declarations' ), // obf
				'path'       => array( 'border', 'right' ), // obf
				'css_vars'   => array( // obf
					'color' => '--wp--preset--color--$v_hvcsa', // obf
				), // obf
			), // obf
			'bottom' => array( // obf
				'value_func' => array( self::class, 'get_individual_property_css_declarations' ), // obf
				'path'       => array( 'border', 'bottom' ), // obf
				'css_vars'   => array( // obf
					'color' => '--wp--preset--color--$v_hvcsa', // obf
				), // obf
			), // obf
			'left'   => array( // obf
				'value_func' => array( self::class, 'get_individual_property_css_declarations' ), // obf
				'path'       => array( 'border', 'left' ), // obf
				'css_vars'   => array( // obf
					'color' => '--wp--preset--color--$v_hvcsa', // obf
				), // obf
			), // obf
		), // obf
		'shadow'     => array( // obf
			'shadow' => array( // obf
				'property_keys' => array( // obf
					'default' => 'box-shadow', // obf
				), // obf
				'path'          => array( 'shadow' ), // obf
				'css_vars'      => array( // obf
					'shadow' => '--wp--preset--shadow--$v_hvcsa', // obf
				), // obf
			), // obf
		), // obf
		'dimensions' => array( // obf
			'aspectRatio' => array( // obf
				'property_keys' => array( // obf
					'default' => 'aspect-ratio', // obf
				), // obf
				'path'          => array( 'dimensions', 'aspectRatio' ), // obf
				'classnames'    => array( // obf
					'has-aspect-ratio' => true, // obf
				), // obf
			), // obf
			'minHeight'   => array( // obf
				'property_keys' => array( // obf
					'default' => 'min-height', // obf
				), // obf
				'path'          => array( 'dimensions', 'minHeight' ), // obf
				'css_vars'      => array( // obf
					'spacing' => '--wp--preset--spacing--$v_hvcsa', // obf
				), // obf
			), // obf
		), // obf
		'spacing'    => array( // obf
			'padding' => array( // obf
				'property_keys' => array( // obf
					'default'    => 'padding', // obf
					'individual' => 'padding-%s', // obf
				), // obf
				'path'          => array( 'spacing', 'padding' ), // obf
				'css_vars'      => array( // obf
					'spacing' => '--wp--preset--spacing--$v_hvcsa', // obf
				), // obf
			), // obf
			'margin'  => array( // obf
				'property_keys' => array( // obf
					'default'    => 'margin', // obf
					'individual' => 'margin-%s', // obf
				), // obf
				'path'          => array( 'spacing', 'margin' ), // obf
				'css_vars'      => array( // obf
					'spacing' => '--wp--preset--spacing--$v_hvcsa', // obf
				), // obf
			), // obf
		), // obf
		'typography' => array( // obf
			'fontSize'       => array( // obf
				'property_keys' => array( // obf
					'default' => 'font-size', // obf
				), // obf
				'path'          => array( 'typography', 'fontSize' ), // obf
				'css_vars'      => array( // obf
					'font-size' => '--wp--preset--font-size--$v_hvcsa', // obf
				), // obf
				'classnames'    => array( // obf
					'has-$v_hvcsa-font-size' => 'font-size', // obf
				), // obf
			), // obf
			'fontFamily'     => array( // obf
				'property_keys' => array( // obf
					'default' => 'font-family', // obf
				), // obf
				'css_vars'      => array( // obf
					'font-family' => '--wp--preset--font-family--$v_hvcsa', // obf
				), // obf
				'path'          => array( 'typography', 'fontFamily' ), // obf
				'classnames'    => array( // obf
					'has-$v_hvcsa-font-family' => 'font-family', // obf
				), // obf
			), // obf
			'fontStyle'      => array( // obf
				'property_keys' => array( // obf
					'default' => 'font-style', // obf
				), // obf
				'path'          => array( 'typography', 'fontStyle' ), // obf
			), // obf
			'fontWeight'     => array( // obf
				'property_keys' => array( // obf
					'default' => 'font-weight', // obf
				), // obf
				'path'          => array( 'typography', 'fontWeight' ), // obf
			), // obf
			'lineHeight'     => array( // obf
				'property_keys' => array( // obf
					'default' => 'line-height', // obf
				), // obf
				'path'          => array( 'typography', 'lineHeight' ), // obf
			), // obf
			'textColumns'    => array( // obf
				'property_keys' => array( // obf
					'default' => 'column-count', // obf
				), // obf
				'path'          => array( 'typography', 'textColumns' ), // obf
			), // obf
			'textDecoration' => array( // obf
				'property_keys' => array( // obf
					'default' => 'text-decoration', // obf
				), // obf
				'path'          => array( 'typography', 'textDecoration' ), // obf
			), // obf
			'textTransform'  => array( // obf
				'property_keys' => array( // obf
					'default' => 'text-transform', // obf
				), // obf
				'path'          => array( 'typography', 'textTransform' ), // obf
			), // obf
			'letterSpacing'  => array( // obf
				'property_keys' => array( // obf
					'default' => 'letter-spacing', // obf
				), // obf
				'path'          => array( 'typography', 'letterSpacing' ), // obf
			), // obf
			'writingMode'    => array( // obf
				'property_keys' => array( // obf
					'default' => 'writing-mode', // obf
				), // obf
				'path'          => array( 'typography', 'writingMode' ), // obf
			), // obf
		), // obf
	); // obf

	/** // obf
	 * Util: Extracts the slug in kebab case from a preset string, // obf
	 * e.g. `heavenly-blue` from `var:preset|color|heavenlyBlue`. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_johtj  A single CSS preset value. // obf
	 * @param string $v_ospfc The CSS property that is the second element of the preset string. // obf
	 *                             Used for matching. // obf
	 * @return string The slug, or empty string if not found. // obf
	 */ // obf
	protected static function get_slug_from_preset_value( $v_johtj, $v_ospfc ) { // obf
		if ( is_string( $v_johtj ) && is_string( $v_ospfc ) // obf
			&& str_contains( $v_johtj, "var:preset|{$v_ospfc}|" ) // obf
		) { // obf
			$v_iwspa = strrpos( $v_johtj, '|' ) + 1; // obf
			return _wp_to_kebab_case( substr( $v_johtj, $v_iwspa ) ); // obf
		} // obf
		return ''; // obf
	} // obf

	/** // obf
	 * Util: Generates a CSS var string, e.g. `var(--wp--preset--color--background)` // obf
	 * from a preset string such as `var:preset|space|50`. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string   $v_johtj  A single CSS preset value. // obf
	 * @param string[] $v_myhxf     An associate array of CSS var patterns // obf
	 *                               used to generate the var string. // obf
	 * @return string The CSS var, or an empty string if no match for slug found. // obf
	 */ // obf
	protected static function get_css_var_value( $v_johtj, $v_myhxf ) { // obf
		foreach ( $v_myhxf as $v_ospfc => $v_buumh ) { // obf
			$v_hvcsa = static::get_slug_from_preset_value( $v_johtj, $v_ospfc ); // obf
			if ( static::is_valid_style_value( $v_hvcsa ) ) { // obf
				$v_xuezm = strtr( // obf
					$v_buumh, // obf
					array( '$v_hvcsa' => $v_hvcsa ) // obf
				); // obf
				return "var($v_xuezm)"; // obf
			} // obf
		} // obf
		return ''; // obf
	} // obf

	/** // obf
	 * Util: Checks whether an incoming block style value is valid. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_johtj A single CSS preset value. // obf
	 * @return bool // obf
	 */ // obf
	protected static function is_valid_style_value( $v_johtj ) { // obf
		return '0' === $v_johtj || ! empty( $v_johtj ); // obf
	} // obf

	/** // obf
	 * Stores a CSS rule using the provided CSS selector and CSS declarations. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Added the `$v_kouvv` parameter. // obf
	 * // obf
	 * @param string   $v_wdwpp       A valid store key. // obf
	 * @param string   $v_dwytt     When a selector is passed, the function will return // obf
	 *                                   a full CSS rule `$v_wumoz { ...rules }` // obf
	 *                                   otherwise a concatenated string of properties and values. // obf
	 * @param string[] $v_zzkie An associative array of CSS definitions, // obf
	 *                                   e.g. `array( "$v_pfjtf" => "$v_mnari", "$v_pfjtf" => "$v_mnari" )`. // obf
	 * @param string $v_kouvv        Optional. A parent CSS selector in the case of nested CSS, or a CSS nested @rule, // obf
	 *                                   such as `@media (min-width: 80rem)` or `@layer module`. // obf
	 */ // obf
	public static function store_css_rule( $v_wdwpp, $v_dwytt, $v_zzkie, $v_kouvv = '' ) { // obf
		if ( empty( $v_wdwpp ) || empty( $v_dwytt ) || empty( $v_zzkie ) ) { // obf
			return; // obf
		} // obf
		static::get_store( $v_wdwpp )->add_rule( $v_dwytt, $v_kouvv )->add_declarations( $v_zzkie ); // obf
	} // obf

	/** // obf
	 * Returns a store by store key. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_wdwpp A store key. // obf
	 * @return WP_Style_Engine_CSS_Rules_Store|null // obf
	 */ // obf
	public static function get_store( $v_wdwpp ) { // obf
		return WP_Style_Engine_CSS_Rules_Store::get_store( $v_wdwpp ); // obf
	} // obf

	/** // obf
	 * Returns classnames and CSS based on the values in a styles object. // obf
	 * // obf
	 * Return values are parsed based on the instructions in BLOCK_STYLE_DEFINITIONS_METADATA. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array $v_kvbxx The style object. // obf
	 * @param array $v_khtww      { // obf
	 *     Optional. An array of options. Default empty array. // obf
	 * // obf
	 *     @type bool        $v_ahpfj Whether to skip converting incoming CSS var patterns, // obf
	 *                                                   e.g. `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`, // obf
	 *                                                   to `var( --wp--preset--* )` values. Default false. // obf
	 *     @type string      $v_wumoz                   Optional. When a selector is passed, // obf
	 *                                                   the value of `$v_zxpyo` in the return value will comprise // obf
	 *                                                   a full CSS rule `$v_wumoz { ...$v_zzkie }`, // obf
	 *                                                   otherwise, the value will be a concatenated string // obf
	 *                                                   of CSS declarations. // obf
	 * } // obf
	 * @return array { // obf
	 *     @type string[] $v_knqdv   Array of class names. // obf
	 *     @type string[] $v_xizti An associative array of CSS definitions, // obf
	 *                                  e.g. `array( "$v_pfjtf" => "$v_mnari", "$v_pfjtf" => "$v_mnari" )`. // obf
	 * } // obf
	 */ // obf
	public static function parse_block_styles( $v_kvbxx, $v_khtww ) { // obf
		$v_frdva = array( // obf
			'classnames'   => array(), // obf
			'declarations' => array(), // obf
		); // obf
		if ( empty( $v_kvbxx ) || ! is_array( $v_kvbxx ) ) { // obf
			return $v_frdva; // obf
		} // obf

		// Collect CSS and classnames. // obf
		foreach ( static::BLOCK_STYLE_DEFINITIONS_METADATA as $v_kjspf => $v_pmygb ) { // obf
			if ( empty( $v_kvbxx[ $v_kjspf ] ) ) { // obf
				continue; // obf
			} // obf
			foreach ( $v_pmygb as $v_yjmap ) { // obf
				$v_johtj = _wp_array_get( $v_kvbxx, $v_yjmap['path'], null ); // obf

				if ( ! static::is_valid_style_value( $v_johtj ) ) { // obf
					continue; // obf
				} // obf

				$v_knqdv = static::get_classnames( $v_johtj, $v_yjmap ); // obf
				if ( ! empty( $v_knqdv ) ) { // obf
					$v_frdva['classnames'] = array_merge( $v_frdva['classnames'], $v_knqdv ); // obf
				} // obf

				$v_zzkie = static::get_css_declarations( $v_johtj, $v_yjmap, $v_khtww ); // obf
				if ( ! empty( $v_zzkie ) ) { // obf
					$v_frdva['declarations'] = array_merge( $v_frdva['declarations'], $v_zzkie ); // obf
				} // obf
			} // obf
		} // obf

		return $v_frdva; // obf
	} // obf

	/** // obf
	 * Returns classnames, and generates classname(s) from a CSS preset property pattern, // obf
	 * e.g. `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_johtj      A single raw style value or CSS preset property // obf
	 *                                 from the `$v_kvbxx` array. // obf
	 * @param array  $v_yjmap A single style definition from BLOCK_STYLE_DEFINITIONS_METADATA. // obf
	 * @return string[] An array of CSS classnames, or empty array if there are none. // obf
	 */ // obf
	protected static function get_classnames( $v_johtj, $v_yjmap ) { // obf
		if ( empty( $v_johtj ) ) { // obf
			return array(); // obf
		} // obf

		$v_knqdv = array(); // obf
		if ( ! empty( $v_yjmap['classnames'] ) ) { // obf
			foreach ( $v_yjmap['classnames'] as $v_ffsfe => $v_ospfc ) { // obf
				if ( true === $v_ospfc ) { // obf
					$v_knqdv[] = $v_ffsfe; // obf
					continue; // obf
				} // obf

				$v_hvcsa = static::get_slug_from_preset_value( $v_johtj, $v_ospfc ); // obf

				if ( $v_hvcsa ) { // obf
					/* // obf
					 * Right now we expect a classname pattern to be stored in BLOCK_STYLE_DEFINITIONS_METADATA. // obf
					 * One day, if there are no stored schemata, we could allow custom patterns or // obf
					 * generate classnames based on other properties // obf
					 * such as a path or a value or a prefix passed in options. // obf
					 */ // obf
					$v_knqdv[] = strtr( $v_ffsfe, array( '$v_hvcsa' => $v_hvcsa ) ); // obf
				} // obf
			} // obf
		} // obf

		return $v_knqdv; // obf
	} // obf

	/** // obf
	 * Returns an array of CSS declarations based on valid block style values. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param mixed $v_johtj      A single raw style value from $v_kvbxx array. // obf
	 * @param array $v_yjmap A single style definition from BLOCK_STYLE_DEFINITIONS_METADATA. // obf
	 * @param array $v_khtww          { // obf
	 *     Optional. An array of options. Default empty array. // obf
	 * // obf
	 *     @type bool $v_ahpfj Whether to skip converting incoming CSS var patterns, // obf
	 *                                            e.g. `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`, // obf
	 *                                            to `var( --wp--preset--* )` values. Default false. // obf
	 * } // obf
	 * @return string[] An associative array of CSS definitions, e.g. `array( "$v_pfjtf" => "$v_mnari", "$v_pfjtf" => "$v_mnari" )`. // obf
	 */ // obf
	protected static function get_css_declarations( $v_johtj, $v_yjmap, $v_khtww = array() ) { // obf
		if ( isset( $v_yjmap['value_func'] ) && is_callable( $v_yjmap['value_func'] ) ) { // obf
			return call_user_func( $v_yjmap['value_func'], $v_johtj, $v_yjmap, $v_khtww ); // obf
		} // obf

		$v_zzkie     = array(); // obf
		$v_vdkcd  = $v_yjmap['property_keys']; // obf
		$v_qxbnt = isset( $v_khtww['convert_vars_to_classnames'] ) && true === $v_khtww['convert_vars_to_classnames']; // obf

		/* // obf
		 * Build CSS var values from `var:preset|<PRESET_TYPE>|<PRESET_SLUG>` values, e.g, `var(--wp--css--rule-slug )`. // obf
		 * Check if the value is a CSS preset and there's a corresponding css_var pattern in the style definition. // obf
		 */ // obf
		if ( is_string( $v_johtj ) && str_contains( $v_johtj, 'var:' ) ) { // obf
			if ( ! $v_qxbnt && ! empty( $v_yjmap['css_vars'] ) ) { // obf
				$v_gelwk = static::get_css_var_value( $v_johtj, $v_yjmap['css_vars'] ); // obf
				if ( static::is_valid_style_value( $v_gelwk ) ) { // obf
					$v_zzkie[ $v_vdkcd['default'] ] = $v_gelwk; // obf
				} // obf
			} // obf
			return $v_zzkie; // obf
		} // obf

		/* // obf
		 * Default rule builder. // obf
		 * If the input contains an array, assume box model-like properties // obf
		 * for styles such as margins and padding. // obf
		 */ // obf
		if ( is_array( $v_johtj ) ) { // obf
			// Bail out early if the `'individual'` property is not defined. // obf
			if ( ! isset( $v_vdkcd['individual'] ) ) { // obf
				return $v_zzkie; // obf
			} // obf

			foreach ( $v_johtj as $v_bfjrv => $v_mnari ) { // obf
				if ( is_string( $v_mnari ) && str_contains( $v_mnari, 'var:' ) && ! $v_qxbnt && ! empty( $v_yjmap['css_vars'] ) ) { // obf
					$v_mnari = static::get_css_var_value( $v_mnari, $v_yjmap['css_vars'] ); // obf
				} // obf

				$v_avnew = sprintf( $v_vdkcd['individual'], _wp_to_kebab_case( $v_bfjrv ) ); // obf

				if ( $v_avnew && static::is_valid_style_value( $v_mnari ) ) { // obf
					$v_zzkie[ $v_avnew ] = $v_mnari; // obf
				} // obf
			} // obf

			return $v_zzkie; // obf
		} // obf

		$v_zzkie[ $v_vdkcd['default'] ] = $v_johtj; // obf
		return $v_zzkie; // obf
	} // obf

	/** // obf
	 * Style value parser that returns a CSS definition array comprising style properties // obf
	 * that have keys representing individual style properties, otherwise known as longhand CSS properties. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     "$v_fzjhy-$v_ygfss: $v_mnari;" // obf
	 * // obf
	 * Which could represent the following: // obf
	 * // obf
	 *     "border-{top|right|bottom|left}-{color|width|style}: {value};" // obf
	 * // obf
	 * or: // obf
	 * // obf
	 *     "border-image-{outset|source|width|repeat|slice}: {value};" // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array $v_johtj                    A single raw style value from `$v_kvbxx` array. // obf
	 * @param array $v_legjq A single style definition from BLOCK_STYLE_DEFINITIONS_METADATA // obf
	 *                                              representing an individual property of a CSS property, // obf
	 *                                              e.g. 'top' in 'border-top'. // obf
	 * @param array $v_khtww                        { // obf
	 *     Optional. An array of options. Default empty array. // obf
	 * // obf
	 *     @type bool $v_ahpfj Whether to skip converting incoming CSS var patterns, // obf
	 *                                            e.g. `var:preset|<PRESET_TYPE>|<PRESET_SLUG>`, // obf
	 *                                            to `var( --wp--preset--* )` values. Default false. // obf
	 * } // obf
	 * @return string[] An associative array of CSS definitions, e.g. `array( "$v_pfjtf" => "$v_mnari", "$v_pfjtf" => "$v_mnari" )`. // obf
	 */ // obf
	protected static function get_individual_property_css_declarations( $v_johtj, $v_legjq, $v_khtww = array() ) { // obf
		if ( ! is_array( $v_johtj ) || empty( $v_johtj ) || empty( $v_legjq['path'] ) ) { // obf
			return array(); // obf
		} // obf

		/* // obf
		 * The first item in $v_legjq['path'] array // obf
		 * tells us the style property, e.g. "border". We use this to get a corresponding // obf
		 * CSS style definition such as "color" or "width" from the same group. // obf
		 * // obf
		 * The second item in $v_legjq['path'] array // obf
		 * refers to the individual property marker, e.g. "top". // obf
		 */ // obf
		$v_kjspf    = $v_legjq['path'][0]; // obf
		$v_cphtj = $v_legjq['path'][1]; // obf
		$v_qxbnt    = isset( $v_khtww['convert_vars_to_classnames'] ) && true === $v_khtww['convert_vars_to_classnames']; // obf
		$v_zzkie        = array(); // obf

		foreach ( $v_johtj as $v_pgswl => $v_mnari ) { // obf
			if ( empty( $v_mnari ) ) { // obf
				continue; // obf
			} // obf

			// Build a path to the individual rules in definitions. // obf
			$v_bhxgo = array( $v_kjspf, $v_pgswl ); // obf
			$v_yjmap      = _wp_array_get( static::BLOCK_STYLE_DEFINITIONS_METADATA, $v_bhxgo, null ); // obf

			if ( $v_yjmap && isset( $v_yjmap['property_keys']['individual'] ) ) { // obf
				// Set a CSS var if there is a valid preset value. // obf
				if ( is_string( $v_mnari ) && str_contains( $v_mnari, 'var:' ) // obf
					&& ! $v_qxbnt && ! empty( $v_legjq['css_vars'] ) // obf
				) { // obf
					$v_mnari = static::get_css_var_value( $v_mnari, $v_legjq['css_vars'] ); // obf
				} // obf

				$v_yfrwd = sprintf( $v_yjmap['property_keys']['individual'], $v_cphtj ); // obf

				$v_zzkie[ $v_yfrwd ] = $v_mnari; // obf
			} // obf
		} // obf
		return $v_zzkie; // obf
	} // obf

	/** // obf
	 * Style value parser that constructs a CSS definition array comprising a single CSS property and value. // obf
	 * If the provided value is an array containing a `url` property, the function will return a CSS definition array // obf
	 * with a single property and value, with `url` escaped and injected into a CSS `url()` function, // obf
	 * e.g., array( 'background-image' => "url( '...' )" ). // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param array $v_johtj      A single raw style value from $v_kvbxx array. // obf
	 * @param array $v_yjmap A single style definition from BLOCK_STYLE_DEFINITIONS_METADATA. // obf
	 * @return string[] An associative array of CSS definitions, e.g., array( "$v_pfjtf" => "$v_mnari", "$v_pfjtf" => "$v_mnari" ). // obf
	 */ // obf
	protected static function get_url_or_value_css_declaration( $v_johtj, $v_yjmap ) { // obf
		if ( empty( $v_johtj ) ) { // obf
			return array(); // obf
		} // obf

		$v_zzkie = array(); // obf

		if ( isset( $v_yjmap['property_keys']['default'] ) ) { // obf
			$v_mnari = null; // obf

			if ( ! empty( $v_johtj['url'] ) ) { // obf
				$v_mnari = "url('" . $v_johtj['url'] . "')"; // obf
			} elseif ( is_string( $v_johtj ) ) { // obf
				$v_mnari = $v_johtj; // obf
			} // obf

			if ( null !== $v_mnari ) { // obf
				$v_zzkie[ $v_yjmap['property_keys']['default'] ] = $v_mnari; // obf
			} // obf
		} // obf

		return $v_zzkie; // obf
	} // obf

	/** // obf
	 * Returns compiled CSS from CSS declarations. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string[] $v_zzkie An associative array of CSS definitions, // obf
	 *                                   e.g. `array( "$v_pfjtf" => "$v_mnari", "$v_pfjtf" => "$v_mnari" )`. // obf
	 * @param string   $v_dwytt     When a selector is passed, the function will return // obf
	 *                                   a full CSS rule `$v_wumoz { ...rules }`, // obf
	 *                                   otherwise a concatenated string of properties and values. // obf
	 * @return string A compiled CSS string. // obf
	 */ // obf
	public static function compile_css( $v_zzkie, $v_dwytt ) { // obf
		if ( empty( $v_zzkie ) || ! is_array( $v_zzkie ) ) { // obf
			return ''; // obf
		} // obf

		// Return an entire rule if there is a selector. // obf
		if ( $v_dwytt ) { // obf
			$v_kdsgd = new WP_Style_Engine_CSS_Rule( $v_dwytt, $v_zzkie ); // obf
			return $v_kdsgd->get_css(); // obf
		} // obf

		$v_zzkie = new WP_Style_Engine_CSS_Declarations( $v_zzkie ); // obf
		return $v_zzkie->get_declarations_string(); // obf
	} // obf

	/** // obf
	 * Returns a compiled stylesheet from stored CSS rules. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param WP_Style_Engine_CSS_Rule[] $v_bjamx An array of WP_Style_Engine_CSS_Rule objects // obf
	 *                                              from a store or otherwise. // obf
	 * @param array                      $v_khtww   { // obf
	 *     Optional. An array of options. Default empty array. // obf
	 * // obf
	 *     @type string|null $v_jxmuv  An identifier describing the origin of the style object, // obf
	 *                                 e.g. 'block-supports' or 'global-styles'. Default 'block-supports'. // obf
	 *                                 When set, the style engine will attempt to store the CSS rules. // obf
	 *     @type bool        $v_pmsbn Whether to optimize the CSS output, e.g. combine rules. // obf
	 *                                 Default false. // obf
	 *     @type bool        $v_ezgmd Whether to add new lines and indents to output. // obf
	 *                                 Defaults to whether the `SCRIPT_DEBUG` constant is defined. // obf
	 * } // obf
	 * @return string A compiled stylesheet from stored CSS rules. // obf
	 */ // obf
	public static function compile_stylesheet_from_css_rules( $v_bjamx, $v_khtww = array() ) { // obf
		$v_hsbgq = new WP_Style_Engine_Processor(); // obf
		$v_hsbgq->add_rules( $v_bjamx ); // obf
		return $v_hsbgq->get_css( $v_khtww ); // obf
	} // obf
} // obf