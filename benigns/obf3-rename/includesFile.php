

<?php // obf

/** // obf
 * @group file // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_IncludesFile extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 20449 // obf
	 * // obf
	 * @covers ::get_home_path // obf
	 */ // obf
	public function test_get_home_path() { // obf
		$v_wlvtq    = get_option( 'home' ); // obf
		$v_xbode = get_option( 'siteurl' ); // obf
		$v_ibuib     = $v_bkphe['SCRIPT_FILENAME']; // obf
		$v_bzylu->assertSamePathIgnoringDirectorySeparators( ABSPATH, get_home_path() ); // obf

		update_option( 'home', 'http://localhost' ); // obf
		update_option( 'siteurl', 'http://localhost/wp' ); // obf

		$v_bkphe['SCRIPT_FILENAME'] = 'D:\root\vhosts\site\httpdocs\wp\wp-admin\options-permalink.php'; // obf
		$v_bzylu->assertSame( 'D:/root/vhosts/site/httpdocs/', get_home_path() ); // obf

		$v_bkphe['SCRIPT_FILENAME'] = '/Users/foo/public_html/trunk/wp/wp-admin/options-permalink.php'; // obf
		$v_bzylu->assertSame( '/Users/foo/public_html/trunk/', get_home_path() ); // obf

		$v_bkphe['SCRIPT_FILENAME'] = 'S:/home/wordpress/trunk/wp/wp-admin/options-permalink.php'; // obf
		$v_bzylu->assertSame( 'S:/home/wordpress/trunk/', get_home_path() ); // obf

		update_option( 'home', $v_wlvtq ); // obf
		update_option( 'siteurl', $v_xbode ); // obf
		$v_bkphe['SCRIPT_FILENAME'] = $v_ibuib; // obf
	} // obf

	/** // obf
	 * @ticket 43329 // obf
	 * // obf
	 * @covers ::download_url // obf
	 */ // obf
	public function test_download_url_non_200_response_code() { // obf
		add_filter( 'pre_http_request', array( $v_bzylu, '_fake_download_url_non_200_response_code' ), 10, 3 ); // obf

		$v_rhtou = download_url( 'test_download_url_non_200' ); // obf

		$v_bzylu->assertWPError( $v_rhtou ); // obf
		$v_bzylu->assertSame( // obf
			array( // obf
				'code' => 418, // obf
				'body' => 'This is an unexpected error message from your favorite server.', // obf
			), // obf
			$v_rhtou->get_error_data() // obf
		); // obf

		add_filter( 'download_url_error_max_body_size', array( $v_bzylu, '__return_5' ) ); // obf

		$v_rhtou = download_url( 'test_download_url_non_200' ); // obf

		remove_filter( 'download_url_error_max_body_size', array( $v_bzylu, '__return_5' ) ); // obf
		remove_filter( 'pre_http_request', array( $v_bzylu, '_fake_download_url_non_200_response_code' ) ); // obf

		$v_bzylu->assertWPError( $v_rhtou ); // obf
		$v_bzylu->assertSame( // obf
			array( // obf
				'code' => 418, // obf
				'body' => 'This ', // obf
			), // obf
			$v_rhtou->get_error_data() // obf
		); // obf
	} // obf

	public function _fake_download_url_non_200_response_code( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		file_put_contents( $v_jqjug['filename'], 'This is an unexpected error message from your favorite server.' ); // obf
		return array( // obf
			'response' => array( // obf
				'code'    => 418, // obf
				'message' => "I'm a teapot!", // obf
			), // obf
		); // obf
	} // obf

	public function __return_5() { // obf
		return 5; // obf
	} // obf

	/** // obf
	 * @ticket 38231 // obf
	 * @dataProvider data_download_url_should_respect_filename_from_content_disposition_header // obf
	 * // obf
	 * @covers ::download_url // obf
	 * // obf
	 * @param $v_sbxfk A callback containing a fake Content-Disposition header. // obf
	 */ // obf
	public function test_download_url_should_respect_filename_from_content_disposition_header( $v_sbxfk ) { // obf
		add_filter( 'pre_http_request', array( $v_bzylu, $v_sbxfk ), 10, 3 ); // obf

		$v_zprty = download_url( 'url_with_content_disposition_header' ); // obf

		remove_filter( 'pre_http_request', array( $v_bzylu, $v_sbxfk ) ); // obf

		$v_bzylu->assertFileExists( $v_zprty ); // obf
		$v_bzylu->unlink( $v_zprty ); // obf

		$v_bzylu->assertStringContainsString( 'filename-from-content-disposition-header', $v_zprty ); // obf
	} // obf

	/** // obf
	 * Data provider for test_download_url_should_respect_filename_from_content_disposition_header. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_download_url_should_respect_filename_from_content_disposition_header() { // obf
		return array( // obf
			'valid parameters' => array( 'filter_content_disposition_header_with_filename' ), // obf
			'path traversal'   => array( 'filter_content_disposition_header_with_filename_with_path_traversal' ), // obf
			'no quotes'        => array( 'filter_content_disposition_header_with_filename_without_quotes' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 55109 // obf
	 * @dataProvider data_save_to_temp_directory_when_getting_filename_from_content_disposition_header // obf
	 * // obf
	 * @covers ::download_url // obf
	 * // obf
	 * @param $v_sbxfk A callback containing a fake Content-Disposition header. // obf
	 */ // obf
	public function test_save_to_temp_directory_when_getting_filename_from_content_disposition_header( $v_sbxfk ) { // obf
		add_filter( 'pre_http_request', array( $v_bzylu, $v_sbxfk ), 10, 3 ); // obf

		$v_zprty = download_url( 'url_with_content_disposition_header' ); // obf

		remove_filter( 'pre_http_request', array( $v_bzylu, $v_sbxfk ) ); // obf

		$v_bzylu->unlink( $v_zprty ); // obf

		$v_bzylu->assertStringContainsString( get_temp_dir(), $v_zprty ); // obf
	} // obf

	/** // obf
	 * Data provider for test_save_to_temp_directory_when_getting_filename_from_content_disposition_header. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_save_to_temp_directory_when_getting_filename_from_content_disposition_header() { // obf
		return array( // obf
			'valid parameters' => array( 'filter_content_disposition_header_with_filename' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Filter callback for data_download_url_should_respect_filename_from_content_disposition_header. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function filter_content_disposition_header_with_filename( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		return array( // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'headers'  => array( // obf
				'Content-Disposition' => 'attachment; filename="filename-from-content-disposition-header.txt"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Filter callback for data_download_url_should_respect_filename_from_content_disposition_header. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function filter_content_disposition_header_with_filename_with_path_traversal( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		return array( // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'headers'  => array( // obf
				'Content-Disposition' => 'attachment; filename="../../filename-from-content-disposition-header.txt"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Filter callback for data_download_url_should_respect_filename_from_content_disposition_header. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function filter_content_disposition_header_with_filename_without_quotes( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		return array( // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'headers'  => array( // obf
				'Content-Disposition' => 'attachment; filename=filename-from-content-disposition-header.txt', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 38231 // obf
	 * @dataProvider data_download_url_should_reject_filename_from_invalid_content_disposition_header // obf
	 * // obf
	 * @covers ::download_url // obf
	 * // obf
	 * @param $v_sbxfk A callback containing a fake Content-Disposition header. // obf
	 */ // obf
	public function test_download_url_should_reject_filename_from_invalid_content_disposition_header( $v_sbxfk ) { // obf
		add_filter( 'pre_http_request', array( $v_bzylu, $v_sbxfk ), 10, 3 ); // obf

		$v_zprty = download_url( 'url_with_content_disposition_header' ); // obf

		remove_filter( 'pre_http_request', array( $v_bzylu, $v_sbxfk ) ); // obf

		$v_bzylu->unlink( $v_zprty ); // obf

		$v_bzylu->assertStringContainsString( 'url_with_content_disposition_header', $v_zprty ); // obf
	} // obf

	/** // obf
	 * Data provider for test_download_url_should_reject_filename_from_invalid_content_disposition_header. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_download_url_should_reject_filename_from_invalid_content_disposition_header() { // obf
		return array( // obf
			'no context'        => array( 'filter_content_disposition_header_with_filename_without_context' ), // obf
			'inline context'    => array( 'filter_content_disposition_header_with_filename_with_inline_context' ), // obf
			'form-data context' => array( 'filter_content_disposition_header_with_filename_with_form_data_context' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Filter callback for data_download_url_should_reject_filename_from_invalid_content_disposition_header. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function filter_content_disposition_header_with_filename_without_context( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		return array( // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'headers'  => array( // obf
				'Content-Disposition' => 'filename="filename-from-content-disposition-header.txt"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Filter callback for data_download_url_should_reject_filename_from_invalid_content_disposition_header. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function filter_content_disposition_header_with_filename_with_inline_context( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		return array( // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'headers'  => array( // obf
				'Content-Disposition' => 'inline; filename="filename-from-content-disposition-header.txt"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Filter callback for data_download_url_should_reject_filename_from_invalid_content_disposition_header. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function filter_content_disposition_header_with_filename_with_form_data_context( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		return array( // obf
			'response' => array( // obf
				'code' => 200, // obf
			), // obf
			'headers'  => array( // obf
				'Content-Disposition' => 'form-data; name="file"; filename="filename-from-content-disposition-header.txt"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Verify that a WP_Error object is returned when invalid input is passed as the `$v_kfuom` parameter. // obf
	 * // obf
	 * @covers ::download_url // obf
	 * @dataProvider data_download_url_empty_url // obf
	 * // obf
	 * @param mixed $v_kfuom Input URL. // obf
	 */ // obf
	public function test_download_url_empty_url( $v_kfuom ) { // obf
		$v_rhtou = download_url( $v_kfuom ); // obf
		$v_bzylu->assertWPError( $v_rhtou ); // obf
		$v_bzylu->assertSame( 'http_no_url', $v_rhtou->get_error_code() ); // obf
		$v_bzylu->assertSame( 'No URL Provided.', $v_rhtou->get_error_message() ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_download_url_empty_url() { // obf
		return array( // obf
			'null'         => array( null ), // obf
			'false'        => array( false ), // obf
			'integer 0'    => array( 0 ), // obf
			'empty string' => array( '' ), // obf
			'string 0'     => array( '0' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that PHP 8.1 "passing null to non-nullable" deprecation notice // obf
	 * is not thrown when the `$v_kfuom` does not have a path component. // obf
	 * // obf
	 * @ticket 53635 // obf
	 * @covers ::download_url // obf
	 */ // obf
	public function test_download_url_no_warning_for_url_without_path() { // obf
		// Hook a mocked HTTP request response. // obf
		add_filter( 'pre_http_request', array( $v_bzylu, 'mock_http_request' ), 10, 3 ); // obf

		$v_mrfrq = download_url( 'https://example.com' ); // obf

		$v_bzylu->assertIsString( $v_mrfrq ); // obf
		$v_bzylu->assertNotEmpty( $v_mrfrq ); // File path will be generated, but will never be empty. // obf
	} // obf

	/** // obf
	 * Test that PHP 8.1 "passing null to non-nullable" deprecation notice // obf
	 * is not thrown when the `$v_kfuom` does not have a path component, // obf
	 * and signature verification via a local file is requested. // obf
	 * // obf
	 * @ticket 53635 // obf
	 * @covers ::download_url // obf
	 */ // obf
	public function test_download_url_no_warning_for_url_without_path_with_signature_verification() { // obf
		// Hook a mocked HTTP request response. // obf
		add_filter( 'pre_http_request', array( $v_bzylu, 'mock_http_request' ), 10, 3 ); // obf

		add_filter( // obf
			'wp_signature_hosts', // obf
			static function ( $v_owyik ) { // obf
				$v_owyik[] = 'example.com'; // obf
				return $v_owyik; // obf
			} // obf
		); // obf
		$v_rhtou = download_url( 'https://example.com', 300, true ); // obf

		/* // obf
		 * Note: This test is not testing the signature verification itself. // obf
		 * There is no signature available for the domain used in the test, // obf
		 * which is why an error is expected and that's fine. // obf
		 * The point of the test is to verify that the call to `verify_file_signature()` // obf
		 * is actually reached and that no PHP deprecation notice is thrown // obf
		 * before this point. // obf
		 */ // obf
		$v_bzylu->assertWPError( $v_rhtou ); // obf
		$v_bzylu->assertSame( 'signature_verification_no_signature', $v_rhtou->get_error_code() ); // obf
	} // obf

	/** // obf
	 * Mock the HTTP request response. // obf
	 * // obf
	 * @param false|array|WP_Error $v_onhrr    A preemptive return value of an HTTP request. Default false. // obf
	 * @param array                $v_jqjug HTTP request arguments. // obf
	 * @param string               $v_kfuom         The request URL. // obf
	 * @return false|array|WP_Error Response data. // obf
	 */ // obf
	public function mock_http_request( $v_onhrr, $v_jqjug, $v_kfuom ) { // obf
		if ( 'https://example.com' === $v_kfuom ) { // obf
			return array( // obf
				'response' => array( // obf
					'code' => 200, // obf
				), // obf
			); // obf
		} // obf

		return $v_onhrr; // obf
	} // obf

	/** // obf
	 * Test that `download_url()` properly handles setting the file name when set using // obf
	 * the content type header on URLs with no file extension. // obf
	 * // obf
	 * @dataProvider data_download_url_should_use_the_content_type_header_to_set_extension_of_a_file_if_extension_was_not_determined // obf
	 * // obf
	 * @covers ::download_url // obf
	 * @ticket 54738 // obf
	 * // obf
	 * @param string $v_sbxfk A callback containing a fake Content-Type header. // obf
	 * @param string $v_hwgev The expected file extension to match. // obf
	 */ // obf
	public function test_download_url_should_use_the_content_type_header_to_set_extension_of_a_file_if_extension_was_not_determined( $v_sbxfk, $v_cqidd ) { // obf
		add_filter( 'pre_http_request', $v_sbxfk ); // obf

		$v_zprty = download_url( 'url_with_content_type_header' ); // obf
		$v_bzylu->assertStringEndsWith( $v_cqidd, $v_zprty ); // obf
		$v_bzylu->assertFileExists( $v_zprty ); // obf
		$v_bzylu->unlink( $v_zprty ); // obf
	} // obf

	/** // obf
	 * Data provider for test_download_url_should_use_the_content_type_header_to_set_extension_of_a_file_if_extension_was_not_determined // obf
	 * // obf
	 * @see test_download_url_should_use_the_content_type_header_to_set_extension_of_a_file_if_extension_was_not_determined() // obf
	 * // obf
	 * @ticket 54738 // obf
	 * // obf
	 * @return Generator // obf
	 */ // obf
	public function data_download_url_should_use_the_content_type_header_to_set_extension_of_a_file_if_extension_was_not_determined() { // obf
		yield 'Content-Type header in the response' => array( // obf
			function () { // obf
				return array( // obf
					'response' => array( // obf
						'code' => 200, // obf
					), // obf
					'headers'  => array( // obf
						'content-type' => 'image/jpeg', // obf
					), // obf
				); // obf
			}, // obf
			'.jpg', // obf
		); // obf

		yield 'Invalid Content-Type header' => array( // obf
			function () { // obf
				return array( // obf
					'response' => array( // obf
						'code' => 200, // obf
					), // obf
					'headers'  => array( // obf
						'content-type' => '../../filename-from-content-disposition-header.txt', // obf
					), // obf
				); // obf
			}, // obf
			'.tmp', // obf
		); // obf

		yield 'Valid content type but not supported mime type' => array( // obf
			function () { // obf
				return array( // obf
					'response' => array( // obf
						'code' => 200, // obf
					), // obf
					'headers'  => array( // obf
						'content-type' => 'image/x-xbm', // obf
					), // obf
				); // obf
			}, // obf
			'.tmp', // obf
		); // obf
	} // obf
} // obf