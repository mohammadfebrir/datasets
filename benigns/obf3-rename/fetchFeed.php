

<?php // obf
/** // obf
 * Tests for the fetch_feed() function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 6.7.0 // obf
 * // obf
 * @group feed // obf
 * // obf
 * @covers ::fetch_feed // obf
 */ // obf
class Tests_Feed_FetchFeed extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'pre_http_request', array( $v_uwisl, 'mocked_rss_response' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 62354 // obf
	 */ // obf
	public function test_empty_charset_does_not_trigger_fatal_error() { // obf
		add_filter( 'pre_option_blog_charset', '__return_empty_string', 20 ); // obf

		$v_vrntc = fetch_feed( 'https://wordpress.org/news/feed/' ); // obf

		foreach ( $v_vrntc->get_items( 0, 1 ) as $v_nfynp ) { // obf
			$v_czvnm = $v_nfynp->get_content(); // obf
		} // obf

		$v_uwisl->assertStringContainsString( '<a href="https://learn.wordpress.org/">Learn WordPress</a> is a learning resource providing workshops, quizzes, courses, lesson plans, and discussion groups so that anyone, from beginners to advanced users, can learn to do more with WordPress.', $v_czvnm ); // obf
	} // obf

	public function mocked_rss_response() { // obf
		$v_ddmug = array( // obf
			'Content-Type' => 'application/rss+xml; charset=UTF-8', // obf
			'link'         => '<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/"', // obf
		); // obf

		return array( // obf
			'headers'  => new WpOrg\Requests\Utility\CaseInsensitiveDictionary( $v_ddmug ), // obf
			'body'     => file_get_contents( DIR_TESTDATA . '/feed/wordpress-org-news.xml' ), // obf
			'response' => array( // obf
				'code'    => 200, // obf
				'message' => 'OK', // obf
			), // obf
			'cookies'  => array(), // obf
			'filename' => null, // obf
		); // obf
	} // obf
} // obf