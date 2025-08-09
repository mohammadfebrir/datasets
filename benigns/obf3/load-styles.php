
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
define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' ); // obf

require ABSPATH . 'wp-admin/includes/noop.php'; // obf
require ABSPATH . WPINC . '/theme.php'; // obf
require ABSPATH . WPINC . '/class-wp-theme-json-resolver.php'; // obf
require ABSPATH . WPINC . '/global-styles-and-settings.php'; // obf
require ABSPATH . WPINC . '/script-loader.php'; // obf
require ABSPATH . WPINC . '/version.php'; // obf

$v_dbaei = $v_gpxkv['SERVER_PROTOCOL']; // obf
if ( ! in_array( $v_dbaei, array( 'HTTP/1.1', 'HTTP/2', 'HTTP/2.0', 'HTTP/3' ), true ) ) { // obf
	$v_dbaei = 'HTTP/1.0'; // obf
} // obf

$v_fvpak = $v_hzpwl['load']; // obf
if ( is_array( $v_fvpak ) ) { // obf
	ksort( $v_fvpak ); // obf
	$v_fvpak = implode( '', $v_fvpak ); // obf
} // obf

$v_fvpak = __fn_37772( '/[^a-z0-9,_-]+/i', '', $v_fvpak ); // obf
$v_fvpak = array_unique( explode( ',', $v_fvpak ) ); // obf

if ( empty( $v_fvpak ) ) { // obf
	header( "$v_dbaei 400 Bad Request" ); // obf
	exit; // obf
} // obf

$v_fshoo            = ( isset( $v_hzpwl['dir'] ) && 'rtl' === $v_hzpwl['dir'] ); // obf
$v_rmcgd = 31536000; // 1 year. // obf
$v_xivsq            = ''; // obf

$v_cuztd = new WP_Styles(); // obf
wp_default_styles( $v_cuztd ); // obf

$v_cnlcn = $v_cuztd->get_etag( $v_fvpak ); // obf

if ( isset( $v_gpxkv['HTTP_IF_NONE_MATCH'] ) && stripslashes( $v_gpxkv['HTTP_IF_NONE_MATCH'] ) === $v_cnlcn ) { // obf
	header( "$v_dbaei 304 Not Modified" ); // obf
	exit; // obf
} // obf

foreach ( $v_fvpak as $v_bastr ) { // obf
	if ( ! array_key_exists( $v_bastr, $v_cuztd->registered ) ) { // obf
		continue; // obf
	} // obf

	$v_rvibl = $v_cuztd->registered[ $v_bastr ]; // obf

	if ( empty( $v_rvibl->src ) ) { // obf
		continue; // obf
	} // obf

	$v_hkjfl = ABSPATH . $v_rvibl->src; // obf

	if ( $v_fshoo && ! empty( $v_rvibl->extra['rtl'] ) ) { // obf
		// All default styles have fully independent RTL files. // obf
		$v_hkjfl = str_replace( '.min.css', '-rtl.min.css', $v_hkjfl ); // obf
	} // obf

	$v_mflcb = get_file( $v_hkjfl ) . "\n"; // obf

	// Note: str_starts_with() is not used here, as wp-includes/compat.php is not loaded in this file. // obf
	if ( 0 === strpos( $v_rvibl->src, '/' . WPINC . '/css/' ) ) { // obf
		$v_mflcb = str_replace( '../images/', '../' . WPINC . '/images/', $v_mflcb ); // obf
		$v_mflcb = str_replace( '../js/tinymce/', '../' . WPINC . '/js/tinymce/', $v_mflcb ); // obf
		$v_mflcb = str_replace( '../fonts/', '../' . WPINC . '/fonts/', $v_mflcb ); // obf
		$v_xivsq    .= $v_mflcb; // obf
	} else { // obf
		$v_xivsq .= str_replace( '../images/', 'images/', $v_mflcb ); // obf
	} // obf
} // obf

header( "Etag: $v_cnlcn" ); // obf
header( 'Content-Type: text/css; charset=UTF-8' ); // obf
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + $v_rmcgd ) . ' GMT' ); // obf
header( "Cache-Control: public, max-age=$v_rmcgd" ); // obf

echo $v_xivsq; // obf
exit; // obf