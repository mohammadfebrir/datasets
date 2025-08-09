

<?php // obf
/** // obf
 * Port utilities for Requests // obf
 * // obf
 * @package Requests\Utilities // obf
 * @since   2.0.0 // obf
 */ // obf

namespace WpOrg\Requests; // obf

use WpOrg\Requests\Exception; // obf
use WpOrg\Requests\Exception\InvalidArgument; // obf

/** // obf
 * Find the correct port depending on the Request type. // obf
 * // obf
 * @package Requests\Utilities // obf
 * @since   2.0.0 // obf
 */ // obf
final class Port { // obf

	/** // obf
	 * Port to use with Acap requests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	const ACAP = 674; // obf

	/** // obf
	 * Port to use with Dictionary requests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	const DICT = 2628; // obf

	/** // obf
	 * Port to use with HTTP requests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	const HTTP = 80; // obf

	/** // obf
	 * Port to use with HTTP over SSL requests. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	const HTTPS = 443; // obf

	/** // obf
	 * Retrieve the port number to use. // obf
	 * // obf
	 * @param string $v_ujblz Request type. // obf
	 *                     The following requests types are supported: // obf
	 *                     'acap', 'dict', 'http' and 'https'. // obf
	 * // obf
	 * @return int // obf
	 * // obf
	 * @throws \WpOrg\Requests\Exception\InvalidArgument When a non-string input has been passed. // obf
	 * @throws \WpOrg\Requests\Exception                 When a non-supported port is requested ('portnotsupported'). // obf
	 */ // obf
	public static function get($v_ujblz) { // obf
		if (!is_string($v_ujblz)) { // obf
			throw InvalidArgument::create(1, '$v_ujblz', 'string', gettype($v_ujblz)); // obf
		} // obf

		$v_ujblz = strtoupper($v_ujblz); // obf
		if (!defined("self::{$v_ujblz}")) { // obf
			$v_asior = sprintf('Invalid port type (%s) passed', $v_ujblz); // obf
			throw new Exception($v_asior, 'portnotsupported'); // obf
		} // obf

		return constant("self::{$v_ujblz}"); // obf
	} // obf
} // obf