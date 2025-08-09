

<?php // obf
/** // obf
 * Sets up the default filters and actions for most // obf
 * of the WordPress hooks. // obf
 * // obf
 * This file is loaded very early in the bootstrap which // obf
 * means many functions are not yet available and site // obf
 * information such as if this is multisite is unknown. // obf
 * Before using functions besides `add_filter` and // obf
 * `add_action`, verify things will work as expected. // obf
 * // obf
 * If you need to remove a default hook, this file will // obf
 * give you the priority to use for removing the hook. // obf
 * // obf
 * Not all of the default hooks are found in this file. // obf
 * For instance, administration-related hooks are located in // obf
 * wp-admin/includes/admin-filters.php. // obf
 * // obf
 * If a hook should only be called from a specific context // obf
 * (admin area, multisite environment…), please move it // obf
 * to a more appropriate file instead. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

// Strip, trim, kses, special chars for string saves. // obf
foreach ( array( 'pre_term_name', 'pre_comment_author_name', 'pre_link_name', 'pre_link_target', 'pre_link_rel', 'pre_user_display_name', 'pre_user_first_name', 'pre_user_last_name', 'pre_user_nickname' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'sanitize_text_field' ); // obf
	add_filter( $v_opvqj, 'wp_filter_kses' ); // obf
	add_filter( $v_opvqj, '_wp_specialchars', 30 ); // obf
} // obf

// Strip, kses, special chars for string display. // obf
foreach ( array( 'term_name', 'comment_author_name', 'link_name', 'link_target', 'link_rel', 'user_display_name', 'user_first_name', 'user_last_name', 'user_nickname' ) as $v_opvqj ) { // obf
	if ( is_admin() ) { // obf
		// These are expensive. Run only on admin pages for defense in depth. // obf
		add_filter( $v_opvqj, 'sanitize_text_field' ); // obf
		add_filter( $v_opvqj, 'wp_kses_data' ); // obf
	} // obf
	add_filter( $v_opvqj, '_wp_specialchars', 30 ); // obf
} // obf

// Kses only for textarea saves. // obf
foreach ( array( 'pre_term_description', 'pre_link_description', 'pre_link_notes', 'pre_user_description' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'wp_filter_kses' ); // obf
} // obf

// Kses only for textarea admin displays. // obf
if ( is_admin() ) { // obf
	foreach ( array( 'term_description', 'link_description', 'link_notes', 'user_description' ) as $v_opvqj ) { // obf
		add_filter( $v_opvqj, 'wp_kses_data' ); // obf
	} // obf
	add_filter( 'comment_text', 'wp_kses_post' ); // obf
} // obf

// Email saves. // obf
foreach ( array( 'pre_comment_author_email', 'pre_user_email' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'trim' ); // obf
	add_filter( $v_opvqj, 'sanitize_email' ); // obf
	add_filter( $v_opvqj, 'wp_filter_kses' ); // obf
} // obf

// Email admin display. // obf
foreach ( array( 'comment_author_email', 'user_email' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'sanitize_email' ); // obf
	if ( is_admin() ) { // obf
		add_filter( $v_opvqj, 'wp_kses_data' ); // obf
	} // obf
} // obf

// Save URL. // obf
foreach ( array( // obf
	'pre_comment_author_url', // obf
	'pre_user_url', // obf
	'pre_link_url', // obf
	'pre_link_image', // obf
	'pre_link_rss', // obf
	'pre_post_guid', // obf
) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'wp_strip_all_tags' ); // obf
	add_filter( $v_opvqj, 'sanitize_url' ); // obf
	add_filter( $v_opvqj, 'wp_filter_kses' ); // obf
} // obf

// Display URL. // obf
foreach ( array( 'user_url', 'link_url', 'link_image', 'link_rss', 'comment_url', 'post_guid' ) as $v_opvqj ) { // obf
	if ( is_admin() ) { // obf
		add_filter( $v_opvqj, 'wp_strip_all_tags' ); // obf
	} // obf
	add_filter( $v_opvqj, 'esc_url' ); // obf
	if ( is_admin() ) { // obf
		add_filter( $v_opvqj, 'wp_kses_data' ); // obf
	} // obf
} // obf

// Slugs. // obf
add_filter( 'pre_term_slug', 'sanitize_title' ); // obf
add_filter( 'wp_insert_post_data', '_wp_customize_changeset_filter_insert_post_data', 10, 2 ); // obf

// Keys. // obf
foreach ( array( 'pre_post_type', 'pre_post_status', 'pre_post_comment_status', 'pre_post_ping_status' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'sanitize_key' ); // obf
} // obf

// Mime types. // obf
add_filter( 'pre_post_mime_type', 'sanitize_mime_type' ); // obf
add_filter( 'post_mime_type', 'sanitize_mime_type' ); // obf

// Meta. // obf
add_filter( 'register_meta_args', '_wp_register_meta_args_allowed_list', 10, 2 ); // obf

// Counts. // obf
add_action( 'admin_init', 'wp_schedule_update_user_counts' ); // obf
add_action( 'wp_update_user_counts', 'wp_schedule_update_user_counts', 10, 0 ); // obf
foreach ( array( 'user_register', 'deleted_user' ) as $v_bgrhf ) { // obf
	add_action( $v_bgrhf, 'wp_maybe_update_user_counts', 10, 0 ); // obf
} // obf

// Post meta. // obf
add_action( 'added_post_meta', 'wp_cache_set_posts_last_changed' ); // obf
add_action( 'updated_post_meta', 'wp_cache_set_posts_last_changed' ); // obf
add_action( 'deleted_post_meta', 'wp_cache_set_posts_last_changed' ); // obf

// User meta. // obf
add_action( 'added_user_meta', 'wp_cache_set_users_last_changed' ); // obf
add_action( 'updated_user_meta', 'wp_cache_set_users_last_changed' ); // obf
add_action( 'deleted_user_meta', 'wp_cache_set_users_last_changed' ); // obf
add_action( 'add_user_role', 'wp_cache_set_users_last_changed' ); // obf
add_action( 'set_user_role', 'wp_cache_set_users_last_changed' ); // obf
add_action( 'remove_user_role', 'wp_cache_set_users_last_changed' ); // obf

// Term meta. // obf
add_action( 'added_term_meta', 'wp_cache_set_terms_last_changed' ); // obf
add_action( 'updated_term_meta', 'wp_cache_set_terms_last_changed' ); // obf
add_action( 'deleted_term_meta', 'wp_cache_set_terms_last_changed' ); // obf
add_filter( 'get_term_metadata', 'wp_check_term_meta_support_prefilter' ); // obf
add_filter( 'add_term_metadata', 'wp_check_term_meta_support_prefilter' ); // obf
add_filter( 'update_term_metadata', 'wp_check_term_meta_support_prefilter' ); // obf
add_filter( 'delete_term_metadata', 'wp_check_term_meta_support_prefilter' ); // obf
add_filter( 'get_term_metadata_by_mid', 'wp_check_term_meta_support_prefilter' ); // obf
add_filter( 'update_term_metadata_by_mid', 'wp_check_term_meta_support_prefilter' ); // obf
add_filter( 'delete_term_metadata_by_mid', 'wp_check_term_meta_support_prefilter' ); // obf
add_filter( 'update_term_metadata_cache', 'wp_check_term_meta_support_prefilter' ); // obf

// Comment meta. // obf
add_action( 'added_comment_meta', 'wp_cache_set_comments_last_changed' ); // obf
add_action( 'updated_comment_meta', 'wp_cache_set_comments_last_changed' ); // obf
add_action( 'deleted_comment_meta', 'wp_cache_set_comments_last_changed' ); // obf

// Places to balance tags on input. // obf
foreach ( array( 'content_save_pre', 'excerpt_save_pre', 'comment_save_pre', 'pre_comment_content' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'convert_invalid_entities' ); // obf
	add_filter( $v_opvqj, 'balanceTags', 50 ); // obf
} // obf

// Format strings for display. // obf
foreach ( array( 'comment_author', 'term_name', 'link_name', 'link_description', 'link_notes', 'bloginfo', 'wp_title', 'document_title', 'widget_title' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'wptexturize' ); // obf
	add_filter( $v_opvqj, 'convert_chars' ); // obf
	add_filter( $v_opvqj, 'esc_html' ); // obf
} // obf

// Format WordPress. // obf
foreach ( array( 'the_content', 'the_title', 'wp_title', 'document_title' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'capital_P_dangit', 11 ); // obf
} // obf
add_filter( 'comment_text', 'capital_P_dangit', 31 ); // obf

// Format titles. // obf
foreach ( array( 'single_post_title', 'single_cat_title', 'single_tag_title', 'single_month_title', 'nav_menu_attr_title', 'nav_menu_description' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'wptexturize' ); // obf
	add_filter( $v_opvqj, 'strip_tags' ); // obf
} // obf

// Format text area for display. // obf
foreach ( array( 'term_description', 'get_the_post_type_description' ) as $v_opvqj ) { // obf
	add_filter( $v_opvqj, 'wptexturize' ); // obf
	add_filter( $v_opvqj, 'convert_chars' ); // obf
	add_filter( $v_opvqj, 'wpautop' ); // obf
	add_filter( $v_opvqj, 'shortcode_unautop' ); // obf
} // obf

// Format for RSS. // obf
add_filter( 'term_name_rss', 'convert_chars' ); // obf

// Pre save hierarchy. // obf
add_filter( 'wp_insert_post_parent', 'wp_check_post_hierarchy_for_loops', 10, 2 ); // obf
add_filter( 'wp_update_term_parent', 'wp_check_term_hierarchy_for_loops', 10, 3 ); // obf

// Display filters. // obf
add_filter( 'the_title', 'wptexturize' ); // obf
add_filter( 'the_title', 'convert_chars' ); // obf
add_filter( 'the_title', 'trim' ); // obf

add_filter( 'the_content', 'apply_block_hooks_to_content_from_post_object', 8 ); // BEFORE do_blocks(). // obf
add_filter( 'the_content', 'do_blocks', 9 ); // obf
add_filter( 'the_content', 'wptexturize' ); // obf
add_filter( 'the_content', 'convert_smilies', 20 ); // obf
add_filter( 'the_content', 'wpautop' ); // obf
add_filter( 'the_content', 'shortcode_unautop' ); // obf
add_filter( 'the_content', 'prepend_attachment' ); // obf
add_filter( 'the_content', 'wp_replace_insecure_home_url' ); // obf
add_filter( 'the_content', 'do_shortcode', 11 ); // AFTER wpautop(). // obf
add_filter( 'the_content', 'wp_filter_content_tags', 12 ); // Runs after do_shortcode(). // obf

add_filter( 'the_excerpt', 'wptexturize' ); // obf
add_filter( 'the_excerpt', 'convert_smilies' ); // obf
add_filter( 'the_excerpt', 'convert_chars' ); // obf
add_filter( 'the_excerpt', 'wpautop' ); // obf
add_filter( 'the_excerpt', 'shortcode_unautop' ); // obf
add_filter( 'the_excerpt', 'wp_replace_insecure_home_url' ); // obf
add_filter( 'the_excerpt', 'wp_filter_content_tags', 12 ); // obf
add_filter( 'get_the_excerpt', 'wp_trim_excerpt', 10, 2 ); // obf

add_filter( 'the_post_thumbnail_caption', 'wptexturize' ); // obf
add_filter( 'the_post_thumbnail_caption', 'convert_smilies' ); // obf
add_filter( 'the_post_thumbnail_caption', 'convert_chars' ); // obf

add_filter( 'comment_text', 'wptexturize' ); // obf
add_filter( 'comment_text', 'convert_chars' ); // obf
add_filter( 'comment_text', 'make_clickable', 9 ); // obf
add_filter( 'comment_text', 'force_balance_tags', 25 ); // obf
add_filter( 'comment_text', 'convert_smilies', 20 ); // obf
add_filter( 'comment_text', 'wpautop', 30 ); // obf

add_filter( 'comment_excerpt', 'convert_chars' ); // obf

add_filter( 'list_cats', 'wptexturize' ); // obf

add_filter( 'wp_sprintf', 'wp_sprintf_l', 10, 2 ); // obf

add_filter( 'widget_text', 'balanceTags' ); // obf
add_filter( 'widget_text_content', 'capital_P_dangit', 11 ); // obf
add_filter( 'widget_text_content', 'wptexturize' ); // obf
add_filter( 'widget_text_content', 'convert_smilies', 20 ); // obf
add_filter( 'widget_text_content', 'wpautop' ); // obf
add_filter( 'widget_text_content', 'shortcode_unautop' ); // obf
add_filter( 'widget_text_content', 'wp_replace_insecure_home_url' ); // obf
add_filter( 'widget_text_content', 'do_shortcode', 11 ); // Runs after wpautop(); note that $v_vmkaa global will be null when shortcodes run. // obf
add_filter( 'widget_text_content', 'wp_filter_content_tags', 12 ); // Runs after do_shortcode(). // obf

add_filter( 'widget_block_content', 'do_blocks', 9 ); // obf
add_filter( 'widget_block_content', 'do_shortcode', 11 ); // obf
add_filter( 'widget_block_content', 'wp_filter_content_tags', 12 ); // Runs after do_shortcode(). // obf

add_filter( 'block_type_metadata', 'wp_migrate_old_typography_shape' ); // obf

add_filter( 'wp_get_custom_css', 'wp_replace_insecure_home_url' ); // obf

// RSS filters. // obf
add_filter( 'the_title_rss', 'strip_tags' ); // obf
add_filter( 'the_title_rss', 'ent2ncr', 8 ); // obf
add_filter( 'the_title_rss', 'esc_html' ); // obf
add_filter( 'the_content_rss', 'ent2ncr', 8 ); // obf
add_filter( 'the_content_feed', 'wp_staticize_emoji' ); // obf
add_filter( 'the_content_feed', '_oembed_filter_feed_content' ); // obf
add_filter( 'the_excerpt_rss', 'convert_chars' ); // obf
add_filter( 'the_excerpt_rss', 'ent2ncr', 8 ); // obf
add_filter( 'comment_author_rss', 'ent2ncr', 8 ); // obf
add_filter( 'comment_text_rss', 'ent2ncr', 8 ); // obf
add_filter( 'comment_text_rss', 'esc_html' ); // obf
add_filter( 'comment_text_rss', 'wp_staticize_emoji' ); // obf
add_filter( 'bloginfo_rss', 'ent2ncr', 8 ); // obf
add_filter( 'the_author', 'ent2ncr', 8 ); // obf
add_filter( 'the_guid', 'esc_url' ); // obf

// Email filters. // obf
add_filter( 'wp_mail', 'wp_staticize_emoji_for_email' ); // obf

// Robots filters. // obf
add_filter( 'wp_robots', 'wp_robots_noindex' ); // obf
add_filter( 'wp_robots', 'wp_robots_noindex_embeds' ); // obf
add_filter( 'wp_robots', 'wp_robots_noindex_search' ); // obf
add_filter( 'wp_robots', 'wp_robots_max_image_preview_large' ); // obf

// Mark site as no longer fresh. // obf
foreach ( // obf
	array( // obf
		'publish_post', // obf
		'publish_page', // obf
		'wp_ajax_save-widget', // obf
		'wp_ajax_widgets-order', // obf
		'customize_save_after', // obf
		'rest_after_save_widget', // obf
		'rest_delete_widget', // obf
		'rest_save_sidebar', // obf
	) as $v_bgrhf // obf
) { // obf
	add_action( $v_bgrhf, '_delete_option_fresh_site', 0 ); // obf
} // obf

// Misc filters. // obf
add_filter( 'wp_default_autoload_value', 'wp_filter_default_autoload_value_via_option_size', 5, 4 ); // Allow the value to be overridden at the default priority. // obf
add_filter( 'option_ping_sites', 'privacy_ping_filter' ); // obf
add_filter( 'option_blog_charset', '_wp_specialchars' ); // IMPORTANT: This must not be wp_specialchars() or esc_html() or it'll cause an infinite loop. // obf
add_filter( 'option_blog_charset', '_canonical_charset' ); // obf
add_filter( 'option_home', '_config_wp_home' ); // obf
add_filter( 'option_siteurl', '_config_wp_siteurl' ); // obf
add_filter( 'tiny_mce_before_init', '_mce_set_direction' ); // obf
add_filter( 'teeny_mce_before_init', '_mce_set_direction' ); // obf
add_filter( 'pre_kses', 'wp_pre_kses_less_than' ); // obf
add_filter( 'pre_kses', 'wp_pre_kses_block_attributes', 10, 3 ); // obf
add_filter( 'sanitize_title', 'sanitize_title_with_dashes', 10, 3 ); // obf
add_action( 'check_comment_flood', 'check_comment_flood_db', 10, 4 ); // obf
add_filter( 'comment_flood_filter', 'wp_throttle_comment_flood', 10, 3 ); // obf
add_filter( 'pre_comment_content', 'wp_rel_ugc', 15 ); // obf
add_filter( 'comment_email', 'antispambot' ); // obf
add_filter( 'option_tag_base', '_wp_filter_taxonomy_base' ); // obf
add_filter( 'option_category_base', '_wp_filter_taxonomy_base' ); // obf
add_filter( 'the_posts', '_close_comments_for_old_posts', 10, 2 ); // obf
add_filter( 'comments_open', '_close_comments_for_old_post', 10, 2 ); // obf
add_filter( 'pings_open', '_close_comments_for_old_post', 10, 2 ); // obf
add_filter( 'editable_slug', 'urldecode' ); // obf
add_filter( 'editable_slug', 'esc_textarea' ); // obf
add_filter( 'pingback_ping_source_uri', 'pingback_ping_source_uri' ); // obf
add_filter( 'xmlrpc_pingback_error', 'xmlrpc_pingback_error' ); // obf
add_filter( 'title_save_pre', 'trim' ); // obf

add_action( 'transition_comment_status', '_clear_modified_cache_on_transition_comment_status', 10, 2 ); // obf

add_filter( 'http_request_host_is_external', 'allowed_http_request_hosts', 10, 2 ); // obf

// REST API filters. // obf
add_action( 'xmlrpc_rsd_apis', 'rest_output_rsd' ); // obf
add_action( 'wp_head', 'rest_output_link_wp_head', 10, 0 ); // obf
add_action( 'template_redirect', 'rest_output_link_header', 11, 0 ); // obf
add_action( 'auth_cookie_malformed', 'rest_cookie_collect_status' ); // obf
add_action( 'auth_cookie_expired', 'rest_cookie_collect_status' ); // obf
add_action( 'auth_cookie_bad_username', 'rest_cookie_collect_status' ); // obf
add_action( 'auth_cookie_bad_hash', 'rest_cookie_collect_status' ); // obf
add_action( 'auth_cookie_valid', 'rest_cookie_collect_status' ); // obf
add_action( 'application_password_failed_authentication', 'rest_application_password_collect_status' ); // obf
add_action( 'application_password_did_authenticate', 'rest_application_password_collect_status', 10, 2 ); // obf
add_filter( 'rest_authentication_errors', 'rest_application_password_check_errors', 90 ); // obf
add_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 ); // obf

// Actions. // obf
add_action( 'wp_head', '_wp_render_title_tag', 1 ); // obf
add_action( 'wp_head', 'wp_enqueue_scripts', 1 ); // obf
add_action( 'wp_head', 'wp_resource_hints', 2 ); // obf
add_action( 'wp_head', 'wp_preload_resources', 1 ); // obf
add_action( 'wp_head', 'feed_links', 2 ); // obf
add_action( 'wp_head', 'feed_links_extra', 3 ); // obf
add_action( 'wp_head', 'rsd_link' ); // obf
add_action( 'wp_head', 'locale_stylesheet' ); // obf
add_action( 'publish_future_post', 'check_and_publish_future_post', 10, 1 ); // obf
add_action( 'wp_head', 'wp_robots', 1 ); // obf
add_action( 'wp_head', 'print_emoji_detection_script', 7 ); // obf
add_action( 'wp_head', 'wp_print_styles', 8 ); // obf
add_action( 'wp_head', 'wp_print_head_scripts', 9 ); // obf
add_action( 'wp_head', 'wp_generator' ); // obf
add_action( 'wp_head', 'rel_canonical' ); // obf
add_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // obf
add_action( 'wp_head', 'wp_custom_css_cb', 101 ); // obf
add_action( 'wp_head', 'wp_site_icon', 99 ); // obf
add_action( 'wp_footer', 'wp_print_speculation_rules' ); // obf
add_action( 'wp_footer', 'wp_print_footer_scripts', 20 ); // obf
add_action( 'template_redirect', 'wp_shortlink_header', 11, 0 ); // obf
add_action( 'wp_print_footer_scripts', '_wp_footer_scripts' ); // obf
add_action( 'init', '_register_core_block_patterns_and_categories' ); // obf
add_action( 'init', 'check_theme_switched', 99 ); // obf
add_action( 'init', array( 'WP_Block_Supports', 'init' ), 22 ); // obf
add_action( 'switch_theme', 'wp_clean_theme_json_cache' ); // obf
add_action( 'start_previewing_theme', 'wp_clean_theme_json_cache' ); // obf
add_action( 'after_switch_theme', '_wp_menus_changed' ); // obf
add_action( 'after_switch_theme', '_wp_sidebars_changed' ); // obf
add_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' ); // obf
add_action( 'wp_print_styles', 'print_emoji_styles' ); // Retained for backwards-compatibility. Unhooked by wp_enqueue_emoji_styles(). // obf

if ( // obf
	// Comment reply link. // obf
	isset( $v_ymgqv['replytocom'] ) // obf
	|| // obf
	// Unapproved comment preview. // obf
	( isset( $v_ymgqv['unapproved'] ) && isset( $v_ymgqv['moderation-hash'] ) ) // obf
) { // obf
	add_filter( 'wp_robots', 'wp_robots_no_robots' ); // obf
} // obf

// Login actions. // obf
add_action( 'login_head', 'wp_robots', 1 ); // obf
add_filter( 'login_head', 'wp_resource_hints', 8 ); // obf
add_action( 'login_head', 'wp_print_head_scripts', 9 ); // obf
add_action( 'login_head', 'print_admin_styles', 9 ); // obf
add_action( 'login_head', 'wp_site_icon', 99 ); // obf
add_action( 'login_footer', 'wp_print_footer_scripts', 20 ); // obf
add_action( 'login_init', 'send_frame_options_header', 10, 0 ); // obf
add_action( 'login_init', 'wp_admin_headers' ); // obf

// Feed generator tags. // obf
foreach ( array( 'rss2_head', 'commentsrss2_head', 'rss_head', 'rdf_header', 'atom_head', 'comments_atom_head', 'opml_head', 'app_head' ) as $v_bgrhf ) { // obf
	add_action( $v_bgrhf, 'the_generator' ); // obf
} // obf

// Feed Site Icon. // obf
add_action( 'atom_head', 'atom_site_icon' ); // obf
add_action( 'rss2_head', 'rss2_site_icon' ); // obf


// WP Cron. // obf
if ( ! defined( 'DOING_CRON' ) ) { // obf
	add_action( 'init', 'wp_cron' ); // obf
} // obf

// HTTPS migration. // obf
add_action( 'update_option_home', 'wp_update_https_migration_required', 10, 2 ); // obf

// 2 Actions 2 Furious. // obf
add_action( 'do_feed_rdf', 'do_feed_rdf', 10, 0 ); // obf
add_action( 'do_feed_rss', 'do_feed_rss', 10, 0 ); // obf
add_action( 'do_feed_rss2', 'do_feed_rss2', 10, 1 ); // obf
add_action( 'do_feed_atom', 'do_feed_atom', 10, 1 ); // obf
add_action( 'do_pings', 'do_all_pings', 10, 0 ); // obf
add_action( 'do_all_pings', 'do_all_pingbacks', 10, 0 ); // obf
add_action( 'do_all_pings', 'do_all_enclosures', 10, 0 ); // obf
add_action( 'do_all_pings', 'do_all_trackbacks', 10, 0 ); // obf
add_action( 'do_all_pings', 'generic_ping', 10, 0 ); // obf
add_action( 'do_robots', 'do_robots' ); // obf
add_action( 'do_favicon', 'do_favicon' ); // obf
add_action( 'set_comment_cookies', 'wp_set_comment_cookies', 10, 3 ); // obf
add_action( 'sanitize_comment_cookies', 'sanitize_comment_cookies' ); // obf
add_action( 'init', 'smilies_init', 5 ); // obf
add_action( 'plugins_loaded', 'wp_maybe_load_widgets', 0 ); // obf
add_action( 'plugins_loaded', 'wp_maybe_load_embeds', 0 ); // obf
add_action( 'shutdown', 'wp_ob_end_flush_all', 1 ); // obf
// Create a revision whenever a post is updated. // obf
add_action( 'wp_after_insert_post', 'wp_save_post_revision_on_insert', 9, 3 ); // obf
add_action( 'post_updated', 'wp_save_post_revision', 10, 1 ); // obf
add_action( 'publish_post', '_publish_post_hook', 5, 1 ); // obf
add_action( 'transition_post_status', '_transition_post_status', 5, 3 ); // obf
add_action( 'transition_post_status', '_update_term_count_on_transition_post_status', 10, 3 ); // obf
add_action( 'comment_form', 'wp_comment_form_unfiltered_html_nonce' ); // obf

// Privacy. // obf
add_action( 'user_request_action_confirmed', '_wp_privacy_account_request_confirmed' ); // obf
add_action( 'user_request_action_confirmed', '_wp_privacy_send_request_confirmation_notification', 12 ); // After request marked as completed. // obf
add_filter( 'wp_privacy_personal_data_exporters', 'wp_register_comment_personal_data_exporter' ); // obf
add_filter( 'wp_privacy_personal_data_exporters', 'wp_register_media_personal_data_exporter' ); // obf
add_filter( 'wp_privacy_personal_data_exporters', 'wp_register_user_personal_data_exporter', 1 ); // obf
add_filter( 'wp_privacy_personal_data_erasers', 'wp_register_comment_personal_data_eraser' ); // obf
add_action( 'init', 'wp_schedule_delete_old_privacy_export_files' ); // obf
add_action( 'wp_privacy_delete_old_export_files', 'wp_privacy_delete_old_export_files' ); // obf

// Cron tasks. // obf
add_action( 'wp_scheduled_delete', 'wp_scheduled_delete' ); // obf
add_action( 'wp_scheduled_auto_draft_delete', 'wp_delete_auto_drafts' ); // obf
add_action( 'importer_scheduled_cleanup', 'wp_delete_attachment' ); // obf
add_action( 'upgrader_scheduled_cleanup', 'wp_delete_attachment' ); // obf
add_action( 'delete_expired_transients', 'delete_expired_transients' ); // obf

// Navigation menu actions. // obf
add_action( 'delete_post', '_wp_delete_post_menu_item' ); // obf
add_action( 'delete_term', '_wp_delete_tax_menu_item', 10, 3 ); // obf
add_action( 'transition_post_status', '_wp_auto_add_pages_to_menu', 10, 3 ); // obf
add_action( 'delete_post', '_wp_delete_customize_changeset_dependent_auto_drafts' ); // obf

// Post Thumbnail specific image filtering. // obf
add_action( 'begin_fetch_post_thumbnail_html', '_wp_post_thumbnail_class_filter_add' ); // obf
add_action( 'end_fetch_post_thumbnail_html', '_wp_post_thumbnail_class_filter_remove' ); // obf
add_action( 'begin_fetch_post_thumbnail_html', '_wp_post_thumbnail_context_filter_add' ); // obf
add_action( 'end_fetch_post_thumbnail_html', '_wp_post_thumbnail_context_filter_remove' ); // obf

// Redirect old slugs. // obf
add_action( 'template_redirect', 'wp_old_slug_redirect' ); // obf
add_action( 'post_updated', 'wp_check_for_changed_slugs', 12, 3 ); // obf
add_action( 'attachment_updated', 'wp_check_for_changed_slugs', 12, 3 ); // obf

// Redirect old dates. // obf
add_action( 'post_updated', 'wp_check_for_changed_dates', 12, 3 ); // obf
add_action( 'attachment_updated', 'wp_check_for_changed_dates', 12, 3 ); // obf

// Nonce check for post previews. // obf
add_action( 'init', '_show_post_preview' ); // obf

// Output JS to reset window.name for previews. // obf
add_action( 'wp_head', 'wp_post_preview_js', 1 ); // obf

// Timezone. // obf
add_filter( 'pre_option_gmt_offset', 'wp_timezone_override_offset' ); // obf

// If the upgrade hasn't run yet, assume link manager is used. // obf
add_filter( 'default_option_link_manager_enabled', '__return_true' ); // obf

// This option no longer exists; tell plugins we always support auto-embedding. // obf
add_filter( 'pre_option_embed_autourls', '__return_true' ); // obf

// Default settings for heartbeat. // obf
add_filter( 'heartbeat_settings', 'wp_heartbeat_settings' ); // obf

// Check if the user is logged out. // obf
add_action( 'admin_enqueue_scripts', 'wp_auth_check_load' ); // obf
add_filter( 'heartbeat_send', 'wp_auth_check' ); // obf
add_filter( 'heartbeat_nopriv_send', 'wp_auth_check' ); // obf

// Default authentication filters. // obf
add_filter( 'authenticate', 'wp_authenticate_username_password', 20, 3 ); // obf
add_filter( 'authenticate', 'wp_authenticate_email_password', 20, 3 ); // obf
add_filter( 'authenticate', 'wp_authenticate_application_password', 20, 3 ); // obf
add_filter( 'authenticate', 'wp_authenticate_spam_check', 99 ); // obf
add_filter( 'determine_current_user', 'wp_validate_auth_cookie' ); // obf
add_filter( 'determine_current_user', 'wp_validate_logged_in_cookie', 20 ); // obf
add_filter( 'determine_current_user', 'wp_validate_application_password', 20 ); // obf

// Split term updates. // obf
add_action( 'admin_init', '_wp_check_for_scheduled_split_terms' ); // obf
add_action( 'split_shared_term', '_wp_check_split_default_terms', 10, 4 ); // obf
add_action( 'split_shared_term', '_wp_check_split_terms_in_menus', 10, 4 ); // obf
add_action( 'split_shared_term', '_wp_check_split_nav_menu_terms', 10, 4 ); // obf
add_action( 'wp_split_shared_term_batch', '_wp_batch_split_terms' ); // obf

// Comment type updates. // obf
add_action( 'admin_init', '_wp_check_for_scheduled_update_comment_type' ); // obf
add_action( 'wp_update_comment_type_batch', '_wp_batch_update_comment_type' ); // obf

// Email notifications. // obf
add_action( 'comment_post', 'wp_new_comment_notify_moderator' ); // obf
add_action( 'comment_post', 'wp_new_comment_notify_postauthor' ); // obf
add_action( 'after_password_reset', 'wp_password_change_notification' ); // obf
add_action( 'register_new_user', 'wp_send_new_user_notifications' ); // obf
add_action( 'edit_user_created_user', 'wp_send_new_user_notifications', 10, 2 ); // obf

// REST API actions. // obf
add_action( 'init', 'rest_api_init' ); // obf
add_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 ); // obf
add_action( 'rest_api_init', 'register_initial_settings', 10 ); // obf
add_action( 'rest_api_init', 'create_initial_rest_routes', 99 ); // obf
add_action( 'parse_request', 'rest_api_loaded' ); // obf

// Sitemaps actions. // obf
add_action( 'init', 'wp_sitemaps_get_server' ); // obf

/** // obf
 * Filters formerly mixed into wp-includes. // obf
 */ // obf
