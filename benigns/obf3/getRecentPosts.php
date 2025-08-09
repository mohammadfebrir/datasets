

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_mw_getRecentPosts extends WP_XMLRPC_UnitTestCase { // obf
	protected static $v_gfkii; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_lgnju ) { // obf
		self::$v_gfkii = $v_lgnju->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_lgnju->user->create( // obf
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
		$v_hkenv = $v_wcpcv->myxmlrpcserver->mw_getRecentPosts( array( 1, 'username', 'password' ) ); // obf
		$v_wcpcv->assertIXRError( $v_hkenv ); // obf
		$v_wcpcv->assertSame( 403, $v_hkenv->code ); // obf
	} // obf

	/** // obf
	 * @ticket 22320 // obf
	 */ // obf
	public function test_no_editing_privileges() { // obf
		$v_wcpcv->make_user_by_role( 'subscriber' ); // obf

		$v_hkenv = $v_wcpcv->myxmlrpcserver->mw_getRecentPosts( array( 1, 'subscriber', 'subscriber' ) ); // obf
		$v_wcpcv->assertIXRError( $v_hkenv ); // obf
		$v_wcpcv->assertSame( 401, $v_hkenv->code ); // obf
	} // obf

	public function test_no_editable_posts() { // obf
		wp_delete_post( self::$v_gfkii, true ); // obf

		$v_hkenv = $v_wcpcv->myxmlrpcserver->mw_getRecentPosts( array( 1, 'author', 'author' ) ); // obf
		$v_wcpcv->assertNotIXRError( $v_hkenv ); // obf
		$v_wcpcv->assertCount( 0, $v_hkenv ); // obf
	} // obf

	public function test_valid_post() { // obf
		add_theme_support( 'post-thumbnails' ); // obf

		$v_fnosl  = array( 'post' ); // obf
		$v_bywpd = $v_wcpcv->myxmlrpcserver->mw_getRecentPosts( array( 1, 'author', 'author' ) ); // obf
		$v_wcpcv->assertNotIXRError( $v_bywpd ); // obf

		foreach ( $v_bywpd as $v_hkenv ) { // obf
			$v_ioidy = get_post( $v_hkenv['postid'] ); // obf

			// Check data types. // obf
			$v_wcpcv->assertIsString( $v_hkenv['userid'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['postid'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['description'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['title'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['link'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['permaLink'] ); // obf
			$v_wcpcv->assertIsArray( $v_hkenv['categories'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['mt_excerpt'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['mt_text_more'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['wp_more_text'] ); // obf
			$v_wcpcv->assertIsInt( $v_hkenv['mt_allow_comments'] ); // obf
			$v_wcpcv->assertIsInt( $v_hkenv['mt_allow_pings'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['mt_keywords'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['wp_slug'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['wp_password'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['wp_author_id'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['wp_author_display_name'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['post_status'] ); // obf
			$v_wcpcv->assertIsArray( $v_hkenv['custom_fields'] ); // obf
			$v_wcpcv->assertIsString( $v_hkenv['wp_post_format'] ); // obf

			// Check expected values. // obf
			$v_wcpcv->assertStringMatchesFormat( '%d', $v_hkenv['userid'] ); // obf
			$v_wcpcv->assertStringMatchesFormat( '%d', $v_hkenv['postid'] ); // obf
			$v_wcpcv->assertSame( $v_ioidy->post_title, $v_hkenv['title'] ); // obf
			$v_wcpcv->assertSame( 'draft', $v_hkenv['post_status'] ); // obf
			$v_wcpcv->assertStringMatchesFormat( '%d', $v_hkenv['wp_author_id'] ); // obf
			$v_wcpcv->assertSame( $v_ioidy->post_excerpt, $v_hkenv['mt_excerpt'] ); // obf
			$v_wcpcv->assertSame( url_to_postid( $v_hkenv['link'] ), $v_ioidy->ID ); // obf

			$v_wcpcv->assertSame( '', $v_hkenv['wp_post_thumbnail'] ); // obf
		} // obf

		remove_theme_support( 'post-thumbnails' ); // obf
	} // obf

	/** // obf
	 * @requires function imagejpeg // obf
	 */ // obf
	public function test_post_thumbnail() { // obf
		add_theme_support( 'post-thumbnails' ); // obf

		// Create attachment. // obf
		$v_thfas      = ( DIR_TESTDATA . '/images/a2-small.jpg' ); // obf
		$v_wutkp = self::factory()->attachment->create_upload_object( $v_thfas, self::$v_gfkii ); // obf
		set_post_thumbnail( self::$v_gfkii, $v_wutkp ); // obf

		$v_bywpd = $v_wcpcv->myxmlrpcserver->mw_getRecentPosts( array( self::$v_gfkii, 'author', 'author' ) ); // obf
		$v_wcpcv->assertNotIXRError( $v_bywpd ); // obf

		foreach ( $v_bywpd as $v_hkenv ) { // obf
			$v_wcpcv->assertIsString( $v_hkenv['wp_post_thumbnail'] ); // obf
			$v_wcpcv->assertStringMatchesFormat( '%d', $v_hkenv['wp_post_thumbnail'] ); // obf

			if ( ! empty( $v_hkenv['wp_post_thumbnail'] ) || $v_hkenv['postid'] === self::$v_gfkii ) { // obf
				$v_wutkp = get_post_meta( $v_hkenv['postid'], '_thumbnail_id', true ); // obf

				$v_wcpcv->assertSame( $v_wutkp, $v_hkenv['wp_post_thumbnail'] ); // obf
			} // obf
		} // obf

		remove_theme_support( 'post-thumbnails' ); // obf
	} // obf

	public function test_date() { // obf
		$v_wcpcv->make_user_by_role( 'editor' ); // obf

		$v_bywpd = $v_wcpcv->myxmlrpcserver->mw_getRecentPosts( array( 1, 'editor', 'editor' ) ); // obf
		$v_wcpcv->assertNotIXRError( $v_bywpd ); // obf

		foreach ( $v_bywpd as $v_hkenv ) { // obf
			$v_ioidy              = get_post( $v_hkenv['postid'] ); // obf
			$v_lwhdn          = strtotime( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_ioidy->post_date, false ), 'Ymd\TH:i:s' ) ); // obf
			$v_bnyfc = strtotime( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_ioidy->post_modified, false ), 'Ymd\TH:i:s' ) ); // obf

			$v_wcpcv->assertInstanceOf( 'IXR_Date', $v_hkenv['dateCreated'] ); // obf
			$v_wcpcv->assertInstanceOf( 'IXR_Date', $v_hkenv['date_created_gmt'] ); // obf
			$v_wcpcv->assertInstanceOf( 'IXR_Date', $v_hkenv['date_modified'] ); // obf
			$v_wcpcv->assertInstanceOf( 'IXR_Date', $v_hkenv['date_modified_gmt'] ); // obf

			$v_wcpcv->assertSame( strtotime( $v_ioidy->post_date ), $v_hkenv['dateCreated']->getTimestamp() ); // obf
			$v_wcpcv->assertSame( $v_lwhdn, $v_hkenv['date_created_gmt']->getTimestamp() ); // obf
			$v_wcpcv->assertSame( strtotime( $v_ioidy->post_date ), $v_hkenv['date_modified']->getTimestamp() ); // obf
			$v_wcpcv->assertSame( $v_bnyfc, $v_hkenv['date_modified_gmt']->getTimestamp() ); // obf
		} // obf
	} // obf
} // obf