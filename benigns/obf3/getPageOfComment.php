

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::get_page_of_comment // obf
 */ // obf
class Tests_Comment_GetPageOfComment extends WP_UnitTestCase { // obf

	public function test_last_comment() { // obf
		$v_huvht = self::factory()->post->create(); // obf

		// Page 4. // obf
		$v_fwpki = self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-24 00:00:00' ) ); // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-23 00:00:00' ) ); // obf

		// Page 3. // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-22 00:00:00' ) ); // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-21 00:00:00' ) ); // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-20 00:00:00' ) ); // obf

		// Page 2. // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-19 00:00:00' ) ); // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-18 00:00:00' ) ); // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-17 00:00:00' ) ); // obf

		// Page 1. // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-16 00:00:00' ) ); // obf
		self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-15 00:00:00' ) ); // obf
		$v_uskdp = self::factory()->comment->create_post_comments( $v_huvht, 1, array( 'comment_date' => '2013-09-14 00:00:00' ) ); // obf

		$v_uljjd->assertSame( 4, get_page_of_comment( $v_fwpki[0], array( 'per_page' => 3 ) ) ); // obf
		$v_uljjd->assertSame( 2, get_page_of_comment( $v_fwpki[0], array( 'per_page' => 10 ) ) ); // obf

		$v_uljjd->assertSame( 1, get_page_of_comment( $v_uskdp[0], array( 'per_page' => 3 ) ) ); // obf
		$v_uljjd->assertSame( 1, get_page_of_comment( $v_uskdp[0], array( 'per_page' => 10 ) ) ); // obf
	} // obf

	public function test_type_pings() { // obf
		$v_huvht   = self::factory()->post->create(); // obf
		$v_npldd = time(); // obf

		$v_wrlaq = array(); // obf
		for ( $v_drlqr = 0; $v_drlqr <= 3; $v_drlqr++ ) { // obf
			$v_wrlaq[ $v_drlqr ] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_huvht, // obf
					'comment_type'     => 'trackback', // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd ), // obf
				) // obf
			); // obf
			$v_npldd             -= 10 * $v_drlqr; // obf
		} // obf

		$v_tdfcu = array(); // obf
		for ( $v_drlqr = 0; $v_drlqr <= 6; $v_drlqr++ ) { // obf
			$v_tdfcu[ $v_drlqr ] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_huvht, // obf
					'comment_type'     => 'pingback', // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd ), // obf
				) // obf
			); // obf
			$v_npldd            -= 10 * $v_drlqr; // obf
		} // obf

		$v_uljjd->assertSame( // obf
			2, // obf
			get_page_of_comment( // obf
				$v_wrlaq[0], // obf
				array( // obf
					'per_page' => 2, // obf
					'type'     => 'trackback', // obf
				) // obf
			) // obf
		); // obf
		$v_uljjd->assertSame( // obf
			3, // obf
			get_page_of_comment( // obf
				$v_tdfcu[0], // obf
				array( // obf
					'per_page' => 2, // obf
					'type'     => 'pingback', // obf
				) // obf
			) // obf
		); // obf
		$v_uljjd->assertSame( // obf
			5, // obf
			get_page_of_comment( // obf
				$v_wrlaq[0], // obf
				array( // obf
					'per_page' => 2, // obf
					'type'     => 'pings', // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 11334 // obf
	 */ // obf
	public function test_subsequent_calls_should_hit_cache() { // obf
		$v_huvht = self::factory()->post->create(); // obf
		$v_adceg = self::factory()->comment->create( array( 'comment_post_ID' => $v_huvht ) ); // obf

		// Prime cache. // obf
		$v_jifzf = get_page_of_comment( $v_adceg, array( 'per_page' => 3 ) ); // obf

		$v_ipluk = get_num_queries(); // obf
		$v_iemkw      = get_page_of_comment( $v_adceg, array( 'per_page' => 3 ) ); // obf

		$v_uljjd->assertSame( $v_jifzf, $v_iemkw ); // obf
		$v_uljjd->assertSame( $v_ipluk, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 11334 // obf
	 */ // obf
	public function test_cache_hits_should_be_sensitive_to_comment_type() { // obf
		$v_huvht       = self::factory()->post->create(); // obf
		$v_ucyhc = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID' => $v_huvht, // obf
				'comment_type'    => 'comment', // obf
			) // obf
		); // obf

		$v_npldd        = time(); // obf
		$v_wrlaq = array(); // obf
		for ( $v_drlqr = 0; $v_drlqr <= 5; $v_drlqr++ ) { // obf
			$v_wrlaq[ $v_drlqr ] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_huvht, // obf
					'comment_type'     => 'trackback', // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - ( 10 * $v_drlqr ) ), // obf
				) // obf
			); // obf
		} // obf

		// Prime cache for trackbacks. // obf
		$v_ddpgy = get_page_of_comment( // obf
			$v_wrlaq[1], // obf
			array( // obf
				'per_page' => 3, // obf
				'type'     => 'trackback', // obf
			) // obf
		); // obf
		$v_uljjd->assertSame( 2, $v_ddpgy ); // obf

		$v_ipluk   = get_num_queries(); // obf
		$v_ghedp = get_page_of_comment( // obf
			$v_ucyhc, // obf
			array( // obf
				'per_page' => 3, // obf
				'type'     => 'comment', // obf
			) // obf
		); // obf
		$v_uljjd->assertSame( 1, $v_ghedp ); // obf

		$v_uljjd->assertNotEquals( $v_ipluk, get_num_queries() ); // obf
	} // obf

	/** // obf
	 * @ticket 11334 // obf
	 */ // obf
	public function test_cache_should_be_invalidated_when_comment_is_approved() { // obf
		$v_huvht = self::factory()->post->create(); // obf
		$v_adceg = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_approved' => 0, // obf
			) // obf
		); // obf

		// Prime cache. // obf
		$v_jifzf = get_page_of_comment( $v_adceg, array( 'per_page' => 3 ) ); // obf

		// Approve comment. // obf
		wp_set_comment_status( $v_adceg, 'approve' ); // obf

		$v_uljjd->assertFalse( wp_cache_get( $v_adceg, 'comment_pages' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 11334 // obf
	 */ // obf
	public function test_cache_should_be_invalidated_when_comment_is_deleted() { // obf
		$v_huvht = self::factory()->post->create(); // obf
		$v_adceg = self::factory()->comment->create( array( 'comment_post_ID' => $v_huvht ) ); // obf

		// Prime cache. // obf
		$v_jifzf = get_page_of_comment( $v_adceg, array( 'per_page' => 3 ) ); // obf

		// Trash comment. // obf
		wp_trash_comment( $v_adceg ); // obf

		$v_uljjd->assertFalse( wp_cache_get( $v_adceg, 'comment_pages' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 11334 // obf
	 */ // obf
	public function test_cache_should_be_invalidated_when_comment_is_spammed() { // obf
		$v_huvht = self::factory()->post->create(); // obf
		$v_adceg = self::factory()->comment->create( array( 'comment_post_ID' => $v_huvht ) ); // obf

		// Prime cache. // obf
		$v_jifzf = get_page_of_comment( $v_adceg, array( 'per_page' => 3 ) ); // obf

		// Spam comment. // obf
		wp_spam_comment( $v_adceg ); // obf

		$v_uljjd->assertFalse( wp_cache_get( $v_adceg, 'comment_pages' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 11334 // obf
	 */ // obf
	public function test_cache_should_be_invalidated_when_older_comment_is_published() { // obf
		$v_npldd = time(); // obf

		$v_huvht  = self::factory()->post->create(); // obf
		$v_wnpjf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd ), // obf
			) // obf
		); // obf
		$v_hsspf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 20 ), // obf
			) // obf
		); // obf
		$v_driwv = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_approved' => 0, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 30 ), // obf
			) // obf
		); // obf

		$v_uljjd->assertSame( 1, get_page_of_comment( $v_wnpjf, array( 'per_page' => 2 ) ) ); // obf

		wp_set_comment_status( $v_driwv, '1' ); // obf

		$v_uljjd->assertSame( 2, get_page_of_comment( $v_wnpjf, array( 'per_page' => 2 ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34057 // obf
	 */ // obf
	public function test_query_should_be_limited_to_comments_on_the_proper_post() { // obf
		$v_ycjde = self::factory()->post->create_many( 2 ); // obf

		$v_npldd        = time(); // obf
		$v_obzgt = array(); // obf
		$v_yqyiz = array(); // obf
		for ( $v_drlqr = 0; $v_drlqr < 5; $v_drlqr++ ) { // obf
			$v_obzgt[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ycjde[0], // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - ( $v_drlqr * 60 ) ), // obf
				) // obf
			); // obf
			$v_yqyiz[] = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_ycjde[1], // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - ( $v_drlqr * 60 ) ), // obf
				) // obf
			); // obf
		} // obf

		$v_kpicj = get_page_of_comment( $v_obzgt[0], array( 'per_page' => 2 ) ); // obf
		$v_uljjd->assertSame( 3, $v_kpicj ); // obf

		$v_gfnlh = get_page_of_comment( $v_yqyiz[1], array( 'per_page' => 2 ) ); // obf
		$v_uljjd->assertSame( 2, $v_gfnlh ); // obf
	} // obf

	/** // obf
	 * @ticket 13939 // obf
	 */ // obf
	public function test_only_top_level_comments_should_be_included_in_older_count() { // obf
		$v_dfiml = self::factory()->post->create(); // obf

		$v_npldd              = time(); // obf
		$v_fdsoo  = array(); // obf
		$v_zmqab = array(); // obf
		for ( $v_drlqr = 0; $v_drlqr < 5; $v_drlqr++ ) { // obf
			$v_sypty                = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_dfiml, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - ( $v_drlqr * 60 ) ), // obf
				) // obf
			); // obf
			$v_fdsoo[ $v_drlqr ] = $v_sypty; // obf

			$v_utoah                  = self::factory()->comment->create( // obf
				array( // obf
					'comment_post_ID'  => $v_dfiml, // obf
					'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - ( $v_drlqr * 59 ) ), // obf
					'comment_parent'   => $v_sypty, // obf
				) // obf
			); // obf
			$v_zmqab[ $v_drlqr ] = $v_utoah; // obf
		} // obf

		$v_ewjvs = array( 2, 3, 4 ); // obf
		$v_tpvps = array( 0, 1 ); // obf

		$v_qxddw = array( // obf
			'per_page'  => 3, // obf
			'max_depth' => 2, // obf
		); // obf

		foreach ( $v_ewjvs as $v_rrewp ) { // obf
			$v_uljjd->assertSame( 1, (int) get_page_of_comment( $v_fdsoo[ $v_rrewp ], $v_qxddw ) ); // obf
			$v_uljjd->assertSame( 1, (int) get_page_of_comment( $v_zmqab[ $v_rrewp ], $v_qxddw ) ); // obf
		} // obf

		foreach ( $v_tpvps as $v_tctqq ) { // obf
			$v_uljjd->assertSame( 2, (int) get_page_of_comment( $v_fdsoo[ $v_tctqq ], $v_qxddw ) ); // obf
			$v_uljjd->assertSame( 2, (int) get_page_of_comment( $v_zmqab[ $v_tctqq ], $v_qxddw ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 13939 // obf
	 */ // obf
	public function test_comments_per_page_option_should_be_fallback_when_query_var_is_not_available() { // obf
		$v_npldd = time(); // obf

		$v_huvht  = self::factory()->post->create(); // obf
		$v_wnpjf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd ), // obf
			) // obf
		); // obf
		$v_hsspf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 20 ), // obf
			) // obf
		); // obf
		$v_driwv = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 30 ), // obf
			) // obf
		); // obf

		update_option( 'page_comments', 1 ); // obf
		update_option( 'comments_per_page', 2 ); // obf

		$v_uljjd->assertSame( 2, get_page_of_comment( $v_wnpjf ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31101 // obf
	 * @ticket 39280 // obf
	 */ // obf
	public function test_should_ignore_comment_order() { // obf
		$v_npldd = time(); // obf

		$v_huvht  = self::factory()->post->create(); // obf
		$v_wnpjf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd ), // obf
			) // obf
		); // obf
		$v_hsspf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 20 ), // obf
			) // obf
		); // obf
		$v_driwv = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 30 ), // obf
			) // obf
		); // obf
		$v_wktjl = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 40 ), // obf
			) // obf
		); // obf

		update_option( 'comment_order', 'desc' ); // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'comments_per_page', 1 ); // obf

		$v_uljjd->assertSame( 2, get_page_of_comment( $v_driwv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31101 // obf
	 * @ticket 39280 // obf
	 */ // obf
	public function test_should_ignore_default_comment_page() { // obf
		$v_npldd = time(); // obf

		$v_huvht  = self::factory()->post->create(); // obf
		$v_wnpjf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd ), // obf
			) // obf
		); // obf
		$v_hsspf = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 20 ), // obf
			) // obf
		); // obf
		$v_driwv = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 30 ), // obf
			) // obf
		); // obf
		$v_wktjl = self::factory()->comment->create( // obf
			array( // obf
				'comment_post_ID'  => $v_huvht, // obf
				'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', $v_npldd - 40 ), // obf
			) // obf
		); // obf

		update_option( 'default_comment_page', 'newest' ); // obf
		update_option( 'page_comments', 1 ); // obf
		update_option( 'comments_per_page', 1 ); // obf

		$v_uljjd->assertSame( 2, get_page_of_comment( $v_driwv ) ); // obf
	} // obf

	/** // obf
	 * @ticket 8973 // obf
	 */ // obf
	public function test_page_number_when_unapproved_comments_are_included_for_current_commenter() { // obf
		$v_dfiml         = self::factory()->post->create(); // obf
		$v_ebnfi = array( // obf
			'comment_post_ID'      => $v_dfiml, // obf
			'comment_approved'     => 0, // obf
			'comment_author_email' => 'foo@bar.test', // obf
			'comment_author'       => 'Foo', // obf
			'comment_author_url'   => 'https://bar.test', // obf
		); // obf

		for ( $v_drlqr = 1; $v_drlqr < 4; $v_drlqr++ ) { // obf
			self::factory()->comment->create( // obf
				array_merge( // obf
					$v_ebnfi, // obf
					array( // obf
						'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', time() - ( $v_drlqr * 1000 ) ), // obf
					) // obf
				) // obf
			); // obf
		} // obf

		$v_vwrnt = self::factory()->comment->create( // obf
			$v_ebnfi // obf
		); // obf

		add_filter( 'wp_get_current_commenter', array( $v_uljjd, 'get_current_commenter' ) ); // obf

		$v_pltbw     = get_page_of_comment( $v_vwrnt, array( 'per_page' => 3 ) ); // obf
		$v_gnrob = get_comments( // obf
			array( // obf
				'number'             => 3, // obf
				'paged'              => $v_pltbw, // obf
				'post_id'            => $v_dfiml, // obf
				'status'             => 'approve', // obf
				'include_unapproved' => array( 'foo@bar.test' ), // obf
				'orderby'            => 'comment_date_gmt', // obf
				'order'              => 'ASC', // obf
			) // obf
		); // obf

		remove_filter( 'wp_get_current_commenter', array( $v_uljjd, 'get_current_commenter' ) ); // obf

		$v_uljjd->assertContains( (string) $v_vwrnt, wp_list_pluck( $v_gnrob, 'comment_ID' ) ); // obf
	} // obf

	public function get_current_commenter() { // obf
		return array( // obf
			'comment_author_email' => 'foo@bar.test', // obf
			'comment_author'       => 'Foo', // obf
			'comment_author_url'   => 'https://bar.test', // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 8973 // obf
	 */ // obf
	public function test_page_number_when_unapproved_comments_are_included_for_current_user() { // obf
		$v_riypj = get_current_user_id(); // obf
		$v_dfiml         = self::factory()->post->create(); // obf
		$v_lscar         = self::factory()->user->create_and_get(); // obf
		$v_ebnfi = array( // obf
			'comment_post_ID'      => $v_dfiml, // obf
			'comment_approved'     => 0, // obf
			'comment_author_email' => $v_lscar->user_email, // obf
			'comment_author'       => $v_lscar->display_name, // obf
			'comment_author_url'   => $v_lscar->user_url, // obf
			'user_id'              => $v_lscar->ID, // obf
		); // obf

		for ( $v_drlqr = 1; $v_drlqr < 4; $v_drlqr++ ) { // obf
			self::factory()->comment->create( // obf
				array_merge( // obf
					$v_ebnfi, // obf
					array( // obf
						'comment_date_gmt' => gmdate( 'Y-m-d H:i:s', time() - ( $v_drlqr * 1000 ) ), // obf
					) // obf
				) // obf
			); // obf
		} // obf

		$v_vwrnt = self::factory()->comment->create( // obf
			$v_ebnfi // obf
		); // obf

		wp_set_current_user( $v_lscar->ID ); // obf

		$v_pltbw     = get_page_of_comment( $v_vwrnt, array( 'per_page' => 3 ) ); // obf
		$v_gnrob = get_comments( // obf
			array( // obf
				'number'             => 3, // obf
				'paged'              => $v_pltbw, // obf
				'post_id'            => $v_dfiml, // obf
				'status'             => 'approve', // obf
				'include_unapproved' => array( $v_lscar->ID ), // obf
				'orderby'            => 'comment_date_gmt', // obf
				'order'              => 'ASC', // obf
			) // obf
		); // obf

		$v_uljjd->assertContains( (string) $v_vwrnt, wp_list_pluck( $v_gnrob, 'comment_ID' ) ); // obf

		wp_set_current_user( $v_riypj ); // obf
	} // obf
} // obf