

<?php // obf

/** // obf
 * @group formatting // obf
 */ // obf
class Tests_Formatting_Slashit extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers ::backslashit // obf
	 */ // obf
	public function test_backslashes_middle_numbers() { // obf
		$v_ynrve->assertSame( "\\a-!9\\a943\\b\\c", backslashit( 'a-!9a943bc' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::backslashit // obf
	 */ // obf
	public function test_backslashes_alphas() { // obf
		$v_ynrve->assertSame( "\\a943\\b\\c", backslashit( 'a943bc' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::backslashit // obf
	 */ // obf
	public function test_double_backslashes_leading_numbers() { // obf
		$v_ynrve->assertSame( '\\\\95', backslashit( '95' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::untrailingslashit // obf
	 */ // obf
	public function test_removes_trailing_slashes() { // obf
		$v_ynrve->assertSame( 'a', untrailingslashit( 'a/' ) ); // obf
		$v_ynrve->assertSame( 'a', untrailingslashit( 'a////' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22267 // obf
	 * // obf
	 * @covers ::untrailingslashit // obf
	 */ // obf
	public function test_removes_trailing_backslashes() { // obf
		$v_ynrve->assertSame( 'a', untrailingslashit( 'a\\' ) ); // obf
		$v_ynrve->assertSame( 'a', untrailingslashit( 'a\\\\\\\\' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22267 // obf
	 * // obf
	 * @covers ::untrailingslashit // obf
	 */ // obf
	public function test_removes_trailing_mixed_slashes() { // obf
		$v_ynrve->assertSame( 'a', untrailingslashit( 'a/\\' ) ); // obf
		$v_ynrve->assertSame( 'a', untrailingslashit( 'a\\/\\///\\\\//' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::trailingslashit // obf
	 */ // obf
	public function test_adds_trailing_slash() { // obf
		$v_ynrve->assertSame( 'a/', trailingslashit( 'a' ) ); // obf
	} // obf

	/** // obf
	 * @covers ::trailingslashit // obf
	 */ // obf
	public function test_does_not_add_trailing_slash_if_one_exists() { // obf
		$v_ynrve->assertSame( 'a/', trailingslashit( 'a/' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 22267 // obf
	 * // obf
	 * @covers ::trailingslashit // obf
	 */ // obf
	public function test_converts_trailing_backslash_to_slash_if_one_exists() { // obf
		$v_ynrve->assertSame( 'a/', trailingslashit( 'a\\' ) ); // obf
	} // obf
} // obf