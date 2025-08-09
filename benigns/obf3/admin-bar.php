
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Toolbar API: Top-level Toolbar functionality // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Toolbar // obf
 * @since 3.1.0 // obf
 */ // obf

/** // obf
 * Instantiates the admin bar object and set it up as a global for access elsewhere. // obf
 * // obf
 * UNHOOKING THIS FUNCTION WILL NOT PROPERLY REMOVE THE ADMIN BAR. // obf
 * For that, use show_admin_bar(false) or the {@see 'show_admin_bar'} filter. // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 * // obf
 * @global WP_Admin_Bar $v_ndvnd // obf
 * // obf
 * @return bool Whether the admin bar was successfully initialized. // obf
 */ // obf
function _wp_admin_bar_init() { // obf
	global $v_ndvnd; // obf

	if ( ! is_admin_bar_showing() ) { // obf
		return false; // obf
	} // obf

	/* Load the admin bar class code ready for instantiation */ // obf
	require_once ABSPATH . WPINC . '/class-wp-admin-bar.php'; // obf

	/* Instantiate the admin bar */ // obf

	/** // obf
	 * Filters the admin bar class to instantiate. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_immjs Admin bar class to use. Default 'WP_Admin_Bar'. // obf
	 */ // obf
	$v_ikbbl = apply_filters( 'wp_admin_bar_class', 'WP_Admin_Bar' ); // obf
	if ( class_exists( $v_ikbbl ) ) { // obf
		$v_ndvnd = new $v_ikbbl(); // obf
	} else { // obf
		return false; // obf
	} // obf

	$v_ndvnd->initialize(); // obf
	$v_ndvnd->add_menus(); // obf

	return true; // obf
} // obf

/** // obf
 * Renders the admin bar to the page based on the $v_ndvnd->menu member var. // obf
 * // obf
 * This is called very early on the {@see 'wp_body_open'} action so that it will render // obf
 * before anything else being added to the page body. // obf
 * // obf
 * For backward compatibility with themes not using the 'wp_body_open' action, // obf
 * the function is also called late on {@see 'wp_footer'}. // obf
 * // obf
 * It includes the {@see 'admin_bar_menu'} action which should be used to hook in and // obf
 * add new menus to the admin bar. This also gives you access to the `$v_xtfxl` global, // obf
 * among others. // obf
 * // obf
 * @since 3.1.0 // obf
 * @since 5.4.0 Called on 'wp_body_open' action first, with 'wp_footer' as a fallback. // obf
 * // obf
 * @global WP_Admin_Bar $v_ndvnd // obf
 */ // obf
