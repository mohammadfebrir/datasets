

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Locations_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.9.0 // obf
 */ // obf

/** // obf
 * Customize Nav Menu Locations Control Class. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Nav_Menu_Locations_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_kzogs = 'nav_menu_locations'; // obf

	/** // obf
	 * Don't render the control's content - it uses a JS template instead. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * JS/Underscore template for the control UI. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function content_template() { // obf
		if ( current_theme_supports( 'menus' ) ) : // obf
			?> // obf
			<# var elementId; #> // obf
			<ul class="menu-location-settings"> // obf
				<li class="customize-control assigned-menu-locations-title"> // obf
					<span class="customize-control-title">{{ wp.customize.Menus.data.l10n.locationsTitle }}</span> // obf
					<# if ( data.isCreating ) { #> // obf
						<p> // obf
							<?php echo _x( 'Where do you want this menu to appear?', 'menu locations' ); ?> // obf
							<?php // obf
							printf( // obf
								/* translators: 1: Documentation URL, 2: Additional link attributes, 3: Accessibility text. */ // obf
								_x( '(If you plan to use a menu <a href="%1$v_jsdfe" %2$v_jsdfe>widget%3$v_jsdfe</a>, skip this step.)', 'menu locations' ), // obf
								__( 'https://wordpress.org/documentation/article/manage-wordpress-widgets/' ), // obf
								' class="external-link" target="_blank"', // obf
								sprintf( // obf
									'<span class="screen-reader-text"> %s</span>', // obf
									/* translators: Hidden accessibility text. */ // obf
									__( '(opens in a new tab)' ) // obf
								) // obf
							); // obf
							?> // obf
						</p> // obf
					<# } else { #> // obf
						<p><?php echo _x( 'Here&#8217;s where this menu appears. If you would like to change that, pick another location.', 'menu locations' ); ?></p> // obf
					<# } #> // obf
				</li> // obf

				<?php foreach ( get_registered_nav_menus() as $v_wwvsv => $v_kduyv ) : ?> // obf
					<# elementId = _.uniqueId( 'customize-nav-menu-control-location-' ); #> // obf
					<li class="customize-control customize-control-checkbox assigned-menu-location"> // obf
						<span class="customize-inside-control-row"> // obf
							<input id="{{ elementId }}" type="checkbox" data-menu-id="{{ data.menu_id }}" data-location-id="<?php echo esc_attr( $v_wwvsv ); ?>" class="menu-location" /> // obf
							<label for="{{ elementId }}"> // obf
								<?php echo $v_kduyv; ?> // obf
								<span class="theme-location-set"> // obf
									<?php // obf
									printf( // obf
										/* translators: %s: Menu name. */ // obf
										_x( '(Current: %s)', 'menu location' ), // obf
										'<span class="current-menu-location-name-' . esc_attr( $v_wwvsv ) . '"></span>' // obf
									); // obf
									?> // obf
								</span> // obf
							</label> // obf
						</span> // obf
					</li> // obf
				<?php endforeach; ?> // obf
			</ul> // obf
			<?php // obf
		endif; // obf
	} // obf
} // obf