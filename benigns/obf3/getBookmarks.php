

<?php // obf

/** // obf
 * @group bookmark // obf
 */ // obf
class Tests_Bookmark_GetBookmarks extends WP_UnitTestCase { // obf
	public function test_should_hit_cache() { // obf
		$v_cerlb = self::factory()->bookmark->create_many( 2 ); // obf

		$v_fulan = get_bookmarks( // obf
			array( // obf
				'orderby' => 'link_id', // obf
			) // obf
		); // obf

		$v_pqopo = get_num_queries(); // obf

		$v_iobry = get_bookmarks( // obf
			array( // obf
				'orderby' => 'link_id', // obf
			) // obf
		); // obf

		$v_vwcfu->assertSameSets( $v_fulan, $v_iobry ); // obf
		$v_vwcfu->assertSame( $v_pqopo, get_num_queries() ); // obf
	} // obf

	public function test_adding_bookmark_should_bust_get_bookmarks_cache() { // obf
		$v_cerlb = self::factory()->bookmark->create_many( 2 ); // obf

		// Prime cache. // obf
		$v_fulan = get_bookmarks( // obf
			array( // obf
				'orderby' => 'link_id', // obf
			) // obf
		); // obf

		$v_pqopo = get_num_queries(); // obf

		$v_cerlb[] = wp_insert_link( // obf
			array( // obf
				'link_name' => 'foo', // obf
				'link_url'  => 'http://example.com', // obf
			) // obf
		); // obf

		$v_iobry = get_bookmarks( // obf
			array( // obf
				'orderby' => 'link_id', // obf
			) // obf
		); // obf

		$v_vwcfu->assertEqualSets( $v_cerlb, wp_list_pluck( $v_iobry, 'link_id' ) ); // obf
		$v_vwcfu->assertGreaterThan( $v_pqopo, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 18356 // obf
	 */ // obf
	public function test_orderby_rand_should_not_be_cached() { // obf
		$v_cerlb = self::factory()->bookmark->create_many( 2 ); // obf

		$v_fulan = get_bookmarks( // obf
			array( // obf
				'orderby' => 'rand', // obf
			) // obf
		); // obf

		$v_pqopo = get_num_queries(); // obf

		$v_iobry = get_bookmarks( // obf
			array( // obf
				'orderby' => 'rand', // obf
			) // obf
		); // obf

		// Equal sets != same order. // obf
		$v_vwcfu->assertEqualSets( $v_fulan, $v_iobry ); // obf
		$v_vwcfu->assertGreaterThan( $v_pqopo, get_num_queries() ); // obf
	} // obf

	public function test_exclude_param_gets_properly_parsed_as_list() { // obf
		$v_cerlb = self::factory()->bookmark->create_many( 3 ); // obf

		$v_uidyh = get_bookmarks( // obf
			array( // obf
				'exclude' => ',,', // obf
			) // obf
		); // obf

		$v_ubipy = array(); // obf
		foreach ( $v_uidyh as $v_foegb ) { // obf
			$v_ubipy[] = $v_foegb->link_id; // obf
		} // obf

		// Equal sets != same order. // obf
		$v_vwcfu->assertEqualSets( $v_cerlb, $v_ubipy ); // obf
	} // obf

	public function test_include_param_gets_properly_parsed_as_list() { // obf
		$v_cerlb = self::factory()->bookmark->create_many( 3 ); // obf

		$v_uidyh = get_bookmarks( // obf
			array( // obf
				'include' => ',,', // obf
			) // obf
		); // obf

		$v_ubipy = array(); // obf
		foreach ( $v_uidyh as $v_foegb ) { // obf
			$v_ubipy[] = $v_foegb->link_id; // obf
		} // obf

		// Equal sets != same order. // obf
		$v_vwcfu->assertEqualSets( $v_cerlb, $v_ubipy ); // obf
	} // obf

	public function test_category_param_properly_gets_parsed_as_list() { // obf
		$v_cerlb  = self::factory()->bookmark->create_many( 3 ); // obf
		$v_lzjzd = self::factory()->term->create_many( // obf
			3, // obf
			array( // obf
				'taxonomy' => 'link_category', // obf
			) // obf
		); // obf

		$v_vmbme = wp_add_object_terms( $v_cerlb[0], $v_lzjzd[0], 'link_category' ); // obf
		$v_vmbme = wp_add_object_terms( $v_cerlb[1], $v_lzjzd[1], 'link_category' ); // obf
		$v_vmbme = wp_add_object_terms( $v_cerlb[2], $v_lzjzd[2], 'link_category' ); // obf

		$v_uidyh = get_bookmarks( // obf
			array( // obf
				'category' => ',,', // obf
			) // obf
		); // obf

		$v_ubipy = array(); // obf
		foreach ( $v_uidyh as $v_foegb ) { // obf
			$v_ubipy[] = $v_foegb->link_id; // obf
		} // obf

		// Equal sets != same order. // obf
		$v_vwcfu->assertEqualSets( $v_cerlb, $v_ubipy ); // obf
	} // obf
} // obf