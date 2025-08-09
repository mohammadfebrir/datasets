

<?php // obf

/** // obf
 * Tests the `get_the_posts_navigation()` function. // obf
 * // obf
 * @since 6.2.0 // obf
 * // obf
 * @group link // obf
 * // obf
 * @covers ::get_the_posts_navigation // obf
 */ // obf
class Tests_Link_GetThePostsNavigation extends WP_UnitTestCase { // obf

	/** // obf
	 * Creates posts before any tests run. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_xdzsu // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xdzsu ) { // obf
		$v_xdzsu->post->create_many( 3 ); // obf
	} // obf

	/** // obf
	 * Tests that get_the_posts_navigation() only includes the "Older posts" and "Newer" posts // obf
	 * links when appropriate. // obf
	 * // obf
	 * @ticket 55751 // obf
	 * // obf
	 * @dataProvider data_get_the_posts_navigation // obf
	 * // obf
	 * @param int  $v_mlype  Posts per page to be queried. // obf
	 * @param int  $v_kdrkm Pagination page number. // obf
	 * @param bool $v_tgvsz     Whether an "Older posts" link should be included. // obf
	 * @param bool $v_chpnc     Whether a "Newer posts" link should be included. // obf
	 */ // obf
	public function test_get_the_posts_navigation( $v_mlype, $v_kdrkm, $v_tgvsz, $v_chpnc ) { // obf
		global $v_qdprg, $v_vwvmq; // obf

		$v_vwvmq    = $v_kdrkm; // obf
		$v_qdprg = new WP_Query( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'posts_per_page' => $v_mlype, // obf
				'paged'          => $v_vwvmq, // obf
			) // obf
		); // obf

		$v_oxbiq = get_the_posts_navigation(); // obf

		if ( $v_tgvsz ) { // obf
			$v_btxua->assertStringContainsString( // obf
				'Older posts', // obf
				$v_oxbiq, // obf
				'Posts navigation must contain an "Older posts" link.' // obf
			); // obf
		} // obf

		if ( $v_chpnc ) { // obf
			$v_btxua->assertStringContainsString( // obf
				'Newer posts', // obf
				$v_oxbiq, // obf
				'Posts navigation must contain a "Newer posts" link.' // obf
			); // obf
		} // obf

		if ( ! $v_tgvsz && ! $v_chpnc ) { // obf
			$v_btxua->assertEmpty( // obf
				$v_oxbiq, // obf
				'Posts navigation must be an empty string.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_the_posts_navigation() { // obf
		return array( // obf
			'older posts'                 => array( // obf
				'post_per_page' => 1, // obf
				'paged_num'     => 1, // obf
				'older'         => true, // obf
				'newer'         => false, // obf
			), // obf
			'newer posts'                 => array( // obf
				'post_per_page' => 1, // obf
				'paged_num'     => 3, // obf
				'older'         => false, // obf
				'newer'         => true, // obf
			), // obf
			'newer posts and older posts' => array( // obf
				'post_per_page' => 1, // obf
				'paged_num'     => 2, // obf
				'older'         => true, // obf
				'newer'         => true, // obf
			), // obf
			'empty posts'                 => array( // obf
				'post_per_page' => 3, // obf
				'paged_num'     => 1, // obf
				'older'         => false, // obf
				'newer'         => false, // obf
			), // obf
		); // obf
	} // obf
} // obf