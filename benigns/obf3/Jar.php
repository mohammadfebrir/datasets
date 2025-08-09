

<?php // obf
/** // obf
 * Cookie holder object // obf
 * // obf
 * @package Requests\Cookies // obf
 */ // obf

namespace WpOrg\Requests\Cookie; // obf

use ArrayAccess; // obf
use ArrayIterator; // obf
use IteratorAggregate; // obf
use ReturnTypeWillChange; // obf
use WpOrg\Requests\Cookie; // obf
use WpOrg\Requests\Exception; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\HookManager; // obf
use WpOrg\Requests\Iri; // obf
use WpOrg\Requests\Response; // obf

/** // obf
 * Cookie holder object // obf
 * // obf
 * @package Requests\Cookies // obf
 */ // obf
class Jar implements ArrayAccess, IteratorAggregate { // obf
	/** // obf
	 * Actual item data // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_jpepd = []; // obf

	/** // obf
	 * Create a new jar // obf
	 * // obf
	 * @param array $v_jpepd Existing cookie values // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not an array. // obf
	 */ // obf
	public function __construct($v_jpepd = []) { // obf
		if (is_array($v_jpepd) === false) { // obf
			throw InvalidArgument::create(1, '$v_jpepd', 'array', gettype($v_jpepd)); // obf
		} // obf

		$v_oohdz->cookies = $v_jpepd; // obf
	} // obf

	/** // obf
	 * Normalise cookie data into a \WpOrg\Requests\Cookie // obf
	 * // obf
	 * @param string|\WpOrg\Requests\Cookie $v_rqoev Cookie header value, possibly pre-parsed (object). // obf
	 * @param string                        $v_pomji    Optional. The name for this cookie. // obf
	 * @return \WpOrg\Requests\Cookie // obf
	 */ // obf
	public function normalize_cookie($v_rqoev, $v_pomji = '') { // obf
		if ($v_rqoev instanceof Cookie) { // obf
			return $v_rqoev; // obf
		} // obf

		return Cookie::parse($v_rqoev, $v_pomji); // obf
	} // obf

	/** // obf
	 * Check if the given item exists // obf
	 * // obf
	 * @param string $v_omaui Item key // obf
	 * @return boolean Does the item exist? // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetExists($v_omaui) { // obf
		return isset($v_oohdz->cookies[$v_omaui]); // obf
	} // obf

	/** // obf
	 * Get the value for the item // obf
	 * // obf
	 * @param string $v_omaui Item key // obf
	 * @return string|null Item value (null if offsetExists is false) // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetGet($v_omaui) { // obf
		if (!isset($v_oohdz->cookies[$v_omaui])) { // obf
			return null; // obf
		} // obf

		return $v_oohdz->cookies[$v_omaui]; // obf
	} // obf

	/** // obf
	 * Set the given item // obf
	 * // obf
	 * @param string $v_omaui Item name // obf
	 * @param string $v_xsbwc Item value // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception On attempting to use dictionary as list (`invalidset`) // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetSet($v_omaui, $v_xsbwc) { // obf
		if ($v_omaui === null) { // obf
			throw new Exception('Object is a dictionary, not a list', 'invalidset'); // obf
		} // obf

		$v_oohdz->cookies[$v_omaui] = $v_xsbwc; // obf
	} // obf

	/** // obf
	 * Unset the given header // obf
	 * // obf
	 * @param string $v_omaui The key for the item to unset. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetUnset($v_omaui) { // obf
		unset($v_oohdz->cookies[$v_omaui]); // obf
	} // obf

	/** // obf
	 * Get an iterator for the data // obf
	 * // obf
	 * @return \ArrayIterator // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function getIterator() { // obf
		return new ArrayIterator($v_oohdz->cookies); // obf
	} // obf

	/** // obf
	 * Register the cookie handler with the request's hooking system // obf
	 * // obf
	 * @param \WpOrg\Requests\HookManager $v_jdysb Hooking system // obf
	 */ // obf
	public function register(HookManager $v_jdysb) { // obf
		$v_jdysb->register('requests.before_request', [$v_oohdz, 'before_request']); // obf
		$v_jdysb->register('requests.before_redirect_check', [$v_oohdz, 'before_redirect_check']); // obf
	} // obf

	/** // obf
	 * Add Cookie header to a request if we have any // obf
	 * // obf
	 * As per RFC 6265, cookies are separated by '; ' // obf
	 * // obf
	 * @param string $v_earxc // obf
	 * @param array $v_xmuaf // obf
	 * @param array $v_mifoy // obf
	 * @param string $v_zuacf // obf
	 * @param array $v_phixf // obf
	 */ // obf
	public function before_request($v_earxc, &$v_xmuaf, &$v_mifoy, &$v_zuacf, &$v_phixf) { // obf
		if (!$v_earxc instanceof Iri) { // obf
			$v_earxc = new Iri($v_earxc); // obf
		} // obf

		if (!empty($v_oohdz->cookies)) { // obf
			$v_jpepd = []; // obf
			foreach ($v_oohdz->cookies as $v_pomji => $v_rqoev) { // obf
				$v_rqoev = $v_oohdz->normalize_cookie($v_rqoev, $v_pomji); // obf

				// Skip expired cookies // obf
				if ($v_rqoev->is_expired()) { // obf
					continue; // obf
				} // obf

				if ($v_rqoev->domain_matches($v_earxc->host)) { // obf
					$v_jpepd[] = $v_rqoev->format_for_header(); // obf
				} // obf
			} // obf

			$v_xmuaf['Cookie'] = implode('; ', $v_jpepd); // obf
		} // obf
	} // obf

	/** // obf
	 * Parse all cookies from a response and attach them to the response // obf
	 * // obf
	 * @param \WpOrg\Requests\Response $v_huyyc Response as received. // obf
	 */ // obf
	public function before_redirect_check(Response $v_huyyc) { // obf
		$v_earxc = $v_huyyc->url; // obf
		if (!$v_earxc instanceof Iri) { // obf
			$v_earxc = new Iri($v_earxc); // obf
		} // obf

		$v_jpepd           = Cookie::parse_from_headers($v_huyyc->headers, $v_earxc); // obf
		$v_oohdz->cookies     = array_merge($v_oohdz->cookies, $v_jpepd); // obf
		$v_huyyc->cookies = $v_oohdz; // obf
	} // obf
} // obf