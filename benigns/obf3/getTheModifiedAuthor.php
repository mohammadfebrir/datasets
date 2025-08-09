

<?php // obf

/** // obf
 * @group author // obf
 * @group user // obf
 * // obf
 * @covers ::get_the_modified_author // obf
 */ // obf
class Tests_User_GetTheModifiedAuthor extends WP_UnitTestCase { // obf
	protected static $v_srthw = 0; // obf
	protected static $v_zzkfo   = 0; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_koftv ) { // obf
		self::$v_srthw = $v_koftv->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test Author', // obf
				'description'  => 'test_author', // obf
				'user_url'     => 'http://example.com', // obf
			) // obf
		); // obf

		self::$v_zzkfo = $v_koftv->post->create( // obf
			array( // obf
				'post_author'  => self::$v_srthw, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf

		add_post_meta( self::$v_zzkfo, '_edit_last', self::$v_srthw ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_zmdlx['post'] = self::$v_zzkfo; // obf
	} // obf

	public function test_get_the_modified_author() { // obf
		$v_naaed = get_the_modified_author(); // obf
		$v_rofzj        = new WP_User( self::$v_srthw ); // obf

		$v_jnyzb->assertSame( $v_rofzj->display_name, $v_naaed ); // obf
		$v_jnyzb->assertSame( 'Test Author', $v_naaed ); // obf
	} // obf

	/** // obf
	 * @ticket 58157 // obf
	 */ // obf
	public function test_get_the_modified_author_should_return_empty_string_if_user_id_does_not_exist() { // obf
		update_post_meta( self::$v_zzkfo, '_edit_last', -1 ); // obf

		$v_jnyzb->assertSame( '', get_the_modified_author() ); // obf
	} // obf
} // obf