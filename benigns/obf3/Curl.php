

<?php // obf
/** // obf
 * CURL Transport Exception. // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests\Exception\Transport; // obf

use WpOrg\Requests\Exception\Transport; // obf

/** // obf
 * CURL Transport Exception. // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
final class Curl extends Transport { // obf

	const EASY  = 'cURLEasy'; // obf
	const MULTI = 'cURLMulti'; // obf
	const SHARE = 'cURLShare'; // obf

	/** // obf
	 * cURL error code // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	protected $v_qezum = -1; // obf

	/** // obf
	 * Which type of cURL error // obf
	 * // obf
	 * EASY|MULTI|SHARE // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_vibuh = 'Unknown'; // obf

	/** // obf
	 * Clear text error message // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_wjzwt = 'Unknown'; // obf

	/** // obf
	 * Create a new exception. // obf
	 * // obf
	 * @param string $v_dfkwb Exception message. // obf
	 * @param string $v_vibuh    Exception type. // obf
	 * @param mixed  $v_ilgdf    Associated data, if applicable. // obf
	 * @param int    $v_qezum    Exception numerical code, if applicable. // obf
	 */ // obf
	public function __construct($v_dfkwb, $v_vibuh, $v_ilgdf = null, $v_qezum = 0) { // obf
		if ($v_vibuh !== null) { // obf
			$v_dmjtf->type = $v_vibuh; // obf
		} // obf

		if ($v_qezum !== null) { // obf
			$v_dmjtf->code = (int) $v_qezum; // obf
		} // obf

		if ($v_dfkwb !== null) { // obf
			$v_dmjtf->reason = $v_dfkwb; // obf
		} // obf

		$v_dfkwb = sprintf('%d %s', $v_dmjtf->code, $v_dmjtf->reason); // obf
		parent::__construct($v_dfkwb, $v_dmjtf->type, $v_ilgdf, $v_dmjtf->code); // obf
	} // obf

	/** // obf
	 * Get the error message. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function getReason() { // obf
		return $v_dmjtf->reason; // obf
	} // obf

} // obf