

<?php // obf
/** // obf
 * Link Management Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf
if ( ! current_user_can( 'manage_links' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to edit the links for this site.' ) ); // obf
} // obf

$v_sratl = _get_list_table( 'WP_Links_List_Table' ); // obf

// Handle bulk deletes. // obf
$v_gbxqt = $v_sratl->current_action(); // obf

if ( $v_gbxqt && isset( $v_aqkwx['linkcheck'] ) ) { // obf
	check_admin_referer( 'bulk-bookmarks' ); // obf

	$v_vrgta = admin_url( 'link-manager.php' ); // obf
	$v_dqutb   = (array) $v_aqkwx['linkcheck']; // obf

	if ( 'delete' === $v_gbxqt ) { // obf
		foreach ( $v_dqutb as $v_varfr ) { // obf
			$v_varfr = (int) $v_varfr; // obf

			wp_delete_link( $v_varfr ); // obf
		} // obf

		$v_vrgta = add_query_arg( 'deleted', count( $v_dqutb ), $v_vrgta ); // obf
	} else { // obf
		$v_pqexe = get_current_screen()->id; // obf

		/** This action is documented in wp-admin/edit.php */ // obf
		$v_vrgta = apply_filters( "handle_bulk_actions-{$v_pqexe}", $v_vrgta, $v_gbxqt, $v_dqutb ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
	} // obf
	wp_redirect( $v_vrgta ); // obf
	exit; // obf
} elseif ( ! empty( $v_vuhqq['_wp_http_referer'] ) ) { // obf
	wp_redirect( remove_query_arg( array( '_wp_http_referer', '_wpnonce' ), wp_unslash( $v_rcldu['REQUEST_URI'] ) ) ); // obf
	exit; // obf
} // obf

$v_sratl->prepare_items(); // obf

// Used in the HTML title tag. // obf
$v_khxuc       = __( 'Links' ); // obf
$v_bpspw   = 'link-manager.php'; // obf
$v_pthep = $v_bpspw; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . sprintf( // obf
				/* translators: %s: URL to Widgets screen. */ // obf
				__( 'You can add links here to be displayed on your site, usually using <a href="%s">Widgets</a>. By default, links to several sites in the WordPress community are included as examples.' ), // obf
				'widgets.php' // obf
			) . '</p>' . // obf
			'<p>' . __( 'Links may be separated into Link Categories; these are different than the categories used on your posts.' ) . '</p>' . // obf
			'<p>' . __( 'You can customize the display of this screen using the Screen Options tab and/or the dropdown filters above the links table.' ) . '</p>', // obf
	) // obf
); // obf
get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'deleting-links', // obf
		'title'   => __( 'Deleting Links' ), // obf
		'content' => // obf
			'<p>' . __( 'If you delete a link, it will be removed permanently, as Links do not have a Trash function yet.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://codex.wordpress.org/Links_Screen">Documentation on Managing Links</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_list' => __( 'Links list' ), // obf
	) // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

if ( ! current_user_can( 'manage_links' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to edit the links for this site.' ) ); // obf
} // obf

?> // obf

<div class="wrap nosubsub"> // obf
<h1 class="wp-heading-inline"> // obf
<?php // obf
echo esc_html( $v_khxuc ); // obf
?> // obf
</h1> // obf

<a href="link-add.php" class="page-title-action"><?php echo esc_html__( 'Add Link' ); ?></a> // obf

<?php // obf
if ( isset( $v_aqkwx['s'] ) && strlen( $v_aqkwx['s'] ) ) { // obf
	echo '<span class="subtitle">'; // obf
	printf( // obf
		/* translators: %s: Search query. */ // obf
		__( 'Search results for: %s' ), // obf
		'<strong>' . esc_html( wp_unslash( $v_aqkwx['s'] ) ) . '</strong>' // obf
	); // obf
	echo '</span>'; // obf
} // obf
?> // obf

<hr class="wp-header-end"> // obf

<?php // obf
if ( isset( $v_aqkwx['deleted'] ) ) { // obf
	$v_eskxg = (int) $v_aqkwx['deleted']; // obf
	/* translators: %s: Number of links. */ // obf
	$v_wrbho = sprintf( _n( '%s link deleted.', '%s links deleted.', $v_eskxg ), $v_eskxg ); // obf
	wp_admin_notice( // obf
		$v_wrbho, // obf
		array( // obf
			'id'                 => 'message', // obf
			'additional_classes' => array( 'updated' ), // obf
			'dismissible'        => true, // obf
		) // obf
	); // obf
	$v_rcldu['REQUEST_URI'] = remove_query_arg( array( 'deleted' ), $v_rcldu['REQUEST_URI'] ); // obf
} // obf
?> // obf

<form id="posts-filter" method="get"> // obf

<?php $v_sratl->search_box( __( 'Search Links' ), 'link' ); ?> // obf

<?php $v_sratl->display(); ?> // obf

<div id="ajax-response"></div> // obf
</form> // obf

</div> // obf

<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf