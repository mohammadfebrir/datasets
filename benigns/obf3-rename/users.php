

<?php // obf
/** // obf
 * Multisite users administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_network_users' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

if ( isset( $v_euiwn['action'] ) ) { // obf
	/** This action is documented in wp-admin/network/edit.php */ // obf
	do_action( 'wpmuadminedit' ); // obf

	switch ( $v_euiwn['action'] ) { // obf
		case 'deleteuser': // obf
			if ( ! current_user_can( 'manage_network_users' ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
			} // obf

			check_admin_referer( 'deleteuser' ); // obf

			$v_fttje = (int) $v_euiwn['id']; // obf
			if ( $v_fttje > 1 ) { // obf
				$v_ruukm['allusers'] = array( $v_fttje ); // confirm_delete_users() can only handle arrays. // obf

				// Used in the HTML title tag. // obf
				$v_cfxfi       = __( 'Users' ); // obf
				$v_uakjh = 'users.php'; // obf

				require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

				echo '<div class="wrap">'; // obf
				confirm_delete_users( $v_ruukm['allusers'] ); // obf
				echo '</div>'; // obf

				require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
			} else { // obf
				wp_redirect( network_admin_url( 'users.php' ) ); // obf
			} // obf
			exit; // obf

		case 'allusers': // obf
			if ( ! current_user_can( 'manage_network_users' ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
			} // obf

			if ( isset( $v_ruukm['action'] ) && isset( $v_ruukm['allusers'] ) ) { // obf
				check_admin_referer( 'bulk-users-network' ); // obf

				$v_djnfj     = $v_ruukm['action']; // obf
				$v_njarw = ''; // obf

				foreach ( (array) $v_ruukm['allusers'] as $v_bapvm ) { // obf
					if ( ! empty( $v_bapvm ) ) { // obf
						switch ( $v_djnfj ) { // obf
							case 'delete': // obf
								if ( ! current_user_can( 'delete_users' ) ) { // obf
									wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
								} // obf

								// Used in the HTML title tag. // obf
								$v_cfxfi       = __( 'Users' ); // obf
								$v_uakjh = 'users.php'; // obf

								require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

								echo '<div class="wrap">'; // obf
								confirm_delete_users( $v_ruukm['allusers'] ); // obf
								echo '</div>'; // obf

								require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
								exit; // obf

							case 'spam': // obf
								$v_stptb = get_userdata( $v_bapvm ); // obf
								if ( is_super_admin( $v_stptb->ID ) ) { // obf
									wp_die( // obf
										sprintf( // obf
											/* translators: %s: User login. */ // obf
											__( 'Warning! User cannot be modified. The user %s is a network administrator.' ), // obf
											esc_html( $v_stptb->user_login ) // obf
										) // obf
									); // obf
								} // obf

								$v_njarw = 'all_spam'; // obf
								$v_qhvvs        = get_blogs_of_user( $v_bapvm, true ); // obf

								foreach ( (array) $v_qhvvs as $v_yuvth ) { // obf
									if ( ! is_main_site( $v_yuvth->userblog_id ) ) { // Main site is not a spam! // obf
										update_blog_status( $v_yuvth->userblog_id, 'spam', '1' ); // obf
									} // obf
								} // obf

								$v_aajiz         = $v_stptb->to_array(); // obf
								$v_aajiz['spam'] = '1'; // obf

								wp_update_user( $v_aajiz ); // obf
								break; // obf

							case 'notspam': // obf
								$v_stptb = get_userdata( $v_bapvm ); // obf

								$v_njarw = 'all_notspam'; // obf
								$v_qhvvs        = get_blogs_of_user( $v_bapvm, true ); // obf

								foreach ( (array) $v_qhvvs as $v_yuvth ) { // obf
									update_blog_status( $v_yuvth->userblog_id, 'spam', '0' ); // obf
								} // obf

								$v_aajiz         = $v_stptb->to_array(); // obf
								$v_aajiz['spam'] = '0'; // obf

								wp_update_user( $v_aajiz ); // obf
								break; // obf
						} // obf
					} // obf
				} // obf

				if ( ! in_array( $v_djnfj, array( 'delete', 'spam', 'notspam' ), true ) ) { // obf
					$v_nrhkp = wp_get_referer(); // obf
					$v_tpcdu = (array) $v_ruukm['allusers']; // obf

					/** This action is documented in wp-admin/network/site-themes.php */ // obf
					$v_nrhkp = apply_filters( 'handle_network_bulk_actions-' . get_current_screen()->id, $v_nrhkp, $v_djnfj, $v_tpcdu ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

					wp_safe_redirect( $v_nrhkp ); // obf
					exit; // obf
				} // obf

				wp_safe_redirect( // obf
					add_query_arg( // obf
						array( // obf
							'updated' => 'true', // obf
							'action'  => $v_njarw, // obf
						), // obf
						wp_get_referer() // obf
					) // obf
				); // obf
			} else { // obf
				$v_ezglr = network_admin_url( 'users.php' ); // obf

				if ( ! empty( $v_gmshq['paged'] ) ) { // obf
					$v_ezglr = add_query_arg( 'paged', (int) $v_gmshq['paged'], $v_ezglr ); // obf
				} // obf
				wp_redirect( $v_ezglr ); // obf
			} // obf
			exit; // obf

		case 'dodelete': // obf
			check_admin_referer( 'ms-users-delete' ); // obf
			if ( ! ( current_user_can( 'manage_network_users' ) && current_user_can( 'delete_users' ) ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
			} // obf

			if ( ! empty( $v_ruukm['blog'] ) && is_array( $v_ruukm['blog'] ) ) { // obf
				foreach ( $v_ruukm['blog'] as $v_fttje => $v_ohijm ) { // obf
					foreach ( $v_ohijm as $v_jqdgi => $v_bapvm ) { // obf
						if ( ! current_user_can( 'delete_user', $v_fttje ) ) { // obf
							continue; // obf
						} // obf

						if ( ! empty( $v_ruukm['delete'] ) && 'reassign' === $v_ruukm['delete'][ $v_jqdgi ][ $v_fttje ] ) { // obf
							remove_user_from_blog( $v_fttje, $v_jqdgi, (int) $v_bapvm ); // obf
						} else { // obf
							remove_user_from_blog( $v_fttje, $v_jqdgi ); // obf
						} // obf
					} // obf
				} // obf
			} // obf

			$v_lerzg = 0; // obf

			if ( is_array( $v_ruukm['user'] ) && ! empty( $v_ruukm['user'] ) ) { // obf
				foreach ( $v_ruukm['user'] as $v_fttje ) { // obf
					if ( ! current_user_can( 'delete_user', $v_fttje ) ) { // obf
						continue; // obf
					} // obf
					wpmu_delete_user( $v_fttje ); // obf
					++$v_lerzg; // obf
				} // obf
			} // obf

			if ( 1 === $v_lerzg ) { // obf
				$v_dzkkj = 'delete'; // obf
			} else { // obf
				$v_dzkkj = 'all_delete'; // obf
			} // obf

			wp_redirect( // obf
				add_query_arg( // obf
					array( // obf
						'updated' => 'true', // obf
						'action'  => $v_dzkkj, // obf
					), // obf
					network_admin_url( 'users.php' ) // obf
				) // obf
			); // obf
			exit; // obf
	} // obf
} // obf

$v_fhohx = _get_list_table( 'WP_MS_Users_List_Table' ); // obf
$v_owdeb       = $v_fhohx->get_pagenum(); // obf
$v_fhohx->prepare_items(); // obf
$v_nsazi = $v_fhohx->get_pagination_arg( 'total_pages' ); // obf

if ( $v_owdeb > $v_nsazi && $v_nsazi > 0 ) { // obf
	wp_redirect( add_query_arg( 'paged', $v_nsazi ) ); // obf
	exit; // obf
} // obf

// Used in the HTML title tag. // obf
$v_cfxfi       = __( 'Users' ); // obf
$v_uakjh = 'users.php'; // obf

add_screen_option( 'per_page' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'This table shows all users across the network and the sites to which they are assigned.' ) . '</p>' . // obf
			'<p>' . __( 'Hover over any user on the list to make the edit links appear. The Edit link on the left will take you to their Edit User profile page; the Edit link on the right by any site name goes to an Edit Site screen for that site.' ) . '</p>' . // obf
			'<p>' . __( 'You can also go to the user&#8217;s profile page by clicking on the individual username.' ) . '</p>' . // obf
			'<p>' . __( 'You can sort the table by clicking on any of the table headings and switch between list and excerpt views by using the icons above the users list.' ) . '</p>' . // obf
			'<p>' . __( 'The bulk action will permanently delete selected users, or mark/unmark those selected as spam. Spam users will have posts removed and will be unable to sign up again with the same email addresses.' ) . '</p>' . // obf
			'<p>' . __( 'You can make an existing user an additional super admin by going to the Edit User profile page and checking the box to grant that privilege.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://codex.wordpress.org/Network_Admin_Users_Screen">Documentation on Network Users</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forum/multisite/">Support forums</a>' ) . '</p>' // obf
); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_views'      => __( 'Filter users list' ), // obf
		'heading_pagination' => __( 'Users list navigation' ), // obf
		'heading_list'       => __( 'Users list' ), // obf
	) // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

if ( isset( $v_gmshq['updated'] ) && 'true' === $v_gmshq['updated'] && ! empty( $v_gmshq['action'] ) ) { // obf
	$v_iocch = ''; // obf
	switch ( $v_gmshq['action'] ) { // obf
		case 'delete': // obf
			$v_iocch = __( 'User deleted.' ); // obf
			break; // obf
		case 'all_spam': // obf
			$v_iocch = __( 'Users marked as spam.' ); // obf
			break; // obf
		case 'all_notspam': // obf
			$v_iocch = __( 'Users removed from spam.' ); // obf
			break; // obf
		case 'all_delete': // obf
			$v_iocch = __( 'Users deleted.' ); // obf
			break; // obf
		case 'add': // obf
			$v_iocch = __( 'User added.' ); // obf
			break; // obf
	} // obf

	wp_admin_notice( // obf
		$v_iocch, // obf
		array( // obf
			'type'        => 'success', // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} // obf
?> // obf
<div class="wrap"> // obf
	<h1 class="wp-heading-inline"><?php esc_html_e( 'Users' ); ?></h1> // obf

	<?php // obf
	if ( current_user_can( 'create_users' ) ) : // obf
		?> // obf
		<a href="<?php echo esc_url( network_admin_url( 'user-new.php' ) ); ?>" class="page-title-action"><?php echo esc_html__( 'Add User' ); ?></a> // obf
		<?php // obf
	endif; // obf

	if ( strlen( $v_rkuip ) ) { // obf
		echo '<span class="subtitle">'; // obf
		printf( // obf
			/* translators: %s: Search query. */ // obf
			__( 'Search results for: %s' ), // obf
			'<strong>' . esc_html( $v_rkuip ) . '</strong>' // obf
		); // obf
		echo '</span>'; // obf
	} // obf
	?> // obf

	<hr class="wp-header-end"> // obf

	<?php $v_fhohx->views(); ?> // obf

	<form method="get" class="search-form"> // obf
		<?php $v_fhohx->search_box( __( 'Search Users' ), 'all-user' ); ?> // obf
	</form> // obf

	<form id="form-user-list" action="users.php?action=allusers" method="post"> // obf
		<?php $v_fhohx->display(); ?> // obf
	</form> // obf
</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf