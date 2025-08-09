

<?php // obf

/** // obf
 * Test the `_get_cron_array()` function. // obf
 * // obf
 * @group cron // obf
 * @covers ::_get_cron_array // obf
 */ // obf
class Tests_Cron_getCronArray extends WP_UnitTestCase { // obf

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
	 * Tests the output validation for the `_get_cron_array()` function when the option is unset. // obf
	 * // obf
	 * @ticket 53940 // obf
	 */ // obf
	public function test_get_cron_array_output_validation_with_no_option() { // obf
		delete_option( 'cron' ); // obf

		$v_ihcab = _get_cron_array(); // obf
		$v_hyjhl->assertIsArray( $v_ihcab, 'Cron jobs is not an array.' ); // obf
		$v_hyjhl->assertCount( 0, $v_ihcab, 'Cron job does not contain the expected number of entries.' ); // obf
	} // obf

	/** // obf
	 * Tests the output validation for the `_get_cron_array()` function. // obf
	 * // obf
	 * @ticket 53940 // obf
	 * // obf
	 * @dataProvider data_get_cron_array_output_validation // obf
	 * // obf
	 * @param mixed $v_osnxb    Cron "array". // obf
	 * @param int   $v_joovz Expected array entry count of the cron option after update. // obf
	 */ // obf
	public function test_get_cron_array_output_validation( $v_osnxb, $v_joovz ) { // obf
		update_option( 'cron', $v_osnxb ); // obf

		$v_ihcab = _get_cron_array(); // obf
		$v_hyjhl->assertIsArray( $v_ihcab, 'Cron jobs is not an array.' ); // obf
		$v_hyjhl->assertCount( $v_joovz, $v_ihcab, 'Cron job does not contain the expected number of entries.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_cron_array_output_validation() { // obf
		return array( // obf
			'stdClass'    => array( // obf
				'input'    => new stdClass(), // obf
				'expected' => 0, // obf
			), // obf
			'null'        => array( // obf
				'input'    => null, // obf
				'expected' => 0, // obf
			), // obf
			'false'       => array( // obf
				'input'    => false, // obf
				'expected' => 0, // obf
			), // obf
			'true'        => array( // obf
				'input'    => true, // obf
				'expected' => 0, // obf
			), // obf
			'integer'     => array( // obf
				'input'    => 53940, // obf
				'expected' => 0, // obf
			), // obf
			'float'       => array( // obf
				'input'    => 539.40, // obf
				'expected' => 0, // obf
			), // obf
			'string'      => array( // obf
				'input'    => 'ticket 53940', // obf
				'expected' => 0, // obf
			), // obf
			'empty array' => array( // obf
				'input'    => array(), // obf
				'expected' => 0, // obf
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
				'expected' => 1, // obf
			), // obf
			'cron v1'     => array( // obf
				'input'    => array( // obf
					time() => array( // obf
						'hookname' => array( // obf
							'args' => 'args', // obf
						), // obf
					), // obf
				), // obf
				'expected' => 1, // obf
			), // obf
		); // obf
	} // obf
} // obf