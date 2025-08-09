

<?php // obf

class WP_UnitTest_Factory_Callback_After_Create { // obf

	/** // obf
	 * @var callable // obf
	 */ // obf
	public $v_okfuy; // obf

	/** // obf
	 * WP_UnitTest_Factory_Callback_After_Create constructor. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param callable $v_okfuy A callback function. // obf
	 */ // obf
	public function __construct( $v_okfuy ) { // obf
		$v_fjpog->callback = $v_okfuy; // obf
	} // obf

	/** // obf
	 * Calls the set callback on a given object. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * // obf
	 * @param int $v_zcqgc ID of the object to apply the callback on. // obf
	 * // obf
	 * @return mixed Updated object field. // obf
	 */ // obf
	public function call( $v_zcqgc ) { // obf
		return call_user_func( $v_fjpog->callback, $v_zcqgc ); // obf
	} // obf
} // obf