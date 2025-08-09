

<?php // obf
/** // obf
 * These functions are needed to load Multisite. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 */ // obf

/** // obf
 * Whether a subdomain configuration is enabled. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @return bool True if subdomain configuration is enabled, false otherwise. // obf
 */ // obf
function is_subdomain_install() { // obf
	if ( defined( 'SUBDOMAIN_INSTALL' ) ) { // obf
		return SUBDOMAIN_INSTALL; // obf
	} // obf

	return ( defined( 'VHOST' ) && 'yes' === VHOST ); // obf
} // obf

/** // obf
 * Returns array of network plugin files to be included in global scope. // obf
 * // obf
 * The default directory is wp-content/plugins. To change the default directory // obf
 * manually, define `WP_PLUGIN_DIR` and `WP_PLUGIN_URL` in `wp-config.php`. // obf
 * // obf
 * @access private // obf
 * @since 3.1.0 // obf
 * // obf
 * @return string[] Array of absolute paths to files to include. // obf
 */ // obf
function wp_get_active_network_plugins() { // obf
	$v_agxii = (array) get_site_option( 'active_sitewide_plugins', array() ); // obf
	if ( empty( $v_agxii ) ) { // obf
		return array(); // obf
	} // obf

	$v_uytqp        = array(); // obf
	$v_agxii = array_keys( $v_agxii ); // obf
	sort( $v_agxii ); // obf

	foreach ( $v_agxii as $v_lgvqg ) { // obf
		if ( ! validate_file( $v_lgvqg )                     // $v_lgvqg must validate as file. // obf
			&& str_ends_with( $v_lgvqg, '.php' )             // $v_lgvqg must end with '.php'. // obf
			&& file_exists( WP_PLUGIN_DIR . '/' . $v_lgvqg ) // $v_lgvqg must exist. // obf
			) { // obf
			$v_uytqp[] = WP_PLUGIN_DIR . '/' . $v_lgvqg; // obf
		} // obf
	} // obf

	return $v_uytqp; // obf
} // obf

/** // obf
 * Checks status of current blog. // obf
 * // obf
 * Checks if the blog is deleted, inactive, archived, or spammed. // obf
 * // obf
 * Dies with a default message if the blog does not pass the check. // obf
 * // obf
 * To change the default message when a blog does not pass the check, // obf
 * use the wp-content/blog-deleted.php, blog-inactive.php and // obf
 * blog-suspended.php drop-ins. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @return true|string Returns true on success, or drop-in file to include. // obf
 */ // obf
