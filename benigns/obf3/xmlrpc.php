

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group xmlrpc // obf
 * // obf
 * @covers IXR_Date // obf
 */ // obf
class Tests_Date_XMLRPC extends WP_XMLRPC_UnitTestCase { // obf

	/** // obf
	 * Cleans up. // obf
	 */ // obf
	public function tear_down() { // obf
		// Reset the timezone option to the default value. // obf
		update_option( 'timezone_string', '' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 30429 // obf
	 * // obf
	 * @covers wp_xmlrpc_server::mw_newPost // obf
	 */ // obf
	public function test_date_new_post() { // obf
		$v_dgacg = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_dgacg ); // obf

		$v_krnes    = new DateTimeImmutable( 'now', new DateTimeZone( $v_dgacg ) ); // obf
		$v_ycues = $v_krnes->setTimezone( new DateTimeZone( 'UTC' ) ); // obf

		$v_udftb->make_user_by_role( 'editor' ); // obf

		$v_cmdhi = get_post( // obf
			$v_udftb->myxmlrpcserver->mw_newPost( // obf
				array( // obf
					1, // obf
					'editor', // obf
					'editor', // obf
					array( // obf
						'title'        => 'test', // obf
						'post_content' => 'test', // obf
						'dateCreated'  => new IXR_Date( $v_ycues->format( 'Ymd\TH:i:s\Z' ) ), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_cmdhi->post_date, // obf
			'UTC time with explicit time zone into mw_newPost' // obf
		); // obf

		$v_cmdhi = get_post( // obf
			$v_udftb->myxmlrpcserver->mw_newPost( // obf
				array( // obf
					1, // obf
					'editor', // obf
					'editor', // obf
					array( // obf
						'title'        => 'test', // obf
						'post_content' => 'test', // obf
						'dateCreated'  => new IXR_Date( $v_krnes->format( 'Ymd\TH:i:s' ) ), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_cmdhi->post_date, // obf
			'Local time w/o time zone into mw_newPost' // obf
		); // obf

		$v_cmdhi = get_post( // obf
			$v_udftb->myxmlrpcserver->mw_newPost( // obf
				array( // obf
					1, // obf
					'editor', // obf
					'editor', // obf
					array( // obf
						'title'            => 'test', // obf
						'post_content'     => 'test', // obf
						'date_created_gmt' => new IXR_Date( $v_ycues->format( 'Ymd\TH:i:s' ) ), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_cmdhi->post_date, // obf
			'UTC time into mw_newPost' // obf
		); // obf

		$v_cmdhi = get_post( // obf
			$v_udftb->myxmlrpcserver->wp_newPost( // obf
				array( // obf
					1, // obf
					'editor', // obf
					'editor', // obf
					array( // obf
						'title'        => 'test', // obf
						'post_content' => 'test', // obf
						'post_date'    => $v_krnes->format( 'Ymd\TH:i:s' ), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_cmdhi->post_date, // obf
			'Local time into wp_newPost' // obf
		); // obf

		$v_cmdhi = get_post( // obf
			$v_udftb->myxmlrpcserver->wp_newPost( // obf
				array( // obf
					1, // obf
					'editor', // obf
					'editor', // obf
					array( // obf
						'title'         => 'test', // obf
						'post_content'  => 'test', // obf
						'post_date_gmt' => $v_ycues->format( 'Ymd\TH:i:s' ), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_cmdhi->post_date, // obf
			'UTC time into wp_newPost' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 30429 // obf
	 * // obf
	 * @covers wp_xmlrpc_server::mw_editPost // obf
	 */ // obf
	public function test_date_edit_post() { // obf
		$v_dgacg = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_dgacg ); // obf

		$v_krnes    = new DateTimeImmutable( 'now', new DateTimeZone( $v_dgacg ) ); // obf
		$v_ycues = $v_krnes->setTimezone( new DateTimeZone( 'UTC' ) ); // obf

		$v_yughx = $v_udftb->make_user_by_role( 'editor' ); // obf

		$v_skwki = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_yughx, // obf
				'post_date'   => $v_krnes->modify( '-1 hour' )->format( 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf

		$v_gvpft = $v_udftb->myxmlrpcserver->mw_editPost( // obf
			array( // obf
				$v_skwki, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'dateCreated' => new IXR_Date( $v_krnes->format( 'Ymd\TH:i:s' ) ), // obf
				), // obf
			) // obf
		); // obf

		$v_zqptc = get_post( $v_skwki ); // obf

		$v_udftb->assertTrue( $v_gvpft ); // obf
		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_zqptc->post_date, // obf
			'Local time into mw_editPost' // obf
		); // obf

		$v_skwki = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_yughx, // obf
				'post_date'   => $v_krnes->modify( '-1 hour' )->format( 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf

		$v_gvpft = $v_udftb->myxmlrpcserver->mw_editPost( // obf
			array( // obf
				$v_skwki, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'date_created_gmt' => new IXR_Date( $v_ycues->format( 'Ymd\TH:i:s' ) ), // obf
				), // obf
			) // obf
		); // obf

		$v_zqptc = get_post( $v_skwki ); // obf

		$v_udftb->assertTrue( $v_gvpft ); // obf
		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_zqptc->post_date, // obf
			'UTC time into mw_editPost' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 30429 // obf
	 * // obf
	 * @covers wp_xmlrpc_server::wp_editComment // obf
	 */ // obf
	public function test_date_edit_comment() { // obf
		$v_dgacg = 'Europe/Helsinki'; // obf
		update_option( 'timezone_string', $v_dgacg ); // obf

		$v_krnes    = new DateTimeImmutable( 'now', new DateTimeZone( $v_dgacg ) ); // obf
		$v_krnes    = $v_krnes->modify( '-1 hour' ); // obf
		$v_ycues = $v_krnes->setTimezone( new DateTimeZone( 'UTC' ) ); // obf

		$v_udftb->make_user_by_role( 'administrator' ); // obf
		$v_skwki = self::factory()->post->create(); // obf

		$v_hcjkr = array( // obf
			'comment_post_ID'      => $v_skwki, // obf
			'comment_author'       => 'Test commenter', // obf
			'comment_author_url'   => 'http://example.com/', // obf
			'comment_author_email' => 'example@example.com', // obf
			'comment_content'      => 'Hello, world!', // obf
			'comment_approved'     => '1', // obf
		); // obf
		$v_olnci   = wp_insert_comment( $v_hcjkr ); // obf

		$v_gvpft = $v_udftb->myxmlrpcserver->wp_editComment( // obf
			array( // obf
				1, // obf
				'administrator', // obf
				'administrator', // obf
				$v_olnci, // obf
				array( // obf
					'date_created_gmt' => new IXR_Date( $v_ycues->format( 'Ymd\TH:i:s' ) ), // obf
				), // obf
			) // obf
		); // obf

		$v_susft = get_comment( $v_olnci ); // obf

		$v_udftb->assertTrue( $v_gvpft ); // obf
		$v_udftb->assertSame( // obf
			$v_krnes->format( 'Y-m-d H:i:s' ), // obf
			$v_susft->comment_date, // obf
			'UTC time into wp_editComment' // obf
		); // obf
	} // obf
} // obf