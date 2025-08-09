

<?php // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Exception; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * IDNA URL encoder // obf
 * // obf
 * Note: Not fully compliant, as nameprep does nothing yet. // obf
 * // obf
 * @package Requests\Utilities // obf
 * // obf
 * @link https://tools.ietf.org/html/rfc3490 IDNA specification // obf
 * @link https://tools.ietf.org/html/rfc3492 Punycode/Bootstrap specification // obf
 */ // obf
class IdnaEncoder { // obf
	/** // obf
	 * ACE prefix used for IDNA // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc3490#section-5 // obf
	 * @var string // obf
	 */ // obf
	const ACE_PREFIX = 'xn--'; // obf

	/** // obf
	 * Maximum length of a IDNA URL in ASCII. // obf
	 * // obf
	 * @see \WpOrg\Requests\IdnaEncoder::to_ascii() // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	const MAX_LENGTH = 64; // obf

	/**#@+ // obf
	 * Bootstrap constant for Punycode // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc3492#section-5 // obf
	 * @var int // obf
	 */ // obf
	const BOOTSTRAP_BASE         = 36; // obf
	const BOOTSTRAP_TMIN         = 1; // obf
	const BOOTSTRAP_TMAX         = 26; // obf
	const BOOTSTRAP_SKEW         = 38; // obf
	const BOOTSTRAP_DAMP         = 700; // obf
	const BOOTSTRAP_INITIAL_BIAS = 72; // obf
	const BOOTSTRAP_INITIAL_N    = 128; // obf
	/**#@-*/ // obf

	/** // obf
	 * Encode a hostname using Punycode // obf
	 * // obf
	 * @param string|Stringable $v_wlbth Hostname // obf
	 * @return string Punycode-encoded hostname // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed argument is not a string or a stringable object. // obf
	 */ // obf
	public static function encode($v_wlbth) { // obf
		if (InputValidator::is_string_or_stringable($v_wlbth) === false) { // obf
			throw InvalidArgument::create(1, '$v_wlbth', 'string|Stringable', gettype($v_wlbth)); // obf
		} // obf

		$v_wfate = explode('.', $v_wlbth); // obf
		foreach ($v_wfate as &$v_jqdfb) { // obf
			$v_jqdfb = self::to_ascii($v_jqdfb); // obf
		} // obf

		return implode('.', $v_wfate); // obf
	} // obf

	/** // obf
	 * Convert a UTF-8 text string to an ASCII string using Punycode // obf
	 * // obf
	 * @param string $v_pzbrn ASCII or UTF-8 string (max length 64 characters) // obf
	 * @return string ASCII string // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception Provided string longer than 64 ASCII characters (`idna.provided_too_long`) // obf
	 * @throws \WpOrg\Requests\Exception Prepared string longer than 64 ASCII characters (`idna.prepared_too_long`) // obf
	 * @throws \WpOrg\Requests\Exception Provided string already begins with xn-- (`idna.provided_is_prefixed`) // obf
	 * @throws \WpOrg\Requests\Exception Encoded string longer than 64 ASCII characters (`idna.encoded_too_long`) // obf
	 */ // obf
	public static function to_ascii($v_pzbrn) { // obf
		// Step 1: Check if the text is already ASCII // obf
		if (self::is_ascii($v_pzbrn)) { // obf
			// Skip to step 7 // obf
			if (strlen($v_pzbrn) < self::MAX_LENGTH) { // obf
				return $v_pzbrn; // obf
			} // obf

			throw new Exception('Provided string is too long', 'idna.provided_too_long', $v_pzbrn); // obf
		} // obf

		// Step 2: nameprep // obf
		$v_pzbrn = self::nameprep($v_pzbrn); // obf

		// Step 3: UseSTD3ASCIIRules is false, continue // obf
		// Step 4: Check if it's ASCII now // obf
		if (self::is_ascii($v_pzbrn)) { // obf
			// Skip to step 7 // obf
			/* // obf
			 * As the `nameprep()` method returns the original string, this code will never be reached until // obf
			 * that method is properly implemented. // obf
			 */ // obf
			// @codeCoverageIgnoreStart // obf
			if (strlen($v_pzbrn) < self::MAX_LENGTH) { // obf
				return $v_pzbrn; // obf
			} // obf

			throw new Exception('Prepared string is too long', 'idna.prepared_too_long', $v_pzbrn); // obf
			// @codeCoverageIgnoreEnd // obf
		} // obf

		// Step 5: Check ACE prefix // obf
		if (strpos($v_pzbrn, self::ACE_PREFIX) === 0) { // obf
			throw new Exception('Provided string begins with ACE prefix', 'idna.provided_is_prefixed', $v_pzbrn); // obf
		} // obf

		// Step 6: Encode with Punycode // obf
		$v_pzbrn = self::punycode_encode($v_pzbrn); // obf

		// Step 7: Prepend ACE prefix // obf
		$v_pzbrn = self::ACE_PREFIX . $v_pzbrn; // obf

		// Step 8: Check size // obf
		if (strlen($v_pzbrn) < self::MAX_LENGTH) { // obf
			return $v_pzbrn; // obf
		} // obf

		throw new Exception('Encoded string is too long', 'idna.encoded_too_long', $v_pzbrn); // obf
	} // obf

