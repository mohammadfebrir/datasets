

<?php // obf

/** // obf
 * @group xmlrpc // obf
 * @group user // obf
 */ // obf
class Tests_XMLRPC_wp_getProfile extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_gxbtn = $v_xirlw->myxmlrpcserver->wp_getProfile( array( 1, 'username', 'password' ) ); // obf
		$v_xirlw->assertIXRError( $v_gxbtn ); // obf
		$v_xirlw->assertSame( 403, $v_gxbtn->code ); // obf
	} // obf

	public function test_subscriber() { // obf
		$v_tjmog = $v_xirlw->make_user_by_role( 'subscriber' ); // obf

		$v_gxbtn = $v_xirlw->myxmlrpcserver->wp_getProfile( array( 1, 'subscriber', 'subscriber' ) ); // obf
		$v_xirlw->assertNotIXRError( $v_gxbtn ); // obf
		$v_xirlw->assertEquals( $v_tjmog, $v_gxbtn['user_id'] ); // obf
		$v_xirlw->assertContains( 'subscriber', $v_gxbtn['roles'] ); // obf
	} // obf

	public function test_administrator() { // obf
		$v_khjzk = $v_xirlw->make_user_by_role( 'administrator' ); // obf

		$v_gxbtn = $v_xirlw->myxmlrpcserver->wp_getProfile( array( 1, 'administrator', 'administrator' ) ); // obf
		$v_xirlw->assertNotIXRError( $v_gxbtn ); // obf
		$v_xirlw->assertEquals( $v_khjzk, $v_gxbtn['user_id'] ); // obf
		$v_xirlw->assertContains( 'administrator', $v_gxbtn['roles'] ); // obf
	} // obf

	public function test_arbitrary_fields() { // obf
		$v_slnni = $v_xirlw->make_user_by_role( 'editor' ); // obf

		$v_xlvof = array( 'email', 'bio', 'user_contacts' ); // obf

		$v_gxbtn = $v_xirlw->myxmlrpcserver->wp_getProfile( array( 1, 'editor', 'editor', $v_xlvof ) ); // obf
		$v_xirlw->assertNotIXRError( $v_gxbtn ); // obf
		$v_xirlw->assertEquals( $v_slnni, $v_gxbtn['user_id'] ); // obf

		$v_cgtrz = array( 'user_id', 'email', 'bio' ); // obf
		$v_bpsxi            = array_keys( $v_gxbtn ); // obf
		sort( $v_cgtrz ); // obf
		sort( $v_bpsxi ); // obf
		$v_xirlw->assertSameSets( $v_cgtrz, $v_bpsxi ); // obf
	} // obf
} // obf