

<?php // obf
/** // obf
 * Exception for 414 Request-URI Too Large responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 414 Request-URI Too Large responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status414 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_ahdit = 414; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_bllrz = 'Request-URI Too Large'; // obf
} // obf