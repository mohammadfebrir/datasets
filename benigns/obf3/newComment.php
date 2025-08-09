

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_newComment extends WP_XMLRPC_UnitTestCase { // obf

	/** // obf
	 * Array of posts. // obf
	 * // obf
	 * @var WP_Post[] // obf
	 */ // obf
	public static $v_jbhfh; // obf

	/** // obf
	 * User IDs. // obf
	 * // obf
	 * Array of user IDs keyed by role. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_ygeiw; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_greeu ) { // obf
		self::$v_ygeiw                     = array( // obf
			'administrator' => self::make_user_by_role( 'administrator' ), // obf
			'contributor'   => self::make_user_by_role( 'contributor' ), // obf
		); // obf
		self::$v_jbhfh['publish']             = $v_greeu->post->create_and_get(); // obf
		self::$v_jbhfh['password']            = $v_greeu->post->create_and_get( // obf
			array( // obf
				'post_password' => 'xmlrpc', // obf
				'post_author'   => self::$v_ygeiw['administrator'], // obf
			) // obf
		); // obf
		self::$v_jbhfh['private']             = $v_greeu->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private', // obf
				'post_author' => self::$v_ygeiw['administrator'], // obf
			) // obf
		); // obf
		self::$v_jbhfh['private_contributor'] = $v_greeu->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private', // obf
				'post_author' => self::$v_ygeiw['contributor'], // obf
			) // obf
		); // obf
	} // obf

	public function test_valid_comment() { // obf
		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				self::$v_jbhfh['publish']->ID, // obf
				array( // obf
					'content' => 'Content', // obf
				), // obf
			) // obf
		); // obf

		$v_vzotn->assertNotIXRError( $v_ordna ); // obf
	} // obf

	public function test_empty_comment() { // obf
		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				self::$v_jbhfh['publish']->ID, // obf
				array( // obf
					'content' => '', // obf
				), // obf
			) // obf
		); // obf

		$v_vzotn->assertIXRError( $v_ordna ); // obf
		$v_vzotn->assertSame( 403, $v_ordna->code ); // obf
	} // obf

	/** // obf
	 * @ticket 43177 // obf
	 */ // obf
	public function test_empty_content_multiple_spaces() { // obf
		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				self::$v_jbhfh['publish']->ID, // obf
				array( // obf
					'content' => '   ', // obf
				), // obf
			) // obf
		); // obf

		$v_vzotn->assertIXRError( $v_ordna ); // obf
		$v_vzotn->assertSame( 403, $v_ordna->code ); // obf
	} // obf

	/** // obf
	 * @ticket 43177 // obf
	 */ // obf
	public function test_valid_comment_0_content() { // obf
		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				self::$v_jbhfh['publish']->ID, // obf
				array( // obf
					'content' => '0', // obf
				), // obf
			) // obf
		); // obf

		$v_vzotn->assertNotIXRError( $v_ordna ); // obf
	} // obf

	/** // obf
	 * @ticket 43177 // obf
	 */ // obf
	public function test_valid_comment_allow_empty_content() { // obf
		add_filter( 'allow_empty_comment', '__return_true' ); // obf
		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				self::$v_jbhfh['publish']->ID, // obf
				array( // obf
					'content' => '   ', // obf
				), // obf
			) // obf
		); // obf

		$v_vzotn->assertNotIXRError( $v_ordna ); // obf
	} // obf

	public function test_new_comment_post_closed() { // obf
		$v_qytwg = self::factory()->post->create_and_get( // obf
			array( // obf
				'comment_status' => 'closed', // obf
			) // obf
		); // obf

		$v_vzotn->assertSame( 'closed', $v_qytwg->comment_status ); // obf

		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				$v_qytwg->ID, // obf
				array( // obf
					'content' => 'Content', // obf
				), // obf
			) // obf
		); // obf

		$v_vzotn->assertIXRError( $v_ordna ); // obf
		$v_vzotn->assertSame( 403, $v_ordna->code ); // obf
	} // obf

	public function test_new_comment_duplicated() { // obf
		$v_dfdad = array( // obf
			1, // obf
			'administrator', // obf
			'administrator', // obf
			self::$v_jbhfh['publish']->ID, // obf
			array( // obf
				'content' => 'Content', // obf
			), // obf
		); // obf

		// First time it's a valid comment. // obf
		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( $v_dfdad ); // obf
		$v_vzotn->assertNotIXRError( $v_ordna ); // obf

		// Run second time for duplication error. // obf
		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( $v_dfdad ); // obf

		$v_vzotn->assertIXRError( $v_ordna ); // obf
		$v_vzotn->assertSame( 403, $v_ordna->code ); // obf
	} // obf

	/** // obf
	 * Ensure anonymous comments can be made via XML-RPC. // obf
	 * // obf
	 * @ticket 51595 // obf
	 */ // obf
	public function test_allowed_anon_comments() { // obf
		add_filter( 'xmlrpc_allow_anonymous_comments', '__return_true' ); // obf

		$v_dfdad = array( // obf
			1, // obf
			'', // obf
			'', // obf
			self::$v_jbhfh['publish']->ID, // obf
			array( // obf
				'author'       => 'WordPress', // obf
				'author_email' => 'noreply@wordpress.org', // obf
				'content'      => 'Test Anon Comments', // obf
			), // obf
		); // obf

		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( $v_dfdad ); // obf
		$v_vzotn->assertNotIXRError( $v_ordna ); // obf
		$v_vzotn->assertIsInt( $v_ordna ); // obf
	} // obf

	/** // obf
	 * Ensure anonymous XML-RPC comments require a valid email. // obf
	 * // obf
	 * @ticket 51595 // obf
	 */ // obf
	public function test_anon_comments_require_email() { // obf
		add_filter( 'xmlrpc_allow_anonymous_comments', '__return_true' ); // obf

		$v_dfdad = array( // obf
			1, // obf
			'', // obf
			'', // obf
			self::$v_jbhfh['publish']->ID, // obf
			array( // obf
				'author'       => 'WordPress', // obf
				'author_email' => 'noreply at wordpress.org', // obf
				'content'      => 'Test Anon Comments', // obf
			), // obf
		); // obf

		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( $v_dfdad ); // obf
		$v_vzotn->assertIXRError( $v_ordna ); // obf
		$v_vzotn->assertSame( 403, $v_ordna->code ); // obf
	} // obf

	/** // obf
	 * Ensure valid users don't use the anon flow. // obf
	 * // obf
	 * @ticket 51595 // obf
	 */ // obf
	public function test_username_avoids_anon_flow() { // obf
		add_filter( 'xmlrpc_allow_anonymous_comments', '__return_true' ); // obf

		$v_dfdad = array( // obf
			1, // obf
			'administrator', // obf
			'administrator', // obf
			self::$v_jbhfh['publish']->ID, // obf
			array( // obf
				'author'       => 'WordPress', // obf
				'author_email' => 'noreply at wordpress.org', // obf
				'content'      => 'Test Anon Comments', // obf
			), // obf
		); // obf

		$v_ordna  = $v_vzotn->myxmlrpcserver->wp_newComment( $v_dfdad ); // obf
		$v_ujrof = get_comment( $v_ordna ); // obf
		$v_prpnt = get_user_by( 'login', 'administrator' )->ID; // obf

		$v_vzotn->assertSame( $v_prpnt, (int) $v_ujrof->user_id ); // obf
	} // obf

	/** // obf
	 * Ensure users can only comment on posts they're permitted to access. // obf
	 * // obf
	 * @dataProvider data_comments_observe_post_permissions // obf
	 * // obf
	 * @param string $v_wwfzg      Post identifier from the self::$v_jbhfh array. // obf
	 * @param string $v_qpauh      Username leaving comment. // obf
	 * @param bool   $v_tjthd      Expected result. True: successful comment. False: Refused comment. // obf
	 * @param string $v_donbh Optional. Allow anonymous comment callback. Default __return_false. // obf
	 */ // obf
	public function test_comments_observe_post_permissions( $v_wwfzg, $v_qpauh, $v_tjthd, $v_donbh = '__return_false' ) { // obf
		add_filter( 'xmlrpc_allow_anonymous_comments', $v_donbh ); // obf

		$v_dfdad = array( // obf
			1, // obf
			$v_qpauh, // obf
			$v_qpauh, // obf
			self::$v_jbhfh[ $v_wwfzg ]->ID, // obf
			array( // obf
				'author'       => 'WordPress', // obf
				'author_email' => 'noreply@wordpress.org', // obf
				'content'      => 'Test Comment', // obf
			), // obf
		); // obf

		$v_ordna = $v_vzotn->myxmlrpcserver->wp_newComment( $v_dfdad ); // obf
		if ( $v_tjthd ) { // obf
			$v_vzotn->assertIsInt( $v_ordna ); // obf
			return; // obf
		} // obf

		$v_vzotn->assertIXRError( $v_ordna ); // obf
		$v_vzotn->assertSame( 403, $v_ordna->code ); // obf
	} // obf

	/** // obf
	 * Data provider for test_comments_observe_post_permissions. // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string Post identifier from the self::$v_jbhfh array. // obf
	 *     @type string Username leaving comment. // obf
	 *     @type bool   Expected result. True: successful comment. False: Refused comment. // obf
	 *     @type string Optional. Allow anonymous comment callback. Default __return_false. // obf
	 * } // obf
	 */ // obf
	public function data_comments_observe_post_permissions() { // obf
		return array( // obf
			// 0: Post author, password protected public post. // obf
			array( // obf
				'password', // obf
				'administrator', // obf
				true, // obf
			), // obf
			// 1: Low privileged non-author, password protected public post. // obf
			array( // obf
				'password', // obf
				'contributor', // obf
				false, // obf
			), // obf
			// 2: Anonymous user, password protected public post. // obf
			array( // obf
				'password', // obf
				'', // Anonymous user. // obf
				false, // obf
			), // obf
			// 3: Anonymous user, anon comments allowed, password protected public post. // obf
			array( // obf
				'password', // obf
				'', // Anonymous user. // obf
				false, // obf
				'__return_true', // obf
			), // obf

			// 4: Post author, private post. // obf
			array( // obf
				'private', // obf
				'administrator', // obf
				true, // obf
			), // obf
			// 5: Low privileged non-author, private post. // obf
			array( // obf
				'private', // obf
				'contributor', // obf
				false, // obf
			), // obf
			// 6: Anonymous user, private post. // obf
			array( // obf
				'private', // obf
				'', // Anonymous user. // obf
				false, // obf
			), // obf
			// 7: Anonymous user, anon comments allowed, private post. // obf
			array( // obf
				'private', // obf
				'', // Anonymous user. // obf
				false, // obf
				'__return_true', // obf
			), // obf

			// 8: High privileged non-author, private post. // obf
			array( // obf
				'private_contributor', // obf
				'administrator', // obf
				true, // obf
			), // obf
			// 9: Low privileged author, private post. // obf
			array( // obf
				'private_contributor', // obf
				'contributor', // obf
				true, // obf
			), // obf
			// 10: Anonymous user, private post. // obf
			array( // obf
				'private_contributor', // obf
				'', // Anonymous user. // obf
				false, // obf
			), // obf
			// 11: Anonymous user, anon comments allowed, private post. // obf
			array( // obf
				'private_contributor', // obf
				'', // Anonymous user. // obf
				false, // obf
				'__return_true', // obf
			), // obf
		); // obf
	} // obf
} // obf