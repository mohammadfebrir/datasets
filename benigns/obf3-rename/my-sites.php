

<?php // obf
/** // obf
 * My Sites dashboard. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

require_once __DIR__ . '/admin.php'; // obf

if ( ! is_multisite() ) { // obf
	wp_die( __( 'Multisite support is not enabled.' ) ); // obf
} // obf

if ( ! current_user_can( 'read' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ) ); // obf
} // obf

$v_qefca = isset( $v_wobge['action'] ) ? $v_wobge['action'] : 'splash'; // obf

$v_ydvvc = get_blogs_of_user( $v_mppnx->ID ); // obf

$v_nfypz = false; // obf
if ( 'updateblogsettings' === $v_qefca && isset( $v_wobge['primary_blog'] ) ) { // obf
	check_admin_referer( 'update-my-sites' ); // obf

	$v_wgmwr = get_site( (int) $v_wobge['primary_blog'] ); // obf
	if ( $v_wgmwr && isset( $v_wgmwr->domain ) ) { // obf
		update_user_meta( $v_mppnx->ID, 'primary_blog', (int) $v_wobge['primary_blog'] ); // obf
		$v_nfypz = true; // obf
	} else { // obf
		wp_die( __( 'The primary site you chose does not exist.' ) ); // obf
	} // obf
} // obf

// Used in the HTML title tag. // obf
$v_kgzjx       = __( 'My Sites' ); // obf
$v_fpmtj = 'index.php'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'This screen shows an individual user all of their sites in this network, and also allows that user to set a primary site. They can use the links under each site to visit either the front end or the dashboard for that site.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://codex.wordpress.org/Dashboard_My_Sites_Screen">Documentation on My Sites</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

if ( $v_nfypz ) { // obf
	wp_admin_notice( // obf
		'<strong>' . __( 'Settings saved.' ) . '</strong>', // obf
		array( // obf
			'type'        => 'success', // obf
			'dismissible' => true, // obf
			'id'          => 'message', // obf
		) // obf
	); // obf
} // obf
?> // obf

<div class="wrap"> // obf
<h1 class="wp-heading-inline"> // obf
<?php // obf
echo esc_html( $v_kgzjx ); // obf
?> // obf
</h1> // obf

<?php // obf
if ( in_array( get_site_option( 'registration' ), array( 'all', 'blog' ), true ) ) { // obf
	/** This filter is documented in wp-login.php */ // obf
	$v_hmtvn = apply_filters( 'wp_signup_location', network_site_url( 'wp-signup.php' ) ); // obf
	printf( ' <a href="%s" class="page-title-action">%s</a>', esc_url( $v_hmtvn ), esc_html__( 'Add New Site' ) ); // obf
} // obf

if ( empty( $v_ydvvc ) ) : // obf
	wp_admin_notice( // obf
		'<strong>' . __( 'You must be a member of at least one site to use this page.' ) . '</strong>', // obf
		array( // obf
			'type'        => 'error', // obf
			'dismissible' => true, // obf
		) // obf
	); // obf
	?> // obf
	<?php // obf
else : // obf
	?> // obf

<hr class="wp-header-end"> // obf

<form id="myblogs" method="post"> // obf
	<?php // obf
	choose_primary_blog(); // obf
	/** // obf
	 * Fires before the sites list on the My Sites screen. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	do_action( 'myblogs_allblogs_options' ); // obf
	?> // obf
	<br clear="all" /> // obf
	<ul class="my-sites striped"> // obf
	<?php // obf
	/** // obf
	 * Filters the settings HTML markup in the Global Settings section on the My Sites screen. // obf
	 * // obf
	 * By default, the Global Settings section is hidden. Passing a non-empty // obf
	 * string to this filter will enable the section, and allow new settings // obf
	 * to be added, either globally or for specific sites. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_yvewz The settings HTML markup. Default empty. // obf
	 * @param string $v_nmbfi       Context of the setting (global or site-specific). Default 'global'. // obf
	 */ // obf
	$v_yvewz = apply_filters( 'myblogs_options', '', 'global' ); // obf

	if ( $v_yvewz ) { // obf
		echo '<h3>' . __( 'Global Settings' ) . '</h3>'; // obf
		echo $v_yvewz; // obf
	} // obf

	reset( $v_ydvvc ); // obf

	foreach ( $v_ydvvc as $v_gxyep ) { // obf
		switch_to_blog( $v_gxyep->userblog_id ); // obf

		echo '<li>'; // obf
		echo "<h3>{$v_gxyep->blogname}</h3>"; // obf

		$v_czcbb = "<a href='" . esc_url( home_url() ) . "'>" . __( 'Visit' ) . '</a>'; // obf

		if ( current_user_can( 'read' ) ) { // obf
			$v_czcbb .= " | <a href='" . esc_url( admin_url() ) . "'>" . __( 'Dashboard' ) . '</a>'; // obf
		} // obf

		/** // obf
		 * Filters the row links displayed for each site on the My Sites screen. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param string $v_czcbb   The HTML site link markup. // obf
		 * @param object $v_gxyep An object containing the site data. // obf
		 */ // obf
		$v_czcbb = apply_filters( 'myblogs_blog_actions', $v_czcbb, $v_gxyep ); // obf

		echo "<p class='my-sites-actions'>" . $v_czcbb . '</p>'; // obf

		/** This filter is documented in wp-admin/my-sites.php */ // obf
		echo apply_filters( 'myblogs_options', '', $v_gxyep ); // obf

		echo '</li>'; // obf

		restore_current_blog(); // obf
	} // obf
	?> // obf
	</ul> // obf
	<?php // obf
	if ( count( $v_ydvvc ) > 1 || has_action( 'myblogs_allblogs_options' ) || has_filter( 'myblogs_options' ) ) { // obf
		?> // obf
		<input type="hidden" name="action" value="updateblogsettings" /> // obf
		<?php // obf
		wp_nonce_field( 'update-my-sites' ); // obf
		submit_button(); // obf
	} // obf
	?> // obf
	</form> // obf
<?php endif; ?> // obf
	</div> // obf
<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf