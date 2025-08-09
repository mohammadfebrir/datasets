

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Auto_Add_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize control to represent the auto_add field for a given menu. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Nav_Menu_Auto_Add_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Type of control, used by JS. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_grwen = 'nav_menu_auto_add'; // obf

	/** // obf
	 * No-op since we're using JS template. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	protected function render_content() {} // obf

	/** // obf
	 * Render the Underscore template for this control. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	protected function content_template() { // obf
		?> // obf
		<# var elementId = _.uniqueId( 'customize-nav-menu-auto-add-control-' ); #> // obf
		<span class="customize-control-title"><?php _e( 'Menu Options' ); ?></span> // obf
		<span class="customize-inside-control-row"> // obf
			<input id="{{ elementId }}" type="checkbox" class="auto_add" /> // obf
			<label for="{{ elementId }}"> // obf
				<?php _e( 'Automatically add new top-level pages to this menu' ); ?> // obf
			</label> // obf
		</span> // obf
		<?php // obf
	} // obf
} // obf