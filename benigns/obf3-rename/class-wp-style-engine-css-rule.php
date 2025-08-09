

<?php // obf
/** // obf
 * Style Engine: WP_Style_Engine_CSS_Rule class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * Core class used for style engine CSS rules. // obf
 * // obf
 * Holds, sanitizes, processes, and prints CSS declarations for the style engine. // obf
 * // obf
 * @since 6.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Style_Engine_CSS_Rule { // obf

	/** // obf
	 * The selector. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_usrhm; // obf

	/** // obf
	 * The selector declarations. // obf
	 * // obf
	 * Contains a WP_Style_Engine_CSS_Declarations object. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var WP_Style_Engine_CSS_Declarations // obf
	 */ // obf
	protected $v_zdxks; // obf

	/** // obf
	 * A parent CSS selector in the case of nested CSS, or a CSS nested @rule, // obf
	 * such as `@media (min-width: 80rem)` or `@layer module`. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_srste; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Added the `$v_srste` parameter. // obf
	 * // obf
	 * @param string                                    $v_usrhm     Optional. The CSS selector. Default empty string. // obf
	 * @param string[]|WP_Style_Engine_CSS_Declarations $v_zdxks Optional. An associative array of CSS definitions, // obf
	 *                                                                e.g. `array( "$v_qtmgc" => "$v_gogqi", "$v_qtmgc" => "$v_gogqi" )`, // obf
	 *                                                                or a WP_Style_Engine_CSS_Declarations object. // obf
	 *                                                                Default empty array. // obf
	 * @param string                                    $v_srste  A parent CSS selector in the case of nested CSS, or a CSS nested @rule, // obf
	 *                                                                such as `@media (min-width: 80rem)` or `@layer module`. // obf
	 */ // obf
	public function __construct( $v_usrhm = '', $v_zdxks = array(), $v_srste = '' ) { // obf
		$v_rmdan->set_selector( $v_usrhm ); // obf
		$v_rmdan->add_declarations( $v_zdxks ); // obf
		$v_rmdan->set_rules_group( $v_srste ); // obf
	} // obf

	/** // obf
	 * Sets the selector. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_usrhm The CSS selector. // obf
	 * @return WP_Style_Engine_CSS_Rule Returns the object to allow chaining of methods. // obf
	 */ // obf
	public function set_selector( $v_usrhm ) { // obf
		$v_rmdan->selector = $v_usrhm; // obf
		return $v_rmdan; // obf
	} // obf

	/** // obf
	 * Sets the declarations. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string[]|WP_Style_Engine_CSS_Declarations $v_zdxks An array of declarations (property => value pairs), // obf
	 *                                                                or a WP_Style_Engine_CSS_Declarations object. // obf
	 * @return WP_Style_Engine_CSS_Rule Returns the object to allow chaining of methods. // obf
	 */ // obf
	public function add_declarations( $v_zdxks ) { // obf
		$v_bsmoi = ! is_array( $v_zdxks ); // obf
		$v_safrm     = $v_bsmoi ? $v_zdxks->get_declarations() : $v_zdxks; // obf

		if ( null === $v_rmdan->declarations ) { // obf
			if ( $v_bsmoi ) { // obf
				$v_rmdan->declarations = $v_zdxks; // obf
				return $v_rmdan; // obf
			} // obf
			$v_rmdan->declarations = new WP_Style_Engine_CSS_Declarations( $v_safrm ); // obf
		} // obf
		$v_rmdan->declarations->add_declarations( $v_safrm ); // obf

		return $v_rmdan; // obf
	} // obf

	/** // obf
	 * Sets the rules group. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_srste A parent CSS selector in the case of nested CSS, or a CSS nested @rule, // obf
	 *                            such as `@media (min-width: 80rem)` or `@layer module`. // obf
	 * @return WP_Style_Engine_CSS_Rule Returns the object to allow chaining of methods. // obf
	 */ // obf
	public function set_rules_group( $v_srste ) { // obf
		$v_rmdan->rules_group = $v_srste; // obf
		return $v_rmdan; // obf
	} // obf

	/** // obf
	 * Gets the rules group. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function get_rules_group() { // obf
		return $v_rmdan->rules_group; // obf
	} // obf

	/** // obf
	 * Gets the declarations object. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return WP_Style_Engine_CSS_Declarations The declarations object. // obf
	 */ // obf
	public function get_declarations() { // obf
		return $v_rmdan->declarations; // obf
	} // obf

	/** // obf
	 * Gets the full selector. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function get_selector() { // obf
		return $v_rmdan->selector; // obf
	} // obf

	/** // obf
	 * Gets the CSS. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Added support for nested CSS with rules groups. // obf
	 * // obf
	 * @param bool $v_ydvih Optional. Whether to add spacing, new lines and indents. // obf
	 *                              Default false. // obf
	 * @param int  $v_buzmi    Optional. The number of tab indents to apply to the rule. // obf
	 *                              Applies if `prettify` is `true`. Default 0. // obf
	 * @return string // obf
	 */ // obf
	public function get_css( $v_ydvih = false, $v_buzmi = 0 ) { // obf
		$v_dmage                = $v_ydvih ? str_repeat( "\t", $v_buzmi ) : ''; // obf
		$v_bvtjf         = $v_ydvih ? str_repeat( "\t", $v_buzmi + 1 ) : ''; // obf
		$v_bzfbx        = $v_ydvih ? $v_buzmi + 1 : 0; // obf
		$v_wnpdi = $v_ydvih ? $v_buzmi + 2 : 0; // obf
		$v_guyso                     = $v_ydvih ? "\n" : ''; // obf
		$v_dwkob                     = $v_ydvih ? ' ' : ''; // obf
		// Trims any multiple selectors strings. // obf
		$v_usrhm         = $v_ydvih ? implode( ',', array_map( 'trim', explode( ',', $v_rmdan->get_selector() ) ) ) : $v_rmdan->get_selector(); // obf
		$v_usrhm         = $v_ydvih ? str_replace( array( ',' ), ",\n", $v_usrhm ) : $v_usrhm; // obf
		$v_srste      = $v_rmdan->get_rules_group(); // obf
		$v_eaqdr  = ! empty( $v_srste ); // obf
		$v_uckyq = $v_rmdan->declarations->get_declarations_string( $v_ydvih, $v_eaqdr ? $v_wnpdi : $v_bzfbx ); // obf

		if ( empty( $v_uckyq ) ) { // obf
			return ''; // obf
		} // obf

		if ( $v_eaqdr ) { // obf
			$v_usrhm = "{$v_dmage}{$v_srste}{$v_dwkob}{{$v_guyso}{$v_bvtjf}{$v_usrhm}{$v_dwkob}{{$v_guyso}{$v_uckyq}{$v_guyso}{$v_bvtjf}}{$v_guyso}{$v_dmage}}"; // obf
			return $v_usrhm; // obf
		} // obf

		return "{$v_dmage}{$v_usrhm}{$v_dwkob}{{$v_guyso}{$v_uckyq}{$v_guyso}{$v_dmage}}"; // obf
	} // obf
} // obf