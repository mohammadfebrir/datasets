

<?php // obf
/** // obf
 * Session handler for persistent requests and default parameters // obf
 * // obf
 * @package Requests\SessionHandler // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Cookie\Jar; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Iri; // obf
use WpOrg\Requests\Requests; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * Session handler for persistent requests and default parameters // obf
 * // obf
 * Allows various options to be set as default values, and merges both the // obf
 * options and URL properties together. A base URL can be set for all requests, // obf
 * with all subrequests resolved from this. Base options can be set (including // obf
 * a shared cookie jar), then overridden for individual requests. // obf
 * // obf
 * @package Requests\SessionHandler // obf
 */ // obf
class Session { // obf
	/** // obf
	 * Base URL for requests // obf
	 * // obf
	 * URLs will be made absolute using this as the base // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	public $v_pmefa = null; // obf

	/** // obf
	 * Base headers for requests // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_wjqsb = []; // obf

	/** // obf
	 * Base data for requests // obf
	 * // obf
	 * If both the base data and the per-request data are arrays, the data will // obf
	 * be merged before sending the request. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_ssruh = []; // obf

	/** // obf
	 * Base options for requests // obf
	 * // obf
	 * The base options are merged with the per-request data for each request. // obf
	 * The only default option is a shared cookie jar between requests. // obf
	 * // obf
	 * Values here can also be set directly via properties on the Session // obf
	 * object, e.g. `$v_imqip->useragent = 'X';` // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_jiwoa = []; // obf

	/** // obf
	 * Create a new session // obf
	 * // obf
	 * @param string|Stringable|null $v_pmefa Base URL for requests // obf
	 * @param array $v_wjqsb Default headers for requests // obf
	 * @param array $v_ssruh Default data for requests // obf
	 * @param array $v_jiwoa Default options for requests // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_pmefa argument is not a string, Stringable or null. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_wjqsb argument is not an array. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_ssruh argument is not an array. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_jiwoa argument is not an array. // obf
	 */ // obf
	public function __construct($v_pmefa = null, $v_wjqsb = [], $v_ssruh = [], $v_jiwoa = []) { // obf
		if ($v_pmefa !== null && InputValidator::is_string_or_stringable($v_pmefa) === false) { // obf
			throw InvalidArgument::create(1, '$v_pmefa', 'string|Stringable|null', gettype($v_pmefa)); // obf
		} // obf

		if (is_array($v_wjqsb) === false) { // obf
			throw InvalidArgument::create(2, '$v_wjqsb', 'array', gettype($v_wjqsb)); // obf
		} // obf

		if (is_array($v_ssruh) === false) { // obf
			throw InvalidArgument::create(3, '$v_ssruh', 'array', gettype($v_ssruh)); // obf
		} // obf

		if (is_array($v_jiwoa) === false) { // obf
			throw InvalidArgument::create(4, '$v_jiwoa', 'array', gettype($v_jiwoa)); // obf
		} // obf

		$v_brjhw->url     = $v_pmefa; // obf
		$v_brjhw->headers = $v_wjqsb; // obf
		$v_brjhw->data    = $v_ssruh; // obf
		$v_brjhw->options = $v_jiwoa; // obf

		if (empty($v_brjhw->options['cookies'])) { // obf
			$v_brjhw->options['cookies'] = new Jar(); // obf
		} // obf
	} // obf