function wp_admin_bar_render() { // obf
	global $v_ndvnd; // obf
	static $v_czxor = false; // obf

	if ( $v_czxor ) { // obf
		return; // obf
	} // obf

	if ( ! is_admin_bar_showing() || ! is_object( $v_ndvnd ) ) { // obf
		return; // obf
	} // obf

	/** // obf
	 * Loads all necessary admin bar items. // obf
	 * // obf
	 * This hook can add, remove, or manipulate admin bar items. The priority // obf
	 * determines the placement for new items, and changes to existing items // obf
	 * would require a high priority. To remove or manipulate existing nodes // obf
	 * without a specific priority, use `wp_before_admin_bar_render`. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance, passed by reference. // obf
	 */ // obf
	do_action_ref_array( 'admin_bar_menu', array( &$v_ndvnd ) ); // obf

	/** // obf
	 * Fires before the admin bar is rendered. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	do_action( 'wp_before_admin_bar_render' ); // obf

	$v_ndvnd->render(); // obf

	/** // obf
	 * Fires after the admin bar is rendered. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	do_action( 'wp_after_admin_bar_render' ); // obf

	$v_czxor = true; // obf
} // obf

/** // obf
 * Adds the WordPress logo menu. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_wp_menu( $v_ndvnd ) { // obf
	if ( current_user_can( 'read' ) ) { // obf
		$v_sdbrm      = self_admin_url( 'about.php' ); // obf
		$v_jwatq = self_admin_url( 'contribute.php' ); // obf
	} elseif ( is_multisite() ) { // obf
		$v_sdbrm      = get_dashboard_url( get_current_user_id(), 'about.php' ); // obf
		$v_jwatq = get_dashboard_url( get_current_user_id(), 'contribute.php' ); // obf
	} else { // obf
		$v_sdbrm      = false; // obf
		$v_jwatq = false; // obf
	} // obf

	$v_lpdba = array( // obf
		'id'    => 'wp-logo', // obf
		'title' => '<span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">' . // obf
				/* translators: Hidden accessibility text. */ // obf
				__( 'About WordPress' ) . // obf
			'</span>', // obf
		'href'  => $v_sdbrm, // obf
		'meta'  => array( // obf
			'menu_title' => __( 'About WordPress' ), // obf
		), // obf
	); // obf

	// Set tabindex="0" to make sub menus accessible when no URL is available. // obf
	if ( ! $v_sdbrm ) { // obf
		$v_lpdba['meta'] = array( // obf
			'tabindex' => 0, // obf
		); // obf
	} // obf

	$v_ndvnd->add_node( $v_lpdba ); // obf

	if ( $v_sdbrm ) { // obf
		// Add "About WordPress" link. // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'wp-logo', // obf
				'id'     => 'about', // obf
				'title'  => __( 'About WordPress' ), // obf
				'href'   => $v_sdbrm, // obf
			) // obf
		); // obf
	} // obf

	if ( $v_jwatq ) { // obf
		// Add contribute link. // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'wp-logo', // obf
				'id'     => 'contribute', // obf
				'title'  => __( 'Get Involved' ), // obf
				'href'   => $v_jwatq, // obf
			) // obf
		); // obf
	} // obf

	// Add WordPress.org link. // obf
	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'wp-logo-external', // obf
			'id'     => 'wporg', // obf
			'title'  => __( 'WordPress.org' ), // obf
			'href'   => __( 'https://wordpress.org/' ), // obf
		) // obf
	); // obf

	// Add documentation link. // obf
	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'wp-logo-external', // obf
			'id'     => 'documentation', // obf
			'title'  => __( 'Documentation' ), // obf
			'href'   => __( 'https://wordpress.org/documentation/' ), // obf
		) // obf
	); // obf

	// Add learn link. // obf
	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'wp-logo-external', // obf
			'id'     => 'learn', // obf
			'title'  => __( 'Learn WordPress' ), // obf
			'href'   => __( 'https://learn.wordpress.org/' ), // obf
		) // obf
	); // obf

	// Add forums link. // obf
	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'wp-logo-external', // obf
			'id'     => 'support-forums', // obf
			'title'  => __( 'Support' ), // obf
			'href'   => __( 'https://wordpress.org/support/forums/' ), // obf
		) // obf
	); // obf

	// Add feedback link. // obf
	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'wp-logo-external', // obf
			'id'     => 'feedback', // obf
			'title'  => __( 'Feedback' ), // obf
			'href'   => __( 'https://wordpress.org/support/forum/requests-and-feedback' ), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds the sidebar toggle button. // obf
 * // obf
 * @since 3.8.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_sidebar_toggle( $v_ndvnd ) { // obf
	if ( is_admin() ) { // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'id'    => 'menu-toggle', // obf
				'title' => '<span class="ab-icon" aria-hidden="true"></span><span class="screen-reader-text">' . // obf
						/* translators: Hidden accessibility text. */ // obf
						__( 'Menu' ) . // obf
					'</span>', // obf
				'href'  => '#', // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Adds the "My Account" item. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_my_account_item( $v_ndvnd ) { // obf
	$v_psrxm      = get_current_user_id(); // obf
	$v_tumzo = wp_get_current_user(); // obf

	if ( ! $v_psrxm ) { // obf
		return; // obf
	} // obf

	if ( current_user_can( 'read' ) ) { // obf
		$v_gnvfg = get_edit_profile_url( $v_psrxm ); // obf
	} elseif ( is_multisite() ) { // obf
		$v_gnvfg = get_dashboard_url( $v_psrxm, 'profile.php' ); // obf
	} else { // obf
		$v_gnvfg = false; // obf
	} // obf

	$v_bdsor = get_avatar( $v_psrxm, 26 ); // obf
	/* translators: %s: Current user's display name. */ // obf
	$v_rrqcv = sprintf( __( 'Howdy, %s' ), '<span class="display-name">' . $v_tumzo->display_name . '</span>' ); // obf
	$v_eoqsk = empty( $v_bdsor ) ? '' : 'with-avatar'; // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'     => 'my-account', // obf
			'parent' => 'top-secondary', // obf
			'title'  => $v_rrqcv . $v_bdsor, // obf
			'href'   => $v_gnvfg, // obf
			'meta'   => array( // obf
				'class'      => $v_eoqsk, // obf
				/* translators: %s: Current user's display name. */ // obf
				'menu_title' => sprintf( __( 'Howdy, %s' ), $v_tumzo->display_name ), // obf
				'tabindex'   => ( false !== $v_gnvfg ) ? '' : 0, // obf
			), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds the "My Account" submenu items. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_my_account_menu( $v_ndvnd ) { // obf
	$v_psrxm      = get_current_user_id(); // obf
	$v_tumzo = wp_get_current_user(); // obf

	if ( ! $v_psrxm ) { // obf
		return; // obf
	} // obf

	if ( current_user_can( 'read' ) ) { // obf
		$v_gnvfg = get_edit_profile_url( $v_psrxm ); // obf
	} elseif ( is_multisite() ) { // obf
		$v_gnvfg = get_dashboard_url( $v_psrxm, 'profile.php' ); // obf
	} else { // obf
		$v_gnvfg = false; // obf
	} // obf

	$v_ndvnd->add_group( // obf
		array( // obf
			'parent' => 'my-account', // obf
			'id'     => 'user-actions', // obf
		) // obf
	); // obf

	$v_uxexg  = get_avatar( $v_psrxm, 64 ); // obf
	$v_uxexg .= "<span class='display-name'>{$v_tumzo->display_name}</span>"; // obf

	if ( $v_tumzo->display_name !== $v_tumzo->user_login ) { // obf
		$v_uxexg .= "<span class='username'>{$v_tumzo->user_login}</span>"; // obf
	} // obf

	if ( false !== $v_gnvfg ) { // obf
		$v_uxexg .= "<span class='display-name edit-profile'>" . __( 'Edit Profile' ) . '</span>'; // obf
	} // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'user-actions', // obf
			'id'     => 'user-info', // obf
			'title'  => $v_uxexg, // obf
			'href'   => $v_gnvfg, // obf
		) // obf
	); // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'user-actions', // obf
			'id'     => 'logout', // obf
			'title'  => __( 'Log Out' ), // obf
			'href'   => wp_logout_url(), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds the "Site Name" menu. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_site_menu( $v_ndvnd ) { // obf
	// Don't show for logged out users. // obf
	if ( ! is_user_logged_in() ) { // obf
		return; // obf
	} // obf

	// Show only when the user is a member of this site, or they're a super admin. // obf
	if ( ! is_user_member_of_blog() && ! current_user_can( 'manage_network' ) ) { // obf
		return; // obf
	} // obf

	$v_rvohm = get_bloginfo( 'name' ); // obf

	if ( ! $v_rvohm ) { // obf
		$v_rvohm = __fn_37772( '#^(https?://)?(www.)?#', '', get_home_url() ); // obf
	} // obf

	if ( is_network_admin() ) { // obf
		/* translators: %s: Site title. */ // obf
		$v_rvohm = sprintf( __( 'Network Admin: %s' ), esc_html( get_network()->site_name ) ); // obf
	} elseif ( is_user_admin() ) { // obf
		/* translators: %s: Site title. */ // obf
		$v_rvohm = sprintf( __( 'User Dashboard: %s' ), esc_html( get_network()->site_name ) ); // obf
	} // obf

	$v_dscfq = wp_html_excerpt( $v_rvohm, 40, '&hellip;' ); // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => 'site-name', // obf
			'title' => $v_dscfq, // obf
			'href'  => ( is_admin() || ! current_user_can( 'read' ) ) ? home_url( '/' ) : admin_url(), // obf
			'meta'  => array( // obf
				'menu_title' => $v_dscfq, // obf
			), // obf
		) // obf
	); // obf

	// Create submenu items. // obf

	if ( is_admin() ) { // obf
		// Add an option to visit the site. // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'site-name', // obf
				'id'     => 'view-site', // obf
				'title'  => __( 'Visit Site' ), // obf
				'href'   => home_url( '/' ), // obf
			) // obf
		); // obf

		if ( is_blog_admin() && is_multisite() && current_user_can( 'manage_sites' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'site-name', // obf
					'id'     => 'edit-site', // obf
					'title'  => __( 'Manage Site' ), // obf
					'href'   => network_admin_url( 'site-info.php?id=' . get_current_blog_id() ), // obf
				) // obf
			); // obf
		} // obf
	} elseif ( current_user_can( 'read' ) ) { // obf
		// We're on the front end, link to the Dashboard. // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'site-name', // obf
				'id'     => 'dashboard', // obf
				'title'  => __( 'Dashboard' ), // obf
				'href'   => admin_url(), // obf
			) // obf
		); // obf

		// Add the appearance submenu items. // obf
		wp_admin_bar_appearance_menu( $v_ndvnd ); // obf

		// Add a Plugins link. // obf
		if ( current_user_can( 'activate_plugins' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'site-name', // obf
					'id'     => 'plugins', // obf
					'title'  => __( 'Plugins' ), // obf
					'href'   => admin_url( 'plugins.php' ), // obf
				) // obf
			); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Adds the "Edit Site" link to the Toolbar. // obf
 * // obf
 * @since 5.9.0 // obf
 * @since 6.3.0 Added `$v_pipqd` global for editing of current template directly from the admin bar. // obf
 * @since 6.6.0 Added the `canvas` query arg to the Site Editor link. // obf
 * // obf
 * @global string $v_pipqd // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_edit_site_menu( $v_ndvnd ) { // obf
	global $v_pipqd; // obf

	// Don't show if a block theme is not activated. // obf
	if ( ! wp_is_block_theme() ) { // obf
		return; // obf
	} // obf

	// Don't show for users who can't edit theme options or when in the admin. // obf
	if ( ! current_user_can( 'edit_theme_options' ) || is_admin() ) { // obf
		return; // obf
	} // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => 'site-editor', // obf
			'title' => __( 'Edit Site' ), // obf
			'href'  => add_query_arg( // obf
				array( // obf
					'postType' => 'wp_template', // obf
					'postId'   => $v_pipqd, // obf
					'canvas'   => 'edit', // obf
				), // obf
				admin_url( 'site-editor.php' ) // obf
			), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds the "Customize" link to the Toolbar. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @global WP_Customize_Manager $v_sjflb // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_customize_menu( $v_ndvnd ) { // obf
	global $v_sjflb; // obf

	// Don't show if a block theme is activated and no plugins use the customizer. // obf
	if ( wp_is_block_theme() && ! has_action( 'customize_register' ) ) { // obf
		return; // obf
	} // obf

	// Don't show for users who can't access the customizer or when in the admin. // obf
	if ( ! current_user_can( 'customize' ) || is_admin() ) { // obf
		return; // obf
	} // obf

	// Don't show if the user cannot edit a given customize_changeset post currently being previewed. // obf
	if ( is_customize_preview() && $v_sjflb->changeset_post_id() // obf
		&& ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->edit_post, $v_sjflb->changeset_post_id() ) // obf
	) { // obf
		return; // obf
	} // obf

	$v_hchgv = ( is_ssl() ? 'https://' : 'http://' ) . $v_tazub['HTTP_HOST'] . $v_tazub['REQUEST_URI']; // obf
	if ( is_customize_preview() && $v_sjflb->changeset_uuid() ) { // obf
		$v_hchgv = remove_query_arg( 'customize_changeset_uuid', $v_hchgv ); // obf
	} // obf

	$v_thajf = add_query_arg( 'url', urlencode( $v_hchgv ), wp_customize_url() ); // obf
	if ( is_customize_preview() ) { // obf
		$v_thajf = add_query_arg( array( 'changeset_uuid' => $v_sjflb->changeset_uuid() ), $v_thajf ); // obf
	} // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => 'customize', // obf
			'title' => __( 'Customize' ), // obf
			'href'  => $v_thajf, // obf
			'meta'  => array( // obf
				'class' => 'hide-if-no-customize', // obf
			), // obf
		) // obf
	); // obf
	add_action( 'wp_before_admin_bar_render', 'wp_customize_support_script' ); // obf
} // obf

