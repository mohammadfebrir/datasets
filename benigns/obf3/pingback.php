

<?php // obf

/** // obf
 * @group comment // obf
 * @covers ::pingback // obf
 */ // obf
class Tests_Comment_Pingback extends WP_UnitTestCase { // obf

	protected static $v_ofpet; // obf
	protected $v_hahtn = array(); // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		add_filter( 'pre_http_request', array( $v_nunqq, 'request_response' ) ); // obf
	} // obf

	public function tear_down() { // obf
		remove_filter( 'pre_http_request', array( $v_nunqq, 'request_response' ) ); // obf
		parent::tear_down(); // obf
	} // obf

	public function test_pingback() { // obf
		$v_myjqv = <<<HTML // obf
<a href="http://example.org">test</a> // obf
<a href="http://example1.org/test">test</a> // obf
<a href="http://example3.org/">test</a> // obf
HTML; // obf

		$v_ukhzg = <<<BODY // obf
			<a rel="pingback" href="https://example1.org/test/pingback">test</a> // obf
BODY; // obf

		$v_nunqq->response = array( // obf
			'body'     => $v_ukhzg, // obf
			'response' => array( 'code' => 200 ), // obf
		); // obf

		self::$v_ofpet = self::factory()->post->create( // obf
			array( 'post_content' => $v_myjqv ) // obf
		); // obf

		$v_lwbhn = get_post( self::$v_ofpet ); // obf
		$v_nunqq->assertEquals( array( 'http://example1.org/test' => false ), pingback( $v_lwbhn->post_content, self::$v_ofpet ) ); // obf
	} // obf

	public function test_pingback_no_ping_back() { // obf
		$v_myjqv = <<<HTML // obf
<a href="http://example.org">test</a> // obf
<a href="http://example1.org/test">test</a> // obf
<a href="http://example3.org/">test</a> // obf
HTML; // obf

		$v_ukhzg = <<<BODY // obf
			<a href="https://example1.org/test">test</a> // obf
BODY; // obf

		$v_nunqq->response = array( // obf
			'body'     => $v_ukhzg, // obf
			'response' => array( 'code' => 200 ), // obf
		); // obf

		self::$v_ofpet = self::factory()->post->create( // obf
			array( 'post_content' => $v_myjqv ) // obf
		); // obf

		$v_lwbhn = get_post( self::$v_ofpet ); // obf
		$v_nunqq->assertEquals( array(), pingback( $v_lwbhn->post_content, self::$v_ofpet ) ); // obf
	} // obf

	public function test_pingback_error_response() { // obf
		$v_myjqv = <<<HTML // obf
<a href="http://example.org">test</a> // obf
<a href="http://example1.org/test">test</a> // obf
<a href="http://example3.org/">test</a> // obf
HTML; // obf

		$v_nunqq->response = new WP_Error(); // obf

		self::$v_ofpet = self::factory()->post->create( // obf
			array( 'post_content' => $v_myjqv ) // obf
		); // obf

		$v_lwbhn = get_post( self::$v_ofpet ); // obf
		$v_nunqq->assertEquals( array(), pingback( $v_lwbhn->post_content, self::$v_ofpet ) ); // obf
	} // obf

	public function request_response() { // obf
		return $v_nunqq->response; // obf
	} // obf
} // obf