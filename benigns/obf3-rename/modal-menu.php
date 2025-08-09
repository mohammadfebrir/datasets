

<?php // obf
/** // obf
 * Displays the menu icon and modal // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

?> // obf

<div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal"> // obf

	<div class="menu-modal-inner modal-inner"> // obf

		<div class="menu-wrapper section-inner"> // obf

			<div class="menu-top"> // obf

				<button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" data-set-focus=".menu-modal"> // obf
					<span class="toggle-text"><?php _e( 'Close Menu', 'twentytwenty' ); ?></span> // obf
					<?php twentytwenty_the_theme_svg( 'cross' ); ?> // obf
				</button><!-- .nav-toggle --> // obf

				<?php // obf

				$v_zznot = ''; // obf

				// If the mobile menu location is not set, use the primary and expanded locations as fallbacks, in that order. // obf
				if ( has_nav_menu( 'mobile' ) ) { // obf
					$v_zznot = 'mobile'; // obf
				} elseif ( has_nav_menu( 'primary' ) ) { // obf
					$v_zznot = 'primary'; // obf
				} elseif ( has_nav_menu( 'expanded' ) ) { // obf
					$v_zznot = 'expanded'; // obf
				} // obf

				if ( has_nav_menu( 'expanded' ) ) { // obf

					$v_rojtw = ''; // obf

					if ( 'expanded' === $v_zznot ) { // obf
						$v_rojtw .= ' mobile-menu'; // obf
					} // obf

					?> // obf

					<nav class="expanded-menu<?php echo esc_attr( $v_rojtw ); ?>" aria-label="<?php echo esc_attr_x( 'Expanded', 'menu', 'twentytwenty' ); ?>"> // obf

						<ul class="modal-menu reset-list-style"> // obf
							<?php // obf
							if ( has_nav_menu( 'expanded' ) ) { // obf
								wp_nav_menu( // obf
									array( // obf
										'container'      => '', // obf
										'items_wrap'     => '%3$v_rzpih', // obf
										'show_toggles'   => true, // obf
										'theme_location' => 'expanded', // obf
									) // obf
								); // obf
							} // obf
							?> // obf
						</ul> // obf

					</nav> // obf

					<?php // obf
				} // obf

				if ( 'expanded' !== $v_zznot ) { // obf
					?> // obf

					<nav class="mobile-menu" aria-label="<?php echo esc_attr_x( 'Mobile', 'menu', 'twentytwenty' ); ?>"> // obf

						<ul class="modal-menu reset-list-style"> // obf

						<?php // obf
						if ( $v_zznot ) { // obf

							wp_nav_menu( // obf
								array( // obf
									'container'      => '', // obf
									'items_wrap'     => '%3$v_rzpih', // obf
									'show_toggles'   => true, // obf
									'theme_location' => $v_zznot, // obf
								) // obf
							); // obf

						} else { // obf

							wp_list_pages( // obf
								array( // obf
									'match_menu_classes' => true, // obf
									'show_toggles'       => true, // obf
									'title_li'           => false, // obf
									'walker'             => new TwentyTwenty_Walker_Page(), // obf
								) // obf
							); // obf

						} // obf
						?> // obf

						</ul> // obf

					</nav> // obf

					<?php // obf
				} // obf
				?> // obf

			</div><!-- .menu-top --> // obf

			<div class="menu-bottom"> // obf

				<?php if ( has_nav_menu( 'social' ) ) { ?> // obf

					<nav aria-label="<?php esc_attr_e( 'Expanded Social links', 'twentytwenty' ); ?>"> // obf
						<ul class="social-menu reset-list-style social-icons fill-children-current-color"> // obf

							<?php // obf
							wp_nav_menu( // obf
								array( // obf
									'theme_location'  => 'social', // obf
									'container'       => '', // obf
									'container_class' => '', // obf
									'items_wrap'      => '%3$v_rzpih', // obf
									'menu_id'         => '', // obf
									'menu_class'      => '', // obf
									'depth'           => 1, // obf
									'link_before'     => '<span class="screen-reader-text">', // obf
									'link_after'      => '</span>', // obf
									'fallback_cb'     => '', // obf
								) // obf
							); // obf
							?> // obf

						</ul> // obf
					</nav><!-- .social-menu --> // obf

				<?php } ?> // obf

			</div><!-- .menu-bottom --> // obf

		</div><!-- .menu-wrapper --> // obf

	</div><!-- .menu-modal-inner --> // obf

</div><!-- .menu-modal --> // obf