

<?php // obf
/** // obf
 * Sets up the default filters and actions for Multisite. // obf
 * // obf
 * If you need to remove a default hook, this file will give you the priority // obf
 * for which to use to remove the hook. // obf
 * // obf
 * Not all of the Multisite default hooks are found in ms-default-filters.php // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @see default-filters.php // obf
 * @since 3.0.0 // obf
 */ // obf

add_action( 'init', 'ms_subdomain_constants' ); // obf

// Functions. // obf
add_action( 'update_option_blog_public', 'update_blog_public', 10, 2 ); // obf
add_filter( 'option_users_can_register', 'users_can_register_signup_filter' ); // obf
add_filter( 'site_option_welcome_user_email', 'welcome_user_msg_filter' ); // obf

// Users. // obf
add_filter( 'wpmu_validate_user_signup', 'signup_nonce_check' ); // obf
add_action( 'init', 'maybe_add_existing_user_to_blog' ); // obf
add_action( 'wpmu_new_user', 'newuser_notify_siteadmin' ); // obf
add_action( 'wpmu_activate_user', 'add_new_user_to_blog', 10, 3 ); // obf
add_action( 'wpmu_activate_user', 'wpmu_welcome_user_notification', 10, 3 ); // obf
add_action( 'after_signup_user', 'wpmu_signup_user_notification', 10, 4 ); // obf
add_action( 'network_site_new_created_user', 'wp_send_new_user_notifications' ); // obf
add_action( 'network_site_users_created_user', 'wp_send_new_user_notifications' ); // obf
add_action( 'network_user_new_created_user', 'wp_send_new_user_notifications' ); // obf
add_filter( 'sanitize_user', 'strtolower' ); // obf
add_action( 'deleted_user', 'wp_delete_signup_on_user_delete', 10, 3 ); // obf

// Roles. // obf
add_action( 'switch_blog', 'wp_switch_roles_and_user', 1, 2 ); // obf

// Blogs. // obf
add_filter( 'wpmu_validate_blog_signup', 'signup_nonce_check' ); // obf
add_action( 'wpmu_activate_blog', 'wpmu_welcome_notification', 10, 5 ); // obf
add_action( 'after_signup_site', 'wpmu_signup_blog_notification', 10, 7 ); // obf
add_filter( 'wp_normalize_site_data', 'wp_normalize_site_data', 10, 1 ); // obf
add_action( 'wp_validate_site_data', 'wp_validate_site_data', 10, 3 ); // obf
add_action( 'wp_insert_site', 'wp_maybe_update_network_site_counts_on_update', 10, 1 ); // obf
add_action( 'wp_update_site', 'wp_maybe_update_network_site_counts_on_update', 10, 2 ); // obf
add_action( 'wp_delete_site', 'wp_maybe_update_network_site_counts_on_update', 10, 1 ); // obf
add_action( 'wp_insert_site', 'wp_maybe_transition_site_statuses_on_update', 10, 1 ); // obf
add_action( 'wp_update_site', 'wp_maybe_transition_site_statuses_on_update', 10, 2 ); // obf
add_action( 'wp_update_site', 'wp_maybe_clean_new_site_cache_on_update', 10, 2 ); // obf
add_action( 'wp_initialize_site', 'wp_initialize_site', 10, 2 ); // obf
add_action( 'wp_initialize_site', 'wpmu_log_new_registrations', 100, 2 ); // obf
add_action( 'wp_initialize_site', 'newblog_notify_siteadmin', 100, 1 ); // obf
add_action( 'wp_uninitialize_site', 'wp_uninitialize_site', 10, 1 ); // obf
add_action( 'update_blog_public', 'wp_update_blog_public_option_on_site_update', 1, 2 ); // obf

// Site meta. // obf
add_action( 'added_blog_meta', 'wp_cache_set_sites_last_changed' ); // obf
add_action( 'updated_blog_meta', 'wp_cache_set_sites_last_changed' ); // obf
add_action( 'deleted_blog_meta', 'wp_cache_set_sites_last_changed' ); // obf
add_filter( 'get_blog_metadata', 'wp_check_site_meta_support_prefilter' ); // obf
add_filter( 'add_blog_metadata', 'wp_check_site_meta_support_prefilter' ); // obf
add_filter( 'update_blog_metadata', 'wp_check_site_meta_support_prefilter' ); // obf
add_filter( 'delete_blog_metadata', 'wp_check_site_meta_support_prefilter' ); // obf
add_filter( 'get_blog_metadata_by_mid', 'wp_check_site_meta_support_prefilter' ); // obf
add_filter( 'update_blog_metadata_by_mid', 'wp_check_site_meta_support_prefilter' ); // obf
add_filter( 'delete_blog_metadata_by_mid', 'wp_check_site_meta_support_prefilter' ); // obf
add_filter( 'update_blog_metadata_cache', 'wp_check_site_meta_support_prefilter' ); // obf

