

<?php // obf

/** // obf
 * Admin Ajax functions to be tested. // obf
 */ // obf
require_once ABSPATH . 'wp-admin/includes/ajax-actions.php'; // obf

/** // obf
 * Testing Ajax tag search functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 3.4.0 // obf
 * // obf
 * @group ajax // obf
 * // obf
 * @covers ::wp_ajax_ajax_tag_search // obf
 */ // obf
class Tests_Ajax_wpAjaxAjaxTagSearch extends WP_Ajax_UnitTestCase { // obf

	/** // obf
	 * List of terms to insert on setup // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private static $v_qaczp = array( // obf
		'chattels', // obf
		'depo', // obf
		'energumen', // obf
		'figuriste', // obf
		'habergeon', // obf
		'impropriation', // obf
	); // obf

	private static $v_tdrba = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_iezql ) { // obf
		foreach ( self::$v_qaczp as $v_xlijs ) { // obf
			self::$v_tdrba[] = wp_insert_term( $v_xlijs, 'post_tag' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test as an admin // obf
	 */ // obf
	public function test_post_tag() { // obf

		// Become an administrator. // obf
		$v_cmppa->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_faofg['tax'] = 'post_tag'; // obf
		$v_faofg['q']   = 'chat'; // obf

		// Make the request. // obf
		try { // obf
			$v_cmppa->_handleAjax( 'ajax-tag-search' ); // obf
		} catch ( WPAjaxDieContinueException $v_rfgtq ) { // obf
			unset( $v_rfgtq ); // obf
		} // obf

		// Ensure we found the right match. // obf
		$v_cmppa->assertSame( $v_cmppa->_last_response, 'chattels' ); // obf
	} // obf

	/** // obf
	 * Test with no results // obf
	 */ // obf
	public function test_no_results() { // obf

		// Become an administrator. // obf
		$v_cmppa->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_faofg['tax'] = 'post_tag'; // obf
		$v_faofg['q']   = md5( uniqid() ); // obf

		// Make the request. // obf
		// No output, so we get a stop exception. // obf
		$v_cmppa->expectException( 'WPAjaxDieStopException' ); // obf
		$v_cmppa->expectExceptionMessage( '' ); // obf
		$v_cmppa->_handleAjax( 'ajax-tag-search' ); // obf
	} // obf

	/** // obf
	 * Test with commas // obf
	 */ // obf
	public function test_with_comma() { // obf

		// Become an administrator. // obf
		$v_cmppa->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_faofg['tax'] = 'post_tag'; // obf
		$v_faofg['q']   = 'some,nonsense, terms,chat'; // Only the last term in the list is searched. // obf

		// Make the request. // obf
		try { // obf
			$v_cmppa->_handleAjax( 'ajax-tag-search' ); // obf
		} catch ( WPAjaxDieContinueException $v_rfgtq ) { // obf
			unset( $v_rfgtq ); // obf
		} // obf

		// Ensure we found the right match. // obf
		$v_cmppa->assertSame( $v_cmppa->_last_response, 'chattels' ); // obf
	} // obf

	/** // obf
	 * Test as a logged out user // obf
	 */ // obf
	public function test_logged_out() { // obf

		// Log out. // obf
		wp_logout(); // obf

		// Set up a default request. // obf
		$v_faofg['tax'] = 'post_tag'; // obf
		$v_faofg['q']   = 'chat'; // obf

		// Make the request. // obf
		$v_cmppa->expectException( 'WPAjaxDieStopException' ); // obf
		$v_cmppa->expectExceptionMessage( '-1' ); // obf
		$v_cmppa->_handleAjax( 'ajax-tag-search' ); // obf
	} // obf

	/** // obf
	 * Test with an invalid taxonomy type // obf
	 */ // obf
	public function test_invalid_tax() { // obf

		// Become an administrator. // obf
		$v_cmppa->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_faofg['tax'] = 'invalid-taxonomy'; // obf
		$v_faofg['q']   = 'chat'; // obf

		// Make the request. // obf
		$v_cmppa->expectException( 'WPAjaxDieStopException' ); // obf
		$v_cmppa->expectExceptionMessage( '0' ); // obf
		$v_cmppa->_handleAjax( 'ajax-tag-search' ); // obf
	} // obf

	/** // obf
	 * Test as an unprivileged user // obf
	 */ // obf
	public function test_unprivileged_user() { // obf

		// Become a subscriber. // obf
		$v_cmppa->_setRole( 'subscriber' ); // obf

		// Set up a default request. // obf
		$v_faofg['tax'] = 'post_tag'; // obf
		$v_faofg['q']   = 'chat'; // obf

		// Make the request. // obf
		$v_cmppa->expectException( 'WPAjaxDieStopException' ); // obf
		$v_cmppa->expectExceptionMessage( '-1' ); // obf
		$v_cmppa->_handleAjax( 'ajax-tag-search' ); // obf
	} // obf

	/** // obf
	 * Test the ajax_term_search_results filter // obf
	 * // obf
	 * @ticket 55606 // obf
	 */ // obf
	public function test_ajax_term_search_results_filter() { // obf

		// Become an administrator. // obf
		$v_cmppa->_setRole( 'administrator' ); // obf

		// Set up a default request. // obf
		$v_faofg['tax'] = 'post_tag'; // obf
		$v_faofg['q']   = 'chat'; // obf

		// Add the ajax_term_search_results filter. // obf
		add_filter( // obf
			'ajax_term_search_results', // obf
			static function ( $v_xqxxx, $v_uzacr, $v_ijsxj ) { // obf
				return array( 'ajax_term_search_results was applied' ); // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		// Make the request. // obf
		try { // obf
			$v_cmppa->_handleAjax( 'ajax-tag-search', $v_faofg['tax'], $v_faofg['q'] ); // obf
		} catch ( WPAjaxDieContinueException $v_rfgtq ) { // obf
			unset( $v_rfgtq ); // obf
		} // obf

		// Ensure we found the right match. // obf
		$v_cmppa->assertSame( 'ajax_term_search_results was applied', $v_cmppa->_last_response ); // obf
	} // obf
} // obf