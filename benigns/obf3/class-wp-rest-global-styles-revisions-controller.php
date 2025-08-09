

<?php // obf
/** // obf
 * REST API: WP_REST_Global_Styles_Revisions_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.3.0 // obf
 */ // obf

/** // obf
 * Core class used to access global styles revisions via the REST API. // obf
 * // obf
 * @since 6.3.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Global_Styles_Revisions_Controller extends WP_REST_Revisions_Controller { // obf
	/** // obf
	 * Parent controller. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var WP_REST_Controller // obf
	 */ // obf
	private $v_zznep; // obf

	/** // obf
	 * The base of the parent controller's route. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_dokrx; // obf

	/** // obf
	 * Parent post type. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_tuthd; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.6.0 Extends class from WP_REST_Revisions_Controller. // obf
	 * // obf
	 * @param string $v_tuthd Post type of the parent. // obf
	 */ // obf
	public function __construct( $v_tuthd = 'wp_global_styles' ) { // obf
		parent::__construct( $v_tuthd ); // obf
		$v_xaiys  = get_post_type_object( $v_tuthd ); // obf
		$v_zznep = $v_xaiys->get_rest_controller(); // obf

		if ( ! $v_zznep ) { // obf
			$v_zznep = new WP_REST_Global_Styles_Controller( $v_tuthd ); // obf
		} // obf

		$v_eccwg->parent_controller = $v_zznep; // obf
		$v_eccwg->rest_base         = 'revisions'; // obf
		$v_eccwg->parent_base       = ! empty( $v_xaiys->rest_base ) ? $v_xaiys->rest_base : $v_xaiys->name; // obf
		$v_eccwg->namespace         = ! empty( $v_xaiys->rest_namespace ) ? $v_xaiys->rest_namespace : 'wp/v2'; // obf
	} // obf

	/** // obf
	 * Registers the controller's routes. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.6.0 Added route to fetch individual global styles revisions. // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_eccwg->namespace, // obf
			'/' . $v_eccwg->parent_base . '/(?P<parent>[\d]+)/' . $v_eccwg->rest_base, // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description' => __( 'The ID for the parent of the revision.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_eccwg, 'get_items' ), // obf
					'permission_callback' => array( $v_eccwg, 'get_items_permissions_check' ), // obf
					'args'                => $v_eccwg->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_eccwg, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_eccwg->namespace, // obf
			'/' . $v_eccwg->parent_base . '/(?P<parent>[\d]+)/' . $v_eccwg->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description' => __( 'The ID for the parent of the global styles revision.' ), // obf
						'type'        => 'integer', // obf
					), // obf
					'id'     => array( // obf
						'description' => __( 'Unique identifier for the global styles revision.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_eccwg, 'get_item' ), // obf
					'permission_callback' => array( $v_eccwg, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_eccwg->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_eccwg, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns decoded JSON from post content string, // obf
	 * or a 404 if not found. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param string $v_udmgi Encoded JSON from global styles custom post content. // obf
	 * @return Array|WP_Error // obf
	 */ // obf
	protected function get_decoded_global_styles_json( $v_udmgi ) { // obf
		$v_aloue = json_decode( $v_udmgi, true ); // obf

		if ( is_array( $v_aloue ) && isset( $v_aloue['isGlobalStylesUserThemeJSON'] ) && true === $v_aloue['isGlobalStylesUserThemeJSON'] ) { // obf
			return $v_aloue; // obf
		} // obf

		return new WP_Error( // obf
			'rest_global_styles_not_found', // obf
			__( 'Cannot find user global styles revisions.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns paginated revisions of the given global styles config custom post type. // obf
	 * // obf
	 * The bulk of the body is taken from WP_REST_Revisions_Controller->get_items, // obf
	 * but global styles does not require as many parameters. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_qchgz The request instance. // obf
	 * @return WP_REST_Response|WP_Error // obf
	 */ // obf
	public function get_items( $v_qchgz ) { // obf
		$v_vedif = $v_eccwg->get_parent( $v_qchgz['parent'] ); // obf

		if ( is_wp_error( $v_vedif ) ) { // obf
			return $v_vedif; // obf
		} // obf

		$v_tlnwv = $v_eccwg->get_decoded_global_styles_json( $v_vedif->post_content ); // obf

		if ( is_wp_error( $v_tlnwv ) ) { // obf
			return $v_tlnwv; // obf
		} // obf

		$v_nkcbq = $v_qchgz->is_method( 'HEAD' ); // obf

		if ( wp_revisions_enabled( $v_vedif ) ) { // obf
			$v_gpdib = $v_eccwg->get_collection_params(); // obf
			$v_sqtyd = array( // obf
				'post_parent'    => $v_vedif->ID, // obf
				'post_type'      => 'revision', // obf
				'post_status'    => 'inherit', // obf
				'posts_per_page' => -1, // obf
				'orderby'        => 'date ID', // obf
				'order'          => 'DESC', // obf
			); // obf

			$v_sulwm = array( // obf
				'offset'   => 'offset', // obf
				'page'     => 'paged', // obf
				'per_page' => 'posts_per_page', // obf
			); // obf

			foreach ( $v_sulwm as $v_mtdxj => $v_qdzid ) { // obf
				if ( isset( $v_gpdib[ $v_mtdxj ], $v_qchgz[ $v_mtdxj ] ) ) { // obf
					$v_sqtyd[ $v_qdzid ] = $v_qchgz[ $v_mtdxj ]; // obf
				} // obf
			} // obf

			if ( $v_nkcbq ) { // obf
				// Force the 'fields' argument. For HEAD requests, only post IDs are required to calculate pagination. // obf
				$v_sqtyd['fields'] = 'ids'; // obf
				// Disable priming post meta for HEAD requests to improve performance. // obf
				$v_sqtyd['update_post_term_cache'] = false; // obf
				$v_sqtyd['update_post_meta_cache'] = false; // obf
			} // obf

			$v_jwsed = new WP_Query(); // obf
			$v_vtpby       = $v_jwsed->query( $v_sqtyd ); // obf
			$v_kgeaa          = isset( $v_sqtyd['offset'] ) ? (int) $v_sqtyd['offset'] : 0; // obf
			$v_skqvq            = isset( $v_sqtyd['paged'] ) ? (int) $v_sqtyd['paged'] : 0; // obf
			$v_vqydp = $v_jwsed->found_posts; // obf

			if ( $v_vqydp < 1 ) { // obf
				// Out-of-bounds, run the query again without LIMIT for total count. // obf
				unset( $v_sqtyd['paged'], $v_sqtyd['offset'] ); // obf
				$v_dkhwi = new WP_Query(); // obf
				$v_dkhwi->query( $v_sqtyd ); // obf

				$v_vqydp = $v_dkhwi->found_posts; // obf
			} // obf

			if ( $v_jwsed->query_vars['posts_per_page'] > 0 ) { // obf
				$v_lorxr = (int) ceil( $v_vqydp / (int) $v_jwsed->query_vars['posts_per_page'] ); // obf
			} else { // obf
				$v_lorxr = $v_vqydp > 0 ? 1 : 0; // obf
			} // obf
			if ( $v_vqydp > 0 ) { // obf
				if ( $v_kgeaa >= $v_vqydp ) { // obf
					return new WP_Error( // obf
						'rest_revision_invalid_offset_number', // obf
						__( 'The offset number requested is larger than or equal to the number of available revisions.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} elseif ( ! $v_kgeaa && $v_skqvq > $v_lorxr ) { // obf
					return new WP_Error( // obf
						'rest_revision_invalid_page_number', // obf
						__( 'The page number requested is larger than the number of pages available.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
			} // obf
		} else { // obf
			$v_vtpby       = array(); // obf
			$v_vqydp = 0; // obf
			$v_lorxr       = 0; // obf
			$v_skqvq            = (int) $v_qchgz['page']; // obf
		} // obf

		if ( ! $v_nkcbq ) { // obf
			$v_epapx = array(); // obf

			foreach ( $v_vtpby as $v_glcea ) { // obf
				$v_qqsmh       = $v_eccwg->prepare_item_for_response( $v_glcea, $v_qchgz ); // obf
				$v_epapx[] = $v_eccwg->prepare_response_for_collection( $v_qqsmh ); // obf
			} // obf

			$v_epapx = rest_ensure_response( $v_epapx ); // obf
		} else { // obf
			$v_epapx = new WP_REST_Response( array() ); // obf
		} // obf

		$v_epapx->header( 'X-WP-Total', (int) $v_vqydp ); // obf
		$v_epapx->header( 'X-WP-TotalPages', (int) $v_lorxr ); // obf

		$v_ywsye = $v_qchgz->get_query_params(); // obf
		$v_flula      = rest_url( sprintf( '%s/%s/%d/%s', $v_eccwg->namespace, $v_eccwg->parent_base, $v_qchgz['parent'], $v_eccwg->rest_base ) ); // obf
		$v_qukaq           = add_query_arg( urlencode_deep( $v_ywsye ), $v_flula ); // obf

		if ( $v_skqvq > 1 ) { // obf
			$v_ojsgu = $v_skqvq - 1; // obf

			if ( $v_ojsgu > $v_lorxr ) { // obf
				$v_ojsgu = $v_lorxr; // obf
			} // obf

			$v_mbzwc = add_query_arg( 'page', $v_ojsgu, $v_qukaq ); // obf
			$v_epapx->link_header( 'prev', $v_mbzwc ); // obf
		} // obf
		if ( $v_lorxr > $v_skqvq ) { // obf
			$v_bbccs = $v_skqvq + 1; // obf
			$v_tioph = add_query_arg( 'page', $v_bbccs, $v_qukaq ); // obf

			$v_epapx->link_header( 'next', $v_tioph ); // obf
		} // obf

		return $v_epapx; // obf
	} // obf

	/** // obf
	 * Prepares the revision for the REST response. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.6.0 Added resolved URI links to the response. // obf
	 * // obf
	 * @param WP_Post         $v_dsdtk    Post revision object. // obf
	 * @param WP_REST_Request $v_qchgz Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_dsdtk, $v_qchgz ) { // obf
		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_qchgz->is_method( 'HEAD' ) ) { // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_vedif               = $v_eccwg->get_parent( $v_qchgz['parent'] ); // obf
		$v_tlnwv = $v_eccwg->get_decoded_global_styles_json( $v_dsdtk->post_content ); // obf

		if ( is_wp_error( $v_tlnwv ) ) { // obf
			return $v_tlnwv; // obf
		} // obf

		$v_zujtj     = $v_eccwg->get_fields_for_response( $v_qchgz ); // obf
		$v_qqsmh       = array(); // obf
		$v_pawey = null; // obf

		if ( ! empty( $v_tlnwv['styles'] ) || ! empty( $v_tlnwv['settings'] ) ) { // obf
			$v_pawey           = new WP_Theme_JSON( $v_tlnwv, 'custom' ); // obf
			$v_tlnwv = $v_pawey->get_raw_data(); // obf
			if ( rest_is_field_included( 'settings', $v_zujtj ) ) { // obf
				$v_qqsmh['settings'] = ! empty( $v_tlnwv['settings'] ) ? $v_tlnwv['settings'] : new stdClass(); // obf
			} // obf
			if ( rest_is_field_included( 'styles', $v_zujtj ) ) { // obf
				$v_qqsmh['styles'] = ! empty( $v_tlnwv['styles'] ) ? $v_tlnwv['styles'] : new stdClass(); // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'author', $v_zujtj ) ) { // obf
			$v_qqsmh['author'] = (int) $v_dsdtk->post_author; // obf
		} // obf

		if ( rest_is_field_included( 'date', $v_zujtj ) ) { // obf
			$v_qqsmh['date'] = $v_eccwg->prepare_date_response( $v_dsdtk->post_date_gmt, $v_dsdtk->post_date ); // obf
		} // obf

		if ( rest_is_field_included( 'date_gmt', $v_zujtj ) ) { // obf
			$v_qqsmh['date_gmt'] = $v_eccwg->prepare_date_response( $v_dsdtk->post_date_gmt ); // obf
		} // obf

		if ( rest_is_field_included( 'id', $v_zujtj ) ) { // obf
			$v_qqsmh['id'] = (int) $v_dsdtk->ID; // obf
		} // obf

		if ( rest_is_field_included( 'modified', $v_zujtj ) ) { // obf
			$v_qqsmh['modified'] = $v_eccwg->prepare_date_response( $v_dsdtk->post_modified_gmt, $v_dsdtk->post_modified ); // obf
		} // obf

		if ( rest_is_field_included( 'modified_gmt', $v_zujtj ) ) { // obf
			$v_qqsmh['modified_gmt'] = $v_eccwg->prepare_date_response( $v_dsdtk->post_modified_gmt ); // obf
		} // obf

		if ( rest_is_field_included( 'parent', $v_zujtj ) ) { // obf
			$v_qqsmh['parent'] = (int) $v_vedif->ID; // obf
		} // obf

		$v_nexwu             = ! empty( $v_qchgz['context'] ) ? $v_qchgz['context'] : 'view'; // obf
		$v_qqsmh                = $v_eccwg->add_additional_fields_to_object( $v_qqsmh, $v_qchgz ); // obf
		$v_qqsmh                = $v_eccwg->filter_response_by_context( $v_qqsmh, $v_nexwu ); // obf
		$v_epapx            = rest_ensure_response( $v_qqsmh ); // obf
		$v_lrowh = WP_Theme_JSON_Resolver::get_resolved_theme_uris( $v_pawey ); // obf

		if ( ! empty( $v_lrowh ) ) { // obf
			$v_epapx->add_links( // obf
				array( // obf
					'https://api.w.org/theme-file' => $v_lrowh, // obf
				) // obf
			); // obf
		} // obf

		return $v_epapx; // obf
	} // obf

	/** // obf
	 * Retrieves the revision's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @since 6.6.0 Merged parent and parent controller schema data. // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_eccwg->schema ) { // obf
			return $v_eccwg->add_additional_fields_schema( $v_eccwg->schema ); // obf
		} // obf

		$v_cgdxv               = parent::get_item_schema(); // obf
		$v_uazsj        = $v_eccwg->parent_controller->get_item_schema(); // obf
		$v_cgdxv['properties'] = array_merge( $v_cgdxv['properties'], $v_uazsj['properties'] ); // obf

		unset( // obf
			$v_cgdxv['properties']['guid'], // obf
			$v_cgdxv['properties']['slug'], // obf
			$v_cgdxv['properties']['meta'], // obf
			$v_cgdxv['properties']['content'], // obf
			$v_cgdxv['properties']['title'] // obf
		); // obf

			$v_eccwg->schema = $v_cgdxv; // obf

		return $v_eccwg->add_additional_fields_schema( $v_eccwg->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * Removes params that are not supported by global styles revisions. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_vgkio = parent::get_collection_params(); // obf
		unset( // obf
			$v_vgkio['exclude'], // obf
			$v_vgkio['include'], // obf
			$v_vgkio['search'], // obf
			$v_vgkio['order'], // obf
			$v_vgkio['orderby'] // obf
		); // obf
		return $v_vgkio; // obf
	} // obf
} // obf