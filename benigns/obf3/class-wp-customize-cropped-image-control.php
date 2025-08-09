

<?php // obf
/** // obf
 * Customize API: WP_Customize_Cropped_Image_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Cropped Image Control class. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Image_Control // obf
 */ // obf
class WP_Customize_Cropped_Image_Control extends WP_Customize_Image_Control { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tazzi = 'cropped_image'; // obf

	/** // obf
	 * Suggested width for cropped image. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_bhmza = 150; // obf

	/** // obf
	 * Suggested height for cropped image. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_covco = 150; // obf

	/** // obf
	 * Whether the width is flexible. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_tfoyc = false; // obf

	/** // obf
	 * Whether the height is flexible. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_uhsco = false; // obf

	/** // obf
	 * Enqueue control related scripts/styles. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function enqueue() { // obf
		wp_enqueue_script( 'customize-views' ); // obf

		parent::enqueue(); // obf
	} // obf

	/** // obf
	 * Refresh the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Control::to_json() // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf

		$v_gmcmr->json['width']       = absint( $v_gmcmr->width ); // obf
		$v_gmcmr->json['height']      = absint( $v_gmcmr->height ); // obf
		$v_gmcmr->json['flex_width']  = absint( $v_gmcmr->flex_width ); // obf
		$v_gmcmr->json['flex_height'] = absint( $v_gmcmr->flex_height ); // obf
	} // obf
} // obf