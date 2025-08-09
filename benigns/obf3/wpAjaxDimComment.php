

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax comment functionality // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.4.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_dim_comment // obf
 */ // obf
class Tests_Ajax_wpAjaxDimComment extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * List of comments. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	protected $v_jupdl = array(); // obf

	/** // obf
	 * Sets up the test fixture. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		$v_kobzn         = self::factory()->post->create(); // obf
		$v_tvzct->_comments = self::factory()->comment->create_post_comments( $v_kobzn, 15 ); // obf
		$v_tvzct->_comments = array_map( 'get_comment', $v_tvzct->_comments ); // obf
	} // obf

	/** // obf
	 * Clears the POST actions in between requests. // obf
	 */ // obf
	protected function _clear_post_action() { // obf
		unset( $v_qucro['id'] ); // obf
		unset( $v_qucro['new'] ); // obf
		$v_tvzct->_last_response = ''; // obf
	} // obf

	/* // obf
	 * Test prototype // obf
	 */ // obf

	/** // obf
	 * Tests as a privileged user (administrator). // obf
	 * // obf
	 * Expects test to pass. // obf
	 * // obf
	 * @param WP_Comment $v_pkbcj Comment object. // obf
	 */ // obf
	public function _test_as_admin( $v_pkbcj ) { // obf

		// Reset request. // obf
		$v_tvzct->_clear_post_action(); // obf

		// Become an administrator. // obf
		$v_tvzct->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_qucro['id']          = $v_pkbcj->comment_ID; // obf
		$v_qucro['_ajax_nonce'] = wp_create_nonce( 'approve-comment_' . $v_pkbcj->comment_ID ); // obf
		$v_qucro['_total']      = count( $v_tvzct->_comments ); // obf
		$v_qucro['_per_page']   = 100; // obf
		$v_qucro['_page']       = 1; // obf
		$v_qucro['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Save the comment status. // obf
		$v_povva = wp_get_comment_status( $v_pkbcj->comment_ID ); // obf

		// Make the request. // obf
		try { // obf
			$v_tvzct->_handleAjax( 'dim-comment' ); // obf
		} catch ( WPAjaxDieContinueException $v_nqqoi ) { // obf
			unset( $v_nqqoi ); // obf
		} // obf

		// Get the response. // obf
		$v_utuza = simplexml_load_string( $v_tvzct->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

		// Ensure everything is correct. // obf
		$v_tvzct->assertSame( $v_pkbcj->comment_ID, (string) $v_utuza->response[0]->comment['id'] ); // obf
		$v_tvzct->assertSame( 'dim-comment_' . $v_pkbcj->comment_ID, (string) $v_utuza->response['action'] ); // obf
		$v_tvzct->assertGreaterThanOrEqual( time() - 10, (int) $v_utuza->response[0]->comment[0]->supplemental[0]->time[0] ); // obf
		$v_tvzct->assertLessThanOrEqual( time(), (int) $v_utuza->response[0]->comment[0]->supplemental[0]->time[0] ); // obf

		// Check the status. // obf
		$v_tvisr = wp_get_comment_status( $v_pkbcj->comment_ID ); // obf
		if ( in_array( $v_povva, array( 'unapproved', 'spam' ), true ) ) { // obf
			$v_tvzct->assertSame( 'approved', $v_tvisr ); // obf
		} else { // obf
			$v_tvzct->assertSame( 'unapproved', $v_tvisr ); // obf
		} // obf

		// The total is calculated based on a page break -OR- a random number. Let's look for both possible outcomes. // obf
		$v_bfyhp = wp_count_comments( 0 ); // obf
		$v_vaybs  = $v_bfyhp->total_comments; // obf

		// Delta is not specified, it will always be 1 lower than the request. // obf
		$v_wtlpy = $v_qucro['_total'] - 1; // obf

		// Check for either possible total. // obf
		$v_tvzct->assertContains( (int) $v_utuza->response[0]->comment[0]->supplemental[0]->total[0], array( $v_wtlpy, $v_vaybs ) ); // obf
	} // obf

	/** // obf
	 * Tests as a non-privileged user (subscriber). // obf
	 * // obf
	 * Expects test to fail. // obf
	 * // obf
	 * @param WP_Comment $v_pkbcj Comment object. // obf
	 */ // obf
	public function _test_as_subscriber( $v_pkbcj ) { // obf

		// Reset request. // obf
		$v_tvzct->_clear_post_action(); // obf

		// Become a subscriber. // obf
		$v_tvzct->_setRole( 'subscriber' ); // obf

		// Set up the $v_qucro request. // obf
		$v_qucro['id']          = $v_pkbcj->comment_ID; // obf
		$v_qucro['_ajax_nonce'] = wp_create_nonce( 'approve-comment_' . $v_pkbcj->comment_ID ); // obf
		$v_qucro['_total']      = count( $v_tvzct->_comments ); // obf
		$v_qucro['_per_page']   = 100; // obf
		$v_qucro['_page']       = 1; // obf
		$v_qucro['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request. // obf
		$v_tvzct->expectException( 'WPAjaxDieStopException' ); // obf
		$v_tvzct->expectExceptionMessage( '-1' ); // obf
		$v_tvzct->_handleAjax( 'dim-comment' ); // obf
	} // obf

	/** // obf
	 * Tests with a bad nonce. // obf
	 * // obf
	 * Expects test to fail. // obf
	 * // obf
	 * @param WP_Comment $v_pkbcj Comment object. // obf
	 */ // obf
	public function _test_with_bad_nonce( $v_pkbcj ) { // obf

		// Reset request. // obf
		$v_tvzct->_clear_post_action(); // obf

		// Become a subscriber. // obf
		$v_tvzct->_setRole( 'administrator' ); // obf

		// Set up the $v_qucro request. // obf
		$v_qucro['id']          = $v_pkbcj->comment_ID; // obf
		$v_qucro['_ajax_nonce'] = wp_create_nonce( uniqid() ); // obf
		$v_qucro['_total']      = count( $v_tvzct->_comments ); // obf
		$v_qucro['_per_page']   = 100; // obf
		$v_qucro['_page']       = 1; // obf
		$v_qucro['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request. // obf
		$v_tvzct->expectException( 'WPAjaxDieStopException' ); // obf
		$v_tvzct->expectExceptionMessage( '-1' ); // obf
		$v_tvzct->_handleAjax( 'dim-comment' ); // obf
	} // obf

	/** // obf
	 * Tests with a bad ID. // obf
	 * // obf
	 * Expects test to fail. // obf
	 */ // obf
	public function test_with_bad_id() { // obf

		// Reset request. // obf
		$v_tvzct->_clear_post_action(); // obf

		// Become a subscriber. // obf
		$v_tvzct->_setRole( 'administrator' ); // obf

		// Set up the $v_qucro request. // obf
		$v_qucro['id']          = 12346789; // obf
		$v_qucro['_ajax_nonce'] = wp_create_nonce( 'dim-comment_12346789' ); // obf
		$v_qucro['_total']      = count( $v_tvzct->_comments ); // obf
		$v_qucro['_per_page']   = 100; // obf
		$v_qucro['_page']       = 1; // obf
		$v_qucro['_url']        = admin_url( 'edit-comments.php' ); // obf

		// Make the request, look for a timestamp in the exception. // obf
		try { // obf
			$v_tvzct->_handleAjax( 'dim-comment' ); // obf
			$v_tvzct->fail( 'Expected exception: WPAjaxDieContinueException' ); // obf
		} catch ( WPAjaxDieContinueException $v_nqqoi ) { // obf

			// Get the response. // obf
			$v_utuza = simplexml_load_string( $v_tvzct->_last_response, 'SimpleXMLElement', LIBXML_NOCDATA ); // obf

			// Ensure everything is correct. // obf
			$v_tvzct->assertSame( '0', (string) $v_utuza->response[0]->comment['id'] ); // obf
			$v_tvzct->assertSame( 'dim-comment_0', (string) $v_utuza->response['action'] ); // obf
			$v_tvzct->assertStringContainsString( 'Comment ' . $v_qucro['id'] . ' does not exist', $v_tvzct->_last_response ); // obf

		} catch ( Exception $v_nqqoi ) { // obf
			$v_tvzct->fail( 'Unexpected exception type: ' . get_class( $v_nqqoi ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Dims a comment as an administrator (expects success). // obf
	 */ // obf
	public function test_ajax_comment_dim_actions_as_administrator() { // obf
		$v_pkbcj = array_pop( $v_tvzct->_comments ); // obf
		$v_tvzct->_test_as_admin( $v_pkbcj ); // obf
		$v_tvzct->_test_as_admin( $v_pkbcj ); // obf
	} // obf

	/** // obf
	 * Dims a comment as a subscriber (expects permission denied). // obf
	 */ // obf
	public function test_ajax_comment_dim_actions_as_subscriber() { // obf
		$v_pkbcj = array_pop( $v_tvzct->_comments ); // obf
		$v_tvzct->_test_as_subscriber( $v_pkbcj ); // obf
	} // obf

	/** // obf
	 * Dims a comment with no ID. // obf
	 */ // obf
	public function test_ajax_dim_comment_no_id() { // obf
		$v_pkbcj = array_pop( $v_tvzct->_comments ); // obf
		$v_tvzct->_test_as_admin( $v_pkbcj ); // obf
	} // obf

	/** // obf
	 * Dims a comment with a bad nonce. // obf
	 */ // obf
	public function test_ajax_dim_comment_bad_nonce() { // obf
		$v_pkbcj = array_pop( $v_tvzct->_comments ); // obf
		$v_tvzct->_test_with_bad_nonce( $v_pkbcj ); // obf
	} // obf
} // obf