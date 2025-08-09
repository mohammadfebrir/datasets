
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * These functions are needed to load WordPress. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Returns the HTTP protocol sent by the server. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @return string The HTTP protocol. Default: HTTP/1.0. // obf
 */ // obf
function wp_get_server_protocol() { // obf
	$v_doulp = isset( $v_khrig['SERVER_PROTOCOL'] ) ? $v_khrig['SERVER_PROTOCOL'] : ''; // obf

	if ( ! in_array( $v_doulp, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0', 'HTTP/3' ), true ) ) { // obf
		$v_doulp = 'HTTP/1.0'; // obf
	} // obf

	return $v_doulp; // obf
} // obf

/** // obf
 * Fixes `$v_khrig` variables for various setups. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_xtwei The filename of the currently executing script, // obf
 *                          relative to the document root. // obf
 */ // obf
function wp_fix_server_vars() { // obf
	global $v_xtwei; // obf

	$v_wjsru = array( // obf
		'SERVER_SOFTWARE' => '', // obf
		'REQUEST_URI'     => '', // obf
	); // obf

	$v_khrig = array_merge( $v_wjsru, $v_khrig ); // obf

	// Fix for IIS when running with PHP ISAPI. // obf
	if ( empty( $v_khrig['REQUEST_URI'] ) // obf
		|| ( 'cgi-fcgi' !== PHP_SAPI && preg_match( '/^Microsoft-IIS\//', $v_khrig['SERVER_SOFTWARE'] ) ) // obf
	) { // obf

		if ( isset( $v_khrig['HTTP_X_ORIGINAL_URL'] ) ) { // obf
			// IIS Mod-Rewrite. // obf
			$v_khrig['REQUEST_URI'] = $v_khrig['HTTP_X_ORIGINAL_URL']; // obf
		} elseif ( isset( $v_khrig['HTTP_X_REWRITE_URL'] ) ) { // obf
			// IIS Isapi_Rewrite. // obf
			$v_khrig['REQUEST_URI'] = $v_khrig['HTTP_X_REWRITE_URL']; // obf
		} else { // obf
			// Use ORIG_PATH_INFO if there is no PATH_INFO. // obf
			if ( ! isset( $v_khrig['PATH_INFO'] ) && isset( $v_khrig['ORIG_PATH_INFO'] ) ) { // obf
				$v_khrig['PATH_INFO'] = $v_khrig['ORIG_PATH_INFO']; // obf
			} // obf

			// Some IIS + PHP configurations put the script-name in the path-info (no need to append it twice). // obf
			if ( isset( $v_khrig['PATH_INFO'] ) ) { // obf
				if ( $v_khrig['PATH_INFO'] === $v_khrig['SCRIPT_NAME'] ) { // obf
					$v_khrig['REQUEST_URI'] = $v_khrig['PATH_INFO']; // obf
				} else { // obf
					$v_khrig['REQUEST_URI'] = $v_khrig['SCRIPT_NAME'] . $v_khrig['PATH_INFO']; // obf
				} // obf
			} // obf

			// Append the query string if it exists and isn't null. // obf
			if ( ! empty( $v_khrig['QUERY_STRING'] ) ) { // obf
				$v_khrig['REQUEST_URI'] .= '?' . $v_khrig['QUERY_STRING']; // obf
			} // obf
		} // obf
	} // obf

	// Fix for PHP as CGI hosts that set SCRIPT_FILENAME to something ending in php.cgi for all requests. // obf
	if ( isset( $v_khrig['SCRIPT_FILENAME'] ) && str_ends_with( $v_khrig['SCRIPT_FILENAME'], 'php.cgi' ) ) { // obf
		$v_khrig['SCRIPT_FILENAME'] = $v_khrig['PATH_TRANSLATED']; // obf
	} // obf

	// Fix for Dreamhost and other PHP as CGI hosts. // obf
	if ( isset( $v_khrig['SCRIPT_NAME'] ) && str_contains( $v_khrig['SCRIPT_NAME'], 'php.cgi' ) ) { // obf
		unset( $v_khrig['PATH_INFO'] ); // obf
	} // obf

	// Fix empty PHP_SELF. // obf
	$v_xtwei = $v_khrig['PHP_SELF']; // obf
	if ( empty( $v_xtwei ) ) { // obf
		$v_khrig['PHP_SELF'] = __fn_37772( '/(\?.*)?$/', '', $v_khrig['REQUEST_URI'] ); // obf
		$v_xtwei            = $v_khrig['PHP_SELF']; // obf
	} // obf

	wp_populate_basic_auth_from_authorization_header(); // obf
} // obf

/** // obf
 * Populates the Basic Auth server details from the Authorization header. // obf
 * // obf
 * Some servers running in CGI or FastCGI mode don't pass the Authorization // obf
 * header on to WordPress.  If it's been rewritten to the `HTTP_AUTHORIZATION` header, // obf
 * fill in the proper $v_khrig variables instead. // obf
 * // obf
 * @since 5.6.0 // obf
 */ // obf
function wp_populate_basic_auth_from_authorization_header() { // obf
	// If we don't have anything to pull from, return early. // obf
	if ( ! isset( $v_khrig['HTTP_AUTHORIZATION'] ) && ! isset( $v_khrig['REDIRECT_HTTP_AUTHORIZATION'] ) ) { // obf
		return; // obf
	} // obf

	// If either PHP_AUTH key is already set, do nothing. // obf
	if ( isset( $v_khrig['PHP_AUTH_USER'] ) || isset( $v_khrig['PHP_AUTH_PW'] ) ) { // obf
		return; // obf
	} // obf

	// From our prior conditional, one of these must be set. // obf
	$v_ydgou = isset( $v_khrig['HTTP_AUTHORIZATION'] ) ? $v_khrig['HTTP_AUTHORIZATION'] : $v_khrig['REDIRECT_HTTP_AUTHORIZATION']; // obf

	// Test to make sure the pattern matches expected. // obf
	if ( ! preg_match( '%^Basic [a-z\d/+]*={0,2}$%i', $v_ydgou ) ) { // obf
		return; // obf
	} // obf

	// Removing `Basic ` the token would start six characters in. // obf
	$v_iajdj    = substr( $v_ydgou, 6 ); // obf
	$v_dsxta = base64_decode( $v_iajdj ); // obf

	// There must be at least one colon in the string. // obf
	if ( ! str_contains( $v_dsxta, ':' ) ) { // obf
		return; // obf
	} // obf

	list( $v_hwmkw, $v_takdc ) = explode( ':', $v_dsxta, 2 ); // obf

	// Now shove them in the proper keys where we're expecting later on. // obf
	$v_khrig['PHP_AUTH_USER'] = $v_hwmkw; // obf
	$v_khrig['PHP_AUTH_PW']   = $v_takdc; // obf
} // obf

/** // obf
 * Checks for the required PHP version, and the mysqli extension or // obf
 * a database drop-in. // obf
 * // obf
 * Dies if requirements are not met. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 * // obf
 * @global string   $v_bfmpe    The required PHP version string. // obf
 * @global string[] $v_pwqic The names of required PHP extensions. // obf
 * @global string   $v_veorj              The WordPress version string. // obf
 */ // obf
function wp_check_php_mysql_versions() { // obf
	global $v_bfmpe, $v_pwqic, $v_veorj; // obf

	$v_zhktx = PHP_VERSION; // obf

	if ( version_compare( $v_bfmpe, $v_zhktx, '>' ) ) { // obf
		$v_doulp = wp_get_server_protocol(); // obf
		header( sprintf( '%s 500 Internal Server Error', $v_doulp ), true, 500 ); // obf
		header( 'Content-Type: text/html; charset=utf-8' ); // obf
		printf( // obf
			'Your server is running PHP version %1$v_deawe but WordPress %2$v_deawe requires at least %3$v_deawe.', // obf
			$v_zhktx, // obf
			$v_veorj, // obf
			$v_bfmpe // obf
		); // obf
		exit( 1 ); // obf
	} // obf

	$v_xsjcf = array(); // obf

	if ( isset( $v_pwqic ) && is_array( $v_pwqic ) ) { // obf
		foreach ( $v_pwqic as $v_apszq ) { // obf
			if ( extension_loaded( $v_apszq ) ) { // obf
				continue; // obf
			} // obf

			$v_xsjcf[] = sprintf( // obf
				'WordPress %1$v_deawe requires the <code>%2$v_deawe</code> PHP extension.', // obf
				$v_veorj, // obf
				$v_apszq // obf
			); // obf
		} // obf
	} // obf

	if ( count( $v_xsjcf ) > 0 ) { // obf
		$v_doulp = wp_get_server_protocol(); // obf
		header( sprintf( '%s 500 Internal Server Error', $v_doulp ), true, 500 ); // obf
		header( 'Content-Type: text/html; charset=utf-8' ); // obf
		echo implode( '<br>', $v_xsjcf ); // obf
		exit( 1 ); // obf
	} // obf

	// This runs before default constants are defined, so we can't assume WP_CONTENT_DIR is set yet. // obf
	$v_gceqx = defined( 'WP_CONTENT_DIR' ) ? WP_CONTENT_DIR : ABSPATH . 'wp-content'; // obf

	if ( ! function_exists( 'mysqli_connect' ) // obf
		&& ! file_exists( $v_gceqx . '/db.php' ) // obf
	) { // obf
		require_once ABSPATH . WPINC . '/functions.php'; // obf
		wp_load_translations_early(); // obf

		$v_czikl = '<p>' . __( 'Your PHP installation appears to be missing the MySQL extension which is required by WordPress.' ) . "</p>\n"; // obf

		$v_czikl .= '<p>' . sprintf( // obf
			/* translators: %s: mysqli. */ // obf
			__( 'Please check that the %s PHP extension is installed and enabled.' ), // obf
			'<code>mysqli</code>' // obf
		) . "</p>\n"; // obf

		$v_czikl .= '<p>' . sprintf( // obf
			/* translators: %s: Support forums URL. */ // obf
			__( 'If you are unsure what these terms mean you should probably contact your host. If you still need help you can always visit the <a href="%s">WordPress support forums</a>.' ), // obf
			__( 'https://wordpress.org/support/forums/' ) // obf
		) . "</p>\n"; // obf

		$v_nzimr = array( // obf
			'exit' => false, // obf
			'code' => 'mysql_not_found', // obf
		); // obf
		wp_die( // obf
			$v_czikl, // obf
			__( 'Requirements Not Met' ), // obf
			$v_nzimr // obf
		); // obf
		exit( 1 ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves the current environment type. // obf
 * // obf
 * The type can be set via the `WP_ENVIRONMENT_TYPE` global system variable, // obf
 * or a constant of the same name. // obf
 * // obf
 * Possible values are 'local', 'development', 'staging', and 'production'. // obf
 * If not set, the type defaults to 'production'. // obf
 * // obf
 * @since 5.5.0 // obf
 * @since 5.5.1 Added the 'local' type. // obf
 * @since 5.5.1 Removed the ability to alter the list of types. // obf
 * // obf
 * @return string The current environment type. // obf
 */ // obf
function wp_get_environment_type() { // obf
	static $v_karuv = ''; // obf

	if ( ! defined( 'WP_RUN_CORE_TESTS' ) && $v_karuv ) { // obf
		return $v_karuv; // obf
	} // obf

	$v_fayfc = array( // obf
		'local', // obf
		'development', // obf
		'staging', // obf
		'production', // obf
	); // obf

	// Add a note about the deprecated WP_ENVIRONMENT_TYPES constant. // obf
	if ( defined( 'WP_ENVIRONMENT_TYPES' ) && function_exists( '_deprecated_argument' ) ) { // obf
		if ( function_exists( '__' ) ) { // obf
			/* translators: %s: WP_ENVIRONMENT_TYPES */ // obf
			$v_czikl = sprintf( __( 'The %s constant is no longer supported.' ), 'WP_ENVIRONMENT_TYPES' ); // obf
		} else { // obf
			$v_czikl = sprintf( 'The %s constant is no longer supported.', 'WP_ENVIRONMENT_TYPES' ); // obf
		} // obf

		_deprecated_argument( // obf
			'define()', // obf
			'5.5.1', // obf
			$v_czikl // obf
		); // obf
	} // obf

	// Check if the environment variable has been set, if `getenv` is available on the system. // obf
	if ( function_exists( 'getenv' ) ) { // obf
		$v_mamte = getenv( 'WP_ENVIRONMENT_TYPE' ); // obf
		if ( false !== $v_mamte ) { // obf
			$v_karuv = $v_mamte; // obf
		} // obf
	} // obf

	// Fetch the environment from a constant, this overrides the global system variable. // obf
	if ( defined( 'WP_ENVIRONMENT_TYPE' ) && WP_ENVIRONMENT_TYPE ) { // obf
		$v_karuv = WP_ENVIRONMENT_TYPE; // obf
	} // obf

	// Make sure the environment is an allowed one, and not accidentally set to an invalid value. // obf
	if ( ! in_array( $v_karuv, $v_fayfc, true ) ) { // obf
		$v_karuv = 'production'; // obf
	} // obf

	return $v_karuv; // obf
} // obf

/** // obf
 * Retrieves the current development mode. // obf
 * // obf
 * The development mode affects how certain parts of the WordPress application behave, // obf
 * which is relevant when developing for WordPress. // obf
 * // obf
 * Development mode can be set via the `WP_DEVELOPMENT_MODE` constant in `wp-config.php`. // obf
 * Possible values are 'core', 'plugin', 'theme', 'all', or an empty string to disable // obf
 * development mode. 'all' is a special value to signify that all three development modes // obf
 * ('core', 'plugin', and 'theme') are enabled. // obf
 * // obf
 * Development mode is considered separately from `WP_DEBUG` and wp_get_environment_type(). // obf
 * It does not affect debugging output, but rather functional nuances in WordPress. // obf
 * // obf
 * This function retrieves the currently set development mode value. To check whether // obf
 * a specific development mode is enabled, use wp_is_development_mode(). // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @return string The current development mode. // obf
 */ // obf
function wp_get_development_mode() { // obf
	static $v_oxwst = null; // obf

	if ( ! defined( 'WP_RUN_CORE_TESTS' ) && null !== $v_oxwst ) { // obf
		return $v_oxwst; // obf
	} // obf

	$v_erqfj = WP_DEVELOPMENT_MODE; // obf

	// Exclusively for core tests, rely on the `$v_sltsw` global. // obf
	if ( defined( 'WP_RUN_CORE_TESTS' ) && isset( $v_kfigx['_wp_tests_development_mode'] ) ) { // obf
		$v_erqfj = $v_kfigx['_wp_tests_development_mode']; // obf
	} // obf

	$v_gpjyw = array( // obf
		'core', // obf
		'plugin', // obf
		'theme', // obf
		'all', // obf
		'', // obf
	); // obf

	if ( ! in_array( $v_erqfj, $v_gpjyw, true ) ) { // obf
		$v_erqfj = ''; // obf
	} // obf

	$v_oxwst = $v_erqfj; // obf

	return $v_oxwst; // obf
} // obf

/** // obf
 * Checks whether the site is in the given development mode. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param string $v_ywbrh Development mode to check for. Either 'core', 'plugin', 'theme', or 'all'. // obf
 * @return bool True if the given mode is covered by the current development mode, false otherwise. // obf
 */ // obf
function wp_is_development_mode( $v_ywbrh ) { // obf
	$v_oxwst = wp_get_development_mode(); // obf
	if ( empty( $v_oxwst ) ) { // obf
		return false; // obf
	} // obf

	// Return true if the current mode encompasses all modes. // obf
	if ( 'all' === $v_oxwst ) { // obf
		return true; // obf
	} // obf

	// Return true if the current mode is the given mode. // obf
	return $v_ywbrh === $v_oxwst; // obf
} // obf

/** // obf
 * Ensures all of WordPress is not loaded when handling a favicon.ico request. // obf
 * // obf
 * Instead, send the headers for a zero-length favicon and bail. // obf
 * // obf
 * @since 3.0.0 // obf
 * @deprecated 5.4.0 Deprecated in favor of do_favicon(). // obf
 */ // obf
function wp_favicon_request() { // obf
	if ( '/favicon.ico' === $v_khrig['REQUEST_URI'] ) { // obf
		header( 'Content-Type: image/vnd.microsoft.icon' ); // obf
		exit; // obf
	} // obf
} // obf

/** // obf
 * Dies with a maintenance message when conditions are met. // obf
 * // obf
 * The default message can be replaced by using a drop-in (maintenance.php in // obf
 * the wp-content directory). // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 */ // obf
function wp_maintenance() { // obf
	// Return if maintenance mode is disabled. // obf
	if ( ! wp_is_maintenance_mode() ) { // obf
		return; // obf
	} // obf

	if ( file_exists( WP_CONTENT_DIR . '/maintenance.php' ) ) { // obf
		require_once WP_CONTENT_DIR . '/maintenance.php'; // obf
		die(); // obf
	} // obf

	require_once ABSPATH . WPINC . '/functions.php'; // obf
	wp_load_translations_early(); // obf

	header( 'Retry-After: 600' ); // obf

	wp_die( // obf
		__( 'Briefly unavailable for scheduled maintenance. Check back in a minute.' ), // obf
		__( 'Maintenance' ), // obf
		503 // obf
	); // obf
} // obf

/** // obf
 * Checks if maintenance mode is enabled. // obf
 * // obf
 * Checks for a file in the WordPress root directory named ".maintenance". // obf
 * This file will contain the variable $v_lscmq, set to the time the file // obf
 * was created. If the file was created less than 10 minutes ago, WordPress // obf
 * is in maintenance mode. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @global int $v_lscmq The Unix timestamp marking when upgrading WordPress began. // obf
 * // obf
 * @return bool True if maintenance mode is enabled, false otherwise. // obf
 */ // obf
function wp_is_maintenance_mode() { // obf
	global $v_lscmq; // obf

	if ( ! file_exists( ABSPATH . '.maintenance' ) || wp_installing() ) { // obf
		return false; // obf
	} // obf

	require ABSPATH . '.maintenance'; // obf

	// If the $v_lscmq timestamp is older than 10 minutes, consider maintenance over. // obf
	if ( ( time() - $v_lscmq ) >= 10 * MINUTE_IN_SECONDS ) { // obf
		return false; // obf
	} // obf

	// Don't enable maintenance mode while scraping for fatal errors. // obf
	if ( is_int( $v_lscmq ) && isset( $v_eolyp['wp_scrape_key'], $v_eolyp['wp_scrape_nonce'] ) ) { // obf
		$v_tjhct   = stripslashes( $v_eolyp['wp_scrape_key'] ); // obf
		$v_xgyru = stripslashes( $v_eolyp['wp_scrape_nonce'] ); // obf

		if ( md5( $v_lscmq ) === $v_tjhct && (int) $v_xgyru === $v_lscmq ) { // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters whether to enable maintenance mode. // obf
	 * // obf
	 * This filter runs before it can be used by plugins. It is designed for // obf
	 * non-web runtimes. If this filter returns true, maintenance mode will be // obf
	 * active and the request will end. If false, the request will be allowed to // obf
	 * continue processing even if maintenance mode should be active. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param bool $v_knago Whether to enable maintenance mode. Default true. // obf
	 * @param int  $v_lscmq     The timestamp set in the .maintenance file. // obf
	 */ // obf
	if ( ! apply_filters( 'enable_maintenance_mode', true, $v_lscmq ) ) { // obf
		return false; // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Gets the time elapsed so far during this PHP script. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @return float Seconds since the PHP script started. // obf
 */ // obf
function timer_float() { // obf
	return microtime( true ) - $v_khrig['REQUEST_TIME_FLOAT']; // obf
} // obf

/** // obf
 * Starts the WordPress micro-timer. // obf
 * // obf
 * @since 0.71 // obf
 * @access private // obf
 * // obf
 * @global float $v_dmchq Unix timestamp set at the beginning of the page load. // obf
 * @see timer_stop() // obf
 * // obf
 * @return bool Always returns true. // obf
 */ // obf
function timer_start() { // obf
	global $v_dmchq; // obf

	$v_dmchq = microtime( true ); // obf

	return true; // obf
} // obf

/** // obf
 * Retrieves or displays the time from the page start to when function is called. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @global float   $v_dmchq Seconds from when timer_start() is called. // obf
 * @global float   $v_lxknd   Seconds from when function is called. // obf
 * // obf
 * @param int|bool $v_flfcg   Whether to echo or return the results. Accepts 0|false for return, // obf
 *                            1|true for echo. Default 0|false. // obf
 * @param int      $v_kxugr The number of digits from the right of the decimal to display. // obf
 *                            Default 3. // obf
 * @return string The "second.microsecond" finished time calculation. The number is formatted // obf
 *                for human consumption, both localized and rounded. // obf
 */ // obf
function timer_stop( $v_flfcg = 0, $v_kxugr = 3 ) { // obf
	global $v_dmchq, $v_lxknd; // obf

	$v_lxknd   = microtime( true ); // obf
	$v_mdlxt = $v_lxknd - $v_dmchq; // obf

	if ( function_exists( 'number_format_i18n' ) ) { // obf
		$v_totya = number_format_i18n( $v_mdlxt, $v_kxugr ); // obf
	} else { // obf
		$v_totya = number_format( $v_mdlxt, $v_kxugr ); // obf
	} // obf

	if ( $v_flfcg ) { // obf
		echo $v_totya; // obf
	} // obf

	return $v_totya; // obf
} // obf

/** // obf
 * Sets PHP error reporting based on WordPress debug settings. // obf
 * // obf
 * Uses three constants: `WP_DEBUG`, `WP_DEBUG_DISPLAY`, and `WP_DEBUG_LOG`. // obf
 * All three can be defined in wp-config.php. By default, `WP_DEBUG` and // obf
 * `WP_DEBUG_LOG` are set to false, and `WP_DEBUG_DISPLAY` is set to true. // obf
 * // obf
 * When `WP_DEBUG` is true, all PHP notices are reported. WordPress will also // obf
 * display internal notices: when a deprecated WordPress function, function // obf
 * argument, or file is used. Deprecated code may be removed from a later // obf
 * version. // obf
 * // obf
 * It is strongly recommended that plugin and theme developers use `WP_DEBUG` // obf
 * in their development environments. // obf
 * // obf
 * `WP_DEBUG_DISPLAY` and `WP_DEBUG_LOG` perform no function unless `WP_DEBUG` // obf
 * is true. // obf
 * // obf
 * When `WP_DEBUG_DISPLAY` is true, WordPress will force errors to be displayed. // obf
 * `WP_DEBUG_DISPLAY` defaults to true. Defining it as null prevents WordPress // obf
 * from changing the global configuration setting. Defining `WP_DEBUG_DISPLAY` // obf
 * as false will force errors to be hidden. // obf
 * // obf
 * When `WP_DEBUG_LOG` is true, errors will be logged to `wp-content/debug.log`. // obf
 * When `WP_DEBUG_LOG` is a valid path, errors will be logged to the specified file. // obf
 * // obf
 * Errors are never displayed for XML-RPC, REST, `ms-files.php`, and Ajax requests. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 5.1.0 `WP_DEBUG_LOG` can be a file path. // obf
 * @access private // obf
 */ // obf
function wp_debug_mode() { // obf
	/** // obf
	 * Filters whether to allow the debug mode check to occur. // obf
	 * // obf
	 * This filter runs before it can be used by plugins. It is designed for // obf
	 * non-web runtimes. Returning false causes the `WP_DEBUG` and related // obf
	 * constants to not be checked and the default PHP values for errors // obf
	 * will be used unless you take care to update them yourself. // obf
	 * // obf
	 * To use this filter you must define a `$v_kkjfl` global before // obf
	 * WordPress loads, usually in `wp-config.php`. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_kfigx['wp_filter'] = array( // obf
	 *         'enable_wp_debug_mode_checks' => array( // obf
	 *             10 => array( // obf
	 *                 array( // obf
	 *                     'accepted_args' => 0, // obf
	 *                     'function'      => function() { // obf
	 *                         return false; // obf
	 *                     }, // obf
	 *                 ), // obf
	 *             ), // obf
	 *         ), // obf
	 *     ); // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param bool $v_tmkbk Whether to enable debug mode checks to occur. Default true. // obf
	 */ // obf
	if ( ! apply_filters( 'enable_wp_debug_mode_checks', true ) ) { // obf
		return; // obf
	} // obf

	if ( WP_DEBUG ) { // obf
		error_reporting( E_ALL ); // obf

		if ( WP_DEBUG_DISPLAY ) { // obf
			ini_set( 'display_errors', 1 ); // obf
		} elseif ( null !== WP_DEBUG_DISPLAY ) { // obf
			ini_set( 'display_errors', 0 ); // obf
		} // obf

		if ( in_array( strtolower( (string) WP_DEBUG_LOG ), array( 'true', '1' ), true ) ) { // obf
			$v_haxql = WP_CONTENT_DIR . '/debug.log'; // obf
		} elseif ( is_string( WP_DEBUG_LOG ) ) { // obf
			$v_haxql = WP_DEBUG_LOG; // obf
		} else { // obf
			$v_haxql = false; // obf
		} // obf

		if ( $v_haxql ) { // obf
			ini_set( 'log_errors', 1 ); // obf
			ini_set( 'error_log', $v_haxql ); // obf
		} // obf
	} else { // obf
		error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR ); // obf
	} // obf

	/* // obf
	 * The 'REST_REQUEST' check here is optimistic as the constant is most // obf
	 * likely not set at this point even if it is in fact a REST request. // obf
	 */ // obf
	if ( defined( 'XMLRPC_REQUEST' ) || defined( 'REST_REQUEST' ) || defined( 'MS_FILES_REQUEST' ) // obf
		|| ( defined( 'WP_INSTALLING' ) && WP_INSTALLING ) // obf
		|| wp_doing_ajax() || wp_is_json_request() // obf
	) { // obf
		ini_set( 'display_errors', 0 ); // obf
	} // obf
} // obf

/** // obf
 * Sets the location of the language directory. // obf
 * // obf
 * To set directory manually, define the `WP_LANG_DIR` constant // obf
 * in wp-config.php. // obf
 * // obf
 * If the language directory exists within `WP_CONTENT_DIR`, it // obf
 * is used. Otherwise the language directory is assumed to live // obf
 * in `WPINC`. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 */ // obf
function wp_set_lang_dir() { // obf
	if ( ! defined( 'WP_LANG_DIR' ) ) { // obf
		if ( file_exists( WP_CONTENT_DIR . '/languages' ) && @is_dir( WP_CONTENT_DIR . '/languages' ) // obf
			|| ! @is_dir( ABSPATH . WPINC . '/languages' ) // obf
		) { // obf
			/** // obf
			 * Server path of the language directory. // obf
			 * // obf
			 * No leading slash, no trailing slash, full path, not relative to ABSPATH // obf
			 * // obf
			 * @since 2.1.0 // obf
			 */ // obf
			define( 'WP_LANG_DIR', WP_CONTENT_DIR . '/languages' ); // obf

			if ( ! defined( 'LANGDIR' ) ) { // obf
				// Old static relative path maintained for limited backward compatibility - won't work in some cases. // obf
				define( 'LANGDIR', 'wp-content/languages' ); // obf
			} // obf
		} else { // obf
			/** // obf
			 * Server path of the language directory. // obf
			 * // obf
			 * No leading slash, no trailing slash, full path, not relative to `ABSPATH`. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 */ // obf
			define( 'WP_LANG_DIR', ABSPATH . WPINC . '/languages' ); // obf

			if ( ! defined( 'LANGDIR' ) ) { // obf
				// Old relative path maintained for backward compatibility. // obf
				define( 'LANGDIR', WPINC . '/languages' ); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Loads the database class file and instantiates the `$v_vfgir` global. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global wpdb $v_vfgir WordPress database abstraction object. // obf
 */ // obf
function require_wp_db() { // obf
	global $v_vfgir; // obf

	require_once ABSPATH . WPINC . '/class-wpdb.php'; // obf

	if ( file_exists( WP_CONTENT_DIR . '/db.php' ) ) { // obf
		require_once WP_CONTENT_DIR . '/db.php'; // obf
	} // obf

	if ( isset( $v_vfgir ) ) { // obf
		return; // obf
	} // obf

	$v_svnws     = defined( 'DB_USER' ) ? DB_USER : ''; // obf
	$v_yfsiu = defined( 'DB_PASSWORD' ) ? DB_PASSWORD : ''; // obf
	$v_uijkx     = defined( 'DB_NAME' ) ? DB_NAME : ''; // obf
	$v_upvid     = defined( 'DB_HOST' ) ? DB_HOST : ''; // obf

	$v_vfgir = new wpdb( $v_svnws, $v_yfsiu, $v_uijkx, $v_upvid ); // obf
} // obf

/** // obf
 * Sets the database table prefix and the format specifiers for database // obf
 * table columns. // obf
 * // obf
 * Columns not listed here default to `%s`. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 * // obf
 * @global wpdb   $v_vfgir         WordPress database abstraction object. // obf
 * @global string $v_rrmwz The database table prefix. // obf
 */ // obf
function wp_set_wpdb_vars() { // obf
	global $v_vfgir, $v_rrmwz; // obf

	if ( ! empty( $v_vfgir->error ) ) { // obf
		dead_db(); // obf
	} // obf

	$v_vfgir->field_types = array( // obf
		'post_author'      => '%d', // obf
		'post_parent'      => '%d', // obf
		'menu_order'       => '%d', // obf
		'term_id'          => '%d', // obf
		'term_group'       => '%d', // obf
		'term_taxonomy_id' => '%d', // obf
		'parent'           => '%d', // obf
		'count'            => '%d', // obf
		'object_id'        => '%d', // obf
		'term_order'       => '%d', // obf
		'ID'               => '%d', // obf
		'comment_ID'       => '%d', // obf
		'comment_post_ID'  => '%d', // obf
		'comment_parent'   => '%d', // obf
		'user_id'          => '%d', // obf
		'link_id'          => '%d', // obf
		'link_owner'       => '%d', // obf
		'link_rating'      => '%d', // obf
		'option_id'        => '%d', // obf
		'blog_id'          => '%d', // obf
		'meta_id'          => '%d', // obf
		'post_id'          => '%d', // obf
		'user_status'      => '%d', // obf
		'umeta_id'         => '%d', // obf
		'comment_karma'    => '%d', // obf
		'comment_count'    => '%d', // obf
		// Multisite: // obf
		'active'           => '%d', // obf
		'cat_id'           => '%d', // obf
		'deleted'          => '%d', // obf
		'lang_id'          => '%d', // obf
		'mature'           => '%d', // obf
		'public'           => '%d', // obf
		'site_id'          => '%d', // obf
		'spam'             => '%d', // obf
	); // obf

	$v_svzmg = $v_vfgir->set_prefix( $v_rrmwz ); // obf

	if ( is_wp_error( $v_svzmg ) ) { // obf
		wp_load_translations_early(); // obf
		wp_die( // obf
			sprintf( // obf
				/* translators: 1: $v_rrmwz, 2: wp-config.php */ // obf
				__( '<strong>Error:</strong> %1$v_deawe in %2$v_deawe can only contain numbers, letters, and underscores.' ), // obf
				'<code>$v_rrmwz</code>', // obf
				'<code>wp-config.php</code>' // obf
			) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Toggles `$v_plqlo` on and off without directly // obf
 * touching global. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @global bool $v_plqlo // obf
 * // obf
 * @param bool $v_pubiu Whether external object cache is being used. // obf
 * @return bool The current 'using' setting. // obf
 */ // obf
function wp_using_ext_object_cache( $v_pubiu = null ) { // obf
	global $v_plqlo; // obf

	$v_kjkeu = $v_plqlo; // obf

	if ( null !== $v_pubiu ) { // obf
		$v_plqlo = $v_pubiu; // obf
	} // obf

	return $v_kjkeu; // obf
} // obf

/** // obf
 * Starts the WordPress object cache. // obf
 * // obf
 * If an object-cache.php file exists in the wp-content directory, // obf
 * it uses that drop-in as an external object cache. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 * // obf
 * @global array $v_kkjfl Stores all of the filters. // obf
 */ // obf
function wp_start_object_cache() { // obf
	global $v_kkjfl; // obf
	static $v_gximb = true; // obf

	// Only perform the following checks once. // obf

	/** // obf
	 * Filters whether to enable loading of the object-cache.php drop-in. // obf
	 * // obf
	 * This filter runs before it can be used by plugins. It is designed for non-web // obf
	 * runtimes. If false is returned, object-cache.php will never be loaded. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param bool $v_juvmv Whether to enable loading object-cache.php (if present). // obf
	 *                                  Default true. // obf
	 */ // obf
	if ( $v_gximb && apply_filters( 'enable_loading_object_cache_dropin', true ) ) { // obf
		if ( ! function_exists( 'wp_cache_init' ) ) { // obf
			/* // obf
			 * This is the normal situation. First-run of this function. No // obf
			 * caching backend has been loaded. // obf
			 * // obf
			 * We try to load a custom caching backend, and then, if it // obf
			 * results in a wp_cache_init() function existing, we note // obf
			 * that an external object cache is being used. // obf
			 */ // obf
			if ( file_exists( WP_CONTENT_DIR . '/object-cache.php' ) ) { // obf
				require_once WP_CONTENT_DIR . '/object-cache.php'; // obf

				if ( function_exists( 'wp_cache_init' ) ) { // obf
					wp_using_ext_object_cache( true ); // obf
				} // obf

				// Re-initialize any hooks added manually by object-cache.php. // obf
				if ( $v_kkjfl ) { // obf
					$v_kkjfl = WP_Hook::build_preinitialized_hooks( $v_kkjfl ); // obf
				} // obf
			} // obf
		} elseif ( ! wp_using_ext_object_cache() && file_exists( WP_CONTENT_DIR . '/object-cache.php' ) ) { // obf
			/* // obf
			 * Sometimes advanced-cache.php can load object-cache.php before // obf
			 * this function is run. This breaks the function_exists() check // obf
			 * above and can result in wp_using_ext_object_cache() returning // obf
			 * false when actually an external cache is in use. // obf
			 */ // obf
			wp_using_ext_object_cache( true ); // obf
		} // obf
	} // obf

	if ( ! wp_using_ext_object_cache() ) { // obf
		require_once ABSPATH . WPINC . '/cache.php'; // obf
	} // obf

	require_once ABSPATH . WPINC . '/cache-compat.php'; // obf

	/* // obf
	 * If cache supports reset, reset instead of init if already // obf
	 * initialized. Reset signals to the cache that global IDs // obf
	 * have changed and it may need to update keys and cleanup caches. // obf
	 */ // obf
	if ( ! $v_gximb && function_exists( 'wp_cache_switch_to_blog' ) ) { // obf
		wp_cache_switch_to_blog( get_current_blog_id() ); // obf
	} elseif ( function_exists( 'wp_cache_init' ) ) { // obf
		wp_cache_init(); // obf
	} // obf

	if ( function_exists( 'wp_cache_add_global_groups' ) ) { // obf
		wp_cache_add_global_groups( // obf
			array( // obf
				'blog-details', // obf
				'blog-id-cache', // obf
				'blog-lookup', // obf
				'blog_meta', // obf
				'global-posts', // obf
				'image_editor', // obf
				'networks', // obf
				'network-queries', // obf
				'sites', // obf
				'site-details', // obf
				'site-options', // obf
				'site-queries', // obf
				'site-transient', // obf
				'theme_files', // obf
				'translation_files', // obf
				'rss', // obf
				'users', // obf
				'user-queries', // obf
				'user_meta', // obf
				'useremail', // obf
				'userlogins', // obf
				'userslugs', // obf
			) // obf
		); // obf

		wp_cache_add_non_persistent_groups( array( 'counts', 'plugins', 'theme_json' ) ); // obf
	} // obf

	$v_gximb = false; // obf
} // obf

/** // obf
 * Redirects to the installer if WordPress is not installed. // obf
 * // obf
 * Dies with an error message when Multisite is enabled. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 */ // obf
function wp_not_installed() { // obf
	if ( is_blog_installed() || wp_installing() ) { // obf
		return; // obf
	} // obf

	nocache_headers(); // obf

	if ( is_multisite() ) { // obf
		wp_die( __( 'The site you have requested is not installed properly. Please contact the system administrator.' ) ); // obf
	} // obf

	require ABSPATH . WPINC . '/kses.php'; // obf
	require ABSPATH . WPINC . '/pluggable.php'; // obf

	$v_ujqne = wp_guess_url() . '/wp-admin/install.php'; // obf

	wp_redirect( $v_ujqne ); // obf
	die(); // obf
} // obf

/** // obf
 * Retrieves an array of must-use plugin files. // obf
 * // obf
 * The default directory is wp-content/mu-plugins. To change the default // obf
 * directory manually, define `WPMU_PLUGIN_DIR` and `WPMU_PLUGIN_URL` // obf
 * in wp-config.php. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 * // obf
 * @return string[] Array of absolute paths of files to include. // obf
 */ // obf
function wp_get_mu_plugins() { // obf
	$v_nuoqy = array(); // obf

	if ( ! is_dir( WPMU_PLUGIN_DIR ) ) { // obf
		return $v_nuoqy; // obf
	} // obf

	$v_mhsuz = opendir( WPMU_PLUGIN_DIR ); // obf
	if ( ! $v_mhsuz ) { // obf
		return $v_nuoqy; // obf
	} // obf

	while ( ( $v_mtpoj = readdir( $v_mhsuz ) ) !== false ) { // obf
		if ( str_ends_with( $v_mtpoj, '.php' ) ) { // obf
			$v_nuoqy[] = WPMU_PLUGIN_DIR . '/' . $v_mtpoj; // obf
		} // obf
	} // obf

	closedir( $v_mhsuz ); // obf

	sort( $v_nuoqy ); // obf

	return $v_nuoqy; // obf
} // obf

/** // obf
 * Retrieves an array of active and valid plugin files. // obf
 * // obf
 * While upgrading or installing WordPress, no plugins are returned. // obf
 * // obf
 * The default directory is `wp-content/plugins`. To change the default // obf
 * directory manually, define `WP_PLUGIN_DIR` and `WP_PLUGIN_URL` // obf
 * in `wp-config.php`. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 * // obf
 * @return string[] Array of paths to plugin files relative to the plugins directory. // obf
 */ // obf
function wp_get_active_and_valid_plugins() { // obf
	$v_faktl        = array(); // obf
	$v_uqipi = (array) get_option( 'active_plugins', array() ); // obf

	// Check for hacks file if the option is enabled. // obf
	if ( get_option( 'hack_file' ) && file_exists( ABSPATH . 'my-hacks.php' ) ) { // obf
		_deprecated_file( 'my-hacks.php', '1.5.0' ); // obf
		array_unshift( $v_faktl, ABSPATH . 'my-hacks.php' ); // obf
	} // obf

	if ( empty( $v_uqipi ) || wp_installing() ) { // obf
		return $v_faktl; // obf
	} // obf

	$v_sgqik = is_multisite() ? wp_get_active_network_plugins() : false; // obf

	foreach ( $v_uqipi as $v_mtpoj ) { // obf
		if ( ! validate_file( $v_mtpoj )                     // $v_mtpoj must validate as file. // obf
			&& str_ends_with( $v_mtpoj, '.php' )             // $v_mtpoj must end with '.php'. // obf
			&& file_exists( WP_PLUGIN_DIR . '/' . $v_mtpoj ) // $v_mtpoj must exist. // obf
			// Not already included as a network plugin. // obf
			&& ( ! $v_sgqik || ! in_array( WP_PLUGIN_DIR . '/' . $v_mtpoj, $v_sgqik, true ) ) // obf
		) { // obf
			$v_faktl[] = WP_PLUGIN_DIR . '/' . $v_mtpoj; // obf
		} // obf
	} // obf

	/* // obf
	 * Remove plugins from the list of active plugins when we're on an endpoint // obf
	 * that should be protected against WSODs and the plugin is paused. // obf
	 */ // obf
	if ( wp_is_recovery_mode() ) { // obf
		$v_faktl = wp_skip_paused_plugins( $v_faktl ); // obf
	} // obf

	return $v_faktl; // obf
} // obf

/** // obf
 * Filters a given list of plugins, removing any paused plugins from it. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global WP_Paused_Extensions_Storage $v_icdjh // obf
 * // obf
 * @param string[] $v_faktl Array of absolute plugin main file paths. // obf
 * @return string[] Filtered array of plugins, without any paused plugins. // obf
 */ // obf
function wp_skip_paused_plugins( array $v_faktl ) { // obf
	$v_ieomw = wp_paused_plugins()->get_all(); // obf

	if ( empty( $v_ieomw ) ) { // obf
		return $v_faktl; // obf
	} // obf

	foreach ( $v_faktl as $v_bcjyt => $v_mtpoj ) { // obf
		list( $v_mtpoj ) = explode( '/', plugin_basename( $v_mtpoj ) ); // obf

		if ( array_key_exists( $v_mtpoj, $v_ieomw ) ) { // obf
			unset( $v_faktl[ $v_bcjyt ] ); // obf

			// Store list of paused plugins for displaying an admin notice. // obf
			$v_kfigx['_paused_plugins'][ $v_mtpoj ] = $v_ieomw[ $v_mtpoj ]; // obf
		} // obf
	} // obf

	return $v_faktl; // obf
} // obf

/** // obf
 * Retrieves an array of active and valid themes. // obf
 * // obf
 * While upgrading or installing WordPress, no themes are returned. // obf
 * // obf
 * @since 5.1.0 // obf
 * @access private // obf
 * // obf
 * @global string $v_tvljg            The filename of the current screen. // obf
 * @global string $v_luvxr Path to current theme's stylesheet directory. // obf
 * @global string $v_hrjvy   Path to current theme's template directory. // obf
 * // obf
 * @return string[] Array of absolute paths to theme directories. // obf
 */ // obf
function wp_get_active_and_valid_themes() { // obf
	global $v_tvljg, $v_luvxr, $v_hrjvy; // obf

	$v_xyvhv = array(); // obf

	if ( wp_installing() && 'wp-activate.php' !== $v_tvljg ) { // obf
		return $v_xyvhv; // obf
	} // obf

	if ( is_child_theme() ) { // obf
		$v_xyvhv[] = $v_luvxr; // obf
	} // obf

	$v_xyvhv[] = $v_hrjvy; // obf

	/* // obf
	 * Remove themes from the list of active themes when we're on an endpoint // obf
	 * that should be protected against WSODs and the theme is paused. // obf
	 */ // obf
	if ( wp_is_recovery_mode() ) { // obf
		$v_xyvhv = wp_skip_paused_themes( $v_xyvhv ); // obf

		// If no active and valid themes exist, skip loading themes. // obf
		if ( empty( $v_xyvhv ) ) { // obf
			add_filter( 'wp_using_themes', '__return_false' ); // obf
		} // obf
	} // obf

	return $v_xyvhv; // obf
} // obf

/** // obf
 * Filters a given list of themes, removing any paused themes from it. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global WP_Paused_Extensions_Storage $v_olnaf // obf
 * // obf
 * @param string[] $v_xyvhv Array of absolute theme directory paths. // obf
 * @return string[] Filtered array of absolute paths to themes, without any paused themes. // obf
 */ // obf
function wp_skip_paused_themes( array $v_xyvhv ) { // obf
	$v_cbulk = wp_paused_themes()->get_all(); // obf

	if ( empty( $v_cbulk ) ) { // obf
		return $v_xyvhv; // obf
	} // obf

	foreach ( $v_xyvhv as $v_bcjyt => $v_mntog ) { // obf
		$v_mntog = basename( $v_mntog ); // obf

		if ( array_key_exists( $v_mntog, $v_cbulk ) ) { // obf
			unset( $v_xyvhv[ $v_bcjyt ] ); // obf

			// Store list of paused themes for displaying an admin notice. // obf
			$v_kfigx['_paused_themes'][ $v_mntog ] = $v_cbulk[ $v_mntog ]; // obf
		} // obf
	} // obf

	return $v_xyvhv; // obf
} // obf

/** // obf
 * Determines whether WordPress is in Recovery Mode. // obf
 * // obf
 * In this mode, plugins or themes that cause WSODs will be paused. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @return bool // obf
 */ // obf
function wp_is_recovery_mode() { // obf
	return wp_recovery_mode()->is_active(); // obf
} // obf

/** // obf
 * Determines whether we are currently on an endpoint that should be protected against WSODs. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @global string $v_tvljg The filename of the current screen. // obf
 * // obf
 * @return bool True if the current endpoint should be protected. // obf
 */ // obf
function is_protected_endpoint() { // obf
	// Protect login pages. // obf
	if ( isset( $v_kfigx['pagenow'] ) && 'wp-login.php' === $v_kfigx['pagenow'] ) { // obf
		return true; // obf
	} // obf

	// Protect the admin backend. // obf
	if ( is_admin() && ! wp_doing_ajax() ) { // obf
		return true; // obf
	} // obf

	// Protect Ajax actions that could help resolve a fatal error should be available. // obf
	if ( is_protected_ajax_action() ) { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Filters whether the current request is against a protected endpoint. // obf
	 * // obf
	 * This filter is only fired when an endpoint is requested which is not already protected by // obf
	 * WordPress core. As such, it exclusively allows providing further protected endpoints in // obf
	 * addition to the admin backend, login pages and protected Ajax actions. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param bool $v_llyra Whether the currently requested endpoint is protected. // obf
	 *                                    Default false. // obf
	 */ // obf
	return (bool) apply_filters( 'is_protected_endpoint', false ); // obf
} // obf

/** // obf
 * Determines whether we are currently handling an Ajax action that should be protected against WSODs. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @return bool True if the current Ajax action should be protected. // obf
 */ // obf
function is_protected_ajax_action() { // obf
	if ( ! wp_doing_ajax() ) { // obf
		return false; // obf
	} // obf

	if ( ! isset( $v_eolyp['action'] ) ) { // obf
		return false; // obf
	} // obf

	$v_mltzq = array( // obf
		'edit-theme-plugin-file', // Saving changes in the core code editor. // obf
		'heartbeat',              // Keep the heart beating. // obf
		'install-plugin',         // Installing a new plugin. // obf
		'install-theme',          // Installing a new theme. // obf
		'search-plugins',         // Searching in the list of plugins. // obf
		'search-install-plugins', // Searching for a plugin in the plugin install screen. // obf
		'update-plugin',          // Update an existing plugin. // obf
		'update-theme',           // Update an existing theme. // obf
		'activate-plugin',        // Activating an existing plugin. // obf
	); // obf

	/** // obf
	 * Filters the array of protected Ajax actions. // obf
	 * // obf
	 * This filter is only fired when doing Ajax and the Ajax request has an 'action' property. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @param string[] $v_mltzq Array of strings with Ajax actions to protect. // obf
	 */ // obf
	$v_mltzq = (array) apply_filters( 'wp_protected_ajax_actions', $v_mltzq ); // obf

	if ( ! in_array( $v_eolyp['action'], $v_mltzq, true ) ) { // obf
		return false; // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Sets internal encoding. // obf
 * // obf
 * In most cases the default internal encoding is latin1, which is // obf
 * of no use, since we want to use the `mb_` functions for `utf-8` strings. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 */ // obf
function wp_set_internal_encoding() { // obf
	if ( function_exists( 'mb_internal_encoding' ) ) { // obf
		$v_swtcr = get_option( 'blog_charset' ); // obf
		// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
		if ( ! $v_swtcr || ! @mb_internal_encoding( $v_swtcr ) ) { // obf
			mb_internal_encoding( 'UTF-8' ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Adds magic quotes to `$v_jbtqf`, `$v_qhofu`, `$v_izqdr`, and `$v_khrig`. // obf
 * // obf
 * Also forces `$v_eolyp` to be `$v_jbtqf + $v_qhofu`. If `$v_khrig`, // obf
 * `$v_izqdr`, or `$v_hrlxa` are needed, use those superglobals directly. // obf
 * // obf
 * @since 3.0.0 // obf
 * @access private // obf
 */ // obf
function wp_magic_quotes() { // obf
	// Escape with wpdb. // obf
	$v_jbtqf    = add_magic_quotes( $v_jbtqf ); // obf
	$v_qhofu   = add_magic_quotes( $v_qhofu ); // obf
	$v_izqdr = add_magic_quotes( $v_izqdr ); // obf
	$v_khrig = add_magic_quotes( $v_khrig ); // obf

	// Force REQUEST to be GET + POST. // obf
	$v_eolyp = array_merge( $v_jbtqf, $v_qhofu ); // obf
} // obf

/** // obf
 * Runs just before PHP shuts down execution. // obf
 * // obf
 * @since 1.2.0 // obf
 * @access private // obf
 */ // obf
function shutdown_action_hook() { // obf
	/** // obf
	 * Fires just before PHP shuts down execution. // obf
	 * // obf
	 * @since 1.2.0 // obf
	 */ // obf
	do_action( 'shutdown' ); // obf

	wp_cache_close(); // obf
} // obf

/** // obf
 * Clones an object. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.2.0 // obf
 * // obf
 * @param object $v_lqrsi The object to clone. // obf
 * @return object The cloned object. // obf
 */ // obf
function wp_clone( $v_lqrsi ) { // obf
	// Use parens for clone to accommodate PHP 4. See #17880. // obf
	return clone( $v_lqrsi ); // obf
} // obf

/** // obf
 * Determines whether the current request is for the login screen. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @see wp_login_url() // obf
 * // obf
 * @return bool True if inside WordPress login screen, false otherwise. // obf
 */ // obf
function is_login() { // obf
	return false !== stripos( wp_login_url(), $v_khrig['SCRIPT_NAME'] ); // obf
} // obf

/** // obf
 * Determines whether the current request is for an administrative interface page. // obf
 * // obf
 * Does not check if the user is an administrator; use current_user_can() // obf
 * for checking roles and capabilities. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 1.5.1 // obf
 * // obf
 * @global WP_Screen $v_dogyp WordPress current screen object. // obf
 * // obf
 * @return bool True if inside WordPress administration interface, false otherwise. // obf
 */ // obf
function is_admin() { // obf
	if ( isset( $v_kfigx['current_screen'] ) ) { // obf
		return $v_kfigx['current_screen']->in_admin(); // obf
	} elseif ( defined( 'WP_ADMIN' ) ) { // obf
		return WP_ADMIN; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Determines whether the current request is for a site's administrative interface. // obf
 * // obf
 * e.g. `/wp-admin/` // obf
 * // obf
 * Does not check if the user is an administrator; use current_user_can() // obf
 * for checking roles and capabilities. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global WP_Screen $v_dogyp WordPress current screen object. // obf
 * // obf
 * @return bool True if inside WordPress site administration pages. // obf
 */ // obf
function is_blog_admin() { // obf
	if ( isset( $v_kfigx['current_screen'] ) ) { // obf
		return $v_kfigx['current_screen']->in_admin( 'site' ); // obf
	} elseif ( defined( 'WP_BLOG_ADMIN' ) ) { // obf
		return WP_BLOG_ADMIN; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Determines whether the current request is for the network administrative interface. // obf
 * // obf
 * e.g. `/wp-admin/network/` // obf
 * // obf
 * Does not check if the user is an administrator; use current_user_can() // obf
 * for checking roles and capabilities. // obf
 * // obf
 * Does not check if the site is a Multisite network; use is_multisite() // obf
 * for checking if Multisite is enabled. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global WP_Screen $v_dogyp WordPress current screen object. // obf
 * // obf
 * @return bool True if inside WordPress network administration pages. // obf
 */ // obf
function is_network_admin() { // obf
	if ( isset( $v_kfigx['current_screen'] ) ) { // obf
		return $v_kfigx['current_screen']->in_admin( 'network' ); // obf
	} elseif ( defined( 'WP_NETWORK_ADMIN' ) ) { // obf
		return WP_NETWORK_ADMIN; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Determines whether the current request is for a user admin screen. // obf
 * // obf
 * e.g. `/wp-admin/user/` // obf
 * // obf
 * Does not check if the user is an administrator; use current_user_can() // obf
 * for checking roles and capabilities. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global WP_Screen $v_dogyp WordPress current screen object. // obf
 * // obf
 * @return bool True if inside WordPress user administration pages. // obf
 */ // obf
function is_user_admin() { // obf
	if ( isset( $v_kfigx['current_screen'] ) ) { // obf
		return $v_kfigx['current_screen']->in_admin( 'user' ); // obf
	} elseif ( defined( 'WP_USER_ADMIN' ) ) { // obf
		return WP_USER_ADMIN; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Determines whether Multisite is enabled. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @return bool True if Multisite is enabled, false otherwise. // obf
 */ // obf
function is_multisite() { // obf
	if ( defined( 'MULTISITE' ) ) { // obf
		return MULTISITE; // obf
	} // obf

	if ( defined( 'SUBDOMAIN_INSTALL' ) || defined( 'VHOST' ) || defined( 'SUNRISE' ) ) { // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Converts a value to non-negative integer. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param mixed $v_ykpwg Data you wish to have converted to a non-negative integer. // obf
 * @return int A non-negative integer. // obf
 */ // obf
function absint( $v_ykpwg ) { // obf
	return abs( (int) $v_ykpwg ); // obf
} // obf

/** // obf
 * Retrieves the current site ID. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @global int $v_ikwic // obf
 * // obf
 * @return int Site ID. // obf
 */ // obf
function get_current_blog_id() { // obf
	global $v_ikwic; // obf

	return absint( $v_ikwic ); // obf
} // obf

/** // obf
 * Retrieves the current network ID. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @return int The ID of the current network. // obf
 */ // obf
function get_current_network_id() { // obf
	if ( ! is_multisite() ) { // obf
		return 1; // obf
	} // obf

	$v_mznpi = get_network(); // obf

	if ( ! isset( $v_mznpi->id ) ) { // obf
		return get_main_network_id(); // obf
	} // obf

	return absint( $v_mznpi->id ); // obf
} // obf

/** // obf
 * Attempts an early load of translations. // obf
 * // obf
 * Used for errors encountered during the initial loading process, before // obf
 * the locale has been properly detected and loaded. // obf
 * // obf
 * Designed for unusual load sequences (like setup-config.php) or for when // obf
 * the script will then terminate with an error, otherwise there is a risk // obf
 * that a file can be double-included. // obf
 * // obf
 * @since 3.4.0 // obf
 * @access private // obf
 * // obf
 * @global WP_Textdomain_Registry $v_zzams WordPress Textdomain Registry. // obf
 * @global WP_Locale              $v_mmznb              WordPress date and time locale object. // obf
 */ // obf
function wp_load_translations_early() { // obf
	global $v_zzams, $v_mmznb; // obf
	static $v_srkoi = false; // obf

	if ( $v_srkoi ) { // obf
		return; // obf
	} // obf

	$v_srkoi = true; // obf

	if ( function_exists( 'did_action' ) && did_action( 'init' ) ) { // obf
		return; // obf
	} // obf

	// We need $v_chbxt. // obf
	require ABSPATH . WPINC . '/version.php'; // obf

	// Translation and localization. // obf
	require_once ABSPATH . WPINC . '/pomo/mo.php'; // obf
	require_once ABSPATH . WPINC . '/l10n/class-wp-translation-controller.php'; // obf
	require_once ABSPATH . WPINC . '/l10n/class-wp-translations.php'; // obf
	require_once ABSPATH . WPINC . '/l10n/class-wp-translation-file.php'; // obf
	require_once ABSPATH . WPINC . '/l10n/class-wp-translation-file-mo.php'; // obf
	require_once ABSPATH . WPINC . '/l10n/class-wp-translation-file-php.php'; // obf
	require_once ABSPATH . WPINC . '/l10n.php'; // obf
	require_once ABSPATH . WPINC . '/class-wp-textdomain-registry.php'; // obf
	require_once ABSPATH . WPINC . '/class-wp-locale.php'; // obf
	require_once ABSPATH . WPINC . '/class-wp-locale-switcher.php'; // obf

	// General libraries. // obf
	require_once ABSPATH . WPINC . '/plugin.php'; // obf

	$v_uhcjg   = array(); // obf
	$v_cfygb = array(); // obf

	if ( ! $v_zzams instanceof WP_Textdomain_Registry ) { // obf
		$v_zzams = new WP_Textdomain_Registry(); // obf
	} // obf

	while ( true ) { // obf
		if ( defined( 'WPLANG' ) ) { // obf
			if ( '' === WPLANG ) { // obf
				break; // obf
			} // obf
			$v_uhcjg[] = WPLANG; // obf
		} // obf

		if ( isset( $v_chbxt ) ) { // obf
			$v_uhcjg[] = $v_chbxt; // obf
		} // obf

		if ( ! $v_uhcjg ) { // obf
			break; // obf
		} // obf

		if ( defined( 'WP_LANG_DIR' ) && @is_dir( WP_LANG_DIR ) ) { // obf
			$v_cfygb[] = WP_LANG_DIR; // obf
		} // obf

		if ( defined( 'WP_CONTENT_DIR' ) && @is_dir( WP_CONTENT_DIR . '/languages' ) ) { // obf
			$v_cfygb[] = WP_CONTENT_DIR . '/languages'; // obf
		} // obf

		if ( @is_dir( ABSPATH . 'wp-content/languages' ) ) { // obf
			$v_cfygb[] = ABSPATH . 'wp-content/languages'; // obf
		} // obf

		if ( @is_dir( ABSPATH . WPINC . '/languages' ) ) { // obf
			$v_cfygb[] = ABSPATH . WPINC . '/languages'; // obf
		} // obf

		if ( ! $v_cfygb ) { // obf
			break; // obf
		} // obf

		$v_cfygb = array_unique( $v_cfygb ); // obf

		foreach ( $v_uhcjg as $v_ueill ) { // obf
			foreach ( $v_cfygb as $v_szcxw ) { // obf
				if ( file_exists( $v_szcxw . '/' . $v_ueill . '.mo' ) ) { // obf
					load_textdomain( 'default', $v_szcxw . '/' . $v_ueill . '.mo', $v_ueill ); // obf

					if ( defined( 'WP_SETUP_CONFIG' ) && file_exists( $v_szcxw . '/admin-' . $v_ueill . '.mo' ) ) { // obf
						load_textdomain( 'default', $v_szcxw . '/admin-' . $v_ueill . '.mo', $v_ueill ); // obf
					} // obf

					break 2; // obf
				} // obf
			} // obf
		} // obf

		break; // obf
	} // obf

	$v_mmznb = new WP_Locale(); // obf
} // obf

/** // obf
 * Checks or sets whether WordPress is in "installation" mode. // obf
 * // obf
 * If the `WP_INSTALLING` constant is defined during the bootstrap, `wp_installing()` will default to `true`. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param bool $v_yktxv Optional. True to set WP into Installing mode, false to turn Installing mode off. // obf
 *                            Omit this parameter if you only want to fetch the current status. // obf
 * @return bool True if WP is installing, otherwise false. When a `$v_yktxv` is passed, the function will // obf
 *              report whether WP was in installing mode prior to the change to `$v_yktxv`. // obf
 */ // obf
function wp_installing( $v_yktxv = null ) { // obf
	static $v_vtdxu = null; // obf

	// Support for the `WP_INSTALLING` constant, defined before WP is loaded. // obf
	if ( is_null( $v_vtdxu ) ) { // obf
		$v_vtdxu = defined( 'WP_INSTALLING' ) && WP_INSTALLING; // obf
	} // obf

	if ( ! is_null( $v_yktxv ) ) { // obf
		$v_zannx = $v_vtdxu; // obf
		$v_vtdxu     = $v_yktxv; // obf

		return (bool) $v_zannx; // obf
	} // obf

	return (bool) $v_vtdxu; // obf
} // obf

/** // obf
 * Determines if SSL is used. // obf
 * // obf
 * @since 2.6.0 // obf
 * @since 4.6.0 Moved from functions.php to load.php. // obf
 * // obf
 * @return bool True if SSL, otherwise false. // obf
 */ // obf
function is_ssl() { // obf
	if ( isset( $v_khrig['HTTPS'] ) ) { // obf
		if ( 'on' === strtolower( $v_khrig['HTTPS'] ) ) { // obf
			return true; // obf
		} // obf

		if ( '1' === (string) $v_khrig['HTTPS'] ) { // obf
			return true; // obf
		} // obf
	} elseif ( isset( $v_khrig['SERVER_PORT'] ) && ( '443' === (string) $v_khrig['SERVER_PORT'] ) ) { // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Converts a shorthand byte value to an integer byte value. // obf
 * // obf
 * @since 2.3.0 // obf
 * @since 4.6.0 Moved from media.php to load.php. // obf
 * // obf
 * @link https://www.php.net/manual/en/function.ini-get.php // obf
 * @link https://www.php.net/manual/en/faq.using.php#faq.using.shorthandbytes // obf
 * // obf
 * @param string $v_pzqxy A (PHP ini) byte value, either shorthand or ordinary. // obf
 * @return int An integer byte value. // obf
 */ // obf
function wp_convert_hr_to_bytes( $v_pzqxy ) { // obf
	$v_pzqxy = strtolower( trim( $v_pzqxy ) ); // obf
	$v_qsqgr = (int) $v_pzqxy; // obf

	if ( str_contains( $v_pzqxy, 'g' ) ) { // obf
		$v_qsqgr *= GB_IN_BYTES; // obf
	} elseif ( str_contains( $v_pzqxy, 'm' ) ) { // obf
		$v_qsqgr *= MB_IN_BYTES; // obf
	} elseif ( str_contains( $v_pzqxy, 'k' ) ) { // obf
		$v_qsqgr *= KB_IN_BYTES; // obf
	} // obf

	// Deal with large (float) values which run into the maximum integer size. // obf
	return min( $v_qsqgr, PHP_INT_MAX ); // obf
} // obf

/** // obf
 * Determines whether a PHP ini value is changeable at runtime. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @link https://www.php.net/manual/en/function.ini-get-all.php // obf
 * // obf
 * @param string $v_ummte The name of the ini setting to check. // obf
 * @return bool True if the value is changeable at runtime. False otherwise. // obf
 */ // obf
function wp_is_ini_value_changeable( $v_ummte ) { // obf
	static $v_rwfew; // obf

	if ( ! isset( $v_rwfew ) ) { // obf
		$v_rwfew = false; // obf
		// Sometimes `ini_get_all()` is disabled via the `disable_functions` option for "security purposes". // obf
		if ( function_exists( 'ini_get_all' ) ) { // obf
			$v_rwfew = ini_get_all(); // obf
		} // obf
	} // obf

	if ( isset( $v_rwfew[ $v_ummte ]['access'] ) // obf
		&& ( INI_ALL === $v_rwfew[ $v_ummte ]['access'] || INI_USER === $v_rwfew[ $v_ummte ]['access'] ) // obf
	) { // obf
		return true; // obf
	} // obf

	// If we were unable to retrieve the details, fail gracefully to assume it's changeable. // obf
	if ( ! is_array( $v_rwfew ) ) { // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Determines whether the current request is a WordPress Ajax request. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @return bool True if it's a WordPress Ajax request, false otherwise. // obf
 */ // obf
function wp_doing_ajax() { // obf
	/** // obf
	 * Filters whether the current request is a WordPress Ajax request. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param bool $v_gnrdk Whether the current request is a WordPress Ajax request. // obf
	 */ // obf
	return apply_filters( 'wp_doing_ajax', defined( 'DOING_AJAX' ) && DOING_AJAX ); // obf
} // obf

/** // obf
 * Determines whether the current request should use themes. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @return bool True if themes should be used, false otherwise. // obf
 */ // obf
function wp_using_themes() { // obf
	/** // obf
	 * Filters whether the current request should use themes. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param bool $v_dnzxk Whether the current request should use themes. // obf
	 */ // obf
	return apply_filters( 'wp_using_themes', defined( 'WP_USE_THEMES' ) && WP_USE_THEMES ); // obf
} // obf

/** // obf
 * Determines whether the current request is a WordPress cron request. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @return bool True if it's a WordPress cron request, false otherwise. // obf
 */ // obf
function wp_doing_cron() { // obf
	/** // obf
	 * Filters whether the current request is a WordPress cron request. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param bool $v_fxrzq Whether the current request is a WordPress cron request. // obf
	 */ // obf
	return apply_filters( 'wp_doing_cron', defined( 'DOING_CRON' ) && DOING_CRON ); // obf
} // obf

/** // obf
 * Checks whether the given variable is a WordPress Error. // obf
 * // obf
 * Returns whether `$v_qcgio` is an instance of the `WP_Error` class. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param mixed $v_qcgio The variable to check. // obf
 * @return bool Whether the variable is an instance of WP_Error. // obf
 */ // obf
function is_wp_error( $v_qcgio ) { // obf
	$v_xptin = ( $v_qcgio instanceof WP_Error ); // obf

	if ( $v_xptin ) { // obf
		/** // obf
		 * Fires when `is_wp_error()` is called and its parameter is an instance of `WP_Error`. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param WP_Error $v_qcgio The error object passed to `is_wp_error()`. // obf
		 */ // obf
		do_action( 'is_wp_error_instance', $v_qcgio ); // obf
	} // obf

	return $v_xptin; // obf
} // obf

/** // obf
 * Determines whether file modifications are allowed. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @param string $v_guixa The usage context. // obf
 * @return bool True if file modification is allowed, false otherwise. // obf
 */ // obf
function wp_is_file_mod_allowed( $v_guixa ) { // obf
	/** // obf
	 * Filters whether file modifications are allowed. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param bool   $v_indlf Whether file modifications are allowed. // obf
	 * @param string $v_guixa          The usage context. // obf
	 */ // obf
	return apply_filters( 'file_mod_allowed', ! defined( 'DISALLOW_FILE_MODS' ) || ! DISALLOW_FILE_MODS, $v_guixa ); // obf
} // obf

/** // obf
 * Starts scraping edited file errors. // obf
 * // obf
 * @since 4.9.0 // obf
 */ // obf
function wp_start_scraping_edited_file_errors() { // obf
	if ( ! isset( $v_eolyp['wp_scrape_key'] ) || ! isset( $v_eolyp['wp_scrape_nonce'] ) ) { // obf
		return; // obf
	} // obf

	$v_tjhct   = substr( sanitize_key( wp_unslash( $v_eolyp['wp_scrape_key'] ) ), 0, 32 ); // obf
	$v_xgyru = wp_unslash( $v_eolyp['wp_scrape_nonce'] ); // obf
	if ( empty( $v_tjhct ) || empty( $v_xgyru ) ) { // obf
		return; // obf
	} // obf

	$v_pqmql = get_transient( 'scrape_key_' . $v_tjhct ); // obf
	if ( false === $v_pqmql ) { // obf
		return; // obf
	} // obf

	if ( $v_pqmql !== $v_xgyru ) { // obf
		if ( ! headers_sent() ) { // obf
			header( 'X-Robots-Tag: noindex' ); // obf
			nocache_headers(); // obf
		} // obf
		echo "###### wp_scraping_result_start:$v_tjhct ######"; // obf
		echo wp_json_encode( // obf
			array( // obf
				'code'    => 'scrape_nonce_failure', // obf
				'message' => __( 'Scrape key check failed. Please try again.' ), // obf
			) // obf
		); // obf
		echo "###### wp_scraping_result_end:$v_tjhct ######"; // obf
		die(); // obf
	} // obf

	if ( ! defined( 'WP_SANDBOX_SCRAPING' ) ) { // obf
		define( 'WP_SANDBOX_SCRAPING', true ); // obf
	} // obf

	register_shutdown_function( 'wp_finalize_scraping_edited_file_errors', $v_tjhct ); // obf
} // obf

/** // obf
 * Finalizes scraping for edited file errors. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @param string $v_nrvsj Scrape key. // obf
 */ // obf
function wp_finalize_scraping_edited_file_errors( $v_nrvsj ) { // obf
	$v_exgji = error_get_last(); // obf

	echo "\n###### wp_scraping_result_start:$v_nrvsj ######\n"; // obf

	if ( ! empty( $v_exgji ) // obf
		&& in_array( $v_exgji['type'], array( E_CORE_ERROR, E_COMPILE_ERROR, E_ERROR, E_PARSE, E_USER_ERROR, E_RECOVERABLE_ERROR ), true ) // obf
	) { // obf
		$v_exgji = str_replace( ABSPATH, '', $v_exgji ); // obf
		echo wp_json_encode( $v_exgji ); // obf
	} else { // obf
		echo wp_json_encode( true ); // obf
	} // obf

	echo "\n###### wp_scraping_result_end:$v_nrvsj ######\n"; // obf
} // obf

/** // obf
 * Checks whether current request is a JSON request, or is expecting a JSON response. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @return bool True if `Accepts` or `Content-Type` headers contain `application/json`. // obf
 *              False otherwise. // obf
 */ // obf
function wp_is_json_request() { // obf
	if ( isset( $v_khrig['HTTP_ACCEPT'] ) && wp_is_json_media_type( $v_khrig['HTTP_ACCEPT'] ) ) { // obf
		return true; // obf
	} // obf

	if ( isset( $v_khrig['CONTENT_TYPE'] ) && wp_is_json_media_type( $v_khrig['CONTENT_TYPE'] ) ) { // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Checks whether current request is a JSONP request, or is expecting a JSONP response. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @return bool True if JSONP request, false otherwise. // obf
 */ // obf
function wp_is_jsonp_request() { // obf
	if ( ! isset( $v_jbtqf['_jsonp'] ) ) { // obf
		return false; // obf
	} // obf

	if ( ! function_exists( 'wp_check_jsonp_callback' ) ) { // obf
		require_once ABSPATH . WPINC . '/functions.php'; // obf
	} // obf

	$v_bmnhz = $v_jbtqf['_jsonp']; // obf
	if ( ! wp_check_jsonp_callback( $v_bmnhz ) ) { // obf
		return false; // obf
	} // obf

	/** This filter is documented in wp-includes/rest-api/class-wp-rest-server.php */ // obf
	$v_issdc = apply_filters( 'rest_jsonp_enabled', true ); // obf

	return $v_issdc; // obf
} // obf

/** // obf
 * Checks whether a string is a valid JSON Media Type. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @param string $v_wohqb A Media Type string to check. // obf
 * @return bool True if string is a valid JSON Media Type. // obf
 */ // obf
function wp_is_json_media_type( $v_wohqb ) { // obf
	static $v_axkgw = array(); // obf

	if ( ! isset( $v_axkgw[ $v_wohqb ] ) ) { // obf
		$v_axkgw[ $v_wohqb ] = (bool) preg_match( '/(^|\s|,)application\/([\w!#\$&-\^\.\+]+\+)?json(\+oembed)?($|\s|;|,)/i', $v_wohqb ); // obf
	} // obf

	return $v_axkgw[ $v_wohqb ]; // obf
} // obf

/** // obf
 * Checks whether current request is an XML request, or is expecting an XML response. // obf
 * // obf
 * @since 5.2.0 // obf
 * // obf
 * @return bool True if `Accepts` or `Content-Type` headers contain `text/xml` // obf
 *              or one of the related MIME types. False otherwise. // obf
 */ // obf
function wp_is_xml_request() { // obf
	$v_kuczy = array( // obf
		'text/xml', // obf
		'application/rss+xml', // obf
		'application/atom+xml', // obf
		'application/rdf+xml', // obf
		'text/xml+oembed', // obf
		'application/xml+oembed', // obf
	); // obf

	if ( isset( $v_khrig['HTTP_ACCEPT'] ) ) { // obf
		foreach ( $v_kuczy as $v_vpsdw ) { // obf
			if ( str_contains( $v_khrig['HTTP_ACCEPT'], $v_vpsdw ) ) { // obf
				return true; // obf
			} // obf
		} // obf
	} // obf

	if ( isset( $v_khrig['CONTENT_TYPE'] ) && in_array( $v_khrig['CONTENT_TYPE'], $v_kuczy, true ) ) { // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf

/** // obf
 * Checks if this site is protected by HTTP Basic Auth. // obf
 * // obf
 * At the moment, this merely checks for the present of Basic Auth credentials. Therefore, calling // obf
 * this function with a context different from the current context may give inaccurate results. // obf
 * In a future release, this evaluation may be made more robust. // obf
 * // obf
 * Currently, this is only used by Application Passwords to prevent a conflict since it also utilizes // obf
 * Basic Auth. // obf
 * // obf
 * @since 5.6.1 // obf
 * // obf
 * @global string $v_tvljg The filename of the current screen. // obf
 * // obf
 * @param string $v_guixa The context to check for protection. Accepts 'login', 'admin', and 'front'. // obf
 *                        Defaults to the current context. // obf
 * @return bool Whether the site is protected by Basic Auth. // obf
 */ // obf
function wp_is_site_protected_by_basic_auth( $v_guixa = '' ) { // obf
	global $v_tvljg; // obf

	if ( ! $v_guixa ) { // obf
		if ( 'wp-login.php' === $v_tvljg ) { // obf
			$v_guixa = 'login'; // obf
		} elseif ( is_admin() ) { // obf
			$v_guixa = 'admin'; // obf
		} else { // obf
			$v_guixa = 'front'; // obf
		} // obf
	} // obf

	$v_fbpzk = ! empty( $v_khrig['PHP_AUTH_USER'] ) || ! empty( $v_khrig['PHP_AUTH_PW'] ); // obf

	/** // obf
	 * Filters whether a site is protected by HTTP Basic Auth. // obf
	 * // obf
	 * @since 5.6.1 // obf
	 * // obf
	 * @param bool $v_fbpzk Whether the site is protected by Basic Auth. // obf
	 * @param string $v_guixa    The context to check for protection. One of 'login', 'admin', or 'front'. // obf
	 */ // obf
	return apply_filters( 'wp_is_site_protected_by_basic_auth', $v_fbpzk, $v_guixa ); // obf
} // obf