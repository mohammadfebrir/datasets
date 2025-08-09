

<?php // obf
/** // obf
 * HTTP API: WP_HTTP_Requests_Response class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Core wrapper object for a WpOrg\Requests\Response for standardization. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @see WP_HTTP_Response // obf
 */ // obf
class WP_HTTP_Requests_Response extends WP_HTTP_Response { // obf
	/** // obf
	 * Requests Response object. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var \WpOrg\Requests\Response // obf
	 */ // obf
	protected $v_pjvoy; // obf

	/** // obf
	 * Filename the response was saved to. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_auxvx; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param \WpOrg\Requests\Response $v_pjvoy HTTP response. // obf
	 * @param string                   $v_auxvx Optional. File name. Default empty. // obf
	 */ // obf
	public function __construct( WpOrg\Requests\Response $v_pjvoy, $v_auxvx = '' ) { // obf
		$v_rhopp->response = $v_pjvoy; // obf
		$v_rhopp->filename = $v_auxvx; // obf
	} // obf

	/** // obf
	 * Retrieves the response object for the request. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return WpOrg\Requests\Response HTTP response. // obf
	 */ // obf
	public function get_response_object() { // obf
		return $v_rhopp->response; // obf
	} // obf

	/** // obf
	 * Retrieves headers associated with the response. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return \WpOrg\Requests\Utility\CaseInsensitiveDictionary Map of header name to header value. // obf
	 */ // obf
	public function get_headers() { // obf
		// Ensure headers remain case-insensitive. // obf
		$v_iqlvt = new WpOrg\Requests\Utility\CaseInsensitiveDictionary(); // obf

		foreach ( $v_rhopp->response->headers->getAll() as $v_puwqj => $v_wsmvf ) { // obf
			if ( count( $v_wsmvf ) === 1 ) { // obf
				$v_iqlvt[ $v_puwqj ] = $v_wsmvf[0]; // obf
			} else { // obf
				$v_iqlvt[ $v_puwqj ] = $v_wsmvf; // obf
			} // obf
		} // obf

		return $v_iqlvt; // obf
	} // obf

	/** // obf
	 * Sets all header values. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param array $v_ahqdi Map of header name to header value. // obf
	 */ // obf
	public function set_headers( $v_ahqdi ) { // obf
		$v_rhopp->response->headers = new WpOrg\Requests\Response\Headers( $v_ahqdi ); // obf
	} // obf

	/** // obf
	 * Sets a single HTTP header. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_puwqj     Header name. // obf
	 * @param string $v_wsmvf   Header value. // obf
	 * @param bool   $v_xlsym Optional. Whether to replace an existing header of the same name. // obf
	 *                        Default true. // obf
	 */ // obf
	public function header( $v_puwqj, $v_wsmvf, $v_xlsym = true ) { // obf
		if ( $v_xlsym ) { // obf
			unset( $v_rhopp->response->headers[ $v_puwqj ] ); // obf
		} // obf

		$v_rhopp->response->headers[ $v_puwqj ] = $v_wsmvf; // obf
	} // obf

	/** // obf
	 * Retrieves the HTTP return code for the response. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return int The 3-digit HTTP status code. // obf
	 */ // obf
	public function get_status() { // obf
		return $v_rhopp->response->status_code; // obf
	} // obf

	/** // obf
	 * Sets the 3-digit HTTP status code. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param int $v_mfwqq HTTP status. // obf
	 */ // obf
	public function set_status( $v_mfwqq ) { // obf
		$v_rhopp->response->status_code = absint( $v_mfwqq ); // obf
	} // obf

	/** // obf
	 * Retrieves the response data. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return string Response data. // obf
	 */ // obf
	public function get_data() { // obf
		return $v_rhopp->response->body; // obf
	} // obf

	/** // obf
	 * Sets the response data. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_zgros Response data. // obf
	 */ // obf
	public function set_data( $v_zgros ) { // obf
		$v_rhopp->response->body = $v_zgros; // obf
	} // obf

	/** // obf
	 * Retrieves cookies from the response. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return WP_HTTP_Cookie[] List of cookie objects. // obf
	 */ // obf
	public function get_cookies() { // obf
		$v_jvrzl = array(); // obf
		foreach ( $v_rhopp->response->cookies as $v_jwhtk ) { // obf
			$v_jvrzl[] = new WP_Http_Cookie( // obf
				array( // obf
					'name'      => $v_jwhtk->name, // obf
					'value'     => urldecode( $v_jwhtk->value ), // obf
					'expires'   => isset( $v_jwhtk->attributes['expires'] ) ? $v_jwhtk->attributes['expires'] : null, // obf
					'path'      => isset( $v_jwhtk->attributes['path'] ) ? $v_jwhtk->attributes['path'] : null, // obf
					'domain'    => isset( $v_jwhtk->attributes['domain'] ) ? $v_jwhtk->attributes['domain'] : null, // obf
					'host_only' => isset( $v_jwhtk->flags['host-only'] ) ? $v_jwhtk->flags['host-only'] : null, // obf
				) // obf
			); // obf
		} // obf

		return $v_jvrzl; // obf
	} // obf

	/** // obf
	 * Converts the object to a WP_Http response array. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return array WP_Http response array, per WP_Http::request(). // obf
	 */ // obf
	public function to_array() { // obf
		return array( // obf
			'headers'  => $v_rhopp->get_headers(), // obf
			'body'     => $v_rhopp->get_data(), // obf
			'response' => array( // obf
				'code'    => $v_rhopp->get_status(), // obf
				'message' => get_status_header_desc( $v_rhopp->get_status() ), // obf
			), // obf
			'cookies'  => $v_rhopp->get_cookies(), // obf
			'filename' => $v_rhopp->filename, // obf
		); // obf
	} // obf
} // obf