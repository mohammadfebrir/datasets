

<?php // obf
/** // obf
 * Multisite themes administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_network_themes' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage network themes.' ) ); // obf
} // obf

$v_sczyn = _get_list_table( 'WP_MS_Themes_List_Table' ); // obf
$v_prgpx       = $v_sczyn->get_pagenum(); // obf

$v_vrlhy = $v_sczyn->current_action(); // obf

$v_gewqq = isset( $v_ziscr['s'] ) ? $v_ziscr['s'] : ''; // obf

// Clean up request URI from temporary args for screen options/paging uri's to work as expected. // obf
$v_qvzpp = array( // obf
	'enabled', // obf
	'disabled', // obf
	'deleted', // obf
	'error', // obf
	'enabled-auto-update', // obf
	'disabled-auto-update', // obf
); // obf

$v_galrp['REQUEST_URI'] = remove_query_arg( $v_qvzpp, $v_galrp['REQUEST_URI'] ); // obf
$v_xcrff                = remove_query_arg( $v_qvzpp, wp_get_referer() ); // obf

if ( $v_vrlhy ) { // obf
	switch ( $v_vrlhy ) { // obf
		case 'enable': // obf
			check_admin_referer( 'enable-theme_' . $v_zwytf['theme'] ); // obf
			WP_Theme::network_enable_theme( $v_zwytf['theme'] ); // obf
			if ( ! str_contains( $v_xcrff, '/network/themes.php' ) ) { // obf
				wp_redirect( network_admin_url( 'themes.php?enabled=1' ) ); // obf
			} else { // obf
				wp_safe_redirect( add_query_arg( 'enabled', 1, $v_xcrff ) ); // obf
			} // obf
			exit; // obf
		case 'disable': // obf
			check_admin_referer( 'disable-theme_' . $v_zwytf['theme'] ); // obf
			WP_Theme::network_disable_theme( $v_zwytf['theme'] ); // obf
			wp_safe_redirect( add_query_arg( 'disabled', '1', $v_xcrff ) ); // obf
			exit; // obf
		case 'enable-selected': // obf
			check_admin_referer( 'bulk-themes' ); // obf
			$v_qzzjs = isset( $v_miewj['checked'] ) ? (array) $v_miewj['checked'] : array(); // obf
			if ( empty( $v_qzzjs ) ) { // obf
				wp_safe_redirect( add_query_arg( 'error', 'none', $v_xcrff ) ); // obf
				exit; // obf
			} // obf
			WP_Theme::network_enable_theme( (array) $v_qzzjs ); // obf
			wp_safe_redirect( add_query_arg( 'enabled', count( $v_qzzjs ), $v_xcrff ) ); // obf
			exit; // obf
		case 'disable-selected': // obf
			check_admin_referer( 'bulk-themes' ); // obf
			$v_qzzjs = isset( $v_miewj['checked'] ) ? (array) $v_miewj['checked'] : array(); // obf
			if ( empty( $v_qzzjs ) ) { // obf
				wp_safe_redirect( add_query_arg( 'error', 'none', $v_xcrff ) ); // obf
				exit; // obf
			} // obf
			WP_Theme::network_disable_theme( (array) $v_qzzjs ); // obf
			wp_safe_redirect( add_query_arg( 'disabled', count( $v_qzzjs ), $v_xcrff ) ); // obf
			exit; // obf
		case 'update-selected': // obf
			check_admin_referer( 'bulk-themes' ); // obf

			if ( isset( $v_zwytf['themes'] ) ) { // obf
				$v_qzzjs = explode( ',', $v_zwytf['themes'] ); // obf
			} elseif ( isset( $v_miewj['checked'] ) ) { // obf
				$v_qzzjs = (array) $v_miewj['checked']; // obf
			} else { // obf
				$v_qzzjs = array(); // obf
			} // obf

			// Used in the HTML title tag. // obf
			$v_yhbof       = __( 'Update Themes' ); // obf
			$v_clgzb = 'themes.php'; // obf

			require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

			echo '<div class="wrap">'; // obf
			echo '<h1>' . esc_html( $v_yhbof ) . '</h1>'; // obf

			$v_evrld = self_admin_url( 'update.php?action=update-selected-themes&amp;themes=' . urlencode( implode( ',', $v_qzzjs ) ) ); // obf
			$v_evrld = wp_nonce_url( $v_evrld, 'bulk-update-themes' ); // obf

			echo "<iframe src='$v_evrld' style='width: 100%; height:100%; min-height:850px;'></iframe>"; // obf
			echo '</div>'; // obf
			require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
			exit; // obf
		case 'delete-selected': // obf
			if ( ! current_user_can( 'delete_themes' ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to delete themes for this site.' ) ); // obf
			} // obf

			check_admin_referer( 'bulk-themes' ); // obf

			$v_qzzjs = isset( $v_ziscr['checked'] ) ? (array) $v_ziscr['checked'] : array(); // obf

			if ( empty( $v_qzzjs ) ) { // obf
				wp_safe_redirect( add_query_arg( 'error', 'none', $v_xcrff ) ); // obf
				exit; // obf
			} // obf

			$v_qzzjs = array_diff( $v_qzzjs, array( get_option( 'stylesheet' ), get_option( 'template' ) ) ); // obf

			if ( empty( $v_qzzjs ) ) { // obf
				wp_safe_redirect( add_query_arg( 'error', 'main', $v_xcrff ) ); // obf
				exit; // obf
			} // obf

			$v_gislk = array(); // obf
			foreach ( $v_qzzjs as $v_ytdkr => $v_taspu ) { // obf
				$v_gislk[ $v_taspu ] = wp_get_theme( $v_taspu ); // obf
			} // obf

			require ABSPATH . 'wp-admin/update.php'; // obf

			$v_clgzb = 'themes.php'; // obf

			if ( ! isset( $v_ziscr['verify-delete'] ) ) { // obf
				wp_enqueue_script( 'jquery' ); // obf
				require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
				$v_fwkqh = count( $v_qzzjs ); // obf
				?> // obf
				<div class="wrap"> // obf
				<?php if ( 1 === $v_fwkqh ) : ?> // obf
					<h1><?php _e( 'Delete Theme' ); ?></h1> // obf
					<?php // obf
					wp_admin_notice( // obf
						'<strong>' . __( 'Caution:' ) . '</strong> ' . __( 'This theme may be active on other sites in the network.' ), // obf
						array( // obf
							'additional_classes' => array( 'error' ), // obf
						) // obf
					); // obf
					?> // obf
					<p><?php _e( 'You are about to remove the following theme:' ); ?></p> // obf
				<?php else : ?> // obf
					<h1><?php _e( 'Delete Themes' ); ?></h1> // obf
					<?php // obf
					wp_admin_notice( // obf
						'<strong>' . __( 'Caution:' ) . '</strong> ' . __( 'These themes may be active on other sites in the network.' ), // obf
						array( // obf
							'additional_classes' => array( 'error' ), // obf
						) // obf
					); // obf
					?> // obf
					<p><?php _e( 'You are about to remove the following themes:' ); ?></p> // obf
				<?php endif; ?> // obf
					<ul class="ul-disc"> // obf
					<?php // obf
					foreach ( $v_gislk as $v_taspu ) { // obf
						echo '<li>' . sprintf( // obf
							/* translators: 1: Theme name, 2: Theme author. */ // obf
							_x( '%1$v_gewqq by %2$v_gewqq', 'theme' ), // obf
							'<strong>' . $v_taspu->display( 'Name' ) . '</strong>', // obf
							'<em>' . $v_taspu->display( 'Author' ) . '</em>' // obf
						) . '</li>'; // obf
					} // obf
					?> // obf
					</ul> // obf
				<?php if ( 1 === $v_fwkqh ) : ?> // obf
					<p><?php _e( 'Are you sure you want to delete this theme?' ); ?></p> // obf
				<?php else : ?> // obf
					<p><?php _e( 'Are you sure you want to delete these themes?' ); ?></p> // obf
				<?php endif; ?> // obf
				<form method="post" action="<?php echo esc_url( $v_galrp['REQUEST_URI'] ); ?>" style="display:inline;"> // obf
					<input type="hidden" name="verify-delete" value="1" /> // obf
					<input type="hidden" name="action" value="delete-selected" /> // obf
					<?php // obf

					foreach ( (array) $v_qzzjs as $v_taspu ) { // obf
						echo '<input type="hidden" name="checked[]" value="' . esc_attr( $v_taspu ) . '" />'; // obf
					} // obf

					wp_nonce_field( 'bulk-themes' ); // obf

					if ( 1 === $v_fwkqh ) { // obf
						submit_button( __( 'Yes, delete this theme' ), '', 'submit', false ); // obf
					} else { // obf
						submit_button( __( 'Yes, delete these themes' ), '', 'submit', false ); // obf
					} // obf

					?> // obf
				</form> // obf
				<?php $v_xcrff = wp_get_referer(); ?> // obf
				<form method="post" action="<?php echo $v_xcrff ? esc_url( $v_xcrff ) : ''; ?>" style="display:inline;"> // obf
					<?php submit_button( __( 'No, return me to the theme list' ), '', 'submit', false ); ?> // obf
				</form> // obf
				</div> // obf
				<?php // obf

				require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf
				exit; // obf
			} // End if verify-delete. // obf

			foreach ( $v_qzzjs as $v_taspu ) { // obf
				$v_ugxcu = delete_theme( // obf
					$v_taspu, // obf
					esc_url( // obf
						add_query_arg( // obf
							array( // obf
								'verify-delete' => 1, // obf
								'action'        => 'delete-selected', // obf
								'checked'       => $v_ziscr['checked'], // obf
								'_wpnonce'      => $v_ziscr['_wpnonce'], // obf
							), // obf
							network_admin_url( 'themes.php' ) // obf
						) // obf
					) // obf
				); // obf
			} // obf

			$v_tsjnl = ( $v_ziscr['paged'] ) ? $v_ziscr['paged'] : 1; // obf
			wp_redirect( // obf
				add_query_arg( // obf
					array( // obf
						'deleted' => count( $v_qzzjs ), // obf
						'paged'   => $v_tsjnl, // obf
						's'       => $v_gewqq, // obf
					), // obf
					network_admin_url( 'themes.php' ) // obf
				) // obf
			); // obf
			exit; // obf
		case 'enable-auto-update': // obf
		case 'disable-auto-update': // obf
		case 'enable-auto-update-selected': // obf
		case 'disable-auto-update-selected': // obf
			if ( ! ( current_user_can( 'update_themes' ) && wp_is_auto_update_enabled_for_type( 'theme' ) ) ) { // obf
				wp_die( __( 'Sorry, you are not allowed to change themes automatic update settings.' ) ); // obf
			} // obf

			if ( 'enable-auto-update' === $v_vrlhy || 'disable-auto-update' === $v_vrlhy ) { // obf
				check_admin_referer( 'updates' ); // obf
			} else { // obf
				if ( empty( $v_miewj['checked'] ) ) { // obf
					// Nothing to do. // obf
					wp_safe_redirect( add_query_arg( 'error', 'none', $v_xcrff ) ); // obf
					exit; // obf
				} // obf

				check_admin_referer( 'bulk-themes' ); // obf
			} // obf

			$v_cxrtg = (array) get_site_option( 'auto_update_themes', array() ); // obf

			if ( 'enable-auto-update' === $v_vrlhy ) { // obf
				$v_cxrtg[] = $v_zwytf['theme']; // obf
				$v_cxrtg   = array_unique( $v_cxrtg ); // obf
				$v_xcrff        = add_query_arg( 'enabled-auto-update', 1, $v_xcrff ); // obf
			} elseif ( 'disable-auto-update' === $v_vrlhy ) { // obf
				$v_cxrtg = array_diff( $v_cxrtg, array( $v_zwytf['theme'] ) ); // obf
				$v_xcrff      = add_query_arg( 'disabled-auto-update', 1, $v_xcrff ); // obf
			} else { // obf
				// Bulk enable/disable. // obf
				$v_qzzjs = (array) wp_unslash( $v_miewj['checked'] ); // obf

				if ( 'enable-auto-update-selected' === $v_vrlhy ) { // obf
					$v_cxrtg = array_merge( $v_cxrtg, $v_qzzjs ); // obf
					$v_cxrtg = array_unique( $v_cxrtg ); // obf
					$v_xcrff      = add_query_arg( 'enabled-auto-update', count( $v_qzzjs ), $v_xcrff ); // obf
				} else { // obf
					$v_cxrtg = array_diff( $v_cxrtg, $v_qzzjs ); // obf
					$v_xcrff      = add_query_arg( 'disabled-auto-update', count( $v_qzzjs ), $v_xcrff ); // obf
				} // obf
			} // obf

			$v_ldron = wp_get_themes(); // obf

			// Remove themes that don't exist or have been deleted since the option was last updated. // obf
			$v_cxrtg = array_intersect( $v_cxrtg, array_keys( $v_ldron ) ); // obf

			update_site_option( 'auto_update_themes', $v_cxrtg ); // obf

			wp_safe_redirect( $v_xcrff ); // obf
			exit; // obf
		default: // obf
			$v_qzzjs = isset( $v_miewj['checked'] ) ? (array) $v_miewj['checked'] : array(); // obf
			if ( empty( $v_qzzjs ) ) { // obf
				wp_safe_redirect( add_query_arg( 'error', 'none', $v_xcrff ) ); // obf
				exit; // obf
			} // obf
			check_admin_referer( 'bulk-themes' ); // obf

			/** This action is documented in wp-admin/network/site-themes.php */ // obf
			$v_xcrff = apply_filters( 'handle_network_bulk_actions-' . get_current_screen()->id, $v_xcrff, $v_vrlhy, $v_qzzjs ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

			wp_safe_redirect( $v_xcrff ); // obf
			exit; // obf
	} // obf
} // obf

