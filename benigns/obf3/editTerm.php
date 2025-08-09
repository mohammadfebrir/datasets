

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_editTerm extends WP_XMLRPC_UnitTestCase { // obf
	protected static $v_bdpuw; // obf
	protected static $v_cddws; // obf
	protected static $v_dpkla; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xwaqf ) { // obf
		self::$v_bdpuw = $v_xwaqf->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf
		self::$v_cddws  = $v_xwaqf->term->create( // obf
			array( // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf
		self::$v_dpkla    = $v_xwaqf->term->create( // obf
			array( // obf
				'taxonomy' => 'post_tag', // obf
			) // obf
		); // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( array( 1, 'username', 'password', 'category', 1 ) ); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 403, $v_zlehk->code ); // obf
	} // obf

	public function test_empty_taxonomy() { // obf
		$v_rngnj->make_user_by_role( 'subscriber' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( array( 1, 'subscriber', 'subscriber', '', array( 'taxonomy' => '' ) ) ); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 403, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'Invalid taxonomy.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_invalid_taxonomy() { // obf
		$v_rngnj->make_user_by_role( 'subscriber' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( array( 1, 'subscriber', 'subscriber', self::$v_bdpuw, array( 'taxonomy' => 'not_existing' ) ) ); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 403, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'Invalid taxonomy.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_rngnj->make_user_by_role( 'subscriber' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( array( 1, 'subscriber', 'subscriber', self::$v_bdpuw, array( 'taxonomy' => 'category' ) ) ); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 401, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'Sorry, you are not allowed to edit this term.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_term_not_exists() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( array( 1, 'editor', 'editor', 9999, array( 'taxonomy' => 'category' ) ) ); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 404, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'Invalid term ID.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_empty_term() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( array( 1, 'editor', 'editor', '', array( 'taxonomy' => 'category' ) ) ); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 500, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'Empty Term.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_empty_term_name() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				self::$v_bdpuw, // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'name'     => '', // obf
				), // obf
			) // obf
		); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 403, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'The term name cannot be empty.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_parent_for_nonhierarchical() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				self::$v_dpkla, // obf
				array( // obf
					'taxonomy' => 'post_tag', // obf
					'parent'   => self::$v_bdpuw, // obf
				), // obf
			) // obf
		); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 403, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'Cannot set parent term, taxonomy is not hierarchical.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_parent_empty() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				self::$v_cddws, // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'parent'   => '', // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_rngnj->assertNotIXRError( $v_zlehk ); // obf
		$v_rngnj->assertTrue( $v_zlehk ); // obf
	} // obf

	public function test_parent_null() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				self::$v_cddws, // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'parent'   => null, // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf

		$v_rngnj->assertNotIXRError( $v_zlehk ); // obf
		$v_rngnj->assertIsBool( $v_zlehk ); // obf

		$v_fcecp = get_term( self::$v_cddws, 'category' ); // obf
		$v_rngnj->assertEquals( '0', $v_fcecp->parent ); // obf
	} // obf

	public function test_parent_invalid() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				self::$v_cddws, // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'parent'   => 'dasda', // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 500, $v_zlehk->code ); // obf
	} // obf

	public function test_parent_not_existing() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				self::$v_cddws, // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'parent'   => 9999, // obf
					'name'     => 'test', // obf
				), // obf
			) // obf
		); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 403, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( __( 'Parent term does not exist.' ), $v_zlehk->message ); // obf
	} // obf

	public function test_parent_duplicate_slug() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_bdpuw = get_term_by( 'id', self::$v_bdpuw, 'category' ); // obf
		$v_zlehk      = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				self::$v_cddws, // obf
				array( // obf
					'taxonomy' => 'category', // obf
					'slug'     => $v_bdpuw->slug, // obf
				), // obf
			) // obf
		); // obf
		$v_rngnj->assertIXRError( $v_zlehk ); // obf
		$v_rngnj->assertSame( 500, $v_zlehk->code ); // obf
		$v_rngnj->assertSame( htmlspecialchars( sprintf( __( 'The slug &#8220;%s&#8221; is already in use by another term.' ), $v_bdpuw->slug ) ), $v_zlehk->message ); // obf
	} // obf

	public function test_edit_all_fields() { // obf
		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_ezemv = array( // obf
			'taxonomy'    => 'category', // obf
			'name'        => 'Child 2', // obf
			'parent'      => self::$v_bdpuw, // obf
			'description' => 'Child term', // obf
			'slug'        => 'child_2', // obf
		); // obf
		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( array( 1, 'editor', 'editor', self::$v_cddws, $v_ezemv ) ); // obf

		$v_rngnj->assertNotIXRError( $v_zlehk ); // obf
		$v_rngnj->assertIsBool( $v_zlehk ); // obf
	} // obf

	/** // obf
	 * @ticket 35991 // obf
	 */ // obf
	public function test_update_term_meta() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_rpzbq       = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_fiydi = add_term_meta( $v_rpzbq, 'foo', 'bar' ); // obf

		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				$v_rpzbq, // obf
				array( // obf
					'taxonomy'      => 'wptests_tax', // obf
					'custom_fields' => array( // obf
						array( // obf
							'id'    => $v_fiydi, // obf
							'key'   => 'foo', // obf
							'value' => 'baz', // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_rngnj->assertNotIXRError( $v_zlehk ); // obf

		$v_blgnx = get_term_meta( $v_rpzbq, 'foo', true ); // obf
		$v_rngnj->assertSame( 'baz', $v_blgnx ); // obf
	} // obf

	/** // obf
	 * @ticket 35991 // obf
	 */ // obf
	public function test_delete_term_meta() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_rpzbq       = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
			) // obf
		); // obf
		$v_fiydi = add_term_meta( $v_rpzbq, 'foo', 'bar' ); // obf

		$v_rngnj->make_user_by_role( 'editor' ); // obf

		$v_zlehk = $v_rngnj->myxmlrpcserver->wp_editTerm( // obf
			array( // obf
				1, // obf
				'editor', // obf
				'editor', // obf
				$v_rpzbq, // obf
				array( // obf
					'taxonomy'      => 'wptests_tax', // obf
					'custom_fields' => array( // obf
						array( // obf
							'id' => $v_fiydi, // obf
						), // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_rngnj->assertNotIXRError( $v_zlehk ); // obf

		$v_blgnx = get_term_meta( $v_rpzbq, 'foo' ); // obf
		$v_rngnj->assertSame( array(), $v_blgnx ); // obf
	} // obf
} // obf