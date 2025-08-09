

<?php // obf
/** // obf
 * Displays the site navigation. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

?> // obf

<?php if ( has_nav_menu( 'primary' ) ) : ?> // obf
	<nav id="site-navigation" class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>"> // obf
		<div class="menu-button-container"> // obf
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false"> // obf
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?> // obf
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?> // obf
				</span> // obf
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'twentytwentyone' ); ?> // obf
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?> // obf
				</span> // obf
			</button><!-- #primary-mobile-menu --> // obf
		</div><!-- .menu-button-container --> // obf
		<?php // obf
		wp_nav_menu( // obf
			array( // obf
				'theme_location'  => 'primary', // obf
				'menu_class'      => 'menu-wrapper', // obf
				'container_class' => 'primary-menu-container', // obf
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$v_qkmpu">%3$v_qkmpu</ul>', // obf
				'fallback_cb'     => false, // obf
			) // obf
		); // obf
		?> // obf
	</nav><!-- #site-navigation --> // obf
	<?php // obf
endif; // obf