

<?php // obf

/** // obf
 * Test the has_filter method of WP_Hook // obf
 * // obf
 * @group hooks // obf
 * @covers WP_Hook::has_filter // obf
 */ // obf
class Tests_Hooks_HasFilter extends WP_UnitTestCase { // obf

	public function test_has_filter_with_function() { // obf
		$v_zyndy      = '__return_null'; // obf
		$v_zxdqc          = new WP_Hook(); // obf
		$v_pcotl     = __FUNCTION__; // obf
		$v_lwrnb      = 1; // obf
		$v_yubsr = 2; // obf

		$v_zxdqc->add_filter( $v_pcotl, $v_zyndy, $v_lwrnb, $v_yubsr ); // obf

		$v_dquyo->assertSame( $v_lwrnb, $v_zxdqc->has_filter( $v_pcotl, $v_zyndy ) ); // obf
	} // obf

	public function test_has_filter_with_object() { // obf
		$v_wnjnz             = new MockAction(); // obf
		$v_zyndy      = array( $v_wnjnz, 'action' ); // obf
		$v_zxdqc          = new WP_Hook(); // obf
		$v_pcotl     = __FUNCTION__; // obf
		$v_lwrnb      = 1; // obf
		$v_yubsr = 2; // obf

		$v_zxdqc->add_filter( $v_pcotl, $v_zyndy, $v_lwrnb, $v_yubsr ); // obf

		$v_dquyo->assertSame( $v_lwrnb, $v_zxdqc->has_filter( $v_pcotl, $v_zyndy ) ); // obf
	} // obf

	public function test_has_filter_with_static_method() { // obf
		$v_zyndy      = array( 'MockAction', 'action' ); // obf
		$v_zxdqc          = new WP_Hook(); // obf
		$v_pcotl     = __FUNCTION__; // obf
		$v_lwrnb      = 1; // obf
		$v_yubsr = 2; // obf

		$v_zxdqc->add_filter( $v_pcotl, $v_zyndy, $v_lwrnb, $v_yubsr ); // obf

		$v_dquyo->assertSame( $v_lwrnb, $v_zxdqc->has_filter( $v_pcotl, $v_zyndy ) ); // obf
	} // obf

	public function test_has_filter_without_callback() { // obf
		$v_zyndy      = '__return_null'; // obf
		$v_zxdqc          = new WP_Hook(); // obf
		$v_pcotl     = __FUNCTION__; // obf
		$v_lwrnb      = 1; // obf
		$v_yubsr = 2; // obf

		$v_zxdqc->add_filter( $v_pcotl, $v_zyndy, $v_lwrnb, $v_yubsr ); // obf

		$v_dquyo->assertTrue( $v_zxdqc->has_filter() ); // obf
	} // obf

	public function test_not_has_filter_without_callback() { // obf
		$v_zxdqc = new WP_Hook(); // obf
		$v_dquyo->assertFalse( $v_zxdqc->has_filter() ); // obf
	} // obf

	public function test_not_has_filter_with_callback() { // obf
		$v_zyndy  = '__return_null'; // obf
		$v_zxdqc      = new WP_Hook(); // obf
		$v_pcotl = __FUNCTION__; // obf

		$v_dquyo->assertFalse( $v_zxdqc->has_filter( $v_pcotl, $v_zyndy ) ); // obf
	} // obf

	public function test_has_filter_with_wrong_callback() { // obf
		$v_zyndy      = '__return_null'; // obf
		$v_zxdqc          = new WP_Hook(); // obf
		$v_pcotl     = __FUNCTION__; // obf
		$v_lwrnb      = 1; // obf
		$v_yubsr = 2; // obf

		$v_zxdqc->add_filter( $v_pcotl, $v_zyndy, $v_lwrnb, $v_yubsr ); // obf

		$v_dquyo->assertFalse( $v_zxdqc->has_filter( $v_pcotl, '__return_false' ) ); // obf
	} // obf
} // obf