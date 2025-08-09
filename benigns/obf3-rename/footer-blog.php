

<?php // obf
/** // obf
 * Blog footer // obf
 */ // obf
return array( // obf
	'title'      => __( 'Blog footer', 'twentytwentytwo' ), // obf
	'categories' => array( 'footer' ), // obf
	'blockTypes' => array( 'core/template-part/footer' ), // obf
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} --> // obf
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)"><!-- wp:columns {"align":"wide"} --> // obf
					<div class="wp-block-columns alignwide"><!-- wp:column --> // obf
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase">' . esc_html__( 'About us', 'twentytwentytwo' ) . '</p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:paragraph --> // obf
					<p>' . esc_html__( 'We are a rogue collective of bird watchers. We’ve been known to sneak through fences, climb perimeter walls, and generally trespass in order to observe the rarest of birds.', 'twentytwentytwo' ) . '</p> // obf
					<!-- /wp:paragraph --></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column --> // obf
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase">' . esc_html__( 'Latest posts', 'twentytwentytwo' ) . '</p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:latest-posts /--></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column --> // obf
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} --> // obf
					<p style="text-transform:uppercase">' . esc_html__( 'Categories', 'twentytwentytwo' ) . '</p> // obf
					<!-- /wp:paragraph --> // obf

					<!-- wp:categories /--></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns --> // obf

					<!-- wp:spacer {"height":50} --> // obf
					<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div> // obf
					<!-- /wp:spacer --> // obf

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:site-title {"level":0} /--> // obf

					<!-- wp:paragraph {"align":"right"} --> // obf
					<p class="has-text-align-right">' . // obf
					sprintf( // obf
						/* Translators: WordPress link. */ // obf
						esc_html__( 'Proudly powered by %s', 'twentytwentytwo' ), // obf
						'<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentytwo' ) ) . '" rel="nofollow">WordPress</a>' // obf
					) . '</p> // obf
					<!-- /wp:paragraph --></div> // obf
					<!-- /wp:group --></div> // obf
					<!-- /wp:group -->', // obf
); // obf