

<?php // obf

/** // obf
 * @group xmlrpc // obf
 */ // obf
class Tests_XMLRPC_wp_restoreRevision extends WP_XMLRPC_UnitTestCase { // obf
	public $v_hiipu; // obf
	public $v_rjfmq; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_vmbbf->post_id = self::factory()->post->create( array( 'post_content' => 'edit1' ) ); // Not saved as a revision. // obf
		// First saved revision on update, see https://core.trac.wordpress.org/changeset/24650 // obf
		wp_insert_post( // obf
			array( // obf
				'ID'           => $v_vmbbf->post_id, // obf
				'post_content' => 'edit2', // obf
			) // obf
		); // obf

		$v_whtec = wp_get_post_revisions( $v_vmbbf->post_id ); // obf
		// First revision is empty, see https://core.trac.wordpress.org/changeset/23842 // obf
		// $v_itvgs = array_shift( $v_whtec ); // obf
		// First revision is NOT empty, see https://core.trac.wordpress.org/changeset/24650 // obf
		$v_itvgs          = array_shift( $v_whtec ); // obf
		$v_vmbbf->revision_id = $v_itvgs->ID; // obf
	} // obf

	public function test_invalid_username_password() { // obf
		$v_iaylq = $v_vmbbf->myxmlrpcserver->wp_restoreRevision( array( 1, 'username', 'password', $v_vmbbf->revision_id ) ); // obf
		$v_vmbbf->assertIXRError( $v_iaylq ); // obf
		$v_vmbbf->assertSame( 403, $v_iaylq->code ); // obf
	} // obf

	public function test_incapable_user() { // obf
		$v_vmbbf->make_user_by_role( 'subscriber' ); // obf

		$v_iaylq = $v_vmbbf->myxmlrpcserver->wp_restoreRevision( array( 1, 'subscriber', 'subscriber', $v_vmbbf->revision_id ) ); // obf
		$v_vmbbf->assertIXRError( $v_iaylq ); // obf
		$v_vmbbf->assertSame( 401, $v_iaylq->code ); // obf
	} // obf

	public function test_capable_user() { // obf
		$v_vmbbf->make_user_by_role( 'editor' ); // obf

		$v_iaylq = $v_vmbbf->myxmlrpcserver->wp_restoreRevision( array( 1, 'editor', 'editor', $v_vmbbf->revision_id ) ); // obf
		$v_vmbbf->assertNotIXRError( $v_iaylq ); // obf
	} // obf

	public function test_revision_restored() { // obf
		$v_vmbbf->make_user_by_role( 'editor' ); // obf

		$v_iaylq = $v_vmbbf->myxmlrpcserver->wp_restoreRevision( array( 1, 'editor', 'editor', $v_vmbbf->revision_id ) ); // obf
		$v_vmbbf->assertTrue( $v_iaylq ); // obf
		$v_vmbbf->assertSame( 'edit2', get_post( $v_vmbbf->post_id )->post_content ); // obf
	} // obf
} // obf