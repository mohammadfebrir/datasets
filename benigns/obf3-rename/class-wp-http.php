
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * HTTP API: WP_Http class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 2.7.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

if ( ! class_exists( 'WpOrg\Requests\Autoload' ) ) { // obf
	require ABSPATH . WPINC . '/Requests/src/Autoload.php'; // obf

	WpOrg\Requests\Autoload::register(); // obf
	WpOrg\Requests\Requests::set_certificate_path( ABSPATH . WPINC . '/certificates/ca-bundle.crt' ); // obf
} // obf

/** // obf
 * Core class used for managing HTTP transports and making HTTP requests. // obf
 * // obf
 * This class is used to consistently make outgoing HTTP requests easy for developers // obf
 * while still being compatible with the many PHP configurations under which // obf
 * WordPress runs. // obf
 * // obf
 * Debugging includes several actions, which pass different variables for debugging the HTTP API. // obf
 * // obf
 * @since 2.7.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Http { // obf

	// Aliases for HTTP response codes. // obf
	const HTTP_CONTINUE       = 100; // obf
	const SWITCHING_PROTOCOLS = 101; // obf
	const PROCESSING          = 102; // obf
	const EARLY_HINTS         = 103; // obf

	const OK                            = 200; // obf
	const CREATED                       = 201; // obf
	const ACCEPTED                      = 202; // obf
	const NON_AUTHORITATIVE_INFORMATION = 203; // obf
	const NO_CONTENT                    = 204; // obf
	const RESET_CONTENT                 = 205; // obf
	const PARTIAL_CONTENT               = 206; // obf
	const MULTI_STATUS                  = 207; // obf
	const IM_USED                       = 226; // obf

	const MULTIPLE_CHOICES   = 300; // obf
	const MOVED_PERMANENTLY  = 301; // obf
	const FOUND              = 302; // obf
	const SEE_OTHER          = 303; // obf
	const NOT_MODIFIED       = 304; // obf
	const USE_PROXY          = 305; // obf
	const RESERVED           = 306; // obf
	const TEMPORARY_REDIRECT = 307; // obf
	const PERMANENT_REDIRECT = 308; // obf

	const BAD_REQUEST                     = 400; // obf
	const UNAUTHORIZED                    = 401; // obf
	const PAYMENT_REQUIRED                = 402; // obf
	const FORBIDDEN                       = 403; // obf
	const NOT_FOUND                       = 404; // obf
	const METHOD_NOT_ALLOWED              = 405; // obf
	const NOT_ACCEPTABLE                  = 406; // obf
	const PROXY_AUTHENTICATION_REQUIRED   = 407; // obf
	const REQUEST_TIMEOUT                 = 408; // obf
	const CONFLICT                        = 409; // obf
	const GONE                            = 410; // obf
	const LENGTH_REQUIRED                 = 411; // obf
	const PRECONDITION_FAILED             = 412; // obf
	const REQUEST_ENTITY_TOO_LARGE        = 413; // obf
	const REQUEST_URI_TOO_LONG            = 414; // obf
	const UNSUPPORTED_MEDIA_TYPE          = 415; // obf
	const REQUESTED_RANGE_NOT_SATISFIABLE = 416; // obf
	const EXPECTATION_FAILED              = 417; // obf
	const IM_A_TEAPOT                     = 418; // obf
	const MISDIRECTED_REQUEST             = 421; // obf
	const UNPROCESSABLE_ENTITY            = 422; // obf
	const LOCKED                          = 423; // obf
	const FAILED_DEPENDENCY               = 424; // obf
	const TOO_EARLY                       = 425; // obf
	const UPGRADE_REQUIRED                = 426; // obf
	const PRECONDITION_REQUIRED           = 428; // obf
	const TOO_MANY_REQUESTS               = 429; // obf
	const REQUEST_HEADER_FIELDS_TOO_LARGE = 431; // obf
	const UNAVAILABLE_FOR_LEGAL_REASONS   = 451; // obf

	const INTERNAL_SERVER_ERROR           = 500; // obf
	const NOT_IMPLEMENTED                 = 501; // obf
	const BAD_GATEWAY                     = 502; // obf
	const SERVICE_UNAVAILABLE             = 503; // obf
	const GATEWAY_TIMEOUT                 = 504; // obf
	const HTTP_VERSION_NOT_SUPPORTED      = 505; // obf
	const VARIANT_ALSO_NEGOTIATES         = 506; // obf
	const INSUFFICIENT_STORAGE            = 507; // obf
	const NOT_EXTENDED                    = 510; // obf
	const NETWORK_AUTHENTICATION_REQUIRED = 511; // obf

	/** // obf
	 * Send an HTTP request to a URI. // obf
	 * // obf
	 * Please note: The only URI that are supported in the HTTP Transport implementation // obf
	 * are the HTTP and HTTPS protocols. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string       $v_gqtqa  The request URL. // obf
	 * @param string|array $v_lpikc { // obf
	 *     Optional. Array or string of HTTP request arguments. // obf
	 * // obf
	 *     @type string       $v_hjnhf              Request method. Accepts 'GET', 'POST', 'HEAD', 'PUT', 'DELETE', // obf
	 *                                             'TRACE', 'OPTIONS', or 'PATCH'. // obf
	 *                                             Some transports technically allow others, but should not be // obf
	 *                                             assumed. Default 'GET'. // obf
	 *     @type float        $v_fonzr             How long the connection should stay open in seconds. Default 5. // obf
	 *     @type int          $v_wxsin         Number of allowed redirects. Not supported by all transports. // obf
	 *                                             Default 5. // obf
	 *     @type string       $v_zlzmg         Version of the HTTP protocol to use. Accepts '1.0' and '1.1'. // obf
	 *                                             Default '1.0'. // obf
	 *     @type string       $v_snvls-agent          User-agent value sent. // obf
	 *                                             Default 'WordPress/' . get_bloginfo( 'version' ) . '; ' . get_bloginfo( 'url' ). // obf
	 *     @type bool         $v_ycvyl  Whether to pass URLs through wp_http_validate_url(). // obf
	 *                                             Default false. // obf
	 *     @type bool         $v_gbmcz            Whether the calling code requires the result of the request. // obf
	 *                                             If set to false, the request will be sent to the remote server, // obf
	 *                                             and processing returned to the calling code immediately, the caller // obf
	 *                                             will know if the request succeeded or failed, but will not receive // obf
	 *                                             any response from the remote server. Default true. // obf
	 *     @type string|array $v_bohqd             Array or string of headers to send with the request. // obf
	 *                                             Default empty array. // obf
	 *     @type array        $v_zffqy             List of cookies to send with the request. Default empty array. // obf
	 *     @type string|array $v_eblwk                Body to send with the request. Default null. // obf
	 *     @type bool         $v_ufewi            Whether to compress the $v_eblwk when sending the request. // obf
	 *                                             Default false. // obf
	 *     @type bool         $v_snlhq          Whether to decompress a compressed response. If set to false and // obf
	 *                                             compressed content is returned in the response anyway, it will // obf
	 *                                             need to be separately decompressed. Default true. // obf
	 *     @type bool         $v_hemyo           Whether to verify SSL for the request. Default true. // obf
	 *     @type string       $v_fnbtf     Absolute path to an SSL certificate .crt file. // obf
	 *                                             Default ABSPATH . WPINC . '/certificates/ca-bundle.crt'. // obf
	 *     @type bool         $v_cormh              Whether to stream to a file. If set to true and no filename was // obf
	 *                                             given, it will be dropped it in the WP temp dir and its name will // obf
	 *                                             be set using the basename of the URL. Default false. // obf
	 *     @type string       $v_lpugz            Filename of the file to write to when streaming. $v_cormh must be // obf
	 *                                             set to true. Default null. // obf
	 *     @type int          $v_kwyub Size in bytes to limit the response to. Default null. // obf
	 * // obf
	 * } // obf
	 * @return array|WP_Error { // obf
	 *     Array of response data, or a WP_Error instance upon error. // obf
	 * // obf
	 *     @type \WpOrg\Requests\Utility\CaseInsensitiveDictionary $v_bohqd       Response headers keyed by name. // obf
	 *     @type string                                            $v_eblwk          Response body. // obf
	 *     @type array                                             $v_osdgl      { // obf
	 *         Array of HTTP response data. // obf
	 * // obf
	 *         @type int|false    $v_tunui    HTTP response status code. // obf
	 *         @type string|false $v_sxohv HTTP response message. // obf
	 *     } // obf
	 *     @type WP_HTTP_Cookie[]                                  $v_zffqy       Array of cookies set by the server. // obf
	 *     @type string|null                                       $v_lpugz      Optional. Filename of the response. // obf
	 *     @type WP_HTTP_Requests_Response|null                    $v_xzmvl Response object. // obf
	 * } // obf
	 */ // obf
	public function request( $v_gqtqa, $v_lpikc = array() ) { // obf
		$v_zpqyn = array( // obf
			'method'              => 'GET', // obf
			/** // obf
			 * Filters the timeout value for an HTTP request. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * @since 5.1.0 The `$v_gqtqa` parameter was added. // obf
			 * // obf
			 * @param float  $v_cfrvp Time in seconds until a request times out. Default 5. // obf
			 * @param string $v_gqtqa           The request URL. // obf
			 */ // obf
			'timeout'             => apply_filters( 'http_request_timeout', 5, $v_gqtqa ), // obf
			/** // obf
			 * Filters the number of redirects allowed during an HTTP request. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * @since 5.1.0 The `$v_gqtqa` parameter was added. // obf
			 * // obf
			 * @param int    $v_gnjze Number of redirects allowed. Default 5. // obf
			 * @param string $v_gqtqa            The request URL. // obf
			 */ // obf
			'redirection'         => apply_filters( 'http_request_redirection_count', 5, $v_gqtqa ), // obf
			/** // obf
			 * Filters the version of the HTTP protocol used in a request. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * @since 5.1.0 The `$v_gqtqa` parameter was added. // obf
			 * // obf
			 * @param string $v_ntpmm Version of HTTP used. Accepts '1.0' and '1.1'. Default '1.0'. // obf
			 * @param string $v_gqtqa     The request URL. // obf
			 */ // obf
			'httpversion'         => apply_filters( 'http_request_version', '1.0', $v_gqtqa ), // obf
			/** // obf
			 * Filters the user agent value sent with an HTTP request. // obf
			 * // obf
			 * @since 2.7.0 // obf
			 * @since 5.1.0 The `$v_gqtqa` parameter was added. // obf
			 * // obf
			 * @param string $v_kymsk WordPress user agent string. // obf
			 * @param string $v_gqtqa        The request URL. // obf
			 */ // obf
			'user-agent'          => apply_filters( 'http_headers_useragent', 'WordPress/' . get_bloginfo( 'version' ) . '; ' . get_bloginfo( 'url' ), $v_gqtqa ), // obf
			/** // obf
			 * Filters whether to pass URLs through wp_http_validate_url() in an HTTP request. // obf
			 * // obf
			 * @since 3.6.0 // obf
			 * @since 5.1.0 The `$v_gqtqa` parameter was added. // obf
			 * // obf
			 * @param bool   $v_mmiyy Whether to pass URLs through wp_http_validate_url(). Default false. // obf
			 * @param string $v_gqtqa      The request URL. // obf
			 */ // obf
			'reject_unsafe_urls'  => apply_filters( 'http_request_reject_unsafe_urls', false, $v_gqtqa ), // obf
			'blocking'            => true, // obf
			'headers'             => array(), // obf
			'cookies'             => array(), // obf
			'body'                => null, // obf
			'compress'            => false, // obf
			'decompress'          => true, // obf
			'sslverify'           => true, // obf
			'sslcertificates'     => ABSPATH . WPINC . '/certificates/ca-bundle.crt', // obf
			'stream'              => false, // obf
			'filename'            => null, // obf
			'limit_response_size' => null, // obf
		); // obf

		// Pre-parse for the HEAD checks. // obf
		$v_lpikc = wp_parse_args( $v_lpikc ); // obf

		// By default, HEAD requests do not cause redirections. // obf
		if ( isset( $v_lpikc['method'] ) && 'HEAD' === $v_lpikc['method'] ) { // obf
			$v_zpqyn['redirection'] = 0; // obf
		} // obf

		$v_qbelv = wp_parse_args( $v_lpikc, $v_zpqyn ); // obf
		/** // obf
		 * Filters the arguments used in an HTTP request. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param array  $v_qbelv An array of HTTP request arguments. // obf
		 * @param string $v_gqtqa         The request URL. // obf
		 */ // obf
		$v_qbelv = apply_filters( 'http_request_args', $v_qbelv, $v_gqtqa ); // obf

		// The transports decrement this, store a copy of the original value for loop purposes. // obf
		if ( ! isset( $v_qbelv['_redirection'] ) ) { // obf
			$v_qbelv['_redirection'] = $v_qbelv['redirection']; // obf
		} // obf

		/** // obf
		 * Filters the preemptive return value of an HTTP request. // obf
		 * // obf
		 * Returning a non-false value from the filter will short-circuit the HTTP request and return // obf
		 * early with that value. A filter should return one of: // obf
		 * // obf
		 *  - An array containing 'headers', 'body', 'response', 'cookies', and 'filename' elements // obf
		 *  - A WP_Error instance // obf
		 *  - boolean false to avoid short-circuiting the response // obf
		 * // obf
		 * Returning any other value may result in unexpected behavior. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param false|array|WP_Error $v_osdgl    A preemptive return value of an HTTP request. Default false. // obf
		 * @param array                $v_qbelv HTTP request arguments. // obf
		 * @param string               $v_gqtqa         The request URL. // obf
		 */ // obf
		$v_kuqtp = apply_filters( 'pre_http_request', false, $v_qbelv, $v_gqtqa ); // obf

		if ( false !== $v_kuqtp ) { // obf
			return $v_kuqtp; // obf
		} // obf

		if ( function_exists( 'wp_kses_bad_protocol' ) ) { // obf
			if ( $v_qbelv['reject_unsafe_urls'] ) { // obf
				$v_gqtqa = wp_http_validate_url( $v_gqtqa ); // obf
			} // obf
			if ( $v_gqtqa ) { // obf
				$v_gqtqa = wp_kses_bad_protocol( $v_gqtqa, array( 'http', 'https', 'ssl' ) ); // obf
			} // obf
		} // obf

		$v_hvlsv = parse_url( $v_gqtqa ); // obf

		if ( empty( $v_gqtqa ) || empty( $v_hvlsv['scheme'] ) ) { // obf
			$v_osdgl = new WP_Error( 'http_request_failed', __( 'A valid URL was not provided.' ) ); // obf
			/** This action is documented in wp-includes/class-wp-http.php */ // obf
			do_action( 'http_api_debug', $v_osdgl, 'response', 'WpOrg\Requests\Requests', $v_qbelv, $v_gqtqa ); // obf
			return $v_osdgl; // obf
		} // obf

		if ( $v_rnedj->block_request( $v_gqtqa ) ) { // obf
			$v_osdgl = new WP_Error( 'http_request_not_executed', __( 'User has blocked requests through HTTP.' ) ); // obf
			/** This action is documented in wp-includes/class-wp-http.php */ // obf
			do_action( 'http_api_debug', $v_osdgl, 'response', 'WpOrg\Requests\Requests', $v_qbelv, $v_gqtqa ); // obf
			return $v_osdgl; // obf
		} // obf

		// If we are streaming to a file but no filename was given drop it in the WP temp dir // obf
		// and pick its name using the basename of the $v_gqtqa. // obf
		if ( $v_qbelv['stream'] ) { // obf
			if ( empty( $v_qbelv['filename'] ) ) { // obf
				$v_qbelv['filename'] = get_temp_dir() . basename( $v_gqtqa ); // obf
			} // obf

			// Force some settings if we are streaming to a file and check for existence // obf
			// and perms of destination directory. // obf
			$v_qbelv['blocking'] = true; // obf
			if ( ! wp_is_writable( dirname( $v_qbelv['filename'] ) ) ) { // obf
				$v_osdgl = new WP_Error( 'http_request_failed', __( 'Destination directory for file streaming does not exist or is not writable.' ) ); // obf
				/** This action is documented in wp-includes/class-wp-http.php */ // obf
				do_action( 'http_api_debug', $v_osdgl, 'response', 'WpOrg\Requests\Requests', $v_qbelv, $v_gqtqa ); // obf
				return $v_osdgl; // obf
			} // obf
		} // obf

		if ( is_null( $v_qbelv['headers'] ) ) { // obf
			$v_qbelv['headers'] = array(); // obf
		} // obf

		// WP allows passing in headers as a string, weirdly. // obf
		if ( ! is_array( $v_qbelv['headers'] ) ) { // obf
			$v_goiuc      = self::processHeaders( $v_qbelv['headers'] ); // obf
			$v_qbelv['headers'] = $v_goiuc['headers']; // obf
		} // obf

		// Setup arguments. // obf
		$v_bohqd = $v_qbelv['headers']; // obf
		$v_motvb    = $v_qbelv['body']; // obf
		$v_jckwn    = $v_qbelv['method']; // obf
		$v_fcllg = array( // obf
			'timeout'   => $v_qbelv['timeout'], // obf
			'useragent' => $v_qbelv['user-agent'], // obf
			'blocking'  => $v_qbelv['blocking'], // obf
			'hooks'     => new WP_HTTP_Requests_Hooks( $v_gqtqa, $v_qbelv ), // obf
		); // obf

		// Ensure redirects follow browser behavior. // obf
		$v_fcllg['hooks']->register( 'requests.before_redirect', array( static::class, 'browser_redirect_compatibility' ) ); // obf

		// Validate redirected URLs. // obf
		if ( function_exists( 'wp_kses_bad_protocol' ) && $v_qbelv['reject_unsafe_urls'] ) { // obf
			$v_fcllg['hooks']->register( 'requests.before_redirect', array( static::class, 'validate_redirects' ) ); // obf
		} // obf

		if ( $v_qbelv['stream'] ) { // obf
			$v_fcllg['filename'] = $v_qbelv['filename']; // obf
		} // obf
		if ( empty( $v_qbelv['redirection'] ) ) { // obf
			$v_fcllg['follow_redirects'] = false; // obf
		} else { // obf
			$v_fcllg['redirects'] = $v_qbelv['redirection']; // obf
		} // obf

		// Use byte limit, if we can. // obf
		if ( isset( $v_qbelv['limit_response_size'] ) ) { // obf
			$v_fcllg['max_bytes'] = $v_qbelv['limit_response_size']; // obf
		} // obf

		// If we've got cookies, use and convert them to WpOrg\Requests\Cookie. // obf
		if ( ! empty( $v_qbelv['cookies'] ) ) { // obf
			$v_fcllg['cookies'] = self::normalize_cookies( $v_qbelv['cookies'] ); // obf
		} // obf

		// SSL certificate handling. // obf
		if ( ! $v_qbelv['sslverify'] ) { // obf
			$v_fcllg['verify']     = false; // obf
			$v_fcllg['verifyname'] = false; // obf
		} else { // obf
			$v_fcllg['verify'] = $v_qbelv['sslcertificates']; // obf
		} // obf

		// All non-GET/HEAD requests should put the arguments in the form body. // obf
		if ( 'HEAD' !== $v_jckwn && 'GET' !== $v_jckwn ) { // obf
			$v_fcllg['data_format'] = 'body'; // obf
		} // obf

		/** // obf
		 * Filters whether SSL should be verified for non-local requests. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * @since 5.1.0 The `$v_gqtqa` parameter was added. // obf
		 * // obf
		 * @param bool|string $v_rqytt Boolean to control whether to verify the SSL connection // obf
		 *                                or path to an SSL certificate. // obf
		 * @param string      $v_gqtqa        The request URL. // obf
		 */ // obf
		$v_fcllg['verify'] = apply_filters( 'https_ssl_verify', $v_fcllg['verify'], $v_gqtqa ); // obf

		// Check for proxies. // obf
		$v_qeyrv = new WP_HTTP_Proxy(); // obf
		if ( $v_qeyrv->is_enabled() && $v_qeyrv->send_through_proxy( $v_gqtqa ) ) { // obf
			$v_fcllg['proxy'] = new WpOrg\Requests\Proxy\Http( $v_qeyrv->host() . ':' . $v_qeyrv->port() ); // obf

			if ( $v_qeyrv->use_authentication() ) { // obf
				$v_fcllg['proxy']->use_authentication = true; // obf
				$v_fcllg['proxy']->user               = $v_qeyrv->username(); // obf
				$v_fcllg['proxy']->pass               = $v_qeyrv->password(); // obf
			} // obf
		} // obf

		// Avoid issues where mbstring.func_overload is enabled. // obf
		mbstring_binary_safe_encoding(); // obf

		try { // obf
			$v_fqlav = WpOrg\Requests\Requests::request( $v_gqtqa, $v_bohqd, $v_motvb, $v_jckwn, $v_fcllg ); // obf

			// Convert the response into an array. // obf
			$v_xzmvl = new WP_HTTP_Requests_Response( $v_fqlav, $v_qbelv['filename'] ); // obf
			$v_osdgl      = $v_xzmvl->to_array(); // obf

			// Add the original object to the array. // obf
			$v_osdgl['http_response'] = $v_xzmvl; // obf
		} catch ( WpOrg\Requests\Exception $v_gbdio ) { // obf
			$v_osdgl = new WP_Error( 'http_request_failed', $v_gbdio->getMessage() ); // obf
		} // obf

		reset_mbstring_encoding(); // obf

		/** // obf
		 * Fires after an HTTP API response is received and before the response is returned. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param array|WP_Error $v_osdgl    HTTP response or WP_Error object. // obf
		 * @param string         $v_rwdty     Context under which the hook is fired. // obf
		 * @param string         $v_gdlok       HTTP transport used. // obf
		 * @param array          $v_qbelv HTTP request arguments. // obf
		 * @param string         $v_gqtqa         The request URL. // obf
		 */ // obf
		do_action( 'http_api_debug', $v_osdgl, 'response', 'WpOrg\Requests\Requests', $v_qbelv, $v_gqtqa ); // obf
		if ( is_wp_error( $v_osdgl ) ) { // obf
			return $v_osdgl; // obf
		} // obf

		if ( ! $v_qbelv['blocking'] ) { // obf
			return array( // obf
				'headers'       => array(), // obf
				'body'          => '', // obf
				'response'      => array( // obf
					'code'    => false, // obf
					'message' => false, // obf
				), // obf
				'cookies'       => array(), // obf
				'http_response' => null, // obf
			); // obf
		} // obf

		/** // obf
		 * Filters a successful HTTP API response immediately before the response is returned. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param array  $v_osdgl    HTTP response. // obf
		 * @param array  $v_qbelv HTTP request arguments. // obf
		 * @param string $v_gqtqa         The request URL. // obf
		 */ // obf
		return apply_filters( 'http_response', $v_osdgl, $v_qbelv, $v_gqtqa ); // obf
	} // obf

	/** // obf
	 * Normalizes cookies for using in Requests. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param array $v_zffqy Array of cookies to send with the request. // obf
	 * @return WpOrg\Requests\Cookie\Jar Cookie holder object. // obf
	 */ // obf
	public static function normalize_cookies( $v_zffqy ) { // obf
		$v_nhmcb = new WpOrg\Requests\Cookie\Jar(); // obf

		foreach ( $v_zffqy as $v_fuijk => $v_mpqhj ) { // obf
			if ( $v_mpqhj instanceof WP_Http_Cookie ) { // obf
				$v_hpcat                 = array_filter( // obf
					$v_mpqhj->get_attributes(), // obf
					static function ( $v_wdbnk ) { // obf
						return null !== $v_wdbnk; // obf
					} // obf
				); // obf
				$v_nhmcb[ $v_mpqhj->name ] = new WpOrg\Requests\Cookie( (string) $v_mpqhj->name, $v_mpqhj->value, $v_hpcat, array( 'host-only' => $v_mpqhj->host_only ) ); // obf
			} elseif ( is_scalar( $v_mpqhj ) ) { // obf
				$v_nhmcb[ $v_fuijk ] = new WpOrg\Requests\Cookie( (string) $v_fuijk, (string) $v_mpqhj ); // obf
			} // obf
		} // obf

		return $v_nhmcb; // obf
	} // obf

	/** // obf
	 * Match redirect behavior to browser handling. // obf
	 * // obf
	 * Changes 302 redirects from POST to GET to match browser handling. Per // obf
	 * RFC 7231, user agents can deviate from the strict reading of the // obf
	 * specification for compatibility purposes. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string                  $v_gobcp URL to redirect to. // obf
	 * @param array                   $v_bohqd  Headers for the redirect. // obf
	 * @param string|array            $v_motvb     Body to send with the request. // obf
	 * @param array                   $v_fcllg  Redirect request options. // obf
	 * @param WpOrg\Requests\Response $v_ddqia Response object. // obf
	 */ // obf
	public static function browser_redirect_compatibility( $v_gobcp, $v_bohqd, $v_motvb, &$v_fcllg, $v_ddqia ) { // obf
		// Browser compatibility. // obf
		if ( 302 === $v_ddqia->status_code ) { // obf
			$v_fcllg['type'] = WpOrg\Requests\Requests::GET; // obf
		} // obf
	} // obf

	/** // obf
	 * Validate redirected URLs. // obf
	 * // obf
	 * @since 4.7.5 // obf
	 * // obf
	 * @throws WpOrg\Requests\Exception On unsuccessful URL validation. // obf
	 * @param string $v_gobcp URL to redirect to. // obf
	 */ // obf
	public static function validate_redirects( $v_gobcp ) { // obf
		if ( ! wp_http_validate_url( $v_gobcp ) ) { // obf
			throw new WpOrg\Requests\Exception( __( 'A valid URL was not provided.' ), 'wp_http.redirect_failed_validation' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests which transports are capable of supporting the request. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @deprecated 6.4.0 Use WpOrg\Requests\Requests::get_transport_class() // obf
	 * @see WpOrg\Requests\Requests::get_transport_class() // obf
	 * // obf
	 * @param array  $v_lpikc Request arguments. // obf
	 * @param string $v_gqtqa  URL to request. // obf
	 * @return string|false Class name for the first transport that claims to support the request. // obf
	 *                      False if no transport claims to support the request. // obf
	 */ // obf
	public function _get_first_available_transport( $v_lpikc, $v_gqtqa = null ) { // obf
		$v_qquxx = array( 'curl', 'streams' ); // obf

		/** // obf
		 * Filters which HTTP transports are available and in what order. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * @deprecated 6.4.0 Use WpOrg\Requests\Requests::get_transport_class() // obf
		 * // obf
		 * @param string[] $v_qquxx Array of HTTP transports to check. Default array contains // obf
		 *                             'curl' and 'streams', in that order. // obf
		 * @param array    $v_lpikc       HTTP request arguments. // obf
		 * @param string   $v_gqtqa        The URL to request. // obf
		 */ // obf
		$v_yywia = apply_filters_deprecated( 'http_api_transports', array( $v_qquxx, $v_lpikc, $v_gqtqa ), '6.4.0' ); // obf

		// Loop over each transport on each HTTP request looking for one which will serve this request's needs. // obf
		foreach ( $v_yywia as $v_falws ) { // obf
			if ( in_array( $v_falws, $v_qquxx, true ) ) { // obf
				$v_falws = ucfirst( $v_falws ); // obf
			} // obf
			$v_gdlok = 'WP_Http_' . $v_falws; // obf

			// Check to see if this transport is a possibility, calls the transport statically. // obf
			if ( ! call_user_func( array( $v_gdlok, 'test' ), $v_lpikc, $v_gqtqa ) ) { // obf
				continue; // obf
			} // obf

			return $v_gdlok; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Dispatches a HTTP request to a supporting transport. // obf
	 * // obf
	 * Tests each transport in order to find a transport which matches the request arguments. // obf
	 * Also caches the transport instance to be used later. // obf
	 * // obf
	 * The order for requests is cURL, and then PHP Streams. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @deprecated 5.1.0 Use WP_Http::request() // obf
	 * @see WP_Http::request() // obf
	 * // obf
	 * @param string $v_gqtqa  URL to request. // obf
	 * @param array  $v_lpikc Request arguments. // obf
	 * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'. // obf
	 *                        A WP_Error instance upon error. // obf
	 */ // obf
	private function _dispatch_request( $v_gqtqa, $v_lpikc ) { // obf
		static $v_qquxx = array(); // obf

		$v_gdlok = $v_rnedj->_get_first_available_transport( $v_lpikc, $v_gqtqa ); // obf
		if ( ! $v_gdlok ) { // obf
			return new WP_Error( 'http_failure', __( 'There are no HTTP transports available which can complete the requested request.' ) ); // obf
		} // obf

		// Transport claims to support request, instantiate it and give it a whirl. // obf
		if ( empty( $v_qquxx[ $v_gdlok ] ) ) { // obf
			$v_qquxx[ $v_gdlok ] = new $v_gdlok(); // obf
		} // obf

		$v_osdgl = $v_qquxx[ $v_gdlok ]->request( $v_gqtqa, $v_lpikc ); // obf

		/** This action is documented in wp-includes/class-wp-http.php */ // obf
		do_action( 'http_api_debug', $v_osdgl, 'response', $v_gdlok, $v_lpikc, $v_gqtqa ); // obf

		if ( is_wp_error( $v_osdgl ) ) { // obf
			return $v_osdgl; // obf
		} // obf

		/** This filter is documented in wp-includes/class-wp-http.php */ // obf
		return apply_filters( 'http_response', $v_osdgl, $v_lpikc, $v_gqtqa ); // obf
	} // obf

	/** // obf
	 * Uses the POST HTTP method. // obf
	 * // obf
	 * Used for sending data that is expected to be in the body. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string       $v_gqtqa  The request URL. // obf
	 * @param string|array $v_lpikc Optional. Override the defaults. // obf
	 * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'. // obf
	 *                        A WP_Error instance upon error. See WP_Http::response() for details. // obf
	 */ // obf
	public function post( $v_gqtqa, $v_lpikc = array() ) { // obf
		$v_zpqyn    = array( 'method' => 'POST' ); // obf
		$v_qbelv = wp_parse_args( $v_lpikc, $v_zpqyn ); // obf
		return $v_rnedj->request( $v_gqtqa, $v_qbelv ); // obf
	} // obf

	/** // obf
	 * Uses the GET HTTP method. // obf
	 * // obf
	 * Used for sending data that is expected to be in the body. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string       $v_gqtqa  The request URL. // obf
	 * @param string|array $v_lpikc Optional. Override the defaults. // obf
	 * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'. // obf
	 *                        A WP_Error instance upon error. See WP_Http::response() for details. // obf
	 */ // obf
	public function get( $v_gqtqa, $v_lpikc = array() ) { // obf
		$v_zpqyn    = array( 'method' => 'GET' ); // obf
		$v_qbelv = wp_parse_args( $v_lpikc, $v_zpqyn ); // obf
		return $v_rnedj->request( $v_gqtqa, $v_qbelv ); // obf
	} // obf

	/** // obf
	 * Uses the HEAD HTTP method. // obf
	 * // obf
	 * Used for sending data that is expected to be in the body. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string       $v_gqtqa  The request URL. // obf
	 * @param string|array $v_lpikc Optional. Override the defaults. // obf
	 * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'. // obf
	 *                        A WP_Error instance upon error. See WP_Http::response() for details. // obf
	 */ // obf
	public function head( $v_gqtqa, $v_lpikc = array() ) { // obf
		$v_zpqyn    = array( 'method' => 'HEAD' ); // obf
		$v_qbelv = wp_parse_args( $v_lpikc, $v_zpqyn ); // obf
		return $v_rnedj->request( $v_gqtqa, $v_qbelv ); // obf
	} // obf

	/** // obf
	 * Parses the responses and splits the parts into headers and body. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_osdgl The full response string. // obf
	 * @return array { // obf
	 *     Array with response headers and body. // obf
	 * // obf
	 *     @type string $v_bohqd HTTP response headers. // obf
	 *     @type string $v_eblwk    HTTP response body. // obf
	 * } // obf
	 */ // obf
	public static function processResponse( $v_osdgl ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		$v_osdgl = explode( "\r\n\r\n", $v_osdgl, 2 ); // obf

		return array( // obf
			'headers' => $v_osdgl[0], // obf
			'body'    => isset( $v_osdgl[1] ) ? $v_osdgl[1] : '', // obf
		); // obf
	} // obf

	/** // obf
	 * Transforms header string into an array. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string|array $v_bohqd The original headers. If a string is passed, it will be converted // obf
	 *                              to an array. If an array is passed, then it is assumed to be // obf
	 *                              raw header data with numeric keys with the headers as the values. // obf
	 *                              No headers must be passed that were already processed. // obf
	 * @param string       $v_gqtqa     Optional. The URL that was requested. Default empty. // obf
	 * @return array { // obf
	 *     Processed string headers. If duplicate headers are encountered, // obf
	 *     then a numbered array is returned as the value of that header-key. // obf
	 * // obf
	 *     @type array            $v_osdgl { // obf
	 *         @type int    $v_tunui    The response status code. Default 0. // obf
	 *         @type string $v_sxohv The response message. Default empty. // obf
	 *     } // obf
	 *     @type array            $v_tuqts The processed header data as a multidimensional array. // obf
	 *     @type WP_Http_Cookie[] $v_zffqy    If the original headers contain the 'Set-Cookie' key, // obf
	 *                                        an array containing `WP_Http_Cookie` objects is returned. // obf
	 * } // obf
	 */ // obf
	public static function processHeaders( $v_bohqd, $v_gqtqa = '' ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		// Split headers, one per array element. // obf
		if ( is_string( $v_bohqd ) ) { // obf
			// Tolerate line terminator: CRLF = LF (RFC 2616 19.3). // obf
			$v_bohqd = str_replace( "\r\n", "\n", $v_bohqd ); // obf
			/* // obf
			 * Unfold folded header fields. LWS = [CRLF] 1*( SP | HT ) <US-ASCII SP, space (32)>, // obf
			 * <US-ASCII HT, horizontal-tab (9)> (RFC 2616 2.2). // obf
			 */ // obf
			$v_bohqd = __fn_37772( '/\n[ \t]/', ' ', $v_bohqd ); // obf
			// Create the headers array. // obf
			$v_bohqd = explode( "\n", $v_bohqd ); // obf
		} // obf

		$v_osdgl = array( // obf
			'code'    => 0, // obf
			'message' => '', // obf
		); // obf

		/* // obf
		 * If a redirection has taken place, The headers for each page request may have been passed. // obf
		 * In this case, determine the final HTTP header and parse from there. // obf
		 */ // obf
		for ( $v_wrwml = count( $v_bohqd ) - 1; $v_wrwml >= 0; $v_wrwml-- ) { // obf
			if ( ! empty( $v_bohqd[ $v_wrwml ] ) && ! str_contains( $v_bohqd[ $v_wrwml ], ':' ) ) { // obf
				$v_bohqd = array_splice( $v_bohqd, $v_wrwml ); // obf
				break; // obf
			} // obf
		} // obf

		$v_zffqy    = array(); // obf
		$v_tuqts = array(); // obf
		foreach ( (array) $v_bohqd as $v_mkikp ) { // obf
			if ( empty( $v_mkikp ) ) { // obf
				continue; // obf
			} // obf

			if ( ! str_contains( $v_mkikp, ':' ) ) { // obf
				$v_jjrph   = explode( ' ', $v_mkikp, 3 ); // obf
				$v_jjrph[] = ''; // obf
				list( , $v_osdgl['code'], $v_osdgl['message']) = $v_jjrph; // obf
				continue; // obf
			} // obf

			list($v_adxya, $v_mpqhj) = explode( ':', $v_mkikp, 2 ); // obf

			$v_adxya   = strtolower( $v_adxya ); // obf
			$v_mpqhj = trim( $v_mpqhj ); // obf

			if ( isset( $v_tuqts[ $v_adxya ] ) ) { // obf
				if ( ! is_array( $v_tuqts[ $v_adxya ] ) ) { // obf
					$v_tuqts[ $v_adxya ] = array( $v_tuqts[ $v_adxya ] ); // obf
				} // obf
				$v_tuqts[ $v_adxya ][] = $v_mpqhj; // obf
			} else { // obf
				$v_tuqts[ $v_adxya ] = $v_mpqhj; // obf
			} // obf
			if ( 'set-cookie' === $v_adxya ) { // obf
				$v_zffqy[] = new WP_Http_Cookie( $v_mpqhj, $v_gqtqa ); // obf
			} // obf
		} // obf

		// Cast the Response Code to an int. // obf
		$v_osdgl['code'] = (int) $v_osdgl['code']; // obf

		return array( // obf
			'response' => $v_osdgl, // obf
			'headers'  => $v_tuqts, // obf
			'cookies'  => $v_zffqy, // obf
		); // obf
	} // obf

	/** // obf
	 * Takes the arguments for a ::request() and checks for the cookie array. // obf
	 * // obf
	 * If it's found, then it upgrades any basic name => value pairs to WP_Http_Cookie instances, // obf
	 * which are each parsed into strings and added to the Cookie: header (within the arguments array). // obf
	 * Edits the array by reference. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_wyhjb Full array of args passed into ::request() // obf
	 */ // obf
	public static function buildCookieHeader( &$v_wyhjb ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		if ( ! empty( $v_wyhjb['cookies'] ) ) { // obf
			// Upgrade any name => value cookie pairs to WP_HTTP_Cookie instances. // obf
			foreach ( $v_wyhjb['cookies'] as $v_fuijk => $v_mpqhj ) { // obf
				if ( ! is_object( $v_mpqhj ) ) { // obf
					$v_wyhjb['cookies'][ $v_fuijk ] = new WP_Http_Cookie( // obf
						array( // obf
							'name'  => $v_fuijk, // obf
							'value' => $v_mpqhj, // obf
						) // obf
					); // obf
				} // obf
			} // obf

			$v_xrmcv = ''; // obf
			foreach ( (array) $v_wyhjb['cookies'] as $v_oegww ) { // obf
				$v_xrmcv .= $v_oegww->getHeaderValue() . '; '; // obf
			} // obf

			$v_xrmcv         = substr( $v_xrmcv, 0, -2 ); // obf
			$v_wyhjb['headers']['cookie'] = $v_xrmcv; // obf
		} // obf
	} // obf

	/** // obf
	 * Decodes chunk transfer-encoding, based off the HTTP 1.1 specification. // obf
	 * // obf
	 * Based off the HTTP http_encoding_dechunk function. // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc2616#section-19.4.6 Process for chunked decoding. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string $v_eblwk Body content. // obf
	 * @return string Chunked decoded body on success or raw body on failure. // obf
	 */ // obf
	public static function chunkTransferDecode( $v_eblwk ) { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		// The body is not chunked encoded or is malformed. // obf
		if ( ! preg_match( '/^([0-9a-f]+)[^\r\n]*\r\n/i', trim( $v_eblwk ) ) ) { // obf
			return $v_eblwk; // obf
		} // obf

		$v_jhkuk = ''; // obf

		// We'll be altering $v_eblwk, so need a backup in case of error. // obf
		$v_fdedc = $v_eblwk; // obf

		while ( true ) { // obf
			$v_imier = (bool) preg_match( '/^([0-9a-f]+)[^\r\n]*\r\n/i', $v_eblwk, $v_nkurm ); // obf
			if ( ! $v_imier || empty( $v_nkurm[1] ) ) { // obf
				return $v_fdedc; // obf
			} // obf

			$v_famxz       = hexdec( $v_nkurm[1] ); // obf
			$v_pybab = strlen( $v_nkurm[0] ); // obf

			// Parse out the chunk of data. // obf
			$v_jhkuk .= substr( $v_eblwk, $v_pybab, $v_famxz ); // obf

			// Remove the chunk from the raw data. // obf
			$v_eblwk = substr( $v_eblwk, $v_famxz + $v_pybab ); // obf

			// End of the document. // obf
			if ( '0' === trim( $v_eblwk ) ) { // obf
				return $v_jhkuk; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether an HTTP API request to the given URL should be blocked. // obf
	 * // obf
	 * Those who are behind a proxy and want to prevent access to certain hosts may do so. This will // obf
	 * prevent plugins from working and core functionality, if you don't include `api.wordpress.org`. // obf
	 * // obf
	 * You block external URL requests by defining `WP_HTTP_BLOCK_EXTERNAL` as true in your `wp-config.php` // obf
	 * file and this will only allow localhost and your site to make requests. The constant // obf
	 * `WP_ACCESSIBLE_HOSTS` will allow additional hosts to go through for requests. The format of the // obf
	 * `WP_ACCESSIBLE_HOSTS` constant is a comma separated list of hostnames to allow, wildcard domains // obf
	 * are supported, eg `*.wordpress.org` will allow for all subdomains of `wordpress.org` to be contacted. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @link https://core.trac.wordpress.org/ticket/8927 Allow preventing external requests. // obf
	 * @link https://core.trac.wordpress.org/ticket/14636 Allow wildcard domains in WP_ACCESSIBLE_HOSTS // obf
	 * // obf
	 * @param string $v_jqeen URI of url. // obf
	 * @return bool True to block, false to allow. // obf
	 */ // obf
	public function block_request( $v_jqeen ) { // obf
		// We don't need to block requests, because nothing is blocked. // obf
		if ( ! defined( 'WP_HTTP_BLOCK_EXTERNAL' ) || ! WP_HTTP_BLOCK_EXTERNAL ) { // obf
			return false; // obf
		} // obf

		$v_ovvir = parse_url( $v_jqeen ); // obf
		if ( ! $v_ovvir ) { // obf
			return true; // obf
		} // obf

		$v_takfu = parse_url( get_option( 'siteurl' ) ); // obf

		// Don't block requests back to ourselves by default. // obf
		if ( 'localhost' === $v_ovvir['host'] || ( isset( $v_takfu['host'] ) && $v_takfu['host'] === $v_ovvir['host'] ) ) { // obf
			/** // obf
			 * Filters whether to block local HTTP API requests. // obf
			 * // obf
			 * A local request is one to `localhost` or to the same host as the site itself. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param bool $v_mbsfh Whether to block local requests. Default false. // obf
			 */ // obf
			return apply_filters( 'block_local_requests', false ); // obf
		} // obf

		if ( ! defined( 'WP_ACCESSIBLE_HOSTS' ) ) { // obf
			return true; // obf
		} // obf

		static $v_jeuny = null; // obf
		static $v_djexu   = array(); // obf
		if ( null === $v_jeuny ) { // obf
			$v_jeuny = preg_split( '|,\s*|', WP_ACCESSIBLE_HOSTS ); // obf

			if ( str_contains( WP_ACCESSIBLE_HOSTS, '*' ) ) { // obf
				$v_djexu = array(); // obf
				foreach ( $v_jeuny as $v_yeyei ) { // obf
					$v_djexu[] = str_replace( '\*', '.+', preg_quote( $v_yeyei, '/' ) ); // obf
				} // obf
				$v_djexu = '/^(' . implode( '|', $v_djexu ) . ')$/i'; // obf
			} // obf
		} // obf

		if ( ! empty( $v_djexu ) ) { // obf
			return ! preg_match( $v_djexu, $v_ovvir['host'] ); // obf
		} else { // obf
			return ! in_array( $v_ovvir['host'], $v_jeuny, true ); // Inverse logic, if it's in the array, then don't block it. // obf
		} // obf
	} // obf

	/** // obf
	 * Used as a wrapper for PHP's parse_url() function that handles edgecases in < PHP 5.4.7. // obf
	 * // obf
	 * @deprecated 4.4.0 Use wp_parse_url() // obf
	 * @see wp_parse_url() // obf
	 * // obf
	 * @param string $v_gqtqa The URL to parse. // obf
	 * @return bool|array False on failure; Array of URL components on success; // obf
	 *                    See parse_url()'s return values. // obf
	 */ // obf
	protected static function parse_url( $v_gqtqa ) { // obf
		_deprecated_function( __METHOD__, '4.4.0', 'wp_parse_url()' ); // obf
		return wp_parse_url( $v_gqtqa ); // obf
	} // obf

	/** // obf
	 * Converts a relative URL to an absolute URL relative to a given URL. // obf
	 * // obf
	 * If an Absolute URL is provided, no processing of that URL is done. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_orhns The URL which might be relative. // obf
	 * @param string $v_gqtqa                 The URL which $v_orhns is relative to. // obf
	 * @return string An Absolute URL, in a failure condition where the URL cannot be parsed, the relative URL will be returned. // obf
	 */ // obf
	public static function make_absolute_url( $v_orhns, $v_gqtqa ) { // obf
		if ( empty( $v_gqtqa ) ) { // obf
			return $v_orhns; // obf
		} // obf

		$v_mpsvn = wp_parse_url( $v_gqtqa ); // obf
		if ( ! $v_mpsvn ) { // obf
			return $v_orhns; // obf
		} // obf

		$v_gahcm = wp_parse_url( $v_orhns ); // obf
		if ( ! $v_gahcm ) { // obf
			return $v_orhns; // obf
		} // obf

		// Check for a scheme on the 'relative' URL. // obf
		if ( ! empty( $v_gahcm['scheme'] ) ) { // obf
			return $v_orhns; // obf
		} // obf

		$v_ahqlx = $v_mpsvn['scheme'] . '://'; // obf

		// Schemeless URLs will make it this far, so we check for a host in the relative URL // obf
		// and convert it to a protocol-URL. // obf
		if ( isset( $v_gahcm['host'] ) ) { // obf
			$v_ahqlx .= $v_gahcm['host']; // obf
			if ( isset( $v_gahcm['port'] ) ) { // obf
				$v_ahqlx .= ':' . $v_gahcm['port']; // obf
			} // obf
		} else { // obf
			$v_ahqlx .= $v_mpsvn['host']; // obf
			if ( isset( $v_mpsvn['port'] ) ) { // obf
				$v_ahqlx .= ':' . $v_mpsvn['port']; // obf
			} // obf
		} // obf

		// Start off with the absolute URL path. // obf
		$v_kctgj = ! empty( $v_mpsvn['path'] ) ? $v_mpsvn['path'] : '/'; // obf

		// If it's a root-relative path, then great. // obf
		if ( ! empty( $v_gahcm['path'] ) && '/' === $v_gahcm['path'][0] ) { // obf
			$v_kctgj = $v_gahcm['path']; // obf

			// Else it's a relative path. // obf
		} elseif ( ! empty( $v_gahcm['path'] ) ) { // obf
			// Strip off any file components from the absolute path. // obf
			$v_kctgj = substr( $v_kctgj, 0, strrpos( $v_kctgj, '/' ) + 1 ); // obf

			// Build the new path. // obf
			$v_kctgj .= $v_gahcm['path']; // obf

			// Strip all /path/../ out of the path. // obf
			while ( strpos( $v_kctgj, '../' ) > 1 ) { // obf
				$v_kctgj = __fn_37772( '![^/]+/\.\./!', '', $v_kctgj ); // obf
			} // obf

			// Strip any final leading ../ from the path. // obf
			$v_kctgj = __fn_37772( '!^/(\.\./)+!', '', $v_kctgj ); // obf
		} // obf

		// Add the query string. // obf
		if ( ! empty( $v_gahcm['query'] ) ) { // obf
			$v_kctgj .= '?' . $v_gahcm['query']; // obf
		} // obf

		// Add the fragment. // obf
		if ( ! empty( $v_gahcm['fragment'] ) ) { // obf
			$v_kctgj .= '#' . $v_gahcm['fragment']; // obf
		} // obf

		return $v_ahqlx . '/' . ltrim( $v_kctgj, '/' ); // obf
	} // obf

	/** // obf
	 * Handles an HTTP redirect and follows it if appropriate. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string $v_gqtqa      The URL which was requested. // obf
	 * @param array  $v_lpikc     The arguments which were used to make the request. // obf
	 * @param array  $v_osdgl The response of the HTTP request. // obf
	 * @return array|false|WP_Error An HTTP API response array if the redirect is successfully followed, // obf
	 *                              false if no redirect is present, or a WP_Error object if there's an error. // obf
	 */ // obf
	public static function handle_redirects( $v_gqtqa, $v_lpikc, $v_osdgl ) { // obf
		// If no redirects are present, or, redirects were not requested, perform no action. // obf
		if ( ! isset( $v_osdgl['headers']['location'] ) || 0 === $v_lpikc['_redirection'] ) { // obf
			return false; // obf
		} // obf

		// Only perform redirections on redirection http codes. // obf
		if ( $v_osdgl['response']['code'] > 399 || $v_osdgl['response']['code'] < 300 ) { // obf
			return false; // obf
		} // obf

		// Don't redirect if we've run out of redirects. // obf
		if ( $v_lpikc['redirection']-- <= 0 ) { // obf
			return new WP_Error( 'http_request_failed', __( 'Too many redirects.' ) ); // obf
		} // obf

		$v_nydly = $v_osdgl['headers']['location']; // obf

		// If there were multiple Location headers, use the last header specified. // obf
		if ( is_array( $v_nydly ) ) { // obf
			$v_nydly = array_pop( $v_nydly ); // obf
		} // obf

		$v_nydly = self::make_absolute_url( $v_nydly, $v_gqtqa ); // obf

		// POST requests should not POST to a redirected location. // obf
		if ( 'POST' === $v_lpikc['method'] ) { // obf
			if ( in_array( $v_osdgl['response']['code'], array( 302, 303 ), true ) ) { // obf
				$v_lpikc['method'] = 'GET'; // obf
			} // obf
		} // obf

		// Include valid cookies in the redirect process. // obf
		if ( ! empty( $v_osdgl['cookies'] ) ) { // obf
			foreach ( $v_osdgl['cookies'] as $v_oegww ) { // obf
				if ( $v_oegww->test( $v_nydly ) ) { // obf
					$v_lpikc['cookies'][] = $v_oegww; // obf
				} // obf
			} // obf
		} // obf

		return wp_remote_request( $v_nydly, $v_lpikc ); // obf
	} // obf

	/** // obf
	 * Determines if a specified string represents an IP address or not. // obf
	 * // obf
	 * This function also detects the type of the IP address, returning either // obf
	 * '4' or '6' to represent an IPv4 and IPv6 address respectively. // obf
	 * This does not verify if the IP is a valid IP, only that it appears to be // obf
	 * an IP address. // obf
	 * // obf
	 * @link http://home.deds.nl/~aeron/regex/ for IPv6 regex. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param string $v_njhqs A suspected IP address. // obf
	 * @return int|false Upon success, '4' or '6' to represent an IPv4 or IPv6 address, false upon failure. // obf
	 */ // obf
	public static function is_ip_address( $v_njhqs ) { // obf
		if ( preg_match( '/^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $v_njhqs ) ) { // obf
			return 4; // obf
		} // obf

		if ( str_contains( $v_njhqs, ':' ) && preg_match( '/^(((?=.*(::))(?!.*\3.+\3))\3?|([\dA-F]{1,4}(\3|:\b|$)|\2))(?4){5}((?4){2}|(((2[0-4]|1\d|[1-9])?\d|25[0-5])\.?\b){4})$/i', trim( $v_njhqs, ' []' ) ) ) { // obf
			return 6; // obf
		} // obf

		return false; // obf
	} // obf
} // obf