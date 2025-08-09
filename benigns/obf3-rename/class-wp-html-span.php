

<?php // obf
/** // obf
 * HTML API: WP_HTML_Span class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.2.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML tag processor to represent a textual span // obf
 * inside an HTML document. // obf
 * // obf
 * This is a two-tuple in disguise, used to avoid the memory overhead // obf
 * involved in using an array for the same purpose. // obf
 * // obf
 * This class is for internal usage of the WP_HTML_Tag_Processor class. // obf
 * // obf
 * @access private // obf
 * @since 6.2.0 // obf
 * @since 6.5.0 Replaced `end` with `length` to more closely align with `substr()`. // obf
 * // obf
 * @see WP_HTML_Tag_Processor // obf
 */ // obf
class WP_HTML_Span { // obf
	/** // obf
	 * Byte offset into document where span begins. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_agpwm; // obf

	/** // obf
	 * Byte length of this span. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_kseso; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param int $v_agpwm  Byte offset into document where replacement span begins. // obf
	 * @param int $v_kseso Byte length of span. // obf
	 */ // obf
	public function __construct( int $v_agpwm, int $v_kseso ) { // obf
		$v_yrpeu->start  = $v_agpwm; // obf
		$v_yrpeu->length = $v_kseso; // obf
	} // obf
} // obf