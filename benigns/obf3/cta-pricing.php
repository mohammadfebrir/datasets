

<?php // obf
/** // obf
 * Title: Pricing // obf
 * Slug: twentytwentyfour/cta-pricing // obf
 * Categories: call-to-action, services // obf
 * Viewport width: 1400 // obf
 * Description: A pricing section with a title, a paragraph and three pricing levels. // obf
 */ // obf
?> // obf

<!-- wp:group {"metadata":{"name":"<?php echo esc_html_x( 'Pricing Table', 'Name for the pricing pattern', 'twentytwentyfour' ); ?>"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide has-base-2-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"> // obf
		<!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
		<div class="wp-block-group alignwide"> // obf
			<!-- wp:heading {"textAlign":"center"} --> // obf
			<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Our Services', 'Sample heading for pricing pattern', 'twentytwentyfour' ); ?></h2> // obf
			<!-- /wp:heading --> // obf

			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} --> // obf
			<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--10);font-size:1.125rem"><?php echo esc_html_x( 'We offer flexible options, which you can adapt to the different needs of each project.', 'Sample description for a pricing table', 'twentytwentyfour' ); ?></p> // obf
			<!-- /wp:paragraph --> // obf
		</div> // obf
		<!-- /wp:group --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
		<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|20"}}}} --> // obf
		<div class="wp-block-columns alignwide"> // obf
			<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|contrast-3","width":"1px"}}}} --> // obf
			<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"1px"}}},"fontSize":"medium"} --> // obf
				<h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="padding-top:1px"> // obf
					<em><?php echo esc_html_x( 'Free', 'Sample heading for the first pricing level', 'twentytwentyfour' ); ?></em> // obf
				</h4> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:heading {"textAlign":"center","level":5,"fontSize":"x-large"} --> // obf
				<h5 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( '$0', 'Sample price for the first pricing level', 'twentytwentyfour' ); ?></h5> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Access to 5 exclusive <em>Études Articles</em> per month.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:separator {"backgroundColor":"contrast-3"} --> // obf
					<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" /> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} --> // obf
					<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color"> // obf
						<s><?php echo esc_html_x( 'Weekly print edition.', 'Feature for pricing level', 'twentytwentyfour' ); ?></s> // obf
					</p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:separator {"backgroundColor":"contrast-3"} --> // obf
					<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" /> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2"} --> // obf
					<p class="has-text-align-center has-contrast-2-color has-text-color has-link-color"> // obf
						<s><?php echo wp_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></s> // obf
					</p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --> // obf
				<div class="wp-block-buttons"> // obf
					<!-- wp:button {"width":100,"className":"is-style-outline"} --> // obf
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"> // obf
						<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Subscribe', 'Button text for the first pricing level', 'twentytwentyfour' ); ?></a> // obf
					</div> // obf
					<!-- /wp:button --> // obf
				</div> // obf
				<!-- /wp:buttons --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|contrast","width":"2px"}}}} --> // obf
			<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:2px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:heading {"textAlign":"center","level":4} --> // obf
				<h4 class="wp-block-heading has-text-align-center"> // obf
					<em><?php echo esc_html_x( 'Connoisseur', 'Sample heading for the second pricing level', 'twentytwentyfour' ); ?></em> // obf
				</h4> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:heading {"textAlign":"center","level":5,"fontSize":"x-large"} --> // obf
				<h5 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( '$12', 'Sample price for the second pricing level', 'twentytwentyfour' ); ?></h5> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Access to 20 exclusive <em>Études Articles</em> per month.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:separator {"backgroundColor":"contrast-3"} --> // obf
					<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" /> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"><?php echo esc_html_x( 'Weekly print edition.', 'Feature for pricing level', 'twentytwentyfour' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:separator {"backgroundColor":"contrast-3"} --> // obf
					<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" /> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --> // obf
				<div class="wp-block-buttons"> // obf
					<!-- wp:button {"width":100,"className":"is-style-fill"} --> // obf
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"> // obf
						<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Subscribe', 'Button text for the second pricing level', 'twentytwentyfour' ); ?></a> // obf
					</div> // obf
					<!-- /wp:button --> // obf
				</div> // obf
				<!-- /wp:buttons --> // obf
			</div> // obf
			<!-- /wp:column --> // obf

			<!-- wp:column {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|10"}},"border":{"top":{"color":"var:preset|color|contrast-3","width":"1px"}}}} --> // obf
			<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--contrast-3);border-top-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"1px"}}},"fontSize":"medium"} --> // obf
				<h4 class="wp-block-heading has-text-align-center has-medium-font-size" style="padding-top:1px"> // obf
					<em><?php echo esc_html_x( 'Expert', 'Sample heading for the third pricing level', 'twentytwentyfour' ); ?></em> // obf
				</h4> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:heading {"textAlign":"center","level":5,"fontSize":"x-large"} --> // obf
				<h5 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( '$28', 'Sample price for the third pricing level', 'twentytwentyfour' ); ?></h5> // obf
				<!-- /wp:heading --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Exclusive, unlimited access to <em>Études Articles</em>.', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:separator {"backgroundColor":"contrast-3"} --> // obf
					<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" /> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"><?php echo esc_html_x( 'Weekly print edition.', 'Feature for pricing level', 'twentytwentyfour' ); ?></p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:separator {"backgroundColor":"contrast-3"} --> // obf
					<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background is-style-wide" /> // obf
					<!-- /wp:separator --> // obf

					<!-- wp:paragraph {"align":"center"} --> // obf
					<p class="has-text-align-center"><?php echo wp_kses_post( _x( 'Exclusive access to the <em>Études</em> app for iOS and Android', 'Feature for pricing level', 'twentytwentyfour' ) ); ?></p> // obf
					<!-- /wp:paragraph --> // obf
				</div> // obf
				<!-- /wp:group --> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --> // obf
				<div class="wp-block-buttons"> // obf
					<!-- wp:button {"width":100,"className":"is-style-outline"} --> // obf
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"> // obf
						<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Subscribe', 'Button text for the third pricing level', 'twentytwentyfour' ); ?></a> // obf
					</div> // obf
					<!-- /wp:button --> // obf
				</div> // obf
				<!-- /wp:buttons --> // obf
			</div> // obf
			<!-- /wp:column --> // obf
		</div> // obf
		<!-- /wp:columns --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf