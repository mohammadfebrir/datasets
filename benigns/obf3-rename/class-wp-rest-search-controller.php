

<?php // obf
/** // obf
 * REST API: WP_REST_Search_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Core class to search through all WordPress content via the REST API. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Search_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * ID property name. // obf
	 */ // obf
	const PROP_ID = 'id'; // obf

	/** // obf
	 * Title property name. // obf
	 */ // obf
	const PROP_TITLE = 'title'; // obf

	/** // obf
	 * URL property name. // obf
	 */ // obf
	const PROP_URL = 'url'; // obf

	/** // obf
	 * Type property name. // obf
	 */ // obf
	const PROP_TYPE = 'type'; // obf

	/** // obf
	 * Subtype property name. // obf
	 */ // obf
	const PROP_SUBTYPE = 'subtype'; // obf

	/** // obf
	 * Identifier for the 'any' type. // obf
	 */ // obf
	const TYPE_ANY = 'any'; // obf

	/** // obf
	 * Search handlers used by the controller. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_REST_Search_Handler[] // obf
	 */ // obf
	protected $v_swktv = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array $v_swktv List of search handlers to use in the controller. Each search // obf
	 *                               handler instance must extend the `WP_REST_Search_Handler` class. // obf
	 */ // obf
	public function __construct( array $v_swktv ) { // obf
		$v_wbdij->namespace = 'wp/v2'; // obf
		$v_wbdij->rest_base = 'search'; // obf

		foreach ( $v_swktv as $v_fvamy ) { // obf
			if ( ! $v_fvamy instanceof WP_REST_Search_Handler ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					/* translators: %s: PHP class name. */ // obf
					sprintf( __( 'REST search handlers must extend the %s class.' ), 'WP_REST_Search_Handler' ), // obf
					'5.0.0' // obf
				); // obf
				continue; // obf
			} // obf

			$v_wbdij->search_handlers[ $v_fvamy->get_type() ] = $v_fvamy; // obf
		} // obf
	} // obf

	/** // obf
	 * Registers the routes for the search controller. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_wbdij->namespace, // obf
			'/' . $v_wbdij->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_wbdij, 'get_items' ), // obf
					'permission_callback' => array( $v_wbdij, 'get_items_permission_check' ), // obf
					'args'                => $v_wbdij->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_wbdij, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to search content. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ajrtt Full details about the request. // obf
	 * @return true|WP_Error True if the request has search access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permission_check( $v_ajrtt ) { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a collection of search results. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ajrtt Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_ajrtt ) { // obf
		$v_fnqud = $v_wbdij->get_search_handler( $v_ajrtt ); // obf
		if ( is_wp_error( $v_fnqud ) ) { // obf
			return $v_fnqud; // obf
		} // obf

		$v_igkpf = $v_fnqud->search_items( $v_ajrtt ); // obf

		if ( ! isset( $v_igkpf[ WP_REST_Search_Handler::RESULT_IDS ] ) || ! is_array( $v_igkpf[ WP_REST_Search_Handler::RESULT_IDS ] ) || ! isset( $v_igkpf[ WP_REST_Search_Handler::RESULT_TOTAL ] ) ) { // obf
			return new WP_Error( // obf
				'rest_search_handler_error', // obf
				__( 'Internal search handler error.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		$v_huiiv = $v_igkpf[ WP_REST_Search_Handler::RESULT_IDS ]; // obf

		$v_igpvy = $v_ajrtt->is_method( 'HEAD' ); // obf
		if ( ! $v_igpvy ) { // obf
			$v_jbbbw = array(); // obf

			foreach ( $v_huiiv as $v_znjdx ) { // obf
				$v_ecnpf      = $v_wbdij->prepare_item_for_response( $v_znjdx, $v_ajrtt ); // obf
				$v_jbbbw[] = $v_wbdij->prepare_response_for_collection( $v_ecnpf ); // obf
			} // obf
		} // obf

		$v_kvxjm     = (int) $v_igkpf[ WP_REST_Search_Handler::RESULT_TOTAL ]; // obf
		$v_tmgvu      = (int) $v_ajrtt['page']; // obf
		$v_kggdy  = (int) $v_ajrtt['per_page']; // obf
		$v_dhmqk = (int) ceil( $v_kvxjm / $v_kggdy ); // obf

		if ( $v_tmgvu > $v_dhmqk && $v_kvxjm > 0 ) { // obf
			return new WP_Error( // obf
				'rest_search_invalid_page_number', // obf
				__( 'The page number requested is larger than the number of pages available.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_lokqb = $v_igpvy ? new WP_REST_Response( array() ) : rest_ensure_response( $v_jbbbw ); // obf
		$v_lokqb->header( 'X-WP-Total', $v_kvxjm ); // obf
		$v_lokqb->header( 'X-WP-TotalPages', $v_dhmqk ); // obf

		$v_vaqcj = $v_ajrtt->get_query_params(); // obf
		$v_nwzem           = add_query_arg( urlencode_deep( $v_vaqcj ), rest_url( sprintf( '%s/%s', $v_wbdij->namespace, $v_wbdij->rest_base ) ) ); // obf

		if ( $v_tmgvu > 1 ) { // obf
			$v_wumur = add_query_arg( 'page', $v_tmgvu - 1, $v_nwzem ); // obf
			$v_lokqb->link_header( 'prev', $v_wumur ); // obf
		} // obf
		if ( $v_tmgvu < $v_dhmqk ) { // obf
			$v_mbcmt = add_query_arg( 'page', $v_tmgvu + 1, $v_nwzem ); // obf
			$v_lokqb->link_header( 'next', $v_mbcmt ); // obf
		} // obf

		return $v_lokqb; // obf
	} // obf

	/** // obf
	 * Prepares a single search result for response. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 5.6.0 The `$v_znjdx` parameter can accept a string. // obf
	 * @since 5.9.0 Renamed `$v_znjdx` to `$v_pqyzn` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param int|string      $v_pqyzn    ID of the item to prepare. // obf
	 * @param WP_REST_Request $v_ajrtt Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_pqyzn, $v_ajrtt ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_fuxyg = $v_pqyzn; // obf

		$v_fnqud = $v_wbdij->get_search_handler( $v_ajrtt ); // obf
		if ( is_wp_error( $v_fnqud ) ) { // obf
			return new WP_REST_Response(); // obf
		} // obf

		$v_pimax = $v_wbdij->get_fields_for_response( $v_ajrtt ); // obf

		$v_ecnpf = $v_fnqud->prepare_item( $v_fuxyg, $v_pimax ); // obf
		$v_ecnpf = $v_wbdij->add_additional_fields_to_object( $v_ecnpf, $v_ajrtt ); // obf

		$v_xcqfe = ! empty( $v_ajrtt['context'] ) ? $v_ajrtt['context'] : 'view'; // obf
		$v_ecnpf    = $v_wbdij->filter_response_by_context( $v_ecnpf, $v_xcqfe ); // obf

		$v_lokqb = rest_ensure_response( $v_ecnpf ); // obf

		if ( rest_is_field_included( '_links', $v_pimax ) || rest_is_field_included( '_embedded', $v_pimax ) ) { // obf
			$v_ucffc               = $v_fnqud->prepare_item_links( $v_fuxyg ); // obf
			$v_ucffc['collection'] = array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_wbdij->namespace, $v_wbdij->rest_base ) ), // obf
			); // obf
			$v_lokqb->add_links( $v_ucffc ); // obf
		} // obf

		return $v_lokqb; // obf
	} // obf

	/** // obf
	 * Retrieves the item schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_wbdij->schema ) { // obf
			return $v_wbdij->add_additional_fields_schema( $v_wbdij->schema ); // obf
		} // obf

		$v_mnmpv    = array(); // obf
		$v_zyfkz = array(); // obf

		foreach ( $v_wbdij->search_handlers as $v_fvamy ) { // obf
			$v_mnmpv[]  = $v_fvamy->get_type(); // obf
			$v_zyfkz = array_merge( $v_zyfkz, $v_fvamy->get_subtypes() ); // obf
		} // obf

		$v_mnmpv    = array_unique( $v_mnmpv ); // obf
		$v_zyfkz = array_unique( $v_zyfkz ); // obf

		$v_qhazd = array( // obf
			'$v_qhazd'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'search-result', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				self::PROP_ID      => array( // obf
					'description' => __( 'Unique identifier for the object.' ), // obf
					'type'        => array( 'integer', 'string' ), // obf
					'context'     => array( 'view', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				self::PROP_TITLE   => array( // obf
					'description' => __( 'The title for the object.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				self::PROP_URL     => array( // obf
					'description' => __( 'URL to the object.' ), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				self::PROP_TYPE    => array( // obf
					'description' => __( 'Object type.' ), // obf
					'type'        => 'string', // obf
					'enum'        => $v_mnmpv, // obf
					'context'     => array( 'view', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				self::PROP_SUBTYPE => array( // obf
					'description' => __( 'Object subtype.' ), // obf
					'type'        => 'string', // obf
					'enum'        => $v_zyfkz, // obf
					'context'     => array( 'view', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		$v_wbdij->schema = $v_qhazd; // obf

		return $v_wbdij->add_additional_fields_schema( $v_wbdij->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the search results collection. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_mnmpv    = array(); // obf
		$v_zyfkz = array(); // obf

		foreach ( $v_wbdij->search_handlers as $v_fvamy ) { // obf
			$v_mnmpv[]  = $v_fvamy->get_type(); // obf
			$v_zyfkz = array_merge( $v_zyfkz, $v_fvamy->get_subtypes() ); // obf
		} // obf

		$v_mnmpv    = array_unique( $v_mnmpv ); // obf
		$v_zyfkz = array_unique( $v_zyfkz ); // obf

		$v_upsqz = parent::get_collection_params(); // obf

		$v_upsqz['context']['default'] = 'view'; // obf

		$v_upsqz[ self::PROP_TYPE ] = array( // obf
			'default'     => $v_mnmpv[0], // obf
			'description' => __( 'Limit results to items of an object type.' ), // obf
			'type'        => 'string', // obf
			'enum'        => $v_mnmpv, // obf
		); // obf

		$v_upsqz[ self::PROP_SUBTYPE ] = array( // obf
			'default'           => self::TYPE_ANY, // obf
			'description'       => __( 'Limit results to items of one or more object subtypes.' ), // obf
			'type'              => 'array', // obf
			'items'             => array( // obf
				'enum' => array_merge( $v_zyfkz, array( self::TYPE_ANY ) ), // obf
				'type' => 'string', // obf
			), // obf
			'sanitize_callback' => array( $v_wbdij, 'sanitize_subtypes' ), // obf
		); // obf

		$v_upsqz['exclude'] = array( // obf
			'description' => __( 'Ensure result set excludes specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		$v_upsqz['include'] = array( // obf
			'description' => __( 'Limit result set to specific IDs.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'integer', // obf
			), // obf
			'default'     => array(), // obf
		); // obf

		return $v_upsqz; // obf
	} // obf

	/** // obf
	 * Sanitizes the list of subtypes, to ensure only subtypes of the passed type are included. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string|array    $v_zyfkz  One or more subtypes. // obf
	 * @param WP_REST_Request $v_ajrtt   Full details about the request. // obf
	 * @param string          $v_xcnrx Parameter name. // obf
	 * @return string[]|WP_Error List of valid subtypes, or WP_Error object on failure. // obf
	 */ // obf
	public function sanitize_subtypes( $v_zyfkz, $v_ajrtt, $v_xcnrx ) { // obf
		$v_zyfkz = wp_parse_slug_list( $v_zyfkz ); // obf

		$v_zyfkz = rest_parse_request_arg( $v_zyfkz, $v_ajrtt, $v_xcnrx ); // obf
		if ( is_wp_error( $v_zyfkz ) ) { // obf
			return $v_zyfkz; // obf
		} // obf

		// 'any' overrides any other subtype. // obf
		if ( in_array( self::TYPE_ANY, $v_zyfkz, true ) ) { // obf
			return array( self::TYPE_ANY ); // obf
		} // obf

		$v_fnqud = $v_wbdij->get_search_handler( $v_ajrtt ); // obf
		if ( is_wp_error( $v_fnqud ) ) { // obf
			return $v_fnqud; // obf
		} // obf

		return array_intersect( $v_zyfkz, $v_fnqud->get_subtypes() ); // obf
	} // obf

	/** // obf
	 * Gets the search handler to handle the current request. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ajrtt Full details about the request. // obf
	 * @return WP_REST_Search_Handler|WP_Error Search handler for the request type, or WP_Error object on failure. // obf
	 */ // obf
	protected function get_search_handler( $v_ajrtt ) { // obf
		$v_ycfdj = $v_ajrtt->get_param( self::PROP_TYPE ); // obf

		if ( ! $v_ycfdj || ! is_string( $v_ycfdj ) || ! isset( $v_wbdij->search_handlers[ $v_ycfdj ] ) ) { // obf
			return new WP_Error( // obf
				'rest_search_invalid_type', // obf
				__( 'Invalid type parameter.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		return $v_wbdij->search_handlers[ $v_ycfdj ]; // obf
	} // obf
} // obf