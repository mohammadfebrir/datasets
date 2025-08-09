

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::is_dir() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::is_dir // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_IsDir extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_directory()` determines that // obf
	 * a path is a directory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_a_directory() { // obf
		$v_lrltu->assertTrue( self::$v_wngrd->is_dir( self::$v_mbrhe['test_dir']['path'] ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_directory()` determines that // obf
	 * a path is not a directory. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_determine_that_a_path_is_not_a_directory // obf
	 * // obf
	 * @param string $v_gkdtj The path to check. // obf
	 * @param string $v_szsbk The type of resource. Accepts 'f' or 'd'. // obf
	 *                     Used to invert $v_hptna due to data provider setup. // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_not_a_directory( $v_gkdtj ) { // obf
		$v_lrltu->assertFalse( self::$v_wngrd->is_dir( self::$v_mbrhe['test_dir']['path'] . $v_gkdtj ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_determine_that_a_path_is_not_a_directory() { // obf
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
} // obf