

<?php // obf
/** // obf
 * REST API: WP_REST_Post_Types_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class to access post types via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Post_Types_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_whoso->namespace = 'wp/v2'; // obf
		$v_whoso->rest_base = 'types'; // obf
	} // obf

	/** // obf
	 * Registers the routes for post types. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf

		register_rest_route( // obf
			$v_whoso->namespace, // obf
			'/' . $v_whoso->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_whoso, 'get_items' ), // obf
					'permission_callback' => array( $v_whoso, 'get_items_permissions_check' ), // obf
					'args'                => $v_whoso->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_whoso, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_whoso->namespace, // obf
			'/' . $v_whoso->rest_base . '/(?P<type>[\w-]+)', // obf
			array( // obf
				'args'   => array( // obf
					'type' => array( // obf
						'description' => __( 'An alphanumeric identifier for the post type.' ), // obf
						'type'        => 'string', // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_whoso, 'get_item' ), // obf
					'permission_callback' => '__return_true', // obf
					'args'                => array( // obf
						'context' => $v_whoso->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				'schema' => array( $v_whoso, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read types. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_syzfa Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_syzfa ) { // obf
		if ( 'edit' === $v_syzfa['context'] ) { // obf
			$v_wtuug = get_post_types( array( 'show_in_rest' => true ), 'objects' ); // obf

			foreach ( $v_wtuug as $v_iddjx ) { // obf
				if ( current_user_can( $v_iddjx->cap->edit_posts ) ) { // obf
					return true; // obf
				} // obf
			} // obf

			return new WP_Error( // obf
				'rest_cannot_view', // obf
				__( 'Sorry, you are not allowed to edit posts in this post type.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves all public post types. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_syzfa Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_syzfa ) { // obf
		if ( $v_syzfa->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_sfznr  = array(); // obf
		$v_wtuug = get_post_types( array( 'show_in_rest' => true ), 'objects' ); // obf

		foreach ( $v_wtuug as $v_iddjx ) { // obf
			if ( 'edit' === $v_syzfa['context'] && ! current_user_can( $v_iddjx->cap->edit_posts ) ) { // obf
				continue; // obf
			} // obf

			$v_neyqg           = $v_whoso->prepare_item_for_response( $v_iddjx, $v_syzfa ); // obf
			$v_sfznr[ $v_iddjx->name ] = $v_whoso->prepare_response_for_collection( $v_neyqg ); // obf
		} // obf

		return rest_ensure_response( $v_sfznr ); // obf
	} // obf

	/** // obf
	 * Retrieves a specific post type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_syzfa Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_syzfa ) { // obf
		$v_jmglp = get_post_type_object( $v_syzfa['type'] ); // obf

		if ( empty( $v_jmglp ) ) { // obf
			return new WP_Error( // obf
				'rest_type_invalid', // obf
				__( 'Invalid post type.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		if ( empty( $v_jmglp->show_in_rest ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read_type', // obf
				__( 'Cannot view post type.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( 'edit' === $v_syzfa['context'] && ! current_user_can( $v_jmglp->cap->edit_posts ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit posts in this post type.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		$v_sfznr = $v_whoso->prepare_item_for_response( $v_jmglp, $v_syzfa ); // obf

		return rest_ensure_response( $v_sfznr ); // obf
	} // obf

	/** // obf
	 * Prepares a post type object for serialization. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_neyqg` to `$v_iqdls` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post_Type    $v_iqdls    Post type object. // obf
	 * @param WP_REST_Request $v_syzfa Full details about the request. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_iqdls, $v_syzfa ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_neyqg = $v_iqdls; // obf

		// Don't prepare the response body for HEAD requests. // obf
		if ( $v_syzfa->is_method( 'HEAD' ) ) { // obf
			/** This filter is documented in wp-includes/rest-api/endpoints/class-wp-rest-post-types-controller.php */ // obf
			return apply_filters( 'rest_prepare_post_type', new WP_REST_Response( array() ), $v_neyqg, $v_syzfa ); // obf
		} // obf

		$v_lzkfa = wp_list_filter( get_object_taxonomies( $v_neyqg->name, 'objects' ), array( 'show_in_rest' => true ) ); // obf
		$v_lzkfa = wp_list_pluck( $v_lzkfa, 'name' ); // obf
		$v_ukgvu       = ! empty( $v_neyqg->rest_base ) ? $v_neyqg->rest_base : $v_neyqg->name; // obf
		$v_uqxbh  = ! empty( $v_neyqg->rest_namespace ) ? $v_neyqg->rest_namespace : 'wp/v2'; // obf
		$v_qrzyf   = get_all_post_type_supports( $v_neyqg->name ); // obf

		$v_sugup = $v_whoso->get_fields_for_response( $v_syzfa ); // obf
		$v_sfznr   = array(); // obf

		if ( rest_is_field_included( 'capabilities', $v_sugup ) ) { // obf
			$v_sfznr['capabilities'] = $v_neyqg->cap; // obf
		} // obf

		if ( rest_is_field_included( 'description', $v_sugup ) ) { // obf
			$v_sfznr['description'] = $v_neyqg->description; // obf
		} // obf

		if ( rest_is_field_included( 'hierarchical', $v_sugup ) ) { // obf
			$v_sfznr['hierarchical'] = $v_neyqg->hierarchical; // obf
		} // obf

		if ( rest_is_field_included( 'has_archive', $v_sugup ) ) { // obf
			$v_sfznr['has_archive'] = $v_neyqg->has_archive; // obf
		} // obf

		if ( rest_is_field_included( 'visibility', $v_sugup ) ) { // obf
			$v_sfznr['visibility'] = array( // obf
				'show_in_nav_menus' => (bool) $v_neyqg->show_in_nav_menus, // obf
				'show_ui'           => (bool) $v_neyqg->show_ui, // obf
			); // obf
		} // obf

		if ( rest_is_field_included( 'viewable', $v_sugup ) ) { // obf
			$v_sfznr['viewable'] = is_post_type_viewable( $v_neyqg ); // obf
		} // obf

		if ( rest_is_field_included( 'labels', $v_sugup ) ) { // obf
			$v_sfznr['labels'] = $v_neyqg->labels; // obf
		} // obf

		if ( rest_is_field_included( 'name', $v_sugup ) ) { // obf
			$v_sfznr['name'] = $v_neyqg->label; // obf
		} // obf

		if ( rest_is_field_included( 'slug', $v_sugup ) ) { // obf
			$v_sfznr['slug'] = $v_neyqg->name; // obf
		} // obf

		if ( rest_is_field_included( 'icon', $v_sugup ) ) { // obf
			$v_sfznr['icon'] = $v_neyqg->menu_icon; // obf
		} // obf

		if ( rest_is_field_included( 'supports', $v_sugup ) ) { // obf
			$v_sfznr['supports'] = $v_qrzyf; // obf
		} // obf

		if ( rest_is_field_included( 'taxonomies', $v_sugup ) ) { // obf
			$v_sfznr['taxonomies'] = array_values( $v_lzkfa ); // obf
		} // obf

		if ( rest_is_field_included( 'rest_base', $v_sugup ) ) { // obf
			$v_sfznr['rest_base'] = $v_ukgvu; // obf
		} // obf

		if ( rest_is_field_included( 'rest_namespace', $v_sugup ) ) { // obf
			$v_sfznr['rest_namespace'] = $v_uqxbh; // obf
		} // obf

		if ( rest_is_field_included( 'template', $v_sugup ) ) { // obf
			$v_sfznr['template'] = $v_neyqg->template ?? array(); // obf
		} // obf

		if ( rest_is_field_included( 'template_lock', $v_sugup ) ) { // obf
			$v_sfznr['template_lock'] = ! empty( $v_neyqg->template_lock ) ? $v_neyqg->template_lock : false; // obf
		} // obf

		$v_szkxu = ! empty( $v_syzfa['context'] ) ? $v_syzfa['context'] : 'view'; // obf
		$v_sfznr    = $v_whoso->add_additional_fields_to_object( $v_sfznr, $v_syzfa ); // obf
		$v_sfznr    = $v_whoso->filter_response_by_context( $v_sfznr, $v_szkxu ); // obf

		// Wrap the data in a response object. // obf
		$v_ahdkx = rest_ensure_response( $v_sfznr ); // obf

		if ( rest_is_field_included( '_links', $v_sugup ) || rest_is_field_included( '_embedded', $v_sugup ) ) { // obf
			$v_ahdkx->add_links( $v_whoso->prepare_links( $v_neyqg ) ); // obf
		} // obf

		/** // obf
		 * Filters a post type returned from the REST API. // obf
		 * // obf
		 * Allows modification of the post type data right before it is returned. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_ahdkx  The response object. // obf
		 * @param WP_Post_Type     $v_neyqg The original post type object. // obf
		 * @param WP_REST_Request  $v_syzfa   Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_post_type', $v_ahdkx, $v_neyqg, $v_syzfa ); // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param WP_Post_Type $v_neyqg The post type. // obf
	 * @return array Links for the given post type. // obf
	 */ // obf
	protected function prepare_links( $v_neyqg ) { // obf
		return array( // obf
			'collection'              => array( // obf
				'href' => rest_url( sprintf( '%s/%s', $v_whoso->namespace, $v_whoso->rest_base ) ), // obf
			), // obf
			'https://api.w.org/items' => array( // obf
				'href' => rest_url( rest_get_route_for_post_type_items( $v_neyqg->name ) ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the post type's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 4.8.0 The `supports` property was added. // obf
	 * @since 5.9.0 The `visibility` and `rest_namespace` properties were added. // obf
	 * @since 6.1.0 The `icon` property was added. // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_whoso->schema ) { // obf
			return $v_whoso->add_additional_fields_schema( $v_whoso->schema ); // obf
		} // obf

		$v_sxcuh = array( // obf
			'$v_sxcuh'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'type', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'capabilities'   => array( // obf
					'description' => __( 'All capabilities used by the post type.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description'    => array( // obf
					'description' => __( 'A human-readable description of the post type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'hierarchical'   => array( // obf
					'description' => __( 'Whether or not the post type should have children.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'viewable'       => array( // obf
					'description' => __( 'Whether or not the post type can be viewed.' ), // obf
					'type'        => 'boolean', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'labels'         => array( // obf
					'description' => __( 'Human-readable labels for the post type for various contexts.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'name'           => array( // obf
					'description' => __( 'The title for the post type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'slug'           => array( // obf
					'description' => __( 'An alphanumeric identifier for the post type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'supports'       => array( // obf
					'description' => __( 'All features, supported by the post type.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'has_archive'    => array( // obf
					'description' => __( 'If the value is a string, the value will be used as the archive slug. If the value is false the post type has no archive.' ), // obf
					'type'        => array( 'string', 'boolean' ), // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'taxonomies'     => array( // obf
					'description' => __( 'Taxonomies associated with post type.' ), // obf
					'type'        => 'array', // obf
					'items'       => array( // obf
						'type' => 'string', // obf
					), // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'rest_base'      => array( // obf
					'description' => __( 'REST base route for the post type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'rest_namespace' => array( // obf
					'description' => __( 'REST route\'s namespace for the post type.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'visibility'     => array( // obf
					'description' => __( 'The visibility settings for the post type.' ), // obf
					'type'        => 'object', // obf
					'context'     => array( 'edit' ), // obf
					'readonly'    => true, // obf
					'properties'  => array( // obf
						'show_ui'           => array( // obf
							'description' => __( 'Whether to generate a default UI for managing this post type.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
						'show_in_nav_menus' => array( // obf
							'description' => __( 'Whether to make the post type available for selection in navigation menus.' ), // obf
							'type'        => 'boolean', // obf
						), // obf
					), // obf
				), // obf
				'icon'           => array( // obf
					'description' => __( 'The icon for the post type.' ), // obf
					'type'        => array( 'string', 'null' ), // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'template'       => array( // obf
					'type'        => array( 'array' ), // obf
					'description' => __( 'The block template associated with the post type.' ), // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'template_lock'  => array( // obf
					'type'        => array( 'string', 'boolean' ), // obf
					'enum'        => array( 'all', 'insert', 'contentOnly', false ), // obf
					'description' => __( 'The template_lock associated with the post type, or false if none.' ), // obf
					'readonly'    => true, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
			), // obf
		); // obf

		$v_whoso->schema = $v_sxcuh; // obf

		return $v_whoso->add_additional_fields_schema( $v_whoso->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array( // obf
			'context' => $v_whoso->get_context_param( array( 'default' => 'view' ) ), // obf
		); // obf
	} // obf
} // obf