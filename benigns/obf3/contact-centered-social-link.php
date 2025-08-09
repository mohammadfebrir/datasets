

<?php // obf
/** // obf
 * Title: Centered link and social links // obf
 * Slug: twentytwentyfive/contact-centered-social-link // obf
 * Keywords: contact, faq, questions // obf
 * Categories: contact // obf
 * Description: Centered contact section with a prominent message and social media links. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:paragraph {"align":"center","className":"is-style-text-display","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} --> // obf
		<p class="has-text-align-center is-style-text-display" style="font-style:normal;font-weight:400"><?php echo wp_kses_post( _x( 'Got questions? <br><a href="#" rel="nofollow">Feel free to reach out.</a>', 'Heading of the Contact social link pattern', 'twentytwentyfive' ) ); ?></p> // obf
		<!-- /wp:paragraph --> // obf

		<!-- wp:spacer {"height":"var:preset|spacing|40"} --> // obf
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div> // obf
		<!-- /wp:spacer --> // obf

		<!-- wp:social-links {"iconColor":"contrast","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} --> // obf
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"> // obf
			<!-- wp:social-link {"url":"#","service":"twitter"} /--> // obf
			<!-- wp:social-link {"url":"#","service":"facebook"} /--> // obf
			<!-- wp:social-link {"url":"#","service":"instagram"} /--> // obf
			<!-- wp:social-link {"url":"#","service":"pinterest"} /--> // obf
		</ul> // obf
		<!-- /wp:social-links --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf