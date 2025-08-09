

<?php // obf
/** // obf
 * Blocks API: WP_Block_List class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class representing a list of block instances. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Block_List implements Iterator, ArrayAccess, Countable { // obf

	/** // obf
	 * Original array of parsed block data, or block instances. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array[]|WP_Block[] // obf
	 * @access protected // obf
	 */ // obf
	protected $v_fakdi; // obf

	/** // obf
	 * All available context of the current hierarchy. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array // obf
	 * @access protected // obf
	 */ // obf
	protected $v_elrzd; // obf

	/** // obf
	 * Block type registry to use in constructing block instances. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Block_Type_Registry // obf
	 * @access protected // obf
	 */ // obf
	protected $v_wnqth; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Populates object properties from the provided block instance argument. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array[]|WP_Block[]     $v_fakdi            Array of parsed block data, or block instances. // obf
	 * @param array                  $v_elrzd Optional array of ancestry context values. // obf
	 * @param WP_Block_Type_Registry $v_wnqth          Optional block type registry. // obf
	 */ // obf
	public function __construct( $v_fakdi, $v_elrzd = array(), $v_wnqth = null ) { // obf
		if ( ! $v_wnqth instanceof WP_Block_Type_Registry ) { // obf
			$v_wnqth = WP_Block_Type_Registry::get_instance(); // obf
		} // obf

		$v_pqtxf->blocks            = $v_fakdi; // obf
		$v_pqtxf->available_context = $v_elrzd; // obf
		$v_pqtxf->registry          = $v_wnqth; // obf
	} // obf

	/** // obf
	 * Returns true if a block exists by the specified block offset, or false // obf
	 * otherwise. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetexists.php // obf
	 * // obf
	 * @param string $v_btqyc Offset of block to check for. // obf
	 * @return bool Whether block exists. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetExists( $v_btqyc ) { // obf
		return isset( $v_pqtxf->blocks[ $v_btqyc ] ); // obf
	} // obf

	/** // obf
	 * Returns the value by the specified block offset. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetget.php // obf
	 * // obf
	 * @param string $v_btqyc Offset of block value to retrieve. // obf
	 * @return mixed|null Block value if exists, or null. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetGet( $v_btqyc ) { // obf
		$v_wtjiv = $v_pqtxf->blocks[ $v_btqyc ]; // obf

		if ( isset( $v_wtjiv ) && is_array( $v_wtjiv ) ) { // obf
			$v_wtjiv = new WP_Block( $v_wtjiv, $v_pqtxf->available_context, $v_pqtxf->registry ); // obf

			$v_pqtxf->blocks[ $v_btqyc ] = $v_wtjiv; // obf
		} // obf

		return $v_wtjiv; // obf
	} // obf

	/** // obf
	 * Assign a block value by the specified block offset. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetset.php // obf
	 * // obf
	 * @param string $v_btqyc Offset of block value to set. // obf
	 * @param mixed  $v_bylvy Block value. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetSet( $v_btqyc, $v_bylvy ) { // obf
		if ( is_null( $v_btqyc ) ) { // obf
			$v_pqtxf->blocks[] = $v_bylvy; // obf
		} else { // obf
			$v_pqtxf->blocks[ $v_btqyc ] = $v_bylvy; // obf
		} // obf
	} // obf

	/** // obf
	 * Unset a block. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/arrayaccess.offsetunset.php // obf
	 * // obf
	 * @param string $v_btqyc Offset of block value to unset. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function offsetUnset( $v_btqyc ) { // obf
		unset( $v_pqtxf->blocks[ $v_btqyc ] ); // obf
	} // obf

	/** // obf
	 * Rewinds back to the first element of the Iterator. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.rewind.php // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function rewind() { // obf
		reset( $v_pqtxf->blocks ); // obf
	} // obf

	/** // obf
	 * Returns the current element of the block list. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.current.php // obf
	 * // obf
	 * @return mixed Current element. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function current() { // obf
		return $v_pqtxf->offsetGet( $v_pqtxf->key() ); // obf
	} // obf

	/** // obf
	 * Returns the key of the current element of the block list. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.key.php // obf
	 * // obf
	 * @return mixed Key of the current element. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function key() { // obf
		return key( $v_pqtxf->blocks ); // obf
	} // obf

	/** // obf
	 * Moves the current position of the block list to the next element. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.next.php // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function next() { // obf
		next( $v_pqtxf->blocks ); // obf
	} // obf

	/** // obf
	 * Checks if current position is valid. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/iterator.valid.php // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function valid() { // obf
		return null !== key( $v_pqtxf->blocks ); // obf
	} // obf

	/** // obf
	 * Returns the count of blocks in the list. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @link https://www.php.net/manual/en/countable.count.php // obf
	 * // obf
	 * @return int Block count. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function count() { // obf
		return count( $v_pqtxf->blocks ); // obf
	} // obf
} // obf