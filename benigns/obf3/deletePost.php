

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_deletePost extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_dnsto = $v_ssbuw->myxmlrpcserver->wp_deletePost( array( 1, 'username', 'password', 0 ) ); // obf
		$v_ssbuw->assertIXRError( $v_dnsto ); // obf
		$v_ssbuw->assertSame( 403, $v_dnsto->code ); // obf
	} // obf

	public function test_invalid_post() { // obf
		$v_ssbuw->make_user_by_role( 'editor' ); // obf

		$v_dnsto = $v_ssbuw->myxmlrpcserver->wp_deletePost( array( 1, 'editor', 'editor', 340982340 ) ); // obf
		$v_ssbuw->assertIXRError( $v_dnsto ); // obf
		$v_ssbuw->assertSame( 404, $v_dnsto->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_ssbuw->make_user_by_role( 'subscriber' ); // obf
		$v_ojdro = self::factory()->post->create(); // obf

		$v_dnsto = $v_ssbuw->myxmlrpcserver->wp_deletePost( array( 1, 'subscriber', 'subscriber', $v_ojdro ) ); // obf
		$v_ssbuw->assertIXRError( $v_dnsto ); // obf
		$v_ssbuw->assertSame( 401, $v_dnsto->code ); // obf
	} // obf

	public function test_post_deleted() { // obf
		$v_ssbuw->make_user_by_role( 'editor' ); // obf
		$v_ojdro = self::factory()->post->create(); // obf

		$v_dnsto = $v_ssbuw->myxmlrpcserver->wp_deletePost( array( 1, 'editor', 'editor', $v_ojdro ) ); // obf
		$v_ssbuw->assertNotIXRError( $v_dnsto ); // obf
		$v_ssbuw->assertTrue( $v_dnsto ); // obf

		$v_enhzr = get_post( $v_ojdro ); // obf
		$v_ssbuw->assertSame( 'trash', $v_enhzr->post_status ); // obf
	} // obf
} // obf