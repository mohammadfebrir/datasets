
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * IRI parser/serialiser/normaliser // obf
 * // obf
 * @package Requests\Utilities // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Exception; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf
use WpOrg\Requests\Ipv6; // obf
use WpOrg\Requests\Port; // obf
use WpOrg\Requests\Utility\InputValidator; // obf

/** // obf
 * IRI parser/serialiser/normaliser // obf
 * // obf
 * Copyright (c) 2007-2010, Geoffrey Sneddon and Steve Minutillo. // obf
 * All rights reserved. // obf
 * // obf
 * Redistribution and use in source and binary forms, with or without // obf
 * modification, are permitted provided that the following conditions are met: // obf
 * // obf
 *  * Redistributions of source code must retain the above copyright notice, // obf
 *       this list of conditions and the following disclaimer. // obf
 * // obf
 *  * Redistributions in binary form must reproduce the above copyright notice, // obf
 *       this list of conditions and the following disclaimer in the documentation // obf
 *       and/or other materials provided with the distribution. // obf
 * // obf
 *  * Neither the name of the SimplePie Team nor the names of its contributors // obf
 *       may be used to endorse or promote products derived from this software // obf
 *       without specific prior written permission. // obf
 * // obf
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" // obf
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE // obf
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE // obf
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDERS AND CONTRIBUTORS BE // obf
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR // obf
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF // obf
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS // obf
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN // obf
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) // obf
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE // obf
 * POSSIBILITY OF SUCH DAMAGE. // obf
 * // obf
 * @package Requests\Utilities // obf
 * @author Geoffrey Sneddon // obf
 * @author Steve Minutillo // obf
 * @copyright 2007-2009 Geoffrey Sneddon and Steve Minutillo // obf
 * @license https://opensource.org/licenses/bsd-license.php // obf
 * @link http://hg.gsnedders.com/iri/ // obf
 * // obf
 * @property string $v_dhmxi IRI we're working with // obf
 * @property-read string $v_jmfwb IRI in URI form, {@see \WpOrg\Requests\Iri::to_uri()} // obf
 * @property string $v_oumhr Scheme part of the IRI // obf
 * @property string $v_xmayx Authority part, formatted for a URI (userinfo + host + port) // obf
 * @property string $v_kshbu Authority part of the IRI (userinfo + host + port) // obf
 * @property string $v_babuj Userinfo part, formatted for a URI (after '://' and before '@') // obf
 * @property string $v_dhosh Userinfo part of the IRI (after '://' and before '@') // obf
 * @property string $v_zwndu Host part, formatted for a URI // obf
 * @property string $v_hiaqm Host part of the IRI // obf
 * @property string $v_tuwrq Port part of the IRI (after ':') // obf
 * @property string $v_pqsoy Path part, formatted for a URI (after first '/') // obf
 * @property string $v_styos Path part of the IRI (after first '/') // obf
 * @property string $v_hpkid Query part, formatted for a URI (after '?') // obf
 * @property string $v_lswjh Query part of the IRI (after '?') // obf
 * @property string $v_ksoel Fragment, formatted for a URI (after '#') // obf
 * @property string $v_mstsw Fragment part of the IRI (after '#') // obf
 */ // obf
class Iri { // obf
	/** // obf
	 * Scheme // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_oumhr = null; // obf

	/** // obf
	 * User Information // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_dhosh = null; // obf

	/** // obf
	 * ihost // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_hiaqm = null; // obf

	/** // obf
	 * Port // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_tuwrq = null; // obf

	/** // obf
	 * ipath // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_styos = ''; // obf

	/** // obf
	 * iquery // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_lswjh = null; // obf

	/** // obf
	 * ifragment|null // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_mstsw = null; // obf

	/** // obf
	 * Normalization database // obf
	 * // obf
	 * Each key is the scheme, each value is an array with each key as the IRI // obf
	 * part and value as the default value for that part. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_crlvn = array( // obf
		'acap' => array( // obf
			'port' => Port::ACAP, // obf
		), // obf
		'dict' => array( // obf
			'port' => Port::DICT, // obf
		), // obf
		'file' => array( // obf
			'ihost' => 'localhost', // obf
		), // obf
		'http' => array( // obf
			'port' => Port::HTTP, // obf
		), // obf
		'https' => array( // obf
			'port' => Port::HTTPS, // obf
		), // obf
	); // obf

	/** // obf
	 * Return the entire IRI when you try and read the object as a string // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function __toString() { // obf
		return $v_npvdm->get_iri(); // obf
	} // obf

	/** // obf
	 * Overload __set() to provide access via properties // obf
	 * // obf
	 * @param string $v_qwsrq Property name // obf
	 * @param mixed $v_wxrzu Property value // obf
	 */ // obf
	public function __set($v_qwsrq, $v_wxrzu) { // obf
		if (method_exists($v_npvdm, 'set_' . $v_qwsrq)) { // obf
			call_user_func(array($v_npvdm, 'set_' . $v_qwsrq), $v_wxrzu); // obf
		} // obf
		elseif ( // obf
			   $v_qwsrq === 'iauthority' // obf
			|| $v_qwsrq === 'iuserinfo' // obf
			|| $v_qwsrq === 'ihost' // obf
			|| $v_qwsrq === 'ipath' // obf
			|| $v_qwsrq === 'iquery' // obf
			|| $v_qwsrq === 'ifragment' // obf
		) { // obf
			call_user_func(array($v_npvdm, 'set_' . substr($v_qwsrq, 1)), $v_wxrzu); // obf
		} // obf
	} // obf

	/** // obf
	 * Overload __get() to provide access via properties // obf
	 * // obf
	 * @param string $v_qwsrq Property name // obf
	 * @return mixed // obf
	 */ // obf
	public function __get($v_qwsrq) { // obf
		// isset() returns false for null, we don't want to do that // obf
		// Also why we use array_key_exists below instead of isset() // obf
		$v_hgbal = get_object_vars($v_npvdm); // obf

		if ( // obf
			$v_qwsrq === 'iri' || // obf
			$v_qwsrq === 'uri' || // obf
			$v_qwsrq === 'iauthority' || // obf
			$v_qwsrq === 'authority' // obf
		) { // obf
			$v_tfysm = 'get_' . $v_qwsrq; // obf
			$v_skxjl = $v_npvdm->$v_tfysm(); // obf
		} // obf
		elseif (array_key_exists($v_qwsrq, $v_hgbal)) { // obf
			$v_skxjl = $v_npvdm->$v_qwsrq; // obf
		} // obf
		// host -> ihost // obf
		elseif (($v_ynoyi = 'i' . $v_qwsrq) && array_key_exists($v_ynoyi, $v_hgbal)) { // obf
			$v_qwsrq = $v_ynoyi; // obf
			$v_skxjl = $v_npvdm->$v_ynoyi; // obf
		} // obf
		// ischeme -> scheme // obf
		elseif (($v_ynoyi = substr($v_qwsrq, 1)) && array_key_exists($v_ynoyi, $v_hgbal)) { // obf
			$v_qwsrq = $v_ynoyi; // obf
			$v_skxjl = $v_npvdm->$v_ynoyi; // obf
		} // obf
		else { // obf
			trigger_error('Undefined property: ' . get_class($v_npvdm) . '::' . $v_qwsrq, E_USER_NOTICE); // obf
			$v_skxjl = null; // obf
		} // obf

		if ($v_skxjl === null && isset($v_npvdm->normalization[$v_npvdm->scheme][$v_qwsrq])) { // obf
			return $v_npvdm->normalization[$v_npvdm->scheme][$v_qwsrq]; // obf
		} // obf
		else { // obf
			return $v_skxjl; // obf
		} // obf
	} // obf

	/** // obf
	 * Overload __isset() to provide access via properties // obf
	 * // obf
	 * @param string $v_qwsrq Property name // obf
	 * @return bool // obf
	 */ // obf
	public function __isset($v_qwsrq) { // obf
		return (method_exists($v_npvdm, 'get_' . $v_qwsrq) || isset($v_npvdm->$v_qwsrq)); // obf
	} // obf

	/** // obf
	 * Overload __unset() to provide access via properties // obf
	 * // obf
	 * @param string $v_qwsrq Property name // obf
	 */ // obf
	public function __unset($v_qwsrq) { // obf
		if (method_exists($v_npvdm, 'set_' . $v_qwsrq)) { // obf
			call_user_func(array($v_npvdm, 'set_' . $v_qwsrq), ''); // obf
		} // obf
	} // obf

	/** // obf
	 * Create a new IRI object, from a specified string // obf
	 * // obf
	 * @param string|Stringable|null $v_dhmxi // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When the passed $v_dhmxi argument is not a string, Stringable or null. // obf
	 */ // obf
	public function __construct($v_dhmxi = null) { // obf
		if ($v_dhmxi !== null && InputValidator::is_string_or_stringable($v_dhmxi) === false) { // obf
			throw InvalidArgument::create(1, '$v_dhmxi', 'string|Stringable|null', gettype($v_dhmxi)); // obf
		} // obf

		$v_npvdm->set_iri($v_dhmxi); // obf
	} // obf

	/** // obf
	 * Create a new IRI object by resolving a relative IRI // obf
	 * // obf
	 * Returns false if $v_tykqs is not absolute, otherwise an IRI. // obf
	 * // obf
	 * @param \WpOrg\Requests\Iri|string $v_tykqs (Absolute) Base IRI // obf
	 * @param \WpOrg\Requests\Iri|string $v_itdwr Relative IRI // obf
	 * @return \WpOrg\Requests\Iri|false // obf
	 */ // obf
	public static function absolutize($v_tykqs, $v_itdwr) { // obf
		if (!($v_itdwr instanceof self)) { // obf
			$v_itdwr = new self($v_itdwr); // obf
		} // obf
		if (!$v_itdwr->is_valid()) { // obf
			return false; // obf
		} // obf
		elseif ($v_itdwr->scheme !== null) { // obf
			return clone $v_itdwr; // obf
		} // obf

		if (!($v_tykqs instanceof self)) { // obf
			$v_tykqs = new self($v_tykqs); // obf
		} // obf
		if ($v_tykqs->scheme === null || !$v_tykqs->is_valid()) { // obf
			return false; // obf
		} // obf

		if ($v_itdwr->get_iri() !== '') { // obf
			if ($v_itdwr->iuserinfo !== null || $v_itdwr->ihost !== null || $v_itdwr->port !== null) { // obf
				$v_rkywa = clone $v_itdwr; // obf
				$v_rkywa->scheme = $v_tykqs->scheme; // obf
			} // obf
			else { // obf
				$v_rkywa = new self; // obf
				$v_rkywa->scheme = $v_tykqs->scheme; // obf
				$v_rkywa->iuserinfo = $v_tykqs->iuserinfo; // obf
				$v_rkywa->ihost = $v_tykqs->ihost; // obf
				$v_rkywa->port = $v_tykqs->port; // obf
				if ($v_itdwr->ipath !== '') { // obf
					if ($v_itdwr->ipath[0] === '/') { // obf
						$v_rkywa->ipath = $v_itdwr->ipath; // obf
					} // obf
					elseif (($v_tykqs->iuserinfo !== null || $v_tykqs->ihost !== null || $v_tykqs->port !== null) && $v_tykqs->ipath === '') { // obf
						$v_rkywa->ipath = '/' . $v_itdwr->ipath; // obf
					} // obf
					elseif (($v_phebw = strrpos($v_tykqs->ipath, '/')) !== false) { // obf
						$v_rkywa->ipath = substr($v_tykqs->ipath, 0, $v_phebw + 1) . $v_itdwr->ipath; // obf
					} // obf
					else { // obf
						$v_rkywa->ipath = $v_itdwr->ipath; // obf
					} // obf
					$v_rkywa->ipath = $v_rkywa->remove_dot_segments($v_rkywa->ipath); // obf
					$v_rkywa->iquery = $v_itdwr->iquery; // obf
				} // obf
				else { // obf
					$v_rkywa->ipath = $v_tykqs->ipath; // obf
					if ($v_itdwr->iquery !== null) { // obf
						$v_rkywa->iquery = $v_itdwr->iquery; // obf
					} // obf
					elseif ($v_tykqs->iquery !== null) { // obf
						$v_rkywa->iquery = $v_tykqs->iquery; // obf
					} // obf
				} // obf
				$v_rkywa->ifragment = $v_itdwr->ifragment; // obf
			} // obf
		} // obf
		else { // obf
			$v_rkywa = clone $v_tykqs; // obf
			$v_rkywa->ifragment = null; // obf
		} // obf
		$v_rkywa->scheme_normalization(); // obf
		return $v_rkywa; // obf
	} // obf

	/** // obf
	 * Parse an IRI into scheme/authority/path/query/fragment segments // obf
	 * // obf
	 * @param string $v_dhmxi // obf
	 * @return array // obf
	 */ // obf
	protected function parse_iri($v_dhmxi) { // obf
		$v_dhmxi = trim($v_dhmxi, "\x20\x09\x0A\x0C\x0D"); // obf
		$v_itwfa = preg_match('/^((?P<scheme>[^:\/?#]+):)?(\/\/(?P<authority>[^\/?#]*))?(?P<path>[^?#]*)(\?(?P<query>[^#]*))?(#(?P<fragment>.*))?$/', $v_dhmxi, $v_ricxx); // obf
		if (!$v_itwfa) { // obf
			throw new Exception('Cannot parse supplied IRI', 'iri.cannot_parse', $v_dhmxi); // obf
		} // obf

		if ($v_ricxx[1] === '') { // obf
			$v_ricxx['scheme'] = null; // obf
		} // obf
		if (!isset($v_ricxx[3]) || $v_ricxx[3] === '') { // obf
			$v_ricxx['authority'] = null; // obf
		} // obf
		if (!isset($v_ricxx[5])) { // obf
			$v_ricxx['path'] = ''; // obf
		} // obf
		if (!isset($v_ricxx[6]) || $v_ricxx[6] === '') { // obf
			$v_ricxx['query'] = null; // obf
		} // obf
		if (!isset($v_ricxx[8]) || $v_ricxx[8] === '') { // obf
			$v_ricxx['fragment'] = null; // obf
		} // obf
		return $v_ricxx; // obf
	} // obf

	/** // obf
	 * Remove dot segments from a path // obf
	 * // obf
	 * @param string $v_stvch // obf
	 * @return string // obf
	 */ // obf
	protected function remove_dot_segments($v_stvch) { // obf
		$v_zcbzm = ''; // obf
		while (strpos($v_stvch, './') !== false || strpos($v_stvch, '/.') !== false || $v_stvch === '.' || $v_stvch === '..') { // obf
			// A: If the input buffer begins with a prefix of "../" or "./", // obf
			// then remove that prefix from the input buffer; otherwise, // obf
			if (strpos($v_stvch, '../') === 0) { // obf
				$v_stvch = substr($v_stvch, 3); // obf
			} // obf
			elseif (strpos($v_stvch, './') === 0) { // obf
				$v_stvch = substr($v_stvch, 2); // obf
			} // obf
			// B: if the input buffer begins with a prefix of "/./" or "/.", // obf
			// where "." is a complete path segment, then replace that prefix // obf
			// with "/" in the input buffer; otherwise, // obf
			elseif (strpos($v_stvch, '/./') === 0) { // obf
				$v_stvch = substr($v_stvch, 2); // obf
			} // obf
			elseif ($v_stvch === '/.') { // obf
				$v_stvch = '/'; // obf
			} // obf
			// C: if the input buffer begins with a prefix of "/../" or "/..", // obf
			// where ".." is a complete path segment, then replace that prefix // obf
			// with "/" in the input buffer and remove the last segment and its // obf
			// preceding "/" (if any) from the output buffer; otherwise, // obf
			elseif (strpos($v_stvch, '/../') === 0) { // obf
				$v_stvch = substr($v_stvch, 3); // obf
				$v_zcbzm = substr_replace($v_zcbzm, '', (strrpos($v_zcbzm, '/') ?: 0)); // obf
			} // obf
			elseif ($v_stvch === '/..') { // obf
				$v_stvch = '/'; // obf
				$v_zcbzm = substr_replace($v_zcbzm, '', (strrpos($v_zcbzm, '/') ?: 0)); // obf
			} // obf
			// D: if the input buffer consists only of "." or "..", then remove // obf
			// that from the input buffer; otherwise, // obf
			elseif ($v_stvch === '.' || $v_stvch === '..') { // obf
				$v_stvch = ''; // obf
			} // obf
			// E: move the first path segment in the input buffer to the end of // obf
			// the output buffer, including the initial "/" character (if any) // obf
			// and any subsequent characters up to, but not including, the next // obf
			// "/" character or the end of the input buffer // obf
			elseif (($v_dfhhn = strpos($v_stvch, '/', 1)) !== false) { // obf
				$v_zcbzm .= substr($v_stvch, 0, $v_dfhhn); // obf
				$v_stvch = substr_replace($v_stvch, '', 0, $v_dfhhn); // obf
			} // obf
			else { // obf
				$v_zcbzm .= $v_stvch; // obf
				$v_stvch = ''; // obf
			} // obf
		} // obf
		return $v_zcbzm . $v_stvch; // obf
	} // obf