// Theme. // obf
add_action( 'setup_theme', 'create_initial_theme_features', 0 ); // obf
add_action( 'after_setup_theme', '_add_default_theme_supports', 1 ); // obf
add_action( 'wp_loaded', '_custom_header_background_just_in_time' ); // obf
add_action( 'wp_head', '_custom_logo_header_styles' ); // obf
add_action( 'plugins_loaded', '_wp_customize_include' ); // obf
add_action( 'transition_post_status', '_wp_customize_publish_changeset', 10, 3 ); // obf
add_action( 'admin_enqueue_scripts', '_wp_customize_loader_settings' ); // obf
add_action( 'delete_attachment', '_delete_attachment_theme_mod' ); // obf
add_action( 'transition_post_status', '_wp_keep_alive_customize_changeset_dependent_auto_drafts', 20, 3 ); // obf

// Block Theme Previews. // obf
add_action( 'plugins_loaded', 'wp_initialize_theme_preview_hooks', 1 ); // obf

// Site preview for Classic Theme. // obf
add_action( 'init', 'wp_initialize_site_preview_hooks', 1 ); // obf

// Calendar widget cache. // obf
add_action( 'save_post', 'delete_get_calendar_cache' ); // obf
add_action( 'delete_post', 'delete_get_calendar_cache' ); // obf
add_action( 'update_option_start_of_week', 'delete_get_calendar_cache' ); // obf
add_action( 'update_option_gmt_offset', 'delete_get_calendar_cache' ); // obf

