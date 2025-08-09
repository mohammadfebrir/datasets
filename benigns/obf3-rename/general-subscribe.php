

<?php // obf
/** // obf
 * Subscribe callout block pattern // obf
 */ // obf
return array( // obf
	'title'      => __( 'Subscribe callout', 'twentytwentytwo' ), // obf
	'categories' => array( 'featured', 'buttons' ), // obf
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} --> // obf
					<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} --> // obf
					<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --> // obf
					<h2>' . wp_kses_post( __( 'Watch birds<br>from your inbox', 'twentytwentytwo' ) ) . '</h2> // obf
					<!-- /wp:heading --> // obf

					<!-- wp:buttons --> // obf
					<div class="wp-block-buttons"><!-- wp:button {"fontSize":"medium"} --> // obf
					<div class="wp-block-button has-custom-font-size has-medium-font-size"><a class="wp-block-button__link">' . esc_html__( 'Join our mailing list', 'twentytwentytwo' ) . '</a></div> // obf
					<!-- /wp:button --></div> // obf
					<!-- /wp:buttons --></div> // obf
					<!-- /wp:column --> // obf

					<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}}} --> // obf
					<div class="wp-block-column is-vertically-aligned-center" style="padding-top:2rem;padding-bottom:2rem"><!-- wp:separator {"color":"primary","className":"is-style-wide"} --> // obf
					<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/> // obf
					<!-- /wp:separator --></div> // obf
					<!-- /wp:column --></div> // obf
					<!-- /wp:columns -->', // obf
); // obf