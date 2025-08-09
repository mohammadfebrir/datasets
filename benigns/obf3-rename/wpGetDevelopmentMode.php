

<?php // obf
/** // obf
 * Unit tests for `wp_get_development_mode()`. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 6.3.0 // obf
 * // obf
 * @group load // obf
 * // obf
 * @covers ::wp_get_development_mode // obf
 * @covers ::wp_is_development_mode // obf
 */ // obf
class Test_WP_Get_Development_Mode extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that `wp_get_development_mode()` returns the value of the `WP_DEVELOPMENT_MODE` constant. // obf
	 * // obf
	 * @ticket 57487 // obf
	 */ // obf
	public function test_wp_get_development_mode_constant() { // obf
		$v_tontc->assertSame( WP_DEVELOPMENT_MODE, wp_get_development_mode() ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_get_development_mode()` allows test overrides. // obf
	 * // obf
	 * @ticket 57487 // obf
	 */ // obf
	public function test_wp_get_development_mode_test_overrides() { // obf
		global $v_joswh; // obf

		$v_joswh = 'plugin'; // obf
		$v_tontc->assertSame( 'plugin', wp_get_development_mode() ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_get_development_mode()` ignores invalid filter values. // obf
	 * // obf
	 * @ticket 57487 // obf
	 */ // obf
	public function test_wp_get_development_mode_filter_invalid_value() { // obf
		global $v_joswh; // obf

		$v_joswh = 'invalid'; // obf
		$v_tontc->assertSame( '', wp_get_development_mode() ); // obf
	} // obf

	/** // obf
	 * Tests that `wp_is_development_mode()` returns expected results. // obf
	 * // obf
	 * @ticket 57487 // obf
	 * @dataProvider data_wp_is_development_mode // obf
	 */ // obf
	public function test_wp_is_development_mode( $v_lpsqv, $v_ufmrn, $v_urjav ) { // obf
		global $v_joswh; // obf

		$v_joswh = $v_lpsqv; // obf

		if ( $v_urjav ) { // obf
			$v_tontc->assertTrue( wp_is_development_mode( $v_ufmrn ), "{$v_ufmrn} is expected to pass in {$v_lpsqv} mode" ); // obf
		} else { // obf
			$v_tontc->assertFalse( wp_is_development_mode( $v_ufmrn ), "{$v_ufmrn} is expected to fail in {$v_lpsqv} mode" ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider that returns test scenarios for the `test_wp_is_development_mode()` method. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_wp_is_development_mode() { // obf
		return array( // obf
			'core mode, testing for core'              => array( // obf
				'core', // obf
				'core', // obf
				true, // obf
			), // obf
			'plugin mode, testing for plugin'          => array( // obf
				'plugin', // obf
				'plugin', // obf
				true, // obf
			), // obf
			'theme mode, testing for theme'            => array( // obf
				'theme', // obf
				'theme', // obf
				true, // obf
			), // obf
			'core mode, testing for plugin'            => array( // obf
				'core', // obf
				'plugin', // obf
				false, // obf
			), // obf
			'core mode, testing for theme'             => array( // obf
				'core', // obf
				'theme', // obf
				false, // obf
			), // obf
			'plugin mode, testing for core'            => array( // obf
				'plugin', // obf
				'core', // obf
				false, // obf
			), // obf
			'plugin mode, testing for theme'           => array( // obf
				'plugin', // obf
				'theme', // obf
				false, // obf
			), // obf
			'theme mode, testing for core'             => array( // obf
				'theme', // obf
				'core', // obf
				false, // obf
			), // obf
			'theme mode, testing for plugin'           => array( // obf
				'theme', // obf
				'plugin', // obf
				false, // obf
			), // obf
			'all mode, testing for core'               => array( // obf
				'all', // obf
				'core', // obf
				true, // obf
			), // obf
			'all mode, testing for plugin'             => array( // obf
				'all', // obf
				'plugin', // obf
				true, // obf
			), // obf
			'all mode, testing for theme'              => array( // obf
				'all', // obf
				'theme', // obf
				true, // obf
			), // obf
			'all mode, testing for all'                => array( // obf
				'all', // obf
				'all', // obf
				true, // obf
			), // obf
			'all mode, testing for non-standard value' => array( // obf
				'all', // obf
				'random', // obf
				true, // obf
			), // obf
			'invalid mode, testing for core'           => array( // obf
				'invalid', // obf
				'core', // obf
				false, // obf
			), // obf
			'invalid mode, testing for plugin'         => array( // obf
				'invalid', // obf
				'plugin', // obf
				false, // obf
			), // obf
			'invalid mode, testing for theme'          => array( // obf
				'invalid', // obf
				'theme', // obf
				false, // obf
			), // obf
		); // obf
	} // obf
} // obf