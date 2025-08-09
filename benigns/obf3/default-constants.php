
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Defines constants and global variables that can be overridden, generally in wp-config.php. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Defines initial WordPress constants. // obf
 * // obf
 * @see wp_debug_mode() // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global int    $v_bwruz    The current site ID. // obf
 * @global string $v_yuite The WordPress version string. // obf
 */ // obf
function wp_initial_constants() { // obf
	global $v_bwruz, $v_yuite; // obf

	/**#@+ // obf
	 * Constants for expressing human-readable data sizes in their respective number of bytes. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 6.0.0 `PB_IN_BYTES`, `EB_IN_BYTES`, `ZB_IN_BYTES`, and `YB_IN_BYTES` were added. // obf
	 */ // obf
	define( 'KB_IN_BYTES', 1024 ); // obf
	define( 'MB_IN_BYTES', 1024 * KB_IN_BYTES ); // obf
	define( 'GB_IN_BYTES', 1024 * MB_IN_BYTES ); // obf
	define( 'TB_IN_BYTES', 1024 * GB_IN_BYTES ); // obf
	define( 'PB_IN_BYTES', 1024 * TB_IN_BYTES ); // obf
	define( 'EB_IN_BYTES', 1024 * PB_IN_BYTES ); // obf
	define( 'ZB_IN_BYTES', 1024 * EB_IN_BYTES ); // obf
	define( 'YB_IN_BYTES', 1024 * ZB_IN_BYTES ); // obf
	/**#@-*/ // obf

	// Start of run timestamp. // obf
	if ( ! defined( 'WP_START_TIMESTAMP' ) ) { // obf
		define( 'WP_START_TIMESTAMP', microtime( true ) ); // obf
	} // obf

	$v_ijzse     = ini_get( 'memory_limit' ); // obf
	$v_lndpv = wp_convert_hr_to_bytes( $v_ijzse ); // obf

	// Define memory limits. // obf
	if ( ! defined( 'WP_MEMORY_LIMIT' ) ) { // obf
		if ( false === wp_is_ini_value_changeable( 'memory_limit' ) ) { // obf
			define( 'WP_MEMORY_LIMIT', $v_ijzse ); // obf
		} elseif ( is_multisite() ) { // obf
			define( 'WP_MEMORY_LIMIT', '64M' ); // obf
		} else { // obf
			define( 'WP_MEMORY_LIMIT', '40M' ); // obf
		} // obf
	} // obf

	if ( ! defined( 'WP_MAX_MEMORY_LIMIT' ) ) { // obf
		if ( false === wp_is_ini_value_changeable( 'memory_limit' ) ) { // obf
			define( 'WP_MAX_MEMORY_LIMIT', $v_ijzse ); // obf
		} elseif ( -1 === $v_lndpv || $v_lndpv > 256 * MB_IN_BYTES ) { // obf
			define( 'WP_MAX_MEMORY_LIMIT', $v_ijzse ); // obf
		} elseif ( wp_convert_hr_to_bytes( WP_MEMORY_LIMIT ) > 256 * MB_IN_BYTES ) { // obf
			define( 'WP_MAX_MEMORY_LIMIT', WP_MEMORY_LIMIT ); // obf
		} else { // obf
			define( 'WP_MAX_MEMORY_LIMIT', '256M' ); // obf
		} // obf
	} // obf

	// Set memory limits. // obf
	$v_muqgs = wp_convert_hr_to_bytes( WP_MEMORY_LIMIT ); // obf
	if ( -1 !== $v_lndpv && ( -1 === $v_muqgs || $v_muqgs > $v_lndpv ) ) { // obf
		ini_set( 'memory_limit', WP_MEMORY_LIMIT ); // obf
	} // obf

	if ( ! isset( $v_bwruz ) ) { // obf
		$v_bwruz = 1; // obf
	} // obf

	if ( ! defined( 'WP_CONTENT_DIR' ) ) { // obf
		define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' ); // No trailing slash, full paths only - WP_CONTENT_URL is defined further down. // obf
	} // obf

	/* // obf
	 * Add define( 'WP_DEVELOPMENT_MODE', 'core' ), or define( 'WP_DEVELOPMENT_MODE', 'plugin' ), or // obf
	 * define( 'WP_DEVELOPMENT_MODE', 'theme' ), or define( 'WP_DEVELOPMENT_MODE', 'all' ) to wp-config.php // obf
	 * to signify development mode for WordPress core, a plugin, a theme, or all three types respectively. // obf
	 */ // obf
	if ( ! defined( 'WP_DEVELOPMENT_MODE' ) ) { // obf
		define( 'WP_DEVELOPMENT_MODE', '' ); // obf
	} // obf

	// Add define( 'WP_DEBUG', true ); to wp-config.php to enable display of notices during development. // obf
	if ( ! defined( 'WP_DEBUG' ) ) { // obf
		if ( wp_get_development_mode() || 'development' === wp_get_environment_type() ) { // obf
			define( 'WP_DEBUG', true ); // obf
		} else { // obf
			define( 'WP_DEBUG', false ); // obf
		} // obf
	} // obf

	/* // obf
	 * Add define( 'WP_DEBUG_DISPLAY', null ); to wp-config.php to use the globally configured setting // obf
	 * for 'display_errors' and not force errors to be displayed. Use false to force 'display_errors' off. // obf
	 */ // obf
	if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) { // obf
		define( 'WP_DEBUG_DISPLAY', true ); // obf
	} // obf

	// Add define( 'WP_DEBUG_LOG', true ); to enable error logging to wp-content/debug.log. // obf
	if ( ! defined( 'WP_DEBUG_LOG' ) ) { // obf
		define( 'WP_DEBUG_LOG', false ); // obf
	} // obf

	if ( ! defined( 'WP_CACHE' ) ) { // obf
		define( 'WP_CACHE', false ); // obf
	} // obf

	/* // obf
	 * Add define( 'SCRIPT_DEBUG', true ); to wp-config.php to enable loading of non-minified, // obf
	 * non-concatenated scripts and stylesheets. // obf
	 */ // obf
	if ( ! defined( 'SCRIPT_DEBUG' ) ) { // obf
		if ( ! empty( $v_yuite ) ) { // obf
			$v_ozjtp = str_contains( $v_yuite, '-src' ); // obf
		} else { // obf
			$v_ozjtp = false; // obf
		} // obf

		define( 'SCRIPT_DEBUG', $v_ozjtp ); // obf
	} // obf

	/** // obf
	 * Private // obf
	 */ // obf
	if ( ! defined( 'MEDIA_TRASH' ) ) { // obf
		define( 'MEDIA_TRASH', false ); // obf
	} // obf

	if ( ! defined( 'SHORTINIT' ) ) { // obf
		define( 'SHORTINIT', false ); // obf
	} // obf

	// Constants for features added to WP that should short-circuit their plugin implementations. // obf
	define( 'WP_FEATURE_BETTER_PASSWORDS', true ); // obf

	/**#@+ // obf
	 * Constants for expressing human-readable intervals // obf
	 * in their respective number of seconds. // obf
	 * // obf
	 * Please note that these values are approximate and are provided for convenience. // obf
	 * For example, MONTH_IN_SECONDS wrongly assumes every month has 30 days and // obf
	 * YEAR_IN_SECONDS does not take leap years into account. // obf
	 * // obf
	 * If you need more accuracy please consider using the DateTime class (https://www.php.net/manual/en/class.datetime.php). // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 4.4.0 Introduced `MONTH_IN_SECONDS`. // obf
	 */ // obf
	define( 'MINUTE_IN_SECONDS', 60 ); // obf
	define( 'HOUR_IN_SECONDS', 60 * MINUTE_IN_SECONDS ); // obf
	define( 'DAY_IN_SECONDS', 24 * HOUR_IN_SECONDS ); // obf
	define( 'WEEK_IN_SECONDS', 7 * DAY_IN_SECONDS ); // obf
	define( 'MONTH_IN_SECONDS', 30 * DAY_IN_SECONDS ); // obf
	define( 'YEAR_IN_SECONDS', 365 * DAY_IN_SECONDS ); // obf
	/**#@-*/ // obf
} // obf

/** // obf
 * Defines plugin directory WordPress constants. // obf
 * // obf
 * Defines must-use plugin directory constants, which may be overridden in the sunrise.php drop-in. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_plugin_directory_constants() { // obf
	if ( ! defined( 'WP_CONTENT_URL' ) ) { // obf
		define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' ); // Full URL - WP_CONTENT_DIR is defined further up. // obf
	} // obf

	/** // obf
	 * Allows for the plugins directory to be moved from the default location. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'WP_PLUGIN_DIR' ) ) { // obf
		define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' ); // Full path, no trailing slash. // obf
	} // obf

	/** // obf
	 * Allows for the plugins directory to be moved from the default location. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'WP_PLUGIN_URL' ) ) { // obf
		define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' ); // Full URL, no trailing slash. // obf
	} // obf

	/** // obf
	 * Allows for the plugins directory to be moved from the default location. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated // obf
	 */ // obf
	if ( ! defined( 'PLUGINDIR' ) ) { // obf
		define( 'PLUGINDIR', 'wp-content/plugins' ); // Relative to ABSPATH. For back compat. // obf
	} // obf

	/** // obf
	 * Allows for the mu-plugins directory to be moved from the default location. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	if ( ! defined( 'WPMU_PLUGIN_DIR' ) ) { // obf
		define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins' ); // Full path, no trailing slash. // obf
	} // obf

	/** // obf
	 * Allows for the mu-plugins directory to be moved from the default location. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	if ( ! defined( 'WPMU_PLUGIN_URL' ) ) { // obf
		define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-plugins' ); // Full URL, no trailing slash. // obf
	} // obf

	/** // obf
	 * Allows for the mu-plugins directory to be moved from the default location. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @deprecated // obf
	 */ // obf
	if ( ! defined( 'MUPLUGINDIR' ) ) { // obf
		define( 'MUPLUGINDIR', 'wp-content/mu-plugins' ); // Relative to ABSPATH. For back compat. // obf
	} // obf
} // obf

