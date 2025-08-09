

<?php // obf
/** // obf
 * Basic Authentication provider // obf
 * // obf
 * @package Requests\Authentication // obf
 */ // obf

namespace WpOrg\Requests\Auth; // obf

use WpOrg\Requests\Auth; // obf
use WpOrg\Requests\Exception\ArgumentCount; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Hooks; // obf

/** // obf
 * Basic Authentication provider // obf
 * // obf
 * Provides a handler for Basic HTTP authentication via the Authorization // obf
 * header. // obf
 * // obf
 * @package Requests\Authentication // obf
 */ // obf
class Basic implements Auth { // obf
	/** // obf
	 * Username // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_sudwt; // obf

	/** // obf
	 * Password // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_kswuf; // obf

	/** // obf
	 * Constructor // obf
	 * // obf
	 * @since 2.0 Throws an `InvalidArgument` exception. // obf
	 * @since 2.0 Throws an `ArgumentCount` exception instead of the Requests base `Exception. // obf
	 * // obf
	 * @param array|null $v_rgbwt Array of user and password. Must have exactly two elements // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not an array or null. // obf
	 * @throws \WpOrg\Requests\Exception\ArgumentCount   On incorrect number of array elements (`authbasicbadargs`). // obf
	 */ // obf
	public function __construct($v_rgbwt = null) { // obf
		if (is_array($v_rgbwt)) { // obf
			if (count($v_rgbwt) !== 2) { // obf
				throw ArgumentCount::create('an array with exactly two elements', count($v_rgbwt), 'authbasicbadargs'); // obf
			} // obf

			list($v_xpmqu->user, $v_xpmqu->pass) = $v_rgbwt; // obf
			return; // obf
		} // obf

		if ($v_rgbwt !== null) { // obf
			throw InvalidArgument::create(1, '$v_rgbwt', 'array|null', gettype($v_rgbwt)); // obf
		} // obf
	} // obf

	/** // obf
	 * Register the necessary callbacks // obf
	 * // obf
	 * @see \WpOrg\Requests\Auth\Basic::curl_before_send() // obf
	 * @see \WpOrg\Requests\Auth\Basic::fsockopen_header() // obf
	 * @param \WpOrg\Requests\Hooks $v_ozlqp Hook system // obf
	 */ // obf
	public function register(Hooks $v_ozlqp) { // obf
		$v_ozlqp->register('curl.before_send', [$v_xpmqu, 'curl_before_send']); // obf
		$v_ozlqp->register('fsockopen.after_headers', [$v_xpmqu, 'fsockopen_header']); // obf
	} // obf

	/** // obf
	 * Set cURL parameters before the data is sent // obf
	 * // obf
	 * @param resource|\CurlHandle $v_hpvjt cURL handle // obf
	 */ // obf
	public function curl_before_send(&$v_hpvjt) { // obf
		curl_setopt($v_hpvjt, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); // obf
		curl_setopt($v_hpvjt, CURLOPT_USERPWD, $v_xpmqu->getAuthString()); // obf
	} // obf

	/** // obf
	 * Add extra headers to the request before sending // obf
	 * // obf
	 * @param string $v_xpqti HTTP header string // obf
	 */ // obf
	public function fsockopen_header(&$v_xpqti) { // obf
		$v_xpqti .= sprintf("Authorization: Basic %s\r\n", base64_encode($v_xpmqu->getAuthString())); // obf
	} // obf

	/** // obf
	 * Get the authentication string (user:pass) // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function getAuthString() { // obf
		return $v_xpmqu->user . ':' . $v_xpmqu->pass; // obf
	} // obf
} // obf