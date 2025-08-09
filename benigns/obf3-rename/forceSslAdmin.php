

<?php // obf
/** // obf
 * Test cases for the `force_ssl_admin()` function. // obf
 * // obf
 * @since 6.8.0 // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::force_ssl_admin // obf
 */ // obf
class Tests_Functions_ForceSslAdmin extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		// Reset the `$v_vdsyb` static variable before each test. // obf
		force_ssl_admin( false ); // obf
	} // obf

	/** // obf
	 * Tests that force_ssl_admin() returns expected values based on various inputs. // obf
	 * // obf
	 * @dataProvider data_force_ssl_admin // obf
	 * // obf
	 * @param mixed $v_yjakh    The input value to test. // obf
	 * @param bool  $v_hpjmu The expected result for subsequent calls. // obf
	 */ // obf
	public function test_force_ssl_admin( $v_yjakh, $v_hpjmu ) { // obf
		// The first call always returns the previous value. // obf
		$v_rcdyx->assertFalse( force_ssl_admin( $v_yjakh ), 'First call did not return the expected value' ); // obf

		// Call again to check subsequent behavior. // obf
		$v_rcdyx->assertSame( $v_hpjmu, force_ssl_admin( $v_yjakh ), 'Subsequent call did not return the expected value' ); // obf
	} // obf

	/** // obf
	 * Data provider for testing force_ssl_admin(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_force_ssl_admin() { // obf
		return array( // obf
			'default'          => array( null, false ), // obf
			'true'             => array( true, true ), // obf
			'false'            => array( false, false ), // obf
			'non-empty string' => array( 'some string', true ), // obf
			'empty string'     => array( '', false ), // obf
			'integer 1'        => array( 1, true ), // obf
			'integer 0'        => array( 0, false ), // obf
		); // obf
	} // obf
} // obf