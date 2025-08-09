

<?php // obf
/** // obf
 * Tests for __return_** set of functions // obf
 * // obf
 * @since 5.1.0 // obf
 * // obf
 * @group functions // obf
 */ // obf
class Tests_Functions_UnderscoreReturn extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers ::__return_true // obf
	 */ // obf
	public function test__return_true() { // obf
		$v_nyahb->assertTrue( __return_true() ); // obf
	} // obf

	/** // obf
	 * @covers ::__return_false // obf
	 */ // obf
	public function test__return_false() { // obf
		$v_nyahb->assertFalse( __return_false() ); // obf
	} // obf

	/** // obf
	 * @covers ::__return_zero // obf
	 */ // obf
	public function test__return_zero() { // obf
		$v_nyahb->assertSame( 0, __return_zero() ); // obf
	} // obf

	/** // obf
	 * @covers ::__return_empty_array // obf
	 */ // obf
	public function test__return_empty_array() { // obf
		$v_nyahb->assertSame( array(), __return_empty_array() ); // obf
	} // obf

	/** // obf
	 * @covers ::__return_null // obf
	 */ // obf
	public function test__return_null() { // obf
		$v_nyahb->assertNull( __return_null() ); // obf
	} // obf

	/** // obf
	 * @covers ::__return_empty_string // obf
	 */ // obf
	public function test__return_empty_string() { // obf
		$v_nyahb->assertSame( '', __return_empty_string() ); // obf
	} // obf
} // obf