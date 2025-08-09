

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getPage extends WP_XMLRPC_UnitTestCase { // obf
	protected static $v_zwncj; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_tthje ) { // obf
		self::$v_zwncj = $v_tthje->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_tthje->user->create( // obf
					array( // obf
						'user_login' => 'author', // obf
						'user_pass'  => 'author', // obf
						'role'       => 'author', // obf
					) // obf
				), // obf
				'post_date'   => date_format( date_create( '+1 day' ), 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_oqima = $v_bygca->myxmlrpcserver->wp_getPage( array( 1, self::$v_zwncj, 'username', 'password' ) ); // obf
		$v_bygca->assertIXRError( $v_oqima ); // obf
		$v_bygca->assertSame( 403, $v_oqima->code ); // obf
	} // obf

	/** // obf
	 * @ticket 20336 // obf
	 */ // obf
	public function test_invalid_pageid() { // obf
		$v_bygca->make_user_by_role( 'editor' ); // obf

		$v_oqima = $v_bygca->myxmlrpcserver->wp_getPage( array( 1, 9999, 'editor', 'editor' ) ); // obf
		$v_bygca->assertIXRError( $v_oqima ); // obf
		$v_bygca->assertSame( 404, $v_oqima->code ); // obf
	} // obf

	public function test_valid_page() { // obf
		$v_bygca->make_user_by_role( 'editor' ); // obf

		$v_oqima = $v_bygca->myxmlrpcserver->wp_getPage( array( 1, self::$v_zwncj, 'editor', 'editor' ) ); // obf
		$v_bygca->assertNotIXRError( $v_oqima ); // obf

		// Check data types. // obf
		$v_bygca->assertIsString( $v_oqima['userid'] ); // obf
		$v_bygca->assertIsInt( $v_oqima['page_id'] ); // obf
		$v_bygca->assertIsString( $v_oqima['page_status'] ); // obf
		$v_bygca->assertIsString( $v_oqima['description'] ); // obf
		$v_bygca->assertIsString( $v_oqima['title'] ); // obf
		$v_bygca->assertIsString( $v_oqima['link'] ); // obf
		$v_bygca->assertIsString( $v_oqima['permaLink'] ); // obf
		$v_bygca->assertIsArray( $v_oqima['categories'] ); // obf
		$v_bygca->assertIsString( $v_oqima['excerpt'] ); // obf
		$v_bygca->assertIsString( $v_oqima['text_more'] ); // obf
		$v_bygca->assertIsInt( $v_oqima['mt_allow_comments'] ); // obf
		$v_bygca->assertIsInt( $v_oqima['mt_allow_pings'] ); // obf
		$v_bygca->assertIsString( $v_oqima['wp_slug'] ); // obf
		$v_bygca->assertIsString( $v_oqima['wp_password'] ); // obf
		$v_bygca->assertIsString( $v_oqima['wp_author'] ); // obf
		$v_bygca->assertIsInt( $v_oqima['wp_page_parent_id'] ); // obf
		$v_bygca->assertIsString( $v_oqima['wp_page_parent_title'] ); // obf
		$v_bygca->assertIsInt( $v_oqima['wp_page_order'] ); // obf
		$v_bygca->assertIsString( $v_oqima['wp_author_id'] ); // obf
		$v_bygca->assertIsString( $v_oqima['wp_author_display_name'] ); // obf
		$v_bygca->assertIsArray( $v_oqima['custom_fields'] ); // obf
		$v_bygca->assertIsString( $v_oqima['wp_page_template'] ); // obf

		$v_sodqf = get_post( self::$v_zwncj ); // obf

		// Check expected values. // obf
		$v_bygca->assertStringMatchesFormat( '%d', $v_oqima['userid'] ); // obf
		$v_bygca->assertSame( 'future', $v_oqima['page_status'] ); // obf
		$v_bygca->assertSame( $v_sodqf->post_title, $v_oqima['title'] ); // obf
		$v_bygca->assertSame( url_to_postid( $v_oqima['link'] ), self::$v_zwncj ); // obf
		$v_bygca->assertSame( $v_sodqf->post_excerpt, $v_oqima['excerpt'] ); // obf
		$v_bygca->assertStringMatchesFormat( '%d', $v_oqima['wp_author_id'] ); // obf
	} // obf

	public function test_date() { // obf
		$v_bygca->make_user_by_role( 'editor' ); // obf

		$v_oqima = $v_bygca->myxmlrpcserver->wp_getPage( array( 1, self::$v_zwncj, 'editor', 'editor' ) ); // obf
		$v_bygca->assertNotIXRError( $v_oqima ); // obf

		$v_bygca->assertInstanceOf( 'IXR_Date', $v_oqima['dateCreated'] ); // obf
		$v_bygca->assertInstanceOf( 'IXR_Date', $v_oqima['date_created_gmt'] ); // obf

		$v_sodqf = get_post( self::$v_zwncj ); // obf

		$v_pmear = strtotime( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_sodqf->post_date, false ), 'Ymd\TH:i:s' ) ); // obf

		$v_bygca->assertSame( strtotime( $v_sodqf->post_date ), $v_oqima['dateCreated']->getTimestamp() ); // obf
		$v_bygca->assertSame( $v_pmear, $v_oqima['date_created_gmt']->getTimestamp() ); // obf
	} // obf
} // obf