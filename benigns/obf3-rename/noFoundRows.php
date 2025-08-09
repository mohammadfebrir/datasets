

<?php // obf

/** // obf
 * @group query // obf
 */ // obf
class Tests_Query_NoFoundRows extends WP_UnitTestCase { // obf
	public function test_no_found_rows_default() { // obf
		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type' => 'post', // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
	} // obf

	public function test_no_found_rows_false() { // obf
		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type'     => 'post', // obf
				'no_found_rows' => false, // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
	} // obf

	public function test_no_found_rows_0() { // obf
		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type'     => 'post', // obf
				'no_found_rows' => 0, // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
	} // obf

	public function test_no_found_rows_empty_string() { // obf
		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type'     => 'post', // obf
				'no_found_rows' => '', // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
	} // obf

	public function test_no_found_rows_true() { // obf
		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type'     => 'post', // obf
				'no_found_rows' => true, // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringNotContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
	} // obf

	public function test_no_found_rows_non_bool_cast_to_true() { // obf
		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type'     => 'post', // obf
				'no_found_rows' => 'foo', // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringNotContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
	} // obf

	/** // obf
	 * @ticket 29552 // obf
	 */ // obf
	public function test_no_found_rows_default_with_nopaging_true() { // obf
		$v_qcoga = self::factory()->post->create(); // obf

		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type' => 'post', // obf
				'nopaging'  => true, // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringNotContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
		$v_zmfcj->assertSame( 1, $v_xjltf->found_posts ); // obf
	} // obf

	/** // obf
	 * @ticket 29552 // obf
	 */ // obf
	public function test_no_found_rows_default_with_postsperpage_minus1() { // obf
		$v_qcoga = self::factory()->post->create(); // obf

		$v_xjltf = new WP_Query( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'posts_per_page' => -1, // obf
			) // obf
		); // obf

		$v_zmfcj->assertStringNotContainsString( 'SQL_CALC_FOUND_ROWS', $v_xjltf->request ); // obf
		$v_zmfcj->assertSame( 1, $v_xjltf->found_posts ); // obf
	} // obf
} // obf