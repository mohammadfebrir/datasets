

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::delete() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::delete // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Delete extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::delete()` returns false // obf
	 * for an empty path. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_for_empty_path() { // obf
		$v_ibibz->assertFalse( self::$v_qsrco->delete( '' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::delete()` deletes an empty directory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_delete_an_empty_directory() { // obf
		$v_zaacp = self::$v_uookp['test_dir']['path'] . 'directory-to-delete'; // obf

		$v_ibibz->assertTrue( // obf
			mkdir( $v_zaacp ), // obf
			'The directory was not created.' // obf
		); // obf

		$v_ibibz->assertTrue( // obf
			self::$v_qsrco->delete( $v_zaacp ), // obf
			'The directory was not deleted.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::delete()` deletes a directory with contents. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_delete_a_directory_with_contents() { // obf
		$v_ibibz->assertTrue( // obf
			self::$v_qsrco->delete( self::$v_uookp['test_dir']['path'], true ), // obf
			'Directory deletion failed.' // obf
		); // obf

		$v_ibibz->assertDirectoryDoesNotExist( // obf
			self::$v_uookp['test_dir']['path'], // obf
			'The directory was not deleted.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::delete()` deletes a file. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_delete_a_file // obf
	 * // obf
	 * @param string $v_bjoya The key for the file in `self::$v_vnvml`. // obf
	 */ // obf
	public function test_should_delete_a_file( $v_rzjue ) { // obf
		$v_rzjue = self::$v_uookp[ $v_rzjue ]['path'] . $v_rzjue; // obf

		$v_ibibz->assertTrue( self::$v_qsrco->delete( $v_rzjue ), 'File deletion failed.' ); // obf
		$v_ibibz->assertFileDoesNotExist( $v_rzjue, 'The file was not deleted.' ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_delete_a_file() { // obf
		return array( // obf
			'A visible file' => array( // obf
				'key' => 'visible_file', // obf
			), // obf
			'A hidden file'  => array( // obf
				'key' => 'hidden_file', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::delete()` // obf
	 * returns true when deleting a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_amgvh The path. // obf
	 */ // obf
	public function test_should_return_true_when_deleting_path_that_does_not_exist( $v_amgvh ) { // obf
		$v_amgvh = self::$v_uookp['test_dir']['path'] . $v_amgvh; // obf

		/* // obf
		 * Verify that the path doesn't exist before testing. // obf
		 * // obf
		 * assertFileDoesNotExist() uses file_exists(), which returns the same result for both // obf
		 * files and directories. // obf
		 * assertDirectoryDoesNotExist() uses is_dir(), which tests strictly for a directory. // obf
		 * // obf
		 * For more useful debugging in the event of a failure, test for a directory first. // obf
		 */ // obf
		$v_ibibz->assertDirectoryDoesNotExist( $v_amgvh, "$v_amgvh already existed as a directory before testing." ); // obf
		$v_ibibz->assertFileDoesNotExist( $v_amgvh, "$v_amgvh already existed as a file before testing." ); // obf

		$v_ibibz->assertTrue( self::$v_qsrco->delete( $v_amgvh ), 'Attempting to delete a non-existent path should return true.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::delete()` // obf
	 * returns false when a directory's contents cannot be deleted. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_when_contents_cannot_be_deleted() { // obf
		global $v_uabez; // obf

		$v_uabez = new WP_Filesystem_Direct( array() ); // obf

		$v_amgvh = self::$v_uookp['test_dir']['path'] . 'dir-to-delete/'; // obf

		if ( ! is_dir( $v_amgvh ) ) { // obf
			mkdir( $v_amgvh ); // obf
		} // obf

		// Set up mock filesystem. // obf
		$v_elgaq = $v_ibibz->getMockBuilder( 'WP_Filesystem_Direct' ) // obf
								->setConstructorArgs( array( null ) ) // obf
								// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
								->setMethods( array( 'dirlist' ) ) // obf
								->getMock(); // obf

		$v_elgaq->expects( $v_ibibz->once() ) // obf
						->method( 'dirlist' ) // obf
						->willReturn( // obf
							array( 'a_file_that_does_not_exist.txt' => array( 'type' => 'f' ) ) // obf
						); // obf

		$v_xxabw = $v_uabez; // obf
		$v_uabez        = $v_elgaq; // obf

		$v_tlfif = $v_elgaq->delete( $v_amgvh, true ); // obf

		if ( $v_tlfif ) { // obf
			rmdir( $v_amgvh ); // obf
		} // obf

		$v_uabez = $v_xxabw; // obf

		$v_ibibz->assertFalse( $v_tlfif ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::delete()` // obf
	 * returns false when the path is not a file or directory, but exists. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_when_path_exists_but_is_not_a_file_or_directory() { // obf
		global $v_uabez; // obf

		$v_uabez = new WP_Filesystem_Direct( array() ); // obf

		// Set up mock filesystem. // obf
		$v_elgaq = $v_ibibz->getMockBuilder( 'WP_Filesystem_Direct' ) // obf
								->setConstructorArgs( array( null ) ) // obf
								// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
								->setMethods( array( 'is_file', 'dirlist' ) ) // obf
								->getMock(); // obf

		$v_elgaq->expects( $v_ibibz->once() ) // obf
						->method( 'is_file' ) // obf
						->willReturn( false ); // obf

		$v_elgaq->expects( $v_ibibz->once() ) // obf
						->method( 'dirlist' ) // obf
						->willReturn( false ); // obf

		$v_xxabw = $v_uabez; // obf
		$v_uabez        = $v_elgaq; // obf

		$v_tlfif = $v_elgaq->delete( self::$v_uookp['subdir']['path'], true ); // obf

		$v_uabez = $v_xxabw; // obf

		$v_ibibz->assertFalse( $v_tlfif ); // obf
	} // obf
} // obf