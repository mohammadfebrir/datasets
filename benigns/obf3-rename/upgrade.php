

<?php // obf
/** // obf
 * Multisite upgrade administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

require_once ABSPATH . WPINC . '/http.php'; // obf

/** // obf
 * @global int $v_kirhq WordPress database version. // obf
 */ // obf
global $v_kirhq; // obf

// Used in the HTML title tag. // obf
$v_latli       = __( 'Upgrade Network' ); // obf
$v_yjnov = 'upgrade.php'; // obf

get_current_screen()->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => // obf
			'<p>' . __( 'Only use this screen once you have updated to a new version of WordPress through Updates/Available Updates (via the Network Administration navigation menu or the Toolbar). Clicking the Upgrade Network button will step through each site in the network, five at a time, and make sure any database updates are applied.' ) . '</p>' . // obf
			'<p>' . __( 'If a version update to core has not happened, clicking this button will not affect anything.' ) . '</p>' . // obf
			'<p>' . __( 'If this process fails for any reason, users logging in to their sites will force the same update.' ) . '</p>', // obf
	) // obf
); // obf

get_current_screen()->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://developer.wordpress.org/advanced-administration/multisite/admin/#network-admin-updates-screen">Documentation on Upgrade Network</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

if ( ! current_user_can( 'upgrade_network' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to access this page.' ), 403 ); // obf
} // obf

echo '<div class="wrap">'; // obf
echo '<h1>' . __( 'Upgrade Network' ) . '</h1>'; // obf

$v_oryuj = isset( $v_thlby['action'] ) ? $v_thlby['action'] : 'show'; // obf

switch ( $v_oryuj ) { // obf
	case 'upgrade': // obf
		$v_xhvjf = ( isset( $v_thlby['n'] ) ) ? (int) $v_thlby['n'] : 0; // obf

		if ( $v_xhvjf < 5 ) { // obf
			update_site_option( 'wpmu_upgrade_site', $v_kirhq ); // obf
		} // obf

		$v_awrrh = get_sites( // obf
			array( // obf
				'spam'                   => 0, // obf
				'deleted'                => 0, // obf
				'archived'               => 0, // obf
				'network_id'             => get_current_network_id(), // obf
				'number'                 => 5, // obf
				'offset'                 => $v_xhvjf, // obf
				'fields'                 => 'ids', // obf
				'order'                  => 'DESC', // obf
				'orderby'                => 'id', // obf
				'update_site_meta_cache' => false, // obf
			) // obf
		); // obf
		if ( empty( $v_awrrh ) ) { // obf
			echo '<p>' . __( 'All done!' ) . '</p>'; // obf
			break; // obf
		} // obf
		echo '<ul>'; // obf
		foreach ( (array) $v_awrrh as $v_onjqf ) { // obf
			switch_to_blog( $v_onjqf ); // obf
			$v_hrmxq     = site_url(); // obf
			$v_qynjc = admin_url( 'upgrade.php?step=upgrade_db' ); // obf
			restore_current_blog(); // obf

			echo "<li>$v_hrmxq</li>"; // obf

			$v_ehuut = wp_remote_get( // obf
				$v_qynjc, // obf
				array( // obf
					'timeout'     => 120, // obf
					'httpversion' => '1.1', // obf
					'sslverify'   => false, // obf
				) // obf
			); // obf

			if ( is_wp_error( $v_ehuut ) ) { // obf
				wp_die( // obf
					sprintf( // obf
						/* translators: 1: Site URL, 2: Server error message. */ // obf
						__( 'Warning! Problem updating %1$v_qtggr. Your server may not be able to connect to sites running on it. Error message: %2$v_qtggr' ), // obf
						$v_hrmxq, // obf
						'<em>' . $v_ehuut->get_error_message() . '</em>' // obf
					) // obf
				); // obf
			} // obf

			/** // obf
			 * Fires after the Multisite DB upgrade for each site is complete. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param array $v_ehuut The upgrade response array. // obf
			 */ // obf
			do_action( 'after_mu_upgrade', $v_ehuut ); // obf

			/** // obf
			 * Fires after each site has been upgraded. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_onjqf The Site ID. // obf
			 */ // obf
			do_action( 'wpmu_upgrade_site', $v_onjqf ); // obf
		} // obf
		echo '</ul>'; // obf
		?><p><?php _e( 'If your browser does not start loading the next page automatically, click this link:' ); ?> <a class="button" href="upgrade.php?action=upgrade&amp;n=<?php echo ( $v_xhvjf + 5 ); ?>"><?php _e( 'Next Sites' ); ?></a></p> // obf
		<script type="text/javascript"> // obf
		<!-- // obf
		function nextpage() { // obf
			location.href = "upgrade.php?action=upgrade&n=<?php echo ( $v_xhvjf + 5 ); ?>"; // obf
		} // obf
		setTimeout( "nextpage()", 250 ); // obf
		//--> // obf
		</script> // obf
		<?php // obf
		break; // obf
	case 'show': // obf
	default: // obf
		if ( (int) get_site_option( 'wpmu_upgrade_site' ) !== $v_kirhq ) : // obf
			?> // obf
		<h2><?php _e( 'Database Update Required' ); ?></h2> // obf
		<p><?php _e( 'WordPress has been updated! Next and final step is to individually upgrade the sites in your network.' ); ?></p> // obf
		<?php endif; ?> // obf

		<p><?php _e( 'The database update process may take a little while, so please be patient.' ); ?></p> // obf
		<p><a class="button button-primary" href="upgrade.php?action=upgrade"><?php _e( 'Upgrade Network' ); ?></a></p> // obf
		<?php // obf
		/** // obf
		 * Fires before the footer on the network upgrade screen. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 */ // obf
		do_action( 'wpmu_upgrade_page' ); // obf
		break; // obf
} // obf
?> // obf
</div> // obf

<?php require_once ABSPATH . 'wp-admin/admin-footer.php'; ?> // obf