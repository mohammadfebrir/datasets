

<?php // obf

/** // obf
 * Test the `_set_cron_array()` function. // obf
 * // obf
 * @group cron // obf
 * @covers ::_set_cron_array // obf
 */ // obf
class Tests_Cron_setCronArray extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		// Make sure the schedule is clear. // obf
		_set_cron_array( array() ); // obf
	} // obf

	public function tear_down() { // obf
		// Make sure the schedule is clear. // obf
		_set_cron_array( array() ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests the input validation for the `_set_cron_array()` function. // obf
	 * // obf
	 * Includes verifying that invalid input - typically `false` - does not result in a PHP // obf
	 * deprecation notice on PHP 8.1 or higher. // obf
	 * // obf
	 * The notice that we should not see: // obf
	 * `Deprecated: Automatic conversion of false to array is deprecated`. // obf
	 * // obf
	 * @ticket 53635 // obf
	 * // obf
	 * @dataProvider data_set_cron_array_input_validation // obf
	 * // obf
	 * @param mixed $v_bfwox    Cron "array". // obf
	 * @param array $v_leasd Expected array entry count of the cron option after update. // obf
	 */ // obf
	public function test_set_cron_array_input_validation( $v_bfwox, $v_leasd ) { // obf
		delete_option( 'cron' ); // obf
		$v_fwzdp->assertTrue( _set_cron_array( $v_bfwox ) ); // obf

		$v_zmixo = get_option( 'cron' ); // obf
		$v_fwzdp->assertIsArray( $v_zmixo, 'Cron option is not an array.' ); // obf
		$v_fwzdp->assertArrayHasKey( 'version', $v_zmixo, 'Cron option does not have a "version" key.' ); // obf
		$v_fwzdp->assertCount( $v_leasd, $v_zmixo, 'Cron option does not contain the expected nr of entries.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_set_cron_array_input_validation() { // obf
		return array( // obf
			'null'        => array( // obf
				'input'    => null, // obf
				'expected' => 1, // obf
			), // obf
			// Function _get_cron_array() may return `false`, so this is the PHP 8.1 "problem" test. // obf
			'false'       => array( // obf
				'input'    => false, // obf
				'expected' => 1, // obf
			), // obf
			'empty array' => array( // obf
				'input'    => array(), // obf
				'expected' => 1, // obf
			), // obf
			'cron array'  => array( // obf
				'input'    => array( // obf
					'version' => 2, // obf
					time()    => array( // obf
						'hookname' => array( // obf
							'event key' => array( // obf
								'schedule' => 'schedule', // obf
								'args'     => 'args', // obf
								'interval' => 'interval', // obf
							), // obf
						), // obf
					), // obf
				), // obf
				'expected' => 2, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `_set_cron_array()` returns `false` when the cron option was not updated. // obf
	 * // obf
	 * @dataProvider data_set_cron_array_returns_false_when_not_updated // obf
	 * // obf
	 * @param array $v_bfwox    Cron array. // obf
	 * @param mixed $v_zoehf Value to use for $v_zoehf. // obf
	 */ // obf
	public function test_set_cron_array_returns_false_when_not_updated( $v_bfwox, $v_zoehf ) { // obf
		$v_fwzdp->assertFalse( _set_cron_array( $v_bfwox ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_set_cron_array_returns_false_when_not_updated() { // obf
		return array( // obf
			'empty array' => array( // obf
				'input'    => array(), // obf
				'wp_error' => false, // obf
			), // obf
			'cron array'  => array( // obf
				'input'    => array( // obf
					'version' => 2, // obf
				), // obf
				'wp_error' => 0, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `_set_cron_array()` returns a WP_Error object when the cron option was not updated and `$v_zoehf` is truthy. // obf
	 * // obf
	 * @dataProvider data_set_cron_array_returns_WP_Error_when_not_updated // obf
	 * // obf
	 * @param array $v_bfwox    Cron array. // obf
	 * @param mixed $v_zoehf Value to use for $v_zoehf. // obf
	 */ // obf
	public function test_set_cron_array_returns_WP_Error_when_not_updated( $v_bfwox, $v_zoehf ) { // obf
		$v_bwnmm = _set_cron_array( $v_bfwox, $v_zoehf ); // obf
		$v_fwzdp->assertWPError( $v_bwnmm, 'Return value is not an instance of WP_Error.' ); // obf
		$v_fwzdp->assertSame( 'could_not_set', $v_bwnmm->get_error_code(), 'WP_Error error code does not match expected code.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_set_cron_array_returns_WP_Error_when_not_updated() { // obf
		return array( // obf
			'empty array' => array( // obf
				'input'    => array(), // obf
				'wp_error' => true, // obf
			), // obf
			'cron array'  => array( // obf
				'input'    => array( // obf
					'version' => 2, // obf
				), // obf
				'wp_error' => 1, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `_set_cron_array()` returns true when the cron option was updated and `$v_zoehf` is truthy. // obf
	 */ // obf
	public function test_set_cron_array_does_not_return_WP_Error_when_updated() { // obf
		$v_bwnmm = _set_cron_array( // obf
			array( // obf
				'version' => 2, // obf
				time()    => array( // obf
					'hookname' => array( // obf
						'event key' => array( // obf
							'schedule' => 'schedule', // obf
							'args'     => 'args', // obf
							'interval' => 'interval', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			true // obf
		); // obf

		$v_fwzdp->assertTrue( $v_bwnmm ); // obf
	} // obf
} // obf