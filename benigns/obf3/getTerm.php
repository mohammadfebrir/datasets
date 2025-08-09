

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getTerm extends WP_XMLRPC_UnitTestCase { // obf

	protected static $v_ilgio; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ylaoi ) { // obf
		self::$v_ilgio = $v_ylaoi->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( array( 1, 'username', 'password', 'category', 1 ) ); // obf
		$v_hpimm->assertIXRError( $v_odrgk ); // obf
		$v_hpimm->assertSame( 403, $v_odrgk->code ); // obf
	} // obf

	public function test_empty_taxonomy() { // obf
		$v_hpimm->make_user_by_role( 'editor' ); // obf

		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( array( 1, 'editor', 'editor', '', 0 ) ); // obf
		$v_hpimm->assertIXRError( $v_odrgk ); // obf
		$v_hpimm->assertSame( 403, $v_odrgk->code ); // obf
		$v_hpimm->assertSame( __( 'Invalid taxonomy.' ), $v_odrgk->message ); // obf
	} // obf

	public function test_invalid_taxonomy() { // obf
		$v_hpimm->make_user_by_role( 'editor' ); // obf

		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( array( 1, 'editor', 'editor', 'not_existing', 0 ) ); // obf
		$v_hpimm->assertIXRError( $v_odrgk ); // obf
		$v_hpimm->assertSame( 403, $v_odrgk->code ); // obf
		$v_hpimm->assertSame( __( 'Invalid taxonomy.' ), $v_odrgk->message ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_hpimm->make_user_by_role( 'subscriber' ); // obf

		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( array( 1, 'subscriber', 'subscriber', 'category', self::$v_ilgio ) ); // obf
		$v_hpimm->assertIXRError( $v_odrgk ); // obf
		$v_hpimm->assertSame( 401, $v_odrgk->code ); // obf
		$v_hpimm->assertSame( __( 'Sorry, you are not allowed to assign this term.' ), $v_odrgk->message ); // obf
	} // obf


	public function test_empty_term() { // obf
		$v_hpimm->make_user_by_role( 'editor' ); // obf

		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( array( 1, 'editor', 'editor', 'category', '' ) ); // obf
		$v_hpimm->assertIXRError( $v_odrgk ); // obf
		$v_hpimm->assertSame( 500, $v_odrgk->code ); // obf
		$v_hpimm->assertSame( __( 'Empty Term.' ), $v_odrgk->message ); // obf
	} // obf

	public function test_invalid_term() { // obf
		$v_hpimm->make_user_by_role( 'editor' ); // obf

		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( array( 1, 'editor', 'editor', 'category', 9999 ) ); // obf
		$v_hpimm->assertIXRError( $v_odrgk ); // obf
		$v_hpimm->assertSame( 404, $v_odrgk->code ); // obf
		$v_hpimm->assertSame( __( 'Invalid term ID.' ), $v_odrgk->message ); // obf
	} // obf

	public function test_valid_term() { // obf
		$v_hpimm->make_user_by_role( 'editor' ); // obf

		$v_uahnm                  = get_term( self::$v_ilgio, 'category', ARRAY_A ); // obf
		$v_uahnm['custom_fields'] = array(); // obf

		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( array( 1, 'editor', 'editor', 'category', self::$v_ilgio ) ); // obf

		$v_hpimm->assertNotIXRError( $v_odrgk ); // obf
		$v_hpimm->assertEquals( $v_odrgk, $v_uahnm ); // obf

		// Check data types. // obf
		$v_hpimm->assertIsString( $v_odrgk['name'] ); // obf
		$v_hpimm->assertIsString( $v_odrgk['slug'] ); // obf
		$v_hpimm->assertIsString( $v_odrgk['taxonomy'] ); // obf
		$v_hpimm->assertIsString( $v_odrgk['description'] ); // obf
		$v_hpimm->assertIsInt( $v_odrgk['count'] ); // obf

		// We expect all ID's to be strings not integers so we don't return something larger than an XMLRPC integer can describe. // obf
		$v_hpimm->assertStringMatchesFormat( '%d', $v_odrgk['term_id'] ); // obf
		$v_hpimm->assertStringMatchesFormat( '%d', $v_odrgk['term_group'] ); // obf
		$v_hpimm->assertStringMatchesFormat( '%d', $v_odrgk['term_taxonomy_id'] ); // obf
		$v_hpimm->assertStringMatchesFormat( '%d', $v_odrgk['parent'] ); // obf

		// Check data. // obf
		$v_hpimm->assertSame( 0, $v_odrgk['count'] ); // obf
		$v_hpimm->assertSame( $v_uahnm['name'], $v_odrgk['name'] ); // obf
		$v_hpimm->assertSame( $v_uahnm['slug'], $v_odrgk['slug'] ); // obf
		$v_hpimm->assertSame( 'category', $v_odrgk['taxonomy'] ); // obf
		$v_hpimm->assertSame( $v_uahnm['description'], $v_odrgk['description'] ); // obf
	} // obf

	/** // obf
	 * @ticket 35991 // obf
	 */ // obf
	public function test_get_term_meta() { // obf
		$v_hpimm->make_user_by_role( 'editor' ); // obf

		// Add term meta to test wp.getTerm. // obf
		add_term_meta( self::$v_ilgio, 'foo', 'bar' ); // obf

		$v_uahnm = get_term( self::$v_ilgio, 'category', ARRAY_A ); // obf

		$v_odrgk = $v_hpimm->myxmlrpcserver->wp_getTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				'category', // obf
				self::$v_ilgio, // obf
			) // obf
		); // obf
		$v_hpimm->assertNotIXRError( $v_odrgk ); // obf

		$v_hpimm->assertIsArray( $v_odrgk['custom_fields'] ); // obf
		$v_dzouw = get_term_meta( self::$v_ilgio, '', true ); // obf
		$v_hpimm->assertSame( $v_dzouw['foo'][0], $v_odrgk['custom_fields'][0]['value'] ); // obf
	} // obf
} // obf