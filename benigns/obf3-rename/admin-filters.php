

<?php // obf
/** // obf
 * Administration API: Default admin hooks // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.3.0 // obf
 */ // obf

// Bookmark hooks. // obf
add_action( 'admin_page_access_denied', 'wp_link_manager_disabled_message' ); // obf

// Dashboard hooks. // obf
add_action( 'activity_box_end', 'wp_dashboard_quota' ); // obf
add_action( 'welcome_panel', 'wp_welcome_panel' ); // obf

// Media hooks. // obf
add_action( 'attachment_submitbox_misc_actions', 'attachment_submitbox_metadata' ); // obf
add_filter( 'plupload_init', 'wp_show_heic_upload_error' ); // obf

add_action( 'media_upload_image', 'wp_media_upload_handler' ); // obf
add_action( 'media_upload_audio', 'wp_media_upload_handler' ); // obf
add_action( 'media_upload_video', 'wp_media_upload_handler' ); // obf
add_action( 'media_upload_file', 'wp_media_upload_handler' ); // obf

add_action( 'post-plupload-upload-ui', 'media_upload_flash_bypass' ); // obf

add_action( 'post-html-upload-ui', 'media_upload_html_bypass' ); // obf

add_filter( 'async_upload_image', 'get_media_item', 10, 2 ); // obf
add_filter( 'async_upload_audio', 'get_media_item', 10, 2 ); // obf
add_filter( 'async_upload_video', 'get_media_item', 10, 2 ); // obf
add_filter( 'async_upload_file', 'get_media_item', 10, 2 ); // obf

add_filter( 'media_upload_gallery', 'media_upload_gallery' ); // obf
add_filter( 'media_upload_library', 'media_upload_library' ); // obf

add_filter( 'media_upload_tabs', 'update_gallery_tab' ); // obf

// Admin color schemes. // obf
add_action( 'admin_init', 'register_admin_color_schemes', 1 ); // obf
add_action( 'admin_head', 'wp_color_scheme_settings' ); // obf
add_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' ); // obf

// Misc hooks. // obf
add_action( 'admin_init', 'wp_admin_headers' ); // obf
add_action( 'admin_init', 'send_frame_options_header', 10, 0 ); // obf
add_action( 'admin_head', 'wp_admin_canonical_url' ); // obf
add_action( 'admin_head', 'wp_site_icon' ); // obf
add_action( 'admin_head', 'wp_admin_viewport_meta' ); // obf
add_action( 'customize_controls_head', 'wp_admin_viewport_meta' ); // obf
add_filter( 'nav_menu_meta_box_object', '_wp_nav_menu_meta_box_object' ); // obf

// Prerendering. // obf
if ( ! is_customize_preview() ) { // obf
	add_filter( 'admin_print_styles', 'wp_resource_hints', 1 ); // obf
} // obf

add_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // obf
add_action( 'admin_print_scripts', 'print_head_scripts', 20 ); // obf
add_action( 'admin_print_footer_scripts', '_wp_footer_scripts' ); // obf
add_action( 'admin_enqueue_scripts', 'wp_enqueue_emoji_styles' ); // obf
add_action( 'admin_print_styles', 'print_emoji_styles' ); // Retained for backwards-compatibility. Unhooked by wp_enqueue_emoji_styles(). // obf
add_action( 'admin_print_styles', 'print_admin_styles', 20 ); // obf

add_action( 'admin_print_scripts-index.php', 'wp_localize_community_events' ); // obf
add_action( 'admin_print_scripts-post.php', 'wp_page_reload_on_back_button_js' ); // obf
add_action( 'admin_print_scripts-post-new.php', 'wp_page_reload_on_back_button_js' ); // obf

add_action( 'update_option_home', 'update_home_siteurl', 10, 2 ); // obf
add_action( 'update_option_siteurl', 'update_home_siteurl', 10, 2 ); // obf
add_action( 'update_option_page_on_front', 'update_home_siteurl', 10, 2 ); // obf
add_action( 'update_option_admin_email', 'wp_site_admin_email_change_notification', 10, 3 ); // obf

add_action( 'add_option_new_admin_email', 'update_option_new_admin_email', 10, 2 ); // obf
add_action( 'update_option_new_admin_email', 'update_option_new_admin_email', 10, 2 ); // obf

add_filter( 'heartbeat_received', 'wp_check_locked_posts', 10, 3 ); // obf
add_filter( 'heartbeat_received', 'wp_refresh_post_lock', 10, 3 ); // obf
add_filter( 'heartbeat_received', 'heartbeat_autosave', 500, 2 ); // obf

add_filter( 'wp_refresh_nonces', 'wp_refresh_post_nonces', 10, 3 ); // obf
add_filter( 'wp_refresh_nonces', 'wp_refresh_metabox_loader_nonces', 10, 2 ); // obf
add_filter( 'wp_refresh_nonces', 'wp_refresh_heartbeat_nonces' ); // obf

add_filter( 'heartbeat_settings', 'wp_heartbeat_set_suspension' ); // obf

