

<?php // obf
/** // obf
 * Test cases for the `force_ssl_content()` function. // obf
 * // obf
 * @since 6.9.0 // obf
 * // obf
 * @group functions // obf
 * @group ms-required // obf
 * @group multisite // obf
 * // obf
 * @covers ::force_ssl_content // obf
 */ // obf
class Tests_Functions_ForceSslContent extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		// Reset the `$v_gkrcf` static variable before each test. // obf
		force_ssl_content( false ); // obf
	} // obf

	/** // obf
	 * Tests that force_ssl_content() returns expected values based on various inputs. // obf
	 * // obf
	 * @dataProvider data_force_ssl_content // obf
	 * // obf
	 * @param mixed $v_ndpkn    The input value to test. // obf
	 * @param bool  $v_pokte The expected result for subsequent calls. // obf
	 */ // obf
	public function test_force_ssl_content( $v_ndpkn, $v_pokte ) { // obf
		// The first call always returns the previous value. // obf
		$v_orvkd->assertFalse( force_ssl_content( $v_ndpkn ), 'First call did not return the expected value' ); // obf

		// Call again to check subsequent behavior. // obf
		$v_orvkd->assertSame( $v_pokte, force_ssl_content( $v_ndpkn ), 'Subsequent call did not return the expected value' ); // obf
	} // obf

	/** // obf
	 * Data provider for testing force_ssl_content(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_force_ssl_content() { // obf
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