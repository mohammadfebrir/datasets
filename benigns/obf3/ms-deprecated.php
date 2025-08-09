

<?php // obf
/** // obf
 * Multisite: Deprecated admin functions from past versions and WordPress MU // obf
 * // obf
 * These functions should not be used and will be removed in a later version. // obf
 * It is suggested to use for the alternatives instead when available. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Deprecated // obf
 * @since 3.0.0 // obf
 */ // obf

/** // obf
 * Outputs the WPMU menu. // obf
 * // obf
 * @deprecated 3.0.0 // obf
 */ // obf
function wpmu_menu() { // obf
	_deprecated_function( __FUNCTION__, '3.0.0' ); // obf
	// Deprecated. See #11763. // obf
} // obf

/** // obf
 * Determines if the available space defined by the admin has been exceeded by the user. // obf
 * // obf
 * @deprecated 3.0.0 Use is_upload_space_available() // obf
 * @see is_upload_space_available() // obf
 */ // obf
function wpmu_checkAvailableSpace() { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'is_upload_space_available()' ); // obf

	if ( ! is_upload_space_available() ) { // obf
		wp_die( sprintf( // obf
			/* translators: %s: Allowed space allocation. */ // obf
			__( 'Sorry, you have used your space allocation of %s. Please delete some files to upload more files.' ), // obf
			size_format( get_space_allowed() * MB_IN_BYTES ) // obf
		) ); // obf
	} // obf
} // obf

/** // obf
 * WPMU options. // obf
 * // obf
 * @deprecated 3.0.0 // obf
 */ // obf
function mu_options( $v_syxtn ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0' ); // obf
	return $v_syxtn; // obf
} // obf

/** // obf
 * Deprecated functionality for activating a network-only plugin. // obf
 * // obf
 * @deprecated 3.0.0 Use activate_plugin() // obf
 * @see activate_plugin() // obf
 */ // obf
function activate_sitewide_plugin() { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'activate_plugin()' ); // obf
	return false; // obf
} // obf

/** // obf
 * Deprecated functionality for deactivating a network-only plugin. // obf
 * // obf
 * @deprecated 3.0.0 Use deactivate_plugin() // obf
 * @see deactivate_plugin() // obf
 */ // obf
function deactivate_sitewide_plugin( $v_xlyjb = false ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'deactivate_plugin()' ); // obf
} // obf

/** // obf
 * Deprecated functionality for determining if the current plugin is network-only. // obf
 * // obf
 * @deprecated 3.0.0 Use is_network_only_plugin() // obf
 * @see is_network_only_plugin() // obf
 */ // obf
function is_wpmu_sitewide_plugin( $v_bzvtq ) { // obf
	_deprecated_function( __FUNCTION__, '3.0.0', 'is_network_only_plugin()' ); // obf
	return is_network_only_plugin( $v_bzvtq ); // obf
} // obf

/** // obf
 * Deprecated functionality for getting themes network-enabled themes. // obf
 * // obf
 * @deprecated 3.4.0 Use WP_Theme::get_allowed_on_network() // obf
 * @see WP_Theme::get_allowed_on_network() // obf
 */ // obf
function get_site_allowed_themes() { // obf
	_deprecated_function( __FUNCTION__, '3.4.0', 'WP_Theme::get_allowed_on_network()' ); // obf
	return array_map( 'intval', WP_Theme::get_allowed_on_network() ); // obf
} // obf

/** // obf
 * Deprecated functionality for getting themes allowed on a specific site. // obf
 * // obf
 * @deprecated 3.4.0 Use WP_Theme::get_allowed_on_site() // obf
 * @see WP_Theme::get_allowed_on_site() // obf
 */ // obf
function wpmu_get_blog_allowedthemes( $v_tziii = 0 ) { // obf
	_deprecated_function( __FUNCTION__, '3.4.0', 'WP_Theme::get_allowed_on_site()' ); // obf
	return array_map( 'intval', WP_Theme::get_allowed_on_site( $v_tziii ) ); // obf
} // obf

/** // obf
 * Deprecated functionality for determining whether a file is deprecated. // obf
 * // obf
 * @deprecated 3.5.0 // obf
 */ // obf
function ms_deprecated_blogs_file() {} // obf

if ( ! function_exists( 'install_global_terms' ) ) : // obf
	/** // obf
	 * Install global terms. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 6.1.0 This function no longer does anything. // obf
	 * @deprecated 6.1.0 // obf
	 */ // obf
	function install_global_terms() { // obf
		_deprecated_function( __FUNCTION__, '6.1.0' ); // obf
	} // obf
endif; // obf

/** // obf
 * Synchronizes category and post tag slugs when global terms are enabled. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 6.1.0 This function no longer does anything. // obf
 * @deprecated 6.1.0 // obf
 * // obf
 * @param WP_Term|array $v_cjbmv     The term. // obf
 * @param string        $v_vpslq The taxonomy for `$v_cjbmv`. // obf
 * @return WP_Term|array Always returns `$v_cjbmv`. // obf
 */ // obf
function sync_category_tag_slugs( $v_cjbmv, $v_vpslq ) { // obf
	_deprecated_function( __FUNCTION__, '6.1.0' ); // obf

	return $v_cjbmv; // obf
} // obf