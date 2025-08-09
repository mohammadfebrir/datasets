

<?php // obf
/** // obf
 * Edit Site Themes Administration Screen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_sites' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage themes for this site.' ) ); // obf
} // obf

get_current_screen()->add_help_tab( get_site_screen_help_tab_args() ); // obf
get_current_screen()->set_help_sidebar( get_site_screen_help_sidebar_content() ); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_views'      => __( 'Filter site themes list' ), // obf
		'heading_pagination' => __( 'Site themes list navigation' ), // obf
		'heading_list'       => __( 'Site themes list' ), // obf
	) // obf
); // obf

$v_owshg = _get_list_table( 'WP_MS_Themes_List_Table' ); // obf

$v_mnztx = $v_owshg->current_action(); // obf

$v_jjzfo = isset( $v_dkniz['s'] ) ? $v_dkniz['s'] : ''; // obf

// Clean up request URI from temporary args for screen options/paging uri's to work as expected. // obf
$v_nqbwz              = array( 'enabled', 'disabled', 'error' ); // obf
$v_ursjm['REQUEST_URI'] = remove_query_arg( $v_nqbwz, $v_ursjm['REQUEST_URI'] ); // obf
$v_pztfv                = remove_query_arg( $v_nqbwz, wp_get_referer() ); // obf

if ( ! empty( $v_dkniz['paged'] ) ) { // obf
	$v_pztfv = add_query_arg( 'paged', (int) $v_dkniz['paged'], $v_pztfv ); // obf
} // obf

$v_ztyea = isset( $v_dkniz['id'] ) ? (int) $v_dkniz['id'] : 0; // obf

if ( ! $v_ztyea ) { // obf
	wp_die( __( 'Invalid site ID.' ) ); // obf
} // obf

$v_owshg->prepare_items(); // obf

$v_cutmz = get_site( $v_ztyea ); // obf
if ( ! $v_cutmz ) { // obf
	wp_die( __( 'The requested site does not exist.' ) ); // obf
} // obf

if ( ! can_edit_network( $v_cutmz->site_id ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

$v_ulrrn = is_main_site( $v_ztyea ); // obf

if ( $v_mnztx ) { // obf
	switch_to_blog( $v_ztyea ); // obf
	$v_fsnyh = get_option( 'allowedthemes' ); // obf

	switch ( $v_mnztx ) { // obf
		case 'enable': // obf
			check_admin_referer( 'enable-theme_' . $v_bjodp['theme'] ); // obf
			$v_rhdnb  = $v_bjodp['theme']; // obf
			$v_mnztx = 'enabled'; // obf
			$v_bijyy      = 1; // obf
			if ( ! $v_fsnyh ) { // obf
				$v_fsnyh = array( $v_rhdnb => true ); // obf
			} else { // obf
				$v_fsnyh[ $v_rhdnb ] = true; // obf
			} // obf
			break; // obf
		case 'disable': // obf
			check_admin_referer( 'disable-theme_' . $v_bjodp['theme'] ); // obf
			$v_rhdnb  = $v_bjodp['theme']; // obf
			$v_mnztx = 'disabled'; // obf
			$v_bijyy      = 1; // obf
			if ( ! $v_fsnyh ) { // obf
				$v_fsnyh = array(); // obf
			} else { // obf
				unset( $v_fsnyh[ $v_rhdnb ] ); // obf
			} // obf
			break; // obf
		case 'enable-selected': // obf
			check_admin_referer( 'bulk-themes' ); // obf
			if ( isset( $v_htlih['checked'] ) ) { // obf
				$v_eivyj = (array) $v_htlih['checked']; // obf
				$v_mnztx = 'enabled'; // obf
				$v_bijyy      = count( $v_eivyj ); // obf
				foreach ( (array) $v_eivyj as $v_rhdnb ) { // obf
					$v_fsnyh[ $v_rhdnb ] = true; // obf
				} // obf
			} else { // obf
				$v_mnztx = 'error'; // obf
				$v_bijyy      = 'none'; // obf
			} // obf
			break; // obf
		case 'disable-selected': // obf
			check_admin_referer( 'bulk-themes' ); // obf
			if ( isset( $v_htlih['checked'] ) ) { // obf
				$v_eivyj = (array) $v_htlih['checked']; // obf
				$v_mnztx = 'disabled'; // obf
				$v_bijyy      = count( $v_eivyj ); // obf
				foreach ( (array) $v_eivyj as $v_rhdnb ) { // obf
					unset( $v_fsnyh[ $v_rhdnb ] ); // obf
				} // obf
			} else { // obf
				$v_mnztx = 'error'; // obf
				$v_bijyy      = 'none'; // obf
			} // obf
			break; // obf
		default: // obf
			if ( isset( $v_htlih['checked'] ) ) { // obf
				check_admin_referer( 'bulk-themes' ); // obf
				$v_eivyj = (array) $v_htlih['checked']; // obf
				$v_bijyy      = count( $v_eivyj ); // obf
				$v_fuqte = get_current_screen()->id; // obf

				/** // obf
				 * Fires when a custom bulk action should be handled. // obf
				 * // obf
				 * The redirect link should be modified with success or failure feedback // obf
				 * from the action to be used to display feedback to the user. // obf
				 * // obf
				 * The dynamic portion of the hook name, `$v_fuqte`, refers to the current screen ID. // obf
				 * // obf
				 * @since 4.7.0 // obf
				 * // obf
				 * @param string $v_xqksa The redirect URL. // obf
				 * @param string $v_mnztx       The action being taken. // obf
				 * @param array  $v_qskeg        The items to take the action on. // obf
				 * @param int    $v_gswai      The site ID. // obf
				 */ // obf
				$v_pztfv = apply_filters( "handle_network_bulk_actions-{$v_fuqte}", $v_pztfv, $v_mnztx, $v_eivyj, $v_ztyea ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
			} else { // obf
				$v_mnztx = 'error'; // obf
				$v_bijyy      = 'none'; // obf
			} // obf
	} // obf

	update_option( 'allowedthemes', $v_fsnyh, false ); // obf
	restore_current_blog(); // obf

	wp_safe_redirect( // obf
		add_query_arg( // obf
			array( // obf
				'id'    => $v_ztyea, // obf
				$v_mnztx => $v_bijyy, // obf
			), // obf
			$v_pztfv // obf
		) // obf
	); // obf
	exit; // obf
} // obf

