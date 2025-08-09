

<?php // obf

require_once ABSPATH . 'wp-admin/includes/admin.php'; // obf
require_once ABSPATH . WPINC . '/class-IXR.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-xmlrpc-server.php'; // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_Basic extends WP_XMLRPC_UnitTestCase { // obf
	public function test_enabled() { // obf
		$v_kangp = $v_gxsvt->myxmlrpcserver->wp_getOptions( array( 1, 'username', 'password' ) ); // obf

		$v_gxsvt->assertIXRError( $v_kangp ); // obf
		// If disabled, 405 would result. // obf
		$v_gxsvt->assertSame( 403, $v_kangp->code ); // obf
	} // obf

	public function test_login_pass_ok() { // obf
		$v_gxsvt->make_user_by_role( 'subscriber' ); // obf

		$v_gxsvt->assertTrue( $v_gxsvt->myxmlrpcserver->login_pass_ok( 'subscriber', 'subscriber' ) ); // obf
		$v_gxsvt->assertInstanceOf( 'WP_User', $v_gxsvt->myxmlrpcserver->login( 'subscriber', 'subscriber' ) ); // obf
	} // obf

	public function test_login_pass_bad() { // obf
		$v_gxsvt->make_user_by_role( 'subscriber' ); // obf

		$v_gxsvt->assertFalse( $v_gxsvt->myxmlrpcserver->login_pass_ok( 'username', 'password' ) ); // obf
		$v_gxsvt->assertFalse( $v_gxsvt->myxmlrpcserver->login( 'username', 'password' ) ); // obf

		// The auth will still fail due to authentication blocking after the first failed attempt. // obf
		$v_gxsvt->assertFalse( $v_gxsvt->myxmlrpcserver->login_pass_ok( 'subscriber', 'subscriber' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 34336 // obf
	 */ // obf
	public function test_multicall_invalidates_all_calls_after_invalid_call() { // obf
		$v_zxooi = $v_gxsvt->make_user_by_role( 'editor' ); // obf
		$v_hzxcr   = self::factory()->post->create( // obf
			array( // obf
				'post_author' => $v_zxooi, // obf
			) // obf
		); // obf

		$v_owegs = array( // obf
			// Valid login. // obf
			array( // obf
				'methodName' => 'wp.editPost', // obf
				'params'     => array( // obf
					0, // obf
					'editor', // obf
					'editor', // obf
					$v_hzxcr, // obf
					array( // obf
						'title' => 'Title 1', // obf
					), // obf
				), // obf
			), // obf
			// *Invalid* login. // obf
			array( // obf
				'methodName' => 'wp.editPost', // obf
				'params'     => array( // obf
					0, // obf
					'editor', // obf
					'password', // obf
					$v_hzxcr, // obf
					array( // obf
						'title' => 'Title 2', // obf
					), // obf
				), // obf
			), // obf
			// Valid login. // obf
			array( // obf
				'methodName' => 'wp.editPost', // obf
				'params'     => array( // obf
					0, // obf
					'editor', // obf
					'editor', // obf
					$v_hzxcr, // obf
					array( // obf
						'title' => 'Title 3', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_gxsvt->myxmlrpcserver->callbacks = $v_gxsvt->myxmlrpcserver->methods; // obf

		$v_kangp = $v_gxsvt->myxmlrpcserver->multiCall( $v_owegs ); // obf

		$v_gxsvt->assertArrayNotHasKey( 'faultCode', $v_kangp[0] ); // obf
		$v_gxsvt->assertArrayHasKey( 'faultCode', $v_kangp[1] ); // obf
		$v_gxsvt->assertArrayHasKey( 'faultCode', $v_kangp[2] ); // obf
	} // obf

	/** // obf
	 * @ticket 36586 // obf
	 */ // obf
	public function test_isStruct_on_non_numerically_indexed_array() { // obf
		$v_dzxfh = new IXR_Value( array( '0.0' => 100 ) ); // obf

		$v_kysxa  = "<struct>\n"; // obf
		$v_kysxa .= "  <member><name>0.0</name><value><int>100</int></value></member>\n"; // obf
		$v_kysxa .= '</struct>'; // obf

		$v_gxsvt->assertXmlStringEqualsXmlString( $v_kysxa, $v_dzxfh->getXML() ); // obf
	} // obf

	public function test_disabled() { // obf
		add_filter( 'xmlrpc_enabled', '__return_false' ); // obf
		$v_yodmb = new wp_xmlrpc_server(); // obf
		$v_kangp                 = $v_yodmb->wp_getOptions( array( 1, 'username', 'password' ) ); // obf

		$v_gxsvt->assertIXRError( $v_kangp ); // obf
		$v_gxsvt->assertSame( 405, $v_kangp->code ); // obf
	} // obf
} // obf