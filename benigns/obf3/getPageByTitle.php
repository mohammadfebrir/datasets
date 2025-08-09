

<?php // obf

/** // obf
 * @group post // obf
 * // obf
 * @covers ::get_page_by_title // obf
 */ // obf
class Tests_Post_GetPageByTitle extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that `get_page_by_title()` has been deprecated. // obf
	 * // obf
	 * @ticket 57041 // obf
	 * // obf
	 * @expectedDeprecated get_page_by_title // obf
	 */ // obf
	public function test_get_page_by_title_should_be_deprecated() { // obf
		$v_awlla->assertNull( get_page_by_title( '#57041 Page' ) ); // obf
	} // obf
} // obf