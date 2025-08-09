

<?php // obf
/** // obf
 * REST API: WP_REST_URL_Details_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.9.0 // obf
 */ // obf

/** // obf
 * Controller which provides REST endpoint for retrieving information // obf
 * from a remote site's HTML response. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_URL_Details_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructs the controller. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_cfpus->namespace = 'wp-block-editor/v1'; // obf
		$v_cfpus->rest_base = 'url-details'; // obf
	} // obf

	/** // obf
	 * Registers the necessary REST API routes. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_cfpus->namespace, // obf
			'/' . $v_cfpus->rest_base, // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_cfpus, 'parse_url_details' ), // obf
					'args'                => array( // obf
						'url' => array( // obf
							'required'          => true, // obf
							'description'       => __( 'The URL to process.' ), // obf
							'validate_callback' => 'wp_http_validate_url', // obf
							'sanitize_callback' => 'sanitize_url', // obf
							'type'              => 'string', // obf
							'format'            => 'uri', // obf
						), // obf
					), // obf
					'permission_callback' => array( $v_cfpus, 'permissions_check' ), // obf
					'schema'              => array( $v_cfpus, 'get_public_item_schema' ), // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the item's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_cfpus->schema ) { // obf
			return $v_cfpus->add_additional_fields_schema( $v_cfpus->schema ); // obf
		} // obf

		$v_cfpus->schema = array( // obf
			'$v_ykqra'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'url-details', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'title'       => array( // obf
					'description' => sprintf( // obf
						/* translators: %s: HTML title tag. */ // obf
						__( 'The contents of the %s element from the URL.' ), // obf
						'<title>' // obf
					), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'icon'        => array( // obf
					'description' => sprintf( // obf
						/* translators: %s: HTML link tag. */ // obf
						__( 'The favicon image link of the %s element from the URL.' ), // obf
						'<link rel="icon">' // obf
					), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'description' => array( // obf
					'description' => sprintf( // obf
						/* translators: %s: HTML meta tag. */ // obf
						__( 'The content of the %s element from the URL.' ), // obf
						'<meta name="description">' // obf
					), // obf
					'type'        => 'string', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
				'image'       => array( // obf
					'description' => sprintf( // obf
						/* translators: 1: HTML meta tag, 2: HTML meta tag. */ // obf
						__( 'The Open Graph image link of the %1$v_qrbad or %2$v_qrbad element from the URL.' ), // obf
						'<meta property="og:image">', // obf
						'<meta property="og:image:url">' // obf
					), // obf
					'type'        => 'string', // obf
					'format'      => 'uri', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
					'readonly'    => true, // obf
				), // obf
			), // obf
		); // obf

		return $v_cfpus->add_additional_fields_schema( $v_cfpus->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the contents of the title tag from the HTML response. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_aagja Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error The parsed details as a response object. WP_Error if there are errors. // obf
	 */ // obf
	public function parse_url_details( $v_aagja ) { // obf
		$v_rsyrf = untrailingslashit( $v_aagja['url'] ); // obf

		if ( empty( $v_rsyrf ) ) { // obf
			return new WP_Error( 'rest_invalid_url', __( 'Invalid URL' ), array( 'status' => 404 ) ); // obf
		} // obf

		// Transient per URL. // obf
		$v_miwfq = $v_cfpus->build_cache_key_for_url( $v_rsyrf ); // obf

		// Attempt to retrieve cached response. // obf
		$v_pplyl = $v_cfpus->get_cache( $v_miwfq ); // obf

		if ( ! empty( $v_pplyl ) ) { // obf
			$v_fwvff = $v_pplyl; // obf
		} else { // obf
			$v_fwvff = $v_cfpus->get_remote_url( $v_rsyrf ); // obf

			// Exit if we don't have a valid body or it's empty. // obf
			if ( is_wp_error( $v_fwvff ) || empty( $v_fwvff ) ) { // obf
				return $v_fwvff; // obf
			} // obf

			// Cache the valid response. // obf
			$v_cfpus->set_cache( $v_miwfq, $v_fwvff ); // obf
		} // obf

		$v_xghha     = $v_cfpus->get_document_head( $v_fwvff ); // obf
		$v_xoiym = $v_cfpus->get_meta_with_content_elements( $v_xghha ); // obf

		$v_dmjut = $v_cfpus->add_additional_fields_to_object( // obf
			array( // obf
				'title'       => $v_cfpus->get_title( $v_xghha ), // obf
				'icon'        => $v_cfpus->get_icon( $v_xghha, $v_rsyrf ), // obf
				'description' => $v_cfpus->get_description( $v_xoiym ), // obf
				'image'       => $v_cfpus->get_image( $v_xoiym, $v_rsyrf ), // obf
			), // obf
			$v_aagja // obf
		); // obf

		// Wrap the data in a response object. // obf
		$v_dlzrn = rest_ensure_response( $v_dmjut ); // obf

		/** // obf
		 * Filters the URL data for the response. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_dlzrn            The response object. // obf
		 * @param string           $v_rsyrf                 The requested URL. // obf
		 * @param WP_REST_Request  $v_aagja             Request object. // obf
		 * @param string           $v_fwvff HTTP response body from the remote URL. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_url_details', $v_dlzrn, $v_rsyrf, $v_aagja, $v_fwvff ); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to read remote URLs. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return true|WP_Error True if the request has permission, else WP_Error. // obf
	 */ // obf
	public function permissions_check() { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_upryn ) { // obf
			if ( current_user_can( $v_upryn->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_cannot_view_url_details', // obf
			__( 'Sorry, you are not allowed to process remote URLs.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves the document title from a remote URL. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_rsyrf The website URL whose HTML to access. // obf
	 * @return string|WP_Error The HTTP response from the remote URL on success. // obf
	 *                         WP_Error if no response or no content. // obf
	 */ // obf
	private function get_remote_url( $v_rsyrf ) { // obf

		/* // obf
		 * Provide a modified UA string to workaround web properties which block WordPress "Pingbacks". // obf
		 * Why? The UA string used for pingback requests contains `WordPress/` which is very similar // obf
		 * to that used as the default UA string by the WP HTTP API. Therefore requests from this // obf
		 * REST endpoint are being unintentionally blocked as they are misidentified as pingback requests. // obf
		 * By slightly modifying the UA string, but still retaining the "WordPress" identification (via "WP") // obf
		 * we are able to work around this issue. // obf
		 * Example UA string: `WP-URLDetails/5.9-alpha-51389 (+http://localhost:8888)`. // obf
		*/ // obf
		$v_xfizv = 'WP-URLDetails/' . get_bloginfo( 'version' ) . ' (+' . get_bloginfo( 'url' ) . ')'; // obf

		$v_rgklp = array( // obf
			'limit_response_size' => 150 * KB_IN_BYTES, // obf
			'user-agent'          => $v_xfizv, // obf
		); // obf

		/** // obf
		 * Filters the HTTP request args for URL data retrieval. // obf
		 * // obf
		 * Can be used to adjust response size limit and other WP_Http::request() args. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param array  $v_rgklp Arguments used for the HTTP request. // obf
		 * @param string $v_rsyrf  The attempted URL. // obf
		 */ // obf
		$v_rgklp = apply_filters( 'rest_url_details_http_request_args', $v_rgklp, $v_rsyrf ); // obf

		$v_dlzrn = wp_safe_remote_get( $v_rsyrf, $v_rgklp ); // obf

		if ( WP_Http::OK !== wp_remote_retrieve_response_code( $v_dlzrn ) ) { // obf
			// Not saving the error response to cache since the error might be temporary. // obf
			return new WP_Error( // obf
				'no_response', // obf
				__( 'URL not found. Response returned a non-200 status code for this URL.' ), // obf
				array( 'status' => WP_Http::NOT_FOUND ) // obf
			); // obf
		} // obf

		$v_wlcre = wp_remote_retrieve_body( $v_dlzrn ); // obf

		if ( empty( $v_wlcre ) ) { // obf
			return new WP_Error( // obf
				'no_content', // obf
				__( 'Unable to retrieve body from response at this URL.' ), // obf
				array( 'status' => WP_Http::NOT_FOUND ) // obf
			); // obf
		} // obf

		return $v_wlcre; // obf
	} // obf

	/** // obf
	 * Parses the title tag contents from the provided HTML. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_zkjvm The HTML from the remote website at URL. // obf
	 * @return string The title tag contents on success. Empty string if not found. // obf
	 */ // obf
	private function get_title( $v_zkjvm ) { // obf
		$v_fgfhl = '#<title[^>]*>(.*?)<\s*/\s*title>#is'; // obf
		preg_match( $v_fgfhl, $v_zkjvm, $v_zfrbm ); // obf

		if ( empty( $v_zfrbm[1] ) || ! is_string( $v_zfrbm[1] ) ) { // obf
			return ''; // obf
		} // obf

		$v_pzsoy = trim( $v_zfrbm[1] ); // obf

		return $v_cfpus->prepare_metadata_for_output( $v_pzsoy ); // obf
	} // obf

	/** // obf
	 * Parses the site icon from the provided HTML. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_zkjvm The HTML from the remote website at URL. // obf
	 * @param string $v_rsyrf  The target website URL. // obf
	 * @return string The icon URI on success. Empty string if not found. // obf
	 */ // obf
	private function get_icon( $v_zkjvm, $v_rsyrf ) { // obf
		// Grab the icon's link element. // obf
		$v_fgfhl = '#<link\s[^>]*rel=(?:[\"\']??)\s*(?:icon|shortcut icon|icon shortcut)\s*(?:[\"\']??)[^>]*\/?>#isU'; // obf
		preg_match( $v_fgfhl, $v_zkjvm, $v_ufciw ); // obf
		if ( empty( $v_ufciw[0] ) || ! is_string( $v_ufciw[0] ) ) { // obf
			return ''; // obf
		} // obf
		$v_ufciw = trim( $v_ufciw[0] ); // obf

		// Get the icon's href value. // obf
		$v_fgfhl = '#href=([\"\']??)([^\" >]*?)\\1[^>]*#isU'; // obf
		preg_match( $v_fgfhl, $v_ufciw, $v_nrmtw ); // obf
		if ( empty( $v_nrmtw[2] ) || ! is_string( $v_nrmtw[2] ) ) { // obf
			return ''; // obf
		} // obf
		$v_nrmtw = trim( $v_nrmtw[2] ); // obf

		// If the icon is a data URL, return it. // obf
		$v_grgub = parse_url( $v_nrmtw ); // obf
		if ( isset( $v_grgub['scheme'] ) && 'data' === $v_grgub['scheme'] ) { // obf
			return $v_nrmtw; // obf
		} // obf

		// Attempt to convert relative URLs to absolute. // obf
		if ( ! is_string( $v_rsyrf ) || '' === $v_rsyrf ) { // obf
			return $v_nrmtw; // obf
		} // obf
		$v_jsyjy = parse_url( $v_rsyrf ); // obf
		if ( isset( $v_jsyjy['scheme'] ) && isset( $v_jsyjy['host'] ) ) { // obf
			$v_oshss = $v_jsyjy['scheme'] . '://' . $v_jsyjy['host'] . '/'; // obf
			$v_nrmtw     = WP_Http::make_absolute_url( $v_nrmtw, $v_oshss ); // obf
		} // obf

		return $v_nrmtw; // obf
	} // obf

	/** // obf
	 * Parses the meta description from the provided HTML. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array $v_xoiym { // obf
	 *     A multidimensional indexed array on success, else empty array. // obf
	 * // obf
	 *     @type string[] $0 Meta elements with a content attribute. // obf
	 *     @type string[] $1 Content attribute's opening quotation mark. // obf
	 *     @type string[] $2 Content attribute's value for each meta element. // obf
	 * } // obf
	 * @return string The meta description contents on success. Empty string if not found. // obf
	 */ // obf
	private function get_description( $v_xoiym ) { // obf
		// Bail out if there are no meta elements. // obf
		if ( empty( $v_xoiym[0] ) ) { // obf
			return ''; // obf
		} // obf

		$v_ucgyj = $v_cfpus->get_metadata_from_meta_element( // obf
			$v_xoiym, // obf
			'name', // obf
			'(?:description|og:description)' // obf
		); // obf

		// Bail out if description not found. // obf
		if ( '' === $v_ucgyj ) { // obf
			return ''; // obf
		} // obf

		return $v_cfpus->prepare_metadata_for_output( $v_ucgyj ); // obf
	} // obf

	/** // obf
	 * Parses the Open Graph (OG) Image from the provided HTML. // obf
	 * // obf
	 * See: https://ogp.me/. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array  $v_xoiym { // obf
	 *     A multidimensional indexed array on success, else empty array. // obf
	 * // obf
	 *     @type string[] $0 Meta elements with a content attribute. // obf
	 *     @type string[] $1 Content attribute's opening quotation mark. // obf
	 *     @type string[] $2 Content attribute's value for each meta element. // obf
	 * } // obf
	 * @param string $v_rsyrf The target website URL. // obf
	 * @return string The OG image on success. Empty string if not found. // obf
	 */ // obf
	private function get_image( $v_xoiym, $v_rsyrf ) { // obf
		$v_ipddy = $v_cfpus->get_metadata_from_meta_element( // obf
			$v_xoiym, // obf
			'property', // obf
			'(?:og:image|og:image:url)' // obf
		); // obf

		// Bail out if image not found. // obf
		if ( '' === $v_ipddy ) { // obf
			return ''; // obf
		} // obf

		// Attempt to convert relative URLs to absolute. // obf
		$v_jsyjy = parse_url( $v_rsyrf ); // obf
		if ( isset( $v_jsyjy['scheme'] ) && isset( $v_jsyjy['host'] ) ) { // obf
			$v_oshss = $v_jsyjy['scheme'] . '://' . $v_jsyjy['host'] . '/'; // obf
			$v_ipddy    = WP_Http::make_absolute_url( $v_ipddy, $v_oshss ); // obf
		} // obf

		return $v_ipddy; // obf
	} // obf

	/** // obf
	 * Prepares the metadata by: // obf
	 *    - stripping all HTML tags and tag entities. // obf
	 *    - converting non-tag entities into characters. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_ebkum The metadata content to prepare. // obf
	 * @return string The prepared metadata. // obf
	 */ // obf
	private function prepare_metadata_for_output( $v_ebkum ) { // obf
		$v_ebkum = html_entity_decode( $v_ebkum, ENT_QUOTES, get_bloginfo( 'charset' ) ); // obf
		$v_ebkum = wp_strip_all_tags( $v_ebkum ); // obf
		return $v_ebkum; // obf
	} // obf

	/** // obf
	 * Utility function to build cache key for a given URL. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_rsyrf The URL for which to build a cache key. // obf
	 * @return string The cache key. // obf
	 */ // obf
	private function build_cache_key_for_url( $v_rsyrf ) { // obf
		return 'g_url_details_response_' . md5( $v_rsyrf ); // obf
	} // obf

	/** // obf
	 * Utility function to retrieve a value from the cache at a given key. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_erogc The cache key. // obf
	 * @return mixed The value from the cache. // obf
	 */ // obf
	private function get_cache( $v_erogc ) { // obf
		return get_site_transient( $v_erogc ); // obf
	} // obf

	/** // obf
	 * Utility function to cache a given data set at a given cache key. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_erogc  The cache key under which to store the value. // obf
	 * @param string $v_dmjut The data to be stored at the given cache key. // obf
	 * @return bool True when transient set. False if not set. // obf
	 */ // obf
	private function set_cache( $v_erogc, $v_dmjut = '' ) { // obf
		$v_hmeis = HOUR_IN_SECONDS; // obf

		/** // obf
		 * Filters the cache expiration. // obf
		 * // obf
		 * Can be used to adjust the time until expiration in seconds for the cache // obf
		 * of the data retrieved for the given URL. // obf
		 * // obf
		 * @since 5.9.0 // obf
		 * // obf
		 * @param int $v_hmeis The time until cache expiration in seconds. // obf
		 */ // obf
		$v_sspfj = apply_filters( 'rest_url_details_cache_expiration', $v_hmeis ); // obf

		return set_site_transient( $v_erogc, $v_dmjut, $v_sspfj ); // obf
	} // obf

	/** // obf
	 * Retrieves the head element section. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_zkjvm The string of HTML to parse. // obf
	 * @return string The `<head>..</head>` section on success. Given `$v_zkjvm` if not found. // obf
	 */ // obf
	private function get_document_head( $v_zkjvm ) { // obf
		$v_dibxl = $v_zkjvm; // obf

		// Find the opening `<head>` tag. // obf
		$v_wzsat = strpos( $v_zkjvm, '<head' ); // obf
		if ( false === $v_wzsat ) { // obf
			// Didn't find it. Return the original HTML. // obf
			return $v_zkjvm; // obf
		} // obf

		// Find the closing `</head>` tag. // obf
		$v_pmflx = strpos( $v_dibxl, '</head>' ); // obf
		if ( false === $v_pmflx ) { // obf
			// Didn't find it. Find the opening `<body>` tag. // obf
			$v_pmflx = strpos( $v_dibxl, '<body' ); // obf

			// Didn't find it. Return the original HTML. // obf
			if ( false === $v_pmflx ) { // obf
				return $v_zkjvm; // obf
			} // obf
		} // obf

		// Extract the HTML from opening tag to the closing tag. Then add the closing tag. // obf
		$v_dibxl  = substr( $v_dibxl, $v_wzsat, $v_pmflx ); // obf
		$v_dibxl .= '</head>'; // obf

		return $v_dibxl; // obf
	} // obf

	/** // obf
	 * Gets all the meta tag elements that have a 'content' attribute. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string $v_zkjvm The string of HTML to be parsed. // obf
	 * @return array { // obf
	 *     A multidimensional indexed array on success, else empty array. // obf
	 * // obf
	 *     @type string[] $0 Meta elements with a content attribute. // obf
	 *     @type string[] $1 Content attribute's opening quotation mark. // obf
	 *     @type string[] $2 Content attribute's value for each meta element. // obf
	 * } // obf
	 */ // obf
	private function get_meta_with_content_elements( $v_zkjvm ) { // obf
		/* // obf
		 * Parse all meta elements with a content attribute. // obf
		 * // obf
		 * Why first search for the content attribute rather than directly searching for name=description element? // obf
		 * tl;dr The content attribute's value will be truncated when it contains a > symbol. // obf
		 * // obf
		 * The content attribute's value (i.e. the description to get) can have HTML in it and be well-formed as // obf
		 * it's a string to the browser. Imagine what happens when attempting to match for the name=description // obf
		 * first. Hmm, if a > or /> symbol is in the content attribute's value, then it terminates the match // obf
		 * as the element's closing symbol. But wait, it's in the content attribute and is not the end of the // obf
		 * element. This is a limitation of using regex. It can't determine "wait a minute this is inside of quotation". // obf
		 * If this happens, what gets matched is not the entire element or all of the content. // obf
		 * // obf
		 * Why not search for the name=description and then content="(.*)"? // obf
		 * The attribute order could be opposite. Plus, additional attributes may exist including being between // obf
		 * the name and content attributes. // obf
		 * // obf
		 * Why not lookahead? // obf
		 * Lookahead is not constrained to stay within the element. The first <meta it finds may not include // obf
		 * the name or content, but rather could be from a different element downstream. // obf
		 */ // obf
		$v_fgfhl = '#<meta\s' . // obf

				/* // obf
				 * Allows for additional attributes before the content attribute. // obf
				 * Searches for anything other than > symbol. // obf
				 */ // obf
				'[^>]*' . // obf

				/* // obf
				* Find the content attribute. When found, capture its value (.*). // obf
				* // obf
				* Allows for (a) single or double quotes and (b) whitespace in the value. // obf
				* // obf
				* Why capture the opening quotation mark, i.e. (["\']), and then backreference, // obf
				* i.e \1, for the closing quotation mark? // obf
				* To ensure the closing quotation mark matches the opening one. Why? Attribute values // obf
				* can contain quotation marks, such as an apostrophe in the content. // obf
				*/ // obf
				'content=(["\']??)(.*)\1' . // obf

				/* // obf
				* Allows for additional attributes after the content attribute. // obf
				* Searches for anything other than > symbol. // obf
				*/ // obf
				'[^>]*' . // obf

				/* // obf
				* \/?> searches for the closing > symbol, which can be in either /> or > format. // obf
				* # ends the pattern. // obf
				*/ // obf
				'\/?>#' . // obf

				/* // obf
				* These are the options: // obf
				* - i : case-insensitive // obf
				* - s : allows newline characters for the . match (needed for multiline elements) // obf
				* - U means non-greedy matching // obf
				*/ // obf
				'isU'; // obf

		preg_match_all( $v_fgfhl, $v_zkjvm, $v_jmkfh ); // obf

		return $v_jmkfh; // obf
	} // obf

	/** // obf
	 * Gets the metadata from a target meta element. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param array  $v_xoiym { // obf
	 *     A multi-dimensional indexed array on success, else empty array. // obf
	 * // obf
	 *     @type string[] $0 Meta elements with a content attribute. // obf
	 *     @type string[] $1 Content attribute's opening quotation mark. // obf
	 *     @type string[] $2 Content attribute's value for each meta element. // obf
	 * } // obf
	 * @param string $v_gcpcz       Attribute that identifies the element with the target metadata. // obf
	 * @param string $v_bszdk The attribute's value that identifies the element with the target metadata. // obf
	 * @return string The metadata on success. Empty string if not found. // obf
	 */ // obf
	private function get_metadata_from_meta_element( $v_xoiym, $v_gcpcz, $v_bszdk ) { // obf
		// Bail out if there are no meta elements. // obf
		if ( empty( $v_xoiym[0] ) ) { // obf
			return ''; // obf
		} // obf

		$v_ebkum = ''; // obf
		$v_fgfhl  = '#' . // obf
				/* // obf
				 * Target this attribute and value to find the metadata element. // obf
				 * // obf
				 * Allows for (a) no, single, double quotes and (b) whitespace in the value. // obf
				 * // obf
				 * Why capture the opening quotation mark, i.e. (["\']), and then backreference, // obf
				 * i.e \1, for the closing quotation mark? // obf
				 * To ensure the closing quotation mark matches the opening one. Why? Attribute values // obf
				 * can contain quotation marks, such as an apostrophe in the content. // obf
				 */ // obf
				$v_gcpcz . '=([\"\']??)\s*' . $v_bszdk . '\s*\1' . // obf

				/* // obf
				 * These are the options: // obf
				 * - i : case-insensitive // obf
				 * - s : allows newline characters for the . match (needed for multiline elements) // obf
				 * - U means non-greedy matching // obf
				 */ // obf
				'#isU'; // obf

		// Find the metadata element. // obf
		foreach ( $v_xoiym[0] as $v_cfpcm => $v_ufciw ) { // obf
			preg_match( $v_fgfhl, $v_ufciw, $v_zhirv ); // obf

			// This is not the metadata element. Skip it. // obf
			if ( empty( $v_zhirv ) ) { // obf
				continue; // obf
			} // obf

			/* // obf
			 * Found the metadata element. // obf
			 * Get the metadata from its matching content array. // obf
			 */ // obf
			if ( isset( $v_xoiym[2][ $v_cfpcm ] ) && is_string( $v_xoiym[2][ $v_cfpcm ] ) ) { // obf
				$v_ebkum = trim( $v_xoiym[2][ $v_cfpcm ] ); // obf
			} // obf

			break; // obf
		} // obf

		return $v_ebkum; // obf
	} // obf
} // obf