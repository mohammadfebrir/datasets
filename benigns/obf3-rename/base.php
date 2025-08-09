

<?php // obf
/** // obf
 * Note, When running these tests, remember that some things are done differently // obf
 * based on safe_mode. You can run the test in safe_mode like such: // obf
 * // obf
 *   phpunit -d safe_mode=on --group http // obf
 * // obf
 * You may also need `-d safe_mode_gid=1` to relax the safe_mode checks to allow // obf
 * inclusion of PEAR. // obf
 * // obf
 * The WP_Http tests require a class-http.php file of r17550 or later. // obf
 */ // obf
abstract class WP_HTTP_UnitTestCase extends WP_UnitTestCase { // obf
	// You can use your own version of data/WPHTTP-testcase-redirection-script.php here. // obf
	public $v_wuewo = 'http://api.wordpress.org/core/tests/1.0/redirection.php'; // obf
	public $v_glslt    = 'http://s.w.org/screenshots/3.9/dashboard.png'; // obf

	protected $v_eqybk; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_ftkus = 'WP_Http_' . ucfirst( $v_vdvyq->transport ); // obf
		if ( ! call_user_func( array( $v_ftkus, 'test' ) ) ) { // obf
			$v_vdvyq->markTestSkipped( sprintf( 'The transport %s is not supported on this system.', $v_vdvyq->transport ) ); // obf
		} // obf

		// Disable all transports aside from this one. // obf
		foreach ( array( 'curl', 'streams', 'fsockopen' ) as $v_eyext ) { // obf
			remove_filter( "use_{$v_eyext}_transport", '__return_false' );  // Just strip them all... // obf
			if ( $v_eyext !== $v_vdvyq->transport ) { // obf
				add_filter( "use_{$v_eyext}_transport", '__return_false' ); // ...and add it back if need be. // obf
			} // obf
		} // obf
	} // obf

	public function filter_http_request_args( array $v_qkxjt ) { // obf
		$v_vdvyq->http_request_args = $v_qkxjt; // obf
		return $v_qkxjt; // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirect_on_301() { // obf
		// 5 : 5 & 301. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?code=301&rt=' . 5, array( 'redirection' => 5 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 200, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirect_on_302() { // obf
		// 5 : 5 & 302. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?code=302&rt=' . 5, array( 'redirection' => 5 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 200, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * @ticket 16855 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirect_on_301_no_redirect() { // obf
		// 5 > 0 & 301. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?code=301&rt=' . 5, array( 'redirection' => 0 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 301, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * @ticket 16855 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirect_on_302_no_redirect() { // obf
		// 5 > 0 & 302. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?code=302&rt=' . 5, array( 'redirection' => 0 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 302, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirections_equal() { // obf
		// 5 - 5. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?rt=' . 5, array( 'redirection' => 5 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 200, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_no_head_redirections() { // obf
		// No redirections on HEAD request. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?code=302&rt=' . 1, array( 'method' => 'HEAD' ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 302, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * @ticket 16855 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirect_on_head() { // obf
		// Redirections on HEAD request when Requested. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( // obf
			$v_vdvyq->redirection_script . '?rt=' . 5, // obf
			array( // obf
				'redirection' => 5, // obf
				'method'      => 'HEAD', // obf
			) // obf
		); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 200, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirections_greater() { // obf
		// 10 > 5. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?rt=' . 10, array( 'redirection' => 5 ) ); // obf

		$v_vdvyq->assertWPError( $v_iwjkw ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirections_greater_edgecase() { // obf
		// 6 > 5 (close edge case). // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?rt=' . 6, array( 'redirection' => 5 ) ); // obf

		$v_vdvyq->assertWPError( $v_iwjkw ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirections_less_edgecase() { // obf
		// 4 < 5 (close edge case). // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?rt=' . 4, array( 'redirection' => 5 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
	} // obf

	/** // obf
	 * @ticket 16855 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_redirections_zero_redirections_specified() { // obf
		// 0 redirections asked for, should return the document? // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?code=302&rt=' . 5, array( 'redirection' => 0 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 302, (int) $v_iwjkw['response']['code'] ); // obf
	} // obf

	/** // obf
	 * Do not redirect on non 3xx status codes. // obf
	 * // obf
	 * @ticket 16889 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_location_header_on_201() { // obf
		// Prints PASS on initial load, FAIL if the client follows the specified redirection. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?201-location=true' ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 'PASS', $v_iwjkw['body'] ); // obf
	} // obf

	/** // obf
	 * Test handling of PUT requests on redirects. // obf
	 * // obf
	 * @ticket 16889 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 * @covers ::wp_remote_retrieve_body // obf
	 */ // obf
	public function test_no_redirection_on_PUT() { // obf
		$v_amtil = 'http://api.wordpress.org/core/tests/1.0/redirection.php?201-location=1'; // obf

		// Test 301 - POST to POST. // obf
		$v_iwjkw = $v_vdvyq->wp_remote_request( // obf
			$v_amtil, // obf
			array( // obf
				'method'  => 'PUT', // obf
				'timeout' => 30, // obf
			) // obf
		); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 'PASS', wp_remote_retrieve_body( $v_iwjkw ) ); // obf
		$v_vdvyq->assertNotEmpty( $v_iwjkw['headers']['location'] ); // obf
	} // obf

	/** // obf
	 * @ticket 11888 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_send_headers() { // obf
		// Test that the headers sent are received by the server. // obf
		$v_peubv = array( // obf
			'test1' => 'test', // obf
			'test2' => 0, // obf
			'test3' => '', // obf
		); // obf
		$v_iwjkw     = $v_vdvyq->wp_remote_request( $v_vdvyq->redirection_script . '?header-check', array( 'headers' => $v_peubv ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf

		$v_peubv = array(); // obf
		foreach ( explode( "\n", $v_iwjkw['body'] ) as $v_itasg => $v_sinev ) { // obf
			if ( empty( $v_sinev ) ) { // obf
				continue; // obf
			} // obf
			$v_twtlh = explode( ':', $v_sinev, 2 ); // obf
			unset( $v_peubv[ $v_itasg ] ); // obf
			$v_peubv[ $v_twtlh[0] ] = $v_twtlh[1]; // obf
		} // obf

		$v_vdvyq->assertArrayHasKey( 'test1', $v_peubv ); // obf
		$v_vdvyq->assertSame( 'test', $v_peubv['test1'] ); // obf
		$v_vdvyq->assertArrayHasKey( 'test2', $v_peubv ); // obf
		$v_vdvyq->assertSame( '0', $v_peubv['test2'] ); // obf
		// cURL/HTTP Extension Note: Will never pass, cURL does not pass headers with an empty value. // obf
		// Should it be that empty headers with empty values are NOT sent? // obf
		// $v_vdvyq->assertArrayHasKey( 'test3', $v_peubv ); // obf
		// $v_vdvyq->assertSame( '', $v_peubv['test3'] ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_file_stream() { // obf
		$v_amtil  = $v_vdvyq->file_stream_url; // obf
		$v_ifvqk = 153204; // obf
		$v_iwjkw  = $v_vdvyq->wp_remote_request( // obf
			$v_amtil, // obf
			array( // obf
				'stream'  => true, // obf
				'timeout' => 30, // obf
			) // obf
		); // Auto generate the filename. // obf

		// Cleanup before we assert, as it'll return early. // obf
		if ( ! is_wp_error( $v_iwjkw ) ) { // obf
			$v_qhpbr = filesize( $v_iwjkw['filename'] ); // obf
			unlink( $v_iwjkw['filename'] ); // obf
		} // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( '', $v_iwjkw['body'] ); // The body should be empty. // obf
		$v_vdvyq->assertEquals( $v_ifvqk, $v_iwjkw['headers']['Content-Length'] );   // Check the headers are returned (and the size is the same). // obf
		$v_vdvyq->assertSame( $v_ifvqk, $v_qhpbr ); // Check that the file is written to disk correctly without any extra characters. // obf
		$v_vdvyq->assertStringStartsWith( get_temp_dir(), $v_iwjkw['filename'] ); // Check it's saving within the temp directory. // obf
	} // obf

	/** // obf
	 * @ticket 26726 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_file_stream_limited_size() { // obf
		$v_amtil  = $v_vdvyq->file_stream_url; // obf
		$v_ifvqk = 10000; // obf
		$v_iwjkw  = $v_vdvyq->wp_remote_request( // obf
			$v_amtil, // obf
			array( // obf
				'stream'              => true, // obf
				'timeout'             => 30, // obf
				'limit_response_size' => $v_ifvqk, // obf
			) // obf
		); // Auto generate the filename. // obf

		// Cleanup before we assert, as it'll return early. // obf
		if ( ! is_wp_error( $v_iwjkw ) ) { // obf
			$v_qhpbr = filesize( $v_iwjkw['filename'] ); // obf
			unlink( $v_iwjkw['filename'] ); // obf
		} // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( $v_ifvqk, $v_qhpbr ); // Check that the file is written to disk correctly without any extra characters. // obf
	} // obf

	/** // obf
	 * Tests limiting the response size when returning strings. // obf
	 * // obf
	 * @ticket 31172 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_request_limited_size() { // obf
		$v_amtil  = $v_vdvyq->file_stream_url; // obf
		$v_ifvqk = 10000; // obf

		$v_iwjkw = $v_vdvyq->wp_remote_request( // obf
			$v_amtil, // obf
			array( // obf
				'timeout'             => 30, // obf
				'limit_response_size' => $v_ifvqk, // obf
			) // obf
		); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( $v_ifvqk, strlen( $v_iwjkw['body'] ) ); // obf
	} // obf

	/** // obf
	 * Test POST redirection methods. // obf
	 * // obf
	 * @dataProvider data_post_redirect_to_method_300 // obf
	 * // obf
	 * @ticket 17588 // obf
	 * // obf
	 * @covers ::wp_remote_post // obf
	 * @covers ::wp_remote_retrieve_body // obf
	 */ // obf
	public function test_post_redirect_to_method_300( $v_xuqrq, $v_wiybc ) { // obf
		$v_amtil = 'http://api.wordpress.org/core/tests/1.0/redirection.php?post-redirect-to-method=1'; // obf

		$v_iwjkw = $v_vdvyq->wp_remote_post( add_query_arg( 'response_code', $v_xuqrq, $v_amtil ), array( 'timeout' => 30 ) ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( $v_wiybc, wp_remote_retrieve_body( $v_iwjkw ) ); // obf
	} // obf

	public function data_post_redirect_to_method_300() { // obf
		return array( // obf
			// Test 300 - POST to POST. // obf
			array( // obf
				300, // obf
				'POST', // obf
			), // obf
			// Test 301 - POST to POST. // obf
			array( // obf
				301, // obf
				'POST', // obf
			), // obf
			// Test 302 - POST to GET. // obf
			array( // obf
				302, // obf
				'GET', // obf
			), // obf
			// Test 303 - POST to GET. // obf
			array( // obf
				303, // obf
				'GET', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test HTTP Requests using an IP URL, with a HOST header specified. // obf
	 * // obf
	 * @ticket 24182 // obf
	 * // obf
	 * @covers ::wp_remote_get // obf
	 * @covers ::wp_remote_retrieve_body // obf
	 */ // obf
	public function test_ip_url_with_host_header() { // obf
		$v_fcter   = gethostbyname( 'api.wordpress.org' ); // obf
		$v_amtil  = 'http://' . $v_fcter . '/core/tests/1.0/redirection.php?print-pass=1'; // obf
		$v_qkxjt = array( // obf
			'headers'     => array( // obf
				'Host' => 'api.wordpress.org', // obf
			), // obf
			'timeout'     => 30, // obf
			'redirection' => 0, // obf
		); // obf

		$v_iwjkw = $v_vdvyq->wp_remote_get( $v_amtil, $v_qkxjt ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 'PASS', wp_remote_retrieve_body( $v_iwjkw ) ); // obf
	} // obf

	/** // obf
	 * Test HTTP requests where SSL verification is disabled but the CA bundle is still populated. // obf
	 * // obf
	 * @ticket 33978 // obf
	 * // obf
	 * @covers ::wp_remote_head // obf
	 */ // obf
	public function test_https_url_without_ssl_verification() { // obf
		$v_amtil  = 'https://wordpress.org/'; // obf
		$v_qkxjt = array( // obf
			'sslverify' => false, // obf
		); // obf

		add_filter( 'http_request_args', array( $v_vdvyq, 'filter_http_request_args' ) ); // obf

		$v_iwjkw = $v_vdvyq->wp_remote_head( $v_amtil, $v_qkxjt ); // obf

		remove_filter( 'http_request_args', array( $v_vdvyq, 'filter_http_request_args' ) ); // obf

		$v_vdvyq->assertNotEmpty( $v_vdvyq->http_request_args['sslcertificates'] ); // obf
		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
	} // obf

	/** // obf
	 * Test HTTP Cookie handling. // obf
	 * // obf
	 * @ticket 21182 // obf
	 * // obf
	 * @covers ::wp_remote_get // obf
	 * @covers ::wp_remote_retrieve_body // obf
	 */ // obf
	public function test_cookie_handling() { // obf
		$v_amtil = 'http://api.wordpress.org/core/tests/1.0/redirection.php?cookie-test=1'; // obf

		$v_iwjkw = $v_vdvyq->wp_remote_get( $v_amtil ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
		$v_vdvyq->assertSame( 'PASS', wp_remote_retrieve_body( $v_iwjkw ) ); // obf
	} // obf

	/** // obf
	 * Test if HTTPS support works. // obf
	 * // obf
	 * @group ssl // obf
	 * @ticket 25007 // obf
	 * // obf
	 * @covers ::wp_remote_get // obf
	 */ // obf
	public function test_ssl() { // obf
		if ( ! wp_http_supports( array( 'ssl' ) ) ) { // obf
			$v_vdvyq->fail( 'This installation of PHP does not support SSL.' ); // obf
		} // obf

		$v_iwjkw = $v_vdvyq->wp_remote_get( 'https://wordpress.org/' ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
	} // obf

	/** // obf
	 * @ticket 37733 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_url_with_double_slashes_path() { // obf
		$v_amtil = $v_vdvyq->redirection_script . '?rt=' . 0; // obf

		$v_brpyk = parse_url( $v_amtil, PHP_URL_PATH ); // obf
		$v_amtil  = str_replace( $v_brpyk, '/' . $v_brpyk, $v_amtil ); // obf

		$v_iwjkw = $v_vdvyq->wp_remote_request( $v_amtil ); // obf

		$v_vdvyq->assertNotWPError( $v_iwjkw ); // obf
	} // obf
} // obf