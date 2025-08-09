

<?php // obf
/** // obf
 * Block Renderer REST API: WP_REST_Block_Renderer_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Controller which provides REST endpoint for rendering a block. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Block_Renderer_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructs the controller. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_oxcgr->namespace = 'wp/v2'; // obf
		$v_oxcgr->rest_base = 'block-renderer'; // obf
	} // obf

	/** // obf
	 * Registers the necessary REST API routes, one for each dynamic block. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_oxcgr->namespace, // obf
			'/' . $v_oxcgr->rest_base . '/(?P<name>[a-z0-9-]+/[a-z0-9-]+)', // obf
			array( // obf
				'args'   => array( // obf
					'name' => array( // obf
						'description' => __( 'Unique registered name for the block.' ), // obf
						'type'        => 'string', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => array( WP_REST_Server::READABLE, WP_REST_Server::CREATABLE ), // obf
					'callback'            => array( $v_oxcgr, 'get_item' ), // obf
					'permission_callback' => array( $v_oxcgr, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context'    => $v_oxcgr->get_context_param( array( 'default' => 'view' ) ), // obf
						'attributes' => array( // obf
							'description'       => __( 'Attributes for the block.' ), // obf
							'type'              => 'object', // obf
							'default'           => array(), // obf
							'validate_callback' => static function ( $v_branl, $v_syagu ) { // obf
								$v_qlgqv = WP_Block_Type_Registry::get_instance()->get_registered( $v_syagu['name'] ); // obf

								if ( ! $v_qlgqv ) { // obf
									// This will get rejected in ::get_item(). // obf
									return true; // obf
								} // obf

								$v_zelat = array( // obf
									'type'                 => 'object', // obf
									'properties'           => $v_qlgqv->get_attributes(), // obf
									'additionalProperties' => false, // obf
								); // obf

								return rest_validate_value_from_schema( $v_branl, $v_zelat ); // obf
							}, // obf
							'sanitize_callback' => static function ( $v_branl, $v_syagu ) { // obf
								$v_qlgqv = WP_Block_Type_Registry::get_instance()->get_registered( $v_syagu['name'] ); // obf

								if ( ! $v_qlgqv ) { // obf
									// This will get rejected in ::get_item(). // obf
									return true; // obf
								} // obf

								$v_zelat = array( // obf
									'type'                 => 'object', // obf
									'properties'           => $v_qlgqv->get_attributes(), // obf
									'additionalProperties' => false, // obf
								); // obf

								return rest_sanitize_value_from_schema( $v_branl, $v_zelat ); // obf
							}, // obf
						), // obf
						'post_id'    => array( // obf
							'description' => __( 'ID of the post context.' ), // obf
							'type'        => 'integer', // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_oxcgr, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read blocks. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @global WP_Post $v_iykpv Global post object. // obf
	 * // obf
	 * @param WP_REST_Request $v_syagu Request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_syagu ) { // obf
		global $v_iykpv; // obf

		$v_iluro = isset( $v_syagu['post_id'] ) ? (int) $v_syagu['post_id'] : 0; // obf

		if ( $v_iluro > 0 ) { // obf
			$v_iykpv = get_post( $v_iluro ); // obf

			if ( ! $v_iykpv || ! current_user_can( 'edit_post', $v_iykpv->ID ) ) { // obf
				return new WP_Error( // obf
					'block_cannot_read', // obf
					__( 'Sorry, you are not allowed to read blocks of this post.' ), // obf
					array( // obf
						'status' => rest_authorization_required_code(), // obf
					) // obf
				); // obf
			} // obf
		} else { // obf
			if ( ! current_user_can( 'edit_posts' ) ) { // obf
				return new WP_Error( // obf
					'block_cannot_read', // obf
					__( 'Sorry, you are not allowed to read blocks as this user.' ), // obf
					array( // obf
						'status' => rest_authorization_required_code(), // obf
					) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Returns block output from block's registered render_callback. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @global WP_Post $v_iykpv Global post object. // obf
	 * // obf
	 * @param WP_REST_Request $v_syagu Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_syagu ) { // obf
		global $v_iykpv; // obf

		$v_iluro = isset( $v_syagu['post_id'] ) ? (int) $v_syagu['post_id'] : 0; // obf

		if ( $v_iluro > 0 ) { // obf
			$v_iykpv = get_post( $v_iluro ); // obf

			// Set up postdata since this will be needed if post_id was set. // obf
			setup_postdata( $v_iykpv ); // obf
		} // obf

		$v_uhrdt   = WP_Block_Type_Registry::get_instance(); // obf
		$v_kkmqf = $v_uhrdt->get_registered( $v_syagu['name'] ); // obf

		if ( null === $v_kkmqf || ! $v_kkmqf->is_dynamic() ) { // obf
			return new WP_Error( // obf
				'block_invalid', // obf
				__( 'Invalid block.' ), // obf
				array( // obf
					'status' => 404, // obf
				) // obf
			); // obf
		} // obf

		$v_xhzym = $v_syagu->get_param( 'attributes' ); // obf

		// Create an array representation simulating the output of parse_blocks. // obf
		$v_qlgqv = array( // obf
			'blockName'    => $v_syagu['name'], // obf
			'attrs'        => $v_xhzym, // obf
			'innerHTML'    => '', // obf
			'innerContent' => array(), // obf
		); // obf

		// Render using render_block to ensure all relevant filters are used. // obf
		$v_qtjnh = array( // obf
			'rendered' => render_block( $v_qlgqv ), // obf
		); // obf

		return rest_ensure_response( $v_qtjnh ); // obf
	} // obf

	/** // obf
	 * Retrieves block's output schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_oxcgr->schema ) { // obf
			return $v_oxcgr->schema; // obf
		} // obf

		$v_oxcgr->schema = array( // obf
			'$v_zelat'    => 'http://json-schema.org/schema#', // obf
			'title'      => 'rendered-block', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'rendered' => array( // obf
					'description' => __( 'The rendered block.' ), // obf
					'type'        => 'string', // obf
					'required'    => true, // obf
					'context'     => array( 'edit' ), // obf
				), // obf
			), // obf
		); // obf

		return $v_oxcgr->schema; // obf
	} // obf
} // obf