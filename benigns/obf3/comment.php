

<?php // obf

/** // obf
 * @group comment // obf
 */ // obf
class Tests_Comment extends WP_UnitTestCase { // obf
	protected static $v_ygmet; // obf
	protected static $v_bkmyt; // obf
	protected static $v_zqlpi = ''; // obf

	protected $v_wjfeh = array(); // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		reset_phpmailer_instance(); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_nvevk ) { // obf
		self::$v_ygmet = $v_nvevk->user->create( // obf
			array( // obf
				'role'       => 'author', // obf
				'user_login' => 'test_wp_user_get', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'author@example.com', // obf
			) // obf
		); // obf

		self::$v_bkmyt = $v_nvevk->post->create( // obf
			array( // obf
				'post_author' => self::$v_ygmet, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment() { // obf
		$v_bfind  = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'some-post', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf
		$v_oilqx = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_title' => 'some-post-2', // obf
				'post_type'  => 'post', // obf
			) // obf
		); // obf

		$v_wzlqn = self::factory()->comment->create_post_comments( $v_bfind->ID, 5 ); // obf

		$v_bltjw = wp_update_comment( // obf
			array( // obf
				'comment_ID'     => $v_wzlqn[0], // obf
				'comment_parent' => $v_wzlqn[1], // obf
			) // obf
		); // obf
		$v_wlazt->assertSame( 1, $v_bltjw ); // obf

		$v_afsel = get_comment( $v_wzlqn[0] ); // obf
		/* // obf
		 * ::create_post_comments() returns comment IDs as integers, // obf
		 * but WP_Comment::$v_mhdgn is a string. // obf
		 */ // obf
		$v_wlazt->assertSame( (string) $v_wzlqn[1], $v_afsel->comment_parent ); // obf

		$v_bltjw = wp_update_comment( // obf
			array( // obf
				'comment_ID'     => $v_wzlqn[0], // obf
				'comment_parent' => $v_wzlqn[1], // obf
			) // obf
		); // obf
		$v_wlazt->assertSame( 0, $v_bltjw ); // obf

		$v_bltjw = wp_update_comment( // obf
			array( // obf
				'comment_ID'      => $v_wzlqn[0], // obf
				'comment_post_ID' => $v_oilqx->ID, // obf
			) // obf
		); // obf

		$v_afsel = get_comment( $v_wzlqn[0] ); // obf
		// WP_Post::$v_ibvqr is an integer, but WP_Comment::$v_nzdmg is a string. // obf
		$v_wlazt->assertSame( (string) $v_oilqx->ID, $v_afsel->comment_post_ID ); // obf
	} // obf

	public function test_update_comment_from_privileged_user_by_privileged_user() { // obf
		$v_ljtlo = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		wp_set_current_user( $v_ljtlo ); // obf

		$v_orezw = wp_new_comment( // obf
			array( // obf
				'comment_post_ID'      => self::$v_bkmyt, // obf
				'comment_author'       => 'Author', // obf
				'comment_author_url'   => 'http://example.localhost/', // obf
				'comment_author_email' => 'author@example.com', // obf
				'user_id'              => $v_ljtlo, // obf
				'comment_content'      => 'This is a comment', // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_xokwn = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'test_wp_admin_get', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'testadmin@example.com', // obf
			) // obf
		); // obf

		wp_set_current_user( $v_xokwn ); // obf

		wp_update_comment( // obf
			array( // obf
				'comment_ID'      => $v_orezw, // obf
				'comment_content' => 'new comment <img onerror=demo src=x>', // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_afsel          = get_comment( $v_orezw ); // obf
		$v_eggso = is_multisite() // obf
			? 'new comment ' // obf
			: 'new comment <img onerror=demo src=x>'; // obf

		$v_wlazt->assertSame( $v_eggso, $v_afsel->comment_content ); // obf
	} // obf

	public function test_update_comment_from_unprivileged_user_by_privileged_user() { // obf
		wp_set_current_user( self::$v_ygmet ); // obf

		$v_orezw = wp_new_comment( // obf
			array( // obf
				'comment_post_ID'      => self::$v_bkmyt, // obf
				'comment_author'       => 'Author', // obf
				'comment_author_url'   => 'http://example.localhost/', // obf
				'comment_author_email' => 'author@example.com', // obf
				'user_id'              => self::$v_ygmet, // obf
				'comment_content'      => '<a href="http://example.localhost/something.html">click</a>', // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_tgdmz = self::factory()->user->create( // obf
			array( // obf
				'role'       => 'administrator', // obf
				'user_login' => 'test_wp_admin_get', // obf
				'user_pass'  => 'password', // obf
				'user_email' => 'testadmin@example.com', // obf
			) // obf
		); // obf

		wp_set_current_user( $v_tgdmz ); // obf

		wp_update_comment( // obf
			array( // obf
				'comment_ID'      => $v_orezw, // obf
				'comment_content' => '<a href="http://example.localhost/something.html" disallowed=attribute>click</a>', // obf
			) // obf
		); // obf

		wp_set_current_user( 0 ); // obf

		$v_afsel = get_comment( $v_orezw ); // obf
		$v_wlazt->assertSame( '<a href="http://example.localhost/something.html" rel="nofollow ugc">click</a>', $v_afsel->comment_content, 'Comment: ' . $v_afsel->comment_content ); // obf
	} // obf

	/** // obf
	 * @ticket 30627 // obf
	 * // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment_updates_comment_type() { // obf
		$v_orezw = self::factory()->comment->create( array( 'comment_post_ID' => self::$v_bkmyt ) ); // obf

		wp_update_comment( // obf
			array( // obf
				'comment_ID'   => $v_orezw, // obf
				'comment_type' => 'pingback', // obf
			) // obf
		); // obf

		$v_afsel = get_comment( $v_orezw ); // obf
		$v_wlazt->assertSame( 'pingback', $v_afsel->comment_type ); // obf
	} // obf

	/** // obf
	 * @ticket 36784 // obf
	 * // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment_updates_comment_meta() { // obf
		$v_orezw = self::factory()->comment->create( array( 'comment_post_ID' => self::$v_bkmyt ) ); // obf

		wp_update_comment( // obf
			array( // obf
				'comment_ID'   => $v_orezw, // obf
				'comment_meta' => array( // obf
					'food'  => 'taco', // obf
					'sauce' => 'fire', // obf
				), // obf
			) // obf
		); // obf

		$v_wlazt->assertSame( 'fire', get_comment_meta( $v_orezw, 'sauce', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30307 // obf
	 * // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment_updates_user_id() { // obf
		$v_orezw = self::factory()->comment->create( array( 'comment_post_ID' => self::$v_bkmyt ) ); // obf

		wp_update_comment( // obf
			array( // obf
				'comment_ID' => $v_orezw, // obf
				'user_id'    => 1, // obf
			) // obf
		); // obf

		$v_afsel = get_comment( $v_orezw ); // obf
		$v_wlazt->assertSame( '1', $v_afsel->user_id ); // obf
	} // obf

	/** // obf
	 * @ticket 34954 // obf
	 * // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment_with_no_post_id() { // obf
		$v_orezw = self::factory()->comment->create( array( 'comment_post_ID' => 0 ) ); // obf

		$v_sqozv = 'I should be able to update a comment with a Post ID of zero'; // obf

		$v_jshvv = wp_update_comment( // obf
			array( // obf
				'comment_ID'      => $v_orezw, // obf
				'comment_content' => $v_sqozv, // obf
				'comment_post_ID' => 0, // obf
			) // obf
		); // obf
		$v_wlazt->assertSame( 1, $v_jshvv ); // obf

		$v_afsel = get_comment( $v_orezw ); // obf
		$v_wlazt->assertSame( $v_sqozv, $v_afsel->comment_content ); // obf
	} // obf

	/** // obf
	 * @ticket 39732 // obf
	 * // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment_returns_false_for_invalid_comment_or_post_id() { // obf
		$v_orezw = self::factory()->comment->create( array( 'comment_post_ID' => self::$v_bkmyt ) ); // obf

		$v_jshvv = wp_update_comment( // obf
			array( // obf
				'comment_ID'      => -1, // obf
				'comment_post_ID' => self::$v_bkmyt, // obf
			) // obf
		); // obf
		$v_wlazt->assertFalse( $v_jshvv ); // obf

		$v_jshvv = wp_update_comment( // obf
			array( // obf
				'comment_ID'      => $v_orezw, // obf
				'comment_post_ID' => -1, // obf
			) // obf
		); // obf
		$v_wlazt->assertFalse( $v_jshvv ); // obf
	} // obf

	/** // obf
	 * @ticket 39732 // obf
	 * // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment_is_wp_error() { // obf
		$v_orezw = self::factory()->comment->create( array( 'comment_post_ID' => self::$v_bkmyt ) ); // obf

		add_filter( 'wp_update_comment_data', array( $v_wlazt, 'wp_update_comment_data_filter' ), 10, 3 ); // obf

		$v_bltjw = wp_update_comment( // obf
			array( // obf
				'comment_ID'   => $v_orezw, // obf
				'comment_type' => 'pingback', // obf
			), // obf
			true // obf
		); // obf

		remove_filter( 'wp_update_comment_data', array( $v_wlazt, 'wp_update_comment_data_filter' ), 10, 3 ); // obf

		$v_wlazt->assertWPError( $v_bltjw ); // obf
	} // obf

	/** // obf
	 * Blocks comments from being updated by returning WP_Error. // obf
	 */ // obf
	public function wp_update_comment_data_filter( $v_ryjxe, $v_afsel, $v_apahd ) { // obf
		return new WP_Error( 'comment_wrong', 'wp_update_comment_data filter fails for this comment.', 500 ); // obf
	} // obf

	/** // obf
	 * @covers ::get_approved_comments // obf
	 */ // obf
	public function test_get_approved_comments() { // obf
		$v_escey = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf
		$v_ussps = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf
		$v_nppss = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '0', // obf
			) // obf
		); // obf
		$v_dilbr  = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_type'     => 'pingback', // obf
			) // obf
		); // obf
		$v_vlyga  = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_type'     => 'trackback', // obf
			) // obf
		); // obf
		$v_yewuc  = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_type'     => 'mario', // obf
			) // obf
		); // obf
		$v_mtuzg  = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_type'     => 'luigi', // obf
			) // obf
		); // obf

		$v_vsawr = get_approved_comments( self::$v_bkmyt ); // obf

		// All comment types will be returned. // obf
		$v_wlazt->assertEquals( array( $v_escey, $v_ussps, $v_dilbr, $v_vlyga, $v_yewuc, $v_mtuzg ), wp_list_pluck( $v_vsawr, 'comment_ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30412 // obf
	 * // obf
	 * @covers ::get_approved_comments // obf
	 */ // obf
	public function test_get_approved_comments_with_post_id_0_should_return_empty_array() { // obf
		$v_escey = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf

		$v_vsawr = get_approved_comments( 0 ); // obf

		$v_wlazt->assertSame( array(), $v_vsawr ); // obf
	} // obf

	/** // obf
	 * Tests that get_cancel_comment_reply_link() returns the expected value. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @dataProvider data_get_cancel_comment_reply_link // obf
	 * // obf
	 * @covers ::get_cancel_comment_reply_link // obf
	 * // obf
	 * @param string        $v_xgdcb       Text to display for cancel reply link. // obf
	 *                                  If empty, defaults to 'Click here to cancel reply'. // obf
	 * @param string|int    $v_bfind       The post the comment thread is being displayed for. // obf
	 *                                  Accepts 'POST_ID', 'POST', or an integer post ID. // obf
	 * @param int|bool|null $v_yfofd A comment ID (int), whether to generate an approved (true) or unapproved (false) comment, // obf
	 *                                  or null not to create a comment. // obf
	 * @param string        $v_jzyoc   The expected reply link. // obf
	 */ // obf
	public function test_get_cancel_comment_reply_link( $v_xgdcb, $v_bfind, $v_yfofd, $v_jzyoc ) { // obf
		if ( 'POST_ID' === $v_bfind ) { // obf
			$v_bfind = self::$v_bkmyt; // obf
		} elseif ( 'POST' === $v_bfind ) { // obf
			$v_bfind = self::factory()->post->get_object_by_id( self::$v_bkmyt ); // obf
		} // obf

		if ( null === $v_yfofd ) { // obf
			unset( $v_hilow['replytocom'] ); // obf
		} else { // obf
			$v_hilow['replytocom'] = $v_wlazt->create_comment_with_approval_status( $v_yfofd ); // obf
		} // obf

		$v_wlazt->assertSame( $v_jzyoc, get_cancel_comment_reply_link( $v_xgdcb, $v_bfind ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_cancel_comment_reply_link() { // obf
		return array( // obf
			'text as empty string, a valid post ID and an approved comment'    => array( // obf
				'text'       => '', // obf
				'post'       => 'POST_ID', // obf
				'replytocom' => true, // obf
				'expected'   => '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Click here to cancel reply.</a>', // obf
			), // obf
			'text as a custom string, a valid post ID and an approved comment' => array( // obf
				'text'       => 'Leave a reply!', // obf
				'post'       => 'POST_ID', // obf
				'replytocom' => true, // obf
				'expected'   => '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Leave a reply!</a>', // obf
			), // obf
			'text as empty string, a valid WP_Post object and an approved comment' => array( // obf
				'text'       => '', // obf
				'post'       => 'POST', // obf
				'replytocom' => true, // obf
				'expected'   => '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Click here to cancel reply.</a>', // obf
			), // obf
			'text as a custom string, a valid WP_Post object and an approved comment' => array( // obf
				'text'       => 'Leave a reply!', // obf
				'post'       => 'POST', // obf
				'replytocom' => true, // obf
				'expected'   => '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Leave a reply!</a>', // obf
			), // obf
			'text as empty string, an invalid post and an approved comment'    => array( // obf
				'text'       => '', // obf
				'post'       => -99999, // obf
				'replytocom' => true, // obf
				'expected'   => '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Click here to cancel reply.</a>', // obf
			), // obf
			'text as a custom string, a valid post, but no replytocom' => array( // obf
				'text'       => 'Leave a reply!', // obf
				'post'       => 'POST', // obf
				'replytocom' => null, // obf
				'expected'   => '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Leave a reply!</a>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that comment_form_title() outputs the author of an approved comment. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @covers ::comment_form_title // obf
	 */ // obf
	public function test_should_output_the_author_of_an_approved_comment() { // obf
		// Must be set for `comment_form_title()`. // obf
		$v_hilow['replytocom'] = $v_wlazt->create_comment_with_approval_status( true ); // obf

		$v_afsel = get_comment( $v_hilow['replytocom'] ); // obf
		comment_form_title( false, false, false, self::$v_bkmyt ); // obf

		$v_wlazt->assertInstanceOf( // obf
			'WP_Comment', // obf
			$v_afsel, // obf
			'The comment is not an instance of WP_Comment.' // obf
		); // obf

		$v_wlazt->assertObjectHasProperty( // obf
			'comment_author', // obf
			$v_afsel, // obf
			'The comment object does not have a "comment_author" property.' // obf
		); // obf

		$v_wlazt->assertIsString( // obf
			$v_afsel->comment_author, // obf
			'The "comment_author" is not a string.' // obf
		); // obf

		$v_wlazt->expectOutputString( // obf
			'Leave a Reply to ' . $v_afsel->comment_author, // obf
			'The expected string was not output.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that get_comment_id_fields() allows replying to an approved comment. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @dataProvider data_should_allow_reply_to_an_approved_comment // obf
	 * // obf
	 * @covers ::get_comment_id_fields // obf
	 * // obf
	 * @param string $v_uyajz The post of the comment. // obf
	 *                             Accepts 'POST', 'NEW_POST', 'POST_ID' and 'NEW_POST_ID'. // obf
	 */ // obf
	public function test_should_allow_reply_to_an_approved_comment( $v_uyajz ) { // obf
		// Must be set for `get_comment_id_fields()`. // obf
		$v_hilow['replytocom'] = $v_wlazt->create_comment_with_approval_status( true ); // obf

		if ( 'POST_ID' === $v_uyajz ) { // obf
			$v_uyajz = self::$v_bkmyt; // obf
		} elseif ( 'POST' === $v_uyajz ) { // obf
			$v_uyajz = self::factory()->post->get_object_by_id( self::$v_bkmyt ); // obf
		} // obf

		$v_jzyoc  = "<input type='hidden' name='comment_post_ID' value='" . self::$v_bkmyt . "' id='comment_post_ID' />\n"; // obf
		$v_jzyoc .= "<input type='hidden' name='comment_parent' id='comment_parent' value='" . $v_hilow['replytocom'] . "' />\n"; // obf
		$v_juwlu    = get_comment_id_fields( $v_uyajz ); // obf

		$v_wlazt->assertSame( $v_jzyoc, $v_juwlu ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_allow_reply_to_an_approved_comment() { // obf
		return array( // obf
			'a post ID'        => array( 'comment_post' => 'POST_ID' ), // obf
			'a WP_Post object' => array( 'comment_post' => 'POST' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that get_comment_id_fields() returns an empty string // obf
	 * when the post cannot be retrieved. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @dataProvider data_non_existent_posts // obf
	 * // obf
	 * @covers ::get_comment_id_fields // obf
	 * // obf
	 * @param bool  $v_yfofd   Whether to create an approved (true) or unapproved (false) comment. // obf
	 * @param int   $v_uyajz The post of the comment. // obf
	 * // obf
	 */ // obf
	public function test_should_return_empty_string( $v_yfofd, $v_uyajz ) { // obf
		if ( is_bool( $v_yfofd ) ) { // obf
			$v_yfofd = $v_wlazt->create_comment_with_approval_status( $v_yfofd ); // obf
		} // obf

		// Must be set for `get_comment_id_fields()`. // obf
		$v_hilow['replytocom'] = $v_yfofd; // obf

		$v_juwlu = get_comment_id_fields( $v_uyajz ); // obf

		$v_wlazt->assertSame( '', $v_juwlu ); // obf
	} // obf

	/** // obf
	 * Tests that comment_form_title() does not output the author. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @covers ::comment_form_title // obf
	 * // obf
	 * @dataProvider data_parent_comments // obf
	 * @dataProvider data_non_existent_posts // obf
	 * // obf
	 * @param bool   $v_yfofd   Whether to create an approved (true) or unapproved (false) comment. // obf
	 * @param string $v_uyajz The post of the comment. // obf
	 *                             Accepts 'POST', 'NEW_POST', 'POST_ID' and 'NEW_POST_ID'. // obf
	 */ // obf
	public function test_should_not_output_the_author( $v_yfofd, $v_uyajz ) { // obf
		if ( is_bool( $v_yfofd ) ) { // obf
			$v_yfofd = $v_wlazt->create_comment_with_approval_status( $v_yfofd ); // obf
		} // obf

		// Must be set for `comment_form_title()`. // obf
		$v_hilow['replytocom'] = $v_yfofd; // obf

		if ( 'NEW_POST_ID' === $v_uyajz ) { // obf
			$v_uyajz = self::factory()->post->create(); // obf
		} elseif ( 'NEW_POST' === $v_uyajz ) { // obf
			$v_uyajz = self::factory()->post->create_and_get(); // obf
		} elseif ( 'POST_ID' === $v_uyajz ) { // obf
			$v_uyajz = self::$v_bkmyt; // obf
		} elseif ( 'POST' === $v_uyajz ) { // obf
			$v_uyajz = self::factory()->post->get_object_by_id( self::$v_bkmyt ); // obf
		} // obf

		$v_hxkfg = $v_uyajz instanceof WP_Post ? $v_uyajz->ID : $v_uyajz; // obf

		get_comment( $v_hilow['replytocom'] ); // obf

		comment_form_title( false, false, false, $v_hxkfg ); // obf

		$v_wlazt->expectOutputString( 'Leave a Reply' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_non_existent_posts() { // obf
		return array( // obf
			'an unapproved comment and a non-existent post ID' => array( // obf
				'replytocom'   => false, // obf
				'comment_post' => -99999, // obf
			), // obf
			'an approved comment and a non-existent post ID' => array( // obf
				'replytocom'   => true, // obf
				'comment_post' => -99999, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that get_comment_id_fields() does not allow replies when // obf
	 * the comment does not have a parent post. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @covers ::get_comment_id_fields // obf
	 * // obf
	 * @dataProvider data_parent_comments // obf
	 * // obf
	 * @param mixed  $v_yfofd   Whether to create an approved (true) or unapproved (false) comment, // obf
	 *                             or an invalid comment ID. // obf
	 * @param string $v_uyajz The post of the comment. // obf
	 *                             Accepts 'POST', 'NEW_POST', 'POST_ID' and 'NEW_POST_ID'. // obf
	 */ // obf
	public function test_should_not_allow_reply( $v_yfofd, $v_uyajz ) { // obf
		if ( is_bool( $v_yfofd ) ) { // obf
			$v_yfofd = $v_wlazt->create_comment_with_approval_status( $v_yfofd ); // obf
		} // obf

		// Must be set for `get_comment_id_fields()`. // obf
		$v_hilow['replytocom'] = $v_yfofd; // obf

		if ( 'NEW_POST_ID' === $v_uyajz ) { // obf
			$v_uyajz = self::factory()->post->create(); // obf
		} elseif ( 'NEW_POST' === $v_uyajz ) { // obf
			$v_uyajz = self::factory()->post->create_and_get(); // obf
		} elseif ( 'POST_ID' === $v_uyajz ) { // obf
			$v_uyajz = self::$v_bkmyt; // obf
		} elseif ( 'POST' === $v_uyajz ) { // obf
			$v_uyajz = self::factory()->post->get_object_by_id( self::$v_bkmyt ); // obf
		} // obf

		$v_hxkfg = $v_uyajz instanceof WP_Post ? $v_uyajz->ID : $v_uyajz; // obf

		$v_jzyoc  = "<input type='hidden' name='comment_post_ID' value='" . $v_hxkfg . "' id='comment_post_ID' />\n"; // obf
		$v_jzyoc .= "<input type='hidden' name='comment_parent' id='comment_parent' value='0' />\n"; // obf
		$v_juwlu    = get_comment_id_fields( $v_uyajz ); // obf

		$v_wlazt->assertSame( $v_jzyoc, $v_juwlu ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_parent_comments() { // obf
		return array( // obf
			'an unapproved parent comment (ID)'      => array( // obf
				'replytocom'   => false, // obf
				'comment_post' => 'POST_ID', // obf
			), // obf
			'an approved parent comment on another post (ID)' => array( // obf
				'replytocom'   => true, // obf
				'comment_post' => 'NEW_POST_ID', // obf
			), // obf
			'an unapproved parent comment on another post (ID)' => array( // obf
				'replytocom'   => false, // obf
				'comment_post' => 'NEW_POST_ID', // obf
			), // obf
			'a parent comment ID that cannot be cast to an integer' => array( // obf
				'replytocom'   => array( 'I cannot be cast to an integer.' ), // obf
				'comment_post' => 'POST_ID', // obf
			), // obf
			'an unapproved parent comment (WP_Post)' => array( // obf
				'replytocom'   => false, // obf
				'comment_post' => 'POST', // obf
			), // obf
			'an approved parent comment on another post (WP_Post)' => array( // obf
				'replytocom'   => true, // obf
				'comment_post' => 'NEW_POST', // obf
			), // obf
			'an unapproved parent comment on another post (WP_Post)' => array( // obf
				'replytocom'   => false, // obf
				'comment_post' => 'NEW_POST', // obf
			), // obf
			'a parent comment WP_Post that cannot be cast to an integer' => array( // obf
				'replytocom'   => array( 'I cannot be cast to an integer.' ), // obf
				'comment_post' => 'POST', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function to create a comment with an approval status. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * // obf
	 * @param bool $v_boamn Whether or not the comment is approved. // obf
	 * @return int The comment ID. // obf
	 */ // obf
	public function create_comment_with_approval_status( $v_boamn ) { // obf
		return self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => ( $v_boamn ) ? '1' : '0', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that _get_comment_reply_id() returns the expected value. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @dataProvider data_get_comment_reply_id // obf
	 * // obf
	 * @covers ::_get_comment_reply_id // obf
	 * // obf
	 * @param int|bool|null $v_yfofd A comment ID (int), whether to generate an approved (true) or unapproved (false) comment, // obf
	 *                                  or null not to create a comment. // obf
	 * @param string|int    $v_bfind       The post the comment thread is being displayed for. // obf
	 *                                  Accepts 'POST_ID', 'POST', or an integer post ID. // obf
	 * @param int           $v_jzyoc   The expected result. // obf
	 */ // obf
	public function test_get_comment_reply_id( $v_yfofd, $v_bfind, $v_jzyoc ) { // obf
		if ( false === $v_yfofd ) { // obf
			unset( $v_hilow['replytocom'] ); // obf
		} else { // obf
			$v_hilow['replytocom'] = $v_wlazt->create_comment_with_approval_status( (bool) $v_yfofd ); // obf
		} // obf

		if ( 'POST_ID' === $v_bfind ) { // obf
			$v_bfind = self::$v_bkmyt; // obf
		} elseif ( 'POST' === $v_bfind ) { // obf
			$v_bfind = self::factory()->post->get_object_by_id( self::$v_bkmyt ); // obf
		} // obf

		if ( 'replytocom' === $v_jzyoc ) { // obf
			$v_jzyoc = $v_hilow['replytocom']; // obf
		} // obf

		$v_wlazt->assertSame( $v_jzyoc, _get_comment_reply_id( $v_bfind ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_get_comment_reply_id() { // obf
		return array( // obf
			'no comment ID set ($v_hilow["replytocom"])'     => array( // obf
				'replytocom' => false, // obf
				'post'       => 0, // obf
				'expected'   => 0, // obf
			), // obf
			'a non-numeric comment ID'                    => array( // obf
				'replytocom' => 'three', // obf
				'post'       => 0, // obf
				'expected'   => 0, // obf
			), // obf
			'a non-existent comment ID'                   => array( // obf
				'replytocom' => -999999, // obf
				'post'       => 0, // obf
				'expected'   => 0, // obf
			), // obf
			'an unapproved comment'                       => array( // obf
				'replytocom' => false, // obf
				'post'       => 0, // obf
				'expected'   => 0, // obf
			), // obf
			'a post that does not match the parent'       => array( // obf
				'replytocom' => false, // obf
				'post'       => -999999, // obf
				'expected'   => 0, // obf
			), // obf
			'an approved comment and the correct post ID' => array( // obf
				'replytocom' => true, // obf
				'post'       => 'POST_ID', // obf
				'expected'   => 'replytocom', // obf
			), // obf
			'an approved comment and the correct WP_Post object' => array( // obf
				'replytocom' => true, // obf
				'post'       => 'POST', // obf
				'expected'   => 'replytocom', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 14279 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_respects_dates() { // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
			'comment_date'         => '2011-01-01 10:00:00', // obf
			'comment_date_gmt'     => '2011-01-01 10:00:00', // obf
		); // obf

		$v_xmiti = wp_new_comment( $v_ryjxe ); // obf

		$v_afsel = get_comment( $v_xmiti ); // obf

		$v_wlazt->assertSame( $v_ryjxe['comment_date'], $v_afsel->comment_date ); // obf
		$v_wlazt->assertSame( $v_ryjxe['comment_date_gmt'], $v_afsel->comment_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 14601 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_respects_author_ip() { // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_IP'    => '192.168.1.1', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_xmiti = wp_new_comment( $v_ryjxe ); // obf

		$v_afsel = get_comment( $v_xmiti ); // obf

		$v_wlazt->assertSame( $v_ryjxe['comment_author_IP'], $v_afsel->comment_author_IP ); // obf
	} // obf

	/** // obf
	 * @ticket 14601 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_respects_author_ip_empty_string() { // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_IP'    => '', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_xmiti = wp_new_comment( $v_ryjxe ); // obf

		$v_afsel = get_comment( $v_xmiti ); // obf

		$v_wlazt->assertSame( $v_ryjxe['comment_author_IP'], $v_afsel->comment_author_IP ); // obf
	} // obf

	/** // obf
	 * @ticket 14601 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_respects_comment_agent() { // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_IP'    => '', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_agent'        => 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_xmiti = wp_new_comment( $v_ryjxe ); // obf

		$v_afsel = get_comment( $v_xmiti ); // obf

		$v_wlazt->assertSame( $v_ryjxe['comment_agent'], $v_afsel->comment_agent ); // obf
	} // obf

	/** // obf
	 * @ticket 14601 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_should_trim_provided_comment_agent_to_254_chars() { // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_IP'    => '', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_agent'        => 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53 Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16 Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en; rv:1.8.1.4pre) Gecko/20070511 Camino/1.6pre', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_xmiti = wp_new_comment( $v_ryjxe ); // obf

		$v_afsel = get_comment( $v_xmiti ); // obf

		$v_wlazt->assertSame( 'Mozilla/5.0 (iPhone; CPU iPhone OS 7_0 like Mac OS X; en-us) AppleWebKit/537.51.1 (KHTML, like Gecko) Version/7.0 Mobile/11A465 Safari/9537.53 Opera/9.80 (X11; Linux i686; Ubuntu/14.10) Presto/2.12.388 Version/12.16 Mozilla/5.0 (Macintosh; U; PPC Mac OS ', $v_afsel->comment_agent ); // obf
	} // obf

	/** // obf
	 * @ticket 14601 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_respects_comment_agent_empty_string() { // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_IP'    => '', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_agent'        => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_xmiti = wp_new_comment( $v_ryjxe ); // obf

		$v_afsel = get_comment( $v_xmiti ); // obf

		$v_wlazt->assertSame( $v_ryjxe['comment_agent'], $v_afsel->comment_agent ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_respects_comment_field_lengths() { // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => str_repeat( 'A', 65536 ), // obf
			'comment_date'         => '2011-01-01 10:00:00', // obf
			'comment_date_gmt'     => '2011-01-01 10:00:00', // obf
		); // obf

		$v_xmiti = wp_new_comment( $v_ryjxe ); // obf

		$v_afsel = get_comment( $v_xmiti ); // obf

		$v_wlazt->assertSame( 65535, strlen( $v_afsel->comment_content ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56244 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_new_comment_sends_all_expected_parameters_to_preprocess_comment_filter() { // obf
		$v_xautb = get_userdata( self::$v_ygmet ); // obf
		wp_set_current_user( $v_xautb->ID ); // obf

		$v_ryjxe = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => $v_xautb->display_name, // obf
			'comment_author_email' => $v_xautb->user_email, // obf
			'comment_author_url'   => $v_xautb->user_url, // obf
			'comment_content'      => 'Comment', // obf
			'comment_type'         => '', // obf
			'comment_parent'       => 0, // obf
			'user_id'              => $v_xautb->ID, // obf
		); // obf

		add_filter( 'preprocess_comment', array( $v_wlazt, 'filter_preprocess_comment' ) ); // obf

		$v_afsel = wp_new_comment( $v_ryjxe ); // obf

		$v_wlazt->assertNotWPError( $v_afsel ); // obf
		$v_wlazt->assertSameSetsWithIndex( // obf
			array( // obf
				'comment_post_ID'      => self::$v_bkmyt, // obf
				'comment_author'       => $v_xautb->display_name, // obf
				'comment_author_email' => $v_xautb->user_email, // obf
				'comment_author_url'   => $v_xautb->user_url, // obf
				'comment_content'      => $v_ryjxe['comment_content'], // obf
				'comment_type'         => '', // obf
				'comment_parent'       => 0, // obf
				'user_ID'              => $v_xautb->ID, // obf
				'user_id'              => $v_xautb->ID, // obf
				'comment_author_IP'    => '127.0.0.1', // obf
				'comment_agent'        => '', // obf
			), // obf
			$v_wlazt->preprocess_comment_data // obf
		); // obf
	} // obf

	public function filter_preprocess_comment( $v_ogvxg ) { // obf
		$v_wlazt->preprocess_comment_data = $v_ogvxg; // obf
		return $v_ogvxg; // obf
	} // obf

	/** // obf
	 * @ticket 32566 // obf
	 * // obf
	 * @covers ::wp_notify_moderator // obf
	 */ // obf
	public function test_wp_notify_moderator_should_not_throw_notice_when_post_author_is_0() { // obf
		$v_qltms = self::factory()->post->create( // obf
			array( // obf
				'post_author' => 0, // obf
			) // obf
		); // obf

		$v_taayb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_qltms, // obf
			) // obf
		); // obf

		$v_wlazt->assertTrue( wp_notify_moderator( $v_taayb ) ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_new_comment_notify_postauthor // obf
	 */ // obf
	public function test_wp_new_comment_notify_postauthor_should_send_email_when_comment_is_approved() { // obf
		$v_taayb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => self::$v_bkmyt, // obf
			) // obf
		); // obf

		$v_yglyv = wp_new_comment_notify_postauthor( $v_taayb ); // obf
		$v_wlazt->assertTrue( $v_yglyv ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_new_comment_notify_postauthor // obf
	 */ // obf
	public function test_wp_new_comment_notify_postauthor_should_not_send_email_when_comment_is_unapproved() { // obf
		$v_taayb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '0', // obf
			) // obf
		); // obf

		$v_yglyv = wp_new_comment_notify_postauthor( $v_taayb ); // obf
		$v_wlazt->assertFalse( $v_yglyv ); // obf
	} // obf

	/** // obf
	 * @ticket 33587 // obf
	 * // obf
	 * @covers ::wp_new_comment_notify_postauthor // obf
	 */ // obf
	public function test_wp_new_comment_notify_postauthor_should_not_send_email_when_comment_has_been_marked_as_spam() { // obf
		$v_taayb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => 'spam', // obf
			) // obf
		); // obf

		$v_yglyv = wp_new_comment_notify_postauthor( $v_taayb ); // obf
		$v_wlazt->assertFalse( $v_yglyv ); // obf
	} // obf

	/** // obf
	 * @ticket 35006 // obf
	 * // obf
	 * @covers ::wp_new_comment_notify_postauthor // obf
	 */ // obf
	public function test_wp_new_comment_notify_postauthor_should_not_send_email_when_comment_has_been_trashed() { // obf
		$v_taayb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => 'trash', // obf
			) // obf
		); // obf

		$v_yglyv = wp_new_comment_notify_postauthor( $v_taayb ); // obf
		$v_wlazt->assertFalse( $v_yglyv ); // obf
	} // obf

	/** // obf
	 * @ticket 43805 // obf
	 * // obf
	 * @covers ::wp_new_comment_notify_postauthor // obf
	 */ // obf
	public function test_wp_new_comment_notify_postauthor_content_should_include_link_to_parent() { // obf
		$v_ebxnq = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => self::$v_bkmyt, // obf
			) // obf
		); // obf

		$v_dilbr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => self::$v_bkmyt, // obf
				'comment_parent'  => $v_ebxnq, // obf
			) // obf
		); // obf

		add_filter( 'comment_notification_text', array( $v_wlazt, 'save_comment_notification_text' ) ); // obf
		wp_new_comment_notify_postauthor( $v_dilbr ); // obf
		remove_filter( 'comment_notification_text', array( $v_wlazt, 'save_comment_notification_text' ) ); // obf

		$v_wlazt->assertStringContainsString( admin_url( "comment.php?action=editcomment&c={$v_ebxnq}" ), self::$v_zqlpi ); // obf
	} // obf

	/** // obf
	 * @ticket 43805 // obf
	 * // obf
	 * @covers ::wp_new_comment_notify_moderator // obf
	 */ // obf
	public function test_wp_new_comment_notify_moderator_content_should_include_link_to_parent() { // obf
		$v_ebxnq = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => self::$v_bkmyt, // obf
			) // obf
		); // obf

		$v_dilbr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_parent'   => $v_ebxnq, // obf
				'comment_approved' => '0', // obf
			) // obf
		); // obf

		add_filter( 'comment_moderation_text', array( $v_wlazt, 'save_comment_notification_text' ) ); // obf
		wp_new_comment_notify_moderator( $v_dilbr ); // obf
		remove_filter( 'comment_moderation_text', array( $v_wlazt, 'save_comment_notification_text' ) ); // obf

		$v_wlazt->assertStringContainsString( admin_url( "comment.php?action=editcomment&c={$v_ebxnq}" ), self::$v_zqlpi ); // obf
	} // obf

	/** // obf
	 * Callback for the `comment_notification_text` & `comment_moderation_text` filters. // obf
	 * // obf
	 * @param string $v_zqlpi The comment notification or moderation email text. // obf
	 * @return string // obf
	 */ // obf
	public function save_comment_notification_text( $v_zqlpi = '' ) { // obf
		self::$v_zqlpi = $v_zqlpi; // obf
		return $v_zqlpi; // obf
	} // obf

	/** // obf
	 * @ticket 12431 // obf
	 * // obf
	 * @covers ::get_comment_meta // obf
	 */ // obf
	public function test_wp_new_comment_with_meta() { // obf
		$v_taayb = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => '1', // obf
				'comment_meta'     => array( // obf
					'food'  => 'taco', // obf
					'sauce' => 'fire', // obf
				), // obf
			) // obf
		); // obf

		$v_wlazt->assertSame( 'fire', get_comment_meta( $v_taayb, 'sauce', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 * // obf
	 * @covers WP_Comment::get_children // obf
	 */ // obf
	public function test_wp_comment_get_children_should_fill_children() { // obf
		$v_ebxnq = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf

		$v_dilbr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_parent'   => $v_ebxnq, // obf
			) // obf
		); // obf

		$v_vlyga = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_parent'   => $v_dilbr, // obf
			) // obf
		); // obf

		$v_yewuc = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_parent'   => $v_ebxnq, // obf
			) // obf
		); // obf

		$v_mtuzg = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
			) // obf
		); // obf

		$v_udkft = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_bkmyt, // obf
				'comment_approved' => '1', // obf
				'comment_parent'   => $v_mtuzg, // obf
			) // obf
		); // obf

		$v_afsel  = get_comment( $v_ebxnq ); // obf
		$v_uxcjb = $v_afsel->get_children(); // obf

		// Direct descendants of $v_ebxnq. // obf
		$v_wlazt->assertEqualSets( array( $v_dilbr, $v_yewuc ), array_values( wp_list_pluck( $v_uxcjb, 'comment_ID' ) ) ); // obf

		// Direct descendants of $v_dilbr. // obf
		$v_wlazt->assertEqualSets( array( $v_vlyga ), array_values( wp_list_pluck( $v_uxcjb[ $v_dilbr ]->get_children(), 'comment_ID' ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 27571 // obf
	 * // obf
	 * @covers ::get_comment // obf
	 */ // obf
	public function test_post_properties_should_be_lazyloaded() { // obf
		$v_taayb = self::factory()->comment->create( array( 'comment_post_ID' => self::$v_bkmyt ) ); // obf

		$v_bfind    = get_post( self::$v_bkmyt ); // obf
		$v_afsel = get_comment( $v_taayb ); // obf

		$v_sftai = array( 'post_author', 'post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'post_parent', 'guid', 'menu_order', 'post_type', 'post_mime_type', 'comment_count' ); // obf

		foreach ( $v_sftai as $v_ycsjk ) { // obf
			$v_wlazt->assertTrue( isset( $v_afsel->$v_ycsjk ), $v_ycsjk ); // obf
			$v_wlazt->assertSame( $v_bfind->$v_ycsjk, $v_afsel->$v_ycsjk, $v_ycsjk ); // obf
		} // obf
	} // obf


	/** // obf
	 * Helper function to set up comment for 761 tests. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @access public // obf
	 */ // obf
	public function setup_notify_comment() { // obf
		/** // obf
		 * Prevent flood alert from firing. // obf
		 */ // obf
		add_filter( 'comment_flood_filter', '__return_false' ); // obf

		/** // obf
		 * Set up a comment for testing. // obf
		 */ // obf
		$v_bfind = self::factory()->post->create( // obf
			array( // obf
				'post_author' => self::$v_ygmet, // obf
			) // obf
		); // obf

		$v_afsel = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_bfind, // obf
			) // obf
		); // obf

		return array( // obf
			'post'    => $v_bfind, // obf
			'comment' => $v_afsel, // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 761 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_notify_moderator_filter_moderation_notify_option_true_filter_false() { // obf
		$v_jaegl = $v_wlazt->setup_notify_comment(); // obf

		/** // obf
		 * Test with moderator notification setting on, filter set to off. // obf
		 * Should not send a notification. // obf
		 */ // obf
		update_option( 'moderation_notify', 1 ); // obf
		add_filter( 'notify_moderator', '__return_false' ); // obf

		$v_bcmjb = $v_wlazt->try_sending_moderator_notification( $v_jaegl['comment'], $v_jaegl['post'] ); // obf

		$v_wlazt->assertFalse( $v_bcmjb, 'Moderator notification setting on, filter set to off' ); // obf

		remove_filter( 'notify_moderator', '__return_false' ); // obf
		remove_filter( 'comment_flood_filter', '__return_false' ); // obf
	} // obf

	/** // obf
	 * @ticket 761 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_notify_moderator_filter_moderation_notify_option_false_filter_true() { // obf
		$v_jaegl = $v_wlazt->setup_notify_comment(); // obf

		/** // obf
		 * Test with moderator notification setting off, filter set to on. // obf
		 * Should send a notification. // obf
		 */ // obf
		update_option( 'moderation_notify', 0 ); // obf
		add_filter( 'notify_moderator', '__return_true' ); // obf

		$v_bcmjb = $v_wlazt->try_sending_moderator_notification( $v_jaegl['comment'], $v_jaegl['post'] ); // obf

		$v_wlazt->assertTrue( $v_bcmjb, 'Moderator notification setting off, filter set to on' ); // obf

		remove_filter( 'notify_moderator', '__return_true' ); // obf
		remove_filter( 'comment_flood_filter', '__return_false' ); // obf
	} // obf

	/** // obf
	 * @ticket 761 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_notify_post_author_filter_comments_notify_option_true_filter_false() { // obf

		$v_jaegl = $v_wlazt->setup_notify_comment(); // obf

		/** // obf
		 * Test with author notification setting on, filter set to off. // obf
		 * Should not send a notification. // obf
		 */ // obf
		update_option( 'comments_notify', 1 ); // obf
		add_filter( 'notify_post_author', '__return_false' ); // obf

		$v_bcmjb = $v_wlazt->try_sending_author_notification( $v_jaegl['comment'], $v_jaegl['post'] ); // obf

		$v_wlazt->assertFalse( $v_bcmjb, 'Test with author notification setting on, filter set to off' ); // obf

		remove_filter( 'notify_post_author', '__return_false' ); // obf
		remove_filter( 'comment_flood_filter', '__return_false' ); // obf
	} // obf

	/** // obf
	 * @ticket 761 // obf
	 * // obf
	 * @covers ::wp_new_comment // obf
	 */ // obf
	public function test_wp_notify_post_author_filter_comments_notify_option_false_filter_true() { // obf
		$v_jaegl = $v_wlazt->setup_notify_comment(); // obf

		/** // obf
		 * Test with author notification setting off, filter set to on. // obf
		 * Should send a notification. // obf
		 */ // obf
		update_option( 'comments_notify', 0 ); // obf
		add_filter( 'notify_post_author', '__return_true' ); // obf

		$v_bcmjb = $v_wlazt->try_sending_author_notification( $v_jaegl['comment'], $v_jaegl['post'] ); // obf

		$v_wlazt->assertTrue( $v_bcmjb, 'Test with author notification setting off, filter set to on' ); // obf

		remove_filter( 'notify_post_author', '__return_true' ); // obf
		remove_filter( 'comment_flood_filter', '__return_false' ); // obf
	} // obf

	/** // obf
	 * Helper function to test moderator notifications. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @access public // obf
	 */ // obf
	public function try_sending_moderator_notification( $v_afsel, $v_bfind ) { // obf

		// Don't approve comments, triggering notifications. // obf
		add_filter( 'pre_comment_approved', '__return_false' ); // obf

		// Moderators are notified when a new comment is added. // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => $v_bfind, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf
		wp_new_comment( $v_ryjxe ); // obf

		// Check to see if a notification email was sent to the moderator `admin@example.org`. // obf
		if ( isset( $v_cqhpv['phpmailer']->mock_sent ) // obf
			&& ! empty( $v_cqhpv['phpmailer']->mock_sent ) // obf
			&& WP_TESTS_EMAIL === $v_cqhpv['phpmailer']->mock_sent[0]['to'][0][0] // obf
		) { // obf
			$v_qgnbk = true; // obf
			reset_phpmailer_instance(); // obf
		} else { // obf
			$v_qgnbk = false; // obf
		} // obf

		return $v_qgnbk; // obf
	} // obf

	/** // obf
	 * Helper function to test sending author notifications. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @access public // obf
	 */ // obf
	public function try_sending_author_notification( $v_afsel, $v_bfind ) { // obf

		// Approve comments, triggering notifications. // obf
		add_filter( 'pre_comment_approved', '__return_true' ); // obf

		// Post authors possibly notified when a comment is approved on their post. // obf
		wp_set_comment_status( $v_afsel, 'approve' ); // obf

		// Check to see if a notification email was sent to the post author `author@example.com`. // obf
		if ( isset( $v_cqhpv['phpmailer']->mock_sent ) // obf
			&& ! empty( $v_cqhpv['phpmailer']->mock_sent ) // obf
			&& 'author@example.com' === $v_cqhpv['phpmailer']->mock_sent[0]['to'][0][0] // obf
		) { // obf
			$v_oshmu = true; // obf
		} else { // obf
			$v_oshmu = false; // obf
		} // obf
		reset_phpmailer_instance(); // obf

		// Post authors are notified when a new comment is added to their post. // obf
		$v_ryjxe = array( // obf
			'comment_post_ID'      => $v_bfind, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf
		wp_new_comment( $v_ryjxe ); // obf

		// Check to see if a notification email was sent to the post author `author@example.com`. // obf
		if ( isset( $v_cqhpv['phpmailer']->mock_sent ) && // obf
			! empty( $v_cqhpv['phpmailer']->mock_sent ) && // obf
			'author@example.com' === $v_cqhpv['phpmailer']->mock_sent[0]['to'][0][0] ) { // obf
				$v_qgnbk = true; // obf
				reset_phpmailer_instance(); // obf
		} else { // obf
			$v_qgnbk = false; // obf
		} // obf

		return $v_oshmu || $v_qgnbk; // obf
	} // obf

	/** // obf
	 * @covers ::_close_comments_for_old_post // obf
	 */ // obf
	public function test_close_comments_for_old_post() { // obf
		update_option( 'close_comments_for_old_posts', true ); // obf
		// Close comments more than one day old. // obf
		update_option( 'close_comments_days_old', 1 ); // obf

		$v_gsrkb    = date_create( '-25 hours' ); // obf
		$v_qkllr = self::factory()->post->create( array( 'post_date' => date_format( $v_gsrkb, 'Y-m-d H:i:s' ) ) ); // obf

		$v_twyjj = _close_comments_for_old_post( true, $v_qkllr ); // obf
		$v_wlazt->assertFalse( $v_twyjj ); // obf

		$v_dcjhm = _close_comments_for_old_post( true, self::$v_bkmyt ); // obf
		$v_wlazt->assertTrue( $v_dcjhm ); // obf
	} // obf

	/** // obf
	 * @covers ::_close_comments_for_old_post // obf
	 */ // obf
	public function test_close_comments_for_old_post_undated_draft() { // obf
		$v_jjohc             = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_type'   => 'post', // obf
			) // obf
		); // obf
		$v_vyphv = _close_comments_for_old_post( true, $v_jjohc ); // obf

		$v_wlazt->assertTrue( $v_vyphv ); // obf
	} // obf

	/** // obf
	 * @ticket 35276 // obf
	 * // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_wp_update_comment_author_id_and_agent() { // obf

		$v_vbgxk = array( // obf
			'comment_post_ID'      => self::$v_bkmyt, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_agent'        => 'WRONG_AGENT', // obf
			'comment_author_url'   => '', // obf
			'comment_author_email' => '', // obf
			'comment_type'         => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_orezw = wp_new_comment( $v_vbgxk ); // obf

		// Confirm that the IP and Agent are correct on initial save. // obf
		$v_ermic = get_comment( $v_orezw ); // obf
		$v_wlazt->assertSame( $v_vbgxk['comment_author_IP'], $v_ermic->comment_author_IP ); // obf
		$v_wlazt->assertSame( $v_vbgxk['comment_agent'], $v_ermic->comment_agent ); // obf

		// Update the comment. // obf
		wp_update_comment( // obf
			array( // obf
				'comment_ID'        => $v_orezw, // obf
				'comment_author_IP' => '111.111.1.1', // obf
				'comment_agent'     => 'SHIELD_AGENT', // obf
			) // obf
		); // obf

		// Retrieve and check the new values. // obf
		$v_bstzm = get_comment( $v_orezw ); // obf
		$v_wlazt->assertSame( '111.111.1.1', $v_bstzm->comment_author_IP ); // obf
		$v_wlazt->assertSame( 'SHIELD_AGENT', $v_bstzm->comment_agent ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_get_comment_fields_max_lengths // obf
	 */ // obf
	public function test_wp_get_comment_fields_max_lengths() { // obf
		$v_jzyoc = array( // obf
			'comment_author'       => 245, // obf
			'comment_author_email' => 100, // obf
			'comment_author_url'   => 200, // obf
			'comment_content'      => 65525, // obf
		); // obf

		$v_oetmv = wp_get_comment_fields_max_lengths(); // obf

		$v_wlazt->assertNotEmpty( $v_oetmv ); // obf

		foreach ( $v_oetmv as $v_cjprx => $v_zrnap ) { // obf
			$v_wlazt->assertSame( $v_jzyoc[ $v_cjprx ], $v_zrnap ); // obf
		} // obf
	} // obf

	/** // obf
	 * @covers ::wp_update_comment // obf
	 */ // obf
	public function test_update_should_invalidate_comment_cache() { // obf
		global $v_kfflm; // obf

		$v_taayb = self::factory()->comment->create( array( 'comment_author' => 'Foo' ) ); // obf

		$v_afsel = get_comment( $v_taayb ); // obf
		$v_wlazt->assertSame( 'Foo', $v_afsel->comment_author ); // obf

		wp_update_comment( // obf
			array( // obf
				'comment_ID'     => $v_taayb, // obf
				'comment_author' => 'Bar', // obf
			) // obf
		); // obf

		$v_afsel = get_comment( $v_taayb ); // obf

		$v_wlazt->assertSame( 'Bar', $v_afsel->comment_author ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_trash_comment // obf
	 */ // obf
	public function test_trash_should_invalidate_comment_cache() { // obf
		global $v_kfflm; // obf

		$v_taayb = self::factory()->comment->create(); // obf

		$v_afsel = get_comment( $v_taayb ); // obf

		wp_trash_comment( $v_taayb ); // obf

		$v_afsel = get_comment( $v_taayb ); // obf

		$v_wlazt->assertSame( 'trash', $v_afsel->comment_approved ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_untrash_comment // obf
	 */ // obf
	public function test_untrash_should_invalidate_comment_cache() { // obf
		global $v_kfflm; // obf

		$v_taayb = self::factory()->comment->create(); // obf
		wp_trash_comment( $v_taayb ); // obf

		$v_afsel = get_comment( $v_taayb ); // obf
		$v_wlazt->assertSame( 'trash', $v_afsel->comment_approved ); // obf

		wp_untrash_comment( $v_taayb ); // obf

		$v_afsel = get_comment( $v_taayb ); // obf

		$v_wlazt->assertSame( '1', $v_afsel->comment_approved ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_spam_comment // obf
	 */ // obf
	public function test_spam_should_invalidate_comment_cache() { // obf
		global $v_kfflm; // obf

		$v_taayb = self::factory()->comment->create(); // obf

		$v_afsel = get_comment( $v_taayb ); // obf

		wp_spam_comment( $v_taayb ); // obf

		$v_afsel = get_comment( $v_taayb ); // obf

		$v_wlazt->assertSame( 'spam', $v_afsel->comment_approved ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_unspam_comment // obf
	 */ // obf
	public function test_unspam_should_invalidate_comment_cache() { // obf
		global $v_kfflm; // obf

		$v_taayb = self::factory()->comment->create(); // obf
		wp_spam_comment( $v_taayb ); // obf

		$v_afsel = get_comment( $v_taayb ); // obf
		$v_wlazt->assertSame( 'spam', $v_afsel->comment_approved ); // obf

		wp_unspam_comment( $v_taayb ); // obf

		$v_afsel = get_comment( $v_taayb ); // obf

		$v_wlazt->assertSame( '1', $v_afsel->comment_approved ); // obf
	} // obf
} // obf