

<?php // obf
/** // obf
 * Not used in core since 5.1. // obf
 * This is a back-compat for plugins that may be using this method of loading directly. // obf
 */ // obf

/** // obf
 * Disable error reporting // obf
 * // obf
 * Set this to error_reporting( -1 ) for debugging. // obf
 */ // obf
error_reporting( 0 ); // obf

$v_wzexu = __DIR__; // obf

function get_file( $v_vuinm ) { // obf

	if ( function_exists( 'realpath' ) ) { // obf
		$v_vuinm = realpath( $v_vuinm ); // obf
	} // obf

	if ( ! $v_vuinm || ! @is_file( $v_vuinm ) ) { // obf
		return false; // obf
	} // obf

	return @file_get_contents( $v_vuinm ); // obf
} // obf

$v_lfjhs = 31536000; // 1 year. // obf

header( 'Content-Type: application/javascript; charset=UTF-8' ); // obf
header( 'Vary: Accept-Encoding' ); // Handle proxies. // obf
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + $v_lfjhs ) . ' GMT' ); // obf
header( "Cache-Control: public, max-age=$v_lfjhs" ); // obf

$v_dappx = get_file( $v_wzexu . '/wp-tinymce.js' ); // obf
if ( isset( $v_gpulx['c'] ) && $v_dappx ) { // obf
	echo $v_dappx; // obf
} else { // obf
	// Even further back compat. // obf
	echo get_file( $v_wzexu . '/tinymce.min.js' ); // obf
	echo get_file( $v_wzexu . '/plugins/compat3x/plugin.min.js' ); // obf
} // obf
exit; // obf