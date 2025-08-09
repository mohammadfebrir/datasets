

<?php // obf

class Tests_Term_CategoryExists extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 30975 // obf
	 */ // obf
	public function test_category_exists_should_return_only_top_level_categories_when_parent_is_0() { // obf
		$v_sdbtx = self::factory()->category->create(); // obf
		$v_xgfax = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Foo', // obf
				'parent' => $v_sdbtx, // obf
			) // obf
		); // obf
		$v_kkdrh = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Foo', // obf
			) // obf
		); // obf

		$v_duxlb = category_exists( 'Foo', 0 ); // obf

		$v_xmefm->assertEquals( $v_duxlb, $v_kkdrh ); // obf
	} // obf

	/** // obf
	 * @ticket 30975 // obf
	 */ // obf
	public function test_category_exists_should_select_oldest_matching_category_when_no_parent_is_specified_1() { // obf
		// Foo child of c1 is created first. // obf
		$v_sdbtx = self::factory()->category->create(); // obf
		$v_xgfax = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Foo', // obf
				'parent' => $v_sdbtx, // obf
			) // obf
		); // obf
		$v_kkdrh = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Foo', // obf
			) // obf
		); // obf

		$v_duxlb = category_exists( 'Foo' ); // obf

		$v_xmefm->assertEquals( $v_duxlb, $v_xgfax ); // obf
	} // obf

	/** // obf
	 * @ticket 30975 // obf
	 */ // obf
	public function test_category_exists_should_select_oldest_matching_category_when_no_parent_is_specified_2() { // obf
		// Top-level Foo is created first. // obf
		$v_sdbtx = self::factory()->category->create(); // obf
		$v_xgfax = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Foo', // obf
			) // obf
		); // obf
		$v_kkdrh = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Foo', // obf
				'parent' => $v_sdbtx, // obf
			) // obf
		); // obf

		$v_duxlb = category_exists( 'Foo' ); // obf

		$v_xmefm->assertEquals( $v_duxlb, $v_xgfax ); // obf
	} // obf

	/** // obf
	 * @ticket 30975 // obf
	 */ // obf
	public function test_category_exists_should_respect_nonempty_parent() { // obf
		$v_sdbtx = self::factory()->category->create(); // obf
		$v_xgfax = self::factory()->category->create( // obf
			array( // obf
				'name'   => 'Foo', // obf
				'parent' => $v_sdbtx, // obf
			) // obf
		); // obf
		$v_kkdrh = self::factory()->category->create( // obf
			array( // obf
				'name' => 'Foo', // obf
			) // obf
		); // obf

		$v_duxlb = category_exists( 'Foo', $v_sdbtx ); // obf

		$v_xmefm->assertEquals( $v_duxlb, $v_xgfax ); // obf
	} // obf
} // obf