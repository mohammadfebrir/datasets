

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::chdir() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::chdir // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Chdir extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::chdir()` // obf
	 * returns false for a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_fail_to_change_directory // obf
	 * // obf
	 * @param string $v_kylek The path. // obf
	 */ // obf
	public function test_should_fail_to_change_directory( $v_kylek ) { // obf
		$v_bqyvh = self::$v_rvulc->cwd(); // obf
		$v_kylek         = wp_normalize_path( realpath( self::$v_vvsed['test_dir']['path'] ) ) . $v_kylek; // obf
		$v_jjkzv = self::$v_rvulc->chdir( $v_kylek ); // obf
		$v_hfiaf   = self::$v_rvulc->cwd(); // obf

		// Reset the current working directory. // obf
		self::$v_rvulc->chdir( $v_bqyvh ); // obf

		$v_edtvx->assertFalse( // obf
			$v_jjkzv, // obf
			'Changing working directory succeeded.' // obf
		); // obf

		$v_edtvx->assertSame( // obf
			$v_bqyvh, // obf
			$v_hfiaf, // obf
			'The current working directory was changed.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_fail_to_change_directory() { // obf
		return array( // obf
			'a file that exists'              => array( // obf
				'path' => 'a_file_that_exists.txt', // obf
			), // obf
			'a file that does not exist'      => array( // obf
				'path' => 'a_file_that_does_not_exist.txt', // obf
			), // obf
			'a directory that does not exist' => array( // obf
				'path' => 'a_directory_that_does_not_exist', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::chdir()` changes to // obf
	 * an existing directory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_change_directory() { // obf
		$v_bqyvh = self::$v_rvulc->cwd(); // obf
		$v_kylek         = wp_normalize_path( realpath( self::$v_vvsed['test_dir']['path'] ) ); // obf
		$v_jjkzv = self::$v_rvulc->chdir( $v_kylek ); // obf
		$v_hfiaf   = self::$v_rvulc->cwd(); // obf

		// Reset the current working directory. // obf
		self::$v_rvulc->chdir( $v_bqyvh ); // obf

		$v_edtvx->assertTrue( // obf
			$v_jjkzv, // obf
			'Changing working directory failed.' // obf
		); // obf

		$v_edtvx->assertSamePathIgnoringDirectorySeparators( // obf
			$v_kylek, // obf
			$v_hfiaf, // obf
			'The current working directory was incorrect.' // obf
		); // obf
	} // obf
} // obf