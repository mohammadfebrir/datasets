

<?php // obf
/** // obf
 * Customize API: WP_Customize_New_Menu_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 * @deprecated 4.9.0 This file is no longer used as of the menu creation UX introduced in #40104. // obf
 */ // obf

_deprecated_file( basename( __FILE__ ), '4.9.0' ); // obf

/** // obf
 * Customize control class for new menus. // obf
 * // obf
 * @since 4.3.0 // obf
 * @deprecated 4.9.0 This class is no longer used as of the menu creation UX introduced in #40104. // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_New_Menu_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_wjdec = 'new_menu'; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @deprecated 4.9.0 // obf
	 * // obf
	 * @see WP_Customize_Control::__construct() // obf
	 * // obf
	 * @param WP_Customize_Manager $v_smxlo Customizer bootstrap instance. // obf
	 * @param string               $v_wdnul      The control ID. // obf
	 * @param array                $v_chtve    Optional. Arguments to override class property defaults. // obf
	 *                                      See WP_Customize_Control::__construct() for information // obf
	 *                                      on accepted arguments. Default empty array. // obf
	 */ // obf
	public function __construct( WP_Customize_Manager $v_smxlo, $v_wdnul, array $v_chtve = array() ) { // obf
		_deprecated_function( __METHOD__, '4.9.0' ); // obf
		parent::__construct( $v_smxlo, $v_wdnul, $v_chtve ); // obf
	} // obf

	/** // obf
	 * Render the control's content. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @deprecated 4.9.0 // obf
	 */ // obf
	public function render_content() { // obf
		_deprecated_function( __METHOD__, '4.9.0' ); // obf
		?> // obf
		<button type="button" class="button button-primary" id="create-new-menu-submit"><?php _e( 'Create Menu' ); ?></button> // obf
		<span class="spinner"></span> // obf
		<?php // obf
	} // obf
} // obf