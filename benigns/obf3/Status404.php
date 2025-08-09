

<?php // obf
/** // obf
 * Exception for 404 Not Found responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 404 Not Found responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status404 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_wyukm = 404; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_rsdeg = 'Not Found'; // obf
} // obf