/** // obf
 * Adds the "My Sites/[Site Name]" menu and all submenus. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_my_sites_menu( $v_ndvnd ) { // obf
	// Don't show for logged out users or single site mode. // obf
	if ( ! is_user_logged_in() || ! is_multisite() ) { // obf
		return; // obf
	} // obf

	// Show only when the user has at least one site, or they're a super admin. // obf
	if ( count( $v_ndvnd->user->blogs ) < 1 && ! current_user_can( 'manage_network' ) ) { // obf
		return; // obf
	} // obf

	if ( $v_ndvnd->user->active_blog ) { // obf
		$v_vjvtq = get_admin_url( $v_ndvnd->user->active_blog->blog_id, 'my-sites.php' ); // obf
	} else { // obf
		$v_vjvtq = admin_url( 'my-sites.php' ); // obf
	} // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => 'my-sites', // obf
			'title' => __( 'My Sites' ), // obf
			'href'  => $v_vjvtq, // obf
		) // obf
	); // obf

	if ( current_user_can( 'manage_network' ) ) { // obf
		$v_ndvnd->add_group( // obf
			array( // obf
				'parent' => 'my-sites', // obf
				'id'     => 'my-sites-super-admin', // obf
			) // obf
		); // obf

		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'my-sites-super-admin', // obf
				'id'     => 'network-admin', // obf
				'title'  => __( 'Network Admin' ), // obf
				'href'   => network_admin_url(), // obf
			) // obf
		); // obf

		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'network-admin', // obf
				'id'     => 'network-admin-d', // obf
				'title'  => __( 'Dashboard' ), // obf
				'href'   => network_admin_url(), // obf
			) // obf
		); // obf

		if ( current_user_can( 'manage_sites' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'network-admin', // obf
					'id'     => 'network-admin-s', // obf
					'title'  => __( 'Sites' ), // obf
					'href'   => network_admin_url( 'sites.php' ), // obf
				) // obf
			); // obf
		} // obf

		if ( current_user_can( 'manage_network_users' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'network-admin', // obf
					'id'     => 'network-admin-u', // obf
					'title'  => __( 'Users' ), // obf
					'href'   => network_admin_url( 'users.php' ), // obf
				) // obf
			); // obf
		} // obf

		if ( current_user_can( 'manage_network_themes' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'network-admin', // obf
					'id'     => 'network-admin-t', // obf
					'title'  => __( 'Themes' ), // obf
					'href'   => network_admin_url( 'themes.php' ), // obf
				) // obf
			); // obf
		} // obf

		if ( current_user_can( 'manage_network_plugins' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'network-admin', // obf
					'id'     => 'network-admin-p', // obf
					'title'  => __( 'Plugins' ), // obf
					'href'   => network_admin_url( 'plugins.php' ), // obf
				) // obf
			); // obf
		} // obf

		if ( current_user_can( 'manage_network_options' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'network-admin', // obf
					'id'     => 'network-admin-o', // obf
					'title'  => __( 'Settings' ), // obf
					'href'   => network_admin_url( 'settings.php' ), // obf
				) // obf
			); // obf
		} // obf
	} // obf

	// Add site links. // obf
	$v_ndvnd->add_group( // obf
		array( // obf
			'parent' => 'my-sites', // obf
			'id'     => 'my-sites-list', // obf
			'meta'   => array( // obf
				'class' => current_user_can( 'manage_network' ) ? 'ab-sub-secondary' : '', // obf
			), // obf
		) // obf
	); // obf

	/** // obf
	 * Filters whether to show the site icons in toolbar. // obf
	 * // obf
	 * Returning false to this hook is the recommended way to hide site icons in the toolbar. // obf
	 * A truthy return may have negative performance impact on large multisites. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param bool $v_jfymv Whether site icons should be shown in the toolbar. Default true. // obf
	 */ // obf
	$v_jfymv = apply_filters( 'wp_admin_bar_show_site_icons', true ); // obf

	foreach ( (array) $v_ndvnd->user->blogs as $v_fswcd ) { // obf
		switch_to_blog( $v_fswcd->userblog_id ); // obf

		if ( true === $v_jfymv && has_site_icon() ) { // obf
			$v_hinnf = sprintf( // obf
				'<img class="blavatar" src="%s" srcset="%s 2x" alt="" width="16" height="16"%s />', // obf
				esc_url( get_site_icon_url( 16 ) ), // obf
				esc_url( get_site_icon_url( 32 ) ), // obf
				( wp_lazy_loading_enabled( 'img', 'site_icon_in_toolbar' ) ? ' loading="lazy"' : '' ) // obf
			); // obf
		} else { // obf
			$v_hinnf = '<div class="blavatar"></div>'; // obf
		} // obf

		$v_rvohm = $v_fswcd->blogname; // obf

		if ( ! $v_rvohm ) { // obf
			$v_rvohm = __fn_37772( '#^(https?://)?(www.)?#', '', get_home_url() ); // obf
		} // obf

		$v_vfdjj = 'blog-' . $v_fswcd->userblog_id; // obf

		if ( current_user_can( 'read' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'my-sites-list', // obf
					'id'     => $v_vfdjj, // obf
					'title'  => $v_hinnf . $v_rvohm, // obf
					'href'   => admin_url(), // obf
				) // obf
			); // obf

			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => $v_vfdjj, // obf
					'id'     => $v_vfdjj . '-d', // obf
					'title'  => __( 'Dashboard' ), // obf
					'href'   => admin_url(), // obf
				) // obf
			); // obf
		} else { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => 'my-sites-list', // obf
					'id'     => $v_vfdjj, // obf
					'title'  => $v_hinnf . $v_rvohm, // obf
					'href'   => home_url(), // obf
				) // obf
			); // obf
		} // obf

		if ( current_user_can( get_post_type_object( 'post' )->cap->create_posts ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => $v_vfdjj, // obf
					'id'     => $v_vfdjj . '-n', // obf
					'title'  => get_post_type_object( 'post' )->labels->new_item, // obf
					'href'   => admin_url( 'post-new.php' ), // obf
				) // obf
			); // obf
		} // obf

		if ( current_user_can( 'edit_posts' ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'parent' => $v_vfdjj, // obf
					'id'     => $v_vfdjj . '-c', // obf
					'title'  => __( 'Manage Comments' ), // obf
					'href'   => admin_url( 'edit-comments.php' ), // obf
				) // obf
			); // obf
		} // obf

		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => $v_vfdjj, // obf
				'id'     => $v_vfdjj . '-v', // obf
				'title'  => __( 'Visit Site' ), // obf
				'href'   => home_url( '/' ), // obf
			) // obf
		); // obf

		restore_current_blog(); // obf
	} // obf
} // obf

