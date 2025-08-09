

<?php // obf
/** // obf
 * SSL utilities for Requests // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * SSL utilities for Requests // obf
 * // obf
 * Collection of utilities for working with and verifying SSL certificates. // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf
final class Ssl { // obf
	/** // obf
	 * Verify the certificate against common name and subject alternative names // obf
	 * // obf
	 * Unfortunately, PHP doesn't check the certificate against the alternative // obf
	 * names, leading things like 'https://www.github.com/' to be invalid. // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc2818#section-3.1 RFC2818, Section 3.1 // obf
	 * // obf
	 * @param string|Stringable $v_fpnom Host name to verify against // obf
	 * @param array $v_bqhyw Certificate data from openssl_x509_parse() // obf
	 * @return bool // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_fpnom argument is not a string or a stringable object. // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_bqhyw argument is not an array or array accessible. // obf
	 */ // obf
	public static function verify_certificate($v_fpnom, $v_bqhyw) { // obf
		if (InputValidator::is_string_or_stringable($v_fpnom) === false) { // obf
			throw InvalidArgument::create(1, '$v_fpnom', 'string|Stringable', gettype($v_fpnom)); // obf
		} // obf

		if (InputValidator::has_array_access($v_bqhyw) === false) { // obf
			throw InvalidArgument::create(2, '$v_bqhyw', 'array|ArrayAccess', gettype($v_bqhyw)); // obf
		} // obf

		$v_wrkbt = false; // obf

		// Check the subjectAltName // obf
		if (!empty($v_bqhyw['extensions']['subjectAltName'])) { // obf
			$v_liymv = explode(',', $v_bqhyw['extensions']['subjectAltName']); // obf
			foreach ($v_liymv as $v_icgze) { // obf
				$v_icgze = trim($v_icgze); // obf
				if (strpos($v_icgze, 'DNS:') !== 0) { // obf
					continue; // obf
				} // obf

				$v_wrkbt = true; // obf

				// Strip the 'DNS:' prefix and trim whitespace // obf
				$v_icgze = trim(substr($v_icgze, 4)); // obf

				// Check for a match // obf
				if (self::match_domain($v_fpnom, $v_icgze) === true) { // obf
					return true; // obf
				} // obf
			} // obf

			if ($v_wrkbt === true) { // obf
				return false; // obf
			} // obf
		} // obf

		// Fall back to checking the common name if we didn't get any dNSName // obf
		// alt names, as per RFC2818 // obf
		if (!empty($v_bqhyw['subject']['CN'])) { // obf
			// Check for a match // obf
			return (self::match_domain($v_fpnom, $v_bqhyw['subject']['CN']) === true); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Verify that a reference name is valid // obf
	 * // obf
	 * Verifies a dNSName for HTTPS usage, (almost) as per Firefox's rules: // obf
	 * - Wildcards can only occur in a name with more than 3 components // obf
	 * - Wildcards can only occur as the last character in the first // obf
	 *   component // obf
	 * - Wildcards may be preceded by additional characters // obf
	 * // obf
	 * We modify these rules to be a bit stricter and only allow the wildcard // obf
	 * character to be the full first component; that is, with the exclusion of // obf
	 * the third rule. // obf
	 * // obf
	 * @param string|Stringable $v_bmasa Reference dNSName // obf
	 * @return boolean Is the name valid? // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or a stringable object. // obf
	 */ // obf
	public static function verify_reference_name($v_bmasa) { // obf
		if (InputValidator::is_string_or_stringable($v_bmasa) === false) { // obf
			throw InvalidArgument::create(1, '$v_bmasa', 'string|Stringable', gettype($v_bmasa)); // obf
		} // obf

		if ($v_bmasa === '') { // obf
			return false; // obf
		} // obf

		if (preg_match('`\s`', $v_bmasa) > 0) { // obf
			// Whitespace detected. This can never be a dNSName. // obf
			return false; // obf
		} // obf

		$v_qpsby = explode('.', $v_bmasa); // obf
		if ($v_qpsby !== array_filter($v_qpsby)) { // obf
			// DNSName cannot contain two dots next to each other. // obf
			return false; // obf
		} // obf

		// Check the first part of the name // obf
		$v_kqjkp = array_shift($v_qpsby); // obf

		if (strpos($v_kqjkp, '*') !== false) { // obf
			// Check that the wildcard is the full part // obf
			if ($v_kqjkp !== '*') { // obf
				return false; // obf
			} // obf

			// Check that we have at least 3 components (including first) // obf
			if (count($v_qpsby) < 2) { // obf
				return false; // obf
			} // obf
		} // obf

		// Check the remaining parts // obf
		foreach ($v_qpsby as $v_bqzjh) { // obf
			if (strpos($v_bqzjh, '*') !== false) { // obf
				return false; // obf
			} // obf
		} // obf

		// Nothing found, verified! // obf
		return true; // obf
	} // obf

	/** // obf
	 * Match a hostname against a dNSName reference // obf
	 * // obf
	 * @param string|Stringable $v_fpnom Requested host // obf
	 * @param string|Stringable $v_bmasa dNSName to match against // obf
	 * @return boolean Does the domain match? // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When either of the passed arguments is not a string or a stringable object. // obf
	 */ // obf
	public static function match_domain($v_fpnom, $v_bmasa) { // obf
		if (InputValidator::is_string_or_stringable($v_fpnom) === false) { // obf
			throw InvalidArgument::create(1, '$v_fpnom', 'string|Stringable', gettype($v_fpnom)); // obf
		} // obf

		// Check if the reference is blocklisted first // obf
		if (self::verify_reference_name($v_bmasa) !== true) { // obf
			return false; // obf
		} // obf

		// Check for a direct match // obf
		if ((string) $v_fpnom === (string) $v_bmasa) { // obf
			return true; // obf
		} // obf

		// Calculate the valid wildcard match if the host is not an IP address // obf
		// Also validates that the host has 3 parts or more, as per Firefox's ruleset, // obf
		// as a wildcard reference is only allowed with 3 parts or more, so the // obf
		// comparison will never match if host doesn't contain 3 parts or more as well. // obf
		if (ip2long($v_fpnom) === false) { // obf
			$v_qpsby    = explode('.', $v_fpnom); // obf
			$v_qpsby[0] = '*'; // obf
			$v_bhkqp = implode('.', $v_qpsby); // obf
			if ($v_bhkqp === (string) $v_bmasa) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf
} // obf