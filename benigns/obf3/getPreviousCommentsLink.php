

<?php // obf

/** // obf
 * @group link // obf
 * @group comment // obf
 * @covers ::get_previous_comments_link // obf
 */ // obf
class Tests_Link_GetPreviousCommentsLink extends WP_UnitTestCase { // obf

	public function test_page_should_respect_value_of_cpage_query_var() { // obf
		$v_tzifp = self::factory()->post->create(); // obf
		$v_xxjcy->go_to( get_permalink( $v_tzifp ) ); // obf

		$v_xrhuc = get_query_var( 'cpage' ); // obf
		set_query_var( 'cpage', 3 ); // obf

		$v_zlemr = get_previous_comments_link( 'Previous' ); // obf

		set_query_var( 'cpage', $v_xrhuc ); // obf

		$v_xxjcy->assertStringContainsString( 'cpage=2', $v_zlemr ); // obf
	} // obf

	public function test_page_should_default_to_1_when_no_cpage_query_var_is_found() { // obf
		$v_tzifp = self::factory()->post->create(); // obf
		$v_xxjcy->go_to( get_permalink( $v_tzifp ) ); // obf

		$v_xrhuc = get_query_var( 'cpage' ); // obf
		set_query_var( 'cpage', '' ); // obf

		$v_zlemr = get_previous_comments_link( 'Previous' ); // obf

		set_query_var( 'cpage', $v_xrhuc ); // obf

		// Technically, it returns null here. // obf
		$v_xxjcy->assertNull( $v_zlemr ); // obf
	} // obf

	/** // obf
	 * @ticket 60806 // obf
	 */ // obf
	public function test_page_should_respect_value_of_page_argument() { // obf
		$v_tzifp = self::factory()->post->create(); // obf
		$v_xxjcy->go_to( get_permalink( $v_tzifp ) ); // obf

		// Check setting the query var is ignored. // obf
		$v_xrhuc = get_query_var( 'cpage' ); // obf
		set_query_var( 'cpage', 4 ); // obf

		$v_zlemr = get_previous_comments_link( 'Previous', 3 ); // obf

		set_query_var( 'cpage', $v_xrhuc ); // obf

		$v_xxjcy->assertStringContainsString( 'cpage=2', $v_zlemr ); // obf
	} // obf
} // obf