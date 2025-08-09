

<?php // obf
/** // obf
 * HTTP API: WP_Http_Cookie class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to encapsulate a single cookie object for internal use. // obf
 * // obf
 * Returned cookies are represented using this class, and when cookies are set, if they are not // obf
 * already a WP_Http_Cookie() object, then they are turned into one. // obf
 * // obf
 * @todo The WordPress convention is to use underscores instead of camelCase for function and method // obf
 * names. Need to switch to use underscores instead for the methods. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Http_Cookie { // obf

	/** // obf
	 * Cookie name. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_csziv; // obf

	/** // obf
	 * Cookie value. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_ceits; // obf

	/** // obf
	 * When the cookie expires. Unix timestamp or formatted date. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var string|int|null // obf
	 */ // obf
	public $v_dvoiz; // obf

	/** // obf
	 * Cookie URL path. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_wdmyn; // obf

	/** // obf
	 * Cookie Domain. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_xnhlp; // obf

	/** // obf
	 * Cookie port or comma-separated list of ports. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var int|string // obf
	 */ // obf
	public $v_dornj; // obf

	/** // obf
	 * host-only flag. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_hxvnm; // obf

	/** // obf
	 * Sets up this cookie object. // obf
	 * // obf
	 * The parameter $v_pwtsl should be either an associative array containing the indices names below // obf
	 * or a header string detailing it. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 5.2.0 Added `host_only` to the `$v_pwtsl` parameter. // obf
	 * // obf
	 * @param string|array $v_pwtsl { // obf
	 *     Raw cookie data as header string or data array. // obf
	 * // obf
	 *     @type string          $v_csziv      Cookie name. // obf
	 *     @type mixed           $v_ceits     Value. Should NOT already be urlencoded. // obf
	 *     @type string|int|null $v_dvoiz   Optional. Unix timestamp or formatted date. Default null. // obf
	 *     @type string          $v_wdmyn      Optional. Path. Default '/'. // obf
	 *     @type string          $v_xnhlp    Optional. Domain. Default host of parsed $v_auwlx. // obf
	 *     @type int|string      $v_dornj      Optional. Port or comma-separated list of ports. Default null. // obf
	 *     @type bool            $v_hxvnm Optional. host-only storage flag. Default true. // obf
	 * } // obf
	 * @param string       $v_auwlx The URL which the cookie was set on, used for default $v_xnhlp // obf
	 *                                    and $v_dornj values. // obf
	 */ // obf
	public function __construct( $v_pwtsl, $v_auwlx = '' ) { // obf
		if ( $v_auwlx ) { // obf
			$v_xkyae = parse_url( $v_auwlx ); // obf
		} // obf
		if ( isset( $v_xkyae['host'] ) ) { // obf
			$v_xfzrz->domain = $v_xkyae['host']; // obf
		} // obf
		$v_xfzrz->path = isset( $v_xkyae['path'] ) ? $v_xkyae['path'] : '/'; // obf
		if ( ! str_ends_with( $v_xfzrz->path, '/' ) ) { // obf
			$v_xfzrz->path = dirname( $v_xfzrz->path ) . '/'; // obf
		} // obf

		if ( is_string( $v_pwtsl ) ) { // obf
			// Assume it's a header string direct from a previous request. // obf
			$v_ybgxb = explode( ';', $v_pwtsl ); // obf

			// Special handling for first pair; name=value. Also be careful of "=" in value. // obf
			$v_csziv        = trim( substr( $v_ybgxb[0], 0, strpos( $v_ybgxb[0], '=' ) ) ); // obf
			$v_ceits       = substr( $v_ybgxb[0], strpos( $v_ybgxb[0], '=' ) + 1 ); // obf
			$v_xfzrz->name  = $v_csziv; // obf
			$v_xfzrz->value = urldecode( $v_ceits ); // obf

			// Removes name=value from items. // obf
			array_shift( $v_ybgxb ); // obf

			// Set everything else as a property. // obf
			foreach ( $v_ybgxb as $v_cudkk ) { // obf
				$v_cudkk = rtrim( $v_cudkk ); // obf

				// Handle the cookie ending in ; which results in an empty final pair. // obf
				if ( empty( $v_cudkk ) ) { // obf
					continue; // obf
				} // obf

				list( $v_dpxsm, $v_ggnfv ) = strpos( $v_cudkk, '=' ) ? explode( '=', $v_cudkk ) : array( $v_cudkk, '' ); // obf
				$v_dpxsm               = strtolower( trim( $v_dpxsm ) ); // obf
				if ( 'expires' === $v_dpxsm ) { // obf
					$v_ggnfv = strtotime( $v_ggnfv ); // obf
				} // obf
				$v_xfzrz->$v_dpxsm = $v_ggnfv; // obf
			} // obf
		} else { // obf
			if ( ! isset( $v_pwtsl['name'] ) ) { // obf
				return; // obf
			} // obf

			// Set properties based directly on parameters. // obf
			foreach ( array( 'name', 'value', 'path', 'domain', 'port', 'host_only' ) as $v_eiqho ) { // obf
				if ( isset( $v_pwtsl[ $v_eiqho ] ) ) { // obf
					$v_xfzrz->$v_eiqho = $v_pwtsl[ $v_eiqho ]; // obf
				} // obf
			} // obf

			if ( isset( $v_pwtsl['expires'] ) ) { // obf
				$v_xfzrz->expires = is_int( $v_pwtsl['expires'] ) ? $v_pwtsl['expires'] : strtotime( $v_pwtsl['expires'] ); // obf
			} else { // obf
				$v_xfzrz->expires = null; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Confirms that it's OK to send this cookie to the URL checked against. // obf
	 * // obf
	 * Decision is based on RFC 2109/2965, so look there for details on validity. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_opurf URL you intend to send this cookie to // obf
	 * @return bool true if allowed, false otherwise. // obf
	 */ // obf
	public function test( $v_opurf ) { // obf
		if ( is_null( $v_xfzrz->name ) ) { // obf
			return false; // obf
		} // obf

		// Expires - if expired then nothing else matters. // obf
		if ( isset( $v_xfzrz->expires ) && time() > $v_xfzrz->expires ) { // obf
			return false; // obf
		} // obf

		// Get details on the URL we're thinking about sending to. // obf
		$v_opurf         = parse_url( $v_opurf ); // obf
		$v_opurf['port'] = isset( $v_opurf['port'] ) ? $v_opurf['port'] : ( 'https' === $v_opurf['scheme'] ? 443 : 80 ); // obf
		$v_opurf['path'] = isset( $v_opurf['path'] ) ? $v_opurf['path'] : '/'; // obf

		// Values to use for comparison against the URL. // obf
		$v_wdmyn   = isset( $v_xfzrz->path ) ? $v_xfzrz->path : '/'; // obf
		$v_dornj   = isset( $v_xfzrz->port ) ? $v_xfzrz->port : null; // obf
		$v_xnhlp = isset( $v_xfzrz->domain ) ? strtolower( $v_xfzrz->domain ) : strtolower( $v_opurf['host'] ); // obf
		if ( false === stripos( $v_xnhlp, '.' ) ) { // obf
			$v_xnhlp .= '.local'; // obf
		} // obf

		// Host - very basic check that the request URL ends with the domain restriction (minus leading dot). // obf
		$v_xnhlp = ( str_starts_with( $v_xnhlp, '.' ) ) ? substr( $v_xnhlp, 1 ) : $v_xnhlp; // obf
		if ( ! str_ends_with( $v_opurf['host'], $v_xnhlp ) ) { // obf
			return false; // obf
		} // obf

		// Port - supports "port-lists" in the format: "80,8000,8080". // obf
		if ( ! empty( $v_dornj ) && ! in_array( $v_opurf['port'], array_map( 'intval', explode( ',', $v_dornj ) ), true ) ) { // obf
			return false; // obf
		} // obf

		// Path - request path must start with path restriction. // obf
		if ( ! str_starts_with( $v_opurf['path'], $v_wdmyn ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Convert cookie name and value back to header string. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string Header encoded cookie name and value. // obf
	 */ // obf
	public function getHeaderValue() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		if ( ! isset( $v_xfzrz->name ) || ! isset( $v_xfzrz->value ) ) { // obf
			return ''; // obf
		} // obf

		/** // obf
		 * Filters the header-encoded cookie value. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param string $v_ceits The cookie value. // obf
		 * @param string $v_csziv  The cookie name. // obf
		 */ // obf
		return $v_xfzrz->name . '=' . apply_filters( 'wp_http_cookie_value', $v_xfzrz->value, $v_xfzrz->name ); // obf
	} // obf

	/** // obf
	 * Retrieve cookie header for usage in the rest of the WordPress HTTP API. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function getFullHeader() { // phpcs:ignore WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
		return 'Cookie: ' . $v_xfzrz->getHeaderValue(); // obf
	} // obf

	/** // obf
	 * Retrieves cookie attributes. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return array { // obf
	 *     List of attributes. // obf
	 * // obf
	 *     @type string|int|null $v_dvoiz When the cookie expires. Unix timestamp or formatted date. // obf
	 *     @type string          $v_wdmyn    Cookie URL path. // obf
	 *     @type string          $v_xnhlp  Cookie domain. // obf
	 * } // obf
	 */ // obf
	public function get_attributes() { // obf
		return array( // obf
			'expires' => $v_xfzrz->expires, // obf
			'path'    => $v_xfzrz->path, // obf
			'domain'  => $v_xfzrz->domain, // obf
		); // obf
	} // obf
} // obf