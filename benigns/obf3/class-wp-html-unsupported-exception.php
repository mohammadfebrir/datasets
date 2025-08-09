

<?php // obf
/** // obf
 * HTML API: WP_HTML_Unsupported_Exception class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML processor during HTML parsing // obf
 * for indicating that a given operation is unsupported. // obf
 * // obf
 * This class is designed for internal use by the HTML processor. // obf
 * // obf
 * The HTML API aims to operate in compliance with the HTML5 // obf
 * specification, but does not implement the full specification. // obf
 * In cases where it lacks support it should not cause breakage // obf
 * or unexpected behavior. In the cases where it recognizes that // obf
 * it cannot proceed, this class is used to abort from any // obf
 * operation and signify that the given HTML cannot be processed. // obf
 * // obf
 * @since 6.4.0 // obf
 * @since 6.7.0 Gained contextual information for use in debugging parse failures. // obf
 * // obf
 * @access private // obf
 * // obf
 * @see WP_HTML_Processor // obf
 */ // obf
class WP_HTML_Unsupported_Exception extends Exception { // obf
	/** // obf
	 * Name of the matched token when the exception was raised, // obf
	 * if matched on a token. // obf
	 * // obf
	 * This does not imply that the token itself was unsupported, but it // obf
	 * may have been the case that the token triggered part of the HTML // obf
	 * parsing that isn't supported, such as the adoption agency algorithm. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_innce; // obf

	/** // obf
	 * Number of bytes into the input HTML document where the parser was // obf
	 * parsing when the exception was raised. // obf
	 * // obf
	 * Use this to reconstruct context for the failure. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_ydtzt; // obf

	/** // obf
	 * Full raw text of the matched token when the exception was raised, // obf
	 * if matched on a token. // obf
	 * // obf
	 * Whereas the `$v_innce` will be normalized, this contains the full // obf
	 * raw text of the token, including original casing, duplicated attributes, // obf
	 * and other syntactic variations that are normally abstracted in the HTML API. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_xdblu; // obf

	/** // obf
	 * Stack of open elements when the exception was raised. // obf
	 * // obf
	 * Use this to trace the parsing circumstances which led to the exception. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	public $v_soaek = array(); // obf

	/** // obf
	 * List of active formatting elements when the exception was raised. // obf
	 * // obf
	 * Use this to trace the parsing circumstances which led to the exception. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	public $v_tecms = array(); // obf

	/** // obf
	 * Constructor function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string   $v_tdxxt                    Brief message explaining what is unsupported, the reason this exception was raised. // obf
	 * @param string   $v_innce                 Normalized name of matched token when this exception was raised. // obf
	 * @param int      $v_ydtzt                   Number of bytes into source HTML document where matched token starts. // obf
	 * @param string   $v_xdblu                      Full raw text of matched token when this exception was raised. // obf
	 * @param string[] $v_soaek     Stack of open elements when this exception was raised. // obf
	 * @param string[] $v_tecms List of active formatting elements when this exception was raised. // obf
	 */ // obf
	public function __construct( string $v_tdxxt, string $v_innce, int $v_ydtzt, string $v_xdblu, array $v_soaek, array $v_tecms ) { // obf
		parent::__construct( $v_tdxxt ); // obf

		$v_bmamx->token_name = $v_innce; // obf
		$v_bmamx->token_at   = $v_ydtzt; // obf
		$v_bmamx->token      = $v_xdblu; // obf

		$v_bmamx->stack_of_open_elements     = $v_soaek; // obf
		$v_bmamx->active_formatting_elements = $v_tecms; // obf
	} // obf
} // obf