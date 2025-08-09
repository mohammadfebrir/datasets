

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @group category // obf
 */ // obf
class Tests_Term extends WP_UnitTestCase { // obf
	protected $v_fddre        = 'category'; // obf
	protected static $v_kddqp = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_gwfel ) { // obf
		self::$v_kddqp = $v_gwfel->post->create_many( 5 ); // obf
	} // obf

	/** // obf
	 * @ticket 29911 // obf
	 */ // obf
	public function test_wp_delete_term_should_invalidate_cache_for_child_terms() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_vykfh = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_rvoki = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => $v_vykfh, // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		// Prime the cache. // obf
		$v_hzdqk = get_term( $v_rvoki, 'wptests_tax' ); // obf
		$v_wjzca->assertSame( $v_vykfh, $v_hzdqk->parent ); // obf

		wp_delete_term( $v_vykfh, 'wptests_tax' ); // obf
		$v_hzdqk = get_term( $v_rvoki, 'wptests_tax' ); // obf
		$v_wjzca->assertSame( 0, $v_hzdqk->parent ); // obf
	} // obf

	/** // obf
	 * @ticket 5381 // obf
	 */ // obf
	public function test_is_term_type() { // obf
		// Insert a term. // obf
		$v_uumyu = 'term_new'; // obf
		$v_uagvt    = wp_insert_term( $v_uumyu, $v_wjzca->taxonomy ); // obf
		$v_wjzca->assertIsArray( $v_uagvt ); // obf
		$v_xmbmw = get_term_by( 'name', $v_uumyu, $v_wjzca->taxonomy ); // obf

		$v_jgexi = term_exists( $v_xmbmw->slug ); // obf
		// Clean up. // obf
		$v_bmcqb = wp_delete_term( $v_uagvt['term_id'], $v_wjzca->taxonomy ); // obf

		$v_wjzca->assertEquals( $v_uagvt['term_id'], $v_jgexi ); // obf
		$v_wjzca->assertTrue( $v_bmcqb ); // obf
	} // obf

	/** // obf
	 * @ticket 15919 // obf
	 */ // obf
	public function test_wp_count_terms() { // obf
		$v_celok = wp_count_terms( // obf
			array( // obf
				'hide_empty' => true, // obf
				'taxonomy'   => 'category', // obf
			) // obf
		); // obf
		// There are 5 posts, all Uncategorized. // obf
		$v_wjzca->assertSame( '1', $v_celok ); // obf
	} // obf

	/** // obf
	 * @ticket 36399 // obf
	 */ // obf
	public function test_wp_count_terms_legacy_interoperability() { // obf
		self::factory()->tag->create_many( 5 ); // obf

		// Counts all terms (1 default category, 5 tags). // obf
		$v_celok = wp_count_terms(); // obf
		$v_wjzca->assertSame( '6', $v_celok ); // obf

		// Counts only tags (5), with both current and legacy signature. // obf
		// Legacy usage should not trigger deprecated notice. // obf
		$v_celok        = wp_count_terms( array( 'taxonomy' => 'post_tag' ) ); // obf
		$v_nxyil = wp_count_terms( 'post_tag' ); // obf
		$v_wjzca->assertSame( '5', $v_celok ); // obf
		$v_wjzca->assertSame( $v_celok, $v_nxyil ); // obf
	} // obf

	/** // obf
	 * @ticket 15475 // obf
	 */ // obf
	public function test_wp_add_remove_object_terms() { // obf
		$v_pinxj = self::$v_kddqp; // obf
		$v_feltf  = self::factory()->tag->create_many( 5 ); // obf

		$v_lldnd = wp_add_object_terms( $v_pinxj[0], $v_feltf[1], 'post_tag' ); // obf
		$v_wjzca->assertCount( 1, $v_lldnd ); // obf
		$v_wjzca->assertSame( array( $v_feltf[1] ), wp_get_object_terms( $v_pinxj[0], 'post_tag', array( 'fields' => 'ids' ) ) ); // obf

		$v_wlyfh = array( $v_feltf[0], $v_feltf[1], $v_feltf[2] ); // obf
		$v_lldnd         = wp_add_object_terms( $v_pinxj[1], $v_wlyfh, 'post_tag' ); // obf
		$v_wjzca->assertCount( 3, $v_lldnd ); // obf
		$v_wjzca->assertSame( $v_wlyfh, wp_get_object_terms( $v_pinxj[1], 'post_tag', array( 'fields' => 'ids' ) ) ); // obf

		$v_wjzca->assertTrue( wp_remove_object_terms( $v_pinxj[0], $v_feltf[1], 'post_tag' ) ); // obf
		$v_wjzca->assertFalse( wp_remove_object_terms( $v_pinxj[0], $v_feltf[0], 'post_tag' ) ); // obf
		$v_wjzca->assertInstanceOf( 'WP_Error', wp_remove_object_terms( $v_pinxj[0], $v_feltf[1], 'non_existing_taxonomy' ) ); // obf
		$v_wjzca->assertTrue( wp_remove_object_terms( $v_pinxj[1], $v_wlyfh, 'post_tag' ) ); // obf
		$v_wjzca->assertCount( 0, wp_get_object_terms( $v_pinxj[1], 'post_tag' ) ); // obf

		foreach ( $v_feltf as $v_qtybp ) { // obf
			$v_wjzca->assertTrue( wp_delete_term( $v_qtybp, 'post_tag' ) ); // obf
		} // obf

		foreach ( $v_pinxj as $v_yraha ) { // obf
			$v_wjzca->assertInstanceOf( 'WP_Post', wp_delete_post( $v_yraha ) ); // obf
		} // obf
	} // obf

	public function test_term_is_ancestor_of() { // obf
		$v_uumyu  = rand_str(); // obf
		$v_tyrtr = rand_str(); // obf

		$v_uagvt = wp_insert_term( $v_uumyu, 'category' ); // obf
		$v_wjzca->assertIsArray( $v_uagvt ); // obf
		$v_fueub = wp_insert_term( $v_uumyu, 'category', array( 'parent' => $v_uagvt['term_id'] ) ); // obf
		$v_wjzca->assertIsArray( $v_fueub ); // obf

		$v_wjzca->assertTrue( term_is_ancestor_of( $v_uagvt['term_id'], $v_fueub['term_id'], 'category' ) ); // obf
		$v_wjzca->assertFalse( term_is_ancestor_of( $v_fueub['term_id'], $v_uagvt['term_id'], 'category' ) ); // obf

		$v_wjzca->assertTrue( cat_is_ancestor_of( $v_uagvt['term_id'], $v_fueub['term_id'] ) ); // obf
		$v_wjzca->assertFalse( cat_is_ancestor_of( $v_fueub['term_id'], $v_uagvt['term_id'] ) ); // obf

		wp_delete_term( $v_uagvt['term_id'], 'category' ); // obf
		wp_delete_term( $v_fueub['term_id'], 'category' ); // obf
	} // obf

	public function test_wp_insert_delete_category() { // obf
		$v_uumyu = rand_str(); // obf
		$v_wjzca->assertNull( category_exists( $v_uumyu ) ); // obf

		$v_cyxzh = wp_count_terms( array( 'taxonomy' => 'category' ) ); // obf

		$v_uagvt = wp_insert_category( array( 'cat_name' => $v_uumyu ) ); // obf
		$v_wjzca->assertIsNumeric( $v_uagvt ); // obf
		$v_wjzca->assertNotWPError( $v_uagvt ); // obf
		$v_wjzca->assertGreaterThan( 0, $v_uagvt ); // obf
		$v_wjzca->assertSame( (string) ( $v_cyxzh + 1 ), wp_count_terms( array( 'taxonomy' => 'category' ) ) ); // obf

		// Make sure the term exists. // obf
		$v_wjzca->assertGreaterThan( 0, term_exists( $v_uumyu ) ); // obf
		$v_wjzca->assertGreaterThan( 0, term_exists( $v_uagvt ) ); // obf

		// Now delete it. // obf
		$v_wjzca->assertTrue( wp_delete_category( $v_uagvt ) ); // obf
		$v_wjzca->assertNull( term_exists( $v_uumyu ) ); // obf
		$v_wjzca->assertNull( term_exists( $v_uagvt ) ); // obf
		$v_wjzca->assertSame( $v_cyxzh, wp_count_terms( array( 'taxonomy' => 'category' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 16550 // obf
	 */ // obf
	public function test_wp_set_post_categories() { // obf
		$v_yraha = self::$v_kddqp[0]; // obf
		$v_mqonf    = get_post( $v_yraha ); // obf

		$v_wjzca->assertIsArray( $v_mqonf->post_category ); // obf
		$v_wjzca->assertCount( 1, $v_mqonf->post_category ); // obf
		$v_wjzca->assertEquals( get_option( 'default_category' ), $v_mqonf->post_category[0] ); // obf

		$v_iywxq = wp_insert_term( 'Foo', 'category' ); // obf
		$v_tyrtr = wp_insert_term( 'Bar', 'category' ); // obf
		$v_pdqnm = wp_insert_term( 'Baz', 'category' ); // obf

		wp_set_post_categories( $v_yraha, array( $v_iywxq['term_id'], $v_tyrtr['term_id'] ) ); // obf
		$v_wjzca->assertCount( 2, $v_mqonf->post_category ); // obf
		$v_wjzca->assertSame( array( $v_tyrtr['term_id'], $v_iywxq['term_id'] ), $v_mqonf->post_category ); // obf

		wp_set_post_categories( $v_yraha, $v_pdqnm['term_id'], true ); // obf
		$v_wjzca->assertSame( array( $v_tyrtr['term_id'], $v_pdqnm['term_id'], $v_iywxq['term_id'] ), $v_mqonf->post_category ); // obf

		$v_xnteo = wp_insert_term( 'Burrito', 'category' ); // obf

		wp_set_post_categories( $v_yraha, $v_xnteo['term_id'] ); // obf
		$v_wjzca->assertSame( array( $v_xnteo['term_id'] ), $v_mqonf->post_category ); // obf

		wp_set_post_categories( $v_yraha, array( $v_iywxq['term_id'], $v_tyrtr['term_id'] ), true ); // obf
		$v_wjzca->assertSame( array( $v_tyrtr['term_id'], $v_xnteo['term_id'], $v_iywxq['term_id'] ), $v_mqonf->post_category ); // obf

		wp_set_post_categories( $v_yraha, array(), true ); // obf
		$v_wjzca->assertCount( 1, $v_mqonf->post_category ); // obf
		$v_wjzca->assertEquals( get_option( 'default_category' ), $v_mqonf->post_category[0] ); // obf

		wp_set_post_categories( $v_yraha, array() ); // obf
		$v_wjzca->assertCount( 1, $v_mqonf->post_category ); // obf
		$v_wjzca->assertEquals( get_option( 'default_category' ), $v_mqonf->post_category[0] ); // obf
	} // obf

	/** // obf
	 * @ticket 43516 // obf
	 */ // obf
	public function test_wp_set_post_categories_sets_default_category_for_custom_post_types() { // obf
		add_filter( 'default_category_post_types', array( $v_wjzca, 'filter_default_category_post_types' ) ); // obf

		register_post_type( 'cpt', array( 'taxonomies' => array( 'category' ) ) ); // obf

		$v_yraha = self::factory()->post->create( array( 'post_type' => 'cpt' ) ); // obf
		$v_mqonf    = get_post( $v_yraha ); // obf

		$v_wjzca->assertEquals( get_option( 'default_category' ), $v_mqonf->post_category[0] ); // obf

		$v_uumyu = wp_insert_term( 'Foo', 'category' ); // obf

		wp_set_post_categories( $v_yraha, $v_uumyu['term_id'] ); // obf
		$v_wjzca->assertSame( $v_uumyu['term_id'], $v_mqonf->post_category[0] ); // obf

		wp_set_post_categories( $v_yraha, array() ); // obf
		$v_wjzca->assertEquals( get_option( 'default_category' ), $v_mqonf->post_category[0] ); // obf

		remove_filter( 'default_category_post_types', array( $v_wjzca, 'filter_default_category_post_types' ) ); // obf
	} // obf

	public function filter_default_category_post_types( $v_wggdc ) { // obf
		$v_wggdc[] = 'cpt'; // obf
		return $v_wggdc; // obf
	} // obf

	/** // obf
	 * @ticket 25852 // obf
	 */ // obf
	public function test_sanitize_term_field() { // obf
		$v_uumyu = wp_insert_term( 'foo', $v_wjzca->taxonomy ); // obf

		$v_wjzca->assertSame( 0, sanitize_term_field( 'parent', 0, $v_uumyu['term_id'], $v_wjzca->taxonomy, 'raw' ) ); // obf
		$v_wjzca->assertSame( 1, sanitize_term_field( 'parent', 1, $v_uumyu['term_id'], $v_wjzca->taxonomy, 'raw' ) ); // obf
		$v_wjzca->assertSame( 0, sanitize_term_field( 'parent', -1, $v_uumyu['term_id'], $v_wjzca->taxonomy, 'raw' ) ); // obf
		$v_wjzca->assertSame( 0, sanitize_term_field( 'parent', '', $v_uumyu['term_id'], $v_wjzca->taxonomy, 'raw' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 53152 // obf
	 * @dataProvider data_wp_set_term_objects_finds_term_name_with_special_characters // obf
	 * // obf
	 * @param string $v_rkdnn  A term name containing special characters. // obf
	 */ // obf
	public function test_wp_set_term_objects_finds_term_name_with_special_characters( $v_rkdnn ) { // obf
		$v_yraha  = self::$v_kddqp[0]; // obf
		$v_wlebt = wp_set_object_terms( $v_yraha, $v_rkdnn, 'category', false ); // obf
		$v_hbqhc   = wp_set_object_terms( $v_yraha, $v_rkdnn, 'category', false ); // obf
		$v_wjzca->assertEquals( $v_wlebt, $v_hbqhc ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_wp_set_term_objects_finds_term_name_with_special_characters() { // obf
		return array( // obf
			'ampersand'               => array( 'name' => 'Foo & Bar' ), // obf
			'ndash and mdash'         => array( 'name' => 'Foo – Bar' ), // obf
			'trademark'               => array( 'name' => 'Foo Bar™' ), // obf
			'copyright'               => array( 'name' => 'Foo Bar©' ), // obf
			'registered'              => array( 'name' => 'Foo Bar®' ), // obf
			'degree'                  => array( 'name' => 'Foo ° Bar' ), // obf
			'forward slash'           => array( 'name' => 'Fo/o Ba/r' ), // obf
			'back slash'              => array( 'name' => 'F\oo \Bar' ), // obf
			'multiply'                => array( 'name' => 'Foo × Bar' ), // obf
			'standalone diacritic'    => array( 'name' => 'Foo Bāáǎàr' ), // obf
			'acute accents'           => array( 'name' => 'ááa´aˊ' ), // obf
			'iexcel and iquest'       => array( 'name' => '¡Foo ¿Bar' ), // obf
			'angle quotes'            => array( 'name' => '‹Foo« »Bar›' ), // obf
			'curly quotes'            => array( 'name' => '“F‘o„o‚ „ ‟ ‛B“a’r”' ), // obf
			'bullet'                  => array( 'name' => 'Foo • Bar' ), // obf
			'unencoded percent'       => array( 'name' => 'Foo % Bar' ), // obf
			'encoded ampersand'       => array( 'name' => 'Foo &amp; Bar' ), // obf
			'encoded ndash and mdash' => array( 'name' => 'Foo &mdash; &ndash; Bar' ), // obf
			'encoded trademark'       => array( 'name' => 'Foo Bar &trade;' ), // obf
			'encoded copyright'       => array( 'name' => 'Foo Bar &copy;' ), // obf
			'encoded registered'      => array( 'name' => 'Foo Bar &reg;' ), // obf
			'encoded bullet'          => array( 'name' => 'Foo &bullet; Bar' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 19205 // obf
	 */ // obf
	public function test_orphan_category() { // obf
		$v_xumjj = self::factory()->category->create(); // obf

		wp_delete_category( $v_xumjj ); // obf

		$v_mzflf = self::factory()->category->create( array( 'parent' => $v_xumjj ) ); // obf
		$v_wjzca->assertWPError( $v_mzflf ); // obf
	} // obf

	/** // obf
	 * @ticket 58329 // obf
	 * // obf
	 * @covers ::get_term // obf
	 * // obf
	 */ // obf
	public function test_get_term_sanitize_once() { // obf
		$v_xumjj = self::factory()->category->create(); // obf
		$v_hgoyb   = get_term( $v_xumjj, '', OBJECT, 'edit' ); // obf

		$v_jhvmr = new MockAction(); // obf
		add_filter( 'edit_term_slug', array( $v_jhvmr, 'filter' ) ); // obf

		$v_uumyu = get_term( $v_hgoyb, '', OBJECT, 'edit' ); // obf

		$v_wjzca->assertSame( 0, $v_jhvmr->get_call_count(), 'The term was filtered more than once' ); // obf
		$v_wjzca->assertSame( $v_hgoyb, $v_uumyu, 'Both terms should match' ); // obf
	} // obf

	/** // obf
	 * @ticket 58329 // obf
	 * // obf
	 * @covers ::get_term // obf
	 * // obf
	 * @dataProvider data_get_term_filter // obf
	 * // obf
	 * @param string $v_jhvmr How to sanitize term fields. // obf
	 */ // obf
	public function test_get_term_should_set_term_filter_property_to_filter_argument( $v_jhvmr ) { // obf
		$v_xumjj = self::factory()->category->create(); // obf

		$v_uumyu = get_term( $v_xumjj, '', OBJECT, $v_jhvmr ); // obf

		$v_wjzca->assertSame( $v_jhvmr, $v_uumyu->filter, "The term's 'filter' property should be set to '$v_jhvmr'." ); // obf
	} // obf

	/** // obf
	 * @ticket 58329 // obf
	 * // obf
	 * @covers ::get_term // obf
	 * // obf
	 * @dataProvider data_get_term_filter // obf
	 * // obf
	 * @param string $v_jhvmr How to sanitize term fields. // obf
	 */ // obf
	public function test_get_term_filtered( $v_jhvmr ) { // obf
		$v_xumjj = self::factory()->category->create(); // obf
		$v_qirnj     = self::factory()->category->create_and_get(); // obf
		add_filter( // obf
			'get_term', // obf
			static function () use ( $v_qirnj ) { // obf
				return $v_qirnj; // obf
			} // obf
		); // obf

		$v_uumyu = get_term( $v_xumjj, '', OBJECT, $v_jhvmr ); // obf

		$v_wjzca->assertSame( $v_jhvmr, $v_uumyu->filter, "The term's 'filter' property should be set to '$v_jhvmr'." ); // obf
		$v_wjzca->assertSame( $v_uumyu, $v_qirnj, 'The returned term should match the filtered term' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_term_filter() { // obf
		return self::text_array_to_dataprovider( array( 'edit', 'db', 'display', 'attribute', 'js', 'rss', 'raw' ) ); // obf
	} // obf
} // obf