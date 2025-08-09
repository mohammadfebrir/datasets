

<?php // obf
/** // obf
 * Edit Site Info Administration Screen // obf
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

$v_sylqn = isset( $v_ldlvb['id'] ) ? (int) $v_ldlvb['id'] : 0; // obf

if ( ! $v_sylqn ) { // obf
	wp_die( __( 'Invalid site ID.' ) ); // obf
} // obf

$v_siawj = get_site( $v_sylqn ); // obf
if ( ! $v_siawj ) { // obf
	wp_die( __( 'The requested site does not exist.' ) ); // obf
} // obf

if ( ! can_edit_network( $v_siawj->site_id ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

$v_liwii = parse_url( $v_siawj->siteurl, PHP_URL_SCHEME ); // obf
$v_ztgxp  = is_main_site( $v_sylqn ); // obf

if ( isset( $v_ldlvb['action'] ) && 'update-site' === $v_ldlvb['action'] ) { // obf
	check_admin_referer( 'edit-site' ); // obf

	switch_to_blog( $v_sylqn ); // obf

	// Rewrite rules can't be flushed during switch to blog. // obf
	delete_option( 'rewrite_rules' ); // obf

	$v_zsivr           = wp_unslash( $v_xrfzb['blog'] ); // obf
	$v_zsivr['scheme'] = $v_liwii; // obf

	if ( $v_ztgxp ) { // obf
		// On the network's main site, don't allow the domain or path to change. // obf
		$v_zsivr['domain'] = $v_siawj->domain; // obf
		$v_zsivr['path']   = $v_siawj->path; // obf
	} else { // obf
		// For any other site, the scheme, domain, and path can all be changed. We first // obf
		// need to ensure a scheme has been provided, otherwise fallback to the existing. // obf
		$v_rshpm = parse_url( $v_zsivr['url'], PHP_URL_SCHEME ); // obf

		if ( ! $v_rshpm ) { // obf
			$v_zsivr['url'] = esc_url( $v_liwii . '://' . $v_zsivr['url'] ); // obf
		} // obf
		$v_mkeav = parse_url( $v_zsivr['url'] ); // obf

		// If a path is not provided, use the default of `/`. // obf
		if ( ! isset( $v_mkeav['path'] ) ) { // obf
			$v_mkeav['path'] = '/'; // obf
		} // obf

		$v_zsivr['scheme'] = $v_mkeav['scheme']; // obf

		// Make sure to not lose the port if it was provided. // obf
		$v_zsivr['domain'] = $v_mkeav['host']; // obf
		if ( isset( $v_mkeav['port'] ) ) { // obf
			$v_zsivr['domain'] .= ':' . $v_mkeav['port']; // obf
		} // obf

		$v_zsivr['path'] = $v_mkeav['path']; // obf
	} // obf

	$v_vlels     = get_site( $v_sylqn ); // obf
	$v_ahjkc = array( 'public', 'archived', 'spam', 'mature', 'deleted' ); // obf

	foreach ( $v_ahjkc as $v_rzayo ) { // obf
		if ( ! in_array( (int) $v_vlels->$v_rzayo, array( 0, 1 ), true ) ) { // obf
			$v_zsivr[ $v_rzayo ] = $v_vlels->$v_rzayo; // obf
		} else { // obf
			$v_zsivr[ $v_rzayo ] = isset( $v_xrfzb['blog'][ $v_rzayo ] ) ? 1 : 0; // obf
		} // obf
	} // obf

	update_blog_details( $v_sylqn, $v_zsivr ); // obf

	// Maybe update home and siteurl options. // obf
	$v_bpqyk = get_site( $v_sylqn ); // obf

	$v_pccqa    = trailingslashit( esc_url( get_option( 'home' ) ) ); // obf
	$v_emryg = parse_url( $v_pccqa ); // obf
	$v_hucya   = $v_emryg['host'] . ( isset( $v_emryg['port'] ) ? ':' . $v_emryg['port'] : '' ); // obf

	if ( $v_hucya === $v_vlels->domain && $v_emryg['path'] === $v_vlels->path ) { // obf
		$v_trcwq = untrailingslashit( sanitize_url( $v_zsivr['scheme'] . '://' . $v_bpqyk->domain . $v_bpqyk->path ) ); // obf
		update_option( 'home', $v_trcwq ); // obf
	} // obf

	$v_usmpb    = trailingslashit( esc_url( get_option( 'siteurl' ) ) ); // obf
	$v_dybqj = parse_url( $v_usmpb ); // obf
	$v_eqzng   = $v_dybqj['host'] . ( isset( $v_dybqj['port'] ) ? ':' . $v_dybqj['port'] : '' ); // obf

	if ( $v_eqzng === $v_vlels->domain && $v_dybqj['path'] === $v_vlels->path ) { // obf
		$v_sifmm = untrailingslashit( sanitize_url( $v_zsivr['scheme'] . '://' . $v_bpqyk->domain . $v_bpqyk->path ) ); // obf
		update_option( 'siteurl', $v_sifmm ); // obf
	} // obf

	restore_current_blog(); // obf
	wp_redirect( // obf
		add_query_arg( // obf
			array( // obf
				'update' => 'updated', // obf
				'id'     => $v_sylqn, // obf
			), // obf
			'site-info.php' // obf
		) // obf
	); // obf
	exit; // obf
} // obf

if ( isset( $v_zdjam['update'] ) ) { // obf
	$v_wyynu = array(); // obf
	if ( 'updated' === $v_zdjam['update'] ) { // obf
		$v_wyynu[] = __( 'Site info updated.' ); // obf
	} // obf
} // obf

// Used in the HTML title tag. // obf
/* translators: %s: Site title. */ // obf
$v_cbrxs = sprintf( __( 'Edit Site: %s' ), esc_html( $v_siawj->blogname ) ); // obf

