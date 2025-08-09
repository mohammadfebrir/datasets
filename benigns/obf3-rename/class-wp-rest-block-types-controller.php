

<?php // obf
/** // obf
 * REST API: WP_REST_Block_Types_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Core class used to access block types via the REST API. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Block_Types_Controller extends WP_REST_Controller { // obf

	const NAME_PATTERN = '^[a-z][a-z0-9-]*/[a-z][a-z0-9-]*$'; // obf

	/** // obf
	 * Instance of WP_Block_Type_Registry. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Block_Type_Registry // obf
	 */ // obf
	protected $v_uwdzu; // obf

	/** // obf
	 * Instance of WP_Block_Styles_Registry. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Block_Styles_Registry // obf
	 */ // obf
	protected $v_ispza; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_iwafm->namespace      = 'wp/v2'; // obf
		$v_iwafm->rest_base      = 'block-types'; // obf
		$v_iwafm->block_registry = WP_Block_Type_Registry::get_instance(); // obf
		$v_iwafm->style_registry = WP_Block_Styles_Registry::get_instance(); // obf
	} // obf

	/** // obf
	 * Registers the routes for block types. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_iwafm->namespace, // obf
			'/' . $v_iwafm->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_iwafm, 'get_items' ), // obf
					'permission_callback' => array( $v_iwafm, 'get_items_permissions_check' ), // obf
					'args'                => $v_iwafm->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_iwafm, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_iwafm->namespace, // obf
			'/' . $v_iwafm->rest_base . '/(?P<namespace>[a-zA-Z0-9_-]+)', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_iwafm, 'get_items' ), // obf
					'permission_callback' => array( $v_iwafm, 'get_items_permissions_check' ), // obf
					'args'                => $v_iwafm->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_iwafm, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_iwafm->namespace, // obf
			'/' . $v_iwafm->rest_base . '/(?P<namespace>[a-zA-Z0-9_-]+)/(?P<name>[a-zA-Z0-9_-]+)', // obf
			array( // obf
				'args'   => array( // obf
					'name'      => array( // obf
						'description' => __( 'Block name.' ), // obf
						'type'        => 'string', // obf
					), // obf
					'namespace' => array( // obf
						'description' => __( 'Block namespace.' ), // obf
						'type'        => 'string', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_iwafm, 'get_item' ), // obf
					'permission_callback' => array( $v_iwafm, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_iwafm->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_iwafm, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read post block types. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lgwmn Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_lgwmn ) { // obf
		return $v_iwafm->check_read_permission(); // obf
	} // obf

	/** // obf
	 * Retrieves all post block types, depending on user context. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lgwmn Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_lgwmn ) { // obf
		if ( $v_lgwmn->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_frihb        = array(); // obf
		$v_vtiko = $v_iwafm->block_registry->get_all_registered(); // obf

		// Retrieve the list of registered collection query parameters. // obf
		$v_aoxat = $v_iwafm->get_collection_params(); // obf
		$v_dnvue  = ''; // obf
		if ( isset( $v_aoxat['namespace'] ) && ! empty( $v_lgwmn['namespace'] ) ) { // obf
			$v_dnvue = $v_lgwmn['namespace']; // obf
		} // obf

		foreach ( $v_vtiko as $v_vuuam ) { // obf
			if ( $v_dnvue ) { // obf
				list ( $v_ixkyf ) = explode( '/', $v_vuuam->name ); // obf

				if ( $v_dnvue !== $v_ixkyf ) { // obf
					continue; // obf
				} // obf
			} // obf
			$v_twhmm = $v_iwafm->prepare_item_for_response( $v_vuuam, $v_lgwmn ); // obf
			$v_frihb[]     = $v_iwafm->prepare_response_for_collection( $v_twhmm ); // obf
		} // obf

		return rest_ensure_response( $v_frihb ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a block type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lgwmn Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_lgwmn ) { // obf
		$v_wxqrq = $v_iwafm->check_read_permission(); // obf
		if ( is_wp_error( $v_wxqrq ) ) { // obf
			return $v_wxqrq; // obf
		} // obf
		$v_tucye = sprintf( '%s/%s', $v_lgwmn['namespace'], $v_lgwmn['name'] ); // obf
		$v_twhmm = $v_iwafm->get_block( $v_tucye ); // obf
		if ( is_wp_error( $v_twhmm ) ) { // obf
			return $v_twhmm; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks whether a given block type should be visible. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return true|WP_Error True if the block type is visible, WP_Error otherwise. // obf
	 */ // obf
	protected function check_read_permission() { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf
		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_hjgyd ) { // obf
			if ( current_user_can( $v_hjgyd->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( 'rest_block_type_cannot_view', __( 'Sorry, you are not allowed to manage block types.' ), array( 'status' => rest_authorization_required_code() ) ); // obf
	} // obf

	/** // obf
	 * Get the block, if the name is valid. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_dthlo Block name. // obf
	 * @return WP_Block_Type|WP_Error Block type object if name is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_block( $v_dthlo ) { // obf
		$v_twhmm = $v_iwafm->block_registry->get_registered( $v_dthlo ); // obf
		if ( empty( $v_twhmm ) ) { // obf
			return new WP_Error( 'rest_block_type_invalid', __( 'Invalid block type.' ), array( 'status' => 404 ) ); // obf
		} // obf

		return $v_twhmm; // obf
	} // obf

	/** // obf
	 * Retrieves a specific block type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lgwmn Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_lgwmn ) { // obf
		$v_tucye = sprintf( '%s/%s', $v_lgwmn['namespace'], $v_lgwmn['name'] ); // obf
		$v_twhmm = $v_iwafm->get_block( $v_tucye ); // obf
		if ( is_wp_error( $v_twhmm ) ) { // obf
			return $v_twhmm; // obf
		} // obf
		$v_frihb = $v_iwafm->prepare_item_for_response( $v_twhmm, $v_lgwmn ); // obf

		return rest_ensure_response( $v_frihb ); // obf
	} // obf

	/** // obf
	 * Prepares a block type object for serialization. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.9.0 Renamed `$v_twhmm` to `$v_vrctm` to match parent class for PHP 8 named parameter support. // obf
	 * @since 6.3.0 Added `selectors` field. // obf
	 * @since 6.5.0 Added `view_script_module_ids` field. // obf
	 * // obf
	 * @param WP_Block_Type   $v_vrctm    Block type data. // obf
	 * @param WP_REST_Request $v_lgwmn Full details about the request. // obf
	 * @return WP_REST_Response Block type data. // obf
	 */ // obf
	public function prepare_item_for_response( $v_vrctm, $v_lgwmn ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_twhmm = $v_vrctm; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_lgwmn->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-block-types-controller.php */ // obf
			return apply_filters( 'rest_prepare_block_type', new WP_REST_Response( array() ), $v_twhmm, $v_lgwmn ); // obf
		} // obf

		$v_olxay = $v_iwafm->get_fields_for_response( $v_lgwmn ); // obf
		$v_frihb   = array(); // obf

		if ( rest_is_field_included( 'attributes', $v_olxay ) ) { // obf
			$v_frihb['attributes'] = $v_twhmm->get_attributes(); // obf
		} // obf

		if ( rest_is_field_included( 'is_dynamic', $v_olxay ) ) { // obf
			$v_frihb['is_dynamic'] = $v_twhmm->is_dynamic(); // obf
		} // obf

		$v_azhkj = $v_iwafm->get_item_schema(); // obf
		// Fields deprecated in WordPress 6.1, but left in the schema for backwards compatibility. // obf
		$v_knlaz = array( // obf
			'editor_script', // obf
			'script', // obf
			'view_script', // obf
			'editor_style', // obf
			'style', // obf
		); // obf
		$v_aorkj      = array_merge( // obf
			array( // obf
				'api_version', // obf
				'name', // obf
				'title', // obf
				'description', // obf
				'icon', // obf
				'category', // obf
				'keywords', // obf
				'parent', // obf
				'ancestor', // obf
				'allowed_blocks', // obf
				'provides_context', // obf
				'uses_context', // obf
				'selectors', // obf
				'supports', // obf
				'styles', // obf
				'textdomain', // obf
				'example', // obf
				'editor_script_handles', // obf
				'script_handles', // obf
				'view_script_handles', // obf
				'view_script_module_ids', // obf
				'editor_style_handles', // obf
				'style_handles', // obf
				'view_style_handles', // obf
				'variations', // obf
				'block_hooks', // obf
			), // obf
			$v_knlaz // obf
		); // obf
		foreach ( $v_aorkj as $v_bsjri ) { // obf
			if ( rest_is_field_included( $v_bsjri, $v_olxay ) ) { // obf
				if ( isset( $v_twhmm->$v_bsjri ) ) { // obf
					$v_yzxnt = $v_twhmm->$v_bsjri; // obf
					if ( in_array( $v_bsjri, $v_knlaz, true ) && is_array( $v_yzxnt ) ) { // obf
						// Since the schema only allows strings or null (but no arrays), we return the first array item. // obf
						$v_yzxnt = ! empty( $v_yzxnt ) ? array_shift( $v_yzxnt ) : ''; // obf
					} // obf
				} elseif ( array_key_exists( 'default', $v_azhkj['properties'][ $v_bsjri ] ) ) { // obf
					$v_yzxnt = $v_azhkj['properties'][ $v_bsjri ]['default']; // obf
				} else { // obf
					$v_yzxnt = ''; // obf
				} // obf
				$v_frihb[ $v_bsjri ] = rest_sanitize_value_from_schema( $v_yzxnt, $v_azhkj['properties'][ $v_bsjri ] ); // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'styles', $v_olxay ) ) { // obf
			$v_zblre         = $v_iwafm->style_registry->get_registered_styles_for_block( $v_twhmm->name ); // obf
			$v_zblre         = array_values( $v_zblre ); // obf
			$v_frihb['styles'] = wp_parse_args( $v_zblre, $v_frihb['styles'] ); // obf
			$v_frihb['styles'] = array_filter( $v_frihb['styles'] ); // obf
		} // obf

		$v_zciow = ! empty( $v_lgwmn['context'] ) ? $v_lgwmn['context'] : 'view'; // obf
		$v_frihb    = $v_iwafm->add_additional_fields_to_object( $v_frihb, $v_lgwmn ); // obf
		$v_frihb    = $v_iwafm->filter_response_by_context( $v_frihb, $v_zciow ); // obf

		$v_pwdxc = rest_ensure_response( $v_frihb ); // obf

		if ( rest_is_field_included( '_links', $v_olxay ) || rest_is_field_included( '_embedded', $v_olxay ) ) { // obf
			$v_pwdxc->add_links( $v_iwafm->prepare_links( $v_twhmm ) ); // obf
		} // obf

		/** // obf
		 * Filters a block type returned from the REST API. // obf
		 * // obf
		 * Allows modification of the block type data right before it is returned. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_pwdxc   The response object. // obf
		 * @param WP_Block_Type    $v_twhmm The original block type object. // obf
		 * @param WP_REST_Request  $v_lgwmn    Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_block_type', $v_pwdxc, $v_twhmm, $v_lgwmn ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_Block_Type $v_twhmm Block type data. // obf
	 * @return array Links for the given block type. // obf
	 */ // obf
	protected function prepare_links( $v_twhmm ) { // obf
		list( $v_dnvue ) = explode( '/', $v_twhmm->name ); // obf

		$v_ryvhv = array( // obf
			'collection' => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_iwafm->namespace, $v_iwafm->rest_base ) ), // obf
			), // obf
			'self'       => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%s', $v_iwafm->namespace, $v_iwafm->rest_base, $v_twhmm->name ) ), // obf
			), // obf
			'up'         => array( // obf
				'href' => rest_url( sprintf( '%s/%s/%s', $v_iwafm->namespace, $v_iwafm->rest_base, $v_dnvue ) ), // obf
			), // obf
		); // obf

		if ( $v_twhmm->is_dynamic() ) { // obf
			$v_ryvhv['https://api.w.org/render-block'] = array( // obf
				'href' => add_query_arg( // obf
					'context', // obf
					'edit', // obf
					rest_url( sprintf( '%s/%s/%s', 'wp/v2', 'block-renderer', $v_twhmm->name ) ) // obf
				), // obf
			); // obf
		} // obf

		return $v_ryvhv; // obf
	} // obf

	/** // obf
	 * Retrieves the block type' schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 6.3.0 Added `selectors` field. // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_iwafm->schema ) { // obf
			return $v_iwafm->add_additional_fields_schema( $v_iwafm->schema ); // obf
		} // obf

		// rest_validate_value_from_schema doesn't understand $v_dpmse, pull out reused definitions for readability. // obf
		$v_srzbi = array( // obf
			'description' => __( 'The list of inner blocks used in the example.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type'       => 'object', // obf
				'properties' => array( // obf
					'name'        => array( // obf
						'description' => __( 'The name of the inner block.' ), // obf
						'type'        => 'string', // obf
						'pattern'     => self::NAME_PATTERN, // obf
						'required'    => true, // obf
					), // obf
					'attributes'  => array( // obf
						'description' => __( 'The attributes of the inner block.' ), // obf
						'type'        => 'object', // obf
					), // obf
					'innerBlocks' => array( // obf
						'description' => __( "A list of the inner block's own inner blocks. This is a recursive definition following the parent innerBlocks schema." ), // obf
						'type'        => 'array', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_cahap = array( // obf
			'description' => __( 'Block example.' ), // obf
			'type'        => array( 'object', 'null' ), // obf
			'default'     => null, // obf
			'properties'  => array( // obf
				'attributes'  => array( // obf
					'description' => __( 'The attributes used in the example.' ), // obf
					'type'        => 'object', // obf
				), // obf
				'innerBlocks' => $v_srzbi, // obf
			), // obf
			'context'     => array( 'embed', 'view', 'edit' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_orypn = array( // obf
			'description' => __( 'Block keywords.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( // obf
				'type' => 'string', // obf
			), // obf
			'default'     => array(), // obf
			'context'     => array( 'embed', 'view', 'edit' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_naall = array( // obf
			'description' => __( 'Icon of block type.' ), // obf
			'type'        => array( 'string', 'null' ), // obf
			'default'     => null, // obf
			'context'     => array( 'embed', 'view', 'edit' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_ejwho = array( // obf
			'description' => __( 'Block category.' ), // obf
			'type'        => array( 'string', 'null' ), // obf
			'default'     => null, // obf
			'context'     => array( 'embed', 'view', 'edit' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_iwafm->schema = array( // obf
			'$v_azhkj'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'block-type', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'api_version'            => array( // obf
					'description' => __( 'Version of block API.' ), // obf
					'type'        => 'integer', // obf
					'default'     => 1, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'title'                  => array( // obf
					'description' => __( 'Title of block type.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'name'                   => array( // obf
					'description' => __( 'Unique name identifying the block type.' ), // obf
					'type'        => 'string', // obf
					'pattern'     => self::NAME_PATTERN, // obf
					'required'    => true, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description'            => array( // obf
					'description' => __( 'Description of block type.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'icon'                   => $v_naall, // obf
				'attributes'             => array( // obf
					'description'          => __( 'Block attributes.' ), // obf
					'type'                 => array( 'object', 'null' ), // obf
					'properties'           => array(), // obf
					'default'              => null, // obf
					'additionalProperties' => array( // obf
						'type' => 'object', // obf
					), // obf
					'context'              => array( 'embed', 'view', 'edit' ), // obf
					'readonly'             => true, // obf
				), // obf
				'provides_context'       => array( // obf
					'description'          => __( 'Context provided by blocks of this type.' ), // obf
					'type'                 => 'object', // obf
					'properties'           => array(), // obf
					'additionalProperties' => array( // obf
						'type' => 'string', // obf
					), // obf
					'default'              => array(), // obf
					'context'              => array( 'embed', 'view', 'edit' ), // obf
					'readonly'             => true, // obf
				), // obf
				'uses_context'           => array( // obf
					'description' => __( 'Context values inherited by blocks of this type.' ), // obf
					'type'        => 'array', // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'selectors'              => array( // obf
					'description' => __( 'Custom CSS selectors.' ), // obf
					'type'        => 'object', // obf
					'default'     => array(), // obf
					'properties'  => array(), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'supports'               => array( // obf
					'description' => __( 'Block supports.' ), // obf
					'type'        => 'object', // obf
					'default'     => array(), // obf
					'properties'  => array(), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'category'               => $v_ejwho, // obf
				'is_dynamic'             => array( // obf
					'description' => __( 'Is the block dynamically rendered.' ), // obf
					'type'        => 'boolean', // obf
					'default'     => false, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'editor_script_handles'  => array( // obf
					'description' => __( 'Editor script handles.' ), // obf
					'type'        => array( 'array' ), // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'script_handles'         => array( // obf
					'description' => __( 'Public facing and editor script handles.' ), // obf
					'type'        => array( 'array' ), // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'view_script_handles'    => array( // obf
					'description' => __( 'Public facing script handles.' ), // obf
					'type'        => array( 'array' ), // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'view_script_module_ids' => array( // obf
					'description' => __( 'Public facing script module IDs.' ), // obf
					'type'        => array( 'array' ), // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'editor_style_handles'   => array( // obf
					'description' => __( 'Editor style handles.' ), // obf
					'type'        => array( 'array' ), // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'style_handles'          => array( // obf
					'description' => __( 'Public facing and editor style handles.' ), // obf
					'type'        => array( 'array' ), // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'view_style_handles'     => array( // obf
					'description' => __( 'Public facing style handles.' ), // obf
					'type'        => array( 'array' ), // obf
					'default'     => array(), // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'styles'                 => array( // obf
					'description' => __( 'Block style variations.' ), // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'name'         => array( // obf
								'description' => __( 'Unique name identifying the style.' ), // obf
								'type'        => 'string', // obf
								'required'    => true, // obf
							), // obf
							'label'        => array( // obf
								'description' => __( 'The human-readable label for the style.' ), // obf
								'type'        => 'string', // obf
							), // obf
							'inline_style' => array( // obf
								'description' => __( 'Inline CSS code that registers the CSS class required for the style.' ), // obf
								'type'        => 'string', // obf
							), // obf
							'style_handle' => array( // obf
								'description' => __( 'Contains the handle that defines the block style.' ), // obf
								'type'        => 'string', // obf
							), // obf
						), // obf
					), // obf
					'default'     => array(), // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'variations'             => array( // obf
					'description' => __( 'Block variations.' ), // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type'       => 'object', // obf
						'properties' => array( // obf
							'name'        => array( // obf
								'description' => __( 'The unique and machine-readable name.' ), // obf
								'type'        => 'string', // obf
								'required'    => true, // obf
							), // obf
							'title'       => array( // obf
								'description' => __( 'A human-readable variation title.' ), // obf
								'type'        => 'string', // obf
								'required'    => true, // obf
							), // obf
							'description' => array( // obf
								'description' => __( 'A detailed variation description.' ), // obf
								'type'        => 'string', // obf
								'required'    => false, // obf
							), // obf
							'category'    => $v_ejwho, // obf
							'icon'        => $v_naall, // obf
							'isDefault'   => array( // obf
								'description' => __( 'Indicates whether the current variation is the default one.' ), // obf
								'type'        => 'boolean', // obf
								'required'    => false, // obf
								'default'     => false, // obf
							), // obf
							'attributes'  => array( // obf
								'description' => __( 'The initial values for attributes.' ), // obf
								'type'        => 'object', // obf
							), // obf
							'innerBlocks' => $v_srzbi, // obf
							'example'     => $v_cahap, // obf
							'scope'       => array( // obf
								'description' => __( 'The list of scopes where the variation is applicable. When not provided, it assumes all available scopes.' ), // obf
								'type'        => array( 'array', 'null' ), // obf
								'default'     => null, // obf
								'items'       => array( // obf
									'type' => 'string', // obf
									'enum' => array( 'block', 'inserter', 'transform' ), // obf
								), // obf
								'readonly'    => true, // obf
							), // obf
							'keywords'    => $v_orypn, // obf
						), // obf
					), // obf
					'readonly'    => true, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'default'     => null, // obf
				), // obf
				'textdomain'             => array( // obf
					'description' => __( 'Public text domain.' ), // obf
					'type'        => array( 'string', 'null' ), // obf
					'default'     => null, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'parent'                 => array( // obf
					'description' => __( 'Parent blocks.' ), // obf
					'type'        => array( 'array', 'null' ), // obf
					'items'       => array( // obf
						'type'    => 'string', // obf
						'pattern' => self::NAME_PATTERN, // obf
					), // obf
					'default'     => null, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'ancestor'               => array( // obf
					'description' => __( 'Ancestor blocks.' ), // obf
					'type'        => array( 'array', 'null' ), // obf
					'items'       => array( // obf
						'type'    => 'string', // obf
						'pattern' => self::NAME_PATTERN, // obf
					), // obf
					'default'     => null, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'allowed_blocks'         => array( // obf
					'description' => __( 'Allowed child block types.' ), // obf
					'type'        => array( 'array', 'null' ), // obf
					'items'       => array( // obf
						'type'    => 'string', // obf
						'pattern' => self::NAME_PATTERN, // obf
					), // obf
					'default'     => null, // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'keywords'               => $v_orypn, // obf
				'example'                => $v_cahap, // obf
				'block_hooks'            => array( // obf
					'description'       => __( 'This block is automatically inserted near any occurrence of the block types used as keys of this map, into a relative position given by the corresponding value.' ), // obf
					'type'              => 'object', // obf
					'patternProperties' => array( // obf
						self::NAME_PATTERN => array( // obf
							'type' => 'string', // obf
							'enum' => array( 'before', 'after', 'first_child', 'last_child' ), // obf
						), // obf
					), // obf
					'default'           => array(), // obf
					'context'           => array( 'embed', 'view', 'edit' ), // obf
					'readonly'          => true, // obf
				), // obf
			), // obf
		); // obf

		// Properties deprecated in WordPress 6.1, but left in the schema for backwards compatibility. // obf
		$v_zfuvm      = array( // obf
			'editor_script' => array( // obf
				'description' => __( 'Editor script handle. DEPRECATED: Use `editor_script_handles` instead.' ), // obf
				'type'        => array( 'string', 'null' ), // obf
				'default'     => null, // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
				'readonly'    => true, // obf
			), // obf
			'script'        => array( // obf
				'description' => __( 'Public facing and editor script handle. DEPRECATED: Use `script_handles` instead.' ), // obf
				'type'        => array( 'string', 'null' ), // obf
				'default'     => null, // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
				'readonly'    => true, // obf
			), // obf
			'view_script'   => array( // obf
				'description' => __( 'Public facing script handle. DEPRECATED: Use `view_script_handles` instead.' ), // obf
				'type'        => array( 'string', 'null' ), // obf
				'default'     => null, // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
				'readonly'    => true, // obf
			), // obf
			'editor_style'  => array( // obf
				'description' => __( 'Editor style handle. DEPRECATED: Use `editor_style_handles` instead.' ), // obf
				'type'        => array( 'string', 'null' ), // obf
				'default'     => null, // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
				'readonly'    => true, // obf
			), // obf
			'style'         => array( // obf
				'description' => __( 'Public facing and editor style handle. DEPRECATED: Use `style_handles` instead.' ), // obf
				'type'        => array( 'string', 'null' ), // obf
				'default'     => null, // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
				'readonly'    => true, // obf
			), // obf
		); // obf
		$v_iwafm->schema['properties'] = array_merge( $v_iwafm->schema['properties'], $v_zfuvm ); // obf

		return $v_iwafm->add_additional_fields_schema( $v_iwafm->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context'   => $v_iwafm->get_context_param( array( 'default' => 'view' ) ), // obf
			'namespace' => array( // obf
				'description' => __( 'Block namespace.' ), // obf
				'type'        => 'string', // obf
			), // obf
		); // obf
	} // obf
} // obf