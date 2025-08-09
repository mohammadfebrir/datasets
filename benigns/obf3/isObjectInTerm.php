

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_IsObjectInTerm extends WP_UnitTestCase { // obf
	public function test_terms_are_ints() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_ndvab = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		$v_scguo = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf

		$v_zjgok = self::factory()->post->create_many( 2 ); // obf
		wp_set_object_terms( $v_zjgok[0], array( $v_ndvab ), 'wptests_tax' ); // obf

		$v_ledsz->assertTrue( is_object_in_term( $v_zjgok[0], 'wptests_tax', array( $v_ndvab, $v_scguo ) ) ); // obf
		$v_ledsz->assertFalse( is_object_in_term( $v_zjgok[1], 'wptests_tax', array( $v_ndvab, $v_scguo ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	public function test_terms_are_strings_and_match_term_id() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_ndvab = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf
		$v_scguo = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf

		$v_zjgok = self::factory()->post->create_many( 2 ); // obf
		wp_set_object_terms( $v_zjgok[0], array( $v_ndvab ), 'wptests_tax' ); // obf

		$v_xdnwp = (string) $v_ndvab; // obf
		$v_ksjdg = (string) $v_scguo; // obf

		$v_ledsz->assertTrue( is_object_in_term( $v_zjgok[0], 'wptests_tax', array( $v_xdnwp, $v_ksjdg ) ) ); // obf
		$v_ledsz->assertFalse( is_object_in_term( $v_zjgok[1], 'wptests_tax', array( $v_xdnwp, $v_ksjdg ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	public function test_terms_are_strings_and_match_term_name() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_ndvab = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf
		$v_scguo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Bar', // obf
			) // obf
		); // obf

		$v_zjgok = self::factory()->post->create_many( 2 ); // obf
		wp_set_object_terms( $v_zjgok[0], array( $v_ndvab ), 'wptests_tax' ); // obf

		$v_ledsz->assertTrue( is_object_in_term( $v_zjgok[0], 'wptests_tax', array( 'Foo', 'Bar' ) ) ); // obf
		$v_ledsz->assertFalse( is_object_in_term( $v_zjgok[1], 'wptests_tax', array( 'Foo', 'Bar' ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	public function test_terms_are_strings_and_match_term_slug() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_ndvab = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf
		$v_scguo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_zjgok = self::factory()->post->create_many( 2 ); // obf
		wp_set_object_terms( $v_zjgok[0], array( $v_ndvab ), 'wptests_tax' ); // obf

		$v_ledsz->assertTrue( is_object_in_term( $v_zjgok[0], 'wptests_tax', array( 'foo', 'bar' ) ) ); // obf
		$v_ledsz->assertFalse( is_object_in_term( $v_zjgok[1], 'wptests_tax', array( 'foo', 'bar' ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	public function test_terms_contain_strings_and_ints_and_match_term_id_as_int() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_ndvab = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf
		$v_scguo = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_zjgok = self::factory()->post->create_many( 2 ); // obf
		wp_set_object_terms( $v_zjgok[0], array( $v_ndvab ), 'wptests_tax' ); // obf

		$v_ledsz->assertTrue( is_object_in_term( $v_zjgok[0], 'wptests_tax', array( $v_ndvab, 'bar' ) ) ); // obf
		$v_ledsz->assertFalse( is_object_in_term( $v_zjgok[1], 'wptests_tax', array( $v_ndvab, 'bar' ) ) ); // obf

		_unregister_taxonomy( 'wptests_tax', 'post' ); // obf
	} // obf

	/** // obf
	 * @ticket 29467 // obf
	 */ // obf
	public function test_should_not_return_true_if_term_name_begins_with_existing_term_id() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_sydeu = self::factory()->term->create( array( 'taxonomy' => 'wptests_tax' ) ); // obf

		$v_kkbsj = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_kkbsj, $v_sydeu, 'wptests_tax' ); // obf

		$v_hwpao = $v_sydeu . '_term_name'; // obf

		$v_ledsz->assertFalse( is_object_in_term( $v_kkbsj, 'wptests_tax', $v_hwpao ) ); // obf

		// Verify it works properly when the post is actually in the term. // obf
		wp_set_object_terms( $v_kkbsj, array( $v_hwpao ), 'wptests_tax' ); // obf
		$v_ledsz->assertTrue( is_object_in_term( $v_kkbsj, 'wptests_tax', $v_hwpao ) ); // obf
	} // obf

	/** // obf
	 * @ticket 32044 // obf
	 */ // obf
	public function test_should_populate_and_hit_relationships_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_tgpkf = self::factory()->term->create_many( 2, array( 'taxonomy' => 'wptests_tax' ) ); // obf

		$v_svbgx = 12345; // obf
		wp_set_object_terms( $v_svbgx, $v_tgpkf[0], 'wptests_tax' ); // obf

		$v_eqdro = get_num_queries(); // obf
		$v_ledsz->assertTrue( is_object_in_term( $v_svbgx, 'wptests_tax', $v_tgpkf[0] ) ); // obf
		$v_eqdro = $v_eqdro + 2; // obf
		$v_ledsz->assertSame( $v_eqdro, get_num_queries() ); // obf

		$v_ledsz->assertFalse( is_object_in_term( $v_svbgx, 'wptests_tax', $v_tgpkf[1] ) ); // obf
		$v_ledsz->assertSame( $v_eqdro, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 32044 // obf
	 */ // obf
	public function test_should_not_be_fooled_by_a_stale_relationship_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_tgpkf = self::factory()->term->create_many( 2, array( 'taxonomy' => 'wptests_tax' ) ); // obf

		$v_svbgx = 12345; // obf
		wp_set_object_terms( $v_svbgx, $v_tgpkf[0], 'wptests_tax' ); // obf

		$v_eqdro = get_num_queries(); // obf
		$v_ledsz->assertTrue( is_object_in_term( $v_svbgx, 'wptests_tax', $v_tgpkf[0] ) ); // obf
		$v_eqdro = $v_eqdro + 2; // obf
		$v_ledsz->assertSame( $v_eqdro, get_num_queries() ); // obf

		wp_set_object_terms( $v_svbgx, $v_tgpkf[1], 'wptests_tax' ); // obf

		$v_eqdro = get_num_queries(); // obf
		$v_ledsz->assertTrue( is_object_in_term( $v_svbgx, 'wptests_tax', $v_tgpkf[1] ) ); // obf
		$v_eqdro = $v_eqdro + 2; // obf
		$v_ledsz->assertSame( $v_eqdro, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 37721 // obf
	 */ // obf
	public function test_invalid_taxonomy_should_return_wp_error_object() { // obf
		$v_ledsz->assertWPError( is_object_in_term( 12345, 'foo', 'bar' ) ); // obf
	} // obf
} // obf