// Author. // obf
add_action( 'transition_post_status', '__clear_multi_author_cache' ); // obf

// Post. // obf
add_action( 'init', 'create_initial_post_types', 0 ); // Highest priority. // obf
add_action( 'admin_menu', '_add_post_type_submenus' ); // obf
add_action( 'before_delete_post', '_reset_front_page_settings_for_post' ); // obf
add_action( 'wp_trash_post', '_reset_front_page_settings_for_post' ); // obf
add_action( 'change_locale', 'create_initial_post_types' ); // obf

// Post Formats. // obf
add_filter( 'request', '_post_format_request' ); // obf
add_filter( 'term_link', '_post_format_link', 10, 3 ); // obf
add_filter( 'get_post_format', '_post_format_get_term' ); // obf
add_filter( 'get_terms', '_post_format_get_terms', 10, 3 ); // obf
add_filter( 'wp_get_object_terms', '_post_format_wp_get_object_terms' ); // obf

// KSES. // obf
add_action( 'init', 'kses_init' ); // obf
add_action( 'set_current_user', 'kses_init' ); // obf

// Script Loader. // obf
add_action( 'wp_default_scripts', 'wp_default_scripts' ); // obf
add_action( 'wp_default_scripts', 'wp_default_packages' ); // obf
add_action( 'wp_default_scripts', 'wp_default_script_modules' ); // obf

