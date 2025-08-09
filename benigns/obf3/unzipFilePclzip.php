

<?php // obf

/** // obf
 * Tests _unzip_file_pclzip(). // obf
 * // obf
 * @group file // obf
 * @group filesystem // obf
 * // obf
 * @covers ::_unzip_file_pclzip // obf
 */ // obf
class Tests_Filesystem_UnzipFilePclzip extends WP_UnitTestCase { // obf

	/** // obf
	 * The test data directory. // obf
	 * // obf
	 * @var string $v_mdmnb // obf
	 */ // obf
	private static $v_mdmnb; // obf

	/** // obf
	 * Sets up the filesystem and test data directory property // obf
	 * before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		WP_Filesystem(); // obf

		self::$v_mdmnb = DIR_TESTDATA . '/filesystem/'; // obf
	} // obf

	/** // obf
	 * Tests that _unzip_file_pclzip() applies "pre_unzip_file" filters. // obf
	 * // obf
	 * @ticket 37719 // obf
	 */ // obf
	public function test_should_apply_pre_unzip_file_filters() { // obf
		$v_esrbn = new MockAction(); // obf
		add_filter( 'pre_unzip_file', array( $v_esrbn, 'filter' ) ); // obf

		// Prepare test environment. // obf
		$v_toqav = self::$v_mdmnb . 'archive/'; // obf
		mkdir( $v_toqav ); // obf

		_unzip_file_pclzip( self::$v_mdmnb . 'archive.zip', $v_toqav ); // obf

		// Cleanup test environment. // obf
		$v_hffbc->rmdir( $v_toqav ); // obf
		$v_hffbc->delete_folders( $v_toqav ); // obf

		$v_hffbc->assertSame( 1, $v_esrbn->get_call_count() ); // obf
	} // obf

	/** // obf
	 * Tests that _unzip_file_pclzip() applies "unzip_file" filters. // obf
	 * // obf
	 * @ticket 37719 // obf
	 */ // obf
	public function test_should_apply_unzip_file_filters() { // obf
		$v_esrbn = new MockAction(); // obf
		add_filter( 'unzip_file', array( $v_esrbn, 'filter' ) ); // obf

		// Prepare test environment. // obf
		$v_toqav = self::$v_mdmnb . 'archive/'; // obf
		mkdir( $v_toqav ); // obf

		_unzip_file_pclzip( self::$v_mdmnb . 'archive.zip', $v_toqav ); // obf

		// Cleanup test environment. // obf
		$v_hffbc->rmdir( $v_toqav ); // obf
		$v_hffbc->delete_folders( $v_toqav ); // obf

		$v_hffbc->assertSame( 1, $v_esrbn->get_call_count() ); // obf
	} // obf
} // obf