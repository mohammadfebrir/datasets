

<?php // obf

/** // obf
 * Testing items that are only testable by grabbing the markup of `comments_template()` from the output buffer. // obf
 * // obf
 * @group comment // obf
 * // obf
 * @covers ::comments_template // obf
 */ // obf
class Tests_Comment_CommentsTemplate extends WP_UnitTestCase { // obf

	/** // obf
	 * Performs setup tasks for every test. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		switch_theme( 'default' ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_asc_when_default_comments_page_is_newest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_dqcmr, $v_uuipr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_desc_when_default_comments_page_is_newest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_uuipr, $v_dqcmr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_asc_when_default_comments_page_is_oldest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'default_comments_page', 'oldest' ); // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_dqcmr, $v_uuipr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_desc_when_default_comments_page_is_oldest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'default_comments_page', 'oldest' ); // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_uuipr, $v_dqcmr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_asc_when_default_comments_page_is_newest_on_subsequent_pages() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf
		$v_ggevb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 500 ), // obf
			) // obf
		); // obf
		$v_ruuiu = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 600 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_hjubq = add_query_arg( // obf
			array( // obf
				'cpage'             => 2, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_hjubq ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_srzpy, $v_lvqst ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_desc_when_default_comments_page_is_newest_on_subsequent_pages() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf
		$v_ggevb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 500 ), // obf
			) // obf
		); // obf
		$v_ruuiu = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 600 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_hjubq = add_query_arg( // obf
			array( // obf
				'cpage'             => 2, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_hjubq ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_lvqst, $v_srzpy ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_asc_when_default_comments_page_is_oldest_on_subsequent_pages() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'default_comments_page', 'oldest' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_hjubq = add_query_arg( // obf
			array( // obf
				'cpage'             => 2, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_hjubq ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_dqcmr, $v_uuipr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 */ // obf
	public function test_should_respect_comment_order_desc_when_default_comments_page_is_oldest_on_subsequent_pages() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'default_comments_page', 'oldest' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_hjubq = add_query_arg( // obf
			array( // obf
				'cpage'             => 2, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_hjubq ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Life in the fast lane. // obf
		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_uuipr, $v_dqcmr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 * @ticket 34073 // obf
	 * @ticket 29462 // obf
	 */ // obf
	public function test_last_page_of_comments_should_be_full_when_default_comment_page_is_newest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf

		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_hjubq = add_query_arg( // obf
			array( // obf
				'cpage'             => 1, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_hjubq ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf

		$v_kbsqt->assertSame( array( $v_dqcmr, $v_lvqst ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 8071 // obf
	 * @ticket 34073 // obf
	 * @ticket 29462 // obf
	 */ // obf
	public function test_first_page_of_comments_should_have_remainder_when_default_comments_page_is_newest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf

		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_hjubq = add_query_arg( // obf
			array( // obf
				'cpage'             => 2, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_hjubq ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		$v_ypmul = preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf

		$v_kbsqt->assertSame( array( $v_uuipr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 34073 // obf
	 */ // obf
	public function test_comment_permalinks_should_be_correct_when_using_default_display_callback_with_default_comment_page_oldest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'default_comments_page', 'oldest' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_mlczt = add_query_arg( // obf
			array( // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_mlczt ); // obf

		$v_aayph = get_echo( 'comments_template' ); // obf

		// Find the comment permalinks. // obf
		preg_match_all( '|href="(.*?#comment-([0-9]+))|', $v_aayph, $v_sndpv ); // obf

		$v_kbsqt->assertNotEmpty( $v_sndpv ); // obf
		$v_kbsqt->assertNotEmpty( $v_sndpv[1] ); // obf

		// This is the main post page, so we don't expect any cpage param. // obf
		foreach ( $v_sndpv[1] as $v_ossgp ) { // obf
			$v_kbsqt->assertStringNotContainsString( 'cpage', $v_ossgp ); // obf
		} // obf

		$v_cuyqq = add_query_arg( // obf
			array( // obf
				'cpage'             => 2, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_cuyqq ); // obf

		$v_jmfej = get_echo( 'comments_template' ); // obf

		// Find the comment permalinks. // obf
		preg_match_all( '|href="(.*?#comment-([0-9]+))|', $v_jmfej, $v_sndpv ); // obf

		$v_kbsqt->assertNotEmpty( $v_sndpv ); // obf
		$v_kbsqt->assertNotEmpty( $v_sndpv[1] ); // obf

		// They should all be on page 2. // obf
		foreach ( $v_sndpv[1] as $v_ossgp ) { // obf
			$v_kbsqt->assertStringContainsString( 'cpage=2', $v_ossgp ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 34073 // obf
	 */ // obf
	public function test_comment_permalinks_should_be_correct_when_using_default_display_callback_with_default_comment_page_newest() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf
		$v_ggevb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 500 ), // obf
			) // obf
		); // obf
		$v_ruuiu = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 600 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'page_comments', '1' ); // obf

		$v_biaru = add_query_arg( // obf
			array( // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_biaru ); // obf

		$v_hbzly = get_echo( 'comments_template' ); // obf

		// Find the comment permalinks. // obf
		preg_match_all( '|href="(.*?#comment-([0-9]+))|', $v_hbzly, $v_sndpv ); // obf

		$v_kbsqt->assertNotEmpty( $v_sndpv ); // obf
		$v_kbsqt->assertNotEmpty( $v_sndpv[1] ); // obf

		foreach ( $v_sndpv[1] as $v_ossgp ) { // obf
			$v_kbsqt->assertStringContainsString( 'cpage=3', $v_ossgp ); // obf
		} // obf

		$v_cuyqq = add_query_arg( // obf
			array( // obf
				'cpage'             => 2, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_cuyqq ); // obf

		$v_jmfej = get_echo( 'comments_template' ); // obf

		// Find the comment permalinks. // obf
		preg_match_all( '|href="(.*?#comment-([0-9]+))|', $v_jmfej, $v_sndpv ); // obf

		$v_kbsqt->assertNotEmpty( $v_sndpv ); // obf
		$v_kbsqt->assertNotEmpty( $v_sndpv[1] ); // obf

		// They should all be on page 2. // obf
		foreach ( $v_sndpv[1] as $v_ossgp ) { // obf
			$v_kbsqt->assertStringContainsString( 'cpage=2', $v_ossgp ); // obf
		} // obf

		// p1 is the last page (neat!). // obf
		$v_mlczt = add_query_arg( // obf
			array( // obf
				'cpage'             => 1, // obf
				'comments_per_page' => 2, // obf
			), // obf
			get_permalink( $v_ubbfl ) // obf
		); // obf

		$v_kbsqt->go_to( $v_mlczt ); // obf

		$v_aayph = get_echo( 'comments_template' ); // obf

		// Find the comment permalinks. // obf
		preg_match_all( '|href="(.*?#comment-([0-9]+))|', $v_aayph, $v_sndpv ); // obf

		$v_kbsqt->assertNotEmpty( $v_sndpv ); // obf
		$v_kbsqt->assertNotEmpty( $v_sndpv[1] ); // obf

		// They should all be on page 2. // obf
		foreach ( $v_sndpv[1] as $v_ossgp ) { // obf
			$v_kbsqt->assertStringContainsString( 'cpage=1', $v_ossgp ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 35068 // obf
	 */ // obf
	public function test_query_offset_should_not_include_unapproved_comments() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_approved' => '0', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_approved' => '0', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_approved' => '0', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '4', // obf
				'comment_approved' => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Find the found comments in the markup. // obf
		preg_match_all( '|id="comment-([0-9]+)|', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_srzpy ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 35068 // obf
	 */ // obf
	public function test_query_offset_should_include_unapproved_comments() { // obf
		$v_kylzw = 'foo@example.com'; // obf

		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_approved' => '0', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_approved' => '0', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'      => $v_ubbfl, // obf
				'comment_content'      => '3', // obf
				'comment_approved'     => '0', // obf
				'comment_date_gmt'     => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
				'comment_author_email' => $v_kylzw, // obf
			) // obf
		); // obf
		$v_srzpy = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'      => $v_ubbfl, // obf
				'comment_content'      => '4', // obf
				'comment_approved'     => '0', // obf
				'comment_date_gmt'     => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
				'comment_author_email' => $v_kylzw, // obf
			) // obf
		); // obf
		$v_ggevb = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'      => $v_ubbfl, // obf
				'comment_content'      => '5', // obf
				'comment_approved'     => '0', // obf
				'comment_date_gmt'     => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
				'comment_author_email' => $v_kylzw, // obf
			) // obf
		); // obf
		$v_ruuiu = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '6', // obf
				'comment_approved' => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 400 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		add_filter( 'wp_get_current_commenter', array( $v_kbsqt, 'fake_current_commenter' ) ); // obf
		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf
		remove_filter( 'wp_get_current_commenter', array( $v_kbsqt, 'fake_current_commenter' ) ); // obf

		// Find the found comments in the markup. // obf
		preg_match_all( '|id="comment-([0-9]+)|', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_srzpy, $v_lvqst ), $v_ezcuj ); // obf
	} // obf

	public function fake_current_commenter( $v_xacze ) { // obf
		$v_xacze['comment_author_email'] = 'foo@example.com'; // obf
		return $v_xacze; // obf
	} // obf

	/** // obf
	 * @ticket 43857 // obf
	 */ // obf
	public function test_comments_list_should_include_just_posted_unapproved_comment() { // obf
		$v_xmahe     = time(); // obf
		$v_ubbfl       = self::factory()->post->create(); // obf
		$v_edffx       = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'      => $v_ubbfl, // obf
				'comment_content'      => '1', // obf
				'comment_approved'     => '0', // obf
				'comment_date_gmt'     => gmdate( 'Y-m-d H:i:s', $v_xmahe ), // obf
				'comment_author_email' => 'foo@bar.mail', // obf
			) // obf
		); // obf
		$v_sdghq = get_comment( $v_edffx ); // obf

		$v_kbsqt->go_to( // obf
			add_query_arg( // obf
				array( // obf
					'unapproved'      => $v_sdghq->comment_ID, // obf
					'moderation-hash' => wp_hash( $v_sdghq->comment_date_gmt ), // obf
				), // obf
				get_comment_link( $v_sdghq ) // obf
			) // obf
		); // obf

		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Find the found comment in the markup. // obf
		preg_match( '|id="comment-([0-9]+)|', $v_fgtfg, $v_sndpv ); // obf

		$v_diwcg = (int) $v_sndpv[1]; // obf
		$v_kbsqt->assertSame( $v_edffx, $v_diwcg ); // obf
	} // obf

	/** // obf
	 * @ticket 35378 // obf
	 */ // obf
	public function test_hierarchy_should_be_ignored_when_threading_is_disabled() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_approved' => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_approved' => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_approved' => '1', // obf
				'comment_parent'   => $v_uuipr, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'thread_comments', 0 ); // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Find the found comments in the markup. // obf
		preg_match_all( '|id="comment-([0-9]+)|', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_dqcmr, $v_lvqst, $v_uuipr ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 35419 // obf
	 */ // obf
	public function test_pagination_calculation_should_ignore_comment_hierarchy_when_threading_is_disabled() { // obf
		$v_xmahe       = time(); // obf
		$v_ubbfl         = self::factory()->post->create(); // obf
		$v_uuipr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '1', // obf
				'comment_approved' => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 300 ), // obf
			) // obf
		); // obf
		$v_dqcmr = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '2', // obf
				'comment_approved' => '1', // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 200 ), // obf
			) // obf
		); // obf
		$v_lvqst = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_ubbfl, // obf
				'comment_content'  => '3', // obf
				'comment_approved' => '1', // obf
				'comment_parent'   => $v_uuipr, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 ), // obf
			) // obf
		); // obf

		update_option( 'thread_comments', 0 ); // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'comments_per_page', 2 ); // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf
		$v_fgtfg = get_echo( 'comments_template' ); // obf

		// Find the found comments in the markup. // obf
		preg_match_all( '|id="comment-([0-9]+)|', $v_fgtfg, $v_sndpv ); // obf

		$v_ezcuj = array_map( 'intval', $v_sndpv[1] ); // obf
		$v_kbsqt->assertSame( array( $v_lvqst ), $v_ezcuj ); // obf
	} // obf

	/** // obf
	 * @ticket 38074 // obf
	 * @dataProvider data_comments_template_top_level_query_args // obf
	 * // obf
	 * @param array $v_afghp             Array of expected values. // obf
	 * @param array $v_oiian           Args for the 'comments_template_query_args' filter. // obf
	 * @param array $v_gikpp Args for the 'comments_template_top_level_query_args' filter. // obf
	 */ // obf
	public function test_comments_template_top_level_query_args( $v_afghp, $v_oiian, $v_gikpp ) { // obf
		$v_xmahe         = time(); // obf
		$v_ftuqk      = 0; // obf
		$v_ubbfl           = self::factory()->post->create(); // obf
		$v_vnyrl = array(); // obf

		for ( $v_ihvge = 1; $v_ihvge <= 6; $v_ihvge++ ) { // obf
			$v_vnyrl[ $v_ihvge ] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ubbfl, // obf
					'comment_content'  => "{$v_ihvge}", // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_xmahe - 100 * $v_ihvge ), // obf
				) // obf
			); // obf
			add_comment_meta( $v_vnyrl[ $v_ihvge ], 'featured', $v_ihvge > 3 ? '1' : '0' ); // obf
		} // obf

		update_option( 'comment_order', 'asc' ); // obf
		update_option( 'comments_per_page', 3 ); // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'default_comments_page', 'newest' ); // obf

		add_filter( // obf
			'comments_template_query_args', // obf
			static function ( $v_qgglr ) use ( &$v_ftuqk, $v_oiian ) { // obf
				$v_ftuqk = $v_qgglr['offset']; // obf

				return array_merge( $v_qgglr, $v_oiian ); // obf
			} // obf
		); // obf

		if ( ! empty( $v_gikpp ) ) { // obf
			add_filter( // obf
				'comments_template_top_level_query_args', // obf
				static function ( $v_qgglr ) use ( $v_gikpp ) { // obf
					return array_merge( $v_qgglr, $v_gikpp ); // obf
				} // obf
			); // obf
		} // obf

		$v_kbsqt->go_to( get_permalink( $v_ubbfl ) ); // obf

		$v_fgtfg = get_echo( 'comments_template' ); // obf
		preg_match_all( '/id="comment-([0-9]+)"/', $v_fgtfg, $v_sndpv ); // obf

		$v_kaquk = array(); // obf
		foreach ( $v_afghp['ids'] as $v_rgbwa ) { // obf
			$v_kaquk[] = $v_vnyrl[ $v_rgbwa ]; // obf
		} // obf

		$v_kbsqt->assertSame( $v_kaquk, array_map( 'intval', $v_sndpv[1] ) ); // obf
		$v_kbsqt->assertEquals( $v_afghp['offset'], $v_ftuqk ); // obf
	} // obf

	public function data_comments_template_top_level_query_args() { // obf
		return array( // obf
			array( // obf
				array( // obf
					'ids'    => array(), // obf
					'offset' => 3, // obf
				), // obf
				array( // obf
					'meta_key'   => 'featured', // obf
					'meta_value' => '1', // obf
				), // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'ids'    => array(), // obf
					'offset' => 3, // obf
				), // obf
				array( // obf
					'order'      => 'DESC', // obf
					'meta_key'   => 'featured', // obf
					'meta_value' => '0', // obf
				), // obf
				array(), // obf
			), // obf
			array( // obf
				array( // obf
					'ids'    => array( 6, 5, 4 ), // obf
					'offset' => 0, // obf
				), // obf
				array( // obf
					'meta_key'   => 'featured', // obf
					'meta_value' => '1', // obf
				), // obf
				array( // obf
					'meta_key'   => 'featured', // obf
					'meta_value' => '1', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'ids'    => array( 4, 5, 6 ), // obf
					'offset' => 0, // obf
				), // obf
				array( // obf
					'order'      => 'DESC', // obf
					'meta_key'   => 'featured', // obf
					'meta_value' => '1', // obf
				), // obf
				array( // obf
					'order'      => 'DESC', // obf
					'meta_key'   => 'featured', // obf
					'meta_value' => '1', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf