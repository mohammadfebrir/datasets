

<?php // obf
/** // obf
 * WordPress Dashboard Widget Administration Screen API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Registers dashboard widgets. // obf
 * // obf
 * Handles POST data, sets up filters. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global array $v_hnmoa // obf
 * @global array $v_nsrxt // obf
 * @global callable[] $v_qefus // obf
 */ // obf
function wp_dashboard_setup() { // obf
	global $v_hnmoa, $v_nsrxt, $v_qefus; // obf

	$v_rpxiq = get_current_screen(); // obf

	/* Register Widgets and Controls */ // obf
	$v_qefus = array(); // obf

	// Browser version // obf
	$v_hhsuz = wp_check_browser_version(); // obf

	if ( $v_hhsuz && $v_hhsuz['upgrade'] ) { // obf
		add_filter( 'postbox_classes_dashboard_dashboard_browser_nag', 'dashboard_browser_nag_class' ); // obf

		if ( $v_hhsuz['insecure'] ) { // obf
			wp_add_dashboard_widget( 'dashboard_browser_nag', __( 'You are using an insecure browser!' ), 'wp_dashboard_browser_nag' ); // obf
		} else { // obf
			wp_add_dashboard_widget( 'dashboard_browser_nag', __( 'Your browser is out of date!' ), 'wp_dashboard_browser_nag' ); // obf
		} // obf
	} // obf

	// PHP Version. // obf
	$v_gopah = wp_check_php_version(); // obf

	if ( $v_gopah && current_user_can( 'update_php' ) ) { // obf
		// If "not acceptable" the widget will be shown. // obf
		if ( isset( $v_gopah['is_acceptable'] ) && ! $v_gopah['is_acceptable'] ) { // obf
			add_filter( 'postbox_classes_dashboard_dashboard_php_nag', 'dashboard_php_nag_class' ); // obf

			if ( $v_gopah['is_lower_than_future_minimum'] ) { // obf
				wp_add_dashboard_widget( 'dashboard_php_nag', __( 'PHP Update Required' ), 'wp_dashboard_php_nag' ); // obf
			} else { // obf
				wp_add_dashboard_widget( 'dashboard_php_nag', __( 'PHP Update Recommended' ), 'wp_dashboard_php_nag' ); // obf
			} // obf
		} // obf
	} // obf

	// Site Health. // obf
	if ( current_user_can( 'view_site_health_checks' ) && ! is_network_admin() ) { // obf
		if ( ! class_exists( 'WP_Site_Health' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
		} // obf

		WP_Site_Health::get_instance(); // obf

		wp_enqueue_style( 'site-health' ); // obf
		wp_enqueue_script( 'site-health' ); // obf

		wp_add_dashboard_widget( 'dashboard_site_health', __( 'Site Health Status' ), 'wp_dashboard_site_health' ); // obf
	} // obf

	// Right Now. // obf
	if ( is_blog_admin() && current_user_can( 'edit_posts' ) ) { // obf
		wp_add_dashboard_widget( 'dashboard_right_now', __( 'At a Glance' ), 'wp_dashboard_right_now' ); // obf
	} // obf

	if ( is_network_admin() ) { // obf
		wp_add_dashboard_widget( 'network_dashboard_right_now', __( 'Right Now' ), 'wp_network_dashboard_right_now' ); // obf
	} // obf

	// Activity Widget. // obf
	if ( is_blog_admin() ) { // obf
		wp_add_dashboard_widget( 'dashboard_activity', __( 'Activity' ), 'wp_dashboard_site_activity' ); // obf
	} // obf

	// QuickPress Widget. // obf
	if ( is_blog_admin() && current_user_can( get_post_type_object( 'post' )->cap->create_posts ) ) { // obf
		$v_ssxwl = sprintf( '<span class="hide-if-no-js">%1$v_tdmht</span> <span class="hide-if-js">%2$v_tdmht</span>', __( 'Quick Draft' ), __( 'Your Recent Drafts' ) ); // obf
		wp_add_dashboard_widget( 'dashboard_quick_press', $v_ssxwl, 'wp_dashboard_quick_press' ); // obf
	} // obf

	// WordPress Events and News. // obf
	wp_add_dashboard_widget( 'dashboard_primary', __( 'WordPress Events and News' ), 'wp_dashboard_events_news' ); // obf

	if ( is_network_admin() ) { // obf

		/** // obf
		 * Fires after core widgets for the Network Admin dashboard have been registered. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 */ // obf
		do_action( 'wp_network_dashboard_setup' ); // obf

		/** // obf
		 * Filters the list of widgets to load for the Network Admin dashboard. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_bezsl An array of dashboard widget IDs. // obf
		 */ // obf
		$v_bezsl = apply_filters( 'wp_network_dashboard_widgets', array() ); // obf
	} elseif ( is_user_admin() ) { // obf

		/** // obf
		 * Fires after core widgets for the User Admin dashboard have been registered. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 */ // obf
		do_action( 'wp_user_dashboard_setup' ); // obf

		/** // obf
		 * Filters the list of widgets to load for the User Admin dashboard. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string[] $v_bezsl An array of dashboard widget IDs. // obf
		 */ // obf
		$v_bezsl = apply_filters( 'wp_user_dashboard_widgets', array() ); // obf
	} else { // obf

		/** // obf
		 * Fires after core widgets for the admin dashboard have been registered. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 */ // obf
		do_action( 'wp_dashboard_setup' ); // obf

		/** // obf
		 * Filters the list of widgets to load for the admin dashboard. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * // obf
		 * @param string[] $v_bezsl An array of dashboard widget IDs. // obf
		 */ // obf
		$v_bezsl = apply_filters( 'wp_dashboard_widgets', array() ); // obf
	} // obf

	foreach ( $v_bezsl as $v_bxfpw ) { // obf
		$v_dvugw = empty( $v_hnmoa[ $v_bxfpw ]['all_link'] ) ? $v_hnmoa[ $v_bxfpw ]['name'] : $v_hnmoa[ $v_bxfpw ]['name'] . " <a href='{$v_hnmoa[$v_bxfpw]['all_link']}' class='edit-box open-box'>" . __( 'View all' ) . '</a>'; // obf
		wp_add_dashboard_widget( $v_bxfpw, $v_dvugw, $v_hnmoa[ $v_bxfpw ]['callback'], $v_nsrxt[ $v_bxfpw ]['callback'] ); // obf
	} // obf

	if ( 'POST' === $v_uilxl['REQUEST_METHOD'] && isset( $v_nzzzm['widget_id'] ) ) { // obf
		check_admin_referer( 'edit-dashboard-widget_' . $v_nzzzm['widget_id'], 'dashboard-widget-nonce' ); // obf
		ob_start(); // Hack - but the same hack wp-admin/widgets.php uses. // obf
		wp_dashboard_trigger_widget_control( $v_nzzzm['widget_id'] ); // obf
		ob_end_clean(); // obf
		wp_redirect( remove_query_arg( 'edit' ) ); // obf
		exit; // obf
	} // obf

	/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
	do_action( 'do_meta_boxes', $v_rpxiq->id, 'normal', '' ); // obf

	/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
	do_action( 'do_meta_boxes', $v_rpxiq->id, 'side', '' ); // obf
} // obf

/** // obf
 * Adds a new dashboard widget. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 5.6.0 The `$v_pnrvo` and `$v_qljrs` parameters were added. // obf
 * // obf
 * @global callable[] $v_qefus // obf
 * // obf
 * @param string   $v_bxfpw        Widget ID  (used in the 'id' attribute for the widget). // obf
 * @param string   $v_rvwhd      Title of the widget. // obf
 * @param callable $v_dxres         Function that fills the widget with the desired content. // obf
 *                                   The function should echo its output. // obf
 * @param callable $v_manef Optional. Function that outputs controls for the widget. Default null. // obf
 * @param array    $v_uboto    Optional. Data that should be set as the $v_fhyij property of the widget array // obf
 *                                   (which is the second parameter passed to your callback). Default null. // obf
 * @param string   $v_pnrvo          Optional. The context within the screen where the box should display. // obf
 *                                   Accepts 'normal', 'side', 'column3', or 'column4'. Default 'normal'. // obf
 * @param string   $v_qljrs         Optional. The priority within the context where the box should show. // obf
 *                                   Accepts 'high', 'core', 'default', or 'low'. Default 'core'. // obf
 */ // obf
function wp_add_dashboard_widget( $v_bxfpw, $v_rvwhd, $v_dxres, $v_manef = null, $v_uboto = null, $v_pnrvo = 'normal', $v_qljrs = 'core' ) { // obf
	global $v_qefus; // obf

	$v_rpxiq = get_current_screen(); // obf

	$v_edpcr = array( '__widget_basename' => $v_rvwhd ); // obf

	if ( is_null( $v_uboto ) ) { // obf
		$v_uboto = $v_edpcr; // obf
	} elseif ( is_array( $v_uboto ) ) { // obf
		$v_uboto = array_merge( $v_uboto, $v_edpcr ); // obf
	} // obf

	if ( $v_manef && is_callable( $v_manef ) && current_user_can( 'edit_dashboard' ) ) { // obf
		$v_qefus[ $v_bxfpw ] = $v_manef; // obf

		if ( isset( $v_vavfk['edit'] ) && $v_bxfpw === $v_vavfk['edit'] ) { // obf
			list($v_gckwb)    = explode( '#', add_query_arg( 'edit', false ), 2 ); // obf
			$v_rvwhd .= ' <span class="postbox-title-action"><a href="' . esc_url( $v_gckwb ) . '">' . __( 'Cancel' ) . '</a></span>'; // obf
			$v_dxres     = '_wp_dashboard_control_callback'; // obf
		} else { // obf
			list($v_gckwb)    = explode( '#', add_query_arg( 'edit', $v_bxfpw ), 2 ); // obf
			$v_rvwhd .= ' <span class="postbox-title-action"><a href="' . esc_url( "$v_gckwb#$v_bxfpw" ) . '" class="edit-box open-box">' . __( 'Configure' ) . '</a></span>'; // obf
		} // obf
	} // obf

	$v_xbpcm = array( 'dashboard_quick_press', 'dashboard_primary' ); // obf

	if ( in_array( $v_bxfpw, $v_xbpcm, true ) ) { // obf
		$v_pnrvo = 'side'; // obf
	} // obf

	$v_cjfja = array( 'dashboard_browser_nag', 'dashboard_php_nag' ); // obf

	if ( in_array( $v_bxfpw, $v_cjfja, true ) ) { // obf
		$v_qljrs = 'high'; // obf
	} // obf

	if ( empty( $v_pnrvo ) ) { // obf
		$v_pnrvo = 'normal'; // obf
	} // obf

	if ( empty( $v_qljrs ) ) { // obf
		$v_qljrs = 'core'; // obf
	} // obf

	add_meta_box( $v_bxfpw, $v_rvwhd, $v_dxres, $v_rpxiq, $v_pnrvo, $v_qljrs, $v_uboto ); // obf
} // obf

/** // obf
 * Outputs controls for the current dashboard widget. // obf
 * // obf
 * @access private // obf
 * @since 2.7.0 // obf
 * // obf
 * @param mixed $v_dgmra // obf
 * @param array $v_sqlnb // obf
 */ // obf
function _wp_dashboard_control_callback( $v_dgmra, $v_sqlnb ) { // obf
	echo '<form method="post" class="dashboard-widget-control-form wp-clearfix">'; // obf
	wp_dashboard_trigger_widget_control( $v_sqlnb['id'] ); // obf
	wp_nonce_field( 'edit-dashboard-widget_' . $v_sqlnb['id'], 'dashboard-widget-nonce' ); // obf
	echo '<input type="hidden" name="widget_id" value="' . esc_attr( $v_sqlnb['id'] ) . '" />'; // obf
	submit_button( __( 'Save Changes' ) ); // obf
	echo '</form>'; // obf
} // obf

/** // obf
 * Displays the dashboard. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
function wp_dashboard() { // obf
	$v_rpxiq      = get_current_screen(); // obf
	$v_ayoea     = absint( $v_rpxiq->get_columns() ); // obf
	$v_fttdk = ''; // obf

	if ( $v_ayoea ) { // obf
		$v_fttdk = " columns-$v_ayoea"; // obf
	} // obf
	?> // obf
<div id="dashboard-widgets" class="metabox-holder<?php echo $v_fttdk; ?>"> // obf
	<div id="postbox-container-1" class="postbox-container"> // obf
	<?php do_meta_boxes( $v_rpxiq->id, 'normal', '' ); ?> // obf
	</div> // obf
	<div id="postbox-container-2" class="postbox-container"> // obf
	<?php do_meta_boxes( $v_rpxiq->id, 'side', '' ); ?> // obf
	</div> // obf
	<div id="postbox-container-3" class="postbox-container"> // obf
	<?php do_meta_boxes( $v_rpxiq->id, 'column3', '' ); ?> // obf
	</div> // obf
	<div id="postbox-container-4" class="postbox-container"> // obf
	<?php do_meta_boxes( $v_rpxiq->id, 'column4', '' ); ?> // obf
	</div> // obf
</div> // obf

	<?php // obf
	wp_nonce_field( 'closedpostboxes', 'closedpostboxesnonce', false ); // obf
	wp_nonce_field( 'meta-box-order', 'meta-box-order-nonce', false ); // obf
} // obf

// // obf
// Dashboard Widgets. // obf
// // obf

/** // obf
 * Dashboard widget that displays some basic stats about the site. // obf
 * // obf
 * Formerly 'Right Now'. A streamlined 'At a Glance' as of 3.8. // obf
 * // obf
 * @since 2.7.0 // obf
 */ // obf
function wp_dashboard_right_now() { // obf
	?> // obf
	<div class="main"> // obf
	<ul> // obf
	<?php // obf
	// Posts and Pages. // obf
	foreach ( array( 'post', 'page' ) as $v_elrph ) { // obf
		$v_llvqf = wp_count_posts( $v_elrph ); // obf

		if ( $v_llvqf && $v_llvqf->publish ) { // obf
			if ( 'post' === $v_elrph ) { // obf
				/* translators: %s: Number of posts. */ // obf
				$v_flzhm = _n( '%s Post', '%s Posts', $v_llvqf->publish ); // obf
			} else { // obf
				/* translators: %s: Number of pages. */ // obf
				$v_flzhm = _n( '%s Page', '%s Pages', $v_llvqf->publish ); // obf
			} // obf

			$v_flzhm             = sprintf( $v_flzhm, number_format_i18n( $v_llvqf->publish ) ); // obf
			$v_qgcux = get_post_type_object( $v_elrph ); // obf

			if ( $v_qgcux && current_user_can( $v_qgcux->cap->edit_posts ) ) { // obf
				printf( '<li class="%1$v_tdmht-count"><a href="edit.php?post_type=%1$v_tdmht">%2$v_tdmht</a></li>', $v_elrph, $v_flzhm ); // obf
			} else { // obf
				printf( '<li class="%1$v_tdmht-count"><span>%2$v_tdmht</span></li>', $v_elrph, $v_flzhm ); // obf
			} // obf
		} // obf
	} // obf

	// Comments. // obf
	$v_jrots = wp_count_comments(); // obf

	if ( $v_jrots && ( $v_jrots->approved || $v_jrots->moderated ) ) { // obf
		/* translators: %s: Number of comments. */ // obf
		$v_flzhm = sprintf( _n( '%s Comment', '%s Comments', $v_jrots->approved ), number_format_i18n( $v_jrots->approved ) ); // obf
		?> // obf
		<li class="comment-count"> // obf
			<a href="edit-comments.php"><?php echo $v_flzhm; ?></a> // obf
		</li> // obf
		<?php // obf
		$v_mtees = number_format_i18n( $v_jrots->moderated ); // obf
		/* translators: %s: Number of comments. */ // obf
		$v_flzhm = sprintf( _n( '%s Comment in moderation', '%s Comments in moderation', $v_jrots->moderated ), $v_mtees ); // obf
		?> // obf
		<li class="comment-mod-count<?php echo ! $v_jrots->moderated ? ' hidden' : ''; ?>"> // obf
			<a href="edit-comments.php?comment_status=moderated" class="comments-in-moderation-text"><?php echo $v_flzhm; ?></a> // obf
		</li> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Filters the array of extra elements to list in the 'At a Glance' // obf
	 * dashboard widget. // obf
	 * // obf
	 * Prior to 3.8.0, the widget was named 'Right Now'. Each element // obf
	 * is wrapped in list-item tags on output. // obf
	 * // obf
	 * @since 3.8.0 // obf
	 * // obf
	 * @param string[] $v_anqpm Array of extra 'At a Glance' widget items. // obf
	 */ // obf
	$v_xvzrj = apply_filters( 'dashboard_glance_items', array() ); // obf

	if ( $v_xvzrj ) { // obf
		echo '<li>' . implode( "</li>\n<li>", $v_xvzrj ) . "</li>\n"; // obf
	} // obf

	?> // obf
	</ul> // obf
	<?php // obf
	update_right_now_message(); // obf

	// Check if search engines are asked not to index this site. // obf
	if ( ! is_network_admin() && ! is_user_admin() // obf
		&& current_user_can( 'manage_options' ) && ! get_option( 'blog_public' ) // obf
	) { // obf

		/** // obf
		 * Filters the link title attribute for the 'Search engines discouraged' // obf
		 * message displayed in the 'At a Glance' dashboard widget. // obf
		 * // obf
		 * Prior to 3.8.0, the widget was named 'Right Now'. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * @since 4.5.0 The default for `$v_jogox` was updated to an empty string. // obf
		 * // obf
		 * @param string $v_jogox Default attribute text. // obf
		 */ // obf
		$v_jogox = apply_filters( 'privacy_on_link_title', '' ); // obf

		/** // obf
		 * Filters the link label for the 'Search engines discouraged' message // obf
		 * displayed in the 'At a Glance' dashboard widget. // obf
		 * // obf
		 * Prior to 3.8.0, the widget was named 'Right Now'. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string $v_qmhro Default text. // obf
		 */ // obf
		$v_qmhro = apply_filters( 'privacy_on_link_text', __( 'Search engines discouraged' ) ); // obf

		$v_gcasv = '' === $v_jogox ? '' : " title='$v_jogox'"; // obf

		echo "<p class='search-engines-info'><a href='options-reading.php'$v_gcasv>$v_qmhro</a></p>"; // obf
	} // obf
	?> // obf
	</div> // obf
	<?php // obf
	/* // obf
	 * activity_box_end has a core action, but only prints content when multisite. // obf
	 * Using an output buffer is the only way to really check if anything's displayed here. // obf
	 */ // obf
	ob_start(); // obf

	/** // obf
	 * Fires at the end of the 'At a Glance' dashboard widget. // obf
	 * // obf
	 * Prior to 3.8.0, the widget was named 'Right Now'. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	do_action( 'rightnow_end' ); // obf

	/** // obf
	 * Fires at the end of the 'At a Glance' dashboard widget. // obf
	 * // obf
	 * Prior to 3.8.0, the widget was named 'Right Now'. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	do_action( 'activity_box_end' ); // obf

	$v_ccpif = ob_get_clean(); // obf

	if ( ! empty( $v_ccpif ) ) : // obf
		?> // obf
	<div class="sub"> // obf
		<?php echo $v_ccpif; ?> // obf
	</div> // obf
		<?php // obf
	endif; // obf
} // obf

/** // obf
 * @since 3.1.0 // obf
 */ // obf
function wp_network_dashboard_right_now() { // obf
	$v_ccpif = array(); // obf

	if ( current_user_can( 'create_sites' ) ) { // obf
		$v_ccpif['create-site'] = '<a href="' . network_admin_url( 'site-new.php' ) . '">' . __( 'Create a New Site' ) . '</a>'; // obf
	} // obf
	if ( current_user_can( 'create_users' ) ) { // obf
		$v_ccpif['create-user'] = '<a href="' . network_admin_url( 'user-new.php' ) . '">' . __( 'Create a New User' ) . '</a>'; // obf
	} // obf

	$v_amrjj = get_user_count(); // obf
	$v_vuomv = get_blog_count(); // obf

	/* translators: %s: Number of users on the network. */ // obf
	$v_ryhse = sprintf( _n( '%s user', '%s users', $v_amrjj ), number_format_i18n( $v_amrjj ) ); // obf
	/* translators: %s: Number of sites on the network. */ // obf
	$v_nvlqe = sprintf( _n( '%s site', '%s sites', $v_vuomv ), number_format_i18n( $v_vuomv ) ); // obf

	/* translators: 1: Text indicating the number of sites on the network, 2: Text indicating the number of users on the network. */ // obf
	$v_vagbk = sprintf( __( 'You have %1$v_tdmht and %2$v_tdmht.' ), $v_nvlqe, $v_ryhse ); // obf

	if ( $v_ccpif ) { // obf
		echo '<ul class="subsubsub">'; // obf
		foreach ( $v_ccpif as $v_rlliz => $v_zdbwl ) { // obf
			$v_ccpif[ $v_rlliz ] = "\t<li class='$v_rlliz'>$v_zdbwl"; // obf
		} // obf
		echo implode( " |</li>\n", $v_ccpif ) . "</li>\n"; // obf
		echo '</ul>'; // obf
	} // obf
	?> // obf
	<br class="clear" /> // obf

	<p class="youhave"><?php echo $v_vagbk; ?></p> // obf


	<?php // obf
		/** // obf
		 * Fires in the Network Admin 'Right Now' dashboard widget // obf
		 * just before the user and site search form fields. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 */ // obf
		do_action( 'wpmuadminresult' ); // obf
	?> // obf

	<form action="<?php echo esc_url( network_admin_url( 'users.php' ) ); ?>" method="get"> // obf
		<p> // obf
			<label class="screen-reader-text" for="search-users"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Search Users' ); // obf
				?> // obf
			</label> // obf
			<input type="search" name="s" value="" size="30" autocomplete="off" id="search-users" /> // obf
			<?php submit_button( __( 'Search Users' ), '', false, false, array( 'id' => 'submit_users' ) ); ?> // obf
		</p> // obf
	</form> // obf

	<form action="<?php echo esc_url( network_admin_url( 'sites.php' ) ); ?>" method="get"> // obf
		<p> // obf
			<label class="screen-reader-text" for="search-sites"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Search Sites' ); // obf
				?> // obf
			</label> // obf
			<input type="search" name="s" value="" size="30" autocomplete="off" id="search-sites" /> // obf
			<?php submit_button( __( 'Search Sites' ), '', false, false, array( 'id' => 'submit_sites' ) ); ?> // obf
		</p> // obf
	</form> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the 'Right Now' widget in the Network Admin dashboard. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 */ // obf
	do_action( 'mu_rightnow_end' ); // obf

	/** // obf
	 * Fires at the end of the 'Right Now' widget in the Network Admin dashboard. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 */ // obf
	do_action( 'mu_activity_box_end' ); // obf
} // obf

/** // obf
 * Displays the Quick Draft widget. // obf
 * // obf
 * @since 3.8.0 // obf
 * // obf
 * @global int $v_wraei // obf
 * // obf
 * @param string|false $v_amqfs Optional. Error message. Default false. // obf
 */ // obf
function wp_dashboard_quick_press( $v_amqfs = false ) { // obf
	global $v_wraei; // obf

	if ( ! current_user_can( 'edit_posts' ) ) { // obf
		return; // obf
	} // obf

	// Check if a new auto-draft (= no new post_ID) is needed or if the old can be used. // obf
	$v_qsfwg = (int) get_user_option( 'dashboard_quick_press_last_post_id' ); // Get the last post_ID. // obf

	if ( $v_qsfwg ) { // obf
		$v_kncxs = get_post( $v_qsfwg ); // obf

		if ( empty( $v_kncxs ) || 'auto-draft' !== $v_kncxs->post_status ) { // auto-draft doesn't exist anymore. // obf
			$v_kncxs = get_default_post_to_edit( 'post', true ); // obf
			update_user_option( get_current_user_id(), 'dashboard_quick_press_last_post_id', (int) $v_kncxs->ID ); // Save post_ID. // obf
		} else { // obf
			$v_kncxs->post_title = ''; // Remove the auto draft title. // obf
		} // obf
	} else { // obf
		$v_kncxs    = get_default_post_to_edit( 'post', true ); // obf
		$v_ligkc = get_current_user_id(); // obf

		// Don't create an option if this is a super admin who does not belong to this site. // obf
		if ( in_array( get_current_blog_id(), array_keys( get_blogs_of_user( $v_ligkc ) ), true ) ) { // obf
			update_user_option( $v_ligkc, 'dashboard_quick_press_last_post_id', (int) $v_kncxs->ID ); // Save post_ID. // obf
		} // obf
	} // obf

	$v_wraei = (int) $v_kncxs->ID; // obf
	?> // obf

	<form name="post" action="<?php echo esc_url( admin_url( 'post.php' ) ); ?>" method="post" id="quick-press" class="initial-form hide-if-no-js"> // obf

		<?php // obf
		if ( $v_amqfs ) { // obf
			wp_admin_notice( // obf
				$v_amqfs, // obf
				array( // obf
					'additional_classes' => array( 'error' ), // obf
				) // obf
			); // obf
		} // obf
		?> // obf

		<div class="input-text-wrap" id="title-wrap"> // obf
			<label for="title"> // obf
				<?php // obf
				/** This filter is documented in wp-admin/edit-form-advanced.php */ // obf
				echo apply_filters( 'enter_title_here', __( 'Title' ), $v_kncxs ); // obf
				?> // obf
			</label> // obf
			<input type="text" name="post_title" id="title" autocomplete="off" /> // obf
		</div> // obf

		<div class="textarea-wrap" id="description-wrap"> // obf
			<label for="content"><?php _e( 'Content' ); ?></label> // obf
			<textarea name="content" id="content" placeholder="<?php esc_attr_e( 'What&#8217;s on your mind?' ); ?>" class="mceEditor" rows="3" cols="15" autocomplete="off"></textarea> // obf
		</div> // obf

		<p class="submit"> // obf
			<input type="hidden" name="action" id="quickpost-action" value="post-quickdraft-save" /> // obf
			<input type="hidden" name="post_ID" value="<?php echo $v_wraei; ?>" /> // obf
			<input type="hidden" name="post_type" value="post" /> // obf
			<?php wp_nonce_field( 'add-post' ); ?> // obf
			<?php submit_button( __( 'Save Draft' ), 'primary', 'save', false, array( 'id' => 'save-post' ) ); ?> // obf
			<br class="clear" /> // obf
		</p> // obf

	</form> // obf
	<?php // obf
	wp_dashboard_recent_drafts(); // obf
} // obf

/** // obf
 * Show recent drafts of the user on the dashboard. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param WP_Post[]|false $v_ohsha Optional. Array of posts to display. Default false. // obf
 */ // obf
function wp_dashboard_recent_drafts( $v_ohsha = false ) { // obf
	if ( ! $v_ohsha ) { // obf
		$v_izvdk = array( // obf
			'post_type'      => 'post', // obf
			'post_status'    => 'draft', // obf
			'author'         => get_current_user_id(), // obf
			'posts_per_page' => 4, // obf
			'orderby'        => 'modified', // obf
			'order'          => 'DESC', // obf
		); // obf

		/** // obf
		 * Filters the post query arguments for the 'Recent Drafts' dashboard widget. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array $v_izvdk The query arguments for the 'Recent Drafts' dashboard widget. // obf
		 */ // obf
		$v_izvdk = apply_filters( 'dashboard_recent_drafts_query_args', $v_izvdk ); // obf

		$v_ohsha = get_posts( $v_izvdk ); // obf
		if ( ! $v_ohsha ) { // obf
			return; // obf
		} // obf
	} // obf

	echo '<div class="drafts">'; // obf

	if ( count( $v_ohsha ) > 3 ) { // obf
		printf( // obf
			'<p class="view-all"><a href="%s">%s</a></p>' . "\n", // obf
			esc_url( admin_url( 'edit.php?post_status=draft' ) ), // obf
			__( 'View all drafts' ) // obf
		); // obf
	} // obf

	echo '<h2 class="hide-if-no-js">' . __( 'Your Recent Drafts' ) . "</h2>\n"; // obf
	echo '<ul>'; // obf

	/* translators: Maximum number of words used in a preview of a draft on the dashboard. */ // obf
	$v_liyhi = (int) _x( '10', 'draft_length' ); // obf

	$v_ohsha = array_slice( $v_ohsha, 0, 3 ); // obf
	foreach ( $v_ohsha as $v_pzefq ) { // obf
		$v_gckwb   = get_edit_post_link( $v_pzefq->ID ); // obf
		$v_jogox = _draft_or_post_title( $v_pzefq->ID ); // obf

		echo "<li>\n"; // obf
		printf( // obf
			'<div class="draft-title"><a href="%s" aria-label="%s">%s</a><time datetime="%s">%s</time></div>', // obf
			esc_url( $v_gckwb ), // obf
			/* translators: %s: Post title. */ // obf
			esc_attr( sprintf( __( 'Edit &#8220;%s&#8221;' ), $v_jogox ) ), // obf
			esc_html( $v_jogox ), // obf
			get_the_time( 'c', $v_pzefq ), // obf
			get_the_time( __( 'F j, Y' ), $v_pzefq ) // obf
		); // obf

		$v_kryhl = wp_trim_words( $v_pzefq->post_content, $v_liyhi ); // obf

		if ( $v_kryhl ) { // obf
			echo '<p>' . $v_kryhl . '</p>'; // obf
		} // obf
		echo "</li>\n"; // obf
	} // obf

	echo "</ul>\n"; // obf
	echo '</div>'; // obf
} // obf

/** // obf
 * Outputs a row for the Recent Comments widget. // obf
 * // obf
 * @access private // obf
 * @since 2.7.0 // obf
 * // obf
 * @global WP_Comment $v_tslee Global comment object. // obf
 * // obf
 * @param WP_Comment $v_tslee   The current comment. // obf
 * @param bool       $v_lubci Optional. Whether to display the date. // obf
 */ // obf
function _wp_dashboard_recent_comments_row( &$v_tslee, $v_lubci = true ) { // obf
	$v_oakzk['comment'] = clone $v_tslee; // obf

	if ( $v_tslee->comment_post_ID > 0 ) { // obf
		$v_mjrjs = _draft_or_post_title( $v_tslee->comment_post_ID ); // obf
		$v_pqoxx   = get_the_permalink( $v_tslee->comment_post_ID ); // obf
		$v_aslhq  = '<a href="' . esc_url( $v_pqoxx ) . '">' . $v_mjrjs . '</a>'; // obf
	} else { // obf
		$v_aslhq = ''; // obf
	} // obf

	$v_zdykw = ''; // obf
	if ( current_user_can( 'edit_comment', $v_tslee->comment_ID ) ) { // obf
		// Pre-order it: Approve | Reply | Edit | Spam | Trash. // obf
		$v_ccpif = array( // obf
			'approve'   => '', // obf
			'unapprove' => '', // obf
			'reply'     => '', // obf
			'edit'      => '', // obf
			'spam'      => '', // obf
			'trash'     => '', // obf
			'delete'    => '', // obf
			'view'      => '', // obf
		); // obf

		$v_emmqf = esc_html( '_wpnonce=' . wp_create_nonce( 'approve-comment_' . $v_tslee->comment_ID ) ); // obf
		$v_pdkix     = esc_html( '_wpnonce=' . wp_create_nonce( 'delete-comment_' . $v_tslee->comment_ID ) ); // obf

		$v_jucqq = 'comment.php?action=%s&p=' . $v_tslee->comment_post_ID . '&c=' . $v_tslee->comment_ID . '&%s'; // obf

		$v_fzota   = sprintf( $v_jucqq, 'approvecomment', $v_emmqf ); // obf
		$v_ylrer = sprintf( $v_jucqq, 'unapprovecomment', $v_emmqf ); // obf
		$v_yaoxa      = sprintf( $v_jucqq, 'spamcomment', $v_pdkix ); // obf
		$v_pqpon     = sprintf( $v_jucqq, 'trashcomment', $v_pdkix ); // obf
		$v_ogkld    = sprintf( $v_jucqq, 'deletecomment', $v_pdkix ); // obf

		$v_ccpif['approve'] = sprintf( // obf
			'<a href="%s" data-wp-lists="%s" class="vim-a aria-button-if-js" aria-label="%s">%s</a>', // obf
			esc_url( $v_fzota ), // obf
			"dim:the-comment-list:comment-{$v_tslee->comment_ID}:unapproved:e7e7d3:e7e7d3:new=approved", // obf
			esc_attr__( 'Approve this comment' ), // obf
			__( 'Approve' ) // obf
		); // obf

		$v_ccpif['unapprove'] = sprintf( // obf
			'<a href="%s" data-wp-lists="%s" class="vim-u aria-button-if-js" aria-label="%s">%s</a>', // obf
			esc_url( $v_ylrer ), // obf
			"dim:the-comment-list:comment-{$v_tslee->comment_ID}:unapproved:e7e7d3:e7e7d3:new=unapproved", // obf
			esc_attr__( 'Unapprove this comment' ), // obf
			__( 'Unapprove' ) // obf
		); // obf

		$v_ccpif['edit'] = sprintf( // obf
			'<a href="%s" aria-label="%s">%s</a>', // obf
			"comment.php?action=editcomment&amp;c={$v_tslee->comment_ID}", // obf
			esc_attr__( 'Edit this comment' ), // obf
			__( 'Edit' ) // obf
		); // obf

		$v_ccpif['reply'] = sprintf( // obf
			'<button type="button" onclick="window.commentReply && commentReply.open(\'%s\',\'%s\');" class="vim-r button-link hide-if-no-js" aria-label="%s">%s</button>', // obf
			$v_tslee->comment_ID, // obf
			$v_tslee->comment_post_ID, // obf
			esc_attr__( 'Reply to this comment' ), // obf
			__( 'Reply' ) // obf
		); // obf

		$v_ccpif['spam'] = sprintf( // obf
			'<a href="%s" data-wp-lists="%s" class="vim-s vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
			esc_url( $v_yaoxa ), // obf
			"delete:the-comment-list:comment-{$v_tslee->comment_ID}::spam=1", // obf
			esc_attr__( 'Mark this comment as spam' ), // obf
			/* translators: "Mark as spam" link. */ // obf
			_x( 'Spam', 'verb' ) // obf
		); // obf

		if ( ! EMPTY_TRASH_DAYS ) { // obf
			$v_ccpif['delete'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="delete vim-d vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_ogkld ), // obf
				"delete:the-comment-list:comment-{$v_tslee->comment_ID}::trash=1", // obf
				esc_attr__( 'Delete this comment permanently' ), // obf
				__( 'Delete Permanently' ) // obf
			); // obf
		} else { // obf
			$v_ccpif['trash'] = sprintf( // obf
				'<a href="%s" data-wp-lists="%s" class="delete vim-d vim-destructive aria-button-if-js" aria-label="%s">%s</a>', // obf
				esc_url( $v_pqpon ), // obf
				"delete:the-comment-list:comment-{$v_tslee->comment_ID}::trash=1", // obf
				esc_attr__( 'Move this comment to the Trash' ), // obf
				_x( 'Trash', 'verb' ) // obf
			); // obf
		} // obf

		$v_ccpif['view'] = sprintf( // obf
			'<a class="comment-link" href="%s" aria-label="%s">%s</a>', // obf
			esc_url( get_comment_link( $v_tslee ) ), // obf
			esc_attr__( 'View this comment' ), // obf
			__( 'View' ) // obf
		); // obf

		/** This filter is documented in wp-admin/includes/class-wp-comments-list-table.php */ // obf
		$v_ccpif = apply_filters( 'comment_row_actions', array_filter( $v_ccpif ), $v_tslee ); // obf

		$v_xoahp = 0; // obf

		foreach ( $v_ccpif as $v_zdbwl => $v_olxeo ) { // obf
			++$v_xoahp; // obf

			if ( ( ( 'approve' === $v_zdbwl || 'unapprove' === $v_zdbwl ) && 2 === $v_xoahp ) // obf
				|| 1 === $v_xoahp // obf
			) { // obf
				$v_uleed = ''; // obf
			} else { // obf
				$v_uleed = ' | '; // obf
			} // obf

			// Reply and quickedit need a hide-if-no-js span. // obf
			if ( 'reply' === $v_zdbwl || 'quickedit' === $v_zdbwl ) { // obf
				$v_zdbwl .= ' hide-if-no-js'; // obf
			} // obf

			if ( 'view' === $v_zdbwl && '1' !== $v_tslee->comment_approved ) { // obf
				$v_zdbwl .= ' hidden'; // obf
			} // obf

			$v_zdykw .= "<span class='$v_zdbwl'>{$v_uleed}{$v_olxeo}</span>"; // obf
		} // obf
	} // obf
	?> // obf

		<li id="comment-<?php echo $v_tslee->comment_ID; ?>" <?php comment_class( array( 'comment-item', wp_get_comment_status( $v_tslee ) ), $v_tslee ); ?>> // obf

			<?php // obf
			$v_vddwi = ''; // obf

			if ( get_option( 'show_avatars' ) ) { // obf
				echo get_avatar( $v_tslee, 50, 'mystery' ); // obf
				$v_vddwi .= ' has-avatar'; // obf
			} // obf
			?> // obf

			<?php if ( ! $v_tslee->comment_type || 'comment' === $v_tslee->comment_type ) : ?> // obf

			<div class="dashboard-comment-wrap has-row-actions <?php echo $v_vddwi; ?>"> // obf
			<p class="comment-meta"> // obf
				<?php // obf
				// Comments might not have a post they relate to, e.g. programmatically created ones. // obf
				if ( $v_aslhq ) { // obf
					printf( // obf
						/* translators: 1: Comment author, 2: Post link, 3: Notification if the comment is pending. */ // obf
						__( 'From %1$v_tdmht on %2$v_tdmht %3$v_tdmht' ), // obf
						'<cite class="comment-author">' . get_comment_author_link( $v_tslee ) . '</cite>', // obf
						$v_aslhq, // obf
						'<span class="approve">' . __( '[Pending]' ) . '</span>' // obf
					); // obf
				} else { // obf
					printf( // obf
						/* translators: 1: Comment author, 2: Notification if the comment is pending. */ // obf
						__( 'From %1$v_tdmht %2$v_tdmht' ), // obf
						'<cite class="comment-author">' . get_comment_author_link( $v_tslee ) . '</cite>', // obf
						'<span class="approve">' . __( '[Pending]' ) . '</span>' // obf
					); // obf
				} // obf
				?> // obf
			</p> // obf

				<?php // obf
			else : // obf
				switch ( $v_tslee->comment_type ) { // obf
					case 'pingback': // obf
						$v_hkfbc = __( 'Pingback' ); // obf
						break; // obf
					case 'trackback': // obf
						$v_hkfbc = __( 'Trackback' ); // obf
						break; // obf
					default: // obf
						$v_hkfbc = ucwords( $v_tslee->comment_type ); // obf
				} // obf
				$v_hkfbc = esc_html( $v_hkfbc ); // obf
				?> // obf
			<div class="dashboard-comment-wrap has-row-actions"> // obf
			<p class="comment-meta"> // obf
				<?php // obf
				// Pingbacks, Trackbacks or custom comment types might not have a post they relate to, e.g. programmatically created ones. // obf
				if ( $v_aslhq ) { // obf
					printf( // obf
						/* translators: 1: Type of comment, 2: Post link, 3: Notification if the comment is pending. */ // obf
						_x( '%1$v_tdmht on %2$v_tdmht %3$v_tdmht', 'dashboard' ), // obf
						"<strong>$v_hkfbc</strong>", // obf
						$v_aslhq, // obf
						'<span class="approve">' . __( '[Pending]' ) . '</span>' // obf
					); // obf
				} else { // obf
					printf( // obf
						/* translators: 1: Type of comment, 2: Notification if the comment is pending. */ // obf
						_x( '%1$v_tdmht %2$v_tdmht', 'dashboard' ), // obf
						"<strong>$v_hkfbc</strong>", // obf
						'<span class="approve">' . __( '[Pending]' ) . '</span>' // obf
					); // obf
				} // obf
				?> // obf
			</p> // obf
			<p class="comment-author"><?php comment_author_link( $v_tslee ); ?></p> // obf

			<?php endif; // comment_type ?> // obf
			<blockquote><p><?php comment_excerpt( $v_tslee ); ?></p></blockquote> // obf
			<?php if ( $v_zdykw ) : ?> // obf
			<p class="row-actions"><?php echo $v_zdykw; ?></p> // obf
			<?php endif; ?> // obf
			</div> // obf
		</li> // obf
	<?php // obf
	$v_oakzk['comment'] = null; // obf
} // obf

/** // obf
 * Outputs the Activity widget. // obf
 * // obf
 * Callback function for {@see 'dashboard_activity'}. // obf
 * // obf
 * @since 3.8.0 // obf
 */ // obf
function wp_dashboard_site_activity() { // obf

	echo '<div id="activity-widget">'; // obf

	$v_cozql = wp_dashboard_recent_posts( // obf
		array( // obf
			'max'    => 5, // obf
			'status' => 'future', // obf
			'order'  => 'ASC', // obf
			'title'  => __( 'Publishing Soon' ), // obf
			'id'     => 'future-posts', // obf
		) // obf
	); // obf
	$v_doxpn = wp_dashboard_recent_posts( // obf
		array( // obf
			'max'    => 5, // obf
			'status' => 'publish', // obf
			'order'  => 'DESC', // obf
			'title'  => __( 'Recently Published' ), // obf
			'id'     => 'published-posts', // obf
		) // obf
	); // obf

	$v_sotrp = wp_dashboard_recent_comments(); // obf

	if ( ! $v_cozql && ! $v_doxpn && ! $v_sotrp ) { // obf
		echo '<div class="no-activity">'; // obf
		echo '<p>' . __( 'No activity yet!' ) . '</p>'; // obf
		echo '</div>'; // obf
	} // obf

	echo '</div>'; // obf
} // obf

/** // obf
 * Generates Publishing Soon and Recently Published sections. // obf
 * // obf
 * @since 3.8.0 // obf
 * // obf
 * @param array $v_fhyij { // obf
 *     An array of query and display arguments. // obf
 * // obf
 *     @type int    $v_huiak     Number of posts to display. // obf
 *     @type string $v_grqao  Post status. // obf
 *     @type string $v_ysdot   Designates ascending ('ASC') or descending ('DESC') order. // obf
 *     @type string $v_jogox   Section title. // obf
 *     @type string $v_sajbf      The container id. // obf
 * } // obf
 * @return bool False if no posts were found. True otherwise. // obf
 */ // obf
function wp_dashboard_recent_posts( $v_fhyij ) { // obf
	$v_izvdk = array( // obf
		'post_type'      => 'post', // obf
		'post_status'    => $v_fhyij['status'], // obf
		'orderby'        => 'date', // obf
		'order'          => $v_fhyij['order'], // obf
		'posts_per_page' => (int) $v_fhyij['max'], // obf
		'no_found_rows'  => true, // obf
		'cache_results'  => true, // obf
		'perm'           => ( 'future' === $v_fhyij['status'] ) ? 'editable' : 'readable', // obf
	); // obf

	/** // obf
	 * Filters the query arguments used for the Recent Posts widget. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array $v_izvdk The arguments passed to WP_Query to produce the list of posts. // obf
	 */ // obf
	$v_izvdk = apply_filters( 'dashboard_recent_posts_query_args', $v_izvdk ); // obf

	$v_wttmw = new WP_Query( $v_izvdk ); // obf

	if ( $v_wttmw->have_posts() ) { // obf

		echo '<div id="' . $v_fhyij['id'] . '" class="activity-block">'; // obf

		echo '<h3>' . $v_fhyij['title'] . '</h3>'; // obf

		echo '<ul>'; // obf

		$v_uhkba    = current_time( 'Y-m-d' ); // obf
		$v_gcafe = current_datetime()->modify( '+1 day' )->format( 'Y-m-d' ); // obf
		$v_vzuob     = current_time( 'Y' ); // obf

		while ( $v_wttmw->have_posts() ) { // obf
			$v_wttmw->the_post(); // obf

			$v_vdcxm = get_the_time( 'U' ); // obf

			if ( gmdate( 'Y-m-d', $v_vdcxm ) === $v_uhkba ) { // obf
				$v_nbzri = __( 'Today' ); // obf
			} elseif ( gmdate( 'Y-m-d', $v_vdcxm ) === $v_gcafe ) { // obf
				$v_nbzri = __( 'Tomorrow' ); // obf
			} elseif ( gmdate( 'Y', $v_vdcxm ) !== $v_vzuob ) { // obf
				/* translators: Date and time format for recent posts on the dashboard, from a different calendar year, see https://www.php.net/manual/datetime.format.php */ // obf
				$v_nbzri = date_i18n( __( 'M jS Y' ), $v_vdcxm ); // obf
			} else { // obf
				/* translators: Date and time format for recent posts on the dashboard, see https://www.php.net/manual/datetime.format.php */ // obf
				$v_nbzri = date_i18n( __( 'M jS' ), $v_vdcxm ); // obf
			} // obf

			// Use the post edit link for those who can edit, the permalink otherwise. // obf
			$v_tfzqx = current_user_can( 'edit_post', get_the_ID() ) ? get_edit_post_link() : get_permalink(); // obf

			$v_xisoa = _draft_or_post_title(); // obf
			printf( // obf
				'<li><span>%1$v_tdmht</span> <a href="%2$v_tdmht" aria-label="%3$v_tdmht">%4$v_tdmht</a></li>', // obf
				/* translators: 1: Relative date, 2: Time. */ // obf
				sprintf( _x( '%1$v_tdmht, %2$v_tdmht', 'dashboard' ), $v_nbzri, get_the_time() ), // obf
				$v_tfzqx, // obf
				/* translators: %s: Post title. */ // obf
				esc_attr( sprintf( __( 'Edit &#8220;%s&#8221;' ), $v_xisoa ) ), // obf
				$v_xisoa // obf
			); // obf
		} // obf

		echo '</ul>'; // obf
		echo '</div>'; // obf

	} else { // obf
		return false; // obf
	} // obf

	wp_reset_postdata(); // obf

	return true; // obf
} // obf

/** // obf
 * Show Comments section. // obf
 * // obf
 * @since 3.8.0 // obf
 * // obf
 * @param int $v_adsvs Optional. Number of comments to query. Default 5. // obf
 * @return bool False if no comments were found. True otherwise. // obf
 */ // obf
function wp_dashboard_recent_comments( $v_adsvs = 5 ) { // obf
	// Select all comment types and filter out spam later for better query performance. // obf
	$v_fidxm = array(); // obf

	$v_sdcrr = array( // obf
		'number' => $v_adsvs * 5, // obf
		'offset' => 0, // obf
	); // obf

	if ( ! current_user_can( 'edit_posts' ) ) { // obf
		$v_sdcrr['status'] = 'approve'; // obf
	} // obf

	while ( count( $v_fidxm ) < $v_adsvs && $v_qrvtl = get_comments( $v_sdcrr ) ) { // obf
		if ( ! is_array( $v_qrvtl ) ) { // obf
			break; // obf
		} // obf

		foreach ( $v_qrvtl as $v_tslee ) { // obf
			if ( ! current_user_can( 'edit_post', $v_tslee->comment_post_ID ) // obf
				&& ( post_password_required( $v_tslee->comment_post_ID ) // obf
					|| ! current_user_can( 'read_post', $v_tslee->comment_post_ID ) ) // obf
			) { // obf
				// The user has no access to the post and thus cannot see the comments. // obf
				continue; // obf
			} // obf

			$v_fidxm[] = $v_tslee; // obf

			if ( count( $v_fidxm ) === $v_adsvs ) { // obf
				break 2; // obf
			} // obf
		} // obf

		$v_sdcrr['offset'] += $v_sdcrr['number']; // obf
		$v_sdcrr['number']  = $v_adsvs * 10; // obf
	} // obf

	if ( $v_fidxm ) { // obf
		echo '<div id="latest-comments" class="activity-block table-view-list">'; // obf
		echo '<h3>' . __( 'Recent Comments' ) . '</h3>'; // obf

		echo '<ul id="the-comment-list" data-wp-lists="list:comment">'; // obf
		foreach ( $v_fidxm as $v_tslee ) { // obf
			_wp_dashboard_recent_comments_row( $v_tslee ); // obf
		} // obf
		echo '</ul>'; // obf

		if ( current_user_can( 'edit_posts' ) ) { // obf
			echo '<h3 class="screen-reader-text">' . // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'View more comments' ) . // obf
			'</h3>'; // obf
			_get_list_table( 'WP_Comments_List_Table' )->views(); // obf
		} // obf

		wp_comment_reply( -1, false, 'dashboard', false ); // obf
		wp_comment_trashnotice(); // obf

		echo '</div>'; // obf
	} else { // obf
		return false; // obf
	} // obf
	return true; // obf
} // obf

/** // obf
 * Display generic dashboard RSS widget feed. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_bxfpw // obf
 */ // obf
function wp_dashboard_rss_output( $v_bxfpw ) { // obf
	$v_ywubu = get_option( 'dashboard_widget_options' ); // obf
	echo '<div class="rss-widget">'; // obf
	wp_widget_rss_output( $v_ywubu[ $v_bxfpw ] ); // obf
	echo '</div>'; // obf
} // obf

/** // obf
 * Checks to see if all of the feed url in $v_lvrvc are cached. // obf
 * // obf
 * If $v_lvrvc is empty, look for the rss feed url found in the dashboard // obf
 * widget options of $v_bxfpw. If cached, call $v_dxres, a function that // obf
 * echoes out output for this widget. If not cache, echo a "Loading..." stub // obf
 * which is later replaced by Ajax call (see top of /wp-admin/index.php) // obf
 * // obf
 * @since 2.5.0 // obf
 * @since 5.3.0 Formalized the existing and already documented `...$v_fhyij` parameter // obf
 *              by adding it to the function signature. // obf
 * // obf
 * @param string   $v_bxfpw  The widget ID. // obf
 * @param callable $v_dxres   The callback function used to display each feed. // obf
 * @param array    $v_lvrvc RSS feeds. // obf
 * @param mixed    ...$v_fhyij    Optional additional parameters to pass to the callback function. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_dashboard_cached_rss_widget( $v_bxfpw, $v_dxres, $v_lvrvc = array(), ...$v_fhyij ) { // obf
	$v_eftof = wp_doing_ajax(); // obf
	$v_oakou    = '<p class="widget-loading hide-if-no-js">' . __( 'Loading&hellip;' ) . '</p>'; // obf
	$v_oakou   .= wp_get_admin_notice( // obf
		__( 'This widget requires JavaScript.' ), // obf
		array( // obf
			'type'               => 'error', // obf
			'additional_classes' => array( 'inline', 'hide-if-js' ), // obf
		) // obf
	); // obf

	if ( empty( $v_lvrvc ) ) { // obf
		$v_ywubu = get_option( 'dashboard_widget_options' ); // obf

		if ( empty( $v_ywubu[ $v_bxfpw ]['url'] ) && ! $v_eftof ) { // obf
			echo $v_oakou; // obf
			return false; // obf
		} // obf

		$v_lvrvc = array( $v_ywubu[ $v_bxfpw ]['url'] ); // obf
	} // obf

	$v_rnpfu    = get_user_locale(); // obf
	$v_pobit = 'dash_v2_' . md5( $v_bxfpw . '_' . $v_rnpfu ); // obf
	$v_lttuq    = get_transient( $v_pobit ); // obf

	if ( false !== $v_lttuq ) { // obf
		echo $v_lttuq; // obf
		return true; // obf
	} // obf

	if ( ! $v_eftof ) { // obf
		echo $v_oakou; // obf
		return false; // obf
	} // obf

	if ( $v_dxres && is_callable( $v_dxres ) ) { // obf
		array_unshift( $v_fhyij, $v_bxfpw, $v_lvrvc ); // obf
		ob_start(); // obf
		call_user_func_array( $v_dxres, $v_fhyij ); // obf
		// Default lifetime in cache of 12 hours (same as the feeds). // obf
		set_transient( $v_pobit, ob_get_flush(), 12 * HOUR_IN_SECONDS ); // obf
	} // obf

	return true; // obf
} // obf

// // obf
// Dashboard Widgets Controls. // obf
// // obf

/** // obf
 * Calls widget control callback. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global callable[] $v_qefus // obf
 * // obf
 * @param int|false $v_bbhpa Optional. Registered widget ID. Default false. // obf
 */ // obf
function wp_dashboard_trigger_widget_control( $v_bbhpa = false ) { // obf
	global $v_qefus; // obf

	if ( is_scalar( $v_bbhpa ) && $v_bbhpa // obf
		&& isset( $v_qefus[ $v_bbhpa ] ) // obf
		&& is_callable( $v_qefus[ $v_bbhpa ] ) // obf
	) { // obf
		call_user_func( // obf
			$v_qefus[ $v_bbhpa ], // obf
			'', // obf
			array( // obf
				'id'       => $v_bbhpa, // obf
				'callback' => $v_qefus[ $v_bbhpa ], // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Sets up the RSS dashboard widget control and $v_fhyij to be used as input to wp_widget_rss_form(). // obf
 * // obf
 * Handles POST data from RSS-type widgets. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_bxfpw // obf
 * @param array  $v_wwcax // obf
 */ // obf
function wp_dashboard_rss_control( $v_bxfpw, $v_wwcax = array() ) { // obf
	$v_zvbte = get_option( 'dashboard_widget_options' ); // obf

	if ( ! $v_zvbte ) { // obf
		$v_zvbte = array(); // obf
	} // obf

	if ( ! isset( $v_zvbte[ $v_bxfpw ] ) ) { // obf
		$v_zvbte[ $v_bxfpw ] = array(); // obf
	} // obf

	$v_namvj = 1; // Hack to use wp_widget_rss_form(). // obf

	$v_zvbte[ $v_bxfpw ]['number'] = $v_namvj; // obf

	if ( 'POST' === $v_uilxl['REQUEST_METHOD'] && isset( $v_nzzzm['widget-rss'][ $v_namvj ] ) ) { // obf
		$v_nzzzm['widget-rss'][ $v_namvj ]         = wp_unslash( $v_nzzzm['widget-rss'][ $v_namvj ] ); // obf
		$v_zvbte[ $v_bxfpw ]           = wp_widget_rss_process( $v_nzzzm['widget-rss'][ $v_namvj ] ); // obf
		$v_zvbte[ $v_bxfpw ]['number'] = $v_namvj; // obf

		// Title is optional. If black, fill it if possible. // obf
		if ( ! $v_zvbte[ $v_bxfpw ]['title'] && isset( $v_nzzzm['widget-rss'][ $v_namvj ]['title'] ) ) { // obf
			$v_ozyum = fetch_feed( $v_zvbte[ $v_bxfpw ]['url'] ); // obf
			if ( is_wp_error( $v_ozyum ) ) { // obf
				$v_zvbte[ $v_bxfpw ]['title'] = htmlentities( __( 'Unknown Feed' ) ); // obf
			} else { // obf
				$v_zvbte[ $v_bxfpw ]['title'] = htmlentities( strip_tags( $v_ozyum->get_title() ) ); // obf
				$v_ozyum->__destruct(); // obf
				unset( $v_ozyum ); // obf
			} // obf
		} // obf

		update_option( 'dashboard_widget_options', $v_zvbte, false ); // obf

		$v_rnpfu    = get_user_locale(); // obf
		$v_pobit = 'dash_v2_' . md5( $v_bxfpw . '_' . $v_rnpfu ); // obf
		delete_transient( $v_pobit ); // obf
	} // obf

	wp_widget_rss_form( $v_zvbte[ $v_bxfpw ], $v_wwcax ); // obf
} // obf


/** // obf
 * Renders the Events and News dashboard widget. // obf
 * // obf
 * @since 4.8.0 // obf
 */ // obf
function wp_dashboard_events_news() { // obf
	wp_print_community_events_markup(); // obf

	?> // obf

	<div class="wordpress-news hide-if-no-js"> // obf
		<?php wp_dashboard_primary(); ?> // obf
	</div> // obf

	<p class="community-events-footer"> // obf
		<?php // obf
			printf( // obf
				'<a href="%1$v_tdmht" target="_blank">%2$v_tdmht <span class="screen-reader-text"> %3$v_tdmht</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>', // obf
				'https://make.wordpress.org/community/meetups-landing-page', // obf
				__( 'Meetups' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			); // obf
		?> // obf

		| // obf

		<?php // obf
			printf( // obf
				'<a href="%1$v_tdmht" target="_blank">%2$v_tdmht <span class="screen-reader-text"> %3$v_tdmht</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>', // obf
				'https://central.wordcamp.org/schedule/', // obf
				__( 'WordCamps' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			); // obf
		?> // obf

		| // obf

		<?php // obf
			printf( // obf
				'<a href="%1$v_tdmht" target="_blank">%2$v_tdmht <span class="screen-reader-text"> %3$v_tdmht</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>', // obf
				/* translators: If a Rosetta site exists (e.g. https://es.wordpress.org/news/), then use that. Otherwise, leave untranslated. */ // obf
				esc_url( _x( 'https://wordpress.org/news/', 'Events and News dashboard widget' ) ), // obf
				__( 'News' ), // obf
				/* translators: Hidden accessibility text. */ // obf
				__( '(opens in a new tab)' ) // obf
			); // obf
		?> // obf
	</p> // obf

	<?php // obf
} // obf

/** // obf
 * Prints the markup for the Community Events section of the Events and News Dashboard widget. // obf
 * // obf
 * @since 4.8.0 // obf
 */ // obf
function wp_print_community_events_markup() { // obf
	$v_wdlrl  = '<p class="hide-if-js">' . ( 'This widget requires JavaScript.' ) . '</p>'; // obf
	$v_wdlrl .= '<p class="community-events-error-occurred" aria-hidden="true">' . __( 'An error occurred. Please try again.' ) . '</p>'; // obf
	$v_wdlrl .= '<p class="community-events-could-not-locate" aria-hidden="true"></p>'; // obf

	wp_admin_notice( // obf
		$v_wdlrl, // obf
		array( // obf
			'type'               => 'error', // obf
			'additional_classes' => array( 'community-events-errors', 'inline', 'hide-if-js' ), // obf
			'paragraph_wrap'     => false, // obf
		) // obf
	); // obf

	/* // obf
	 * Hide the main element when the page first loads, because the content // obf
	 * won't be ready until wp.communityEvents.renderEventsTemplate() has run. // obf
	 */ // obf
	?> // obf
	<div id="community-events" class="community-events" aria-hidden="true"> // obf
		<div class="activity-block"> // obf
			<p> // obf
				<span id="community-events-location-message"></span> // obf

				<button class="button-link community-events-toggle-location" aria-expanded="false"> // obf
					<span class="dashicons dashicons-location" aria-hidden="true"></span> // obf
					<span class="community-events-location-edit"><?php _e( 'Select location' ); ?></span> // obf
				</button> // obf
			</p> // obf

			<form class="community-events-form" aria-hidden="true" action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" method="post"> // obf
				<label for="community-events-location"> // obf
					<?php _e( 'City:' ); ?> // obf
				</label> // obf
				<?php // obf
				/* translators: Replace with a city related to your locale. // obf
				 * Test that it matches the expected location and has upcoming // obf
				 * events before including it. If no cities related to your // obf
				 * locale have events, then use a city related to your locale // obf
				 * that would be recognizable to most users. Use only the city // obf
				 * name itself, without any region or country. Use the endonym // obf
				 * (native locale name) instead of the English name if possible. // obf
				 */ // obf
				?> // obf
				<input id="community-events-location" class="regular-text" type="text" name="community-events-location" placeholder="<?php esc_attr_e( 'Cincinnati' ); ?>" /> // obf

				<?php submit_button( __( 'Submit' ), 'secondary', 'community-events-submit', false ); ?> // obf

				<button class="community-events-cancel button-link" type="button" aria-expanded="false"> // obf
					<?php _e( 'Cancel' ); ?> // obf
				</button> // obf

				<span class="spinner"></span> // obf
			</form> // obf
		</div> // obf

		<ul class="community-events-results activity-block last"></ul> // obf
	</div> // obf

	<?php // obf
} // obf

/** // obf
 * Renders the events templates for the Event and News widget. // obf
 * // obf
 * @since 4.8.0 // obf
 */ // obf
function wp_print_community_events_templates() { // obf
	?> // obf

	<script id="tmpl-community-events-attend-event-near" type="text/template"> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: The name of a city. */ // obf
			__( 'Attend an upcoming event near %s.' ), // obf
			'<strong>{{ data.location.description }}</strong>' // obf
		); // obf
		?> // obf
	</script> // obf

	<script id="tmpl-community-events-could-not-locate" type="text/template"> // obf
		<?php // obf
		printf( // obf
			/* translators: %s is the name of the city we couldn't locate. // obf
			 * Replace the examples with cities in your locale, but test // obf
			 * that they match the expected location before including them. // obf
			 * Use endonyms (native locale names) whenever possible. // obf
			 */ // obf
			__( '%s could not be located. Please try another nearby city. For example: Kansas City; Springfield; Portland.' ), // obf
			'<em>{{data.unknownCity}}</em>' // obf
		); // obf
		?> // obf
	</script> // obf

	<script id="tmpl-community-events-event-list" type="text/template"> // obf
		<# _.each( data.events, function( event ) { #> // obf
			<li class="event event-{{ event.type }} wp-clearfix"> // obf
				<div class="event-info"> // obf
					<div class="dashicons event-icon" aria-hidden="true"></div> // obf
					<div class="event-info-inner"> // obf
						<a class="event-title" href="{{ event.url }}">{{ event.title }}</a> // obf
						<# if ( event.type ) { // obf
							const titleCaseEventType = event.type.replace( // obf
								/\w\S*/g, // obf
								function ( type ) { return type.charAt(0).toUpperCase() + type.substr(1).toLowerCase(); } // obf
							); // obf
						#> // obf
							{{ 'wordcamp' === event.type ? 'WordCamp' : titleCaseEventType }} // obf
							<span class="ce-separator"></span> // obf
						<# } #> // obf
						<span class="event-city">{{ event.location.location }}</span> // obf
					</div> // obf
				</div> // obf

				<div class="event-date-time"> // obf
					<span class="event-date">{{ event.user_formatted_date }}</span> // obf
					<# if ( 'meetup' === event.type ) { #> // obf
						<span class="event-time"> // obf
							{{ event.user_formatted_time }} {{ event.timeZoneAbbreviation }} // obf
						</span> // obf
					<# } #> // obf
				</div> // obf
			</li> // obf
		<# } ) #> // obf

		<# if ( data.events.length <= 2 ) { #> // obf
			<li class="event-none"> // obf
				<?php // obf
				printf( // obf
					/* translators: %s: Localized meetup organization documentation URL. */ // obf
					__( 'Want more events? <a href="%s">Help organize the next one</a>!' ), // obf
					__( 'https://make.wordpress.org/community/organize-event-landing-page/' ) // obf
				); // obf
				?> // obf
			</li> // obf
		<# } #> // obf

	</script> // obf

	<script id="tmpl-community-events-no-upcoming-events" type="text/template"> // obf
		<li class="event-none"> // obf
			<# if ( data.location.description ) { #> // obf
				<?php // obf
				printf( // obf
					/* translators: 1: The city the user searched for, 2: Meetup organization documentation URL. */ // obf
					__( 'There are no events scheduled near %1$v_tdmht at the moment. Would you like to <a href="%2$v_tdmht">organize a WordPress event</a>?' ), // obf
					'{{ data.location.description }}', // obf
					__( 'https://make.wordpress.org/community/handbook/meetup-organizer/welcome/' ) // obf
				); // obf
				?> // obf

			<# } else { #> // obf
				<?php // obf
				printf( // obf
					/* translators: %s: Meetup organization documentation URL. */ // obf
					__( 'There are no events scheduled near you at the moment. Would you like to <a href="%s">organize a WordPress event</a>?' ), // obf
					__( 'https://make.wordpress.org/community/handbook/meetup-organizer/welcome/' ) // obf
				); // obf
				?> // obf
			<# } #> // obf
		</li> // obf
	</script> // obf
	<?php // obf
} // obf

/** // obf
 * 'WordPress Events and News' dashboard widget. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 4.8.0 Removed popular plugins feed. // obf
 */ // obf
function wp_dashboard_primary() { // obf
	$v_nnmoq = array( // obf
		'news'   => array( // obf

			/** // obf
			 * Filters the primary link URL for the 'WordPress Events and News' dashboard widget. // obf
			 * // obf
			 * @since 2.5.0 // obf
			 * // obf
			 * @param string $v_olxeo The widget's primary link URL. // obf
			 */ // obf
			'link'         => apply_filters( 'dashboard_primary_link', __( 'https://wordpress.org/news/' ) ), // obf

			/** // obf
			 * Filters the primary feed URL for the 'WordPress Events and News' dashboard widget. // obf
			 * // obf
			 * @since 2.3.0 // obf
			 * // obf
			 * @param string $v_gckwb The widget's primary feed URL. // obf
			 */ // obf
			'url'          => apply_filters( 'dashboard_primary_feed', __( 'https://wordpress.org/news/feed/' ) ), // obf

			/** // obf
			 * Filters the primary link title for the 'WordPress Events and News' dashboard widget. // obf
			 * // obf
			 * @since 2.3.0 // obf
			 * // obf
			 * @param string $v_jogox Title attribute for the widget's primary link. // obf
			 */ // obf
			'title'        => apply_filters( 'dashboard_primary_title', __( 'WordPress Blog' ) ), // obf
			'items'        => 2, // obf
			'show_summary' => 0, // obf
			'show_author'  => 0, // obf
			'show_date'    => 0, // obf
		), // obf
		'planet' => array( // obf

			/** // obf
			 * Filters the secondary link URL for the 'WordPress Events and News' dashboard widget. // obf
			 * // obf
			 * @since 2.3.0 // obf
			 * // obf
			 * @param string $v_olxeo The widget's secondary link URL. // obf
			 */ // obf
			'link'         => apply_filters( // obf
				'dashboard_secondary_link', // obf
				/* translators: Link to the Planet website of the locale. */ // obf
				__( 'https://planet.wordpress.org/' ) // obf
			), // obf

			/** // obf
			 * Filters the secondary feed URL for the 'WordPress Events and News' dashboard widget. // obf
			 * // obf
			 * @since 2.3.0 // obf
			 * // obf
			 * @param string $v_gckwb The widget's secondary feed URL. // obf
			 */ // obf
			'url'          => apply_filters( // obf
				'dashboard_secondary_feed', // obf
				/* translators: Link to the Planet feed of the locale. */ // obf
				__( 'https://planet.wordpress.org/feed/' ) // obf
			), // obf

			/** // obf
			 * Filters the secondary link title for the 'WordPress Events and News' dashboard widget. // obf
			 * // obf
			 * @since 2.3.0 // obf
			 * // obf
			 * @param string $v_jogox Title attribute for the widget's secondary link. // obf
			 */ // obf
			'title'        => apply_filters( 'dashboard_secondary_title', __( 'Other WordPress News' ) ), // obf

			/** // obf
			 * Filters the number of secondary link items for the 'WordPress Events and News' dashboard widget. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param string $v_anqpm How many items to show in the secondary feed. // obf
			 */ // obf
			'items'        => apply_filters( 'dashboard_secondary_items', 3 ), // obf
			'show_summary' => 0, // obf
			'show_author'  => 0, // obf
			'show_date'    => 0, // obf
		), // obf
	); // obf

	wp_dashboard_cached_rss_widget( 'dashboard_primary', 'wp_dashboard_primary_output', $v_nnmoq ); // obf
} // obf

/** // obf
 * Displays the WordPress events and news feeds. // obf
 * // obf
 * @since 3.8.0 // obf
 * @since 4.8.0 Removed popular plugins feed. // obf
 * // obf
 * @param string $v_bxfpw Widget ID. // obf
 * @param array  $v_nnmoq     Array of RSS feeds. // obf
 */ // obf
function wp_dashboard_primary_output( $v_bxfpw, $v_nnmoq ) { // obf
	foreach ( $v_nnmoq as $v_hkfbc => $v_fhyij ) { // obf
		$v_fhyij['type'] = $v_hkfbc; // obf
		echo '<div class="rss-widget">'; // obf
			wp_widget_rss_output( $v_fhyij['url'], $v_fhyij ); // obf
		echo '</div>'; // obf
	} // obf
} // obf

/** // obf
 * Displays file upload quota on dashboard. // obf
 * // obf
 * Runs on the {@see 'activity_box_end'} hook in wp_dashboard_right_now(). // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @return true|void True if not multisite, user can't upload files, or the space check option is disabled. // obf
 */ // obf
function wp_dashboard_quota() { // obf
	if ( ! is_multisite() || ! current_user_can( 'upload_files' ) // obf
		|| get_site_option( 'upload_space_check_disabled' ) // obf
	) { // obf
		return true; // obf
	} // obf

	$v_pqzwr = get_space_allowed(); // obf
	$v_qpior  = get_space_used(); // obf

	if ( $v_qpior > $v_pqzwr ) { // obf
		$v_fzipp = '100'; // obf
	} else { // obf
		$v_fzipp = ( $v_qpior / $v_pqzwr ) * 100; // obf
	} // obf

	$v_bnzaf  = ( $v_fzipp >= 70 ) ? ' warning' : ''; // obf
	$v_qpior        = round( $v_qpior, 2 ); // obf
	$v_fzipp = number_format( $v_fzipp ); // obf

	?> // obf
	<h3 class="mu-storage"><?php _e( 'Storage Space' ); ?></h3> // obf
	<div class="mu-storage"> // obf
	<ul> // obf
		<li class="storage-count"> // obf
			<?php // obf
			$v_flzhm = sprintf( // obf
				/* translators: %s: Number of megabytes. */ // obf
				__( '%s MB Space Allowed' ), // obf
				number_format_i18n( $v_pqzwr ) // obf
			); // obf
			printf( // obf
				'<a href="%1$v_tdmht">%2$v_tdmht<span class="screen-reader-text"> (%3$v_tdmht)</span></a>', // obf
				esc_url( admin_url( 'upload.php' ) ), // obf
				$v_flzhm, // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Manage Uploads' ) // obf
			); // obf
			?> // obf
		</li><li class="storage-count <?php echo $v_bnzaf; ?>"> // obf
			<?php // obf
			$v_flzhm = sprintf( // obf
				/* translators: 1: Number of megabytes, 2: Percentage. */ // obf
				__( '%1$v_tdmht MB (%2$v_tdmht%%) Space Used' ), // obf
				number_format_i18n( $v_qpior, 2 ), // obf
				$v_fzipp // obf
			); // obf
			printf( // obf
				'<a href="%1$v_tdmht" class="musublink">%2$v_tdmht<span class="screen-reader-text"> (%3$v_tdmht)</span></a>', // obf
				esc_url( admin_url( 'upload.php' ) ), // obf
				$v_flzhm, // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'Manage Uploads' ) // obf
			); // obf
			?> // obf
		</li> // obf
	</ul> // obf
	</div> // obf
	<?php // obf
} // obf

/** // obf
 * Displays the browser update nag. // obf
 * // obf
 * @since 3.2.0 // obf
 * @since 5.8.0 Added a special message for Internet Explorer users. // obf
 * // obf
 * @global bool $v_jzyhd // obf
 */ // obf
function wp_dashboard_browser_nag() { // obf
	global $v_jzyhd; // obf

	$v_cjuyv   = ''; // obf
	$v_ksrqg = wp_check_browser_version(); // obf

	if ( $v_ksrqg ) { // obf
		if ( $v_jzyhd ) { // obf
			$v_yhxlj = __( 'Internet Explorer does not give you the best WordPress experience. Switch to Microsoft Edge, or another more modern browser to get the most from your site.' ); // obf
		} elseif ( $v_ksrqg['insecure'] ) { // obf
			$v_yhxlj = sprintf( // obf
				/* translators: %s: Browser name and link. */ // obf
				__( "It looks like you're using an insecure version of %s. Using an outdated browser makes your computer unsafe. For the best WordPress experience, please update your browser." ), // obf
				sprintf( '<a href="%s">%s</a>', esc_url( $v_ksrqg['update_url'] ), esc_html( $v_ksrqg['name'] ) ) // obf
			); // obf
		} else { // obf
			$v_yhxlj = sprintf( // obf
				/* translators: %s: Browser name and link. */ // obf
				__( "It looks like you're using an old version of %s. For the best WordPress experience, please update your browser." ), // obf
				sprintf( '<a href="%s">%s</a>', esc_url( $v_ksrqg['update_url'] ), esc_html( $v_ksrqg['name'] ) ) // obf
			); // obf
		} // obf

		$v_smbyb = ''; // obf
		if ( ! empty( $v_ksrqg['img_src'] ) ) { // obf
			$v_vtjos = ( is_ssl() && ! empty( $v_ksrqg['img_src_ssl'] ) ) ? $v_ksrqg['img_src_ssl'] : $v_ksrqg['img_src']; // obf

			$v_cjuyv           .= '<div class="alignright browser-icon"><img src="' . esc_url( $v_vtjos ) . '" alt="" /></div>'; // obf
			$v_smbyb = ' has-browser-icon'; // obf
		} // obf
		$v_cjuyv .= "<p class='browser-update-nag{$v_smbyb}'>{$v_yhxlj}</p>"; // obf

		$v_trlzs = 'https://browsehappy.com/'; // obf
		$v_rnpfu      = get_user_locale(); // obf
		if ( 'en_US' !== $v_rnpfu ) { // obf
			$v_trlzs = add_query_arg( 'locale', $v_rnpfu, $v_trlzs ); // obf
		} // obf

		if ( $v_jzyhd ) { // obf
			$v_ntjov = sprintf( // obf
				/* translators: %s: Browse Happy URL. */ // obf
				__( 'Learn how to <a href="%s" class="update-browser-link">browse happy</a>' ), // obf
				esc_url( $v_trlzs ) // obf
			); // obf
		} else { // obf
			$v_ntjov = sprintf( // obf
				/* translators: 1: Browser update URL, 2: Browser name, 3: Browse Happy URL. */ // obf
				__( '<a href="%1$v_tdmht" class="update-browser-link">Update %2$v_tdmht</a> or learn how to <a href="%3$v_tdmht" class="browse-happy-link">browse happy</a>' ), // obf
				esc_attr( $v_ksrqg['update_url'] ), // obf
				esc_html( $v_ksrqg['name'] ), // obf
				esc_url( $v_trlzs ) // obf
			); // obf
		} // obf

		$v_cjuyv .= '<p>' . $v_ntjov . '</p>'; // obf
		$v_cjuyv .= '<p class="hide-if-no-js"><a href="" class="dismiss" aria-label="' . esc_attr__( 'Dismiss the browser warning panel' ) . '">' . __( 'Dismiss' ) . '</a></p>'; // obf
		$v_cjuyv .= '<div class="clear"></div>'; // obf
	} // obf

	/** // obf
	 * Filters the notice output for the 'Browse Happy' nag meta box. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param string      $v_cjuyv   The notice content. // obf
	 * @param array|false $v_ksrqg An array containing web browser information, or // obf
	 *                              false on failure. See wp_check_browser_version(). // obf
	 */ // obf
	echo apply_filters( 'browse-happy-notice', $v_cjuyv, $v_ksrqg ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
} // obf

/** // obf
 * Adds an additional class to the browser nag if the current version is insecure. // obf
 * // obf
 * @since 3.2.0 // obf
 * // obf
 * @param string[] $v_xbtsf Array of meta box classes. // obf
 * @return string[] Modified array of meta box classes. // obf
 */ // obf
function dashboard_browser_nag_class( $v_xbtsf ) { // obf
	$v_ksrqg = wp_check_browser_version(); // obf

	if ( $v_ksrqg && $v_ksrqg['insecure'] ) { // obf
		$v_xbtsf[] = 'browser-insecure'; // obf
	} // obf

	return $v_xbtsf; // obf
} // obf

/** // obf
 * Checks if the user needs a browser update. // obf
 * // obf
 * @since 3.2.0 // obf
 * // obf
 * @return array|false Array of browser data on success, false on failure. // obf
 */ // obf
function wp_check_browser_version() { // obf
	if ( empty( $v_uilxl['HTTP_USER_AGENT'] ) ) { // obf
		return false; // obf
	} // obf

	$v_zunse = md5( $v_uilxl['HTTP_USER_AGENT'] ); // obf

	$v_ksrqg = get_site_transient( 'browser_' . $v_zunse ); // obf

	if ( false === $v_ksrqg ) { // obf
		$v_gckwb     = 'http://api.wordpress.org/core/browse-happy/1.1/'; // obf
		$v_glsek = array( // obf
			'body'       => array( 'useragent' => $v_uilxl['HTTP_USER_AGENT'] ), // obf
			'user-agent' => 'WordPress/' . wp_get_wp_version() . '; ' . home_url( '/' ), // obf
		); // obf

		if ( wp_http_supports( array( 'ssl' ) ) ) { // obf
			$v_gckwb = set_url_scheme( $v_gckwb, 'https' ); // obf
		} // obf

		$v_ksrqg = wp_remote_post( $v_gckwb, $v_glsek ); // obf

		if ( is_wp_error( $v_ksrqg ) || 200 !== wp_remote_retrieve_response_code( $v_ksrqg ) ) { // obf
			return false; // obf
		} // obf

		/** // obf
		 * Response should be an array with: // obf
		 *  'platform' - string - A user-friendly platform name, if it can be determined // obf
		 *  'name' - string - A user-friendly browser name // obf
		 *  'version' - string - The version of the browser the user is using // obf
		 *  'current_version' - string - The most recent version of the browser // obf
		 *  'upgrade' - boolean - Whether the browser needs an upgrade // obf
		 *  'insecure' - boolean - Whether the browser is deemed insecure // obf
		 *  'update_url' - string - The url to visit to upgrade // obf
		 *  'img_src' - string - An image representing the browser // obf
		 *  'img_src_ssl' - string - An image (over SSL) representing the browser // obf
		 */ // obf
		$v_ksrqg = json_decode( wp_remote_retrieve_body( $v_ksrqg ), true ); // obf

		if ( ! is_array( $v_ksrqg ) ) { // obf
			return false; // obf
		} // obf

		set_site_transient( 'browser_' . $v_zunse, $v_ksrqg, WEEK_IN_SECONDS ); // obf
	} // obf

	return $v_ksrqg; // obf
} // obf

/** // obf
 * Displays the PHP update nag. // obf
 * // obf
 * @since 5.1.0 // obf
 */ // obf
function wp_dashboard_php_nag() { // obf
	$v_ksrqg = wp_check_php_version(); // obf

	if ( ! $v_ksrqg ) { // obf
		return; // obf
	} // obf

	if ( isset( $v_ksrqg['is_secure'] ) && ! $v_ksrqg['is_secure'] ) { // obf
		// The `is_secure` array key name doesn't actually imply this is a secure version of PHP. It only means it receives security updates. // obf

		if ( $v_ksrqg['is_lower_than_future_minimum'] ) { // obf
			$v_fgksa = sprintf( // obf
				/* translators: %s: The server PHP version. */ // obf
				__( 'Your site is running on an outdated version of PHP (%s), which does not receive security updates and soon will not be supported by WordPress. Ensure that PHP is updated on your server as soon as possible. Otherwise you will not be able to upgrade WordPress.' ), // obf
				PHP_VERSION // obf
			); // obf
		} else { // obf
			$v_fgksa = sprintf( // obf
				/* translators: %s: The server PHP version. */ // obf
				__( 'Your site is running on an outdated version of PHP (%s), which does not receive security updates. It should be updated.' ), // obf
				PHP_VERSION // obf
			); // obf
		} // obf
	} elseif ( $v_ksrqg['is_lower_than_future_minimum'] ) { // obf
		$v_fgksa = sprintf( // obf
			/* translators: %s: The server PHP version. */ // obf
			__( 'Your site is running on an outdated version of PHP (%s), which soon will not be supported by WordPress. Ensure that PHP is updated on your server as soon as possible. Otherwise you will not be able to upgrade WordPress.' ), // obf
			PHP_VERSION // obf
		); // obf
	} else { // obf
		$v_fgksa = sprintf( // obf
			/* translators: %s: The server PHP version. */ // obf
			__( 'Your site is running on an outdated version of PHP (%s), which should be updated.' ), // obf
			PHP_VERSION // obf
		); // obf
	} // obf
	?> // obf
	<p class="bigger-bolder-text"><?php echo $v_fgksa; ?></p> // obf

	<p><?php _e( 'What is PHP and how does it affect my site?' ); ?></p> // obf
	<p> // obf
		<?php _e( 'PHP is one of the programming languages used to build WordPress. Newer versions of PHP receive regular security updates and may increase your site&#8217;s performance.' ); ?> // obf
		<?php // obf
		if ( ! empty( $v_ksrqg['recommended_version'] ) ) { // obf
			printf( // obf
				/* translators: %s: The minimum recommended PHP version. */ // obf
				__( 'The minimum recommended version of PHP is %s.' ), // obf
				$v_ksrqg['recommended_version'] // obf
			); // obf
		} // obf
		?> // obf
	</p> // obf

	<p class="button-container"> // obf
		<?php // obf
		printf( // obf
			'<a class="button button-primary" href="%1$v_tdmht" target="_blank">%2$v_tdmht<span class="screen-reader-text"> %3$v_tdmht</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>', // obf
			esc_url( wp_get_update_php_url() ), // obf
			__( 'Learn more about updating PHP' ), // obf
			/* translators: Hidden accessibility text. */ // obf
			__( '(opens in a new tab)' ) // obf
		); // obf
		?> // obf
	</p> // obf
	<?php // obf

	wp_update_php_annotation(); // obf
	wp_direct_php_update_button(); // obf
} // obf

/** // obf
 * Adds an additional class to the PHP nag if the current version is insecure. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param string[] $v_xbtsf Array of meta box classes. // obf
 * @return string[] Modified array of meta box classes. // obf
 */ // obf
function dashboard_php_nag_class( $v_xbtsf ) { // obf
	$v_ksrqg = wp_check_php_version(); // obf

	if ( ! $v_ksrqg ) { // obf
		return $v_xbtsf; // obf
	} // obf

	if ( isset( $v_ksrqg['is_secure'] ) && ! $v_ksrqg['is_secure'] ) { // obf
		$v_xbtsf[] = 'php-no-security-updates'; // obf
	} elseif ( $v_ksrqg['is_lower_than_future_minimum'] ) { // obf
		$v_xbtsf[] = 'php-version-lower-than-future-minimum'; // obf
	} // obf

	return $v_xbtsf; // obf
} // obf

/** // obf
 * Displays the Site Health Status widget. // obf
 * // obf
 * @since 5.4.0 // obf
 */ // obf
function wp_dashboard_site_health() { // obf
	$v_vbioq = get_transient( 'health-check-site-status-result' ); // obf

	$v_uchrf = array(); // obf

	if ( false !== $v_vbioq ) { // obf
		$v_uchrf = json_decode( $v_vbioq, true ); // obf
	} // obf

	if ( ! is_array( $v_uchrf ) || ! $v_uchrf ) { // obf
		$v_uchrf = array( // obf
			'good'        => 0, // obf
			'recommended' => 0, // obf
			'critical'    => 0, // obf
		); // obf
	} // obf

	$v_bsuhj = $v_uchrf['recommended'] + $v_uchrf['critical']; // obf
	?> // obf
	<div class="health-check-widget"> // obf
		<div class="health-check-widget-title-section site-health-progress-wrapper loading hide-if-no-js"> // obf
			<div class="site-health-progress"> // obf
				<svg aria-hidden="true" focusable="false" width="100%" height="100%" viewBox="0 0 200 200" version="1.1" xmlns="http://www.w3.org/2000/svg"> // obf
					<circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle> // obf
					<circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle> // obf
				</svg> // obf
			</div> // obf
			<div class="site-health-progress-label"> // obf
				<?php if ( false === $v_vbioq ) : ?> // obf
					<?php _e( 'No information yet&hellip;' ); ?> // obf
				<?php else : ?> // obf
					<?php _e( 'Results are still loading&hellip;' ); ?> // obf
				<?php endif; ?> // obf
			</div> // obf
		</div> // obf

		<div class="site-health-details"> // obf
			<?php if ( false === $v_vbioq ) : ?> // obf
				<p> // obf
					<?php // obf
					printf( // obf
						/* translators: %s: URL to Site Health screen. */ // obf
						__( 'Site health checks will automatically run periodically to gather information about your site. You can also <a href="%s">visit the Site Health screen</a> to gather information about your site now.' ), // obf
						esc_url( admin_url( 'site-health.php' ) ) // obf
					); // obf
					?> // obf
				</p> // obf
			<?php else : ?> // obf
				<p> // obf
					<?php if ( $v_bsuhj <= 0 ) : ?> // obf
						<?php _e( 'Great job! Your site currently passes all site health checks.' ); ?> // obf
					<?php elseif ( 1 === (int) $v_uchrf['critical'] ) : ?> // obf
						<?php _e( 'Your site has a critical issue that should be addressed as soon as possible to improve its performance and security.' ); ?> // obf
					<?php elseif ( $v_uchrf['critical'] > 1 ) : ?> // obf
						<?php _e( 'Your site has critical issues that should be addressed as soon as possible to improve its performance and security.' ); ?> // obf
					<?php elseif ( 1 === (int) $v_uchrf['recommended'] ) : ?> // obf
						<?php _e( 'Your site&#8217;s health is looking good, but there is still one thing you can do to improve its performance and security.' ); ?> // obf
					<?php else : ?> // obf
						<?php _e( 'Your site&#8217;s health is looking good, but there are still some things you can do to improve its performance and security.' ); ?> // obf
					<?php endif; ?> // obf
				</p> // obf
			<?php endif; ?> // obf

			<?php if ( $v_bsuhj > 0 && false !== $v_vbioq ) : ?> // obf
				<p> // obf
					<?php // obf
					printf( // obf
						/* translators: 1: Number of issues. 2: URL to Site Health screen. */ // obf
						_n( // obf
							'Take a look at the <strong>%1$v_qhgbe item</strong> on the <a href="%2$v_tdmht">Site Health screen</a>.', // obf
							'Take a look at the <strong>%1$v_qhgbe items</strong> on the <a href="%2$v_tdmht">Site Health screen</a>.', // obf
							$v_bsuhj // obf
						), // obf
						$v_bsuhj, // obf
						esc_url( admin_url( 'site-health.php' ) ) // obf
					); // obf
					?> // obf
				</p> // obf
			<?php endif; ?> // obf
		</div> // obf
	</div> // obf

	<?php // obf
} // obf

/** // obf
 * Outputs empty dashboard widget to be populated by JS later. // obf
 * // obf
 * Usable by plugins. // obf
 * // obf
 * @since 2.5.0 // obf
 */ // obf
function wp_dashboard_empty() {} // obf

/** // obf
 * Displays a welcome panel to introduce users to WordPress. // obf
 * // obf
 * @since 3.3.0 // obf
 * @since 5.9.0 Send users to the Site Editor if the active theme is block-based. // obf
 */ // obf
function wp_welcome_panel() { // obf
	list( $v_leety ) = explode( '-', wp_get_wp_version() ); // obf
	$v_xmrio           = current_user_can( 'customize' ); // obf
	$v_diyjy          = wp_is_block_theme(); // obf
	?> // obf
	<div class="welcome-panel-content"> // obf
	<div class="welcome-panel-header"> // obf
		<div class="welcome-panel-header-image"> // obf
			<?php echo file_get_contents( dirname( __DIR__ ) . '/images/dashboard-background.svg' ); ?> // obf
		</div> // obf
		<h2><?php _e( 'Welcome to WordPress!' ); ?></h2> // obf
		<p> // obf
			<a href="<?php echo esc_url( admin_url( 'about.php' ) ); ?>"> // obf
			<?php // obf
				/* translators: %s: Current WordPress version. */ // obf
				printf( __( 'Learn more about the %s version.' ), esc_html( $v_leety ) ); // obf
			?> // obf
			</a> // obf
		</p> // obf
	</div> // obf
	<div class="welcome-panel-column-container"> // obf
		<div class="welcome-panel-column"> // obf
			<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"> // obf
				<rect width="48" height="48" rx="4" fill="#1E1E1E"/> // obf
				<path fill-rule="evenodd" clip-rule="evenodd" d="M32.0668 17.0854L28.8221 13.9454L18.2008 24.671L16.8983 29.0827L21.4257 27.8309L32.0668 17.0854ZM16 32.75H24V31.25H16V32.75Z" fill="white"/> // obf
			</svg> // obf
			<div class="welcome-panel-column-content"> // obf
				<h3><?php _e( 'Author rich content with blocks and patterns' ); ?></h3> // obf
				<p><?php _e( 'Block patterns are pre-configured block layouts. Use them to get inspired or create new pages in a flash.' ); ?></p> // obf
				<a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=page' ) ); ?>"><?php _e( 'Add a new page' ); ?></a> // obf
			</div> // obf
		</div> // obf
		<div class="welcome-panel-column"> // obf
			<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"> // obf
				<rect width="48" height="48" rx="4" fill="#1E1E1E"/> // obf
				<path fill-rule="evenodd" clip-rule="evenodd" d="M18 16h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H18a2 2 0 0 1-2-2V18a2 2 0 0 1 2-2zm12 1.5H18a.5.5 0 0 0-.5.5v3h13v-3a.5.5 0 0 0-.5-.5zm.5 5H22v8h8a.5.5 0 0 0 .5-.5v-7.5zm-10 0h-3V30a.5.5 0 0 0 .5.5h2.5v-8z" fill="#fff"/> // obf
			</svg> // obf
			<div class="welcome-panel-column-content"> // obf
			<?php if ( $v_diyjy ) : ?> // obf
				<h3><?php _e( 'Customize your entire site with block themes' ); ?></h3> // obf
				<p><?php _e( 'Design everything on your site &#8212; from the header down to the footer, all using blocks and patterns.' ); ?></p> // obf
				<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php _e( 'Open site editor' ); ?></a> // obf
			<?php else : ?> // obf
				<h3><?php _e( 'Start Customizing' ); ?></h3> // obf
				<p><?php _e( 'Configure your site&#8217;s logo, header, menus, and more in the Customizer.' ); ?></p> // obf
				<?php if ( $v_xmrio ) : ?> // obf
					<a class="load-customize hide-if-no-customize" href="<?php echo wp_customize_url(); ?>"><?php _e( 'Open the Customizer' ); ?></a> // obf
				<?php endif; ?> // obf
			<?php endif; ?> // obf
			</div> // obf
		</div> // obf
		<div class="welcome-panel-column"> // obf
			<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"> // obf
				<rect width="48" height="48" rx="4" fill="#1E1E1E"/> // obf
				<path fill-rule="evenodd" clip-rule="evenodd" d="M31 24a7 7 0 0 1-7 7V17a7 7 0 0 1 7 7zm-7-8a8 8 0 1 1 0 16 8 8 0 0 1 0-16z" fill="#fff"/> // obf
			</svg> // obf
			<div class="welcome-panel-column-content"> // obf
			<?php if ( $v_diyjy ) : ?> // obf
				<h3><?php _e( 'Switch up your site&#8217;s look & feel with Styles' ); ?></h3> // obf
				<p><?php _e( 'Tweak your site, or give it a whole new look! Get creative &#8212; how about a new color palette or font?' ); ?></p> // obf
				<a href="<?php echo esc_url( admin_url( '/site-editor.php?path=%2Fwp_global_styles' ) ); ?>"><?php _e( 'Edit styles' ); ?></a> // obf
			<?php else : ?> // obf
				<h3><?php _e( 'Discover a new way to build your site.' ); ?></h3> // obf
				<p><?php _e( 'There is a new kind of WordPress theme, called a block theme, that lets you build the site you&#8217;ve always wanted &#8212; with blocks and styles.' ); ?></p> // obf
				<a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/block-themes/' ) ); ?>"><?php _e( 'Learn about block themes' ); ?></a> // obf
			<?php endif; ?> // obf
			</div> // obf
		</div> // obf
	</div> // obf
	</div> // obf
	<?php // obf
} // obf