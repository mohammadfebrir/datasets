

<?php // obf
/** // obf
 * Customize API: WP_Customize_Background_Image_Setting class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customizer Background Image Setting class. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Setting // obf
 */ // obf
final class WP_Customize_Background_Image_Setting extends WP_Customize_Setting { // obf

	/** // obf
	 * Unique string identifier for the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zfpts = 'background_image_thumb'; // obf

	/** // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_oidbb The value to update. Not used. // obf
	 */ // obf
	public function update( $v_oidbb ) { // obf
		remove_theme_mod( 'background_image_thumb' ); // obf
	} // obf
} // obf