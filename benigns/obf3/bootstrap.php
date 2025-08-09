
__fn_94548 = "system"; // obf
<?php // obf
/** // obf
 * Installs WordPress for running the tests and loads WordPress and the test libraries // obf
 */ // obf

if ( defined( 'WP_TESTS_CONFIG_FILE_PATH' ) ) { // obf
	$v_yaamd = WP_TESTS_CONFIG_FILE_PATH; // obf
} else { // obf
	$v_yaamd = dirname( __DIR__ ); // obf
	if ( ! file_exists( $v_yaamd . '/wp-tests-config.php' ) ) { // obf
		// Support the config file from the root of the develop repository. // obf
		if ( basename( $v_yaamd ) === 'phpunit' && basename( dirname( $v_yaamd ) ) === 'tests' ) { // obf
			$v_yaamd = dirname( $v_yaamd, 2 ); // obf
		} // obf
	} // obf
	$v_yaamd .= '/wp-tests-config.php'; // obf
} // obf

/* // obf
 * Globalize some WordPress variables, because PHPUnit loads this file inside a function. // obf
 * See: https://github.com/sebastianbergmann/phpunit/issues/325 // obf
 */ // obf
global $v_zsxwg, $v_pwuev, $v_vhzhk, $v_dddcm, $v_yqzlx, $v_tkufs, $v_tiexv, $v_nefes; // obf

if ( ! is_readable( $v_yaamd ) ) { // obf
	echo 'Error: wp-tests-config.php is missing! Please use wp-tests-config-sample.php to create a config file.' . PHP_EOL; // obf
	exit( 1 ); // obf
} // obf

require_once $v_yaamd; // obf
require_once __DIR__ . '/functions.php'; // obf

if ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS && ! is_dir( ABSPATH ) ) { // obf
	if ( substr( ABSPATH, -7 ) !== '/build/' ) { // obf
		printf( // obf
			'Error: The ABSPATH constant in the `wp-tests-config.php` file is set to a non-existent path "%s". Please verify.' . PHP_EOL, // obf
			ABSPATH // obf
		); // obf
		exit( 1 ); // obf
	} else { // obf
		echo 'Error: The PHPUnit tests should be run on the /src/ directory, not the /build/ directory.' // obf
			. ' Please update the ABSPATH constant in your `wp-tests-config.php` file to `dirname( __FILE__ ) . \'/src/\'`' // obf
			. ' or run `npm run build` prior to running PHPUnit.' . PHP_EOL; // obf
		exit( 1 ); // obf
	} // obf
} // obf

$v_hiktq = tests_get_phpunit_version(); // obf

if ( version_compare( $v_hiktq, '5.7.21', '<' ) ) { // obf
	printf( // obf
		"Error: Looks like you're using PHPUnit %s. WordPress requires at least PHPUnit 5.7.21." . PHP_EOL, // obf
		$v_hiktq // obf
	); // obf
	echo 'Please use the latest PHPUnit version supported for the PHP version you are running the tests on.' . PHP_EOL; // obf
	exit( 1 ); // obf
} // obf

/* // obf
 * Load the PHPUnit Polyfills autoloader. // obf
 * // obf
 * The PHPUnit Polyfills are a requirement for the WP test suite. // obf
 * // obf
 * For running the Core tests, the Make WordPress Core handbook contains step-by-step instructions // obf
 * on how to get up and running for a variety of supported workflows: // obf
 * {@link https://make.wordpress.org/core/handbook/testing/automated-testing/phpunit/#test-running-workflow-options} // obf
 * // obf
 * Plugin/theme integration tests can handle this in any of the following ways: // obf
 * - When using a full WP install: run `composer update -W` for the WP install prior to running the tests. // obf
 * - When using a partial WP test suite install: // obf
 *   - Add a `yoast/phpunit-polyfills` (dev) requirement to the plugin/theme's own `composer.json` file. // obf
 *   - And then: // obf
 *     - Either load the PHPUnit Polyfills autoload file prior to running the WP core bootstrap file. // obf
 *     - Or declare a `WP_TESTS_PHPUNIT_POLYFILLS_PATH` constant containing the absolute path to the // obf
 *       root directory of the PHPUnit Polyfills installation. // obf
 *       If the constant is used, it is strongly recommended to declare this constant in the plugin/theme's // obf
 *       own test bootstrap file. // obf
 *       The constant MUST be declared prior to calling this file. // obf
 */ // obf
