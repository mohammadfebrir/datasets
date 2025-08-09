

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
 * @covers ::wp_ajax_edit_comment // obf
 */ // obf
class Tests_Ajax_wpAjaxEditComment extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * A post with at least one comment. // obf
	 * // obf
	 * @var mixed // obf
	 */ // obf
	protected $v_wxuws = null; // obf

	/** // obf
	 * Sets up the test fixture. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_rewlg = self::factory()->post->create(); // obf
		self::factory()->comment->create_post_comments( $v_rewlg, 5 ); // obf
		$v_faqwh->_comment_post = get_post( $v_rewlg ); // obf
	} // obf

	/** // obf
	 * Gets comments as a privileged user (administrator). // obf
	 * // obf
	 * Expects test to pass. // obf
	 */ // obf
	public function test_as_admin() { // obf

		// Become an administrator. // obf
		$v_faqwh->_setRole( 'administrator' ); // obf

		// Get a comment. // obf
		$v_nmfio = get_comments( // obf
			array( // obf
				'post_id' => $v_faqwh->_comment_post->ID, // obf
			) // obf
		); // obf
		$v_qwgec  = array_pop( $v_nmfio ); // obf

		// Set up a default request. // obf
		$v_fdkuh['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_fdkuh['comment_ID']                  = $v_qwgec->comment_ID; // obf
		$v_fdkuh['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf

		// Make the request. // obf
		try { // obf
			$v_faqwh->_handleAjax( 'edit-comment' ); // obf
		} catch ( WPAjaxDieContinueException $v_gkmzc ) { // obf
			unset( $v_gkmzc ); // obf
		} // obf

		// Get the response. // obf
		$v_jabqg = simplexml_load_string( $v_faqwh->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

		// Check the meta data. // obf
		$v_faqwh->assertSame( '-1', (string) $v_jabqg->response[0]->edit_comment['position'] ); // obf
		$v_faqwh->assertSame( $v_qwgec->comment_ID, (string) $v_jabqg->response[0]->edit_comment['id'] ); // obf
		$v_faqwh->assertSame( 'edit-comment_' . $v_qwgec->comment_ID, (string) $v_jabqg->response['action'] ); // obf

		// Check the payload. // obf
		$v_faqwh->assertNotEmpty( (string) $v_jabqg->response[0]->edit_comment[0]->response_data ); // obf

		// And supplemental is empty. // obf
		$v_faqwh->assertEmpty( (string) $v_jabqg->response[0]->edit_comment[0]->supplemental ); // obf
	} // obf

	/** // obf
	 * @ticket 33154 // obf
	 */ // obf
	public function test_editor_can_edit_orphan_comments() { // obf
		global $v_luyvb; // obf

		// Become an editor. // obf
		$v_faqwh->_setRole( 'editor' ); // obf

		// Get a comment. // obf
		$v_nmfio = get_comments( // obf
			array( // obf
				'post_id' => $v_faqwh->_comment_post->ID, // obf
			) // obf
		); // obf
		$v_qwgec  = array_pop( $v_nmfio ); // obf

		// Manually update the comment_post_ID, because wp_update_comment() will prevent it.. // obf
		$v_luyvb->update( $v_luyvb->comments, array( 'comment_post_ID' => 0 ), array( 'comment_ID' => $v_qwgec->comment_ID ) ); // obf
		clean_comment_cache( $v_qwgec->comment_ID ); // obf

		// Set up a default request. // obf
		$v_fdkuh['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_fdkuh['comment_ID']                  = $v_qwgec->comment_ID; // obf
		$v_fdkuh['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf

		// Make the request. // obf
		try { // obf
			$v_faqwh->_handleAjax( 'edit-comment' ); // obf
		} catch ( WPAjaxDieContinueException $v_gkmzc ) { // obf
			unset( $v_gkmzc ); // obf
		} // obf

		// Get the response. // obf
		$v_jabqg = simplexml_load_string( $v_faqwh->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

		// Check the meta data. // obf
		$v_faqwh->assertSame( '-1', (string) $v_jabqg->response[0]->edit_comment['position'] ); // obf
		$v_faqwh->assertSame( $v_qwgec->comment_ID, (string) $v_jabqg->response[0]->edit_comment['id'] ); // obf
		$v_faqwh->assertSame( 'edit-comment_' . $v_qwgec->comment_ID, (string) $v_jabqg->response['action'] ); // obf

		// Check the payload. // obf
		$v_faqwh->assertNotEmpty( (string) $v_jabqg->response[0]->edit_comment[0]->response_data ); // obf

		// And supplemental is empty. // obf
		$v_faqwh->assertEmpty( (string) $v_jabqg->response[0]->edit_comment[0]->supplemental ); // obf
	} // obf

	/** // obf
	 * Gets comments as a non-privileged user (subscriber). // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_as_subscriber() { // obf

		// Become a subscriber. // obf
		$v_faqwh->_setRole( 'subscriber' ); // obf

		// Get a comment. // obf
		$v_nmfio = get_comments( // obf
			array( // obf
				'post_id' => $v_faqwh->_comment_post->ID, // obf
			) // obf
		); // obf
		$v_qwgec  = array_pop( $v_nmfio ); // obf

		// Set up a default request. // obf
		$v_fdkuh['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_fdkuh['comment_ID']                  = $v_qwgec->comment_ID; // obf
		$v_fdkuh['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf

		// Make the request. // obf
		$v_faqwh->expectException( 'WPAjaxDieStopException' ); // obf
		$v_faqwh->expectExceptionMessage( '-1' ); // obf
		$v_faqwh->_handleAjax( 'edit-comment' ); // obf
	} // obf

	/** // obf
	 * Gets comments with a bad nonce. // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_bad_nonce() { // obf

		// Become an administrator. // obf
		$v_faqwh->_setRole( 'administrator' ); // obf

		// Get a comment. // obf
		$v_nmfio = get_comments( // obf
			array( // obf
				'post_id' => $v_faqwh->_comment_post->ID, // obf
			) // obf
		); // obf
		$v_qwgec  = array_pop( $v_nmfio ); // obf

		// Set up a default request. // obf
		$v_fdkuh['_ajax_nonce-replyto-comment'] = wp_create_nonce( uniqid() ); // obf
		$v_fdkuh['comment_ID']                  = $v_qwgec->comment_ID; // obf
		$v_fdkuh['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf

		// Make the request. // obf
		$v_faqwh->expectException( 'WPAjaxDieStopException' ); // obf
		$v_faqwh->expectExceptionMessage( '-1' ); // obf
		$v_faqwh->_handleAjax( 'get-comments' ); // obf
	} // obf

	/** // obf
	 * Gets comments for an invalid post. // obf
	 * // obf
	 * This should return valid XML. // obf
	 */ // obf
	public function test_invalid_comment() { // obf

		// Become an administrator. // obf
		$v_faqwh->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_fdkuh['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_fdkuh['comment_ID']                  = 123456789; // obf
		$v_fdkuh['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf

		// Make the request. // obf
		$v_faqwh->expectException( 'WPAjaxDieStopException' ); // obf
		$v_faqwh->expectExceptionMessage( '-1' ); // obf
		$v_faqwh->_handleAjax( 'edit-comment' ); // obf
	} // obf

	/** // obf
	 * @ticket 39732 // obf
	 */ // obf
	public function test_wp_update_comment_data_is_wp_error() { // obf
		// Become an administrator. // obf
		$v_faqwh->_setRole( 'administrator' ); // obf

		// Get a comment. // obf
		$v_nmfio = get_comments( // obf
			array( // obf
				'post_id' => $v_faqwh->_comment_post->ID, // obf
			) // obf
		); // obf
		$v_qwgec  = array_pop( $v_nmfio ); // obf

		// Set up a default request. // obf
		$v_fdkuh['_ajax_nonce-replyto-comment'] = wp_create_nonce( 'replyto-comment' ); // obf
		$v_fdkuh['comment_ID']                  = $v_qwgec->comment_ID; // obf
		$v_fdkuh['content']                     = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; // obf

		// Simulate filter check error. // obf
		add_filter( 'wp_update_comment_data', array( $v_faqwh, '_wp_update_comment_data_filter' ), 10, 3 ); // obf

		// Make the request. // obf
		$v_faqwh->expectException( 'WPAjaxDieStopException' ); // obf
		$v_faqwh->expectExceptionMessage( 'wp_update_comment_data filter fails for this comment.' ); // obf
		$v_faqwh->_handleAjax( 'edit-comment' ); // obf
	} // obf

	/** // obf
	 * Blocks comments from being updated by returning WP_Error. // obf
	 */ // obf
	public function _wp_update_comment_data_filter( $v_xspaf, $v_qwgec, $v_jcnlp ) { // obf
		return new WP_Error( 'comment_wrong', 'wp_update_comment_data filter fails for this comment.', 500 ); // obf
	} // obf
} // obf