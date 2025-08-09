

<?php // obf

/** // obf
 * @group term // obf
 * // obf
 * @covers ::is_term_publicly_viewable // obf
 */ // obf
class Tests_Term_IsTermPubliclyViewable extends WP_UnitTestCase { // obf
	/** // obf
	 * Unit tests for is_term_publicly_viewable(). // obf
	 * // obf
	 * @ticket 56215 // obf
	 */ // obf
	public function test_non_existent_term_is_not_publicly_viewable() { // obf
		$v_wxrtz->assertFalse( is_term_publicly_viewable( 123 ) ); // obf
	} // obf

	/** // obf
	 * Unit tests for is_term_publicly_viewable(). // obf
	 * // obf
	 * @dataProvider data_is_term_publicly_viewable // obf
	 * @ticket 56215 // obf
	 * // obf
	 * @param string $v_emwjh The taxonomy name. // obf
	 * @param bool   $v_hucts The expected result of the function call. // obf
	 */ // obf
	public function test_is_term_publicly_viewable( $v_emwjh, $v_hucts ) { // obf
		$v_zhdbd = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => $v_emwjh, // obf
			) // obf
		); // obf

		$v_wxrtz->assertSame( $v_hucts, is_term_publicly_viewable( $v_zhdbd ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_is_term_publicly_viewable(). // obf
	 * // obf
	 * return array[] { // obf
	 *     @type string $v_emwjh The taxonomy. // obf
	 *     @type bool   $v_hucts The expected result of the function call. // obf
	 * } // obf
	 */ // obf
	public function data_is_term_publicly_viewable() { // obf
		return array( // obf
			array( 'category', true ), // obf
			array( 'post_tag', true ), // obf
			array( 'post_format', true ), // obf

			array( 'nav_menu', false ), // obf
			array( 'wp_theme', false ), // obf
			array( 'wp_template_part_area', false ), // obf
		); // obf
	} // obf
} // obf