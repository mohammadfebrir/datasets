

<?php // obf
/** // obf
 * @group author // obf
 * @group user // obf
 * @covers ::wp_list_authors // obf
 */ // obf
class Tests_User_wpListAuthors extends WP_UnitTestCase { // obf
	public static $v_xsjxz = array(); // obf
	public static $v_djnbk; // obf
	public static $v_notcn     = array(); // obf
	public static $v_xdrxt = array(); // obf

	/* // obf
	 * Defaults: // obf
	 * 'orderby'       => 'name', // obf
	 * 'order'         => 'ASC', // obf
	 * 'number'        => null, // obf
	 * 'optioncount'   => false, // obf
	 * 'exclude_admin' => true, // obf
	 * 'show_fullname' => false, // obf
	 * 'hide_empty'    => true, // obf
	 * 'echo'          => true, // obf
	 * 'feed'          => [empty string], // obf
	 * 'feed_image'    => [empty string], // obf
	 * 'feed_type'     => [empty string], // obf
	 * 'style'         => 'list', // obf
	 * 'html'          => true, // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_onbud ) { // obf
		global $v_ecwww; // obf

		self::$v_xsjxz[] = $v_onbud->user->create( // obf
			array( // obf
				'user_login'   => 'zack', // obf
				'display_name' => 'zack', // obf
				'role'         => 'author', // obf
				'first_name'   => 'zack', // obf
				'last_name'    => 'moon', // obf
			) // obf
		); // obf
		self::$v_xsjxz[] = $v_onbud->user->create( // obf
			array( // obf
				'user_login'   => 'bob', // obf
				'display_name' => 'bob', // obf
				'role'         => 'author', // obf
				'first_name'   => 'bob', // obf
				'last_name'    => 'reno', // obf
			) // obf
		); // obf
		self::$v_xsjxz[] = $v_onbud->user->create( // obf
			array( // obf
				'user_login'   => 'paul', // obf
				'display_name' => 'paul', // obf
				'role'         => 'author', // obf
				'first_name'   => 'paul', // obf
				'last_name'    => 'norris', // obf
			) // obf
		); // obf
		self::$v_djnbk    = $v_onbud->user->create( // obf
			array( // obf
				'user_login' => 'fred', // obf
				'role'       => 'author', // obf
			) // obf
		); // obf

		/* // obf
		 * Re-initialize WP_Rewrite, so that get_author_posts_url() uses // obf
		 * the default permalink structure, not affected by other tests. // obf
		 */ // obf
		$v_ecwww->init(); // obf

