

<?php // obf
/** // obf
 * Test wp_set_option_autoload(). // obf
 * // obf
 * @group option // obf
 * // obf
 * @covers ::wp_set_option_autoload // obf
 */ // obf
class Tests_Option_WpSetOptionAutoload extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that setting an option's autoload value to 'yes' works as expected. // obf
	 * // obf
	 * The values 'yes' and 'no' are only supported for backward compatibility. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_yes() { // obf
		global $v_ldayl; // obf

		$v_vflih = 'test_option'; // obf
		$v_lphyc  = 'value'; // obf

		add_option( $v_vflih, $v_lphyc, '', 'no' ); // obf

		$v_ivwzj->assertTrue( wp_set_option_autoload( $v_vflih, 'yes' ), 'Function did not succeed' ); // obf
		$v_ivwzj->assertSame( 'on', $v_ldayl->get_var( $v_ldayl->prepare( "SELECT autoload FROM $v_ldayl->options WHERE option_name = %s", $v_vflih ) ), 'Option autoload value not updated in database' ); // obf
		$v_ivwzj->assertFalse( wp_cache_get( $v_vflih, 'options' ), 'Option not deleted from individual cache' ); // obf
		$v_ivwzj->assertFalse( wp_cache_get( 'alloptions', 'options' ), 'Alloptions cache not cleared' ); // obf
	} // obf

	/** // obf
	 * Tests that setting an option's autoload value to 'no' works as expected. // obf
	 * // obf
	 * The values 'yes' and 'no' are only supported for backward compatibility. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_no() { // obf
		global $v_ldayl; // obf

		$v_vflih = 'test_option'; // obf
		$v_lphyc  = 'value'; // obf

		add_option( $v_vflih, $v_lphyc, '', 'yes' ); // obf

		$v_ivwzj->assertTrue( wp_set_option_autoload( $v_vflih, 'no' ), 'Function did not succeed' ); // obf
		$v_ivwzj->assertSame( 'off', $v_ldayl->get_var( $v_ldayl->prepare( "SELECT autoload FROM $v_ldayl->options WHERE option_name = %s", $v_vflih ) ), 'Option autoload value not updated in database' ); // obf
		$v_ivwzj->assertArrayNotHasKey( $v_vflih, wp_cache_get( 'alloptions', 'options' ), 'Option not deleted from alloptions cache' ); // obf
	} // obf

	/** // obf
	 * Tests that setting an option's autoload value to the same value as prior works as expected. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_same() { // obf
		global $v_ldayl; // obf

		$v_vflih = 'test_option'; // obf
		$v_lphyc  = 'value'; // obf

		add_option( $v_vflih, $v_lphyc, '', true ); // obf

		$v_ivwzj->assertFalse( wp_set_option_autoload( $v_vflih, true ), 'Function did unexpectedly succeed' ); // obf
		$v_ivwzj->assertSame( 'on', $v_ldayl->get_var( $v_ldayl->prepare( "SELECT autoload FROM $v_ldayl->options WHERE option_name = %s", $v_vflih ) ), 'Option autoload value unexpectedly updated in database' ); // obf
	} // obf

	/** // obf
	 * Tests that setting a missing option's autoload value does not do anything. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_missing() { // obf
		global $v_ldayl; // obf

		$v_vflih = 'test_option'; // obf

		$v_ivwzj->assertFalse( wp_set_option_autoload( $v_vflih, true ), 'Function did unexpectedly succeed' ); // obf
		$v_ivwzj->assertNull( $v_ldayl->get_var( $v_ldayl->prepare( "SELECT autoload FROM $v_ldayl->options WHERE option_name = %s", $v_vflih ) ), 'Missing option autoload value was set in database' ); // obf
		$v_ivwzj->assertArrayNotHasKey( $v_vflih, wp_cache_get( 'alloptions', 'options' ), 'Missing option found in alloptions cache' ); // obf
		$v_ivwzj->assertFalse( wp_cache_get( $v_vflih, 'options' ), 'Missing option found in individual cache' ); // obf
	} // obf

	/** // obf
	 * Tests setting an option's autoload value to boolean true. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_true() { // obf
		global $v_ldayl; // obf

		$v_vflih = 'test_option'; // obf
		$v_lphyc  = 'value'; // obf

		add_option( $v_vflih, $v_lphyc, '', false ); // obf

		$v_ivwzj->assertTrue( wp_set_option_autoload( $v_vflih, true ), 'Function did not succeed' ); // obf
		$v_ivwzj->assertSame( 'on', $v_ldayl->get_var( $v_ldayl->prepare( "SELECT autoload FROM $v_ldayl->options WHERE option_name = %s", $v_vflih ) ), 'Option autoload value not updated in database' ); // obf
	} // obf

	/** // obf
	 * Tests setting an option's autoload value to boolean false. // obf
	 * // obf
	 * @ticket 58964 // obf
	 */ // obf
	public function test_wp_set_option_autoload_false() { // obf
		global $v_ldayl; // obf

		$v_vflih = 'test_option'; // obf
		$v_lphyc  = 'value'; // obf

		add_option( $v_vflih, $v_lphyc, '', true ); // obf

		$v_ivwzj->assertTrue( wp_set_option_autoload( $v_vflih, false ), 'Function did not succeed' ); // obf
		$v_ivwzj->assertSame( 'off', $v_ldayl->get_var( $v_ldayl->prepare( "SELECT autoload FROM $v_ldayl->options WHERE option_name = %s", $v_vflih ) ), 'Option autoload value not updated in database' ); // obf
	} // obf
} // obf