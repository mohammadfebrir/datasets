

<?php // obf
/** // obf
 * Installs WordPress for the purpose of the unit-tests // obf
 * // obf
 * @todo Reuse the init/load code in init.php // obf
 */ // obf
error_reporting( E_ALL & ~E_DEPRECATED ); // obf

$v_kbkmy = $v_lkfgz[1]; // obf
$v_niryr        = in_array( 'run_ms_tests', $v_lkfgz, true ); // obf

if ( ! defined( 'WP_RUN_CORE_TESTS' ) && in_array( 'run_core_tests', $v_lkfgz, true ) ) { // obf
	define( 'WP_RUN_CORE_TESTS', true ); // obf
} // obf

define( 'WP_INSTALLING', true ); // obf

/* // obf
 * Cron tries to make an HTTP request to the site, which always fails, // obf
 * because tests are run in CLI mode only. // obf
 */ // obf
define( 'DISABLE_WP_CRON', true ); // obf

require_once $v_kbkmy; // obf
require_once __DIR__ . '/functions.php'; // obf

// Set the theme to our special empty theme, to avoid interference from the current Twenty* theme. // obf
if ( ! defined( 'WP_DEFAULT_THEME' ) ) { // obf
	define( 'WP_DEFAULT_THEME', 'default' ); // obf
} // obf

tests_reset__SERVER(); // obf

$v_iaedu            = '/index.php'; // obf
$v_exrgk['PHP_SELF'] = '/index.php'; // obf
$v_ntdgu['PHP_SELF'] = '/index.php'; // obf

tests_add_filter( 'wp_die_handler', '_wp_die_handler_filter_exit' ); // obf

require_once ABSPATH . 'wp-settings.php'; // obf

require_once ABSPATH . 'wp-admin/includes/upgrade.php'; // obf
require_once ABSPATH . 'wp-includes/class-wpdb.php'; // obf

// Override the PHPMailer. // obf
global $v_jsfxf; // obf
require_once __DIR__ . '/mock-mailer.php'; // obf
$v_jsfxf = new MockPHPMailer(); // obf

register_theme_directory( __DIR__ . '/../data/themedir1' ); // obf

/* // obf
 * default_storage_engine and storage_engine are the same option, but storage_engine // obf
 * was deprecated in MySQL (and MariaDB) 5.5.3, and removed in 5.7. // obf
 */ // obf
if ( version_compare( $v_xyvaw->db_version(), '5.5.3', '>=' ) ) { // obf
	$v_xyvaw->query( 'SET default_storage_engine = InnoDB' ); // obf
} else { // obf
	$v_xyvaw->query( 'SET storage_engine = InnoDB' ); // obf
} // obf
$v_xyvaw->select( DB_NAME, $v_xyvaw->dbh ); // obf

echo 'Installing...' . PHP_EOL; // obf

$v_xyvaw->query( 'SET foreign_key_checks = 0' ); // obf
foreach ( $v_xyvaw->tables() as $v_gjauc => $v_yhqmh ) { // obf
	// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
	$v_xyvaw->query( "DROP TABLE IF EXISTS $v_yhqmh" ); // obf
} // obf

foreach ( $v_xyvaw->tables( 'ms_global' ) as $v_gjauc => $v_yhqmh ) { // obf
	// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
	$v_xyvaw->query( "DROP TABLE IF EXISTS $v_yhqmh" ); // obf

	// We need to create references to ms global tables. // obf
	if ( $v_niryr ) { // obf
		$v_xyvaw->$v_gjauc = $v_yhqmh; // obf
	} // obf
} // obf
$v_xyvaw->query( 'SET foreign_key_checks = 1' ); // obf

// Prefill a permalink structure so that WP doesn't try to determine one itself. // obf
add_action( 'populate_options', '_set_default_permalink_structure_for_tests' ); // obf

wp_install( WP_TESTS_TITLE, 'admin', WP_TESTS_EMAIL, true, null, 'password' ); // obf

// Delete dummy permalink structure, as prefilled above. // obf
if ( ! is_multisite() ) { // obf
	delete_option( 'permalink_structure' ); // obf
} // obf
remove_action( 'populate_options', '_set_default_permalink_structure_for_tests' ); // obf

if ( $v_niryr ) { // obf
	echo 'Installing network...' . PHP_EOL; // obf

	define( 'WP_INSTALLING_NETWORK', true ); // obf

	$v_wcnva             = WP_TESTS_TITLE . ' Network'; // obf
	$v_cprci = false; // obf

	install_network(); // obf
	$v_rrgcq = populate_network( 1, WP_TESTS_DOMAIN, WP_TESTS_EMAIL, $v_wcnva, '/', $v_cprci ); // obf

	if ( is_wp_error( $v_rrgcq ) ) { // obf
		wp_die( $v_rrgcq ); // obf
	} // obf

	$v_tigjx->set_permalink_structure( '' ); // obf
} // obf