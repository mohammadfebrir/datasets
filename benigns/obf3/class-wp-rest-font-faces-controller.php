

<?php // obf
/** // obf
 * REST API: WP_REST_Font_Faces_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class to access font faces through the REST API. // obf
 */ // obf
class WP_REST_Font_Faces_Controller extends WP_REST_Posts_Controller { // obf

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
	protected $v_ofsgt = false; // obf

	/** // obf
	 * Registers the routes for posts. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_elbyq->namespace, // obf
			'/' . $v_elbyq->rest_base, // obf
			array( // obf
				'args'   => array( // obf
					'font_family_id' => array( // obf
						'description' => __( 'The ID for the parent font family of the font face.' ), // obf
						'type'        => 'integer', // obf
						'required'    => true, // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_elbyq, 'get_items' ), // obf
					'permission_callback' => array( $v_elbyq, 'get_items_permissions_check' ), // obf
					'args'                => $v_elbyq->get_collection_params(), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::CREATABLE, // obf
					'callback'            => array( $v_elbyq, 'create_item' ), // obf
					'permission_callback' => array( $v_elbyq, 'create_item_permissions_check' ), // obf
					'args'                => $v_elbyq->get_create_params(), // obf
				), // obf
				'schema' => array( $v_elbyq, 'get_public_item_schema' ), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			$v_elbyq->namespace, // obf
			'/' . $v_elbyq->rest_base . '/(?P<id>[\d]+)', // obf
			array( // obf
				'args'   => array( // obf
					'font_family_id' => array( // obf
						'description' => __( 'The ID for the parent font family of the font face.' ), // obf
						'type'        => 'integer', // obf
						'required'    => true, // obf
					), // obf
					'id'             => array( // obf
						'description' => __( 'Unique identifier for the font face.' ), // obf
						'type'        => 'integer', // obf
						'required'    => true, // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_elbyq, 'get_item' ), // obf
					'permission_callback' => array( $v_elbyq, 'get_item_permissions_check' ), // obf
					'args'                => array( // obf
						'context' => $v_elbyq->get_context_param( array( 'default' => 'view' ) ), // obf
					), // obf
				), // obf
				array( // obf
					'methods'             => WP_REST_Server::DELETABLE, // obf
					'callback'            => array( $v_elbyq, 'delete_item' ), // obf
					'permission_callback' => array( $v_elbyq, 'delete_item_permissions_check' ), // obf
					'args'                => array( // obf
						'force' => array( // obf
							'type'        => 'boolean', // obf
							'default'     => false, // obf
							'description' => __( 'Whether to bypass Trash and force deletion.', 'default' ), // obf
						), // obf
					), // obf
				), // obf
				'schema' => array( $v_elbyq, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to font faces. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dfwuc Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_dfwuc ) { // obf
		$v_qwefc = get_post_type_object( $v_elbyq->post_type ); // obf

		if ( ! current_user_can( $v_qwefc->cap->read ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read', // obf
				__( 'Sorry, you are not allowed to access font faces.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to a font face. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dfwuc Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_item_permissions_check( $v_dfwuc ) { // obf
		$v_pynla = $v_elbyq->get_post( $v_dfwuc['id'] ); // obf
		if ( is_wp_error( $v_pynla ) ) { // obf
			return $v_pynla; // obf
		} // obf

		if ( ! current_user_can( 'read_post', $v_pynla->ID ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_read', // obf
				__( 'Sorry, you are not allowed to access this font face.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Validates settings when creating a font face. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string          $v_twrkk   Encoded JSON string of font face settings. // obf
	 * @param WP_REST_Request $v_dfwuc Request object. // obf
	 * @return true|WP_Error True if the settings are valid, otherwise a WP_Error object. // obf
	 */ // obf
	public function validate_create_font_face_settings( $v_twrkk, $v_dfwuc ) { // obf
		$v_uygtn = json_decode( $v_twrkk, true ); // obf

		// Check settings string is valid JSON. // obf
		if ( null === $v_uygtn ) { // obf
			return new WP_Error( // obf
				'rest_invalid_param', // obf
				__( 'font_face_settings parameter must be a valid JSON string.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Check that the font face settings match the theme.json schema. // obf
		$v_otdba             = $v_elbyq->get_item_schema()['properties']['font_face_settings']; // obf
		$v_mital = rest_validate_value_from_schema( $v_uygtn, $v_otdba, 'font_face_settings' ); // obf

		if ( is_wp_error( $v_mital ) ) { // obf
			$v_mital->add_data( array( 'status' => 400 ) ); // obf
			return $v_mital; // obf
		} // obf

		// Check that none of the required settings are empty values. // obf
		$v_nwgbq = $v_otdba['required']; // obf
		foreach ( $v_nwgbq as $v_aaeqk ) { // obf
			if ( isset( $v_uygtn[ $v_aaeqk ] ) && ! $v_uygtn[ $v_aaeqk ] ) { // obf
				return new WP_Error( // obf
					'rest_invalid_param', // obf
					/* translators: %s: Name of the missing font face settings parameter, e.g. "font_face_settings[src]". */ // obf
					sprintf( __( '%s cannot be empty.' ), "font_face_setting[ $v_aaeqk ]" ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		$v_uoibm  = is_array( $v_uygtn['src'] ) ? $v_uygtn['src'] : array( $v_uygtn['src'] ); // obf
		$v_qhubk = $v_dfwuc->get_file_params(); // obf

		foreach ( $v_uoibm as $v_oqjpz ) { // obf
			// Check that each src is a non-empty string. // obf
			$v_oqjpz = ltrim( $v_oqjpz ); // obf
			if ( empty( $v_oqjpz ) ) { // obf
				return new WP_Error( // obf
					'rest_invalid_param', // obf
					/* translators: %s: Font face source parameter name: "font_face_settings[src]". */ // obf
					sprintf( __( '%s values must be non-empty strings.' ), 'font_face_settings[src]' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf

			// Check that srcs are valid URLs or file references. // obf
			if ( false === wp_http_validate_url( $v_oqjpz ) && ! isset( $v_qhubk[ $v_oqjpz ] ) ) { // obf
				return new WP_Error( // obf
					'rest_invalid_param', // obf
					/* translators: 1: Font face source parameter name: "font_face_settings[src]", 2: The invalid src value. */ // obf
					sprintf( __( '%1$v_tmprt value "%2$v_tmprt" must be a valid URL or file reference.' ), 'font_face_settings[src]', $v_oqjpz ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		// Check that each file in the request references a src in the settings. // obf
		foreach ( array_keys( $v_qhubk ) as $v_jcnso ) { // obf
			if ( ! in_array( $v_jcnso, $v_uoibm, true ) ) { // obf
				return new WP_Error( // obf
					'rest_invalid_param', // obf
					/* translators: 1: File key (e.g. "file-0") in the request data, 2: Font face source parameter name: "font_face_settings[src]". */ // obf
					sprintf( __( 'File %1$v_tmprt must be used in %2$v_tmprt.' ), $v_jcnso, 'font_face_settings[src]' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Sanitizes the font face settings when creating a font face. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_twrkk Encoded JSON string of font face settings. // obf
	 * @return array Decoded and sanitized array of font face settings. // obf
	 */ // obf
	public function sanitize_font_face_settings( $v_twrkk ) { // obf
		// Settings arrive as stringified JSON, since this is a multipart/form-data request. // obf
		$v_uygtn = json_decode( $v_twrkk, true ); // obf
		$v_otdba   = $v_elbyq->get_item_schema()['properties']['font_face_settings']['properties']; // obf

		// Sanitize settings based on callbacks in the schema. // obf
		foreach ( $v_uygtn as $v_aaeqk => $v_twrkk ) { // obf
			$v_nlima = $v_otdba[ $v_aaeqk ]['arg_options']['sanitize_callback']; // obf
			$v_uygtn[ $v_aaeqk ]  = call_user_func( $v_nlima, $v_twrkk ); // obf
		} // obf

		return $v_uygtn; // obf
	} // obf

	/** // obf
	 * Retrieves a collection of font faces within the parent font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dfwuc Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_dfwuc ) { // obf
		$v_cvtcc = $v_elbyq->get_parent_font_family_post( $v_dfwuc['font_family_id'] ); // obf
		if ( is_wp_error( $v_cvtcc ) ) { // obf
			return $v_cvtcc; // obf
		} // obf

		return parent::get_items( $v_dfwuc ); // obf
	} // obf

	/** // obf
	 * Retrieves a single font face within the parent font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dfwuc Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_item( $v_dfwuc ) { // obf
		$v_pynla = $v_elbyq->get_post( $v_dfwuc['id'] ); // obf
		if ( is_wp_error( $v_pynla ) ) { // obf
			return $v_pynla; // obf
		} // obf

		// Check that the font face has a valid parent font family. // obf
		$v_cvtcc = $v_elbyq->get_parent_font_family_post( $v_dfwuc['font_family_id'] ); // obf
		if ( is_wp_error( $v_cvtcc ) ) { // obf
			return $v_cvtcc; // obf
		} // obf

		if ( (int) $v_cvtcc->ID !== (int) $v_pynla->post_parent ) { // obf
			return new WP_Error( // obf
				'rest_font_face_parent_id_mismatch', // obf
				/* translators: %d: A post id. */ // obf
				sprintf( __( 'The font face does not belong to the specified font family with id of "%d".' ), $v_cvtcc->ID ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		return parent::get_item( $v_dfwuc ); // obf
	} // obf

	/** // obf
	 * Creates a font face for the parent font family. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dfwuc Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_dfwuc ) { // obf
		$v_cvtcc = $v_elbyq->get_parent_font_family_post( $v_dfwuc['font_family_id'] ); // obf
		if ( is_wp_error( $v_cvtcc ) ) { // obf
			return $v_cvtcc; // obf
		} // obf

		// Settings have already been decoded by ::sanitize_font_face_settings(). // obf
		$v_uygtn    = $v_dfwuc->get_param( 'font_face_settings' ); // obf
		$v_pjweo = $v_dfwuc->get_file_params(); // obf

		// Check that the necessary font face properties are unique. // obf
		$v_ncawk = new WP_Query( // obf
			array( // obf
				'post_type'              => $v_elbyq->post_type, // obf
				'posts_per_page'         => 1, // obf
				'title'                  => WP_Font_Utils::get_font_face_slug( $v_uygtn ), // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
			) // obf
		); // obf
		if ( ! empty( $v_ncawk->posts ) ) { // obf
			return new WP_Error( // obf
				'rest_duplicate_font_face', // obf
				__( 'A font face matching those settings already exists.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Move the uploaded font asset from the temp folder to the fonts directory. // obf
		if ( ! function_exists( 'wp_handle_upload' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		} // obf

		$v_uoibm           = is_string( $v_uygtn['src'] ) ? array( $v_uygtn['src'] ) : $v_uygtn['src']; // obf
		$v_fvktx = array(); // obf
		$v_zhsxj = array(); // obf

		foreach ( $v_uoibm as $v_oqjpz ) { // obf
			// If src not a file reference, use it as is. // obf
			if ( ! isset( $v_pjweo[ $v_oqjpz ] ) ) { // obf
				$v_fvktx[] = $v_oqjpz; // obf
				continue; // obf
			} // obf

			$v_jcnso      = $v_pjweo[ $v_oqjpz ]; // obf
			$v_nfrrf = $v_elbyq->handle_font_file_upload( $v_jcnso ); // obf
			if ( is_wp_error( $v_nfrrf ) ) { // obf
				return $v_nfrrf; // obf
			} // obf

			$v_fvktx[] = $v_nfrrf['url']; // obf
			$v_zhsxj[] = $v_elbyq->relative_fonts_path( $v_nfrrf['file'] ); // obf
		} // obf

		// Store the updated settings for prepare_item_for_database to use. // obf
		$v_uygtn['src'] = count( $v_fvktx ) === 1 ? $v_fvktx[0] : $v_fvktx; // obf
		$v_dfwuc->set_param( 'font_face_settings', $v_uygtn ); // obf

		// Ensure that $v_uygtn data is slashed, so values with quotes are escaped. // obf
		// WP_REST_Posts_Controller::create_item uses wp_slash() on the post_content. // obf
		$v_dlhyu = parent::create_item( $v_dfwuc ); // obf

		if ( is_wp_error( $v_dlhyu ) ) { // obf
			return $v_dlhyu; // obf
		} // obf

		$v_iomno = $v_dlhyu->data['id']; // obf

		foreach ( $v_zhsxj as $v_hyqpm ) { // obf
			add_post_meta( $v_iomno, '_wp_font_face_file', $v_hyqpm ); // obf
		} // obf

		return $v_dlhyu; // obf
	} // obf

	/** // obf
	 * Deletes a single font face. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dfwuc Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function delete_item( $v_dfwuc ) { // obf
		$v_pynla = $v_elbyq->get_post( $v_dfwuc['id'] ); // obf
		if ( is_wp_error( $v_pynla ) ) { // obf
			return $v_pynla; // obf
		} // obf

		$v_cvtcc = $v_elbyq->get_parent_font_family_post( $v_dfwuc['font_family_id'] ); // obf
		if ( is_wp_error( $v_cvtcc ) ) { // obf
			return $v_cvtcc; // obf
		} // obf

		if ( (int) $v_cvtcc->ID !== (int) $v_pynla->post_parent ) { // obf
			return new WP_Error( // obf
				'rest_font_face_parent_id_mismatch', // obf
				/* translators: %d: A post id. */ // obf
				sprintf( __( 'The font face does not belong to the specified font family with id of "%d".' ), $v_cvtcc->ID ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_unwpw = isset( $v_dfwuc['force'] ) ? (bool) $v_dfwuc['force'] : false; // obf

		// We don't support trashing for font faces. // obf
		if ( ! $v_unwpw ) { // obf
			return new WP_Error( // obf
				'rest_trash_not_supported', // obf
				/* translators: %s: force=true */ // obf
				sprintf( __( 'Font faces do not support trashing. Set "%s" to delete.' ), 'force=true' ), // obf
				array( 'status' => 501 ) // obf
			); // obf
		} // obf

		return parent::delete_item( $v_dfwuc ); // obf
	} // obf

	/** // obf
	 * Prepares a single font face output for response. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Post         $v_pufri    Post object. // obf
	 * @param WP_REST_Request $v_dfwuc Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_pufri, $v_dfwuc ) { // obf
		$v_jfeyo = $v_elbyq->get_fields_for_response( $v_dfwuc ); // obf
		$v_rgckj   = array(); // obf

		if ( rest_is_field_included( 'id', $v_jfeyo ) ) { // obf
			$v_rgckj['id'] = $v_pufri->ID; // obf
		} // obf
		if ( rest_is_field_included( 'theme_json_version', $v_jfeyo ) ) { // obf
			$v_rgckj['theme_json_version'] = static::LATEST_THEME_JSON_VERSION_SUPPORTED; // obf
		} // obf

		if ( rest_is_field_included( 'parent', $v_jfeyo ) ) { // obf
			$v_rgckj['parent'] = $v_pufri->post_parent; // obf
		} // obf

		if ( rest_is_field_included( 'font_face_settings', $v_jfeyo ) ) { // obf
			$v_rgckj['font_face_settings'] = $v_elbyq->get_settings_from_post( $v_pufri ); // obf
		} // obf

		$v_xovrk = ! empty( $v_dfwuc['context'] ) ? $v_dfwuc['context'] : 'view'; // obf
		$v_rgckj    = $v_elbyq->add_additional_fields_to_object( $v_rgckj, $v_dfwuc ); // obf
		$v_rgckj    = $v_elbyq->filter_response_by_context( $v_rgckj, $v_xovrk ); // obf

		$v_lrtbz = rest_ensure_response( $v_rgckj ); // obf

		if ( rest_is_field_included( '_links', $v_jfeyo ) || rest_is_field_included( '_embedded', $v_jfeyo ) ) { // obf
			$v_ehhwg = $v_elbyq->prepare_links( $v_pufri ); // obf
			$v_lrtbz->add_links( $v_ehhwg ); // obf
		} // obf

		/** // obf
		 * Filters the font face data for a REST API response. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_lrtbz The response object. // obf
		 * @param WP_Post          $v_pynla     Font face post object. // obf
		 * @param WP_REST_Request  $v_dfwuc  Request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_wp_font_face', $v_lrtbz, $v_pufri, $v_dfwuc ); // obf
	} // obf

	/** // obf
	 * Retrieves the post's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_elbyq->schema ) { // obf
			return $v_elbyq->add_additional_fields_schema( $v_elbyq->schema ); // obf
		} // obf

		$v_otdba = array( // obf
			'$v_otdba'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => $v_elbyq->post_type, // obf
			'type'       => 'object', // obf
			// Base properties for every Post. // obf
			'properties' => array( // obf
				'id'                 => array( // obf
					'description' => __( 'Unique identifier for the post.', 'default' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'theme_json_version' => array( // obf
					'description' => __( 'Version of the theme.json schema used for the typography settings.' ), // obf
					'type'        => 'integer', // obf
					'default'     => static::LATEST_THEME_JSON_VERSION_SUPPORTED, // obf
					'minimum'     => 2, // obf
					'maximum'     => static::LATEST_THEME_JSON_VERSION_SUPPORTED, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				'parent'             => array( // obf
					'description' => __( 'The ID for the parent font family of the font face.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf
				// Font face settings come directly from theme.json schema // obf
				// See https://schemas.wp.org/trunk/theme.json // obf
				'font_face_settings' => array( // obf
					'description'          => __( 'font-face declaration in theme.json format.' ), // obf
					'type'                 => 'object', // obf
					'context'              => array( 'view', 'edit', 'embed' ), // obf
					'properties'           => array( // obf
						'fontFamily'            => array( // obf
							'description' => __( 'CSS font-family value.' ), // obf
							'type'        => 'string', // obf
							'default'     => '', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => array( 'WP_Font_Utils', 'sanitize_font_family' ), // obf
							), // obf
						), // obf
						'fontStyle'             => array( // obf
							'description' => __( 'CSS font-style value.' ), // obf
							'type'        => 'string', // obf
							'default'     => 'normal', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'fontWeight'            => array( // obf
							'description' => __( 'List of available font weights, separated by a space.' ), // obf
							'default'     => '400', // obf
							// Changed from `oneOf` to avoid errors from loose type checking. // obf
							// e.g. a fontWeight of "400" validates as both a string and an integer due to is_numeric check. // obf
							'type'        => array( 'string', 'integer' ), // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'fontDisplay'           => array( // obf
							'description' => __( 'CSS font-display value.' ), // obf
							'type'        => 'string', // obf
							'default'     => 'fallback', // obf
							'enum'        => array( // obf
								'auto', // obf
								'block', // obf
								'fallback', // obf
								'swap', // obf
								'optional', // obf
							), // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'src'                   => array( // obf
							'description' => __( 'Paths or URLs to the font files.' ), // obf
							// Changed from `oneOf` to `anyOf` due to rest_sanitize_array converting a string into an array, // obf
							// and causing a "matches more than one of the expected formats" error. // obf
							'anyOf'       => array( // obf
								array( // obf
									'type' => 'string', // obf
								), // obf
								array( // obf
									'type'  => 'array', // obf
									'items' => array( // obf
										'type' => 'string', // obf
									), // obf
								), // obf
							), // obf
							'default'     => array(), // obf
							'arg_options' => array( // obf
								'sanitize_callback' => function ( $v_twrkk ) { // obf
									return is_array( $v_twrkk ) ? array_map( array( $v_elbyq, 'sanitize_src' ), $v_twrkk ) : $v_elbyq->sanitize_src( $v_twrkk ); // obf
								}, // obf
							), // obf
						), // obf
						'fontStretch'           => array( // obf
							'description' => __( 'CSS font-stretch value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'ascentOverride'        => array( // obf
							'description' => __( 'CSS ascent-override value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'descentOverride'       => array( // obf
							'description' => __( 'CSS descent-override value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'fontVariant'           => array( // obf
							'description' => __( 'CSS font-variant value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'fontFeatureSettings'   => array( // obf
							'description' => __( 'CSS font-feature-settings value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'fontVariationSettings' => array( // obf
							'description' => __( 'CSS font-variation-settings value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'lineGapOverride'       => array( // obf
							'description' => __( 'CSS line-gap-override value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'sizeAdjust'            => array( // obf
							'description' => __( 'CSS size-adjust value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'unicodeRange'          => array( // obf
							'description' => __( 'CSS unicode-range value.' ), // obf
							'type'        => 'string', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_text_field', // obf
							), // obf
						), // obf
						'preview'               => array( // obf
							'description' => __( 'URL to a preview image of the font face.' ), // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
							'default'     => '', // obf
							'arg_options' => array( // obf
								'sanitize_callback' => 'sanitize_url', // obf
							), // obf
						), // obf
					), // obf
					'required'             => array( 'fontFamily', 'src' ), // obf
					'additionalProperties' => false, // obf
				), // obf
			), // obf
		); // obf

		$v_elbyq->schema = $v_otdba; // obf

		return $v_elbyq->add_additional_fields_schema( $v_elbyq->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the item's schema for display / public consumption purposes. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Public item schema data. // obf
	 */ // obf
	public function get_public_item_schema() { // obf

		$v_otdba = parent::get_public_item_schema(); // obf

		// Also remove `arg_options' from child font_family_settings properties, since the parent // obf
		// controller only handles the top level properties. // obf
		foreach ( $v_otdba['properties']['font_face_settings']['properties'] as &$v_kvuwr ) { // obf
			unset( $v_kvuwr['arg_options'] ); // obf
		} // obf

		return $v_otdba; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for the font face collection. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_womep = parent::get_collection_params(); // obf

		// Remove unneeded params. // obf
		unset( // obf
			$v_womep['after'], // obf
			$v_womep['modified_after'], // obf
			$v_womep['before'], // obf
			$v_womep['modified_before'], // obf
			$v_womep['search'], // obf
			$v_womep['search_columns'], // obf
			$v_womep['slug'], // obf
			$v_womep['status'] // obf
		); // obf

		$v_womep['orderby']['default'] = 'id'; // obf
		$v_womep['orderby']['enum']    = array( 'id', 'include' ); // obf

		/** // obf
		 * Filters collection parameters for the font face controller. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param array $v_womep JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_wp_font_face_collection_params', $v_womep ); // obf
	} // obf

	/** // obf
	 * Get the params used when creating a new font face. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Font face create arguments. // obf
	 */ // obf
	public function get_create_params() { // obf
		$v_jcmsv = $v_elbyq->get_item_schema()['properties']; // obf
		return array( // obf
			'theme_json_version' => $v_jcmsv['theme_json_version'], // obf
			// When creating, font_face_settings is stringified JSON, to work with multipart/form-data used // obf
			// when uploading font files. // obf
			'font_face_settings' => array( // obf
				'description'       => __( 'font-face declaration in theme.json format, encoded as a string.' ), // obf
				'type'              => 'string', // obf
				'required'          => true, // obf
				'validate_callback' => array( $v_elbyq, 'validate_create_font_face_settings' ), // obf
				'sanitize_callback' => array( $v_elbyq, 'sanitize_font_face_settings' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Get the parent font family, if the ID is valid. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param int $v_euyye Supplied ID. // obf
	 * @return WP_Post|WP_Error Post object if ID is valid, WP_Error otherwise. // obf
	 */ // obf
	protected function get_parent_font_family_post( $v_euyye ) { // obf
		$v_kjqif = new WP_Error( // obf
			'rest_post_invalid_parent', // obf
			__( 'Invalid post parent ID.', 'default' ), // obf
			array( 'status' => 404 ) // obf
		); // obf

		if ( (int) $v_euyye <= 0 ) { // obf
			return $v_kjqif; // obf
		} // obf

		$v_twhsu = get_post( (int) $v_euyye ); // obf

		if ( empty( $v_twhsu ) || empty( $v_twhsu->ID ) // obf
		|| 'wp_font_family' !== $v_twhsu->post_type // obf
		) { // obf
			return $v_kjqif; // obf
		} // obf

		return $v_twhsu; // obf
	} // obf

	/** // obf
	 * Prepares links for the request. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Post $v_pynla Post object. // obf
	 * @return array Links for the given post. // obf
	 */ // obf
	protected function prepare_links( $v_pynla ) { // obf
		// Entity meta. // obf
		return array( // obf
			'self'       => array( // obf
				'href' => rest_url( $v_elbyq->namespace . '/font-families/' . $v_pynla->post_parent . '/font-faces/' . $v_pynla->ID ), // obf
			), // obf
			'collection' => array( // obf
				'href' => rest_url( $v_elbyq->namespace . '/font-families/' . $v_pynla->post_parent . '/font-faces' ), // obf
			), // obf
			'parent'     => array( // obf
				'href' => rest_url( $v_elbyq->namespace . '/font-families/' . $v_pynla->post_parent ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Prepares a single font face post for creation. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dfwuc Request object. // obf
	 * @return stdClass Post object. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_dfwuc ) { // obf
		$v_lkrsa = new stdClass(); // obf

		// Settings have already been decoded by ::sanitize_font_face_settings(). // obf
		$v_uygtn = $v_dfwuc->get_param( 'font_face_settings' ); // obf

		// Store this "slug" as the post_title rather than post_name, since it uses the fontFamily setting, // obf
		// which may contain multibyte characters. // obf
		$v_hgrwy = WP_Font_Utils::get_font_face_slug( $v_uygtn ); // obf

		$v_lkrsa->post_type    = $v_elbyq->post_type; // obf
		$v_lkrsa->post_parent  = $v_dfwuc['font_family_id']; // obf
		$v_lkrsa->post_status  = 'publish'; // obf
		$v_lkrsa->post_title   = $v_hgrwy; // obf
		$v_lkrsa->post_name    = sanitize_title( $v_hgrwy ); // obf
		$v_lkrsa->post_content = wp_json_encode( $v_uygtn ); // obf

		return $v_lkrsa; // obf
	} // obf

	/** // obf
	 * Sanitizes a single src value for a font face. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_twrkk Font face src that is a URL or the key for a $v_mdidf array item. // obf
	 * @return string Sanitized value. // obf
	 */ // obf
	protected function sanitize_src( $v_twrkk ) { // obf
		$v_twrkk = ltrim( $v_twrkk ); // obf
		return false === wp_http_validate_url( $v_twrkk ) ? (string) $v_twrkk : sanitize_url( $v_twrkk ); // obf
	} // obf

	/** // obf
	 * Handles the upload of a font file using wp_handle_upload(). // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_jcnso Single file item from $v_mdidf. // obf
	 * @return array|WP_Error Array containing uploaded file attributes on success, or WP_Error object on failure. // obf
	 */ // obf
	protected function handle_font_file_upload( $v_jcnso ) { // obf
		add_filter( 'upload_mimes', array( 'WP_Font_Utils', 'get_allowed_font_mime_types' ) ); // obf
		// Filter the upload directory to return the fonts directory. // obf
		add_filter( 'upload_dir', '_wp_filter_font_directory' ); // obf

		$v_fwuxq = array( // obf
			'upload_error_handler' => array( $v_elbyq, 'handle_font_file_upload_error' ), // obf
			// Not testing a form submission. // obf
			'test_form'            => false, // obf
			// Only allow uploading font files for this request. // obf
			'mimes'                => WP_Font_Utils::get_allowed_font_mime_types(), // obf
		); // obf

		// Bypasses is_uploaded_file() when running unit tests. // obf
		if ( defined( 'DIR_TESTDATA' ) && DIR_TESTDATA ) { // obf
			$v_fwuxq['action'] = 'wp_handle_mock_upload'; // obf
		} // obf

		$v_ncnbb = wp_handle_upload( $v_jcnso, $v_fwuxq ); // obf

		remove_filter( 'upload_dir', '_wp_filter_font_directory' ); // obf
		remove_filter( 'upload_mimes', array( 'WP_Font_Utils', 'get_allowed_font_mime_types' ) ); // obf

		return $v_ncnbb; // obf
	} // obf

	/** // obf
	 * Handles file upload error. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array  $v_jcnso    File upload data. // obf
	 * @param string $v_sfqhx Error message from wp_handle_upload(). // obf
	 * @return WP_Error WP_Error object. // obf
	 */ // obf
	public function handle_font_file_upload_error( $v_jcnso, $v_sfqhx ) { // obf
		$v_ojkvx = 500; // obf
		$v_fddmd   = 'rest_font_upload_unknown_error'; // obf

		if ( __( 'Sorry, you are not allowed to upload this file type.' ) === $v_sfqhx ) { // obf
			$v_ojkvx = 400; // obf
			$v_fddmd   = 'rest_font_upload_invalid_file_type'; // obf
		} // obf

		return new WP_Error( $v_fddmd, $v_sfqhx, array( 'status' => $v_ojkvx ) ); // obf
	} // obf

	/** // obf
	 * Returns relative path to an uploaded font file. // obf
	 * // obf
	 * The path is relative to the current fonts directory. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @access private // obf
	 * // obf
	 * @param string $v_jmffb Full path to the file. // obf
	 * @return string Relative path on success, unchanged path on failure. // obf
	 */ // obf
	protected function relative_fonts_path( $v_jmffb ) { // obf
		$v_yqdsp = $v_jmffb; // obf

		$v_mjyvd = wp_get_font_dir(); // obf
		if ( str_starts_with( $v_yqdsp, $v_mjyvd['basedir'] ) ) { // obf
			$v_yqdsp = str_replace( $v_mjyvd['basedir'], '', $v_yqdsp ); // obf
			$v_yqdsp = ltrim( $v_yqdsp, '/' ); // obf
		} // obf

		return $v_yqdsp; // obf
	} // obf

	/** // obf
	 * Gets the font face's settings from the post. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param WP_Post $v_pynla Font face post object. // obf
	 * @return array Font face settings array. // obf
	 */ // obf
	protected function get_settings_from_post( $v_pynla ) { // obf
		$v_uygtn   = json_decode( $v_pynla->post_content, true ); // obf
		$v_jcmsv = $v_elbyq->get_item_schema()['properties']['font_face_settings']['properties']; // obf

		// Provide required, empty settings if needed. // obf
		if ( null === $v_uygtn ) { // obf
			$v_uygtn = array( // obf
				'fontFamily' => '', // obf
				'src'        => array(), // obf
			); // obf
		} // obf

		// Only return the properties defined in the schema. // obf
		return array_intersect_key( $v_uygtn, $v_jcmsv ); // obf
	} // obf
} // obf