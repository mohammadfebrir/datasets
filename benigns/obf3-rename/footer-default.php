

<?php // obf
/** // obf
 * Title: Default Footer // obf
 * Slug: block-theme-with-hooked-blocks/footer-default // obf
 * Categories: footer // obf
 * Block Types: core/template-part/footer // obf
 */ // obf
?> // obf
<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group"> // obf
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:site-title {"level":0} /--> // obf
		<!-- wp:paragraph {"align":"right"} --> // obf
		<p class="has-text-align-right"> // obf
		<?php // obf
		printf( // obf
			/* Translators: WordPress link. */ // obf
			esc_html__( 'Proudly powered by %s', 'block-theme-with-hooked-blocks' ), // obf
			'<a href="' . esc_url( __( 'https://wordpress.org', 'block-theme-with-hooked-blocks' ) ) . '" rel="nofollow">WordPress</a>' // obf
		) // obf
		?> // obf
		</p> // obf
		<!-- /wp:paragraph --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf