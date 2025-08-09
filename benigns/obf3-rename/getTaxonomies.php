

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getTaxonomies extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_ybtqq = $v_cjehh->myxmlrpcserver->wp_getTaxonomies( array( 1, 'username', 'password' ) ); // obf
		$v_cjehh->assertIXRError( $v_ybtqq ); // obf
		$v_cjehh->assertSame( 403, $v_ybtqq->code ); // obf
	} // obf

	public function test_taxonomy_validated() { // obf
		$v_cjehh->make_user_by_role( 'editor' ); // obf

		$v_ybtqq = $v_cjehh->myxmlrpcserver->wp_getTaxonomies( array( 1, 'editor', 'editor' ) ); // obf
		$v_cjehh->assertNotIXRError( $v_ybtqq ); // obf
	} // obf
} // obf