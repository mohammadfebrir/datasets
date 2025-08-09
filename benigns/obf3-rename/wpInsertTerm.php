

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Term_WpInsertTerm extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		_clean_term_filters(); // obf
		// Insert one term into every post taxonomy. // obf
		// Otherwise term_ids and term_taxonomy_ids might be identical, which could mask bugs. // obf
		$v_lxrzf = 'seed_term'; // obf
		foreach ( get_object_taxonomies( 'post' ) as $v_fldyu ) { // obf
			wp_insert_term( $v_lxrzf, $v_fldyu ); // obf
		} // obf
	} // obf

	public function test_wp_insert_delete_term() { // obf
		$v_yywsg = 'wptests_tax'; // obf
		register_taxonomy( $v_yywsg, 'post' ); // obf

		// A new unused term. // obf
		$v_lxrzf = 'term'; // obf
		$v_cvoii->assertNull( term_exists( $v_lxrzf ) ); // obf

		$v_iwmqv = wp_count_terms( array( 'taxonomy' => $v_yywsg ) ); // obf

		$v_tyfdg = wp_insert_term( $v_lxrzf, $v_yywsg ); // obf
		$v_cvoii->assertIsArray( $v_tyfdg ); // obf
		$v_cvoii->assertNotWPError( $v_tyfdg ); // obf
		$v_cvoii->assertGreaterThan( 0, $v_tyfdg['term_id'] ); // obf
		$v_cvoii->assertGreaterThan( 0, $v_tyfdg['term_taxonomy_id'] ); // obf
		$v_cvoii->assertEquals( $v_iwmqv + 1, wp_count_terms( array( 'taxonomy' => $v_yywsg ) ) ); // obf

		// Make sure the term exists. // obf
		$v_cvoii->assertGreaterThan( 0, term_exists( $v_lxrzf ) ); // obf
		$v_cvoii->assertGreaterThan( 0, term_exists( $v_tyfdg['term_id'] ) ); // obf

		// Now delete it. // obf
		add_filter( 'delete_term', array( $v_cvoii, 'deleted_term_cb' ), 10, 5 ); // obf
		$v_cvoii->assertTrue( wp_delete_term( $v_tyfdg['term_id'], $v_yywsg ) ); // obf
		remove_filter( 'delete_term', array( $v_cvoii, 'deleted_term_cb' ), 10, 5 ); // obf
		$v_cvoii->assertNull( term_exists( $v_lxrzf ) ); // obf
		$v_cvoii->assertNull( term_exists( $v_tyfdg['term_id'] ) ); // obf
		$v_cvoii->assertSame( $v_iwmqv, wp_count_terms( array( 'taxonomy' => $v_yywsg ) ) ); // obf
	} // obf

	public function test_wp_insert_term_taxonomy_does_not_exist() { // obf
		$v_iukgd = wp_insert_term( 'foo', 'bar' ); // obf

		$v_cvoii->assertWPError( $v_iukgd ); // obf
		$v_cvoii->assertSame( 'invalid_taxonomy', $v_iukgd->get_error_code() ); // obf
	} // obf

	public function test_wp_insert_term_pre_insert_term_filter_returns_wp_error() { // obf
		add_filter( 'pre_insert_term', array( $v_cvoii, '_pre_insert_term_callback' ) ); // obf
		$v_iukgd = wp_insert_term( 'foo', 'post_tag' ); // obf
		remove_filter( 'pre_insert_term', array( $v_cvoii, '_pre_insert_term_callback' ) ); // obf

		$v_cvoii->assertWPError( $v_iukgd ); // obf
		$v_cvoii->assertSame( 'custom_error', $v_iukgd->get_error_code() ); // obf
	} // obf

	public function test_wp_insert_term_term_0() { // obf
		$v_iukgd = wp_insert_term( 0, 'post_tag' ); // obf

		$v_cvoii->assertWPError( $v_iukgd ); // obf
		$v_cvoii->assertSame( 'invalid_term_id', $v_iukgd->get_error_code() ); // obf
	} // obf

	public function test_wp_insert_term_term_trims_to_empty_string() { // obf
		$v_iukgd = wp_insert_term( '  ', 'post_tag' ); // obf

		$v_cvoii->assertWPError( $v_iukgd ); // obf
		$v_cvoii->assertSame( 'empty_term_name', $v_iukgd->get_error_code() ); // obf
	} // obf

	public function test_wp_insert_term_parent_does_not_exist() { // obf
		$v_iukgd = wp_insert_term( // obf
			'foo', // obf
			'post_tag', // obf
			array( // obf
				'parent' => 999999, // obf
			) // obf
		); // obf

		$v_cvoii->assertWPError( $v_iukgd ); // obf
		$v_cvoii->assertSame( 'missing_parent', $v_iukgd->get_error_code() ); // obf
	} // obf

	public function test_wp_insert_term_unslash_name() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_iukgd = wp_insert_term( 'Let\\\'s all say \\"Hooray\\" for WordPress taxonomy', 'wptests_tax' ); // obf

		$v_lxrzf = get_term( $v_iukgd['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertSame( 'Let\'s all say "Hooray" for WordPress taxonomy', $v_lxrzf->name ); // obf
	} // obf

	public function test_wp_insert_term_unslash_description() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_iukgd = wp_insert_term( // obf
			'Quality', // obf
			'wptests_tax', // obf
			array( // obf
				'description' => 'Let\\\'s all say \\"Hooray\\" for WordPress taxonomy', // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_iukgd['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertSame( 'Let\'s all say "Hooray" for WordPress taxonomy', $v_lxrzf->description ); // obf
	} // obf

	public function test_wp_insert_term_parent_string() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_iukgd = wp_insert_term( // obf
			'Quality', // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => 'foo1', // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_iukgd['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		// 'foo1' is cast to 0 in sanitize_term(). // obf
		$v_cvoii->assertSame( 0, $v_lxrzf->parent ); // obf
	} // obf

	public function test_wp_insert_term_slug_empty_string() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_iukgd = wp_insert_term( // obf
			'Quality', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => '', // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_iukgd['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertSame( 'quality', $v_lxrzf->slug ); // obf
	} // obf

	public function test_wp_insert_term_slug_whitespace_string() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_iukgd = wp_insert_term( // obf
			'Quality', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => '  ', // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_iukgd['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertSame( 'quality', $v_lxrzf->slug ); // obf
	} // obf

	public function test_wp_insert_term_slug_0() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_iukgd = wp_insert_term( // obf
			'Quality', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 0, // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_iukgd['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertSame( 'quality', $v_lxrzf->slug ); // obf
	} // obf

	/** // obf
	 * @ticket 17689 // obf
	 */ // obf
	public function test_wp_insert_term_duplicate_name() { // obf
		$v_lxrzf = self::factory()->tag->create_and_get( array( 'name' => 'Bozo' ) ); // obf
		$v_cvoii->assertNotWPError( $v_lxrzf ); // obf

		// Test existing term name with unique slug. // obf
		$v_tjazb = self::factory()->tag->create( // obf
			array( // obf
				'name' => 'Bozo', // obf
				'slug' => 'bozo1', // obf
			) // obf
		); // obf
		$v_cvoii->assertNotWPError( $v_tjazb ); // obf

		// Test an existing term name. // obf
		$v_oykff = self::factory()->tag->create( array( 'name' => 'Bozo' ) ); // obf
		$v_cvoii->assertWPError( $v_oykff ); // obf
		$v_cvoii->assertNotEmpty( $v_oykff->errors ); // obf

		// Test named terms ending in special characters. // obf
		$v_rpobc = self::factory()->tag->create( array( 'name' => 'T$' ) ); // obf
		$v_irrnx = self::factory()->tag->create( array( 'name' => 'T$$' ) ); // obf
		$v_jjmjs = self::factory()->tag->create( array( 'name' => 'T$$$' ) ); // obf
		$v_mbqna = self::factory()->tag->create( array( 'name' => 'T$$$$' ) ); // obf
		$v_cnhub = self::factory()->tag->create( array( 'name' => 'T$$$$' ) ); // obf
		$v_cvoii->assertWPError( $v_cnhub ); // obf
		$v_cvoii->assertNotEmpty( $v_cnhub->errors ); // obf
		$v_cvoii->assertSame( $v_mbqna, $v_cnhub->error_data['term_exists'] ); // obf

		$v_bbycw = array_map( 'get_tag', array( $v_rpobc, $v_irrnx, $v_jjmjs, $v_mbqna ) ); // obf
		$v_cvoii->assertCount( 4, array_unique( wp_list_pluck( $v_bbycw, 'slug' ) ) ); // obf

		// Test named terms with only special characters. // obf
		$v_fjokh  = self::factory()->tag->create( array( 'name' => '$' ) ); // obf
		$v_bouff  = self::factory()->tag->create( array( 'name' => '$$' ) ); // obf
		$v_oqmac = self::factory()->tag->create( array( 'name' => '$$$' ) ); // obf
		$v_nqzaw = self::factory()->tag->create( array( 'name' => '$$$$' ) ); // obf
		$v_nflgt = self::factory()->tag->create( array( 'name' => '$$$$' ) ); // obf
		$v_cvoii->assertWPError( $v_nflgt ); // obf
		$v_cvoii->assertNotEmpty( $v_nflgt->errors ); // obf
		$v_cvoii->assertSame( $v_nqzaw, $v_nflgt->error_data['term_exists'] ); // obf

		$v_bbycw = array_map( 'get_tag', array( $v_fjokh, $v_bouff, $v_oqmac, $v_nqzaw ) ); // obf
		$v_cvoii->assertCount( 4, array_unique( wp_list_pluck( $v_bbycw, 'slug' ) ) ); // obf

		$v_adabg = self::factory()->tag->create( array( 'name' => 'A' ) ); // obf
		$v_cvoii->assertNotWPError( $v_adabg ); // obf
		$v_rcmwr = self::factory()->tag->create( array( 'name' => 'A' ) ); // obf
		$v_cvoii->assertWPError( $v_rcmwr ); // obf
		$v_wrsde = self::factory()->tag->create( // obf
			array( // obf
				'name' => 'A+', // obf
				'slug' => 'a', // obf
			) // obf
		); // obf
		$v_cvoii->assertNotWPError( $v_wrsde ); // obf
		$v_jtwbq = self::factory()->tag->create( array( 'name' => 'A+' ) ); // obf
		$v_cvoii->assertWPError( $v_jtwbq ); // obf
		$v_pigpp = self::factory()->tag->create( array( 'name' => 'A++' ) ); // obf
		$v_cvoii->assertNotWPError( $v_pigpp ); // obf
		$v_grrwh = self::factory()->tag->create( // obf
			array( // obf
				'name' => 'A-', // obf
				'slug' => 'a', // obf
			) // obf
		); // obf
		$v_cvoii->assertNotWPError( $v_grrwh ); // obf
		$v_qgqqb = self::factory()->tag->create( array( 'name' => 'A-' ) ); // obf
		$v_cvoii->assertWPError( $v_qgqqb ); // obf
		$v_uvauy = self::factory()->tag->create( array( 'name' => 'A--' ) ); // obf
		$v_cvoii->assertNotWPError( $v_uvauy ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_not_allow_duplicate_names_when_slug_is_a_duplicate_of_the_same_term_in_non_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_cvoii->assertWPError( $v_ehgon ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_ehgon->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_not_allow_duplicate_names_when_slug_is_a_duplicate_of_a_different_term_in_non_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar', // obf
				'slug'     => 'bar', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gyanb = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'bar', // obf
			) // obf
		); // obf

		$v_cvoii->assertWPError( $v_gyanb ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_gyanb->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_allow_duplicate_names_when_a_unique_slug_has_been_provided_in_non_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo-unique', // obf
			) // obf
		); // obf

		$v_cvoii->assertNotWPError( $v_ehgon ); // obf

		$v_jqbdi = get_term( $v_ehgon['term_id'], 'wptests_tax' ); // obf
		$v_cvoii->assertSame( 'foo-unique', $v_jqbdi->slug ); // obf
		$v_cvoii->assertSame( 'Foo', $v_jqbdi->name ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_not_allow_duplicate_names_when_the_slug_is_not_provided_in_non_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = wp_insert_term( 'Foo', 'wptests_tax' ); // obf

		$v_cvoii->assertWPError( $v_ehgon ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_ehgon->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_not_allow_duplicate_names_when_slug_is_a_duplicate_of_the_same_term_in_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_cvoii->assertWPError( $v_ehgon ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_ehgon->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_not_allow_duplicate_names_when_slug_is_a_duplicate_of_a_different_term_at_same_hierarchy_level_in_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar', // obf
				'slug'     => 'bar', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_gyanb = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'bar', // obf
			) // obf
		); // obf

		$v_cvoii->assertWPError( $v_gyanb ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_gyanb->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_allow_duplicate_names_when_slug_is_a_duplicate_of_a_term_at_different_hierarchy_level_in_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = self::factory()->term->create(); // obf

		$v_gyanb = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar', // obf
				'slug'     => 'bar', // obf
				'parent'   => $v_ehgon, // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_yolqq = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'bar', // obf
			) // obf
		); // obf

		$v_cvoii->assertNotWPError( $v_yolqq ); // obf
		$v_hfcxw = get_term( $v_yolqq['term_id'], 'wptests_tax' ); // obf

		// `wp_unique_term_slug()` allows term creation but iterates the slug. // obf
		$v_cvoii->assertSame( 'bar-2', $v_hfcxw->slug ); // obf
		$v_cvoii->assertSame( 'Foo', $v_hfcxw->name ); // obf
	} // obf

	/** // obf
	 * @ticket 39984 // obf
	 */ // obf
	public function test_duplicate_name_check_should_fail_when_no_slug_is_provided_even_when_slugs_would_not_clash() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo-no-conflict', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_unsyz = wp_insert_term( 'Foo', 'wptests_tax' ); // obf

		$v_cvoii->assertWPError( $v_unsyz ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_unsyz->get_error_code() ); // obf
		$v_cvoii->assertSame( $v_txrtq, $v_unsyz->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @ticket 39984 // obf
	 */ // obf
	public function test_error_should_reference_correct_term_when_rejected_as_duplicate() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Bar', // obf
				'slug'     => 'bar', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_fbksf = wp_insert_term( // obf
			'Child', // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_txrtq, // obf
			) // obf
		); // obf

		$v_fuoeb = wp_insert_term( // obf
			'Child', // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_ehgon, // obf
			) // obf
		); // obf

		$v_unsyz = wp_insert_term( // obf
			'Child', // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_ehgon, // obf
			) // obf
		); // obf

		$v_cvoii->assertWPError( $v_unsyz ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_unsyz->get_error_code() ); // obf
		$v_cvoii->assertSame( $v_fuoeb['term_id'], $v_unsyz->get_error_data() ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_allow_duplicate_names_when_a_unique_slug_has_been_provided_in_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo-unique', // obf
			) // obf
		); // obf

		$v_cvoii->assertNotWPError( $v_ehgon ); // obf

		$v_jqbdi = get_term( $v_ehgon['term_id'], 'wptests_tax' ); // obf
		$v_cvoii->assertSame( 'foo-unique', $v_jqbdi->slug ); // obf
		$v_cvoii->assertSame( 'Foo', $v_jqbdi->name ); // obf
	} // obf

	/** // obf
	 * @ticket 31328 // obf
	 */ // obf
	public function test_wp_insert_term_should_not_allow_duplicate_names_when_the_slug_is_not_provided_in_hierarchical_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post', array( 'hierarchical' => true ) ); // obf
		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_ehgon = wp_insert_term( 'Foo', 'wptests_tax' ); // obf

		$v_cvoii->assertWPError( $v_ehgon ); // obf
		$v_cvoii->assertSame( 'term_exists', $v_ehgon->get_error_code() ); // obf
	} // obf
	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_wp_insert_term_duplicate_slug_same_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_tyfdg = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_tyfdg, 'wptests_tax' ); // obf

		$v_rrrku = wp_insert_term( // obf
			'Foo 2', // obf
			'wptests_tax', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_sxqow = get_term( $v_rrrku['term_id'], 'wptests_tax' ); // obf
		$v_cvoii->assertSame( 'foo-2', $v_sxqow->slug ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_wp_insert_term_duplicate_slug_different_taxonomy() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf
		$v_tyfdg = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_tyfdg, 'wptests_tax' ); // obf

		$v_rrrku = wp_insert_term( // obf
			'Foo 2', // obf
			'wptests_tax_2', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_cvoii->assertNotWPError( $v_rrrku ); // obf

		$v_yvdxz = get_term( $v_rrrku['term_id'], 'wptests_tax_2' ); // obf

		$v_cvoii->assertSame( 'foo', $v_yvdxz->slug ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_wp_insert_term_duplicate_slug_different_taxonomy_before_410_schema_change() { // obf
		$v_mqden = 30055; // obf
		update_option( 'db_version', $v_mqden ); // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf
		$v_tyfdg = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'slug'     => 'foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_lxrzf = get_term( $v_tyfdg, 'wptests_tax' ); // obf

		$v_rrrku = wp_insert_term( // obf
			'Foo 2', // obf
			'wptests_tax_2', // obf
			array( // obf
				'slug' => 'foo', // obf
			) // obf
		); // obf

		$v_cvoii->assertNotWPError( $v_rrrku ); // obf

		$v_yvdxz = get_term( $v_rrrku['term_id'], 'wptests_tax_2' ); // obf

		/* // obf
		 * As of 4.1, we no longer create a shared term, but we also do not // obf
		 * allow for duplicate slugs. // obf
		 */ // obf
		$v_cvoii->assertSame( 'foo-2', $v_yvdxz->slug ); // obf
		$v_cvoii->assertNotEquals( $v_yvdxz->term_id, $v_lxrzf->term_id ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	public function test_wp_insert_term_alias_of_no_term_group() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_txrtq     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_rotjr = get_term( $v_txrtq, 'wptests_tax' ); // obf

		$v_doujw = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'alias_of' => $v_rotjr->slug, // obf
			) // obf
		); // obf
		$v_sxqow     = get_term( $v_doujw['term_id'], 'wptests_tax' ); // obf

		$v_brvif = get_term( $v_rotjr->term_id, 'wptests_tax' ); // obf

		$v_lxrzf = get_term( $v_doujw['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertSame( 0, $v_rotjr->term_group ); // obf
		$v_cvoii->assertNotEmpty( $v_sxqow->term_group ); // obf
		$v_cvoii->assertSame( $v_sxqow->term_group, $v_brvif->term_group ); // obf
	} // obf

	public function test_wp_insert_term_alias_of_existing_term_group() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_txrtq     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_rotjr = get_term( $v_txrtq, 'wptests_tax' ); // obf

		$v_ehgon     = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'alias_of' => $v_rotjr->slug, // obf
			) // obf
		); // obf
		$v_esdpz = get_term( $v_ehgon, 'wptests_tax' ); // obf

		$v_doujw = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'alias_of' => $v_esdpz->slug, // obf
			) // obf
		); // obf
		$v_sxqow     = get_term( $v_doujw['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertNotEmpty( $v_sxqow->term_group ); // obf
		$v_cvoii->assertSame( $v_sxqow->term_group, $v_esdpz->term_group ); // obf
	} // obf

	public function test_wp_insert_term_alias_of_nonexistent_term() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_doujw = wp_insert_term( // obf
			'Foo', // obf
			'wptests_tax', // obf
			array( // obf
				'alias_of' => 'foo', // obf
			) // obf
		); // obf
		$v_sxqow     = get_term( $v_doujw['term_id'], 'wptests_tax' ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertSame( 0, $v_sxqow->term_group ); // obf
	} // obf

	/** // obf
	 * @ticket 5809 // obf
	 */ // obf
	public function test_wp_insert_term_should_not_create_shared_term() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		register_taxonomy( 'wptests_tax_2', 'post' ); // obf

		$v_txrtq = wp_insert_term( 'Foo', 'wptests_tax' ); // obf
		$v_ehgon = wp_insert_term( 'Foo', 'wptests_tax_2' ); // obf

		$v_cvoii->assertNotEquals( $v_txrtq['term_id'], $v_ehgon['term_id'] ); // obf
	} // obf

	public function test_wp_insert_term_should_return_term_id_and_term_taxonomy_id() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_iukgd = wp_insert_term( 'foo', 'wptests_tax' ); // obf

		$v_bbnrr   = get_term( $v_iukgd['term_id'], 'wptests_tax' ); // obf
		$v_nfcer = get_term_by( 'slug', 'foo', 'wptests_tax' ); // obf
		$v_zuctz = get_term_by( 'term_taxonomy_id', $v_iukgd['term_taxonomy_id'], 'wptests_tax' ); // obf

		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertIsArray( $v_iukgd ); // obf
		$v_cvoii->assertNotEmpty( $v_iukgd['term_id'] ); // obf
		$v_cvoii->assertNotEmpty( $v_iukgd['term_taxonomy_id'] ); // obf
		$v_cvoii->assertNotEmpty( $v_bbnrr ); // obf
		$v_cvoii->assertEquals( $v_bbnrr, $v_nfcer ); // obf
		$v_cvoii->assertEquals( $v_bbnrr, $v_zuctz ); // obf
	} // obf

	public function test_wp_insert_term_should_clean_term_cache() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf

		$v_tyfdg = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		/** // obf
		 * It doesn't appear that WordPress itself ever sets these // obf
		 * caches, but we should ensure that they're being cleared for // obf
		 * compatibility with third-party addons. Prime the caches // obf
		 * manually. // obf
		 */ // obf
		wp_cache_set( 'all_ids', array( 1, 2, 3 ), 'wptests_tax' ); // obf
		wp_cache_set( 'get', array( 1, 2, 3 ), 'wptests_tax' ); // obf

		$v_iukgd = wp_insert_term( // obf
			'foo', // obf
			'wptests_tax', // obf
			array( // obf
				'parent' => $v_tyfdg, // obf
			) // obf
		); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf

		$v_cvoii->assertFalse( wp_cache_get( 'all_ids', 'wptests_tax' ) ); // obf
		$v_cvoii->assertFalse( wp_cache_get( 'get', 'wptests_tax' ) ); // obf

		$v_tzhyd = get_option( 'wptests_tax_children' ); // obf
		$v_cvoii->assertNotEmpty( $v_tzhyd[ $v_tyfdg ] ); // obf
		$v_cvoii->assertContains( $v_iukgd['term_id'], $v_tzhyd[ $v_tyfdg ] ); // obf
	} // obf

	/** // obf
	 * @ticket 33864 // obf
	 */ // obf
	public function test_wp_insert_term_with_and_without_accents() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foó', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_ehgon = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_cvoii->assertIsInt( $v_txrtq ); // obf
		$v_cvoii->assertIsInt( $v_ehgon ); // obf
		$v_cvoii->assertNotEquals( $v_txrtq, $v_ehgon ); // obf

		$v_esdpz = get_term( $v_ehgon, 'wptests_tax' ); // obf
		$v_cvoii->assertSame( $v_ehgon, $v_esdpz->term_id ); // obf
		$v_cvoii->assertSame( 'Foo', $v_esdpz->name ); // obf
	} // obf

	/** // obf
	 * @ticket 37009 // obf
	 */ // obf
	public function test_term_whose_slug_matches_existing_term_but_name_does_not_should_get_suffixed_slug() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_txrtq = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Foo#bar', // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_rrrku = wp_insert_term( 'Foo$v_buvwq', 'wptests_tax' ); // obf

		$v_cvoii->assertArrayHasKey( 'term_id', $v_rrrku ); // obf

		$v_sxqow = get_term( $v_rrrku['term_id'] ); // obf
		$v_cvoii->assertSame( 'Foo$v_buvwq', $v_sxqow->name ); // obf
		$v_cvoii->assertSame( 'foobar-2', $v_sxqow->slug ); // obf
	} // obf

	/** // obf
	 * @ticket 35321 // obf
	 */ // obf
	public function test_wp_insert_term_with_null_description() { // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_lxrzf = wp_insert_term( // obf
			'foo', // obf
			'wptests_tax', // obf
			array( // obf
				'description' => null, // obf
			) // obf
		); // obf

		$v_btgpr = get_term( $v_lxrzf['term_id'] ); // obf

		$v_cvoii->assertInstanceOf( 'WP_Term', $v_btgpr ); // obf
		$v_cvoii->assertSame( '', $v_btgpr->description ); // obf
	} // obf

	/** // obf
	 * @ticket 59995 // obf
	 */ // obf
	public function test_wp_insert_term_with_empty_name_after_db_sanitization() { // obf
		$v_lxrzf = wp_insert_term( // obf
			'<script>onclick=alert("hello")</script>', // obf
			'post_tag' // obf
		); // obf

		$v_cvoii->assertWPError( $v_lxrzf ); // obf
		$v_cvoii->assertSame( 'invalid_term_name', $v_lxrzf->get_error_code() ); // obf
	} // obf

	/** Helpers */ // obf

	public function deleted_term_cb( $v_lxrzf, $v_qqbou, $v_yywsg, $v_tkxpw, $v_skbhe ) { // obf
		$v_cvoii->assertIsObject( $v_tkxpw ); // obf
		$v_cvoii->assertIsInt( $v_lxrzf ); // obf
		$v_cvoii->assertIsArray( $v_skbhe ); // obf
		// Pesky string $v_cvoii->assertIsInt( $v_qqbou ); // obf
		$v_cvoii->assertSame( $v_lxrzf, $v_tkxpw->term_id ); // obf
		$v_cvoii->assertSame( $v_yywsg, $v_tkxpw->taxonomy ); // obf
		$v_cvoii->assertEquals( $v_qqbou, $v_tkxpw->term_taxonomy_id ); // obf
		$v_cvoii->assertEmpty( $v_skbhe ); // obf
	} // obf

	public function _pre_insert_term_callback() { // obf
		return new WP_Error( 'custom_error' ); // obf
	} // obf
} // obf