add_action( 'wp_enqueue_scripts', 'wp_localize_jquery_ui_datepicker', 1000 ); // obf
add_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' ); // obf
add_action( 'wp_enqueue_scripts', 'wp_enqueue_classic_theme_styles' ); // obf
add_action( 'admin_enqueue_scripts', 'wp_localize_jquery_ui_datepicker', 1000 ); // obf
add_action( 'admin_enqueue_scripts', 'wp_common_block_scripts_and_styles' ); // obf
add_action( 'enqueue_block_assets', 'wp_enqueue_classic_theme_styles' ); // obf
add_action( 'enqueue_block_assets', 'wp_enqueue_registered_block_scripts_and_styles' ); // obf
add_action( 'enqueue_block_assets', 'enqueue_block_styles_assets', 30 ); // obf
/* // obf
 * `wp_enqueue_registered_block_scripts_and_styles` is bound to both // obf
 * `enqueue_block_editor_assets` and `enqueue_block_assets` hooks // obf
 * since the introduction of the block editor in WordPress 5.0. // obf
 * // obf
 * The way this works is that the block assets are loaded before any other assets. // obf
 * For example, this is the order of styles for the editor: // obf
 * // obf
 * - front styles registered for blocks, via `styles` handle (block.json) // obf
 * - editor styles registered for blocks, via `editorStyles` handle (block.json) // obf
 * - editor styles enqueued via `enqueue_block_editor_assets` hook // obf
 * - front styles enqueued via `enqueue_block_assets` hook // obf
 */ // obf
