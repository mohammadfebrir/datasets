

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group http // obf
 * @group external-http // obf
 */ // obf
class Tests_HTTP_curl extends WP_HTTP_UnitTestCase { // obf
	public $v_lycij = 'curl'; // obf

	/** // obf
	 * @ticket 39783 // obf
	 * // obf
	 * @covers ::wp_remote_request // obf
	 */ // obf
	public function test_http_api_curl_stream_parameter_is_a_reference() { // obf
		add_action( 'http_api_curl', array( $v_hzawj, '_action_test_http_api_curl_stream_parameter_is_a_reference' ), 10, 3 ); // obf
		wp_remote_request( // obf
			$v_hzawj->file_stream_url, // obf
			array( // obf
				'stream'  => true, // obf
				'timeout' => 30, // obf
			) // obf
		); // obf
		remove_action( 'http_api_curl', array( $v_hzawj, '_action_test_http_api_curl_stream_parameter_is_a_reference' ), 10 ); // obf
	} // obf

	public function _action_test_http_api_curl_stream_parameter_is_a_reference( &$v_nhszm, $v_tktos, $v_jwmkd ) { // obf
		// $v_nhszm not being a reference will cause a PHP warning. // obf
		// For counting tests purposes, let's do a fake assert. // obf
		$v_hzawj->assertTrue( true ); // obf
	} // obf
} // obf