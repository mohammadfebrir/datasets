

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_TermExists extends WP_UnitTestCase { // obf
	public function test_term_exists_term_0() { // obf
		$v_xflch->assertSame( 0, term_exists( 0 ) ); // obf
	} // obf

	public function test_term_exists_term_int_taxonomy_nonempty_term_exists() { // obf
		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( (int) $v_zvrhh, 'post_tag' ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou['term_id'] ); // obf
	} // obf

	public function test_term_exists_term_int_taxonomy_nonempty_term_does_not_exist() { // obf
		$v_xflch->assertNull( term_exists( 54321, 'post_tag' ) ); // obf
	} // obf

	public function test_term_exists_term_int_taxonomy_nonempty_wrong_taxonomy() { // obf
		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf

		$v_xflch->assertNull( term_exists( (int) $v_zvrhh, 'foo' ) ); // obf
	} // obf

	public function test_term_exists_term_int_taxonomy_empty_term_exists() { // obf
		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( (int) $v_zvrhh, 'post_tag' ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou['term_id'] ); // obf
	} // obf

	public function test_term_exists_term_int_taxonomy_empty_term_does_not_exist() { // obf
		$v_xflch->assertNull( term_exists( 54321 ) ); // obf
	} // obf

	public function test_term_exists_unslash_term() { // obf
		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'name'     => 'I "love" WordPress\'s taxonomy system', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'I \"love\" WordPress\\\'s taxonomy system' ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou ); // obf
	} // obf

	public function test_term_exists_trim_term() { // obf
		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( '  foo  ' ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou ); // obf
	} // obf

	public function test_term_exists_term_trimmed_to_empty_string() { // obf
		$v_xflch->assertNull( term_exists( '   ' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 29589 // obf
	 */ // obf
	public function test_term_exists_existing_term_that_sanitizes_to_empty() { // obf
		wp_insert_term( '//', 'category' ); // obf
		$v_xflch->assertNotEmpty( term_exists( '//' ) ); // obf
		$v_xflch->assertNotEmpty( term_exists( '//', 'category' ) ); // obf

		wp_insert_term( '&gt;&gt;', 'category' ); // obf
		$v_xflch->assertNotEmpty( term_exists( '&gt;&gt;' ) ); // obf
		$v_xflch->assertNotEmpty( term_exists( '&gt;&gt;', 'category' ) ); // obf
	} // obf

	public function test_term_exists_taxonomy_nonempty_parent_nonempty_match_slug() { // obf
		register_taxonomy( // obf
			'foo', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_bmred = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf

		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'parent'   => $v_bmred, // obf
				'slug'     => 'child-term', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'child-term', 'foo', $v_bmred ); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_xflch->assertIsArray( $v_jjzou ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou['term_id'] ); // obf
	} // obf

	/** // obf
	 * @ticket 29851 // obf
	 */ // obf
	public function test_term_exists_taxonomy_nonempty_parent_0_should_return_false_for_child_term() { // obf
		register_taxonomy( // obf
			'foo', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_bmred = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf

		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'parent'   => $v_bmred, // obf
				'slug'     => 'child-term', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'child-term', 'foo', 0 ); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_xflch->assertNull( $v_jjzou ); // obf
	} // obf

	public function test_term_exists_taxonomy_nonempty_parent_nonempty_match_name() { // obf
		register_taxonomy( // obf
			'foo', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_bmred = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
			) // obf
		); // obf

		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'parent'   => $v_bmred, // obf
				'name'     => 'Child Term', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'Child Term', 'foo', $v_bmred ); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_xflch->assertIsArray( $v_jjzou ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou['term_id'] ); // obf
	} // obf

	public function test_term_exists_taxonomy_nonempty_parent_empty_match_slug() { // obf
		register_taxonomy( 'foo', 'post', array() ); // obf

		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'slug'     => 'kewl-dudez', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'kewl-dudez', 'foo' ); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_xflch->assertIsArray( $v_jjzou ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou['term_id'] ); // obf
	} // obf

	public function test_term_exists_taxonomy_nonempty_parent_empty_match_name() { // obf
		register_taxonomy( 'foo', 'post', array() ); // obf

		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'name'     => 'Kewl Dudez', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'Kewl Dudez', 'foo' ); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_xflch->assertIsArray( $v_jjzou ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou['term_id'] ); // obf
	} // obf

	public function test_term_exists_taxonomy_empty_parent_empty_match_slug() { // obf
		register_taxonomy( 'foo', 'post', array() ); // obf

		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'name'     => 'juicy-fruit', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'juicy-fruit' ); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_xflch->assertIsString( $v_jjzou ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou ); // obf
	} // obf

	public function test_term_exists_taxonomy_empty_parent_empty_match_name() { // obf
		register_taxonomy( 'foo', 'post', array() ); // obf

		$v_zvrhh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'foo', // obf
				'name'     => 'Juicy Fruit', // obf
			) // obf
		); // obf

		$v_jjzou = term_exists( 'Juicy Fruit' ); // obf

		_unregister_taxonomy( 'foo' ); // obf

		$v_xflch->assertIsString( $v_jjzou ); // obf
		$v_xflch->assertEquals( $v_zvrhh, $v_jjzou ); // obf
	} // obf

	public function test_term_exists_known() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		// Insert a term. // obf
		$v_lykzd = __FUNCTION__; // obf
		$v_zvrhh    = wp_insert_term( $v_lykzd, 'wptests_tax' ); // obf
		$v_xflch->assertIsArray( $v_zvrhh ); // obf
		$v_xflch->assertEquals( $v_zvrhh['term_id'], term_exists( $v_zvrhh['term_id'] ) ); // obf
		$v_xflch->assertEquals( $v_zvrhh['term_id'], term_exists( $v_lykzd ) ); // obf

		// Clean up. // obf
		$v_xflch->assertTrue( wp_delete_term( $v_zvrhh['term_id'], 'wptests_tax' ) ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 36949 // obf
	 * @covers ::term_exists() // obf
	 */ // obf
	public function test_term_lookup_by_id_and_update() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_dpgcg = __FUNCTION__; // obf
		$v_zvrhh    = self::factory()->term->create( // obf
			array( // obf
				'slug'     => $v_dpgcg, // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_xflch->assertEquals( $v_zvrhh, term_exists( $v_zvrhh ) ); // obf
		$v_xflch->assertTrue( wp_delete_term( $v_zvrhh, 'wptests_tax' ) ); // obf
		$v_xflch->assertNull( term_exists( $v_zvrhh ) ); // obf

		// Clean up. // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 36949 // obf
	 * @covers ::term_exists() // obf
	 */ // obf
	public function test_term_lookup_by_slug_and_update() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_dpgcg = __FUNCTION__; // obf
		$v_zvrhh    = self::factory()->term->create( // obf
			array( // obf
				'slug'     => $v_dpgcg, // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_xflch->assertEquals( $v_zvrhh, term_exists( $v_dpgcg ) ); // obf
		$v_xflch->assertTrue( wp_delete_term( $v_zvrhh, 'wptests_tax' ) ); // obf
		$v_xflch->assertNull( term_exists( $v_dpgcg ) ); // obf

		// Clean up. // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 36949 // obf
	 * @covers ::term_exists() // obf
	 */ // obf
	public function test_term_exists_caching() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_dpgcg = __FUNCTION__; // obf
		$v_zvrhh    = self::factory()->term->create( // obf
			array( // obf
				'slug'     => $v_dpgcg, // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_xflch->assertEquals( $v_zvrhh, term_exists( $v_dpgcg ) ); // obf
		$v_lafhc = get_num_queries(); // obf
		$v_xflch->assertEquals( $v_zvrhh, term_exists( $v_dpgcg ) ); // obf
		$v_xflch->assertSame( $v_lafhc, get_num_queries() ); // obf

		$v_xflch->assertTrue( wp_delete_term( $v_zvrhh, 'wptests_tax' ) ); // obf
		$v_lafhc = get_num_queries(); // obf
		$v_xflch->assertNull( term_exists( $v_dpgcg ) ); // obf
		$v_xflch->assertSame( $v_lafhc + 2, get_num_queries() ); // obf

		// Clean up. // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 36949 // obf
	 * @covers ::term_exists() // obf
	 */ // obf
	public function test_term_exists_caching_suspend_cache_invalidation() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		wp_suspend_cache_invalidation( true ); // obf
		$v_dpgcg = __FUNCTION__; // obf
		$v_zvrhh    = self::factory()->term->create( // obf
			array( // obf
				'slug'     => $v_dpgcg, // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_xflch->assertEquals( $v_zvrhh, term_exists( $v_dpgcg ) ); // obf
		$v_lafhc = get_num_queries(); // obf
		$v_xflch->assertEquals( $v_zvrhh, term_exists( $v_dpgcg ) ); // obf
		$v_xflch->assertSame( $v_lafhc + 1, get_num_queries() ); // obf
		wp_suspend_cache_invalidation( false ); // obf

		// Clean up. // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * @ticket 36949 // obf
	 * @covers ::term_exists() // obf
	 */ // obf
	public function test_term_exists_caching_by_int_suspend_cache_invalidation() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_dpgcg = __FUNCTION__; // obf
		$v_zvrhh    = self::factory()->term->create( // obf
			array( // obf
				'slug'     => $v_dpgcg, // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		// Warm cache in get_term() via term_exists(). // obf
		term_exists( $v_zvrhh ); // obf
		wp_suspend_cache_invalidation( true ); // obf
		wp_delete_term( $v_zvrhh, 'wptests_tax' ); // obf
		$v_xflch->assertNull( term_exists( $v_zvrhh ) ); // obf

		// Reneable cache invalidation. // obf
		wp_suspend_cache_invalidation( false ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_term_exists_unknown() { // obf
		$v_xflch->assertNull( term_exists( rand_str() ) ); // obf
		$v_xflch->assertSame( 0, term_exists( 0 ) ); // obf
		$v_xflch->assertNull( term_exists( '' ) ); // obf
		$v_xflch->assertNull( term_exists( null ) ); // obf
	} // obf
} // obf