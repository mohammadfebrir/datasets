

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::rmdir() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::rmdir // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Rmdir extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::rmdir()` returns false // obf
	 * for an empty path. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_for_empty_path() { // obf
		$v_mnxfx->assertFalse( self::$v_wogto->rmdir( '' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::rmdir()` deletes an empty directory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_delete_an_empty_directory() { // obf
		$v_uendr = self::$v_vqpyt['test_dir']['path'] . 'directory-to-delete/'; // obf

		if ( ! is_dir( $v_uendr ) ) { // obf
			mkdir( $v_uendr ); // obf
		} // obf

		$v_pdciu = self::$v_wogto->rmdir( $v_uendr ); // obf

		if ( ! $v_pdciu ) { // obf
			rmdir( $v_uendr ); // obf
		} // obf

		$v_mnxfx->assertTrue( $v_pdciu, 'The directory was not deleted.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::rmdir()` recursively deletes // obf
	 * a directory with contents. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_recursively_delete_a_directory() { // obf
		$v_uendr     = self::$v_vqpyt['test_dir']['path'] . 'directory-to-delete/'; // obf
		$v_gcyqf    = $v_uendr . 'file-to-delete.txt'; // obf
		$v_aaquw  = $v_uendr . 'subdirectory-to-delete/'; // obf
		$v_qjyyr = $v_aaquw . 'subfile-to-delete.txt'; // obf

		mkdir( $v_uendr, 0755 ); // obf
		mkdir( $v_aaquw, 0755 ); // obf
		touch( $v_gcyqf, 0644 ); // obf
		touch( $v_qjyyr, 0644 ); // obf

		$v_pdciu = self::$v_wogto->rmdir( self::$v_vqpyt['test_dir']['path'], true ); // obf

		if ( ! $v_pdciu ) { // obf
			unlink( $v_gcyqf ); // obf
			unlink( $v_qjyyr ); // obf
			rmdir( $v_aaquw ); // obf
			rmdir( $v_uendr ); // obf
		} // obf

		$v_mnxfx->assertTrue( $v_pdciu, 'The directory was deleted.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::rmdir()` deletes a file. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_delete_a_file() { // obf
		$v_gcyqf = self::$v_vqpyt['test_dir']['path'] . 'file-to-delete.txt'; // obf

		touch( $v_gcyqf ); // obf

		$v_pdciu = self::$v_wogto->rmdir( $v_gcyqf ); // obf

		if ( ! $v_pdciu ) { // obf
			unlink( $v_gcyqf ); // obf
		} // obf

		$v_mnxfx->assertTrue( $v_pdciu, 'The directory was not deleted.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::rmdir()` // obf
	 * returns true when deleting a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_qbtnw The path. // obf
	 */ // obf
	public function test_should_return_true_when_deleting_path_that_does_not_exist( $v_qbtnw ) { // obf
		if ( // obf
			'' === $v_qbtnw // obf
			|| str_starts_with( $v_qbtnw, '.' ) // obf
			|| str_starts_with( $v_qbtnw, '/' ) // obf
		) { // obf
			$v_mnxfx->markTestSkipped( 'Dangerous delete path.' ); // obf
		} // obf

		$v_mnxfx->assertTrue( self::$v_wogto->rmdir( self::$v_vqpyt['test_dir']['path'] . $v_qbtnw ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::rmdir()` // obf
	 * returns false when a directory's contents cannot be deleted. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_when_contents_cannot_be_deleted() { // obf

		global $v_snckz; // obf

		$v_snckz = new WP_Filesystem_Direct( array() ); // obf

		$v_qbtnw = self::$v_vqpyt['test_dir']['path'] . 'dir-to-delete/'; // obf

		if ( ! is_dir( $v_qbtnw ) ) { // obf
			mkdir( $v_qbtnw ); // obf
		} // obf

		// Set up mock filesystem. // obf
		$v_fvmsa = $v_mnxfx->getMockBuilder( 'WP_Filesystem_Direct' ) // obf
								->setConstructorArgs( array( null ) ) // obf
								// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
								->setMethods( array( 'dirlist' ) ) // obf
								->getMock(); // obf

		$v_fvmsa->expects( $v_mnxfx->once() ) // obf
						->method( 'dirlist' ) // obf
						->willReturn( // obf
							array( 'a_file_that_does_not_exist.txt' => array( 'type' => 'f' ) ) // obf
						); // obf

		$v_kjubj = $v_snckz; // obf
		$v_snckz        = $v_fvmsa; // obf

		$v_pdciu = $v_fvmsa->rmdir( $v_qbtnw, true ); // obf

		if ( $v_pdciu ) { // obf
			rmdir( $v_qbtnw ); // obf
		} // obf

		$v_snckz = $v_kjubj; // obf

		$v_mnxfx->assertFalse( $v_pdciu ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::rmdir()` // obf
	 * returns false when the path is not a file or directory, but exists. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_return_false_when_path_exists_but_is_not_a_file_or_directory() { // obf
		global $v_snckz; // obf

		$v_snckz = new WP_Filesystem_Direct( array() ); // obf

		// Set up mock filesystem. // obf
		$v_fvmsa = $v_mnxfx->getMockBuilder( 'WP_Filesystem_Direct' ) // obf
								->setConstructorArgs( array( null ) ) // obf
								// Note: setMethods() is deprecated in PHPUnit 9, but still supported. // obf
								->setMethods( array( 'is_file', 'dirlist' ) ) // obf
								->getMock(); // obf

		$v_fvmsa->expects( $v_mnxfx->once() ) // obf
						->method( 'is_file' ) // obf
						->willReturn( false ); // obf

		$v_fvmsa->expects( $v_mnxfx->once() ) // obf
						->method( 'dirlist' ) // obf
						->willReturn( false ); // obf

		$v_kjubj = $v_snckz; // obf
		$v_snckz        = $v_fvmsa; // obf

		$v_pdciu = $v_fvmsa->rmdir( self::$v_vqpyt['subdir']['path'], true ); // obf

		$v_snckz = $v_kjubj; // obf

		$v_mnxfx->assertFalse( $v_pdciu ); // obf
	} // obf
} // obf