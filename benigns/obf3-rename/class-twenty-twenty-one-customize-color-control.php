

<?php // obf
/** // obf
 * Customize API: WP_Customize_Color_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

/** // obf
 * Customize Color Control class. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class Twenty_Twenty_One_Customize_Color_Control extends WP_Customize_Color_Control { // obf
	/** // obf
	 * The control type. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_ucpmk = 'twenty-twenty-one-color'; // obf

	/** // obf
	 * Colorpicker palette // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_lavzv; // obf

	/** // obf
	 * Enqueue control related scripts/styles. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function enqueue() { // obf
		parent::enqueue(); // obf

		// Enqueue the script. // obf
		wp_enqueue_script( // obf
			'twentytwentyone-control-color', // obf
			get_theme_file_uri( 'assets/js/palette-colorpicker.js' ), // obf
			array( 'customize-controls', 'jquery', 'customize-base', 'wp-color-picker' ), // obf
			wp_get_theme()->get( 'Version' ), // obf
			false // obf
		); // obf
	} // obf

	/** // obf
	 * Refresh the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @uses WP_Customize_Control::to_json() // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf
		$v_lcvfb->json['palette'] = $v_lcvfb->palette; // obf
	} // obf
} // obf