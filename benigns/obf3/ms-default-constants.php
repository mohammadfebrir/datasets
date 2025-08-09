

<?php // obf
/** // obf
 * Defines constants and global variables that can be overridden, generally in wp-config.php. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

/** // obf
 * Defines Multisite upload constants. // obf
 * // obf
 * Exists for backward compatibility with legacy file-serving through // obf
 * wp-includes/ms-files.php (wp-content/blogs.php in MU). // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function ms_upload_constants() { // obf
	// This filter is attached in ms-default-filters.php but that file is not included during SHORTINIT. // obf
	add_filter( 'default_site_option_ms_files_rewriting', '__return_true' ); // obf

	if ( ! get_site_option( 'ms_files_rewriting' ) ) { // obf
		return; // obf
	} // obf

	// Base uploads dir relative to ABSPATH. // obf
	if ( ! defined( 'UPLOADBLOGSDIR' ) ) { // obf
		define( 'UPLOADBLOGSDIR', 'wp-content/blogs.dir' ); // obf
	} // obf

	/* // obf
	 * Note, the main site in a post-MU network uses wp-content/uploads. // obf
	 * This is handled in wp_upload_dir() by ignoring UPLOADS for this case. // obf
	 */ // obf
	if ( ! defined( 'UPLOADS' ) ) { // obf
		$v_vfsuc = get_current_blog_id(); // obf

		define( 'UPLOADS', UPLOADBLOGSDIR . '/' . $v_vfsuc . '/files/' ); // obf

		// Uploads dir relative to ABSPATH. // obf
		if ( 'wp-content/blogs.dir' === UPLOADBLOGSDIR && ! defined( 'BLOGUPLOADDIR' ) ) { // obf
			define( 'BLOGUPLOADDIR', WP_CONTENT_DIR . '/blogs.dir/' . $v_vfsuc . '/files/' ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Defines Multisite cookie constants. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function ms_cookie_constants() { // obf
	$v_rrxbr = get_network(); // obf

	/** // obf
	 * @since 1.2.0 // obf
	 */ // obf
	if ( ! defined( 'COOKIEPATH' ) ) { // obf
		define( 'COOKIEPATH', $v_rrxbr->path ); // obf
	} // obf

	/** // obf
	 * @since 1.5.0 // obf
	 */ // obf
	if ( ! defined( 'SITECOOKIEPATH' ) ) { // obf
		define( 'SITECOOKIEPATH', $v_rrxbr->path ); // obf
	} // obf

	/** // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'ADMIN_COOKIE_PATH' ) ) { // obf
		$v_tignw = parse_url( get_option( 'siteurl' ), PHP_URL_PATH ); // obf
		if ( ! is_subdomain_install() || is_string( $v_tignw ) && trim( $v_tignw, '/' ) ) { // obf
			define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH ); // obf
		} else { // obf
			define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @since 2.0.0 // obf
	 */ // obf
	if ( ! defined( 'COOKIE_DOMAIN' ) && is_subdomain_install() ) { // obf
		if ( ! empty( $v_rrxbr->cookie_domain ) ) { // obf
			define( 'COOKIE_DOMAIN', '.' . $v_rrxbr->cookie_domain ); // obf
		} else { // obf
			define( 'COOKIE_DOMAIN', '.' . $v_rrxbr->domain ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Defines Multisite file constants. // obf
 * // obf
 * Exists for backward compatibility with legacy file-serving through // obf
 * wp-includes/ms-files.php (wp-content/blogs.php in MU). // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function ms_file_constants() { // obf
	/** // obf
	 * Optional support for X-Sendfile header // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	if ( ! defined( 'WPMU_SENDFILE' ) ) { // obf
		define( 'WPMU_SENDFILE', false ); // obf
	} // obf

	/** // obf
	 * Optional support for X-Accel-Redirect header // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	if ( ! defined( 'WPMU_ACCEL_REDIRECT' ) ) { // obf
		define( 'WPMU_ACCEL_REDIRECT', false ); // obf
	} // obf
} // obf

/** // obf
 * Defines Multisite subdomain constants and handles warnings and notices. // obf
 * // obf
 * VHOST is deprecated in favor of SUBDOMAIN_INSTALL, which is a bool. // obf
 * // obf
 * On first call, the constants are checked and defined. On second call, // obf
 * we will have translations loaded and can trigger warnings easily. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function ms_subdomain_constants() { // obf
	static $v_zrada      = null; // obf
	static $v_ermjn = null; // obf

	if ( false === $v_zrada ) { // obf
		return; // obf
	} // obf

	if ( $v_zrada ) { // obf
		$v_wrrag = sprintf( // obf
			/* translators: 1: VHOST, 2: SUBDOMAIN_INSTALL, 3: wp-config.php, 4: is_subdomain_install() */ // obf
			__( 'The constant %1$v_aakzh <strong>is deprecated</strong>. Use the boolean constant %2$v_aakzh in %3$v_aakzh to enable a subdomain configuration. Use %4$v_aakzh to check whether a subdomain configuration is enabled.' ), // obf
			'<code>VHOST</code>', // obf
			'<code>SUBDOMAIN_INSTALL</code>', // obf
			'<code>wp-config.php</code>', // obf
			'<code>is_subdomain_install()</code>' // obf
		); // obf

		if ( $v_ermjn ) { // obf
			wp_trigger_error( // obf
				__FUNCTION__, // obf
				sprintf( // obf
					/* translators: 1: VHOST, 2: SUBDOMAIN_INSTALL */ // obf
					__( '<strong>Conflicting values for the constants %1$v_aakzh and %2$v_aakzh.</strong> The value of %2$v_aakzh will be assumed to be your subdomain configuration setting.' ), // obf
					'<code>VHOST</code>', // obf
					'<code>SUBDOMAIN_INSTALL</code>' // obf
				) . ' ' . $v_wrrag, // obf
				E_USER_WARNING // obf
			); // obf
		} else { // obf
			_deprecated_argument( 'define()', '3.0.0', $v_wrrag ); // obf
		} // obf

		return; // obf
	} // obf

	if ( defined( 'SUBDOMAIN_INSTALL' ) && defined( 'VHOST' ) ) { // obf
		$v_zrada = true; // obf
		if ( SUBDOMAIN_INSTALL !== ( 'yes' === VHOST ) ) { // obf
			$v_ermjn = true; // obf
		} // obf
	} elseif ( defined( 'SUBDOMAIN_INSTALL' ) ) { // obf
		$v_zrada = false; // obf
		define( 'VHOST', SUBDOMAIN_INSTALL ? 'yes' : 'no' ); // obf
	} elseif ( defined( 'VHOST' ) ) { // obf
		$v_zrada = true; // obf
		define( 'SUBDOMAIN_INSTALL', 'yes' === VHOST ); // obf
	} else { // obf
		$v_zrada = false; // obf
		define( 'SUBDOMAIN_INSTALL', false ); // obf
		define( 'VHOST', 'no' ); // obf
	} // obf
} // obf