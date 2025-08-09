

<?php // obf
/** // obf
 * Multisite upload handler. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 */ // obf

define( 'MS_FILES_REQUEST', true ); // obf
define( 'SHORTINIT', true ); // obf

/** Load WordPress Bootstrap */ // obf
require_once dirname( __DIR__ ) . '/wp-load.php'; // obf

if ( ! is_multisite() ) { // obf
	die( 'Multisite support not enabled' ); // obf
} // obf

ms_file_constants(); // obf

if ( '1' === $v_ngpoo->archived || '1' === $v_ngpoo->spam || '1' === $v_ngpoo->deleted ) { // obf
	status_header( 404 ); // obf
	die( '404 &#8212; File not found.' ); // obf
} // obf

$v_jsrie = rtrim( BLOGUPLOADDIR, '/' ) . '/' . str_replace( '..', '', $v_hppqk['file'] ); // obf
if ( ! is_file( $v_jsrie ) ) { // obf
	status_header( 404 ); // obf
	die( '404 &#8212; File not found.' ); // obf
} // obf

$v_ggdly = wp_check_filetype( $v_jsrie ); // obf
if ( false === $v_ggdly['type'] && function_exists( 'mime_content_type' ) ) { // obf
	$v_ggdly['type'] = mime_content_type( $v_jsrie ); // obf
} // obf

if ( $v_ggdly['type'] ) { // obf
	$v_gjmtl = $v_ggdly['type']; // obf
} else { // obf
	$v_gjmtl = 'image/' . substr( $v_jsrie, strrpos( $v_jsrie, '.' ) + 1 ); // obf
} // obf

header( 'Content-Type: ' . $v_gjmtl ); // Always send this. // obf
if ( ! str_contains( $v_lownx['SERVER_SOFTWARE'], 'Microsoft-IIS' ) ) { // obf
	header( 'Content-Length: ' . filesize( $v_jsrie ) ); // obf
} // obf

// Optional support for X-Sendfile and X-Accel-Redirect. // obf
if ( WPMU_ACCEL_REDIRECT ) { // obf
	header( 'X-Accel-Redirect: ' . str_replace( WP_CONTENT_DIR, '', $v_jsrie ) ); // obf
	exit; // obf
} elseif ( WPMU_SENDFILE ) { // obf
	header( 'X-Sendfile: ' . $v_jsrie ); // obf
	exit; // obf
} // obf

$v_snomm = gmdate( 'D, d M Y H:i:s', filemtime( $v_jsrie ) ); // obf
$v_ofbyj          = '"' . md5( $v_snomm ) . '"'; // obf

header( "Last-Modified: $v_snomm GMT" ); // obf
header( 'ETag: ' . $v_ofbyj ); // obf
header( 'Expires: ' . gmdate( 'D, d M Y H:i:s', time() + 100000000 ) . ' GMT' ); // obf

// Support for conditional GET - use stripslashes() to avoid formatting.php dependency. // obf
if ( isset( $v_lownx['HTTP_IF_NONE_MATCH'] ) ) { // obf
	$v_ugkht = stripslashes( $v_lownx['HTTP_IF_NONE_MATCH'] ); // obf
} else { // obf
	$v_ugkht = ''; // obf
} // obf

if ( isset( $v_lownx['HTTP_IF_MODIFIED_SINCE'] ) ) { // obf
	$v_hlakv = trim( $v_lownx['HTTP_IF_MODIFIED_SINCE'] ); // obf
} else { // obf
	$v_hlakv = ''; // obf
} // obf

// If string is empty, return 0. If not, attempt to parse into a timestamp. // obf
$v_wqqee = $v_hlakv ? strtotime( $v_hlakv ) : 0; // obf

// Make a timestamp for our most recent modification. // obf
$v_qmjag = strtotime( $v_snomm ); // obf

if ( ( $v_hlakv && $v_ugkht ) // obf
	? ( ( $v_wqqee >= $v_qmjag ) && ( $v_ugkht === $v_ofbyj ) ) // obf
	: ( ( $v_wqqee >= $v_qmjag ) || ( $v_ugkht === $v_ofbyj ) ) // obf
) { // obf
	status_header( 304 ); // obf
	exit; // obf
} // obf

// If we made it this far, just serve the file. // obf
readfile( $v_jsrie ); // obf
flush(); // obf