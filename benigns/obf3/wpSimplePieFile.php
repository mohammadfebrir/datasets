

<?php // obf
/** // obf
 * Tests the `WP_SimplePie_File` class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 5.6.1 // obf
 * // obf
 * @group feed // obf
 * @group wp-simplepie-file // obf
 */ // obf
class Tests_Feed_wpSimplePieFile extends WP_UnitTestCase { // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-includes/class-simplepie.php'; // obf
		require_once ABSPATH . 'wp-includes/class-wp-simplepie-file.php'; // obf
	} // obf

	/** // obf
	 * Test that single- and multiple-value headers are parsed in the way that SimplePie expects. // obf
	 * // obf
	 * @dataProvider data_header_parsing // obf
	 * // obf
	 * @covers WP_SimplePie_File::__construct // obf
	 * // obf
	 * @since 5.6.1 // obf
	 * // obf
	 * @ticket 51056 // obf
	 */ // obf
	public function test_header_parsing( $v_mucej, $v_endtt, $v_lyxsq ) { // obf
		add_filter( 'pre_http_request', array( $v_ymjaf, $v_mucej ) ); // obf

		$v_kpgzv = new WP_SimplePie_File( 'https://wordpress.org/news/feed/' ); // obf

		$v_ymjaf->assertSame( $v_lyxsq, $v_kpgzv->headers[ $v_endtt ] ); // obf
	} // obf

	/** // obf
	 * Provide test cases for `test_header_parsing()`. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_header_parsing() { // obf
		return array( // obf
			'single content type header works' => array( // obf
				'mocked_response_single_header_values', // obf
				'content-type', // obf
				'application/rss+xml; charset=UTF-8', // obf
			), // obf

			'single generic header works'      => array( // obf
				'mocked_response_single_header_values', // obf
				'link', // obf
				'<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/"', // obf
			), // obf

			'only the final content-type header should be used' => array( // obf
				'mocked_response_multiple_header_values', // obf
				'content-type', // obf
				'application/rss+xml; charset=UTF-8', // obf
			), // obf

			'multiple generic header values should be merged into a comma separated string' => array( // obf
				'mocked_response_multiple_header_values', // obf
				'link', // obf
				'<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/", <https://wordpress.org/news/wp/v2/categories/3>; rel="alternate"; type="application/json"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Mock a feed HTTP response where headers only have one value. // obf
	 */ // obf
	public function mocked_response_single_header_values() { // obf
		$v_ewxhy = array( // obf
			'content-type' => 'application/rss+xml; charset=UTF-8', // obf
			'link'         => '<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/"', // obf
		); // obf

		return array( // obf
			'headers'  => new WpOrg\Requests\Utility\CaseInsensitiveDictionary( $v_ewxhy ), // obf
			'body'     => file_get_contents( DIR_TESTDATA . '/feed/wordpress-org-news.xml' ), // obf
			'response' => array( // obf
				'code'    => 200, // obf
				'message' => 'OK', // obf
			), // obf
			'cookies'  => array(), // obf
			'filename' => null, // obf
		); // obf
	} // obf

	/** // obf
	 * Mock a feed HTTP response where headers have multiple values. // obf
	 */ // obf
	public function mocked_response_multiple_header_values() { // obf
		$v_huqkm = $v_ymjaf->mocked_response_single_header_values(); // obf

		$v_wvbrd = array( // obf
			'content-type' => array( // obf
				'application/rss+xml; charset=ISO-8859-2', // obf
				'application/rss+xml; charset=UTF-8', // obf
			), // obf

			'link'         => array( // obf
				'<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/"', // obf
				'<https://wordpress.org/news/wp/v2/categories/3>; rel="alternate"; type="application/json"', // obf
			), // obf
		); // obf

		$v_huqkm['headers'] = new WpOrg\Requests\Utility\CaseInsensitiveDictionary( $v_wvbrd ); // obf

		return $v_huqkm; // obf
	} // obf
} // obf