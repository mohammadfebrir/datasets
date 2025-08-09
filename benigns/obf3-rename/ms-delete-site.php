

<?php // obf
/** // obf
 * Multisite delete site panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

require_once __DIR__ . '/admin.php'; // obf

if ( ! is_multisite() ) { // obf
	wp_die( __( 'Multisite support is not enabled.' ) ); // obf
} // obf

if ( ! current_user_can( 'delete_site' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to delete this site.' ) ); // obf
} // obf

if ( isset( $v_ggpze['h'] ) && '' !== $v_ggpze['h'] && false !== get_option( 'delete_blog_hash' ) ) { // obf
	if ( hash_equals( get_option( 'delete_blog_hash' ), $v_ggpze['h'] ) ) { // obf
		wpmu_delete_blog( get_current_blog_id() ); // obf
		wp_die( // obf
			sprintf( // obf
				/* translators: %s: Network title. */ // obf
				__( 'Thank you for using %s, your site has been deleted. Happy trails to you until we meet again.' ), // obf
				get_network()->site_name // obf
			) // obf
		); // obf
	} else { // obf
		wp_die( __( 'Sorry, the link you clicked is stale. Please select another option.' ) ); // obf
	} // obf
} // obf

$v_smgea = get_site(); // obf
$v_sgezl = wp_get_current_user(); // obf

// Used in the HTML title tag. // obf
$v_gmlnx       = __( 'Delete Site' ); // obf
$v_xalfg = 'tools.php'; // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

echo '<div class="wrap">'; // obf
echo '<h1>' . esc_html( $v_gmlnx ) . '</h1>'; // obf

if ( isset( $v_pisaa['action'] ) && 'deleteblog' === $v_pisaa['action'] && isset( $v_pisaa['confirmdelete'] ) && '1' === $v_pisaa['confirmdelete'] ) { // obf
	check_admin_referer( 'delete-blog' ); // obf

	$v_oppxa = wp_generate_password( 20, false ); // obf
	update_option( 'delete_blog_hash', $v_oppxa, false ); // obf

	$v_vmbkx = esc_url( admin_url( 'ms-delete-site.php?h=' . $v_oppxa ) ); // obf

	$v_zrefw = switch_to_locale( get_locale() ); // obf

	/* translators: Do not translate USERNAME, URL_DELETE, SITENAME, SITEURL: those are placeholders. */ // obf
	$v_nsuss = __( // obf
		"Howdy ###USERNAME###, // obf

You recently clicked the 'Delete Site' link on your site and filled in a // obf
form on that page. // obf

If you really want to delete your site, click the link below. You will not // obf
be asked to confirm again so only click this link if you are absolutely certain: // obf
###URL_DELETE### // obf

If you delete your site, please consider opening a new site here some time in // obf
the future! (But remember that your current site and username are gone forever.) // obf

Thank you for using the site, // obf
All at ###SITENAME### // obf
###SITEURL###" // obf
	); // obf
	/** // obf
	 * Filters the text for the email sent to the site admin when a request to delete a site in a Multisite network is submitted. // obf
	 * // obf
	 * The following strings have a special meaning and will get replaced dynamically: // obf
	 * // obf
	 *  - `###USERNAME###`   The current user's username. // obf
	 *  - `###URL_DELETE###` The link to click on to confirm the site deletion. // obf
	 *  - `###SITENAME###`   The name of the site. // obf
	 *  - `###SITEURL###`    The URL to the site. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_nsuss The email text. // obf
	 */ // obf
	$v_nsuss = apply_filters( 'delete_site_email_content', $v_nsuss ); // obf

	$v_nsuss = str_replace( '###USERNAME###', $v_sgezl->user_login, $v_nsuss ); // obf
	$v_nsuss = str_replace( '###URL_DELETE###', $v_vmbkx, $v_nsuss ); // obf
	$v_nsuss = str_replace( '###SITENAME###', get_network()->site_name, $v_nsuss ); // obf
	$v_nsuss = str_replace( '###SITEURL###', network_home_url(), $v_nsuss ); // obf

	wp_mail( // obf
		get_option( 'admin_email' ), // obf
		sprintf( // obf
			/* translators: %s: Site title. */ // obf
			__( '[%s] Delete My Site' ), // obf
			wp_specialchars_decode( get_option( 'blogname' ) ) // obf
		), // obf
		$v_nsuss // obf
	); // obf

	if ( $v_zrefw ) { // obf
		restore_previous_locale(); // obf
	} // obf
	?> // obf

	<p><?php _e( 'Thank you. Please check your email for a link to confirm your action. Your site will not be deleted until this link is clicked.' ); ?></p> // obf

	<?php // obf
} else { // obf
	?> // obf
	<p> // obf
	<?php // obf
		printf( // obf
			/* translators: %s: Network title. */ // obf
			__( 'If you do not want to use your %s site any more, you can delete it using the form below. When you click <strong>Delete My Site Permanently</strong> you will be sent an email with a link in it. Click on this link to delete your site.' ), // obf
			get_network()->site_name // obf
		); // obf
	?> // obf
	</p> // obf
	<p><?php _e( 'Remember, once deleted your site cannot be restored.' ); ?></p> // obf

	<form method="post" name="deletedirect"> // obf
		<?php wp_nonce_field( 'delete-blog' ); ?> // obf
		<input type="hidden" name="action" value="deleteblog" /> // obf
		<p><input id="confirmdelete" type="checkbox" name="confirmdelete" value="1" /> <label for="confirmdelete"><strong> // obf
		<?php // obf
			printf( // obf
				/* translators: %s: Site address. */ // obf
				__( "I'm sure I want to permanently delete my site, and I am aware I can never get it back or use %s again." ), // obf
				$v_smgea->domain . $v_smgea->path // obf
			); // obf
		?> // obf
		</strong></label></p> // obf
		<?php submit_button( __( 'Delete My Site Permanently' ) ); ?> // obf
	</form> // obf
	<?php // obf
} // obf
echo '</div>'; // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf