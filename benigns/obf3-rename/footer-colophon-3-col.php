

<?php // obf
/** // obf
 * Title: Footer with colophon, 3 columns // obf
 * Slug: twentytwentyfour/footer-colophon-3-col // obf
 * Categories: footer // obf
 * Block Types: core/template-part/footer // obf
 * Description: A footer section with a colophon and 3 columns. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignwide"> // obf
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} --> // obf
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:image {"width":"40px","height":"auto","sizeSlug":"full","linkDestination":"none"} --> // obf
		<figure class="wp-block-image size-full is-resized"> // obf
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-message.webp" alt="" style="width:40px;height:auto" /> // obf
		</figure> // obf
		<!-- /wp:image --> // obf

		<!-- wp:separator {"className":"is-style-wide"} --> // obf
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" /> // obf
		<!-- /wp:separator --> // obf

		<!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10"}}}} --> // obf
		<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--10)"> // obf
			<!-- wp:column {"width":"57%"} --> // obf
			<div class="wp-block-column" style="flex-basis:57%"> // obf
				<!-- wp:heading {"fontSize":"x-large"} --> // obf
				<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Keep up, get in touch.', 'twentytwentyfour' ); ?></h2> // obf
				<!-- /wp:heading --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"30%"} --> // obf
			<div class="wp-block-column" style="flex-basis:30%"> // obf
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:heading {"level":3,"fontSize":"medium","fontFamily":"body"} --> // obf
					<h3 class="wp-block-heading has-body-font-family has-medium-font-size"><?php esc_html_e( 'Contact', 'twentytwentyfour' ); ?></h3> // obf
					<!-- /wp:heading --> // obf
					<!-- wp:paragraph --> // obf
					<p><a href="#"><?php echo esc_html_x( 'info@example.com', 'Example email in site footer', 'twentytwentyfour' ); ?></a></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
			<!-- wp:column {"width":"30%"} --> // obf
			<div class="wp-block-column" style="flex-basis:30%"> // obf
				<!-- wp:columns {"isStackedOnMobile":false} --> // obf
				<div class="wp-block-columns is-not-stacked-on-mobile"> // obf
					<!-- wp:column --> // obf
					<div class="wp-block-column"> // obf
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} --> // obf
						<div class="wp-block-group"> // obf
							<!-- wp:heading {"level":3,"fontSize":"medium","fontFamily":"body"} --> // obf
							<h3 class="wp-block-heading has-body-font-family has-medium-font-size"><?php esc_html_e( 'Follow', 'twentytwentyfour' ); ?></h3> // obf
							<!-- /wp:heading --> // obf
							<!-- wp:paragraph --> // obf
							<p><a href="#"><?php esc_html_e( 'Instagram', 'twentytwentyfour' ); ?></a> / <a href="#"><?php esc_html_e( 'Facebook', 'twentytwentyfour' ); ?></a></p> // obf
							<!-- /wp:paragraph --> // obf
						</div> // obf
						<!-- /wp:group --> // obf
					</div> // obf
					<!-- /wp:column --> // obf
				</div> // obf
				<!-- /wp:columns --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|50"} --> // obf
		<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"top"}} --> // obf
		<div class="wp-block-group"> // obf
			<!-- wp:group {"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"wrap"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:paragraph {"fontSize":"small"} --> // obf
				<p class="has-small-font-size"><?php esc_html_e( '&copy;', 'twentytwentyfour' ); ?></p> // obf
				<!-- /wp:paragraph --> // obf
				<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"small"} /--> // obf
			</div> // obf
			<!-- /wp:group --> // obf
			<!-- wp:paragraph {"fontSize":"small"} --> // obf
			<p class="has-small-font-size"> // obf
				<?php // obf
				/* Translators: WordPress link. */ // obf
				$v_meknv = '<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentyfour' ) ) . '" rel="nofollow">WordPress</a>'; // obf
				echo sprintf( // obf
					/* Translators: Designed with WordPress */ // obf
					esc_html__( 'Designed with %1$v_dyilo', 'twentytwentyfour' ), // obf
					$v_meknv // obf
				); // obf
				?> // obf
			</p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf