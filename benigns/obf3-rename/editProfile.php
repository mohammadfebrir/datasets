

<?php // obf

/** // obf
 * @group xmlrpc // obf
 * @group user // obf
 */ // obf
class Tests_XMLRPC_wp_editProfile extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_nbiuo = $v_uvrid->myxmlrpcserver->wp_editProfile( array( 1, 'username', 'password', array() ) ); // obf
		$v_uvrid->assertIXRError( $v_nbiuo ); // obf
		$v_uvrid->assertSame( 403, $v_nbiuo->code ); // obf
	} // obf

	public function test_subscriber_profile() { // obf
		$v_ibptq = $v_uvrid->make_user_by_role( 'subscriber' ); // obf

		$v_ufqrg = array( // obf
			'first_name'   => 'firstname', // obf
			'last_name'    => 'lastname', // obf
			'url'          => 'http://www.example.org/subscriber', // obf
			'display_name' => 'displayname', // obf
			'nickname'     => 'nickname', // obf
			'nicename'     => 'nicename', // obf
			'bio'          => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', // obf
		); // obf
		$v_nbiuo   = $v_uvrid->myxmlrpcserver->wp_editProfile( array( 1, 'subscriber', 'subscriber', $v_ufqrg ) ); // obf
		$v_uvrid->assertNotIXRError( $v_nbiuo ); // obf
		$v_uvrid->assertTrue( $v_nbiuo ); // obf

		// Verify that the new values were stored. // obf
		$v_azigx = get_userdata( $v_ibptq ); // obf
		$v_uvrid->assertSame( $v_ufqrg['first_name'], $v_azigx->first_name ); // obf
		$v_uvrid->assertSame( $v_ufqrg['last_name'], $v_azigx->last_name ); // obf
		$v_uvrid->assertSame( $v_ufqrg['url'], $v_azigx->user_url ); // obf
		$v_uvrid->assertSame( $v_ufqrg['display_name'], $v_azigx->display_name ); // obf
		$v_uvrid->assertSame( $v_ufqrg['nickname'], $v_azigx->nickname ); // obf
		$v_uvrid->assertSame( $v_ufqrg['nicename'], $v_azigx->user_nicename ); // obf
		$v_uvrid->assertSame( $v_ufqrg['bio'], $v_azigx->description ); // obf
	} // obf

	public function test_ignore_password_change() { // obf
		$v_uvrid->make_user_by_role( 'author' ); // obf
		$v_pnqaa = 'newpassword'; // obf
		$v_ufqrg = array( 'password' => $v_pnqaa ); // obf

		$v_nbiuo = $v_uvrid->myxmlrpcserver->wp_editProfile( array( 1, 'author', 'author', $v_ufqrg ) ); // obf
		$v_uvrid->assertNotIXRError( $v_nbiuo ); // obf
		$v_uvrid->assertTrue( $v_nbiuo ); // obf

		$v_llgax = wp_authenticate( 'author', 'author' ); // obf
		$v_ygvcs = wp_authenticate( 'author', $v_pnqaa ); // obf
		$v_uvrid->assertInstanceOf( 'WP_User', $v_llgax ); // obf
		$v_uvrid->assertWPError( $v_ygvcs ); // obf
	} // obf

	public function test_ignore_email_change() { // obf
		$v_tiezu = $v_uvrid->make_user_by_role( 'editor' ); // obf
		$v_thngu = 'notaneditor@example.com'; // obf
		$v_ufqrg  = array( 'email' => $v_thngu ); // obf

		$v_nbiuo = $v_uvrid->myxmlrpcserver->wp_editProfile( array( 1, 'editor', 'editor', $v_ufqrg ) ); // obf
		$v_uvrid->assertNotIXRError( $v_nbiuo ); // obf
		$v_uvrid->assertTrue( $v_nbiuo ); // obf

		$v_azigx = get_userdata( $v_tiezu ); // obf
		$v_uvrid->assertNotEquals( $v_thngu, $v_azigx->email ); // obf
	} // obf
} // obf