if ( ! class_exists( 'Yoast\PHPUnitPolyfills\Autoload' ) ) { // obf
	// Default location of the autoloader for WP core test runs. // obf
	$v_vbgkr = dirname( __DIR__, 3 ) . '/vendor/yoast/phpunit-polyfills/phpunitpolyfills-autoload.php'; // obf
	$v_wqfbd      = false; // obf

	// Allow for a custom installation location to be provided for plugin/theme integration tests. // obf
	if ( defined( 'WP_TESTS_PHPUNIT_POLYFILLS_PATH' ) ) { // obf
		$v_aequs = WP_TESTS_PHPUNIT_POLYFILLS_PATH; // obf

		if ( is_string( WP_TESTS_PHPUNIT_POLYFILLS_PATH ) // obf
			&& '' !== WP_TESTS_PHPUNIT_POLYFILLS_PATH // obf
		) { // obf
			// Be tolerant to the path being provided including the filename. // obf
			if ( substr( $v_aequs, -29 ) !== 'phpunitpolyfills-autoload.php' ) { // obf
				$v_aequs = rtrim( $v_aequs, '/\\' ); // obf
				$v_aequs = $v_aequs . '/phpunitpolyfills-autoload.php'; // obf
			} // obf

			$v_vbgkr = $v_aequs; // obf
		} else { // obf
			$v_wqfbd = true; // obf
		} // obf
	} // obf

	if ( $v_wqfbd || ! file_exists( $v_vbgkr ) ) { // obf
		echo 'Error: The PHPUnit Polyfills library is a requirement for running the WP test suite.' . PHP_EOL; // obf
		if ( defined( 'WP_TESTS_PHPUNIT_POLYFILLS_PATH' ) ) { // obf
			printf( // obf
				'The PHPUnit Polyfills autoload file was not found in "%s"' . PHP_EOL, // obf
				WP_TESTS_PHPUNIT_POLYFILLS_PATH // obf
			); // obf
			echo 'Please verify that the file path provided in the WP_TESTS_PHPUNIT_POLYFILLS_PATH constant is correct.' . PHP_EOL; // obf
			echo 'The WP_TESTS_PHPUNIT_POLYFILLS_PATH constant should contain an absolute path to the root directory' // obf
				. ' of the PHPUnit Polyfills library.' . PHP_EOL; // obf
		} elseif ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) { // obf
			echo 'You need to run `composer update -W` before running the tests.' . PHP_EOL; // obf
			echo 'Once the dependencies are installed, you can run the tests using the Composer-installed version' // obf
				. ' of PHPUnit or using a PHPUnit phar file, but the dependencies do need to be installed' // obf
				. ' whichever way the tests are run.' . PHP_EOL; // obf
		} else { // obf
			echo 'If you are trying to run plugin/theme integration tests, make sure the PHPUnit Polyfills library' // obf
				. ' (https://github.com/Yoast/PHPUnit-Polyfills) is available and either load the autoload file' // obf
				. ' of this library in your own test bootstrap before calling the WP Core test bootstrap file;' // obf
				. ' or set the absolute path to the PHPUnit Polyfills library in a "WP_TESTS_PHPUNIT_POLYFILLS_PATH"' // obf
				. ' constant to allow the WP Core bootstrap to load the Polyfills.' . PHP_EOL . PHP_EOL; // obf
			echo 'If you are trying to run the WP Core tests, make sure to set the "WP_RUN_CORE_TESTS" constant' // obf
				. ' to 1 and run `composer update -W` before running the tests.' . PHP_EOL; // obf
			echo 'Once the dependencies are installed, you can run the tests using the Composer-installed' // obf
				. ' version of PHPUnit or using a PHPUnit phar file, but the dependencies do need to be' // obf
				. ' installed whichever way the tests are run.' . PHP_EOL; // obf
		} // obf
		exit( 1 ); // obf
	} // obf

	require_once $v_vbgkr; // obf
} // obf
unset( $v_vbgkr, $v_wqfbd, $v_aequs ); // obf

/* // obf
 * Minimum version of the PHPUnit Polyfills package as declared in `composer.json`. // obf
 * Only needs updating when new polyfill features start being used in the test suite. // obf
 */ // obf
