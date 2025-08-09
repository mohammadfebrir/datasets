

<?php // obf
/** // obf
 * REST API: WP_REST_Posts_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class to access posts via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Posts_Controller extends WP_REST_Controller { // obf
	/** // obf
	 * Post type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_tioer; // obf

	/** // obf
	 * Instance of a post meta fields object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var WP_REST_Post_Meta_Fields // obf
	 */ // obf
	protected $v_bmyru; // obf

	/** // obf
	 * Passwordless post access permitted. // obf
	 * // obf
	 * @since 5.7.1 // obf
	 * @var int[] // obf
	 */ // obf
	protected $v_skkit = array(); // obf

	/** // obf
	 * Whether the controller supports batching. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_werxt = array( 'v1' => true ); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_tioer Post type. // obf
	 */ // obf
	public function __construct( $v_tioer ) { // obf
		$v_htpfi->post_type = $v_tioer; // obf
		$v_brano             = get_post_type_object( $v_tioer ); // obf
		$v_htpfi->rest_base = ! empty( $v_brano->rest_base ) ? $v_brano->rest_base : $v_brano->name; // obf
		$v_htpfi->namespace = ! empty( $v_brano->rest_namespace ) ? $v_brano->rest_namespace : 'wp/v2'; // obf

		$v_htpfi->meta = new WP_REST_Post_Meta_Fields( $v_htpfi->post_type ); // obf
	} // obf

	/** // obf
	 * Registers the routes for posts. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_htpfi->namespace, // obf
			'/' . $v_htpfi->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_htpfi, 'get_items' ), // obf
					'permission_callback' => array( $v_htpfi, 'get_items_permissions_check' ), // obf
					'args'                => $v_htpfi->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_htpfi, 'create_item' ), // obf
					'permission_callback' => array( $v_htpfi, 'create_item_permissions_check' ), // obf
					'args'                => $v_htpfi->get_endpoint_args_for_item_schema( WP_REST_Server::CREATABLE ), // obf
				), // obf
				'allow_batch' => $v_htpfi->allow_batch, // obf
				'schema'      => array( $v_htpfi, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		$v_jhzqq        = $v_htpfi->get_item_schema(); // obf
		$v_qtjmt = array( // obf
			'context' => $v_htpfi->get_context_param( array( 'default' => 'view' ) ), // obf
		); // obf
		if ( isset( $v_jhzqq['properties']['excerpt'] ) ) { // obf
			$v_qtjmt['excerpt_length'] = array( // obf
				'description' => __( 'Override the default excerpt length.' ), // obf
				'type'        => 'integer', // obf
			); // obf
		} // obf
		if ( isset( $v_jhzqq['properties']['password'] ) ) { // obf
			$v_qtjmt['password'] = array( // obf
				'description' => __( 'The password for the post if it is password protected.' ), // obf
				'type'        => 'string', // obf
			); // obf
		} // obf
		register_rest_route( // obf
			$v_htpfi->namespace, // obf
			'/' . $v_htpfi->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'        => array( // obf
					'id' => array( // obf
						'description' => __( 'Unique identifier for the post.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_htpfi, 'get_item' ), // obf
					'permission_callback' => array( $v_htpfi, 'get_item_permissions_check' ), // obf
					'args'                => $v_qtjmt, // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_htpfi, 'update_item' ), // obf
					'permission_callback' => array( $v_htpfi, 'update_item_permissions_check' ), // obf
					'args'                => $v_htpfi->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_htpfi, 'delete_item' ), // obf
					'permission_callback' => array( $v_htpfi, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force' => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Whether to bypass Trash and force deletion.' ), // obf
						), // obf
					), // obf
				), // obf
				'allow_batch' => $v_htpfi->allow_batch, // obf
				'schema'      => array( $v_htpfi, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read posts. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_dxxgr ) { // obf

		$v_tioer = get_post_type_object( $v_htpfi->post_type ); // obf

		if ( 'edit' === $v_dxxgr['context'] && ! current_user_can( $v_tioer->cap->edit_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit posts in this post type.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Overrides the result of the post password check for REST requested posts. // obf
	 * // obf
	 * Allow users to read the content of password protected posts if they have // obf
	 * previously passed a permission check or if they have the `edit_post` capability // obf
	 * for the post being checked. // obf
	 * // obf
	 * @since 5.7.1 // obf
	 * // obf
	 * @param bool    $v_zkoda Whether the post requires a password check. // obf
	 * @param WP_Post $v_rwkbs     The post been password checked. // obf
	 * @return bool Result of password check taking into account REST API considerations. // obf
	 */ // obf
	public function check_password_required( $v_zkoda, $v_rwkbs ) { // obf
		if ( ! $v_zkoda ) { // obf
			return $v_zkoda; // obf
		} // obf

		$v_rwkbs = get_post( $v_rwkbs ); // obf

		if ( ! $v_rwkbs ) { // obf
			return $v_zkoda; // obf
		} // obf

		if ( ! empty( $v_htpfi->password_check_passed[ $v_rwkbs->ID ] ) ) { // obf
			// Password previously checked and approved. // obf
			return false; // obf
		} // obf

		return ! current_user_can( 'edit_post', $v_rwkbs->ID ); // obf
	} // obf

	/** // obf
	 * Retrieves a collection of posts. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_dxxgr ) { // obf

		// Ensure a search string is set in case the orderby is set to 'relevance'. // obf
		if ( ! empty( $v_dxxgr['orderby'] ) && 'relevance' === $v_dxxgr['orderby'] && empty( $v_dxxgr['search'] ) ) { // obf
			return new WP_Error( // obf
				'rest_no_search_term_defined', // obf
				__( 'You need to define a search term to order by relevance.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Ensure an include parameter is set in case the orderby is set to 'include'. // obf
		if ( ! empty( $v_dxxgr['orderby'] ) && 'include' === $v_dxxgr['orderby'] && empty( $v_dxxgr['include'] ) ) { // obf
			return new WP_Error( // obf
				'rest_orderby_include_missing_include', // obf
				__( 'You need to define an include parameter to order by include.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Retrieve the list of registered collection query parameters. // obf
		$v_irlcy = $v_htpfi->get_collection_params(); // obf
		$v_rupti       = array(); // obf

		/* // obf
		 * This array defines mappings between public API query parameters whose // obf
		 * values are accepted as-passed, and their internal WP_Query parameter // obf
		 * name equivalents (some are the same). Only values which are also // obf
		 * present in $v_irlcy will be set. // obf
		 */ // obf
		$v_gpiqr = array( // obf
			'author'         => 'author__in', // obf
			'author_exclude' => 'author__not_in', // obf
			'exclude'        => 'post__not_in', // obf
			'include'        => 'post__in', // obf
			'ignore_sticky'  => 'ignore_sticky_posts', // obf
			'menu_order'     => 'menu_order', // obf
			'offset'         => 'offset', // obf
			'order'          => 'order', // obf
			'orderby'        => 'orderby', // obf
			'page'           => 'paged', // obf
			'parent'         => 'post_parent__in', // obf
			'parent_exclude' => 'post_parent__not_in', // obf
			'search'         => 's', // obf
			'search_columns' => 'search_columns', // obf
			'slug'           => 'post_name__in', // obf
			'status'         => 'post_status', // obf
		); // obf

		/* // obf
		 * For each known parameter which is both registered and present in the request, // obf
		 * set the parameter's value on the query $v_rupti. // obf
		 */ // obf
		foreach ( $v_gpiqr as $v_srppk => $v_lvsln ) { // obf
			if ( isset( $v_irlcy[ $v_srppk ], $v_dxxgr[ $v_srppk ] ) ) { // obf
				$v_rupti[ $v_lvsln ] = $v_dxxgr[ $v_srppk ]; // obf
			} // obf
		} // obf

		// Check for & assign any parameters which require special handling or setting. // obf
		$v_rupti['date_query'] = array(); // obf

		if ( isset( $v_irlcy['before'], $v_dxxgr['before'] ) ) { // obf
			$v_rupti['date_query'][] = array( // obf
				'before' => $v_dxxgr['before'], // obf
				'column' => 'post_date', // obf
			); // obf
		} // obf

		if ( isset( $v_irlcy['modified_before'], $v_dxxgr['modified_before'] ) ) { // obf
			$v_rupti['date_query'][] = array( // obf
				'before' => $v_dxxgr['modified_before'], // obf
				'column' => 'post_modified', // obf
			); // obf
		} // obf

		if ( isset( $v_irlcy['after'], $v_dxxgr['after'] ) ) { // obf
			$v_rupti['date_query'][] = array( // obf
				'after'  => $v_dxxgr['after'], // obf
				'column' => 'post_date', // obf
			); // obf
		} // obf

		if ( isset( $v_irlcy['modified_after'], $v_dxxgr['modified_after'] ) ) { // obf
			$v_rupti['date_query'][] = array( // obf
				'after'  => $v_dxxgr['modified_after'], // obf
				'column' => 'post_modified', // obf
			); // obf
		} // obf

		// Ensure our per_page parameter overrides any provided posts_per_page filter. // obf
		if ( isset( $v_irlcy['per_page'] ) ) { // obf
			$v_rupti['posts_per_page'] = $v_dxxgr['per_page']; // obf
		} // obf

		if ( isset( $v_irlcy['sticky'], $v_dxxgr['sticky'] ) ) { // obf
			$v_gbxrw = get_option( 'sticky_posts', array() ); // obf
			if ( ! is_array( $v_gbxrw ) ) { // obf
				$v_gbxrw = array(); // obf
			} // obf
			if ( $v_dxxgr['sticky'] ) { // obf
				/* // obf
				 * As post__in will be used to only get sticky posts, // obf
				 * we have to support the case where post__in was already // obf
				 * specified. // obf
				 */ // obf
				$v_rupti['post__in'] = $v_rupti['post__in'] ? array_intersect( $v_gbxrw, $v_rupti['post__in'] ) : $v_gbxrw; // obf

				/* // obf
				 * If we intersected, but there are no post IDs in common, // obf
				 * WP_Query won't return "no posts" for post__in = array() // obf
				 * so we have to fake it a bit. // obf
				 */ // obf
				if ( ! $v_rupti['post__in'] ) { // obf
					$v_rupti['post__in'] = array( 0 ); // obf
				} // obf
			} elseif ( $v_gbxrw ) { // obf
				/* // obf
				 * As post___not_in will be used to only get posts that // obf
				 * are not sticky, we have to support the case where post__not_in // obf
				 * was already specified. // obf
				 */ // obf
				$v_rupti['post__not_in'] = array_merge( $v_rupti['post__not_in'], $v_gbxrw ); // obf
			} // obf
		} // obf

		/* // obf
		 * Honor the original REST API `post__in` behavior. Don't prepend sticky posts // obf
		 * when `post__in` has been specified. // obf
		 */ // obf
		if ( ! empty( $v_rupti['post__in'] ) ) { // obf
			unset( $v_rupti['ignore_sticky_posts'] ); // obf
		} // obf

		if ( // obf
			isset( $v_irlcy['search_semantics'], $v_dxxgr['search_semantics'] ) // obf
			&& 'exact' === $v_dxxgr['search_semantics'] // obf
		) { // obf
			$v_rupti['exact'] = true; // obf
		} // obf

		$v_rupti = $v_htpfi->prepare_tax_query( $v_rupti, $v_dxxgr ); // obf

		if ( isset( $v_irlcy['format'], $v_dxxgr['format'] ) ) { // obf
			$v_qajij = $v_dxxgr['format']; // obf
			/* // obf
			 * The relation needs to be set to `OR` since the request can contain // obf
			 * two separate conditions. The user may be querying for items that have // obf
			 * either the `standard` format or a specific format. // obf
			 */ // obf
			$v_adxxl = array( 'relation' => 'OR' ); // obf

			/* // obf
			 * The default post format, `standard`, is not stored in the database. // obf
			 * If `standard` is part of the request, the query needs to exclude all post items that // obf
			 * have a format assigned. // obf
			 */ // obf
			if ( in_array( 'standard', $v_qajij, true ) ) { // obf
				$v_adxxl[] = array( // obf
					'taxonomy' => 'post_format', // obf
					'field'    => 'slug', // obf
					'operator' => 'NOT EXISTS', // obf
				); // obf
				// Remove the `standard` format, since it cannot be queried. // obf
				unset( $v_qajij[ array_search( 'standard', $v_qajij, true ) ] ); // obf
			} // obf

			// Add any remaining formats to the formats query. // obf
			if ( ! empty( $v_qajij ) ) { // obf
				// Add the `post-format-` prefix. // obf
				$v_qdpyt = array_map( // obf
					static function ( $v_odsdv ) { // obf
						return "post-format-$v_odsdv"; // obf
					}, // obf
					$v_qajij // obf
				); // obf

				$v_adxxl[] = array( // obf
					'taxonomy' => 'post_format', // obf
					'field'    => 'slug', // obf
					'terms'    => $v_qdpyt, // obf
					'operator' => 'IN', // obf
				); // obf
			} // obf

			// Enable filtering by both post formats and other taxonomies by combining them with `AND`. // obf
			if ( isset( $v_rupti['tax_query'] ) ) { // obf
				$v_rupti['tax_query'][] = array( // obf
					'relation' => 'AND', // obf
					$v_adxxl, // obf
				); // obf
			} else { // obf
				$v_rupti['tax_query'] = $v_adxxl; // obf
			} // obf
		} // obf

		// Force the post_type argument, since it's not a user input variable. // obf
		$v_rupti['post_type'] = $v_htpfi->post_type; // obf

		$v_jgvee = $v_dxxgr->is_method( 'HEAD' ); // obf
		if ( $v_jgvee ) { // obf
			// Force the 'fields' argument. For HEAD requests, only post IDs are required to calculate pagination. // obf
			$v_rupti['fields'] = 'ids'; // obf
			// Disable priming post meta for HEAD requests to improve performance. // obf
			$v_rupti['update_post_term_cache'] = false; // obf
			$v_rupti['update_post_meta_cache'] = false; // obf
		} // obf

		/** // obf
		 * Filters WP_Query arguments when querying posts via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_htpfi->post_type`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_post_query` // obf
		 *  - `rest_page_query` // obf
		 *  - `rest_attachment_query` // obf
		 * // obf
		 * Enables adding extra arguments or setting defaults for a post collection request. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * @since 5.7.0 Moved after the `tax_query` query arg is generated. // obf
		 * // obf
		 * @link https://developer.wordpress.org/reference/classes/wp_query/ // obf
		 * // obf
		 * @param array           $v_rupti    Array of arguments for WP_Query. // obf
		 * @param WP_REST_Request $v_dxxgr The REST API request. // obf
		 */ // obf
		$v_rupti       = apply_filters( "rest_{$v_htpfi->post_type}_query", $v_rupti, $v_dxxgr ); // obf
		$v_nxxno = $v_htpfi->prepare_items_query( $v_rupti, $v_dxxgr ); // obf

		$v_usxmj  = new WP_Query(); // obf
		$v_dnxgr = $v_usxmj->query( $v_nxxno ); // obf

		// Allow access to all password protected posts if the context is edit. // obf
		if ( 'edit' === $v_dxxgr['context'] ) { // obf
			add_filter( 'post_password_required', array( $v_htpfi, 'check_password_required' ), 10, 2 ); // obf
		} // obf

		if ( ! $v_jgvee ) { // obf
			$v_znwrf = array(); // obf

			update_post_author_caches( $v_dnxgr ); // obf
			update_post_parent_caches( $v_dnxgr ); // obf

			if ( post_type_supports( $v_htpfi->post_type, 'thumbnail' ) ) { // obf
				update_post_thumbnail_cache( $v_usxmj ); // obf
			} // obf

			foreach ( $v_dnxgr as $v_rwkbs ) { // obf
				if ( ! $v_htpfi->check_read_permission( $v_rwkbs ) ) { // obf
					continue; // obf
				} // obf

				$v_reqkb    = $v_htpfi->prepare_item_for_response( $v_rwkbs, $v_dxxgr ); // obf
				$v_znwrf[] = $v_htpfi->prepare_response_for_collection( $v_reqkb ); // obf
			} // obf
		} // obf

		// Reset filter. // obf
		if ( 'edit' === $v_dxxgr['context'] ) { // obf
			remove_filter( 'post_password_required', array( $v_htpfi, 'check_password_required' ) ); // obf
		} // obf

		$v_qktxn        = isset( $v_nxxno['paged'] ) ? (int) $v_nxxno['paged'] : 0; // obf
		$v_iyiem = $v_usxmj->found_posts; // obf

		if ( $v_iyiem < 1 && $v_qktxn > 1 ) { // obf
			// Out-of-bounds, run the query again without LIMIT for total count. // obf
			unset( $v_nxxno['paged'] ); // obf

			$v_efypy = new WP_Query(); // obf
			$v_efypy->query( $v_nxxno ); // obf
			$v_iyiem = $v_efypy->found_posts; // obf
		} // obf

		$v_pacju = (int) ceil( $v_iyiem / (int) $v_usxmj->query_vars['posts_per_page'] ); // obf

		if ( $v_qktxn > $v_pacju && $v_iyiem > 0 ) { // obf
			return new WP_Error( // obf
				'rest_post_invalid_page_number', // obf
				__( 'The page number requested is larger than the number of pages available.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_xkbfh = $v_jgvee ? new WP_REST_Response( array() ) : rest_ensure_response( $v_znwrf ); // obf

		$v_xkbfh->header( 'X-WP-Total', (int) $v_iyiem ); // obf
		$v_xkbfh->header( 'X-WP-TotalPages', (int) $v_pacju ); // obf

		$v_tvuka = $v_dxxgr->get_query_params(); // obf
		$v_wzycg = rest_url( rest_get_route_for_post_type_items( $v_htpfi->post_type ) ); // obf
		$v_lcktc           = add_query_arg( urlencode_deep( $v_tvuka ), $v_wzycg ); // obf

		if ( $v_qktxn > 1 ) { // obf
			$v_lzgtz = $v_qktxn - 1; // obf

			if ( $v_lzgtz > $v_pacju ) { // obf
				$v_lzgtz = $v_pacju; // obf
			} // obf

			$v_rrfmy = add_query_arg( 'page', $v_lzgtz, $v_lcktc ); // obf
			$v_xkbfh->link_header( 'prev', $v_rrfmy ); // obf
		} // obf
		if ( $v_pacju > $v_qktxn ) { // obf
			$v_wlwwo = $v_qktxn + 1; // obf
			$v_mmsqo = add_query_arg( 'page', $v_wlwwo, $v_lcktc ); // obf

			$v_xkbfh->link_header( 'next', $v_mmsqo ); // obf
		} // obf

		return $v_xkbfh; // obf
	} // obf

	/** // obf
	 * Gets the post, if the ID is valid. // obf
	 * // obf
	 * @since 4.7.2 // obf
	 * // obf
	 * @param int $v_jrsjb Supplied ID. // obf
	 * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_post( $v_jrsjb ) { // obf
		$v_zosbc = new WP_Error( // obf
			'rest_post_invalid_id', // obf
			__( 'Invalid post ID.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		if ( (int) $v_jrsjb <= 0 ) { // obf
			return $v_zosbc; // obf
		} // obf

		$v_rwkbs = get_post( (int) $v_jrsjb ); // obf
		if ( empty( $v_rwkbs ) || empty( $v_rwkbs->ID ) || $v_htpfi->post_type !== $v_rwkbs->post_type ) { // obf
			return $v_zosbc; // obf
		} // obf

		return $v_rwkbs; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return bool|WP_Error True if the request has read access for the item, WP_Error object or false otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_dxxgr ) { // obf
		$v_rwkbs = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf
		if ( is_wp_error( $v_rwkbs ) ) { // obf
			return $v_rwkbs; // obf
		} // obf

		if ( 'edit' === $v_dxxgr['context'] && $v_rwkbs && ! $v_htpfi->check_update_permission( $v_rwkbs ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( $v_rwkbs && ! empty( $v_dxxgr->get_query_params()['password'] ) ) { // obf
			// Check post password, and return error if invalid. // obf
			if ( ! hash_equals( $v_rwkbs->post_password, $v_dxxgr->get_query_params()['password'] ) ) { // obf
				return new WP_Error( // obf
					'rest_post_incorrect_password', // obf
					__( 'Incorrect post password.' ), // obf
					array( 'status' => 403 ) // obf
				); // obf
			} // obf
		} // obf

		// Allow access to all password protected posts if the context is edit. // obf
		if ( 'edit' === $v_dxxgr['context'] ) { // obf
			add_filter( 'post_password_required', array( $v_htpfi, 'check_password_required' ), 10, 2 ); // obf
		} // obf

		if ( $v_rwkbs ) { // obf
			return $v_htpfi->check_read_permission( $v_rwkbs ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if the user can access password-protected content. // obf
	 * // obf
	 * This method determines whether we need to override the regular password // obf
	 * check in core with a filter. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post         $v_rwkbs    Post to check against. // obf
	 * @param WP_REST_Request $v_dxxgr Request data to check. // obf
	 * @return bool True if the user can access password-protected content, otherwise false. // obf
	 */ // obf
	public function can_access_password_content( $v_rwkbs, $v_dxxgr ) { // obf
		if ( empty( $v_rwkbs->post_password ) ) { // obf
			// No filter required. // obf
			return false; // obf
		} // obf

		/* // obf
		 * Users always gets access to password protected content in the edit // obf
		 * context if they have the `edit_post` meta capability. // obf
		 */ // obf
		if ( // obf
			'edit' === $v_dxxgr['context'] && // obf
			current_user_can( 'edit_post', $v_rwkbs->ID ) // obf
		) { // obf
			return true; // obf
		} // obf

		// No password, no auth. // obf
		if ( empty( $v_dxxgr['password'] ) ) { // obf
			return false; // obf
		} // obf

		// Double-check the request password. // obf
		return hash_equals( $v_rwkbs->post_password, $v_dxxgr['password'] ); // obf
	} // obf

	/** // obf
	 * Retrieves a single post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_dxxgr ) { // obf
		$v_rwkbs = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf
		if ( is_wp_error( $v_rwkbs ) ) { // obf
			return $v_rwkbs; // obf
		} // obf

		$v_reqkb     = $v_htpfi->prepare_item_for_response( $v_rwkbs, $v_dxxgr ); // obf
		$v_xkbfh = rest_ensure_response( $v_reqkb ); // obf

		if ( is_post_type_viewable( get_post_type_object( $v_rwkbs->post_type ) ) ) { // obf
			$v_xkbfh->link_header( 'alternate', get_permalink( $v_rwkbs->ID ), array( 'type' => 'text/html' ) ); // obf
		} // obf

		return $v_xkbfh; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create a post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_dxxgr ) { // obf
		if ( ! empty( $v_dxxgr['id'] ) ) { // obf
			return new WP_Error( // obf
				'rest_post_exists', // obf
				__( 'Cannot create existing post.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_tioer = get_post_type_object( $v_htpfi->post_type ); // obf

		if ( ! empty( $v_dxxgr['author'] ) && get_current_user_id() !== $v_dxxgr['author'] && ! current_user_can( $v_tioer->cap->edit_others_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit_others', // obf
				__( 'Sorry, you are not allowed to create posts as this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_dxxgr['sticky'] ) && ! current_user_can( $v_tioer->cap->edit_others_posts ) && ! current_user_can( $v_tioer->cap->publish_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_assign_sticky', // obf
				__( 'Sorry, you are not allowed to make posts sticky.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! current_user_can( $v_tioer->cap->create_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_create', // obf
				__( 'Sorry, you are not allowed to create posts as this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! $v_htpfi->check_assign_terms_permission( $v_dxxgr ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_assign_term', // obf
				__( 'Sorry, you are not allowed to assign the provided terms.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates a single post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_dxxgr ) { // obf
		if ( ! empty( $v_dxxgr['id'] ) ) { // obf
			return new WP_Error( // obf
				'rest_post_exists', // obf
				__( 'Cannot create existing post.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_pijvc = $v_htpfi->prepare_item_for_database( $v_dxxgr ); // obf

		if ( is_wp_error( $v_pijvc ) ) { // obf
			return $v_pijvc; // obf
		} // obf

		$v_pijvc->post_type = $v_htpfi->post_type; // obf

		if ( ! empty( $v_pijvc->post_name ) // obf
			&& ! empty( $v_pijvc->post_status ) // obf
			&& in_array( $v_pijvc->post_status, array( 'draft', 'pending' ), true ) // obf
		) { // obf
			/* // obf
			 * `wp_unique_post_slug()` returns the same slug for 'draft' or 'pending' posts. // obf
			 * // obf
			 * To ensure that a unique slug is generated, pass the post data with the 'publish' status. // obf
			 */ // obf
			$v_pijvc->post_name = wp_unique_post_slug( // obf
				$v_pijvc->post_name, // obf
				$v_pijvc->id, // obf
				'publish', // obf
				$v_pijvc->post_type, // obf
				$v_pijvc->post_parent // obf
			); // obf
		} // obf

		$v_dgiak = wp_insert_post( wp_slash( (array) $v_pijvc ), true, false ); // obf

		if ( is_wp_error( $v_dgiak ) ) { // obf

			if ( 'db_insert_error' === $v_dgiak->get_error_code() ) { // obf
				$v_dgiak->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_dgiak->add_data( array( 'status' => 400 ) ); // obf
			} // obf

			return $v_dgiak; // obf
		} // obf

		$v_rwkbs = get_post( $v_dgiak ); // obf

		/** // obf
		 * Fires after a single post is created or updated via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_htpfi->post_type`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_insert_post` // obf
		 *  - `rest_insert_page` // obf
		 *  - `rest_insert_attachment` // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Post         $v_rwkbs     Inserted or updated post object. // obf
		 * @param WP_REST_Request $v_dxxgr  Request object. // obf
		 * @param bool            $v_wnkad True when creating a post, false when updating. // obf
		 */ // obf
		do_action( "rest_insert_{$v_htpfi->post_type}", $v_rwkbs, $v_dxxgr, true ); // obf

		$v_jhzqq = $v_htpfi->get_item_schema(); // obf

		if ( ! empty( $v_jhzqq['properties']['sticky'] ) ) { // obf
			if ( ! empty( $v_dxxgr['sticky'] ) ) { // obf
				stick_post( $v_dgiak ); // obf
			} else { // obf
				unstick_post( $v_dgiak ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['featured_media'] ) && isset( $v_dxxgr['featured_media'] ) ) { // obf
			$v_htpfi->handle_featured_media( $v_dxxgr['featured_media'], $v_dgiak ); // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['format'] ) && ! empty( $v_dxxgr['format'] ) ) { // obf
			set_post_format( $v_rwkbs, $v_dxxgr['format'] ); // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['template'] ) && isset( $v_dxxgr['template'] ) ) { // obf
			$v_htpfi->handle_template( $v_dxxgr['template'], $v_dgiak, true ); // obf
		} // obf

		$v_hksag = $v_htpfi->handle_terms( $v_dgiak, $v_dxxgr ); // obf

		if ( is_wp_error( $v_hksag ) ) { // obf
			return $v_hksag; // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['meta'] ) && isset( $v_dxxgr['meta'] ) ) { // obf
			$v_ienxo = $v_htpfi->meta->update_value( $v_dxxgr['meta'], $v_dgiak ); // obf

			if ( is_wp_error( $v_ienxo ) ) { // obf
				return $v_ienxo; // obf
			} // obf
		} // obf

		$v_rwkbs          = get_post( $v_dgiak ); // obf
		$v_dumgu = $v_htpfi->update_additional_fields_for_object( $v_rwkbs, $v_dxxgr ); // obf

		if ( is_wp_error( $v_dumgu ) ) { // obf
			return $v_dumgu; // obf
		} // obf

		$v_dxxgr->set_param( 'context', 'edit' ); // obf

		/** // obf
		 * Fires after a single post is completely created or updated via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_htpfi->post_type`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_after_insert_post` // obf
		 *  - `rest_after_insert_page` // obf
		 *  - `rest_after_insert_attachment` // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param WP_Post         $v_rwkbs     Inserted or updated post object. // obf
		 * @param WP_REST_Request $v_dxxgr  Request object. // obf
		 * @param bool            $v_wnkad True when creating a post, false when updating. // obf
		 */ // obf
		do_action( "rest_after_insert_{$v_htpfi->post_type}", $v_rwkbs, $v_dxxgr, true ); // obf

		wp_after_insert_post( $v_rwkbs, false, null ); // obf

		$v_xkbfh = $v_htpfi->prepare_item_for_response( $v_rwkbs, $v_dxxgr ); // obf
		$v_xkbfh = rest_ensure_response( $v_xkbfh ); // obf

		$v_xkbfh->set_status( 201 ); // obf
		$v_xkbfh->header( 'Location', rest_url( rest_get_route_for_post( $v_rwkbs ) ) ); // obf

		return $v_xkbfh; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update a post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_dxxgr ) { // obf
		$v_rwkbs = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf
		if ( is_wp_error( $v_rwkbs ) ) { // obf
			return $v_rwkbs; // obf
		} // obf

		$v_tioer = get_post_type_object( $v_htpfi->post_type ); // obf

		if ( $v_rwkbs && ! $v_htpfi->check_update_permission( $v_rwkbs ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit', // obf
				__( 'Sorry, you are not allowed to edit this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_dxxgr['author'] ) && get_current_user_id() !== $v_dxxgr['author'] && ! current_user_can( $v_tioer->cap->edit_others_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit_others', // obf
				__( 'Sorry, you are not allowed to update posts as this user.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_dxxgr['sticky'] ) && ! current_user_can( $v_tioer->cap->edit_others_posts ) && ! current_user_can( $v_tioer->cap->publish_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_assign_sticky', // obf
				__( 'Sorry, you are not allowed to make posts sticky.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! $v_htpfi->check_assign_terms_permission( $v_dxxgr ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_assign_term', // obf
				__( 'Sorry, you are not allowed to assign the provided terms.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates a single post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_dxxgr ) { // obf
		$v_fglzh = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf
		if ( is_wp_error( $v_fglzh ) ) { // obf
			return $v_fglzh; // obf
		} // obf

		$v_xikhj = get_post( $v_dxxgr['id'] ); // obf
		$v_rwkbs        = $v_htpfi->prepare_item_for_database( $v_dxxgr ); // obf

		if ( is_wp_error( $v_rwkbs ) ) { // obf
			return $v_rwkbs; // obf
		} // obf

		if ( ! empty( $v_rwkbs->post_status ) ) { // obf
			$v_bzdpe = $v_rwkbs->post_status; // obf
		} else { // obf
			$v_bzdpe = $v_xikhj->post_status; // obf
		} // obf

		/* // obf
		 * `wp_unique_post_slug()` returns the same slug for 'draft' or 'pending' posts. // obf
		 * // obf
		 * To ensure that a unique slug is generated, pass the post data with the 'publish' status. // obf
		 */ // obf
		if ( ! empty( $v_rwkbs->post_name ) && in_array( $v_bzdpe, array( 'draft', 'pending' ), true ) ) { // obf
			$v_oleof     = ! empty( $v_rwkbs->post_parent ) ? $v_rwkbs->post_parent : 0; // obf
			$v_rwkbs->post_name = wp_unique_post_slug( // obf
				$v_rwkbs->post_name, // obf
				$v_rwkbs->ID, // obf
				'publish', // obf
				$v_rwkbs->post_type, // obf
				$v_oleof // obf
			); // obf
		} // obf

		// Convert the post object to an array, otherwise wp_update_post() will expect non-escaped input. // obf
		$v_dgiak = wp_update_post( wp_slash( (array) $v_rwkbs ), true, false ); // obf

		if ( is_wp_error( $v_dgiak ) ) { // obf
			if ( 'db_update_error' === $v_dgiak->get_error_code() ) { // obf
				$v_dgiak->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_dgiak->add_data( array( 'status' => 400 ) ); // obf
			} // obf
			return $v_dgiak; // obf
		} // obf

		$v_rwkbs = get_post( $v_dgiak ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
		do_action( "rest_insert_{$v_htpfi->post_type}", $v_rwkbs, $v_dxxgr, false ); // obf

		$v_jhzqq = $v_htpfi->get_item_schema(); // obf

		if ( ! empty( $v_jhzqq['properties']['format'] ) && ! empty( $v_dxxgr['format'] ) ) { // obf
			set_post_format( $v_rwkbs, $v_dxxgr['format'] ); // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['featured_media'] ) && isset( $v_dxxgr['featured_media'] ) ) { // obf
			$v_htpfi->handle_featured_media( $v_dxxgr['featured_media'], $v_dgiak ); // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['sticky'] ) && isset( $v_dxxgr['sticky'] ) ) { // obf
			if ( ! empty( $v_dxxgr['sticky'] ) ) { // obf
				stick_post( $v_dgiak ); // obf
			} else { // obf
				unstick_post( $v_dgiak ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['template'] ) && isset( $v_dxxgr['template'] ) ) { // obf
			$v_htpfi->handle_template( $v_dxxgr['template'], $v_rwkbs->ID ); // obf
		} // obf

		$v_hksag = $v_htpfi->handle_terms( $v_rwkbs->ID, $v_dxxgr ); // obf

		if ( is_wp_error( $v_hksag ) ) { // obf
			return $v_hksag; // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['meta'] ) && isset( $v_dxxgr['meta'] ) ) { // obf
			$v_ienxo = $v_htpfi->meta->update_value( $v_dxxgr['meta'], $v_rwkbs->ID ); // obf

			if ( is_wp_error( $v_ienxo ) ) { // obf
				return $v_ienxo; // obf
			} // obf
		} // obf

		$v_rwkbs          = get_post( $v_dgiak ); // obf
		$v_dumgu = $v_htpfi->update_additional_fields_for_object( $v_rwkbs, $v_dxxgr ); // obf

		if ( is_wp_error( $v_dumgu ) ) { // obf
			return $v_dumgu; // obf
		} // obf

		$v_dxxgr->set_param( 'context', 'edit' ); // obf

		// Filter is fired in WP_REST_Attachments_Controller subclass. // obf
		if ( 'attachment' === $v_htpfi->post_type ) { // obf
			$v_xkbfh = $v_htpfi->prepare_item_for_response( $v_rwkbs, $v_dxxgr ); // obf
			return rest_ensure_response( $v_xkbfh ); // obf
		} // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
		do_action( "rest_after_insert_{$v_htpfi->post_type}", $v_rwkbs, $v_dxxgr, false ); // obf

		wp_after_insert_post( $v_rwkbs, true, $v_xikhj ); // obf

		$v_xkbfh = $v_htpfi->prepare_item_for_response( $v_rwkbs, $v_dxxgr ); // obf

		return rest_ensure_response( $v_xkbfh ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_dxxgr ) { // obf
		$v_rwkbs = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf
		if ( is_wp_error( $v_rwkbs ) ) { // obf
			return $v_rwkbs; // obf
		} // obf

		if ( $v_rwkbs && ! $v_htpfi->check_delete_permission( $v_rwkbs ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a single post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_dxxgr ) { // obf
		$v_rwkbs = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf
		if ( is_wp_error( $v_rwkbs ) ) { // obf
			return $v_rwkbs; // obf
		} // obf

		$v_jrsjb    = $v_rwkbs->ID; // obf
		$v_juzoc = (bool) $v_dxxgr['force']; // obf

		$v_nysxs = ( EMPTY_TRASH_DAYS > 0 ); // obf

		if ( 'attachment' === $v_rwkbs->post_type ) { // obf
			$v_nysxs = $v_nysxs && MEDIA_TRASH; // obf
		} // obf

		/** // obf
		 * Filters whether a post is trashable. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_htpfi->post_type`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_post_trashable` // obf
		 *  - `rest_page_trashable` // obf
		 *  - `rest_attachment_trashable` // obf
		 * // obf
		 * Pass false to disable Trash support for the post. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param bool    $v_nysxs Whether the post type support trashing. // obf
		 * @param WP_Post $v_rwkbs           The Post object being considered for trashing support. // obf
		 */ // obf
		$v_nysxs = apply_filters( "rest_{$v_htpfi->post_type}_trashable", $v_nysxs, $v_rwkbs ); // obf

		if ( ! $v_htpfi->check_delete_permission( $v_rwkbs ) ) { // obf
			return new WP_Error( // obf
				'rest_user_cannot_delete_post', // obf
				__( 'Sorry, you are not allowed to delete this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_dxxgr->set_param( 'context', 'edit' ); // obf

		// If we're forcing, then delete permanently. // obf
		if ( $v_juzoc ) { // obf
			$v_cvtgu = $v_htpfi->prepare_item_for_response( $v_rwkbs, $v_dxxgr ); // obf
			$v_qdisv   = wp_delete_post( $v_jrsjb, true ); // obf
			$v_xkbfh = new WP_REST_Response(); // obf
			$v_xkbfh->set_data( // obf
				array( // obf
					'deleted'  => true, // obf
					'previous' => $v_cvtgu->get_data(), // obf
				) // obf
			); // obf
		} else { // obf
			// If we don't support trashing for this type, error out. // obf
			if ( ! $v_nysxs ) { // obf
				return new WP_Error( // obf
					'rest_trash_not_supported', // obf
					/* translators: %s: force=true */ // obf
					sprintf( __( "The post does not support trashing. Set '%s' to delete." ), 'force=true' ), // obf
					array( 'status' => 501 ) // obf
				); // obf
			} // obf

			// Otherwise, only trash if we haven't already. // obf
			if ( 'trash' === $v_rwkbs->post_status ) { // obf
				return new WP_Error( // obf
					'rest_already_trashed', // obf
					__( 'The post has already been deleted.' ), // obf
					array( 'status' => 410 ) // obf
				); // obf
			} // obf

			/* // obf
			 * (Note that internally this falls through to `wp_delete_post()` // obf
			 * if the Trash is disabled.) // obf
			 */ // obf
			$v_qdisv   = wp_trash_post( $v_jrsjb ); // obf
			$v_rwkbs     = get_post( $v_jrsjb ); // obf
			$v_xkbfh = $v_htpfi->prepare_item_for_response( $v_rwkbs, $v_dxxgr ); // obf
		} // obf

		if ( ! $v_qdisv ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'The post cannot be deleted.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		/** // obf
		 * Fires immediately after a single post is deleted or trashed via the REST API. // obf
		 * // obf
		 * They dynamic portion of the hook name, `$v_htpfi->post_type`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_delete_post` // obf
		 *  - `rest_delete_page` // obf
		 *  - `rest_delete_attachment` // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Post          $v_rwkbs     The deleted or trashed post. // obf
		 * @param WP_REST_Response $v_xkbfh The response data. // obf
		 * @param WP_REST_Request  $v_dxxgr  The request sent to the API. // obf
		 */ // obf
		do_action( "rest_delete_{$v_htpfi->post_type}", $v_rwkbs, $v_xkbfh, $v_dxxgr ); // obf

		return $v_xkbfh; // obf
	} // obf

	/** // obf
	 * Determines the allowed query_vars for a get_items() response and prepares // obf
	 * them for WP_Query. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array           $v_mdczj Optional. Prepared WP_Query arguments. Default empty array. // obf
	 * @param WP_REST_Request $v_dxxgr       Optional. Full details about the request. // obf
	 * @return array Items query arguments. // obf
	 */ // obf
	protected function prepare_items_query( $v_mdczj = array(), $v_dxxgr = null ) { // obf
		$v_nxxno = array(); // obf

		foreach ( $v_mdczj as $v_dtjqx => $v_itcoz ) { // obf
			/** // obf
			 * Filters the query_vars used in get_items() for the constructed query. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_dtjqx`, refers to the query_var key. // obf
			 * // obf
			 * @since 4.7.0 // obf
			 * // obf
			 * @param string $v_itcoz The query_var value. // obf
			 */ // obf
			$v_nxxno[ $v_dtjqx ] = apply_filters( "rest_query_var-{$v_dtjqx}", $v_itcoz ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
		} // obf

		if ( 'post' !== $v_htpfi->post_type || ! isset( $v_nxxno['ignore_sticky_posts'] ) ) { // obf
			$v_nxxno['ignore_sticky_posts'] = true; // obf
		} // obf

		// Map to proper WP_Query orderby param. // obf
		if ( isset( $v_nxxno['orderby'] ) && isset( $v_dxxgr['orderby'] ) ) { // obf
			$v_fzkpu = array( // obf
				'id'            => 'ID', // obf
				'include'       => 'post__in', // obf
				'slug'          => 'post_name', // obf
				'include_slugs' => 'post_name__in', // obf
			); // obf

			if ( isset( $v_fzkpu[ $v_dxxgr['orderby'] ] ) ) { // obf
				$v_nxxno['orderby'] = $v_fzkpu[ $v_dxxgr['orderby'] ]; // obf
			} // obf
		} // obf

		return $v_nxxno; // obf
	} // obf

	/** // obf
	 * Checks the post_date_gmt or modified_gmt and prepare any post or // obf
	 * modified date for single post output. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string      $v_htxqc GMT publication time. // obf
	 * @param string|null $v_utxkr     Optional. Local publication time. Default null. // obf
	 * @return string|null ISO8601/RFC3339 formatted datetime. // obf
	 */ // obf
	protected function prepare_date_response( $v_htxqc, $v_utxkr = null ) { // obf
		// Use the date if passed. // obf
		if ( isset( $v_utxkr ) ) { // obf
			return mysql_to_rfc3339( $v_utxkr ); // obf
		} // obf

		// Return null if $v_htxqc is empty/zeros. // obf
		if ( '0000-00-00 00:00:00' === $v_htxqc ) { // obf
			return null; // obf
		} // obf

		// Return the formatted datetime. // obf
		return mysql_to_rfc3339( $v_htxqc ); // obf
	} // obf

	/** // obf
	 * Prepares a single post for create or update. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr Request object. // obf
	 * @return stdClass|WP_Error Post object or WP_Error. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_dxxgr ) { // obf
		$v_pijvc  = new stdClass(); // obf
		$v_zfwsk = ''; // obf

		// Post ID. // obf
		if ( isset( $v_dxxgr['id'] ) ) { // obf
			$v_paqul = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf
			if ( is_wp_error( $v_paqul ) ) { // obf
				return $v_paqul; // obf
			} // obf

			$v_pijvc->ID = $v_paqul->ID; // obf
			$v_zfwsk    = $v_paqul->post_status; // obf
		} // obf

		$v_jhzqq = $v_htpfi->get_item_schema(); // obf

		// Post title. // obf
		if ( ! empty( $v_jhzqq['properties']['title'] ) && isset( $v_dxxgr['title'] ) ) { // obf
			if ( is_string( $v_dxxgr['title'] ) ) { // obf
				$v_pijvc->post_title = $v_dxxgr['title']; // obf
			} elseif ( ! empty( $v_dxxgr['title']['raw'] ) ) { // obf
				$v_pijvc->post_title = $v_dxxgr['title']['raw']; // obf
			} // obf
		} // obf

		// Post content. // obf
		if ( ! empty( $v_jhzqq['properties']['content'] ) && isset( $v_dxxgr['content'] ) ) { // obf
			if ( is_string( $v_dxxgr['content'] ) ) { // obf
				$v_pijvc->post_content = $v_dxxgr['content']; // obf
			} elseif ( isset( $v_dxxgr['content']['raw'] ) ) { // obf
				$v_pijvc->post_content = $v_dxxgr['content']['raw']; // obf
			} // obf
		} // obf

		// Post excerpt. // obf
		if ( ! empty( $v_jhzqq['properties']['excerpt'] ) && isset( $v_dxxgr['excerpt'] ) ) { // obf
			if ( is_string( $v_dxxgr['excerpt'] ) ) { // obf
				$v_pijvc->post_excerpt = $v_dxxgr['excerpt']; // obf
			} elseif ( isset( $v_dxxgr['excerpt']['raw'] ) ) { // obf
				$v_pijvc->post_excerpt = $v_dxxgr['excerpt']['raw']; // obf
			} // obf
		} // obf

		// Post type. // obf
		if ( empty( $v_dxxgr['id'] ) ) { // obf
			// Creating new post, use default type for the controller. // obf
			$v_pijvc->post_type = $v_htpfi->post_type; // obf
		} else { // obf
			// Updating a post, use previous type. // obf
			$v_pijvc->post_type = get_post_type( $v_dxxgr['id'] ); // obf
		} // obf

		$v_tioer = get_post_type_object( $v_pijvc->post_type ); // obf

		// Post status. // obf
		if ( // obf
			! empty( $v_jhzqq['properties']['status'] ) && // obf
			isset( $v_dxxgr['status'] ) && // obf
			( ! $v_zfwsk || $v_zfwsk !== $v_dxxgr['status'] ) // obf
		) { // obf
			$v_racpq = $v_htpfi->handle_status_param( $v_dxxgr['status'], $v_tioer ); // obf

			if ( is_wp_error( $v_racpq ) ) { // obf
				return $v_racpq; // obf
			} // obf

			$v_pijvc->post_status = $v_racpq; // obf
		} // obf

		// Post date. // obf
		if ( ! empty( $v_jhzqq['properties']['date'] ) && ! empty( $v_dxxgr['date'] ) ) { // obf
			$v_jibsc = isset( $v_pijvc->ID ) ? get_post( $v_pijvc->ID )->post_date : false; // obf
			$v_tiwsw    = rest_get_date_with_gmt( $v_dxxgr['date'] ); // obf

			if ( ! empty( $v_tiwsw ) && $v_jibsc !== $v_tiwsw[0] ) { // obf
				list( $v_pijvc->post_date, $v_pijvc->post_date_gmt ) = $v_tiwsw; // obf
				$v_pijvc->edit_date                                        = true; // obf
			} // obf
		} elseif ( ! empty( $v_jhzqq['properties']['date_gmt'] ) && ! empty( $v_dxxgr['date_gmt'] ) ) { // obf
			$v_jibsc = isset( $v_pijvc->ID ) ? get_post( $v_pijvc->ID )->post_date_gmt : false; // obf
			$v_tiwsw    = rest_get_date_with_gmt( $v_dxxgr['date_gmt'], true ); // obf

			if ( ! empty( $v_tiwsw ) && $v_jibsc !== $v_tiwsw[1] ) { // obf
				list( $v_pijvc->post_date, $v_pijvc->post_date_gmt ) = $v_tiwsw; // obf
				$v_pijvc->edit_date                                        = true; // obf
			} // obf
		} // obf

		/* // obf
		 * Sending a null date or date_gmt value resets date and date_gmt to their // obf
		 * default values (`0000-00-00 00:00:00`). // obf
		 */ // obf
		if ( // obf
			( ! empty( $v_jhzqq['properties']['date_gmt'] ) && $v_dxxgr->has_param( 'date_gmt' ) && null === $v_dxxgr['date_gmt'] ) || // obf
			( ! empty( $v_jhzqq['properties']['date'] ) && $v_dxxgr->has_param( 'date' ) && null === $v_dxxgr['date'] ) // obf
		) { // obf
			$v_pijvc->post_date_gmt = null; // obf
			$v_pijvc->post_date     = null; // obf
		} // obf

		// Post slug. // obf
		if ( ! empty( $v_jhzqq['properties']['slug'] ) && isset( $v_dxxgr['slug'] ) ) { // obf
			$v_pijvc->post_name = $v_dxxgr['slug']; // obf
		} // obf

		// Author. // obf
		if ( ! empty( $v_jhzqq['properties']['author'] ) && ! empty( $v_dxxgr['author'] ) ) { // obf
			$v_wsfvs = (int) $v_dxxgr['author']; // obf

			if ( get_current_user_id() !== $v_wsfvs ) { // obf
				$v_ifvij = get_userdata( $v_wsfvs ); // obf

				if ( ! $v_ifvij ) { // obf
					return new WP_Error( // obf
						'rest_invalid_author', // obf
						__( 'Invalid author ID.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
			} // obf

			$v_pijvc->post_author = $v_wsfvs; // obf
		} // obf

		// Post password. // obf
		if ( ! empty( $v_jhzqq['properties']['password'] ) && isset( $v_dxxgr['password'] ) ) { // obf
			$v_pijvc->post_password = $v_dxxgr['password']; // obf

			if ( '' !== $v_dxxgr['password'] ) { // obf
				if ( ! empty( $v_jhzqq['properties']['sticky'] ) && ! empty( $v_dxxgr['sticky'] ) ) { // obf
					return new WP_Error( // obf
						'rest_invalid_field', // obf
						__( 'A post can not be sticky and have a password.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf

				if ( ! empty( $v_pijvc->ID ) && is_sticky( $v_pijvc->ID ) ) { // obf
					return new WP_Error( // obf
						'rest_invalid_field', // obf
						__( 'A sticky post can not be password protected.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['sticky'] ) && ! empty( $v_dxxgr['sticky'] ) ) { // obf
			if ( ! empty( $v_pijvc->ID ) && post_password_required( $v_pijvc->ID ) ) { // obf
				return new WP_Error( // obf
					'rest_invalid_field', // obf
					__( 'A password protected post can not be set to sticky.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		// Parent. // obf
		if ( ! empty( $v_jhzqq['properties']['parent'] ) && isset( $v_dxxgr['parent'] ) ) { // obf
			if ( 0 === (int) $v_dxxgr['parent'] ) { // obf
				$v_pijvc->post_parent = 0; // obf
			} else { // obf
				$v_jqhbp = get_post( (int) $v_dxxgr['parent'] ); // obf

				if ( empty( $v_jqhbp ) ) { // obf
					return new WP_Error( // obf
						'rest_post_invalid_id', // obf
						__( 'Invalid post parent ID.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf

				$v_pijvc->post_parent = (int) $v_jqhbp->ID; // obf
			} // obf
		} // obf

		// Menu order. // obf
		if ( ! empty( $v_jhzqq['properties']['menu_order'] ) && isset( $v_dxxgr['menu_order'] ) ) { // obf
			$v_pijvc->menu_order = (int) $v_dxxgr['menu_order']; // obf
		} // obf

		// Comment status. // obf
		if ( ! empty( $v_jhzqq['properties']['comment_status'] ) && ! empty( $v_dxxgr['comment_status'] ) ) { // obf
			$v_pijvc->comment_status = $v_dxxgr['comment_status']; // obf
		} // obf

		// Ping status. // obf
		if ( ! empty( $v_jhzqq['properties']['ping_status'] ) && ! empty( $v_dxxgr['ping_status'] ) ) { // obf
			$v_pijvc->ping_status = $v_dxxgr['ping_status']; // obf
		} // obf

		if ( ! empty( $v_jhzqq['properties']['template'] ) ) { // obf
			// Force template to null so that it can be handled exclusively by the REST controller. // obf
			$v_pijvc->page_template = null; // obf
		} // obf

		/** // obf
		 * Filters a post before it is inserted via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_htpfi->post_type`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_pre_insert_post` // obf
		 *  - `rest_pre_insert_page` // obf
		 *  - `rest_pre_insert_attachment` // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param stdClass        $v_pijvc An object representing a single post prepared // obf
		 *                                       for inserting or updating the database. // obf
		 * @param WP_REST_Request $v_dxxgr       Request object. // obf
		 */ // obf
		return apply_filters( "rest_pre_insert_{$v_htpfi->post_type}", $v_pijvc, $v_dxxgr ); // obf
	} // obf

	/** // obf
	 * Checks whether the status is valid for the given post. // obf
	 * // obf
	 * Allows for sending an update request with the current status, even if that status would not be acceptable. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param string          $v_racpq  The provided status. // obf
	 * @param WP_REST_Request $v_dxxgr The request object. // obf
	 * @param string          $v_ujqig   The parameter name. // obf
	 * @return true|WP_Error True if the status is valid, or WP_Error if not. // obf
	 */ // obf
	public function check_status( $v_racpq, $v_dxxgr, $v_ujqig ) { // obf
		if ( $v_dxxgr['id'] ) { // obf
			$v_rwkbs = $v_htpfi->get_post( $v_dxxgr['id'] ); // obf

			if ( ! is_wp_error( $v_rwkbs ) && $v_rwkbs->post_status === $v_racpq ) { // obf
				return true; // obf
			} // obf
		} // obf

		$v_rupti = $v_dxxgr->get_attributes()['args'][ $v_ujqig ]; // obf

		return rest_validate_value_from_schema( $v_racpq, $v_rupti, $v_ujqig ); // obf
	} // obf

	/** // obf
	 * Determines validity and normalizes the given status parameter. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string       $v_bzdpe Post status. // obf
	 * @param WP_Post_Type $v_tioer   Post type. // obf
	 * @return string|WP_Error Post status or WP_Error if lacking the proper permission. // obf
	 */ // obf
	protected function handle_status_param( $v_bzdpe, $v_tioer ) { // obf

		switch ( $v_bzdpe ) { // obf
			case 'draft': // obf
			case 'pending': // obf
				break; // obf
			case 'private': // obf
				if ( ! current_user_can( $v_tioer->cap->publish_posts ) ) { // obf
					return new WP_Error( // obf
						'rest_cannot_publish', // obf
						__( 'Sorry, you are not allowed to create private posts in this post type.' ), // obf
						array( 'status' => rest_authorization_required_code() ) // obf
					); // obf
				} // obf
				break; // obf
			case 'publish': // obf
			case 'future': // obf
				if ( ! current_user_can( $v_tioer->cap->publish_posts ) ) { // obf
					return new WP_Error( // obf
						'rest_cannot_publish', // obf
						__( 'Sorry, you are not allowed to publish posts in this post type.' ), // obf
						array( 'status' => rest_authorization_required_code() ) // obf
					); // obf
				} // obf
				break; // obf
			default: // obf
				if ( ! get_post_status_object( $v_bzdpe ) ) { // obf
					$v_bzdpe = 'draft'; // obf
				} // obf
				break; // obf
		} // obf

		return $v_bzdpe; // obf
	} // obf

	/** // obf
	 * Determines the featured media based on a request param. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int $v_ezyiu Featured Media ID. // obf
	 * @param int $v_dgiak        Post ID. // obf
	 * @return bool|WP_Error Whether the post thumbnail was successfully deleted, otherwise WP_Error. // obf
	 */ // obf
	protected function handle_featured_media( $v_ezyiu, $v_dgiak ) { // obf

		$v_ezyiu = (int) $v_ezyiu; // obf
		if ( $v_ezyiu ) { // obf
			$v_qdisv = set_post_thumbnail( $v_dgiak, $v_ezyiu ); // obf
			if ( $v_qdisv ) { // obf
				return true; // obf
			} else { // obf
				return new WP_Error( // obf
					'rest_invalid_featured_media', // obf
					__( 'Invalid featured media ID.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} else { // obf
			return delete_post_thumbnail( $v_dgiak ); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks whether the template is valid for the given post. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param string          $v_wktej Page template filename. // obf
	 * @param WP_REST_Request $v_dxxgr  Request. // obf
	 * @return true|WP_Error True if template is still valid or if the same as existing value, or a WP_Error if template not supported. // obf
	 */ // obf
	public function check_template( $v_wktej, $v_dxxgr ) { // obf

		if ( ! $v_wktej ) { // obf
			return true; // obf
		} // obf

		if ( $v_dxxgr['id'] ) { // obf
			$v_rwkbs             = get_post( $v_dxxgr['id'] ); // obf
			$v_ixleg = get_page_template_slug( $v_dxxgr['id'] ); // obf
		} else { // obf
			$v_rwkbs             = null; // obf
			$v_ixleg = ''; // obf
		} // obf

		// Always allow for updating a post to the same template, even if that template is no longer supported. // obf
		if ( $v_wktej === $v_ixleg ) { // obf
			return true; // obf
		} // obf

		// If this is a create request, get_post() will return null and wp theme will fallback to the passed post type. // obf
		$v_jxckn = wp_get_theme()->get_page_templates( $v_rwkbs, $v_htpfi->post_type ); // obf

		if ( isset( $v_jxckn[ $v_wktej ] ) ) { // obf
			return true; // obf
		} // obf

		return new WP_Error( // obf
			'rest_invalid_param', // obf
			/* translators: 1: Parameter, 2: List of valid values. */ // obf
			sprintf( __( '%1$v_wzqfz is not one of %2$v_wzqfz.' ), 'template', implode( ', ', array_keys( $v_jxckn ) ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Sets the template for a post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 4.9.0 Added the `$v_fnrfx` parameter. // obf
	 * // obf
	 * @param string $v_wktej Page template filename. // obf
	 * @param int    $v_dgiak  Post ID. // obf
	 * @param bool   $v_fnrfx Whether to validate that the template selected is valid. // obf
	 */ // obf
	public function handle_template( $v_wktej, $v_dgiak, $v_fnrfx = false ) { // obf

		if ( $v_fnrfx && ! array_key_exists( $v_wktej, wp_get_theme()->get_page_templates( get_post( $v_dgiak ) ) ) ) { // obf
			$v_wktej = ''; // obf
		} // obf

		update_post_meta( $v_dgiak, '_wp_page_template', $v_wktej ); // obf
	} // obf

	/** // obf
	 * Updates the post's terms from a REST request. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int             $v_dgiak The post ID to update the terms form. // obf
	 * @param WP_REST_Request $v_dxxgr The request object with post and terms data. // obf
	 * @return null|WP_Error WP_Error on an error assigning any of the terms, otherwise null. // obf
	 */ // obf
	protected function handle_terms( $v_dgiak, $v_dxxgr ) { // obf
		$v_mztid = wp_list_filter( get_object_taxonomies( $v_htpfi->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		foreach ( $v_mztid as $v_ipmyr ) { // obf
			$v_lcktc = ! empty( $v_ipmyr->rest_base ) ? $v_ipmyr->rest_base : $v_ipmyr->name; // obf

			if ( ! isset( $v_dxxgr[ $v_lcktc ] ) ) { // obf
				continue; // obf
			} // obf

			$v_qdisv = wp_set_object_terms( $v_dgiak, $v_dxxgr[ $v_lcktc ], $v_ipmyr->name ); // obf

			if ( is_wp_error( $v_qdisv ) ) { // obf
				return $v_qdisv; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Checks whether current user can assign all terms sent with the current request. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dxxgr The request object with post and terms data. // obf
	 * @return bool Whether the current user can assign the provided terms. // obf
	 */ // obf
	protected function check_assign_terms_permission( $v_dxxgr ) { // obf
		$v_mztid = wp_list_filter( get_object_taxonomies( $v_htpfi->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf
		foreach ( $v_mztid as $v_ipmyr ) { // obf
			$v_lcktc = ! empty( $v_ipmyr->rest_base ) ? $v_ipmyr->rest_base : $v_ipmyr->name; // obf

			if ( ! isset( $v_dxxgr[ $v_lcktc ] ) ) { // obf
				continue; // obf
			} // obf

			foreach ( (array) $v_dxxgr[ $v_lcktc ] as $v_ojsev ) { // obf
				// Invalid terms will be rejected later. // obf
				if ( ! get_term( $v_ojsev, $v_ipmyr->name ) ) { // obf
					continue; // obf
				} // obf

				if ( ! current_user_can( 'assign_term', (int) $v_ojsev ) ) { // obf
					return false; // obf
				} // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if a given post type can be viewed or managed. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post_Type|string $v_tioer Post type name or object. // obf
	 * @return bool Whether the post type is allowed in REST. // obf
	 */ // obf
	protected function check_is_post_type_allowed( $v_tioer ) { // obf
		if ( ! is_object( $v_tioer ) ) { // obf
			$v_tioer = get_post_type_object( $v_tioer ); // obf
		} // obf

		if ( ! empty( $v_tioer ) && ! empty( $v_tioer->show_in_rest ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if a post can be read. // obf
	 * // obf
	 * Correctly handles posts with the inherit status. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post $v_rwkbs Post object. // obf
	 * @return bool Whether the post can be read. // obf
	 */ // obf
	public function check_read_permission( $v_rwkbs ) { // obf
		$v_tioer = get_post_type_object( $v_rwkbs->post_type ); // obf
		if ( ! $v_htpfi->check_is_post_type_allowed( $v_tioer ) ) { // obf
			return false; // obf
		} // obf

		// Is the post readable? // obf
		if ( 'publish' === $v_rwkbs->post_status || current_user_can( 'read_post', $v_rwkbs->ID ) ) { // obf
			return true; // obf
		} // obf

		$v_kbekv = get_post_status_object( $v_rwkbs->post_status ); // obf
		if ( $v_kbekv && $v_kbekv->public ) { // obf
			return true; // obf
		} // obf

		// Can we read the parent if we're inheriting? // obf
		if ( 'inherit' === $v_rwkbs->post_status && $v_rwkbs->post_parent > 0 ) { // obf
			$v_jqhbp = get_post( $v_rwkbs->post_parent ); // obf
			if ( $v_jqhbp ) { // obf
				return $v_htpfi->check_read_permission( $v_jqhbp ); // obf
			} // obf
		} // obf

		/* // obf
		 * If there isn't a parent, but the status is set to inherit, assume // obf
		 * it's published (as per get_post_status()). // obf
		 */ // obf
		if ( 'inherit' === $v_rwkbs->post_status ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Checks if a post can be edited. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post $v_rwkbs Post object. // obf
	 * @return bool Whether the post can be edited. // obf
	 */ // obf
	protected function check_update_permission( $v_rwkbs ) { // obf
		$v_tioer = get_post_type_object( $v_rwkbs->post_type ); // obf

		if ( ! $v_htpfi->check_is_post_type_allowed( $v_tioer ) ) { // obf
			return false; // obf
		} // obf

		return current_user_can( 'edit_post', $v_rwkbs->ID ); // obf
	} // obf

	/** // obf
	 * Checks if a post can be created. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post $v_rwkbs Post object. // obf
	 * @return bool Whether the post can be created. // obf
	 */ // obf
	protected function check_create_permission( $v_rwkbs ) { // obf
		$v_tioer = get_post_type_object( $v_rwkbs->post_type ); // obf

		if ( ! $v_htpfi->check_is_post_type_allowed( $v_tioer ) ) { // obf
			return false; // obf
		} // obf

		return current_user_can( $v_tioer->cap->create_posts ); // obf
	} // obf

	/** // obf
	 * Checks if a post can be deleted. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post $v_rwkbs Post object. // obf
	 * @return bool Whether the post can be deleted. // obf
	 */ // obf
	protected function check_delete_permission( $v_rwkbs ) { // obf
		$v_tioer = get_post_type_object( $v_rwkbs->post_type ); // obf

		if ( ! $v_htpfi->check_is_post_type_allowed( $v_tioer ) ) { // obf
			return false; // obf
		} // obf

		return current_user_can( 'delete_post', $v_rwkbs->ID ); // obf
	} // obf

	/** // obf
	 * Prepares a single post output for response. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_rwkbs` to `$v_iahyu` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @global WP_Post $v_rwkbs Global post object. // obf
	 * // obf
	 * @param WP_Post         $v_iahyu    Post object. // obf
	 * @param WP_REST_Request $v_dxxgr Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_iahyu, $v_dxxgr ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_rwkbs = $v_iahyu; // obf

		$v_rrwzk['post'] = $v_rwkbs; // obf

		setup_postdata( $v_rwkbs ); // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_dxxgr->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
			return apply_filters( "rest_prepare_{$v_htpfi->post_type}", new WP_REST_Response( array() ), $v_rwkbs, $v_dxxgr ); // obf
		} // obf

		$v_dyvvl = $v_htpfi->get_fields_for_response( $v_dxxgr ); // obf

		// Base fields for every post. // obf
		$v_reqkb = array(); // obf

		if ( rest_is_field_included( 'id', $v_dyvvl ) ) { // obf
			$v_reqkb['id'] = $v_rwkbs->ID; // obf
		} // obf

		if ( rest_is_field_included( 'date', $v_dyvvl ) ) { // obf
			$v_reqkb['date'] = $v_htpfi->prepare_date_response( $v_rwkbs->post_date_gmt, $v_rwkbs->post_date ); // obf
		} // obf

		if ( rest_is_field_included( 'date_gmt', $v_dyvvl ) ) { // obf
			/* // obf
			 * For drafts, `post_date_gmt` may not be set, indicating that the date // obf
			 * of the draft should be updated each time it is saved (see #38883). // obf
			 * In this case, shim the value based on the `post_date` field // obf
			 * with the site's timezone offset applied. // obf
			 */ // obf
			if ( '0000-00-00 00:00:00' === $v_rwkbs->post_date_gmt ) { // obf
				$v_ayhse = get_gmt_from_date( $v_rwkbs->post_date ); // obf
			} else { // obf
				$v_ayhse = $v_rwkbs->post_date_gmt; // obf
			} // obf
			$v_reqkb['date_gmt'] = $v_htpfi->prepare_date_response( $v_ayhse ); // obf
		} // obf

		if ( rest_is_field_included( 'guid', $v_dyvvl ) ) { // obf
			$v_reqkb['guid'] = array( // obf
				/** This filter is documented in wp-includes/post-template.php */ // obf
				'rendered' => apply_filters( 'get_the_guid', $v_rwkbs->guid, $v_rwkbs->ID ), // obf
				'raw'      => $v_rwkbs->guid, // obf
			); // obf
		} // obf

		if ( rest_is_field_included( 'modified', $v_dyvvl ) ) { // obf
			$v_reqkb['modified'] = $v_htpfi->prepare_date_response( $v_rwkbs->post_modified_gmt, $v_rwkbs->post_modified ); // obf
		} // obf

		if ( rest_is_field_included( 'modified_gmt', $v_dyvvl ) ) { // obf
			/* // obf
			 * For drafts, `post_modified_gmt` may not be set (see `post_date_gmt` comments // obf
			 * above). In this case, shim the value based on the `post_modified` field // obf
			 * with the site's timezone offset applied. // obf
			 */ // obf
			if ( '0000-00-00 00:00:00' === $v_rwkbs->post_modified_gmt ) { // obf
				$v_lcgry = gmdate( 'Y-m-d H:i:s', strtotime( $v_rwkbs->post_modified ) - (int) ( (float) get_option( 'gmt_offset' ) * HOUR_IN_SECONDS ) ); // obf
			} else { // obf
				$v_lcgry = $v_rwkbs->post_modified_gmt; // obf
			} // obf
			$v_reqkb['modified_gmt'] = $v_htpfi->prepare_date_response( $v_lcgry ); // obf
		} // obf

		if ( rest_is_field_included( 'password', $v_dyvvl ) ) { // obf
			$v_reqkb['password'] = $v_rwkbs->post_password; // obf
		} // obf

		if ( rest_is_field_included( 'slug', $v_dyvvl ) ) { // obf
			$v_reqkb['slug'] = $v_rwkbs->post_name; // obf
		} // obf

		if ( rest_is_field_included( 'status', $v_dyvvl ) ) { // obf
			$v_reqkb['status'] = $v_rwkbs->post_status; // obf
		} // obf

		if ( rest_is_field_included( 'type', $v_dyvvl ) ) { // obf
			$v_reqkb['type'] = $v_rwkbs->post_type; // obf
		} // obf

		if ( rest_is_field_included( 'link', $v_dyvvl ) ) { // obf
			$v_reqkb['link'] = get_permalink( $v_rwkbs->ID ); // obf
		} // obf

		if ( rest_is_field_included( 'title', $v_dyvvl ) ) { // obf
			$v_reqkb['title'] = array(); // obf
		} // obf
		if ( rest_is_field_included( 'title.raw', $v_dyvvl ) ) { // obf
			$v_reqkb['title']['raw'] = $v_rwkbs->post_title; // obf
		} // obf
		if ( rest_is_field_included( 'title.rendered', $v_dyvvl ) ) { // obf
			add_filter( 'protected_title_format', array( $v_htpfi, 'protected_title_format' ) ); // obf
			add_filter( 'private_title_format', array( $v_htpfi, 'protected_title_format' ) ); // obf

			$v_reqkb['title']['rendered'] = get_the_title( $v_rwkbs->ID ); // obf

			remove_filter( 'protected_title_format', array( $v_htpfi, 'protected_title_format' ) ); // obf
			remove_filter( 'private_title_format', array( $v_htpfi, 'protected_title_format' ) ); // obf
		} // obf

		$v_qmyzp = false; // obf

		if ( $v_htpfi->can_access_password_content( $v_rwkbs, $v_dxxgr ) ) { // obf
			$v_htpfi->password_check_passed[ $v_rwkbs->ID ] = true; // obf
			// Allow access to the post, permissions already checked before. // obf
			add_filter( 'post_password_required', array( $v_htpfi, 'check_password_required' ), 10, 2 ); // obf

			$v_qmyzp = true; // obf
		} // obf

		if ( rest_is_field_included( 'content', $v_dyvvl ) ) { // obf
			$v_reqkb['content'] = array(); // obf
		} // obf
		if ( rest_is_field_included( 'content.raw', $v_dyvvl ) ) { // obf
			$v_reqkb['content']['raw'] = $v_rwkbs->post_content; // obf
		} // obf
		if ( rest_is_field_included( 'content.rendered', $v_dyvvl ) ) { // obf
			/** This filter is documented in wp-includes/post-template.php */ // obf
			$v_reqkb['content']['rendered'] = post_password_required( $v_rwkbs ) ? '' : apply_filters( 'the_content', $v_rwkbs->post_content ); // obf
		} // obf
		if ( rest_is_field_included( 'content.protected', $v_dyvvl ) ) { // obf
			$v_reqkb['content']['protected'] = (bool) $v_rwkbs->post_password; // obf
		} // obf
		if ( rest_is_field_included( 'content.block_version', $v_dyvvl ) ) { // obf
			$v_reqkb['content']['block_version'] = block_version( $v_rwkbs->post_content ); // obf
		} // obf

		if ( rest_is_field_included( 'excerpt', $v_dyvvl ) ) { // obf
			if ( isset( $v_dxxgr['excerpt_length'] ) ) { // obf
				$v_uibzb          = $v_dxxgr['excerpt_length']; // obf
				$v_xcxwn = static function () use ( $v_uibzb ) { // obf
					return $v_uibzb; // obf
				}; // obf

				add_filter( // obf
					'excerpt_length', // obf
					$v_xcxwn, // obf
					20 // obf
				); // obf
			} // obf

			/** This filter is documented in wp-includes/post-template.php */ // obf
			$v_uzfgb = apply_filters( 'get_the_excerpt', $v_rwkbs->post_excerpt, $v_rwkbs ); // obf

			/** This filter is documented in wp-includes/post-template.php */ // obf
			$v_uzfgb = apply_filters( 'the_excerpt', $v_uzfgb ); // obf

			$v_reqkb['excerpt'] = array( // obf
				'raw'       => $v_rwkbs->post_excerpt, // obf
				'rendered'  => post_password_required( $v_rwkbs ) ? '' : $v_uzfgb, // obf
				'protected' => (bool) $v_rwkbs->post_password, // obf
			); // obf

			if ( isset( $v_xcxwn ) ) { // obf
				remove_filter( // obf
					'excerpt_length', // obf
					$v_xcxwn, // obf
					20 // obf
				); // obf
			} // obf
		} // obf

		if ( $v_qmyzp ) { // obf
			// Reset filter. // obf
			remove_filter( 'post_password_required', array( $v_htpfi, 'check_password_required' ) ); // obf
		} // obf

		if ( rest_is_field_included( 'author', $v_dyvvl ) ) { // obf
			$v_reqkb['author'] = (int) $v_rwkbs->post_author; // obf
		} // obf

		if ( rest_is_field_included( 'featured_media', $v_dyvvl ) ) { // obf
			$v_reqkb['featured_media'] = (int) get_post_thumbnail_id( $v_rwkbs->ID ); // obf
		} // obf

		if ( rest_is_field_included( 'parent', $v_dyvvl ) ) { // obf
			$v_reqkb['parent'] = (int) $v_rwkbs->post_parent; // obf
		} // obf

		if ( rest_is_field_included( 'menu_order', $v_dyvvl ) ) { // obf
			$v_reqkb['menu_order'] = (int) $v_rwkbs->menu_order; // obf
		} // obf

		if ( rest_is_field_included( 'comment_status', $v_dyvvl ) ) { // obf
			$v_reqkb['comment_status'] = $v_rwkbs->comment_status; // obf
		} // obf

		if ( rest_is_field_included( 'ping_status', $v_dyvvl ) ) { // obf
			$v_reqkb['ping_status'] = $v_rwkbs->ping_status; // obf
		} // obf

		if ( rest_is_field_included( 'sticky', $v_dyvvl ) ) { // obf
			$v_reqkb['sticky'] = is_sticky( $v_rwkbs->ID ); // obf
		} // obf

		if ( rest_is_field_included( 'template', $v_dyvvl ) ) { // obf
			$v_wktej = get_page_template_slug( $v_rwkbs->ID ); // obf
			if ( $v_wktej ) { // obf
				$v_reqkb['template'] = $v_wktej; // obf
			} else { // obf
				$v_reqkb['template'] = ''; // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'format', $v_dyvvl ) ) { // obf
			$v_reqkb['format'] = get_post_format( $v_rwkbs->ID ); // obf

			// Fill in blank post format. // obf
			if ( empty( $v_reqkb['format'] ) ) { // obf
				$v_reqkb['format'] = 'standard'; // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'meta', $v_dyvvl ) ) { // obf
			$v_reqkb['meta'] = $v_htpfi->meta->get_value( $v_rwkbs->ID, $v_dxxgr ); // obf
		} // obf

		$v_mztid = wp_list_filter( get_object_taxonomies( $v_htpfi->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		foreach ( $v_mztid as $v_ipmyr ) { // obf
			$v_lcktc = ! empty( $v_ipmyr->rest_base ) ? $v_ipmyr->rest_base : $v_ipmyr->name; // obf

			if ( rest_is_field_included( $v_lcktc, $v_dyvvl ) ) { // obf
				$v_qdpyt         = get_the_terms( $v_rwkbs, $v_ipmyr->name ); // obf
				$v_reqkb[ $v_lcktc ] = $v_qdpyt ? array_values( wp_list_pluck( $v_qdpyt, 'term_id' ) ) : array(); // obf
			} // obf
		} // obf

		$v_lxfzo = get_post_type_object( $v_rwkbs->post_type ); // obf
		if ( is_post_type_viewable( $v_lxfzo ) && $v_lxfzo->public ) { // obf
			$v_xvfvh = rest_is_field_included( 'permalink_template', $v_dyvvl ); // obf
			$v_nlvqr     = rest_is_field_included( 'generated_slug', $v_dyvvl ); // obf

			if ( $v_xvfvh || $v_nlvqr ) { // obf
				if ( ! function_exists( 'get_sample_permalink' ) ) { // obf
					require_once ABSPATH . 'wp-admin/includes/post.php'; // obf
				} // obf

				$v_bmumi = get_sample_permalink( $v_rwkbs->ID, $v_rwkbs->post_title, '' ); // obf

				if ( $v_xvfvh ) { // obf
					$v_reqkb['permalink_template'] = $v_bmumi[0]; // obf
				} // obf

				if ( $v_nlvqr ) { // obf
					$v_reqkb['generated_slug'] = $v_bmumi[1]; // obf
				} // obf
			} // obf

			if ( rest_is_field_included( 'class_list', $v_dyvvl ) ) { // obf
				$v_reqkb['class_list'] = get_post_class( array(), $v_rwkbs->ID ); // obf
			} // obf
		} // obf

		$v_sxolv = ! empty( $v_dxxgr['context'] ) ? $v_dxxgr['context'] : 'view'; // obf
		$v_reqkb    = $v_htpfi->add_additional_fields_to_object( $v_reqkb, $v_dxxgr ); // obf
		$v_reqkb    = $v_htpfi->filter_response_by_context( $v_reqkb, $v_sxolv ); // obf

		// Wrap the data in a response object. // obf
		$v_xkbfh = rest_ensure_response( $v_reqkb ); // obf

		if ( rest_is_field_included( '_links', $v_dyvvl ) || rest_is_field_included( '_embedded', $v_dyvvl ) ) { // obf
			$v_yrlpl = $v_htpfi->prepare_links( $v_rwkbs ); // obf
			$v_xkbfh->add_links( $v_yrlpl ); // obf

			if ( ! empty( $v_yrlpl['self']['href'] ) ) { // obf
				$v_pulac = $v_htpfi->get_available_actions( $v_rwkbs, $v_dxxgr ); // obf

				$v_mootw = $v_yrlpl['self']['href']; // obf

				foreach ( $v_pulac as $v_dtoqi ) { // obf
					$v_xkbfh->add_link( $v_dtoqi, $v_mootw ); // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the post data for a REST API response. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_htpfi->post_type`, refers to the post type slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_prepare_post` // obf
		 *  - `rest_prepare_page` // obf
		 *  - `rest_prepare_attachment` // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_xkbfh The response object. // obf
		 * @param WP_Post          $v_rwkbs     Post object. // obf
		 * @param WP_REST_Request  $v_dxxgr  Request object. // obf
		 */ // obf
		return apply_filters( "rest_prepare_{$v_htpfi->post_type}", $v_xkbfh, $v_rwkbs, $v_dxxgr ); // obf
	} // obf

	/** // obf
	 * Overwrites the default protected and private title format. // obf
	 * // obf
	 * By default, WordPress will show password protected or private posts with a title of // obf
	 * "Protected: %s" or "Private: %s", as the REST API communicates the status of a post // obf
	 * in a machine-readable format, we remove the prefix. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string Title format. // obf
	 */ // obf
	public function protected_title_format() { // obf
		return '%s'; // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post $v_rwkbs Post object. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_rwkbs ) { // obf
		// Entity meta. // obf
		$v_yrlpl = array( // obf
			'self'       => array( // obf
				'href' => rest_url( rest_get_route_for_post( $v_rwkbs->ID ) ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( rest_get_route_for_post_type_items( $v_htpfi->post_type ) ), // obf
			), // obf
			'about'      => array( // obf
				'href' => rest_url( 'wp/v2/types/' . $v_htpfi->post_type ), // obf
			), // obf
		); // obf

		if ( ( in_array( $v_rwkbs->post_type, array( 'post', 'page' ), true ) || post_type_supports( $v_rwkbs->post_type, 'author' ) ) // obf
			&& ! empty( $v_rwkbs->post_author ) ) { // obf
			$v_yrlpl['author'] = array( // obf
				'href'       => rest_url( 'wp/v2/users/' . $v_rwkbs->post_author ), // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		if ( in_array( $v_rwkbs->post_type, array( 'post', 'page' ), true ) || post_type_supports( $v_rwkbs->post_type, 'comments' ) ) { // obf
			$v_qptrr = rest_url( 'wp/v2/comments' ); // obf
			$v_qptrr = add_query_arg( 'post', $v_rwkbs->ID, $v_qptrr ); // obf

			$v_yrlpl['replies'] = array( // obf
				'href'       => $v_qptrr, // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		if ( in_array( $v_rwkbs->post_type, array( 'post', 'page' ), true ) || post_type_supports( $v_rwkbs->post_type, 'revisions' ) ) { // obf
			$v_ptkqj       = wp_get_latest_revision_id_and_total_count( $v_rwkbs->ID ); // obf
			$v_kdcjt = ! is_wp_error( $v_ptkqj ) ? $v_ptkqj['count'] : 0; // obf
			$v_ruiwl  = sprintf( '/%s/%s/%d/revisions', $v_htpfi->namespace, $v_htpfi->rest_base, $v_rwkbs->ID ); // obf

			$v_yrlpl['version-history'] = array( // obf
				'href'  => rest_url( $v_ruiwl ), // obf
				'count' => $v_kdcjt, // obf
			); // obf

			if ( $v_kdcjt > 0 ) { // obf
				$v_yrlpl['predecessor-version'] = array( // obf
					'href' => rest_url( $v_ruiwl . '/' . $v_ptkqj['latest_id'] ), // obf
					'id'   => $v_ptkqj['latest_id'], // obf
				); // obf
			} // obf
		} // obf

		$v_lxfzo = get_post_type_object( $v_rwkbs->post_type ); // obf

		if ( $v_lxfzo->hierarchical && ! empty( $v_rwkbs->post_parent ) ) { // obf
			$v_yrlpl['up'] = array( // obf
				'href'       => rest_url( rest_get_route_for_post( $v_rwkbs->post_parent ) ), // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		// If we have a featured media, add that. // obf
		$v_ezyiu = get_post_thumbnail_id( $v_rwkbs->ID ); // obf
		if ( $v_ezyiu ) { // obf
			$v_yledn = rest_url( rest_get_route_for_post( $v_ezyiu ) ); // obf

			$v_yrlpl['https://api.w.org/featuredmedia'] = array( // obf
				'href'       => $v_yledn, // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		if ( ! in_array( $v_rwkbs->post_type, array( 'attachment', 'nav_menu_item', 'revision' ), true ) ) { // obf
			$v_yywuk = rest_url( rest_get_route_for_post_type_items( 'attachment' ) ); // obf
			$v_yywuk = add_query_arg( 'parent', $v_rwkbs->ID, $v_yywuk ); // obf

			$v_yrlpl['https://api.w.org/attachment'] = array( // obf
				'href' => $v_yywuk, // obf
			); // obf
		} // obf

		$v_mztid = get_object_taxonomies( $v_rwkbs->post_type ); // obf

		if ( ! empty( $v_mztid ) ) { // obf
			$v_yrlpl['https://api.w.org/term'] = array(); // obf

			foreach ( $v_mztid as $v_ocfjv ) { // obf
				$v_jcrne = rest_get_route_for_taxonomy_items( $v_ocfjv ); // obf

				// Skip taxonomies that are not public. // obf
				if ( empty( $v_jcrne ) ) { // obf
					continue; // obf
				} // obf
				$v_lilaq = add_query_arg( // obf
					'post', // obf
					$v_rwkbs->ID, // obf
					rest_url( $v_jcrne ) // obf
				); // obf

				$v_yrlpl['https://api.w.org/term'][] = array( // obf
					'href'       => $v_lilaq, // obf
					'taxonomy'   => $v_ocfjv, // obf
					'embeddable' => true, // obf
				); // obf
			} // obf
		} // obf

		return $v_yrlpl; // obf
	} // obf

	/** // obf
	 * Gets the link relations available for the post and current user. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @param WP_Post         $v_rwkbs    Post object. // obf
	 * @param WP_REST_Request $v_dxxgr Request object. // obf
	 * @return array List of link relations. // obf
	 */ // obf
	protected function get_available_actions( $v_rwkbs, $v_dxxgr ) { // obf

		if ( 'edit' !== $v_dxxgr['context'] ) { // obf
			return array(); // obf
		} // obf

		$v_hnkhh = array(); // obf

		$v_tioer = get_post_type_object( $v_rwkbs->post_type ); // obf

		if ( 'attachment' !== $v_htpfi->post_type && current_user_can( $v_tioer->cap->publish_posts ) ) { // obf
			$v_hnkhh[] = 'https://api.w.org/action-publish'; // obf
		} // obf

		if ( current_user_can( 'unfiltered_html' ) ) { // obf
			$v_hnkhh[] = 'https://api.w.org/action-unfiltered-html'; // obf
		} // obf

		if ( 'post' === $v_tioer->name ) { // obf
			if ( current_user_can( $v_tioer->cap->edit_others_posts ) && current_user_can( $v_tioer->cap->publish_posts ) ) { // obf
				$v_hnkhh[] = 'https://api.w.org/action-sticky'; // obf
			} // obf
		} // obf

		if ( post_type_supports( $v_tioer->name, 'author' ) ) { // obf
			if ( current_user_can( $v_tioer->cap->edit_others_posts ) ) { // obf
				$v_hnkhh[] = 'https://api.w.org/action-assign-author'; // obf
			} // obf
		} // obf

		$v_mztid = wp_list_filter( get_object_taxonomies( $v_htpfi->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		foreach ( $v_mztid as $v_ocfjv ) { // obf
			$v_twqau   = ! empty( $v_ocfjv->rest_base ) ? $v_ocfjv->rest_base : $v_ocfjv->name; // obf
			$v_ayfyt = is_taxonomy_hierarchical( $v_ocfjv->name ) ? $v_ocfjv->cap->edit_terms : $v_ocfjv->cap->assign_terms; // obf

			if ( current_user_can( $v_ayfyt ) ) { // obf
				$v_hnkhh[] = 'https://api.w.org/action-create-' . $v_twqau; // obf
			} // obf

			if ( current_user_can( $v_ocfjv->cap->assign_terms ) ) { // obf
				$v_hnkhh[] = 'https://api.w.org/action-assign-' . $v_twqau; // obf
			} // obf
		} // obf

		return $v_hnkhh; // obf
	} // obf

	/** // obf
	 * Retrieves the post's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_htpfi->schema ) { // obf
			return $v_htpfi->add_additional_fields_schema( $v_htpfi->schema ); // obf
		} // obf

		$v_jhzqq = array( // obf
			'$v_jhzqq'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => $v_htpfi->post_type, // obf
			'type'       => 'object', // obf
			// Base properties for every Post. // obf
			'properties' => array( // obf
				'date'         => array( // obf
					'description' => __( "The date the post was published, in the site's timezone." ), // obf
					'type'        => array( 'string', 'null' ), // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'date_gmt'     => array( // obf
					'description' => __( 'The date the post was published, as GMT.' ), // obf
					'type'        => array( 'string', 'null' ), // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'guid'         => array( // obf
					'description' => __( 'The globally unique identifier for the post.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'GUID for the post, as it exists in the database.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'edit' ), // obf
							'readonly'    => true, // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'GUID for the post, transformed for display.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'view', 'edit' ), // obf
							'readonly'    => true, // obf
						), // obf
					), // obf
				), // obf
				'id'           => array( // obf
					'description' => __( 'Unique identifier for the post.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'link'         => array( // obf
					'description' => __( 'URL to the post.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'modified'     => array( // obf
					'description' => __( "The date the post was last modified, in the site's timezone." ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'modified_gmt' => array( // obf
					'description' => __( 'The date the post was last modified, as GMT.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'slug'         => array( // obf
					'description' => __( 'An alphanumeric identifier for the post unique to its type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => array( $v_htpfi, 'sanitize_slug' ), // obf
					), // obf
				), // obf
				'status'       => array( // obf
					'description' => __( 'A named status for the post.' ), // obf
					'type'        => 'string', // obf
					'enum'        => array_keys( get_post_stati( array( 'internal' => false ) ) ), // obf
					'context'     => array( 'view', 'edit' ), // obf
					'arg_options' => array( // obf
						'validate_callback' => array( $v_htpfi, 'check_status' ), // obf
					), // obf
				), // obf
				'type'         => array( // obf
					'description' => __( 'Type of post.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'password'     => array( // obf
					'description' => __( 'A password to protect access to the content and excerpt.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
				), // obf
			), // obf
		); // obf

		$v_lxfzo = get_post_type_object( $v_htpfi->post_type ); // obf
		if ( is_post_type_viewable( $v_lxfzo ) && $v_lxfzo->public ) { // obf
			$v_jhzqq['properties']['permalink_template'] = array( // obf
				'description' => __( 'Permalink template for the post.' ), // obf
				'type'        => 'string', // obf
				'context'     => array( 'edit' ), // obf
				'readonly'    => true, // obf
			); // obf

			$v_jhzqq['properties']['generated_slug'] = array( // obf
				'description' => __( 'Slug automatically generated from the post title.' ), // obf
				'type'        => 'string', // obf
				'context'     => array( 'edit' ), // obf
				'readonly'    => true, // obf
			); // obf

			$v_jhzqq['properties']['class_list'] = array( // obf
				'description' => __( 'An array of the class names for the post container element.' ), // obf
				'type'        => 'array', // obf
				'context'     => array( 'view', 'edit' ), // obf
				'readonly'    => true, // obf
				'items'       => array( // obf
					'type' => 'string', // obf
				), // obf
			); // obf
		} // obf

		if ( $v_lxfzo->hierarchical ) { // obf
			$v_jhzqq['properties']['parent'] = array( // obf
				'description' => __( 'The ID for the parent of the post.' ), // obf
				'type'        => 'integer', // obf
				'context'     => array( 'view', 'edit' ), // obf
			); // obf
		} // obf

		$v_coivn = array( // obf
			'title', // obf
			'editor', // obf
			'author', // obf
			'excerpt', // obf
			'thumbnail', // obf
			'comments', // obf
			'revisions', // obf
			'page-attributes', // obf
			'post-formats', // obf
			'custom-fields', // obf
		); // obf
		$v_rsfvs        = array( // obf
			'post'       => array( // obf
				'title', // obf
				'editor', // obf
				'author', // obf
				'excerpt', // obf
				'thumbnail', // obf
				'comments', // obf
				'revisions', // obf
				'post-formats', // obf
				'custom-fields', // obf
			), // obf
			'page'       => array( // obf
				'title', // obf
				'editor', // obf
				'author', // obf
				'excerpt', // obf
				'thumbnail', // obf
				'comments', // obf
				'revisions', // obf
				'page-attributes', // obf
				'custom-fields', // obf
			), // obf
			'attachment' => array( // obf
				'title', // obf
				'author', // obf
				'comments', // obf
				'revisions', // obf
				'custom-fields', // obf
				'thumbnail', // obf
			), // obf
		); // obf

		foreach ( $v_coivn as $v_efafk ) { // obf
			if ( isset( $v_rsfvs[ $v_htpfi->post_type ] ) && ! in_array( $v_efafk, $v_rsfvs[ $v_htpfi->post_type ], true ) ) { // obf
				continue; // obf
			} elseif ( ! isset( $v_rsfvs[ $v_htpfi->post_type ] ) && ! post_type_supports( $v_htpfi->post_type, $v_efafk ) ) { // obf
				continue; // obf
			} // obf

			switch ( $v_efafk ) { // obf

				case 'title': // obf
					$v_jhzqq['properties']['title'] = array( // obf
						'description' => __( 'The title for the post.' ), // obf
						'type'        => 'object', // obf
						'context'     => array( 'view', 'edit', 'embed' ), // obf
						'arg_options' => array( // obf
							'sanitize_callback' => null, // Note: sanitization implemented in self::prepare_item_for_database(). // obf
							'validate_callback' => null, // Note: validation implemented in self::prepare_item_for_database(). // obf
						), // obf
						'properties'  => array( // obf
							'raw'      => array( // obf
								'description' => __( 'Title for the post, as it exists in the database.' ), // obf
								'type'        => 'string', // obf
								'context'     => array( 'edit' ), // obf
							), // obf
							'rendered' => array( // obf
								'description' => __( 'HTML title for the post, transformed for display.' ), // obf
								'type'        => 'string', // obf
								'context'     => array( 'view', 'edit', 'embed' ), // obf
								'readonly'    => true, // obf
							), // obf
						), // obf
					); // obf
					break; // obf

				case 'editor': // obf
					$v_jhzqq['properties']['content'] = array( // obf
						'description' => __( 'The content for the post.' ), // obf
						'type'        => 'object', // obf
						'context'     => array( 'view', 'edit' ), // obf
						'arg_options' => array( // obf
							'sanitize_callback' => null, // Note: sanitization implemented in self::prepare_item_for_database(). // obf
							'validate_callback' => null, // Note: validation implemented in self::prepare_item_for_database(). // obf
						), // obf
						'properties'  => array( // obf
							'raw'           => array( // obf
								'description' => __( 'Content for the post, as it exists in the database.' ), // obf
								'type'        => 'string', // obf
								'context'     => array( 'edit' ), // obf
							), // obf
							'rendered'      => array( // obf
								'description' => __( 'HTML content for the post, transformed for display.' ), // obf
								'type'        => 'string', // obf
								'context'     => array( 'view', 'edit' ), // obf
								'readonly'    => true, // obf
							), // obf
							'block_version' => array( // obf
								'description' => __( 'Version of the content block format used by the post.' ), // obf
								'type'        => 'integer', // obf
								'context'     => array( 'edit' ), // obf
								'readonly'    => true, // obf
							), // obf
							'protected'     => array( // obf
								'description' => __( 'Whether the content is protected with a password.' ), // obf
								'type'        => 'boolean', // obf
								'context'     => array( 'view', 'edit', 'embed' ), // obf
								'readonly'    => true, // obf
							), // obf
						), // obf
					); // obf
					break; // obf

				case 'author': // obf
					$v_jhzqq['properties']['author'] = array( // obf
						'description' => __( 'The ID for the author of the post.' ), // obf
						'type'        => 'integer', // obf
						'context'     => array( 'view', 'edit', 'embed' ), // obf
					); // obf
					break; // obf

				case 'excerpt': // obf
					$v_jhzqq['properties']['excerpt'] = array( // obf
						'description' => __( 'The excerpt for the post.' ), // obf
						'type'        => 'object', // obf
						'context'     => array( 'view', 'edit', 'embed' ), // obf
						'arg_options' => array( // obf
							'sanitize_callback' => null, // Note: sanitization implemented in self::prepare_item_for_database(). // obf
							'validate_callback' => null, // Note: validation implemented in self::prepare_item_for_database(). // obf
						), // obf
						'properties'  => array( // obf
							'raw'       => array( // obf
								'description' => __( 'Excerpt for the post, as it exists in the database.' ), // obf
								'type'        => 'string', // obf
								'context'     => array( 'edit' ), // obf
							), // obf
							'rendered'  => array( // obf
								'description' => __( 'HTML excerpt for the post, transformed for display.' ), // obf
								'type'        => 'string', // obf
								'context'     => array( 'view', 'edit', 'embed' ), // obf
								'readonly'    => true, // obf
							), // obf
							'protected' => array( // obf
								'description' => __( 'Whether the excerpt is protected with a password.' ), // obf
								'type'        => 'boolean', // obf
								'context'     => array( 'view', 'edit', 'embed' ), // obf
								'readonly'    => true, // obf
							), // obf
						), // obf
					); // obf
					break; // obf

				case 'thumbnail': // obf
					$v_jhzqq['properties']['featured_media'] = array( // obf
						'description' => __( 'The ID of the featured media for the post.' ), // obf
						'type'        => 'integer', // obf
						'context'     => array( 'view', 'edit', 'embed' ), // obf
					); // obf
					break; // obf

				case 'comments': // obf
					$v_jhzqq['properties']['comment_status'] = array( // obf
						'description' => __( 'Whether or not comments are open on the post.' ), // obf
						'type'        => 'string', // obf
						'enum'        => array( 'open', 'closed' ), // obf
						'context'     => array( 'view', 'edit' ), // obf
					); // obf
					$v_jhzqq['properties']['ping_status']    = array( // obf
						'description' => __( 'Whether or not the post can be pinged.' ), // obf
						'type'        => 'string', // obf
						'enum'        => array( 'open', 'closed' ), // obf
						'context'     => array( 'view', 'edit' ), // obf
					); // obf
					break; // obf

				case 'page-attributes': // obf
					$v_jhzqq['properties']['menu_order'] = array( // obf
						'description' => __( 'The order of the post in relation to other posts.' ), // obf
						'type'        => 'integer', // obf
						'context'     => array( 'view', 'edit' ), // obf
					); // obf
					break; // obf

				case 'post-formats': // obf
					// Get the native post formats and remove the array keys. // obf
					$v_qajij = array_values( get_post_format_slugs() ); // obf

					$v_jhzqq['properties']['format'] = array( // obf
						'description' => __( 'The format for the post.' ), // obf
						'type'        => 'string', // obf
						'enum'        => $v_qajij, // obf
						'context'     => array( 'view', 'edit' ), // obf
					); // obf
					break; // obf

				case 'custom-fields': // obf
					$v_jhzqq['properties']['meta'] = $v_htpfi->meta->get_field_schema(); // obf
					break; // obf

			} // obf
		} // obf

		if ( 'post' === $v_htpfi->post_type ) { // obf
			$v_jhzqq['properties']['sticky'] = array( // obf
				'description' => __( 'Whether or not the post should be treated as sticky.' ), // obf
				'type'        => 'boolean', // obf
				'context'     => array( 'view', 'edit' ), // obf
			); // obf
		} // obf

		$v_jhzqq['properties']['template'] = array( // obf
			'description' => __( 'The theme file to use to display the post.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'view', 'edit' ), // obf
			'arg_options' => array( // obf
				'validate_callback' => array( $v_htpfi, 'check_template' ), // obf
			), // obf
		); // obf

		$v_mztid = wp_list_filter( get_object_taxonomies( $v_htpfi->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		foreach ( $v_mztid as $v_ipmyr ) { // obf
			$v_lcktc = ! empty( $v_ipmyr->rest_base ) ? $v_ipmyr->rest_base : $v_ipmyr->name; // obf

			if ( array_key_exists( $v_lcktc, $v_jhzqq['properties'] ) ) { // obf
				$v_jmlqy = ! empty( $v_ipmyr->rest_base ) ? 'rest_base' : 'name'; // obf
				_doing_it_wrong( // obf
					'register_taxonomy', // obf
					sprintf( // obf
						/* translators: 1: The taxonomy name, 2: The property name, either 'rest_base' or 'name', 3: The conflicting value. */ // obf
						__( 'The "%1$v_wzqfz" taxonomy "%2$v_wzqfz" property (%3$v_wzqfz) conflicts with an existing property on the REST API Posts Controller. Specify a custom "rest_base" when registering the taxonomy to avoid this error.' ), // obf
						$v_ipmyr->name, // obf
						$v_jmlqy, // obf
						$v_lcktc // obf
					), // obf
					'5.4.0' // obf
				); // obf
			} // obf

			$v_jhzqq['properties'][ $v_lcktc ] = array( // obf
				/* translators: %s: Taxonomy name. */ // obf
				'description' => sprintf( __( 'The terms assigned to the post in the %s taxonomy.' ), $v_ipmyr->name ), // obf
				'type'        => 'array', // obf
				'items'       => array( // obf
					'type' => 'integer', // obf
				), // obf
				'context'     => array( 'view', 'edit' ), // obf
			); // obf
		} // obf

		$v_yqxgh = $v_htpfi->get_schema_links(); // obf

		if ( $v_yqxgh ) { // obf
			$v_jhzqq['links'] = $v_yqxgh; // obf
		} // obf

		// Take a snapshot of which fields are in the schema pre-filtering. // obf
		$v_syamj = array_keys( $v_jhzqq['properties'] ); // obf

		/** // obf
		 * Filters the post's schema. // obf
		 * // obf
		 * The dynamic portion of the filter, `$v_htpfi->post_type`, refers to the // obf
		 * post type slug for the controller. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_post_item_schema` // obf
		 *  - `rest_page_item_schema` // obf
		 *  - `rest_attachment_item_schema` // obf
		 * // obf
		 * @since 5.4.0 // obf
		 * // obf
		 * @param array $v_jhzqq Item schema data. // obf
		 */ // obf
		$v_jhzqq = apply_filters( "rest_{$v_htpfi->post_type}_item_schema", $v_jhzqq ); // obf

		// Emit a _doing_it_wrong warning if user tries to add new properties using this filter. // obf
		$v_mevve = array_diff( array_keys( $v_jhzqq['properties'] ), $v_syamj ); // obf
		if ( count( $v_mevve ) > 0 ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: register_rest_field */ // obf
					__( 'Please use %s to add new schema properties.' ), // obf
					'register_rest_field' // obf
				), // obf
				'5.4.0' // obf
			); // obf
		} // obf

		$v_htpfi->schema = $v_jhzqq; // obf

		return $v_htpfi->add_additional_fields_schema( $v_htpfi->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves Link Description Objects that should be added to the Schema for the posts collection. // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_schema_links() { // obf

		$v_xpahd = rest_url( "{$v_htpfi->namespace}/{$v_htpfi->rest_base}/{id}" ); // obf

		$v_yrlpl = array(); // obf

		if ( 'attachment' !== $v_htpfi->post_type ) { // obf
			$v_yrlpl[] = array( // obf
				'rel'          => 'https://api.w.org/action-publish', // obf
				'title'        => __( 'The current user can publish this post.' ), // obf
				'href'         => $v_xpahd, // obf
				'targetSchema' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'status' => array( // obf
							'type' => 'string', // obf
							'enum' => array( 'publish', 'future' ), // obf
						), // obf
					), // obf
				), // obf
			); // obf
		} // obf

		$v_yrlpl[] = array( // obf
			'rel'          => 'https://api.w.org/action-unfiltered-html', // obf
			'title'        => __( 'The current user can post unfiltered HTML markup and JavaScript.' ), // obf
			'href'         => $v_xpahd, // obf
			'targetSchema' => array( // obf
				'type'       => 'object', // obf
				'properties' => array( // obf
					'content' => array( // obf
						'raw' => array( // obf
							'type' => 'string', // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		if ( 'post' === $v_htpfi->post_type ) { // obf
			$v_yrlpl[] = array( // obf
				'rel'          => 'https://api.w.org/action-sticky', // obf
				'title'        => __( 'The current user can sticky this post.' ), // obf
				'href'         => $v_xpahd, // obf
				'targetSchema' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'sticky' => array( // obf
							'type' => 'boolean', // obf
						), // obf
					), // obf
				), // obf
			); // obf
		} // obf

		if ( post_type_supports( $v_htpfi->post_type, 'author' ) ) { // obf
			$v_yrlpl[] = array( // obf
				'rel'          => 'https://api.w.org/action-assign-author', // obf
				'title'        => __( 'The current user can change the author on this post.' ), // obf
				'href'         => $v_xpahd, // obf
				'targetSchema' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						'author' => array( // obf
							'type' => 'integer', // obf
						), // obf
					), // obf
				), // obf
			); // obf
		} // obf

		$v_mztid = wp_list_filter( get_object_taxonomies( $v_htpfi->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		foreach ( $v_mztid as $v_ocfjv ) { // obf
			$v_twqau = ! empty( $v_ocfjv->rest_base ) ? $v_ocfjv->rest_base : $v_ocfjv->name; // obf

			/* translators: %s: Taxonomy name. */ // obf
			$v_notqi = sprintf( __( 'The current user can assign terms in the %s taxonomy.' ), $v_ocfjv->name ); // obf
			/* translators: %s: Taxonomy name. */ // obf
			$v_byrfj = sprintf( __( 'The current user can create terms in the %s taxonomy.' ), $v_ocfjv->name ); // obf

			$v_yrlpl[] = array( // obf
				'rel'          => 'https://api.w.org/action-assign-' . $v_twqau, // obf
				'title'        => $v_notqi, // obf
				'href'         => $v_xpahd, // obf
				'targetSchema' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						$v_twqau => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'integer', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			); // obf

			$v_yrlpl[] = array( // obf
				'rel'          => 'https://api.w.org/action-create-' . $v_twqau, // obf
				'title'        => $v_byrfj, // obf
				'href'         => $v_xpahd, // obf
				'targetSchema' => array( // obf
					'type'       => 'object', // obf
					'properties' => array( // obf
						$v_twqau => array( // obf
							'type'  => 'array', // obf
							'items' => array( // obf
								'type' => 'integer', // obf
							), // obf
						), // obf
					), // obf
				), // obf
			); // obf
		} // obf

		return $v_yrlpl; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the posts collection. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.4.0 The `tax_relation` query parameter was added. // obf
	 * @since 5.7.0 The `modified_after` and `modified_before` query parameters were added. // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_lluvx = parent::get_collection_params(); // obf

		$v_lluvx['context']['default'] = 'view'; // obf

		$v_lluvx['after'] = array( // obf
			'description' => __( 'Limit response to posts published after a given ISO8601 compliant date.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'date-time', // obf
		); // obf

		$v_lluvx['modified_after'] = array( // obf
			'description' => __( 'Limit response to posts modified after a given ISO8601 compliant date.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'date-time', // obf
		); // obf

		if ( post_type_supports( $v_htpfi->post_type, 'author' ) ) { // obf
			$v_lluvx['author']         = array( // obf
				'description' => __( 'Limit result set to posts assigned to specific authors.' ), // obf
				'type'        => 'array', // obf
				'items'       => array( // obf
					'type' => 'integer', // obf
				), // obf
				'default'     => array(), // obf
			); // obf
			$v_lluvx['author_exclude'] = array( // obf
				'description' => __( 'Ensure result set excludes posts assigned to specific authors.' ), // obf
				'type'        => 'array', // obf
				'items'       => array( // obf
					'type' => 'integer', // obf
				), // obf
				'default'     => array(), // obf
			); // obf
		} // obf

		$v_lluvx['before'] = array( // obf
			'description' => __( 'Limit response to posts published before a given ISO8601 compliant date.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'date-time', // obf
		); // obf

		$v_lluvx['modified_before'] = array( // obf
			'description' => __( 'Limit response to posts modified before a given ISO8601 compliant date.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'date-time', // obf
		); // obf

		$v_lluvx['exclude'] = array( // obf
			'description' => __( 'Ensure result set excludes specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_lluvx['include'] = array( // obf
			'description' => __( 'Limit result set to specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		if ( 'page' === $v_htpfi->post_type || post_type_supports( $v_htpfi->post_type, 'page-attributes' ) ) { // obf
			$v_lluvx['menu_order'] = array( // obf
				'description' => __( 'Limit result set to posts with a specific menu_order value.' ), // obf
				'type'        => 'integer', // obf
			); // obf
		} // obf

		$v_lluvx['search_semantics'] = array( // obf
			'description' => __( 'How to interpret the search input.' ), // obf
			'type'        => 'string', // obf
			'enum'        => array( 'exact' ), // obf
		); // obf

		$v_lluvx['offset'] = array( // obf
			'description' => __( 'Offset the result set by a specific number of items.' ), // obf
			'type'        => 'integer', // obf
		); // obf

		$v_lluvx['order'] = array( // obf
			'description' => __( 'Order sort attribute ascending or descending.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'desc', // obf
			'enum'        => array( 'asc', 'desc' ), // obf
		); // obf

		$v_lluvx['orderby'] = array( // obf
			'description' => __( 'Sort collection by post attribute.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'date', // obf
			'enum'        => array( // obf
				'author', // obf
				'date', // obf
				'id', // obf
				'include', // obf
				'modified', // obf
				'parent', // obf
				'relevance', // obf
				'slug', // obf
				'include_slugs', // obf
				'title', // obf
			), // obf
		); // obf

		if ( 'page' === $v_htpfi->post_type || post_type_supports( $v_htpfi->post_type, 'page-attributes' ) ) { // obf
			$v_lluvx['orderby']['enum'][] = 'menu_order'; // obf
		} // obf

		$v_tioer = get_post_type_object( $v_htpfi->post_type ); // obf

		if ( $v_tioer->hierarchical || 'attachment' === $v_htpfi->post_type ) { // obf
			$v_lluvx['parent']         = array( // obf
				'description' => __( 'Limit result set to items with particular parent IDs.' ), // obf
				'type'        => 'array', // obf
				'items'       => array( // obf
					'type' => 'integer', // obf
				), // obf
				'default'     => array(), // obf
			); // obf
			$v_lluvx['parent_exclude'] = array( // obf
				'description' => __( 'Limit result set to all items except those of a particular parent ID.' ), // obf
				'type'        => 'array', // obf
				'items'       => array( // obf
					'type' => 'integer', // obf
				), // obf
				'default'     => array(), // obf
			); // obf
		} // obf

		$v_lluvx['search_columns'] = array( // obf
			'default'     => array(), // obf
			'description' => __( 'Array of column names to be searched.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'enum' => array( 'post_title', 'post_content', 'post_excerpt' ), // obf
				'type' => 'string', // obf
			), // obf
		); // obf

		$v_lluvx['slug'] = array( // obf
			'description' => __( 'Limit result set to posts with one or more specific slugs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
		); // obf

		$v_lluvx['status'] = array( // obf
			'default'           => 'publish', // obf
			'description'       => __( 'Limit result set to posts assigned one or more statuses.' ), // obf
			'type'              => 'array', // obf
			'items'             => array( // obf
				'enum' => array_merge( array_keys( get_post_stati() ), array( 'any' ) ), // obf
				'type' => 'string', // obf
			), // obf
			'sanitize_callback' => array( $v_htpfi, 'sanitize_post_statuses' ), // obf
		); // obf

		$v_lluvx = $v_htpfi->prepare_taxonomy_limit_schema( $v_lluvx ); // obf

		if ( 'post' === $v_htpfi->post_type ) { // obf
			$v_lluvx['sticky'] = array( // obf
				'description' => __( 'Limit result set to items that are sticky.' ), // obf
				'type'        => 'boolean', // obf
			); // obf

			$v_lluvx['ignore_sticky'] = array( // obf
				'description' => __( 'Whether to ignore sticky posts or not.' ), // obf
				'type'        => 'boolean', // obf
				'default'     => true, // obf
			); // obf
		} // obf

		if ( post_type_supports( $v_htpfi->post_type, 'post-formats' ) ) { // obf
			$v_lluvx['format'] = array( // obf
				'description' => __( 'Limit result set to items assigned one or more given formats.' ), // obf
				'type'        => 'array', // obf
				'uniqueItems' => true, // obf
				'items'       => array( // obf
					'enum' => array_values( get_post_format_slugs() ), // obf
					'type' => 'string', // obf
				), // obf
			); // obf
		} // obf

		/** // obf
		 * Filters collection parameters for the posts controller. // obf
		 * // obf
		 * The dynamic part of the filter `$v_htpfi->post_type` refers to the post // obf
		 * type slug for the controller. // obf
		 * // obf
		 * This filter registers the collection parameter, but does not map the // obf
		 * collection parameter to an internal WP_Query parameter. Use the // obf
		 * `rest_{$v_htpfi->post_type}_query` filter to set WP_Query parameters. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array        $v_lluvx JSON Schema-formatted collection parameters. // obf
		 * @param WP_Post_Type $v_tioer    Post type object. // obf
		 */ // obf
		return apply_filters( "rest_{$v_htpfi->post_type}_collection_params", $v_lluvx, $v_tioer ); // obf
	} // obf

	/** // obf
	 * Sanitizes and validates the list of post statuses, including whether the // obf
	 * user can query private statuses. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string|array    $v_wmyxe  One or more post statuses. // obf
	 * @param WP_REST_Request $v_dxxgr   Full details about the request. // obf
	 * @param string          $v_qdxsw Additional parameter to pass to validation. // obf
	 * @return array|WP_Error A list of valid statuses, otherwise WP_Error object. // obf
	 */ // obf
	public function sanitize_post_statuses( $v_wmyxe, $v_dxxgr, $v_qdxsw ) { // obf
		$v_wmyxe = wp_parse_slug_list( $v_wmyxe ); // obf

		// The default status is different in WP_REST_Attachments_Controller. // obf
		$v_wvrbl     = $v_dxxgr->get_attributes(); // obf
		$v_ryhul = $v_wvrbl['args']['status']['default']; // obf

		foreach ( $v_wmyxe as $v_racpq ) { // obf
			if ( $v_racpq === $v_ryhul ) { // obf
				continue; // obf
			} // obf

			$v_lxfzo = get_post_type_object( $v_htpfi->post_type ); // obf

			if ( current_user_can( $v_lxfzo->cap->edit_posts ) || 'private' === $v_racpq && current_user_can( $v_lxfzo->cap->read_private_posts ) ) { // obf
				$v_qdisv = rest_validate_request_arg( $v_racpq, $v_dxxgr, $v_qdxsw ); // obf
				if ( is_wp_error( $v_qdisv ) ) { // obf
					return $v_qdisv; // obf
				} // obf
			} else { // obf
				return new WP_Error( // obf
					'rest_forbidden_status', // obf
					__( 'Status is forbidden.' ), // obf
					array( 'status' => rest_authorization_required_code() ) // obf
				); // obf
			} // obf
		} // obf

		return $v_wmyxe; // obf
	} // obf

	/** // obf
	 * Prepares the 'tax_query' for a collection of posts. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param array           $v_rupti    WP_Query arguments. // obf
	 * @param WP_REST_Request $v_dxxgr Full details about the request. // obf
	 * @return array Updated query arguments. // obf
	 */ // obf
	private function prepare_tax_query( array $v_rupti, WP_REST_Request $v_dxxgr ) { // obf
		$v_bnpfu = $v_dxxgr['tax_relation']; // obf

		if ( $v_bnpfu ) { // obf
			$v_rupti['tax_query'] = array( 'relation' => $v_bnpfu ); // obf
		} // obf

		$v_mztid = wp_list_filter( // obf
			get_object_taxonomies( $v_htpfi->post_type, 'objects' ), // obf
			array( 'show_in_rest' => true ) // obf
		); // obf

		foreach ( $v_mztid as $v_ipmyr ) { // obf
			$v_lcktc = ! empty( $v_ipmyr->rest_base ) ? $v_ipmyr->rest_base : $v_ipmyr->name; // obf

			$v_ccomp = $v_dxxgr[ $v_lcktc ]; // obf
			$v_zdscf = $v_dxxgr[ $v_lcktc . '_exclude' ]; // obf

			if ( $v_ccomp ) { // obf
				$v_qdpyt            = array(); // obf
				$v_iqekc = false; // obf
				$v_injnx         = 'IN'; // obf

				if ( rest_is_array( $v_ccomp ) ) { // obf
					$v_qdpyt = $v_ccomp; // obf
				} elseif ( rest_is_object( $v_ccomp ) ) { // obf
					$v_qdpyt            = empty( $v_ccomp['terms'] ) ? array() : $v_ccomp['terms']; // obf
					$v_iqekc = ! empty( $v_ccomp['include_children'] ); // obf

					if ( isset( $v_ccomp['operator'] ) && 'AND' === $v_ccomp['operator'] ) { // obf
						$v_injnx = 'AND'; // obf
					} // obf
				} // obf

				if ( $v_qdpyt ) { // obf
					$v_rupti['tax_query'][] = array( // obf
						'taxonomy'         => $v_ipmyr->name, // obf
						'field'            => 'term_id', // obf
						'terms'            => $v_qdpyt, // obf
						'include_children' => $v_iqekc, // obf
						'operator'         => $v_injnx, // obf
					); // obf
				} // obf
			} // obf

			if ( $v_zdscf ) { // obf
				$v_qdpyt            = array(); // obf
				$v_iqekc = false; // obf

				if ( rest_is_array( $v_zdscf ) ) { // obf
					$v_qdpyt = $v_zdscf; // obf
				} elseif ( rest_is_object( $v_zdscf ) ) { // obf
					$v_qdpyt            = empty( $v_zdscf['terms'] ) ? array() : $v_zdscf['terms']; // obf
					$v_iqekc = ! empty( $v_zdscf['include_children'] ); // obf
				} // obf

				if ( $v_qdpyt ) { // obf
					$v_rupti['tax_query'][] = array( // obf
						'taxonomy'         => $v_ipmyr->name, // obf
						'field'            => 'term_id', // obf
						'terms'            => $v_qdpyt, // obf
						'include_children' => $v_iqekc, // obf
						'operator'         => 'NOT IN', // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_rupti; // obf
	} // obf

	/** // obf
	 * Prepares the collection schema for including and excluding items by terms. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param array $v_lluvx Collection schema. // obf
	 * @return array Updated schema. // obf
	 */ // obf
	private function prepare_taxonomy_limit_schema( array $v_lluvx ) { // obf
		$v_mztid = wp_list_filter( get_object_taxonomies( $v_htpfi->post_type, 'objects' ), array( 'show_in_rest' => true ) ); // obf

		if ( ! $v_mztid ) { // obf
			return $v_lluvx; // obf
		} // obf

		$v_lluvx['tax_relation'] = array( // obf
			'description' => __( 'Limit result set based on relationship between multiple taxonomies.' ), // obf
			'type'        => 'string', // obf
			'enum'        => array( 'AND', 'OR' ), // obf
		); // obf

		$v_ppqht = array( // obf
			'type'  => array( 'object', 'array' ), // obf
			'oneOf' => array( // obf
				array( // obf
					'title'       => __( 'Term ID List' ), // obf
					'description' => __( 'Match terms with the listed IDs.' ), // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type' => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'title'                => __( 'Term ID Taxonomy Query' ), // obf
					'description'          => __( 'Perform an advanced term query.' ), // obf
					'type'                 => 'object', // obf
					'properties'           => array( // obf
						'terms'            => array( // obf
							'description' => __( 'Term IDs.' ), // obf
							'type'        => 'array', // obf
							'items'       => array( // obf
								'type' => 'integer', // obf
							), // obf
							'default'     => array(), // obf
						), // obf
						'include_children' => array( // obf
							'description' => __( 'Whether to include child terms in the terms limiting the result set.' ), // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
						), // obf
					), // obf
					'additionalProperties' => false, // obf
				), // obf
			), // obf
		); // obf

		$v_gnhwz = array_merge( // obf
			array( // obf
				/* translators: %s: Taxonomy name. */ // obf
				'description' => __( 'Limit result set to items with specific terms assigned in the %s taxonomy.' ), // obf
			), // obf
			$v_ppqht // obf
		); // obf
		// 'operator' is supported only for 'include' queries. // obf
		$v_gnhwz['oneOf'][1]['properties']['operator'] = array( // obf
			'description' => __( 'Whether items must be assigned all or any of the specified terms.' ), // obf
			'type'        => 'string', // obf
			'enum'        => array( 'AND', 'OR' ), // obf
			'default'     => 'OR', // obf
		); // obf

		$v_qtozb = array_merge( // obf
			array( // obf
				/* translators: %s: Taxonomy name. */ // obf
				'description' => __( 'Limit result set to items except those with specific terms assigned in the %s taxonomy.' ), // obf
			), // obf
			$v_ppqht // obf
		); // obf

		foreach ( $v_mztid as $v_ipmyr ) { // obf
			$v_lcktc         = ! empty( $v_ipmyr->rest_base ) ? $v_ipmyr->rest_base : $v_ipmyr->name; // obf
			$v_fbsus = $v_lcktc . '_exclude'; // obf

			$v_lluvx[ $v_lcktc ]                = $v_gnhwz; // obf
			$v_lluvx[ $v_lcktc ]['description'] = sprintf( $v_lluvx[ $v_lcktc ]['description'], $v_lcktc ); // obf

			$v_lluvx[ $v_fbsus ]                = $v_qtozb; // obf
			$v_lluvx[ $v_fbsus ]['description'] = sprintf( $v_lluvx[ $v_fbsus ]['description'], $v_lcktc ); // obf

			if ( ! $v_ipmyr->hierarchical ) { // obf
				unset( $v_lluvx[ $v_lcktc ]['oneOf'][1]['properties']['include_children'] ); // obf
				unset( $v_lluvx[ $v_fbsus ]['oneOf'][1]['properties']['include_children'] ); // obf
			} // obf
		} // obf

		return $v_lluvx; // obf
	} // obf
} // obf