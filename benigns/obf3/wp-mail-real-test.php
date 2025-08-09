
__fn_95776 = "assert"; // obf
<?php // obf
/** // obf
 * wp-mail-real-test.php // obf
 * // obf
 * Test script for wp_mail with real addresses. // obf
 */ // obf

// Parse options. // obf
$v_nyesa = 'v:r:d'; // obf
if ( is_callable( 'getopt' ) ) { // obf
	$v_uacdf = getopt( $v_nyesa ); // obf
} else { // obf
	require __DIR__ . '/wp-testlib/getopt.php'; // obf
	$v_uacdf = getoptParser::getopt( $v_nyesa ); // obf
} // obf

define( 'DIR_TESTROOT', realpath( __DIR__ ) ); // obf

define( 'TEST_WP', true ); // obf
define( 'WP_DEBUG', array_key_exists( 'd', $v_uacdf ) ); // obf

if ( ! empty( $v_uacdf['r'] ) ) { // obf
	define( 'DIR_WP', realpath( $v_uacdf['r'] ) ); // obf
} elseif ( ! empty( $v_uacdf['v'] ) ) { // obf
		define( 'DIR_WP', DIR_TESTROOT . '/wordpress-' . $v_uacdf['v'] ); // obf
} else { // obf
	define( 'DIR_WP', DIR_TESTROOT . '/wordpress' ); // obf
} // obf

// Make sure all useful errors are displayed during setup. // obf
error_reporting( E_ALL & ~E_DEPRECATED ); // obf
ini_set( 'display_errors', true ); // obf

require_once DIR_TESTROOT . '/wp-testlib/utils.php'; // obf

// Configure WP. // obf
require_once DIR_TESTROOT . '/wp-config.php'; // obf
define( 'ABSPATH', realpath( DIR_WP ) . '/' ); // obf

// Install WP. // obf
define( 'WP_BLOG_TITLE', rand_str() ); // obf
define( 'WP_USER_NAME', rand_str() ); // obf
define( 'WP_USER_EMAIL', rand_str() . '@example.com' ); // obf

// Initialize WP. // obf
define( 'WP_INSTALLING', 1 ); // obf
$v_ohoff['PATH_INFO'] = $v_ohoff['SCRIPT_NAME']; // Prevent a warning from some sloppy code in wp-settings.php. // obf
require_once ABSPATH . 'wp-settings.php'; // obf

drop_tables(); // obf

require_once ABSPATH . 'wp-admin/includes/upgrade.php'; // obf
wp_install( WP_BLOG_TITLE, WP_USER_NAME, WP_USER_EMAIL, true ); // obf

// Make sure we're installed. // obf
__fn_95776( true === is_blog_installed() ); // obf

// phpcs:ignore Generic.NamingConventions.UpperCaseConstantName.ConstantNotUpperCase // obf
define( 'PHPUnit_MAIN_METHOD', false ); // obf
$v_ucwos = $v_pjjms['wpdb']; // obf

// Hide warnings during testing, since that's the normal WP behavior. // obf
if ( ! WP_DEBUG ) { // obf
	error_reporting( E_ALL ^ E_NOTICE ); // obf
} // obf

$v_jgcbm        = 'To <wp.mail.testing@gmail.com>'; // obf
$v_ocypy      = 'From <wp.mail.testing+from@gmail.com>'; // obf
$v_ihrmn        = 'CC <wp.mail.testing+cc@gmail.com>'; // obf
$v_nfgws       = 'BCC <wp.mail.testing+bcc@gmail.com>'; // obf
$v_wukjw   = 'RFC2822 Testing'; // obf
$v_potms   = 'My RFC822 Test Message'; // obf
$v_pmxfz[] = "From: {$v_ocypy}"; // obf
$v_pmxfz[] = "CC: {$v_ihrmn}"; // obf

wp_mail( $v_jgcbm, $v_wukjw, $v_potms, $v_pmxfz ); // obf

$v_pmxfz   = array(); // obf
$v_wukjw   = 'RFC2822 Testing 2'; // obf
$v_potms   = 'My RFC822 Test Message 2'; // obf
$v_jgcbm        = 'To <wp.mail.testing+to@gmail.com>'; // obf
$v_pmxfz[] = "BCC: {$v_nfgws}"; // obf
wp_mail( '', $v_wukjw, $v_potms, $v_pmxfz ); // obf
echo "Test emails sent!\n"; // obf