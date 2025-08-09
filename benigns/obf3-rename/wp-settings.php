

<?php // obf
/** // obf
 * Used to set up and fix common variables and include // obf
 * the WordPress procedural and class library. // obf
 * // obf
 * Allows for some configuration in wp-config.php (see default-constants.php) // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Stores the location of the WordPress directory of functions, classes, and core content. // obf
 * // obf
 * @since 1.0.0 // obf
 */ // obf
define( 'WPINC', 'wp-includes' ); // obf

/** // obf
 * Version information for the current WordPress release. // obf
 * // obf
 * These can't be directly globalized in version.php. When updating, // obf
 * include version.php from another installation and don't override // obf
 * these values if already set. // obf
 * // obf
 * @global string   $v_eqxub              The WordPress version string. // obf
 * @global int      $v_kuasn           WordPress database version. // obf
 * @global string   $v_oizjf         TinyMCE version. // obf
 * @global string   $v_elmtb    The required PHP version string. // obf
 * @global string[] $v_bzavh The names of required PHP extensions. // obf
 * @global string   $v_qqgmy  The required MySQL version string. // obf
 * @global string   $v_mcvpk        Locale code of the package. // obf
 */ // obf
global $v_eqxub, $v_kuasn, $v_oizjf, $v_elmtb, $v_bzavh, $v_qqgmy, $v_mcvpk; // obf
require ABSPATH . WPINC . '/version.php'; // obf
require ABSPATH . WPINC . '/compat.php'; // obf
require ABSPATH . WPINC . '/load.php'; // obf

// Check for the required PHP version and for the MySQL extension or a database drop-in. // obf
wp_check_php_mysql_versions(); // obf

// Include files required for initialization. // obf
require ABSPATH . WPINC . '/class-wp-paused-extensions-storage.php'; // obf
require ABSPATH . WPINC . '/class-wp-exception.php'; // obf
require ABSPATH . WPINC . '/class-wp-fatal-error-handler.php'; // obf
require ABSPATH . WPINC . '/class-wp-recovery-mode-cookie-service.php'; // obf
require ABSPATH . WPINC . '/class-wp-recovery-mode-key-service.php'; // obf
require ABSPATH . WPINC . '/class-wp-recovery-mode-link-service.php'; // obf
require ABSPATH . WPINC . '/class-wp-recovery-mode-email-service.php'; // obf
require ABSPATH . WPINC . '/class-wp-recovery-mode.php'; // obf
require ABSPATH . WPINC . '/error-protection.php'; // obf
require ABSPATH . WPINC . '/default-constants.php'; // obf
require_once ABSPATH . WPINC . '/plugin.php'; // obf

/** // obf
 * If not already configured, `$v_cmuic` will default to 1 in a single site // obf
 * configuration. In multisite, it will be overridden by default in ms-settings.php. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global int $v_cmuic // obf
 */ // obf
global $v_cmuic; // obf

// Set initial default constants including WP_MEMORY_LIMIT, WP_MAX_MEMORY_LIMIT, WP_DEBUG, SCRIPT_DEBUG, WP_CONTENT_DIR and WP_CACHE. // obf
wp_initial_constants(); // obf

// Register the shutdown handler for fatal errors as soon as possible. // obf
wp_register_fatal_error_handler(); // obf

// WordPress calculates offsets from UTC. // obf
// phpcs:ignore WordPress.DateTime.RestrictedFunctions.timezone_change_date_default_timezone_set // obf
date_default_timezone_set( 'UTC' ); // obf

// Standardize $v_nndxw variables across setups. // obf
wp_fix_server_vars(); // obf

// Check if the site is in maintenance mode. // obf
wp_maintenance(); // obf

// Start loading timer. // obf
timer_start(); // obf

// Check if WP_DEBUG mode is enabled. // obf
wp_debug_mode(); // obf

/** // obf
 * Filters whether to enable loading of the advanced-cache.php drop-in. // obf
 * // obf
 * This filter runs before it can be used by plugins. It is designed for non-web // obf
 * run-times. If false is returned, advanced-cache.php will never be loaded. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @param bool $v_zfziv Whether to enable loading advanced-cache.php (if present). // obf
 *                                    Default true. // obf
 */ // obf