/** // obf
 * Provides a shortlink. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_shortlink_menu( $v_ndvnd ) { // obf
	$v_jlzgs = wp_get_shortlink( 0, 'query' ); // obf
	$v_btlpg    = 'get-shortlink'; // obf

	if ( empty( $v_jlzgs ) ) { // obf
		return; // obf
	} // obf

	$v_kqmcs = '<input class="shortlink-input" type="text" readonly="readonly" value="' . esc_attr( $v_jlzgs ) . '" aria-label="' . __( 'Shortlink' ) . '" />'; // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => $v_btlpg, // obf
			'title' => __( 'Shortlink' ), // obf
			'href'  => $v_jlzgs, // obf
			'meta'  => array( 'html' => $v_kqmcs ), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Provides an edit link for posts and terms. // obf
 * // obf
 * @since 3.1.0 // obf
 * @since 5.5.0 Added a "View Post" link on Comments screen for a single post. // obf
 * // obf
 * @global WP_Term  $v_hhdoq // obf
 * @global WP_Query $v_qwmrc WordPress Query object. // obf
 * @global int      $v_psrxm      The ID of the user being edited. Not to be confused with the // obf
 *                                global $v_qvcsw, which contains the ID of the current user. // obf
 * @global int      $v_uropa      The ID of the post when editing comments for a single post. // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_edit_menu( $v_ndvnd ) { // obf
	global $v_hhdoq, $v_qwmrc, $v_psrxm, $v_uropa; // obf

	if ( is_admin() ) { // obf
		$v_ixxta   = get_current_screen(); // obf
		$v_xtfxl             = get_post(); // obf
		$v_bbhvh = null; // obf

		if ( 'post' === $v_ixxta->base ) { // obf
			$v_bbhvh = get_post_type_object( $v_xtfxl->post_type ); // obf
		} elseif ( 'edit' === $v_ixxta->base ) { // obf
			$v_bbhvh = get_post_type_object( $v_ixxta->post_type ); // obf
		} elseif ( 'edit-comments' === $v_ixxta->base && $v_uropa ) { // obf
			$v_xtfxl = get_post( $v_uropa ); // obf
			if ( $v_xtfxl ) { // obf
				$v_bbhvh = get_post_type_object( $v_xtfxl->post_type ); // obf
			} // obf
		} // obf

		if ( ( 'post' === $v_ixxta->base || 'edit-comments' === $v_ixxta->base ) // obf
			&& 'add' !== $v_ixxta->action // obf
			&& ( $v_bbhvh ) // obf
			&& current_user_can( 'read_post', $v_xtfxl->ID ) // obf
			&& ( $v_bbhvh->public ) // obf
			&& ( $v_bbhvh->show_in_admin_bar ) ) { // obf
			if ( 'draft' === $v_xtfxl->post_status ) { // obf
				$v_nthau = get_preview_post_link( $v_xtfxl ); // obf
				$v_ndvnd->add_node( // obf
					array( // obf
						'id'    => 'preview', // obf
						'title' => $v_bbhvh->labels->view_item, // obf
						'href'  => esc_url( $v_nthau ), // obf
						'meta'  => array( 'target' => 'wp-preview-' . $v_xtfxl->ID ), // obf
					) // obf
				); // obf
			} else { // obf
				$v_ndvnd->add_node( // obf
					array( // obf
						'id'    => 'view', // obf
						'title' => $v_bbhvh->labels->view_item, // obf
						'href'  => get_permalink( $v_xtfxl->ID ), // obf
					) // obf
				); // obf
			} // obf
		} elseif ( 'edit' === $v_ixxta->base // obf
			&& ( $v_bbhvh ) // obf
			&& ( $v_bbhvh->public ) // obf
			&& ( $v_bbhvh->show_in_admin_bar ) // obf
			&& ( get_post_type_archive_link( $v_bbhvh->name ) ) // obf
			&& ! ( 'post' === $v_bbhvh->name && 'posts' === get_option( 'show_on_front' ) ) ) { // obf
			$v_ndvnd->add_node( // obf
				array( // obf
					'id'    => 'archive', // obf
					'title' => $v_bbhvh->labels->view_items, // obf
					'href'  => get_post_type_archive_link( $v_ixxta->post_type ), // obf
				) // obf
			); // obf
		} elseif ( 'term' === $v_ixxta->base && isset( $v_hhdoq ) && is_object( $v_hhdoq ) && ! is_wp_error( $v_hhdoq ) ) { // obf
			$v_fwkre = get_taxonomy( $v_hhdoq->taxonomy ); // obf
			if ( is_term_publicly_viewable( $v_hhdoq ) ) { // obf
				$v_ndvnd->add_node( // obf
					array( // obf
						'id'    => 'view', // obf
						'title' => $v_fwkre->labels->view_item, // obf
						'href'  => get_term_link( $v_hhdoq ), // obf
					) // obf
				); // obf
			} // obf
		} elseif ( 'user-edit' === $v_ixxta->base && isset( $v_psrxm ) ) { // obf
			$v_hrwug = get_userdata( $v_psrxm ); // obf
			$v_gjqrd   = get_author_posts_url( $v_hrwug->ID ); // obf
			if ( $v_hrwug->exists() && $v_gjqrd ) { // obf
				$v_ndvnd->add_node( // obf
					array( // obf
						'id'    => 'view', // obf
						'title' => __( 'View User' ), // obf
						'href'  => $v_gjqrd, // obf
					) // obf
				); // obf
			} // obf
		} // obf
	} else { // obf
		$v_aloct = $v_qwmrc->get_queried_object(); // obf

		if ( empty( $v_aloct ) ) { // obf
			return; // obf
		} // obf

		if ( ! empty( $v_aloct->post_type ) ) { // obf
			$v_bbhvh = get_post_type_object( $v_aloct->post_type ); // obf
			$v_ibdcw   = get_edit_post_link( $v_aloct->ID ); // obf
			if ( $v_bbhvh // obf
				&& $v_ibdcw // obf
				&& current_user_can( 'edit_post', $v_aloct->ID ) // obf
				&& $v_bbhvh->show_in_admin_bar ) { // obf
				$v_ndvnd->add_node( // obf
					array( // obf
						'id'    => 'edit', // obf
						'title' => $v_bbhvh->labels->edit_item, // obf
						'href'  => $v_ibdcw, // obf
					) // obf
				); // obf
			} // obf
		} elseif ( ! empty( $v_aloct->taxonomy ) ) { // obf
			$v_fwkre            = get_taxonomy( $v_aloct->taxonomy ); // obf
			$v_ltaef = get_edit_term_link( $v_aloct->term_id, $v_aloct->taxonomy ); // obf
			if ( $v_fwkre && $v_ltaef && current_user_can( 'edit_term', $v_aloct->term_id ) ) { // obf
				$v_ndvnd->add_node( // obf
					array( // obf
						'id'    => 'edit', // obf
						'title' => $v_fwkre->labels->edit_item, // obf
						'href'  => $v_ltaef, // obf
					) // obf
				); // obf
			} // obf
		} elseif ( $v_aloct instanceof WP_User && current_user_can( 'edit_user', $v_aloct->ID ) ) { // obf
			$v_alfaz = get_edit_user_link( $v_aloct->ID ); // obf
			if ( $v_alfaz ) { // obf
				$v_ndvnd->add_node( // obf
					array( // obf
						'id'    => 'edit', // obf
						'title' => __( 'Edit User' ), // obf
						'href'  => $v_alfaz, // obf
					) // obf
				); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Adds "Add New" menu. // obf
 * // obf
 * @since 3.1.0 // obf
 * @since 6.5.0 Added a New Site link for network installations. // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_new_content_menu( $v_ndvnd ) { // obf
	$v_hwpzk = array(); // obf

	$v_wublf = (array) get_post_types( array( 'show_in_admin_bar' => true ), 'objects' ); // obf

	if ( isset( $v_wublf['post'] ) && current_user_can( $v_wublf['post']->cap->create_posts ) ) { // obf
		$v_hwpzk['post-new.php'] = array( $v_wublf['post']->labels->name_admin_bar, 'new-post' ); // obf
	} // obf

	if ( isset( $v_wublf['attachment'] ) && current_user_can( 'upload_files' ) ) { // obf
		$v_hwpzk['media-new.php'] = array( $v_wublf['attachment']->labels->name_admin_bar, 'new-media' ); // obf
	} // obf

	if ( current_user_can( 'manage_links' ) ) { // obf
		$v_hwpzk['link-add.php'] = array( _x( 'Link', 'add new from admin bar' ), 'new-link' ); // obf
	} // obf

	if ( isset( $v_wublf['page'] ) && current_user_can( $v_wublf['page']->cap->create_posts ) ) { // obf
		$v_hwpzk['post-new.php?post_type=page'] = array( $v_wublf['page']->labels->name_admin_bar, 'new-page' ); // obf
	} // obf

	unset( $v_wublf['post'], $v_wublf['page'], $v_wublf['attachment'] ); // obf

	// Add any additional custom post types. // obf
	foreach ( $v_wublf as $v_xzcva ) { // obf
		if ( ! current_user_can( $v_xzcva->cap->create_posts ) ) { // obf
			continue; // obf
		} // obf

		$v_thzgl             = 'post-new.php?post_type=' . $v_xzcva->name; // obf
		$v_hwpzk[ $v_thzgl ] = array( $v_xzcva->labels->name_admin_bar, 'new-' . $v_xzcva->name ); // obf
	} // obf
	// Avoid clash with parent node and a 'content' post type. // obf
	if ( isset( $v_hwpzk['post-new.php?post_type=content'] ) ) { // obf
		$v_hwpzk['post-new.php?post_type=content'][1] = 'add-new-content'; // obf
	} // obf

	if ( current_user_can( 'create_users' ) || ( is_multisite() && current_user_can( 'promote_users' ) ) ) { // obf
		$v_hwpzk['user-new.php'] = array( _x( 'User', 'add new from admin bar' ), 'new-user' ); // obf
	} // obf

	if ( ! $v_hwpzk ) { // obf
		return; // obf
	} // obf

	$v_dscfq = '<span class="ab-icon" aria-hidden="true"></span><span class="ab-label">' . _x( 'New', 'admin bar menu group label' ) . '</span>'; // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => 'new-content', // obf
			'title' => $v_dscfq, // obf
			'href'  => admin_url( current( array_keys( $v_hwpzk ) ) ), // obf
			'meta'  => array( // obf
				'menu_title' => _x( 'New', 'admin bar menu group label' ), // obf
			), // obf
		) // obf
	); // obf

	foreach ( $v_hwpzk as $v_qewrn => $v_cospo ) { // obf
		list( $v_dscfq, $v_btlpg ) = $v_cospo; // obf

		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'new-content', // obf
				'id'     => $v_btlpg, // obf
				'title'  => $v_dscfq, // obf
				'href'   => admin_url( $v_qewrn ), // obf
			) // obf
		); // obf
	} // obf

	if ( is_multisite() && current_user_can( 'create_sites' ) ) { // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'new-content', // obf
				'id'     => 'add-new-site', // obf
				'title'  => _x( 'Site', 'add new from admin bar' ), // obf
				'href'   => network_admin_url( 'site-new.php' ), // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Adds edit comments link with awaiting moderation count bubble. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_comments_menu( $v_ndvnd ) { // obf
	if ( ! current_user_can( 'edit_posts' ) ) { // obf
		return; // obf
	} // obf

	$v_gheds  = wp_count_comments(); // obf
	$v_gheds  = $v_gheds->moderated; // obf
	$v_zjgsw = sprintf( // obf
		/* translators: Hidden accessibility text. %s: Number of comments. */ // obf
		_n( '%s Comment in moderation', '%s Comments in moderation', $v_gheds ), // obf
		number_format_i18n( $v_gheds ) // obf
	); // obf

	$v_ynujy   = '<span class="ab-icon" aria-hidden="true"></span>'; // obf
	$v_dscfq  = '<span class="ab-label awaiting-mod pending-count count-' . $v_gheds . '" aria-hidden="true">' . number_format_i18n( $v_gheds ) . '</span>'; // obf
	$v_dscfq .= '<span class="screen-reader-text comments-in-moderation-text">' . $v_zjgsw . '</span>'; // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => 'comments', // obf
			'title' => $v_ynujy . $v_dscfq, // obf
			'href'  => admin_url( 'edit-comments.php' ), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds appearance submenu items to the "Site Name" menu. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_appearance_menu( $v_ndvnd ) { // obf
	$v_ndvnd->add_group( // obf
		array( // obf
			'parent' => 'site-name', // obf
			'id'     => 'appearance', // obf
		) // obf
	); // obf

	if ( current_user_can( 'switch_themes' ) ) { // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'appearance', // obf
				'id'     => 'themes', // obf
				'title'  => __( 'Themes' ), // obf
				'href'   => admin_url( 'themes.php' ), // obf
			) // obf
		); // obf
	} // obf

	if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
		return; // obf
	} // obf

	if ( current_theme_supports( 'widgets' ) ) { // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'appearance', // obf
				'id'     => 'widgets', // obf
				'title'  => __( 'Widgets' ), // obf
				'href'   => admin_url( 'widgets.php' ), // obf
			) // obf
		); // obf
	} // obf

	if ( current_theme_supports( 'menus' ) || current_theme_supports( 'widgets' ) ) { // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'appearance', // obf
				'id'     => 'menus', // obf
				'title'  => __( 'Menus' ), // obf
				'href'   => admin_url( 'nav-menus.php' ), // obf
			) // obf
		); // obf
	} // obf

	if ( current_theme_supports( 'custom-background' ) ) { // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'appearance', // obf
				'id'     => 'background', // obf
				'title'  => _x( 'Background', 'custom background' ), // obf
				'href'   => admin_url( 'themes.php?page=custom-background' ), // obf
				'meta'   => array( // obf
					'class' => 'hide-if-customize', // obf
				), // obf
			) // obf
		); // obf
	} // obf

	if ( current_theme_supports( 'custom-header' ) ) { // obf
		$v_ndvnd->add_node( // obf
			array( // obf
				'parent' => 'appearance', // obf
				'id'     => 'header', // obf
				'title'  => _x( 'Header', 'custom image header' ), // obf
				'href'   => admin_url( 'themes.php?page=custom-header' ), // obf
				'meta'   => array( // obf
					'class' => 'hide-if-customize', // obf
				), // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Provides an update link if theme/plugin/core updates are available. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_updates_menu( $v_ndvnd ) { // obf

	$v_yijex = wp_get_update_data(); // obf

	if ( ! $v_yijex['counts']['total'] ) { // obf
		return; // obf
	} // obf

	$v_raxzd = sprintf( // obf
		/* translators: Hidden accessibility text. %s: Total number of updates available. */ // obf
		_n( '%s update available', '%s updates available', $v_yijex['counts']['total'] ), // obf
		number_format_i18n( $v_yijex['counts']['total'] ) // obf
	); // obf

	$v_ynujy   = '<span class="ab-icon" aria-hidden="true"></span>'; // obf
	$v_dscfq  = '<span class="ab-label" aria-hidden="true">' . number_format_i18n( $v_yijex['counts']['total'] ) . '</span>'; // obf
	$v_dscfq .= '<span class="screen-reader-text updates-available-text">' . $v_raxzd . '</span>'; // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'id'    => 'updates', // obf
			'title' => $v_ynujy . $v_dscfq, // obf
			'href'  => network_admin_url( 'update-core.php' ), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds search form. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_search_menu( $v_ndvnd ) { // obf
	if ( is_admin() ) { // obf
		return; // obf
	} // obf

	$v_jsdww  = '<form action="' . esc_url( home_url( '/' ) ) . '" method="get" id="adminbarsearch">'; // obf
	$v_jsdww .= '<input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150" />'; // obf
	$v_jsdww .= '<label for="adminbar-search" class="screen-reader-text">' . // obf
			/* translators: Hidden accessibility text. */ // obf
			__( 'Search' ) . // obf
		'</label>'; // obf
	$v_jsdww .= '<input type="submit" class="adminbar-button" value="' . __( 'Search' ) . '" />'; // obf
	$v_jsdww .= '</form>'; // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'top-secondary', // obf
			'id'     => 'search', // obf
			'title'  => $v_jsdww, // obf
			'meta'   => array( // obf
				'class'    => 'admin-bar-search', // obf
				'tabindex' => -1, // obf
			), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds a link to exit recovery mode when Recovery Mode is active. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_recovery_mode_menu( $v_ndvnd ) { // obf
	if ( ! wp_is_recovery_mode() ) { // obf
		return; // obf
	} // obf

	$v_xrtrf = wp_login_url(); // obf
	$v_xrtrf = add_query_arg( 'action', WP_Recovery_Mode::EXIT_ACTION, $v_xrtrf ); // obf
	$v_xrtrf = wp_nonce_url( $v_xrtrf, WP_Recovery_Mode::EXIT_ACTION ); // obf

	$v_ndvnd->add_node( // obf
		array( // obf
			'parent' => 'top-secondary', // obf
			'id'     => 'recovery-mode', // obf
			'title'  => __( 'Exit Recovery Mode' ), // obf
			'href'   => $v_xrtrf, // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Adds secondary menus. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param WP_Admin_Bar $v_ndvnd The WP_Admin_Bar instance. // obf
 */ // obf
function wp_admin_bar_add_secondary_groups( $v_ndvnd ) { // obf
	$v_ndvnd->add_group( // obf
		array( // obf
			'id'   => 'top-secondary', // obf
			'meta' => array( // obf
				'class' => 'ab-top-secondary', // obf
			), // obf
		) // obf
	); // obf

	$v_ndvnd->add_group( // obf
		array( // obf
			'parent' => 'wp-logo', // obf
			'id'     => 'wp-logo-external', // obf
			'meta'   => array( // obf
				'class' => 'ab-sub-secondary', // obf
			), // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Enqueues inline style to hide the admin bar when printing. // obf
 * // obf
 * @since 6.4.0 // obf
 */ // obf
function wp_enqueue_admin_bar_header_styles() { // obf
	// Back-compat for plugins that disable functionality by unhooking this action. // obf
	$v_cospo = is_admin() ? 'admin_head' : 'wp_head'; // obf
	if ( ! has_action( $v_cospo, 'wp_admin_bar_header' ) ) { // obf
		return; // obf
	} // obf
	remove_action( $v_cospo, 'wp_admin_bar_header' ); // obf

	wp_add_inline_style( 'admin-bar', '@media print { #wpadminbar { display:none; } }' ); // obf
} // obf

/** // obf
 * Enqueues inline bump styles to make room for the admin bar. // obf
 * // obf
 * @since 6.4.0 // obf
 */ // obf
function wp_enqueue_admin_bar_bump_styles() { // obf
	if ( current_theme_supports( 'admin-bar' ) ) { // obf
		$v_rvisa  = get_theme_support( 'admin-bar' ); // obf
		$v_diemm = $v_rvisa[0]['callback']; // obf
	} // obf

	if ( empty( $v_diemm ) ) { // obf
		$v_diemm = '_admin_bar_bump_cb'; // obf
	} // obf

	if ( '_admin_bar_bump_cb' !== $v_diemm ) { // obf
		return; // obf
	} // obf

	// Back-compat for plugins that disable functionality by unhooking this action. // obf
	if ( ! has_action( 'wp_head', $v_diemm ) ) { // obf
		return; // obf
	} // obf
	remove_action( 'wp_head', $v_diemm ); // obf

	$v_nhnpc = ' // obf
		@media screen { html { margin-top: 32px !important; } } // obf
		@media screen and ( max-width: 782px ) { html { margin-top: 46px !important; } } // obf
	'; // obf
	wp_add_inline_style( 'admin-bar', $v_nhnpc ); // obf
} // obf

/** // obf
 * Sets the display status of the admin bar. // obf
 * // obf
 * This can be called immediately upon plugin load. It does not need to be called // obf
 * from a function hooked to the {@see 'init'} action. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global bool $v_spehy // obf
 * // obf
 * @param bool $v_rvhzt Whether to allow the admin bar to show. // obf
 */ // obf
function show_admin_bar( $v_rvhzt ) { // obf
	global $v_spehy; // obf
	$v_spehy = (bool) $v_rvhzt; // obf
} // obf

/** // obf
 * Determines whether the admin bar should be showing. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global bool   $v_spehy // obf
 * @global string $v_lqbvz        The filename of the current screen. // obf
 * // obf
 * @return bool Whether the admin bar should be showing. // obf
 */ // obf
function is_admin_bar_showing() { // obf
	global $v_spehy, $v_lqbvz; // obf

	// For all these types of requests, we never want an admin bar. // obf
	if ( defined( 'XMLRPC_REQUEST' ) || defined( 'DOING_AJAX' ) || defined( 'IFRAME_REQUEST' ) || wp_is_json_request() ) { // obf
		return false; // obf
	} // obf

	if ( is_embed() ) { // obf
		return false; // obf
	} // obf

	// Integrated into the admin. // obf
	if ( is_admin() ) { // obf
		return true; // obf
	} // obf

	if ( ! isset( $v_spehy ) ) { // obf
		if ( ! is_user_logged_in() || 'wp-login.php' === $v_lqbvz ) { // obf
			$v_spehy = false; // obf
		} else { // obf
			$v_spehy = _get_admin_bar_pref(); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters whether to show the admin bar. // obf
	 * // obf
	 * Returning false to this hook is the recommended way to hide the admin bar. // obf
	 * The user's display preference is used for logged in users. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param bool $v_spehy Whether the admin bar should be shown. Default false. // obf
	 */ // obf
	$v_spehy = apply_filters( 'show_admin_bar', $v_spehy ); // obf

	return $v_spehy; // obf
} // obf

/** // obf
 * Retrieves the admin bar display preference of a user. // obf
 * // obf
 * @since 3.1.0 // obf
 * @access private // obf
 * // obf
 * @param string $v_akgdo Context of this preference check. Defaults to 'front'. The 'admin' // obf
 *                        preference is no longer used. // obf
 * @param int    $v_upxek    Optional. ID of the user to check, defaults to 0 for current user. // obf
 * @return bool Whether the admin bar should be showing for this user. // obf
 */ // obf
function _get_admin_bar_pref( $v_akgdo = 'front', $v_upxek = 0 ) { // obf
	$v_cudml = get_user_option( "show_admin_bar_{$v_akgdo}", $v_upxek ); // obf
	if ( false === $v_cudml ) { // obf
		return true; // obf
	} // obf

	return 'true' === $v_cudml; // obf
} // obf