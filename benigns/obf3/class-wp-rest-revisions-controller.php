

<?php // obf
/** // obf
 * REST API: WP_REST_Revisions_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to access revisions via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Revisions_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Parent post type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_reytv; // obf

	/** // obf
	 * Instance of a revision meta fields object. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var WP_REST_Post_Meta_Fields // obf
	 */ // obf
	protected $v_yfgqe; // obf

	/** // obf
	 * Parent controller. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var WP_REST_Controller // obf
	 */ // obf
	private $v_dobkk; // obf

	/** // obf
	 * The base of the parent controller's route. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_jiqgt; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_reytv Post type of the parent. // obf
	 */ // obf
	public function __construct( $v_reytv ) { // obf
		$v_vdzaj->parent_post_type = $v_reytv; // obf
		$v_cnahg       = get_post_type_object( $v_reytv ); // obf
		$v_dobkk      = $v_cnahg->get_rest_controller(); // obf

		if ( ! $v_dobkk ) { // obf
			$v_dobkk = new WP_REST_Posts_Controller( $v_reytv ); // obf
		} // obf

		$v_vdzaj->parent_controller = $v_dobkk; // obf
		$v_vdzaj->rest_base         = 'revisions'; // obf
		$v_vdzaj->parent_base       = ! empty( $v_cnahg->rest_base ) ? $v_cnahg->rest_base : $v_cnahg->name; // obf
		$v_vdzaj->namespace         = ! empty( $v_cnahg->rest_namespace ) ? $v_cnahg->rest_namespace : 'wp/v2'; // obf
		$v_vdzaj->meta              = new WP_REST_Post_Meta_Fields( $v_reytv ); // obf
	} // obf

	/** // obf
	 * Registers the routes for revisions based on post types supporting revisions. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_vdzaj->namespace, // obf
			'/' . $v_vdzaj->parent_base . '/(?P<parent>[\d]+)/' . $v_vdzaj->rest_base, // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description' => __( 'The ID for the parent of the revision.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_vdzaj, 'get_items' ), // obf
					'permission_callback' => array( $v_vdzaj, 'get_items_permissions_check' ), // obf
					'args'                => $v_vdzaj->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_vdzaj, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_vdzaj->namespace, // obf
			'/' . $v_vdzaj->parent_base . '/(?P<parent>[\d]+)/' . $v_vdzaj->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description' => __( 'The ID for the parent of the revision.' ), // obf
						'type'        => 'integer', // obf
					), // obf
					'id'     => array( // obf
						'description' => __( 'Unique identifier for the revision.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_vdzaj, 'get_item' ), // obf
					'permission_callback' => array( $v_vdzaj, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_vdzaj->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_vdzaj, 'delete_item' ), // obf
					'permission_callback' => array( $v_vdzaj, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force' => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Required to be true, as revisions do not support trashing.' ), // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_vdzaj, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Get the parent post, if the ID is valid. // obf
	 * // obf
	 * @since 4.7.2 // obf
	 * // obf
	 * @param int $v_lxpif Supplied ID. // obf
	 * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_parent( $v_lxpif ) { // obf
		$v_ugekx = new WP_Error( // obf
			'rest_post_invalid_parent', // obf
			__( 'Invalid post parent ID.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		if ( (int) $v_lxpif <= 0 ) { // obf
			return $v_ugekx; // obf
		} // obf

		$v_mviav = get_post( (int) $v_lxpif ); // obf

		if ( empty( $v_mviav ) || empty( $v_mviav->ID ) // obf
			|| $v_vdzaj->parent_post_type !== $v_mviav->post_type // obf
		) { // obf
			return $v_ugekx; // obf
		} // obf

		return $v_mviav; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get revisions. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pqkbu Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_pqkbu ) { // obf
		$v_bzlqr = $v_vdzaj->get_parent( $v_pqkbu['parent'] ); // obf
		if ( is_wp_error( $v_bzlqr ) ) { // obf
			return $v_bzlqr; // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_bzlqr->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read', // obf
				__( 'Sorry, you are not allowed to view revisions of this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Get the revision, if the ID is valid. // obf
	 * // obf
	 * @since 4.7.2 // obf
	 * // obf
	 * @param int $v_dovgw Supplied ID. // obf
	 * @return WP_Post|WP_Error Revision post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_revision( $v_dovgw ) { // obf
		$v_ugekx = new WP_Error( // obf
			'rest_post_invalid_id', // obf
			__( 'Invalid revision ID.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		if ( (int) $v_dovgw <= 0 ) { // obf
			return $v_ugekx; // obf
		} // obf

		$v_mcqcs = get_post( (int) $v_dovgw ); // obf
		if ( empty( $v_mcqcs ) || empty( $v_mcqcs->ID ) || 'revision' !== $v_mcqcs->post_type ) { // obf
			return $v_ugekx; // obf
		} // obf

		return $v_mcqcs; // obf
	} // obf

	/** // obf
	 * Gets a collection of revisions. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pqkbu Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_pqkbu ) { // obf
		$v_bzlqr = $v_vdzaj->get_parent( $v_pqkbu['parent'] ); // obf
		if ( is_wp_error( $v_bzlqr ) ) { // obf
			return $v_bzlqr; // obf
		} // obf

		// Ensure a search string is set in case the orderby is set to 'relevance'. // obf
		if ( ! empty( $v_pqkbu['orderby'] ) && 'relevance' === $v_pqkbu['orderby'] && empty( $v_pqkbu['search'] ) ) { // obf
			return new WP_Error( // obf
				'rest_no_search_term_defined', // obf
				__( 'You need to define a search term to order by relevance.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Ensure an include parameter is set in case the orderby is set to 'include'. // obf
		if ( ! empty( $v_pqkbu['orderby'] ) && 'include' === $v_pqkbu['orderby'] && empty( $v_pqkbu['include'] ) ) { // obf
			return new WP_Error( // obf
				'rest_orderby_include_missing_include', // obf
				__( 'You need to define an include parameter to order by include.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_skwzo = $v_pqkbu->is_method( 'HEAD' ); // obf

		if ( wp_revisions_enabled( $v_bzlqr ) ) { // obf
			$v_nwfxs = $v_vdzaj->get_collection_params(); // obf
			$v_tmjgh       = array( // obf
				'post_parent'      => $v_bzlqr->ID, // obf
				'post_type'        => 'revision', // obf
				'post_status'      => 'inherit', // obf
				'posts_per_page'   => -1, // obf
				'orderby'          => 'date ID', // obf
				'order'            => 'DESC', // obf
				'suppress_filters' => true, // obf
			); // obf

			$v_ygfdo = array( // obf
				'exclude'  => 'post__not_in', // obf
				'include'  => 'post__in', // obf
				'offset'   => 'offset', // obf
				'order'    => 'order', // obf
				'orderby'  => 'orderby', // obf
				'page'     => 'paged', // obf
				'per_page' => 'posts_per_page', // obf
				'search'   => 's', // obf
			); // obf

			foreach ( $v_ygfdo as $v_lbsud => $v_cwbcd ) { // obf
				if ( isset( $v_nwfxs[ $v_lbsud ], $v_pqkbu[ $v_lbsud ] ) ) { // obf
					$v_tmjgh[ $v_cwbcd ] = $v_pqkbu[ $v_lbsud ]; // obf
				} // obf
			} // obf

			// For backward-compatibility, 'date' needs to resolve to 'date ID'. // obf
			if ( isset( $v_tmjgh['orderby'] ) && 'date' === $v_tmjgh['orderby'] ) { // obf
				$v_tmjgh['orderby'] = 'date ID'; // obf
			} // obf

			if ( $v_skwzo ) { // obf
				// Force the 'fields' argument. For HEAD requests, only post IDs are required to calculate pagination. // obf
				$v_tmjgh['fields'] = 'ids'; // obf
				// Disable priming post meta for HEAD requests to improve performance. // obf
				$v_tmjgh['update_post_term_cache'] = false; // obf
				$v_tmjgh['update_post_meta_cache'] = false; // obf
			} // obf

			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
			$v_tmjgh       = apply_filters( 'rest_revision_query', $v_tmjgh, $v_pqkbu ); // obf
			$v_vheod = $v_vdzaj->prepare_items_query( $v_tmjgh, $v_pqkbu ); // obf

			$v_wlmba = new WP_Query(); // obf
			$v_oramu       = $v_wlmba->query( $v_vheod ); // obf
			$v_anisf          = isset( $v_vheod['offset'] ) ? (int) $v_vheod['offset'] : 0; // obf
			$v_oyolg            = isset( $v_vheod['paged'] ) ? (int) $v_vheod['paged'] : 0; // obf
			$v_kyvvt = $v_wlmba->found_posts; // obf

			if ( $v_kyvvt < 1 ) { // obf
				// Out-of-bounds, run the query again without LIMIT for total count. // obf
				unset( $v_vheod['paged'], $v_vheod['offset'] ); // obf

				$v_vjida = new WP_Query(); // obf
				$v_vjida->query( $v_vheod ); // obf

				$v_kyvvt = $v_vjida->found_posts; // obf
			} // obf

			if ( $v_wlmba->query_vars['posts_per_page'] > 0 ) { // obf
				$v_jtzge = (int) ceil( $v_kyvvt / (int) $v_wlmba->query_vars['posts_per_page'] ); // obf
			} else { // obf
				$v_jtzge = $v_kyvvt > 0 ? 1 : 0; // obf
			} // obf

			if ( $v_kyvvt > 0 ) { // obf
				if ( $v_anisf >= $v_kyvvt ) { // obf
					return new WP_Error( // obf
						'rest_revision_invalid_offset_number', // obf
						__( 'The offset number requested is larger than or equal to the number of available revisions.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} elseif ( ! $v_anisf && $v_oyolg > $v_jtzge ) { // obf
					return new WP_Error( // obf
						'rest_revision_invalid_page_number', // obf
						__( 'The page number requested is larger than the number of pages available.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
			} // obf
		} else { // obf
			$v_oramu       = array(); // obf
			$v_kyvvt = 0; // obf
			$v_jtzge       = 0; // obf
			$v_oyolg            = (int) $v_pqkbu['page']; // obf
		} // obf

		if ( ! $v_skwzo ) { // obf
			$v_jpghv = array(); // obf

			foreach ( $v_oramu as $v_mcqcs ) { // obf
				$v_naksl       = $v_vdzaj->prepare_item_for_response( $v_mcqcs, $v_pqkbu ); // obf
				$v_jpghv[] = $v_vdzaj->prepare_response_for_collection( $v_naksl ); // obf
			} // obf

			$v_jpghv = rest_ensure_response( $v_jpghv ); // obf
		} else { // obf
			$v_jpghv = new WP_REST_Response( array() ); // obf
		} // obf

		$v_jpghv->header( 'X-WP-Total', (int) $v_kyvvt ); // obf
		$v_jpghv->header( 'X-WP-TotalPages', (int) $v_jtzge ); // obf

		$v_wcibx = $v_pqkbu->get_query_params(); // obf
		$v_jzhxc      = rest_url( sprintf( '%s/%s/%d/%s', $v_vdzaj->namespace, $v_vdzaj->parent_base, $v_pqkbu['parent'], $v_vdzaj->rest_base ) ); // obf
		$v_wlmwr           = add_query_arg( urlencode_deep( $v_wcibx ), $v_jzhxc ); // obf

		if ( $v_oyolg > 1 ) { // obf
			$v_ajzon = $v_oyolg - 1; // obf

			if ( $v_ajzon > $v_jtzge ) { // obf
				$v_ajzon = $v_jtzge; // obf
			} // obf

			$v_ntjgc = add_query_arg( 'page', $v_ajzon, $v_wlmwr ); // obf
			$v_jpghv->link_header( 'prev', $v_ntjgc ); // obf
		} // obf
		if ( $v_jtzge > $v_oyolg ) { // obf
			$v_oqecj = $v_oyolg + 1; // obf
			$v_nixlz = add_query_arg( 'page', $v_oqecj, $v_wlmwr ); // obf

			$v_jpghv->link_header( 'next', $v_nixlz ); // obf
		} // obf

		return $v_jpghv; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get a specific revision. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pqkbu Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_pqkbu ) { // obf
		return $v_vdzaj->get_items_permissions_check( $v_pqkbu ); // obf
	} // obf

	/** // obf
	 * Retrieves one revision from the collection. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.5.0 Added a condition to check that parent id matches revision parent id. // obf
	 * // obf
	 * @param WP_REST_Request $v_pqkbu Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_pqkbu ) { // obf
		$v_bzlqr = $v_vdzaj->get_parent( $v_pqkbu['parent'] ); // obf
		if ( is_wp_error( $v_bzlqr ) ) { // obf
			return $v_bzlqr; // obf
		} // obf

		$v_mcqcs = $v_vdzaj->get_revision( $v_pqkbu['id'] ); // obf
		if ( is_wp_error( $v_mcqcs ) ) { // obf
			return $v_mcqcs; // obf
		} // obf

		if ( (int) $v_bzlqr->ID !== (int) $v_mcqcs->post_parent ) { // obf
			return new WP_Error( // obf
				'rest_revision_parent_id_mismatch', // obf
				/* translators: %d: A post id. */ // obf
				sprintf( __( 'The revision does not belong to the specified parent with id of "%d"' ), $v_bzlqr->ID ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_jpghv = $v_vdzaj->prepare_item_for_response( $v_mcqcs, $v_pqkbu ); // obf
		return rest_ensure_response( $v_jpghv ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a revision. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pqkbu Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_pqkbu ) { // obf
		$v_bzlqr = $v_vdzaj->get_parent( $v_pqkbu['parent'] ); // obf
		if ( is_wp_error( $v_bzlqr ) ) { // obf
			return $v_bzlqr; // obf
		} // obf

		if ( ! current_user_can( 'delete_post', $v_bzlqr->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete revisions of this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_mcqcs = $v_vdzaj->get_revision( $v_pqkbu['id'] ); // obf
		if ( is_wp_error( $v_mcqcs ) ) { // obf
			return $v_mcqcs; // obf
		} // obf

		$v_jpghv = $v_vdzaj->get_items_permissions_check( $v_pqkbu ); // obf
		if ( ! $v_jpghv || is_wp_error( $v_jpghv ) ) { // obf
			return $v_jpghv; // obf
		} // obf

		if ( ! current_user_can( 'delete_post', $v_mcqcs->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete this revision.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a single revision. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pqkbu Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_pqkbu ) { // obf
		$v_mcqcs = $v_vdzaj->get_revision( $v_pqkbu['id'] ); // obf
		if ( is_wp_error( $v_mcqcs ) ) { // obf
			return $v_mcqcs; // obf
		} // obf

		$v_xfwcu = isset( $v_pqkbu['force'] ) ? (bool) $v_pqkbu['force'] : false; // obf

		// We don't support trashing for revisions. // obf
		if ( ! $v_xfwcu ) { // obf
			return new WP_Error( // obf
				'rest_trash_not_supported', // obf
				/* translators: %s: force=true */ // obf
				sprintf( __( "Revisions do not support trashing. Set '%s' to delete." ), 'force=true' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		$v_bbzbf = $v_vdzaj->prepare_item_for_response( $v_mcqcs, $v_pqkbu ); // obf

		$v_rzsvu = wp_delete_post( $v_pqkbu['id'], true ); // obf

		/** // obf
		 * Fires after a revision is deleted via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Post|false|null $v_rzsvu The revision object (if it was deleted or moved to the Trash successfully) // obf
		 *                                   or false or null (failure). If the revision was moved to the Trash, $v_rzsvu represents // obf
		 *                                   its new state; if it was deleted, $v_rzsvu represents its state before deletion. // obf
		 * @param WP_REST_Request $v_pqkbu The request sent to the API. // obf
		 */ // obf
		do_action( 'rest_delete_revision', $v_rzsvu, $v_pqkbu ); // obf

		if ( ! $v_rzsvu ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'The post cannot be deleted.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		$v_jpghv = new WP_REST_Response(); // obf
		$v_jpghv->set_data( // obf
			array( // obf
				'deleted'  => true, // obf
				'previous' => $v_bbzbf->get_data(), // obf
			) // obf
		); // obf
		return $v_jpghv; // obf
	} // obf

	/** // obf
	 * Determines the allowed query_vars for a get_items() response and prepares // obf
	 * them for WP_Query. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array           $v_hvtfk Optional. Prepared WP_Query arguments. Default empty array. // obf
	 * @param WP_REST_Request $v_pqkbu       Optional. Full details about the request. // obf
	 * @return array Items query arguments. // obf
	 */ // obf
	protected function prepare_items_query( $v_hvtfk = array(), $v_pqkbu = null ) { // obf
		$v_vheod = array(); // obf

		foreach ( $v_hvtfk as $v_mhquj => $v_lqovz ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
			$v_vheod[ $v_mhquj ] = apply_filters( "rest_query_var-{$v_mhquj}", $v_lqovz ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
		} // obf

		// Map to proper WP_Query orderby param. // obf
		if ( isset( $v_vheod['orderby'] ) && isset( $v_pqkbu['orderby'] ) ) { // obf
			$v_pertg = array( // obf
				'id'            => 'ID', // obf
				'include'       => 'post__in', // obf
				'slug'          => 'post_name', // obf
				'include_slugs' => 'post_name__in', // obf
			); // obf

			if ( isset( $v_pertg[ $v_pqkbu['orderby'] ] ) ) { // obf
				$v_vheod['orderby'] = $v_pertg[ $v_pqkbu['orderby'] ]; // obf
			} // obf
		} // obf

		return $v_vheod; // obf
	} // obf

	/** // obf
	 * Prepares the revision for the REST response. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_kdstb` to `$v_atlio` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @global WP_Post $v_kdstb Global post object. // obf
	 * // obf
	 * @param WP_Post         $v_atlio    Post revision object. // obf
	 * @param WP_REST_Request $v_pqkbu Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_atlio, $v_pqkbu ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_kdstb = $v_atlio; // obf

		$v_wylrl['post'] = $v_kdstb; // obf

		setup_postdata( $v_kdstb ); // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_pqkbu->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-revisions-controller.php */ // obf
			return apply_filters( 'rest_prepare_revision', new WP_REST_Response( array() ), $v_kdstb, $v_pqkbu ); // obf
		} // obf

		$v_bgfxl = $v_vdzaj->get_fields_for_response( $v_pqkbu ); // obf
		$v_naksl   = array(); // obf

		if ( in_array( 'author', $v_bgfxl, true ) ) { // obf
			$v_naksl['author'] = (int) $v_kdstb->post_author; // obf
		} // obf

		if ( in_array( 'date', $v_bgfxl, true ) ) { // obf
			$v_naksl['date'] = $v_vdzaj->prepare_date_response( $v_kdstb->post_date_gmt, $v_kdstb->post_date ); // obf
		} // obf

		if ( in_array( 'date_gmt', $v_bgfxl, true ) ) { // obf
			$v_naksl['date_gmt'] = $v_vdzaj->prepare_date_response( $v_kdstb->post_date_gmt ); // obf
		} // obf

		if ( in_array( 'id', $v_bgfxl, true ) ) { // obf
			$v_naksl['id'] = $v_kdstb->ID; // obf
		} // obf

		if ( in_array( 'modified', $v_bgfxl, true ) ) { // obf
			$v_naksl['modified'] = $v_vdzaj->prepare_date_response( $v_kdstb->post_modified_gmt, $v_kdstb->post_modified ); // obf
		} // obf

		if ( in_array( 'modified_gmt', $v_bgfxl, true ) ) { // obf
			$v_naksl['modified_gmt'] = $v_vdzaj->prepare_date_response( $v_kdstb->post_modified_gmt ); // obf
		} // obf

		if ( in_array( 'parent', $v_bgfxl, true ) ) { // obf
			$v_naksl['parent'] = (int) $v_kdstb->post_parent; // obf
		} // obf

		if ( in_array( 'slug', $v_bgfxl, true ) ) { // obf
			$v_naksl['slug'] = $v_kdstb->post_name; // obf
		} // obf

		if ( in_array( 'guid', $v_bgfxl, true ) ) { // obf
			$v_naksl['guid'] = array( // obf
				/** This filter is documented in wp-includes/post-template.php */ // obf
				'rendered' => apply_filters( 'get_the_guid', $v_kdstb->guid, $v_kdstb->ID ), // obf
				'raw'      => $v_kdstb->guid, // obf
			); // obf
		} // obf

		if ( in_array( 'title', $v_bgfxl, true ) ) { // obf
			$v_naksl['title'] = array( // obf
				'raw'      => $v_kdstb->post_title, // obf
				'rendered' => get_the_title( $v_kdstb->ID ), // obf
			); // obf
		} // obf

		if ( in_array( 'content', $v_bgfxl, true ) ) { // obf

			$v_naksl['content'] = array( // obf
				'raw'      => $v_kdstb->post_content, // obf
				/** This filter is documented in wp-includes/post-template.php */ // obf
				'rendered' => apply_filters( 'the_content', $v_kdstb->post_content ), // obf
			); // obf
		} // obf

		if ( in_array( 'excerpt', $v_bgfxl, true ) ) { // obf
			$v_naksl['excerpt'] = array( // obf
				'raw'      => $v_kdstb->post_excerpt, // obf
				'rendered' => $v_vdzaj->prepare_excerpt_response( $v_kdstb->post_excerpt, $v_kdstb ), // obf
			); // obf
		} // obf

		if ( rest_is_field_included( 'meta', $v_bgfxl ) ) { // obf
			$v_naksl['meta'] = $v_vdzaj->meta->get_value( $v_kdstb->ID, $v_pqkbu ); // obf
		} // obf

		$v_zprrx  = ! empty( $v_pqkbu['context'] ) ? $v_pqkbu['context'] : 'view'; // obf
		$v_naksl     = $v_vdzaj->add_additional_fields_to_object( $v_naksl, $v_pqkbu ); // obf
		$v_naksl     = $v_vdzaj->filter_response_by_context( $v_naksl, $v_zprrx ); // obf
		$v_jpghv = rest_ensure_response( $v_naksl ); // obf

		if ( ! empty( $v_naksl['parent'] ) ) { // obf
			$v_jpghv->add_link( 'parent', rest_url( rest_get_route_for_post( $v_naksl['parent'] ) ) ); // obf
		} // obf

		/** // obf
		 * Filters a revision returned from the REST API. // obf
		 * // obf
		 * Allows modification of the revision right before it is returned. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_jpghv The response object. // obf
		 * @param WP_Post          $v_kdstb     The original revision object. // obf
		 * @param WP_REST_Request  $v_pqkbu  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_revision', $v_jpghv, $v_kdstb, $v_pqkbu ); // obf
	} // obf

	/** // obf
	 * Checks the post_date_gmt or modified_gmt and prepare any post or // obf
	 * modified date for single post output. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string      $v_inmsu GMT publication time. // obf
	 * @param string|null $v_adhsv     Optional. Local publication time. Default null. // obf
	 * @return string|null ISO8601/RFC3339 formatted datetime, otherwise null. // obf
	 */ // obf
	protected function prepare_date_response( $v_inmsu, $v_adhsv = null ) { // obf
		if ( '0000-00-00 00:00:00' === $v_inmsu ) { // obf
			return null; // obf
		} // obf

		if ( isset( $v_adhsv ) ) { // obf
			return mysql_to_rfc3339( $v_adhsv ); // obf
		} // obf

		return mysql_to_rfc3339( $v_inmsu ); // obf
	} // obf

	/** // obf
	 * Retrieves the revision's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_vdzaj->schema ) { // obf
			return $v_vdzaj->add_additional_fields_schema( $v_vdzaj->schema ); // obf
		} // obf

		$v_jqtnx = array( // obf
			'$v_jqtnx'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => "{$v_vdzaj->parent_post_type}-revision", // obf
			'type'       => 'object', // obf
			// Base properties for every Revision. // obf
			'properties' => array( // obf
				'author'       => array( // obf
					'description' => __( 'The ID for the author of the revision.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'date'         => array( // obf
					'description' => __( "The date the revision was published, in the site's timezone." ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'date_gmt'     => array( // obf
					'description' => __( 'The date the revision was published, as GMT.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'guid'         => array( // obf
					'description' => __( 'GUID for the revision, as it exists in the database.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'id'           => array( // obf
					'description' => __( 'Unique identifier for the revision.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'modified'     => array( // obf
					'description' => __( "The date the revision was last modified, in the site's timezone." ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'modified_gmt' => array( // obf
					'description' => __( 'The date the revision was last modified, as GMT.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'parent'       => array( // obf
					'description' => __( 'The ID for the parent of the revision.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'slug'         => array( // obf
					'description' => __( 'An alphanumeric identifier for the revision unique to its type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
			), // obf
		); // obf

		$v_eojgg = $v_vdzaj->parent_controller->get_item_schema(); // obf

		if ( ! empty( $v_eojgg['properties']['title'] ) ) { // obf
			$v_jqtnx['properties']['title'] = $v_eojgg['properties']['title']; // obf
		} // obf

		if ( ! empty( $v_eojgg['properties']['content'] ) ) { // obf
			$v_jqtnx['properties']['content'] = $v_eojgg['properties']['content']; // obf
		} // obf

		if ( ! empty( $v_eojgg['properties']['excerpt'] ) ) { // obf
			$v_jqtnx['properties']['excerpt'] = $v_eojgg['properties']['excerpt']; // obf
		} // obf

		if ( ! empty( $v_eojgg['properties']['guid'] ) ) { // obf
			$v_jqtnx['properties']['guid'] = $v_eojgg['properties']['guid']; // obf
		} // obf

		$v_jqtnx['properties']['meta'] = $v_vdzaj->meta->get_field_schema(); // obf

		$v_vdzaj->schema = $v_jqtnx; // obf

		return $v_vdzaj->add_additional_fields_schema( $v_vdzaj->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_wdcfb = parent::get_collection_params(); // obf

		$v_wdcfb['context']['default'] = 'view'; // obf

		unset( $v_wdcfb['per_page']['default'] ); // obf

		$v_wdcfb['exclude'] = array( // obf
			'description' => __( 'Ensure result set excludes specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_wdcfb['include'] = array( // obf
			'description' => __( 'Limit result set to specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_wdcfb['offset'] = array( // obf
			'description' => __( 'Offset the result set by a specific number of items.' ), // obf
			'type'        => 'integer', // obf
		); // obf

		$v_wdcfb['order'] = array( // obf
			'description' => __( 'Order sort attribute ascending or descending.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'desc', // obf
			'enum'        => array( 'asc', 'desc' ), // obf
		); // obf

		$v_wdcfb['orderby'] = array( // obf
			'description' => __( 'Sort collection by object attribute.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'date', // obf
			'enum'        => array( // obf
				'date', // obf
				'id', // obf
				'include', // obf
				'relevance', // obf
				'slug', // obf
				'include_slugs', // obf
				'title', // obf
			), // obf
		); // obf

		return $v_wdcfb; // obf
	} // obf

	/** // obf
	 * Checks the post excerpt and prepare it for single post output. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string  $v_xolei The post excerpt. // obf
	 * @param WP_Post $v_kdstb    Post revision object. // obf
	 * @return string Prepared excerpt or empty string. // obf
	 */ // obf
	protected function prepare_excerpt_response( $v_xolei, $v_kdstb ) { // obf

		/** This filter is documented in wp-includes/post-template.php */ // obf
		$v_xolei = apply_filters( 'the_excerpt', $v_xolei, $v_kdstb ); // obf

		if ( empty( $v_xolei ) ) { // obf
			return ''; // obf
		} // obf

		return $v_xolei; // obf
	} // obf
} // obf