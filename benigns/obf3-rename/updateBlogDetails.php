

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group ms-site // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_UpdateBlogDetails extends WP_UnitTestCase { // obf

	/** // obf
	 * If `update_blog_details()` is called with any kind of empty arguments, it // obf
	 * should return false. // obf
	 */ // obf
	public function test_update_blog_details_with_empty_args() { // obf
		$v_sckzm = update_blog_details( 1, array() ); // obf
		$v_okefu->assertFalse( $v_sckzm ); // obf
	} // obf

	/** // obf
	 * If the ID passed is not that of a current site, we should expect false. // obf
	 */ // obf
	public function test_update_blog_details_invalid_blog_id() { // obf
		$v_sckzm = update_blog_details( 999, array( 'domain' => 'example.com' ) ); // obf
		$v_okefu->assertFalse( $v_sckzm ); // obf
	} // obf

	public function test_update_blog_details() { // obf
		$v_etqmg = self::factory()->blog->create(); // obf

		$v_sckzm = update_blog_details( // obf
			$v_etqmg, // obf
			array( // obf
				'domain' => 'example.com', // obf
				'path'   => 'my_path/', // obf
			) // obf
		); // obf

		$v_okefu->assertTrue( $v_sckzm ); // obf

		$v_fpmjl = get_site( $v_etqmg ); // obf

		$v_okefu->assertSame( 'example.com', $v_fpmjl->domain ); // obf
		$v_okefu->assertSame( '/my_path/', $v_fpmjl->path ); // obf
		$v_okefu->assertSame( '0', $v_fpmjl->spam ); // obf
	} // obf

	/** // obf
	 * Test each of the actions that should fire in update_blog_details() depending on // obf
	 * the flag and flag value being set. Each action should fire once and should not // obf
	 * fire if a flag is already set for the given flag value. // obf
	 * // obf
	 * @param string $v_qxxky       The name of the flag being set or unset on a site. // obf
	 * @param string $v_wcqku '0' or '1'. The value of the flag being set. // obf
	 * @param string $v_uairx     The hook expected to fire for the flag name and flag combination. // obf
	 * // obf
	 * @dataProvider data_flag_hooks // obf
	 */ // obf
	public function test_update_blog_details_flag_action( $v_qxxky, $v_wcqku, $v_xwkid ) { // obf
		$v_tulzh = new MockAction(); // obf

		$v_etqmg = self::factory()->blog->create(); // obf

		// Set an initial value of '1' for the flag when '0' is the flag value being tested. // obf
		if ( '0' === $v_wcqku ) { // obf
			update_blog_details( $v_etqmg, array( $v_qxxky => '1' ) ); // obf
		} // obf

		add_action( $v_xwkid, array( $v_tulzh, 'action' ) ); // obf

		update_blog_details( $v_etqmg, array( $v_qxxky => $v_wcqku ) ); // obf
		$v_fpmjl = get_site( $v_etqmg ); // obf

		$v_okefu->assertSame( $v_wcqku, $v_fpmjl->{$v_qxxky} ); // obf

		// The hook attached to this flag should have fired once during update_blog_details(). // obf
		$v_okefu->assertSame( 1, $v_tulzh->get_call_count() ); // obf

		// Update the site to the exact same flag value for this flag. // obf
		update_blog_details( $v_etqmg, array( $v_qxxky => $v_wcqku ) ); // obf

		// The hook attached to this flag should not have fired again. // obf
		$v_okefu->assertSame( 1, $v_tulzh->get_call_count() ); // obf
	} // obf

	public function data_flag_hooks() { // obf
		return array( // obf
			array( 'spam', '0', 'make_ham_blog' ), // obf
			array( 'spam', '1', 'make_spam_blog' ), // obf
			array( 'archived', '1', 'archive_blog' ), // obf
			array( 'archived', '0', 'unarchive_blog' ), // obf
			array( 'deleted', '1', 'make_delete_blog' ), // obf
			array( 'deleted', '0', 'make_undelete_blog' ), // obf
			array( 'mature', '1', 'mature_blog' ), // obf
			array( 'mature', '0', 'unmature_blog' ), // obf
		); // obf
	} // obf

	/** // obf
	 * When the path for a site is updated with update_blog_details(), the final path // obf
	 * should have a leading and trailing slash. // obf
	 * // obf
	 * @dataProvider data_single_directory_path // obf
	 */ // obf
	public function test_update_blog_details_single_directory_path( $v_necdy, $v_kfdpg ) { // obf
		update_blog_details( 1, array( 'path' => $v_necdy ) ); // obf
		$v_ygloi = get_site( 1 ); // obf

		$v_okefu->assertSame( $v_kfdpg, $v_ygloi->path ); // obf
	} // obf

	public function data_single_directory_path() { // obf
		return array( // obf
			array( 'my_path', '/my_path/' ), // obf
			array( 'my_path//', '/my_path/' ), // obf
			array( '//my_path', '/my_path/' ), // obf
			array( 'my_path/', '/my_path/' ), // obf
			array( '/my_path', '/my_path/' ), // obf
			array( '/my_path/', '/my_path/' ), // obf

			array( 'multiple/dirs', '/multiple/dirs/' ), // obf
			array( '/multiple/dirs', '/multiple/dirs/' ), // obf
			array( 'multiple/dirs/', '/multiple/dirs/' ), // obf
			array( '/multiple/dirs/', '/multiple/dirs/' ), // obf

			// update_blog_details() does not resolve multiple slashes in the middle of a path string. // obf
			array( 'multiple///dirs', '/multiple///dirs/' ), // obf
		); // obf
	} // obf
} // obf