if ( isset( $v_bjodp['action'] ) && 'update-site' === $v_bjodp['action'] ) { // obf
	wp_safe_redirect( $v_pztfv ); // obf
	exit; // obf
} // obf

add_thickbox(); // obf
add_screen_option( 'per_page' ); // obf

// Used in the HTML title tag. // obf
/* translators: %s: Site title. */ // obf
$v_pitkk = sprintf( __( 'Edit Site: %s' ), esc_html( $v_cutmz->blogname ) ); // obf

$v_ejpqe  = 'sites.php'; // obf
$v_bexty = 'sites.php'; // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1 id="edit-site"><?php echo $v_pitkk; ?></h1> // obf
<p class="edit-site-actions"><a href="<?php echo esc_url( get_home_url( $v_ztyea, '/' ) ); ?>"><?php _e( 'Visit' ); ?></a> | <a href="<?php echo esc_url( get_admin_url( $v_ztyea ) ); ?>"><?php _e( 'Dashboard' ); ?></a></p> // obf
<?php // obf

network_edit_site_nav( // obf
	array( // obf
		'blog_id'  => $v_ztyea, // obf
		'selected' => 'site-themes', // obf
	) // obf
); // obf

if ( isset( $v_bjodp['enabled'] ) ) { // obf
	$v_xiqcy = absint( $v_bjodp['enabled'] ); // obf
	if ( 1 === $v_xiqcy ) { // obf
		$v_ivmmk = __( 'Theme enabled.' ); // obf
	} else { // obf
		/* translators: %s: Number of themes. */ // obf
		$v_ivmmk = _n( '%s theme enabled.', '%s themes enabled.', $v_xiqcy ); // obf
	} // obf

	wp_admin_notice( // obf
		sprintf( $v_ivmmk, number_format_i18n( $v_xiqcy ) ), // obf
		array( // obf
			'type'        => 'success', // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} elseif ( isset( $v_bjodp['disabled'] ) ) { // obf
	$v_bzndw = absint( $v_bjodp['disabled'] ); // obf
	if ( 1 === $v_bzndw ) { // obf
		$v_ivmmk = __( 'Theme disabled.' ); // obf
	} else { // obf
		/* translators: %s: Number of themes. */ // obf
		$v_ivmmk = _n( '%s theme disabled.', '%s themes disabled.', $v_bzndw ); // obf
	} // obf

	wp_admin_notice( // obf
		sprintf( $v_ivmmk, number_format_i18n( $v_bzndw ) ), // obf
		array( // obf
			'type'        => 'success', // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} elseif ( isset( $v_bjodp['error'] ) && 'none' === $v_bjodp['error'] ) { // obf
	wp_admin_notice( // obf
		__( 'No theme selected.' ), // obf
		array( // obf
			'type'        => 'error', // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} // obf
?> // obf

<p><?php _e( 'Network enabled themes are not shown on this screen.' ); ?></p> // obf

<form method="get"> // obf
<?php $v_owshg->search_box( __( 'Search installed themes' ), 'theme' ); ?> // obf
<input type="hidden" name="id" value="<?php echo esc_attr( $v_ztyea ); ?>" /> // obf
</form> // obf

<?php $v_owshg->views(); ?> // obf

<form method="post" action="site-themes.php?action=update-site"> // obf
	<input type="hidden" name="id" value="<?php echo esc_attr( $v_ztyea ); ?>" /> // obf

<?php $v_owshg->display(); ?> // obf

</form> // obf

</div> // obf
<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf