

<?php // obf
/** // obf
 * Customize API: WP_Customize_New_Menu_Section class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 * @deprecated 4.9.0 This file is no longer used as of the menu creation UX introduced in #40104. // obf
 */ // obf

_deprecated_file( basename( __FILE__ ), '4.9.0' ); // obf

/** // obf
 * Customize Menu Section Class // obf
 * // obf
 * @since 4.3.0 // obf
 * @deprecated 4.9.0 This class is no longer used as of the menu creation UX introduced in #40104. // obf
 * // obf
 * @see WP_Customize_Section // obf
 */ // obf
class WP_Customize_New_Menu_Section extends WP_Customize_Section { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_vayzx = 'new_menu'; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Any supplied $v_mxdyy override class property defaults. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @deprecated 4.9.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_asyov Customizer bootstrap instance. // obf
	 * @param string               $v_euoys      A specific ID of the section. // obf
	 * @param array                $v_mxdyy    Section arguments. // obf
	 */ // obf
	public function __construct( WP_Customize_Manager $v_asyov, $v_euoys, array $v_mxdyy = array() ) { // obf
		_deprecated_function( __METHOD__, '4.9.0' ); // obf
		parent::__construct( $v_asyov, $v_euoys, $v_mxdyy ); // obf
	} // obf

	/** // obf
	 * Render the section, and the controls that have been added to it. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @deprecated 4.9.0 // obf
	 */ // obf
	protected function render() { // obf
		_deprecated_function( __METHOD__, '4.9.0' ); // obf
		?> // obf
		<li id="accordion-section-<?php echo esc_attr( $v_ibged->id ); ?>" class="accordion-section-new-menu"> // obf
			<button type="button" class="button add-new-menu-item add-menu-toggle" aria-expanded="false"> // obf
				<?php echo esc_html( $v_ibged->title ); ?> // obf
			</button> // obf
			<ul class="new-menu-section-content"></ul> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf