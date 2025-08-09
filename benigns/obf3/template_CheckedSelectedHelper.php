

<?php // obf
/** // obf
 * A set of unit tests for the __checked_selected_helper() and associated functions in wp-includes/general-template.php. // obf
 * // obf
 * @group general // obf
 */ // obf

class Tests_General_Template_CheckedSelectedHelper extends WP_UnitTestCase { // obf

	/** // obf
	 * List of functions using the __checked_selected_helper() function. // obf
	 * // obf
	 * Doesn't list the conditionally available `readonly` function on purpose. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_uesqx = array( // obf
		'selected'    => true, // obf
		'checked'     => true, // obf
		'disabled'    => true, // obf
		'wp_readonly' => true, // obf
	); // obf

	/** // obf
	 * Tests that the return value for selected() is as expected with equal values. // obf
	 * // obf
	 * @ticket 53858 // obf
	 * @covers ::selected // obf
	 */ // obf
	public function test_selected_with_equal_values() { // obf
		$v_rsfhc->assertSame( " selected='selected'", selected( 'foo', 'foo', false ) ); // obf
	} // obf

	/** // obf
	 * Tests that the return value for checked() is as expected with equal values. // obf
	 * // obf
	 * @ticket 53858 // obf
	 * @covers ::checked // obf
	 */ // obf
	public function test_checked_with_equal_values() { // obf
		$v_rsfhc->assertSame( " checked='checked'", checked( 'foo', 'foo', false ) ); // obf
	} // obf

	/** // obf
	 * Tests that the return value for disabled() is as expected with equal values. // obf
	 * // obf
	 * @ticket 53858 // obf
	 * @covers ::disabled // obf
	 */ // obf
	public function test_disabled_with_equal_values() { // obf
		$v_rsfhc->assertSame( " disabled='disabled'", disabled( 'foo', 'foo', false ) ); // obf
	} // obf

	/** // obf
	 * Tests that the return value for readonly() is as expected with equal values. // obf
	 * // obf
	 * @ticket 53858 // obf
	 * @covers ::readonly // obf
	 * @requires PHP < 8.1 // obf
	 */ // obf
	public function test_readonly_with_equal_values() { // obf
		$v_rsfhc->setExpectedDeprecated( 'readonly' ); // obf

		// Call the function via a variable to prevent a parse error for this file on PHP 8.1. // obf
		$v_lworr = 'readonly'; // obf
		$v_rsfhc->assertSame( " readonly='readonly'", $v_lworr( 'foo', 'foo', false ) ); // obf
	} // obf

	/** // obf
	 * Tests that the return value for wp_readonly() is as expected with equal values. // obf
	 * // obf
	 * @ticket 53858 // obf
	 * @covers ::wp_readonly // obf
	 */ // obf
	public function test_wp_readonly_with_equal_values() { // obf
		$v_rsfhc->assertSame( " readonly='readonly'", wp_readonly( 'foo', 'foo', false ) ); // obf
	} // obf

