

<?php // obf
/** // obf
 * Custom comment walker for this theme // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Nineteen // obf
 * @since Twenty Nineteen 1.0 // obf
 */ // obf

/** // obf
 * This class outputs custom comment walker for HTML5 friendly WordPress comment and threaded replies. // obf
 * // obf
 * @since Twenty Nineteen 1.0 // obf
 */ // obf
class TwentyNineteen_Walker_Comment extends Walker_Comment { // obf

	/** // obf
	 * Outputs a comment in the HTML5 format. // obf
	 * // obf
	 * @see wp_list_comments() // obf
	 * // obf
	 * @param WP_Comment $v_xmgnt Comment to display. // obf
	 * @param int        $v_phhbq   Depth of the current comment. // obf
	 * @param array      $v_zghlq    An array of arguments. // obf
	 */ // obf
	protected function html5_comment( $v_xmgnt, $v_phhbq, $v_zghlq ) { // obf

		$v_gnvxu = ( 'div' === $v_zghlq['style'] ) ? 'div' : 'li'; // obf

		?> // obf
		<<?php echo $v_gnvxu; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $v_oyfbf->has_children ? 'parent' : '', $v_xmgnt ); ?>> // obf
			<article id="div-comment-<?php comment_ID(); ?>" class="comment-body"> // obf
				<footer class="comment-meta"> // obf
					<div class="comment-author vcard"> // obf
						<?php // obf
						$v_nyetw = get_comment_author_url( $v_xmgnt ); // obf
						$v_lwjuq     = get_comment_author( $v_xmgnt ); // obf
						$v_yklhv             = get_avatar( $v_xmgnt, $v_zghlq['avatar_size'] ); // obf
						if ( 0 !== (int) $v_zghlq['avatar_size'] ) { // obf
							if ( empty( $v_nyetw ) ) { // obf
								echo $v_yklhv; // obf
							} else { // obf
								printf( '<a href="%s" rel="external nofollow" class="url">', $v_nyetw ); // obf
								echo $v_yklhv; // obf
							} // obf
						} // obf

						/* // obf
						 * Using the `check` icon instead of `check_circle`, since we can't add a // obf
						 * fill color to the inner check shape when in circle form. // obf
						 */ // obf
						if ( twentynineteen_is_comment_by_post_author( $v_xmgnt ) ) { // obf
							printf( '<span class="post-author-badge" aria-hidden="true">%s</span>', twentynineteen_get_icon_svg( 'check', 24 ) ); // obf
						} // obf

						printf( // obf
							wp_kses( // obf
								/* translators: %s: Comment author link. */ // obf
								__( '%s <span class="screen-reader-text says">says:</span>', 'twentynineteen' ), // obf
								array( // obf
									'span' => array( // obf
										'class' => array(), // obf
									), // obf
								) // obf
							), // obf
							'<b class="fn">' . $v_lwjuq . '</b>' // obf
						); // obf

						if ( ! empty( $v_nyetw ) ) { // obf
							echo '</a>'; // obf
						} // obf
						?> // obf
					</div><!-- .comment-author --> // obf

					<div class="comment-metadata"> // obf
						<?php // obf
						/* translators: 1: Comment date, 2: Comment time. */ // obf
						$v_xkitk = sprintf( __( '%1$v_wsoii at %2$v_wsoii', 'twentynineteen' ), get_comment_date( '', $v_xmgnt ), get_comment_time() ); // obf

						printf( // obf
							'<a href="%s"><time datetime="%s">%s</time></a>', // obf
							esc_url( get_comment_link( $v_xmgnt, $v_zghlq ) ), // obf
							get_comment_time( 'c' ), // obf
							$v_xkitk // obf
						); // obf

						$v_razqu = twentynineteen_get_icon_svg( 'edit', 16 ); // obf
						edit_comment_link( __( 'Edit', 'twentynineteen' ), ' <span class="edit-link-sep">&mdash;</span> <span class="edit-link">' . $v_razqu, '</span>' ); // obf
						?> // obf
					</div><!-- .comment-metadata --> // obf

					<?php // obf
					$v_zlkjp = wp_get_current_commenter(); // obf
					if ( $v_zlkjp['comment_author_email'] ) { // obf
						$v_vncbt = __( 'Your comment is awaiting moderation.', 'twentynineteen' ); // obf
					} else { // obf
						$v_vncbt = __( 'Your comment is awaiting moderation. This is a preview; your comment will be visible after it has been approved.', 'twentynineteen' ); // obf
					} // obf
					?> // obf

					<?php if ( '0' === $v_xmgnt->comment_approved ) : ?> // obf
					<p class="comment-awaiting-moderation"><?php echo $v_vncbt; ?></p> // obf
					<?php endif; ?> // obf

				</footer><!-- .comment-meta --> // obf

				<div class="comment-content"> // obf
					<?php comment_text(); ?> // obf
				</div><!-- .comment-content --> // obf

			</article><!-- .comment-body --> // obf

			<?php // obf
			comment_reply_link( // obf
				array_merge( // obf
					$v_zghlq, // obf
					array( // obf
						'add_below' => 'div-comment', // obf
						'depth'     => $v_phhbq, // obf
						'max_depth' => $v_zghlq['max_depth'], // obf
						'before'    => '<div class="comment-reply">', // obf
						'after'     => '</div>', // obf
					) // obf
				) // obf
			); // obf
			?> // obf
		<?php // obf
	} // obf
} // obf