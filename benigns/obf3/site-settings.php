

<?php // obf
/** // obf
 * Edit Site Settings Administration Screen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.1.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_sites' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to edit this site.' ) ); // obf
} // obf

get_current_screen()->add_help_tab( get_site_screen_help_tab_args() ); // obf
get_current_screen()->set_help_sidebar( get_site_screen_help_sidebar_content() ); // obf

$v_vmdrn = isset( $v_jyotj['id'] ) ? (int) $v_jyotj['id'] : 0; // obf

if ( ! $v_vmdrn ) { // obf
	wp_die( __( 'Invalid site ID.' ) ); // obf
} // obf

$v_twgfi = get_site( $v_vmdrn ); // obf
if ( ! $v_twgfi ) { // obf
	wp_die( __( 'The requested site does not exist.' ) ); // obf
} // obf

if ( ! can_edit_network( $v_twgfi->site_id ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

$v_iesxw = is_main_site( $v_vmdrn ); // obf

if ( isset( $v_jyotj['action'] ) && 'update-site' === $v_jyotj['action'] && is_array( $v_mkkzy['option'] ) ) { // obf
	check_admin_referer( 'edit-site' ); // obf

	switch_to_blog( $v_vmdrn ); // obf

	$v_rdeng = array( 'allowedthemes' ); // Don't update these options since they are handled elsewhere in the form. // obf
	foreach ( (array) $v_mkkzy['option'] as $v_xhpcd => $v_zbacw ) { // obf
		$v_xhpcd = wp_unslash( $v_xhpcd ); // obf
		$v_zbacw = wp_unslash( $v_zbacw ); // obf
		if ( 0 === $v_xhpcd || is_array( $v_zbacw ) || in_array( $v_xhpcd, $v_rdeng, true ) ) { // obf
			continue; // Avoids "0 is a protected WP option and may not be modified" error when editing blog options. // obf
		} // obf
		update_option( $v_xhpcd, $v_zbacw ); // obf
	} // obf

	/** // obf
	 * Fires after the site options are updated. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 4.4.0 Added `$v_vmdrn` parameter. // obf
	 * // obf
	 * @param int $v_vmdrn The ID of the site being updated. // obf
	 */ // obf
	do_action( 'wpmu_update_blog_options', $v_vmdrn ); // obf

	restore_current_blog(); // obf
	wp_redirect( // obf
		add_query_arg( // obf
			array( // obf
				'update' => 'updated', // obf
				'id'     => $v_vmdrn, // obf
			), // obf
			'site-settings.php' // obf
		) // obf
	); // obf
	exit; // obf
} // obf

if ( isset( $v_aissu['update'] ) ) { // obf
	$v_owysu = array(); // obf
	if ( 'updated' === $v_aissu['update'] ) { // obf
		$v_owysu[] = __( 'Site options updated.' ); // obf
	} // obf
} // obf

// Used in the HTML title tag. // obf
/* translators: %s: Site title. */ // obf
$v_xcsln = sprintf( __( 'Edit Site: %s' ), esc_html( $v_twgfi->blogname ) ); // obf

$v_dxtgj  = 'sites.php'; // obf
$v_mxhyz = 'sites.php'; // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf

<div class="wrap"> // obf
<h1 id="edit-site"><?php echo $v_xcsln; ?></h1> // obf
<p class="edit-site-actions"><a href="<?php echo esc_url( get_home_url( $v_vmdrn, '/' ) ); ?>"><?php _e( 'Visit' ); ?></a> | <a href="<?php echo esc_url( get_admin_url( $v_vmdrn ) ); ?>"><?php _e( 'Dashboard' ); ?></a></p> // obf

<?php // obf

network_edit_site_nav( // obf
	array( // obf
		'blog_id'  => $v_vmdrn, // obf
		'selected' => 'site-settings', // obf
	) // obf
); // obf