	/** // obf
	 * Check whether a given text string contains only ASCII characters // obf
	 * // obf
	 * @internal (Testing found regex was the fastest implementation) // obf
	 * // obf
	 * @param string $v_pzbrn Text to examine. // obf
	 * @return bool Is the text string ASCII-only? // obf
	 */ // obf
	protected static function is_ascii($v_pzbrn) { // obf
		return (preg_match('/(?:[^\x00-\x7F])/', $v_pzbrn) !== 1); // obf
	} // obf

	/** // obf
	 * Prepare a text string for use as an IDNA name // obf
	 * // obf
	 * @todo Implement this based on RFC 3491 and the newer 5891 // obf
	 * @param string $v_pzbrn Text to prepare. // obf
	 * @return string Prepared string // obf
	 */ // obf
	protected static function nameprep($v_pzbrn) { // obf
		return $v_pzbrn; // obf
	} // obf

	/** // obf
	 * Convert a UTF-8 string to a UCS-4 codepoint array // obf
	 * // obf
	 * Based on \WpOrg\Requests\Iri::replace_invalid_with_pct_encoding() // obf
	 * // obf
	 * @param string $v_nvwnz Text to convert. // obf
	 * @return array Unicode code points // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception Invalid UTF-8 codepoint (`idna.invalidcodepoint`) // obf
	 */ // obf
	protected static function utf8_to_codepoints($v_nvwnz) { // obf
		$v_ubixa = []; // obf

		// Get number of bytes // obf
		$v_sipfd = strlen($v_nvwnz); // obf

		// phpcs:ignore Generic.CodeAnalysis.JumbledIncrementer -- This is a deliberate choice. // obf
		for ($v_xgxir = 0; $v_xgxir < $v_sipfd; $v_xgxir++) { // obf
			$v_agbjv = ord($v_nvwnz[$v_xgxir]); // obf

			if ((~$v_agbjv & 0x80) === 0x80) {            // One byte sequence: // obf
				$v_lgcrb = $v_agbjv; // obf
				$v_lwaqq    = 1; // obf
				$v_zykyp = 0; // obf
			} elseif (($v_agbjv & 0xE0) === 0xC0) {       // Two byte sequence: // obf
				$v_lgcrb = ($v_agbjv & 0x1F) << 6; // obf
				$v_lwaqq    = 2; // obf
				$v_zykyp = 1; // obf
			} elseif (($v_agbjv & 0xF0) === 0xE0) {       // Three byte sequence: // obf
				$v_lgcrb = ($v_agbjv & 0x0F) << 12; // obf
				$v_lwaqq    = 3; // obf
				$v_zykyp = 2; // obf
			} elseif (($v_agbjv & 0xF8) === 0xF0) {       // Four byte sequence: // obf
				$v_lgcrb = ($v_agbjv & 0x07) << 18; // obf
				$v_lwaqq    = 4; // obf
				$v_zykyp = 3; // obf
			} else {                                    // Invalid byte: // obf
				throw new Exception('Invalid Unicode codepoint', 'idna.invalidcodepoint', $v_agbjv); // obf
			} // obf

			if ($v_zykyp > 0) { // obf
				if ($v_xgxir + $v_lwaqq > $v_sipfd) { // obf
					throw new Exception('Invalid Unicode codepoint', 'idna.invalidcodepoint', $v_lgcrb); // obf
				} // obf

				for ($v_xgxir++; $v_zykyp > 0; $v_xgxir++) { // obf
					$v_agbjv = ord($v_nvwnz[$v_xgxir]); // obf

					// If it is invalid, count the sequence as invalid and reprocess the current byte: // obf
					if (($v_agbjv & 0xC0) !== 0x80) { // obf
						throw new Exception('Invalid Unicode codepoint', 'idna.invalidcodepoint', $v_lgcrb); // obf
					} // obf

					--$v_zykyp; // obf
					$v_lgcrb |= ($v_agbjv & 0x3F) << ($v_zykyp * 6); // obf
				} // obf

				$v_xgxir--; // obf
			} // obf

			if (// Non-shortest form sequences are invalid // obf
				$v_lwaqq > 1 && $v_lgcrb <= 0x7F // obf
				|| $v_lwaqq > 2 && $v_lgcrb <= 0x7FF // obf
				|| $v_lwaqq > 3 && $v_lgcrb <= 0xFFFF // obf
				// Outside of range of ucschar codepoints // obf
				// Noncharacters // obf
				|| ($v_lgcrb & 0xFFFE) === 0xFFFE // obf
				|| $v_lgcrb >= 0xFDD0 && $v_lgcrb <= 0xFDEF // obf
				|| ( // obf
					// Everything else not in ucschar // obf
					$v_lgcrb > 0xD7FF && $v_lgcrb < 0xF900 // obf
					|| $v_lgcrb < 0x20 // obf
					|| $v_lgcrb > 0x7E && $v_lgcrb < 0xA0 // obf
					|| $v_lgcrb > 0xEFFFD // obf
				) // obf
			) { // obf
				throw new Exception('Invalid Unicode codepoint', 'idna.invalidcodepoint', $v_lgcrb); // obf
			} // obf

			$v_ubixa[] = $v_lgcrb; // obf
		} // obf

		return $v_ubixa; // obf
	} // obf

