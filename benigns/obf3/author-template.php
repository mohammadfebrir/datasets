

<?php // obf
/** // obf
 * Author Template functions for use in themes. // obf
 * // obf
 * These functions must be used within the WordPress Loop. // obf
 * // obf
 * @link https://codex.wordpress.org/Author_Templates // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 */ // obf

/** // obf
 * Retrieves the author of the current post. // obf
 * // obf
 * @since 1.5.0 // obf
 * @since 6.3.0 Returns an empty string if the author's display name is unknown. // obf
 * // obf
 * @global WP_User $v_ghfkf The current author's data. // obf
 * // obf
 * @param string $v_hvisi Deprecated. // obf
 * @return string The author's display name, empty string if unknown. // obf
 */ // obf
function get_the_author( $v_hvisi = '' ) { // obf
	global $v_ghfkf; // obf

	if ( ! empty( $v_hvisi ) ) { // obf
		_deprecated_argument( __FUNCTION__, '2.1.0' ); // obf
	} // obf

	/** // obf
	 * Filters the display name of the current post's author. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_cuthw The author's display name. // obf
	 */ // obf
	return apply_filters( 'the_author', is_object( $v_ghfkf ) ? $v_ghfkf->display_name : '' ); // obf
} // obf

/** // obf
 * Displays the name of the author of the current post. // obf
 * // obf
 * The behavior of this function is based off of old functionality predating // obf
 * get_the_author(). This function is not deprecated, but is designed to echo // obf
 * the value from get_the_author() and as an result of any old theme that might // obf
 * still use the old behavior will also pass the value from get_the_author(). // obf
 * // obf
 * The normal, expected behavior of this function is to echo the author and not // obf
 * return it. However, backward compatibility has to be maintained. // obf
 * // obf
 * @since 0.71 // obf
 * // obf
 * @see get_the_author() // obf
 * @link https://developer.wordpress.org/reference/functions/the_author/ // obf
 * // obf
 * @param string $v_hvisi      Deprecated. // obf
 * @param bool   $v_qqyuq Deprecated. Use get_the_author(). Echo the string or return it. // obf
 * @return string The author's display name, from get_the_author(). // obf
 */ // obf
function the_author( $v_hvisi = '', $v_qqyuq = true ) { // obf
	if ( ! empty( $v_hvisi ) ) { // obf
		_deprecated_argument( __FUNCTION__, '2.1.0' ); // obf
	} // obf

	if ( true !== $v_qqyuq ) { // obf
		_deprecated_argument( // obf
			__FUNCTION__, // obf
			'1.5.0', // obf
			sprintf( // obf
				/* translators: %s: get_the_author() */ // obf
				__( 'Use %s instead if you do not want the value echoed.' ), // obf
				'<code>get_the_author()</code>' // obf
			) // obf
		); // obf
	} // obf

	if ( $v_qqyuq ) { // obf
		echo get_the_author(); // obf
	} // obf

	return get_the_author(); // obf
} // obf

/** // obf
 * Retrieves the author who last edited the current post. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @return string|void The author's display name, empty string if unknown. // obf
 */ // obf
function get_the_modified_author() { // obf
	$v_xalbc = get_post_meta( get_post()->ID, '_edit_last', true ); // obf

	if ( $v_xalbc ) { // obf
		$v_pcwrs = get_userdata( $v_xalbc ); // obf

		/** // obf
		 * Filters the display name of the author who last edited the current post. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string $v_cuthw The author's display name, empty string if unknown. // obf
		 */ // obf
		return apply_filters( 'the_modified_author', $v_pcwrs ? $v_pcwrs->display_name : '' ); // obf
	} // obf
} // obf

/** // obf
 * Displays the name of the author who last edited the current post, // obf
 * if the author's ID is available. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see get_the_author() // obf
 */ // obf
function the_modified_author() { // obf
	echo get_the_modified_author(); // obf
} // obf

