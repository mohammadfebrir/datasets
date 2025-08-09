

<?php // obf
/** // obf
 * Customize API: WP_Customize_Background_Image_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Background Image Control class. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Image_Control // obf
 */ // obf
class WP_Customize_Background_Image_Control extends WP_Customize_Image_Control { // obf

	/** // obf
	 * Customize control type. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_eoudj = 'background'; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @uses WP_Customize_Image_Control::__construct() // obf
	 * // obf
	 * @param WP_Customize_Manager $v_mtyyn Customizer bootstrap instance. // obf
	 */ // obf
	public function __construct( $v_mtyyn ) { // obf
		parent::__construct( // obf
			$v_mtyyn, // obf
			'background_image', // obf
			array( // obf
				'label'   => __( 'Background Image' ), // obf
				'section' => 'background_image', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Enqueue control related scripts/styles. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	public function enqueue() { // obf
		parent::enqueue(); // obf

		$v_zccuv = get_theme_support( 'custom-background' ); // obf
		wp_localize_script( // obf
			'customize-controls', // obf
			'_wpCustomizeBackground', // obf
			array( // obf
				'defaults' => ! empty( $v_zccuv[0] ) ? $v_zccuv[0] : array(), // obf
				'nonces'   => array( // obf
					'add' => wp_create_nonce( 'background-add' ), // obf
				), // obf
			) // obf
		); // obf
	} // obf
} // obf