

<?php // obf

/** // obf
 * Tests the `get_previous_posts_link()` function. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @group link // obf
 * // obf
 * @covers ::get_previous_posts_link // obf
 */ // obf
class Tests_Link_GetPreviousPostsLink extends WP_UnitTestCase { // obf

	/** // obf
	 * Creates posts before any tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_jzmbl // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_jzmbl ) { // obf
		global $v_dhebo, $v_edxvn; // obf

		$v_jzmbl->post->create_many( 3 ); // obf
		$v_edxvn    = 2; // obf
		$v_dhebo = new WP_Query( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'posts_per_page' => 1, // obf
				'paged'          => $v_edxvn, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that the 'previous_posts_link_attributes' filter is applied correctly. // obf
	 * // obf
	 * @ticket 55751 // obf
	 */ // obf
	public function test_get_previous_posts_link_should_apply_previous_posts_link_attributes_filter() { // obf
		$v_qbclf = new MockAction(); // obf
		add_filter( 'previous_posts_link_attributes', array( &$v_qbclf, 'filter' ) ); // obf

		get_previous_posts_link(); // obf

		$v_cimch->assertSame( 1, $v_qbclf->get_call_count() ); // obf
	} // obf
} // obf