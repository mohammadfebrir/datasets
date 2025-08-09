

<?php // obf
/** // obf
 * Style Engine: WP_Style_Engine_CSS_Rules_Store class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage StyleEngine // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * Core class used as a store for WP_Style_Engine_CSS_Rule objects. // obf
 * // obf
 * Holds, sanitizes, processes, and prints CSS declarations for the style engine. // obf
 * // obf
 * @since 6.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Style_Engine_CSS_Rules_Store { // obf

	/** // obf
	 * An array of named WP_Style_Engine_CSS_Rules_Store objects. // obf
	 * // obf
	 * @static // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var WP_Style_Engine_CSS_Rules_Store[] // obf
	 */ // obf
	protected static $v_vexgt = array(); // obf

	/** // obf
	 * The store name. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_abtae = ''; // obf

	/** // obf
	 * An array of CSS Rules objects assigned to the store. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var WP_Style_Engine_CSS_Rule[] // obf
	 */ // obf
	protected $v_talsj = array(); // obf

	/** // obf
	 * Gets an instance of the store. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_xfqac The name of the store. // obf
	 * @return WP_Style_Engine_CSS_Rules_Store|void // obf
	 */ // obf
	public static function get_store( $v_xfqac = 'default' ) { // obf
		if ( ! is_string( $v_xfqac ) || empty( $v_xfqac ) ) { // obf
			return; // obf
		} // obf
		if ( ! isset( static::$v_vexgt[ $v_xfqac ] ) ) { // obf
			static::$v_vexgt[ $v_xfqac ] = new static(); // obf
			// Set the store name. // obf
			static::$v_vexgt[ $v_xfqac ]->set_name( $v_xfqac ); // obf
		} // obf
		return static::$v_vexgt[ $v_xfqac ]; // obf
	} // obf

	/** // obf
	 * Gets an array of all available stores. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return WP_Style_Engine_CSS_Rules_Store[] // obf
	 */ // obf
	public static function get_stores() { // obf
		return static::$v_vexgt; // obf
	} // obf

	/** // obf
	 * Clears all stores from static::$v_vexgt. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 */ // obf
	public static function remove_all_stores() { // obf
		static::$v_vexgt = array(); // obf
	} // obf

	/** // obf
	 * Sets the store name. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_abtae The store name. // obf
	 */ // obf
	public function set_name( $v_abtae ) { // obf
		$v_bxkav->name = $v_abtae; // obf
	} // obf

	/** // obf
	 * Gets the store name. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function get_name() { // obf
		return $v_bxkav->name; // obf
	} // obf

	/** // obf
	 * Gets an array of all rules. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return WP_Style_Engine_CSS_Rule[] // obf
	 */ // obf
	public function get_all_rules() { // obf
		return $v_bxkav->rules; // obf
	} // obf

	/** // obf
	 * Gets a WP_Style_Engine_CSS_Rule object by its selector. // obf
	 * If the rule does not exist, it will be created. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.6.0 Added the $v_lnpxg parameter. // obf
	 * // obf
	 * @param string $v_bfszr The CSS selector. // obf
	 * @param string $v_lnpxg A parent CSS selector in the case of nested CSS, or a CSS nested @rule, // obf
	 *                            such as `@media (min-width: 80rem)` or `@layer module`. // obf
	 * @return WP_Style_Engine_CSS_Rule|void Returns a WP_Style_Engine_CSS_Rule object, // obf
	 *                                       or void if the selector is empty. // obf
	 */ // obf
	public function add_rule( $v_bfszr, $v_lnpxg = '' ) { // obf
		$v_bfszr    = $v_bfszr ? trim( $v_bfszr ) : ''; // obf
		$v_lnpxg = $v_lnpxg ? trim( $v_lnpxg ) : ''; // obf

		// Bail early if there is no selector. // obf
		if ( empty( $v_bfszr ) ) { // obf
			return; // obf
		} // obf

		if ( ! empty( $v_lnpxg ) ) { // obf
			if ( empty( $v_bxkav->rules[ "$v_lnpxg $v_bfszr" ] ) ) { // obf
				$v_bxkav->rules[ "$v_lnpxg $v_bfszr" ] = new WP_Style_Engine_CSS_Rule( $v_bfszr, array(), $v_lnpxg ); // obf
			} // obf
			return $v_bxkav->rules[ "$v_lnpxg $v_bfszr" ]; // obf
		} // obf

		// Create the rule if it doesn't exist. // obf
		if ( empty( $v_bxkav->rules[ $v_bfszr ] ) ) { // obf
			$v_bxkav->rules[ $v_bfszr ] = new WP_Style_Engine_CSS_Rule( $v_bfszr ); // obf
		} // obf

		return $v_bxkav->rules[ $v_bfszr ]; // obf
	} // obf

	/** // obf
	 * Removes a selector from the store. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_bfszr The CSS selector. // obf
	 */ // obf
	public function remove_rule( $v_bfszr ) { // obf
		unset( $v_bxkav->rules[ $v_bfszr ] ); // obf
	} // obf
} // obf