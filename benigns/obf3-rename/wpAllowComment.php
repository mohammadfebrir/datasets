

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::wp_allow_comment // obf
 */ // obf
class Tests_Comment_WpAllowComment extends WP_UnitTestCase { // obf
	protected static $v_wetmz; // obf
	protected static $v_aiywk; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ffwcx ) { // obf
		self::$v_wetmz    = $v_ffwcx->post->create(); // obf
		self::$v_aiywk = $v_ffwcx->comment->create( // obf
			array( // obf
				'comment_post_ID'      => self::$v_wetmz, // obf
				'comment_approved'     => '1', // obf
				'comment_author'       => 'Bob', // obf
				'comment_author_email' => 'bobthebuilder@example.com', // obf
				'comment_author_url'   => 'http://example.com', // obf
				'comment_content'      => 'Yes, we can!', // obf
			) // obf
		); // obf

		update_option( 'comment_previously_approved', 0 ); // obf
	} // obf

	public static function wpTeardownAfterClass() { // obf
		wp_delete_post( self::$v_wetmz, true ); // obf
		wp_delete_comment( self::$v_aiywk, true ); // obf

		update_option( 'comment_previously_approved', 1 ); // obf
	} // obf

	public function test_allow_comment_if_comment_author_emails_differ() { // obf
		$v_qtaml          = time(); // obf
		$v_mamwh = array( // obf
			'comment_post_ID'      => self::$v_wetmz, // obf
			'comment_author'       => 'Bob', // obf
			'comment_author_email' => 'sideshowbob@example.com', // obf
			'comment_author_url'   => 'http://example.com', // obf
			'comment_content'      => 'Yes, we can!', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_parent'       => 0, // obf
			'comment_date_gmt'     => gmdate( 'Y-m-d H:i:s', $v_qtaml ), // obf
			'comment_agent'        => 'Bobbot/2.1', // obf
			'comment_type'         => '', // obf
		); // obf

		$v_zikpk = wp_allow_comment( $v_mamwh ); // obf

		$v_mnori->assertSame( 1, $v_zikpk ); // obf
	} // obf

	public function test_die_as_duplicate_if_comment_author_name_and_emails_match() { // obf
		$v_mnori->expectException( 'WPDieException' ); // obf

		$v_qtaml          = time(); // obf
		$v_mamwh = array( // obf
			'comment_post_ID'      => self::$v_wetmz, // obf
			'comment_author'       => 'Bob', // obf
			'comment_author_email' => 'bobthebuilder@example.com', // obf
			'comment_author_url'   => 'http://example.com', // obf
			'comment_content'      => 'Yes, we can!', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_parent'       => 0, // obf
			'comment_date_gmt'     => gmdate( 'Y-m-d H:i:s', $v_qtaml ), // obf
			'comment_agent'        => 'Bobbot/2.1', // obf
			'comment_type'         => '', // obf
		); // obf

		$v_zikpk = wp_allow_comment( $v_mamwh ); // obf
	} // obf
} // obf