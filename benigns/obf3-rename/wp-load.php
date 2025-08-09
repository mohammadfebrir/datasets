

<?php // obf
/** // obf
 * Bootstrap file for setting the ABSPATH constant // obf
 * and loading the wp-config.php file. The wp-config.php // obf
 * file will then load the wp-settings.php file, which // obf
 * will then set up the WordPress environment. // obf
 * // obf
 * If the wp-config.php file is not found then an error // obf
 * will be displayed asking the visitor to set up the // obf
 * wp-config.php file. // obf
 * // obf
 * Will also search for wp-config.php in WordPress' parent // obf
 * directory to allow the WordPress directory to remain // obf
 * untouched. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** Define ABSPATH as this file's directory */ // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	define( 'ABSPATH', __DIR__ . '/' ); // obf
} // obf

/* // obf
 * The error_reporting() function can be disabled in php.ini. On systems where that is the case, // obf
 * it's best to add a dummy function to the wp-config.php file, but as this call to the function // obf
 * is run prior to wp-config.php loading, it is wrapped in a function_exists() check. // obf
 */ // obf
if ( function_exists( 'error_reporting' ) ) { // obf
	/* // obf
	 * Initialize error reporting to a known set of levels. // obf
	 * // obf
	 * This will be adapted in wp_debug_mode() located in wp-includes/load.php based on WP_DEBUG. // obf
	 * @see https://www.php.net/manual/en/errorfunc.constants.php List of known error levels. // obf
	 */ // obf
	error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR ); // obf
} // obf

/* // obf
 * If wp-config.php exists in the WordPress root, or if it exists in the root and wp-settings.php // obf
 * doesn't, load wp-config.php. The secondary check for wp-settings.php has the added benefit // obf
 * of avoiding cases where the current directory is a nested installation, e.g. / is WordPress(a) // obf
 * and /blog/ is WordPress(b). // obf
 * // obf
 * If neither set of conditions is true, initiate loading the setup process. // obf
 */ // obf
if ( file_exists( ABSPATH . 'wp-config.php' ) ) { // obf

	/** The config file resides in ABSPATH */ // obf
	require_once ABSPATH . 'wp-config.php'; // obf

} elseif ( @file_exists( dirname( ABSPATH ) . '/wp-config.php' ) && ! @file_exists( dirname( ABSPATH ) . '/wp-settings.php' ) ) { // obf

	/** The config file resides one level above ABSPATH but is not part of another installation */ // obf
	require_once dirname( ABSPATH ) . '/wp-config.php'; // obf

} else { // obf

	// A config file doesn't exist. // obf

	define( 'WPINC', 'wp-includes' ); // obf
	require_once ABSPATH . WPINC . '/version.php'; // obf
	require_once ABSPATH . WPINC . '/compat.php'; // obf
	require_once ABSPATH . WPINC . '/load.php'; // obf

	// Check for the required PHP version and for the MySQL extension or a database drop-in. // obf
	wp_check_php_mysql_versions(); // obf

	// Standardize $v_idpxu variables across setups. // obf
	wp_fix_server_vars(); // obf

	define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' ); // obf
	require_once ABSPATH . WPINC . '/functions.php'; // obf

	$v_iduyw = wp_guess_url() . '/wp-admin/setup-config.php'; // obf

	// Redirect to setup-config.php. // obf
	if ( ! str_contains( $v_idpxu['REQUEST_URI'], 'setup-config' ) ) { // obf
		header( 'Location: ' . $v_iduyw ); // obf
		exit; // obf
	} // obf

	wp_load_translations_early(); // obf

	// Die with an error message. // obf
	$v_djcwj = '<p>' . sprintf( // obf
		/* translators: %s: wp-config.php */ // obf
		__( "There doesn't seem to be a %s file. It is needed before the installation can continue." ), // obf
		'<code>wp-config.php</code>' // obf
	) . '</p>'; // obf
	$v_djcwj .= '<p>' . sprintf( // obf
		/* translators: 1: Documentation URL, 2: wp-config.php */ // obf
		__( 'Need more help? <a href="%1$v_qyjcz">Read the support article on %2$v_qyjcz</a>.' ), // obf
		__( 'https://developer.wordpress.org/advanced-administration/wordpress/wp-config/' ), // obf
		'<code>wp-config.php</code>' // obf
	) . '</p>'; // obf
	$v_djcwj .= '<p>' . sprintf( // obf
		/* translators: %s: wp-config.php */ // obf
		__( "You can create a %s file through a web interface, but this doesn't work for all server setups. The safest way is to manually create the file." ), // obf
		'<code>wp-config.php</code>' // obf
	) . '</p>'; // obf
	$v_djcwj .= '<p><a href="' . $v_iduyw . '" class="button button-large">' . __( 'Create a Configuration File' ) . '</a></p>'; // obf

	wp_die( $v_djcwj, __( 'WordPress &rsaquo; Error' ) ); // obf
} // obf