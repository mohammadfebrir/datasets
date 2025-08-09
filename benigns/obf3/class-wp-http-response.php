

<?php // obf
/** // obf
 * HTTP API: WP_HTTP_Response class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to prepare HTTP responses. // obf
 * // obf
 * @since 4.4.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_HTTP_Response { // obf

	/** // obf
	 * Response data. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var mixed // obf
	 */ // obf
	public $v_uniua; // obf

	/** // obf
	 * Response headers. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_wwwea; // obf

	/** // obf
	 * Response status. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_tyxcf; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param mixed $v_uniua    Response data. Default null. // obf
	 * @param int   $v_tyxcf  Optional. HTTP status code. Default 200. // obf
	 * @param array $v_wwwea Optional. HTTP header map. Default empty array. // obf
	 */ // obf
	public function __construct( $v_uniua = null, $v_tyxcf = 200, $v_wwwea = array() ) { // obf
		$v_ralxk->set_data( $v_uniua ); // obf
		$v_ralxk->set_status( $v_tyxcf ); // obf
		$v_ralxk->set_headers( $v_wwwea ); // obf
	} // obf

	/** // obf
	 * Retrieves headers associated with the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Map of header name to header value. // obf
	 */ // obf
	public function get_headers() { // obf
		return $v_ralxk->headers; // obf
	} // obf

	/** // obf
	 * Sets all header values. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_wwwea Map of header name to header value. // obf
	 */ // obf
	public function set_headers( $v_wwwea ) { // obf
		$v_ralxk->headers = $v_wwwea; // obf
	} // obf

	/** // obf
	 * Sets a single HTTP header. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_qpfdb     Header name. // obf
	 * @param string $v_kyqhl   Header value. // obf
	 * @param bool   $v_tothz Optional. Whether to replace an existing header of the same name. // obf
	 *                        Default true. // obf
	 */ // obf
	public function header( $v_qpfdb, $v_kyqhl, $v_tothz = true ) { // obf
		if ( $v_tothz || ! isset( $v_ralxk->headers[ $v_qpfdb ] ) ) { // obf
			$v_ralxk->headers[ $v_qpfdb ] = $v_kyqhl; // obf
		} else { // obf
			$v_ralxk->headers[ $v_qpfdb ] .= ', ' . $v_kyqhl; // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the HTTP return code for the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return int The 3-digit HTTP status code. // obf
	 */ // obf
	public function get_status() { // obf
		return $v_ralxk->status; // obf
	} // obf

	/** // obf
	 * Sets the 3-digit HTTP status code. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param int $v_kndvz HTTP status. // obf
	 */ // obf
	public function set_status( $v_kndvz ) { // obf
		$v_ralxk->status = absint( $v_kndvz ); // obf
	} // obf

	/** // obf
	 * Retrieves the response data. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return mixed Response data. // obf
	 */ // obf
	public function get_data() { // obf
		return $v_ralxk->data; // obf
	} // obf

	/** // obf
	 * Sets the response data. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param mixed $v_uniua Response data. // obf
	 */ // obf
	public function set_data( $v_uniua ) { // obf
		$v_ralxk->data = $v_uniua; // obf
	} // obf

	/** // obf
	 * Retrieves the response data for JSON serialization. // obf
	 * // obf
	 * It is expected that in most implementations, this will return the same as get_data(), // obf
	 * however this may be different if you want to do custom JSON data handling. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return mixed Any JSON-serializable value. // obf
	 */ // obf
	public function jsonSerialize() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		return $v_ralxk->get_data(); // obf
	} // obf
} // obf