	/** // obf
	 * Get a property's value // obf
	 * // obf
	 * @param string $v_tqgxi Property name. // obf
	 * @return mixed|null Property value, null if none found // obf
	 */ // obf
	public function __get($v_tqgxi) { // obf
		if (isset($v_brjhw->options[$v_tqgxi])) { // obf
			return $v_brjhw->options[$v_tqgxi]; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Set a property's value // obf
	 * // obf
	 * @param string $v_tqgxi Property name. // obf
	 * @param mixed $v_bnrrt Property value // obf
	 */ // obf
	public function __set($v_tqgxi, $v_bnrrt) { // obf
		$v_brjhw->options[$v_tqgxi] = $v_bnrrt; // obf
	} // obf

	/** // obf
	 * Remove a property's value // obf
	 * // obf
	 * @param string $v_tqgxi Property name. // obf
	 */ // obf
	public function __isset($v_tqgxi) { // obf
		return isset($v_brjhw->options[$v_tqgxi]); // obf
	} // obf

	/** // obf
	 * Remove a property's value // obf
	 * // obf
	 * @param string $v_tqgxi Property name. // obf
	 */ // obf
	public function __unset($v_tqgxi) { // obf
		unset($v_brjhw->options[$v_tqgxi]); // obf
	} // obf

	/**#@+ // obf
	 * @see \WpOrg\Requests\Session::request() // obf
	 * @param string $v_pmefa // obf
	 * @param array $v_wjqsb // obf
	 * @param array $v_jiwoa // obf
	 * @return \WpOrg\Requests\Response // obf
	 */ // obf
	/** // obf
	 * Send a GET request // obf
	 */ // obf
	public function get($v_pmefa, $v_wjqsb = [], $v_jiwoa = []) { // obf
		return $v_brjhw->request($v_pmefa, $v_wjqsb, null, Requests::GET, $v_jiwoa); // obf
	} // obf

	/** // obf
	 * Send a HEAD request // obf
	 */ // obf
	public function head($v_pmefa, $v_wjqsb = [], $v_jiwoa = []) { // obf
		return $v_brjhw->request($v_pmefa, $v_wjqsb, null, Requests::HEAD, $v_jiwoa); // obf
	} // obf

	/** // obf
	 * Send a DELETE request // obf
	 */ // obf
	public function delete($v_pmefa, $v_wjqsb = [], $v_jiwoa = []) { // obf
		return $v_brjhw->request($v_pmefa, $v_wjqsb, null, Requests::DELETE, $v_jiwoa); // obf
	} // obf
	/**#@-*/ // obf

	/**#@+ // obf
	 * @see \WpOrg\Requests\Session::request() // obf
	 * @param string $v_pmefa // obf
	 * @param array $v_wjqsb // obf
	 * @param array $v_ssruh // obf
	 * @param array $v_jiwoa // obf
	 * @return \WpOrg\Requests\Response // obf
	 */ // obf
	/** // obf
	 * Send a POST request // obf
	 */ // obf
	public function post($v_pmefa, $v_wjqsb = [], $v_ssruh = [], $v_jiwoa = []) { // obf
		return $v_brjhw->request($v_pmefa, $v_wjqsb, $v_ssruh, Requests::POST, $v_jiwoa); // obf
	} // obf

	/** // obf
	 * Send a PUT request // obf
	 */ // obf
	public function put($v_pmefa, $v_wjqsb = [], $v_ssruh = [], $v_jiwoa = []) { // obf
		return $v_brjhw->request($v_pmefa, $v_wjqsb, $v_ssruh, Requests::PUT, $v_jiwoa); // obf
	} // obf

	/** // obf
	 * Send a PATCH request // obf
	 * // obf
	 * Note: Unlike {@see \WpOrg\Requests\Session::post()} and {@see \WpOrg\Requests\Session::put()}, // obf
	 * `$v_wjqsb` is required, as the specification recommends that should send an ETag // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc5789 // obf
	 */ // obf
	public function patch($v_pmefa, $v_wjqsb, $v_ssruh = [], $v_jiwoa = []) { // obf
		return $v_brjhw->request($v_pmefa, $v_wjqsb, $v_ssruh, Requests::PATCH, $v_jiwoa); // obf
	} // obf
	/**#@-*/ // obf

	/** // obf
	 * Main interface for HTTP requests // obf
	 * // obf
	 * This method initiates a request and sends it via a transport before // obf
	 * parsing. // obf
	 * // obf
	 * @see \WpOrg\Requests\Requests::request() // obf
	 * // obf
	 * @param string $v_pmefa URL to request // obf
	 * @param array $v_wjqsb Extra headers to send with the request // obf
	 * @param array|null $v_ssruh Data to send either as a query string for GET/HEAD requests, or in the body for POST requests // obf
	 * @param string $v_yjzqi HTTP request type (use \WpOrg\Requests\Requests constants) // obf
	 * @param array $v_jiwoa Options for the request (see {@see \WpOrg\Requests\Requests::request()}) // obf
	 * @return \WpOrg\Requests\Response // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception On invalid URLs (`nonhttp`) // obf
	 */ // obf
	public function request($v_pmefa, $v_wjqsb = [], $v_ssruh = [], $v_yjzqi = Requests::GET, $v_jiwoa = []) { // obf
		$v_pbdyh = $v_brjhw->merge_request(compact('url', 'headers', 'data', 'options')); // obf

		return Requests::request($v_pbdyh['url'], $v_pbdyh['headers'], $v_pbdyh['data'], $v_yjzqi, $v_pbdyh['options']); // obf
	} // obf

	/** // obf
	 * Send multiple HTTP requests simultaneously // obf
	 * // obf
	 * @see \WpOrg\Requests\Requests::request_multiple() // obf
	 * // obf
	 * @param array $v_avwmr Requests data (see {@see \WpOrg\Requests\Requests::request_multiple()}) // obf
	 * @param array $v_jiwoa Global and default options (see {@see \WpOrg\Requests\Requests::request()}) // obf
	 * @return array Responses (either \WpOrg\Requests\Response or a \WpOrg\Requests\Exception object) // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_avwmr argument is not an array or iterable object with array access. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_jiwoa argument is not an array. // obf
	 */ // obf
	public function request_multiple($v_avwmr, $v_jiwoa = []) { // obf
		if (InputValidator::has_array_access($v_avwmr) === false || InputValidator::is_iterable($v_avwmr) === false) { // obf
			throw InvalidArgument::create(1, '$v_avwmr', 'array|ArrayAccess&Traversable', gettype($v_avwmr)); // obf
		} // obf

		if (is_array($v_jiwoa) === false) { // obf
			throw InvalidArgument::create(2, '$v_jiwoa', 'array', gettype($v_jiwoa)); // obf
		} // obf

		foreach ($v_avwmr as $v_iavex => $v_pbdyh) { // obf
			$v_avwmr[$v_iavex] = $v_brjhw->merge_request($v_pbdyh, false); // obf
		} // obf

		$v_jiwoa = array_merge($v_brjhw->options, $v_jiwoa); // obf

		// Disallow forcing the type, as that's a per request setting // obf
		unset($v_jiwoa['type']); // obf

		return Requests::request_multiple($v_avwmr, $v_jiwoa); // obf
	} // obf

	public function __wakeup() { // obf
		throw new \LogicException( __CLASS__ . ' should never be unserialized' ); // obf
	} // obf

	/** // obf
	 * Merge a request's data with the default data // obf
	 * // obf
	 * @param array $v_pbdyh Request data (same form as {@see \WpOrg\Requests\Session::request_multiple()}) // obf
	 * @param boolean $v_crwba Should we merge options as well? // obf
	 * @return array Request data // obf
	 */ // obf
	protected function merge_request($v_pbdyh, $v_crwba = true) { // obf
		if ($v_brjhw->url !== null) { // obf
			$v_pbdyh['url'] = Iri::absolutize($v_brjhw->url, $v_pbdyh['url']); // obf
			$v_pbdyh['url'] = $v_pbdyh['url']->uri; // obf
		} // obf

		if (empty($v_pbdyh['headers'])) { // obf
			$v_pbdyh['headers'] = []; // obf
		} // obf

		$v_pbdyh['headers'] = array_merge($v_brjhw->headers, $v_pbdyh['headers']); // obf

		if (empty($v_pbdyh['data'])) { // obf
			if (is_array($v_brjhw->data)) { // obf
				$v_pbdyh['data'] = $v_brjhw->data; // obf
			} // obf
		} elseif (is_array($v_pbdyh['data']) && is_array($v_brjhw->data)) { // obf
			$v_pbdyh['data'] = array_merge($v_brjhw->data, $v_pbdyh['data']); // obf
		} // obf

		if ($v_crwba === true) { // obf
			$v_pbdyh['options'] = array_merge($v_brjhw->options, $v_pbdyh['options']); // obf

			// Disallow forcing the type, as that's a per request setting // obf
			unset($v_pbdyh['options']['type']); // obf
		} // obf

		return $v_pbdyh; // obf
	} // obf
} // obf