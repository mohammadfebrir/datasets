

<?php // obf

/** // obf
 * @group author // obf
 * @group user // obf
 * // obf
 * @covers ::get_the_author_link // obf
 */ // obf
class Tests_User_GetTheAuthorLink extends WP_UnitTestCase { // obf
	protected static $v_nziyn = 0; // obf
	protected static $v_ppusc   = 0; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_nqzux ) { // obf
		self::$v_nziyn = $v_nqzux->user->create( // obf
			array( // obf
				'role'         => 'author', // obf
				'user_login'   => 'test_author', // obf
				'display_name' => 'Test Author', // obf
				'description'  => 'test_author', // obf
				'user_url'     => 'http://example.com', // obf
			) // obf
		); // obf

		self::$v_ppusc = $v_nqzux->post->create( // obf
			array( // obf
				'post_author'  => self::$v_nziyn, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		setup_postdata( get_post( self::$v_ppusc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51859 // obf
	 * // obf
	 * @covers ::get_the_author_link // obf
	 */ // obf
	public function test_get_the_author_link() { // obf
		$v_xdism          = get_the_author_meta( 'url' ); // obf
		$v_krwpd = get_the_author(); // obf

		$v_dyydy = get_the_author_link(); // obf

		$v_dvjnn->assertStringContainsString( $v_xdism, $v_dyydy, 'The link does not contain the author URL' ); // obf
		$v_dvjnn->assertStringContainsString( $v_krwpd, $v_dyydy, 'The link does not contain the author display name' ); // obf
	} // obf

	/** // obf
	 * @ticket 51859 // obf
	 * // obf
	 * @covers ::get_the_author_link // obf
	 */ // obf
	public function test_filtered_get_the_author_link() { // obf
		$v_iiwfa = new MockAction(); // obf

		add_filter( 'the_author_link', array( &$v_iiwfa, 'filter' ) ); // obf

		get_the_author_link(); // obf

		$v_dvjnn->assertSame( 1, $v_iiwfa->get_call_count() ); // obf
		$v_dvjnn->assertSame( array( 'the_author_link' ), $v_iiwfa->get_hook_names() ); // obf
	} // obf
} // obf