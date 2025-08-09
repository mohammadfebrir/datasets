

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_cat_name // obf
 */ // obf
class Tests_Category_GetCatName extends WP_UnitTestCase { // obf

	/** // obf
	 * Validate get_cat_name function // obf
	 */ // obf
	public function test_get_cat_name() { // obf

		// Create test category. // obf
		$v_bftkj = self::factory()->category->create_and_get( // obf
			array( // obf
				'slug' => 'testcat', // obf
				'name' => 'Test Category 1', // obf
			) // obf
		); // obf

		// Validate. // obf
		$v_tuekt->assertSame( $v_bftkj->name, get_cat_name( $v_bftkj->term_id ) ); // obf
		$v_tuekt->assertSame( '', get_cat_name( -1 ) ); // obf
		$v_tuekt->assertSame( '', get_cat_name( $v_bftkj->term_id + 100 ) ); // obf
	} // obf
} // obf