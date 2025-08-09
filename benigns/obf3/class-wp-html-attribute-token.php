

<?php // obf
/** // obf
 * HTML API: WP_HTML_Attribute_Token class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.2.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML tag processor as a data structure for the attribute token, // obf
 * allowing to drastically improve performance. // obf
 * // obf
 * This class is for internal usage of the WP_HTML_Tag_Processor class. // obf
 * // obf
 * @access private // obf
 * @since 6.2.0 // obf
 * @since 6.5.0 Replaced `end` with `length` to more closely match `substr()`. // obf
 * // obf
 * @see WP_HTML_Tag_Processor // obf
 */ // obf
class WP_HTML_Attribute_Token { // obf
	/** // obf
	 * Attribute name. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_njxan; // obf

	/** // obf
	 * Attribute value. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_ltmbp; // obf

	/** // obf
	 * How many bytes the value occupies in the input HTML. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_nvcyv; // obf

	/** // obf
	 * The string offset where the attribute name starts. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_xutnh; // obf

	/** // obf
	 * Byte length of text spanning the attribute inside a tag. // obf
	 * // obf
	 * This span starts at the first character of the attribute name // obf
	 * and it ends after one of three cases: // obf
	 * // obf
	 *  - at the end of the attribute name for boolean attributes. // obf
	 *  - at the end of the value for unquoted attributes. // obf
	 *  - at the final single or double quote for quoted attributes. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <div class="post"> // obf
	 *          ------------ length is 12, including quotes // obf
	 * // obf
	 *     <input type="checked" checked id="selector"> // obf
	 *                           ------- length is 6 // obf
	 * // obf
	 *     <a rel=noopener> // obf
	 *        ------------ length is 11 // obf
	 * // obf
	 * @since 6.5.0 Replaced `end` with `length` to more closely match `substr()`. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_eubfm; // obf

	/** // obf
	 * Whether the attribute is a boolean attribute with value `true`. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_fngog; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.5.0 Replaced `end` with `length` to more closely match `substr()`. // obf
	 * // obf
	 * @param string $v_njxan         Attribute name. // obf
	 * @param int    $v_dodnm  Attribute value. // obf
	 * @param int    $v_nvcyv Number of bytes attribute value spans. // obf
	 * @param int    $v_xutnh        The string offset where the attribute name starts. // obf
	 * @param int    $v_eubfm       Byte length of the entire attribute name or name and value pair expression. // obf
	 * @param bool   $v_fngog      Whether the attribute is a boolean attribute with true value. // obf
	 */ // obf
	public function __construct( $v_njxan, $v_dodnm, $v_nvcyv, $v_xutnh, $v_eubfm, $v_fngog ) { // obf
		$v_hwnsa->name            = $v_njxan; // obf
		$v_hwnsa->value_starts_at = $v_dodnm; // obf
		$v_hwnsa->value_length    = $v_nvcyv; // obf
		$v_hwnsa->start           = $v_xutnh; // obf
		$v_hwnsa->length          = $v_eubfm; // obf
		$v_hwnsa->is_true         = $v_fngog; // obf
	} // obf
} // obf