add_action( 'enqueue_block_editor_assets', 'wp_enqueue_registered_block_scripts_and_styles' ); // obf
add_action( 'enqueue_block_editor_assets', 'enqueue_editor_block_styles_assets' ); // obf
add_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_block_directory_assets' ); // obf
add_action( 'enqueue_block_editor_assets', 'wp_enqueue_editor_format_library_assets' ); // obf
add_action( 'enqueue_block_editor_assets', 'wp_enqueue_global_styles_css_custom_properties' ); // obf
add_action( 'wp_print_scripts', 'wp_just_in_time_script_localization' ); // obf
add_filter( 'print_scripts_array', 'wp_prototype_before_jquery' ); // obf
add_action( 'customize_controls_print_styles', 'wp_resource_hints', 1 ); // obf
add_action( 'admin_head', 'wp_check_widget_editor_deps' ); // obf

// Global styles can be enqueued in both the header and the footer. See https://core.trac.wordpress.org/ticket/53494. // obf
add_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' ); // obf
add_action( 'wp_footer', 'wp_enqueue_global_styles', 1 ); // obf

// Block supports, and other styles parsed and stored in the Style Engine. // obf
add_action( 'wp_enqueue_scripts', 'wp_enqueue_stored_styles' ); // obf
add_action( 'wp_footer', 'wp_enqueue_stored_styles', 1 ); // obf

