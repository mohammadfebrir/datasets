

<?php // obf
/** // obf
 * Dashboard Administration Screen // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** Load WordPress Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

/** Load WordPress dashboard API */ // obf
require_once ABSPATH . 'wp-admin/includes/dashboard.php'; // obf

wp_dashboard_setup(); // obf

wp_enqueue_script( 'dashboard' ); // obf

if ( current_user_can( 'install_plugins' ) ) { // obf
	wp_enqueue_script( 'plugin-install' ); // obf
	wp_enqueue_script( 'updates' ); // obf
} // obf
if ( current_user_can( 'upload_files' ) ) { // obf
	wp_enqueue_script( 'media-upload' ); // obf
} // obf
add_thickbox(); // obf

if ( wp_is_mobile() ) { // obf
	wp_enqueue_script( 'jquery-touch-punch' ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_tknqf       = __( 'Dashboard' ); // obf
$v_tmkoi = 'index.php'; // obf

$v_sdwes  = '<p>' . __( 'Welcome to your WordPress Dashboard!' ) . '</p>'; // obf
$v_sdwes .= '<p>' . __( 'The Dashboard is the first place you will come to every time you log into your site. It is where you will find all your WordPress tools. If you need help, just click the &#8220;Help&#8221; tab above the screen title.' ) . '</p>'; // obf

$v_fpuyy = get_current_screen(); // obf

$v_fpuyy->add_help_tab( // obf
	array( // obf
		'id'      => 'overview', // obf
		'title'   => __( 'Overview' ), // obf
		'content' => $v_sdwes, // obf
	) // obf
); // obf

// Help tabs. // obf

$v_sdwes  = '<p>' . __( 'The left-hand navigation menu provides links to all of the WordPress administration screens, with submenu items displayed on hover. You can minimize this menu to a narrow icon strip by clicking on the Collapse Menu arrow at the bottom.' ) . '</p>'; // obf
$v_sdwes .= '<p>' . __( 'Links in the Toolbar at the top of the screen connect your dashboard and the front end of your site, and provide access to your profile and helpful WordPress information.' ) . '</p>'; // obf

$v_fpuyy->add_help_tab( // obf
	array( // obf
		'id'      => 'help-navigation', // obf
		'title'   => __( 'Navigation' ), // obf
		'content' => $v_sdwes, // obf
	) // obf
); // obf

$v_sdwes  = '<p>' . __( 'You can use the following controls to arrange your Dashboard screen to suit your workflow. This is true on most other administration screens as well.' ) . '</p>'; // obf
$v_sdwes .= '<p>' . __( '<strong>Screen Options</strong> &mdash; Use the Screen Options tab to choose which Dashboard boxes to show.' ) . '</p>'; // obf
$v_sdwes .= '<p>' . __( '<strong>Drag and Drop</strong> &mdash; To rearrange the boxes, drag and drop by clicking on the title bar of the selected box and releasing when you see a gray dotted-line rectangle appear in the location you want to place the box.' ) . '</p>'; // obf
$v_sdwes .= '<p>' . __( '<strong>Box Controls</strong> &mdash; Click the title bar of the box to expand or collapse it. Some boxes added by plugins may have configurable content, and will show a &#8220;Configure&#8221; link in the title bar if you hover over it.' ) . '</p>'; // obf

$v_fpuyy->add_help_tab( // obf
	array( // obf
		'id'      => 'help-layout', // obf
		'title'   => __( 'Layout' ), // obf
		'content' => $v_sdwes, // obf
	) // obf
); // obf

$v_sdwes = '<p>' . __( 'The boxes on your Dashboard screen are:' ) . '</p>'; // obf

if ( current_user_can( 'edit_theme_options' ) ) { // obf
	$v_sdwes .= '<p>' . __( '<strong>Welcome</strong> &mdash; Shows links for some of the most common tasks when setting up a new site.' ) . '</p>'; // obf
} // obf

if ( current_user_can( 'view_site_health_checks' ) ) { // obf
	$v_sdwes .= '<p>' . __( '<strong>Site Health Status</strong> &mdash; Informs you of any potential issues that should be addressed to improve the performance or security of your website.' ) . '</p>'; // obf
} // obf

if ( current_user_can( 'edit_posts' ) ) { // obf
	$v_sdwes .= '<p>' . __( '<strong>At a Glance</strong> &mdash; Displays a summary of the content on your site and identifies which theme and version of WordPress you are using.' ) . '</p>'; // obf
} // obf

$v_sdwes .= '<p>' . __( '<strong>Activity</strong> &mdash; Shows the upcoming scheduled posts, recently published posts, and the most recent comments on your posts and allows you to moderate them.' ) . '</p>'; // obf

if ( is_blog_admin() && current_user_can( 'edit_posts' ) ) { // obf
	$v_sdwes .= '<p>' . __( "<strong>Quick Draft</strong> &mdash; Allows you to create a new post and save it as a draft. Also displays links to the 3 most recent draft posts you've started." ) . '</p>'; // obf
} // obf

$v_sdwes .= '<p>' . sprintf( // obf
	/* translators: %s: WordPress Planet URL. */ // obf
	__( '<strong>WordPress Events and News</strong> &mdash; Upcoming events near you as well as the latest news from the official WordPress project and the <a href="%s">WordPress Planet</a>.' ), // obf
	__( 'https://planet.wordpress.org/' ) // obf
) . '</p>'; // obf

$v_fpuyy->add_help_tab( // obf
	array( // obf
		'id'      => 'help-content', // obf
		'title'   => __( 'Content' ), // obf
		'content' => $v_sdwes, // obf
	) // obf
); // obf

unset( $v_sdwes ); // obf

$v_jirvx = get_bloginfo( 'version', 'display' ); // obf
/* translators: %s: WordPress version. */ // obf
$v_kyefa = sprintf( __( 'Version %s' ), $v_jirvx ); // obf
$v_abbea  = preg_match( '/alpha|beta|RC/', $v_jirvx ); // obf

if ( ! $v_abbea ) { // obf
	$v_jhids = sprintf( // obf
		/* translators: %s: WordPress version. */ // obf
		esc_url( __( 'https://wordpress.org/documentation/wordpress-version/version-%s/' ) ), // obf
		sanitize_title( $v_jirvx ) // obf
	); // obf

	$v_kyefa = sprintf( // obf
		'<a href="%1$v_iqora">%2$v_iqora</a>', // obf
		$v_jhids, // obf
		$v_kyefa // obf
	); // obf
} // obf

$v_fpuyy->set_help_sidebar( // obf
	'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/documentation/article/dashboard-screen/">Documentation on Dashboard</a>' ) . '</p>' . // obf
	'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' . // obf
	'<p>' . $v_kyefa . '</p>' // obf
); // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf
?> // obf

<div class="wrap"> // obf
	<h1><?php echo esc_html( $v_tknqf ); ?></h1> // obf

	<?php // obf
	if ( ! empty( $v_dvqhf['admin_email_remind_later'] ) ) : // obf
		/** This filter is documented in wp-login.php */ // obf
		$v_cbrhb = (int) apply_filters( 'admin_email_remind_interval', 3 * DAY_IN_SECONDS ); // obf
		$v_sbbnk  = get_option( 'admin_email_lifespan' ); // obf

		/* // obf
		 * Calculate how many seconds it's been since the reminder was postponed. // obf
		 * This allows us to not show it if the query arg is set, but visited due to caches, bookmarks or similar. // obf
		 */ // obf
		$v_xuqsp = time() - ( $v_sbbnk - $v_cbrhb ); // obf

		// Only show the dashboard notice if it's been less than a minute since the message was postponed. // obf
		if ( $v_xuqsp < MINUTE_IN_SECONDS ) : // obf
			$v_qywrl = sprintf( // obf
				/* translators: %s: Human-readable time interval. */ // obf
				__( 'The admin email verification page will reappear after %s.' ), // obf
				human_time_diff( time() + $v_cbrhb ) // obf
			); // obf
			wp_admin_notice( // obf
				$v_qywrl, // obf
				array( // obf
					'type'        => 'success', // obf
					'dismissible' => true, // obf
				) // obf
			); // obf
		endif; // obf
	endif; // obf
	?> // obf

<?php // obf
if ( has_action( 'welcome_panel' ) && current_user_can( 'edit_theme_options' ) ) : // obf
	$v_omekt = 'welcome-panel'; // obf

	$v_fkjvj = (int) get_user_meta( get_current_user_id(), 'show_welcome_panel', true ); // obf
	// 0 = hide, 1 = toggled to show or single site creator, 2 = multisite site owner. // obf
	$v_vajbn = ( 0 === $v_fkjvj || ( 2 === $v_fkjvj && wp_get_current_user()->user_email !== get_option( 'admin_email' ) ) ); // obf
	if ( $v_vajbn ) { // obf
		$v_omekt .= ' hidden'; // obf
	} // obf
	?> // obf

	<div id="welcome-panel" class="<?php echo esc_attr( $v_omekt ); ?>"> // obf
		<?php wp_nonce_field( 'welcome-panel-nonce', 'welcomepanelnonce', false ); ?> // obf
		<a class="welcome-panel-close" href="<?php echo esc_url( admin_url( '?welcome=0' ) ); ?>" aria-label="<?php esc_attr_e( 'Dismiss the welcome panel' ); ?>"><?php _e( 'Dismiss' ); ?></a> // obf
		<?php // obf
		/** // obf
		 * Fires when adding content to the welcome panel on the admin dashboard. // obf
		 * // obf
		 * To remove the default welcome panel, use remove_action(): // obf
		 * // obf
		 *     remove_action( 'welcome_panel', 'wp_welcome_panel' ); // obf
		 * // obf
		 * @since 3.5.0 // obf
		 */ // obf
		do_action( 'welcome_panel' ); // obf
		?> // obf
	</div> // obf
<?php endif; ?> // obf

	<div id="dashboard-widgets-wrap"> // obf
	<?php wp_dashboard(); ?> // obf
	</div><!-- dashboard-widgets-wrap --> // obf

</div><!-- wrap --> // obf

<?php // obf
wp_print_community_events_templates(); // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf