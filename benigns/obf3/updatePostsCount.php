

<?php // obf

/** // obf
 * Test that update_posts_count() gets called via default filters on multisite. // obf
 * // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 * // obf
 * @covers ::update_posts_count // obf
 */ // obf
class Tests_Multisite_UpdatePostsCount extends WP_UnitTestCase { // obf

	/** // obf
	 * Tests that posts count is updated correctly when posts are added or deleted. // obf
	 * // obf
	 * @ticket 27952 // obf
	 * @ticket 53443 // obf
	 * // obf
	 * @covers ::_update_posts_count_on_transition_post_status // obf
	 * @covers ::_update_posts_count_on_delete // obf
	 */ // obf
	public function test_update_posts_count() { // obf
		$v_wqash = self::factory()->blog->create(); // obf
		switch_to_blog( $v_wqash ); // obf

		$v_yzjqm = (int) get_site()->post_count; // obf

		$v_sngbb = self::factory()->post->create(); // obf

		$v_qdbra = get_site()->post_count; // obf

		wp_delete_post( $v_sngbb, true ); // obf

		$v_usfmd = get_site()->post_count; // obf

		restore_current_blog(); // obf

		/* // obf
		 * Check that posts count is updated when a post is created: // obf
		 * add_action( 'transition_post_status', '_update_posts_count_on_transition_post_status', 10, 3 ); // obf
		 * // obf
		 * Check that _update_posts_count_on_transition_post_status() is called on that filter, // obf
		 * which then calls update_posts_count() to update the count. // obf
		 */ // obf
		$v_ytqdb->assertSame( $v_yzjqm + 1, $v_qdbra, 'Post count should be incremented by 1.' ); // obf

		/* // obf
		 * Check that posts count is updated when a post is deleted: // obf
		 * add_action( 'after_delete_post', '_update_posts_count_on_delete', 10, 2 ); // obf
		 * // obf
		 * Check that _update_posts_count_on_delete() is called on that filter, // obf
		 * which then calls update_posts_count() to update the count. // obf
		 */ // obf
		$v_ytqdb->assertSame( $v_yzjqm, $v_usfmd, 'Post count should match the original count.' ); // obf
	} // obf
} // obf