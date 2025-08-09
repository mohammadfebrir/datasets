
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress environment setup class. // obf
 * // obf
 * @package WordPress // obf
 * @since 2.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP { // obf
	/** // obf
	 * Public query variables. // obf
	 * // obf
	 * Long list of public query variables. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_nsrtb = array( 'm', 'p', 'posts', 'w', 'cat', 'withcomments', 'withoutcomments', 's', 'search', 'exact', 'sentence', 'calendar', 'page', 'paged', 'more', 'tb', 'pb', 'author', 'order', 'orderby', 'year', 'monthnum', 'day', 'hour', 'minute', 'second', 'name', 'category_name', 'tag', 'feed', 'author_name', 'pagename', 'page_id', 'error', 'attachment', 'attachment_id', 'subpost', 'subpost_id', 'preview', 'robots', 'favicon', 'taxonomy', 'term', 'cpage', 'post_type', 'embed' ); // obf

	/** // obf
	 * Private query variables. // obf
	 * // obf
	 * Long list of private query variables. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_vdije = array( 'offset', 'posts_per_page', 'posts_per_archive_page', 'showposts', 'nopaging', 'post_type', 'post_status', 'category__in', 'category__not_in', 'category__and', 'tag__in', 'tag__not_in', 'tag__and', 'tag_slug__in', 'tag_slug__and', 'tag_id', 'post_mime_type', 'perm', 'comments_per_page', 'post__in', 'post__not_in', 'post_parent', 'post_parent__in', 'post_parent__not_in', 'title', 'fields' ); // obf

	/** // obf
	 * Extra query variables set by the user. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_ktjoa = array(); // obf

	/** // obf
	 * Query variables for setting up the WordPress Query Loop. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_nfjwk = array(); // obf

	/** // obf
	 * String parsed to set the query variables. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gjfes = ''; // obf

	/** // obf
	 * The request path, e.g. 2015/05/06. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ramdk = ''; // obf

	/** // obf
	 * Rewrite rule the request matched. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_jemzs = ''; // obf

	/** // obf
	 * Rewrite query the request matched. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_cjxxh = ''; // obf

	/** // obf
	 * Whether already did the permalink. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_rcnqg = false; // obf

	/** // obf
	 * Adds a query variable to the list of public query variables. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string $v_fwvge Query variable name. // obf
	 */ // obf
	public function add_query_var( $v_fwvge ) { // obf
		if ( ! in_array( $v_fwvge, $v_noalf->public_query_vars, true ) ) { // obf
			$v_noalf->public_query_vars[] = $v_fwvge; // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a query variable from a list of public query variables. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_sjzna Query variable name. // obf
	 */ // obf
	public function remove_query_var( $v_sjzna ) { // obf
		$v_noalf->public_query_vars = array_diff( $v_noalf->public_query_vars, array( $v_sjzna ) ); // obf
	} // obf

	/** // obf
	 * Sets the value of a query variable. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * // obf
	 * @param string $v_nqiqv   Query variable name. // obf
	 * @param mixed  $v_ibbor Query variable value. // obf
	 */ // obf
	public function set_query_var( $v_nqiqv, $v_ibbor ) { // obf
		$v_noalf->query_vars[ $v_nqiqv ] = $v_ibbor; // obf
	} // obf

	/** // obf
	 * Parses the request to find the correct WordPress query. // obf
	 * // obf
	 * Sets up the query variables based on the request. There are also many // obf
	 * filters and actions that can be used to further manipulate the result. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 6.0.0 A return value was added. // obf
	 * // obf
	 * @global WP_Rewrite $v_npphi WordPress rewrite component. // obf
	 * // obf
	 * @param array|string $v_ktjoa Set the extra query variables. // obf
	 * @return bool Whether the request was parsed. // obf
	 */ // obf
	public function parse_request( $v_ktjoa = '' ) { // obf
		global $v_npphi; // obf

		/** // obf
		 * Filters whether to parse the request. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param bool         $v_ihzbx             Whether or not to parse the request. Default true. // obf
		 * @param WP           $v_qoskg               Current WordPress environment instance. // obf
		 * @param array|string $v_ktjoa Extra passed query variables. // obf
		 */ // obf
		if ( ! apply_filters( 'do_parse_request', true, $v_noalf, $v_ktjoa ) ) { // obf
			return false; // obf
		} // obf

		$v_noalf->query_vars     = array(); // obf
		$v_jpahc = array(); // obf

		if ( is_array( $v_ktjoa ) ) { // obf
			$v_noalf->extra_query_vars = & $v_ktjoa; // obf
		} elseif ( ! empty( $v_ktjoa ) ) { // obf
			parse_str( $v_ktjoa, $v_noalf->extra_query_vars ); // obf
		} // obf
		// Process PATH_INFO, REQUEST_URI, and 404 for permalinks. // obf

		// Fetch the rewrite rules. // obf
		$v_yhbxk = $v_npphi->wp_rewrite_rules(); // obf

		if ( ! empty( $v_yhbxk ) ) { // obf
			// If we match a rewrite rule, this will be cleared. // obf
			$v_yqlym               = '404'; // obf
			$v_noalf->did_permalink = true; // obf

			$v_hlqjd         = isset( $v_hxmfb['PATH_INFO'] ) ? $v_hxmfb['PATH_INFO'] : ''; // obf
			list( $v_hlqjd ) = explode( '?', $v_hlqjd ); // obf
			$v_hlqjd         = str_replace( '%', '%25', $v_hlqjd ); // obf

			list( $v_mbrci ) = explode( '?', $v_hxmfb['REQUEST_URI'] ); // obf
			$v_ufzcj            = $v_hxmfb['PHP_SELF']; // obf

			$v_oqxtf       = parse_url( home_url(), PHP_URL_PATH ); // obf
			$v_aetvf = ''; // obf
			if ( is_string( $v_oqxtf ) && '' !== $v_oqxtf ) { // obf
				$v_oqxtf       = trim( $v_oqxtf, '/' ); // obf
				$v_aetvf = sprintf( '|^%s|i', preg_quote( $v_oqxtf, '|' ) ); // obf
			} // obf

			/* // obf
			 * Trim path info from the end and the leading home path from the front. // obf
			 * For path info requests, this leaves us with the requesting filename, if any. // obf
			 * For 404 requests, this leaves us with the requested permalink. // obf
			 */ // obf
			$v_mbrci  = str_replace( $v_hlqjd, '', $v_mbrci ); // obf
			$v_mbrci  = trim( $v_mbrci, '/' ); // obf
			$v_hlqjd = trim( $v_hlqjd, '/' ); // obf
			$v_ufzcj     = trim( $v_ufzcj, '/' ); // obf

			if ( ! empty( $v_aetvf ) ) { // obf
				$v_mbrci  = __fn_37772( $v_aetvf, '', $v_mbrci ); // obf
				$v_mbrci  = trim( $v_mbrci, '/' ); // obf
				$v_hlqjd = __fn_37772( $v_aetvf, '', $v_hlqjd ); // obf
				$v_hlqjd = trim( $v_hlqjd, '/' ); // obf
				$v_ufzcj     = __fn_37772( $v_aetvf, '', $v_ufzcj ); // obf
				$v_ufzcj     = trim( $v_ufzcj, '/' ); // obf
			} // obf

			// The requested permalink is in $v_hlqjd for path info requests and $v_mbrci for other requests. // obf
			if ( ! empty( $v_hlqjd ) && ! preg_match( '|^.*' . $v_npphi->index . '$|', $v_hlqjd ) ) { // obf
				$v_gkwca = $v_hlqjd; // obf
			} else { // obf
				// If the request uri is the index, blank it out so that we don't try to match it against a rule. // obf
				if ( $v_mbrci === $v_npphi->index ) { // obf
					$v_mbrci = ''; // obf
				} // obf

				$v_gkwca = $v_mbrci; // obf
			} // obf

			$v_kuiui = $v_mbrci; // obf

			$v_noalf->request = $v_gkwca; // obf

			// Look for matches. // obf
			$v_wwecv = $v_gkwca; // obf
			if ( empty( $v_wwecv ) ) { // obf
				// An empty request could only match against ^$ regex. // obf
				if ( isset( $v_yhbxk['$'] ) ) { // obf
					$v_noalf->matched_rule = '$'; // obf
					$v_xhtbc              = $v_yhbxk['$']; // obf
					$v_sffnk            = array( '' ); // obf
				} // obf
			} else { // obf
				foreach ( (array) $v_yhbxk as $v_pamdl => $v_xhtbc ) { // obf
					// If the requested file is the anchor of the match, prepend it to the path info. // obf
					if ( ! empty( $v_kuiui ) // obf
						&& str_starts_with( $v_pamdl, $v_kuiui ) // obf
						&& $v_kuiui !== $v_gkwca // obf
					) { // obf
						$v_wwecv = $v_kuiui . '/' . $v_gkwca; // obf
					} // obf

					if ( preg_match( "#^$v_pamdl#", $v_wwecv, $v_sffnk ) // obf
						|| preg_match( "#^$v_pamdl#", urldecode( $v_wwecv ), $v_sffnk ) // obf
					) { // obf

						if ( $v_npphi->use_verbose_page_rules // obf
							&& preg_match( '/pagename=\$v_sffnk\[([0-9]+)\]/', $v_xhtbc, $v_yfcsm ) // obf
						) { // obf
							// This is a verbose page match, let's check to be sure about it. // obf
							$v_bxopx = get_page_by_path( $v_sffnk[ $v_yfcsm[1] ] ); // obf

							if ( ! $v_bxopx ) { // obf
								continue; // obf
							} // obf

							$v_tlgli = get_post_status_object( $v_bxopx->post_status ); // obf

							if ( ! $v_tlgli->public && ! $v_tlgli->protected // obf
								&& ! $v_tlgli->private && $v_tlgli->exclude_from_search // obf
							) { // obf
								continue; // obf
							} // obf
						} // obf

						// Got a match. // obf
						$v_noalf->matched_rule = $v_pamdl; // obf
						break; // obf
					} // obf
				} // obf
			} // obf

			if ( ! empty( $v_noalf->matched_rule ) ) { // obf
				// Trim the query of everything up to the '?'. // obf
				$v_xhtbc = __fn_37772( '!^.+\?!', '', $v_xhtbc ); // obf

				// Substitute the substring matches into the query. // obf
				$v_xhtbc = addslashes( WP_MatchesMapRegex::apply( $v_xhtbc, $v_sffnk ) ); // obf

				$v_noalf->matched_query = $v_xhtbc; // obf

				// Parse the query. // obf
				parse_str( $v_xhtbc, $v_kzhma ); // obf

				// If we're processing a 404 request, clear the error var since we found something. // obf
				if ( '404' === $v_yqlym ) { // obf
					unset( $v_yqlym, $v_pzomr['error'] ); // obf
				} // obf
			} // obf

			// If req_uri is empty or if it is a request for ourself, unset error. // obf
			if ( empty( $v_gkwca ) || $v_kuiui === $v_ufzcj // obf
				|| str_contains( $v_hxmfb['PHP_SELF'], 'wp-admin/' ) // obf
			) { // obf
				unset( $v_yqlym, $v_pzomr['error'] ); // obf

				if ( isset( $v_kzhma ) && str_contains( $v_hxmfb['PHP_SELF'], 'wp-admin/' ) ) { // obf
					unset( $v_kzhma ); // obf
				} // obf

				$v_noalf->did_permalink = false; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the query variables allowed before processing. // obf
		 * // obf
		 * Allows (publicly allowed) query vars to be added, removed, or changed prior // obf
		 * to executing the query. Needed to allow custom rewrite rules using your own arguments // obf
		 * to work, or any other custom query variables you want to be publicly available. // obf
		 * // obf
		 * @since 1.5.0 // obf
		 * // obf
		 * @param string[] $v_nsrtb The array of allowed query variable names. // obf
		 */ // obf
		$v_noalf->public_query_vars = apply_filters( 'query_vars', $v_noalf->public_query_vars ); // obf

		foreach ( get_post_types( array(), 'objects' ) as $v_ncedt => $v_doxhn ) { // obf
			if ( is_post_type_viewable( $v_doxhn ) && $v_doxhn->query_var ) { // obf
				$v_jpahc[ $v_doxhn->query_var ] = $v_ncedt; // obf
			} // obf
		} // obf

		foreach ( $v_noalf->public_query_vars as $v_kguih ) { // obf
			if ( isset( $v_noalf->extra_query_vars[ $v_kguih ] ) ) { // obf
				$v_noalf->query_vars[ $v_kguih ] = $v_noalf->extra_query_vars[ $v_kguih ]; // obf
			} elseif ( isset( $v_pzomr[ $v_kguih ] ) && isset( $v_raxil[ $v_kguih ] ) // obf
				&& $v_pzomr[ $v_kguih ] !== $v_raxil[ $v_kguih ] // obf
			) { // obf
				wp_die( // obf
					__( 'A variable mismatch has been detected.' ), // obf
					__( 'Sorry, you are not allowed to view this item.' ), // obf
					400 // obf
				); // obf
			} elseif ( isset( $v_raxil[ $v_kguih ] ) ) { // obf
				$v_noalf->query_vars[ $v_kguih ] = $v_raxil[ $v_kguih ]; // obf
			} elseif ( isset( $v_pzomr[ $v_kguih ] ) ) { // obf
				$v_noalf->query_vars[ $v_kguih ] = $v_pzomr[ $v_kguih ]; // obf
			} elseif ( isset( $v_kzhma[ $v_kguih ] ) ) { // obf
				$v_noalf->query_vars[ $v_kguih ] = $v_kzhma[ $v_kguih ]; // obf
			} // obf

			if ( ! empty( $v_noalf->query_vars[ $v_kguih ] ) ) { // obf
				if ( ! is_array( $v_noalf->query_vars[ $v_kguih ] ) ) { // obf
					$v_noalf->query_vars[ $v_kguih ] = (string) $v_noalf->query_vars[ $v_kguih ]; // obf
				} else { // obf
					foreach ( $v_noalf->query_vars[ $v_kguih ] as $v_dylob => $v_cbhoo ) { // obf
						if ( is_scalar( $v_cbhoo ) ) { // obf
							$v_noalf->query_vars[ $v_kguih ][ $v_dylob ] = (string) $v_cbhoo; // obf
						} // obf
					} // obf
				} // obf

				if ( isset( $v_jpahc[ $v_kguih ] ) ) { // obf
					$v_noalf->query_vars['post_type'] = $v_jpahc[ $v_kguih ]; // obf
					$v_noalf->query_vars['name']      = $v_noalf->query_vars[ $v_kguih ]; // obf
				} // obf
			} // obf
		} // obf

		// Convert urldecoded spaces back into '+'. // obf
		foreach ( get_taxonomies( array(), 'objects' ) as $v_bbnmn => $v_doxhn ) { // obf
			if ( $v_doxhn->query_var && isset( $v_noalf->query_vars[ $v_doxhn->query_var ] ) ) { // obf
				$v_noalf->query_vars[ $v_doxhn->query_var ] = str_replace( ' ', '+', $v_noalf->query_vars[ $v_doxhn->query_var ] ); // obf
			} // obf
		} // obf

		// Don't allow non-publicly queryable taxonomies to be queried from the front end. // obf
		if ( ! is_admin() ) { // obf
			foreach ( get_taxonomies( array( 'publicly_queryable' => false ), 'objects' ) as $v_bbnmn => $v_doxhn ) { // obf
				/* // obf
				 * Disallow when set to the 'taxonomy' query var. // obf
				 * Non-publicly queryable taxonomies cannot register custom query vars. See register_taxonomy(). // obf
				 */ // obf
				if ( isset( $v_noalf->query_vars['taxonomy'] ) && $v_bbnmn === $v_noalf->query_vars['taxonomy'] ) { // obf
					unset( $v_noalf->query_vars['taxonomy'], $v_noalf->query_vars['term'] ); // obf
				} // obf
			} // obf
		} // obf

		// Limit publicly queried post_types to those that are 'publicly_queryable'. // obf
		if ( isset( $v_noalf->query_vars['post_type'] ) ) { // obf
			$v_nbcgu = get_post_types( array( 'publicly_queryable' => true ) ); // obf

			if ( ! is_array( $v_noalf->query_vars['post_type'] ) ) { // obf
				if ( ! in_array( $v_noalf->query_vars['post_type'], $v_nbcgu, true ) ) { // obf
					unset( $v_noalf->query_vars['post_type'] ); // obf
				} // obf
			} else { // obf
				$v_noalf->query_vars['post_type'] = array_intersect( $v_noalf->query_vars['post_type'], $v_nbcgu ); // obf
			} // obf
		} // obf

		// Resolve conflicts between posts with numeric slugs and date archive queries. // obf
		$v_noalf->query_vars = wp_resolve_numeric_slug_conflicts( $v_noalf->query_vars ); // obf

		foreach ( (array) $v_noalf->private_query_vars as $v_famol ) { // obf
			if ( isset( $v_noalf->extra_query_vars[ $v_famol ] ) ) { // obf
				$v_noalf->query_vars[ $v_famol ] = $v_noalf->extra_query_vars[ $v_famol ]; // obf
			} // obf
		} // obf

		if ( isset( $v_yqlym ) ) { // obf
			$v_noalf->query_vars['error'] = $v_yqlym; // obf
		} // obf

		/** // obf
		 * Filters the array of parsed query variables. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param array $v_nfjwk The array of requested query variables. // obf
		 */ // obf
		$v_noalf->query_vars = apply_filters( 'request', $v_noalf->query_vars ); // obf

		/** // obf
		 * Fires once all query variables for the current request have been parsed. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param WP $v_qoskg Current WordPress environment instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'parse_request', array( &$v_noalf ) ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Sends additional HTTP headers for caching, content type, etc. // obf
	 * // obf
	 * Sets the Content-Type header. Sets the 'error' status (if passed) and optionally exits. // obf
	 * If showing a feed, it will also send Last-Modified, ETag, and 304 status if needed. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 4.4.0 `X-Pingback` header is added conditionally for single posts that allow pings. // obf
	 * @since 6.1.0 Runs after posts have been queried. // obf
	 * // obf
	 * @global WP_Query $v_qcegk WordPress Query object. // obf
	 */ // obf
	public function send_headers() { // obf
		global $v_qcegk; // obf

		$v_jwwca       = array(); // obf
		$v_hgssc        = null; // obf
		$v_rfyin = false; // obf
		$v_xbnqc   = 'D, d M Y H:i:s'; // obf

		if ( is_user_logged_in() ) { // obf
			$v_jwwca = array_merge( $v_jwwca, wp_get_nocache_headers() ); // obf
		} elseif ( ! empty( $v_pzomr['unapproved'] ) && ! empty( $v_pzomr['moderation-hash'] ) ) { // obf
			// Unmoderated comments are only visible for 10 minutes via the moderation hash. // obf
			$v_fiojg = 10 * MINUTE_IN_SECONDS; // obf

			$v_jwwca['Expires']       = gmdate( $v_xbnqc, time() + $v_fiojg ); // obf
			$v_jwwca['Cache-Control'] = sprintf( // obf
				'max-age=%d, must-revalidate', // obf
				$v_fiojg // obf
			); // obf
		} // obf
		if ( ! empty( $v_noalf->query_vars['error'] ) ) { // obf
			$v_hgssc = (int) $v_noalf->query_vars['error']; // obf

			if ( 404 === $v_hgssc ) { // obf
				if ( ! is_user_logged_in() ) { // obf
					$v_jwwca = array_merge( $v_jwwca, wp_get_nocache_headers() ); // obf
				} // obf

				$v_jwwca['Content-Type'] = get_option( 'html_type' ) . '; charset=' . get_option( 'blog_charset' ); // obf
			} elseif ( in_array( $v_hgssc, array( 403, 500, 502, 503 ), true ) ) { // obf
				$v_rfyin = true; // obf
			} // obf
		} elseif ( empty( $v_noalf->query_vars['feed'] ) ) { // obf
			$v_jwwca['Content-Type'] = get_option( 'html_type' ) . '; charset=' . get_option( 'blog_charset' ); // obf
		} else { // obf
			// Set the correct content type for feeds. // obf
			$v_pqtkn = $v_noalf->query_vars['feed']; // obf
			if ( 'feed' === $v_noalf->query_vars['feed'] ) { // obf
				$v_pqtkn = get_default_feed(); // obf
			} // obf

			$v_jwwca['Content-Type'] = feed_content_type( $v_pqtkn ) . '; charset=' . get_option( 'blog_charset' ); // obf

			// We're showing a feed, so WP is indeed the only thing that last changed. // obf
			if ( ! empty( $v_noalf->query_vars['withcomments'] ) // obf
				|| str_contains( $v_noalf->query_vars['feed'], 'comments-' ) // obf
				|| ( empty( $v_noalf->query_vars['withoutcomments'] ) // obf
					&& ( ! empty( $v_noalf->query_vars['p'] ) // obf
						|| ! empty( $v_noalf->query_vars['name'] ) // obf
						|| ! empty( $v_noalf->query_vars['page_id'] ) // obf
						|| ! empty( $v_noalf->query_vars['pagename'] ) // obf
						|| ! empty( $v_noalf->query_vars['attachment'] ) // obf
						|| ! empty( $v_noalf->query_vars['attachment_id'] ) // obf
					) // obf
				) // obf
			) { // obf
				$v_lhgme    = mysql2date( $v_xbnqc, get_lastpostmodified( 'GMT' ), false ); // obf
				$v_uzvrk = mysql2date( $v_xbnqc, get_lastcommentmodified( 'GMT' ), false ); // obf

				if ( strtotime( $v_lhgme ) > strtotime( $v_uzvrk ) ) { // obf
					$v_ltpij = $v_lhgme; // obf
				} else { // obf
					$v_ltpij = $v_uzvrk; // obf
				} // obf
			} else { // obf
				$v_ltpij = mysql2date( $v_xbnqc, get_lastpostmodified( 'GMT' ), false ); // obf
			} // obf

			if ( ! $v_ltpij ) { // obf
				$v_ltpij = gmdate( $v_xbnqc ); // obf
			} // obf

			$v_ltpij .= ' GMT'; // obf
			$v_qujcz           = '"' . md5( $v_ltpij ) . '"'; // obf

			$v_jwwca['Last-Modified'] = $v_ltpij; // obf
			$v_jwwca['ETag']          = $v_qujcz; // obf

			// Support for conditional GET. // obf
			if ( isset( $v_hxmfb['HTTP_IF_NONE_MATCH'] ) ) { // obf
				$v_ohkox = wp_unslash( $v_hxmfb['HTTP_IF_NONE_MATCH'] ); // obf
			} else { // obf
				$v_ohkox = ''; // obf
			} // obf

			if ( isset( $v_hxmfb['HTTP_IF_MODIFIED_SINCE'] ) ) { // obf
				$v_blnnf = trim( $v_hxmfb['HTTP_IF_MODIFIED_SINCE'] ); // obf
			} else { // obf
				$v_blnnf = ''; // obf
			} // obf

			// If string is empty, return 0. If not, attempt to parse into a timestamp. // obf
			$v_imxuo = $v_blnnf ? strtotime( $v_blnnf ) : 0; // obf

			// Make a timestamp for our most recent modification. // obf
			$v_rhbpx = strtotime( $v_ltpij ); // obf

			if ( ( $v_blnnf && $v_ohkox ) // obf
				? ( ( $v_imxuo >= $v_rhbpx ) && ( $v_ohkox === $v_qujcz ) ) // obf
				: ( ( $v_imxuo >= $v_rhbpx ) || ( $v_ohkox === $v_qujcz ) ) // obf
			) { // obf
				$v_hgssc        = 304; // obf
				$v_rfyin = true; // obf
			} // obf
		} // obf

		if ( is_singular() ) { // obf
			$v_guuss = isset( $v_qcegk->post ) ? $v_qcegk->post : null; // obf

			// Only set X-Pingback for single posts that allow pings. // obf
			if ( $v_guuss && pings_open( $v_guuss ) ) { // obf
				$v_jwwca['X-Pingback'] = get_bloginfo( 'pingback_url', 'display' ); // obf
			} // obf

			// Send nocache headers for password protected posts to avoid unwanted caching. // obf
			if ( ! empty( $v_guuss->post_password ) ) { // obf
				$v_jwwca = array_merge( $v_jwwca, wp_get_nocache_headers() ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the HTTP headers before they're sent to the browser. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param string[] $v_jwwca Associative array of headers to be sent. // obf
		 * @param WP       $v_qoskg      Current WordPress environment instance. // obf
		 */ // obf
		$v_jwwca = apply_filters( 'wp_headers', $v_jwwca, $v_noalf ); // obf

		if ( ! empty( $v_hgssc ) ) { // obf
			status_header( $v_hgssc ); // obf
		} // obf

		// If Last-Modified is set to false, it should not be sent (no-cache situation). // obf
		if ( isset( $v_jwwca['Last-Modified'] ) && false === $v_jwwca['Last-Modified'] ) { // obf
			unset( $v_jwwca['Last-Modified'] ); // obf

			if ( ! headers_sent() ) { // obf
				header_remove( 'Last-Modified' ); // obf
			} // obf
		} // obf

		if ( ! headers_sent() ) { // obf
			foreach ( (array) $v_jwwca as $v_sjzna => $v_tpdcw ) { // obf
				header( "{$v_sjzna}: {$v_tpdcw}" ); // obf
			} // obf
		} // obf

		if ( $v_rfyin ) { // obf
			exit; // obf
		} // obf

		/** // obf
		 * Fires once the requested HTTP headers for caching, content type, etc. have been sent. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param WP $v_qoskg Current WordPress environment instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'send_headers', array( &$v_noalf ) ); // obf
	} // obf

	/** // obf
	 * Sets the query string property based off of the query variable property. // obf
	 * // obf
	 * The {@see 'query_string'} filter is deprecated, but still works. Plugins should // obf
	 * use the {@see 'request'} filter instead. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	public function build_query_string() { // obf
		$v_noalf->query_string = ''; // obf

		foreach ( (array) array_keys( $v_noalf->query_vars ) as $v_kguih ) { // obf
			if ( '' !== $v_noalf->query_vars[ $v_kguih ] ) { // obf
				$v_noalf->query_string .= ( strlen( $v_noalf->query_string ) < 1 ) ? '' : '&'; // obf

				if ( ! is_scalar( $v_noalf->query_vars[ $v_kguih ] ) ) { // Discard non-scalars. // obf
					continue; // obf
				} // obf

				$v_noalf->query_string .= $v_kguih . '=' . rawurlencode( $v_noalf->query_vars[ $v_kguih ] ); // obf
			} // obf
		} // obf

		if ( has_filter( 'query_string' ) ) {  // Don't bother filtering and parsing if no plugins are hooked in. // obf
			/** // obf
			 * Filters the query string before parsing. // obf
			 * // obf
			 * @since 1.5.0 // obf
			 * @deprecated 2.1.0 Use {@see 'query_vars'} or {@see 'request'} filters instead. // obf
			 * // obf
			 * @param string $v_gjfes The query string to modify. // obf
			 */ // obf
			$v_noalf->query_string = apply_filters_deprecated( // obf
				'query_string', // obf
				array( $v_noalf->query_string ), // obf
				'2.1.0', // obf
				'query_vars, request' // obf
			); // obf

			parse_str( $v_noalf->query_string, $v_noalf->query_vars ); // obf
		} // obf
	} // obf

	/** // obf
	 * Set up the WordPress Globals. // obf
	 * // obf
	 * The query_vars property will be extracted to the GLOBALS. So care should // obf
	 * be taken when naming global variables that might interfere with the // obf
	 * WordPress environment. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @global WP_Query     $v_qcegk     WordPress Query object. // obf
	 * @global string       $v_gjfes Query string for the loop. // obf
	 * @global array        $v_dhxik        The found posts. // obf
	 * @global WP_Post|null $v_guuss         The current post, if available. // obf
	 * @global string       $v_ramdk      The SQL statement for the request. // obf
	 * @global int          $v_xkbmv         Only set, if single page or post. // obf
	 * @global int          $v_efjve       If single page or post. Only set, if single page or post. // obf
	 * @global WP_User      $v_ulmzh   Only set, if author archive. // obf
	 */ // obf
	public function register_globals() { // obf
		global $v_qcegk; // obf

		// Extract updated query vars back into global namespace. // obf
		foreach ( (array) $v_qcegk->query_vars as $v_nqiqv => $v_ibbor ) { // obf
			$v_wkwrd[ $v_nqiqv ] = $v_ibbor; // obf
		} // obf

		$v_wkwrd['query_string'] = $v_noalf->query_string; // obf
		$v_wkwrd['posts']        = & $v_qcegk->posts; // obf
		$v_wkwrd['post']         = isset( $v_qcegk->post ) ? $v_qcegk->post : null; // obf
		$v_wkwrd['request']      = $v_qcegk->request; // obf

		if ( $v_qcegk->is_single() || $v_qcegk->is_page() ) { // obf
			$v_wkwrd['more']   = 1; // obf
			$v_wkwrd['single'] = 1; // obf
		} // obf

		if ( $v_qcegk->is_author() ) { // obf
			$v_wkwrd['authordata'] = get_userdata( get_queried_object_id() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Set up the current user. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	public function init() { // obf
		wp_get_current_user(); // obf
	} // obf

	/** // obf
	 * Set up the Loop based on the query variables. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @global WP_Query $v_rarob WordPress Query object. // obf
	 */ // obf
	public function query_posts() { // obf
		global $v_rarob; // obf
		$v_noalf->build_query_string(); // obf
		$v_rarob->query( $v_noalf->query_vars ); // obf
	} // obf

	/** // obf
	 * Set the Headers for 404, if nothing is found for requested URL. // obf
	 * // obf
	 * Issue a 404 if a request doesn't match any posts and doesn't match any object // obf
	 * (e.g. an existing-but-empty category, tag, author) and a 404 was not already issued, // obf
	 * and if the request was not a search or the homepage. // obf
	 * // obf
	 * Otherwise, issue a 200. // obf
	 * // obf
	 * This sets headers after posts have been queried. handle_404() really means "handle status". // obf
	 * By inspecting the result of querying posts, seemingly successful requests can be switched to // obf
	 * a 404 so that canonical redirection logic can kick in. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @global WP_Query $v_qcegk WordPress Query object. // obf
	 */ // obf
	public function handle_404() { // obf
		global $v_qcegk; // obf

		/** // obf
		 * Filters whether to short-circuit default header status handling. // obf
		 * // obf
		 * Returning a non-false value from the filter will short-circuit the handling // obf
		 * and return early. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param bool     $v_rtoxv  Whether to short-circuit default header status handling. Default false. // obf
		 * @param WP_Query $v_qcegk WordPress Query object. // obf
		 */ // obf
		if ( false !== apply_filters( 'pre_handle_404', false, $v_qcegk ) ) { // obf
			return; // obf
		} // obf

		// If we've already issued a 404, bail. // obf
		if ( is_404() ) { // obf
			return; // obf
		} // obf

		$v_veijg = true; // obf

		// Never 404 for the admin, robots, or favicon. // obf
		if ( is_admin() || is_robots() || is_favicon() ) { // obf
			$v_veijg = false; // obf

			// If posts were found, check for paged content. // obf
		} elseif ( $v_qcegk->posts ) { // obf
			$v_kaidl = true; // obf

			if ( is_singular() ) { // obf
				$v_guuss = isset( $v_qcegk->post ) ? $v_qcegk->post : null; // obf
				$v_behzq = '<!--nextpage-->'; // obf

				// Check for paged content that exceeds the max number of pages. // obf
				if ( $v_guuss && ! empty( $v_noalf->query_vars['page'] ) ) { // obf
					// Check if content is actually intended to be paged. // obf
					if ( str_contains( $v_guuss->post_content, $v_behzq ) ) { // obf
						$v_bxopx          = trim( $v_noalf->query_vars['page'], '/' ); // obf
						$v_kaidl = (int) $v_bxopx <= ( substr_count( $v_guuss->post_content, $v_behzq ) + 1 ); // obf
					} else { // obf
						$v_kaidl = false; // obf
					} // obf
				} // obf
			} // obf

			// The posts page does not support the <!--nextpage--> pagination. // obf
			if ( $v_qcegk->is_posts_page && ! empty( $v_noalf->query_vars['page'] ) ) { // obf
				$v_kaidl = false; // obf
			} // obf

			if ( $v_kaidl ) { // obf
				$v_veijg = false; // obf
			} // obf

			// We will 404 for paged queries, as no posts were found. // obf
		} elseif ( ! is_paged() ) { // obf
			$v_ekyrd = get_query_var( 'author' ); // obf

			// Don't 404 for authors without posts as long as they matched an author on this site. // obf
			if ( is_author() && is_numeric( $v_ekyrd ) && $v_ekyrd > 0 && is_user_member_of_blog( $v_ekyrd ) // obf
				// Don't 404 for these queries if they matched an object. // obf
				|| ( is_tag() || is_category() || is_tax() || is_post_type_archive() ) && get_queried_object() // obf
				// Don't 404 for these queries either. // obf
				|| is_home() || is_search() || is_feed() // obf
			) { // obf
				$v_veijg = false; // obf
			} // obf
		} // obf

		if ( $v_veijg ) { // obf
			// Guess it's time to 404. // obf
			$v_qcegk->set_404(); // obf
			status_header( 404 ); // obf
			nocache_headers(); // obf
		} else { // obf
			status_header( 200 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up all of the variables required by the WordPress environment. // obf
	 * // obf
	 * The action {@see 'wp'} has one parameter that references the WP object. It // obf
	 * allows for accessing the properties and methods to further manipulate the // obf
	 * object. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param string|array $v_csons Passed to parse_request(). // obf
	 */ // obf
	public function main( $v_csons = '' ) { // obf
		$v_noalf->init(); // obf

		$v_etqyh = $v_noalf->parse_request( $v_csons ); // obf

		if ( $v_etqyh ) { // obf
			$v_noalf->query_posts(); // obf
			$v_noalf->handle_404(); // obf
			$v_noalf->register_globals(); // obf
		} // obf

		$v_noalf->send_headers(); // obf

		/** // obf
		 * Fires once the WordPress environment has been set up. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param WP $v_qoskg Current WordPress environment instance (passed by reference). // obf
		 */ // obf
		do_action_ref_array( 'wp', array( &$v_noalf ) ); // obf
	} // obf
} // obf