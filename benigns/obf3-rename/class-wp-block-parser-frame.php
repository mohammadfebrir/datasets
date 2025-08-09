

<?php // obf
/** // obf
 * Block Serialization Parser // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Class WP_Block_Parser_Frame // obf
 * // obf
 * Holds partial blocks in memory while parsing // obf
 * // obf
 * @internal // obf
 * @since 5.0.0 // obf
 */ // obf
class WP_Block_Parser_Frame { // obf
	/** // obf
	 * Full or partial block // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_Block_Parser_Block // obf
	 */ // obf
	public $v_stzeq; // obf

	/** // obf
	 * Byte offset into document for start of parse token // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_styoy; // obf

	/** // obf
	 * Byte length of entire parse token string // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_fmiyw; // obf

	/** // obf
	 * Byte offset into document for after parse token ends // obf
	 * (used during reconstruction of stack into parse production) // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_cevig; // obf

	/** // obf
	 * Byte offset into document where leading HTML before token starts // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_hxwmw; // obf

	/** // obf
	 * Constructor // obf
	 * // obf
	 * Will populate object properties from the provided arguments. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_Block_Parser_Block $v_stzeq              Full or partial block. // obf
	 * @param int                   $v_styoy        Byte offset into document for start of parse token. // obf
	 * @param int                   $v_fmiyw       Byte length of entire parse token string. // obf
	 * @param int|null              $v_cevig        Optional. Byte offset into document for after parse token ends. Default null. // obf
	 * @param int|null              $v_hxwmw Optional. Byte offset into document where leading HTML before token starts. // obf
	 *                                                  Default null. // obf
	 */ // obf
	public function __construct( $v_stzeq, $v_styoy, $v_fmiyw, $v_cevig = null, $v_hxwmw = null ) { // obf
		$v_pfios->block              = $v_stzeq; // obf
		$v_pfios->token_start        = $v_styoy; // obf
		$v_pfios->token_length       = $v_fmiyw; // obf
		$v_pfios->prev_offset        = isset( $v_cevig ) ? $v_cevig : $v_styoy + $v_fmiyw; // obf
		$v_pfios->leading_html_start = $v_hxwmw; // obf
	} // obf
} // obf