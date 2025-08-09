
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * REST API: WP_REST_Server class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the WordPress REST API server. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_REST_Server { // obf

	/** // obf
	 * Alias for GET transport method. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	const READABLE = 'GET'; // obf

	/** // obf
	 * Alias for POST transport method. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	const CREATABLE = 'POST'; // obf

	/** // obf
	 * Alias for POST, PUT, PATCH transport methods together. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	const EDITABLE = 'POST, PUT, PATCH'; // obf

	/** // obf
	 * Alias for DELETE transport method. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	const DELETABLE = 'DELETE'; // obf

	/** // obf
	 * Alias for GET, POST, PUT, PATCH & DELETE transport methods together. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	const ALLMETHODS = 'GET, POST, PUT, PATCH, DELETE'; // obf

	/** // obf
	 * Namespaces registered to the server. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_eefsr = array(); // obf

	/** // obf
	 * Endpoints registered to the server. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_eoytd = array(); // obf

	/** // obf
	 * Options defined for the routes. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_zsccb = array(); // obf

	/** // obf
	 * Caches embedded requests. // obf
	 * // obf
	 * @since 5.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_errrt = array(); // obf

	/** // obf
	 * Stores request objects that are currently being handled. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_dpilv = array(); // obf

	/** // obf
	 * Instantiates the REST server. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_arzvv->endpoints = array( // obf
			// Meta endpoints. // obf
			'/'         => array( // obf
				'callback' => array( $v_arzvv, 'get_index' ), // obf
				'methods'  => 'GET', // obf
				'args'     => array( // obf
					'context' => array( // obf
						'default' => 'view', // obf
					), // obf
				), // obf
			), // obf
			'/batch/v1' => array( // obf
				'callback' => array( $v_arzvv, 'serve_batch_request_v1' ), // obf
				'methods'  => 'POST', // obf
				'args'     => array( // obf
					'validation' => array( // obf
						'type'    => 'string', // obf
						'enum'    => array( 'require-all-validate', 'normal' ), // obf
						'default' => 'normal', // obf
					), // obf
					'requests'   => array( // obf
						'required' => true, // obf
						'type'     => 'array', // obf
						'maxItems' => $v_arzvv->get_max_batch_size(), // obf
						'items'    => array( // obf
							'type'       => 'object', // obf
							'properties' => array( // obf
								'method'  => array( // obf
									'type'    => 'string', // obf
									'enum'    => array( 'POST', 'PUT', 'PATCH', 'DELETE' ), // obf
									'default' => 'POST', // obf
								), // obf
								'path'    => array( // obf
									'type'     => 'string', // obf
									'required' => true, // obf
								), // obf
								'body'    => array( // obf
									'type'                 => 'object', // obf
									'properties'           => array(), // obf
									'additionalProperties' => true, // obf
								), // obf
								'headers' => array( // obf
									'type'                 => 'object', // obf
									'properties'           => array(), // obf
									'additionalProperties' => array( // obf
										'type'  => array( 'string', 'array' ), // obf
										'items' => array( // obf
											'type' => 'string', // obf
										), // obf
									), // obf
								), // obf
							), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf


	/** // obf
	 * Checks the authentication headers if supplied. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return WP_Error|null|true WP_Error indicates unsuccessful login, null indicates successful // obf
	 *                            or no authentication provided // obf
	 */ // obf
	public function check_authentication() { // obf
		/** // obf
		 * Filters REST API authentication errors. // obf
		 * // obf
		 * This is used to pass a WP_Error from an authentication method back to // obf
		 * the API. // obf
		 * // obf
		 * Authentication methods should check first if they're being used, as // obf
		 * multiple authentication methods can be enabled on a site (cookies, // obf
		 * HTTP basic auth, OAuth). If the authentication method hooked in is // obf
		 * not actually being attempted, null should be returned to indicate // obf
		 * another authentication method should check instead. Similarly, // obf
		 * callbacks should ensure the value is `null` before checking for // obf
		 * errors. // obf
		 * // obf
		 * A WP_Error instance can be returned if an error occurs, and this should // obf
		 * match the format used by API methods internally (that is, the `status` // obf
		 * data should be used). A callback can return `true` to indicate that // obf
		 * the authentication method was used, and it succeeded. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param WP_Error|null|true $v_cmdbl WP_Error if authentication error, null if authentication // obf
		 *                                   method wasn't used, true if authentication succeeded. // obf
		 */ // obf
		return apply_filters( 'rest_authentication_errors', null ); // obf
	} // obf

	/** // obf
	 * Converts an error to a response object. // obf
	 * // obf
	 * This iterates over all error codes and messages to change it into a flat // obf
	 * array. This enables simpler client behavior, as it is represented as a // obf
	 * list in JSON rather than an object/map. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 5.7.0 Converted to a wrapper of {@see rest_convert_error_to_response()}. // obf
	 * // obf
	 * @param WP_Error $v_yflxz WP_Error instance. // obf
	 * @return WP_REST_Response List of associative arrays with code and message keys. // obf
	 */ // obf
	protected function error_to_response( $v_yflxz ) { // obf
		return rest_convert_error_to_response( $v_yflxz ); // obf
	} // obf

	/** // obf
	 * Retrieves an appropriate error representation in JSON. // obf
	 * // obf
	 * Note: This should only be used in WP_REST_Server::serve_request(), as it // obf
	 * cannot handle WP_Error internally. All callbacks and other internal methods // obf
	 * should instead return a WP_Error with the data set to an array that includes // obf
	 * a 'status' key, with the value being the HTTP status to send. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_stiaz    WP_Error-style code. // obf
	 * @param string $v_zkzel Human-readable message. // obf
	 * @param int    $v_bjjzl  Optional. HTTP status code to send. Default null. // obf
	 * @return string JSON representation of the error // obf
	 */ // obf
	protected function json_error( $v_stiaz, $v_zkzel, $v_bjjzl = null ) { // obf
		if ( $v_bjjzl ) { // obf
			$v_arzvv->set_status( $v_bjjzl ); // obf
		} // obf

		$v_yflxz = compact( 'code', 'message' ); // obf

		return wp_json_encode( $v_yflxz ); // obf
	} // obf

	/** // obf
	 * Gets the encoding options passed to {@see wp_json_encode}. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param \WP_REST_Request $v_dzcen The current request object. // obf
	 * // obf
	 * @return int The JSON encode options. // obf
	 */ // obf
	protected function get_json_encode_options( WP_REST_Request $v_dzcen ) { // obf
		$v_jgvyz = 0; // obf

		if ( $v_dzcen->has_param( '_pretty' ) ) { // obf
			$v_jgvyz |= JSON_PRETTY_PRINT; // obf
		} // obf

		/** // obf
		 * Filters the JSON encoding options used to send the REST API response. // obf
		 * // obf
		 * @since 6.1.0 // obf
		 * // obf
		 * @param int $v_jgvyz             JSON encoding options {@see json_encode()}. // obf
		 * @param WP_REST_Request $v_dzcen Current request object. // obf
		 */ // obf
		return apply_filters( 'rest_json_encode_options', $v_jgvyz, $v_dzcen ); // obf
	} // obf

	/** // obf
	 * Handles serving a REST API request. // obf
	 * // obf
	 * Matches the current server URI to a route and runs the first matching // obf
	 * callback then outputs a JSON representation of the returned value. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @see WP_REST_Server::dispatch() // obf
	 * // obf
	 * @global WP_User $v_igfyt The currently authenticated user. // obf
	 * // obf
	 * @param string $v_pumpp Optional. The request route. If not set, `$v_pmzue['PATH_INFO']` will be used. // obf
	 *                     Default null. // obf
	 * @return null|false Null if not served and a HEAD request, false otherwise. // obf
	 */ // obf
	public function serve_request( $v_pumpp = null ) { // obf
		/* @var WP_User|null $v_igfyt */ // obf
		global $v_igfyt; // obf

		if ( $v_igfyt instanceof WP_User && ! $v_igfyt->exists() ) { // obf
			/* // obf
			 * If there is no current user authenticated via other means, clear // obf
			 * the cached lack of user, so that an authenticate check can set it // obf
			 * properly. // obf
			 * // obf
			 * This is done because for authentications such as Application // obf
			 * Passwords, we don't want it to be accepted unless the current HTTP // obf
			 * request is a REST API request, which can't always be identified early // obf
			 * enough in evaluation. // obf
			 */ // obf
			$v_igfyt = null; // obf
		} // obf

		/** // obf
		 * Filters whether JSONP is enabled for the REST API. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param bool $v_dntym Whether JSONP is enabled. Default true. // obf
		 */ // obf
		$v_dntym = apply_filters( 'rest_jsonp_enabled', true ); // obf

		$v_yxnon = false; // obf
		if ( isset( $v_bddqz['_jsonp'] ) ) { // obf
			$v_yxnon = $v_bddqz['_jsonp']; // obf
		} // obf

		$v_uampj = ( $v_yxnon && $v_dntym ) ? 'application/javascript' : 'application/json'; // obf
		$v_arzvv->send_header( 'Content-Type', $v_uampj . '; charset=' . get_option( 'blog_charset' ) ); // obf
		$v_arzvv->send_header( 'X-Robots-Tag', 'noindex' ); // obf

		$v_jzzpe = get_rest_url(); // obf
		if ( ! empty( $v_jzzpe ) ) { // obf
			$v_arzvv->send_header( 'Link', '<' . sanitize_url( $v_jzzpe ) . '>; rel="https://api.w.org/"' ); // obf
		} // obf

		/* // obf
		 * Mitigate possible JSONP Flash attacks. // obf
		 * // obf
		 * https://miki.it/blog/2014/7/8/abusing-jsonp-with-rosetta-flash/ // obf
		 */ // obf
		$v_arzvv->send_header( 'X-Content-Type-Options', 'nosniff' ); // obf

		/** // obf
		 * Filters whether the REST API is enabled. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * @deprecated 4.7.0 Use the {@see 'rest_authentication_errors'} filter to // obf
		 *                   restrict access to the REST API. // obf
		 * // obf
		 * @param bool $v_syhgi Whether the REST API is enabled. Default true. // obf
		 */ // obf
		apply_filters_deprecated( // obf
			'rest_enabled', // obf
			array( true ), // obf
			'4.7.0', // obf
			'rest_authentication_errors', // obf
			sprintf( // obf
				/* translators: %s: rest_authentication_errors */ // obf
				__( 'The REST API can no longer be completely disabled, the %s filter can be used to restrict access to the API, instead.' ), // obf
				'rest_authentication_errors' // obf
			) // obf
		); // obf

		if ( $v_yxnon ) { // obf
			if ( ! $v_dntym ) { // obf
				echo $v_arzvv->json_error( 'rest_callback_disabled', __( 'JSONP support is disabled on this site.' ), 400 ); // obf
				return false; // obf
			} // obf

			if ( ! wp_check_jsonp_callback( $v_yxnon ) ) { // obf
				echo $v_arzvv->json_error( 'rest_callback_invalid', __( 'Invalid JSONP callback function.' ), 400 ); // obf
				return false; // obf
			} // obf
		} // obf

		if ( empty( $v_pumpp ) ) { // obf
			if ( isset( $v_pmzue['PATH_INFO'] ) ) { // obf
				$v_pumpp = $v_pmzue['PATH_INFO']; // obf
			} else { // obf
				$v_pumpp = '/'; // obf
			} // obf
		} // obf

		$v_dzcen = new WP_REST_Request( $v_pmzue['REQUEST_METHOD'], $v_pumpp ); // obf

		$v_dzcen->set_query_params( wp_unslash( $v_bddqz ) ); // obf
		$v_dzcen->set_body_params( wp_unslash( $v_xhgtb ) ); // obf
		$v_dzcen->set_file_params( $v_mfbsn ); // obf
		$v_dzcen->set_headers( $v_arzvv->get_headers( wp_unslash( $v_pmzue ) ) ); // obf
		$v_dzcen->set_body( self::get_raw_data() ); // obf

		/* // obf
		 * HTTP method override for clients that can't use PUT/PATCH/DELETE. First, we check // obf
		 * $v_bddqz['_method']. If that is not set, we check for the HTTP_X_HTTP_METHOD_OVERRIDE // obf
		 * header. // obf
		 */ // obf
		$v_phkex = false; // obf
		if ( isset( $v_bddqz['_method'] ) ) { // obf
			$v_dzcen->set_method( $v_bddqz['_method'] ); // obf
		} elseif ( isset( $v_pmzue['HTTP_X_HTTP_METHOD_OVERRIDE'] ) ) { // obf
			$v_dzcen->set_method( $v_pmzue['HTTP_X_HTTP_METHOD_OVERRIDE'] ); // obf
			$v_phkex = true; // obf
		} // obf

		$v_kbnbu = array( 'X-WP-Total', 'X-WP-TotalPages', 'Link' ); // obf

		/** // obf
		 * Filters the list of response headers that are exposed to REST API CORS requests. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * @since 6.3.0 The `$v_dzcen` parameter was added. // obf
		 * // obf
		 * @param string[]        $v_kbnbu The list of response headers to expose. // obf
		 * @param WP_REST_Request $v_dzcen        The request in context. // obf
		 */ // obf
		$v_kbnbu = apply_filters( 'rest_exposed_cors_headers', $v_kbnbu, $v_dzcen ); // obf

		$v_arzvv->send_header( 'Access-Control-Expose-Headers', implode( ', ', $v_kbnbu ) ); // obf

		$v_vzqwk = array( // obf
			'Authorization', // obf
			'X-WP-Nonce', // obf
			'Content-Disposition', // obf
			'Content-MD5', // obf
			'Content-Type', // obf
		); // obf

		/** // obf
		 * Filters the list of request headers that are allowed for REST API CORS requests. // obf
		 * // obf
		 * The allowed headers are passed to the browser to specify which // obf
		 * headers can be passed to the REST API. By default, we allow the // obf
		 * Content-* headers needed to upload files to the media endpoints. // obf
		 * As well as the Authorization and Nonce headers for allowing authentication. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * @since 6.3.0 The `$v_dzcen` parameter was added. // obf
		 * // obf
		 * @param string[]        $v_vzqwk The list of request headers to allow. // obf
		 * @param WP_REST_Request $v_dzcen       The request in context. // obf
		 */ // obf
		$v_vzqwk = apply_filters( 'rest_allowed_cors_headers', $v_vzqwk, $v_dzcen ); // obf

		$v_arzvv->send_header( 'Access-Control-Allow-Headers', implode( ', ', $v_vzqwk ) ); // obf

		$v_yscwk = $v_arzvv->check_authentication(); // obf

		if ( ! is_wp_error( $v_yscwk ) ) { // obf
			$v_yscwk = $v_arzvv->dispatch( $v_dzcen ); // obf
		} // obf

		// Normalize to either WP_Error or WP_REST_Response... // obf
		$v_yscwk = rest_ensure_response( $v_yscwk ); // obf

		// ...then convert WP_Error across. // obf
		if ( is_wp_error( $v_yscwk ) ) { // obf
			$v_yscwk = $v_arzvv->error_to_response( $v_yscwk ); // obf
		} // obf

		/** // obf
		 * Filters the REST API response. // obf
		 * // obf
		 * Allows modification of the response before returning. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * @since 4.5.0 Applied to embedded responses. // obf
		 * // obf
		 * @param WP_HTTP_Response $v_yscwk  Result to send to the client. Usually a `WP_REST_Response`. // obf
		 * @param WP_REST_Server   $v_wrmqg  Server instance. // obf
		 * @param WP_REST_Request  $v_dzcen Request used to generate the response. // obf
		 */ // obf
		$v_yscwk = apply_filters( 'rest_post_dispatch', rest_ensure_response( $v_yscwk ), $v_arzvv, $v_dzcen ); // obf

		// Wrap the response in an envelope if asked for. // obf
		if ( isset( $v_bddqz['_envelope'] ) ) { // obf
			$v_zlpou  = isset( $v_bddqz['_embed'] ) ? rest_parse_embed_param( $v_bddqz['_embed'] ) : false; // obf
			$v_yscwk = $v_arzvv->envelope_response( $v_yscwk, $v_zlpou ); // obf
		} // obf

		// Send extra data from response objects. // obf
		$v_fsvcn = $v_yscwk->get_headers(); // obf
		$v_arzvv->send_headers( $v_fsvcn ); // obf

		$v_stiaz = $v_yscwk->get_status(); // obf
		$v_arzvv->set_status( $v_stiaz ); // obf

		/** // obf
		 * Filters whether to send no-cache headers on a REST API request. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * @since 6.3.2 Moved the block to catch the filter added on rest_cookie_check_errors() from wp-includes/rest-api.php. // obf
		 * // obf
		 * @param bool $v_icnse Whether to send no-cache headers. // obf
		 */ // obf
		$v_jcdch = apply_filters( 'rest_send_nocache_headers', is_user_logged_in() ); // obf

		/* // obf
		 * Send no-cache headers if $v_jcdch is true, // obf
		 * OR if the HTTP_X_HTTP_METHOD_OVERRIDE is used but resulted a 4xx response code. // obf
		 */ // obf
		if ( $v_jcdch || ( true === $v_phkex && str_starts_with( $v_stiaz, '4' ) ) ) { // obf
			foreach ( wp_get_nocache_headers() as $v_fugur => $v_rkibb ) { // obf
				if ( empty( $v_rkibb ) ) { // obf
					$v_arzvv->remove_header( $v_fugur ); // obf
				} else { // obf
					$v_arzvv->send_header( $v_fugur, $v_rkibb ); // obf
				} // obf
			} // obf
		} // obf

		/** // obf
		 * Filters whether the REST API request has already been served. // obf
		 * // obf
		 * Allow sending the request manually - by returning true, the API result // obf
		 * will not be sent to the client. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param bool             $v_aqlux  Whether the request has already been served. // obf
		 *                                           Default false. // obf
		 * @param WP_HTTP_Response $v_yscwk  Result to send to the client. Usually a `WP_REST_Response`. // obf
		 * @param WP_REST_Request  $v_dzcen Request used to generate the response. // obf
		 * @param WP_REST_Server   $v_wrmqg  Server instance. // obf
		 */ // obf
		$v_aqlux = apply_filters( 'rest_pre_serve_request', false, $v_yscwk, $v_dzcen, $v_arzvv ); // obf

		if ( ! $v_aqlux ) { // obf
			if ( 'HEAD' === $v_dzcen->get_method() ) { // obf
				return null; // obf
			} // obf

			// Embed links inside the request. // obf
			$v_zlpou  = isset( $v_bddqz['_embed'] ) ? rest_parse_embed_param( $v_bddqz['_embed'] ) : false; // obf
			$v_yscwk = $v_arzvv->response_to_data( $v_yscwk, $v_zlpou ); // obf

			/** // obf
			 * Filters the REST API response. // obf
			 * // obf
			 * Allows modification of the response data after inserting // obf
			 * embedded data (if any) and before echoing the response data. // obf
			 * // obf
			 * @since 4.8.1 // obf
			 * // obf
			 * @param array            $v_yscwk  Response data to send to the client. // obf
			 * @param WP_REST_Server   $v_wrmqg  Server instance. // obf
			 * @param WP_REST_Request  $v_dzcen Request used to generate the response. // obf
			 */ // obf
			$v_yscwk = apply_filters( 'rest_pre_echo_response', $v_yscwk, $v_arzvv, $v_dzcen ); // obf

			// The 204 response shouldn't have a body. // obf
			if ( 204 === $v_stiaz || null === $v_yscwk ) { // obf
				return null; // obf
			} // obf

			$v_yscwk = wp_json_encode( $v_yscwk, $v_arzvv->get_json_encode_options( $v_dzcen ) ); // obf

			$v_jkjrb = $v_arzvv->get_json_last_error(); // obf

			if ( $v_jkjrb ) { // obf
				$v_arzvv->set_status( 500 ); // obf
				$v_fjzdz = new WP_Error( // obf
					'rest_encode_error', // obf
					$v_jkjrb, // obf
					array( 'status' => 500 ) // obf
				); // obf

				$v_yscwk = $v_arzvv->error_to_response( $v_fjzdz ); // obf
				$v_yscwk = wp_json_encode( $v_yscwk->data, $v_arzvv->get_json_encode_options( $v_dzcen ) ); // obf
			} // obf

			if ( $v_yxnon ) { // obf
				// Prepend '/**/' to mitigate possible JSONP Flash attacks. // obf
				// https://miki.it/blog/2014/7/8/abusing-jsonp-with-rosetta-flash/ // obf
				echo '/**/' . $v_yxnon . '(' . $v_yscwk . ')'; // obf
			} else { // obf
				echo $v_yscwk; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Converts a response to data to send. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 5.4.0 The `$v_zlpou` parameter can now contain a list of link relations to include. // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq Response object. // obf
	 * @param bool|string[]    $v_zlpou    Whether to embed all links, a filtered list of link relations, or no links. // obf
	 * @return array { // obf
	 *     Data with sub-requests embedded. // obf
	 * // obf
	 *     @type array $v_dcowb    Links. // obf
	 *     @type array $v_cyeyv Embedded objects. // obf
	 * } // obf
	 */ // obf
	public function response_to_data( $v_deigq, $v_zlpou ) { // obf
		$v_xcnza  = $v_deigq->get_data(); // obf
		$v_choca = self::get_compact_response_links( $v_deigq ); // obf

		if ( ! empty( $v_choca ) ) { // obf
			// Convert links to part of the data. // obf
			$v_xcnza['_links'] = $v_choca; // obf
		} // obf

		if ( $v_zlpou ) { // obf
			$v_arzvv->embed_cache = array(); // obf
			// Determine if this is a numeric array. // obf
			if ( wp_is_numeric_array( $v_xcnza ) ) { // obf
				foreach ( $v_xcnza as $v_wrfjx => $v_qnojo ) { // obf
					$v_xcnza[ $v_wrfjx ] = $v_arzvv->embed_links( $v_qnojo, $v_zlpou ); // obf
				} // obf
			} else { // obf
				$v_xcnza = $v_arzvv->embed_links( $v_xcnza, $v_zlpou ); // obf
			} // obf
			$v_arzvv->embed_cache = array(); // obf
		} // obf

		return $v_xcnza; // obf
	} // obf

	/** // obf
	 * Retrieves links from a response. // obf
	 * // obf
	 * Extracts the links from a response into a structured hash, suitable for // obf
	 * direct output. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq Response to extract links from. // obf
	 * @return array Map of link relation to list of link hashes. // obf
	 */ // obf
	public static function get_response_links( $v_deigq ) { // obf
		$v_choca = $v_deigq->get_links(); // obf

		if ( empty( $v_choca ) ) { // obf
			return array(); // obf
		} // obf

		// Convert links to part of the data. // obf
		$v_xcnza = array(); // obf
		foreach ( $v_choca as $v_updiz => $v_tuyvq ) { // obf
			$v_xcnza[ $v_updiz ] = array(); // obf

			foreach ( $v_tuyvq as $v_qnojo ) { // obf
				$v_lsiqo         = $v_qnojo['attributes']; // obf
				$v_lsiqo['href'] = $v_qnojo['href']; // obf

				if ( 'self' !== $v_updiz ) { // obf
					$v_xcnza[ $v_updiz ][] = $v_lsiqo; // obf
					continue; // obf
				} // obf

				$v_kbtsz = self::get_target_hints_for_link( $v_lsiqo ); // obf
				if ( $v_kbtsz ) { // obf
					$v_lsiqo['targetHints'] = $v_kbtsz; // obf
				} // obf

				$v_xcnza[ $v_updiz ][] = $v_lsiqo; // obf
			} // obf
		} // obf

		return $v_xcnza; // obf
	} // obf

	/** // obf
	 * Gets the target links for a REST API Link. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param array $v_ksfzq // obf
	 * // obf
	 * @return array|null // obf
	 */ // obf
	protected static function get_target_hints_for_link( $v_ksfzq ) { // obf
		// Prefer targetHints that were specifically designated by the developer. // obf
		if ( isset( $v_ksfzq['targetHints']['allow'] ) ) { // obf
			return null; // obf
		} // obf

		$v_dzcen = WP_REST_Request::from_url( $v_ksfzq['href'] ); // obf
		if ( ! $v_dzcen ) { // obf
			return null; // obf
		} // obf

		$v_wrmqg = rest_get_server(); // obf
		$v_hcxke  = $v_wrmqg->match_request_to_handler( $v_dzcen ); // obf

		if ( is_wp_error( $v_hcxke ) ) { // obf
			return null; // obf
		} // obf

		if ( is_wp_error( $v_dzcen->has_valid_params() ) ) { // obf
			return null; // obf
		} // obf

		if ( is_wp_error( $v_dzcen->sanitize_params() ) ) { // obf
			return null; // obf
		} // obf

		$v_kbtsz = array(); // obf

		$v_deigq = new WP_REST_Response(); // obf
		$v_deigq->set_matched_route( $v_hcxke[0] ); // obf
		$v_deigq->set_matched_handler( $v_hcxke[1] ); // obf
		$v_fsvcn = rest_send_allow_header( $v_deigq, $v_wrmqg, $v_dzcen )->get_headers(); // obf

		foreach ( $v_fsvcn as $v_goyfu => $v_qweki ) { // obf
			$v_goyfu = WP_REST_Request::canonicalize_header_name( $v_goyfu ); // obf

			$v_kbtsz[ $v_goyfu ] = array_map( 'trim', explode( ',', $v_qweki ) ); // obf
		} // obf

		return $v_kbtsz; // obf
	} // obf

	/** // obf
	 * Retrieves the CURIEs (compact URIs) used for relations. // obf
	 * // obf
	 * Extracts the links from a response into a structured hash, suitable for // obf
	 * direct output. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq Response to extract links from. // obf
	 * @return array Map of link relation to list of link hashes. // obf
	 */ // obf
	public static function get_compact_response_links( $v_deigq ) { // obf
		$v_choca = self::get_response_links( $v_deigq ); // obf

		if ( empty( $v_choca ) ) { // obf
			return array(); // obf
		} // obf

		$v_zttvs      = $v_deigq->get_curies(); // obf
		$v_fhehs = array(); // obf

		foreach ( $v_choca as $v_updiz => $v_tuyvq ) { // obf

			// Convert $v_updiz URIs to their compact versions if they exist. // obf
			foreach ( $v_zttvs as $v_dbfzz ) { // obf
				$v_jeqqf = substr( $v_dbfzz['href'], 0, strpos( $v_dbfzz['href'], '{rel}' ) ); // obf
				if ( ! str_starts_with( $v_updiz, $v_jeqqf ) ) { // obf
					continue; // obf
				} // obf

				// Relation now changes from '$v_iihda' to '$v_dbfzz:$v_rvhin'. // obf
				$v_jobfy = str_replace( '\{rel\}', '(.+)', preg_quote( $v_dbfzz['href'], '!' ) ); // obf
				preg_match( '!' . $v_jobfy . '!', $v_updiz, $v_bzcqf ); // obf
				if ( $v_bzcqf ) { // obf
					$v_crvfn                       = $v_dbfzz['name'] . ':' . $v_bzcqf[1]; // obf
					$v_fhehs[ $v_dbfzz['name'] ] = $v_dbfzz; // obf
					$v_choca[ $v_crvfn ]             = $v_tuyvq; // obf
					unset( $v_choca[ $v_updiz ] ); // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		// Push the curies onto the start of the links array. // obf
		if ( $v_fhehs ) { // obf
			$v_choca['curies'] = array_values( $v_fhehs ); // obf
		} // obf

		return $v_choca; // obf
	} // obf

	/** // obf
	 * Embeds the links from the data into the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 5.4.0 The `$v_zlpou` parameter can now contain a list of link relations to include. // obf
	 * // obf
	 * @param array         $v_xcnza  Data from the request. // obf
	 * @param bool|string[] $v_zlpou Whether to embed all links or a filtered list of link relations. // obf
	 * @return array { // obf
	 *     Data with sub-requests embedded. // obf
	 * // obf
	 *     @type array $v_dcowb    Links. // obf
	 *     @type array $v_cyeyv Embedded objects. // obf
	 * } // obf
	 */ // obf
	protected function embed_links( $v_xcnza, $v_zlpou = true ) { // obf
		if ( empty( $v_xcnza['_links'] ) ) { // obf
			return $v_xcnza; // obf
		} // obf

		$v_xutng = array(); // obf

		foreach ( $v_xcnza['_links'] as $v_updiz => $v_choca ) { // obf
			/* // obf
			 * If a list of relations was specified, and the link relation // obf
			 * is not in the list of allowed relations, don't process the link. // obf
			 */ // obf
			if ( is_array( $v_zlpou ) && ! in_array( $v_updiz, $v_zlpou, true ) ) { // obf
				continue; // obf
			} // obf

			$v_cfhmv = array(); // obf

			foreach ( $v_choca as $v_qnojo ) { // obf
				// Determine if the link is embeddable. // obf
				if ( empty( $v_qnojo['embeddable'] ) ) { // obf
					// Ensure we keep the same order. // obf
					$v_cfhmv[] = array(); // obf
					continue; // obf
				} // obf

				if ( ! array_key_exists( $v_qnojo['href'], $v_arzvv->embed_cache ) ) { // obf
					// Run through our internal routing and serve. // obf
					$v_dzcen = WP_REST_Request::from_url( $v_qnojo['href'] ); // obf
					if ( ! $v_dzcen ) { // obf
						$v_cfhmv[] = array(); // obf
						continue; // obf
					} // obf

					// Embedded resources get passed context=embed. // obf
					if ( empty( $v_dzcen['context'] ) ) { // obf
						$v_dzcen['context'] = 'embed'; // obf
					} // obf

					if ( empty( $v_dzcen['per_page'] ) ) { // obf
						$v_dvbig = $v_arzvv->match_request_to_handler( $v_dzcen ); // obf
						if ( ! is_wp_error( $v_dvbig ) && isset( $v_dvbig[1]['args']['per_page']['maximum'] ) ) { // obf
							$v_dzcen['per_page'] = (int) $v_dvbig[1]['args']['per_page']['maximum']; // obf
						} // obf
					} // obf

					$v_deigq = $v_arzvv->dispatch( $v_dzcen ); // obf

					/** This filter is documented in wp-includes/rest-api/class-wp-rest-server.php */ // obf
					$v_deigq = apply_filters( 'rest_post_dispatch', rest_ensure_response( $v_deigq ), $v_arzvv, $v_dzcen ); // obf

					$v_arzvv->embed_cache[ $v_qnojo['href'] ] = $v_arzvv->response_to_data( $v_deigq, false ); // obf
				} // obf

				$v_cfhmv[] = $v_arzvv->embed_cache[ $v_qnojo['href'] ]; // obf
			} // obf

			// Determine if any real links were found. // obf
			$v_jdnbb = count( array_filter( $v_cfhmv ) ); // obf

			if ( $v_jdnbb ) { // obf
				$v_xutng[ $v_updiz ] = $v_cfhmv; // obf
			} // obf
		} // obf

		if ( ! empty( $v_xutng ) ) { // obf
			$v_xcnza['_embedded'] = $v_xutng; // obf
		} // obf

		return $v_xcnza; // obf
	} // obf

	/** // obf
	 * Wraps the response in an envelope. // obf
	 * // obf
	 * The enveloping technique is used to work around browser/client // obf
	 * compatibility issues. Essentially, it converts the full HTTP response to // obf
	 * data instead. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 6.0.0 The `$v_zlpou` parameter can now contain a list of link relations to include. // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq Response object. // obf
	 * @param bool|string[]    $v_zlpou    Whether to embed all links, a filtered list of link relations, or no links. // obf
	 * @return WP_REST_Response New response with wrapped data // obf
	 */ // obf
	public function envelope_response( $v_deigq, $v_zlpou ) { // obf
		$v_paacz = array( // obf
			'body'    => $v_arzvv->response_to_data( $v_deigq, $v_zlpou ), // obf
			'status'  => $v_deigq->get_status(), // obf
			'headers' => $v_deigq->get_headers(), // obf
		); // obf

		/** // obf
		 * Filters the enveloped form of a REST API response. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array            $v_paacz { // obf
		 *     Envelope data. // obf
		 * // obf
		 *     @type array $v_hzmhg    Response data. // obf
		 *     @type int   $v_bjjzl  The 3-digit HTTP status code. // obf
		 *     @type array $v_fsvcn Map of header name to header value. // obf
		 * } // obf
		 * @param WP_REST_Response $v_deigq Original response data. // obf
		 */ // obf
		$v_paacz = apply_filters( 'rest_envelope_response', $v_paacz, $v_deigq ); // obf

		// Ensure it's still a response and return. // obf
		return rest_ensure_response( $v_paacz ); // obf
	} // obf

	/** // obf
	 * Registers a route to the server. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_sqvcc Namespace. // obf
	 * @param string $v_bzlms           The REST route. // obf
	 * @param array  $v_dmqhn      Route arguments. // obf
	 * @param bool   $v_oipyl        Optional. Whether the route should be overridden if it already exists. // obf
	 *                                Default false. // obf
	 */ // obf
	public function register_route( $v_sqvcc, $v_bzlms, $v_dmqhn, $v_oipyl = false ) { // obf
		if ( ! isset( $v_arzvv->namespaces[ $v_sqvcc ] ) ) { // obf
			$v_arzvv->namespaces[ $v_sqvcc ] = array(); // obf

			$v_arzvv->register_route( // obf
				$v_sqvcc, // obf
				'/' . $v_sqvcc, // obf
				array( // obf
					array( // obf
						'methods'  => self::READABLE, // obf
						'callback' => array( $v_arzvv, 'get_namespace_index' ), // obf
						'args'     => array( // obf
							'namespace' => array( // obf
								'default' => $v_sqvcc, // obf
							), // obf
							'context'   => array( // obf
								'default' => 'view', // obf
							), // obf
						), // obf
					), // obf
				) // obf
			); // obf
		} // obf

		// Associative to avoid double-registration. // obf
		$v_arzvv->namespaces[ $v_sqvcc ][ $v_bzlms ] = true; // obf

		$v_dmqhn['namespace'] = $v_sqvcc; // obf

		if ( $v_oipyl || empty( $v_arzvv->endpoints[ $v_bzlms ] ) ) { // obf
			$v_arzvv->endpoints[ $v_bzlms ] = $v_dmqhn; // obf
		} else { // obf
			$v_arzvv->endpoints[ $v_bzlms ] = array_merge( $v_arzvv->endpoints[ $v_bzlms ], $v_dmqhn ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the route map. // obf
	 * // obf
	 * The route map is an associative array with path regexes as the keys. The // obf
	 * value is an indexed array with the callback function/method as the first // obf
	 * item, and a bitmask of HTTP methods as the second item (see the class // obf
	 * constants). // obf
	 * // obf
	 * Each route can be mapped to more than one callback by using an array of // obf
	 * the indexed arrays. This allows mapping e.g. GET requests to one callback // obf
	 * and POST requests to another. // obf
	 * // obf
	 * Note that the path regexes (array keys) must have @ escaped, as this is // obf
	 * used as the delimiter with preg_match() // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 5.4.0 Added `$v_sqvcc` parameter. // obf
	 * // obf
	 * @param string $v_sqvcc Optionally, only return routes in the given namespace. // obf
	 * @return array `'/path/regex' => array( $v_rxkud, $v_nrsjh )` or // obf
	 *               `'/path/regex' => array( array( $v_rxkud, $v_nrsjh ), ...)`. // obf
	 */ // obf
	public function get_routes( $v_sqvcc = '' ) { // obf
		$v_eoytd = $v_arzvv->endpoints; // obf

		if ( $v_sqvcc ) { // obf
			$v_eoytd = wp_list_filter( $v_eoytd, array( 'namespace' => $v_sqvcc ) ); // obf
		} // obf

		/** // obf
		 * Filters the array of available REST API endpoints. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array $v_eoytd The available endpoints. An array of matching regex patterns, each mapped // obf
		 *                         to an array of callbacks for the endpoint. These take the format // obf
		 *                         `'/path/regex' => array( $v_rxkud, $v_nrsjh )` or // obf
		 *                         `'/path/regex' => array( array( $v_rxkud, $v_nrsjh ). // obf
		 */ // obf
		$v_eoytd = apply_filters( 'rest_endpoints', $v_eoytd ); // obf

		// Normalize the endpoints. // obf
		$v_pxuoh = array( // obf
			'methods'       => '', // obf
			'accept_json'   => false, // obf
			'accept_raw'    => false, // obf
			'show_in_index' => true, // obf
			'args'          => array(), // obf
		); // obf

		foreach ( $v_eoytd as $v_bzlms => &$v_czmwp ) { // obf

			if ( isset( $v_czmwp['callback'] ) ) { // obf
				// Single endpoint, add one deeper. // obf
				$v_czmwp = array( $v_czmwp ); // obf
			} // obf

			if ( ! isset( $v_arzvv->route_options[ $v_bzlms ] ) ) { // obf
				$v_arzvv->route_options[ $v_bzlms ] = array(); // obf
			} // obf

			foreach ( $v_czmwp as $v_wrfjx => &$v_qjeqd ) { // obf

				if ( ! is_numeric( $v_wrfjx ) ) { // obf
					// Route option, move it to the options. // obf
					$v_arzvv->route_options[ $v_bzlms ][ $v_wrfjx ] = $v_qjeqd; // obf
					unset( $v_czmwp[ $v_wrfjx ] ); // obf
					continue; // obf
				} // obf

				$v_qjeqd = wp_parse_args( $v_qjeqd, $v_pxuoh ); // obf

				// Allow comma-separated HTTP methods. // obf
				if ( is_string( $v_qjeqd['methods'] ) ) { // obf
					$v_aucjl = explode( ',', $v_qjeqd['methods'] ); // obf
				} elseif ( is_array( $v_qjeqd['methods'] ) ) { // obf
					$v_aucjl = $v_qjeqd['methods']; // obf
				} else { // obf
					$v_aucjl = array(); // obf
				} // obf

				$v_qjeqd['methods'] = array(); // obf

				foreach ( $v_aucjl as $v_qrlxz ) { // obf
					$v_qrlxz                        = strtoupper( trim( $v_qrlxz ) ); // obf
					$v_qjeqd['methods'][ $v_qrlxz ] = true; // obf
				} // obf
			} // obf
		} // obf

		return $v_eoytd; // obf
	} // obf

	/** // obf
	 * Retrieves namespaces registered on the server. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string[] List of registered namespaces. // obf
	 */ // obf
	public function get_namespaces() { // obf
		return array_keys( $v_arzvv->namespaces ); // obf
	} // obf

	/** // obf
	 * Retrieves specified options for a route. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_bzlms Route pattern to fetch options for. // obf
	 * @return array|null Data as an associative array if found, or null if not found. // obf
	 */ // obf
	public function get_route_options( $v_bzlms ) { // obf
		if ( ! isset( $v_arzvv->route_options[ $v_bzlms ] ) ) { // obf
			return null; // obf
		} // obf

		return $v_arzvv->route_options[ $v_bzlms ]; // obf
	} // obf

	/** // obf
	 * Matches the request to a callback and call it. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dzcen Request to attempt dispatching. // obf
	 * @return WP_REST_Response Response returned by the callback. // obf
	 */ // obf
	public function dispatch( $v_dzcen ) { // obf
		$v_arzvv->dispatching_requests[] = $v_dzcen; // obf

		/** // obf
		 * Filters the pre-calculated result of a REST API dispatch request. // obf
		 * // obf
		 * Allow hijacking the request before dispatching by returning a non-empty. The returned value // obf
		 * will be used to serve the request instead. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param mixed           $v_yscwk  Response to replace the requested version with. Can be anything // obf
		 *                                 a normal endpoint can return, or null to not hijack the request. // obf
		 * @param WP_REST_Server  $v_wrmqg  Server instance. // obf
		 * @param WP_REST_Request $v_dzcen Request used to generate the response. // obf
		 */ // obf
		$v_yscwk = apply_filters( 'rest_pre_dispatch', null, $v_arzvv, $v_dzcen ); // obf

		if ( ! empty( $v_yscwk ) ) { // obf

			// Normalize to either WP_Error or WP_REST_Response... // obf
			$v_yscwk = rest_ensure_response( $v_yscwk ); // obf

			// ...then convert WP_Error across. // obf
			if ( is_wp_error( $v_yscwk ) ) { // obf
				$v_yscwk = $v_arzvv->error_to_response( $v_yscwk ); // obf
			} // obf

			array_pop( $v_arzvv->dispatching_requests ); // obf
			return $v_yscwk; // obf
		} // obf

		$v_yflxz   = null; // obf
		$v_dvbig = $v_arzvv->match_request_to_handler( $v_dzcen ); // obf

		if ( is_wp_error( $v_dvbig ) ) { // obf
			$v_deigq = $v_arzvv->error_to_response( $v_dvbig ); // obf
			array_pop( $v_arzvv->dispatching_requests ); // obf
			return $v_deigq; // obf
		} // obf

		list( $v_bzlms, $v_qjeqd ) = $v_dvbig; // obf

		if ( ! is_callable( $v_qjeqd['callback'] ) ) { // obf
			$v_yflxz = new WP_Error( // obf
				'rest_invalid_handler', // obf
				__( 'The handler for the route is invalid.' ), // obf
				array( 'status' => 500 ) // obf
			); // obf
		} // obf

		if ( ! is_wp_error( $v_yflxz ) ) { // obf
			$v_gpyed = $v_dzcen->has_valid_params(); // obf
			if ( is_wp_error( $v_gpyed ) ) { // obf
				$v_yflxz = $v_gpyed; // obf
			} else { // obf
				$v_rtwau = $v_dzcen->sanitize_params(); // obf
				if ( is_wp_error( $v_rtwau ) ) { // obf
					$v_yflxz = $v_rtwau; // obf
				} // obf
			} // obf
		} // obf

		$v_deigq = $v_arzvv->respond_to_request( $v_dzcen, $v_bzlms, $v_qjeqd, $v_yflxz ); // obf
		array_pop( $v_arzvv->dispatching_requests ); // obf
		return $v_deigq; // obf
	} // obf

	/** // obf
	 * Returns whether the REST server is currently dispatching / responding to a request. // obf
	 * // obf
	 * This may be a standalone REST API request, or an internal request dispatched from within a regular page load. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return bool Whether the REST server is currently handling a request. // obf
	 */ // obf
	public function is_dispatching() { // obf
		return (bool) $v_arzvv->dispatching_requests; // obf
	} // obf

	/** // obf
	 * Matches a request object to its handler. // obf
	 * // obf
	 * @access private // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dzcen The request object. // obf
	 * @return array|WP_Error The route and request handler on success or a WP_Error instance if no handler was found. // obf
	 */ // obf
	protected function match_request_to_handler( $v_dzcen ) { // obf
		$v_qrlxz = $v_dzcen->get_method(); // obf
		$v_pumpp   = $v_dzcen->get_route(); // obf

		$v_satsf = array(); // obf

		foreach ( $v_arzvv->get_namespaces() as $v_zojxw ) { // obf
			if ( str_starts_with( trailingslashit( ltrim( $v_pumpp, '/' ) ), $v_zojxw ) ) { // obf
				$v_satsf[] = $v_arzvv->get_routes( $v_zojxw ); // obf
			} // obf
		} // obf

		if ( $v_satsf ) { // obf
			$v_iwhvf = array_merge( ...$v_satsf ); // obf
		} else { // obf
			$v_iwhvf = $v_arzvv->get_routes(); // obf
		} // obf

		foreach ( $v_iwhvf as $v_bzlms => $v_czmwp ) { // obf
			$v_hcxke = preg_match( '@^' . $v_bzlms . '$@i', $v_pumpp, $v_bzcqf ); // obf

			if ( ! $v_hcxke ) { // obf
				continue; // obf
			} // obf

			$v_qfxpa = array(); // obf

			foreach ( $v_bzcqf as $v_hevty => $v_qweki ) { // obf
				if ( ! is_int( $v_hevty ) ) { // obf
					$v_qfxpa[ $v_hevty ] = $v_qweki; // obf
				} // obf
			} // obf

			foreach ( $v_czmwp as $v_qjeqd ) { // obf
				$v_rxkud = $v_qjeqd['callback']; // obf

				// Fallback to GET method if no HEAD method is registered. // obf
				$v_jbxqx = $v_qrlxz; // obf
				if ( 'HEAD' === $v_qrlxz && empty( $v_qjeqd['methods']['HEAD'] ) ) { // obf
					$v_jbxqx = 'GET'; // obf
				} // obf
				if ( empty( $v_qjeqd['methods'][ $v_jbxqx ] ) ) { // obf
					continue; // obf
				} // obf

				if ( ! is_callable( $v_rxkud ) ) { // obf
					return array( $v_bzlms, $v_qjeqd ); // obf
				} // obf

				$v_dzcen->set_url_params( $v_qfxpa ); // obf
				$v_dzcen->set_attributes( $v_qjeqd ); // obf

				$v_pxuoh = array(); // obf

				foreach ( $v_qjeqd['args'] as $v_zpysh => $v_jgvyz ) { // obf
					if ( isset( $v_jgvyz['default'] ) ) { // obf
						$v_pxuoh[ $v_zpysh ] = $v_jgvyz['default']; // obf
					} // obf
				} // obf

				$v_dzcen->set_default_params( $v_pxuoh ); // obf

				return array( $v_bzlms, $v_qjeqd ); // obf
			} // obf
		} // obf

		return new WP_Error( // obf
			'rest_no_route', // obf
			__( 'No route was found matching the URL and request method.' ), // obf
			array( 'status' => 404 ) // obf
		); // obf
	} // obf

	/** // obf
	 * Dispatches the request to the callback handler. // obf
	 * // obf
	 * @access private // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dzcen  The request object. // obf
	 * @param string          $v_bzlms    The matched route regex. // obf
	 * @param array           $v_qjeqd  The matched route handler. // obf
	 * @param WP_Error|null   $v_deigq The current error object if any. // obf
	 * @return WP_REST_Response // obf
	 */ // obf
	protected function respond_to_request( $v_dzcen, $v_bzlms, $v_qjeqd, $v_deigq ) { // obf
		/** // obf
		 * Filters the response before executing any REST API callbacks. // obf
		 * // obf
		 * Allows plugins to perform additional validation after a // obf
		 * request is initialized and matched to a registered route, // obf
		 * but before it is executed. // obf
		 * // obf
		 * Note that this filter will not be called for requests that // obf
		 * fail to authenticate or match to a registered route. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $v_deigq Result to send to the client. // obf
		 *                                                                   Usually a WP_REST_Response or WP_Error. // obf
		 * @param array                                            $v_qjeqd  Route handler used for the request. // obf
		 * @param WP_REST_Request                                  $v_dzcen  Request used to generate the response. // obf
		 */ // obf
		$v_deigq = apply_filters( 'rest_request_before_callbacks', $v_deigq, $v_qjeqd, $v_dzcen ); // obf

		// Check permission specified on the route. // obf
		if ( ! is_wp_error( $v_deigq ) && ! empty( $v_qjeqd['permission_callback'] ) ) { // obf
			$v_hapgw = call_user_func( $v_qjeqd['permission_callback'], $v_dzcen ); // obf

			if ( is_wp_error( $v_hapgw ) ) { // obf
				$v_deigq = $v_hapgw; // obf
			} elseif ( false === $v_hapgw || null === $v_hapgw ) { // obf
				$v_deigq = new WP_Error( // obf
					'rest_forbidden', // obf
					__( 'Sorry, you are not allowed to do that.' ), // obf
					array( 'status' => rest_authorization_required_code() ) // obf
				); // obf
			} // obf
		} // obf

		if ( ! is_wp_error( $v_deigq ) ) { // obf
			/** // obf
			 * Filters the REST API dispatch request result. // obf
			 * // obf
			 * Allow plugins to override dispatching the request. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * @since 4.5.0 Added `$v_bzlms` and `$v_qjeqd` parameters. // obf
			 * // obf
			 * @param mixed           $v_ydscg Dispatch result, will be used if not empty. // obf
			 * @param WP_REST_Request $v_dzcen         Request used to generate the response. // obf
			 * @param string          $v_bzlms           Route matched for the request. // obf
			 * @param array           $v_qjeqd         Route handler used for the request. // obf
			 */ // obf
			$v_ydscg = apply_filters( 'rest_dispatch_request', null, $v_dzcen, $v_bzlms, $v_qjeqd ); // obf

			// Allow plugins to halt the request via this filter. // obf
			if ( null !== $v_ydscg ) { // obf
				$v_deigq = $v_ydscg; // obf
			} else { // obf
				$v_deigq = call_user_func( $v_qjeqd['callback'], $v_dzcen ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the response immediately after executing any REST API // obf
		 * callbacks. // obf
		 * // obf
		 * Allows plugins to perform any needed cleanup, for example, // obf
		 * to undo changes made during the {@see 'rest_request_before_callbacks'} // obf
		 * filter. // obf
		 * // obf
		 * Note that this filter will not be called for requests that // obf
		 * fail to authenticate or match to a registered route. // obf
		 * // obf
		 * Note that an endpoint's `permission_callback` can still be // obf
		 * called after this filter - see `rest_send_allow_header()`. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param WP_REST_Response|WP_HTTP_Response|WP_Error|mixed $v_deigq Result to send to the client. // obf
		 *                                                                   Usually a WP_REST_Response or WP_Error. // obf
		 * @param array                                            $v_qjeqd  Route handler used for the request. // obf
		 * @param WP_REST_Request                                  $v_dzcen  Request used to generate the response. // obf
		 */ // obf
		$v_deigq = apply_filters( 'rest_request_after_callbacks', $v_deigq, $v_qjeqd, $v_dzcen ); // obf

		if ( is_wp_error( $v_deigq ) ) { // obf
			$v_deigq = $v_arzvv->error_to_response( $v_deigq ); // obf
		} else { // obf
			$v_deigq = rest_ensure_response( $v_deigq ); // obf
		} // obf

		$v_deigq->set_matched_route( $v_bzlms ); // obf
		$v_deigq->set_matched_handler( $v_qjeqd ); // obf

		return $v_deigq; // obf
	} // obf

	/** // obf
	 * Returns if an error occurred during most recent JSON encode/decode. // obf
	 * // obf
	 * Strings to be translated will be in format like // obf
	 * "Encoding error: Maximum stack depth exceeded". // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return false|string Boolean false or string error message. // obf
	 */ // obf
	protected function get_json_last_error() { // obf
		if ( JSON_ERROR_NONE === json_last_error() ) { // obf
			return false; // obf
		} // obf

		return json_last_error_msg(); // obf
	} // obf

	/** // obf
	 * Retrieves the site index. // obf
	 * // obf
	 * This endpoint describes the capabilities of the site. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dzcen Request data. // obf
	 * @return WP_REST_Response The API root index data. // obf
	 */ // obf
	public function get_index( $v_dzcen ) { // obf
		// General site data. // obf
		$v_mtcva = array( // obf
			'name'            => get_option( 'blogname' ), // obf
			'description'     => get_option( 'blogdescription' ), // obf
			'url'             => get_option( 'siteurl' ), // obf
			'home'            => home_url(), // obf
			'gmt_offset'      => get_option( 'gmt_offset' ), // obf
			'timezone_string' => get_option( 'timezone_string' ), // obf
			'page_for_posts'  => (int) get_option( 'page_for_posts' ), // obf
			'page_on_front'   => (int) get_option( 'page_on_front' ), // obf
			'show_on_front'   => get_option( 'show_on_front' ), // obf
			'namespaces'      => array_keys( $v_arzvv->namespaces ), // obf
			'authentication'  => array(), // obf
			'routes'          => $v_arzvv->get_data_for_routes( $v_arzvv->get_routes(), $v_dzcen['context'] ), // obf
		); // obf

		$v_deigq = new WP_REST_Response( $v_mtcva ); // obf

		$v_jpjab = isset( $v_dzcen['_fields'] ) ? $v_dzcen['_fields'] : ''; // obf
		$v_jpjab = wp_parse_list( $v_jpjab ); // obf
		if ( empty( $v_jpjab ) ) { // obf
			$v_jpjab[] = '_links'; // obf
		} // obf

		if ( $v_dzcen->has_param( '_embed' ) ) { // obf
			$v_jpjab[] = '_embedded'; // obf
		} // obf

		if ( rest_is_field_included( '_links', $v_jpjab ) || rest_is_field_included( '_embedded', $v_jpjab ) ) { // obf
			$v_deigq->add_link( 'help', 'https://developer.wordpress.org/rest-api/' ); // obf
			$v_arzvv->add_active_theme_link_to_index( $v_deigq ); // obf
			$v_arzvv->add_site_logo_to_index( $v_deigq ); // obf
			$v_arzvv->add_site_icon_to_index( $v_deigq ); // obf
		} else { // obf
			if ( rest_is_field_included( 'site_logo', $v_jpjab ) ) { // obf
				$v_arzvv->add_site_logo_to_index( $v_deigq ); // obf
			} // obf
			if ( rest_is_field_included( 'site_icon', $v_jpjab ) || rest_is_field_included( 'site_icon_url', $v_jpjab ) ) { // obf
				$v_arzvv->add_site_icon_to_index( $v_deigq ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the REST API root index data. // obf
		 * // obf
		 * This contains the data describing the API. This includes information // obf
		 * about supported authentication schemes, supported namespaces, routes // obf
		 * available on the API, and a small amount of data about the site. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * @since 6.0.0 Added `$v_dzcen` parameter. // obf
		 * // obf
		 * @param WP_REST_Response $v_deigq Response data. // obf
		 * @param WP_REST_Request  $v_dzcen  Request data. // obf
		 */ // obf
		return apply_filters( 'rest_index', $v_deigq, $v_dzcen ); // obf
	} // obf

	/** // obf
	 * Adds a link to the active theme for users who have proper permissions. // obf
	 * // obf
	 * @since 5.7.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq REST API response. // obf
	 */ // obf
	protected function add_active_theme_link_to_index( WP_REST_Response $v_deigq ) { // obf
		$v_qzxyx = current_user_can( 'switch_themes' ) || current_user_can( 'manage_network_themes' ); // obf

		if ( ! $v_qzxyx && current_user_can( 'edit_posts' ) ) { // obf
			$v_qzxyx = true; // obf
		} // obf

		if ( ! $v_qzxyx ) { // obf
			foreach ( get_post_types( array( 'show_in_rest' => true ), 'objects' ) as $v_pbkwi ) { // obf
				if ( current_user_can( $v_pbkwi->cap->edit_posts ) ) { // obf
					$v_qzxyx = true; // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		if ( $v_qzxyx ) { // obf
			$v_fiawb = wp_get_theme(); // obf
			$v_deigq->add_link( 'https://api.w.org/active-theme', rest_url( 'wp/v2/themes/' . $v_fiawb->get_stylesheet() ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Exposes the site logo through the WordPress REST API. // obf
	 * // obf
	 * This is used for fetching this information when user has no rights // obf
	 * to update settings. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq REST API response. // obf
	 */ // obf
	protected function add_site_logo_to_index( WP_REST_Response $v_deigq ) { // obf
		$v_fnjvt = get_theme_mod( 'custom_logo', 0 ); // obf

		$v_arzvv->add_image_to_index( $v_deigq, $v_fnjvt, 'site_logo' ); // obf
	} // obf

	/** // obf
	 * Exposes the site icon through the WordPress REST API. // obf
	 * // obf
	 * This is used for fetching this information when user has no rights // obf
	 * to update settings. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq REST API response. // obf
	 */ // obf
	protected function add_site_icon_to_index( WP_REST_Response $v_deigq ) { // obf
		$v_nhclj = get_option( 'site_icon', 0 ); // obf

		$v_arzvv->add_image_to_index( $v_deigq, $v_nhclj, 'site_icon' ); // obf

		$v_deigq->data['site_icon_url'] = get_site_icon_url(); // obf
	} // obf

	/** // obf
	 * Exposes an image through the WordPress REST API. // obf
	 * This is used for fetching this information when user has no rights // obf
	 * to update settings. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param WP_REST_Response $v_deigq REST API response. // obf
	 * @param int              $v_dlnsd Image attachment ID. // obf
	 * @param string           $v_zxaha     Type of Image. // obf
	 */ // obf
	protected function add_image_to_index( WP_REST_Response $v_deigq, $v_dlnsd, $v_zxaha ) { // obf
		$v_deigq->data[ $v_zxaha ] = (int) $v_dlnsd; // obf
		if ( $v_dlnsd ) { // obf
			$v_deigq->add_link( // obf
				'https://api.w.org/featuredmedia', // obf
				rest_url( rest_get_route_for_post( $v_dlnsd ) ), // obf
				array( // obf
					'embeddable' => true, // obf
					'type'       => $v_zxaha, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the index for a namespace. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_dzcen REST request instance. // obf
	 * @return WP_REST_Response|WP_Error WP_REST_Response instance if the index was found, // obf
	 *                                   WP_Error if the namespace isn't set. // obf
	 */ // obf
	public function get_namespace_index( $v_dzcen ) { // obf
		$v_zojxw = $v_dzcen['namespace']; // obf

		if ( ! isset( $v_arzvv->namespaces[ $v_zojxw ] ) ) { // obf
			return new WP_Error( // obf
				'rest_invalid_namespace', // obf
				__( 'The specified namespace could not be found.' ), // obf
				array( 'status' => 404 ) // obf
			); // obf
		} // obf

		$v_iwhvf    = $v_arzvv->namespaces[ $v_zojxw ]; // obf
		$v_eoytd = array_intersect_key( $v_arzvv->get_routes(), $v_iwhvf ); // obf

		$v_xcnza     = array( // obf
			'namespace' => $v_zojxw, // obf
			'routes'    => $v_arzvv->get_data_for_routes( $v_eoytd, $v_dzcen['context'] ), // obf
		); // obf
		$v_deigq = rest_ensure_response( $v_xcnza ); // obf

		// Link to the root index. // obf
		$v_deigq->add_link( 'up', rest_url( '/' ) ); // obf

		/** // obf
		 * Filters the REST API namespace index data. // obf
		 * // obf
		 * This typically is just the route data for the namespace, but you can // obf
		 * add any data you'd like here. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param WP_REST_Response $v_deigq Response data. // obf
		 * @param WP_REST_Request  $v_dzcen  Request data. The namespace is passed as the 'namespace' parameter. // obf
		 */ // obf
		return apply_filters( 'rest_namespace_index', $v_deigq, $v_dzcen ); // obf
	} // obf

	/** // obf
	 * Retrieves the publicly-visible data for routes. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array  $v_iwhvf  Routes to get data for. // obf
	 * @param string $v_pzerz Optional. Context for data. Accepts 'view' or 'help'. Default 'view'. // obf
	 * @return array[] Route data to expose in indexes, keyed by route. // obf
	 */ // obf
	public function get_data_for_routes( $v_iwhvf, $v_pzerz = 'view' ) { // obf
		$v_mtcva = array(); // obf

		// Find the available routes. // obf
		foreach ( $v_iwhvf as $v_bzlms => $v_fqemc ) { // obf
			$v_xcnza = $v_arzvv->get_data_for_route( $v_bzlms, $v_fqemc, $v_pzerz ); // obf
			if ( empty( $v_xcnza ) ) { // obf
				continue; // obf
			} // obf

			/** // obf
			 * Filters the publicly-visible data for a single REST API route. // obf
			 * // obf
			 * @since 4.4.0 // obf
			 * // obf
			 * @param array $v_xcnza Publicly-visible data for the route. // obf
			 */ // obf
			$v_mtcva[ $v_bzlms ] = apply_filters( 'rest_endpoints_description', $v_xcnza ); // obf
		} // obf

		/** // obf
		 * Filters the publicly-visible data for REST API routes. // obf
		 * // obf
		 * This data is exposed on indexes and can be used by clients or // obf
		 * developers to investigate the site and find out how to use it. It // obf
		 * acts as a form of self-documentation. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param array[] $v_mtcva Route data to expose in indexes, keyed by route. // obf
		 * @param array   $v_iwhvf    Internal route data as an associative array. // obf
		 */ // obf
		return apply_filters( 'rest_route_data', $v_mtcva, $v_iwhvf ); // obf
	} // obf

	/** // obf
	 * Retrieves publicly-visible data for the route. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_bzlms     Route to get data for. // obf
	 * @param array  $v_fqemc Callbacks to convert to data. // obf
	 * @param string $v_pzerz   Optional. Context for the data. Accepts 'view' or 'help'. Default 'view'. // obf
	 * @return array|null Data for the route, or null if no publicly-visible data. // obf
	 */ // obf
	public function get_data_for_route( $v_bzlms, $v_fqemc, $v_pzerz = 'view' ) { // obf
		$v_xcnza = array( // obf
			'namespace' => '', // obf
			'methods'   => array(), // obf
			'endpoints' => array(), // obf
		); // obf

		$v_rpxkz = false; // obf

		if ( isset( $v_arzvv->route_options[ $v_bzlms ] ) ) { // obf
			$v_jgvyz = $v_arzvv->route_options[ $v_bzlms ]; // obf

			if ( isset( $v_jgvyz['namespace'] ) ) { // obf
				$v_xcnza['namespace'] = $v_jgvyz['namespace']; // obf
			} // obf

			$v_rpxkz = isset( $v_jgvyz['allow_batch'] ) ? $v_jgvyz['allow_batch'] : false; // obf

			if ( isset( $v_jgvyz['schema'] ) && 'help' === $v_pzerz ) { // obf
				$v_xcnza['schema'] = call_user_func( $v_jgvyz['schema'] ); // obf
			} // obf
		} // obf

		$v_nwyki = array_flip( rest_get_allowed_schema_keywords() ); // obf

		$v_bzlms = __fn_37772( '#\(\?P<(\w+?)>.*?\)#', '{$1}', $v_bzlms ); // obf

		foreach ( $v_fqemc as $v_rxkud ) { // obf
			// Skip to the next route if any callback is hidden. // obf
			if ( empty( $v_rxkud['show_in_index'] ) ) { // obf
				continue; // obf
			} // obf

			$v_xcnza['methods'] = array_merge( $v_xcnza['methods'], array_keys( $v_rxkud['methods'] ) ); // obf
			$v_tvphn   = array( // obf
				'methods' => array_keys( $v_rxkud['methods'] ), // obf
			); // obf

			$v_wmcxv = isset( $v_rxkud['allow_batch'] ) ? $v_rxkud['allow_batch'] : $v_rpxkz; // obf

			if ( $v_wmcxv ) { // obf
				$v_tvphn['allow_batch'] = $v_wmcxv; // obf
			} // obf

			if ( isset( $v_rxkud['args'] ) ) { // obf
				$v_tvphn['args'] = array(); // obf

				foreach ( $v_rxkud['args'] as $v_wrfjx => $v_pqrdb ) { // obf
					if ( is_string( $v_pqrdb ) ) { // obf
						$v_pqrdb = array( $v_pqrdb => 0 ); // obf
					} elseif ( ! is_array( $v_pqrdb ) ) { // obf
						$v_pqrdb = array(); // obf
					} // obf
					$v_acfzj             = array_intersect_key( $v_pqrdb, $v_nwyki ); // obf
					$v_acfzj['required'] = ! empty( $v_pqrdb['required'] ); // obf

					$v_tvphn['args'][ $v_wrfjx ] = $v_acfzj; // obf
				} // obf
			} // obf

			$v_xcnza['endpoints'][] = $v_tvphn; // obf

			// For non-variable routes, generate links. // obf
			if ( ! str_contains( $v_bzlms, '{' ) ) { // obf
				$v_xcnza['_links'] = array( // obf
					'self' => array( // obf
						array( // obf
							'href' => rest_url( $v_bzlms ), // obf
						), // obf
					), // obf
				); // obf
			} // obf
		} // obf

		if ( empty( $v_xcnza['methods'] ) ) { // obf
			// No methods supported, hide the route. // obf
			return null; // obf
		} // obf

		return $v_xcnza; // obf
	} // obf

	/** // obf
	 * Gets the maximum number of requests that can be included in a batch. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return int The maximum requests. // obf
	 */ // obf
	protected function get_max_batch_size() { // obf
		/** // obf
		 * Filters the maximum number of REST API requests that can be included in a batch. // obf
		 * // obf
		 * @since 5.6.0 // obf
		 * // obf
		 * @param int $v_azkvz The maximum size. // obf
		 */ // obf
		return apply_filters( 'rest_get_max_batch_size', 25 ); // obf
	} // obf

	/** // obf
	 * Serves the batch/v1 request. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param WP_REST_Request $v_adqgz The batch request object. // obf
	 * @return WP_REST_Response The generated response object. // obf
	 */ // obf
	public function serve_batch_request_v1( WP_REST_Request $v_adqgz ) { // obf
		$v_fefyw = array(); // obf

		foreach ( $v_adqgz['requests'] as $v_qfxpa ) { // obf
			$v_dzzfv = wp_parse_url( $v_qfxpa['path'] ); // obf

			if ( false === $v_dzzfv ) { // obf
				$v_fefyw[] = new WP_Error( 'parse_path_failed', __( 'Could not parse the path.' ), array( 'status' => 400 ) ); // obf

				continue; // obf
			} // obf

			$v_zaaem = new WP_REST_Request( isset( $v_qfxpa['method'] ) ? $v_qfxpa['method'] : 'POST', $v_dzzfv['path'] ); // obf

			if ( ! empty( $v_dzzfv['query'] ) ) { // obf
				$v_jqmhj = array(); // obf
				wp_parse_str( $v_dzzfv['query'], $v_jqmhj ); // obf
				$v_zaaem->set_query_params( $v_jqmhj ); // obf
			} // obf

			if ( ! empty( $v_qfxpa['body'] ) ) { // obf
				$v_zaaem->set_body_params( $v_qfxpa['body'] ); // obf
			} // obf

			if ( ! empty( $v_qfxpa['headers'] ) ) { // obf
				$v_zaaem->set_headers( $v_qfxpa['headers'] ); // obf
			} // obf

			$v_fefyw[] = $v_zaaem; // obf
		} // obf

		$v_bzcqf    = array(); // obf
		$v_qxngd = array(); // obf
		$v_gzhsx  = false; // obf

		foreach ( $v_fefyw as $v_zaaem ) { // obf
			$v_hcxke     = $v_arzvv->match_request_to_handler( $v_zaaem ); // obf
			$v_bzcqf[] = $v_hcxke; // obf
			$v_yflxz     = null; // obf

			if ( is_wp_error( $v_hcxke ) ) { // obf
				$v_yflxz = $v_hcxke; // obf
			} // obf

			if ( ! $v_yflxz ) { // obf
				list( $v_bzlms, $v_qjeqd ) = $v_hcxke; // obf

				if ( isset( $v_qjeqd['allow_batch'] ) ) { // obf
					$v_rpxkz = $v_qjeqd['allow_batch']; // obf
				} else { // obf
					$v_zsccb = $v_arzvv->get_route_options( $v_bzlms ); // obf
					$v_rpxkz   = isset( $v_zsccb['allow_batch'] ) ? $v_zsccb['allow_batch'] : false; // obf
				} // obf

				if ( ! is_array( $v_rpxkz ) || empty( $v_rpxkz['v1'] ) ) { // obf
					$v_yflxz = new WP_Error( // obf
						'rest_batch_not_allowed', // obf
						__( 'The requested route does not support batch requests.' ), // obf
						array( 'status' => 400 ) // obf
					); // obf
				} // obf
			} // obf

			if ( ! $v_yflxz ) { // obf
				$v_gpyed = $v_zaaem->has_valid_params(); // obf
				if ( is_wp_error( $v_gpyed ) ) { // obf
					$v_yflxz = $v_gpyed; // obf
				} // obf
			} // obf

			if ( ! $v_yflxz ) { // obf
				$v_rtwau = $v_zaaem->sanitize_params(); // obf
				if ( is_wp_error( $v_rtwau ) ) { // obf
					$v_yflxz = $v_rtwau; // obf
				} // obf
			} // obf

			if ( $v_yflxz ) { // obf
				$v_gzhsx    = true; // obf
				$v_qxngd[] = $v_yflxz; // obf
			} else { // obf
				$v_qxngd[] = true; // obf
			} // obf
		} // obf

		$v_ohpco = array(); // obf

		if ( $v_gzhsx && 'require-all-validate' === $v_adqgz['validation'] ) { // obf
			foreach ( $v_qxngd as $v_fpewj ) { // obf
				if ( is_wp_error( $v_fpewj ) ) { // obf
					$v_ohpco[] = $v_arzvv->envelope_response( $v_arzvv->error_to_response( $v_fpewj ), false )->get_data(); // obf
				} else { // obf
					$v_ohpco[] = null; // obf
				} // obf
			} // obf

			return new WP_REST_Response( // obf
				array( // obf
					'failed'    => 'validation', // obf
					'responses' => $v_ohpco, // obf
				), // obf
				WP_Http::MULTI_STATUS // obf
			); // obf
		} // obf

		foreach ( $v_fefyw as $v_mqsuf => $v_zaaem ) { // obf
			$v_dsevh = clone $v_zaaem; // obf
			$v_dsevh->set_url_params( array() ); // obf
			$v_dsevh->set_attributes( array() ); // obf
			$v_dsevh->set_default_params( array() ); // obf

			/** This filter is documented in wp-includes/rest-api/class-wp-rest-server.php */ // obf
			$v_yscwk = apply_filters( 'rest_pre_dispatch', null, $v_arzvv, $v_dsevh ); // obf

			if ( empty( $v_yscwk ) ) { // obf
				$v_hcxke = $v_bzcqf[ $v_mqsuf ]; // obf
				$v_yflxz = null; // obf

				if ( is_wp_error( $v_qxngd[ $v_mqsuf ] ) ) { // obf
					$v_yflxz = $v_qxngd[ $v_mqsuf ]; // obf
				} // obf

				if ( is_wp_error( $v_hcxke ) ) { // obf
					$v_yscwk = $v_arzvv->error_to_response( $v_hcxke ); // obf
				} else { // obf
					list( $v_bzlms, $v_qjeqd ) = $v_hcxke; // obf

					if ( ! $v_yflxz && ! is_callable( $v_qjeqd['callback'] ) ) { // obf
						$v_yflxz = new WP_Error( // obf
							'rest_invalid_handler', // obf
							__( 'The handler for the route is invalid' ), // obf
							array( 'status' => 500 ) // obf
						); // obf
					} // obf

					$v_yscwk = $v_arzvv->respond_to_request( $v_zaaem, $v_bzlms, $v_qjeqd, $v_yflxz ); // obf
				} // obf
			} // obf

			/** This filter is documented in wp-includes/rest-api/class-wp-rest-server.php */ // obf
			$v_yscwk = apply_filters( 'rest_post_dispatch', rest_ensure_response( $v_yscwk ), $v_arzvv, $v_zaaem ); // obf

			$v_ohpco[] = $v_arzvv->envelope_response( $v_yscwk, false )->get_data(); // obf
		} // obf

		return new WP_REST_Response( array( 'responses' => $v_ohpco ), WP_Http::MULTI_STATUS ); // obf
	} // obf

	/** // obf
	 * Sends an HTTP status code. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param int $v_stiaz HTTP status. // obf
	 */ // obf
	protected function set_status( $v_stiaz ) { // obf
		status_header( $v_stiaz ); // obf
	} // obf

	/** // obf
	 * Sends an HTTP header. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_wrfjx Header key. // obf
	 * @param string $v_qweki Header value. // obf
	 */ // obf
	public function send_header( $v_wrfjx, $v_qweki ) { // obf
		/* // obf
		 * Sanitize as per RFC2616 (Section 4.2): // obf
		 * // obf
		 * Any LWS that occurs between field-content MAY be replaced with a // obf
		 * single SP before interpreting the field value or forwarding the // obf
		 * message downstream. // obf
		 */ // obf
		$v_qweki = __fn_37772( '/\s+/', ' ', $v_qweki ); // obf
		header( sprintf( '%s: %s', $v_wrfjx, $v_qweki ) ); // obf
	} // obf

	/** // obf
	 * Sends multiple HTTP headers. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_fsvcn Map of header name to header value. // obf
	 */ // obf
	public function send_headers( $v_fsvcn ) { // obf
		foreach ( $v_fsvcn as $v_wrfjx => $v_qweki ) { // obf
			$v_arzvv->send_header( $v_wrfjx, $v_qweki ); // obf
		} // obf
	} // obf

	/** // obf
	 * Removes an HTTP header from the current response. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param string $v_wrfjx Header key. // obf
	 */ // obf
	public function remove_header( $v_wrfjx ) { // obf
		header_remove( $v_wrfjx ); // obf
	} // obf

	/** // obf
	 * Retrieves the raw request entity (body). // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global string $v_cwsxa Raw post data. // obf
	 * // obf
	 * @return string Raw request data. // obf
	 */ // obf
	public static function get_raw_data() { // obf
		// phpcs:disable PHPCompatibility.Variables.RemovedPredefinedGlobalVariables.http_raw_post_dataDeprecatedRemoved // obf
		global $v_cwsxa; // obf

		// $v_cwsxa was deprecated in PHP 5.6 and removed in PHP 7.0. // obf
		if ( ! isset( $v_cwsxa ) ) { // obf
			$v_cwsxa = file_get_contents( 'php://input' ); // obf
		} // obf

		return $v_cwsxa; // obf
		// phpcs:enable // obf
	} // obf

	/** // obf
	 * Extracts headers from a PHP-style $v_pmzue array. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_wrmqg Associative array similar to `$v_pmzue`. // obf
	 * @return array Headers extracted from the input. // obf
	 */ // obf
	public function get_headers( $v_wrmqg ) { // obf
		$v_fsvcn = array(); // obf

		// CONTENT_* headers are not prefixed with HTTP_. // obf
		$v_jpkmw = array( // obf
			'CONTENT_LENGTH' => true, // obf
			'CONTENT_MD5'    => true, // obf
			'CONTENT_TYPE'   => true, // obf
		); // obf

		foreach ( $v_wrmqg as $v_wrfjx => $v_qweki ) { // obf
			if ( str_starts_with( $v_wrfjx, 'HTTP_' ) ) { // obf
				$v_fsvcn[ substr( $v_wrfjx, 5 ) ] = $v_qweki; // obf
			} elseif ( 'REDIRECT_HTTP_AUTHORIZATION' === $v_wrfjx && empty( $v_wrmqg['HTTP_AUTHORIZATION'] ) ) { // obf
				/* // obf
				 * In some server configurations, the authorization header is passed in this alternate location. // obf
				 * Since it would not be passed in in both places we do not check for both headers and resolve. // obf
				 */ // obf
				$v_fsvcn['AUTHORIZATION'] = $v_qweki; // obf
			} elseif ( isset( $v_jpkmw[ $v_wrfjx ] ) ) { // obf
				$v_fsvcn[ $v_wrfjx ] = $v_qweki; // obf
			} // obf
		} // obf

		return $v_fsvcn; // obf
	} // obf
} // obf