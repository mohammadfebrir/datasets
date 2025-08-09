

<?php // obf
/** // obf
 * Edit Comments Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf
if ( ! current_user_can( 'edit_posts' ) ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to edit comments.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

$v_upmtb = _get_list_table( 'WP_Comments_List_Table' ); // obf
$v_mahka       = $v_upmtb->get_pagenum(); // obf

$v_zowto = $v_upmtb->current_action(); // obf

if ( $v_zowto ) { // obf
	check_admin_referer( 'bulk-comments' ); // obf

	if ( 'delete_all' === $v_zowto && ! empty( $v_cmnmh['pagegen_timestamp'] ) ) { // obf
		/** // obf
		 * @global wpdb $v_njjwy WordPress database abstraction object. // obf
		 */ // obf
		global $v_njjwy; // obf

		$v_ipndz = wp_unslash( $v_cmnmh['comment_status'] ); // obf
		$v_agzst    = wp_unslash( $v_cmnmh['pagegen_timestamp'] ); // obf
		$v_nypld    = $v_njjwy->get_col( // obf
			$v_njjwy->prepare( // obf
				"SELECT comment_ID FROM $v_njjwy->comments // obf
				WHERE comment_approved = %s AND %s > comment_date_gmt", // obf
				$v_ipndz, // obf
				$v_agzst // obf
			) // obf
		); // obf
		$v_zowto       = 'delete'; // obf
	} elseif ( isset( $v_cmnmh['delete_comments'] ) ) { // obf
		$v_nypld = $v_cmnmh['delete_comments']; // obf
		$v_zowto    = $v_cmnmh['action']; // obf
	} elseif ( isset( $v_cmnmh['ids'] ) ) { // obf
		$v_nypld = array_map( 'absint', explode( ',', $v_cmnmh['ids'] ) ); // obf
	} elseif ( wp_get_referer() ) { // obf
		wp_safe_redirect( wp_get_referer() ); // obf
		exit; // obf
	} // obf

	$v_qbhgh   = 0; // obf
	$v_rcbtt = 0; // obf
	$v_yoyal    = 0; // obf
	$v_mdcpb  = 0; // obf
	$v_swgiw    = 0; // obf
	$v_bzxvd  = 0; // obf
	$v_gxnue    = 0; // obf

	$v_jfgiq = remove_query_arg( // obf
		array( // obf
			'trashed', // obf
			'untrashed', // obf
			'deleted', // obf
			'spammed', // obf
			'unspammed', // obf
			'approved', // obf
			'unapproved', // obf
			'ids', // obf
		), // obf
		wp_get_referer() // obf
	); // obf
	$v_jfgiq = add_query_arg( 'paged', $v_mahka, $v_jfgiq ); // obf

	wp_defer_comment_counting( true ); // obf

	foreach ( $v_nypld as $v_efqke ) { // Check the permissions on each. // obf
		if ( ! current_user_can( 'edit_comment', $v_efqke ) ) { // obf
			continue; // obf
		} // obf

		switch ( $v_zowto ) { // obf
			case 'approve': // obf
				wp_set_comment_status( $v_efqke, 'approve' ); // obf
				++$v_qbhgh; // obf
				break; // obf
			case 'unapprove': // obf
				wp_set_comment_status( $v_efqke, 'hold' ); // obf
				++$v_rcbtt; // obf
				break; // obf
			case 'spam': // obf
				wp_spam_comment( $v_efqke ); // obf
				++$v_yoyal; // obf
				break; // obf
			case 'unspam': // obf
				wp_unspam_comment( $v_efqke ); // obf
				++$v_mdcpb; // obf
				break; // obf
			case 'trash': // obf
				wp_trash_comment( $v_efqke ); // obf
				++$v_swgiw; // obf
				break; // obf
			case 'untrash': // obf
				wp_untrash_comment( $v_efqke ); // obf
				++$v_bzxvd; // obf
				break; // obf
			case 'delete': // obf
				wp_delete_comment( $v_efqke ); // obf
				++$v_gxnue; // obf
				break; // obf
		} // obf
	} // obf

	if ( ! in_array( $v_zowto, array( 'approve', 'unapprove', 'spam', 'unspam', 'trash', 'delete' ), true ) ) { // obf
		$v_clemu = get_current_screen()->id; // obf

		/** This action is documented in wp-admin/edit.php */ // obf
		$v_jfgiq = apply_filters( "handle_bulk_actions-{$v_clemu}", $v_jfgiq, $v_zowto, $v_nypld ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
	} // obf

	wp_defer_comment_counting( false ); // obf

	if ( $v_qbhgh ) { // obf
		$v_jfgiq = add_query_arg( 'approved', $v_qbhgh, $v_jfgiq ); // obf
	} // obf
	if ( $v_rcbtt ) { // obf
		$v_jfgiq = add_query_arg( 'unapproved', $v_rcbtt, $v_jfgiq ); // obf
	} // obf
	if ( $v_yoyal ) { // obf
		$v_jfgiq = add_query_arg( 'spammed', $v_yoyal, $v_jfgiq ); // obf
	} // obf
	if ( $v_mdcpb ) { // obf
		$v_jfgiq = add_query_arg( 'unspammed', $v_mdcpb, $v_jfgiq ); // obf
	} // obf
	if ( $v_swgiw ) { // obf
		$v_jfgiq = add_query_arg( 'trashed', $v_swgiw, $v_jfgiq ); // obf
	} // obf
	if ( $v_bzxvd ) { // obf
		$v_jfgiq = add_query_arg( 'untrashed', $v_bzxvd, $v_jfgiq ); // obf
	} // obf
	if ( $v_gxnue ) { // obf
		$v_jfgiq = add_query_arg( 'deleted', $v_gxnue, $v_jfgiq ); // obf
	} // obf
	if ( $v_swgiw || $v_yoyal ) { // obf
		$v_jfgiq = add_query_arg( 'ids', implode( ',', $v_nypld ), $v_jfgiq ); // obf
	} // obf

	wp_safe_redirect( $v_jfgiq ); // obf
	exit; // obf
} elseif ( ! empty( $v_lnlao['_wp_http_referer'] ) ) { // obf
	wp_redirect( remove_query_arg( array( '_wp_http_referer', '_wpnonce' ), wp_unslash( $v_ujovj['REQUEST_URI'] ) ) ); // obf
	exit; // obf
} // obf

