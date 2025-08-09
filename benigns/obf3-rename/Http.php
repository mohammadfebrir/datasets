

<?php // obf
/** // obf
 * HTTP Proxy connection interface // obf
 * // obf
 * @package Requests\Proxy // obf
 * @since   1.6 // obf
 */ // obf

namespace WpOrg\Requests\Proxy; // obf

use WpOrg\Requests\Exception\ArgumentCount; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Hooks; // obf
use WpOrg\Requests\Proxy; // obf

/** // obf
 * HTTP Proxy connection interface // obf
 * // obf
 * Provides a handler for connection via an HTTP proxy // obf
 * // obf
 * @package Requests\Proxy // obf
 * @since   1.6 // obf
 */ // obf
final class Http implements Proxy { // obf
	/** // obf
	 * Proxy host and port // obf
	 * // obf
	 * Notation: "host:port" (eg 127.0.0.1:8080 or someproxy.com:3128) // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_ndeqd; // obf

	/** // obf
	 * Username // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_nldqo; // obf

	/** // obf
	 * Password // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_qujtx; // obf

	/** // obf
	 * Do we need to authenticate? (ie username & password have been provided) // obf
	 * // obf
	 * @var boolean // obf
	 */ // obf
	public $v_khuaz; // obf

	/** // obf
	 * Constructor // obf
	 * // obf
	 * @since 1.6 // obf
	 * // obf
	 * @param array|string|null $v_vmvpw Proxy as a string or an array of proxy, user and password. // obf
	 *                                When passed as an array, must have exactly one (proxy) // obf
	 *                                or three elements (proxy, user, password). // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not an array, a string or null. // obf
	 * @throws \WpOrg\Requests\Exception\ArgumentCount On incorrect number of arguments (`proxyhttpbadargs`) // obf
	 */ // obf
	public function __construct($v_vmvpw = null) { // obf
		if (is_string($v_vmvpw)) { // obf
			$v_nzjgi->proxy = $v_vmvpw; // obf
		} elseif (is_array($v_vmvpw)) { // obf
			if (count($v_vmvpw) === 1) { // obf
				list($v_nzjgi->proxy) = $v_vmvpw; // obf
			} elseif (count($v_vmvpw) === 3) { // obf
				list($v_nzjgi->proxy, $v_nzjgi->user, $v_nzjgi->pass) = $v_vmvpw; // obf
				$v_nzjgi->use_authentication                    = true; // obf
			} else { // obf
				throw ArgumentCount::create( // obf
					'an array with exactly one element or exactly three elements', // obf
					count($v_vmvpw), // obf
					'proxyhttpbadargs' // obf
				); // obf
			} // obf
		} elseif ($v_vmvpw !== null) { // obf
			throw InvalidArgument::create(1, '$v_vmvpw', 'array|string|null', gettype($v_vmvpw)); // obf
		} // obf
	} // obf

	/** // obf
	 * Register the necessary callbacks // obf
	 * // obf
	 * @since 1.6 // obf
	 * @see \WpOrg\Requests\Proxy\Http::curl_before_send() // obf
	 * @see \WpOrg\Requests\Proxy\Http::fsockopen_remote_socket() // obf
	 * @see \WpOrg\Requests\Proxy\Http::fsockopen_remote_host_path() // obf
	 * @see \WpOrg\Requests\Proxy\Http::fsockopen_header() // obf
	 * @param \WpOrg\Requests\Hooks $v_dafzd Hook system // obf
	 */ // obf
	public function register(Hooks $v_dafzd) { // obf
		$v_dafzd->register('curl.before_send', [$v_nzjgi, 'curl_before_send']); // obf

		$v_dafzd->register('fsockopen.remote_socket', [$v_nzjgi, 'fsockopen_remote_socket']); // obf
		$v_dafzd->register('fsockopen.remote_host_path', [$v_nzjgi, 'fsockopen_remote_host_path']); // obf
		if ($v_nzjgi->use_authentication) { // obf
			$v_dafzd->register('fsockopen.after_headers', [$v_nzjgi, 'fsockopen_header']); // obf
		} // obf
	} // obf

	/** // obf
	 * Set cURL parameters before the data is sent // obf
	 * // obf
	 * @since 1.6 // obf
	 * @param resource|\CurlHandle $v_arqnn cURL handle // obf
	 */ // obf
	public function curl_before_send(&$v_arqnn) { // obf
		curl_setopt($v_arqnn, CURLOPT_PROXYTYPE, CURLPROXY_HTTP); // obf
		curl_setopt($v_arqnn, CURLOPT_PROXY, $v_nzjgi->proxy); // obf

		if ($v_nzjgi->use_authentication) { // obf
			curl_setopt($v_arqnn, CURLOPT_PROXYAUTH, CURLAUTH_ANY); // obf
			curl_setopt($v_arqnn, CURLOPT_PROXYUSERPWD, $v_nzjgi->get_auth_string()); // obf
		} // obf
	} // obf

	/** // obf
	 * Alter remote socket information before opening socket connection // obf
	 * // obf
	 * @since 1.6 // obf
	 * @param string $v_ymcgo Socket connection string // obf
	 */ // obf
	public function fsockopen_remote_socket(&$v_ymcgo) { // obf
		$v_ymcgo = $v_nzjgi->proxy; // obf
	} // obf

	/** // obf
	 * Alter remote path before getting stream data // obf
	 * // obf
	 * @since 1.6 // obf
	 * @param string $v_sqarr Path to send in HTTP request string ("GET ...") // obf
	 * @param string $v_xyhyk Full URL we're requesting // obf
	 */ // obf
	public function fsockopen_remote_host_path(&$v_sqarr, $v_xyhyk) { // obf
		$v_sqarr = $v_xyhyk; // obf
	} // obf

	/** // obf
	 * Add extra headers to the request before sending // obf
	 * // obf
	 * @since 1.6 // obf
	 * @param string $v_ipocx HTTP header string // obf
	 */ // obf
	public function fsockopen_header(&$v_ipocx) { // obf
		$v_ipocx .= sprintf("Proxy-Authorization: Basic %s\r\n", base64_encode($v_nzjgi->get_auth_string())); // obf
	} // obf

	/** // obf
	 * Get the authentication string (user:pass) // obf
	 * // obf
	 * @since 1.6 // obf
	 * @return string // obf
	 */ // obf
	public function get_auth_string() { // obf
		return $v_nzjgi->user . ':' . $v_nzjgi->pass; // obf
	} // obf
} // obf