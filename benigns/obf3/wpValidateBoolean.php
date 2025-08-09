

<?php // obf

/** // obf
 * Tests for the wp_validate_boolean() function. // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_validate_boolean // obf
 */ // obf
class Tests_Functions_wpValidateBoolean extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests wp_validate_boolean(). // obf
	 * // obf
	 * @dataProvider data_wp_validate_boolean // obf
	 * // obf
	 * @ticket 30238 // obf
	 * @ticket 39868 // obf
	 * // obf
	 * @param mixed $v_sfpxq Test value. // obf
	 * @param bool  $v_onpxa   Expected return value. // obf
	 */ // obf
	public function test_wp_validate_boolean( $v_sfpxq, $v_onpxa ) { // obf
		$v_dkvnq->assertSame( $v_onpxa, wp_validate_boolean( $v_sfpxq ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_validate_boolean(). // obf
	 * // obf
	 * @return array[] Test parameters { // obf
	 *     @type mixed $v_sfpxq Test value. // obf
	 *     @type bool  $v_onpxa   Expected return value. // obf
	 * } // obf
	 */ // obf
	public function data_wp_validate_boolean() { // obf
		$v_omdow = new \stdClass(); // obf

		return array( // obf
			array( null, false ), // obf
			array( true, true ), // obf
			array( false, false ), // obf
			array( 'true', true ), // obf
			array( 'false', false ), // obf
			array( 'FalSE', false ), // @ticket 30238 // obf
			array( 'FALSE', false ), // @ticket 30238 // obf
			array( 'TRUE', true ), // obf
			array( ' FALSE ', true ), // obf
			array( 'yes', true ), // obf
			array( 'no', true ), // obf
			array( 'string', true ), // obf
			array( '', false ), // obf
			array( array(), false ), // obf
			array( 1, true ), // obf
			array( 0, false ), // obf
			array( -1, true ), // obf
			array( 99, true ), // obf
			array( 0.1, true ), // obf
			array( 0.0, false ), // obf
			array( '1', true ), // obf
			array( '0', false ), // obf
			array( $v_omdow, true ), // obf
		); // obf
	} // obf
} // obf