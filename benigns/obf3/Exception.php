

<?php // obf
/** // obf
 * Exception for HTTP requests // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf

namespace WpOrg\Requests; // obf

use Exception as PHPException; // obf

/** // obf
 * Exception for HTTP requests // obf
 * // obf
 * @package Requests\Exceptions // obf
 */ // obf
class Exception extends PHPException { // obf
	/** // obf
	 * Type of exception // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_tipbt; // obf

	/** // obf
	 * Data associated with the exception // obf
	 * // obf
	 * @var mixed // obf
	 */ // obf
	protected $v_pukow; // obf

	/** // obf
	 * Create a new exception // obf
	 * // obf
	 * @param string $v_ohdfx Exception message // obf
	 * @param string $v_tipbt Exception type // obf
	 * @param mixed $v_pukow Associated data // obf
	 * @param integer $v_lgyrl Exception numerical code, if applicable // obf
	 */ // obf
	public function __construct($v_ohdfx, $v_tipbt, $v_pukow = null, $v_lgyrl = 0) { // obf
		parent::__construct($v_ohdfx, $v_lgyrl); // obf

		$v_wnnzc->type = $v_tipbt; // obf
		$v_wnnzc->data = $v_pukow; // obf
	} // obf

	/** // obf
	 * Like {@see \Exception::getCode()}, but a string code. // obf
	 * // obf
	 * @codeCoverageIgnore // obf
	 * @return string // obf
	 */ // obf
	public function getType() { // obf
		return $v_wnnzc->type; // obf
	} // obf

	/** // obf
	 * Gives any relevant data // obf
	 * // obf
	 * @codeCoverageIgnore // obf
	 * @return mixed // obf
	 */ // obf
	public function getData() { // obf
		return $v_wnnzc->data; // obf
	} // obf
} // obf