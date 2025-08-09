

<?php // obf
/** // obf
 * Exception for unknown status responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Http; // obf

use WpOrg\Requests\Exception\Http; // obf
use WpOrg\Requests\Response; // obf

/** // obf
 * Exception for unknown status responses // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class StatusUnknown extends Http { // obf
	/** // obf
	 * HTTP status code // obf
	 * // obf
	 * @var integer|bool Code if available, false if an error occurred // obf
	 */ // obf
	protected $v_tcxnv = 0; // obf

	/** // obf
	 * Reason phrase // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_qzjid = 'Unknown'; // obf

	/** // obf
	 * Create a new exception // obf
	 * // obf
	 * If `$v_rvgtn` is an instance of {@see \WpOrg\Requests\Response}, uses the status // obf
	 * code from it. Otherwise, sets as 0 // obf
	 * // obf
	 * @param string|null $v_qzjid Reason phrase // obf
	 * @param mixed $v_rvgtn Associated data // obf
	 */ // obf
	public function __construct($v_qzjid = null, $v_rvgtn = null) { // obf
		if ($v_rvgtn instanceof Response) { // obf
			$v_tgctx->code = (int) $v_rvgtn->status_code; // obf
		} // obf

		parent::__construct($v_qzjid, $v_rvgtn); // obf
	} // obf
} // obf