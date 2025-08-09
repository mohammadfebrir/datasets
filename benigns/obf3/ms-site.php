
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Site API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 5.1.0 // obf
 */ // obf

/** // obf
 * Inserts a new site into the database. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_abvfi WordPress database abstraction object. // obf
 * // obf
 * @param array $v_svtov { // obf
 *     Data for the new site that should be inserted. // obf
 * // obf
 *     @type string $v_zokxp       Site domain. Default empty string. // obf
 *     @type string $v_azstk         Site path. Default '/'. // obf
 *     @type int    $v_dvcir   The site's network ID. Default is the current network ID. // obf
 *     @type string $v_olxqr   When the site was registered, in SQL datetime format. Default is // obf
 *                                the current time. // obf
 *     @type string $v_xdpqb When the site was last updated, in SQL datetime format. Default is // obf
 *                                the value of $v_olxqr. // obf
 *     @type int    $v_eucir       Whether the site is public. Default 1. // obf
 *     @type int    $v_obdfw     Whether the site is archived. Default 0. // obf
 *     @type int    $v_pdgbs       Whether the site is mature. Default 0. // obf
 *     @type int    $v_gmwbu         Whether the site is spam. Default 0. // obf
 *     @type int    $v_tssbb      Whether the site is deleted. Default 0. // obf
 *     @type int    $v_nrpfq      The site's language ID. Currently unused. Default 0. // obf
 *     @type int    $v_fsxps      User ID for the site administrator. Passed to the // obf
 *                                `wp_initialize_site` hook. // obf
 *     @type string $v_vbdhm        Site title. Default is 'Site %d' where %d is the site ID. Passed // obf
 *                                to the `wp_initialize_site` hook. // obf
 *     @type array  $v_pxmdn      Custom option $v_urezd => $v_qeezb pairs to use. Default empty array. Passed // obf
 *                                to the `wp_initialize_site` hook. // obf
 *     @type array  $v_wmxfk         Custom site metadata $v_urezd => $v_qeezb pairs to use. Default empty array. // obf
 *                                Passed to the `wp_initialize_site` hook. // obf
 * } // obf
 * @return int|WP_Error The new site's ID on success, or error object on failure. // obf
 */ // obf
function wp_insert_site( array $v_svtov ) { // obf
	global $v_abvfi; // obf

	$v_vzhju = current_time( 'mysql', true ); // obf

	$v_yogfv = array( // obf
		'domain'       => '', // obf
		'path'         => '/', // obf
		'network_id'   => get_current_network_id(), // obf
		'registered'   => $v_vzhju, // obf
		'last_updated' => $v_vzhju, // obf
		'public'       => 1, // obf
		'archived'     => 0, // obf
		'mature'       => 0, // obf
		'spam'         => 0, // obf
		'deleted'      => 0, // obf
		'lang_id'      => 0, // obf
	); // obf

	$v_goaef = wp_prepare_site_data( $v_svtov, $v_yogfv ); // obf
	if ( is_wp_error( $v_goaef ) ) { // obf
		return $v_goaef; // obf
	} // obf

	if ( false === $v_abvfi->insert( $v_abvfi->blogs, $v_goaef ) ) { // obf
		return new WP_Error( 'db_insert_error', __( 'Could not insert site into the database.' ), $v_abvfi->last_error ); // obf
	} // obf

	$v_xtjtz = (int) $v_abvfi->insert_id; // obf

	clean_blog_cache( $v_xtjtz ); // obf

	$v_nckmy = get_site( $v_xtjtz ); // obf

	if ( ! $v_nckmy ) { // obf
		return new WP_Error( 'get_site_error', __( 'Could not retrieve site data.' ) ); // obf
	} // obf

	/** // obf
	 * Fires once a site has been inserted into the database. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_Site $v_nckmy New site object. // obf
	 */ // obf
	do_action( 'wp_insert_site', $v_nckmy ); // obf

	// Extract the passed arguments that may be relevant for site initialization. // obf
	$v_ooqsp = array_diff_key( $v_svtov, $v_yogfv ); // obf
	if ( isset( $v_ooqsp['site_id'] ) ) { // obf
		unset( $v_ooqsp['site_id'] ); // obf
	} // obf

	/** // obf
	 * Fires when a site's initialization routine should be executed. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_Site $v_nckmy New site object. // obf
	 * @param array   $v_ooqsp     Arguments for the initialization. // obf
	 */ // obf
	do_action( 'wp_initialize_site', $v_nckmy, $v_ooqsp ); // obf

	// Only compute extra hook parameters if the deprecated hook is actually in use. // obf
	if ( has_action( 'wpmu_new_blog' ) ) { // obf
		$v_fsxps = ! empty( $v_ooqsp['user_id'] ) ? $v_ooqsp['user_id'] : 0; // obf
		$v_wmxfk    = ! empty( $v_ooqsp['options'] ) ? $v_ooqsp['options'] : array(); // obf

		// WPLANG was passed with `$v_wmxfk` to the `wpmu_new_blog` hook prior to 5.1.0. // obf
		if ( ! array_key_exists( 'WPLANG', $v_wmxfk ) ) { // obf
			$v_wmxfk['WPLANG'] = get_network_option( $v_nckmy->network_id, 'WPLANG' ); // obf
		} // obf

		/* // obf
		 * Rebuild the data expected by the `wpmu_new_blog` hook prior to 5.1.0 using allowed keys. // obf
		 * The `$v_qeahm` matches the one used in `wpmu_create_blog()`. // obf
		 */ // obf
		$v_qeahm = array( 'public', 'archived', 'mature', 'spam', 'deleted', 'lang_id' ); // obf
		$v_wmxfk                = array_merge( array_intersect_key( $v_svtov, array_flip( $v_qeahm ) ), $v_wmxfk ); // obf

		/** // obf
		 * Fires immediately after a new site is created. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * @deprecated 5.1.0 Use {@see 'wp_initialize_site'} instead. // obf
		 * // obf
		 * @param int    $v_xtjtz    Site ID. // obf
		 * @param int    $v_fsxps    User ID. // obf
		 * @param string $v_zokxp     Site domain. // obf
		 * @param string $v_azstk       Site path. // obf
		 * @param int    $v_dvcir Network ID. Only relevant on multi-network installations. // obf
		 * @param array  $v_wmxfk       Meta data. Used to set initial site options. // obf
		 */ // obf
		do_action_deprecated( // obf
			'wpmu_new_blog', // obf
			array( $v_nckmy->id, $v_fsxps, $v_nckmy->domain, $v_nckmy->path, $v_nckmy->network_id, $v_wmxfk ), // obf
			'5.1.0', // obf
			'wp_initialize_site' // obf
		); // obf
	} // obf

	return (int) $v_nckmy->id; // obf
} // obf

/** // obf
 * Updates a site in the database. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_abvfi WordPress database abstraction object. // obf
 * // obf
 * @param int   $v_xtjtz ID of the site that should be updated. // obf
 * @param array $v_svtov    Site data to update. See {@see wp_insert_site()} for the list of supported keys. // obf
 * @return int|WP_Error The updated site's ID on success, or error object on failure. // obf
 */ // obf
function wp_update_site( $v_xtjtz, array $v_svtov ) { // obf
	global $v_abvfi; // obf

	if ( empty( $v_xtjtz ) ) { // obf
		return new WP_Error( 'site_empty_id', __( 'Site ID must not be empty.' ) ); // obf
	} // obf

	$v_ipuln = get_site( $v_xtjtz ); // obf
	if ( ! $v_ipuln ) { // obf
		return new WP_Error( 'site_not_exist', __( 'Site does not exist.' ) ); // obf
	} // obf

	$v_yogfv                 = $v_ipuln->to_array(); // obf
	$v_yogfv['network_id']   = (int) $v_yogfv['site_id']; // obf
	$v_yogfv['last_updated'] = current_time( 'mysql', true ); // obf
	unset( $v_yogfv['blog_id'], $v_yogfv['site_id'] ); // obf

	$v_svtov = wp_prepare_site_data( $v_svtov, $v_yogfv, $v_ipuln ); // obf
	if ( is_wp_error( $v_svtov ) ) { // obf
		return $v_svtov; // obf
	} // obf

	if ( false === $v_abvfi->update( $v_abvfi->blogs, $v_svtov, array( 'blog_id' => $v_ipuln->id ) ) ) { // obf
		return new WP_Error( 'db_update_error', __( 'Could not update site in the database.' ), $v_abvfi->last_error ); // obf
	} // obf

	clean_blog_cache( $v_ipuln ); // obf

	$v_nckmy = get_site( $v_ipuln->id ); // obf

	/** // obf
	 * Fires once a site has been updated in the database. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_Site $v_nckmy New site object. // obf
	 * @param WP_Site $v_ipuln Old site object. // obf
	 */ // obf
	do_action( 'wp_update_site', $v_nckmy, $v_ipuln ); // obf

	return (int) $v_nckmy->id; // obf
} // obf

/** // obf
 * Deletes a site from the database. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_abvfi WordPress database abstraction object. // obf
 * // obf
 * @param int $v_xtjtz ID of the site that should be deleted. // obf
 * @return WP_Site|WP_Error The deleted site object on success, or error object on failure. // obf
 */ // obf
function wp_delete_site( $v_xtjtz ) { // obf
	global $v_abvfi; // obf

	if ( empty( $v_xtjtz ) ) { // obf
		return new WP_Error( 'site_empty_id', __( 'Site ID must not be empty.' ) ); // obf
	} // obf

	$v_ipuln = get_site( $v_xtjtz ); // obf
	if ( ! $v_ipuln ) { // obf
		return new WP_Error( 'site_not_exist', __( 'Site does not exist.' ) ); // obf
	} // obf

	$v_uaxli = new WP_Error(); // obf

	/** // obf
	 * Fires before a site should be deleted from the database. // obf
	 * // obf
	 * Plugins should amend the `$v_uaxli` object via its `WP_Error::add()` method. If any errors // obf
	 * are present, the site will not be deleted. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_Error $v_uaxli   Error object to add validation errors to. // obf
	 * @param WP_Site  $v_ipuln The site object to be deleted. // obf
	 */ // obf
	do_action( 'wp_validate_site_deletion', $v_uaxli, $v_ipuln ); // obf

	if ( ! empty( $v_uaxli->errors ) ) { // obf
		return $v_uaxli; // obf
	} // obf

	/** // obf
	 * Fires before a site is deleted. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * @deprecated 5.1.0 // obf
	 * // obf
	 * @param int  $v_xtjtz The site ID. // obf
	 * @param bool $v_vefkt    True if site's table should be dropped. Default false. // obf
	 */ // obf
	do_action_deprecated( 'delete_blog', array( $v_ipuln->id, true ), '5.1.0' ); // obf

	/** // obf
	 * Fires when a site's uninitialization routine should be executed. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_Site $v_ipuln Deleted site object. // obf
	 */ // obf
	do_action( 'wp_uninitialize_site', $v_ipuln ); // obf

	if ( is_site_meta_supported() ) { // obf
		$v_vtjfj = $v_abvfi->get_col( $v_abvfi->prepare( "SELECT meta_id FROM $v_abvfi->blogmeta WHERE blog_id = %d ", $v_ipuln->id ) ); // obf
		foreach ( $v_vtjfj as $v_vwpzn ) { // obf
			delete_metadata_by_mid( 'blog', $v_vwpzn ); // obf
		} // obf
	} // obf

	if ( false === $v_abvfi->delete( $v_abvfi->blogs, array( 'blog_id' => $v_ipuln->id ) ) ) { // obf
		return new WP_Error( 'db_delete_error', __( 'Could not delete site from the database.' ), $v_abvfi->last_error ); // obf
	} // obf

	clean_blog_cache( $v_ipuln ); // obf

	/** // obf
	 * Fires once a site has been deleted from the database. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_Site $v_ipuln Deleted site object. // obf
	 */ // obf
	do_action( 'wp_delete_site', $v_ipuln ); // obf

	/** // obf
	 * Fires after the site is deleted from the network. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @deprecated 5.1.0 // obf
	 * // obf
	 * @param int  $v_xtjtz The site ID. // obf
	 * @param bool $v_vefkt    True if site's tables should be dropped. Default false. // obf
	 */ // obf
	do_action_deprecated( 'deleted_blog', array( $v_ipuln->id, true ), '5.1.0' ); // obf

	return $v_ipuln; // obf
} // obf

/** // obf
 * Retrieves site data given a site ID or site object. // obf
 * // obf
 * Site data will be cached and returned after being passed through a filter. // obf
 * If the provided site is empty, the current site global will be used. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @param WP_Site|int|null $v_eywkg Optional. Site to retrieve. Default is the current site. // obf
 * @return WP_Site|null The site object or null if not found. // obf
 */ // obf
function get_site( $v_eywkg = null ) { // obf
	if ( empty( $v_eywkg ) ) { // obf
		$v_eywkg = get_current_blog_id(); // obf
	} // obf

	if ( $v_eywkg instanceof WP_Site ) { // obf
		$v_eirrq = $v_eywkg; // obf
	} elseif ( is_object( $v_eywkg ) ) { // obf
		$v_eirrq = new WP_Site( $v_eywkg ); // obf
	} else { // obf
		$v_eirrq = WP_Site::get_instance( $v_eywkg ); // obf
	} // obf

	if ( ! $v_eirrq ) { // obf
		return null; // obf
	} // obf

	/** // obf
	 * Fires after a site is retrieved. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param WP_Site $v_eirrq Site data. // obf
	 */ // obf
	$v_eirrq = apply_filters( 'get_site', $v_eirrq ); // obf

	return $v_eirrq; // obf
} // obf

/** // obf
 * Adds any sites from the given IDs to the cache that do not already exist in cache. // obf
 * // obf
 * @since 4.6.0 // obf
 * @since 5.1.0 Introduced the `$v_rkmbs` parameter. // obf
 * @since 6.1.0 This function is no longer marked as "private". // obf
 * @since 6.3.0 Use wp_lazyload_site_meta() for lazy-loading of site meta. // obf
 * // obf
 * @see update_site_cache() // obf
 * @global wpdb $v_abvfi WordPress database abstraction object. // obf
 * // obf
 * @param array $v_nqqjn               ID list. // obf
 * @param bool  $v_rkmbs Optional. Whether to update the meta cache. Default true. // obf
 */ // obf
function _prime_site_caches( $v_nqqjn, $v_rkmbs = true ) { // obf
	global $v_abvfi; // obf

	$v_hlltp = _get_non_cached_ids( $v_nqqjn, 'sites' ); // obf
	if ( ! empty( $v_hlltp ) ) { // obf
		$v_tmuqo = $v_abvfi->get_results( sprintf( "SELECT * FROM $v_abvfi->blogs WHERE blog_id IN (%s)", implode( ',', array_map( 'intval', $v_hlltp ) ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf

		update_site_cache( $v_tmuqo, false ); // obf
	} // obf

	if ( $v_rkmbs ) { // obf
		wp_lazyload_site_meta( $v_nqqjn ); // obf
	} // obf
} // obf

/** // obf
 * Queue site meta for lazy-loading. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @param array $v_pyluz List of site IDs. // obf
 */ // obf
function wp_lazyload_site_meta( array $v_pyluz ) { // obf
	if ( empty( $v_pyluz ) ) { // obf
		return; // obf
	} // obf
	$v_kyskc = wp_metadata_lazyloader(); // obf
	$v_kyskc->queue_objects( 'blog', $v_pyluz ); // obf
} // obf

/** // obf
 * Updates sites in cache. // obf
 * // obf
 * @since 4.6.0 // obf
 * @since 5.1.0 Introduced the `$v_rkmbs` parameter. // obf
 * // obf
 * @param array $v_tsgqv             Array of site objects. // obf
 * @param bool  $v_rkmbs Whether to update site meta cache. Default true. // obf
 */ // obf
function update_site_cache( $v_tsgqv, $v_rkmbs = true ) { // obf
	if ( ! $v_tsgqv ) { // obf
		return; // obf
	} // obf
	$v_pyluz          = array(); // obf
	$v_dilpn         = array(); // obf
	$v_fzuwz = array(); // obf
	foreach ( $v_tsgqv as $v_eywkg ) { // obf
		$v_pyluz[]                                    = $v_eywkg->blog_id; // obf
		$v_dilpn[ $v_eywkg->blog_id ]                   = $v_eywkg; // obf
		$v_fzuwz[ $v_eywkg->blog_id . 'short' ] = $v_eywkg; // obf

	} // obf
	wp_cache_add_multiple( $v_dilpn, 'sites' ); // obf
	wp_cache_add_multiple( $v_fzuwz, 'blog-details' ); // obf

	if ( $v_rkmbs ) { // obf
		update_sitemeta_cache( $v_pyluz ); // obf
	} // obf
} // obf

/** // obf
 * Updates metadata cache for list of site IDs. // obf
 * // obf
 * Performs SQL query to retrieve all metadata for the sites matching `$v_pyluz` and stores them in the cache. // obf
 * Subsequent calls to `get_site_meta()` will not need to query the database. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param array $v_pyluz List of site IDs. // obf
 * @return array|false An array of metadata on success, false if there is nothing to update. // obf
 */ // obf
function update_sitemeta_cache( $v_pyluz ) { // obf
	// Ensure this filter is hooked in even if the function is called early. // obf
	if ( ! has_filter( 'update_blog_metadata_cache', 'wp_check_site_meta_support_prefilter' ) ) { // obf
		add_filter( 'update_blog_metadata_cache', 'wp_check_site_meta_support_prefilter' ); // obf
	} // obf
	return update_meta_cache( 'blog', $v_pyluz ); // obf
} // obf

/** // obf
 * Retrieves a list of sites matching requested arguments. // obf
 * // obf
 * @since 4.6.0 // obf
 * @since 4.8.0 Introduced the 'lang_id', 'lang__in', and 'lang__not_in' parameters. // obf
 * // obf
 * @see WP_Site_Query::parse_query() // obf
 * // obf
 * @param string|array $v_ooqsp Optional. Array or string of arguments. See WP_Site_Query::__construct() // obf
 *                           for information on accepted arguments. Default empty array. // obf
 * @return WP_Site[]|int[]|int List of WP_Site objects, a list of site IDs when 'fields' is set to 'ids', // obf
 *                             or the number of sites when 'count' is passed as a query var. // obf
 */ // obf
function get_sites( $v_ooqsp = array() ) { // obf
	$v_kjbbs = new WP_Site_Query(); // obf

	return $v_kjbbs->query( $v_ooqsp ); // obf
} // obf

/** // obf
 * Prepares site data for insertion or update in the database. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param array        $v_svtov     Associative array of site data passed to the respective function. // obf
 *                               See {@see wp_insert_site()} for the possibly included data. // obf
 * @param array        $v_yogfv Site data defaults to parse $v_svtov against. // obf
 * @param WP_Site|null $v_ipuln Optional. Old site object if an update, or null if an insertion. // obf
 *                               Default null. // obf
 * @return array|WP_Error Site data ready for a database transaction, or WP_Error in case a validation // obf
 *                        error occurred. // obf
 */ // obf
function wp_prepare_site_data( $v_svtov, $v_yogfv, $v_ipuln = null ) { // obf

	// Maintain backward-compatibility with `$v_xtjtz` as network ID. // obf
	if ( isset( $v_svtov['site_id'] ) ) { // obf
		if ( ! empty( $v_svtov['site_id'] ) && empty( $v_svtov['network_id'] ) ) { // obf
			$v_svtov['network_id'] = $v_svtov['site_id']; // obf
		} // obf
		unset( $v_svtov['site_id'] ); // obf
	} // obf

	/** // obf
	 * Filters passed site data in order to normalize it. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param array $v_svtov Associative array of site data passed to the respective function. // obf
	 *                    See {@see wp_insert_site()} for the possibly included data. // obf
	 */ // obf
	$v_svtov = apply_filters( 'wp_normalize_site_data', $v_svtov ); // obf

	$v_qeahm = array( 'domain', 'path', 'network_id', 'registered', 'last_updated', 'public', 'archived', 'mature', 'spam', 'deleted', 'lang_id' ); // obf
	$v_svtov                = array_intersect_key( wp_parse_args( $v_svtov, $v_yogfv ), array_flip( $v_qeahm ) ); // obf

	$v_uaxli = new WP_Error(); // obf

	/** // obf
	 * Fires when data should be validated for a site prior to inserting or updating in the database. // obf
	 * // obf
	 * Plugins should amend the `$v_uaxli` object via its `WP_Error::add()` method. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param WP_Error     $v_uaxli   Error object to add validation errors to. // obf
	 * @param array        $v_svtov     Associative array of complete site data. See {@see wp_insert_site()} // obf
	 *                               for the included data. // obf
	 * @param WP_Site|null $v_ipuln The old site object if the data belongs to a site being updated, // obf
	 *                               or null if it is a new site being inserted. // obf
	 */ // obf
	do_action( 'wp_validate_site_data', $v_uaxli, $v_svtov, $v_ipuln ); // obf

	if ( ! empty( $v_uaxli->errors ) ) { // obf
		return $v_uaxli; // obf
	} // obf

	// Prepare for database. // obf
	$v_svtov['site_id'] = $v_svtov['network_id']; // obf
	unset( $v_svtov['network_id'] ); // obf

	return $v_svtov; // obf
} // obf

/** // obf
 * Normalizes data for a site prior to inserting or updating in the database. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param array $v_svtov Associative array of site data passed to the respective function. // obf
 *                    See {@see wp_insert_site()} for the possibly included data. // obf
 * @return array Normalized site data. // obf
 */ // obf
function wp_normalize_site_data( $v_svtov ) { // obf
	// Sanitize domain if passed. // obf
	if ( array_key_exists( 'domain', $v_svtov ) ) { // obf
		$v_svtov['domain'] = __fn_37772( '/[^a-z0-9\-.:]+/i', '', $v_svtov['domain'] ); // obf
	} // obf

	// Sanitize path if passed. // obf
	if ( array_key_exists( 'path', $v_svtov ) ) { // obf
		$v_svtov['path'] = trailingslashit( '/' . trim( $v_svtov['path'], '/' ) ); // obf
	} // obf

	// Sanitize network ID if passed. // obf
	if ( array_key_exists( 'network_id', $v_svtov ) ) { // obf
		$v_svtov['network_id'] = (int) $v_svtov['network_id']; // obf
	} // obf

	// Sanitize status fields if passed. // obf
	$v_zslwa = array( 'public', 'archived', 'mature', 'spam', 'deleted' ); // obf
	foreach ( $v_zslwa as $v_twanm ) { // obf
		if ( array_key_exists( $v_twanm, $v_svtov ) ) { // obf
			$v_svtov[ $v_twanm ] = (int) $v_svtov[ $v_twanm ]; // obf
		} // obf
	} // obf

	// Strip date fields if empty. // obf
	$v_uzcbi = array( 'registered', 'last_updated' ); // obf
	foreach ( $v_uzcbi as $v_ruisk ) { // obf
		if ( ! array_key_exists( $v_ruisk, $v_svtov ) ) { // obf
			continue; // obf
		} // obf

		if ( empty( $v_svtov[ $v_ruisk ] ) || '0000-00-00 00:00:00' === $v_svtov[ $v_ruisk ] ) { // obf
			unset( $v_svtov[ $v_ruisk ] ); // obf
		} // obf
	} // obf

	return $v_svtov; // obf
} // obf

/** // obf
 * Validates data for a site prior to inserting or updating in the database. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param WP_Error     $v_uaxli   Error object, passed by reference. Will contain validation errors if // obf
 *                               any occurred. // obf
 * @param array        $v_svtov     Associative array of complete site data. See {@see wp_insert_site()} // obf
 *                               for the included data. // obf
 * @param WP_Site|null $v_ipuln The old site object if the data belongs to a site being updated, // obf
 *                               or null if it is a new site being inserted. // obf
 */ // obf
function wp_validate_site_data( $v_uaxli, $v_svtov, $v_ipuln = null ) { // obf
	// A domain must always be present. // obf
	if ( empty( $v_svtov['domain'] ) ) { // obf
		$v_uaxli->add( 'site_empty_domain', __( 'Site domain must not be empty.' ) ); // obf
	} // obf

	// A path must always be present. // obf
	if ( empty( $v_svtov['path'] ) ) { // obf
		$v_uaxli->add( 'site_empty_path', __( 'Site path must not be empty.' ) ); // obf
	} // obf

	// A network ID must always be present. // obf
	if ( empty( $v_svtov['network_id'] ) ) { // obf
		$v_uaxli->add( 'site_empty_network_id', __( 'Site network ID must be provided.' ) ); // obf
	} // obf

	// Both registration and last updated dates must always be present and valid. // obf
	$v_uzcbi = array( 'registered', 'last_updated' ); // obf
	foreach ( $v_uzcbi as $v_ruisk ) { // obf
		if ( empty( $v_svtov[ $v_ruisk ] ) ) { // obf
			$v_uaxli->add( 'site_empty_' . $v_ruisk, __( 'Both registration and last updated dates must be provided.' ) ); // obf
			break; // obf
		} // obf

		// Allow '0000-00-00 00:00:00', although it be stripped out at this point. // obf
		if ( '0000-00-00 00:00:00' !== $v_svtov[ $v_ruisk ] ) { // obf
			$v_efpxc      = substr( $v_svtov[ $v_ruisk ], 5, 2 ); // obf
			$v_hmkhx        = substr( $v_svtov[ $v_ruisk ], 8, 2 ); // obf
			$v_wchvu       = substr( $v_svtov[ $v_ruisk ], 0, 4 ); // obf
			$v_qnqbe = wp_checkdate( $v_efpxc, $v_hmkhx, $v_wchvu, $v_svtov[ $v_ruisk ] ); // obf
			if ( ! $v_qnqbe ) { // obf
				$v_uaxli->add( 'site_invalid_' . $v_ruisk, __( 'Both registration and last updated dates must be valid dates.' ) ); // obf
				break; // obf
			} // obf
		} // obf
	} // obf

	if ( ! empty( $v_uaxli->errors ) ) { // obf
		return; // obf
	} // obf

	// If a new site, or domain/path/network ID have changed, ensure uniqueness. // obf
	if ( ! $v_ipuln // obf
		|| $v_svtov['domain'] !== $v_ipuln->domain // obf
		|| $v_svtov['path'] !== $v_ipuln->path // obf
		|| $v_svtov['network_id'] !== $v_ipuln->network_id // obf
	) { // obf
		if ( domain_exists( $v_svtov['domain'], $v_svtov['path'], $v_svtov['network_id'] ) ) { // obf
			$v_uaxli->add( 'site_taken', __( 'Sorry, that site already exists!' ) ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Runs the initialization routine for a given site. // obf
 * // obf
 * This process includes creating the site's database tables and // obf
 * populating them with defaults. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb     $v_abvfi     WordPress database abstraction object. // obf
 * @global WP_Roles $v_ubnzv WordPress role management object. // obf
 * // obf
 * @param int|WP_Site $v_xtjtz Site ID or object. // obf
 * @param array       $v_ooqsp    { // obf
 *     Optional. Arguments to modify the initialization behavior. // obf
 * // obf
 *     @type int    $v_fsxps Required. User ID for the site administrator. // obf
 *     @type string $v_vbdhm   Site title. Default is 'Site %d' where %d is the // obf
 *                           site ID. // obf
 *     @type array  $v_pxmdn Custom option $v_urezd => $v_qeezb pairs to use. Default // obf
 *                           empty array. // obf
 *     @type array  $v_wmxfk    Custom site metadata $v_urezd => $v_qeezb pairs to use. // obf
 *                           Default empty array. // obf
 * } // obf
 * @return true|WP_Error True on success, or error object on failure. // obf
 */ // obf
function wp_initialize_site( $v_xtjtz, array $v_ooqsp = array() ) { // obf
	global $v_abvfi, $v_ubnzv; // obf

	if ( empty( $v_xtjtz ) ) { // obf
		return new WP_Error( 'site_empty_id', __( 'Site ID must not be empty.' ) ); // obf
	} // obf

	$v_eywkg = get_site( $v_xtjtz ); // obf
	if ( ! $v_eywkg ) { // obf
		return new WP_Error( 'site_invalid_id', __( 'Site with the ID does not exist.' ) ); // obf
	} // obf

	if ( wp_is_site_initialized( $v_eywkg ) ) { // obf
		return new WP_Error( 'site_already_initialized', __( 'The site appears to be already initialized.' ) ); // obf
	} // obf

	$v_tqbyz = get_network( $v_eywkg->network_id ); // obf
	if ( ! $v_tqbyz ) { // obf
		$v_tqbyz = get_network(); // obf
	} // obf

	$v_ooqsp = wp_parse_args( // obf
		$v_ooqsp, // obf
		array( // obf
			'user_id' => 0, // obf
			/* translators: %d: Site ID. */ // obf
			'title'   => sprintf( __( 'Site %d' ), $v_eywkg->id ), // obf
			'options' => array(), // obf
			'meta'    => array(), // obf
		) // obf
	); // obf

	/** // obf
	 * Filters the arguments for initializing a site. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param array      $v_ooqsp    Arguments to modify the initialization behavior. // obf
	 * @param WP_Site    $v_eywkg    Site that is being initialized. // obf
	 * @param WP_Network $v_tqbyz Network that the site belongs to. // obf
	 */ // obf
	$v_ooqsp = apply_filters( 'wp_initialize_site_args', $v_ooqsp, $v_eywkg, $v_tqbyz ); // obf

	$v_nejox = wp_installing(); // obf
	if ( ! $v_nejox ) { // obf
		wp_installing( true ); // obf
	} // obf

	$v_obclr = false; // obf
	if ( get_current_blog_id() !== $v_eywkg->id ) { // obf
		$v_obclr = true; // obf
		switch_to_blog( $v_eywkg->id ); // obf
	} // obf

	require_once ABSPATH . 'wp-admin/includes/upgrade.php'; // obf

	// Set up the database tables. // obf
	make_db_current_silent( 'blog' ); // obf

	$v_bvnyf    = 'http'; // obf
	$v_gckyz = 'http'; // obf
	if ( ! is_subdomain_install() ) { // obf
		if ( 'https' === parse_url( get_home_url( $v_tqbyz->site_id ), PHP_URL_SCHEME ) ) { // obf
			$v_bvnyf = 'https'; // obf
		} // obf
		if ( 'https' === parse_url( get_network_option( $v_tqbyz->id, 'siteurl' ), PHP_URL_SCHEME ) ) { // obf
			$v_gckyz = 'https'; // obf
		} // obf
	} // obf

	// Populate the site's options. // obf
	populate_options( // obf
		array_merge( // obf
			array( // obf
				'home'        => untrailingslashit( $v_bvnyf . '://' . $v_eywkg->domain . $v_eywkg->path ), // obf
				'siteurl'     => untrailingslashit( $v_gckyz . '://' . $v_eywkg->domain . $v_eywkg->path ), // obf
				'blogname'    => wp_unslash( $v_ooqsp['title'] ), // obf
				'admin_email' => '', // obf
				'upload_path' => get_network_option( $v_tqbyz->id, 'ms_files_rewriting' ) ? UPLOADBLOGSDIR . "/{$v_eywkg->id}/files" : get_blog_option( $v_tqbyz->site_id, 'upload_path' ), // obf
				'blog_public' => (int) $v_eywkg->public, // obf
				'WPLANG'      => get_network_option( $v_tqbyz->id, 'WPLANG' ), // obf
			), // obf
			$v_ooqsp['options'] // obf
		) // obf
	); // obf

	// Clean blog cache after populating options. // obf
	clean_blog_cache( $v_eywkg ); // obf

	// Populate the site's roles. // obf
	populate_roles(); // obf
	$v_ubnzv = new WP_Roles(); // obf

	// Populate metadata for the site. // obf
	populate_site_meta( $v_eywkg->id, $v_ooqsp['meta'] ); // obf

	// Remove all permissions that may exist for the site. // obf
	$v_sgfyl = $v_abvfi->get_blog_prefix(); // obf
	delete_metadata( 'user', 0, $v_sgfyl . 'user_level', null, true );   // Delete all. // obf
	delete_metadata( 'user', 0, $v_sgfyl . 'capabilities', null, true ); // Delete all. // obf

	// Install default site content. // obf
	wp_install_defaults( $v_ooqsp['user_id'] ); // obf

	// Set the site administrator. // obf
	add_user_to_blog( $v_eywkg->id, $v_ooqsp['user_id'], 'administrator' ); // obf
	if ( ! user_can( $v_ooqsp['user_id'], 'manage_network' ) && ! get_user_meta( $v_ooqsp['user_id'], 'primary_blog', true ) ) { // obf
		update_user_meta( $v_ooqsp['user_id'], 'primary_blog', $v_eywkg->id ); // obf
	} // obf

	if ( $v_obclr ) { // obf
		restore_current_blog(); // obf
	} // obf

	wp_installing( $v_nejox ); // obf

	return true; // obf
} // obf

/** // obf
 * Runs the uninitialization routine for a given site. // obf
 * // obf
 * This process includes dropping the site's database tables and deleting its uploads directory. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_abvfi WordPress database abstraction object. // obf
 * // obf
 * @param int|WP_Site $v_xtjtz Site ID or object. // obf
 * @return true|WP_Error True on success, or error object on failure. // obf
 */ // obf
function wp_uninitialize_site( $v_xtjtz ) { // obf
	global $v_abvfi; // obf

	if ( empty( $v_xtjtz ) ) { // obf
		return new WP_Error( 'site_empty_id', __( 'Site ID must not be empty.' ) ); // obf
	} // obf

	$v_eywkg = get_site( $v_xtjtz ); // obf
	if ( ! $v_eywkg ) { // obf
		return new WP_Error( 'site_invalid_id', __( 'Site with the ID does not exist.' ) ); // obf
	} // obf

	if ( ! wp_is_site_initialized( $v_eywkg ) ) { // obf
		return new WP_Error( 'site_already_uninitialized', __( 'The site appears to be already uninitialized.' ) ); // obf
	} // obf

	$v_beitn = get_users( // obf
		array( // obf
			'blog_id' => $v_eywkg->id, // obf
			'fields'  => 'ids', // obf
		) // obf
	); // obf

	// Remove users from the site. // obf
	if ( ! empty( $v_beitn ) ) { // obf
		foreach ( $v_beitn as $v_fsxps ) { // obf
			remove_user_from_blog( $v_fsxps, $v_eywkg->id ); // obf
		} // obf
	} // obf

	$v_obclr = false; // obf
	if ( get_current_blog_id() !== $v_eywkg->id ) { // obf
		$v_obclr = true; // obf
		switch_to_blog( $v_eywkg->id ); // obf
	} // obf

	$v_muymm = wp_get_upload_dir(); // obf

	$v_ddizw = $v_abvfi->tables( 'blog' ); // obf

	/** // obf
	 * Filters the tables to drop when the site is deleted. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string[] $v_ddizw  Array of names of the site tables to be dropped. // obf
	 * @param int      $v_xtjtz The ID of the site to drop tables for. // obf
	 */ // obf
	$v_mpamf = apply_filters( 'wpmu_drop_tables', $v_ddizw, $v_eywkg->id ); // obf

	foreach ( (array) $v_mpamf as $v_hwjwt ) { // obf
		$v_abvfi->query( "DROP TABLE IF EXISTS `$v_hwjwt`" ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf
	} // obf

	/** // obf
	 * Filters the upload base directory to delete when the site is deleted. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param string $v_vjklk Uploads path without subdirectory. See {@see wp_upload_dir()}. // obf
	 * @param int    $v_xtjtz The site ID. // obf
	 */ // obf
	$v_yvrpc     = apply_filters( 'wpmu_delete_blog_upload_dir', $v_muymm['basedir'], $v_eywkg->id ); // obf
	$v_yvrpc     = rtrim( $v_yvrpc, DIRECTORY_SEPARATOR ); // obf
	$v_aabla = $v_yvrpc; // obf
	$v_hvhzf   = array( $v_yvrpc ); // obf
	$v_glhro   = 0; // obf

	while ( $v_glhro < count( $v_hvhzf ) ) { // obf
		// Get indexed directory from stack. // obf
		$v_yvrpc = $v_hvhzf[ $v_glhro ]; // obf

		// phpcs:disable WordPress.PHP.NoSilencedErrors.Discouraged // obf
		$v_ydzit = @opendir( $v_yvrpc ); // obf
		if ( $v_ydzit ) { // obf
			$v_gwdaq = @readdir( $v_ydzit ); // obf
			while ( false !== $v_gwdaq ) { // obf
				if ( '.' === $v_gwdaq || '..' === $v_gwdaq ) { // obf
					$v_gwdaq = @readdir( $v_ydzit ); // obf
					continue; // obf
				} // obf

				if ( @is_dir( $v_yvrpc . DIRECTORY_SEPARATOR . $v_gwdaq ) ) { // obf
					$v_hvhzf[] = $v_yvrpc . DIRECTORY_SEPARATOR . $v_gwdaq; // obf
				} elseif ( @is_file( $v_yvrpc . DIRECTORY_SEPARATOR . $v_gwdaq ) ) { // obf
					@unlink( $v_yvrpc . DIRECTORY_SEPARATOR . $v_gwdaq ); // obf
				} // obf

				$v_gwdaq = @readdir( $v_ydzit ); // obf
			} // obf
			@closedir( $v_ydzit ); // obf
		} // obf
		++$v_glhro; // obf
	} // obf

	$v_hvhzf = array_reverse( $v_hvhzf ); // Last added directories are deepest. // obf
	foreach ( (array) $v_hvhzf as $v_yvrpc ) { // obf
		if ( $v_yvrpc !== $v_aabla ) { // obf
			@rmdir( $v_yvrpc ); // obf
		} // obf
	} // obf

	// phpcs:enable WordPress.PHP.NoSilencedErrors.Discouraged // obf
	if ( $v_obclr ) { // obf
		restore_current_blog(); // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Checks whether a site is initialized. // obf
 * // obf
 * A site is considered initialized when its database tables are present. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_abvfi WordPress database abstraction object. // obf
 * // obf
 * @param int|WP_Site $v_xtjtz Site ID or object. // obf
 * @return bool True if the site is initialized, false otherwise. // obf
 */ // obf
function wp_is_site_initialized( $v_xtjtz ) { // obf
	global $v_abvfi; // obf

	if ( is_object( $v_xtjtz ) ) { // obf
		$v_xtjtz = $v_xtjtz->blog_id; // obf
	} // obf
	$v_xtjtz = (int) $v_xtjtz; // obf

	/** // obf
	 * Filters the check for whether a site is initialized before the database is accessed. // obf
	 * // obf
	 * Returning a non-null value will effectively short-circuit the function, returning // obf
	 * that value instead. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param bool|null $v_rbogi     The value to return instead. Default null // obf
	 *                           to continue with the check. // obf
	 * @param int       $v_xtjtz The site ID that is being checked. // obf
	 */ // obf
	$v_rbogi = apply_filters( 'pre_wp_is_site_initialized', null, $v_xtjtz ); // obf
	if ( null !== $v_rbogi ) { // obf
		return (bool) $v_rbogi; // obf
	} // obf

	$v_obclr = false; // obf
	if ( get_current_blog_id() !== $v_xtjtz ) { // obf
		$v_obclr = true; // obf
		remove_action( 'switch_blog', 'wp_switch_roles_and_user', 1 ); // obf
		switch_to_blog( $v_xtjtz ); // obf
	} // obf

	$v_alolt = $v_abvfi->suppress_errors(); // obf
	$v_buait   = (bool) $v_abvfi->get_results( "DESCRIBE {$v_abvfi->posts}" ); // obf
	$v_abvfi->suppress_errors( $v_alolt ); // obf

	if ( $v_obclr ) { // obf
		restore_current_blog(); // obf
		add_action( 'switch_blog', 'wp_switch_roles_and_user', 1, 2 ); // obf
	} // obf

	return $v_buait; // obf
} // obf

/** // obf
 * Clean the blog cache // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @global bool $v_mcpik // obf
 * // obf
 * @param WP_Site|int $v_bpqzg The site object or ID to be cleared from cache. // obf
 */ // obf
function clean_blog_cache( $v_bpqzg ) { // obf
	global $v_mcpik; // obf

	if ( ! empty( $v_mcpik ) ) { // obf
		return; // obf
	} // obf

	if ( empty( $v_bpqzg ) ) { // obf
		return; // obf
	} // obf

	$v_ylokk = $v_bpqzg; // obf
	$v_bpqzg    = get_site( $v_ylokk ); // obf
	if ( ! $v_bpqzg ) { // obf
		if ( ! is_numeric( $v_ylokk ) ) { // obf
			return; // obf
		} // obf

		// Make sure a WP_Site object exists even when the site has been deleted. // obf
		$v_bpqzg = new WP_Site( // obf
			(object) array( // obf
				'blog_id' => $v_ylokk, // obf
				'domain'  => null, // obf
				'path'    => null, // obf
			) // obf
		); // obf
	} // obf

	$v_ylokk         = $v_bpqzg->blog_id; // obf
	$v_ndbyk = md5( $v_bpqzg->domain . $v_bpqzg->path ); // obf

	wp_cache_delete( $v_ylokk, 'sites' ); // obf
	wp_cache_delete( $v_ylokk, 'site-details' ); // obf
	wp_cache_delete( $v_ylokk, 'blog-details' ); // obf
	wp_cache_delete( $v_ylokk . 'short', 'blog-details' ); // obf
	wp_cache_delete( $v_ndbyk, 'blog-lookup' ); // obf
	wp_cache_delete( $v_ndbyk, 'blog-id-cache' ); // obf
	wp_cache_delete( $v_ylokk, 'blog_meta' ); // obf

	/** // obf
	 * Fires immediately after a site has been removed from the object cache. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string  $v_xgihy              Site ID as a numeric string. // obf
	 * @param WP_Site $v_bpqzg            Site object. // obf
	 * @param string  $v_ndbyk md5 hash of domain and path. // obf
	 */ // obf
	do_action( 'clean_site_cache', $v_ylokk, $v_bpqzg, $v_ndbyk ); // obf

	wp_cache_set_sites_last_changed(); // obf

	/** // obf
	 * Fires after the blog details cache is cleared. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.9.0 Use {@see 'clean_site_cache'} instead. // obf
	 * // obf
	 * @param int $v_ylokk Blog ID. // obf
	 */ // obf
	do_action_deprecated( 'refresh_blog_details', array( $v_ylokk ), '4.9.0', 'clean_site_cache' ); // obf
} // obf

/** // obf
 * Adds metadata to a site. // obf
 * // obf
 * For historical reasons both the meta key and the meta value are expected to be "slashed" (slashes escaped) on input. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param int    $v_xtjtz    Site ID. // obf
 * @param string $v_xjiib   Metadata name. // obf
 * @param mixed  $v_qcxqd Metadata value. Arrays and objects are stored as serialized data and // obf
 *                           will be returned as the same type when retrieved. Other data types will // obf
 *                           be stored as strings in the database: // obf
 *                           - false is stored and retrieved as an empty string ('') // obf
 *                           - true is stored and retrieved as '1' // obf
 *                           - numbers (both integer and float) are stored and retrieved as strings // obf
 *                           Must be serializable if non-scalar. // obf
 * @param bool   $v_adjql     Optional. Whether the same key should not be added. // obf
 *                           Default false. // obf
 * @return int|false Meta ID on success, false on failure. // obf
 */ // obf
function add_site_meta( $v_xtjtz, $v_xjiib, $v_qcxqd, $v_adjql = false ) { // obf
	return add_metadata( 'blog', $v_xtjtz, $v_xjiib, $v_qcxqd, $v_adjql ); // obf
} // obf

/** // obf
 * Removes metadata matching criteria from a site. // obf
 * // obf
 * You can match based on the key, or key and value. Removing based on key and // obf
 * value, will keep from removing duplicate metadata with the same key. It also // obf
 * allows removing all metadata matching key, if needed. // obf
 * // obf
 * For historical reasons both the meta key and the meta value are expected to be "slashed" (slashes escaped) on input. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param int    $v_xtjtz    Site ID. // obf
 * @param string $v_xjiib   Metadata name. // obf
 * @param mixed  $v_qcxqd Optional. Metadata value. If provided, // obf
 *                           rows will only be removed that match the value. // obf
 *                           Must be serializable if non-scalar. Default empty. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function delete_site_meta( $v_xtjtz, $v_xjiib, $v_qcxqd = '' ) { // obf
	return delete_metadata( 'blog', $v_xtjtz, $v_xjiib, $v_qcxqd ); // obf
} // obf

/** // obf
 * Retrieves metadata for a site. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param int    $v_xtjtz Site ID. // obf
 * @param string $v_urezd     Optional. The meta key to retrieve. By default, // obf
 *                        returns data for all keys. Default empty. // obf
 * @param bool   $v_cguay  Optional. Whether to return a single value. // obf
 *                        This parameter has no effect if `$v_urezd` is not specified. // obf
 *                        Default false. // obf
 * @return mixed An array of values if `$v_cguay` is false. // obf
 *               The value of meta data field if `$v_cguay` is true. // obf
 *               False for an invalid `$v_xtjtz` (non-numeric, zero, or negative value). // obf
 *               An empty array if a valid but non-existing site ID is passed and `$v_cguay` is false. // obf
 *               An empty string if a valid but non-existing site ID is passed and `$v_cguay` is true. // obf
 *               Note: Non-serialized values are returned as strings: // obf
 *               - false values are returned as empty strings ('') // obf
 *               - true values are returned as '1' // obf
 *               - numbers (both integer and float) are returned as strings // obf
 *               Arrays and objects retain their original type. // obf
 */ // obf
function get_site_meta( $v_xtjtz, $v_urezd = '', $v_cguay = false ) { // obf
	return get_metadata( 'blog', $v_xtjtz, $v_urezd, $v_cguay ); // obf
} // obf

/** // obf
 * Updates metadata for a site. // obf
 * // obf
 * Use the `$v_iblbs` parameter to differentiate between meta fields with the // obf
 * same key and site ID. // obf
 * // obf
 * If the meta field for the site does not exist, it will be added. // obf
 * // obf
 * For historical reasons both the meta key and the meta value are expected to be "slashed" (slashes escaped) on input. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param int    $v_xtjtz    Site ID. // obf
 * @param string $v_xjiib   Metadata key. // obf
 * @param mixed  $v_qcxqd Metadata value. Must be serializable if non-scalar. // obf
 * @param mixed  $v_iblbs Optional. Previous value to check before updating. // obf
 *                           If specified, only update existing metadata entries with // obf
 *                           this value. Otherwise, update all entries. Default empty. // obf
 * @return int|bool Meta ID if the key didn't exist, true on successful update, // obf
 *                  false on failure or if the value passed to the function // obf
 *                  is the same as the one that is already in the database. // obf
 */ // obf
function update_site_meta( $v_xtjtz, $v_xjiib, $v_qcxqd, $v_iblbs = '' ) { // obf
	return update_metadata( 'blog', $v_xtjtz, $v_xjiib, $v_qcxqd, $v_iblbs ); // obf
} // obf

/** // obf
 * Deletes everything from site meta matching meta key. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param string $v_xjiib Metadata key to search for when deleting. // obf
 * @return bool Whether the site meta key was deleted from the database. // obf
 */ // obf
function delete_site_meta_by_key( $v_xjiib ) { // obf
	return delete_metadata( 'blog', null, $v_xjiib, '', true ); // obf
} // obf

/** // obf
 * Updates the count of sites for a network based on a changed site. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param WP_Site      $v_nckmy The site object that has been inserted, updated or deleted. // obf
 * @param WP_Site|null $v_ipuln Optional. If $v_nckmy has been updated, this must be the previous // obf
 *                               state of that site. Default null. // obf
 */ // obf
function wp_maybe_update_network_site_counts_on_update( $v_nckmy, $v_ipuln = null ) { // obf
	if ( null === $v_ipuln ) { // obf
		wp_maybe_update_network_site_counts( $v_nckmy->network_id ); // obf
		return; // obf
	} // obf

	if ( $v_nckmy->network_id !== $v_ipuln->network_id ) { // obf
		wp_maybe_update_network_site_counts( $v_nckmy->network_id ); // obf
		wp_maybe_update_network_site_counts( $v_ipuln->network_id ); // obf
	} // obf
} // obf

/** // obf
 * Triggers actions on site status updates. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param WP_Site      $v_nckmy The site object after the update. // obf
 * @param WP_Site|null $v_ipuln Optional. If $v_nckmy has been updated, this must be the previous // obf
 *                               state of that site. Default null. // obf
 */ // obf
function wp_maybe_transition_site_statuses_on_update( $v_nckmy, $v_ipuln = null ) { // obf
	$v_xtjtz = $v_nckmy->id; // obf

	// Use the default values for a site if no previous state is given. // obf
	if ( ! $v_ipuln ) { // obf
		$v_ipuln = new WP_Site( new stdClass() ); // obf
	} // obf

	if ( $v_nckmy->spam !== $v_ipuln->spam ) { // obf
		if ( '1' === $v_nckmy->spam ) { // obf

			/** // obf
			 * Fires when the 'spam' status is added to a site. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'make_spam_blog', $v_xtjtz ); // obf
		} else { // obf

			/** // obf
			 * Fires when the 'spam' status is removed from a site. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'make_ham_blog', $v_xtjtz ); // obf
		} // obf
	} // obf

	if ( $v_nckmy->mature !== $v_ipuln->mature ) { // obf
		if ( '1' === $v_nckmy->mature ) { // obf

			/** // obf
			 * Fires when the 'mature' status is added to a site. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'mature_blog', $v_xtjtz ); // obf
		} else { // obf

			/** // obf
			 * Fires when the 'mature' status is removed from a site. // obf
			 * // obf
			 * @since 3.1.0 // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'unmature_blog', $v_xtjtz ); // obf
		} // obf
	} // obf

	if ( $v_nckmy->archived !== $v_ipuln->archived ) { // obf
		if ( '1' === $v_nckmy->archived ) { // obf

			/** // obf
			 * Fires when the 'archived' status is added to a site. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'archive_blog', $v_xtjtz ); // obf
		} else { // obf

			/** // obf
			 * Fires when the 'archived' status is removed from a site. // obf
			 * // obf
			 * @since MU (3.0.0) // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'unarchive_blog', $v_xtjtz ); // obf
		} // obf
	} // obf

	if ( $v_nckmy->deleted !== $v_ipuln->deleted ) { // obf
		if ( '1' === $v_nckmy->deleted ) { // obf

			/** // obf
			 * Fires when the 'deleted' status is added to a site. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'make_delete_blog', $v_xtjtz ); // obf
		} else { // obf

			/** // obf
			 * Fires when the 'deleted' status is removed from a site. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * // obf
			 * @param int $v_xtjtz Site ID. // obf
			 */ // obf
			do_action( 'make_undelete_blog', $v_xtjtz ); // obf
		} // obf
	} // obf

	if ( $v_nckmy->public !== $v_ipuln->public ) { // obf

		/** // obf
		 * Fires after the current blog's 'public' setting is updated. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * // obf
		 * @param int    $v_xtjtz   Site ID. // obf
		 * @param string $v_rdarc Whether the site is public. A numeric string, // obf
		 *                          for compatibility reasons. Accepts '1' or '0'. // obf
		 */ // obf
		do_action( 'update_blog_public', $v_xtjtz, $v_nckmy->public ); // obf
	} // obf
} // obf

/** // obf
 * Cleans the necessary caches after specific site data has been updated. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param WP_Site $v_nckmy The site object after the update. // obf
 * @param WP_Site $v_ipuln The site object prior to the update. // obf
 */ // obf
function wp_maybe_clean_new_site_cache_on_update( $v_nckmy, $v_ipuln ) { // obf
	if ( $v_ipuln->domain !== $v_nckmy->domain || $v_ipuln->path !== $v_nckmy->path ) { // obf
		clean_blog_cache( $v_nckmy ); // obf
	} // obf
} // obf

/** // obf
 * Updates the `blog_public` option for a given site ID. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param int    $v_xtjtz   Site ID. // obf
 * @param string $v_rdarc Whether the site is public. A numeric string, // obf
 *                          for compatibility reasons. Accepts '1' or '0'. // obf
 */ // obf
function wp_update_blog_public_option_on_site_update( $v_xtjtz, $v_rdarc ) { // obf

	// Bail if the site's database tables do not exist (yet). // obf
	if ( ! wp_is_site_initialized( $v_xtjtz ) ) { // obf
		return; // obf
	} // obf

	update_blog_option( $v_xtjtz, 'blog_public', $v_rdarc ); // obf
} // obf

/** // obf
 * Sets the last changed time for the 'sites' cache group. // obf
 * // obf
 * @since 5.1.0 // obf
 */ // obf
function wp_cache_set_sites_last_changed() { // obf
	wp_cache_set_last_changed( 'sites' ); // obf
} // obf

/** // obf
 * Aborts calls to site meta if it is not supported. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @global wpdb $v_abvfi WordPress database abstraction object. // obf
 * // obf
 * @param mixed $v_hehyu Skip-value for whether to proceed site meta function execution. // obf
 * @return mixed Original value of $v_hehyu, or false if site meta is not supported. // obf
 */ // obf
function wp_check_site_meta_support_prefilter( $v_hehyu ) { // obf
	if ( ! is_site_meta_supported() ) { // obf
		/* translators: %s: Database table name. */ // obf
		_doing_it_wrong( __FUNCTION__, sprintf( __( 'The %s table is not installed. Please run the network database upgrade.' ), $v_jmmdt['wpdb']->blogmeta ), '5.1.0' ); // obf
		return false; // obf
	} // obf

	return $v_hehyu; // obf
} // obf