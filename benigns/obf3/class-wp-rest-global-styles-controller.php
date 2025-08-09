

<?php // obf
/** // obf
 * REST API: WP_REST_Global_Styles_Controller class // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 */ // obf

/** // obf
 * Base Global Styles REST API Controller. // obf
 */ // obf
class WP_REST_Global_Styles_Controller extends WP_REST_Posts_Controller { // obf
	/** // obf
	 * Whether the controller supports batching. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_gnvus = array( 'v1' => false ); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param string $v_kiddu Post type. // obf
	 */ // obf
	public function __construct( $v_kiddu = 'wp_global_styles' ) { // obf
		parent::__construct( $v_kiddu ); // obf
	} // obf

	/** // obf
	 * Registers the controllers routes. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_ottig->namespace, // obf
			'/' . $v_ottig->rest_base . '/themes/(?P<stylesheet>[\/\s%\w\.\(\)\[\]\@_\-]+)/variations', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_ottig, 'get_theme_items' ), // obf
					'permission_callback' => array( $v_ottig, 'get_theme_items_permissions_check' ), // obf
					'args'                => array( // obf
						'stylesheet' => array( // obf
							'description' => __( 'The theme identifier' ), // obf
							'type'        => 'string', // obf
						), // obf
					), // obf
					'allow_batch'         => $v_ottig->allow_batch, // obf
				), // obf
			) // obf
		); // obf

		// List themes global styles. // obf
		register_rest_route( // obf
			$v_ottig->namespace, // obf
			// The route. // obf
			sprintf( // obf
				'/%s/themes/(?P<stylesheet>%s)', // obf
				$v_ottig->rest_base, // obf
				/* // obf
				 * Matches theme's directory: `/themes/<subdirectory>/<theme>/` or `/themes/<theme>/`. // obf
				 * Excludes invalid directory name characters: `/:<>*?"|`. // obf
				 */ // obf
				'[^\/:<>\*\?"\|]+(?:\/[^\/:<>\*\?"\|]+)?' // obf
			), // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_ottig, 'get_theme_item' ), // obf
					'permission_callback' => array( $v_ottig, 'get_theme_item_permissions_check' ), // obf
					'args'                => array( // obf
						'stylesheet' => array( // obf
							'description'       => __( 'The theme identifier' ), // obf
							'type'              => 'string', // obf
							'sanitize_callback' => array( $v_ottig, '_sanitize_global_styles_callback' ), // obf
						), // obf
					), // obf
					'allow_batch'         => $v_ottig->allow_batch, // obf
				), // obf
			) // obf
		); // obf

		// Lists/updates a single global style variation based on the given id. // obf
		register_rest_route( // obf
			$v_ottig->namespace, // obf
			'/' . $v_ottig->rest_base . '/(?P<id>[\/\w-]+)', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_ottig, 'get_item' ), // obf
					'permission_callback' => array( $v_ottig, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'id' => array( // obf
							'description'       => __( 'The id of a template' ), // obf
							'type'              => 'string', // obf
							'sanitize_callback' => array( $v_ottig, '_sanitize_global_styles_callback' ), // obf
						), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::EDITABLE, // obf
					'callback'            => array( $v_ottig, 'update_item' ), // obf
					'permission_callback' => array( $v_ottig, 'update_item_permissions_check' ), // obf
					'args'                => $v_ottig->get_endpoint_args_for_item_schema( WP_REST_Server::EDITABLE ), // obf
				), // obf
				'schema'      => array( $v_ottig, 'get_public_item_schema' ), // obf
				'allow_batch' => $v_ottig->allow_batch, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Sanitize the global styles ID or stylesheet to decode endpoint. // obf
	 * For example, `wp/v2/global-styles/twentytwentytwo%200.4.0` // obf
	 * would be decoded to `twentytwentytwo 0.4.0`. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_qkafv Global styles ID or stylesheet. // obf
	 * @return string Sanitized global styles ID or stylesheet. // obf
	 */ // obf
	public function _sanitize_global_styles_callback( $v_qkafv ) { // obf
		return urldecode( $v_qkafv ); // obf
	} // obf

	/** // obf
	 * Get the post, if the ID is valid. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int $v_mdulx Supplied ID. // obf
	 * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_post( $v_mdulx ) { // obf
		$v_plvuk = new WP_Error( // obf
			'rest_global_styles_not_found', // obf
			__( 'No global styles config exist with that id.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		$v_mdulx = (int) $v_mdulx; // obf
		if ( $v_mdulx <= 0 ) { // obf
			return $v_plvuk; // obf
		} // obf

		$v_scihp = get_post( $v_mdulx ); // obf
		if ( empty( $v_scihp ) || empty( $v_scihp->ID ) || $v_ottig->post_type !== $v_scihp->post_type ) { // obf
			return $v_plvuk; // obf
		} // obf

		return $v_scihp; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a single global style. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jnahi Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_jnahi ) { // obf
		$v_scihp = $v_ottig->get_post( $v_jnahi['id'] ); // obf
		if ( is_wp_error( $v_scihp ) ) { // obf
			return $v_scihp; // obf
		} // obf

		if ( 'edit' === $v_jnahi['context'] && $v_scihp && ! $v_ottig->check_update_permission( $v_scihp ) ) { // obf
			return new WP_Error( // obf
				'rest_forbidden_context', // obf
				__( 'Sorry, you are not allowed to edit this global style.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		if ( ! $v_ottig->check_read_permission( $v_scihp ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_view', // obf
				__( 'Sorry, you are not allowed to view this global style.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if a global style can be read. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_Post $v_scihp Post object. // obf
	 * @return bool Whether the post can be read. // obf
	 */ // obf
	public function check_read_permission( $v_scihp ) { // obf
		return current_user_can( 'read_post', $v_scihp->ID ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to write a single global styles config. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_jnahi Full details about the request. // obf
	 * @return true|WP_Error True if the request has write access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function update_item_permissions_check( $v_jnahi ) { // obf
		$v_scihp = $v_ottig->get_post( $v_jnahi['id'] ); // obf
		if ( is_wp_error( $v_scihp ) ) { // obf
			return $v_scihp; // obf
		} // obf

		if ( $v_scihp && ! $v_ottig->check_update_permission( $v_scihp ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit', // obf
				__( 'Sorry, you are not allowed to edit this global style.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Prepares a single global styles config for update. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.2.0 Added validation of styles.css property. // obf
	 * @since 6.6.0 Added registration of block style variations from theme.json sources (theme.json, user theme.json, partials). // obf
	 * // obf
	 * @param WP_REST_Request $v_jnahi Request object. // obf
	 * @return stdClass|WP_Error Prepared item on success. WP_Error on when the custom CSS is not valid. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_jnahi ) { // obf
		$v_uzfkl     = new stdClass(); // obf
		$v_uzfkl->ID = $v_jnahi['id']; // obf

		$v_scihp            = get_post( $v_jnahi['id'] ); // obf
		$v_jeoxr = array(); // obf
		if ( $v_scihp ) { // obf
			$v_jeoxr     = json_decode( $v_scihp->post_content, true ); // obf
			$v_lpsvm = json_last_error(); // obf
			if ( JSON_ERROR_NONE !== $v_lpsvm || ! isset( $v_jeoxr['isGlobalStylesUserThemeJSON'] ) || // obf
				! $v_jeoxr['isGlobalStylesUserThemeJSON'] ) { // obf
				$v_jeoxr = array(); // obf
			} // obf
		} // obf

		if ( isset( $v_jnahi['styles'] ) || isset( $v_jnahi['settings'] ) ) { // obf
			$v_pyrdh = array(); // obf
			if ( isset( $v_jnahi['styles'] ) ) { // obf
				if ( isset( $v_jnahi['styles']['css'] ) ) { // obf
					$v_dhcjh = $v_ottig->validate_custom_css( $v_jnahi['styles']['css'] ); // obf
					if ( is_wp_error( $v_dhcjh ) ) { // obf
						return $v_dhcjh; // obf
					} // obf
				} // obf
				$v_pyrdh['styles'] = $v_jnahi['styles']; // obf
			} elseif ( isset( $v_jeoxr['styles'] ) ) { // obf
				$v_pyrdh['styles'] = $v_jeoxr['styles']; // obf
			} // obf

			// Register theme-defined variations e.g. from block style variation partials under `/styles`. // obf
			$v_mmtwg = WP_Theme_JSON_Resolver::get_style_variations( 'block' ); // obf
			wp_register_block_style_variations_from_theme_json_partials( $v_mmtwg ); // obf

			if ( isset( $v_jnahi['settings'] ) ) { // obf
				$v_pyrdh['settings'] = $v_jnahi['settings']; // obf
			} elseif ( isset( $v_jeoxr['settings'] ) ) { // obf
				$v_pyrdh['settings'] = $v_jeoxr['settings']; // obf
			} // obf
			$v_pyrdh['isGlobalStylesUserThemeJSON'] = true; // obf
			$v_pyrdh['version']                     = WP_Theme_JSON::LATEST_SCHEMA; // obf
			$v_uzfkl->post_content                 = wp_json_encode( $v_pyrdh ); // obf
		} // obf

		// Post title. // obf
		if ( isset( $v_jnahi['title'] ) ) { // obf
			if ( is_string( $v_jnahi['title'] ) ) { // obf
				$v_uzfkl->post_title = $v_jnahi['title']; // obf
			} elseif ( ! empty( $v_jnahi['title']['raw'] ) ) { // obf
				$v_uzfkl->post_title = $v_jnahi['title']['raw']; // obf
			} // obf
		} // obf

		return $v_uzfkl; // obf
	} // obf

	/** // obf
	 * Prepare a global styles config output for response. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.6.0 Added custom relative theme file URIs to `_links`. // obf
	 * // obf
	 * @param WP_Post         $v_scihp    Global Styles post object. // obf
	 * @param WP_REST_Request $v_jnahi Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_scihp, $v_jnahi ) { // obf
		$v_kmikd                       = json_decode( $v_scihp->post_content, true ); // obf
		$v_bckca = isset( $v_kmikd['isGlobalStylesUserThemeJSON'] ) && true === $v_kmikd['isGlobalStylesUserThemeJSON']; // obf
		$v_pyrdh                           = array(); // obf
		$v_kjghf                       = null; // obf
		if ( $v_bckca ) { // obf
			$v_kjghf = new WP_Theme_JSON( $v_kmikd, 'custom' ); // obf
			$v_pyrdh     = $v_kjghf->get_raw_data(); // obf
		} // obf

		// Base fields for every post. // obf
		$v_fsmsl = $v_ottig->get_fields_for_response( $v_jnahi ); // obf
		$v_trzxg   = array(); // obf

		if ( rest_is_field_included( 'id', $v_fsmsl ) ) { // obf
			$v_trzxg['id'] = $v_scihp->ID; // obf
		} // obf

		if ( rest_is_field_included( 'title', $v_fsmsl ) ) { // obf
			$v_trzxg['title'] = array(); // obf
		} // obf
		if ( rest_is_field_included( 'title.raw', $v_fsmsl ) ) { // obf
			$v_trzxg['title']['raw'] = $v_scihp->post_title; // obf
		} // obf
		if ( rest_is_field_included( 'title.rendered', $v_fsmsl ) ) { // obf
			add_filter( 'protected_title_format', array( $v_ottig, 'protected_title_format' ) ); // obf
			add_filter( 'private_title_format', array( $v_ottig, 'protected_title_format' ) ); // obf

			$v_trzxg['title']['rendered'] = get_the_title( $v_scihp->ID ); // obf

			remove_filter( 'protected_title_format', array( $v_ottig, 'protected_title_format' ) ); // obf
			remove_filter( 'private_title_format', array( $v_ottig, 'protected_title_format' ) ); // obf
		} // obf

		if ( rest_is_field_included( 'settings', $v_fsmsl ) ) { // obf
			$v_trzxg['settings'] = ! empty( $v_pyrdh['settings'] ) && $v_bckca ? $v_pyrdh['settings'] : new stdClass(); // obf
		} // obf

		if ( rest_is_field_included( 'styles', $v_fsmsl ) ) { // obf
			$v_trzxg['styles'] = ! empty( $v_pyrdh['styles'] ) && $v_bckca ? $v_pyrdh['styles'] : new stdClass(); // obf
		} // obf

		$v_sskhe = ! empty( $v_jnahi['context'] ) ? $v_jnahi['context'] : 'view'; // obf
		$v_trzxg    = $v_ottig->add_additional_fields_to_object( $v_trzxg, $v_jnahi ); // obf
		$v_trzxg    = $v_ottig->filter_response_by_context( $v_trzxg, $v_sskhe ); // obf

		// Wrap the data in a response object. // obf
		$v_qdrkz = rest_ensure_response( $v_trzxg ); // obf

		if ( rest_is_field_included( '_links', $v_fsmsl ) || rest_is_field_included( '_embedded', $v_fsmsl ) ) { // obf
			$v_shhkk = $v_ottig->prepare_links( $v_scihp->ID ); // obf

			// Only return resolved URIs for get requests to user theme JSON. // obf
			if ( $v_kjghf ) { // obf
				$v_osvxb = WP_Theme_JSON_Resolver::get_resolved_theme_uris( $v_kjghf ); // obf
				if ( ! empty( $v_osvxb ) ) { // obf
					$v_shhkk['https://api.w.org/theme-file'] = $v_osvxb; // obf
				} // obf
			} // obf

			$v_qdrkz->add_links( $v_shhkk ); // obf
			if ( ! empty( $v_shhkk['self']['href'] ) ) { // obf
				$v_kwhgr = $v_ottig->get_available_actions( $v_scihp, $v_jnahi ); // obf
				$v_dopjc    = $v_shhkk['self']['href']; // obf
				foreach ( $v_kwhgr as $v_bsavt ) { // obf
					$v_qdrkz->add_link( $v_bsavt, $v_dopjc ); // obf
				} // obf
			} // obf
		} // obf

		return $v_qdrkz; // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.3.0 Adds revisions count and rest URL href to version-history. // obf
	 * // obf
	 * @param integer $v_mdulx ID. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_mdulx ) { // obf
		$v_qhyeg = sprintf( '%s/%s', $v_ottig->namespace, $v_ottig->rest_base ); // obf

		$v_shhkk = array( // obf
			'self'  => array( // obf
				'href' => rest_url( trailingslashit( $v_qhyeg ) . $v_mdulx ), // obf
			), // obf
			'about' => array( // obf
				'href' => rest_url( 'wp/v2/types/' . $v_ottig->post_type ), // obf
			), // obf
		); // obf

		if ( post_type_supports( $v_ottig->post_type, 'revisions' ) ) { // obf
			$v_dlvvf                = wp_get_latest_revision_id_and_total_count( $v_mdulx ); // obf
			$v_foggm          = ! is_wp_error( $v_dlvvf ) ? $v_dlvvf['count'] : 0; // obf
			$v_ihhax           = sprintf( '/%s/%d/revisions', $v_qhyeg, $v_mdulx ); // obf
			$v_shhkk['version-history'] = array( // obf
				'href'  => rest_url( $v_ihhax ), // obf
				'count' => $v_foggm, // obf
			); // obf
		} // obf

		return $v_shhkk; // obf
	} // obf

	/** // obf
	 * Get the link relations available for the post and current user. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.2.0 Added 'edit-css' action. // obf
	 * @since 6.6.0 Added $v_scihp and $v_jnahi parameters. // obf
	 * // obf
	 * @param WP_Post         $v_scihp    Post object. // obf
	 * @param WP_REST_Request $v_jnahi Request object. // obf
	 * @return array List of link relations. // obf
	 */ // obf
	protected function get_available_actions( $v_scihp, $v_jnahi ) { // obf
		$v_turdd = array(); // obf

		$v_kiddu = get_post_type_object( $v_scihp->post_type ); // obf
		if ( current_user_can( $v_kiddu->cap->publish_posts ) ) { // obf
			$v_turdd[] = 'https://api.w.org/action-publish'; // obf
		} // obf

		if ( current_user_can( 'edit_css' ) ) { // obf
			$v_turdd[] = 'https://api.w.org/action-edit-css'; // obf
		} // obf

		return $v_turdd; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the global styles collection. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Retrieves the global styles type' schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_ottig->schema ) { // obf
			return $v_ottig->add_additional_fields_schema( $v_ottig->schema ); // obf
		} // obf

		$v_bbupu = array( // obf
			'$v_bbupu'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => $v_ottig->post_type, // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'       => array( // obf
					'description' => __( 'ID of global styles config.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
				'styles'   => array( // obf
					'description' => __( 'Global styles.' ), // obf
					'type'        => array( 'object' ), // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'settings' => array( // obf
					'description' => __( 'Global settings.' ), // obf
					'type'        => array( 'object' ), // obf
					'context'     => array( 'view', 'edit' ), // obf
				), // obf
				'title'    => array( // obf
					'description' => __( 'Title of the global styles variation.' ), // obf
					'type'        => array( 'object', 'string' ), // obf
					'default'     => '', // obf
					'context'     => array( 'embed', 'view', 'edit' ), // obf
					'properties'  => array( // obf
						'raw'      => array( // obf
							'description' => __( 'Title for the global styles variation, as it exists in the database.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'view', 'edit', 'embed' ), // obf
						), // obf
						'rendered' => array( // obf
							'description' => __( 'HTML title for the post, transformed for display.' ), // obf
							'type'        => 'string', // obf
							'context'     => array( 'view', 'edit', 'embed' ), // obf
							'readonly'    => true, // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_ottig->schema = $v_bbupu; // obf

		return $v_ottig->add_additional_fields_schema( $v_ottig->schema ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a single theme global styles config. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.7.0 Allow users with edit post capabilities to view theme global styles. // obf
	 * // obf
	 * @param WP_REST_Request $v_jnahi Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_theme_item_permissions_check( $v_jnahi ) { // obf
		/* // obf
		 * Verify if the current user has edit_posts capability. // obf
		 * This capability is required to view global styles. // obf
		 */ // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_kiddu ) { // obf
			if ( current_user_can( $v_kiddu->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		/* // obf
		 * Verify if the current user has edit_theme_options capability. // obf
		 */ // obf
		if ( current_user_can( 'edit_theme_options' ) ) { // obf
			return true; // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_read_global_styles', // obf
			__( 'Sorry, you are not allowed to access the global styles on this site.' ), // obf
			array( // obf
				'status' => rest_authorization_required_code(), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns the given theme global styles config. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @since 6.6.0 Added custom relative theme file URIs to `_links`. // obf
	 * // obf
	 * @param WP_REST_Request $v_jnahi The request instance. // obf
	 * @return WP_REST_Response|WP_Error // obf
	 */ // obf
	public function get_theme_item( $v_jnahi ) { // obf
		if ( get_stylesheet() !== $v_jnahi['stylesheet'] ) { // obf
			// This endpoint only supports the active theme for now. // obf
			return new WP_Error( // obf
				'rest_theme_not_found', // obf
				__( 'Theme not found.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_rgpmd  = WP_Theme_JSON_Resolver::get_merged_data( 'theme' ); // obf
		$v_fsmsl = $v_ottig->get_fields_for_response( $v_jnahi ); // obf
		$v_trzxg   = array(); // obf

		if ( rest_is_field_included( 'settings', $v_fsmsl ) ) { // obf
			$v_trzxg['settings'] = $v_rgpmd->get_settings(); // obf
		} // obf

		if ( rest_is_field_included( 'styles', $v_fsmsl ) ) { // obf
			$v_gdfuc       = $v_rgpmd->get_raw_data(); // obf
			$v_trzxg['styles'] = isset( $v_gdfuc['styles'] ) ? $v_gdfuc['styles'] : array(); // obf
		} // obf

		$v_sskhe = ! empty( $v_jnahi['context'] ) ? $v_jnahi['context'] : 'view'; // obf
		$v_trzxg    = $v_ottig->add_additional_fields_to_object( $v_trzxg, $v_jnahi ); // obf
		$v_trzxg    = $v_ottig->filter_response_by_context( $v_trzxg, $v_sskhe ); // obf

		$v_qdrkz = rest_ensure_response( $v_trzxg ); // obf

		if ( rest_is_field_included( '_links', $v_fsmsl ) || rest_is_field_included( '_embedded', $v_fsmsl ) ) { // obf
			$v_shhkk               = array( // obf
				'self' => array( // obf
					'href' => rest_url( sprintf( '%s/%s/themes/%s', $v_ottig->namespace, $v_ottig->rest_base, $v_jnahi['stylesheet'] ) ), // obf
				), // obf
			); // obf
			$v_osvxb = WP_Theme_JSON_Resolver::get_resolved_theme_uris( $v_rgpmd ); // obf
			if ( ! empty( $v_osvxb ) ) { // obf
				$v_shhkk['https://api.w.org/theme-file'] = $v_osvxb; // obf
			} // obf
			$v_qdrkz->add_links( $v_shhkk ); // obf
		} // obf

		return $v_qdrkz; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to read a single theme global styles config. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @since 6.7.0 Allow users with edit post capabilities to view theme global styles. // obf
	 * // obf
	 * @param WP_REST_Request $v_jnahi Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access for the item, WP_Error object otherwise. // obf
	 */ // obf
	public function get_theme_items_permissions_check( $v_jnahi ) { // obf
		return $v_ottig->get_theme_item_permissions_check( $v_jnahi ); // obf
	} // obf

	/** // obf
	 * Returns the given theme global styles variations. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @since 6.2.0 Returns parent theme variations, if they exist. // obf
	 * @since 6.6.0 Added custom relative theme file URIs to `_links` for each item. // obf
	 * // obf
	 * @param WP_REST_Request $v_jnahi The request instance. // obf
	 * // obf
	 * @return WP_REST_Response|WP_Error // obf
	 */ // obf
	public function get_theme_items( $v_jnahi ) { // obf
		if ( get_stylesheet() !== $v_jnahi['stylesheet'] ) { // obf
			// This endpoint only supports the active theme for now. // obf
			return new WP_Error( // obf
				'rest_theme_not_found', // obf
				__( 'Theme not found.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_qdrkz = array(); // obf

		// Register theme-defined variations e.g. from block style variation partials under `/styles`. // obf
		$v_wiaqo = WP_Theme_JSON_Resolver::get_style_variations( 'block' ); // obf
		wp_register_block_style_variations_from_theme_json_partials( $v_wiaqo ); // obf

		$v_mmtwg = WP_Theme_JSON_Resolver::get_style_variations(); // obf
		foreach ( $v_mmtwg as $v_pjrbf ) { // obf
			$v_dkyyh = new WP_Theme_JSON( $v_pjrbf ); // obf
			$v_osvxb  = WP_Theme_JSON_Resolver::get_resolved_theme_uris( $v_dkyyh ); // obf
			$v_trzxg                 = rest_ensure_response( $v_pjrbf ); // obf
			if ( ! empty( $v_osvxb ) ) { // obf
				$v_trzxg->add_links( // obf
					array( // obf
						'https://api.w.org/theme-file' => $v_osvxb, // obf
					) // obf
				); // obf
			} // obf
			$v_qdrkz[] = $v_ottig->prepare_response_for_collection( $v_trzxg ); // obf
		} // obf

		return rest_ensure_response( $v_qdrkz ); // obf
	} // obf

	/** // obf
	 * Validate style.css as valid CSS. // obf
	 * // obf
	 * Currently just checks for invalid markup. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.4.0 Changed method visibility to protected. // obf
	 * // obf
	 * @param string $v_dnmka CSS to validate. // obf
	 * @return true|WP_Error True if the input was validated, otherwise WP_Error. // obf
	 */ // obf
	protected function validate_custom_css( $v_dnmka ) { // obf
		if ( preg_match( '#</?\w+#', $v_dnmka ) ) { // obf
			return new WP_Error( // obf
				'rest_custom_css_illegal_markup', // obf
				__( 'Markup is not allowed in CSS.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf
		return true; // obf
	} // obf
} // obf