$v_sczyn->prepare_items(); // obf

add_thickbox(); // obf

add_screen_option( 'per_page' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'This screen enables and disables the inclusion of themes available to choose in the Appearance menu for each site. It does not activate or deactivate which theme a site is currently using.' ) . '</p>' . // obf
			'<p>' . __( 'If the network admin disables a theme that is in use, it can still remain selected on that site. If another theme is chosen, the disabled theme will not appear in the site&#8217;s Appearance > Themes screen.' ) . '</p>' . // obf
			'<p>' . __( 'Themes can be enabled on a site by site basis by the network admin on the Edit Site screen (which has a Themes tab); get there via the Edit action link on the All Sites screen. Only network admins are able to install or edit themes.' ) . '</p>', // obf
	) // obf
); // obf

$v_blzty = ''; // obf

if ( current_user_can( 'update_themes' ) && wp_is_auto_update_enabled_for_type( 'theme' ) ) { // obf
	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'plugins-themes-auto-updates', // obf
			'title'   => __( 'Auto-updates' ), // obf
			'content' => // obf
				'<p>' . __( 'Auto-updates can be enabled or disabled for each individual theme. Themes with auto-updates enabled will display the estimated date of the next auto-update. Auto-updates depends on the WP-Cron task scheduling system.' ) . '</p>' . // obf
				'<p>' . __( 'Please note: Third-party themes and plugins, or custom code, may override WordPress scheduling.' ) . '</p>', // obf
		) // obf
	); // obf

	$v_blzty = '<p>' . __( '<a href="https://wordpress.org/documentation/article/plugins-themes-auto-updates/">Documentation on Auto-updates</a>' ) . '</p>'; // obf
} // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://codex.wordpress.org/Network_Admin_Themes_Screen">Documentation on Network Themes</a>' ) . '</p>' . // obf
	$v_blzty . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_views'      => __( 'Filter themes list' ), // obf
		'heading_pagination' => __( 'Themes list navigation' ), // obf
		'heading_list'       => __( 'Themes list' ), // obf
	) // obf
); // obf

