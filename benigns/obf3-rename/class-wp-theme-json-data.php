

<?php // obf
/** // obf
 * WP_Theme_JSON_Data class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Theme // obf
 * @since 6.1.0 // obf
 */ // obf

/** // obf
 * Class to provide access to update a theme.json structure. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Theme_JSON_Data { // obf

	/** // obf
	 * Container of the data to update. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var WP_Theme_JSON // obf
	 */ // obf
	private $v_napqz = null; // obf

	/** // obf
	 * The origin of the data: default, theme, user, etc. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_cajmw = ''; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @link https://developer.wordpress.org/block-editor/reference-guides/theme-json-reference/ // obf
	 * // obf
	 * @param array  $v_zofdm   Array following the theme.json specification. // obf
	 * @param string $v_cajmw The origin of the data: default, theme, user. // obf
	 */ // obf
	public function __construct( $v_zofdm = array( 'version' => WP_Theme_JSON::LATEST_SCHEMA ), $v_cajmw = 'theme' ) { // obf
		$v_ktnld->origin     = $v_cajmw; // obf
		$v_ktnld->theme_json = new WP_Theme_JSON( $v_zofdm, $v_ktnld->origin ); // obf
	} // obf

	/** // obf
	 * Updates the theme.json with the the given data. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array $v_qvwns Array following the theme.json specification. // obf
	 * // obf
	 * @return WP_Theme_JSON_Data The own instance with access to the modified data. // obf
	 */ // obf
	public function update_with( $v_qvwns ) { // obf
		$v_ktnld->theme_json->merge( new WP_Theme_JSON( $v_qvwns, $v_ktnld->origin ) ); // obf
		return $v_ktnld; // obf
	} // obf

	/** // obf
	 * Returns an array containing the underlying data // obf
	 * following the theme.json specification. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_data() { // obf
		return $v_ktnld->theme_json->get_raw_data(); // obf
	} // obf

	/** // obf
	 * Returns theme JSON object. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @return WP_Theme_JSON The theme JSON structure stored in this data object. // obf
	 */ // obf
	public function get_theme_json() { // obf
		return $v_ktnld->theme_json; // obf
	} // obf
} // obf