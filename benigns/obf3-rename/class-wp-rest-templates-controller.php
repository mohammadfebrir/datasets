

<?php // obf
/** // obf
 * REST API: WP_REST_Templates_Controller class // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Base Templates REST API Controller. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Templates_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Post type. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_szfkt; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_szfkt Post type. // obf
	 */ // obf
	public function __construct( $v_szfkt ) { // obf
		$v_gddsk->post_type = $v_szfkt; // obf
		$v_wjhbg             = get_post_type_object( $v_szfkt ); // obf
		$v_gddsk->rest_base = ! empty( $v_wjhbg->rest_base ) ? $v_wjhbg->rest_base : $v_wjhbg->name; // obf
		$v_gddsk->namespace = ! empty( $v_wjhbg->rest_namespace ) ? $v_wjhbg->rest_namespace : 'wp/v2'; // obf
	} // obf

	/** // obf
	 * Registers the controllers routes. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.1.0 Endpoint for fallback template content. // obf
	 */ // obf
	public function register_routes() { // obf
		// Lists all templates. // obf
		register_rest_route( // obf
			$v_gddsk->namespace, // obf
			'/' . $v_gddsk->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_gddsk, 'get_items' ), // obf
					'permission_callback' => array( $v_gddsk, 'get_items_permissions_check' ), // obf
					'args'                => $v_gddsk->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_gddsk, 'create_item' ), // obf
					'permission_callback' => array( $v_gddsk, 'create_item_permissions_check' ), // obf
					'args'                => $v_gddsk->get_endpoint_args_for_item_schema( WP_REST_Server::CREATABLE ), // obf
				), // obf
				'schema' => array( $v_gddsk, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		// Get fallback template content. // obf
		register_rest_route( // obf
			$v_gddsk->namespace, // obf
			'/' . $v_gddsk->rest_base . '/lookup', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_gddsk, 'get_template_fallback' ), // obf
					'permission_callback' => array( $v_gddsk, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'slug'            => array( // obf
							'description' => __( 'The slug of the template to get the fallback for' ), // obf
							'type'        => 'string', // obf
							'required'    => true, // obf
						), // obf
						'is_custom'       => array( // obf
							'description' => __( 'Indicates if a template is custom or part of the template hierarchy' ), // obf
							'type'        => 'boolean', // obf
						), // obf
						'template_prefix' => array( // obf
							'description' => __( 'The template prefix for the created template. This is used to extract the main template type, e.g. in `taxonomy-books` extracts the `taxonomy`' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		// Lists/updates a single template based on the given id. // obf
		register_rest_route( // obf
			$v_gddsk->namespace, // obf
			// The route. // obf
			sprintf( // obf
				'/%s/(?P<id>%s%s)', // obf
				$v_gddsk->rest_base, // obf
				/* // obf
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`. // obf
				 * Excludes invalid directory name characters: `/:<>*?"|`. // obf
				 */ // obf
				'([^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?)', // obf
				// Matches the template name. // obf
				'[\/\w%-]+' // obf
			), // obf
			array( // obf
				'args'   => array( // obf
					'id' => array( // obf
						'description'       => __( 'The id of a template' ), // obf
						'type'              => 'string', // obf
						'sanitize_callback' => array( $v_gddsk, '_sanitize_template_id' ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_gddsk, 'get_item' ), // obf
					'permission_callback' => array( $v_gddsk, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_gddsk->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_gddsk, 'update_item' ), // obf
					'permission_callback' => array( $v_gddsk, 'update_item_permissions_check' ), // obf
					'args'                => $v_gddsk->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_gddsk, 'delete_item' ), // obf
					'permission_callback' => array( $v_gddsk, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force' => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Whether to bypass Trash and force deletion.' ), // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_gddsk, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns the fallback template for the given slug. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @since 6.3.0 Ignore empty templates. // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx The request instance. // obf
	 * @return WP_REST_Response|WP_Error // obf
	 */ // obf
	public function get_template_fallback( $v_ovfpx ) { // obf
		$v_eulqx = get_template_hierarchy( $v_ovfpx['slug'], $v_ovfpx['is_custom'], $v_ovfpx['template_prefix'] ); // obf

		do { // obf
			$v_dltqw = resolve_block_template( $v_ovfpx['slug'], $v_eulqx, '' ); // obf
			array_shift( $v_eulqx ); // obf
		} while ( ! empty( $v_eulqx ) && empty( $v_dltqw->content ) ); // obf

		// To maintain original behavior, return an empty object rather than a 404 error when no template is found. // obf
		$v_ywheh = $v_dltqw ? $v_gddsk->prepare_item_for_response( $v_dltqw, $v_ovfpx ) : new stdClass(); // obf

		return rest_ensure_response( $v_ywheh ); // obf
	} // obf

	/** // obf
	 * Checks if the user has permissions to make the request. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	protected function permissions_check( $v_ovfpx ) { // obf
		/* // obf
		 * Verify if the current user has edit_theme_options capability. // obf
		 * This capability is required to edit/view/delete templates. // obf
		 */ // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_manage_templates', // obf
				__( 'Sorry, you are not allowed to access the templates on this site.' ), // obf
				array( // obf
					'status' => rest_authorization_required_code(), // obf
				) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Requesting this endpoint for a template like 'twentytwentytwo//home' // obf
	 * requires using a path like /wp/v2/templates/twentytwentytwo//home. There // obf
	 * are special cases when WordPress routing corrects the name to contain // obf
	 * only a single slash like 'twentytwentytwo/home'. // obf
	 * // obf
	 * This method doubles the last slash if it's not already doubled. It relies // obf
	 * on the template ID format {theme_name}//{template_slug} and the fact that // obf
	 * slugs cannot contain slashes. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @see https://core.trac.wordpress.org/ticket/54507 // obf
	 * // obf
	 * @param string $v_ftcwd Template ID. // obf
	 * @return string Sanitized template ID. // obf
	 */ // obf
	public function _sanitize_template_id( $v_ftcwd ) { // obf
		$v_ftcwd = urldecode( $v_ftcwd ); // obf

		$v_nglgx = strrpos( $v_ftcwd, '/' ); // obf
		if ( false === $v_nglgx ) { // obf
			return $v_ftcwd; // obf
		} // obf

		$v_uijou = substr( $v_ftcwd, $v_nglgx - 1, 1 ) === '/'; // obf
		if ( $v_uijou ) { // obf
			return $v_ftcwd; // obf
		} // obf
		return ( // obf
			substr( $v_ftcwd, 0, $v_nglgx ) // obf
			. '/' // obf
			. substr( $v_ftcwd, $v_nglgx ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read templates. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.6.0 Allow users with edit_posts capability to read templates. // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_ovfpx ) { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf
		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_szfkt ) { // obf
			if ( current_user_can( $v_szfkt->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_manage_templates', // obf
			__( 'Sorry, you are not allowed to access the templates on this site.' ), // obf
			array( // obf
				'status' => rest_authorization_required_code(), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns a list of templates. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx The request instance. // obf
	 * @return WP_REST_Response // obf
	 */ // obf
	public function get_items( $v_ovfpx ) { // obf
		if ( $v_ovfpx->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_ebbfu = array(); // obf
		if ( isset( $v_ovfpx['wp_id'] ) ) { // obf
			$v_ebbfu['wp_id'] = $v_ovfpx['wp_id']; // obf
		} // obf
		if ( isset( $v_ovfpx['area'] ) ) { // obf
			$v_ebbfu['area'] = $v_ovfpx['area']; // obf
		} // obf
		if ( isset( $v_ovfpx['post_type'] ) ) { // obf
			$v_ebbfu['post_type'] = $v_ovfpx['post_type']; // obf
		} // obf

		$v_xnhuu = array(); // obf
		foreach ( get_block_templates( $v_ebbfu, $v_gddsk->post_type ) as $v_ffsqy ) { // obf
			$v_pmqeo        = $v_gddsk->prepare_item_for_response( $v_ffsqy, $v_ovfpx ); // obf
			$v_xnhuu[] = $v_gddsk->prepare_response_for_collection( $v_pmqeo ); // obf
		} // obf

		return rest_ensure_response( $v_xnhuu ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a single template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.6.0 Allow users with edit_posts capability to read individual templates. // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_ovfpx ) { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf
		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_szfkt ) { // obf
			if ( current_user_can( $v_szfkt->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_manage_templates', // obf
			__( 'Sorry, you are not allowed to access the templates on this site.' ), // obf
			array( // obf
				'status' => rest_authorization_required_code(), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns the given template // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx The request instance. // obf
	 * @return WP_REST_Response|WP_Error // obf
	 */ // obf
	public function get_item( $v_ovfpx ) { // obf
		if ( isset( $v_ovfpx['source'] ) && ( 'theme' === $v_ovfpx['source'] || 'plugin' === $v_ovfpx['source'] ) ) { // obf
			$v_ffsqy = get_block_file_template( $v_ovfpx['id'], $v_gddsk->post_type ); // obf
		} else { // obf
			$v_ffsqy = get_block_template( $v_ovfpx['id'], $v_gddsk->post_type ); // obf
		} // obf

		if ( ! $v_ffsqy ) { // obf
			return new WP_Error( 'rest_template_not_found', __( 'No templates exist with that id.' ), array( 'status' => 404 ) ); // obf
		} // obf

		return $v_gddsk->prepare_item_for_response( $v_ffsqy, $v_ovfpx ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to write a single template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return true|WP_Error True if the request has write access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_ovfpx ) { // obf
		return $v_gddsk->permissions_check( $v_ovfpx ); // obf
	} // obf

	/** // obf
	 * Updates a single template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_ovfpx ) { // obf
		$v_ffsqy = get_block_template( $v_ovfpx['id'], $v_gddsk->post_type ); // obf
		if ( ! $v_ffsqy ) { // obf
			return new WP_Error( 'rest_template_not_found', __( 'No templates exist with that id.' ), array( 'status' => 404 ) ); // obf
		} // obf

		$v_kguli = get_post( $v_ffsqy->wp_id ); // obf

		if ( isset( $v_ovfpx['source'] ) && 'theme' === $v_ovfpx['source'] ) { // obf
			wp_delete_post( $v_ffsqy->wp_id, true ); // obf
			$v_ovfpx->set_param( 'context', 'edit' ); // obf

			$v_ffsqy = get_block_template( $v_ovfpx['id'], $v_gddsk->post_type ); // obf
			$v_ywheh = $v_gddsk->prepare_item_for_response( $v_ffsqy, $v_ovfpx ); // obf

			return rest_ensure_response( $v_ywheh ); // obf
		} // obf

		$v_zqnvr = $v_gddsk->prepare_item_for_database( $v_ovfpx ); // obf

		if ( is_wp_error( $v_zqnvr ) ) { // obf
			return $v_zqnvr; // obf
		} // obf

		if ( 'custom' === $v_ffsqy->source ) { // obf
			$v_rvedv = true; // obf
			$v_chniq = wp_update_post( wp_slash( (array) $v_zqnvr ), false ); // obf
		} else { // obf
			$v_rvedv      = false; // obf
			$v_kguli = null; // obf
			$v_chniq      = wp_insert_post( wp_slash( (array) $v_zqnvr ), false ); // obf
		} // obf

		if ( is_wp_error( $v_chniq ) ) { // obf
			if ( 'db_update_error' === $v_chniq->get_error_code() ) { // obf
				$v_chniq->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_chniq->add_data( array( 'status' => 400 ) ); // obf
			} // obf
			return $v_chniq; // obf
		} // obf

		$v_ffsqy      = get_block_template( $v_ovfpx['id'], $v_gddsk->post_type ); // obf
		$v_trtoc = $v_gddsk->update_additional_fields_for_object( $v_ffsqy, $v_ovfpx ); // obf
		if ( is_wp_error( $v_trtoc ) ) { // obf
			return $v_trtoc; // obf
		} // obf

		$v_ovfpx->set_param( 'context', 'edit' ); // obf

		$v_dymvg = get_post( $v_ffsqy->wp_id ); // obf
		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
		do_action( "rest_after_insert_{$v_gddsk->post_type}", $v_dymvg, $v_ovfpx, false ); // obf

		wp_after_insert_post( $v_dymvg, $v_rvedv, $v_kguli ); // obf

		$v_ywheh = $v_gddsk->prepare_item_for_response( $v_ffsqy, $v_ovfpx ); // obf

		return rest_ensure_response( $v_ywheh ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create a template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to create items, WP_Error object otherwise. // obf
	 */ // obf
	public function create_item_permissions_check( $v_ovfpx ) { // obf
		return $v_gddsk->permissions_check( $v_ovfpx ); // obf
	} // obf

	/** // obf
	 * Creates a single template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_ovfpx ) { // obf
		$v_qemho = $v_gddsk->prepare_item_for_database( $v_ovfpx ); // obf

		if ( is_wp_error( $v_qemho ) ) { // obf
			return $v_qemho; // obf
		} // obf

		$v_qemho->post_name = $v_ovfpx['slug']; // obf
		$v_exbgl                  = wp_insert_post( wp_slash( (array) $v_qemho ), true ); // obf
		if ( is_wp_error( $v_exbgl ) ) { // obf
			if ( 'db_insert_error' === $v_exbgl->get_error_code() ) { // obf
				$v_exbgl->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_exbgl->add_data( array( 'status' => 400 ) ); // obf
			} // obf

			return $v_exbgl; // obf
		} // obf
		$v_vphjx = get_block_templates( array( 'wp_id' => $v_exbgl ), $v_gddsk->post_type ); // obf
		if ( ! count( $v_vphjx ) ) { // obf
			return new WP_Error( 'rest_template_insert_error', __( 'No templates exist with that id.' ), array( 'status' => 400 ) ); // obf
		} // obf
		$v_ftcwd            = $v_vphjx[0]->id; // obf
		$v_dymvg          = get_post( $v_exbgl ); // obf
		$v_ffsqy      = get_block_template( $v_ftcwd, $v_gddsk->post_type ); // obf
		$v_trtoc = $v_gddsk->update_additional_fields_for_object( $v_ffsqy, $v_ovfpx ); // obf
		if ( is_wp_error( $v_trtoc ) ) { // obf
			return $v_trtoc; // obf
		} // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
		do_action( "rest_after_insert_{$v_gddsk->post_type}", $v_dymvg, $v_ovfpx, true ); // obf

		wp_after_insert_post( $v_dymvg, false, null ); // obf

		$v_ywheh = $v_gddsk->prepare_item_for_response( $v_ffsqy, $v_ovfpx ); // obf
		$v_ywheh = rest_ensure_response( $v_ywheh ); // obf

		$v_ywheh->set_status( 201 ); // obf
		$v_ywheh->header( 'Location', rest_url( sprintf( '%s/%s/%s', $v_gddsk->namespace, $v_gddsk->rest_base, $v_ffsqy->id ) ) ); // obf

		return $v_ywheh; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to delete a single template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return true|WP_Error True if the request has delete access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function delete_item_permissions_check( $v_ovfpx ) { // obf
		return $v_gddsk->permissions_check( $v_ovfpx ); // obf
	} // obf

	/** // obf
	 * Deletes a single template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_ovfpx ) { // obf
		$v_ffsqy = get_block_template( $v_ovfpx['id'], $v_gddsk->post_type ); // obf
		if ( ! $v_ffsqy ) { // obf
			return new WP_Error( 'rest_template_not_found', __( 'No templates exist with that id.' ), array( 'status' => 404 ) ); // obf
		} // obf
		if ( 'custom' !== $v_ffsqy->source ) { // obf
			return new WP_Error( 'rest_invalid_template', __( 'Templates based on theme files can\'t be removed.' ), array( 'status' => 400 ) ); // obf
		} // obf

		$v_ftcwd    = $v_ffsqy->wp_id; // obf
		$v_nihvo = (bool) $v_ovfpx['force']; // obf

		$v_ovfpx->set_param( 'context', 'edit' ); // obf

		// If we're forcing, then delete permanently. // obf
		if ( $v_nihvo ) { // obf
			$v_bzdhs = $v_gddsk->prepare_item_for_response( $v_ffsqy, $v_ovfpx ); // obf
			$v_chniq   = wp_delete_post( $v_ftcwd, true ); // obf
			$v_ywheh = new WP_REST_Response(); // obf
			$v_ywheh->set_data( // obf
				array( // obf
					'deleted'  => true, // obf
					'previous' => $v_bzdhs->get_data(), // obf
				) // obf
			); // obf
		} else { // obf
			// Otherwise, only trash if we haven't already. // obf
			if ( 'trash' === $v_ffsqy->status ) { // obf
				return new WP_Error( // obf
					'rest_template_already_trashed', // obf
					__( 'The template has already been deleted.' ), // obf
					array( 'status' => 410 ) // obf
				); // obf
			} // obf

			/* // obf
			 * (Note that internally this falls through to `wp_delete_post()` // obf
			 * if the Trash is disabled.) // obf
			 */ // obf
			$v_chniq           = wp_trash_post( $v_ftcwd ); // obf
			$v_ffsqy->status = 'trash'; // obf
			$v_ywheh         = $v_gddsk->prepare_item_for_response( $v_ffsqy, $v_ovfpx ); // obf
		} // obf

		if ( ! $v_chniq ) { // obf
			return new WP_Error( // obf
				'rest_cannot_delete', // obf
				__( 'The template cannot be deleted.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		return $v_ywheh; // obf
	} // obf

	/** // obf
	 * Prepares a single template for create or update. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ovfpx Request object. // obf
	 * @return stdClass|WP_Error Changes to pass to wp_update_post. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_ovfpx ) { // obf
		$v_ffsqy = $v_ovfpx['id'] ? get_block_template( $v_ovfpx['id'], $v_gddsk->post_type ) : null; // obf
		$v_zqnvr  = new stdClass(); // obf
		if ( null === $v_ffsqy ) { // obf
			$v_zqnvr->post_type   = $v_gddsk->post_type; // obf
			$v_zqnvr->post_status = 'publish'; // obf
			$v_zqnvr->tax_input   = array( // obf
				'wp_theme' => isset( $v_ovfpx['theme'] ) ? $v_ovfpx['theme'] : get_stylesheet(), // obf
			); // obf
		} elseif ( 'custom' !== $v_ffsqy->source ) { // obf
			$v_zqnvr->post_name   = $v_ffsqy->slug; // obf
			$v_zqnvr->post_type   = $v_gddsk->post_type; // obf
			$v_zqnvr->post_status = 'publish'; // obf
			$v_zqnvr->tax_input   = array( // obf
				'wp_theme' => $v_ffsqy->theme, // obf
			); // obf
			$v_zqnvr->meta_input  = array( // obf
				'origin' => $v_ffsqy->source, // obf
			); // obf
		} else { // obf
			$v_zqnvr->post_name   = $v_ffsqy->slug; // obf
			$v_zqnvr->ID          = $v_ffsqy->wp_id; // obf
			$v_zqnvr->post_status = 'publish'; // obf
		} // obf
		if ( isset( $v_ovfpx['content'] ) ) { // obf
			if ( is_string( $v_ovfpx['content'] ) ) { // obf
				$v_zqnvr->post_content = $v_ovfpx['content']; // obf
			} elseif ( isset( $v_ovfpx['content']['raw'] ) ) { // obf
				$v_zqnvr->post_content = $v_ovfpx['content']['raw']; // obf
			} // obf
		} elseif ( null !== $v_ffsqy && 'custom' !== $v_ffsqy->source ) { // obf
			$v_zqnvr->post_content = $v_ffsqy->content; // obf
		} // obf
		if ( isset( $v_ovfpx['title'] ) ) { // obf
			if ( is_string( $v_ovfpx['title'] ) ) { // obf
				$v_zqnvr->post_title = $v_ovfpx['title']; // obf
			} elseif ( ! empty( $v_ovfpx['title']['raw'] ) ) { // obf
				$v_zqnvr->post_title = $v_ovfpx['title']['raw']; // obf
			} // obf
		} elseif ( null !== $v_ffsqy && 'custom' !== $v_ffsqy->source ) { // obf
			$v_zqnvr->post_title = $v_ffsqy->title; // obf
		} // obf
		if ( isset( $v_ovfpx['description'] ) ) { // obf
			$v_zqnvr->post_excerpt = $v_ovfpx['description']; // obf
		} elseif ( null !== $v_ffsqy && 'custom' !== $v_ffsqy->source ) { // obf
			$v_zqnvr->post_excerpt = $v_ffsqy->description; // obf
		} // obf

		if ( 'wp_template' === $v_gddsk->post_type && isset( $v_ovfpx['is_wp_suggestion'] ) ) { // obf
			$v_zqnvr->meta_input     = wp_parse_args( // obf
				array( // obf
					'is_wp_suggestion' => $v_ovfpx['is_wp_suggestion'], // obf
				), // obf
				$v_zqnvr->meta_input = array() // obf
			); // obf
		} // obf

		if ( 'wp_template_part' === $v_gddsk->post_type ) { // obf
			if ( isset( $v_ovfpx['area'] ) ) { // obf
				$v_zqnvr->tax_input['wp_template_part_area'] = _filter_block_template_part_area( $v_ovfpx['area'] ); // obf
			} elseif ( null !== $v_ffsqy && 'custom' !== $v_ffsqy->source && $v_ffsqy->area ) { // obf
				$v_zqnvr->tax_input['wp_template_part_area'] = _filter_block_template_part_area( $v_ffsqy->area ); // obf
			} elseif ( empty( $v_ffsqy->area ) ) { // obf
				$v_zqnvr->tax_input['wp_template_part_area'] = WP_TEMPLATE_PART_AREA_UNCATEGORIZED; // obf
			} // obf
		} // obf

		if ( ! empty( $v_ovfpx['author'] ) ) { // obf
			$v_dcqxx = (int) $v_ovfpx['author']; // obf

			if ( get_current_user_id() !== $v_dcqxx ) { // obf
				$v_zhkcm = get_userdata( $v_dcqxx ); // obf

				if ( ! $v_zhkcm ) { // obf
					return new WP_Error( // obf
						'rest_invalid_author', // obf
						__( 'Invalid author ID.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
			} // obf

			$v_zqnvr->post_author = $v_dcqxx; // obf
		} // obf

		/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-posts-controller.php */ // obf
		return apply_filters( "rest_pre_insert_{$v_gddsk->post_type}", $v_zqnvr, $v_ovfpx ); // obf
	} // obf

	/** // obf
	 * Prepare a single template output for response // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Renamed `$v_ffsqy` to `$v_nsxfh` to match parent class for PHP 8 named parameter support. // obf
	 * @since 6.3.0 Added `modified` property to the response. // obf
	 * // obf
	 * @param WP_Block_Template $v_nsxfh    Template instance. // obf
	 * @param WP_REST_Request   $v_ovfpx Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_nsxfh, $v_ovfpx ) { // obf
		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_ovfpx->is_method( 'HEAD' ) ) { // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		/* // obf
		 * Resolve pattern blocks so they don't need to be resolved client-side // obf
		 * in the editor, improving performance. // obf
		 */ // obf
		$v_imnkx        = parse_blocks( $v_nsxfh->content ); // obf
		$v_imnkx        = resolve_pattern_blocks( $v_imnkx ); // obf
		$v_nsxfh->content = serialize_blocks( $v_imnkx ); // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_ffsqy = $v_nsxfh; // obf

		$v_qdnev = $v_gddsk->get_fields_for_response( $v_ovfpx ); // obf

		// Base fields for every template. // obf
		$v_pmqeo = array(); // obf

		if ( rest_is_field_included( 'id', $v_qdnev ) ) { // obf
			$v_pmqeo['id'] = $v_ffsqy->id; // obf
		} // obf

		if ( rest_is_field_included( 'theme', $v_qdnev ) ) { // obf
			$v_pmqeo['theme'] = $v_ffsqy->theme; // obf
		} // obf

		if ( rest_is_field_included( 'content', $v_qdnev ) ) { // obf
			$v_pmqeo['content'] = array(); // obf
		} // obf
		if ( rest_is_field_included( 'content.raw', $v_qdnev ) ) { // obf
			$v_pmqeo['content']['raw'] = $v_ffsqy->content; // obf
		} // obf

		if ( rest_is_field_included( 'content.block_version', $v_qdnev ) ) { // obf
			$v_pmqeo['content']['block_version'] = block_version( $v_ffsqy->content ); // obf
		} // obf

		if ( rest_is_field_included( 'slug', $v_qdnev ) ) { // obf
			$v_pmqeo['slug'] = $v_ffsqy->slug; // obf
		} // obf

		if ( rest_is_field_included( 'source', $v_qdnev ) ) { // obf
			$v_pmqeo['source'] = $v_ffsqy->source; // obf
		} // obf

		if ( rest_is_field_included( 'origin', $v_qdnev ) ) { // obf
			$v_pmqeo['origin'] = $v_ffsqy->origin; // obf
		} // obf

		if ( rest_is_field_included( 'type', $v_qdnev ) ) { // obf
			$v_pmqeo['type'] = $v_ffsqy->type; // obf
		} // obf

		if ( rest_is_field_included( 'description', $v_qdnev ) ) { // obf
			$v_pmqeo['description'] = $v_ffsqy->description; // obf
		} // obf

		if ( rest_is_field_included( 'title', $v_qdnev ) ) { // obf
			$v_pmqeo['title'] = array(); // obf
		} // obf

		if ( rest_is_field_included( 'title.raw', $v_qdnev ) ) { // obf
			$v_pmqeo['title']['raw'] = $v_ffsqy->title; // obf
		} // obf

		if ( rest_is_field_included( 'title.rendered', $v_qdnev ) ) { // obf
			if ( $v_ffsqy->wp_id ) { // obf
				/** This filter is documented in wp-includes/post-template.php */ // obf
				$v_pmqeo['title']['rendered'] = apply_filters( 'the_title', $v_ffsqy->title, $v_ffsqy->wp_id ); // obf
			} else { // obf
				$v_pmqeo['title']['rendered'] = $v_ffsqy->title; // obf
			} // obf
		} // obf

		if ( rest_is_field_included( 'status', $v_qdnev ) ) { // obf
			$v_pmqeo['status'] = $v_ffsqy->status; // obf
		} // obf

		if ( rest_is_field_included( 'wp_id', $v_qdnev ) ) { // obf
			$v_pmqeo['wp_id'] = (int) $v_ffsqy->wp_id; // obf
		} // obf

		if ( rest_is_field_included( 'has_theme_file', $v_qdnev ) ) { // obf
			$v_pmqeo['has_theme_file'] = (bool) $v_ffsqy->has_theme_file; // obf
		} // obf

		if ( rest_is_field_included( 'is_custom', $v_qdnev ) && 'wp_template' === $v_ffsqy->type ) { // obf
			$v_pmqeo['is_custom'] = $v_ffsqy->is_custom; // obf
		} // obf

		if ( rest_is_field_included( 'author', $v_qdnev ) ) { // obf
			$v_pmqeo['author'] = (int) $v_ffsqy->author; // obf
		} // obf

		if ( rest_is_field_included( 'area', $v_qdnev ) && 'wp_template_part' === $v_ffsqy->type ) { // obf
			$v_pmqeo['area'] = $v_ffsqy->area; // obf
		} // obf

		if ( rest_is_field_included( 'modified', $v_qdnev ) ) { // obf
			$v_pmqeo['modified'] = mysql_to_rfc3339( $v_ffsqy->modified ); // obf
		} // obf

		if ( rest_is_field_included( 'author_text', $v_qdnev ) ) { // obf
			$v_pmqeo['author_text'] = self::get_wp_templates_author_text_field( $v_ffsqy ); // obf
		} // obf

		if ( rest_is_field_included( 'original_source', $v_qdnev ) ) { // obf
			$v_pmqeo['original_source'] = self::get_wp_templates_original_source_field( $v_ffsqy ); // obf
		} // obf

		if ( rest_is_field_included( 'plugin', $v_qdnev ) ) { // obf
			$v_hrzod = WP_Block_Templates_Registry::get_instance()->get_by_slug( $v_ffsqy->slug ); // obf
			if ( $v_hrzod ) { // obf
				$v_pmqeo['plugin'] = $v_hrzod->plugin; // obf
			} // obf
		} // obf

		$v_mvbwz = ! empty( $v_ovfpx['context'] ) ? $v_ovfpx['context'] : 'view'; // obf
		$v_pmqeo    = $v_gddsk->add_additional_fields_to_object( $v_pmqeo, $v_ovfpx ); // obf
		$v_pmqeo    = $v_gddsk->filter_response_by_context( $v_pmqeo, $v_mvbwz ); // obf

		// Wrap the data in a response object. // obf
		$v_ywheh = rest_ensure_response( $v_pmqeo ); // obf

		if ( rest_is_field_included( '_links', $v_qdnev ) || rest_is_field_included( '_embedded', $v_qdnev ) ) { // obf
			$v_ushcb = $v_gddsk->prepare_links( $v_ffsqy->id ); // obf
			$v_ywheh->add_links( $v_ushcb ); // obf
			if ( ! empty( $v_ushcb['self']['href'] ) ) { // obf
				$v_iuugz = $v_gddsk->get_available_actions(); // obf
				$v_rdspr    = $v_ushcb['self']['href']; // obf
				foreach ( $v_iuugz as $v_qfivm ) { // obf
					$v_ywheh->add_link( $v_qfivm, $v_rdspr ); // obf
				} // obf
			} // obf
		} // obf

		return $v_ywheh; // obf
	} // obf

	/** // obf
	 * Returns the source from where the template originally comes from. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Block_Template $v_aakri Template instance. // obf
	 * @return string                            Original source of the template one of theme, plugin, site, or user. // obf
	 */ // obf
	private static function get_wp_templates_original_source_field( $v_aakri ) { // obf
		if ( 'wp_template' === $v_aakri->type || 'wp_template_part' === $v_aakri->type ) { // obf
			/* // obf
			 * Added by theme. // obf
			 * Template originally provided by a theme, but customized by a user. // obf
			 * Templates originally didn't have the 'origin' field so identify // obf
			 * older customized templates by checking for no origin and a 'theme' // obf
			 * or 'custom' source. // obf
			 */ // obf
			if ( $v_aakri->has_theme_file && // obf
			( 'theme' === $v_aakri->origin || ( // obf
				empty( $v_aakri->origin ) && in_array( // obf
					$v_aakri->source, // obf
					array( // obf
						'theme', // obf
						'custom', // obf
					), // obf
					true // obf
				) ) // obf
			) // obf
			) { // obf
				return 'theme'; // obf
			} // obf

			// Added by plugin. // obf
			if ( 'plugin' === $v_aakri->origin ) { // obf
				return 'plugin'; // obf
			} // obf

			/* // obf
			 * Added by site. // obf
			 * Template was created from scratch, but has no author. Author support // obf
			 * was only added to templates in WordPress 5.9. Fallback to showing the // obf
			 * site logo and title. // obf
			 */ // obf
			if ( empty( $v_aakri->has_theme_file ) && 'custom' === $v_aakri->source && empty( $v_aakri->author ) ) { // obf
				return 'site'; // obf
			} // obf
		} // obf

		// Added by user. // obf
		return 'user'; // obf
	} // obf

	/** // obf
	 * Returns a human readable text for the author of the template. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Block_Template $v_aakri Template instance. // obf
	 * @return string                            Human readable text for the author. // obf
	 */ // obf
	private static function get_wp_templates_author_text_field( $v_aakri ) { // obf
		$v_joosb = self::get_wp_templates_original_source_field( $v_aakri ); // obf
		switch ( $v_joosb ) { // obf
			case 'theme': // obf
				$v_qjvtb = wp_get_theme( $v_aakri->theme )->get( 'Name' ); // obf
				return empty( $v_qjvtb ) ? $v_aakri->theme : $v_qjvtb; // obf
			case 'plugin': // obf
				if ( ! function_exists( 'get_plugins' ) ) { // obf
					require_once ABSPATH . 'wp-admin/includes/plugin.php'; // obf
				} // obf
				if ( isset( $v_aakri->plugin ) ) { // obf
					$v_fzgdd = wp_get_active_and_valid_plugins(); // obf

					foreach ( $v_fzgdd as $v_whxmk ) { // obf
						$v_bpidd = plugin_basename( $v_whxmk ); // obf
						// Split basename by '/' to get the plugin slug. // obf
						list( $v_zkmqy, ) = explode( '/', $v_bpidd ); // obf

						if ( $v_zkmqy === $v_aakri->plugin ) { // obf
							$v_eiynd = get_plugin_data( $v_whxmk ); // obf

							if ( ! empty( $v_eiynd['Name'] ) ) { // obf
								return $v_eiynd['Name']; // obf
							} // obf

							break; // obf
						} // obf
					} // obf
				} // obf

				/* // obf
				 * Fall back to the theme name if the plugin is not defined. That's needed to keep backwards // obf
				 * compatibility with templates that were registered before the plugin attribute was added. // obf
				 */ // obf
				$v_fzgdd         = get_plugins(); // obf
				$v_bpidd = plugin_basename( sanitize_text_field( $v_aakri->theme . '.php' ) ); // obf
				if ( isset( $v_fzgdd[ $v_bpidd ] ) && isset( $v_fzgdd[ $v_bpidd ]['Name'] ) ) { // obf
					return $v_fzgdd[ $v_bpidd ]['Name']; // obf
				} // obf
				return isset( $v_aakri->plugin ) ? // obf
					$v_aakri->plugin : // obf
					$v_aakri->theme; // obf
			case 'site': // obf
				return get_bloginfo( 'name' ); // obf
			case 'user': // obf
				$v_tgbad = get_user_by( 'id', $v_aakri->author ); // obf
				if ( ! $v_tgbad ) { // obf
					return __( 'Unknown author' ); // obf
				} // obf
				return $v_tgbad->get( 'display_name' ); // obf
		} // obf

		// Fail-safe to return a string should the original source ever fall through. // obf
		return ''; // obf
	} // obf


	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param integer $v_ftcwd ID. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_ftcwd ) { // obf
		$v_ushcb = array( // obf
			'self'       => array( // obf
				'href' => rest_url( sprintf( '/%s/%s/%s', $v_gddsk->namespace, $v_gddsk->rest_base, $v_ftcwd ) ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( rest_get_route_for_post_type_items( $v_gddsk->post_type ) ), // obf
			), // obf
			'about'      => array( // obf
				'href' => rest_url( 'wp/v2/types/' . $v_gddsk->post_type ), // obf
			), // obf
		); // obf

		if ( post_type_supports( $v_gddsk->post_type, 'revisions' ) ) { // obf
			$v_ffsqy = get_block_template( $v_ftcwd, $v_gddsk->post_type ); // obf
			if ( $v_ffsqy instanceof WP_Block_Template && ! empty( $v_ffsqy->wp_id ) ) { // obf
				$v_bjzaw       = wp_get_latest_revision_id_and_total_count( $v_ffsqy->wp_id ); // obf
				$v_argww = ! is_wp_error( $v_bjzaw ) ? $v_bjzaw['count'] : 0; // obf
				$v_ohrfr  = sprintf( '/%s/%s/%s/revisions', $v_gddsk->namespace, $v_gddsk->rest_base, $v_ftcwd ); // obf

				$v_ushcb['version-history'] = array( // obf
					'href'  => rest_url( $v_ohrfr ), // obf
					'count' => $v_argww, // obf
				); // obf

				if ( $v_argww > 0 ) { // obf
					$v_ushcb['predecessor-version'] = array( // obf
						'href' => rest_url( $v_ohrfr . '/' . $v_bjzaw['latest_id'] ), // obf
						'id'   => $v_bjzaw['latest_id'], // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_ushcb; // obf
	} // obf

	/** // obf
	 * Get the link relations available for the post and current user. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @return string[] List of link relations. // obf
	 */ // obf
	protected function get_available_actions() { // obf
		$v_khckv = array(); // obf

		$v_szfkt = get_post_type_object( $v_gddsk->post_type ); // obf

		if ( current_user_can( $v_szfkt->cap->publish_posts ) ) { // obf
			$v_khckv[] = 'https://api.w.org/action-publish'; // obf
		} // obf

		if ( current_user_can( 'unfiltered_html' ) ) { // obf
			$v_khckv[] = 'https://api.w.org/action-unfiltered-html'; // obf
		} // obf

		return $v_khckv; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the posts collection. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added `'area'` and `'post_type'`. // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context'   => $v_gddsk->get_context_param( array( 'default' => 'view' ) ), // obf
			'wp_id'     => array( // obf
				'description' => __( 'Limit to the specified post id.' ), // obf
				'type'        => 'integer', // obf
			), // obf
			'area'      => array( // obf
				'description' => __( 'Limit to the specified template part area.' ), // obf
				'type'        => 'string', // obf
			), // obf
			'post_type' => array( // obf
				'description' => __( 'Post type to get the templates for.' ), // obf
				'type'        => 'string', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the block type' schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Added `'area'`. // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_gddsk->schema ) { // obf
			return $v_gddsk->add_additional_fields_schema( $v_gddsk->schema ); // obf
		} // obf

		$v_usswm = array( // obf
			'$v_usswm'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => $v_gddsk->post_type, // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'              => array( // obf
					'description' => __( 'ID of template.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'slug'            => array( // obf
					'description' => __( 'Unique slug identifying the template.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'required'    => true, // obf
					'minLength'   => 1, // obf
					'pattern'     => '[a-zA-Z0-9_\%-]+', // obf
				), // obf
				'theme'           => array( // obf
					'description' => __( 'Theme identifier for the template.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				), // obf
				'type'            => array( // obf
					'description' => __( 'Type of template.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				), // obf
				'source'          => array( // obf
					'description' => __( 'Source of template' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'origin'          => array( // obf
					'description' => __( 'Source of a customized template' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'content'         => array( // obf
					'description' => __( 'Content of template.' ), // obf
					'type'        => array( 'object', 'string' ), // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'properties'  => array( // obf
						'raw'           => array( // obf
							'description' => __( 'Content for the template, as it exists in the database.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'view', 'edit' ), // obf
						), // obf
						'block_version' => array( // obf
							'description' => __( 'Version of the content block format used by the template.' ), // obf
							'type'        => 'integer', // obf
							'context'     => array( 'edit' ), // obf
							'readonly'    => true, // obf
						), // obf
					), // obf
				), // obf
				'title'           => array( // obf
					'description' => __( 'Title of template.' ), // obf
					'type'        => array( 'object', 'string' ), // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'Title for the template, as it exists in the database.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'view', 'edit', 'embed' ), // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'HTML title for the template, transformed for display.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'view', 'edit', 'embed' ), // obf
							'readonly'    => true, // obf
						), // obf
					), // obf
				), // obf
				'description'     => array( // obf
					'description' => __( 'Description of template.' ), // obf
					'type'        => 'string', // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				), // obf
				'status'          => array( // obf
					'description' => __( 'Status of template.' ), // obf
					'type'        => 'string', // obf
					'enum'        => array_keys( get_post_stati( array( 'internal' => false ) ) ), // obf
					'default'     => 'publish', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
				), // obf
				'wp_id'           => array( // obf
					'description' => __( 'Post ID.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'has_theme_file'  => array( // obf
					'description' => __( 'Theme file exists.' ), // obf
					'type'        => 'bool', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'author'          => array( // obf
					'description' => __( 'The ID for the author of the template.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'modified'        => array( // obf
					'description' => __( "The date the template was last modified, in the site's timezone." ), // obf
					'type'        => 'string', // obf
					'format'      => 'date-time', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'author_text'     => array( // obf
					'type'        => 'string', // obf
					'description' => __( 'Human readable text for the author.' ), // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'original_source' => array( // obf
					'description' => __( 'Where the template originally comes from e.g. \'theme\'' ), // obf
					'type'        => 'string', // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'enum'        => array( // obf
						'theme', // obf
						'plugin', // obf
						'site', // obf
						'user', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		if ( 'wp_template' === $v_gddsk->post_type ) { // obf
			$v_usswm['properties']['is_custom'] = array( // obf
				'description' => __( 'Whether a template is a custom template.' ), // obf
				'type'        => 'bool', // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
				'readonly'    => true, // obf
			); // obf
			$v_usswm['properties']['plugin']    = array( // obf
				'type'        => 'string', // obf
				'description' => __( 'Plugin that registered the template.' ), // obf
				'readonly'    => true, // obf
				'context'     => array( 'view', 'edit', 'embed' ), // obf
			); // obf
		} // obf

		if ( 'wp_template_part' === $v_gddsk->post_type ) { // obf
			$v_usswm['properties']['area'] = array( // obf
				'description' => __( 'Where the template part is intended for use (header, footer, etc.)' ), // obf
				'type'        => 'string', // obf
				'context'     => array( 'embed', 'view', 'edit' ), // obf
			); // obf
		} // obf

		$v_gddsk->schema = $v_usswm; // obf

		return $v_gddsk->add_additional_fields_schema( $v_gddsk->schema ); // obf
	} // obf
} // obf