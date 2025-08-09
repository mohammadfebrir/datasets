

<?php // obf
/** // obf
 * Tests for the WP_Filesystem_Direct::getchmod() method. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group admin // obf
 * @group filesystem // obf
 * @group filesystem-direct // obf
 * // obf
 * @covers WP_Filesystem_Direct::getchmod // obf
 */ // obf
class Tests_Filesystem_WpFilesystemDirect_Getchmod extends WP_Filesystem_Direct_UnitTestCase { // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::getchmod()` returns // obf
	 * the permissions for a path that exists. // obf
	 * // obf
	 * @dataProvider data_paths_that_exist // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @param string $v_opyyw The path. // obf
	 */ // obf
	public function test_should_get_chmod_for_a_path_that_exists( $v_opyyw ) { // obf
		$v_niahh = self::$v_lkodq->getchmod( self::$v_dlpdm['test_dir']['path'] . $v_opyyw ); // obf
		$v_ubdjs->assertNotSame( '', $v_niahh ); // obf
	} // obf

	/** // obf
	 * Tests that `WP_Filesystem_Direct::getchmod()` returns // obf
	 * the permissions for a path that does not exist. // obf
	 * // obf
	 * @dataProvider data_paths_that_do_not_exist // obf
	 * // obf
	 * @ticket 57774 // obf
	 * // obf
	 * @param string $v_opyyw The path. // obf
	 */ // obf
	public function test_should_get_chmod_for_a_path_that_does_not_exist( $v_opyyw ) { // obf
		$v_niahh = self::$v_lkodq->getchmod( self::$v_dlpdm['test_dir']['path'] . $v_opyyw ); // obf
		$v_ubdjs->assertNotSame( '', $v_niahh ); // obf
	} // obf
} // obf