

<?php // obf
/** // obf
 * Title: Hidden Comments // obf
 * Slug: block-theme-with-hooked-blocks/hidden-comments // obf
 * Inserter: no // obf
 */ // obf
?> // obf
<!-- wp:group {"layout":{"type":"constrained"}} --> // obf
<div class="wp-block-group" > // obf
	<!-- wp:comments --> // obf
	<div class="wp-block-comments"> // obf
		<!-- wp:heading {"level":2} --> // obf
		<h2><?php echo esc_html_x( 'Comments', 'Title of comments section', 'block-theme-with-hooked-blocks' ); ?></h2> // obf
		<!-- /wp:heading --> // obf

		<!-- wp:comments-title {"level":3} /--> // obf

		<!-- wp:comment-template --> // obf
			<!-- wp:columns --> // obf
			<div class="wp-block-columns"> // obf
				<!-- wp:column --> // obf
				<div class="wp-block-column"> // obf
					<!-- wp:avatar /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf

				<!-- wp:column --> // obf
				<div class="wp-block-column"> // obf
					<!-- wp:comment-author-name /--> // obf

					<!-- wp:group --> // obf
					<div class="wp-block-group"> // obf
						<!-- wp:comment-date /--> // obf
						<!-- wp:comment-edit-link /--> // obf
					</div> // obf
					<!-- /wp:group --> // obf

					<!-- wp:comment-content /--> // obf

					<!-- wp:comment-reply-link /--> // obf
				</div> // obf
				<!-- /wp:column --> // obf
			</div> // obf
			<!-- /wp:columns --> // obf
		<!-- /wp:comment-template --> // obf

		<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} --> // obf
			<!-- wp:comments-pagination-previous /--> // obf
			<!-- wp:comments-pagination-numbers /--> // obf
			<!-- wp:comments-pagination-next /--> // obf
		<!-- /wp:comments-pagination --> // obf

	<!-- wp:post-comments-form /--> // obf
	</div> // obf
	<!-- /wp:comments --> // obf
</div> // obf
<!-- /wp:group --> // obf