	/** // obf
	 * Replace invalid character with percent encoding // obf
	 * // obf
	 * @param string $v_gywdf Input string // obf
	 * @param string $v_itsfw Valid characters not in iunreserved or // obf
	 *                            iprivate (this is ASCII-only) // obf
	 * @param bool $v_fvqja Allow iprivate // obf
	 * @return string // obf
	 */ // obf
	protected function replace_invalid_with_pct_encoding($v_gywdf, $v_itsfw, $v_fvqja = false) { // obf
		// Normalize as many pct-encoded sections as possible // obf
		$v_gywdf = preg_replace_callback('/(?:%[A-Fa-f0-9]{2})+/', array($v_npvdm, 'remove_iunreserved_percent_encoded'), $v_gywdf); // obf

		// Replace invalid percent characters // obf
		$v_gywdf = __fn_37772('/%(?![A-Fa-f0-9]{2})/', '%25', $v_gywdf); // obf

		// Add unreserved and % to $v_itsfw (the latter is safe because all // obf
		// pct-encoded sections are now valid). // obf
		$v_itsfw .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-._~%'; // obf

		// Now replace any bytes that aren't allowed with their pct-encoded versions // obf
		$v_jxwih = 0; // obf
		$v_kqyqe = strlen($v_gywdf); // obf
		while (($v_jxwih += strspn($v_gywdf, $v_itsfw, $v_jxwih)) < $v_kqyqe) { // obf
			$v_wxrzu = ord($v_gywdf[$v_jxwih]); // obf

			// Start position // obf
			$v_fcwml = $v_jxwih; // obf

			// By default we are valid // obf
			$v_ptkgs = true; // obf

			// No one byte sequences are valid due to the while. // obf
			// Two byte sequence: // obf
			if (($v_wxrzu & 0xE0) === 0xC0) { // obf
				$v_pfurr = ($v_wxrzu & 0x1F) << 6; // obf
				$v_qmetl = 2; // obf
				$v_puxlr = 1; // obf
			} // obf
			// Three byte sequence: // obf
			elseif (($v_wxrzu & 0xF0) === 0xE0) { // obf
				$v_pfurr = ($v_wxrzu & 0x0F) << 12; // obf
				$v_qmetl = 3; // obf
				$v_puxlr = 2; // obf
			} // obf
			// Four byte sequence: // obf
			elseif (($v_wxrzu & 0xF8) === 0xF0) { // obf
				$v_pfurr = ($v_wxrzu & 0x07) << 18; // obf
				$v_qmetl = 4; // obf
				$v_puxlr = 3; // obf
			} // obf
			// Invalid byte: // obf
			else { // obf
				$v_ptkgs = false; // obf
				$v_qmetl = 1; // obf
				$v_puxlr = 0; // obf
			} // obf

			if ($v_puxlr) { // obf
				if ($v_jxwih + $v_qmetl <= $v_kqyqe) { // obf
					for ($v_jxwih++; $v_puxlr; $v_jxwih++) { // obf
						$v_wxrzu = ord($v_gywdf[$v_jxwih]); // obf

						// Check that the byte is valid, then add it to the character: // obf
						if (($v_wxrzu & 0xC0) === 0x80) { // obf
							$v_pfurr |= ($v_wxrzu & 0x3F) << (--$v_puxlr * 6); // obf
						} // obf
						// If it is invalid, count the sequence as invalid and reprocess the current byte: // obf
						else { // obf
							$v_ptkgs = false; // obf
							$v_jxwih--; // obf
							break; // obf
						} // obf
					} // obf
				} // obf
				else { // obf
					$v_jxwih = $v_kqyqe - 1; // obf
					$v_ptkgs = false; // obf
				} // obf
			} // obf

			// Percent encode anything invalid or not in ucschar // obf
			if ( // obf
				// Invalid sequences // obf
				!$v_ptkgs // obf
				// Non-shortest form sequences are invalid // obf
				|| $v_qmetl > 1 && $v_pfurr <= 0x7F // obf
				|| $v_qmetl > 2 && $v_pfurr <= 0x7FF // obf
				|| $v_qmetl > 3 && $v_pfurr <= 0xFFFF // obf
				// Outside of range of ucschar codepoints // obf
				// Noncharacters // obf
				|| ($v_pfurr & 0xFFFE) === 0xFFFE // obf
				|| $v_pfurr >= 0xFDD0 && $v_pfurr <= 0xFDEF // obf
				|| ( // obf
					// Everything else not in ucschar // obf
					   $v_pfurr > 0xD7FF && $v_pfurr < 0xF900 // obf
					|| $v_pfurr < 0xA0 // obf
					|| $v_pfurr > 0xEFFFD // obf
				) // obf
				&& ( // obf
					// Everything not in iprivate, if it applies // obf
					   !$v_fvqja // obf
					|| $v_pfurr < 0xE000 // obf
					|| $v_pfurr > 0x10FFFD // obf
				) // obf
			) { // obf
				// If we were a character, pretend we weren't, but rather an error. // obf
				if ($v_ptkgs) { // obf
					$v_jxwih--; // obf
				} // obf

				for ($v_zvury = $v_fcwml; $v_zvury <= $v_jxwih; $v_zvury++) { // obf
					$v_gywdf = substr_replace($v_gywdf, sprintf('%%%02X', ord($v_gywdf[$v_zvury])), $v_zvury, 1); // obf
					$v_zvury += 2; // obf
					$v_jxwih += 2; // obf
					$v_kqyqe += 2; // obf
				} // obf
			} // obf
		} // obf

		return $v_gywdf; // obf
	} // obf

	/** // obf
	 * Callback function for preg_replace_callback. // obf
	 * // obf
	 * Removes sequences of percent encoded bytes that represent UTF-8 // obf
	 * encoded characters in iunreserved // obf
	 * // obf
	 * @param array $v_pflju PCRE match // obf
	 * @return string Replacement // obf
	 */ // obf
	protected function remove_iunreserved_percent_encoded($v_pflju) { // obf
		// As we just have valid percent encoded sequences we can just explode // obf
		// and ignore the first member of the returned array (an empty string). // obf
		$v_fdehw = explode('%', $v_pflju[0]); // obf

		// Initialize the new string (this is what will be returned) and that // obf
		// there are no bytes remaining in the current sequence (unsurprising // obf
		// at the first byte!). // obf
		$v_trtxr = ''; // obf
		$v_puxlr = 0; // obf

		// Loop over each and every byte, and set $v_wxrzu to its value // obf
		for ($v_pynib = 1, $v_ulbcm = count($v_fdehw); $v_pynib < $v_ulbcm; $v_pynib++) { // obf
			$v_wxrzu = hexdec($v_fdehw[$v_pynib]); // obf

			// If we're the first byte of sequence: // obf
			if (!$v_puxlr) { // obf
				// Start position // obf
				$v_fcwml = $v_pynib; // obf

				// By default we are valid // obf
				$v_ptkgs = true; // obf

				// One byte sequence: // obf
				if ($v_wxrzu <= 0x7F) { // obf
					$v_pfurr = $v_wxrzu; // obf
					$v_qmetl = 1; // obf
				} // obf
				// Two byte sequence: // obf
				elseif (($v_wxrzu & 0xE0) === 0xC0) { // obf
					$v_pfurr = ($v_wxrzu & 0x1F) << 6; // obf
					$v_qmetl = 2; // obf
					$v_puxlr = 1; // obf
				} // obf
				// Three byte sequence: // obf
				elseif (($v_wxrzu & 0xF0) === 0xE0) { // obf
					$v_pfurr = ($v_wxrzu & 0x0F) << 12; // obf
					$v_qmetl = 3; // obf
					$v_puxlr = 2; // obf
				} // obf
				// Four byte sequence: // obf
				elseif (($v_wxrzu & 0xF8) === 0xF0) { // obf
					$v_pfurr = ($v_wxrzu & 0x07) << 18; // obf
					$v_qmetl = 4; // obf
					$v_puxlr = 3; // obf
				} // obf
				// Invalid byte: // obf
				else { // obf
					$v_ptkgs = false; // obf
					$v_puxlr = 0; // obf
				} // obf
			} // obf
			// Continuation byte: // obf
			else { // obf
				// Check that the byte is valid, then add it to the character: // obf
				if (($v_wxrzu & 0xC0) === 0x80) { // obf
					$v_puxlr--; // obf
					$v_pfurr |= ($v_wxrzu & 0x3F) << ($v_puxlr * 6); // obf
				} // obf
				// If it is invalid, count the sequence as invalid and reprocess the current byte as the start of a sequence: // obf
				else { // obf
					$v_ptkgs = false; // obf
					$v_puxlr = 0; // obf
					$v_pynib--; // obf
				} // obf
			} // obf

			// If we've reached the end of the current byte sequence, append it to Unicode::$v_qsqbp // obf
			if (!$v_puxlr) { // obf
				// Percent encode anything invalid or not in iunreserved // obf
				if ( // obf
					// Invalid sequences // obf
					!$v_ptkgs // obf
					// Non-shortest form sequences are invalid // obf
					|| $v_qmetl > 1 && $v_pfurr <= 0x7F // obf
					|| $v_qmetl > 2 && $v_pfurr <= 0x7FF // obf
					|| $v_qmetl > 3 && $v_pfurr <= 0xFFFF // obf
					// Outside of range of iunreserved codepoints // obf
					|| $v_pfurr < 0x2D // obf
					|| $v_pfurr > 0xEFFFD // obf
					// Noncharacters // obf
					|| ($v_pfurr & 0xFFFE) === 0xFFFE // obf
					|| $v_pfurr >= 0xFDD0 && $v_pfurr <= 0xFDEF // obf
					// Everything else not in iunreserved (this is all BMP) // obf
					|| $v_pfurr === 0x2F // obf
					|| $v_pfurr > 0x39 && $v_pfurr < 0x41 // obf
					|| $v_pfurr > 0x5A && $v_pfurr < 0x61 // obf
					|| $v_pfurr > 0x7A && $v_pfurr < 0x7E // obf
					|| $v_pfurr > 0x7E && $v_pfurr < 0xA0 // obf
					|| $v_pfurr > 0xD7FF && $v_pfurr < 0xF900 // obf
				) { // obf
					for ($v_zvury = $v_fcwml; $v_zvury <= $v_pynib; $v_zvury++) { // obf
						$v_trtxr .= '%' . strtoupper($v_fdehw[$v_zvury]); // obf
					} // obf
				} // obf
				else { // obf
					for ($v_zvury = $v_fcwml; $v_zvury <= $v_pynib; $v_zvury++) { // obf
						$v_trtxr .= chr(hexdec($v_fdehw[$v_zvury])); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// If we have any bytes left over they are invalid (i.e., we are // obf
		// mid-way through a multi-byte sequence) // obf
		if ($v_puxlr) { // obf
			for ($v_zvury = $v_fcwml; $v_zvury < $v_ulbcm; $v_zvury++) { // obf
				$v_trtxr .= '%' . strtoupper($v_fdehw[$v_zvury]); // obf
			} // obf
		} // obf

		return $v_trtxr; // obf
	} // obf

	protected function scheme_normalization() { // obf
		if (isset($v_npvdm->normalization[$v_npvdm->scheme]['iuserinfo']) && $v_npvdm->iuserinfo === $v_npvdm->normalization[$v_npvdm->scheme]['iuserinfo']) { // obf
			$v_npvdm->iuserinfo = null; // obf
		} // obf
		if (isset($v_npvdm->normalization[$v_npvdm->scheme]['ihost']) && $v_npvdm->ihost === $v_npvdm->normalization[$v_npvdm->scheme]['ihost']) { // obf
			$v_npvdm->ihost = null; // obf
		} // obf
		if (isset($v_npvdm->normalization[$v_npvdm->scheme]['port']) && $v_npvdm->port === $v_npvdm->normalization[$v_npvdm->scheme]['port']) { // obf
			$v_npvdm->port = null; // obf
		} // obf
		if (isset($v_npvdm->normalization[$v_npvdm->scheme]['ipath']) && $v_npvdm->ipath === $v_npvdm->normalization[$v_npvdm->scheme]['ipath']) { // obf
			$v_npvdm->ipath = ''; // obf
		} // obf
		if (isset($v_npvdm->ihost) && empty($v_npvdm->ipath)) { // obf
			$v_npvdm->ipath = '/'; // obf
		} // obf
		if (isset($v_npvdm->normalization[$v_npvdm->scheme]['iquery']) && $v_npvdm->iquery === $v_npvdm->normalization[$v_npvdm->scheme]['iquery']) { // obf
			$v_npvdm->iquery = null; // obf
		} // obf
		if (isset($v_npvdm->normalization[$v_npvdm->scheme]['ifragment']) && $v_npvdm->ifragment === $v_npvdm->normalization[$v_npvdm->scheme]['ifragment']) { // obf
			$v_npvdm->ifragment = null; // obf
		} // obf
	} // obf

	/** // obf
	 * Check if the object represents a valid IRI. This needs to be done on each // obf
	 * call as some things change depending on another part of the IRI. // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function is_valid() { // obf
		$v_kmksa = $v_npvdm->iuserinfo !== null || $v_npvdm->ihost !== null || $v_npvdm->port !== null; // obf
		if ($v_npvdm->ipath !== '' && // obf
			( // obf
				$v_kmksa && $v_npvdm->ipath[0] !== '/' || // obf
				( // obf
					$v_npvdm->scheme === null && // obf
					!$v_kmksa && // obf
					strpos($v_npvdm->ipath, ':') !== false && // obf
					(strpos($v_npvdm->ipath, '/') === false ? true : strpos($v_npvdm->ipath, ':') < strpos($v_npvdm->ipath, '/')) // obf
				) // obf
			) // obf
		) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	public function __wakeup() { // obf
		$v_totow = get_class_vars( __CLASS__ ); // obf
		$v_selme = array( 'scheme', 'iuserinfo', 'ihost', 'port', 'ipath', 'iquery', 'ifragment' ); // obf
		$v_tofue = array( 'normalization' ); // obf
		foreach ( $v_totow as $v_ynoyi => $v_kbvdg ) { // obf
			if ( in_array( $v_ynoyi, $v_selme, true ) && ! is_string( $v_npvdm->$v_ynoyi ) ) { // obf
				throw new UnexpectedValueException(); // obf
			} elseif ( in_array( $v_ynoyi, $v_tofue, true ) && ! is_array( $v_npvdm->$v_ynoyi ) ) { // obf
				throw new UnexpectedValueException(); // obf
			} // obf
			$v_npvdm->$v_ynoyi = null; // obf
		} // obf
	} // obf

	/** // obf
	 * Set the entire IRI. Returns true on success, false on failure (if there // obf
	 * are any invalid characters). // obf
	 * // obf
	 * @param string $v_dhmxi // obf
	 * @return bool // obf
	 */ // obf
	protected function set_iri($v_dhmxi) { // obf
		static $v_jysyy; // obf
		if (!$v_jysyy) { // obf
			$v_jysyy = array(); // obf
		} // obf

		if ($v_dhmxi === null) { // obf
			return true; // obf
		} // obf

		$v_dhmxi = (string) $v_dhmxi; // obf

		if (isset($v_jysyy[$v_dhmxi])) { // obf
			list($v_npvdm->scheme, // obf
				 $v_npvdm->iuserinfo, // obf
				 $v_npvdm->ihost, // obf
				 $v_npvdm->port, // obf
				 $v_npvdm->ipath, // obf
				 $v_npvdm->iquery, // obf
				 $v_npvdm->ifragment, // obf
				 $v_skxjl) = $v_jysyy[$v_dhmxi]; // obf
			return $v_skxjl; // obf
		} // obf

		$v_pecaa = $v_npvdm->parse_iri($v_dhmxi); // obf

		$v_skxjl = $v_npvdm->set_scheme($v_pecaa['scheme']) // obf
			&& $v_npvdm->set_authority($v_pecaa['authority']) // obf
			&& $v_npvdm->set_path($v_pecaa['path']) // obf
			&& $v_npvdm->set_query($v_pecaa['query']) // obf
			&& $v_npvdm->set_fragment($v_pecaa['fragment']); // obf

		$v_jysyy[$v_dhmxi] = array($v_npvdm->scheme, // obf
							 $v_npvdm->iuserinfo, // obf
							 $v_npvdm->ihost, // obf
							 $v_npvdm->port, // obf
							 $v_npvdm->ipath, // obf
							 $v_npvdm->iquery, // obf
							 $v_npvdm->ifragment, // obf
							 $v_skxjl); // obf
		return $v_skxjl; // obf
	} // obf

	/** // obf
	 * Set the scheme. Returns true on success, false on failure (if there are // obf
	 * any invalid characters). // obf
	 * // obf
	 * @param string $v_oumhr // obf
	 * @return bool // obf
	 */ // obf
	protected function set_scheme($v_oumhr) { // obf
		if ($v_oumhr === null) { // obf
			$v_npvdm->scheme = null; // obf
		} // obf
		elseif (!preg_match('/^[A-Za-z][0-9A-Za-z+\-.]*$/', $v_oumhr)) { // obf
			$v_npvdm->scheme = null; // obf
			return false; // obf
		} // obf
		else { // obf
			$v_npvdm->scheme = strtolower($v_oumhr); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Set the authority. Returns true on success, false on failure (if there are // obf
	 * any invalid characters). // obf
	 * // obf
	 * @param string $v_xmayx // obf
	 * @return bool // obf
	 */ // obf
	protected function set_authority($v_xmayx) { // obf
		static $v_jysyy; // obf
		if (!$v_jysyy) { // obf
			$v_jysyy = array(); // obf
		} // obf

		if ($v_xmayx === null) { // obf
			$v_npvdm->iuserinfo = null; // obf
			$v_npvdm->ihost = null; // obf
			$v_npvdm->port = null; // obf
			return true; // obf
		} // obf
		if (isset($v_jysyy[$v_xmayx])) { // obf
			list($v_npvdm->iuserinfo, // obf
				 $v_npvdm->ihost, // obf
				 $v_npvdm->port, // obf
				 $v_skxjl) = $v_jysyy[$v_xmayx]; // obf

			return $v_skxjl; // obf
		} // obf

		$v_puxlr = $v_xmayx; // obf
		if (($v_anmdr = strrpos($v_puxlr, '@')) !== false) { // obf
			$v_dhosh = substr($v_puxlr, 0, $v_anmdr); // obf
			$v_puxlr = substr($v_puxlr, $v_anmdr + 1); // obf
		} // obf
		else { // obf
			$v_dhosh = null; // obf
		} // obf

		if (($v_schdn = strpos($v_puxlr, ':', (strpos($v_puxlr, ']') ?: 0))) !== false) { // obf
			$v_tuwrq = substr($v_puxlr, $v_schdn + 1); // obf
			if ($v_tuwrq === false || $v_tuwrq === '') { // obf
				$v_tuwrq = null; // obf
			} // obf
			$v_puxlr = substr($v_puxlr, 0, $v_schdn); // obf
		} // obf
		else { // obf
			$v_tuwrq = null; // obf
		} // obf

		$v_skxjl = $v_npvdm->set_userinfo($v_dhosh) && // obf
				  $v_npvdm->set_host($v_puxlr) && // obf
				  $v_npvdm->set_port($v_tuwrq); // obf

		$v_jysyy[$v_xmayx] = array($v_npvdm->iuserinfo, // obf
								   $v_npvdm->ihost, // obf
								   $v_npvdm->port, // obf
								   $v_skxjl); // obf

		return $v_skxjl; // obf
	} // obf

	/** // obf
	 * Set the iuserinfo. // obf
	 * // obf
	 * @param string $v_dhosh // obf
	 * @return bool // obf
	 */ // obf
	protected function set_userinfo($v_dhosh) { // obf
		if ($v_dhosh === null) { // obf
			$v_npvdm->iuserinfo = null; // obf
		} // obf
		else { // obf
			$v_npvdm->iuserinfo = $v_npvdm->replace_invalid_with_pct_encoding($v_dhosh, '!$&\'()*+,;=:'); // obf
			$v_npvdm->scheme_normalization(); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Set the ihost. Returns true on success, false on failure (if there are // obf
	 * any invalid characters). // obf
	 * // obf
	 * @param string $v_hiaqm // obf
	 * @return bool // obf
	 */ // obf
	protected function set_host($v_hiaqm) { // obf
		if ($v_hiaqm === null) { // obf
			$v_npvdm->ihost = null; // obf
			return true; // obf
		} // obf
		if (substr($v_hiaqm, 0, 1) === '[' && substr($v_hiaqm, -1) === ']') { // obf
			if (Ipv6::check_ipv6(substr($v_hiaqm, 1, -1))) { // obf
				$v_npvdm->ihost = '[' . Ipv6::compress(substr($v_hiaqm, 1, -1)) . ']'; // obf
			} // obf
			else { // obf
				$v_npvdm->ihost = null; // obf
				return false; // obf
			} // obf
		} // obf
		else { // obf
			$v_hiaqm = $v_npvdm->replace_invalid_with_pct_encoding($v_hiaqm, '!$&\'()*+,;='); // obf

			// Lowercase, but ignore pct-encoded sections (as they should // obf
			// remain uppercase). This must be done after the previous step // obf
			// as that can add unescaped characters. // obf
			$v_jxwih = 0; // obf
			$v_kqyqe = strlen($v_hiaqm); // obf
			while (($v_jxwih += strcspn($v_hiaqm, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ%', $v_jxwih)) < $v_kqyqe) { // obf
				if ($v_hiaqm[$v_jxwih] === '%') { // obf
					$v_jxwih += 3; // obf
				} // obf
				else { // obf
					$v_hiaqm[$v_jxwih] = strtolower($v_hiaqm[$v_jxwih]); // obf
					$v_jxwih++; // obf
				} // obf
			} // obf

			$v_npvdm->ihost = $v_hiaqm; // obf
		} // obf

		$v_npvdm->scheme_normalization(); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Set the port. Returns true on success, false on failure (if there are // obf
	 * any invalid characters). // obf
	 * // obf
	 * @param string $v_tuwrq // obf
	 * @return bool // obf
	 */ // obf
	protected function set_port($v_tuwrq) { // obf
		if ($v_tuwrq === null) { // obf
			$v_npvdm->port = null; // obf
			return true; // obf
		} // obf

		if (strspn($v_tuwrq, '0123456789') === strlen($v_tuwrq)) { // obf
			$v_npvdm->port = (int) $v_tuwrq; // obf
			$v_npvdm->scheme_normalization(); // obf
			return true; // obf
		} // obf

		$v_npvdm->port = null; // obf
		return false; // obf
	} // obf

	/** // obf
	 * Set the ipath. // obf
	 * // obf
	 * @param string $v_styos // obf
	 * @return bool // obf
	 */ // obf
	protected function set_path($v_styos) { // obf
		static $v_jysyy; // obf
		if (!$v_jysyy) { // obf
			$v_jysyy = array(); // obf
		} // obf

		$v_styos = (string) $v_styos; // obf

		if (isset($v_jysyy[$v_styos])) { // obf
			$v_npvdm->ipath = $v_jysyy[$v_styos][(int) ($v_npvdm->scheme !== null)]; // obf
		} // obf
		else { // obf
			$v_ptkgs = $v_npvdm->replace_invalid_with_pct_encoding($v_styos, '!$&\'()*+,;=@:/'); // obf
			$v_uwvia = $v_npvdm->remove_dot_segments($v_ptkgs); // obf

			$v_jysyy[$v_styos] = array($v_ptkgs, $v_uwvia); // obf
			$v_npvdm->ipath = ($v_npvdm->scheme !== null) ? $v_uwvia : $v_ptkgs; // obf
		} // obf
		$v_npvdm->scheme_normalization(); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Set the iquery. // obf
	 * // obf
	 * @param string $v_lswjh // obf
	 * @return bool // obf
	 */ // obf
	protected function set_query($v_lswjh) { // obf
		if ($v_lswjh === null) { // obf
			$v_npvdm->iquery = null; // obf
		} // obf
		else { // obf
			$v_npvdm->iquery = $v_npvdm->replace_invalid_with_pct_encoding($v_lswjh, '!$&\'()*+,;=:@/?', true); // obf
			$v_npvdm->scheme_normalization(); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Set the ifragment. // obf
	 * // obf
	 * @param string $v_mstsw // obf
	 * @return bool // obf
	 */ // obf
	protected function set_fragment($v_mstsw) { // obf
		if ($v_mstsw === null) { // obf
			$v_npvdm->ifragment = null; // obf
		} // obf
		else { // obf
			$v_npvdm->ifragment = $v_npvdm->replace_invalid_with_pct_encoding($v_mstsw, '!$&\'()*+,;=:@/?'); // obf
			$v_npvdm->scheme_normalization(); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * Convert an IRI to a URI (or parts thereof) // obf
	 * // obf
	 * @param string|bool $v_dhmxi IRI to convert (or false from {@see \WpOrg\Requests\Iri::get_iri()}) // obf
	 * @return string|false URI if IRI is valid, false otherwise. // obf
	 */ // obf
	protected function to_uri($v_dhmxi) { // obf
		if (!is_string($v_dhmxi)) { // obf
			return false; // obf
		} // obf

		static $v_morxv; // obf
		if (!$v_morxv) { // obf
			$v_morxv = implode('', range("\x80", "\xFF")); // obf
		} // obf

		$v_jxwih = 0; // obf
		$v_kqyqe = strlen($v_dhmxi); // obf
		while (($v_jxwih += strcspn($v_dhmxi, $v_morxv, $v_jxwih)) < $v_kqyqe) { // obf
			$v_dhmxi = substr_replace($v_dhmxi, sprintf('%%%02X', ord($v_dhmxi[$v_jxwih])), $v_jxwih, 1); // obf
			$v_jxwih += 3; // obf
			$v_kqyqe += 2; // obf
		} // obf

		return $v_dhmxi; // obf
	} // obf

	/** // obf
	 * Get the complete IRI // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	protected function get_iri() { // obf
		if (!$v_npvdm->is_valid()) { // obf
			return false; // obf
		} // obf

		$v_dhmxi = ''; // obf
		if ($v_npvdm->scheme !== null) { // obf
			$v_dhmxi .= $v_npvdm->scheme . ':'; // obf
		} // obf
		if (($v_kshbu = $v_npvdm->get_iauthority()) !== null) { // obf
			$v_dhmxi .= '//' . $v_kshbu; // obf
		} // obf
		$v_dhmxi .= $v_npvdm->ipath; // obf
		if ($v_npvdm->iquery !== null) { // obf
			$v_dhmxi .= '?' . $v_npvdm->iquery; // obf
		} // obf
		if ($v_npvdm->ifragment !== null) { // obf
			$v_dhmxi .= '#' . $v_npvdm->ifragment; // obf
		} // obf

		return $v_dhmxi; // obf
	} // obf

	/** // obf
	 * Get the complete URI // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	protected function get_uri() { // obf
		return $v_npvdm->to_uri($v_npvdm->get_iri()); // obf
	} // obf

	/** // obf
	 * Get the complete iauthority // obf
	 * // obf
	 * @return string|null // obf
	 */ // obf
	protected function get_iauthority() { // obf
		if ($v_npvdm->iuserinfo === null && $v_npvdm->ihost === null && $v_npvdm->port === null) { // obf
			return null; // obf
		} // obf

		$v_kshbu = ''; // obf
		if ($v_npvdm->iuserinfo !== null) { // obf
			$v_kshbu .= $v_npvdm->iuserinfo . '@'; // obf
		} // obf
		if ($v_npvdm->ihost !== null) { // obf
			$v_kshbu .= $v_npvdm->ihost; // obf
		} // obf
		if ($v_npvdm->port !== null) { // obf
			$v_kshbu .= ':' . $v_npvdm->port; // obf
		} // obf
		return $v_kshbu; // obf
	} // obf

	/** // obf
	 * Get the complete authority // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	protected function get_authority() { // obf
		$v_kshbu = $v_npvdm->get_iauthority(); // obf
		if (is_string($v_kshbu)) { // obf
			return $v_npvdm->to_uri($v_kshbu); // obf
		} // obf
		else { // obf
			return $v_kshbu; // obf
		} // obf
	} // obf
} // obf