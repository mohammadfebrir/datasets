

<?php // obf
/** // obf
 * REST API: WP_REST_Font_Families_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Font Families Controller class. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
class WP_REST_Font_Families_Controller extends WP_REST_Posts_Controller { // obf

	/** // obf
	 * The latest version of theme.json schema supported by the controller. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var int // obf
	 */ // obf
	const LATEST_THEME_JSON_VERSION_SUPPORTED = 3; // obf

	/** // obf
	 * Whether the controller supports batching. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var false // obf
	 */ // obf
	protected $v_gtfnr = false; // obf

	/** // obf
	 * Checks if a given request has access to font families. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pnlwi Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_pnlwi ) { // obf
		$v_brlnl = get_post_type_object( $v_cnizf->post_type ); // obf

		if ( ! current_user_can( $v_brlnl->cap->read ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read', // obf
				__( 'Sorry, you are not allowed to access font families.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to a font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pnlwi Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_pnlwi ) { // obf
		$v_wjjto = $v_cnizf->get_post( $v_pnlwi['id'] ); // obf
		if ( is_wp_error( $v_wjjto ) ) { // obf
			return $v_wjjto; // obf
		} // obf

		if ( ! current_user_can( 'read_post', $v_wjjto->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read', // obf
				__( 'Sorry, you are not allowed to access this font family.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Validates settings when creating or updating a font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string          $v_omorp   Encoded JSON string of font family settings. // obf
	 * @param WP_REST_Request $v_pnlwi Request object. // obf
	 * @return true|WP_Error True if the settings are valid, otherwise a WP_Error object. // obf
	 */ // obf
	public function validate_font_family_settings( $v_omorp, $v_pnlwi ) { // obf
		$v_xfqte = json_decode( $v_omorp, true ); // obf

		// Check settings string is valid JSON. // obf
		if ( null === $v_xfqte ) { // obf
			return new WP_Error( // obf
				'rest_invalid_param', // obf
				/* translators: %s: Parameter name: "font_family_settings". */ // obf
				sprintf( __( '%s parameter must be a valid JSON string.' ), 'font_family_settings' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_pvwaa   = $v_cnizf->get_item_schema()['properties']['font_family_settings']; // obf
		$v_yfgbv = $v_pvwaa['required']; // obf

		if ( isset( $v_pnlwi['id'] ) ) { // obf
			// Allow sending individual properties if we are updating an existing font family. // obf
			unset( $v_pvwaa['required'] ); // obf

			// But don't allow updating the slug, since it is used as a unique identifier. // obf
			if ( isset( $v_xfqte['slug'] ) ) { // obf
				return new WP_Error( // obf
					'rest_invalid_param', // obf
					/* translators: %s: Name of parameter being updated: font_family_settings[slug]". */ // obf
					sprintf( __( '%s cannot be updated.' ), 'font_family_settings[slug]' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		// Check that the font face settings match the theme.json schema. // obf
		$v_ichoo = rest_validate_value_from_schema( $v_xfqte, $v_pvwaa, 'font_family_settings' ); // obf

		if ( is_wp_error( $v_ichoo ) ) { // obf
			$v_ichoo->add_data( array( 'status' => 400 ) ); // obf
			return $v_ichoo; // obf
		} // obf

		// Check that none of the required settings are empty values. // obf
		foreach ( $v_yfgbv as $v_eraqc ) { // obf
			if ( isset( $v_xfqte[ $v_eraqc ] ) && ! $v_xfqte[ $v_eraqc ] ) { // obf
				return new WP_Error( // obf
					'rest_invalid_param', // obf
					/* translators: %s: Name of the empty font family setting parameter, e.g. "font_family_settings[slug]". */ // obf
					sprintf( __( '%s cannot be empty.' ), "font_family_settings[ $v_eraqc ]" ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Sanitizes the font family settings when creating or updating a font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_omorp Encoded JSON string of font family settings. // obf
	 * @return array Decoded array of font family settings. // obf
	 */ // obf
	public function sanitize_font_family_settings( $v_omorp ) { // obf
		// Settings arrive as stringified JSON, since this is a multipart/form-data request. // obf
		$v_xfqte = json_decode( $v_omorp, true ); // obf
		$v_pvwaa   = $v_cnizf->get_item_schema()['properties']['font_family_settings']['properties']; // obf

		// Sanitize settings based on callbacks in the schema. // obf
		foreach ( $v_xfqte as $v_eraqc => $v_omorp ) { // obf
			$v_kihob = $v_pvwaa[ $v_eraqc ]['arg_options']['sanitize_callback']; // obf
			$v_xfqte[ $v_eraqc ]  = call_user_func( $v_kihob, $v_omorp ); // obf
		} // obf

		return $v_xfqte; // obf
	} // obf

	/** // obf
	 * Creates a single font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pnlwi Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_pnlwi ) { // obf
		$v_xfqte = $v_pnlwi->get_param( 'font_family_settings' ); // obf

		// Check that the font family slug is unique. // obf
		$v_zmkos = new WP_Query( // obf
			array( // obf
				'post_type'              => $v_cnizf->post_type, // obf
				'posts_per_page'         => 1, // obf
				'name'                   => $v_xfqte['slug'], // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
			) // obf
		); // obf
		if ( ! empty( $v_zmkos->posts ) ) { // obf
			return new WP_Error( // obf
				'rest_duplicate_font_family', // obf
				/* translators: %s: Font family slug. */ // obf
				sprintf( __( 'A font family with slug "%s" already exists.' ), $v_xfqte['slug'] ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		return parent::create_item( $v_pnlwi ); // obf
	} // obf

	/** // obf
	 * Deletes a single font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pnlwi Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_pnlwi ) { // obf
		$v_iocft = isset( $v_pnlwi['force'] ) ? (bool) $v_pnlwi['force'] : false; // obf

		// We don't support trashing for font families. // obf
		if ( ! $v_iocft ) { // obf
			return new WP_Error( // obf
				'rest_trash_not_supported', // obf
				/* translators: %s: force=true */ // obf
				sprintf( __( 'Font faces do not support trashing. Set "%s" to delete.' ), 'force=true' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		return parent::delete_item( $v_pnlwi ); // obf
	} // obf

	/** // obf
	 * Prepares a single font family output for response. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Post         $v_pfnwr    Post object. // obf
	 * @param WP_REST_Request $v_pnlwi Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_pfnwr, $v_pnlwi ) { // obf
		$v_wfhjp = $v_cnizf->get_fields_for_response( $v_pnlwi ); // obf
		$v_dvwac   = array(); // obf

		if ( rest_is_field_included( 'id', $v_wfhjp ) ) { // obf
			$v_dvwac['id'] = $v_pfnwr->ID; // obf
		} // obf

		if ( rest_is_field_included( 'theme_json_version', $v_wfhjp ) ) { // obf
			$v_dvwac['theme_json_version'] = static::LATEST_THEME_JSON_VERSION_SUPPORTED; // obf
		} // obf

		if ( rest_is_field_included( 'font_faces', $v_wfhjp ) ) { // obf
			$v_dvwac['font_faces'] = $v_cnizf->get_font_face_ids( $v_pfnwr->ID ); // obf
		} // obf

		if ( rest_is_field_included( 'font_family_settings', $v_wfhjp ) ) { // obf
			$v_dvwac['font_family_settings'] = $v_cnizf->get_settings_from_post( $v_pfnwr ); // obf
		} // obf

		$v_wjslb = ! empty( $v_pnlwi['context'] ) ? $v_pnlwi['context'] : 'view'; // obf
		$v_dvwac    = $v_cnizf->add_additional_fields_to_object( $v_dvwac, $v_pnlwi ); // obf
		$v_dvwac    = $v_cnizf->filter_response_by_context( $v_dvwac, $v_wjslb ); // obf

		$v_zvcko = rest_ensure_response( $v_dvwac ); // obf

		if ( rest_is_field_included( '_links', $v_wfhjp ) ) { // obf
			$v_geqpc = $v_cnizf->prepare_links( $v_pfnwr ); // obf
			$v_zvcko->add_links( $v_geqpc ); // obf
		} // obf

		/** // obf
		 * Filters the font family data for a REST API response. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_zvcko The response object. // obf
		 * @param WP_Post          $v_wjjto     Font family post object. // obf
		 * @param WP_REST_Request  $v_pnlwi  Request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_wp_font_family', $v_zvcko, $v_pfnwr, $v_pnlwi ); // obf
	} // obf

	/** // obf
	 * Retrieves the post's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_cnizf->schema ) { // obf
			return $v_cnizf->add_additional_fields_schema( $v_cnizf->schema ); // obf
		} // obf

		$v_pvwaa = array( // obf
			'$v_pvwaa'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => $v_cnizf->post_type, // obf
			'type'       => 'object', // obf
			// Base properties for every Post. // obf
			'properties' => array( // obf
				'id'                   => array( // obf
					'description' => __( 'Unique identifier for the post.', 'default' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'theme_json_version'   => array( // obf
					'description' => __( 'Version of the theme.json schema used for the typography settings.' ), // obf
					'type'        => 'integer', // obf
					'default'     => static::LATEST_THEME_JSON_VERSION_SUPPORTED, // obf
					'minimum'     => 2, // obf
					'maximum'     => static::LATEST_THEME_JSON_VERSION_SUPPORTED, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'font_faces'           => array( // obf
					'description' => __( 'The IDs of the child font faces in the font family.' ), // obf
					'type'        => 'array', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'items'       => array( // obf
						'type' => 'integer', // obf
					), // obf
				), // obf
				// Font family settings come directly from theme.json schema // obf
				// See https://schemas.wp.org/trunk/theme.json // obf
				'font_family_settings' => array( // obf
					'description'          => __( 'font-face definition in theme.json format.' ), // obf
					'type'                 => 'object', // obf
					'context'              => array( 'view', 'edit', 'embed' ), // obf
					'properties'           => array( // obf
						'name'       => array( // obf
							'description' => __( 'Name of the font family preset, translatable.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'slug'       => array( // obf
							'description' => __( 'Kebab-case unique identifier for the font family preset.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_title', // obf
							), // obf
						), // obf
						'fontFamily' => array( // obf
							'description' => __( 'CSS font-family value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => array( 'WP_Font_Utils', 'sanitize_font_family' ), // obf
							), // obf
						), // obf
						'preview'    => array( // obf
							'description' => __( 'URL to a preview image of the font family.' ), // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
							'default'     => '', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_url', // obf
							), // obf
						), // obf
					), // obf
					'required'             => array( 'name', 'slug', 'fontFamily' ), // obf
					'additionalProperties' => false, // obf
				), // obf
			), // obf
		); // obf

		$v_cnizf->schema = $v_pvwaa; // obf

		return $v_cnizf->add_additional_fields_schema( $v_cnizf->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the item's schema for display / public consumption purposes. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Public item schema data. // obf
	 */ // obf
	public function get_public_item_schema() { // obf

		$v_pvwaa = parent::get_public_item_schema(); // obf

		// Also remove `arg_options' from child font_family_settings properties, since the parent // obf
		// controller only handles the top level properties. // obf
		foreach ( $v_pvwaa['properties']['font_family_settings']['properties'] as &$v_wdvsv ) { // obf
			unset( $v_wdvsv['arg_options'] ); // obf
		} // obf

		return $v_pvwaa; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the font family collection. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_fayia = parent::get_collection_params(); // obf

		// Remove unneeded params. // obf
		unset( // obf
			$v_fayia['after'], // obf
			$v_fayia['modified_after'], // obf
			$v_fayia['before'], // obf
			$v_fayia['modified_before'], // obf
			$v_fayia['search'], // obf
			$v_fayia['search_columns'], // obf
			$v_fayia['status'] // obf
		); // obf

		$v_fayia['orderby']['default'] = 'id'; // obf
		$v_fayia['orderby']['enum']    = array( 'id', 'include' ); // obf

		/** // obf
		 * Filters collection parameters for the font family controller. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param array $v_fayia JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_wp_font_family_collection_params', $v_fayia ); // obf
	} // obf

	/** // obf
	 * Get the arguments used when creating or updating a font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Font family create/edit arguments. // obf
	 */ // obf
	public function get_endpoint_args_for_item_schema( $v_ykzsn = WP_REST_Server::CREATABLE ) { // obf
		if ( WP_REST_Server::CREATABLE === $v_ykzsn || WP_REST_Server::EDITABLE === $v_ykzsn ) { // obf
			$v_irdus = $v_cnizf->get_item_schema()['properties']; // obf
			return array( // obf
				'theme_json_version'   => $v_irdus['theme_json_version'], // obf
				// When creating or updating, font_family_settings is stringified JSON, to work with multipart/form-data. // obf
				// Font families don't currently support file uploads, but may accept preview files in the future. // obf
				'font_family_settings' => array( // obf
					'description'       => __( 'font-family declaration in theme.json format, encoded as a string.' ), // obf
					'type'              => 'string', // obf
					'required'          => true, // obf
					'validate_callback' => array( $v_cnizf, 'validate_font_family_settings' ), // obf
					'sanitize_callback' => array( $v_cnizf, 'sanitize_font_family_settings' ), // obf
				), // obf
			); // obf
		} // obf

		return parent::get_endpoint_args_for_item_schema( $v_ykzsn ); // obf
	} // obf

	/** // obf
	 * Get the child font face post IDs. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param int $v_urots Font family post ID. // obf
	 * @return int[] Array of child font face post IDs. // obf
	 */ // obf
	protected function get_font_face_ids( $v_urots ) { // obf
		$v_zmkos = new WP_Query( // obf
			array( // obf
				'fields'                 => 'ids', // obf
				'post_parent'            => $v_urots, // obf
				'post_type'              => 'wp_font_face', // obf
				'posts_per_page'         => 99, // obf
				'order'                  => 'ASC', // obf
				'orderby'                => 'id', // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
			) // obf
		); // obf

		return $v_zmkos->posts; // obf
	} // obf

	/** // obf
	 * Prepares font family links for the request. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Post $v_wjjto Post object. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_wjjto ) { // obf
		// Entity meta. // obf
		$v_geqpc = parent::prepare_links( $v_wjjto ); // obf

		return array( // obf
			'self'       => $v_geqpc['self'], // obf
			'collection' => $v_geqpc['collection'], // obf
			'font_faces' => $v_cnizf->prepare_font_face_links( $v_wjjto->ID ), // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares child font face links for the request. // obf
	 * // obf
	 * @param int $v_urots Font family post ID. // obf
	 * @return array Links for the child font face posts. // obf
	 */ // obf
	protected function prepare_font_face_links( $v_urots ) { // obf
		$v_iuero = $v_cnizf->get_font_face_ids( $v_urots ); // obf
		$v_geqpc         = array(); // obf
		foreach ( $v_iuero as $v_gndct ) { // obf
			$v_geqpc[] = array( // obf
				'embeddable' => true, // obf
				'href'       => rest_url( sprintf( '%s/%s/%s/font-faces/%s', $v_cnizf->namespace, $v_cnizf->rest_base, $v_urots, $v_gndct ) ), // obf
			); // obf
		} // obf
		return $v_geqpc; // obf
	} // obf

	/** // obf
	 * Prepares a single font family post for create or update. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_pnlwi Request object. // obf
	 * @return stdClass|WP_Error Post object or WP_Error. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_pnlwi ) { // obf
		$v_vhpvk = new stdClass(); // obf
		// Settings have already been decoded by ::sanitize_font_family_settings(). // obf
		$v_xfqte = $v_pnlwi->get_param( 'font_family_settings' ); // obf

		// This is an update and we merge with the existing font family. // obf
		if ( isset( $v_pnlwi['id'] ) ) { // obf
			$v_qdvhd = $v_cnizf->get_post( $v_pnlwi['id'] ); // obf
			if ( is_wp_error( $v_qdvhd ) ) { // obf
				return $v_qdvhd; // obf
			} // obf

			$v_vhpvk->ID = $v_qdvhd->ID; // obf
			$v_wbzxm = $v_cnizf->get_settings_from_post( $v_qdvhd ); // obf
			$v_xfqte          = array_merge( $v_wbzxm, $v_xfqte ); // obf
		} // obf

		$v_vhpvk->post_type   = $v_cnizf->post_type; // obf
		$v_vhpvk->post_status = 'publish'; // obf
		$v_vhpvk->post_title  = $v_xfqte['name']; // obf
		$v_vhpvk->post_name   = sanitize_title( $v_xfqte['slug'] ); // obf

		// Remove duplicate information from settings. // obf
		unset( $v_xfqte['name'] ); // obf
		unset( $v_xfqte['slug'] ); // obf

		$v_vhpvk->post_content = wp_json_encode( $v_xfqte ); // obf

		return $v_vhpvk; // obf
	} // obf

	/** // obf
	 * Gets the font family's settings from the post. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Post $v_wjjto Font family post object. // obf
	 * @return array Font family settings array. // obf
	 */ // obf
	protected function get_settings_from_post( $v_wjjto ) { // obf
		$v_kpjbm = json_decode( $v_wjjto->post_content, true ); // obf

		// Default to empty strings if the settings are missing. // obf
		return array( // obf
			'name'       => isset( $v_wjjto->post_title ) && $v_wjjto->post_title ? $v_wjjto->post_title : '', // obf
			'slug'       => isset( $v_wjjto->post_name ) && $v_wjjto->post_name ? $v_wjjto->post_name : '', // obf
			'fontFamily' => isset( $v_kpjbm['fontFamily'] ) && $v_kpjbm['fontFamily'] ? $v_kpjbm['fontFamily'] : '', // obf
			'preview'    => isset( $v_kpjbm['preview'] ) && $v_kpjbm['preview'] ? $v_kpjbm['preview'] : '', // obf
		); // obf
	} // obf
} // obf