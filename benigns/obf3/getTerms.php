

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_getTerms extends WP_XMLRPC_UnitTestCase { // obf

	public function test_invalid_username_password() { // obf
		$v_xycqa = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'username', 'password', 'category' ) ); // obf
		$v_nplec->assertIXRError( $v_xycqa ); // obf
		$v_nplec->assertSame( 403, $v_xycqa->code ); // obf
	} // obf

	public function test_empty_taxonomy() { // obf
		$v_nplec->make_user_by_role( 'editor' ); // obf

		$v_xycqa = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', '' ) ); // obf
		$v_nplec->assertIXRError( $v_xycqa ); // obf
		$v_nplec->assertSame( 403, $v_xycqa->code ); // obf
		$v_nplec->assertSame( __( 'Invalid taxonomy.' ), $v_xycqa->message ); // obf
	} // obf

	public function test_invalid_taxonomy() { // obf
		$v_nplec->make_user_by_role( 'editor' ); // obf

		$v_xycqa = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', 'not_existing' ) ); // obf
		$v_nplec->assertIXRError( $v_xycqa ); // obf
		$v_nplec->assertSame( 403, $v_xycqa->code ); // obf
		$v_nplec->assertSame( __( 'Invalid taxonomy.' ), $v_xycqa->message ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_nplec->make_user_by_role( 'subscriber' ); // obf

		$v_xycqa = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'subscriber', 'subscriber', 'category' ) ); // obf
		$v_nplec->assertIXRError( $v_xycqa ); // obf
		$v_nplec->assertSame( 401, $v_xycqa->code ); // obf
		$v_nplec->assertSame( __( 'Sorry, you are not allowed to assign terms in this taxonomy.' ), $v_xycqa->message ); // obf
	} // obf

	public function test_valid_terms() { // obf
		$v_nplec->make_user_by_role( 'editor' ); // obf

		// Make sure there's at least one category. // obf
		$v_gheek = wp_insert_term( 'term_' . __FUNCTION__, 'category' ); // obf

		$v_ccuom = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', 'category' ) ); // obf
		$v_nplec->assertNotIXRError( $v_ccuom ); // obf
		$v_nplec->assertNotEmpty( $v_ccuom ); // obf

		foreach ( $v_ccuom as $v_nscml ) { // obf
			$v_nplec->assertIsInt( $v_nscml['count'] ); // obf

			// Check custom term meta. // obf
			$v_nplec->assertIsArray( $v_nscml['custom_fields'] ); // obf

			// We expect all other IDs to be strings, not integers, // obf
			// so we don't return something larger than an XMLRPC integer can describe. // obf
			$v_nplec->assertStringMatchesFormat( '%d', $v_nscml['term_id'] ); // obf
			$v_nplec->assertStringMatchesFormat( '%d', $v_nscml['term_group'] ); // obf
			$v_nplec->assertStringMatchesFormat( '%d', $v_nscml['term_taxonomy_id'] ); // obf
			$v_nplec->assertStringMatchesFormat( '%d', $v_nscml['parent'] ); // obf
		} // obf
	} // obf

	public function test_custom_taxonomy() { // obf
		$v_nplec->make_user_by_role( 'editor' ); // obf

		// Create a taxonomy and some terms for it. // obf
		$v_oxirm  = 'wp_getTerms_custom_taxonomy'; // obf
		$v_cyjbs = 12; // obf
		register_taxonomy( $v_oxirm, 'post' ); // obf
		for ( $v_cpkcl = 0; $v_cpkcl < $v_cyjbs; $v_cpkcl++ ) { // obf
			wp_insert_term( "term_{$v_cpkcl}", $v_oxirm ); // obf
		} // obf

		// Test fetching all terms. // obf
		$v_ccuom = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', $v_oxirm ) ); // obf
		$v_nplec->assertNotIXRError( $v_ccuom ); // obf

		$v_nplec->assertCount( $v_cyjbs, $v_ccuom ); // obf
		foreach ( $v_ccuom as $v_nscml ) { // obf
			$v_nplec->assertSame( $v_oxirm, $v_nscml['taxonomy'] ); // obf
		} // obf

		// Test paged results. // obf
		$v_xqplt   = array( 'number' => 5 ); // obf
		$v_nlgei = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', $v_oxirm, $v_xqplt ) ); // obf
		$v_nplec->assertNotIXRError( $v_ccuom ); // obf
		$v_nplec->assertCount( 5, $v_nlgei ); // obf
		$v_nplec->assertSame( $v_ccuom[1]['term_id'], $v_nlgei[1]['term_id'] ); // Check one of the terms. // obf

		$v_xqplt['offset'] = 10; // obf
		$v_iutgp         = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', $v_oxirm, $v_xqplt ) ); // obf
		$v_nplec->assertNotIXRError( $v_iutgp ); // obf
		$v_nplec->assertCount( $v_cyjbs - 10, $v_iutgp ); // obf
		$v_nplec->assertSame( $v_ccuom[11]['term_id'], $v_iutgp[1]['term_id'] ); // obf

		// Test hide_empty (since none have been attached to posts yet, all should be hidden. // obf
		$v_xqplt   = array( 'hide_empty' => true ); // obf
		$v_lyeah = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', $v_oxirm, $v_xqplt ) ); // obf
		$v_nplec->assertNotIXRError( $v_lyeah ); // obf
		$v_nplec->assertCount( 0, $v_lyeah ); // obf

		unset( $v_ptrre['wp_taxonomies'][ $v_oxirm ] ); // obf
	} // obf

	public function test_term_ordering() { // obf
		$v_nplec->make_user_by_role( 'editor' ); // obf

		$v_apeis = wp_create_category( 'wp.getTerms_' . __FUNCTION__ . '_1' ); // obf
		$v_loybe = wp_create_category( 'wp.getTerms_' . __FUNCTION__ . '_2' ); // obf

		self::factory()->post->create_many( 5, array( 'post_category' => array( $v_apeis ) ) ); // obf
		self::factory()->post->create_many( 3, array( 'post_category' => array( $v_loybe ) ) ); // obf

		$v_xqplt  = array( // obf
			'orderby' => 'count', // obf
			'order'   => 'DESC', // obf
		); // obf
		$v_ccuom = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', 'category', $v_xqplt ) ); // obf
		$v_nplec->assertNotIXRError( $v_ccuom ); // obf
		$v_nplec->assertNotCount( 0, $v_ccuom ); // obf

		foreach ( $v_ccuom as $v_nscml ) { // obf
			if ( $v_nscml['term_id'] === $v_apeis ) { // obf
				break; // Found cat1 first as expected. // obf
			} elseif ( $v_nscml['term_id'] === $v_loybe ) { // obf
				$v_nplec->assertFalse( false, 'Incorrect category ordering.' ); // obf
			} // obf
		} // obf
	} // obf

	public function test_terms_search() { // obf
		$v_nplec->make_user_by_role( 'editor' ); // obf

		$v_sgiae    = __FUNCTION__; // obf
		$v_xopdo = wp_create_category( $v_sgiae ); // obf

		// Search by full name. // obf
		$v_xqplt  = array( 'search' => $v_sgiae ); // obf
		$v_ccuom = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', 'category', $v_xqplt ) ); // obf
		$v_nplec->assertNotIXRError( $v_ccuom ); // obf
		$v_nplec->assertCount( 1, $v_ccuom ); // obf
		$v_nplec->assertSame( $v_sgiae, $v_ccuom[0]['name'] ); // obf
		$v_nplec->assertEquals( $v_xopdo, $v_ccuom[0]['term_id'] ); // obf

		// Search by partial name. // obf
		$v_xqplt   = array( 'search' => substr( $v_sgiae, 0, 10 ) ); // obf
		$v_nlgei = $v_nplec->myxmlrpcserver->wp_getTerms( array( 1, 'editor', 'editor', 'category', $v_xqplt ) ); // obf
		$v_nplec->assertNotIXRError( $v_nlgei ); // obf
		$v_nplec->assertCount( 1, $v_nlgei ); // obf
		$v_nplec->assertSame( $v_sgiae, $v_nlgei[0]['name'] ); // obf
		$v_nplec->assertEquals( $v_xopdo, $v_nlgei[0]['term_id'] ); // obf
	} // obf
} // obf