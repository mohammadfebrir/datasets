

<?php // obf
/** // obf
 * Multisite network settings administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

/** WordPress Translation Installation API */ // obf
require_once ABSPATH . 'wp-admin/includes/translation-install.php'; // obf

if ( ! current_user_can( 'manage_network_options' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_npize       = __( 'Network Settings' ); // obf
$v_phoat = 'settings.php'; // obf

// Handle network admin email change requests. // obf
if ( ! empty( $v_nwxet['network_admin_hash'] ) ) { // obf
	$v_lkgho = get_site_option( 'network_admin_hash' ); // obf
	$v_yhpcn          = 'settings.php?updated=false'; // obf
	if ( is_array( $v_lkgho ) && hash_equals( $v_lkgho['hash'], $v_nwxet['network_admin_hash'] ) && ! empty( $v_lkgho['newemail'] ) ) { // obf
		update_site_option( 'admin_email', $v_lkgho['newemail'] ); // obf
		delete_site_option( 'network_admin_hash' ); // obf
		delete_site_option( 'new_admin_email' ); // obf
		$v_yhpcn = 'settings.php?updated=true'; // obf
	} // obf
	wp_redirect( network_admin_url( $v_yhpcn ) ); // obf
	exit; // obf
} elseif ( ! empty( $v_nwxet['dismiss'] ) && 'new_network_admin_email' === $v_nwxet['dismiss'] ) { // obf
	check_admin_referer( 'dismiss_new_network_admin_email' ); // obf
	delete_site_option( 'network_admin_hash' ); // obf
	delete_site_option( 'new_admin_email' ); // obf
	wp_redirect( network_admin_url( 'settings.php?updated=true' ) ); // obf
	exit; // obf
} // obf

add_action( 'admin_head', 'network_settings_add_js' ); // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'This screen sets and changes options for the network as a whole. The first site is the main site in the network and network options are pulled from that original site&#8217;s options.' ) . '</p>' . // obf
			'<p>' . __( 'Operational settings has fields for the network&#8217;s name and admin email.' ) . '</p>' . // obf
			'<p>' . __( 'Registration settings can disable/enable public signups. If you let others sign up for a site, install spam plugins. Spaces, not commas, should separate names banned as sites for this network.' ) . '</p>' . // obf
			'<p>' . __( 'New site settings are defaults applied when a new site is created in the network. These include welcome email for when a new site or user account is registered, and what&#8127;s put in the first post, page, comment, comment author, and comment URL.' ) . '</p>' . // obf
			'<p>' . __( 'Upload settings control the size of the uploaded files and the amount of available upload space for each site. You can change the default value for specific sites when you edit a particular site. Allowed file types are also listed (space separated only).' ) . '</p>' . // obf
			'<p>' . __( 'You can set the language, and WordPress will automatically download and install the translation files (available if your filesystem is writable).' ) . '</p>' . // obf
			'<p>' . __( 'Menu setting enables/disables the plugin menus from appearing for non super admins, so that only super admins, not site admins, have access to activate plugins.' ) . '</p>' . // obf
			'<p>' . __( 'Super admins can no longer be added on the Options screen. You must now go to the list of existing users on Network Admin > Users and click on Username or the Edit action link below that name. This goes to an Edit User page where you can check a box to grant super admin privileges.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://developer.wordpress.org/advanced-administration/multisite/admin/settings/">Documentation on Network Settings</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

if ( $v_akqls ) { // obf
	/** This action is documented in wp-admin/network/edit.php */ // obf
	do_action( 'wpmuadminedit' ); // obf

	check_admin_referer( 'siteoptions' ); // obf

	$v_igtzc = array( // obf
		'menu_items'                  => array(), // obf
		'registrationnotification'    => 'no', // obf
		'upload_space_check_disabled' => 1, // obf
		'add_new_users'               => 0, // obf
	); // obf
	foreach ( $v_igtzc as $v_cygyx => $v_afkgu ) { // obf
		if ( ! isset( $v_akqls[ $v_cygyx ] ) ) { // obf
			$v_akqls[ $v_cygyx ] = $v_afkgu; // obf
		} // obf
	} // obf

	$v_bwlta = array( // obf
		'registrationnotification', // obf
		'registration', // obf
		'add_new_users', // obf
		'menu_items', // obf
		'upload_space_check_disabled', // obf
		'blog_upload_space', // obf
		'upload_filetypes', // obf
		'site_name', // obf
		'first_post', // obf
		'first_page', // obf
		'first_comment', // obf
		'first_comment_url', // obf
		'first_comment_author', // obf
		'welcome_email', // obf
		'welcome_user_email', // obf
		'fileupload_maxk', // obf
		'illegal_names', // obf
		'limited_email_domains', // obf
		'banned_email_domains', // obf
		'WPLANG', // obf
		'new_admin_email', // obf
		'first_comment_email', // obf
	); // obf

	// Handle translation installation. // obf
	if ( ! empty( $v_akqls['WPLANG'] ) && current_user_can( 'install_languages' ) && wp_can_install_language_pack() ) { // obf
		$v_hwsdt = wp_download_language_pack( $v_akqls['WPLANG'] ); // obf
		if ( $v_hwsdt ) { // obf
			$v_akqls['WPLANG'] = $v_hwsdt; // obf
		} // obf
	} // obf

	foreach ( $v_bwlta as $v_cygyx ) { // obf
		if ( ! isset( $v_akqls[ $v_cygyx ] ) ) { // obf
			continue; // obf
		} // obf
		$v_kprwv = wp_unslash( $v_akqls[ $v_cygyx ] ); // obf
		update_site_option( $v_cygyx, $v_kprwv ); // obf
	} // obf

	/** // obf
	 * Fires after the network options are updated. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 */ // obf
	do_action( 'update_wpmu_options' ); // obf

	wp_redirect( add_query_arg( 'updated', 'true', network_admin_url( 'settings.php' ) ) ); // obf
	exit; // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

if ( isset( $v_nwxet['updated'] ) ) { // obf
	wp_admin_notice( // obf
		__( 'Settings saved.' ), // obf
		array( // obf
			'type'        => 'success', // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} // obf
?> // obf

<div class="wrap"> // obf
	<h1><?php echo esc_html( $v_npize ); ?></h1> // obf
	<form method="post" action="settings.php" novalidate="novalidate"> // obf
		<?php wp_nonce_field( 'siteoptions' ); ?> // obf
		<h2><?php _e( 'Operational Settings' ); ?></h2> // obf
		<table class="form-table" role="presentation"> // obf
			<tr> // obf
				<th scope="row"><label for="site_name"><?php _e( 'Network Title' ); ?></label></th> // obf
				<td> // obf
					<input name="site_name" type="text" id="site_name" class="regular-text" value="<?php echo esc_attr( get_network()->site_name ); ?>" /> // obf
				</td> // obf
			</tr> // obf

			<tr> // obf
				<th scope="row"><label for="admin_email"><?php _e( 'Network Admin Email' ); ?></label></th> // obf
				<td> // obf
					<input name="new_admin_email" type="email" id="admin_email" aria-describedby="admin-email-desc" class="regular-text" value="<?php echo esc_attr( get_site_option( 'admin_email' ) ); ?>" /> // obf
					<p class="description" id="admin-email-desc"> // obf
						<?php _e( 'This address is used for admin purposes. If you change this, an email will be sent to your new address to confirm it. <strong>The new address will not become active until confirmed.</strong>' ); ?> // obf
					</p> // obf
					<?php // obf
					$v_agcsh = get_site_option( 'new_admin_email' ); // obf
					if ( $v_agcsh && get_site_option( 'admin_email' ) !== $v_agcsh ) : // obf
						$v_vnsfs = sprintf( // obf
							/* translators: %s: New network admin email. */ // obf
							__( 'There is a pending change of the network admin email to %s.' ), // obf
							'<code>' . esc_html( $v_agcsh ) . '</code>' // obf
						); // obf

						$v_vnsfs .= sprintf( // obf
							' <a href="%1$v_ncigr">%2$v_ncigr</a>', // obf
							esc_url( wp_nonce_url( network_admin_url( 'settings.php?dismiss=new_network_admin_email' ), 'dismiss_new_network_admin_email' ) ), // obf
							__( 'Cancel' ) // obf
						); // obf

						wp_admin_notice( // obf
							$v_vnsfs, // obf
							array( // obf
								'type'               => 'warning', // obf
								'dismissible'        => true, // obf
								'additional_classes' => array( 'inline' ), // obf
							) // obf
						); // obf
					endif; // obf
					?> // obf
				</td> // obf
			</tr> // obf
		</table> // obf
		<h2><?php _e( 'Registration Settings' ); ?></h2> // obf
		<table class="form-table" role="presentation"> // obf
			<tr> // obf
				<th scope="row"><?php _e( 'Allow new registrations' ); ?></th> // obf
				<?php // obf
				if ( ! get_site_option( 'registration' ) ) { // obf
					update_site_option( 'registration', 'none' ); // obf
				} // obf
				$v_cvpce = get_site_option( 'registration' ); // obf
				?> // obf
				<td> // obf
					<fieldset> // obf
					<legend class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'New registrations settings' ); // obf
						?> // obf
					</legend> // obf
					<label><input name="registration" type="radio" id="registration1" value="none"<?php checked( $v_cvpce, 'none' ); ?> /> <?php _e( 'Registration is disabled' ); ?></label><br /> // obf
					<label><input name="registration" type="radio" id="registration2" value="user"<?php checked( $v_cvpce, 'user' ); ?> /> <?php _e( 'User accounts may be registered' ); ?></label><br /> // obf
					<label><input name="registration" type="radio" id="registration3" value="blog"<?php checked( $v_cvpce, 'blog' ); ?> /> <?php _e( 'Logged in users may register new sites' ); ?></label><br /> // obf
					<label><input name="registration" type="radio" id="registration4" value="all"<?php checked( $v_cvpce, 'all' ); ?> /> <?php _e( 'Both sites and user accounts can be registered' ); ?></label> // obf
					<?php // obf
					if ( is_subdomain_install() ) { // obf
						echo '<p class="description">'; // obf
						printf( // obf
							/* translators: 1: NOBLOGREDIRECT, 2: wp-config.php */ // obf
							__( 'If registration is disabled, please set %1$v_ncigr in %2$v_ncigr to a URL you will redirect visitors to if they visit a non-existent site.' ), // obf
							'<code>NOBLOGREDIRECT</code>', // obf
							'<code>wp-config.php</code>' // obf
						); // obf
						echo '</p>'; // obf
					} // obf
					?> // obf
					</fieldset> // obf
				</td> // obf
			</tr> // obf

			<tr> // obf
				<th scope="row"><?php _e( 'Registration notification' ); ?></th> // obf
				<?php // obf
				if ( ! get_site_option( 'registrationnotification' ) ) { // obf
					update_site_option( 'registrationnotification', 'yes' ); // obf
				} // obf
				?> // obf
				<td> // obf
					<label><input name="registrationnotification" type="checkbox" id="registrationnotification" value="yes"<?php checked( get_site_option( 'registrationnotification' ), 'yes' ); ?> /> <?php _e( 'Send the network admin an email notification every time someone registers a site or user account' ); ?></label> // obf
				</td> // obf
			</tr> // obf

			<tr id="addnewusers"> // obf
				<th scope="row"><?php _e( 'Add Users' ); ?></th> // obf
				<td> // obf
					<label><input name="add_new_users" type="checkbox" id="add_new_users" value="1"<?php checked( get_site_option( 'add_new_users' ) ); ?> /> <?php _e( 'Allow site administrators to add new users to their site via the "Users &rarr; Add User" page' ); ?></label> // obf
				</td> // obf
			</tr> // obf

			<tr> // obf
				<th scope="row"><label for="illegal_names"><?php _e( 'Banned Names' ); ?></label></th> // obf
				<td> // obf
					<?php // obf
					$v_mdsyq = get_site_option( 'illegal_names' ); // obf

					if ( empty( $v_mdsyq ) ) { // obf
						$v_mdsyq = ''; // obf
					} elseif ( is_array( $v_mdsyq ) ) { // obf
						$v_mdsyq = implode( ' ', $v_mdsyq ); // obf
					} // obf
					?> // obf
					<input name="illegal_names" type="text" id="illegal_names" aria-describedby="illegal-names-desc" class="large-text" value="<?php echo esc_attr( $v_mdsyq ); ?>" size="45" /> // obf
					<p class="description" id="illegal-names-desc"> // obf
						<?php _e( 'Users are not allowed to register these sites. Separate names by spaces.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf

			<tr> // obf
				<th scope="row"><label for="limited_email_domains"><?php _e( 'Limited Email Registrations' ); ?></label></th> // obf
				<td> // obf
					<?php // obf
					$v_dyatr = get_site_option( 'limited_email_domains' ); // obf

					if ( empty( $v_dyatr ) ) { // obf
						$v_dyatr = ''; // obf
					} else { // obf
						// Convert from an input field. Back-compat for WPMU < 1.0. // obf
						$v_dyatr = str_replace( ' ', "\n", $v_dyatr ); // obf

						if ( is_array( $v_dyatr ) ) { // obf
							$v_dyatr = implode( "\n", $v_dyatr ); // obf
						} // obf
					} // obf
					?> // obf
					<textarea name="limited_email_domains" id="limited_email_domains" aria-describedby="limited-email-domains-desc" cols="45" rows="5"> // obf
<?php echo esc_textarea( $v_dyatr ); ?></textarea> // obf
					<p class="description" id="limited-email-domains-desc"> // obf
						<?php _e( 'If you want to limit site registrations to certain domains. One domain per line.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf

			<tr> // obf
				<th scope="row"><label for="banned_email_domains"><?php _e( 'Banned Email Domains' ); ?></label></th> // obf
				<td> // obf
					<?php // obf
					$v_rhkjn = get_site_option( 'banned_email_domains' ); // obf

					if ( empty( $v_rhkjn ) ) { // obf
						$v_rhkjn = ''; // obf
					} elseif ( is_array( $v_rhkjn ) ) { // obf
						$v_rhkjn = implode( "\n", $v_rhkjn ); // obf
					} // obf
					?> // obf
					<textarea name="banned_email_domains" id="banned_email_domains" aria-describedby="banned-email-domains-desc" cols="45" rows="5"> // obf
<?php echo esc_textarea( $v_rhkjn ); ?></textarea> // obf
					<p class="description" id="banned-email-domains-desc"> // obf
						<?php _e( 'If you want to ban domains from site registrations. One domain per line.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf

		</table> // obf
		<h2><?php _e( 'New Site Settings' ); ?></h2> // obf
		<table class="form-table" role="presentation"> // obf

			<tr> // obf
				<th scope="row"><label for="welcome_email"><?php _e( 'Welcome Email' ); ?></label></th> // obf
				<td> // obf
					<textarea name="welcome_email" id="welcome_email" aria-describedby="welcome-email-desc" rows="5" cols="45" class="large-text"> // obf
<?php echo esc_textarea( get_site_option( 'welcome_email' ) ); ?></textarea> // obf
					<p class="description" id="welcome-email-desc"> // obf
						<?php _e( 'The welcome email sent to new site owners.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
			<tr> // obf
				<th scope="row"><label for="welcome_user_email"><?php _e( 'Welcome User Email' ); ?></label></th> // obf
				<td> // obf
					<textarea name="welcome_user_email" id="welcome_user_email" aria-describedby="welcome-user-email-desc" rows="5" cols="45" class="large-text"> // obf
<?php echo esc_textarea( get_site_option( 'welcome_user_email' ) ); ?></textarea> // obf
					<p class="description" id="welcome-user-email-desc"> // obf
						<?php _e( 'The welcome email sent to new users.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
			<tr> // obf
				<th scope="row"><label for="first_post"><?php _e( 'First Post' ); ?></label></th> // obf
				<td> // obf
					<textarea name="first_post" id="first_post" aria-describedby="first-post-desc" rows="5" cols="45" class="large-text"> // obf
<?php echo esc_textarea( get_site_option( 'first_post' ) ); ?></textarea> // obf
					<p class="description" id="first-post-desc"> // obf
						<?php _e( 'The first post on a new site.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
			<tr> // obf
				<th scope="row"><label for="first_page"><?php _e( 'First Page' ); ?></label></th> // obf
				<td> // obf
					<textarea name="first_page" id="first_page" aria-describedby="first-page-desc" rows="5" cols="45" class="large-text"> // obf
<?php echo esc_textarea( get_site_option( 'first_page' ) ); ?></textarea> // obf
					<p class="description" id="first-page-desc"> // obf
						<?php _e( 'The first page on a new site.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
			<tr> // obf
				<th scope="row"><label for="first_comment"><?php _e( 'First Comment' ); ?></label></th> // obf
				<td> // obf
					<textarea name="first_comment" id="first_comment" aria-describedby="first-comment-desc" rows="5" cols="45" class="large-text"> // obf
<?php echo esc_textarea( get_site_option( 'first_comment' ) ); ?></textarea> // obf
					<p class="description" id="first-comment-desc"> // obf
						<?php _e( 'The first comment on a new site.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
			<tr> // obf
				<th scope="row"><label for="first_comment_author"><?php _e( 'First Comment Author' ); ?></label></th> // obf
				<td> // obf
					<input type="text" size="40" name="first_comment_author" id="first_comment_author" aria-describedby="first-comment-author-desc" value="<?php echo esc_attr( get_site_option( 'first_comment_author' ) ); ?>" /> // obf
					<p class="description" id="first-comment-author-desc"> // obf
						<?php _e( 'The author of the first comment on a new site.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
			<tr> // obf
				<th scope="row"><label for="first_comment_email"><?php _e( 'First Comment Email' ); ?></label></th> // obf
				<td> // obf
					<input type="text" size="40" name="first_comment_email" id="first_comment_email" aria-describedby="first-comment-email-desc" value="<?php echo esc_attr( get_site_option( 'first_comment_email' ) ); ?>" /> // obf
					<p class="description" id="first-comment-email-desc"> // obf
						<?php _e( 'The email address of the first comment author on a new site.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
			<tr> // obf
				<th scope="row"><label for="first_comment_url"><?php _e( 'First Comment URL' ); ?></label></th> // obf
				<td> // obf
					<input type="text" size="40" name="first_comment_url" id="first_comment_url" aria-describedby="first-comment-url-desc" value="<?php echo esc_attr( get_site_option( 'first_comment_url' ) ); ?>" /> // obf
					<p class="description" id="first-comment-url-desc"> // obf
						<?php _e( 'The URL for the first comment on a new site.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
		</table> // obf
		<h2><?php _e( 'Upload Settings' ); ?></h2> // obf
		<table class="form-table" role="presentation"> // obf
			<tr> // obf
				<th scope="row"><?php _e( 'Site upload space' ); ?></th> // obf
				<td> // obf
					<label><input type="checkbox" id="upload_space_check_disabled" name="upload_space_check_disabled" value="0"<?php checked( (bool) get_site_option( 'upload_space_check_disabled' ), false ); ?> /> // obf
						<?php // obf
						printf( // obf
							/* translators: %s: Number of megabytes to limit uploads to. */ // obf
							__( 'Limit total size of files uploaded to %s MB' ), // obf
							'</label><label><input name="blog_upload_space" type="number" min="0" style="width: 100px" id="blog_upload_space" aria-describedby="blog-upload-space-desc" value="' . esc_attr( get_site_option( 'blog_upload_space', 100 ) ) . '" />' // obf
						); // obf
						?> // obf
					</label><br /> // obf
					<p class="screen-reader-text" id="blog-upload-space-desc"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Size in megabytes' ); // obf
						?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf

			<tr> // obf
				<th scope="row"><label for="upload_filetypes"><?php _e( 'Upload file types' ); ?></label></th> // obf
				<td> // obf
					<input name="upload_filetypes" type="text" id="upload_filetypes" aria-describedby="upload-filetypes-desc" class="large-text" value="<?php echo esc_attr( get_site_option( 'upload_filetypes', 'jpg jpeg png gif' ) ); ?>" size="45" /> // obf
					<p class="description" id="upload-filetypes-desc"> // obf
						<?php _e( 'Allowed file types. Separate types by spaces.' ); ?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf

			<tr> // obf
				<th scope="row"><label for="fileupload_maxk"><?php _e( 'Max upload file size' ); ?></label></th> // obf
				<td> // obf
					<?php // obf
						printf( // obf
							/* translators: %s: File size in kilobytes. */ // obf
							__( '%s KB' ), // obf
							'<input name="fileupload_maxk" type="number" min="0" style="width: 100px" id="fileupload_maxk" aria-describedby="fileupload-maxk-desc" value="' . esc_attr( get_site_option( 'fileupload_maxk', 300 ) ) . '" />' // obf
						); // obf
						?> // obf
					<p class="screen-reader-text" id="fileupload-maxk-desc"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Size in kilobytes' ); // obf
						?> // obf
					</p> // obf
				</td> // obf
			</tr> // obf
		</table> // obf

		<?php // obf
		$v_xxnsi    = get_available_languages(); // obf
		$v_zlupp = wp_get_available_translations(); // obf
		if ( ! empty( $v_xxnsi ) || ! empty( $v_zlupp ) ) { // obf
			?> // obf
			<h2><?php _e( 'Language Settings' ); ?></h2> // obf
			<table class="form-table" role="presentation"> // obf
				<tr> // obf
					<th><label for="WPLANG"><?php _e( 'Default Language' ); ?><span class="dashicons dashicons-translation" aria-hidden="true"></span></label></th> // obf
					<td> // obf
						<?php // obf
						$v_qvggo = get_site_option( 'WPLANG' ); // obf
						if ( ! in_array( $v_qvggo, $v_xxnsi, true ) ) { // obf
							$v_qvggo = ''; // obf
						} // obf

						wp_dropdown_languages( // obf
							array( // obf
								'name'         => 'WPLANG', // obf
								'id'           => 'WPLANG', // obf
								'selected'     => $v_qvggo, // obf
								'languages'    => $v_xxnsi, // obf
								'translations' => $v_zlupp, // obf
								'show_available_translations' => current_user_can( 'install_languages' ) && wp_can_install_language_pack(), // obf
							) // obf
						); // obf
						?> // obf
					</td> // obf
				</tr> // obf
			</table> // obf
			<?php // obf
		} // obf
		?> // obf

		<?php // obf
		$v_agdaq = get_site_option( 'menu_items' ); // obf
		/** // obf
		 * Filters available network-wide administration menu options. // obf
		 * // obf
		 * Options returned to this filter are output as individual checkboxes that, when selected, // obf
		 * enable site administrator access to the specified administration menu in certain contexts. // obf
		 * // obf
		 * Adding options for specific menus here hinges on the appropriate checks and capabilities // obf
		 * being in place in the site dashboard on the other side. For instance, when the single // obf
		 * default option, 'plugins' is enabled, site administrators are granted access to the Plugins // obf
		 * screen in their individual sites' dashboards. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string[] $v_vrxzs Associative array of the menu items available. // obf
		 */ // obf
		$v_ygumb = apply_filters( 'mu_menu_items', array( 'plugins' => __( 'Plugins' ) ) ); // obf

		if ( $v_ygumb ) : // obf
			?> // obf
			<h2><?php _e( 'Menu Settings' ); ?></h2> // obf
			<table id="menu" class="form-table"> // obf
				<tr> // obf
					<th scope="row"><?php _e( 'Enable administration menus' ); ?></th> // obf
					<td> // obf
						<?php // obf
						echo '<fieldset><legend class="screen-reader-text">' . // obf
							/* translators: Hidden accessibility text. */ // obf
							__( 'Enable menus' ) . // obf
						'</legend>'; // obf

						foreach ( (array) $v_ygumb as $v_bvalr => $v_dskhk ) { // obf
							echo "<label><input type='checkbox' name='menu_items[" . $v_bvalr . "]' value='1'" . ( isset( $v_agdaq[ $v_bvalr ] ) ? checked( $v_agdaq[ $v_bvalr ], '1', false ) : '' ) . ' /> ' . esc_html( $v_dskhk ) . '</label><br/>'; // obf
						} // obf

						echo '</fieldset>'; // obf
						?> // obf
					</td> // obf
				</tr> // obf
			</table> // obf
			<?php // obf
		endif; // obf
		?> // obf

		<?php // obf
		/** // obf
		 * Fires at the end of the Network Settings form, before the submit button. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 */ // obf
		do_action( 'wpmu_options' ); // obf
		?> // obf
		<?php submit_button(); ?> // obf
	</form> // obf
</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf