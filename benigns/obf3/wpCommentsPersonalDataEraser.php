

<?php // obf

/** // obf
 * @group comment // obf
 * @group privacy // obf
 * // obf
 * @covers ::wp_comments_personal_data_eraser // obf
 */ // obf
class Tests_Comment_wpCommentsPersonalDataEraser extends WP_UnitTestCase { // obf

	protected static $v_lipmv; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_tnbpd ) { // obf
		self::$v_lipmv = $v_tnbpd->post->create(); // obf
	} // obf

	/** // obf
	 * The `wp_comments_personal_data_eraser()` function should erase user's comments. // obf
	 * // obf
	 * @ticket 43442 // obf
	 */ // obf
	public function test_wp_comments_personal_data_eraser() { // obf

		$v_pjqdj = self::factory()->user->create(); // obf

		$v_wwxpr       = array( // obf
			'user_id'              => $v_pjqdj, // obf
			'comment_post_ID'      => self::$v_lipmv, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-04-14 17:20:00', // obf
			'comment_agent'        => 'COMMENT_AGENT', // obf
			'comment_content'      => 'Comment Content', // obf
		); // obf
		$v_rolap = self::factory()->comment->create( $v_wwxpr ); // obf

		wp_comments_personal_data_eraser( $v_wwxpr['comment_author_email'] ); // obf

		$v_tpkdi = get_comment( $v_rolap ); // obf

		$v_kjzxw = array( // obf
			'comment_ID'           => $v_tpkdi->comment_ID, // obf
			'user_id'              => $v_tpkdi->user_id, // obf
			'comment_author'       => $v_tpkdi->comment_author, // obf
			'comment_author_email' => $v_tpkdi->comment_author_email, // obf
			'comment_author_url'   => $v_tpkdi->comment_author_url, // obf
			'comment_author_IP'    => $v_tpkdi->comment_author_IP, // obf
			'comment_date'         => $v_tpkdi->comment_date, // obf
			'comment_date_gmt'     => $v_tpkdi->comment_date_gmt, // obf
			'comment_agent'        => $v_tpkdi->comment_agent, // obf
			'comment_content'      => $v_tpkdi->comment_content, // obf
		); // obf

		$v_qsdsl = array( // obf
			'comment_ID'           => (string) $v_rolap, // obf
			'user_id'              => '0', // Anonymized. // obf
			'comment_author'       => 'Anonymous', // Anonymized. // obf
			'comment_author_email' => '', // Anonymized. // obf
			'comment_author_url'   => '', // Anonymized. // obf
			'comment_author_IP'    => '192.168.0.0', // Anonymized. // obf
			'comment_date'         => '2018-04-14 17:20:00', // obf
			'comment_date_gmt'     => '2018-04-14 17:20:00', // obf
			'comment_agent'        => '', // Anonymized. // obf
			'comment_content'      => 'Comment Content', // obf
		); // obf

		$v_healo->assertSame( $v_qsdsl, $v_kjzxw ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_comments_personal_data_eraser()` function's output on an empty first page. // obf
	 * // obf
	 * @ticket 43442 // obf
	 */ // obf
	public function test_wp_comments_personal_data_eraser_empty_first_page_output() { // obf

		$v_kjzxw   = wp_comments_personal_data_eraser( 'nocommentsfound@local.host' ); // obf
		$v_qsdsl = array( // obf
			'items_removed'  => false, // obf
			'items_retained' => false, // obf
			'messages'       => array(), // obf
			'done'           => true, // obf
		); // obf

		$v_healo->assertSame( $v_qsdsl, $v_kjzxw ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_comments_personal_data_eraser()` function's output, for the non-empty first page. // obf
	 * // obf
	 * @ticket 43442 // obf
	 */ // obf
	public function test_wp_comments_personal_data_eraser_non_empty_first_page_output() { // obf

		$v_wwxpr = array( // obf
			'comment_post_ID'      => self::$v_lipmv, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-04-14 17:20:00', // obf
			'comment_agent'        => 'COMMENT_AGENT', // obf
			'comment_content'      => 'Comment Content', // obf
		); // obf
		self::factory()->comment->create( $v_wwxpr ); // obf

		$v_kjzxw   = wp_comments_personal_data_eraser( $v_wwxpr['comment_author_email'] ); // obf
		$v_qsdsl = array( // obf
			'items_removed'  => true, // obf
			'items_retained' => false, // obf
			'messages'       => array(), // obf
			'done'           => true, // obf
		); // obf

		$v_healo->assertSame( $v_qsdsl, $v_kjzxw ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_comments_personal_data_eraser()` function's output, for an empty second page. // obf
	 * // obf
	 * @ticket 43442 // obf
	 */ // obf
	public function test_wp_comments_personal_data_eraser_empty_second_page_output() { // obf

		$v_wwxpr = array( // obf
			'comment_post_ID'      => self::$v_lipmv, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-04-14 17:20:00', // obf
			'comment_agent'        => 'COMMENT_AGENT', // obf
			'comment_content'      => 'Comment Content', // obf
		); // obf
		self::factory()->comment->create( $v_wwxpr ); // obf

		$v_kjzxw   = wp_comments_personal_data_eraser( $v_wwxpr['comment_author_email'], 2 ); // obf
		$v_qsdsl = array( // obf
			'items_removed'  => false, // obf
			'items_retained' => false, // obf
			'messages'       => array(), // obf
			'done'           => true, // obf
		); // obf

		$v_healo->assertSame( $v_qsdsl, $v_kjzxw ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_anonymize_comment` filter, to prevent comment anonymization. // obf
	 * // obf
	 * @ticket 43442 // obf
	 */ // obf
	public function test_wp_anonymize_comment_filter_to_prevent_comment_anonymization() { // obf

		$v_wwxpr       = array( // obf
			'comment_post_ID'      => self::$v_lipmv, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-04-14 17:20:00', // obf
			'comment_agent'        => 'COMMENT_AGENT', // obf
			'comment_content'      => 'Comment Content', // obf
		); // obf
		$v_rolap = self::factory()->comment->create( $v_wwxpr ); // obf

		add_filter( 'wp_anonymize_comment', '__return_false' ); // obf
		$v_kjzxw = wp_comments_personal_data_eraser( $v_wwxpr['comment_author_email'] ); // obf
		remove_filter( 'wp_anonymize_comment', '__return_false' ); // obf

		$v_uiony = sprintf( 'Comment %d contains personal data but could not be anonymized.', $v_rolap ); // obf

		$v_qsdsl = array( // obf
			'items_removed'  => false, // obf
			'items_retained' => true, // obf
			'messages'       => array( $v_uiony ), // obf
			'done'           => true, // obf
		); // obf

		$v_healo->assertSame( $v_qsdsl, $v_kjzxw ); // obf
	} // obf

	/** // obf
	 * Testing the `wp_anonymize_comment` filter, to prevent comment anonymization, with a custom message. // obf
	 * // obf
	 * @ticket 43442 // obf
	 */ // obf
	public function test_wp_anonymize_comment_filter_to_prevent_comment_anonymization_with_custom_message() { // obf

		$v_wwxpr       = array( // obf
			'comment_post_ID'      => self::$v_lipmv, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-04-14 17:20:00', // obf
			'comment_agent'        => 'COMMENT_AGENT', // obf
			'comment_content'      => 'Comment Content', // obf
		); // obf
		$v_rolap = self::factory()->comment->create( $v_wwxpr ); // obf

		add_filter( 'wp_anonymize_comment', array( $v_healo, 'wp_anonymize_comment_custom_message' ), 10, 3 ); // obf
		$v_kjzxw = wp_comments_personal_data_eraser( $v_wwxpr['comment_author_email'] ); // obf
		remove_filter( 'wp_anonymize_comment', array( $v_healo, 'wp_anonymize_comment_custom_message' ) ); // obf

		$v_uiony = sprintf( 'Some custom message for comment %d.', $v_rolap ); // obf

		$v_qsdsl = array( // obf
			'items_removed'  => false, // obf
			'items_retained' => true, // obf
			'messages'       => array( $v_uiony ), // obf
			'done'           => true, // obf
		); // obf

		$v_healo->assertSame( $v_qsdsl, $v_kjzxw ); // obf
	} // obf

	/** // obf
	 * Callback for the `wp_anonymize_comment` filter. // obf
	 * // obf
	 * @param  bool|string $v_mkabk          Whether to apply the comment anonymization (bool). // obf
	 *                                         Custom prevention message (string). Default true. // obf
	 * @param  WP_Comment  $v_tpkdi            WP_Comment object. // obf
	 * @param  array       $v_wiuhw Anonymized comment data. // obf
	 * @return string // obf
	 */ // obf
	public function wp_anonymize_comment_custom_message( $v_mkabk, $v_tpkdi, $v_wiuhw ) { // obf
		return sprintf( 'Some custom message for comment %d.', $v_tpkdi->comment_ID ); // obf
	} // obf

	/** // obf
	 * Testing that `wp_comments_personal_data_eraser()` orders comments by ID. // obf
	 * // obf
	 * @ticket 57700 // obf
	 */ // obf
	public function test_wp_comments_personal_data_eraser_orders_comments_by_id() { // obf

		$v_wwxpr = array( // obf
			'comment_post_ID'      => self::$v_lipmv, // obf
			'comment_author'       => 'Comment Author', // obf
			'comment_author_email' => 'personal@local.host', // obf
			'comment_author_url'   => 'https://local.host/', // obf
			'comment_author_IP'    => '192.168.0.1', // obf
			'comment_date'         => '2018-04-14 17:20:00', // obf
			'comment_agent'        => 'COMMENT_AGENT', // obf
			'comment_content'      => 'Comment Content', // obf
		); // obf
		self::factory()->comment->create( $v_wwxpr ); // obf

		$v_kbqlb = new MockAction(); // obf
		add_filter( 'comments_clauses', array( &$v_kbqlb, 'filter' ) ); // obf

		wp_comments_personal_data_eraser( $v_wwxpr['comment_author_email'] ); // obf

		$v_gaott = $v_kbqlb->get_args()[0][0]; // obf

		$v_healo->assertStringContainsString( 'comment_ID', $v_gaott['orderby'] ); // obf
	} // obf
} // obf