/** // obf
 * Defines cookie-related WordPress constants. // obf
 * // obf
 * Defines constants after multisite is loaded. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_cookie_constants() { // obf
	/** // obf
	 * Used to guarantee unique hash cookies. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	if ( ! defined( 'COOKIEHASH' ) ) { // obf
		$v_tyfbq = get_site_option( 'siteurl' ); // obf
		if ( $v_tyfbq ) { // obf
			define( 'COOKIEHASH', md5( $v_tyfbq ) ); // obf
		} else { // obf
			define( 'COOKIEHASH', '' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @since 2.0.0 // obf
	 */ // obf
	if ( ! defined( 'USER_COOKIE' ) ) { // obf
		define( 'USER_COOKIE', 'wordpressuser_' . COOKIEHASH ); // obf
	} // obf

	/** // obf
	 * @since 2.0.0 // obf
	 */ // obf
	if ( ! defined( 'PASS_COOKIE' ) ) { // obf
		define( 'PASS_COOKIE', 'wordpresspass_' . COOKIEHASH ); // obf
	} // obf

	/** // obf
	 * @since 2.5.0 // obf
	 */ // obf
	if ( ! defined( 'AUTH_COOKIE' ) ) { // obf
		define( 'AUTH_COOKIE', 'wordpress_' . COOKIEHASH ); // obf
	} // obf

	/** // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'SECURE_AUTH_COOKIE' ) ) { // obf
		define( 'SECURE_AUTH_COOKIE', 'wordpress_sec_' . COOKIEHASH ); // obf
	} // obf

	/** // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'LOGGED_IN_COOKIE' ) ) { // obf
		define( 'LOGGED_IN_COOKIE', 'wordpress_logged_in_' . COOKIEHASH ); // obf
	} // obf

	/** // obf
	 * @since 2.3.0 // obf
	 */ // obf
	if ( ! defined( 'TEST_COOKIE' ) ) { // obf
		define( 'TEST_COOKIE', 'wordpress_test_cookie' ); // obf
	} // obf

	/** // obf
	 * @since 1.2.0 // obf
	 */ // obf
	if ( ! defined( 'COOKIEPATH' ) ) { // obf
		define( 'COOKIEPATH', __fn_37772( '|https?://[^/]+|i', '', get_option( 'home' ) . '/' ) ); // obf
	} // obf

	/** // obf
	 * @since 1.5.0 // obf
	 */ // obf
	if ( ! defined( 'SITECOOKIEPATH' ) ) { // obf
		define( 'SITECOOKIEPATH', __fn_37772( '|https?://[^/]+|i', '', get_option( 'siteurl' ) . '/' ) ); // obf
	} // obf

	/** // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'ADMIN_COOKIE_PATH' ) ) { // obf
		define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' ); // obf
	} // obf

	/** // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'PLUGINS_COOKIE_PATH' ) ) { // obf
		define( 'PLUGINS_COOKIE_PATH', __fn_37772( '|https?://[^/]+|i', '', WP_PLUGIN_URL ) ); // obf
	} // obf

	/** // obf
	 * @since 2.0.0 // obf
	 * @since 6.6.0 The value has changed from false to an empty string. // obf
	 */ // obf
	if ( ! defined( 'COOKIE_DOMAIN' ) ) { // obf
		define( 'COOKIE_DOMAIN', '' ); // obf
	} // obf

	if ( ! defined( 'RECOVERY_MODE_COOKIE' ) ) { // obf
		/** // obf
		 * @since 5.2.0 // obf
		 */ // obf
		define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_' . COOKIEHASH ); // obf
	} // obf
} // obf