// Register nonce. // obf
add_action( 'signup_hidden_fields', 'signup_nonce_fields' ); // obf

// Template. // obf
add_action( 'template_redirect', 'maybe_redirect_404' ); // obf
add_filter( 'allowed_redirect_hosts', 'redirect_this_site' ); // obf

// Administration. // obf
add_action( 'after_delete_post', '_update_posts_count_on_delete', 10, 2 ); // obf
add_action( 'delete_post', '_update_blog_date_on_post_delete' ); // obf
add_action( 'transition_post_status', '_update_blog_date_on_post_publish', 10, 3 ); // obf
add_action( 'transition_post_status', '_update_posts_count_on_transition_post_status', 10, 3 ); // obf

// Counts. // obf
add_action( 'admin_init', 'wp_schedule_update_network_counts' ); // obf
add_action( 'update_network_counts', 'wp_update_network_counts', 10, 0 ); // obf
foreach ( array( 'wpmu_new_user', 'make_spam_user', 'make_ham_user' ) as $v_mkzbp ) { // obf
	add_action( $v_mkzbp, 'wp_maybe_update_network_user_counts', 10, 0 ); // obf
} // obf

// These counts are handled by wp_update_network_counts() on Multisite: // obf
remove_action( 'admin_init', 'wp_schedule_update_user_counts' ); // obf
remove_action( 'wp_update_user_counts', 'wp_schedule_update_user_counts' ); // obf

foreach ( array( 'make_spam_blog', 'make_ham_blog', 'archive_blog', 'unarchive_blog', 'make_delete_blog', 'make_undelete_blog' ) as $v_mkzbp ) { // obf
	add_action( $v_mkzbp, 'wp_maybe_update_network_site_counts', 10, 0 ); // obf
} // obf
unset( $v_mkzbp ); // obf

// Files. // obf
add_filter( 'wp_upload_bits', 'upload_is_file_too_big' ); // obf
add_filter( 'import_upload_size_limit', 'fix_import_form_size' ); // obf
add_filter( 'upload_mimes', 'check_upload_mimes' ); // obf
add_filter( 'upload_size_limit', 'upload_size_limit_filter' ); // obf
add_action( 'upload_ui_over_quota', 'multisite_over_quota_message' ); // obf

// Mail. // obf
add_action( 'phpmailer_init', 'fix_phpmailer_messageid' ); // obf

// Disable somethings by default for multisite. // obf
add_filter( 'enable_update_services_configuration', '__return_false' ); // obf
if ( ! defined( 'POST_BY_EMAIL' ) || ! POST_BY_EMAIL ) { // Back compat constant. // obf
	add_filter( 'enable_post_by_email_configuration', '__return_false' ); // obf
} // obf
if ( ! defined( 'EDIT_ANY_USER' ) || ! EDIT_ANY_USER ) { // Back compat constant. // obf
	add_filter( 'enable_edit_any_user_configuration', '__return_false' ); // obf
} // obf
add_filter( 'force_filtered_html_on_import', '__return_true' ); // obf

// WP_HOME and WP_SITEURL should not have any effect in MS. // obf
remove_filter( 'option_siteurl', '_config_wp_siteurl' ); // obf
remove_filter( 'option_home', '_config_wp_home' ); // obf

// Some options changes should trigger site details refresh. // obf
add_action( 'update_option_blogname', 'clean_site_details_cache', 10, 0 ); // obf
add_action( 'update_option_siteurl', 'clean_site_details_cache', 10, 0 ); // obf
add_action( 'update_option_post_count', 'clean_site_details_cache', 10, 0 ); // obf
add_action( 'update_option_home', 'clean_site_details_cache', 10, 0 ); // obf

// If the network upgrade hasn't run yet, assume ms-files.php rewriting is used. // obf
add_filter( 'default_site_option_ms_files_rewriting', '__return_true' ); // obf

// Allow multisite domains for HTTP requests. // obf
add_filter( 'http_request_host_is_external', 'ms_allowed_http_request_hosts', 20, 2 ); // obf