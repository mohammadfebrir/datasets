

<?php // obf
/** // obf
 * Cookie storage object // obf
 * // obf
 * @package Requests\Cookies // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Iri; // obf
use WpOrg\Requests\Response\Headers; // obf
use WpOrg\Requests\Utility\CaseInsensitiveDictionary; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * Cookie storage object // obf
 * // obf
 * @package Requests\Cookies // obf
 */ // obf
class Cookie { // obf
	/** // obf
	 * Cookie name. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_kaurq; // obf

	/** // obf
	 * Cookie value. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_pcduu; // obf

	/** // obf
	 * Cookie attributes // obf
	 * // obf
	 * Valid keys are `'path'`, `'domain'`, `'expires'`, `'max-age'`, `'secure'` and // obf
	 * `'httponly'`. // obf
	 * // obf
	 * @var \WpOrg\Requests\Utility\CaseInsensitiveDictionary|array Array-like object // obf
	 */ // obf
	public $v_otqle = []; // obf

	/** // obf
	 * Cookie flags // obf
	 * // obf
	 * Valid keys are `'creation'`, `'last-access'`, `'persistent'` and `'host-only'`. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_gabbs = []; // obf

	/** // obf
	 * Reference time for relative calculations // obf
	 * // obf
	 * This is used in place of `time()` when calculating Max-Age expiration and // obf
	 * checking time validity. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_hrqqa = 0; // obf

	/** // obf
	 * Create a new cookie object // obf
	 * // obf
	 * @param string                                                  $v_kaurq           The name of the cookie. // obf
	 * @param string                                                  $v_pcduu          The value for the cookie. // obf
	 * @param array|\WpOrg\Requests\Utility\CaseInsensitiveDictionary $v_otqle Associative array of attribute data // obf
	 * @param array                                                   $v_gabbs          The flags for the cookie. // obf
	 *                                                                                Valid keys are `'creation'`, `'last-access'`, // obf
	 *                                                                                `'persistent'` and `'host-only'`. // obf
	 * @param int|null                                                $v_hrqqa Reference time for relative calculations. // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_kaurq argument is not a string. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_pcduu argument is not a string. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_otqle argument is not an array or iterable object with array access. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_gabbs argument is not an array. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_hrqqa argument is not an integer or null. // obf
	 */ // obf
	public function __construct($v_kaurq, $v_pcduu, $v_otqle = [], $v_gabbs = [], $v_hrqqa = null) { // obf
		if (is_string($v_kaurq) === false) { // obf
			throw InvalidArgument::create(1, '$v_kaurq', 'string', gettype($v_kaurq)); // obf
		} // obf

		if (is_string($v_pcduu) === false) { // obf
			throw InvalidArgument::create(2, '$v_pcduu', 'string', gettype($v_pcduu)); // obf
		} // obf

		if (InputValidator::has_array_access($v_otqle) === false || InputValidator::is_iterable($v_otqle) === false) { // obf
			throw InvalidArgument::create(3, '$v_otqle', 'array|ArrayAccess&Traversable', gettype($v_otqle)); // obf
		} // obf

		if (is_array($v_gabbs) === false) { // obf
			throw InvalidArgument::create(4, '$v_gabbs', 'array', gettype($v_gabbs)); // obf
		} // obf

		if ($v_hrqqa !== null && is_int($v_hrqqa) === false) { // obf
			throw InvalidArgument::create(5, '$v_hrqqa', 'integer|null', gettype($v_hrqqa)); // obf
		} // obf

		$v_cttzy->name       = $v_kaurq; // obf
		$v_cttzy->value      = $v_pcduu; // obf
		$v_cttzy->attributes = $v_otqle; // obf
		$v_dwxxe    = [ // obf
			'creation'    => time(), // obf
			'last-access' => time(), // obf
			'persistent'  => false, // obf
			'host-only'   => true, // obf
		]; // obf
		$v_cttzy->flags      = array_merge($v_dwxxe, $v_gabbs); // obf

		$v_cttzy->reference_time = time(); // obf
		if ($v_hrqqa !== null) { // obf
			$v_cttzy->reference_time = $v_hrqqa; // obf
		} // obf

		$v_cttzy->normalize(); // obf
	} // obf

