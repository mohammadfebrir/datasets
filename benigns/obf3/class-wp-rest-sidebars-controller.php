

<?php // obf
/** // obf
 * REST API: WP_REST_Sidebars_Controller class // obf
 * // obf
 * Original code from {@link https://github.com/martin-pettersson/wp-rest-api-sidebars Martin Pettersson (martin_pettersson@outlook.com)}. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Core class used to manage a site's sidebars. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Sidebars_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Tracks whether {@see retrieve_widgets()} has been called in the current request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_qegtw = false; // obf

	/** // obf
	 * Sidebars controller constructor. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_zqjsn->namespace = 'wp/v2'; // obf
		$v_zqjsn->rest_base = 'sidebars'; // obf
	} // obf

	/** // obf
	 * Registers the controllers routes. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_zqjsn->namespace, // obf
			'/' . $v_zqjsn->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_zqjsn, 'get_items' ), // obf
					'permission_callback' => array( $v_zqjsn, 'get_items_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_zqjsn->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_zqjsn, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_zqjsn->namespace, // obf
			'/' . $v_zqjsn->rest_base . '/(?P<id>[\w-]+)', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_zqjsn, 'get_item' ), // obf
					'permission_callback' => array( $v_zqjsn, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'id'      => array( // obf
							'description' => __( 'The id of a registered sidebar' ), // obf
							'type'        => 'string', // obf
						), // obf
						'context' => $v_zqjsn->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_zqjsn, 'update_item' ), // obf
					'permission_callback' => array( $v_zqjsn, 'update_item_permissions_check' ), // obf
					'args'                => $v_zqjsn->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				'schema' => array( $v_zqjsn, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get sidebars. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_naxgq Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_naxgq ) { // obf
		$v_zqjsn->retrieve_widgets(); // obf
		foreach ( wp_get_sidebars_widgets() as $v_ddhvu => $v_zghne ) { // obf
			$v_qwcue = $v_zqjsn->get_sidebar( $v_ddhvu ); // obf

			if ( ! $v_qwcue ) { // obf
				continue; // obf
			} // obf

			if ( $v_zqjsn->check_read_permission( $v_qwcue ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return $v_zqjsn->do_permissions_check(); // obf
	} // obf

	/** // obf
	 * Retrieves the list of sidebars (active or inactive). // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_naxgq Full details about the request. // obf
	 * @return WP_REST_Response Response object on success. // obf
	 */ // obf
	public function get_items( $v_naxgq ) { // obf
		if ( $v_naxgq->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_zqjsn->retrieve_widgets(); // obf

		$v_eynar              = array(); // obf
		$v_ekiqx = $v_zqjsn->do_permissions_check(); // obf

		foreach ( wp_get_sidebars_widgets() as $v_ddhvu => $v_zghne ) { // obf
			$v_qwcue = $v_zqjsn->get_sidebar( $v_ddhvu ); // obf

			if ( ! $v_qwcue ) { // obf
				continue; // obf
			} // obf

			if ( is_wp_error( $v_ekiqx ) && ! $v_zqjsn->check_read_permission( $v_qwcue ) ) { // obf
				continue; // obf
			} // obf

			$v_eynar[] = $v_zqjsn->prepare_response_for_collection( // obf
				$v_zqjsn->prepare_item_for_response( $v_qwcue, $v_naxgq ) // obf
			); // obf
		} // obf

		return rest_ensure_response( $v_eynar ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get a single sidebar. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_naxgq Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_naxgq ) { // obf
		$v_zqjsn->retrieve_widgets(); // obf

		$v_qwcue = $v_zqjsn->get_sidebar( $v_naxgq['id'] ); // obf
		if ( $v_qwcue && $v_zqjsn->check_read_permission( $v_qwcue ) ) { // obf
			return true; // obf
		} // obf

		return $v_zqjsn->do_permissions_check(); // obf
	} // obf

	/** // obf
	 * Checks if a sidebar can be read publicly. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_qwcue The registered sidebar configuration. // obf
	 * @return bool Whether the side can be read. // obf
	 */ // obf
	protected function check_read_permission( $v_qwcue ) { // obf
		return ! empty( $v_qwcue['show_in_rest'] ); // obf
	} // obf

	/** // obf
	 * Retrieves one sidebar from the collection. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_naxgq Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_naxgq ) { // obf
		$v_zqjsn->retrieve_widgets(); // obf

		$v_qwcue = $v_zqjsn->get_sidebar( $v_naxgq['id'] ); // obf
		if ( ! $v_qwcue ) { // obf
			return new WP_Error( 'rest_sidebar_not_found', __( 'No sidebar exists with that id.' ), array( 'status' => 404 ) ); // obf
		} // obf

		return $v_zqjsn->prepare_item_for_response( $v_qwcue, $v_naxgq ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to update sidebars. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_naxgq Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_naxgq ) { // obf
		return $v_zqjsn->do_permissions_check(); // obf
	} // obf

	/** // obf
	 * Updates a sidebar. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_naxgq Full details about the request. // obf
	 * @return WP_REST_Response Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_naxgq ) { // obf
		if ( isset( $v_naxgq['widgets'] ) ) { // obf
			$v_gdcfe = wp_get_sidebars_widgets(); // obf

			foreach ( $v_gdcfe as $v_xsgom => $v_zghne ) { // obf
				foreach ( $v_zghne as $v_jvtax => $v_nqzga ) { // obf
					// This automatically removes the passed widget IDs from any other sidebars in use. // obf
					if ( $v_xsgom !== $v_naxgq['id'] && in_array( $v_nqzga, $v_naxgq['widgets'], true ) ) { // obf
						unset( $v_gdcfe[ $v_xsgom ][ $v_jvtax ] ); // obf
					} // obf

					// This automatically removes omitted widget IDs to the inactive sidebar. // obf
					if ( $v_xsgom === $v_naxgq['id'] && ! in_array( $v_nqzga, $v_naxgq['widgets'], true ) ) { // obf
						$v_gdcfe['wp_inactive_widgets'][] = $v_nqzga; // obf
					} // obf
				} // obf
			} // obf

			$v_gdcfe[ $v_naxgq['id'] ] = $v_naxgq['widgets']; // obf

			wp_set_sidebars_widgets( $v_gdcfe ); // obf
		} // obf

		$v_naxgq['context'] = 'edit'; // obf

		$v_qwcue = $v_zqjsn->get_sidebar( $v_naxgq['id'] ); // obf

		/** // obf
		 * Fires after a sidebar is updated via the REST API. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param array           $v_qwcue The updated sidebar. // obf
		 * @param WP_REST_Request $v_naxgq Request object. // obf
		 */ // obf
		do_action( 'rest_save_sidebar', $v_qwcue, $v_naxgq ); // obf

		return $v_zqjsn->prepare_item_for_response( $v_qwcue, $v_naxgq ); // obf
	} // obf

	/** // obf
	 * Checks if the user has permissions to make the request. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	protected function do_permissions_check() { // obf
		/* // obf
		 * Verify if the current user has edit_theme_options capability. // obf
		 * This capability is required to access the widgets screen. // obf
		 */ // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_widgets', // obf
				__( 'Sorry, you are not allowed to manage widgets on this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves the registered sidebar with the given id. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string|int $v_ddhvu ID of the sidebar. // obf
	 * @return array|null The discovered sidebar, or null if it is not registered. // obf
	 */ // obf
	protected function get_sidebar( $v_ddhvu ) { // obf
		return wp_get_sidebar( $v_ddhvu ); // obf
	} // obf

	/** // obf
	 * Looks for "lost" widgets once per request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @see retrieve_widgets() // obf
	 */ // obf
	protected function retrieve_widgets() { // obf
		if ( ! $v_zqjsn->widgets_retrieved ) { // obf
			retrieve_widgets(); // obf
			$v_zqjsn->widgets_retrieved = true; // obf
		} // obf
	} // obf

	/** // obf
	 * Prepares a single sidebar output for response. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Renamed `$v_fupbq` to `$v_hdvon` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @global array $v_tbxal The registered sidebars. // obf
	 * @global array $v_yutpp  The registered widgets. // obf
	 * // obf
	 * @param array           $v_hdvon    Sidebar instance. // obf
	 * @param WP_REST_Request $v_naxgq Full details about the request. // obf
	 * @return WP_REST_Response Prepared response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_hdvon, $v_naxgq ) { // obf
		global $v_tbxal, $v_yutpp; // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_fupbq = $v_hdvon; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_naxgq->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-sidebars-controller.php */ // obf
			return apply_filters( 'rest_prepare_sidebar', new WP_REST_Response( array() ), $v_fupbq, $v_naxgq ); // obf
		} // obf

		$v_ddhvu      = $v_fupbq['id']; // obf
		$v_qwcue = array( 'id' => $v_ddhvu ); // obf

		if ( isset( $v_tbxal[ $v_ddhvu ] ) ) { // obf
			$v_bjxzg = $v_tbxal[ $v_ddhvu ]; // obf

			$v_qwcue['status']        = 'active'; // obf
			$v_qwcue['name']          = isset( $v_bjxzg['name'] ) ? $v_bjxzg['name'] : ''; // obf
			$v_qwcue['description']   = isset( $v_bjxzg['description'] ) ? wp_sidebar_description( $v_ddhvu ) : ''; // obf
			$v_qwcue['class']         = isset( $v_bjxzg['class'] ) ? $v_bjxzg['class'] : ''; // obf
			$v_qwcue['before_widget'] = isset( $v_bjxzg['before_widget'] ) ? $v_bjxzg['before_widget'] : ''; // obf
			$v_qwcue['after_widget']  = isset( $v_bjxzg['after_widget'] ) ? $v_bjxzg['after_widget'] : ''; // obf
			$v_qwcue['before_title']  = isset( $v_bjxzg['before_title'] ) ? $v_bjxzg['before_title'] : ''; // obf
			$v_qwcue['after_title']   = isset( $v_bjxzg['after_title'] ) ? $v_bjxzg['after_title'] : ''; // obf
		} else { // obf
			$v_qwcue['status']      = 'inactive'; // obf
			$v_qwcue['name']        = $v_fupbq['name']; // obf
			$v_qwcue['description'] = ''; // obf
			$v_qwcue['class']       = ''; // obf
		} // obf

		if ( wp_is_block_theme() ) { // obf
			$v_qwcue['status'] = 'inactive'; // obf
		} // obf

		$v_bnwjs = $v_zqjsn->get_fields_for_response( $v_naxgq ); // obf
		if ( rest_is_field_included( 'widgets', $v_bnwjs ) ) { // obf
			$v_gdcfe = wp_get_sidebars_widgets(); // obf
			$v_zghne  = array_filter( // obf
				isset( $v_gdcfe[ $v_qwcue['id'] ] ) ? $v_gdcfe[ $v_qwcue['id'] ] : array(), // obf
				static function ( $v_nqzga ) use ( $v_yutpp ) { // obf
					return isset( $v_yutpp[ $v_nqzga ] ); // obf
				} // obf
			); // obf

			$v_qwcue['widgets'] = array_values( $v_zghne ); // obf
		} // obf

		$v_jstba = $v_zqjsn->get_item_schema(); // obf
		$v_eynar   = array(); // obf
		foreach ( $v_jstba['properties'] as $v_rfnrr => $v_djfck ) { // obf
			if ( isset( $v_qwcue[ $v_rfnrr ] ) && true === rest_validate_value_from_schema( $v_qwcue[ $v_rfnrr ], $v_djfck ) ) { // obf
				$v_eynar[ $v_rfnrr ] = $v_qwcue[ $v_rfnrr ]; // obf
			} elseif ( isset( $v_djfck['default'] ) ) { // obf
				$v_eynar[ $v_rfnrr ] = $v_djfck['default']; // obf
			} // obf
		} // obf

		$v_fasap = ! empty( $v_naxgq['context'] ) ? $v_naxgq['context'] : 'view'; // obf
		$v_eynar    = $v_zqjsn->add_additional_fields_to_object( $v_eynar, $v_naxgq ); // obf
		$v_eynar    = $v_zqjsn->filter_response_by_context( $v_eynar, $v_fasap ); // obf

		$v_ywzhh = rest_ensure_response( $v_eynar ); // obf

		if ( rest_is_field_included( '_links', $v_bnwjs ) || rest_is_field_included( '_embedded', $v_bnwjs ) ) { // obf
			$v_ywzhh->add_links( $v_zqjsn->prepare_links( $v_qwcue ) ); // obf
		} // obf

		/** // obf
		 * Filters the REST API response for a sidebar. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_ywzhh    The response object. // obf
		 * @param array            $v_fupbq The raw sidebar data. // obf
		 * @param WP_REST_Request  $v_naxgq     The request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_sidebar', $v_ywzhh, $v_fupbq, $v_naxgq ); // obf
	} // obf

	/** // obf
	 * Prepares links for the sidebar. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_qwcue Sidebar. // obf
	 * @return array Links for the given widget. // obf
	 */ // obf
	protected function prepare_links( $v_qwcue ) { // obf
		return array( // obf
			'collection'               => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_zqjsn->namespace, $v_zqjsn->rest_base ) ), // obf
			), // obf
			'self'                     => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%s', $v_zqjsn->namespace, $v_zqjsn->rest_base, $v_qwcue['id'] ) ), // obf
			), // obf
			'https://api.w.org/widget' => array( // obf
				'href'       => add_query_arg( 'sidebar', $v_qwcue['id'], rest_url( '/wp/v2/widgets' ) ), // obf
				'embeddable' => true, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the block type' schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_zqjsn->schema ) { // obf
			return $v_zqjsn->add_additional_fields_schema( $v_zqjsn->schema ); // obf
		} // obf

		$v_jstba = array( // obf
			'$v_jstba'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'sidebar', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'            => array( // obf
					'description' => __( 'ID of sidebar.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'name'          => array( // obf
					'description' => __( 'Unique name identifying the sidebar.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description'   => array( // obf
					'description' => __( 'Description of sidebar.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'class'         => array( // obf
					'description' => __( 'Extra CSS class to assign to the sidebar in the Widgets interface.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'before_widget' => array( // obf
					'description' => __( 'HTML content to prepend to each widget\'s HTML output when assigned to this sidebar. Default is an opening list item element.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'after_widget'  => array( // obf
					'description' => __( 'HTML content to append to each widget\'s HTML output when assigned to this sidebar. Default is a closing list item element.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'before_title'  => array( // obf
					'description' => __( 'HTML content to prepend to the sidebar title when displayed. Default is an opening h2 element.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'after_title'   => array( // obf
					'description' => __( 'HTML content to append to the sidebar title when displayed. Default is a closing h2 element.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'status'        => array( // obf
					'description' => __( 'Status of sidebar.' ), // obf
					'type'        => 'string', // obf
					'enum'        => array( 'active', 'inactive' ), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'widgets'       => array( // obf
					'description' => __( 'Nested widgets.' ), // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type' => array( 'object', 'string' ), // obf
					), // obf
					'default'     => array(), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				), // obf
			), // obf
		); // obf

		$v_zqjsn->schema = $v_jstba; // obf

		return $v_zqjsn->add_additional_fields_schema( $v_zqjsn->schema ); // obf
	} // obf
} // obf