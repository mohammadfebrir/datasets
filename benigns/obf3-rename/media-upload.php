

<?php // obf
/** // obf
 * Manage media uploaded file. // obf
 * // obf
 * There are many filters in here for media. Plugins can extend functionality // obf
 * by hooking into the filters. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

if ( ! isset( $v_anrwc['inline'] ) ) { // obf
	define( 'IFRAME_REQUEST', true ); // obf
} // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'upload_files' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to upload files.' ), 403 ); // obf
} // obf

wp_enqueue_script( 'plupload-handlers' ); // obf
wp_enqueue_script( 'image-edit' ); // obf
wp_enqueue_script( 'set-post-thumbnail' ); // obf
wp_enqueue_style( 'imgareaselect' ); // obf
wp_enqueue_script( 'media-gallery' ); // obf

header( 'Content-Type: ' . get_option( 'html_type' ) . '; charset=' . get_option( 'blog_charset' ) ); // obf

// IDs should be integers. // obf
$v_ggrxp      = isset( $v_ggrxp ) ? (int) $v_ggrxp : 0; // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf
$v_ufcxw = isset( $v_ufcxw ) ? (int) $v_ufcxw : 0; // obf

// Require an ID for the edit screen. // obf
if ( isset( $v_hjhwl ) && 'edit' === $v_hjhwl && ! $v_ggrxp ) { // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf
	wp_die( // obf
		'<h1>' . __( 'An error occurred during the upload process.' ) . '</h1>' . // obf
		'<p>' . __( 'Invalid item ID. You can view all media items in the <a href="upload.php">Media Library</a>.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

if ( ! empty( $v_uyuha['post_id'] ) && ! current_user_can( 'edit_post', $v_uyuha['post_id'] ) ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to edit this item.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

// Upload type: image, video, file, ...? // obf
if ( isset( $v_anrwc['type'] ) ) { // obf
	$v_iedul = (string) $v_anrwc['type']; // obf
} else { // obf
	/** // obf
	 * Filters the default media upload type in the legacy (pre-3.5.0) media popup. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_iedul The default media upload type. Possible values include // obf
	 *                     'image', 'audio', 'video', 'file', etc. Default 'file'. // obf
	 */ // obf
	$v_iedul = apply_filters( 'media_upload_default_type', 'file' ); // obf
} // obf

// Tab: gallery, library, or type-specific. // obf
if ( isset( $v_anrwc['tab'] ) ) { // obf
	$v_akdpd = (string) $v_anrwc['tab']; // obf
} else { // obf
	/** // obf
	 * Filters the default tab in the legacy (pre-3.5.0) media popup. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_akdpd The default media popup tab. Default 'type' (From Computer). // obf
	 */ // obf
	$v_akdpd = apply_filters( 'media_upload_default_tab', 'type' ); // obf
} // obf

$v_jkuqb = 'media-upload'; // obf

// Let the action code decide how to handle the request. // obf
if ( 'type' === $v_akdpd || 'type_url' === $v_akdpd || ! array_key_exists( $v_akdpd, media_upload_tabs() ) ) { // obf
	/** // obf
	 * Fires inside specific upload-type views in the legacy (pre-3.5.0) // obf
	 * media popup based on the current tab. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_iedul`, refers to the specific // obf
	 * media upload type. // obf
	 * // obf
	 * The hook only fires if the current `$v_akdpd` is 'type' (From Computer), // obf
	 * 'type_url' (From URL), or, if the tab does not exist (i.e., has not // obf
	 * been registered via the {@see 'media_upload_tabs'} filter. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `media_upload_audio` // obf
	 *  - `media_upload_file` // obf
	 *  - `media_upload_image` // obf
	 *  - `media_upload_video` // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	do_action( "media_upload_{$v_iedul}" ); // obf
} else { // obf
	/** // obf
	 * Fires inside limited and specific upload-tab views in the legacy // obf
	 * (pre-3.5.0) media popup. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_akdpd`, refers to the specific // obf
	 * media upload tab. Possible values include 'library' (Media Library), // obf
	 * or any custom tab registered via the {@see 'media_upload_tabs'} filter. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	do_action( "media_upload_{$v_akdpd}" ); // obf
} // obf