	/** // obf
	 * Get the cookie value // obf
	 * // obf
	 * Attributes and other data can be accessed via methods. // obf
	 */ // obf
	public function __toString() { // obf
		return $v_cttzy->value; // obf
	} // obf

	/** // obf
	 * Check if a cookie is expired. // obf
	 * // obf
	 * Checks the age against $v_cttzy->reference_time to determine if the cookie // obf
	 * is expired. // obf
	 * // obf
	 * @return boolean True if expired, false if time is valid. // obf
	 */ // obf
	public function is_expired() { // obf
		// RFC6265, s. 4.1.2.2: // obf
		// If a cookie has both the Max-Age and the Expires attribute, the Max- // obf
		// Age attribute has precedence and controls the expiration date of the // obf
		// cookie. // obf
		if (isset($v_cttzy->attributes['max-age'])) { // obf
			$v_ebzvo = $v_cttzy->attributes['max-age']; // obf
			return $v_ebzvo < $v_cttzy->reference_time; // obf
		} // obf

		if (isset($v_cttzy->attributes['expires'])) { // obf
			$v_decvm = $v_cttzy->attributes['expires']; // obf
			return $v_decvm < $v_cttzy->reference_time; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Check if a cookie is valid for a given URI // obf
	 * // obf
	 * @param \WpOrg\Requests\Iri $v_wlkcd URI to check // obf
	 * @return boolean Whether the cookie is valid for the given URI // obf
	 */ // obf
	public function uri_matches(Iri $v_wlkcd) { // obf
		if (!$v_cttzy->domain_matches($v_wlkcd->host)) { // obf
			return false; // obf
		} // obf

		if (!$v_cttzy->path_matches($v_wlkcd->path)) { // obf
			return false; // obf
		} // obf

		return empty($v_cttzy->attributes['secure']) || $v_wlkcd->scheme === 'https'; // obf
	} // obf

	/** // obf
	 * Check if a cookie is valid for a given domain // obf
	 * // obf
	 * @param string $v_ctitg Domain to check // obf
	 * @return boolean Whether the cookie is valid for the given domain // obf
	 */ // obf
	public function domain_matches($v_ctitg) { // obf
		if (is_string($v_ctitg) === false) { // obf
			return false; // obf
		} // obf

		if (!isset($v_cttzy->attributes['domain'])) { // obf
			// Cookies created manually; cookies created by Requests will set // obf
			// the domain to the requested domain // obf
			return true; // obf
		} // obf

		$v_eitmo = $v_cttzy->attributes['domain']; // obf
		if ($v_eitmo === $v_ctitg) { // obf
			// The cookie domain and the passed domain are identical. // obf
			return true; // obf
		} // obf

		// If the cookie is marked as host-only and we don't have an exact // obf
		// match, reject the cookie // obf
		if ($v_cttzy->flags['host-only'] === true) { // obf
			return false; // obf
		} // obf

		if (strlen($v_ctitg) <= strlen($v_eitmo)) { // obf
			// For obvious reasons, the cookie domain cannot be a suffix if the passed domain // obf
			// is shorter than the cookie domain // obf
			return false; // obf
		} // obf

		if (substr($v_ctitg, -1 * strlen($v_eitmo)) !== $v_eitmo) { // obf
			// The cookie domain should be a suffix of the passed domain. // obf
			return false; // obf
		} // obf

		$v_ijrqv = substr($v_ctitg, 0, strlen($v_ctitg) - strlen($v_eitmo)); // obf
		if (substr($v_ijrqv, -1) !== '.') { // obf
			// The last character of the passed domain that is not included in the // obf
			// domain string should be a %x2E (".") character. // obf
			return false; // obf
		} // obf

		// The passed domain should be a host name (i.e., not an IP address). // obf
		return !preg_match('#^(.+\.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$#', $v_ctitg); // obf
	} // obf

	/** // obf
	 * Check if a cookie is valid for a given path // obf
	 * // obf
	 * From the path-match check in RFC 6265 section 5.1.4 // obf
	 * // obf
	 * @param string $v_szdfd Path to check // obf
	 * @return boolean Whether the cookie is valid for the given path // obf
	 */ // obf
	public function path_matches($v_szdfd) { // obf
		if (empty($v_szdfd)) { // obf
			// Normalize empty path to root // obf
			$v_szdfd = '/'; // obf
		} // obf

		if (!isset($v_cttzy->attributes['path'])) { // obf
			// Cookies created manually; cookies created by Requests will set // obf
			// the path to the requested path // obf
			return true; // obf
		} // obf

		if (is_scalar($v_szdfd) === false) { // obf
			return false; // obf
		} // obf

		$v_xuvsc = $v_cttzy->attributes['path']; // obf

		if ($v_xuvsc === $v_szdfd) { // obf
			// The cookie-path and the request-path are identical. // obf
			return true; // obf
		} // obf

		if (strlen($v_szdfd) > strlen($v_xuvsc) && substr($v_szdfd, 0, strlen($v_xuvsc)) === $v_xuvsc) { // obf
			if (substr($v_xuvsc, -1) === '/') { // obf
				// The cookie-path is a prefix of the request-path, and the last // obf
				// character of the cookie-path is %x2F ("/"). // obf
				return true; // obf
			} // obf

			if (substr($v_szdfd, strlen($v_xuvsc), 1) === '/') { // obf
				// The cookie-path is a prefix of the request-path, and the // obf
				// first character of the request-path that is not included in // obf
				// the cookie-path is a %x2F ("/") character. // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Normalize cookie and attributes // obf
	 * // obf
	 * @return boolean Whether the cookie was successfully normalized // obf
	 */ // obf
	public function normalize() { // obf
		foreach ($v_cttzy->attributes as $v_vcxnr => $v_pcduu) { // obf
			$v_eitch = $v_pcduu; // obf

			if (is_string($v_vcxnr)) { // obf
				$v_pcduu = $v_cttzy->normalize_attribute($v_vcxnr, $v_pcduu); // obf
			} // obf

			if ($v_pcduu === null) { // obf
				unset($v_cttzy->attributes[$v_vcxnr]); // obf
				continue; // obf
			} // obf

			if ($v_pcduu !== $v_eitch) { // obf
				$v_cttzy->attributes[$v_vcxnr] = $v_pcduu; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Parse an individual cookie attribute // obf
	 * // obf
	 * Handles parsing individual attributes from the cookie values. // obf
	 * // obf
	 * @param string $v_kaurq Attribute name // obf
	 * @param string|int|bool $v_pcduu Attribute value (string/integer value, or true if empty/flag) // obf
	 * @return mixed Value if available, or null if the attribute value is invalid (and should be skipped) // obf
	 */ // obf
	protected function normalize_attribute($v_kaurq, $v_pcduu) { // obf
		switch (strtolower($v_kaurq)) { // obf
			case 'expires': // obf
				// Expiration parsing, as per RFC 6265 section 5.2.1 // obf
				if (is_int($v_pcduu)) { // obf
					return $v_pcduu; // obf
				} // obf

				$v_pgwdq = strtotime($v_pcduu); // obf
				if ($v_pgwdq === false) { // obf
					return null; // obf
				} // obf

				return $v_pgwdq; // obf

			case 'max-age': // obf
				// Expiration parsing, as per RFC 6265 section 5.2.2 // obf
				if (is_int($v_pcduu)) { // obf
					return $v_pcduu; // obf
				} // obf

				// Check that we have a valid age // obf
				if (!preg_match('/^-?\d+$/', $v_pcduu)) { // obf
					return null; // obf
				} // obf

				$v_yhdxn = (int) $v_pcduu; // obf
				if ($v_yhdxn <= 0) { // obf
					$v_pgwdq = 0; // obf
				} else { // obf
					$v_pgwdq = $v_cttzy->reference_time + $v_yhdxn; // obf
				} // obf

				return $v_pgwdq; // obf

			case 'domain': // obf
				// Domains are not required as per RFC 6265 section 5.2.3 // obf
				if (empty($v_pcduu)) { // obf
					return null; // obf
				} // obf

				// Domain normalization, as per RFC 6265 section 5.2.3 // obf
				if ($v_pcduu[0] === '.') { // obf
					$v_pcduu = substr($v_pcduu, 1); // obf
				} // obf

				return $v_pcduu; // obf

			default: // obf
				return $v_pcduu; // obf
		} // obf
	} // obf

	/** // obf
	 * Format a cookie for a Cookie header // obf
	 * // obf
	 * This is used when sending cookies to a server. // obf
	 * // obf
	 * @return string Cookie formatted for Cookie header // obf
	 */ // obf
	public function format_for_header() { // obf
		return sprintf('%s=%s', $v_cttzy->name, $v_cttzy->value); // obf
	} // obf

	/** // obf
	 * Format a cookie for a Set-Cookie header // obf
	 * // obf
	 * This is used when sending cookies to clients. This isn't really // obf
	 * applicable to client-side usage, but might be handy for debugging. // obf
	 * // obf
	 * @return string Cookie formatted for Set-Cookie header // obf
	 */ // obf
	public function format_for_set_cookie() { // obf
		$v_buhqg = $v_cttzy->format_for_header(); // obf
		if (!empty($v_cttzy->attributes)) { // obf
			$v_fwens = []; // obf
			foreach ($v_cttzy->attributes as $v_vcxnr => $v_pcduu) { // obf
				// Ignore non-associative attributes // obf
				if (is_numeric($v_vcxnr)) { // obf
					$v_fwens[] = $v_pcduu; // obf
				} else { // obf
					$v_fwens[] = sprintf('%s=%s', $v_vcxnr, $v_pcduu); // obf
				} // obf
			} // obf

			$v_buhqg .= '; ' . implode('; ', $v_fwens); // obf
		} // obf

		return $v_buhqg; // obf
	} // obf

	/** // obf
	 * Parse a cookie string into a cookie object // obf
	 * // obf
	 * Based on Mozilla's parsing code in Firefox and related projects, which // obf
	 * is an intentional deviation from RFC 2109 and RFC 2616. RFC 6265 // obf
	 * specifies some of this handling, but not in a thorough manner. // obf
	 * // obf
	 * @param string $v_zvsqn Cookie header value (from a Set-Cookie header) // obf
	 * @param string $v_kaurq // obf
	 * @param int|null $v_hrqqa // obf
	 * @return \WpOrg\Requests\Cookie Parsed cookie object // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_zvsqn argument is not a string. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_kaurq argument is not a string. // obf
	 */ // obf
	public static function parse($v_zvsqn, $v_kaurq = '', $v_hrqqa = null) { // obf
		if (is_string($v_zvsqn) === false) { // obf
			throw InvalidArgument::create(1, '$v_zvsqn', 'string', gettype($v_zvsqn)); // obf
		} // obf

		if (is_string($v_kaurq) === false) { // obf
			throw InvalidArgument::create(2, '$v_kaurq', 'string', gettype($v_kaurq)); // obf
		} // obf

		$v_fwens   = explode(';', $v_zvsqn); // obf
		$v_gcnoy = array_shift($v_fwens); // obf

		if (!empty($v_kaurq)) { // obf
			$v_pcduu = $v_zvsqn; // obf
		} elseif (strpos($v_gcnoy, '=') === false) { // obf
			// Some sites might only have a value without the equals separator. // obf
			// Deviate from RFC 6265 and pretend it was actually a blank name // obf
			// (`=foo`) // obf
			// // obf
			// https://bugzilla.mozilla.org/show_bug.cgi?id=169091 // obf
			$v_kaurq  = ''; // obf
			$v_pcduu = $v_gcnoy; // obf
		} else { // obf
			list($v_kaurq, $v_pcduu) = explode('=', $v_gcnoy, 2); // obf
		} // obf

		$v_kaurq  = trim($v_kaurq); // obf
		$v_pcduu = trim($v_pcduu); // obf

		// Attribute keys are handled case-insensitively // obf
		$v_otqle = new CaseInsensitiveDictionary(); // obf

		if (!empty($v_fwens)) { // obf
			foreach ($v_fwens as $v_ukaup) { // obf
				if (strpos($v_ukaup, '=') === false) { // obf
					$v_ivtbm   = $v_ukaup; // obf
					$v_vxhpf = true; // obf
				} else { // obf
					list($v_ivtbm, $v_vxhpf) = explode('=', $v_ukaup, 2); // obf
					$v_vxhpf                  = trim($v_vxhpf); // obf
				} // obf

				$v_ivtbm              = trim($v_ivtbm); // obf
				$v_otqle[$v_ivtbm] = $v_vxhpf; // obf
			} // obf
		} // obf

		return new static($v_kaurq, $v_pcduu, $v_otqle, [], $v_hrqqa); // obf
	} // obf

	/** // obf
	 * Parse all Set-Cookie headers from request headers // obf
	 * // obf
	 * @param \WpOrg\Requests\Response\Headers $v_pijyp Headers to parse from // obf
	 * @param \WpOrg\Requests\Iri|null $v_jylok URI for comparing cookie origins // obf
	 * @param int|null $v_cjmmb Reference time for expiration calculation // obf
	 * @return array // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_jylok argument is not null or an instance of the Iri class. // obf
	 */ // obf
	public static function parse_from_headers(Headers $v_pijyp, $v_jylok = null, $v_cjmmb = null) { // obf
		$v_lvmhe = $v_pijyp->getValues('Set-Cookie'); // obf
		if (empty($v_lvmhe)) { // obf
			return []; // obf
		} // obf

		if ($v_jylok !== null && !($v_jylok instanceof Iri)) { // obf
			throw InvalidArgument::create(2, '$v_jylok', Iri::class . ' or null', gettype($v_jylok)); // obf
		} // obf

		$v_aylun = []; // obf
		foreach ($v_lvmhe as $v_zfjrr) { // obf
			$v_jpjdm = self::parse($v_zfjrr, '', $v_cjmmb); // obf

			// Default domain/path attributes // obf
			if (empty($v_jpjdm->attributes['domain']) && !empty($v_jylok)) { // obf
				$v_jpjdm->attributes['domain'] = $v_jylok->host; // obf
				$v_jpjdm->flags['host-only']   = true; // obf
			} else { // obf
				$v_jpjdm->flags['host-only'] = false; // obf
			} // obf

			$v_gqldm = (!empty($v_jpjdm->attributes['path']) && $v_jpjdm->attributes['path'][0] === '/'); // obf
			if (!$v_gqldm && !empty($v_jylok)) { // obf
				$v_yddlr = $v_jylok->path; // obf

				// Default path normalization as per RFC 6265 section 5.1.4 // obf
				if (substr($v_yddlr, 0, 1) !== '/') { // obf
					// If the uri-path is empty or if the first character of // obf
					// the uri-path is not a %x2F ("/") character, output // obf
					// %x2F ("/") and skip the remaining steps. // obf
					$v_yddlr = '/'; // obf
				} elseif (substr_count($v_yddlr, '/') === 1) { // obf
					// If the uri-path contains no more than one %x2F ("/") // obf
					// character, output %x2F ("/") and skip the remaining // obf
					// step. // obf
					$v_yddlr = '/'; // obf
				} else { // obf
					// Output the characters of the uri-path from the first // obf
					// character up to, but not including, the right-most // obf
					// %x2F ("/"). // obf
					$v_yddlr = substr($v_yddlr, 0, strrpos($v_yddlr, '/')); // obf
				} // obf

				$v_jpjdm->attributes['path'] = $v_yddlr; // obf
			} // obf

			// Reject invalid cookie domains // obf
			if (!empty($v_jylok) && !$v_jpjdm->domain_matches($v_jylok->host)) { // obf
				continue; // obf
			} // obf

			$v_aylun[$v_jpjdm->name] = $v_jpjdm; // obf
		} // obf

		return $v_aylun; // obf
	} // obf
} // obf