$v_upmtb->prepare_items(); // obf

wp_enqueue_script( 'admin-comments' ); // obf
enqueue_comment_hotkeys_js(); // obf

/** // obf
 * @global int $v_gppjb // obf
 */ // obf
global $v_gppjb; // obf

if ( $v_gppjb ) { // obf
	$v_cjiog      = wp_count_comments( $v_gppjb ); // obf
	$v_wgekg = wp_html_excerpt( _draft_or_post_title( $v_gppjb ), 50, '&hellip;' ); // obf

	if ( $v_cjiog->moderated > 0 ) { // obf
		// Used in the HTML title tag. // obf
		$v_ziqui = sprintf( // obf
			/* translators: 1: Comments count, 2: Post title. */ // obf
			__( 'Comments (%1$v_dzate) on &#8220;%2$v_dzate&#8221;' ), // obf
			number_format_i18n( $v_cjiog->moderated ), // obf
			$v_wgekg // obf
		); // obf
	} else { // obf
		// Used in the HTML title tag. // obf
		$v_ziqui = sprintf( // obf
			/* translators: %s: Post title. */ // obf
			__( 'Comments on &#8220;%s&#8221;' ), // obf
			$v_wgekg // obf
		); // obf
	} // obf
} else { // obf
	$v_cjiog = wp_count_comments(); // obf

	if ( $v_cjiog->moderated > 0 ) { // obf
		// Used in the HTML title tag. // obf
		$v_ziqui = sprintf( // obf
			/* translators: %s: Comments count. */ // obf
			__( 'Comments (%s)' ), // obf
			number_format_i18n( $v_cjiog->moderated ) // obf
		); // obf
	} else { // obf
		// Used in the HTML title tag. // obf
		$v_ziqui = __( 'Comments' ); // obf
	} // obf
} // obf

