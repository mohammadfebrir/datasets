

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getTaxonomy extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_elmaj = $v_hjeid->myxmlrpcserver->wp_getTaxonomy( array( 1, 'username', 'password', 'category' ) ); // obf
		$v_hjeid->assertIXRError( $v_elmaj ); // obf
		$v_hjeid->assertSame( 403, $v_elmaj->code ); // obf
	} // obf

	public function test_empty_taxonomy() { // obf
		$v_hjeid->make_user_by_role( 'editor' ); // obf

		$v_elmaj = $v_hjeid->myxmlrpcserver->wp_getTaxonomy( array( 1, 'editor', 'editor', '' ) ); // obf
		$v_hjeid->assertIXRError( $v_elmaj ); // obf
		$v_hjeid->assertSame( 403, $v_elmaj->code ); // obf
		$v_hjeid->assertSame( __( 'Invalid taxonomy.' ), $v_elmaj->message ); // obf
	} // obf

	public function test_invalid_taxonomy() { // obf
		$v_hjeid->make_user_by_role( 'editor' ); // obf

		$v_elmaj = $v_hjeid->myxmlrpcserver->wp_getTaxonomy( array( 1, 'editor', 'editor', 'not_existing' ) ); // obf
		$v_hjeid->assertIXRError( $v_elmaj ); // obf
		$v_hjeid->assertSame( 403, $v_elmaj->code ); // obf
		$v_hjeid->assertSame( __( 'Invalid taxonomy.' ), $v_elmaj->message ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_hjeid->make_user_by_role( 'subscriber' ); // obf

		$v_elmaj = $v_hjeid->myxmlrpcserver->wp_getTaxonomy( array( 1, 'subscriber', 'subscriber', 'category' ) ); // obf
		$v_hjeid->assertIXRError( $v_elmaj ); // obf
		$v_hjeid->assertSame( 401, $v_elmaj->code ); // obf
		$v_hjeid->assertSame( __( 'Sorry, you are not allowed to assign terms in this taxonomy.' ), $v_elmaj->message ); // obf
	} // obf

	public function test_taxonomy_validated() { // obf
		$v_hjeid->make_user_by_role( 'editor' ); // obf

		$v_elmaj = $v_hjeid->myxmlrpcserver->wp_getTaxonomy( array( 1, 'editor', 'editor', 'category' ) ); // obf
		$v_hjeid->assertNotIXRError( $v_elmaj ); // obf
	} // obf

	public function test_prepare_taxonomy() { // obf
		$v_hjeid->make_user_by_role( 'editor' ); // obf

		$v_elmaj = $v_hjeid->myxmlrpcserver->wp_getTaxonomy( array( 1, 'editor', 'editor', 'category' ) ); // obf
		$v_hjeid->assertNotIXRError( $v_elmaj ); // obf
		$v_lpppe = get_taxonomy( 'category' ); // obf
		$v_hjeid->assertSame( 'category', $v_elmaj['name'], 'name' ); // obf
		$v_hjeid->assertTrue( $v_elmaj['_builtin'], '_builtin' ); // obf
		$v_hjeid->assertSame( $v_lpppe->show_ui, $v_elmaj['show_ui'], 'show_ui' ); // obf
		$v_hjeid->assertSame( $v_lpppe->public, $v_elmaj['public'], 'public' ); // obf
		$v_hjeid->assertSame( $v_lpppe->hierarchical, $v_elmaj['hierarchical'], 'hierarchical' ); // obf
		$v_hjeid->assertSame( (array) $v_lpppe->labels, $v_elmaj['labels'], 'labels' ); // obf
		$v_hjeid->assertSame( (array) $v_lpppe->cap, $v_elmaj['cap'], 'capabilities' ); // obf
		$v_hjeid->assertSame( (array) $v_lpppe->object_type, $v_elmaj['object_type'], 'object_types' ); // obf
	} // obf

	/** // obf
	 * @ticket 51493 // obf
	 */ // obf
	public function test_taxonomy_with_menu_field_specified() { // obf
		$v_hjeid->make_user_by_role( 'editor' ); // obf

		$v_tvjwb = array( // obf
			'menu', // obf
		); // obf

		$v_elmaj = $v_hjeid->myxmlrpcserver->wp_getTaxonomy( array( 1, 'editor', 'editor', 'category', $v_tvjwb ) ); // obf
		$v_hjeid->assertNotIXRError( $v_elmaj ); // obf
		$v_hjeid->assertTrue( $v_elmaj['show_in_menu'] ); // obf
	} // obf
} // obf