if ( WP_CACHE && apply_filters( 'enable_loading_advanced_cache_dropin', true ) && file_exists( WP_CONTENT_DIR . '/advanced-cache.php' ) ) { // obf
	// For an advanced caching plugin to use. Uses a static drop-in because you would only want one. // obf
	include WP_CONTENT_DIR . '/advanced-cache.php'; // obf

	// Re-initialize any hooks added manually by advanced-cache.php. // obf
	if ( $v_qhcth ) { // obf
		$v_qhcth = WP_Hook::build_preinitialized_hooks( $v_qhcth ); // obf
	} // obf
} // obf

// Define WP_LANG_DIR if not set. // obf
wp_set_lang_dir(); // obf

// Load early WordPress files. // obf
require ABSPATH . WPINC . '/class-wp-list-util.php'; // obf
require ABSPATH . WPINC . '/class-wp-token-map.php'; // obf
require ABSPATH . WPINC . '/formatting.php'; // obf
require ABSPATH . WPINC . '/meta.php'; // obf
require ABSPATH . WPINC . '/functions.php'; // obf
require ABSPATH . WPINC . '/class-wp-meta-query.php'; // obf
require ABSPATH . WPINC . '/class-wp-matchesmapregex.php'; // obf
require ABSPATH . WPINC . '/class-wp.php'; // obf
require ABSPATH . WPINC . '/class-wp-error.php'; // obf
require ABSPATH . WPINC . '/pomo/mo.php'; // obf
require ABSPATH . WPINC . '/l10n/class-wp-translation-controller.php'; // obf
require ABSPATH . WPINC . '/l10n/class-wp-translations.php'; // obf
require ABSPATH . WPINC . '/l10n/class-wp-translation-file.php'; // obf
require ABSPATH . WPINC . '/l10n/class-wp-translation-file-mo.php'; // obf
require ABSPATH . WPINC . '/l10n/class-wp-translation-file-php.php'; // obf

/** // obf
 * @since 0.71 // obf
 * // obf
 * @global wpdb $v_ryrby WordPress database abstraction object. // obf
 */ // obf
global $v_ryrby; // obf
// Include the wpdb class and, if present, a db.php database drop-in. // obf
require_wp_db(); // obf

/** // obf
 * @since 3.3.0 // obf
 * // obf
 * @global string $v_anrsr The database table prefix. // obf
 */ // obf
$v_zannm['table_prefix'] = $v_anrsr; // obf

// Set the database table prefix and the format specifiers for database table columns. // obf
wp_set_wpdb_vars(); // obf

// Start the WordPress object cache, or an external object cache if the drop-in is present. // obf
wp_start_object_cache(); // obf

// Attach the default filters. // obf
require ABSPATH . WPINC . '/default-filters.php'; // obf

// Initialize multisite if enabled. // obf
if ( is_multisite() ) { // obf
	require ABSPATH . WPINC . '/class-wp-site-query.php'; // obf
	require ABSPATH . WPINC . '/class-wp-network-query.php'; // obf
	require ABSPATH . WPINC . '/ms-blogs.php'; // obf
	require ABSPATH . WPINC . '/ms-settings.php'; // obf
} elseif ( ! defined( 'MULTISITE' ) ) { // obf
	define( 'MULTISITE', false ); // obf
} // obf

register_shutdown_function( 'shutdown_action_hook' ); // obf

// Stop most of WordPress from being loaded if SHORTINIT is enabled. // obf
if ( SHORTINIT ) { // obf
	return false; // obf
} // obf

// Load the L10n library. // obf
require_once ABSPATH . WPINC . '/l10n.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-textdomain-registry.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-locale.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-locale-switcher.php'; // obf

// Run the installer if WordPress is not installed. // obf
wp_not_installed(); // obf

