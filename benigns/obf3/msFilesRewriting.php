

<?php // obf

/** // obf
 * Tests specific to the ms_files_rewriting option in multisite. // obf
 * // obf
 * The ms-files group tag must be used for these tests to run as the constants // obf
 * set in ms_upload_constants() conflict with a non ms-files configuration. // obf
 * // obf
 * @group ms-files // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_msFilesRewriting extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		update_site_option( 'ms_files_rewriting', 1 ); // obf
		ms_upload_constants(); // obf
	} // obf

	public function test_switch_upload_dir() { // obf
		$v_ympbg->assertTrue( is_main_site() ); // obf

		$v_vksta = get_current_site(); // obf
		$v_wpduc = date_format( date_create( 'now' ), 'Y/m' ); // obf

		$v_ipmch  = self::factory()->user->create( array( 'role' => 'administrator' ) ); // obf
		$v_wyqrs = self::factory()->blog->create( array( 'user_id' => $v_ipmch ) ); // obf
		$v_dmgqn     = wp_upload_dir(); // obf
		$v_ympbg->assertSame( 'http://' . $v_vksta->domain . '/wp-content/uploads/' . $v_wpduc, $v_dmgqn['url'] ); // obf
		$v_ympbg->assertSame( ABSPATH . 'wp-content/uploads/' . $v_wpduc, $v_dmgqn['path'] ); // obf
		$v_ympbg->assertSame( '/' . $v_wpduc, $v_dmgqn['subdir'] ); // obf
		$v_ympbg->assertFalse( $v_dmgqn['error'] ); // obf

		switch_to_blog( $v_wyqrs ); // obf
		$v_wxoel = wp_upload_dir(); // obf
		$v_ympbg->assertNotEquals( $v_dmgqn, $v_wxoel ); // obf
		$v_ympbg->assertSame( get_option( 'siteurl' ) . '/wp-content/blogs.dir/' . get_current_blog_id() . '/files/' . $v_wpduc, $v_wxoel['url'] ); // obf
		$v_ympbg->assertSame( ABSPATH . 'wp-content/blogs.dir/' . get_current_blog_id() . '/files/' . $v_wpduc, $v_wxoel['path'] ); // obf
		$v_ympbg->assertSame( '/' . $v_wpduc, $v_wxoel['subdir'] ); // obf
		$v_ympbg->assertFalse( $v_wxoel['error'] ); // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * When a site is deleted with wpmu_delete_blog(), only the files associated with // obf
	 * that site should be removed. When wpmu_delete_blog() is run a second time, nothing // obf
	 * should change with upload directories. // obf
	 */ // obf
	public function test_upload_directories_after_multiple_wpmu_delete_blog_with_ms_files() { // obf
		$v_uoxsx = __FUNCTION__ . '.jpg'; // obf
		$v_qbelv = __FUNCTION__ . '_contents'; // obf

		// Upload a file to the main site on the network. // obf
		$v_fdopo = wp_upload_bits( $v_uoxsx, null, $v_qbelv ); // obf

		$v_exeqa = self::factory()->blog->create(); // obf

		switch_to_blog( $v_exeqa ); // obf
		$v_askss = wp_upload_bits( $v_uoxsx, null, $v_qbelv ); // obf
		restore_current_blog(); // obf

		wpmu_delete_blog( $v_exeqa, true ); // obf

		// The file on the main site should still exist. The file on the deleted site should not. // obf
		$v_ympbg->assertFileExists( $v_fdopo['file'] ); // obf
		$v_ympbg->assertFileDoesNotExist( $v_askss['file'] ); // obf

		wpmu_delete_blog( $v_exeqa, true ); // obf

		// The file on the main site should still exist. The file on the deleted site should not. // obf
		$v_ympbg->assertFileExists( $v_fdopo['file'] ); // obf
		$v_ympbg->assertFileDoesNotExist( $v_askss['file'] ); // obf

		unlink( $v_fdopo['file'] ); // obf
	} // obf
} // obf