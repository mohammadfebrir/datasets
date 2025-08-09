

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Name_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize control to represent the name field for a given menu. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Nav_Menu_Name_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Type of control, used by JS. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_iqofk = 'nav_menu_name'; // obf

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
		<label> // obf
			<# if ( data.label ) { #> // obf
				<span class="customize-control-title">{{ data.label }}</span> // obf
			<# } #> // obf
			<input type="text" class="menu-name-field live-update-section-title" // obf
				<# if ( data.description ) { #> // obf
					aria-describedby="{{ data.section }}-description" // obf
				<# } #> // obf
				/> // obf
		</label> // obf
		<# if ( data.description ) { #> // obf
			<p id="{{ data.section }}-description">{{ data.description }}</p> // obf
		<# } #> // obf
		<?php // obf
	} // obf
} // obf