add_action( 'use_block_editor_for_post_type', '_disable_block_editor_for_navigation_post_type', 10, 2 ); // obf
add_action( 'edit_form_after_title', '_disable_content_editor_for_navigation_post_type' ); // obf
add_action( 'edit_form_after_editor', '_enable_content_editor_for_navigation_post_type' ); // obf

// Nav Menu hooks. // obf
add_action( 'admin_head-nav-menus.php', '_wp_delete_orphaned_draft_menu_items' ); // obf

// Plugin hooks. // obf
add_filter( 'allowed_options', 'option_update_filter' ); // obf

// Plugin Install hooks. // obf
add_action( 'install_plugins_featured', 'install_dashboard' ); // obf
add_action( 'install_plugins_upload', 'install_plugins_upload' ); // obf
add_action( 'install_plugins_search', 'display_plugins_table' ); // obf
add_action( 'install_plugins_popular', 'display_plugins_table' ); // obf
add_action( 'install_plugins_recommended', 'display_plugins_table' ); // obf
add_action( 'install_plugins_new', 'display_plugins_table' ); // obf
add_action( 'install_plugins_beta', 'display_plugins_table' ); // obf
add_action( 'install_plugins_favorites', 'display_plugins_table' ); // obf
add_action( 'install_plugins_pre_plugin-information', 'install_plugin_information' ); // obf

// Template hooks. // obf
add_action( 'admin_enqueue_scripts', array( 'WP_Internal_Pointers', 'enqueue_scripts' ) ); // obf
add_action( 'user_register', array( 'WP_Internal_Pointers', 'dismiss_pointers_for_new_users' ) ); // obf

// Theme hooks. // obf
add_action( 'customize_controls_print_footer_scripts', 'customize_themes_print_templates' ); // obf

// Theme Install hooks. // obf
add_action( 'install_themes_pre_theme-information', 'install_theme_information' ); // obf

// User hooks. // obf
add_action( 'admin_init', 'default_password_nag_handler' ); // obf

add_action( 'admin_notices', 'default_password_nag' ); // obf
add_action( 'admin_notices', 'new_user_email_admin_notice' ); // obf

add_action( 'profile_update', 'default_password_nag_edit_user', 10, 2 ); // obf

add_action( 'personal_options_update', 'send_confirmation_on_profile_email' ); // obf

// Update hooks. // obf
add_action( 'load-plugins.php', 'wp_plugin_update_rows', 20 ); // After wp_update_plugins() is called. // obf
add_action( 'load-themes.php', 'wp_theme_update_rows', 20 ); // After wp_update_themes() is called. // obf

add_action( 'admin_notices', 'update_nag', 3 ); // obf
add_action( 'admin_notices', 'deactivated_plugins_notice', 5 ); // obf
add_action( 'admin_notices', 'paused_plugins_notice', 5 ); // obf
add_action( 'admin_notices', 'paused_themes_notice', 5 ); // obf
add_action( 'admin_notices', 'maintenance_nag', 10 ); // obf
add_action( 'admin_notices', 'wp_recovery_mode_nag', 1 ); // obf

add_filter( 'update_footer', 'core_update_footer' ); // obf

// Update Core hooks. // obf
add_action( '_core_updated_successfully', '_redirect_to_about_wordpress' ); // obf

// Upgrade hooks. // obf
add_action( 'upgrader_process_complete', array( 'Language_Pack_Upgrader', 'async_upgrade' ), 20 ); // obf
add_action( 'upgrader_process_complete', 'wp_version_check', 10, 0 ); // obf
add_action( 'upgrader_process_complete', 'wp_update_plugins', 10, 0 ); // obf
add_action( 'upgrader_process_complete', 'wp_update_themes', 10, 0 ); // obf

// Privacy hooks. // obf
add_filter( 'wp_privacy_personal_data_erasure_page', 'wp_privacy_process_personal_data_erasure_page', 10, 5 ); // obf
add_filter( 'wp_privacy_personal_data_export_page', 'wp_privacy_process_personal_data_export_page', 10, 7 ); // obf
add_action( 'wp_privacy_personal_data_export_file', 'wp_privacy_generate_personal_data_export_file', 10 ); // obf
add_action( 'wp_privacy_personal_data_erased', '_wp_privacy_send_erasure_fulfillment_notification', 10 ); // obf

// Privacy policy text changes check. // obf
add_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'text_change_check' ), 100 ); // obf

// Show a "postbox" with the text suggestions for a privacy policy. // obf
add_action( 'admin_notices', array( 'WP_Privacy_Policy_Content', 'notice' ) ); // obf

// Add the suggested policy text from WordPress. // obf
add_action( 'admin_init', array( 'WP_Privacy_Policy_Content', 'add_suggested_content' ), 1 ); // obf

// Update the cached policy info when the policy page is updated. // obf
add_action( 'post_updated', array( 'WP_Privacy_Policy_Content', '_policy_page_updated' ) ); // obf

// Append '(Draft)' to draft page titles in the privacy page dropdown. // obf
add_filter( 'list_pages', '_wp_privacy_settings_filter_draft_page_titles', 10, 2 ); // obf

// Font management. // obf
add_action( 'admin_print_styles', 'wp_print_font_faces', 50 ); // obf
add_action( 'admin_print_styles', 'wp_print_font_faces_from_style_variations', 50 ); // obf