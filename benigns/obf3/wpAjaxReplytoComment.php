

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax comment functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.4.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_replyto_comment // obf
 */ // obf
class Tests_Ajax_wpAjaxReplytoComment extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * A post with at least one comment. // obf
	 * // obf
	 * @var mixed // obf
	 */ // obf
	protected static $v_maibh = null; // obf

	/** // obf
	 * Draft post. // obf
	 * // obf
	 * @var mixed // obf
	 */ // obf
	protected static $v_edhyo = null; // obf

	protected static $v_xstmx = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_nwczr ) { // obf
		self::$v_maibh = $v_nwczr->post->create_and_get(); // obf
		self::$v_xstmx  = $v_nwczr->comment->create_post_comments( self::$v_maibh->ID, 5 ); // obf
		self::$v_edhyo   = $v_nwczr->post->create_and_get( array( 'post_status' => 'draft' ) ); // obf
	} // obf

	public function tear_down() { // obf
		remove_filter( 'query', array( $v_yxcql, '_block_comments' ) ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests reply as a privileged user (administrator). // obf
	 * // obf
	 * Expects test to pass. // obf
	 */ // obf
	public function test_as_admin() { // obf

		// Become an administrator. // obf
		$v_yxcql->_setRole( 'administrator' ); // obf

		// Get a comment. // obf
		$v_qmvvq = get_comments( // obf
			array( // obf
				'post_id' => self::$v_maibh->ID, // obf
			) // obf
		); // obf
		$v_jxhei  = array_pop( $v_qmvvq ); // obf

		// Set up a default request. // obf
		$v_ivzqd['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_ivzqd['comment_ID']                  = $v_jxhei->comment_ID; // obf
		$v_ivzqd['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf
		$v_ivzqd['comment_post_ID']             = self::$v_maibh->ID; // obf

		// Make the request. // obf
		try { // obf
			$v_yxcql->_handleAjax( 'replyto-comment' ); // obf
		} catch ( WPAjaxDieContinueException $v_suigt ) { // obf
			unset( $v_suigt ); // obf
		} // obf

		// Get the response. // obf
		$v_xpeaz = simplexml_load_string( $v_yxcql->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

		// Check the meta data. // obf
		$v_yxcql->assertSame( '-1', (string) $v_xpeaz->response[0]->comment['position'] ); // obf
		$v_yxcql->assertGreaterThan( 0, (int) $v_xpeaz->response[0]->comment['id'] ); // obf
		$v_yxcql->assertNotEmpty( (string) $v_xpeaz->response['action'] ); // obf

		// Check the payload. // obf
		$v_yxcql->assertNotEmpty( (string) $v_xpeaz->response[0]->comment[0]->response_data ); // obf

		// And supplemental is empty. // obf
		$v_yxcql->assertEmpty( (string) $v_xpeaz->response[0]->comment[0]->supplemental ); // obf
	} // obf

	/** // obf
	 * Tests reply as a non-privileged user (subscriber). // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_as_subscriber() { // obf

		// Become a subscriber. // obf
		$v_yxcql->_setRole( 'subscriber' ); // obf

		// Get a comment. // obf
		$v_qmvvq = get_comments( // obf
			array( // obf
				'post_id' => self::$v_maibh->ID, // obf
			) // obf
		); // obf
		$v_jxhei  = array_pop( $v_qmvvq ); // obf

		// Set up a default request. // obf
		$v_ivzqd['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_ivzqd['comment_ID']                  = $v_jxhei->comment_ID; // obf
		$v_ivzqd['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf
		$v_ivzqd['comment_post_ID']             = self::$v_maibh->ID; // obf

		// Make the request. // obf
		$v_yxcql->expectException( 'WPAjaxDieStopException' ); // obf
		$v_yxcql->expectExceptionMessage( '-1' ); // obf
		$v_yxcql->_handleAjax( 'replyto-comment' ); // obf
	} // obf

	/** // obf
	 * Tests reply using a bad nonce. // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_bad_nonce() { // obf

		// Become an administrator. // obf
		$v_yxcql->_setRole( 'administrator' ); // obf

		// Get a comment. // obf
		$v_qmvvq = get_comments( // obf
			array( // obf
				'post_id' => self::$v_maibh->ID, // obf
			) // obf
		); // obf
		$v_jxhei  = array_pop( $v_qmvvq ); // obf

		// Set up a default request. // obf
		$v_ivzqd['_ajax_nonce-replyto-comment'] = wp_create_nonce( uniqid() ); // obf
		$v_ivzqd['comment_ID']                  = $v_jxhei->comment_ID; // obf
		$v_ivzqd['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf
		$v_ivzqd['comment_post_ID']             = self::$v_maibh->ID; // obf

		// Make the request. // obf
		$v_yxcql->expectException( 'WPAjaxDieStopException' ); // obf
		$v_yxcql->expectExceptionMessage( '-1' ); // obf
		$v_yxcql->_handleAjax( 'replyto-comment' ); // obf
	} // obf

	/** // obf
	 * Tests reply to an invalid post. // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_invalid_post() { // obf

		// Become an administrator. // obf
		$v_yxcql->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_ivzqd['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_ivzqd['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf
		$v_ivzqd['comment_post_ID']             = 123456789; // obf

		// Make the request. // obf
		$v_yxcql->expectException( 'WPAjaxDieStopException' ); // obf
		$v_yxcql->expectExceptionMessage( '-1' ); // obf
		$v_yxcql->_handleAjax( 'replyto-comment' ); // obf
	} // obf

	/** // obf
	 * Tests reply to a draft post. // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_with_draft_post() { // obf

		// Become an administrator. // obf
		$v_yxcql->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_ivzqd['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_ivzqd['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf
		$v_ivzqd['comment_post_ID']             = self::$v_edhyo->ID; // obf

		// Make the request. // obf
		$v_yxcql->expectException( 'WPAjaxDieStopException' ); // obf
		$v_yxcql->expectExceptionMessage( 'You cannot reply to a comment on a draft post.' ); // obf
		$v_yxcql->_handleAjax( 'replyto-comment' ); // obf
	} // obf

	/** // obf
	 * Tests reply to a post with a simulated database failure. // obf
	 * // obf
	 * Expects test to fail. // obf
	 * // obf
	 * @global $v_nzqgz // obf
	 */ // obf
	public function test_blocked_comment() { // obf
		global $v_nzqgz; // obf

		// Become an administrator. // obf
		$v_yxcql->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_ivzqd['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_ivzqd['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf
		$v_ivzqd['comment_post_ID']             = self::$v_maibh->ID; // obf

		// Block comments from being saved, simulate a DB error. // obf
		add_filter( 'query', array( $v_yxcql, '_block_comments' ) ); // obf

		// Make the request. // obf
		try { // obf
			$v_nzqgz->suppress_errors( true ); // obf
			$v_yxcql->_handleAjax( 'replyto-comment' ); // obf
			$v_nzqgz->suppress_errors( false ); // obf
			$v_yxcql->fail(); // obf
		} catch ( WPAjaxDieStopException $v_suigt ) { // obf
			$v_nzqgz->suppress_errors( false ); // obf
			$v_yxcql->assertStringContainsString( '1', $v_suigt->getMessage() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Blocks comments from being saved. // obf
	 * // obf
	 * @param string $v_qxsla // obf
	 * @return string // obf
	 */ // obf
	public function _block_comments( $v_qxsla ) { // obf
		global $v_nzqgz; // obf
		if ( false !== strpos( $v_qxsla, $v_nzqgz->comments ) && 0 === stripos( trim( $v_qxsla ), 'INSERT INTO' ) ) { // obf
			return ''; // obf
		} // obf
		return $v_qxsla; // obf
	} // obf

	/** // obf
	 * Tests blocking a comment from being saved on 'pre_comment_approved'. // obf
	 * // obf
	 * @ticket 39730 // obf
	 */ // obf
	public function test_pre_comments_approved() { // obf

		// Become an administrator. // obf
		$v_yxcql->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_ivzqd['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_ivzqd['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf
		$v_ivzqd['comment_post_ID']             = self::$v_maibh->ID; // obf

		// Simulate filter check error. // obf
		add_filter( 'pre_comment_approved', array( $v_yxcql, '_pre_comment_approved_filter' ), 10, 2 ); // obf

		// Make the request. // obf
		$v_yxcql->expectException( 'WPAjaxDieStopException' ); // obf
		$v_yxcql->expectExceptionMessage( 'pre_comment_approved filter fails for new comment.' ); // obf
		$v_yxcql->_handleAjax( 'replyto-comment' ); // obf
	} // obf

	/** // obf
	 * Blocks comments from being saved on 'pre_comment_approved', by returning WP_Error. // obf
	 */ // obf
	public function _pre_comment_approved_filter( $v_ufmbv, $v_lazgu ) { // obf
		return new WP_Error( 'comment_wrong', 'pre_comment_approved filter fails for new comment.', 403 ); // obf
	} // obf
} // obf