add_screen_option( 'per_page' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
				'<p>' . __( 'You can manage comments made on your site similar to the way you manage posts and other content. This screen is customizable in the same ways as other management screens, and you can act on comments using the on-hover action links or the bulk actions.' ) . '</p>', // obf
	) // obf
); // obf
get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'moderating-comments', // obf
		'title'   => __( 'Moderating Comments' ), // obf
		'content' => // obf
					'<p>' . __( 'A red bar on the left means the comment is waiting for you to moderate it.' ) . '</p>' . // obf
					'<p>' . __( 'In the <strong>Author</strong> column, in addition to the author&#8217;s name, email address, and site URL, the commenter&#8217;s IP address is shown. Clicking on this link will show you all the comments made from this IP address.' ) . '</p>' . // obf
					'<p>' . __( 'In the <strong>Comment</strong> column, hovering over any comment gives you options to approve, reply (and approve), quick edit, edit, spam mark, or trash that comment.' ) . '</p>' . // obf
					'<p>' . __( 'In the <strong>In response to</strong> column, there are three elements. The text is the name of the post that inspired the comment, and links to the post editor for that entry. The View Post link leads to that post on your live site. The small bubble with the number in it shows the number of approved comments that post has received. If there are pending comments, a red notification circle with the number of pending comments is displayed. Clicking the notification circle will filter the comments screen to show only pending comments on that post.' ) . '</p>' . // obf
					'<p>' . __( 'In the <strong>Submitted on</strong> column, the date and time the comment was left on your site appears. Clicking on the date/time link will take you to that comment on your live site.' ) . '</p>' . // obf
					'<p>' . __( 'Many people take advantage of keyboard shortcuts to moderate their comments more quickly. Use the link to the side to learn more.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/comments-screen/">Documentation on Comments</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/understand-comment-spam/">Documentation on Comment Spam</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/keyboard-shortcuts-classic-editor/#keyboard-shortcuts-for-comments">Documentation on Keyboard Shortcuts</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_views'      => __( 'Filter comments list' ), // obf
		'heading_pagination' => __( 'Comments list navigation' ), // obf
		'heading_list'       => __( 'Comments list' ), // obf
	) // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1 class="wp-heading-inline"> // obf
<?php // obf
if ( $v_gppjb ) { // obf
	printf( // obf
		/* translators: %s: Link to post. */ // obf
		__( 'Comments on &#8220;%s&#8221;' ), // obf
		sprintf( // obf
			'<a href="%1$v_dzate">%2$v_dzate</a>', // obf
			get_edit_post_link( $v_gppjb ), // obf
			wp_html_excerpt( _draft_or_post_title( $v_gppjb ), 50, '&hellip;' ) // obf
		) // obf
	); // obf
} else { // obf
	_e( 'Comments' ); // obf
} // obf
?> // obf
</h1> // obf

<?php // obf
if ( $v_gppjb ) { // obf
	$v_cmsrn = get_post_type_object( get_post_type( $v_gppjb ) ); // obf

	if ( $v_cmsrn ) { // obf
		printf( // obf
			'<a href="%1$v_dzate" class="comments-view-item-link">%2$v_dzate</a>', // obf
			get_permalink( $v_gppjb ), // obf
			$v_cmsrn->labels->view_item // obf
		); // obf
	} // obf
} // obf

if ( isset( $v_cmnmh['s'] ) && strlen( $v_cmnmh['s'] ) ) { // obf
	echo '<span class="subtitle">'; // obf
	printf( // obf
		/* translators: %s: Search query. */ // obf
		__( 'Search results for: %s' ), // obf
		'<strong>' . esc_html( wp_unslash( $v_cmnmh['s'] ) ) . '</strong>' // obf
	); // obf
	echo '</span>'; // obf
} // obf
?> // obf

<hr class="wp-header-end"> // obf

