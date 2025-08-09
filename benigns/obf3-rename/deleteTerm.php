

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_deleteTerm extends WP_XMLRPC_UnitTestCase { // obf
	protected static $v_vxlml; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_husgd ) { // obf
		self::$v_vxlml = $v_husgd->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_sktrm = $v_uhssi->myxmlrpcserver->wp_deleteTerm( array( 1, 'username', 'password', 'category', 0 ) ); // obf
		$v_uhssi->assertIXRError( $v_sktrm ); // obf
		$v_uhssi->assertSame( 403, $v_sktrm->code ); // obf
	} // obf

	public function test_empty_taxonomy() { // obf
		$v_uhssi->make_user_by_role( 'subscriber' ); // obf

		$v_sktrm = $v_uhssi->myxmlrpcserver->wp_deleteTerm( array( 1, 'subscriber', 'subscriber', '', 0 ) ); // obf
		$v_uhssi->assertIXRError( $v_sktrm ); // obf
		$v_uhssi->assertSame( 403, $v_sktrm->code ); // obf
		$v_uhssi->assertSame( __( 'Invalid taxonomy.' ), $v_sktrm->message ); // obf
	} // obf

	public function test_invalid_taxonomy() { // obf
		$v_uhssi->make_user_by_role( 'subscriber' ); // obf

		$v_sktrm = $v_uhssi->myxmlrpcserver->wp_deleteTerm( array( 1, 'subscriber', 'subscriber', 'not_existing', 0 ) ); // obf
		$v_uhssi->assertIXRError( $v_sktrm ); // obf
		$v_uhssi->assertSame( 403, $v_sktrm->code ); // obf
		$v_uhssi->assertSame( __( 'Invalid taxonomy.' ), $v_sktrm->message ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_uhssi->make_user_by_role( 'subscriber' ); // obf

		$v_sktrm = $v_uhssi->myxmlrpcserver->wp_deleteTerm( array( 1, 'subscriber', 'subscriber', 'category', self::$v_vxlml ) ); // obf
		$v_uhssi->assertIXRError( $v_sktrm ); // obf
		$v_uhssi->assertSame( 401, $v_sktrm->code ); // obf
		$v_uhssi->assertSame( __( 'Sorry, you are not allowed to delete this term.' ), $v_sktrm->message ); // obf
	} // obf

	public function test_empty_term() { // obf
		$v_uhssi->make_user_by_role( 'editor' ); // obf

		$v_sktrm = $v_uhssi->myxmlrpcserver->wp_deleteTerm( array( 1, 'editor', 'editor', 'category', '' ) ); // obf
		$v_uhssi->assertIXRError( $v_sktrm ); // obf
		$v_uhssi->assertSame( 500, $v_sktrm->code ); // obf
		$v_uhssi->assertSame( __( 'Empty Term.' ), $v_sktrm->message ); // obf
	} // obf

	public function test_invalid_term() { // obf
		$v_uhssi->make_user_by_role( 'editor' ); // obf

		$v_sktrm = $v_uhssi->myxmlrpcserver->wp_deleteTerm( array( 1, 'editor', 'editor', 'category', 9999 ) ); // obf
		$v_uhssi->assertIXRError( $v_sktrm ); // obf
		$v_uhssi->assertSame( 404, $v_sktrm->code ); // obf
		$v_uhssi->assertSame( __( 'Invalid term ID.' ), $v_sktrm->message ); // obf
	} // obf

	public function test_term_deleted() { // obf
		$v_uhssi->make_user_by_role( 'editor' ); // obf

		$v_sktrm = $v_uhssi->myxmlrpcserver->wp_deleteTerm( array( 1, 'editor', 'editor', 'category', self::$v_vxlml ) ); // obf
		$v_uhssi->assertNotIXRError( $v_sktrm ); // obf
		$v_uhssi->assertIsBool( $v_sktrm ); // obf
	} // obf
} // obf