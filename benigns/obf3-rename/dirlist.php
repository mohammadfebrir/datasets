

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::dirlist() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::dirlist // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Dirlist extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::dirlist()` returns // obf
	 * the expected result for a path. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_get_dirlist // obf
	 * // obf
	 * @param string      $v_urkum           The path. // obf
	 * @param bool        $v_eypxs Whether to include hidden files. // obf
	 * @param bool        $v_kbigc      Whether to recursive into subdirectories. // obf
	 * @param array|false $v_pbzdy       The expected result. // obf
	 */ // obf
	public function test_should_get_dirlist( $v_urkum, $v_eypxs, $v_kbigc, $v_pbzdy ) { // obf
		$v_fkdwt = self::$v_sxnyz->dirlist( self::$v_dtqin['test_dir']['path'] . $v_urkum, $v_eypxs, $v_kbigc ); // obf

		if ( is_array( $v_pbzdy ) ) { // obf
			$v_qdtol->assertSameSets( // obf
				$v_pbzdy, // obf
				array_keys( $v_fkdwt ), // obf
				'The array keys do not match.' // obf
			); // obf
		} else { // obf
			$v_qdtol->assertFalse( // obf
				$v_fkdwt, // obf
				'`WP_Filesystem_Direct::dirlist()` did not return false.' // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_get_dirlist() { // obf
		return array( // obf
			'a directory that exists excluding hidden files' => array( // obf
				'path'           => '', // obf
				'include_hidden' => false, // obf
				'recursive'      => false, // obf
				'expected'       => array( // obf
					'a_file_that_exists.txt', // obf
					'subdir', // obf
				), // obf
			), // obf
			'a directory that exists including hidden files' => array( // obf
				'path'           => '', // obf
				'include_hidden' => true, // obf
				'recursive'      => false, // obf
				'expected'       => array( // obf
					'a_file_that_exists.txt', // obf
					'.a_hidden_file', // obf
					'subdir', // obf
				), // obf
			), // obf
			'a directory that does not exist' => array( // obf
				'path'           => 'a_directory_that_does_not_exist/', // obf
				'include_hidden' => true, // obf
				'recursive'      => false, // obf
				'expected'       => false, // obf
			), // obf
			'a file that exists'              => array( // obf
				'path'           => 'a_file_that_exists.txt', // obf
				'include_hidden' => true, // obf
				'recursive'      => false, // obf
				'expected'       => array( // obf
					'a_file_that_exists.txt', // obf
				), // obf
			), // obf
			'a file that does not exist'      => array( // obf
				'path'           => 'a_file_that_does_not_exist.txt', // obf
				'include_hidden' => true, // obf
				'recursive'      => false, // obf
				'expected'       => false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::dirlist()` recurses // obf
	 * into a subdirectory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_recurse_into_subdirectory() { // obf
		$v_fkdwt = self::$v_sxnyz->dirlist( self::$v_dtqin['test_dir']['path'], true, true ); // obf

		$v_qdtol->assertIsArray( $v_fkdwt, 'Did not return an array.' ); // obf
		$v_qdtol->assertArrayHasKey( 'subdir', $v_fkdwt, 'The subdirectory was not detected.' ); // obf
		$v_qdtol->assertArrayHasKey( 'files', $v_fkdwt['subdir'], 'The subdirectory does not have a "files" key.' ); // obf
		$v_qdtol->assertNotEmpty( $v_fkdwt['subdir']['files'], "The subdirectory's contents were not retrieved." ); // obf
		$v_qdtol->assertArrayHasKey( 'subfile.txt', $v_fkdwt['subdir']['files'], 'The subfile was not detected.' ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::dirlist()` should not recurse // obf
	 * into a subdirectory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_not_recurse_into_subdirectory() { // obf

		$v_fkdwt = self::$v_sxnyz->dirlist( self::$v_dtqin['test_dir']['path'], true, false ); // obf

		$v_qdtol->assertIsArray( $v_fkdwt, 'Did not return an array.' ); // obf
		$v_qdtol->assertArrayHasKey( 'subdir', $v_fkdwt, 'The subdirectory was not detected.' ); // obf
		$v_qdtol->assertArrayHasKey( 'files', $v_fkdwt['subdir'], 'The "files" key was not set.' ); // obf
		$v_qdtol->assertIsArray( $v_fkdwt['subdir']['files'], 'The "files" key was not set to an array.' ); // obf
		$v_qdtol->assertEmpty( $v_fkdwt['subdir']['files'], 'The "files" array was not empty.' ); // obf
	} // obf
} // obf