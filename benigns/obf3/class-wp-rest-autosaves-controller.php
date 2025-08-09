

<?php // obf
/** // obf
 * REST API: WP_REST_Autosaves_Controller class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Core class used to access autosaves via the REST API. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see WP_REST_Revisions_Controller // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Autosaves_Controller extends WP_REST_Revisions_Controller { // obf

	/** // obf
	 * Parent post type. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_rfjip; // obf

	/** // obf
	 * Parent post controller. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_REST_Controller // obf
	 */ // obf
	private $v_rrhra; // obf

	/** // obf
	 * Revision controller. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_REST_Revisions_Controller // obf
	 */ // obf
	private $v_rjghd; // obf

	/** // obf
	 * The base of the parent controller's route. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_yurdn; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_rfjip Post type of the parent. // obf
	 */ // obf
	public function __construct( $v_rfjip ) { // obf
		$v_vfugf->parent_post_type = $v_rfjip; // obf
		$v_dyfpf       = get_post_type_object( $v_rfjip ); // obf
		$v_rrhra      = $v_dyfpf->get_rest_controller(); // obf

		if ( ! $v_rrhra ) { // obf
			$v_rrhra = new WP_REST_Posts_Controller( $v_rfjip ); // obf
		} // obf

		$v_vfugf->parent_controller = $v_rrhra; // obf

		$v_rjghd = $v_dyfpf->get_revisions_rest_controller(); // obf
		if ( ! $v_rjghd ) { // obf
			$v_rjghd = new WP_REST_Revisions_Controller( $v_rfjip ); // obf
		} // obf
		$v_vfugf->revisions_controller = $v_rjghd; // obf
		$v_vfugf->rest_base            = 'autosaves'; // obf
		$v_vfugf->parent_base          = ! empty( $v_dyfpf->rest_base ) ? $v_dyfpf->rest_base : $v_dyfpf->name; // obf
		$v_vfugf->namespace            = ! empty( $v_dyfpf->rest_namespace ) ? $v_dyfpf->rest_namespace : 'wp/v2'; // obf
	} // obf

	/** // obf
	 * Registers the routes for autosaves. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_vfugf->namespace, // obf
			'/' . $v_vfugf->parent_base . '/(?P<id>[\d]+)/' . $v_vfugf->rest_base, // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description' => __( 'The ID for the parent of the autosave.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_vfugf, 'get_items' ), // obf
					'permission_callback' => array( $v_vfugf, 'get_items_permissions_check' ), // obf
					'args'                => $v_vfugf->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_vfugf, 'create_item' ), // obf
					'permission_callback' => array( $v_vfugf, 'create_item_permissions_check' ), // obf
					'args'                => $v_vfugf->parent_controller->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				'schema' => array( $v_vfugf, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_vfugf->namespace, // obf
			'/' . $v_vfugf->parent_base . '/(?P<parent>[\d]+)/' . $v_vfugf->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'   => array( // obf
					'parent' => array( // obf
						'description' => __( 'The ID for the parent of the autosave.' ), // obf
						'type'        => 'integer', // obf
					), // obf
					'id'     => array( // obf
						'description' => __( 'The ID for the autosave.' ), // obf
						'type'        => 'integer', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_vfugf, 'get_item' ), // obf
					'permission_callback' => array( $v_vfugf->revisions_controller, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_vfugf->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_vfugf, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Get the parent post. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param int $v_jdtuv Supplied ID. // obf
	 * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_parent( $v_jdtuv ) { // obf
		return $v_vfugf->revisions_controller->get_parent( $v_jdtuv ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to get autosaves. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ehmbp Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_ehmbp ) { // obf
		$v_bupaq = $v_vfugf->get_parent( $v_ehmbp['id'] ); // obf
		if ( is_wp_error( $v_bupaq ) ) { // obf
			return $v_bupaq; // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_bupaq->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read', // obf
				__( 'Sorry, you are not allowed to view autosaves of this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create an autosave revision. // obf
	 * // obf
	 * Autosave revisions inherit permissions from the parent post, // obf
	 * check if the current user has permission to edit the post. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ehmbp Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create the item, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_ehmbp ) { // obf
		$v_kwvwk = $v_ehmbp->get_param( 'id' ); // obf

		if ( empty( $v_kwvwk ) ) { // obf
			return new WP_Error( // obf
				'rest_post_invalid_id', // obf
				__( 'Invalid item ID.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		return $v_vfugf->parent_controller->update_item_permissions_check( $v_ehmbp ); // obf
	} // obf

	/** // obf
	 * Creates, updates or deletes an autosave revision. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ehmbp Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_ehmbp ) { // obf

		if ( ! defined( 'WP_RUN_CORE_TESTS' ) && ! defined( 'DOING_AUTOSAVE' ) ) { // obf
			define( 'DOING_AUTOSAVE', true ); // obf
		} // obf

		$v_fxuxm = $v_vfugf->get_parent( $v_ehmbp['id'] ); // obf

		if ( is_wp_error( $v_fxuxm ) ) { // obf
			return $v_fxuxm; // obf
		} // obf

		$v_mhfsi     = $v_vfugf->parent_controller->prepare_item_for_database( $v_ehmbp ); // obf
		$v_mhfsi->ID = $v_fxuxm->ID; // obf
		$v_twdrs           = get_current_user_id(); // obf

		// We need to check post lock to ensure the original author didn't leave their browser tab open. // obf
		if ( ! function_exists( 'wp_check_post_lock' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/post.php'; // obf
		} // obf

		$v_jhtie = wp_check_post_lock( $v_fxuxm->ID ); // obf
		$v_dybig  = 'draft' === $v_fxuxm->post_status || 'auto-draft' === $v_fxuxm->post_status; // obf

		if ( $v_dybig && (int) $v_fxuxm->post_author === $v_twdrs && ! $v_jhtie ) { // obf
			/* // obf
			 * Draft posts for the same author: autosaving updates the post and does not create a revision. // obf
			 * Convert the post object to an array and add slashes, wp_update_post() expects escaped array. // obf
			 */ // obf
			$v_ptrmk = wp_update_post( wp_slash( (array) $v_mhfsi ), true ); // obf
		} else { // obf
			// Non-draft posts: create or update the post autosave. Pass the meta data. // obf
			$v_ptrmk = $v_vfugf->create_post_autosave( (array) $v_mhfsi, (array) $v_ehmbp->get_param( 'meta' ) ); // obf
		} // obf

		if ( is_wp_error( $v_ptrmk ) ) { // obf
			return $v_ptrmk; // obf
		} // obf

		$v_pgeme = get_post( $v_ptrmk ); // obf
		$v_ehmbp->set_param( 'context', 'edit' ); // obf

		$v_iakqs = $v_vfugf->prepare_item_for_response( $v_pgeme, $v_ehmbp ); // obf
		$v_iakqs = rest_ensure_response( $v_iakqs ); // obf

		return $v_iakqs; // obf
	} // obf

	/** // obf
	 * Get the autosave, if the ID is valid. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ehmbp Full details about the request. // obf
	 * @return WP_Post|WP_Error Revision post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	public function get_item( $v_ehmbp ) { // obf
		$v_jdtuv = (int) $v_ehmbp->get_param( 'parent' ); // obf

		if ( $v_jdtuv <= 0 ) { // obf
			return new WP_Error( // obf
				'rest_post_invalid_id', // obf
				__( 'Invalid post parent ID.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_pgeme = wp_get_post_autosave( $v_jdtuv ); // obf

		if ( ! $v_pgeme ) { // obf
			return new WP_Error( // obf
				'rest_post_no_autosave', // obf
				__( 'There is no autosave revision for this post.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_iakqs = $v_vfugf->prepare_item_for_response( $v_pgeme, $v_ehmbp ); // obf
		return $v_iakqs; // obf
	} // obf

	/** // obf
	 * Gets a collection of autosaves using wp_get_post_autosave. // obf
	 * // obf
	 * Contains the user's autosave, for empty if it doesn't exist. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ehmbp Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_ehmbp ) { // obf
		$v_bupaq = $v_vfugf->get_parent( $v_ehmbp['id'] ); // obf
		if ( is_wp_error( $v_bupaq ) ) { // obf
			return $v_bupaq; // obf
		} // obf

		if ( $v_ehmbp->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf
		$v_iakqs  = array(); // obf
		$v_jdtuv = $v_bupaq->ID; // obf
		$v_ibcbm = wp_get_post_revisions( $v_jdtuv, array( 'check_enabled' => false ) ); // obf

		foreach ( $v_ibcbm as $v_lswdk ) { // obf
			if ( str_contains( $v_lswdk->post_name, "{$v_jdtuv}-autosave" ) ) { // obf
				$v_qguoo       = $v_vfugf->prepare_item_for_response( $v_lswdk, $v_ehmbp ); // obf
				$v_iakqs[] = $v_vfugf->prepare_response_for_collection( $v_qguoo ); // obf
			} // obf
		} // obf

		return rest_ensure_response( $v_iakqs ); // obf
	} // obf


	/** // obf
	 * Retrieves the autosave's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_vfugf->schema ) { // obf
			return $v_vfugf->add_additional_fields_schema( $v_vfugf->schema ); // obf
		} // obf

		$v_hphtv = $v_vfugf->revisions_controller->get_item_schema(); // obf

		$v_hphtv['properties']['preview_link'] = array( // obf
			'description' => __( 'Preview link for the post.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'uri', // obf
			'context'     => array( 'edit' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_vfugf->schema = $v_hphtv; // obf

		return $v_vfugf->add_additional_fields_schema( $v_vfugf->schema ); // obf
	} // obf

	/** // obf
	 * Creates autosave for the specified post. // obf
	 * // obf
	 * From wp-admin/post.php. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 6.4.0 The `$v_rfeis` parameter was added. // obf
	 * // obf
	 * @param array $v_evjlc Associative array containing the post data. // obf
	 * @param array $v_rfeis      Associative array containing the post meta data. // obf
	 * @return mixed The autosave revision ID or WP_Error. // obf
	 */ // obf
	public function create_post_autosave( $v_evjlc, array $v_rfeis = array() ) { // obf

		$v_nresz = (int) $v_evjlc['ID']; // obf
		$v_fxuxm    = get_post( $v_nresz ); // obf

		if ( is_wp_error( $v_fxuxm ) ) { // obf
			return $v_fxuxm; // obf
		} // obf

		// Only create an autosave when it is different from the saved post. // obf
		$v_ruame = false; // obf
		$v_exbcs          = _wp_post_revision_data( $v_evjlc, true ); // obf

		foreach ( array_intersect( array_keys( $v_exbcs ), array_keys( _wp_post_revision_fields( $v_fxuxm ) ) ) as $v_vpidw ) { // obf
			if ( normalize_whitespace( $v_exbcs[ $v_vpidw ] ) !== normalize_whitespace( $v_fxuxm->$v_vpidw ) ) { // obf
				$v_ruame = true; // obf
				break; // obf
			} // obf
		} // obf

		// Check if meta values have changed. // obf
		if ( ! empty( $v_rfeis ) ) { // obf
			$v_dnnbh = wp_post_revision_meta_keys( $v_fxuxm->post_type ); // obf
			foreach ( $v_dnnbh as $v_binej ) { // obf
				// get_metadata_raw is used to avoid retrieving the default value. // obf
				$v_xxndm = get_metadata_raw( 'post', $v_nresz, $v_binej, true ); // obf
				$v_bqmjx = isset( $v_rfeis[ $v_binej ] ) ? $v_rfeis[ $v_binej ] : ''; // obf

				if ( $v_bqmjx !== $v_xxndm ) { // obf
					$v_ruame = true; // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		$v_twdrs = get_current_user_id(); // obf

		// Store one autosave per author. If there is already an autosave, overwrite it. // obf
		$v_xgntr = wp_get_post_autosave( $v_nresz, $v_twdrs ); // obf

		if ( ! $v_ruame && $v_xgntr ) { // obf
			// Nothing to save, return the existing autosave. // obf
			return $v_xgntr->ID; // obf
		} // obf

		if ( $v_xgntr ) { // obf
			$v_exbcs['ID']          = $v_xgntr->ID; // obf
			$v_exbcs['post_author'] = $v_twdrs; // obf

			/** This filter is documented in wp-admin/post.php */ // obf
			do_action( 'wp_creating_autosave', $v_exbcs ); // obf

			// wp_update_post() expects escaped array. // obf
			$v_jglzg = wp_update_post( wp_slash( $v_exbcs ) ); // obf
		} else { // obf
			// Create the new autosave as a special post revision. // obf
			$v_jglzg = _wp_put_post_revision( $v_evjlc, true ); // obf
		} // obf

		if ( is_wp_error( $v_jglzg ) || 0 === $v_jglzg ) { // obf
			return $v_jglzg; // obf
		} // obf

		// Attached any passed meta values that have revisions enabled. // obf
		if ( ! empty( $v_rfeis ) ) { // obf
			foreach ( $v_dnnbh as $v_binej ) { // obf
				if ( isset( $v_rfeis[ $v_binej ] ) ) { // obf
					update_metadata( 'post', $v_jglzg, $v_binej, wp_slash( $v_rfeis[ $v_binej ] ) ); // obf
				} // obf
			} // obf
		} // obf

		return $v_jglzg; // obf
	} // obf

	/** // obf
	 * Prepares the revision for the REST response. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 5.9.0 Renamed `$v_fxuxm` to `$v_tjnun` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post         $v_tjnun    Post revision object. // obf
	 * @param WP_REST_Request $v_ehmbp Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_tjnun, $v_ehmbp ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_fxuxm = $v_tjnun; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_ehmbp->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-autosaves-controller.php */ // obf
			return apply_filters( 'rest_prepare_autosave', new WP_REST_Response( array() ), $v_fxuxm, $v_ehmbp ); // obf
		} // obf
		$v_iakqs = $v_vfugf->revisions_controller->prepare_item_for_response( $v_fxuxm, $v_ehmbp ); // obf
		$v_umdju   = $v_vfugf->get_fields_for_response( $v_ehmbp ); // obf

		if ( in_array( 'preview_link', $v_umdju, true ) ) { // obf
			$v_jdtuv          = wp_is_post_autosave( $v_fxuxm ); // obf
			$v_etjlt    = false === $v_jdtuv ? $v_fxuxm->ID : $v_jdtuv; // obf
			$v_hyyza = array(); // obf

			if ( false !== $v_jdtuv ) { // obf
				$v_hyyza['preview_id']    = $v_jdtuv; // obf
				$v_hyyza['preview_nonce'] = wp_create_nonce( 'post_preview_' . $v_jdtuv ); // obf
			} // obf

			$v_iakqs->data['preview_link'] = get_preview_post_link( $v_etjlt, $v_hyyza ); // obf
		} // obf

		$v_ofxcd        = ! empty( $v_ehmbp['context'] ) ? $v_ehmbp['context'] : 'view'; // obf
		$v_iakqs->data = $v_vfugf->add_additional_fields_to_object( $v_iakqs->data, $v_ehmbp ); // obf
		$v_iakqs->data = $v_vfugf->filter_response_by_context( $v_iakqs->data, $v_ofxcd ); // obf

		/** // obf
		 * Filters a revision returned from the REST API. // obf
		 * // obf
		 * Allows modification of the revision right before it is returned. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_iakqs The response object. // obf
		 * @param WP_Post          $v_fxuxm     The original revision object. // obf
		 * @param WP_REST_Request  $v_ehmbp  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_autosave', $v_iakqs, $v_fxuxm, $v_ehmbp ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the autosaves collection. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context' => $v_vfugf->get_context_param( array( 'default' => 'view' ) ), // obf
		); // obf
	} // obf
} // obf