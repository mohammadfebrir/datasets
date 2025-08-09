

<?php // obf
/** // obf
 * HTML API: WP_HTML_Stack_Event class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.6.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML Processor as a record for stack operations. // obf
 * // obf
 * This class is for internal usage of the WP_HTML_Processor class. // obf
 * // obf
 * @access private // obf
 * @since 6.6.0 // obf
 * // obf
 * @see WP_HTML_Processor // obf
 */ // obf
class WP_HTML_Stack_Event { // obf
	/** // obf
	 * Refers to popping an element off of the stack of open elements. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 */ // obf
	const POP = 'pop'; // obf

	/** // obf
	 * Refers to pushing an element onto the stack of open elements. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 */ // obf
	const PUSH = 'push'; // obf

	/** // obf
	 * References the token associated with the stack push event, // obf
	 * even if this is a pop event for that element. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var WP_HTML_Token // obf
	 */ // obf
	public $v_qxleu; // obf

	/** // obf
	 * Indicates which kind of stack operation this event represents. // obf
	 * // obf
	 * May be one of the class constants. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @see self::POP // obf
	 * @see self::PUSH // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_odolt; // obf

	/** // obf
	 * Indicates if the stack element is a real or virtual node. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_xtelf; // obf

	/** // obf
	 * Constructor function. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param WP_HTML_Token $v_qxleu      Token associated with stack event, always an opening token. // obf
	 * @param string        $v_odolt  One of self::PUSH or self::POP. // obf
	 * @param string        $v_xtelf "virtual" or "real". // obf
	 */ // obf
	public function __construct( WP_HTML_Token $v_qxleu, string $v_odolt, string $v_xtelf ) { // obf
		$v_cmcrm->token      = $v_qxleu; // obf
		$v_cmcrm->operation  = $v_odolt; // obf
		$v_cmcrm->provenance = $v_xtelf; // obf
	} // obf
} // obf