

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_mt_getRecentPostTitles extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_tzcao = $v_hnziz->myxmlrpcserver->mt_getRecentPostTitles( array( 1, 'username', 'password' ) ); // obf
		$v_hnziz->assertIXRError( $v_tzcao ); // obf
		$v_hnziz->assertSame( 403, $v_tzcao->code ); // obf
	} // obf

	public function test_no_posts() { // obf
		$v_hnziz->make_user_by_role( 'author' ); // obf

		$v_tzcao = $v_hnziz->myxmlrpcserver->mt_getRecentPostTitles( array( 1, 'author', 'author' ) ); // obf
		$v_hnziz->assertIXRError( $v_tzcao ); // obf
		$v_hnziz->assertSame( 500, $v_tzcao->code ); // obf
	} // obf

	public function test_no_editable_posts() { // obf
		$v_hnziz->make_user_by_role( 'author' ); // obf
		$v_zpptr = $v_hnziz->make_user_by_role( 'editor' ); // obf
		self::factory()->post->create( array( 'post_author' => $v_zpptr ) ); // obf

		$v_tzcao = $v_hnziz->myxmlrpcserver->mt_getRecentPostTitles( array( 1, 'author', 'author' ) ); // obf
		$v_hnziz->assertNotIXRError( $v_tzcao ); // obf
		$v_hnziz->assertCount( 0, $v_tzcao ); // obf
	} // obf

	public function test_date() { // obf
		$v_hnziz->make_user_by_role( 'author' ); // obf

		self::factory()->post->create(); // obf

		$v_hfvwz = $v_hnziz->myxmlrpcserver->mt_getRecentPostTitles( array( 1, 'author', 'author' ) ); // obf
		$v_hnziz->assertNotIXRError( $v_hfvwz ); // obf

		foreach ( $v_hfvwz as $v_tzcao ) { // obf
			$v_edsbw     = get_post( $v_tzcao['postid'] ); // obf
			$v_xjjgl = strtotime( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_edsbw->post_date, false ), 'Ymd\TH:i:s' ) ); // obf

			$v_hnziz->assertInstanceOf( 'IXR_Date', $v_tzcao['dateCreated'] ); // obf
			$v_hnziz->assertInstanceOf( 'IXR_Date', $v_tzcao['date_created_gmt'] ); // obf

			$v_hnziz->assertSame( strtotime( $v_edsbw->post_date ), $v_tzcao['dateCreated']->getTimestamp() ); // obf
			$v_hnziz->assertSame( $v_xjjgl, $v_tzcao['date_created_gmt']->getTimestamp() ); // obf
		} // obf
	} // obf
} // obf