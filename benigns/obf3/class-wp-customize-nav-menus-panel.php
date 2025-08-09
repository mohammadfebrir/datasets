

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menus_Panel class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Nav Menus Panel Class // obf
 * // obf
 * Needed to add screen options. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Panel // obf
 */ // obf
class WP_Customize_Nav_Menus_Panel extends WP_Customize_Panel { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_idjyz = 'nav_menus'; // obf

	/** // obf
	 * Render screen options for Menus. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function render_screen_options() { // obf
		// Adds the screen options. // obf
		require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf
		add_filter( 'manage_nav-menus_columns', 'wp_nav_menu_manage_columns' ); // obf

		// Display screen options. // obf
		$v_uceps = WP_Screen::get( 'nav-menus.php' ); // obf
		$v_uceps->render_screen_options( array( 'wrap' => false ) ); // obf
	} // obf

	/** // obf
	 * Returns the advanced options for the nav menus page. // obf
	 * // obf
	 * Link title attribute added as it's a relatively advanced concept for new users. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @deprecated 4.5.0 Deprecated in favor of wp_nav_menu_manage_columns(). // obf
	 */ // obf
	public function wp_nav_menu_manage_columns() { // obf
		_deprecated_function( __METHOD__, '4.5.0', 'wp_nav_menu_manage_columns' ); // obf
		require_once ABSPATH . 'wp-admin/includes/nav-menu.php'; // obf
		return wp_nav_menu_manage_columns(); // obf
	} // obf

	/** // obf
	 * An Underscore (JS) template for this panel's content (but not its container). // obf
	 * // obf
	 * Class variables for this panel class are available in the `data` JS object; // obf
	 * export custom variables by overriding WP_Customize_Panel::json(). // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Panel::print_template() // obf
	 */ // obf
	protected function content_template() { // obf
		?> // obf
		<li class="panel-meta customize-info accordion-section <# if ( ! data.description ) { #> cannot-expand<# } #>"> // obf
			<button type="button" class="customize-panel-back" tabindex="-1"> // obf
				<span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Back' ); // obf
					?> // obf
				</span> // obf
			</button> // obf
			<div class="accordion-section-title"> // obf
				<span class="preview-notice"> // obf
					<?php // obf
					/* translators: %s: The site/panel title in the Customizer. */ // obf
					printf( __( 'You are customizing %s' ), '<strong class="panel-title">{{ data.title }}</strong>' ); // obf
					?> // obf
				</span> // obf
				<button type="button" class="customize-help-toggle dashicons dashicons-editor-help" aria-expanded="false"> // obf
					<span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Help' ); // obf
						?> // obf
					</span> // obf
				</button> // obf
				<button type="button" class="customize-screen-options-toggle" aria-expanded="false"> // obf
					<span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Menu Options' ); // obf
						?> // obf
					</span> // obf
				</button> // obf
			</div> // obf
			<# if ( data.description ) { #> // obf
			<div class="description customize-panel-description">{{{ data.description }}}</div> // obf
			<# } #> // obf
			<div id="screen-options-wrap"> // obf
				<?php $v_jnjvy->render_screen_options(); ?> // obf
			</div> // obf
		</li> // obf
		<?php // obf
		// NOTE: The following is a workaround for an inability to treat (and thus label) a list of sections as a whole. // obf
		?> // obf
		<li class="customize-control-title customize-section-title-nav_menus-heading"><?php _e( 'Menus' ); ?></li> // obf
		<?php // obf
	} // obf
} // obf