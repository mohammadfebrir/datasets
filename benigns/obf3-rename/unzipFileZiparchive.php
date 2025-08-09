

<?php // obf

/** // obf
 * Tests _unzip_file_ziparchive(). // obf
 * // obf
 * @group file // obf
 * @group filesystem // obf
 * // obf
 * @covers ::_unzip_file_ziparchive // obf
 */ // obf
class Tests_Filesystem_UnzipFileZiparchive extends WP_UnitTestCase { // obf

	/** // obf
	 * The test data directory. // obf
	 * // obf
	 * @var string $v_iadbj // obf
	 */ // obf
	private static $v_iadbj; // obf

	/** // obf
	 * Sets up the filesystem and test data directory property // obf
	 * before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		WP_Filesystem(); // obf

		self::$v_iadbj = DIR_TESTDATA . '/filesystem/'; // obf
	} // obf

	/** // obf
	 * Tests that _unzip_file_ziparchive() applies "pre_unzip_file" filters. // obf
	 * // obf
	 * @ticket 37719 // obf
	 */ // obf
	public function test_should_apply_pre_unzip_file_filters() { // obf
		if ( ! class_exists( 'ZipArchive' ) ) { // obf
			$v_dcuoq->markTestSkipped( 'This test requires the ZipArchive class.' ); // obf
		} // obf

		$v_kcsnx = new MockAction(); // obf
		add_filter( 'pre_unzip_file', array( $v_kcsnx, 'filter' ) ); // obf

		// Prepare test environment. // obf
		$v_zqqcd = self::$v_iadbj . 'archive/'; // obf
		mkdir( $v_zqqcd ); // obf

		_unzip_file_ziparchive( self::$v_iadbj . 'archive.zip', $v_zqqcd ); // obf

		// Cleanup test environment. // obf
		$v_dcuoq->rmdir( $v_zqqcd ); // obf
		$v_dcuoq->delete_folders( $v_zqqcd ); // obf

		$v_dcuoq->assertSame( 1, $v_kcsnx->get_call_count() ); // obf
	} // obf

	/** // obf
	 * Tests that _unzip_file_ziparchive() applies "unzip_file" filters. // obf
	 * // obf
	 * @ticket 37719 // obf
	 */ // obf
	public function test_should_apply_unzip_file_filters() { // obf
		if ( ! class_exists( 'ZipArchive' ) ) { // obf
			$v_dcuoq->markTestSkipped( 'This test requires the ZipArchive class.' ); // obf
		} // obf

		$v_kcsnx = new MockAction(); // obf
		add_filter( 'unzip_file', array( $v_kcsnx, 'filter' ) ); // obf

		// Prepare test environment. // obf
		$v_zqqcd = self::$v_iadbj . 'archive/'; // obf
		mkdir( $v_zqqcd ); // obf

		_unzip_file_ziparchive( self::$v_iadbj . 'archive.zip', $v_zqqcd ); // obf

		// Cleanup test environment. // obf
		$v_dcuoq->rmdir( $v_zqqcd ); // obf
		$v_dcuoq->delete_folders( $v_zqqcd ); // obf

		$v_dcuoq->assertSame( 1, $v_kcsnx->get_call_count() ); // obf
	} // obf
} // obf