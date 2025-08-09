

<?php // obf

/** // obf
 * @group xmlrpc // obf
 * @group user // obf
 */ // obf
class Tests_XMLRPC_wp_getUser extends WP_XMLRPC_UnitTestCase { // obf
	protected $v_jbfwt; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		// Create a super admin. // obf
		$v_yoknl->administrator_id = $v_yoknl->make_user_by_role( 'administrator' ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( $v_yoknl->administrator_id ); // obf
		} // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'username', 'password', 1 ) ); // obf
		$v_yoknl->assertIXRError( $v_mrray ); // obf
		$v_yoknl->assertSame( 403, $v_mrray->code ); // obf
	} // obf

	public function test_invalid_user() { // obf
		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'administrator', 'administrator', 34902348908234 ) ); // obf
		$v_yoknl->assertIXRError( $v_mrray ); // obf
		$v_yoknl->assertSame( 404, $v_mrray->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_yoknl->make_user_by_role( 'subscriber' ); // obf
		$v_pqzud = $v_yoknl->make_user_by_role( 'editor' ); // obf

		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'subscriber', 'subscriber', $v_pqzud ) ); // obf
		$v_yoknl->assertIXRError( $v_mrray ); // obf
		$v_yoknl->assertSame( 401, $v_mrray->code ); // obf
	} // obf

	public function test_subscriber_self() { // obf
		$v_crtpv = $v_yoknl->make_user_by_role( 'subscriber' ); // obf

		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'subscriber', 'subscriber', $v_crtpv ) ); // obf
		$v_yoknl->assertNotIXRError( $v_mrray ); // obf
		$v_yoknl->assertEquals( $v_crtpv, $v_mrray['user_id'] ); // obf
	} // obf

	public function test_valid_user() { // obf
		$v_mzxvu = strtotime( '-1 day' ); // obf
		$v_ywgfw       = array( // obf
			'user_login'      => 'getusertestuser', // obf
			'user_pass'       => 'password', // obf
			'first_name'      => 'First', // obf
			'last_name'       => 'Last', // obf
			'description'     => 'I love WordPress', // obf
			'user_email'      => 'getUserTestUser@example.com', // obf
			'nickname'        => 'nickname', // obf
			'user_nicename'   => 'nicename', // obf
			'display_name'    => 'First Last', // obf
			'user_url'        => 'http://www.example.com/testuser', // obf
			'role'            => 'author', // obf
			'aim'             => 'wordpress', // obf
			'user_registered' => date_format( date_create( "@{$v_mzxvu}" ), 'Y-m-d H:i:s' ), // obf
		); // obf
		$v_vkizn         = wp_insert_user( $v_ywgfw ); // obf

		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'administrator', 'administrator', $v_vkizn ) ); // obf
		$v_yoknl->assertNotIXRError( $v_mrray ); // obf

		// Check data types. // obf
		$v_yoknl->assertIsString( $v_mrray['user_id'] ); // obf
		$v_yoknl->assertStringMatchesFormat( '%d', $v_mrray['user_id'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['username'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['first_name'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['last_name'] ); // obf
		$v_yoknl->assertInstanceOf( 'IXR_Date', $v_mrray['registered'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['bio'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['email'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['nickname'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['nicename'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['url'] ); // obf
		$v_yoknl->assertIsString( $v_mrray['display_name'] ); // obf
		$v_yoknl->assertIsArray( $v_mrray['roles'] ); // obf

		// Check expected values. // obf
		$v_yoknl->assertEquals( $v_vkizn, $v_mrray['user_id'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['user_login'], $v_mrray['username'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['first_name'], $v_mrray['first_name'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['last_name'], $v_mrray['last_name'] ); // obf
		$v_yoknl->assertSame( $v_mzxvu, $v_mrray['registered']->getTimestamp() ); // obf
		$v_yoknl->assertSame( $v_ywgfw['description'], $v_mrray['bio'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['user_email'], $v_mrray['email'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['nickname'], $v_mrray['nickname'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['user_nicename'], $v_mrray['nicename'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['user_url'], $v_mrray['url'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['display_name'], $v_mrray['display_name'] ); // obf
		$v_yoknl->assertSame( $v_ywgfw['user_login'], $v_mrray['username'] ); // obf
		$v_yoknl->assertContains( $v_ywgfw['role'], $v_mrray['roles'] ); // obf

		self::delete_user( $v_vkizn ); // obf
	} // obf

	public function test_no_fields() { // obf
		$v_pqzud = $v_yoknl->make_user_by_role( 'editor' ); // obf

		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'administrator', 'administrator', $v_pqzud, array() ) ); // obf
		$v_yoknl->assertNotIXRError( $v_mrray ); // obf
		$v_yoknl->assertEquals( $v_pqzud, $v_mrray['user_id'] ); // obf

		$v_uidmd = array( 'user_id' ); // obf
		$v_yoknl->assertSame( $v_uidmd, array_keys( $v_mrray ) ); // obf
	} // obf

	public function test_basic_fields() { // obf
		$v_pqzud = $v_yoknl->make_user_by_role( 'editor' ); // obf

		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'administrator', 'administrator', $v_pqzud, array( 'basic' ) ) ); // obf
		$v_yoknl->assertNotIXRError( $v_mrray ); // obf
		$v_yoknl->assertEquals( $v_pqzud, $v_mrray['user_id'] ); // obf

		$v_uidmd = array( 'user_id', 'username', 'email', 'registered', 'display_name', 'nicename' ); // obf
		$v_gvcou            = array_keys( $v_mrray ); // obf
		sort( $v_uidmd ); // obf
		sort( $v_gvcou ); // obf
		$v_yoknl->assertSameSets( $v_uidmd, $v_gvcou ); // obf
	} // obf

	public function test_arbitrary_fields() { // obf
		$v_pqzud = $v_yoknl->make_user_by_role( 'editor' ); // obf

		$v_srfto = array( 'email', 'bio', 'user_contacts' ); // obf

		$v_mrray = $v_yoknl->myxmlrpcserver->wp_getUser( array( 1, 'administrator', 'administrator', $v_pqzud, $v_srfto ) ); // obf
		$v_yoknl->assertNotIXRError( $v_mrray ); // obf
		$v_yoknl->assertEquals( $v_pqzud, $v_mrray['user_id'] ); // obf

		$v_uidmd = array( 'user_id', 'email', 'bio' ); // obf
		$v_gvcou            = array_keys( $v_mrray ); // obf
		sort( $v_uidmd ); // obf
		sort( $v_gvcou ); // obf
		$v_yoknl->assertSameSets( $v_uidmd, $v_gvcou ); // obf
	} // obf
} // obf