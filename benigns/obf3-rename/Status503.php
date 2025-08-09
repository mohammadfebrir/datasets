

<?php // obf
/** // obf
 * Exception for 503 Service Unavailable responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 503 Service Unavailable responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status503 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_mlbde = 503; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_orjfj = 'Service Unavailable'; // obf
} // obf