$v_agwku  = 'sites.php'; // obf
$v_pdwfv = 'sites.php'; // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

?> // obf

<div class="wrap"> // obf
<h1 id="edit-site"><?php echo $v_cbrxs; ?></h1> // obf
<p class="edit-site-actions"><a href="<?php echo esc_url( get_home_url( $v_sylqn, '/' ) ); ?>"><?php _e( 'Visit' ); ?></a> | <a href="<?php echo esc_url( get_admin_url( $v_sylqn ) ); ?>"><?php _e( 'Dashboard' ); ?></a></p> // obf
<?php // obf

network_edit_site_nav( // obf
	array( // obf
		'blog_id'  => $v_sylqn, // obf
		'selected' => 'site-info', // obf
	) // obf
); // obf

if ( ! empty( $v_wyynu ) ) { // obf
	$v_rrede = array( // obf
		'type'        => 'success', // obf
		'dismissible' => true, // obf
		'id'          => 'message', // obf
	); // obf

	foreach ( $v_wyynu as $v_lzthi ) { // obf
		wp_admin_notice( $v_lzthi, $v_rrede ); // obf
	} // obf
} // obf
?> // obf
<form method="post" action="site-info.php?action=update-site"> // obf
	<?php wp_nonce_field( 'edit-site' ); ?> // obf
	<input type="hidden" name="id" value="<?php echo esc_attr( $v_sylqn ); ?>" /> // obf
	<table class="form-table" role="presentation"> // obf
		<?php // obf
		// The main site of the network should not be updated on this page. // obf
		if ( $v_ztgxp ) : // obf
			?> // obf
		<tr class="form-field"> // obf
			<th scope="row"><?php _e( 'Site Address (URL)' ); ?></th> // obf
			<td><?php echo esc_url( $v_liwii . '://' . $v_siawj->domain . $v_siawj->path ); ?></td> // obf
		</tr> // obf
			<?php // obf
			// For any other site, the scheme, domain, and path can all be changed. // obf
		else : // obf
			?> // obf
		<tr class="form-field form-required"> // obf
			<th scope="row"><label for="url"><?php _e( 'Site Address (URL)' ); ?></label></th> // obf
			<td><input name="blog[url]" type="text" id="url" value="<?php echo $v_liwii . '://' . esc_attr( $v_siawj->domain ) . esc_attr( $v_siawj->path ); ?>" /></td> // obf
		</tr> // obf
		<?php endif; ?> // obf

		<tr class="form-field"> // obf
			<th scope="row"><label for="blog_registered"><?php _ex( 'Registered', 'site' ); ?></label></th> // obf
			<td><input name="blog[registered]" type="text" id="blog_registered" value="<?php echo esc_attr( $v_siawj->registered ); ?>" /></td> // obf
		</tr> // obf
		<tr class="form-field"> // obf
			<th scope="row"><label for="blog_last_updated"><?php _e( 'Last Updated' ); ?></label></th> // obf
			<td><input name="blog[last_updated]" type="text" id="blog_last_updated" value="<?php echo esc_attr( $v_siawj->last_updated ); ?>" /></td> // obf
		</tr> // obf
		<?php // obf
		$v_njtqv = array( 'public' => _x( 'Public', 'site' ) ); // obf
		if ( ! $v_ztgxp ) { // obf
			$v_njtqv['archived'] = __( 'Archived' ); // obf
			$v_njtqv['spam']     = _x( 'Spam', 'site' ); // obf
			$v_njtqv['deleted']  = __( 'Deleted' ); // obf
		} // obf
		$v_njtqv['mature'] = __( 'Mature' ); // obf
		?> // obf
		<tr> // obf
			<th scope="row"><?php _e( 'Attributes' ); ?></th> // obf
			<td> // obf
			<fieldset> // obf
			<legend class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Set site attributes' ); // obf
				?> // obf
			</legend> // obf
			<?php foreach ( $v_njtqv as $v_bijjj => $v_kuiwx ) : ?> // obf
				<label><input type="checkbox" name="blog[<?php echo $v_bijjj; ?>]" value="1" <?php checked( (bool) $v_siawj->$v_bijjj, true ); ?> <?php disabled( ! in_array( (int) $v_siawj->$v_bijjj, array( 0, 1 ), true ) ); ?> /> // obf
				<?php echo $v_kuiwx; ?></label><br /> // obf
			<?php endforeach; ?> // obf
			<fieldset> // obf
			</td> // obf
		</tr> // obf
	</table> // obf

	<?php // obf
	/** // obf
	 * Fires at the end of the site info form in network admin. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param int $v_sylqn The site ID. // obf
	 */ // obf
	do_action( 'network_site_info_form', $v_sylqn ); // obf

	submit_button(); // obf
	?> // obf
</form> // obf

</div> // obf
<?php // obf
require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf