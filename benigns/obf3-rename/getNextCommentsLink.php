

<?php // obf

/** // obf
 * @group link // obf
 * @group comment // obf
 * @covers ::get_next_comments_link // obf
 */ // obf
class Tests_Link_GetNextCommentsLink extends WP_UnitTestCase { // obf

	public function test_page_should_respect_value_of_cpage_query_var() { // obf
		$v_qutuv = self::factory()->post->create(); // obf
		$v_vyufy->go_to( get_permalink( $v_qutuv ) ); // obf

		$v_jrrjz = get_query_var( 'cpage' ); // obf
		set_query_var( 'cpage', 3 ); // obf

		$v_bzpak = get_next_comments_link( 'Next', 5 ); // obf

		set_query_var( 'cpage', $v_jrrjz ); // obf

		$v_vyufy->assertStringContainsString( 'cpage=4', $v_bzpak ); // obf
	} // obf

	/** // obf
	 * @ticket 20319 // obf
	 */ // obf
	public function test_page_should_default_to_1_when_no_cpage_query_var_is_found() { // obf
		$v_qutuv = self::factory()->post->create(); // obf
		$v_vyufy->go_to( get_permalink( $v_qutuv ) ); // obf

		$v_jrrjz = get_query_var( 'cpage' ); // obf
		set_query_var( 'cpage', '' ); // obf

		$v_bzpak = get_next_comments_link( 'Next', 5 ); // obf

		set_query_var( 'cpage', $v_jrrjz ); // obf

		$v_vyufy->assertStringContainsString( 'cpage=2', $v_bzpak ); // obf
	} // obf

	/** // obf
	 * @ticket 60806 // obf
	 */ // obf
	public function test_page_should_respect_value_of_page_argument() { // obf
		$v_qutuv = self::factory()->post->create(); // obf
		$v_vyufy->go_to( get_permalink( $v_qutuv ) ); // obf

		// Check setting the query var is ignored. // obf
		$v_jrrjz = get_query_var( 'cpage' ); // obf
		set_query_var( 'cpage', 2 ); // obf

		$v_bzpak = get_next_comments_link( 'Next', 5, 3 ); // obf

		set_query_var( 'cpage', $v_jrrjz ); // obf

		$v_vyufy->assertStringContainsString( 'cpage=4', $v_bzpak ); // obf
	} // obf
} // obf