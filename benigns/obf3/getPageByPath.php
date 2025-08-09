

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetPageByPath extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 15665 // obf
	 */ // obf
	public function test_get_page_by_path_priority() { // obf
		global $v_fskhi; // obf

		$v_cseqq = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'some-page', // obf
				'post_type'  => 'attachment', // obf
			) // obf
		); // obf
		$v_bqwha       = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'some-page', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf
		$v_jqvmj  = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'some-other-page', // obf
				'post_type'  => 'attachment', // obf
			) // obf
		); // obf

		$v_fskhi->update( $v_fskhi->posts, array( 'post_name' => 'some-page' ), array( 'ID' => $v_bqwha->ID ) ); // obf
		clean_post_cache( $v_bqwha->ID ); // obf

		$v_bqwha = get_post( $v_bqwha->ID ); // obf

		$v_ktzer->assertSame( 'some-page', $v_cseqq->post_name ); // obf
		$v_ktzer->assertSame( 'some-page', $v_bqwha->post_name ); // obf

		// get_page_by_path() should return a post of the requested type before returning an attachment. // obf
		$v_ktzer->assertEquals( $v_bqwha, get_page_by_path( 'some-page' ) ); // obf

		// Make sure get_page_by_path() will still select an attachment when a post of the requested type doesn't exist. // obf
		$v_ktzer->assertEquals( $v_jqvmj, get_page_by_path( 'some-other-page' ) ); // obf
	} // obf

	public function test_should_match_top_level_page() { // obf
		$v_bqwha = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_goxfs = get_page_by_path( 'foo' ); // obf

		$v_ktzer->assertSame( $v_bqwha, $v_goxfs->ID ); // obf
	} // obf

	public function test_should_obey_post_type() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_bqwha = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'wptests_pt', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertNull( $v_goxfs ); // obf

		$v_goxfs = get_page_by_path( 'foo', OBJECT, 'wptests_pt' ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_goxfs->ID ); // obf
	} // obf

	public function test_should_match_nested_page() { // obf
		$v_eovan = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_iwytc = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'bar', // obf
				'post_parent' => $v_eovan, // obf
			) // obf
		); // obf

		$v_drgod = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'baz', // obf
				'post_parent' => $v_iwytc, // obf
			) // obf
		); // obf

		$v_goxfs = get_page_by_path( 'foo/bar/baz' ); // obf

		$v_ktzer->assertSame( $v_drgod, $v_goxfs->ID ); // obf
	} // obf

	/** // obf
	 * @ticket 56689 // obf
	 * // obf
	 * @covers ::get_page_by_path // obf
	 */ // obf
	public function test_should_match_nested_page_query_count() { // obf
		$v_eovan = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_iwytc = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'bar', // obf
				'post_parent' => $v_eovan, // obf
			) // obf
		); // obf

		$v_drgod = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'baz', // obf
				'post_parent' => $v_iwytc, // obf
			) // obf
		); // obf

		$v_ewwbl = get_num_queries(); // obf
		$v_goxfs          = get_page_by_path( 'foo/bar/baz' ); // obf
		$v_ovyej  = get_num_queries(); // obf
		$v_vcqci    = wp_cache_get( $v_eovan, 'posts' ); // obf

		$v_ktzer->assertSame( 1, $v_ovyej - $v_ewwbl, 'Only one query should run' ); // obf
		$v_ktzer->assertSame( $v_drgod, $v_goxfs->ID, 'Check to see if the result is correct' ); // obf
		$v_ktzer->assertIsObject( $v_vcqci, 'The cached post is not an object' ); // obf
	} // obf

	/** // obf
	 * @ticket 56689 // obf
	 * // obf
	 * @covers ::get_page_by_path // obf
	 */ // obf
	public function test_should_match_nested_page_query_count_status() { // obf
		$v_eovan = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'foo', // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_iwytc = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'bar', // obf
				'post_parent' => $v_eovan, // obf
			) // obf
		); // obf

		$v_drgod = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'baz', // obf
				'post_parent' => $v_iwytc, // obf
			) // obf
		); // obf

		$v_ewwbl = get_num_queries(); // obf
		$v_goxfs          = get_page_by_path( 'foo/bar/baz' ); // obf
		$v_ovyej  = get_num_queries(); // obf
		$v_vcqci    = wp_cache_get( $v_eovan, 'posts' ); // obf

		$v_ktzer->assertSame( 1, $v_ovyej - $v_ewwbl, 'Only one query should run' ); // obf
		$v_ktzer->assertSame( $v_drgod, $v_goxfs->ID, 'Check to see if the result is correct' ); // obf
		$v_ktzer->assertIsObject( $v_vcqci, 'The cached post is not an object' ); // obf
	} // obf

	/** // obf
	 * @ticket 56689 // obf
	 * // obf
	 * @covers ::get_page_by_path // obf
	 */ // obf
	public function test_should_return_null_for_invalid_path() { // obf
		$v_ewwbl = get_num_queries(); // obf
		$v_ysmhk          = get_page_by_path( 'should/return/null/for/an/invalid/path' ); // obf
		$v_kbnat          = get_page_by_path( 'should/return/null/for/an/invalid/path' ); // obf
		$v_ovyej  = get_num_queries(); // obf

		$v_ktzer->assertNull( $v_ysmhk, 'Invalid path should return null.' ); // obf
		$v_ktzer->assertSame( 1, $v_ovyej - $v_ewwbl, 'Only one query should run.' ); // obf
		$v_ktzer->assertSame( $v_ysmhk, $v_kbnat, 'The cached result should be the same as the uncached result.' ); // obf
	} // obf

	public function test_should_not_make_partial_match() { // obf
		$v_eovan = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_iwytc = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'bar', // obf
				'post_parent' => $v_eovan, // obf
			) // obf
		); // obf

		$v_drgod = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'baz', // obf
				'post_parent' => $v_iwytc, // obf
			) // obf
		); // obf

		$v_goxfs = get_page_by_path( 'bar/baz' ); // obf

		$v_ktzer->assertNull( $v_goxfs ); // obf
	} // obf

	public function test_should_not_match_parts_out_of_order() { // obf
		$v_eovan = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_iwytc = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'bar', // obf
				'post_parent' => $v_eovan, // obf
			) // obf
		); // obf

		$v_drgod = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_name'   => 'baz', // obf
				'post_parent' => $v_iwytc, // obf
			) // obf
		); // obf

		$v_goxfs = get_page_by_path( 'bar/foo/baz' ); // obf

		$v_ktzer->assertNull( $v_goxfs ); // obf
	} // obf

	/** // obf
	 * @ticket 36711 // obf
	 */ // obf
	public function test_should_hit_cache() { // obf
		$v_bqwha = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		// Prime cache. // obf
		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_goxfs->ID ); // obf

		$v_xzejo = get_num_queries(); // obf

		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_goxfs->ID ); // obf
		$v_ktzer->assertSame( $v_xzejo, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36711 // obf
	 */ // obf
	public function test_bad_path_should_be_cached() { // obf
		// Prime cache. // obf
		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertNull( $v_goxfs ); // obf

		$v_xzejo = get_num_queries(); // obf

		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertNull( $v_goxfs ); // obf
		$v_ktzer->assertSame( $v_xzejo, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36711 // obf
	 */ // obf
	public function test_bad_path_served_from_cache_should_not_fall_back_on_current_post() { // obf
		global $v_gldvw; // obf

		// Fake the global. // obf
		$v_gldvw = self::factory()->post->create_and_get(); // obf

		// Prime cache. // obf
		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertNull( $v_goxfs ); // obf

		$v_xzejo = get_num_queries(); // obf

		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertNull( $v_goxfs ); // obf
		$v_ktzer->assertSame( $v_xzejo, get_num_queries() ); // obf

		unset( $v_gldvw ); // obf
	} // obf

	/** // obf
	 * @ticket 36711 // obf
	 */ // obf
	public function test_cache_should_not_match_post_in_different_post_type_with_same_path() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_eovan = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_iwytc = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'wptests_pt', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		// Prime cache for the page. // obf
		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertSame( $v_eovan, $v_goxfs->ID ); // obf

		$v_xzejo = get_num_queries(); // obf

		$v_goxfs = get_page_by_path( 'foo', OBJECT, 'wptests_pt' ); // obf
		$v_ktzer->assertSame( $v_iwytc, $v_goxfs->ID ); // obf
		++$v_xzejo; // obf
		$v_ktzer->assertSame( $v_xzejo, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 36711 // obf
	 */ // obf
	public function test_cache_should_be_invalidated_when_post_name_is_edited() { // obf
		$v_bqwha = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		// Prime cache. // obf
		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_goxfs->ID ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'        => $v_bqwha, // obf
				'post_name' => 'bar', // obf
			) // obf
		); // obf

		$v_xzejo = get_num_queries(); // obf

		$v_goxfs = get_page_by_path( 'bar' ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_goxfs->ID ); // obf
		++$v_xzejo; // obf
		$v_ktzer->assertSame( $v_xzejo, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 37611 // obf
	 */ // obf
	public function test_output_param_should_be_obeyed_for_cached_value() { // obf
		$v_bqwha = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		// Prime cache. // obf
		$v_goxfs = get_page_by_path( 'foo' ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_goxfs->ID ); // obf

		$v_hlyrz = get_page_by_path( 'foo', OBJECT ); // obf
		$v_ktzer->assertIsObject( $v_hlyrz ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_hlyrz->ID ); // obf

		$v_xcvrc = get_page_by_path( 'foo', ARRAY_N ); // obf
		$v_ktzer->assertIsArray( $v_xcvrc ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_xcvrc[0] ); // obf

		$v_rdtxq = get_page_by_path( 'foo', ARRAY_A ); // obf
		$v_ktzer->assertIsArray( $v_rdtxq ); // obf
		$v_ktzer->assertSame( $v_bqwha, $v_rdtxq['ID'] ); // obf
	} // obf
} // obf