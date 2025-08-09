

<?php // obf
/** // obf
 * Title: Post Meta // obf
 * Slug: block-theme-with-hooked-blocks/post-meta // obf
 * Categories: query // obf
 * Keywords: post meta // obf
 * Block Types: core/template-part/post-meta // obf
 */ // obf
?> // obf
<!-- wp:spacer {"height":"0"} --> // obf
<div style="height:0" aria-hidden="true" class="wp-block-spacer"></div> // obf
<!-- /wp:spacer --> // obf

<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group"> // obf
	<!-- wp:separator {"opacity":"css","align":"wide","className":"is-style-wide"} --> // obf
	<hr class="wp-block-separator alignwide has-css-opacity is-style-wide"/> // obf
	<!-- /wp:separator --> // obf

	<!-- wp:columns --> // obf
	<div class="wp-block-columns"> // obf
		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:group {"layout":{"type":"flex"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:paragraph --> // obf
				<p> // obf
					<?php echo esc_html_x( 'Posted', 'Verb to explain the publication status of a post', 'block-theme-with-hooked-blocks' ); ?> // obf
				</p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:post-date /--> // obf

				<!-- wp:paragraph --> // obf
				<p> // obf
					<?php echo esc_html_x( 'in', 'Preposition to show the relationship between the post and its categories', 'block-theme-with-hooked-blocks' ); ?> // obf
				</p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:post-terms {"term":"category"} /--> // obf
			</div> // obf
			<!-- /wp:group --> // obf

			<!-- wp:group {"layout":{"type":"flex"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:paragraph --> // obf
				<p> // obf
					<?php echo esc_html_x( 'by', 'Preposition to show the relationship between the post and its author', 'block-theme-with-hooked-blocks' ); ?> // obf
				</p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:post-author {"showAvatar":false} /--> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf

		<!-- wp:column --> // obf
		<div class="wp-block-column"> // obf
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} --> // obf
			<div class="wp-block-group"> // obf
				<!-- wp:paragraph --> // obf
				<p> // obf
					<?php echo esc_html_x( 'Tags:', 'Label for a list of post tags', 'block-theme-with-hooked-blocks' ); ?> // obf
				</p> // obf
				<!-- /wp:paragraph --> // obf

				<!-- wp:post-terms {"term":"post_tag"} /--> // obf
			</div> // obf
			<!-- /wp:group --> // obf
		</div> // obf
		<!-- /wp:column --> // obf
	</div> // obf
	<!-- /wp:columns --> // obf
</div> // obf
<!-- /wp:group --> // obf