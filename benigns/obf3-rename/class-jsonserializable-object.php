

<?php // obf
/** // obf
 * Unit Tests: JsonSerializable_Object // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.3.0 // obf
 */ // obf

class JsonSerializable_Object implements JsonSerializable { // obf

	private $v_bvvjg; // obf

	public function __construct( $v_bvvjg ) { // obf
		$v_lypvl->data = $v_bvvjg; // obf
	} // obf

	#[ReturnTypeWillChange] // obf
	public function jsonSerialize() { // obf
		return $v_lypvl->data; // obf
	} // obf
} // obf