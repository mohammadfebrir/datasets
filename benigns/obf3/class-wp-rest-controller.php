

<?php // obf
/** // obf
 * REST API: WP_REST_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core base controller for managing and interacting with REST API items. // obf
 * // obf
 * @since 4.7.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
abstract class WP_REST_Controller { // obf

	/** // obf
	 * The namespace of this controller's route. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_azofn; // obf

	/** // obf
	 * The base of this controller's route. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_yzztl; // obf

	/** // obf
	 * Cached results of get_item_schema. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_cogls; // obf

	/** // obf
	 * Registers the routes for the objects of the controller. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		_doing_it_wrong( // obf
			'WP_REST_Controller::register_routes', // obf
			/* translators: %s: register_routes() */ // obf
			sprintf( __( "Method '%s' must be overridden." ), __METHOD__ ), // obf
			'4.7.0' // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get items. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves a collection of items. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get a specific item. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves one item from the collection. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create items. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Creates one item from the collection. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update a specific item. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Updates one item from the collection. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a specific item. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Deletes one item from the collection. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares one item for create or update operation. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Request object. // obf
	 * @return object|WP_Error The prepared item, or WP_Error object on failure. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares the item for the REST response. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param mixed           $v_nbiyn    WordPress representation of the item. // obf
	 * @param WP_REST_Request $v_wjfka Request object. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function prepare_item_for_response( $v_nbiyn, $v_wjfka ) { // obf
		return new WP_Error( // obf
			'invalid-method', // obf
			/* translators: %s: Method name. */ // obf
			sprintf( __( "Method '%s' not implemented. Must be overridden in subclass." ), __METHOD__ ), // obf
			array( 'status' => 405 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares a response for insertion into a collection. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_ucofm Response object. // obf
	 * @return array|mixed Response data, ready for insertion into collection data. // obf
	 */ // obf
	public function prepare_response_for_collection( $v_ucofm ) { // obf
		if ( ! ( $v_ucofm instanceof WP_REST_Response ) ) { // obf
			return $v_ucofm; // obf
		} // obf

		$v_nbbnt   = (array) $v_ucofm->get_data(); // obf
		$v_dilcj = rest_get_server(); // obf
		$v_tuudg  = $v_dilcj::get_compact_response_links( $v_ucofm ); // obf

		if ( ! empty( $v_tuudg ) ) { // obf
			$v_nbbnt['_links'] = $v_tuudg; // obf
		} // obf

		return $v_nbbnt; // obf
	} // obf

	/** // obf
	 * Filters a response based on the context defined in the schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array  $v_nqjgb Response data to filter. // obf
	 * @param string $v_vbwkn       Context defined in the schema. // obf
	 * @return array Filtered response. // obf
	 */ // obf
	public function filter_response_by_context( $v_nqjgb, $v_vbwkn ) { // obf

		$v_cogls = $v_dyixv->get_item_schema(); // obf

		return rest_filter_response_by_context( $v_nqjgb, $v_cogls, $v_vbwkn ); // obf
	} // obf

	/** // obf
	 * Retrieves the item's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		return $v_dyixv->add_additional_fields_schema( array() ); // obf
	} // obf

	/** // obf
	 * Retrieves the item's schema for display / public consumption purposes. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Public item schema data. // obf
	 */ // obf
	public function get_public_item_schema() { // obf

		$v_cogls = $v_dyixv->get_item_schema(); // obf

		if ( ! empty( $v_cogls['properties'] ) ) { // obf
			foreach ( $v_cogls['properties'] as &$v_pmrih ) { // obf
				unset( $v_pmrih['arg_options'] ); // obf
			} // obf
		} // obf

		return $v_cogls; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Query parameters for the collection. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context'  => $v_dyixv->get_context_param(), // obf
			'page'     => array( // obf
				'description'       => __( 'Current page of the collection.' ), // obf
				'type'              => 'integer', // obf
				'default'           => 1, // obf
				'sanitize_callback' => 'absint', // obf
				'validate_callback' => 'rest_validate_request_arg', // obf
				'minimum'           => 1, // obf
			), // obf
			'per_page' => array( // obf
				'description'       => __( 'Maximum number of items to be returned in result set.' ), // obf
				'type'              => 'integer', // obf
				'default'           => 10, // obf
				'minimum'           => 1, // obf
				'maximum'           => 100, // obf
				'sanitize_callback' => 'absint', // obf
				'validate_callback' => 'rest_validate_request_arg', // obf
			), // obf
			'search'   => array( // obf
				'description'       => __( 'Limit results to those matching a string.' ), // obf
				'type'              => 'string', // obf
				'sanitize_callback' => 'sanitize_text_field', // obf
				'validate_callback' => 'rest_validate_request_arg', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the magical context param. // obf
	 * // obf
	 * Ensures consistent descriptions between endpoints, and populates enum from schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_vczfq Optional. Additional arguments for context parameter. Default empty array. // obf
	 * @return array Context parameter details. // obf
	 */ // obf
	public function get_context_param( $v_vczfq = array() ) { // obf
		$v_ocjho = array( // obf
			'description'       => __( 'Scope under which the request is made; determines fields present in response.' ), // obf
			'type'              => 'string', // obf
			'sanitize_callback' => 'sanitize_key', // obf
			'validate_callback' => 'rest_validate_request_arg', // obf
		); // obf

		$v_cogls = $v_dyixv->get_item_schema(); // obf

		if ( empty( $v_cogls['properties'] ) ) { // obf
			return array_merge( $v_ocjho, $v_vczfq ); // obf
		} // obf

		$v_cdksy = array(); // obf

		foreach ( $v_cogls['properties'] as $v_oiqjq ) { // obf
			if ( ! empty( $v_oiqjq['context'] ) ) { // obf
				$v_cdksy = array_merge( $v_cdksy, $v_oiqjq['context'] ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_cdksy ) ) { // obf
			$v_ocjho['enum'] = array_unique( $v_cdksy ); // obf
			rsort( $v_ocjho['enum'] ); // obf
		} // obf

		return array_merge( $v_ocjho, $v_vczfq ); // obf
	} // obf

	/** // obf
	 * Adds the values from additional fields to a data object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array           $v_nqjgb Prepared response array. // obf
	 * @param WP_REST_Request $v_wjfka       Full details about the request. // obf
	 * @return array Modified data object with additional fields. // obf
	 */ // obf
	protected function add_additional_fields_to_object( $v_nqjgb, $v_wjfka ) { // obf

		$v_onhoj = $v_dyixv->get_additional_fields(); // obf

		$v_dxgka = $v_dyixv->get_fields_for_response( $v_wjfka ); // obf

		foreach ( $v_onhoj as $v_zbfqn => $v_cfgae ) { // obf
			if ( ! $v_cfgae['get_callback'] ) { // obf
				continue; // obf
			} // obf

			if ( ! rest_is_field_included( $v_zbfqn, $v_dxgka ) ) { // obf
				continue; // obf
			} // obf

			$v_nqjgb[ $v_zbfqn ] = call_user_func( // obf
				$v_cfgae['get_callback'], // obf
				$v_nqjgb, // obf
				$v_zbfqn, // obf
				$v_wjfka, // obf
				$v_dyixv->get_object_type() // obf
			); // obf
		} // obf

		return $v_nqjgb; // obf
	} // obf

	/** // obf
	 * Updates the values of additional fields added to a data object. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param object          $v_ppbey Data model like WP_Term or WP_Post. // obf
	 * @param WP_REST_Request $v_wjfka     Full details about the request. // obf
	 * @return true|WP_Error True on success, WP_Error object if a field cannot be updated. // obf
	 */ // obf
	protected function update_additional_fields_for_object( $v_ppbey, $v_wjfka ) { // obf
		$v_onhoj = $v_dyixv->get_additional_fields(); // obf

		foreach ( $v_onhoj as $v_zbfqn => $v_cfgae ) { // obf
			if ( ! $v_cfgae['update_callback'] ) { // obf
				continue; // obf
			} // obf

			// Don't run the update callbacks if the data wasn't passed in the request. // obf
			if ( ! isset( $v_wjfka[ $v_zbfqn ] ) ) { // obf
				continue; // obf
			} // obf

			$v_rlqen = call_user_func( // obf
				$v_cfgae['update_callback'], // obf
				$v_wjfka[ $v_zbfqn ], // obf
				$v_ppbey, // obf
				$v_zbfqn, // obf
				$v_wjfka, // obf
				$v_dyixv->get_object_type() // obf
			); // obf

			if ( is_wp_error( $v_rlqen ) ) { // obf
				return $v_rlqen; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Adds the schema from additional fields to a schema array. // obf
	 * // obf
	 * The type of object is inferred from the passed schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_cogls Schema array. // obf
	 * @return array Modified Schema array. // obf
	 */ // obf
	protected function add_additional_fields_schema( $v_cogls ) { // obf
		if ( empty( $v_cogls['title'] ) ) { // obf
			return $v_cogls; // obf
		} // obf

		// Can't use $v_dyixv->get_object_type otherwise we cause an inf loop. // obf
		$v_ncion = $v_cogls['title']; // obf

		$v_onhoj = $v_dyixv->get_additional_fields( $v_ncion ); // obf

		foreach ( $v_onhoj as $v_zbfqn => $v_cfgae ) { // obf
			if ( ! $v_cfgae['schema'] ) { // obf
				continue; // obf
			} // obf

			$v_cogls['properties'][ $v_zbfqn ] = $v_cfgae['schema']; // obf
		} // obf

		return $v_cogls; // obf
	} // obf

	/** // obf
	 * Retrieves all of the registered additional fields for a given object-type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @global array $v_lbsgz Holds registered fields, organized by object type. // obf
	 * // obf
	 * @param string $v_ncion Optional. The object type. // obf
	 * @return array Registered additional fields (if any), empty array if none or if the object type // obf
	 *               could not be inferred. // obf
	 */ // obf
	protected function get_additional_fields( $v_ncion = null ) { // obf
		global $v_lbsgz; // obf

		if ( ! $v_ncion ) { // obf
			$v_ncion = $v_dyixv->get_object_type(); // obf
		} // obf

		if ( ! $v_ncion ) { // obf
			return array(); // obf
		} // obf

		if ( ! $v_lbsgz || ! isset( $v_lbsgz[ $v_ncion ] ) ) { // obf
			return array(); // obf
		} // obf

		return $v_lbsgz[ $v_ncion ]; // obf
	} // obf

	/** // obf
	 * Retrieves the object type this controller is responsible for managing. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string Object type for the controller. // obf
	 */ // obf
	protected function get_object_type() { // obf
		$v_cogls = $v_dyixv->get_item_schema(); // obf

		if ( ! $v_cogls || ! isset( $v_cogls['title'] ) ) { // obf
			return null; // obf
		} // obf

		return $v_cogls['title']; // obf
	} // obf

	/** // obf
	 * Gets an array of fields to be included on the response. // obf
	 * // obf
	 * Included fields are based on item schema and `_fields=` request argument. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param WP_REST_Request $v_wjfka Full details about the request. // obf
	 * @return string[] Fields to be included in the response. // obf
	 */ // obf
	public function get_fields_for_response( $v_wjfka ) { // obf
		$v_cogls     = $v_dyixv->get_item_schema(); // obf
		$v_uhdok = isset( $v_cogls['properties'] ) ? $v_cogls['properties'] : array(); // obf

		$v_onhoj = $v_dyixv->get_additional_fields(); // obf

		foreach ( $v_onhoj as $v_zbfqn => $v_cfgae ) { // obf
			/* // obf
			 * For back-compat, include any field with an empty schema // obf
			 * because it won't be present in $v_dyixv->get_item_schema(). // obf
			 */ // obf
			if ( is_null( $v_cfgae['schema'] ) ) { // obf
				$v_uhdok[ $v_zbfqn ] = $v_cfgae; // obf
			} // obf
		} // obf

		// Exclude fields that specify a different context than the request context. // obf
		$v_vbwkn = $v_wjfka['context']; // obf
		if ( $v_vbwkn ) { // obf
			foreach ( $v_uhdok as $v_trcbe => $v_xsrqr ) { // obf
				if ( ! empty( $v_xsrqr['context'] ) && ! in_array( $v_vbwkn, $v_xsrqr['context'], true ) ) { // obf
					unset( $v_uhdok[ $v_trcbe ] ); // obf
				} // obf
			} // obf
		} // obf

		$v_leiza = array_keys( $v_uhdok ); // obf

		/* // obf
		 * '_links' and '_embedded' are not typically part of the item schema, // obf
		 * but they can be specified in '_fields', so they are added here as a // obf
		 * convenience for checking with rest_is_field_included(). // obf
		 */ // obf
		$v_leiza[] = '_links'; // obf
		if ( $v_wjfka->has_param( '_embed' ) ) { // obf
			$v_leiza[] = '_embedded'; // obf
		} // obf

		$v_leiza = array_unique( $v_leiza ); // obf

		if ( ! isset( $v_wjfka['_fields'] ) ) { // obf
			return $v_leiza; // obf
		} // obf
		$v_dxgka = wp_parse_list( $v_wjfka['_fields'] ); // obf
		if ( 0 === count( $v_dxgka ) ) { // obf
			return $v_leiza; // obf
		} // obf
		// Trim off outside whitespace from the comma delimited list. // obf
		$v_dxgka = array_map( 'trim', $v_dxgka ); // obf
		// Always persist 'id', because it can be needed for add_additional_fields_to_object(). // obf
		if ( in_array( 'id', $v_leiza, true ) ) { // obf
			$v_dxgka[] = 'id'; // obf
		} // obf
		// Return the list of all requested fields which appear in the schema. // obf
		return array_reduce( // obf
			$v_dxgka, // obf
			static function ( $v_angqx, $v_ydqsc ) use ( $v_leiza ) { // obf
				if ( in_array( $v_ydqsc, $v_leiza, true ) ) { // obf
					$v_angqx[] = $v_ydqsc; // obf
					return $v_angqx; // obf
				} // obf
				// Check for nested fields if $v_ydqsc is not a direct match. // obf
				$v_lochn = explode( '.', $v_ydqsc ); // obf
				/* // obf
				 * A nested field is included so long as its top-level property // obf
				 * is present in the schema. // obf
				 */ // obf
				if ( in_array( $v_lochn[0], $v_leiza, true ) ) { // obf
					$v_angqx[] = $v_ydqsc; // obf
				} // obf
				return $v_angqx; // obf
			}, // obf
			array() // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves an array of endpoint arguments from the item schema for the controller. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_kamrk Optional. HTTP method of the request. The arguments for `CREATABLE` requests are // obf
	 *                       checked for required values and may fall-back to a given default, this is not done // obf
	 *                       on `EDITABLE` requests. Default WP_REST_Server::CREATABLE. // obf
	 * @return array Endpoint arguments. // obf
	 */ // obf
	public function get_endpoint_args_for_item_schema( $v_kamrk = WP_REST_Server::CREATABLE ) { // obf
		return rest_get_endpoint_args_for_schema( $v_dyixv->get_item_schema(), $v_kamrk ); // obf
	} // obf

	/** // obf
	 * Sanitizes the slug value. // obf
	 * // obf
	 * {@internal We can't use sanitize_title() directly, as the second // obf
	 * parameter is the fallback title, which would end up being set to the // obf
	 * request object.} // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see https://github.com/WP-API/WP-API/issues/1585 // obf
	 * // obf
	 * @todo Remove this in favour of https://core.trac.wordpress.org/ticket/34659 // obf
	 * // obf
	 * @param string $v_ggjwr Slug value passed in request. // obf
	 * @return string Sanitized value for the slug. // obf
	 */ // obf
	public function sanitize_slug( $v_ggjwr ) { // obf
		return sanitize_title( $v_ggjwr ); // obf
	} // obf
} // obf