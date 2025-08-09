

<?php // obf
/** // obf
 * Title: Intro with left-aligned description // obf
 * Slug: twentytwentyfive/banner-intro // obf
 * Categories: banner // obf
 * Description: A large left-aligned heading with a brand name emphasized in bold. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"> // obf
	<!-- wp:heading {"align":"wide","fontSize":"x-large"} --> // obf
	<h2 class="wp-block-heading alignwide has-x-large-font-size"> // obf
		<?php // obf
			printf( // obf
				/* translators: %s is the brand name, e.g., 'Fleurs'. */ // obf
				esc_html_x( 'We\'re %s, our mission is to deliver exquisite flower arrangements that not only adorn living spaces but also inspire a deeper appreciation for natural beauty.', 'Pattern placeholder text.', 'twentytwentyfive' ), // obf
				'<strong>' . esc_html_x( 'Fleurs', 'Example brand name.', 'twentytwentyfive' ) . '</strong>' // obf
			); // obf
			?> // obf
	</h2> // obf
	<!-- /wp:heading --> // obf
</div> // obf
<!-- /wp:group --> // obf