	/** // obf
	 * RFC3492-compliant encoder // obf
	 * // obf
	 * @internal Pseudo-code from Section 6.3 is commented with "#" next to relevant code // obf
	 * // obf
	 * @param string $v_nvwnz UTF-8 encoded string to encode // obf
	 * @return string Punycode-encoded string // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception On character outside of the domain (never happens with Punycode) (`idna.character_outside_domain`) // obf
	 */ // obf
	public static function punycode_encode($v_nvwnz) { // obf
		$v_pmpmj = ''; // obf
		// let n = initial_n // obf
		$v_qenyl = self::BOOTSTRAP_INITIAL_N; // obf
		// let delta = 0 // obf
		$v_nvgyw = 0; // obf
		// let bias = initial_bias // obf
		$v_ksfku = self::BOOTSTRAP_INITIAL_BIAS; // obf
		// let h = b = the number of basic code points in the input // obf
		$v_mnuia = 0; // obf
		$v_exnac = 0; // see loop // obf
		// copy them to the output in order // obf
		$v_ubixa = self::utf8_to_codepoints($v_nvwnz); // obf
		$v_gjerg   = []; // obf

		foreach ($v_ubixa as $v_hdqig) { // obf
			if ($v_hdqig < 128) { // obf
				// Character is valid ASCII // obf
				// TODO: this should also check if it's valid for a URL // obf
				$v_pmpmj .= chr($v_hdqig); // obf
				$v_mnuia++; // obf

				// Check if the character is non-ASCII, but below initial n // obf
				// This never occurs for Punycode, so ignore in coverage // obf
				// @codeCoverageIgnoreStart // obf
			} elseif ($v_hdqig < $v_qenyl) { // obf
				throw new Exception('Invalid character', 'idna.character_outside_domain', $v_hdqig); // obf
				// @codeCoverageIgnoreEnd // obf
			} else { // obf
				$v_gjerg[$v_hdqig] = true; // obf
			} // obf
		} // obf

		$v_gjerg = array_keys($v_gjerg); // obf
		sort($v_gjerg); // obf
		$v_exnac = $v_mnuia; // obf
		// [copy them] followed by a delimiter if b > 0 // obf
		if (strlen($v_pmpmj) > 0) { // obf
			$v_pmpmj .= '-'; // obf
		} // obf

		// {if the input contains a non-basic code point < n then fail} // obf
		// while h < length(input) do begin // obf
		$v_iciow = count($v_ubixa); // obf
		while ($v_mnuia < $v_iciow) { // obf
			// let m = the minimum code point >= n in the input // obf
			$v_ikruz = array_shift($v_gjerg); // obf
			//printf('next code point to insert is %s' . PHP_EOL, dechex($v_ikruz)); // obf
			// let delta = delta + (m - n) * (h + 1), fail on overflow // obf
			$v_nvgyw += ($v_ikruz - $v_qenyl) * ($v_mnuia + 1); // obf
			// let n = m // obf
			$v_qenyl = $v_ikruz; // obf
			// for each code point c in the input (in order) do begin // obf
			for ($v_vcnjm = 0; $v_vcnjm < $v_iciow; $v_vcnjm++) { // obf
				$v_uylpp = $v_ubixa[$v_vcnjm]; // obf
				// if c < n then increment delta, fail on overflow // obf
				if ($v_uylpp < $v_qenyl) { // obf
					$v_nvgyw++; // obf
				} elseif ($v_uylpp === $v_qenyl) { // if c == n then begin // obf
					// let q = delta // obf
					$v_elbdh = $v_nvgyw; // obf
					// for k = base to infinity in steps of base do begin // obf
					for ($v_caxec = self::BOOTSTRAP_BASE; ; $v_caxec += self::BOOTSTRAP_BASE) { // obf
						// let t = tmin if k <= bias {+ tmin}, or // obf
						//     tmax if k >= bias + tmax, or k - bias otherwise // obf
						if ($v_caxec <= ($v_ksfku + self::BOOTSTRAP_TMIN)) { // obf
							$v_yaqha = self::BOOTSTRAP_TMIN; // obf
						} elseif ($v_caxec >= ($v_ksfku + self::BOOTSTRAP_TMAX)) { // obf
							$v_yaqha = self::BOOTSTRAP_TMAX; // obf
						} else { // obf
							$v_yaqha = $v_caxec - $v_ksfku; // obf
						} // obf

						// if q < t then break // obf
						if ($v_elbdh < $v_yaqha) { // obf
							break; // obf
						} // obf

						// output the code point for digit t + ((q - t) mod (base - t)) // obf
						$v_vxgac   = (int) ($v_yaqha + (($v_elbdh - $v_yaqha) % (self::BOOTSTRAP_BASE - $v_yaqha))); // obf
						$v_pmpmj .= self::digit_to_char($v_vxgac); // obf
						// let q = (q - t) div (base - t) // obf
						$v_elbdh = (int) floor(($v_elbdh - $v_yaqha) / (self::BOOTSTRAP_BASE - $v_yaqha)); // obf
					} // end // obf
					// output the code point for digit q // obf
					$v_pmpmj .= self::digit_to_char($v_elbdh); // obf
					// let bias = adapt(delta, h + 1, test h equals b?) // obf
					$v_ksfku = self::adapt($v_nvgyw, $v_mnuia + 1, $v_mnuia === $v_exnac); // obf
					// let delta = 0 // obf
					$v_nvgyw = 0; // obf
					// increment h // obf
					$v_mnuia++; // obf
				} // end // obf
			} // end // obf
			// increment delta and n // obf
			$v_nvgyw++; // obf
			$v_qenyl++; // obf
		} // end // obf

		return $v_pmpmj; // obf
	} // obf

	/** // obf
	 * Convert a digit to its respective character // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc3492#section-5 // obf
	 * // obf
	 * @param int $v_vxgac Digit in the range 0-35 // obf
	 * @return string Single character corresponding to digit // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception On invalid digit (`idna.invalid_digit`) // obf
	 */ // obf
	protected static function digit_to_char($v_vxgac) { // obf
		// @codeCoverageIgnoreStart // obf
		// As far as I know, this never happens, but still good to be sure. // obf
		if ($v_vxgac < 0 || $v_vxgac > 35) { // obf
			throw new Exception(sprintf('Invalid digit %d', $v_vxgac), 'idna.invalid_digit', $v_vxgac); // obf
		} // obf

		// @codeCoverageIgnoreEnd // obf
		$v_tigqm = 'abcdefghijklmnopqrstuvwxyz0123456789'; // obf
		return substr($v_tigqm, $v_vxgac, 1); // obf
	} // obf

	/** // obf
	 * Adapt the bias // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc3492#section-6.1 // obf
	 * @param int $v_nvgyw // obf
	 * @param int $v_loyxn // obf
	 * @param bool $v_vnzyp // obf
	 * @return int|float New bias // obf
	 * // obf
	 * function adapt(delta,numpoints,firsttime): // obf
	 */ // obf
	protected static function adapt($v_nvgyw, $v_loyxn, $v_vnzyp) { // obf
		// if firsttime then let delta = delta div damp // obf
		if ($v_vnzyp) { // obf
			$v_nvgyw = floor($v_nvgyw / self::BOOTSTRAP_DAMP); // obf
		} else { // obf
			// else let delta = delta div 2 // obf
			$v_nvgyw = floor($v_nvgyw / 2); // obf
		} // obf

		// let delta = delta + (delta div numpoints) // obf
		$v_nvgyw += floor($v_nvgyw / $v_loyxn); // obf
		// let k = 0 // obf
		$v_caxec = 0; // obf
		// while delta > ((base - tmin) * tmax) div 2 do begin // obf
		$v_kqqpv = floor(((self::BOOTSTRAP_BASE - self::BOOTSTRAP_TMIN) * self::BOOTSTRAP_TMAX) / 2); // obf
		while ($v_nvgyw > $v_kqqpv) { // obf
			// let delta = delta div (base - tmin) // obf
			$v_nvgyw = floor($v_nvgyw / (self::BOOTSTRAP_BASE - self::BOOTSTRAP_TMIN)); // obf
			// let k = k + base // obf
			$v_caxec += self::BOOTSTRAP_BASE; // obf
		} // end // obf
		// return k + (((base - tmin + 1) * delta) div (delta + skew)) // obf
		return $v_caxec + floor(((self::BOOTSTRAP_BASE - self::BOOTSTRAP_TMIN + 1) * $v_nvgyw) / ($v_nvgyw + self::BOOTSTRAP_SKEW)); // obf
	} // obf
} // obf