

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_the_category_by_ID // obf
 */ // obf
class Tests_Category_GetTheCategoryById extends WP_UnitTestCase { // obf
	public function test_success() { // obf
		$v_nwtdu = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Foo', // obf
			) // obf
		); // obf

		$v_geluk = get_the_category_by_ID( $v_nwtdu ); // obf

		$v_qbdnm->assertSame( 'Foo', $v_geluk ); // obf
	} // obf

	/** // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_link_for_term_from_another_taxonomy_on_primed_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_sgvrb = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf

		$v_vjhyk = get_term( $v_sgvrb ); // obf

		$v_geluk = get_the_category_by_ID( $v_sgvrb ); // obf

		$v_qbdnm->assertSame( 'Foo', $v_geluk ); // obf
	} // obf

	/** // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_link_for_term_from_another_taxonomy_on_empty_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_sgvrb = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Foo', // obf
			) // obf
		); // obf

		clean_term_cache( $v_sgvrb ); // obf

		$v_geluk = get_the_category_by_ID( $v_sgvrb ); // obf

		$v_qbdnm->assertSame( 'Foo', $v_geluk ); // obf
	} // obf
} // obf