/** // obf
 * Retrieves the requested data of the author of the current post. // obf
 * // obf
 * Valid values for the `$v_rjoet` parameter include: // obf
 * // obf
 * - admin_color // obf
 * - aim // obf
 * - comment_shortcuts // obf
 * - description // obf
 * - display_name // obf
 * - first_name // obf
 * - ID // obf
 * - jabber // obf
 * - last_name // obf
 * - nickname // obf
 * - plugins_last_view // obf
 * - plugins_per_page // obf
 * - rich_editing // obf
 * - syntax_highlighting // obf
 * - user_activation_key // obf
 * - user_description // obf
 * - user_email // obf
 * - user_firstname // obf
 * - user_lastname // obf
 * - user_level // obf
 * - user_login // obf
 * - user_nicename // obf
 * - user_pass // obf
 * - user_registered // obf
 * - user_status // obf
 * - user_url // obf
 * - yim // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @global WP_User $v_ghfkf The current author's data. // obf
 * // obf
 * @param string    $v_rjoet   Optional. The user field to retrieve. Default empty. // obf
 * @param int|false $v_kqhrh Optional. User ID. Defaults to the current post author. // obf
 * @return string The author's field from the current author's DB object, otherwise an empty string. // obf
 */ // obf
function get_the_author_meta( $v_rjoet = '', $v_kqhrh = false ) { // obf
	$v_lqhbv = $v_kqhrh; // obf

	if ( ! $v_kqhrh ) { // obf
		global $v_ghfkf; // obf
		$v_kqhrh = isset( $v_ghfkf->ID ) ? $v_ghfkf->ID : 0; // obf
	} else { // obf
		$v_ghfkf = get_userdata( $v_kqhrh ); // obf
	} // obf

	if ( in_array( $v_rjoet, array( 'login', 'pass', 'nicename', 'email', 'url', 'registered', 'activation_key', 'status' ), true ) ) { // obf
		$v_rjoet = 'user_' . $v_rjoet; // obf
	} // obf

	$v_tpfol = isset( $v_ghfkf->$v_rjoet ) ? $v_ghfkf->$v_rjoet : ''; // obf

	/** // obf
	 * Filters the value of the requested user metadata. // obf
	 * // obf
	 * The filter name is dynamic and depends on the $v_rjoet parameter of the function. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.3.0 The `$v_lqhbv` parameter was added. // obf
	 * // obf
	 * @param string    $v_tpfol            The value of the metadata. // obf
	 * @param int       $v_kqhrh          The user ID for the value. // obf
	 * @param int|false $v_lqhbv The original user ID, as passed to the function. // obf
	 */ // obf
	return apply_filters( "get_the_author_{$v_rjoet}", $v_tpfol, $v_kqhrh, $v_lqhbv ); // obf
} // obf

/** // obf
 * Outputs the field from the user's DB object. Defaults to current post's author. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string    $v_rjoet   Selects the field of the users record. See get_the_author_meta() // obf
 *                           for the list of possible fields. // obf
 * @param int|false $v_kqhrh Optional. User ID. Defaults to the current post author. // obf
 * // obf
 * @see get_the_author_meta() // obf
 */ // obf
function the_author_meta( $v_rjoet = '', $v_kqhrh = false ) { // obf
	$v_xdjbg = get_the_author_meta( $v_rjoet, $v_kqhrh ); // obf

	/** // obf
	 * Filters the value of the requested user metadata. // obf
	 * // obf
	 * The filter name is dynamic and depends on the $v_rjoet parameter of the function. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string    $v_xdjbg The value of the metadata. // obf
	 * @param int|false $v_kqhrh     The user ID. // obf
	 */ // obf
	echo apply_filters( "the_author_{$v_rjoet}", $v_xdjbg, $v_kqhrh ); // obf
} // obf

/** // obf
 * Retrieves either author's link or author's name. // obf
 * // obf
 * If the author has a home page set, return an HTML link, otherwise just return // obf
 * the author's name. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @global WP_User $v_ghfkf The current author's data. // obf
 * // obf
 * @return string An HTML link if the author's URL exists in user meta, // obf
 *                otherwise the result of get_the_author(). // obf
 */ // obf
