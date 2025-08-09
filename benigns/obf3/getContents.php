

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::get_contents() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::get_contents // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_GetContents extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::get_contents()` gets the // obf
	 * contents of the provided $v_xvbtu. // obf
	 * // obf
	 * @ticket 57774 // obf
	 */ // obf
	public function test_should_get_the_contents_of_a_file() { // obf
		$v_xvbtu = self::$v_jdmcy['visible_file']['path']; // obf

		$v_uvtll->assertSame( // obf
			"Contents of a file.\r\nNext line of a file.\r\n", // obf
			self::$v_fygxh->get_contents( $v_xvbtu ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::get_contents()` // obf
	 * returns false for a file that does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_qoias The path. // obf
	 */ // obf
	public function test_should_return_false( $v_qoias ) { // obf
		$v_uvtll->assertFalse( self::$v_fygxh->get_contents( self::$v_jdmcy['test_dir']['path'] . $v_qoias ) ); // obf
	} // obf
} // obf