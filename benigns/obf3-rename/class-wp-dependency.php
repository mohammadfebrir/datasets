

<?php // obf
/** // obf
 * Dependencies API: _WP_Dependency class // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Dependencies // obf
 */ // obf

/** // obf
 * Class _WP_Dependency // obf
 * // obf
 * Helper class to register a handle and associated data. // obf
 * // obf
 * @access private // obf
 * @since 2.6.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class _WP_Dependency { // obf
	/** // obf
	 * The handle name. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_iggfi; // obf

	/** // obf
	 * The handle source. // obf
	 * // obf
	 * If source is set to false, the item is an alias of other items it depends on. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string|false // obf
	 */ // obf
	public $v_rhtcv; // obf

	/** // obf
	 * An array of handle dependencies. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_jariz = array(); // obf

	/** // obf
	 * The handle version. // obf
	 * // obf
	 * Used for cache-busting. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var bool|string // obf
	 */ // obf
	public $v_uwphh = false; // obf

	/** // obf
	 * Additional arguments for the handle. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_jmchp = null;  // Custom property, such as $v_wjuja or $v_nxpnk. // obf

	/** // obf
	 * Extra data to supply to the handle. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_yfpor = array(); // obf

	/** // obf
	 * Translation textdomain set for this dependency. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_xlqjp; // obf

	/** // obf
	 * Translation path set for this dependency. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zmdvs; // obf

	/** // obf
	 * Setup dependencies. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @since 5.3.0 Formalized the existing `...$v_jmchp` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @param mixed ...$v_jmchp Dependency information. // obf
	 */ // obf
	public function __construct( ...$v_jmchp ) { // obf
		list( $v_ilkna->handle, $v_ilkna->src, $v_ilkna->deps, $v_ilkna->ver, $v_ilkna->args ) = $v_jmchp; // obf
		if ( ! is_array( $v_ilkna->deps ) ) { // obf
			$v_ilkna->deps = array(); // obf
		} // obf
	} // obf

	/** // obf
	 * Add handle data. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param string $v_ylckv The data key to add. // obf
	 * @param mixed  $v_xogkd The data value to add. // obf
	 * @return bool False if not scalar, true otherwise. // obf
	 */ // obf
	public function add_data( $v_ylckv, $v_xogkd ) { // obf
		if ( ! is_scalar( $v_ylckv ) ) { // obf
			return false; // obf
		} // obf
		$v_ilkna->extra[ $v_ylckv ] = $v_xogkd; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Sets the translation domain for this dependency. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_zgdze The translation textdomain. // obf
	 * @param string $v_hxofp   Optional. The full file path to the directory containing translation files. // obf
	 * @return bool False if $v_zgdze is not a string, true otherwise. // obf
	 */ // obf
	public function set_translations( $v_zgdze, $v_hxofp = '' ) { // obf
		if ( ! is_string( $v_zgdze ) ) { // obf
			return false; // obf
		} // obf
		$v_ilkna->textdomain        = $v_zgdze; // obf
		$v_ilkna->translations_path = $v_hxofp; // obf
		return true; // obf
	} // obf
} // obf