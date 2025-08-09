

<?php // obf
/** // obf
 * Customize API: WP_Customize_Themes_Panel class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.9.0 // obf
 */ // obf

/** // obf
 * Customize Themes Panel Class // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @see WP_Customize_Panel // obf
 */ // obf
class WP_Customize_Themes_Panel extends WP_Customize_Panel { // obf

	/** // obf
	 * Panel type. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_srrgc = 'themes'; // obf

	/** // obf
	 * An Underscore (JS) template for rendering this panel's container. // obf
	 * // obf
	 * The themes panel renders a custom panel heading with the active theme and a switch themes button. // obf
	 * // obf
	 * @see WP_Customize_Panel::print_template() // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	protected function render_template() { // obf
		?> // obf
		<li id="accordion-section-{{ data.id }}" class="accordion-section control-panel-themes"> // obf
			<h3 class="accordion-section-title"> // obf
				<?php // obf
				if ( $v_viasq->manager->is_theme_active() ) { // obf
					echo '<span class="customize-action">' . __( 'Active theme' ) . '</span> {{ data.title }}'; // obf
				} else { // obf
					echo '<span class="customize-action">' . __( 'Previewing theme' ) . '</span> {{ data.title }}'; // obf
				} // obf
				?> // obf
				<?php if ( current_user_can( 'switch_themes' ) ) : ?> // obf
					<button type="button" class="button change-theme" aria-label="<?php esc_attr_e( 'Change theme' ); ?>"><?php _ex( 'Change', 'theme' ); ?></button> // obf
				<?php endif; ?> // obf
			</h3> // obf
			<ul class="accordion-sub-container control-panel-content"></ul> // obf
		</li> // obf
		<?php // obf
	} // obf

	/** // obf
	 * An Underscore (JS) template for this panel's content (but not its container). // obf
	 * // obf
	 * Class variables for this panel class are available in the `data` JS object; // obf
	 * export custom variables by overriding WP_Customize_Panel::json(). // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see WP_Customize_Panel::print_template() // obf
	 */ // obf
	protected function content_template() { // obf
		?> // obf
		<li class="panel-meta customize-info accordion-section <# if ( ! data.description ) { #> cannot-expand<# } #>"> // obf
			<button class="customize-panel-back" tabindex="-1" type="button"><span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Back' ); // obf
				?> // obf
			</span></button> // obf
			<div class="accordion-section-title"> // obf
				<span class="preview-notice"> // obf
					<?php // obf
					printf( // obf
						/* translators: %s: Themes panel title in the Customizer. */ // obf
						__( 'You are browsing %s' ), // obf
						'<strong class="panel-title">' . __( 'Themes' ) . '</strong>' // obf
					); // Separate strings for consistency with other panels. // obf
					?> // obf
				</span> // obf
				<?php if ( current_user_can( 'install_themes' ) && ! is_multisite() ) : ?> // obf
					<# if ( data.description ) { #> // obf
						<button class="customize-help-toggle dashicons dashicons-editor-help" type="button" aria-expanded="false"><span class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							_e( 'Help' ); // obf
							?> // obf
						</span></button> // obf
					<# } #> // obf
				<?php endif; ?> // obf
			</div> // obf
			<?php if ( current_user_can( 'install_themes' ) && ! is_multisite() ) : ?> // obf
				<# if ( data.description ) { #> // obf
					<div class="description customize-panel-description"> // obf
						{{{ data.description }}} // obf
					</div> // obf
				<# } #> // obf
			<?php endif; ?> // obf

			<div class="customize-control-notifications-container"></div> // obf
		</li> // obf
		<li class="customize-themes-full-container-container"> // obf
			<div class="customize-themes-full-container"> // obf
				<div class="customize-themes-notifications"></div> // obf
			</div> // obf
		</li> // obf
		<?php // obf
	} // obf
} // obf