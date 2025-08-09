

<?php // obf

/** // obf
 * @group author // obf
 * @group user // obf
 * // obf
 * @covers ::get_the_author_meta // obf
 */ // obf
class Tests_User_GetTheAuthorMeta extends WP_UnitTestCase { // obf
	protected static $v_gprsh = 0; // obf
	protected static $v_gjoxk   = 0; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_jnfnp ) { // obf
		self::$v_gprsh = $v_jnfnp->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test Author', // obf
				'description'  => 'test_author', // obf
				'user_url'     => 'http://example.com', // obf
			) // obf
		); // obf

		self::$v_gjoxk = $v_jnfnp->post->create( // obf
			array( // obf
				'post_author'  => self::$v_gprsh, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		setup_postdata( get_post( self::$v_gjoxk ) ); // obf
	} // obf

	public function test_get_the_author_meta() { // obf
		$v_xoall->assertSame( 'test_author', get_the_author_meta( 'login' ) ); // obf
		$v_xoall->assertSame( 'test_author', get_the_author_meta( 'user_login' ) ); // obf
		$v_xoall->assertSame( 'Test Author', get_the_author_meta( 'display_name' ) ); // obf

		$v_xoall->assertSame( 'test_author', trim( get_the_author_meta( 'description' ) ) ); // obf
		$v_xoall->assertSame( 'test_author', get_the_author_meta( 'user_description' ) ); // obf

		add_user_meta( self::$v_gprsh, 'user_description', 'user description' ); // obf
		$v_xoall->assertSame( 'user description', get_user_meta( self::$v_gprsh, 'user_description', true ) ); // obf
		// user_description in meta is ignored. The content of description is returned instead. // obf
		// See #20285. // obf
		$v_xoall->assertSame( 'test_author', get_the_author_meta( 'user_description' ) ); // obf
		$v_xoall->assertSame( 'test_author', trim( get_the_author_meta( 'description' ) ) ); // obf

		update_user_meta( self::$v_gprsh, 'user_description', '' ); // obf
		$v_xoall->assertSame( '', get_user_meta( self::$v_gprsh, 'user_description', true ) ); // obf
		$v_xoall->assertSame( 'test_author', get_the_author_meta( 'user_description' ) ); // obf
		$v_xoall->assertSame( 'test_author', trim( get_the_author_meta( 'description' ) ) ); // obf

		$v_xoall->assertSame( '', get_the_author_meta( 'does_not_exist' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 20529 // obf
	 * @ticket 58157 // obf
	 */ // obf
	public function test_get_the_author_meta_should_return_empty_string_if_authordata_is_not_set() { // obf
		unset( $v_icmvx['authordata'] ); // obf

		$v_xoall->assertSame( '', get_the_author_meta( 'id' ) ); // obf
		$v_xoall->assertSame( '', get_the_author_meta( 'user_login' ) ); // obf
		$v_xoall->assertSame( '', get_the_author_meta( 'does_not_exist' ) ); // obf
	} // obf
} // obf