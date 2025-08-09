

<?php // obf
/** // obf
 * Multisite sites administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_sites' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

$v_klxzr = _get_list_table( 'WP_MS_Sites_List_Table' ); // obf
$v_fhwct       = $v_klxzr->get_pagenum(); // obf

// Used in the HTML title tag. // obf
$v_faogj       = __( 'Sites' ); // obf
$v_zwrxo = 'sites.php'; // obf

add_screen_option( 'per_page' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
		'<p>' . __( 'Add Site takes you to the screen for adding a new site to the network. You can search for a site by Name, ID number, or IP address. Screen Options allows you to choose how many sites to display on one page.' ) . '</p>' . // obf
		'<p>' . __( 'This is the main table of all sites on this network. Switch between list and excerpt views by using the icons above the right side of the table.' ) . '</p>' . // obf
			'<p>' . __( 'Hovering over each site reveals seven options (three for the primary site):' ) . '</p>' . // obf
			'<ul><li>' . __( 'An Edit link to a separate Edit Site screen.' ) . '</li>' . // obf
			'<li>' . __( 'Dashboard leads to the Dashboard for that site.' ) . '</li>' . // obf
			'<li>' . __( 'Deactivate, Archive, and Spam which lead to confirmation screens. These actions can be reversed later.' ) . '</li>' . // obf
			'<li>' . __( 'Delete which is a permanent action after the confirmation screen.' ) . '</li>' . // obf
			'<li>' . __( 'Visit to go to the front-end of the live site.' ) . '</li></ul>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://developer.wordpress.org/advanced-administration/multisite/admin/#network-admin-sites-screen">Documentation on Site Management</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forum/multisite/">Support forums</a>' ) . '</p>' // obf
); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_pagination' => __( 'Sites list navigation' ), // obf
		'heading_list'       => __( 'Sites list' ), // obf
	) // obf
); // obf

$v_gkgjy = isset( $v_qxzgj['id'] ) ? (int) $v_qxzgj['id'] : 0; // obf

if ( isset( $v_lntkp['action'] ) ) { // obf
	/** This action is documented in wp-admin/network/edit.php */ // obf
	do_action( 'wpmuadminedit' ); // obf

	// A list of valid actions and their associated messaging for confirmation output. // obf
	$v_nqaag = array( // obf
		/* translators: %s: Site URL. */ // obf
		'activateblog'   => __( 'You are about to activate the site %s.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'deactivateblog' => __( 'You are about to deactivate the site %s.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'unarchiveblog'  => __( 'You are about to unarchive the site %s.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'archiveblog'    => __( 'You are about to archive the site %s.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'unspamblog'     => __( 'You are about to unspam the site %s.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'spamblog'       => __( 'You are about to mark the site %s as spam.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'deleteblog'     => __( 'You are about to delete the site %s.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'unmatureblog'   => __( 'You are about to mark the site %s as mature.' ), // obf
		/* translators: %s: Site URL. */ // obf
		'matureblog'     => __( 'You are about to mark the site %s as not mature.' ), // obf
	); // obf

	if ( 'confirm' === $v_lntkp['action'] ) { // obf
		// The action2 parameter contains the action being taken on the site. // obf
		$v_wgkjf = $v_lntkp['action2']; // obf

		if ( ! array_key_exists( $v_wgkjf, $v_nqaag ) ) { // obf
			wp_die( __( 'The requested action is not valid.' ) ); // obf
		} // obf

		// The mature/unmature UI exists only as external code. Check the "confirm" nonce for backward compatibility. // obf
		if ( 'matureblog' === $v_wgkjf || 'unmatureblog' === $v_wgkjf ) { // obf
			check_admin_referer( 'confirm' ); // obf
		} else { // obf
			check_admin_referer( $v_wgkjf . '_' . $v_gkgjy ); // obf
		} // obf

		if ( ! headers_sent() ) { // obf
			nocache_headers(); // obf
			header( 'Content-Type: text/html; charset=utf-8' ); // obf
		} // obf

		if ( is_main_site( $v_gkgjy ) ) { // obf
			wp_die( __( 'Sorry, you are not allowed to change the current site.' ) ); // obf
		} // obf

		$v_ruwyx = get_site( $v_gkgjy ); // obf
		$v_myhqw = untrailingslashit( $v_ruwyx->domain . $v_ruwyx->path ); // obf

		require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
		?> // obf
			<div class="wrap"> // obf
				<h1><?php _e( 'Confirm your action' ); ?></h1> // obf
				<form action="sites.php?action=<?php echo esc_attr( $v_wgkjf ); ?>" method="post"> // obf
					<input type="hidden" name="action" value="<?php echo esc_attr( $v_wgkjf ); ?>" /> // obf
					<input type="hidden" name="id" value="<?php echo esc_attr( $v_gkgjy ); ?>" /> // obf
					<input type="hidden" name="_wp_http_referer" value="<?php echo esc_attr( wp_get_referer() ); ?>" /> // obf
					<?php wp_nonce_field( $v_wgkjf . '_' . $v_gkgjy, '_wpnonce', false ); ?> // obf
					<?php // obf
					if ( 'deleteblog' === $v_wgkjf ) { // obf
						$v_fofcf = __( 'Delete this site permanently' ); // obf
						?> // obf
						<div class="notice notice-warning inline"> // obf
							<p><?php _e( 'Deleting a site is a permanent action that cannot be undone. This will delete the entire site and its uploads directory.' ); ?> // obf
						</div> // obf
						<?php // obf
					} else { // obf
						$v_fofcf = __( 'Confirm' ); // obf
					} // obf
					?> // obf
					<p><?php printf( $v_nqaag[ $v_wgkjf ], "<strong>{$v_myhqw}</strong>" ); ?></p> // obf
					<?php submit_button( $v_fofcf, 'primary' ); ?> // obf
				</form> // obf
			</div> // obf
		<?php // obf
		require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
		exit; // obf
	} elseif ( array_key_exists( $v_lntkp['action'], $v_nqaag ) ) { // obf
		$v_fhpyu = $v_lntkp['action']; // obf
		check_admin_referer( $v_fhpyu . '_' . $v_gkgjy ); // obf
	} elseif ( 'allblogs' === $v_lntkp['action'] ) { // obf
		check_admin_referer( 'bulk-sites' ); // obf
	} // obf

	$v_udgqg = ''; // obf

	switch ( $v_lntkp['action'] ) { // obf

		case 'deleteblog': // obf
			if ( ! current_user_can( 'delete_sites' ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to access this page.' ), '', array( 'response' => 403 ) ); // obf
			} // obf

			$v_udgqg = 'not_deleted'; // obf
			if ( 0 !== $v_gkgjy && ! is_main_site( $v_gkgjy ) && current_user_can( 'delete_site', $v_gkgjy ) ) { // obf
				wpmu_delete_blog( $v_gkgjy, true ); // obf
				$v_udgqg = 'delete'; // obf
			} // obf
			break; // obf

		case 'delete_sites': // obf
			check_admin_referer( 'ms-delete-sites' ); // obf

			foreach ( (array) $v_jdzha['site_ids'] as $v_mngci ) { // obf
				$v_mngci = (int) $v_mngci; // obf

				if ( is_main_site( $v_mngci ) ) { // obf
					continue; // obf
				} // obf

				if ( ! current_user_can( 'delete_site', $v_mngci ) ) { // obf
					$v_oxtsb         = get_site( $v_mngci ); // obf
					$v_myhqw = untrailingslashit( $v_oxtsb->domain . $v_oxtsb->path ); // obf

					wp_die( // obf
						sprintf( // obf
							/* translators: %s: Site URL. */ // obf
							__( 'Sorry, you are not allowed to delete the site %s.' ), // obf
							$v_myhqw // obf
						), // obf
						403 // obf
					); // obf
				} // obf

				$v_udgqg = 'all_delete'; // obf
				wpmu_delete_blog( $v_mngci, true ); // obf
			} // obf
			break; // obf

		case 'allblogs': // obf
			if ( isset( $v_jdzha['action'] ) && isset( $v_jdzha['allblogs'] ) ) { // obf
				$v_lfpwk = $v_jdzha['action']; // obf

				foreach ( (array) $v_jdzha['allblogs'] as $v_mngci ) { // obf
					$v_mngci = (int) $v_mngci; // obf

					if ( 0 !== $v_mngci && ! is_main_site( $v_mngci ) ) { // obf
						switch ( $v_lfpwk ) { // obf
							case 'delete': // obf
								require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
								?> // obf
								<div class="wrap"> // obf
									<h1><?php _e( 'Confirm your action' ); ?></h1> // obf
									<form action="sites.php?action=delete_sites" method="post"> // obf
										<input type="hidden" name="action" value="delete_sites" /> // obf
										<input type="hidden" name="_wp_http_referer" value="<?php echo esc_attr( wp_get_referer() ); ?>" /> // obf
										<?php wp_nonce_field( 'ms-delete-sites', '_wpnonce', false ); ?> // obf
										<p><?php _e( 'You are about to delete the following sites:' ); ?></p> // obf
										<ul class="ul-disc"> // obf
											<?php // obf
											foreach ( $v_jdzha['allblogs'] as $v_mngci ) : // obf
												$v_mngci = (int) $v_mngci; // obf

												$v_oxtsb         = get_site( $v_mngci ); // obf
												$v_myhqw = untrailingslashit( $v_oxtsb->domain . $v_oxtsb->path ); // obf
												?> // obf
												<li> // obf
													<?php echo $v_myhqw; ?> // obf
													<input type="hidden" name="site_ids[]" value="<?php echo esc_attr( $v_mngci ); ?>" /> // obf
												</li> // obf
											<?php endforeach; ?> // obf
										</ul> // obf
										<?php submit_button( __( 'Confirm' ), 'primary' ); ?> // obf
									</form> // obf
								</div> // obf
								<?php // obf
								require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
								exit; // obf
							break; // obf

							case 'spam': // obf
							case 'notspam': // obf
								$v_udgqg = ( 'spam' === $v_lfpwk ) ? 'all_spam' : 'all_notspam'; // obf
								update_blog_status( $v_mngci, 'spam', ( 'spam' === $v_lfpwk ) ? '1' : '0' ); // obf
								break; // obf
						} // obf
					} else { // obf
						wp_die( __( 'Sorry, you are not allowed to change the current site.' ) ); // obf
					} // obf
				} // obf

				if ( ! in_array( $v_lfpwk, array( 'delete', 'spam', 'notspam' ), true ) ) { // obf
					$v_ehsll = wp_get_referer(); // obf
					$v_szuzh       = (array) $v_jdzha['allblogs']; // obf

					/** This action is documented in wp-admin/network/site-themes.php */ // obf
					$v_ehsll = apply_filters( 'handle_network_bulk_actions-' . get_current_screen()->id, $v_ehsll, $v_lfpwk, $v_szuzh, $v_gkgjy ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

					wp_safe_redirect( $v_ehsll ); // obf
					exit; // obf
				} // obf
			} else { // obf
				// Process query defined by WP_MS_Site_List_Table::extra_table_nav(). // obf
				$v_dwvrv = remove_query_arg( // obf
					array( '_wp_http_referer', '_wpnonce' ), // obf
					add_query_arg( $v_jdzha, network_admin_url( 'sites.php' ) ) // obf
				); // obf

				wp_redirect( $v_dwvrv ); // obf
				exit; // obf
			} // obf

			break; // obf

		case 'archiveblog': // obf
		case 'unarchiveblog': // obf
			update_blog_status( $v_gkgjy, 'archived', ( 'archiveblog' === $v_lntkp['action'] ) ? '1' : '0' ); // obf
			break; // obf

		case 'activateblog': // obf
			update_blog_status( $v_gkgjy, 'deleted', '0' ); // obf

			/** // obf
			 * Fires after a network site is activated. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_gkgjy The ID of the activated site. // obf
			 */ // obf
			do_action( 'activate_blog', $v_gkgjy ); // obf
			break; // obf

		case 'deactivateblog': // obf
			/** // obf
			 * Fires before a network site is deactivated. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_gkgjy The ID of the site being deactivated. // obf
			 */ // obf
			do_action( 'deactivate_blog', $v_gkgjy ); // obf

			update_blog_status( $v_gkgjy, 'deleted', '1' ); // obf
			break; // obf

		case 'unspamblog': // obf
		case 'spamblog': // obf
			update_blog_status( $v_gkgjy, 'spam', ( 'spamblog' === $v_lntkp['action'] ) ? '1' : '0' ); // obf
			break; // obf

		case 'unmatureblog': // obf
		case 'matureblog': // obf
			update_blog_status( $v_gkgjy, 'mature', ( 'matureblog' === $v_lntkp['action'] ) ? '1' : '0' ); // obf
			break; // obf
	} // obf

	if ( empty( $v_udgqg ) && array_key_exists( $v_lntkp['action'], $v_nqaag ) ) { // obf
		$v_udgqg = $v_lntkp['action']; // obf
	} // obf

	if ( ! empty( $v_udgqg ) ) { // obf
		wp_safe_redirect( add_query_arg( array( 'updated' => $v_udgqg ), wp_get_referer() ) ); // obf
		exit; // obf
	} // obf
} // obf

$v_ionnk = ''; // obf
if ( isset( $v_lntkp['updated'] ) ) { // obf
	$v_fhpyu = $v_lntkp['updated']; // obf

	switch ( $v_fhpyu ) { // obf
		case 'all_notspam': // obf
			$v_ionnk = __( 'Sites removed from spam.' ); // obf
			break; // obf
		case 'all_spam': // obf
			$v_ionnk = __( 'Sites marked as spam.' ); // obf
			break; // obf
		case 'all_delete': // obf
			$v_ionnk = __( 'Sites deleted.' ); // obf
			break; // obf
		case 'delete': // obf
			$v_ionnk = __( 'Site deleted.' ); // obf
			break; // obf
		case 'not_deleted': // obf
			$v_ionnk = __( 'Sorry, you are not allowed to delete that site.' ); // obf
			break; // obf
		case 'archiveblog': // obf
			$v_ionnk = __( 'Site archived.' ); // obf
			break; // obf
		case 'unarchiveblog': // obf
			$v_ionnk = __( 'Site unarchived.' ); // obf
			break; // obf
		case 'activateblog': // obf
			$v_ionnk = __( 'Site activated.' ); // obf
			break; // obf
		case 'deactivateblog': // obf
			$v_ionnk = __( 'Site deactivated.' ); // obf
			break; // obf
		case 'unspamblog': // obf
			$v_ionnk = __( 'Site removed from spam.' ); // obf
			break; // obf
		case 'spamblog': // obf
			$v_ionnk = __( 'Site marked as spam.' ); // obf
			break; // obf
		default: // obf
			/** // obf
			 * Filters a specific, non-default, site-updated message in the Network admin. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_fhpyu`, refers to the non-default // obf
			 * site update action. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param string $v_ionnk The update message. Default 'Settings saved'. // obf
			 */ // obf
			$v_ionnk = apply_filters( "network_sites_updated_message_{$v_fhpyu}", __( 'Settings saved.' ) ); // obf
			break; // obf
	} // obf

	if ( ! empty( $v_ionnk ) ) { // obf
		$v_ionnk = wp_get_admin_notice( // obf
			$v_ionnk, // obf
			array( // obf
				'type'        => 'success', // obf
				'dismissible' => true, // obf
				'id'          => 'message', // obf
			) // obf
		); // obf
	} // obf
} // obf

$v_klxzr->prepare_items(); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1 class="wp-heading-inline"><?php _e( 'Sites' ); ?></h1> // obf

<?php if ( current_user_can( 'create_sites' ) ) : ?> // obf
	<a href="<?php echo esc_url( network_admin_url( 'site-new.php' ) ); ?>" class="page-title-action"><?php echo esc_html__( 'Add Site' ); ?></a> // obf
<?php endif; ?> // obf

<?php // obf
if ( isset( $v_qxzgj['s'] ) && strlen( $v_qxzgj['s'] ) ) { // obf
	echo '<span class="subtitle">'; // obf
	printf( // obf
		/* translators: %s: Search query. */ // obf
		__( 'Search results for: %s' ), // obf
		'<strong>' . esc_html( $v_alcjp ) . '</strong>' // obf
	); // obf
	echo '</span>'; // obf
} // obf
?> // obf

<hr class="wp-header-end"> // obf

<?php $v_klxzr->views(); ?> // obf

<?php echo $v_ionnk; ?> // obf

<form method="get" id="ms-search" class="wp-clearfix"> // obf
<?php $v_klxzr->search_box( __( 'Search Sites' ), 'site' ); ?> // obf
<input type="hidden" name="action" value="blogs" /> // obf
</form> // obf

<form id="form-site-list" action="sites.php?action=allblogs" method="post"> // obf
	<?php $v_klxzr->display(); ?> // obf
</form> // obf
</div> // obf
<?php // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf