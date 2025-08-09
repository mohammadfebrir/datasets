

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_newTerm extends WP_XMLRPC_UnitTestCase { // obf

	protected static $v_jipdw; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_ltxnj ) { // obf
		self::$v_jipdw = $v_ltxnj->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( array( 1, 'username', 'password', array() ) ); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 403, $v_diyjt->code ); // obf
	} // obf

	public function test_empty_taxonomy() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( array( 1, 'editor', 'editor', array( 'taxonomy' => '' ) ) ); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 403, $v_diyjt->code ); // obf
		$v_otvxm->assertSame( __( 'Invalid taxonomy.' ), $v_diyjt->message ); // obf
	} // obf

	public function test_invalid_taxonomy() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( array( 1, 'editor', 'editor', array( 'taxonomy' => 'not_existing' ) ) ); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 403, $v_diyjt->code ); // obf
		$v_otvxm->assertSame( __( 'Invalid taxonomy.' ), $v_diyjt->message ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_otvxm->make_user_by_role( 'subscriber' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( array( 1, 'subscriber', 'subscriber', array( 'taxonomy' => 'category' ) ) ); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 401, $v_diyjt->code ); // obf
		$v_otvxm->assertSame( __( 'Sorry, you are not allowed to create terms in this taxonomy.' ), $v_diyjt->message ); // obf
	} // obf

	public function test_empty_term() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'name'     => '', // obf
				), // obf
			) // obf
		); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 403, $v_diyjt->code ); // obf
		$v_otvxm->assertSame( __( 'The term name cannot be empty.' ), $v_diyjt->message ); // obf
	} // obf

	public function test_parent_for_nonhierarchical() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'taxonomy' => 'post_tag', // obf
					'parent'   => self::$v_jipdw, // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 403, $v_diyjt->code ); // obf
		$v_otvxm->assertSame( __( 'This taxonomy is not hierarchical.' ), $v_diyjt->message ); // obf
	} // obf

	public function test_parent_invalid() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'parent'   => 'dasda', // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 500, $v_diyjt->code ); // obf
	} // obf

	public function test_parent_not_existing() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'parent'   => 9999, // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_otvxm->assertIXRError( $v_diyjt ); // obf
		$v_otvxm->assertSame( 403, $v_diyjt->code ); // obf
		$v_otvxm->assertSame( __( 'Parent term does not exist.' ), $v_diyjt->message ); // obf
	} // obf


	public function test_add_term() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_otvxm->assertNotIXRError( $v_diyjt ); // obf
		$v_otvxm->assertStringMatchesFormat( '%d', $v_diyjt ); // obf
	} // obf

	public function test_add_term_with_parent() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'parent'   => self::$v_jipdw, // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_otvxm->assertNotIXRError( $v_diyjt ); // obf
		$v_otvxm->assertStringMatchesFormat( '%d', $v_diyjt ); // obf
	} // obf

	public function test_add_term_with_all() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf

		$v_eksqx = array( // obf
			'taxonomy'    => 'category', // obf
			'parent'      => self::$v_jipdw, // obf
			'name'        => 'test_all', // obf
			'description' => 'Test all', // obf
			'slug'        => 'test_all', // obf
		); // obf
		$v_diyjt   = $v_otvxm->myxmlrpcserver->wp_newTerm( array( 1, 'editor', 'editor', $v_eksqx ) ); // obf
		$v_otvxm->assertNotIXRError( $v_diyjt ); // obf
		$v_otvxm->assertStringMatchesFormat( '%d', $v_diyjt ); // obf
	} // obf

	/** // obf
	 * @ticket 35991 // obf
	 */ // obf
	public function test_add_term_meta() { // obf
		$v_otvxm->make_user_by_role( 'editor' ); // obf
		$v_diyjt = $v_otvxm->myxmlrpcserver->wp_newTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				array( // obf
					'taxonomy'      => 'category', // obf
					'name'          => 'Test meta', // obf
					'custom_fields' => array( // obf
						array( // obf
							'key'   => 'key1', // obf
							'value' => 'value1', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_otvxm->assertNotIXRError( $v_diyjt ); // obf
		$v_otvxm->assertStringMatchesFormat( '%d', $v_diyjt ); // obf
	} // obf
} // obf