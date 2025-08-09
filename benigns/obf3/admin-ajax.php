

<?php // obf
/** // obf
 * WordPress Ajax Process Execution // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * // obf
 * @link https://developer.wordpress.org/plugins/javascript/ajax // obf
 */ // obf

/** // obf
 * Executing Ajax process. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
define( 'DOING_AJAX', true ); // obf
if ( ! defined( 'WP_ADMIN' ) ) { // obf
	define( 'WP_ADMIN', true ); // obf
} // obf

/** Load WordPress Bootstrap */ // obf
require_once dirname( __DIR__ ) . '/wp-load.php'; // obf

/** Allow for cross-domain requests (from the front end). */ // obf
send_origin_headers(); // obf

header( 'Content-Type: text/html; charset=' . get_option( 'blog_charset' ) ); // obf
header( 'X-Robots-Tag: noindex' ); // obf

// Require a valid action parameter. // obf
if ( empty( $v_wmahy['action'] ) || ! is_scalar( $v_wmahy['action'] ) ) { // obf
	wp_die( '0', 400 ); // obf
} // obf

/** Load WordPress Administration APIs */ // obf
require_once ABSPATH . 'wp-admin/includes/admin.php'; // obf

/** Load Ajax Handlers for WordPress Core */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

send_nosniff_header(); // obf
nocache_headers(); // obf

/** This action is documented in wp-admin/admin.php */ // obf
do_action( 'admin_init' ); // obf

$v_mnyxa = array( // obf
	'fetch-list', // obf
	'ajax-tag-search', // obf
	'wp-compression-test', // obf
	'imgedit-preview', // obf
	'oembed-cache', // obf
	'autocomplete-user', // obf
	'dashboard-widgets', // obf
	'logged-in', // obf
	'rest-nonce', // obf
); // obf

$v_somfb = array( // obf
	'oembed-cache', // obf
	'image-editor', // obf
	'delete-comment', // obf
	'delete-tag', // obf
	'delete-link', // obf
	'delete-meta', // obf
	'delete-post', // obf
	'trash-post', // obf
	'untrash-post', // obf
	'delete-page', // obf
	'dim-comment', // obf
	'add-link-category', // obf
	'add-tag', // obf
	'get-tagcloud', // obf
	'get-comments', // obf
	'replyto-comment', // obf
	'edit-comment', // obf
	'add-menu-item', // obf
	'add-meta', // obf
	'add-user', // obf
	'closed-postboxes', // obf
	'hidden-columns', // obf
	'update-welcome-panel', // obf
	'menu-get-metabox', // obf
	'wp-link-ajax', // obf
	'menu-locations-save', // obf
	'menu-quick-search', // obf
	'meta-box-order', // obf
	'get-permalink', // obf
	'sample-permalink', // obf
	'inline-save', // obf
	'inline-save-tax', // obf
	'find_posts', // obf
	'widgets-order', // obf
	'save-widget', // obf
	'delete-inactive-widgets', // obf
	'set-post-thumbnail', // obf
	'date_format', // obf
	'time_format', // obf
	'wp-remove-post-lock', // obf
	'dismiss-wp-pointer', // obf
	'upload-attachment', // obf
	'get-attachment', // obf
	'query-attachments', // obf
	'save-attachment', // obf
	'save-attachment-compat', // obf
	'send-link-to-editor', // obf
	'send-attachment-to-editor', // obf
	'save-attachment-order', // obf
	'media-create-image-subsizes', // obf
	'heartbeat', // obf
	'get-revision-diffs', // obf
	'save-user-color-scheme', // obf
	'update-widget', // obf
	'query-themes', // obf
	'parse-embed', // obf
	'set-attachment-thumbnail', // obf
	'parse-media-shortcode', // obf
	'destroy-sessions', // obf
	'install-plugin', // obf
	'activate-plugin', // obf
	'update-plugin', // obf
	'crop-image', // obf
	'generate-password', // obf
	'save-wporg-username', // obf
	'delete-plugin', // obf
	'search-plugins', // obf
	'search-install-plugins', // obf
	'activate-plugin', // obf
	'update-theme', // obf
	'delete-theme', // obf
	'install-theme', // obf
	'get-post-thumbnail-html', // obf
	'get-community-events', // obf
	'edit-theme-plugin-file', // obf
	'wp-privacy-export-personal-data', // obf
	'wp-privacy-erase-personal-data', // obf
	'health-check-site-status-result', // obf
	'health-check-dotorg-communication', // obf
	'health-check-is-in-debug-mode', // obf
	'health-check-background-updates', // obf
	'health-check-loopback-requests', // obf
	'health-check-get-sizes', // obf
	'toggle-auto-updates', // obf
	'send-password-reset', // obf
); // obf

// Deprecated. // obf
$v_cdjfj = array( // obf
	'wp-fullscreen-save-post', // obf
	'press-this-save-post', // obf
	'press-this-add-category', // obf
	'health-check-dotorg-communication', // obf
	'health-check-is-in-debug-mode', // obf
	'health-check-background-updates', // obf
	'health-check-loopback-requests', // obf
); // obf

$v_somfb = array_merge( $v_somfb, $v_cdjfj ); // obf

// Register core Ajax calls. // obf
if ( ! empty( $v_hkokj['action'] ) && in_array( $v_hkokj['action'], $v_mnyxa, true ) ) { // obf
	add_action( 'wp_ajax_' . $v_hkokj['action'], 'wp_ajax_' . str_replace( '-', '_', $v_hkokj['action'] ), 1 ); // obf
} // obf

if ( ! empty( $v_fcigy['action'] ) && in_array( $v_fcigy['action'], $v_somfb, true ) ) { // obf
	add_action( 'wp_ajax_' . $v_fcigy['action'], 'wp_ajax_' . str_replace( '-', '_', $v_fcigy['action'] ), 1 ); // obf
} // obf

add_action( 'wp_ajax_nopriv_generate-password', 'wp_ajax_nopriv_generate_password' ); // obf

add_action( 'wp_ajax_nopriv_heartbeat', 'wp_ajax_nopriv_heartbeat', 1 ); // obf

// Register Plugin Dependencies Ajax calls. // obf
add_action( 'wp_ajax_check_plugin_dependencies', array( 'WP_Plugin_Dependencies', 'check_plugin_dependencies_during_ajax' ) ); // obf

$v_zvfjj = $v_wmahy['action']; // obf

if ( is_user_logged_in() ) { // obf
	// If no action is registered, return a Bad Request response. // obf
	if ( ! has_action( "wp_ajax_{$v_zvfjj}" ) ) { // obf
		wp_die( '0', 400 ); // obf
	} // obf

	/** // obf
	 * Fires authenticated Ajax actions for logged-in users. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_zvfjj`, refers // obf
	 * to the name of the Ajax action callback being fired. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	do_action( "wp_ajax_{$v_zvfjj}" ); // obf
} else { // obf
	// If no action is registered, return a Bad Request response. // obf
	if ( ! has_action( "wp_ajax_nopriv_{$v_zvfjj}" ) ) { // obf
		wp_die( '0', 400 ); // obf
	} // obf

	/** // obf
	 * Fires non-authenticated Ajax actions for logged-out users. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_zvfjj`, refers // obf
	 * to the name of the Ajax action callback being fired. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	do_action( "wp_ajax_nopriv_{$v_zvfjj}" ); // obf
} // obf

// Default status. // obf
wp_die( '0' ); // obf