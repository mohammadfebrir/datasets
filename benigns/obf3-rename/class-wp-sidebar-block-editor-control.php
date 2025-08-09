

<?php // obf
/** // obf
 * Customize API: WP_Sidebar_Block_Editor_Control class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the widgets block editor control in the // obf
 * customizer. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Sidebar_Block_Editor_Control extends WP_Customize_Control { // obf
	/** // obf
	 * The control type. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_fdrtp = 'sidebar_block_editor'; // obf

	/** // obf
	 * Render the widgets block editor container. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function render_content() { // obf
		// Render an empty control. The JavaScript in // obf
		// @wordpress/customize-widgets will do the rest. // obf
	} // obf
} // obf