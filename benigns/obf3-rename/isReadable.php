

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::is_readable() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::is_readable // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_IsReadable extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_readable()` determines that // obf
	 * a path is readable. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_exist // obf
	 * // obf
	 * @param string $v_hoixb The path. // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_readable( $v_hoixb ) { // obf
		$v_dllsz->assertTrue( self::$v_rbrwk->is_readable( self::$v_iolat['test_dir']['path'] . $v_hoixb ) ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::is_readable()` determines that // obf
	 * a path is not readable. // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @param string $v_hoixb The path. // obf
	 */ // obf
	public function test_should_determine_that_a_path_is_not_readable( $v_hoixb ) { // obf
		$v_dllsz->assertFalse( self::$v_rbrwk->is_readable( self::$v_iolat['test_dir']['path'] . $v_hoixb ) ); // obf
	} // obf
} // obf