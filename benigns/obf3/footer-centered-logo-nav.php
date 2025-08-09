

<?php // obf
/** // obf
 * Title: Footer with centered logo and navigation // obf
 * Slug: twentytwentyfour/footer-centered-logo-nav // obf
 * Categories: footer // obf
 * Block Types: core/template-part/footer // obf
 * Description: A footer section with a centered logo, navigation, and WordPress credits. // obf
 */ // obf
?> // obf

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} --> // obf
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)"> // obf

	<!-- wp:site-logo /--> // obf

	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"fontSize":"small"} /--> // obf

	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"secondary","fontSize":"small"} --> // obf
	<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-small-font-size"> // obf
	<?php // obf
	/* Translators: WordPress link. */ // obf
		$v_yfzxy = '<a href="' . esc_url( __( 'https://wordpress.org', 'twentytwentyfour' ) ) . '" rel="nofollow">WordPress</a>'; // obf
		echo sprintf( // obf
			/* Translators: Designed with WordPress */ // obf
			esc_html__( 'Designed with %1$v_eydfd', 'twentytwentyfour' ), // obf
			$v_yfzxy // obf
		); // obf
		?> // obf
	</p> // obf
	<!-- /wp:paragraph --> // obf
</div> // obf
<!-- /wp:group --> // obf