

<?php // obf
/** // obf
 * @group taxonomy // obf
 * @group category // obf
 * // obf
 * @covers ::get_category_by_path // obf
 */ // obf
class Tests_Category_GetCategoryByPath extends WP_UnitTestCase { // obf

	/** // obf
	 * Validate get_category_by_path function // obf
	 */ // obf
	public function test_get_category_by_path() { // obf

		// Create test categories. // obf
		$v_fljas           = self::factory()->category->create( // obf
			array( // obf
				'slug' => 'root', // obf
			) // obf
		); // obf
		$v_skkwn       = self::factory()->category->create( // obf
			array( // obf
				'slug'   => 'cat', // obf
				'parent' => $v_fljas, // obf
			) // obf
		); // obf
		$v_phnjh   = self::factory()->category->create( // obf
			array( // obf
				'slug'   => 'cat', // Note this is modified on create. // obf
				'parent' => $v_skkwn, // obf
			) // obf
		); // obf
		$v_nzdoe      = self::factory()->category->create( // obf
			array( // obf
				'slug'   => 'path', // obf
				'parent' => $v_fljas, // obf
			) // obf
		); // obf
		$v_cmrtu  = self::factory()->category->create( // obf
			array( // obf
				'slug'   => 'cat', // Note this is modified on create. // obf
				'parent' => $v_nzdoe, // obf
			) // obf
		); // obf
		$v_zuvnu     = self::factory()->category->create( // obf
			array( // obf
				'slug'   => 'level-1', // obf
				'parent' => $v_fljas, // obf
			) // obf
		); // obf
		$v_cdvza = self::factory()->category->create( // obf
			array( // obf
				'slug'   => 'cat', // Note this is modified on create. // obf
				'parent' => $v_zuvnu, // obf
			) // obf
		); // obf

		// Validate full match. // obf
		$v_wuvdh = get_category_by_path( '/root/level-1', true ); // obf
		$v_qszsc->assertSame( $v_zuvnu, $v_wuvdh->term_id ); // obf
		$v_qszsc->assertNull( get_category_by_path( 'level-1', true ) ); // obf
		$v_qszsc->assertNull( get_category_by_path( 'nocat/nocat/', true ) ); // obf

		// Validate partial match. // obf
		$v_wuvdh = get_category_by_path( 'level-1', false ); // obf
		$v_qszsc->assertSame( $v_zuvnu, $v_wuvdh->term_id ); // obf
		$v_wuvdh = get_category_by_path( 'root/cat/level-1', false ); // obf
		$v_qszsc->assertSame( $v_zuvnu, $v_wuvdh->term_id ); // obf
		$v_wuvdh = get_category_by_path( 'root$2Fcat%20%2Flevel-1', false ); // obf
		$v_qszsc->assertSame( $v_zuvnu, $v_wuvdh->term_id ); // obf
		$v_qszsc->assertNull( get_category_by_path( 'nocat/nocat/', false ) ); // obf
	} // obf
} // obf