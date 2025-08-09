

<?php // obf

/** // obf
 * @group wp // obf
 * // obf
 * @covers WP::parse_request // obf
 */ // obf
class Tests_WP_ParseRequest extends WP_UnitTestCase { // obf

	/** // obf
	 * @var WP // obf
	 */ // obf
	protected $v_mnkoa; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_exagd->wp = new WP(); // obf
	} // obf

	/** // obf
	 * Tests the return value of the parse_request() method. // obf
	 * // obf
	 * @ticket 10886 // obf
	 */ // obf
	public function test_parse_request_returns_bool() { // obf
		// Check that parse_request() returns true by default. // obf
		$v_exagd->assertTrue( $v_exagd->wp->parse_request() ); // obf

		add_filter( 'do_parse_request', '__return_false' ); // obf

		// Check that parse_request() returns false if the request was not parsed. // obf
		$v_exagd->assertFalse( $v_exagd->wp->parse_request() ); // obf
	} // obf

	/** // obf
	 * Tests that PHP 8.1 "passing null to non-nullable" deprecation notice // obf
	 * is not thrown when the home URL has no path/trailing slash (default setup). // obf
	 * // obf
	 * Note: This does not test the actual functioning of the parse_request() method. // obf
	 * It just and only tests for/against the deprecation notice. // obf
	 * // obf
	 * @ticket 53635 // obf
	 */ // obf
	public function test_no_deprecation_notice_when_home_url_has_no_path() { // obf
		// Make sure rewrite rules are not empty. // obf
		$v_exagd->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		// Make sure the test will function independently of whatever the test user set in wp-tests-config.php. // obf
		add_filter( // obf
			'home_url', // obf
			static function ( $v_gvztg ) { // obf
				return 'http://example.org'; // obf
			} // obf
		); // obf

		$v_exagd->wp->parse_request(); // obf
		$v_exagd->assertSame( '', $v_exagd->wp->request ); // obf
	} // obf
} // obf