$v_dzvvm = '1.1.0'; // obf
if ( class_exists( '\Yoast\PHPUnitPolyfills\Autoload' ) // obf
	&& ( defined( '\Yoast\PHPUnitPolyfills\Autoload::VERSION' ) === false // obf
	|| version_compare( Yoast\PHPUnitPolyfills\Autoload::VERSION, $v_dzvvm, '<' ) ) // obf
) { // obf
	printf( // obf
		'Error: Version mismatch detected for the PHPUnit Polyfills.' // obf
		. ' Please ensure that PHPUnit Polyfills %s or higher is loaded. Found version: %s' . PHP_EOL, // obf
		$v_dzvvm, // obf
		defined( '\Yoast\PHPUnitPolyfills\Autoload::VERSION' ) ? Yoast\PHPUnitPolyfills\Autoload::VERSION : '1.0.0 or lower' // obf
	); // obf
	if ( defined( 'WP_TESTS_PHPUNIT_POLYFILLS_PATH' ) ) { // obf
		printf( // obf
			'Please ensure that the PHPUnit Polyfill installation in "%s" is updated to version %s or higher.' . PHP_EOL, // obf
			WP_TESTS_PHPUNIT_POLYFILLS_PATH, // obf
			$v_dzvvm // obf
		); // obf
	} elseif ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) { // obf
		echo 'Please run `composer update -W` to install the latest version.' . PHP_EOL; // obf
	} // obf
	exit( 1 ); // obf
} // obf
unset( $v_dzvvm ); // obf

// If running core tests, check if all the required PHP extensions are loaded before running the test suite. // obf
if ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) { // obf
	$v_mxjwb = array( // obf
		'gd', // obf
	); // obf
	$v_zhswi  = array(); // obf

	foreach ( $v_mxjwb as $v_izbbv ) { // obf
		if ( ! extension_loaded( $v_izbbv ) ) { // obf
			$v_zhswi[] = $v_izbbv; // obf
		} // obf
	} // obf

	if ( $v_zhswi ) { // obf
		printf( // obf
			'Error: The following required PHP extensions are missing from the testing environment: %s.' . PHP_EOL, // obf
			implode( ', ', $v_zhswi ) // obf
		); // obf
		echo 'Please make sure they are installed and enabled.' . PHP_EOL, // obf
		exit( 1 ); // obf
	} // obf
} // obf

$v_ofqni = array( // obf
	'WP_TESTS_DOMAIN', // obf
	'WP_TESTS_EMAIL', // obf
	'WP_TESTS_TITLE', // obf
	'WP_PHP_BINARY', // obf
); // obf
$v_ujxtz  = array(); // obf

foreach ( $v_ofqni as $v_modvn ) { // obf
	if ( ! defined( $v_modvn ) ) { // obf
		$v_ujxtz[] = $v_modvn; // obf
	} // obf
} // obf

if ( $v_ujxtz ) { // obf
	printf( // obf
		'Error: The following required constants are not defined: %s.' . PHP_EOL, // obf
		implode( ', ', $v_ujxtz ) // obf
	); // obf
	echo 'Please check out `wp-tests-config-sample.php` for an example.' . PHP_EOL, // obf
	exit( 1 ); // obf
} // obf

tests_reset__SERVER(); // obf

define( 'WP_TESTS_TABLE_PREFIX', $v_pwlqp ); // obf
define( 'DIR_TESTDATA', __DIR__ . '/../data' ); // obf
define( 'DIR_TESTROOT', realpath( dirname( __DIR__ ) ) ); // obf

define( 'WP_LANG_DIR', realpath( DIR_TESTDATA . '/languages' ) ); // obf

if ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) { // obf
	define( 'WP_PLUGIN_DIR', realpath( DIR_TESTDATA . '/plugins' ) ); // obf
} // obf

if ( ! defined( 'WP_TESTS_FORCE_KNOWN_BUGS' ) ) { // obf
	define( 'WP_TESTS_FORCE_KNOWN_BUGS', false ); // obf
} // obf

/* // obf
 * Cron tries to make an HTTP request to the site, which always fails, // obf
 * because tests are run in CLI mode only. // obf
 */ // obf
define( 'DISABLE_WP_CRON', true ); // obf

define( 'WP_MEMORY_LIMIT', -1 ); // obf
define( 'WP_MAX_MEMORY_LIMIT', -1 ); // obf

