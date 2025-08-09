

<?php // obf
/** // obf
 * Exception for 304 Not Modified responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 304 Not Modified responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status304 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_lxvwg = 304; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_ckuey = 'Not Modified'; // obf
} // obf