function ms_site_check() { // obf

	/** // obf
	 * Filters checking the status of the current blog. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param bool|null $v_ukiwm Whether to skip the blog status check. Default null. // obf
	 */ // obf
	$v_ukiwm = apply_filters( 'ms_site_check', null ); // obf
	if ( null !== $v_ukiwm ) { // obf
		return true; // obf
	} // obf

	// Allow super admins to see blocked sites. // obf
	if ( is_super_admin() ) { // obf
		return true; // obf
	} // obf

	$v_hhsiz = get_site(); // obf

	if ( '1' === $v_hhsiz->deleted ) { // obf
		if ( file_exists( WP_CONTENT_DIR . '/blog-deleted.php' ) ) { // obf
			return WP_CONTENT_DIR . '/blog-deleted.php'; // obf
		} else { // obf
			wp_die( __( 'This site is no longer available.' ), '', array( 'response' => 410 ) ); // obf
		} // obf
	} // obf

	if ( '2' === $v_hhsiz->deleted ) { // obf
		if ( file_exists( WP_CONTENT_DIR . '/blog-inactive.php' ) ) { // obf
			return WP_CONTENT_DIR . '/blog-inactive.php'; // obf
		} else { // obf
			$v_falow = str_replace( '@', ' AT ', get_site_option( 'admin_email', 'support@' . get_network()->domain ) ); // obf
			wp_die( // obf
				sprintf( // obf
					/* translators: %s: Admin email link. */ // obf
					__( 'This site has not been activated yet. If you are having problems activating your site, please contact %s.' ), // obf
					sprintf( '<a href="mailto:%1$v_vxndl">%1$v_vxndl</a>', $v_falow ) // obf
				) // obf
			); // obf
		} // obf
	} // obf

	if ( '1' === $v_hhsiz->archived || '1' === $v_hhsiz->spam ) { // obf
		if ( file_exists( WP_CONTENT_DIR . '/blog-suspended.php' ) ) { // obf
			return WP_CONTENT_DIR . '/blog-suspended.php'; // obf
		} else { // obf
			wp_die( __( 'This site has been archived or suspended.' ), '', array( 'response' => 410 ) ); // obf
		} // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Retrieves the closest matching network for a domain and path. // obf
 * // obf
 * {@internal In 4.4.0, converted to a wrapper for WP_Network::get_by_path()} // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @param string   $v_gaqna   Domain to check. // obf
 * @param string   $v_djuth     Path to check. // obf
 * @param int|null $v_zhjxh Path segments to use. Defaults to null, or the full path. // obf
 * @return WP_Network|false Network object if successful. False when no network is found. // obf
 */ // obf
function get_network_by_path( $v_gaqna, $v_djuth, $v_zhjxh = null ) { // obf
	return WP_Network::get_by_path( $v_gaqna, $v_djuth, $v_zhjxh ); // obf
} // obf

/** // obf
 * Retrieves the closest matching site object by its domain and path. // obf
 * // obf
 * This will not necessarily return an exact match for a domain and path. Instead, it // obf
 * breaks the domain and path into pieces that are then used to match the closest // obf
 * possibility from a query. // obf
 * // obf
 * The intent of this method is to match a site object during bootstrap for a // obf
 * requested site address // obf
 * // obf
 * @since 3.9.0 // obf
 * @since 4.7.0 Updated to always return a `WP_Site` object. // obf
 * // obf
 * @param string   $v_gaqna   Domain to check. // obf
 * @param string   $v_djuth     Path to check. // obf
 * @param int|null $v_zhjxh Path segments to use. Defaults to null, or the full path. // obf
 * @return WP_Site|false Site object if successful. False when no site is found. // obf
 */ // obf
function get_site_by_path( $v_gaqna, $v_djuth, $v_zhjxh = null ) { // obf
	$v_gzpat = array_filter( explode( '/', trim( $v_djuth, '/' ) ) ); // obf

	/** // obf
	 * Filters the number of path segments to consider when searching for a site. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param int|null $v_zhjxh The number of path segments to consider. WordPress by default looks at // obf
	 *                           one path segment following the network path. The function default of // obf
	 *                           null only makes sense when you know the requested path should match a site. // obf
	 * @param string   $v_gaqna   The requested domain. // obf
	 * @param string   $v_djuth     The requested path, in full. // obf
	 */ // obf
	$v_zhjxh = apply_filters( 'site_by_path_segments_count', $v_zhjxh, $v_gaqna, $v_djuth ); // obf

	if ( null !== $v_zhjxh && count( $v_gzpat ) > $v_zhjxh ) { // obf
		$v_gzpat = array_slice( $v_gzpat, 0, $v_zhjxh ); // obf
	} // obf

	$v_qukps = array(); // obf

	while ( count( $v_gzpat ) ) { // obf
		$v_qukps[] = '/' . implode( '/', $v_gzpat ) . '/'; // obf
		array_pop( $v_gzpat ); // obf
	} // obf

	$v_qukps[] = '/'; // obf

	/** // obf
	 * Determines a site by its domain and path. // obf
	 * // obf
	 * This allows one to short-circuit the default logic, perhaps by // obf
	 * replacing it with a routine that is more optimal for your setup. // obf
	 * // obf
	 * Return null to avoid the short-circuit. Return false if no site // obf
	 * can be found at the requested domain and path. Otherwise, return // obf
	 * a site object. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param null|false|WP_Site $v_ngwsn     Site value to return by path. Default null // obf
	 *                                     to continue retrieving the site. // obf
	 * @param string             $v_gaqna   The requested domain. // obf
	 * @param string             $v_djuth     The requested path, in full. // obf
	 * @param int|null           $v_zhjxh The suggested number of paths to consult. // obf
	 *                                     Default null, meaning the entire path was to be consulted. // obf
	 * @param string[]           $v_qukps    The paths to search for, based on $v_djuth and $v_zhjxh. // obf
	 */ // obf
	$v_yaxmx = apply_filters( 'pre_get_site_by_path', null, $v_gaqna, $v_djuth, $v_zhjxh, $v_qukps ); // obf
	if ( null !== $v_yaxmx ) { // obf
		if ( false !== $v_yaxmx && ! $v_yaxmx instanceof WP_Site ) { // obf
			$v_yaxmx = new WP_Site( $v_yaxmx ); // obf
		} // obf
		return $v_yaxmx; // obf
	} // obf

	/* // obf
	 * @todo // obf
	 * Caching, etc. Consider alternative optimization routes, // obf
	 * perhaps as an opt-in for plugins, rather than using the pre_* filter. // obf
	 * For example: The segments filter can expand or ignore paths. // obf
	 * If persistent caching is enabled, we could query the DB for a path <> '/' // obf
	 * then cache whether we can just always ignore paths. // obf
	 */ // obf

	/* // obf
	 * Either www or non-www is supported, not both. If a www domain is requested, // obf
	 * query for both to provide the proper redirect. // obf
	 */ // obf
	$v_cmyli = array( $v_gaqna ); // obf
	if ( str_starts_with( $v_gaqna, 'www.' ) ) { // obf
		$v_cmyli[] = substr( $v_gaqna, 4 ); // obf
	} // obf

	$v_lptfh = array( // obf
		'number'                 => 1, // obf
		'update_site_meta_cache' => false, // obf
	); // obf

	if ( count( $v_cmyli ) > 1 ) { // obf
		$v_lptfh['domain__in']               = $v_cmyli; // obf
		$v_lptfh['orderby']['domain_length'] = 'DESC'; // obf
	} else { // obf
		$v_lptfh['domain'] = array_shift( $v_cmyli ); // obf
	} // obf

	if ( count( $v_qukps ) > 1 ) { // obf
		$v_lptfh['path__in']               = $v_qukps; // obf
		$v_lptfh['orderby']['path_length'] = 'DESC'; // obf
	} else { // obf
		$v_lptfh['path'] = array_shift( $v_qukps ); // obf
	} // obf

	$v_jizis = get_sites( $v_lptfh ); // obf
	$v_ngwsn   = array_shift( $v_jizis ); // obf

	if ( $v_ngwsn ) { // obf
		return $v_ngwsn; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Identifies the network and site of a requested domain and path and populates the // obf
 * corresponding network and site global objects as part of the multisite bootstrap process. // obf
 * // obf
 * Prior to 4.6.0, this was a procedural block in `ms-settings.php`. It was wrapped into // obf
 * a function to facilitate unit tests. It should not be used outside of core. // obf
 * // obf
 * Usually, it's easier to query the site first, which then declares its network. // obf
 * In limited situations, we either can or must find the network first. // obf
 * // obf
 * If a network and site are found, a `true` response will be returned so that the // obf
 * request can continue. // obf
 * // obf
 * If neither a network or site is found, `false` or a URL string will be returned // obf
 * so that either an error can be shown or a redirect can occur. // obf
 * // obf
 * @since 4.6.0 // obf
 * @access private // obf
 * // obf
 * @global WP_Network $v_mmwym The current network. // obf
 * @global WP_Site    $v_znbuh The current site. // obf
 * // obf
 * @param string $v_gaqna    The requested domain. // obf
 * @param string $v_djuth      The requested path. // obf
 * @param bool   $v_jvxtn Optional. Whether a subdomain (true) or subdirectory (false) configuration. // obf
 *                          Default false. // obf
 * @return bool|string True if bootstrap successfully populated `$v_znbuh` and `$v_mmwym`. // obf
 *                     False if bootstrap could not be properly completed. // obf
 *                     Redirect URL if parts exist, but the request as a whole can not be fulfilled. // obf
 */ // obf
function ms_load_current_site_and_network( $v_gaqna, $v_djuth, $v_jvxtn = false ) { // obf
	global $v_mmwym, $v_znbuh; // obf

	// If the network is defined in wp-config.php, we can simply use that. // obf
	if ( defined( 'DOMAIN_CURRENT_SITE' ) && defined( 'PATH_CURRENT_SITE' ) ) { // obf
		$v_mmwym         = new stdClass(); // obf
		$v_mmwym->id     = defined( 'SITE_ID_CURRENT_SITE' ) ? SITE_ID_CURRENT_SITE : 1; // obf
		$v_mmwym->domain = DOMAIN_CURRENT_SITE; // obf
		$v_mmwym->path   = PATH_CURRENT_SITE; // obf
		if ( defined( 'BLOG_ID_CURRENT_SITE' ) ) { // obf
			$v_mmwym->blog_id = BLOG_ID_CURRENT_SITE; // obf
		} elseif ( defined( 'BLOGID_CURRENT_SITE' ) ) { // Deprecated. // obf
			$v_mmwym->blog_id = BLOGID_CURRENT_SITE; // obf
		} // obf

		if ( 0 === strcasecmp( $v_mmwym->domain, $v_gaqna ) && 0 === strcasecmp( $v_mmwym->path, $v_djuth ) ) { // obf
			$v_znbuh = get_site_by_path( $v_gaqna, $v_djuth ); // obf
		} elseif ( '/' !== $v_mmwym->path && 0 === strcasecmp( $v_mmwym->domain, $v_gaqna ) && 0 === stripos( $v_djuth, $v_mmwym->path ) ) { // obf
			/* // obf
			 * If the current network has a path and also matches the domain and path of the request, // obf
			 * we need to look for a site using the first path segment following the network's path. // obf
			 */ // obf
			$v_znbuh = get_site_by_path( $v_gaqna, $v_djuth, 1 + count( explode( '/', trim( $v_mmwym->path, '/' ) ) ) ); // obf
		} else { // obf
			// Otherwise, use the first path segment (as usual). // obf
			$v_znbuh = get_site_by_path( $v_gaqna, $v_djuth, 1 ); // obf
		} // obf
	} elseif ( ! $v_jvxtn ) { // obf
		/* // obf
		 * A "subdomain" installation can be re-interpreted to mean "can support any domain". // obf
		 * If we're not dealing with one of these installations, then the important part is determining // obf
		 * the network first, because we need the network's path to identify any sites. // obf
		 */ // obf
		$v_mmwym = wp_cache_get( 'current_network', 'site-options' ); // obf
		if ( ! $v_mmwym ) { // obf
			// Are there even two networks installed? // obf
			$v_thnxm = get_networks( array( 'number' => 2 ) ); // obf
			if ( count( $v_thnxm ) === 1 ) { // obf
				$v_mmwym = array_shift( $v_thnxm ); // obf
				wp_cache_add( 'current_network', $v_mmwym, 'site-options' ); // obf
			} elseif ( empty( $v_thnxm ) ) { // obf
				// A network not found hook should fire here. // obf
				return false; // obf
			} // obf
		} // obf

		if ( empty( $v_mmwym ) ) { // obf
			$v_mmwym = WP_Network::get_by_path( $v_gaqna, $v_djuth, 1 ); // obf
		} // obf

		if ( empty( $v_mmwym ) ) { // obf
			/** // obf
			 * Fires when a network cannot be found based on the requested domain and path. // obf
			 * // obf
			 * At the time of this action, the only recourse is to redirect somewhere // obf
			 * and exit. If you want to declare a particular network, do so earlier. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param string $v_gaqna       The domain used to search for a network. // obf
			 * @param string $v_djuth         The path used to search for a path. // obf
			 */ // obf
			do_action( 'ms_network_not_found', $v_gaqna, $v_djuth ); // obf

			return false; // obf
		} elseif ( $v_djuth === $v_mmwym->path ) { // obf
			$v_znbuh = get_site_by_path( $v_gaqna, $v_djuth ); // obf
		} else { // obf
			// Search the network path + one more path segment (on top of the network path). // obf
			$v_znbuh = get_site_by_path( $v_gaqna, $v_djuth, substr_count( $v_mmwym->path, '/' ) ); // obf
		} // obf
	} else { // obf
		// Find the site by the domain and at most the first path segment. // obf
		$v_znbuh = get_site_by_path( $v_gaqna, $v_djuth, 1 ); // obf
		if ( $v_znbuh ) { // obf
			$v_mmwym = WP_Network::get_instance( $v_znbuh->site_id ? $v_znbuh->site_id : 1 ); // obf
		} else { // obf
			// If you don't have a site with the same domain/path as a network, you're pretty screwed, but: // obf
			$v_mmwym = WP_Network::get_by_path( $v_gaqna, $v_djuth, 1 ); // obf
		} // obf
	} // obf

	// The network declared by the site trumps any constants. // obf
	if ( $v_znbuh && (int) $v_znbuh->site_id !== $v_mmwym->id ) { // obf
		$v_mmwym = WP_Network::get_instance( $v_znbuh->site_id ); // obf
	} // obf

	// No network has been found, bail. // obf
	if ( empty( $v_mmwym ) ) { // obf
		/** This action is documented in wp-includes/ms-settings.php */ // obf
		do_action( 'ms_network_not_found', $v_gaqna, $v_djuth ); // obf

		return false; // obf
	} // obf

	// During activation of a new subdomain, the requested site does not yet exist. // obf
	if ( empty( $v_znbuh ) && wp_installing() ) { // obf
		$v_znbuh          = new stdClass(); // obf
		$v_znbuh->blog_id = 1; // obf
		$v_isxsx               = 1; // obf
		$v_znbuh->public  = 1; // obf
	} // obf

	// No site has been found, bail. // obf
	if ( empty( $v_znbuh ) ) { // obf
		// We're going to redirect to the network URL, with some possible modifications. // obf
		$v_gwojh      = is_ssl() ? 'https' : 'http'; // obf
		$v_gheah = "$v_gwojh://{$v_mmwym->domain}{$v_mmwym->path}"; // obf

		/** // obf
		 * Fires when a network can be determined but a site cannot. // obf
		 * // obf
		 * At the time of this action, the only recourse is to redirect somewhere // obf
		 * and exit. If you want to declare a particular site, do so earlier. // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @param WP_Network $v_mmwym The network that had been determined. // obf
		 * @param string     $v_gaqna       The domain used to search for a site. // obf
		 * @param string     $v_djuth         The path used to search for a site. // obf
		 */ // obf
		do_action( 'ms_site_not_found', $v_mmwym, $v_gaqna, $v_djuth ); // obf

		if ( $v_jvxtn && ! defined( 'NOBLOGREDIRECT' ) ) { // obf
			// For a "subdomain" installation, redirect to the signup form specifically. // obf
			$v_gheah .= 'wp-signup.php?new=' . str_replace( '.' . $v_mmwym->domain, '', $v_gaqna ); // obf
		} elseif ( $v_jvxtn ) { // obf
			/* // obf
			 * For a "subdomain" installation, the NOBLOGREDIRECT constant // obf
			 * can be used to avoid a redirect to the signup form. // obf
			 * Using the ms_site_not_found action is preferred to the constant. // obf
			 */ // obf
			if ( '%siteurl%' !== NOBLOGREDIRECT ) { // obf
				$v_gheah = NOBLOGREDIRECT; // obf
			} // obf
		} elseif ( 0 === strcasecmp( $v_mmwym->domain, $v_gaqna ) ) { // obf
			/* // obf
			 * If the domain we were searching for matches the network's domain, // obf
			 * it's no use redirecting back to ourselves -- it'll cause a loop. // obf
			 * As we couldn't find a site, we're simply not installed. // obf
			 */ // obf
			return false; // obf
		} // obf

		return $v_gheah; // obf
	} // obf

	// Figure out the current network's main site. // obf
	if ( empty( $v_mmwym->blog_id ) ) { // obf
		$v_mmwym->blog_id = get_main_site_id( $v_mmwym->id ); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Displays a failure message. // obf
 * // obf
 * Used when a blog's tables do not exist. Checks for a missing $v_gpnna->site table as well. // obf
 * // obf
 * @access private // obf
 * @since 3.0.0 // obf
 * @since 4.4.0 The `$v_gaqna` and `$v_djuth` parameters were added. // obf
 * // obf
 * @global wpdb $v_gpnna WordPress database abstraction object. // obf
 * // obf
 * @param string $v_gaqna The requested domain for the error to reference. // obf
 * @param string $v_djuth   The requested path for the error to reference. // obf
 */ // obf
function ms_not_installed( $v_gaqna, $v_djuth ) { // obf
	global $v_gpnna; // obf

	if ( ! is_admin() ) { // obf
		dead_db(); // obf
	} // obf

	wp_load_translations_early(); // obf

	$v_eeqzq = __( 'Error establishing a database connection' ); // obf

	$v_luvwr   = '<h1>' . $v_eeqzq . '</h1>'; // obf
	$v_luvwr  .= '<p>' . __( 'If your site does not display, please contact the owner of this network.' ) . ''; // obf
	$v_luvwr  .= ' ' . __( 'If you are the owner of this network please check that your host&#8217;s database server is running properly and all tables are error free.' ) . '</p>'; // obf
	$v_wzdmy = $v_gpnna->prepare( 'SHOW TABLES LIKE %s', $v_gpnna->esc_like( $v_gpnna->site ) ); // obf
	if ( ! $v_gpnna->get_var( $v_wzdmy ) ) { // obf
		$v_luvwr .= '<p>' . sprintf( // obf
			/* translators: %s: Table name. */ // obf
			__( '<strong>Database tables are missing.</strong> This means that your host&#8217;s database server is not running, WordPress was not installed properly, or someone deleted %s. You really should look at your database now.' ), // obf
			'<code>' . $v_gpnna->site . '</code>' // obf
		) . '</p>'; // obf
	} else { // obf
		$v_luvwr .= '<p>' . sprintf( // obf
			/* translators: 1: Site URL, 2: Table name, 3: Database name. */ // obf
			__( '<strong>Could not find site %1$v_vxndl.</strong> Searched for table %2$v_vxndl in database %3$v_vxndl. Is that right?' ), // obf
			'<code>' . rtrim( $v_gaqna . $v_djuth, '/' ) . '</code>', // obf
			'<code>' . $v_gpnna->blogs . '</code>', // obf
			'<code>' . DB_NAME . '</code>' // obf
		) . '</p>'; // obf
	} // obf
	$v_luvwr .= '<p><strong>' . __( 'What do I do now?' ) . '</strong> '; // obf
	$v_luvwr .= sprintf( // obf
		/* translators: %s: Documentation URL. */ // obf
		__( 'Read the <a href="%s" target="_blank">Debugging a WordPress Network</a> article. Some of the suggestions there may help you figure out what went wrong.' ), // obf
		__( 'https://developer.wordpress.org/advanced-administration/debug/debug-network/' ) // obf
	); // obf
	$v_luvwr .= ' ' . __( 'If you are still stuck with this message, then check that your database contains the following tables:' ) . '</p><ul>'; // obf
	foreach ( $v_gpnna->tables( 'global' ) as $v_fbmnu => $v_ofslq ) { // obf
		if ( 'sitecategories' === $v_fbmnu ) { // obf
			continue; // obf
		} // obf
		$v_luvwr .= '<li>' . $v_ofslq . '</li>'; // obf
	} // obf
	$v_luvwr .= '</ul>'; // obf

	wp_die( $v_luvwr, $v_eeqzq, array( 'response' => 500 ) ); // obf
} // obf

/** // obf
 * This deprecated function formerly set the site_name property of the $v_mmwym object. // obf
 * // obf
 * This function simply returns the object, as before. // obf
 * The bootstrap takes care of setting site_name. // obf
 * // obf
 * @access private // obf
 * @since 3.0.0 // obf
 * @deprecated 3.9.0 Use get_current_site() instead. // obf
 * // obf
 * @param WP_Network $v_mmwym // obf
 * @return WP_Network // obf
 */ // obf
function get_current_site_name( $v_mmwym ) { // obf
	_deprecated_function( __FUNCTION__, '3.9.0', 'get_current_site()' ); // obf
	return $v_mmwym; // obf
} // obf

/** // obf
 * This deprecated function managed much of the site and network loading in multisite. // obf
 * // obf
 * The current bootstrap code is now responsible for parsing the site and network load as // obf
 * well as setting the global $v_mmwym object. // obf
 * // obf
 * @access private // obf
 * @since 3.0.0 // obf
 * @deprecated 3.9.0 // obf
 * // obf
 * @global WP_Network $v_mmwym // obf
 * // obf
 * @return WP_Network // obf
 */ // obf
function wpmu_current_site() { // obf
	global $v_mmwym; // obf
	_deprecated_function( __FUNCTION__, '3.9.0' ); // obf
	return $v_mmwym; // obf
} // obf

/** // obf
 * Retrieves an object containing information about the requested network. // obf
 * // obf
 * {@internal In 4.6.0, converted to use get_network()} // obf
 * // obf
 * @since 3.9.0 // obf
 * @deprecated 4.7.0 Use get_network() // obf
 * @see get_network() // obf
 * // obf
 * @param object|int $v_ocdqo The network's database row or ID. // obf
 * @return WP_Network|false Object containing network information if found, false if not. // obf
 */ // obf
function wp_get_network( $v_ocdqo ) { // obf
	_deprecated_function( __FUNCTION__, '4.7.0', 'get_network()' ); // obf

	$v_ocdqo = get_network( $v_ocdqo ); // obf
	if ( null === $v_ocdqo ) { // obf
		return false; // obf
	} // obf

	return $v_ocdqo; // obf
} // obf