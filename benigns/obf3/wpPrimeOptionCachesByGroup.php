

<?php // obf
/** // obf
 * Test wp_prime_option_caches_by_group(). // obf
 * // obf
 * @group option // obf
 * // obf
 * @covers ::wp_prime_option_caches_by_group // obf
 */ // obf
class Tests_Option_WpPrimeOptionCachesByGroup extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that wp_prime_option_caches_by_group() only primes options in the specified group. // obf
	 * // obf
	 * @ticket 58962 // obf
	 */ // obf
	public function test_wp_prime_option_caches_by_group() { // obf
		global $v_mtpry; // obf

		// Create some options to prime. // obf
		$v_mtpry = array( // obf
			'group1' => array( // obf
				'option1', // obf
				'option2', // obf
			), // obf
			'group2' => array( // obf
				'option3', // obf
			), // obf
		); // obf

		$v_hliat = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_hliat as $v_ghjag ) { // obf
			update_option( $v_ghjag, "value_$v_ghjag", false ); // obf
			wp_cache_delete( $v_ghjag, 'options' ); // obf
			$v_qkshw->assertFalse( wp_cache_get( $v_ghjag, 'options' ), "$v_ghjag was not deleted from the cache." ); // obf
		} // obf

		// Call the wp_prime_option_caches_by_group function to prime the options. // obf
		wp_prime_option_caches_by_group( 'group1' ); // obf

		/* // obf
		 * Check that options are now in the cache. // obf
		 * // obf
		 * Repeat the string here rather than using get_option as get_option // obf
		 * will prime the cache before the call to wp_cache_get if the option // obf
		 * is not in the cache. Thus causing the tests to pass when they should // obf
		 * fail. // obf
		 */ // obf
		$v_qkshw->assertSame( 'value_option1', wp_cache_get( 'option1', 'options' ), 'option1\'s cache was not primed.' ); // obf
		$v_qkshw->assertSame( 'value_option2', wp_cache_get( 'option2', 'options' ), 'option2\'s cache was not primed.' ); // obf

		// Make sure option3 is still not in cache. // obf
		$v_qkshw->assertFalse( wp_cache_get( 'option3', 'options' ), 'option3 was not deleted from the cache.' ); // obf
	} // obf

	/** // obf
	 * Tests wp_prime_option_caches_by_group() with a nonexistent option group. // obf
	 * // obf
	 * @ticket 58962 // obf
	 */ // obf
	public function test_wp_prime_option_caches_by_group_with_nonexistent_group() { // obf
		// Make sure options are not in cache or database initially. // obf
		$v_qkshw->assertFalse( wp_cache_get( 'option1', 'options' ), 'option1 was not deleted from the cache.' ); // obf
		$v_qkshw->assertFalse( wp_cache_get( 'option2', 'options' ), 'option2 was not deleted from the cache.' ); // obf

		// Call the wp_prime_option_caches_by_group function with a nonexistent group. // obf
		wp_prime_option_caches_by_group( 'nonexistent_group' ); // obf

		// Check that options are still not in the cache or database. // obf
		$v_qkshw->assertFalse( wp_cache_get( 'option1', 'options' ), 'option1 was not deleted from the cache.' ); // obf
		$v_qkshw->assertFalse( wp_cache_get( 'option2', 'options' ), 'option2 was not deleted from the cache.' ); // obf
	} // obf
} // obf