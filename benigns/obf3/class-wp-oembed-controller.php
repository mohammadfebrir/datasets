

<?php // obf
/** // obf
 * WP_oEmbed_Controller class, used to provide an oEmbed endpoint. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Embeds // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * oEmbed API endpoint controller. // obf
 * // obf
 * Registers the REST API route and delivers the response data. // obf
 * The output format (XML or JSON) is handled by the REST API. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_oEmbed_Controller { // obf
	/** // obf
	 * Register the oEmbed REST API route. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	public function register_routes() { // obf
		/** // obf
		 * Filters the maxwidth oEmbed parameter. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param int $v_vjsdj Maximum allowed width. Default 600. // obf
		 */ // obf
		$v_vjsdj = apply_filters( 'oembed_default_width', 600 ); // obf

		register_rest_route( // obf
			'oembed/1.0', // obf
			'/embed', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_udrxj, 'get_item' ), // obf
					'permission_callback' => '__return_true', // obf
					'args'                => array( // obf
						'url'      => array( // obf
							'description' => __( 'The URL of the resource for which to fetch oEmbed data.' ), // obf
							'required'    => true, // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
						), // obf
						'format'   => array( // obf
							'default'           => 'json', // obf
							'sanitize_callback' => 'wp_oembed_ensure_format', // obf
						), // obf
						'maxwidth' => array( // obf
							'default'           => $v_vjsdj, // obf
							'sanitize_callback' => 'absint', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		register_rest_route( // obf
			'oembed/1.0', // obf
			'/proxy', // obf
			array( // obf
				array( // obf
					'methods'             => WP_REST_Server::READABLE, // obf
					'callback'            => array( $v_udrxj, 'get_proxy_item' ), // obf
					'permission_callback' => array( $v_udrxj, 'get_proxy_item_permissions_check' ), // obf
					'args'                => array( // obf
						'url'       => array( // obf
							'description' => __( 'The URL of the resource for which to fetch oEmbed data.' ), // obf
							'required'    => true, // obf
							'type'        => 'string', // obf
							'format'      => 'uri', // obf
						), // obf
						'format'    => array( // obf
							'description' => __( 'The oEmbed format to use.' ), // obf
							'type'        => 'string', // obf
							'default'     => 'json', // obf
							'enum'        => array( // obf
								'json', // obf
								'xml', // obf
							), // obf
						), // obf
						'maxwidth'  => array( // obf
							'description'       => __( 'The maximum width of the embed frame in pixels.' ), // obf
							'type'              => 'integer', // obf
							'default'           => $v_vjsdj, // obf
							'sanitize_callback' => 'absint', // obf
						), // obf
						'maxheight' => array( // obf
							'description'       => __( 'The maximum height of the embed frame in pixels.' ), // obf
							'type'              => 'integer', // obf
							'sanitize_callback' => 'absint', // obf
						), // obf
						'discover'  => array( // obf
							'description' => __( 'Whether to perform an oEmbed discovery request for unsanctioned providers.' ), // obf
							'type'        => 'boolean', // obf
							'default'     => true, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Callback for the embed API endpoint. // obf
	 * // obf
	 * Returns the JSON object for the post. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_ogtzn Full data about the request. // obf
	 * @return array|WP_Error oEmbed response data or WP_Error on failure. // obf
	 */ // obf
	public function get_item( $v_ogtzn ) { // obf
		$v_myetj = url_to_postid( $v_ogtzn['url'] ); // obf

		/** // obf
		 * Filters the determined post ID. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param int    $v_myetj The post ID. // obf
		 * @param string $v_qdysj     The requested URL. // obf
		 */ // obf
		$v_myetj = apply_filters( 'oembed_request_post_id', $v_myetj, $v_ogtzn['url'] ); // obf

		$v_rdiqb = get_oembed_response_data( $v_myetj, $v_ogtzn['maxwidth'] ); // obf

		if ( ! $v_rdiqb ) { // obf
			return new WP_Error( 'oembed_invalid_url', get_status_header_desc( 404 ), array( 'status' => 404 ) ); // obf
		} // obf

		return $v_rdiqb; // obf
	} // obf

	/** // obf
	 * Checks if current user can make a proxy oEmbed request. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return true|WP_Error True if the request has read access, WP_Error object otherwise. // obf
	 */ // obf
	public function get_proxy_item_permissions_check() { // obf
		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new WP_Error( 'rest_forbidden', __( 'Sorry, you are not allowed to make proxied oEmbed requests.' ), array( 'status' => rest_authorization_required_code() ) ); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Callback for the proxy API endpoint. // obf
	 * // obf
	 * Returns the JSON object for the proxied item. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @see WP_oEmbed::get_html() // obf
	 * @global WP_Embed   $v_oeqwe   WordPress Embed object. // obf
	 * @global WP_Scripts $v_vdfbe // obf
	 * // obf
	 * @param WP_REST_Request $v_ogtzn Full data about the request. // obf
	 * @return object|WP_Error oEmbed response data or WP_Error on failure. // obf
	 */ // obf
	public function get_proxy_item( $v_ogtzn ) { // obf
		global $v_oeqwe, $v_vdfbe; // obf

		$v_buzbv = $v_ogtzn->get_params(); // obf

		// Serve oEmbed data from cache if set. // obf
		unset( $v_buzbv['_wpnonce'] ); // obf
		$v_gvtsf = 'oembed_' . md5( serialize( $v_buzbv ) ); // obf
		$v_rdiqb      = get_transient( $v_gvtsf ); // obf
		if ( ! empty( $v_rdiqb ) ) { // obf
			return $v_rdiqb; // obf
		} // obf

		$v_qdysj = $v_ogtzn['url']; // obf
		unset( $v_buzbv['url'] ); // obf

		// Copy maxwidth/maxheight to width/height since WP_oEmbed::fetch() uses these arg names. // obf
		if ( isset( $v_buzbv['maxwidth'] ) ) { // obf
			$v_buzbv['width'] = $v_buzbv['maxwidth']; // obf
		} // obf
		if ( isset( $v_buzbv['maxheight'] ) ) { // obf
			$v_buzbv['height'] = $v_buzbv['maxheight']; // obf
		} // obf

		// Short-circuit process for URLs belonging to the current site. // obf
		$v_rdiqb = get_oembed_response_data_for_url( $v_qdysj, $v_buzbv ); // obf

		if ( $v_rdiqb ) { // obf
			return $v_rdiqb; // obf
		} // obf

		$v_rdiqb = _wp_oembed_get_object()->get_data( $v_qdysj, $v_buzbv ); // obf

		if ( false === $v_rdiqb ) { // obf
			// Try using a classic embed, instead. // obf
			/* @var WP_Embed $v_oeqwe */ // obf
			$v_dranw = $v_oeqwe->get_embed_handler_html( $v_buzbv, $v_qdysj ); // obf

			if ( $v_dranw ) { // obf
				// Check if any scripts were enqueued by the shortcode, and include them in the response. // obf
				$v_pkgeo = array(); // obf

				foreach ( $v_vdfbe->queue as $v_wfdjk ) { // obf
					$v_pkgeo[] = $v_vdfbe->registered[ $v_wfdjk ]->src; // obf
				} // obf

				return (object) array( // obf
					'provider_name' => __( 'Embed Handler' ), // obf
					'html'          => $v_dranw, // obf
					'scripts'       => $v_pkgeo, // obf
				); // obf
			} // obf

			return new WP_Error( 'oembed_invalid_url', get_status_header_desc( 404 ), array( 'status' => 404 ) ); // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-oembed.php */ // obf
		$v_rdiqb->html = apply_filters( 'oembed_result', _wp_oembed_get_object()->data2html( (object) $v_rdiqb, $v_qdysj ), $v_qdysj, $v_buzbv ); // obf

		/** // obf
		 * Filters the oEmbed TTL value (time to live). // obf
		 * // obf
		 * Similar to the {@see 'oembed_ttl'} filter, but for the REST API // obf
		 * oEmbed proxy endpoint. // obf
		 * // obf
		 * @since 4.8.0 // obf
		 * // obf
		 * @param int    $v_gokxw    Time to live (in seconds). // obf
		 * @param string $v_qdysj     The attempted embed URL. // obf
		 * @param array  $v_buzbv    An array of embed request arguments. // obf
		 */ // obf
		$v_bcmjc = apply_filters( 'rest_oembed_ttl', DAY_IN_SECONDS, $v_qdysj, $v_buzbv ); // obf

		set_transient( $v_gvtsf, $v_rdiqb, $v_bcmjc ); // obf

		return $v_rdiqb; // obf
	} // obf
} // obf