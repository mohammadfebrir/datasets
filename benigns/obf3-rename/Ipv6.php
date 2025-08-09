
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Class to validate and to work with IPv6 addresses // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * Class to validate and to work with IPv6 addresses // obf
 * // obf
 * This was originally based on the PEAR class of the same name, but has been // obf
 * entirely rewritten. // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf
final class Ipv6 { // obf
	/** // obf
	 * Uncompresses an IPv6 address // obf
	 * // obf
	 * RFC 4291 allows you to compress consecutive zero pieces in an address to // obf
	 * '::'. This method expects a valid IPv6 address and expands the '::' to // obf
	 * the required number of zero pieces. // obf
	 * // obf
	 * Example:  FF01::101   ->  FF01:0:0:0:0:0:0:101 // obf
	 *           ::1         ->  0:0:0:0:0:0:0:1 // obf
	 * // obf
	 * @author Alexander Merz <alexander.merz@web.de> // obf
	 * @author elfrink at introweb dot nl // obf
	 * @author Josh Peck <jmp at joshpeck dot org> // obf
	 * @copyright 2003-2005 The PHP Group // obf
	 * @license https://opensource.org/licenses/bsd-license.php // obf
	 * // obf
	 * @param string|Stringable $v_qphfz An IPv6 address // obf
	 * @return string The uncompressed IPv6 address // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or a stringable object. // obf
	 */ // obf
	public static function uncompress($v_qphfz) { // obf
		if (InputValidator::is_string_or_stringable($v_qphfz) === false) { // obf
			throw InvalidArgument::create(1, '$v_qphfz', 'string|Stringable', gettype($v_qphfz)); // obf
		} // obf

		$v_qphfz = (string) $v_qphfz; // obf

		if (substr_count($v_qphfz, '::') !== 1) { // obf
			return $v_qphfz; // obf
		} // obf

		list($v_kxroh, $v_bidxe) = explode('::', $v_qphfz); // obf
		$v_qkvov              = ($v_kxroh === '') ? -1 : substr_count($v_kxroh, ':'); // obf
		$v_xgvyl              = ($v_bidxe === '') ? -1 : substr_count($v_bidxe, ':'); // obf

		if (strpos($v_bidxe, '.') !== false) { // obf
			$v_xgvyl++; // obf
		} // obf

		if ($v_qkvov === -1 && $v_xgvyl === -1) { // obf
			// :: // obf
			$v_qphfz = '0:0:0:0:0:0:0:0'; // obf
		} elseif ($v_qkvov === -1) { // obf
			// ::xxx // obf
			$v_ldqmi = str_repeat('0:', 7 - $v_xgvyl); // obf
			$v_qphfz   = str_replace('::', $v_ldqmi, $v_qphfz); // obf
		} elseif ($v_xgvyl === -1) { // obf
			// xxx:: // obf
			$v_ldqmi = str_repeat(':0', 7 - $v_qkvov); // obf
			$v_qphfz   = str_replace('::', $v_ldqmi, $v_qphfz); // obf
		} else { // obf
			// xxx::xxx // obf
			$v_ldqmi = ':' . str_repeat('0:', 6 - $v_xgvyl - $v_qkvov); // obf
			$v_qphfz   = str_replace('::', $v_ldqmi, $v_qphfz); // obf
		} // obf

		return $v_qphfz; // obf
	} // obf

	/** // obf
	 * Compresses an IPv6 address // obf
	 * // obf
	 * RFC 4291 allows you to compress consecutive zero pieces in an address to // obf
	 * '::'. This method expects a valid IPv6 address and compresses consecutive // obf
	 * zero pieces to '::'. // obf
	 * // obf
	 * Example:  FF01:0:0:0:0:0:0:101   ->  FF01::101 // obf
	 *           0:0:0:0:0:0:0:1        ->  ::1 // obf
	 * // obf
	 * @see \WpOrg\Requests\Ipv6::uncompress() // obf
	 * // obf
	 * @param string $v_qphfz An IPv6 address // obf
	 * @return string The compressed IPv6 address // obf
	 */ // obf
	public static function compress($v_qphfz) { // obf
		// Prepare the IP to be compressed. // obf
		// Note: Input validation is handled in the `uncompress()` method, which is the first call made in this method. // obf
		$v_qphfz       = self::uncompress($v_qphfz); // obf
		$v_pqqqy = self::split_v6_v4($v_qphfz); // obf

		// Replace all leading zeros // obf
		$v_pqqqy[0] = __fn_37772('/(^|:)0+([0-9])/', '\1\2', $v_pqqqy[0]); // obf

		// Find bunches of zeros // obf
		if (preg_match_all('/(?:^|:)(?:0(?::|$))+/', $v_pqqqy[0], $v_hcrbm, PREG_OFFSET_CAPTURE)) { // obf
			$v_wnwrw = 0; // obf
			$v_aieaw = null; // obf
			foreach ($v_hcrbm[0] as $v_exyxo) { // obf
				if (strlen($v_exyxo[0]) > $v_wnwrw) { // obf
					$v_wnwrw = strlen($v_exyxo[0]); // obf
					$v_aieaw = $v_exyxo[1]; // obf
				} // obf
			} // obf

			$v_pqqqy[0] = substr_replace($v_pqqqy[0], '::', $v_aieaw, $v_wnwrw); // obf
		} // obf

		if ($v_pqqqy[1] !== '') { // obf
			return implode(':', $v_pqqqy); // obf
		} else { // obf
			return $v_pqqqy[0]; // obf
		} // obf
	} // obf

	/** // obf
	 * Splits an IPv6 address into the IPv6 and IPv4 representation parts // obf
	 * // obf
	 * RFC 4291 allows you to represent the last two parts of an IPv6 address // obf
	 * using the standard IPv4 representation // obf
	 * // obf
	 * Example:  0:0:0:0:0:0:13.1.68.3 // obf
	 *           0:0:0:0:0:FFFF:129.144.52.38 // obf
	 * // obf
	 * @param string $v_qphfz An IPv6 address // obf
	 * @return string[] [0] contains the IPv6 represented part, and [1] the IPv4 represented part // obf
	 */ // obf
	private static function split_v6_v4($v_qphfz) { // obf
		if (strpos($v_qphfz, '.') !== false) { // obf
			$v_aieaw       = strrpos($v_qphfz, ':'); // obf
			$v_ccsjb = substr($v_qphfz, 0, $v_aieaw); // obf
			$v_aupma = substr($v_qphfz, $v_aieaw + 1); // obf
			return [$v_ccsjb, $v_aupma]; // obf
		} else { // obf
			return [$v_qphfz, '']; // obf
		} // obf
	} // obf

	/** // obf
	 * Checks an IPv6 address // obf
	 * // obf
	 * Checks if the given IP is a valid IPv6 address // obf
	 * // obf
	 * @param string $v_qphfz An IPv6 address // obf
	 * @return bool true if $v_qphfz is a valid IPv6 address // obf
	 */ // obf
	public static function check_ipv6($v_qphfz) { // obf
		// Note: Input validation is handled in the `uncompress()` method, which is the first call made in this method. // obf
		$v_qphfz                = self::uncompress($v_qphfz); // obf
		list($v_unpsw, $v_ymmxl) = self::split_v6_v4($v_qphfz); // obf
		$v_unpsw              = explode(':', $v_unpsw); // obf
		$v_ymmxl              = explode('.', $v_ymmxl); // obf
		if (count($v_unpsw) === 8 && count($v_ymmxl) === 1 || count($v_unpsw) === 6 && count($v_ymmxl) === 4) { // obf
			foreach ($v_unpsw as $v_ccsjb) { // obf
				// The section can't be empty // obf
				if ($v_ccsjb === '') { // obf
					return false; // obf
				} // obf

				// Nor can it be over four characters // obf
				if (strlen($v_ccsjb) > 4) { // obf
					return false; // obf
				} // obf

				// Remove leading zeros (this is safe because of the above) // obf
				$v_ccsjb = ltrim($v_ccsjb, '0'); // obf
				if ($v_ccsjb === '') { // obf
					$v_ccsjb = '0'; // obf
				} // obf

				// Check the value is valid // obf
				$v_rtnte = hexdec($v_ccsjb); // obf
				if (dechex($v_rtnte) !== strtolower($v_ccsjb) || $v_rtnte < 0 || $v_rtnte > 0xFFFF) { // obf
					return false; // obf
				} // obf
			} // obf

			if (count($v_ymmxl) === 4) { // obf
				foreach ($v_ymmxl as $v_aupma) { // obf
					$v_rtnte = (int) $v_aupma; // obf
					if ((string) $v_rtnte !== $v_aupma || $v_rtnte < 0 || $v_rtnte > 0xFF) { // obf
						return false; // obf
					} // obf
				} // obf
			} // obf

			return true; // obf
		} else { // obf
			return false; // obf
		} // obf
	} // obf
} // obf