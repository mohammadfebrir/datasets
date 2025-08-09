
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * Site/blog functions that work with the blogs table and related data. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since MU (3.0.0) // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

require_once ABSPATH . WPINC . '/ms-site.php'; // obf
require_once ABSPATH . WPINC . '/ms-network.php'; // obf

/** // obf
 * Updates the last_updated field for the current site. // obf
 * // obf
 * @since MU (3.0.0) // obf
 */ // obf
function wpmu_update_blogs_date() { // obf
	$v_ewqty = get_current_blog_id(); // obf

	update_blog_details( $v_ewqty, array( 'last_updated' => current_time( 'mysql', true ) ) ); // obf
	/** // obf
	 * Fires after the blog details are updated. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * // obf
	 * @param int $v_zykzu Site ID. // obf
	 */ // obf
	do_action( 'wpmu_blog_updated', $v_ewqty ); // obf
} // obf

/** // obf
 * Gets a full site URL, given a site ID. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_zykzu Site ID. // obf
 * @return string Full site URL if found. Empty string if not. // obf
 */ // obf
function get_blogaddress_by_id( $v_zykzu ) { // obf
	$v_cyrlq = get_site( (int) $v_zykzu ); // obf

	if ( empty( $v_cyrlq ) ) { // obf
		return ''; // obf
	} // obf

	$v_sqfsu = parse_url( $v_cyrlq->home, PHP_URL_SCHEME ); // obf
	$v_sqfsu = empty( $v_sqfsu ) ? 'http' : $v_sqfsu; // obf

	return esc_url( $v_sqfsu . '://' . $v_cyrlq->domain . $v_cyrlq->path ); // obf
} // obf

/** // obf
 * Gets a full site URL, given a site name. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param string $v_fvwjc Name of the subdomain or directory. // obf
 * @return string // obf
 */ // obf
function get_blogaddress_by_name( $v_fvwjc ) { // obf
	if ( is_subdomain_install() ) { // obf
		if ( 'main' === $v_fvwjc ) { // obf
			$v_fvwjc = 'www'; // obf
		} // obf
		$v_pwaly = rtrim( network_home_url(), '/' ); // obf
		if ( ! empty( $v_fvwjc ) ) { // obf
			$v_pwaly = __fn_37772( '|^([^\.]+://)|', '${1}' . $v_fvwjc . '.', $v_pwaly ); // obf
		} // obf
	} else { // obf
		$v_pwaly = network_home_url( $v_fvwjc ); // obf
	} // obf
	return esc_url( $v_pwaly . '/' ); // obf
} // obf

/** // obf
 * Retrieves a site's ID given its (subdomain or directory) slug. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * @since 4.7.0 Converted to use `get_sites()`. // obf
 * // obf
 * @param string $v_nycuz A site's slug. // obf
 * @return int|null The site ID, or null if no site is found for the given slug. // obf
 */ // obf
function get_id_from_blogname( $v_nycuz ) { // obf
	$v_jxdkz = get_network(); // obf
	$v_nycuz            = trim( $v_nycuz, '/' ); // obf

	if ( is_subdomain_install() ) { // obf
		$v_wtqhw = $v_nycuz . '.' . __fn_37772( '|^www\.|', '', $v_jxdkz->domain ); // obf
		$v_ylncc   = $v_jxdkz->path; // obf
	} else { // obf
		$v_wtqhw = $v_jxdkz->domain; // obf
		$v_ylncc   = $v_jxdkz->path . $v_nycuz . '/'; // obf
	} // obf

	$v_dljji = get_sites( // obf
		array( // obf
			'number'                 => 1, // obf
			'fields'                 => 'ids', // obf
			'domain'                 => $v_wtqhw, // obf
			'path'                   => $v_ylncc, // obf
			'update_site_meta_cache' => false, // obf
		) // obf
	); // obf

	if ( empty( $v_dljji ) ) { // obf
		return null; // obf
	} // obf

	return array_shift( $v_dljji ); // obf
} // obf

/** // obf
 * Retrieves the details for a blog from the blogs table and blog options. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_tbgqe WordPress database abstraction object. // obf
 * // obf
 * @param int|string|array $v_fxeiw  Optional. A blog ID, a blog slug, or an array of fields to query against. // obf
 *                                  Defaults to the current blog ID. // obf
 * @param bool             $v_xbnoh Whether to retrieve all details or only the details in the blogs table. // obf
 *                                  Default is true. // obf
 * @return WP_Site|false Blog details on success. False on failure. // obf
 */ // obf
function get_blog_details( $v_fxeiw = null, $v_xbnoh = true ) { // obf
	global $v_tbgqe; // obf

	if ( is_array( $v_fxeiw ) ) { // obf
		if ( isset( $v_fxeiw['blog_id'] ) ) { // obf
			$v_zykzu = $v_fxeiw['blog_id']; // obf
		} elseif ( isset( $v_fxeiw['domain'] ) && isset( $v_fxeiw['path'] ) ) { // obf
			$v_wjzge  = md5( $v_fxeiw['domain'] . $v_fxeiw['path'] ); // obf
			$v_bkprf = wp_cache_get( $v_wjzge, 'blog-lookup' ); // obf
			if ( false !== $v_bkprf ) { // obf
				return $v_bkprf; // obf
			} // obf
			if ( str_starts_with( $v_fxeiw['domain'], 'www.' ) ) { // obf
				$v_yvdvo = substr( $v_fxeiw['domain'], 4 ); // obf
				$v_bkprf  = $v_tbgqe->get_row( $v_tbgqe->prepare( "SELECT * FROM $v_tbgqe->blogs WHERE domain IN (%s,%s) AND path = %s ORDER BY CHAR_LENGTH(domain) DESC", $v_yvdvo, $v_fxeiw['domain'], $v_fxeiw['path'] ) ); // obf
			} else { // obf
				$v_bkprf = $v_tbgqe->get_row( $v_tbgqe->prepare( "SELECT * FROM $v_tbgqe->blogs WHERE domain = %s AND path = %s", $v_fxeiw['domain'], $v_fxeiw['path'] ) ); // obf
			} // obf
			if ( $v_bkprf ) { // obf
				wp_cache_set( $v_bkprf->blog_id . 'short', $v_bkprf, 'blog-details' ); // obf
				$v_zykzu = $v_bkprf->blog_id; // obf
			} else { // obf
				return false; // obf
			} // obf
		} elseif ( isset( $v_fxeiw['domain'] ) && is_subdomain_install() ) { // obf
			$v_wjzge  = md5( $v_fxeiw['domain'] ); // obf
			$v_bkprf = wp_cache_get( $v_wjzge, 'blog-lookup' ); // obf
			if ( false !== $v_bkprf ) { // obf
				return $v_bkprf; // obf
			} // obf
			if ( str_starts_with( $v_fxeiw['domain'], 'www.' ) ) { // obf
				$v_yvdvo = substr( $v_fxeiw['domain'], 4 ); // obf
				$v_bkprf  = $v_tbgqe->get_row( $v_tbgqe->prepare( "SELECT * FROM $v_tbgqe->blogs WHERE domain IN (%s,%s) ORDER BY CHAR_LENGTH(domain) DESC", $v_yvdvo, $v_fxeiw['domain'] ) ); // obf
			} else { // obf
				$v_bkprf = $v_tbgqe->get_row( $v_tbgqe->prepare( "SELECT * FROM $v_tbgqe->blogs WHERE domain = %s", $v_fxeiw['domain'] ) ); // obf
			} // obf
			if ( $v_bkprf ) { // obf
				wp_cache_set( $v_bkprf->blog_id . 'short', $v_bkprf, 'blog-details' ); // obf
				$v_zykzu = $v_bkprf->blog_id; // obf
			} else { // obf
				return false; // obf
			} // obf
		} else { // obf
			return false; // obf
		} // obf
	} else { // obf
		if ( ! $v_fxeiw ) { // obf
			$v_zykzu = get_current_blog_id(); // obf
		} elseif ( ! is_numeric( $v_fxeiw ) ) { // obf
			$v_zykzu = get_id_from_blogname( $v_fxeiw ); // obf
		} else { // obf
			$v_zykzu = $v_fxeiw; // obf
		} // obf
	} // obf

	$v_zykzu = (int) $v_zykzu; // obf

	$v_ixift     = $v_xbnoh ? '' : 'short'; // obf
	$v_eifbg = wp_cache_get( $v_zykzu . $v_ixift, 'blog-details' ); // obf

	if ( $v_eifbg ) { // obf
		if ( ! is_object( $v_eifbg ) ) { // obf
			if ( -1 === $v_eifbg ) { // obf
				return false; // obf
			} else { // obf
				// Clear old pre-serialized objects. Cache clients do better with that. // obf
				wp_cache_delete( $v_zykzu . $v_ixift, 'blog-details' ); // obf
				unset( $v_eifbg ); // obf
			} // obf
		} else { // obf
			return $v_eifbg; // obf
		} // obf
	} // obf

	// Try the other cache. // obf
	if ( $v_xbnoh ) { // obf
		$v_eifbg = wp_cache_get( $v_zykzu . 'short', 'blog-details' ); // obf
	} else { // obf
		$v_eifbg = wp_cache_get( $v_zykzu, 'blog-details' ); // obf
		// If short was requested and full cache is set, we can return. // obf
		if ( $v_eifbg ) { // obf
			if ( ! is_object( $v_eifbg ) ) { // obf
				if ( -1 === $v_eifbg ) { // obf
					return false; // obf
				} else { // obf
					// Clear old pre-serialized objects. Cache clients do better with that. // obf
					wp_cache_delete( $v_zykzu, 'blog-details' ); // obf
					unset( $v_eifbg ); // obf
				} // obf
			} else { // obf
				return $v_eifbg; // obf
			} // obf
		} // obf
	} // obf

	if ( empty( $v_eifbg ) ) { // obf
		$v_eifbg = WP_Site::get_instance( $v_zykzu ); // obf
		if ( ! $v_eifbg ) { // obf
			// Set the full cache. // obf
			wp_cache_set( $v_zykzu, -1, 'blog-details' ); // obf
			return false; // obf
		} // obf
	} // obf

	if ( ! $v_eifbg instanceof WP_Site ) { // obf
		$v_eifbg = new WP_Site( $v_eifbg ); // obf
	} // obf

	if ( ! $v_xbnoh ) { // obf
		wp_cache_set( $v_zykzu . $v_ixift, $v_eifbg, 'blog-details' ); // obf
		return $v_eifbg; // obf
	} // obf

	$v_jankq = false; // obf

	if ( get_current_blog_id() !== $v_zykzu ) { // obf
		switch_to_blog( $v_zykzu ); // obf
		$v_jankq = true; // obf
	} // obf

	$v_eifbg->blogname   = get_option( 'blogname' ); // obf
	$v_eifbg->siteurl    = get_option( 'siteurl' ); // obf
	$v_eifbg->post_count = get_option( 'post_count' ); // obf
	$v_eifbg->home       = get_option( 'home' ); // obf

	if ( $v_jankq ) { // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Filters a blog's details. // obf
	 * // obf
	 * @since MU (3.0.0) // obf
	 * @deprecated 4.7.0 Use {@see 'site_details'} instead. // obf
	 * // obf
	 * @param WP_Site $v_eifbg The blog details. // obf
	 */ // obf
	$v_eifbg = apply_filters_deprecated( 'blog_details', array( $v_eifbg ), '4.7.0', 'site_details' ); // obf

	wp_cache_set( $v_zykzu . $v_ixift, $v_eifbg, 'blog-details' ); // obf

	$v_wjzge = md5( $v_eifbg->domain . $v_eifbg->path ); // obf
	wp_cache_set( $v_wjzge, $v_eifbg, 'blog-lookup' ); // obf

	return $v_eifbg; // obf
} // obf

/** // obf
 * Clears the blog details cache. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_zykzu Optional. Blog ID. Defaults to current blog. // obf
 */ // obf
function refresh_blog_details( $v_zykzu = 0 ) { // obf
	$v_zykzu = (int) $v_zykzu; // obf
	if ( ! $v_zykzu ) { // obf
		$v_zykzu = get_current_blog_id(); // obf
	} // obf

	clean_blog_cache( $v_zykzu ); // obf
} // obf

/** // obf
 * Updates the details for a blog and the blogs table for a given blog ID. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int   $v_zykzu Blog ID. // obf
 * @param array $v_eifbg Array of details keyed by blogs table field names. // obf
 * @return bool True if update succeeds, false otherwise. // obf
 */ // obf
function update_blog_details( $v_zykzu, $v_eifbg = array() ) { // obf
	if ( empty( $v_eifbg ) ) { // obf
		return false; // obf
	} // obf

	if ( is_object( $v_eifbg ) ) { // obf
		$v_eifbg = get_object_vars( $v_eifbg ); // obf
	} // obf

	$v_cthvw = wp_update_site( $v_zykzu, $v_eifbg ); // obf

	if ( is_wp_error( $v_cthvw ) ) { // obf
		return false; // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Cleans the site details cache for a site. // obf
 * // obf
 * @since 4.7.4 // obf
 * // obf
 * @param int $v_ewqty Optional. Site ID. Default is the current site ID. // obf
 */ // obf
function clean_site_details_cache( $v_ewqty = 0 ) { // obf
	$v_ewqty = (int) $v_ewqty; // obf
	if ( ! $v_ewqty ) { // obf
		$v_ewqty = get_current_blog_id(); // obf
	} // obf

	wp_cache_delete( $v_ewqty, 'site-details' ); // obf
	wp_cache_delete( $v_ewqty, 'blog-details' ); // obf
} // obf

/** // obf
 * Retrieves option value for a given blog id based on name of option. // obf
 * // obf
 * If the option does not exist or does not have a value, then the return value // obf
 * will be false. This is useful to check whether you need to install an option // obf
 * and is commonly used during installation of plugin options and to test // obf
 * whether upgrading is required. // obf
 * // obf
 * If the option was serialized then it will be unserialized when it is returned. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_ouxye            A blog ID. Can be null to refer to the current blog. // obf
 * @param string $v_hbzka        Name of option to retrieve. Expected to not be SQL-escaped. // obf
 * @param mixed  $v_rnyak Optional. Default value to return if the option does not exist. // obf
 * @return mixed Value set for the option. // obf
 */ // obf
function get_blog_option( $v_ouxye, $v_hbzka, $v_rnyak = false ) { // obf
	$v_ouxye = (int) $v_ouxye; // obf

	if ( empty( $v_ouxye ) ) { // obf
		$v_ouxye = get_current_blog_id(); // obf
	} // obf

	if ( get_current_blog_id() === $v_ouxye ) { // obf
		return get_option( $v_hbzka, $v_rnyak ); // obf
	} // obf

	switch_to_blog( $v_ouxye ); // obf
	$v_uovof = get_option( $v_hbzka, $v_rnyak ); // obf
	restore_current_blog(); // obf

	/** // obf
	 * Filters a blog option value. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_hbzka`, refers to the blog option name. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string  $v_uovof The option value. // obf
	 * @param int     $v_ouxye    Blog ID. // obf
	 */ // obf
	return apply_filters( "blog_option_{$v_hbzka}", $v_uovof, $v_ouxye ); // obf
} // obf

/** // obf
 * Adds a new option for a given blog ID. // obf
 * // obf
 * You do not need to serialize values. If the value needs to be serialized, then // obf
 * it will be serialized before it is inserted into the database. Remember, // obf
 * resources can not be serialized or added as an option. // obf
 * // obf
 * You can create options without values and then update the values later. // obf
 * Existing options will not be updated and checks are performed to ensure that you // obf
 * aren't adding a protected WordPress option. Care should be taken to not name // obf
 * options the same as the ones which are protected. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_ouxye     A blog ID. Can be null to refer to the current blog. // obf
 * @param string $v_hbzka Name of option to add. Expected to not be SQL-escaped. // obf
 * @param mixed  $v_uovof  Option value, can be anything. Expected to not be SQL-escaped. // obf
 * @return bool True if the option was added, false otherwise. // obf
 */ // obf
function add_blog_option( $v_ouxye, $v_hbzka, $v_uovof ) { // obf
	$v_ouxye = (int) $v_ouxye; // obf

	if ( empty( $v_ouxye ) ) { // obf
		$v_ouxye = get_current_blog_id(); // obf
	} // obf

	if ( get_current_blog_id() === $v_ouxye ) { // obf
		return add_option( $v_hbzka, $v_uovof ); // obf
	} // obf

	switch_to_blog( $v_ouxye ); // obf
	$v_ycuqr = add_option( $v_hbzka, $v_uovof ); // obf
	restore_current_blog(); // obf

	return $v_ycuqr; // obf
} // obf

/** // obf
 * Removes an option by name for a given blog ID. Prevents removal of protected WordPress options. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_ouxye     A blog ID. Can be null to refer to the current blog. // obf
 * @param string $v_hbzka Name of option to remove. Expected to not be SQL-escaped. // obf
 * @return bool True if the option was deleted, false otherwise. // obf
 */ // obf
function delete_blog_option( $v_ouxye, $v_hbzka ) { // obf
	$v_ouxye = (int) $v_ouxye; // obf

	if ( empty( $v_ouxye ) ) { // obf
		$v_ouxye = get_current_blog_id(); // obf
	} // obf

	if ( get_current_blog_id() === $v_ouxye ) { // obf
		return delete_option( $v_hbzka ); // obf
	} // obf

	switch_to_blog( $v_ouxye ); // obf
	$v_ycuqr = delete_option( $v_hbzka ); // obf
	restore_current_blog(); // obf

	return $v_ycuqr; // obf
} // obf

/** // obf
 * Updates an option for a particular blog. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_ouxye         The blog ID. // obf
 * @param string $v_hbzka     The option key. // obf
 * @param mixed  $v_uovof      The option value. // obf
 * @param mixed  $v_ezprg Not used. // obf
 * @return bool True if the value was updated, false otherwise. // obf
 */ // obf
function update_blog_option( $v_ouxye, $v_hbzka, $v_uovof, $v_ezprg = null ) { // obf
	$v_ouxye = (int) $v_ouxye; // obf

	if ( null !== $v_ezprg ) { // obf
		_deprecated_argument( __FUNCTION__, '3.1.0' ); // obf
	} // obf

	if ( get_current_blog_id() === $v_ouxye ) { // obf
		return update_option( $v_hbzka, $v_uovof ); // obf
	} // obf

	switch_to_blog( $v_ouxye ); // obf
	$v_ycuqr = update_option( $v_hbzka, $v_uovof ); // obf
	restore_current_blog(); // obf

	return $v_ycuqr; // obf
} // obf

/** // obf
 * Switches the current blog. // obf
 * // obf
 * This function is useful if you need to pull posts, or other information, // obf
 * from other blogs. You can switch back afterwards using restore_current_blog(). // obf
 * // obf
 * PHP code loaded with the originally requested site, such as code from a plugin or theme, does not switch. See #14941. // obf
 * // obf
 * @see restore_current_blog() // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb            $v_tbgqe               WordPress database abstraction object. // obf
 * @global int             $v_zykzu // obf
 * @global array           $v_tvxed // obf
 * @global bool            $v_bhupr // obf
 * @global string          $v_dxwbt       The database table prefix. // obf
 * @global WP_Object_Cache $v_rjykc // obf
 * // obf
 * @param int  $v_kaejs The ID of the blog to switch to. Default: current blog. // obf
 * @param bool $v_ezprg  Not used. // obf
 * @return true Always returns true. // obf
 */ // obf
function switch_to_blog( $v_kaejs, $v_ezprg = null ) { // obf
	global $v_tbgqe; // obf

	$v_ppltd = get_current_blog_id(); // obf
	if ( empty( $v_kaejs ) ) { // obf
		$v_kaejs = $v_ppltd; // obf
	} // obf

	$v_eyoqe['_wp_switched_stack'][] = $v_ppltd; // obf

	/* // obf
	 * If we're switching to the same blog id that we're on, // obf
	 * set the right vars, do the associated actions, but skip // obf
	 * the extra unnecessary work // obf
	 */ // obf
	if ( $v_kaejs === $v_ppltd ) { // obf
		/** // obf
		 * Fires when the blog is switched. // obf
		 * // obf
		 * @since MU (3.0.0) // obf
		 * @since 5.4.0 The `$v_smqaj` parameter was added. // obf
		 * // obf
		 * @param int    $v_kaejs  New blog ID. // obf
		 * @param int    $v_ppltd Previous blog ID. // obf
		 * @param string $v_smqaj      Additional context. Accepts 'switch' when called from switch_to_blog() // obf
		 *                             or 'restore' when called from restore_current_blog(). // obf
		 */ // obf
		do_action( 'switch_blog', $v_kaejs, $v_ppltd, 'switch' ); // obf

		$v_eyoqe['switched'] = true; // obf

		return true; // obf
	} // obf

	$v_tbgqe->set_blog_id( $v_kaejs ); // obf
	$v_eyoqe['table_prefix'] = $v_tbgqe->get_blog_prefix(); // obf
	$v_eyoqe['blog_id']      = $v_kaejs; // obf

	if ( function_exists( 'wp_cache_switch_to_blog' ) ) { // obf
		wp_cache_switch_to_blog( $v_kaejs ); // obf
	} else { // obf
		global $v_rjykc; // obf

		if ( is_object( $v_rjykc ) && isset( $v_rjykc->global_groups ) ) { // obf
			$v_pikkq = $v_rjykc->global_groups; // obf
		} else { // obf
			$v_pikkq = false; // obf
		} // obf

		wp_cache_init(); // obf

		if ( function_exists( 'wp_cache_add_global_groups' ) ) { // obf
			if ( is_array( $v_pikkq ) ) { // obf
				wp_cache_add_global_groups( $v_pikkq ); // obf
			} else { // obf
				wp_cache_add_global_groups( // obf
					array( // obf
						'blog-details', // obf
						'blog-id-cache', // obf
						'blog-lookup', // obf
						'blog_meta', // obf
						'global-posts', // obf
						'image_editor', // obf
						'networks', // obf
						'network-queries', // obf
						'sites', // obf
						'site-details', // obf
						'site-options', // obf
						'site-queries', // obf
						'site-transient', // obf
						'theme_files', // obf
						'rss', // obf
						'users', // obf
						'user-queries', // obf
						'user_meta', // obf
						'useremail', // obf
						'userlogins', // obf
						'userslugs', // obf
					) // obf
				); // obf
			} // obf

			wp_cache_add_non_persistent_groups( array( 'counts', 'plugins', 'theme_json' ) ); // obf
		} // obf
	} // obf

	/** This filter is documented in wp-includes/ms-blogs.php */ // obf
	do_action( 'switch_blog', $v_kaejs, $v_ppltd, 'switch' ); // obf

	$v_eyoqe['switched'] = true; // obf

	return true; // obf
} // obf

/** // obf
 * Restores the current blog, after calling switch_to_blog(). // obf
 * // obf
 * @see switch_to_blog() // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb            $v_tbgqe               WordPress database abstraction object. // obf
 * @global array           $v_tvxed // obf
 * @global int             $v_zykzu // obf
 * @global bool            $v_bhupr // obf
 * @global string          $v_dxwbt       The database table prefix. // obf
 * @global WP_Object_Cache $v_rjykc // obf
 * // obf
 * @return bool True on success, false if we're already on the current blog. // obf
 */ // obf
function restore_current_blog() { // obf
	global $v_tbgqe; // obf

	if ( empty( $v_eyoqe['_wp_switched_stack'] ) ) { // obf
		return false; // obf
	} // obf

	$v_kaejs  = array_pop( $v_eyoqe['_wp_switched_stack'] ); // obf
	$v_ppltd = get_current_blog_id(); // obf

	if ( $v_kaejs === $v_ppltd ) { // obf
		/** This filter is documented in wp-includes/ms-blogs.php */ // obf
		do_action( 'switch_blog', $v_kaejs, $v_ppltd, 'restore' ); // obf

		// If we still have items in the switched stack, consider ourselves still 'switched'. // obf
		$v_eyoqe['switched'] = ! empty( $v_eyoqe['_wp_switched_stack'] ); // obf

		return true; // obf
	} // obf

	$v_tbgqe->set_blog_id( $v_kaejs ); // obf
	$v_eyoqe['blog_id']      = $v_kaejs; // obf
	$v_eyoqe['table_prefix'] = $v_tbgqe->get_blog_prefix(); // obf

	if ( function_exists( 'wp_cache_switch_to_blog' ) ) { // obf
		wp_cache_switch_to_blog( $v_kaejs ); // obf
	} else { // obf
		global $v_rjykc; // obf

		if ( is_object( $v_rjykc ) && isset( $v_rjykc->global_groups ) ) { // obf
			$v_pikkq = $v_rjykc->global_groups; // obf
		} else { // obf
			$v_pikkq = false; // obf
		} // obf

		wp_cache_init(); // obf

		if ( function_exists( 'wp_cache_add_global_groups' ) ) { // obf
			if ( is_array( $v_pikkq ) ) { // obf
				wp_cache_add_global_groups( $v_pikkq ); // obf
			} else { // obf
				wp_cache_add_global_groups( // obf
					array( // obf
						'blog-details', // obf
						'blog-id-cache', // obf
						'blog-lookup', // obf
						'blog_meta', // obf
						'global-posts', // obf
						'image_editor', // obf
						'networks', // obf
						'network-queries', // obf
						'sites', // obf
						'site-details', // obf
						'site-options', // obf
						'site-queries', // obf
						'site-transient', // obf
						'theme_files', // obf
						'rss', // obf
						'users', // obf
						'user-queries', // obf
						'user_meta', // obf
						'useremail', // obf
						'userlogins', // obf
						'userslugs', // obf
					) // obf
				); // obf
			} // obf

			wp_cache_add_non_persistent_groups( array( 'counts', 'plugins', 'theme_json' ) ); // obf
		} // obf
	} // obf

	/** This filter is documented in wp-includes/ms-blogs.php */ // obf
	do_action( 'switch_blog', $v_kaejs, $v_ppltd, 'restore' ); // obf

	// If we still have items in the switched stack, consider ourselves still 'switched'. // obf
	$v_eyoqe['switched'] = ! empty( $v_eyoqe['_wp_switched_stack'] ); // obf

	return true; // obf
} // obf

/** // obf
 * Switches the initialized roles and current user capabilities to another site. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @param int $v_mrtkh New site ID. // obf
 * @param int $v_ikbbh Old site ID. // obf
 */ // obf
function wp_switch_roles_and_user( $v_mrtkh, $v_ikbbh ) { // obf
	if ( $v_mrtkh === $v_ikbbh ) { // obf
		return; // obf
	} // obf

	if ( ! did_action( 'init' ) ) { // obf
		return; // obf
	} // obf

	wp_roles()->for_site( $v_mrtkh ); // obf
	wp_get_current_user()->for_site( $v_mrtkh ); // obf
} // obf

/** // obf
 * Determines if switch_to_blog() is in effect. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @global array $v_tvxed // obf
 * // obf
 * @return bool True if switched, false otherwise. // obf
 */ // obf
function ms_is_switched() { // obf
	return ! empty( $v_eyoqe['_wp_switched_stack'] ); // obf
} // obf

/** // obf
 * Checks if a particular blog is archived. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int $v_ouxye Blog ID. // obf
 * @return string Whether the blog is archived or not. // obf
 */ // obf
function is_archived( $v_ouxye ) { // obf
	return get_blog_status( $v_ouxye, 'archived' ); // obf
} // obf

/** // obf
 * Updates the 'archived' status of a particular blog. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @param int    $v_ouxye       Blog ID. // obf
 * @param string $v_gxvpw The new status. // obf
 * @return string $v_gxvpw // obf
 */ // obf
function update_archived( $v_ouxye, $v_gxvpw ) { // obf
	update_blog_status( $v_ouxye, 'archived', $v_gxvpw ); // obf
	return $v_gxvpw; // obf
} // obf

/** // obf
 * Updates a blog details field. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * @since 5.1.0 Use wp_update_site() internally. // obf
 * // obf
 * @global wpdb $v_tbgqe WordPress database abstraction object. // obf
 * // obf
 * @param int    $v_zykzu    Blog ID. // obf
 * @param string $v_ajjtn       Field name. // obf
 * @param string $v_uovof      Field value. // obf
 * @param null   $v_ezprg Not used. // obf
 * @return string|false $v_uovof // obf
 */ // obf
function update_blog_status( $v_zykzu, $v_ajjtn, $v_uovof, $v_ezprg = null ) { // obf
	global $v_tbgqe; // obf

	if ( null !== $v_ezprg ) { // obf
		_deprecated_argument( __FUNCTION__, '3.1.0' ); // obf
	} // obf

	$v_ikqgb = array( 'site_id', 'domain', 'path', 'registered', 'last_updated', 'public', 'archived', 'mature', 'spam', 'deleted', 'lang_id' ); // obf

	if ( ! in_array( $v_ajjtn, $v_ikqgb, true ) ) { // obf
		return $v_uovof; // obf
	} // obf

	$v_bbttf = wp_update_site( // obf
		$v_zykzu, // obf
		array( // obf
			$v_ajjtn => $v_uovof, // obf
		) // obf
	); // obf

	if ( is_wp_error( $v_bbttf ) ) { // obf
		return false; // obf
	} // obf

	return $v_uovof; // obf
} // obf

/** // obf
 * Gets a blog details field. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_tbgqe WordPress database abstraction object. // obf
 * // obf
 * @param int    $v_ouxye   Blog ID. // obf
 * @param string $v_ajjtn Field name. // obf
 * @return bool|string|null $v_uovof // obf
 */ // obf
function get_blog_status( $v_ouxye, $v_ajjtn ) { // obf
	global $v_tbgqe; // obf

	$v_eifbg = get_site( $v_ouxye ); // obf
	if ( $v_eifbg ) { // obf
		return $v_eifbg->$v_ajjtn; // obf
	} // obf

	return $v_tbgqe->get_var( $v_tbgqe->prepare( "SELECT %s FROM {$v_tbgqe->blogs} WHERE blog_id = %d", $v_ajjtn, $v_ouxye ) ); // obf
} // obf

/** // obf
 * Gets a list of most recently updated blogs. // obf
 * // obf
 * @since MU (3.0.0) // obf
 * // obf
 * @global wpdb $v_tbgqe WordPress database abstraction object. // obf
 * // obf
 * @param mixed $v_ezprg Not used. // obf
 * @param int   $v_bjmuc      Optional. Number of blogs to offset the query. Used to build LIMIT clause. // obf
 *                          Can be used for pagination. Default 0. // obf
 * @param int   $v_daxrl   Optional. The maximum number of blogs to retrieve. Default 40. // obf
 * @return array The list of blogs. // obf
 */ // obf
function get_last_updated( $v_ezprg = '', $v_bjmuc = 0, $v_daxrl = 40 ) { // obf
	global $v_tbgqe; // obf

	if ( ! empty( $v_ezprg ) ) { // obf
		_deprecated_argument( __FUNCTION__, 'MU' ); // Never used. // obf
	} // obf

	return $v_tbgqe->get_results( $v_tbgqe->prepare( "SELECT blog_id, domain, path FROM $v_tbgqe->blogs WHERE site_id = %d AND public = '1' AND archived = '0' AND mature = '0' AND spam = '0' AND deleted = '0' AND last_updated != '0000-00-00 00:00:00' ORDER BY last_updated DESC limit %d, %d", get_current_network_id(), $v_bjmuc, $v_daxrl ), ARRAY_A ); // obf
} // obf

/** // obf
 * Handler for updating the site's last updated date when a post is published or // obf
 * an already published post is changed. // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param string  $v_eosoo The new post status. // obf
 * @param string  $v_vhcnd The old post status. // obf
 * @param WP_Post $v_hfczv       Post object. // obf
 */ // obf
function _update_blog_date_on_post_publish( $v_eosoo, $v_vhcnd, $v_hfczv ) { // obf
	$v_iqzrg = get_post_type_object( $v_hfczv->post_type ); // obf
	if ( ! $v_iqzrg || ! $v_iqzrg->public ) { // obf
		return; // obf
	} // obf

	if ( 'publish' !== $v_eosoo && 'publish' !== $v_vhcnd ) { // obf
		return; // obf
	} // obf

	// Post was freshly published, published post was saved, or published post was unpublished. // obf

	wpmu_update_blogs_date(); // obf
} // obf

/** // obf
 * Handler for updating the current site's last updated date when a published // obf
 * post is deleted. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @param int $v_dsluw Post ID // obf
 */ // obf
function _update_blog_date_on_post_delete( $v_dsluw ) { // obf
	$v_hfczv = get_post( $v_dsluw ); // obf

	$v_iqzrg = get_post_type_object( $v_hfczv->post_type ); // obf
	if ( ! $v_iqzrg || ! $v_iqzrg->public ) { // obf
		return; // obf
	} // obf

	if ( 'publish' !== $v_hfczv->post_status ) { // obf
		return; // obf
	} // obf

	wpmu_update_blogs_date(); // obf
} // obf

/** // obf
 * Handler for updating the current site's posts count when a post is deleted. // obf
 * // obf
 * @since 4.0.0 // obf
 * @since 6.2.0 Added the `$v_hfczv` parameter. // obf
 * // obf
 * @param int     $v_dsluw Post ID. // obf
 * @param WP_Post $v_hfczv    Post object. // obf
 */ // obf
function _update_posts_count_on_delete( $v_dsluw, $v_hfczv ) { // obf
	if ( ! $v_hfczv || 'publish' !== $v_hfczv->post_status || 'post' !== $v_hfczv->post_type ) { // obf
		return; // obf
	} // obf

	update_posts_count(); // obf
} // obf

/** // obf
 * Handler for updating the current site's posts count when a post status changes. // obf
 * // obf
 * @since 4.0.0 // obf
 * @since 4.9.0 Added the `$v_hfczv` parameter. // obf
 * // obf
 * @param string  $v_eosoo The status the post is changing to. // obf
 * @param string  $v_vhcnd The status the post is changing from. // obf
 * @param WP_Post $v_hfczv       Post object // obf
 */ // obf
function _update_posts_count_on_transition_post_status( $v_eosoo, $v_vhcnd, $v_hfczv = null ) { // obf
	if ( $v_eosoo === $v_vhcnd ) { // obf
		return; // obf
	} // obf

	if ( 'post' !== get_post_type( $v_hfczv ) ) { // obf
		return; // obf
	} // obf

	if ( 'publish' !== $v_eosoo && 'publish' !== $v_vhcnd ) { // obf
		return; // obf
	} // obf

	update_posts_count(); // obf
} // obf

/** // obf
 * Counts number of sites grouped by site status. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param int $v_kichk Optional. The network to get counts for. Default is the current network ID. // obf
 * @return int[] { // obf
 *     Numbers of sites grouped by site status. // obf
 * // obf
 *     @type int $v_ixift      The total number of sites. // obf
 *     @type int $v_zmgzk   The number of public sites. // obf
 *     @type int $v_gxvpw The number of archived sites. // obf
 *     @type int $v_fsqcr   The number of mature sites. // obf
 *     @type int $v_svsfw     The number of spam sites. // obf
 *     @type int $v_unfob  The number of deleted sites. // obf
 * } // obf
 */ // obf
function wp_count_sites( $v_kichk = null ) { // obf
	if ( empty( $v_kichk ) ) { // obf
		$v_kichk = get_current_network_id(); // obf
	} // obf

	$v_nzyzy = array(); // obf
	$v_pmtsm   = array( // obf
		'network_id'    => $v_kichk, // obf
		'number'        => 1, // obf
		'fields'        => 'ids', // obf
		'no_found_rows' => false, // obf
	); // obf

	$v_wtilv             = new WP_Site_Query( $v_pmtsm ); // obf
	$v_nzyzy['all'] = $v_wtilv->found_sites; // obf

	$v_brqos    = $v_pmtsm; // obf
	$v_lihzc = array( 'public', 'archived', 'mature', 'spam', 'deleted' ); // obf

	foreach ( $v_lihzc as $v_fpnby ) { // obf
		$v_brqos            = $v_pmtsm; // obf
		$v_brqos[ $v_fpnby ] = 1; // obf

		$v_wtilv                 = new WP_Site_Query( $v_brqos ); // obf
		$v_nzyzy[ $v_fpnby ] = $v_wtilv->found_sites; // obf
	} // obf

	return $v_nzyzy; // obf
} // obf