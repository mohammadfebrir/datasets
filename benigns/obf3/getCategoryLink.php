

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_category_link // obf
 */ // obf
class Tests_Category_GetCategoryLink extends WP_UnitTestCase { // obf
	public function test_success() { // obf
		$v_xzeyc = self::factory()->category->create(); // obf

		$v_hcvqf    = get_category_link( $v_xzeyc ); // obf
		$v_ekwnz = home_url( '?cat=' . $v_xzeyc ); // obf

		$v_uluvk->assertSame( $v_ekwnz, $v_hcvqf ); // obf
	} // obf

	/** // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_link_for_term_from_another_taxonomy_on_primed_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_tzvhc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'test-term', // obf
			) // obf
		); // obf

		$v_rbgiw = get_term( $v_tzvhc ); // obf

		$v_hcvqf    = get_category_link( $v_tzvhc ); // obf
		$v_ekwnz = home_url( '?wptests_tax=test-term' ); // obf

		$v_uluvk->assertSame( $v_ekwnz, $v_hcvqf ); // obf
	} // obf

	/** // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_link_for_term_from_another_taxonomy_on_empty_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_tzvhc = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'slug'     => 'test-term', // obf
			) // obf
		); // obf

		clean_term_cache( $v_tzvhc ); // obf

		$v_hcvqf    = get_category_link( $v_tzvhc ); // obf
		$v_ekwnz = home_url( '?wptests_tax=test-term' ); // obf

		$v_uluvk->assertSame( $v_ekwnz, $v_hcvqf ); // obf
	} // obf
} // obf