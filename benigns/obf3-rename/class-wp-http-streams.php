
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * HTTP API: WP_Http_Streams class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to integrate PHP Streams as an HTTP transport. // obf
 * // obf
 * @since 2.7.0 // obf
 * @since 3.7.0 Combined with the fsockopen transport and switched to `stream_socket_client()`. // obf
 * @deprecated 6.4.0 Use WP_Http // obf
 * @see WP_Http // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Http_Streams { // obf
	/** // obf
	 * Send a HTTP request to a URI using PHP Streams. // obf
	 * // obf
	 * @see WP_Http::request() For default options descriptions. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 3.7.0 Combined with the fsockopen transport and switched to stream_socket_client(). // obf
	 * // obf
	 * @param string       $v_hnrfx  The request URL. // obf
	 * @param string|array $v_vinop Optional. Override the defaults. // obf
	 * @return array|WP_Error Array containing 'headers', 'body', 'response', 'cookies', 'filename'. A WP_Error instance upon error // obf
	 */ // obf
	public function request( $v_hnrfx, $v_vinop = array() ) { // obf
		$v_drwyg = array( // obf
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

		$v_ynfgk = wp_parse_args( $v_vinop, $v_drwyg ); // obf

		if ( isset( $v_ynfgk['headers']['User-Agent'] ) ) { // obf
			$v_ynfgk['user-agent'] = $v_ynfgk['headers']['User-Agent']; // obf
			unset( $v_ynfgk['headers']['User-Agent'] ); // obf
		} elseif ( isset( $v_ynfgk['headers']['user-agent'] ) ) { // obf
			$v_ynfgk['user-agent'] = $v_ynfgk['headers']['user-agent']; // obf
			unset( $v_ynfgk['headers']['user-agent'] ); // obf
		} // obf

		// Construct Cookie: header if any cookies are set. // obf
		WP_Http::buildCookieHeader( $v_ynfgk ); // obf

		$v_mubpx = parse_url( $v_hnrfx ); // obf

		$v_ehsee = $v_mubpx['host']; // obf

		$v_yptlk = ( 'ssl' === $v_mubpx['scheme'] || 'https' === $v_mubpx['scheme'] ); // obf
		if ( ! isset( $v_mubpx['port'] ) ) { // obf
			if ( 'ssl' === $v_mubpx['scheme'] || 'https' === $v_mubpx['scheme'] ) { // obf
				$v_mubpx['port'] = 443; // obf
				$v_yptlk   = true; // obf
			} else { // obf
				$v_mubpx['port'] = 80; // obf
			} // obf
		} // obf

		// Always pass a path, defaulting to the root in cases such as http://example.com. // obf
		if ( ! isset( $v_mubpx['path'] ) ) { // obf
			$v_mubpx['path'] = '/'; // obf
		} // obf

		if ( isset( $v_ynfgk['headers']['Host'] ) || isset( $v_ynfgk['headers']['host'] ) ) { // obf
			if ( isset( $v_ynfgk['headers']['Host'] ) ) { // obf
				$v_mubpx['host'] = $v_ynfgk['headers']['Host']; // obf
			} else { // obf
				$v_mubpx['host'] = $v_ynfgk['headers']['host']; // obf
			} // obf
			unset( $v_ynfgk['headers']['Host'], $v_ynfgk['headers']['host'] ); // obf
		} // obf

		/* // obf
		 * Certain versions of PHP have issues with 'localhost' and IPv6, It attempts to connect // obf
		 * to ::1, which fails when the server is not set up for it. For compatibility, always // obf
		 * connect to the IPv4 address. // obf
		 */ // obf
		if ( 'localhost' === strtolower( $v_ehsee ) ) { // obf
			$v_ehsee = '127.0.0.1'; // obf
		} // obf

		$v_ehsee = $v_yptlk ? 'ssl://' . $v_ehsee : 'tcp://' . $v_ehsee; // obf

		$v_sluka   = isset( $v_ynfgk['local'] ) && $v_ynfgk['local']; // obf
		$v_bzmog = isset( $v_ynfgk['sslverify'] ) && $v_ynfgk['sslverify']; // obf

		if ( $v_sluka ) { // obf
			/** // obf
			 * Filters whether SSL should be verified for local HTTP API requests. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * @since 5.1.0 The `$v_hnrfx` parameter was added. // obf
			 * // obf
			 * @param bool|string $v_bzmog Boolean to control whether to verify the SSL connection // obf
			 *                                or path to an SSL certificate. // obf
			 * @param string      $v_hnrfx        The request URL. // obf
			 */ // obf
			$v_bzmog = apply_filters( 'https_local_ssl_verify', $v_bzmog, $v_hnrfx ); // obf
		} elseif ( ! $v_sluka ) { // obf
			/** This filter is documented in wp-includes/class-wp-http.php */ // obf
			$v_bzmog = apply_filters( 'https_ssl_verify', $v_bzmog, $v_hnrfx ); // obf
		} // obf

		$v_sdzlw = new WP_HTTP_Proxy(); // obf

		$v_wwcrs = stream_context_create( // obf
			array( // obf
				'ssl' => array( // obf
					'verify_peer'       => $v_bzmog, // obf
					// 'CN_match' => $v_mubpx['host'], // This is handled by self::verify_ssl_certificate(). // obf
					'capture_peer_cert' => $v_bzmog, // obf
					'SNI_enabled'       => true, // obf
					'cafile'            => $v_ynfgk['sslcertificates'], // obf
					'allow_self_signed' => ! $v_bzmog, // obf
				), // obf
			) // obf
		); // obf

		$v_gmfxd  = (int) floor( $v_ynfgk['timeout'] ); // obf
		$v_olukq = 0; // obf

		if ( $v_gmfxd !== (int) $v_ynfgk['timeout'] ) { // obf
			$v_olukq = 1000000 * $v_ynfgk['timeout'] % 1000000; // obf
		} // obf

		$v_uiwud = max( $v_gmfxd, 1 ); // obf

		// Store error number. // obf
		$v_xrkjn = null; // obf

		// Store error string. // obf
		$v_xirma = null; // obf

		if ( ! WP_DEBUG ) { // obf
			// In the event that the SSL connection fails, silence the many PHP warnings. // obf
			if ( $v_yptlk ) { // obf
				$v_jdoox = error_reporting( 0 ); // obf
			} // obf

			if ( $v_sdzlw->is_enabled() && $v_sdzlw->send_through_proxy( $v_hnrfx ) ) { // obf
				// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
				$v_lpfjy = @stream_socket_client( // obf
					'tcp://' . $v_sdzlw->host() . ':' . $v_sdzlw->port(), // obf
					$v_xrkjn, // obf
					$v_xirma, // obf
					$v_uiwud, // obf
					STREAM_CLIENT_CONNECT, // obf
					$v_wwcrs // obf
				); // obf
			} else { // obf
				// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
				$v_lpfjy = @stream_socket_client( // obf
					$v_ehsee . ':' . $v_mubpx['port'], // obf
					$v_xrkjn, // obf
					$v_xirma, // obf
					$v_uiwud, // obf
					STREAM_CLIENT_CONNECT, // obf
					$v_wwcrs // obf
				); // obf
			} // obf

			if ( $v_yptlk ) { // obf
				error_reporting( $v_jdoox ); // obf
			} // obf
		} else { // obf
			if ( $v_sdzlw->is_enabled() && $v_sdzlw->send_through_proxy( $v_hnrfx ) ) { // obf
				$v_lpfjy = stream_socket_client( // obf
					'tcp://' . $v_sdzlw->host() . ':' . $v_sdzlw->port(), // obf
					$v_xrkjn, // obf
					$v_xirma, // obf
					$v_uiwud, // obf
					STREAM_CLIENT_CONNECT, // obf
					$v_wwcrs // obf
				); // obf
			} else { // obf
				$v_lpfjy = stream_socket_client( // obf
					$v_ehsee . ':' . $v_mubpx['port'], // obf
					$v_xrkjn, // obf
					$v_xirma, // obf
					$v_uiwud, // obf
					STREAM_CLIENT_CONNECT, // obf
					$v_wwcrs // obf
				); // obf
			} // obf
		} // obf

		if ( false === $v_lpfjy ) { // obf
			// SSL connection failed due to expired/invalid cert, or, OpenSSL configuration is broken. // obf
			if ( $v_yptlk && 0 === $v_xrkjn && '' === $v_xirma ) { // obf
				return new WP_Error( 'http_request_failed', __( 'The SSL certificate for the host could not be verified.' ) ); // obf
			} // obf

			return new WP_Error( 'http_request_failed', $v_xrkjn . ': ' . $v_xirma ); // obf
		} // obf

		// Verify that the SSL certificate is valid for this request. // obf
		if ( $v_yptlk && $v_bzmog && ! $v_sdzlw->is_enabled() ) { // obf
			if ( ! self::verify_ssl_certificate( $v_lpfjy, $v_mubpx['host'] ) ) { // obf
				return new WP_Error( 'http_request_failed', __( 'The SSL certificate for the host could not be verified.' ) ); // obf
			} // obf
		} // obf

		stream_set_timeout( $v_lpfjy, $v_gmfxd, $v_olukq ); // obf

		if ( $v_sdzlw->is_enabled() && $v_sdzlw->send_through_proxy( $v_hnrfx ) ) { // Some proxies require full URL in this field. // obf
			$v_kdurm = $v_hnrfx; // obf
		} else { // obf
			$v_kdurm = $v_mubpx['path'] . ( isset( $v_mubpx['query'] ) ? '?' . $v_mubpx['query'] : '' ); // obf
		} // obf

		$v_hcnwj = strtoupper( $v_ynfgk['method'] ) . ' ' . $v_kdurm . ' HTTP/' . $v_ynfgk['httpversion'] . "\r\n"; // obf

		$v_qysyv = ( // obf
			( $v_sdzlw->is_enabled() && $v_sdzlw->send_through_proxy( $v_hnrfx ) ) // obf
			|| ( 'http' === $v_mubpx['scheme'] && 80 !== $v_mubpx['port'] ) // obf
			|| ( 'https' === $v_mubpx['scheme'] && 443 !== $v_mubpx['port'] ) // obf
		); // obf

		if ( $v_qysyv ) { // obf
			$v_hcnwj .= 'Host: ' . $v_mubpx['host'] . ':' . $v_mubpx['port'] . "\r\n"; // obf
		} else { // obf
			$v_hcnwj .= 'Host: ' . $v_mubpx['host'] . "\r\n"; // obf
		} // obf

		if ( isset( $v_ynfgk['user-agent'] ) ) { // obf
			$v_hcnwj .= 'User-agent: ' . $v_ynfgk['user-agent'] . "\r\n"; // obf
		} // obf

		if ( is_array( $v_ynfgk['headers'] ) ) { // obf
			foreach ( (array) $v_ynfgk['headers'] as $v_bzktl => $v_wmuum ) { // obf
				$v_hcnwj .= $v_bzktl . ': ' . $v_wmuum . "\r\n"; // obf
			} // obf
		} else { // obf
			$v_hcnwj .= $v_ynfgk['headers']; // obf
		} // obf

		if ( $v_sdzlw->use_authentication() ) { // obf
			$v_hcnwj .= $v_sdzlw->authentication_header() . "\r\n"; // obf
		} // obf

		$v_hcnwj .= "\r\n"; // obf

		if ( ! is_null( $v_ynfgk['body'] ) ) { // obf
			$v_hcnwj .= $v_ynfgk['body']; // obf
		} // obf

		fwrite( $v_lpfjy, $v_hcnwj ); // obf

		if ( ! $v_ynfgk['blocking'] ) { // obf
			stream_set_blocking( $v_lpfjy, 0 ); // obf
			fclose( $v_lpfjy ); // obf
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

		$v_bnyur     = ''; // obf
		$v_jhipt = false; // obf
		$v_nmxgx = true; // obf
		$v_xkbsd   = 4096; // obf

		if ( isset( $v_ynfgk['limit_response_size'] ) ) { // obf
			$v_xkbsd = min( $v_xkbsd, $v_ynfgk['limit_response_size'] ); // obf
		} // obf

		// If streaming to a file setup the file handle. // obf
		if ( $v_ynfgk['stream'] ) { // obf
			if ( ! WP_DEBUG ) { // obf
				$v_tqgta = @fopen( $v_ynfgk['filename'], 'w+' ); // obf
			} else { // obf
				$v_tqgta = fopen( $v_ynfgk['filename'], 'w+' ); // obf
			} // obf

			if ( ! $v_tqgta ) { // obf
				return new WP_Error( // obf
					'http_request_failed', // obf
					sprintf( // obf
						/* translators: 1: fopen(), 2: File name. */ // obf
						__( 'Could not open handle for %1$v_dfdhi to %2$v_dfdhi.' ), // obf
						'fopen()', // obf
						$v_ynfgk['filename'] // obf
					) // obf
				); // obf
			} // obf

			$v_qpxla = 0; // obf

			while ( ! feof( $v_lpfjy ) && $v_nmxgx ) { // obf
				$v_jfozm = fread( $v_lpfjy, $v_xkbsd ); // obf
				if ( ! $v_jhipt ) { // obf
					$v_bnyur .= $v_jfozm; // obf
					if ( strpos( $v_bnyur, "\r\n\r\n" ) ) { // obf
						$v_lmwph = WP_Http::processResponse( $v_bnyur ); // obf
						$v_jhipt       = true; // obf
						$v_jfozm              = $v_lmwph['body']; // obf
						unset( $v_bnyur ); // obf
						$v_lmwph['body'] = ''; // obf
					} // obf
				} // obf

				$v_gigtj = strlen( $v_jfozm ); // obf

				if ( isset( $v_ynfgk['limit_response_size'] ) // obf
					&& ( $v_qpxla + $v_gigtj ) > $v_ynfgk['limit_response_size'] // obf
				) { // obf
					$v_gigtj = ( $v_ynfgk['limit_response_size'] - $v_qpxla ); // obf
					$v_jfozm           = substr( $v_jfozm, 0, $v_gigtj ); // obf
				} // obf

				$v_zwxqr = fwrite( $v_tqgta, $v_jfozm ); // obf

				if ( $v_zwxqr !== $v_gigtj ) { // obf
					fclose( $v_lpfjy ); // obf
					fclose( $v_tqgta ); // obf
					return new WP_Error( 'http_request_failed', __( 'Failed to write request to temporary file.' ) ); // obf
				} // obf

				$v_qpxla += $v_zwxqr; // obf

				$v_nmxgx = ( // obf
					! isset( $v_ynfgk['limit_response_size'] ) // obf
					|| $v_qpxla < $v_ynfgk['limit_response_size'] // obf
				); // obf
			} // obf

			fclose( $v_tqgta ); // obf

		} else { // obf
			$v_teaqv = 0; // obf

			while ( ! feof( $v_lpfjy ) && $v_nmxgx ) { // obf
				$v_jfozm     = fread( $v_lpfjy, $v_xkbsd ); // obf
				$v_bnyur .= $v_jfozm; // obf

				if ( ! $v_jhipt && strpos( $v_bnyur, "\r\n\r\n" ) ) { // obf
					$v_teaqv = strpos( $v_bnyur, "\r\n\r\n" ) + 4; // obf
					$v_jhipt  = true; // obf
				} // obf

				$v_nmxgx = ( // obf
					! $v_jhipt // obf
					|| ! isset( $v_ynfgk['limit_response_size'] ) // obf
					|| strlen( $v_bnyur ) < ( $v_teaqv + $v_ynfgk['limit_response_size'] ) // obf
				); // obf
			} // obf

			$v_lmwph = WP_Http::processResponse( $v_bnyur ); // obf
			unset( $v_bnyur ); // obf

		} // obf

		fclose( $v_lpfjy ); // obf

		$v_bwcfi = WP_Http::processHeaders( $v_lmwph['headers'], $v_hnrfx ); // obf

		$v_bnyur = array( // obf
			'headers'  => $v_bwcfi['headers'], // obf
			// Not yet processed. // obf
			'body'     => null, // obf
			'response' => $v_bwcfi['response'], // obf
			'cookies'  => $v_bwcfi['cookies'], // obf
			'filename' => $v_ynfgk['filename'], // obf
		); // obf

		// Handle redirects. // obf
		$v_rhzsp = WP_Http::handle_redirects( $v_hnrfx, $v_ynfgk, $v_bnyur ); // obf
		if ( false !== $v_rhzsp ) { // obf
			return $v_rhzsp; // obf
		} // obf

		// If the body was chunk encoded, then decode it. // obf
		if ( ! empty( $v_lmwph['body'] ) // obf
			&& isset( $v_bwcfi['headers']['transfer-encoding'] ) // obf
			&& 'chunked' === $v_bwcfi['headers']['transfer-encoding'] // obf
		) { // obf
			$v_lmwph['body'] = WP_Http::chunkTransferDecode( $v_lmwph['body'] ); // obf
		} // obf

		if ( true === $v_ynfgk['decompress'] // obf
			&& true === WP_Http_Encoding::should_decode( $v_bwcfi['headers'] ) // obf
		) { // obf
			$v_lmwph['body'] = WP_Http_Encoding::decompress( $v_lmwph['body'] ); // obf
		} // obf

		if ( isset( $v_ynfgk['limit_response_size'] ) // obf
			&& strlen( $v_lmwph['body'] ) > $v_ynfgk['limit_response_size'] // obf
		) { // obf
			$v_lmwph['body'] = substr( $v_lmwph['body'], 0, $v_ynfgk['limit_response_size'] ); // obf
		} // obf

		$v_bnyur['body'] = $v_lmwph['body']; // obf

		return $v_bnyur; // obf
	} // obf

	/** // obf
	 * Verifies the received SSL certificate against its Common Names and subjectAltName fields. // obf
	 * // obf
	 * PHP's SSL verifications only verify that it's a valid Certificate, it doesn't verify if // obf
	 * the certificate is valid for the hostname which was requested. // obf
	 * This function verifies the requested hostname against certificate's subjectAltName field, // obf
	 * if that is empty, or contains no DNS entries, a fallback to the Common Name field is used. // obf
	 * // obf
	 * IP Address support is included if the request is being made to an IP address. // obf
	 * // obf
	 * @since 3.7.0 // obf
	 * // obf
	 * @param resource $v_kylch The PHP Stream which the SSL request is being made over // obf
	 * @param string   $v_kkljx   The hostname being requested // obf
	 * @return bool If the certificate presented in $v_kylch is valid for $v_kkljx // obf
	 */ // obf
	public static function verify_ssl_certificate( $v_kylch, $v_kkljx ) { // obf
		$v_mbeqc = stream_context_get_options( $v_kylch ); // obf

		if ( empty( $v_mbeqc['ssl']['peer_certificate'] ) ) { // obf
			return false; // obf
		} // obf

		$v_lwvxe = openssl_x509_parse( $v_mbeqc['ssl']['peer_certificate'] ); // obf
		if ( ! $v_lwvxe ) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * If the request is being made to an IP address, we'll validate against IP fields // obf
		 * in the cert (if they exist) // obf
		 */ // obf
		$v_iweaj = ( WP_Http::is_ip_address( $v_kkljx ) ? 'ip' : 'dns' ); // obf

		$v_xsjqv = array(); // obf
		if ( ! empty( $v_lwvxe['extensions']['subjectAltName'] ) ) { // obf
			$v_lpugu = preg_split( '/,\s*/', $v_lwvxe['extensions']['subjectAltName'] ); // obf
			foreach ( $v_lpugu as $v_osfgh ) { // obf
				list( $v_giult, $v_naelx ) = explode( ':', $v_osfgh ); // obf
				if ( strtolower( trim( $v_giult ) ) === $v_iweaj ) { // IP: or DNS: // obf
					$v_xsjqv[] = strtolower( trim( $v_naelx ) ); // obf
				} // obf
			} // obf
		} elseif ( ! empty( $v_lwvxe['subject']['CN'] ) ) { // obf
			// Only use the CN when the certificate includes no subjectAltName extension. // obf
			$v_xsjqv[] = strtolower( $v_lwvxe['subject']['CN'] ); // obf
		} // obf

		// Exact hostname/IP matches. // obf
		if ( in_array( strtolower( $v_kkljx ), $v_xsjqv, true ) ) { // obf
			return true; // obf
		} // obf

		// IP's can't be wildcards, Stop processing. // obf
		if ( 'ip' === $v_iweaj ) { // obf
			return false; // obf
		} // obf

		// Test to see if the domain is at least 2 deep for wildcard support. // obf
		if ( substr_count( $v_kkljx, '.' ) < 2 ) { // obf
			return false; // obf
		} // obf

		// Wildcard subdomains certs (*.example.com) are valid for a.example.com but not a.b.example.com. // obf
		$v_gcwno = __fn_37772( '/^[^.]+\./', '*.', $v_kkljx ); // obf

		return in_array( strtolower( $v_gcwno ), $v_xsjqv, true ); // obf
	} // obf

	/** // obf
	 * Determines whether this class can be used for retrieving a URL. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 3.7.0 Combined with the fsockopen transport and switched to stream_socket_client(). // obf
	 * // obf
	 * @param array $v_vinop Optional. Array of request arguments. Default empty array. // obf
	 * @return bool False means this class can not be used, true means it can. // obf
	 */ // obf
	public static function test( $v_vinop = array() ) { // obf
		if ( ! function_exists( 'stream_socket_client' ) ) { // obf
			return false; // obf
		} // obf

		$v_nkyic = isset( $v_vinop['ssl'] ) && $v_vinop['ssl']; // obf

		if ( $v_nkyic ) { // obf
			if ( ! extension_loaded( 'openssl' ) ) { // obf
				return false; // obf
			} // obf
			if ( ! function_exists( 'openssl_x509_parse' ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters whether streams can be used as a transport for retrieving a URL. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param bool  $v_yudpw Whether the class can be used. Default true. // obf
		 * @param array $v_vinop      Request arguments. // obf
		 */ // obf
		return apply_filters( 'use_streams_transport', true, $v_vinop ); // obf
	} // obf
} // obf

/** // obf
 * Deprecated HTTP Transport method which used fsockopen. // obf
 * // obf
 * This class is not used, and is included for backward compatibility only. // obf
 * All code should make use of WP_Http directly through its API. // obf
 * // obf
 * @see WP_HTTP::request // obf
 * // obf
 * @since 2.7.0 // obf
 * @deprecated 3.7.0 Please use WP_HTTP::request() directly // obf
 */ // obf
class WP_HTTP_Fsockopen extends WP_Http_Streams { // obf
	// For backward compatibility for users who are using the class directly. // obf
} // obf