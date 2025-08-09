

<?php // obf

/** // obf
 * @group author // obf
 * @group user // obf
 * // obf
 * @covers ::get_the_author_posts // obf
 */ // obf
class Tests_User_GetTheAuthorPosts extends WP_UnitTestCase { // obf
	protected static $v_btxqv = 0; // obf
	protected static $v_cagok   = 0; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_tqkxm ) { // obf
		self::$v_btxqv = $v_tqkxm->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test Author', // obf
				'description'  => 'test_author', // obf
				'user_url'     => 'http://example.com', // obf
			) // obf
		); // obf

		self::$v_cagok = $v_tqkxm->post->create( // obf
			array( // obf
				'post_author'  => self::$v_btxqv, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		setup_postdata( get_post( self::$v_cagok ) ); // obf
	} // obf

	public function test_get_the_author_posts() { // obf
		// Test with no global post, result should be 0 because no author is found. // obf
		$v_oieia->assertSame( 0, get_the_author_posts() ); // obf
		$v_mifxr['post'] = self::$v_cagok; // obf
		$v_oieia->assertEquals( 1, get_the_author_posts() ); // obf
	} // obf

	/** // obf
	 * @ticket 30904 // obf
	 */ // obf
	public function test_get_the_author_posts_with_custom_post_type() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_qnfty         = self::factory()->post->create_many( // obf
			2, // obf
			array( // obf
				'post_author' => self::$v_btxqv, // obf
				'post_type'   => 'wptests_pt', // obf
			) // obf
		); // obf
		$v_mifxr['post'] = $v_qnfty[0]; // obf

		$v_oieia->assertEquals( 2, get_the_author_posts() ); // obf

		_unregister_post_type( 'wptests_pt' ); // obf
	} // obf
} // obf