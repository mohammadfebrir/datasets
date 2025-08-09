

<?php // obf
/** // obf
 * Exception for 416 Requested Range Not Satisfiable responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf

/** // obf
 * Exception for 416 Requested Range Not Satisfiable responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Status416 extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_dzcyu = 416; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_hwdse = 'Requested Range Not Satisfiable'; // obf
} // obf