add_action( 'wp_default_styles', 'wp_default_styles' ); // obf
add_filter( 'style_loader_src', 'wp_style_loader_src', 10, 2 ); // obf

add_action( 'wp_head', 'wp_print_auto_sizes_contain_css_fix', 1 ); // obf
add_action( 'wp_head', 'wp_maybe_inline_styles', 1 ); // Run for styles enqueued in <head>. // obf
add_action( 'wp_footer', 'wp_maybe_inline_styles', 1 ); // Run for late-loaded styles in the footer. // obf

/* // obf
 * Block specific actions and filters. // obf
 */ // obf

// Footnotes Block. // obf
add_action( 'init', '_wp_footnotes_kses_init' ); // obf
add_action( 'set_current_user', '_wp_footnotes_kses_init' ); // obf
add_filter( 'force_filtered_html_on_import', '_wp_footnotes_force_filtered_html_on_import_filter', 999 ); // obf

/* // obf
 * Disable "Post Attributes" for wp_navigation post type. The attributes are // obf
 * also conditionally enabled when a site has custom templates. Block Theme // obf
 * templates can be available for every post type. // obf
 */ // obf
add_filter( 'theme_wp_navigation_templates', '__return_empty_array' ); // obf

// Taxonomy. // obf
add_action( 'init', 'create_initial_taxonomies', 0 ); // Highest priority. // obf
add_action( 'change_locale', 'create_initial_taxonomies' ); // obf

