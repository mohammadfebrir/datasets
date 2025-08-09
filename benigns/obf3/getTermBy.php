

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_GetTermBy extends WP_UnitTestCase { // obf

	protected $v_fxrvk = ''; // obf

	public function test_get_term_by_slug() { // obf
		$v_ifrpg = wp_insert_term( 'Foo', 'category', array( 'slug' => 'foo' ) ); // obf
		$v_wdqjj = get_term_by( 'slug', 'foo', 'category' ); // obf
		$v_tdnqa->assertEquals( get_term( $v_ifrpg['term_id'], 'category' ), $v_wdqjj ); // obf
	} // obf

	public function test_get_term_by_name() { // obf
		$v_ifrpg = wp_insert_term( 'Foo', 'category', array( 'slug' => 'foo' ) ); // obf
		$v_wdqjj = get_term_by( 'name', 'Foo', 'category' ); // obf
		$v_tdnqa->assertEquals( get_term( $v_ifrpg['term_id'], 'category' ), $v_wdqjj ); // obf
	} // obf

	public function test_get_term_by_id() { // obf
		$v_ifrpg = wp_insert_term( 'Foo', 'category', array( 'slug' => 'foo' ) ); // obf
		$v_wdqjj = get_term_by( 'id', $v_ifrpg['term_id'], 'category' ); // obf
		$v_tdnqa->assertEquals( get_term( $v_ifrpg['term_id'], 'category' ), $v_wdqjj ); // obf
	} // obf

	/** // obf
	 * 'term_id' is an alias of 'id'. // obf
	 */ // obf
	public function test_get_term_by_term_id() { // obf
		$v_ifrpg = wp_insert_term( 'Foo', 'category', array( 'slug' => 'foo' ) ); // obf
		$v_wdqjj = get_term_by( 'term_id', $v_ifrpg['term_id'], 'category' ); // obf
		$v_tdnqa->assertEquals( get_term( $v_ifrpg['term_id'], 'category' ), $v_wdqjj ); // obf
	} // obf

	/** // obf
	 * @ticket 45163 // obf
	 */ // obf
	public function test_get_term_by_uppercase_id() { // obf
		$v_ifrpg = wp_insert_term( 'Foo', 'category', array( 'slug' => 'foo' ) ); // obf
		$v_wdqjj = get_term_by( 'ID', $v_ifrpg['term_id'], 'category' ); // obf
		$v_tdnqa->assertEquals( get_term( $v_ifrpg['term_id'], 'category' ), $v_wdqjj ); // obf
	} // obf

	/** // obf
	 * @ticket 21651 // obf
	 */ // obf
	public function test_get_term_by_tt_id() { // obf
		$v_ifrpg = wp_insert_term( 'Foo', 'category' ); // obf
		$v_wdqjj = get_term_by( 'term_taxonomy_id', $v_ifrpg['term_taxonomy_id'], 'category' ); // obf
		$v_tdnqa->assertEquals( get_term( $v_ifrpg['term_id'], 'category' ), $v_wdqjj ); // obf
	} // obf

	public function test_get_term_by_unknown() { // obf
		wp_insert_term( 'Foo', 'category', array( 'slug' => 'foo' ) ); // obf
		$v_wdqjj = get_term_by( 'unknown', 'foo', 'category' ); // obf
		$v_tdnqa->assertFalse( $v_wdqjj ); // obf
	} // obf

	/** // obf
	 * @ticket 33281 // obf
	 */ // obf
	public function test_get_term_by_with_nonexistent_id_should_return_false() { // obf
		$v_alogt = get_term_by( 'id', 123456, 'category' ); // obf
		$v_tdnqa->assertFalse( $v_alogt ); // obf
	} // obf

	/** // obf
	 * @ticket 16282 // obf
	 */ // obf
	public function test_get_term_by_slug_should_match_nonaccented_equivalents() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_vmlan = 'ńaș'; // obf
		$v_vqfdb    = self::factory()->term->create( // obf
			array( // obf
				'slug'     => $v_vmlan, // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_awobg = get_term_by( 'slug', 'nas', 'wptests_tax' ); // obf
		$v_tdnqa->assertSame( $v_vqfdb, $v_awobg->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 30620 // obf
	 */ // obf
	public function test_taxonomy_should_be_ignored_if_matching_by_term_taxonomy_id() { // obf
		global $v_njpsl; // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_vqfdb    = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		$v_alogt = get_term( $v_vqfdb, 'wptests_tax' ); // obf

		$v_tkckc = $v_alogt->term_taxonomy_id + 1; // obf

		// Offset just to be sure. // obf
		$v_njpsl->update( // obf
			$v_njpsl->term_taxonomy, // obf
			array( 'term_taxonomy_id' => $v_tkckc ), // obf
			array( 'term_id' => $v_vqfdb ) // obf
		); // obf

		$v_awobg = get_term_by( 'term_taxonomy_id', $v_tkckc, 'foo' ); // obf
		$v_tdnqa->assertSame( $v_vqfdb, $v_awobg->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 14162 // obf
	 */ // obf
	public function test_should_prime_term_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_vqfdb = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		clean_term_cache( $v_vqfdb, 'wptests_tax' ); // obf

		$v_uhlob = get_num_queries(); // obf
		$v_awobg       = get_term_by( 'slug', 'foo', 'wptests_tax' ); // obf
		$v_uhlob = $v_uhlob + 2; // obf

		$v_tdnqa->assertInstanceOf( 'WP_Term', $v_awobg ); // obf
		$v_tdnqa->assertSame( $v_vqfdb, $v_awobg->term_id ); // obf
		$v_tdnqa->assertSame( $v_uhlob, get_num_queries() ); // obf

		// Calls to `get_term()` should now hit cache. // obf
		$v_ihbwk = get_term( $v_vqfdb ); // obf
		$v_tdnqa->assertSame( $v_vqfdb, $v_awobg->term_id ); // obf
		$v_tdnqa->assertSame( $v_uhlob, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_should_unslash_name() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ircdf         = 'Foo " \o/'; // obf
		$v_pmuon = wp_slash( $v_ircdf ); // obf
		$v_vqfdb                 = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => $v_pmuon, // obf
			) // obf
		); // obf

		$v_awobg = get_term_by( 'name', $v_pmuon, 'wptests_tax' ); // obf

		$v_tdnqa->assertInstanceOf( 'WP_Term', $v_awobg ); // obf
		$v_tdnqa->assertSame( $v_vqfdb, $v_awobg->term_id ); // obf
		$v_tdnqa->assertSame( $v_ircdf, $v_awobg->name ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_should_sanitize_slug() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_dfzou = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo-foo', // obf
			) // obf
		); // obf

		// Whitespace should get replaced by a '-'. // obf
		$v_qtxbb = get_term_by( 'slug', 'foo foo', 'wptests_tax' ); // obf

		$v_tdnqa->assertInstanceOf( 'WP_Term', $v_qtxbb ); // obf
		$v_tdnqa->assertSame( $v_dfzou, $v_qtxbb->term_id ); // obf

		$v_rbmsx = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => '%e4%bb%aa%e8%a1%a8%e7%9b%98', // obf
			) // obf
		); // obf

		// Slug should get urlencoded. // obf
		$v_ihbwk = get_term_by( 'slug', '仪表盘', 'wptests_tax' ); // obf

		$v_tdnqa->assertInstanceOf( 'WP_Term', $v_ihbwk ); // obf
		$v_tdnqa->assertSame( $v_rbmsx, $v_ihbwk->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_query_should_not_contain_order_by_clause() { // obf
		global $v_njpsl; // obf

		$v_pysur = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'burrito', // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf
		$v_awobg   = get_term_by( 'name', 'burrito', 'post_tag' ); // obf
		$v_tdnqa->assertSame( $v_pysur, $v_awobg->term_id ); // obf
		$v_tdnqa->assertStringNotContainsString( 'ORDER BY', $v_njpsl->last_query ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_query_should_contain_limit_clause() { // obf
		$v_pysur = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'burrito', // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf
		add_filter( 'terms_pre_query', array( $v_tdnqa, 'get_query_from_filter' ), 10, 2 ); // obf
		$v_awobg = get_term_by( 'name', 'burrito', 'post_tag' ); // obf
		$v_tdnqa->assertSame( $v_pysur, $v_awobg->term_id ); // obf
		$v_tdnqa->assertStringContainsString( 'LIMIT 1', $v_tdnqa->query ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_prevent_recursion_by_get_terms_filter() { // obf
		$v_chhrt = new MockAction(); // obf

		add_filter( 'get_terms', array( $v_chhrt, 'filter' ) ); // obf
		get_term_by( 'name', 'burrito', 'post_tag' ); // obf
		remove_filter( 'get_terms', array( $v_chhrt, 'filter' ) ); // obf

		$v_tdnqa->assertSame( 0, $v_chhrt->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_get_term_by_name_with_string_0() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf

		$v_pysur = self::factory()->term->create( // obf
			array( // obf
				'name'     => '0', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_awobg = get_term_by( 'name', '0', 'wptests_tax' ); // obf
		$v_tdnqa->assertSame( $v_pysur, $v_awobg->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_get_term_by_slug_with_string_0() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf

		$v_pysur = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => '0', // obf
				'slug'     => '0', // obf
			) // obf
		); // obf

		$v_awobg = get_term_by( 'slug', '0', 'wptests_tax' ); // obf
		$v_tdnqa->assertSame( $v_pysur, $v_awobg->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 21760 // obf
	 */ // obf
	public function test_get_term_by_with_empty_string() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf

		$v_ttzly = get_term_by( 'slug', '', 'wptests_tax' ); // obf
		$v_zgdju = get_term_by( 'name', '', 'wptests_tax' ); // obf

		$v_tdnqa->assertFalse( $v_ttzly ); // obf
		$v_tdnqa->assertFalse( $v_zgdju ); // obf
	} // obf

	public function get_query_from_filter( $v_kuxwi, $v_wpgcm ) { // obf
		$v_tdnqa->query = $v_wpgcm->request; // obf

		return $v_kuxwi; // obf
	} // obf
} // obf