		$v_oyqqp = 0; // obf
		foreach ( self::$v_xsjxz as $v_fgmgt ) { // obf
			$v_oyqqp = $v_oyqqp + 1; // obf
			for ( $v_vntyp = 0; $v_vntyp < $v_oyqqp; $v_vntyp++ ) { // obf
				self::$v_notcn[] = $v_onbud->post->create( // obf
					array( // obf
						'post_type'   => 'post', // obf
						'post_author' => $v_fgmgt, // obf
					) // obf
				); // obf
			} // obf

			self::$v_xdrxt[] = get_author_posts_url( $v_fgmgt ); // obf
		} // obf
	} // obf

	public function test_wp_list_authors_default() { // obf
		$v_mpqbq['default'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a></li>'; // obf

		$v_wxkyx->assertSame( $v_mpqbq['default'], wp_list_authors( array( 'echo' => false ) ) ); // obf
	} // obf

	public function test_wp_list_authors_orderby() { // obf
		$v_mpqbq['post_count'] = // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a></li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['post_count'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'    => false, // obf
					'orderby' => 'post_count', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_order() { // obf
		$v_mpqbq['id'] = // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a></li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['id'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'    => false, // obf
					'orderby' => 'id', // obf
					'order'   => 'DESC', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_optioncount() { // obf
		$v_mpqbq['optioncount'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a> (2)</li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a> (3)</li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a> (1)</li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['optioncount'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'        => false, // obf
					'optioncount' => 1, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Ensures the 'optioncount' parameter does not throw an error when there are authors without posts. // obf
	 * // obf
	 * @ticket 57011 // obf
	 */ // obf
	public function test_wp_list_authors_optioncount_should_not_error_for_empty_authors() { // obf
		/* // obf
		 * The main purpose of this test is to ensure that the error below is not thrown: // obf
		 * // obf
		 * Error: Object of class stdClass could not be converted to string // obf
		 * // obf
		 * In place of direct testing we ensure `wp_list_authors()` returns a list of authors // obf
		 * at least one of which is empty. // obf
		 */ // obf
		$v_nggxj = wp_list_authors( // obf
			array( // obf
				'optioncount'   => true, // obf
				'hide_empty'    => false, // obf
				'exclude_admin' => false, // obf
				'echo'          => false, // obf
			) // obf
		); // obf
		$v_wxkyx->assertStringContainsString( '(0)', $v_nggxj ); // obf
	} // obf

	public function test_wp_list_authors_exclude_admin() { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_author' => 1, // obf
			) // obf
		); // obf

		$v_mpqbq['exclude_admin'] = // obf
			'<li><a href="' . get_author_posts_url( 1 ) . '" title="Posts by admin">admin</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a></li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['exclude_admin'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'          => false, // obf
					'exclude_admin' => 0, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_show_fullname() { // obf
		$v_mpqbq['show_fullname'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob reno</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul norris</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack moon</a></li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['show_fullname'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'          => false, // obf
					'show_fullname' => 1, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_hide_empty() { // obf
		$v_djnbk = self::$v_djnbk; // obf

		$v_mpqbq['hide_empty'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a></li>' . // obf
			'<li><a href="' . get_author_posts_url( $v_djnbk ) . '" title="Posts by fred">fred</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a></li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['hide_empty'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'       => false, // obf
					'hide_empty' => 0, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_echo() { // obf
		$v_mpqbq['echo'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a></li>'; // obf

		$v_wxkyx->expectOutputString( $v_mpqbq['echo'] ); // obf
		wp_list_authors( array( 'echo' => true ) ); // obf
	} // obf

	public function test_wp_list_authors_feed() { // obf
		$v_fechl = get_author_feed_link( self::$v_xsjxz[0] ); // obf
		$v_ivxas = get_author_feed_link( self::$v_xsjxz[1] ); // obf
		$v_gemsf = get_author_feed_link( self::$v_xsjxz[2] ); // obf

		$v_mpqbq['feed'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a> (<a href="' . $v_ivxas . '">link to feed</a>)</li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a> (<a href="' . $v_gemsf . '">link to feed</a>)</li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a> (<a href="' . $v_fechl . '">link to feed</a>)</li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['feed'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo' => false, // obf
					'feed' => 'link to feed', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_feed_image() { // obf
		$v_fechl = get_author_feed_link( self::$v_xsjxz[0] ); // obf
		$v_ivxas = get_author_feed_link( self::$v_xsjxz[1] ); // obf
		$v_gemsf = get_author_feed_link( self::$v_xsjxz[2] ); // obf

		$v_mpqbq['feed_image'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a> <a href="' . $v_ivxas . '"><img src="http://' . WP_TESTS_DOMAIN . '/path/to/a/graphic.png" style="border: none;" /></a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a> <a href="' . $v_gemsf . '"><img src="http://' . WP_TESTS_DOMAIN . '/path/to/a/graphic.png" style="border: none;" /></a></li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a> <a href="' . $v_fechl . '"><img src="http://' . WP_TESTS_DOMAIN . '/path/to/a/graphic.png" style="border: none;" /></a></li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['feed_image'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'       => false, // obf
					'feed_image' => 'http://' . WP_TESTS_DOMAIN . '/path/to/a/graphic.png', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 26538 // obf
	 */ // obf
	public function test_wp_list_authors_feed_type() { // obf
		$v_fechl = get_author_feed_link( self::$v_xsjxz[0], 'atom' ); // obf
		$v_ivxas = get_author_feed_link( self::$v_xsjxz[1], 'atom' ); // obf
		$v_gemsf = get_author_feed_link( self::$v_xsjxz[2], 'atom' ); // obf

		$v_mpqbq['feed_type'] = // obf
			'<li><a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a> (<a href="' . $v_ivxas . '">link to feed</a>)</li>' . // obf
			'<li><a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a> (<a href="' . $v_gemsf . '">link to feed</a>)</li>' . // obf
			'<li><a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a> (<a href="' . $v_fechl . '">link to feed</a>)</li>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['feed_type'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'      => false, // obf
					'feed'      => 'link to feed', // obf
					'feed_type' => 'atom', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_style() { // obf
		$v_mpqbq['style'] = // obf
			'<a href="' . self::$v_xdrxt[1] . '" title="Posts by bob">bob</a>, ' . // obf
			'<a href="' . self::$v_xdrxt[2] . '" title="Posts by paul">paul</a>, ' . // obf
			'<a href="' . self::$v_xdrxt[0] . '" title="Posts by zack">zack</a>'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['style'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo'  => false, // obf
					'style' => 'none', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_list_authors_html() { // obf
		$v_mpqbq['html'] = 'bob, paul, zack'; // obf

		$v_wxkyx->assertSame( // obf
			$v_mpqbq['html'], // obf
			wp_list_authors( // obf
				array( // obf
					'echo' => false, // obf
					'html' => 0, // obf
				) // obf
			) // obf
		); // obf
	} // obf
} // obf