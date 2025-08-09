
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Add Site Administration Screen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

/** WordPress Translation Installation API */ // obf
require_once ABSPATH . 'wp-admin/includes/translation-install.php'; // obf

if ( ! current_user_can( 'create_sites' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to add sites to this network.' ) ); // obf
} // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'This screen is for Super Admins to add new sites to the network. This is not affected by the registration settings.' ) . '</p>' . // obf
			'<p>' . __( 'If the admin email for the new site does not exist in the database, a new user will also be created.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://developer.wordpress.org/advanced-administration/multisite/admin/#network-admin-sites-screen">Documentation on Site Management</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forum/multisite/">Support forums</a>' ) . '</p>' // obf
); // obf

if ( isset( $v_mjiwg['action'] ) && 'add-site' === $v_mjiwg['action'] ) { // obf
	check_admin_referer( 'add-blog', '_wpnonce_add-blog' ); // obf

	if ( ! is_array( $v_zvsrr['blog'] ) ) { // obf
		wp_die( __( 'Cannot create an empty site.' ) ); // obf
	} // obf

	$v_lhedk   = $v_zvsrr['blog']; // obf
	$v_gqpdl = ''; // obf

	$v_lhedk['domain'] = trim( $v_lhedk['domain'] ); // obf
	if ( preg_match( '|^([a-zA-Z0-9-])+$|', $v_lhedk['domain'] ) ) { // obf
		$v_gqpdl = strtolower( $v_lhedk['domain'] ); // obf
	} // obf

	// If not a subdomain installation, make sure the domain isn't a reserved word. // obf
	if ( ! is_subdomain_install() ) { // obf
		$v_kpepb = get_subdirectory_reserved_names(); // obf

		if ( in_array( $v_gqpdl, $v_kpepb, true ) ) { // obf
			wp_die( // obf
				sprintf( // obf
					/* translators: %s: Reserved names list. */ // obf
					__( 'The following words are reserved for use by WordPress functions and cannot be used as site names: %s' ), // obf
					'<code>' . implode( '</code>, <code>', $v_kpepb ) . '</code>' // obf
				) // obf
			); // obf
		} // obf
	} // obf

	$v_rkkpi = $v_lhedk['title']; // obf

	$v_xgipn = array( // obf
		'public' => 1, // obf
	); // obf

	// Handle translation installation for the new site. // obf
	if ( isset( $v_zvsrr['WPLANG'] ) ) { // obf
		if ( '' === $v_zvsrr['WPLANG'] ) { // obf
			$v_xgipn['WPLANG'] = ''; // en_US // obf
		} elseif ( in_array( $v_zvsrr['WPLANG'], get_available_languages(), true ) ) { // obf
			$v_xgipn['WPLANG'] = $v_zvsrr['WPLANG']; // obf
		} elseif ( current_user_can( 'install_languages' ) && wp_can_install_language_pack() ) { // obf
			$v_frajz = wp_download_language_pack( wp_unslash( $v_zvsrr['WPLANG'] ) ); // obf
			if ( $v_frajz ) { // obf
				$v_xgipn['WPLANG'] = $v_frajz; // obf
			} // obf
		} // obf
	} // obf

	if ( empty( $v_rkkpi ) ) { // obf
		wp_die( __( 'Missing site title.' ) ); // obf
	} // obf

	if ( empty( $v_gqpdl ) ) { // obf
		wp_die( __( 'Missing or invalid site address.' ) ); // obf
	} // obf

	if ( isset( $v_lhedk['email'] ) && '' === trim( $v_lhedk['email'] ) ) { // obf
		wp_die( __( 'Missing email address.' ) ); // obf
	} // obf

	$v_fiojz = sanitize_email( $v_lhedk['email'] ); // obf
	if ( ! is_email( $v_fiojz ) ) { // obf
		wp_die( __( 'Invalid email address.' ) ); // obf
	} // obf

	if ( is_subdomain_install() ) { // obf
		$v_ybgex = $v_gqpdl . '.' . __fn_37772( '|^www\.|', '', get_network()->domain ); // obf
		$v_dgkyp      = get_network()->path; // obf
	} else { // obf
		$v_ybgex = get_network()->domain; // obf
		$v_dgkyp      = get_network()->path . $v_gqpdl . '/'; // obf
	} // obf

	$v_aryvh = 'N/A'; // obf
	$v_vhhhb  = email_exists( $v_fiojz ); // obf
	if ( ! $v_vhhhb ) { // Create a new user with a random password. // obf
		/** // obf
		 * Fires immediately before a new user is created via the network site-new.php page. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param string $v_fiojz Email of the non-existent user. // obf
		 */ // obf
		do_action( 'pre_network_site_new_created_user', $v_fiojz ); // obf

		$v_vhhhb = username_exists( $v_gqpdl ); // obf
		if ( $v_vhhhb ) { // obf
			wp_die( __( 'The domain or path entered conflicts with an existing username.' ) ); // obf
		} // obf
		$v_aryvh = wp_generate_password( 12, false ); // obf
		$v_vhhhb  = wpmu_create_user( $v_gqpdl, $v_aryvh, $v_fiojz ); // obf
		if ( false === $v_vhhhb ) { // obf
			wp_die( __( 'There was an error creating the user.' ) ); // obf
		} // obf

		/** // obf
		 * Fires after a new user has been created via the network site-new.php page. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param int $v_vhhhb ID of the newly created user. // obf
		 */ // obf
		do_action( 'network_site_new_created_user', $v_vhhhb ); // obf
	} // obf

	$v_xkyim->hide_errors(); // obf
	$v_txosa = wpmu_create_blog( $v_ybgex, $v_dgkyp, $v_rkkpi, $v_vhhhb, $v_xgipn, get_current_network_id() ); // obf
	$v_xkyim->show_errors(); // obf

	if ( ! is_wp_error( $v_txosa ) ) { // obf
		if ( ! is_super_admin( $v_vhhhb ) && ! get_user_option( 'primary_blog', $v_vhhhb ) ) { // obf
			update_user_option( $v_vhhhb, 'primary_blog', $v_txosa, true ); // obf
		} // obf

		wpmu_new_site_admin_notification( $v_txosa, $v_vhhhb ); // obf
		wpmu_welcome_notification( $v_txosa, $v_vhhhb, $v_aryvh, $v_rkkpi, array( 'public' => 1 ) ); // obf
		wp_redirect( // obf
			add_query_arg( // obf
				array( // obf
					'update' => 'added', // obf
					'id'     => $v_txosa, // obf
				), // obf
				'site-new.php' // obf
			) // obf
		); // obf
		exit; // obf
	} else { // obf
		wp_die( $v_txosa->get_error_message() ); // obf
	} // obf
} // obf

if ( isset( $v_hcwky['update'] ) ) { // obf
	$v_wuuxv = array(); // obf
	if ( 'added' === $v_hcwky['update'] ) { // obf
		$v_wuuxv[] = sprintf( // obf
			/* translators: 1: Dashboard URL, 2: Network admin edit URL. */ // obf
			__( 'Site added. <a href="%1$v_pjvep">Visit Dashboard</a> or <a href="%2$v_pjvep">Edit Site</a>' ), // obf
			esc_url( get_admin_url( absint( $v_hcwky['id'] ) ) ), // obf
			network_admin_url( 'site-info.php?id=' . absint( $v_hcwky['id'] ) ) // obf
		); // obf
	} // obf
} // obf

// Used in the HTML title tag. // obf
$v_rkkpi       = __( 'Add Site' ); // obf
$v_ttkpv = 'sites.php'; // obf

wp_enqueue_script( 'user-suggest' ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf

<div class="wrap"> // obf
<h1 id="add-new-site"><?php _e( 'Add Site' ); ?></h1> // obf
<?php // obf
if ( ! empty( $v_wuuxv ) ) { // obf
	$v_bhbzd = array( // obf
		'type'        => 'success', // obf
		'dismissible' => true, // obf
		'id'          => 'message', // obf
	); // obf

	foreach ( $v_wuuxv as $v_fbdil ) { // obf
		wp_admin_notice( $v_fbdil, $v_bhbzd ); // obf
	} // obf
} // obf
?> // obf
<p><?php echo wp_required_field_message(); ?></p> // obf
<form method="post" action="<?php echo esc_url( network_admin_url( 'site-new.php?action=add-site' ) ); ?>" novalidate="novalidate"> // obf
<?php wp_nonce_field( 'add-blog', '_wpnonce_add-blog' ); ?> // obf
	<table class="form-table" role="presentation"> // obf
		<tr class="form-field form-required"> // obf
			<th scope="row"> // obf
				<label for="site-address"> // obf
					<?php // obf
					_e( 'Site Address (URL)' ); // obf
					echo ' ' . wp_required_field_indicator(); // obf
					?> // obf
				</label> // obf
			</th> // obf
			<td> // obf
			<?php if ( is_subdomain_install() ) { ?> // obf
				<input name="blog[domain]" type="text" class="regular-text ltr" id="site-address" aria-describedby="site-address-desc" autocapitalize="none" autocorrect="off" required /><span class="no-break">.<?php echo __fn_37772( '|^www\.|', '', get_network()->domain ); ?></span> // obf
				<?php // obf
			} else { // obf
				echo get_network()->domain . get_network()->path // obf
				?> // obf
				<input name="blog[domain]" type="text" class="regular-text ltr" id="site-address" aria-describedby="site-address-desc" autocapitalize="none" autocorrect="off" required /> // obf
				<?php // obf
			} // obf
			echo '<p class="description" id="site-address-desc">' . __( 'Only lowercase letters (a-z), numbers, and hyphens are allowed.' ) . '</p>'; // obf
			?> // obf
			</td> // obf
		</tr> // obf
		<tr class="form-field form-required"> // obf
			<th scope="row"> // obf
				<label for="site-title"> // obf
					<?php // obf
					_e( 'Site Title' ); // obf
					echo ' ' . wp_required_field_indicator(); // obf
					?> // obf
				</label> // obf
			</th> // obf
			<td><input name="blog[title]" type="text" class="regular-text" id="site-title" required /></td> // obf
		</tr> // obf
		<?php // obf
		$v_dxbnk    = get_available_languages(); // obf
		$v_ygwws = wp_get_available_translations(); // obf
		if ( ! empty( $v_dxbnk ) || ! empty( $v_ygwws ) ) : // obf
			?> // obf
			<tr class="form-field form-required"> // obf
				<th scope="row"><label for="site-language"><?php _e( 'Site Language' ); ?></label></th> // obf
				<td> // obf
					<?php // obf
					// Network default. // obf
					$v_hzves = get_site_option( 'WPLANG' ); // obf

					// Use English if the default isn't available. // obf
					if ( ! in_array( $v_hzves, $v_dxbnk, true ) ) { // obf
						$v_hzves = ''; // obf
					} // obf

					wp_dropdown_languages( // obf
						array( // obf
							'name'                        => 'WPLANG', // obf
							'id'                          => 'site-language', // obf
							'selected'                    => $v_hzves, // obf
							'languages'                   => $v_dxbnk, // obf
							'translations'                => $v_ygwws, // obf
							'show_available_translations' => current_user_can( 'install_languages' ) && wp_can_install_language_pack(), // obf
						) // obf
					); // obf
					?> // obf
				</td> // obf
			</tr> // obf
		<?php endif; // Languages. ?> // obf
		<tr class="form-field form-required"> // obf
			<th scope="row"> // obf
				<label for="admin-email"> // obf
					<?php // obf
					_e( 'Admin Email' ); // obf
					echo ' ' . wp_required_field_indicator(); // obf
					?> // obf
				</label> // obf
			</th> // obf
			<td><input name="blog[email]" type="email" class="regular-text wp-suggest-user" id="admin-email" data-autocomplete-type="search" data-autocomplete-field="user_email" aria-describedby="site-admin-email" required /></td> // obf
		</tr> // obf
		<tr class="form-field"> // obf
			<td colspan="2" class="td-full"><p id="site-admin-email"><?php _e( 'A new user will be created if the above email address is not in the database.' ); ?><br /><?php _e( 'The username and a link to set the password will be mailed to this email address.' ); ?></p></td> // obf
		</tr> // obf
	</table> // obf

	<?php // obf
	/** // obf
	 * Fires at the end of the new site form in network admin. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	do_action( 'network_site_new_form' ); // obf

	submit_button( __( 'Add Site' ), 'primary', 'add-site' ); // obf
	?> // obf
	</form> // obf
</div> // obf
<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf