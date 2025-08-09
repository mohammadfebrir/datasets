

<?php // obf
/** // obf
 * Title: Centered call to action // obf
 * Slug: twentytwentyfour/cta-subscribe-centered // obf
 * Categories: call-to-action // obf
 * Keywords: newsletter, subscribe, button // obf
 * Description: Subscribers CTA section with a title, a paragraph and a CTA button. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:group {"align":"wide","style":{"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide has-base-2-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"> // obf
		<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} --> // obf
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php echo esc_html_x( 'Join 900+ subscribers', 'Sample text for Subscriber Heading with numbers', 'twentytwentyfour' ); ?></h2> // obf
		<!-- /wp:heading --> // obf

		<!-- wp:paragraph {"align":"center"} --> // obf
		<p class="has-text-align-center"><?php echo esc_html_x( 'Stay in the loop with everything you need to know.', 'Sample text for Subscriber Description', 'twentytwentyfour' ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --> // obf
		<div class="wp-block-buttons"> // obf
			<!-- wp:button --> // obf
			<div class="wp-block-button"> // obf
				<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Sign up', 'Sample text for Sign Up Button', 'twentytwentyfour' ); ?></a> // obf
			</div> // obf
			<!-- /wp:button --> // obf
		</div> // obf
		<!-- /wp:buttons --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
		<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf