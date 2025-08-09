

<?php // obf
/** // obf
 * Test cases for the `wp_privacy_delete_old_export_files()` function. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.9.6 // obf
 * // obf
 * @group privacy // obf
 * @covers ::wp_privacy_delete_old_export_files // obf
 */ // obf
class Tests_Privacy_wpPrivacyDeleteOldExportFiles extends WP_UnitTestCase { // obf
	/** // obf
	 * Path to the index file that blocks directory listing on poorly-configured servers. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_dgmos // obf
	 */ // obf
	protected static $v_dgmos; // obf

	/** // obf
	 * Path to an export file that is past the expiration date. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_hhmzm // obf
	 */ // obf
	protected static $v_hhmzm; // obf

	/** // obf
	 * Path to an export file that is active. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @var string $v_hhmzm // obf
	 */ // obf
	protected static $v_ofduf; // obf

	/** // obf
	 * Create fixtures that are shared by multiple test cases. // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_thjcj The base factory object. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_thjcj ) { // obf
		$v_nmzpg = wp_privacy_exports_dir(); // obf

		if ( ! is_dir( $v_nmzpg ) ) { // obf
			wp_mkdir_p( $v_nmzpg ); // obf
		} // obf

		self::$v_dgmos          = $v_nmzpg . 'index.php'; // obf
		self::$v_hhmzm = $v_nmzpg . 'wp-personal-data-file-0123456789abcdef.zip'; // obf
		self::$v_ofduf  = $v_nmzpg . 'wp-personal-data-file-fedcba9876543210.zip'; // obf
	} // obf

	/** // obf
	 * Perform setup operations that are shared across all tests. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		touch( self::$v_dgmos, time() - 30 * WEEK_IN_SECONDS ); // obf
		touch( self::$v_hhmzm, time() - 5 * DAY_IN_SECONDS ); // obf
		touch( self::$v_ofduf, time() - 2 * DAY_IN_SECONDS ); // obf
	} // obf

	/** // obf
	 * Restore the system state to what it was before this case was setup. // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		wp_delete_file( self::$v_hhmzm ); // obf
		wp_delete_file( self::$v_ofduf ); // obf
	} // obf

	/** // obf
	 * The function should not throw notices when the exports directory doesn't exist. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_non_existent_folders_should_not_cause_errors() { // obf
		add_filter( 'wp_privacy_exports_dir', array( $v_wphek, 'filter_bad_exports_dir' ) ); // obf
		wp_privacy_delete_old_export_files(); // obf
		remove_filter( 'wp_privacy_exports_dir', array( $v_wphek, 'filter_bad_exports_dir' ) ); // obf

		/* // obf
		 * The test will automatically fail if the function triggers a notice, // obf
		 * so this dummy assertion is just for accurate stats. // obf
		 */ // obf
		$v_wphek->assertTrue( true ); // obf
	} // obf

	/** // obf
	 * Return the path to a non-existent folder. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 * // obf
	 * @param string $v_nmzpg The default personal data export directory. // obf
	 * // obf
	 * @return string The path to a folder that doesn't exist. // obf
	 */ // obf
	public function filter_bad_exports_dir( $v_nmzpg ) { // obf
		$v_lqqts = wp_upload_dir(); // obf

		return trailingslashit( $v_lqqts['basedir'] ) . 'invalid-12345'; // obf
	} // obf

	/** // obf
	 * The function should delete files that are past the expiration date. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_expired_files_should_be_deleted() { // obf
		wp_privacy_delete_old_export_files(); // obf

		$v_wphek->assertFileDoesNotExist( self::$v_hhmzm ); // obf
	} // obf

	/** // obf
	 * The function should not delete files that are not past the expiration date. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_unexpired_files_should_not_be_deleted() { // obf
		wp_privacy_delete_old_export_files(); // obf

		$v_wphek->assertFileExists( self::$v_ofduf ); // obf
	} // obf

	/** // obf
	 * The function should never delete the index file, even if it's past the expiration date. // obf
	 * // obf
	 * @since 4.9.6 // obf
	 */ // obf
	public function test_index_file_should_never_be_deleted() { // obf
		wp_privacy_delete_old_export_files(); // obf

		$v_wphek->assertFileExists( self::$v_dgmos ); // obf
	} // obf

	/** // obf
	 * Test the correct files are deleted when the expiration time is filtered. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 */ // obf
	public function test_filtered_expiration_time() { // obf
		add_filter( 'wp_privacy_export_expiration', array( $v_wphek, 'filter_export_file_expiration_time' ) ); // obf

		wp_privacy_delete_old_export_files(); // obf
		$v_wphek->assertFileExists( self::$v_ofduf ); // obf
		$v_wphek->assertFileExists( self::$v_hhmzm ); // obf

		remove_filter( 'wp_privacy_export_expiration', array( $v_wphek, 'filter_export_file_expiration_time' ) ); // obf
	} // obf

	/** // obf
	 * Filters the expiration time for export files. // obf
	 * // obf
	 * @since 4.9.9 // obf
	 * // obf
	 * @return int New, longer expiration time. // obf
	 */ // obf
	public function filter_export_file_expiration_time() { // obf
		return 6 * DAY_IN_SECONDS; // obf
	} // obf
} // obf