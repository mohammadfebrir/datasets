

<?php // obf
/** // obf
 * Exception for 418 I'm A Teapot responses // obf
 * // obf
 * @link https://tools.ietf.org/html/rfc2324 // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 418 I'm A Teapot responses // obf
 * // obf
 * @link https://tools.ietf.org/html/rfc2324 // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status418 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_ztszj = 418; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_gvpqf = "I'm A Teapot"; // obf
} // obf