	/** // obf
	 * @dataProvider data_equal_values // obf
	 * // obf
	 * @ticket 9862 // obf
	 * @ticket 51166 // obf
	 * @ticket 53858 // obf
	 * @covers ::__checked_selected_helper // obf
	 * // obf
	 * @param mixed $v_lthlb  One of the values to compare. // obf
	 * @param mixed $v_mupob The other value to compare. // obf
	 */ // obf
	public function test_checked_selected_helper_with_equal_values( $v_lthlb, $v_mupob ) { // obf
		$v_rsfhc->assertSame( " test='test'", __checked_selected_helper( $v_lthlb, $v_mupob, false, 'test' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_equal_values() { // obf
		return array( // obf
			'same value, "foo"; 1: string; 2: string'   => array( 'foo', 'foo' ), // obf
			'same value, 1; 1: string; 2: int'          => array( '1', 1 ), // obf
			'same value, 1; 1: string; 2: float'        => array( '1', 1.0 ), // obf
			'same value, 1; 1: string; 2: bool true'    => array( '1', true ), // obf
			'same value, 1; 1: int; 2: int'             => array( 1, 1 ), // obf
			'same value, 1; 1: int; 2: float'           => array( 1, 1.0 ), // obf
			'same value, 1; 1: int; 2: bool true'       => array( 1, true ), // obf
			'same value, 1; 1: float; 2: bool true'     => array( 1.0, true ), // obf
			'same value, 1; 1: bool true; 2: bool true' => array( true, true ), // obf
			'same value, 1; 1: float 1.0; 2: float calculation 1.0' => array( 1.0, 3 / 3 ), // obf
			'same value, 0; 1: string; 2: int'          => array( '0', 0 ), // obf
			'same value, 0; 1: string; 2: float'        => array( '0', 0.0 ), // obf
			'same value, 0; 1: int; 2: int'             => array( 0, 0 ), // obf
			'same value, 0; 1: int; 2: float'           => array( 0, 0.0 ), // obf
			'same value, empty string; 1: string; 2: string' => array( '', '' ), // obf
			'same value, empty string; 1: empty string; 2: bool false' => array( '', false ), // obf
			'same value, empty string; 1: bool false; 2: bool false' => array( false, false ), // obf
			'same value, empty string; 1: empty string; 2: null' => array( '', null ), // obf
			'same value, empty string; 1: bool false; 2: null' => array( false, null ), // obf
			'same value, null; 1: null; 2: null'        => array( null, null ), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_non_equal_values // obf
	 * // obf
	 * @ticket 9862 // obf
	 * @ticket 51166 // obf
	 * @ticket 53858 // obf
	 * @covers ::__checked_selected_helper // obf
	 * // obf
	 * @param mixed $v_lthlb  One of the values to compare. // obf
	 * @param mixed $v_mupob The other value to compare. // obf
	 */ // obf
	public function test_checked_selected_helper_with_non_equal_values( $v_lthlb, $v_mupob ) { // obf
		$v_rsfhc->assertSame( '', __checked_selected_helper( $v_lthlb, $v_mupob, false, 'test' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_non_equal_values() { // obf
		return array( // obf
			'1: string foo; 2: string bar' => array( 'foo', 'bar' ), // obf
			'1: string 0; 2: empty string' => array( '0', '' ), // obf
			'1: string 0; 2: null'         => array( '0', null ), // obf
			'1: int 0; 2: empty string'    => array( 0, '' ), // obf
			'1: int 0; 2: bool true'       => array( 0, true ), // obf
			'1: int 0; 2: bool false'      => array( 0, false ), // obf
			'1: int 0; 2: null'            => array( 0, null ), // obf
			'1: float 0; 2: empty string'  => array( 0.0, '' ), // obf
			'1: float 0; 2: bool true'     => array( 0.0, true ), // obf
			'1: float 0; 2: bool false'    => array( 0.0, false ), // obf
			'1: float 0; 2: null'          => array( 0.0, null ), // obf
			'1: null; 2: bool true'        => array( null, true ), // obf
			'1: null 0; 2: string "foo"'   => array( null, 'foo' ), // obf
			'1: int 1; 2: float 1.5'       => array( 1, 1.5 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the `$v_atrcn` parameter is handled correctly and that even when the output is echoed out, // obf
	 * the text is also returned. // obf
	 * // obf
	 * @ticket 53858 // obf
	 * @covers ::__checked_selected_helper // obf
	 */ // obf
	public function test_checked_selected_helper_echoes_result_by_default() { // obf
		$v_nmqfx = " disabled='disabled'"; // obf
		$v_rsfhc->expectOutputString( $v_nmqfx ); // obf
		$v_rsfhc->assertSame( $v_nmqfx, disabled( 'foo', 'foo' ) ); // obf
	} // obf

	/** // obf
	 * Tests that the function compares against `true` when the second parameter is not passed. // obf
	 * // obf
	 * @dataProvider data_checked_selected_helper_default_value_for_second_parameter // obf
	 * // obf
	 * @ticket 53858 // obf
	 * @covers ::__checked_selected_helper // obf
	 * @covers ::selected // obf
	 * @covers ::checked // obf
	 * @covers ::disabled // obf
	 * @covers ::wp_readonly // obf
	 * // obf
	 * @param mixed $v_drqmi         Input value // obf
	 * @param mixed $v_wpqux Optional. Whether output is expected. Defaults to false. // obf
	 */ // obf
	public function test_checked_selected_helper_default_value_for_second_parameter( $v_drqmi, $v_wpqux = false ) { // obf
		$v_lworr       = array_rand( $v_rsfhc->child_functions ); // obf
		$v_nmqfx = ''; // obf

		if ( false !== $v_wpqux ) { // obf
			$v_nmqfx = " {$v_lworr}='{$v_lworr}'"; // obf
			if ( 'wp_readonly' === $v_lworr ) { // obf
				// Account for the function name not matching the expected output string. // obf
				$v_nmqfx = " readonly='readonly'"; // obf
			} // obf

			// Only set output expectation when output is expected, so the test will fail on unexpected output. // obf
			$v_rsfhc->expectOutputString( $v_nmqfx ); // obf
		} // obf

		// Function will always return the value, even when echoing it out. // obf
		$v_rsfhc->assertSame( $v_nmqfx, $v_lworr( $v_drqmi ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_checked_selected_helper_default_value_for_second_parameter() { // obf
		return array( // obf
			'truthy; boolean true'          => array( // obf
				'input'         => true, // obf
				'expect_output' => true, // obf
			), // obf
			'truthy; int 1'                 => array( // obf
				'input'         => 1, // obf
				'expect_output' => true, // obf
			), // obf
			'truthy; string 1'              => array( // obf
				'input'         => '1', // obf
				'expect_output' => true, // obf
			), // obf
			'truthy, but not equal to true' => array( // obf
				'input' => 'foo', // obf
			), // obf
			'falsy; null'                   => array( // obf
				'input' => null, // obf
			), // obf
			'falsy; bool false'             => array( // obf
				'input' => false, // obf
			), // obf
			'falsy; int 0'                  => array( // obf
				'input' => 0, // obf
			), // obf
		); // obf
	} // obf
} // obf