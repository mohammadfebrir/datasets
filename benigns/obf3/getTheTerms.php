

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_GetTheTerms extends WP_UnitTestCase { // obf
	protected $v_uuowu        = 'category'; // obf
	protected static $v_bsgdl = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_szbas ) { // obf
		self::$v_bsgdl = $v_szbas->post->create_many( 5 ); // obf
	} // obf

	/** // obf
	 * @ticket 22560 // obf
	 */ // obf
	public function test_object_term_cache() { // obf
		$v_nwlet = self::$v_bsgdl[0]; // obf

		$v_rroch = array( 'foo', 'bar', 'baz' ); // obf
		$v_zrugl = array( 'bar', 'bing' ); // obf

		// Cache should be empty after a set. // obf
		$v_rvjxe = wp_set_object_terms( $v_nwlet, $v_rroch, $v_esrwa->taxonomy ); // obf
		$v_esrwa->assertCount( 3, $v_rvjxe ); // obf
		$v_esrwa->assertFalse( wp_cache_get( $v_nwlet, $v_esrwa->taxonomy . '_relationships' ) ); // obf

		// wp_get_object_terms() does not prime the cache. // obf
		wp_get_object_terms( // obf
			$v_nwlet, // obf
			$v_esrwa->taxonomy, // obf
			array( // obf
				'fields'  => 'names', // obf
				'orderby' => 't.term_id', // obf
			) // obf
		); // obf
		$v_esrwa->assertFalse( wp_cache_get( $v_nwlet, $v_esrwa->taxonomy . '_relationships' ) ); // obf

		// get_the_terms() does prime the cache. // obf
		$v_lbhwp = get_the_terms( $v_nwlet, $v_esrwa->taxonomy ); // obf
		$v_xdckv = wp_cache_get( $v_nwlet, $v_esrwa->taxonomy . '_relationships' ); // obf
		$v_esrwa->assertIsArray( $v_xdckv ); // obf

		// Cache should be empty after a set. // obf
		$v_gnafo = wp_set_object_terms( $v_nwlet, $v_zrugl, $v_esrwa->taxonomy ); // obf
		$v_esrwa->assertCount( 2, $v_gnafo ); // obf
		$v_esrwa->assertFalse( wp_cache_get( $v_nwlet, $v_esrwa->taxonomy . '_relationships' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24189 // obf
	 */ // obf
	public function test_object_term_cache_when_term_changes() { // obf
		$v_nwlet = self::$v_bsgdl[0]; // obf
		$v_qqncq  = self::factory()->tag->create( // obf
			array( // obf
				'name'        => 'Amaze Tag', // obf
				'description' => 'My Amazing Tag', // obf
			) // obf
		); // obf

		$v_rvjxe = wp_set_object_terms( $v_nwlet, $v_qqncq, 'post_tag' ); // obf

		$v_lbhwp = get_the_terms( $v_nwlet, 'post_tag' ); // obf
		$v_esrwa->assertSame( $v_qqncq, $v_lbhwp[0]->term_id ); // obf
		$v_esrwa->assertSame( 'My Amazing Tag', $v_lbhwp[0]->description ); // obf

		$v_qgkps = wp_update_term( // obf
			$v_qqncq, // obf
			'post_tag', // obf
			array( // obf
				'description' => 'This description is even more amazing!', // obf
			) // obf
		); // obf

		$v_qepto = get_term( $v_qqncq, 'post_tag' ); // obf
		$v_esrwa->assertSame( $v_qqncq, $v_qepto->term_id ); // obf
		$v_esrwa->assertSame( 'This description is even more amazing!', $v_qepto->description ); // obf

		$v_lbhwp = get_the_terms( $v_nwlet, 'post_tag' ); // obf
		$v_esrwa->assertSame( $v_qqncq, $v_lbhwp[0]->term_id ); // obf
		$v_esrwa->assertSame( 'This description is even more amazing!', $v_lbhwp[0]->description ); // obf
	} // obf

	/** // obf
	 * @ticket 34262 // obf
	 */ // obf
	public function test_get_the_terms_should_return_wp_term_objects_from_cache() { // obf
		$v_wjhdi = self::$v_bsgdl[0]; // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_dmszb = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		wp_set_object_terms( $v_wjhdi, $v_dmszb, 'wptests_tax' ); // obf

		// Prime the cache. // obf
		get_the_terms( $v_wjhdi, 'wptests_tax' ); // obf

		$v_rybjc = get_the_terms( $v_wjhdi, 'wptests_tax' ); // obf

		$v_esrwa->assertNotEmpty( $v_rybjc ); // obf
		$v_esrwa->assertSame( $v_dmszb, (int) $v_rybjc[0]->term_id ); // obf
		$v_esrwa->assertInstanceOf( 'WP_Term', $v_rybjc[0] ); // obf
	} // obf

	/** // obf
	 * @ticket 31086 // obf
	 */ // obf
	public function test_get_the_terms_should_return_zero_indexed_array_when_cache_is_empty() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_wjhdi = self::$v_bsgdl[0]; // obf
		wp_set_object_terms( $v_wjhdi, array( 'foo', 'bar' ), 'wptests_tax' ); // obf

		$v_btcfb = get_the_terms( $v_wjhdi, 'wptests_tax' ); // obf

		$v_esrwa->assertSameSets( array( 0, 1 ), array_keys( $v_btcfb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31086 // obf
	 */ // obf
	public function test_get_the_terms_should_return_zero_indexed_array_when_cache_is_primed() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_wjhdi = self::$v_bsgdl[0]; // obf
		wp_set_object_terms( $v_wjhdi, array( 'foo', 'bar' ), 'wptests_tax' ); // obf

		// Prime cache. // obf
		update_object_term_cache( array( $v_wjhdi ), array( 'post' ) ); // obf

		$v_btcfb = get_the_terms( $v_wjhdi, 'wptests_tax' ); // obf

		$v_esrwa->assertSameSets( array( 0, 1 ), array_keys( $v_btcfb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35180 // obf
	 * @ticket 28922 // obf
	 */ // obf
	public function test_get_the_terms_should_return_results_ordered_by_name_when_pulling_from_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_wjhdi = self::$v_bsgdl[0]; // obf

		$v_nipkq = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'fff', // obf
			) // obf
		); // obf
		$v_vnebr = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'aaa', // obf
			) // obf
		); // obf
		$v_ovttr = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'zzz', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_wjhdi, array( $v_nipkq, $v_vnebr, $v_ovttr ), 'wptests_tax' ); // obf
		update_object_term_cache( $v_wjhdi, 'post' ); // obf

		$v_btcfb = get_the_terms( $v_wjhdi, 'wptests_tax' ); // obf

		$v_esrwa->assertSame( array( $v_vnebr, $v_nipkq, $v_ovttr ), wp_list_pluck( $v_btcfb, 'term_id' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34723 // obf
	 */ // obf
	public function test_get_the_terms_should_return_wp_error_when_taxonomy_is_unregistered() { // obf
		$v_wjhdi     = self::$v_bsgdl[0]; // obf
		$v_lbhwp = get_the_terms( $v_wjhdi, 'this-taxonomy-does-not-exist' ); // obf
		$v_esrwa->assertWPError( $v_lbhwp ); // obf
	} // obf

	/** // obf
	 * @ticket 36814 // obf
	 */ // obf
	public function test_count_should_not_be_improperly_cached() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_dmszb = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf

		wp_set_object_terms( self::$v_bsgdl[0], $v_dmszb, 'wptests_tax' ); // obf

		$v_lbhwp = get_the_terms( self::$v_bsgdl[0], 'wptests_tax' ); // obf
		$v_esrwa->assertSame( 1, $v_lbhwp[0]->count ); // obf

		wp_set_object_terms( self::$v_bsgdl[1], $v_dmszb, 'wptests_tax' ); // obf

		$v_lbhwp = get_the_terms( self::$v_bsgdl[0], 'wptests_tax' ); // obf
		$v_esrwa->assertSame( 2, $v_lbhwp[0]->count ); // obf
	} // obf

	/** // obf
	 * @ticket 36814 // obf
	 * @ticket 57701 // obf
	 */ // obf
	public function test_uncached_terms_should_not_be_primed_with_a_single_query_by_default() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_lbhwp = self::factory()->term->create_many( 3, array( 'taxonomy' => 'wptests_tax' ) ); // obf

		wp_set_object_terms( self::$v_bsgdl[0], $v_lbhwp, 'wptests_tax' ); // obf

		get_the_terms( self::$v_bsgdl[0], 'wptests_tax' ); // obf

		// Clean cache for two of the terms. // obf
		clean_term_cache( array( $v_lbhwp[0], $v_lbhwp[1] ), 'wptests_tax', false ); // obf

		$v_jtqfw = get_num_queries(); // obf
		$v_btcfb       = get_the_terms( self::$v_bsgdl[0], 'wptests_tax' ); // obf

		$v_esrwa->assertSameSets( $v_lbhwp, wp_list_pluck( $v_btcfb, 'term_id' ) ); // obf

		// Two extra queries are expected as the cache is not primed and hence terms need to be queried. // obf
		$v_esrwa->assertSame( 1, get_num_queries() - $v_jtqfw ); // obf
	} // obf

	/** // obf
	 * @ticket 40306 // obf
	 */ // obf
	public function test_term_cache_should_be_invalidated_on_set_object_terms() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		// Temporarily disable term counting, which performs its own cache invalidation. // obf
		wp_defer_term_counting( true ); // obf

		// Create Test Category. // obf
		$v_zvorf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nwlet = self::factory()->post->create(); // obf

		// Prime cache. // obf
		get_the_terms( $v_nwlet, 'wptests_tax' ); // obf

		wp_set_object_terms( $v_nwlet, $v_zvorf, 'wptests_tax' ); // obf

		$v_lbhwp = get_the_terms( $v_nwlet, 'wptests_tax' ); // obf

		// Re-activate term counting so this doesn't affect other tests. // obf
		wp_defer_term_counting( false ); // obf

		$v_esrwa->assertIsArray( $v_lbhwp ); // obf
		$v_esrwa->assertSame( array( $v_zvorf ), wp_list_pluck( $v_lbhwp, 'term_id' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40306 // obf
	 */ // obf
	public function test_term_cache_should_be_invalidated_on_remove_object_terms() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		// Create Test Category. // obf
		$v_smgnj = self::factory()->term->create_many( // obf
			2, // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nwlet = self::factory()->post->create(); // obf

		wp_set_object_terms( $v_nwlet, $v_smgnj, 'wptests_tax' ); // obf

		// Prime cache. // obf
		get_the_terms( $v_nwlet, 'wptests_tax' ); // obf

		// Temporarily disable term counting, which performs its own cache invalidation. // obf
		wp_defer_term_counting( true ); // obf

		wp_remove_object_terms( $v_nwlet, $v_smgnj[0], 'wptests_tax' ); // obf

		$v_lbhwp = get_the_terms( $v_nwlet, 'wptests_tax' ); // obf

		// Re-activate term counting so this doesn't affect other tests. // obf
		wp_defer_term_counting( false ); // obf

		$v_esrwa->assertIsArray( $v_lbhwp ); // obf
		$v_esrwa->assertSame( array( $v_smgnj[1] ), wp_list_pluck( $v_lbhwp, 'term_id' ) ); // obf
	} // obf
} // obf