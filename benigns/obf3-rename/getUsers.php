

<?php // obf

/** // obf
 * @group xmlrpc // obf
 * @group user // obf
 */ // obf
class Tests_XMLRPC_wp_getUsers extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_rfzxj = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'username', 'password' ) ); // obf
		$v_oaoss->assertIXRError( $v_rfzxj ); // obf
		$v_oaoss->assertSame( 403, $v_rfzxj->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_oaoss->make_user_by_role( 'subscriber' ); // obf

		$v_rfzxj = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'subscriber', 'subscriber' ) ); // obf
		$v_oaoss->assertIXRError( $v_rfzxj ); // obf
		$v_oaoss->assertSame( 401, $v_rfzxj->code ); // obf
	} // obf

	public function test_capable_user() { // obf
		$v_oaoss->make_user_by_role( 'administrator' ); // obf

		$v_rzzrv = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'administrator', 'administrator' ) ); // obf
		$v_oaoss->assertNotIXRError( $v_rzzrv ); // obf

		// Check data types. // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['user_id'] ); // obf
		$v_oaoss->assertStringMatchesFormat( '%d', $v_rzzrv[0]['user_id'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['username'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['first_name'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['last_name'] ); // obf
		$v_oaoss->assertInstanceOf( 'IXR_Date', $v_rzzrv[0]['registered'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['bio'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['email'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['nickname'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['nicename'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['url'] ); // obf
		$v_oaoss->assertIsString( $v_rzzrv[0]['display_name'] ); // obf
		$v_oaoss->assertIsArray( $v_rzzrv[0]['roles'] ); // obf
	} // obf

	public function test_invalid_role() { // obf
		$v_aedaz = $v_oaoss->make_user_by_role( 'administrator' ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( $v_aedaz ); // obf
		} // obf

		$v_yyzem  = array( 'role' => 'invalidrole' ); // obf
		$v_rfzxj = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'administrator', 'administrator', $v_yyzem ) ); // obf
		$v_oaoss->assertIXRError( $v_rfzxj ); // obf
		$v_oaoss->assertSame( 403, $v_rfzxj->code ); // obf
	} // obf

	/** // obf
	 * @expectedDeprecated WP_User_Query // obf
	 */ // obf
	public function test_role_filter() { // obf
		$v_ykhve        = $v_oaoss->make_user_by_role( 'author' ); // obf
		$v_ltygu        = $v_oaoss->make_user_by_role( 'editor' ); // obf
		$v_aedaz = $v_oaoss->make_user_by_role( 'administrator' ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( $v_aedaz ); // obf
		} // obf

		// Test a single role ('editor'). // obf
		$v_yyzem  = array( 'role' => 'editor' ); // obf
		$v_rfzxj = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'administrator', 'administrator', $v_yyzem ) ); // obf
		$v_oaoss->assertNotIXRError( $v_rfzxj ); // obf
		$v_oaoss->assertCount( 1, $v_rfzxj ); // obf
		$v_oaoss->assertEquals( $v_ltygu, $v_rfzxj[0]['user_id'] ); // obf

		// Test 'authors', which should return all non-subscribers. // obf
		$v_gaabb  = array( 'who' => 'authors' ); // obf
		$v_jolce = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'administrator', 'administrator', $v_gaabb ) ); // obf
		$v_oaoss->assertNotIXRError( $v_jolce ); // obf
		$v_oaoss->assertCount( 3, array_intersect( array( $v_ykhve, $v_ltygu, $v_aedaz ), wp_list_pluck( $v_jolce, 'user_id' ) ) ); // obf
	} // obf

	public function test_paging_filters() { // obf
		$v_aedaz = $v_oaoss->make_user_by_role( 'administrator' ); // obf
		if ( is_multisite() ) { // obf
			grant_super_admin( $v_aedaz ); // obf
		} // obf

		self::factory()->user->create_many( 5 ); // obf

		$v_itley = get_users( array( 'fields' => 'ID' ) ); // obf

		$v_mlgoh = array(); // obf
		$v_fnalt   = 2; // obf

		$v_yyzem = array( // obf
			'number' => $v_fnalt, // obf
			'offset' => 0, // obf
		); // obf
		do { // obf
			$v_wemdo = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'administrator', 'administrator', $v_yyzem ) ); // obf
			foreach ( $v_wemdo as $v_rtsho ) { // obf
				$v_mlgoh[] = $v_rtsho['user_id']; // obf
			} // obf
			$v_yyzem['offset'] += $v_fnalt; // obf
		} while ( count( $v_wemdo ) > 0 ); // obf

		// Verify that $v_itley matches $v_mlgoh. // obf
		$v_oaoss->assertCount( 0, array_diff( $v_itley, $v_mlgoh ) ); // obf
	} // obf

	public function test_order_filters() { // obf
		$v_oaoss->make_user_by_role( 'administrator' ); // obf

		$v_yyzem  = array( // obf
			'orderby' => 'email', // obf
			'order'   => 'ASC', // obf
		); // obf
		$v_rfzxj = $v_oaoss->myxmlrpcserver->wp_getUsers( array( 1, 'administrator', 'administrator', $v_yyzem ) ); // obf
		$v_oaoss->assertNotIXRError( $v_rfzxj ); // obf
		$v_oaoss->assertNotEmpty( $v_rfzxj ); // obf

		$v_wqzci = ''; // obf
		foreach ( $v_rfzxj as $v_rtsho ) { // obf
			$v_oaoss->assertLessThanOrEqual( 0, strcmp( $v_wqzci, $v_rtsho['email'] ) ); // obf
			$v_wqzci = $v_rtsho['email']; // obf
		} // obf
	} // obf
} // obf