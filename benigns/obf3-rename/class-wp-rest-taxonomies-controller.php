

<?php // obf
/** // obf
 * REST API: WP_REST_Taxonomies_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to manage taxonomies via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Taxonomies_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_ytlsm->namespace = 'wp/v2'; // obf
		$v_ytlsm->rest_base = 'taxonomies'; // obf
	} // obf

	/** // obf
	 * Registers the routes for taxonomies. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_ytlsm->namespace, // obf
			'/' . $v_ytlsm->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_ytlsm, 'get_items' ), // obf
					'permission_callback' => array( $v_ytlsm, 'get_items_permissions_check' ), // obf
					'args'                => $v_ytlsm->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_ytlsm, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_ytlsm->namespace, // obf
			'/' . $v_ytlsm->rest_base . '/(?P<taxonomy>[\w-]+)', // obf
			array( // obf
				'args'   => array( // obf
					'taxonomy' => array( // obf
						'description' => __( 'An alphanumeric identifier for the taxonomy.' ), // obf
						'type'        => 'string', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_ytlsm, 'get_item' ), // obf
					'permission_callback' => array( $v_ytlsm, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_ytlsm->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_ytlsm, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read taxonomies. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_nhbmo Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_nhbmo ) { // obf
		if ( 'edit' === $v_nhbmo['context'] ) { // obf
			if ( ! empty( $v_nhbmo['type'] ) ) { // obf
				$v_mqxrj = get_object_taxonomies( $v_nhbmo['type'], 'objects' ); // obf
			} else { // obf
				$v_mqxrj = get_taxonomies( '', 'objects' ); // obf
			} // obf

			foreach ( $v_mqxrj as $v_lbztz ) { // obf
				if ( ! empty( $v_lbztz->show_in_rest ) && current_user_can( $v_lbztz->cap->assign_terms ) ) { // obf
					return true; // obf
				} // obf
			} // obf

			return new WP_Error( // obf
				'rest_cannot_view', // obf
				__( 'Sorry, you are not allowed to manage terms in this taxonomy.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves all public taxonomies. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_nhbmo Full details about the request. // obf
	 * @return WP_REST_Response Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_nhbmo ) { // obf
		if ( $v_nhbmo->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		// Retrieve the list of registered collection query parameters. // obf
		$v_vhoje = $v_ytlsm->get_collection_params(); // obf

		if ( isset( $v_vhoje['type'] ) && ! empty( $v_nhbmo['type'] ) ) { // obf
			$v_mqxrj = get_object_taxonomies( $v_nhbmo['type'], 'objects' ); // obf
		} else { // obf
			$v_mqxrj = get_taxonomies( '', 'objects' ); // obf
		} // obf

		$v_reysi = array(); // obf

		foreach ( $v_mqxrj as $v_fcbhc => $v_zxfji ) { // obf
			if ( empty( $v_zxfji->show_in_rest ) || ( 'edit' === $v_nhbmo['context'] && ! current_user_can( $v_zxfji->cap->assign_terms ) ) ) { // obf
				continue; // obf
			} // obf

			$v_nrnww               = $v_ytlsm->prepare_item_for_response( $v_zxfji, $v_nhbmo ); // obf
			$v_nrnww               = $v_ytlsm->prepare_response_for_collection( $v_nrnww ); // obf
			$v_reysi[ $v_fcbhc ] = $v_nrnww; // obf
		} // obf

		if ( empty( $v_reysi ) ) { // obf
			// Response should still be returned as a JSON object when it is empty. // obf
			$v_reysi = (object) $v_reysi; // obf
		} // obf

		return rest_ensure_response( $v_reysi ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to a taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_nhbmo Full details about the request. // obf
	 * @return bool|WP_Error True if the request has read access for the item, otherwise false or WP_Error object. // obf
	 */ // obf
	public function get_item_permissions_check( $v_nhbmo ) { // obf

		$v_zohrx = get_taxonomy( $v_nhbmo['taxonomy'] ); // obf

		if ( $v_zohrx ) { // obf
			if ( empty( $v_zohrx->show_in_rest ) ) { // obf
				return false; // obf
			} // obf

			if ( 'edit' === $v_nhbmo['context'] && ! current_user_can( $v_zohrx->cap->assign_terms ) ) { // obf
				return new WP_Error( // obf
					'rest_forbidden_context', // obf
					__( 'Sorry, you are not allowed to manage terms in this taxonomy.' ), // obf
					array( 'status' => rest_authorization_required_code() ) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a specific taxonomy. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_nhbmo Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_nhbmo ) { // obf
		$v_zohrx = get_taxonomy( $v_nhbmo['taxonomy'] ); // obf

		if ( empty( $v_zohrx ) ) { // obf
			return new WP_Error( // obf
				'rest_taxonomy_invalid', // obf
				__( 'Invalid taxonomy.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_reysi = $v_ytlsm->prepare_item_for_response( $v_zohrx, $v_nhbmo ); // obf

		return rest_ensure_response( $v_reysi ); // obf
	} // obf

	/** // obf
	 * Prepares a taxonomy object for serialization. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_lbztz` to `$v_oihzf` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Taxonomy     $v_oihzf    Taxonomy data. // obf
	 * @param WP_REST_Request $v_nhbmo Full details about the request. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_oihzf, $v_nhbmo ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_lbztz = $v_oihzf; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_nhbmo->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-taxonomies-controller.php */ // obf
			return apply_filters( 'rest_prepare_taxonomy', new WP_REST_Response( array() ), $v_lbztz, $v_nhbmo ); // obf
		} // obf

		$v_ovjdu = ! empty( $v_lbztz->rest_base ) ? $v_lbztz->rest_base : $v_lbztz->name; // obf

		$v_mlbtr = $v_ytlsm->get_fields_for_response( $v_nhbmo ); // obf
		$v_reysi   = array(); // obf

		if ( in_array( 'name', $v_mlbtr, true ) ) { // obf
			$v_reysi['name'] = $v_lbztz->label; // obf
		} // obf

		if ( in_array( 'slug', $v_mlbtr, true ) ) { // obf
			$v_reysi['slug'] = $v_lbztz->name; // obf
		} // obf

		if ( in_array( 'capabilities', $v_mlbtr, true ) ) { // obf
			$v_reysi['capabilities'] = $v_lbztz->cap; // obf
		} // obf

		if ( in_array( 'description', $v_mlbtr, true ) ) { // obf
			$v_reysi['description'] = $v_lbztz->description; // obf
		} // obf

		if ( in_array( 'labels', $v_mlbtr, true ) ) { // obf
			$v_reysi['labels'] = $v_lbztz->labels; // obf
		} // obf

		if ( in_array( 'types', $v_mlbtr, true ) ) { // obf
			$v_reysi['types'] = array_values( $v_lbztz->object_type ); // obf
		} // obf

		if ( in_array( 'show_cloud', $v_mlbtr, true ) ) { // obf
			$v_reysi['show_cloud'] = $v_lbztz->show_tagcloud; // obf
		} // obf

		if ( in_array( 'hierarchical', $v_mlbtr, true ) ) { // obf
			$v_reysi['hierarchical'] = $v_lbztz->hierarchical; // obf
		} // obf

		if ( in_array( 'rest_base', $v_mlbtr, true ) ) { // obf
			$v_reysi['rest_base'] = $v_ovjdu; // obf
		} // obf

		if ( in_array( 'rest_namespace', $v_mlbtr, true ) ) { // obf
			$v_reysi['rest_namespace'] = $v_lbztz->rest_namespace; // obf
		} // obf

		if ( in_array( 'visibility', $v_mlbtr, true ) ) { // obf
			$v_reysi['visibility'] = array( // obf
				'public'             => (bool) $v_lbztz->public, // obf
				'publicly_queryable' => (bool) $v_lbztz->publicly_queryable, // obf
				'show_admin_column'  => (bool) $v_lbztz->show_admin_column, // obf
				'show_in_nav_menus'  => (bool) $v_lbztz->show_in_nav_menus, // obf
				'show_in_quick_edit' => (bool) $v_lbztz->show_in_quick_edit, // obf
				'show_ui'            => (bool) $v_lbztz->show_ui, // obf
			); // obf
		} // obf

		$v_mtixf = ! empty( $v_nhbmo['context'] ) ? $v_nhbmo['context'] : 'view'; // obf
		$v_reysi    = $v_ytlsm->add_additional_fields_to_object( $v_reysi, $v_nhbmo ); // obf
		$v_reysi    = $v_ytlsm->filter_response_by_context( $v_reysi, $v_mtixf ); // obf

		// Wrap the data in a response object. // obf
		$v_foawm = rest_ensure_response( $v_reysi ); // obf

		if ( rest_is_field_included( '_links', $v_mlbtr ) || rest_is_field_included( '_embedded', $v_mlbtr ) ) { // obf
			$v_foawm->add_links( $v_ytlsm->prepare_links( $v_lbztz ) ); // obf
		} // obf

		/** // obf
		 * Filters a taxonomy returned from the REST API. // obf
		 * // obf
		 * Allows modification of the taxonomy data right before it is returned. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_foawm The response object. // obf
		 * @param WP_Taxonomy      $v_oihzf     The original taxonomy object. // obf
		 * @param WP_REST_Request  $v_nhbmo  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_taxonomy', $v_foawm, $v_lbztz, $v_nhbmo ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param WP_Taxonomy $v_lbztz The taxonomy. // obf
	 * @return array Links for the given taxonomy. // obf
	 */ // obf
	protected function prepare_links( $v_lbztz ) { // obf
		return array( // obf
			'collection'              => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_ytlsm->namespace, $v_ytlsm->rest_base ) ), // obf
			), // obf
			'https://api.w.org/items' => array( // obf
				'href' => rest_url( rest_get_route_for_taxonomy_items( $v_lbztz->name ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the taxonomy's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.0.0 The `visibility` property was added. // obf
	 * @since 5.9.0 The `rest_namespace` property was added. // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_ytlsm->schema ) { // obf
			return $v_ytlsm->add_additional_fields_schema( $v_ytlsm->schema ); // obf
		} // obf

		$v_iwcfz = array( // obf
			'$v_iwcfz'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'taxonomy', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'capabilities'   => array( // obf
					'description' => __( 'All capabilities used by the taxonomy.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description'    => array( // obf
					'description' => __( 'A human-readable description of the taxonomy.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'hierarchical'   => array( // obf
					'description' => __( 'Whether or not the taxonomy should have children.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'labels'         => array( // obf
					'description' => __( 'Human-readable labels for the taxonomy for various contexts.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'name'           => array( // obf
					'description' => __( 'The title for the taxonomy.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'slug'           => array( // obf
					'description' => __( 'An alphanumeric identifier for the taxonomy.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'show_cloud'     => array( // obf
					'description' => __( 'Whether or not the term cloud should be displayed.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'types'          => array( // obf
					'description' => __( 'Types associated with the taxonomy.' ), // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'rest_base'      => array( // obf
					'description' => __( 'REST base route for the taxonomy.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'rest_namespace' => array( // obf
					'description' => __( 'REST namespace route for the taxonomy.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'visibility'     => array( // obf
					'description' => __( 'The visibility settings for the taxonomy.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'public'             => array( // obf
							'description' => __( 'Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
						'publicly_queryable' => array( // obf
							'description' => __( 'Whether the taxonomy is publicly queryable.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
						'show_ui'            => array( // obf
							'description' => __( 'Whether to generate a default UI for managing this taxonomy.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
						'show_admin_column'  => array( // obf
							'description' => __( 'Whether to allow automatic creation of taxonomy columns on associated post-types table.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
						'show_in_nav_menus'  => array( // obf
							'description' => __( 'Whether to make the taxonomy available for selection in navigation menus.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
						'show_in_quick_edit' => array( // obf
							'description' => __( 'Whether to show the taxonomy in the quick/bulk edit panel.' ), // obf
							'type'        => 'boolean', // obf
						), // obf

					), // obf
				), // obf
			), // obf
		); // obf

		$v_ytlsm->schema = $v_iwcfz; // obf

		return $v_ytlsm->add_additional_fields_schema( $v_ytlsm->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_hvyek            = array(); // obf
		$v_hvyek['context'] = $v_ytlsm->get_context_param( array( 'default' => 'view' ) ); // obf
		$v_hvyek['type']    = array( // obf
			'description' => __( 'Limit results to taxonomies associated with a specific post type.' ), // obf
			'type'        => 'string', // obf
		); // obf
		return $v_hvyek; // obf
	} // obf
} // obf