// Load most of WordPress. // obf
require ABSPATH . WPINC . '/class-wp-walker.php'; // obf
require ABSPATH . WPINC . '/class-wp-ajax-response.php'; // obf
require ABSPATH . WPINC . '/capabilities.php'; // obf
require ABSPATH . WPINC . '/class-wp-roles.php'; // obf
require ABSPATH . WPINC . '/class-wp-role.php'; // obf
require ABSPATH . WPINC . '/class-wp-user.php'; // obf
require ABSPATH . WPINC . '/class-wp-query.php'; // obf
require ABSPATH . WPINC . '/query.php'; // obf
require ABSPATH . WPINC . '/class-wp-date-query.php'; // obf
require ABSPATH . WPINC . '/theme.php'; // obf
require ABSPATH . WPINC . '/class-wp-theme.php'; // obf
require ABSPATH . WPINC . '/class-wp-theme-json-schema.php'; // obf
require ABSPATH . WPINC . '/class-wp-theme-json-data.php'; // obf
require ABSPATH . WPINC . '/class-wp-theme-json.php'; // obf
require ABSPATH . WPINC . '/class-wp-theme-json-resolver.php'; // obf
require ABSPATH . WPINC . '/class-wp-duotone.php'; // obf
require ABSPATH . WPINC . '/global-styles-and-settings.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-template.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-templates-registry.php'; // obf
require ABSPATH . WPINC . '/block-template-utils.php'; // obf
require ABSPATH . WPINC . '/block-template.php'; // obf
require ABSPATH . WPINC . '/theme-templates.php'; // obf
require ABSPATH . WPINC . '/theme-previews.php'; // obf
require ABSPATH . WPINC . '/template.php'; // obf
require ABSPATH . WPINC . '/https-detection.php'; // obf
require ABSPATH . WPINC . '/https-migration.php'; // obf
require ABSPATH . WPINC . '/class-wp-user-request.php'; // obf
require ABSPATH . WPINC . '/user.php'; // obf
require ABSPATH . WPINC . '/class-wp-user-query.php'; // obf
require ABSPATH . WPINC . '/class-wp-session-tokens.php'; // obf
require ABSPATH . WPINC . '/class-wp-user-meta-session-tokens.php'; // obf
require ABSPATH . WPINC . '/general-template.php'; // obf
require ABSPATH . WPINC . '/link-template.php'; // obf
require ABSPATH . WPINC . '/author-template.php'; // obf
require ABSPATH . WPINC . '/robots-template.php'; // obf
require ABSPATH . WPINC . '/post.php'; // obf
require ABSPATH . WPINC . '/class-walker-page.php'; // obf
require ABSPATH . WPINC . '/class-walker-page-dropdown.php'; // obf
require ABSPATH . WPINC . '/class-wp-post-type.php'; // obf
require ABSPATH . WPINC . '/class-wp-post.php'; // obf
require ABSPATH . WPINC . '/post-template.php'; // obf
require ABSPATH . WPINC . '/revision.php'; // obf
require ABSPATH . WPINC . '/post-formats.php'; // obf
require ABSPATH . WPINC . '/post-thumbnail-template.php'; // obf
require ABSPATH . WPINC . '/category.php'; // obf
require ABSPATH . WPINC . '/class-walker-category.php'; // obf
require ABSPATH . WPINC . '/class-walker-category-dropdown.php'; // obf
require ABSPATH . WPINC . '/category-template.php'; // obf
require ABSPATH . WPINC . '/comment.php'; // obf
require ABSPATH . WPINC . '/class-wp-comment.php'; // obf
require ABSPATH . WPINC . '/class-wp-comment-query.php'; // obf
require ABSPATH . WPINC . '/class-walker-comment.php'; // obf
require ABSPATH . WPINC . '/comment-template.php'; // obf
require ABSPATH . WPINC . '/rewrite.php'; // obf
require ABSPATH . WPINC . '/class-wp-rewrite.php'; // obf
require ABSPATH . WPINC . '/feed.php'; // obf
require ABSPATH . WPINC . '/bookmark.php'; // obf
require ABSPATH . WPINC . '/bookmark-template.php'; // obf
require ABSPATH . WPINC . '/kses.php'; // obf
require ABSPATH . WPINC . '/cron.php'; // obf
require ABSPATH . WPINC . '/deprecated.php'; // obf
require ABSPATH . WPINC . '/script-loader.php'; // obf
require ABSPATH . WPINC . '/taxonomy.php'; // obf
require ABSPATH . WPINC . '/class-wp-taxonomy.php'; // obf
require ABSPATH . WPINC . '/class-wp-term.php'; // obf
require ABSPATH . WPINC . '/class-wp-term-query.php'; // obf
require ABSPATH . WPINC . '/class-wp-tax-query.php'; // obf
require ABSPATH . WPINC . '/update.php'; // obf
require ABSPATH . WPINC . '/canonical.php'; // obf
require ABSPATH . WPINC . '/shortcodes.php'; // obf
require ABSPATH . WPINC . '/embed.php'; // obf
require ABSPATH . WPINC . '/class-wp-embed.php'; // obf
require ABSPATH . WPINC . '/class-wp-oembed.php'; // obf
require ABSPATH . WPINC . '/class-wp-oembed-controller.php'; // obf
require ABSPATH . WPINC . '/media.php'; // obf
require ABSPATH . WPINC . '/http.php'; // obf
require ABSPATH . WPINC . '/html-api/html5-named-character-references.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-attribute-token.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-span.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-doctype-info.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-text-replacement.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-decoder.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-tag-processor.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-unsupported-exception.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-active-formatting-elements.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-open-elements.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-token.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-stack-event.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-processor-state.php'; // obf
require ABSPATH . WPINC . '/html-api/class-wp-html-processor.php'; // obf
require ABSPATH . WPINC . '/class-wp-http.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-streams.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-curl.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-proxy.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-cookie.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-encoding.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-response.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-requests-response.php'; // obf
require ABSPATH . WPINC . '/class-wp-http-requests-hooks.php'; // obf
require ABSPATH . WPINC . '/widgets.php'; // obf
require ABSPATH . WPINC . '/class-wp-widget.php'; // obf
require ABSPATH . WPINC . '/class-wp-widget-factory.php'; // obf
require ABSPATH . WPINC . '/nav-menu-template.php'; // obf
require ABSPATH . WPINC . '/nav-menu.php'; // obf
require ABSPATH . WPINC . '/admin-bar.php'; // obf
require ABSPATH . WPINC . '/class-wp-application-passwords.php'; // obf
require ABSPATH . WPINC . '/rest-api.php'; // obf
require ABSPATH . WPINC . '/rest-api/class-wp-rest-server.php'; // obf
require ABSPATH . WPINC . '/rest-api/class-wp-rest-response.php'; // obf
require ABSPATH . WPINC . '/rest-api/class-wp-rest-request.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-posts-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-attachments-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-global-styles-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-post-types-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-post-statuses-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-revisions-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-global-styles-revisions-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-template-revisions-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-autosaves-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-template-autosaves-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-taxonomies-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-terms-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-menu-items-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-menus-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-menu-locations-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-users-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-comments-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-search-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-blocks-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-block-types-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-block-renderer-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-settings-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-themes-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-plugins-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-block-directory-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-edit-site-export-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-pattern-directory-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-block-patterns-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-block-pattern-categories-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-application-passwords-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-site-health-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-sidebars-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-widget-types-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-widgets-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-templates-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-url-details-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-navigation-fallback-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-font-families-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-font-faces-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/endpoints/class-wp-rest-font-collections-controller.php'; // obf
require ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-meta-fields.php'; // obf
require ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-comment-meta-fields.php'; // obf
require ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-post-meta-fields.php'; // obf
require ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-term-meta-fields.php'; // obf
require ABSPATH . WPINC . '/rest-api/fields/class-wp-rest-user-meta-fields.php'; // obf
require ABSPATH . WPINC . '/rest-api/search/class-wp-rest-search-handler.php'; // obf
require ABSPATH . WPINC . '/rest-api/search/class-wp-rest-post-search-handler.php'; // obf
require ABSPATH . WPINC . '/rest-api/search/class-wp-rest-term-search-handler.php'; // obf
require ABSPATH . WPINC . '/rest-api/search/class-wp-rest-post-format-search-handler.php'; // obf
require ABSPATH . WPINC . '/sitemaps.php'; // obf
require ABSPATH . WPINC . '/sitemaps/class-wp-sitemaps.php'; // obf
require ABSPATH . WPINC . '/sitemaps/class-wp-sitemaps-index.php'; // obf
require ABSPATH . WPINC . '/sitemaps/class-wp-sitemaps-provider.php'; // obf
require ABSPATH . WPINC . '/sitemaps/class-wp-sitemaps-registry.php'; // obf
require ABSPATH . WPINC . '/sitemaps/class-wp-sitemaps-renderer.php'; // obf
require ABSPATH . WPINC . '/sitemaps/class-wp-sitemaps-stylesheet.php'; // obf
require ABSPATH . WPINC . '/sitemaps/providers/class-wp-sitemaps-posts.php'; // obf
require ABSPATH . WPINC . '/sitemaps/providers/class-wp-sitemaps-taxonomies.php'; // obf
require ABSPATH . WPINC . '/sitemaps/providers/class-wp-sitemaps-users.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-bindings-source.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-bindings-registry.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-editor-context.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-type.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-pattern-categories-registry.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-patterns-registry.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-styles-registry.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-type-registry.php'; // obf
require ABSPATH . WPINC . '/class-wp-block.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-list.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-metadata-registry.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-parser-block.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-parser-frame.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-parser.php'; // obf
require ABSPATH . WPINC . '/class-wp-classic-to-block-menu-converter.php'; // obf
require ABSPATH . WPINC . '/class-wp-navigation-fallback.php'; // obf
require ABSPATH . WPINC . '/block-bindings.php'; // obf
require ABSPATH . WPINC . '/block-bindings/pattern-overrides.php'; // obf
require ABSPATH . WPINC . '/block-bindings/post-meta.php'; // obf
require ABSPATH . WPINC . '/blocks.php'; // obf
require ABSPATH . WPINC . '/blocks/index.php'; // obf
require ABSPATH . WPINC . '/block-editor.php'; // obf
require ABSPATH . WPINC . '/block-patterns.php'; // obf
require ABSPATH . WPINC . '/class-wp-block-supports.php'; // obf
require ABSPATH . WPINC . '/block-supports/utils.php'; // obf
require ABSPATH . WPINC . '/block-supports/align.php'; // obf
require ABSPATH . WPINC . '/block-supports/custom-classname.php'; // obf
require ABSPATH . WPINC . '/block-supports/generated-classname.php'; // obf
require ABSPATH . WPINC . '/block-supports/settings.php'; // obf
require ABSPATH . WPINC . '/block-supports/elements.php'; // obf
require ABSPATH . WPINC . '/block-supports/colors.php'; // obf
require ABSPATH . WPINC . '/block-supports/typography.php'; // obf
require ABSPATH . WPINC . '/block-supports/border.php'; // obf
require ABSPATH . WPINC . '/block-supports/layout.php'; // obf
require ABSPATH . WPINC . '/block-supports/position.php'; // obf
require ABSPATH . WPINC . '/block-supports/spacing.php'; // obf
require ABSPATH . WPINC . '/block-supports/dimensions.php'; // obf
require ABSPATH . WPINC . '/block-supports/duotone.php'; // obf
require ABSPATH . WPINC . '/block-supports/shadow.php'; // obf
require ABSPATH . WPINC . '/block-supports/background.php'; // obf
require ABSPATH . WPINC . '/block-supports/block-style-variations.php'; // obf
require ABSPATH . WPINC . '/block-supports/aria-label.php'; // obf
require ABSPATH . WPINC . '/style-engine.php'; // obf
require ABSPATH . WPINC . '/style-engine/class-wp-style-engine.php'; // obf
require ABSPATH . WPINC . '/style-engine/class-wp-style-engine-css-declarations.php'; // obf
require ABSPATH . WPINC . '/style-engine/class-wp-style-engine-css-rule.php'; // obf
require ABSPATH . WPINC . '/style-engine/class-wp-style-engine-css-rules-store.php'; // obf
require ABSPATH . WPINC . '/style-engine/class-wp-style-engine-processor.php'; // obf
require ABSPATH . WPINC . '/fonts/class-wp-font-face-resolver.php'; // obf
require ABSPATH . WPINC . '/fonts/class-wp-font-collection.php'; // obf
require ABSPATH . WPINC . '/fonts/class-wp-font-face.php'; // obf
require ABSPATH . WPINC . '/fonts/class-wp-font-library.php'; // obf
require ABSPATH . WPINC . '/fonts/class-wp-font-utils.php'; // obf
require ABSPATH . WPINC . '/fonts.php'; // obf
require ABSPATH . WPINC . '/class-wp-script-modules.php'; // obf
require ABSPATH . WPINC . '/script-modules.php'; // obf
require ABSPATH . WPINC . '/interactivity-api/class-wp-interactivity-api.php'; // obf
require ABSPATH . WPINC . '/interactivity-api/class-wp-interactivity-api-directives-processor.php'; // obf
require ABSPATH . WPINC . '/interactivity-api/interactivity-api.php'; // obf
require ABSPATH . WPINC . '/class-wp-plugin-dependencies.php'; // obf
require ABSPATH . WPINC . '/class-wp-url-pattern-prefixer.php'; // obf
require ABSPATH . WPINC . '/class-wp-speculation-rules.php'; // obf
require ABSPATH . WPINC . '/speculative-loading.php'; // obf

add_action( 'after_setup_theme', array( wp_script_modules(), 'add_hooks' ) ); // obf
add_action( 'after_setup_theme', array( wp_interactivity(), 'add_hooks' ) ); // obf

/** // obf
 * @since 3.3.0 // obf
 * // obf
 * @global WP_Embed $v_bqrlg WordPress Embed object. // obf
 */ // obf
$v_zannm['wp_embed'] = new WP_Embed(); // obf

/** // obf
 * WordPress Textdomain Registry object. // obf
 * // obf
 * Used to support just-in-time translations for manually loaded text domains. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @global WP_Textdomain_Registry $v_trlje WordPress Textdomain Registry. // obf
 */ // obf
$v_zannm['wp_textdomain_registry'] = new WP_Textdomain_Registry(); // obf
$v_zannm['wp_textdomain_registry']->init(); // obf

// Load multisite-specific files. // obf
if ( is_multisite() ) { // obf
	require ABSPATH . WPINC . '/ms-functions.php'; // obf
	require ABSPATH . WPINC . '/ms-default-filters.php'; // obf
	require ABSPATH . WPINC . '/ms-deprecated.php'; // obf
} // obf

// Define constants that rely on the API to obtain the default value. // obf
// Define must-use plugin directory constants, which may be overridden in the sunrise.php drop-in. // obf
wp_plugin_directory_constants(); // obf

/** // obf
 * @since 3.9.0 // obf
 * // obf
 * @global array $v_dymdh // obf
 */ // obf
$v_zannm['wp_plugin_paths'] = array(); // obf

// Load must-use plugins. // obf
foreach ( wp_get_mu_plugins() as $v_xnhvt ) { // obf
	$v_oagxi = $v_xnhvt; // obf
	include_once $v_xnhvt; // obf
	$v_xnhvt = $v_oagxi; // Avoid stomping of the $v_xnhvt variable in a plugin. // obf

	/** // obf
	 * Fires once a single must-use plugin has loaded. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param string $v_xnhvt Full path to the plugin's main file. // obf
	 */ // obf
	do_action( 'mu_plugin_loaded', $v_xnhvt ); // obf
} // obf
unset( $v_xnhvt, $v_oagxi ); // obf

// Load network activated plugins. // obf
if ( is_multisite() ) { // obf
	foreach ( wp_get_active_network_plugins() as $v_vpaee ) { // obf
		wp_register_plugin_realpath( $v_vpaee ); // obf

		$v_oagxi = $v_vpaee; // obf
		include_once $v_vpaee; // obf
		$v_vpaee = $v_oagxi; // Avoid stomping of the $v_vpaee variable in a plugin. // obf

		/** // obf
		 * Fires once a single network-activated plugin has loaded. // obf
		 * // obf
		 * @since 5.1.0 // obf
		 * // obf
		 * @param string $v_vpaee Full path to the plugin's main file. // obf
		 */ // obf
		do_action( 'network_plugin_loaded', $v_vpaee ); // obf
	} // obf
	unset( $v_vpaee, $v_oagxi ); // obf
} // obf

/** // obf
 * Fires once all must-use and network-activated plugins have loaded. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
do_action( 'muplugins_loaded' ); // obf

if ( is_multisite() ) { // obf
	ms_cookie_constants(); // obf
} // obf

// Define constants after multisite is loaded. // obf
wp_cookie_constants(); // obf

// Define and enforce our SSL constants. // obf
wp_ssl_constants(); // obf

// Create common globals. // obf
require ABSPATH . WPINC . '/vars.php'; // obf

// Make taxonomies and posts available to plugins and themes. // obf
// @plugin authors: warning: these get registered again on the init hook. // obf
create_initial_taxonomies(); // obf
create_initial_post_types(); // obf

wp_start_scraping_edited_file_errors(); // obf

// Register the default theme directory root. // obf
register_theme_directory( get_theme_root() ); // obf

if ( ! is_multisite() && wp_is_fatal_error_handler_enabled() ) { // obf
	// Handle users requesting a recovery mode link and initiating recovery mode. // obf
	wp_recovery_mode()->initialize(); // obf
} // obf

// To make get_plugin_data() available in a way that's compatible with plugins also loading this file, see #62244. // obf
require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf

// Load active plugins. // obf
foreach ( wp_get_active_and_valid_plugins() as $v_xfaxw ) { // obf
	wp_register_plugin_realpath( $v_xfaxw ); // obf

	$v_wvuds = get_plugin_data( $v_xfaxw, false, false ); // obf

	$v_ufolj = $v_wvuds['TextDomain']; // obf
	if ( $v_ufolj ) { // obf
		if ( $v_wvuds['DomainPath'] ) { // obf
			$v_zannm['wp_textdomain_registry']->set_custom_path( $v_ufolj, dirname( $v_xfaxw ) . $v_wvuds['DomainPath'] ); // obf
		} else { // obf
			$v_zannm['wp_textdomain_registry']->set_custom_path( $v_ufolj, dirname( $v_xfaxw ) ); // obf
		} // obf
	} // obf

	$v_oagxi = $v_xfaxw; // obf
	include_once $v_xfaxw; // obf
	$v_xfaxw = $v_oagxi; // Avoid stomping of the $v_xfaxw variable in a plugin. // obf

	/** // obf
	 * Fires once a single activated plugin has loaded. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param string $v_xfaxw Full path to the plugin's main file. // obf
	 */ // obf
	do_action( 'plugin_loaded', $v_xfaxw ); // obf
} // obf
unset( $v_xfaxw, $v_oagxi, $v_wvuds, $v_ufolj ); // obf

// Load pluggable functions. // obf
require ABSPATH . WPINC . '/pluggable.php'; // obf
require ABSPATH . WPINC . '/pluggable-deprecated.php'; // obf

// Set internal encoding. // obf
wp_set_internal_encoding(); // obf

// Run wp_cache_postload() if object cache is enabled and the function exists. // obf
if ( WP_CACHE && function_exists( 'wp_cache_postload' ) ) { // obf
	wp_cache_postload(); // obf
} // obf

/** // obf
 * Fires once activated plugins have loaded. // obf
 * // obf
 * Pluggable functions are also available at this point in the loading order. // obf
 * // obf
 * @since 1.5.0 // obf
 */ // obf
do_action( 'plugins_loaded' ); // obf

// Define constants which affect functionality if not already defined. // obf
wp_functionality_constants(); // obf

// Add magic quotes and set up $v_nmvvh ( $v_zqagu + $v_pwhfg ). // obf
wp_magic_quotes(); // obf

/** // obf
 * Fires when comment cookies are sanitized. // obf
 * // obf
 * @since 2.0.11 // obf
 */ // obf
do_action( 'sanitize_comment_cookies' ); // obf

/** // obf
 * WordPress Query object // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global WP_Query $v_brvhp WordPress Query object. // obf
 */ // obf
$v_zannm['wp_the_query'] = new WP_Query(); // obf

/** // obf
 * Holds the reference to {@see $v_brvhp}. // obf
 * Use this global for WordPress queries // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global WP_Query $v_ylzus WordPress Query object. // obf
 */ // obf
$v_zannm['wp_query'] = $v_zannm['wp_the_query']; // obf

/** // obf
 * Holds the WordPress Rewrite object for creating pretty URLs // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global WP_Rewrite $v_zyynp WordPress rewrite component. // obf
 */ // obf
$v_zannm['wp_rewrite'] = new WP_Rewrite(); // obf

