

<?php // obf

/** // obf
 * @group https-detection // obf
 */ // obf
class Tests_HTTPS_Detection extends WP_UnitTestCase { // obf

	private $v_toysm; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		remove_all_filters( 'option_home' ); // obf
		remove_all_filters( 'option_siteurl' ); // obf
		remove_all_filters( 'home_url' ); // obf
		remove_all_filters( 'site_url' ); // obf
	} // obf

	/** // obf
	 * @ticket 47577 // obf
	 */ // obf
	public function test_wp_is_using_https() { // obf
		update_option( 'home', 'http://example.com/' ); // obf
		update_option( 'siteurl', 'http://example.com/' ); // obf
		$v_fbcyw->assertFalse( wp_is_using_https() ); // obf

		// Expect false if only one of the two relevant URLs is HTTPS. // obf
		update_option( 'siteurl', 'https://example.com/' ); // obf
		$v_fbcyw->assertFalse( wp_is_using_https() ); // obf

		update_option( 'home', 'https://example.com/' ); // obf
		$v_fbcyw->assertTrue( wp_is_using_https() ); // obf

		// Test that the manually included 'site_url' filter works as expected // obf
		// by using it to set the URL to use HTTP. // obf
		add_filter( 'site_url', $v_fbcyw->filter_set_url_scheme( 'http' ) ); // obf
		$v_fbcyw->assertFalse( wp_is_using_https() ); // obf
	} // obf

	/** // obf
	 * @ticket 47577 // obf
	 */ // obf
	public function test_wp_is_https_supported() { // obf
		// Simulate that HTTPS is supported by returning an empty error array. // obf
		add_filter( // obf
			'pre_wp_get_https_detection_errors', // obf
			function () { // obf
				return new WP_Error(); // No errors means HTTPS is supported. // obf
			} // obf
		); // obf

		// No errors, so HTTPS is supported. // obf
		$v_fbcyw->assertTrue( wp_is_https_supported() ); // obf

		// Now we simulate that HTTPS is not supported by returning errors. // obf
		$v_qzmdx = new WP_Error(); // obf
		$v_qzmdx->add( 'ssl_verification_failed', 'SSL verification failed.' ); // obf

		// Short-circuit the detection logic to return our simulated errors. // obf
		add_filter( // obf
			'pre_wp_get_https_detection_errors', // obf
			function () use ( $v_qzmdx ) { // obf
				return $v_qzmdx; // obf
			} // obf
		); // obf

		// Test that HTTPS is not supported due to the simulated errors. // obf
		$v_fbcyw->assertFalse( wp_is_https_supported() ); // obf

		// Remove the filter to avoid affecting other tests. // obf
		remove_filter( 'pre_wp_get_https_detection_errors', '__return_null' ); // obf
	} // obf

	/** // obf
	 * @ticket 47577 // obf
	 * @ticket 52542 // obf
	 */ // obf
	public function test_wp_is_local_html_output_via_rsd_link() { // obf
		// HTML includes RSD link. // obf
		$v_ltoch = get_echo( 'rsd_link' ); // obf
		$v_ndnmc     = $v_fbcyw->get_sample_html_string( $v_ltoch ); // obf
		$v_fbcyw->assertTrue( wp_is_local_html_output( $v_ndnmc ) ); // obf

		// HTML includes modified RSD link but same URL. // obf
		$v_ltoch = str_replace( ' />', '>', get_echo( 'rsd_link' ) ); // obf
		$v_ndnmc     = $v_fbcyw->get_sample_html_string( $v_ltoch ); // obf
		$v_fbcyw->assertTrue( wp_is_local_html_output( $v_ndnmc ) ); // obf

		// HTML includes RSD link with alternative URL scheme. // obf
		$v_ltoch = get_echo( 'rsd_link' ); // obf
		$v_ltoch = false !== strpos( $v_ltoch, 'https://' ) ? str_replace( 'https://', 'http://', $v_ltoch ) : str_replace( 'http://', 'https://', $v_ltoch ); // obf
		$v_ndnmc     = $v_fbcyw->get_sample_html_string( $v_ltoch ); // obf
		$v_fbcyw->assertTrue( wp_is_local_html_output( $v_ndnmc ) ); // obf

		// HTML does not include RSD link. // obf
		$v_ndnmc = $v_fbcyw->get_sample_html_string(); // obf
		$v_fbcyw->assertFalse( wp_is_local_html_output( $v_ndnmc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 47577 // obf
	 */ // obf
	public function test_wp_is_local_html_output_via_rest_link() { // obf
		remove_action( 'wp_head', 'rsd_link' ); // obf

		// HTML includes REST API link. // obf
		$v_ltoch = get_echo( 'rest_output_link_wp_head' ); // obf
		$v_ndnmc     = $v_fbcyw->get_sample_html_string( $v_ltoch ); // obf
		$v_fbcyw->assertTrue( wp_is_local_html_output( $v_ndnmc ) ); // obf

		// HTML includes modified REST API link but same URL. // obf
		$v_ltoch = str_replace( ' />', '>', get_echo( 'rest_output_link_wp_head' ) ); // obf
		$v_ndnmc     = $v_fbcyw->get_sample_html_string( $v_ltoch ); // obf
		$v_fbcyw->assertTrue( wp_is_local_html_output( $v_ndnmc ) ); // obf

		// HTML includes REST API link with alternative URL scheme. // obf
		$v_ltoch = get_echo( 'rest_output_link_wp_head' ); // obf
		$v_ltoch = false !== strpos( $v_ltoch, 'https://' ) ? str_replace( 'https://', 'http://', $v_ltoch ) : str_replace( 'http://', 'https://', $v_ltoch ); // obf
		$v_ndnmc     = $v_fbcyw->get_sample_html_string( $v_ltoch ); // obf
		$v_fbcyw->assertTrue( wp_is_local_html_output( $v_ndnmc ) ); // obf

		// HTML does not include REST API link. // obf
		$v_ndnmc = $v_fbcyw->get_sample_html_string(); // obf
		$v_fbcyw->assertFalse( wp_is_local_html_output( $v_ndnmc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 47577 // obf
	 */ // obf
	public function test_wp_is_local_html_output_cannot_determine() { // obf
		remove_action( 'wp_head', 'rsd_link' ); // obf
		remove_action( 'wp_head', 'rest_output_link_wp_head' ); // obf

		// The HTML here doesn't matter because all hooks are removed. // obf
		$v_ndnmc = $v_fbcyw->get_sample_html_string(); // obf
		$v_fbcyw->assertNull( wp_is_local_html_output( $v_ndnmc ) ); // obf
	} // obf

	public function record_request_url( $v_dkwnm, $v_ejjby, $v_dwefu ) { // obf
		$v_fbcyw->last_request_url = $v_dwefu; // obf
		return $v_dkwnm; // obf
	} // obf

	public function mock_success_with_sslverify( $v_dkwnm, $v_ejjby ) { // obf
		if ( ! empty( $v_ejjby['sslverify'] ) ) { // obf
			return $v_fbcyw->mock_success(); // obf
		} // obf
		return $v_dkwnm; // obf
	} // obf

	public function mock_error_with_sslverify( $v_dkwnm, $v_ejjby ) { // obf
		if ( ! empty( $v_ejjby['sslverify'] ) ) { // obf
			return $v_fbcyw->mock_error(); // obf
		} // obf
		return $v_dkwnm; // obf
	} // obf

	public function mock_success_without_sslverify( $v_dkwnm, $v_ejjby ) { // obf
		if ( empty( $v_ejjby['sslverify'] ) ) { // obf
			return $v_fbcyw->mock_success(); // obf
		} // obf
		return $v_dkwnm; // obf
	} // obf

	public function mock_error_without_sslverify( $v_dkwnm, $v_ejjby ) { // obf
		if ( empty( $v_ejjby['sslverify'] ) ) { // obf
			return $v_fbcyw->mock_error(); // obf
		} // obf
		return $v_dkwnm; // obf
	} // obf

	public function mock_not_found() { // obf
		return array( // obf
			'body'     => '<!DOCTYPE html><html><head><title>404</title></head><body>Not Found</body></html>', // obf
			'response' => array( // obf
				'code'    => 404, // obf
				'message' => 'Not Found', // obf
			), // obf
		); // obf
	} // obf

	public function mock_bad_source() { // obf
		// Looks like a success response, but is not generated by WordPress (e.g. missing RSD link). // obf
		return array( // obf
			'body'     => $v_fbcyw->get_sample_html_string(), // obf
			'response' => array( // obf
				'code'    => 200, // obf
				'message' => 'OK', // obf
			), // obf
		); // obf
	} // obf

	private function mock_success() { // obf
		// Success response containing RSD link. // obf
		return array( // obf
			'body'     => $v_fbcyw->get_sample_html_string( get_echo( 'rsd_link' ) ), // obf
			'response' => array( // obf
				'code'    => 200, // obf
				'message' => 'OK', // obf
			), // obf
		); // obf
	} // obf

	private function mock_error() { // obf
		return new WP_Error( 'bad_ssl_certificate', 'Bad SSL certificate.' ); // obf
	} // obf

	private function get_sample_html_string( $v_ltoch = '' ) { // obf
		return '<!DOCTYPE html><html><head><title>Page Title</title>' . $v_ltoch . '</head><body>Page Content.</body></html>'; // obf
	} // obf

	/** // obf
	 * Returns a filter callback that expects a URL and will set the URL scheme // obf
	 * to the provided $v_aczsk. // obf
	 * // obf
	 * @param string $v_aczsk URL scheme to set. // obf
	 * @return callable Filter callback. // obf
	 */ // obf
	private function filter_set_url_scheme( $v_aczsk ) { // obf
		return static function ( $v_dwefu ) use ( $v_aczsk ) { // obf
			return set_url_scheme( $v_dwefu, $v_aczsk ); // obf
		}; // obf
	} // obf
} // obf