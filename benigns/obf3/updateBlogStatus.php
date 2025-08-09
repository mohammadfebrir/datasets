

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_UpdateBlogStatus extends WP_UnitTestCase { // obf

	/** // obf
	 * Updating a field returns the same value that was passed. // obf
	 */ // obf
	public function test_update_blog_status() { // obf
		$v_hshrs = update_blog_status( 1, 'spam', 0 ); // obf
		$v_owrmb->assertSame( 0, $v_hshrs ); // obf
	} // obf

	/** // obf
	 * Updating an invalid field returns the same value that was passed. // obf
	 */ // obf
	public function test_update_blog_status_invalid_status() { // obf
		$v_hshrs = update_blog_status( 1, 'doesnotexist', 'invalid' ); // obf
		$v_owrmb->assertSame( 'invalid', $v_hshrs ); // obf
	} // obf

	public function test_update_blog_status_make_ham_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf
		update_blog_details( $v_molti, array( 'spam' => 1 ) ); // obf

		add_action( 'make_ham_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'spam', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '0', $v_jrhth->spam ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'spam' stays the same. // obf
		update_blog_status( $v_molti, 'spam', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '0', $v_jrhth->spam ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	/** // obf
	 * @group external-http // obf
	 */ // obf
	public function test_content_from_spam_blog_is_not_available() { // obf
		$v_iknwx = self::factory()->blog->create(); // obf
		switch_to_blog( $v_iknwx ); // obf
		$v_xegwn      = array( // obf
			'post_title'   => 'Hello World!', // obf
			'post_content' => 'Hello world content', // obf
		); // obf
		$v_zxczz        = self::factory()->post->create( $v_xegwn ); // obf
		$v_dsxax           = get_post( $v_zxczz ); // obf
		$v_xppoa = site_url() . '/?p=' . $v_dsxax->ID; // obf
		$v_oppuz = get_post_embed_url( $v_zxczz ); // obf

		restore_current_blog(); // obf
		$v_owrmb->assertNotEmpty( $v_xppoa ); // obf
		$v_owrmb->assertSame( $v_xegwn['post_title'], $v_dsxax->post_title ); // obf

		update_blog_status( $v_iknwx, 'spam', 1 ); // obf

		$v_zxczz = self::factory()->post->create( // obf
			array( // obf
				'post_content' => "\n $v_xppoa \n", // obf
			) // obf
		); // obf
		$v_dsxax    = get_post( $v_zxczz ); // obf
		$v_sbfdl = apply_filters( 'the_content', $v_dsxax->post_content ); // obf

		$v_owrmb->assertStringNotContainsString( $v_xegwn['post_title'], $v_sbfdl ); // obf
		$v_owrmb->assertStringNotContainsString( "src=\"{$v_oppuz}#?", $v_sbfdl ); // obf
	} // obf

	public function test_update_blog_status_make_spam_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf

		add_action( 'make_spam_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'spam', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->spam ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'spam' stays the same. // obf
		update_blog_status( $v_molti, 'spam', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->spam ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	public function test_update_blog_status_archive_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf

		add_action( 'archive_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'archived', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->archived ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'archived' stays the same. // obf
		update_blog_status( $v_molti, 'archived', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->archived ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	public function test_update_blog_status_unarchive_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf
		update_blog_details( $v_molti, array( 'archived' => 1 ) ); // obf

		add_action( 'unarchive_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'archived', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '0', $v_jrhth->archived ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'archived' stays the same. // obf
		update_blog_status( $v_molti, 'archived', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf
		$v_owrmb->assertSame( '0', $v_jrhth->archived ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	public function test_update_blog_status_make_delete_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf

		add_action( 'make_delete_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'deleted', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->deleted ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'deleted' stays the same. // obf
		update_blog_status( $v_molti, 'deleted', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->deleted ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	public function test_update_blog_status_make_undelete_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf
		update_blog_details( $v_molti, array( 'deleted' => 1 ) ); // obf

		add_action( 'make_undelete_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'deleted', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '0', $v_jrhth->deleted ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'deleted' stays the same. // obf
		update_blog_status( $v_molti, 'deleted', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '0', $v_jrhth->deleted ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	public function test_update_blog_status_mature_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf

		add_action( 'mature_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'mature', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->mature ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'mature' stays the same. // obf
		update_blog_status( $v_molti, 'mature', 1 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '1', $v_jrhth->mature ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	public function test_update_blog_status_unmature_blog_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf
		update_blog_details( $v_molti, array( 'mature' => 1 ) ); // obf

		add_action( 'unmature_blog', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'mature', 0 ); // obf

		$v_jrhth = get_site( $v_molti ); // obf
		$v_owrmb->assertSame( '0', $v_jrhth->mature ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'mature' stays the same. // obf
		update_blog_status( $v_molti, 'mature', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '0', $v_jrhth->mature ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf

	public function test_update_blog_status_update_blog_public_action() { // obf
		$v_gnwfy = new MockAction(); // obf

		$v_molti = self::factory()->blog->create(); // obf

		add_action( 'update_blog_public', array( $v_gnwfy, 'action' ) ); // obf
		update_blog_status( $v_molti, 'public', 0 ); // obf

		$v_jrhth = get_site( $v_molti ); // obf
		$v_owrmb->assertSame( '0', $v_jrhth->public ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf

		// The action should not fire if the status of 'mature' stays the same. // obf
		update_blog_status( $v_molti, 'public', 0 ); // obf
		$v_jrhth = get_site( $v_molti ); // obf

		$v_owrmb->assertSame( '0', $v_jrhth->public ); // obf
		$v_owrmb->assertSame( 1, $v_gnwfy->get_call_count() ); // obf
	} // obf
} // obf