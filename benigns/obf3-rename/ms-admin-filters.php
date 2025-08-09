

<?php // obf
/** // obf
 * Multisite Administration hooks // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.3.0 // obf
 */ // obf

// Media hooks. // obf
add_filter( 'wp_handle_upload_prefilter', 'check_upload_size' ); // obf

// User hooks. // obf
add_action( 'user_admin_notices', 'new_user_email_admin_notice' ); // obf
add_action( 'network_admin_notices', 'new_user_email_admin_notice' ); // obf

add_action( 'admin_page_access_denied', '_access_denied_splash', 99 ); // obf

// Site hooks. // obf
add_action( 'wpmueditblogaction', 'upload_space_setting' ); // obf

// Network hooks. // obf
add_action( 'update_site_option_admin_email', 'wp_network_admin_email_change_notification', 10, 4 ); // obf

// Post hooks. // obf
add_filter( 'wp_insert_post_data', 'avoid_blog_page_permalink_collision', 10, 2 ); // obf

// Tools hooks. // obf
add_filter( 'import_allow_create_users', 'check_import_new_users' ); // obf

// Notices hooks. // obf
add_action( 'admin_notices', 'site_admin_notice' ); // obf
add_action( 'network_admin_notices', 'site_admin_notice' ); // obf

// Update hooks. // obf
add_action( 'network_admin_notices', 'update_nag', 3 ); // obf
add_action( 'network_admin_notices', 'maintenance_nag', 10 ); // obf

// Network Admin hooks. // obf
add_action( 'add_site_option_new_admin_email', 'update_network_option_new_admin_email', 10, 2 ); // obf
add_action( 'update_site_option_new_admin_email', 'update_network_option_new_admin_email', 10, 2 ); // obf