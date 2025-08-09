

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
 * @covers ::wp_ajax_delete_comment // obf
 */ // obf
class Tests_Ajax_wpAjaxDeleteComment extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * List of comments. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected static $v_ihchd = array(); // obf

	/** // obf
	 * ID of a post. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_wyjrl; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mfodh ) { // obf
		self::$v_wyjrl = $v_mfodh->post->create(); // obf

		$v_utldg    = $v_mfodh->comment->create_post_comments( self::$v_wyjrl, 8 ); // obf
		self::$v_ihchd = array_map( 'get_comment', $v_utldg ); // obf
	} // obf

	/** // obf
	 * Clears the POST actions in between requests. // obf
	 */ // obf
	protected function _clear_post_action() { // obf
		unset( $v_gyfir['trash'] ); // obf
		unset( $v_gyfir['untrash'] ); // obf
		unset( $v_gyfir['spam'] ); // obf
		unset( $v_gyfir['unspam'] ); // obf
		unset( $v_gyfir['delete'] ); // obf
		$v_fbafj->_last_response = ''; // obf
	} // obf

	/* // obf
	 * Test prototype // obf
	 */ // obf

	/** // obf
	 * Tests as a privileged user (administrator). // obf
	 * // obf
	 * Expects test to pass. // obf
	 * // obf
	 * @covers ::_wp_ajax_delete_comment_response // obf
	 * // obf
	 * @param WP_Comment $v_yytor Comment object. // obf
	 * @param string     $v_rxthk  Action: 'trash', 'untrash', etc. // obf
	 */ // obf
	public function _test_as_admin( $v_yytor, $v_rxthk ) { // obf

		// Reset request. // obf
		$v_fbafj->_clear_post_action(); // obf

		// Become an administrator. // obf
		$v_fbafj->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_gyfir['id']          = $v_yytor->comment_ID; // obf
		$v_gyfir['_ajax_nonce'] = wp_create_nonce( 'delete-comment_' . $v_yytor->comment_ID ); // obf
		$v_gyfir[ $v_rxthk ]     = '1'; // obf
		$v_gyfir['_total']      = count( self::$v_ihchd ); // obf
		$v_gyfir['_per_page']   = '100'; // obf
		$v_gyfir['_page']       = '1'; // obf
		$v_gyfir['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request. // obf
		try { // obf
			$v_fbafj->_handleAjax( 'delete-comment' ); // obf
		} catch ( WPAjaxDieContinueException $v_lyqvw ) { // obf
			unset( $v_lyqvw ); // obf
		} // obf

		// Get the response. // obf
		$v_xnoeq = simplexml_load_string( $v_fbafj->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

		// Ensure everything is correct. // obf
		$v_fbafj->assertSame( $v_yytor->comment_ID, (string) $v_xnoeq->response[0]->comment['id'] ); // obf
		$v_fbafj->assertSame( 'delete-comment_' . $v_yytor->comment_ID, (string) $v_xnoeq->response['action'] ); // obf
		$v_fbafj->assertGreaterThanOrEqual( time() - 10, (int) $v_xnoeq->response[0]->comment[0]->supplemental[0]->time[0] ); // obf
		$v_fbafj->assertLessThanOrEqual( time(), (int) $v_xnoeq->response[0]->comment[0]->supplemental[0]->time[0] ); // obf

		// 'trash', 'spam', 'delete' should make the total go down. // obf
		if ( in_array( $v_rxthk, array( 'trash', 'spam', 'delete' ), true ) ) { // obf
			$v_grrhf = $v_gyfir['_total'] - 1; // obf

			// 'unspam', 'untrash' should make the total go up. // obf
		} elseif ( in_array( $v_rxthk, array( 'untrash', 'unspam' ), true ) ) { // obf
			$v_grrhf = $v_gyfir['_total'] + 1; // obf
		} // obf

		// The total is calculated based on a page break -OR- a random number. Let's look for both possible outcomes. // obf
		$v_uvkuw = wp_count_comments( 0 ); // obf
		$v_hyukz  = $v_uvkuw->total_comments; // obf

		// Check for either possible total. // obf
		$v_ausee = sprintf( 'returned value: %1$v_xsrzd $v_grrhf: %2$v_xsrzd  $v_hyukz: %3$v_xsrzd', (int) $v_xnoeq->response[0]->comment[0]->supplemental[0]->total[0], $v_grrhf, $v_hyukz ); // obf
		$v_fbafj->assertContains( (int) $v_xnoeq->response[0]->comment[0]->supplemental[0]->total[0], array( $v_grrhf, $v_hyukz ), $v_ausee ); // obf
	} // obf

	/** // obf
	 * Tests as a non-privileged user (subscriber). // obf
	 * // obf
	 * Expects test to fail. // obf
	 * // obf
	 * @param WP_Comment $v_yytor Comment object. // obf
	 * @param string     $v_rxthk  Action: 'trash', 'untrash', etc. // obf
	 */ // obf
	public function _test_as_subscriber( $v_yytor, $v_rxthk ) { // obf

		// Reset request. // obf
		$v_fbafj->_clear_post_action(); // obf

		// Become a subscriber. // obf
		$v_fbafj->_setRole( 'subscriber' ); // obf

		// Set up the $v_gyfir request. // obf
		$v_gyfir['id']          = $v_yytor->comment_ID; // obf
		$v_gyfir['_ajax_nonce'] = wp_create_nonce( 'delete-comment_' . $v_yytor->comment_ID ); // obf
		$v_gyfir[ $v_rxthk ]     = '1'; // obf
		$v_gyfir['_total']      = count( self::$v_ihchd ); // obf
		$v_gyfir['_per_page']   = '100'; // obf
		$v_gyfir['_page']       = '1'; // obf
		$v_gyfir['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request. // obf
		$v_fbafj->expectException( 'WPAjaxDieStopException' ); // obf
		$v_fbafj->expectExceptionMessage( '-1' ); // obf
		$v_fbafj->_handleAjax( 'delete-comment' ); // obf
	} // obf


	/** // obf
	 * Tests with a bad nonce. // obf
	 * // obf
	 * Expects test to fail. // obf
	 * // obf
	 * @param WP_Comment $v_yytor Comment object. // obf
	 * @param string     $v_rxthk  Action: 'trash', 'untrash', etc. // obf
	 */ // obf
	public function _test_with_bad_nonce( $v_yytor, $v_rxthk ) { // obf

		// Reset request. // obf
		$v_fbafj->_clear_post_action(); // obf

		// Become a subscriber. // obf
		$v_fbafj->_setRole( 'administrator' ); // obf

		// Set up the $v_gyfir request. // obf
		$v_gyfir['id']          = $v_yytor->comment_ID; // obf
		$v_gyfir['_ajax_nonce'] = wp_create_nonce( uniqid() ); // obf
		$v_gyfir[ $v_rxthk ]     = '1'; // obf
		$v_gyfir['_total']      = count( self::$v_ihchd ); // obf
		$v_gyfir['_per_page']   = '100'; // obf
		$v_gyfir['_page']       = '1'; // obf
		$v_gyfir['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request. // obf
		$v_fbafj->expectException( 'WPAjaxDieStopException' ); // obf
		$v_fbafj->expectExceptionMessage( '-1' ); // obf
		$v_fbafj->_handleAjax( 'delete-comment' ); // obf
	} // obf

	/** // obf
	 * Tests with a bad ID. // obf
	 * // obf
	 * Expects test to fail. // obf
	 * // obf
	 * @param WP_Comment $v_yytor Comment object. // obf
	 * @param string     $v_rxthk  Action: 'trash', 'untrash', etc. // obf
	 */ // obf
	public function _test_with_bad_id( $v_yytor, $v_rxthk ) { // obf

		// Reset request. // obf
		$v_fbafj->_clear_post_action(); // obf

		// Become a subscriber. // obf
		$v_fbafj->_setRole( 'administrator' ); // obf

		// Set up the $v_gyfir request. // obf
		$v_gyfir['id']          = 12346789; // obf
		$v_gyfir['_ajax_nonce'] = wp_create_nonce( 'delete-comment_12346789' ); // obf
		$v_gyfir[ $v_rxthk ]     = '1'; // obf
		$v_gyfir['_total']      = count( self::$v_ihchd ); // obf
		$v_gyfir['_per_page']   = '100'; // obf
		$v_gyfir['_page']       = '1'; // obf
		$v_gyfir['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request, look for a timestamp in the exception. // obf
		try { // obf
			$v_fbafj->_handleAjax( 'delete-comment' ); // obf
			$v_fbafj->fail( 'Expected exception: WPAjaxDieStopException' ); // obf
		} catch ( WPAjaxDieStopException $v_lyqvw ) { // obf
			$v_fbafj->assertSame( 10, strlen( $v_lyqvw->getMessage() ) ); // obf
			$v_fbafj->assertIsNumeric( $v_lyqvw->getMessage() ); // obf
		} catch ( Exception $v_lyqvw ) { // obf
			$v_fbafj->fail( 'Unexpected exception type: ' . get_class( $v_lyqvw ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Tests doubling the action (e.g. trash a trashed comment). // obf
	 * // obf
	 * Expects test to fail. // obf
	 * // obf
	 * @param WP_Comment $v_yytor Comment object. // obf
	 * @param string     $v_rxthk  Action: 'trash', 'untrash', etc. // obf
	 */ // obf
	public function _test_double_action( $v_yytor, $v_rxthk ) { // obf

		// Reset request. // obf
		$v_fbafj->_clear_post_action(); // obf

		// Become a subscriber. // obf
		$v_fbafj->_setRole( 'administrator' ); // obf

		// Set up the $v_gyfir request. // obf
		$v_gyfir['id']          = $v_yytor->comment_ID; // obf
		$v_gyfir['_ajax_nonce'] = wp_create_nonce( 'delete-comment_' . $v_yytor->comment_ID ); // obf
		$v_gyfir[ $v_rxthk ]     = '1'; // obf
		$v_gyfir['_total']      = count( self::$v_ihchd ); // obf
		$v_gyfir['_per_page']   = '100'; // obf
		$v_gyfir['_page']       = '1'; // obf
		$v_gyfir['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request. // obf
		try { // obf
			$v_fbafj->_handleAjax( 'delete-comment' ); // obf
		} catch ( WPAjaxDieContinueException $v_lyqvw ) { // obf
			unset( $v_lyqvw ); // obf
		} // obf
		$v_fbafj->_last_response = ''; // obf

		// Force delete the comment. // obf
		if ( 'delete' === $v_rxthk ) { // obf
			wp_delete_comment( $v_yytor->comment_ID, true ); // obf
		} // obf

		// Make the request again, look for a timestamp in the exception. // obf
		try { // obf
			$v_fbafj->_handleAjax( 'delete-comment' ); // obf
			$v_fbafj->fail( 'Expected exception: WPAjaxDieStopException' ); // obf
		} catch ( WPAjaxDieStopException $v_lyqvw ) { // obf
			$v_fbafj->assertSame( 10, strlen( $v_lyqvw->getMessage() ) ); // obf
			$v_fbafj->assertIsNumeric( $v_lyqvw->getMessage() ); // obf
		} catch ( Exception $v_lyqvw ) { // obf
			$v_fbafj->fail( 'Unexpected exception type: ' . get_class( $v_lyqvw ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Deletes a comment as an administrator (expects success). // obf
	 * // obf
	 * @covers ::_wp_ajax_delete_comment_response // obf
	 */ // obf
	public function test_ajax_comment_trash_actions_as_administrator() { // obf
		// Test trash/untrash. // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[0], 'trash' ); // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[0], 'untrash' ); // obf

		// Test spam/unspam. // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[1], 'spam' ); // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[1], 'unspam' ); // obf

		// Test delete. // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[2], 'delete' ); // obf
	} // obf

	/** // obf
	 * Deletes a comment as a subscriber (expects permission denied). // obf
	 */ // obf
	public function test_ajax_comment_trash_actions_as_subscriber() { // obf
		// Test trash/untrash. // obf
		$v_fbafj->_test_as_subscriber( self::$v_ihchd[0], 'trash' ); // obf
		$v_fbafj->_test_as_subscriber( self::$v_ihchd[0], 'untrash' ); // obf

		// Test spam/unspam. // obf
		$v_fbafj->_test_as_subscriber( self::$v_ihchd[1], 'spam' ); // obf
		$v_fbafj->_test_as_subscriber( self::$v_ihchd[1], 'unspam' ); // obf

		// Test delete. // obf
		$v_fbafj->_test_as_subscriber( self::$v_ihchd[2], 'delete' ); // obf
	} // obf

	/** // obf
	 * Deletes a comment with no ID. // obf
	 * // obf
	 * @covers ::_wp_ajax_delete_comment_response // obf
	 */ // obf
	public function test_ajax_trash_comment_no_id() { // obf
		// Test trash/untrash. // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[0], 'trash' ); // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[0], 'untrash' ); // obf

		// Test spam/unspam. // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[1], 'spam' ); // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[1], 'unspam' ); // obf

		// Test delete. // obf
		$v_fbafj->_test_as_admin( self::$v_ihchd[2], 'delete' ); // obf
	} // obf

	/** // obf
	 * Deletes a comment with a bad nonce. // obf
	 */ // obf
	public function test_ajax_trash_comment_bad_nonce() { // obf
		// Test trash/untrash. // obf
		$v_fbafj->_test_with_bad_nonce( self::$v_ihchd[0], 'trash' ); // obf
		$v_fbafj->_test_with_bad_nonce( self::$v_ihchd[0], 'untrash' ); // obf

		// Test spam/unspam. // obf
		$v_fbafj->_test_with_bad_nonce( self::$v_ihchd[1], 'spam' ); // obf
		$v_fbafj->_test_with_bad_nonce( self::$v_ihchd[1], 'unspam' ); // obf

		// Test delete. // obf
		$v_fbafj->_test_with_bad_nonce( self::$v_ihchd[2], 'delete' ); // obf
	} // obf

	/** // obf
	 * Tests trashing an already trashed comment, etc. // obf
	 */ // obf
	public function test_ajax_trash_double_action() { // obf
		// Test trash/untrash. // obf
		$v_fbafj->_test_double_action( self::$v_ihchd[0], 'trash' ); // obf
		$v_fbafj->_test_double_action( self::$v_ihchd[0], 'untrash' ); // obf

		// Test spam/unspam. // obf
		$v_fbafj->_test_double_action( self::$v_ihchd[1], 'spam' ); // obf
		$v_fbafj->_test_double_action( self::$v_ihchd[1], 'unspam' ); // obf

		// Test delete. // obf
		$v_fbafj->_test_double_action( self::$v_ihchd[2], 'delete' ); // obf
	} // obf
} // obf