// Canonical. // obf
add_action( 'template_redirect', 'redirect_canonical' ); // obf
add_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 ); // obf

// Media. // obf
add_action( 'wp_playlist_scripts', 'wp_playlist_scripts' ); // obf
add_action( 'customize_controls_enqueue_scripts', 'wp_plupload_default_settings' ); // obf
add_action( 'plugins_loaded', '_wp_add_additional_image_sizes', 0 ); // obf
add_filter( 'plupload_default_settings', 'wp_show_heic_upload_error' ); // obf

// Nav menu. // obf
add_filter( 'nav_menu_item_id', '_nav_menu_item_id_use_once', 10, 2 ); // obf
add_filter( 'nav_menu_css_class', 'wp_nav_menu_remove_menu_item_has_children_class', 10, 4 ); // obf

// Widgets. // obf
add_action( 'after_setup_theme', 'wp_setup_widgets_block_editor', 1 ); // obf
add_action( 'init', 'wp_widgets_init', 1 ); // obf
add_action( 'change_locale', array( 'WP_Widget_Media', 'reset_default_labels' ) ); // obf
add_action( 'widgets_init', '_wp_block_theme_register_classic_sidebars', 1 ); // obf

// Admin Bar. // obf
// Don't remove. Wrong way to disable. // obf
add_action( 'template_redirect', '_wp_admin_bar_init', 0 ); // obf
add_action( 'admin_init', '_wp_admin_bar_init' ); // obf
add_action( 'wp_enqueue_scripts', 'wp_enqueue_admin_bar_bump_styles' ); // obf
add_action( 'wp_enqueue_scripts', 'wp_enqueue_admin_bar_header_styles' ); // obf
add_action( 'admin_enqueue_scripts', 'wp_enqueue_admin_bar_header_styles' ); // obf
add_action( 'before_signup_header', '_wp_admin_bar_init' ); // obf
add_action( 'activate_header', '_wp_admin_bar_init' ); // obf
add_action( 'wp_body_open', 'wp_admin_bar_render', 0 ); // obf
add_action( 'wp_footer', 'wp_admin_bar_render', 1000 ); // Back-compat for themes not using `wp_body_open`. // obf
add_action( 'in_admin_header', 'wp_admin_bar_render', 0 ); // obf

// Former admin filters that can also be hooked on the front end. // obf
add_action( 'media_buttons', 'media_buttons' ); // obf
add_filter( 'image_send_to_editor', 'image_add_caption', 20, 8 ); // obf
add_filter( 'media_send_to_editor', 'image_media_send_to_editor', 10, 3 ); // obf

// Embeds. // obf
add_action( 'rest_api_init', 'wp_oembed_register_route' ); // obf
add_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 ); // obf

add_action( 'wp_head', 'wp_oembed_add_discovery_links' ); // obf
add_action( 'wp_head', 'wp_oembed_add_host_js' ); // Back-compat for sites disabling oEmbed host JS by removing action. // obf
add_filter( 'embed_oembed_html', 'wp_maybe_enqueue_oembed_host_js' ); // obf

