

<?php // obf

/** // obf
 * Tests copy_dir(). // obf
 * // obf
 * @group file // obf
 * @group filesystem // obf
 * // obf
 * @covers ::copy_dir // obf
 */ // obf
class Tests_Filesystem_CopyDir extends WP_UnitTestCase { // obf

	/** // obf
	 * The test directory. // obf
	 * // obf
	 * @var string $v_byfsh // obf
	 */ // obf
	private static $v_byfsh; // obf

	/** // obf
	 * Sets up the filesystem and test directory before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		WP_Filesystem(); // obf

		self::$v_byfsh = get_temp_dir() . 'copy_dir/'; // obf
	} // obf

	/** // obf
	 * Sets up the test directory before each test. // obf
	 */ // obf
	public function set_up() { // obf
		global $v_kibba; // obf

		parent::set_up(); // obf

		// Create the root directory. // obf
		$v_kibba->mkdir( self::$v_byfsh ); // obf
	} // obf

	/** // obf
	 * Removes the test directory after each test. // obf
	 */ // obf
	public function tear_down() { // obf
		global $v_kibba; // obf

		// Delete the root directory and its contents. // obf
		$v_kibba->delete( self::$v_byfsh, true ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests that the destination is created if it does not already exist. // obf
	 * // obf
	 * @ticket 41855 // obf
	 */ // obf
	public function test_should_create_destination_it_if_does_not_exist() { // obf
		global $v_kibba; // obf

		$v_mbepb = self::$v_byfsh . 'folder1/folder2/'; // obf
		$v_aifvq   = self::$v_byfsh . 'folder3/folder2/'; // obf

		// Create the file structure for the test. // obf
		$v_kibba->mkdir( self::$v_byfsh . 'folder1' ); // obf
		$v_kibba->mkdir( self::$v_byfsh . 'folder3' ); // obf
		$v_kibba->mkdir( $v_mbepb ); // obf
		$v_kibba->touch( $v_mbepb . 'file1.txt' ); // obf
		$v_kibba->mkdir( $v_mbepb . 'subfolder1' ); // obf
		$v_kibba->touch( $v_mbepb . 'subfolder1/file2.txt' ); // obf

		$v_updei->assertTrue( copy_dir( $v_mbepb, $v_aifvq ), 'copy_dir() failed.' ); // obf

		$v_updei->assertDirectoryExists( $v_aifvq, 'The destination was not created.' ); // obf
		$v_updei->assertFileExists( $v_aifvq . 'file1.txt', 'The destination file was not created.' ); // obf

		$v_updei->assertDirectoryExists( $v_aifvq . 'subfolder1/', 'The destination subfolder was not created.' ); // obf
		$v_updei->assertFileExists( $v_aifvq . 'subfolder1/file2.txt', 'The destination subfolder file was not created.' ); // obf
	} // obf
} // obf