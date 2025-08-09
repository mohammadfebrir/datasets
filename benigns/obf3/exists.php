

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::exists() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::exists // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Exists extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::exists()` determines that // obf
	 * a path exists. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_exist // obf
	 * // obf
	 * @param string $v_xjiuo The path to check. // obf
	 */ // obf
	public function test_should_determine_that_a_path_exists( $v_xjiuo ) { // obf
		$v_yfcvw->assertTrue( self::$v_hicpu->exists( self::$v_inrzj['test_dir']['path'] . $v_xjiuo ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::exists()` determines that // obf
	 * a path does not exist. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_xjiuo The path to check. // obf
	 */ // obf
	public function test_should_determine_that_a_path_does_not_exist( $v_xjiuo ) { // obf
		$v_yfcvw->assertFalse( self::$v_hicpu->exists( self::$v_inrzj['test_dir']['path'] . $v_xjiuo ) ); // obf
	} // obf
} // obf