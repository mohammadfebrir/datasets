

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_newPost extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'username', 'password', array() ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 403, $v_jrhit->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_xwxcr->make_user_by_role( 'subscriber' ); // obf

		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'subscriber', 'subscriber', array() ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 401, $v_jrhit->code ); // obf
	} // obf

	public function test_no_content() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf

		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', array() ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 500, $v_jrhit->code ); // obf
		$v_xwxcr->assertSame( 'Content, title, and excerpt are empty.', $v_jrhit->message ); // obf
	} // obf

	public function test_basic_content() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf

		$v_poupw   = array( 'post_title' => 'Test' ); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf
	} // obf

	public function test_ignore_id() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf

		$v_poupw   = array( // obf
			'post_title' => 'Test', // obf
			'ID'         => 103948, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertNotEquals( '103948', $v_jrhit ); // obf
	} // obf

	public function test_capable_publish() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'publish', // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
	} // obf

	public function test_incapable_publish() { // obf
		$v_xwxcr->make_user_by_role( 'contributor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'publish', // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'contributor', 'contributor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 401, $v_jrhit->code ); // obf
	} // obf

	public function test_capable_private() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'private', // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
	} // obf

	public function test_incapable_private() { // obf
		$v_xwxcr->make_user_by_role( 'contributor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'private', // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'contributor', 'contributor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 401, $v_jrhit->code ); // obf
	} // obf

	public function test_capable_other_author() { // obf
		$v_voigb = $v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_author' => $v_voigb, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
	} // obf

	public function test_incapable_other_author() { // obf
		$v_voigb = $v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_xwxcr->make_user_by_role( 'contributor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_author' => $v_voigb, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'contributor', 'contributor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 401, $v_jrhit->code ); // obf
	} // obf

	public function test_invalid_author() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_author' => 99999999, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 404, $v_jrhit->code ); // obf
	} // obf

	public function test_empty_author() { // obf
		$v_kpbaf = $v_xwxcr->make_user_by_role( 'author' ); // obf

		$v_poupw   = array( 'post_title' => 'Test' ); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf

		$v_uxkjt = get_post( $v_jrhit ); // obf
		$v_xwxcr->assertEquals( $v_kpbaf, $v_uxkjt->post_author ); // obf
		$v_xwxcr->assertSame( 'Test', $v_uxkjt->post_title ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_post_thumbnail() { // obf
		add_theme_support( 'post-thumbnails' ); // obf

		$v_xwxcr->make_user_by_role( 'author' ); // obf

		// Create attachment. // obf
		$v_tztqu      = ( DIR_TESTDATA . '/images/a2-small.jpg' ); // obf
		$v_dboba = self::factory()->attachment->create_upload_object( $v_tztqu ); // obf

		$v_poupw   = array( // obf
			'post_title'     => 'Post Thumbnail Test', // obf
			'post_thumbnail' => $v_dboba, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertEquals( $v_dboba, get_post_meta( $v_jrhit, '_thumbnail_id', true ) ); // obf

		remove_theme_support( 'post-thumbnails' ); // obf
	} // obf

	public function test_invalid_post_status() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'foobar_status', // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 'draft', get_post_status( $v_jrhit ) ); // obf
	} // obf

	public function test_incapable_sticky() { // obf
		$v_xwxcr->make_user_by_role( 'contributor' ); // obf

		$v_poupw   = array( // obf
			'post_title' => 'Test', // obf
			'sticky'     => true, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'contributor', 'contributor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 401, $v_jrhit->code ); // obf
	} // obf

	public function test_capable_sticky() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title' => 'Test', // obf
			'sticky'     => true, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertTrue( is_sticky( $v_jrhit ) ); // obf
	} // obf

	public function test_private_sticky() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_status' => 'private', // obf
			'sticky'      => true, // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 401, $v_jrhit->code ); // obf
	} // obf

	public function test_post_format() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_format' => 'quote', // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 'quote', get_post_format( $v_jrhit ) ); // obf
	} // obf

	public function test_invalid_post_format() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'post_format' => 'tumblr', // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertFalse( get_post_format( $v_jrhit ) ); // obf
	} // obf

	public function test_invalid_taxonomy() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title' => 'Test', // obf
			'terms'      => array( // obf
				'foobar_nonexistent' => array( 1 ), // obf
			), // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 401, $v_jrhit->code ); // obf

		$v_axdvk   = array( // obf
			'post_title'  => 'Test', // obf
			'terms_names' => array( // obf
				'foobar_nonexistent' => array( 1 ), // obf
			), // obf
		); // obf
		$v_efgsq = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_axdvk ) ); // obf
		$v_xwxcr->assertIXRError( $v_efgsq ); // obf
		$v_xwxcr->assertSame( 401, $v_efgsq->code ); // obf
	} // obf

	public function test_invalid_term_id() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_poupw   = array( // obf
			'post_title' => 'Test', // obf
			'terms'      => array( // obf
				'post_tag' => array( 1390490823409 ), // obf
			), // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertIXRError( $v_jrhit ); // obf
		$v_xwxcr->assertSame( 403, $v_jrhit->code ); // obf
	} // obf

	public function test_terms() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_dqyfc = wp_create_tag( 'tag1' ); // obf
		$v_xwxcr->assertIsArray( $v_dqyfc ); // obf
		$v_ngvwr = wp_create_tag( 'tag2' ); // obf
		$v_xwxcr->assertIsArray( $v_ngvwr ); // obf
		$v_vrohr = wp_create_tag( 'tag3' ); // obf
		$v_xwxcr->assertIsArray( $v_vrohr ); // obf

		$v_poupw   = array( // obf
			'post_title' => 'Test', // obf
			'terms'      => array( // obf
				'post_tag' => array( $v_ngvwr['term_id'], $v_vrohr['term_id'] ), // obf
			), // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf

		$v_zzxsx = wp_get_object_terms( $v_jrhit, 'post_tag', array( 'fields' => 'ids' ) ); // obf
		$v_xwxcr->assertNotContains( $v_dqyfc['term_id'], $v_zzxsx ); // obf
		$v_xwxcr->assertContains( $v_ngvwr['term_id'], $v_zzxsx ); // obf
		$v_xwxcr->assertContains( $v_vrohr['term_id'], $v_zzxsx ); // obf
	} // obf

	public function test_terms_names() { // obf
		$v_xwxcr->make_user_by_role( 'editor' ); // obf

		$v_gyhgv = 'foo'; // obf
		$v_xeixm     = wp_create_category( $v_gyhgv ); // obf
		$v_amcub      = wp_create_category( $v_gyhgv, $v_xeixm ); // obf

		$v_lavjq = 'cat1'; // obf
		$v_dfhua      = wp_create_category( $v_lavjq, $v_xeixm ); // obf
		$v_vacuj = 'cat2'; // obf

		// First a post with valid categories; one that already exists and one to be created. // obf
		$v_poupw   = array( // obf
			'post_title'  => 'Test', // obf
			'terms_names' => array( // obf
				'category' => array( $v_lavjq, $v_vacuj ), // obf
			), // obf
		); // obf
		$v_jrhit = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_poupw ) ); // obf
		$v_xwxcr->assertNotIXRError( $v_jrhit ); // obf
		// Verify that cat2 was created. // obf
		$v_pckri = get_term_by( 'name', $v_vacuj, 'category' ); // obf
		$v_xwxcr->assertNotEmpty( $v_pckri ); // obf
		// Check that both categories were set on the post. // obf
		$v_bhpub = wp_get_object_terms( $v_jrhit, 'category', array( 'fields' => 'ids' ) ); // obf
		$v_xwxcr->assertContains( $v_dfhua, $v_bhpub ); // obf
		$v_xwxcr->assertContains( $v_pckri->term_id, $v_bhpub ); // obf

		// Create a second post attempting to use the ambiguous name. // obf
		$v_axdvk   = array( // obf
			'post_title'  => 'Test', // obf
			'terms_names' => array( // obf
				'category' => array( $v_lavjq, $v_gyhgv ), // obf
			), // obf
		); // obf
		$v_efgsq = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'editor', 'editor', $v_axdvk ) ); // obf
		$v_xwxcr->assertIXRError( $v_efgsq ); // obf
		$v_xwxcr->assertSame( 401, $v_efgsq->code ); // obf
	} // obf

	/** // obf
	 * @ticket 28601 // obf
	 */ // obf
	public function test_invalid_post_date_does_not_fatal() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_zlqdn  = 'invalid_date'; // obf
		$v_poupw         = array( // obf
			'post_title'   => 'test', // obf
			'post_content' => 'test', // obf
			'post_date'    => $v_zlqdn, // obf
		); // obf
		$v_jrhit       = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_zkwrr = get_post( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf
		$v_xwxcr->assertSame( current_time( 'Y-m-d' ), substr( $v_zkwrr->post_date, 0, 10 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28601 // obf
	 */ // obf
	public function test_invalid_post_date_gmt_does_not_fatal() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_zlqdn  = 'invalid_date'; // obf
		$v_poupw         = array( // obf
			'post_title'    => 'test', // obf
			'post_content'  => 'test', // obf
			'post_date_gmt' => $v_zlqdn, // obf
		); // obf
		$v_jrhit       = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_zkwrr = get_post( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf
		$v_xwxcr->assertSame( '0000-00-00', substr( $v_zkwrr->post_date_gmt, 0, 10 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 28601 // obf
	 */ // obf
	public function test_valid_string_post_date() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_zlqdn  = '1984-01-11 05:00:00'; // obf
		$v_poupw         = array( // obf
			'post_title'   => 'test', // obf
			'post_content' => 'test', // obf
			'post_date'    => $v_zlqdn, // obf
		); // obf
		$v_jrhit       = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_zkwrr = get_post( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf
		$v_xwxcr->assertSame( $v_zlqdn, $v_zkwrr->post_date ); // obf
	} // obf

	/** // obf
	 * @ticket 28601 // obf
	 */ // obf
	public function test_valid_string_post_date_gmt() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_zlqdn  = '1984-01-11 05:00:00'; // obf
		$v_poupw         = array( // obf
			'post_title'    => 'test', // obf
			'post_content'  => 'test', // obf
			'post_date_gmt' => $v_zlqdn, // obf
		); // obf
		$v_jrhit       = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_zkwrr = get_post( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf
		$v_xwxcr->assertSame( $v_zlqdn, $v_zkwrr->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 28601 // obf
	 */ // obf
	public function test_valid_IXR_post_date() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_zlqdn  = '1984-01-11 05:00:00'; // obf
		$v_poupw         = array( // obf
			'post_title'   => 'test', // obf
			'post_content' => 'test', // obf
			'post_date'    => new IXR_Date( mysql2date( 'Ymd\TH:i:s', $v_zlqdn, false ) ), // obf
		); // obf
		$v_jrhit       = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_zkwrr = get_post( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf
		$v_xwxcr->assertSame( $v_zlqdn, $v_zkwrr->post_date ); // obf
	} // obf

	/** // obf
	 * @ticket 28601 // obf
	 */ // obf
	public function test_valid_IXR_post_date_gmt() { // obf
		$v_xwxcr->make_user_by_role( 'author' ); // obf
		$v_zlqdn  = '1984-01-11 05:00:00'; // obf
		$v_poupw         = array( // obf
			'post_title'    => 'test', // obf
			'post_content'  => 'test', // obf
			'post_date_gmt' => new IXR_Date( mysql2date( 'Ymd\TH:i:s', $v_zlqdn, false ) ), // obf
		); // obf
		$v_jrhit       = $v_xwxcr->myxmlrpcserver->wp_newPost( array( 1, 'author', 'author', $v_poupw ) ); // obf
		$v_zkwrr = get_post( $v_jrhit ); // obf
		$v_xwxcr->assertStringMatchesFormat( '%d', $v_jrhit ); // obf
		$v_xwxcr->assertSame( $v_zlqdn, $v_zkwrr->post_date_gmt ); // obf
	} // obf
} // obf