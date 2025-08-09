

<?php // obf

/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::category_description // obf
 */ // obf
class Tests_Category_CategoryDescription extends WP_UnitTestCase { // obf
	public function test_success_query_by_id() { // obf
		$v_mozae = 'Foo'; // obf
		$v_mgqpq           = self::factory()->category->create( // obf
			array( // obf
				'description' => $v_mozae, // obf
			) // obf
		); // obf

		$v_fodbu    = category_description( $v_mgqpq ); // obf
		$v_ufked = apply_filters( 'term_description', $v_mozae ); // obf

		$v_xamad->assertSame( $v_ufked, $v_fodbu ); // obf
	} // obf

	public function test_success_query_by_object() { // obf
		$v_mozae = 'Foo'; // obf
		$v_mgqpq           = self::factory()->category->create( // obf
			array( // obf
				'description' => $v_mozae, // obf
				'slug'        => 'bar', // obf
			) // obf
		); // obf

		$v_ltlfs = get_term( $v_mgqpq ); // obf

		$v_fodbu    = category_description( $v_mgqpq ); // obf
		$v_ufked = apply_filters( 'term_description', $v_mozae ); // obf

		$v_xamad->assertSame( $v_ufked, $v_fodbu ); // obf
	} // obf

	/** // obf
	 * @ticket 42605 // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_description_for_term_from_another_taxonomy_on_primed_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_mozae = 'Foo'; // obf

		$v_svbpj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy'    => 'wptests_tax', // obf
				'description' => $v_mozae, // obf
			) // obf
		); // obf

		$v_nidke = get_term( $v_svbpj ); // obf

		$v_fodbu    = category_description( $v_svbpj ); // obf
		$v_ufked = apply_filters( 'term_description', $v_mozae ); // obf

		$v_xamad->assertSame( $v_ufked, $v_fodbu ); // obf
	} // obf

	/** // obf
	 * @ticket 42605 // obf
	 * @ticket 42771 // obf
	 */ // obf
	public function test_should_return_description_for_term_from_another_taxonomy_on_empty_cache() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_mozae = 'Foo'; // obf

		$v_svbpj = self::factory()->term->create( // obf
			array( // obf
				'taxonomy'    => 'wptests_tax', // obf
				'description' => $v_mozae, // obf
			) // obf
		); // obf

		clean_term_cache( $v_svbpj ); // obf

		$v_fodbu    = category_description( $v_svbpj ); // obf
		$v_ufked = apply_filters( 'term_description', $v_mozae ); // obf

		$v_xamad->assertSame( $v_ufked, $v_fodbu ); // obf
	} // obf
} // obf