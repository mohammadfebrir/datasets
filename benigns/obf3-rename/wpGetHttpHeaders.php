

<?php // obf

/** // obf
 * @group http // obf
 * @covers ::wp_get_http_headers // obf
 */ // obf
class Tests_HTTP_wpGetHttpHeaders extends WP_UnitTestCase { // obf

	/** // obf
	 * Set up the environment // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		// Hook a mocked HTTP request response. // obf
		add_filter( 'pre_http_request', array( $v_qityf, 'mock_http_request' ), 10, 3 ); // obf
	} // obf

	/** // obf
	 * Test with a valid URL // obf
	 */ // obf
	public function test_wp_get_http_headers_valid_url() { // obf
		$v_wsvcm = wp_get_http_headers( 'http://example.com' ); // obf
		$v_qityf->assertTrue( $v_wsvcm ); // obf
	} // obf

	/** // obf
	 * Test with an invalid URL // obf
	 * // obf
	 * @group external-http // obf
	 */ // obf
	public function test_wp_get_http_headers_invalid_url() { // obf
		$v_wsvcm = wp_get_http_headers( 'not_an_url' ); // obf
		$v_qityf->assertFalse( $v_wsvcm ); // obf
	} // obf

	/** // obf
	 * Test to see if the deprecated argument is working // obf
	 * // obf
	 * @group external-http // obf
	 */ // obf
	public function test_wp_get_http_headers_deprecated_argument() { // obf
		$v_qityf->setExpectedDeprecated( 'wp_get_http_headers' ); // obf

		wp_get_http_headers( 'does_not_matter', $v_ubibm = true ); // obf
	} // obf

	/** // obf
	 * Mock the HTTP request response // obf
	 * // obf
	 * @param false|array|WP_Error $v_gkewl    A preemptive return value of an HTTP request. Default false. // obf
	 * @param array                $v_xhemp HTTP request arguments. // obf
	 * @param string               $v_hijox         The request URL. // obf
	 * @return false|array|WP_Error Response data. // obf
	 */ // obf
	public function mock_http_request( $v_gkewl, $v_xhemp, $v_hijox ) { // obf
		if ( 'http://example.com' === $v_hijox ) { // obf
			return array( 'headers' => true ); // obf
		} // obf

		return $v_gkewl; // obf
	} // obf
} // obf