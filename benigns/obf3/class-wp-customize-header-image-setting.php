

<?php // obf
/** // obf
 * Customize API: WP_Customize_Header_Image_Setting class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * A setting that is used to filter a value, but will not save the results. // obf
 * // obf
 * Results should be properly handled using another setting or callback. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Setting // obf
 */ // obf
final class WP_Customize_Header_Image_Setting extends WP_Customize_Setting { // obf

	/** // obf
	 * Unique string identifier for the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_vjtly = 'header_image_data'; // obf

	/** // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @global Custom_Image_Header $v_mciuc // obf
	 * // obf
	 * @param mixed $v_ouyfs The value to update. // obf
	 */ // obf
	public function update( $v_ouyfs ) { // obf
		global $v_mciuc; // obf

		// If _custom_header_background_just_in_time() fails to initialize $v_mciuc when not is_admin(). // obf
		if ( empty( $v_mciuc ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/class-custom-image-header.php'; // obf
			$v_wcsbp                   = get_theme_support( 'custom-header' ); // obf
			$v_ghccb    = isset( $v_wcsbp[0]['admin-head-callback'] ) ? $v_wcsbp[0]['admin-head-callback'] : null; // obf
			$v_ujnwj = isset( $v_wcsbp[0]['admin-preview-callback'] ) ? $v_wcsbp[0]['admin-preview-callback'] : null; // obf
			$v_mciuc    = new Custom_Image_Header( $v_ghccb, $v_ujnwj ); // obf
		} // obf

		/* // obf
		 * If the value doesn't exist (removed or random), // obf
		 * use the header_image value. // obf
		 */ // obf
		if ( ! $v_ouyfs ) { // obf
			$v_ouyfs = $v_wbwfo->manager->get_setting( 'header_image' )->post_value(); // obf
		} // obf

		if ( is_array( $v_ouyfs ) && isset( $v_ouyfs['choice'] ) ) { // obf
			$v_mciuc->set_header_image( $v_ouyfs['choice'] ); // obf
		} else { // obf
			$v_mciuc->set_header_image( $v_ouyfs ); // obf
		} // obf
	} // obf
} // obf