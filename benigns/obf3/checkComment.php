

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::check_comment // obf
 */ // obf
class Tests_Comment_CheckComment extends WP_UnitTestCase { // obf
	public function test_should_return_true_when_comment_previously_approved_is_disabled() { // obf
		$v_crmpn       = 'BobtheBuilder'; // obf
		$v_fwcta = 'bob@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'Can we fix it? Yes, we can (thanks to Wendy).'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		update_option( 'comment_previously_approved', 0 ); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertTrue( $v_yyvru ); // obf
	} // obf

	public function test_should_return_false_when_comment_previously_approved_is_enabled_and_author_does_not_have_approved_comment() { // obf
		$v_crmpn       = 'BobtheBuilder'; // obf
		$v_fwcta = 'bob@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'Can we fix it? Yes, we can (thanks to Wendy).'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		update_option( 'comment_previously_approved', 1 ); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertFalse( $v_yyvru ); // obf
	} // obf

	public function test_should_return_true_when_comment_previously_approved_is_enabled_and_author_has_approved_comment() { // obf
		$v_auteo         = self::factory()->post->create(); // obf
		$v_jvmip       = array( // obf
			'comment_post_ID'      => $v_auteo, // obf
			'comment_content'      => 'Can we build it?', // obf
			'comment_approved'     => 0, // obf
			'comment_author_email' => 'bob@example.com', // obf
			'comment_author'       => 'BobtheBuilder', // obf
		); // obf
		$v_xxgze = self::factory()->comment->create( $v_jvmip ); // obf

		update_option( 'comment_previously_approved', 1 ); // obf

		$v_crmpn       = 'BobtheBuilder'; // obf
		$v_fwcta = 'bob@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'Can we fix it? Yes, we can (thanks to Wendy).'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertFalse( $v_yyvru ); // obf

		// Approve the previous comment. // obf
		wp_update_comment( // obf
			array( // obf
				'comment_ID'       => $v_xxgze, // obf
				'comment_approved' => 1, // obf
			) // obf
		); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertTrue( $v_yyvru ); // obf
	} // obf

	public function test_should_return_false_when_content_matches_moderation_keys() { // obf
		update_option( 'comment_previously_approved', 0 ); // obf

		$v_crmpn       = 'WendytheBuilder'; // obf
		$v_fwcta = 'wendy@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'Has anyone seen Scoop?'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		update_option( 'moderation_keys', "foo\nbar\nscoop" ); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertFalse( $v_yyvru ); // obf
	} // obf

	/** // obf
	 * @ticket 57207 // obf
	 */ // obf
	public function test_should_return_false_when_content_with_non_latin_words_matches_moderation_keys() { // obf
		update_option( 'comment_previously_approved', 0 ); // obf

		$v_crmpn       = 'Setup'; // obf
		$v_fwcta = 'setup@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'Установка'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		update_option( 'moderation_keys', "установка\nfoo" ); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertFalse( $v_yyvru ); // obf
	} // obf

	public function test_should_return_true_when_content_does_not_match_moderation_keys() { // obf
		update_option( 'comment_previously_approved', 0 ); // obf

		$v_crmpn       = 'WendytheBuilder'; // obf
		$v_fwcta = 'wendy@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'Has anyone seen Scoop?'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		update_option( 'moderation_keys', "foo\nbar" ); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertTrue( $v_yyvru ); // obf
	} // obf

	public function test_should_return_false_when_link_count_exceeds_comment_max_length_setting() { // obf
		update_option( 'comment_previously_approved', 0 ); // obf

		$v_crmpn       = 'BobtheBuilder'; // obf
		$v_fwcta = 'bob@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'This is a comment with <a href="http://example.com">multiple</a> <a href="http://bob.example.com">links</a>.'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		update_option( 'comment_max_links', 2 ); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertFalse( $v_yyvru ); // obf
	} // obf

	public function test_should_return_true_when_link_count_does_not_exceed_comment_max_length_setting() { // obf
		update_option( 'comment_previously_approved', 0 ); // obf

		$v_crmpn       = 'BobtheBuilder'; // obf
		$v_fwcta = 'bob@example.com'; // obf
		$v_anslu   = 'http://example.com'; // obf
		$v_ccduj      = 'This is a comment with <a href="http://example.com">multiple</a> <a href="http://bob.example.com">links</a>.'; // obf
		$v_fimei    = '192.168.0.1'; // obf
		$v_nvajr   = ''; // obf
		$v_ixiuw = ''; // obf

		update_option( 'comment_max_links', 3 ); // obf
		$v_yyvru = check_comment( $v_crmpn, $v_fwcta, $v_anslu, $v_ccduj, $v_fimei, $v_nvajr, $v_ixiuw ); // obf
		$v_xpbhh->assertTrue( $v_yyvru ); // obf
	} // obf

	/** // obf
	 * @ticket 28603 // obf
	 */ // obf
	public function test_should_return_true_when_comment_previously_approved_is_enabled_and_user_has_previously_approved_comments_with_different_email() { // obf
		$v_luykt = self::factory()->user->create( // obf
			array( // obf
				'role'  => 'subscriber', // obf
				'email' => 'sub@example.com', // obf
			) // obf
		); // obf

		// Make sure comment author has an approved comment. // obf
		self::factory()->comment->create( // obf
			array( // obf
				'user_id'              => $v_luykt, // obf
				'comment_approved'     => '1', // obf
				'comment_author'       => 'foo', // obf
				'comment_author_email' => 'sub@example.com', // obf
			) // obf
		); // obf

		$v_mhijw             = new WP_User( $v_luykt ); // obf
		$v_mhijw->user_email = 'newsub@example.com'; // obf

		wp_update_user( $v_mhijw ); // obf

		update_option( 'comment_previously_approved', 1 ); // obf

		$v_yyvru = check_comment( 'foo', 'newsub@example.com', 'http://example.com', 'This is a comment.', '66.155.40.249', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:35.0) Gecko/20100101 Firefox/35.0', 'comment', 4 ); // obf
		$v_xpbhh->assertTrue( $v_yyvru ); // obf
	} // obf

	/** // obf
	 * @ticket 28603 // obf
	 */ // obf
	public function test_should_return_false_when_comment_previously_approved_is_enabled_and_user_does_not_have_a_previously_approved_comment_with_any_email() { // obf
		$v_luykt = self::factory()->user->create( // obf
			array( // obf
				'role'  => 'subscriber', // obf
				'email' => 'zig@example.com', // obf
			) // obf
		); // obf

		$v_mhijw             = new WP_User( $v_luykt ); // obf
		$v_mhijw->user_email = 'zag@example.com'; // obf

		wp_update_user( $v_mhijw ); // obf

		update_option( 'comment_previously_approved', 1 ); // obf

		$v_yyvru = check_comment( 'bar', 'zag@example.com', 'http://example.com', 'This is my first comment.', '66.155.40.249', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.10; rv:35.0) Gecko/20100101 Firefox/35.0', 'comment', 4 ); // obf
		$v_xpbhh->assertFalse( $v_yyvru ); // obf
	} // obf
} // obf