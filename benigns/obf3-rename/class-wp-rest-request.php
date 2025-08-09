

<?php // obf
/** // obf
 * REST API: WP_REST_Request class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a REST request object. // obf
 * // obf
 * Contains data from the request, to be passed to the callback. // obf
 * // obf
 * Note: This implements ArrayAccess, and acts as an array of parameters when // obf
 * used in that manner. It does not use ArrayObject (as we cannot rely on SPL), // obf
 * so be aware it may have non-array behavior in some cases. // obf
 * // obf
 * Note: When using features provided by ArrayAccess, be aware that WordPress deliberately // obf
 * does not distinguish between arguments of the same name for different request methods. // obf
 * For instance, in a request with `GET id=1` and `POST id=2`, `$v_jfwen['id']` will equal // obf
 * 2 (`POST`) not 1 (`GET`). For more precision between request methods, use // obf
 * WP_REST_Request::get_body_params(), WP_REST_Request::get_url_params(), etc. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @link https://www.php.net/manual/en/class.arrayaccess.php // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_REST_Request implements ArrayAccess { // obf

	/** // obf
	 * HTTP method. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_lyudt = ''; // obf

	/** // obf
	 * Parameters passed to the request. // obf
	 * // obf
	 * These typically come from the `$v_emhgz`, `$v_cjvxv` and `$v_ibged` // obf
	 * superglobals when being created from the global scope. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array Contains GET, POST and FILES keys mapping to arrays of data. // obf
	 */ // obf
	protected $v_rjanq; // obf

	/** // obf
	 * HTTP headers for the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array Map of key to value. Key is always lowercase, as per HTTP specification. // obf
	 */ // obf
	protected $v_jwprt = array(); // obf

	/** // obf
	 * Body data. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string Binary data from the request. // obf
	 */ // obf
	protected $v_icduw = null; // obf

	/** // obf
	 * Route matched for the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_xnwzv; // obf

	/** // obf
	 * Attributes (options) for the route that was matched. // obf
	 * // obf
	 * This is the options array used when the route was registered, typically // obf
	 * containing the callback as well as the valid methods for the route. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array Attributes for the request. // obf
	 */ // obf
	protected $v_eeevh = array(); // obf

	/** // obf
	 * Used to determine if the JSON data has been parsed yet. // obf
	 * // obf
	 * Allows lazy-parsing of JSON data where possible. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_rulox = false; // obf

	/** // obf
	 * Used to determine if the body data has been parsed yet. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_slgft = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_lyudt     Optional. Request method. Default empty. // obf
	 * @param string $v_xnwzv      Optional. Request route. Default empty. // obf
	 * @param array  $v_eeevh Optional. Request attributes. Default empty array. // obf
	 */ // obf
	public function __construct( $v_lyudt = '', $v_xnwzv = '', $v_eeevh = array() ) { // obf
		$v_evuti->params = array( // obf
			'URL'      => array(), // obf
			'GET'      => array(), // obf
			'POST'     => array(), // obf
			'FILES'    => array(), // obf

			// See parse_json_params. // obf
			'JSON'     => null, // obf

			'defaults' => array(), // obf
		); // obf

		$v_evuti->set_method( $v_lyudt ); // obf
		$v_evuti->set_route( $v_xnwzv ); // obf
		$v_evuti->set_attributes( $v_eeevh ); // obf
	} // obf

	/** // obf
	 * Retrieves the HTTP method for the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string HTTP method. // obf
	 */ // obf
	public function get_method() { // obf
		return $v_evuti->method; // obf
	} // obf

	/** // obf
	 * Sets HTTP method for the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_lyudt HTTP method. // obf
	 */ // obf
	public function set_method( $v_lyudt ) { // obf
		$v_evuti->method = strtoupper( $v_lyudt ); // obf
	} // obf

	/** // obf
	 * Retrieves all headers from the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Map of key to value. Key is always lowercase, as per HTTP specification. // obf
	 */ // obf
	public function get_headers() { // obf
		return $v_evuti->headers; // obf
	} // obf

	/** // obf
	 * Determines if the request is the given method. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_lyudt HTTP method. // obf
	 * @return bool Whether the request is of the given method. // obf
	 */ // obf
	public function is_method( $v_lyudt ) { // obf
		return $v_evuti->get_method() === strtoupper( $v_lyudt ); // obf
	} // obf

	/** // obf
	 * Canonicalizes the header name. // obf
	 * // obf
	 * Ensures that header names are always treated the same regardless of // obf
	 * source. Header names are always case-insensitive. // obf
	 * // obf
	 * Note that we treat `-` (dashes) and `_` (underscores) as the same // obf
	 * character, as per header parsing rules in both Apache and nginx. // obf
	 * // obf
	 * @link https://stackoverflow.com/q/18185366 // obf
	 * @link https://www.nginx.com/resources/wiki/start/topics/tutorials/config_pitfalls/#missing-disappearing-http-headers // obf
	 * @link https://nginx.org/en/docs/http/ngx_http_core_module.html#underscores_in_headers // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu Header name. // obf
	 * @return string Canonicalized name. // obf
	 */ // obf
	public static function canonicalize_header_name( $v_pfxvu ) { // obf
		$v_pfxvu = strtolower( $v_pfxvu ); // obf
		$v_pfxvu = str_replace( '-', '_', $v_pfxvu ); // obf

		return $v_pfxvu; // obf
	} // obf

	/** // obf
	 * Retrieves the given header from the request. // obf
	 * // obf
	 * If the header has multiple values, they will be concatenated with a comma // obf
	 * as per the HTTP specification. Be aware that some non-compliant headers // obf
	 * (notably cookie headers) cannot be joined this way. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu Header name, will be canonicalized to lowercase. // obf
	 * @return string|null String value if set, null otherwise. // obf
	 */ // obf
	public function get_header( $v_pfxvu ) { // obf
		$v_pfxvu = $v_evuti->canonicalize_header_name( $v_pfxvu ); // obf

		if ( ! isset( $v_evuti->headers[ $v_pfxvu ] ) ) { // obf
			return null; // obf
		} // obf

		return implode( ',', $v_evuti->headers[ $v_pfxvu ] ); // obf
	} // obf

	/** // obf
	 * Retrieves header values from the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu Header name, will be canonicalized to lowercase. // obf
	 * @return array|null List of string values if set, null otherwise. // obf
	 */ // obf
	public function get_header_as_array( $v_pfxvu ) { // obf
		$v_pfxvu = $v_evuti->canonicalize_header_name( $v_pfxvu ); // obf

		if ( ! isset( $v_evuti->headers[ $v_pfxvu ] ) ) { // obf
			return null; // obf
		} // obf

		return $v_evuti->headers[ $v_pfxvu ]; // obf
	} // obf

	/** // obf
	 * Sets the header on request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu   Header name. // obf
	 * @param string $v_jsdlo Header value, or list of values. // obf
	 */ // obf
	public function set_header( $v_pfxvu, $v_jsdlo ) { // obf
		$v_pfxvu   = $v_evuti->canonicalize_header_name( $v_pfxvu ); // obf
		$v_jsdlo = (array) $v_jsdlo; // obf

		$v_evuti->headers[ $v_pfxvu ] = $v_jsdlo; // obf
	} // obf

	/** // obf
	 * Appends a header value for the given header. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu   Header name. // obf
	 * @param string $v_jsdlo Header value, or list of values. // obf
	 */ // obf
	public function add_header( $v_pfxvu, $v_jsdlo ) { // obf
		$v_pfxvu   = $v_evuti->canonicalize_header_name( $v_pfxvu ); // obf
		$v_jsdlo = (array) $v_jsdlo; // obf

		if ( ! isset( $v_evuti->headers[ $v_pfxvu ] ) ) { // obf
			$v_evuti->headers[ $v_pfxvu ] = array(); // obf
		} // obf

		$v_evuti->headers[ $v_pfxvu ] = array_merge( $v_evuti->headers[ $v_pfxvu ], $v_jsdlo ); // obf
	} // obf

	/** // obf
	 * Removes all values for a header. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu Header name. // obf
	 */ // obf
	public function remove_header( $v_pfxvu ) { // obf
		$v_pfxvu = $v_evuti->canonicalize_header_name( $v_pfxvu ); // obf
		unset( $v_evuti->headers[ $v_pfxvu ] ); // obf
	} // obf

	/** // obf
	 * Sets headers on the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_jwprt  Map of header name to value. // obf
	 * @param bool  $v_qyttn If true, replace the request's headers. Otherwise, merge with existing. // obf
	 */ // obf
	public function set_headers( $v_jwprt, $v_qyttn = true ) { // obf
		if ( true === $v_qyttn ) { // obf
			$v_evuti->headers = array(); // obf
		} // obf

		foreach ( $v_jwprt as $v_pfxvu => $v_jsdlo ) { // obf
			$v_evuti->set_header( $v_pfxvu, $v_jsdlo ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the Content-Type of the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array|null Map containing 'value' and 'parameters' keys // obf
	 *                    or null when no valid Content-Type header was // obf
	 *                    available. // obf
	 */ // obf
	public function get_content_type() { // obf
		$v_jsdlo = $v_evuti->get_header( 'Content-Type' ); // obf
		if ( empty( $v_jsdlo ) ) { // obf
			return null; // obf
		} // obf

		$v_cwisj = ''; // obf
		if ( strpos( $v_jsdlo, ';' ) ) { // obf
			list( $v_jsdlo, $v_cwisj ) = explode( ';', $v_jsdlo, 2 ); // obf
		} // obf

		$v_jsdlo = strtolower( $v_jsdlo ); // obf
		if ( ! str_contains( $v_jsdlo, '/' ) ) { // obf
			return null; // obf
		} // obf

		// Parse type and subtype out. // obf
		list( $v_zofmo, $v_yylit ) = explode( '/', $v_jsdlo, 2 ); // obf

		$v_geyzj = compact( 'value', 'type', 'subtype', 'parameters' ); // obf
		$v_geyzj = array_map( 'trim', $v_geyzj ); // obf

		return $v_geyzj; // obf
	} // obf

	/** // obf
	 * Checks if the request has specified a JSON Content-Type. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return bool True if the Content-Type header is JSON. // obf
	 */ // obf
	public function is_json_content_type() { // obf
		$v_caoft = $v_evuti->get_content_type(); // obf

		return isset( $v_caoft['value'] ) && wp_is_json_media_type( $v_caoft['value'] ); // obf
	} // obf

	/** // obf
	 * Retrieves the parameter priority order. // obf
	 * // obf
	 * Used when checking parameters in WP_REST_Request::get_param(). // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string[] Array of types to check, in order of priority. // obf
	 */ // obf
	protected function get_parameter_order() { // obf
		$v_bqubk = array(); // obf

		if ( $v_evuti->is_json_content_type() ) { // obf
			$v_bqubk[] = 'JSON'; // obf
		} // obf

		$v_evuti->parse_json_params(); // obf

		// Ensure we parse the body data. // obf
		$v_icduw = $v_evuti->get_body(); // obf

		if ( 'POST' !== $v_evuti->method && ! empty( $v_icduw ) ) { // obf
			$v_evuti->parse_body_params(); // obf
		} // obf

		$v_jjhhz = array( 'POST', 'PUT', 'PATCH', 'DELETE' ); // obf
		if ( in_array( $v_evuti->method, $v_jjhhz, true ) ) { // obf
			$v_bqubk[] = 'POST'; // obf
		} // obf

		$v_bqubk[] = 'GET'; // obf
		$v_bqubk[] = 'URL'; // obf
		$v_bqubk[] = 'defaults'; // obf

		/** // obf
		 * Filters the parameter priority order for a REST API request. // obf
		 * // obf
		 * The order affects which parameters are checked when using WP_REST_Request::get_param() // obf
		 * and family. This acts similarly to PHP's `request_order` setting. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string[]        $v_bqubk   Array of types to check, in order of priority. // obf
		 * @param WP_REST_Request $v_jfwen The request object. // obf
		 */ // obf
		return apply_filters( 'rest_request_parameter_order', $v_bqubk, $v_evuti ); // obf
	} // obf

	/** // obf
	 * Retrieves a parameter from the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu Parameter name. // obf
	 * @return mixed|null Value if set, null otherwise. // obf
	 */ // obf
	public function get_param( $v_pfxvu ) { // obf
		$v_bqubk = $v_evuti->get_parameter_order(); // obf

		foreach ( $v_bqubk as $v_zofmo ) { // obf
			// Determine if we have the parameter for this type. // obf
			if ( isset( $v_evuti->params[ $v_zofmo ][ $v_pfxvu ] ) ) { // obf
				return $v_evuti->params[ $v_zofmo ][ $v_pfxvu ]; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Checks if a parameter exists in the request. // obf
	 * // obf
	 * This allows distinguishing between an omitted parameter, // obf
	 * and a parameter specifically set to null. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_pfxvu Parameter name. // obf
	 * @return bool True if a param exists for the given key. // obf
	 */ // obf
	public function has_param( $v_pfxvu ) { // obf
		$v_bqubk = $v_evuti->get_parameter_order(); // obf

		foreach ( $v_bqubk as $v_zofmo ) { // obf
			if ( is_array( $v_evuti->params[ $v_zofmo ] ) && array_key_exists( $v_pfxvu, $v_evuti->params[ $v_zofmo ] ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Sets a parameter on the request. // obf
	 * // obf
	 * If the given parameter key exists in any parameter type an update will take place, // obf
	 * otherwise a new param will be created in the first parameter type (respecting // obf
	 * get_parameter_order()). // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_pfxvu   Parameter name. // obf
	 * @param mixed  $v_jsdlo Parameter value. // obf
	 */ // obf
	public function set_param( $v_pfxvu, $v_jsdlo ) { // obf
		$v_bqubk     = $v_evuti->get_parameter_order(); // obf
		$v_emuqr = false; // obf

		foreach ( $v_bqubk as $v_zofmo ) { // obf
			if ( 'defaults' !== $v_zofmo && is_array( $v_evuti->params[ $v_zofmo ] ) && array_key_exists( $v_pfxvu, $v_evuti->params[ $v_zofmo ] ) ) { // obf
				$v_evuti->params[ $v_zofmo ][ $v_pfxvu ] = $v_jsdlo; // obf
				$v_emuqr                     = true; // obf
			} // obf
		} // obf

		if ( ! $v_emuqr ) { // obf
			$v_evuti->params[ $v_bqubk[0] ][ $v_pfxvu ] = $v_jsdlo; // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves merged parameters from the request. // obf
	 * // obf
	 * The equivalent of get_param(), but returns all parameters for the request. // obf
	 * Handles merging all the available values into a single array. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Map of key to value. // obf
	 */ // obf
	public function get_params() { // obf
		$v_bqubk = $v_evuti->get_parameter_order(); // obf
		$v_bqubk = array_reverse( $v_bqubk, true ); // obf

		$v_rjanq = array(); // obf
		foreach ( $v_bqubk as $v_zofmo ) { // obf
			/* // obf
			 * array_merge() / the "+" operator will mess up // obf
			 * numeric keys, so instead do a manual foreach. // obf
			 */ // obf
			foreach ( (array) $v_evuti->params[ $v_zofmo ] as $v_pfxvu => $v_jsdlo ) { // obf
				$v_rjanq[ $v_pfxvu ] = $v_jsdlo; // obf
			} // obf
		} // obf

		// Exclude rest_route if pretty permalinks are not enabled. // obf
		if ( ! get_option( 'permalink_structure' ) ) { // obf
			unset( $v_rjanq['rest_route'] ); // obf
		} // obf

		return $v_rjanq; // obf
	} // obf

	/** // obf
	 * Retrieves parameters from the route itself. // obf
	 * // obf
	 * These are parsed from the URL using the regex. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Parameter map of key to value. // obf
	 */ // obf
	public function get_url_params() { // obf
		return $v_evuti->params['URL']; // obf
	} // obf

	/** // obf
	 * Sets parameters from the route. // obf
	 * // obf
	 * Typically, this is set after parsing the URL. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_rjanq Parameter map of key to value. // obf
	 */ // obf
	public function set_url_params( $v_rjanq ) { // obf
		$v_evuti->params['URL'] = $v_rjanq; // obf
	} // obf

	/** // obf
	 * Retrieves parameters from the query string. // obf
	 * // obf
	 * These are the parameters you'd typically find in `$v_emhgz`. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Parameter map of key to value // obf
	 */ // obf
	public function get_query_params() { // obf
		return $v_evuti->params['GET']; // obf
	} // obf

	/** // obf
	 * Sets parameters from the query string. // obf
	 * // obf
	 * Typically, this is set from `$v_emhgz`. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_rjanq Parameter map of key to value. // obf
	 */ // obf
	public function set_query_params( $v_rjanq ) { // obf
		$v_evuti->params['GET'] = $v_rjanq; // obf
	} // obf

	/** // obf
	 * Retrieves parameters from the body. // obf
	 * // obf
	 * These are the parameters you'd typically find in `$v_cjvxv`. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Parameter map of key to value. // obf
	 */ // obf
	public function get_body_params() { // obf
		return $v_evuti->params['POST']; // obf
	} // obf

	/** // obf
	 * Sets parameters from the body. // obf
	 * // obf
	 * Typically, this is set from `$v_cjvxv`. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_rjanq Parameter map of key to value. // obf
	 */ // obf
	public function set_body_params( $v_rjanq ) { // obf
		$v_evuti->params['POST'] = $v_rjanq; // obf
	} // obf

	/** // obf
	 * Retrieves multipart file parameters from the body. // obf
	 * // obf
	 * These are the parameters you'd typically find in `$v_ibged`. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Parameter map of key to value // obf
	 */ // obf
	public function get_file_params() { // obf
		return $v_evuti->params['FILES']; // obf
	} // obf

	/** // obf
	 * Sets multipart file parameters from the body. // obf
	 * // obf
	 * Typically, this is set from `$v_ibged`. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_rjanq Parameter map of key to value. // obf
	 */ // obf
	public function set_file_params( $v_rjanq ) { // obf
		$v_evuti->params['FILES'] = $v_rjanq; // obf
	} // obf

	/** // obf
	 * Retrieves the default parameters. // obf
	 * // obf
	 * These are the parameters set in the route registration. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Parameter map of key to value // obf
	 */ // obf
	public function get_default_params() { // obf
		return $v_evuti->params['defaults']; // obf
	} // obf

	/** // obf
	 * Sets default parameters. // obf
	 * // obf
	 * These are the parameters set in the route registration. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_rjanq Parameter map of key to value. // obf
	 */ // obf
	public function set_default_params( $v_rjanq ) { // obf
		$v_evuti->params['defaults'] = $v_rjanq; // obf
	} // obf

	/** // obf
	 * Retrieves the request body content. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string Binary data from the request body. // obf
	 */ // obf
	public function get_body() { // obf
		return $v_evuti->body; // obf
	} // obf

	/** // obf
	 * Sets body content. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_geyzj Binary data from the request body. // obf
	 */ // obf
	public function set_body( $v_geyzj ) { // obf
		$v_evuti->body = $v_geyzj; // obf

		// Enable lazy parsing. // obf
		$v_evuti->parsed_json    = false; // obf
		$v_evuti->parsed_body    = false; // obf
		$v_evuti->params['JSON'] = null; // obf
	} // obf

	/** // obf
	 * Retrieves the parameters from a JSON-formatted body. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Parameter map of key to value. // obf
	 */ // obf
	public function get_json_params() { // obf
		// Ensure the parameters have been parsed out. // obf
		$v_evuti->parse_json_params(); // obf

		return $v_evuti->params['JSON']; // obf
	} // obf

	/** // obf
	 * Parses the JSON parameters. // obf
	 * // obf
	 * Avoids parsing the JSON data until we need to access it. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 4.7.0 Returns error instance if value cannot be decoded. // obf
	 * @return true|WP_Error True if the JSON data was passed or no JSON data was provided, WP_Error if invalid JSON was passed. // obf
	 */ // obf
	protected function parse_json_params() { // obf
		if ( $v_evuti->parsed_json ) { // obf
			return true; // obf
		} // obf

		$v_evuti->parsed_json = true; // obf

		// Check that we actually got JSON. // obf
		if ( ! $v_evuti->is_json_content_type() ) { // obf
			return true; // obf
		} // obf

		$v_icduw = $v_evuti->get_body(); // obf
		if ( empty( $v_icduw ) ) { // obf
			return true; // obf
		} // obf

		$v_rjanq = json_decode( $v_icduw, true ); // obf

		/* // obf
		 * Check for a parsing error. // obf
		 */ // obf
		if ( null === $v_rjanq && JSON_ERROR_NONE !== json_last_error() ) { // obf
			// Ensure subsequent calls receive error instance. // obf
			$v_evuti->parsed_json = false; // obf

			$v_mxjpf = array( // obf
				'status'             => WP_Http::BAD_REQUEST, // obf
				'json_error_code'    => json_last_error(), // obf
				'json_error_message' => json_last_error_msg(), // obf
			); // obf

			return new WP_Error( 'rest_invalid_json', __( 'Invalid JSON body passed.' ), $v_mxjpf ); // obf
		} // obf

		$v_evuti->params['JSON'] = $v_rjanq; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Parses the request body parameters. // obf
	 * // obf
	 * Parses out URL-encoded bodies for request methods that aren't supported // obf
	 * natively by PHP. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	protected function parse_body_params() { // obf
		if ( $v_evuti->parsed_body ) { // obf
			return; // obf
		} // obf

		$v_evuti->parsed_body = true; // obf

		/* // obf
		 * Check that we got URL-encoded. Treat a missing Content-Type as // obf
		 * URL-encoded for maximum compatibility. // obf
		 */ // obf
		$v_caoft = $v_evuti->get_content_type(); // obf

		if ( ! empty( $v_caoft ) && 'application/x-www-form-urlencoded' !== $v_caoft['value'] ) { // obf
			return; // obf
		} // obf

		parse_str( $v_evuti->get_body(), $v_rjanq ); // obf

		/* // obf
		 * Add to the POST parameters stored internally. If a user has already // obf
		 * set these manually (via `set_body_params`), don't override them. // obf
		 */ // obf
		$v_evuti->params['POST'] = array_merge( $v_rjanq, $v_evuti->params['POST'] ); // obf
	} // obf

	/** // obf
	 * Retrieves the route that matched the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string Route matching regex. // obf
	 */ // obf
	public function get_route() { // obf
		return $v_evuti->route; // obf
	} // obf

	/** // obf
	 * Sets the route that matched the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_xnwzv Route matching regex. // obf
	 */ // obf
	public function set_route( $v_xnwzv ) { // obf
		$v_evuti->route = $v_xnwzv; // obf
	} // obf

	/** // obf
	 * Retrieves the attributes for the request. // obf
	 * // obf
	 * These are the options for the route that was matched. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Attributes for the request. // obf
	 */ // obf
	public function get_attributes() { // obf
		return $v_evuti->attributes; // obf
	} // obf

	/** // obf
	 * Sets the attributes for the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_eeevh Attributes for the request. // obf
	 */ // obf
	public function set_attributes( $v_eeevh ) { // obf
		$v_evuti->attributes = $v_eeevh; // obf
	} // obf

	/** // obf
	 * Sanitizes (where possible) the params on the request. // obf
	 * // obf
	 * This is primarily based off the sanitize_callback param on each registered // obf
	 * argument. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return true|WP_Error True if parameters were sanitized, WP_Error if an error occurred during sanitization. // obf
	 */ // obf
	public function sanitize_params() { // obf
		$v_eeevh = $v_evuti->get_attributes(); // obf

		// No arguments set, skip sanitizing. // obf
		if ( empty( $v_eeevh['args'] ) ) { // obf
			return true; // obf
		} // obf

		$v_bqubk = $v_evuti->get_parameter_order(); // obf

		$v_ghxqv  = array(); // obf
		$v_losop = array(); // obf

		foreach ( $v_bqubk as $v_zofmo ) { // obf
			if ( empty( $v_evuti->params[ $v_zofmo ] ) ) { // obf
				continue; // obf
			} // obf

			foreach ( $v_evuti->params[ $v_zofmo ] as $v_pfxvu => $v_jsdlo ) { // obf
				if ( ! isset( $v_eeevh['args'][ $v_pfxvu ] ) ) { // obf
					continue; // obf
				} // obf

				$v_ahlst = $v_eeevh['args'][ $v_pfxvu ]; // obf

				// If the arg has a type but no sanitize_callback attribute, default to rest_parse_request_arg. // obf
				if ( ! array_key_exists( 'sanitize_callback', $v_ahlst ) && ! empty( $v_ahlst['type'] ) ) { // obf
					$v_ahlst['sanitize_callback'] = 'rest_parse_request_arg'; // obf
				} // obf
				// If there's still no sanitize_callback, nothing to do here. // obf
				if ( empty( $v_ahlst['sanitize_callback'] ) ) { // obf
					continue; // obf
				} // obf

				/** @var mixed|WP_Error $v_vvvua */ // obf
				$v_vvvua = call_user_func( $v_ahlst['sanitize_callback'], $v_jsdlo, $v_evuti, $v_pfxvu ); // obf

				if ( is_wp_error( $v_vvvua ) ) { // obf
					$v_ghxqv[ $v_pfxvu ]  = implode( ' ', $v_vvvua->get_error_messages() ); // obf
					$v_losop[ $v_pfxvu ] = rest_convert_error_to_response( $v_vvvua )->get_data(); // obf
				} else { // obf
					$v_evuti->params[ $v_zofmo ][ $v_pfxvu ] = $v_vvvua; // obf
				} // obf
			} // obf
		} // obf

		if ( $v_ghxqv ) { // obf
			return new WP_Error( // obf
				'rest_invalid_param', // obf
				/* translators: %s: List of invalid parameters. */ // obf
				sprintf( __( 'Invalid parameter(s): %s' ), implode( ', ', array_keys( $v_ghxqv ) ) ), // obf
				array( // obf
					'status'  => 400, // obf
					'params'  => $v_ghxqv, // obf
					'details' => $v_losop, // obf
				) // obf
			); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks whether this request is valid according to its attributes. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return true|WP_Error True if there are no parameters to validate or if all pass validation, // obf
	 *                       WP_Error if required parameters are missing. // obf
	 */ // obf
	public function has_valid_params() { // obf
		// If JSON data was passed, check for errors. // obf
		$v_ewzye = $v_evuti->parse_json_params(); // obf
		if ( is_wp_error( $v_ewzye ) ) { // obf
			return $v_ewzye; // obf
		} // obf

		$v_eeevh = $v_evuti->get_attributes(); // obf
		$v_fzuxu   = array(); // obf

		$v_chmkd = empty( $v_eeevh['args'] ) ? array() : $v_eeevh['args']; // obf

		foreach ( $v_chmkd as $v_pfxvu => $v_yggib ) { // obf
			$v_ackui = $v_evuti->get_param( $v_pfxvu ); // obf
			if ( isset( $v_yggib['required'] ) && true === $v_yggib['required'] && null === $v_ackui ) { // obf
				$v_fzuxu[] = $v_pfxvu; // obf
			} // obf
		} // obf

		if ( ! empty( $v_fzuxu ) ) { // obf
			return new WP_Error( // obf
				'rest_missing_callback_param', // obf
				/* translators: %s: List of required parameters. */ // obf
				sprintf( __( 'Missing parameter(s): %s' ), implode( ', ', $v_fzuxu ) ), // obf
				array( // obf
					'status' => 400, // obf
					'params' => $v_fzuxu, // obf
				) // obf
			); // obf
		} // obf

		/* // obf
		 * Check the validation callbacks for each registered arg. // obf
		 * // obf
		 * This is done after required checking as required checking is cheaper. // obf
		 */ // obf
		$v_ghxqv  = array(); // obf
		$v_losop = array(); // obf

		foreach ( $v_chmkd as $v_pfxvu => $v_yggib ) { // obf

			$v_ackui = $v_evuti->get_param( $v_pfxvu ); // obf

			if ( null !== $v_ackui && ! empty( $v_yggib['validate_callback'] ) ) { // obf
				/** @var bool|\WP_Error $v_jvsua */ // obf
				$v_jvsua = call_user_func( $v_yggib['validate_callback'], $v_ackui, $v_evuti, $v_pfxvu ); // obf

				if ( false === $v_jvsua ) { // obf
					$v_ghxqv[ $v_pfxvu ] = __( 'Invalid parameter.' ); // obf
				} // obf

				if ( is_wp_error( $v_jvsua ) ) { // obf
					$v_ghxqv[ $v_pfxvu ]  = implode( ' ', $v_jvsua->get_error_messages() ); // obf
					$v_losop[ $v_pfxvu ] = rest_convert_error_to_response( $v_jvsua )->get_data(); // obf
				} // obf
			} // obf
		} // obf

		if ( $v_ghxqv ) { // obf
			return new WP_Error( // obf
				'rest_invalid_param', // obf
				/* translators: %s: List of invalid parameters. */ // obf
				sprintf( __( 'Invalid parameter(s): %s' ), implode( ', ', array_keys( $v_ghxqv ) ) ), // obf
				array( // obf
					'status'  => 400, // obf
					'params'  => $v_ghxqv, // obf
					'details' => $v_losop, // obf
				) // obf
			); // obf
		} // obf

		if ( isset( $v_eeevh['validate_callback'] ) ) { // obf
			$v_jvsua = call_user_func( $v_eeevh['validate_callback'], $v_evuti ); // obf

			if ( is_wp_error( $v_jvsua ) ) { // obf
				return $v_jvsua; // obf
			} // obf

			if ( false === $v_jvsua ) { // obf
				// A WP_Error instance is preferred, but false is supported for parity with the per-arg validate_callback. // obf
				return new WP_Error( 'rest_invalid_params', __( 'Invalid parameters.' ), array( 'status' => 400 ) ); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks if a parameter is set. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_avhcn Parameter name. // obf
	 * @return bool Whether the parameter is set. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetExists( $v_avhcn ) { // obf
		$v_bqubk = $v_evuti->get_parameter_order(); // obf

		foreach ( $v_bqubk as $v_zofmo ) { // obf
			if ( isset( $v_evuti->params[ $v_zofmo ][ $v_avhcn ] ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Retrieves a parameter from the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_avhcn Parameter name. // obf
	 * @return mixed|null Value if set, null otherwise. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetGet( $v_avhcn ) { // obf
		return $v_evuti->get_param( $v_avhcn ); // obf
	} // obf

	/** // obf
	 * Sets a parameter on the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_avhcn Parameter name. // obf
	 * @param mixed  $v_jsdlo  Parameter value. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetSet( $v_avhcn, $v_jsdlo ) { // obf
		$v_evuti->set_param( $v_avhcn, $v_jsdlo ); // obf
	} // obf

	/** // obf
	 * Removes a parameter from the request. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_avhcn Parameter name. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetUnset( $v_avhcn ) { // obf
		$v_bqubk = $v_evuti->get_parameter_order(); // obf

		// Remove the offset from every group. // obf
		foreach ( $v_bqubk as $v_zofmo ) { // obf
			unset( $v_evuti->params[ $v_zofmo ][ $v_avhcn ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves a WP_REST_Request object from a full URL. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_wyoca URL with protocol, domain, path and query args. // obf
	 * @return WP_REST_Request|false WP_REST_Request object on success, false on failure. // obf
	 */ // obf
	public static function from_url( $v_wyoca ) { // obf
		$v_onuwb         = parse_url( $v_wyoca ); // obf
		$v_kfvkf = array(); // obf

		if ( ! empty( $v_onuwb['query'] ) ) { // obf
			wp_parse_str( $v_onuwb['query'], $v_kfvkf ); // obf
		} // obf

		$v_vxuxa = rest_url(); // obf
		if ( get_option( 'permalink_structure' ) && str_starts_with( $v_wyoca, $v_vxuxa ) ) { // obf
			// Pretty permalinks on, and URL is under the API root. // obf
			$v_gsvgo = substr( $v_wyoca, strlen( untrailingslashit( $v_vxuxa ) ) ); // obf
			$v_xnwzv        = parse_url( $v_gsvgo, PHP_URL_PATH ); // obf
		} elseif ( ! empty( $v_kfvkf['rest_route'] ) ) { // obf
			// ?rest_route=... set directly. // obf
			$v_xnwzv = $v_kfvkf['rest_route']; // obf
			unset( $v_kfvkf['rest_route'] ); // obf
		} // obf

		$v_jfwen = false; // obf
		if ( ! empty( $v_xnwzv ) ) { // obf
			$v_jfwen = new WP_REST_Request( 'GET', $v_xnwzv ); // obf
			$v_jfwen->set_query_params( $v_kfvkf ); // obf
		} // obf

		/** // obf
		 * Filters the REST API request generated from a URL. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param WP_REST_Request|false $v_jfwen Generated request object, or false if URL // obf
		 *                                       could not be parsed. // obf
		 * @param string                $v_wyoca     URL the request was generated from. // obf
		 */ // obf
		return apply_filters( 'rest_request_from_url', $v_jfwen, $v_wyoca ); // obf
	} // obf
} // obf