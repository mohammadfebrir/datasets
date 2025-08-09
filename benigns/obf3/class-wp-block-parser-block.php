

<?php // obf
/** // obf
 * Block Serialization Parser // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Class WP_Block_Parser_Block // obf
 * // obf
 * Holds the block structure in memory // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
class WP_Block_Parser_Block { // obf
	/** // obf
	 * Name of block // obf
	 * // obf
	 * @example "core/paragraph" // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qkrwk; // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf

	/** // obf
	 * Optional set of attributes from block comment delimiters // obf
	 * // obf
	 * @example null // obf
	 * @example array( 'columns' => 3 ) // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var array|null // obf
	 */ // obf
	public $v_upwca; // obf

	/** // obf
	 * List of inner blocks (of this same class) // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_Block_Parser_Block[] // obf
	 */ // obf
	public $v_fjvzs; // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf

	/** // obf
	 * Resultant HTML from inside block comment delimiters // obf
	 * after removing inner blocks // obf
	 * // obf
	 * @example "...Just <!-- wp:test /--> testing..." -> "Just testing..." // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_lsgxi; // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf

	/** // obf
	 * List of string fragments and null markers where inner blocks were found // obf
	 * // obf
	 * @example array( // obf
	 *   'innerHTML'    => 'BeforeInnerAfter', // obf
	 *   'innerBlocks'  => array( block, block ), // obf
	 *   'innerContent' => array( 'Before', null, 'Inner', null, 'After' ), // obf
	 * ) // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_mnzxb; // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Will populate object properties from the provided arguments. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_zxjfa          Name of block. // obf
	 * @param array  $v_upwca         Optional set of attributes from block comment delimiters. // obf
	 * @param array  $v_knkgr  List of inner blocks (of this same class). // obf
	 * @param string $v_yrwni    Resultant HTML from inside block comment delimiters after removing inner blocks. // obf
	 * @param array  $v_wqbtu List of string fragments and null markers where inner blocks were found. // obf
	 */ // obf
	public function __construct( $v_zxjfa, $v_upwca, $v_knkgr, $v_yrwni, $v_wqbtu ) { // obf
		$v_utnca->blockName    = $v_zxjfa;          // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf
		$v_utnca->attrs        = $v_upwca; // obf
		$v_utnca->innerBlocks  = $v_knkgr;  // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf
		$v_utnca->innerHTML    = $v_yrwni;    // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf
		$v_utnca->innerContent = $v_wqbtu; // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf
	} // obf
} // obf