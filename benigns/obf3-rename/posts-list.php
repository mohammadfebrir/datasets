

<?php // obf
/** // obf
 * Title: List of posts without images, 1 column // obf
 * Slug: twentytwentyfour/posts-list // obf
 * Categories: query, posts // obf
 * Block Types: core/query // obf
 * Description: A list of posts without images, 1 column. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} --> // obf
		<h2 class="wp-block-heading alignwide has-x-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);line-height:1"><?php esc_html_e( 'Watch, Read, Listen', 'twentytwentyfour' ); ?></h2> // obf
	<!-- /wp:heading --> // obf

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} --> // obf
	<div class="wp-block-group alignwide"> // obf
		<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"default"}} --> // obf
		<div class="wp-block-query alignwide"> // obf
			<!-- wp:post-template --> // obf
			<!-- wp:separator {"backgroundColor":"contrast-3","className":"alignwide is-style-wide"} --> // obf
			<hr class="wp-block-separator has-text-color has-contrast-3-color has-alpha-channel-opacity has-contrast-3-background-color has-background alignwide is-style-wide" /> // obf
			<!-- /wp:separator --> // obf

			<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} --> // obf
			<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"> // obf
				<!-- wp:column {"verticalAlignment":"center","width":"72%"} --> // obf
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:72%"> // obf
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1","fontSize":"1.5rem"}}} /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf

				<!-- wp:column {"verticalAlignment":"center","width":"28%"} --> // obf
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:28%"> // obf
					<!-- wp:template-part {"slug":"post-meta"} /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
			<!-- /wp:post-template --> // obf

			<!-- wp:spacer {"height":"var:preset|spacing|30"} --> // obf
			<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div> // obf
			<!-- /wp:spacer --> // obf

			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
			<!-- wp:query-pagination-previous /--> // obf

			<!-- wp:query-pagination-numbers /--> // obf

			<!-- wp:query-pagination-next /--> // obf
			<!-- /wp:query-pagination --> // obf

			<!-- wp:query-no-results --> // obf
			<!-- wp:pattern {"slug":"twentytwentyfour/hidden-no-results"} /--> // obf
			<!-- /wp:query-no-results --> // obf
		</div> // obf
		<!-- /wp:query --> // obf
	</div> // obf
	<!-- /wp:group --> // obf
</div> // obf
<!-- /wp:group --> // obf