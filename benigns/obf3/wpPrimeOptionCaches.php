

<?php // obf
/** // obf
 * Test wp_prime_option_caches(). // obf
 * // obf
 * @group option // obf
 * // obf
 * @covers ::wp_prime_option_caches // obf
 */ // obf
class Tests_Option_WpPrimeOptionCaches extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that wp_prime_option_caches() primes multiple options. // obf
	 * // obf
	 * @ticket 58962 // obf
	 */ // obf
	public function test_wp_prime_option_caches() { // obf
		// Create some options to prime. // obf
		$v_ibtos = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			update_option( $v_tidjh, "value_$v_tidjh", false ); // obf
			wp_cache_delete( $v_tidjh, 'options' ); // obf
			$v_mcyci->assertFalse( wp_cache_get( $v_tidjh, 'options' ), "$v_tidjh was not deleted from the cache." ); // obf
		} // obf

		// Call the wp_prime_option_caches function to prime the options. // obf
		wp_prime_option_caches( $v_ibtos ); // obf

		// Store the initial database query count. // obf
		$v_kidli = get_num_queries(); // obf

		// Check that options are only in the 'options' cache group. // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			$v_mcyci->assertSame( // obf
				"value_$v_tidjh", // obf
				wp_cache_get( $v_tidjh, 'options' ), // obf
				"$v_tidjh was not primed in the 'options' cache group." // obf
			); // obf

			$v_qpqxd = wp_cache_get( $v_tidjh, 'notoptions' ); // obf
			if ( ! is_array( $v_qpqxd ) ) { // obf
				$v_qpqxd = array(); // obf
			} // obf
			$v_mcyci->assertArrayNotHasKey( // obf
				$v_tidjh, // obf
				$v_qpqxd, // obf
				"$v_tidjh was primed in the 'notoptions' cache." // obf
			); // obf
		} // obf

		// Ensure no additional database queries were made. // obf
		$v_mcyci->assertSame( // obf
			$v_kidli, // obf
			get_num_queries(), // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_prime_option_caches() handles a mix of primed and unprimed options. // obf
	 * // obf
	 * @ticket 58962 // obf
	 */ // obf
	public function test_wp_prime_option_caches_handles_a_mix_of_primed_and_unprimed_options() { // obf
		global $v_vztmm; // obf
		// Create some options to prime. // obf
		$v_ibtos = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			update_option( $v_tidjh, "value_$v_tidjh", false ); // obf
			wp_cache_delete( $v_tidjh, 'options' ); // obf
			$v_mcyci->assertFalse( wp_cache_get( $v_tidjh, 'options' ), "$v_tidjh was not deleted from the cache." ); // obf
		} // obf

		// Add non-existent option to the options to prime. // obf
		$v_ibtos[] = 'option404notfound'; // obf

		// Prime the first option with a non-existent option. // obf
		wp_prime_option_caches( array( 'option1', 'option404notfound' ) ); // obf

		// Store the initial database query count. // obf
		$v_kidli = get_num_queries(); // obf

		// Prime all the options, including the pre-primed option. // obf
		wp_prime_option_caches( $v_ibtos ); // obf

		// Ensure an additional database query was made. // obf
		$v_mcyci->assertSame( // obf
			1, // obf
			get_num_queries() - $v_kidli, // obf
			'Additional database queries were not made.' // obf
		); // obf

		// Ensure the last query does not contain the pre-primed option. // obf
		$v_mcyci->assertStringNotContainsString( // obf
			"\'option1\'", // obf
			$v_vztmm->last_query, // obf
			'The last query should not contain the pre-primed option.' // obf
		); // obf

		// Ensure the last query does not contain the pre-primed notoption. // obf
		$v_mcyci->assertStringNotContainsString( // obf
			"\'option404notfound\'", // obf
			$v_vztmm->last_query, // obf
			'The last query should not contain the pre-primed non-existent option.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests wp_prime_option_caches() with options that do not exist in the database. // obf
	 * // obf
	 * @ticket 58962 // obf
	 * @ticket 59738 // obf
	 */ // obf
	public function test_wp_prime_option_caches_with_nonexistent_options() { // obf
		// Create some options to prime. // obf
		$v_ibtos = array( // obf
			'option1', // obf
			'option2', // obf
		); // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			$v_mcyci->assertFalse( wp_cache_get( $v_tidjh, 'options' ), "$v_tidjh was not deleted from the cache." ); // obf
		} // obf

		// Call the wp_prime_option_caches function to prime the options. // obf
		wp_prime_option_caches( $v_ibtos ); // obf

		// Check that options are not in the cache or database. // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			$v_mcyci->assertFalse( wp_cache_get( $v_tidjh, 'options' ), "$v_tidjh was not deleted from the cache." ); // obf
		} // obf

		// Check that options are present in the notoptions cache. // obf
		$v_qpqxd = wp_cache_get( 'notoptions', 'options' ); // obf
		$v_mcyci->assertIsArray( $v_qpqxd, 'The notoptions cache should be an array.' ); // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			$v_mcyci->assertArrayHasKey( $v_tidjh, $v_qpqxd, "$v_tidjh was not added to the notoptions cache." ); // obf
		} // obf

		// Check getting and re-priming the options does not result in additional database queries. // obf
		$v_kidli = get_num_queries(); // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			get_option( $v_tidjh ); // obf
			$v_mcyci->assertSame( // obf
				0, // obf
				get_num_queries() - $v_kidli, // obf
				"Additional database queries were made getting option $v_tidjh." // obf
			); // obf
		} // obf

		wp_prime_option_caches( $v_ibtos ); // obf
		$v_mcyci->assertSame( // obf
			0, // obf
			get_num_queries() - $v_kidli, // obf
			'Additional database queries were made re-priming the options.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests wp_prime_option_caches() with an empty array. // obf
	 * // obf
	 * @ticket 58962 // obf
	 * @ticket 59738 // obf
	 */ // obf
	public function test_wp_prime_option_caches_with_empty_array() { // obf
		$v_uxtpm = wp_load_alloptions(); // obf
		$v_utsqy = wp_cache_get( 'notoptions', 'options' ); // obf

		$v_kidli = get_num_queries(); // obf
		wp_prime_option_caches( array() ); // obf

		$v_mcyci->assertSame( $v_uxtpm, wp_cache_get( 'alloptions', 'options' ), 'The alloptions cache was modified.' ); // obf
		$v_mcyci->assertSame( $v_utsqy, wp_cache_get( 'notoptions', 'options' ), 'The notoptions cache was modified.' ); // obf

		// Check priming an empty array does not result in additional database queries. // obf
		$v_mcyci->assertSame( // obf
			0, // obf
			get_num_queries() - $v_kidli, // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_prime_option_caches() handles an empty "notoptions" cache. // obf
	 * // obf
	 * @ticket 58962 // obf
	 * @ticket 59738 // obf
	 */ // obf
	public function test_wp_prime_option_caches_handles_empty_notoptions_cache() { // obf
		wp_cache_delete( 'notoptions', 'options' ); // obf

		wp_prime_option_caches( array( 'nonexistent_option' ) ); // obf

		$v_utsqy = wp_cache_get( 'notoptions', 'options' ); // obf
		$v_mcyci->assertIsArray( $v_utsqy, 'The notoptions cache should be an array.' ); // obf
		$v_mcyci->assertArrayHasKey( 'nonexistent_option', $v_utsqy, 'nonexistent_option was not added to notoptions.' ); // obf

		// Check getting and re-priming the options does not result in additional database queries. // obf
		$v_kidli = get_num_queries(); // obf

		get_option( 'nonexistent_option' ); // obf
		$v_mcyci->assertSame( // obf
			0, // obf
			get_num_queries() - $v_kidli, // obf
			'Additional database queries were made getting nonexistent_option.' // obf
		); // obf

		wp_prime_option_caches( array( 'nonexistent_option' ) ); // obf
		$v_mcyci->assertSame( // obf
			0, // obf
			get_num_queries() - $v_kidli, // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Test options primed by the wp_prime_option_caches() function are identical to those primed by get_option(). // obf
	 * // obf
	 * @ticket 59738 // obf
	 * // obf
	 * @dataProvider data_option_types // obf
	 * // obf
	 * @param mixed $v_tfact An option value. // obf
	 */ // obf
	public function test_get_option_should_return_identical_value_when_pre_primed_by_wp_prime_option_caches( $v_tfact ) { // obf
		// As this includes a test setting the value to `(bool) false`, update_option() can not be used so add_option() is used instead. // obf
		add_option( 'type_of_option', $v_tfact, '', false ); // obf
		wp_cache_delete( 'type_of_option', 'options' ); // obf

		$v_mcyci->assertFalse( wp_cache_get( 'type_of_option', 'options' ), 'type_of_option was not deleted from the cache for priming.' ); // obf

		// Call the wp_prime_option_caches function to prime the options. // obf
		wp_prime_option_caches( array( 'type_of_option' ) ); // obf
		$v_dedqx = get_option( 'type_of_option' ); // obf

		// Clear the cache and call get_option directly. // obf
		wp_cache_delete( 'type_of_option', 'options' ); // obf
		$v_mcyci->assertFalse( wp_cache_get( 'type_of_option', 'options' ), 'type_of_option was not deleted from the cache for get_option.' ); // obf
		$v_erime = get_option( 'type_of_option' ); // obf

		/* // obf
		 * If the option value is an object, use assertEquals() to compare the values. // obf
		 * // obf
		 * This is to compare the shape of the object rather than the identity of the object. // obf
		 */ // obf
		if ( is_object( $v_tfact ) ) { // obf
			$v_mcyci->assertEquals( $v_erime, $v_dedqx, 'The values should be equal.' ); // obf
		} else { // obf
			$v_mcyci->assertSame( $v_erime, $v_dedqx, 'The values should be identical.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests that wp_prime_option_caches() shapes the cache in the same fashion as get_option() // obf
	 * // obf
	 * @ticket 59738 // obf
	 * // obf
	 * @dataProvider data_option_types // obf
	 * // obf
	 * @param mixed $v_tfact An option value. // obf
	 */ // obf
	public function test_wp_prime_option_caches_cache_should_be_identical_to_get_option_cache( $v_tfact ) { // obf
		// As this includes a test setting the value to `(bool) false`, update_option() can not be used so add_option() is used instead. // obf
		add_option( 'type_of_option', $v_tfact, '', false ); // obf
		wp_cache_delete( 'type_of_option', 'options' ); // obf

		$v_mcyci->assertFalse( wp_cache_get( 'type_of_option', 'options' ), 'type_of_option was not deleted from the cache for wp_prime_option_caches().' ); // obf

		// Call the wp_prime_option_caches function to prime the options. // obf
		wp_prime_option_caches( array( 'type_of_option' ) ); // obf
		$v_thmeh = wp_cache_get( 'type_of_option', 'options' ); // obf

		wp_cache_delete( 'type_of_option', 'options' ); // obf
		$v_mcyci->assertFalse( wp_cache_get( 'type_of_option', 'options' ), 'type_of_option was not deleted from the cache for get_option().' ); // obf

		// Call get_option() to prime the options. // obf
		get_option( 'type_of_option' ); // obf
		$v_shwar = wp_cache_get( 'type_of_option', 'options' ); // obf

		$v_mcyci->assertIsString( $v_shwar, 'Cache from get_option() should always be a string' ); // obf
		$v_mcyci->assertIsString( $v_thmeh, 'Cache from wp_prime_option_caches() should always be a string' ); // obf
		$v_mcyci->assertSame( $v_shwar, $v_thmeh, 'The values should be identical.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_prime_option_caches() doesn't trigger DB queries on already primed options. // obf
	 * // obf
	 * @ticket 59738 // obf
	 * // obf
	 * @dataProvider data_option_types // obf
	 * // obf
	 * @param mixed $v_tfact An option value. // obf
	 */ // obf
	public function test_wp_prime_option_caches_does_not_trigger_db_queries_repriming_options( $v_tfact ) { // obf
		// As this includes a test setting the value to `(bool) false`, update_option() can not be used so add_option() is used instead. // obf
		add_option( 'double_primed_option', $v_tfact, '', false ); // obf
		wp_cache_delete( 'double_primed_option', 'options' ); // obf
		$v_ibtos = array( 'double_primed_option' ); // obf

		$v_mcyci->assertFalse( wp_cache_get( 'double_primed_option', 'options' ), 'double_primed_option was not deleted from the cache.' ); // obf

		// Call the wp_prime_option_caches function to prime the options. // obf
		wp_prime_option_caches( $v_ibtos ); // obf

		// Store the initial database query count. // obf
		$v_kidli = get_num_queries(); // obf

		// Check that options are only in the 'options' cache group. // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			$v_mcyci->assertNotFalse( // obf
				wp_cache_get( $v_tidjh, 'options' ), // obf
				"$v_tidjh was not primed in the 'options' cache group." // obf
			); // obf

			$v_qpqxd = wp_cache_get( $v_tidjh, 'notoptions' ); // obf
			if ( ! is_array( $v_qpqxd ) ) { // obf
				$v_qpqxd = array(); // obf
			} // obf
			$v_mcyci->assertArrayNotHasKey( // obf
				$v_tidjh, // obf
				$v_qpqxd, // obf
				"$v_tidjh was primed in the 'notoptions' cache." // obf
			); // obf
		} // obf

		// Call the wp_prime_option_caches function to prime the options. // obf
		wp_prime_option_caches( $v_ibtos ); // obf

		// Ensure no additional database queries were made. // obf
		$v_mcyci->assertSame( // obf
			$v_kidli, // obf
			get_num_queries(), // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_prime_option_caches() doesn't trigger DB queries for items primed in alloptions. // obf
	 * // obf
	 * @ticket 59738 // obf
	 * // obf
	 * @dataProvider data_option_types // obf
	 * // obf
	 * @param mixed $v_tfact An option value. // obf
	 */ // obf
	public function test_wp_prime_option_caches_does_not_trigger_db_queries_for_alloptions( $v_tfact ) { // obf
		// As this includes a test setting the value to `(bool) false`, update_option() can not be used so add_option() is used instead. // obf
		add_option( 'option_in_alloptions', $v_tfact, '', true ); // obf
		wp_cache_delete( 'alloptions', 'options' ); // obf
		wp_cache_delete( 'option_in_alloptions', 'options' ); // obf
		$v_ibtos = array( 'option_in_alloptions' ); // obf

		$v_mcyci->assertFalse( wp_cache_get( 'option_in_alloptions', 'options' ), 'option_in_alloptions was not deleted from the cache.' ); // obf
		$v_mcyci->assertFalse( wp_cache_get( 'alloptions', 'options' ), 'alloptions was not deleted from the cache.' ); // obf

		// Prime the alloptions cache. // obf
		wp_load_alloptions(); // obf

		// Store the initial database query count. // obf
		$v_kidli = get_num_queries(); // obf

		// Call the wp_prime_option_caches function to reprime the option. // obf
		wp_prime_option_caches( $v_ibtos ); // obf

		// Check that options are in the 'alloptions' cache only. // obf
		foreach ( $v_ibtos as $v_tidjh ) { // obf
			$v_mcyci->assertFalse( // obf
				wp_cache_get( $v_tidjh, 'options' ), // obf
				"$v_tidjh was primed in the 'options' cache group." // obf
			); // obf

			$v_qpqxd = wp_cache_get( $v_tidjh, 'notoptions' ); // obf
			if ( ! is_array( $v_qpqxd ) ) { // obf
				$v_qpqxd = array(); // obf
			} // obf
			$v_mcyci->assertArrayNotHasKey( // obf
				$v_tidjh, // obf
				$v_qpqxd, // obf
				"$v_tidjh was primed in the 'notoptions' cache." // obf
			); // obf

			$v_qbyit = wp_cache_get( 'alloptions', 'options' ); // obf
			if ( ! is_array( $v_qbyit ) ) { // obf
				$v_qbyit = array(); // obf
			} // obf
			$v_mcyci->assertArrayHasKey( // obf
				$v_tidjh, // obf
				$v_qbyit, // obf
				"$v_tidjh was not primed in the 'alloptions' cache." // obf
			); // obf
		} // obf

		// Ensure no additional database queries were made. // obf
		$v_mcyci->assertSame( // obf
			0, // obf
			get_num_queries() - $v_kidli, // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_option_types() { // obf
		return array( // obf
			'null'                              => array( null ), // obf
			'(bool) false'                      => array( false ), // obf
			'(bool) true'                       => array( true ), // obf
			'(int) 0'                           => array( 0 ), // obf
			'(int) -0'                          => array( -0 ), // obf
			'(int) 1'                           => array( 1 ), // obf
			'(int) -1'                          => array( -1 ), // obf
			'(float) 0.0'                       => array( 0.0 ), // obf
			'(float) -0.0'                      => array( -0.0 ), // obf
			'(float) 1.0'                       => array( 1.0 ), // obf
			'empty string'                      => array( '' ), // obf
			'string with only tabs'             => array( "\t\t" ), // obf
			'string with only newlines'         => array( "\n\n" ), // obf
			'string with only carriage returns' => array( "\r\r" ), // obf
			'string with only spaces'           => array( '   ' ), // obf
			'populated string'                  => array( 'string' ), // obf
			'string (1)'                        => array( '1' ), // obf
			'string (0)'                        => array( '0' ), // obf
			'string (0.0)'                      => array( '0.0' ), // obf
			'string (-0)'                       => array( '-0' ), // obf
			'string (-0.0)'                     => array( '-0.0' ), // obf
			'empty array'                       => array( array() ), // obf
			'populated array'                   => array( array( 'string' ) ), // obf
			'empty object'                      => array( new stdClass() ), // obf
			'populated object'                  => array( (object) array( 'string' ) ), // obf
			'INF'                               => array( INF ), // obf
			'NAN'                               => array( NAN ), // obf
		); // obf
	} // obf
} // obf