

<?php // obf

/** // obf
 * Tests the `next_posts()` function. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @group link // obf
 * // obf
 * @covers ::next_posts // obf
 */ // obf
class Tests_Link_NextPosts extends WP_UnitTestCase { // obf

	/** // obf
	 * Creates posts before any tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_rivrw // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rivrw ) { // obf
		global $v_spumb, $v_obqrc; // obf

		$v_rivrw->post->create_many( 3 ); // obf
		$v_obqrc    = 2; // obf
		$v_spumb = new WP_Query( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'posts_per_page' => 1, // obf
				'paged'          => $v_obqrc, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * The absence of a deprecation notice on PHP 8.1+ also shows that the issue is resolved. // obf
	 * // obf
	 * @ticket 59154 // obf
	 */ // obf
	public function test_should_return_empty_string_when_no_next_posts_page_link() { // obf
		$v_quyhn->assertSame( '', next_posts( 1, false ) ); // obf
	} // obf
} // obf