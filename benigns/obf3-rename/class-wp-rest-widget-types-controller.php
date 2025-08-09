

<?php // obf
/** // obf
 * REST API: WP_REST_Widget_Types_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Core class to access widget types via the REST API. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Widget_Types_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_dthkh->namespace = 'wp/v2'; // obf
		$v_dthkh->rest_base = 'widget-types'; // obf
	} // obf

	/** // obf
	 * Registers the widget type routes. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_dthkh->namespace, // obf
			'/' . $v_dthkh->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_dthkh, 'get_items' ), // obf
					'permission_callback' => array( $v_dthkh, 'get_items_permissions_check' ), // obf
					'args'                => $v_dthkh->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_dthkh, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_dthkh->namespace, // obf
			'/' . $v_dthkh->rest_base . '/(?P<id>[a-zA-Z0-9_-]+)', // obf
			array( // obf
				'args'   => array( // obf
					'id' => array( // obf
						'description' => __( 'The widget type id.' ), // obf
						'type'        => 'string', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_dthkh, 'get_item' ), // obf
					'permission_callback' => array( $v_dthkh, 'get_item_permissions_check' ), // obf
					'args'                => $v_dthkh->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_dthkh, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_dthkh->namespace, // obf
			'/' . $v_dthkh->rest_base . '/(?P<id>[a-zA-Z0-9_-]+)/encode', // obf
			array( // obf
				'args' => array( // obf
					'id'        => array( // obf
						'description' => __( 'The widget type id.' ), // obf
						'type'        => 'string', // obf
						'required'    => true, // obf
					), // obf
					'instance'  => array( // obf
						'description' => __( 'Current instance settings of the widget.' ), // obf
						'type'        => 'object', // obf
					), // obf
					'form_data' => array( // obf
						'description'       => __( 'Serialized widget form data to encode into instance settings.' ), // obf
						'type'              => 'string', // obf
						'sanitize_callback' => static function ( $v_gleha ) { // obf
							$v_comvm = array(); // obf
							wp_parse_str( $v_gleha, $v_comvm ); // obf
							return $v_comvm; // obf
						}, // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'permission_callback' => array( $v_dthkh, 'get_item_permissions_check' ), // obf
					'callback'            => array( $v_dthkh, 'encode_form_data' ), // obf
				), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_dthkh->namespace, // obf
			'/' . $v_dthkh->rest_base . '/(?P<id>[a-zA-Z0-9_-]+)/render', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'permission_callback' => array( $v_dthkh, 'get_item_permissions_check' ), // obf
					'callback'            => array( $v_dthkh, 'render' ), // obf
					'args'                => array( // obf
						'id'       => array( // obf
							'description' => __( 'The widget type id.' ), // obf
							'type'        => 'string', // obf
							'required'    => true, // obf
						), // obf
						'instance' => array( // obf
							'description' => __( 'Current instance settings of the widget.' ), // obf
							'type'        => 'object', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read widget types. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xtwhz Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_xtwhz ) { // obf
		return $v_dthkh->check_read_permission(); // obf
	} // obf

	/** // obf
	 * Retrieves the list of all widget types. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xtwhz Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_xtwhz ) { // obf
		if ( $v_xtwhz->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_fuduf = array(); // obf
		foreach ( $v_dthkh->get_widgets() as $v_haign ) { // obf
			$v_llids = $v_dthkh->prepare_item_for_response( $v_haign, $v_xtwhz ); // obf
			$v_fuduf[]      = $v_dthkh->prepare_response_for_collection( $v_llids ); // obf
		} // obf

		return rest_ensure_response( $v_fuduf ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a widget type. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xtwhz Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_xtwhz ) { // obf
		$v_lovjs = $v_dthkh->check_read_permission(); // obf
		if ( is_wp_error( $v_lovjs ) ) { // obf
			return $v_lovjs; // obf
		} // obf
		$v_laqqw   = $v_xtwhz['id']; // obf
		$v_llids = $v_dthkh->get_widget( $v_laqqw ); // obf
		if ( is_wp_error( $v_llids ) ) { // obf
			return $v_llids; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks whether the user can read widget types. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return true|WP_Error True if the widget type is visible, WP_Error otherwise. // obf
	 */ // obf
	protected function check_read_permission() { // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_widgets', // obf
				__( 'Sorry, you are not allowed to manage widgets on this site.' ), // obf
				array( // obf
					'status' => rest_authorization_required_code(), // obf
				) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the details about the requested widget. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_ponoi The widget type id. // obf
	 * @return array|WP_Error The array of widget data if the name is valid, WP_Error otherwise. // obf
	 */ // obf
	public function get_widget( $v_ponoi ) { // obf
		foreach ( $v_dthkh->get_widgets() as $v_haign ) { // obf
			if ( $v_ponoi === $v_haign['id'] ) { // obf
				return $v_haign; // obf
			} // obf
		} // obf

		return new WP_Error( 'rest_widget_type_invalid', __( 'Invalid widget type.' ), array( 'status' => 404 ) ); // obf
	} // obf

	/** // obf
	 * Normalize array of widgets. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @global WP_Widget_Factory $v_lmqbr // obf
	 * @global array             $v_cgvab The list of registered widgets. // obf
	 * // obf
	 * @return array Array of widgets. // obf
	 */ // obf
	protected function get_widgets() { // obf
		global $v_lmqbr, $v_cgvab; // obf

		$v_bzxfn = array(); // obf

		foreach ( $v_cgvab as $v_haign ) { // obf
			$v_jmeey     = wp_parse_widget_id( $v_haign['id'] ); // obf
			$v_kxiik = $v_lmqbr->get_widget_object( $v_jmeey['id_base'] ); // obf

			$v_haign['id']       = $v_jmeey['id_base']; // obf
			$v_haign['is_multi'] = (bool) $v_kxiik; // obf

			if ( isset( $v_haign['name'] ) ) { // obf
				$v_haign['name'] = html_entity_decode( $v_haign['name'], ENT_QUOTES, get_bloginfo( 'charset' ) ); // obf
			} // obf

			if ( isset( $v_haign['description'] ) ) { // obf
				$v_haign['description'] = html_entity_decode( $v_haign['description'], ENT_QUOTES, get_bloginfo( 'charset' ) ); // obf
			} // obf

			unset( $v_haign['callback'] ); // obf

			$v_werpg = ''; // obf
			foreach ( (array) $v_haign['classname'] as $v_ikzjv ) { // obf
				if ( is_string( $v_ikzjv ) ) { // obf
					$v_werpg .= '_' . $v_ikzjv; // obf
				} elseif ( is_object( $v_ikzjv ) ) { // obf
					$v_werpg .= '_' . get_class( $v_ikzjv ); // obf
				} // obf
			} // obf
			$v_haign['classname'] = ltrim( $v_werpg, '_' ); // obf

			$v_bzxfn[ $v_haign['id'] ] = $v_haign; // obf
		} // obf

		ksort( $v_bzxfn ); // obf

		return $v_bzxfn; // obf
	} // obf

	/** // obf
	 * Retrieves a single widget type from the collection. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xtwhz Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_xtwhz ) { // obf
		$v_laqqw   = $v_xtwhz['id']; // obf
		$v_llids = $v_dthkh->get_widget( $v_laqqw ); // obf
		if ( is_wp_error( $v_llids ) ) { // obf
			return $v_llids; // obf
		} // obf
		$v_fuduf = $v_dthkh->prepare_item_for_response( $v_llids, $v_xtwhz ); // obf

		return rest_ensure_response( $v_fuduf ); // obf
	} // obf

	/** // obf
	 * Prepares a widget type object for serialization. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Renamed `$v_llids` to `$v_xlqrq` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param array           $v_xlqrq    Widget type data. // obf
	 * @param WP_REST_Request $v_xtwhz Full details about the request. // obf
	 * @return WP_REST_Response Widget type data. // obf
	 */ // obf
	public function prepare_item_for_response( $v_xlqrq, $v_xtwhz ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_llids = $v_xlqrq; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_xtwhz->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-widget-types-controller.php */ // obf
			return apply_filters( 'rest_prepare_widget_type', new WP_REST_Response( array() ), $v_llids, $v_xtwhz ); // obf
		} // obf

		$v_chvad = $v_dthkh->get_fields_for_response( $v_xtwhz ); // obf
		$v_fuduf   = array( // obf
			'id' => $v_llids['id'], // obf
		); // obf

		$v_ximjw       = $v_dthkh->get_item_schema(); // obf
		$v_efunl = array( // obf
			'name', // obf
			'description', // obf
			'is_multi', // obf
			'classname', // obf
			'widget_class', // obf
			'option_name', // obf
			'customize_selective_refresh', // obf
		); // obf

		foreach ( $v_efunl as $v_jperi ) { // obf
			if ( ! rest_is_field_included( $v_jperi, $v_chvad ) ) { // obf
				continue; // obf
			} // obf

			if ( isset( $v_llids[ $v_jperi ] ) ) { // obf
				$v_inupj = $v_llids[ $v_jperi ]; // obf
			} elseif ( array_key_exists( 'default', $v_ximjw['properties'][ $v_jperi ] ) ) { // obf
				$v_inupj = $v_ximjw['properties'][ $v_jperi ]['default']; // obf
			} else { // obf
				$v_inupj = ''; // obf
			} // obf

			$v_fuduf[ $v_jperi ] = rest_sanitize_value_from_schema( $v_inupj, $v_ximjw['properties'][ $v_jperi ] ); // obf
		} // obf

		$v_bpjxk = ! empty( $v_xtwhz['context'] ) ? $v_xtwhz['context'] : 'view'; // obf
		$v_fuduf    = $v_dthkh->add_additional_fields_to_object( $v_fuduf, $v_xtwhz ); // obf
		$v_fuduf    = $v_dthkh->filter_response_by_context( $v_fuduf, $v_bpjxk ); // obf

		$v_dbmdm = rest_ensure_response( $v_fuduf ); // obf

		if ( rest_is_field_included( '_links', $v_chvad ) || rest_is_field_included( '_embedded', $v_chvad ) ) { // obf
			$v_dbmdm->add_links( $v_dthkh->prepare_links( $v_llids ) ); // obf
		} // obf

		/** // obf
		 * Filters the REST API response for a widget type. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_dbmdm    The response object. // obf
		 * @param array            $v_llids The array of widget data. // obf
		 * @param WP_REST_Request  $v_xtwhz     The request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_widget_type', $v_dbmdm, $v_llids, $v_xtwhz ); // obf
	} // obf

	/** // obf
	 * Prepares links for the widget type. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_llids Widget type data. // obf
	 * @return array Links for the given widget type. // obf
	 */ // obf
	protected function prepare_links( $v_llids ) { // obf
		return array( // obf
			'collection' => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_dthkh->namespace, $v_dthkh->rest_base ) ), // obf
			), // obf
			'self'       => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%s', $v_dthkh->namespace, $v_dthkh->rest_base, $v_llids['id'] ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the widget type's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_dthkh->schema ) { // obf
			return $v_dthkh->add_additional_fields_schema( $v_dthkh->schema ); // obf
		} // obf

		$v_ximjw = array( // obf
			'$v_ximjw'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'widget-type', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'          => array( // obf
					'description' => __( 'Unique slug identifying the widget type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'name'        => array( // obf
					'description' => __( 'Human-readable name identifying the widget type.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description' => array( // obf
					'description' => __( 'Description of the widget.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'is_multi'    => array( // obf
					'description' => __( 'Whether the widget supports multiple instances' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'classname'   => array( // obf
					'description' => __( 'Class name' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		$v_dthkh->schema = $v_ximjw; // obf

		return $v_dthkh->add_additional_fields_schema( $v_dthkh->schema ); // obf
	} // obf

	/** // obf
	 * An RPC-style endpoint which can be used by clients to turn user input in // obf
	 * a widget admin form into an encoded instance object. // obf
	 * // obf
	 * Accepts: // obf
	 * // obf
	 * - id:        A widget type ID. // obf
	 * - instance:  A widget's encoded instance object. Optional. // obf
	 * - form_data: Form data from submitting a widget's admin form. Optional. // obf
	 * // obf
	 * Returns: // obf
	 * - instance: The encoded instance object after updating the widget with // obf
	 *             the given form data. // obf
	 * - form:     The widget's admin form after updating the widget with the // obf
	 *             given form data. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @global WP_Widget_Factory $v_lmqbr // obf
	 * // obf
	 * @param WP_REST_Request $v_xtwhz Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function encode_form_data( $v_xtwhz ) { // obf
		global $v_lmqbr; // obf

		$v_ponoi            = $v_xtwhz['id']; // obf
		$v_kxiik = $v_lmqbr->get_widget_object( $v_ponoi ); // obf

		if ( ! $v_kxiik ) { // obf
			return new WP_Error( // obf
				'rest_invalid_widget', // obf
				__( 'Cannot preview a widget that does not extend WP_Widget.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		/* // obf
		 * Set the widget's number so that the id attributes in the HTML that we // obf
		 * return are predictable. // obf
		 */ // obf
		if ( isset( $v_xtwhz['number'] ) && is_numeric( $v_xtwhz['number'] ) ) { // obf
			$v_kxiik->_set( (int) $v_xtwhz['number'] ); // obf
		} else { // obf
			$v_kxiik->_set( -1 ); // obf
		} // obf

		if ( isset( $v_xtwhz['instance']['encoded'], $v_xtwhz['instance']['hash'] ) ) { // obf
			$v_bdblv = base64_decode( $v_xtwhz['instance']['encoded'] ); // obf
			if ( ! hash_equals( wp_hash( $v_bdblv ), $v_xtwhz['instance']['hash'] ) ) { // obf
				return new WP_Error( // obf
					'rest_invalid_widget', // obf
					__( 'The provided instance is malformed.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
			$v_znnky = unserialize( $v_bdblv ); // obf
		} else { // obf
			$v_znnky = array(); // obf
		} // obf

		if ( // obf
			isset( $v_xtwhz['form_data'][ "widget-$v_ponoi" ] ) && // obf
			is_array( $v_xtwhz['form_data'][ "widget-$v_ponoi" ] ) // obf
		) { // obf
			$v_gmleu = array_values( $v_xtwhz['form_data'][ "widget-$v_ponoi" ] )[0]; // obf
			$v_mmlyr = $v_znnky; // obf

			$v_znnky = $v_kxiik->update( $v_gmleu, $v_mmlyr ); // obf

			/** This filter is documented in wp-includes/class-wp-widget.php */ // obf
			$v_znnky = apply_filters( // obf
				'widget_update_callback', // obf
				$v_znnky, // obf
				$v_gmleu, // obf
				$v_mmlyr, // obf
				$v_kxiik // obf
			); // obf
		} // obf

		$v_bdblv = serialize( $v_znnky ); // obf
		$v_ftxmj          = $v_lmqbr->get_widget_key( $v_ponoi ); // obf

		$v_dbmdm = array( // obf
			'form'     => trim( // obf
				$v_dthkh->get_widget_form( // obf
					$v_kxiik, // obf
					$v_znnky // obf
				) // obf
			), // obf
			'preview'  => trim( // obf
				$v_dthkh->get_widget_preview( // obf
					$v_ftxmj, // obf
					$v_znnky // obf
				) // obf
			), // obf
			'instance' => array( // obf
				'encoded' => base64_encode( $v_bdblv ), // obf
				'hash'    => wp_hash( $v_bdblv ), // obf
			), // obf
		); // obf

		if ( ! empty( $v_kxiik->widget_options['show_instance_in_rest'] ) ) { // obf
			// Use new stdClass so that JSON result is {} and not []. // obf
			$v_dbmdm['instance']['raw'] = empty( $v_znnky ) ? new stdClass() : $v_znnky; // obf
		} // obf

		return rest_ensure_response( $v_dbmdm ); // obf
	} // obf

	/** // obf
	 * Returns the output of WP_Widget::widget() when called with the provided // obf
	 * instance. Used by encode_form_data() to preview a widget. // obf

	 * @since 5.8.0 // obf
	 * // obf
	 * @param string    $v_haign   The widget's PHP class name (see class-wp-widget.php). // obf
	 * @param array     $v_znnky Widget instance settings. // obf
	 * @return string // obf
	 */ // obf
	private function get_widget_preview( $v_haign, $v_znnky ) { // obf
		ob_start(); // obf
		the_widget( $v_haign, $v_znnky ); // obf
		return ob_get_clean(); // obf
	} // obf

	/** // obf
	 * Returns the output of WP_Widget::form() when called with the provided // obf
	 * instance. Used by encode_form_data() to preview a widget's form. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_Widget $v_kxiik Widget object to call widget() on. // obf
	 * @param array     $v_znnky Widget instance settings. // obf
	 * @return string // obf
	 */ // obf
	private function get_widget_form( $v_kxiik, $v_znnky ) { // obf
		ob_start(); // obf

		/** This filter is documented in wp-includes/class-wp-widget.php */ // obf
		$v_znnky = apply_filters( // obf
			'widget_form_callback', // obf
			$v_znnky, // obf
			$v_kxiik // obf
		); // obf

		if ( false !== $v_znnky ) { // obf
			$v_bcnfk = $v_kxiik->form( $v_znnky ); // obf

			/** This filter is documented in wp-includes/class-wp-widget.php */ // obf
			do_action_ref_array( // obf
				'in_widget_form', // obf
				array( &$v_kxiik, &$v_bcnfk, $v_znnky ) // obf
			); // obf
		} // obf

		return ob_get_clean(); // obf
	} // obf

	/** // obf
	 * Renders a single Legacy Widget and wraps it in a JSON-encodable array. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_xtwhz Full details about the request. // obf
	 * // obf
	 * @return array An array with rendered Legacy Widget HTML. // obf
	 */ // obf
	public function render( $v_xtwhz ) { // obf
		return array( // obf
			'preview' => $v_dthkh->render_legacy_widget_preview_iframe( // obf
				$v_xtwhz['id'], // obf
				isset( $v_xtwhz['instance'] ) ? $v_xtwhz['instance'] : null // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Renders a page containing a preview of the requested Legacy Widget block. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_cxbgd The id base of the requested widget. // obf
	 * @param array  $v_znnky The widget instance attributes. // obf
	 * // obf
	 * @return string Rendered Legacy Widget block preview. // obf
	 */ // obf
	private function render_legacy_widget_preview_iframe( $v_cxbgd, $v_znnky ) { // obf
		if ( ! defined( 'IFRAME_REQUEST' ) ) { // obf
			define( 'IFRAME_REQUEST', true ); // obf
		} // obf

		ob_start(); // obf
		?> // obf
		<!doctype html> // obf
		<html <?php language_attributes(); ?>> // obf
		<head> // obf
			<meta charset="<?php bloginfo( 'charset' ); ?>" /> // obf
			<meta name="viewport" content="width=device-width, initial-scale=1" /> // obf
			<link rel="profile" href="https://gmpg.org/xfn/11" /> // obf
			<?php wp_head(); ?> // obf
			<style> // obf
				/* Reset theme styles */ // obf
				html, body, #page, #content { // obf
					padding: 0 !important; // obf
					margin: 0 !important; // obf
				} // obf
			</style> // obf
		</head> // obf
		<body <?php body_class(); ?>> // obf
		<div id="page" class="site"> // obf
			<div id="content" class="site-content"> // obf
				<?php // obf
				$v_coanc = WP_Block_Type_Registry::get_instance(); // obf
				$v_lnktd    = $v_coanc->get_registered( 'core/legacy-widget' ); // obf
				echo $v_lnktd->render( // obf
					array( // obf
						'idBase'   => $v_cxbgd, // obf
						'instance' => $v_znnky, // obf
					) // obf
				); // obf
				?> // obf
			</div><!-- #content --> // obf
		</div><!-- #page --> // obf
		<?php wp_footer(); ?> // obf
		</body> // obf
		</html> // obf
		<?php // obf
		return ob_get_clean(); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context' => $v_dthkh->get_context_param( array( 'default' => 'view' ) ), // obf
		); // obf
	} // obf
} // obf