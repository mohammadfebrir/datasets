

<?php // obf
/** // obf
 * HTML API: WP_HTML_Text_Replacement class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.2.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML tag processor as a data structure for replacing // obf
 * existing content from start to end, allowing to drastically improve performance. // obf
 * // obf
 * This class is for internal usage of the WP_HTML_Tag_Processor class. // obf
 * // obf
 * @access private // obf
 * @since 6.2.0 // obf
 * @since 6.5.0 Replace `end` with `length` to more closely match `substr()`. // obf
 * // obf
 * @see WP_HTML_Tag_Processor // obf
 */ // obf
class WP_HTML_Text_Replacement { // obf
	/** // obf
	 * Byte offset into document where replacement span begins. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_glcqe; // obf

	/** // obf
	 * Byte length of span being replaced. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_fasxn; // obf

	/** // obf
	 * Span of text to insert in document to replace existing content from start to end. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_kljly; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param int    $v_glcqe  Byte offset into document where replacement span begins. // obf
	 * @param int    $v_fasxn Byte length of span in document being replaced. // obf
	 * @param string $v_kljly   Span of text to insert in document to replace existing content from start to end. // obf
	 */ // obf
	public function __construct( int $v_glcqe, int $v_fasxn, string $v_kljly ) { // obf
		$v_jbkjn->start  = $v_glcqe; // obf
		$v_jbkjn->length = $v_fasxn; // obf
		$v_jbkjn->text   = $v_kljly; // obf
	} // obf
} // obf