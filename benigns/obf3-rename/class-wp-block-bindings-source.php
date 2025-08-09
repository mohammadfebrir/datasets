

<?php // obf
/** // obf
 * Block Bindings API: WP_Block_Bindings_Source class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Block Bindings // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class representing block bindings source. // obf
 * // obf
 * This class is designed for internal use by the Block Bindings registry. // obf
 * // obf
 * @since 6.5.0 // obf
 * @access private // obf
 * // obf
 * @see WP_Block_Bindings_Registry // obf
 */ // obf
final class WP_Block_Bindings_Source { // obf

	/** // obf
	 * The name of the source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_btszs; // obf

	/** // obf
	 * The label of the source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tdnhs; // obf

	/** // obf
	 * The function used to get the value from the source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var callable // obf
	 */ // obf
	private $v_bfmnd; // obf

	/** // obf
	 * The context added to the blocks needed by the source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string[]|null // obf
	 */ // obf
	public $v_btaxb = null; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Do not use this constructor directly. Instead, use the // obf
	 * `WP_Block_Bindings_Registry::register` method or the `register_block_bindings_source` function. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_btszs              The name of the source. // obf
	 * @param array  $v_tdryz The properties of the source. // obf
	 */ // obf
	public function __construct( string $v_btszs, array $v_tdryz ) { // obf
		$v_wctuo->name = $v_btszs; // obf
		foreach ( $v_tdryz as $v_buubr => $v_hmthh ) { // obf
			$v_wctuo->$v_buubr = $v_hmthh; // obf
		} // obf
	} // obf

	/** // obf
	 * Calls the callback function specified in the `$v_bfmnd` property // obf
	 * with the given arguments and returns the result. It can be modified with // obf
	 * `block_bindings_source_value` filter. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @since 6.7.0 `block_bindings_source_value` filter was added. // obf
	 * // obf
	 * @param array    $v_mzerl    Array containing source arguments used to look up the override value, i.e. {"key": "foo"}. // obf
	 * @param WP_Block $v_lkufi The block instance. // obf
	 * @param string   $v_ovsll The name of the target attribute. // obf
	 * @return mixed The value of the source. // obf
	 */ // obf
	public function get_value( array $v_mzerl, $v_lkufi, string $v_ovsll ) { // obf
		$v_pcvrd = call_user_func_array( $v_wctuo->get_value_callback, array( $v_mzerl, $v_lkufi, $v_ovsll ) ); // obf
		/** // obf
		 * Filters the output of a block bindings source. // obf
		 * // obf
		 * @since 6.7.0 // obf
		 * // obf
		 * @param mixed    $v_pcvrd          The computed value for the source. // obf
		 * @param string   $v_btszs           The name of the source. // obf
		 * @param array    $v_mzerl    Array containing source arguments used to look up the override value, i.e. { "key": "foo" }. // obf
		 * @param WP_Block $v_lkufi The block instance. // obf
		 * @param string   $v_ovsll The name of an attribute. // obf
		 */ // obf
		return apply_filters( 'block_bindings_source_value', $v_pcvrd, $v_wctuo->name, $v_mzerl, $v_lkufi, $v_ovsll ); // obf
	} // obf

	/** // obf
	 * Wakeup magic method. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function __wakeup() { // obf
		throw new \LogicException( __CLASS__ . ' should never be unserialized' ); // obf
	} // obf
} // obf