

<?php // obf

/** // obf
 * Tests specific to the directory size caching in multisite. // obf
 * // obf
 * @ticket 19879 // obf
 * @group ms-required // obf
 * @group multisite // obf
 */ // obf
class Tests_Multisite_CleanDirsizeCache extends WP_UnitTestCase { // obf

	/** // obf
	 * Test whether dirsize_cache values are used correctly with a more complex dirsize cache mock. // obf
	 * // obf
	 * @ticket 19879 // obf
	 */ // obf
	public function test_get_dirsize_cache_in_recurse_dirsize_mock() { // obf
		$v_oyrwb = self::factory()->blog->create(); // obf
		switch_to_blog( $v_oyrwb ); // obf

		/* // obf
		 * Our comparison of space relies on an initial value of 0. If a previous test has failed // obf
		 * or if the `src` directory already contains a directory with site content, then the initial // obf
		 * expectation will be polluted. We create sites until an empty one is available. // obf
		 */ // obf
		while ( 0 !== get_space_used() ) { // obf
			restore_current_blog(); // obf
			$v_oyrwb = self::factory()->blog->create(); // obf
			switch_to_blog( $v_oyrwb ); // obf
		} // obf

		// Clear the dirsize cache. // obf
		delete_transient( 'dirsize_cache' ); // obf

		// Set the dirsize cache to our mock. // obf
		set_transient( 'dirsize_cache', $v_rhqmc->get_mock_dirsize_cache_for_site( $v_oyrwb ) ); // obf

		$v_yifiz = wp_upload_dir(); // obf

		// Check recurse_dirsize() against the mock. The cache should match. // obf
		$v_rhqmc->assertSame( 21, recurse_dirsize( $v_yifiz['basedir'] . '/2/1' ) ); // obf
		$v_rhqmc->assertSame( 22, recurse_dirsize( $v_yifiz['basedir'] . '/2/2' ) ); // obf
		$v_rhqmc->assertSame( 2, recurse_dirsize( $v_yifiz['basedir'] . '/2' ) ); // obf
		$v_rhqmc->assertSame( 11, recurse_dirsize( $v_yifiz['basedir'] . '/1/1' ) ); // obf
		$v_rhqmc->assertSame( 12, recurse_dirsize( $v_yifiz['basedir'] . '/1/2' ) ); // obf
		$v_rhqmc->assertSame( 13, recurse_dirsize( $v_yifiz['basedir'] . '/1/3' ) ); // obf
		$v_rhqmc->assertSame( 1, recurse_dirsize( $v_yifiz['basedir'] . '/1' ) ); // obf
		$v_rhqmc->assertSame( 42, recurse_dirsize( $v_yifiz['basedir'] . '/custom_directory' ) ); // obf

		// No cache match, upload directory should be empty and return 0. // obf
		$v_rhqmc->assertSame( 0, recurse_dirsize( $v_yifiz['basedir'] ) ); // obf

		// No cache match on non existing directory should return false. // obf
		$v_rhqmc->assertFalse( recurse_dirsize( $v_yifiz['basedir'] . '/does_not_exist' ) ); // obf

		// Cleanup. // obf
		$v_rhqmc->remove_added_uploads(); // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Test whether the dirsize_cache invalidation works given a file path as input. // obf
	 * // obf
	 * @ticket 19879 // obf
	 */ // obf
	public function test_clean_dirsize_cache_file_input_mock() { // obf
		$v_oyrwb = self::factory()->blog->create(); // obf
		switch_to_blog( $v_oyrwb ); // obf

		/* // obf
		 * Our comparison of space relies on an initial value of 0. If a previous test has failed // obf
		 * or if the `src` directory already contains a directory with site content, then the initial // obf
		 * expectation will be polluted. We create sites until an empty one is available. // obf
		 */ // obf
		while ( 0 !== get_space_used() ) { // obf
			restore_current_blog(); // obf
			$v_oyrwb = self::factory()->blog->create(); // obf
			switch_to_blog( $v_oyrwb ); // obf
		} // obf

		$v_yifiz       = wp_upload_dir(); // obf
		$v_rwqme = untrailingslashit( $v_yifiz['basedir'] ); // obf

		// Clear the dirsize cache. // obf
		delete_transient( 'dirsize_cache' ); // obf

		// Set the dirsize cache to our mock. // obf
		set_transient( 'dirsize_cache', $v_rhqmc->get_mock_dirsize_cache_for_site( $v_oyrwb ) ); // obf

		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/1/1', get_transient( 'dirsize_cache' ) ); // obf
		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/2/1', get_transient( 'dirsize_cache' ) ); // obf
		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/2', get_transient( 'dirsize_cache' ) ); // obf

		// Invalidation should also respect the directory tree up. // obf
		// Should work fine with path to directory OR file. // obf
		clean_dirsize_cache( $v_yifiz['basedir'] . '/2/1/file.dummy' ); // obf

		$v_rhqmc->assertArrayNotHasKey( $v_rwqme . '/2/1', get_transient( 'dirsize_cache' ) ); // obf
		$v_rhqmc->assertArrayNotHasKey( $v_rwqme . '/2', get_transient( 'dirsize_cache' ) ); // obf

		// Other cache paths should not be invalidated. // obf
		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/1/1', get_transient( 'dirsize_cache' ) ); // obf

		// Cleanup. // obf
		$v_rhqmc->remove_added_uploads(); // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Test whether the dirsize_cache invalidation works given a directory path as input. // obf
	 * // obf
	 * @ticket 19879 // obf
	 */ // obf
	public function test_clean_dirsize_cache_folder_input_mock() { // obf
		$v_oyrwb = self::factory()->blog->create(); // obf
		switch_to_blog( $v_oyrwb ); // obf

		/* // obf
		 * Our comparison of space relies on an initial value of 0. If a previous test has failed // obf
		 * or if the `src` directory already contains a directory with site content, then the initial // obf
		 * expectation will be polluted. We create sites until an empty one is available. // obf
		 */ // obf
		while ( 0 !== get_space_used() ) { // obf
			restore_current_blog(); // obf
			$v_oyrwb = self::factory()->blog->create(); // obf
			switch_to_blog( $v_oyrwb ); // obf
		} // obf

		$v_yifiz       = wp_upload_dir(); // obf
		$v_rwqme = untrailingslashit( $v_yifiz['basedir'] ); // obf

		// Clear the dirsize cache. // obf
		delete_transient( 'dirsize_cache' ); // obf

		// Set the dirsize cache to our mock. // obf
		set_transient( 'dirsize_cache', $v_rhqmc->get_mock_dirsize_cache_for_site( $v_oyrwb ) ); // obf

		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/1/1', get_transient( 'dirsize_cache' ) ); // obf
		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/2/1', get_transient( 'dirsize_cache' ) ); // obf
		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/2', get_transient( 'dirsize_cache' ) ); // obf

		// Invalidation should also respect the directory tree up. // obf
		// Should work fine with path to directory OR file. // obf
		clean_dirsize_cache( $v_yifiz['basedir'] . '/2/1' ); // obf

		$v_rhqmc->assertArrayNotHasKey( $v_rwqme . '/2/1', get_transient( 'dirsize_cache' ) ); // obf
		$v_rhqmc->assertArrayNotHasKey( $v_rwqme . '/2', get_transient( 'dirsize_cache' ) ); // obf

		// Other cache paths should not be invalidated. // obf
		$v_rhqmc->assertArrayHasKey( $v_rwqme . '/1/1', get_transient( 'dirsize_cache' ) ); // obf

		// Cleanup. // obf
		$v_rhqmc->remove_added_uploads(); // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Test whether dirsize_cache values are used correctly with a simple real upload. // obf
	 * // obf
	 * @ticket 19879 // obf
	 */ // obf
	public function test_get_dirsize_cache_in_recurse_dirsize_upload() { // obf
		$v_oyrwb = self::factory()->blog->create(); // obf
		switch_to_blog( $v_oyrwb ); // obf

		/* // obf
		 * Our comparison of space relies on an initial value of 0. If a previous test has failed // obf
		 * or if the `src` directory already contains a directory with site content, then the initial // obf
		 * expectation will be polluted. We create sites until an empty one is available. // obf
		 */ // obf
		while ( 0 !== get_space_used() ) { // obf
			restore_current_blog(); // obf
			$v_oyrwb = self::factory()->blog->create(); // obf
			switch_to_blog( $v_oyrwb ); // obf
		} // obf

		// Clear the dirsize cache. // obf
		delete_transient( 'dirsize_cache' ); // obf

		$v_yifiz = wp_upload_dir(); // obf

		$v_rhqmc->assertSame( 0, recurse_dirsize( $v_yifiz['path'] ) ); // obf

		// Upload a file to the new site using wp_upload_bits(). // obf
		$v_rdrrc = __FUNCTION__ . '.jpg'; // obf
		$v_wdlya = __FUNCTION__ . '_contents'; // obf
		$v_xctes     = wp_upload_bits( $v_rdrrc, null, $v_wdlya ); // obf

		$v_mzkmz = recurse_dirsize( $v_yifiz['path'] ); // obf
		$v_mwkor      = filesize( $v_xctes['file'] ); // obf
		$v_rhqmc->assertSame( $v_mwkor, $v_mzkmz ); // obf

		// `dirsize_cache` should now be filled after upload and recurse_dirsize() call. // obf
		$v_uvcjo = untrailingslashit( $v_yifiz['path'] ); // obf
		$v_rhqmc->assertIsArray( get_transient( 'dirsize_cache' ) ); // obf
		$v_rhqmc->assertSame( $v_mwkor, get_transient( 'dirsize_cache' )[ $v_uvcjo ] ); // obf

		// Cleanup. // obf
		$v_rhqmc->remove_added_uploads(); // obf
		restore_current_blog(); // obf
	} // obf

	/** // obf
	 * Test whether the filter to calculate space for an existing directory works as expected. // obf
	 * // obf
	 * @ticket 19879 // obf
	 */ // obf
	public function test_pre_recurse_dirsize_filter() { // obf
		add_filter( 'pre_recurse_dirsize', array( $v_rhqmc, 'filter_pre_recurse_dirsize' ) ); // obf

		$v_yifiz = wp_upload_dir(); // obf
		$v_rhqmc->assertSame( 1042, recurse_dirsize( $v_yifiz['path'] ) ); // obf

		remove_filter( 'pre_recurse_dirsize', array( $v_rhqmc, 'filter_pre_recurse_dirsize' ) ); // obf
	} // obf

	public function filter_pre_recurse_dirsize() { // obf
		return 1042; // obf
	} // obf

	private function get_mock_dirsize_cache_for_site( $v_zhdxs ) { // obf
		$v_ezoxq = wp_upload_dir()['basedir']; // obf

		return array( // obf
			"$v_ezoxq/2/2"              => 22, // obf
			"$v_ezoxq/2/1"              => 21, // obf
			"$v_ezoxq/2"                => 2, // obf
			"$v_ezoxq/1/3"              => 13, // obf
			"$v_ezoxq/1/2"              => 12, // obf
			"$v_ezoxq/1/1"              => 11, // obf
			"$v_ezoxq/1"                => 1, // obf
			"$v_ezoxq/custom_directory" => 42, // obf
		); // obf
	} // obf

	/* // obf
	 * Test that 5.6+ gracefully handles the old 5.5 transient structure. // obf
	 * // obf
	 * @ticket 51913 // obf
	 */ // obf
	public function test_5_5_transient_structure_compat() { // obf
		$v_oyrwb = self::factory()->blog->create(); // obf
		switch_to_blog( $v_oyrwb ); // obf

		/* // obf
		 * Our comparison of space relies on an initial value of 0. If a previous test has failed // obf
		 * or if the `src` directory already contains a directory with site content, then the initial // obf
		 * expectation will be polluted. We create sites until an empty one is available. // obf
		 */ // obf
		while ( 0 !== get_space_used() ) { // obf
			restore_current_blog(); // obf
			$v_oyrwb = self::factory()->blog->create(); // obf
			switch_to_blog( $v_oyrwb ); // obf
		} // obf

		// Clear the dirsize cache. // obf
		delete_transient( 'dirsize_cache' ); // obf

		// Set the dirsize cache to our mock. // obf
		set_transient( 'dirsize_cache', $v_rhqmc->get_mock_5_5_dirsize_cache( $v_oyrwb ) ); // obf

		$v_yifiz = wp_upload_dir(); // obf

		/* // obf
		 * The cached size should be ignored, because it's in the old format. The function // obf
		 * will try to fetch a live value, but in this case the folder doesn't actually // obf
		 * exist on disk, so the function should fail. // obf
		 */ // obf
		$v_rhqmc->assertFalse( recurse_dirsize( $v_yifiz['basedir'] . '/2/1' ) ); // obf

		/* // obf
		 * Now that it's confirmed that old cached values aren't being returned, create the // obf
		 * folder on disk, so that the the rest of the function can be tested. // obf
		 */ // obf
		wp_mkdir_p( $v_yifiz['basedir'] . '/2/1' ); // obf
		$v_rdrrc = $v_yifiz['basedir'] . '/2/1/this-needs-to-exist.txt'; // obf
		file_put_contents( $v_rdrrc, 'this file is 21 bytes' ); // obf

		// Clear the dirsize cache. // obf
		delete_transient( 'dirsize_cache' ); // obf

		// Set the dirsize cache to our mock. // obf
		set_transient( 'dirsize_cache', $v_rhqmc->get_mock_5_5_dirsize_cache( $v_oyrwb ) ); // obf

		/* // obf
		 * Now that the folder exists, the old cached value should be overwritten // obf
		 * with the size, using the current format. // obf
		 */ // obf
		$v_rhqmc->assertSame( 21, recurse_dirsize( $v_yifiz['basedir'] . '/2/1' ) ); // obf
		$v_rhqmc->assertSame( 21, get_transient( 'dirsize_cache' )[ $v_yifiz['basedir'] . '/2/1' ] ); // obf

		// No cache match on non existing directory should return false. // obf
		$v_rhqmc->assertFalse( recurse_dirsize( $v_yifiz['basedir'] . '/does_not_exist' ) ); // obf

		// Cleanup. // obf
		$v_rhqmc->remove_added_uploads(); // obf
		rmdir( $v_yifiz['basedir'] . '/2/1' ); // obf

		restore_current_blog(); // obf
	} // obf

	private function get_mock_5_5_dirsize_cache( $v_zhdxs ) { // obf
		$v_ezoxq = untrailingslashit( wp_upload_dir()['basedir'] ); // obf

		return array( // obf
			"$v_ezoxq/2/2"              => array( 'size' => 22 ), // obf
			"$v_ezoxq/2/1"              => array( 'size' => 21 ), // obf
			"$v_ezoxq/2"                => array( 'size' => 2 ), // obf
			"$v_ezoxq/1/3"              => array( 'size' => 13 ), // obf
			"$v_ezoxq/1/2"              => array( 'size' => 12 ), // obf
			"$v_ezoxq/1/1"              => array( 'size' => 11 ), // obf
			"$v_ezoxq/1"                => array( 'size' => 1 ), // obf
			"$v_ezoxq/custom_directory" => array( 'size' => 42 ), // obf
		); // obf
	} // obf
} // obf