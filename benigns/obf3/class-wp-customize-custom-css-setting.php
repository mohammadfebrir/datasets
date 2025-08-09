

<?php // obf
/** // obf
 * Customize API: WP_Customize_Custom_CSS_Setting class // obf
 * // obf
 * This handles validation, sanitization and saving of the value. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Custom Setting to handle WP Custom CSS. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_Customize_Setting // obf
 */ // obf
final class WP_Customize_Custom_CSS_Setting extends WP_Customize_Setting { // obf

	/** // obf
	 * The setting type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_bqqau = 'custom_css'; // obf

	/** // obf
	 * Setting Transport // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_smbxz = 'postMessage'; // obf

	/** // obf
	 * Capability required to edit this setting. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_vzdyh = 'edit_css'; // obf

	/** // obf
	 * Stylesheet // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gzhpw = ''; // obf

	/** // obf
	 * WP_Customize_Custom_CSS_Setting constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @throws Exception If the setting ID does not match the pattern `custom_css[$v_gzhpw]`. // obf
	 * // obf
	 * @param WP_Customize_Manager $v_rglhr Customizer bootstrap instance. // obf
	 * @param string               $v_otvhq      A specific ID of the setting. // obf
	 *                                      Can be a theme mod or option name. // obf
	 * @param array                $v_artvv    Setting arguments. // obf
	 */ // obf
	public function __construct( $v_rglhr, $v_otvhq, $v_artvv = array() ) { // obf
		parent::__construct( $v_rglhr, $v_otvhq, $v_artvv ); // obf
		if ( 'custom_css' !== $v_zwcom->id_data['base'] ) { // obf
			throw new Exception( 'Expected custom_css id_base.' ); // obf
		} // obf
		if ( 1 !== count( $v_zwcom->id_data['keys'] ) || empty( $v_zwcom->id_data['keys'][0] ) ) { // obf
			throw new Exception( 'Expected single stylesheet key.' ); // obf
		} // obf
		$v_zwcom->stylesheet = $v_zwcom->id_data['keys'][0]; // obf
	} // obf

	/** // obf
	 * Add filter to preview post value. // obf
	 * // obf
	 * @since 4.7.9 // obf
	 * // obf
	 * @return bool False when preview short-circuits due no change needing to be previewed. // obf
	 */ // obf
	public function preview() { // obf
		if ( $v_zwcom->is_previewed ) { // obf
			return false; // obf
		} // obf
		$v_zwcom->is_previewed = true; // obf
		add_filter( 'wp_get_custom_css', array( $v_zwcom, 'filter_previewed_wp_get_custom_css' ), 9, 2 ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Filters `wp_get_custom_css` for applying the customized value. // obf
	 * // obf
	 * This is used in the preview when `wp_get_custom_css()` is called for rendering the styles. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see wp_get_custom_css() // obf
	 * // obf
	 * @param string $v_slhak        Original CSS. // obf
	 * @param string $v_gzhpw Current stylesheet. // obf
	 * @return string CSS. // obf
	 */ // obf
	public function filter_previewed_wp_get_custom_css( $v_slhak, $v_gzhpw ) { // obf
		if ( $v_gzhpw === $v_zwcom->stylesheet ) { // obf
			$v_odjhu = $v_zwcom->post_value( null ); // obf
			if ( ! is_null( $v_odjhu ) ) { // obf
				$v_slhak = $v_odjhu; // obf
			} // obf
		} // obf
		return $v_slhak; // obf
	} // obf

	/** // obf
	 * Fetch the value of the setting. Will return the previewed value when `preview()` is called. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see WP_Customize_Setting::value() // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function value() { // obf
		if ( $v_zwcom->is_previewed ) { // obf
			$v_jmaoe = $v_zwcom->post_value( null ); // obf
			if ( null !== $v_jmaoe ) { // obf
				return $v_jmaoe; // obf
			} // obf
		} // obf
		$v_xozer = $v_zwcom->id_data['base']; // obf
		$v_kkhep   = ''; // obf
		$v_iahsz    = wp_get_custom_css_post( $v_zwcom->stylesheet ); // obf
		if ( $v_iahsz ) { // obf
			$v_kkhep = $v_iahsz->post_content; // obf
		} // obf
		if ( empty( $v_kkhep ) ) { // obf
			$v_kkhep = $v_zwcom->default; // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-customize-setting.php */ // obf
		$v_kkhep = apply_filters( "customize_value_{$v_xozer}", $v_kkhep, $v_zwcom ); // obf

		return $v_kkhep; // obf
	} // obf

	/** // obf
	 * Validate a received value for being valid CSS. // obf
	 * // obf
	 * Checks for imbalanced braces, brackets, and comments. // obf
	 * Notifications are rendered when the customizer state is saved. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 4.9.0 Checking for balanced characters has been moved client-side via linting in code editor. // obf
	 * @since 5.9.0 Renamed `$v_slhak` to `$v_kkhep` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string $v_kkhep CSS to validate. // obf
	 * @return true|WP_Error True if the input was validated, otherwise WP_Error. // obf
	 */ // obf
	public function validate( $v_kkhep ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_slhak = $v_kkhep; // obf

		$v_hxkta = new WP_Error(); // obf

		if ( preg_match( '#</?\w+#', $v_slhak ) ) { // obf
			$v_hxkta->add( 'illegal_markup', __( 'Markup is not allowed in CSS.' ) ); // obf
		} // obf

		if ( ! $v_hxkta->has_errors() ) { // obf
			$v_hxkta = parent::validate( $v_slhak ); // obf
		} // obf
		return $v_hxkta; // obf
	} // obf

	/** // obf
	 * Store the CSS setting value in the custom_css custom post type for the stylesheet. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_slhak` to `$v_kkhep` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string $v_kkhep CSS to update. // obf
	 * @return int|false The post ID or false if the value could not be saved. // obf
	 */ // obf
	public function update( $v_kkhep ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_slhak = $v_kkhep; // obf

		if ( empty( $v_slhak ) ) { // obf
			$v_slhak = ''; // obf
		} // obf

		$v_toicu = wp_update_custom_css_post( // obf
			$v_slhak, // obf
			array( // obf
				'stylesheet' => $v_zwcom->stylesheet, // obf
			) // obf
		); // obf

		if ( is_wp_error( $v_toicu ) ) { // obf
			return false; // obf
		} // obf

		$v_lxjyc = $v_toicu->ID; // obf

		// Cache post ID in theme mod for performance to avoid additional DB query. // obf
		if ( $v_zwcom->manager->get_stylesheet() === $v_zwcom->stylesheet ) { // obf
			set_theme_mod( 'custom_css_post_id', $v_lxjyc ); // obf
		} // obf

		return $v_lxjyc; // obf
	} // obf
} // obf