function get_the_author_link() { // obf
	if ( get_the_author_meta( 'url' ) ) { // obf
		global $v_ghfkf; // obf

		$v_uanag          = get_the_author_meta( 'url' ); // obf
		$v_sipta = get_the_author(); // obf

		$v_tfiii = sprintf( // obf
			'<a href="%1$v_mnojs" title="%2$v_mnojs" rel="author external">%3$v_mnojs</a>', // obf
			esc_url( $v_uanag ), // obf
			/* translators: %s: Author's display name. */ // obf
			esc_attr( sprintf( __( 'Visit %s&#8217;s website' ), $v_sipta ) ), // obf
			$v_sipta // obf
		); // obf

		/** // obf
		 * Filters the author URL link HTML. // obf
		 * // obf
		 * @since 6.0.0 // obf
		 * // obf
		 * @param string  $v_tfiii       The default rendered author HTML link. // obf
		 * @param string  $v_uanag Author's URL. // obf
		 * @param WP_User $v_ghfkf Author user data. // obf
		 */ // obf
		return apply_filters( 'the_author_link', $v_tfiii, $v_uanag, $v_ghfkf ); // obf
	} else { // obf
		return get_the_author(); // obf
	} // obf
} // obf

/** // obf
 * Displays either author's link or author's name. // obf
 * // obf
 * If the author has a home page set, echo an HTML link, otherwise just echo the // obf
 * author's name. // obf
 * // obf
 * @link https://developer.wordpress.org/reference/functions/the_author_link/ // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
function the_author_link() { // obf
	echo get_the_author_link(); // obf
} // obf

/** // obf
 * Retrieves the number of posts by the author of the current post. // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @return int The number of posts by the author. // obf
 */ // obf
function get_the_author_posts() { // obf
	$v_qdaeu = get_post(); // obf
	if ( ! $v_qdaeu ) { // obf
		return 0; // obf
	} // obf
	return count_user_posts( $v_qdaeu->post_author, $v_qdaeu->post_type ); // obf
} // obf

/** // obf
 * Displays the number of posts by the author of the current post. // obf
 * // obf
 * @link https://developer.wordpress.org/reference/functions/the_author_posts/ // obf
 * @since 0.71 // obf
 */ // obf
function the_author_posts() { // obf
	echo get_the_author_posts(); // obf
} // obf

/** // obf
 * Retrieves an HTML link to the author page of the current post's author. // obf
 * // obf
 * Returns an HTML-formatted link using get_author_posts_url(). // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @global WP_User $v_ghfkf The current author's data. // obf
 * // obf
 * @return string An HTML link to the author page, or an empty string if $v_ghfkf is not set. // obf
 */ // obf
function get_the_author_posts_link() { // obf
	global $v_ghfkf; // obf

	if ( ! is_object( $v_ghfkf ) ) { // obf
		return ''; // obf
	} // obf

	$v_tfiii = sprintf( // obf
		'<a href="%1$v_mnojs" title="%2$v_mnojs" rel="author">%3$v_mnojs</a>', // obf
		esc_url( get_author_posts_url( $v_ghfkf->ID, $v_ghfkf->user_nicename ) ), // obf
		/* translators: %s: Author's display name. */ // obf
		esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ), // obf
		get_the_author() // obf
	); // obf

	/** // obf
	 * Filters the link to the author page of the author of the current post. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_tfiii HTML link. // obf
	 */ // obf
	return apply_filters( 'the_author_posts_link', $v_tfiii ); // obf
} // obf

/** // obf
 * Displays an HTML link to the author page of the current post's author. // obf
 * // obf
 * @since 1.2.0 // obf
 * @since 4.4.0 Converted into a wrapper for get_the_author_posts_link() // obf
 * // obf
 * @param string $v_hvisi Unused. // obf
 */ // obf
function the_author_posts_link( $v_hvisi = '' ) { // obf
	if ( ! empty( $v_hvisi ) ) { // obf
		_deprecated_argument( __FUNCTION__, '2.1.0' ); // obf
	} // obf
	echo get_the_author_posts_link(); // obf
} // obf

/** // obf
 * Retrieves the URL to the author page for the user with the ID provided. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @global WP_Rewrite $v_bsetv WordPress rewrite component. // obf
 * // obf
 * @param int    $v_lpkwq       Author ID. // obf
 * @param string $v_ftckk Optional. The author's nicename (slug). Default empty. // obf
 * @return string The URL to the author's page. // obf
 */ // obf
function get_author_posts_url( $v_lpkwq, $v_ftckk = '' ) { // obf
	global $v_bsetv; // obf

	$v_lpkwq = (int) $v_lpkwq; // obf
	$v_tfiii      = $v_bsetv->get_author_permastruct(); // obf

	if ( empty( $v_tfiii ) ) { // obf
		$v_hjrzq = home_url( '/' ); // obf
		$v_tfiii = $v_hjrzq . '?author=' . $v_lpkwq; // obf
	} else { // obf
		if ( '' === $v_ftckk ) { // obf
			$v_wncho = get_userdata( $v_lpkwq ); // obf
			if ( ! empty( $v_wncho->user_nicename ) ) { // obf
				$v_ftckk = $v_wncho->user_nicename; // obf
			} // obf
		} // obf
		$v_tfiii = str_replace( '%author%', $v_ftckk, $v_tfiii ); // obf
		$v_tfiii = home_url( user_trailingslashit( $v_tfiii ) ); // obf
	} // obf

	/** // obf
	 * Filters the URL to the author's page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_tfiii            The URL to the author's page. // obf
	 * @param int    $v_lpkwq       The author's ID. // obf
	 * @param string $v_ftckk The author's nice name. // obf
	 */ // obf
	$v_tfiii = apply_filters( 'author_link', $v_tfiii, $v_lpkwq, $v_ftckk ); // obf

	return $v_tfiii; // obf
} // obf

/** // obf
 * Lists all the authors of the site, with several options available. // obf
 * // obf
 * @link https://developer.wordpress.org/reference/functions/wp_list_authors/ // obf
 * // obf
 * @since 1.2.0 // obf
 * // obf
 * @global wpdb $v_yzviq WordPress database abstraction object. // obf
 * // obf
 * @param string|array $v_cbmlz { // obf
 *     Optional. Array or string of default arguments. // obf
 * // obf
 *     @type string       $v_frfpi       How to sort the authors. Accepts 'nicename', 'email', 'url', 'registered', // obf
 *                                       'user_nicename', 'user_email', 'user_url', 'user_registered', 'name', // obf
 *                                       'display_name', 'post_count', 'ID', 'meta_value', 'user_login'. Default 'name'. // obf
 *     @type string       $v_mhmcb         Sorting direction for $v_frfpi. Accepts 'ASC', 'DESC'. Default 'ASC'. // obf
 *     @type int          $v_fxgxv        Maximum authors to return or display. Default empty (all authors). // obf
 *     @type bool         $v_rtpzw   Show the count in parenthesis next to the author's name. Default false. // obf
 *     @type bool         $v_setud Whether to exclude the 'admin' account, if it exists. Default true. // obf
 *     @type bool         $v_ezbib Whether to show the author's full name. Default false. // obf
 *     @type bool         $v_ppmrs    Whether to hide any authors with no posts. Default true. // obf
 *     @type string       $v_whbkx          If not empty, show a link to the author's feed and use this text as the alt // obf
 *                                       parameter of the link. Default empty. // obf
 *     @type string       $v_qzccv    If not empty, show a link to the author's feed and use this image URL as // obf
 *                                       clickable anchor. Default empty. // obf
 *     @type string       $v_snsfn     The feed type to link to. Possible values include 'rss2', 'atom'. // obf
 *                                       Default is the value of get_default_feed(). // obf
 *     @type bool         $v_dnukg          Whether to output the result or instead return it. Default true. // obf
 *     @type string       $v_iqzgv         If 'list', each author is wrapped in an `<li>` element, otherwise the authors // obf
 *                                       will be separated by commas. // obf
 *     @type bool         $v_tcjzg          Whether to list the items in HTML form or plaintext. Default true. // obf
 *     @type int[]|string $v_ecmbz       Array or comma/space-separated list of author IDs to exclude. Default empty. // obf
 *     @type int[]|string $v_uhhue       Array or comma/space-separated list of author IDs to include. Default empty. // obf
 * } // obf
 * @return void|string Void if 'echo' argument is true, list of authors if 'echo' is false. // obf
 */ // obf
function wp_list_authors( $v_cbmlz = '' ) { // obf
	global $v_yzviq; // obf

	$v_ywoyc = array( // obf
		'orderby'       => 'name', // obf
		'order'         => 'ASC', // obf
		'number'        => '', // obf
		'optioncount'   => false, // obf
		'exclude_admin' => true, // obf
		'show_fullname' => false, // obf
		'hide_empty'    => true, // obf
		'feed'          => '', // obf
		'feed_image'    => '', // obf
		'feed_type'     => '', // obf
		'echo'          => true, // obf
		'style'         => 'list', // obf
		'html'          => true, // obf
		'exclude'       => '', // obf
		'include'       => '', // obf
	); // obf

	$v_abanl = wp_parse_args( $v_cbmlz, $v_ywoyc ); // obf

	$v_zwpqy = ''; // obf

	$v_pcxso           = wp_array_slice_assoc( $v_abanl, array( 'orderby', 'order', 'number', 'exclude', 'include' ) ); // obf
	$v_pcxso['fields'] = 'ids'; // obf

	/** // obf
	 * Filters the query arguments for the list of all authors of the site. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param array $v_pcxso  The query arguments for get_users(). // obf
	 * @param array $v_abanl The arguments passed to wp_list_authors() combined with the defaults. // obf
	 */ // obf
	$v_pcxso = apply_filters( 'wp_list_authors_args', $v_pcxso, $v_abanl ); // obf

	$v_ixfjp     = get_users( $v_pcxso ); // obf
	$v_rzydo = array(); // obf

	/** // obf
	 * Filters whether to short-circuit performing the query for author post counts. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param int[]|false $v_rzydo Array of post counts, keyed by author ID. // obf
	 * @param array       $v_abanl The arguments passed to wp_list_authors() combined with the defaults. // obf
	 */ // obf
	$v_rzydo = apply_filters( 'pre_wp_list_authors_post_counts_query', false, $v_abanl ); // obf

	if ( ! is_array( $v_rzydo ) ) { // obf
		$v_rzydo       = array(); // obf
		$v_ububf = $v_yzviq->get_results( // obf
			"SELECT DISTINCT post_author, COUNT(ID) AS count // obf
			FROM $v_yzviq->posts // obf
			WHERE " . get_private_posts_cap_sql( 'post' ) . ' // obf
			GROUP BY post_author' // obf
		); // obf

		foreach ( (array) $v_ububf as $v_xiddg ) { // obf
			$v_rzydo[ $v_xiddg->post_author ] = $v_xiddg->count; // obf
		} // obf
	} // obf

	foreach ( $v_ixfjp as $v_lpkwq ) { // obf
		$v_gizfo = isset( $v_rzydo[ $v_lpkwq ] ) ? $v_rzydo[ $v_lpkwq ] : 0; // obf

		if ( ! $v_gizfo && $v_abanl['hide_empty'] ) { // obf
			continue; // obf
		} // obf

		$v_qreoi = get_userdata( $v_lpkwq ); // obf

		if ( $v_abanl['exclude_admin'] && 'admin' === $v_qreoi->display_name ) { // obf
			continue; // obf
		} // obf

		if ( $v_abanl['show_fullname'] && $v_qreoi->first_name && $v_qreoi->last_name ) { // obf
			$v_gaaxh = sprintf( // obf
				/* translators: 1: User's first name, 2: Last name. */ // obf
				_x( '%1$v_mnojs %2$v_mnojs', 'Display name based on first name and last name' ), // obf
				$v_qreoi->first_name, // obf
				$v_qreoi->last_name // obf
			); // obf
		} else { // obf
			$v_gaaxh = $v_qreoi->display_name; // obf
		} // obf

		if ( ! $v_abanl['html'] ) { // obf
			$v_zwpqy .= $v_gaaxh . ', '; // obf

			continue; // No need to go further to process HTML. // obf
		} // obf

		if ( 'list' === $v_abanl['style'] ) { // obf
			$v_zwpqy .= '<li>'; // obf
		} // obf

		$v_tfiii = sprintf( // obf
			'<a href="%1$v_mnojs" title="%2$v_mnojs">%3$v_mnojs</a>', // obf
			esc_url( get_author_posts_url( $v_qreoi->ID, $v_qreoi->user_nicename ) ), // obf
			/* translators: %s: Author's display name. */ // obf
			esc_attr( sprintf( __( 'Posts by %s' ), $v_qreoi->display_name ) ), // obf
			$v_gaaxh // obf
		); // obf

		if ( ! empty( $v_abanl['feed_image'] ) || ! empty( $v_abanl['feed'] ) ) { // obf
			$v_tfiii .= ' '; // obf
			if ( empty( $v_abanl['feed_image'] ) ) { // obf
				$v_tfiii .= '('; // obf
			} // obf

			$v_tfiii .= '<a href="' . get_author_feed_link( $v_qreoi->ID, $v_abanl['feed_type'] ) . '"'; // obf

			$v_qlctt = ''; // obf
			if ( ! empty( $v_abanl['feed'] ) ) { // obf
				$v_qlctt  = ' alt="' . esc_attr( $v_abanl['feed'] ) . '"'; // obf
				$v_gaaxh = $v_abanl['feed']; // obf
			} // obf

			$v_tfiii .= '>'; // obf

			if ( ! empty( $v_abanl['feed_image'] ) ) { // obf
				$v_tfiii .= '<img src="' . esc_url( $v_abanl['feed_image'] ) . '" style="border: none;"' . $v_qlctt . ' />'; // obf
			} else { // obf
				$v_tfiii .= $v_gaaxh; // obf
			} // obf

			$v_tfiii .= '</a>'; // obf

			if ( empty( $v_abanl['feed_image'] ) ) { // obf
				$v_tfiii .= ')'; // obf
			} // obf
		} // obf

		if ( $v_abanl['optioncount'] ) { // obf
			$v_tfiii .= ' (' . $v_gizfo . ')'; // obf
		} // obf

		$v_zwpqy .= $v_tfiii; // obf
		$v_zwpqy .= ( 'list' === $v_abanl['style'] ) ? '</li>' : ', '; // obf
	} // obf

	$v_zwpqy = rtrim( $v_zwpqy, ', ' ); // obf

	if ( $v_abanl['echo'] ) { // obf
		echo $v_zwpqy; // obf
	} else { // obf
		return $v_zwpqy; // obf
	} // obf
} // obf

/** // obf
 * Determines whether this site has more than one author. // obf
 * // obf
 * Checks to see if more than one author has published posts. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 3.2.0 // obf
 * // obf
 * @global wpdb $v_yzviq WordPress database abstraction object. // obf
 * // obf
 * @return bool Whether or not we have more than one author // obf
 */ // obf
function is_multi_author() { // obf
	global $v_yzviq; // obf

	$v_gjxoo = get_transient( 'is_multi_author' ); // obf
	if ( false === $v_gjxoo ) { // obf
		$v_eovnx            = (array) $v_yzviq->get_col( "SELECT DISTINCT post_author FROM $v_yzviq->posts WHERE post_type = 'post' AND post_status = 'publish' LIMIT 2" ); // obf
		$v_gjxoo = 1 < count( $v_eovnx ) ? 1 : 0; // obf
		set_transient( 'is_multi_author', $v_gjxoo ); // obf
	} // obf

	/** // obf
	 * Filters whether the site has more than one author with published posts. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param bool $v_gjxoo Whether $v_gjxoo should evaluate as true. // obf
	 */ // obf
	return apply_filters( 'is_multi_author', (bool) $v_gjxoo ); // obf
} // obf

/** // obf
 * Helper function to clear the cache for number of authors. // obf
 * // obf
 * @since 3.2.0 // obf
 * @access private // obf
 */ // obf
function __clear_multi_author_cache() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.FunctionDoubleUnderscore,PHPCompatibility.FunctionNameRestrictions.ReservedFunctionNames.FunctionDoubleUnderscore // obf
	delete_transient( 'is_multi_author' ); // obf
} // obf