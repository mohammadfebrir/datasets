

<?php // obf
/** // obf
 * @group user // obf
 * // obf
 * @covers ::wp_list_users // obf
 */ // obf
class Tests_User_wpListUsers extends WP_UnitTestCase { // obf
	private static $v_hquva = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_wynyc ) { // obf
		self::$v_hquva[] = $v_wynyc->user->create( // obf
			array( // obf
				'user_login'   => 'zack', // obf
				'display_name' => 'zack', // obf
				'role'         => 'subscriber', // obf
				'first_name'   => 'zack', // obf
				'last_name'    => 'moon', // obf
				'user_email'   => 'm.zack@example.com', // obf
				'user_url'     => 'http://moonzack.fake', // obf
			) // obf
		); // obf

		self::$v_hquva[] = $v_wynyc->user->create( // obf
			array( // obf
				'user_login'   => 'jane', // obf
				'display_name' => 'jane', // obf
				'role'         => 'contributor', // obf
				'first_name'   => 'jane', // obf
				'last_name'    => 'reno', // obf
				'user_email'   => 'r.jane@example.com', // obf
				'user_url'     => 'http://janereno.fake', // obf
			) // obf
		); // obf

		self::$v_hquva[] = $v_wynyc->user->create( // obf
			array( // obf
				'user_login'   => 'michelle', // obf
				'display_name' => 'michelle', // obf
				'role'         => 'subscriber', // obf
				'first_name'   => 'michelle', // obf
				'last_name'    => 'jones', // obf
				'user_email'   => 'j.michelle@example.com', // obf
				'user_url'     => 'http://lemichellejones.fake', // obf
			) // obf
		); // obf

		self::$v_hquva[] = $v_wynyc->user->create( // obf
			array( // obf
				'user_login'   => 'paul', // obf
				'display_name' => 'paul', // obf
				'role'         => 'subscriber', // obf
				'first_name'   => 'paul', // obf
				'last_name'    => 'norris', // obf
				'user_email'   => 'n.paul@example.com', // obf
				'user_url'     => 'http://awildpaulappeared.fake', // obf
			) // obf
		); // obf

		foreach ( self::$v_hquva as $v_xojny ) { // obf
			$v_wynyc->post->create( // obf
				array( // obf
					'post_type'   => 'post', // obf
					'post_author' => $v_xojny, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Test that wp_list_users() creates the expected list of users. // obf
	 * // obf
	 * @dataProvider data_should_create_a_user_list // obf
	 * // obf
	 * @ticket 15145 // obf
	 * // obf
	 * @param array|string $v_fjfih     The arguments to create a list of users. // obf
	 * @param string       $v_izfkg The expected result. // obf
	 */ // obf
	public function test_should_create_a_user_list( $v_fjfih, $v_izfkg ) { // obf
		$v_vwysl = wp_list_users( $v_fjfih ); // obf

		$v_izfkg = str_replace( // obf
			array( 'AUTHOR_ID_zack', 'AUTHOR_ID_jane', 'AUTHOR_ID_michelle', 'AUTHOR_ID_paul' ), // obf
			array( self::$v_hquva[0], self::$v_hquva[1], self::$v_hquva[2], self::$v_hquva[3] ), // obf
			$v_izfkg // obf
		); // obf

		if ( null === $v_vwysl ) { // obf
			$v_nhpkg->expectOutputString( $v_izfkg ); // obf
		} else { // obf
			$v_nhpkg->assertSame( $v_izfkg, $v_vwysl ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_create_a_user_list() { // obf
		return array( // obf
			'defaults when no args are supplied' => array( // obf
				'args'     => '', // obf
				'expected' => '<li>jane</li><li>michelle</li><li>paul</li><li>zack</li>', // obf
			), // obf
			'the admin account included'         => array( // obf
				'args'     => array( // obf
					'exclude_admin' => false, // obf
				), // obf
				'expected' => '<li>admin</li><li>jane</li><li>michelle</li><li>paul</li><li>zack</li>', // obf
			), // obf
			'the full name of each user'         => array( // obf
				'args'     => array( // obf
					'show_fullname' => true, // obf
				), // obf
				'expected' => '<li>jane reno</li><li>michelle jones</li><li>paul norris</li><li>zack moon</li>', // obf
			), // obf
			'the feed of each user'              => array( // obf
				'args'     => array( // obf
					'feed' => 'User feed', // obf
				), // obf
				'expected' => '<li>jane (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_jane">User feed</a>)</li>' . // obf
						'<li>michelle (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_michelle">User feed</a>)</li>' . // obf
						'<li>paul (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_paul">User feed</a>)</li>' . // obf
						'<li>zack (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_zack">User feed</a>)</li>', // obf
			), // obf
			'the feed of each user and an image' => array( // obf
				'args'     => array( // obf
					'feed'       => 'User feed with image', // obf
					'feed_image' => 'http://example.org/image.jpg', // obf
				), // obf
				'expected' => '<li>jane <a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_jane"><img src="http://example.org/image.jpg" style="border: none;" alt="User feed with image" /></a></li>' . // obf
						'<li>michelle <a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_michelle"><img src="http://example.org/image.jpg" style="border: none;" alt="User feed with image" /></a></li>' . // obf
						'<li>paul <a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_paul"><img src="http://example.org/image.jpg" style="border: none;" alt="User feed with image" /></a></li>' . // obf
						'<li>zack <a href="http://' . WP_TESTS_DOMAIN . '/?feed=rss2&amp;author=AUTHOR_ID_zack"><img src="http://example.org/image.jpg" style="border: none;" alt="User feed with image" /></a></li>', // obf
			), // obf
			'a feed of the specified type'       => array( // obf
				'args'     => array( // obf
					'feed'      => 'User feed as atom', // obf
					'feed_type' => 'atom', // obf
				), // obf
				'expected' => '<li>jane (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=atom&amp;author=AUTHOR_ID_jane">User feed as atom</a>)</li>' . // obf
						'<li>michelle (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=atom&amp;author=AUTHOR_ID_michelle">User feed as atom</a>)</li>' . // obf
						'<li>paul (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=atom&amp;author=AUTHOR_ID_paul">User feed as atom</a>)</li>' . // obf
						'<li>zack (<a href="http://' . WP_TESTS_DOMAIN . '/?feed=atom&amp;author=AUTHOR_ID_zack">User feed as atom</a>)</li>', // obf
			), // obf
			'no output via echo'                 => array( // obf
				'args'     => array( // obf
					'echo' => false, // obf
				), // obf
				'expected' => '<li>jane</li><li>michelle</li><li>paul</li><li>zack</li>', // obf
			), // obf
			'commas separating each user'        => array( // obf
				'args'     => array( // obf
					'style' => '', // obf
				), // obf
				'expected' => 'jane, michelle, paul, zack', // obf
			), // obf
			'plain text format'                  => array( // obf
				'args'     => array( // obf
					'html' => false, // obf
				), // obf
				'expected' => 'jane, michelle, paul, zack', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_list_users() does not create a user list. // obf
	 * // obf
	 * @dataProvider data_should_not_create_a_user_list // obf
	 * // obf
	 * @ticket 15145 // obf
	 * // obf
	 * @param array|string $v_fjfih The arguments to create a list of users. // obf
	 */ // obf
	public function test_should_not_create_a_user_list( $v_fjfih ) { // obf
		$v_vwysl = wp_list_users( $v_fjfih ); // obf

		if ( null === $v_vwysl ) { // obf
			$v_nhpkg->expectOutputString( '', 'wp_list_users() did not output an empty string.' ); // obf
		} else { // obf
			$v_nhpkg->assertSame( $v_vwysl, 'wp_list_users() did not return an empty string.' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_not_create_a_user_list() { // obf
		return array( // obf
			'an empty user query result' => array( // obf
				'args'     => array( // obf
					'include' => array( 9999 ), // obf
				), // obf
				'expected' => '', // obf
			), // obf
		); // obf
	} // obf
} // obf