

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_link // obf
 */ // obf
class Tests_Comment_GetCommentLink extends WP_UnitTestCase { // obf
	protected static $v_rixrr; // obf
	protected static $v_hyrue = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_zqgza ) { // obf
		$v_wxkni     = time(); // obf
		self::$v_rixrr = $v_zqgza->post->create(); // obf

		self::$v_hyrue[] = $v_zqgza->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_rixrr, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_wxkni - 100 ), // obf
			) // obf
		); // obf
		self::$v_hyrue[] = $v_zqgza->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_rixrr, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_wxkni - 200 ), // obf
			) // obf
		); // obf
		self::$v_hyrue[] = $v_zqgza->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_rixrr, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_wxkni - 300 ), // obf
			) // obf
		); // obf
		self::$v_hyrue[] = $v_zqgza->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_rixrr, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_wxkni - 400 ), // obf
			) // obf
		); // obf
		self::$v_hyrue[] = $v_zqgza->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_rixrr, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_wxkni - 500 ), // obf
			) // obf
		); // obf
		self::$v_hyrue[] = $v_zqgza->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_rixrr, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_wxkni - 600 ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 34068 // obf
	 */ // obf
	public function test_default_comments_page_newest_default_page_should_have_cpage() { // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_syzja = get_comment_link( self::$v_hyrue[1] ); // obf

		$v_yonma->assertStringContainsString( 'cpage=3', $v_syzja ); // obf
	} // obf

	/** // obf
	 * @ticket 34068 // obf
	 */ // obf
	public function test_default_comments_page_newest_middle_page_should_have_cpage() { // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_syzja = get_comment_link( self::$v_hyrue[3] ); // obf

		$v_yonma->assertStringContainsString( 'cpage=2', $v_syzja ); // obf
	} // obf

	/** // obf
	 * @ticket 34068 // obf
	 */ // obf
	public function test_default_comments_page_newest_last_page_should_have_cpage() { // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_syzja = get_comment_link( self::$v_hyrue[5] ); // obf

		$v_yonma->assertStringContainsString( 'cpage=1', $v_syzja ); // obf
	} // obf

	/** // obf
	 * @ticket 34068 // obf
	 */ // obf
	public function test_default_comments_page_oldest_default_page_should_not_have_cpage() { // obf
		update_option( 'default_comments_page', 'oldest' ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_syzja = get_comment_link( self::$v_hyrue[5] ); // obf

		$v_yonma->assertStringNotContainsString( 'cpage', $v_syzja ); // obf
	} // obf

	/** // obf
	 * @ticket 34068 // obf
	 */ // obf
	public function test_default_comments_page_oldest_middle_page_should_have_cpage() { // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'default_comments_page', 'oldest' ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_syzja = get_comment_link( self::$v_hyrue[3] ); // obf

		$v_yonma->assertStringContainsString( 'cpage=2', $v_syzja ); // obf
	} // obf

	/** // obf
	 * @ticket 34068 // obf
	 */ // obf
	public function test_default_comments_page_oldest_last_page_should_have_cpage() { // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'default_comments_page', 'oldest' ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_syzja = get_comment_link( self::$v_hyrue[1] ); // obf

		$v_yonma->assertStringContainsString( 'cpage=3', $v_syzja ); // obf
	} // obf

	/** // obf
	 * @ticket 34946 // obf
	 */ // obf
	public function test_should_not_contain_comment_page_1_when_pagination_is_disabled() { // obf
		$v_yonma->set_permalink_structure( '/%postname%/' ); // obf
		update_option( 'page_comments', 0 ); // obf

		$v_syzja = get_comment_link( self::$v_hyrue[1] ); // obf

		$v_yonma->assertStringNotContainsString( 'comment-page-1', $v_syzja ); // obf
	} // obf
} // obf