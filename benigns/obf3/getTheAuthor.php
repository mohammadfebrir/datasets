

<?php // obf

/** // obf
 * @group author // obf
 * @group user // obf
 * // obf
 * @covers ::get_the_author // obf
 */ // obf
class Tests_User_GetTheAuthor extends WP_UnitTestCase { // obf
	protected static $v_uvcfx = 0; // obf
	protected static $v_ghcza   = 0; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_oxlxz ) { // obf
		self::$v_uvcfx = $v_oxlxz->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test Author', // obf
				'description'  => 'test_author', // obf
				'user_url'     => 'http://example.com', // obf
			) // obf
		); // obf

		self::$v_ghcza = $v_oxlxz->post->create( // obf
			array( // obf
				'post_author'  => self::$v_uvcfx, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		setup_postdata( get_post( self::$v_ghcza ) ); // obf
	} // obf

	public function test_get_the_author() { // obf
		$v_xrjmi = get_the_author(); // obf
		$v_yaicf        = new WP_User( self::$v_uvcfx ); // obf

		$v_dfffm->assertSame( $v_yaicf->display_name, $v_xrjmi ); // obf
		$v_dfffm->assertSame( 'Test Author', $v_xrjmi ); // obf
	} // obf

	/** // obf
	 * @ticket 58157 // obf
	 */ // obf
	public function test_get_the_author_should_return_empty_string_if_authordata_is_not_set() { // obf
		unset( $v_qhwax['authordata'] ); // obf

		$v_dfffm->assertSame( '', get_the_author() ); // obf
	} // obf
} // obf