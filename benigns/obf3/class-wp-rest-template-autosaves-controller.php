

<?php // obf
/** // obf
 * REST API: WP_REST_Template_Autosaves_Controller class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used to access template autosaves via the REST API. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @see WP_REST_Autosaves_Controller // obf
 */ // obf
class WP_REST_Template_Autosaves_Controller extends WP_REST_Autosaves_Controller { // obf
	/** // obf
	 * Parent post type. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_habke; // obf

	/** // obf
	 * Parent post controller. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var WP_REST_Controller // obf
	 */ // obf
	private $v_ttlkp; // obf

	/** // obf
	 * Revision controller. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var WP_REST_Revisions_Controller // obf
	 */ // obf
	private $v_omajj; // obf

	/** // obf
	 * The base of the parent controller's route. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_nmxqr; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_habke Post type of the parent. // obf
	 */ // obf
	public function __construct( $v_habke ) { // obf
		parent::__construct( $v_habke ); // obf
		$v_ehxhc->parent_post_type = $v_habke; // obf
		$v_urtvq       = get_post_type_object( $v_habke ); // obf
		$v_ttlkp      = $v_urtvq->get_rest_controller(); // obf

		if ( ! $v_ttlkp ) { // obf
			$v_ttlkp = new WP_REST_Templates_Controller( $v_habke ); // obf
		} // obf

		$v_ehxhc->parent_controller = $v_ttlkp; // obf

		$v_omajj = $v_urtvq->get_revisions_rest_controller(); // obf
		if ( ! $v_omajj ) { // obf
			$v_omajj = new WP_REST_Revisions_Controller( $v_habke ); // obf
		} // obf
		$v_ehxhc->revisions_controller = $v_omajj; // obf
		$v_ehxhc->rest_base            = 'autosaves'; // obf
		$v_ehxhc->parent_base          = ! empty( $v_urtvq->rest_base ) ? $v_urtvq->rest_base : $v_urtvq->name; // obf
		$v_ehxhc->namespace            = ! empty( $v_urtvq->rest_namespace ) ? $v_urtvq->rest_namespace : 'wp/v2'; // obf
	} // obf

