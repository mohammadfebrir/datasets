

<?php // obf
/** // obf
 * HTTP API: WP_Http_Curl class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to integrate Curl as an HTTP transport. // obf
 * // obf
 * HTTP request method uses Curl extension to retrieve the url. // obf
 * // obf
 * Requires the Curl extension to be installed. // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 6.4.0 Use WP_Http // obf
 * @see WP_Http // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Http_Curl { // obf

	/** // obf
	 * Temporary header storage for during requests. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_pvbcc = ''; // obf

	/** // obf
	 * Temporary body storage for during requests. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_tjfbw = ''; // obf

	/** // obf
	 * The maximum amount of data to receive from the remote server. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * @var int|false // obf
	 */ // obf
	private $v_zkpje = false; // obf

	/** // obf
	 * The file resource used for streaming to file. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * @var resource|false // obf
	 */ // obf
	private $v_euffn = false; // obf

	/** // obf
	 * The total bytes written in the current request. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var int // obf
	 */ // obf
	private $v_siudq = 0; // obf

	/** // obf
	 * Send a HTTP request to a URI using cURL extension. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param string       $v_nudty  The request URL. // obf
	 * @param string|array $v_ubyof Optional. Override the defaults. // obf
	 * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'. A WP_Error instance upon error // obf
	 */ // obf
	public function request( $v_nudty, $v_ubyof = array() ) { // obf
		$v_ewcsl = array( // obf
			'method'      => 'GET', // obf
			'timeout'     => 5, // obf
			'redirection' => 5, // obf
			'httpversion' => '1.0', // obf
			'blocking'    => true, // obf
			'headers'     => array(), // obf
			'body'        => null, // obf
			'cookies'     => array(), // obf
			'decompress'  => false, // obf
			'stream'      => false, // obf
			'filename'    => null, // obf
		); // obf

		$v_lcykd = wp_parse_args( $v_ubyof, $v_ewcsl ); // obf

		if ( isset( $v_lcykd['headers']['User-Agent'] ) ) { // obf
			$v_lcykd['user-agent'] = $v_lcykd['headers']['User-Agent']; // obf
			unset( $v_lcykd['headers']['User-Agent'] ); // obf
		} elseif ( isset( $v_lcykd['headers']['user-agent'] ) ) { // obf
			$v_lcykd['user-agent'] = $v_lcykd['headers']['user-agent']; // obf
			unset( $v_lcykd['headers']['user-agent'] ); // obf
		} // obf

		// Construct Cookie: header if any cookies are set. // obf
		WP_Http::buildCookieHeader( $v_lcykd ); // obf

		$v_pzfmo = curl_init(); // obf

		// cURL offers really easy proxy support. // obf
		$v_ckqqp = new WP_HTTP_Proxy(); // obf

		if ( $v_ckqqp->is_enabled() && $v_ckqqp->send_through_proxy( $v_nudty ) ) { // obf

			curl_setopt( $v_pzfmo, CURLOPT_PROXYTYPE, CURLPROXY_HTTP ); // obf
			curl_setopt( $v_pzfmo, CURLOPT_PROXY, $v_ckqqp->host() ); // obf
			curl_setopt( $v_pzfmo, CURLOPT_PROXYPORT, $v_ckqqp->port() ); // obf

			if ( $v_ckqqp->use_authentication() ) { // obf
				curl_setopt( $v_pzfmo, CURLOPT_PROXYAUTH, CURLAUTH_ANY ); // obf
				curl_setopt( $v_pzfmo, CURLOPT_PROXYUSERPWD, $v_ckqqp->authentication() ); // obf
			} // obf
		} // obf

		$v_bmgtp   = isset( $v_lcykd['local'] ) && $v_lcykd['local']; // obf
		$v_sbrlu = isset( $v_lcykd['sslverify'] ) && $v_lcykd['sslverify']; // obf
		if ( $v_bmgtp ) { // obf
			/** This filter is documented in wp-includes/class-wp-http-streams.php */ // obf
			$v_sbrlu = apply_filters( 'https_local_ssl_verify', $v_sbrlu, $v_nudty ); // obf
		} elseif ( ! $v_bmgtp ) { // obf
			/** This filter is documented in wp-includes/class-wp-http.php */ // obf
			$v_sbrlu = apply_filters( 'https_ssl_verify', $v_sbrlu, $v_nudty ); // obf
		} // obf

		/* // obf
		 * CURLOPT_TIMEOUT and CURLOPT_CONNECTTIMEOUT expect integers. Have to use ceil since. // obf
		 * a value of 0 will allow an unlimited timeout. // obf
		 */ // obf
		$v_kispt = (int) ceil( $v_lcykd['timeout'] ); // obf
		curl_setopt( $v_pzfmo, CURLOPT_CONNECTTIMEOUT, $v_kispt ); // obf
		curl_setopt( $v_pzfmo, CURLOPT_TIMEOUT, $v_kispt ); // obf

		curl_setopt( $v_pzfmo, CURLOPT_URL, $v_nudty ); // obf
		curl_setopt( $v_pzfmo, CURLOPT_RETURNTRANSFER, true ); // obf
		curl_setopt( $v_pzfmo, CURLOPT_SSL_VERIFYHOST, ( true === $v_sbrlu ) ? 2 : false ); // obf
		curl_setopt( $v_pzfmo, CURLOPT_SSL_VERIFYPEER, $v_sbrlu ); // obf

		if ( $v_sbrlu ) { // obf
			curl_setopt( $v_pzfmo, CURLOPT_CAINFO, $v_lcykd['sslcertificates'] ); // obf
		} // obf

		curl_setopt( $v_pzfmo, CURLOPT_USERAGENT, $v_lcykd['user-agent'] ); // obf

		/* // obf
		 * The option doesn't work with safe mode or when open_basedir is set, and there's // obf
		 * a bug #17490 with redirected POST requests, so handle redirections outside Curl. // obf
		 */ // obf
		curl_setopt( $v_pzfmo, CURLOPT_FOLLOWLOCATION, false ); // obf
		curl_setopt( $v_pzfmo, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS ); // obf

		switch ( $v_lcykd['method'] ) { // obf
			case 'HEAD': // obf
				curl_setopt( $v_pzfmo, CURLOPT_NOBODY, true ); // obf
				break; // obf
			case 'POST': // obf
				curl_setopt( $v_pzfmo, CURLOPT_POST, true ); // obf
				curl_setopt( $v_pzfmo, CURLOPT_POSTFIELDS, $v_lcykd['body'] ); // obf
				break; // obf
			case 'PUT': // obf
				curl_setopt( $v_pzfmo, CURLOPT_CUSTOMREQUEST, 'PUT' ); // obf
				curl_setopt( $v_pzfmo, CURLOPT_POSTFIELDS, $v_lcykd['body'] ); // obf
				break; // obf
			default: // obf
				curl_setopt( $v_pzfmo, CURLOPT_CUSTOMREQUEST, $v_lcykd['method'] ); // obf
				if ( ! is_null( $v_lcykd['body'] ) ) { // obf
					curl_setopt( $v_pzfmo, CURLOPT_POSTFIELDS, $v_lcykd['body'] ); // obf
				} // obf
				break; // obf
		} // obf

		if ( true === $v_lcykd['blocking'] ) { // obf
			curl_setopt( $v_pzfmo, CURLOPT_HEADERFUNCTION, array( $v_olxdd, 'stream_headers' ) ); // obf
			curl_setopt( $v_pzfmo, CURLOPT_WRITEFUNCTION, array( $v_olxdd, 'stream_body' ) ); // obf
		} // obf

		curl_setopt( $v_pzfmo, CURLOPT_HEADER, false ); // obf

		if ( isset( $v_lcykd['limit_response_size'] ) ) { // obf
			$v_olxdd->max_body_length = (int) $v_lcykd['limit_response_size']; // obf
		} else { // obf
			$v_olxdd->max_body_length = false; // obf
		} // obf

		// If streaming to a file open a file handle, and setup our curl streaming handler. // obf
		if ( $v_lcykd['stream'] ) { // obf
			if ( ! WP_DEBUG ) { // obf
				$v_olxdd->stream_handle = @fopen( $v_lcykd['filename'], 'w+' ); // obf
			} else { // obf
				$v_olxdd->stream_handle = fopen( $v_lcykd['filename'], 'w+' ); // obf
			} // obf
			if ( ! $v_olxdd->stream_handle ) { // obf
				return new WP_Error( // obf
					'http_request_failed', // obf
					sprintf( // obf
						/* translators: 1: fopen(), 2: File name. */ // obf
						__( 'Could not open handle for %1$v_mgiyk to %2$v_mgiyk.' ), // obf
						'fopen()', // obf
						$v_lcykd['filename'] // obf
					) // obf
				); // obf
			} // obf
		} else { // obf
			$v_olxdd->stream_handle = false; // obf
		} // obf

		if ( ! empty( $v_lcykd['headers'] ) ) { // obf
			// cURL expects full header strings in each element. // obf
			$v_pvbcc = array(); // obf
			foreach ( $v_lcykd['headers'] as $v_yobeq => $v_bidai ) { // obf
				$v_pvbcc[] = "{$v_yobeq}: $v_bidai"; // obf
			} // obf
			curl_setopt( $v_pzfmo, CURLOPT_HTTPHEADER, $v_pvbcc ); // obf
		} // obf

		if ( '1.0' === $v_lcykd['httpversion'] ) { // obf
			curl_setopt( $v_pzfmo, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0 ); // obf
		} else { // obf
			curl_setopt( $v_pzfmo, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1 ); // obf
		} // obf

		/** // obf
		 * Fires before the cURL request is executed. // obf
		 * // obf
		 * Cookies are not currently handled by the HTTP API. This action allows // obf
		 * plugins to handle cookies themselves. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param resource $v_pzfmo      The cURL handle returned by curl_init() (passed by reference). // obf
		 * @param array    $v_lcykd The HTTP request arguments. // obf
		 * @param string   $v_nudty         The request URL. // obf
		 */ // obf
		do_action_ref_array( 'http_api_curl', array( &$v_pzfmo, $v_lcykd, $v_nudty ) ); // obf

		// We don't need to return the body, so don't. Just execute request and return. // obf
		if ( ! $v_lcykd['blocking'] ) { // obf
			curl_exec( $v_pzfmo ); // obf

			$v_aivft = curl_error( $v_pzfmo ); // obf
			if ( $v_aivft ) { // obf
				curl_close( $v_pzfmo ); // obf
				return new WP_Error( 'http_request_failed', $v_aivft ); // obf
			} // obf
			if ( in_array( curl_getinfo( $v_pzfmo, CURLINFO_HTTP_CODE ), array( 301, 302 ), true ) ) { // obf
				curl_close( $v_pzfmo ); // obf
				return new WP_Error( 'http_request_failed', __( 'Too many redirects.' ) ); // obf
			} // obf

			curl_close( $v_pzfmo ); // obf
			return array( // obf
				'headers'  => array(), // obf
				'body'     => '', // obf
				'response' => array( // obf
					'code'    => false, // obf
					'message' => false, // obf
				), // obf
				'cookies'  => array(), // obf
			); // obf
		} // obf

		curl_exec( $v_pzfmo ); // obf

		$v_imrth   = WP_Http::processHeaders( $v_olxdd->headers, $v_nudty ); // obf
		$v_tjfbw                = $v_olxdd->body; // obf
		$v_siudq = $v_olxdd->bytes_written_total; // obf

		$v_olxdd->headers             = ''; // obf
		$v_olxdd->body                = ''; // obf
		$v_olxdd->bytes_written_total = 0; // obf

		$v_aivft = curl_errno( $v_pzfmo ); // obf

		// If an error occurred, or, no response. // obf
		if ( $v_aivft || ( 0 === strlen( $v_tjfbw ) && empty( $v_imrth['headers'] ) ) ) { // obf
			if ( CURLE_WRITE_ERROR /* 23 */ === $v_aivft ) { // obf
				if ( ! $v_olxdd->max_body_length || $v_olxdd->max_body_length !== $v_siudq ) { // obf
					if ( $v_lcykd['stream'] ) { // obf
						curl_close( $v_pzfmo ); // obf
						fclose( $v_olxdd->stream_handle ); // obf
						return new WP_Error( 'http_request_failed', __( 'Failed to write request to temporary file.' ) ); // obf
					} else { // obf
						curl_close( $v_pzfmo ); // obf
						return new WP_Error( 'http_request_failed', curl_error( $v_pzfmo ) ); // obf
					} // obf
				} // obf
			} else { // obf
				$v_aivft = curl_error( $v_pzfmo ); // obf
				if ( $v_aivft ) { // obf
					curl_close( $v_pzfmo ); // obf
					return new WP_Error( 'http_request_failed', $v_aivft ); // obf
				} // obf
			} // obf
			if ( in_array( curl_getinfo( $v_pzfmo, CURLINFO_HTTP_CODE ), array( 301, 302 ), true ) ) { // obf
				curl_close( $v_pzfmo ); // obf
				return new WP_Error( 'http_request_failed', __( 'Too many redirects.' ) ); // obf
			} // obf
		} // obf

		curl_close( $v_pzfmo ); // obf

		if ( $v_lcykd['stream'] ) { // obf
			fclose( $v_olxdd->stream_handle ); // obf
		} // obf

		$v_fnjve = array( // obf
			'headers'  => $v_imrth['headers'], // obf
			'body'     => null, // obf
			'response' => $v_imrth['response'], // obf
			'cookies'  => $v_imrth['cookies'], // obf
			'filename' => $v_lcykd['filename'], // obf
		); // obf

		// Handle redirects. // obf
		$v_zcgth = WP_Http::handle_redirects( $v_nudty, $v_lcykd, $v_fnjve ); // obf
		if ( false !== $v_zcgth ) { // obf
			return $v_zcgth; // obf
		} // obf

		if ( true === $v_lcykd['decompress'] // obf
			&& true === WP_Http_Encoding::should_decode( $v_imrth['headers'] ) // obf
		) { // obf
			$v_tjfbw = WP_Http_Encoding::decompress( $v_tjfbw ); // obf
		} // obf

		$v_fnjve['body'] = $v_tjfbw; // obf

		return $v_fnjve; // obf
	} // obf

	/** // obf
	 * Grabs the headers of the cURL request. // obf
	 * // obf
	 * Each header is sent individually to this callback, and is appended to the `$v_afuzi` property // obf
	 * for temporary storage. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * // obf
	 * @param resource $v_pzfmo  cURL handle. // obf
	 * @param string   $v_pvbcc cURL request headers. // obf
	 * @return int Length of the request headers. // obf
	 */ // obf
	private function stream_headers( $v_pzfmo, $v_pvbcc ) { // obf
		$v_olxdd->headers .= $v_pvbcc; // obf
		return strlen( $v_pvbcc ); // obf
	} // obf

	/** // obf
	 * Grabs the body of the cURL request. // obf
	 * // obf
	 * The contents of the document are passed in chunks, and are appended to the `$v_tjfbw` // obf
	 * property for temporary storage. Returning a length shorter than the length of // obf
	 * `$v_tqhrt` passed in will cause cURL to abort the request with `CURLE_WRITE_ERROR`. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param resource $v_pzfmo cURL handle. // obf
	 * @param string   $v_tqhrt   cURL request body. // obf
	 * @return int Total bytes of data written. // obf
	 */ // obf
	private function stream_body( $v_pzfmo, $v_tqhrt ) { // obf
		$v_gfthr = strlen( $v_tqhrt ); // obf

		if ( $v_olxdd->max_body_length && ( $v_olxdd->bytes_written_total + $v_gfthr ) > $v_olxdd->max_body_length ) { // obf
			$v_gfthr = ( $v_olxdd->max_body_length - $v_olxdd->bytes_written_total ); // obf
			$v_tqhrt        = substr( $v_tqhrt, 0, $v_gfthr ); // obf
		} // obf

		if ( $v_olxdd->stream_handle ) { // obf
			$v_qvfri = fwrite( $v_olxdd->stream_handle, $v_tqhrt ); // obf
		} else { // obf
			$v_olxdd->body   .= $v_tqhrt; // obf
			$v_qvfri = $v_gfthr; // obf
		} // obf

		$v_olxdd->bytes_written_total += $v_qvfri; // obf

		// Upon event of this function returning less than strlen( $v_tqhrt ) curl will error with CURLE_WRITE_ERROR. // obf
		return $v_qvfri; // obf
	} // obf

	/** // obf
	 * Determines whether this class can be used for retrieving a URL. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_ubyof Optional. Array of request arguments. Default empty array. // obf
	 * @return bool False means this class can not be used, true means it can. // obf
	 */ // obf
	public static function test( $v_ubyof = array() ) { // obf
		if ( ! function_exists( 'curl_init' ) || ! function_exists( 'curl_exec' ) ) { // obf
			return false; // obf
		} // obf

		$v_nijsa = isset( $v_ubyof['ssl'] ) && $v_ubyof['ssl']; // obf

		if ( $v_nijsa ) { // obf
			$v_lrlti = curl_version(); // obf
			// Check whether this cURL version support SSL requests. // obf
			if ( ! ( CURL_VERSION_SSL & $v_lrlti['features'] ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters whether cURL can be used as a transport for retrieving a URL. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param bool  $v_yictg Whether the class can be used. Default true. // obf
		 * @param array $v_ubyof      An array of request arguments. // obf
		 */ // obf
		return apply_filters( 'use_curl_transport', true, $v_ubyof ); // obf
	} // obf
} // obf