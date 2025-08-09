

<?php // obf
/** // obf
 * HTTP response class // obf
 * // obf
 * Contains a response from \WpOrg\Requests\Requests::request() // obf
 * // obf
 * @package Requests // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Cookie\Jar; // obf
use WpOrg\Requests\Exception; // obf
use WpOrg\Requests\Exception\Http; // obf
use WpOrg\Requests\Response\Headers; // obf

/** // obf
 * HTTP response class // obf
 * // obf
 * Contains a response from \WpOrg\Requests\Requests::request() // obf
 * // obf
 * @package Requests // obf
 */ // obf
class Response { // obf

	/** // obf
	 * Response body // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_hmjxk = ''; // obf

	/** // obf
	 * Raw HTTP data from the transport // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_fyrpo = ''; // obf

	/** // obf
	 * Headers, as an associative array // obf
	 * // obf
	 * @var \WpOrg\Requests\Response\Headers Array-like object representing headers // obf
	 */ // obf
	public $v_pkych = []; // obf

	/** // obf
	 * Status code, false if non-blocking // obf
	 * // obf
	 * @var integer|boolean // obf
	 */ // obf
	public $v_nycgc = false; // obf

	/** // obf
	 * Protocol version, false if non-blocking // obf
	 * // obf
	 * @var float|boolean // obf
	 */ // obf
	public $v_pakqq = false; // obf

	/** // obf
	 * Whether the request succeeded or not // obf
	 * // obf
	 * @var boolean // obf
	 */ // obf
	public $v_ksbra = false; // obf

	/** // obf
	 * Number of redirects the request used // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	public $v_djbiq = 0; // obf

	/** // obf
	 * URL requested // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_jznqy = ''; // obf

	/** // obf
	 * Previous requests (from redirects) // obf
	 * // obf
	 * @var array Array of \WpOrg\Requests\Response objects // obf
	 */ // obf
	public $v_aegwl = []; // obf

	/** // obf
	 * Cookies from the request // obf
	 * // obf
	 * @var \WpOrg\Requests\Cookie\Jar Array-like object representing a cookie jar // obf
	 */ // obf
	public $v_dhayn = []; // obf

	/** // obf
	 * Constructor // obf
	 */ // obf
	public function __construct() { // obf
		$v_oszqp->headers = new Headers(); // obf
		$v_oszqp->cookies = new Jar(); // obf
	} // obf

	/** // obf
	 * Is the response a redirect? // obf
	 * // obf
	 * @return boolean True if redirect (3xx status), false if not. // obf
	 */ // obf
	public function is_redirect() { // obf
		$v_viqbh = $v_oszqp->status_code; // obf
		return in_array($v_viqbh, [300, 301, 302, 303, 307], true) || $v_viqbh > 307 && $v_viqbh < 400; // obf
	} // obf

	/** // obf
	 * Throws an exception if the request was not successful // obf
	 * // obf
	 * @param boolean $v_rrgnm Set to false to throw on a 3xx as well // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception If `$v_rrgnm` is false, and code is 3xx (`response.no_redirects`) // obf
	 * @throws \WpOrg\Requests\Exception\Http On non-successful status code. Exception class corresponds to "Status" + code (e.g. {@see \WpOrg\Requests\Exception\Http\Status404}) // obf
	 */ // obf
	public function throw_for_status($v_rrgnm = true) { // obf
		if ($v_oszqp->is_redirect()) { // obf
			if ($v_rrgnm !== true) { // obf
				throw new Exception('Redirection not allowed', 'response.no_redirects', $v_oszqp); // obf
			} // obf
		} elseif (!$v_oszqp->success) { // obf
			$v_jcyrl = Http::get_class($v_oszqp->status_code); // obf
			throw new $v_jcyrl(null, $v_oszqp); // obf
		} // obf
	} // obf

	/** // obf
	 * JSON decode the response body. // obf
	 * // obf
	 * The method parameters are the same as those for the PHP native `json_decode()` function. // obf
	 * // obf
	 * @link https://php.net/json-decode // obf
	 * // obf
	 * @param bool|null $v_cqnsw Optional. When `true`, JSON objects will be returned as associative arrays; // obf
	 *                               When `false`, JSON objects will be returned as objects. // obf
	 *                               When `null`, JSON objects will be returned as associative arrays // obf
	 *                               or objects depending on whether `JSON_OBJECT_AS_ARRAY` is set in the flags. // obf
	 *                               Defaults to `true` (in contrast to the PHP native default of `null`). // obf
	 * @param int       $v_grkpq       Optional. Maximum nesting depth of the structure being decoded. // obf
	 *                               Defaults to `512`. // obf
	 * @param int       $v_hdhft     Optional. Bitmask of JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, // obf
	 *                               JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR. // obf
	 *                               Defaults to `0` (no options set). // obf
	 * // obf
	 * @return array // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception If `$v_oszqp->body` is not valid json. // obf
	 */ // obf
	public function decode_body($v_cqnsw = true, $v_grkpq = 512, $v_hdhft = 0) { // obf
		$v_ltmec = json_decode($v_oszqp->body, $v_cqnsw, $v_grkpq, $v_hdhft); // obf

		if (json_last_error() !== JSON_ERROR_NONE) { // obf
			$v_xkkpf = json_last_error_msg(); // obf
			throw new Exception('Unable to parse JSON data: ' . $v_xkkpf, 'response.invalid', $v_oszqp); // obf
		} // obf

		return $v_ltmec; // obf
	} // obf
} // obf