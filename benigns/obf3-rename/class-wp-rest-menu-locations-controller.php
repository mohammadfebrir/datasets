

<?php // obf
/** // obf
 * REST API: WP_REST_Menu_Locations_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 */ // obf

/** // obf
 * Core class used to access menu locations via the REST API. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Menu_Locations_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Menu Locations Constructor. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_dyyog->namespace = 'wp/v2'; // obf
		$v_dyyog->rest_base = 'menu-locations'; // obf
	} // obf

	/** // obf
	 * Registers the routes for the objects of the controller. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_dyyog->namespace, // obf
			'/' . $v_dyyog->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_dyyog, 'get_items' ), // obf
					'permission_callback' => array( $v_dyyog, 'get_items_permissions_check' ), // obf
					'args'                => $v_dyyog->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_dyyog, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_dyyog->namespace, // obf
			'/' . $v_dyyog->rest_base . '/(?P<location>[\w-]+)', // obf
			array( // obf
				'args'   => array( // obf
					'location' => array( // obf
						'description' => __( 'An alphanumeric identifier for the menu location.' ), // obf
						'type'        => 'string', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_dyyog, 'get_item' ), // obf
					'permission_callback' => array( $v_dyyog, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_dyyog->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_dyyog, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read menu locations. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jamlk Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_jamlk ) { // obf
		return $v_dyyog->check_has_read_only_access( $v_jamlk ); // obf
	} // obf

	/** // obf
	 * Retrieves all menu locations, depending on user context. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jamlk Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_jamlk ) { // obf
		$v_nmsnc = array(); // obf

		foreach ( get_registered_nav_menus() as $v_tpvgr => $v_keubb ) { // obf
			$v_icvvb              = new stdClass(); // obf
			$v_icvvb->name        = $v_tpvgr; // obf
			$v_icvvb->description = $v_keubb; // obf

			$v_icvvb      = $v_dyyog->prepare_item_for_response( $v_icvvb, $v_jamlk ); // obf
			$v_nmsnc[ $v_tpvgr ] = $v_dyyog->prepare_response_for_collection( $v_icvvb ); // obf
		} // obf

		return rest_ensure_response( $v_nmsnc ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a menu location. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jamlk Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_jamlk ) { // obf
		return $v_dyyog->check_has_read_only_access( $v_jamlk ); // obf
	} // obf

	/** // obf
	 * Retrieves a specific menu location. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jamlk Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_jamlk ) { // obf
		$v_vzlbb = get_registered_nav_menus(); // obf
		if ( ! array_key_exists( $v_jamlk['location'], $v_vzlbb ) ) { // obf
			return new WP_Error( 'rest_menu_location_invalid', __( 'Invalid menu location.' ), array( 'status' => 404 ) ); // obf
		} // obf

		$v_icvvb              = new stdClass(); // obf
		$v_icvvb->name        = $v_jamlk['location']; // obf
		$v_icvvb->description = $v_vzlbb[ $v_icvvb->name ]; // obf

		$v_nmsnc = $v_dyyog->prepare_item_for_response( $v_icvvb, $v_jamlk ); // obf

		return rest_ensure_response( $v_nmsnc ); // obf
	} // obf

	/** // obf
	 * Checks whether the current user has read permission for the endpoint. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jamlk Full details about the request. // obf
	 * @return true|WP_Error True if the current user has permission, WP_Error object otherwise. // obf
	 */ // obf
	protected function check_has_read_only_access( $v_jamlk ) { // obf
		/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-menu-items-controller.php */ // obf
		$v_ldrbd = apply_filters( 'rest_menu_read_access', false, $v_jamlk, $v_dyyog ); // obf
		if ( $v_ldrbd ) { // obf
			return true; // obf
		} // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_view', // obf
				__( 'Sorry, you are not allowed to view menu locations.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Prepares a menu location object for serialization. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param stdClass        $v_gygha    Post status data. // obf
	 * @param WP_REST_Request $v_jamlk Full details about the request. // obf
	 * @return WP_REST_Response Menu location data. // obf
	 */ // obf
	public function prepare_item_for_response( $v_gygha, $v_jamlk ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_icvvb = $v_gygha; // obf

		$v_oovys = get_nav_menu_locations(); // obf
		$v_xevjp      = isset( $v_oovys[ $v_icvvb->name ] ) ? $v_oovys[ $v_icvvb->name ] : 0; // obf

		$v_bsmwb = $v_dyyog->get_fields_for_response( $v_jamlk ); // obf
		$v_nmsnc   = array(); // obf

		if ( rest_is_field_included( 'name', $v_bsmwb ) ) { // obf
			$v_nmsnc['name'] = $v_icvvb->name; // obf
		} // obf

		if ( rest_is_field_included( 'description', $v_bsmwb ) ) { // obf
			$v_nmsnc['description'] = $v_icvvb->description; // obf
		} // obf

		if ( rest_is_field_included( 'menu', $v_bsmwb ) ) { // obf
			$v_nmsnc['menu'] = (int) $v_xevjp; // obf
		} // obf

		$v_xrneg = ! empty( $v_jamlk['context'] ) ? $v_jamlk['context'] : 'view'; // obf
		$v_nmsnc    = $v_dyyog->add_additional_fields_to_object( $v_nmsnc, $v_jamlk ); // obf
		$v_nmsnc    = $v_dyyog->filter_response_by_context( $v_nmsnc, $v_xrneg ); // obf

		$v_cwsta = rest_ensure_response( $v_nmsnc ); // obf

		if ( rest_is_field_included( '_links', $v_bsmwb ) || rest_is_field_included( '_embedded', $v_bsmwb ) ) { // obf
			$v_cwsta->add_links( $v_dyyog->prepare_links( $v_icvvb ) ); // obf
		} // obf

		/** // obf
		 * Filters menu location data returned from the REST API. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_cwsta The response object. // obf
		 * @param object           $v_icvvb The original location object. // obf
		 * @param WP_REST_Request  $v_jamlk  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_menu_location', $v_cwsta, $v_icvvb, $v_jamlk ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param stdClass $v_icvvb Menu location. // obf
	 * @return array Links for the given menu location. // obf
	 */ // obf
	protected function prepare_links( $v_icvvb ) { // obf
		$v_ntgnc = sprintf( '%s/%s', $v_dyyog->namespace, $v_dyyog->rest_base ); // obf

		// Entity meta. // obf
		$v_jlnpc = array( // obf
			'self'       => array( // obf
				'href' => rest_url( trailingslashit( $v_ntgnc ) . $v_icvvb->name ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( $v_ntgnc ), // obf
			), // obf
		); // obf

		$v_oovys = get_nav_menu_locations(); // obf
		$v_xevjp      = isset( $v_oovys[ $v_icvvb->name ] ) ? $v_oovys[ $v_icvvb->name ] : 0; // obf
		if ( $v_xevjp ) { // obf
			$v_kgvoo = rest_get_route_for_term( $v_xevjp ); // obf
			if ( $v_kgvoo ) { // obf
				$v_svlth = rest_url( $v_kgvoo ); // obf

				$v_jlnpc['https://api.w.org/menu'][] = array( // obf
					'href'       => $v_svlth, // obf
					'embeddable' => true, // obf
				); // obf
			} // obf
		} // obf

		return $v_jlnpc; // obf
	} // obf

	/** // obf
	 * Retrieves the menu location's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_dyyog->schema ) { // obf
			return $v_dyyog->add_additional_fields_schema( $v_dyyog->schema ); // obf
		} // obf

		$v_dyyog->schema = array( // obf
			'$v_lseqv'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'menu-location', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'name'        => array( // obf
					'description' => __( 'The name of the menu location.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description' => array( // obf
					'description' => __( 'The description of the menu location.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'menu'        => array( // obf
					'description' => __( 'The ID of the assigned menu.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		return $v_dyyog->add_additional_fields_schema( $v_dyyog->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context' => $v_dyyog->get_context_param( array( 'default' => 'view' ) ), // obf
		); // obf
	} // obf
} // obf