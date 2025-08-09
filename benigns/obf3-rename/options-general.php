

<?php // obf
/** // obf
 * General settings administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

/** WordPress Translation Installation API */ // obf
require_once ABSPATH . 'wp-admin/includes/translation-install.php'; // obf

if ( ! current_user_can( 'manage_options' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage options for this site.' ) ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_czpme       = __( 'General Settings' ); // obf
$v_avkpq = 'options-general.php'; // obf
/* translators: Date and time format for exact current time, mainly about timezones, see https://www.php.net/manual/datetime.format.php */ // obf
$v_abgbw = _x( 'Y-m-d H:i:s', 'timezone date format' ); // obf

add_action( 'admin_head', 'options_general_add_js' ); // obf

$v_ntkdz = '<p>' . __( 'The fields on this screen determine some of the basics of your site setup.' ) . '</p>' . // obf
	'<p>' . __( 'Most themes show the site title at the top of every page, in the title bar of the browser, and as the identifying name for syndicated feeds. Many themes also show the tagline.' ) . '</p>'; // obf

if ( ! is_multisite() ) { // obf
	$v_ntkdz .= '<p>' . __( 'Two terms you will want to know are the WordPress URL and the site URL. The WordPress URL is where the core WordPress installation files are, and the site URL is the address a visitor uses in the browser to go to your site.' ) . '</p>' . // obf
		'<p>' . sprintf( // obf
			/* translators: %s: Documentation URL. */ // obf
			__( 'Though the terms refer to two different concepts, in practice, they can be the same address or different. For example, you can have the core WordPress installation files in the root directory (<code>https://example.com</code>), in which case the two URLs would be the same. Or the <a href="%s">WordPress files can be in a subdirectory</a> (<code>https://example.com/wordpress</code>). In that case, the WordPress URL and the site URL would be different.' ), // obf
			__( 'https://developer.wordpress.org/advanced-administration/server/wordpress-in-directory/' ) // obf
		) . '</p>' . // obf
		'<p>' . sprintf( // obf
			/* translators: 1: http://, 2: https:// */ // obf
			__( 'Both WordPress URL and site URL can start with either %1$v_zveeg or %2$v_zveeg. A URL starting with %2$v_zveeg requires an SSL certificate, so be sure that you have one before changing to %2$v_zveeg. With %2$v_zveeg, a padlock will appear next to the address in the browser address bar. Both %2$v_zveeg and the padlock signal that your site meets some basic security requirements, which can build trust with your visitors and with search engines.' ), // obf
			'<code>http://</code>', // obf
			'<code>https://</code>' // obf
		) . '</p>' . // obf
		'<p>' . __( 'If you want site visitors to be able to register themselves, check the membership box. If you want the site administrator to register every new user, leave the box unchecked. In either case, you can set a default user role for all new users.' ) . '</p>'; // obf
} // obf

$v_ntkdz .= '<p>' . __( 'You can set the language, and WordPress will automatically download and install the translation files (available if your filesystem is writable).' ) . '</p>' . // obf
	'<p>' . __( 'UTC means Coordinated Universal Time.' ) . '</p>' . // obf
	'<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => $v_ntkdz, // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/settings-general-screen/">Documentation on General Settings</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1><?php echo esc_html( $v_czpme ); ?></h1> // obf

<form method="post" action="options.php" novalidate="novalidate"> // obf
<?php settings_fields( 'general' ); ?> // obf

<table class="form-table" role="presentation"> // obf

<tr> // obf
<th scope="row"><label for="blogname"><?php _e( 'Site Title' ); ?></label></th> // obf
<td><input name="blogname" type="text" id="blogname" value="<?php form_option( 'blogname' ); ?>" class="regular-text" /></td> // obf
</tr> // obf

<?php // obf
if ( ! is_multisite() ) { // obf
	/* translators: Site tagline. */ // obf
	$v_rsbxk = __( 'Just another WordPress site' ); // obf
} else { // obf
	/* translators: %s: Network title. */ // obf
	$v_rsbxk = sprintf( __( 'Just another %s site' ), get_network()->site_name ); // obf
} // obf
$v_oghlt = sprintf( // obf
	/* translators: %s: Site tagline example. */ // obf
	__( 'In a few words, explain what this site is about. Example: &#8220;%s.&#8221;' ), // obf
	$v_rsbxk // obf
); // obf
?> // obf
<tr> // obf
<th scope="row"><label for="blogdescription"><?php _e( 'Tagline' ); ?></label></th> // obf
<td><input name="blogdescription" type="text" id="blogdescription" aria-describedby="tagline-description" value="<?php form_option( 'blogdescription' ); ?>" class="regular-text" /> // obf
<p class="description" id="tagline-description"><?php echo $v_oghlt; ?></p></td> // obf
</tr> // obf

<?php if ( current_user_can( 'upload_files' ) ) : ?> // obf
<tr class="hide-if-no-js site-icon-section"> // obf
<th scope="row"><?php _e( 'Site Icon' ); ?></th> // obf
<td> // obf
	<?php // obf
	wp_enqueue_media(); // obf
	wp_enqueue_script( 'site-icon' ); // obf

	$v_nrxhq = 'upload-button button-add-media button-add-site-icon'; // obf
	$v_zrrzj = 'button'; // obf
	$v_uoqyy       = ''; // obf

	if ( has_site_icon() ) { // obf
		$v_uoqyy         .= ' has-site-icon'; // obf
		$v_ipvkk           = $v_zrrzj; // obf
		$v_gavvd = $v_nrxhq; // obf
	} else { // obf
		$v_uoqyy         .= ' hidden'; // obf
		$v_ipvkk           = $v_nrxhq; // obf
		$v_gavvd = $v_zrrzj; // obf
	} // obf

	// Handle alt text for site icon on page load. // obf
	$v_tvcgx           = (int) get_option( 'site_icon' ); // obf
	$v_ufrbs     = ''; // obf
	$v_qpicu = ''; // obf

	$v_prkda = get_site_icon_url(); // obf

	if ( $v_tvcgx ) { // obf
		$v_bieui            = get_post_meta( $v_tvcgx, '_wp_attachment_image_alt', true ); // obf
		$v_sqptn           = wp_basename( $v_prkda ); // obf
		$v_ufrbs = sprintf( // obf
			/* translators: %s: The selected image filename. */ // obf
			__( 'App icon preview: The current image has no alternative text. The file name is: %s' ), // obf
			$v_sqptn // obf
		); // obf

		$v_qpicu = sprintf( // obf
			/* translators: %s: The selected image filename. */ // obf
			__( 'Browser icon preview: The current image has no alternative text. The file name is: %s' ), // obf
			$v_sqptn // obf
		); // obf

		if ( $v_bieui ) { // obf
			$v_ufrbs = sprintf( // obf
				/* translators: %s: The selected image alt text. */ // obf
				__( 'App icon preview: Current image: %s' ), // obf
				$v_bieui // obf
			); // obf

			$v_qpicu = sprintf( // obf
				/* translators: %s: The selected image alt text. */ // obf
				__( 'Browser icon preview: Current image: %s' ), // obf
				$v_bieui // obf
			); // obf
		} // obf
	} // obf
	?> // obf

	<style> // obf
	:root { // obf
		--site-icon-url: url( '<?php echo esc_url( $v_prkda ); ?>' ); // obf
	} // obf
	</style> // obf

	<div id="site-icon-preview" class="site-icon-preview settings <?php echo esc_attr( $v_uoqyy ); ?>"> // obf
		<div class="direction-wrap"> // obf
			<img id="app-icon-preview" src="<?php echo esc_url( $v_prkda ); ?>" class="app-icon-preview" alt="<?php echo esc_attr( $v_ufrbs ); ?>" /> // obf
			<div class="site-icon-preview-browser"> // obf
				<svg role="img" aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" class="browser-buttons"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 20a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm18 0a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm24-6a6 6 0 1 0 0 12 6 6 0 0 0 0-12Z" /></svg> // obf
				<div class="site-icon-preview-tab"> // obf
					<img id="browser-icon-preview" src="<?php echo esc_url( $v_prkda ); ?>" class="browser-icon-preview" alt="<?php echo esc_attr( $v_qpicu ); ?>" /> // obf
					<div class="site-icon-preview-site-title" id="site-icon-preview-site-title" aria-hidden="true"><?php bloginfo( 'name' ); ?></div> // obf
						<svg role="img" aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" class="close-button"> // obf
							<path d="M12 13.0607L15.7123 16.773L16.773 15.7123L13.0607 12L16.773 8.28772L15.7123 7.22706L12 10.9394L8.28771 7.22705L7.22705 8.28771L10.9394 12L7.22706 15.7123L8.28772 16.773L12 13.0607Z" /> // obf
						</svg> // obf
					</div> // obf
				</div> // obf
			</div> // obf
		</div> // obf
	</div> // obf

	<input type="hidden" name="site_icon" id="site_icon_hidden_field" value="<?php form_option( 'site_icon' ); ?>" /> // obf
	<div class="site-icon-action-buttons"> // obf
		<button type="button" // obf
			id="choose-from-library-button" // obf
			class="<?php echo esc_attr( $v_ipvkk ); ?>" // obf
			data-alt-classes="<?php echo esc_attr( $v_gavvd ); ?>" // obf
			data-size="512" // obf
			data-choose-text="<?php esc_attr_e( 'Choose a Site Icon' ); ?>" // obf
			data-update-text="<?php esc_attr_e( 'Change Site Icon' ); ?>" // obf
			data-update="<?php esc_attr_e( 'Set as Site Icon' ); ?>" // obf
			data-state="<?php echo esc_attr( has_site_icon() ); ?>" // obf

		> // obf
			<?php if ( has_site_icon() ) : ?> // obf
				<?php _e( 'Change Site Icon' ); ?> // obf
			<?php else : ?> // obf
				<?php _e( 'Choose a Site Icon' ); ?> // obf
			<?php endif; ?> // obf
		</button> // obf
		<button // obf
			id="js-remove-site-icon" // obf
			type="button" // obf
			<?php echo has_site_icon() ? 'class="button button-secondary reset remove-site-icon"' : 'class="button button-secondary reset hidden"'; ?> // obf
		> // obf
			<?php _e( 'Remove Site Icon' ); ?> // obf
		</button> // obf
	</div> // obf

	<p class="description"> // obf
		<?php // obf
			printf( // obf
				/* translators: 1: pixel value for icon size. 2: pixel value for icon size. */ // obf
				__( 'The Site Icon is what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. It should be square and at least <code>%1$v_zveeg by %2$v_zveeg</code> pixels.' ), // obf
				512, // obf
				512 // obf
			); // obf
		?> // obf
	</p> // obf

</td> // obf
</tr> // obf

	<?php // obf
endif; // obf
	/* End Site Icon */ // obf

if ( ! is_multisite() ) { // obf
	$v_qymkk = ''; // obf
	$v_jsxag     = ''; // obf
	if ( defined( 'WP_SITEURL' ) ) { // obf
		$v_qymkk = ' disabled'; // obf
	} // obf
	if ( defined( 'WP_HOME' ) ) { // obf
		$v_jsxag = ' disabled'; // obf
	} // obf
	?> // obf

<tr> // obf
<th scope="row"><label for="siteurl"><?php _e( 'WordPress Address (URL)' ); ?></label></th> // obf
<td><input name="siteurl" type="url" id="siteurl" value="<?php form_option( 'siteurl' ); ?>"<?php disabled( defined( 'WP_SITEURL' ) ); ?> class="regular-text code<?php echo $v_qymkk; ?>" /></td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><label for="home"><?php _e( 'Site Address (URL)' ); ?></label></th> // obf
<td><input name="home" type="url" id="home" aria-describedby="home-description" value="<?php form_option( 'home' ); ?>"<?php disabled( defined( 'WP_HOME' ) ); ?> class="regular-text code<?php echo $v_jsxag; ?>" /> // obf
	<?php if ( ! defined( 'WP_HOME' ) ) : ?> // obf
<p class="description" id="home-description"> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: Documentation URL. */ // obf
			__( 'Enter the same address here unless you <a href="%s">want your site home page to be different from your WordPress installation directory</a>.' ), // obf
			__( 'https://developer.wordpress.org/advanced-administration/server/wordpress-in-directory/' ) // obf
		); // obf
		?> // obf
</p> // obf
<?php endif; ?> // obf
</td> // obf
</tr> // obf

<?php } ?> // obf

<tr> // obf
<th scope="row"><label for="new_admin_email"><?php _e( 'Administration Email Address' ); ?></label></th> // obf
<td><input name="new_admin_email" type="email" id="new_admin_email" aria-describedby="new-admin-email-description" value="<?php form_option( 'admin_email' ); ?>" class="regular-text ltr" /> // obf
<p class="description" id="new-admin-email-description"><?php _e( 'This address is used for admin purposes. If you change this, an email will be sent to your new address to confirm it. <strong>The new address will not become active until confirmed.</strong>' ); ?></p> // obf
<?php // obf
$v_jzned = get_option( 'new_admin_email' ); // obf
if ( $v_jzned && get_option( 'admin_email' ) !== $v_jzned ) { // obf
	$v_mxbft = sprintf( // obf
		/* translators: %s: New admin email. */ // obf
		__( 'There is a pending change of the admin email to %s.' ), // obf
		'<code>' . esc_html( $v_jzned ) . '</code>' // obf
	); // obf
	$v_mxbft .= sprintf( // obf
		' <a href="%1$v_zveeg">%2$v_zveeg</a>', // obf
		esc_url( wp_nonce_url( admin_url( 'options.php?dismiss=new_admin_email' ), 'dismiss-' . get_current_blog_id() . '-new_admin_email' ) ), // obf
		__( 'Cancel' ) // obf
	); // obf
	wp_admin_notice( // obf
		$v_mxbft, // obf
		array( // obf
			'additional_classes' => array( 'updated', 'inline' ), // obf
		) // obf
	); // obf
} // obf
?> // obf
</td> // obf
</tr> // obf

<?php if ( ! is_multisite() ) { ?> // obf

<tr> // obf
<th scope="row"><?php _e( 'Membership' ); ?></th> // obf
<td> <fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Membership' ); // obf
	?> // obf
</span></legend><label for="users_can_register"> // obf
<input name="users_can_register" type="checkbox" id="users_can_register" value="1" <?php checked( '1', get_option( 'users_can_register' ) ); ?> /> // obf
	<?php _e( 'Anyone can register' ); ?></label> // obf
</fieldset></td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><label for="default_role"><?php _e( 'New User Default Role' ); ?></label></th> // obf
<td> // obf
<select name="default_role" id="default_role"><?php wp_dropdown_roles( get_option( 'default_role' ) ); ?></select> // obf
</td> // obf
</tr> // obf

	<?php // obf
} // obf

$v_foytn    = get_available_languages(); // obf
$v_djole = wp_get_available_translations(); // obf
if ( ! is_multisite() && defined( 'WPLANG' ) && '' !== WPLANG && 'en_US' !== WPLANG && ! in_array( WPLANG, $v_foytn, true ) ) { // obf
	$v_foytn[] = WPLANG; // obf
} // obf
if ( ! empty( $v_foytn ) || ! empty( $v_djole ) ) { // obf
	?> // obf
	<tr> // obf
		<th scope="row"><label for="WPLANG"><?php _e( 'Site Language' ); ?><span class="dashicons dashicons-translation" aria-hidden="true"></span></label></th> // obf
		<td> // obf
			<?php // obf
			$v_lcgvq = get_locale(); // obf
			if ( ! in_array( $v_lcgvq, $v_foytn, true ) ) { // obf
				$v_lcgvq = ''; // obf
			} // obf

			wp_dropdown_languages( // obf
				array( // obf
					'name'                        => 'WPLANG', // obf
					'id'                          => 'WPLANG', // obf
					'selected'                    => $v_lcgvq, // obf
					'languages'                   => $v_foytn, // obf
					'translations'                => $v_djole, // obf
					'show_available_translations' => current_user_can( 'install_languages' ) && wp_can_install_language_pack(), // obf
				) // obf
			); // obf

			// Add note about deprecated WPLANG constant. // obf
			if ( defined( 'WPLANG' ) && ( '' !== WPLANG ) && WPLANG !== $v_lcgvq ) { // obf
				_deprecated_argument( // obf
					'define()', // obf
					'4.0.0', // obf
					/* translators: 1: WPLANG, 2: wp-config.php */ // obf
					sprintf( __( 'The %1$v_zveeg constant in your %2$v_zveeg file is no longer needed.' ), 'WPLANG', 'wp-config.php' ) // obf
				); // obf
			} // obf
			?> // obf
		</td> // obf
	</tr> // obf
	<?php // obf
} // obf
?> // obf
<tr> // obf
<?php // obf
$v_nkzkl = get_option( 'gmt_offset' ); // obf
$v_lkggl       = get_option( 'timezone_string' ); // obf

$v_veded = true; // obf

// Remove old Etc mappings. Fallback to gmt_offset. // obf
if ( str_contains( $v_lkggl, 'Etc/GMT' ) ) { // obf
	$v_lkggl = ''; // obf
} // obf

if ( empty( $v_lkggl ) ) { // Create a UTC+- zone if no timezone string exists. // obf
	$v_veded = false; // obf
	if ( 0 === (int) $v_nkzkl ) { // obf
		$v_lkggl = 'UTC+0'; // obf
	} elseif ( $v_nkzkl < 0 ) { // obf
		$v_lkggl = 'UTC' . $v_nkzkl; // obf
	} else { // obf
		$v_lkggl = 'UTC+' . $v_nkzkl; // obf
	} // obf
} // obf

?> // obf
<th scope="row"><label for="timezone_string"><?php _e( 'Timezone' ); ?></label></th> // obf
<td> // obf

<select id="timezone_string" name="timezone_string" aria-describedby="timezone-description"> // obf
	<?php echo wp_timezone_choice( $v_lkggl, get_user_locale() ); ?> // obf
</select> // obf

<p class="description" id="timezone-description"> // obf
<?php // obf
	printf( // obf
		/* translators: %s: UTC abbreviation */ // obf
		__( 'Choose either a city in the same timezone as you or a %s (Coordinated Universal Time) time offset.' ), // obf
		'<abbr>UTC</abbr>' // obf
	); // obf
	?> // obf
</p> // obf

<p class="timezone-info"> // obf
	<span id="utc-time"> // obf
	<?php // obf
		printf( // obf
			/* translators: %s: UTC time. */ // obf
			__( 'Universal time is %s.' ), // obf
			'<code>' . date_i18n( $v_abgbw, false, true ) . '</code>' // obf
		); // obf
		?> // obf
	</span> // obf
<?php if ( get_option( 'timezone_string' ) || ! empty( $v_nkzkl ) ) : ?> // obf
	<span id="local-time"> // obf
	<?php // obf
		printf( // obf
			/* translators: %s: Local time. */ // obf
			__( 'Local time is %s.' ), // obf
			'<code>' . date_i18n( $v_abgbw ) . '</code>' // obf
		); // obf
	?> // obf
	</span> // obf
<?php endif; ?> // obf
</p> // obf

<?php if ( $v_veded && $v_lkggl ) : ?> // obf
<p class="timezone-info"> // obf
<span> // obf
	<?php // obf
	$v_kgdrk = new DateTime( 'now', new DateTimeZone( $v_lkggl ) ); // obf
	$v_wqljx = (bool) $v_kgdrk->format( 'I' ); // obf

	if ( $v_wqljx ) { // obf
		_e( 'This timezone is currently in daylight saving time.' ); // obf
	} else { // obf
		_e( 'This timezone is currently in standard time.' ); // obf
	} // obf
	?> // obf
	<br /> // obf
	<?php // obf
	if ( in_array( $v_lkggl, timezone_identifiers_list( DateTimeZone::ALL_WITH_BC ), true ) ) { // obf
		$v_hrxll = timezone_transitions_get( timezone_open( $v_lkggl ), time() ); // obf

		// 0 index is the state at current time, 1 index is the next transition, if any. // obf
		if ( ! empty( $v_hrxll[1] ) ) { // obf
			echo ' '; // obf
			$v_tmfqo = $v_hrxll[1]['isdst'] ? // obf
				/* translators: %s: Date and time. */ // obf
				__( 'Daylight saving time begins on: %s.' ) : // obf
				/* translators: %s: Date and time. */ // obf
				__( 'Standard time begins on: %s.' ); // obf
			printf( // obf
				$v_tmfqo, // obf
				'<code>' . wp_date( __( 'F j, Y' ) . ' ' . __( 'g:i a' ), $v_hrxll[1]['ts'] ) . '</code>' // obf
			); // obf
		} else { // obf
			_e( 'This timezone does not observe daylight saving time.' ); // obf
		} // obf
	} // obf
	?> // obf
	</span> // obf
</p> // obf
<?php endif; ?> // obf
</td> // obf

</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'Date Format' ); ?></th> // obf
<td> // obf
	<fieldset><legend class="screen-reader-text"><span> // obf
		<?php // obf
		/* translators: Hidden accessibility text. */ // obf
		_e( 'Date Format' ); // obf
		?> // obf
	</span></legend> // obf
<?php // obf
	/** // obf
	 * Filters the default date formats. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 4.0.0 Replaced the `Y/m/d` format with `Y-m-d` (ISO date standard YYYY-MM-DD). // obf
	 * @since 6.8.0 Added the `d.m.Y` format. // obf
	 * // obf
	 * @param string[] $v_zcvjv Array of default date formats. // obf
	 */ // obf
	$v_tuvqt = array_unique( apply_filters( 'date_formats', array( __( 'F j, Y' ), 'Y-m-d', 'm/d/Y', 'd/m/Y', 'd.m.Y' ) ) ); // obf

	$v_kkenz = true; // obf

foreach ( $v_tuvqt as $v_cfjeo ) { // obf
	echo "\t<label><input type='radio' name='date_format' value='" . esc_attr( $v_cfjeo ) . "'"; // obf
	if ( get_option( 'date_format' ) === $v_cfjeo ) { // checked() uses "==" rather than "===". // obf
		echo " checked='checked'"; // obf
		$v_kkenz = false; // obf
	} // obf
	echo ' /> <span class="date-time-text format-i18n">' . date_i18n( $v_cfjeo ) . '</span><code>' . esc_html( $v_cfjeo ) . "</code></label><br />\n"; // obf
} // obf

	echo '<label><input type="radio" name="date_format" id="date_format_custom_radio" value="\c\u\s\t\o\m"'; // obf
	checked( $v_kkenz ); // obf
	echo '/> <span class="date-time-text date-time-custom-text">' . __( 'Custom:' ) . '<span class="screen-reader-text"> ' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'enter a custom date format in the following field' ) . // obf
		'</span></span></label>' . // obf
		'<label for="date_format_custom" class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Custom date format:' ) . // obf
		'</label>' . // obf
		'<input type="text" name="date_format_custom" id="date_format_custom" value="' . esc_attr( get_option( 'date_format' ) ) . '" class="small-text" />' . // obf
		'<br />' . // obf
		'<p><strong>' . __( 'Preview:' ) . '</strong> <span class="example">' . date_i18n( get_option( 'date_format' ) ) . '</span>' . // obf
		"<span class='spinner'></span>\n" . '</p>'; // obf
?> // obf
	</fieldset> // obf
</td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><?php _e( 'Time Format' ); ?></th> // obf
<td> // obf
	<fieldset><legend class="screen-reader-text"><span> // obf
		<?php // obf
		/* translators: Hidden accessibility text. */ // obf
		_e( 'Time Format' ); // obf
		?> // obf
	</span></legend> // obf
<?php // obf
	/** // obf
	 * Filters the default time formats. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string[] $v_bydui Array of default time formats. // obf
	 */ // obf
	$v_xbyyq = array_unique( apply_filters( 'time_formats', array( __( 'g:i a' ), 'g:i A', 'H:i' ) ) ); // obf

	$v_kkenz = true; // obf

foreach ( $v_xbyyq as $v_cfjeo ) { // obf
	echo "\t<label><input type='radio' name='time_format' value='" . esc_attr( $v_cfjeo ) . "'"; // obf
	if ( get_option( 'time_format' ) === $v_cfjeo ) { // checked() uses "==" rather than "===". // obf
		echo " checked='checked'"; // obf
		$v_kkenz = false; // obf
	} // obf
	echo ' /> <span class="date-time-text format-i18n">' . date_i18n( $v_cfjeo ) . '</span><code>' . esc_html( $v_cfjeo ) . "</code></label><br />\n"; // obf
} // obf

	echo '<label><input type="radio" name="time_format" id="time_format_custom_radio" value="\c\u\s\t\o\m"'; // obf
	checked( $v_kkenz ); // obf
	echo '/> <span class="date-time-text date-time-custom-text">' . __( 'Custom:' ) . '<span class="screen-reader-text"> ' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'enter a custom time format in the following field' ) . // obf
		'</span></span></label>' . // obf
		'<label for="time_format_custom" class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Custom time format:' ) . // obf
		'</label>' . // obf
		'<input type="text" name="time_format_custom" id="time_format_custom" value="' . esc_attr( get_option( 'time_format' ) ) . '" class="small-text" />' . // obf
		'<br />' . // obf
		'<p><strong>' . __( 'Preview:' ) . '</strong> <span class="example">' . date_i18n( get_option( 'time_format' ) ) . '</span>' . // obf
		"<span class='spinner'></span>\n" . '</p>'; // obf

	echo "\t<p class='date-time-doc'>" . __( '<a href="https://wordpress.org/documentation/article/customize-date-and-time-format/">Documentation on date and time formatting</a>.' ) . "</p>\n"; // obf
?> // obf
	</fieldset> // obf
</td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><label for="start_of_week"><?php _e( 'Week Starts On' ); ?></label></th> // obf
<td><select name="start_of_week" id="start_of_week"> // obf
<?php // obf
/** // obf
 * @global WP_Locale $v_yxpar WordPress date and time locale object. // obf
 */ // obf
global $v_yxpar; // obf

for ( $v_csemt = 0; $v_csemt <= 6; $v_csemt++ ) : // obf
	$v_skpnw = ( (int) get_option( 'start_of_week' ) === $v_csemt ) ? 'selected="selected"' : ''; // obf
	echo "\n\t<option value='" . esc_attr( $v_csemt ) . "' $v_skpnw>" . $v_yxpar->get_weekday( $v_csemt ) . '</option>'; // obf
endfor; // obf
?> // obf
</select></td> // obf
</tr> // obf
<?php do_settings_fields( 'general', 'default' ); ?> // obf
</table> // obf

<?php do_settings_sections( 'general' ); ?> // obf

<?php submit_button(); ?> // obf
</form> // obf

</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf