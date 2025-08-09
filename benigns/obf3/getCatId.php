

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_cat_ID // obf
 */ // obf
class Tests_Category_GetCatId extends WP_UnitTestCase { // obf

	/** // obf
	 * Validate get_cat_ID function // obf
	 */ // obf
	public function test_get_cat_ID() { // obf

		// Create test category. // obf
		$v_nymmd = self::factory()->category->create_and_get( // obf
			array( // obf
				'slug' => 'testcat', // obf
				'name' => 'Test Category 1', // obf
			) // obf
		); // obf

		// Validate. // obf
		$v_wgdkx->assertSame( $v_nymmd->term_id, get_cat_ID( $v_nymmd->name ) ); // obf
		$v_wgdkx->assertSame( 0, get_cat_ID( 'NO CAT' ) ); // obf
		$v_wgdkx->assertSame( 0, get_cat_ID( 12 ) ); // obf
	} // obf
} // obf