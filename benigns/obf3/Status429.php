

<?php // obf
/** // obf
 * Exception for 429 Too Many Requests responses // obf
 * // obf
 * @link https://tools.ietf.org/html/draft-nottingham-http-new-status-04 // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 429 Too Many Requests responses // obf
 * // obf
 * @link https://tools.ietf.org/html/draft-nottingham-http-new-status-04 // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status429 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_ialfd = 429; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_bmntz = 'Too Many Requests'; // obf
} // obf