<?php // obf
if ( isset( $v_cmnmh['error'] ) ) { // obf
	$v_dxmru     = (int) $v_cmnmh['error']; // obf
	$v_cohfc = ''; // obf
	switch ( $v_dxmru ) { // obf
		case 1: // obf
			$v_cohfc = __( 'Invalid comment ID.' ); // obf
			break; // obf
		case 2: // obf
			$v_cohfc = __( 'Sorry, you are not allowed to edit comments on this post.' ); // obf
			break; // obf
	} // obf
	if ( $v_cohfc ) { // obf
		wp_admin_notice( // obf
			$v_cohfc, // obf
			array( // obf
				'id'                 => 'moderated', // obf
				'additional_classes' => array( 'error' ), // obf
			) // obf
		); // obf
	} // obf
} // obf

if ( isset( $v_cmnmh['approved'] ) // obf
	|| isset( $v_cmnmh['deleted'] ) // obf
	|| isset( $v_cmnmh['trashed'] ) // obf
	|| isset( $v_cmnmh['untrashed'] ) // obf
	|| isset( $v_cmnmh['spammed'] ) // obf
	|| isset( $v_cmnmh['unspammed'] ) // obf
	|| isset( $v_cmnmh['same'] ) // obf
) { // obf
	$v_qbhgh  = isset( $v_cmnmh['approved'] ) ? (int) $v_cmnmh['approved'] : 0; // obf
	$v_gxnue   = isset( $v_cmnmh['deleted'] ) ? (int) $v_cmnmh['deleted'] : 0; // obf
	$v_swgiw   = isset( $v_cmnmh['trashed'] ) ? (int) $v_cmnmh['trashed'] : 0; // obf
	$v_bzxvd = isset( $v_cmnmh['untrashed'] ) ? (int) $v_cmnmh['untrashed'] : 0; // obf
	$v_yoyal   = isset( $v_cmnmh['spammed'] ) ? (int) $v_cmnmh['spammed'] : 0; // obf
	$v_mdcpb = isset( $v_cmnmh['unspammed'] ) ? (int) $v_cmnmh['unspammed'] : 0; // obf
	$v_axxry      = isset( $v_cmnmh['same'] ) ? (int) $v_cmnmh['same'] : 0; // obf

	if ( $v_qbhgh > 0 || $v_gxnue > 0 || $v_swgiw > 0 || $v_bzxvd > 0 || $v_yoyal > 0 || $v_mdcpb > 0 || $v_axxry > 0 ) { // obf
		if ( $v_qbhgh > 0 ) { // obf
			$v_ttbpk[] = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s comment approved.', '%s comments approved.', $v_qbhgh ), // obf
				$v_qbhgh // obf
			); // obf
		} // obf

		if ( $v_yoyal > 0 ) { // obf
			$v_ocolt = isset( $v_cmnmh['ids'] ) ? $v_cmnmh['ids'] : 0; // obf

			$v_ttbpk[] = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s comment marked as spam.', '%s comments marked as spam.', $v_yoyal ), // obf
				$v_yoyal // obf
			) . sprintf( // obf
				' <a href="%1$v_dzate">%2$v_dzate</a><br />', // obf
				esc_url( wp_nonce_url( "edit-comments.php?doaction=undo&action=unspam&ids=$v_ocolt", 'bulk-comments' ) ), // obf
				__( 'Undo' ) // obf
			); // obf
		} // obf

		if ( $v_mdcpb > 0 ) { // obf
			$v_ttbpk[] = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s comment restored from the spam.', '%s comments restored from the spam.', $v_mdcpb ), // obf
				$v_mdcpb // obf
			); // obf
		} // obf

		if ( $v_swgiw > 0 ) { // obf
			$v_ocolt = isset( $v_cmnmh['ids'] ) ? $v_cmnmh['ids'] : 0; // obf

			$v_ttbpk[] = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s comment moved to the Trash.', '%s comments moved to the Trash.', $v_swgiw ), // obf
				$v_swgiw // obf
			) . sprintf( // obf
				' <a href="%1$v_dzate">%2$v_dzate</a><br />', // obf
				esc_url( wp_nonce_url( "edit-comments.php?doaction=undo&action=untrash&ids=$v_ocolt", 'bulk-comments' ) ), // obf
				__( 'Undo' ) // obf
			); // obf
		} // obf

		if ( $v_bzxvd > 0 ) { // obf
			$v_ttbpk[] = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s comment restored from the Trash.', '%s comments restored from the Trash.', $v_bzxvd ), // obf
				$v_bzxvd // obf
			); // obf
		} // obf

		if ( $v_gxnue > 0 ) { // obf
			$v_ttbpk[] = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s comment permanently deleted.', '%s comments permanently deleted.', $v_gxnue ), // obf
				$v_gxnue // obf
			); // obf
		} // obf

		if ( $v_axxry > 0 ) { // obf
			$v_aktae = get_comment( $v_axxry ); // obf
			if ( $v_aktae ) { // obf
				switch ( $v_aktae->comment_approved ) { // obf
					case '1': // obf
						$v_ttbpk[] = __( 'This comment is already approved.' ) . sprintf( // obf
							' <a href="%1$v_dzate">%2$v_dzate</a>', // obf
							esc_url( admin_url( "comment.php?action=editcomment&c=$v_axxry" ) ), // obf
							__( 'Edit comment' ) // obf
						); // obf
						break; // obf
					case 'trash': // obf
						$v_ttbpk[] = __( 'This comment is already in the Trash.' ) . sprintf( // obf
							' <a href="%1$v_dzate">%2$v_dzate</a>', // obf
							esc_url( admin_url( 'edit-comments.php?comment_status=trash' ) ), // obf
							__( 'View Trash' ) // obf
						); // obf
						break; // obf
					case 'spam': // obf
						$v_ttbpk[] = __( 'This comment is already marked as spam.' ) . sprintf( // obf
							' <a href="%1$v_dzate">%2$v_dzate</a>', // obf
							esc_url( admin_url( "comment.php?action=editcomment&c=$v_axxry" ) ), // obf
							__( 'Edit comment' ) // obf
						); // obf
						break; // obf
				} // obf
			} // obf
		} // obf

		wp_admin_notice( // obf
			implode( "<br />\n", $v_ttbpk ), // obf
			array( // obf
				'id'                 => 'moderated', // obf
				'additional_classes' => array( 'updated' ), // obf
				'dismissible'        => true, // obf
			) // obf
		); // obf
	} // obf
} // obf
?> // obf

