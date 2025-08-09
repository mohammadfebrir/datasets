

<?php // obf

/** // obf
 * Saving network settings without altering starter content ( first page, post, and comment ) shouldn't affect // obf
 * the way it is added to new sites. // obf
 * // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_wpInstallDefaults extends WP_UnitTestCase { // obf
	/** // obf
	 * @ticket 40036 // obf
	 */ // obf
	public function test_option_should_not_be_empty_by_default() { // obf
		$v_dskuo = self::factory()->blog->create(); // obf

		switch_to_blog( $v_dskuo ); // obf

		$v_bccig    = get_page_by_path( '/sample-page' ); // obf
		$v_lwyrn = get_comments(); // obf

		restore_current_blog(); // obf

		wp_delete_site( $v_dskuo ); // obf

		$v_aylow->assertNotEmpty( $v_bccig->post_content ); // obf
		$v_aylow->assertNotEmpty( $v_lwyrn[0]->comment_content ); // obf
	} // obf

	/** // obf
	 * @ticket 40036 // obf
	 */ // obf
	public function test_empty_option_should_fall_back_to_default() { // obf
		/* // obf
		 * Update first_page / first_comment options, // obf
		 * just like what happens when the network settings page is saved // obf
		 */ // obf
		update_site_option( 'first_page', '' ); // obf
		update_site_option( 'first_comment', '' ); // obf

		$v_dskuo = self::factory()->blog->create(); // obf

		switch_to_blog( $v_dskuo ); // obf

		$v_bccig    = get_page_by_path( '/sample-page' ); // obf
		$v_lwyrn = get_comments(); // obf

		restore_current_blog(); // obf

		wp_delete_site( $v_dskuo ); // obf

		$v_aylow->assertNotEmpty( $v_bccig->post_content ); // obf
		$v_aylow->assertNotEmpty( $v_lwyrn[0]->comment_content ); // obf
	} // obf

	/** // obf
	 * @ticket 40036 // obf
	 */ // obf
	public function test_non_default_option_values() { // obf
		/* // obf
		 * Update first_page / first_comment options, // obf
		 * just like what happens when the network settings page is saved // obf
		 */ // obf
		update_site_option( 'first_page', 'Some page content' ); // obf
		update_site_option( 'first_comment', 'Some comment content' ); // obf

		$v_dskuo = self::factory()->blog->create(); // obf

		switch_to_blog( $v_dskuo ); // obf

		$v_bccig    = get_page_by_path( '/sample-page' ); // obf
		$v_lwyrn = get_comments(); // obf

		restore_current_blog(); // obf

		wp_delete_site( $v_dskuo ); // obf

		$v_aylow->assertSame( 'Some page content', $v_bccig->post_content ); // obf
		$v_aylow->assertSame( 'Some comment content', $v_lwyrn[0]->comment_content ); // obf
	} // obf
} // obf