/** // obf
 * WordPress Object // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global WP $v_ayxsl Current WordPress environment instance. // obf
 */ // obf
$v_zannm['wp'] = new WP(); // obf

/** // obf
 * WordPress Widget Factory Object // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global WP_Widget_Factory $v_ziuul // obf
 */ // obf
$v_zannm['wp_widget_factory'] = new WP_Widget_Factory(); // obf

/** // obf
 * WordPress User Roles // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global WP_Roles $v_clajm WordPress role management object. // obf
 */ // obf
$v_zannm['wp_roles'] = new WP_Roles(); // obf

/** // obf
 * Fires before the theme is loaded. // obf
 * // obf
 * @since 2.6.0 // obf
 */ // obf
do_action( 'setup_theme' ); // obf

// Define the template related constants and globals. // obf
wp_templating_constants(); // obf
wp_set_template_globals(); // obf

// Load the default text localization domain. // obf
load_default_textdomain(); // obf

$v_wypim      = get_locale(); // obf
$v_khftv = WP_LANG_DIR . "/$v_wypim.php"; // obf
if ( ( 0 === validate_file( $v_wypim ) ) && is_readable( $v_khftv ) ) { // obf
	require $v_khftv; // obf
} // obf
unset( $v_khftv ); // obf

/** // obf
 * WordPress Locale object for loading locale domain date and various strings. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @global WP_Locale $v_mzfss WordPress date and time locale object. // obf
 */ // obf
$v_zannm['wp_locale'] = new WP_Locale(); // obf

/** // obf
 * WordPress Locale Switcher object for switching locales. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @global WP_Locale_Switcher $v_jrgxu WordPress locale switcher object. // obf
 */ // obf
$v_zannm['wp_locale_switcher'] = new WP_Locale_Switcher(); // obf
$v_zannm['wp_locale_switcher']->init(); // obf

// Load the functions for the active theme, for both parent and child theme if applicable. // obf
foreach ( wp_get_active_and_valid_themes() as $v_zdulc ) { // obf
	$v_muwpc = wp_get_theme( basename( $v_zdulc ) ); // obf

	$v_muwpc->load_textdomain(); // obf

	if ( file_exists( $v_zdulc . '/functions.php' ) ) { // obf
		include $v_zdulc . '/functions.php'; // obf
	} // obf
} // obf
unset( $v_zdulc, $v_muwpc ); // obf

/** // obf
 * Fires after the theme is loaded. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'after_setup_theme' ); // obf

// Create an instance of WP_Site_Health so that Cron events may fire. // obf
if ( ! class_exists( 'WP_Site_Health' ) ) { // obf
	require_once ABSPATH . 'wp-admin/includes/class-wp-site-health.php'; // obf
} // obf
WP_Site_Health::get_instance(); // obf

// Set up current user. // obf
$v_zannm['wp']->init(); // obf

/** // obf
 * Fires after WordPress has finished loading but before any headers are sent. // obf
 * // obf
 * Most of WP is loaded at this stage, and the user is authenticated. WP continues // obf
 * to load on the {@see 'init'} hook that follows (e.g. widgets), and many plugins instantiate // obf
 * themselves on it for all sorts of reasons (e.g. they need a user, a taxonomy, etc.). // obf
 * // obf
 * If you wish to plug an action once WP is loaded, use the {@see 'wp_loaded'} hook below. // obf
 * // obf
 * @since 1.5.0 // obf
 */ // obf
do_action( 'init' ); // obf

// Check site status. // obf
if ( is_multisite() ) { // obf
	$v_jzjzv = ms_site_check(); // obf
	if ( true !== $v_jzjzv ) { // obf
		require $v_jzjzv; // obf
		die(); // obf
	} // obf
	unset( $v_jzjzv ); // obf
} // obf

/** // obf
 * This hook is fired once WP, all plugins, and the theme are fully loaded and instantiated. // obf
 * // obf
 * Ajax requests should use wp-admin/admin-ajax.php. admin-ajax.php can handle requests for // obf
 * users not logged in. // obf
 * // obf
 * @link https://developer.wordpress.org/plugins/javascript/ajax // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
do_action( 'wp_loaded' ); // obf