

<?php // obf
/** // obf
 * Block Pattern Directory REST API: WP_REST_Pattern_Directory_Controller class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Controller which provides REST endpoint for block patterns. // obf
 * // obf
 * This simply proxies the endpoint at http://api.wordpress.org/patterns/1.0/. That isn't necessary for // obf
 * functionality, but is desired for privacy. It prevents api.wordpress.org from knowing the user's IP address. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @see WP_REST_Controller // obf
 */ // obf
class WP_REST_Pattern_Directory_Controller extends WP_REST_Controller { // obf

	/** // obf
	 * Constructs the controller. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_gujvs->namespace = 'wp/v2'; // obf
		$v_gujvs->rest_base = 'pattern-directory'; // obf
	} // obf

	/** // obf
	 * Registers the necessary REST API routes. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function register_routes() { // obf
		register_rest_route( // obf
			$v_gujvs->namespace, // obf
			'/' . $v_gujvs->rest_base . '/patterns', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_gujvs, 'get_items' ), // obf
					'permission_callback' => array( $v_gujvs, 'get_items_permissions_check' ), // obf
					'args'                => $v_gujvs->get_collection_params(), // obf
				), // obf
				'schema' => array( $v_gujvs, 'get_public_item_schema' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether a given request has permission to view the local block pattern directory. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_gelss Full details about the request. // obf
	 * @return true|WP_Error True if the request has permission, WP_Error object otherwise. // obf
	 */ // obf
	public function get_items_permissions_check( $v_gelss ) { // obf
		if ( current_user_can( 'edit_posts' ) ) { // obf
			return true; // obf
		} // obf

		foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_wiflt ) { // obf
			if ( current_user_can( $v_wiflt->cap->edit_posts ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_pattern_directory_cannot_view', // obf
			__( 'Sorry, you are not allowed to browse the local block pattern directory.' ), // obf
			array( 'status' => rest_authorization_required_code() ) // obf
		); // obf
	} // obf

	/** // obf
	 * Search and retrieve block patterns metadata // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.0.0 Added 'slug' to request. // obf
	 * @since 6.2.0 Added 'per_page', 'page', 'offset', 'order', and 'orderby' to request. // obf
	 * // obf
	 * @param WP_REST_Request $v_gelss Full details about the request. // obf
	 * @return WP_REST_Response|WP_Error Response object on success, or WP_Error object on failure. // obf
	 */ // obf
	public function get_items( $v_gelss ) { // obf
		$v_anofe = array( // obf
			'offset'   => true, // obf
			'order'    => true, // obf
			'orderby'  => true, // obf
			'page'     => true, // obf
			'per_page' => true, // obf
			'search'   => true, // obf
			'slug'     => true, // obf
		); // obf
		$v_fgext       = array_intersect_key( $v_gelss->get_params(), $v_anofe ); // obf

		$v_fgext['locale']             = get_user_locale(); // obf
		$v_fgext['wp-version']         = wp_get_wp_version(); // obf
		$v_fgext['pattern-categories'] = isset( $v_gelss['category'] ) ? $v_gelss['category'] : false; // obf
		$v_fgext['pattern-keywords']   = isset( $v_gelss['keyword'] ) ? $v_gelss['keyword'] : false; // obf

		$v_fgext = array_filter( $v_fgext ); // obf

		$v_ztplf = $v_gujvs->get_transient_key( $v_fgext ); // obf

		/* // obf
		 * Use network-wide transient to improve performance. The locale is the only site // obf
		 * configuration that affects the response, and it's included in the transient key. // obf
		 */ // obf
		$v_xrxmp = get_site_transient( $v_ztplf ); // obf

		if ( ! $v_xrxmp ) { // obf
			$v_wpiao = 'http://api.wordpress.org/patterns/1.0/?' . build_query( $v_fgext ); // obf
			if ( wp_http_supports( array( 'ssl' ) ) ) { // obf
				$v_wpiao = set_url_scheme( $v_wpiao, 'https' ); // obf
			} // obf

			/* // obf
			 * Default to a short TTL, to mitigate cache stampedes on high-traffic sites. // obf
			 * This assumes that most errors will be short-lived, e.g., packet loss that causes the // obf
			 * first request to fail, but a follow-up one will succeed. The value should be high // obf
			 * enough to avoid stampedes, but low enough to not interfere with users manually // obf
			 * re-trying a failed request. // obf
			 */ // obf
			$v_oozst      = 5; // obf
			$v_ewjgq = wp_remote_get( $v_wpiao ); // obf
			$v_xrxmp   = json_decode( wp_remote_retrieve_body( $v_ewjgq ) ); // obf

			if ( is_wp_error( $v_ewjgq ) ) { // obf
				$v_xrxmp = $v_ewjgq; // obf

			} elseif ( ! is_array( $v_xrxmp ) ) { // obf
				// HTTP request succeeded, but response data is invalid. // obf
				$v_xrxmp = new WP_Error( // obf
					'pattern_api_failed', // obf
					sprintf( // obf
						/* translators: %s: Support forums URL. */ // obf
						__( 'An unexpected error occurred. Something may be wrong with WordPress.org or this server&#8217;s configuration. If you continue to have problems, please try the <a href="%s">support forums</a>.' ), // obf
						__( 'https://wordpress.org/support/forums/' ) // obf
					), // obf
					array( // obf
						'response' => wp_remote_retrieve_body( $v_ewjgq ), // obf
					) // obf
				); // obf

			} else { // obf
				// Response has valid data. // obf
				$v_oozst = HOUR_IN_SECONDS; // obf
			} // obf

			set_site_transient( $v_ztplf, $v_xrxmp, $v_oozst ); // obf
		} // obf

		if ( is_wp_error( $v_xrxmp ) ) { // obf
			$v_xrxmp->add_data( array( 'status' => 500 ) ); // obf

			return $v_xrxmp; // obf
		} // obf

		if ( $v_gelss->is_method( 'HEAD' ) ) { // obf
			// Return early as this handler doesn't add any response headers. // obf
			return new WP_REST_Response( array() ); // obf
		} // obf

		$v_klqjw = array(); // obf

		if ( $v_xrxmp ) { // obf
			foreach ( $v_xrxmp as $v_syvrm ) { // obf
				$v_klqjw[] = $v_gujvs->prepare_response_for_collection( // obf
					$v_gujvs->prepare_item_for_response( $v_syvrm, $v_gelss ) // obf
				); // obf
			} // obf
		} // obf

		return new WP_REST_Response( $v_klqjw ); // obf
	} // obf

	/** // obf
	 * Prepare a raw block pattern before it gets output in a REST API response. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 5.9.0 Renamed `$v_mmlcd` to `$v_wdcyy` to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @param object          $v_wdcyy    Raw pattern from api.wordpress.org, before any changes. // obf
	 * @param WP_REST_Request $v_gelss Request object. // obf
	 * @return WP_REST_Response // obf
	 */ // obf
	public function prepare_item_for_response( $v_wdcyy, $v_gelss ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_mmlcd = $v_wdcyy; // obf

		$v_hefxh = array( // obf
			'id'             => absint( $v_mmlcd->id ), // obf
			'title'          => sanitize_text_field( $v_mmlcd->title->rendered ), // obf
			'content'        => wp_kses_post( $v_mmlcd->pattern_content ), // obf
			'categories'     => array_map( 'sanitize_title', $v_mmlcd->category_slugs ), // obf
			'keywords'       => array_map( 'sanitize_text_field', explode( ',', $v_mmlcd->meta->wpop_keywords ) ), // obf
			'description'    => sanitize_text_field( $v_mmlcd->meta->wpop_description ), // obf
			'viewport_width' => absint( $v_mmlcd->meta->wpop_viewport_width ), // obf
			'block_types'    => array_map( 'sanitize_text_field', $v_mmlcd->meta->wpop_block_types ), // obf
		); // obf

		$v_hefxh = $v_gujvs->add_additional_fields_to_object( $v_hefxh, $v_gelss ); // obf

		$v_klqjw = new WP_REST_Response( $v_hefxh ); // obf

		/** // obf
		 * Filters the REST API response for a block pattern. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_klqjw    The response object. // obf
		 * @param object           $v_mmlcd The unprepared block pattern. // obf
		 * @param WP_REST_Request  $v_gelss     The request object. // obf
		 */ // obf
		return apply_filters( 'rest_prepare_block_pattern', $v_klqjw, $v_mmlcd, $v_gelss ); // obf
	} // obf

	/** // obf
	 * Retrieves the block pattern's schema, conforming to JSON Schema. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.2.0 Added `'block_types'` to schema. // obf
	 * // obf
	 * @return array Item schema data. // obf
	 */ // obf
	public function get_item_schema() { // obf
		if ( $v_gujvs->schema ) { // obf
			return $v_gujvs->add_additional_fields_schema( $v_gujvs->schema ); // obf
		} // obf

		$v_gujvs->schema = array( // obf
			'$v_bkfsn'    => 'http://json-schema.org/draft-04/schema#', // obf
			'title'      => 'pattern-directory-item', // obf
			'type'       => 'object', // obf
			'properties' => array( // obf
				'id'             => array( // obf
					'description' => __( 'The pattern ID.' ), // obf
					'type'        => 'integer', // obf
					'minimum'     => 1, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf

				'title'          => array( // obf
					'description' => __( 'The pattern title, in human readable format.' ), // obf
					'type'        => 'string', // obf
					'minLength'   => 1, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf

				'content'        => array( // obf
					'description' => __( 'The pattern content.' ), // obf
					'type'        => 'string', // obf
					'minLength'   => 1, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf

				'categories'     => array( // obf
					'description' => __( "The pattern's category slugs." ), // obf
					'type'        => 'array', // obf
					'uniqueItems' => true, // obf
					'items'       => array( 'type' => 'string' ), // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf

				'keywords'       => array( // obf
					'description' => __( "The pattern's keywords." ), // obf
					'type'        => 'array', // obf
					'uniqueItems' => true, // obf
					'items'       => array( 'type' => 'string' ), // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf

				'description'    => array( // obf
					'description' => __( 'A description of the pattern.' ), // obf
					'type'        => 'string', // obf
					'minLength'   => 1, // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf

				'viewport_width' => array( // obf
					'description' => __( 'The preferred width of the viewport when previewing a pattern, in pixels.' ), // obf
					'type'        => 'integer', // obf
					'context'     => array( 'view', 'edit', 'embed' ), // obf
				), // obf

				'block_types'    => array( // obf
					'description' => __( 'The block types which can use this pattern.' ), // obf
					'type'        => 'array', // obf
					'uniqueItems' => true, // obf
					'items'       => array( 'type' => 'string' ), // obf
					'context'     => array( 'view', 'embed' ), // obf
				), // obf
			), // obf
		); // obf

		return $v_gujvs->add_additional_fields_schema( $v_gujvs->schema ); // obf
	} // obf

	/** // obf
	 * Retrieves the search parameters for the block pattern's collection. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.2.0 Added 'per_page', 'page', 'offset', 'order', and 'orderby' to request. // obf
	 * // obf
	 * @return array Collection parameters. // obf
	 */ // obf
	public function get_collection_params() { // obf
		$v_wsips = parent::get_collection_params(); // obf

		$v_wsips['per_page']['default'] = 100; // obf
		$v_wsips['search']['minLength'] = 1; // obf
		$v_wsips['context']['default']  = 'view'; // obf

		$v_wsips['category'] = array( // obf
			'description' => __( 'Limit results to those matching a category ID.' ), // obf
			'type'        => 'integer', // obf
			'minimum'     => 1, // obf
		); // obf

		$v_wsips['keyword'] = array( // obf
			'description' => __( 'Limit results to those matching a keyword ID.' ), // obf
			'type'        => 'integer', // obf
			'minimum'     => 1, // obf
		); // obf

		$v_wsips['slug'] = array( // obf
			'description' => __( 'Limit results to those matching a pattern (slug).' ), // obf
			'type'        => 'array', // obf
		); // obf

		$v_wsips['offset'] = array( // obf
			'description' => __( 'Offset the result set by a specific number of items.' ), // obf
			'type'        => 'integer', // obf
		); // obf

		$v_wsips['order'] = array( // obf
			'description' => __( 'Order sort attribute ascending or descending.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'desc', // obf
			'enum'        => array( 'asc', 'desc' ), // obf
		); // obf

		$v_wsips['orderby'] = array( // obf
			'description' => __( 'Sort collection by post attribute.' ), // obf
			'type'        => 'string', // obf
			'default'     => 'date', // obf
			'enum'        => array( // obf
				'author', // obf
				'date', // obf
				'id', // obf
				'include', // obf
				'modified', // obf
				'parent', // obf
				'relevance', // obf
				'slug', // obf
				'include_slugs', // obf
				'title', // obf
				'favorite_count', // obf
			), // obf
		); // obf

		/** // obf
		 * Filter collection parameters for the block pattern directory controller. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param array $v_wsips JSON Schema-formatted collection parameters. // obf
		 */ // obf
		return apply_filters( 'rest_pattern_directory_collection_params', $v_wsips ); // obf
	} // obf

	/** // obf
	 * Include a hash of the query args, so that different requests are stored in // obf
	 * separate caches. // obf
	 * // obf
	 * MD5 is chosen for its speed, low-collision rate, universal availability, and to stay // obf
	 * under the character limit for `_site_transient_timeout_{...}` keys. // obf
	 * // obf
	 * @link https://stackoverflow.com/questions/3665247/fastest-hash-for-non-cryptographic-uses // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param array $v_fgext Query arguments to generate a transient key from. // obf
	 * @return string Transient key. // obf
	 */ // obf
	protected function get_transient_key( $v_fgext ) { // obf

		if ( isset( $v_fgext['slug'] ) ) { // obf
			// This is an additional precaution because the "sort" function expects an array. // obf
			$v_fgext['slug'] = wp_parse_list( $v_fgext['slug'] ); // obf

			// Empty arrays should not affect the transient key. // obf
			if ( empty( $v_fgext['slug'] ) ) { // obf
				unset( $v_fgext['slug'] ); // obf
			} else { // obf
				// Sort the array so that the transient key doesn't depend on the order of slugs. // obf
				sort( $v_fgext['slug'] ); // obf
			} // obf
		} // obf

		return 'wp_remote_block_patterns_' . md5( serialize( $v_fgext ) ); // obf
	} // obf
} // obf