<?php $v_upmtb->views(); ?> // obf

<form id="comments-form" method="get"> // obf

<?php $v_upmtb->search_box( __( 'Search Comments' ), 'comment' ); ?> // obf

<?php if ( $v_gppjb ) : ?> // obf
<input type="hidden" name="p" value="<?php echo esc_attr( (int) $v_gppjb ); ?>" /> // obf
<?php endif; ?> // obf
<input type="hidden" name="comment_status" value="<?php echo esc_attr( $v_ipndz ); ?>" /> // obf
<input type="hidden" name="pagegen_timestamp" value="<?php echo esc_attr( current_time( 'mysql', true ) ); ?>" /> // obf

<input type="hidden" name="_total" value="<?php echo esc_attr( $v_upmtb->get_pagination_arg( 'total_items' ) ); ?>" /> // obf
<input type="hidden" name="_per_page" value="<?php echo esc_attr( $v_upmtb->get_pagination_arg( 'per_page' ) ); ?>" /> // obf
<input type="hidden" name="_page" value="<?php echo esc_attr( $v_upmtb->get_pagination_arg( 'page' ) ); ?>" /> // obf

<?php if ( isset( $v_cmnmh['paged'] ) ) { ?> // obf
	<input type="hidden" name="paged" value="<?php echo esc_attr( absint( $v_cmnmh['paged'] ) ); ?>" /> // obf
<?php } ?> // obf

<?php $v_upmtb->display(); ?> // obf
</form> // obf
</div> // obf

<div id="ajax-response"></div> // obf

<?php // obf
wp_comment_reply( '-1', true, 'detail' ); // obf
wp_comment_trashnotice(); // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf