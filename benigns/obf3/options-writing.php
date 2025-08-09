

<?php // obf
/** // obf
 * Writing settings administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_options' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to manage options for this site.' ) ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_ezpnm       = __( 'Writing Settings' ); // obf
$v_vugsy = 'options-general.php'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => '<p>' . __( 'You can submit content in several different ways; this screen holds the settings for all of them. The top section controls the editor within the dashboard, while the rest control external publishing methods. For more information on any of these methods, use the documentation links.' ) . '</p>' . // obf
			'<p>' . __( 'You must click the Save Changes button at the bottom of the screen for new settings to take effect.' ) . '</p>', // obf
	) // obf
); // obf

/** This filter is documented in wp-admin/options.php */ // obf
if ( apply_filters( 'enable_post_by_email_configuration', true ) ) { // obf
	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'options-postemail', // obf
			'title'   => __( 'Post Via Email' ), // obf
			'content' => '<p>' . __( 'Post via email settings allow you to send your WordPress installation an email with the content of your post. You must set up a secret email account with POP3 access to use this, and any mail received at this address will be posted, so it&#8217;s a good idea to keep this address very secret.' ) . '</p>', // obf
		) // obf
	); // obf
} // obf

/** This filter is documented in wp-admin/options-writing.php */ // obf
if ( apply_filters( 'enable_update_services_configuration', true ) ) { // obf
	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'options-services', // obf
			'title'   => __( 'Update Services' ), // obf
			'content' => '<p>' . __( 'If desired, WordPress will automatically alert various services of your new posts.' ) . '</p>', // obf
		) // obf
	); // obf
} // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/settings-writing-screen/">Documentation on Writing Settings</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

wp_enqueue_script( 'user-profile' ); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
<h1><?php echo esc_html( $v_ezpnm ); ?></h1> // obf

<form method="post" action="options.php"> // obf
<?php settings_fields( 'writing' ); ?> // obf

<table class="form-table" role="presentation"> // obf
<?php if ( get_site_option( 'initial_db_version' ) < 32453 ) : ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Formatting' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Formatting' ); // obf
	?> // obf
</span></legend> // obf
<label for="use_smilies"> // obf
<input name="use_smilies" type="checkbox" id="use_smilies" value="1" <?php checked( '1', get_option( 'use_smilies' ) ); ?> /> // obf
	<?php _e( 'Convert emoticons like <code>:-)</code> and <code>:-P</code> to graphics on display' ); ?></label><br /> // obf
<label for="use_balanceTags"><input name="use_balanceTags" type="checkbox" id="use_balanceTags" value="1" <?php checked( '1', get_option( 'use_balanceTags' ) ); ?> /> <?php _e( 'WordPress should correct invalidly nested XHTML automatically' ); ?></label> // obf
</fieldset></td> // obf
</tr> // obf
<?php endif; ?> // obf
<tr> // obf
<th scope="row"><label for="default_category"><?php _e( 'Default Post Category' ); ?></label></th> // obf
<td> // obf
<?php // obf
wp_dropdown_categories( // obf
	array( // obf
		'hide_empty'   => 0, // obf
		'name'         => 'default_category', // obf
		'orderby'      => 'name', // obf
		'selected'     => get_option( 'default_category' ), // obf
		'hierarchical' => true, // obf
	) // obf
); // obf
?> // obf
</td> // obf
</tr> // obf
<?php // obf
$v_lpxks = get_post_format_strings(); // obf
unset( $v_lpxks['standard'] ); // obf
?> // obf
<tr> // obf
<th scope="row"><label for="default_post_format"><?php _e( 'Default Post Format' ); ?></label></th> // obf
<td> // obf
	<select name="default_post_format" id="default_post_format"> // obf
		<option value="0"><?php echo get_post_format_string( 'standard' ); ?></option> // obf
<?php foreach ( $v_lpxks as $v_shoae => $v_rmtnc ) : ?> // obf
		<option<?php selected( get_option( 'default_post_format' ), $v_shoae ); ?> value="<?php echo esc_attr( $v_shoae ); ?>"><?php echo esc_html( $v_rmtnc ); ?></option> // obf
<?php endforeach; ?> // obf
	</select> // obf
</td> // obf
</tr> // obf
<?php // obf
if ( get_option( 'link_manager_enabled' ) ) : // obf
	?> // obf
<tr> // obf
<th scope="row"><label for="default_link_category"><?php _e( 'Default Link Category' ); ?></label></th> // obf
<td> // obf
	<?php // obf
	wp_dropdown_categories( // obf
		array( // obf
			'hide_empty'   => 0, // obf
			'name'         => 'default_link_category', // obf
			'orderby'      => 'name', // obf
			'selected'     => get_option( 'default_link_category' ), // obf
			'hierarchical' => true, // obf
			'taxonomy'     => 'link_category', // obf
		) // obf
	); // obf
	?> // obf
</td> // obf
</tr> // obf
<?php endif; ?> // obf

<?php // obf
do_settings_fields( 'writing', 'default' ); // obf
do_settings_fields( 'writing', 'remote_publishing' ); // A deprecated section. // obf
?> // obf
</table> // obf

<?php // obf
/** This filter is documented in wp-admin/options.php */ // obf
if ( apply_filters( 'enable_post_by_email_configuration', true ) ) { // obf
	?> // obf
<h2 class="title"><?php _e( 'Post via email' ); ?></h2> // obf
<p> // obf
	<?php // obf
	printf( // obf
		/* translators: 1, 2, 3: Examples of random email addresses. */ // obf
		__( 'To post to WordPress by email, you must set up a secret email account with POP3 access. Any mail received at this address will be posted, so it&#8217;s a good idea to keep this address very secret. Here are three random strings you could use: %1$v_jpiuk, %2$v_jpiuk, %3$v_jpiuk.' ), // obf
		sprintf( '<kbd>%s</kbd>', wp_generate_password( 8, false ) ), // obf
		sprintf( '<kbd>%s</kbd>', wp_generate_password( 8, false ) ), // obf
		sprintf( '<kbd>%s</kbd>', wp_generate_password( 8, false ) ) // obf
	); // obf
	?> // obf
</p> // obf

<table class="form-table" role="presentation"> // obf
<tr> // obf
<th scope="row"><label for="mailserver_url"><?php _e( 'Mail Server' ); ?></label></th> // obf
<td><input name="mailserver_url" type="text" id="mailserver_url" value="<?php form_option( 'mailserver_url' ); ?>" class="regular-text code" /> // obf
<label for="mailserver_port"><?php _e( 'Port' ); ?></label> // obf
<input name="mailserver_port" type="text" id="mailserver_port" value="<?php form_option( 'mailserver_port' ); ?>" class="small-text" /> // obf
</td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><label for="mailserver_login"><?php _e( 'Login Name' ); ?></label></th> // obf
<td><input name="mailserver_login" type="text" id="mailserver_login" value="<?php form_option( 'mailserver_login' ); ?>" class="regular-text ltr" /></td> // obf
</tr> // obf
<tr class="mailserver-pass-wrap"> // obf
	<th scope="row"> // obf
		<label for="mailserver_pass"> // obf
			<?php _e( 'Password' ); ?> // obf
		</label> // obf
	</th> // obf
	<td> // obf
		<input type="hidden" value=" " /><!-- #24364 workaround --> // obf
		<span class="wp-pwd"> // obf
			<input type="text" name="mailserver_pass" id="mailserver_pass" class="regular-text ltr" autocomplete="off" data-reveal="1" data-pw="<?php echo esc_attr( get_option( 'mailserver_pass' ) ); ?>" /> // obf
			<button type="button" class="button wp-hide-pw hide-if-no-js" data-toggle="0" data-start-masked="1" aria-label="<?php esc_attr_e( 'Hide password' ); ?>"> // obf
				<span class="dashicons dashicons-visibility" aria-hidden="true"></span> // obf
			</button> // obf
		</span> // obf
	</td> // obf
</tr> // obf
<tr> // obf
<th scope="row"><label for="default_email_category"><?php _e( 'Default Mail Category' ); ?></label></th> // obf
<td> // obf
	<?php // obf
	wp_dropdown_categories( // obf
		array( // obf
			'hide_empty'   => 0, // obf
			'name'         => 'default_email_category', // obf
			'orderby'      => 'name', // obf
			'selected'     => get_option( 'default_email_category' ), // obf
			'hierarchical' => true, // obf
		) // obf
	); // obf
	?> // obf
</td> // obf
</tr> // obf
	<?php do_settings_fields( 'writing', 'post_via_email' ); ?> // obf
</table> // obf
<?php } ?> // obf

<?php // obf
/** // obf
 * Filters whether to enable the Update Services section in the Writing settings screen. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param bool $v_bcyyz Whether to enable the Update Services settings area. Default true. // obf
 */ // obf
if ( apply_filters( 'enable_update_services_configuration', true ) ) { // obf
	?> // obf
<h2 class="title"><?php _e( 'Update Services' ); ?></h2> // obf

	<?php if ( '1' === get_option( 'blog_public' ) ) : ?> // obf

	<p><label for="ping_sites"> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: Documentation URL. */ // obf
			__( 'When you publish a new post, WordPress automatically notifies the following site update services. For more about this, see the <a href="%s">Update Services</a> documentation article. Separate multiple service URLs with line breaks.' ), // obf
			__( 'https://developer.wordpress.org/advanced-administration/wordpress/update-services/' ) // obf
		); // obf
		?> // obf
	</label></p> // obf

	<textarea name="ping_sites" id="ping_sites" class="large-text code" rows="3"><?php echo esc_textarea( get_option( 'ping_sites' ) ); ?></textarea> // obf

	<?php else : ?> // obf

	<p> // obf
		<?php // obf
		printf( // obf
			/* translators: 1: Documentation URL, 2: URL to Reading Settings screen. */ // obf
			__( 'WordPress is not notifying any <a href="%1$v_jpiuk">Update Services</a> because of your site&#8217;s <a href="%2$v_jpiuk">visibility settings</a>.' ), // obf
			__( 'https://developer.wordpress.org/advanced-administration/wordpress/update-services/' ), // obf
			'options-reading.php' // obf
		); // obf
		?> // obf
	</p> // obf

	<?php endif; ?> // obf
<?php } // enable_update_services_configuration ?> // obf

<?php do_settings_sections( 'writing' ); ?> // obf

<?php submit_button(); ?> // obf
</form> // obf
</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf