

<?php // obf
/** // obf
 * REST API: WP_REST_Post_Statuses_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to access post statuses via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Post_Statuses_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_bfcgv->namespace = 'wp/v2'; // obf
		$v_bfcgv->rest_base = 'statuses'; // obf
	} // obf

	/** // obf
	 * Registers the routes for post statuses. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_bfcgv->namespace, // obf
			'/' . $v_bfcgv->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_bfcgv, 'get_items' ), // obf
					'permission_callback' => array( $v_bfcgv, 'get_items_permissions_check' ), // obf
					'args'                => $v_bfcgv->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_bfcgv, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_bfcgv->namespace, // obf
			'/' . $v_bfcgv->rest_base . '/(?P<status>[\w-]+)', // obf
			array( // obf
				'args'   => array( // obf
					'status' => array( // obf
						'description' => __( 'An alphanumeric identifier for the status.' ), // obf
						'type'        => 'string', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_bfcgv, 'get_item' ), // obf
					'permission_callback' => array( $v_bfcgv, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_bfcgv->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_bfcgv, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read post statuses. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jlwya Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_jlwya ) { // obf
		if ( 'edit' === $v_jlwya['context'] ) { // obf
			$v_wtond = get_post_types( array( 'show_in_rest' => true ), 'objects' ); // obf

			foreach ( $v_wtond as $v_fthob ) { // obf
				if ( current_user_can( $v_fthob->cap->edit_posts ) ) { // obf
					return true; // obf
				} // obf
			} // obf

			return new WP_Error( // obf
				'rest_cannot_view', // obf
				__( 'Sorry, you are not allowed to manage post statuses.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves all post statuses, depending on user context. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jlwya Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_jlwya ) { // obf
		$v_wsvcf              = array(); // obf
		$v_uhrtx          = get_post_stati( array( 'internal' => false ), 'object' ); // obf
		$v_uhrtx['trash'] = get_post_status_object( 'trash' ); // obf

		foreach ( $v_uhrtx as $v_puavp ) { // obf
			$v_zilyn = $v_bfcgv->check_read_permission( $v_puavp ); // obf

			if ( ! $v_zilyn ) { // obf
				continue; // obf
			} // obf

			$v_etixu             = $v_bfcgv->prepare_item_for_response( $v_puavp, $v_jlwya ); // obf
			$v_wsvcf[ $v_puavp->name ] = $v_bfcgv->prepare_response_for_collection( $v_etixu ); // obf
		} // obf

		return rest_ensure_response( $v_wsvcf ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a post status. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jlwya Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_jlwya ) { // obf
		$v_etixu = get_post_status_object( $v_jlwya['status'] ); // obf

		if ( empty( $v_etixu ) ) { // obf
			return new WP_Error( // obf
				'rest_status_invalid', // obf
				__( 'Invalid status.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_qoqka = $v_bfcgv->check_read_permission( $v_etixu ); // obf

		if ( ! $v_qoqka ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read_status', // obf
				__( 'Cannot view status.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks whether a given post status should be visible. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param object $v_etixu Post status. // obf
	 * @return bool True if the post status is visible, otherwise false. // obf
	 */ // obf
	protected function check_read_permission( $v_etixu ) { // obf
		if ( true === $v_etixu->public ) { // obf
			return true; // obf
		} // obf

		if ( false === $v_etixu->internal || 'trash' === $v_etixu->name ) { // obf
			$v_wtond = get_post_types( array( 'show_in_rest' => true ), 'objects' ); // obf

			foreach ( $v_wtond as $v_fthob ) { // obf
				if ( current_user_can( $v_fthob->cap->edit_posts ) ) { // obf
					return true; // obf
				} // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Retrieves a specific post status. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jlwya Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_jlwya ) { // obf
		$v_puavp = get_post_status_object( $v_jlwya['status'] ); // obf

		if ( empty( $v_puavp ) ) { // obf
			return new WP_Error( // obf
				'rest_status_invalid', // obf
				__( 'Invalid status.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_wsvcf = $v_bfcgv->prepare_item_for_response( $v_puavp, $v_jlwya ); // obf

		return rest_ensure_response( $v_wsvcf ); // obf
	} // obf

	/** // obf
	 * Prepares a post status object for serialization. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_etixu` to `$v_xdavi` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param stdClass        $v_xdavi    Post status data. // obf
	 * @param WP_REST_Request $v_jlwya Full details about the request. // obf
	 * @return WP_REST_Response Post status data. // obf
	 */ // obf
	public function prepare_item_for_response( $v_xdavi, $v_jlwya ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_etixu = $v_xdavi; // obf

		$v_ctapg = $v_bfcgv->get_fields_for_response( $v_jlwya ); // obf
		$v_wsvcf   = array(); // obf

		if ( in_array( 'name', $v_ctapg, true ) ) { // obf
			$v_wsvcf['name'] = $v_etixu->label; // obf
		} // obf

		if ( in_array( 'private', $v_ctapg, true ) ) { // obf
			$v_wsvcf['private'] = (bool) $v_etixu->private; // obf
		} // obf

		if ( in_array( 'protected', $v_ctapg, true ) ) { // obf
			$v_wsvcf['protected'] = (bool) $v_etixu->protected; // obf
		} // obf

		if ( in_array( 'public', $v_ctapg, true ) ) { // obf
			$v_wsvcf['public'] = (bool) $v_etixu->public; // obf
		} // obf

		if ( in_array( 'queryable', $v_ctapg, true ) ) { // obf
			$v_wsvcf['queryable'] = (bool) $v_etixu->publicly_queryable; // obf
		} // obf

		if ( in_array( 'show_in_list', $v_ctapg, true ) ) { // obf
			$v_wsvcf['show_in_list'] = (bool) $v_etixu->show_in_admin_all_list; // obf
		} // obf

		if ( in_array( 'slug', $v_ctapg, true ) ) { // obf
			$v_wsvcf['slug'] = $v_etixu->name; // obf
		} // obf

		if ( in_array( 'date_floating', $v_ctapg, true ) ) { // obf
			$v_wsvcf['date_floating'] = $v_etixu->date_floating; // obf
		} // obf

		$v_tnccj = ! empty( $v_jlwya['context'] ) ? $v_jlwya['context'] : 'view'; // obf
		$v_wsvcf    = $v_bfcgv->add_additional_fields_to_object( $v_wsvcf, $v_jlwya ); // obf
		$v_wsvcf    = $v_bfcgv->filter_response_by_context( $v_wsvcf, $v_tnccj ); // obf

		$v_spmop = rest_ensure_response( $v_wsvcf ); // obf

		$v_frarb = rest_url( rest_get_route_for_post_type_items( 'post' ) ); // obf
		if ( 'publish' === $v_etixu->name ) { // obf
			$v_spmop->add_link( 'archives', $v_frarb ); // obf
		} else { // obf
			$v_spmop->add_link( 'archives', add_query_arg( 'status', $v_etixu->name, $v_frarb ) ); // obf
		} // obf

		/** // obf
		 * Filters a post status returned from the REST API. // obf
		 * // obf
		 * Allows modification of the status data right before it is returned. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_spmop The response object. // obf
		 * @param object           $v_etixu   The original post status object. // obf
		 * @param WP_REST_Request  $v_jlwya  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_status', $v_spmop, $v_etixu, $v_jlwya ); // obf
	} // obf

	/** // obf
	 * Retrieves the post status' schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_bfcgv->schema ) { // obf
			return $v_bfcgv->add_additional_fields_schema( $v_bfcgv->schema ); // obf
		} // obf

		$v_wxidy = array( // obf
			'$v_wxidy'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'status', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'name'          => array( // obf
					'description' => __( 'The title for the status.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'private'       => array( // obf
					'description' => __( 'Whether posts with this status should be private.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'protected'     => array( // obf
					'description' => __( 'Whether posts with this status should be protected.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'public'        => array( // obf
					'description' => __( 'Whether posts of this status should be shown in the front end of the site.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'queryable'     => array( // obf
					'description' => __( 'Whether posts with this status should be publicly-queryable.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'show_in_list'  => array( // obf
					'description' => __( 'Whether to include posts in the edit listing for their post type.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'slug'          => array( // obf
					'description' => __( 'An alphanumeric identifier for the status.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'date_floating' => array( // obf
					'description' => __( 'Whether posts of this status may have floating published dates.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		$v_bfcgv->schema = $v_wxidy; // obf

		return $v_bfcgv->add_additional_fields_schema( $v_bfcgv->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context' => $v_bfcgv->get_context_param( array( 'default' => 'view' ) ), // obf
		); // obf
	} // obf
} // obf