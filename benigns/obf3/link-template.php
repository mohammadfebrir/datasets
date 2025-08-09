
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Link Template Functions // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 */ // obf

/** // obf
 * Displays the permalink for the current post. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 4.4.0 Added the `$v_xylhd` parameter. // obf
 * // obf
 * @param int|WP_Post $v_xylhd Optional. Post ID or post object. Default is the global `$v_xylhd`. // obf
 */ // obf
function the_permalink( $v_xylhd = 0 ) { // obf
	/** // obf
	 * Filters the display of the permalink for the current post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @since 4.4.0 Added the `$v_xylhd` parameter. // obf
	 * // obf
	 * @param string      $v_kszzd The permalink for the current post. // obf
	 * @param int|WP_Post $v_xylhd      Post ID, WP_Post object, or 0. Default 0. // obf
	 */ // obf
	echo esc_url( apply_filters( 'the_permalink', get_permalink( $v_xylhd ), $v_xylhd ) ); // obf
} // obf

/** // obf
 * Retrieves a trailing-slashed string if the site is set for adding trailing slashes. // obf
 * // obf
 * Conditionally adds a trailing slash if the permalink structure has a trailing // obf
 * slash, strips the trailing slash if not. The string is passed through the // obf
 * {@see 'user_trailingslashit'} filter. Will remove trailing slash from string, if // obf
 * site is not set to have them. // obf
 * // obf
 * @since 2.2.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param string $v_jhkud         URL with or without a trailing slash. // obf
 * @param string $v_llzzh Optional. The type of URL being considered (e.g. single, category, etc) // obf
 *                            for use in the filter. Default empty string. // obf
 * @return string The URL with the trailing slash appended or stripped. // obf
 */ // obf
function user_trailingslashit( $v_jhkud, $v_llzzh = '' ) { // obf
	global $v_esqaq; // obf
	if ( $v_esqaq->use_trailing_slashes ) { // obf
		$v_jhkud = trailingslashit( $v_jhkud ); // obf
	} else { // obf
		$v_jhkud = untrailingslashit( $v_jhkud ); // obf
	} // obf

	/** // obf
	 * Filters the trailing-slashed string, depending on whether the site is set to use trailing slashes. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param string $v_jhkud         URL with or without a trailing slash. // obf
	 * @param string $v_llzzh The type of URL being considered. Accepts 'single', 'single_trackback', // obf
	 *                            'single_feed', 'single_paged', 'commentpaged', 'paged', 'home', 'feed', // obf
	 *                            'category', 'page', 'year', 'month', 'day', 'post_type_archive'. // obf
	 */ // obf
	return apply_filters( 'user_trailingslashit', $v_jhkud, $v_llzzh ); // obf
} // obf

/** // obf
 * Displays the permalink anchor for the current post. // obf
 * // obf
 * The permalink mode title will use the post title for the 'a' element 'id' // obf
 * attribute. The id mode uses 'post-' with the post ID for the 'id' attribute. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_prjoz Optional. Permalink mode. Accepts 'title' or 'id'. Default 'id'. // obf
 */ // obf
function permalink_anchor( $v_prjoz = 'id' ) { // obf
	$v_xylhd = get_post(); // obf
	switch ( strtolower( $v_prjoz ) ) { // obf
		case 'title': // obf
			$v_snnyy = sanitize_title( $v_xylhd->post_title ) . '-' . $v_xylhd->ID; // obf
			echo '<a id="' . $v_snnyy . '"></a>'; // obf
			break; // obf
		case 'id': // obf
		default: // obf
			echo '<a id="post-' . $v_xylhd->ID . '"></a>'; // obf
			break; // obf
	} // obf
} // obf

/** // obf
 * Determine whether post should always use a plain permalink structure. // obf
 * // obf
 * @since 5.7.0 // obf
 * // obf
 * @param WP_Post|int|null $v_xylhd   Optional. Post ID or post object. Defaults to global $v_xylhd. // obf
 * @param bool|null        $v_ipned Optional. Whether to force consideration based on sample links. // obf
 *                                 If omitted, a sample link is generated if a post object is passed // obf
 *                                 with the filter property set to 'sample'. // obf
 * @return bool Whether to use a plain permalink structure. // obf
 */ // obf
function wp_force_plain_post_permalink( $v_xylhd = null, $v_ipned = null ) { // obf
	if ( // obf
		null === $v_ipned && // obf
		is_object( $v_xylhd ) && // obf
		isset( $v_xylhd->filter ) && // obf
		'sample' === $v_xylhd->filter // obf
	) { // obf
		$v_ipned = true; // obf
	} else { // obf
		$v_xylhd   = get_post( $v_xylhd ); // obf
		$v_ipned = null !== $v_ipned ? $v_ipned : false; // obf
	} // obf

	if ( ! $v_xylhd ) { // obf
		return true; // obf
	} // obf

	$v_snoht = get_post_status_object( get_post_status( $v_xylhd ) ); // obf
	$v_mbxsi   = get_post_type_object( get_post_type( $v_xylhd ) ); // obf

	if ( ! $v_snoht || ! $v_mbxsi ) { // obf
		return true; // obf
	} // obf

	if ( // obf
		// Publicly viewable links never have plain permalinks. // obf
		is_post_status_viewable( $v_snoht ) || // obf
		( // obf
			// Private posts don't have plain permalinks if the user can read them. // obf
			$v_snoht->private && // obf
			current_user_can( 'read_post', $v_xylhd->ID ) // obf
		) || // obf
		// Protected posts don't have plain links if getting a sample URL. // obf
		( $v_snoht->protected && $v_ipned ) // obf
	) { // obf
		return false; // obf
	} // obf

	return true; // obf
} // obf

/** // obf
 * Retrieves the full permalink for the current post or post ID. // obf
 * // obf
 * This function is an alias for get_permalink(). // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @see get_permalink() // obf
 * // obf
 * @param int|WP_Post $v_xylhd      Optional. Post ID or post object. Default is the global `$v_xylhd`. // obf
 * @param bool        $v_bbyyn Optional. Whether to keep post name or page name. Default false. // obf
 * @return string|false The permalink URL. False if the post does not exist. // obf
 */ // obf
function get_the_permalink( $v_xylhd = 0, $v_bbyyn = false ) { // obf
	return get_permalink( $v_xylhd, $v_bbyyn ); // obf
} // obf

/** // obf
 * Retrieves the full permalink for the current post or post ID. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @param int|WP_Post $v_xylhd      Optional. Post ID or post object. Default is the global `$v_xylhd`. // obf
 * @param bool        $v_bbyyn Optional. Whether to keep post name or page name. Default false. // obf
 * @return string|false The permalink URL. False if the post does not exist. // obf
 */ // obf
function get_permalink( $v_xylhd = 0, $v_bbyyn = false ) { // obf
	$v_lryzv = array( // obf
		'%year%', // obf
		'%monthnum%', // obf
		'%day%', // obf
		'%hour%', // obf
		'%minute%', // obf
		'%second%', // obf
		$v_bbyyn ? '' : '%postname%', // obf
		'%post_id%', // obf
		'%category%', // obf
		'%author%', // obf
		$v_bbyyn ? '' : '%pagename%', // obf
	); // obf

	if ( is_object( $v_xylhd ) && isset( $v_xylhd->filter ) && 'sample' === $v_xylhd->filter ) { // obf
		$v_ipned = true; // obf
	} else { // obf
		$v_xylhd   = get_post( $v_xylhd ); // obf
		$v_ipned = false; // obf
	} // obf

	if ( empty( $v_xylhd->ID ) ) { // obf
		return false; // obf
	} // obf

	if ( 'page' === $v_xylhd->post_type ) { // obf
		return get_page_link( $v_xylhd, $v_bbyyn, $v_ipned ); // obf
	} elseif ( 'attachment' === $v_xylhd->post_type ) { // obf
		return get_attachment_link( $v_xylhd, $v_bbyyn ); // obf
	} elseif ( in_array( $v_xylhd->post_type, get_post_types( array( '_builtin' => false ) ), true ) ) { // obf
		return get_post_permalink( $v_xylhd, $v_bbyyn, $v_ipned ); // obf
	} // obf

	$v_kszzd = get_option( 'permalink_structure' ); // obf

	/** // obf
	 * Filters the permalink structure for a post before token replacement occurs. // obf
	 * // obf
	 * Only applies to posts with post_type of 'post'. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string  $v_kszzd The site's permalink structure. // obf
	 * @param WP_Post $v_xylhd      The post in question. // obf
	 * @param bool    $v_bbyyn Whether to keep the post name. // obf
	 */ // obf
	$v_kszzd = apply_filters( 'pre_post_link', $v_kszzd, $v_xylhd, $v_bbyyn ); // obf

	if ( // obf
		$v_kszzd && // obf
		! wp_force_plain_post_permalink( $v_xylhd ) // obf
	) { // obf

		$v_rofhr = ''; // obf
		if ( str_contains( $v_kszzd, '%category%' ) ) { // obf
			$v_oogrt = get_the_category( $v_xylhd->ID ); // obf
			if ( $v_oogrt ) { // obf
				$v_oogrt = wp_list_sort( // obf
					$v_oogrt, // obf
					array( // obf
						'term_id' => 'ASC', // obf
					) // obf
				); // obf

				/** // obf
				 * Filters the category that gets used in the %category% permalink token. // obf
				 * // obf
				 * @since 3.5.0 // obf
				 * // obf
				 * @param WP_Term  $v_cdvey  The category to use in the permalink. // obf
				 * @param array    $v_oogrt Array of all categories (WP_Term objects) associated with the post. // obf
				 * @param WP_Post  $v_xylhd The post in question. // obf
				 */ // obf
				$v_xwyvw = apply_filters( 'post_link_category', $v_oogrt[0], $v_oogrt, $v_xylhd ); // obf

				$v_xwyvw = get_term( $v_xwyvw, 'category' ); // obf
				$v_rofhr        = $v_xwyvw->slug; // obf
				if ( $v_xwyvw->parent ) { // obf
					$v_rofhr = get_category_parents( $v_xwyvw->parent, false, '/', true ) . $v_rofhr; // obf
				} // obf
			} // obf
			/* // obf
			 * Show default category in permalinks, // obf
			 * without having to assign it explicitly. // obf
			 */ // obf
			if ( empty( $v_rofhr ) ) { // obf
				$v_bluvs = get_term( get_option( 'default_category' ), 'category' ); // obf
				if ( $v_bluvs && ! is_wp_error( $v_bluvs ) ) { // obf
					$v_rofhr = $v_bluvs->slug; // obf
				} // obf
			} // obf
		} // obf

		$v_sutdy = ''; // obf
		if ( str_contains( $v_kszzd, '%author%' ) ) { // obf
			$v_dntbe = get_userdata( $v_xylhd->post_author ); // obf
			$v_sutdy     = $v_dntbe->user_nicename; // obf
		} // obf

		/* // obf
		 * This is not an API call because the permalink is based on the stored post_date value, // obf
		 * which should be parsed as local time regardless of the default PHP timezone. // obf
		 */ // obf
		$v_muxco = explode( ' ', str_replace( array( '-', ':' ), ' ', $v_xylhd->post_date ) ); // obf

		$v_amswh = array( // obf
			$v_muxco[0], // obf
			$v_muxco[1], // obf
			$v_muxco[2], // obf
			$v_muxco[3], // obf
			$v_muxco[4], // obf
			$v_muxco[5], // obf
			$v_xylhd->post_name, // obf
			$v_xylhd->ID, // obf
			$v_rofhr, // obf
			$v_sutdy, // obf
			$v_xylhd->post_name, // obf
		); // obf

		$v_kszzd = home_url( str_replace( $v_lryzv, $v_amswh, $v_kszzd ) ); // obf
		$v_kszzd = user_trailingslashit( $v_kszzd, 'single' ); // obf

	} else { // If they're not using the fancy permalink option. // obf
		$v_kszzd = home_url( '?p=' . $v_xylhd->ID ); // obf
	} // obf

	/** // obf
	 * Filters the permalink for a post. // obf
	 * // obf
	 * Only applies to posts with post_type of 'post'. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string  $v_kszzd The post's permalink. // obf
	 * @param WP_Post $v_xylhd      The post in question. // obf
	 * @param bool    $v_bbyyn Whether to keep the post name. // obf
	 */ // obf
	return apply_filters( 'post_link', $v_kszzd, $v_xylhd, $v_bbyyn ); // obf
} // obf

/** // obf
 * Retrieves the permalink for a post of a custom post type. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 6.1.0 Returns false if the post does not exist. // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int|WP_Post $v_xylhd      Optional. Post ID or post object. Default is the global `$v_xylhd`. // obf
 * @param bool        $v_bbyyn Optional. Whether to keep post name. Default false. // obf
 * @param bool        $v_ipned    Optional. Is it a sample permalink. Default false. // obf
 * @return string|false The post permalink URL. False if the post does not exist. // obf
 */ // obf
function get_post_permalink( $v_xylhd = 0, $v_bbyyn = false, $v_ipned = false ) { // obf
	global $v_esqaq; // obf

	$v_xylhd = get_post( $v_xylhd ); // obf

	if ( ! $v_xylhd ) { // obf
		return false; // obf
	} // obf

	$v_walbb = $v_esqaq->get_extra_permastruct( $v_xylhd->post_type ); // obf

	$v_invxu = $v_xylhd->post_name; // obf

	$v_tjdrl = wp_force_plain_post_permalink( $v_xylhd ); // obf

	$v_npqbn = get_post_type_object( $v_xylhd->post_type ); // obf

	if ( $v_npqbn->hierarchical ) { // obf
		$v_invxu = get_page_uri( $v_xylhd ); // obf
	} // obf

	if ( ! empty( $v_walbb ) && ( ! $v_tjdrl || $v_ipned ) ) { // obf
		if ( ! $v_bbyyn ) { // obf
			$v_walbb = str_replace( "%$v_xylhd->post_type%", $v_invxu, $v_walbb ); // obf
		} // obf
		$v_walbb = home_url( user_trailingslashit( $v_walbb ) ); // obf
	} else { // obf
		if ( $v_npqbn->query_var && ( isset( $v_xylhd->post_status ) && ! $v_tjdrl ) ) { // obf
			$v_walbb = add_query_arg( $v_npqbn->query_var, $v_invxu, '' ); // obf
		} else { // obf
			$v_walbb = add_query_arg( // obf
				array( // obf
					'post_type' => $v_xylhd->post_type, // obf
					'p'         => $v_xylhd->ID, // obf
				), // obf
				'' // obf
			); // obf
		} // obf
		$v_walbb = home_url( $v_walbb ); // obf
	} // obf

	/** // obf
	 * Filters the permalink for a post of a custom post type. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string  $v_walbb The post's permalink. // obf
	 * @param WP_Post $v_xylhd      The post in question. // obf
	 * @param bool    $v_bbyyn Whether to keep the post name. // obf
	 * @param bool    $v_ipned    Is it a sample permalink. // obf
	 */ // obf
	return apply_filters( 'post_type_link', $v_walbb, $v_xylhd, $v_bbyyn, $v_ipned ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the current page or page ID. // obf
 * // obf
 * Respects page_on_front. Use this one. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param int|WP_Post $v_xylhd      Optional. Post ID or object. Default uses the global `$v_xylhd`. // obf
 * @param bool        $v_bbyyn Optional. Whether to keep the page name. Default false. // obf
 * @param bool        $v_ipned    Optional. Whether it should be treated as a sample permalink. // obf
 *                               Default false. // obf
 * @return string The page permalink. // obf
 */ // obf
function get_page_link( $v_xylhd = 0, $v_bbyyn = false, $v_ipned = false ) { // obf
	$v_xylhd = get_post( $v_xylhd ); // obf

	if ( 'page' === get_option( 'show_on_front' ) && (int) get_option( 'page_on_front' ) === $v_xylhd->ID ) { // obf
		$v_zmfkb = home_url( '/' ); // obf
	} else { // obf
		$v_zmfkb = _get_page_link( $v_xylhd, $v_bbyyn, $v_ipned ); // obf
	} // obf

	/** // obf
	 * Filters the permalink for a page. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_zmfkb    The page's permalink. // obf
	 * @param int    $v_yynfz The ID of the page. // obf
	 * @param bool   $v_ipned  Is it a sample permalink. // obf
	 */ // obf
	return apply_filters( 'page_link', $v_zmfkb, $v_xylhd->ID, $v_ipned ); // obf
} // obf

/** // obf
 * Retrieves the page permalink. // obf
 * // obf
 * Ignores page_on_front. Internal use only. // obf
 * // obf
 * @since 2.1.0 // obf
 * @access private // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int|WP_Post $v_xylhd      Optional. Post ID or object. Default uses the global `$v_xylhd`. // obf
 * @param bool        $v_bbyyn Optional. Whether to keep the page name. Default false. // obf
 * @param bool        $v_ipned    Optional. Whether it should be treated as a sample permalink. // obf
 *                               Default false. // obf
 * @return string The page permalink. // obf
 */ // obf
function _get_page_link( $v_xylhd = 0, $v_bbyyn = false, $v_ipned = false ) { // obf
	global $v_esqaq; // obf

	$v_xylhd = get_post( $v_xylhd ); // obf

	$v_tjdrl = wp_force_plain_post_permalink( $v_xylhd ); // obf

	$v_zmfkb = $v_esqaq->get_page_permastruct(); // obf

	if ( ! empty( $v_zmfkb ) && ( ( isset( $v_xylhd->post_status ) && ! $v_tjdrl ) || $v_ipned ) ) { // obf
		if ( ! $v_bbyyn ) { // obf
			$v_zmfkb = str_replace( '%pagename%', get_page_uri( $v_xylhd ), $v_zmfkb ); // obf
		} // obf

		$v_zmfkb = home_url( $v_zmfkb ); // obf
		$v_zmfkb = user_trailingslashit( $v_zmfkb, 'page' ); // obf
	} else { // obf
		$v_zmfkb = home_url( '?page_id=' . $v_xylhd->ID ); // obf
	} // obf

	/** // obf
	 * Filters the permalink for a non-page_on_front page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_zmfkb    The page's permalink. // obf
	 * @param int    $v_yynfz The ID of the page. // obf
	 */ // obf
	return apply_filters( '_get_page_link', $v_zmfkb, $v_xylhd->ID ); // obf
} // obf

/** // obf
 * Retrieves the permalink for an attachment. // obf
 * // obf
 * This can be used in the WordPress Loop or outside of it. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int|WP_Post $v_xylhd      Optional. Post ID or object. Default uses the global `$v_xylhd`. // obf
 * @param bool        $v_bbyyn Optional. Whether to keep the page name. Default false. // obf
 * @return string The attachment permalink. // obf
 */ // obf
function get_attachment_link( $v_xylhd = null, $v_bbyyn = false ) { // obf
	global $v_esqaq; // obf

	$v_zmfkb = false; // obf

	$v_xylhd             = get_post( $v_xylhd ); // obf
	$v_tjdrl = wp_force_plain_post_permalink( $v_xylhd ); // obf
	$v_yghwp        = $v_xylhd->post_parent; // obf
	$v_njibb           = $v_yghwp ? get_post( $v_yghwp ) : false; // obf
	$v_lyvdl     = true; // Default for no parent. // obf
	if ( // obf
		$v_yghwp && // obf
		( // obf
			$v_xylhd->post_parent === $v_xylhd->ID || // obf
			! $v_njibb || // obf
			! is_post_type_viewable( get_post_type( $v_njibb ) ) // obf
		) // obf
	) { // obf
		// Post is either its own parent or parent post unavailable. // obf
		$v_lyvdl = false; // obf
	} // obf

	if ( $v_tjdrl || ! $v_lyvdl ) { // obf
		$v_zmfkb = false; // obf
	} elseif ( $v_esqaq->using_permalinks() && $v_njibb ) { // obf
		if ( 'page' === $v_njibb->post_type ) { // obf
			$v_mkthv = _get_page_link( $v_xylhd->post_parent ); // Ignores page_on_front. // obf
		} else { // obf
			$v_mkthv = get_permalink( $v_xylhd->post_parent ); // obf
		} // obf

		if ( is_numeric( $v_xylhd->post_name ) || str_contains( get_option( 'permalink_structure' ), '%category%' ) ) { // obf
			$v_oxbsw = 'attachment/' . $v_xylhd->post_name; // <permalink>/<int>/ is paged so we use the explicit attachment marker. // obf
		} else { // obf
			$v_oxbsw = $v_xylhd->post_name; // obf
		} // obf

		if ( ! str_contains( $v_mkthv, '?' ) ) { // obf
			$v_zmfkb = user_trailingslashit( trailingslashit( $v_mkthv ) . '%postname%' ); // obf
		} // obf

		if ( ! $v_bbyyn ) { // obf
			$v_zmfkb = str_replace( '%postname%', $v_oxbsw, $v_zmfkb ); // obf
		} // obf
	} elseif ( $v_esqaq->using_permalinks() && ! $v_bbyyn ) { // obf
		$v_zmfkb = home_url( user_trailingslashit( $v_xylhd->post_name ) ); // obf
	} // obf

	if ( ! $v_zmfkb ) { // obf
		$v_zmfkb = home_url( '/?attachment_id=' . $v_xylhd->ID ); // obf
	} // obf

	/** // obf
	 * Filters the permalink for an attachment. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 5.6.0 Providing an empty string will now disable // obf
	 *              the view attachment page link on the media modal. // obf
	 * // obf
	 * @param string $v_zmfkb    The attachment's permalink. // obf
	 * @param int    $v_yynfz Attachment ID. // obf
	 */ // obf
	return apply_filters( 'attachment_link', $v_zmfkb, $v_xylhd->ID ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the year archives. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int|false $v_qpnji Integer of year. False for current year. // obf
 * @return string The permalink for the specified year archive. // obf
 */ // obf
function get_year_link( $v_qpnji ) { // obf
	global $v_esqaq; // obf
	if ( ! $v_qpnji ) { // obf
		$v_qpnji = current_time( 'Y' ); // obf
	} // obf
	$v_vrbaj = $v_esqaq->get_year_permastruct(); // obf
	if ( ! empty( $v_vrbaj ) ) { // obf
		$v_vrbaj = str_replace( '%year%', $v_qpnji, $v_vrbaj ); // obf
		$v_vrbaj = home_url( user_trailingslashit( $v_vrbaj, 'year' ) ); // obf
	} else { // obf
		$v_vrbaj = home_url( '?m=' . $v_qpnji ); // obf
	} // obf

	/** // obf
	 * Filters the year archive permalink. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_vrbaj Permalink for the year archive. // obf
	 * @param int    $v_qpnji     Year for the archive. // obf
	 */ // obf
	return apply_filters( 'year_link', $v_vrbaj, $v_qpnji ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the month archives with year. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int|false $v_qpnji  Integer of year. False for current year. // obf
 * @param int|false $v_entyx Integer of month. False for current month. // obf
 * @return string The permalink for the specified month and year archive. // obf
 */ // obf
function get_month_link( $v_qpnji, $v_entyx ) { // obf
	global $v_esqaq; // obf
	if ( ! $v_qpnji ) { // obf
		$v_qpnji = current_time( 'Y' ); // obf
	} // obf
	if ( ! $v_entyx ) { // obf
		$v_entyx = current_time( 'm' ); // obf
	} // obf
	$v_pfbqk = $v_esqaq->get_month_permastruct(); // obf
	if ( ! empty( $v_pfbqk ) ) { // obf
		$v_pfbqk = str_replace( '%year%', $v_qpnji, $v_pfbqk ); // obf
		$v_pfbqk = str_replace( '%monthnum%', zeroise( (int) $v_entyx, 2 ), $v_pfbqk ); // obf
		$v_pfbqk = home_url( user_trailingslashit( $v_pfbqk, 'month' ) ); // obf
	} else { // obf
		$v_pfbqk = home_url( '?m=' . $v_qpnji . zeroise( $v_entyx, 2 ) ); // obf
	} // obf

	/** // obf
	 * Filters the month archive permalink. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_pfbqk Permalink for the month archive. // obf
	 * @param int    $v_qpnji      Year for the archive. // obf
	 * @param int    $v_entyx     The month for the archive. // obf
	 */ // obf
	return apply_filters( 'month_link', $v_pfbqk, $v_qpnji, $v_entyx ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the day archives with year and month. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int|false $v_qpnji  Integer of year. False for current year. // obf
 * @param int|false $v_entyx Integer of month. False for current month. // obf
 * @param int|false $v_mpnun   Integer of day. False for current day. // obf
 * @return string The permalink for the specified day, month, and year archive. // obf
 */ // obf
function get_day_link( $v_qpnji, $v_entyx, $v_mpnun ) { // obf
	global $v_esqaq; // obf
	if ( ! $v_qpnji ) { // obf
		$v_qpnji = current_time( 'Y' ); // obf
	} // obf
	if ( ! $v_entyx ) { // obf
		$v_entyx = current_time( 'm' ); // obf
	} // obf
	if ( ! $v_mpnun ) { // obf
		$v_mpnun = current_time( 'j' ); // obf
	} // obf

	$v_mnvkb = $v_esqaq->get_day_permastruct(); // obf
	if ( ! empty( $v_mnvkb ) ) { // obf
		$v_mnvkb = str_replace( '%year%', $v_qpnji, $v_mnvkb ); // obf
		$v_mnvkb = str_replace( '%monthnum%', zeroise( (int) $v_entyx, 2 ), $v_mnvkb ); // obf
		$v_mnvkb = str_replace( '%day%', zeroise( (int) $v_mpnun, 2 ), $v_mnvkb ); // obf
		$v_mnvkb = home_url( user_trailingslashit( $v_mnvkb, 'day' ) ); // obf
	} else { // obf
		$v_mnvkb = home_url( '?m=' . $v_qpnji . zeroise( $v_entyx, 2 ) . zeroise( $v_mpnun, 2 ) ); // obf
	} // obf

	/** // obf
	 * Filters the day archive permalink. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_mnvkb Permalink for the day archive. // obf
	 * @param int    $v_qpnji    Year for the archive. // obf
	 * @param int    $v_entyx   Month for the archive. // obf
	 * @param int    $v_mpnun     The day for the archive. // obf
	 */ // obf
	return apply_filters( 'day_link', $v_mnvkb, $v_qpnji, $v_entyx, $v_mpnun ); // obf
} // obf

/** // obf
 * Displays the permalink for the feed type. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_qwotz The link's anchor text. // obf
 * @param string $v_gtenw   Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                       Default is the value of get_default_feed(). // obf
 */ // obf
function the_feed_link( $v_qwotz, $v_gtenw = '' ) { // obf
	$v_zmfkb = '<a href="' . esc_url( get_feed_link( $v_gtenw ) ) . '">' . $v_qwotz . '</a>'; // obf

	/** // obf
	 * Filters the feed link anchor tag. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_zmfkb The complete anchor tag for a feed link. // obf
	 * @param string $v_gtenw The feed type. Possible values include 'rss2', 'atom', // obf
	 *                     or an empty string for the default feed type. // obf
	 */ // obf
	echo apply_filters( 'the_feed_link', $v_zmfkb, $v_gtenw ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the feed type. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param string $v_gtenw Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                     Default is the value of get_default_feed(). // obf
 * @return string The feed permalink. // obf
 */ // obf
function get_feed_link( $v_gtenw = '' ) { // obf
	global $v_esqaq; // obf

	$v_kszzd = $v_esqaq->get_feed_permastruct(); // obf

	if ( $v_kszzd ) { // obf
		if ( str_contains( $v_gtenw, 'comments_' ) ) { // obf
			$v_gtenw      = str_replace( 'comments_', '', $v_gtenw ); // obf
			$v_kszzd = $v_esqaq->get_comment_feed_permastruct(); // obf
		} // obf

		if ( get_default_feed() === $v_gtenw ) { // obf
			$v_gtenw = ''; // obf
		} // obf

		$v_kszzd = str_replace( '%feed%', $v_gtenw, $v_kszzd ); // obf
		$v_kszzd = __fn_37772( '#/+#', '/', "/$v_kszzd" ); // obf
		$v_bvfjd    = home_url( user_trailingslashit( $v_kszzd, 'feed' ) ); // obf
	} else { // obf
		if ( empty( $v_gtenw ) ) { // obf
			$v_gtenw = get_default_feed(); // obf
		} // obf

		if ( str_contains( $v_gtenw, 'comments_' ) ) { // obf
			$v_gtenw = str_replace( 'comments_', 'comments-', $v_gtenw ); // obf
		} // obf

		$v_bvfjd = home_url( "?feed={$v_gtenw}" ); // obf
	} // obf

	/** // obf
	 * Filters the feed type permalink. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param string $v_bvfjd The feed permalink. // obf
	 * @param string $v_gtenw   The feed type. Possible values include 'rss2', 'atom', // obf
	 *                       or an empty string for the default feed type. // obf
	 */ // obf
	return apply_filters( 'feed_link', $v_bvfjd, $v_gtenw ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the post comments feed. // obf
 * // obf
 * @since 2.2.0 // obf
 * // obf
 * @param int    $v_yynfz Optional. Post ID. Default is the ID of the global `$v_xylhd`. // obf
 * @param string $v_gtenw    Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                        Default is the value of get_default_feed(). // obf
 * @return string The permalink for the comments feed for the given post on success, empty string on failure. // obf
 */ // obf
function get_post_comments_feed_link( $v_yynfz = 0, $v_gtenw = '' ) { // obf
	$v_yynfz = absint( $v_yynfz ); // obf

	if ( ! $v_yynfz ) { // obf
		$v_yynfz = get_the_ID(); // obf
	} // obf

	if ( empty( $v_gtenw ) ) { // obf
		$v_gtenw = get_default_feed(); // obf
	} // obf

	$v_xylhd = get_post( $v_yynfz ); // obf

	// Bail out if the post does not exist. // obf
	if ( ! $v_xylhd instanceof WP_Post ) { // obf
		return ''; // obf
	} // obf

	$v_pntzm = 'attachment' === $v_xylhd->post_type && 0 === (int) $v_xylhd->post_parent; // obf

	if ( get_option( 'permalink_structure' ) ) { // obf
		if ( 'page' === get_option( 'show_on_front' ) && (int) get_option( 'page_on_front' ) === $v_yynfz ) { // obf
			$v_jhkud = _get_page_link( $v_yynfz ); // obf
		} else { // obf
			$v_jhkud = get_permalink( $v_yynfz ); // obf
		} // obf

		if ( $v_pntzm ) { // obf
			$v_jhkud = home_url( '/feed/' ); // obf
			if ( get_default_feed() !== $v_gtenw ) { // obf
				$v_jhkud .= "$v_gtenw/"; // obf
			} // obf
			$v_jhkud = add_query_arg( 'attachment_id', $v_yynfz, $v_jhkud ); // obf
		} else { // obf
			$v_jhkud = trailingslashit( $v_jhkud ) . 'feed'; // obf
			if ( get_default_feed() !== $v_gtenw ) { // obf
				$v_jhkud .= "/$v_gtenw"; // obf
			} // obf
			$v_jhkud = user_trailingslashit( $v_jhkud, 'single_feed' ); // obf
		} // obf
	} else { // obf
		if ( $v_pntzm ) { // obf
			$v_jhkud = add_query_arg( // obf
				array( // obf
					'feed'          => $v_gtenw, // obf
					'attachment_id' => $v_yynfz, // obf
				), // obf
				home_url( '/' ) // obf
			); // obf
		} elseif ( 'page' === $v_xylhd->post_type ) { // obf
			$v_jhkud = add_query_arg( // obf
				array( // obf
					'feed'    => $v_gtenw, // obf
					'page_id' => $v_yynfz, // obf
				), // obf
				home_url( '/' ) // obf
			); // obf
		} else { // obf
			$v_jhkud = add_query_arg( // obf
				array( // obf
					'feed' => $v_gtenw, // obf
					'p'    => $v_yynfz, // obf
				), // obf
				home_url( '/' ) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the post comments feed permalink. // obf
	 * // obf
	 * @since 1.5.1 // obf
	 * // obf
	 * @param string $v_jhkud Post comments feed permalink. // obf
	 */ // obf
	return apply_filters( 'post_comments_feed_link', $v_jhkud ); // obf
} // obf

/** // obf
 * Displays the comment feed link for a post. // obf
 * // obf
 * Prints out the comment feed link for a post. Link text is placed in the // obf
 * anchor. If no link text is specified, default text is used. If no post ID is // obf
 * specified, the current post is used. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_pmctl Optional. Descriptive link text. Default 'Comments Feed'. // obf
 * @param int    $v_yynfz   Optional. Post ID. Default is the ID of the global `$v_xylhd`. // obf
 * @param string $v_gtenw      Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                          Default is the value of get_default_feed(). // obf
 */ // obf
function post_comments_feed_link( $v_pmctl = '', $v_yynfz = 0, $v_gtenw = '' ) { // obf
	$v_jhkud = get_post_comments_feed_link( $v_yynfz, $v_gtenw ); // obf
	if ( empty( $v_pmctl ) ) { // obf
		$v_pmctl = __( 'Comments Feed' ); // obf
	} // obf

	$v_zmfkb = '<a href="' . esc_url( $v_jhkud ) . '">' . $v_pmctl . '</a>'; // obf
	/** // obf
	 * Filters the post comment feed link anchor tag. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_zmfkb    The complete anchor tag for the comment feed link. // obf
	 * @param int    $v_yynfz Post ID. // obf
	 * @param string $v_gtenw    The feed type. Possible values include 'rss2', 'atom', // obf
	 *                        or an empty string for the default feed type. // obf
	 */ // obf
	echo apply_filters( 'post_comments_feed_link_html', $v_zmfkb, $v_yynfz, $v_gtenw ); // obf
} // obf

/** // obf
 * Retrieves the feed link for a given author. // obf
 * // obf
 * Returns a link to the feed for all posts by a given author. A specific feed // obf
 * can be requested or left blank to get the default feed. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param int    $v_jksrl Author ID. // obf
 * @param string $v_gtenw      Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                          Default is the value of get_default_feed(). // obf
 * @return string Link to the feed for the author specified by $v_jksrl. // obf
 */ // obf
function get_author_feed_link( $v_jksrl, $v_gtenw = '' ) { // obf
	$v_jksrl           = (int) $v_jksrl; // obf
	$v_xstta = get_option( 'permalink_structure' ); // obf

	if ( empty( $v_gtenw ) ) { // obf
		$v_gtenw = get_default_feed(); // obf
	} // obf

	if ( ! $v_xstta ) { // obf
		$v_zmfkb = home_url( "?feed=$v_gtenw&amp;author=" . $v_jksrl ); // obf
	} else { // obf
		$v_zmfkb = get_author_posts_url( $v_jksrl ); // obf
		if ( get_default_feed() === $v_gtenw ) { // obf
			$v_sogdm = 'feed'; // obf
		} else { // obf
			$v_sogdm = "feed/$v_gtenw"; // obf
		} // obf

		$v_zmfkb = trailingslashit( $v_zmfkb ) . user_trailingslashit( $v_sogdm, 'feed' ); // obf
	} // obf

	/** // obf
	 * Filters the feed link for a given author. // obf
	 * // obf
	 * @since 1.5.1 // obf
	 * // obf
	 * @param string $v_zmfkb The author feed link. // obf
	 * @param string $v_gtenw Feed type. Possible values include 'rss2', 'atom'. // obf
	 */ // obf
	$v_zmfkb = apply_filters( 'author_feed_link', $v_zmfkb, $v_gtenw ); // obf

	return $v_zmfkb; // obf
} // obf

/** // obf
 * Retrieves the feed link for a category. // obf
 * // obf
 * Returns a link to the feed for all posts in a given category. A specific feed // obf
 * can be requested or left blank to get the default feed. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param int|WP_Term|object $v_cdvey  The ID or category object whose feed link will be retrieved. // obf
 * @param string             $v_gtenw Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                                 Default is the value of get_default_feed(). // obf
 * @return string Link to the feed for the category specified by `$v_cdvey`. // obf
 */ // obf
function get_category_feed_link( $v_cdvey, $v_gtenw = '' ) { // obf
	return get_term_feed_link( $v_cdvey, 'category', $v_gtenw ); // obf
} // obf

/** // obf
 * Retrieves the feed link for a term. // obf
 * // obf
 * Returns a link to the feed for all posts in a given term. A specific feed // obf
 * can be requested or left blank to get the default feed. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int|WP_Term|object $v_enbug     The ID or term object whose feed link will be retrieved. // obf
 * @param string             $v_vuyhj Optional. Taxonomy of `$v_ydwev`. // obf
 * @param string             $v_gtenw     Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                                     Default is the value of get_default_feed(). // obf
 * @return string|false Link to the feed for the term specified by `$v_enbug` and `$v_vuyhj`. // obf
 */ // obf
function get_term_feed_link( $v_enbug, $v_vuyhj = '', $v_gtenw = '' ) { // obf
	if ( ! is_object( $v_enbug ) ) { // obf
		$v_enbug = (int) $v_enbug; // obf
	} // obf

	$v_enbug = get_term( $v_enbug, $v_vuyhj ); // obf

	if ( empty( $v_enbug ) || is_wp_error( $v_enbug ) ) { // obf
		return false; // obf
	} // obf

	$v_vuyhj = $v_enbug->taxonomy; // obf

	if ( empty( $v_gtenw ) ) { // obf
		$v_gtenw = get_default_feed(); // obf
	} // obf

	$v_xstta = get_option( 'permalink_structure' ); // obf

	if ( ! $v_xstta ) { // obf
		if ( 'category' === $v_vuyhj ) { // obf
			$v_zmfkb = home_url( "?feed=$v_gtenw&amp;cat=$v_enbug->term_id" ); // obf
		} elseif ( 'post_tag' === $v_vuyhj ) { // obf
			$v_zmfkb = home_url( "?feed=$v_gtenw&amp;tag=$v_enbug->slug" ); // obf
		} else { // obf
			$v_rcvhu    = get_taxonomy( $v_vuyhj ); // obf
			$v_zmfkb = home_url( "?feed=$v_gtenw&amp;$v_rcvhu->query_var=$v_enbug->slug" ); // obf
		} // obf
	} else { // obf
		$v_zmfkb = get_term_link( $v_enbug, $v_enbug->taxonomy ); // obf
		if ( get_default_feed() === $v_gtenw ) { // obf
			$v_sogdm = 'feed'; // obf
		} else { // obf
			$v_sogdm = "feed/$v_gtenw"; // obf
		} // obf

		$v_zmfkb = trailingslashit( $v_zmfkb ) . user_trailingslashit( $v_sogdm, 'feed' ); // obf
	} // obf

	if ( 'category' === $v_vuyhj ) { // obf
		/** // obf
		 * Filters the category feed link. // obf
		 * // obf
		 * @since 1.5.1 // obf
		 * // obf
		 * @param string $v_zmfkb The category feed link. // obf
		 * @param string $v_gtenw Feed type. Possible values include 'rss2', 'atom'. // obf
		 */ // obf
		$v_zmfkb = apply_filters( 'category_feed_link', $v_zmfkb, $v_gtenw ); // obf
	} elseif ( 'post_tag' === $v_vuyhj ) { // obf
		/** // obf
		 * Filters the post tag feed link. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * // obf
		 * @param string $v_zmfkb The tag feed link. // obf
		 * @param string $v_gtenw Feed type. Possible values include 'rss2', 'atom'. // obf
		 */ // obf
		$v_zmfkb = apply_filters( 'tag_feed_link', $v_zmfkb, $v_gtenw ); // obf
	} else { // obf
		/** // obf
		 * Filters the feed link for a taxonomy other than 'category' or 'post_tag'. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string $v_zmfkb     The taxonomy feed link. // obf
		 * @param string $v_gtenw     Feed type. Possible values include 'rss2', 'atom'. // obf
		 * @param string $v_vuyhj The taxonomy name. // obf
		 */ // obf
		$v_zmfkb = apply_filters( 'taxonomy_feed_link', $v_zmfkb, $v_gtenw, $v_vuyhj ); // obf
	} // obf

	return $v_zmfkb; // obf
} // obf

/** // obf
 * Retrieves the permalink for a tag feed. // obf
 * // obf
 * @since 2.3.0 // obf
 * // obf
 * @param int|WP_Term|object $v_bxhfv  The ID or term object whose feed link will be retrieved. // obf
 * @param string             $v_gtenw Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                                 Default is the value of get_default_feed(). // obf
 * @return string                  The feed permalink for the given tag. // obf
 */ // obf
function get_tag_feed_link( $v_bxhfv, $v_gtenw = '' ) { // obf
	return get_term_feed_link( $v_bxhfv, 'post_tag', $v_gtenw ); // obf
} // obf

/** // obf
 * Retrieves the edit link for a tag. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param int|WP_Term|object $v_bxhfv      The ID or term object whose edit link will be retrieved. // obf
 * @param string             $v_vuyhj Optional. Taxonomy slug. Default 'post_tag'. // obf
 * @return string The edit tag link URL for the given tag. // obf
 */ // obf
function get_edit_tag_link( $v_bxhfv, $v_vuyhj = 'post_tag' ) { // obf
	/** // obf
	 * Filters the edit link for a tag (or term in another taxonomy). // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_zmfkb The term edit link. // obf
	 */ // obf
	return apply_filters( 'get_edit_tag_link', get_edit_term_link( $v_bxhfv, $v_vuyhj ) ); // obf
} // obf

/** // obf
 * Displays or retrieves the edit link for a tag with formatting. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string  $v_zmfkb   Optional. Anchor text. If empty, default is 'Edit This'. Default empty. // obf
 * @param string  $v_cmxjm Optional. Display before edit link. Default empty. // obf
 * @param string  $v_hyooc  Optional. Display after edit link. Default empty. // obf
 * @param WP_Term $v_bxhfv    Optional. Term object. If null, the queried object will be inspected. // obf
 *                        Default null. // obf
 */ // obf
function edit_tag_link( $v_zmfkb = '', $v_cmxjm = '', $v_hyooc = '', $v_bxhfv = null ) { // obf
	$v_zmfkb = edit_term_link( $v_zmfkb, '', '', $v_bxhfv, false ); // obf

	/** // obf
	 * Filters the anchor tag for the edit link for a tag (or term in another taxonomy). // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_zmfkb The anchor tag for the edit link. // obf
	 */ // obf
	echo $v_cmxjm . apply_filters( 'edit_tag_link', $v_zmfkb ) . $v_hyooc; // obf
} // obf

/** // obf
 * Retrieves the URL for editing a given term. // obf
 * // obf
 * @since 3.1.0 // obf
 * @since 4.5.0 The `$v_vuyhj` parameter was made optional. // obf
 * // obf
 * @param int|WP_Term|object $v_enbug        The ID or term object whose edit link will be retrieved. // obf
 * @param string             $v_vuyhj    Optional. Taxonomy. Defaults to the taxonomy of the term identified // obf
 *                                        by `$v_enbug`. // obf
 * @param string             $v_wpjaz Optional. The object type. Used to highlight the proper post type // obf
 *                                        menu on the linked page. Defaults to the first object_type associated // obf
 *                                        with the taxonomy. // obf
 * @return string|null The edit term link URL for the given term, or null on failure. // obf
 */ // obf
function get_edit_term_link( $v_enbug, $v_vuyhj = '', $v_wpjaz = '' ) { // obf
	$v_enbug = get_term( $v_enbug, $v_vuyhj ); // obf
	if ( ! $v_enbug || is_wp_error( $v_enbug ) ) { // obf
		return; // obf
	} // obf

	$v_lrvns     = get_taxonomy( $v_enbug->taxonomy ); // obf
	$v_ydwev = $v_enbug->term_id; // obf
	if ( ! $v_lrvns || ! current_user_can( 'edit_term', $v_ydwev ) ) { // obf
		return; // obf
	} // obf

	$v_ewilw = array( // obf
		'taxonomy' => $v_lrvns->name, // obf
		'tag_ID'   => $v_ydwev, // obf
	); // obf

	if ( $v_wpjaz ) { // obf
		$v_ewilw['post_type'] = $v_wpjaz; // obf
	} elseif ( ! empty( $v_lrvns->object_type ) ) { // obf
		$v_ewilw['post_type'] = reset( $v_lrvns->object_type ); // obf
	} // obf

	if ( $v_lrvns->show_ui ) { // obf
		$v_oqvuf = add_query_arg( $v_ewilw, admin_url( 'term.php' ) ); // obf
	} else { // obf
		$v_oqvuf = ''; // obf
	} // obf

	/** // obf
	 * Filters the edit link for a term. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_oqvuf    The edit link. // obf
	 * @param int    $v_ydwev     Term ID. // obf
	 * @param string $v_vuyhj    Taxonomy name. // obf
	 * @param string $v_wpjaz The object type. // obf
	 */ // obf
	return apply_filters( 'get_edit_term_link', $v_oqvuf, $v_ydwev, $v_vuyhj, $v_wpjaz ); // obf
} // obf

/** // obf
 * Displays or retrieves the edit term link with formatting. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string           $v_zmfkb    Optional. Anchor text. If empty, default is 'Edit This'. Default empty. // obf
 * @param string           $v_cmxjm  Optional. Display before edit link. Default empty. // obf
 * @param string           $v_hyooc   Optional. Display after edit link. Default empty. // obf
 * @param int|WP_Term|null $v_enbug    Optional. Term ID or object. If null, the queried object will be inspected. Default null. // obf
 * @param bool             $v_auoop Optional. Whether or not to echo the return. Default true. // obf
 * @return string|void HTML content. // obf
 */ // obf
function edit_term_link( $v_zmfkb = '', $v_cmxjm = '', $v_hyooc = '', $v_enbug = null, $v_auoop = true ) { // obf
	if ( is_null( $v_enbug ) ) { // obf
		$v_enbug = get_queried_object(); // obf
	} else { // obf
		$v_enbug = get_term( $v_enbug ); // obf
	} // obf

	if ( ! $v_enbug ) { // obf
		return; // obf
	} // obf

	$v_lrvns = get_taxonomy( $v_enbug->taxonomy ); // obf
	if ( ! current_user_can( 'edit_term', $v_enbug->term_id ) ) { // obf
		return; // obf
	} // obf

	if ( empty( $v_zmfkb ) ) { // obf
		$v_zmfkb = __( 'Edit This' ); // obf
	} // obf

	$v_zmfkb = '<a href="' . get_edit_term_link( $v_enbug->term_id, $v_enbug->taxonomy ) . '">' . $v_zmfkb . '</a>'; // obf

	/** // obf
	 * Filters the anchor tag for the edit link of a term. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_zmfkb    The anchor tag for the edit link. // obf
	 * @param int    $v_ydwev Term ID. // obf
	 */ // obf
	$v_zmfkb = $v_cmxjm . apply_filters( 'edit_term_link', $v_zmfkb, $v_enbug->term_id ) . $v_hyooc; // obf

	if ( $v_auoop ) { // obf
		echo $v_zmfkb; // obf
	} else { // obf
		return $v_zmfkb; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the permalink for a search. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param string $v_tqumg Optional. The query string to use. If empty the current query is used. Default empty. // obf
 * @return string The search permalink. // obf
 */ // obf
function get_search_link( $v_tqumg = '' ) { // obf
	global $v_esqaq; // obf

	if ( empty( $v_tqumg ) ) { // obf
		$v_mntip = get_search_query( false ); // obf
	} else { // obf
		$v_mntip = stripslashes( $v_tqumg ); // obf
	} // obf

	$v_yucyx = $v_esqaq->get_search_permastruct(); // obf

	if ( empty( $v_yucyx ) ) { // obf
		$v_zmfkb = home_url( '?s=' . urlencode( $v_mntip ) ); // obf
	} else { // obf
		$v_mntip = urlencode( $v_mntip ); // obf
		$v_mntip = str_replace( '%2F', '/', $v_mntip ); // %2F(/) is not valid within a URL, send it un-encoded. // obf
		$v_zmfkb   = str_replace( '%search%', $v_mntip, $v_yucyx ); // obf
		$v_zmfkb   = home_url( user_trailingslashit( $v_zmfkb, 'search' ) ); // obf
	} // obf

	/** // obf
	 * Filters the search permalink. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_zmfkb   Search permalink. // obf
	 * @param string $v_mntip The URL-encoded search term. // obf
	 */ // obf
	return apply_filters( 'search_link', $v_zmfkb, $v_mntip ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the search results feed. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param string $v_apcrk Optional. Search query. Default empty. // obf
 * @param string $v_gtenw         Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                             Default is the value of get_default_feed(). // obf
 * @return string The search results feed permalink. // obf
 */ // obf
function get_search_feed_link( $v_apcrk = '', $v_gtenw = '' ) { // obf
	global $v_esqaq; // obf
	$v_zmfkb = get_search_link( $v_apcrk ); // obf

	if ( empty( $v_gtenw ) ) { // obf
		$v_gtenw = get_default_feed(); // obf
	} // obf

	$v_yucyx = $v_esqaq->get_search_permastruct(); // obf

	if ( empty( $v_yucyx ) ) { // obf
		$v_zmfkb = add_query_arg( 'feed', $v_gtenw, $v_zmfkb ); // obf
	} else { // obf
		$v_zmfkb  = trailingslashit( $v_zmfkb ); // obf
		$v_zmfkb .= "feed/$v_gtenw/"; // obf
	} // obf

	/** // obf
	 * Filters the search feed link. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param string $v_zmfkb Search feed link. // obf
	 * @param string $v_gtenw Feed type. Possible values include 'rss2', 'atom'. // obf
	 * @param string $v_ptihb The search type. One of 'posts' or 'comments'. // obf
	 */ // obf
	return apply_filters( 'search_feed_link', $v_zmfkb, $v_gtenw, 'posts' ); // obf
} // obf

/** // obf
 * Retrieves the permalink for the search results comments feed. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param string $v_apcrk Optional. Search query. Default empty. // obf
 * @param string $v_gtenw         Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                             Default is the value of get_default_feed(). // obf
 * @return string The comments feed search results permalink. // obf
 */ // obf
function get_search_comments_feed_link( $v_apcrk = '', $v_gtenw = '' ) { // obf
	global $v_esqaq; // obf

	if ( empty( $v_gtenw ) ) { // obf
		$v_gtenw = get_default_feed(); // obf
	} // obf

	$v_zmfkb = get_search_feed_link( $v_apcrk, $v_gtenw ); // obf

	$v_yucyx = $v_esqaq->get_search_permastruct(); // obf

	if ( empty( $v_yucyx ) ) { // obf
		$v_zmfkb = add_query_arg( 'feed', 'comments-' . $v_gtenw, $v_zmfkb ); // obf
	} else { // obf
		$v_zmfkb = add_query_arg( 'withcomments', 1, $v_zmfkb ); // obf
	} // obf

	/** This filter is documented in wp-includes/link-template.php */ // obf
	return apply_filters( 'search_feed_link', $v_zmfkb, $v_gtenw, 'comments' ); // obf
} // obf

/** // obf
 * Retrieves the permalink for a post type archive. // obf
 * // obf
 * @since 3.1.0 // obf
 * @since 4.5.0 Support for posts was added. // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param string $v_npqbn Post type. // obf
 * @return string|false The post type archive permalink. False if the post type // obf
 *                      does not exist or does not have an archive. // obf
 */ // obf
function get_post_type_archive_link( $v_npqbn ) { // obf
	global $v_esqaq; // obf

	$v_mbxsi = get_post_type_object( $v_npqbn ); // obf

	if ( ! $v_mbxsi ) { // obf
		return false; // obf
	} // obf

	if ( 'post' === $v_npqbn ) { // obf
		$v_ahumj  = get_option( 'show_on_front' ); // obf
		$v_slvbj = get_option( 'page_for_posts' ); // obf

		if ( 'page' === $v_ahumj && $v_slvbj ) { // obf
			$v_zmfkb = get_permalink( $v_slvbj ); // obf
		} else { // obf
			$v_zmfkb = get_home_url(); // obf
		} // obf
		/** This filter is documented in wp-includes/link-template.php */ // obf
		return apply_filters( 'post_type_archive_link', $v_zmfkb, $v_npqbn ); // obf
	} // obf

	if ( ! $v_mbxsi->has_archive ) { // obf
		return false; // obf
	} // obf

	if ( get_option( 'permalink_structure' ) && is_array( $v_mbxsi->rewrite ) ) { // obf
		$v_qhvic = ( true === $v_mbxsi->has_archive ) ? $v_mbxsi->rewrite['slug'] : $v_mbxsi->has_archive; // obf
		if ( $v_mbxsi->rewrite['with_front'] ) { // obf
			$v_qhvic = $v_esqaq->front . $v_qhvic; // obf
		} else { // obf
			$v_qhvic = $v_esqaq->root . $v_qhvic; // obf
		} // obf
		$v_zmfkb = home_url( user_trailingslashit( $v_qhvic, 'post_type_archive' ) ); // obf
	} else { // obf
		$v_zmfkb = home_url( '?post_type=' . $v_npqbn ); // obf
	} // obf

	/** // obf
	 * Filters the post type archive permalink. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_zmfkb      The post type archive permalink. // obf
	 * @param string $v_npqbn Post type name. // obf
	 */ // obf
	return apply_filters( 'post_type_archive_link', $v_zmfkb, $v_npqbn ); // obf
} // obf

/** // obf
 * Retrieves the permalink for a post type archive feed. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_npqbn Post type. // obf
 * @param string $v_gtenw      Optional. Feed type. Possible values include 'rss2', 'atom'. // obf
 *                          Default is the value of get_default_feed(). // obf
 * @return string|false The post type feed permalink. False if the post type // obf
 *                      does not exist or does not have an archive. // obf
 */ // obf
function get_post_type_archive_feed_link( $v_npqbn, $v_gtenw = '' ) { // obf
	$v_kgetw = get_default_feed(); // obf
	if ( empty( $v_gtenw ) ) { // obf
		$v_gtenw = $v_kgetw; // obf
	} // obf

	$v_zmfkb = get_post_type_archive_link( $v_npqbn ); // obf
	if ( ! $v_zmfkb ) { // obf
		return false; // obf
	} // obf

	$v_mbxsi = get_post_type_object( $v_npqbn ); // obf
	if ( get_option( 'permalink_structure' ) && is_array( $v_mbxsi->rewrite ) && $v_mbxsi->rewrite['feeds'] ) { // obf
		$v_zmfkb  = trailingslashit( $v_zmfkb ); // obf
		$v_zmfkb .= 'feed/'; // obf
		if ( $v_gtenw !== $v_kgetw ) { // obf
			$v_zmfkb .= "$v_gtenw/"; // obf
		} // obf
	} else { // obf
		$v_zmfkb = add_query_arg( 'feed', $v_gtenw, $v_zmfkb ); // obf
	} // obf

	/** // obf
	 * Filters the post type archive feed link. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_zmfkb The post type archive feed link. // obf
	 * @param string $v_gtenw Feed type. Possible values include 'rss2', 'atom'. // obf
	 */ // obf
	return apply_filters( 'post_type_archive_feed_link', $v_zmfkb, $v_gtenw ); // obf
} // obf

/** // obf
 * Retrieves the URL used for the post preview. // obf
 * // obf
 * Allows additional query args to be appended. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param int|WP_Post $v_xylhd         Optional. Post ID or `WP_Post` object. Defaults to global `$v_xylhd`. // obf
 * @param array       $v_ebqiy   Optional. Array of additional query args to be appended to the link. // obf
 *                                  Default empty array. // obf
 * @param string      $v_losoh Optional. Base preview link to be used if it should differ from the // obf
 *                                  post permalink. Default empty. // obf
 * @return string|null URL used for the post preview, or null if the post does not exist. // obf
 */ // obf
function get_preview_post_link( $v_xylhd = null, $v_ebqiy = array(), $v_losoh = '' ) { // obf
	$v_xylhd = get_post( $v_xylhd ); // obf

	if ( ! $v_xylhd ) { // obf
		return; // obf
	} // obf

	$v_zbeid = get_post_type_object( $v_xylhd->post_type ); // obf
	if ( is_post_type_viewable( $v_zbeid ) ) { // obf
		if ( ! $v_losoh ) { // obf
			$v_losoh = set_url_scheme( get_permalink( $v_xylhd ) ); // obf
		} // obf

		$v_ebqiy['preview'] = 'true'; // obf
		$v_losoh          = add_query_arg( $v_ebqiy, $v_losoh ); // obf
	} // obf

	/** // obf
	 * Filters the URL used for a post preview. // obf
	 * // obf
	 * @since 2.0.5 // obf
	 * @since 4.0.0 Added the `$v_xylhd` parameter. // obf
	 * // obf
	 * @param string  $v_losoh URL used for the post preview. // obf
	 * @param WP_Post $v_xylhd         Post object. // obf
	 */ // obf
	return apply_filters( 'preview_post_link', $v_losoh, $v_xylhd ); // obf
} // obf

/** // obf
 * Retrieves the edit post link for post. // obf
 * // obf
 * Can be used within the WordPress loop or outside of it. Can be used with // obf
 * pages, posts, attachments, revisions, global styles, templates, and template parts. // obf
 * // obf
 * @since 2.3.0 // obf
 * @since 6.3.0 Adds custom link for wp_navigation post types. // obf
 *              Adds custom links for wp_template_part and wp_template post types. // obf
 * // obf
 * @param int|WP_Post $v_xylhd    Optional. Post ID or post object. Default is the global `$v_xylhd`. // obf
 * @param string      $v_moplf Optional. How to output the '&' character. Default '&amp;'. // obf
 * @return string|null The edit post link for the given post. Null if the post type does not exist // obf
 *                     or does not allow an editing UI. // obf
 */ // obf
function get_edit_post_link( $v_xylhd = 0, $v_moplf = 'display' ) { // obf
	$v_xylhd = get_post( $v_xylhd ); // obf

	if ( ! $v_xylhd ) { // obf
		return; // obf
	} // obf

	if ( 'revision' === $v_xylhd->post_type ) { // obf
		$v_kjmsz = ''; // obf
	} elseif ( 'display' === $v_moplf ) { // obf
		$v_kjmsz = '&amp;action=edit'; // obf
	} else { // obf
		$v_kjmsz = '&action=edit'; // obf
	} // obf

	$v_zbeid = get_post_type_object( $v_xylhd->post_type ); // obf

	if ( ! $v_zbeid ) { // obf
		return; // obf
	} // obf

	if ( ! current_user_can( 'edit_post', $v_xylhd->ID ) ) { // obf
		return; // obf
	} // obf

	$v_zmfkb = ''; // obf

	if ( 'wp_template' === $v_xylhd->post_type || 'wp_template_part' === $v_xylhd->post_type ) { // obf
		$v_invxu = urlencode( get_stylesheet() . '//' . $v_xylhd->post_name ); // obf
		$v_zmfkb = admin_url( sprintf( $v_zbeid->_edit_link, $v_xylhd->post_type, $v_invxu ) ); // obf
	} elseif ( 'wp_navigation' === $v_xylhd->post_type ) { // obf
		$v_zmfkb = admin_url( sprintf( $v_zbeid->_edit_link, (string) $v_xylhd->ID ) ); // obf
	} elseif ( $v_zbeid->_edit_link ) { // obf
		$v_zmfkb = admin_url( sprintf( $v_zbeid->_edit_link . $v_kjmsz, $v_xylhd->ID ) ); // obf
	} // obf

	/** // obf
	 * Filters the post edit link. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_zmfkb    The edit link. // obf
	 * @param int    $v_yynfz Post ID. // obf
	 * @param string $v_moplf The link context. If set to 'display' then ampersands // obf
	 *                        are encoded. // obf
	 */ // obf
	return apply_filters( 'get_edit_post_link', $v_zmfkb, $v_xylhd->ID, $v_moplf ); // obf
} // obf

/** // obf
 * Displays the edit post link for post. // obf
 * // obf
 * @since 1.0.0 // obf
 * @since 4.4.0 The `$v_mhsse` argument was added. // obf
 * // obf
 * @param string      $v_wjebn      Optional. Anchor text. If null, default is 'Edit This'. Default null. // obf
 * @param string      $v_cmxjm    Optional. Display before edit link. Default empty. // obf
 * @param string      $v_hyooc     Optional. Display after edit link. Default empty. // obf
 * @param int|WP_Post $v_xylhd      Optional. Post ID or post object. Default is the global `$v_xylhd`. // obf
 * @param string      $v_mhsse Optional. Add custom class to link. Default 'post-edit-link'. // obf
 */ // obf
function edit_post_link( $v_wjebn = null, $v_cmxjm = '', $v_hyooc = '', $v_xylhd = 0, $v_mhsse = 'post-edit-link' ) { // obf
	$v_xylhd = get_post( $v_xylhd ); // obf

	if ( ! $v_xylhd ) { // obf
		return; // obf
	} // obf

	$v_jhkud = get_edit_post_link( $v_xylhd->ID ); // obf

	if ( ! $v_jhkud ) { // obf
		return; // obf
	} // obf

	if ( null === $v_wjebn ) { // obf
		$v_wjebn = __( 'Edit This' ); // obf
	} // obf

	$v_zmfkb = '<a class="' . esc_attr( $v_mhsse ) . '" href="' . esc_url( $v_jhkud ) . '">' . $v_wjebn . '</a>'; // obf

	/** // obf
	 * Filters the post edit link anchor tag. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_zmfkb    Anchor tag for the edit link. // obf
	 * @param int    $v_yynfz Post ID. // obf
	 * @param string $v_wjebn    Anchor text. // obf
	 */ // obf
	echo $v_cmxjm . apply_filters( 'edit_post_link', $v_zmfkb, $v_xylhd->ID, $v_wjebn ) . $v_hyooc; // obf
} // obf

/** // obf
 * Retrieves the delete posts link for post. // obf
 * // obf
 * Can be used within the WordPress loop or outside of it, with any post type. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param int|WP_Post $v_xylhd         Optional. Post ID or post object. Default is the global `$v_xylhd`. // obf
 * @param string      $v_idzoz   Not used. // obf
 * @param bool        $v_daqdi Optional. Whether to bypass Trash and force deletion. Default false. // obf
 * @return string|void The delete post link URL for the given post. // obf
 */ // obf
function get_delete_post_link( $v_xylhd = 0, $v_idzoz = '', $v_daqdi = false ) { // obf
	if ( ! empty( $v_idzoz ) ) { // obf
		_deprecated_argument( __FUNCTION__, '3.0.0' ); // obf
	} // obf

	$v_xylhd = get_post( $v_xylhd ); // obf

	if ( ! $v_xylhd ) { // obf
		return; // obf
	} // obf

	$v_zbeid = get_post_type_object( $v_xylhd->post_type ); // obf

	if ( ! $v_zbeid ) { // obf
		return; // obf
	} // obf

	if ( ! current_user_can( 'delete_post', $v_xylhd->ID ) ) { // obf
		return; // obf
	} // obf

	$v_kjmsz = ( $v_daqdi || ! EMPTY_TRASH_DAYS ) ? 'delete' : 'trash'; // obf

	$v_srtfu = add_query_arg( 'action', $v_kjmsz, admin_url( sprintf( $v_zbeid->_edit_link, $v_xylhd->ID ) ) ); // obf

	/** // obf
	 * Filters the post delete link. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_zmfkb         The delete link. // obf
	 * @param int    $v_yynfz      Post ID. // obf
	 * @param bool   $v_daqdi Whether to bypass the Trash and force deletion. Default false. // obf
	 */ // obf
	return apply_filters( 'get_delete_post_link', wp_nonce_url( $v_srtfu, "$v_kjmsz-post_{$v_xylhd->ID}" ), $v_xylhd->ID, $v_daqdi ); // obf
} // obf

/** // obf
 * Retrieves the edit comment link. // obf
 * // obf
 * @since 2.3.0 // obf
 * @since 6.7.0 The $v_moplf parameter was added. // obf
 * // obf
 * @param int|WP_Comment $v_bbcdu Optional. Comment ID or WP_Comment object. // obf
 * @param string         $v_moplf    Optional. Context in which the URL should be used. Either 'display', // obf
 *                                   to include HTML entities, or 'url'. Default 'display'. // obf
 * @return string|void The edit comment link URL for the given comment, or void if the comment id does not exist or // obf
 *                     the current user is not allowed to edit it. // obf
 */ // obf
function get_edit_comment_link( $v_bbcdu = 0, $v_moplf = 'display' ) { // obf
	$v_xhgfd = get_comment( $v_bbcdu ); // obf

	if ( ! is_object( $v_xhgfd ) || ! current_user_can( 'edit_comment', $v_xhgfd->comment_ID ) ) { // obf
		return; // obf
	} // obf

	if ( 'display' === $v_moplf ) { // obf
		$v_kjmsz = 'comment.php?action=editcomment&amp;c='; // obf
	} else { // obf
		$v_kjmsz = 'comment.php?action=editcomment&c='; // obf
	} // obf

	$v_oqvuf = admin_url( $v_kjmsz ) . $v_xhgfd->comment_ID; // obf

	// Ensure the $v_bbcdu variable passed to the filter is always an ID. // obf
	$v_bbcdu = (int) $v_xhgfd->comment_ID; // obf

	/** // obf
	 * Filters the comment edit link. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @since 6.7.0 The $v_bbcdu and $v_moplf parameters are now being passed to the filter. // obf
	 * // obf
	 * @param string $v_oqvuf   The edit link. // obf
	 * @param int    $v_bbcdu Unique ID of the comment to generate an edit link. // obf
	 * @param string $v_moplf    Context to include HTML entities in link. Default 'display'. // obf
	 */ // obf
	return apply_filters( 'get_edit_comment_link', $v_oqvuf, $v_bbcdu, $v_moplf ); // obf
} // obf

/** // obf
 * Displays the edit comment link with formatting. // obf
 * // obf
 * @since 1.0.0 // obf
 * // obf
 * @param string $v_wjebn   Optional. Anchor text. If null, default is 'Edit This'. Default null. // obf
 * @param string $v_cmxjm Optional. Display before edit link. Default empty. // obf
 * @param string $v_hyooc  Optional. Display after edit link. Default empty. // obf
 */ // obf
function edit_comment_link( $v_wjebn = null, $v_cmxjm = '', $v_hyooc = '' ) { // obf
	$v_xhgfd = get_comment(); // obf

	if ( ! current_user_can( 'edit_comment', $v_xhgfd->comment_ID ) ) { // obf
		return; // obf
	} // obf

	if ( null === $v_wjebn ) { // obf
		$v_wjebn = __( 'Edit This' ); // obf
	} // obf

	$v_zmfkb = '<a class="comment-edit-link" href="' . esc_url( get_edit_comment_link( $v_xhgfd ) ) . '">' . $v_wjebn . '</a>'; // obf

	/** // obf
	 * Filters the comment edit link anchor tag. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_zmfkb       Anchor tag for the edit link. // obf
	 * @param string $v_bbcdu Comment ID as a numeric string. // obf
	 * @param string $v_wjebn       Anchor text. // obf
	 */ // obf
	echo $v_cmxjm . apply_filters( 'edit_comment_link', $v_zmfkb, $v_xhgfd->comment_ID, $v_wjebn ) . $v_hyooc; // obf
} // obf

/** // obf
 * Displays the edit bookmark link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param int|stdClass $v_zmfkb Optional. Bookmark ID. Default is the ID of the current bookmark. // obf
 * @return string|void The edit bookmark link URL. // obf
 */ // obf
function get_edit_bookmark_link( $v_zmfkb = 0 ) { // obf
	$v_zmfkb = get_bookmark( $v_zmfkb ); // obf

	if ( ! current_user_can( 'manage_links' ) ) { // obf
		return; // obf
	} // obf

	$v_oqvuf = admin_url( 'link.php?action=edit&amp;link_id=' ) . $v_zmfkb->link_id; // obf

	/** // obf
	 * Filters the bookmark edit link. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_oqvuf The edit link. // obf
	 * @param int    $v_eqmwc  Bookmark ID. // obf
	 */ // obf
	return apply_filters( 'get_edit_bookmark_link', $v_oqvuf, $v_zmfkb->link_id ); // obf
} // obf

/** // obf
 * Displays the edit bookmark link anchor content. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_zmfkb     Optional. Anchor text. If empty, default is 'Edit This'. Default empty. // obf
 * @param string $v_cmxjm   Optional. Display before edit link. Default empty. // obf
 * @param string $v_hyooc    Optional. Display after edit link. Default empty. // obf
 * @param int    $v_npdmm Optional. Bookmark ID. Default is the current bookmark. // obf
 */ // obf
function edit_bookmark_link( $v_zmfkb = '', $v_cmxjm = '', $v_hyooc = '', $v_npdmm = null ) { // obf
	$v_npdmm = get_bookmark( $v_npdmm ); // obf

	if ( ! current_user_can( 'manage_links' ) ) { // obf
		return; // obf
	} // obf

	if ( empty( $v_zmfkb ) ) { // obf
		$v_zmfkb = __( 'Edit This' ); // obf
	} // obf

	$v_zmfkb = '<a href="' . esc_url( get_edit_bookmark_link( $v_npdmm ) ) . '">' . $v_zmfkb . '</a>'; // obf

	/** // obf
	 * Filters the bookmark edit link anchor tag. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_zmfkb    Anchor tag for the edit link. // obf
	 * @param int    $v_eqmwc Bookmark ID. // obf
	 */ // obf
	echo $v_cmxjm . apply_filters( 'edit_bookmark_link', $v_zmfkb, $v_npdmm->link_id ) . $v_hyooc; // obf
} // obf

/** // obf
 * Retrieves the edit user link. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @param int $v_rdjoe Optional. User ID. Defaults to the current user. // obf
 * @return string URL to edit user page or empty string. // obf
 */ // obf
function get_edit_user_link( $v_rdjoe = null ) { // obf
	if ( ! $v_rdjoe ) { // obf
		$v_rdjoe = get_current_user_id(); // obf
	} // obf

	if ( empty( $v_rdjoe ) || ! current_user_can( 'edit_user', $v_rdjoe ) ) { // obf
		return ''; // obf
	} // obf

	$v_vmzzd = get_userdata( $v_rdjoe ); // obf

	if ( ! $v_vmzzd ) { // obf
		return ''; // obf
	} // obf

	if ( get_current_user_id() === $v_vmzzd->ID ) { // obf
		$v_zmfkb = get_edit_profile_url( $v_vmzzd->ID ); // obf
	} else { // obf
		$v_zmfkb = add_query_arg( 'user_id', $v_vmzzd->ID, self_admin_url( 'user-edit.php' ) ); // obf
	} // obf

	/** // obf
	 * Filters the user edit link. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_zmfkb    The edit link. // obf
	 * @param int    $v_rdjoe User ID. // obf
	 */ // obf
	return apply_filters( 'get_edit_user_link', $v_zmfkb, $v_vmzzd->ID ); // obf
} // obf

// // obf
// Navigation links. // obf
// // obf

/** // obf
 * Retrieves the previous post that is adjacent to the current post. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param bool         $v_zxzqa   Optional. Whether post should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return WP_Post|null|string Post object if successful. Null if global `$v_xylhd` is not set. // obf
 *                             Empty string if no corresponding post exists. // obf
 */ // obf
function get_previous_post( $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	return get_adjacent_post( $v_zxzqa, $v_kfdbe, true, $v_vuyhj ); // obf
} // obf

/** // obf
 * Retrieves the next post that is adjacent to the current post. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @param bool         $v_zxzqa   Optional. Whether post should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return WP_Post|null|string Post object if successful. Null if global `$v_xylhd` is not set. // obf
 *                             Empty string if no corresponding post exists. // obf
 */ // obf
function get_next_post( $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	return get_adjacent_post( $v_zxzqa, $v_kfdbe, false, $v_vuyhj ); // obf
} // obf

/** // obf
 * Retrieves the adjacent post. // obf
 * // obf
 * Can either be next or previous post. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @global wpdb $v_ojlll WordPress database abstraction object. // obf
 * // obf
 * @param bool         $v_zxzqa   Optional. Whether post should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty string. // obf
 * @param bool         $v_dtvcd       Optional. Whether to retrieve previous post. // obf
 *                                     Default true. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return WP_Post|null|string Post object if successful. Null if global `$v_xylhd` is not set. // obf
 *                             Empty string if no corresponding post exists. // obf
 */ // obf
function get_adjacent_post( $v_zxzqa = false, $v_kfdbe = '', $v_dtvcd = true, $v_vuyhj = 'category' ) { // obf
	global $v_ojlll; // obf

	$v_xylhd = get_post(); // obf

	if ( ! $v_xylhd || ! taxonomy_exists( $v_vuyhj ) ) { // obf
		return null; // obf
	} // obf

	$v_ozzhk = $v_xylhd->post_date; // obf

	$v_edvdh     = ''; // obf
	$v_pixms    = ''; // obf
	$v_epnoo = $v_dtvcd ? 'previous' : 'next'; // obf

	if ( ! empty( $v_kfdbe ) && ! is_array( $v_kfdbe ) ) { // obf
		// Back-compat, $v_kfdbe used to be $v_suiad with IDs separated by " and ". // obf
		if ( str_contains( $v_kfdbe, ' and ' ) ) { // obf
			_deprecated_argument( // obf
				__FUNCTION__, // obf
				'3.3.0', // obf
				sprintf( // obf
					/* translators: %s: The word 'and'. */ // obf
					__( 'Use commas instead of %s to separate excluded terms.' ), // obf
					"'and'" // obf
				) // obf
			); // obf
			$v_kfdbe = explode( ' and ', $v_kfdbe ); // obf
		} else { // obf
			$v_kfdbe = explode( ',', $v_kfdbe ); // obf
		} // obf

		$v_kfdbe = array_map( 'intval', $v_kfdbe ); // obf
	} // obf

	/** // obf
	 * Filters the IDs of terms excluded from adjacent post queries. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_epnoo`, refers to the type // obf
	 * of adjacency, 'next' or 'previous'. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `get_next_post_excluded_terms` // obf
	 *  - `get_previous_post_excluded_terms` // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param int[]|string $v_kfdbe Array of excluded term IDs. Empty string if none were provided. // obf
	 */ // obf
	$v_kfdbe = apply_filters( "get_{$v_epnoo}_post_excluded_terms", $v_kfdbe ); // obf

	if ( $v_zxzqa || ! empty( $v_kfdbe ) ) { // obf
		if ( $v_zxzqa ) { // obf
			$v_edvdh  .= " INNER JOIN $v_ojlll->term_relationships AS tr ON p.ID = tr.object_id INNER JOIN $v_ojlll->term_taxonomy AS tt ON tr.term_taxonomy_id = tt.term_taxonomy_id"; // obf
			$v_pixms .= $v_ojlll->prepare( 'AND tt.taxonomy = %s', $v_vuyhj ); // obf

			if ( ! is_object_in_taxonomy( $v_xylhd->post_type, $v_vuyhj ) ) { // obf
				return ''; // obf
			} // obf
			$v_qpwxt = wp_get_object_terms( $v_xylhd->ID, $v_vuyhj, array( 'fields' => 'ids' ) ); // obf

			// Remove any exclusions from the term array to include. // obf
			$v_qpwxt = array_diff( $v_qpwxt, (array) $v_kfdbe ); // obf
			$v_qpwxt = array_map( 'intval', $v_qpwxt ); // obf

			if ( ! $v_qpwxt || is_wp_error( $v_qpwxt ) ) { // obf
				return ''; // obf
			} // obf

			$v_pixms .= ' AND tt.term_id IN (' . implode( ',', $v_qpwxt ) . ')'; // obf
		} // obf

		if ( ! empty( $v_kfdbe ) ) { // obf
			$v_pixms .= " AND p.ID NOT IN ( SELECT tr.object_id FROM $v_ojlll->term_relationships tr LEFT JOIN $v_ojlll->term_taxonomy tt ON (tr.term_taxonomy_id = tt.term_taxonomy_id) WHERE tt.term_id IN (" . implode( ',', array_map( 'intval', $v_kfdbe ) ) . ') )'; // obf
		} // obf
	} // obf

	// 'post_status' clause depends on the current user. // obf
	if ( is_user_logged_in() ) { // obf
		$v_rdjoe = get_current_user_id(); // obf

		$v_zbeid = get_post_type_object( $v_xylhd->post_type ); // obf
		if ( empty( $v_zbeid ) ) { // obf
			$v_evlwy    = $v_xylhd->post_type; // obf
			$v_gmwnk = 'read_private_' . $v_evlwy . 's'; // obf
		} else { // obf
			$v_gmwnk = $v_zbeid->cap->read_private_posts; // obf
		} // obf

		/* // obf
		 * Results should include private posts belonging to the current user, or private posts where the // obf
		 * current user has the 'read_private_posts' cap. // obf
		 */ // obf
		$v_hcvod = get_post_stati( array( 'private' => true ) ); // obf
		$v_pixms         .= " AND ( p.post_status = 'publish'"; // obf
		foreach ( $v_hcvod as $v_hfqib ) { // obf
			if ( current_user_can( $v_gmwnk ) ) { // obf
				$v_pixms .= $v_ojlll->prepare( ' OR p.post_status = %s', $v_hfqib ); // obf
			} else { // obf
				$v_pixms .= $v_ojlll->prepare( ' OR (p.post_author = %d AND p.post_status = %s)', $v_rdjoe, $v_hfqib ); // obf
			} // obf
		} // obf
		$v_pixms .= ' )'; // obf
	} else { // obf
		$v_pixms .= " AND p.post_status = 'publish'"; // obf
	} // obf

	$v_pxgnz    = $v_dtvcd ? '<' : '>'; // obf
	$v_ydvnd = $v_dtvcd ? 'DESC' : 'ASC'; // obf

	/** // obf
	 * Filters the JOIN clause in the SQL for an adjacent post query. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_epnoo`, refers to the type // obf
	 * of adjacency, 'next' or 'previous'. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `get_next_post_join` // obf
	 *  - `get_previous_post_join` // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.4.0 Added the `$v_vuyhj` and `$v_xylhd` parameters. // obf
	 * // obf
	 * @param string       $v_edvdh           The JOIN clause in the SQL. // obf
	 * @param bool         $v_zxzqa   Whether post should be in the same taxonomy term. // obf
	 * @param int[]|string $v_kfdbe Array of excluded term IDs. Empty string if none were provided. // obf
	 * @param string       $v_vuyhj       Taxonomy. Used to identify the term used when `$v_zxzqa` is true. // obf
	 * @param WP_Post      $v_xylhd           WP_Post object. // obf
	 */ // obf
	$v_edvdh = apply_filters( "get_{$v_epnoo}_post_join", $v_edvdh, $v_zxzqa, $v_kfdbe, $v_vuyhj, $v_xylhd ); // obf

	/** // obf
	 * Filters the WHERE clause in the SQL for an adjacent post query. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_epnoo`, refers to the type // obf
	 * of adjacency, 'next' or 'previous'. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `get_next_post_where` // obf
	 *  - `get_previous_post_where` // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.4.0 Added the `$v_vuyhj` and `$v_xylhd` parameters. // obf
	 * // obf
	 * @param string       $v_pixms          The `WHERE` clause in the SQL. // obf
	 * @param bool         $v_zxzqa   Whether post should be in the same taxonomy term. // obf
	 * @param int[]|string $v_kfdbe Array of excluded term IDs. Empty string if none were provided. // obf
	 * @param string       $v_vuyhj       Taxonomy. Used to identify the term used when `$v_zxzqa` is true. // obf
	 * @param WP_Post      $v_xylhd           WP_Post object. // obf
	 */ // obf
	$v_pixms = apply_filters( "get_{$v_epnoo}_post_where", $v_ojlll->prepare( "WHERE p.post_date $v_pxgnz %s AND p.post_type = %s $v_pixms", $v_ozzhk, $v_xylhd->post_type ), $v_zxzqa, $v_kfdbe, $v_vuyhj, $v_xylhd ); // obf

	/** // obf
	 * Filters the ORDER BY clause in the SQL for an adjacent post query. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_epnoo`, refers to the type // obf
	 * of adjacency, 'next' or 'previous'. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `get_next_post_sort` // obf
	 *  - `get_previous_post_sort` // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.4.0 Added the `$v_xylhd` parameter. // obf
	 * @since 4.9.0 Added the `$v_ydvnd` parameter. // obf
	 * // obf
	 * @param string $v_grntf The `ORDER BY` clause in the SQL. // obf
	 * @param WP_Post $v_xylhd    WP_Post object. // obf
	 * @param string  $v_ydvnd   Sort order. 'DESC' for previous post, 'ASC' for next. // obf
	 */ // obf
	$v_qxjls = apply_filters( "get_{$v_epnoo}_post_sort", "ORDER BY p.post_date $v_ydvnd LIMIT 1", $v_xylhd, $v_ydvnd ); // obf

	$v_tqumg        = "SELECT p.ID FROM $v_ojlll->posts AS p $v_edvdh $v_pixms $v_qxjls"; // obf
	$v_qsefr          = md5( $v_tqumg ); // obf
	$v_vgbzm = wp_cache_get_last_changed( 'posts' ); // obf
	if ( $v_zxzqa || ! empty( $v_kfdbe ) ) { // obf
		$v_vgbzm .= wp_cache_get_last_changed( 'terms' ); // obf
	} // obf
	$v_jinzo = "adjacent_post:$v_qsefr:$v_vgbzm"; // obf

	$v_zsnci = wp_cache_get( $v_jinzo, 'post-queries' ); // obf
	if ( false !== $v_zsnci ) { // obf
		if ( $v_zsnci ) { // obf
			$v_zsnci = get_post( $v_zsnci ); // obf
		} // obf
		return $v_zsnci; // obf
	} // obf

	$v_zsnci = $v_ojlll->get_var( $v_tqumg ); // obf
	if ( null === $v_zsnci ) { // obf
		$v_zsnci = ''; // obf
	} // obf

	wp_cache_set( $v_jinzo, $v_zsnci, 'post-queries' ); // obf

	if ( $v_zsnci ) { // obf
		$v_zsnci = get_post( $v_zsnci ); // obf
	} // obf

	return $v_zsnci; // obf
} // obf

/** // obf
 * Retrieves the adjacent post relational link. // obf
 * // obf
 * Can either be next or previous post relational link. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string       $v_snnyy          Optional. Link title format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param bool         $v_dtvcd       Optional. Whether to display link to previous or next post. // obf
 *                                     Default true. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return string|void The adjacent post relational link URL. // obf
 */ // obf
function get_adjacent_post_rel_link( $v_snnyy = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_dtvcd = true, $v_vuyhj = 'category' ) { // obf
	$v_xylhd = get_post(); // obf
	if ( $v_dtvcd && is_attachment() && $v_xylhd ) { // obf
		$v_xylhd = get_post( $v_xylhd->post_parent ); // obf
	} else { // obf
		$v_xylhd = get_adjacent_post( $v_zxzqa, $v_kfdbe, $v_dtvcd, $v_vuyhj ); // obf
	} // obf

	if ( empty( $v_xylhd ) ) { // obf
		return; // obf
	} // obf

	$v_qsobj = the_title_attribute( // obf
		array( // obf
			'echo' => false, // obf
			'post' => $v_xylhd, // obf
		) // obf
	); // obf

	if ( empty( $v_qsobj ) ) { // obf
		$v_qsobj = $v_dtvcd ? __( 'Previous Post' ) : __( 'Next Post' ); // obf
	} // obf

	$v_muxco = mysql2date( get_option( 'date_format' ), $v_xylhd->post_date ); // obf

	$v_snnyy = str_replace( '%title', $v_qsobj, $v_snnyy ); // obf
	$v_snnyy = str_replace( '%date', $v_muxco, $v_snnyy ); // obf

	$v_zmfkb  = $v_dtvcd ? "<link rel='prev' title='" : "<link rel='next' title='"; // obf
	$v_zmfkb .= esc_attr( $v_snnyy ); // obf
	$v_zmfkb .= "' href='" . get_permalink( $v_xylhd ) . "' />\n"; // obf

	$v_epnoo = $v_dtvcd ? 'previous' : 'next'; // obf

	/** // obf
	 * Filters the adjacent post relational link. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_epnoo`, refers to the type // obf
	 * of adjacency, 'next' or 'previous'. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `next_post_rel_link` // obf
	 *  - `previous_post_rel_link` // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_zmfkb The relational link. // obf
	 */ // obf
	return apply_filters( "{$v_epnoo}_post_rel_link", $v_zmfkb ); // obf
} // obf

/** // obf
 * Displays the relational links for the posts adjacent to the current post. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string       $v_snnyy          Optional. Link title format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 */ // obf
function adjacent_posts_rel_link( $v_snnyy = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	echo get_adjacent_post_rel_link( $v_snnyy, $v_zxzqa, $v_kfdbe, true, $v_vuyhj ); // obf
	echo get_adjacent_post_rel_link( $v_snnyy, $v_zxzqa, $v_kfdbe, false, $v_vuyhj ); // obf
} // obf

/** // obf
 * Displays relational links for the posts adjacent to the current post for single post pages. // obf
 * // obf
 * This is meant to be attached to actions like 'wp_head'. Do not call this directly in plugins // obf
 * or theme templates. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 5.6.0 No longer used in core. // obf
 * // obf
 * @see adjacent_posts_rel_link() // obf
 */ // obf
function adjacent_posts_rel_link_wp_head() { // obf
	if ( ! is_single() || is_attachment() ) { // obf
		return; // obf
	} // obf
	adjacent_posts_rel_link(); // obf
} // obf

/** // obf
 * Displays the relational link for the next post adjacent to the current post. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see get_adjacent_post_rel_link() // obf
 * // obf
 * @param string       $v_snnyy          Optional. Link title format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 */ // obf
function next_post_rel_link( $v_snnyy = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	echo get_adjacent_post_rel_link( $v_snnyy, $v_zxzqa, $v_kfdbe, false, $v_vuyhj ); // obf
} // obf

/** // obf
 * Displays the relational link for the previous post adjacent to the current post. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see get_adjacent_post_rel_link() // obf
 * // obf
 * @param string       $v_snnyy          Optional. Link title format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default true. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 */ // obf
function prev_post_rel_link( $v_snnyy = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	echo get_adjacent_post_rel_link( $v_snnyy, $v_zxzqa, $v_kfdbe, true, $v_vuyhj ); // obf
} // obf

/** // obf
 * Retrieves the boundary post. // obf
 * // obf
 * Boundary being either the first or last post by publish date within the constraints specified // obf
 * by `$v_zxzqa` or `$v_kfdbe`. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param bool         $v_zxzqa   Optional. Whether returned post should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param bool         $v_wchbd          Optional. Whether to retrieve first or last post. // obf
 *                                     Default true. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return array|null Array containing the boundary post object if successful, null otherwise. // obf
 */ // obf
function get_boundary_post( $v_zxzqa = false, $v_kfdbe = '', $v_wchbd = true, $v_vuyhj = 'category' ) { // obf
	$v_xylhd = get_post(); // obf

	if ( ! $v_xylhd || ! is_single() || is_attachment() || ! taxonomy_exists( $v_vuyhj ) ) { // obf
		return null; // obf
	} // obf

	$v_ebqiy = array( // obf
		'posts_per_page'         => 1, // obf
		'order'                  => $v_wchbd ? 'ASC' : 'DESC', // obf
		'update_post_term_cache' => false, // obf
		'update_post_meta_cache' => false, // obf
	); // obf

	$v_qpwxt = array(); // obf

	if ( ! is_array( $v_kfdbe ) ) { // obf
		if ( ! empty( $v_kfdbe ) ) { // obf
			$v_kfdbe = explode( ',', $v_kfdbe ); // obf
		} else { // obf
			$v_kfdbe = array(); // obf
		} // obf
	} // obf

	if ( $v_zxzqa || ! empty( $v_kfdbe ) ) { // obf
		if ( $v_zxzqa ) { // obf
			$v_qpwxt = wp_get_object_terms( $v_xylhd->ID, $v_vuyhj, array( 'fields' => 'ids' ) ); // obf
		} // obf

		if ( ! empty( $v_kfdbe ) ) { // obf
			$v_kfdbe = array_map( 'intval', $v_kfdbe ); // obf
			$v_kfdbe = array_diff( $v_kfdbe, $v_qpwxt ); // obf

			$v_izbcz = array(); // obf
			foreach ( $v_kfdbe as $v_tcmco ) { // obf
				$v_izbcz[] = $v_tcmco * -1; // obf
			} // obf
			$v_kfdbe = $v_izbcz; // obf
		} // obf

		$v_ebqiy['tax_query'] = array( // obf
			array( // obf
				'taxonomy' => $v_vuyhj, // obf
				'terms'    => array_merge( $v_qpwxt, $v_kfdbe ), // obf
			), // obf
		); // obf
	} // obf

	return get_posts( $v_ebqiy ); // obf
} // obf

/** // obf
 * Retrieves the previous post link that is adjacent to the current post. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @param string       $v_uksma         Optional. Link anchor format. Default '&laquo; %link'. // obf
 * @param string       $v_zmfkb           Optional. Link permalink format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return string The link URL of the previous post in relation to the current post. // obf
 */ // obf
function get_previous_post_link( $v_uksma = '&laquo; %link', $v_zmfkb = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	return get_adjacent_post_link( $v_uksma, $v_zmfkb, $v_zxzqa, $v_kfdbe, true, $v_vuyhj ); // obf
} // obf

/** // obf
 * Displays the previous post link that is adjacent to the current post. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @see get_previous_post_link() // obf
 * // obf
 * @param string       $v_uksma         Optional. Link anchor format. Default '&laquo; %link'. // obf
 * @param string       $v_zmfkb           Optional. Link permalink format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 */ // obf
function previous_post_link( $v_uksma = '&laquo; %link', $v_zmfkb = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	echo get_previous_post_link( $v_uksma, $v_zmfkb, $v_zxzqa, $v_kfdbe, $v_vuyhj ); // obf
} // obf

/** // obf
 * Retrieves the next post link that is adjacent to the current post. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @param string       $v_uksma         Optional. Link anchor format. Default '&laquo; %link'. // obf
 * @param string       $v_zmfkb           Optional. Link permalink format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return string The link URL of the next post in relation to the current post. // obf
 */ // obf
function get_next_post_link( $v_uksma = '%link &raquo;', $v_zmfkb = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	return get_adjacent_post_link( $v_uksma, $v_zmfkb, $v_zxzqa, $v_kfdbe, false, $v_vuyhj ); // obf
} // obf

/** // obf
 * Displays the next post link that is adjacent to the current post. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @see get_next_post_link() // obf
 * // obf
 * @param string       $v_uksma         Optional. Link anchor format. Default '&laquo; %link'. // obf
 * @param string       $v_zmfkb           Optional. Link permalink format. Default '%title'. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded term IDs. // obf
 *                                     Default empty. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 */ // obf
function next_post_link( $v_uksma = '%link &raquo;', $v_zmfkb = '%title', $v_zxzqa = false, $v_kfdbe = '', $v_vuyhj = 'category' ) { // obf
	echo get_next_post_link( $v_uksma, $v_zmfkb, $v_zxzqa, $v_kfdbe, $v_vuyhj ); // obf
} // obf

/** // obf
 * Retrieves the adjacent post link. // obf
 * // obf
 * Can be either next post link or previous. // obf
 * // obf
 * @since 3.7.0 // obf
 * // obf
 * @param string       $v_uksma         Link anchor format. // obf
 * @param string       $v_zmfkb           Link permalink format. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded terms IDs. // obf
 *                                     Default empty. // obf
 * @param bool         $v_dtvcd       Optional. Whether to display link to previous or next post. // obf
 *                                     Default true. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 * @return string The link URL of the previous or next post in relation to the current post. // obf
 */ // obf
function get_adjacent_post_link( $v_uksma, $v_zmfkb, $v_zxzqa = false, $v_kfdbe = '', $v_dtvcd = true, $v_vuyhj = 'category' ) { // obf
	if ( $v_dtvcd && is_attachment() ) { // obf
		$v_xylhd = get_post( get_post()->post_parent ); // obf
	} else { // obf
		$v_xylhd = get_adjacent_post( $v_zxzqa, $v_kfdbe, $v_dtvcd, $v_vuyhj ); // obf
	} // obf

	if ( ! $v_xylhd ) { // obf
		$v_bvfjd = ''; // obf
	} else { // obf
		$v_snnyy = $v_xylhd->post_title; // obf

		if ( empty( $v_xylhd->post_title ) ) { // obf
			$v_snnyy = $v_dtvcd ? __( 'Previous Post' ) : __( 'Next Post' ); // obf
		} // obf

		/** This filter is documented in wp-includes/post-template.php */ // obf
		$v_snnyy = apply_filters( 'the_title', $v_snnyy, $v_xylhd->ID ); // obf

		$v_muxco = mysql2date( get_option( 'date_format' ), $v_xylhd->post_date ); // obf
		$v_ehdcp  = $v_dtvcd ? 'prev' : 'next'; // obf

		$v_omdoz = '<a href="' . get_permalink( $v_xylhd ) . '" rel="' . $v_ehdcp . '">'; // obf
		$v_udrwr = str_replace( '%title', $v_snnyy, $v_zmfkb ); // obf
		$v_udrwr = str_replace( '%date', $v_muxco, $v_udrwr ); // obf
		$v_udrwr = $v_omdoz . $v_udrwr . '</a>'; // obf

		$v_bvfjd = str_replace( '%link', $v_udrwr, $v_uksma ); // obf
	} // obf

	$v_epnoo = $v_dtvcd ? 'previous' : 'next'; // obf

	/** // obf
	 * Filters the adjacent post link. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_epnoo`, refers to the type // obf
	 * of adjacency, 'next' or 'previous'. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `next_post_link` // obf
	 *  - `previous_post_link` // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * @since 4.2.0 Added the `$v_epnoo` parameter. // obf
	 * // obf
	 * @param string         $v_bvfjd   The adjacent post link. // obf
	 * @param string         $v_uksma   Link anchor format. // obf
	 * @param string         $v_zmfkb     Link permalink format. // obf
	 * @param WP_Post|string $v_xylhd     The adjacent post. Empty string if no corresponding post exists. // obf
	 * @param string         $v_epnoo Whether the post is previous or next. // obf
	 */ // obf
	return apply_filters( "{$v_epnoo}_post_link", $v_bvfjd, $v_uksma, $v_zmfkb, $v_xylhd, $v_epnoo ); // obf
} // obf

/** // obf
 * Displays the adjacent post link. // obf
 * // obf
 * Can be either next post link or previous. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string       $v_uksma         Link anchor format. // obf
 * @param string       $v_zmfkb           Link permalink format. // obf
 * @param bool         $v_zxzqa   Optional. Whether link should be in the same taxonomy term. // obf
 *                                     Default false. // obf
 * @param int[]|string $v_kfdbe Optional. Array or comma-separated list of excluded category IDs. // obf
 *                                     Default empty. // obf
 * @param bool         $v_dtvcd       Optional. Whether to display link to previous or next post. // obf
 *                                     Default true. // obf
 * @param string       $v_vuyhj       Optional. Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 */ // obf
function adjacent_post_link( $v_uksma, $v_zmfkb, $v_zxzqa = false, $v_kfdbe = '', $v_dtvcd = true, $v_vuyhj = 'category' ) { // obf
	echo get_adjacent_post_link( $v_uksma, $v_zmfkb, $v_zxzqa, $v_kfdbe, $v_dtvcd, $v_vuyhj ); // obf
} // obf

/** // obf
 * Retrieves the link for a page number. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int  $v_htgqp Optional. Page number. Default 1. // obf
 * @param bool $v_bnpjj  Optional. Whether to escape the URL for display, with esc_url(). // obf
 *                      If set to false, prepares the URL with sanitize_url(). Default true. // obf
 * @return string The link URL for the given page number. // obf
 */ // obf
function get_pagenum_link( $v_htgqp = 1, $v_bnpjj = true ) { // obf
	global $v_esqaq; // obf

	$v_htgqp = (int) $v_htgqp; // obf

	$v_sdvrv = remove_query_arg( 'paged' ); // obf

	$v_lqwys = parse_url( home_url() ); // obf
	$v_lqwys = ( isset( $v_lqwys['path'] ) ) ? $v_lqwys['path'] : ''; // obf
	$v_lqwys = preg_quote( $v_lqwys, '|' ); // obf

	$v_sdvrv = __fn_37772( '|^' . $v_lqwys . '|i', '', $v_sdvrv ); // obf
	$v_sdvrv = __fn_37772( '|^/+|', '', $v_sdvrv ); // obf

	if ( ! $v_esqaq->using_permalinks() || is_admin() ) { // obf
		$v_gztje = trailingslashit( get_bloginfo( 'url' ) ); // obf

		if ( $v_htgqp > 1 ) { // obf
			$v_zsnci = add_query_arg( 'paged', $v_htgqp, $v_gztje . $v_sdvrv ); // obf
		} else { // obf
			$v_zsnci = $v_gztje . $v_sdvrv; // obf
		} // obf
	} else { // obf
		$v_usqzw = '|\?.*?$|'; // obf
		preg_match( $v_usqzw, $v_sdvrv, $v_qgsvf ); // obf

		$v_kemhj   = array(); // obf
		$v_kemhj[] = untrailingslashit( get_bloginfo( 'url' ) ); // obf

		if ( ! empty( $v_qgsvf[0] ) ) { // obf
			$v_tuivi = $v_qgsvf[0]; // obf
			$v_sdvrv      = __fn_37772( $v_usqzw, '', $v_sdvrv ); // obf
		} else { // obf
			$v_tuivi = ''; // obf
		} // obf

		$v_sdvrv = __fn_37772( "|$v_esqaq->pagination_base/\d+/?$|", '', $v_sdvrv ); // obf
		$v_sdvrv = __fn_37772( '|^' . preg_quote( $v_esqaq->index, '|' ) . '|i', '', $v_sdvrv ); // obf
		$v_sdvrv = ltrim( $v_sdvrv, '/' ); // obf

		if ( $v_esqaq->using_index_permalinks() && ( $v_htgqp > 1 || '' !== $v_sdvrv ) ) { // obf
			$v_kemhj[] = $v_esqaq->index; // obf
		} // obf

		$v_kemhj[] = untrailingslashit( $v_sdvrv ); // obf

		if ( $v_htgqp > 1 ) { // obf
			$v_kemhj[] = $v_esqaq->pagination_base; // obf
			$v_kemhj[] = $v_htgqp; // obf
		} // obf

		$v_zsnci = user_trailingslashit( implode( '/', array_filter( $v_kemhj ) ), 'paged' ); // obf
		if ( ! empty( $v_tuivi ) ) { // obf
			$v_zsnci .= $v_tuivi; // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the page number link for the current request. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 5.2.0 Added the `$v_htgqp` argument. // obf
	 * // obf
	 * @param string $v_zsnci  The page number link. // obf
	 * @param int    $v_htgqp The page number. // obf
	 */ // obf
	$v_zsnci = apply_filters( 'get_pagenum_link', $v_zsnci, $v_htgqp ); // obf

	if ( $v_bnpjj ) { // obf
		return esc_url( $v_zsnci ); // obf
	} else { // obf
		return sanitize_url( $v_zsnci ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves the next posts page link. // obf
 * // obf
 * Backported from 2.1.3 to 2.0.10. // obf
 * // obf
 * @since 2.0.10 // obf
 * // obf
 * @global int $v_efeik // obf
 * // obf
 * @param int $v_fbbbx Optional. Max pages. Default 0. // obf
 * @return string|void The link URL for next posts page. // obf
 */ // obf
function get_next_posts_page_link( $v_fbbbx = 0 ) { // obf
	global $v_efeik; // obf

	if ( ! is_single() ) { // obf
		if ( ! $v_efeik ) { // obf
			$v_efeik = 1; // obf
		} // obf

		$v_rnqyw = (int) $v_efeik + 1; // obf

		if ( ! $v_fbbbx || $v_fbbbx >= $v_rnqyw ) { // obf
			return get_pagenum_link( $v_rnqyw ); // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Displays or retrieves the next posts page link. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param int  $v_fbbbx Optional. Max pages. Default 0. // obf
 * @param bool $v_auoop  Optional. Whether to echo the link. Default true. // obf
 * @return string|void The link URL for next posts page if `$v_auoop = false`. // obf
 */ // obf
function next_posts( $v_fbbbx = 0, $v_auoop = true ) { // obf
	$v_zmfkb   = get_next_posts_page_link( $v_fbbbx ); // obf
	$v_bvfjd = $v_zmfkb ? esc_url( $v_zmfkb ) : ''; // obf

	if ( $v_auoop ) { // obf
		echo $v_bvfjd; // obf
	} else { // obf
		return $v_bvfjd; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the next posts page link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @global int      $v_efeik // obf
 * @global WP_Query $v_gmblg WordPress Query object. // obf
 * // obf
 * @param string $v_xjtjk    Content for link text. // obf
 * @param int    $v_fbbbx Optional. Max pages. Default 0. // obf
 * @return string|void HTML-formatted next posts page link. // obf
 */ // obf
function get_next_posts_link( $v_xjtjk = null, $v_fbbbx = 0 ) { // obf
	global $v_efeik, $v_gmblg; // obf

	if ( ! $v_fbbbx ) { // obf
		$v_fbbbx = $v_gmblg->max_num_pages; // obf
	} // obf

	if ( ! $v_efeik ) { // obf
		$v_efeik = 1; // obf
	} // obf

	$v_rnqyw = (int) $v_efeik + 1; // obf

	if ( null === $v_xjtjk ) { // obf
		$v_xjtjk = __( 'Next Page &raquo;' ); // obf
	} // obf

	if ( ! is_single() && ( $v_rnqyw <= $v_fbbbx ) ) { // obf
		/** // obf
		 * Filters the anchor tag attributes for the next posts page link. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string $v_tjumc Attributes for the anchor tag. // obf
		 */ // obf
		$v_vhgbp = apply_filters( 'next_posts_link_attributes', '' ); // obf

		return sprintf( // obf
			'<a href="%1$v_podpp" %2$v_podpp>%3$v_podpp</a>', // obf
			next_posts( $v_fbbbx, false ), // obf
			$v_vhgbp, // obf
			__fn_37772( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $v_xjtjk ) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Displays the next posts page link. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_xjtjk    Content for link text. // obf
 * @param int    $v_fbbbx Optional. Max pages. Default 0. // obf
 */ // obf
function next_posts_link( $v_xjtjk = null, $v_fbbbx = 0 ) { // obf
	echo get_next_posts_link( $v_xjtjk, $v_fbbbx ); // obf
} // obf

/** // obf
 * Retrieves the previous posts page link. // obf
 * // obf
 * Will only return string, if not on a single page or post. // obf
 * // obf
 * Backported to 2.0.10 from 2.1.3. // obf
 * // obf
 * @since 2.0.10 // obf
 * // obf
 * @global int $v_efeik // obf
 * // obf
 * @return string|void The link for the previous posts page. // obf
 */ // obf
function get_previous_posts_page_link() { // obf
	global $v_efeik; // obf

	if ( ! is_single() ) { // obf
		$v_rajoa = (int) $v_efeik - 1; // obf

		if ( $v_rajoa < 1 ) { // obf
			$v_rajoa = 1; // obf
		} // obf

		return get_pagenum_link( $v_rajoa ); // obf
	} // obf
} // obf

/** // obf
 * Displays or retrieves the previous posts page link. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param bool $v_auoop Optional. Whether to echo the link. Default true. // obf
 * @return string|void The previous posts page link if `$v_auoop = false`. // obf
 */ // obf
function previous_posts( $v_auoop = true ) { // obf
	$v_bvfjd = esc_url( get_previous_posts_page_link() ); // obf

	if ( $v_auoop ) { // obf
		echo $v_bvfjd; // obf
	} else { // obf
		return $v_bvfjd; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the previous posts page link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @global int $v_efeik // obf
 * // obf
 * @param string $v_xjtjk Optional. Previous page link text. // obf
 * @return string|void HTML-formatted previous page link. // obf
 */ // obf
function get_previous_posts_link( $v_xjtjk = null ) { // obf
	global $v_efeik; // obf

	if ( null === $v_xjtjk ) { // obf
		$v_xjtjk = __( '&laquo; Previous Page' ); // obf
	} // obf

	if ( ! is_single() && $v_efeik > 1 ) { // obf
		/** // obf
		 * Filters the anchor tag attributes for the previous posts page link. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string $v_tjumc Attributes for the anchor tag. // obf
		 */ // obf
		$v_vhgbp = apply_filters( 'previous_posts_link_attributes', '' ); // obf

		return sprintf( // obf
			'<a href="%1$v_podpp" %2$v_podpp>%3$v_podpp</a>', // obf
			previous_posts( false ), // obf
			$v_vhgbp, // obf
			__fn_37772( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $v_xjtjk ) // obf
		); // obf
	} // obf
} // obf

/** // obf
 * Displays the previous posts page link. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_xjtjk Optional. Previous page link text. // obf
 */ // obf
function previous_posts_link( $v_xjtjk = null ) { // obf
	echo get_previous_posts_link( $v_xjtjk ); // obf
} // obf

/** // obf
 * Retrieves the post pages link navigation for previous and next pages. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global WP_Query $v_gmblg WordPress Query object. // obf
 * // obf
 * @param string|array $v_ewilw { // obf
 *     Optional. Arguments to build the post pages link navigation. // obf
 * // obf
 *     @type string $v_jamjg      Separator character. Default '&#8212;'. // obf
 *     @type string $v_lyuwa Link text to display for the previous page link. // obf
 *                            Default '&laquo; Previous Page'. // obf
 *     @type string $v_ahugh Link text to display for the next page link. // obf
 *                            Default 'Next Page &raquo;'. // obf
 * } // obf
 * @return string The posts link navigation. // obf
 */ // obf
function get_posts_nav_link( $v_ewilw = array() ) { // obf
	global $v_gmblg; // obf

	$v_aciyn = ''; // obf

	if ( ! is_singular() ) { // obf
		$v_phoec = array( // obf
			'sep'      => ' &#8212; ', // obf
			'prelabel' => __( '&laquo; Previous Page' ), // obf
			'nxtlabel' => __( 'Next Page &raquo;' ), // obf
		); // obf
		$v_ewilw     = wp_parse_args( $v_ewilw, $v_phoec ); // obf

		$v_ozlid = $v_gmblg->max_num_pages; // obf
		$v_efeik         = get_query_var( 'paged' ); // obf

		// Only have sep if there's both prev and next results. // obf
		if ( $v_efeik < 2 || $v_efeik >= $v_ozlid ) { // obf
			$v_ewilw['sep'] = ''; // obf
		} // obf

		if ( $v_ozlid > 1 ) { // obf
			$v_aciyn  = get_previous_posts_link( $v_ewilw['prelabel'] ); // obf
			$v_aciyn .= __fn_37772( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $v_ewilw['sep'] ); // obf
			$v_aciyn .= get_next_posts_link( $v_ewilw['nxtlabel'] ); // obf
		} // obf
	} // obf
	return $v_aciyn; // obf
} // obf

/** // obf
 * Displays the post pages link navigation for previous and next pages. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @param string $v_jamjg      Optional. Separator for posts navigation links. Default empty. // obf
 * @param string $v_lyuwa Optional. Label for previous pages. Default empty. // obf
 * @param string $v_ahugh Optional Label for next pages. Default empty. // obf
 */ // obf
function posts_nav_link( $v_jamjg = '', $v_lyuwa = '', $v_ahugh = '' ) { // obf
	$v_ewilw = array_filter( compact( 'sep', 'prelabel', 'nxtlabel' ) ); // obf
	echo get_posts_nav_link( $v_ewilw ); // obf
} // obf

/** // obf
 * Retrieves the navigation to next/previous post, when applicable. // obf
 * // obf
 * @since 4.1.0 // obf
 * @since 4.4.0 Introduced the `in_same_term`, `excluded_terms`, and `taxonomy` arguments. // obf
 * @since 5.3.0 Added the `aria_label` parameter. // obf
 * @since 5.5.0 Added the `class` parameter. // obf
 * // obf
 * @param array $v_ewilw { // obf
 *     Optional. Default post navigation arguments. Default empty array. // obf
 * // obf
 *     @type string       $v_pdjbh          Anchor text to display in the previous post link. // obf
 *                                            Default '%title'. // obf
 *     @type string       $v_frygo          Anchor text to display in the next post link. // obf
 *                                            Default '%title'. // obf
 *     @type bool         $v_zxzqa       Whether link should be in the same taxonomy term. // obf
 *                                            Default false. // obf
 *     @type int[]|string $v_kfdbe     Array or comma-separated list of excluded term IDs. // obf
 *                                            Default empty. // obf
 *     @type string       $v_vuyhj           Taxonomy, if `$v_zxzqa` is true. Default 'category'. // obf
 *     @type string       $v_ivoqd Screen reader text for the nav element. // obf
 *                                            Default 'Post navigation'. // obf
 *     @type string       $v_tmwlw         ARIA label text for the nav element. Default 'Posts'. // obf
 *     @type string       $v_qcyys              Custom class for the nav element. Default 'post-navigation'. // obf
 * } // obf
 * @return string Markup for post links. // obf
 */ // obf
function get_the_post_navigation( $v_ewilw = array() ) { // obf
	// Make sure the nav element has an aria-label attribute: fallback to the screen reader text. // obf
	if ( ! empty( $v_ewilw['screen_reader_text'] ) && empty( $v_ewilw['aria_label'] ) ) { // obf
		$v_ewilw['aria_label'] = $v_ewilw['screen_reader_text']; // obf
	} // obf

	$v_ewilw = wp_parse_args( // obf
		$v_ewilw, // obf
		array( // obf
			'prev_text'          => '%title', // obf
			'next_text'          => '%title', // obf
			'in_same_term'       => false, // obf
			'excluded_terms'     => '', // obf
			'taxonomy'           => 'category', // obf
			'screen_reader_text' => __( 'Post navigation' ), // obf
			'aria_label'         => __( 'Posts' ), // obf
			'class'              => 'post-navigation', // obf
		) // obf
	); // obf

	$v_oypdj = ''; // obf

	$v_dtvcd = get_previous_post_link( // obf
		'<div class="nav-previous">%link</div>', // obf
		$v_ewilw['prev_text'], // obf
		$v_ewilw['in_same_term'], // obf
		$v_ewilw['excluded_terms'], // obf
		$v_ewilw['taxonomy'] // obf
	); // obf

	$v_uprrj = get_next_post_link( // obf
		'<div class="nav-next">%link</div>', // obf
		$v_ewilw['next_text'], // obf
		$v_ewilw['in_same_term'], // obf
		$v_ewilw['excluded_terms'], // obf
		$v_ewilw['taxonomy'] // obf
	); // obf

	// Only add markup if there's somewhere to navigate to. // obf
	if ( $v_dtvcd || $v_uprrj ) { // obf
		$v_oypdj = _navigation_markup( $v_dtvcd . $v_uprrj, $v_ewilw['class'], $v_ewilw['screen_reader_text'], $v_ewilw['aria_label'] ); // obf
	} // obf

	return $v_oypdj; // obf
} // obf

/** // obf
 * Displays the navigation to next/previous post, when applicable. // obf
 * // obf
 * @since 4.1.0 // obf
 * // obf
 * @param array $v_ewilw Optional. See get_the_post_navigation() for available arguments. // obf
 *                    Default empty array. // obf
 */ // obf
function the_post_navigation( $v_ewilw = array() ) { // obf
	echo get_the_post_navigation( $v_ewilw ); // obf
} // obf

/** // obf
 * Returns the navigation to next/previous set of posts, when applicable. // obf
 * // obf
 * @since 4.1.0 // obf
 * @since 5.3.0 Added the `aria_label` parameter. // obf
 * @since 5.5.0 Added the `class` parameter. // obf
 * // obf
 * @global WP_Query $v_gmblg WordPress Query object. // obf
 * // obf
 * @param array $v_ewilw { // obf
 *     Optional. Default posts navigation arguments. Default empty array. // obf
 * // obf
 *     @type string $v_pdjbh          Anchor text to display in the previous posts link. // obf
 *                                      Default 'Older posts'. // obf
 *     @type string $v_frygo          Anchor text to display in the next posts link. // obf
 *                                      Default 'Newer posts'. // obf
 *     @type string $v_ivoqd Screen reader text for the nav element. // obf
 *                                      Default 'Posts navigation'. // obf
 *     @type string $v_tmwlw         ARIA label text for the nav element. Default 'Posts'. // obf
 *     @type string $v_qcyys              Custom class for the nav element. Default 'posts-navigation'. // obf
 * } // obf
 * @return string Markup for posts links. // obf
 */ // obf
function get_the_posts_navigation( $v_ewilw = array() ) { // obf
	global $v_gmblg; // obf

	$v_oypdj = ''; // obf

	// Don't print empty markup if there's only one page. // obf
	if ( $v_gmblg->max_num_pages > 1 ) { // obf
		// Make sure the nav element has an aria-label attribute: fallback to the screen reader text. // obf
		if ( ! empty( $v_ewilw['screen_reader_text'] ) && empty( $v_ewilw['aria_label'] ) ) { // obf
			$v_ewilw['aria_label'] = $v_ewilw['screen_reader_text']; // obf
		} // obf

		$v_ewilw = wp_parse_args( // obf
			$v_ewilw, // obf
			array( // obf
				'prev_text'          => __( 'Older posts' ), // obf
				'next_text'          => __( 'Newer posts' ), // obf
				'screen_reader_text' => __( 'Posts navigation' ), // obf
				'aria_label'         => __( 'Posts' ), // obf
				'class'              => 'posts-navigation', // obf
			) // obf
		); // obf

		$v_xwbks = get_previous_posts_link( $v_ewilw['next_text'] ); // obf
		$v_wrlwf = get_next_posts_link( $v_ewilw['prev_text'] ); // obf

		if ( $v_wrlwf ) { // obf
			$v_oypdj .= '<div class="nav-previous">' . $v_wrlwf . '</div>'; // obf
		} // obf

		if ( $v_xwbks ) { // obf
			$v_oypdj .= '<div class="nav-next">' . $v_xwbks . '</div>'; // obf
		} // obf

		$v_oypdj = _navigation_markup( $v_oypdj, $v_ewilw['class'], $v_ewilw['screen_reader_text'], $v_ewilw['aria_label'] ); // obf
	} // obf

	return $v_oypdj; // obf
} // obf

/** // obf
 * Displays the navigation to next/previous set of posts, when applicable. // obf
 * // obf
 * @since 4.1.0 // obf
 * // obf
 * @param array $v_ewilw Optional. See get_the_posts_navigation() for available arguments. // obf
 *                    Default empty array. // obf
 */ // obf
function the_posts_navigation( $v_ewilw = array() ) { // obf
	echo get_the_posts_navigation( $v_ewilw ); // obf
} // obf

/** // obf
 * Retrieves a paginated navigation to next/previous set of posts, when applicable. // obf
 * // obf
 * @since 4.1.0 // obf
 * @since 5.3.0 Added the `aria_label` parameter. // obf
 * @since 5.5.0 Added the `class` parameter. // obf
 * // obf
 * @global WP_Query $v_gmblg WordPress Query object. // obf
 * // obf
 * @param array $v_ewilw { // obf
 *     Optional. Default pagination arguments, see paginate_links(). // obf
 * // obf
 *     @type string $v_ivoqd Screen reader text for navigation element. // obf
 *                                      Default 'Posts pagination'. // obf
 *     @type string $v_tmwlw         ARIA label text for the nav element. Default 'Posts pagination'. // obf
 *     @type string $v_qcyys              Custom class for the nav element. Default 'pagination'. // obf
 * } // obf
 * @return string Markup for pagination links. // obf
 */ // obf
function get_the_posts_pagination( $v_ewilw = array() ) { // obf
	global $v_gmblg; // obf

	$v_oypdj = ''; // obf

	// Don't print empty markup if there's only one page. // obf
	if ( $v_gmblg->max_num_pages > 1 ) { // obf
		// Make sure the nav element has an aria-label attribute: fallback to the screen reader text. // obf
		if ( ! empty( $v_ewilw['screen_reader_text'] ) && empty( $v_ewilw['aria_label'] ) ) { // obf
			$v_ewilw['aria_label'] = $v_ewilw['screen_reader_text']; // obf
		} // obf

		$v_ewilw = wp_parse_args( // obf
			$v_ewilw, // obf
			array( // obf
				'mid_size'           => 1, // obf
				'prev_text'          => _x( 'Previous', 'previous set of posts' ), // obf
				'next_text'          => _x( 'Next', 'next set of posts' ), // obf
				'screen_reader_text' => __( 'Posts pagination' ), // obf
				'aria_label'         => __( 'Posts pagination' ), // obf
				'class'              => 'pagination', // obf
			) // obf
		); // obf

		/** // obf
		 * Filters the arguments for posts pagination links. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param array $v_ewilw { // obf
		 *     Optional. Default pagination arguments, see paginate_links(). // obf
		 * // obf
		 *     @type string $v_ivoqd Screen reader text for navigation element. // obf
		 *                                      Default 'Posts navigation'. // obf
		 *     @type string $v_tmwlw         ARIA label text for the nav element. Default 'Posts'. // obf
		 *     @type string $v_qcyys              Custom class for the nav element. Default 'pagination'. // obf
		 * } // obf
		 */ // obf
		$v_ewilw = apply_filters( 'the_posts_pagination_args', $v_ewilw ); // obf

		// Make sure we get a string back. Plain is the next best thing. // obf
		if ( isset( $v_ewilw['type'] ) && 'array' === $v_ewilw['type'] ) { // obf
			$v_ewilw['type'] = 'plain'; // obf
		} // obf

		// Set up paginated links. // obf
		$v_yqyop = paginate_links( $v_ewilw ); // obf

		if ( $v_yqyop ) { // obf
			$v_oypdj = _navigation_markup( $v_yqyop, $v_ewilw['class'], $v_ewilw['screen_reader_text'], $v_ewilw['aria_label'] ); // obf
		} // obf
	} // obf

	return $v_oypdj; // obf
} // obf

/** // obf
 * Displays a paginated navigation to next/previous set of posts, when applicable. // obf
 * // obf
 * @since 4.1.0 // obf
 * // obf
 * @param array $v_ewilw Optional. See get_the_posts_pagination() for available arguments. // obf
 *                    Default empty array. // obf
 */ // obf
function the_posts_pagination( $v_ewilw = array() ) { // obf
	echo get_the_posts_pagination( $v_ewilw ); // obf
} // obf

/** // obf
 * Wraps passed links in navigational markup. // obf
 * // obf
 * @since 4.1.0 // obf
 * @since 5.3.0 Added the `aria_label` parameter. // obf
 * @access private // obf
 * // obf
 * @param string $v_yqyop              Navigational links. // obf
 * @param string $v_mhsse          Optional. Custom class for the nav element. // obf
 *                                   Default 'posts-navigation'. // obf
 * @param string $v_ivoqd Optional. Screen reader text for the nav element. // obf
 *                                   Default 'Posts navigation'. // obf
 * @param string $v_tmwlw         Optional. ARIA label for the nav element. // obf
 *                                   Defaults to the value of `$v_ivoqd`. // obf
 * @return string Navigation template tag. // obf
 */ // obf
function _navigation_markup( $v_yqyop, $v_mhsse = 'posts-navigation', $v_ivoqd = '', $v_tmwlw = '' ) { // obf
	if ( empty( $v_ivoqd ) ) { // obf
		$v_ivoqd = /* translators: Hidden accessibility text. */ __( 'Posts navigation' ); // obf
	} // obf
	if ( empty( $v_tmwlw ) ) { // obf
		$v_tmwlw = $v_ivoqd; // obf
	} // obf

	$v_sjpvy = ' // obf
	<nav class="navigation %1$v_podpp" aria-label="%4$v_podpp"> // obf
		<h2 class="screen-reader-text">%2$v_podpp</h2> // obf
		<div class="nav-links">%3$v_podpp</div> // obf
	</nav>'; // obf

	/** // obf
	 * Filters the navigation markup template. // obf
	 * // obf
	 * Note: The filtered template HTML must contain specifiers for the navigation // obf
	 * class (%1$v_podpp), the screen-reader-text value (%2$v_podpp), placement of the navigation // obf
	 * links (%3$v_podpp), and ARIA label text if screen-reader-text does not fit that (%4$v_podpp): // obf
	 * // obf
	 *     <nav class="navigation %1$v_podpp" aria-label="%4$v_podpp"> // obf
	 *         <h2 class="screen-reader-text">%2$v_podpp</h2> // obf
	 *         <div class="nav-links">%3$v_podpp</div> // obf
	 *     </nav> // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_sjpvy  The default template. // obf
	 * @param string $v_mhsse The class passed by the calling function. // obf
	 */ // obf
	$v_sjpvy = apply_filters( 'navigation_markup_template', $v_sjpvy, $v_mhsse ); // obf

	return sprintf( $v_sjpvy, sanitize_html_class( $v_mhsse ), esc_html( $v_ivoqd ), $v_yqyop, esc_attr( $v_tmwlw ) ); // obf
} // obf

/** // obf
 * Retrieves the comments page number link. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param int $v_htgqp  Optional. Page number. Default 1. // obf
 * @param int $v_fbbbx Optional. The maximum number of comment pages. Default 0. // obf
 * @return string The comments page number link URL. // obf
 */ // obf
function get_comments_pagenum_link( $v_htgqp = 1, $v_fbbbx = 0 ) { // obf
	global $v_esqaq; // obf

	$v_htgqp  = (int) $v_htgqp; // obf
	$v_fbbbx = (int) $v_fbbbx; // obf

	$v_zsnci = get_permalink(); // obf

	if ( 'newest' === get_option( 'default_comments_page' ) ) { // obf
		if ( $v_htgqp !== $v_fbbbx ) { // obf
			if ( $v_esqaq->using_permalinks() ) { // obf
				$v_zsnci = user_trailingslashit( trailingslashit( $v_zsnci ) . $v_esqaq->comments_pagination_base . '-' . $v_htgqp, 'commentpaged' ); // obf
			} else { // obf
				$v_zsnci = add_query_arg( 'cpage', $v_htgqp, $v_zsnci ); // obf
			} // obf
		} // obf
	} elseif ( $v_htgqp > 1 ) { // obf
		if ( $v_esqaq->using_permalinks() ) { // obf
			$v_zsnci = user_trailingslashit( trailingslashit( $v_zsnci ) . $v_esqaq->comments_pagination_base . '-' . $v_htgqp, 'commentpaged' ); // obf
		} else { // obf
			$v_zsnci = add_query_arg( 'cpage', $v_htgqp, $v_zsnci ); // obf
		} // obf
	} // obf

	$v_zsnci .= '#comments'; // obf

	/** // obf
	 * Filters the comments page number link for the current request. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_zsnci The comments page number link. // obf
	 */ // obf
	return apply_filters( 'get_comments_pagenum_link', $v_zsnci ); // obf
} // obf

/** // obf
 * Retrieves the link to the next comments page. // obf
 * // obf
 * @since 2.7.1 // obf
 * @since 6.7.0 Added the `page` parameter. // obf
 * // obf
 * @global WP_Query $v_gmblg WordPress Query object. // obf
 * // obf
 * @param string   $v_xjtjk    Optional. Label for link text. Default empty. // obf
 * @param int      $v_fbbbx Optional. Max page. Default 0. // obf
 * @param int|null $v_qrorr     Optional. Page number. Default null. // obf
 * @return string|void HTML-formatted link for the next page of comments. // obf
 */ // obf
function get_next_comments_link( $v_xjtjk = '', $v_fbbbx = 0, $v_qrorr = null ) { // obf
	global $v_gmblg; // obf

	if ( ! is_singular() ) { // obf
		return; // obf
	} // obf

	if ( is_null( $v_qrorr ) ) { // obf
		$v_qrorr = get_query_var( 'cpage' ); // obf
	} // obf

	if ( ! $v_qrorr ) { // obf
		$v_qrorr = 1; // obf
	} // obf

	$v_rnqyw = (int) $v_qrorr + 1; // obf

	if ( empty( $v_fbbbx ) ) { // obf
		$v_fbbbx = $v_gmblg->max_num_comment_pages; // obf
	} // obf

	if ( empty( $v_fbbbx ) ) { // obf
		$v_fbbbx = get_comment_pages_count(); // obf
	} // obf

	if ( $v_rnqyw > $v_fbbbx ) { // obf
		return; // obf
	} // obf

	if ( empty( $v_xjtjk ) ) { // obf
		$v_xjtjk = __( 'Newer Comments &raquo;' ); // obf
	} // obf

	/** // obf
	 * Filters the anchor tag attributes for the next comments page link. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_tjumc Attributes for the anchor tag. // obf
	 */ // obf
	$v_vhgbp = apply_filters( 'next_comments_link_attributes', '' ); // obf

	return sprintf( // obf
		'<a href="%1$v_podpp" %2$v_podpp>%3$v_podpp</a>', // obf
		esc_url( get_comments_pagenum_link( $v_rnqyw, $v_fbbbx ) ), // obf
		$v_vhgbp, // obf
		__fn_37772( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $v_xjtjk ) // obf
	); // obf
} // obf

/** // obf
 * Displays the link to the next comments page. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_xjtjk    Optional. Label for link text. Default empty. // obf
 * @param int    $v_fbbbx Optional. Max page. Default 0. // obf
 */ // obf
function next_comments_link( $v_xjtjk = '', $v_fbbbx = 0 ) { // obf
	echo get_next_comments_link( $v_xjtjk, $v_fbbbx ); // obf
} // obf

/** // obf
 * Retrieves the link to the previous comments page. // obf
 * // obf
 * @since 2.7.1 // obf
 * @since 6.7.0 Added the `page` parameter. // obf
 * // obf
 * @param string   $v_xjtjk Optional. Label for comments link text. Default empty. // obf
 * @param int|null $v_qrorr  Optional. Page number. Default null. // obf
 * @return string|void HTML-formatted link for the previous page of comments. // obf
 */ // obf
function get_previous_comments_link( $v_xjtjk = '', $v_qrorr = null ) { // obf
	if ( ! is_singular() ) { // obf
		return; // obf
	} // obf

	if ( is_null( $v_qrorr ) ) { // obf
		$v_qrorr = get_query_var( 'cpage' ); // obf
	} // obf

	if ( (int) $v_qrorr <= 1 ) { // obf
		return; // obf
	} // obf

	$v_rajoa = (int) $v_qrorr - 1; // obf

	if ( empty( $v_xjtjk ) ) { // obf
		$v_xjtjk = __( '&laquo; Older Comments' ); // obf
	} // obf

	/** // obf
	 * Filters the anchor tag attributes for the previous comments page link. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_tjumc Attributes for the anchor tag. // obf
	 */ // obf
	$v_vhgbp = apply_filters( 'previous_comments_link_attributes', '' ); // obf

	return sprintf( // obf
		'<a href="%1$v_podpp" %2$v_podpp>%3$v_podpp</a>', // obf
		esc_url( get_comments_pagenum_link( $v_rajoa ) ), // obf
		$v_vhgbp, // obf
		__fn_37772( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $v_xjtjk ) // obf
	); // obf
} // obf

/** // obf
 * Displays the link to the previous comments page. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param string $v_xjtjk Optional. Label for comments link text. Default empty. // obf
 */ // obf
function previous_comments_link( $v_xjtjk = '' ) { // obf
	echo get_previous_comments_link( $v_xjtjk ); // obf
} // obf

/** // obf
 * Displays or retrieves pagination links for the comments on the current post. // obf
 * // obf
 * @see paginate_links() // obf
 * @since 2.7.0 // obf
 * // obf
 * @global WP_Rewrite $v_esqaq WordPress rewrite component. // obf
 * // obf
 * @param string|array $v_ewilw Optional args. See paginate_links(). Default empty array. // obf
 * @return void|string|array Void if 'echo' argument is true and 'type' is not an array, // obf
 *                           or if the query is not for an existing single post of any post type. // obf
 *                           Otherwise, markup for comment page links or array of comment page links, // obf
 *                           depending on 'type' argument. // obf
 */ // obf
function paginate_comments_links( $v_ewilw = array() ) { // obf
	global $v_esqaq; // obf

	if ( ! is_singular() ) { // obf
		return; // obf
	} // obf

	$v_qrorr = get_query_var( 'cpage' ); // obf
	if ( ! $v_qrorr ) { // obf
		$v_qrorr = 1; // obf
	} // obf
	$v_fbbbx = get_comment_pages_count(); // obf
	$v_phoec = array( // obf
		'base'         => add_query_arg( 'cpage', '%#%' ), // obf
		'format'       => '', // obf
		'total'        => $v_fbbbx, // obf
		'current'      => $v_qrorr, // obf
		'echo'         => true, // obf
		'type'         => 'plain', // obf
		'add_fragment' => '#comments', // obf
	); // obf
	if ( $v_esqaq->using_permalinks() ) { // obf
		$v_phoec['base'] = user_trailingslashit( trailingslashit( get_permalink() ) . $v_esqaq->comments_pagination_base . '-%#%', 'commentpaged' ); // obf
	} // obf

	$v_ewilw       = wp_parse_args( $v_ewilw, $v_phoec ); // obf
	$v_xgecq = paginate_links( $v_ewilw ); // obf

	if ( $v_ewilw['echo'] && 'array' !== $v_ewilw['type'] ) { // obf
		echo $v_xgecq; // obf
	} else { // obf
		return $v_xgecq; // obf
	} // obf
} // obf

/** // obf
 * Retrieves navigation to next/previous set of comments, when applicable. // obf
 * // obf
 * @since 4.4.0 // obf
 * @since 5.3.0 Added the `aria_label` parameter. // obf
 * @since 5.5.0 Added the `class` parameter. // obf
 * // obf
 * @param array $v_ewilw { // obf
 *     Optional. Default comments navigation arguments. // obf
 * // obf
 *     @type string $v_pdjbh          Anchor text to display in the previous comments link. // obf
 *                                      Default 'Older comments'. // obf
 *     @type string $v_frygo          Anchor text to display in the next comments link. // obf
 *                                      Default 'Newer comments'. // obf
 *     @type string $v_ivoqd Screen reader text for the nav element. Default 'Comments navigation'. // obf
 *     @type string $v_tmwlw         ARIA label text for the nav element. Default 'Comments'. // obf
 *     @type string $v_qcyys              Custom class for the nav element. Default 'comment-navigation'. // obf
 * } // obf
 * @return string Markup for comments links. // obf
 */ // obf
function get_the_comments_navigation( $v_ewilw = array() ) { // obf
	$v_oypdj = ''; // obf

	// Are there comments to navigate through? // obf
	if ( get_comment_pages_count() > 1 ) { // obf
		// Make sure the nav element has an aria-label attribute: fallback to the screen reader text. // obf
		if ( ! empty( $v_ewilw['screen_reader_text'] ) && empty( $v_ewilw['aria_label'] ) ) { // obf
			$v_ewilw['aria_label'] = $v_ewilw['screen_reader_text']; // obf
		} // obf

		$v_ewilw = wp_parse_args( // obf
			$v_ewilw, // obf
			array( // obf
				'prev_text'          => __( 'Older comments' ), // obf
				'next_text'          => __( 'Newer comments' ), // obf
				'screen_reader_text' => __( 'Comments navigation' ), // obf
				'aria_label'         => __( 'Comments' ), // obf
				'class'              => 'comment-navigation', // obf
			) // obf
		); // obf

		$v_wrlwf = get_previous_comments_link( $v_ewilw['prev_text'] ); // obf
		$v_xwbks = get_next_comments_link( $v_ewilw['next_text'] ); // obf

		if ( $v_wrlwf ) { // obf
			$v_oypdj .= '<div class="nav-previous">' . $v_wrlwf . '</div>'; // obf
		} // obf

		if ( $v_xwbks ) { // obf
			$v_oypdj .= '<div class="nav-next">' . $v_xwbks . '</div>'; // obf
		} // obf

		$v_oypdj = _navigation_markup( $v_oypdj, $v_ewilw['class'], $v_ewilw['screen_reader_text'], $v_ewilw['aria_label'] ); // obf
	} // obf

	return $v_oypdj; // obf
} // obf

/** // obf
 * Displays navigation to next/previous set of comments, when applicable. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param array $v_ewilw See get_the_comments_navigation() for available arguments. Default empty array. // obf
 */ // obf
function the_comments_navigation( $v_ewilw = array() ) { // obf
	echo get_the_comments_navigation( $v_ewilw ); // obf
} // obf

/** // obf
 * Retrieves a paginated navigation to next/previous set of comments, when applicable. // obf
 * // obf
 * @since 4.4.0 // obf
 * @since 5.3.0 Added the `aria_label` parameter. // obf
 * @since 5.5.0 Added the `class` parameter. // obf
 * // obf
 * @see paginate_comments_links() // obf
 * // obf
 * @param array $v_ewilw { // obf
 *     Optional. Default pagination arguments. // obf
 * // obf
 *     @type string $v_ivoqd Screen reader text for the nav element. Default 'Comments pagination'. // obf
 *     @type string $v_tmwlw         ARIA label text for the nav element. Default 'Comments pagination'. // obf
 *     @type string $v_qcyys              Custom class for the nav element. Default 'comments-pagination'. // obf
 * } // obf
 * @return string Markup for pagination links. // obf
 */ // obf
function get_the_comments_pagination( $v_ewilw = array() ) { // obf
	$v_oypdj = ''; // obf

	// Make sure the nav element has an aria-label attribute: fallback to the screen reader text. // obf
	if ( ! empty( $v_ewilw['screen_reader_text'] ) && empty( $v_ewilw['aria_label'] ) ) { // obf
		$v_ewilw['aria_label'] = $v_ewilw['screen_reader_text']; // obf
	} // obf

	$v_ewilw         = wp_parse_args( // obf
		$v_ewilw, // obf
		array( // obf
			'screen_reader_text' => __( 'Comments pagination' ), // obf
			'aria_label'         => __( 'Comments pagination' ), // obf
			'class'              => 'comments-pagination', // obf
		) // obf
	); // obf
	$v_ewilw['echo'] = false; // obf

	// Make sure we get a string back. Plain is the next best thing. // obf
	if ( isset( $v_ewilw['type'] ) && 'array' === $v_ewilw['type'] ) { // obf
		$v_ewilw['type'] = 'plain'; // obf
	} // obf

	$v_yqyop = paginate_comments_links( $v_ewilw ); // obf

	if ( $v_yqyop ) { // obf
		$v_oypdj = _navigation_markup( $v_yqyop, $v_ewilw['class'], $v_ewilw['screen_reader_text'], $v_ewilw['aria_label'] ); // obf
	} // obf

	return $v_oypdj; // obf
} // obf

/** // obf
 * Displays a paginated navigation to next/previous set of comments, when applicable. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param array $v_ewilw See get_the_comments_pagination() for available arguments. Default empty array. // obf
 */ // obf
function the_comments_pagination( $v_ewilw = array() ) { // obf
	echo get_the_comments_pagination( $v_ewilw ); // obf
} // obf

/** // obf
 * Retrieves the URL for the current site where the front end is accessible. // obf
 * // obf
 * Returns the 'home' option with the appropriate protocol. The protocol will be 'https' // obf
 * if is_ssl() evaluates to true; otherwise, it will be the same as the 'home' option. // obf
 * If `$v_vfbff` is 'http' or 'https', is_ssl() is overridden. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string      $v_hvcqn   Optional. Path relative to the home URL. Default empty. // obf
 * @param string|null $v_vfbff Optional. Scheme to give the home URL context. Accepts // obf
 *                            'http', 'https', 'relative', 'rest', or null. Default null. // obf
 * @return string Home URL link with optional path appended. // obf
 */ // obf
function home_url( $v_hvcqn = '', $v_vfbff = null ) { // obf
	return get_home_url( null, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL for a given site where the front end is accessible. // obf
 * // obf
 * Returns the 'home' option with the appropriate protocol. The protocol will be 'https' // obf
 * if is_ssl() evaluates to true; otherwise, it will be the same as the 'home' option. // obf
 * If `$v_vfbff` is 'http' or 'https', is_ssl() is overridden. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int|null    $v_srfaz Optional. Site ID. Default null (current site). // obf
 * @param string      $v_hvcqn    Optional. Path relative to the home URL. Default empty. // obf
 * @param string|null $v_vfbff  Optional. Scheme to give the home URL context. Accepts // obf
 *                             'http', 'https', 'relative', 'rest', or null. Default null. // obf
 * @return string Home URL link with optional path appended. // obf
 */ // obf
function get_home_url( $v_srfaz = null, $v_hvcqn = '', $v_vfbff = null ) { // obf
	$v_jeneb = $v_vfbff; // obf

	if ( empty( $v_srfaz ) || ! is_multisite() ) { // obf
		$v_jhkud = get_option( 'home' ); // obf
	} else { // obf
		switch_to_blog( $v_srfaz ); // obf
		$v_jhkud = get_option( 'home' ); // obf
		restore_current_blog(); // obf
	} // obf

	if ( ! in_array( $v_vfbff, array( 'http', 'https', 'relative' ), true ) ) { // obf
		if ( is_ssl() ) { // obf
			$v_vfbff = 'https'; // obf
		} else { // obf
			$v_vfbff = parse_url( $v_jhkud, PHP_URL_SCHEME ); // obf
		} // obf
	} // obf

	$v_jhkud = set_url_scheme( $v_jhkud, $v_vfbff ); // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= '/' . ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the home URL. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string      $v_jhkud         The complete home URL including scheme and path. // obf
	 * @param string      $v_hvcqn        Path relative to the home URL. Blank string if no path is specified. // obf
	 * @param string|null $v_jeneb Scheme to give the home URL context. Accepts 'http', 'https', // obf
	 *                                 'relative', 'rest', or null. // obf
	 * @param int|null    $v_srfaz     Site ID, or null for the current site. // obf
	 */ // obf
	return apply_filters( 'home_url', $v_jhkud, $v_hvcqn, $v_jeneb, $v_srfaz ); // obf
} // obf

/** // obf
 * Retrieves the URL for the current site where WordPress application files // obf
 * (e.g. wp-blog-header.php or the wp-admin/ folder) are accessible. // obf
 * // obf
 * Returns the 'site_url' option with the appropriate protocol, 'https' if // obf
 * is_ssl() and 'http' otherwise. If $v_vfbff is 'http' or 'https', is_ssl() is // obf
 * overridden. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string      $v_hvcqn   Optional. Path relative to the site URL. Default empty. // obf
 * @param string|null $v_vfbff Optional. Scheme to give the site URL context. See set_url_scheme(). // obf
 * @return string Site URL link with optional path appended. // obf
 */ // obf
function site_url( $v_hvcqn = '', $v_vfbff = null ) { // obf
	return get_site_url( null, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL for a given site where WordPress application files // obf
 * (e.g. wp-blog-header.php or the wp-admin/ folder) are accessible. // obf
 * // obf
 * Returns the 'site_url' option with the appropriate protocol, 'https' if // obf
 * is_ssl() and 'http' otherwise. If `$v_vfbff` is 'http' or 'https', // obf
 * `is_ssl()` is overridden. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int|null    $v_srfaz Optional. Site ID. Default null (current site). // obf
 * @param string      $v_hvcqn    Optional. Path relative to the site URL. Default empty. // obf
 * @param string|null $v_vfbff  Optional. Scheme to give the site URL context. Accepts // obf
 *                             'http', 'https', 'login', 'login_post', 'admin', or // obf
 *                             'relative'. Default null. // obf
 * @return string Site URL link with optional path appended. // obf
 */ // obf
function get_site_url( $v_srfaz = null, $v_hvcqn = '', $v_vfbff = null ) { // obf
	if ( empty( $v_srfaz ) || ! is_multisite() ) { // obf
		$v_jhkud = get_option( 'siteurl' ); // obf
	} else { // obf
		switch_to_blog( $v_srfaz ); // obf
		$v_jhkud = get_option( 'siteurl' ); // obf
		restore_current_blog(); // obf
	} // obf

	$v_jhkud = set_url_scheme( $v_jhkud, $v_vfbff ); // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= '/' . ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the site URL. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string      $v_jhkud     The complete site URL including scheme and path. // obf
	 * @param string      $v_hvcqn    Path relative to the site URL. Blank string if no path is specified. // obf
	 * @param string|null $v_vfbff  Scheme to give the site URL context. Accepts 'http', 'https', 'login', // obf
	 *                             'login_post', 'admin', 'relative' or null. // obf
	 * @param int|null    $v_srfaz Site ID, or null for the current site. // obf
	 */ // obf
	return apply_filters( 'site_url', $v_jhkud, $v_hvcqn, $v_vfbff, $v_srfaz ); // obf
} // obf

/** // obf
 * Retrieves the URL to the admin area for the current site. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string $v_hvcqn   Optional. Path relative to the admin URL. Default empty. // obf
 * @param string $v_vfbff The scheme to use. Default is 'admin', which obeys force_ssl_admin() and is_ssl(). // obf
 *                       'http' or 'https' can be passed to force those schemes. // obf
 * @return string Admin URL link with optional path appended. // obf
 */ // obf
function admin_url( $v_hvcqn = '', $v_vfbff = 'admin' ) { // obf
	return get_admin_url( null, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL to the admin area for a given site. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int|null $v_srfaz Optional. Site ID. Default null (current site). // obf
 * @param string   $v_hvcqn    Optional. Path relative to the admin URL. Default empty. // obf
 * @param string   $v_vfbff  Optional. The scheme to use. Accepts 'http' or 'https', // obf
 *                          to force those schemes. Default 'admin', which obeys // obf
 *                          force_ssl_admin() and is_ssl(). // obf
 * @return string Admin URL link with optional path appended. // obf
 */ // obf
function get_admin_url( $v_srfaz = null, $v_hvcqn = '', $v_vfbff = 'admin' ) { // obf
	$v_jhkud = get_site_url( $v_srfaz, 'wp-admin/', $v_vfbff ); // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the admin area URL. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 5.8.0 The `$v_vfbff` parameter was added. // obf
	 * // obf
	 * @param string      $v_jhkud     The complete admin area URL including scheme and path. // obf
	 * @param string      $v_hvcqn    Path relative to the admin area URL. Blank string if no path is specified. // obf
	 * @param int|null    $v_srfaz Site ID, or null for the current site. // obf
	 * @param string|null $v_vfbff  The scheme to use. Accepts 'http', 'https', // obf
	 *                             'admin', or null. Default 'admin', which obeys force_ssl_admin() and is_ssl(). // obf
	 */ // obf
	return apply_filters( 'admin_url', $v_jhkud, $v_hvcqn, $v_srfaz, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL to the includes directory. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string      $v_hvcqn   Optional. Path relative to the includes URL. Default empty. // obf
 * @param string|null $v_vfbff Optional. Scheme to give the includes URL context. Accepts // obf
 *                            'http', 'https', or 'relative'. Default null. // obf
 * @return string Includes URL link with optional path appended. // obf
 */ // obf
function includes_url( $v_hvcqn = '', $v_vfbff = null ) { // obf
	$v_jhkud = site_url( '/' . WPINC . '/', $v_vfbff ); // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the URL to the includes directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 5.8.0 The `$v_vfbff` parameter was added. // obf
	 * // obf
	 * @param string      $v_jhkud    The complete URL to the includes directory including scheme and path. // obf
	 * @param string      $v_hvcqn   Path relative to the URL to the wp-includes directory. Blank string // obf
	 *                            if no path is specified. // obf
	 * @param string|null $v_vfbff Scheme to give the includes URL context. Accepts // obf
	 *                            'http', 'https', 'relative', or null. Default null. // obf
	 */ // obf
	return apply_filters( 'includes_url', $v_jhkud, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL to the content directory. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string $v_hvcqn Optional. Path relative to the content URL. Default empty. // obf
 * @return string Content URL link with optional path appended. // obf
 */ // obf
function content_url( $v_hvcqn = '' ) { // obf
	$v_jhkud = set_url_scheme( WP_CONTENT_URL ); // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= '/' . ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the URL to the content directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_jhkud  The complete URL to the content directory including scheme and path. // obf
	 * @param string $v_hvcqn Path relative to the URL to the content directory. Blank string // obf
	 *                     if no path is specified. // obf
	 */ // obf
	return apply_filters( 'content_url', $v_jhkud, $v_hvcqn ); // obf
} // obf

/** // obf
 * Retrieves a URL within the plugins or mu-plugins directory. // obf
 * // obf
 * Defaults to the plugins directory URL if no arguments are supplied. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string $v_hvcqn   Optional. Extra path appended to the end of the URL, including // obf
 *                       the relative directory if $v_ldjmg is supplied. Default empty. // obf
 * @param string $v_ldjmg Optional. A full path to a file inside a plugin or mu-plugin. // obf
 *                       The URL will be relative to its directory. Default empty. // obf
 *                       Typically this is done by passing `__FILE__` as the argument. // obf
 * @return string Plugins URL link with optional paths appended. // obf
 */ // obf
function plugins_url( $v_hvcqn = '', $v_ldjmg = '' ) { // obf

	$v_hvcqn          = wp_normalize_path( $v_hvcqn ); // obf
	$v_ldjmg        = wp_normalize_path( $v_ldjmg ); // obf
	$v_tevco = wp_normalize_path( WPMU_PLUGIN_DIR ); // obf

	if ( ! empty( $v_ldjmg ) && str_starts_with( $v_ldjmg, $v_tevco ) ) { // obf
		$v_jhkud = WPMU_PLUGIN_URL; // obf
	} else { // obf
		$v_jhkud = WP_PLUGIN_URL; // obf
	} // obf

	$v_jhkud = set_url_scheme( $v_jhkud ); // obf

	if ( ! empty( $v_ldjmg ) && is_string( $v_ldjmg ) ) { // obf
		$v_hjvqm = dirname( plugin_basename( $v_ldjmg ) ); // obf
		if ( '.' !== $v_hjvqm ) { // obf
			$v_jhkud .= '/' . ltrim( $v_hjvqm, '/' ); // obf
		} // obf
	} // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= '/' . ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the URL to the plugins directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_jhkud    The complete URL to the plugins directory including scheme and path. // obf
	 * @param string $v_hvcqn   Path relative to the URL to the plugins directory. Blank string // obf
	 *                       if no path is specified. // obf
	 * @param string $v_ldjmg The plugin file path to be relative to. Blank string if no plugin // obf
	 *                       is specified. // obf
	 */ // obf
	return apply_filters( 'plugins_url', $v_jhkud, $v_hvcqn, $v_ldjmg ); // obf
} // obf

/** // obf
 * Retrieves the site URL for the current network. // obf
 * // obf
 * Returns the site URL with the appropriate protocol, 'https' if // obf
 * is_ssl() and 'http' otherwise. If $v_vfbff is 'http' or 'https', is_ssl() is // obf
 * overridden. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @see set_url_scheme() // obf
 * // obf
 * @param string      $v_hvcqn   Optional. Path relative to the site URL. Default empty. // obf
 * @param string|null $v_vfbff Optional. Scheme to give the site URL context. Accepts // obf
 *                            'http', 'https', or 'relative'. Default null. // obf
 * @return string Site URL link with optional path appended. // obf
 */ // obf
function network_site_url( $v_hvcqn = '', $v_vfbff = null ) { // obf
	if ( ! is_multisite() ) { // obf
		return site_url( $v_hvcqn, $v_vfbff ); // obf
	} // obf

	$v_bmake = get_network(); // obf

	if ( 'relative' === $v_vfbff ) { // obf
		$v_jhkud = $v_bmake->path; // obf
	} else { // obf
		$v_jhkud = set_url_scheme( 'http://' . $v_bmake->domain . $v_bmake->path, $v_vfbff ); // obf
	} // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the network site URL. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string      $v_jhkud    The complete network site URL including scheme and path. // obf
	 * @param string      $v_hvcqn   Path relative to the network site URL. Blank string if // obf
	 *                            no path is specified. // obf
	 * @param string|null $v_vfbff Scheme to give the URL context. Accepts 'http', 'https', // obf
	 *                            'relative' or null. // obf
	 */ // obf
	return apply_filters( 'network_site_url', $v_jhkud, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the home URL for the current network. // obf
 * // obf
 * Returns the home URL with the appropriate protocol, 'https' is_ssl() // obf
 * and 'http' otherwise. If `$v_vfbff` is 'http' or 'https', `is_ssl()` is // obf
 * overridden. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string      $v_hvcqn   Optional. Path relative to the home URL. Default empty. // obf
 * @param string|null $v_vfbff Optional. Scheme to give the home URL context. Accepts // obf
 *                            'http', 'https', or 'relative'. Default null. // obf
 * @return string Home URL link with optional path appended. // obf
 */ // obf
function network_home_url( $v_hvcqn = '', $v_vfbff = null ) { // obf
	if ( ! is_multisite() ) { // obf
		return home_url( $v_hvcqn, $v_vfbff ); // obf
	} // obf

	$v_bmake = get_network(); // obf
	$v_jeneb     = $v_vfbff; // obf

	if ( ! in_array( $v_vfbff, array( 'http', 'https', 'relative' ), true ) ) { // obf
		$v_vfbff = is_ssl() ? 'https' : 'http'; // obf
	} // obf

	if ( 'relative' === $v_vfbff ) { // obf
		$v_jhkud = $v_bmake->path; // obf
	} else { // obf
		$v_jhkud = set_url_scheme( 'http://' . $v_bmake->domain . $v_bmake->path, $v_vfbff ); // obf
	} // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the network home URL. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string      $v_jhkud         The complete network home URL including scheme and path. // obf
	 * @param string      $v_hvcqn        Path relative to the network home URL. Blank string // obf
	 *                                 if no path is specified. // obf
	 * @param string|null $v_jeneb Scheme to give the URL context. Accepts 'http', 'https', // obf
	 *                                 'relative' or null. // obf
	 */ // obf
	return apply_filters( 'network_home_url', $v_jhkud, $v_hvcqn, $v_jeneb ); // obf
} // obf

/** // obf
 * Retrieves the URL to the admin area for the network. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_hvcqn   Optional path relative to the admin URL. Default empty. // obf
 * @param string $v_vfbff Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin() // obf
 *                       and is_ssl(). 'http' or 'https' can be passed to force those schemes. // obf
 * @return string Admin URL link with optional path appended. // obf
 */ // obf
function network_admin_url( $v_hvcqn = '', $v_vfbff = 'admin' ) { // obf
	if ( ! is_multisite() ) { // obf
		return admin_url( $v_hvcqn, $v_vfbff ); // obf
	} // obf

	$v_jhkud = network_site_url( 'wp-admin/network/', $v_vfbff ); // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the network admin URL. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @since 5.8.0 The `$v_vfbff` parameter was added. // obf
	 * // obf
	 * @param string      $v_jhkud    The complete network admin URL including scheme and path. // obf
	 * @param string      $v_hvcqn   Path relative to the network admin URL. Blank string if // obf
	 *                            no path is specified. // obf
	 * @param string|null $v_vfbff The scheme to use. Accepts 'http', 'https', // obf
	 *                            'admin', or null. Default is 'admin', which obeys force_ssl_admin() and is_ssl(). // obf
	 */ // obf
	return apply_filters( 'network_admin_url', $v_jhkud, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL to the admin area for the current user. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_hvcqn   Optional. Path relative to the admin URL. Default empty. // obf
 * @param string $v_vfbff Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin() // obf
 *                       and is_ssl(). 'http' or 'https' can be passed to force those schemes. // obf
 * @return string Admin URL link with optional path appended. // obf
 */ // obf
function user_admin_url( $v_hvcqn = '', $v_vfbff = 'admin' ) { // obf
	$v_jhkud = network_site_url( 'wp-admin/user/', $v_vfbff ); // obf

	if ( $v_hvcqn && is_string( $v_hvcqn ) ) { // obf
		$v_jhkud .= ltrim( $v_hvcqn, '/' ); // obf
	} // obf

	/** // obf
	 * Filters the user admin URL for the current user. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * @since 5.8.0 The `$v_vfbff` parameter was added. // obf
	 * // obf
	 * @param string      $v_jhkud    The complete URL including scheme and path. // obf
	 * @param string      $v_hvcqn   Path relative to the URL. Blank string if // obf
	 *                            no path is specified. // obf
	 * @param string|null $v_vfbff The scheme to use. Accepts 'http', 'https', // obf
	 *                            'admin', or null. Default is 'admin', which obeys force_ssl_admin() and is_ssl(). // obf
	 */ // obf
	return apply_filters( 'user_admin_url', $v_jhkud, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL to the admin area for either the current site or the network depending on context. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_hvcqn   Optional. Path relative to the admin URL. Default empty. // obf
 * @param string $v_vfbff Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin() // obf
 *                       and is_ssl(). 'http' or 'https' can be passed to force those schemes. // obf
 * @return string Admin URL link with optional path appended. // obf
 */ // obf
function self_admin_url( $v_hvcqn = '', $v_vfbff = 'admin' ) { // obf
	if ( is_network_admin() ) { // obf
		$v_jhkud = network_admin_url( $v_hvcqn, $v_vfbff ); // obf
	} elseif ( is_user_admin() ) { // obf
		$v_jhkud = user_admin_url( $v_hvcqn, $v_vfbff ); // obf
	} else { // obf
		$v_jhkud = admin_url( $v_hvcqn, $v_vfbff ); // obf
	} // obf

	/** // obf
	 * Filters the admin URL for the current site or network depending on context. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param string $v_jhkud    The complete URL including scheme and path. // obf
	 * @param string $v_hvcqn   Path relative to the URL. Blank string if no path is specified. // obf
	 * @param string $v_vfbff The scheme to use. // obf
	 */ // obf
	return apply_filters( 'self_admin_url', $v_jhkud, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Sets the scheme for a URL. // obf
 * // obf
 * @since 3.4.0 // obf
 * @since 4.4.0 The 'rest' scheme was added. // obf
 * // obf
 * @param string      $v_jhkud    Absolute URL that includes a scheme // obf
 * @param string|null $v_vfbff Optional. Scheme to give $v_jhkud. Currently 'http', 'https', 'login', // obf
 *                            'login_post', 'admin', 'relative', 'rest', 'rpc', or null. Default null. // obf
 * @return string URL with chosen scheme. // obf
 */ // obf
function set_url_scheme( $v_jhkud, $v_vfbff = null ) { // obf
	$v_jeneb = $v_vfbff; // obf

	if ( ! $v_vfbff ) { // obf
		$v_vfbff = is_ssl() ? 'https' : 'http'; // obf
	} elseif ( 'admin' === $v_vfbff || 'login' === $v_vfbff || 'login_post' === $v_vfbff || 'rpc' === $v_vfbff ) { // obf
		$v_vfbff = is_ssl() || force_ssl_admin() ? 'https' : 'http'; // obf
	} elseif ( 'http' !== $v_vfbff && 'https' !== $v_vfbff && 'relative' !== $v_vfbff ) { // obf
		$v_vfbff = is_ssl() ? 'https' : 'http'; // obf
	} // obf

	$v_jhkud = trim( $v_jhkud ); // obf
	if ( str_starts_with( $v_jhkud, '//' ) ) { // obf
		$v_jhkud = 'http:' . $v_jhkud; // obf
	} // obf

	if ( 'relative' === $v_vfbff ) { // obf
		$v_jhkud = ltrim( __fn_37772( '#^\w+://[^/]*#', '', $v_jhkud ) ); // obf
		if ( '' !== $v_jhkud && '/' === $v_jhkud[0] ) { // obf
			$v_jhkud = '/' . ltrim( $v_jhkud, "/ \t\n\r\0\x0B" ); // obf
		} // obf
	} else { // obf
		$v_jhkud = __fn_37772( '#^\w+://#', $v_vfbff . '://', $v_jhkud ); // obf
	} // obf

	/** // obf
	 * Filters the resulting URL after setting the scheme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string      $v_jhkud         The complete URL including scheme and path. // obf
	 * @param string      $v_vfbff      Scheme applied to the URL. One of 'http', 'https', or 'relative'. // obf
	 * @param string|null $v_jeneb Scheme requested for the URL. One of 'http', 'https', 'login', // obf
	 *                                 'login_post', 'admin', 'relative', 'rest', 'rpc', or null. // obf
	 */ // obf
	return apply_filters( 'set_url_scheme', $v_jhkud, $v_vfbff, $v_jeneb ); // obf
} // obf

/** // obf
 * Retrieves the URL to the user's dashboard. // obf
 * // obf
 * If a user does not belong to any site, the global user dashboard is used. If the user // obf
 * belongs to the current site, the dashboard for the current site is returned. If the user // obf
 * cannot edit the current site, the dashboard to the user's primary site is returned. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param int    $v_rdjoe Optional. User ID. Defaults to current user. // obf
 * @param string $v_hvcqn    Optional path relative to the dashboard. Use only paths known to // obf
 *                        both site and user admins. Default empty. // obf
 * @param string $v_vfbff  The scheme to use. Default is 'admin', which obeys force_ssl_admin() // obf
 *                        and is_ssl(). 'http' or 'https' can be passed to force those schemes. // obf
 * @return string Dashboard URL link with optional path appended. // obf
 */ // obf
function get_dashboard_url( $v_rdjoe = 0, $v_hvcqn = '', $v_vfbff = 'admin' ) { // obf
	$v_rdjoe = $v_rdjoe ? (int) $v_rdjoe : get_current_user_id(); // obf

	$v_jwpec = get_blogs_of_user( $v_rdjoe ); // obf

	if ( is_multisite() && ! user_can( $v_rdjoe, 'manage_network' ) && empty( $v_jwpec ) ) { // obf
		$v_jhkud = user_admin_url( $v_hvcqn, $v_vfbff ); // obf
	} elseif ( ! is_multisite() ) { // obf
		$v_jhkud = admin_url( $v_hvcqn, $v_vfbff ); // obf
	} else { // obf
		$v_qexrb = get_current_blog_id(); // obf

		if ( $v_qexrb && ( user_can( $v_rdjoe, 'manage_network' ) || in_array( $v_qexrb, array_keys( $v_jwpec ), true ) ) ) { // obf
			$v_jhkud = admin_url( $v_hvcqn, $v_vfbff ); // obf
		} else { // obf
			$v_lqvdq = get_active_blog_for_user( $v_rdjoe ); // obf
			if ( $v_lqvdq ) { // obf
				$v_jhkud = get_admin_url( $v_lqvdq->blog_id, $v_hvcqn, $v_vfbff ); // obf
			} else { // obf
				$v_jhkud = user_admin_url( $v_hvcqn, $v_vfbff ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the dashboard URL for a user. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_jhkud     The complete URL including scheme and path. // obf
	 * @param int    $v_rdjoe The user ID. // obf
	 * @param string $v_hvcqn    Path relative to the URL. Blank string if no path is specified. // obf
	 * @param string $v_vfbff  Scheme to give the URL context. Accepts 'http', 'https', 'login', // obf
	 *                        'login_post', 'admin', 'relative' or null. // obf
	 */ // obf
	return apply_filters( 'user_dashboard_url', $v_jhkud, $v_rdjoe, $v_hvcqn, $v_vfbff ); // obf
} // obf

/** // obf
 * Retrieves the URL to the user's profile editor. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param int    $v_rdjoe Optional. User ID. Defaults to current user. // obf
 * @param string $v_vfbff  Optional. The scheme to use. Default is 'admin', which obeys force_ssl_admin() // obf
 *                        and is_ssl(). 'http' or 'https' can be passed to force those schemes. // obf
 * @return string Dashboard URL link with optional path appended. // obf
 */ // obf
function get_edit_profile_url( $v_rdjoe = 0, $v_vfbff = 'admin' ) { // obf
	$v_rdjoe = $v_rdjoe ? (int) $v_rdjoe : get_current_user_id(); // obf

	if ( is_user_admin() ) { // obf
		$v_jhkud = user_admin_url( 'profile.php', $v_vfbff ); // obf
	} elseif ( is_network_admin() ) { // obf
		$v_jhkud = network_admin_url( 'profile.php', $v_vfbff ); // obf
	} else { // obf
		$v_jhkud = get_dashboard_url( $v_rdjoe, 'profile.php', $v_vfbff ); // obf
	} // obf

	/** // obf
	 * Filters the URL for a user's profile editor. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param string $v_jhkud     The complete URL including scheme and path. // obf
	 * @param int    $v_rdjoe The user ID. // obf
	 * @param string $v_vfbff  Scheme to give the URL context. Accepts 'http', 'https', 'login', // obf
	 *                        'login_post', 'admin', 'relative' or null. // obf
	 */ // obf
	return apply_filters( 'edit_profile_url', $v_jhkud, $v_rdjoe, $v_vfbff ); // obf
} // obf

/** // obf
 * Returns the canonical URL for a post. // obf
 * // obf
 * When the post is the same as the current requested page the function will handle the // obf
 * pagination arguments too. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @param int|WP_Post $v_xylhd Optional. Post ID or object. Default is global `$v_xylhd`. // obf
 * @return string|false The canonical URL. False if the post does not exist // obf
 *                      or has not been published yet. // obf
 */ // obf
function wp_get_canonical_url( $v_xylhd = null ) { // obf
	$v_xylhd = get_post( $v_xylhd ); // obf

	if ( ! $v_xylhd ) { // obf
		return false; // obf
	} // obf

	if ( 'publish' !== get_post_status( $v_xylhd ) ) { // obf
		return false; // obf
	} // obf

	$v_adbnd = get_permalink( $v_xylhd ); // obf

	// If a canonical is being generated for the current page, make sure it has pagination if needed. // obf
	if ( get_queried_object_id() === $v_xylhd->ID ) { // obf
		$v_qrorr = get_query_var( 'page', 0 ); // obf
		if ( $v_qrorr >= 2 ) { // obf
			if ( ! get_option( 'permalink_structure' ) ) { // obf
				$v_adbnd = add_query_arg( 'page', $v_qrorr, $v_adbnd ); // obf
			} else { // obf
				$v_adbnd = trailingslashit( $v_adbnd ) . user_trailingslashit( $v_qrorr, 'single_paged' ); // obf
			} // obf
		} // obf

		$v_aclrz = get_query_var( 'cpage', 0 ); // obf
		if ( $v_aclrz ) { // obf
			$v_adbnd = get_comments_pagenum_link( $v_aclrz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the canonical URL for a post. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string  $v_adbnd The post's canonical URL. // obf
	 * @param WP_Post $v_xylhd          Post object. // obf
	 */ // obf
	return apply_filters( 'get_canonical_url', $v_adbnd, $v_xylhd ); // obf
} // obf

/** // obf
 * Outputs rel=canonical for singular queries. // obf
 * // obf
 * @since 2.9.0 // obf
 * @since 4.6.0 Adjusted to use `wp_get_canonical_url()`. // obf
 */ // obf
function rel_canonical() { // obf
	if ( ! is_singular() ) { // obf
		return; // obf
	} // obf

	$v_uxkdf = get_queried_object_id(); // obf

	if ( 0 === $v_uxkdf ) { // obf
		return; // obf
	} // obf

	$v_jhkud = wp_get_canonical_url( $v_uxkdf ); // obf

	if ( ! empty( $v_jhkud ) ) { // obf
		echo '<link rel="canonical" href="' . esc_url( $v_jhkud ) . '" />' . "\n"; // obf
	} // obf
} // obf

/** // obf
 * Returns a shortlink for a post, page, attachment, or site. // obf
 * // obf
 * This function exists to provide a shortlink tag that all themes and plugins can target. // obf
 * A plugin must hook in to provide the actual shortlinks. Default shortlink support is // obf
 * limited to providing ?p= style links for posts. Plugins can short-circuit this function // obf
 * via the {@see 'pre_get_shortlink'} filter or filter the output via the {@see 'get_shortlink'} // obf
 * filter. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param int    $v_uxkdf          Optional. A post or site ID. Default is 0, which means the current post or site. // obf
 * @param string $v_moplf     Optional. Whether the ID is a 'site' ID, 'post' ID, or 'media' ID. If 'post', // obf
 *                            the post_type of the post is consulted. If 'query', the current query is consulted // obf
 *                            to determine the ID and context. Default 'post'. // obf
 * @param bool   $v_cyrdq Optional. Whether to allow post slugs in the shortlink. It is up to the plugin how // obf
 *                            and whether to honor this. Default true. // obf
 * @return string A shortlink or an empty string if no shortlink exists for the requested resource or if shortlinks // obf
 *                are not enabled. // obf
 */ // obf
function wp_get_shortlink( $v_uxkdf = 0, $v_moplf = 'post', $v_cyrdq = true ) { // obf
	/** // obf
	 * Filters whether to preempt generating a shortlink for the given post. // obf
	 * // obf
	 * Returning a value other than false from the filter will short-circuit // obf
	 * the shortlink generation process, returning that value instead. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param false|string $v_aciyn      Short-circuit return value. Either false or a URL string. // obf
	 * @param int          $v_uxkdf          Post ID, or 0 for the current post. // obf
	 * @param string       $v_moplf     The context for the link. One of 'post' or 'query', // obf
	 * @param bool         $v_cyrdq Whether to allow post slugs in the shortlink. // obf
	 */ // obf
	$v_eyzfg = apply_filters( 'pre_get_shortlink', false, $v_uxkdf, $v_moplf, $v_cyrdq ); // obf

	if ( false !== $v_eyzfg ) { // obf
		return $v_eyzfg; // obf
	} // obf

	$v_yynfz = 0; // obf
	if ( 'query' === $v_moplf && is_singular() ) { // obf
		$v_yynfz = get_queried_object_id(); // obf
		$v_xylhd    = get_post( $v_yynfz ); // obf
	} elseif ( 'post' === $v_moplf ) { // obf
		$v_xylhd = get_post( $v_uxkdf ); // obf
		if ( ! empty( $v_xylhd->ID ) ) { // obf
			$v_yynfz = $v_xylhd->ID; // obf
		} // obf
	} // obf

	$v_eyzfg = ''; // obf

	// Return `?p=` link for all public post types. // obf
	if ( ! empty( $v_yynfz ) ) { // obf
		$v_npqbn = get_post_type_object( $v_xylhd->post_type ); // obf

		if ( 'page' === $v_xylhd->post_type // obf
			&& 'page' === get_option( 'show_on_front' ) && (int) get_option( 'page_on_front' ) === $v_xylhd->ID // obf
		) { // obf
			$v_eyzfg = home_url( '/' ); // obf
		} elseif ( $v_npqbn && $v_npqbn->public ) { // obf
			$v_eyzfg = home_url( '?p=' . $v_yynfz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Filters the shortlink for a post. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_eyzfg   Shortlink URL. // obf
	 * @param int    $v_uxkdf          Post ID, or 0 for the current post. // obf
	 * @param string $v_moplf     The context for the link. One of 'post' or 'query', // obf
	 * @param bool   $v_cyrdq Whether to allow post slugs in the shortlink. Not used by default. // obf
	 */ // obf
	return apply_filters( 'get_shortlink', $v_eyzfg, $v_uxkdf, $v_moplf, $v_cyrdq ); // obf
} // obf

/** // obf
 * Injects rel=shortlink into the head if a shortlink is defined for the current page. // obf
 * // obf
 * Attached to the {@see 'wp_head'} action. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_shortlink_wp_head() { // obf
	$v_eyzfg = wp_get_shortlink( 0, 'query' ); // obf

	if ( empty( $v_eyzfg ) ) { // obf
		return; // obf
	} // obf

	echo "<link rel='shortlink' href='" . esc_url( $v_eyzfg ) . "' />\n"; // obf
} // obf

/** // obf
 * Sends a Link: rel=shortlink header if a shortlink is defined for the current page. // obf
 * // obf
 * Attached to the {@see 'wp'} action. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
function wp_shortlink_header() { // obf
	if ( headers_sent() ) { // obf
		return; // obf
	} // obf

	$v_eyzfg = wp_get_shortlink( 0, 'query' ); // obf

	if ( empty( $v_eyzfg ) ) { // obf
		return; // obf
	} // obf

	header( 'Link: <' . $v_eyzfg . '>; rel=shortlink', false ); // obf
} // obf

/** // obf
 * Displays the shortlink for a post. // obf
 * // obf
 * Must be called from inside "The Loop" // obf
 * // obf
 * Call like the_shortlink( __( 'Shortlinkage FTW' ) ) // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 6.8.0 Removed title attribute. // obf
 * // obf
 * @param string $v_wjebn   Optional. The link text or HTML to be displayed. Defaults to 'This is the short link.' // obf
 * @param string $v_snnyy  Unused. // obf
 * @param string $v_cmxjm Optional. HTML to display before the link. Default empty. // obf
 * @param string $v_hyooc  Optional. HTML to display after the link. Default empty. // obf
 */ // obf
function the_shortlink( $v_wjebn = '', $v_snnyy = '', $v_cmxjm = '', $v_hyooc = '' ) { // obf
	$v_xylhd = get_post(); // obf

	if ( empty( $v_wjebn ) ) { // obf
		$v_wjebn = __( 'This is the short link.' ); // obf
	} // obf

	$v_eyzfg = wp_get_shortlink( $v_xylhd->ID ); // obf

	if ( ! empty( $v_eyzfg ) ) { // obf
		$v_zmfkb = '<a rel="shortlink" href="' . esc_url( $v_eyzfg ) . '">' . $v_wjebn . '</a>'; // obf

		/** // obf
		 * Filters the short link anchor tag for a post. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string $v_zmfkb      Shortlink anchor tag. // obf
		 * @param string $v_eyzfg Shortlink URL. // obf
		 * @param string $v_wjebn      Shortlink's text. // obf
		 * @param string $v_snnyy     Shortlink's title attribute. Unused. // obf
		 */ // obf
		$v_zmfkb = apply_filters( 'the_shortlink', $v_zmfkb, $v_eyzfg, $v_wjebn, $v_snnyy ); // obf
		echo $v_cmxjm, $v_zmfkb, $v_hyooc; // obf
	} // obf
} // obf

/** // obf
 * Retrieves the avatar URL. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @param mixed $v_xfmsc The avatar to retrieve a URL for. Accepts a user ID, Gravatar SHA-256 or MD5 hash, // obf
 *                           user email, WP_User object, WP_Post object, or WP_Comment object. // obf
 * @param array $v_ewilw { // obf
 *     Optional. Arguments to use instead of the default arguments. // obf
 * // obf
 *     @type int    $v_ddqnb           Height and width of the avatar in pixels. Default 96. // obf
 *     @type string $v_xhlrv        URL for the default image or a default type. Accepts: // obf
 *                                  - '404' (return a 404 instead of a default image) // obf
 *                                  - 'retro' (a 8-bit arcade-style pixelated face) // obf
 *                                  - 'robohash' (a robot) // obf
 *                                  - 'monsterid' (a monster) // obf
 *                                  - 'wavatar' (a cartoon face) // obf
 *                                  - 'identicon' (the "quilt", a geometric pattern) // obf
 *                                  - 'initials' (initials based avatar with background color) // obf
 *                                  - 'color' (generated background color) // obf
 *                                  - 'mystery', 'mm', or 'mysteryman' (The Oyster Man) // obf
 *                                  - 'blank' (transparent GIF) // obf
 *                                  - 'gravatar_default' (the Gravatar logo) // obf
 *                                  Default is the value of the 'avatar_default' option, // obf
 *                                  with a fallback of 'mystery'. // obf
 *     @type bool   $v_kgvgt  Whether to always show the default image, never the Gravatar. // obf
 *                                  Default false. // obf
 *     @type string $v_rjjkn         What rating to display avatars up to. Accepts: // obf
 *                                  - 'G' (suitable for all audiences) // obf
 *                                  - 'PG' (possibly offensive, usually for audiences 13 and above) // obf
 *                                  - 'R' (intended for adult audiences above 17) // obf
 *                                  - 'X' (even more mature than above) // obf
 *                                  Default is the value of the 'avatar_rating' option. // obf
 *     @type string $v_vfbff         URL scheme to use. See set_url_scheme() for accepted values. // obf
 *                                  Default null. // obf
 *     @type array  $v_myigz When the function returns, the value will be the processed/sanitized $v_ewilw // obf
 *                                  plus a "found_avatar" guess. Pass as a reference. Default null. // obf
 * } // obf
 * @return string|false The URL of the avatar on success, false on failure. // obf
 */ // obf
function get_avatar_url( $v_xfmsc, $v_ewilw = null ) { // obf
	$v_ewilw = get_avatar_data( $v_xfmsc, $v_ewilw ); // obf
	return $v_ewilw['url']; // obf
} // obf

/** // obf
 * Check if this comment type allows avatars to be retrieved. // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @param string $v_ckopy Comment type to check. // obf
 * @return bool Whether the comment type is allowed for retrieving avatars. // obf
 */ // obf
function is_avatar_comment_type( $v_ckopy ) { // obf
	/** // obf
	 * Filters the list of allowed comment types for retrieving avatars. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_hfcja An array of content types. Default only contains 'comment'. // obf
	 */ // obf
	$v_rgnek = apply_filters( 'get_avatar_comment_types', array( 'comment' ) ); // obf

	return in_array( $v_ckopy, (array) $v_rgnek, true ); // obf
} // obf

/** // obf
 * Retrieves default data about the avatar. // obf
 * // obf
 * @since 4.2.0 // obf
 * @since 6.7.0 Gravatar URLs always use HTTPS. // obf
 * @since 6.8.0 Gravatar URLs use the SHA-256 hashing algorithm. // obf
 * // obf
 * @param mixed $v_xfmsc The avatar to retrieve. Accepts a user ID, Gravatar SHA-256 or MD5 hash, // obf
 *                           user email, WP_User object, WP_Post object, or WP_Comment object. // obf
 * @param array $v_ewilw { // obf
 *     Optional. Arguments to use instead of the default arguments. // obf
 * // obf
 *     @type int    $v_ddqnb           Height and width of the avatar in pixels. Default 96. // obf
 *     @type int    $v_fvhyc         Display height of the avatar in pixels. Defaults to $v_ddqnb. // obf
 *     @type int    $v_aqjtn          Display width of the avatar in pixels. Defaults to $v_ddqnb. // obf
 *     @type string $v_xhlrv        URL for the default image or a default type. Accepts: // obf
 *                                  - '404' (return a 404 instead of a default image) // obf
 *                                  - 'retro' (a 8-bit arcade-style pixelated face) // obf
 *                                  - 'robohash' (a robot) // obf
 *                                  - 'monsterid' (a monster) // obf
 *                                  - 'wavatar' (a cartoon face) // obf
 *                                  - 'identicon' (the "quilt", a geometric pattern) // obf
 *                                  - 'initials' (initials based avatar with background color) // obf
 *                                  - 'color' (generated background color) // obf
 *                                  - 'mystery', 'mm', or 'mysteryman' (The Oyster Man) // obf
 *                                  - 'blank' (transparent GIF) // obf
 *                                  - 'gravatar_default' (the Gravatar logo) // obf
 *                                  Default is the value of the 'avatar_default' option, // obf
 *                                  with a fallback of 'mystery'. // obf
 *     @type bool   $v_kgvgt  Whether to always show the default image, never the Gravatar. // obf
 *                                  Default false. // obf
 *     @type string $v_rjjkn         What rating to display avatars up to. Accepts: // obf
 *                                  - 'G' (suitable for all audiences) // obf
 *                                  - 'PG' (possibly offensive, usually for audiences 13 and above) // obf
 *                                  - 'R' (intended for adult audiences above 17) // obf
 *                                  - 'X' (even more mature than above) // obf
 *                                  Default is the value of the 'avatar_rating' option. // obf
 *     @type string $v_vfbff         URL scheme to use. See set_url_scheme() for accepted values. // obf
 *                                  For Gravatars this setting is ignored and HTTPS is used to avoid // obf
 *                                  unnecessary redirects. The setting is retained for systems using // obf
 *                                  the {@see 'pre_get_avatar_data'} filter to customize avatars. // obf
 *                                  Default null. // obf
 *     @type array  $v_myigz When the function returns, the value will be the processed/sanitized $v_ewilw // obf
 *                                  plus a "found_avatar" guess. Pass as a reference. Default null. // obf
 *     @type string $v_iceub     HTML attributes to insert in the IMG element. Is not sanitized. // obf
 *                                  Default empty. // obf
 * } // obf
 * @return array { // obf
 *     Along with the arguments passed in `$v_ewilw`, this will contain a couple of extra arguments. // obf
 * // obf
 *     @type bool         $v_qagaw True if an avatar was found for this user, // obf
 *                                      false or not set if none was found. // obf
 *     @type string|false $v_jhkud          The URL of the avatar that was found, or false. // obf
 * } // obf
 */ // obf
function get_avatar_data( $v_xfmsc, $v_ewilw = null ) { // obf
	$v_ewilw = wp_parse_args( // obf
		$v_ewilw, // obf
		array( // obf
			'size'           => 96, // obf
			'height'         => null, // obf
			'width'          => null, // obf
			'default'        => get_option( 'avatar_default', 'mystery' ), // obf
			'force_default'  => false, // obf
			'rating'         => get_option( 'avatar_rating' ), // obf
			'scheme'         => null, // obf
			'processed_args' => null, // If used, should be a reference. // obf
			'extra_attr'     => '', // obf
		) // obf
	); // obf

	if ( is_numeric( $v_ewilw['size'] ) ) { // obf
		$v_ewilw['size'] = absint( $v_ewilw['size'] ); // obf
		if ( ! $v_ewilw['size'] ) { // obf
			$v_ewilw['size'] = 96; // obf
		} // obf
	} else { // obf
		$v_ewilw['size'] = 96; // obf
	} // obf

	if ( is_numeric( $v_ewilw['height'] ) ) { // obf
		$v_ewilw['height'] = absint( $v_ewilw['height'] ); // obf
		if ( ! $v_ewilw['height'] ) { // obf
			$v_ewilw['height'] = $v_ewilw['size']; // obf
		} // obf
	} else { // obf
		$v_ewilw['height'] = $v_ewilw['size']; // obf
	} // obf

	if ( is_numeric( $v_ewilw['width'] ) ) { // obf
		$v_ewilw['width'] = absint( $v_ewilw['width'] ); // obf
		if ( ! $v_ewilw['width'] ) { // obf
			$v_ewilw['width'] = $v_ewilw['size']; // obf
		} // obf
	} else { // obf
		$v_ewilw['width'] = $v_ewilw['size']; // obf
	} // obf

	if ( empty( $v_ewilw['default'] ) ) { // obf
		$v_ewilw['default'] = get_option( 'avatar_default', 'mystery' ); // obf
	} // obf

	switch ( $v_ewilw['default'] ) { // obf
		case 'mm': // obf
		case 'mystery': // obf
		case 'mysteryman': // obf
			$v_ewilw['default'] = 'mm'; // obf
			break; // obf
		case 'gravatar_default': // obf
			$v_ewilw['default'] = false; // obf
			break; // obf
	} // obf

	$v_ewilw['force_default'] = (bool) $v_ewilw['force_default']; // obf

	$v_ewilw['rating'] = strtolower( $v_ewilw['rating'] ); // obf

	$v_ewilw['found_avatar'] = false; // obf

	/** // obf
	 * Filters whether to retrieve the avatar URL early. // obf
	 * // obf
	 * Passing a non-null value in the 'url' member of the return array will // obf
	 * effectively short circuit get_avatar_data(), passing the value through // obf
	 * the {@see 'get_avatar_data'} filter and returning early. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array $v_ewilw        Arguments passed to get_avatar_data(), after processing. // obf
	 * @param mixed $v_xfmsc The avatar to retrieve. Accepts a user ID, Gravatar SHA-256 or MD5 hash, // obf
	 *                           user email, WP_User object, WP_Post object, or WP_Comment object. // obf
	 */ // obf
	$v_ewilw = apply_filters( 'pre_get_avatar_data', $v_ewilw, $v_xfmsc ); // obf

	if ( isset( $v_ewilw['url'] ) ) { // obf
		/** This filter is documented in wp-includes/link-template.php */ // obf
		return apply_filters( 'get_avatar_data', $v_ewilw, $v_xfmsc ); // obf
	} // obf

	$v_nwrjo = ''; // obf
	$v_vmzzd       = false; // obf
	$v_isnxy      = false; // obf

	if ( is_object( $v_xfmsc ) && isset( $v_xfmsc->comment_ID ) ) { // obf
		$v_xfmsc = get_comment( $v_xfmsc ); // obf
	} // obf

	// Process the user identifier. // obf
	if ( is_numeric( $v_xfmsc ) ) { // obf
		$v_vmzzd = get_user_by( 'id', absint( $v_xfmsc ) ); // obf
	} elseif ( is_string( $v_xfmsc ) ) { // obf
		if ( str_contains( $v_xfmsc, '@sha256.gravatar.com' ) ) { // obf
			// SHA-256 hash. // obf
			list( $v_nwrjo ) = explode( '@', $v_xfmsc ); // obf
		} elseif ( str_contains( $v_xfmsc, '@md5.gravatar.com' ) ) { // obf
			// MD5 hash. // obf
			list( $v_nwrjo ) = explode( '@', $v_xfmsc ); // obf
		} else { // obf
			// Email address. // obf
			$v_isnxy = $v_xfmsc; // obf
		} // obf
	} elseif ( $v_xfmsc instanceof WP_User ) { // obf
		// User object. // obf
		$v_vmzzd = $v_xfmsc; // obf
	} elseif ( $v_xfmsc instanceof WP_Post ) { // obf
		// Post object. // obf
		$v_vmzzd = get_user_by( 'id', (int) $v_xfmsc->post_author ); // obf
	} elseif ( $v_xfmsc instanceof WP_Comment ) { // obf
		if ( ! is_avatar_comment_type( get_comment_type( $v_xfmsc ) ) ) { // obf
			$v_ewilw['url'] = false; // obf
			/** This filter is documented in wp-includes/link-template.php */ // obf
			return apply_filters( 'get_avatar_data', $v_ewilw, $v_xfmsc ); // obf
		} // obf

		if ( ! empty( $v_xfmsc->user_id ) ) { // obf
			$v_vmzzd = get_user_by( 'id', (int) $v_xfmsc->user_id ); // obf
		} // obf
		if ( ( ! $v_vmzzd || is_wp_error( $v_vmzzd ) ) && ! empty( $v_xfmsc->comment_author_email ) ) { // obf
			$v_isnxy = $v_xfmsc->comment_author_email; // obf
		} // obf
	} // obf

	if ( ! $v_nwrjo ) { // obf
		if ( $v_vmzzd ) { // obf
			$v_isnxy = $v_vmzzd->user_email; // obf
		} // obf

		if ( $v_isnxy ) { // obf
			$v_nwrjo = hash( 'sha256', strtolower( trim( $v_isnxy ) ) ); // obf
		} // obf
	} // obf

	if ( $v_nwrjo ) { // obf
		$v_ewilw['found_avatar'] = true; // obf
	} // obf

	$v_kzrlx = array( // obf
		's' => $v_ewilw['size'], // obf
		'd' => $v_ewilw['default'], // obf
		'f' => $v_ewilw['force_default'] ? 'y' : false, // obf
		'r' => $v_ewilw['rating'], // obf
	); // obf

	// Handle additional parameters for the 'initials' avatar type // obf
	if ( 'initials' === $v_ewilw['default'] ) { // obf
		$v_oxbsw = ''; // obf

		if ( $v_vmzzd ) { // obf
			$v_oxbsw = ! empty( $v_vmzzd->display_name ) ? $v_vmzzd->display_name : // obf
					( ! empty( $v_vmzzd->first_name ) && ! empty( $v_vmzzd->last_name ) ? // obf
					$v_vmzzd->first_name . ' ' . $v_vmzzd->last_name : $v_vmzzd->user_login ); // obf
		} elseif ( is_object( $v_xfmsc ) && isset( $v_xfmsc->comment_author ) ) { // obf
			$v_oxbsw = $v_xfmsc->comment_author; // obf
		} elseif ( is_string( $v_xfmsc ) && false !== strpos( $v_xfmsc, '@' ) ) { // obf
			$v_oxbsw = str_replace( array( '.', '_', '-' ), ' ', substr( $v_xfmsc, 0, strpos( $v_xfmsc, '@' ) ) ); // obf
		} // obf

		if ( ! empty( $v_oxbsw ) ) { // obf
			if ( preg_match( '/\p{Han}|\p{Hiragana}|\p{Katakana}|\p{Hangul}/u', $v_oxbsw ) || false === strpos( $v_oxbsw, ' ' ) ) { // obf
				$v_dtefd = mb_substr( $v_oxbsw, 0, min( 2, mb_strlen( $v_oxbsw, 'UTF-8' ) ), 'UTF-8' ); // obf
			} else { // obf
				$v_avxxv    = mb_substr( $v_oxbsw, 0, 1, 'UTF-8' ); // obf
				$v_cdhnq     = mb_substr( $v_oxbsw, strrpos( $v_oxbsw, ' ' ) + 1, 1, 'UTF-8' ); // obf
				$v_dtefd = $v_avxxv . $v_cdhnq; // obf
			} // obf

			$v_kzrlx['initials'] = $v_dtefd; // obf
		} // obf
	} // obf

	/* // obf
	 * Gravatars are always served over HTTPS. // obf
	 * // obf
	 * The Gravatar website redirects HTTP requests to HTTPS URLs so always // obf
	 * use the HTTPS scheme to avoid unnecessary redirects. // obf
	 */ // obf
	$v_jhkud = 'https://secure.gravatar.com/avatar/' . $v_nwrjo; // obf

	$v_jhkud = add_query_arg( // obf
		rawurlencode_deep( array_filter( $v_kzrlx ) ), // obf
		$v_jhkud // obf
	); // obf

	/** // obf
	 * Filters the avatar URL. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_jhkud         The URL of the avatar. // obf
	 * @param mixed  $v_xfmsc The avatar to retrieve. Accepts a user ID, Gravatar SHA-256 or MD5 hash, // obf
	 *                            user email, WP_User object, WP_Post object, or WP_Comment object. // obf
	 * @param array  $v_ewilw        Arguments passed to get_avatar_data(), after processing. // obf
	 */ // obf
	$v_ewilw['url'] = apply_filters( 'get_avatar_url', $v_jhkud, $v_xfmsc, $v_ewilw ); // obf

	/** // obf
	 * Filters the avatar data. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array $v_ewilw        Arguments passed to get_avatar_data(), after processing. // obf
	 * @param mixed $v_xfmsc The avatar to retrieve. Accepts a user ID, Gravatar SHA-256 or MD5 hash, // obf
	 *                           user email, WP_User object, WP_Post object, or WP_Comment object. // obf
	 */ // obf
	return apply_filters( 'get_avatar_data', $v_ewilw, $v_xfmsc ); // obf
} // obf

/** // obf
 * Retrieves the URL of a file in the theme. // obf
 * // obf
 * Searches in the stylesheet directory before the template directory so themes // obf
 * which inherit from a parent theme can just override one file. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @param string $v_jagyt Optional. File to search for in the stylesheet directory. // obf
 * @return string The URL of the file. // obf
 */ // obf
function get_theme_file_uri( $v_jagyt = '' ) { // obf
	$v_jagyt = ltrim( $v_jagyt, '/' ); // obf

	$v_svveg = get_stylesheet_directory(); // obf

	if ( empty( $v_jagyt ) ) { // obf
		$v_jhkud = get_stylesheet_directory_uri(); // obf
	} elseif ( get_template_directory() !== $v_svveg && file_exists( $v_svveg . '/' . $v_jagyt ) ) { // obf
		$v_jhkud = get_stylesheet_directory_uri() . '/' . $v_jagyt; // obf
	} else { // obf
		$v_jhkud = get_template_directory_uri() . '/' . $v_jagyt; // obf
	} // obf

	/** // obf
	 * Filters the URL to a file in the theme. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_jhkud  The file URL. // obf
	 * @param string $v_jagyt The requested file to search for. // obf
	 */ // obf
	return apply_filters( 'theme_file_uri', $v_jhkud, $v_jagyt ); // obf
} // obf

/** // obf
 * Retrieves the URL of a file in the parent theme. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @param string $v_jagyt Optional. File to return the URL for in the template directory. // obf
 * @return string The URL of the file. // obf
 */ // obf
function get_parent_theme_file_uri( $v_jagyt = '' ) { // obf
	$v_jagyt = ltrim( $v_jagyt, '/' ); // obf

	if ( empty( $v_jagyt ) ) { // obf
		$v_jhkud = get_template_directory_uri(); // obf
	} else { // obf
		$v_jhkud = get_template_directory_uri() . '/' . $v_jagyt; // obf
	} // obf

	/** // obf
	 * Filters the URL to a file in the parent theme. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_jhkud  The file URL. // obf
	 * @param string $v_jagyt The requested file to search for. // obf
	 */ // obf
	return apply_filters( 'parent_theme_file_uri', $v_jhkud, $v_jagyt ); // obf
} // obf

/** // obf
 * Retrieves the path of a file in the theme. // obf
 * // obf
 * Searches in the stylesheet directory before the template directory so themes // obf
 * which inherit from a parent theme can just override one file. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @param string $v_jagyt Optional. File to search for in the stylesheet directory. // obf
 * @return string The path of the file. // obf
 */ // obf
function get_theme_file_path( $v_jagyt = '' ) { // obf
	$v_jagyt = ltrim( $v_jagyt, '/' ); // obf

	$v_svveg = get_stylesheet_directory(); // obf
	$v_vzwzg   = get_template_directory(); // obf

	if ( empty( $v_jagyt ) ) { // obf
		$v_hvcqn = $v_svveg; // obf
	} elseif ( $v_svveg !== $v_vzwzg && file_exists( $v_svveg . '/' . $v_jagyt ) ) { // obf
		$v_hvcqn = $v_svveg . '/' . $v_jagyt; // obf
	} else { // obf
		$v_hvcqn = $v_vzwzg . '/' . $v_jagyt; // obf
	} // obf

	/** // obf
	 * Filters the path to a file in the theme. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_hvcqn The file path. // obf
	 * @param string $v_jagyt The requested file to search for. // obf
	 */ // obf
	return apply_filters( 'theme_file_path', $v_hvcqn, $v_jagyt ); // obf
} // obf

/** // obf
 * Retrieves the path of a file in the parent theme. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @param string $v_jagyt Optional. File to return the path for in the template directory. // obf
 * @return string The path of the file. // obf
 */ // obf
function get_parent_theme_file_path( $v_jagyt = '' ) { // obf
	$v_jagyt = ltrim( $v_jagyt, '/' ); // obf

	if ( empty( $v_jagyt ) ) { // obf
		$v_hvcqn = get_template_directory(); // obf
	} else { // obf
		$v_hvcqn = get_template_directory() . '/' . $v_jagyt; // obf
	} // obf

	/** // obf
	 * Filters the path to a file in the parent theme. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_hvcqn The file path. // obf
	 * @param string $v_jagyt The requested file to search for. // obf
	 */ // obf
	return apply_filters( 'parent_theme_file_path', $v_hvcqn, $v_jagyt ); // obf
} // obf

/** // obf
 * Retrieves the URL to the privacy policy page. // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @return string The URL to the privacy policy page. Empty string if it doesn't exist. // obf
 */ // obf
function get_privacy_policy_url() { // obf
	$v_jhkud            = ''; // obf
	$v_xvcxs = (int) get_option( 'wp_page_for_privacy_policy' ); // obf

	if ( ! empty( $v_xvcxs ) && get_post_status( $v_xvcxs ) === 'publish' ) { // obf
		$v_jhkud = (string) get_permalink( $v_xvcxs ); // obf
	} // obf

	/** // obf
	 * Filters the URL of the privacy policy page. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param string $v_jhkud            The URL to the privacy policy page. Empty string // obf
	 *                               if it doesn't exist. // obf
	 * @param int    $v_xvcxs The ID of privacy policy page. // obf
	 */ // obf
	return apply_filters( 'privacy_policy_url', $v_jhkud, $v_xvcxs ); // obf
} // obf

/** // obf
 * Displays the privacy policy link with formatting, when applicable. // obf
 * // obf
 * @since 4.9.6 // obf
 * // obf
 * @param string $v_cmxjm Optional. Display before privacy policy link. Default empty. // obf
 * @param string $v_hyooc  Optional. Display after privacy policy link. Default empty. // obf
 */ // obf
function the_privacy_policy_link( $v_cmxjm = '', $v_hyooc = '' ) { // obf
	echo get_the_privacy_policy_link( $v_cmxjm, $v_hyooc ); // obf
} // obf

/** // obf
 * Returns the privacy policy link with formatting, when applicable. // obf
 * // obf
 * @since 4.9.6 // obf
 * @since 6.2.0 Added 'privacy-policy' rel attribute. // obf
 * // obf
 * @param string $v_cmxjm Optional. Display before privacy policy link. Default empty. // obf
 * @param string $v_hyooc  Optional. Display after privacy policy link. Default empty. // obf
 * @return string Markup for the link and surrounding elements. Empty string if it // obf
 *                doesn't exist. // obf
 */ // obf
function get_the_privacy_policy_link( $v_cmxjm = '', $v_hyooc = '' ) { // obf
	$v_zmfkb               = ''; // obf
	$v_wzyei = get_privacy_policy_url(); // obf
	$v_xvcxs     = (int) get_option( 'wp_page_for_privacy_policy' ); // obf
	$v_yrnlq         = ( $v_xvcxs ) ? get_the_title( $v_xvcxs ) : ''; // obf

	if ( $v_wzyei && $v_yrnlq ) { // obf
		$v_zmfkb = sprintf( // obf
			'<a class="privacy-policy-link" href="%s" rel="privacy-policy">%s</a>', // obf
			esc_url( $v_wzyei ), // obf
			esc_html( $v_yrnlq ) // obf
		); // obf
	} // obf

	/** // obf
	 * Filters the privacy policy link. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param string $v_zmfkb               The privacy policy link. Empty string if it // obf
	 *                                   doesn't exist. // obf
	 * @param string $v_wzyei The URL of the privacy policy. Empty string // obf
	 *                                   if it doesn't exist. // obf
	 */ // obf
	$v_zmfkb = apply_filters( 'the_privacy_policy_link', $v_zmfkb, $v_wzyei ); // obf

	if ( $v_zmfkb ) { // obf
		return $v_cmxjm . $v_zmfkb . $v_hyooc; // obf
	} // obf

	return ''; // obf
} // obf

/** // obf
 * Returns an array of URL hosts which are considered to be internal hosts. // obf
 * // obf
 * By default the list of internal hosts is comprised of the host name of // obf
 * the site's home_url() (as parsed by wp_parse_url()). // obf
 * // obf
 * This list is used when determining if a specified URL is a link to a page on // obf
 * the site itself or a link offsite (to an external host). This is used, for // obf
 * example, when determining if the "nofollow" attribute should be applied to a // obf
 * link. // obf
 * // obf
 * @see wp_is_internal_link // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @return string[] An array of URL hosts. // obf
 */ // obf
function wp_internal_hosts() { // obf
	static $v_wrija; // obf

	if ( empty( $v_wrija ) ) { // obf
		/** // obf
		 * Filters the array of URL hosts which are considered internal. // obf
		 * // obf
		 * @since 6.2.0 // obf
		 * // obf
		 * @param string[] $v_wrija An array of internal URL hostnames. // obf
		 */ // obf
		$v_wrija = apply_filters( // obf
			'wp_internal_hosts', // obf
			array( // obf
				wp_parse_url( home_url(), PHP_URL_HOST ), // obf
			) // obf
		); // obf
		$v_wrija = array_unique( // obf
			array_map( 'strtolower', (array) $v_wrija ) // obf
		); // obf
	} // obf

	return $v_wrija; // obf
} // obf

/** // obf
 * Determines whether or not the specified URL is of a host included in the internal hosts list. // obf
 * // obf
 * @see wp_internal_hosts() // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @param string $v_zmfkb The URL to test. // obf
 * @return bool Returns true for internal URLs and false for all other URLs. // obf
 */ // obf
function wp_is_internal_link( $v_zmfkb ) { // obf
	$v_zmfkb = strtolower( $v_zmfkb ); // obf
	if ( in_array( wp_parse_url( $v_zmfkb, PHP_URL_SCHEME ), wp_allowed_protocols(), true ) ) { // obf
		return in_array( wp_parse_url( $v_zmfkb, PHP_URL_HOST ), wp_internal_hosts(), true ); // obf
	} // obf
	return false; // obf
} // obf