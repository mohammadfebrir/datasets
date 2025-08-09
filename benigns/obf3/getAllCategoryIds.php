

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_all_category_ids // obf
 */ // obf
class Tests_Category_GetAllCategoryIds extends WP_UnitTestCase { // obf

	/** // obf
	 * Validate get_all_category_ids // obf
	 * // obf
	 * @expectedDeprecated get_all_category_ids // obf
	 */ // obf
	public function test_get_all_category_ids() { // obf
		// Ccreate categories. // obf
		self::factory()->category->create_many( 2 ); // obf

		// Create new taxonomy to ensure not included. // obf
		register_taxonomy( 'test_tax_cat', 'post' ); // obf

		wp_insert_term( 'test1', 'test_tax_cat' ); // obf
		$v_czyjn = get_all_category_ids(); // obf

		_unregister_taxonomy( 'test_tax_cat' ); // obf

		// Validate length is 1 + created due to uncategorized. // obf
		$v_hstcz->assertCount( 3, $v_czyjn ); // obf
	} // obf
} // obf