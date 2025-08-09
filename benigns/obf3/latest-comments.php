

<?php // obf
/** // obf
 * Server-side rendering of the `core/latest-comments` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Get the post title. // obf
 * // obf
 * The post title is fetched and if it is blank then a default string is // obf
 * returned. // obf
 * // obf
 * Copied from `wp-admin/includes/template.php`, but we can't include that // obf
 * file because: // obf
 * // obf
 * 1. It causes bugs with test fixture generation and strange Docker 255 error // obf
 *    codes. // obf
 * 2. It's in the admin; ideally we *shouldn't* be including files from the // obf
 *    admin for a block's output. It's a very small/simple function as well, // obf
 *    so duplicating it isn't too terrible. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param int|WP_Post $v_tnkkb Optional. Post ID or WP_Post object. Default is global $v_tnkkb. // obf
 * @return string The post title if set; "(no title)" if no title is set. // obf
 */ // obf
function wp_latest_comments_draft_or_post_title( $v_tnkkb = 0 ) { // obf
	$v_ieygk = get_the_title( $v_tnkkb ); // obf
	if ( empty( $v_ieygk ) ) { // obf
		$v_ieygk = __( '(no title)' ); // obf
	} // obf
	return $v_ieygk; // obf
} // obf

/** // obf
 * Renders the `core/latest-comments` block on server. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param array $v_nqxgp The block attributes. // obf
 * // obf
 * @return string Returns the post content with latest comments added. // obf
 */ // obf
function render_block_core_latest_comments( $v_nqxgp = array() ) { // obf
	$v_phght = get_comments( // obf
		/** This filter is documented in wp-includes/widgets/class-wp-widget-recent-comments.php */ // obf
		apply_filters( // obf
			'widget_comments_args', // obf
			array( // obf
				'number'      => $v_nqxgp['commentsToShow'], // obf
				'status'      => 'approve', // obf
				'post_status' => 'publish', // obf
			), // obf
			array() // obf
		) // obf
	); // obf

	$v_dedvi = ''; // obf
	if ( ! empty( $v_phght ) ) { // obf
		// Prime the cache for associated posts. This is copied from \WP_Widget_Recent_Comments::widget(). // obf
		$v_bgctk = array_unique( wp_list_pluck( $v_phght, 'comment_post_ID' ) ); // obf
		_prime_post_caches( $v_bgctk, strpos( get_option( 'permalink_structure' ), '%category%' ), false ); // obf

		foreach ( $v_phght as $v_vnpyi ) { // obf
			$v_dedvi .= '<li class="wp-block-latest-comments__comment">'; // obf
			if ( $v_nqxgp['displayAvatar'] ) { // obf
				$v_gyybe = get_avatar( // obf
					$v_vnpyi, // obf
					48, // obf
					'', // obf
					'', // obf
					array( // obf
						'class' => 'wp-block-latest-comments__comment-avatar', // obf
					) // obf
				); // obf
				if ( $v_gyybe ) { // obf
					$v_dedvi .= $v_gyybe; // obf
				} // obf
			} // obf

			$v_dedvi .= '<article>'; // obf
			$v_dedvi .= '<footer class="wp-block-latest-comments__comment-meta">'; // obf
			$v_ltezy         = get_comment_author_url( $v_vnpyi ); // obf
			if ( empty( $v_ltezy ) && ! empty( $v_vnpyi->user_id ) ) { // obf
				$v_ltezy = get_author_posts_url( $v_vnpyi->user_id ); // obf
			} // obf

			$v_lqhfm = ''; // obf
			if ( $v_ltezy ) { // obf
				$v_lqhfm .= '<a class="wp-block-latest-comments__comment-author" href="' . esc_url( $v_ltezy ) . '">' . get_comment_author( $v_vnpyi ) . '</a>'; // obf
			} else { // obf
				$v_lqhfm .= '<span class="wp-block-latest-comments__comment-author">' . get_comment_author( $v_vnpyi ) . '</span>'; // obf
			} // obf

			// `_draft_or_post_title` calls `esc_html()` so we don't need to wrap that call in // obf
			// `esc_html`. // obf
			$v_hkhxk = '<a class="wp-block-latest-comments__comment-link" href="' . esc_url( get_comment_link( $v_vnpyi ) ) . '">' . wp_latest_comments_draft_or_post_title( $v_vnpyi->comment_post_ID ) . '</a>'; // obf

			$v_dedvi .= sprintf( // obf
				/* translators: 1: author name (inside <a> or <span> tag, based on if they have a URL), 2: post title related to this comment */ // obf
				__( '%1$v_etkwi on %2$v_etkwi' ), // obf
				$v_lqhfm, // obf
				$v_hkhxk // obf
			); // obf

			if ( $v_nqxgp['displayDate'] ) { // obf
				$v_dedvi .= sprintf( // obf
					'<time datetime="%1$v_etkwi" class="wp-block-latest-comments__comment-date">%2$v_etkwi</time>', // obf
					esc_attr( get_comment_date( 'c', $v_vnpyi ) ), // obf
					date_i18n( get_option( 'date_format' ), get_comment_date( 'U', $v_vnpyi ) ) // obf
				); // obf
			} // obf
			$v_dedvi .= '</footer>'; // obf
			if ( $v_nqxgp['displayExcerpt'] ) { // obf
				$v_dedvi .= '<div class="wp-block-latest-comments__comment-excerpt">' . wpautop( get_comment_excerpt( $v_vnpyi ) ) . '</div>'; // obf
			} // obf
			$v_dedvi .= '</article></li>'; // obf
		} // obf
	} // obf

	$v_xlizk = array(); // obf
	if ( $v_nqxgp['displayAvatar'] ) { // obf
		$v_xlizk[] = 'has-avatars'; // obf
	} // obf
	if ( $v_nqxgp['displayDate'] ) { // obf
		$v_xlizk[] = 'has-dates'; // obf
	} // obf
	if ( $v_nqxgp['displayExcerpt'] ) { // obf
		$v_xlizk[] = 'has-excerpts'; // obf
	} // obf
	if ( empty( $v_phght ) ) { // obf
		$v_xlizk[] = 'no-comments'; // obf
	} // obf
	$v_vuvgo = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_xlizk ) ) ); // obf

	return ! empty( $v_phght ) ? sprintf( // obf
		'<ol %1$v_etkwi>%2$v_etkwi</ol>', // obf
		$v_vuvgo, // obf
		$v_dedvi // obf
	) : sprintf( // obf
		'<div %1$v_etkwi>%2$v_etkwi</div>', // obf
		$v_vuvgo, // obf
		__( 'No comments to show.' ) // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/latest-comments` block. // obf
 * // obf
 * @since 5.3.0 // obf
 */ // obf
function register_block_core_latest_comments() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/latest-comments', // obf
		array( // obf
			'render_callback' => 'render_block_core_latest_comments', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_latest_comments' ); // obf