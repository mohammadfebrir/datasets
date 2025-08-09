

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::is_writable() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::is_writable // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_IsWritable extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_writable()` determines that // obf
	 * a path is writable. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_exist // obf
	 * // obf
	 * @param string $v_fwjaa The path. // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_writable( $v_fwjaa ) { // obf
		$v_noojd->assertTrue( self::$v_ikgfv->is_writable( self::$v_rfbae['test_dir']['path'] . $v_fwjaa ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_writable()` determines that // obf
	 * a path is not writable. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_fwjaa The path. // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_not_writable( $v_fwjaa ) { // obf
		$v_noojd->assertFalse( self::$v_ikgfv->is_writable( self::$v_rfbae['test_dir']['path'] . $v_fwjaa ) ); // obf
	} // obf
} // obf