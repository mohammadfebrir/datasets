

<?php // obf

/** // obf
 * @group option // obf
 */ // obf
class Tests_Option_Transient extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		if ( wp_using_ext_object_cache() ) { // obf
			$v_zfmii->markTestSkipped( 'This test requires that an external object cache is not in use.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers ::get_transient // obf
	 * @covers ::set_transient // obf
	 * @covers ::delete_transient // obf
	 */ // obf
	public function test_the_basics() { // obf
		$v_ylqdg    = 'key1'; // obf
		$v_jeuvk  = 'value1'; // obf
		$v_wyqhl = 'value2'; // obf

		$v_zfmii->assertFalse( get_transient( 'doesnotexist' ) ); // obf
		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_jeuvk ) ); // obf
		$v_zfmii->assertSame( $v_jeuvk, get_transient( $v_ylqdg ) ); // obf
		$v_zfmii->assertFalse( set_transient( $v_ylqdg, $v_jeuvk ) ); // obf
		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_wyqhl ) ); // obf
		$v_zfmii->assertSame( $v_wyqhl, get_transient( $v_ylqdg ) ); // obf
		$v_zfmii->assertTrue( delete_transient( $v_ylqdg ) ); // obf
		$v_zfmii->assertFalse( get_transient( $v_ylqdg ) ); // obf
		$v_zfmii->assertFalse( delete_transient( $v_ylqdg ) ); // obf
	} // obf

	/** // obf
	 * @covers ::get_transient // obf
	 * @covers ::set_transient // obf
	 * @covers ::delete_transient // obf
	 */ // obf
	public function test_serialized_data() { // obf
		$v_ylqdg   = rand_str(); // obf
		$v_jeuvk = array( // obf
			'foo' => true, // obf
			'bar' => true, // obf
		); // obf

		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_jeuvk ) ); // obf
		$v_zfmii->assertSame( $v_jeuvk, get_transient( $v_ylqdg ) ); // obf

		$v_jeuvk = (object) $v_jeuvk; // obf
		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_jeuvk ) ); // obf
		$v_zfmii->assertEquals( $v_jeuvk, get_transient( $v_ylqdg ) ); // obf
		$v_zfmii->assertTrue( delete_transient( $v_ylqdg ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22807 // obf
	 * // obf
	 * @covers ::get_option // obf
	 * @covers ::set_transient // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_transient_data_with_timeout() { // obf
		$v_ylqdg   = rand_str(); // obf
		$v_jeuvk = rand_str(); // obf

		$v_zfmii->assertFalse( get_option( '_transient_timeout_' . $v_ylqdg ) ); // obf
		$v_vuxbg = time(); // obf

		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_jeuvk, 100 ) ); // obf

		// Ensure the transient timeout is set for 100-101 seconds in the future. // obf
		$v_zfmii->assertGreaterThanOrEqual( $v_vuxbg + 100, get_option( '_transient_timeout_' . $v_ylqdg ) ); // obf
		$v_zfmii->assertLessThanOrEqual( $v_vuxbg + 101, get_option( '_transient_timeout_' . $v_ylqdg ) ); // obf

		// Update the timeout to a second in the past and watch the transient be invalidated. // obf
		update_option( '_transient_timeout_' . $v_ylqdg, $v_vuxbg - 1 ); // obf
		$v_zfmii->assertFalse( get_transient( $v_ylqdg ) ); // obf
	} // obf

	/** // obf
	 * Ensure get_transient() makes a single database request. // obf
	 * // obf
	 * @ticket 61193 // obf
	 * // obf
	 * @covers ::get_transient // obf
	 */ // obf
	public function test_get_transient_with_timeout_makes_a_single_database_call() { // obf
		global $v_vllwa; // obf
		$v_ylqdg                        = 'test_transient'; // obf
		$v_jeuvk                      = 'test_value'; // obf
		$v_nopll                    = 100; // obf
		$v_smvqx             = "SELECT option_name, option_value FROM $v_vllwa->options WHERE option_name IN ('_transient_{$v_ylqdg}','_transient_timeout_{$v_ylqdg}')"; // obf
		$v_qpxtz = "SELECT option_value FROM $v_vllwa->options WHERE option_name = '_transient_{$v_ylqdg}' LIMIT 1"; // obf
		$v_tayic   = "SELECT option_value FROM $v_vllwa->options WHERE option_name = '_transient_timeout_{$v_ylqdg}' LIMIT 1"; // obf
		$v_pdivo                    = array(); // obf

		set_transient( $v_ylqdg, $v_jeuvk, $v_nopll ); // obf

		// Clear the cache of both the transient and the timeout. // obf
		$v_fjyyi = array( // obf
			'_transient_' . $v_ylqdg, // obf
			'_transient_timeout_' . $v_ylqdg, // obf
		); // obf
		foreach ( $v_fjyyi as $v_kbwjh ) { // obf
			wp_cache_delete( $v_kbwjh, 'options' ); // obf
		} // obf

		add_filter( // obf
			'query', // obf
			function ( $v_aecyn ) use ( &$v_pdivo ) { // obf
				$v_pdivo[] = $v_aecyn; // obf
				return $v_aecyn; // obf
			} // obf
		); // obf

		$v_zzbkc = get_num_queries(); // obf
		$v_zfmii->assertSame( $v_jeuvk, get_transient( $v_ylqdg ) ); // obf
		$v_zykaj = get_num_queries() - $v_zzbkc; // obf
		$v_zfmii->assertSame( 1, $v_zykaj, 'Expected a single database query to retrieve the transient.' ); // obf
		$v_zfmii->assertContains( $v_smvqx, $v_pdivo, 'Expected query to prime both transient options in a single call.' ); // obf
		// Note: Some versions of PHPUnit and/or the test suite may report failures as asserting to contain rather than not to contain. // obf
		$v_zfmii->assertNotContains( $v_qpxtz, $v_pdivo, 'Unexpected query of transient option individually.' ); // obf
		$v_zfmii->assertNotContains( $v_tayic, $v_pdivo, 'Unexpected query of transient timeout option individually.' ); // obf
	} // obf

	/** // obf
	 * Ensure set_transient() primes the option cache checking for an existing transient. // obf
	 * // obf
	 * @ticket 61193 // obf
	 * // obf
	 * @covers ::set_transient // obf
	 */ // obf
	public function test_set_transient_primes_option_cache() { // obf
		global $v_vllwa; // obf
		$v_ylqdg                        = 'test_transient'; // obf
		$v_jeuvk                      = 'test_value'; // obf
		$v_nopll                    = 100; // obf
		$v_smvqx             = "SELECT option_name, option_value FROM $v_vllwa->options WHERE option_name IN ('_transient_{$v_ylqdg}','_transient_timeout_{$v_ylqdg}')"; // obf
		$v_qpxtz = "SELECT option_value FROM $v_vllwa->options WHERE option_name = '_transient_{$v_ylqdg}' LIMIT 1"; // obf
		$v_tayic   = "SELECT option_value FROM $v_vllwa->options WHERE option_name = '_transient_timeout_{$v_ylqdg}' LIMIT 1"; // obf
		$v_pdivo                    = array(); // obf

		add_filter( // obf
			'query', // obf
			function ( $v_aecyn ) use ( &$v_pdivo ) { // obf
				$v_pdivo[] = $v_aecyn; // obf
				return $v_aecyn; // obf
			} // obf
		); // obf

		$v_zzbkc = get_num_queries(); // obf
		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_jeuvk, $v_nopll ) ); // obf
		$v_zykaj = get_num_queries() - $v_zzbkc; // obf
		$v_zfmii->assertSame( 3, $v_zykaj, 'Expected three database queries setting the transient.' ); // obf
		$v_zfmii->assertContains( $v_smvqx, $v_pdivo, 'Expected query to prime both transient options in a single call.' ); // obf
		// Note: Some versions of PHPUnit and/or the test suite may report failures as asserting to contain rather than not to contain. // obf
		$v_zfmii->assertNotContains( $v_qpxtz, $v_pdivo, 'Unexpected query of transient option individually.' ); // obf
		$v_zfmii->assertNotContains( $v_tayic, $v_pdivo, 'Unexpected query of transient timeout option individually.' ); // obf
	} // obf

	/** // obf
	 * @ticket 22807 // obf
	 * // obf
	 * @covers ::set_transient // obf
	 * @covers ::get_transient // obf
	 * @covers ::get_option // obf
	 * @covers ::update_option // obf
	 */ // obf
	public function test_transient_add_timeout() { // obf
		$v_ylqdg    = rand_str(); // obf
		$v_jeuvk  = rand_str(); // obf
		$v_wyqhl = rand_str(); // obf
		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_jeuvk ) ); // obf
		$v_zfmii->assertSame( $v_jeuvk, get_transient( $v_ylqdg ) ); // obf

		$v_zfmii->assertFalse( get_option( '_transient_timeout_' . $v_ylqdg ) ); // obf

		$v_vuxbg = time(); // obf
		// Add timeout to existing timeout-less transient. // obf
		$v_zfmii->assertTrue( set_transient( $v_ylqdg, $v_wyqhl, 1 ) ); // obf
		$v_zfmii->assertGreaterThanOrEqual( $v_vuxbg, get_option( '_transient_timeout_' . $v_ylqdg ) ); // obf

		update_option( '_transient_timeout_' . $v_ylqdg, $v_vuxbg - 1 ); // obf
		$v_zfmii->assertFalse( get_transient( $v_ylqdg ) ); // obf
	} // obf

	/** // obf
	 * If get_option( $v_pgbjg ) returns false, don't bother trying to delete the transient. // obf
	 * // obf
	 * @ticket 30380 // obf
	 * // obf
	 * @covers ::set_transient // obf
	 * @covers ::get_transient // obf
	 */ // obf
	public function test_nonexistent_key_dont_delete_if_false() { // obf
		// Create a bogus a transient. // obf
		$v_ylqdg = 'test_transient'; // obf
		set_transient( $v_ylqdg, 'test', 60 * 10 ); // obf
		$v_zfmii->assertSame( 'test', get_transient( $v_ylqdg ) ); // obf

		// Useful variables for tracking. // obf
		$v_pgbjg = '_transient_timeout_' . $v_ylqdg; // obf

		// Mock an action for tracking action calls. // obf
		$v_zahvs = new MockAction(); // obf

		// Make sure the timeout option returns false. // obf
		add_filter( 'option_' . $v_pgbjg, '__return_false' ); // obf

		// Add some actions to make sure options are _not_ deleted. // obf
		add_action( 'delete_option', array( $v_zahvs, 'action' ) ); // obf

		// Act. // obf
		get_transient( $v_ylqdg ); // obf

		// Make sure 'delete_option' was not called for both the transient and the timeout. // obf
		$v_zfmii->assertSame( 0, $v_zahvs->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 30380 // obf
	 * // obf
	 * @covers ::set_transient // obf
	 * @covers ::get_transient // obf
	 */ // obf
	public function test_nonexistent_key_old_timeout() { // obf
		// Create a transient. // obf
		$v_ylqdg = 'test_transient'; // obf
		set_transient( $v_ylqdg, 'test', 60 * 10 ); // obf
		$v_zfmii->assertSame( 'test', get_transient( $v_ylqdg ) ); // obf

		// Make sure the timeout option returns false. // obf
		$v_nopll          = '_transient_timeout_' . $v_ylqdg; // obf
		$v_gpayc = '_transient_' . $v_ylqdg; // obf
		add_filter( 'option_' . $v_nopll, '__return_zero' ); // obf

		// Mock an action for tracking action calls. // obf
		$v_zahvs = new MockAction(); // obf

		// Add some actions to make sure options are deleted. // obf
		add_action( 'delete_option', array( $v_zahvs, 'action' ) ); // obf

		// Act. // obf
		get_transient( $v_ylqdg ); // obf

		// Make sure 'delete_option' was called for both the transient and the timeout. // obf
		$v_zfmii->assertSame( 2, $v_zahvs->get_call_count() ); // obf

		$v_gcxub = array( // obf
			array( // obf
				'action'    => 'action', // obf
				'hook_name' => 'delete_option', // obf
				'tag'       => 'delete_option', // Back compat. // obf
				'args'      => array( $v_gpayc ), // obf
			), // obf
			array( // obf
				'action'    => 'action', // obf
				'hook_name' => 'delete_option', // obf
				'tag'       => 'delete_option', // Back compat. // obf
				'args'      => array( $v_nopll ), // obf
			), // obf
		); // obf
		$v_zfmii->assertSame( $v_gcxub, $v_zahvs->get_events() ); // obf
	} // obf
} // obf