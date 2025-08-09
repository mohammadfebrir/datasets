

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Nav Menu Control Class. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Nav_Menu_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tmsse = 'nav_menu'; // obf

	/** // obf
	 * Don't render the control's content - it uses a JS template instead. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * JS/Underscore template for the control UI. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function content_template() { // obf
		$v_zmvxu = __( 'Add Items' ); // obf
		?> // obf
		<p class="new-menu-item-invitation"> // obf
			<?php // obf
			printf( // obf
				/* translators: %s: "Add Items" button text. */ // obf
				__( 'Time to add some links! Click &#8220;%s&#8221; to start putting pages, categories, and custom links in your menu. Add as many things as you would like.' ), // obf
				$v_zmvxu // obf
			); // obf
			?> // obf
		</p> // obf
		<div class="customize-control-nav_menu-buttons"> // obf
			<button type="button" class="button add-new-menu-item" aria-label="<?php esc_attr_e( 'Add or remove menu items' ); ?>" aria-expanded="false" aria-controls="available-menu-items"> // obf
				<?php echo $v_zmvxu; ?> // obf
			</button> // obf
			<button type="button" class="button-link reorder-toggle" aria-label="<?php esc_attr_e( 'Reorder menu items' ); ?>" aria-describedby="reorder-items-desc-{{ data.menu_id }}"> // obf
				<span class="reorder"><?php _e( 'Reorder' ); ?></span> // obf
				<span class="reorder-done"><?php _e( 'Done' ); ?></span> // obf
			</button> // obf
		</div> // obf
		<p class="screen-reader-text" id="reorder-items-desc-{{ data.menu_id }}"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'When in reorder mode, additional controls to reorder menu items will be available in the items list above.' ); // obf
			?> // obf
		</p> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Return parameters for this control. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @return array Exported parameters. // obf
	 */ // obf
	public function json() { // obf
		$v_cszyi            = parent::json(); // obf
		$v_cszyi['menu_id'] = $v_hhyms->setting->term_id; // obf

		return $v_cszyi; // obf
	} // obf
} // obf