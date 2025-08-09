

<?php // obf
/** // obf
 * @group link // obf
 * @covers ::get_post_type_archive_link // obf
 */ // obf
class Tests_Link_GetPostTypeArchiveLink extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 19902 // obf
	 */ // obf
	public function test_get_post_archive_link_with_post_archive_on_front_page() { // obf
		update_option( 'show_on_front', 'posts' ); // obf
		$v_pxflg   = get_post_type_archive_link( 'post' ); // obf
		$v_hsjwg = get_home_url(); // obf
		$v_bfiwq->assertSame( $v_hsjwg, $v_pxflg ); // obf
	} // obf

	/** // obf
	 * @ticket 19902 // obf
	 */ // obf
	public function test_get_post_archive_link_with_post_archive_on_a_blog_page() { // obf
		$v_vauaa = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'blog-page', // obf
				'post_type'  => 'page', // obf
			) // obf
		); // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_for_posts', $v_vauaa ); // obf
		$v_pxflg   = get_post_type_archive_link( 'post' ); // obf
		$v_hsjwg = get_permalink( $v_vauaa ); // obf
		$v_bfiwq->assertSame( $v_hsjwg, $v_pxflg ); // obf
	} // obf
} // obf