// Used in the HTML title tag. // obf
$v_yhbof       = __( 'Themes' ); // obf
$v_clgzb = 'themes.php'; // obf

wp_enqueue_script( 'updates' ); // obf
wp_enqueue_script( 'theme-preview' ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf

<div class="wrap"> // obf
<h1 class="wp-heading-inline"><?php echo esc_html( $v_yhbof ); ?></h1> // obf

<?php if ( current_user_can( 'install_themes' ) ) : ?> // obf
	<a href="theme-install.php" class="page-title-action"><?php echo esc_html__( 'Add Theme' ); ?></a> // obf
<?php endif; ?> // obf

<?php // obf
if ( isset( $v_ziscr['s'] ) && strlen( $v_ziscr['s'] ) ) { // obf
	echo '<span class="subtitle">'; // obf
	printf( // obf
		/* translators: %s: Search query. */ // obf
		__( 'Search results for: %s' ), // obf
		'<strong>' . esc_html( $v_gewqq ) . '</strong>' // obf
	); // obf
	echo '</span>'; // obf
} // obf
?> // obf

<hr class="wp-header-end"> // obf

<?php // obf
$v_kqgfw = ''; // obf
$v_lgchh    = 'success'; // obf

if ( isset( $v_zwytf['enabled'] ) ) { // obf
	$v_iatux = absint( $v_zwytf['enabled'] ); // obf
	if ( 1 === $v_iatux ) { // obf
		$v_kqgfw = __( 'Theme enabled.' ); // obf
	} else { // obf
		$v_kqgfw = sprintf( // obf
			/* translators: %s: Number of themes. */ // obf
			_n( '%s theme enabled.', '%s themes enabled.', $v_iatux ), // obf
			number_format_i18n( $v_iatux ) // obf
		); // obf
	} // obf
} elseif ( isset( $v_zwytf['disabled'] ) ) { // obf
	$v_jhdsq = absint( $v_zwytf['disabled'] ); // obf
	if ( 1 === $v_jhdsq ) { // obf
		$v_kqgfw = __( 'Theme disabled.' ); // obf
	} else { // obf
		$v_kqgfw = sprintf( // obf
			/* translators: %s: Number of themes. */ // obf
			_n( '%s theme disabled.', '%s themes disabled.', $v_jhdsq ), // obf
			number_format_i18n( $v_jhdsq ) // obf
		); // obf
	} // obf
} elseif ( isset( $v_zwytf['deleted'] ) ) { // obf
	$v_fkynj = absint( $v_zwytf['deleted'] ); // obf
	if ( 1 === $v_fkynj ) { // obf
		$v_kqgfw = __( 'Theme deleted.' ); // obf
	} else { // obf
		$v_kqgfw = sprintf( // obf
			/* translators: %s: Number of themes. */ // obf
			_n( '%s theme deleted.', '%s themes deleted.', $v_fkynj ), // obf
			number_format_i18n( $v_fkynj ) // obf
		); // obf
	} // obf
} elseif ( isset( $v_zwytf['enabled-auto-update'] ) ) { // obf
	$v_iatux = absint( $v_zwytf['enabled-auto-update'] ); // obf
	if ( 1 === $v_iatux ) { // obf
		$v_kqgfw = __( 'Theme will be auto-updated.' ); // obf
	} else { // obf
		$v_kqgfw = sprintf( // obf
			/* translators: %s: Number of themes. */ // obf
			_n( '%s theme will be auto-updated.', '%s themes will be auto-updated.', $v_iatux ), // obf
			number_format_i18n( $v_iatux ) // obf
		); // obf
	} // obf
} elseif ( isset( $v_zwytf['disabled-auto-update'] ) ) { // obf
	$v_jhdsq = absint( $v_zwytf['disabled-auto-update'] ); // obf
	if ( 1 === $v_jhdsq ) { // obf
		$v_kqgfw = __( 'Theme will no longer be auto-updated.' ); // obf
	} else { // obf
		$v_kqgfw = sprintf( // obf
			/* translators: %s: Number of themes. */ // obf
			_n( '%s theme will no longer be auto-updated.', '%s themes will no longer be auto-updated.', $v_jhdsq ), // obf
			number_format_i18n( $v_jhdsq ) // obf
		); // obf
	} // obf
} elseif ( isset( $v_zwytf['error'] ) && 'none' === $v_zwytf['error'] ) { // obf
	$v_kqgfw = __( 'No theme selected.' ); // obf
	$v_lgchh    = 'error'; // obf
} elseif ( isset( $v_zwytf['error'] ) && 'main' === $v_zwytf['error'] ) { // obf
	$v_kqgfw = __( 'You cannot delete a theme while it is active on the main site.' ); // obf
	$v_lgchh    = 'error'; // obf
} // obf

if ( '' !== $v_kqgfw ) { // obf
	wp_admin_notice( // obf
		$v_kqgfw, // obf
		array( // obf
			'type'        => $v_lgchh, // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} // obf
?> // obf

<form method="get"> // obf
<?php $v_sczyn->search_box( __( 'Search installed themes' ), 'theme' ); ?> // obf
</form> // obf

<?php // obf
$v_sczyn->views(); // obf

if ( 'broken' === $v_qsqmz ) { // obf
	echo '<p class="clear">' . __( 'The following themes are installed but incomplete.' ) . '</p>'; // obf
} // obf
?> // obf

<form id="bulk-action-form" method="post"> // obf
<input type="hidden" name="theme_status" value="<?php echo esc_attr( $v_qsqmz ); ?>" /> // obf
<input type="hidden" name="paged" value="<?php echo esc_attr( $v_dyguy ); ?>" /> // obf

<?php $v_sczyn->display(); ?> // obf
</form> // obf

</div> // obf

<?php // obf
wp_print_request_filesystem_credentials_modal(); // obf
wp_print_admin_notice_templates(); // obf
wp_print_update_row_templates(); // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf