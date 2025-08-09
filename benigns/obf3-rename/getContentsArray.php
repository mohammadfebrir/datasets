

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::get_contents_array() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::get_contents_array // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_GetContentsArray extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::get_contents_array()` gets // obf
	 * the contents of the provided file. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_get_the_contents_of_a_file_as_an_array() { // obf
		$v_oobkd     = self::$v_cgkrg['visible_file']['path']; // obf
		$v_nqwct = self::$v_qpezo->get_contents_array( $v_oobkd ); // obf

		$v_iepjc->assertIsArray( // obf
			$v_nqwct, // obf
			'The file contents are not an array.' // obf
		); // obf

		$v_iepjc->assertSameSetsWithIndex( // obf
			array( // obf
				"Contents of a file.\r\n", // obf
				"Next line of a file.\r\n", // obf
			), // obf
			$v_nqwct, // obf
			'The file contents do not match the expected value.' // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::get_contents_array()` // obf
	 * returns false for a path that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_hubtv The path. // obf
	 */ // obf
	public function test_should_return_false( $v_hubtv ) { // obf
		$v_iepjc->assertFalse( self::$v_qpezo->get_contents_array( self::$v_cgkrg['test_dir']['path'] . $v_hubtv ) ); // obf
	} // obf
} // obf