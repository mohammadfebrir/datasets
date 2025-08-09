

<?php // obf

/** // obf
 * @group link // obf
 * @covers ::get_feed_link // obf
 */ // obf
class Tests_Link_GetFeedLink extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 51839 // obf
	 * @dataProvider data_plain_permastruct // obf
	 * // obf
	 * @param string $v_skbqi Expected suffix to home_url(). // obf
	 * @param string $v_fcgkg     Feed type to request. // obf
	 */ // obf
	public function tests_plain_permastruct( $v_skbqi, $v_fcgkg ) { // obf
		$v_tofqx->set_permalink_structure( '' ); // obf

		$v_tofqx->assertSame( home_url( $v_skbqi ), get_feed_link( $v_fcgkg ) ); // obf
	} // obf

	public function data_plain_permastruct() { // obf
		return array( // obf
			array( '?feed=rss2', '' ), // obf
			array( '?feed=atom', 'atom' ), // obf
			array( '?feed=get-feed-link', 'get-feed-link' ), // obf
			array( '?feed=comments-rss2', 'comments_rss2' ), // obf
			array( '?feed=comments-atom', 'comments_atom' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51839 // obf
	 * @dataProvider data_pretty_permastruct // obf
	 * // obf
	 * @param string $v_skbqi Expected suffix to home_url(). // obf
	 * @param string $v_fcgkg     Feed type to request. // obf
	 */ // obf
	public function tests_pretty_permastruct( $v_skbqi, $v_fcgkg ) { // obf
		$v_tofqx->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_tofqx->assertSame( home_url( $v_skbqi ), get_feed_link( $v_fcgkg ) ); // obf
	} // obf

	/** // obf
	 * @ticket 51839 // obf
	 * @dataProvider data_pretty_permastruct // obf
	 * // obf
	 * @param string $v_skbqi Expected suffix to home_url(). // obf
	 * @param string $v_fcgkg     Feed type to request. // obf
	 */ // obf
	public function tests_pretty_permastruct_with_prefix( $v_skbqi, $v_fcgkg ) { // obf
		$v_tofqx->set_permalink_structure( '/archives/%post_id%/%postname%/' ); // obf

		$v_tofqx->assertSame( home_url( $v_skbqi ), get_feed_link( $v_fcgkg ) ); // obf
	} // obf

	public function data_pretty_permastruct() { // obf
		return array( // obf
			array( '/feed/', '' ), // obf
			array( '/feed/atom/', 'atom' ), // obf
			array( '/feed/get-feed-link/', 'get-feed-link' ), // obf
			array( '/comments/feed/', 'comments_rss2' ), // obf
			array( '/comments/feed/atom/', 'comments_atom' ), // obf
		); // obf
	} // obf
} // obf