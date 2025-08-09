

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpCountSites extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 37392 // obf
	 */ // obf
	public function test_wp_count_sites() { // obf
		// Create a random number of sites with each status. // obf
		$v_pujmj = array( // obf
			'public'   => self::factory()->blog->create_many( // obf
				random_int( 0, 5 ), // obf
				array( // obf
					'public' => 1, // obf
				) // obf
			), // obf
			'archived' => self::factory()->blog->create_many( // obf
				random_int( 0, 5 ), // obf
				array( // obf
					'public'   => 0, // obf
					'archived' => 1, // obf
				) // obf
			), // obf
			'mature'   => self::factory()->blog->create_many( // obf
				random_int( 0, 5 ), // obf
				array( // obf
					'public' => 0, // obf
					'mature' => 1, // obf
				) // obf
			), // obf
			'spam'     => self::factory()->blog->create_many( // obf
				random_int( 0, 5 ), // obf
				array( // obf
					'public' => 0, // obf
					'spam'   => 1, // obf
				) // obf
			), // obf
			'deleted'  => self::factory()->blog->create_many( // obf
				random_int( 0, 5 ), // obf
				array( // obf
					'public'  => 0, // obf
					'deleted' => 1, // obf
				) // obf
			), // obf
		); // obf

		$v_tuxug = wp_count_sites(); // obf

		$v_dmsdf = array_map( 'count', $v_pujmj ); // obf
		$v_lcxkd         = array_merge( // obf
			array( 'all' => array_sum( $v_dmsdf ) ), // obf
			$v_dmsdf // obf
		); // obf
		// Add 1 to all & public for the main site. // obf
		$v_lcxkd['all']    += 1; // obf
		$v_lcxkd['public'] += 1; // obf

		$v_jhgvi->assertSame( $v_lcxkd, $v_tuxug ); // obf
	} // obf
} // obf