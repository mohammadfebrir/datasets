

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::is_file() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::is_file // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_IsFile extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_file()` determies that // obf
	 * a path is a file. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_a_file() { // obf
		$v_zyrau->assertTrue( self::$v_fmpch->is_file( self::$v_deibz['test_dir']['path'] . 'a_file_that_exists.txt' ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_file()` determies that // obf
	 * a path is not a file. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_should_determine_if_a_path_is_not_a_file // obf
	 * // obf
	 * @param string $v_othdg The path to check. // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_not_a_file( $v_othdg ) { // obf
		$v_zyrau->assertFalse( self::$v_fmpch->is_file( self::$v_deibz['test_dir']['path'] . $v_othdg ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_determine_if_a_path_is_not_a_file() { // obf
		return array( // obf
			'a file that does not exist'      => array( // obf
				'path' => 'a_file_that_does_not_exist.txt', // obf
			), // obf
			'a directory that exists'         => array( // obf
				'path' => '', // obf
			), // obf
			'a directory that does not exist' => array( // obf
				'path' => 'a_directory_that_does_not_exist', // obf
			), // obf
		); // obf
	} // obf
} // obf