

<?php // obf
/** // obf
 * Title: Grid of posts featuring the first post, 2 columns // obf
 * Slug: twentytwentyfour/posts-grid-2-col // obf
 * Categories: query // obf
 * Block Types: core/query // obf
 * Description: A grid of posts featuring the first post, 2 columns. // obf
 */ // obf
?> // obf

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"> // obf
	<!-- wp:heading {"align":"wide","style":{"typography":{"lineHeight":"1"},"spacing":{"margin":{"top":"0"}}},"fontSize":"x-large"} --> // obf
	<h2 class="wp-block-heading alignwide has-x-large-font-size" style="margin-top:0;line-height:1"><?php esc_html_e( 'Watch, Read, Listen', 'twentytwentyfour' ); ?></h2> // obf
	<!-- /wp:heading --> // obf

	<!-- wp:spacer {"height":"var:preset|spacing|10","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} --> // obf
	<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
	</div> // obf
	<!-- /wp:spacer --> // obf

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} --> // obf
	<div class="wp-block-columns alignwide"> // obf
		<!-- wp:column {"width":"60%"} --> // obf
		<div class="wp-block-column" style="flex-basis:60%"> // obf
			<!-- wp:query {"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}}} --> // obf
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /--> // obf

				<!-- wp:spacer {"height":"var:preset|spacing|10"} --> // obf
				<div style="height:var(--wp--preset--spacing--10)" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"x-large"} /--> // obf

					<!-- wp:post-excerpt {"excerptLength":35} /--> // obf

					<!-- wp:template-part {"slug":"post-meta"} /--> // obf

				</div> // obf
				<!-- /wp:group --> // obf
				<!-- /wp:post-template --> // obf
			</div> // obf
			<!-- /wp:query --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column {"width":"40%"} --> // obf
		<div class="wp-block-column" style="flex-basis:40%"> // obf
			<!-- wp:query {"query":{"perPage":2,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} --> // obf
			<div class="wp-block-query"> // obf
				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} --> // obf
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--> // obf

				<!-- wp:spacer {"height":"5px","style":{"layout":{}}} --> // obf
				<div style="height:5px" aria-hidden="true" class="wp-block-spacer"> // obf
				</div> // obf
				<!-- /wp:spacer --> // obf

				<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} --> // obf
				<div class="wp-block-group"> // obf
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /--> // obf

					<!-- wp:post-excerpt {"excerptLength":14,"fontSize":"small"} /--> // obf
					<!-- wp:template-part {"slug":"post-meta"} /--> // obf

				</div> // obf
				<!-- /wp:group --> // obf
				<!-- /wp:post-template --> // obf
			</div> // obf
			<!-- /wp:query --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf