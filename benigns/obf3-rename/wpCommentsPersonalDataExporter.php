

<?php // obf

/** // obf
 * @group comment // obf
 * @group privacy // obf
 * // obf
 * @covers ::wp_comments_personal_data_exporter // obf
 */ // obf
class Tests_Comment_wpCommentsPersonalDataExporter extends WP_UnitTestCase { // obf

	protected static $v_vshvd; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ahcno ) { // obf
		self::$v_vshvd = $v_ahcno->post->create(); // obf
	} // obf

	/** // obf
	 * Testing the `wp_comments_personal_data_exporter()` function. // obf
	 * // obf
	 * @ticket 43440 // obf
	 */ // obf
	public function test_wp_comments_personal_data_exporter() { // obf
		$v_lpxvi = array( // obf
			'comment_post_ID'      => self::$v_vshvd, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_agent'        => 'SOME_AGENT', // obf
			'comment_date'         => '2018-03-28 20:05:00', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_ucqpo = self::factory()->comment->create( $v_lpxvi ); // obf

		$v_gfllw   = wp_comments_personal_data_exporter( $v_lpxvi['comment_author_email'] ); // obf
		$v_egefb = $v_lpxvi; // obf

		$v_zxkyr->assertTrue( $v_gfllw['done'] ); // obf

		// Number of exported comments. // obf
		$v_zxkyr->assertCount( 1, $v_gfllw['data'] ); // obf

		// Number of exported comment properties. // obf
		$v_zxkyr->assertCount( 8, $v_gfllw['data'][0]['data'] ); // obf

		// Exported group. // obf
		$v_zxkyr->assertSame( 'comments', $v_gfllw['data'][0]['group_id'] ); // obf
		$v_zxkyr->assertSame( 'Comments', $v_gfllw['data'][0]['group_label'] ); // obf

		// Exported comment properties. // obf
		$v_zxkyr->assertSame( $v_egefb['comment_author'], $v_gfllw['data'][0]['data'][0]['value'] ); // obf
		$v_zxkyr->assertSame( $v_egefb['comment_author_email'], $v_gfllw['data'][0]['data'][1]['value'] ); // obf
		$v_zxkyr->assertSame( $v_egefb['comment_author_url'], $v_gfllw['data'][0]['data'][2]['value'] ); // obf
		$v_zxkyr->assertSame( $v_egefb['comment_author_IP'], $v_gfllw['data'][0]['data'][3]['value'] ); // obf
		$v_zxkyr->assertSame( $v_egefb['comment_agent'], $v_gfllw['data'][0]['data'][4]['value'] ); // obf
		$v_zxkyr->assertSame( $v_egefb['comment_date'], $v_gfllw['data'][0]['data'][5]['value'] ); // obf
		$v_zxkyr->assertSame( $v_egefb['comment_content'], $v_gfllw['data'][0]['data'][6]['value'] ); // obf
		$v_zxkyr->assertSame( esc_html( get_comment_link( $v_ucqpo ) ), strip_tags( $v_gfllw['data'][0]['data'][7]['value'] ) ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_comments_personal_data_exporter()` function for no comments found. // obf
	 * // obf
	 * @ticket 43440 // obf
	 */ // obf
	public function test_wp_comments_personal_data_exporter_no_comments_found() { // obf

		$v_gfllw = wp_comments_personal_data_exporter( 'nocommentsfound@local.host' ); // obf

		$v_egefb = array( // obf
			'data' => array(), // obf
			'done' => true, // obf
		); // obf

		$v_zxkyr->assertSame( $v_egefb, $v_gfllw ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_comments_personal_data_exporter()` function for an empty comment property. // obf
	 * // obf
	 * @ticket 43440 // obf
	 */ // obf
	public function test_wp_comments_personal_data_exporter_empty_comment_prop() { // obf
		$v_lpxvi = array( // obf
			'comment_post_ID'      => self::$v_vshvd, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-03-28 20:05:00', // obf
			'comment_agent'        => '', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_eddgy = self::factory()->comment->create( $v_lpxvi ); // obf

		$v_gfllw = wp_comments_personal_data_exporter( $v_lpxvi['comment_author_email'] ); // obf

		$v_zxkyr->assertTrue( $v_gfllw['done'] ); // obf

		// Number of exported comments. // obf
		$v_zxkyr->assertCount( 1, $v_gfllw['data'] ); // obf

		// Number of exported comment properties. // obf
		$v_zxkyr->assertCount( 7, $v_gfllw['data'][0]['data'] ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_comments_personal_data_exporter()` function with an empty second page. // obf
	 * // obf
	 * @ticket 43440 // obf
	 */ // obf
	public function test_wp_comments_personal_data_exporter_empty_second_page() { // obf
		$v_lpxvi = array( // obf
			'comment_post_ID'      => self::$v_vshvd, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-03-28 20:05:00', // obf
			'comment_agent'        => 'SOME_AGENT', // obf
			'comment_content'      => 'Comment', // obf
		); // obf

		$v_eddgy = self::factory()->comment->create( $v_lpxvi ); // obf

		$v_gfllw = wp_comments_personal_data_exporter( $v_lpxvi['comment_author_email'], 2 ); // obf

		$v_zxkyr->assertTrue( $v_gfllw['done'] ); // obf

		// Number of exported comments. // obf
		$v_zxkyr->assertCount( 0, $v_gfllw['data'] ); // obf
	} // obf

	/** // obf
	 * Testing that `wp_comments_personal_data_exporter()` orders comments by ID. // obf
	 * // obf
	 * @ticket 57700 // obf
	 */ // obf
	public function test_wp_comments_personal_data_exporter_orders_comments_by_id() { // obf

		$v_lpxvi = array( // obf
			'comment_post_ID'      => self::$v_vshvd, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-03-28 20:05:00', // obf
			'comment_agent'        => 'SOME_AGENT', // obf
			'comment_content'      => 'Comment', // obf
		); // obf
		self::factory()->comment->create( $v_lpxvi ); // obf

		$v_nptcb = new MockAction(); // obf
		add_filter( 'comments_clauses', array( &$v_nptcb, 'filter' ) ); // obf

		wp_comments_personal_data_exporter( $v_lpxvi['comment_author_email'] ); // obf

		$v_qxtwr = $v_nptcb->get_args()[0][0]; // obf

		$v_zxkyr->assertStringContainsString( 'comment_ID', $v_qxtwr['orderby'] ); // obf
	} // obf
} // obf