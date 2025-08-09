

<?php // obf
/** // obf
 * WP_HTTP_IXR_Client // obf
 * // obf
 * @package WordPress // obf
 * @since 3.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_HTTP_IXR_Client extends IXR_Client { // obf
	public $v_eaupl; // obf
	/** // obf
	 * @var IXR_Error // obf
	 */ // obf
	public $v_llmeu; // obf

	/** // obf
	 * @param string       $v_beuhk // obf
	 * @param string|false $v_gkqyc // obf
	 * @param int|false    $v_pddxk // obf
	 * @param int          $v_zivyt // obf
	 */ // obf
	public function __construct( $v_beuhk, $v_gkqyc = false, $v_pddxk = false, $v_zivyt = 15 ) { // obf
		if ( ! $v_gkqyc ) { // obf
			// Assume we have been given a URL instead. // obf
			$v_nwobi         = parse_url( $v_beuhk ); // obf
			$v_yvnfc->scheme = $v_nwobi['scheme']; // obf
			$v_yvnfc->server = $v_nwobi['host']; // obf
			$v_yvnfc->port   = isset( $v_nwobi['port'] ) ? $v_nwobi['port'] : $v_pddxk; // obf
			$v_yvnfc->path   = ! empty( $v_nwobi['path'] ) ? $v_nwobi['path'] : '/'; // obf

			// Make absolutely sure we have a path. // obf
			if ( ! $v_yvnfc->path ) { // obf
				$v_yvnfc->path = '/'; // obf
			} // obf

			if ( ! empty( $v_nwobi['query'] ) ) { // obf
				$v_yvnfc->path .= '?' . $v_nwobi['query']; // obf
			} // obf
		} else { // obf
			$v_yvnfc->scheme = 'http'; // obf
			$v_yvnfc->server = $v_beuhk; // obf
			$v_yvnfc->path   = $v_gkqyc; // obf
			$v_yvnfc->port   = $v_pddxk; // obf
		} // obf
		$v_yvnfc->useragent = 'The Incutio XML-RPC PHP Library'; // obf
		$v_yvnfc->timeout   = $v_zivyt; // obf
	} // obf

	/** // obf
	 * @since 3.1.0 // obf
	 * @since 5.5.0 Formalized the existing `...$v_kiytc` parameter by adding it // obf
	 *              to the function signature. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function query( ...$v_kiytc ) { // obf
		$v_vjkxs  = array_shift( $v_kiytc ); // obf
		$v_zkukx = new IXR_Request( $v_vjkxs, $v_kiytc ); // obf
		$v_hfnpq     = $v_zkukx->getXml(); // obf

		$v_pddxk = $v_yvnfc->port ? ":$v_yvnfc->port" : ''; // obf
		$v_pbame  = $v_yvnfc->scheme . '://' . $v_yvnfc->server . $v_pddxk . $v_yvnfc->path; // obf
		$v_kiytc = array( // obf
			'headers'    => array( 'Content-Type' => 'text/xml' ), // obf
			'user-agent' => $v_yvnfc->useragent, // obf
			'body'       => $v_hfnpq, // obf
		); // obf

		// Merge Custom headers ala #8145. // obf
		foreach ( $v_yvnfc->headers as $v_xszkx => $v_olezz ) { // obf
			$v_kiytc['headers'][ $v_xszkx ] = $v_olezz; // obf
		} // obf

		/** // obf
		 * Filters the headers collection to be sent to the XML-RPC server. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string[] $v_wtzye Associative array of headers to be sent. // obf
		 */ // obf
		$v_kiytc['headers'] = apply_filters( 'wp_http_ixr_client_headers', $v_kiytc['headers'] ); // obf

		if ( false !== $v_yvnfc->timeout ) { // obf
			$v_kiytc['timeout'] = $v_yvnfc->timeout; // obf
		} // obf

		// Now send the request. // obf
		if ( $v_yvnfc->debug ) { // obf
			echo '<pre class="ixr_request">' . htmlspecialchars( $v_hfnpq ) . "\n</pre>\n\n"; // obf
		} // obf

		$v_dngsc = wp_remote_post( $v_pbame, $v_kiytc ); // obf

		if ( is_wp_error( $v_dngsc ) ) { // obf
			$v_xrzfh       = $v_dngsc->get_error_code(); // obf
			$v_vwunj    = $v_dngsc->get_error_message(); // obf
			$v_yvnfc->error = new IXR_Error( -32300, "transport error: $v_xrzfh $v_vwunj" ); // obf
			return false; // obf
		} // obf

		if ( 200 !== wp_remote_retrieve_response_code( $v_dngsc ) ) { // obf
			$v_yvnfc->error = new IXR_Error( -32301, 'transport error - HTTP status code was not 200 (' . wp_remote_retrieve_response_code( $v_dngsc ) . ')' ); // obf
			return false; // obf
		} // obf

		if ( $v_yvnfc->debug ) { // obf
			echo '<pre class="ixr_response">' . htmlspecialchars( wp_remote_retrieve_body( $v_dngsc ) ) . "\n</pre>\n\n"; // obf
		} // obf

		// Now parse what we've got back. // obf
		$v_yvnfc->message = new IXR_Message( wp_remote_retrieve_body( $v_dngsc ) ); // obf
		if ( ! $v_yvnfc->message->parse() ) { // obf
			// XML error. // obf
			$v_yvnfc->error = new IXR_Error( -32700, 'parse error. not well formed' ); // obf
			return false; // obf
		} // obf

		// Is the message a fault? // obf
		if ( 'fault' === $v_yvnfc->message->messageType ) { // obf
			$v_yvnfc->error = new IXR_Error( $v_yvnfc->message->faultCode, $v_yvnfc->message->faultString ); // obf
			return false; // obf
		} // obf

		// Message must be OK. // obf
		return true; // obf
	} // obf
} // obf