

<?php // obf
/** // obf
 * Rest Font Collections Controller. // obf
 * // obf
 * This file contains the class for the REST API Font Collections Controller. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST_API // obf
 * @since      6.5.0 // obf
 */ // obf

/** // obf
 * Font Library Controller class. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
class WP_REST_Font_Collections_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_wgyhz->rest_base = 'font-collections'; // obf
		$v_wgyhz->namespace = 'wp/v2'; // obf
	} // obf

	/** // obf
	 * Registers the routes for the objects of the controller. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_wgyhz->namespace, // obf
			'/' . $v_wgyhz->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_wgyhz, 'get_items' ), // obf
					'permission_callback' => array( $v_wgyhz, 'get_items_permissions_check' ), // obf
					'args'                => $v_wgyhz->get_collection_params(), // obf

				), // obf
				'schema' => array( $v_wgyhz, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_wgyhz->namespace, // obf
			'/' . $v_wgyhz->rest_base . '/(?P<slug>[\/\w-]+)', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_wgyhz, 'get_item' ), // obf
					'permission_callback' => array( $v_wgyhz, 'get_items_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_wgyhz->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_wgyhz, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the font collections available. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_erznf ) { // obf
		$v_xywda = WP_Font_Library::get_instance()->get_font_collections(); // obf

		$v_kgbsc        = $v_erznf['page']; // obf
		$v_ximru    = $v_erznf['per_page']; // obf
		$v_ygqvo = count( $v_xywda ); // obf
		$v_ezbew   = (int) ceil( $v_ygqvo / $v_ximru ); // obf

		if ( $v_kgbsc > $v_ezbew && $v_ygqvo > 0 ) { // obf
			return new WP_Error( // obf
				'rest_post_invalid_page_number', // obf
				__( 'The page number requested is larger than the number of pages available.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_qytuc = array_slice( $v_xywda, ( $v_kgbsc - 1 ) * $v_ximru, $v_ximru ); // obf

		$v_aafxw = $v_erznf->is_method( 'HEAD' ); // obf

		$v_ivmoy = array(); // obf
		foreach ( $v_qytuc as $v_ekqic ) { // obf
			$v_tlyvt = $v_wgyhz->prepare_item_for_response( $v_ekqic, $v_erznf ); // obf

			// If there's an error loading a collection, skip it and continue loading valid collections. // obf
			if ( is_wp_error( $v_tlyvt ) ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * Skip preparing the response body for HEAD requests. // obf
			 * Cannot exit earlier due to backward compatibility reasons, // obf
			 * as validation occurs in the prepare_item_for_response method. // obf
			 */ // obf
			if ( $v_aafxw ) { // obf
				continue; // obf
			} // obf

			$v_tlyvt    = $v_wgyhz->prepare_response_for_collection( $v_tlyvt ); // obf
			$v_ivmoy[] = $v_tlyvt; // obf
		} // obf

		$v_booxu = $v_aafxw ? new WP_REST_Response( array() ) : rest_ensure_response( $v_ivmoy ); // obf

		$v_booxu->header( 'X-WP-Total', (int) $v_ygqvo ); // obf
		$v_booxu->header( 'X-WP-TotalPages', $v_ezbew ); // obf

		$v_sfqdz = $v_erznf->get_query_params(); // obf
		$v_ozfss = rest_url( $v_wgyhz->namespace . '/' . $v_wgyhz->rest_base ); // obf
		$v_edoxr           = add_query_arg( urlencode_deep( $v_sfqdz ), $v_ozfss ); // obf

		if ( $v_kgbsc > 1 ) { // obf
			$v_gtuqc = $v_kgbsc - 1; // obf

			if ( $v_gtuqc > $v_ezbew ) { // obf
				$v_gtuqc = $v_ezbew; // obf
			} // obf

			$v_rwoqa = add_query_arg( 'page', $v_gtuqc, $v_edoxr ); // obf
			$v_booxu->link_header( 'prev', $v_rwoqa ); // obf
		} // obf
		if ( $v_ezbew > $v_kgbsc ) { // obf
			$v_elejl = $v_kgbsc + 1; // obf
			$v_sbfzk = add_query_arg( 'page', $v_elejl, $v_edoxr ); // obf

			$v_booxu->link_header( 'next', $v_sbfzk ); // obf
		} // obf

		return $v_booxu; // obf
	} // obf

	/** // obf
	 * Gets a font collection. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_erznf Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_erznf ) { // obf
		$v_dprjn       = $v_erznf->get_param( 'slug' ); // obf
		$v_ekqic = WP_Font_Library::get_instance()->get_font_collection( $v_dprjn ); // obf

		if ( ! $v_ekqic ) { // obf
			return new WP_Error( 'rest_font_collection_not_found', __( 'Font collection not found.' ), array( 'status' => 404 ) ); // obf
		} // obf

		return $v_wgyhz->prepare_item_for_response( $v_ekqic, $v_erznf ); // obf
	} // obf

	/** // obf
	* Prepare a single collection output for response. // obf
	* // obf
	* @since 6.5.0 // obf
	* // obf
	* @param WP_Font_Collection $v_tlyvt    Font collection object. // obf
	* @param WP_REST_Request    $v_erznf Request object. // obf
	* @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	*/ // obf
	public function prepare_item_for_response( $v_tlyvt, $v_erznf ) { // obf
		$v_nvjgn = $v_wgyhz->get_fields_for_response( $v_erznf ); // obf
		$v_mfvkm   = array(); // obf

		if ( rest_is_field_included( 'slug', $v_nvjgn ) ) { // obf
			$v_mfvkm['slug'] = $v_tlyvt->slug; // obf
		} // obf

		// If any data fields are requested, get the collection data. // obf
		$v_jppgj = array( 'name', 'description', 'font_families', 'categories' ); // obf
		if ( ! empty( array_intersect( $v_nvjgn, $v_jppgj ) ) ) { // obf
			$v_eehua = $v_tlyvt->get_data(); // obf
			if ( is_wp_error( $v_eehua ) ) { // obf
				$v_eehua->add_data( array( 'status' => 500 ) ); // obf
				return $v_eehua; // obf
			} // obf

			/** // obf
			 * Don't prepare the response body for HEAD requests. // obf
			 * Can't exit at the beginning of the method due to the potential need to return a WP_Error object. // obf
			 */ // obf
			if ( $v_erznf->is_method( 'HEAD' ) ) { // obf
				/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-font-collections-controller.php */ // obf
				return apply_filters( 'rest_prepare_font_collection', new WP_REST_Response( array() ), $v_tlyvt, $v_erznf ); // obf
			} // obf

			foreach ( $v_jppgj as $v_ojnls ) { // obf
				if ( rest_is_field_included( $v_ojnls, $v_nvjgn ) ) { // obf
					$v_mfvkm[ $v_ojnls ] = $v_eehua[ $v_ojnls ]; // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Don't prepare the response body for HEAD requests. // obf
		 * Can't exit at the beginning of the method due to the potential need to return a WP_Error object. // obf
		 */ // obf
		if ( $v_erznf->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-font-collections-controller.php */ // obf
			return apply_filters( 'rest_prepare_font_collection', new WP_REST_Response( array() ), $v_tlyvt, $v_erznf ); // obf
		} // obf

		$v_booxu = rest_ensure_response( $v_mfvkm ); // obf

		if ( rest_is_field_included( '_links', $v_nvjgn ) ) { // obf
			$v_jvaoq = $v_wgyhz->prepare_links( $v_tlyvt ); // obf
			$v_booxu->add_links( $v_jvaoq ); // obf
		} // obf

		$v_ixmhq        = ! empty( $v_erznf['context'] ) ? $v_erznf['context'] : 'view'; // obf
		$v_booxu->data = $v_wgyhz->add_additional_fields_to_object( $v_booxu->data, $v_erznf ); // obf
		$v_booxu->data = $v_wgyhz->filter_response_by_context( $v_booxu->data, $v_ixmhq ); // obf

		/** // obf
		 * Filters the font collection data for a REST API response. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param WP_REST_Response   $v_booxu The response object. // obf
		 * @param WP_Font_Collection $v_tlyvt     The font collection object. // obf
		 * @param WP_REST_Request    $v_erznf  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_font_collection', $v_booxu, $v_tlyvt, $v_erznf ); // obf
	} // obf

	/** // obf
	 * Retrieves the font collection's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_wgyhz->schema ) { // obf
			return $v_wgyhz->add_additional_fields_schema( $v_wgyhz->schema ); // obf
		} // obf

		$v_wbnbe = array( // obf
			'$v_wbnbe'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'font-collection', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'slug'          => array( // obf
					'description' => __( 'Unique identifier for the font collection.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'name'          => array( // obf
					'description' => __( 'The name for the font collection.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'description'   => array( // obf
					'description' => __( 'The description for the font collection.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'font_families' => array( // obf
					'description' => __( 'The font families for the font collection.' ), // obf
					'type'        => 'array', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'categories'    => array( // obf
					'description' => __( 'The categories for the font collection.' ), // obf
					'type'        => 'array', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
			), // obf
		); // obf

		$v_wgyhz->schema = $v_wbnbe; // obf

		return $v_wgyhz->add_additional_fields_schema( $v_wgyhz->schema ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Font_Collection $v_ekqic Font collection data // obf
	 * @return array Links for the given font collection. // obf
	 */ // obf
	protected function prepare_links( $v_ekqic ) { // obf
		return array( // obf
			'self'       => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%s', $v_wgyhz->namespace, $v_wgyhz->rest_base, $v_ekqic->slug ) ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_wgyhz->namespace, $v_wgyhz->rest_base ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the search params for the font collections. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_ujvrz = parent::get_collection_params(); // obf

		$v_ujvrz['context'] = $v_wgyhz->get_context_param( array( 'default' => 'view' ) ); // obf

		unset( $v_ujvrz['search'] ); // obf

		/** // obf
		 * Filters REST API collection parameters for the font collections controller. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param array $v_ujvrz JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_font_collections_collection_params', $v_ujvrz ); // obf
	} // obf

	/** // obf
	 * Checks whether the user has permissions to use the Fonts Collections. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return true|WP_Error True if the request has write access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_erznf ) { // phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable // obf
		if ( current_user_can( 'edit_theme_options' ) ) { // obf
			return true; // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_read', // obf
			__( 'Sorry, you are not allowed to access font collections.' ), // obf
			array( // obf
				'status' => rest_authorization_required_code(), // obf
			) // obf
		); // obf
	} // obf
} // obf