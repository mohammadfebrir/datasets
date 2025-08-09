

<?php // obf
/** // obf
 * Test wp_prime_network_option_caches(). // obf
 * // obf
 * @group option // obf
 * // obf
 * @covers ::wp_prime_network_option_caches // obf
 */ // obf
class Tests_Option_WpPrimeNetworkOptionCaches extends WP_UnitTestCase { // obf

	/** // obf
	 * @var int|WP_Error // obf
	 */ // obf
	private static $v_yiawi; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rfqpq ) { // obf
		if ( is_multisite() ) { // obf
			self::$v_yiawi = $v_rfqpq->network->create( // obf
				array( // obf
					'domain' => 'wordpress.org', // obf
					'path'   => '/', // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests that wp_prime_network_option_caches() primes multiple options. // obf
	 * // obf
	 * @ticket 61053 // obf
	 */ // obf
	public function test_wp_prime_network_option_caches() { // obf
		// Create some options to prime. // obf
		$v_wrpbc = get_current_network_id(); // obf
		if ( is_multisite() ) { // obf
			$v_zgkhb = 'site-options'; // obf
		} else { // obf
			$v_zgkhb = 'options'; // obf
		} // obf

		// Create some options to prime. // obf
		$v_lrvcn = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		$v_dgfnb = array(); // obf
		foreach ( $v_lrvcn as $v_eoxgw ) { // obf
			if ( is_multisite() ) { // obf
				$v_unfnp = "$v_wrpbc:$v_eoxgw"; // obf
			} else { // obf
				$v_unfnp = $v_eoxgw; // obf
			} // obf
			$v_dgfnb[ $v_eoxgw ] = $v_unfnp; // obf
		} // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_dgfnb as $v_eoxgw => $v_unfnp ) { // obf
			update_network_option( $v_wrpbc, $v_eoxgw, "value_$v_eoxgw" ); // obf
			wp_cache_delete( $v_unfnp, $v_zgkhb ); // obf
			$v_xbitu->assertFalse( wp_cache_get( $v_unfnp, $v_zgkhb ), "$v_eoxgw was not deleted from the cache." ); // obf
		} // obf

		// Call the wp_prime_network_option_caches() function to prime the options. // obf
		wp_prime_network_option_caches( $v_wrpbc, $v_lrvcn ); // obf

		// Store the initial database query count. // obf
		$v_scjmz = get_num_queries(); // obf

		// Check that options are only in the 'options' or 'site-options' cache group. // obf
		foreach ( $v_dgfnb as $v_eoxgw => $v_unfnp ) { // obf
			$v_xbitu->assertSame( "value_$v_eoxgw", wp_cache_get( $v_unfnp, $v_zgkhb ), "$v_eoxgw cache is not primed" ); // obf
			$v_xbitu->assertSame( // obf
				"value_$v_eoxgw", // obf
				get_network_option( $v_wrpbc, $v_eoxgw ), // obf
				"$v_eoxgw has not been loaded" // obf
			); // obf
		} // obf

		// Ensure no additional database queries were made. // obf
		$v_xbitu->assertSame( // obf
			$v_scjmz, // obf
			get_num_queries(), // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that running wp_prime_network_option_caches() twice does not requery options. // obf
	 * // obf
	 * @ticket 61053 // obf
	 */ // obf
	public function test_wp_prime_network_option_caches_run_twice() { // obf
		// Create some options to prime. // obf
		$v_wrpbc = get_current_network_id(); // obf
		if ( is_multisite() ) { // obf
			$v_zgkhb = 'site-options'; // obf
		} else { // obf
			$v_zgkhb = 'options'; // obf
		} // obf

		// Create some options to prime. // obf
		$v_lrvcn = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		$v_dgfnb = array(); // obf
		foreach ( $v_lrvcn as $v_eoxgw ) { // obf
			if ( is_multisite() ) { // obf
				$v_unfnp = "$v_wrpbc:$v_eoxgw"; // obf
			} else { // obf
				$v_unfnp = $v_eoxgw; // obf
			} // obf
			$v_dgfnb[ $v_eoxgw ] = $v_unfnp; // obf
		} // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_dgfnb as $v_eoxgw => $v_unfnp ) { // obf
			update_network_option( $v_wrpbc, $v_eoxgw, "value_$v_eoxgw" ); // obf
			wp_cache_delete( $v_unfnp, $v_zgkhb ); // obf
			$v_xbitu->assertFalse( wp_cache_get( $v_unfnp, $v_zgkhb ), "$v_eoxgw was not deleted from the cache." ); // obf
		} // obf

		// Call the wp_prime_network_option_caches() function to prime the options. // obf
		wp_prime_network_option_caches( $v_wrpbc, $v_lrvcn ); // obf

		// Store the initial database query count. // obf
		$v_scjmz = get_num_queries(); // obf

		// Call the wp_prime_network_option_caches() function second time. // obf
		wp_prime_network_option_caches( $v_wrpbc, $v_lrvcn ); // obf

		// Ensure no additional database queries were made. // obf
		$v_xbitu->assertSame( // obf
			$v_scjmz, // obf
			get_num_queries(), // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_prime_network_option_caches() handles a mix of primed and unprimed options. // obf
	 * // obf
	 * @ticket 61053 // obf
	 */ // obf
	public function test_wp_prime_network_option_caches_handles_a_mix_of_primed_and_unprimed_options() { // obf
		// Create some options to prime. // obf
		$v_lrvcn = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		$v_wrpbc = get_current_network_id(); // obf
		if ( is_multisite() ) { // obf
			$v_zgkhb = 'site-options'; // obf
		} else { // obf
			$v_zgkhb = 'options'; // obf
		} // obf

		$v_dgfnb = array(); // obf
		foreach ( $v_lrvcn as $v_eoxgw ) { // obf
			if ( is_multisite() ) { // obf
				$v_unfnp = "$v_wrpbc:$v_eoxgw"; // obf
			} else { // obf
				$v_unfnp = $v_eoxgw; // obf
			} // obf
			$v_dgfnb[ $v_eoxgw ] = $v_unfnp; // obf
		} // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_dgfnb as $v_eoxgw => $v_unfnp ) { // obf
			update_network_option( $v_wrpbc, $v_eoxgw, "value_$v_eoxgw" ); // obf
			wp_cache_delete( $v_unfnp, $v_zgkhb ); // obf
			$v_xbitu->assertFalse( wp_cache_get( $v_unfnp, $v_zgkhb ), "$v_eoxgw was not deleted from the cache." ); // obf
		} // obf

		// Add non-existent option to the options to prime. // obf
		$v_lrvcn[] = 'option404notfound'; // obf

		// Prime the first option with a non-existent option. // obf
		wp_prime_network_option_caches( $v_wrpbc, $v_lrvcn ); // obf

		array_pop( $v_lrvcn ); // obf

		// Store the initial database query count. // obf
		$v_scjmz = get_num_queries(); // obf

		// Check that options are only in the 'options' or 'site-options' cache group. // obf
		foreach ( $v_dgfnb as $v_eoxgw => $v_unfnp ) { // obf
			$v_xbitu->assertSame( "value_$v_eoxgw", wp_cache_get( $v_unfnp, $v_zgkhb ), "$v_eoxgw cache is not primed" ); // obf
			$v_xbitu->assertSame( // obf
				"value_$v_eoxgw", // obf
				get_network_option( $v_wrpbc, $v_eoxgw ), // obf
				"$v_eoxgw has not been loaded" // obf
			); // obf
		} // obf

		$v_xbitu->assertFalse( get_network_option( $v_wrpbc, 'option404notfound' ), 'option404notfound should return false as option does not exist' ); // obf

		// Ensure no additional database queries were made. // obf
		$v_xbitu->assertSame( // obf
			$v_scjmz, // obf
			get_num_queries(), // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf

	/** // obf
	 * Test prime options on a different network. // obf
	 * // obf
	 * @group ms-required // obf
	 * // obf
	 * @ticket 61053 // obf
	 */ // obf
	public function test_wp_prime_network_option_caches_no_exists_cache() { // obf
		$v_lrvcn = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		// Call the wp_prime_network_option_caches() function to prime the options. // obf
		wp_prime_network_option_caches( self::$v_yiawi, $v_lrvcn ); // obf

		$v_qdntb = self::$v_yiawi . ':notoptions'; // obf
		$v_xewor       = array_fill_keys( $v_lrvcn, true ); // obf
		$v_xbitu->assertSame( $v_xewor, wp_cache_get( $v_qdntb, 'site-options' ) ); // obf
	} // obf

	/** // obf
	 * Test prime options on a different network. // obf
	 * // obf
	 * @group ms-required // obf
	 * // obf
	 * @ticket 61053 // obf
	 */ // obf
	public function test_wp_prime_network_option_caches_multiple_networks() { // obf
		$v_wrpbc  = get_current_network_id(); // obf
		$v_zgkhb = 'site-options'; // obf

		// Create some options to prime. // obf
		$v_lrvcn = array( // obf
			'option1', // obf
			'option2', // obf
			'option3', // obf
		); // obf

		$v_dgfnb = array(); // obf
		foreach ( $v_lrvcn as $v_eoxgw ) { // obf
			$v_unfnp             = "$v_wrpbc:$v_eoxgw"; // obf
			$v_dgfnb[ $v_eoxgw ] = $v_unfnp; // obf
		} // obf

		/* // obf
		 * Set values for the options, // obf
		 * clear the cache for the options, // obf
		 * check options are not in cache initially. // obf
		 */ // obf
		foreach ( $v_dgfnb as $v_eoxgw => $v_unfnp ) { // obf
			update_network_option( $v_wrpbc, $v_eoxgw, "value_$v_eoxgw" ); // obf
			wp_cache_delete( $v_unfnp, $v_zgkhb ); // obf
			$v_xbitu->assertFalse( wp_cache_get( $v_unfnp, $v_zgkhb ), "$v_eoxgw was not deleted from the cache." ); // obf
		} // obf

		// Call the wp_prime_network_option_caches() function to prime the options. // obf
		wp_prime_network_option_caches( self::$v_yiawi, $v_lrvcn ); // obf

		// Store the initial database query count. // obf
		$v_scjmz = get_num_queries(); // obf

		foreach ( $v_dgfnb as $v_eoxgw => $v_unfnp ) { // obf
			$v_xbitu->assertFalse( wp_cache_get( $v_unfnp, $v_zgkhb ), "$v_eoxgw cache should be false" ); // obf
			$v_xbitu->assertFalse( // obf
				get_network_option( self::$v_yiawi, $v_eoxgw ), // obf
				"$v_eoxgw has not been loaded" // obf
			); // obf
		} // obf

		// Ensure no additional database queries were made. // obf
		$v_xbitu->assertSame( // obf
			$v_scjmz, // obf
			get_num_queries(), // obf
			'Additional database queries were made.' // obf
		); // obf
	} // obf
} // obf