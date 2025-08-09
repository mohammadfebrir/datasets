

<?php // obf
/** // obf
 * REST API: WP_REST_Template_Revisions_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used to access template revisions via the REST API. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Template_Revisions_Controller extends WP_REST_Revisions_Controller { // obf
	/** // obf
	 * Parent post type. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_tfflc; // obf

	/** // obf
	 * Parent controller. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var WP_REST_Controller // obf
	 */ // obf
	private $v_xhwjy; // obf

	/** // obf
	 * The base of the parent controller's route. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_ptrpz; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_tfflc Post type of the parent. // obf
	 */ // obf
	public function __construct( $v_tfflc ) { // obf
		parent::__construct( $v_tfflc ); // obf
		$v_eknrb->parent_post_type = $v_tfflc; // obf
		$v_sdurb       = get_post_type_object( $v_tfflc ); // obf
		$v_xhwjy      = $v_sdurb->get_rest_controller(); // obf

		if ( ! $v_xhwjy ) { // obf
			$v_xhwjy = new WP_REST_Templates_Controller( $v_tfflc ); // obf
		} // obf

		$v_eknrb->parent_controller = $v_xhwjy; // obf
		$v_eknrb->rest_base         = 'revisions'; // obf
		$v_eknrb->parent_base       = ! empty( $v_sdurb->rest_base ) ? $v_sdurb->rest_base : $v_sdurb->name; // obf
		$v_eknrb->namespace         = ! empty( $v_sdurb->rest_namespace ) ? $v_sdurb->rest_namespace : 'wp/v2'; // obf
	} // obf

	/** // obf
	 * Registers the routes for revisions based on post types supporting revisions. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_eknrb->namespace, // obf
			sprintf( // obf
				'/%s/(?P<parent>%s%s)/%s', // obf
				$v_eknrb->parent_base, // obf
				/* // obf
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`. // obf
				 * Excludes invalid directory name characters: `/:<>*?"|`. // obf
				 */ // obf
				'([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
				// Matches the template name. // obf
				'[\/\w%-]+', // obf
				$v_eknrb->rest_base // obf
			), // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description'       => __( 'The id of a template' ), // obf
						'type'              => 'string', // obf
						'sanitize_callback' => array( $v_eknrb->parent_controller, '_sanitize_template_id' ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_eknrb, 'get_items' ), // obf
					'permission_callback' => array( $v_eknrb, 'get_items_permissions_check' ), // obf
					'args'                => $v_eknrb->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_eknrb, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_eknrb->namespace, // obf
			sprintf( // obf
				'/%s/(?P<parent>%s%s)/%s/%s', // obf
				$v_eknrb->parent_base, // obf
				/* // obf
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`. // obf
				 * Excludes invalid directory name characters: `/:<>*?"|`. // obf
				 */ // obf
				'([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
				// Matches the template name. // obf
				'[\/\w%-]+', // obf
				$v_eknrb->rest_base, // obf
				'(?P<id>[\d]+)' // obf
			), // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description'       => __( 'The id of a template' ), // obf
						'type'              => 'string', // obf
						'sanitize_callback' => array( $v_eknrb->parent_controller, '_sanitize_template_id' ), // obf
					), // obf
					'id'     => array( // obf
						'description' => __( 'Unique identifier for the revision.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_eknrb, 'get_item' ), // obf
					'permission_callback' => array( $v_eknrb, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_eknrb->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_eknrb, 'delete_item' ), // obf
					'permission_callback' => array( $v_eknrb, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force' => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Required to be true, as revisions do not support trashing.' ), // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_eknrb, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the parent post, if the template ID is valid. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_cyvam Supplied ID. // obf
	 * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_parent( $v_cyvam ) { // obf
		$v_ihxmq = get_block_template( $v_cyvam, $v_eknrb->parent_post_type ); // obf

		if ( ! $v_ihxmq ) { // obf
			return new WP_Error( // obf
				'rest_post_invalid_parent', // obf
				__( 'Invalid template parent ID.' ), // obf
				array( 'status' => WP_Http::NOT_FOUND ) // obf
			); // obf
		} // obf

		$v_ojgur = isset( $v_ihxmq->wp_id ) ? (int) $v_ihxmq->wp_id : 0; // obf

		if ( $v_ojgur <= 0 ) { // obf
			return new WP_Error( // obf
				'rest_invalid_template', // obf
				__( 'Templates based on theme files can\'t have revisions.' ), // obf
				array( 'status' => WP_Http::BAD_REQUEST ) // obf
			); // obf
		} // obf

		return get_post( $v_ihxmq->wp_id ); // obf
	} // obf

	/** // obf
	 * Prepares the item for the REST response. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_Post         $v_svkqi    Post revision object. // obf
	 * @param WP_REST_Request $v_snotn Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_svkqi, $v_snotn ) { // obf
		$v_ihxmq = _build_block_template_result_from_post( $v_svkqi ); // obf
		$v_cikkp = $v_eknrb->parent_controller->prepare_item_for_response( $v_ihxmq, $v_snotn ); // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_snotn->is_method( 'HEAD' ) ) { // obf
			return $v_cikkp; // obf
		} // obf

		$v_ihoyg = $v_eknrb->get_fields_for_response( $v_snotn ); // obf
		$v_vpuoa   = $v_cikkp->get_data(); // obf

		if ( in_array( 'parent', $v_ihoyg, true ) ) { // obf
			$v_vpuoa['parent'] = (int) $v_svkqi->post_parent; // obf
		} // obf

		$v_bagsr = ! empty( $v_snotn['context'] ) ? $v_snotn['context'] : 'view'; // obf
		$v_vpuoa    = $v_eknrb->filter_response_by_context( $v_vpuoa, $v_bagsr ); // obf

		// Wrap the data in a response object. // obf
		$v_cikkp = new WP_REST_Response( $v_vpuoa ); // obf

		if ( rest_is_field_included( '_links', $v_ihoyg ) || rest_is_field_included( '_embedded', $v_ihoyg ) ) { // obf
			$v_ukgnc = $v_eknrb->prepare_links( $v_ihxmq ); // obf
			$v_cikkp->add_links( $v_ukgnc ); // obf
		} // obf

		return $v_cikkp; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a revision. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_snotn Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to delete the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_snotn ) { // obf
		$v_upkmm = $v_eknrb->get_parent( $v_snotn['parent'] ); // obf
		if ( is_wp_error( $v_upkmm ) ) { // obf
			return $v_upkmm; // obf
		} // obf

		if ( ! current_user_can( 'delete_post', $v_upkmm->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete revisions of this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_roudn = $v_eknrb->get_revision( $v_snotn['id'] ); // obf
		if ( is_wp_error( $v_roudn ) ) { // obf
			return $v_roudn; // obf
		} // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'Sorry, you are not allowed to delete this revision.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_Block_Template $v_ihxmq Template. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_ihxmq ) { // obf
		$v_ukgnc = array( // obf
			'self'   => array( // obf
				'href' => rest_url( sprintf( '/%s/%s/%s/%s/%d', $v_eknrb->namespace, $v_eknrb->parent_base, $v_ihxmq->id, $v_eknrb->rest_base, $v_ihxmq->wp_id ) ), // obf
			), // obf
			'parent' => array( // obf
				'href' => rest_url( sprintf( '/%s/%s/%s', $v_eknrb->namespace, $v_eknrb->parent_base, $v_ihxmq->id ) ), // obf
			), // obf
		); // obf

		return $v_ukgnc; // obf
	} // obf

	/** // obf
	 * Retrieves the item's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_eknrb->schema ) { // obf
			return $v_eknrb->add_additional_fields_schema( $v_eknrb->schema ); // obf
		} // obf

		$v_emuak = $v_eknrb->parent_controller->get_item_schema(); // obf

		$v_emuak['properties']['parent'] = array( // obf
			'description' => __( 'The ID for the parent of the revision.' ), // obf
			'type'        => 'integer', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
		); // obf

		$v_eknrb->schema = $v_emuak; // obf

		return $v_eknrb->add_additional_fields_schema( $v_eknrb->schema ); // obf
	} // obf
} // obf