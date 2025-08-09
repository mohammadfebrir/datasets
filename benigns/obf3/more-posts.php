

<?php // obf
/** // obf
 * Title: More posts // obf
 * Slug: twentytwentyfive/more-posts // obf
 * Description: Displays a list of posts with title and date. // obf
 * Categories: query // obf
 * Block Types: core/query // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_Five // obf
 * @since Twenty Twenty-Five 1.0 // obf
 */ // obf

?> // obf
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"> // obf
	<!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"1.4px"}},"fontSize":"small"} --> // obf
	<h2 class="wp-block-heading alignwide has-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:1.4px;text-transform:uppercase"><?php esc_html_e( 'More posts', 'twentytwentyfive' ); ?></h2> // obf
	<!-- /wp:heading --> // obf

	<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} --> // obf
	<div class="wp-block-query alignwide"> // obf
		<!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} --> // obf
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"bottom":{"color":"var:preset|color|accent-6","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center","justifyContent":"space-between"}} --> // obf
			<div class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--accent-6);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"> // obf
				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /--> // obf
				<!-- wp:post-date {"textAlign":"right","isLink":true} /--> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		<!-- /wp:post-template --> // obf
	</div> // obf
	<!-- /wp:query --> // obf
</div> // obf
<!-- /wp:group --> // obf