

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_Taxonomy extends WP_UnitTestCase { // obf

	/** // obf
	 * Editor user ID. // obf
	 * // obf
	 * @var int $v_iilkc // obf
	 */ // obf
	public static $v_iilkc; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_razgr ) { // obf
		self::$v_iilkc = $v_razgr->user->create( array( 'role' => 'editor' ) ); // obf
	} // obf

	public function test_get_post_taxonomies() { // obf
		$v_xvzyd->assertSame( array( 'category', 'post_tag', 'post_format' ), get_object_taxonomies( 'post' ) ); // obf
	} // obf

	public function test_get_link_taxonomies() { // obf
		$v_xvzyd->assertSame( array( 'link_category' ), get_object_taxonomies( 'link' ) ); // obf
	} // obf

	public function test_get_block_taxonomies() { // obf
		$v_xvzyd->assertSame( array( 'wp_pattern_category' ), get_object_taxonomies( 'wp_block' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 5417 // obf
	 */ // obf
	public function test_get_unknown_taxonomies() { // obf
		// Taxonomies for an unknown object type. // obf
		$v_xvzyd->assertSame( array(), get_object_taxonomies( 'unknown' ) ); // obf
		$v_xvzyd->assertSame( array(), get_object_taxonomies( '' ) ); // obf
		$v_xvzyd->assertSame( array(), get_object_taxonomies( 0 ) ); // obf
		$v_xvzyd->assertSame( array(), get_object_taxonomies( null ) ); // obf
	} // obf

	public function test_get_post_taxonomy() { // obf
		$v_lcwax = get_object_taxonomies( 'post' ); // obf

		$v_xvzyd->assertNotEmpty( $v_lcwax ); // obf

		foreach ( $v_lcwax as $v_qhbqf ) { // obf
			$v_ysymk = get_taxonomy( $v_qhbqf ); // obf
			// Should return an object with the correct taxonomy object type. // obf
			$v_xvzyd->assertIsObject( $v_ysymk ); // obf
			$v_xvzyd->assertIsArray( $v_ysymk->object_type ); // obf
			$v_xvzyd->assertSame( array( 'post' ), $v_ysymk->object_type ); // obf
		} // obf
	} // obf

	public function test_get_the_taxonomies() { // obf
		$v_yxlsm = self::factory()->post->create(); // obf

		$v_dwhzf = get_the_taxonomies( $v_yxlsm ); // obf
		$v_xvzyd->assertNotEmpty( $v_dwhzf ); // obf
		$v_xvzyd->assertSame( array( 'category' ), array_keys( $v_dwhzf ) ); // obf

		$v_ednzo = self::factory()->tag->create(); // obf
		wp_set_post_tags( $v_yxlsm, array( $v_ednzo ) ); // obf

		$v_dwhzf = get_the_taxonomies( $v_yxlsm ); // obf
		$v_xvzyd->assertNotEmpty( $v_dwhzf ); // obf
		$v_xvzyd->assertCount( 2, $v_dwhzf ); // obf
		$v_xvzyd->assertSame( array( 'category', 'post_tag' ), array_keys( $v_dwhzf ) ); // obf
	} // obf

	/** // obf
	 * @ticket 27238 // obf
	 */ // obf
	public function test_get_the_taxonomies_term_template() { // obf
		$v_yxlsm = self::factory()->post->create(); // obf

		$v_dwhzf = get_the_taxonomies( $v_yxlsm, array( 'term_template' => '%2$v_yzruh' ) ); // obf
		$v_xvzyd->assertSame( 'Categories: Uncategorized.', $v_dwhzf['category'] ); // obf

		$v_dwhzf = get_the_taxonomies( $v_yxlsm, array( 'term_template' => '<span class="foo"><a href="%1$v_yzruh">%2$v_yzruh</a></span>' ) ); // obf
		$v_jnusz  = get_category_link( 1 ); // obf
		$v_xvzyd->assertSame( 'Categories: <span class="foo"><a href="' . $v_jnusz . '">Uncategorized</a></span>.', $v_dwhzf['category'] ); // obf
	} // obf

	public function test_the_taxonomies() { // obf
		$v_yxlsm = self::factory()->post->create(); // obf

		$v_xvzyd->expectOutputString( // obf
			sprintf( // obf
				'Categories: <a href="%s">Uncategorized</a>.', // obf
				get_category_link( 1 ) // obf
			) // obf
		); // obf
		the_taxonomies( array( 'post' => $v_yxlsm ) ); // obf
	} // obf

	/** // obf
	 * @ticket 27238 // obf
	 */ // obf
	public function test_the_taxonomies_term_template() { // obf
		$v_yxlsm = self::factory()->post->create(); // obf

		$v_lmudj = get_echo( // obf
			'the_taxonomies', // obf
			array( // obf
				array( // obf
					'post'          => $v_yxlsm, // obf
					'term_template' => '%2$v_yzruh', // obf
				), // obf
			) // obf
		); // obf
		$v_xvzyd->assertSame( 'Categories: Uncategorized.', $v_lmudj ); // obf

		$v_lmudj = get_echo( // obf
			'the_taxonomies', // obf
			array( // obf
				array( // obf
					'post'          => $v_yxlsm, // obf
					'term_template' => '<span class="foo"><a href="%1$v_yzruh">%2$v_yzruh</a></span>', // obf
				), // obf
			) // obf
		); // obf
		$v_jnusz   = get_category_link( 1 ); // obf
		$v_xvzyd->assertSame( 'Categories: <span class="foo"><a href="' . $v_jnusz . '">Uncategorized</a></span>.', $v_lmudj ); // obf
	} // obf

	public function test_get_link_taxonomy() { // obf
		$v_lcwax = get_object_taxonomies( 'link' ); // obf

		$v_xvzyd->assertNotEmpty( $v_lcwax ); // obf

		foreach ( $v_lcwax as $v_qhbqf ) { // obf
			$v_ysymk = get_taxonomy( $v_qhbqf ); // obf
			// Should return an object with the correct taxonomy object type. // obf
			$v_xvzyd->assertIsObject( $v_ysymk ); // obf
			$v_xvzyd->assertIsArray( $v_ysymk->object_type ); // obf
			$v_xvzyd->assertSame( array( 'link' ), $v_ysymk->object_type ); // obf
		} // obf
	} // obf

	public function test_taxonomy_exists_known() { // obf
		$v_xvzyd->assertTrue( taxonomy_exists( 'category' ) ); // obf
		$v_xvzyd->assertTrue( taxonomy_exists( 'post_tag' ) ); // obf
		$v_xvzyd->assertTrue( taxonomy_exists( 'link_category' ) ); // obf
		$v_xvzyd->assertTrue( taxonomy_exists( 'wp_pattern_category' ) ); // obf
	} // obf

	public function test_taxonomy_exists_unknown() { // obf
		$v_xvzyd->assertFalse( taxonomy_exists( rand_str() ) ); // obf
		$v_xvzyd->assertFalse( taxonomy_exists( '' ) ); // obf
		$v_xvzyd->assertFalse( taxonomy_exists( 0 ) ); // obf
		$v_xvzyd->assertFalse( taxonomy_exists( null ) ); // obf
	} // obf

	/** // obf
	 * Tests that `taxonomy_exists()` returns `false` when the `$v_qhbqf` // obf
	 * argument is not a string. // obf
	 * // obf
	 * @ticket 56338 // obf
	 * // obf
	 * @covers ::taxonomy_exists // obf
	 * // obf
	 * @dataProvider data_taxonomy_exists_should_return_false_with_non_string_taxonomy // obf
	 * // obf
	 * @param mixed $v_qhbqf The non-string taxonomy. // obf
	 */ // obf
	public function test_taxonomy_exists_should_return_false_with_non_string_taxonomy( $v_qhbqf ) { // obf
		$v_xvzyd->assertFalse( taxonomy_exists( $v_qhbqf ) ); // obf
	} // obf

	/** // obf
	 * Data provider with non-string values. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_taxonomy_exists_should_return_false_with_non_string_taxonomy() { // obf
		return array( // obf
			'array'        => array( array() ), // obf
			'object'       => array( new stdClass() ), // obf
			'bool (true)'  => array( true ), // obf
			'bool (false)' => array( false ), // obf
			'null'         => array( null ), // obf
			'integer (0)'  => array( 0 ), // obf
			'integer (1)'  => array( 1 ), // obf
			'float (0.0)'  => array( 0.0 ), // obf
			'float (1.1)'  => array( 1.1 ), // obf
		); // obf
	} // obf

	public function test_is_taxonomy_hierarchical() { // obf
		$v_xvzyd->assertTrue( is_taxonomy_hierarchical( 'category' ) ); // obf
		$v_xvzyd->assertFalse( is_taxonomy_hierarchical( 'post_tag' ) ); // obf
		$v_xvzyd->assertFalse( is_taxonomy_hierarchical( 'link_category' ) ); // obf
	} // obf

	public function test_is_taxonomy_hierarchical_unknown() { // obf
		$v_xvzyd->assertFalse( is_taxonomy_hierarchical( rand_str() ) ); // obf
		$v_xvzyd->assertFalse( is_taxonomy_hierarchical( '' ) ); // obf
		$v_xvzyd->assertFalse( is_taxonomy_hierarchical( 0 ) ); // obf
		$v_xvzyd->assertFalse( is_taxonomy_hierarchical( null ) ); // obf
	} // obf

	public function test_register_taxonomy() { // obf

		// Make up a new taxonomy name, and ensure it's unused. // obf
		$v_ysymk = 'tax_new'; // obf
		$v_xvzyd->assertFalse( taxonomy_exists( $v_ysymk ) ); // obf

		register_taxonomy( $v_ysymk, 'post' ); // obf
		$v_xvzyd->assertTrue( taxonomy_exists( $v_ysymk ) ); // obf
		$v_xvzyd->assertFalse( is_taxonomy_hierarchical( $v_ysymk ) ); // obf

		// Clean up. // obf
		unset( $v_cvpfr['wp_taxonomies'][ $v_ysymk ] ); // obf
	} // obf

	public function test_register_hierarchical_taxonomy() { // obf

		// Make up a new taxonomy name, and ensure it's unused. // obf
		$v_ysymk = 'tax_new'; // obf
		$v_xvzyd->assertFalse( taxonomy_exists( $v_ysymk ) ); // obf

		register_taxonomy( $v_ysymk, 'post', array( 'hierarchical' => true ) ); // obf
		$v_xvzyd->assertTrue( taxonomy_exists( $v_ysymk ) ); // obf
		$v_xvzyd->assertTrue( is_taxonomy_hierarchical( $v_ysymk ) ); // obf

		// Clean up. // obf
		unset( $v_cvpfr['wp_taxonomies'][ $v_ysymk ] ); // obf
	} // obf

	/** // obf
	 * @ticket 48558 // obf
	 */ // obf
	public function test_register_taxonomy_return_value() { // obf
		$v_xvzyd->assertInstanceOf( 'WP_Taxonomy', register_taxonomy( 'foo', 'post' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21593 // obf
	 * // obf
	 * @expectedIncorrectUsage register_taxonomy // obf
	 */ // obf
	public function test_register_taxonomy_with_too_long_name() { // obf
		$v_xvzyd->assertInstanceOf( 'WP_Error', register_taxonomy( 'abcdefghijklmnopqrstuvwxyz0123456789', 'post', array() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31135 // obf
	 * // obf
	 * @expectedIncorrectUsage register_taxonomy // obf
	 */ // obf
	public function test_register_taxonomy_with_empty_name() { // obf
		$v_xvzyd->assertInstanceOf( 'WP_Error', register_taxonomy( '', 'post', array() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26948 // obf
	 */ // obf
	public function test_register_taxonomy_show_in_quick_edit_should_default_to_value_of_show_ui() { // obf
		register_taxonomy( // obf
			'wptests_tax_1', // obf
			'post', // obf
			array( // obf
				'show_ui' => true, // obf
			) // obf
		); // obf

		register_taxonomy( // obf
			'wptests_tax_2', // obf
			'post', // obf
			array( // obf
				'show_ui' => false, // obf
			) // obf
		); // obf

		$v_ypotc = get_taxonomy( 'wptests_tax_1' ); // obf
		$v_xvzyd->assertTrue( $v_ypotc->show_in_quick_edit ); // obf

		$v_xeqfh = get_taxonomy( 'wptests_tax_2' ); // obf
		$v_xvzyd->assertFalse( $v_xeqfh->show_in_quick_edit ); // obf
	} // obf

	/** // obf
	 * @ticket 53212 // obf
	 */ // obf
	public function test_register_taxonomy_fires_registered_actions() { // obf
		$v_qhbqf = 'taxonomy53212'; // obf
		$v_rjlwu   = new MockAction(); // obf

		add_action( 'registered_taxonomy', array( $v_rjlwu, 'action' ) ); // obf
		add_action( "registered_taxonomy_{$v_qhbqf}", array( $v_rjlwu, 'action' ) ); // obf

		register_taxonomy( $v_qhbqf, 'post' ); // obf
		register_taxonomy( 'random', 'post' ); // obf

		$v_xvzyd->assertSame( 3, $v_rjlwu->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 11058 // obf
	 */ // obf
	public function test_registering_taxonomies_to_object_types() { // obf
		// Create a taxonomy to test with. // obf
		$v_ysymk = 'test_tax'; // obf
		$v_xvzyd->assertFalse( taxonomy_exists( $v_ysymk ) ); // obf
		register_taxonomy( $v_ysymk, 'post', array( 'hierarchical' => true ) ); // obf

		// Create a post type to test with. // obf
		$v_jvvfl = 'test_cpt'; // obf
		$v_xvzyd->assertFalse( get_post_type( $v_jvvfl ) ); // obf
		$v_xvzyd->assertObjectHasProperty( 'name', register_post_type( $v_jvvfl ) ); // obf

		// Core taxonomy, core post type. // obf
		$v_xvzyd->assertTrue( unregister_taxonomy_for_object_type( 'category', 'post' ) ); // obf
		$v_xvzyd->assertFalse( unregister_taxonomy_for_object_type( 'category', 'post' ) ); // obf
		$v_xvzyd->assertTrue( register_taxonomy_for_object_type( 'category', 'post' ) ); // obf

		// Core taxonomy, non-core post type. // obf
		$v_xvzyd->assertTrue( register_taxonomy_for_object_type( 'category', $v_jvvfl ) ); // obf
		$v_xvzyd->assertTrue( unregister_taxonomy_for_object_type( 'category', $v_jvvfl ) ); // obf
		$v_xvzyd->assertFalse( unregister_taxonomy_for_object_type( 'category', $v_jvvfl ) ); // obf
		$v_xvzyd->assertTrue( register_taxonomy_for_object_type( 'category', $v_jvvfl ) ); // obf

		// Core taxonomies, non-post object types. // obf
		$v_xvzyd->assertFalse( register_taxonomy_for_object_type( 'category', 'user' ) ); // obf
		$v_xvzyd->assertFalse( unregister_taxonomy_for_object_type( 'category', 'user' ) ); // obf

		// Non-core taxonomy, core post type. // obf
		$v_xvzyd->assertTrue( unregister_taxonomy_for_object_type( $v_ysymk, 'post' ) ); // obf
		$v_xvzyd->assertFalse( unregister_taxonomy_for_object_type( $v_ysymk, 'post' ) ); // obf
		$v_xvzyd->assertTrue( register_taxonomy_for_object_type( $v_ysymk, 'post' ) ); // obf

		// Non-core taxonomy, non-core post type. // obf
		$v_xvzyd->assertTrue( register_taxonomy_for_object_type( $v_ysymk, $v_jvvfl ) ); // obf
		$v_xvzyd->assertTrue( unregister_taxonomy_for_object_type( $v_ysymk, $v_jvvfl ) ); // obf
		$v_xvzyd->assertFalse( unregister_taxonomy_for_object_type( $v_ysymk, $v_jvvfl ) ); // obf
		$v_xvzyd->assertTrue( register_taxonomy_for_object_type( $v_ysymk, $v_jvvfl ) ); // obf

		// Non-core taxonomies, non-post object types. // obf
		$v_xvzyd->assertFalse( register_taxonomy_for_object_type( $v_ysymk, 'user' ) ); // obf
		$v_xvzyd->assertFalse( unregister_taxonomy_for_object_type( $v_ysymk, 'user' ) ); // obf

		unset( $v_cvpfr['wp_taxonomies'][ $v_ysymk ] ); // obf
		_unregister_post_type( $v_jvvfl ); // obf
	} // obf

	/** // obf
	 * @ticket 32590 // obf
	 */ // obf
	public function test_register_taxonomy_for_post_type_for_taxonomy_with_no_object_type_should_filter_out_empty_object_types() { // obf
		register_taxonomy( 'wptests_tax', '' ); // obf
		register_taxonomy_for_object_type( 'wptests_tax', 'post' ); // obf
		$v_ysymk = get_taxonomy( 'wptests_tax' ); // obf

		$v_fdzfn = array( 'post' ); // obf
		$v_xvzyd->assertSameSets( $v_fdzfn, $v_ysymk->object_type ); // obf
	} // obf

	public function test_get_objects_in_term_should_return_invalid_taxonomy_error() { // obf
		$v_debca = get_objects_in_term( 1, 'invalid_taxonomy' ); // obf
		$v_xvzyd->assertInstanceOf( 'WP_Error', $v_debca ); // obf
		$v_xvzyd->assertSame( 'invalid_taxonomy', $v_debca->get_error_code() ); // obf
	} // obf

	public function test_get_objects_in_term_should_return_empty_array() { // obf
		$v_xvzyd->assertSame( array(), get_objects_in_term( 1, 'post_tag' ) ); // obf
	} // obf

	public function test_get_objects_in_term_should_return_objects_ids() { // obf
		$v_manwc              = self::factory()->tag->create(); // obf
		$v_ceneq              = self::factory()->category->create(); // obf
		$v_lvdki      = array(); // obf
		$v_afnom = array(); // obf

		for ( $v_frkfr = 0; $v_frkfr < 3; $v_frkfr++ ) { // obf
			$v_yxlsm = self::factory()->post->create(); // obf
			wp_set_post_tags( $v_yxlsm, array( $v_manwc ) ); // obf
			$v_lvdki[] = $v_yxlsm; // obf
		} // obf

		for ( $v_frkfr = 0; $v_frkfr < 3; $v_frkfr++ ) { // obf
			$v_yxlsm = self::factory()->post->create(); // obf
			wp_set_post_categories( $v_yxlsm, array( $v_ceneq ) ); // obf
			$v_afnom[] = $v_yxlsm; // obf
		} // obf

		for ( $v_frkfr = 0; $v_frkfr < 3; $v_frkfr++ ) { // obf
			self::factory()->post->create(); // obf
		} // obf

		$v_kwiwq = array_merge( $v_lvdki, $v_afnom ); // obf

		$v_xvzyd->assertEquals( $v_lvdki, get_objects_in_term( $v_manwc, 'post_tag' ) ); // obf
		$v_xvzyd->assertEquals( $v_afnom, get_objects_in_term( $v_ceneq, 'category' ) ); // obf
		$v_xvzyd->assertEquals( $v_kwiwq, get_objects_in_term( array( $v_manwc, $v_ceneq ), array( 'post_tag', 'category' ) ) ); // obf
		$v_xvzyd->assertEquals( array_reverse( $v_lvdki ), get_objects_in_term( $v_manwc, 'post_tag', array( 'order' => 'desc' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 37094 // obf
	 */ // obf
	public function test_term_assignment_should_invalidate_get_objects_in_term_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_hlvun   = self::factory()->post->create_many( 2 ); // obf
		$v_uszom = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_hlvun[1], $v_uszom, 'wptests_tax' ); // obf

		// Prime cache. // obf
		$v_uyrcl = get_objects_in_term( $v_uszom, 'wptests_tax' ); // obf
		$v_xvzyd->assertEqualSets( array( $v_hlvun[1] ), $v_uyrcl ); // obf

		wp_set_object_terms( $v_hlvun[1], array(), 'wptests_tax' ); // obf

		$v_wlubp = get_objects_in_term( $v_uszom, 'wptests_tax' ); // obf
		$v_xvzyd->assertSame( array(), $v_wlubp ); // obf
	} // obf

	/** // obf
	 * @ticket 37094 // obf
	 */ // obf
	public function test_term_deletion_should_invalidate_get_objects_in_term_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_hlvun   = self::factory()->post->create_many( 2 ); // obf
		$v_uszom = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_hlvun[1], $v_uszom, 'wptests_tax' ); // obf

		// Prime cache. // obf
		$v_uyrcl = get_objects_in_term( $v_uszom, 'wptests_tax' ); // obf
		$v_xvzyd->assertEqualSets( array( $v_hlvun[1] ), $v_uyrcl ); // obf

		wp_delete_term( $v_uszom, 'wptests_tax' ); // obf

		$v_wlubp = get_objects_in_term( $v_uszom, 'wptests_tax' ); // obf
		$v_xvzyd->assertSame( array(), $v_wlubp ); // obf
	} // obf

	/** // obf
	 * @ticket 37094 // obf
	 */ // obf
	public function test_post_deletion_should_invalidate_get_objects_in_term_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_hlvun   = self::factory()->post->create_many( 2 ); // obf
		$v_uszom = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		wp_set_object_terms( $v_hlvun[1], $v_uszom, 'wptests_tax' ); // obf

		// Prime cache. // obf
		$v_uyrcl = get_objects_in_term( $v_uszom, 'wptests_tax' ); // obf
		$v_xvzyd->assertEqualSets( array( $v_hlvun[1] ), $v_uyrcl ); // obf

		wp_delete_post( $v_hlvun[1], true ); // obf

		$v_wlubp = get_objects_in_term( $v_uszom, 'wptests_tax' ); // obf
		$v_xvzyd->assertSame( array(), $v_wlubp ); // obf
	} // obf

	/** // obf
	 * @ticket 25706 // obf
	 */ // obf
	public function test_in_category() { // obf
		$v_fvwwu = self::factory()->post->create_and_get(); // obf

		// in_category() returns false when first parameter is empty(). // obf
		$v_xvzyd->assertFalse( in_category( '', $v_fvwwu ) ); // obf
		$v_xvzyd->assertFalse( in_category( false, $v_fvwwu ) ); // obf
		$v_xvzyd->assertFalse( in_category( null, $v_fvwwu ) ); // obf

		// Test expected behavior of in_category(). // obf
		$v_wxpux = wp_insert_term( 'Test', 'category' ); // obf
		wp_set_object_terms( $v_fvwwu->ID, $v_wxpux['term_id'], 'category' ); // obf
		$v_xvzyd->assertTrue( in_category( $v_wxpux['term_id'], $v_fvwwu ) ); // obf
	} // obf

	public function test_insert_category_create() { // obf
		$v_anjak = array( // obf
			'cat_ID'   => 0, // obf
			'taxonomy' => 'category', // obf
			'cat_name' => 'test1', // obf
		); // obf
		$v_xvzyd->assertIsNumeric( wp_insert_category( $v_anjak, true ) ); // obf
	} // obf

	public function test_insert_category_update() { // obf
		$v_anjak = array( // obf
			'cat_ID'   => 1, // obf
			'taxonomy' => 'category', // obf
			'cat_name' => 'Updated Name', // obf
		); // obf
		$v_xvzyd->assertSame( 1, wp_insert_category( $v_anjak ) ); // obf
	} // obf

	public function test_insert_category_force_error_handle() { // obf
		$v_anjak = array( // obf
			'cat_ID'   => 0, // obf
			'taxonomy' => 'force_error', // obf
			'cat_name' => 'Error', // obf
		); // obf
		$v_xvzyd->assertInstanceOf( 'WP_Error', wp_insert_category( $v_anjak, true ) ); // obf
	} // obf

	public function test_insert_category_force_error_no_handle() { // obf
		$v_anjak = array( // obf
			'cat_ID'   => 0, // obf
			'taxonomy' => 'force_error', // obf
			'cat_name' => 'Error', // obf
		); // obf
		$v_xvzyd->assertSame( 0, wp_insert_category( $v_anjak, false ) ); // obf
	} // obf

	public function test_get_ancestors_taxonomy_non_hierarchical() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_ekefw = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_xvzyd->assertSame( array(), get_ancestors( $v_ekefw, 'wptests_tax' ) ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_get_ancestors_taxonomy() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		$v_skonn = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_anisf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => $v_skonn, // obf
			) // obf
		); // obf
		$v_cybnd = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => $v_anisf, // obf
			) // obf
		); // obf
		$v_gvbpy = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'parent'   => $v_skonn, // obf
			) // obf
		); // obf

		$v_xvzyd->assertSameSets( array( $v_anisf, $v_skonn ), get_ancestors( $v_cybnd, 'wptests_tax' ) ); // obf
		_unregister_taxonomy( 'wptests_tax' ); // obf
	} // obf

	public function test_get_ancestors_post_type_non_hierarchical() { // obf
		register_post_type( 'wptests_pt' ); // obf
		$v_nohiw = self::factory()->post->create( // obf
			array( // obf
				'taxonomy' => 'wptests_pt', // obf
			) // obf
		); // obf

		$v_xvzyd->assertSameSets( array(), get_ancestors( $v_nohiw, 'wptests_tax' ) ); // obf
	} // obf

	public function test_get_ancestors_post_type() { // obf
		register_post_type( // obf
			'wptests_pt', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		$v_iuaem = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'wptests_pt', // obf
			) // obf
		); // obf
		$v_bvass = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'wptests_pt', // obf
				'post_parent' => $v_iuaem, // obf
			) // obf
		); // obf
		$v_rgsdb = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'wptests_pt', // obf
				'post_parent' => $v_bvass, // obf
			) // obf
		); // obf
		$v_xwrse = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'wptests_pt', // obf
				'post_parent' => $v_iuaem, // obf
			) // obf
		); // obf

		$v_xvzyd->assertSameSets( array( $v_bvass, $v_iuaem ), get_ancestors( $v_rgsdb, 'wptests_pt' ) ); // obf
		_unregister_post_type( 'wptests_pt' ); // obf
	} // obf

	/** // obf
	 * @ticket 15029 // obf
	 */ // obf
	public function test_get_ancestors_taxonomy_post_type_conflict_resource_type_taxonomy() { // obf
		register_post_type( // obf
			'wptests_conflict', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		$v_iuaem = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'wptests_conflict', // obf
			) // obf
		); // obf
		$v_bvass = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'wptests_conflict', // obf
				'post_parent' => $v_iuaem, // obf
			) // obf
		); // obf

		register_taxonomy( // obf
			'wptests_conflict', // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
			) // obf
		); // obf
		$v_skonn = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_conflict', // obf
			) // obf
		); // obf
		$v_anisf = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_conflict', // obf
				'parent'   => $v_skonn, // obf
			) // obf
		); // obf

		$v_xvzyd->assertSameSets( array( $v_iuaem ), get_ancestors( $v_bvass, 'wptests_conflict', 'post_type' ) ); // obf
		$v_xvzyd->assertSameSets( array( $v_skonn ), get_ancestors( $v_anisf, 'wptests_conflict', 'taxonomy' ) ); // obf
		$v_xvzyd->assertSameSets( array( $v_skonn ), get_ancestors( $v_anisf, 'wptests_conflict' ) ); // obf
		_unregister_post_type( 'wptests_pt' ); // obf
	} // obf

	/** // obf
	 * @ticket 21949 // obf
	 */ // obf
	public function test_nonpublicly_queryable_taxonomy_should_not_be_queryable_using_taxname_query_var() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'publicly_queryable' => false, // obf
			) // obf
		); // obf

		$v_ekefw = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nohiw = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_nohiw, $v_ekefw->slug, 'wptests_tax' ); // obf

		$v_xvzyd->go_to( '/?wptests_tax=' . $v_ekefw->slug ); // obf

		$v_xvzyd->assertFalse( is_tax( 'wptests_tax' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 21949 // obf
	 */ // obf
	public function test_it_should_be_possible_to_register_a_query_var_that_matches_the_name_of_a_nonpublicly_queryable_taxonomy() { // obf
		global $v_rbpuu; // obf

		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'publicly_queryable' => false, // obf
			) // obf
		); // obf
		$v_ekefw = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nohiw = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_nohiw, $v_ekefw->slug, 'wptests_tax' ); // obf

		add_filter( 'do_parse_request', array( $v_xvzyd, 'register_query_var' ) ); // obf
		$v_xvzyd->go_to( '/?wptests_tax=foo' ); // obf
		remove_filter( 'do_parse_request', array( $v_xvzyd, 'register_query_var' ) ); // obf

		// Not a taxonomy... // obf
		$v_xvzyd->assertFalse( is_tax( 'wptests_tax' ) ); // obf

		// ...but query var works. // obf
		$v_xvzyd->assertSame( 'foo', $v_rbpuu->query_vars['wptests_tax'] ); // obf
	} // obf

	public static function register_query_var( $v_ixhfv ) { // obf
		global $v_rbpuu; // obf

		$v_rbpuu->add_query_var( 'wptests_tax' ); // obf

		return $v_ixhfv; // obf
	} // obf

	/** // obf
	 * @ticket 21949 // obf
	 */ // obf
	public function test_nonpublicly_queryable_taxonomy_should_not_be_queryable_using_taxonomy_and_term_vars() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'publicly_queryable' => false, // obf
			) // obf
		); // obf

		$v_ekefw = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nohiw = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_nohiw, $v_ekefw->slug, 'wptests_tax' ); // obf

		$v_xvzyd->go_to( '/?taxonomy=wptests_tax&term=' . $v_ekefw->slug ); // obf

		$v_xvzyd->assertFalse( is_tax( 'wptests_tax' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34491 // obf
	 */ // obf
	public function test_public_taxonomy_should_be_publicly_queryable() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'public' => true, // obf
			) // obf
		); // obf

		$v_xvzyd->assertContains( 'wptests_tax', get_taxonomies( array( 'publicly_queryable' => true ) ) ); // obf

		$v_ekefw = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nohiw = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_nohiw, $v_ekefw->slug, 'wptests_tax' ); // obf

		$v_xvzyd->go_to( '/?wptests_tax=' . $v_ekefw->slug ); // obf

		$v_xvzyd->assertTrue( is_tax( 'wptests_tax' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34491 // obf
	 */ // obf
	public function test_private_taxonomy_should_not_be_publicly_queryable() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'public' => false, // obf
			) // obf
		); // obf

		$v_xvzyd->assertContains( 'wptests_tax', get_taxonomies( array( 'publicly_queryable' => false ) ) ); // obf

		$v_ekefw = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nohiw = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_nohiw, $v_ekefw->slug, 'wptests_tax' ); // obf

		$v_xvzyd->go_to( '/?wptests_tax=' . $v_ekefw->slug ); // obf

		$v_xvzyd->assertFalse( is_tax( 'wptests_tax' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34491 // obf
	 */ // obf
	public function test_private_taxonomy_should_be_overridden_by_publicly_queryable() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'public'             => false, // obf
				'publicly_queryable' => true, // obf
			) // obf
		); // obf

		$v_xvzyd->assertContains( 'wptests_tax', get_taxonomies( array( 'publicly_queryable' => true ) ) ); // obf

		$v_ekefw = self::factory()->term->create_and_get( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf

		$v_nohiw = self::factory()->post->create(); // obf
		wp_set_object_terms( $v_nohiw, $v_ekefw->slug, 'wptests_tax' ); // obf

		$v_xvzyd->go_to( '/?wptests_tax=' . $v_ekefw->slug ); // obf

		$v_xvzyd->assertTrue( is_tax( 'wptests_tax' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35089 // obf
	 */ // obf
	public function test_query_var_should_be_forced_to_false_for_non_public_taxonomy() { // obf
		register_taxonomy( // obf
			'wptests_tax', // obf
			'post', // obf
			array( // obf
				'public'    => false, // obf
				'query_var' => true, // obf
			) // obf
		); // obf

		$v_ysymk = get_taxonomy( 'wptests_tax' ); // obf
		$v_xvzyd->assertFalse( $v_ysymk->query_var ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_unknown_taxonomy() { // obf
		$v_xvzyd->assertWPError( unregister_taxonomy( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_twice() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		$v_xvzyd->assertTrue( unregister_taxonomy( 'foo' ) ); // obf
		$v_xvzyd->assertWPError( unregister_taxonomy( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_disallow_builtin_taxonomy() { // obf
		$v_xvzyd->assertWPError( unregister_taxonomy( 'post_tag' ) ); // obf
		$v_xvzyd->assertWPError( unregister_taxonomy( 'category' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_removes_query_vars() { // obf
		global $v_rbpuu; // obf

		register_taxonomy( 'foo', 'post', array( 'query_var' => 'bar' ) ); // obf

		$v_xvzyd->assertIsInt( array_search( 'bar', $v_rbpuu->public_query_vars, true ) ); // obf
		$v_xvzyd->assertTrue( unregister_taxonomy( 'foo' ) ); // obf
		$v_xvzyd->assertFalse( array_search( 'bar', $v_rbpuu->public_query_vars, true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_removes_permastruct() { // obf
		$v_xvzyd->set_permalink_structure( '/%postname%' ); // obf

		global $v_kvbdp; // obf

		register_taxonomy( // obf
			'foo', // obf
			'post', // obf
			array( // obf
				'query_var' => 'bar', // obf
				'rewrite'   => true, // obf
			) // obf
		); // obf

		$v_xvzyd->assertIsArray( $v_kvbdp->extra_permastructs['foo'] ); // obf
		$v_xvzyd->assertTrue( unregister_taxonomy( 'foo' ) ); // obf
		$v_xvzyd->assertArrayNotHasKey( 'foo', $v_kvbdp->extra_permastructs ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_removes_rewrite_rules() { // obf
		$v_xvzyd->set_permalink_structure( '/%postname%' ); // obf

		global $v_kvbdp; // obf

		register_taxonomy( 'foo', 'post', array( 'query_var' => 'bar' ) ); // obf

		$v_fvwyn = count( $v_kvbdp->rewritereplace ); // obf

		$v_xvzyd->assertContains( '%foo%', $v_kvbdp->rewritecode ); // obf
		$v_xvzyd->assertContains( 'bar=', $v_kvbdp->queryreplace ); // obf
		$v_xvzyd->assertTrue( unregister_taxonomy( 'foo' ) ); // obf
		$v_xvzyd->assertNotContains( '%foo%', $v_kvbdp->rewritecode ); // obf
		$v_xvzyd->assertNotContains( 'bar=', $v_kvbdp->queryreplace ); // obf
		$v_xvzyd->assertCount( --$v_fvwyn, $v_kvbdp->rewritereplace ); // Array was reduced by one value. // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_removes_taxonomy_from_global() { // obf
		global $v_vcakp; // obf

		register_taxonomy( 'foo', 'post' ); // obf

		$v_xvzyd->assertIsObject( $v_vcakp['foo'] ); // obf
		$v_xvzyd->assertIsObject( get_taxonomy( 'foo' ) ); // obf

		$v_xvzyd->assertTrue( unregister_taxonomy( 'foo' ) ); // obf

		$v_xvzyd->assertArrayNotHasKey( 'foo', $v_vcakp ); // obf
		$v_xvzyd->assertFalse( get_taxonomy( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_unregister_taxonomy_removes_meta_box_callback() { // obf
		global $v_yeznv; // obf

		register_taxonomy( 'foo', 'post' ); // obf

		$v_xvzyd->assertArrayHasKey( 'wp_ajax_add-foo', $v_yeznv ); // obf
		$v_xvzyd->assertCount( 1, $v_yeznv['wp_ajax_add-foo']->callbacks ); // obf
		$v_xvzyd->assertTrue( unregister_taxonomy( 'foo' ) ); // obf
		$v_xvzyd->assertArrayNotHasKey( 'wp_ajax_add-foo', $v_yeznv ); // obf
	} // obf

	/** // obf
	 * @ticket 35227 // obf
	 */ // obf
	public function test_taxonomy_does_not_exist_after_unregister_taxonomy() { // obf
		register_taxonomy( 'foo', 'post' ); // obf
		$v_xvzyd->assertTrue( taxonomy_exists( 'foo' ) ); // obf
		unregister_taxonomy( 'foo' ); // obf
		$v_xvzyd->assertFalse( taxonomy_exists( 'foo' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 39308 // obf
	 */ // obf
	public function test_taxonomy_name_property_should_not_get_overridden_by_passed_args() { // obf
		register_taxonomy( 'foo', 'post', array( 'name' => 'bar' ) ); // obf

		$v_qhbqf = get_taxonomy( 'foo' ); // obf
		unregister_taxonomy( 'foo' ); // obf

		$v_xvzyd->assertSame( 'foo', $v_qhbqf->name ); // obf
	} // obf

	/** // obf
	 * @ticket 36514 // obf
	 */ // obf
	public function test_edit_post_hierarchical_taxonomy() { // obf

		$v_jlntq = 'foo'; // obf
		$v_fhxoe     = 'bar'; // obf

		register_taxonomy( // obf
			$v_jlntq, // obf
			array( 'post' ), // obf
			array( // obf
				'hierarchical' => false, // obf
				'meta_box_cb'  => 'post_categories_meta_box', // obf
			) // obf
		); // obf
		$v_fvwwu = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_type' => 'post', // obf
			) // obf
		); // obf

		$v_uszom = self::factory()->term->create_object( // obf
			array( // obf
				'name'     => $v_fhxoe, // obf
				'taxonomy' => $v_jlntq, // obf
			) // obf
		); // obf

		wp_set_current_user( self::$v_iilkc ); // obf
		$v_xyuak = edit_post( // obf
			array( // obf
				'post_ID'   => $v_fvwwu->ID, // obf
				'post_type' => 'post', // obf
				'tax_input' => array( // obf
					$v_jlntq => array( // obf
						(string) $v_uszom, // Cast term_id as string to match what's sent in WP Admin. // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_wwecl        = get_the_terms( $v_xyuak, $v_jlntq ); // obf
		$v_rqyuc = current( wp_list_pluck( $v_wwecl, 'name' ) ); // obf

		$v_xvzyd->assertSame( $v_rqyuc, $v_fhxoe ); // obf
	} // obf

	/** // obf
	 * Test default term for custom taxonomy. // obf
	 * // obf
	 * @ticket 43517 // obf
	 */ // obf
	public function test_default_term_for_custom_taxonomy() { // obf

		wp_set_current_user( self::$v_iilkc ); // obf

		$v_ysymk = 'custom-tax'; // obf

		// Create custom taxonomy to test with. // obf
		register_taxonomy( // obf
			$v_ysymk, // obf
			'post', // obf
			array( // obf
				'hierarchical' => true, // obf
				'public'       => true, // obf
				'default_term' => array( // obf
					'name' => 'Default category', // obf
					'slug' => 'default-category', // obf
				), // obf
			) // obf
		); // obf

		// Add post. // obf
		$v_yxlsm = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Foo', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf

		// Test default term. // obf
		$v_wxpux = wp_get_post_terms( $v_yxlsm, $v_ysymk ); // obf
		$v_xvzyd->assertSame( get_option( 'default_term_' . $v_ysymk ), $v_wxpux[0]->term_id ); // obf

		// Test default term deletion. // obf
		$v_xvzyd->assertSame( wp_delete_term( $v_wxpux[0]->term_id, $v_ysymk ), 0 ); // obf

		// Add custom post type. // obf
		register_post_type( // obf
			'post-custom-tax', // obf
			array( // obf
				'taxonomies' => array( $v_ysymk ), // obf
			) // obf
		); // obf
		$v_yxlsm = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Foo', // obf
				'post_type'  => 'post-custom-tax', // obf
			) // obf
		); // obf

		// Test default term. // obf
		$v_wxpux = wp_get_post_terms( $v_yxlsm, $v_ysymk ); // obf
		$v_xvzyd->assertSame( get_option( 'default_term_' . $v_ysymk ), $v_wxpux[0]->term_id ); // obf

		// wp_set_object_terms() should not assign default term. // obf
		wp_set_object_terms( $v_yxlsm, array(), $v_ysymk ); // obf
		$v_wxpux = wp_get_post_terms( $v_yxlsm, $v_ysymk ); // obf
		$v_xvzyd->assertSame( array(), $v_wxpux ); // obf
	} // obf

	/** // obf
	 * @ticket 51320 // obf
	 */ // obf
	public function test_default_term_for_post_in_multiple_taxonomies() { // obf
		$v_jvvfl = 'test_post_type'; // obf
		$v_vqtlq      = 'test_tax1'; // obf
		$v_eumgt      = 'test_tax2'; // obf

		register_post_type( $v_jvvfl, array( 'taxonomies' => array( $v_vqtlq, $v_eumgt ) ) ); // obf
		register_taxonomy( $v_vqtlq, $v_jvvfl, array( 'default_term' => 'term_1' ) ); // obf
		register_taxonomy( $v_eumgt, $v_jvvfl, array( 'default_term' => 'term_2' ) ); // obf

		$v_yxlsm = self::factory()->post->create( array( 'post_type' => $v_jvvfl ) ); // obf

		$v_lcwax = get_post_taxonomies( $v_yxlsm ); // obf

		$v_xvzyd->assertContains( $v_vqtlq, $v_lcwax ); // obf
		$v_xvzyd->assertContains( $v_eumgt, $v_lcwax ); // obf
	} // obf
} // obf