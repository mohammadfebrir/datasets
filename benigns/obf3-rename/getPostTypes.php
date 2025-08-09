

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getPostTypes extends WP_XMLRPC_UnitTestCase { // obf
	public function test_invalid_username_password() { // obf
		$v_eocey = $v_bjpjx->myxmlrpcserver->wp_getPostTypes( array( 1, 'username', 'password', 'post' ) ); // obf
		$v_bjpjx->assertIXRError( $v_eocey ); // obf
		$v_bjpjx->assertSame( 403, $v_eocey->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_bjpjx->make_user_by_role( 'subscriber' ); // obf

		$v_eocey = $v_bjpjx->myxmlrpcserver->wp_getPostTypes( array( 1, 'subscriber', 'subscriber' ) ); // obf
		$v_bjpjx->assertNotIXRError( $v_eocey ); // obf
		$v_bjpjx->assertIsArray( $v_eocey ); // obf
		$v_bjpjx->assertCount( 0, $v_eocey ); // obf
	} // obf

	public function test_capable_user() { // obf
		$v_bjpjx->make_user_by_role( 'editor' ); // obf

		$v_eocey = $v_bjpjx->myxmlrpcserver->wp_getPostTypes( array( 1, 'editor', 'editor' ) ); // obf
		$v_bjpjx->assertNotIXRError( $v_eocey ); // obf
		$v_bjpjx->assertIsArray( $v_eocey ); // obf
		$v_bjpjx->assertGreaterThan( 0, count( $v_eocey ) ); // obf
	} // obf

	public function test_simple_filter() { // obf
		$v_bjpjx->make_user_by_role( 'editor' ); // obf

		$v_eocey = $v_bjpjx->myxmlrpcserver->wp_getPostTypes( array( 1, 'editor', 'editor', array( 'hierarchical' => true ) ) ); // obf
		$v_bjpjx->assertNotIXRError( $v_eocey ); // obf
		$v_bjpjx->assertIsArray( $v_eocey ); // obf

		// Verify that page is in the result, and post is not. // obf
		$v_ygqmj = wp_list_pluck( $v_eocey, 'name' ); // obf
		$v_bjpjx->assertContains( 'page', $v_ygqmj ); // obf
		$v_bjpjx->assertNotContains( 'post', $v_ygqmj ); // obf
	} // obf
} // obf