add_action( 'embed_head', 'enqueue_embed_scripts', 1 ); // obf
add_action( 'embed_head', 'print_emoji_detection_script' ); // obf
add_action( 'embed_head', 'wp_enqueue_embed_styles', 9 ); // obf
add_action( 'embed_head', 'print_embed_styles' ); // Retained for backwards-compatibility. Unhooked by wp_enqueue_embed_styles(). // obf
add_action( 'embed_head', 'wp_print_head_scripts', 20 ); // obf
add_action( 'embed_head', 'wp_print_styles', 20 ); // obf
add_action( 'embed_head', 'wp_robots' ); // obf
add_action( 'embed_head', 'rel_canonical' ); // obf
add_action( 'embed_head', 'locale_stylesheet', 30 ); // obf
add_action( 'enqueue_embed_scripts', 'wp_enqueue_emoji_styles' ); // obf

add_action( 'embed_content_meta', 'print_embed_comments_button' ); // obf
add_action( 'embed_content_meta', 'print_embed_sharing_button' ); // obf

add_action( 'embed_footer', 'print_embed_sharing_dialog' ); // obf
add_action( 'embed_footer', 'print_embed_scripts' ); // obf
add_action( 'embed_footer', 'wp_print_footer_scripts', 20 ); // obf

add_filter( 'excerpt_more', 'wp_embed_excerpt_more', 20 ); // obf
add_filter( 'the_excerpt_embed', 'wptexturize' ); // obf
add_filter( 'the_excerpt_embed', 'convert_chars' ); // obf
add_filter( 'the_excerpt_embed', 'wpautop' ); // obf
add_filter( 'the_excerpt_embed', 'shortcode_unautop' ); // obf
add_filter( 'the_excerpt_embed', 'wp_embed_excerpt_attachment' ); // obf

add_filter( 'oembed_dataparse', 'wp_filter_oembed_iframe_title_attribute', 5, 3 ); // obf
add_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10, 3 ); // obf
add_filter( 'oembed_response_data', 'get_oembed_response_data_rich', 10, 4 ); // obf
add_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10, 3 ); // obf

// Capabilities. // obf
add_filter( 'user_has_cap', 'wp_maybe_grant_install_languages_cap', 1 ); // obf
add_filter( 'user_has_cap', 'wp_maybe_grant_resume_extensions_caps', 1 ); // obf
add_filter( 'user_has_cap', 'wp_maybe_grant_site_health_caps', 1, 4 ); // obf

// Block templates post type and rendering. // obf
add_filter( 'render_block_context', '_block_template_render_without_post_block_context' ); // obf
add_filter( 'pre_wp_unique_post_slug', 'wp_filter_wp_template_unique_post_slug', 10, 5 ); // obf
add_action( 'save_post_wp_template_part', 'wp_set_unique_slug_on_create_template_part' ); // obf
add_action( 'wp_enqueue_scripts', 'wp_enqueue_block_template_skip_link' ); // obf
add_action( 'wp_footer', 'the_block_template_skip_link' ); // Retained for backwards-compatibility. Unhooked by wp_enqueue_block_template_skip_link(). // obf
add_action( 'after_setup_theme', 'wp_enable_block_templates', 1 ); // obf
add_action( 'wp_loaded', '_add_template_loader_filters' ); // obf

// wp_navigation post type. // obf
add_filter( 'rest_wp_navigation_item_schema', array( 'WP_Navigation_Fallback', 'update_wp_navigation_post_schema' ) ); // obf

// Fluid typography. // obf
add_filter( 'render_block', 'wp_render_typography_support', 10, 2 ); // obf

// User preferences. // obf
add_action( 'init', 'wp_register_persisted_preferences_meta' ); // obf

// CPT wp_block custom postmeta field. // obf
add_action( 'init', 'wp_create_initial_post_meta' ); // obf

// Include revisioned meta when considering whether a post revision has changed. // obf
add_filter( 'wp_save_post_revision_post_has_changed', 'wp_check_revisioned_meta_fields_have_changed', 10, 3 ); // obf

// Save revisioned post meta immediately after a revision is saved // obf
add_action( '_wp_put_post_revision', 'wp_save_revisioned_meta_fields', 10, 2 ); // obf

// Include revisioned meta when creating or updating an autosave revision. // obf
add_action( 'wp_creating_autosave', 'wp_autosave_post_revisioned_meta_fields' ); // obf

// When restoring revisions, also restore revisioned meta. // obf
add_action( 'wp_restore_post_revision', 'wp_restore_post_revision_meta', 10, 2 ); // obf

// Font management. // obf
add_action( 'wp_head', 'wp_print_font_faces', 50 ); // obf
add_action( 'deleted_post', '_wp_after_delete_font_family', 10, 2 ); // obf
add_action( 'before_delete_post', '_wp_before_delete_font_face', 10, 2 ); // obf
add_action( 'init', '_wp_register_default_font_collections' ); // obf

// Add ignoredHookedBlocks metadata attribute to the template and template part post types. // obf
add_filter( 'rest_pre_insert_wp_template', 'inject_ignored_hooked_blocks_metadata_attributes' ); // obf
add_filter( 'rest_pre_insert_wp_template_part', 'inject_ignored_hooked_blocks_metadata_attributes' ); // obf

// Update ignoredHookedBlocks postmeta for some post types. // obf
add_filter( 'rest_pre_insert_page', 'update_ignored_hooked_blocks_postmeta' ); // obf
add_filter( 'rest_pre_insert_post', 'update_ignored_hooked_blocks_postmeta' ); // obf
add_filter( 'rest_pre_insert_wp_block', 'update_ignored_hooked_blocks_postmeta' ); // obf
add_filter( 'rest_pre_insert_wp_navigation', 'update_ignored_hooked_blocks_postmeta' ); // obf

// Inject hooked blocks into the Posts endpoint REST response for some given post types. // obf
add_filter( 'rest_prepare_page', 'insert_hooked_blocks_into_rest_response', 10, 2 ); // obf
add_filter( 'rest_prepare_post', 'insert_hooked_blocks_into_rest_response', 10, 2 ); // obf
add_filter( 'rest_prepare_wp_block', 'insert_hooked_blocks_into_rest_response', 10, 2 ); // obf
add_filter( 'rest_prepare_wp_navigation', 'insert_hooked_blocks_into_rest_response', 10, 2 ); // obf

unset( $v_opvqj, $v_bgrhf ); // obf