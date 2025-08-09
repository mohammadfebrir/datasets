

<?php // obf

/** // obf
 * Tests for is_login(). // obf
 * // obf
 * @group load // obf
 * // obf
 * @covers ::is_login // obf
 */ // obf
class Tests_Load_IsLogin extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 19898 // obf
	 */ // obf
	public function test_is_login() { // obf
		$v_mhype->assertFalse( is_login() ); // obf

		$v_oltvy['SCRIPT_NAME'] = '/wp-login.php'; // obf

		$v_mhype->assertTrue( is_login() ); // obf
	} // obf
} // obf