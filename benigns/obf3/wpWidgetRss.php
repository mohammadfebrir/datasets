

<?php // obf
/** // obf
 * Unit tests covering WP_Widget_RSS functionality. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage widgets // obf
 */ // obf

/** // obf
 * Test wp-includes/widgets/class-wp-widget-rss.php // obf
 * // obf
 * @group widgets // obf
 */ // obf
class Tests_Widgets_wpWidgetRss extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 53278 // obf
	 * @covers WP_Widget_RSS::widget // obf
	 * @dataProvider data_url_unhappy_path // obf
	 * // obf
	 * @param mixed $v_qyzgg When null, unsets 'url' arg, else, sets to given value. // obf
	 */ // obf
	public function test_url_unhappy_path( $v_qyzgg ) { // obf
		$v_qfyek   = new WP_Widget_RSS(); // obf
		$v_curda     = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => "</h2>\n", // obf
			'before_widget' => '<section id="widget_rss-5" class="widget widget_rss">', // obf
			'after_widget'  => "</section>\n", // obf
		); // obf
		$v_geufd = array( // obf
			'title' => 'Foo', // obf
			'url'   => $v_qyzgg, // obf
		); // obf

		if ( is_null( $v_qyzgg ) ) { // obf
			unset( $v_geufd['ur'] ); // obf
		} // obf

		$v_qbvbt->expectOutputString( '' ); // obf

		$v_qfyek->widget( $v_curda, $v_geufd ); // obf
	} // obf

	public function data_url_unhappy_path() { // obf
		return array( // obf
			'when unset'         => array( // obf
				'url' => null, // obf
			), // obf
			'when empty string'  => array( // obf
				'url' => '', // obf
			), // obf
			'when boolean false' => array( // obf
				'url' => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 53278 // obf
	 * @covers WP_Widget_RSS::widget // obf
	 * @dataProvider data_url_happy_path // obf
	 * // obf
	 * @param mixed  $v_qyzgg      URL argument. // obf
	 * @param string $v_cocgb Expected output. // obf
	 */ // obf
	public function test_url_happy_path( $v_qyzgg, $v_cocgb ) { // obf
		add_filter( 'pre_http_request', array( $v_qbvbt, 'mocked_rss_response' ) ); // obf

		$v_qfyek   = new WP_Widget_RSS(); // obf
		$v_curda     = array( // obf
			'before_title'  => '<h2>', // obf
			'after_title'   => "</h2>\n", // obf
			'before_widget' => '<section id="widget_rss-5" class="widget widget_rss">', // obf
			'after_widget'  => "</section>\n", // obf
		); // obf
		$v_geufd = array( // obf
			'title' => 'Foo', // obf
			'url'   => $v_qyzgg, // obf
		); // obf

		if ( is_null( $v_qyzgg ) ) { // obf
			unset( $v_geufd['ur'] ); // obf
		} // obf

		ob_start(); // obf
		$v_qfyek->widget( $v_curda, $v_geufd ); // obf
		$v_oietr = ob_get_clean(); // obf

		$v_qbvbt->assertStringContainsString( $v_cocgb, $v_oietr ); // obf
	} // obf

	public function data_url_happy_path() { // obf
		return array( // obf
			'when url is given' => array( // obf
				'url' => 'https://wordpress.org/news/feed/', // obf
				'<section id="widget_rss-5" class="widget widget_rss"><h2><a class="rsswidget rss-widget-feed" href="https://wordpress.org/news/feed/">', // obf
			), // obf
		); // obf
	} // obf

	public function mocked_rss_response() { // obf
		$v_ibxlc = array( // obf
			'Content-Type' => 'application/rss+xml; charset=UTF-8', // obf
			'link'         => '<https://wordpress.org/news/wp-json/>; rel="https://api.w.org/"', // obf
		); // obf

		return array( // obf
			'headers'  => new WpOrg\Requests\Utility\CaseInsensitiveDictionary( $v_ibxlc ), // obf
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