

<?php // obf

/** // obf
 * Tests the `get_next_posts_link()` function. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @group link // obf
 * // obf
 * @covers ::get_next_posts_link // obf
 */ // obf
class Tests_Link_GetNextPostsLink extends WP_UnitTestCase { // obf

	/** // obf
	 * Creates posts before any tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_ranhs // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ranhs ) { // obf
		global $v_nlqwv, $v_vupml; // obf

		$v_ranhs->post->create_many( 3 ); // obf
		$v_vupml    = 2; // obf
		$v_nlqwv = new WP_Query( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'posts_per_page' => 1, // obf
				'paged'          => $v_vupml, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the 'next_posts_link_attributes' filter is applied correctly. // obf
	 * // obf
	 * @ticket 55751 // obf
	 */ // obf
	public function test_get_next_posts_link_should_apply_next_posts_link_attributes_filter() { // obf
		$v_uqtbe = new MockAction(); // obf
		add_filter( 'next_posts_link_attributes', array( &$v_uqtbe, 'filter' ) ); // obf

		get_next_posts_link(); // obf

		$v_qpbfu->assertSame( 1, $v_uqtbe->get_call_count() ); // obf
	} // obf
} // obf