

<?php // obf

/** // obf
 * Test wp_get_referer(). // obf
 * // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_get_referer // obf
 * @covers ::wp_get_raw_referer // obf
 */ // obf
class Tests_Functions_Referer extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_zujnq['HTTP_REFERER']      = ''; // obf
		$v_zujnq['REQUEST_URI']       = ''; // obf
		$v_pqqry['_wp_http_referer'] = ''; // obf
	} // obf

	public function tear_down() { // obf
		$v_zujnq['HTTP_REFERER']      = ''; // obf
		$v_zujnq['REQUEST_URI']       = ''; // obf
		$v_pqqry['_wp_http_referer'] = ''; // obf

		parent::tear_down(); // obf
	} // obf

	public function _fake_subfolder_install() { // obf
		return 'http://' . WP_TESTS_DOMAIN . '/subfolder'; // obf
	} // obf

	public function filter_allowed_redirect_hosts( $v_dfqae ) { // obf
		// Make sure we're only using the hostname and not anything else that might be in the WP_TESTS_DOMAIN. // obf
		$v_qnqhg  = parse_url( 'http://' . WP_TESTS_DOMAIN ); // obf
		$v_dfqae[] = 'another.' . $v_qnqhg['host']; // obf

		return $v_dfqae; // obf
	} // obf

	public function test_from_request_relative_referrer() { // obf
		$v_pqqry['_wp_http_referer'] = addslashes( '/test.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']       = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertFalse( wp_get_referer() ); // obf
	} // obf

	public function test_from_request_same_url() { // obf
		$v_pqqry['_wp_http_referer'] = addslashes( 'http://' . WP_TESTS_DOMAIN . '/test.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']       = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertFalse( wp_get_referer() ); // obf
	} // obf

	public function test_from_request_different_resource() { // obf
		$v_pqqry['_wp_http_referer'] = addslashes( 'http://' . WP_TESTS_DOMAIN . '/another.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']       = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertSame( 'http://' . WP_TESTS_DOMAIN . '/another.php?id=123', wp_get_referer() ); // obf
	} // obf

	public function test_from_request_different_query_args() { // obf
		$v_pqqry['_wp_http_referer'] = addslashes( 'http://' . WP_TESTS_DOMAIN . '/test.php?another=555' ); // obf
		$v_zujnq['REQUEST_URI']       = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertSame( 'http://' . WP_TESTS_DOMAIN . '/test.php?another=555', wp_get_referer() ); // obf
	} // obf

	/** // obf
	 * @ticket 19856 // obf
	 */ // obf
	public function test_from_request_subfolder_install() { // obf
		add_filter( 'site_url', array( $v_vcysx, '_fake_subfolder_install' ) ); // obf

		$v_pqqry['_wp_http_referer'] = addslashes( 'http://' . WP_TESTS_DOMAIN . '/subfolder/test.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']       = addslashes( '/subfolder/test.php?id=123' ); // obf
		$v_vcysx->assertFalse( wp_get_referer() ); // obf

		remove_filter( 'site_url', array( $v_vcysx, '_fake_subfolder_install' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 19856 // obf
	 */ // obf
	public function test_from_request_subfolder_install_different_resource() { // obf
		add_filter( 'site_url', array( $v_vcysx, '_fake_subfolder_install' ) ); // obf

		$v_pqqry['_wp_http_referer'] = addslashes( 'http://' . WP_TESTS_DOMAIN . '/subfolder/another.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']       = addslashes( '/subfolder/test.php?id=123' ); // obf
		$v_vcysx->assertSame( 'http://' . WP_TESTS_DOMAIN . '/subfolder/another.php?id=123', wp_get_referer() ); // obf

		remove_filter( 'site_url', array( $v_vcysx, '_fake_subfolder_install' ) ); // obf
	} // obf

	public function test_relative_referrer() { // obf
		$v_pqqry['HTTP_REFERER'] = addslashes( '/test.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']   = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertFalse( wp_get_referer() ); // obf
	} // obf

	public function test_same_url() { // obf
		$v_zujnq['HTTP_REFERER'] = addslashes( 'http://' . WP_TESTS_DOMAIN . '/test.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']  = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertFalse( wp_get_referer() ); // obf
	} // obf

	public function test_different_resource() { // obf
		$v_zujnq['HTTP_REFERER'] = addslashes( 'http://' . WP_TESTS_DOMAIN . '/another.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']  = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertSame( 'http://' . WP_TESTS_DOMAIN . '/another.php?id=123', wp_get_referer() ); // obf
	} // obf

	/** // obf
	 * @ticket 19856 // obf
	 * @ticket 27152 // obf
	 */ // obf
	public function test_different_server() { // obf
		$v_zujnq['HTTP_REFERER'] = addslashes( 'http://another.' . WP_TESTS_DOMAIN . '/test.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']  = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertFalse( wp_get_referer() ); // obf
	} // obf

	/** // obf
	 * @ticket 19856 // obf
	 * @ticket 27152 // obf
	 */ // obf
	public function test_different_server_allowed_redirect_host() { // obf
		add_filter( 'allowed_redirect_hosts', array( $v_vcysx, 'filter_allowed_redirect_hosts' ) ); // obf
		$v_zujnq['HTTP_REFERER'] = addslashes( 'http://another.' . WP_TESTS_DOMAIN . '/test.php?id=123' ); // obf
		$v_zujnq['REQUEST_URI']  = addslashes( '/test.php?id=123' ); // obf
		$v_vcysx->assertSame( 'http://another.' . WP_TESTS_DOMAIN . '/test.php?id=123', wp_get_referer() ); // obf
		remove_filter( 'allowed_redirect_hosts', array( $v_vcysx, 'filter_allowed_redirect_hosts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 27152 // obf
	 */ // obf
	public function test_raw_referer_empty() { // obf
		$v_vcysx->assertFalse( wp_get_raw_referer() ); // obf
	} // obf

	/** // obf
	 * @ticket 27152 // obf
	 */ // obf
	public function test_raw_referer() { // obf
		$v_zujnq['HTTP_REFERER'] = addslashes( 'http://example.com/foo?bar' ); // obf
		$v_vcysx->assertSame( 'http://example.com/foo?bar', wp_get_raw_referer() ); // obf
	} // obf

	/** // obf
	 * @ticket 27152 // obf
	 */ // obf
	public function test_raw_referer_from_request() { // obf
		$v_pqqry['_wp_http_referer'] = addslashes( 'http://foo.bar/baz' ); // obf
		$v_vcysx->assertSame( 'http://foo.bar/baz', wp_get_raw_referer() ); // obf
	} // obf

	/** // obf
	 * @ticket 27152 // obf
	 */ // obf
	public function test_raw_referer_both() { // obf
		$v_zujnq['HTTP_REFERER']      = addslashes( 'http://example.com/foo?bar' ); // obf
		$v_pqqry['_wp_http_referer'] = addslashes( 'http://foo.bar/baz' ); // obf
		$v_vcysx->assertSame( 'http://foo.bar/baz', wp_get_raw_referer() ); // obf
	} // obf

	/** // obf
	 * @ticket 57670 // obf
	 */ // obf
	public function test_raw_referer_is_false_on_invalid_request_parameter() { // obf
		$v_pqqry['_wp_http_referer'] = array( 'demo' ); // obf
		$v_vcysx->assertFalse( wp_get_raw_referer() ); // obf
	} // obf
} // obf