	/** // obf
	 * Registers the routes for autosaves. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_ehxhc->namespace, // obf
			sprintf( // obf
				'/%s/(?P<id>%s%s)/%s', // obf
				$v_ehxhc->parent_base, // obf
				/* // obf
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`. // obf
				 * Excludes invalid directory name characters: `/:<>*?"|`. // obf
				 */ // obf
				'([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
				// Matches the template name. // obf
				'[\/\w%-]+', // obf
				$v_ehxhc->rest_base // obf
			), // obf
			array( // obf
				'args'   => array( // obf
					'id' => array( // obf
						'description'       => __( 'The id of a template' ), // obf
						'type'              => 'string', // obf
						'sanitize_callback' => array( $v_ehxhc->parent_controller, '_sanitize_template_id' ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_ehxhc, 'get_items' ), // obf
					'permission_callback' => array( $v_ehxhc, 'get_items_permissions_check' ), // obf
					'args'                => $v_ehxhc->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_ehxhc, 'create_item' ), // obf
					'permission_callback' => array( $v_ehxhc, 'create_item_permissions_check' ), // obf
					'args'                => $v_ehxhc->parent_controller->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				'schema' => array( $v_ehxhc, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_ehxhc->namespace, // obf
			sprintf( // obf
				'/%s/(?P<parent>%s%s)/%s/%s', // obf
				$v_ehxhc->parent_base, // obf
				/* // obf
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`. // obf
				 * Excludes invalid directory name characters: `/:<>*?"|`. // obf
				 */ // obf
				'([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
				// Matches the template name. // obf
				'[\/\w%-]+', // obf
				$v_ehxhc->rest_base, // obf
				'(?P<id>[\d]+)' // obf
			), // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description'       => __( 'The id of a template' ), // obf
						'type'              => 'string', // obf
						'sanitize_callback' => array( $v_ehxhc->parent_controller, '_sanitize_template_id' ), // obf
					), // obf
					'id'     => array( // obf
						'description' => __( 'The ID for the autosave.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_ehxhc, 'get_item' ), // obf
					'permission_callback' => array( $v_ehxhc->revisions_controller, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_ehxhc->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_ehxhc, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares the item for the REST response. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_Post         $v_dxsts    Post revision object. // obf
	 * @param WP_REST_Request $v_lkcul Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_dxsts, $v_lkcul ) { // obf
		$v_xjgja = _build_block_template_result_from_post( $v_dxsts ); // obf
		$v_fsqgg = $v_ehxhc->parent_controller->prepare_item_for_response( $v_xjgja, $v_lkcul ); // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_lkcul->is_method( 'HEAD' ) ) { // obf
			return $v_fsqgg; // obf
		} // obf

		$v_lhhll = $v_ehxhc->get_fields_for_response( $v_lkcul ); // obf
		$v_aigjw   = $v_fsqgg->get_data(); // obf

		if ( in_array( 'parent', $v_lhhll, true ) ) { // obf
			$v_aigjw['parent'] = (int) $v_dxsts->post_parent; // obf
		} // obf

		$v_vdvxt = ! empty( $v_lkcul['context'] ) ? $v_lkcul['context'] : 'view'; // obf
		$v_aigjw    = $v_ehxhc->filter_response_by_context( $v_aigjw, $v_vdvxt ); // obf

		// Wrap the data in a response object. // obf
		$v_fsqgg = new WP_REST_Response( $v_aigjw ); // obf

		if ( rest_is_field_included( '_links', $v_lhhll ) || rest_is_field_included( '_embedded', $v_lhhll ) ) { // obf
			$v_uisdt = $v_ehxhc->prepare_links( $v_xjgja ); // obf
			$v_fsqgg->add_links( $v_uisdt ); // obf
		} // obf

		return $v_fsqgg; // obf
	} // obf

	/** // obf
	 * Gets the autosave, if the ID is valid. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_lkcul Full details about the request. // obf
	 * @return WP_Post|WP_Error Autosave post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	public function get_item( $v_lkcul ) { // obf
		$v_goqkw = $v_ehxhc->get_parent( $v_lkcul['parent'] ); // obf
		if ( is_wp_error( $v_goqkw ) ) { // obf
			return $v_goqkw; // obf
		} // obf

		$v_rcbwa = wp_get_post_autosave( $v_goqkw->ID ); // obf

		if ( ! $v_rcbwa ) { // obf
			return new WP_Error( // obf
				'rest_post_no_autosave', // obf
				__( 'There is no autosave revision for this template.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_fsqgg = $v_ehxhc->prepare_item_for_response( $v_rcbwa, $v_lkcul ); // obf
		return $v_fsqgg; // obf
	} // obf

	/** // obf
	 * Get the parent post. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param int $v_alfjg Supplied ID. // obf
	 * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_parent( $v_alfjg ) { // obf
		return $v_ehxhc->revisions_controller->get_parent( $v_alfjg ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_Block_Template $v_xjgja Template. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_xjgja ) { // obf
		$v_uisdt = array( // obf
			'self'   => array( // obf
				'href' => rest_url( sprintf( '/%s/%s/%s/%s/%d', $v_ehxhc->namespace, $v_ehxhc->parent_base, $v_xjgja->id, $v_ehxhc->rest_base, $v_xjgja->wp_id ) ), // obf
			), // obf
			'parent' => array( // obf
				'href' => rest_url( sprintf( '/%s/%s/%s', $v_ehxhc->namespace, $v_ehxhc->parent_base, $v_xjgja->id ) ), // obf
			), // obf
		); // obf

		return $v_uisdt; // obf
	} // obf

	/** // obf
	 * Retrieves the autosave's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_ehxhc->schema ) { // obf
			return $v_ehxhc->add_additional_fields_schema( $v_ehxhc->schema ); // obf
		} // obf

		$v_ehxhc->schema = $v_ehxhc->revisions_controller->get_item_schema(); // obf

		return $v_ehxhc->add_additional_fields_schema( $v_ehxhc->schema ); // obf
	} // obf
} // obf