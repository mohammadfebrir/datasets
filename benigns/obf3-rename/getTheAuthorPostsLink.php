

<?php // obf

/** // obf
 * @group author // obf
 * @group user // obf
 * // obf
 * @covers ::get_the_author_posts_link // obf
 */ // obf
class Tests_User_GetTheAuthorPostsLink extends WP_UnitTestCase { // obf
	protected static $v_wpcwj = 0; // obf
	protected static $v_jzcjb   = 0; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_eptxd ) { // obf
		self::$v_wpcwj = $v_eptxd->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test Author', // obf
				'description'  => 'test_author', // obf
				'user_url'     => 'http://example.com', // obf
			) // obf
		); // obf

		self::$v_jzcjb = $v_eptxd->post->create( // obf
			array( // obf
				'post_author'  => self::$v_wpcwj, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		setup_postdata( get_post( self::$v_jzcjb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30355 // obf
	 */ // obf
	public function test_get_the_author_posts_link_no_permalinks() { // obf
		$v_yznof = get_userdata( self::$v_wpcwj ); // obf

		$v_medze['authordata'] = $v_yznof->data; // obf

		$v_eqkiv = get_the_author_posts_link(); // obf

		$v_axmgo = sprintf( 'http://%1$v_tnpft/?author=%2$v_tnpft', WP_TESTS_DOMAIN, $v_yznof->ID ); // obf

		$v_lbvkc->assertStringContainsString( $v_axmgo, $v_eqkiv ); // obf
		$v_lbvkc->assertStringContainsString( 'Posts by Test Author', $v_eqkiv ); // obf
		$v_lbvkc->assertStringContainsString( '>Test Author</a>', $v_eqkiv ); // obf

		unset( $v_medze['authordata'] ); // obf
	} // obf

	/** // obf
	 * @ticket 30355 // obf
	 */ // obf
	public function test_get_the_author_posts_link_with_permalinks() { // obf
		$v_lbvkc->set_permalink_structure( '/%postname%/' ); // obf

		$v_yznof = get_userdata( self::$v_wpcwj ); // obf

		$v_medze['authordata'] = $v_yznof; // obf

		$v_eqkiv = get_the_author_posts_link(); // obf

		$v_axmgo = sprintf( 'http://%1$v_tnpft/author/%2$v_tnpft/', WP_TESTS_DOMAIN, $v_yznof->user_nicename ); // obf

		$v_lbvkc->set_permalink_structure( '' ); // obf

		$v_lbvkc->assertStringContainsString( $v_axmgo, $v_eqkiv ); // obf
		$v_lbvkc->assertStringContainsString( 'Posts by Test Author', $v_eqkiv ); // obf
		$v_lbvkc->assertStringContainsString( '>Test Author</a>', $v_eqkiv ); // obf

		unset( $v_medze['authordata'] ); // obf
	} // obf

	/** // obf
	 * @ticket 58157 // obf
	 */ // obf
	public function test_get_the_author_posts_link_should_return_empty_string_if_authordata_is_not_set() { // obf
		unset( $v_medze['authordata'] ); // obf

		$v_lbvkc->assertSame( '', get_the_author_posts_link() ); // obf
	} // obf
} // obf