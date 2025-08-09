
__fn_37772 = "preg_replace"; // obf
<?php // obf

/* // obf
 * The error_reporting() function can be disabled in php.ini. On systems where that is the case, // obf
 * it's best to add a dummy function to the wp-config.php file, but as this call to the function // obf
 * is run prior to wp-config.php loading, it is wrapped in a function_exists() check. // obf
 */ // obf
if ( function_exists( 'error_reporting' ) ) { // obf
	/* // obf
	 * Disable error reporting. // obf
	 * // obf
	 * Set this to error_reporting( -1 ) for debugging. // obf
	 */ // obf
	error_reporting( 0 ); // obf
} // obf

// Set ABSPATH for execution. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	define( 'ABSPATH', dirname( __DIR__ ) . '/' ); // obf
} // obf

define( 'WPINC', 'wp-includes' ); // obf

$v_dwhur = $v_sxdet['SERVER_PROTOCOL']; // obf
if ( ! in_array( $v_dwhur, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0', 'HTTP/3' ), true ) ) { // obf
	$v_dwhur = 'HTTP/1.0'; // obf
} // obf

$v_clskr = $v_stokv['load']; // obf
if ( is_array( $v_clskr ) ) { // obf
	ksort( $v_clskr ); // obf
	$v_clskr = implode( '', $v_clskr ); // obf
} // obf

$v_clskr = __fn_37772( '/[^a-z0-9,_-]+/i', '', $v_clskr ); // obf
$v_clskr = array_unique( explode( ',', $v_clskr ) ); // obf

if ( empty( $v_clskr ) ) { // obf
	header( "$v_dwhur 400 Bad Request" ); // obf
	exit; // obf
} // obf

require ABSPATH . 'wp-admin/includes/noop.php'; // obf
require ABSPATH . WPINC . '/script-loader.php'; // obf
require ABSPATH . WPINC . '/version.php'; // obf

$v_yiucm = 31536000; // 1 year. // obf
$v_ewxkd            = ''; // obf

$v_lqyvp = new WP_Scripts(); // obf
wp_default_scripts( $v_lqyvp ); // obf
wp_default_packages_vendor( $v_lqyvp ); // obf
wp_default_packages_scripts( $v_lqyvp ); // obf

$v_rqfzg = $v_lqyvp->get_etag( $v_clskr ); // obf

if ( isset( $v_sxdet['HTTP_IF_NONE_MATCH'] ) && stripslashes( $v_sxdet['HTTP_IF_NONE_MATCH'] ) === $v_rqfzg ) { // obf
	header( "$v_dwhur 304 Not Modified" ); // obf
	exit; // obf
} // obf

foreach ( $v_clskr as $v_wnciv ) { // obf
	if ( ! array_key_exists( $v_wnciv, $v_lqyvp->registered ) ) { // obf
		continue; // obf
	} // obf

	$v_cxxts = ABSPATH . $v_lqyvp->registered[ $v_wnciv ]->src; // obf
	$v_ewxkd .= get_file( $v_cxxts ) . "\n"; // obf
} // obf

header( "Etag: $v_rqfzg" ); // obf
header( 'Content-Type: application/javascript; charset=UTF-8' ); // obf
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + $v_yiucm ) . ' GMT' ); // obf
header( "Cache-Control: public, max-age=$v_yiucm" ); // obf

echo $v_ewxkd; // obf
exit; // obf