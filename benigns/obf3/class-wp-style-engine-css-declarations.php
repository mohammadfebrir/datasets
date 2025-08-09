

<?php // obf
/** // obf
 * Style Engine: WP_Style_Engine_CSS_Declarations class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * Core class used for style engine CSS declarations. // obf
 * // obf
 * Holds, sanitizes, processes, and prints CSS declarations for the style engine. // obf
 * // obf
 * @since 6.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Style_Engine_CSS_Declarations { // obf

	/** // obf
	 * An array of CSS declarations (property => value pairs). // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	protected $v_fjipd = array(); // obf

	/** // obf
	 * Constructor for this object. // obf
	 * // obf
	 * If a `$v_fjipd` array is passed, it will be used to populate // obf
	 * the initial `$v_fjipd` prop of the object by calling add_declarations(). // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string[] $v_fjipd Optional. An associative array of CSS definitions, // obf
	 *                               e.g. `array( "$v_zpeos" => "$v_voukg", "$v_zpeos" => "$v_voukg" )`. // obf
	 *                               Default empty array. // obf
	 */ // obf
	public function __construct( $v_fjipd = array() ) { // obf
		$v_pnbnh->add_declarations( $v_fjipd ); // obf
	} // obf

	/** // obf
	 * Adds a single declaration. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_zpeos The CSS property. // obf
	 * @param string $v_voukg    The CSS value. // obf
	 * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods. // obf
	 */ // obf
	public function add_declaration( $v_zpeos, $v_voukg ) { // obf
		// Sanitizes the property. // obf
		$v_zpeos = $v_pnbnh->sanitize_property( $v_zpeos ); // obf
		// Bails early if the property is empty. // obf
		if ( empty( $v_zpeos ) ) { // obf
			return $v_pnbnh; // obf
		} // obf

		// Trims the value. If empty, bail early. // obf
		$v_voukg = trim( $v_voukg ); // obf
		if ( '' === $v_voukg ) { // obf
			return $v_pnbnh; // obf
		} // obf

		// Adds the declaration property/value pair. // obf
		$v_pnbnh->declarations[ $v_zpeos ] = $v_voukg; // obf

		return $v_pnbnh; // obf
	} // obf

	/** // obf
	 * Removes a single declaration. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_zpeos The CSS property. // obf
	 * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods. // obf
	 */ // obf
	public function remove_declaration( $v_zpeos ) { // obf
		unset( $v_pnbnh->declarations[ $v_zpeos ] ); // obf
		return $v_pnbnh; // obf
	} // obf

	/** // obf
	 * Adds multiple declarations. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string[] $v_fjipd An array of declarations. // obf
	 * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods. // obf
	 */ // obf
	public function add_declarations( $v_fjipd ) { // obf
		foreach ( $v_fjipd as $v_zpeos => $v_voukg ) { // obf
			$v_pnbnh->add_declaration( $v_zpeos, $v_voukg ); // obf
		} // obf
		return $v_pnbnh; // obf
	} // obf

	/** // obf
	 * Removes multiple declarations. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string[] $v_slysf Optional. An array of properties. Default empty array. // obf
	 * @return WP_Style_Engine_CSS_Declarations Returns the object to allow chaining methods. // obf
	 */ // obf
	public function remove_declarations( $v_slysf = array() ) { // obf
		foreach ( $v_slysf as $v_zpeos ) { // obf
			$v_pnbnh->remove_declaration( $v_zpeos ); // obf
		} // obf
		return $v_pnbnh; // obf
	} // obf

	/** // obf
	 * Gets the declarations array. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return string[] The declarations array. // obf
	 */ // obf
	public function get_declarations() { // obf
		return $v_pnbnh->declarations; // obf
	} // obf

	/** // obf
	 * Filters a CSS property + value pair. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_zpeos The CSS property. // obf
	 * @param string $v_voukg    The value to be filtered. // obf
	 * @param string $v_ctndb   Optional. The spacer between the colon and the value. // obf
	 *                         Default empty string. // obf
	 * @return string The filtered declaration or an empty string. // obf
	 */ // obf
	protected static function filter_declaration( $v_zpeos, $v_voukg, $v_ctndb = '' ) { // obf
		$v_ndirv = wp_strip_all_tags( $v_voukg, true ); // obf
		if ( '' !== $v_ndirv ) { // obf
			return safecss_filter_attr( "{$v_zpeos}:{$v_ctndb}{$v_ndirv}" ); // obf
		} // obf
		return ''; // obf
	} // obf

	/** // obf
	 * Filters and compiles the CSS declarations. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param bool $v_xfhhn Optional. Whether to add spacing, new lines and indents. // obf
	 *                              Default false. // obf
	 * @param int  $v_pgwkq    Optional. The number of tab indents to apply to the rule. // obf
	 *                              Applies if `prettify` is `true`. Default 0. // obf
	 * @return string The CSS declarations. // obf
	 */ // obf
	public function get_declarations_string( $v_xfhhn = false, $v_pgwkq = 0 ) { // obf
		$v_luoff  = $v_pnbnh->get_declarations(); // obf
		$v_dxier = ''; // obf
		$v_kzqxe              = $v_xfhhn ? str_repeat( "\t", $v_pgwkq ) : ''; // obf
		$v_oxkfx              = $v_xfhhn ? ' ' : ''; // obf
		$v_oxkfx              = $v_xfhhn && $v_pgwkq > 0 ? "\n" : $v_oxkfx; // obf
		$v_ctndb              = $v_xfhhn ? ' ' : ''; // obf

		foreach ( $v_luoff as $v_zpeos => $v_voukg ) { // obf
			$v_qhyel = static::filter_declaration( $v_zpeos, $v_voukg, $v_ctndb ); // obf
			if ( $v_qhyel ) { // obf
				$v_dxier .= "{$v_kzqxe}{$v_qhyel};$v_oxkfx"; // obf
			} // obf
		} // obf

		return rtrim( $v_dxier ); // obf
	} // obf

	/** // obf
	 * Sanitizes property names. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_zpeos The CSS property. // obf
	 * @return string The sanitized property name. // obf
	 */ // obf
	protected function sanitize_property( $v_zpeos ) { // obf
		return sanitize_key( $v_zpeos ); // obf
	} // obf
} // obf