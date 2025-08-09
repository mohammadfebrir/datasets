

<?php // obf
/** // obf
 * REST API: WP_REST_Comments_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core controller used to access comments via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Comments_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Instance of a comment meta fields object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var WP_REST_Comment_Meta_Fields // obf
	 */ // obf
	protected $v_vtsdj; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_dthcu->namespace = 'wp/v2'; // obf
		$v_dthcu->rest_base = 'comments'; // obf

		$v_dthcu->meta = new WP_REST_Comment_Meta_Fields(); // obf
	} // obf

	/** // obf
	 * Registers the routes for comments. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_dthcu->namespace, // obf
			'/' . $v_dthcu->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_dthcu, 'get_items' ), // obf
					'permission_callback' => array( $v_dthcu, 'get_items_permissions_check' ), // obf
					'args'                => $v_dthcu->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_dthcu, 'create_item' ), // obf
					'permission_callback' => array( $v_dthcu, 'create_item_permissions_check' ), // obf
					'args'                => $v_dthcu->get_endpoint_args_for_item_schema( WP_REST_Server::CREATABLE ), // obf
				), // obf
				'schema' => array( $v_dthcu, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_dthcu->namespace, // obf
			'/' . $v_dthcu->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'   => array( // obf
					'id' => array( // obf
						'description' => __( 'Unique identifier for the comment.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_dthcu, 'get_item' ), // obf
					'permission_callback' => array( $v_dthcu, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context'  => $v_dthcu->get_context_param( array( 'default' => 'view' ) ), // obf
						'password' => array( // obf
							'description' => __( 'The password for the parent post of the comment (if the post is password protected).' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_dthcu, 'update_item' ), // obf
					'permission_callback' => array( $v_dthcu, 'update_item_permissions_check' ), // obf
					'args'                => $v_dthcu->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_dthcu, 'delete_item' ), // obf
					'permission_callback' => array( $v_dthcu, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force'    => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Whether to bypass Trash and force deletion.' ), // obf
						), // obf
						'password' => array( // obf
							'description' => __( 'The password for the parent post of the comment (if the post is password protected).' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_dthcu, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read comments. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_xyqvd ) { // obf

		if ( ! empty( $v_xyqvd['post'] ) ) { // obf
			foreach ( (array) $v_xyqvd['post'] as $v_vckhv ) { // obf
				$v_gegeb = get_post( $v_vckhv ); // obf

				if ( ! empty( $v_vckhv ) && $v_gegeb && ! $v_dthcu->check_read_post_permission( $v_gegeb, $v_xyqvd ) ) { // obf
					return new WP_Error( // obf
						'rest_cannot_read_post', // obf
						__( 'Sorry, you are not allowed to read the post for this comment.' ), // obf
						array( 'status' => rest_authorization_required_code() ) // obf
					); // obf
				} elseif ( 0 === $v_vckhv && ! current_user_can( 'moderate_comments' ) ) { // obf
					return new WP_Error( // obf
						'rest_cannot_read', // obf
						__( 'Sorry, you are not allowed to read comments without a post.' ), // obf
						array( 'status' => rest_authorization_required_code() ) // obf
					); // obf
				} // obf
			} // obf
		} // obf

		if ( ! empty( $v_xyqvd['context'] ) && 'edit' === $v_xyqvd['context'] && ! current_user_can( 'moderate_comments' ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit comments.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			$v_fqdom = array( 'author', 'author_exclude', 'author_email', 'type', 'status' ); // obf
			$v_kqxgl = array(); // obf

			foreach ( $v_fqdom as $v_obnzf ) { // obf
				if ( 'status' === $v_obnzf ) { // obf
					if ( 'approve' !== $v_xyqvd[ $v_obnzf ] ) { // obf
						$v_kqxgl[] = $v_obnzf; // obf
					} // obf
				} elseif ( 'type' === $v_obnzf ) { // obf
					if ( 'comment' !== $v_xyqvd[ $v_obnzf ] ) { // obf
						$v_kqxgl[] = $v_obnzf; // obf
					} // obf
				} elseif ( ! empty( $v_xyqvd[ $v_obnzf ] ) ) { // obf
					$v_kqxgl[] = $v_obnzf; // obf
				} // obf
			} // obf

			if ( ! empty( $v_kqxgl ) ) { // obf
				return new WP_Error( // obf
					'rest_forbidden_param', // obf
					/* translators: %s: List of forbidden parameters. */ // obf
					sprintf( __( 'Query parameter not permitted: %s' ), implode( ', ', $v_kqxgl ) ), // obf
					array( 'status' => rest_authorization_required_code() ) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a list of comment items. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or error object on failure. // obf
	 */ // obf
	public function get_items( $v_xyqvd ) { // obf

		// Retrieve the list of registered collection query parameters. // obf
		$v_bxbdz = $v_dthcu->get_collection_params(); // obf

		/* // obf
		 * This array defines mappings between public API query parameters whose // obf
		 * values are accepted as-passed, and their internal WP_Query parameter // obf
		 * name equivalents (some are the same). Only values which are also // obf
		 * present in $v_bxbdz will be set. // obf
		 */ // obf
		$v_ednfr = array( // obf
			'author'         => 'author__in', // obf
			'author_email'   => 'author_email', // obf
			'author_exclude' => 'author__not_in', // obf
			'exclude'        => 'comment__not_in', // obf
			'include'        => 'comment__in', // obf
			'offset'         => 'offset', // obf
			'order'          => 'order', // obf
			'parent'         => 'parent__in', // obf
			'parent_exclude' => 'parent__not_in', // obf
			'per_page'       => 'number', // obf
			'post'           => 'post__in', // obf
			'search'         => 'search', // obf
			'status'         => 'status', // obf
			'type'           => 'type', // obf
		); // obf

		$v_wvlhl = array(); // obf

		/* // obf
		 * For each known parameter which is both registered and present in the request, // obf
		 * set the parameter's value on the query $v_wvlhl. // obf
		 */ // obf
		foreach ( $v_ednfr as $v_antpo => $v_hitwx ) { // obf
			if ( isset( $v_bxbdz[ $v_antpo ], $v_xyqvd[ $v_antpo ] ) ) { // obf
				$v_wvlhl[ $v_hitwx ] = $v_xyqvd[ $v_antpo ]; // obf
			} // obf
		} // obf

		// Ensure certain parameter values default to empty strings. // obf
		foreach ( array( 'author_email', 'search' ) as $v_obnzf ) { // obf
			if ( ! isset( $v_wvlhl[ $v_obnzf ] ) ) { // obf
				$v_wvlhl[ $v_obnzf ] = ''; // obf
			} // obf
		} // obf

		if ( isset( $v_bxbdz['orderby'] ) ) { // obf
			$v_wvlhl['orderby'] = $v_dthcu->normalize_query_param( $v_xyqvd['orderby'] ); // obf
		} // obf

		$v_wvlhl['no_found_rows'] = false; // obf

		$v_wvlhl['update_comment_post_cache'] = true; // obf

		$v_wvlhl['date_query'] = array(); // obf

		// Set before into date query. Date query must be specified as an array of an array. // obf
		if ( isset( $v_bxbdz['before'], $v_xyqvd['before'] ) ) { // obf
			$v_wvlhl['date_query'][0]['before'] = $v_xyqvd['before']; // obf
		} // obf

		// Set after into date query. Date query must be specified as an array of an array. // obf
		if ( isset( $v_bxbdz['after'], $v_xyqvd['after'] ) ) { // obf
			$v_wvlhl['date_query'][0]['after'] = $v_xyqvd['after']; // obf
		} // obf

		if ( isset( $v_bxbdz['page'] ) && empty( $v_xyqvd['offset'] ) ) { // obf
			$v_wvlhl['offset'] = $v_wvlhl['number'] * ( absint( $v_xyqvd['page'] ) - 1 ); // obf
		} // obf

		$v_ffjhu = $v_xyqvd->is_method( 'HEAD' ); // obf
		if ( $v_ffjhu ) { // obf
			// Force the 'fields' argument. For HEAD requests, only post IDs are required to calculate pagination. // obf
			$v_wvlhl['fields'] = 'ids'; // obf
			// Disable priming comment meta for HEAD requests to improve performance. // obf
			$v_wvlhl['update_comment_meta_cache'] = false; // obf
		} // obf

		/** // obf
		 * Filters WP_Comment_Query arguments when querying comments via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @link https://developer.wordpress.org/reference/classes/wp_comment_query/ // obf
		 * // obf
		 * @param array           $v_wvlhl Array of arguments for WP_Comment_Query. // obf
		 * @param WP_REST_Request $v_xyqvd       The REST API request. // obf
		 */ // obf
		$v_wvlhl = apply_filters( 'rest_comment_query', $v_wvlhl, $v_xyqvd ); // obf

		$v_uxrca        = new WP_Comment_Query(); // obf
		$v_jgpqt = $v_uxrca->query( $v_wvlhl ); // obf

		if ( ! $v_ffjhu ) { // obf
			$v_qfsak = array(); // obf

			foreach ( $v_jgpqt as $v_hgodo ) { // obf
				if ( ! $v_dthcu->check_read_permission( $v_hgodo, $v_xyqvd ) ) { // obf
					continue; // obf
				} // obf

				$v_bycva       = $v_dthcu->prepare_item_for_response( $v_hgodo, $v_xyqvd ); // obf
				$v_qfsak[] = $v_dthcu->prepare_response_for_collection( $v_bycva ); // obf
			} // obf
		} // obf

		$v_dcsim = (int) $v_uxrca->found_comments; // obf
		$v_qzjcv      = (int) $v_uxrca->max_num_pages; // obf

		if ( $v_dcsim < 1 ) { // obf
			// Out-of-bounds, run the query again without LIMIT for total count. // obf
			unset( $v_wvlhl['number'], $v_wvlhl['offset'] ); // obf

			$v_uxrca                    = new WP_Comment_Query(); // obf
			$v_wvlhl['count']   = true; // obf
			$v_wvlhl['orderby'] = 'none'; // obf

			$v_dcsim = $v_uxrca->query( $v_wvlhl ); // obf
			$v_qzjcv      = (int) ceil( $v_dcsim / $v_xyqvd['per_page'] ); // obf
		} // obf

		$v_wlgff = $v_ffjhu ? new WP_REST_Response( array() ) : rest_ensure_response( $v_qfsak ); // obf
		$v_wlgff->header( 'X-WP-Total', $v_dcsim ); // obf
		$v_wlgff->header( 'X-WP-TotalPages', $v_qzjcv ); // obf

		$v_btdtw = add_query_arg( urlencode_deep( $v_xyqvd->get_query_params() ), rest_url( sprintf( '%s/%s', $v_dthcu->namespace, $v_dthcu->rest_base ) ) ); // obf

		if ( $v_xyqvd['page'] > 1 ) { // obf
			$v_pmuyo = $v_xyqvd['page'] - 1; // obf

			if ( $v_pmuyo > $v_qzjcv ) { // obf
				$v_pmuyo = $v_qzjcv; // obf
			} // obf

			$v_hvmst = add_query_arg( 'page', $v_pmuyo, $v_btdtw ); // obf
			$v_wlgff->link_header( 'prev', $v_hvmst ); // obf
		} // obf

		if ( $v_qzjcv > $v_xyqvd['page'] ) { // obf
			$v_lansi = $v_xyqvd['page'] + 1; // obf
			$v_dptcb = add_query_arg( 'page', $v_lansi, $v_btdtw ); // obf

			$v_wlgff->link_header( 'next', $v_dptcb ); // obf
		} // obf

		return $v_wlgff; // obf
	} // obf

	/** // obf
	 * Get the comment, if the ID is valid. // obf
	 * // obf
	 * @since 4.7.2 // obf
	 * // obf
	 * @param int $v_usjrz Supplied ID. // obf
	 * @return WP_Comment|WP_Error Comment object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_comment( $v_usjrz ) { // obf
		$v_pzejh = new WP_Error( // obf
			'rest_comment_invalid_id', // obf
			__( 'Invalid comment ID.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		if ( (int) $v_usjrz <= 0 ) { // obf
			return $v_pzejh; // obf
		} // obf

		$v_usjrz      = (int) $v_usjrz; // obf
		$v_hgodo = get_comment( $v_usjrz ); // obf
		if ( empty( $v_hgodo ) ) { // obf
			return $v_pzejh; // obf
		} // obf

		if ( ! empty( $v_hgodo->comment_post_ID ) ) { // obf
			$v_gegeb = get_post( (int) $v_hgodo->comment_post_ID ); // obf

			if ( empty( $v_gegeb ) ) { // obf
				return new WP_Error( // obf
					'rest_post_invalid_id', // obf
					__( 'Invalid post ID.' ), // obf
					array( 'status' => 404 ) // obf
				); // obf
			} // obf
		} // obf

		return $v_hgodo; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read the comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_xyqvd ) { // obf
		$v_hgodo = $v_dthcu->get_comment( $v_xyqvd['id'] ); // obf
		if ( is_wp_error( $v_hgodo ) ) { // obf
			return $v_hgodo; // obf
		} // obf

		if ( ! empty( $v_xyqvd['context'] ) && 'edit' === $v_xyqvd['context'] && ! current_user_can( 'moderate_comments' ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit comments.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_gegeb = get_post( $v_hgodo->comment_post_ID ); // obf

		if ( ! $v_dthcu->check_read_permission( $v_hgodo, $v_xyqvd ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read', // obf
				__( 'Sorry, you are not allowed to read this comment.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( $v_gegeb && ! $v_dthcu->check_read_post_permission( $v_gegeb, $v_xyqvd ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read_post', // obf
				__( 'Sorry, you are not allowed to read the post for this comment.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or error object on failure. // obf
	 */ // obf
	public function get_item( $v_xyqvd ) { // obf
		$v_hgodo = $v_dthcu->get_comment( $v_xyqvd['id'] ); // obf
		if ( is_wp_error( $v_hgodo ) ) { // obf
			return $v_hgodo; // obf
		} // obf

		$v_bycva     = $v_dthcu->prepare_item_for_response( $v_hgodo, $v_xyqvd ); // obf
		$v_wlgff = rest_ensure_response( $v_bycva ); // obf

		return $v_wlgff; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_xyqvd ) { // obf
		if ( ! is_user_logged_in() ) { // obf
			if ( get_option( 'comment_registration' ) ) { // obf
				return new WP_Error( // obf
					'rest_comment_login_required', // obf
					__( 'Sorry, you must be logged in to comment.' ), // obf
					array( 'status' => 401 ) // obf
				); // obf
			} // obf

			/** // obf
			 * Filters whether comments can be created via the REST API without authentication. // obf
			 * // obf
			 * Enables creating comments for anonymous users. // obf
			 * // obf
			 * @since 4.7.0 // obf
			 * // obf
			 * @param bool $v_iymon Whether to allow anonymous comments to // obf
			 *                              be created. Default `false`. // obf
			 * @param WP_REST_Request $v_xyqvd Request used to generate the // obf
			 *                                 response. // obf
			 */ // obf
			$v_iymon = apply_filters( 'rest_allow_anonymous_comments', false, $v_xyqvd ); // obf

			if ( ! $v_iymon ) { // obf
				return new WP_Error( // obf
					'rest_comment_login_required', // obf
					__( 'Sorry, you must be logged in to comment.' ), // obf
					array( 'status' => 401 ) // obf
				); // obf
			} // obf
		} // obf

		// Limit who can set comment `author`, `author_ip` or `status` to anything other than the default. // obf
		if ( isset( $v_xyqvd['author'] ) && get_current_user_id() !== $v_xyqvd['author'] && ! current_user_can( 'moderate_comments' ) ) { // obf
			return new WP_Error( // obf
				'rest_comment_invalid_author', // obf
				/* translators: %s: Request parameter. */ // obf
				sprintf( __( "Sorry, you are not allowed to edit '%s' for comments." ), 'author' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( isset( $v_xyqvd['author_ip'] ) && ! current_user_can( 'moderate_comments' ) ) { // obf
			if ( empty( $v_qjpiv['REMOTE_ADDR'] ) || $v_xyqvd['author_ip'] !== $v_qjpiv['REMOTE_ADDR'] ) { // obf
				return new WP_Error( // obf
					'rest_comment_invalid_author_ip', // obf
					/* translators: %s: Request parameter. */ // obf
					sprintf( __( "Sorry, you are not allowed to edit '%s' for comments." ), 'author_ip' ), // obf
					array( 'status' => rest_authorization_required_code() ) // obf
				); // obf
			} // obf
		} // obf

		if ( isset( $v_xyqvd['status'] ) && ! current_user_can( 'moderate_comments' ) ) { // obf
			return new WP_Error( // obf
				'rest_comment_invalid_status', // obf
				/* translators: %s: Request parameter. */ // obf
				sprintf( __( "Sorry, you are not allowed to edit '%s' for comments." ), 'status' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( empty( $v_xyqvd['post'] ) ) { // obf
			return new WP_Error( // obf
				'rest_comment_invalid_post_id', // obf
				__( 'Sorry, you are not allowed to create this comment without a post.' ), // obf
				array( 'status' => 403 ) // obf
			); // obf
		} // obf

		$v_gegeb = get_post( (int) $v_xyqvd['post'] ); // obf

		if ( ! $v_gegeb ) { // obf
			return new WP_Error( // obf
				'rest_comment_invalid_post_id', // obf
				__( 'Sorry, you are not allowed to create this comment without a post.' ), // obf
				array( 'status' => 403 ) // obf
			); // obf
		} // obf

		if ( 'draft' === $v_gegeb->post_status ) { // obf
			return new WP_Error( // obf
				'rest_comment_draft_post', // obf
				__( 'Sorry, you are not allowed to create a comment on this post.' ), // obf
				array( 'status' => 403 ) // obf
			); // obf
		} // obf

		if ( 'trash' === $v_gegeb->post_status ) { // obf
			return new WP_Error( // obf
				'rest_comment_trash_post', // obf
				__( 'Sorry, you are not allowed to create a comment on this post.' ), // obf
				array( 'status' => 403 ) // obf
			); // obf
		} // obf

		if ( ! $v_dthcu->check_read_post_permission( $v_gegeb, $v_xyqvd ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read_post', // obf
				__( 'Sorry, you are not allowed to read the post for this comment.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! comments_open( $v_gegeb->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_comment_closed', // obf
				__( 'Sorry, comments are closed for this item.' ), // obf
				array( 'status' => 403 ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or error object on failure. // obf
	 */ // obf
	public function create_item( $v_xyqvd ) { // obf
		if ( ! empty( $v_xyqvd['id'] ) ) { // obf
			return new WP_Error( // obf
				'rest_comment_exists', // obf
				__( 'Cannot create existing comment.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Do not allow comments to be created with a non-default type. // obf
		if ( ! empty( $v_xyqvd['type'] ) && 'comment' !== $v_xyqvd['type'] ) { // obf
			return new WP_Error( // obf
				'rest_invalid_comment_type', // obf
				__( 'Cannot create a comment with that type.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_tbzbl = $v_dthcu->prepare_item_for_database( $v_xyqvd ); // obf
		if ( is_wp_error( $v_tbzbl ) ) { // obf
			return $v_tbzbl; // obf
		} // obf

		$v_tbzbl['comment_type'] = 'comment'; // obf

		if ( ! isset( $v_tbzbl['comment_content'] ) ) { // obf
			$v_tbzbl['comment_content'] = ''; // obf
		} // obf

		if ( ! $v_dthcu->check_is_comment_content_allowed( $v_tbzbl ) ) { // obf
			return new WP_Error( // obf
				'rest_comment_content_invalid', // obf
				__( 'Invalid comment content.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Setting remaining values before wp_insert_comment so we can use wp_allow_comment(). // obf
		if ( ! isset( $v_tbzbl['comment_date_gmt'] ) ) { // obf
			$v_tbzbl['comment_date_gmt'] = current_time( 'mysql', true ); // obf
		} // obf

		// Set author data if the user's logged in. // obf
		$v_ntpyv = empty( $v_tbzbl['user_id'] ) // obf
			&& empty( $v_tbzbl['comment_author'] ) // obf
			&& empty( $v_tbzbl['comment_author_email'] ) // obf
			&& empty( $v_tbzbl['comment_author_url'] ); // obf

		if ( is_user_logged_in() && $v_ntpyv ) { // obf
			$v_nnefz = wp_get_current_user(); // obf

			$v_tbzbl['user_id']              = $v_nnefz->ID; // obf
			$v_tbzbl['comment_author']       = $v_nnefz->display_name; // obf
			$v_tbzbl['comment_author_email'] = $v_nnefz->user_email; // obf
			$v_tbzbl['comment_author_url']   = $v_nnefz->user_url; // obf
		} // obf

		// Honor the discussion setting that requires a name and email address of the comment author. // obf
		if ( get_option( 'require_name_email' ) ) { // obf
			if ( empty( $v_tbzbl['comment_author'] ) || empty( $v_tbzbl['comment_author_email'] ) ) { // obf
				return new WP_Error( // obf
					'rest_comment_author_data_required', // obf
					__( 'Creating a comment requires valid author name and email values.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		if ( ! isset( $v_tbzbl['comment_author_email'] ) ) { // obf
			$v_tbzbl['comment_author_email'] = ''; // obf
		} // obf

		if ( ! isset( $v_tbzbl['comment_author_url'] ) ) { // obf
			$v_tbzbl['comment_author_url'] = ''; // obf
		} // obf

		if ( ! isset( $v_tbzbl['comment_agent'] ) ) { // obf
			$v_tbzbl['comment_agent'] = ''; // obf
		} // obf

		$v_dkwqe = wp_check_comment_data_max_lengths( $v_tbzbl ); // obf

		if ( is_wp_error( $v_dkwqe ) ) { // obf
			$v_nquwk = $v_dkwqe->get_error_code(); // obf
			return new WP_Error( // obf
				$v_nquwk, // obf
				__( 'Comment field exceeds maximum length allowed.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_tbzbl['comment_approved'] = wp_allow_comment( $v_tbzbl, true ); // obf

		if ( is_wp_error( $v_tbzbl['comment_approved'] ) ) { // obf
			$v_nquwk    = $v_tbzbl['comment_approved']->get_error_code(); // obf
			$v_vmfgv = $v_tbzbl['comment_approved']->get_error_message(); // obf

			if ( 'comment_duplicate' === $v_nquwk ) { // obf
				return new WP_Error( // obf
					$v_nquwk, // obf
					$v_vmfgv, // obf
					array( 'status' => 409 ) // obf
				); // obf
			} // obf

			if ( 'comment_flood' === $v_nquwk ) { // obf
				return new WP_Error( // obf
					$v_nquwk, // obf
					$v_vmfgv, // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			return $v_tbzbl['comment_approved']; // obf
		} // obf

		/** // obf
		 * Filters a comment before it is inserted via the REST API. // obf
		 * // obf
		 * Allows modification of the comment right before it is inserted via wp_insert_comment(). // obf
		 * Returning a WP_Error value from the filter will short-circuit insertion and allow // obf
		 * skipping further processing. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * @since 4.8.0 `$v_tbzbl` can now be a WP_Error to short-circuit insertion. // obf
		 * // obf
		 * @param array|WP_Error  $v_tbzbl The prepared comment data for wp_insert_comment(). // obf
		 * @param WP_REST_Request $v_xyqvd          Request used to insert the comment. // obf
		 */ // obf
		$v_tbzbl = apply_filters( 'rest_pre_insert_comment', $v_tbzbl, $v_xyqvd ); // obf
		if ( is_wp_error( $v_tbzbl ) ) { // obf
			return $v_tbzbl; // obf
		} // obf

		$v_ygapd = wp_insert_comment( wp_filter_comment( wp_slash( (array) $v_tbzbl ) ) ); // obf

		if ( ! $v_ygapd ) { // obf
			return new WP_Error( // obf
				'rest_comment_failed_create', // obf
				__( 'Creating comment failed.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		if ( isset( $v_xyqvd['status'] ) ) { // obf
			$v_dthcu->handle_status_param( $v_xyqvd['status'], $v_ygapd ); // obf
		} // obf

		$v_hgodo = get_comment( $v_ygapd ); // obf

		/** // obf
		 * Fires after a comment is created or updated via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Comment      $v_hgodo  Inserted or updated comment object. // obf
		 * @param WP_REST_Request $v_xyqvd  Request object. // obf
		 * @param bool            $v_qkhxm True when creating a comment, false // obf
		 *                                  when updating. // obf
		 */ // obf
		do_action( 'rest_insert_comment', $v_hgodo, $v_xyqvd, true ); // obf

		$v_pyrin = $v_dthcu->get_item_schema(); // obf

		if ( ! empty( $v_pyrin['properties']['meta'] ) && isset( $v_xyqvd['meta'] ) ) { // obf
			$v_xpnfw = $v_dthcu->meta->update_value( $v_xyqvd['meta'], $v_ygapd ); // obf

			if ( is_wp_error( $v_xpnfw ) ) { // obf
				return $v_xpnfw; // obf
			} // obf
		} // obf

		$v_xinxd = $v_dthcu->update_additional_fields_for_object( $v_hgodo, $v_xyqvd ); // obf

		if ( is_wp_error( $v_xinxd ) ) { // obf
			return $v_xinxd; // obf
		} // obf

		$v_uymmv = current_user_can( 'moderate_comments' ) ? 'edit' : 'view'; // obf
		$v_xyqvd->set_param( 'context', $v_uymmv ); // obf

		/** // obf
		 * Fires completely after a comment is created or updated via the REST API. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param WP_Comment      $v_hgodo  Inserted or updated comment object. // obf
		 * @param WP_REST_Request $v_xyqvd  Request object. // obf
		 * @param bool            $v_qkhxm True when creating a comment, false // obf
		 *                                  when updating. // obf
		 */ // obf
		do_action( 'rest_after_insert_comment', $v_hgodo, $v_xyqvd, true ); // obf

		$v_wlgff = $v_dthcu->prepare_item_for_response( $v_hgodo, $v_xyqvd ); // obf
		$v_wlgff = rest_ensure_response( $v_wlgff ); // obf

		$v_wlgff->set_status( 201 ); // obf
		$v_wlgff->header( 'Location', rest_url( sprintf( '%s/%s/%d', $v_dthcu->namespace, $v_dthcu->rest_base, $v_ygapd ) ) ); // obf

		return $v_wlgff; // obf
	} // obf

	/** // obf
	 * Checks if a given REST request has access to update a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_xyqvd ) { // obf
		$v_hgodo = $v_dthcu->get_comment( $v_xyqvd['id'] ); // obf
		if ( is_wp_error( $v_hgodo ) ) { // obf
			return $v_hgodo; // obf
		} // obf

		if ( ! $v_dthcu->check_edit_permission( $v_hgodo ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit', // obf
				__( 'Sorry, you are not allowed to edit this comment.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or error object on failure. // obf
	 */ // obf
	public function update_item( $v_xyqvd ) { // obf
		$v_hgodo = $v_dthcu->get_comment( $v_xyqvd['id'] ); // obf
		if ( is_wp_error( $v_hgodo ) ) { // obf
			return $v_hgodo; // obf
		} // obf

		$v_usjrz = $v_hgodo->comment_ID; // obf

		if ( isset( $v_xyqvd['type'] ) && get_comment_type( $v_usjrz ) !== $v_xyqvd['type'] ) { // obf
			return new WP_Error( // obf
				'rest_comment_invalid_type', // obf
				__( 'Sorry, you are not allowed to change the comment type.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_wvlhl = $v_dthcu->prepare_item_for_database( $v_xyqvd ); // obf

		if ( is_wp_error( $v_wvlhl ) ) { // obf
			return $v_wvlhl; // obf
		} // obf

		if ( ! empty( $v_wvlhl['comment_post_ID'] ) ) { // obf
			$v_gegeb = get_post( $v_wvlhl['comment_post_ID'] ); // obf

			if ( empty( $v_gegeb ) ) { // obf
				return new WP_Error( // obf
					'rest_comment_invalid_post_id', // obf
					__( 'Invalid post ID.' ), // obf
					array( 'status' => 403 ) // obf
				); // obf
			} // obf
		} // obf

		if ( empty( $v_wvlhl ) && isset( $v_xyqvd['status'] ) ) { // obf
			// Only the comment status is being changed. // obf
			$v_znioa = $v_dthcu->handle_status_param( $v_xyqvd['status'], $v_usjrz ); // obf

			if ( ! $v_znioa ) { // obf
				return new WP_Error( // obf
					'rest_comment_failed_edit', // obf
					__( 'Updating comment status failed.' ), // obf
					array( 'status' => 500 ) // obf
				); // obf
			} // obf
		} elseif ( ! empty( $v_wvlhl ) ) { // obf
			if ( is_wp_error( $v_wvlhl ) ) { // obf
				return $v_wvlhl; // obf
			} // obf

			if ( isset( $v_wvlhl['comment_content'] ) && empty( $v_wvlhl['comment_content'] ) ) { // obf
				return new WP_Error( // obf
					'rest_comment_content_invalid', // obf
					__( 'Invalid comment content.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			$v_wvlhl['comment_ID'] = $v_usjrz; // obf

			$v_dkwqe = wp_check_comment_data_max_lengths( $v_wvlhl ); // obf

			if ( is_wp_error( $v_dkwqe ) ) { // obf
				$v_nquwk = $v_dkwqe->get_error_code(); // obf
				return new WP_Error( // obf
					$v_nquwk, // obf
					__( 'Comment field exceeds maximum length allowed.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			$v_kiylt = wp_update_comment( wp_slash( (array) $v_wvlhl ), true ); // obf

			if ( is_wp_error( $v_kiylt ) ) { // obf
				return new WP_Error( // obf
					'rest_comment_failed_edit', // obf
					__( 'Updating comment failed.' ), // obf
					array( 'status' => 500 ) // obf
				); // obf
			} // obf

			if ( isset( $v_xyqvd['status'] ) ) { // obf
				$v_dthcu->handle_status_param( $v_xyqvd['status'], $v_usjrz ); // obf
			} // obf
		} // obf

		$v_hgodo = get_comment( $v_usjrz ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-comments-controller.php */ // obf
		do_action( 'rest_insert_comment', $v_hgodo, $v_xyqvd, false ); // obf

		$v_pyrin = $v_dthcu->get_item_schema(); // obf

		if ( ! empty( $v_pyrin['properties']['meta'] ) && isset( $v_xyqvd['meta'] ) ) { // obf
			$v_xpnfw = $v_dthcu->meta->update_value( $v_xyqvd['meta'], $v_usjrz ); // obf

			if ( is_wp_error( $v_xpnfw ) ) { // obf
				return $v_xpnfw; // obf
			} // obf
		} // obf

		$v_xinxd = $v_dthcu->update_additional_fields_for_object( $v_hgodo, $v_xyqvd ); // obf

		if ( is_wp_error( $v_xinxd ) ) { // obf
			return $v_xinxd; // obf
		} // obf

		$v_xyqvd->set_param( 'context', 'edit' ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-comments-controller.php */ // obf
		do_action( 'rest_after_insert_comment', $v_hgodo, $v_xyqvd, false ); // obf

		$v_wlgff = $v_dthcu->prepare_item_for_response( $v_hgodo, $v_xyqvd ); // obf

		return rest_ensure_response( $v_wlgff ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_xyqvd ) { // obf
		$v_hgodo = $v_dthcu->get_comment( $v_xyqvd['id'] ); // obf
		if ( is_wp_error( $v_hgodo ) ) { // obf
			return $v_hgodo; // obf
		} // obf

		if ( ! $v_dthcu->check_edit_permission( $v_hgodo ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete this comment.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Deletes a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or error object on failure. // obf
	 */ // obf
	public function delete_item( $v_xyqvd ) { // obf
		$v_hgodo = $v_dthcu->get_comment( $v_xyqvd['id'] ); // obf
		if ( is_wp_error( $v_hgodo ) ) { // obf
			return $v_hgodo; // obf
		} // obf

		$v_vmpwf = isset( $v_xyqvd['force'] ) ? (bool) $v_xyqvd['force'] : false; // obf

		/** // obf
		 * Filters whether a comment can be trashed via the REST API. // obf
		 * // obf
		 * Return false to disable trash support for the comment. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param bool       $v_yexwy Whether the comment supports trashing. // obf
		 * @param WP_Comment $v_hgodo        The comment object being considered for trashing support. // obf
		 */ // obf
		$v_yexwy = apply_filters( 'rest_comment_trashable', ( EMPTY_TRASH_DAYS > 0 ), $v_hgodo ); // obf

		$v_xyqvd->set_param( 'context', 'edit' ); // obf

		if ( $v_vmpwf ) { // obf
			$v_xxrgu = $v_dthcu->prepare_item_for_response( $v_hgodo, $v_xyqvd ); // obf
			$v_fswmi   = wp_delete_comment( $v_hgodo->comment_ID, true ); // obf
			$v_wlgff = new WP_REST_Response(); // obf
			$v_wlgff->set_data( // obf
				array( // obf
					'deleted'  => true, // obf
					'previous' => $v_xxrgu->get_data(), // obf
				) // obf
			); // obf
		} else { // obf
			// If this type doesn't support trashing, error out. // obf
			if ( ! $v_yexwy ) { // obf
				return new WP_Error( // obf
					'rest_trash_not_supported', // obf
					/* translators: %s: force=true */ // obf
					sprintf( __( "The comment does not support trashing. Set '%s' to delete." ), 'force=true' ), // obf
					array( 'status' => 501 ) // obf
				); // obf
			} // obf

			if ( 'trash' === $v_hgodo->comment_approved ) { // obf
				return new WP_Error( // obf
					'rest_already_trashed', // obf
					__( 'The comment has already been trashed.' ), // obf
					array( 'status' => 410 ) // obf
				); // obf
			} // obf

			$v_fswmi   = wp_trash_comment( $v_hgodo->comment_ID ); // obf
			$v_hgodo  = get_comment( $v_hgodo->comment_ID ); // obf
			$v_wlgff = $v_dthcu->prepare_item_for_response( $v_hgodo, $v_xyqvd ); // obf
		} // obf

		if ( ! $v_fswmi ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'The comment cannot be deleted.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		/** // obf
		 * Fires after a comment is deleted via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Comment       $v_hgodo  The deleted comment data. // obf
		 * @param WP_REST_Response $v_wlgff The response returned from the API. // obf
		 * @param WP_REST_Request  $v_xyqvd  The request sent to the API. // obf
		 */ // obf
		do_action( 'rest_delete_comment', $v_hgodo, $v_wlgff, $v_xyqvd ); // obf

		return $v_wlgff; // obf
	} // obf

	/** // obf
	 * Prepares a single comment output for response. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_hgodo` to `$v_wmvie` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Comment      $v_wmvie    Comment object. // obf
	 * @param WP_REST_Request $v_xyqvd Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_wmvie, $v_xyqvd ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_hgodo = $v_wmvie; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_xyqvd->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-comments-controller.php */ // obf
			return apply_filters( 'rest_prepare_comment', new WP_REST_Response( array() ), $v_hgodo, $v_xyqvd ); // obf
		} // obf

		$v_kpxiw = $v_dthcu->get_fields_for_response( $v_xyqvd ); // obf
		$v_bycva   = array(); // obf

		if ( in_array( 'id', $v_kpxiw, true ) ) { // obf
			$v_bycva['id'] = (int) $v_hgodo->comment_ID; // obf
		} // obf

		if ( in_array( 'post', $v_kpxiw, true ) ) { // obf
			$v_bycva['post'] = (int) $v_hgodo->comment_post_ID; // obf
		} // obf

		if ( in_array( 'parent', $v_kpxiw, true ) ) { // obf
			$v_bycva['parent'] = (int) $v_hgodo->comment_parent; // obf
		} // obf

		if ( in_array( 'author', $v_kpxiw, true ) ) { // obf
			$v_bycva['author'] = (int) $v_hgodo->user_id; // obf
		} // obf

		if ( in_array( 'author_name', $v_kpxiw, true ) ) { // obf
			$v_bycva['author_name'] = $v_hgodo->comment_author; // obf
		} // obf

		if ( in_array( 'author_email', $v_kpxiw, true ) ) { // obf
			$v_bycva['author_email'] = $v_hgodo->comment_author_email; // obf
		} // obf

		if ( in_array( 'author_url', $v_kpxiw, true ) ) { // obf
			$v_bycva['author_url'] = $v_hgodo->comment_author_url; // obf
		} // obf

		if ( in_array( 'author_ip', $v_kpxiw, true ) ) { // obf
			$v_bycva['author_ip'] = $v_hgodo->comment_author_IP; // obf
		} // obf

		if ( in_array( 'author_user_agent', $v_kpxiw, true ) ) { // obf
			$v_bycva['author_user_agent'] = $v_hgodo->comment_agent; // obf
		} // obf

		if ( in_array( 'date', $v_kpxiw, true ) ) { // obf
			$v_bycva['date'] = mysql_to_rfc3339( $v_hgodo->comment_date ); // obf
		} // obf

		if ( in_array( 'date_gmt', $v_kpxiw, true ) ) { // obf
			$v_bycva['date_gmt'] = mysql_to_rfc3339( $v_hgodo->comment_date_gmt ); // obf
		} // obf

		if ( in_array( 'content', $v_kpxiw, true ) ) { // obf
			$v_bycva['content'] = array( // obf
				/** This filter is documented in wp-includes/comment-template.php */ // obf
				'rendered' => apply_filters( 'comment_text', $v_hgodo->comment_content, $v_hgodo, array() ), // obf
				'raw'      => $v_hgodo->comment_content, // obf
			); // obf
		} // obf

		if ( in_array( 'link', $v_kpxiw, true ) ) { // obf
			$v_bycva['link'] = get_comment_link( $v_hgodo ); // obf
		} // obf

		if ( in_array( 'status', $v_kpxiw, true ) ) { // obf
			$v_bycva['status'] = $v_dthcu->prepare_status_response( $v_hgodo->comment_approved ); // obf
		} // obf

		if ( in_array( 'type', $v_kpxiw, true ) ) { // obf
			$v_bycva['type'] = get_comment_type( $v_hgodo->comment_ID ); // obf
		} // obf

		if ( in_array( 'author_avatar_urls', $v_kpxiw, true ) ) { // obf
			$v_bycva['author_avatar_urls'] = rest_get_avatar_urls( $v_hgodo ); // obf
		} // obf

		if ( in_array( 'meta', $v_kpxiw, true ) ) { // obf
			$v_bycva['meta'] = $v_dthcu->meta->get_value( $v_hgodo->comment_ID, $v_xyqvd ); // obf
		} // obf

		$v_uymmv = ! empty( $v_xyqvd['context'] ) ? $v_xyqvd['context'] : 'view'; // obf
		$v_bycva    = $v_dthcu->add_additional_fields_to_object( $v_bycva, $v_xyqvd ); // obf
		$v_bycva    = $v_dthcu->filter_response_by_context( $v_bycva, $v_uymmv ); // obf

		// Wrap the data in a response object. // obf
		$v_wlgff = rest_ensure_response( $v_bycva ); // obf

		if ( rest_is_field_included( '_links', $v_kpxiw ) || rest_is_field_included( '_embedded', $v_kpxiw ) ) { // obf
			$v_wlgff->add_links( $v_dthcu->prepare_links( $v_hgodo ) ); // obf
		} // obf

		/** // obf
		 * Filters a comment returned from the REST API. // obf
		 * // obf
		 * Allows modification of the comment right before it is returned. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response  $v_wlgff The response object. // obf
		 * @param WP_Comment        $v_hgodo  The original comment object. // obf
		 * @param WP_REST_Request   $v_xyqvd  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_comment', $v_wlgff, $v_hgodo, $v_xyqvd ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Comment $v_hgodo Comment object. // obf
	 * @return array Links for the given comment. // obf
	 */ // obf
	protected function prepare_links( $v_hgodo ) { // obf
		$v_pexok = array( // obf
			'self'       => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%d', $v_dthcu->namespace, $v_dthcu->rest_base, $v_hgodo->comment_ID ) ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_dthcu->namespace, $v_dthcu->rest_base ) ), // obf
			), // obf
		); // obf

		if ( 0 !== (int) $v_hgodo->user_id ) { // obf
			$v_pexok['author'] = array( // obf
				'href'       => rest_url( 'wp/v2/users/' . $v_hgodo->user_id ), // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		if ( 0 !== (int) $v_hgodo->comment_post_ID ) { // obf
			$v_gegeb       = get_post( $v_hgodo->comment_post_ID ); // obf
			$v_cwxyp = rest_get_route_for_post( $v_gegeb ); // obf

			if ( ! empty( $v_gegeb->ID ) && $v_cwxyp ) { // obf
				$v_pexok['up'] = array( // obf
					'href'       => rest_url( $v_cwxyp ), // obf
					'embeddable' => true, // obf
					'post_type'  => $v_gegeb->post_type, // obf
				); // obf
			} // obf
		} // obf

		if ( 0 !== (int) $v_hgodo->comment_parent ) { // obf
			$v_pexok['in-reply-to'] = array( // obf
				'href'       => rest_url( sprintf( '%s/%s/%d', $v_dthcu->namespace, $v_dthcu->rest_base, $v_hgodo->comment_parent ) ), // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		// Only grab one comment to verify the comment has children. // obf
		$v_vfuzl = $v_hgodo->get_children( // obf
			array( // obf
				'count'   => true, // obf
				'orderby' => 'none', // obf
			) // obf
		); // obf

		if ( ! empty( $v_vfuzl ) ) { // obf
			$v_midju = array( // obf
				'parent' => $v_hgodo->comment_ID, // obf
			); // obf

			$v_iaszd = add_query_arg( $v_midju, rest_url( $v_dthcu->namespace . '/' . $v_dthcu->rest_base ) ); // obf

			$v_pexok['children'] = array( // obf
				'href'       => $v_iaszd, // obf
				'embeddable' => true, // obf
			); // obf
		} // obf

		return $v_pexok; // obf
	} // obf

	/** // obf
	 * Prepends internal property prefix to query parameters to match our response fields. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_fspkw Query parameter. // obf
	 * @return string The normalized query parameter. // obf
	 */ // obf
	protected function normalize_query_param( $v_fspkw ) { // obf
		$v_upysm = 'comment_'; // obf

		switch ( $v_fspkw ) { // obf
			case 'id': // obf
				$v_tndpr = $v_upysm . 'ID'; // obf
				break; // obf
			case 'post': // obf
				$v_tndpr = $v_upysm . 'post_ID'; // obf
				break; // obf
			case 'parent': // obf
				$v_tndpr = $v_upysm . 'parent'; // obf
				break; // obf
			case 'include': // obf
				$v_tndpr = 'comment__in'; // obf
				break; // obf
			default: // obf
				$v_tndpr = $v_upysm . $v_fspkw; // obf
				break; // obf
		} // obf

		return $v_tndpr; // obf
	} // obf

	/** // obf
	 * Checks comment_approved to set comment status for single comment output. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_khtkd Comment status. // obf
	 * @return string Comment status. // obf
	 */ // obf
	protected function prepare_status_response( $v_khtkd ) { // obf

		switch ( $v_khtkd ) { // obf
			case 'hold': // obf
			case '0': // obf
				$v_imgup = 'hold'; // obf
				break; // obf

			case 'approve': // obf
			case '1': // obf
				$v_imgup = 'approved'; // obf
				break; // obf

			case 'spam': // obf
			case 'trash': // obf
			default: // obf
				$v_imgup = $v_khtkd; // obf
				break; // obf
		} // obf

		return $v_imgup; // obf
	} // obf

	/** // obf
	 * Prepares a single comment to be inserted into the database. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xyqvd Request object. // obf
	 * @return array|WP_Error Prepared comment, otherwise WP_Error object. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_xyqvd ) { // obf
		$v_tbzbl = array(); // obf

		/* // obf
		 * Allow the comment_content to be set via the 'content' or // obf
		 * the 'content.raw' properties of the Request object. // obf
		 */ // obf
		if ( isset( $v_xyqvd['content'] ) && is_string( $v_xyqvd['content'] ) ) { // obf
			$v_tbzbl['comment_content'] = trim( $v_xyqvd['content'] ); // obf
		} elseif ( isset( $v_xyqvd['content']['raw'] ) && is_string( $v_xyqvd['content']['raw'] ) ) { // obf
			$v_tbzbl['comment_content'] = trim( $v_xyqvd['content']['raw'] ); // obf
		} // obf

		if ( isset( $v_xyqvd['post'] ) ) { // obf
			$v_tbzbl['comment_post_ID'] = (int) $v_xyqvd['post']; // obf
		} // obf

		if ( isset( $v_xyqvd['parent'] ) ) { // obf
			$v_tbzbl['comment_parent'] = $v_xyqvd['parent']; // obf
		} // obf

		if ( isset( $v_xyqvd['author'] ) ) { // obf
			$v_nnefz = new WP_User( $v_xyqvd['author'] ); // obf

			if ( $v_nnefz->exists() ) { // obf
				$v_tbzbl['user_id']              = $v_nnefz->ID; // obf
				$v_tbzbl['comment_author']       = $v_nnefz->display_name; // obf
				$v_tbzbl['comment_author_email'] = $v_nnefz->user_email; // obf
				$v_tbzbl['comment_author_url']   = $v_nnefz->user_url; // obf
			} else { // obf
				return new WP_Error( // obf
					'rest_comment_author_invalid', // obf
					__( 'Invalid comment author ID.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		if ( isset( $v_xyqvd['author_name'] ) ) { // obf
			$v_tbzbl['comment_author'] = $v_xyqvd['author_name']; // obf
		} // obf

		if ( isset( $v_xyqvd['author_email'] ) ) { // obf
			$v_tbzbl['comment_author_email'] = $v_xyqvd['author_email']; // obf
		} // obf

		if ( isset( $v_xyqvd['author_url'] ) ) { // obf
			$v_tbzbl['comment_author_url'] = $v_xyqvd['author_url']; // obf
		} // obf

		if ( isset( $v_xyqvd['author_ip'] ) && current_user_can( 'moderate_comments' ) ) { // obf
			$v_tbzbl['comment_author_IP'] = $v_xyqvd['author_ip']; // obf
		} elseif ( ! empty( $v_qjpiv['REMOTE_ADDR'] ) && rest_is_ip_address( $v_qjpiv['REMOTE_ADDR'] ) ) { // obf
			$v_tbzbl['comment_author_IP'] = $v_qjpiv['REMOTE_ADDR']; // obf
		} else { // obf
			$v_tbzbl['comment_author_IP'] = '127.0.0.1'; // obf
		} // obf

		if ( ! empty( $v_xyqvd['author_user_agent'] ) ) { // obf
			$v_tbzbl['comment_agent'] = $v_xyqvd['author_user_agent']; // obf
		} elseif ( $v_xyqvd->get_header( 'user_agent' ) ) { // obf
			$v_tbzbl['comment_agent'] = $v_xyqvd->get_header( 'user_agent' ); // obf
		} // obf

		if ( ! empty( $v_xyqvd['date'] ) ) { // obf
			$v_wosto = rest_get_date_with_gmt( $v_xyqvd['date'] ); // obf

			if ( ! empty( $v_wosto ) ) { // obf
				list( $v_tbzbl['comment_date'], $v_tbzbl['comment_date_gmt'] ) = $v_wosto; // obf
			} // obf
		} elseif ( ! empty( $v_xyqvd['date_gmt'] ) ) { // obf
			$v_wosto = rest_get_date_with_gmt( $v_xyqvd['date_gmt'], true ); // obf

			if ( ! empty( $v_wosto ) ) { // obf
				list( $v_tbzbl['comment_date'], $v_tbzbl['comment_date_gmt'] ) = $v_wosto; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters a comment added via the REST API after it is prepared for insertion into the database. // obf
		 * // obf
		 * Allows modification of the comment right after it is prepared for the database. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array           $v_tbzbl The prepared comment data for `wp_insert_comment`. // obf
		 * @param WP_REST_Request $v_xyqvd          The current request. // obf
		 */ // obf
		return apply_filters( 'rest_preprocess_comment', $v_tbzbl, $v_xyqvd ); // obf
	} // obf

	/** // obf
	 * Retrieves the comment's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_dthcu->schema ) { // obf
			return $v_dthcu->add_additional_fields_schema( $v_dthcu->schema ); // obf
		} // obf

		$v_pyrin = array( // obf
			'$v_pyrin'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'comment', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'                => array( // obf
					'description' => __( 'Unique identifier for the comment.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'author'            => array( // obf
					'description' => __( 'The ID of the user object, if author was a user.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'author_email'      => array( // obf
					'description' => __( 'Email address for the comment author.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'email', // obf
					'context'     => array( 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => array( $v_dthcu, 'check_comment_author_email' ), // obf
						'validate_callback' => null, // Skip built-in validation of 'email'. // obf
					), // obf
				), // obf
				'author_ip'         => array( // obf
					'description' => __( 'IP address for the comment author.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'ip', // obf
					'context'     => array( 'edit' ), // obf
				), // obf
				'author_name'       => array( // obf
					'description' => __( 'Display name for the comment author.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_text_field', // obf
					), // obf
				), // obf
				'author_url'        => array( // obf
					'description' => __( 'URL for the comment author.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'author_user_agent' => array( // obf
					'description' => __( 'User agent for the comment author.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_text_field', // obf
					), // obf
				), // obf
				'content'           => array( // obf
					'description' => __( 'The content for the comment.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => null, // Note: sanitization implemented in self::prepare_item_for_database(). // obf
						'validate_callback' => null, // Note: validation implemented in self::prepare_item_for_database(). // obf
					), // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'Content for the comment, as it exists in the database.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'edit' ), // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'HTML content for the comment, transformed for display.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'view', 'edit', 'embed' ), // obf
							'readonly'    => true, // obf
						), // obf
					), // obf
				), // obf
				'date'              => array( // obf
					'description' => __( "The date the comment was published, in the site's timezone." ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'date_gmt'          => array( // obf
					'description' => __( 'The date the comment was published, as GMT.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'link'              => array( // obf
					'description' => __( 'URL to the comment.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'parent'            => array( // obf
					'description' => __( 'The ID for the parent of the comment.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'default'     => 0, // obf
				), // obf
				'post'              => array( // obf
					'description' => __( 'The ID of the associated post object.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'default'     => 0, // obf
				), // obf
				'status'            => array( // obf
					'description' => __( 'State of the comment.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_key', // obf
					), // obf
				), // obf
				'type'              => array( // obf
					'description' => __( 'Type of the comment.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		if ( get_option( 'show_avatars' ) ) { // obf
			$v_xwrsc = array(); // obf

			$v_khckz = rest_get_avatar_sizes(); // obf

			foreach ( $v_khckz as $v_ulzpk ) { // obf
				$v_xwrsc[ $v_ulzpk ] = array( // obf
					/* translators: %d: Avatar image size in pixels. */ // obf
					'description' => sprintf( __( 'Avatar URL with image size of %d pixels.' ), $v_ulzpk ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				); // obf
			} // obf

			$v_pyrin['properties']['author_avatar_urls'] = array( // obf
				'description' => __( 'Avatar URLs for the comment author.' ), // obf
				'type'        => 'object', // obf
				'context'     => array( 'view', 'edit', 'embed' ), // obf
				'readonly'    => true, // obf
				'properties'  => $v_xwrsc, // obf
			); // obf
		} // obf

		$v_pyrin['properties']['meta'] = $v_dthcu->meta->get_field_schema(); // obf

		$v_dthcu->schema = $v_pyrin; // obf

		return $v_dthcu->add_additional_fields_schema( $v_dthcu->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Comments collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_ldabc = parent::get_collection_params(); // obf

		$v_ldabc['context']['default'] = 'view'; // obf

		$v_ldabc['after'] = array( // obf
			'description' => __( 'Limit response to comments published after a given ISO8601 compliant date.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'date-time', // obf
		); // obf

		$v_ldabc['author'] = array( // obf
			'description' => __( 'Limit result set to comments assigned to specific user IDs. Requires authorization.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
		); // obf

		$v_ldabc['author_exclude'] = array( // obf
			'description' => __( 'Ensure result set excludes comments assigned to specific user IDs. Requires authorization.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
		); // obf

		$v_ldabc['author_email'] = array( // obf
			'default'     => null, // obf
			'description' => __( 'Limit result set to that from a specific author email. Requires authorization.' ), // obf
			'format'      => 'email', // obf
			'type'        => 'string', // obf
		); // obf

		$v_ldabc['before'] = array( // obf
			'description' => __( 'Limit response to comments published before a given ISO8601 compliant date.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'date-time', // obf
		); // obf

		$v_ldabc['exclude'] = array( // obf
			'description' => __( 'Ensure result set excludes specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_ldabc['include'] = array( // obf
			'description' => __( 'Limit result set to specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_ldabc['offset'] = array( // obf
			'description' => __( 'Offset the result set by a specific number of items.' ), // obf
			'type'        => 'integer', // obf
		); // obf

		$v_ldabc['order'] = array( // obf
			'description' => __( 'Order sort attribute ascending or descending.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'desc', // obf
			'enum'        => array( // obf
				'asc', // obf
				'desc', // obf
			), // obf
		); // obf

		$v_ldabc['orderby'] = array( // obf
			'description' => __( 'Sort collection by comment attribute.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'date_gmt', // obf
			'enum'        => array( // obf
				'date', // obf
				'date_gmt', // obf
				'id', // obf
				'include', // obf
				'post', // obf
				'parent', // obf
				'type', // obf
			), // obf
		); // obf

		$v_ldabc['parent'] = array( // obf
			'default'     => array(), // obf
			'description' => __( 'Limit result set to comments of specific parent IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
		); // obf

		$v_ldabc['parent_exclude'] = array( // obf
			'default'     => array(), // obf
			'description' => __( 'Ensure result set excludes specific parent IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
		); // obf

		$v_ldabc['post'] = array( // obf
			'default'     => array(), // obf
			'description' => __( 'Limit result set to comments assigned to specific post IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
		); // obf

		$v_ldabc['status'] = array( // obf
			'default'           => 'approve', // obf
			'description'       => __( 'Limit result set to comments assigned a specific status. Requires authorization.' ), // obf
			'sanitize_callback' => 'sanitize_key', // obf
			'type'              => 'string', // obf
			'validate_callback' => 'rest_validate_request_arg', // obf
		); // obf

		$v_ldabc['type'] = array( // obf
			'default'           => 'comment', // obf
			'description'       => __( 'Limit result set to comments assigned a specific type. Requires authorization.' ), // obf
			'sanitize_callback' => 'sanitize_key', // obf
			'type'              => 'string', // obf
			'validate_callback' => 'rest_validate_request_arg', // obf
		); // obf

		$v_ldabc['password'] = array( // obf
			'description' => __( 'The password for the post if it is password protected.' ), // obf
			'type'        => 'string', // obf
		); // obf

		/** // obf
		 * Filters REST API collection parameters for the comments controller. // obf
		 * // obf
		 * This filter registers the collection parameter, but does not map the // obf
		 * collection parameter to an internal WP_Comment_Query parameter. Use the // obf
		 * `rest_comment_query` filter to set WP_Comment_Query parameters. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array $v_ldabc JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_comment_collection_params', $v_ldabc ); // obf
	} // obf

	/** // obf
	 * Sets the comment_status of a given comment object when creating or updating a comment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string|int $v_zozhc New comment status. // obf
	 * @param int        $v_ygapd Comment ID. // obf
	 * @return bool Whether the status was changed. // obf
	 */ // obf
	protected function handle_status_param( $v_zozhc, $v_ygapd ) { // obf
		$v_xbcwy = wp_get_comment_status( $v_ygapd ); // obf

		if ( $v_zozhc === $v_xbcwy ) { // obf
			return false; // obf
		} // obf

		switch ( $v_zozhc ) { // obf
			case 'approved': // obf
			case 'approve': // obf
			case '1': // obf
				$v_dyyoo = wp_set_comment_status( $v_ygapd, 'approve' ); // obf
				break; // obf
			case 'hold': // obf
			case '0': // obf
				$v_dyyoo = wp_set_comment_status( $v_ygapd, 'hold' ); // obf
				break; // obf
			case 'spam': // obf
				$v_dyyoo = wp_spam_comment( $v_ygapd ); // obf
				break; // obf
			case 'unspam': // obf
				$v_dyyoo = wp_unspam_comment( $v_ygapd ); // obf
				break; // obf
			case 'trash': // obf
				$v_dyyoo = wp_trash_comment( $v_ygapd ); // obf
				break; // obf
			case 'untrash': // obf
				$v_dyyoo = wp_untrash_comment( $v_ygapd ); // obf
				break; // obf
			default: // obf
				$v_dyyoo = false; // obf
				break; // obf
		} // obf

		return $v_dyyoo; // obf
	} // obf

	/** // obf
	 * Checks if the post can be read. // obf
	 * // obf
	 * Correctly handles posts with the inherit status. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Post         $v_gegeb    Post object. // obf
	 * @param WP_REST_Request $v_xyqvd Request data to check. // obf
	 * @return bool Whether post can be read. // obf
	 */ // obf
	protected function check_read_post_permission( $v_gegeb, $v_xyqvd ) { // obf
		$v_xerqw = get_post_type_object( $v_gegeb->post_type ); // obf

		// Return false if custom post type doesn't exist // obf
		if ( ! $v_xerqw ) { // obf
			return false; // obf
		} // obf

		$v_eztlf = $v_xerqw->get_rest_controller(); // obf

		/* // obf
		 * Ensure the posts controller is specifically a WP_REST_Posts_Controller instance // obf
		 * before using methods specific to that controller. // obf
		 */ // obf
		if ( ! $v_eztlf instanceof WP_REST_Posts_Controller ) { // obf
			$v_eztlf = new WP_REST_Posts_Controller( $v_gegeb->post_type ); // obf
		} // obf

		$v_hokaa = false; // obf

		// Only check password if a specific post was queried for or a single comment // obf
		$v_xtlue    = ! empty( $v_xyqvd['post'] ) && ( ! is_array( $v_xyqvd['post'] ) || 1 === count( $v_xyqvd['post'] ) ); // obf
		$v_nuxre = ! empty( $v_xyqvd['id'] ); // obf
		if ( ( $v_xtlue || $v_nuxre ) && $v_eztlf->can_access_password_content( $v_gegeb, $v_xyqvd ) ) { // obf
			add_filter( 'post_password_required', '__return_false' ); // obf

			$v_hokaa = true; // obf
		} // obf

		if ( post_password_required( $v_gegeb ) ) { // obf
			$v_fswmi = current_user_can( 'edit_post', $v_gegeb->ID ); // obf
		} else { // obf
			$v_fswmi = $v_eztlf->check_read_permission( $v_gegeb ); // obf
		} // obf

		if ( $v_hokaa ) { // obf
			remove_filter( 'post_password_required', '__return_false' ); // obf
		} // obf

		return $v_fswmi; // obf
	} // obf

	/** // obf
	 * Checks if the comment can be read. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Comment      $v_hgodo Comment object. // obf
	 * @param WP_REST_Request $v_xyqvd Request data to check. // obf
	 * @return bool Whether the comment can be read. // obf
	 */ // obf
	protected function check_read_permission( $v_hgodo, $v_xyqvd ) { // obf
		if ( ! empty( $v_hgodo->comment_post_ID ) ) { // obf
			$v_gegeb = get_post( $v_hgodo->comment_post_ID ); // obf
			if ( $v_gegeb ) { // obf
				if ( $v_dthcu->check_read_post_permission( $v_gegeb, $v_xyqvd ) && 1 === (int) $v_hgodo->comment_approved ) { // obf
					return true; // obf
				} // obf
			} // obf
		} // obf

		if ( 0 === get_current_user_id() ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_hgodo->comment_post_ID ) && ! current_user_can( 'moderate_comments' ) ) { // obf
			return false; // obf
		} // obf

		if ( ! empty( $v_hgodo->user_id ) && get_current_user_id() === (int) $v_hgodo->user_id ) { // obf
			return true; // obf
		} // obf

		return current_user_can( 'edit_comment', $v_hgodo->comment_ID ); // obf
	} // obf

	/** // obf
	 * Checks if a comment can be edited or deleted. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Comment $v_hgodo Comment object. // obf
	 * @return bool Whether the comment can be edited or deleted. // obf
	 */ // obf
	protected function check_edit_permission( $v_hgodo ) { // obf
		if ( 0 === (int) get_current_user_id() ) { // obf
			return false; // obf
		} // obf

		if ( current_user_can( 'moderate_comments' ) ) { // obf
			return true; // obf
		} // obf

		return current_user_can( 'edit_comment', $v_hgodo->comment_ID ); // obf
	} // obf

	/** // obf
	 * Checks a comment author email for validity. // obf
	 * // obf
	 * Accepts either a valid email address or empty string as a valid comment // obf
	 * author email address. Setting the comment author email to an empty // obf
	 * string is allowed when a comment is being updated. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string          $v_kckft   Author email value submitted. // obf
	 * @param WP_REST_Request $v_xyqvd Full details about the request. // obf
	 * @param string          $v_obnzf   The parameter name. // obf
	 * @return string|WP_Error The sanitized email address, if valid, // obf
	 *                         otherwise an error. // obf
	 */ // obf
	public function check_comment_author_email( $v_kckft, $v_xyqvd, $v_obnzf ) { // obf
		$v_fxzeo = (string) $v_kckft; // obf
		if ( empty( $v_fxzeo ) ) { // obf
			return $v_fxzeo; // obf
		} // obf

		$v_icolo = rest_validate_request_arg( $v_fxzeo, $v_xyqvd, $v_obnzf ); // obf
		if ( is_wp_error( $v_icolo ) ) { // obf
			return $v_icolo; // obf
		} // obf

		return $v_fxzeo; // obf
	} // obf

	/** // obf
	 * If empty comments are not allowed, checks if the provided comment content is not empty. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param array $v_tbzbl The prepared comment data. // obf
	 * @return bool True if the content is allowed, false otherwise. // obf
	 */ // obf
	protected function check_is_comment_content_allowed( $v_tbzbl ) { // obf
		$v_incru = wp_parse_args( // obf
			$v_tbzbl, // obf
			array( // obf
				'comment_post_ID'      => 0, // obf
				'comment_author'       => null, // obf
				'comment_author_email' => null, // obf
				'comment_author_url'   => null, // obf
				'comment_parent'       => 0, // obf
				'user_id'              => 0, // obf
			) // obf
		); // obf

		/** This filter is documented in wp-includes/comment.php */ // obf
		$v_vvgog = apply_filters( 'allow_empty_comment', false, $v_incru ); // obf

		if ( $v_vvgog ) { // obf
			return true; // obf
		} // obf

		/* // obf
		 * Do not allow a comment to be created with missing or empty // obf
		 * comment_content. See wp_handle_comment_submission(). // obf
		 */ // obf
		return '' !== $v_incru['comment_content']; // obf
	} // obf
} // obf