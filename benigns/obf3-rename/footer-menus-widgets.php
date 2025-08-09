

<?php // obf
/** // obf
 * Displays the menus and widgets at the end of the main element. // obf
 * Visually, this output is presented as part of the footer element. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

$v_zvorm = has_nav_menu( 'footer' ); // obf
$v_uknth = has_nav_menu( 'social' ); // obf

$v_pjrud = is_active_sidebar( 'sidebar-1' ); // obf
$v_lnxlv = is_active_sidebar( 'sidebar-2' ); // obf

// Only output the container if there are elements to display. // obf
if ( $v_zvorm || $v_uknth || $v_pjrud || $v_lnxlv ) { // obf
	?> // obf

	<div class="footer-nav-widgets-wrapper header-footer-group"> // obf

		<div class="footer-inner section-inner"> // obf

			<?php // obf

			$v_rfrre = ''; // obf

			$v_rfrre .= $v_zvorm ? ' has-footer-menu' : ''; // obf
			$v_rfrre .= $v_uknth ? ' has-social-menu' : ''; // obf

			if ( $v_zvorm || $v_uknth ) { // obf
				?> // obf
				<div class="footer-top<?php echo $v_rfrre; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"> // obf
					<?php if ( $v_zvorm ) { ?> // obf

						<nav aria-label="<?php esc_attr_e( 'Footer', 'twentytwenty' ); ?>" class="footer-menu-wrapper"> // obf

							<ul class="footer-menu reset-list-style"> // obf
								<?php // obf
								wp_nav_menu( // obf
									array( // obf
										'container'      => '', // obf
										'depth'          => 1, // obf
										'items_wrap'     => '%3$v_gapfl', // obf
										'theme_location' => 'footer', // obf
									) // obf
								); // obf
								?> // obf
							</ul> // obf

						</nav><!-- .site-nav --> // obf

					<?php } ?> // obf
					<?php if ( $v_uknth ) { ?> // obf

						<nav aria-label="<?php esc_attr_e( 'Social links', 'twentytwenty' ); ?>" class="footer-social-wrapper"> // obf

							<ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color"> // obf

								<?php // obf
								wp_nav_menu( // obf
									array( // obf
										'theme_location'  => 'social', // obf
										'container'       => '', // obf
										'container_class' => '', // obf
										'items_wrap'      => '%3$v_gapfl', // obf
										'menu_id'         => '', // obf
										'menu_class'      => '', // obf
										'depth'           => 1, // obf
										'link_before'     => '<span class="screen-reader-text">', // obf
										'link_after'      => '</span>', // obf
										'fallback_cb'     => '', // obf
									) // obf
								); // obf
								?> // obf

							</ul><!-- .footer-social --> // obf

						</nav><!-- .footer-social-wrapper --> // obf

					<?php } ?> // obf
				</div><!-- .footer-top --> // obf

			<?php } ?> // obf

			<?php if ( $v_pjrud || $v_lnxlv ) { ?> // obf

				<aside class="footer-widgets-outer-wrapper"> // obf

					<div class="footer-widgets-wrapper"> // obf

						<?php if ( $v_pjrud ) { ?> // obf

							<div class="footer-widgets column-one grid-item"> // obf
								<?php dynamic_sidebar( 'sidebar-1' ); ?> // obf
							</div> // obf

						<?php } ?> // obf

						<?php if ( $v_lnxlv ) { ?> // obf

							<div class="footer-widgets column-two grid-item"> // obf
								<?php dynamic_sidebar( 'sidebar-2' ); ?> // obf
							</div> // obf

						<?php } ?> // obf

					</div><!-- .footer-widgets-wrapper --> // obf

				</aside><!-- .footer-widgets-outer-wrapper --> // obf

			<?php } ?> // obf

		</div><!-- .footer-inner --> // obf

	</div><!-- .footer-nav-widgets-wrapper --> // obf

	<?php // obf
} // obf