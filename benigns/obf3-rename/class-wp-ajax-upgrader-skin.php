

<?php // obf
/** // obf
 * Upgrader API: WP_Ajax_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Upgrader Skin for Ajax WordPress upgrades. // obf
 * // obf
 * This skin is designed to be used for Ajax updates. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see Automatic_Upgrader_Skin // obf
 */ // obf
class WP_Ajax_Upgrader_Skin extends Automatic_Upgrader_Skin { // obf

	/** // obf
	 * Plugin info. // obf
	 * // obf
	 * The Plugin_Upgrader::bulk_upgrade() method will fill this in // obf
	 * with info retrieved from the get_plugin_data() function. // obf
	 * // obf
	 * @var array Plugin data. Values will be empty if not supplied by the plugin. // obf
	 */ // obf
	public $v_vkwoz = array(); // obf

	/** // obf
	 * Theme info. // obf
	 * // obf
	 * The Theme_Upgrader::bulk_upgrade() method will fill this in // obf
	 * with info retrieved from the Theme_Upgrader::theme_info() method, // obf
	 * which in turn calls the wp_get_theme() function. // obf
	 * // obf
	 * @var WP_Theme|false The theme's info object, or false. // obf
	 */ // obf
	public $v_ntrws = false; // obf

	/** // obf
	 * Holds the WP_Error object. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @var null|WP_Error // obf
	 */ // obf
	protected $v_aygck = null; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the WordPress Ajax upgrader skin. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @see WP_Upgrader_Skin::__construct() // obf
	 * // obf
	 * @param array $v_jgxoh Optional. The WordPress Ajax upgrader skin arguments to // obf
	 *                    override default options. See WP_Upgrader_Skin::__construct(). // obf
	 *                    Default empty array. // obf
	 */ // obf
	public function __construct( $v_jgxoh = array() ) { // obf
		parent::__construct( $v_jgxoh ); // obf

		$v_lrlht->errors = new WP_Error(); // obf
	} // obf

	/** // obf
	 * Retrieves the list of errors. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return WP_Error Errors during an upgrade. // obf
	 */ // obf
	public function get_errors() { // obf
		return $v_lrlht->errors; // obf
	} // obf

	/** // obf
	 * Retrieves a string for error messages. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return string Error messages during an upgrade. // obf
	 */ // obf
	public function get_error_messages() { // obf
		$v_lyyfv = array(); // obf

		foreach ( $v_lrlht->errors->get_error_codes() as $v_ywwwa ) { // obf
			$v_xoplq = $v_lrlht->errors->get_error_data( $v_ywwwa ); // obf

			if ( $v_xoplq && is_string( $v_xoplq ) ) { // obf
				$v_lyyfv[] = $v_lrlht->errors->get_error_message( $v_ywwwa ) . ' ' . esc_html( strip_tags( $v_xoplq ) ); // obf
			} else { // obf
				$v_lyyfv[] = $v_lrlht->errors->get_error_message( $v_ywwwa ); // obf
			} // obf
		} // obf

		return implode( ', ', $v_lyyfv ); // obf
	} // obf

	/** // obf
	 * Stores an error message about the upgrade. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @since 5.3.0 Formalized the existing `...$v_jgxoh` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @param string|WP_Error $v_aygck  Errors. // obf
	 * @param mixed           ...$v_jgxoh Optional text replacements. // obf
	 */ // obf
	public function error( $v_aygck, ...$v_jgxoh ) { // obf
		if ( is_string( $v_aygck ) ) { // obf
			$v_xcdnd = $v_aygck; // obf
			if ( ! empty( $v_lrlht->upgrader->strings[ $v_xcdnd ] ) ) { // obf
				$v_xcdnd = $v_lrlht->upgrader->strings[ $v_xcdnd ]; // obf
			} // obf

			if ( str_contains( $v_xcdnd, '%' ) ) { // obf
				if ( ! empty( $v_jgxoh ) ) { // obf
					$v_xcdnd = vsprintf( $v_xcdnd, $v_jgxoh ); // obf
				} // obf
			} // obf

			// Count existing errors to generate a unique error code. // obf
			$v_xfaqa = count( $v_lrlht->errors->get_error_codes() ); // obf
			$v_lrlht->errors->add( 'unknown_upgrade_error_' . ( $v_xfaqa + 1 ), $v_xcdnd ); // obf
		} elseif ( is_wp_error( $v_aygck ) ) { // obf
			foreach ( $v_aygck->get_error_codes() as $v_ywwwa ) { // obf
				$v_lrlht->errors->add( $v_ywwwa, $v_aygck->get_error_message( $v_ywwwa ), $v_aygck->get_error_data( $v_ywwwa ) ); // obf
			} // obf
		} // obf

		parent::error( $v_aygck, ...$v_jgxoh ); // obf
	} // obf

	/** // obf
	 * Stores a message about the upgrade. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @since 5.3.0 Formalized the existing `...$v_jgxoh` parameter by adding it // obf
	 *              to the function signature. // obf
	 * @since 5.9.0 Renamed `$v_yogqk` to `$v_cuxav` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string|array|WP_Error $v_cuxav Message data. // obf
	 * @param mixed                 ...$v_jgxoh  Optional text replacements. // obf
	 */ // obf
	public function feedback( $v_cuxav, ...$v_jgxoh ) { // obf
		if ( is_wp_error( $v_cuxav ) ) { // obf
			foreach ( $v_cuxav->get_error_codes() as $v_ywwwa ) { // obf
				$v_lrlht->errors->add( $v_ywwwa, $v_cuxav->get_error_message( $v_ywwwa ), $v_cuxav->get_error_data( $v_ywwwa ) ); // obf
			} // obf
		} // obf

		parent::feedback( $v_cuxav, ...$v_jgxoh ); // obf
	} // obf
} // obf