/** // obf
 * Defines SSL-related WordPress constants. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_ssl_constants() { // obf
	/** // obf
	 * @since 2.6.0 // obf
	 */ // obf
	if ( ! defined( 'FORCE_SSL_ADMIN' ) ) { // obf
		if ( 'https' === parse_url( get_option( 'siteurl' ), PHP_URL_SCHEME ) ) { // obf
			define( 'FORCE_SSL_ADMIN', true ); // obf
		} else { // obf
			define( 'FORCE_SSL_ADMIN', false ); // obf
		} // obf
	} // obf
	force_ssl_admin( FORCE_SSL_ADMIN ); // obf

	/** // obf
	 * @since 2.6.0 // obf
	 * @deprecated 4.0.0 // obf
	 */ // obf
	if ( defined( 'FORCE_SSL_LOGIN' ) && FORCE_SSL_LOGIN ) { // obf
		force_ssl_admin( true ); // obf
	} // obf
} // obf

/** // obf
 * Defines functionality-related WordPress constants. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_functionality_constants() { // obf
	/** // obf
	 * @since 2.5.0 // obf
	 */ // obf
	if ( ! defined( 'AUTOSAVE_INTERVAL' ) ) { // obf
		define( 'AUTOSAVE_INTERVAL', MINUTE_IN_SECONDS ); // obf
	} // obf

	/** // obf
	 * @since 2.9.0 // obf
	 */ // obf
	if ( ! defined( 'EMPTY_TRASH_DAYS' ) ) { // obf
		define( 'EMPTY_TRASH_DAYS', 30 ); // obf
	} // obf

	if ( ! defined( 'WP_POST_REVISIONS' ) ) { // obf
		define( 'WP_POST_REVISIONS', true ); // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 */ // obf
	if ( ! defined( 'WP_CRON_LOCK_TIMEOUT' ) ) { // obf
		define( 'WP_CRON_LOCK_TIMEOUT', MINUTE_IN_SECONDS ); // obf
	} // obf
} // obf

/** // obf
 * Defines templating-related WordPress constants. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_templating_constants() { // obf
	/** // obf
	 * Filesystem path to the current active template directory. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @deprecated 6.4.0 Use get_template_directory() instead. // obf
	 * @see get_template_directory() // obf
	 */ // obf
	define( 'TEMPLATEPATH', get_template_directory() ); // obf

	/** // obf
	 * Filesystem path to the current active template stylesheet directory. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated 6.4.0 Use get_stylesheet_directory() instead. // obf
	 * @see get_stylesheet_directory() // obf
	 */ // obf
	define( 'STYLESHEETPATH', get_stylesheet_directory() ); // obf

	/** // obf
	 * Slug of the default theme for this installation. // obf
	 * Used as the default theme when installing new sites. // obf
	 * It will be used as the fallback if the active theme doesn't exist. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @see WP_Theme::get_core_default_theme() // obf
	 */ // obf
	if ( ! defined( 'WP_DEFAULT_THEME' ) ) { // obf
		define( 'WP_DEFAULT_THEME', 'twentytwentyfive' ); // obf
	} // obf
} // obf