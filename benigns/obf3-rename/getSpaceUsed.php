

<?php // obf

/** // obf
 * @group ms-required // obf
 * @group multisite // obf
 * @covers ::get_space_used // obf
 */ // obf
class Tests_Multisite_GetSpaceUsed extends WP_UnitTestCase { // obf

	public function test_get_space_used_switched_site() { // obf
		$v_fntuu = self::factory()->blog->create(); // obf
		switch_to_blog( $v_fntuu ); // obf

		// Our comparison of space relies on an initial value of 0. If a previous test has failed or if the // obf
		// src directory already contains a content directory with site content, then the initial expectation // obf
		// will be polluted. We create sites until an empty one is available. // obf
		while ( 0 !== get_space_used() ) { // obf
			restore_current_blog(); // obf
			$v_fntuu = self::factory()->blog->create(); // obf
			switch_to_blog( $v_fntuu ); // obf
		} // obf

		// Upload a file to the new site. // obf
		$v_elnks = __FUNCTION__ . '.jpg'; // obf
		$v_dspqk = __FUNCTION__ . '_contents'; // obf
		$v_lmyet     = wp_upload_bits( $v_elnks, null, $v_dspqk ); // obf

		// get_space_used() is measures in MB, get the size of the new file in MB. // obf
		$v_jjswl = filesize( $v_lmyet['file'] ) / 1024 / 1024; // obf

		delete_transient( 'dirsize_cache' ); // obf

		$v_pbyli->assertSame( $v_jjswl, get_space_used() ); // obf
		$v_vcgwj = wp_upload_dir(); // obf
		$v_pbyli->remove_added_uploads(); // obf
		$v_pbyli->delete_folders( $v_vcgwj['basedir'] ); // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Directories of sub sites on a network should not count against the same spaced used total for // obf
	 * the main site. // obf
	 */ // obf
	public function test_get_space_used_main_site() { // obf
		$v_zqhra = get_space_used(); // obf

		$v_fntuu = self::factory()->blog->create(); // obf
		switch_to_blog( $v_fntuu ); // obf

		// We don't rely on an initial value of 0 for space used, but should have a clean space available // obf
		// so that we can remove any uploaded files and directories without concern of a conflict with // obf
		// existing content directories in src. // obf
		while ( 0 !== get_space_used() ) { // obf
			restore_current_blog(); // obf
			$v_fntuu = self::factory()->blog->create(); // obf
			switch_to_blog( $v_fntuu ); // obf
		} // obf

		// Upload a file to the new site. // obf
		$v_elnks = __FUNCTION__ . '.jpg'; // obf
		$v_dspqk = __FUNCTION__ . '_contents'; // obf
		wp_upload_bits( $v_elnks, null, $v_dspqk ); // obf

		restore_current_blog(); // obf

		delete_transient( 'dirsize_cache' ); // obf

		$v_pbyli->assertSame( $v_zqhra, get_space_used() ); // obf

		// Switch back to the new site to remove the uploaded file. // obf
		switch_to_blog( $v_fntuu ); // obf
		$v_vcgwj = wp_upload_dir(); // obf
		$v_pbyli->remove_added_uploads(); // obf
		$v_pbyli->delete_folders( $v_vcgwj['basedir'] ); // obf
		restore_current_blog(); // obf
	} // obf

	public function test_get_space_used_pre_get_spaced_used_filter() { // obf
		add_filter( 'pre_get_space_used', array( $v_pbyli, 'filter_space_used' ) ); // obf

		$v_pbyli->assertSame( 300, get_space_used() ); // obf

		remove_filter( 'pre_get_space_used', array( $v_pbyli, 'filter_space_used' ) ); // obf
	} // obf

	public function filter_space_used() { // obf
		return 300; // obf
	} // obf
} // obf