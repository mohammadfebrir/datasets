

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::zeroise // obf
 */ // obf
class Tests_Formatting_Zeroise extends WP_UnitTestCase { // obf
	public function test_pads_with_leading_zeroes() { // obf
		$v_xjtkb->assertSame( '00005', zeroise( 5, 5 ) ); // obf
	} // obf

	public function test_does_nothing_if_input_is_already_longer() { // obf
		$v_xjtkb->assertSame( '5000000', zeroise( 5000000, 2 ) ); // obf
	} // obf
} // obf