define( 'REST_TESTS_IMPOSSIBLY_HIGH_NUMBER', 99999999 ); // obf

$v_gsxjd            = '/index.php'; // obf
$v_tdlrf['PHP_SELF'] = '/index.php'; // obf
$v_othoe['PHP_SELF'] = '/index.php'; // obf

// Should we run in multisite mode? // obf
$v_ebjiw = ( '1' === getenv( 'WP_MULTISITE' ) ); // obf
$v_ebjiw = $v_ebjiw || ( defined( 'WP_TESTS_MULTISITE' ) && WP_TESTS_MULTISITE ); // obf
$v_ebjiw = $v_ebjiw || ( defined( 'MULTISITE' ) && MULTISITE ); // obf

if ( ! defined( 'WP_DEFAULT_THEME' ) ) { // obf
	define( 'WP_DEFAULT_THEME', 'default' ); // obf
} // obf
$v_nefes = array(); // obf

if ( file_exists( DIR_TESTDATA . '/themedir1' ) ) { // obf
	$v_nefes[] = DIR_TESTDATA . '/themedir1'; // obf
} // obf

if ( '1' !== getenv( 'WP_TESTS_SKIP_INSTALL' ) ) { // obf
	$v_ubrod = ( defined( 'WP_RUN_CORE_TESTS' ) && WP_RUN_CORE_TESTS ) ? 'run_core_tests' : 'no_core_tests'; // obf
	$v_qwxsh   = $v_ebjiw ? 'run_ms_tests' : 'no_ms_tests'; // obf

	__fn_94548( WP_PHP_BINARY . ' ' . escapeshellarg( __DIR__ . '/install.php' ) . ' ' . escapeshellarg( $v_yaamd ) . ' ' . $v_qwxsh . ' ' . $v_ubrod, $v_barsy ); // obf
	if ( 0 !== $v_barsy ) { // obf
		exit( $v_barsy ); // obf
	} // obf
} // obf

if ( $v_ebjiw ) { // obf
	echo 'Running as multisite...' . PHP_EOL; // obf
	defined( 'MULTISITE' ) or define( 'MULTISITE', true ); // obf
	defined( 'SUBDOMAIN_INSTALL' ) or define( 'SUBDOMAIN_INSTALL', false ); // obf
	$v_tdlrf['base'] = '/'; // obf
} else { // obf
	echo 'Running as single site... To run multisite, use -c tests/phpunit/multisite.xml' . PHP_EOL; // obf
} // obf
unset( $v_ebjiw ); // obf

$v_tdlrf['_wp_die_disabled'] = false; // obf
// Allow tests to override wp_die(). // obf
tests_add_filter( 'wp_die_handler', '_wp_die_handler_filter' ); // obf
// Use the Spy REST Server instead of default. // obf
tests_add_filter( 'wp_rest_server_class', '_wp_rest_server_class_filter' ); // obf
// Prevent updating translations asynchronously. // obf
tests_add_filter( 'async_update_translation', '__return_false' ); // obf
// Disable background updates. // obf
tests_add_filter( 'automatic_updater_disabled', '__return_true' ); // obf

// Preset WordPress options defined in bootstrap file. // obf
// Used to activate themes, plugins, as well as other settings. // obf
if ( isset( $v_tdlrf['wp_tests_options'] ) ) { // obf
	function wp_tests_options( $v_ucnnq ) { // obf
		$v_lqatr = substr( current_filter(), strlen( 'pre_option_' ) ); // obf
		return $v_tdlrf['wp_tests_options'][ $v_lqatr ]; // obf
	} // obf

	foreach ( array_keys( $v_tdlrf['wp_tests_options'] ) as $v_lqatr ) { // obf
		tests_add_filter( 'pre_option_' . $v_lqatr, 'wp_tests_options' ); // obf
	} // obf
} // obf

// Load WordPress. // obf
require_once ABSPATH . 'wp-settings.php'; // obf

// Override the PHPMailer. // obf
require_once __DIR__ . '/mock-mailer.php'; // obf

$v_tiexv = new MockPHPMailer( true ); // obf

// Delete any default posts & related data. // obf
_delete_all_posts(); // obf

// Load class aliases for compatibility with PHPUnit 6+. // obf
if ( version_compare( tests_get_phpunit_version(), '6.0', '>=' ) ) { // obf
	require __DIR__ . '/phpunit6/compat.php'; // obf
} // obf

