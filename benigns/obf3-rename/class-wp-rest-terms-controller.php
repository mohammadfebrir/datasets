

<?php // obf
/** // obf
 * REST API: WP_REST_Terms_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to managed terms associated with a taxonomy via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Terms_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Taxonomy key. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_mqijt; // obf

	/** // obf
	 * Instance of a term meta fields object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var WP_REST_Term_Meta_Fields // obf
	 */ // obf
	protected $v_htate; // obf

	/** // obf
	 * Column to have the terms be sorted by. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_rqzsk; // obf

	/** // obf
	 * Number of terms that were found. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var int // obf
	 */ // obf
	protected $v_azxzz; // obf

	/** // obf
	 * Whether the controller supports batching. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_chbdk = array( 'v1' => true ); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_mqijt Taxonomy key. // obf
	 */ // obf
	public function __construct( $v_mqijt ) { // obf
		$v_haqiz->taxonomy  = $v_mqijt; // obf
		$v_racbs         = get_taxonomy( $v_mqijt ); // obf
		$v_haqiz->rest_base = ! empty( $v_racbs->rest_base ) ? $v_racbs->rest_base : $v_racbs->name; // obf
		$v_haqiz->namespace = ! empty( $v_racbs->rest_namespace ) ? $v_racbs->rest_namespace : 'wp/v2'; // obf

		$v_haqiz->meta = new WP_REST_Term_Meta_Fields( $v_mqijt ); // obf
	} // obf

	/** // obf
	 * Registers the routes for terms. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_haqiz->namespace, // obf
			'/' . $v_haqiz->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_haqiz, 'get_items' ), // obf
					'permission_callback' => array( $v_haqiz, 'get_items_permissions_check' ), // obf
					'args'                => $v_haqiz->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_haqiz, 'create_item' ), // obf
					'permission_callback' => array( $v_haqiz, 'create_item_permissions_check' ), // obf
					'args'                => $v_haqiz->get_endpoint_args_for_item_schema( WP_REST_Server::CREATABLE ), // obf
				), // obf
				'allow_batch' => $v_haqiz->allow_batch, // obf
				'schema'      => array( $v_haqiz, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_haqiz->namespace, // obf
			'/' . $v_haqiz->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'        => array( // obf
					'id' => array( // obf
						'description' => __( 'Unique identifier for the term.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_haqiz, 'get_item' ), // obf
					'permission_callback' => array( $v_haqiz, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_haqiz->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_haqiz, 'update_item' ), // obf
					'permission_callback' => array( $v_haqiz, 'update_item_permissions_check' ), // obf
					'args'                => $v_haqiz->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_haqiz, 'delete_item' ), // obf
					'permission_callback' => array( $v_haqiz, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force' => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Required to be true, as terms do not support trashing.' ), // obf
						), // obf
					), // obf
				), // obf
				'allow_batch' => $v_haqiz->allow_batch, // obf
				'schema'      => array( $v_haqiz, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if the terms for a post can be read. // obf
	 * // obf
	 * @since 6.0.3 // obf
	 * // obf
	 * @param WP_Post         $v_pzyss    Post object. // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return bool Whether the terms for the post can be read. // obf
	 */ // obf
	public function check_read_terms_permission_for_post( $v_pzyss, $v_qdvpp ) { // obf
		// If the requested post isn't associated with this taxonomy, deny access. // obf
		if ( ! is_object_in_taxonomy( $v_pzyss->post_type, $v_haqiz->taxonomy ) ) { // obf
			return false; // obf
		} // obf

		// Grant access if the post is publicly viewable. // obf
		if ( is_post_publicly_viewable( $v_pzyss ) ) { // obf
			return true; // obf
		} // obf

		// Otherwise grant access if the post is readable by the logged-in user. // obf
		if ( current_user_can( 'read_post', $v_pzyss->ID ) ) { // obf
			return true; // obf
		} // obf

		// Otherwise, deny access. // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks if a request has access to read terms in the specified taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return bool|WP_Error True if the request has read access, otherwise false or WP_Error object. // obf
	 */ // obf
	public function get_items_permissions_check( $v_qdvpp ) { // obf
		$v_racbs = get_taxonomy( $v_haqiz->taxonomy ); // obf

		if ( ! $v_racbs || ! $v_haqiz->check_is_taxonomy_allowed( $v_haqiz->taxonomy ) ) { // obf
			return false; // obf
		} // obf

		if ( 'edit' === $v_qdvpp['context'] && ! current_user_can( $v_racbs->cap->edit_terms ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit terms in this taxonomy.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_qdvpp['post'] ) ) { // obf
			$v_pzyss = get_post( $v_qdvpp['post'] ); // obf

			if ( ! $v_pzyss ) { // obf
				return new WP_Error( // obf
					'rest_post_invalid_id', // obf
					__( 'Invalid post ID.' ), // obf
					array( // obf
						'status' => 400, // obf
					) // obf
				); // obf
			} // obf

			if ( ! $v_haqiz->check_read_terms_permission_for_post( $v_pzyss, $v_qdvpp ) ) { // obf
				return new WP_Error( // obf
					'rest_forbidden_context', // obf
					__( 'Sorry, you are not allowed to view terms for this post.' ), // obf
					array( // obf
						'status' => rest_authorization_required_code(), // obf
					) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves terms associated with a taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.8.0 Respect default query arguments set for the taxonomy upon registration. // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_qdvpp ) { // obf

		// Retrieve the list of registered collection query parameters. // obf
		$v_wzjhc = $v_haqiz->get_collection_params(); // obf

		/* // obf
		 * This array defines mappings between public API query parameters whose // obf
		 * values are accepted as-passed, and their internal WP_Query parameter // obf
		 * name equivalents (some are the same). Only values which are also // obf
		 * present in $v_wzjhc will be set. // obf
		 */ // obf
		$v_ijjbp = array( // obf
			'exclude'    => 'exclude', // obf
			'include'    => 'include', // obf
			'order'      => 'order', // obf
			'orderby'    => 'orderby', // obf
			'post'       => 'post', // obf
			'hide_empty' => 'hide_empty', // obf
			'per_page'   => 'number', // obf
			'search'     => 'search', // obf
			'slug'       => 'slug', // obf
		); // obf

		$v_zwgjb = array( 'taxonomy' => $v_haqiz->taxonomy ); // obf

		/* // obf
		 * For each known parameter which is both registered and present in the request, // obf
		 * set the parameter's value on the query $v_zwgjb. // obf
		 */ // obf
		foreach ( $v_ijjbp as $v_leckm => $v_zpmyo ) { // obf
			if ( isset( $v_wzjhc[ $v_leckm ], $v_qdvpp[ $v_leckm ] ) ) { // obf
				$v_zwgjb[ $v_zpmyo ] = $v_qdvpp[ $v_leckm ]; // obf
			} // obf
		} // obf

		if ( isset( $v_zwgjb['orderby'] ) && isset( $v_qdvpp['orderby'] ) ) { // obf
			$v_tsnst = array( // obf
				'include_slugs' => 'slug__in', // obf
			); // obf

			if ( isset( $v_tsnst[ $v_qdvpp['orderby'] ] ) ) { // obf
				$v_zwgjb['orderby'] = $v_tsnst[ $v_qdvpp['orderby'] ]; // obf
			} // obf
		} // obf

		if ( isset( $v_wzjhc['offset'] ) && ! empty( $v_qdvpp['offset'] ) ) { // obf
			$v_zwgjb['offset'] = $v_qdvpp['offset']; // obf
		} else { // obf
			$v_zwgjb['offset'] = ( $v_qdvpp['page'] - 1 ) * $v_zwgjb['number']; // obf
		} // obf

		$v_mjhmu = get_taxonomy( $v_haqiz->taxonomy ); // obf

		if ( $v_mjhmu->hierarchical && isset( $v_wzjhc['parent'], $v_qdvpp['parent'] ) ) { // obf
			if ( 0 === $v_qdvpp['parent'] ) { // obf
				// Only query top-level terms. // obf
				$v_zwgjb['parent'] = 0; // obf
			} else { // obf
				if ( $v_qdvpp['parent'] ) { // obf
					$v_zwgjb['parent'] = $v_qdvpp['parent']; // obf
				} // obf
			} // obf
		} // obf

		/* // obf
		 * When a taxonomy is registered with an 'args' array, // obf
		 * those params override the `$v_spqxw` passed to this function. // obf
		 * // obf
		 * We only need to do this if no `post` argument is provided. // obf
		 * Otherwise, terms will be fetched using `wp_get_object_terms()`, // obf
		 * which respects the default query arguments set for the taxonomy. // obf
		 */ // obf
		if ( // obf
			empty( $v_zwgjb['post'] ) && // obf
			isset( $v_mjhmu->args ) && // obf
			is_array( $v_mjhmu->args ) // obf
		) { // obf
			$v_zwgjb = array_merge( $v_zwgjb, $v_mjhmu->args ); // obf
		} // obf

		$v_xrbyw = $v_qdvpp->is_method( 'HEAD' ); // obf
		if ( $v_xrbyw ) { // obf
			// Force the 'fields' argument. For HEAD requests, only term IDs are required. // obf
			$v_zwgjb['fields'] = 'ids'; // obf
			// Disable priming term meta for HEAD requests to improve performance. // obf
			$v_zwgjb['update_term_meta_cache'] = false; // obf
		} // obf

		/** // obf
		 * Filters get_terms() arguments when querying terms via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_haqiz->taxonomy`, refers to the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_category_query` // obf
		 *  - `rest_post_tag_query` // obf
		 * // obf
		 * Enables adding extra arguments or setting defaults for a terms // obf
		 * collection request. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @link https://developer.wordpress.org/reference/functions/get_terms/ // obf
		 * // obf
		 * @param array           $v_zwgjb Array of arguments for get_terms(). // obf
		 * @param WP_REST_Request $v_qdvpp       The REST API request. // obf
		 */ // obf
		$v_zwgjb = apply_filters( "rest_{$v_haqiz->taxonomy}_query", $v_zwgjb, $v_qdvpp ); // obf

		if ( ! empty( $v_zwgjb['post'] ) ) { // obf
			$v_sygsm = wp_get_object_terms( $v_zwgjb['post'], $v_haqiz->taxonomy, $v_zwgjb ); // obf

			// Used when calling wp_count_terms() below. // obf
			$v_zwgjb['object_ids'] = $v_zwgjb['post']; // obf
		} else { // obf
			$v_sygsm = get_terms( $v_zwgjb ); // obf
		} // obf

		$v_jmpir = $v_zwgjb; // obf

		unset( $v_jmpir['number'], $v_jmpir['offset'] ); // obf

		$v_azxzz = wp_count_terms( $v_jmpir ); // obf

		// wp_count_terms() can return a falsey value when the term has no children. // obf
		if ( ! $v_azxzz ) { // obf
			$v_azxzz = 0; // obf
		} // obf

		if ( ! $v_xrbyw ) { // obf
			$v_wxcml = array(); // obf
			foreach ( $v_sygsm as $v_vsglk ) { // obf
				$v_vrytd       = $v_haqiz->prepare_item_for_response( $v_vsglk, $v_qdvpp ); // obf
				$v_wxcml[] = $v_haqiz->prepare_response_for_collection( $v_vrytd ); // obf
			} // obf
		} // obf

		$v_wxcml = $v_xrbyw ? new WP_REST_Response( array() ) : rest_ensure_response( $v_wxcml ); // obf

		// Store pagination values for headers. // obf
		$v_qdvvt = (int) $v_zwgjb['number']; // obf
		$v_vnqcb     = (int) ceil( ( ( (int) $v_zwgjb['offset'] ) / $v_qdvvt ) + 1 ); // obf

		$v_wxcml->header( 'X-WP-Total', (int) $v_azxzz ); // obf

		$v_ssedb = (int) ceil( $v_azxzz / $v_qdvvt ); // obf

		$v_wxcml->header( 'X-WP-TotalPages', $v_ssedb ); // obf

		$v_yypiy = $v_qdvpp->get_query_params(); // obf
		$v_tzxnl = rest_url( rest_get_route_for_taxonomy_items( $v_haqiz->taxonomy ) ); // obf
		$v_bbccc           = add_query_arg( urlencode_deep( $v_yypiy ), $v_tzxnl ); // obf

		if ( $v_vnqcb > 1 ) { // obf
			$v_prxbw = $v_vnqcb - 1; // obf

			if ( $v_prxbw > $v_ssedb ) { // obf
				$v_prxbw = $v_ssedb; // obf
			} // obf

			$v_arfyo = add_query_arg( 'page', $v_prxbw, $v_bbccc ); // obf
			$v_wxcml->link_header( 'prev', $v_arfyo ); // obf
		} // obf
		if ( $v_ssedb > $v_vnqcb ) { // obf
			$v_icviw = $v_vnqcb + 1; // obf
			$v_tuaad = add_query_arg( 'page', $v_icviw, $v_bbccc ); // obf

			$v_wxcml->link_header( 'next', $v_tuaad ); // obf
		} // obf

		return $v_wxcml; // obf
	} // obf

	/** // obf
	 * Get the term, if the ID is valid. // obf
	 * // obf
	 * @since 4.7.2 // obf
	 * // obf
	 * @param int $v_delfj Supplied ID. // obf
	 * @return WP_Term|WP_Error Term object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_term( $v_delfj ) { // obf
		$v_xoljt = new WP_Error( // obf
			'rest_term_invalid', // obf
			__( 'Term does not exist.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		if ( ! $v_haqiz->check_is_taxonomy_allowed( $v_haqiz->taxonomy ) ) { // obf
			return $v_xoljt; // obf
		} // obf

		if ( (int) $v_delfj <= 0 ) { // obf
			return $v_xoljt; // obf
		} // obf

		$v_vsglk = get_term( (int) $v_delfj, $v_haqiz->taxonomy ); // obf
		if ( empty( $v_vsglk ) || $v_vsglk->taxonomy !== $v_haqiz->taxonomy ) { // obf
			return $v_xoljt; // obf
		} // obf

		return $v_vsglk; // obf
	} // obf

	/** // obf
	 * Checks if a request has access to read or edit the specified term. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, otherwise WP_Error object. // obf
	 */ // obf
	public function get_item_permissions_check( $v_qdvpp ) { // obf
		$v_vsglk = $v_haqiz->get_term( $v_qdvpp['id'] ); // obf

		if ( is_wp_error( $v_vsglk ) ) { // obf
			return $v_vsglk; // obf
		} // obf

		if ( 'edit' === $v_qdvpp['context'] && ! current_user_can( 'edit_term', $v_vsglk->term_id ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit this term.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets a single term from a taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_qdvpp ) { // obf
		$v_vsglk = $v_haqiz->get_term( $v_qdvpp['id'] ); // obf
		if ( is_wp_error( $v_vsglk ) ) { // obf
			return $v_vsglk; // obf
		} // obf

		$v_wxcml = $v_haqiz->prepare_item_for_response( $v_vsglk, $v_qdvpp ); // obf

		return rest_ensure_response( $v_wxcml ); // obf
	} // obf

	/** // obf
	 * Checks if a request has access to create a term. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return bool|WP_Error True if the request has access to create items, otherwise false or WP_Error object. // obf
	 */ // obf
	public function create_item_permissions_check( $v_qdvpp ) { // obf

		if ( ! $v_haqiz->check_is_taxonomy_allowed( $v_haqiz->taxonomy ) ) { // obf
			return false; // obf
		} // obf

		$v_mjhmu = get_taxonomy( $v_haqiz->taxonomy ); // obf

		if ( ( is_taxonomy_hierarchical( $v_haqiz->taxonomy ) // obf
				&& ! current_user_can( $v_mjhmu->cap->edit_terms ) ) // obf
			|| ( ! is_taxonomy_hierarchical( $v_haqiz->taxonomy ) // obf
				&& ! current_user_can( $v_mjhmu->cap->assign_terms ) ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_create', // obf
				__( 'Sorry, you are not allowed to create terms in this taxonomy.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates a single term in a taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_qdvpp ) { // obf
		if ( isset( $v_qdvpp['parent'] ) ) { // obf
			if ( ! is_taxonomy_hierarchical( $v_haqiz->taxonomy ) ) { // obf
				return new WP_Error( // obf
					'rest_taxonomy_not_hierarchical', // obf
					__( 'Cannot set parent term, taxonomy is not hierarchical.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			$v_dionx = get_term( (int) $v_qdvpp['parent'], $v_haqiz->taxonomy ); // obf

			if ( ! $v_dionx ) { // obf
				return new WP_Error( // obf
					'rest_term_invalid', // obf
					__( 'Parent term does not exist.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		$v_adhea = $v_haqiz->prepare_item_for_database( $v_qdvpp ); // obf

		$v_vsglk = wp_insert_term( wp_slash( $v_adhea->name ), $v_haqiz->taxonomy, wp_slash( (array) $v_adhea ) ); // obf
		if ( is_wp_error( $v_vsglk ) ) { // obf
			/* // obf
			 * If we're going to inform the client that the term already exists, // obf
			 * give them the identifier for future use. // obf
			 */ // obf
			$v_opjwc = $v_vsglk->get_error_data( 'term_exists' ); // obf
			if ( $v_opjwc ) { // obf
				$v_eqlyp = get_term( $v_opjwc, $v_haqiz->taxonomy ); // obf
				$v_vsglk->add_data( $v_eqlyp->term_id, 'term_exists' ); // obf
				$v_vsglk->add_data( // obf
					array( // obf
						'status'  => 400, // obf
						'term_id' => $v_opjwc, // obf
					) // obf
				); // obf
			} // obf

			return $v_vsglk; // obf
		} // obf

		$v_vsglk = get_term( $v_vsglk['term_id'], $v_haqiz->taxonomy ); // obf

		/** // obf
		 * Fires after a single term is created or updated via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_haqiz->taxonomy`, refers to the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_insert_category` // obf
		 *  - `rest_insert_post_tag` // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Term         $v_vsglk     Inserted or updated term object. // obf
		 * @param WP_REST_Request $v_qdvpp  Request object. // obf
		 * @param bool            $v_hdyal True when creating a term, false when updating. // obf
		 */ // obf
		do_action( "rest_insert_{$v_haqiz->taxonomy}", $v_vsglk, $v_qdvpp, true ); // obf

		$v_bikgl = $v_haqiz->get_item_schema(); // obf
		if ( ! empty( $v_bikgl['properties']['meta'] ) && isset( $v_qdvpp['meta'] ) ) { // obf
			$v_jqlfv = $v_haqiz->meta->update_value( $v_qdvpp['meta'], $v_vsglk->term_id ); // obf

			if ( is_wp_error( $v_jqlfv ) ) { // obf
				return $v_jqlfv; // obf
			} // obf
		} // obf

		$v_gnwtp = $v_haqiz->update_additional_fields_for_object( $v_vsglk, $v_qdvpp ); // obf

		if ( is_wp_error( $v_gnwtp ) ) { // obf
			return $v_gnwtp; // obf
		} // obf

		$v_qdvpp->set_param( 'context', 'edit' ); // obf

		/** // obf
		 * Fires after a single term is completely created or updated via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_haqiz->taxonomy`, refers to the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_after_insert_category` // obf
		 *  - `rest_after_insert_post_tag` // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param WP_Term         $v_vsglk     Inserted or updated term object. // obf
		 * @param WP_REST_Request $v_qdvpp  Request object. // obf
		 * @param bool            $v_hdyal True when creating a term, false when updating. // obf
		 */ // obf
		do_action( "rest_after_insert_{$v_haqiz->taxonomy}", $v_vsglk, $v_qdvpp, true ); // obf

		$v_wxcml = $v_haqiz->prepare_item_for_response( $v_vsglk, $v_qdvpp ); // obf
		$v_wxcml = rest_ensure_response( $v_wxcml ); // obf

		$v_wxcml->set_status( 201 ); // obf
		$v_wxcml->header( 'Location', rest_url( $v_haqiz->namespace . '/' . $v_haqiz->rest_base . '/' . $v_vsglk->term_id ) ); // obf

		return $v_wxcml; // obf
	} // obf

	/** // obf
	 * Checks if a request has access to update the specified term. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, false or WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_qdvpp ) { // obf
		$v_vsglk = $v_haqiz->get_term( $v_qdvpp['id'] ); // obf

		if ( is_wp_error( $v_vsglk ) ) { // obf
			return $v_vsglk; // obf
		} // obf

		if ( ! current_user_can( 'edit_term', $v_vsglk->term_id ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_update', // obf
				__( 'Sorry, you are not allowed to edit this term.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates a single term from a taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_qdvpp ) { // obf
		$v_vsglk = $v_haqiz->get_term( $v_qdvpp['id'] ); // obf
		if ( is_wp_error( $v_vsglk ) ) { // obf
			return $v_vsglk; // obf
		} // obf

		if ( isset( $v_qdvpp['parent'] ) ) { // obf
			if ( ! is_taxonomy_hierarchical( $v_haqiz->taxonomy ) ) { // obf
				return new WP_Error( // obf
					'rest_taxonomy_not_hierarchical', // obf
					__( 'Cannot set parent term, taxonomy is not hierarchical.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			$v_dionx = get_term( (int) $v_qdvpp['parent'], $v_haqiz->taxonomy ); // obf

			if ( ! $v_dionx ) { // obf
				return new WP_Error( // obf
					'rest_term_invalid', // obf
					__( 'Parent term does not exist.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		$v_adhea = $v_haqiz->prepare_item_for_database( $v_qdvpp ); // obf

		// Only update the term if we have something to update. // obf
		if ( ! empty( $v_adhea ) ) { // obf
			$v_ssevu = wp_update_term( $v_vsglk->term_id, $v_vsglk->taxonomy, wp_slash( (array) $v_adhea ) ); // obf

			if ( is_wp_error( $v_ssevu ) ) { // obf
				return $v_ssevu; // obf
			} // obf
		} // obf

		$v_vsglk = get_term( $v_vsglk->term_id, $v_haqiz->taxonomy ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		do_action( "rest_insert_{$v_haqiz->taxonomy}", $v_vsglk, $v_qdvpp, false ); // obf

		$v_bikgl = $v_haqiz->get_item_schema(); // obf
		if ( ! empty( $v_bikgl['properties']['meta'] ) && isset( $v_qdvpp['meta'] ) ) { // obf
			$v_jqlfv = $v_haqiz->meta->update_value( $v_qdvpp['meta'], $v_vsglk->term_id ); // obf

			if ( is_wp_error( $v_jqlfv ) ) { // obf
				return $v_jqlfv; // obf
			} // obf
		} // obf

		$v_gnwtp = $v_haqiz->update_additional_fields_for_object( $v_vsglk, $v_qdvpp ); // obf

		if ( is_wp_error( $v_gnwtp ) ) { // obf
			return $v_gnwtp; // obf
		} // obf

		$v_qdvpp->set_param( 'context', 'edit' ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
		do_action( "rest_after_insert_{$v_haqiz->taxonomy}", $v_vsglk, $v_qdvpp, false ); // obf

		$v_wxcml = $v_haqiz->prepare_item_for_response( $v_vsglk, $v_qdvpp ); // obf

		return rest_ensure_response( $v_wxcml ); // obf
	} // obf

	/** // obf
	 * Checks if a request has access to delete the specified term. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, otherwise false or WP_Error object. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_qdvpp ) { // obf
		$v_vsglk = $v_haqiz->get_term( $v_qdvpp['id'] ); // obf

		if ( is_wp_error( $v_vsglk ) ) { // obf
			return $v_vsglk; // obf
		} // obf

		if ( ! current_user_can( 'delete_term', $v_vsglk->term_id ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete this term.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a single term from a taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_qdvpp ) { // obf
		$v_vsglk = $v_haqiz->get_term( $v_qdvpp['id'] ); // obf
		if ( is_wp_error( $v_vsglk ) ) { // obf
			return $v_vsglk; // obf
		} // obf

		$v_zarsm = isset( $v_qdvpp['force'] ) ? (bool) $v_qdvpp['force'] : false; // obf

		// We don't support trashing for terms. // obf
		if ( ! $v_zarsm ) { // obf
			return new WP_Error( // obf
				'rest_trash_not_supported', // obf
				/* translators: %s: force=true */ // obf
				sprintf( __( "Terms do not support trashing. Set '%s' to delete." ), 'force=true' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		$v_qdvpp->set_param( 'context', 'view' ); // obf

		$v_ejnbu = $v_haqiz->prepare_item_for_response( $v_vsglk, $v_qdvpp ); // obf

		$v_sjzki = wp_delete_term( $v_vsglk->term_id, $v_vsglk->taxonomy ); // obf

		if ( ! $v_sjzki ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'The term cannot be deleted.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		$v_wxcml = new WP_REST_Response(); // obf
		$v_wxcml->set_data( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => $v_ejnbu->get_data(), // obf
			) // obf
		); // obf

		/** // obf
		 * Fires after a single term is deleted via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_haqiz->taxonomy`, refers to the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_delete_category` // obf
		 *  - `rest_delete_post_tag` // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Term          $v_vsglk     The deleted term. // obf
		 * @param WP_REST_Response $v_wxcml The response data. // obf
		 * @param WP_REST_Request  $v_qdvpp  The request sent to the API. // obf
		 */ // obf
		do_action( "rest_delete_{$v_haqiz->taxonomy}", $v_vsglk, $v_wxcml, $v_qdvpp ); // obf

		return $v_wxcml; // obf
	} // obf

	/** // obf
	 * Prepares a single term for create or update. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qdvpp Request object. // obf
	 * @return object Term object. // obf
	 */ // obf
	public function prepare_item_for_database( $v_qdvpp ) { // obf
		$v_adhea = new stdClass(); // obf

		$v_bikgl = $v_haqiz->get_item_schema(); // obf
		if ( isset( $v_qdvpp['name'] ) && ! empty( $v_bikgl['properties']['name'] ) ) { // obf
			$v_adhea->name = $v_qdvpp['name']; // obf
		} // obf

		if ( isset( $v_qdvpp['slug'] ) && ! empty( $v_bikgl['properties']['slug'] ) ) { // obf
			$v_adhea->slug = $v_qdvpp['slug']; // obf
		} // obf

		if ( isset( $v_qdvpp['taxonomy'] ) && ! empty( $v_bikgl['properties']['taxonomy'] ) ) { // obf
			$v_adhea->taxonomy = $v_qdvpp['taxonomy']; // obf
		} // obf

		if ( isset( $v_qdvpp['description'] ) && ! empty( $v_bikgl['properties']['description'] ) ) { // obf
			$v_adhea->description = $v_qdvpp['description']; // obf
		} // obf

		if ( isset( $v_qdvpp['parent'] ) && ! empty( $v_bikgl['properties']['parent'] ) ) { // obf
			$v_crciz   = 0; // obf
			$v_wzdeb = (int) $v_qdvpp['parent']; // obf

			if ( $v_wzdeb ) { // obf
				$v_myflx = get_term( $v_wzdeb, $v_haqiz->taxonomy ); // obf

				if ( $v_myflx instanceof WP_Term ) { // obf
					$v_crciz = $v_myflx->term_id; // obf
				} // obf
			} // obf

			$v_adhea->parent = $v_crciz; // obf
		} // obf

		/** // obf
		 * Filters term data before inserting term via the REST API. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_haqiz->taxonomy`, refers to the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_pre_insert_category` // obf
		 *  - `rest_pre_insert_post_tag` // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param object          $v_adhea Term object. // obf
		 * @param WP_REST_Request $v_qdvpp       Request object. // obf
		 */ // obf
		return apply_filters( "rest_pre_insert_{$v_haqiz->taxonomy}", $v_adhea, $v_qdvpp ); // obf
	} // obf

	/** // obf
	 * Prepares a single term output for response. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Term         $v_uupgk    Term object. // obf
	 * @param WP_REST_Request $v_qdvpp Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_uupgk, $v_qdvpp ) { // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_qdvpp->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-terms-controller.php */ // obf
			return apply_filters( "rest_prepare_{$v_haqiz->taxonomy}", new WP_REST_Response( array() ), $v_uupgk, $v_qdvpp ); // obf
		} // obf

		$v_mfggp = $v_haqiz->get_fields_for_response( $v_qdvpp ); // obf
		$v_vrytd   = array(); // obf

		if ( in_array( 'id', $v_mfggp, true ) ) { // obf
			$v_vrytd['id'] = (int) $v_uupgk->term_id; // obf
		} // obf

		if ( in_array( 'count', $v_mfggp, true ) ) { // obf
			$v_vrytd['count'] = (int) $v_uupgk->count; // obf
		} // obf

		if ( in_array( 'description', $v_mfggp, true ) ) { // obf
			$v_vrytd['description'] = $v_uupgk->description; // obf
		} // obf

		if ( in_array( 'link', $v_mfggp, true ) ) { // obf
			$v_vrytd['link'] = get_term_link( $v_uupgk ); // obf
		} // obf

		if ( in_array( 'name', $v_mfggp, true ) ) { // obf
			$v_vrytd['name'] = $v_uupgk->name; // obf
		} // obf

		if ( in_array( 'slug', $v_mfggp, true ) ) { // obf
			$v_vrytd['slug'] = $v_uupgk->slug; // obf
		} // obf

		if ( in_array( 'taxonomy', $v_mfggp, true ) ) { // obf
			$v_vrytd['taxonomy'] = $v_uupgk->taxonomy; // obf
		} // obf

		if ( in_array( 'parent', $v_mfggp, true ) ) { // obf
			$v_vrytd['parent'] = (int) $v_uupgk->parent; // obf
		} // obf

		if ( in_array( 'meta', $v_mfggp, true ) ) { // obf
			$v_vrytd['meta'] = $v_haqiz->meta->get_value( $v_uupgk->term_id, $v_qdvpp ); // obf
		} // obf

		$v_ghuhv = ! empty( $v_qdvpp['context'] ) ? $v_qdvpp['context'] : 'view'; // obf
		$v_vrytd    = $v_haqiz->add_additional_fields_to_object( $v_vrytd, $v_qdvpp ); // obf
		$v_vrytd    = $v_haqiz->filter_response_by_context( $v_vrytd, $v_ghuhv ); // obf

		$v_wxcml = rest_ensure_response( $v_vrytd ); // obf

		if ( rest_is_field_included( '_links', $v_mfggp ) || rest_is_field_included( '_embedded', $v_mfggp ) ) { // obf
			$v_wxcml->add_links( $v_haqiz->prepare_links( $v_uupgk ) ); // obf
		} // obf

		/** // obf
		 * Filters the term data for a REST API response. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_haqiz->taxonomy`, refers to the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `rest_prepare_category` // obf
		 *  - `rest_prepare_post_tag` // obf
		 * // obf
		 * Allows modification of the term data right before it is returned. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response  $v_wxcml  The response object. // obf
		 * @param WP_Term           $v_uupgk      The original term object. // obf
		 * @param WP_REST_Request   $v_qdvpp   Request used to generate the response. // obf
		 */ // obf
		return apply_filters( "rest_prepare_{$v_haqiz->taxonomy}", $v_wxcml, $v_uupgk, $v_qdvpp ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Term $v_vsglk Term object. // obf
	 * @return array Links for the given term. // obf
	 */ // obf
	protected function prepare_links( $v_vsglk ) { // obf
		$v_cuwsu = array( // obf
			'self'       => array( // obf
				'href' => rest_url( rest_get_route_for_term( $v_vsglk ) ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( rest_get_route_for_taxonomy_items( $v_haqiz->taxonomy ) ), // obf
			), // obf
			'about'      => array( // obf
				'href' => rest_url( sprintf( 'wp/v2/taxonomies/%s', $v_haqiz->taxonomy ) ), // obf
			), // obf
		); // obf

		if ( $v_vsglk->parent ) { // obf
			$v_myflx = get_term( (int) $v_vsglk->parent, $v_vsglk->taxonomy ); // obf

			if ( $v_myflx ) { // obf
				$v_cuwsu['up'] = array( // obf
					'href'       => rest_url( rest_get_route_for_term( $v_myflx ) ), // obf
					'embeddable' => true, // obf
				); // obf
			} // obf
		} // obf

		$v_mjhmu = get_taxonomy( $v_vsglk->taxonomy ); // obf

		if ( empty( $v_mjhmu->object_type ) ) { // obf
			return $v_cuwsu; // obf
		} // obf

		$v_jszml = array(); // obf

		foreach ( $v_mjhmu->object_type as $v_bpoja ) { // obf
			$v_tyhsj = rest_get_route_for_post_type_items( $v_bpoja ); // obf

			if ( empty( $v_tyhsj ) ) { // obf
				continue; // obf
			} // obf

			$v_jszml[] = array( // obf
				'href' => add_query_arg( $v_haqiz->rest_base, $v_vsglk->term_id, rest_url( $v_tyhsj ) ), // obf
			); // obf
		} // obf

		if ( ! empty( $v_jszml ) ) { // obf
			$v_cuwsu['https://api.w.org/post_type'] = $v_jszml; // obf
		} // obf

		return $v_cuwsu; // obf
	} // obf

	/** // obf
	 * Retrieves the term's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_haqiz->schema ) { // obf
			return $v_haqiz->add_additional_fields_schema( $v_haqiz->schema ); // obf
		} // obf

		$v_bikgl = array( // obf
			'$v_bikgl'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'post_tag' === $v_haqiz->taxonomy ? 'tag' : $v_haqiz->taxonomy, // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'          => array( // obf
					'description' => __( 'Unique identifier for the term.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'embed', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'count'       => array( // obf
					'description' => __( 'Number of published posts for the term.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description' => array( // obf
					'description' => __( 'HTML description of the term.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'link'        => array( // obf
					'description' => __( 'URL of the term.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view', 'embed', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'name'        => array( // obf
					'description' => __( 'HTML title for the term.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'embed', 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => 'sanitize_text_field', // obf
					), // obf
					'required'    => true, // obf
				), // obf
				'slug'        => array( // obf
					'description' => __( 'An alphanumeric identifier for the term unique to its type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'embed', 'edit' ), // obf
					'arg_options' => array( // obf
						'sanitize_callback' => array( $v_haqiz, 'sanitize_slug' ), // obf
					), // obf
				), // obf
				'taxonomy'    => array( // obf
					'description' => __( 'Type attribution for the term.' ), // obf
					'type'        => 'string', // obf
					'enum'        => array( $v_haqiz->taxonomy ), // obf
					'context'     => array( 'view', 'embed', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		$v_mqijt = get_taxonomy( $v_haqiz->taxonomy ); // obf

		if ( $v_mqijt->hierarchical ) { // obf
			$v_bikgl['properties']['parent'] = array( // obf
				'description' => __( 'The parent term ID.' ), // obf
				'type'        => 'integer', // obf
				'context'     => array( 'view', 'edit' ), // obf
			); // obf
		} // obf

		$v_bikgl['properties']['meta'] = $v_haqiz->meta->get_field_schema(); // obf

		$v_haqiz->schema = $v_bikgl; // obf

		return $v_haqiz->add_additional_fields_schema( $v_haqiz->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_bgorj = parent::get_collection_params(); // obf
		$v_mqijt     = get_taxonomy( $v_haqiz->taxonomy ); // obf

		$v_bgorj['context']['default'] = 'view'; // obf

		$v_bgorj['exclude'] = array( // obf
			'description' => __( 'Ensure result set excludes specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_bgorj['include'] = array( // obf
			'description' => __( 'Limit result set to specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		if ( ! $v_mqijt->hierarchical ) { // obf
			$v_bgorj['offset'] = array( // obf
				'description' => __( 'Offset the result set by a specific number of items.' ), // obf
				'type'        => 'integer', // obf
			); // obf
		} // obf

		$v_bgorj['order'] = array( // obf
			'description' => __( 'Order sort attribute ascending or descending.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'asc', // obf
			'enum'        => array( // obf
				'asc', // obf
				'desc', // obf
			), // obf
		); // obf

		$v_bgorj['orderby'] = array( // obf
			'description' => __( 'Sort collection by term attribute.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'name', // obf
			'enum'        => array( // obf
				'id', // obf
				'include', // obf
				'name', // obf
				'slug', // obf
				'include_slugs', // obf
				'term_group', // obf
				'description', // obf
				'count', // obf
			), // obf
		); // obf

		$v_bgorj['hide_empty'] = array( // obf
			'description' => __( 'Whether to hide terms not assigned to any posts.' ), // obf
			'type'        => 'boolean', // obf
			'default'     => false, // obf
		); // obf

		if ( $v_mqijt->hierarchical ) { // obf
			$v_bgorj['parent'] = array( // obf
				'description' => __( 'Limit result set to terms assigned to a specific parent.' ), // obf
				'type'        => 'integer', // obf
			); // obf
		} // obf

		$v_bgorj['post'] = array( // obf
			'description' => __( 'Limit result set to terms assigned to a specific post.' ), // obf
			'type'        => 'integer', // obf
			'default'     => null, // obf
		); // obf

		$v_bgorj['slug'] = array( // obf
			'description' => __( 'Limit result set to terms with one or more specific slugs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
		); // obf

		/** // obf
		 * Filters collection parameters for the terms controller. // obf
		 * // obf
		 * The dynamic part of the filter `$v_haqiz->taxonomy` refers to the taxonomy // obf
		 * slug for the controller. // obf
		 * // obf
		 * This filter registers the collection parameter, but does not map the // obf
		 * collection parameter to an internal WP_Term_Query parameter.  Use the // obf
		 * `rest_{$v_haqiz->taxonomy}_query` filter to set WP_Term_Query parameters. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array       $v_bgorj JSON Schema-formatted collection parameters. // obf
		 * @param WP_Taxonomy $v_mqijt     Taxonomy object. // obf
		 */ // obf
		return apply_filters( "rest_{$v_haqiz->taxonomy}_collection_params", $v_bgorj, $v_mqijt ); // obf
	} // obf

	/** // obf
	 * Checks that the taxonomy is valid. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_mqijt Taxonomy to check. // obf
	 * @return bool Whether the taxonomy is allowed for REST management. // obf
	 */ // obf
	protected function check_is_taxonomy_allowed( $v_mqijt ) { // obf
		$v_mjhmu = get_taxonomy( $v_mqijt ); // obf
		if ( $v_mjhmu && ! empty( $v_mjhmu->show_in_rest ) ) { // obf
			return true; // obf
		} // obf
		return false; // obf
	} // obf
} // obf