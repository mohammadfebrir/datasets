

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::wp_handle_comment_submission // obf
 */ // obf
class Tests_Comment_wpHandleCommentSubmission extends WP_UnitTestCase { // obf

	protected static $v_rpeau; // obf
	protected static $v_hlraq; // obf
	protected static $v_wetrx; // obf
	protected static $v_rqpdw; // obf

	protected $v_waanh = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_vnfbd ) { // obf
		self::$v_rpeau = $v_vnfbd->post->create_and_get(); // obf

		self::$v_hlraq = $v_vnfbd->user->create( // obf
			array( // obf
				'role' => 'author', // obf
			) // obf
		); // obf

		self::$v_wetrx = $v_vnfbd->user->create( // obf
			array( // obf
				'role'     => 'author', // obf
				'user_url' => 'http://user.example.org', // obf
			) // obf
		); // obf

		self::$v_rqpdw = $v_vnfbd->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_rpeau->ID, true ); // obf

		self::delete_user( self::$v_hlraq ); // obf
		self::delete_user( self::$v_rqpdw ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		require_once ABSPATH . WPINC . '/class-phpass.php'; // obf
	} // obf

	public function test_submitting_comment_to_invalid_post_returns_error() { // obf
		$v_yaepy = 'comment_id_not_found'; // obf

		$v_uvxcv->assertSame( 0, did_action( $v_yaepy ) ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => 0, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertSame( 1, did_action( $v_yaepy ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_to_post_with_closed_comments_returns_error() { // obf

		$v_yaepy = 'comment_closed'; // obf

		$v_uvxcv->assertSame( 0, did_action( $v_yaepy ) ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'comment_status' => 'closed', // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertSame( 1, did_action( $v_yaepy ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_to_trashed_post_returns_error() { // obf

		$v_yaepy = 'comment_on_trash'; // obf

		$v_uvxcv->assertSame( 0, did_action( $v_yaepy ) ); // obf

		wp_trash_post( self::$v_rpeau->ID ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		wp_untrash_post( self::$v_rpeau->ID ); // obf

		$v_uvxcv->assertSame( 1, did_action( $v_yaepy ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_to_draft_post_returns_error() { // obf
		$v_yaepy = 'comment_on_draft'; // obf

		$v_uvxcv->assertSame( 0, did_action( $v_yaepy ) ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertSame( 1, did_action( $v_yaepy ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
		$v_uvxcv->assertEmpty( $v_unxml->get_error_message() ); // obf
	} // obf

	/** // obf
	 * @ticket 39650 // obf
	 */ // obf
	public function test_submitting_comment_to_draft_post_returns_error_message_for_user_with_correct_caps() { // obf
		$v_yaepy = 'comment_on_draft'; // obf

		wp_set_current_user( self::$v_hlraq ); // obf

		$v_uvxcv->assertSame( 0, did_action( $v_yaepy ) ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_author' => self::$v_hlraq, // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertSame( 1, did_action( $v_yaepy ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
		$v_uvxcv->assertNotEmpty( $v_unxml->get_error_message() ); // obf
	} // obf

	public function test_submitting_comment_to_scheduled_post_returns_error() { // obf

		// Same error as commenting on a draft. // obf
		$v_yaepy = 'comment_on_draft'; // obf

		$v_uvxcv->assertSame( 0, did_action( $v_yaepy ) ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date' => gmdate( 'Y-m-d H:i:s', strtotime( '+1 day' ) ), // obf
			) // obf
		); // obf

		$v_uvxcv->assertSame( 'future', $v_rpeau->post_status ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertSame( 1, did_action( $v_yaepy ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_to_password_required_post_returns_error() { // obf

		$v_yaepy = 'comment_on_password_protected'; // obf

		$v_uvxcv->assertSame( 0, did_action( $v_yaepy ) ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_password' => 'password', // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertSame( 1, did_action( $v_yaepy ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_to_password_protected_post_succeeds() { // obf
		$v_twzki = 'password'; // obf
		$v_gxpog   = new PasswordHash( 8, true ); // obf

		$v_hyhgl[ 'wp-postpass_' . COOKIEHASH ] = $v_gxpog->HashPassword( $v_twzki ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_password' => $v_twzki, // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		unset( $v_hyhgl[ 'wp-postpass_' . COOKIEHASH ] ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
	} // obf

	public function test_submitting_valid_comment_as_logged_in_user_succeeds() { // obf

		$v_izhtj = get_user_by( 'id', self::$v_wetrx ); // obf

		wp_set_current_user( $v_izhtj->ID ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf

		$v_uvxcv->assertSame( 'Comment', $v_unxml->comment_content ); // obf
		$v_uvxcv->assertSame( $v_izhtj->display_name, $v_unxml->comment_author ); // obf
		$v_uvxcv->assertSame( $v_izhtj->user_email, $v_unxml->comment_author_email ); // obf
		$v_uvxcv->assertSame( $v_izhtj->user_url, $v_unxml->comment_author_url ); // obf
		$v_uvxcv->assertSame( $v_izhtj->ID, (int) $v_unxml->user_id ); // obf
	} // obf

	public function test_submitting_valid_comment_anonymously_succeeds() { // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
			'url'             => 'user.example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf

		$v_uvxcv->assertSame( 'Comment', $v_unxml->comment_content ); // obf
		$v_uvxcv->assertSame( 'Comment Author', $v_unxml->comment_author ); // obf
		$v_uvxcv->assertSame( 'comment@example.org', $v_unxml->comment_author_email ); // obf
		$v_uvxcv->assertSame( 'http://user.example.org', $v_unxml->comment_author_url ); // obf
		$v_uvxcv->assertSame( '0', $v_unxml->user_id ); // obf
	} // obf

	/** // obf
	 * wp_handle_comment_submission() expects un-slashed data. // obf
	 * // obf
	 * @group slashes // obf
	 */ // obf
	public function test_submitting_comment_handles_slashes_correctly() { // obf
		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment with 1 slash: \\', // obf
			'author'          => 'Comment Author with 1 slash: \\', // obf
			'email'           => 'comment@example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf

		$v_uvxcv->assertSame( 'Comment with 1 slash: \\', $v_unxml->comment_content ); // obf
		$v_uvxcv->assertSame( 'Comment Author with 1 slash: \\', $v_unxml->comment_author ); // obf
		$v_uvxcv->assertSame( 'comment@example.org', $v_unxml->comment_author_email ); // obf
	} // obf

	public function test_submitting_comment_anonymously_to_private_post_returns_error() { // obf

		$v_yaepy = 'comment_id_not_found'; // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private', // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertFalse( is_user_logged_in() ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_as_logged_in_user_to_inaccessible_private_post_returns_error() { // obf

		$v_yaepy = 'comment_id_not_found'; // obf

		$v_izhtj = get_user_by( 'id', self::$v_wetrx ); // obf

		wp_set_current_user( $v_izhtj->ID ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private', // obf
				'post_author' => self::$v_hlraq, // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertFalse( current_user_can( 'read_post', $v_rpeau->ID ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_to_private_post_with_closed_comments_returns_correct_error() { // obf

		$v_yaepy = 'comment_id_not_found'; // obf

		$v_izhtj = get_user_by( 'id', self::$v_wetrx ); // obf

		wp_set_current_user( $v_izhtj->ID ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status'    => 'private', // obf
				'post_author'    => self::$v_hlraq, // obf
				'comment_status' => 'closed', // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertFalse( current_user_can( 'read_post', $v_rpeau->ID ) ); // obf
		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_to_own_private_post_succeeds() { // obf

		wp_set_current_user( self::$v_hlraq ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private', // obf
				'post_author' => self::$v_hlraq, // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertTrue( current_user_can( 'read_post', $v_rpeau->ID ) ); // obf
		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
	} // obf

	public function test_submitting_comment_to_accessible_private_post_succeeds() { // obf

		wp_set_current_user( self::$v_rqpdw ); // obf

		$v_rpeau = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'private', // obf
				'post_author' => self::$v_hlraq, // obf
			) // obf
		); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => $v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertTrue( current_user_can( 'read_post', $v_rpeau->ID ) ); // obf
		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
	} // obf

	public function test_anonymous_user_cannot_comment_unfiltered_html() { // obf
		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment <script>alert(document.cookie);</script>', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
		$v_uvxcv->assertStringNotContainsString( '<script', $v_unxml->comment_content ); // obf
	} // obf

	public function test_unprivileged_user_cannot_comment_unfiltered_html() { // obf

		wp_set_current_user( self::$v_hlraq ); // obf

		$v_uvxcv->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment <script>alert(document.cookie);</script>', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
		$v_uvxcv->assertStringNotContainsString( '<script', $v_unxml->comment_content ); // obf
	} // obf

	public function test_unprivileged_user_cannot_comment_unfiltered_html_even_with_valid_nonce() { // obf

		wp_set_current_user( self::$v_hlraq ); // obf

		$v_uvxcv->assertFalse( current_user_can( 'unfiltered_html' ) ); // obf

		$v_zksyx = 'unfiltered-html-comment_' . self::$v_rpeau->ID; // obf
		$v_deflr  = wp_create_nonce( $v_zksyx ); // obf

		$v_uvxcv->assertNotEmpty( wp_verify_nonce( $v_deflr, $v_zksyx ) ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID'             => self::$v_rpeau->ID, // obf
			'comment'                     => 'Comment <script>alert(document.cookie);</script>', // obf
			'_wp_unfiltered_html_comment' => $v_deflr, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
		$v_uvxcv->assertStringNotContainsString( '<script', $v_unxml->comment_content ); // obf
	} // obf

	public function test_privileged_user_can_comment_unfiltered_html_with_valid_nonce() { // obf

		$v_uvxcv->assertFalse( defined( 'DISALLOW_UNFILTERED_HTML' ) ); // obf

		if ( is_multisite() ) { // obf
			// In multisite, only Super Admins can post unfiltered HTML. // obf
			$v_uvxcv->assertFalse( user_can( self::$v_rqpdw, 'unfiltered_html' ) ); // obf
			grant_super_admin( self::$v_rqpdw ); // obf
		} // obf

		wp_set_current_user( self::$v_rqpdw ); // obf

		$v_uvxcv->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf

		$v_zksyx = 'unfiltered-html-comment_' . self::$v_rpeau->ID; // obf
		$v_deflr  = wp_create_nonce( $v_zksyx ); // obf

		$v_uvxcv->assertNotEmpty( wp_verify_nonce( $v_deflr, $v_zksyx ) ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID'             => self::$v_rpeau->ID, // obf
			'comment'                     => 'Comment <script>alert(document.cookie);</script>', // obf
			'_wp_unfiltered_html_comment' => $v_deflr, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
		$v_uvxcv->assertStringContainsString( '<script', $v_unxml->comment_content ); // obf
	} // obf

	public function test_privileged_user_cannot_comment_unfiltered_html_without_valid_nonce() { // obf

		if ( is_multisite() ) { // obf
			// In multisite, only Super Admins can post unfiltered HTML. // obf
			$v_uvxcv->assertFalse( user_can( self::$v_rqpdw, 'unfiltered_html' ) ); // obf
			grant_super_admin( self::$v_rqpdw ); // obf
		} // obf

		wp_set_current_user( self::$v_rqpdw ); // obf

		$v_uvxcv->assertTrue( current_user_can( 'unfiltered_html' ) ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment <script>alert(document.cookie);</script>', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf
		$v_uvxcv->assertStringNotContainsString( '<script', $v_unxml->comment_content ); // obf
	} // obf

	public function test_submitting_comment_as_anonymous_user_when_registration_required_returns_error() { // obf

		$v_yaepy = 'not_logged_in'; // obf

		$v_meynr = get_option( 'comment_registration' ); // obf
		update_option( 'comment_registration', '1' ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		update_option( 'comment_registration', $v_meynr ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_with_no_name_when_name_email_required_returns_error() { // obf

		$v_yaepy = 'require_name_email'; // obf

		$v_oabsp = get_option( 'require_name_email' ); // obf
		update_option( 'require_name_email', '1' ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'email'           => 'comment@example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		update_option( 'require_name_email', $v_oabsp ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_with_no_email_when_name_email_required_returns_error() { // obf

		$v_yaepy = 'require_name_email'; // obf

		$v_oabsp = get_option( 'require_name_email' ); // obf
		update_option( 'require_name_email', '1' ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		update_option( 'require_name_email', $v_oabsp ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_with_invalid_email_when_name_email_required_returns_error() { // obf

		$v_yaepy = 'require_valid_email'; // obf

		$v_oabsp = get_option( 'require_name_email' ); // obf
		update_option( 'require_name_email', '1' ); // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'not_an_email', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		update_option( 'require_name_email', $v_oabsp ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	public function test_submitting_comment_with_no_comment_content_returns_error() { // obf

		$v_yaepy = 'require_valid_comment'; // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => '', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 10377 // obf
	 */ // obf
	public function test_submitting_comment_with_content_too_long_returns_error() { // obf
		$v_yaepy = 'comment_content_column_length'; // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => rand_long_str( 65536 ), // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 10377 // obf
	 */ // obf
	public function test_submitting_comment_with_author_too_long_returns_error() { // obf
		$v_yaepy = 'comment_author_column_length'; // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => rand_long_str( 255 ), // obf
			'email'           => 'comment@example.org', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 10377 // obf
	 */ // obf
	public function test_submitting_comment_with_email_too_long_returns_error() { // obf
		$v_yaepy = 'comment_author_email_column_length'; // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => rand_long_str( 90 ) . '@example.com', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 10377 // obf
	 */ // obf
	public function test_submitting_comment_with_url_too_long_returns_error() { // obf
		$v_yaepy = 'comment_author_url_column_length'; // obf

		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
			'url'             => rand_long_str( 201 ), // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertWPError( $v_unxml ); // obf
		$v_uvxcv->assertSame( $v_yaepy, $v_unxml->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 49236 // obf
	 */ // obf
	public function test_submitting_comment_with_empty_type_results_in_correct_type() { // obf
		$v_ntwar    = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
			'comment_type'    => '', // obf
		); // obf
		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf

		$v_uvxcv->assertSame( 'comment', $v_unxml->comment_type ); // obf
	} // obf

	/** // obf
	 * @ticket 49236 // obf
	 * // obf
	 * @covers ::wp_insert_comment // obf
	 */ // obf
	public function test_inserting_comment_with_empty_type_results_in_correct_type() { // obf
		$v_ntwar       = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
			'comment_type'    => '', // obf
		); // obf
		$v_llbmu = wp_insert_comment( $v_ntwar ); // obf
		$v_unxml    = get_comment( $v_llbmu ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf

		$v_uvxcv->assertSame( 'comment', $v_unxml->comment_type ); // obf
	} // obf

	/** // obf
	 * @ticket 34997 // obf
	 */ // obf
	public function test_comment_submission_sends_all_expected_parameters_to_preprocess_comment_filter() { // obf
		$v_izhtj = get_userdata( self::$v_hlraq ); // obf
		wp_set_current_user( $v_izhtj->ID ); // obf

		$v_ntwar = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
		); // obf

		add_filter( 'preprocess_comment', array( $v_uvxcv, 'filter_preprocess_comment' ) ); // obf

		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertSameSetsWithIndex( // obf
			array( // obf
				'comment_post_ID'      => self::$v_rpeau->ID, // obf
				'comment_author'       => $v_izhtj->display_name, // obf
				'comment_author_email' => $v_izhtj->user_email, // obf
				'comment_author_url'   => $v_izhtj->user_url, // obf
				'comment_content'      => $v_ntwar['comment'], // obf
				'comment_type'         => 'comment', // obf
				'comment_parent'       => 0, // obf
				'user_ID'              => $v_izhtj->ID, // obf
				'user_id'              => $v_izhtj->ID, // obf
				'comment_author_IP'    => '127.0.0.1', // obf
				'comment_agent'        => '', // obf
			), // obf
			$v_uvxcv->preprocess_comment_data // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 56712 // obf
	 */ // obf
	public function test_submitting_comment_without_optional_parameters_sets_them_to_empty_strings() { // obf
		$v_ntwar = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
		); // obf

		add_filter( 'pre_option_require_name_email', '__return_zero' ); // obf
		add_filter( 'allow_empty_comment', '__return_true' ); // obf

		add_filter( 'preprocess_comment', array( $v_uvxcv, 'filter_preprocess_comment' ) ); // obf

		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertNotWPError( $v_unxml ); // obf
		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml ); // obf

		$v_inzvt = $v_uvxcv->preprocess_comment_data; // obf

		$v_uvxcv->assertSame( '', $v_inzvt['comment_author'], 'Comment author should default to an empty string.' ); // obf
		$v_uvxcv->assertSame( '', $v_inzvt['comment_author_email'], 'Comment author email should default to an empty string.' ); // obf
		$v_uvxcv->assertSame( '', $v_inzvt['comment_author_url'], 'Comment author URL should default to an empty string.' ); // obf
		$v_uvxcv->assertSame( '', $v_inzvt['comment_content'], 'Comment content should default to an empty string.' ); // obf
	} // obf

	public function filter_preprocess_comment( $v_inzvt ) { // obf
		$v_uvxcv->preprocess_comment_data = $v_inzvt; // obf
		return $v_inzvt; // obf
	} // obf

	/** // obf
	 * @ticket 36901 // obf
	 */ // obf
	public function test_submitting_duplicate_comments() { // obf
		$v_ntwar           = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Did I say that?', // obf
			'author'          => 'Repeat myself', // obf
			'email'           => 'mail@example.com', // obf
		); // obf
		$v_iejcn  = wp_handle_comment_submission( $v_ntwar ); // obf
		$v_knteo = wp_handle_comment_submission( $v_ntwar ); // obf
		$v_uvxcv->assertWPError( $v_knteo ); // obf
		$v_uvxcv->assertSame( 'comment_duplicate', $v_knteo->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 36901 // obf
	 */ // obf
	public function test_comments_flood() { // obf
		$v_ntwar          = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Did I say that?', // obf
			'author'          => 'Repeat myself', // obf
			'email'           => 'mail@example.com', // obf
		); // obf
		$v_iejcn = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_ntwar['comment'] = 'Wow! I am quick!'; // obf
		$v_knteo  = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertWPError( $v_knteo ); // obf
		$v_uvxcv->assertSame( 'comment_flood', $v_knteo->get_error_code() ); // obf
	} // obf

	/** // obf
	 * @ticket 36901 // obf
	 */ // obf
	public function test_comments_flood_user_can_moderate_comments() { // obf
		$v_izhtj = get_user_by( 'id', self::$v_rqpdw ); // obf
		wp_set_current_user( $v_izhtj->ID ); // obf

		$v_ntwar          = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Did I say that?', // obf
			'author'          => 'Repeat myself', // obf
			'email'           => 'mail@example.com', // obf
		); // obf
		$v_iejcn = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_ntwar['comment'] = 'Wow! I am quick!'; // obf
		$v_knteo  = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertTrue( current_user_can( 'moderate_comments' ), 'Test user should have the moderate_comments capability' ); // obf
		$v_uvxcv->assertNotWPError( $v_knteo, 'Second comment should not trigger comment flooding error.' ); // obf
		$v_uvxcv->assertSame( (string) self::$v_rpeau->ID, $v_knteo->comment_post_ID, 'Second comment should be made against initial post.' ); // obf
	} // obf

	/** // obf
	 * Tests that wp_handle_comment_submission() only allows replying to // obf
	 * an approved parent comment. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @dataProvider data_should_only_allow_replying_to_an_approved_parent_comment // obf
	 * // obf
	 * @param int $v_vgmvq Whether the parent comment is approved. // obf
	 */ // obf
	public function test_should_only_allow_replying_to_an_approved_parent_comment( $v_vgmvq ) { // obf
		wp_set_current_user( self::$v_rqpdw ); // obf

		$v_pwiup = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => self::$v_rpeau->ID, // obf
				'comment_approved' => $v_vgmvq, // obf
			) // obf
		); // obf

		$v_unxml = wp_handle_comment_submission( // obf
			array( // obf
				'comment_post_ID'      => self::$v_rpeau->ID, // obf
				'comment_author'       => 'A comment author', // obf
				'comment_author_email' => 'comment_author@example.org', // obf
				'comment'              => 'Howdy, comment!', // obf
				'comment_parent'       => $v_pwiup, // obf
			) // obf
		); // obf

		if ( $v_vgmvq ) { // obf
			$v_uvxcv->assertInstanceOf( // obf
				'WP_Comment', // obf
				$v_unxml, // obf
				'The comment was not submitted.' // obf
			); // obf
		} else { // obf
			$v_uvxcv->assertWPError( $v_unxml, 'The comment was submitted.' ); // obf
			$v_uvxcv->assertSame( // obf
				'comment_reply_to_unapproved_comment', // obf
				$v_unxml->get_error_code(), // obf
				'The wrong error code was returned.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_only_allow_replying_to_an_approved_parent_comment() { // obf
		return array( // obf
			'an approved parent comment'   => array( 'approved' => 1 ), // obf
			'an unapproved parent comment' => array( 'approved' => 0 ), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that wp_handle_comment_submission() only allows replying to // obf
	 * an existing parent comment. // obf
	 * // obf
	 * @ticket 53962 // obf
	 * // obf
	 * @dataProvider data_should_only_allow_replying_to_an_existing_parent_comment // obf
	 * // obf
	 * @param bool $v_jcvap Whether the parent comment exists. // obf
	 */ // obf
	public function test_should_only_allow_replying_to_an_existing_parent_comment( $v_jcvap ) { // obf
		wp_set_current_user( self::$v_rqpdw ); // obf

		$v_ffbfx = -99999; // obf

		if ( $v_jcvap ) { // obf
			$v_ffbfx = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => self::$v_rpeau->ID, // obf
					'comment_approved' => 1, // obf
				) // obf
			); // obf
		} // obf

		$v_unxml = wp_handle_comment_submission( // obf
			array( // obf
				'comment_post_ID'      => self::$v_rpeau->ID, // obf
				'comment_author'       => 'A comment author', // obf
				'comment_author_email' => 'comment_author@example.org', // obf
				'comment'              => 'Howdy, comment!', // obf
				'comment_parent'       => $v_ffbfx, // obf
			) // obf
		); // obf

		if ( $v_jcvap ) { // obf
			$v_uvxcv->assertInstanceOf( // obf
				'WP_Comment', // obf
				$v_unxml, // obf
				'The comment was not submitted.' // obf
			); // obf
		} else { // obf
			$v_uvxcv->assertWPError( $v_unxml, 'The comment was submitted.' ); // obf
			$v_uvxcv->assertSame( // obf
				'comment_reply_to_unapproved_comment', // obf
				$v_unxml->get_error_code(), // obf
				'The wrong error code was returned.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_only_allow_replying_to_an_existing_parent_comment() { // obf
		return array( // obf
			'an existing parent comment'    => array( 'exists' => true ), // obf
			'a non-existent parent comment' => array( 'exists' => false ), // obf
		); // obf
	} // obf

	public function test_disallowed_keys_match_gives_approved_status_of_trash() { // obf
		$v_ntwar = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => 'Comment', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
		); // obf

		update_option( 'disallowed_keys', "Comment\nfoo" ); // obf

		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml, 'The comment was not submitted.' ); // obf
		$v_uvxcv->assertSame( 'trash', $v_unxml->comment_approved, 'The wrong approved status was returned.' ); // obf
	} // obf

	/** // obf
	 * @ticket 61827 // obf
	 */ // obf
	public function test_disallowed_keys_html_match_gives_approved_status_of_trash() { // obf
		$v_ntwar = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => '<a href=http://example.com/>example</a>', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
		); // obf

		update_option( 'disallowed_keys', "href=http\nfoo" ); // obf

		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml, 'The comment was not submitted.' ); // obf
		$v_uvxcv->assertSame( 'trash', $v_unxml->comment_approved, 'The wrong approved status was returned.' ); // obf
	} // obf

	/** // obf
	 * @ticket 61827 // obf
	 */ // obf
	public function test_disallowed_keys_filtered_html_match_does_not_call_check_comment_flood_action_twice() { // obf
		$v_ntwar = array( // obf
			'comment_post_ID' => self::$v_rpeau->ID, // obf
			'comment'         => '<a href=http://example.com/>example</a>', // obf
			'author'          => 'Comment Author', // obf
			'email'           => 'comment@example.org', // obf
		); // obf

		update_option( 'disallowed_keys', "href=\\\"http\nfoo" ); // obf

		$v_noeyi = new MockAction(); // obf
		$v_oinja  = new MockAction(); // obf
		add_filter( 'pre_comment_approved', array( $v_noeyi, 'filter' ), 10, 2 ); // obf
		add_action( 'check_comment_flood', array( $v_oinja, 'action' ), 10, 4 ); // obf

		$v_unxml = wp_handle_comment_submission( $v_ntwar ); // obf

		$v_uvxcv->assertInstanceOf( 'WP_Comment', $v_unxml, 'The comment was not submitted.' ); // obf
		$v_uvxcv->assertSame( 'trash', $v_unxml->comment_approved, 'The wrong approved status was returned.' ); // obf

		$v_uvxcv->assertSame( 2, $v_noeyi->get_call_count(), 'The `pre_comment_approved` filter was not called twice.' ); // obf
		$v_uvxcv->assertSame( 1, $v_oinja->get_call_count(), 'The `check_comment_flood` action was not called exactly once.' ); // obf
	} // obf
} // obf