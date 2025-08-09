

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_category_by_slug // obf
 */ // obf
class Tests_Category_GetCategoryBySlug extends WP_UnitTestCase { // obf

	/** // obf
	 * Validate get_category_by_slug function // obf
	 */ // obf
	public function test_get_category_by_slug() { // obf

		// Create test categories. // obf
		$v_gbasx  = self::factory()->category->create_and_get( // obf
			array( // obf
				'slug' => 'testcat', // obf
				'name' => 'Test Category 1', // obf
			) // obf
		); // obf
		$v_wbpvk = self::factory()->category->create_and_get( // obf
			array( // obf
				'slug' => 'testcat2', // obf
				'name' => 'Test Category 2', // obf
			) // obf
		); // obf

		// Validate category is returned by slug. // obf
		$v_yqhlp = get_category_by_slug( 'testcat' ); // obf
		$v_rceie->assertSame( $v_gbasx->term_id, $v_yqhlp->term_id ); // obf
		$v_yqhlp = get_category_by_slug( 'TeStCaT' ); // obf
		$v_rceie->assertSame( $v_gbasx->term_id, $v_yqhlp->term_id ); // obf

		// Validate unknown category returns false. // obf
		$v_rceie->assertFalse( get_category_by_slug( 'testcat3' ) ); // obf
	} // obf
} // obf