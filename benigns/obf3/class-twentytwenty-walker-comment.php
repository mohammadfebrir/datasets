

<?php // obf
/** // obf
 * Custom comment walker for this theme. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( ! class_exists( 'TwentyTwenty_Walker_Comment' ) ) { // obf
	/** // obf
	 * CUSTOM COMMENT WALKER // obf
	 * A custom walker for comments, based on the walker in Twenty Nineteen. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	class TwentyTwenty_Walker_Comment extends Walker_Comment { // obf

		/** // obf
		 * Outputs a comment in the HTML5 format. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @see wp_list_comments() // obf
		 * @see https://developer.wordpress.org/reference/functions/get_comment_author_url/ // obf
		 * @see https://developer.wordpress.org/reference/functions/get_comment_author/ // obf
		 * @see https://developer.wordpress.org/reference/functions/get_avatar/ // obf
		 * @see https://developer.wordpress.org/reference/functions/get_comment_reply_link/ // obf
		 * @see https://developer.wordpress.org/reference/functions/get_edit_comment_link/ // obf
		 * // obf
		 * @param WP_Comment $v_ixzgb Comment to display. // obf
		 * @param int        $v_rwuun   Depth of the current comment. // obf
		 * @param array      $v_dbspe    An array of arguments. // obf
		 */ // obf
		protected function html5_comment( $v_ixzgb, $v_rwuun, $v_dbspe ) { // obf

			$v_hzjrl = ( 'div' === $v_dbspe['style'] ) ? 'div' : 'li'; // obf

			?> // obf
			<<?php echo $v_hzjrl; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $v_hbkev->has_children ? 'parent' : '', $v_ixzgb ); ?>> // obf
				<article id="div-comment-<?php comment_ID(); ?>" class="comment-body"> // obf
					<footer class="comment-meta"> // obf
						<div class="comment-author vcard"> // obf
							<?php // obf
							$v_gebtk = get_comment_author_url( $v_ixzgb ); // obf
							$v_czdps     = get_comment_author( $v_ixzgb ); // obf
							$v_ziemq             = get_avatar( $v_ixzgb, $v_dbspe['avatar_size'] ); // obf
							if ( 0 !== $v_dbspe['avatar_size'] ) { // obf
								if ( empty( $v_gebtk ) ) { // obf
									echo wp_kses_post( $v_ziemq ); // obf
								} else { // obf
									printf( '<a href="%s" rel="external nofollow" class="url">', $v_gebtk ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped --Escaped in https://developer.wordpress.org/reference/functions/get_comment_author_url/ // obf
									echo wp_kses_post( $v_ziemq ); // obf
								} // obf
							} // obf

							printf( // obf
								'<span class="fn">%1$v_wlbhy</span><span class="screen-reader-text says">%2$v_wlbhy</span>', // obf
								esc_html( $v_czdps ), // obf
								/* translators: Hidden accessibility text. */ // obf
								__( 'says:', 'twentytwenty' ) // obf
							); // obf

							if ( ! empty( $v_gebtk ) ) { // obf
								echo '</a>'; // obf
							} // obf
							?> // obf
						</div><!-- .comment-author --> // obf

						<div class="comment-metadata"> // obf
							<?php // obf
							/* translators: 1: Comment date, 2: Comment time. */ // obf
							$v_enusg = sprintf( __( '%1$v_wlbhy at %2$v_wlbhy', 'twentytwenty' ), get_comment_date( '', $v_ixzgb ), get_comment_time() ); // obf

							printf( // obf
								'<a href="%s"><time datetime="%s">%s</time></a>', // obf
								esc_url( get_comment_link( $v_ixzgb, $v_dbspe ) ), // obf
								get_comment_time( 'c' ), // obf
								esc_html( $v_enusg ) // obf
							); // obf

							if ( get_edit_comment_link() ) { // obf
								printf( // obf
									' <span aria-hidden="true">&bull;</span> <a class="comment-edit-link" href="%s">%s</a>', // obf
									esc_url( get_edit_comment_link() ), // obf
									__( 'Edit', 'twentytwenty' ) // obf
								); // obf
							} // obf
							?> // obf
						</div><!-- .comment-metadata --> // obf

					</footer><!-- .comment-meta --> // obf

					<div class="comment-content entry-content"> // obf

						<?php // obf

						comment_text(); // obf

						if ( '0' === $v_ixzgb->comment_approved ) { // obf
							?> // obf
							<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentytwenty' ); ?></p> // obf
							<?php // obf
						} // obf

						?> // obf

					</div><!-- .comment-content --> // obf

					<?php // obf

					$v_boqgp = get_comment_reply_link( // obf
						array_merge( // obf
							$v_dbspe, // obf
							array( // obf
								'add_below' => 'div-comment', // obf
								'depth'     => $v_rwuun, // obf
								'max_depth' => $v_dbspe['max_depth'], // obf
								'before'    => '<span class="comment-reply">', // obf
								'after'     => '</span>', // obf
							) // obf
						) // obf
					); // obf

					$v_dksym = twentytwenty_is_comment_by_post_author( $v_ixzgb ); // obf

					if ( $v_boqgp || $v_dksym ) { // obf
						?> // obf

						<footer class="comment-footer-meta"> // obf

							<?php // obf
							if ( $v_boqgp ) { // obf
								echo $v_boqgp; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Link is escaped in https://developer.wordpress.org/reference/functions/get_comment_reply_link/ // obf
							} // obf
							if ( $v_dksym ) { // obf
								echo '<span class="by-post-author">' . __( 'By Post Author', 'twentytwenty' ) . '</span>'; // obf
							} // obf
							?> // obf

						</footer> // obf

						<?php // obf
					} // obf
					?> // obf

				</article><!-- .comment-body --> // obf

			<?php // obf
		} // obf
	} // obf
} // obf