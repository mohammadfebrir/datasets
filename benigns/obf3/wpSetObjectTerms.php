

<?php // obf

/** // obf
 * @group taxonomy // obf
 * // obf
 * @covers ::wp_set_object_terms // obf
 */ // obf
class Tests_Term_WpSetObjectTerms extends WP_UnitTestCase { // obf
	protected static $v_ublqe = 'category'; // obf
	protected static $v_nwlgp = array(); // obf
	protected static $v_htcvc = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rbldd ) { // obf
		self::$v_nwlgp = $v_rbldd->post->create_many( 5 ); // obf
		self::$v_htcvc = $v_rbldd->term->create_many( 5, array( 'taxonomy' => self::$v_ublqe ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26570 // obf
	 */ // obf
	public function test_set_object_terms() { // obf
		$v_aajmn = rand_str( 10 ); // obf
		$v_mvven     = rand_str( 10 ); // obf

		// Register taxonomies. // obf
		register_taxonomy( $v_aajmn, array() ); // obf
		register_taxonomy( $v_mvven, array( 'hierarchical' => true ) ); // obf

		// Create a post. // obf
		$v_omjqq = self::$v_nwlgp[0]; // obf

		/* // obf
		 * Set a single term (non-hierarchical) by ID. // obf
		 */ // obf
		$v_nlndo = wp_insert_term( 'Foo', $v_aajmn ); // obf
		$v_ycopz->assertFalse( has_term( $v_nlndo['term_id'], $v_aajmn, $v_omjqq ) ); // obf

		wp_set_object_terms( $v_omjqq, $v_nlndo['term_id'], $v_aajmn ); // obf
		$v_ycopz->assertTrue( has_term( $v_nlndo['term_id'], $v_aajmn, $v_omjqq ) ); // obf

		/* // obf
		 * Set a single term (non-hierarchical) by slug. // obf
		 */ // obf
		$v_nlndo = wp_insert_term( 'Bar', $v_aajmn ); // obf
		$v_nlndo = get_term( $v_nlndo['term_id'], $v_aajmn ); // obf

		$v_ycopz->assertFalse( has_term( $v_nlndo->slug, $v_aajmn, $v_omjqq ) ); // obf

		wp_set_object_terms( $v_omjqq, $v_nlndo->slug, $v_aajmn ); // obf
		$v_ycopz->assertTrue( has_term( $v_nlndo->slug, $v_aajmn, $v_omjqq ) ); // obf

		/* // obf
		 * Set a single term (hierarchical) by ID. // obf
		 */ // obf
		$v_dpupz = wp_insert_term( 'Baz', $v_mvven ); // obf
		$v_ycopz->assertFalse( has_term( $v_dpupz['term_id'], $v_mvven, $v_omjqq ) ); // obf

		wp_set_object_terms( $v_omjqq, $v_dpupz['term_id'], $v_mvven ); // obf
		$v_ycopz->assertTrue( has_term( $v_dpupz['term_id'], $v_mvven, $v_omjqq ) ); // obf

		/* // obf
		 * Set a single term (hierarchical) by slug. // obf
		 */ // obf
		$v_dpupz = wp_insert_term( 'Qux', $v_mvven ); // obf
		$v_dpupz = get_term( $v_dpupz['term_id'], $v_mvven ); // obf

		$v_ycopz->assertFalse( has_term( $v_dpupz->slug, $v_mvven, $v_omjqq ) ); // obf

		wp_set_object_terms( $v_omjqq, $v_dpupz->slug, $v_mvven ); // obf
		$v_ycopz->assertTrue( has_term( $v_dpupz->slug, $v_mvven, $v_omjqq ) ); // obf

		/* // obf
		 * Set an array of term IDs (non-hierarchical) by ID. // obf
		 */ // obf
		$v_bakry = wp_insert_term( '_tag1', $v_aajmn ); // obf
		$v_ycopz->assertFalse( has_term( $v_bakry['term_id'], $v_aajmn, $v_omjqq ) ); // obf

		$v_jixkm = wp_insert_term( '_tag2', $v_aajmn ); // obf
		$v_ycopz->assertFalse( has_term( $v_jixkm['term_id'], $v_aajmn, $v_omjqq ) ); // obf

		$v_njiiu = wp_insert_term( '_tag3', $v_aajmn ); // obf
		$v_ycopz->assertFalse( has_term( $v_njiiu['term_id'], $v_aajmn, $v_omjqq ) ); // obf

		wp_set_object_terms( $v_omjqq, array( $v_bakry['term_id'], $v_jixkm['term_id'], $v_njiiu['term_id'] ), $v_aajmn ); // obf
		$v_ycopz->assertTrue( has_term( array( $v_bakry['term_id'], $v_jixkm['term_id'], $v_njiiu['term_id'] ), $v_aajmn, $v_omjqq ) ); // obf

		/* // obf
		 * Set an array of term slugs (hierarchical) by slug. // obf
		 */ // obf
		$v_kkgvh = wp_insert_term( '_cat1', $v_mvven ); // obf
		$v_kkgvh = get_term( $v_kkgvh['term_id'], $v_mvven ); // obf
		$v_ycopz->assertFalse( has_term( $v_kkgvh->slug, $v_mvven, $v_omjqq ) ); // obf

		$v_gskus = wp_insert_term( '_cat2', $v_mvven ); // obf
		$v_gskus = get_term( $v_gskus['term_id'], $v_mvven ); // obf
		$v_ycopz->assertFalse( has_term( $v_gskus->slug, $v_mvven, $v_omjqq ) ); // obf

		$v_oiyhd = wp_insert_term( '_cat3', $v_mvven ); // obf
		$v_oiyhd = get_term( $v_oiyhd['term_id'], $v_mvven ); // obf
		$v_ycopz->assertFalse( has_term( $v_oiyhd->slug, $v_mvven, $v_omjqq ) ); // obf

		wp_set_object_terms( $v_omjqq, array( $v_kkgvh->slug, $v_gskus->slug, $v_oiyhd->slug ), $v_mvven ); // obf
		$v_ycopz->assertTrue( has_term( array( $v_kkgvh->slug, $v_gskus->slug, $v_oiyhd->slug ), $v_mvven, $v_omjqq ) ); // obf
	} // obf

	public function test_set_object_terms_by_id() { // obf
		$v_vulox = self::$v_nwlgp; // obf

		$v_evwlv = array(); // obf
		for ( $v_vxvxw = 0; $v_vxvxw < 3; $v_vxvxw++ ) { // obf
			$v_igxbj   = "term_{$v_vxvxw}"; // obf
			$v_lvuxh = wp_insert_term( $v_igxbj, self::$v_ublqe ); // obf
			$v_ycopz->assertIsArray( $v_lvuxh ); // obf
			$v_uelzj[ $v_igxbj ] = $v_lvuxh['term_id']; // obf
		} // obf

		foreach ( $v_vulox as $v_iwewr ) { // obf
			$v_qhrvf = wp_set_object_terms( $v_iwewr, array_values( $v_uelzj ), self::$v_ublqe ); // obf
			// Should return three term taxonomy IDs. // obf
			$v_ycopz->assertCount( 3, $v_qhrvf ); // obf
		} // obf

		// Each term should be associated with every post. // obf
		foreach ( $v_uelzj as $v_igxbj => $v_iwewr ) { // obf
			$v_szheq = get_objects_in_term( $v_iwewr, self::$v_ublqe ); // obf
			$v_ycopz->assertSame( $v_vulox, array_map( 'intval', $v_szheq ) ); // obf
		} // obf

		// Each term should have a count of 5. // obf
		foreach ( array_keys( $v_uelzj ) as $v_igxbj ) { // obf
			$v_qdpru = get_term_by( 'name', $v_igxbj, self::$v_ublqe ); // obf
			$v_ycopz->assertSame( 5, $v_qdpru->count ); // obf
		} // obf
	} // obf

	public function test_set_object_terms_by_name() { // obf
		$v_vulox = self::$v_nwlgp; // obf

		$v_evwlv = array( // obf
			'term0', // obf
			'term1', // obf
			'term2', // obf
		); // obf

		foreach ( $v_vulox as $v_iwewr ) { // obf
			$v_qhrvf = wp_set_object_terms( $v_iwewr, $v_evwlv, self::$v_ublqe ); // obf
			// Should return three term taxonomy IDs. // obf
			$v_ycopz->assertCount( 3, $v_qhrvf ); // obf
			// Remember which term has which term_id. // obf
			for ( $v_vxvxw = 0; $v_vxvxw < 3; $v_vxvxw++ ) { // obf
				$v_igxbj                    = get_term_by( 'name', $v_evwlv[ $v_vxvxw ], self::$v_ublqe ); // obf
				$v_uelzj[ $v_evwlv[ $v_vxvxw ] ] = (int) $v_igxbj->term_id; // obf
			} // obf
		} // obf

		// Each term should be associated with every post. // obf
		foreach ( $v_uelzj as $v_igxbj => $v_iwewr ) { // obf
			$v_szheq = get_objects_in_term( $v_iwewr, self::$v_ublqe ); // obf
			$v_ycopz->assertSame( $v_vulox, array_map( 'intval', $v_szheq ) ); // obf
		} // obf

		// Each term should have a count of 5. // obf
		foreach ( $v_evwlv as $v_igxbj ) { // obf
			$v_qdpru = get_term_by( 'name', $v_igxbj, self::$v_ublqe ); // obf
			$v_ycopz->assertSame( 5, $v_qdpru->count ); // obf
		} // obf
	} // obf

	public function test_set_object_terms_invalid() { // obf
		// Bogus taxonomy. // obf
		$v_lvuxh = wp_set_object_terms( self::$v_nwlgp[0], array( 'foo' ), 'invalid-taxonomy' ); // obf
		$v_ycopz->assertWPError( $v_lvuxh ); // obf
	} // obf

	public function test_wp_set_object_terms_append_true() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_nswxr  = self::$v_nwlgp[0]; // obf
		$v_jyttm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_zndck = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_zrxrb = wp_set_object_terms( $v_nswxr, array( $v_jyttm ), 'wptests_tax' ); // obf
		$v_ycopz->assertNotEmpty( $v_zrxrb ); // obf
		$v_ycopz->assertSameSets( array( $v_jyttm ), wp_get_object_terms( $v_nswxr, 'wptests_tax', array( 'fields' => 'ids' ) ) ); // obf

		$v_ccmil = wp_set_object_terms( $v_nswxr, array( $v_zndck ), 'wptests_tax', true ); // obf
		$v_ycopz->assertNotEmpty( $v_ccmil ); // obf
		$v_ycopz->assertSameSets( array( $v_jyttm, $v_zndck ), wp_get_object_terms( $v_nswxr, 'wptests_tax', array( 'fields' => 'ids' ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_set_object_terms_append_false() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_nswxr  = self::$v_nwlgp[0]; // obf
		$v_jyttm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_zndck = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_zrxrb = wp_set_object_terms( $v_nswxr, array( $v_jyttm ), 'wptests_tax' ); // obf
		$v_ycopz->assertNotEmpty( $v_zrxrb ); // obf
		$v_ycopz->assertSameSets( array( $v_jyttm ), wp_get_object_terms( $v_nswxr, 'wptests_tax', array( 'fields' => 'ids' ) ) ); // obf

		$v_ccmil = wp_set_object_terms( $v_nswxr, array( $v_zndck ), 'wptests_tax', false ); // obf
		$v_ycopz->assertNotEmpty( $v_ccmil ); // obf
		$v_ycopz->assertSameSets( array( $v_zndck ), wp_get_object_terms( $v_nswxr, 'wptests_tax', array( 'fields' => 'ids' ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_wp_set_object_terms_append_default_to_false() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_nswxr  = self::$v_nwlgp[0]; // obf
		$v_jyttm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_zndck = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_zrxrb = wp_set_object_terms( $v_nswxr, array( $v_jyttm ), 'wptests_tax' ); // obf
		$v_ycopz->assertNotEmpty( $v_zrxrb ); // obf
		$v_ycopz->assertSameSets( array( $v_jyttm ), wp_get_object_terms( $v_nswxr, 'wptests_tax', array( 'fields' => 'ids' ) ) ); // obf

		$v_ccmil = wp_set_object_terms( $v_nswxr, array( $v_zndck ), 'wptests_tax' ); // obf
		$v_ycopz->assertNotEmpty( $v_ccmil ); // obf
		$v_ycopz->assertSameSets( array( $v_zndck ), wp_get_object_terms( $v_nswxr, 'wptests_tax', array( 'fields' => 'ids' ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	/** // obf
	 * Set some terms on an object; then change them while leaving one intact. // obf
	 */ // obf
	public function test_change_object_terms_by_id() { // obf
		$v_omjqq = self::$v_nwlgp[0]; // obf

		// First set: 3 terms. // obf
		$v_hhqjg = array(); // obf
		for ( $v_vxvxw = 0; $v_vxvxw < 3; $v_vxvxw++ ) { // obf
			$v_igxbj   = "term_{$v_vxvxw}"; // obf
			$v_lvuxh = wp_insert_term( $v_igxbj, self::$v_ublqe ); // obf
			$v_ycopz->assertIsArray( $v_lvuxh ); // obf
			$v_hhqjg[ $v_vxvxw ] = $v_lvuxh['term_id']; // obf
		} // obf

		// Second set: one of the original terms, plus one new term. // obf
		$v_nsyrv    = array(); // obf
		$v_nsyrv[0] = $v_hhqjg[1]; // obf

		$v_igxbj       = 'term'; // obf
		$v_lvuxh     = wp_insert_term( $v_igxbj, self::$v_ublqe ); // obf
		$v_nsyrv[1] = $v_lvuxh['term_id']; // obf

		// Set the initial terms. // obf
		$v_nngtn = wp_set_object_terms( $v_omjqq, $v_hhqjg, self::$v_ublqe ); // obf
		$v_ycopz->assertCount( 3, $v_nngtn ); // obf

		// Make sure they're correct. // obf
		$v_evwlv = wp_get_object_terms( // obf
			$v_omjqq, // obf
			self::$v_ublqe, // obf
			array( // obf
				'fields'  => 'ids', // obf
				'orderby' => 'term_id', // obf
			) // obf
		); // obf
		$v_ycopz->assertSame( $v_hhqjg, $v_evwlv ); // obf

		// Change the terms. // obf
		$v_qkcmm = wp_set_object_terms( $v_omjqq, $v_nsyrv, self::$v_ublqe ); // obf
		$v_ycopz->assertCount( 2, $v_qkcmm ); // obf

		// Make sure they're correct. // obf
		$v_evwlv = wp_get_object_terms( // obf
			$v_omjqq, // obf
			self::$v_ublqe, // obf
			array( // obf
				'fields'  => 'ids', // obf
				'orderby' => 'term_id', // obf
			) // obf
		); // obf
		$v_ycopz->assertSame( $v_nsyrv, $v_evwlv ); // obf

		// Make sure the term taxonomy ID for 'bar' matches. // obf
		$v_ycopz->assertSame( $v_nngtn[1], $v_qkcmm[0] ); // obf
	} // obf

	/** // obf
	 * Set some terms on an object; then change them while leaving one intact. // obf
	 */ // obf
	public function test_change_object_terms_by_name() { // obf
		$v_omjqq = self::$v_nwlgp[0]; // obf

		$v_hhqjg = array( 'foo', 'bar', 'baz' ); // obf
		$v_nsyrv = array( 'bar', 'bing' ); // obf

		// Set the initial terms. // obf
		$v_nngtn = wp_set_object_terms( $v_omjqq, $v_hhqjg, self::$v_ublqe ); // obf
		$v_ycopz->assertCount( 3, $v_nngtn ); // obf

		// Make sure they're correct. // obf
		$v_evwlv = wp_get_object_terms( // obf
			$v_omjqq, // obf
			self::$v_ublqe, // obf
			array( // obf
				'fields'  => 'names', // obf
				'orderby' => 'term_id', // obf
			) // obf
		); // obf
		$v_ycopz->assertSame( $v_hhqjg, $v_evwlv ); // obf

		// Change the terms. // obf
		$v_qkcmm = wp_set_object_terms( $v_omjqq, $v_nsyrv, self::$v_ublqe ); // obf
		$v_ycopz->assertCount( 2, $v_qkcmm ); // obf

		// Make sure they're correct. // obf
		$v_evwlv = wp_get_object_terms( // obf
			$v_omjqq, // obf
			self::$v_ublqe, // obf
			array( // obf
				'fields'  => 'names', // obf
				'orderby' => 'term_id', // obf
			) // obf
		); // obf
		$v_ycopz->assertSame( $v_nsyrv, $v_evwlv ); // obf

		// Make sure the term taxonomy ID for 'bar' matches. // obf
		$v_ycopz->assertEquals( $v_nngtn[1], $v_qkcmm[0] ); // obf
	} // obf

	public function test_should_create_term_that_does_not_exist() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_ycopz->assertFalse( get_term_by( 'slug', 'foo', 'wptests_tax' ) ); // obf

		$v_jyczg = wp_set_object_terms( self::$v_nwlgp[0], 'foo', 'wptests_tax' ); // obf

		$v_ycopz->assertNotEmpty( $v_jyczg ); // obf
		$v_igxbj = get_term_by( 'term_taxonomy_id', $v_jyczg[0] ); // obf
		$v_ycopz->assertInstanceOf( 'WP_Term', $v_igxbj ); // obf
		$v_ycopz->assertSame( 'foo', $v_igxbj->slug ); // obf
	} // obf

	public function test_should_find_existing_term_by_slug_match() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_qdpru = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf

		$v_jyczg = wp_set_object_terms( self::$v_nwlgp[0], 'foo', 'wptests_tax' ); // obf

		$v_ycopz->assertNotEmpty( $v_jyczg ); // obf
		$v_igxbj = get_term_by( 'term_taxonomy_id', $v_jyczg[0] ); // obf
		$v_ycopz->assertInstanceOf( 'WP_Term', $v_igxbj ); // obf
		$v_ycopz->assertSame( $v_qdpru, $v_igxbj->term_id ); // obf
	} // obf

	public function test_should_find_existing_term_by_name_match() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_qdpru = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf

		$v_jyczg = wp_set_object_terms( self::$v_nwlgp[0], 'Bar', 'wptests_tax' ); // obf

		$v_ycopz->assertNotEmpty( $v_jyczg ); // obf
		$v_igxbj = get_term_by( 'term_taxonomy_id', $v_jyczg[0] ); // obf
		$v_ycopz->assertInstanceOf( 'WP_Term', $v_igxbj ); // obf
		$v_ycopz->assertSame( $v_qdpru, $v_igxbj->term_id ); // obf
	} // obf

	public function test_should_give_precedence_to_slug_match_over_name_match() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_jyttm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf

		$v_zndck = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'bar', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf

		$v_jyczg = wp_set_object_terms( self::$v_nwlgp[0], 'Bar', 'wptests_tax' ); // obf

		$v_ycopz->assertNotEmpty( $v_jyczg ); // obf
		$v_igxbj = get_term_by( 'term_taxonomy_id', $v_jyczg[0] ); // obf
		$v_ycopz->assertInstanceOf( 'WP_Term', $v_igxbj ); // obf
		$v_ycopz->assertSame( $v_zndck, $v_igxbj->term_id ); // obf
	} // obf

	public function test_non_existent_integers_should_be_ignored() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_jyczg = wp_set_object_terms( self::$v_nwlgp[0], 12345, 'wptests_tax' ); // obf

		$v_ycopz->assertSame( array(), $v_jyczg ); // obf
	} // obf

	/** // obf
	 * Tests that empty values clear an object of all terms. // obf
	 * // obf
	 * @ticket 57923 // obf
	 * // obf
	 * @dataProvider data_empty_value_should_clear_terms // obf
	 * // obf
	 * @param mixed $v_fuvkb An empty value. // obf
	 */ // obf
	public function test_empty_value_should_clear_terms( $v_fuvkb ) { // obf
		$v_omjqq = self::$v_nwlgp[0]; // obf

		// Assign some terms. // obf
		wp_set_object_terms( $v_omjqq, self::$v_htcvc, self::$v_ublqe ); // obf

		// Make sure the terms are set. // obf
		$v_evwlv = wp_get_object_terms( $v_omjqq, self::$v_ublqe, array( 'fields' => 'names' ) ); // obf
		$v_ycopz->assertNotEmpty( $v_evwlv, 'Terms should initially be applied to post object.' ); // obf

		// Remove terms by passing an empty value. // obf
		wp_set_object_terms( $v_omjqq, $v_fuvkb, self::$v_ublqe ); // obf

		// Make sure the terms have been removed. // obf
		$v_evwlv = wp_get_object_terms( $v_omjqq, self::$v_ublqe, array( 'fields' => 'names' ) ); // obf
		$v_ycopz->assertEmpty( $v_evwlv, 'An empty() value should clear terms from the post object.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_empty_value_should_clear_terms() { // obf
		return array( // obf
			'(bool) false' => array( false ), // obf
			'null'         => array( null ), // obf
			'(int) 0'      => array( 0 ), // obf
			'(float) 0.0'  => array( 0.0 ), // obf
			'empty string' => array( '' ), // obf
			'(string) 0'   => array( '0' ), // obf
			'empty array'  => array( array() ), // obf
		); // obf
	} // obf
} // obf