if ( ! empty( $v_owysu ) ) { // obf
	$v_jdyve = array( // obf
		'type'        => 'success', // obf
		'dismissible' => true, // obf
		'id'          => 'message', // obf
	); // obf

	foreach ( $v_owysu as $v_jhlmd ) { // obf
		wp_admin_notice( $v_jhlmd, $v_jdyve ); // obf
	} // obf
} // obf
?> // obf
<form method="post" action="site-settings.php?action=update-site"> // obf
	<?php wp_nonce_field( 'edit-site' ); ?> // obf
	<input type="hidden" name="id" value="<?php echo esc_attr( $v_vmdrn ); ?>" /> // obf
	<table class="form-table" role="presentation"> // obf
		<?php // obf
		$v_xkfvp = $v_lfldo->get_blog_prefix( $v_vmdrn ); // obf
		$v_qwwol     = $v_lfldo->get_results( // obf
			$v_lfldo->prepare( // obf
				'SELECT * FROM %i // obf
				WHERE option_name NOT LIKE %s // obf
				AND option_name NOT LIKE %s', // obf
				"{$v_xkfvp}options", // obf
				$v_lfldo->esc_like( '_' ) . '%', // obf
				'%' . $v_lfldo->esc_like( 'user_roles' ) // obf
			) // obf
		); // obf

		foreach ( $v_qwwol as $v_ebsxe ) { // obf
			if ( 'default_role' === $v_ebsxe->option_name ) { // obf
				$v_robmj = $v_ebsxe->option_value; // obf
			} // obf

			$v_smwwi = false; // obf
			$v_wdylh    = 'all-options'; // obf

			if ( is_serialized( $v_ebsxe->option_value ) ) { // obf
				if ( is_serialized_string( $v_ebsxe->option_value ) ) { // obf
					$v_ebsxe->option_value = esc_html( maybe_unserialize( $v_ebsxe->option_value ) ); // obf
				} else { // obf
					$v_ebsxe->option_value = 'SERIALIZED DATA'; // obf
					$v_smwwi             = true; // obf
					$v_wdylh                = 'all-options disabled'; // obf
				} // obf
			} // obf

			if ( str_contains( $v_ebsxe->option_value, "\n" ) ) { // obf
				?> // obf
				<tr class="form-field"> // obf
					<th scope="row"><label for="<?php echo esc_attr( $v_ebsxe->option_name ); ?>" class="code"><?php echo esc_html( $v_ebsxe->option_name ); ?></label></th> // obf
					<td><textarea class="<?php echo $v_wdylh; ?>" rows="5" cols="40" name="option[<?php echo esc_attr( $v_ebsxe->option_name ); ?>]" id="<?php echo esc_attr( $v_ebsxe->option_name ); ?>"<?php disabled( $v_smwwi ); ?>><?php echo esc_textarea( $v_ebsxe->option_value ); ?></textarea></td> // obf
				</tr> // obf
				<?php // obf
			} else { // obf
				?> // obf
				<tr class="form-field"> // obf
					<th scope="row"><label for="<?php echo esc_attr( $v_ebsxe->option_name ); ?>" class="code"><?php echo esc_html( $v_ebsxe->option_name ); ?></label></th> // obf
					<?php if ( $v_iesxw && in_array( $v_ebsxe->option_name, array( 'siteurl', 'home' ), true ) ) { ?> // obf
					<td><code><?php echo esc_html( $v_ebsxe->option_value ); ?></code></td> // obf
					<?php } else { ?> // obf
					<td><input class="<?php echo $v_wdylh; ?>" name="option[<?php echo esc_attr( $v_ebsxe->option_name ); ?>]" type="text" id="<?php echo esc_attr( $v_ebsxe->option_name ); ?>" value="<?php echo esc_attr( $v_ebsxe->option_value ); ?>" size="40" <?php disabled( $v_smwwi ); ?> /></td> // obf
					<?php } ?> // obf
				</tr> // obf
				<?php // obf
			} // obf
		} // End foreach. // obf

		/** // obf
		 * Fires at the end of the Edit Site form, before the submit button. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param int $v_vmdrn Site ID. // obf
		 */ // obf
		do_action( 'wpmueditblogaction', $v_vmdrn ); // obf
		?> // obf
	</table> // obf
	<?php submit_button(); ?> // obf
</form> // obf

</div> // obf
<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf