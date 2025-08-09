

<?php // obf
/** // obf
 * Exception for 401 Unauthorized responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 401 Unauthorized responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status401 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_bdfnh = 401; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_zvvyx = 'Unauthorized'; // obf
} // obf