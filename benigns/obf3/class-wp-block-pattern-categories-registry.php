

<?php // obf
/** // obf
 * Blocks API: WP_Block_Pattern_Categories_Registry class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class used for interacting with block pattern categories. // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Block_Pattern_Categories_Registry { // obf
	/** // obf
	 * Registered block pattern categories array. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array[] // obf
	 */ // obf
	private $v_asebm = array(); // obf

	/** // obf
	 * Pattern categories registered outside the `init` action. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var array[] // obf
	 */ // obf
	private $v_jhbeq = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Block_Pattern_Categories_Registry|null // obf
	 */ // obf
	private static $v_ejzlw = null; // obf

	/** // obf
	 * Registers a pattern category. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_gzalt       Pattern category name including namespace. // obf
	 * @param array  $v_wzeik { // obf
	 *     List of properties for the block pattern category. // obf
	 * // obf
	 *     @type string $v_kgweq Required. A human-readable label for the pattern category. // obf
	 * } // obf
	 * @return bool True if the pattern was registered with success and false otherwise. // obf
	 */ // obf
	public function register( $v_gzalt, $v_wzeik ) { // obf
		if ( ! isset( $v_gzalt ) || ! is_string( $v_gzalt ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block pattern category name must be a string.' ), // obf
				'5.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_zenkp = array_merge( // obf
			array( 'name' => $v_gzalt ), // obf
			$v_wzeik // obf
		); // obf

		$v_kyalh->registered_categories[ $v_gzalt ] = $v_zenkp; // obf

		// If the category is registered inside an action other than `init`, store it // obf
		// also to a dedicated array. Used to detect deprecated registrations inside // obf
		// `admin_init` or `current_screen`. // obf
		if ( current_action() && 'init' !== current_action() ) { // obf
			$v_kyalh->registered_categories_outside_init[ $v_gzalt ] = $v_zenkp; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Unregisters a pattern category. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_gzalt Pattern category name including namespace. // obf
	 * @return bool True if the pattern was unregistered with success and false otherwise. // obf
	 */ // obf
	public function unregister( $v_gzalt ) { // obf
		if ( ! $v_kyalh->is_registered( $v_gzalt ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Block pattern name. */ // obf
				sprintf( __( 'Block pattern category "%s" not found.' ), $v_gzalt ), // obf
				'5.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		unset( $v_kyalh->registered_categories[ $v_gzalt ] ); // obf
		unset( $v_kyalh->registered_categories_outside_init[ $v_gzalt ] ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves an array containing the properties of a registered pattern category. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_gzalt Pattern category name including namespace. // obf
	 * @return array|null Registered pattern properties, or `null` if the pattern category is not registered. // obf
	 */ // obf
	public function get_registered( $v_gzalt ) { // obf
		if ( ! $v_kyalh->is_registered( $v_gzalt ) ) { // obf
			return null; // obf
		} // obf

		return $v_kyalh->registered_categories[ $v_gzalt ]; // obf
	} // obf

	/** // obf
	 * Retrieves all registered pattern categories. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param bool $v_xpecm Return only categories registered outside the `init` action. // obf
	 * @return array[] Array of arrays containing the registered pattern categories properties. // obf
	 */ // obf
	public function get_all_registered( $v_xpecm = false ) { // obf
		return array_values( // obf
			$v_xpecm // obf
				? $v_kyalh->registered_categories_outside_init // obf
				: $v_kyalh->registered_categories // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a pattern category is registered. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_gzalt Pattern category name including namespace. // obf
	 * @return bool True if the pattern category is registered, false otherwise. // obf
	 */ // obf
	public function is_registered( $v_gzalt ) { // obf
		return isset( $v_kyalh->registered_categories[ $v_gzalt ] ); // obf
	} // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return WP_Block_Pattern_Categories_Registry The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_ejzlw ) { // obf
			self::$v_ejzlw = new self(); // obf
		} // obf

		return self::$v_ejzlw; // obf
	} // obf
} // obf

/** // obf
 * Registers a new pattern category. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param string $v_gzalt       Pattern category name including namespace. // obf
 * @param array  $v_wzeik List of properties for the block pattern. // obf
 *                                    See WP_Block_Pattern_Categories_Registry::register() for // obf
 *                                    accepted arguments. // obf
 * @return bool True if the pattern category was registered with success and false otherwise. // obf
 */ // obf
function register_block_pattern_category( $v_gzalt, $v_wzeik ) { // obf
	return WP_Block_Pattern_Categories_Registry::get_instance()->register( $v_gzalt, $v_wzeik ); // obf
} // obf

/** // obf
 * Unregisters a pattern category. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param string $v_gzalt Pattern category name including namespace. // obf
 * @return bool True if the pattern category was unregistered with success and false otherwise. // obf
 */ // obf
function unregister_block_pattern_category( $v_gzalt ) { // obf
	return WP_Block_Pattern_Categories_Registry::get_instance()->unregister( $v_gzalt ); // obf
} // obf