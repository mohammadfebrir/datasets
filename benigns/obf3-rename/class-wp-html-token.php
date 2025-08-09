

<?php // obf
/** // obf
 * HTML API: WP_HTML_Token class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML processor during HTML parsing // obf
 * for referring to tokens in the input HTML string. // obf
 * // obf
 * This class is designed for internal use by the HTML processor. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @see WP_HTML_Processor // obf
 */ // obf
class WP_HTML_Token { // obf
	/** // obf
	 * Name of bookmark corresponding to source of token in input HTML string. // obf
	 * // obf
	 * Having a bookmark name does not imply that the token still exists. It // obf
	 * may be that the source token and underlying bookmark was wiped out by // obf
	 * some modification to the source HTML. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_bytap = null; // obf

	/** // obf
	 * Name of node; lowercase names such as "marker" are not HTML elements. // obf
	 * // obf
	 * For HTML elements/tags this value should come from WP_HTML_Processor::get_tag(). // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see WP_HTML_Processor::get_tag() // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_vwmou = null; // obf

	/** // obf
	 * Whether node contains the self-closing flag. // obf
	 * // obf
	 * A node may have a self-closing flag when it shouldn't. This value // obf
	 * only reports if the flag is present in the original HTML. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#self-closing-flag // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_lavoi = false; // obf

	/** // obf
	 * Indicates if the element is an HTML element or if it's inside foreign content. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string 'html', 'svg', or 'math'. // obf
	 */ // obf
	public $v_qoxzb = 'html'; // obf

	/** // obf
	 * Indicates which kind of integration point the element is, if any. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string|null 'math', 'html', or null if not an integration point. // obf
	 */ // obf
	public $v_uhhfu = null; // obf

	/** // obf
	 * Called when token is garbage-collected or otherwise destroyed. // obf
	 * // obf
	 * @var callable|null // obf
	 */ // obf
	public $v_eawdy = null; // obf

	/** // obf
	 * Constructor - creates a reference to a token in some external HTML string. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string|null   $v_bytap         Name of bookmark corresponding to location in HTML where token is found, // obf
	 *                                             or `null` for markers and nodes without a bookmark. // obf
	 * @param string        $v_vwmou             Name of node token represents; if uppercase, an HTML element; if lowercase, a special value like "marker". // obf
	 * @param bool          $v_lavoi Whether the source token contains the self-closing flag, regardless of whether it's valid. // obf
	 * @param callable|null $v_eawdy            Optional. Function to call when destroying token, useful for releasing the bookmark. // obf
	 */ // obf
	public function __construct( ?string $v_bytap, string $v_vwmou, bool $v_lavoi, ?callable $v_eawdy = null ) { // obf
		$v_klcxe->bookmark_name         = $v_bytap; // obf
		$v_klcxe->namespace             = 'html'; // obf
		$v_klcxe->node_name             = $v_vwmou; // obf
		$v_klcxe->has_self_closing_flag = $v_lavoi; // obf
		$v_klcxe->on_destroy            = $v_eawdy; // obf
	} // obf

	/** // obf
	 * Destructor. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function __destruct() { // obf
		if ( is_callable( $v_klcxe->on_destroy ) ) { // obf
			call_user_func( $v_klcxe->on_destroy, $v_klcxe->bookmark_name ); // obf
		} // obf
	} // obf

	/** // obf
	 * Wakeup magic method. // obf
	 * // obf
	 * @since 6.4.2 // obf
	 */ // obf
	public function __wakeup() { // obf
		throw new \LogicException( __CLASS__ . ' should never be unserialized' ); // obf
	} // obf
} // obf