
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * REST API: WP_REST_Attachments_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core controller used to access attachments via the REST API. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_REST_Posts_Controller // obf
 */ // obf
class WP_REST_Attachments_Controller extends WP_REST_Posts_Controller { // obf

	/** // obf
	 * Whether the controller supports batching. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var false // obf
	 */ // obf
	protected $v_eznag = false; // obf

	/** // obf
	 * Registers the routes for attachments. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @see register_rest_route() // obf
	 */ // obf
	public function register_routes() { // obf
		parent::register_routes(); // obf
		register_rest_route( // obf
			$v_ovgpe->namespace, // obf
			'/' . $v_ovgpe->rest_base . '/(?P<id>[\d]+)/post-process', // obf
			array( // obf
				'methods'             => WP_REST_Server::CREATABLE, // obf
				'callback'            => array( $v_ovgpe, 'post_process_item' ), // obf
				'permission_callback' => array( $v_ovgpe, 'post_process_item_permissions_check' ), // obf
				'args'                => array( // obf
					'id'     => array( // obf
						'description' => __( 'Unique identifier for the attachment.' ), // obf
						'type'        => 'integer', // obf
					), // obf
					'action' => array( // obf
						'type'     => 'string', // obf
						'enum'     => array( 'create-image-subsizes' ), // obf
						'required' => true, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		register_rest_route( // obf
			$v_ovgpe->namespace, // obf
			'/' . $v_ovgpe->rest_base . '/(?P<id>[\d]+)/edit', // obf
			array( // obf
				'methods'             => WP_REST_Server::CREATABLE, // obf
				'callback'            => array( $v_ovgpe, 'edit_media_item' ), // obf
				'permission_callback' => array( $v_ovgpe, 'edit_media_item_permissions_check' ), // obf
				'args'                => $v_ovgpe->get_edit_media_item_args(), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Determines the allowed query_vars for a get_items() response and // obf
	 * prepares for WP_Query. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array           $v_mylgv Optional. Array of prepared arguments. Default empty array. // obf
	 * @param WP_REST_Request $v_drswo       Optional. Request to prepare items for. // obf
	 * @return array Array of query arguments. // obf
	 */ // obf
	protected function prepare_items_query( $v_mylgv = array(), $v_drswo = null ) { // obf
		$v_svayp = parent::prepare_items_query( $v_mylgv, $v_drswo ); // obf

		if ( empty( $v_svayp['post_status'] ) ) { // obf
			$v_svayp['post_status'] = 'inherit'; // obf
		} // obf

		$v_oevdy = $v_ovgpe->get_media_types(); // obf

		if ( ! empty( $v_drswo['media_type'] ) && isset( $v_oevdy[ $v_drswo['media_type'] ] ) ) { // obf
			$v_svayp['post_mime_type'] = $v_oevdy[ $v_drswo['media_type'] ]; // obf
		} // obf

		if ( ! empty( $v_drswo['mime_type'] ) ) { // obf
			$v_wlhmg = explode( '/', $v_drswo['mime_type'] ); // obf
			if ( isset( $v_oevdy[ $v_wlhmg[0] ] ) && in_array( $v_drswo['mime_type'], $v_oevdy[ $v_wlhmg[0] ], true ) ) { // obf
				$v_svayp['post_mime_type'] = $v_drswo['mime_type']; // obf
			} // obf
		} // obf

		// Filter query clauses to include filenames. // obf
		if ( isset( $v_svayp['s'] ) ) { // obf
			add_filter( 'wp_allow_query_attachment_by_filename', '__return_true' ); // obf
		} // obf

		return $v_svayp; // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to create an attachment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Full details about the request. // obf
	 * @return true|WP_Error Boolean true if the attachment may be created, or a WP_Error if not. // obf
	 */ // obf
	public function create_item_permissions_check( $v_drswo ) { // obf
		$v_mqget = parent::create_item_permissions_check( $v_drswo ); // obf

		if ( ! $v_mqget || is_wp_error( $v_mqget ) ) { // obf
			return $v_mqget; // obf
		} // obf

		if ( ! current_user_can( 'upload_files' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_create', // obf
				__( 'Sorry, you are not allowed to upload media on this site.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Attaching media to a post requires ability to edit said post. // obf
		if ( ! empty( $v_drswo['post'] ) && ! current_user_can( 'edit_post', (int) $v_drswo['post'] ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit', // obf
				__( 'Sorry, you are not allowed to upload media to this post.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf
		$v_ulrgh = $v_drswo->get_file_params(); // obf

		/** // obf
		 * Filter whether the server should prevent uploads for image types it doesn't support. Default true. // obf
		 * // obf
		 * Developers can use this filter to enable uploads of certain image types. By default image types that are not // obf
		 * supported by the server are prevented from being uploaded. // obf
		 * // obf
		 * @since 6.8.0 // obf
		 * // obf
		 * @param bool        $v_iazzd Whether to prevent uploads of unsupported image types. // obf
		 * @param string|null $v_cvdhj  The mime type of the file being uploaded (if available). // obf
		 */ // obf
		$v_cbvzj = apply_filters( 'wp_prevent_unsupported_mime_type_uploads', true, isset( $v_ulrgh['file']['type'] ) ? $v_ulrgh['file']['type'] : null ); // obf

		// If the upload is an image, check if the server can handle the mime type. // obf
		if ( // obf
			$v_cbvzj && // obf
			isset( $v_ulrgh['file']['type'] ) && // obf
			str_starts_with( $v_ulrgh['file']['type'], 'image/' ) // obf
		) { // obf
			// List of non-resizable image formats. // obf
			$v_rnevy = array( // obf
				'image/svg+xml', // obf
			); // obf

			// Check if the image editor supports the type or ignore if it isn't a format resizable by an editor. // obf
			if ( // obf
				! in_array( $v_ulrgh['file']['type'], $v_rnevy, true ) && // obf
				! wp_image_editor_supports( array( 'mime_type' => $v_ulrgh['file']['type'] ) ) // obf
			) { // obf
				return new WP_Error( // obf
					'rest_upload_image_type_not_supported', // obf
					__( 'The web server cannot generate responsive image sizes for this image. Convert it to JPEG or PNG before uploading.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates a single attachment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_item( $v_drswo ) { // obf
		if ( ! empty( $v_drswo['post'] ) && in_array( get_post_type( $v_drswo['post'] ), array( 'revision', 'attachment' ), true ) ) { // obf
			return new WP_Error( // obf
				'rest_invalid_param', // obf
				__( 'Invalid parent type.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_ybson = $v_ovgpe->insert_attachment( $v_drswo ); // obf

		if ( is_wp_error( $v_ybson ) ) { // obf
			return $v_ybson; // obf
		} // obf

		$v_iajxy = $v_ovgpe->get_item_schema(); // obf

		// Extract by name. // obf
		$v_wuoko = $v_ybson['attachment_id']; // obf
		$v_mnkyt          = $v_ybson['file']; // obf

		if ( isset( $v_drswo['alt_text'] ) ) { // obf
			update_post_meta( $v_wuoko, '_wp_attachment_image_alt', sanitize_text_field( $v_drswo['alt_text'] ) ); // obf
		} // obf

		if ( ! empty( $v_iajxy['properties']['featured_media'] ) && isset( $v_drswo['featured_media'] ) ) { // obf
			$v_exuhg = $v_ovgpe->handle_featured_media( $v_drswo['featured_media'], $v_wuoko ); // obf

			if ( is_wp_error( $v_exuhg ) ) { // obf
				return $v_exuhg; // obf
			} // obf
		} // obf

		if ( ! empty( $v_iajxy['properties']['meta'] ) && isset( $v_drswo['meta'] ) ) { // obf
			$v_fslbl = $v_ovgpe->meta->update_value( $v_drswo['meta'], $v_wuoko ); // obf

			if ( is_wp_error( $v_fslbl ) ) { // obf
				return $v_fslbl; // obf
			} // obf
		} // obf

		$v_cgyte    = get_post( $v_wuoko ); // obf
		$v_ghdsp = $v_ovgpe->update_additional_fields_for_object( $v_cgyte, $v_drswo ); // obf

		if ( is_wp_error( $v_ghdsp ) ) { // obf
			return $v_ghdsp; // obf
		} // obf

		$v_emtun = $v_ovgpe->handle_terms( $v_wuoko, $v_drswo ); // obf

		if ( is_wp_error( $v_emtun ) ) { // obf
			return $v_emtun; // obf
		} // obf

		$v_drswo->set_param( 'context', 'edit' ); // obf

		/** // obf
		 * Fires after a single attachment is completely created or updated via the REST API. // obf
		 * // obf
		 * @since 5.0.0 // obf
		 * // obf
		 * @param WP_Post         $v_cgyte Inserted or updated attachment object. // obf
		 * @param WP_REST_Request $v_drswo    Request object. // obf
		 * @param bool            $v_pwsxi   True when creating an attachment, false when updating. // obf
		 */ // obf
		do_action( 'rest_after_insert_attachment', $v_cgyte, $v_drswo, true ); // obf

		wp_after_insert_post( $v_cgyte, false, null ); // obf

		if ( wp_is_serving_rest_request() ) { // obf
			/* // obf
			 * Set a custom header with the attachment_id. // obf
			 * Used by the browser/client to resume creating image sub-sizes after a PHP fatal error. // obf
			 */ // obf
			header( 'X-WP-Upload-Attachment-ID: ' . $v_wuoko ); // obf
		} // obf

		// Include media and image functions to get access to wp_generate_attachment_metadata(). // obf
		require_once ABSPATH . 'wp-admin/includes/media.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/image.php'; // obf

		/* // obf
		 * Post-process the upload (create image sub-sizes, make PDF thumbnails, etc.) and insert attachment meta. // obf
		 * At this point the server may run out of resources and post-processing of uploaded images may fail. // obf
		 */ // obf
		wp_update_attachment_metadata( $v_wuoko, wp_generate_attachment_metadata( $v_wuoko, $v_mnkyt ) ); // obf

		$v_epkzw = $v_ovgpe->prepare_item_for_response( $v_cgyte, $v_drswo ); // obf
		$v_epkzw = rest_ensure_response( $v_epkzw ); // obf
		$v_epkzw->set_status( 201 ); // obf
		$v_epkzw->header( 'Location', rest_url( sprintf( '%s/%s/%d', $v_ovgpe->namespace, $v_ovgpe->rest_base, $v_wuoko ) ) ); // obf

		return $v_epkzw; // obf
	} // obf

	/** // obf
	 * Inserts the attachment post in the database. Does not update the attachment meta. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo // obf
	 * @return array|WP_Error // obf
	 */ // obf
	protected function insert_attachment( $v_drswo ) { // obf
		// Get the file via $v_aauxg or raw data. // obf
		$v_ulrgh   = $v_drswo->get_file_params(); // obf
		$v_qlanr = $v_drswo->get_headers(); // obf

		$v_giaft = null; // obf

		// Matches logic in media_handle_upload(). // obf
		if ( ! empty( $v_drswo['post'] ) ) { // obf
			$v_fzjie = get_post( $v_drswo['post'] ); // obf
			// The post date doesn't usually matter for pages, so don't backdate this upload. // obf
			if ( $v_fzjie && 'page' !== $v_fzjie->post_type && substr( $v_fzjie->post_date, 0, 4 ) > 0 ) { // obf
				$v_giaft = $v_fzjie->post_date; // obf
			} // obf
		} // obf

		if ( ! empty( $v_ulrgh ) ) { // obf
			$v_mnkyt = $v_ovgpe->upload_from_file( $v_ulrgh, $v_qlanr, $v_giaft ); // obf
		} else { // obf
			$v_mnkyt = $v_ovgpe->upload_from_data( $v_drswo->get_body(), $v_qlanr, $v_giaft ); // obf
		} // obf

		if ( is_wp_error( $v_mnkyt ) ) { // obf
			return $v_mnkyt; // obf
		} // obf

		$v_cuurt       = wp_basename( $v_mnkyt['file'] ); // obf
		$v_yuvfd = pathinfo( $v_cuurt ); // obf
		$v_cuurt       = trim( substr( $v_cuurt, 0, -( 1 + strlen( $v_yuvfd['extension'] ) ) ) ); // obf

		$v_teesk  = $v_mnkyt['url']; // obf
		$v_dichl = $v_mnkyt['type']; // obf
		$v_mnkyt = $v_mnkyt['file']; // obf

		// Include image functions to get access to wp_read_image_metadata(). // obf
		require_once ABSPATH . 'wp-admin/includes/image.php'; // obf

		// Use image exif/iptc data for title and caption defaults if possible. // obf
		$v_chmbo = wp_read_image_metadata( $v_mnkyt ); // obf

		if ( ! empty( $v_chmbo ) ) { // obf
			if ( empty( $v_drswo['title'] ) && trim( $v_chmbo['title'] ) && ! is_numeric( sanitize_title( $v_chmbo['title'] ) ) ) { // obf
				$v_drswo['title'] = $v_chmbo['title']; // obf
			} // obf

			if ( empty( $v_drswo['caption'] ) && trim( $v_chmbo['caption'] ) ) { // obf
				$v_drswo['caption'] = $v_chmbo['caption']; // obf
			} // obf
		} // obf

		$v_cgyte = $v_ovgpe->prepare_item_for_database( $v_drswo ); // obf

		$v_cgyte->post_mime_type = $v_dichl; // obf
		$v_cgyte->guid           = $v_teesk; // obf

		// If the title was not set, use the original filename. // obf
		if ( empty( $v_cgyte->post_title ) && ! empty( $v_ulrgh['file']['name'] ) ) { // obf
			// Remove the file extension (after the last `.`) // obf
			$v_epkxv = substr( $v_ulrgh['file']['name'], 0, strrpos( $v_ulrgh['file']['name'], '.' ) ); // obf

			if ( ! empty( $v_epkxv ) ) { // obf
				$v_cgyte->post_title = $v_epkxv; // obf
			} // obf
		} // obf

		// Fall back to the original approach. // obf
		if ( empty( $v_cgyte->post_title ) ) { // obf
			$v_cgyte->post_title = __fn_37772( '/\.[^.]+$/', '', wp_basename( $v_mnkyt ) ); // obf
		} // obf

		// $v_ewvjf is inherited from $v_cgyte['post_parent']. // obf
		$v_zybnd = wp_insert_attachment( wp_slash( (array) $v_cgyte ), $v_mnkyt, 0, true, false ); // obf

		if ( is_wp_error( $v_zybnd ) ) { // obf
			if ( 'db_update_error' === $v_zybnd->get_error_code() ) { // obf
				$v_zybnd->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_zybnd->add_data( array( 'status' => 400 ) ); // obf
			} // obf

			return $v_zybnd; // obf
		} // obf

		$v_cgyte = get_post( $v_zybnd ); // obf

		/** // obf
		 * Fires after a single attachment is created or updated via the REST API. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_Post         $v_cgyte Inserted or updated attachment object. // obf
		 * @param WP_REST_Request $v_drswo    The request sent to the API. // obf
		 * @param bool            $v_pwsxi   True when creating an attachment, false when updating. // obf
		 */ // obf
		do_action( 'rest_insert_attachment', $v_cgyte, $v_drswo, true ); // obf

		return array( // obf
			'attachment_id' => $v_zybnd, // obf
			'file'          => $v_mnkyt, // obf
		); // obf
	} // obf

	/** // obf
	 * Determines the featured media based on a request param. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param int $v_hktvx Featured Media ID. // obf
	 * @param int $v_spqsv        Post ID. // obf
	 * @return bool|WP_Error Whether the post thumbnail was successfully deleted, otherwise WP_Error. // obf
	 */ // obf
	protected function handle_featured_media( $v_hktvx, $v_spqsv ) { // obf
		$v_gluzt         = get_post_type( $v_spqsv ); // obf
		$v_swazb = current_theme_supports( 'post-thumbnails', $v_gluzt ) && post_type_supports( $v_gluzt, 'thumbnail' ); // obf

		// Similar check as in wp_insert_post(). // obf
		if ( ! $v_swazb && get_post_mime_type( $v_spqsv ) ) { // obf
			if ( wp_attachment_is( 'audio', $v_spqsv ) ) { // obf
				$v_swazb = post_type_supports( 'attachment:audio', 'thumbnail' ) || current_theme_supports( 'post-thumbnails', 'attachment:audio' ); // obf
			} elseif ( wp_attachment_is( 'video', $v_spqsv ) ) { // obf
				$v_swazb = post_type_supports( 'attachment:video', 'thumbnail' ) || current_theme_supports( 'post-thumbnails', 'attachment:video' ); // obf
			} // obf
		} // obf

		if ( $v_swazb ) { // obf
			return parent::handle_featured_media( $v_hktvx, $v_spqsv ); // obf
		} // obf

		return new WP_Error( // obf
			'rest_no_featured_media', // obf
			sprintf( // obf
				/* translators: %s: attachment mime type */ // obf
				__( 'This site does not support post thumbnails on attachments with MIME type %s.' ), // obf
				get_post_mime_type( $v_spqsv ) // obf
			), // obf
			array( 'status' => 400 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Updates a single attachment. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure. // obf
	 */ // obf
	public function update_item( $v_drswo ) { // obf
		if ( ! empty( $v_drswo['post'] ) && in_array( get_post_type( $v_drswo['post'] ), array( 'revision', 'attachment' ), true ) ) { // obf
			return new WP_Error( // obf
				'rest_invalid_param', // obf
				__( 'Invalid parent type.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_ojrqk = get_post( $v_drswo['id'] ); // obf
		$v_epkzw          = parent::update_item( $v_drswo ); // obf

		if ( is_wp_error( $v_epkzw ) ) { // obf
			return $v_epkzw; // obf
		} // obf

		$v_epkzw = rest_ensure_response( $v_epkzw ); // obf
		$v_dpmji     = $v_epkzw->get_data(); // obf

		if ( isset( $v_drswo['alt_text'] ) ) { // obf
			update_post_meta( $v_dpmji['id'], '_wp_attachment_image_alt', $v_drswo['alt_text'] ); // obf
		} // obf

		$v_cgyte = get_post( $v_drswo['id'] ); // obf

		if ( ! empty( $v_iajxy['properties']['featured_media'] ) && isset( $v_drswo['featured_media'] ) ) { // obf
			$v_exuhg = $v_ovgpe->handle_featured_media( $v_drswo['featured_media'], $v_cgyte->ID ); // obf

			if ( is_wp_error( $v_exuhg ) ) { // obf
				return $v_exuhg; // obf
			} // obf
		} // obf

		$v_ghdsp = $v_ovgpe->update_additional_fields_for_object( $v_cgyte, $v_drswo ); // obf

		if ( is_wp_error( $v_ghdsp ) ) { // obf
			return $v_ghdsp; // obf
		} // obf

		$v_drswo->set_param( 'context', 'edit' ); // obf

		/** This action is documented in wp-includes/rest-api/endpoints/class-wp-rest-attachments-controller.php */ // obf
		do_action( 'rest_after_insert_attachment', $v_cgyte, $v_drswo, false ); // obf

		wp_after_insert_post( $v_cgyte, true, $v_ojrqk ); // obf

		$v_epkzw = $v_ovgpe->prepare_item_for_response( $v_cgyte, $v_drswo ); // obf
		$v_epkzw = rest_ensure_response( $v_epkzw ); // obf

		return $v_epkzw; // obf
	} // obf

	/** // obf
	 * Performs post-processing on an attachment. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure. // obf
	 */ // obf
	public function post_process_item( $v_drswo ) { // obf
		switch ( $v_drswo['action'] ) { // obf
			case 'create-image-subsizes': // obf
				require_once ABSPATH . 'wp-admin/includes/image.php'; // obf
				wp_update_image_subsizes( $v_drswo['id'] ); // obf
				break; // obf
		} // obf

		$v_drswo['context'] = 'edit'; // obf

		return $v_ovgpe->prepare_item_for_response( get_post( $v_drswo['id'] ), $v_drswo ); // obf
	} // obf

	/** // obf
	 * Checks if a given request can perform post-processing on an attachment. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Full details about the request. // obf
	 * @return true|WP_Error True if the request has access to update the item, WP_Error object otherwise. // obf
	 */ // obf
	public function post_process_item_permissions_check( $v_drswo ) { // obf
		return $v_ovgpe->update_item_permissions_check( $v_drswo ); // obf
	} // obf

	/** // obf
	 * Checks if a given request has access to editing media. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Full details about the request. // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function edit_media_item_permissions_check( $v_drswo ) { // obf
		if ( ! current_user_can( 'upload_files' ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit_image', // obf
				__( 'Sorry, you are not allowed to upload media on this site.' ), // obf
				array( 'status' => rest_authorization_required_code() ) // obf
			); // obf
		} // obf

		return $v_ovgpe->update_item_permissions_check( $v_drswo ); // obf
	} // obf

	/** // obf
	 * Applies edits to a media item and creates a new attachment record. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, WP_Error object on failure. // obf
	 */ // obf
	public function edit_media_item( $v_drswo ) { // obf
		require_once ABSPATH . 'wp-admin/includes/image.php'; // obf

		$v_wuoko = $v_drswo['id']; // obf

		// This also confirms the attachment is an image. // obf
		$v_qrpxd = wp_get_original_image_path( $v_wuoko ); // obf
		$v_chmbo = wp_get_attachment_metadata( $v_wuoko ); // obf

		if ( // obf
			! $v_chmbo || // obf
			! $v_qrpxd || // obf
			! wp_image_file_matches_image_meta( $v_drswo['src'], $v_chmbo, $v_wuoko ) // obf
		) { // obf
			return new WP_Error( // obf
				'rest_unknown_attachment', // obf
				__( 'Unable to get meta information for file.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_bvsdv = array( 'image/jpeg', 'image/png', 'image/gif', 'image/webp', 'image/avif', 'image/heic' ); // obf
		$v_cvdhj       = get_post_mime_type( $v_wuoko ); // obf
		if ( ! in_array( $v_cvdhj, $v_bvsdv, true ) ) { // obf
			return new WP_Error( // obf
				'rest_cannot_edit_file_type', // obf
				__( 'This type of file cannot be edited.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// The `modifiers` param takes precedence over the older format. // obf
		if ( isset( $v_drswo['modifiers'] ) ) { // obf
			$v_cbojc = $v_drswo['modifiers']; // obf
		} else { // obf
			$v_cbojc = array(); // obf

			if ( ! empty( $v_drswo['rotation'] ) ) { // obf
				$v_cbojc[] = array( // obf
					'type' => 'rotate', // obf
					'args' => array( // obf
						'angle' => $v_drswo['rotation'], // obf
					), // obf
				); // obf
			} // obf

			if ( isset( $v_drswo['x'], $v_drswo['y'], $v_drswo['width'], $v_drswo['height'] ) ) { // obf
				$v_cbojc[] = array( // obf
					'type' => 'crop', // obf
					'args' => array( // obf
						'left'   => $v_drswo['x'], // obf
						'top'    => $v_drswo['y'], // obf
						'width'  => $v_drswo['width'], // obf
						'height' => $v_drswo['height'], // obf
					), // obf
				); // obf
			} // obf

			if ( 0 === count( $v_cbojc ) ) { // obf
				return new WP_Error( // obf
					'rest_image_not_edited', // obf
					__( 'The image was not edited. Edit the image before applying the changes.' ), // obf
					array( 'status' => 400 ) // obf
				); // obf
			} // obf
		} // obf

		/* // obf
		 * If the file doesn't exist, attempt a URL fopen on the src link. // obf
		 * This can occur with certain file replication plugins. // obf
		 * Keep the original file path to get a modified name later. // obf
		 */ // obf
		$v_hcbww = $v_qrpxd; // obf
		if ( ! file_exists( $v_hcbww ) ) { // obf
			$v_hcbww = _load_image_to_edit_path( $v_wuoko ); // obf
		} // obf

		$v_bkaul = wp_get_image_editor( $v_hcbww ); // obf

		if ( is_wp_error( $v_bkaul ) ) { // obf
			return new WP_Error( // obf
				'rest_unknown_image_file_type', // obf
				__( 'Unable to edit this image.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		foreach ( $v_cbojc as $v_vldwy ) { // obf
			$v_myvqp = $v_vldwy['args']; // obf
			switch ( $v_vldwy['type'] ) { // obf
				case 'rotate': // obf
					// Rotation direction: clockwise vs. counterclockwise. // obf
					$v_ccpek = 0 - $v_myvqp['angle']; // obf

					if ( 0 !== $v_ccpek ) { // obf
						$v_mutsq = $v_bkaul->rotate( $v_ccpek ); // obf

						if ( is_wp_error( $v_mutsq ) ) { // obf
							return new WP_Error( // obf
								'rest_image_rotation_failed', // obf
								__( 'Unable to rotate this image.' ), // obf
								array( 'status' => 500 ) // obf
							); // obf
						} // obf
					} // obf

					break; // obf

				case 'crop': // obf
					$v_jwbpq = $v_bkaul->get_size(); // obf

					$v_denyp = (int) round( ( $v_jwbpq['width'] * $v_myvqp['left'] ) / 100.0 ); // obf
					$v_crblk = (int) round( ( $v_jwbpq['height'] * $v_myvqp['top'] ) / 100.0 ); // obf
					$v_mdvoc  = (int) round( ( $v_jwbpq['width'] * $v_myvqp['width'] ) / 100.0 ); // obf
					$v_ifnsf = (int) round( ( $v_jwbpq['height'] * $v_myvqp['height'] ) / 100.0 ); // obf

					if ( $v_jwbpq['width'] !== $v_mdvoc || $v_jwbpq['height'] !== $v_ifnsf ) { // obf
						$v_mutsq = $v_bkaul->crop( $v_denyp, $v_crblk, $v_mdvoc, $v_ifnsf ); // obf

						if ( is_wp_error( $v_mutsq ) ) { // obf
							return new WP_Error( // obf
								'rest_image_crop_failed', // obf
								__( 'Unable to crop this image.' ), // obf
								array( 'status' => 500 ) // obf
							); // obf
						} // obf
					} // obf

					break; // obf

			} // obf
		} // obf

		// Calculate the file name. // obf
		$v_cevoy  = pathinfo( $v_qrpxd, PATHINFO_EXTENSION ); // obf
		$v_xguoy = wp_basename( $v_qrpxd, ".{$v_cevoy}" ); // obf

		/* // obf
		 * Do not append multiple `-edited` to the file name. // obf
		 * The user may be editing a previously edited image. // obf
		 */ // obf
		if ( preg_match( '/-edited(-\d+)?$/', $v_xguoy ) ) { // obf
			// Remove any `-1`, `-2`, etc. `wp_unique_filename()` will add the proper number. // obf
			$v_xguoy = __fn_37772( '/-edited(-\d+)?$/', '-edited', $v_xguoy ); // obf
		} else { // obf
			// Append `-edited` before the extension. // obf
			$v_xguoy .= '-edited'; // obf
		} // obf

		$v_kfdrx = "{$v_xguoy}.{$v_cevoy}"; // obf

		// Create the uploads subdirectory if needed. // obf
		$v_dvwds = wp_upload_dir(); // obf

		// Make the file name unique in the (new) upload directory. // obf
		$v_kfdrx = wp_unique_filename( $v_dvwds['path'], $v_kfdrx ); // obf

		// Save to disk. // obf
		$v_pxqiz = $v_bkaul->save( $v_dvwds['path'] . "/$v_kfdrx" ); // obf

		if ( is_wp_error( $v_pxqiz ) ) { // obf
			return $v_pxqiz; // obf
		} // obf

		// Create new attachment post. // obf
		$v_rocth = array( // obf
			'post_mime_type' => $v_pxqiz['mime-type'], // obf
			'guid'           => $v_dvwds['url'] . "/$v_kfdrx", // obf
			'post_title'     => $v_xguoy, // obf
			'post_content'   => '', // obf
		); // obf

		// Copy post_content, post_excerpt, and post_title from the edited image's attachment post. // obf
		$v_nxodm = get_post( $v_wuoko ); // obf

		if ( $v_nxodm ) { // obf
			$v_rocth['post_content'] = $v_nxodm->post_content; // obf
			$v_rocth['post_excerpt'] = $v_nxodm->post_excerpt; // obf
			$v_rocth['post_title']   = $v_nxodm->post_title; // obf
		} // obf

		$v_blckk = wp_insert_attachment( wp_slash( $v_rocth ), $v_pxqiz['path'], 0, true ); // obf

		if ( is_wp_error( $v_blckk ) ) { // obf
			if ( 'db_update_error' === $v_blckk->get_error_code() ) { // obf
				$v_blckk->add_data( array( 'status' => 500 ) ); // obf
			} else { // obf
				$v_blckk->add_data( array( 'status' => 400 ) ); // obf
			} // obf

			return $v_blckk; // obf
		} // obf

		// Copy the image alt text from the edited image. // obf
		$v_oonub = get_post_meta( $v_wuoko, '_wp_attachment_image_alt', true ); // obf

		if ( ! empty( $v_oonub ) ) { // obf
			// update_post_meta() expects slashed. // obf
			update_post_meta( $v_blckk, '_wp_attachment_image_alt', wp_slash( $v_oonub ) ); // obf
		} // obf

		if ( wp_is_serving_rest_request() ) { // obf
			/* // obf
			 * Set a custom header with the attachment_id. // obf
			 * Used by the browser/client to resume creating image sub-sizes after a PHP fatal error. // obf
			 */ // obf
			header( 'X-WP-Upload-Attachment-ID: ' . $v_blckk ); // obf
		} // obf

		// Generate image sub-sizes and meta. // obf
		$v_kbzrm = wp_generate_attachment_metadata( $v_blckk, $v_pxqiz['path'] ); // obf

		// Copy the EXIF metadata from the original attachment if not generated for the edited image. // obf
		if ( isset( $v_chmbo['image_meta'] ) && isset( $v_kbzrm['image_meta'] ) && is_array( $v_kbzrm['image_meta'] ) ) { // obf
			// Merge but skip empty values. // obf
			foreach ( (array) $v_chmbo['image_meta'] as $v_sudsy => $v_lozoc ) { // obf
				if ( empty( $v_kbzrm['image_meta'][ $v_sudsy ] ) && ! empty( $v_lozoc ) ) { // obf
					$v_kbzrm['image_meta'][ $v_sudsy ] = $v_lozoc; // obf
				} // obf
			} // obf
		} // obf

		// Reset orientation. At this point the image is edited and orientation is correct. // obf
		if ( ! empty( $v_kbzrm['image_meta']['orientation'] ) ) { // obf
			$v_kbzrm['image_meta']['orientation'] = 1; // obf
		} // obf

		// The attachment_id may change if the site is exported and imported. // obf
		$v_kbzrm['parent_image'] = array( // obf
			'attachment_id' => $v_wuoko, // obf
			// Path to the originally uploaded image file relative to the uploads directory. // obf
			'file'          => _wp_relative_upload_path( $v_qrpxd ), // obf
		); // obf

		/** // obf
		 * Filters the meta data for the new image created by editing an existing image. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array $v_kbzrm    Meta data for the new image. // obf
		 * @param int   $v_blckk Attachment post ID for the new image. // obf
		 * @param int   $v_wuoko     Attachment post ID for the edited (parent) image. // obf
		 */ // obf
		$v_kbzrm = apply_filters( 'wp_edited_image_metadata', $v_kbzrm, $v_blckk, $v_wuoko ); // obf

		wp_update_attachment_metadata( $v_blckk, $v_kbzrm ); // obf

		$v_epkzw = $v_ovgpe->prepare_item_for_response( get_post( $v_blckk ), $v_drswo ); // obf
		$v_epkzw->set_status( 201 ); // obf
		$v_epkzw->header( 'Location', rest_url( sprintf( '%s/%s/%s', $v_ovgpe->namespace, $v_ovgpe->rest_base, $v_blckk ) ) ); // obf

		return $v_epkzw; // obf
	} // obf

	/** // obf
	 * Prepares a single attachment for create or update. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_drswo Request object. // obf
	 * @return stdClass|WP_Error Post object. // obf
	 */ // obf
	protected function prepare_item_for_database( $v_drswo ) { // obf
		$v_mondt = parent::prepare_item_for_database( $v_drswo ); // obf

		// Attachment caption (post_excerpt internally). // obf
		if ( isset( $v_drswo['caption'] ) ) { // obf
			if ( is_string( $v_drswo['caption'] ) ) { // obf
				$v_mondt->post_excerpt = $v_drswo['caption']; // obf
			} elseif ( isset( $v_drswo['caption']['raw'] ) ) { // obf
				$v_mondt->post_excerpt = $v_drswo['caption']['raw']; // obf
			} // obf
		} // obf

		// Attachment description (post_content internally). // obf
		if ( isset( $v_drswo['description'] ) ) { // obf
			if ( is_string( $v_drswo['description'] ) ) { // obf
				$v_mondt->post_content = $v_drswo['description']; // obf
			} elseif ( isset( $v_drswo['description']['raw'] ) ) { // obf
				$v_mondt->post_content = $v_drswo['description']['raw']; // obf
			} // obf
		} // obf

		if ( isset( $v_drswo['post'] ) ) { // obf
			$v_mondt->post_parent = (int) $v_drswo['post']; // obf
		} // obf

		return $v_mondt; // obf
	} // obf

	/** // obf
	 * Prepares a single attachment output for response. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 5.9.0 Renamed `$v_fzjie` to `$v_vfhip` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param WP_Post         $v_vfhip    Attachment object. // obf
	 * @param WP_REST_Request $v_drswo Request object. // obf
	 * @return WP_REST_Response Response object. // obf
	 */ // obf
	public function prepare_item_for_response( $v_vfhip, $v_drswo ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_fzjie = $v_vfhip; // obf

		$v_epkzw = parent::prepare_item_for_response( $v_fzjie, $v_drswo ); // obf
		$v_evxdx   = $v_ovgpe->get_fields_for_response( $v_drswo ); // obf
		$v_dpmji     = $v_epkzw->get_data(); // obf

		if ( in_array( 'description', $v_evxdx, true ) ) { // obf
			$v_dpmji['description'] = array( // obf
				'raw'      => $v_fzjie->post_content, // obf
				/** This filter is documented in wp-includes/post-template.php */ // obf
				'rendered' => apply_filters( 'the_content', $v_fzjie->post_content ), // obf
			); // obf
		} // obf

		if ( in_array( 'caption', $v_evxdx, true ) ) { // obf
			/** This filter is documented in wp-includes/post-template.php */ // obf
			$v_sqwtz = apply_filters( 'get_the_excerpt', $v_fzjie->post_excerpt, $v_fzjie ); // obf

			/** This filter is documented in wp-includes/post-template.php */ // obf
			$v_sqwtz = apply_filters( 'the_excerpt', $v_sqwtz ); // obf

			$v_dpmji['caption'] = array( // obf
				'raw'      => $v_fzjie->post_excerpt, // obf
				'rendered' => $v_sqwtz, // obf
			); // obf
		} // obf

		if ( in_array( 'alt_text', $v_evxdx, true ) ) { // obf
			$v_dpmji['alt_text'] = get_post_meta( $v_fzjie->ID, '_wp_attachment_image_alt', true ); // obf
		} // obf

		if ( in_array( 'media_type', $v_evxdx, true ) ) { // obf
			$v_dpmji['media_type'] = wp_attachment_is_image( $v_fzjie->ID ) ? 'image' : 'file'; // obf
		} // obf

		if ( in_array( 'mime_type', $v_evxdx, true ) ) { // obf
			$v_dpmji['mime_type'] = $v_fzjie->post_mime_type; // obf
		} // obf

		if ( in_array( 'media_details', $v_evxdx, true ) ) { // obf
			$v_dpmji['media_details'] = wp_get_attachment_metadata( $v_fzjie->ID ); // obf

			// Ensure empty details is an empty object. // obf
			if ( empty( $v_dpmji['media_details'] ) ) { // obf
				$v_dpmji['media_details'] = new stdClass(); // obf
			} elseif ( ! empty( $v_dpmji['media_details']['sizes'] ) ) { // obf

				foreach ( $v_dpmji['media_details']['sizes'] as $v_jwbpq => &$v_kboih ) { // obf

					if ( isset( $v_kboih['mime-type'] ) ) { // obf
						$v_kboih['mime_type'] = $v_kboih['mime-type']; // obf
						unset( $v_kboih['mime-type'] ); // obf
					} // obf

					// Use the same method image_downsize() does. // obf
					$v_crtab = wp_get_attachment_image_src( $v_fzjie->ID, $v_jwbpq ); // obf
					if ( ! $v_crtab ) { // obf
						continue; // obf
					} // obf

					$v_kboih['source_url'] = $v_crtab[0]; // obf
				} // obf

				$v_ddrkb = wp_get_attachment_image_src( $v_fzjie->ID, 'full' ); // obf

				if ( ! empty( $v_ddrkb ) ) { // obf
					$v_dpmji['media_details']['sizes']['full'] = array( // obf
						'file'       => wp_basename( $v_ddrkb[0] ), // obf
						'width'      => $v_ddrkb[1], // obf
						'height'     => $v_ddrkb[2], // obf
						'mime_type'  => $v_fzjie->post_mime_type, // obf
						'source_url' => $v_ddrkb[0], // obf
					); // obf
				} // obf
			} else { // obf
				$v_dpmji['media_details']['sizes'] = new stdClass(); // obf
			} // obf
		} // obf

		if ( in_array( 'post', $v_evxdx, true ) ) { // obf
			$v_dpmji['post'] = ! empty( $v_fzjie->post_parent ) ? (int) $v_fzjie->post_parent : null; // obf
		} // obf

		if ( in_array( 'source_url', $v_evxdx, true ) ) { // obf
			$v_dpmji['source_url'] = wp_get_attachment_url( $v_fzjie->ID ); // obf
		} // obf

		if ( in_array( 'missing_image_sizes', $v_evxdx, true ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/image.php'; // obf
			$v_dpmji['missing_image_sizes'] = array_keys( wp_get_missing_image_subsizes( $v_fzjie->ID ) ); // obf
		} // obf

		$v_rjbee = ! empty( $v_drswo['context'] ) ? $v_drswo['context'] : 'view'; // obf

		$v_dpmji = $v_ovgpe->filter_response_by_context( $v_dpmji, $v_rjbee ); // obf

		$v_skhmx = $v_epkzw->get_links(); // obf

		// Wrap the data in a response object. // obf
		$v_epkzw = rest_ensure_response( $v_dpmji ); // obf

		foreach ( $v_skhmx as $v_hqmab => $v_cmdqv ) { // obf
			foreach ( $v_cmdqv as $v_hxkxp ) { // obf
				$v_epkzw->add_link( $v_hqmab, $v_hxkxp['href'], $v_hxkxp['attributes'] ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters an attachment returned from the REST API. // obf
		 * // obf
		 * Allows modification of the attachment right before it is returned. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_epkzw The response object. // obf
		 * @param WP_Post          $v_fzjie     The original attachment post. // obf
		 * @param WP_REST_Request  $v_drswo  Request used to generate the response. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_attachment', $v_epkzw, $v_fzjie, $v_drswo ); // obf
	} // obf

	/** // obf
	 * Retrieves the attachment's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Item schema as an array. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_ovgpe->schema ) { // obf
			return $v_ovgpe->add_additional_fields_schema( $v_ovgpe->schema ); // obf
		} // obf

		$v_iajxy = parent::get_item_schema(); // obf

		$v_iajxy['properties']['alt_text'] = array( // obf
			'description' => __( 'Alternative text to display when attachment is not displayed.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => 'sanitize_text_field', // obf
			), // obf
		); // obf

		$v_iajxy['properties']['caption'] = array( // obf
			'description' => __( 'The attachment caption.' ), // obf
			'type'        => 'object', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => null, // Note: sanitization implemented in self::prepare_item_for_database(). // obf
				'validate_callback' => null, // Note: validation implemented in self::prepare_item_for_database(). // obf
			), // obf
			'properties'  => array( // obf
				'raw'      => array( // obf
					'description' => __( 'Caption for the attachment, as it exists in the database.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
				), // obf
				'rendered' => array( // obf
					'description' => __( 'HTML caption for the attachment, transformed for display.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		$v_iajxy['properties']['description'] = array( // obf
			'description' => __( 'The attachment description.' ), // obf
			'type'        => 'object', // obf
			'context'     => array( 'view', 'edit' ), // obf
			'arg_options' => array( // obf
				'sanitize_callback' => null, // Note: sanitization implemented in self::prepare_item_for_database(). // obf
				'validate_callback' => null, // Note: validation implemented in self::prepare_item_for_database(). // obf
			), // obf
			'properties'  => array( // obf
				'raw'      => array( // obf
					'description' => __( 'Description for the attachment, as it exists in the database.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'edit' ), // obf
				), // obf
				'rendered' => array( // obf
					'description' => __( 'HTML description for the attachment, transformed for display.' ), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		$v_iajxy['properties']['media_type'] = array( // obf
			'description' => __( 'Attachment type.' ), // obf
			'type'        => 'string', // obf
			'enum'        => array( 'image', 'file' ), // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_iajxy['properties']['mime_type'] = array( // obf
			'description' => __( 'The attachment MIME type.' ), // obf
			'type'        => 'string', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_iajxy['properties']['media_details'] = array( // obf
			'description' => __( 'Details about the media file, specific to its type.' ), // obf
			'type'        => 'object', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_iajxy['properties']['post'] = array( // obf
			'description' => __( 'The ID for the associated post of the attachment.' ), // obf
			'type'        => 'integer', // obf
			'context'     => array( 'view', 'edit' ), // obf
		); // obf

		$v_iajxy['properties']['source_url'] = array( // obf
			'description' => __( 'URL to the original attachment file.' ), // obf
			'type'        => 'string', // obf
			'format'      => 'uri', // obf
			'context'     => array( 'view', 'edit', 'embed' ), // obf
			'readonly'    => true, // obf
		); // obf

		$v_iajxy['properties']['missing_image_sizes'] = array( // obf
			'description' => __( 'List of the missing image sizes of the attachment.' ), // obf
			'type'        => 'array', // obf
			'items'       => array( 'type' => 'string' ), // obf
			'context'     => array( 'edit' ), // obf
			'readonly'    => true, // obf
		); // obf

		unset( $v_iajxy['properties']['password'] ); // obf

		$v_ovgpe->schema = $v_iajxy; // obf

		return $v_ovgpe->add_additional_fields_schema( $v_ovgpe->schema ); // obf
	} // obf

	/** // obf
	 * Handles an upload via raw POST data. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.6.0 Added the `$v_giaft` parameter. // obf
	 * // obf
	 * @param string      $v_dpmji    Supplied file data. // obf
	 * @param array       $v_qlanr HTTP headers from the request. // obf
	 * @param string|null $v_giaft    Optional. Time formatted in 'yyyy/mm'. Default null. // obf
	 * @return array|WP_Error Data from wp_handle_sideload(). // obf
	 */ // obf
	protected function upload_from_data( $v_dpmji, $v_qlanr, $v_giaft = null ) { // obf
		if ( empty( $v_dpmji ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_no_data', // obf
				__( 'No data supplied.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( empty( $v_qlanr['content_type'] ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_no_content_type', // obf
				__( 'No Content-Type supplied.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( empty( $v_qlanr['content_disposition'] ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_no_content_disposition', // obf
				__( 'No Content-Disposition supplied.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		$v_kfdrx = self::get_filename_from_disposition( $v_qlanr['content_disposition'] ); // obf

		if ( empty( $v_kfdrx ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_invalid_disposition', // obf
				__( 'Invalid Content-Disposition supplied. Content-Disposition needs to be formatted as `attachment; filename="image.png"` or similar.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_qlanr['content_md5'] ) ) { // obf
			$v_pwxgu = array_shift( $v_qlanr['content_md5'] ); // obf
			$v_fwzja    = trim( $v_pwxgu ); // obf
			$v_rxcgg      = md5( $v_dpmji ); // obf

			if ( $v_fwzja !== $v_rxcgg ) { // obf
				return new WP_Error( // obf
					'rest_upload_hash_mismatch', // obf
					__( 'Content hash did not match expected.' ), // obf
					array( 'status' => 412 ) // obf
				); // obf
			} // obf
		} // obf

		// Get the content-type. // obf
		$v_dichl = array_shift( $v_qlanr['content_type'] ); // obf

		// Include filesystem functions to get access to wp_tempnam() and wp_handle_sideload(). // obf
		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf

		// Save the file. // obf
		$v_edash = wp_tempnam( $v_kfdrx ); // obf

		$v_dqcmi = fopen( $v_edash, 'w+' ); // obf

		if ( ! $v_dqcmi ) { // obf
			return new WP_Error( // obf
				'rest_upload_file_error', // obf
				__( 'Could not open file handle.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		fwrite( $v_dqcmi, $v_dpmji ); // obf
		fclose( $v_dqcmi ); // obf

		// Now, sideload it in. // obf
		$v_qvlnn = array( // obf
			'error'    => null, // obf
			'tmp_name' => $v_edash, // obf
			'name'     => $v_kfdrx, // obf
			'type'     => $v_dichl, // obf
		); // obf

		$v_bsuol = self::check_upload_size( $v_qvlnn ); // obf
		if ( is_wp_error( $v_bsuol ) ) { // obf
			return $v_bsuol; // obf
		} // obf

		$v_ilifr = array( // obf
			'test_form' => false, // obf
		); // obf

		$v_gvucr = wp_handle_sideload( $v_qvlnn, $v_ilifr, $v_giaft ); // obf

		if ( isset( $v_gvucr['error'] ) ) { // obf
			@unlink( $v_edash ); // obf

			return new WP_Error( // obf
				'rest_upload_sideload_error', // obf
				$v_gvucr['error'], // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		return $v_gvucr; // obf
	} // obf

	/** // obf
	 * Parses filename from a Content-Disposition header value. // obf
	 * // obf
	 * As per RFC6266: // obf
	 * // obf
	 *     content-disposition = "Content-Disposition" ":" // obf
	 *                            disposition-type *( ";" disposition-parm ) // obf
	 * // obf
	 *     disposition-type    = "inline" | "attachment" | disp-ext-type // obf
	 *                         ; case-insensitive // obf
	 *     disp-ext-type       = token // obf
	 * // obf
	 *     disposition-parm    = filename-parm | disp-ext-parm // obf
	 * // obf
	 *     filename-parm       = "filename" "=" value // obf
	 *                         | "filename*" "=" ext-value // obf
	 * // obf
	 *     disp-ext-parm       = token "=" value // obf
	 *                         | ext-token "=" ext-value // obf
	 *     ext-token           = <the characters in token, followed by "*"> // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc2388 // obf
	 * @link https://tools.ietf.org/html/rfc6266 // obf
	 * // obf
	 * @param string[] $v_heoxv List of Content-Disposition header values. // obf
	 * @return string|null Filename if available, or null if not found. // obf
	 */ // obf
	public static function get_filename_from_disposition( $v_heoxv ) { // obf
		// Get the filename. // obf
		$v_kfdrx = null; // obf

		foreach ( $v_heoxv as $v_lozoc ) { // obf
			$v_lozoc = trim( $v_lozoc ); // obf

			if ( ! str_contains( $v_lozoc, ';' ) ) { // obf
				continue; // obf
			} // obf

			list( , $v_cjccq ) = explode( ';', $v_lozoc, 2 ); // obf

			$v_cjccq = explode( ';', $v_cjccq ); // obf
			$v_ajtxv = array(); // obf

			foreach ( $v_cjccq as $v_kcohh ) { // obf
				if ( ! str_contains( $v_kcohh, '=' ) ) { // obf
					continue; // obf
				} // obf

				list( $v_sudsy, $v_lozoc ) = explode( '=', $v_kcohh, 2 ); // obf

				$v_ajtxv[ trim( $v_sudsy ) ] = trim( $v_lozoc ); // obf
			} // obf

			if ( empty( $v_ajtxv['filename'] ) ) { // obf
				continue; // obf
			} // obf

			$v_kfdrx = trim( $v_ajtxv['filename'] ); // obf

			// Unquote quoted filename, but after trimming. // obf
			if ( str_starts_with( $v_kfdrx, '"' ) && str_ends_with( $v_kfdrx, '"' ) ) { // obf
				$v_kfdrx = substr( $v_kfdrx, 1, -1 ); // obf
			} // obf
		} // obf

		return $v_kfdrx; // obf
	} // obf

	/** // obf
	 * Retrieves the query params for collections of attachments. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Query parameters for the attachment collection as an array. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_sxcby                            = parent::get_collection_params(); // obf
		$v_sxcby['status']['default']       = 'inherit'; // obf
		$v_sxcby['status']['items']['enum'] = array( 'inherit', 'private', 'trash' ); // obf
		$v_oevdy                       = $v_ovgpe->get_media_types(); // obf

		$v_sxcby['media_type'] = array( // obf
			'default'     => null, // obf
			'description' => __( 'Limit result set to attachments of a particular media type.' ), // obf
			'type'        => 'string', // obf
			'enum'        => array_keys( $v_oevdy ), // obf
		); // obf

		$v_sxcby['mime_type'] = array( // obf
			'default'     => null, // obf
			'description' => __( 'Limit result set to attachments of a particular MIME type.' ), // obf
			'type'        => 'string', // obf
		); // obf

		return $v_sxcby; // obf
	} // obf

	/** // obf
	 * Handles an upload via multipart/form-data ($v_aauxg). // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 6.6.0 Added the `$v_giaft` parameter. // obf
	 * // obf
	 * @param array       $v_ulrgh   Data from the `$v_aauxg` superglobal. // obf
	 * @param array       $v_qlanr HTTP headers from the request. // obf
	 * @param string|null $v_giaft    Optional. Time formatted in 'yyyy/mm'. Default null. // obf
	 * @return array|WP_Error Data from wp_handle_upload(). // obf
	 */ // obf
	protected function upload_from_file( $v_ulrgh, $v_qlanr, $v_giaft = null ) { // obf
		if ( empty( $v_ulrgh ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_no_data', // obf
				__( 'No data supplied.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Verify hash, if given. // obf
		if ( ! empty( $v_qlanr['content_md5'] ) ) { // obf
			$v_pwxgu = array_shift( $v_qlanr['content_md5'] ); // obf
			$v_fwzja    = trim( $v_pwxgu ); // obf
			$v_rxcgg      = md5_file( $v_ulrgh['file']['tmp_name'] ); // obf

			if ( $v_fwzja !== $v_rxcgg ) { // obf
				return new WP_Error( // obf
					'rest_upload_hash_mismatch', // obf
					__( 'Content hash did not match expected.' ), // obf
					array( 'status' => 412 ) // obf
				); // obf
			} // obf
		} // obf

		// Pass off to WP to handle the actual upload. // obf
		$v_ilifr = array( // obf
			'test_form' => false, // obf
		); // obf

		// Bypasses is_uploaded_file() when running unit tests. // obf
		if ( defined( 'DIR_TESTDATA' ) && DIR_TESTDATA ) { // obf
			$v_ilifr['action'] = 'wp_handle_mock_upload'; // obf
		} // obf

		$v_bsuol = self::check_upload_size( $v_ulrgh['file'] ); // obf
		if ( is_wp_error( $v_bsuol ) ) { // obf
			return $v_bsuol; // obf
		} // obf

		// Include filesystem functions to get access to wp_handle_upload(). // obf
		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf

		$v_mnkyt = wp_handle_upload( $v_ulrgh['file'], $v_ilifr, $v_giaft ); // obf

		if ( isset( $v_mnkyt['error'] ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_unknown_error', // obf
				$v_mnkyt['error'], // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		return $v_mnkyt; // obf
	} // obf

	/** // obf
	 * Retrieves the supported media types. // obf
	 * // obf
	 * Media types are considered the MIME type category. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Array of supported media types. // obf
	 */ // obf
	protected function get_media_types() { // obf
		$v_oevdy = array(); // obf

		foreach ( get_allowed_mime_types() as $v_cvdhj ) { // obf
			$v_wlhmg = explode( '/', $v_cvdhj ); // obf

			if ( ! isset( $v_oevdy[ $v_wlhmg[0] ] ) ) { // obf
				$v_oevdy[ $v_wlhmg[0] ] = array(); // obf
			} // obf

			$v_oevdy[ $v_wlhmg[0] ][] = $v_cvdhj; // obf
		} // obf

		return $v_oevdy; // obf
	} // obf

	/** // obf
	 * Determine if uploaded file exceeds space quota on multisite. // obf
	 * // obf
	 * Replicates check_upload_size(). // obf
	 * // obf
	 * @since 4.9.8 // obf
	 * // obf
	 * @param array $v_mnkyt $v_aauxg array for a given file. // obf
	 * @return true|WP_Error True if can upload, error for errors. // obf
	 */ // obf
	protected function check_upload_size( $v_mnkyt ) { // obf
		if ( ! is_multisite() ) { // obf
			return true; // obf
		} // obf

		if ( get_site_option( 'upload_space_check_disabled' ) ) { // obf
			return true; // obf
		} // obf

		$v_drfjm = get_upload_space_available(); // obf

		$v_gqwpe = filesize( $v_mnkyt['tmp_name'] ); // obf

		if ( $v_drfjm < $v_gqwpe ) { // obf
			return new WP_Error( // obf
				'rest_upload_limited_space', // obf
				/* translators: %s: Required disk space in kilobytes. */ // obf
				sprintf( __( 'Not enough space to upload. %s KB needed.' ), number_format( ( $v_gqwpe - $v_drfjm ) / KB_IN_BYTES ) ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		if ( $v_gqwpe > ( KB_IN_BYTES * get_site_option( 'fileupload_maxk', 1500 ) ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_file_too_big', // obf
				/* translators: %s: Maximum allowed file size in kilobytes. */ // obf
				sprintf( __( 'This file is too big. Files must be less than %s KB in size.' ), get_site_option( 'fileupload_maxk', 1500 ) ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		// Include multisite admin functions to get access to upload_is_user_over_quota(). // obf
		require_once ABSPATH . 'wp-admin/includes/ms.php'; // obf

		if ( upload_is_user_over_quota( false ) ) { // obf
			return new WP_Error( // obf
				'rest_upload_user_quota_exceeded', // obf
				__( 'You have used your space quota. Please delete files before uploading.' ), // obf
				array( 'status' => 400 ) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the request args for the edit item route. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	protected function get_edit_media_item_args() { // obf
		return array( // obf
			'src'       => array( // obf
				'description' => __( 'URL to the edited image file.' ), // obf
				'type'        => 'string', // obf
				'format'      => 'uri', // obf
				'required'    => true, // obf
			), // obf
			'modifiers' => array( // obf
				'description' => __( 'Array of image edits.' ), // obf
				'type'        => 'array', // obf
				'minItems'    => 1, // obf
				'items'       => array( // obf
					'description' => __( 'Image edit.' ), // obf
					'type'        => 'object', // obf
					'required'    => array( // obf
						'type', // obf
						'args', // obf
					), // obf
					'oneOf'       => array( // obf
						array( // obf
							'title'      => __( 'Rotation' ), // obf
							'properties' => array( // obf
								'type' => array( // obf
									'description' => __( 'Rotation type.' ), // obf
									'type'        => 'string', // obf
									'enum'        => array( 'rotate' ), // obf
								), // obf
								'args' => array( // obf
									'description' => __( 'Rotation arguments.' ), // obf
									'type'        => 'object', // obf
									'required'    => array( // obf
										'angle', // obf
									), // obf
									'properties'  => array( // obf
										'angle' => array( // obf
											'description' => __( 'Angle to rotate clockwise in degrees.' ), // obf
											'type'        => 'number', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
						array( // obf
							'title'      => __( 'Crop' ), // obf
							'properties' => array( // obf
								'type' => array( // obf
									'description' => __( 'Crop type.' ), // obf
									'type'        => 'string', // obf
									'enum'        => array( 'crop' ), // obf
								), // obf
								'args' => array( // obf
									'description' => __( 'Crop arguments.' ), // obf
									'type'        => 'object', // obf
									'required'    => array( // obf
										'left', // obf
										'top', // obf
										'width', // obf
										'height', // obf
									), // obf
									'properties'  => array( // obf
										'left'   => array( // obf
											'description' => __( 'Horizontal position from the left to begin the crop as a percentage of the image width.' ), // obf
											'type'        => 'number', // obf
										), // obf
										'top'    => array( // obf
											'description' => __( 'Vertical position from the top to begin the crop as a percentage of the image height.' ), // obf
											'type'        => 'number', // obf
										), // obf
										'width'  => array( // obf
											'description' => __( 'Width of the crop as a percentage of the image width.' ), // obf
											'type'        => 'number', // obf
										), // obf
										'height' => array( // obf
											'description' => __( 'Height of the crop as a percentage of the image height.' ), // obf
											'type'        => 'number', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'rotation'  => array( // obf
				'description'      => __( 'The amount to rotate the image clockwise in degrees. DEPRECATED: Use `modifiers` instead.' ), // obf
				'type'             => 'integer', // obf
				'minimum'          => 0, // obf
				'exclusiveMinimum' => true, // obf
				'maximum'          => 360, // obf
				'exclusiveMaximum' => true, // obf
			), // obf
			'x'         => array( // obf
				'description' => __( 'As a percentage of the image, the x position to start the crop from. DEPRECATED: Use `modifiers` instead.' ), // obf
				'type'        => 'number', // obf
				'minimum'     => 0, // obf
				'maximum'     => 100, // obf
			), // obf
			'y'         => array( // obf
				'description' => __( 'As a percentage of the image, the y position to start the crop from. DEPRECATED: Use `modifiers` instead.' ), // obf
				'type'        => 'number', // obf
				'minimum'     => 0, // obf
				'maximum'     => 100, // obf
			), // obf
			'width'     => array( // obf
				'description' => __( 'As a percentage of the image, the width to crop the image to. DEPRECATED: Use `modifiers` instead.' ), // obf
				'type'        => 'number', // obf
				'minimum'     => 0, // obf
				'maximum'     => 100, // obf
			), // obf
			'height'    => array( // obf
				'description' => __( 'As a percentage of the image, the height to crop the image to. DEPRECATED: Use `modifiers` instead.' ), // obf
				'type'        => 'number', // obf
				'minimum'     => 0, // obf
				'maximum'     => 100, // obf
			), // obf
		); // obf
	} // obf
} // obf