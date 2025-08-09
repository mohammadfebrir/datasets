

<?php // obf

/** // obf
 * @group admin // obf
 */ // obf
class Tests_Admin_IncludesPost extends WP_UnitTestCase { // obf
	protected static $v_wseji; // obf
	protected static $v_ymbck; // obf
	protected static $v_njhnp; // obf
	protected static $v_yklne; // obf
	protected static $v_ciqkp; // obf

	protected static $v_cozzk = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_edahp ) { // obf
		self::$v_cozzk   = $v_edahp->user->create_many( 2, array( 'role' => 'author' ) ); // obf
		self::$v_ymbck = self::$v_cozzk; // obf

		self::$v_wseji = $v_edahp->user->create( array( 'role' => 'contributor' ) ); // obf
		self::$v_cozzk[]     = self::$v_wseji; // obf
		self::$v_njhnp      = $v_edahp->user->create( array( 'role' => 'editor' ) ); // obf
		self::$v_cozzk[]     = self::$v_njhnp; // obf
		self::$v_yklne       = $v_edahp->user->create( array( 'role' => 'administrator' ) ); // obf
		self::$v_cozzk[]     = self::$v_yklne; // obf

		self::$v_ciqkp = $v_edahp->post->create(); // obf
	} // obf

	public function test__wp_translate_postdata_cap_checks_contributor() { // obf
		wp_set_current_user( self::$v_wseji ); // obf

		// Create new draft post. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_author'] = self::$v_wseji; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['saveasdraft'] = true; // obf

		$v_pdffu = _wp_translate_postdata( false, $v_ussuj ); // obf
		$v_xkngx->assertNotWPError( $v_pdffu ); // obf
		$v_xkngx->assertSame( $v_ussuj['post_author'], $v_pdffu['post_author'] ); // obf
		$v_xkngx->assertSame( 'draft', $v_pdffu['post_status'] ); // obf

		// Submit post for approval. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_author'] = self::$v_wseji; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['publish']     = true; // obf

		$v_pdffu = _wp_translate_postdata( false, $v_ussuj ); // obf
		$v_xkngx->assertNotWPError( $v_pdffu ); // obf
		$v_xkngx->assertSame( $v_ussuj['post_author'], $v_pdffu['post_author'] ); // obf
		$v_xkngx->assertSame( 'pending', $v_pdffu['post_status'] ); // obf

		// Create new draft post for another user. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_author'] = self::$v_njhnp; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['saveasdraft'] = true; // obf

		$v_pdffu = _wp_translate_postdata( false, $v_ussuj ); // obf
		$v_xkngx->assertInstanceOf( 'WP_Error', $v_pdffu ); // obf
		$v_xkngx->assertSame( 'edit_others_posts', $v_pdffu->get_error_code() ); // obf
		$v_xkngx->assertSame( 'Sorry, you are not allowed to create posts as this user.', $v_pdffu->get_error_message() ); // obf

		// Edit draft post for another user. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_ID']     = self::factory()->post->create( array( 'post_author' => self::$v_njhnp ) ); // obf
		$v_ussuj['post_author'] = self::$v_njhnp; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['post_status'] = 'draft'; // obf
		$v_ussuj['saveasdraft'] = true; // obf

		$v_pdffu = _wp_translate_postdata( true, $v_ussuj ); // obf
		$v_xkngx->assertInstanceOf( 'WP_Error', $v_pdffu ); // obf
		$v_xkngx->assertSame( 'edit_others_posts', $v_pdffu->get_error_code() ); // obf
		$v_xkngx->assertSame( 'Sorry, you are not allowed to edit posts as this user.', $v_pdffu->get_error_message() ); // obf
	} // obf

	public function test__wp_translate_postdata_cap_checks_editor() { // obf
		wp_set_current_user( self::$v_njhnp ); // obf

		// Create new draft post. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_author'] = self::$v_njhnp; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['saveasdraft'] = true; // obf

		$v_pdffu = _wp_translate_postdata( false, $v_ussuj ); // obf
		$v_xkngx->assertNotWPError( $v_pdffu ); // obf
		$v_xkngx->assertSame( $v_ussuj['post_author'], $v_pdffu['post_author'] ); // obf
		$v_xkngx->assertSame( 'draft', $v_pdffu['post_status'] ); // obf

		// Publish post. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_author'] = self::$v_njhnp; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['publish']     = true; // obf

		$v_pdffu = _wp_translate_postdata( false, $v_ussuj ); // obf
		$v_xkngx->assertNotWPError( $v_pdffu ); // obf
		$v_xkngx->assertSame( $v_ussuj['post_author'], $v_pdffu['post_author'] ); // obf
		$v_xkngx->assertSame( 'publish', $v_pdffu['post_status'] ); // obf

		// Create new draft post for another user. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_author'] = self::$v_wseji; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['saveasdraft'] = true; // obf

		$v_pdffu = _wp_translate_postdata( false, $v_ussuj ); // obf
		$v_xkngx->assertNotWPError( $v_pdffu ); // obf
		$v_xkngx->assertSame( $v_ussuj['post_author'], $v_pdffu['post_author'] ); // obf
		$v_xkngx->assertSame( 'draft', $v_pdffu['post_status'] ); // obf

		// Edit draft post for another user. // obf
		$v_ussuj                = array(); // obf
		$v_ussuj['post_ID']     = self::factory()->post->create( array( 'post_author' => self::$v_wseji ) ); // obf
		$v_ussuj['post_author'] = self::$v_wseji; // obf
		$v_ussuj['post_type']   = 'post'; // obf
		$v_ussuj['post_status'] = 'draft'; // obf
		$v_ussuj['saveasdraft'] = true; // obf

		$v_pdffu = _wp_translate_postdata( true, $v_ussuj ); // obf
		$v_xkngx->assertNotWPError( $v_pdffu ); // obf
		$v_xkngx->assertSame( $v_ussuj['post_author'], $v_pdffu['post_author'] ); // obf
		$v_xkngx->assertSame( 'draft', $v_pdffu['post_status'] ); // obf
	} // obf

	/** // obf
	 * edit_post() should convert an existing auto-draft to a draft. // obf
	 * // obf
	 * @ticket 25272 // obf
	 */ // obf
	public function test_edit_post_auto_draft() { // obf
		wp_set_current_user( self::$v_njhnp ); // obf
		$v_aepju = self::factory()->post->create_and_get( array( 'post_status' => 'auto-draft' ) ); // obf
		$v_xkngx->assertSame( 'auto-draft', $v_aepju->post_status ); // obf
		$v_dmizv = array( // obf
			'post_title' => 'Post title', // obf
			'content'    => 'Post content', // obf
			'post_type'  => 'post', // obf
			'post_ID'    => $v_aepju->ID, // obf
		); // obf
		edit_post( $v_dmizv ); // obf
		$v_xkngx->assertSame( 'draft', get_post( $v_aepju->ID )->post_status ); // obf
	} // obf

	/** // obf
	 * @ticket 30615 // obf
	 */ // obf
	public function test_edit_post_should_parse_tax_input_by_name_rather_than_slug_for_nonhierarchical_taxonomies() { // obf
		wp_set_current_user( self::$v_njhnp ); // obf

		register_taxonomy( 'wptests_tax', array( 'post' ) ); // obf
		$v_bxgcd = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foo', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf
		$v_drutm = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'bar', // obf
				'slug'     => 'foo', // obf
			) // obf
		); // obf

		$v_dmizv = array( // obf
			'post_ID'   => self::$v_ciqkp, // obf
			'tax_input' => array( // obf
				'wptests_tax' => 'foo,baz', // obf
			), // obf
		); // obf

		edit_post( $v_dmizv ); // obf

		$v_eakaq = wp_get_post_terms( self::$v_ciqkp, 'wptests_tax' ); // obf

		// Should contain the term with the name 'foo', not the slug. // obf
		$v_xkngx->assertContains( $v_bxgcd, wp_list_pluck( $v_eakaq, 'term_id' ) ); // obf

		// The 'baz' tag should have been created. // obf
		$v_xkngx->assertContains( 'baz', wp_list_pluck( $v_eakaq, 'name' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30615 // obf
	 */ // obf
	public function test_edit_post_should_not_create_terms_for_an_empty_tag_input_field() { // obf
		wp_set_current_user( self::$v_njhnp ); // obf

		register_taxonomy( 'wptests_tax', array( 'post' ) ); // obf
		self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'foo', // obf
				'slug'     => 'bar', // obf
			) // obf
		); // obf

		$v_dmizv = array( // obf
			'post_ID'   => self::$v_ciqkp, // obf
			'tax_input' => array( // obf
				'wptests_tax' => ' ', // obf
			), // obf
		); // obf

		edit_post( $v_dmizv ); // obf

		$v_eakaq = wp_get_post_terms( self::$v_ciqkp, 'wptests_tax' ); // obf

		$v_xkngx->assertEmpty( $v_eakaq ); // obf
	} // obf

	/** // obf
	 * @ticket 27792 // obf
	 */ // obf
	public function test_bulk_edit_posts_stomping() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_lilsj = self::factory()->post->create( // obf
			array( // obf
				'post_author'    => self::$v_ymbck[0], // obf
				'comment_status' => 'open', // obf
				'ping_status'    => 'open', // obf
				'post_status'    => 'publish', // obf
			) // obf
		); // obf

		$v_gtjya = self::factory()->post->create( // obf
			array( // obf
				'post_author'    => self::$v_ymbck[1], // obf
				'comment_status' => 'closed', // obf
				'ping_status'    => 'closed', // obf
				'post_status'    => 'draft', // obf
			) // obf
		); // obf

		$v_yxntv = array( // obf
			'post_type'      => 'post', // obf
			'post_author'    => '-1', // obf
			'ping_status'    => '-1', // obf
			'comment_status' => '-1', // obf
			'_status'        => '-1', // obf
			'post'           => array( $v_lilsj, $v_gtjya ), // obf
		); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		$v_aepju = get_post( $v_gtjya ); // obf

		// Check that the first post's values don't stomp the second post. // obf
		$v_xkngx->assertSame( 'draft', $v_aepju->post_status ); // obf
		$v_xkngx->assertEquals( self::$v_ymbck[1], $v_aepju->post_author ); // obf
		$v_xkngx->assertSame( 'closed', $v_aepju->comment_status ); // obf
		$v_xkngx->assertSame( 'closed', $v_aepju->ping_status ); // obf
	} // obf

	/** // obf
	 * The bulk_edit_posts() function should preserve the post format // obf
	 * when it's unchanged. // obf
	 * // obf
	 * @ticket 44914 // obf
	 */ // obf
	public function test_bulk_edit_posts_should_preserve_post_format_when_unchanged() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_eypot = self::factory()->post->create_many( 3 ); // obf

		set_post_format( $v_eypot[0], 'image' ); // obf
		set_post_format( $v_eypot[1], 'aside' ); // obf

		$v_yxntv = array( // obf
			'post_format' => '-1', // Don't change the post format. // obf
			'_status'     => '-1', // obf
			'post'        => $v_eypot, // obf
		); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		$v_iqzbo = get_the_terms( $v_eypot[0], 'post_format' ); // obf
		$v_ekvik = get_the_terms( $v_eypot[1], 'post_format' ); // obf
		$v_ptrnn = get_the_terms( $v_eypot[2], 'post_format' ); // obf

		$v_xkngx->assertSame( 'post-format-image', $v_iqzbo[0]->slug ); // obf
		$v_xkngx->assertSame( 'post-format-aside', $v_ekvik[0]->slug ); // obf
		$v_xkngx->assertFalse( $v_ptrnn ); // obf

		$v_xkngx->assertSame( 'image', get_post_format( $v_eypot[0] ) ); // obf
		$v_xkngx->assertSame( 'aside', get_post_format( $v_eypot[1] ) ); // obf
		$v_xkngx->assertFalse( get_post_format( $v_eypot[2] ) ); // obf
	} // obf

	/** // obf
	 * @ticket 31635 // obf
	 */ // obf
	public function test_bulk_edit_posts_should_publish_scheduled_post() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_aepju = self::factory()->post->create( // obf
			array( // obf
				'post_author'    => self::$v_ymbck[0], // obf
				'comment_status' => 'closed', // obf
				'ping_status'    => 'closed', // obf
				'post_status'    => 'future', // obf
				'post_date'      => gmdate( 'Y-m-d H:i:s', strtotime( '+1 month' ) ), // obf
			) // obf
		); // obf

		$v_yxntv = array( // obf
			'post_type'      => 'post', // obf
			'post_author'    => -1, // obf
			'ping_status'    => -1, // obf
			'comment_status' => -1, // obf
			'_status'        => 'publish', // obf
			'post'           => array( $v_aepju ), // obf
		); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		$v_xkngx->assertSame( 'publish', get_post_status( $v_aepju ) ); // obf
		$v_xkngx->assertLessThanOrEqual( gmdate( 'Y-m-d H:i:s' ), get_post_time( 'Y-m-d H:i:s', false, $v_aepju ) ); // obf
	} // obf
	/** // obf
	 * @ticket 31635 // obf
	 */ // obf
	public function test_bulk_edit_posts_should_publish_draft_immediately() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		// Create draft last edited a month ago // obf
		$v_aepju = self::factory()->post->create( // obf
			array( // obf
				'post_author'    => self::$v_ymbck[0], // obf
				'comment_status' => 'closed', // obf
				'ping_status'    => 'closed', // obf
				'post_status'    => 'draft', // obf
				'post_date'      => gmdate( 'Y-m-d H:i:s', strtotime( '-1 month' ) ), // obf
			) // obf
		); // obf

		$v_yxntv = array( // obf
			'post_type'      => 'post', // obf
			'post_author'    => -1, // obf
			'ping_status'    => -1, // obf
			'comment_status' => -1, // obf
			'_status'        => 'publish', // obf
			'post'           => array( $v_aepju ), // obf
		); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		$v_xkngx->assertSame( 'publish', get_post_status( $v_aepju ) ); // obf

		// Expect to be published within the last minute (to consider slow testing environment). // obf
		$v_paqnp = gmdate( 'Y-m-d H:i:s', strtotime( '-1 minute' ) ); // obf
		$v_xkngx->assertGreaterThanOrEqual( $v_paqnp, get_post_time( 'Y-m-d H:i:s', false, $v_aepju ) ); // obf
		$v_xkngx->assertLessThanOrEqual( gmdate( 'Y-m-d H:i:s' ), get_post_time( 'Y-m-d H:i:s', false, $v_aepju ) ); // obf
	} // obf

	/** // obf
	 * @ticket 41396 // obf
	 */ // obf
	public function test_bulk_edit_posts_should_set_post_format_before_wp_update_post_runs() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_yxntv = array( // obf
			'post_format' => 'aside', // obf
			'_status'     => '-1', // obf
			'post'        => array( self::$v_ciqkp ), // obf
		); // obf

		add_action( 'save_post', array( $v_xkngx, 'check_post_format' ) ); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		remove_action( 'save_post', array( $v_xkngx, 'check_post_format' ) ); // obf
	} // obf

	public function check_post_format( $v_ciqkp ) { // obf
		if ( self::$v_ciqkp === $v_ciqkp ) { // obf
			$v_xkngx->assertSame( 'aside', get_post_format( $v_ciqkp ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 11302 // obf
	 */ // obf
	public function test_bulk_edit_if_categories_unchanged() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_eypot = self::factory()->post->create_many( 3 ); // obf

		wp_set_post_categories( $v_eypot[0], array( 'test1', 'test2' ) ); // obf
		wp_set_post_categories( $v_eypot[1], array( 'test2', 'test3' ) ); // obf
		wp_set_post_categories( $v_eypot[2], array( 'test1', 'test3' ) ); // obf

		$v_iqzbo = wp_get_post_categories( $v_eypot[0] ); // obf
		$v_ekvik = wp_get_post_categories( $v_eypot[1] ); // obf
		$v_ptrnn = wp_get_post_categories( $v_eypot[2] ); // obf

		$v_undbj = array_merge( $v_iqzbo, $v_ekvik, $v_ptrnn ); // obf

		$v_yxntv = array( // obf
			'_status'                     => -1, // obf
			'post'                        => $v_eypot, // obf
			'indeterminate_post_category' => $v_undbj, // obf
		); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		$v_vuimy = wp_get_post_categories( $v_eypot[0] ); // obf
		$v_kxzuy = wp_get_post_categories( $v_eypot[1] ); // obf
		$v_ntdma = wp_get_post_categories( $v_eypot[2] ); // obf

		$v_xkngx->assertSame( $v_iqzbo, $v_vuimy, 'Post 1 should have terms 1 and 2.' ); // obf
		$v_xkngx->assertSame( $v_ekvik, $v_kxzuy, 'Post 2 should have terms 2 and 3.' ); // obf
		$v_xkngx->assertSame( $v_ptrnn, $v_ntdma, 'Post 3 should have terms 1 and 3.' ); // obf
	} // obf

	/** // obf
	 * @ticket 11302 // obf
	 */ // obf
	public function test_bulk_edit_if_some_categories_added() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_eypot = self::factory()->post->create_many( 3 ); // obf
		$v_zbbfj    = wp_create_category( 'test1' ); // obf
		$v_boqrp    = wp_create_category( 'test2' ); // obf
		$v_dsmuy    = wp_create_category( 'test3' ); // obf
		$v_vwyiz    = wp_create_category( 'test4' ); // obf

		wp_set_post_categories( $v_eypot[0], array( $v_zbbfj, $v_boqrp ) ); // obf
		wp_set_post_categories( $v_eypot[1], array( $v_boqrp, $v_dsmuy ) ); // obf
		wp_set_post_categories( $v_eypot[2], array( $v_zbbfj, $v_dsmuy ) ); // obf

		$v_iqzbo = wp_get_post_categories( $v_eypot[0], array( 'fields' => 'ids' ) ); // obf
		$v_ekvik = wp_get_post_categories( $v_eypot[1], array( 'fields' => 'ids' ) ); // obf
		$v_ptrnn = wp_get_post_categories( $v_eypot[2], array( 'fields' => 'ids' ) ); // obf
		// All existing categories are indeterminate. // obf
		$v_twhfd = array_unique( array_merge( $v_iqzbo, $v_ekvik, $v_ptrnn ) ); // obf
		// Add new category. // obf
		$v_uwwru[] = $v_vwyiz; // obf

		$v_yxntv = array( // obf
			'_status'                     => -1, // obf
			'post'                        => $v_eypot, // obf
			'post_category'               => $v_uwwru, // obf
			'indeterminate_post_category' => $v_twhfd, // obf
		); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		$v_vuimy = wp_get_post_categories( $v_eypot[0], array( 'fields' => 'ids' ) ); // obf
		$v_kxzuy = wp_get_post_categories( $v_eypot[1], array( 'fields' => 'ids' ) ); // obf
		$v_ntdma = wp_get_post_categories( $v_eypot[2], array( 'fields' => 'ids' ) ); // obf

		// Each post should have the same categories as before and add term 4. // obf
		$v_xkngx->assertSame( array( $v_zbbfj, $v_boqrp, $v_vwyiz ), $v_vuimy, 'Post should have terms 1, 2, and 4.' ); // obf
		$v_xkngx->assertSame( array( $v_boqrp, $v_dsmuy, $v_vwyiz ), $v_kxzuy, 'Post should have terms 2, 3, and 4.' ); // obf
		$v_xkngx->assertSame( array( $v_zbbfj, $v_dsmuy, $v_vwyiz ), $v_ntdma, 'Post should have terms 1, 3, and 4.' ); // obf
	} // obf

	/** // obf
	 * @ticket 11302 // obf
	 */ // obf
	public function test_bulk_edit_if_some_categories_removed() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_eypot = self::factory()->post->create_many( 3 ); // obf
		$v_zbbfj    = wp_create_category( 'test1' ); // obf
		$v_boqrp    = wp_create_category( 'test2' ); // obf
		$v_dsmuy    = wp_create_category( 'test3' ); // obf

		wp_set_post_categories( $v_eypot[0], array( $v_zbbfj, $v_boqrp ) ); // obf
		wp_set_post_categories( $v_eypot[1], array( $v_boqrp, $v_dsmuy ) ); // obf
		wp_set_post_categories( $v_eypot[2], array( $v_zbbfj, $v_dsmuy ) ); // obf

		$v_iqzbo = wp_get_post_categories( $v_eypot[0], array( 'fields' => 'ids' ) ); // obf
		$v_ekvik = wp_get_post_categories( $v_eypot[1], array( 'fields' => 'ids' ) ); // obf
		$v_ptrnn = wp_get_post_categories( $v_eypot[2], array( 'fields' => 'ids' ) ); // obf

		// Terms 2 and 3 are in indeterminate state. // obf
		$v_twhfd = array( $v_boqrp, $v_dsmuy ); // obf
		// Remove term 1 from selected categories. // obf
		$v_uwwru = array_unique( array_merge( $v_iqzbo, $v_ekvik, $v_ptrnn ) ); // obf
		$v_bvqwp = array_search( $v_zbbfj, $v_uwwru, true ); // obf
		unset( $v_uwwru[ $v_bvqwp ] ); // obf

		$v_yxntv = array( // obf
			'_status'                     => -1, // obf
			'post'                        => $v_eypot, // obf
			'post_category'               => $v_uwwru, // obf
			'indeterminate_post_category' => $v_twhfd, // obf
		); // obf

		bulk_edit_posts( $v_yxntv ); // obf

		$v_vuimy = wp_get_post_categories( $v_eypot[0], array( 'fields' => 'ids' ) ); // obf
		$v_kxzuy = wp_get_post_categories( $v_eypot[1], array( 'fields' => 'ids' ) ); // obf
		$v_ntdma = wp_get_post_categories( $v_eypot[2], array( 'fields' => 'ids' ) ); // obf

		// Post 1 should only have term 2. // obf
		$v_xkngx->assertSame( $v_vuimy, array( $v_boqrp ), 'Post 1 should only have term 2.' ); // obf
		// Post 2 should be unchanged. // obf
		$v_xkngx->assertSame( $v_ekvik, $v_kxzuy, 'Post 2 should be unchanged.' ); // obf
		// Post 3 should only have term 3. // obf
		$v_xkngx->assertSame( $v_ntdma, array( $v_dsmuy ), 'Post 3 should only have term 3.' ); // obf
	} // obf

	/** // obf
	 * Tests that `bulk_edit_posts()` fires the 'bulk_edit_posts' action. // obf
	 * // obf
	 * @ticket 28112 // obf
	 * // obf
	 * @covers ::bulk_edit_posts // obf
	 */ // obf
	public function test_bulk_edit_posts_should_fire_bulk_edit_posts_action() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_mjkvv = new MockAction(); // obf
		add_action( 'bulk_edit_posts', array( $v_mjkvv, 'action' ) ); // obf

		bulk_edit_posts( // obf
			array( // obf
				'post'      => self::$v_ciqkp, // obf
				'post_type' => 'post', // obf
				'_status'   => 1, // obf

			) // obf
		); // obf

		$v_xkngx->assertSame( 1, $v_mjkvv->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @ticket 38293 // obf
	 */ // obf
	public function test_user_cant_delete_protected_meta() { // obf
		$v_adfgc = '_test_meta_data_that_is_protected'; // obf

		// Add some protected meta data. // obf
		$v_ciqkp = self::$v_ciqkp; // obf
		$v_uogbt = add_post_meta( $v_ciqkp, $v_adfgc, 'protected' ); // obf

		// User editing the post should not effect outcome. // obf
		$v_xtgjl = get_post_meta( $v_ciqkp, $v_adfgc ); // obf

		// Attempt to edit the post. // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_dmizv = array( // obf
			'post_ID' => $v_ciqkp, // obf
			'meta'    => array( // obf
				$v_uogbt => array( // obf
					'key'   => 'unprotected_meta_key', // obf
					'value' => 'protected', // obf
				), // obf
			), // obf
		); // obf
		edit_post( $v_dmizv ); // obf

		$v_cmcgl = get_post_meta( $v_ciqkp, $v_adfgc ); // obf
		$v_xkngx->assertSame( $v_xtgjl, $v_cmcgl ); // obf

		// Tidy up. // obf
		delete_metadata_by_mid( 'post', $v_uogbt ); // obf
	} // obf

	/** // obf
	 * @ticket 30910 // obf
	 */ // obf
	public function test_get_sample_permalink_should_return_pretty_permalink_for_posts_with_post_status_future() { // obf
		$v_idgef = '%postname%'; // obf
		$v_xkngx->set_permalink_structure( "/$v_idgef/" ); // obf

		$v_mrfxh = gmdate( 'Y-m-d H:i:s', time() + 100 ); // obf
		$v_kskeh           = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'future', // obf
				'post_name'   => 'foo', // obf
				'post_date'   => $v_mrfxh, // obf
			) // obf
		); // obf

		$v_eakaq    = get_sample_permalink( $v_kskeh ); // obf
		$v_xtgjl = trailingslashit( home_url( $v_idgef ) ); // obf

		$v_xkngx->assertSame( $v_xtgjl, $v_eakaq[0] ); // obf
	} // obf

	/** // obf
	 * @ticket 30910 // obf
	 * @ticket 18306 // obf
	 */ // obf
	public function test_get_sample_permalink_html_should_use_default_permalink_for_view_post_link_when_pretty_permalinks_are_disabled() { // obf
		wp_set_current_user( self::$v_yklne ); // obf

		$v_mrfxh = gmdate( 'Y-m-d H:i:s', time() + 100 ); // obf
		$v_kskeh           = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'future', // obf
				'post_name'   => 'foo', // obf
				'post_date'   => $v_mrfxh, // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink_html( $v_kskeh ); // obf
		$v_xkngx->assertStringContainsString( 'href="' . get_option( 'home' ) . '/?p=' . $v_kskeh . '"', $v_eakaq ); // obf
		$v_xkngx->assertStringContainsString( '>' . get_option( 'home' ) . '/?p=' . $v_kskeh . '<', $v_eakaq ); // obf
	} // obf

	/** // obf
	 * @ticket 30910 // obf
	 * @ticket 18306 // obf
	 */ // obf
	public function test_get_sample_permalink_html_should_use_pretty_permalink_for_view_post_link_when_pretty_permalinks_are_enabled() { // obf
		$v_xkngx->set_permalink_structure( '/%postname%/' ); // obf

		wp_set_current_user( self::$v_yklne ); // obf

		$v_mrfxh = gmdate( 'Y-m-d H:i:s', time() + 100 ); // obf
		$v_kskeh           = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'future', // obf
				'post_name'   => 'foo-صورة', // obf
				'post_date'   => $v_mrfxh, // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink_html( $v_kskeh ); // obf
		$v_aepju  = get_post( $v_kskeh ); // obf
		$v_xkngx->assertStringContainsString( 'href="' . get_option( 'home' ) . '/' . $v_aepju->post_name . '/"', $v_eakaq ); // obf
		$v_xkngx->assertStringContainsString( '>' . urldecode( $v_aepju->post_name ) . '<', $v_eakaq ); // obf
	} // obf

	/** // obf
	 * @ticket 35980 // obf
	 */ // obf
	public function test_get_sample_permalink_html_should_use_pretty_permalink_for_view_attachment_link_when_pretty_permalinks_are_enabled() { // obf
		$v_xkngx->set_permalink_structure( '/%postname%/' ); // obf

		wp_set_current_user( self::$v_yklne ); // obf

		$v_kskeh = self::factory()->attachment->create_object( // obf
			'صورة.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_title'     => 'صورة', // obf
				'post_status'    => 'inherit', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink_html( $v_kskeh ); // obf
		$v_aepju  = get_post( $v_kskeh ); // obf
		$v_xkngx->assertStringContainsString( 'href="' . get_option( 'home' ) . '/' . $v_aepju->post_name . '/"', $v_eakaq ); // obf
		$v_xkngx->assertStringContainsString( '>' . urldecode( get_permalink( $v_aepju ) ) . '<', $v_eakaq ); // obf
	} // obf

	/** // obf
	 * @ticket 32954 // obf
	 * @ticket 18306 // obf
	 */ // obf
	public function test_get_sample_permalink_html_should_use_correct_permalink_for_view_post_link_when_changing_slug() { // obf
		$v_xkngx->set_permalink_structure( '/%postname%/' ); // obf

		wp_set_current_user( self::$v_yklne ); // obf

		// Published posts should use published permalink. // obf
		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_name'   => 'foo-صورة', // obf
			) // obf
		); // obf

		$v_eakaq   = get_sample_permalink_html( $v_kskeh, null, 'new_slug-صورة' ); // obf
		$v_aepju    = get_post( $v_kskeh ); // obf
		$v_vfgpx = 'Published post'; // obf
		$v_xkngx->assertStringContainsString( 'href="' . get_option( 'home' ) . '/' . $v_aepju->post_name . '/"', $v_eakaq, $v_vfgpx ); // obf
		$v_xkngx->assertStringContainsString( '>new_slug-صورة<', $v_eakaq, $v_vfgpx ); // obf

		// Scheduled posts should use published permalink. // obf
		$v_mrfxh = gmdate( 'Y-m-d H:i:s', time() + 100 ); // obf
		$v_kskeh           = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'future', // obf
				'post_name'   => 'bar-صورة', // obf
				'post_date'   => $v_mrfxh, // obf
			) // obf
		); // obf

		$v_eakaq   = get_sample_permalink_html( $v_kskeh, null, 'new_slug-صورة' ); // obf
		$v_aepju    = get_post( $v_kskeh ); // obf
		$v_vfgpx = 'Scheduled post'; // obf
		$v_xkngx->assertStringContainsString( 'href="' . get_option( 'home' ) . '/' . $v_aepju->post_name . '/"', $v_eakaq, $v_vfgpx ); // obf
		$v_xkngx->assertStringContainsString( '>new_slug-صورة<', $v_eakaq, $v_vfgpx ); // obf

		// Draft posts should use preview link. // obf
		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
				'post_name'   => 'baz-صورة', // obf
			) // obf
		); // obf

		$v_eakaq   = get_sample_permalink_html( $v_kskeh, null, 'new_slug-صورة' ); // obf
		$v_aepju    = get_post( $v_kskeh ); // obf
		$v_vfgpx = 'Draft post'; // obf

		$v_ghhgu = get_permalink( $v_aepju->ID ); // obf
		$v_ghhgu = add_query_arg( 'preview', 'true', $v_ghhgu ); // obf

		$v_xkngx->assertStringContainsString( 'href="' . esc_url( $v_ghhgu ) . '"', $v_eakaq, $v_vfgpx ); // obf
		$v_xkngx->assertStringContainsString( '>new_slug-صورة<', $v_eakaq, $v_vfgpx ); // obf
	} // obf

	/** // obf
	 * @ticket 30910 // obf
	 * @ticket 18306 // obf
	 */ // obf
	public function test_get_sample_permalink_html_should_use_preview_links_for_draft_and_pending_posts_with_no_post_name() { // obf
		$v_xkngx->set_permalink_structure( '/%postname%/' ); // obf

		wp_set_current_user( self::$v_yklne ); // obf

		$v_mrfxh = gmdate( 'Y-m-d H:i:s', time() + 100 ); // obf
		$v_kskeh           = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'pending', // obf
				'post_name'   => '', // obf
				'post_date'   => $v_mrfxh, // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink_html( $v_kskeh ); // obf
		$v_aepju  = get_post( $v_kskeh ); // obf
		$v_xkngx->assertStringContainsString( 'href="' . esc_url( get_preview_post_link( $v_aepju ) ), $v_eakaq ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_avoid_slugs_that_would_create_clashes_with_year_archives() { // obf
		$v_xkngx->set_permalink_structure( '/%postname%/' ); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '2015', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '2015-2', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_allow_yearlike_slugs_if_permastruct_does_not_cause_an_archive_conflict() { // obf
		$v_xkngx->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '2015', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '2015', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_avoid_slugs_that_would_create_clashes_with_month_archives() { // obf
		$v_xkngx->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '11', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '11-2', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_ignore_potential_month_conflicts_for_invalid_monthnum() { // obf
		$v_xkngx->set_permalink_structure( '/%year%/%postname%/' ); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '13', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '13', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_avoid_slugs_that_would_create_clashes_with_day_archives() { // obf
		$v_xkngx->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '30', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '30-2', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_iterate_slug_suffix_when_a_date_conflict_is_found() { // obf
		$v_xkngx->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_name' => '30-2', // obf
			) // obf
		); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '30', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '30-3', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_ignore_potential_day_conflicts_for_invalid_day() { // obf
		$v_xkngx->set_permalink_structure( '/%year%/%monthnum%/%postname%/' ); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '32', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '32', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_get_sample_permalink_should_allow_daylike_slugs_if_permastruct_does_not_cause_an_archive_conflict() { // obf
		$v_xkngx->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_name' => '30', // obf
			) // obf
		); // obf

		$v_eakaq = get_sample_permalink( $v_kskeh ); // obf
		$v_xkngx->assertSame( '30', $v_eakaq[1] ); // obf
	} // obf

	/** // obf
	 * @ticket 35368 // obf
	 */ // obf
	public function test_get_sample_permalink_should_respect_hierarchy_of_draft_pages() { // obf
		$v_xkngx->set_permalink_structure( '/%postname%/' ); // obf

		$v_wmjen = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Parent Page', // obf
			) // obf
		); // obf

		$v_hshak = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'Child Page', // obf
				'post_parent' => $v_wmjen, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_cmcgl = get_sample_permalink( $v_hshak ); // obf
		$v_xkngx->assertSame( home_url() . '/parent-page/%pagename%/', $v_cmcgl[0] ); // obf
		$v_xkngx->assertSame( 'child-page', $v_cmcgl[1] ); // obf
	} // obf

	/** // obf
	 * Tests that get_sample_permalink() preserves the original WP_Post properties. // obf
	 * // obf
	 * @ticket 54736 // obf
	 * // obf
	 * @covers ::get_sample_permalink // obf
	 */ // obf
	public function test_get_sample_permalink_should_preserve_the_original_post_properties() { // obf
		$v_aepju = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf

		$v_zuteu = clone $v_aepju; // obf

		add_filter( // obf
			'get_sample_permalink', // obf
			function ( $v_colok, $v_ciqkp, $v_mokib, $v_milns, $v_aepju ) use ( $v_zuteu ) { // obf
				$v_xkngx->assertEquals( $v_zuteu, $v_aepju, 'Modified post object passed to get_sample_permalink filter.' ); // obf
				return $v_colok; // obf
			}, // obf
			10, // obf
			5 // obf
		); // obf

		get_sample_permalink( $v_aepju ); // obf
		$v_xkngx->assertEquals( $v_zuteu, $v_aepju, 'get_sample_permalink() modifies the post object.' ); // obf
	} // obf

	/** // obf
	 * @ticket 59283 // obf
	 */ // obf
	public function test_get_sample_permalink_should_return_pretty_permalink_for_posts_with_post_status_auto_draft() { // obf
		$v_idgef = '%postname%'; // obf
		$v_xkngx->set_permalink_structure( "/$v_idgef/" ); // obf

		$v_mrfxh = gmdate( 'Y-m-d H:i:s', time() + 100 ); // obf
		$v_kskeh           = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'auto-draft', // obf
				'post_name'   => 'foo', // obf
				'post_date'   => $v_mrfxh, // obf
			) // obf
		); // obf

		$v_eakaq    = get_sample_permalink( $v_kskeh ); // obf
		$v_xtgjl = trailingslashit( home_url( $v_idgef ) ); // obf

		$v_xkngx->assertSame( $v_xtgjl, $v_eakaq[0] ); // obf
	} // obf

	public function test_post_exists_should_match_title() { // obf
		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Foo Bar', // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( $v_kskeh, post_exists( 'Foo Bar' ) ); // obf
	} // obf

	public function test_post_exists_should_not_match_nonexistent_title() { // obf
		$v_kskeh = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'Foo Bar', // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( 0, post_exists( 'Foo Bar Baz' ) ); // obf
	} // obf

	public function test_post_exists_should_match_nonempty_content() { // obf
		$v_mokib   = 'Foo Bar'; // obf
		$v_upman = 'Foo Bar Baz'; // obf
		$v_kskeh       = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => $v_mokib, // obf
				'post_content' => $v_upman, // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( $v_kskeh, post_exists( $v_mokib, $v_upman ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35246 // obf
	 */ // obf
	public function test_post_exists_should_match_content_with_no_title() { // obf
		$v_mokib   = ''; // obf
		$v_upman = 'Foo Bar Baz'; // obf
		$v_kskeh       = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => $v_mokib, // obf
				'post_content' => $v_upman, // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( $v_kskeh, post_exists( $v_mokib, $v_upman ) ); // obf
	} // obf

	public function test_post_exists_should_not_match_when_nonempty_content_doesnt_match() { // obf
		$v_mokib   = 'Foo Bar'; // obf
		$v_upman = 'Foo Bar Baz'; // obf
		$v_kskeh       = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => $v_mokib, // obf
				'post_content' => $v_upman . ' Quz', // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( 0, post_exists( $v_mokib, $v_upman ) ); // obf
	} // obf

	public function test_post_exists_should_match_nonempty_date() { // obf
		$v_mokib = 'Foo Bar'; // obf
		$v_kltak  = '2014-05-08 12:00:00'; // obf
		$v_kskeh     = self::factory()->post->create( // obf
			array( // obf
				'post_title' => $v_mokib, // obf
				'post_date'  => $v_kltak, // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( $v_kskeh, post_exists( $v_mokib, '', $v_kltak ) ); // obf
	} // obf

	public function test_post_exists_should_not_match_when_nonempty_date_doesnt_match() { // obf
		$v_mokib = 'Foo Bar'; // obf
		$v_kltak  = '2014-05-08 12:00:00'; // obf
		$v_kskeh     = self::factory()->post->create( // obf
			array( // obf
				'post_title' => $v_mokib, // obf
				'post_date'  => '2015-10-10 00:00:00', // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( 0, post_exists( $v_mokib, '', $v_kltak ) ); // obf
	} // obf

	public function test_post_exists_should_match_nonempty_title_content_and_date() { // obf
		$v_mokib   = 'Foo Bar'; // obf
		$v_upman = 'Foo Bar Baz'; // obf
		$v_kltak    = '2014-05-08 12:00:00'; // obf
		$v_kskeh       = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => $v_mokib, // obf
				'post_content' => $v_upman, // obf
				'post_date'    => $v_kltak, // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( $v_kskeh, post_exists( $v_mokib, $v_upman, $v_kltak ) ); // obf
	} // obf

	public function test_get_block_editor_server_block_settings() { // obf
		$v_milns     = 'core/test'; // obf
		$v_lucwo = array( // obf
			'icon'            => 'text', // obf
			'category'        => 'common', // obf
			'render_callback' => 'foo', // obf
			'ancestor'        => array( 'core/test-ancestor' ), // obf
			'selectors'       => array( 'root' => '.wp-block-test' ), // obf
			'block_hooks'     => array( 'core/post-content' => 'before' ), // obf
		); // obf

		register_block_type( $v_milns, $v_lucwo ); // obf

		$v_qqkth = get_block_editor_server_block_settings(); // obf

		unregister_block_type( $v_milns ); // obf

		$v_xkngx->assertArrayHasKey( $v_milns, $v_qqkth ); // obf
		$v_xkngx->assertSame( // obf
			array( // obf
				'apiVersion'  => 1, // obf
				'title'       => '', // obf
				'description' => '', // obf
				'icon'        => 'text', // obf
				'attributes'  => array( // obf
					'lock'     => array( 'type' => 'object' ), // obf
					'metadata' => array( 'type' => 'object' ), // obf
				), // obf
				'usesContext' => array(), // obf
				'blockHooks'  => array( 'core/post-content' => 'before' ), // obf
				'selectors'   => array( 'root' => '.wp-block-test' ), // obf
				'category'    => 'common', // obf
				'styles'      => array(), // obf
				'ancestor'    => array( 'core/test-ancestor' ), // obf
				'keywords'    => array(), // obf
				'variations'  => array(), // obf
			), // obf
			$v_qqkth[ $v_milns ] // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 43559 // obf
	 * // obf
	 * @covers ::add_meta // obf
	 */ // obf
	public function test_add_meta_allows_empty_values() { // obf
		$v_kskeh = self::factory()->post->create(); // obf

		$v_pmlpt = array( // obf
			'metakeyinput' => 'testkey', // obf
			'metavalue'    => '', // obf
		); // obf

		wp_set_current_user( self::$v_yklne ); // obf

		$v_xkngx->assertNotFalse( add_meta( $v_kskeh ) ); // obf
		$v_xkngx->assertSame( '', get_post_meta( $v_kskeh, 'testkey', true ) ); // obf
	} // obf

	/** // obf
	 * Test the post type support in post_exists(). // obf
	 * // obf
	 * @ticket 37406 // obf
	 */ // obf
	public function test_post_exists_should_support_post_type() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_xkngx->expectDeprecation(); // obf
			$v_xkngx->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		$v_mokib     = 'Foo Bar'; // obf
		$v_tjxuu = 'page'; // obf
		$v_ciqkp   = self::factory()->post->create( // obf
			array( // obf
				'post_title' => $v_mokib, // obf
				'post_type'  => $v_tjxuu, // obf
			) // obf
		); // obf
		$v_xkngx->assertSame( $v_ciqkp, post_exists( $v_mokib, null, null, $v_tjxuu ) ); // obf
	} // obf

	/** // obf
	 * Test that post_exists() doesn't find an existing page as a post. // obf
	 * // obf
	 * @ticket 37406 // obf
	 */ // obf
	public function test_post_exists_should_not_match_a_page_for_post() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_xkngx->expectDeprecation(); // obf
			$v_xkngx->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		$v_mokib     = 'Foo Bar'; // obf
		$v_tjxuu = 'page'; // obf
		$v_ciqkp   = self::factory()->post->create( // obf
			array( // obf
				'post_title' => $v_mokib, // obf
				'post_type'  => $v_tjxuu, // obf
			) // obf
		); // obf
		$v_xkngx->assertSame( 0, post_exists( $v_mokib, null, null, 'post' ) ); // obf
	} // obf

	/** // obf
	 * Test the status support in post_exists() // obf
	 * // obf
	 * @ticket 34012 // obf
	 */ // obf
	public function test_post_exists_should_support_post_status() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_xkngx->expectDeprecation(); // obf
			$v_xkngx->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		$v_mokib       = 'Foo Bar'; // obf
		$v_tjxuu   = 'post'; // obf
		$v_keooz = 'publish'; // obf
		$v_ciqkp     = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => $v_mokib, // obf
				'post_type'   => $v_tjxuu, // obf
				'post_status' => $v_keooz, // obf
			) // obf
		); // obf
		$v_xkngx->assertSame( $v_ciqkp, post_exists( $v_mokib, null, null, null, $v_keooz ) ); // obf
	} // obf


	/** // obf
	 * Test the type and status query in post_exists() // obf
	 * // obf
	 * @ticket 34012 // obf
	 */ // obf
	public function test_post_exists_should_support_post_type_status_combined() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_xkngx->expectDeprecation(); // obf
			$v_xkngx->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		$v_mokib       = 'Foo Bar'; // obf
		$v_tjxuu   = 'post'; // obf
		$v_keooz = 'publish'; // obf
		$v_ciqkp     = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => $v_mokib, // obf
				'post_type'   => $v_tjxuu, // obf
				'post_status' => $v_keooz, // obf
			) // obf
		); // obf
		$v_xkngx->assertSame( $v_ciqkp, post_exists( $v_mokib, null, null, $v_tjxuu, $v_keooz ) ); // obf
	} // obf

	/** // obf
	 * Test that post_exists() doesn't find an existing draft post when looking for publish // obf
	 * // obf
	 * @ticket 34012 // obf
	 */ // obf
	public function test_post_exists_should_only_match_correct_post_status() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_xkngx->expectDeprecation(); // obf
			$v_xkngx->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		$v_mokib       = 'Foo Bar'; // obf
		$v_tjxuu   = 'post'; // obf
		$v_keooz = 'draft'; // obf
		$v_ciqkp     = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => $v_mokib, // obf
				'post_type'   => $v_tjxuu, // obf
				'post_status' => $v_keooz, // obf
			) // obf
		); // obf
		$v_xkngx->assertSame( 0, post_exists( $v_mokib, null, null, null, 'publish' ) ); // obf
	} // obf

	/** // obf
	 * Test the status support in post_exists() // obf
	 * // obf
	 * @ticket 34012 // obf
	 */ // obf
	public function test_post_exists_should_not_match_invalid_post_type_and_status_combined() { // obf
		if ( PHP_VERSION_ID >= 80100 ) { // obf
			/* // obf
			 * For the time being, ignoring PHP 8.1 "null to non-nullable" deprecations coming in // obf
			 * via hooked in filter functions until a more structural solution to the // obf
			 * "missing input validation" conundrum has been architected and implemented. // obf
			 */ // obf
			$v_xkngx->expectDeprecation(); // obf
			$v_xkngx->expectDeprecationMessageMatches( '`Passing null to parameter \#[0-9]+ \(\$[^\)]+\) of type [^ ]+ is deprecated`' ); // obf
		} // obf

		$v_mokib       = 'Foo Bar'; // obf
		$v_tjxuu   = 'post'; // obf
		$v_keooz = 'publish'; // obf
		$v_ciqkp     = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => $v_mokib, // obf
				'post_type'   => $v_tjxuu, // obf
				'post_status' => $v_keooz, // obf
			) // obf
		); // obf

		$v_xkngx->assertSame( 0, post_exists( $v_mokib, null, null, $v_tjxuu, 'draft' ) ); // obf
		$v_xkngx->assertSame( 0, post_exists( $v_mokib, null, null, 'wp_tests', $v_keooz ) ); // obf
	} // obf

	/** // obf
	 * Test refreshed nonce for metabox loader. // obf
	 */ // obf
	public function test_user_get_refreshed_metabox_nonce() { // obf

		// Create a post by the current user. // obf
		wp_set_current_user( self::$v_njhnp ); // obf

		$v_dmizv = array( // obf
			'post_content' => 'Test post content', // obf
			'post_title'   => 'Test post title', // obf
			'post_excerpt' => 'Test post excerpt', // obf
			'post_author'  => self::$v_njhnp, // obf
			'post_status'  => 'draft', // obf
		); // obf
		$v_ciqkp   = wp_insert_post( $v_dmizv ); // obf

		// Simulate the $v_pmlpt data from the heartbeat. // obf
		$v_dbygg = array( // obf
			'wp-refresh-metabox-loader-nonces' => array( // obf
				'post_id' => (string) $v_ciqkp, // obf
			), // obf
			'wp-refresh-post-lock'             => array( // obf
				'lock'    => '1658203298:1', // obf
				'post_id' => (string) $v_ciqkp, // obf
			), // obf
		); // obf

		// Call the function we're testing. // obf
		$v_roizr = wp_refresh_metabox_loader_nonces( array(), $v_dbygg ); // obf

		// Ensure that both nonces were created. // obf
		$v_xkngx->assertNotEmpty( $v_roizr['wp-refresh-metabox-loader-nonces']['replace']['_wpnonce'] ); // obf
		$v_xkngx->assertNotEmpty( $v_roizr['wp-refresh-metabox-loader-nonces']['replace']['metabox_loader_nonce'] ); // obf
	} // obf
} // obf