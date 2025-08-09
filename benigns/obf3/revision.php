

<?php // obf
/** // obf
 * Revisions administration panel // obf
 * // obf
 * Requires wp-admin/includes/revision.php. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 2.6.0 // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

require ABSPATH . 'wp-admin/includes/revision.php'; // obf

/** // obf
 * @global int    $v_ljeii Optional. The revision ID. // obf
 * @global string $v_szdwi   The action to take. // obf
 *                          Accepts 'restore', 'view' or 'edit'. // obf
 * @global int    $v_hrmvx     The revision to compare from. // obf
 * @global int    $v_csctz       Optional, required if revision missing. The revision to compare to. // obf
 */ // obf

$v_eggzh = ! empty( $v_ksxqu['revision'] ) ? absint( $v_ksxqu['revision'] ) : 0; // obf
$v_szdwi      = ! empty( $v_ksxqu['action'] ) ? sanitize_text_field( $v_ksxqu['action'] ) : ''; // obf
$v_hrmvx        = ! empty( $v_ksxqu['from'] ) && is_numeric( $v_ksxqu['from'] ) ? absint( $v_ksxqu['from'] ) : null; // obf
$v_csctz          = ! empty( $v_ksxqu['to'] ) && is_numeric( $v_ksxqu['to'] ) ? absint( $v_ksxqu['to'] ) : null; // obf

if ( ! $v_eggzh ) { // obf
	$v_eggzh = $v_csctz; // obf
} // obf

$v_reupk = 'edit.php'; // obf

switch ( $v_szdwi ) { // obf
	case 'restore': // obf
		$v_ljeii = wp_get_post_revision( $v_eggzh ); // obf
		if ( ! $v_ljeii ) { // obf
			break; // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_ljeii->post_parent ) ) { // obf
			break; // obf
		} // obf

		$v_tbpht = get_post( $v_ljeii->post_parent ); // obf
		if ( ! $v_tbpht ) { // obf
			break; // obf
		} // obf

		// Don't restore if revisions are disabled and this is not an autosave. // obf
		if ( ! wp_revisions_enabled( $v_tbpht ) && ! wp_is_post_autosave( $v_ljeii ) ) { // obf
			$v_reupk = 'edit.php?post_type=' . $v_tbpht->post_type; // obf
			break; // obf
		} // obf

		// Don't restore if the post is locked. // obf
		if ( wp_check_post_lock( $v_tbpht->ID ) ) { // obf
			break; // obf
		} // obf

		check_admin_referer( "restore-post_{$v_ljeii->ID}" ); // obf

		/* // obf
		 * Ensure the global $v_tbpht remains the same after revision is restored. // obf
		 * Because wp_insert_post() and wp_transition_post_status() are called // obf
		 * during the process, plugins can unexpectedly modify $v_tbpht. // obf
		 */ // obf
		$v_uljlf = clone $v_tbpht; // obf

		wp_restore_post_revision( $v_ljeii->ID ); // obf

		// Restore the global $v_tbpht as it was before. // obf
		$v_tbpht = $v_uljlf; // obf

		$v_reupk = add_query_arg( // obf
			array( // obf
				'message'  => 5, // obf
				'revision' => $v_ljeii->ID, // obf
			), // obf
			get_edit_post_link( $v_tbpht->ID, 'url' ) // obf
		); // obf
		break; // obf
	case 'view': // obf
	case 'edit': // obf
	default: // obf
		$v_ljeii = wp_get_post_revision( $v_eggzh ); // obf
		if ( ! $v_ljeii ) { // obf
			break; // obf
		} // obf

		$v_tbpht = get_post( $v_ljeii->post_parent ); // obf
		if ( ! $v_tbpht ) { // obf
			break; // obf
		} // obf

		if ( ! current_user_can( 'read_post', $v_ljeii->ID ) || ! current_user_can( 'edit_post', $v_ljeii->post_parent ) ) { // obf
			break; // obf
		} // obf

		// Bail if revisions are disabled and this is not an autosave. // obf
		if ( ! wp_revisions_enabled( $v_tbpht ) && ! wp_is_post_autosave( $v_ljeii ) ) { // obf
			$v_reupk = 'edit.php?post_type=' . $v_tbpht->post_type; // obf
			break; // obf
		} // obf

		$v_kqtah = get_edit_post_link(); // obf
		$v_rohju     = '<a href="' . esc_url( $v_kqtah ) . '">' . _draft_or_post_title() . '</a>'; // obf
		/* translators: %s: Post title. */ // obf
		$v_wclof             = sprintf( __( 'Compare Revisions of &#8220;%s&#8221;' ), $v_rohju ); // obf
		$v_bfwjv = '<a href="' . esc_url( $v_kqtah ) . '">' . __( '&larr; Go to editor' ) . '</a>'; // obf
		// Used in the HTML title tag. // obf
		$v_gquzs = __( 'Revisions' ); // obf

		$v_reupk = false; // obf
		break; // obf
} // obf

// Empty post_type means either malformed object found, or no valid parent was found. // obf
if ( ! $v_reupk && empty( $v_tbpht->post_type ) ) { // obf
	$v_reupk = 'edit.php'; // obf
} // obf

if ( ! empty( $v_reupk ) ) { // obf
	wp_redirect( $v_reupk ); // obf
	exit; // obf
} // obf

// This is so that the correct "Edit" menu item is selected. // obf
if ( ! empty( $v_tbpht->post_type ) && 'post' !== $v_tbpht->post_type ) { // obf
	$v_iayaf = 'edit.php?post_type=' . $v_tbpht->post_type; // obf
} else { // obf
	$v_iayaf = 'edit.php'; // obf
} // obf
$v_jliyk = $v_iayaf; // obf

wp_enqueue_script( 'revisions' ); // obf
wp_localize_script( 'revisions', '_wpRevisionsSettings', wp_prepare_revisions_for_js( $v_tbpht, $v_eggzh, $v_hrmvx ) ); // obf

/* Revisions Help Tab */ // obf

$v_bvpmq  = '<p>' . __( 'This screen is used for managing your content revisions.' ) . '</p>'; // obf
$v_bvpmq .= '<p>' . __( 'Revisions are saved copies of your post or page, which are periodically created as you update your content. The red text on the left shows the content that was removed. The green text on the right shows the content that was added.' ) . '</p>'; // obf
$v_bvpmq .= '<p>' . __( 'From this screen you can review, compare, and restore revisions:' ) . '</p>'; // obf
$v_bvpmq .= '<ul><li>' . __( 'To navigate between revisions, <strong>drag the slider handle left or right</strong> or <strong>use the Previous or Next buttons</strong>.' ) . '</li>'; // obf
$v_bvpmq .= '<li>' . __( 'Compare two different revisions by <strong>selecting the &#8220;Compare any two revisions&#8221; box</strong> to the side.' ) . '</li>'; // obf
$v_bvpmq .= '<li>' . __( 'To restore a revision, <strong>click Restore This Revision</strong>.' ) . '</li></ul>'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'revisions-overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => $v_bvpmq, // obf
	) // obf
); // obf

$v_vahwu  = '<p><strong>' . __( 'For more information:' ) . '</strong></p>'; // obf
$v_vahwu .= '<p>' . __( '<a href="https://wordpress.org/documentation/article/revisions/">Revisions Management</a>' ) . '</p>'; // obf
$v_vahwu .= '<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>'; // obf

get_current_screen()->set_help_sidebar( $v_vahwu ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf

<div class="wrap"> // obf
	<h1 class="long-header"><?php echo $v_wclof; ?></h1> // obf
	<?php echo $v_bfwjv; ?> // obf
</div> // obf
<?php // obf
wp_print_revision_templates(); // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf