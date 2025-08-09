

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getPageList extends WP_XMLRPC_UnitTestCase { // obf
	protected static $v_ybsxa; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_mhloq ) { // obf
		self::$v_ybsxa = $v_mhloq->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_author' => $v_mhloq->user->create( // obf
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
		$v_myvtj = $v_jagwr->myxmlrpcserver->wp_getPageList( array( 1, 'username', 'password' ) ); // obf
		$v_jagwr->assertIXRError( $v_myvtj ); // obf
		$v_jagwr->assertSame( 403, $v_myvtj->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_jagwr->make_user_by_role( 'contributor' ); // obf

		$v_myvtj = $v_jagwr->myxmlrpcserver->wp_getPageList( array( 1, 'contributor', 'contributor' ) ); // obf
		$v_jagwr->assertIXRError( $v_myvtj ); // obf
		$v_jagwr->assertSame( 401, $v_myvtj->code ); // obf
	} // obf

	public function test_date() { // obf
		$v_jagwr->make_user_by_role( 'editor' ); // obf

		$v_ykmuw = $v_jagwr->myxmlrpcserver->wp_getPageList( array( 1, 'editor', 'editor' ) ); // obf
		$v_jagwr->assertNotIXRError( $v_ykmuw ); // obf
		$v_jagwr->assertNotEmpty( $v_ykmuw ); // obf

		foreach ( $v_ykmuw as $v_myvtj ) { // obf
			$v_vkymb     = get_post( $v_myvtj->page_id ); // obf
			$v_yslie = strtotime( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_vkymb->post_date, false ), 'Ymd\TH:i:s' ) ); // obf

			$v_jagwr->assertInstanceOf( 'IXR_Date', $v_myvtj->dateCreated ); // obf
			$v_jagwr->assertInstanceOf( 'IXR_Date', $v_myvtj->date_created_gmt ); // obf

			$v_jagwr->assertSame( strtotime( $v_vkymb->post_date ), $v_myvtj->dateCreated->getTimestamp() ); // obf
			$v_jagwr->assertSame( $v_yslie, $v_myvtj->date_created_gmt->getTimestamp() ); // obf
		} // obf
	} // obf
} // obf