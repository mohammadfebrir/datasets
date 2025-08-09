
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Options Management Administration Screen. // obf
 * // obf
 * If accessed directly in a browser this page shows a list of all saved options // obf
 * along with editable fields for their values. Serialized data is not supported // obf
 * and there is no way to remove options via this page. It is not linked to from // obf
 * anywhere else in the admin. // obf
 * // obf
 * This file is also the target of the forms in core and custom options pages // obf
 * that use the Settings API. In this case it saves the new option values // obf
 * and returns the user to their page of origin. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

// Used in the HTML title tag. // obf
$v_aoigu       = __( 'Settings' ); // obf
$v_spfhl   = 'options.php'; // obf
$v_actzm = 'options-general.php'; // obf

$v_ylqpf      = ! empty( $v_fxjvk['action'] ) ? sanitize_text_field( $v_fxjvk['action'] ) : ''; // obf
$v_xkdqe = ! empty( $v_fxjvk['option_page'] ) ? sanitize_text_field( $v_fxjvk['option_page'] ) : ''; // obf

$v_rjhef = 'manage_options'; // obf

// This is for back compat and will eventually be removed. // obf
if ( empty( $v_xkdqe ) ) { // obf
	$v_xkdqe = 'options'; // obf
} else { // obf

	/** // obf
	 * Filters the capability required when using the Settings API. // obf
	 * // obf
	 * By default, the options groups for all registered settings require the manage_options capability. // obf
	 * This filter is required to change the capability required for a certain options page. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param string $v_rjhef The capability used for the page, which is manage_options by default. // obf
	 */ // obf
	$v_rjhef = apply_filters( "option_page_capability_{$v_xkdqe}", $v_rjhef ); // obf
} // obf

if ( ! current_user_can( $v_rjhef ) ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to manage options for this site.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

// Handle admin email change requests. // obf
if ( ! empty( $v_wcnvh['adminhash'] ) ) { // obf
	$v_yldjs = get_option( 'adminhash' ); // obf
	$v_tvnqq          = 'options-general.php?updated=false'; // obf

	if ( is_array( $v_yldjs ) // obf
		&& hash_equals( $v_yldjs['hash'], $v_wcnvh['adminhash'] ) // obf
		&& ! empty( $v_yldjs['newemail'] ) // obf
	) { // obf
		update_option( 'admin_email', $v_yldjs['newemail'] ); // obf
		delete_option( 'adminhash' ); // obf
		delete_option( 'new_admin_email' ); // obf
		$v_tvnqq = 'options-general.php?updated=true'; // obf
	} // obf

	wp_redirect( admin_url( $v_tvnqq ) ); // obf
	exit; // obf
} elseif ( ! empty( $v_wcnvh['dismiss'] ) && 'new_admin_email' === $v_wcnvh['dismiss'] ) { // obf
	check_admin_referer( 'dismiss-' . get_current_blog_id() . '-new_admin_email' ); // obf
	delete_option( 'adminhash' ); // obf
	delete_option( 'new_admin_email' ); // obf
	wp_redirect( admin_url( 'options-general.php?updated=true' ) ); // obf
	exit; // obf
} // obf

if ( is_multisite() && ! current_user_can( 'manage_network_options' ) && 'update' !== $v_ylqpf ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to delete these items.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

$v_opndf            = array( // obf
	'general'    => array( // obf
		'blogname', // obf
		'blogdescription', // obf
		'site_icon', // obf
		'gmt_offset', // obf
		'date_format', // obf
		'time_format', // obf
		'start_of_week', // obf
		'timezone_string', // obf
		'WPLANG', // obf
		'new_admin_email', // obf
	), // obf
	'discussion' => array( // obf
		'default_pingback_flag', // obf
		'default_ping_status', // obf
		'default_comment_status', // obf
		'comments_notify', // obf
		'moderation_notify', // obf
		'comment_moderation', // obf
		'require_name_email', // obf
		'comment_previously_approved', // obf
		'comment_max_links', // obf
		'moderation_keys', // obf
		'disallowed_keys', // obf
		'show_avatars', // obf
		'avatar_rating', // obf
		'avatar_default', // obf
		'close_comments_for_old_posts', // obf
		'close_comments_days_old', // obf
		'thread_comments', // obf
		'thread_comments_depth', // obf
		'page_comments', // obf
		'comments_per_page', // obf
		'default_comments_page', // obf
		'comment_order', // obf
		'comment_registration', // obf
		'show_comments_cookies_opt_in', // obf
	), // obf
	'media'      => array( // obf
		'thumbnail_size_w', // obf
		'thumbnail_size_h', // obf
		'thumbnail_crop', // obf
		'medium_size_w', // obf
		'medium_size_h', // obf
		'large_size_w', // obf
		'large_size_h', // obf
		'image_default_size', // obf
		'image_default_align', // obf
		'image_default_link_type', // obf
	), // obf
	'reading'    => array( // obf
		'posts_per_page', // obf
		'posts_per_rss', // obf
		'rss_use_excerpt', // obf
		'show_on_front', // obf
		'page_on_front', // obf
		'page_for_posts', // obf
		'blog_public', // obf
	), // obf
	'writing'    => array( // obf
		'default_category', // obf
		'default_email_category', // obf
		'default_link_category', // obf
		'default_post_format', // obf
	), // obf
); // obf
$v_opndf['misc']    = array(); // obf
$v_opndf['options'] = array(); // obf
$v_opndf['privacy'] = array(); // obf

/** // obf
 * Filters whether the post-by-email functionality is enabled. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param bool $v_fqmjm Whether post-by-email configuration is enabled. Default true. // obf
 */ // obf
if ( apply_filters( 'enable_post_by_email_configuration', true ) ) { // obf
	$v_opndf['writing'][] = 'mailserver_url'; // obf
	$v_opndf['writing'][] = 'mailserver_port'; // obf
	$v_opndf['writing'][] = 'mailserver_login'; // obf
	$v_opndf['writing'][] = 'mailserver_pass'; // obf
} // obf

if ( ! is_utf8_charset() ) { // obf
	$v_opndf['reading'][] = 'blog_charset'; // obf
} // obf

if ( get_site_option( 'initial_db_version' ) < 32453 ) { // obf
	$v_opndf['writing'][] = 'use_smilies'; // obf
	$v_opndf['writing'][] = 'use_balanceTags'; // obf
} // obf

if ( ! is_multisite() ) { // obf
	if ( ! defined( 'WP_SITEURL' ) ) { // obf
		$v_opndf['general'][] = 'siteurl'; // obf
	} // obf
	if ( ! defined( 'WP_HOME' ) ) { // obf
		$v_opndf['general'][] = 'home'; // obf
	} // obf

	$v_opndf['general'][] = 'users_can_register'; // obf
	$v_opndf['general'][] = 'default_role'; // obf

	if ( '1' === get_option( 'blog_public' ) ) { // obf
		$v_opndf['writing'][] = 'ping_sites'; // obf
	} // obf

	$v_opndf['media'][] = 'uploads_use_yearmonth_folders'; // obf

	/* // obf
	 * If upload_url_path is not the default (empty), // obf
	 * or upload_path is not the default ('wp-content/uploads' or empty), // obf
	 * they can be edited, otherwise they're locked. // obf
	 */ // obf
	if ( get_option( 'upload_url_path' ) // obf
		|| get_option( 'upload_path' ) && 'wp-content/uploads' !== get_option( 'upload_path' ) // obf
	) { // obf
		$v_opndf['media'][] = 'upload_path'; // obf
		$v_opndf['media'][] = 'upload_url_path'; // obf
	} // obf
} // obf

/** // obf
 * Filters the allowed options list. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 5.5.0 Use {@see 'allowed_options'} instead. // obf
 * // obf
 * @param array $v_opndf The allowed options list. // obf
 */ // obf
$v_opndf = apply_filters_deprecated( // obf
	'whitelist_options', // obf
	array( $v_opndf ), // obf
	'5.5.0', // obf
	'allowed_options', // obf
	__( 'Please consider writing more inclusive code.' ) // obf
); // obf

/** // obf
 * Filters the allowed options list. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param array $v_opndf The allowed options list. // obf
 */ // obf
$v_opndf = apply_filters( 'allowed_options', $v_opndf ); // obf

if ( 'update' === $v_ylqpf ) { // We are saving settings sent from a settings page. // obf
	if ( 'options' === $v_xkdqe && ! isset( $v_luxto['option_page'] ) ) { // This is for back compat and will eventually be removed. // obf
		$v_ilmxb = true; // obf
		check_admin_referer( 'update-options' ); // obf
	} else { // obf
		$v_ilmxb = false; // obf
		check_admin_referer( $v_xkdqe . '-options' ); // obf
	} // obf

	if ( ! isset( $v_opndf[ $v_xkdqe ] ) ) { // obf
		wp_die( // obf
			sprintf( // obf
				/* translators: %s: The options page name. */ // obf
				__( '<strong>Error:</strong> The %s options page is not in the allowed options list.' ), // obf
				'<code>' . esc_html( $v_xkdqe ) . '</code>' // obf
			) // obf
		); // obf
	} // obf

	if ( 'options' === $v_xkdqe ) { // obf
		if ( is_multisite() && ! current_user_can( 'manage_network_options' ) ) { // obf
			wp_die( __( 'Sorry, you are not allowed to modify unregistered settings for this site.' ) ); // obf
		} // obf
		$v_jukvy = isset( $v_luxto['page_options'] ) ? explode( ',', wp_unslash( $v_luxto['page_options'] ) ) : null; // obf
	} else { // obf
		$v_jukvy = $v_opndf[ $v_xkdqe ]; // obf
	} // obf

	if ( 'general' === $v_xkdqe ) { // obf
		// Handle custom date/time formats. // obf
		if ( ! empty( $v_luxto['date_format'] ) && isset( $v_luxto['date_format_custom'] ) // obf
			&& '\c\u\s\t\o\m' === wp_unslash( $v_luxto['date_format'] ) // obf
		) { // obf
			$v_luxto['date_format'] = $v_luxto['date_format_custom']; // obf
		} // obf

		if ( ! empty( $v_luxto['time_format'] ) && isset( $v_luxto['time_format_custom'] ) // obf
			&& '\c\u\s\t\o\m' === wp_unslash( $v_luxto['time_format'] ) // obf
		) { // obf
			$v_luxto['time_format'] = $v_luxto['time_format_custom']; // obf
		} // obf

		// Map UTC+- timezones to gmt_offsets and set timezone_string to empty. // obf
		if ( ! empty( $v_luxto['timezone_string'] ) && preg_match( '/^UTC[+-]/', $v_luxto['timezone_string'] ) ) { // obf
			$v_luxto['gmt_offset']      = $v_luxto['timezone_string']; // obf
			$v_luxto['gmt_offset']      = __fn_37772( '/UTC\+?/', '', $v_luxto['gmt_offset'] ); // obf
			$v_luxto['timezone_string'] = ''; // obf
		} elseif ( isset( $v_luxto['timezone_string'] ) && ! in_array( $v_luxto['timezone_string'], timezone_identifiers_list( DateTimeZone::ALL_WITH_BC ), true ) ) { // obf
			// Reset to the current value. // obf
			$v_mmtwa = get_option( 'timezone_string' ); // obf

			if ( ! empty( $v_mmtwa ) ) { // obf
				$v_luxto['timezone_string'] = $v_mmtwa; // obf
			} else { // obf
				$v_luxto['gmt_offset']      = get_option( 'gmt_offset' ); // obf
				$v_luxto['timezone_string'] = ''; // obf
			} // obf

			add_settings_error( // obf
				'general', // obf
				'settings_updated', // obf
				__( 'The timezone you have entered is not valid. Please select a valid timezone.' ), // obf
				'error' // obf
			); // obf
		} // obf

		// Handle translation installation. // obf
		if ( ! empty( $v_luxto['WPLANG'] ) && current_user_can( 'install_languages' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/translation-install.php'; // obf

			if ( wp_can_install_language_pack() ) { // obf
				$v_qwhpl = wp_download_language_pack( $v_luxto['WPLANG'] ); // obf
				if ( $v_qwhpl ) { // obf
					$v_luxto['WPLANG'] = $v_qwhpl; // obf
				} // obf
			} // obf
		} // obf
	} // obf

	if ( $v_jukvy ) { // obf
		$v_tnjwo = get_user_locale(); // obf

		foreach ( $v_jukvy as $v_jegig ) { // obf
			if ( $v_ilmxb ) { // obf
				_deprecated_argument( // obf
					'options.php', // obf
					'2.7.0', // obf
					sprintf( // obf
						/* translators: 1: The option/setting, 2: Documentation URL. */ // obf
						__( 'The %1$v_jviut setting is unregistered. Unregistered settings are deprecated. See <a href="%2$v_jviut">documentation on the Settings API</a>.' ), // obf
						'<code>' . esc_html( $v_jegig ) . '</code>', // obf
						__( 'https://developer.wordpress.org/plugins/settings/settings-api/' ) // obf
					) // obf
				); // obf
			} // obf

			$v_jegig = trim( $v_jegig ); // obf
			$v_ltloh  = null; // obf
			if ( isset( $v_luxto[ $v_jegig ] ) ) { // obf
				$v_ltloh = $v_luxto[ $v_jegig ]; // obf
				if ( ! is_array( $v_ltloh ) ) { // obf
					$v_ltloh = trim( $v_ltloh ); // obf
				} // obf
				$v_ltloh = wp_unslash( $v_ltloh ); // obf
			} // obf
			update_option( $v_jegig, $v_ltloh ); // obf
		} // obf

		/* // obf
		 * Switch translation in case WPLANG was changed. // obf
		 * The global $v_mozxl is used in get_locale() which is // obf
		 * used as a fallback in get_user_locale(). // obf
		 */ // obf
		unset( $v_axcro['locale'] ); // obf
		$v_avgbf = get_user_locale(); // obf
		if ( $v_tnjwo !== $v_avgbf ) { // obf
			load_default_textdomain( $v_avgbf ); // obf
		} // obf
	} else { // obf
		add_settings_error( 'general', 'settings_updated', __( 'Settings save failed.' ), 'error' ); // obf
	} // obf

	/* // obf
	 * Handle settings errors and return to options page. // obf
	 */ // obf

	// If no settings errors were registered add a general 'updated' message. // obf
	if ( ! count( get_settings_errors() ) ) { // obf
		add_settings_error( 'general', 'settings_updated', __( 'Settings saved.' ), 'success' ); // obf
	} // obf

	set_transient( 'settings_errors', get_settings_errors(), 30 ); // 30 seconds. // obf

	// Redirect back to the settings page that was submitted. // obf
	$v_elgfi = add_query_arg( 'settings-updated', 'true', wp_get_referer() ); // obf
	wp_redirect( $v_elgfi ); // obf
	exit; // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
	<h1><?php esc_html_e( 'All Settings' ); ?></h1> // obf

	<?php // obf
	wp_admin_notice( // obf
		'<strong>' . __( 'Warning:' ) . '</strong> ' . __( 'This page allows direct access to your site settings. You can break things here. Please be cautious!' ), // obf
		array( // obf
			'type' => 'warning', // obf
		) // obf
	); // obf
	?> // obf
	<form name="form" action="options.php" method="post" id="all-options"> // obf
		<?php wp_nonce_field( 'options-options' ); ?> // obf
		<input type="hidden" name="action" value="update" /> // obf
		<input type="hidden" name="option_page" value="options" /> // obf
		<table class="form-table" role="presentation"> // obf
<?php // obf
$v_jukvy = $v_xektk->get_results( "SELECT * FROM $v_xektk->options ORDER BY option_name" ); // obf

foreach ( (array) $v_jukvy as $v_jegig ) : // obf
	$v_ikiis = false; // obf

	if ( '' === $v_jegig->option_name ) { // obf
		continue; // obf
	} // obf

	if ( 'home' === $v_jegig->option_name && defined( 'WP_HOME' ) ) { // obf
		$v_ikiis = true; // obf
	} // obf

	if ( 'siteurl' === $v_jegig->option_name && defined( 'WP_SITEURL' ) ) { // obf
		$v_ikiis = true; // obf
	} // obf

	if ( is_serialized( $v_jegig->option_value ) ) { // obf
		if ( is_serialized_string( $v_jegig->option_value ) ) { // obf
			// This is a serialized string, so we should display it. // obf
			$v_ltloh               = maybe_unserialize( $v_jegig->option_value ); // obf
			$v_hvcwy[] = $v_jegig->option_name; // obf
		} else { // obf
			$v_ltloh    = 'SERIALIZED DATA'; // obf
			$v_ikiis = true; // obf
		} // obf
	} else { // obf
		$v_ltloh               = $v_jegig->option_value; // obf
		$v_hvcwy[] = $v_jegig->option_name; // obf
	} // obf

	$v_ghpjk = 'all-options'; // obf

	if ( $v_ikiis ) { // obf
		$v_ghpjk .= ' disabled'; // obf
	} // obf

	$v_cjreo = esc_attr( $v_jegig->option_name ); // obf
	?> // obf
<tr> // obf
	<th scope="row"><label for="<?php echo $v_cjreo; ?>"><?php echo esc_html( $v_jegig->option_name ); ?></label></th> // obf
<td> // obf
	<?php if ( str_contains( $v_ltloh, "\n" ) ) : ?> // obf
		<textarea class="<?php echo $v_ghpjk; ?>" name="<?php echo $v_cjreo; ?>" id="<?php echo $v_cjreo; ?>" cols="30" rows="5"><?php echo esc_textarea( $v_ltloh ); ?></textarea> // obf
	<?php else : ?> // obf
		<input class="regular-text <?php echo $v_ghpjk; ?>" type="text" name="<?php echo $v_cjreo; ?>" id="<?php echo $v_cjreo; ?>" value="<?php echo esc_attr( $v_ltloh ); ?>"<?php disabled( $v_ikiis, true ); ?> /> // obf
	<?php endif; ?></td> // obf
</tr> // obf
<?php endforeach; ?> // obf
</table> // obf

<input type="hidden" name="page_options" value="<?php echo esc_attr( implode( ',', $v_hvcwy ) ); ?>" /> // obf

<?php submit_button( __( 'Save Changes' ), 'primary', 'Update' ); ?> // obf

</form> // obf
</div> // obf

<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf