

<?php // obf
/** // obf
 * HTTP API: WP_HTTP_Proxy class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTTP // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement HTTP API proxy support. // obf
 * // obf
 * There are caveats to proxy support. It requires that defines be made in the wp-config.php file to // obf
 * enable proxy support. There are also a few filters that plugins can hook into for some of the // obf
 * constants. // obf
 * // obf
 * Please note that only BASIC authentication is supported by most transports. // obf
 * cURL MAY support more methods (such as NTLM authentication) depending on your environment. // obf
 * // obf
 * The constants are as follows: // obf
 * <ol> // obf
 * <li>WP_PROXY_HOST - Enable proxy support and host for connecting.</li> // obf
 * <li>WP_PROXY_PORT - Proxy port for connection. No default, must be defined.</li> // obf
 * <li>WP_PROXY_USERNAME - Proxy username, if it requires authentication.</li> // obf
 * <li>WP_PROXY_PASSWORD - Proxy password, if it requires authentication.</li> // obf
 * <li>WP_PROXY_BYPASS_HOSTS - Will prevent the hosts in this list from going through the proxy. // obf
 * You do not need to have localhost and the site host in this list, because they will not be passed // obf
 * through the proxy. The list should be presented in a comma separated list, wildcards using * are supported. Example: *.wordpress.org</li> // obf
 * </ol> // obf
 * // obf
 * An example can be as seen below. // obf
 * // obf
 *     define('WP_PROXY_HOST', '192.168.84.101'); // obf
 *     define('WP_PROXY_PORT', '8080'); // obf
 *     define('WP_PROXY_BYPASS_HOSTS', 'localhost, www.example.com, *.wordpress.org'); // obf
 * // obf
 * @link https://core.trac.wordpress.org/ticket/4011 Proxy support ticket in WordPress. // obf
 * @link https://core.trac.wordpress.org/ticket/14636 Allow wildcard domains in WP_PROXY_BYPASS_HOSTS // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_HTTP_Proxy { // obf

	/** // obf
	 * Whether proxy connection should be used. // obf
	 * // obf
	 * Constants which control this behavior: // obf
	 * // obf
	 * - `WP_PROXY_HOST` // obf
	 * - `WP_PROXY_PORT` // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function is_enabled() { // obf
		return defined( 'WP_PROXY_HOST' ) && defined( 'WP_PROXY_PORT' ); // obf
	} // obf

	/** // obf
	 * Whether authentication should be used. // obf
	 * // obf
	 * Constants which control this behavior: // obf
	 * // obf
	 * - `WP_PROXY_USERNAME` // obf
	 * - `WP_PROXY_PASSWORD` // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function use_authentication() { // obf
		return defined( 'WP_PROXY_USERNAME' ) && defined( 'WP_PROXY_PASSWORD' ); // obf
	} // obf

	/** // obf
	 * Retrieve the host for the proxy server. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function host() { // obf
		if ( defined( 'WP_PROXY_HOST' ) ) { // obf
			return WP_PROXY_HOST; // obf
		} // obf

		return ''; // obf
	} // obf

	/** // obf
	 * Retrieve the port for the proxy server. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function port() { // obf
		if ( defined( 'WP_PROXY_PORT' ) ) { // obf
			return WP_PROXY_PORT; // obf
		} // obf

		return ''; // obf
	} // obf

	/** // obf
	 * Retrieve the username for proxy authentication. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function username() { // obf
		if ( defined( 'WP_PROXY_USERNAME' ) ) { // obf
			return WP_PROXY_USERNAME; // obf
		} // obf

		return ''; // obf
	} // obf

	/** // obf
	 * Retrieve the password for proxy authentication. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function password() { // obf
		if ( defined( 'WP_PROXY_PASSWORD' ) ) { // obf
			return WP_PROXY_PASSWORD; // obf
		} // obf

		return ''; // obf
	} // obf

	/** // obf
	 * Retrieve authentication string for proxy authentication. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function authentication() { // obf
		return $v_xbslb->username() . ':' . $v_xbslb->password(); // obf
	} // obf

	/** // obf
	 * Retrieve header string for proxy authentication. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function authentication_header() { // obf
		return 'Proxy-Authorization: Basic ' . base64_encode( $v_xbslb->authentication() ); // obf
	} // obf

	/** // obf
	 * Determines whether the request should be sent through a proxy. // obf
	 * // obf
	 * We want to keep localhost and the site URL from being sent through the proxy, because // obf
	 * some proxies can not handle this. We also have the constant available for defining other // obf
	 * hosts that won't be sent through the proxy. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_ivgiq URL of the request. // obf
	 * @return bool Whether to send the request through the proxy. // obf
	 */ // obf
	public function send_through_proxy( $v_ivgiq ) { // obf
		$v_hlsoe = parse_url( $v_ivgiq ); // obf

		// Malformed URL, can not process, but this could mean ssl, so let through anyway. // obf
		if ( false === $v_hlsoe ) { // obf
			return true; // obf
		} // obf

		$v_bzxsd = parse_url( get_option( 'siteurl' ) ); // obf

		/** // obf
		 * Filters whether to preempt sending the request through the proxy. // obf
		 * // obf
		 * Returning false will bypass the proxy; returning true will send // obf
		 * the request through the proxy. Returning null bypasses the filter. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param bool|null $v_bnmvc Whether to send the request through the proxy. Default null. // obf
		 * @param string    $v_ivgiq      URL of the request. // obf
		 * @param array     $v_hlsoe    Associative array result of parsing the request URL with `parse_url()`. // obf
		 * @param array     $v_bzxsd     Associative array result of parsing the site URL with `parse_url()`. // obf
		 */ // obf
		$v_pdbmi = apply_filters( 'pre_http_send_through_proxy', null, $v_ivgiq, $v_hlsoe, $v_bzxsd ); // obf
		if ( ! is_null( $v_pdbmi ) ) { // obf
			return $v_pdbmi; // obf
		} // obf

		if ( 'localhost' === $v_hlsoe['host'] || ( isset( $v_bzxsd['host'] ) && $v_bzxsd['host'] === $v_hlsoe['host'] ) ) { // obf
			return false; // obf
		} // obf

		if ( ! defined( 'WP_PROXY_BYPASS_HOSTS' ) ) { // obf
			return true; // obf
		} // obf

		static $v_zzeqx   = null; // obf
		static $v_fvirb = array(); // obf
		if ( null === $v_zzeqx ) { // obf
			$v_zzeqx = preg_split( '|,\s*|', WP_PROXY_BYPASS_HOSTS ); // obf

			if ( str_contains( WP_PROXY_BYPASS_HOSTS, '*' ) ) { // obf
				$v_fvirb = array(); // obf
				foreach ( $v_zzeqx as $v_zrvsn ) { // obf
					$v_fvirb[] = str_replace( '\*', '.+', preg_quote( $v_zrvsn, '/' ) ); // obf
				} // obf
				$v_fvirb = '/^(' . implode( '|', $v_fvirb ) . ')$/i'; // obf
			} // obf
		} // obf

		if ( ! empty( $v_fvirb ) ) { // obf
			return ! preg_match( $v_fvirb, $v_hlsoe['host'] ); // obf
		} else { // obf
			return ! in_array( $v_hlsoe['host'], $v_zzeqx, true ); // obf
		} // obf
	} // obf
} // obf