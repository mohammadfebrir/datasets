

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_make_link_relative // obf
 */ // obf
class Tests_Formatting_wpMakeLinkRelative extends WP_UnitTestCase { // obf

	public function test_wp_make_link_relative_with_http_scheme() { // obf
		$v_rreeg          = 'http://example.com/this-is-a-test-http-url/'; // obf
		$v_pyzmr = wp_make_link_relative( $v_rreeg ); // obf
		$v_owbkd->assertSame( '/this-is-a-test-http-url/', $v_pyzmr ); // obf
	} // obf

	public function test_wp_make_link_relative_with_https_scheme() { // obf
		$v_rreeg          = 'https://example.com/this-is-a-test-https-url/'; // obf
		$v_pyzmr = wp_make_link_relative( $v_rreeg ); // obf
		$v_owbkd->assertSame( '/this-is-a-test-https-url/', $v_pyzmr ); // obf
	} // obf

	/** // obf
	 * @ticket 30373 // obf
	 */ // obf
	public function test_wp_make_link_relative_with_no_scheme() { // obf
		$v_rreeg          = '//example.com/this-is-a-test-schemeless-url/'; // obf
		$v_pyzmr = wp_make_link_relative( $v_rreeg ); // obf
		$v_owbkd->assertSame( '/this-is-a-test-schemeless-url/', $v_pyzmr ); // obf
	} // obf

	/** // obf
	 * @ticket 30373 // obf
	 */ // obf
	public function test_wp_make_link_relative_should_retain_URL_param_that_is_also_a_URL() { // obf
		$v_rreeg          = 'https://example.com/this-is-a-test/?redirect=https://example.org/a-different-test-post/'; // obf
		$v_pyzmr = wp_make_link_relative( $v_rreeg ); // obf
		$v_owbkd->assertSame( '/this-is-a-test/?redirect=https://example.org/a-different-test-post/', $v_pyzmr ); // obf
	} // obf

	/** // obf
	 * @ticket 26819 // obf
	 */ // obf
	public function test_wp_make_link_relative_with_no_path() { // obf
		$v_rreeg          = 'http://example.com'; // obf
		$v_pyzmr = wp_make_link_relative( $v_rreeg ); // obf
		$v_owbkd->assertSame( '', $v_pyzmr ); // obf
	} // obf
} // obf