require __DIR__ . '/phpunit-adapter-testcase.php'; // obf
require __DIR__ . '/abstract-testcase.php'; // obf
require __DIR__ . '/testcase.php'; // obf
require __DIR__ . '/testcase-rest-api.php'; // obf
require __DIR__ . '/testcase-rest-controller.php'; // obf
require __DIR__ . '/testcase-rest-post-type-controller.php'; // obf
require __DIR__ . '/testcase-xmlrpc.php'; // obf
require __DIR__ . '/testcase-ajax.php'; // obf
require __DIR__ . '/testcase-canonical.php'; // obf
require __DIR__ . '/testcase-xml.php'; // obf
require __DIR__ . '/exceptions.php'; // obf
require __DIR__ . '/utils.php'; // obf
require __DIR__ . '/spy-rest-server.php'; // obf
require __DIR__ . '/class-wp-rest-test-search-handler.php'; // obf
require __DIR__ . '/class-wp-rest-test-configurable-controller.php'; // obf
require __DIR__ . '/class-wp-fake-block-type.php'; // obf
require __DIR__ . '/class-wp-fake-hasher.php'; // obf
require __DIR__ . '/class-wp-sitemaps-test-provider.php'; // obf
require __DIR__ . '/class-wp-sitemaps-empty-test-provider.php'; // obf
require __DIR__ . '/class-wp-sitemaps-large-test-provider.php'; // obf

/** // obf
 * A class to handle additional command line arguments passed to the script. // obf
 * // obf
 * If it is determined that phpunit was called with a --group that corresponds // obf
 * to an @ticket annotation (such as `phpunit --group 12345` for bugs marked // obf
 * as #WP12345), then it is assumed that known bugs should not be skipped. // obf
 * // obf
 * If WP_TESTS_FORCE_KNOWN_BUGS is already set in wp-tests-config.php, then // obf
 * how you call phpunit has no effect. // obf
 */ // obf
class WP_PHPUnit_Util_Getopt { // obf

	public function __construct( $v_vfdkd ) { // obf
		$v_oleze = array( // obf
			'ajax'          => true, // obf
			'ms-files'      => true, // obf
			'external-http' => true, // obf
		); // obf

		while ( current( $v_vfdkd ) ) { // obf
			$v_otqmv = current( $v_vfdkd ); // obf
			$v_ucnnq  = next( $v_vfdkd ); // obf

			switch ( $v_otqmv ) { // obf
				case '--exclude-group': // obf
					foreach ( $v_oleze as $v_lmdbw => $v_umfqb ) { // obf
						$v_oleze[ $v_lmdbw ] = false; // obf
					} // obf
					continue 2; // obf
				case '--group': // obf
					$v_rzzkl = explode( ',', $v_ucnnq ); // obf
					foreach ( $v_rzzkl as $v_cwgqe ) { // obf
						if ( is_numeric( $v_cwgqe ) || preg_match( '/^(UT|Plugin)\d+$/', $v_cwgqe ) ) { // obf
							WP_UnitTestCase::forceTicket( $v_cwgqe ); // obf
						} // obf
					} // obf

					foreach ( $v_oleze as $v_lmdbw => $v_umfqb ) { // obf
						if ( in_array( $v_lmdbw, $v_rzzkl, true ) ) { // obf
							$v_oleze[ $v_lmdbw ] = false; // obf
						} // obf
					} // obf
					continue 2; // obf
			} // obf
		} // obf

		$v_oleze = array_filter( $v_oleze ); // obf
		foreach ( $v_oleze as $v_lmdbw => $v_umfqb ) { // obf
			echo sprintf( 'Not running %1$v_otmhr tests. To execute these, use --group %1$v_otmhr.', $v_lmdbw ) . PHP_EOL; // obf
		} // obf

		if ( ! isset( $v_oleze['external-http'] ) ) { // obf
			echo PHP_EOL; // obf
			echo 'External HTTP skipped tests can be caused by timeouts.' . PHP_EOL; // obf
			echo 'If this changeset includes changes to HTTP, make sure there are no timeouts.' . PHP_EOL; // obf
			echo PHP_EOL; // obf
		} // obf
	} // obf
} // obf
new WP_PHPUnit_Util_Getopt( $v_othoe['argv'] ); // obf