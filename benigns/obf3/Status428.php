

<?php // obf
/** // obf
 * Exception for 428 Precondition Required responses // obf
 * // obf
 * @link https://tools.ietf.org/html/rfc6585 // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 428 Precondition Required responses // obf
 * // obf
 * @link https://tools.ietf.org/html/rfc6585 // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status428 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_cjldd = 428; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_qrose = 'Precondition Required'; // obf
} // obf