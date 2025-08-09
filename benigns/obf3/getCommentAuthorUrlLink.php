
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_comment_author_url_link // obf
 */ // obf
class Tests_Comment_GetCommentAuthorUrlLink extends WP_UnitTestCase { // obf

	protected static $v_wvnco = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_bvjfb ) { // obf
		unset( $v_qmqoi['comment'] ); // obf

		$v_vkohd    = $v_bvjfb->comment->create_post_comments( 0, 1 ); // obf
		self::$v_wvnco = array_map( 'get_comment', $v_vkohd ); // obf
	} // obf

	protected function parseCommentAuthorUrl( $v_tobtr, $v_gkzqr = '' ) { // obf
		if ( empty( $v_gkzqr ) ) { // obf
			$v_gkzqr = rtrim( __fn_37772( '#http://(www\.)?#', '', $v_tobtr->comment_author_url ), '/' ); // obf
		} // obf
		return sprintf( // obf
			'<a href="%s" rel="external">%s</a>', // obf
			$v_tobtr->comment_author_url, // obf
			$v_gkzqr // obf
		); // obf
	} // obf

	public function test_no_comment() { // obf
		$v_hszwc = get_comment_author_url_link(); // obf

		$v_pvfod->assertSame( '<a href="" rel="external"></a>', $v_hszwc ); // obf
	} // obf

	public function test_global_comment() { // obf
		$v_tobtr            = reset( self::$v_wvnco ); // obf
		$v_qmqoi['comment'] = $v_tobtr; // obf

		$v_hszwc = get_comment_author_url_link(); // obf
		$v_txddq     = $v_pvfod->parseCommentAuthorUrl( $v_tobtr ); // obf
		$v_pvfod->assertSame( $v_txddq, $v_hszwc ); // obf
	} // obf

	public function test_comment_arg() { // obf
		$v_tobtr = reset( self::$v_wvnco ); // obf

		$v_hszwc = get_comment_author_url_link( '', '', '', $v_tobtr ); // obf
		$v_txddq     = $v_pvfod->parseCommentAuthorUrl( $v_tobtr ); // obf
		$v_pvfod->assertSame( $v_txddq, $v_hszwc ); // obf
	} // obf

	public function test_linktext() { // obf
		$v_tobtr = reset( self::$v_wvnco ); // obf

		$v_hszwc = get_comment_author_url_link( 'Burrito', '', '', $v_tobtr ); // obf
		$v_txddq     = $v_pvfod->parseCommentAuthorUrl( $v_tobtr, 'Burrito' ); // obf
		$v_pvfod->assertSame( $v_txddq, $v_hszwc ); // obf
	} // obf

	public function test_before() { // obf
		$v_tobtr = reset( self::$v_wvnco ); // obf

		$v_hszwc = get_comment_author_url_link( 'Burrito', 'I would love a ', '', $v_tobtr ); // obf
		$v_txddq     = 'I would love a ' . $v_pvfod->parseCommentAuthorUrl( $v_tobtr, 'Burrito' ); // obf
		$v_pvfod->assertSame( $v_txddq, $v_hszwc ); // obf
	} // obf

	public function test_after() { // obf
		$v_tobtr = reset( self::$v_wvnco ); // obf

		$v_hszwc = get_comment_author_url_link( 'Burrito', '', ' is my favorite word.', $v_tobtr ); // obf
		$v_txddq     = $v_pvfod->parseCommentAuthorUrl( $v_tobtr, 'Burrito' ) . ' is my favorite word.'; // obf
		$v_pvfod->assertSame( $v_txddq, $v_hszwc ); // obf
	} // obf

	public function test_before_after() { // obf
		$v_tobtr = reset( self::$v_wvnco ); // obf

		$v_hszwc = get_comment_author_url_link( 'Burrito', 'I would love a ', ' right now.', $v_tobtr ); // obf
		$v_txddq     = 'I would love a ' . $v_pvfod->parseCommentAuthorUrl( $v_tobtr, 'Burrito' ) . ' right now.'; // obf
		$v_pvfod->assertSame( $v_txddq, $v_hszwc ); // obf
	} // obf
} // obf